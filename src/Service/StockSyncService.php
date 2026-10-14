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
     * ✅ Calcule et met à jour Product.stock_quantity — SANS FLUSH.
     */
    public function syncProductStock(Product $product): array
    {
        $result = [
            'product_id' => $product->getId(),
            'old_stock_quantity' => $product->getStockQuantity(),
            'new_stock_quantity' => 0,
        ];

        $productId = $product->getId();
        if ($productId === null) {
            return $result;
        }

        $now = new \DateTime();

        $batches = $this->stockBatchRepository->createQueryBuilder('sb')
            ->where('sb.product = :productId')
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getResult();

        // Désactiver les lots invalides
        foreach ($batches as $batch) {
            $shouldBeActive = true;

            if ($batch->getExpiryDate() && $batch->getExpiryDate() < $now) {
                $shouldBeActive = false;
            } elseif ($batch->getCurrentQuantity() <= 0) {
                $shouldBeActive = false;
            }

            if ($batch->isActive() !== $shouldBeActive) {
                $batch->setIsActive($shouldBeActive);
                $batch->setUpdatedAt(new \DateTimeImmutable());
                $this->entityManager->persist($batch);
            }
        }

        // Calculer le total
        $total = 0;
        foreach ($batches as $batch) {
            if (
                $batch->isActive()
                && $batch->getCurrentQuantity() > 0
                && (!$batch->getExpiryDate() || $batch->getExpiryDate() >= $now)
            ) {
                $total += $batch->getCurrentQuantity();
            }
        }

        $result['new_stock_quantity'] = $total;

        if (($product->getStockQuantity() ?? 0) !== $total) {
            $product->setStockQuantity($total);
            $product->setLastStockUpdatedAt(new \DateTime());
            $this->entityManager->persist($product);
        }

        return $result;
    }

    /**
     * ✅ Version avec flush — c'est CELLE-CI qu'il faut appeler depuis les services.
     */
    public function syncProductStockAndFlush(Product $product): array
    {
        $result = $this->syncProductStock($product);
        $this->entityManager->flush();
        return $result;
    }

    public function syncAllProductsStock(HmaService $hmaService): array
    {
        $products = $this->entityManager->getRepository(Product::class)
            ->findBy(['hma_service' => $hmaService]);

        $results = [];
        foreach ($products as $product) {
            $results[] = $this->syncProductStock($product);
        }
        $this->entityManager->flush();

        return $results;
    }

    public function calculateTotalStock(Product $product): int
    {
        $now = new \DateTime();
        $total = 0;

        $batches = $this->stockBatchRepository->createQueryBuilder('sb')
            ->where('sb.product = :productId')
            ->setParameter('productId', $product->getId())
            ->getQuery()
            ->getResult();

        foreach ($batches as $batch) {
            if (
                $batch->isActive()
                && $batch->getCurrentQuantity() > 0
                && (!$batch->getExpiryDate() || $batch->getExpiryDate() >= $now)
            ) {
                $total += $batch->getCurrentQuantity();
            }
        }

        return $total;
    }

    public function deactivateAllExpiredBatches(): int
    {
        $now = new \DateTime();
        $expired = $this->stockBatchRepository->createQueryBuilder('sb')
            ->where('sb.is_active = true')
            ->andWhere('sb.expiry_date IS NOT NULL')
            ->andWhere('sb.expiry_date < :now')
            ->setParameter('now', $now)
            ->getQuery()
            ->getResult();

        $count = 0;
        $productsToSync = [];

        foreach ($expired as $batch) {
            $batch->setIsActive(false);
            $batch->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($batch);
            $count++;

            $product = $batch->getProduct();
            if ($product && !in_array($product->getId(), array_column($productsToSync, 'id'))) {
                $productsToSync[] = $product;
            }
        }

        if ($count > 0) {
            $this->entityManager->flush();
            foreach ($productsToSync as $product) {
                $this->syncProductStock($product);
            }
            $this->entityManager->flush();
        }

        return $count;
    }

    public function deactivateAllEmptyBatches(): int
    {
        $empty = $this->stockBatchRepository->createQueryBuilder('sb')
            ->where('sb.is_active = true')
            ->andWhere('sb.current_quantity <= 0')
            ->getQuery()
            ->getResult();

        $count = 0;
        $productsToSync = [];

        foreach ($empty as $batch) {
            $batch->setIsActive(false);
            $batch->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($batch);
            $count++;

            $product = $batch->getProduct();
            if ($product && !in_array($product->getId(), array_column($productsToSync, 'id'))) {
                $productsToSync[] = $product;
            }
        }

        if ($count > 0) {
            $this->entityManager->flush();
            foreach ($productsToSync as $product) {
                $this->syncProductStock($product);
            }
            $this->entityManager->flush();
        }

        return $count;
    }

    public function fullStockMaintenance(): array
    {
        $result = [
            'expired_batches' => $this->deactivateAllExpiredBatches(),
            'empty_batches' => $this->deactivateAllEmptyBatches(),
            'products_synced' => 0,
        ];

        $products = $this->entityManager->getRepository(Product::class)->findAll();
        foreach ($products as $product) {
            $this->syncProductStock($product);
            $result['products_synced']++;
        }
        $this->entityManager->flush();

        return $result;
    }
}