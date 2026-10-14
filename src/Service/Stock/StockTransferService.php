<?php
// src/Service/Stock/StockTransferService.php

namespace App\Service\Stock;

use App\Entity\HmaService;
use App\Entity\Location;
use App\Entity\Product;
use App\Entity\StockBatch;
use App\Entity\StockTransfer;
use App\Entity\User;
use App\Repository\LocationRepository;
use App\Repository\StockBatchRepository;
use App\Repository\StockTransferRepository;
use App\Service\NotificationService;
use App\Service\StockMovementService;
use App\Service\StockSyncService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class StockTransferService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockMovementService $stockMovementService,
        private StockSyncService $stockSyncService,
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
            $lastNumber = (int) substr($lastTransfer->getTransferNumber(), -4);
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
        if ($quantity <= 0) {
            throw new \Exception('La quantité doit être positive.');
        }

        $sourceLoc = $sourceLocation ?? $stockBatch->getLocationEntity();

        if (!$sourceLoc && !$sourceLocation) {
            throw new \Exception('Le lot n\'a pas d\'emplacement source défini.');
        }

        if ($stockBatch->getCurrentQuantity() < $quantity) {
            throw new \Exception(sprintf(
                'Stock insuffisant. Stock actuel : %d, Quantité demandée : %d',
                $stockBatch->getCurrentQuantity(),
                $quantity
            ));
        }

        if ($sourceLoc && $sourceLoc->getId() === $destinationLocation->getId()) {
            throw new \Exception('Les emplacements source et destination ne peuvent pas être identiques.');
        }

        // Recharger les entités managées
        $managedBatch = $this->entityManager->getRepository(StockBatch::class)->find($stockBatch->getId());
        $managedUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        $managedDestination = $this->entityManager->getRepository(Location::class)->find($destinationLocation->getId());
        $managedSource = $sourceLoc ? $this->entityManager->getRepository(Location::class)->find($sourceLoc->getId()) : null;
        $managedHmaService = $this->entityManager->getRepository(HmaService::class)->find($managedBatch->getHmaService()->getId());

        if (!$managedBatch || !$managedUser || !$managedDestination || !$managedHmaService) {
            throw new \Exception('Entités introuvables en base de données.');
        }

        $transferNumber = $this->generateTransferNumber($managedHmaService);

        $transfer = new StockTransfer();
        $transfer->setTransferNumber($transferNumber);
        $transfer->setStockBatch($managedBatch);
        $transfer->setQuantity($quantity);
        $transfer->setSourceLocation($managedSource);
        $transfer->setDestinationLocation($managedDestination);
        $transfer->setReason($reason);
        $transfer->setCreatedBy($managedUser);
        $transfer->setStatus(StockTransfer::STATUS_PENDING);
        $transfer->setHmaService($managedHmaService);

        $this->entityManager->persist($transfer);
        $this->entityManager->flush();

        $this->sendTransferCreatedNotification($transfer, $managedUser);

        $this->logger->info('Transfert de stock créé', [
            'transfer_id' => $transfer->getId(),
            'transfer_number' => $transferNumber,
            'batch_number' => $managedBatch->getBatchNumber(),
            'product_name' => $managedBatch->getProduct()?->getName(),
            'quantity' => $quantity,
            'source' => $managedSource?->getDisplayName() ?? 'Non défini',
            'destination' => $managedDestination->getDisplayName(),
            'user' => $managedUser->getEmail(),
        ]);

        return $transfer;
    }

    /**
     * Départ du transfert (expédition)
     *
     * Flow :
     *   1. createTransferOut() → Flush #1 (lot + mouvement) + Flush #2 (Product sync)
     *   2. setStatus(IN_TRANSIT) → Flush #3 (statut transfert)
     */
    public function startTransfer(StockTransfer $transfer, User $user): StockTransfer
    {
        if ($transfer->getStatus() !== StockTransfer::STATUS_PENDING) {
            throw new \Exception('Ce transfert ne peut pas être expédié.');
        }

        $managedUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        $managedTransfer = $this->entityManager->getRepository(StockTransfer::class)->find($transfer->getId());

        if (!$managedUser || !$managedTransfer) {
            throw new \Exception('Entités introuvables.');
        }

        $stockBatch = $managedTransfer->getStockBatch();

        // createTransferOut() gère :
        //   - modif du lot source (déduction)
        //   - création du mouvement
        //   - Flush #1
        //   - syncProductStockAndFlush() → Flush #2
        $this->stockMovementService->createTransferOut(
            $stockBatch,
            $managedTransfer->getQuantity(),
            $managedTransfer->getDestinationLocation(),
            $managedTransfer->getReason() ?? 'Transfert',
            $managedUser,
            $managedTransfer->getId()
        );

        // Mise à jour du statut + Flush #3
        $managedTransfer->setStatus(StockTransfer::STATUS_IN_TRANSIT);
        $managedTransfer->setUpdatedAt(new \DateTime());
        $this->entityManager->flush();

        $this->sendTransferStartedNotification($managedTransfer, $managedUser);

        $this->logger->info('Transfert expédié', [
            'transfer_id' => $managedTransfer->getId(),
            'transfer_number' => $managedTransfer->getTransferNumber(),
            'user' => $managedUser->getEmail(),
        ]);

        return $managedTransfer;
    }

    /**
     * Réceptionne un transfert
     *
     * Flow :
     *   1. Créer/récupérer le lot de destination (persist SANS flush)
     *   2. createTransferIn() → Flush #1 (lot + mouvement) + Flush #2 (Product sync)
     *   3. setStatus(COMPLETED) → Flush #3 (statut transfert)
     */
    public function receiveTransfer(StockTransfer $transfer, User $user, ?Location $newLocation = null): StockTransfer
    {
        if ($transfer->getStatus() !== StockTransfer::STATUS_IN_TRANSIT) {
            throw new \Exception('Ce transfert ne peut pas être réceptionné.');
        }

        $managedUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        $managedTransfer = $this->entityManager->getRepository(StockTransfer::class)->find($transfer->getId());

        if (!$managedUser || !$managedTransfer) {
            throw new \Exception('Entités introuvables.');
        }

        $destinationLocation = $newLocation ?? $managedTransfer->getDestinationLocation();
        $stockBatch = $managedTransfer->getStockBatch();

        // Vérifier si le lot existe déjà à destination
        $existingBatch = $this->stockBatchRepository->findOneBy([
            'batch_number' => $stockBatch->getBatchNumber(),
            'locationEntity' => $destinationLocation,
            'hma_service' => $stockBatch->getHmaService(),
        ]);

        if ($existingBatch) {
            $targetBatch = $existingBatch;
        } else {
            // Créer un nouveau lot SANS flush
            $newBatch = new StockBatch();
            $newBatch->setBatchNumber($stockBatch->getBatchNumber());
            $newBatch->setProduct($stockBatch->getProduct());
            $newBatch->setUnitPrice($stockBatch->getUnitPrice());
            $newBatch->setInitialQuantity($managedTransfer->getQuantity());
            $newBatch->setCurrentQuantity(0);
            $newBatch->setIsActive(true);
            $newBatch->setLocationEntity($destinationLocation);
            $newBatch->setHmaService($stockBatch->getHmaService());
            $newBatch->setCreatedAt(new \DateTime());

            if ($stockBatch->getManufacturingDate()) {
                $newBatch->setManufacturingDate($stockBatch->getManufacturingDate());
            }
            if ($stockBatch->getExpiryDate()) {
                $newBatch->setExpiryDate($stockBatch->getExpiryDate());
            }

            $this->entityManager->persist($newBatch);   // persist SANS flush
            $targetBatch = $newBatch;
        }

        // createTransferIn() gère :
        //   - modif du lot destination (ajout quantité)
        //   - création du mouvement
        //   - Flush #1
        //   - syncProductStockAndFlush() → Flush #2
        $this->stockMovementService->createTransferIn(
            $targetBatch,
            $managedTransfer->getQuantity(),
            $managedTransfer->getSourceLocation(),
            $managedTransfer->getReason() ?? 'Transfert',
            $managedUser,
            $managedTransfer->getId()
        );

        // Mise à jour du statut + Flush #3
        $managedTransfer->setStatus(StockTransfer::STATUS_COMPLETED);
        $managedTransfer->setReceivedBy($managedUser);
        $managedTransfer->setReceivedAt(new \DateTime());
        $managedTransfer->setUpdatedAt(new \DateTime());

        $this->entityManager->flush();

        $this->sendTransferReceivedNotification($managedTransfer, $managedUser);

        $this->logger->info('Transfert réceptionné', [
            'transfer_id' => $managedTransfer->getId(),
            'transfer_number' => $managedTransfer->getTransferNumber(),
            'received_by' => $managedUser->getEmail(),
            'destination_batch_id' => $targetBatch->getId(),
        ]);

        return $managedTransfer;
    }

    /**
     * Annule un transfert
     */
    public function cancelTransfer(StockTransfer $transfer, User $user, string $reason): StockTransfer
    {
        if ($transfer->getStatus() === StockTransfer::STATUS_COMPLETED) {
            throw new \Exception('Un transfert terminé ne peut pas être annulé.');
        }

        $managedUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        $managedTransfer = $this->entityManager->getRepository(StockTransfer::class)->find($transfer->getId());

        if (!$managedUser || !$managedTransfer) {
            throw new \Exception('Entités introuvables.');
        }

        // Si en transit, remettre le stock source
        if ($managedTransfer->getStatus() === StockTransfer::STATUS_IN_TRANSIT) {
            $stockBatch = $managedTransfer->getStockBatch();

            // createAdjustment() gère : modif lot, mouvement, Flush #1, sync, Flush #2
            $this->stockMovementService->createAdjustment(
                $stockBatch,
                $managedTransfer->getQuantity(),
                'adjustment_in',
                "Annulation du transfert #{$managedTransfer->getTransferNumber()} : {$reason}",
                $managedUser,
                $managedTransfer->getId()
            );
        }

        // Mise à jour du statut + Flush #3
        $managedTransfer->setStatus(StockTransfer::STATUS_CANCELLED);
        $managedTransfer->setReason(
            ($managedTransfer->getReason() ? $managedTransfer->getReason() . "\n" : '')
            . "Annulé par {$managedUser->getEmail()}: {$reason}"
        );
        $managedTransfer->setUpdatedAt(new \DateTime());

        $this->entityManager->flush();

        $this->logger->info('Transfert annulé', [
            'transfer_id' => $managedTransfer->getId(),
            'transfer_number' => $managedTransfer->getTransferNumber(),
            'reason' => $reason,
            'user' => $managedUser->getEmail(),
        ]);

        return $managedTransfer;
    }

    // ============================================
    // NOTIFICATIONS
    // ============================================

    private function sendTransferCreatedNotification(StockTransfer $transfer, User $user): void
    {
        $subject = sprintf('[Transfert] %s - Créé', $transfer->getTransferNumber());
        $message = sprintf(
            "🚚 **Nouveau transfert créé**\n\n" .
            "**N° transfert :** %s\n**Produit :** %s\n**Lot :** %s\n" .
            "**Quantité :** %d unités\n**De :** %s\n**Vers :** %s\n" .
            "**Créé par :** %s\n",
            $transfer->getTransferNumber(),
            $transfer->getStockBatch()->getProduct()?->getName() ?? '—',
            $transfer->getStockBatch()->getBatchNumber(),
            $transfer->getQuantity(),
            $transfer->getSourceLocation()?->getDisplayName() ?? 'Non défini',
            $transfer->getDestinationLocation()->getDisplayName(),
            $user->getFullName() ?: $user->getEmail()
        );
        $this->notificationService->notifyAdminsAndManagers($subject, $message);
    }

    private function sendTransferStartedNotification(StockTransfer $transfer, User $user): void
    {
        $subject = sprintf('[Transfert] %s - Expédié', $transfer->getTransferNumber());
        $message = sprintf(
            "🚛 **Transfert expédié**\n\n" .
            "**N° transfert :** %s\n**Quantité :** %d unités\n" .
            "**Expédié par :** %s\n",
            $transfer->getTransferNumber(),
            $transfer->getQuantity(),
            $user->getFullName() ?: $user->getEmail()
        );
        $this->notificationService->notifyAdminsAndManagers($subject, $message);
    }

    private function sendTransferReceivedNotification(StockTransfer $transfer, User $user): void
    {
        $subject = sprintf('[Transfert] %s - Réceptionné', $transfer->getTransferNumber());
        $message = sprintf(
            "✅ **Transfert réceptionné**\n\n" .
            "**N° transfert :** %s\n**Quantité :** %d unités\n" .
            "**Destination :** %s\n**Réceptionné par :** %s\n",
            $transfer->getTransferNumber(),
            $transfer->getQuantity(),
            $transfer->getDestinationLocation()->getDisplayName(),
            $user->getFullName() ?: $user->getEmail()
        );
        $this->notificationService->notifyAdminsAndManagers($subject, $message);
    }

    public function getStatistics(HmaService $hmaService): array
    {
        return $this->transferRepository->getStatistics($hmaService);
    }
}