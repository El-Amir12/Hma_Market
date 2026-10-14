<?php
// src/Service/Stock/StockAdjustmentService.php

namespace App\Service\Stock;

use App\Entity\HmaService;
use App\Entity\StockAdjustment;
use App\Entity\StockBatch;
use App\Entity\User;
use App\Repository\StockAdjustmentRepository;
use App\Service\NotificationService;
use App\Service\StockMovementService;
use App\Service\StockSyncService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class StockAdjustmentService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockMovementService $stockMovementService,
        private StockSyncService $stockSyncService,
        private NotificationService $notificationService,
        private StockAdjustmentRepository $adjustmentRepository,
        private LoggerInterface $logger,
        private string $uploadsDirectory   // ✅ Injecté depuis services.yaml
    ) {
    }

    /**
     * Crée un ajustement de stock
     *
     * Flow :
     *   1. persist(adjustment) + Flush #1
     *   2. createAdjustment() → Flush #2 (lot + mouvement) + Flush #3 (Product sync)
     *   3. Notifications
     */
    public function createAdjustment(
        StockBatch $stockBatch,
        string $type,
        int $quantity,
        string $reason,
        User $user,
        ?UploadedFile $justificationFile = null
    ): StockAdjustment {
        // 1. Validation
        if ($quantity <= 0) {
            throw new \Exception('La quantité doit être positive.');
        }

        if (!in_array($type, ['in', 'out'], true)) {
            throw new \Exception('Type d\'ajustement invalide.');
        }

        if ($type === 'out' && $stockBatch->getCurrentQuantity() < $quantity) {
            throw new \Exception(sprintf(
                'Stock insuffisant. Stock actuel : %d, Quantité demandée : %d',
                $stockBatch->getCurrentQuantity(),
                $quantity
            ));
        }

        // Recharger les entités managées
        $managedBatch = $this->entityManager->getRepository(StockBatch::class)
            ->find($stockBatch->getId());
        if (!$managedBatch) {
            throw new \Exception('Lot introuvable en base de données.');
        }

        $managedUser = $this->entityManager->getRepository(User::class)
            ->find($user->getId());
        if (!$managedUser) {
            throw new \Exception('Utilisateur introuvable en base de données.');
        }

        $managedHmaService = $this->entityManager->getRepository(HmaService::class)
            ->find($managedBatch->getHmaService()->getId());
        if (!$managedHmaService) {
            throw new \Exception('Entreprise introuvable en base de données.');
        }

        // 2. Upload du fichier justificatif
        $fileName = null;
        if ($justificationFile) {
            $companyId = $managedHmaService->getId();
            $fileName = $this->uploadJustificationFile($justificationFile, $companyId);
        }

        // 3. Créer l'entité d'ajustement
        $adjustment = new StockAdjustment();
        $adjustment->setType($type);
        $adjustment->setQuantity($quantity);
        $adjustment->setReason($reason);
        $adjustment->setJustificationFile($fileName);
        $adjustment->setCreatedBy($managedUser);
        $adjustment->setStockBatch($managedBatch);
        $adjustment->setHmaService($managedHmaService);

        $this->entityManager->persist($adjustment);
        $this->entityManager->flush();   // ✅ Flush #1

        // 4. Créer le mouvement de stock
        //    ✅ Flush #2 (lot + mouvement) + Flush #3 (Product sync)
        $movementType = $type === 'in' ? 'adjustment_in' : 'adjustment_out';
        $movement = $this->stockMovementService->createAdjustment(
            $managedBatch,
            $quantity,
            $movementType,
            $reason,
            $managedUser,
            $adjustment->getId()
        );

        // 5. Envoyer les notifications
        $this->sendNotifications($adjustment, $movement, $managedUser);

        $this->logger->info('Ajustement de stock créé', [
            'adjustment_id' => $adjustment->getId(),
            'type' => $type,
            'quantity' => $quantity,
            'batch_number' => $managedBatch->getBatchNumber(),
            'product' => $managedBatch->getProduct()?->getName(),
            'user' => $managedUser->getEmail(),
        ]);

        return $adjustment;
    }

    /**
     * ✅ Upload du fichier justificatif
     *
     * Le fichier est sauvegardé dans :
     *   {uploadsDirectory}/stock_adjustments/{companyId}/{filename}
     *
     * Soit concrètement :
     *   public/uploads/stock_adjustments/{companyId}/{filename}
     *
     * Le chemin relatif stocké en BDD est :
     *   stock_adjustments/{companyId}/{filename}
     */
    private function uploadJustificationFile(UploadedFile $file, int $companyId): string
    {
        $uploadDir = $this->uploadsDirectory . '/stock_adjustments/' . $companyId;

        if (!is_dir($uploadDir)) {
            if (!mkdir($uploadDir, 0777, true) && !is_dir($uploadDir)) {
                throw new \RuntimeException(sprintf('Impossible de créer le dossier : %s', $uploadDir));
            }
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = preg_replace('/[^a-zA-Z0-9_-]/', '_', $originalFilename);
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        $file->move($uploadDir, $newFilename);

        return 'stock_adjustments/' . $companyId . '/' . $newFilename;
    }

    /**
     * Envoie les notifications
     */
    private function sendNotifications(StockAdjustment $adjustment, $movement, User $user): void
    {
        $stockBatch = $adjustment->getStockBatch();
        $product = $stockBatch->getProduct();
        $hmaService = $stockBatch->getHmaService();

        $typeLabel = $adjustment->getType() === 'in' ? 'ENTRÉE (+) ' : 'SORTIE (-)';
        $quantityFormatted = number_format($adjustment->getQuantity(), 0, ',', ' ');

        $subject = sprintf('[%s] Ajustement de stock - %s', $hmaService->getCompanyName(), $typeLabel);

        $message = sprintf(
            "📦 **Ajustement de stock effectué**\n\n" .
            "**Entreprise :** %s\n" .
            "**Type :** %s\n" .
            "**Produit :** %s\n" .
            "**Lot :** %s\n" .
            "**Quantité :** %s unités\n" .
            "**Raison :** %s\n" .
            "**Effectué par :** %s\n" .
            "**Date :** %s\n\n" .
            "📊 **Nouveau stock :** %s unités\n" .
            "💰 **Valeur :** %s",
            $hmaService->getCompanyName(),
            $typeLabel,
            $product->getName(),
            $stockBatch->getBatchNumber(),
            $quantityFormatted,
            $adjustment->getReason(),
            $user->getFullName() ?: $user->getEmail(),
            (new \DateTime())->format('d/m/Y H:i'),
            number_format($stockBatch->getCurrentQuantity(), 0, ',', ' '),
            ($stockBatch->getCurrentQuantity() * (float) $stockBatch->getUnitPrice()) . ' FCFA'
        );

        $this->notificationService->notifyAdminsAndManagers($subject, $message);

        if ($adjustment->getType() === 'out') {
            $initialQty = $stockBatch->getInitialQuantity();
            if ($initialQty > 0) {
                $stockPercentage = ($adjustment->getQuantity() / $initialQty) * 100;
                if ($stockPercentage > 10) {
                    $this->notificationService->notifyManagers(
                        "⚠️ Alerte : Sortie importante de stock",
                        $message . "\n\n⚠️ Attention : Cette sortie représente " . round($stockPercentage, 1) . "% du stock initial !"
                    );
                }
            }
        }
    }

    /**
     * Récupère les statistiques
     */
    public function getStatistics(HmaService $hmaService, ?\DateTime $startDate = null, ?\DateTime $endDate = null): array
    {
        return $this->adjustmentRepository->getStatistics($hmaService, $startDate, $endDate);
    }
}