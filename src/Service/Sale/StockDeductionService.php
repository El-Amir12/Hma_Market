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
     * Calcule le stock TOTAL = stock_quantity + lots actifs
     * ✅ Utilisé pour l'affichage du stock disponible
     */
    public function getProductTotalStock(Product $product): int
    {
        $now = new \DateTime();
        $totalStockFromBatches = 0;
        
        foreach ($product->getStockBatches() as $batch) {
            if ($batch->isActive() 
                && $batch->getCurrentQuantity() > 0
                && (!$batch->getExpiryDate() || $batch->getExpiryDate() >= $now)) {
                $totalStockFromBatches += $batch->getCurrentQuantity();
            }
        }
        
        $stockQuantity = $product->getStockQuantity() ?? 0;
        return $stockQuantity + $totalStockFromBatches;
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
     * ✅ CORRIGÉ : stock_quantity ne change PAS, sauf fallback
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
            'stock_quantity' => $product->getStockQuantity(),
            'quantity_requested' => $quantity,
            'order_id' => $order->getId()
        ]);

        // 1. Désactiver les lots expirés
        $this->deactivateExpiredBatches($product);
        
        // 2. Récupérer les lots disponibles
        $availableBatches = $this->getAvailableBatches($product);
        
        // 3. Calculer le stock TOTAL = stock_quantity + lots
        $stockFromBatches = array_sum(array_map(fn($b) => $b->getCurrentQuantity(), $availableBatches));
        $stockQuantity = $product->getStockQuantity() ?? 0;
        $totalStock = $stockQuantity + $stockFromBatches;
        
        $this->logger->info('Stock détaillé avant déduction', [
            'stock_quantity' => $stockQuantity,
            'stock_from_batches' => $stockFromBatches,
            'total_available' => $totalStock
        ]);
        
        // 4. Vérifier que le stock total est suffisant
        if ($totalStock < $quantity) {
            throw new \Exception(sprintf(
                'Stock insuffisant pour le produit "%s". Stock total: %d %s, Demandé: %d %s',
                $product->getName(),
                $totalStock,
                $product->getUnit() ?? 'pièce(s)',
                $quantity,
                $product->getUnit() ?? 'pièce(s)'
            ));
        }
        
        $remainingQuantity = (int) $quantity;
        $usedBatches = [];
        $totalDeductedFromBatches = 0;
        $totalDeductedFromDirect = 0;
        $finalReferenceId = $referenceId ?? $order->getId();
        
        // 5. D'abord, déduire des lots existants (FIFO)
        foreach ($availableBatches as $batch) {
            if ($remainingQuantity <= 0) {
                break;
            }
            
            $availableQty = $batch->getCurrentQuantity();
            $quantityToTake = min($availableQty, $remainingQuantity);
            
            if ($quantityToTake <= 0) {
                continue;
            }
            
            // Mettre à jour le lot
            $newQuantity = $availableQty - $quantityToTake;
            $batch->setCurrentQuantity($newQuantity);
            
            if ($newQuantity <= 0) {
                $batch->setIsActive(false);
                $this->logger->info('Lot vidé et désactivé', [
                    'batch_id' => $batch->getId(),
                    'batch_number' => $batch->getBatchNumber()
                ]);
            }
            
            $batch->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($batch);
            
            // Créer le mouvement de stock
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
                'remaining' => $remainingQuantity
            ]);
        }
        
        // 6. Si la quantité demandée est supérieure aux lots,
        //    déduire du stock_quantity (stock direct)
        if ($remainingQuantity > 0) {
            $currentStockQuantity = $product->getStockQuantity() ?? 0;
            
            if ($currentStockQuantity < $remainingQuantity) {
                throw new \Exception(sprintf(
                    'Stock direct insuffisant. Stock_quantity: %d %s, Besoin: %d %s',
                    $currentStockQuantity,
                    $product->getUnit() ?? 'pièce(s)',
                    $remainingQuantity,
                    $product->getUnit() ?? 'pièce(s)'
                ));
            }
            
            // ✅ Déduire du stock_quantity (c'est le seul cas où il change)
            $newStockQuantity = $currentStockQuantity - $remainingQuantity;
            $product->setStockQuantity($newStockQuantity);
            $this->entityManager->persist($product);
            $totalDeductedFromDirect += $remainingQuantity;
            
            // Créer le mouvement de stock sans lot
            $purchasePrice = $product->getPurchasePrice();
            if ($purchasePrice === null || $purchasePrice === '') {
                $purchasePrice = '0';
            }
            
            $movement = $this->createStockMovementWithoutBatch(
                $product,
                $remainingQuantity,
                (string) $purchasePrice,
                $order,
                $user,
                'sale_out',
                $finalReferenceId
            );
            $this->entityManager->persist($movement);
            
            $usedBatches[] = [
                'batch' => null,
                'quantity' => $remainingQuantity,
                'unit_price' => $purchasePrice,
                'total_price' => $remainingQuantity * (float) $purchasePrice,
                'movement' => $movement,
                'note' => 'Déduction directe du stock_quantity'
            ];
            
            $this->logger->info('Déduction directe de stock_quantity', [
                'product_id' => $product->getId(),
                'quantity_deducted' => $remainingQuantity,
                'new_stock_quantity' => $newStockQuantity
            ]);
        }
        
        // 7. Flush final
        $this->entityManager->flush();
        
        // 8. Log du stock total après déduction (pour affichage)
        $finalTotalStock = $this->getProductTotalStock($product);
        
        $this->logger->info('=== FIN DÉDUCTION STOCK ===', [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'total_deducted' => $quantity,
            'from_batches' => $totalDeductedFromBatches,
            'from_stock_quantity' => $totalDeductedFromDirect,
            'final_stock_quantity' => $product->getStockQuantity(),
            'remaining_batches_quantity' => array_sum(array_map(fn($b) => $b->getCurrentQuantity(), $availableBatches)),
            'final_total_stock' => $finalTotalStock,
            'batches_used' => count($usedBatches)
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
        $productsToUpdate = [];
        
        foreach ($expiredBatches as $batch) {
            $batch->setIsActive(false);
            $batch->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($batch);
            $count++;
            
            $product = $batch->getProduct();
            if ($product && !in_array($product->getId(), $productsToUpdate)) {
                $productsToUpdate[] = $product->getId();
            }
        }
        
        if ($count > 0) {
            $this->entityManager->flush();
            $this->logger->info('Désactivation massive des lots expirés', [
                'count' => $count,
                'products_affected' => count($productsToUpdate)
            ]);
        }
        
        return $count;
    }
}