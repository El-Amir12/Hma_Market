<?php
// src/Service/Sale/StockDeductionService.php

namespace App\Service\Sale;

use App\Entity\Product;
use App\Entity\StockBatch;
use App\Entity\StockMovement;
use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\User;
use App\Repository\StockBatchRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class StockDeductionService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockBatchRepository $stockBatchRepository,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Met à jour le statut des lots (inactif si quantité = 0 ou date expirée)
     */
    public function updateBatchStatus(StockBatch $batch): void
    {
        $needsUpdate = false;
        
        if ($batch->getCurrentQuantity() <= 0) {
            $batch->setIsActive(false);
            $needsUpdate = true;
            $this->logger->info('Lot désactivé car quantité à 0', [
                'batch_id' => $batch->getId(),
                'batch_number' => $batch->getBatchNumber()
            ]);
        }
        
        if ($batch->getExpiryDate() && $batch->getExpiryDate() < new \DateTime()) {
            $batch->setIsActive(false);
            $needsUpdate = true;
            $this->logger->info('Lot désactivé car date d\'expiration dépassée', [
                'batch_id' => $batch->getId(),
                'batch_number' => $batch->getBatchNumber(),
                'expiry_date' => $batch->getExpiryDate()->format('Y-m-d')
            ]);
        }
        
        if ($needsUpdate) {
            $batch->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($batch);
        }
    }
    
    /**
     * Vérifie et désactive tous les lots expirés d'un produit
     */
    public function deactivateExpiredBatches(Product $product): int
    {
        $now = new \DateTime();
        $expiredBatches = $this->stockBatchRepository->createQueryBuilder('sb')
            ->where('sb.product = :product')
            ->andWhere('sb.is_active = true')
            ->andWhere('sb.expiry_date IS NOT NULL')
            ->andWhere('sb.expiry_date < :now')
            ->setParameter('product', $product)
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
            $this->logger->info('Lots expirés désactivés', [
                'product_id' => $product->getId(),
                'count' => $count
            ]);
        }
        
        return $count;
    }

    /**
     * Déduit la quantité d'un produit du stock (méthode FIFO)
     * 
     * @return array Les lots utilisés avec les quantités déduites
     */
    public function deductProductStock(
        Product $product,
        float $quantity,
        Order $order,
        User $user,
        ?int $referenceId = null
    ): array {
        $this->logger->info('=== DÉBUT DÉDUCTION STOCK ===', [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'product_stock' => $product->getStockQuantity(),
            'product_unit' => $product->getUnit(),
            'quantity_requested' => $quantity,
            'order_id' => $order->getId(),
            'reference_id' => $referenceId
        ]);

        $this->deactivateExpiredBatches($product);
        
        $availableBatches = $this->getAvailableBatches($product);
        
        $this->logger->info('Lots disponibles', [
            'count' => count($availableBatches),
            'total_quantity_in_batches' => array_sum(array_map(fn($b) => $b->getCurrentQuantity(), $availableBatches))
        ]);
        
        $remainingQuantity = $quantity;
        $usedBatches = [];
        $totalDeductedFromBatches = 0;
        $finalReferenceId = $referenceId ?? $order->getId();
        
        // 1. D'abord, essayer de déduire des lots existants
        foreach ($availableBatches as $batch) {
            if ($remainingQuantity <= 0) {
                break;
            }
            
            $availableQty = $batch->getCurrentQuantity();
            $quantityToTake = min($availableQty, (int) $remainingQuantity);
            
            if ($quantityToTake <= 0) {
                continue;
            }
            
            // Mettre à jour le lot
            $newQuantity = $availableQty - $quantityToTake;
            $batch->setCurrentQuantity($newQuantity);
            
            $this->updateBatchStatus($batch);
            
            $batch->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($batch);
            
            // ✅ CORRECTION : Utilisation de 'sale_out' au lieu de 'SALE'
            $movement = $this->createStockMovement(
                $product,
                $batch,
                $quantityToTake,
                $batch->getUnitPrice(),
                $order,
                $user,
                'sale_out',
                $finalReferenceId
            );
            $this->entityManager->persist($movement);
            
            $usedBatches[] = [
                'batch' => $batch,
                'quantity' => $quantityToTake,
                'unit_price' => $batch->getUnitPrice(),
                'total_price' => $quantityToTake * (float) $batch->getUnitPrice(),
                'movement' => $movement
            ];
            
            $remainingQuantity -= $quantityToTake;
            $totalDeductedFromBatches += $quantityToTake;
            
            $this->logger->info('Déduction depuis lot', [
                'batch_id' => $batch->getId(),
                'batch_number' => $batch->getBatchNumber(),
                'taken' => $quantityToTake,
                'remaining' => $remainingQuantity,
                'movement_id' => $movement->getId()
            ]);
        }
        
        // 2. Fallback : déduction directe du stock produit
        if ($remainingQuantity > 0) {
            $productStock = $product->getStockQuantity();
            
            $this->logger->warning('Stock insuffisant dans les lots, utilisation du fallback', [
                'remaining_needed' => $remainingQuantity,
                'product_stock_available' => $productStock,
                'already_deducted_from_batches' => $totalDeductedFromBatches
            ]);
            
            if ($productStock < $remainingQuantity) {
                $this->logger->error('Stock total insuffisant', [
                    'product_id' => $product->getId(),
                    'product_name' => $product->getName(),
                    'stock_total' => $productStock,
                    'needed' => $remainingQuantity,
                    'already_taken' => $totalDeductedFromBatches,
                    'total_needed' => $quantity
                ]);
                
                throw new \Exception(sprintf(
                    'Stock insuffisant pour le produit "%s". Stock total: %d %s, Demandé: %d %s (dont %d déjà déduit des lots)',
                    $product->getName(),
                    $productStock,
                    $product->getUnit() ?? 'pièce(s)',
                    $remainingQuantity,
                    $product->getUnit() ?? 'pièce(s)',
                    $totalDeductedFromBatches
                ));
            }
            
            // ✅ CORRECTION : Utilisation de 'sale_out' au lieu de 'SALE'
            $movement = $this->createStockMovementWithoutBatch(
                $product,
                (int) $remainingQuantity,
                $product->getPurchasePrice(),
                $order,
                $user,
                'sale_out',
                $finalReferenceId
            );
            $this->entityManager->persist($movement);
            
            $usedBatches[] = [
                'batch' => null,
                'quantity' => $remainingQuantity,
                'unit_price' => $product->getPurchasePrice(),
                'total_price' => $remainingQuantity * (float) $product->getPurchasePrice(),
                'movement' => $movement,
                'note' => 'Déduction directe du stock (aucun lot disponible)'
            ];
            
            $this->logger->warning('Déduction directe du stock produit (fallback)', [
                'product_id' => $product->getId(),
                'quantity_deducted' => $remainingQuantity,
                'unit_price' => $product->getPurchasePrice(),
                'movement_id' => $movement->getId()
            ]);
        }
        
        // 3. Mettre à jour la quantité totale du produit
        $newProductStock = $product->getStockQuantity() - (int) $quantity;
        $product->setStockQuantity($newProductStock);
        $this->entityManager->persist($product);
        
        $this->entityManager->flush();
        
        $this->logger->info('=== FIN DÉDUCTION STOCK ===', [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'total_deducted' => $quantity,
            'from_batches' => $totalDeductedFromBatches,
            'from_direct' => $quantity - $totalDeductedFromBatches,
            'new_product_stock' => $newProductStock,
            'batches_used' => count($usedBatches),
            'reference_id' => $finalReferenceId
        ]);
        
        return $usedBatches;
    }
    
    /**
     * Récupère les lots disponibles triés par FIFO
     */
    private function getAvailableBatches(Product $product): array
    {
        $now = new \DateTime();
        
        $batches = $this->stockBatchRepository->createQueryBuilder('sb')
            ->where('sb.product = :product')
            ->andWhere('sb.is_active = true')
            ->andWhere('sb.current_quantity > 0')
            ->andWhere('(sb.expiry_date IS NULL OR sb.expiry_date >= :now)')
            ->setParameter('product', $product)
            ->setParameter('now', $now)
            ->getQuery()
            ->getResult();
        
        if ($product->hasExpiryDate()) {
            usort($batches, function($a, $b) {
                $dateA = $a->getExpiryDate();
                $dateB = $b->getExpiryDate();
                
                if (!$dateA && !$dateB) return 0;
                if (!$dateA) return 1;
                if (!$dateB) return -1;
                
                return $dateA <=> $dateB;
            });
        } else {
            usort($batches, fn($a, $b) => $a->getCreatedAt() <=> $b->getCreatedAt());
        }
        
        return $batches;
    }
    
    /**
     * Crée un mouvement de stock avec lot
     */
    private function createStockMovement(
        Product $product,
        StockBatch $batch,
        int $quantity,
        string $unitPrice,
        Order $order,
        User $user,
        string $type,
        int $referenceId
    ): StockMovement {
        $movement = new StockMovement();
        $movement->setMovementType($type);
        $movement->setQuantity($quantity);
        $movement->setUnitPrice($unitPrice);
        $movement->setProduct($product);
        $movement->setStockBatch($batch);
        $movement->setUser($user);
        $movement->setHmaService($product->getHmaService());
        $movement->setCreatedAt(new \DateTime());
        $movement->setReferenceId($referenceId);
        $movement->setNotes(sprintf('Vente #%s (lot: %s)', $order->getOrderNumber(), $batch->getBatchNumber()));
        
        return $movement;
    }
    
    /**
     * Crée un mouvement de stock sans lot (fallback)
     */
    private function createStockMovementWithoutBatch(
        Product $product,
        int $quantity,
        string $unitPrice,
        Order $order,
        User $user,
        string $type,
        int $referenceId
    ): StockMovement {
        $movement = new StockMovement();
        $movement->setMovementType($type);
        $movement->setQuantity($quantity);
        $movement->setUnitPrice($unitPrice);
        $movement->setProduct($product);
        $movement->setStockBatch(null);
        $movement->setUser($user);
        $movement->setHmaService($product->getHmaService());
        $movement->setCreatedAt(new \DateTime());
        $movement->setReferenceId($referenceId);
        $movement->setNotes(sprintf('Vente #%s (déduction directe)', $order->getOrderNumber()));
        
        return $movement;
    }
    
    /**
     * Désactive tous les lots expirés (commande CRON)
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
}