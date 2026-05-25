<?php
// src/Service/Stock/StockTransferService.php

namespace App\Service\Stock;

use App\Entity\HmaService;
use App\Entity\Location;
use App\Entity\StockBatch;
use App\Entity\StockTransfer;
use App\Entity\User;
use App\Repository\LocationRepository;
use App\Repository\StockBatchRepository;
use App\Repository\StockTransferRepository;
use App\Service\NotificationService;
use App\Service\StockMovementService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class StockTransferService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockMovementService $stockMovementService,
        private NotificationService $notificationService,
        private LoggerInterface $logger,
        private StockBatchRepository $stockBatchRepository,
        private LocationRepository $locationRepository,
        private StockTransferRepository $transferRepository
    ) {
    }

    /**
     * Génère un numéro de transfert unique
     */
    private function generateTransferNumber(HmaService $hmaService): string
    {
        $prefix = 'TRF';
        $companyCode = strtoupper(substr(preg_replace('/[^A-Za-z0-9]/', '', $hmaService->getCompanyName()), 0, 3));
        $date = (new \DateTime())->format('Ymd');
        
        $lastTransfer = $this->transferRepository
            ->createQueryBuilder('t')
            ->where('t.transfer_number LIKE :pattern')
            ->setParameter('pattern', "{$prefix}-{$companyCode}-{$date}-%")
            ->orderBy('t.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        if ($lastTransfer) {
            $lastNumber = (int)substr($lastTransfer->getTransferNumber(), -4);
            $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '0001';
        }
        
        return "{$prefix}-{$companyCode}-{$date}-{$newNumber}";
    }

    /**
     * Crée une demande de transfert
     */
    public function createTransfer(
        StockBatch $stockBatch,
        Location $destinationLocation,
        int $quantity,
        string $reason,
        User $user,
        ?Location $sourceLocation = null
    ): StockTransfer {
        // 1. Validation
        if ($quantity <= 0) {
            throw new \Exception('La quantité doit être positive.');
        }

        $sourceLoc = $sourceLocation ?? $stockBatch->getLocationEntity();
        if (!$sourceLoc) {
            throw new \Exception('Le lot n\'a pas d\'emplacement source défini.');
        }

        if ($stockBatch->getCurrentQuantity() < $quantity) {
            throw new \Exception(sprintf(
                'Stock insuffisant. Stock actuel : %d, Quantité demandée : %d',
                $stockBatch->getCurrentQuantity(),
                $quantity
            ));
        }

        if ($sourceLoc->getId() === $destinationLocation->getId()) {
            throw new \Exception('Les emplacements source et destination ne peuvent pas être identiques.');
        }

        // 2. Générer le numéro de transfert
        $transferNumber = $this->generateTransferNumber($stockBatch->getHmaService());

        // 3. Créer le transfert
        $transfer = new StockTransfer();
        $transfer->setTransferNumber($transferNumber);
        $transfer->setStockBatch($stockBatch);
        $transfer->setQuantity($quantity);
        $transfer->setSourceLocation($sourceLoc);
        $transfer->setDestinationLocation($destinationLocation);
        $transfer->setReason($reason);
        $transfer->setCreatedBy($user);
        $transfer->setStatus(StockTransfer::STATUS_PENDING);
        $transfer->setHmaService($stockBatch->getHmaService());

        $this->entityManager->persist($transfer);
        $this->entityManager->flush();

        // 4. Envoyer les notifications
        $this->sendTransferCreatedNotification($transfer, $user);

        $this->logger->info('Transfert de stock créé', [
            'transfer_id' => $transfer->getId(),
            'transfer_number' => $transferNumber,
            'batch_number' => $stockBatch->getBatchNumber(),
            'product_name' => $stockBatch->getProduct()->getName(),
            'quantity' => $quantity,
            'source' => $sourceLoc->getDisplayName(),
            'destination' => $destinationLocation->getDisplayName(),
            'reason' => $reason,
            'user' => $user->getEmail()
        ]);

        return $transfer;
    }

    /**
     * Départ du transfert (expédition)
     */
    public function startTransfer(StockTransfer $transfer, User $user): StockTransfer
    {
        if ($transfer->getStatus() !== StockTransfer::STATUS_PENDING) {
            throw new \Exception('Ce transfert ne peut pas être expédié.');
        }

        $stockBatch = $transfer->getStockBatch();

        // Créer le mouvement de stock SORTANT
        $movement = $this->stockMovementService->createTransferOut(
            $stockBatch,
            $transfer->getQuantity(),
            $transfer->getDestinationLocation(),
            $transfer->getReason(),
            $user,
            $transfer->getId()
        );

        $transfer->setStatus(StockTransfer::STATUS_IN_TRANSIT);
        $this->entityManager->flush();

        $this->sendTransferStartedNotification($transfer, $user);

        $this->logger->info('Transfert expédié', [
            'transfer_id' => $transfer->getId(),
            'transfer_number' => $transfer->getTransferNumber(),
            'user' => $user->getEmail()
        ]);

        return $transfer;
    }

    /**
     * Réceptionne un transfert
     */
    public function receiveTransfer(StockTransfer $transfer, User $user, ?Location $newLocation = null): StockTransfer
    {
        if ($transfer->getStatus() !== StockTransfer::STATUS_IN_TRANSIT) {
            throw new \Exception('Ce transfert ne peut pas être réceptionné.');
        }

        $destinationLocation = $newLocation ?? $transfer->getDestinationLocation();
        $stockBatch = $transfer->getStockBatch();

        // Vérifier si le lot existe déjà à destination
        $existingBatch = $this->stockBatchRepository->findOneBy([
            'batch_number' => $stockBatch->getBatchNumber(),
            'locationEntity' => $destinationLocation,
            'hma_service' => $stockBatch->getHmaService()
        ]);

        if ($existingBatch) {
            // Si le lot existe déjà, on ajoute la quantité
            $targetBatch = $existingBatch;
            $movement = $this->stockMovementService->createTransferIn(
                $targetBatch,
                $transfer->getQuantity(),
                $transfer->getSourceLocation(),
                $transfer->getReason(),
                $user,
                $transfer->getId()
            );
        } else {
            // ✅ CORRECTION : Créer un nouveau lot à destination sans utiliser setId()
            $newBatch = new StockBatch();
            $newBatch->setBatchNumber($stockBatch->getBatchNumber());
            $newBatch->setProduct($stockBatch->getProduct());
            $newBatch->setUnitPrice($stockBatch->getUnitPrice());
            $newBatch->setInitialQuantity($transfer->getQuantity());
            $newBatch->setCurrentQuantity($transfer->getQuantity());
            $newBatch->setIsActive(true);
            $newBatch->setLocationEntity($destinationLocation);
            $newBatch->setHmaService($stockBatch->getHmaService());
            $newBatch->setCreatedAt(new \DateTime());
            
            // Copier les dates si elles existent
            if ($stockBatch->getManufacturingDate()) {
                $newBatch->setManufacturingDate($stockBatch->getManufacturingDate());
            }
            if ($stockBatch->getExpiryDate()) {
                $newBatch->setExpiryDate($stockBatch->getExpiryDate());
            }
            
            $this->entityManager->persist($newBatch);
            $targetBatch = $newBatch;
            
            $movement = $this->stockMovementService->createTransferIn(
                $targetBatch,
                $transfer->getQuantity(),
                $transfer->getSourceLocation(),
                $transfer->getReason(),
                $user,
                $transfer->getId()
            );
        }

        $transfer->setStatus(StockTransfer::STATUS_COMPLETED);
        $transfer->setReceivedBy($user);
        $transfer->setReceivedAt(new \DateTime());
        
        $this->entityManager->flush();

        $this->sendTransferReceivedNotification($transfer, $user);

        $this->logger->info('Transfert réceptionné', [
            'transfer_id' => $transfer->getId(),
            'transfer_number' => $transfer->getTransferNumber(),
            'received_by' => $user->getEmail(),
            'destination_batch_id' => $targetBatch->getId()
        ]);

        return $transfer;
    }

    /**
     * Annule un transfert
     */
    public function cancelTransfer(StockTransfer $transfer, User $user, string $reason): StockTransfer
    {
        if ($transfer->getStatus() === StockTransfer::STATUS_COMPLETED) {
            throw new \Exception('Un transfert terminé ne peut pas être annulé.');
        }

        // Si le transfert était en transit, il faut remettre le stock source
        if ($transfer->getStatus() === StockTransfer::STATUS_IN_TRANSIT) {
            $stockBatch = $transfer->getStockBatch();
            $this->stockMovementService->createAdjustment(
                $stockBatch,
                $transfer->getQuantity(),
                'adjustment_in',
                "Annulation du transfert #{$transfer->getTransferNumber()} : {$reason}",
                $user,
                $transfer->getId()
            );
        }

        $transfer->setStatus(StockTransfer::STATUS_CANCELLED);
        $transfer->setReason(($transfer->getReason() ? $transfer->getReason() . "\n" : "") . "Annulé par {$user->getEmail()}: {$reason}");
        
        $this->entityManager->flush();

        $this->logger->info('Transfert annulé', [
            'transfer_id' => $transfer->getId(),
            'transfer_number' => $transfer->getTransferNumber(),
            'reason' => $reason,
            'user' => $user->getEmail()
        ]);

        return $transfer;
    }

    /**
     * Envoie les notifications pour la création de transfert
     */
    private function sendTransferCreatedNotification(StockTransfer $transfer, User $user): void
    {
        $subject = sprintf('[Transfert] %s - Créé', $transfer->getTransferNumber());
        
        $message = sprintf(
            "🚚 **Nouveau transfert créé**\n\n" .
            "**N° transfert :** %s\n" .
            "**Produit :** %s\n" .
            "**Lot :** %s\n" .
            "**Quantité :** %d unités\n" .
            "**De :** %s\n" .
            "**Vers :** %s\n" .
            "**Raison :** %s\n" .
            "**Créé par :** %s\n" .
            "**Date :** %s\n\n" .
            "📌 Pour expédier ce transfert, allez dans la liste des transferts.",
            $transfer->getTransferNumber(),
            $transfer->getStockBatch()->getProduct()->getName(),
            $transfer->getStockBatch()->getBatchNumber(),
            $transfer->getQuantity(),
            $transfer->getSourceLocation()->getDisplayName(),
            $transfer->getDestinationLocation()->getDisplayName(),
            $transfer->getReason() ?: 'Non spécifiée',
            $user->getFullName() ?: $user->getEmail(),
            (new \DateTime())->format('d/m/Y H:i')
        );
        
        $this->notificationService->notifyAdminsAndManagers($subject, $message);
    }

    /**
     * Envoie les notifications pour le départ du transfert
     */
    private function sendTransferStartedNotification(StockTransfer $transfer, User $user): void
    {
        $subject = sprintf('[Transfert] %s - Expédié', $transfer->getTransferNumber());
        
        $message = sprintf(
            "🚛 **Transfert expédié**\n\n" .
            "**N° transfert :** %s\n" .
            "**Produit :** %s\n" .
            "**Lot :** %s\n" .
            "**Quantité :** %d unités\n" .
            "**De :** %s\n" .
            "**Vers :** %s\n" .
            "**Expédié par :** %s\n" .
            "**Date :** %s\n\n" .
            "📌 Ce transfert est maintenant en transit.",
            $transfer->getTransferNumber(),
            $transfer->getStockBatch()->getProduct()->getName(),
            $transfer->getStockBatch()->getBatchNumber(),
            $transfer->getQuantity(),
            $transfer->getSourceLocation()->getDisplayName(),
            $transfer->getDestinationLocation()->getDisplayName(),
            $user->getFullName() ?: $user->getEmail(),
            (new \DateTime())->format('d/m/Y H:i')
        );
        
        $this->notificationService->notifyAdminsAndManagers($subject, $message);
    }

    /**
     * Envoie les notifications pour la réception de transfert
     */
    private function sendTransferReceivedNotification(StockTransfer $transfer, User $user): void
    {
        $subject = sprintf('[Transfert] %s - Réceptionné', $transfer->getTransferNumber());
        
        $message = sprintf(
            "✅ **Transfert réceptionné**\n\n" .
            "**N° transfert :** %s\n" .
            "**Produit :** %s\n" .
            "**Lot :** %s\n" .
            "**Quantité :** %d unités\n" .
            "**Destination :** %s\n" .
            "**Réceptionné par :** %s\n" .
            "**Date :** %s\n\n" .
            "✅ Transfert terminé avec succès.",
            $transfer->getTransferNumber(),
            $transfer->getStockBatch()->getProduct()->getName(),
            $transfer->getStockBatch()->getBatchNumber(),
            $transfer->getQuantity(),
            $transfer->getDestinationLocation()->getDisplayName(),
            $user->getFullName() ?: $user->getEmail(),
            (new \DateTime())->format('d/m/Y H:i')
        );
        
        $this->notificationService->notifyAdminsAndManagers($subject, $message);
    }

    /**
     * Récupère les statistiques des transferts
     */
    public function getStatistics(HmaService $hmaService): array
    {
        return $this->transferRepository->getStatistics($hmaService);
    }
}