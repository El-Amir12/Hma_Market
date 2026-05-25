<?php
// src/Service/Stock/StockAdjustmentService.php

namespace App\Service\Stock;

use App\Entity\HmaService;
use App\Entity\StockAdjustment;
use App\Entity\StockBatch;
use App\Entity\User;
use App\Repository\StockAdjustmentRepository;
use App\Service\FileUploader;
use App\Service\NotificationService;
use App\Service\StockMovementService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class StockAdjustmentService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockMovementService $stockMovementService,
        private NotificationService $notificationService,
        private FileUploader $fileUploader,
        private StockAdjustmentRepository $adjustmentRepository
        // ❌ PAS DE $logger ici !
    ) {
    }

    /**
     * Crée un ajustement de stock
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

        if ($type === 'out' && $stockBatch->getCurrentQuantity() < $quantity) {
            throw new \Exception(sprintf(
                'Stock insuffisant. Stock actuel : %d, Quantité demandée : %d',
                $stockBatch->getCurrentQuantity(),
                $quantity
            ));
        }

        // 2. Upload du fichier justificatif
        $fileName = null;
        if ($justificationFile) {
            $companyId = $stockBatch->getHmaService()->getId();
            $fileName = $this->uploadJustificationFile($justificationFile, $companyId);
        }

        // 3. Créer l'entité d'ajustement
        $adjustment = new StockAdjustment();
        $adjustment->setType($type);
        $adjustment->setQuantity($quantity);
        $adjustment->setReason($reason);
        $adjustment->setJustificationFile($fileName);
        $adjustment->setCreatedBy($user);
        $adjustment->setStockBatch($stockBatch);
        $adjustment->setHmaService($stockBatch->getHmaService());

        $this->entityManager->persist($adjustment);
        $this->entityManager->flush();

        // 4. Créer le mouvement de stock
        $movementType = $type === 'in' ? 'adjustment_in' : 'adjustment_out';
        $movement = $this->stockMovementService->createAdjustment(
            $stockBatch,
            $quantity,
            $movementType,
            $reason,
            $user,
            $adjustment->getId()
        );

        // 5. Envoyer les notifications
        $this->sendNotifications($adjustment, $movement, $user);

        // ❌ SUPPRIMER OU COMMENTER LA LIGNE AVEC $this->logger
        // $this->logger->info('Ajustement de stock créé', [...]);

        return $adjustment;
    }

    /**
     * Upload du fichier justificatif
     */
    private function uploadJustificationFile(UploadedFile $file, int $companyId): string
    {
        $targetDirectory = $this->fileUploader->getTargetDirectory();
        $uploadDir = $targetDirectory . '/stock_adjustments/' . $companyId;
        
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
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
            ($stockBatch->getCurrentQuantity() * (float)$stockBatch->getUnitPrice()) . ' FCFA'
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