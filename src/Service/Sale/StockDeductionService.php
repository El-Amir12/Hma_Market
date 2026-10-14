<?php
// src/Service/Sale/StockDeductionService.php

namespace App\Service\Sale;

use App\Entity\Product;
use App\Entity\StockBatch;
use App\Entity\StockMovement;
use App\Entity\Order;
use App\Entity\User;
use App\Repository\StockBatchRepository;
use App\Service\StockSyncService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class StockDeductionService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockBatchRepository $stockBatchRepository,
        private StockSyncService $stockSyncService,
        private LoggerInterface $logger
    ) {
    }

    /**
     * ✅ Calcule le stock total disponible = SOMME DES LOTS ACTIFS uniquement.
     * 
     * ⚠️ IMPORTANT : Ne compte PAS Product.stock_quantity (c'est un cache).
     */
    public function getProductTotalStock(Product $product): int
    {
        $now = new \DateTime();
        $totalStock = 0;
        
        foreach ($product->getStockBatches() as $batch) {
            if ($batch->isActive() 
                && $batch->getCurrentQuantity() > 0
                && (!$batch->getExpiryDate() || $batch->getExpiryDate() >= $now)) {
                $totalStock += $batch->getCurrentQuantity();
            }
        }
        
        return $totalStock;
    }

    /**
     * Met à jour le statut d'un lot (inactif si quantité = 0 ou expiré)
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
     * Désactive tous les lots expirés d'un produit
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
     * ✅ Déduit la quantité d'un produit du stock (méthode FIFO).
     * 
     * ⚠️ CORRECTION : Déduction UNIQUEMENT depuis les lots.
     * Product.stock_quantity est mis à jour automatiquement par syncProductStock().
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
            'quantity_requested' => $quantity,
            'order_id' => $order->getId()
        ]);

        // ✅ 1. Désactiver les lots expirés
        $this->deactivateExpiredBatches($product);
        
        // ✅ 2. Récupérer les lots disponibles (triés FIFO/FEFO)
        $availableBatches = $this->getAvailableBatches($product);
        
        // ✅ 3. Calculer le stock total = SOMME DES LOTS uniquement
        $totalStock = array_sum(array_map(fn($b) => $b->getCurrentQuantity(), $availableBatches));
        
        $this->logger->info('Stock disponible (lots uniquement)', [
            'product_id' => $product->getId(),
            'total_available' => $totalStock,
            'batches_count' => count($availableBatches)
        ]);
        
        // ✅ 4. Vérifier que le stock est suffisant
        if ($totalStock < $quantity) {
            throw new \Exception(sprintf(
                'Stock insuffisant pour le produit "%s". Stock disponible: %d %s, Demandé: %d %s',
                $product->getName(),
                $totalStock,
                $product->getUnit() ?? 'pièce(s)',
                $quantity,
                $product->getUnit() ?? 'pièce(s)'
            ));
        }
        
        $remainingQuantity = (int) $quantity;
        $usedBatches = [];
        $totalDeducted = 0;
        $finalReferenceId = $referenceId ?? $order->getId();
        
        // ✅ 5. Déduire UNIQUEMENT depuis les lots (FIFO/FEFO)
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
            $totalDeducted += $quantityToTake;
            
            $this->logger->info('Déduction depuis lot', [
                'batch_id' => $batch->getId(),
                'batch_number' => $batch->getBatchNumber(),
                'taken' => $quantityToTake,
                'remaining' => $remainingQuantity
            ]);
        }
        
        // ✅ 6. Flush
        $this->entityManager->flush();
        
        // ✅ 7. SYNCHRONISER Product.stock_quantity
        $this->stockSyncService->syncProductStock($product);
        
        // ✅ 8. Log du stock après déduction
        $finalTotalStock = $this->getProductTotalStock($product);
        
        $this->logger->info('=== FIN DÉDUCTION STOCK ===', [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'total_deducted' => $quantity,
            'batches_used' => count($usedBatches),
            'final_stock_quantity' => $product->getStockQuantity(),
            'final_total_stock' => $finalTotalStock
        ]);
        
        return $usedBatches;
    }
    
    /**
     * Récupère les lots disponibles triés par FIFO/FEFO
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
        
        // Tri FEFO (First Expired First Out) si produit périssable
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
            // Sinon FIFO (First In First Out)
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
     * Désactive tous les lots expirés (maintenance CRON)
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
        $productsToSync = [];
        
        foreach ($expiredBatches as $batch) {
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
            
            // ✅ Synchroniser les produits affectés
            foreach ($productsToSync as $product) {
                $this->stockSyncService->syncProductStock($product);
            }
            
            $this->logger->info('Désactivation massive des lots expirés', [
                'count' => $count,
                'products_affected' => count($productsToSync)
            ]);
        }
        
        return $count;
    }
}