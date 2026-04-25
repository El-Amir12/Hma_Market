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
     * Synchronise le stock d'un produit :
     * - Désactive les lots expirés
     * - Désactive les lots vides
     * - Recalcule stock_quantity à partir des lots actifs
     */
    public function syncProductStock(Product $product): array
    {
        $result = [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'batches_deactivated_expired' => 0,
            'batches_deactivated_empty' => 0,
            'old_stock_quantity' => $product->getStockQuantity(),
            'new_stock_quantity' => 0,
            'active_batches_count' => 0
        ];

        $now = new \DateTime();
        $totalStock = 0;

        foreach ($product->getStockBatches() as $batch) {
            $shouldBeActive = true;

            // Vérifier si le lot est expiré
            if ($batch->getExpiryDate() && $batch->getExpiryDate() < $now) {
                $shouldBeActive = false;
                $result['batches_deactivated_expired']++;
                $this->logger->info('Lot désactivé (expiré)', [
                    'batch_id' => $batch->getId(),
                    'batch_number' => $batch->getBatchNumber(),
                    'expiry_date' => $batch->getExpiryDate()->format('Y-m-d')
                ]);
            }
            // Vérifier si le lot est vide
            elseif ($batch->getCurrentQuantity() <= 0) {
                $shouldBeActive = false;
                $result['batches_deactivated_empty']++;
                $this->logger->info('Lot désactivé (quantité nulle)', [
                    'batch_id' => $batch->getId(),
                    'batch_number' => $batch->getBatchNumber(),
                    'current_quantity' => $batch->getCurrentQuantity()
                ]);
            }

            // Mettre à jour le statut du lot si nécessaire
            if ($batch->isActive() !== $shouldBeActive) {
                $batch->setIsActive($shouldBeActive);
                $batch->setUpdatedAt(new \DateTimeImmutable());
                $this->entityManager->persist($batch);
            }

            // Si le lot est actif, ajouter sa quantité au total
            if ($batch->isActive()) {
                $totalStock += $batch->getCurrentQuantity();
                $result['active_batches_count']++;
            }
        }

        // Mettre à jour le stock du produit
        $result['new_stock_quantity'] = $totalStock;
        
        if ($product->getStockQuantity() !== $totalStock) {
            $product->setStockQuantity($totalStock);
            $this->entityManager->persist($product);
            
            $this->logger->info('Stock produit synchronisé', [
                'product_id' => $product->getId(),
                'product_name' => $product->getName(),
                'old_stock' => $result['old_stock_quantity'],
                'new_stock' => $totalStock,
                'difference' => $totalStock - $result['old_stock_quantity']
            ]);
        }

        $this->entityManager->flush();

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
            
            // Mettre à jour le produit associé
            $product = $batch->getProduct();
            if ($product) {
                $this->syncProductStock($product);
            }
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
            
            // Mettre à jour le produit associé
            $product = $batch->getProduct();
            if ($product) {
                $this->syncProductStock($product);
            }
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

        // Désactiver les lots expirés
        $result['expired_batches'] = $this->deactivateAllExpiredBatches();
        
        // Désactiver les lots vides
        $result['empty_batches'] = $this->deactivateAllEmptyBatches();
        
        // Synchroniser tous les produits (éviter les doublons)
        $products = $this->entityManager->getRepository(Product::class)->findAll();
        foreach ($products as $product) {
            $this->syncProductStock($product);
            $result['products_synced']++;
        }

        return $result;
    }
}