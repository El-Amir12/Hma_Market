<?php
// src/Service/StockSyncService.php

namespace App\Service;

use App\Entity\Product;
use App\Entity\StockBatch;
use App\Entity\HmaService;
use App\Repository\StockBatchRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class StockSyncService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockBatchRepository $stockBatchRepository,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Synchronise les lots d'un produit :
     * - Désactive les lots expirés
     * - Désactive les lots vides
     * - Calcule le stock total (stock_quantity + lots)
     * ✅ stock_quantity ne change PAS (sauf si on le corrige manuellement)
     */
    public function syncProductStock(Product $product): array
    {
        $result = [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'batches_deactivated_expired' => 0,
            'batches_deactivated_empty' => 0,
            'stock_quantity' => $product->getStockQuantity(),
            'active_batches_count' => 0,
            'batches_total_quantity' => 0,
            'total_stock' => 0
        ];

        $now = new \DateTime();
        $hasChanges = false;

        // 1. Calculer la somme des lots actifs valides
        $batchesTotal = 0;
        $activeBatchCount = 0;

        foreach ($product->getStockBatches() as $batch) {
            $isValid = $batch->isActive() 
                && $batch->getCurrentQuantity() > 0
                && (!$batch->getExpiryDate() || $batch->getExpiryDate() >= $now);

            if ($isValid) {
                $batchesTotal += $batch->getCurrentQuantity();
                $activeBatchCount++;
            }
        }

        $result['batches_total_quantity'] = $batchesTotal;
        $result['active_batches_count'] = $activeBatchCount;

        // 2. Désactiver les lots invalides
        foreach ($product->getStockBatches() as $batch) {
            $shouldBeActive = true;

            if ($batch->getExpiryDate() && $batch->getExpiryDate() < $now) {
                $shouldBeActive = false;
                $result['batches_deactivated_expired']++;
                $this->logger->info('Lot désactivé (expiré)', [
                    'batch_id' => $batch->getId(),
                    'batch_number' => $batch->getBatchNumber(),
                    'expiry_date' => $batch->getExpiryDate()->format('Y-m-d'),
                    'product' => $product->getName()
                ]);
            }
            elseif ($batch->getCurrentQuantity() <= 0) {
                $shouldBeActive = false;
                $result['batches_deactivated_empty']++;
                $this->logger->info('Lot désactivé (quantité nulle)', [
                    'batch_id' => $batch->getId(),
                    'batch_number' => $batch->getBatchNumber(),
                    'current_quantity' => $batch->getCurrentQuantity(),
                    'product' => $product->getName()
                ]);
            }

            if ($batch->isActive() !== $shouldBeActive) {
                $batch->setIsActive($shouldBeActive);
                $batch->setUpdatedAt(new \DateTimeImmutable());
                $this->entityManager->persist($batch);
                $hasChanges = true;
            }
        }

        // ✅ CORRECTION : stock_quantity ne change PAS
        // On garde stock_quantity inchangé
        $result['stock_quantity'] = $product->getStockQuantity();
        $result['total_stock'] = ($product->getStockQuantity() ?? 0) + $batchesTotal;

        if ($hasChanges) {
            $this->entityManager->flush();
            $this->logger->info('Stock synchronisé (lots nettoyés)', [
                'product_id' => $product->getId(),
                'product_name' => $product->getName(),
                'stock_quantity' => $product->getStockQuantity(),
                'batches_total' => $batchesTotal,
                'total_stock' => $result['total_stock']
            ]);
        }

        return $result;
    }

    /**
     * Synchronise le stock de tous les produits d'un service
     */
    public function syncAllProductsStock(HmaService $hmaService): array
    {
        $products = $this->entityManager->getRepository(Product::class)
            ->findBy(['hma_service' => $hmaService]);

        $results = [];
        foreach ($products as $product) {
            $results[] = $this->syncProductStock($product);
        }

        return $results;
    }

    /**
     * Désactive tous les lots expirés (pour la maintenance)
     */
    public function deactivateAllExpiredBatches(): int
    {
        $now = new \DateTime();
        
        $expiredBatches = $this->stockBatchRepository->createQueryBuilder('sb')
            ->where('sb.is_active = true')
            ->andWhere('sb.expiry_date IS NOT NULL')
            ->andWhere('sb.expiry_date < :now')
            ->setParameter('now', $now)
            ->getQuery()
            ->getResult();

        $count = 0;
        foreach ($expiredBatches as $batch) {
            $batch->setIsActive(false);
            $batch->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($batch);
            $count++;
        }

        if ($count > 0) {
            $this->entityManager->flush();
            $this->logger->info('Désactivation massive des lots expirés', ['count' => $count]);
        }

        return $count;
    }

    /**
     * Désactive tous les lots vides (pour la maintenance)
     */
    public function deactivateAllEmptyBatches(): int
    {
        $emptyBatches = $this->stockBatchRepository->createQueryBuilder('sb')
            ->where('sb.is_active = true')
            ->andWhere('sb.current_quantity <= 0')
            ->getQuery()
            ->getResult();

        $count = 0;
        foreach ($emptyBatches as $batch) {
            $batch->setIsActive(false);
            $batch->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($batch);
            $count++;
        }

        if ($count > 0) {
            $this->entityManager->flush();
            $this->logger->info('Désactivation massive des lots vides', ['count' => $count]);
        }

        return $count;
    }

    /**
     * Nettoie et synchronise tout le stock (maintenance complète)
     */
    public function fullStockMaintenance(): array
    {
        $result = [
            'expired_batches' => 0,
            'empty_batches' => 0,
            'products_synced' => 0
        ];

        $result['expired_batches'] = $this->deactivateAllExpiredBatches();
        $result['empty_batches'] = $this->deactivateAllEmptyBatches();
        
        $products = $this->entityManager->getRepository(Product::class)->findAll();
        
        foreach ($products as $product) {
            $this->syncProductStock($product);
            $result['products_synced']++;
        }

        return $result;
    }

    /**
     * ✅ Réinitialise stock_quantity d'un produit (correction manuelle)
     * ⚠️ À utiliser uniquement pour corriger des erreurs
     */
    public function resetProductStock(Product $product, int $newQuantity): void
    {
        $oldQuantity = $product->getStockQuantity();
        $product->setStockQuantity($newQuantity);
        $this->entityManager->persist($product);
        $this->entityManager->flush();
        
        $this->logger->warning('Stock réinitialisé (correction manuelle)', [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'old_quantity' => $oldQuantity,
            'new_quantity' => $newQuantity
        ]);
    }

    /**
     * ✅ Ajoute une quantité à stock_quantity (ajustement manuel)
     */
    public function addStock(Product $product, int $quantity, string $reason = 'Ajustement manuel'): void
    {
        $oldQuantity = $product->getStockQuantity();
        $newQuantity = $oldQuantity + $quantity;
        $product->setStockQuantity($newQuantity);
        $this->entityManager->persist($product);
        $this->entityManager->flush();
        
        $this->logger->info('Ajout de stock (ajustement manuel)', [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'quantity_added' => $quantity,
            'old_quantity' => $oldQuantity,
            'new_quantity' => $newQuantity,
            'reason' => $reason
        ]);
    }

    /**
     * ✅ Retire une quantité de stock_quantity (ajustement manuel)
     */
    public function removeStock(Product $product, int $quantity, string $reason = 'Ajustement manuel'): void
    {
        $oldQuantity = $product->getStockQuantity();
        $newQuantity = max(0, $oldQuantity - $quantity);
        $product->setStockQuantity($newQuantity);
        $this->entityManager->persist($product);
        $this->entityManager->flush();
        
        $this->logger->info('Retrait de stock (ajustement manuel)', [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'quantity_removed' => $quantity,
            'old_quantity' => $oldQuantity,
            'new_quantity' => $newQuantity,
            'reason' => $reason
        ]);
    }

    /**
     * ✅ Calcule le stock total (stock_quantity + lots actifs)
     */
    public function calculateTotalStock(Product $product): int
    {
        $now = new \DateTime();
        $batchesTotal = 0;

        foreach ($product->getStockBatches() as $batch) {
            if ($batch->isActive() 
                && $batch->getCurrentQuantity() > 0
                && (!$batch->getExpiryDate() || $batch->getExpiryDate() >= $now)) {
                $batchesTotal += $batch->getCurrentQuantity();
            }
        }

        return ($product->getStockQuantity() ?? 0) + $batchesTotal;
    }
}