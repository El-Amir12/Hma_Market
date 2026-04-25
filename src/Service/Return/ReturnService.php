<?php
// src/Service/Return/ReturnService.php

namespace App\Service\Return;

use App\Entity\ReturnOrder;
use App\Entity\ReturnItem;
use App\Entity\Order;
use App\Entity\Recipe;
use App\Entity\OrderItem;
use App\Entity\User;
use App\Entity\HmaService;
use App\Entity\StockBatch;
use App\Entity\StockMovement;
use App\Entity\Product;
use App\Repository\ReturnOrderRepository;
use App\Repository\StockBatchRepository;
use App\Service\StockSyncService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class ReturnService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private ReturnOrderRepository $returnOrderRepository,
        private StockBatchRepository $stockBatchRepository,
        private StockSyncService $stockSyncService,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Crée une demande de retour
     */
    public function createReturn(
        Order $order,
        User $cashier,
        HmaService $hmaService,
        array $itemsToReturn,
        string $reason,
        ?string $reasonNotes,
        string $refundMethod
    ): ReturnOrder {
        // Recharger les entités
        $managedOrder = $this->entityManager->getRepository(Order::class)->find($order->getId());
        if (!$managedOrder) {
            throw new \Exception('Commande non trouvée');
        }

        $managedCashier = $this->entityManager->getRepository(User::class)->find($cashier->getId());
        if (!$managedCashier) {
            throw new \Exception('Utilisateur non trouvé');
        }

        $managedHmaService = $this->entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$managedHmaService) {
            throw new \Exception('Service non trouvé');
        }

        // Récupérer les quantités déjà retournées
        $returnedQuantities = $this->returnOrderRepository->getReturnedQuantitiesByOrder($managedOrder);

        $returnOrder = new ReturnOrder();
        $returnOrder->setReturnNumber($this->returnOrderRepository->generateReturnNumber($managedHmaService));
        $returnOrder->setOriginalOrder($managedOrder);
        $returnOrder->setOrderNumber($managedOrder->getOrderNumber());
        $returnOrder->setCustomerName($managedOrder->getCustomerName());
        $returnOrder->setCustomerPhone($managedOrder->getCustomerPhone());
        $returnOrder->setReturnedBy($managedCashier);
        $returnOrder->setReturnDate(new \DateTime());
        $returnOrder->setStatus('pending');
        $returnOrder->setReason($reason);
        $returnOrder->setReasonNotes($reasonNotes);
        $returnOrder->setRefundMethod($refundMethod);
        $returnOrder->setHmaService($managedHmaService);
        $returnOrder->setCreatedAt(new \DateTime());

        $totalRefund = 0;

        foreach ($itemsToReturn as $orderItemId => $quantity) {
            $orderItem = $this->entityManager->getRepository(OrderItem::class)->find($orderItemId);
            if (!$orderItem) {
                continue;
            }

            $alreadyReturned = $returnedQuantities[$orderItemId] ?? 0;
            $maxReturnable = $orderItem->getQuantity() - $alreadyReturned;

            if ($quantity > $maxReturnable) {
                throw new \Exception(sprintf(
                    'Pour "%s", vous ne pouvez retourner que %d unité(s) maximum. Déjà retourné: %d, Vendue: %d',
                    $orderItem->getProductName(),
                    $maxReturnable,
                    $alreadyReturned,
                    $orderItem->getQuantity()
                ));
            }

            if ($quantity <= 0) {
                throw new \Exception(sprintf(
                    'La quantité à retourner pour "%s" doit être supérieure à 0',
                    $orderItem->getProductName()
                ));
            }

            $unitPrice = (float) $orderItem->getUnitPrice();
            $refundAmount = $unitPrice * $quantity;
            $totalRefund += $refundAmount;

            $returnItem = new ReturnItem();
            $returnItem->setReturnOrder($returnOrder);
            $returnItem->setOriginalOrderItem($orderItem);
            $returnItem->setProductName($orderItem->getProductName());
            
            // 🔥 CORRECTION : Bien déterminer le type et l'ID
            if ($orderItem->getRecipe()) {
                // C'est une recette
                $returnItem->setItemType('recipe');
                $returnItem->setItemId($orderItem->getRecipe()->getId());
            } else {
                // C'est un produit - utiliser product_id depuis OrderItem
                $returnItem->setItemType('product');
                
                // Essayer d'abord avec getProductId() (si disponible)
                $productId = $orderItem->getProductId();
                
                // Fallback: chercher le produit par son nom (cas où product_id n'existe pas)
                if (!$productId) {
                    $product = $this->entityManager->getRepository(Product::class)
                        ->findOneBy(['name' => $orderItem->getProductName(), 'hma_service' => $managedHmaService]);
                    
                    if ($product) {
                        $productId = $product->getId();
                        $this->logger->warning('Product_id manquant dans OrderItem, récupéré par le nom', [
                            'order_item_id' => $orderItem->getId(),
                            'product_name' => $orderItem->getProductName(),
                            'found_product_id' => $productId
                        ]);
                    } else {
                        $this->logger->error('Impossible de trouver l\'ID du produit', [
                            'order_item_id' => $orderItem->getId(),
                            'product_name' => $orderItem->getProductName()
                        ]);
                        throw new \Exception(sprintf(
                            'Impossible de traiter le retour : l\'ID du produit "%s" est introuvable.',
                            $orderItem->getProductName()
                        ));
                    }
                }
                
                $returnItem->setItemId($productId);
            }
            
            $returnItem->setQuantityReturned($quantity);
            $returnItem->setUnitPriceAtSale($orderItem->getUnitPrice());
            $returnItem->setRefundAmount((string) $refundAmount);
            $returnItem->setTotalRefund((string) $refundAmount);

            if ($orderItem->getPromotionId()) {
                $returnItem->setPromotionId($orderItem->getPromotionId());
                $returnItem->setPromotionName($orderItem->getPromotionName());
            }

            $this->entityManager->persist($returnItem);
            $returnOrder->addReturnItem($returnItem);
        }

        $returnOrder->setTotalRefundAmount((string) $totalRefund);
        $this->entityManager->persist($returnOrder);
        $this->entityManager->flush();

        $this->logger->info('Demande de retour créée', [
            'return_number' => $returnOrder->getReturnNumber(),
            'order_number' => $managedOrder->getOrderNumber(),
            'cashier_id' => $managedCashier->getId(),
            'total_refund' => $totalRefund,
            'items_count' => count($itemsToReturn)
        ]);

        return $returnOrder;
    }

    /**
     * Approuve un retour
     */
    public function approveReturn(ReturnOrder $returnOrder, User $approver): void
    {
        $managedReturnOrder = $this->entityManager->getRepository(ReturnOrder::class)->find($returnOrder->getId());
        if (!$managedReturnOrder) {
            throw new \Exception('Retour non trouvé');
        }

        $managedApprover = $this->entityManager->getRepository(User::class)->find($approver->getId());
        if (!$managedApprover) {
            throw new \Exception('Approbateur non trouvé');
        }

        if ($managedReturnOrder->getStatus() !== 'pending') {
            throw new \Exception('Seul un retour en attente peut être approuvé.');
        }

        $managedReturnOrder->setStatus('approved');
        $managedReturnOrder->setApprovedBy($managedApprover);  // 🔥 Qui a approuvé
        $managedReturnOrder->setApprovedAt(new \DateTime());   // 🔥 Date d'approbation
        $managedReturnOrder->setUpdatedAt(new \DateTime());
        
        $this->entityManager->flush();

        $this->logger->info('Retour approuvé', [
            'return_number' => $managedReturnOrder->getReturnNumber(),
            'approved_by' => $managedApprover->getId()
        ]);
    }

    /**
     * Complète le remboursement et remet en stock
     */
    public function completeReturn(ReturnOrder $returnOrder, User $completer): void
    {
        $this->logger->info('=== DÉBUT COMPLETE RETURN ===');
        
        $managedReturnOrder = $this->entityManager->getRepository(ReturnOrder::class)->find($returnOrder->getId());
        if (!$managedReturnOrder) {
            throw new \Exception('Retour non trouvé');
        }

        $managedCompleter = $this->entityManager->getRepository(User::class)->find($completer->getId());
        if (!$managedCompleter) {
            throw new \Exception('Utilisateur non trouvé');
        }

        if ($managedReturnOrder->getStatus() !== 'approved') {
            throw new \Exception('Seul un retour approuvé peut être complété.');
        }

        $this->logger->info('Statut du retour vérifié', [
            'return_number' => $managedReturnOrder->getReturnNumber(),
            'status' => $managedReturnOrder->getStatus()
        ]);

        // Remettre les produits en stock
        $itemCount = 0;
        foreach ($managedReturnOrder->getReturnItems() as $returnItem) {
            $itemCount++;
            $this->logger->info('Traitement de l\'article de retour', [
                'item_index' => $itemCount,
                'product_name' => $returnItem->getProductName(),
                'quantity' => $returnItem->getQuantityReturned()
            ]);
            $this->restoreStockFromReturnItem($returnItem, $managedCompleter, $managedReturnOrder);
        }

        $managedReturnOrder->setStatus('completed');
        $managedReturnOrder->setCompletedBy($managedCompleter);  
        $managedReturnOrder->setCompletedAt(new \DateTime());     
        $managedReturnOrder->setUpdatedAt(new \DateTime());
        
        $this->entityManager->persist($managedReturnOrder);
        $this->entityManager->flush();

        $this->logger->info('=== FIN COMPLETE RETURN - SUCCÈS ===', [
            'return_number' => $managedReturnOrder->getReturnNumber(),
            'completed_by' => $managedCompleter->getId(),
            'items_processed' => $itemCount
        ]);
    }
    /**
     * Rejette un retour
     */
    public function rejectReturn(ReturnOrder $returnOrder, User $rejecter, ?string $rejectReason = null): void
    {
        $managedReturnOrder = $this->entityManager->getRepository(ReturnOrder::class)->find($returnOrder->getId());
        if (!$managedReturnOrder) {
            throw new \Exception('Retour non trouvé');
        }

        $managedRejecter = $this->entityManager->getRepository(User::class)->find($rejecter->getId());
        if (!$managedRejecter) {
            throw new \Exception('Utilisateur non trouvé');
        }

        if ($managedReturnOrder->getStatus() !== 'pending') {
            throw new \Exception('Seul un retour en attente peut être rejeté.');
        }

        $managedReturnOrder->setStatus('rejected');
        $currentNotes = $managedReturnOrder->getNotes() ?? '';
        $managedReturnOrder->setNotes($currentNotes . "\nRejeté: " . ($rejectReason ?? 'Non spécifié'));
        $managedReturnOrder->setUpdatedAt(new \DateTime());
        
        $this->entityManager->flush();

        $this->logger->info('Retour rejeté', [
            'return_number' => $managedReturnOrder->getReturnNumber(),
            'rejected_by' => $managedRejecter->getId(),
            'reason' => $rejectReason
        ]);
    }

    /**
     * Vérifie si un produit peut être remis en stock
     */
    private function canBeRestocked(Product $product): bool
    {
        $hmaService = $product->getHmaService();
        
        // 🔥 NOUVELLE LOGIQUE SIMPLIFIÉE
        
        // Pour les restaurants : se baser sur le flag is_storable
        if ($hmaService && $hmaService->getType() === 'restaurant') {
            $isRestockable = $product->isStorable();
            
            $this->logger->info('Vérification restockabilité (restaurant)', [
                'product_id' => $product->getId(),
                'product_name' => $product->getName(),
                'is_storable' => $isRestockable,
                'unit' => $product->getUnit()
            ]);
            
            return $isRestockable;
        }
        
        // Pour les autres types d'entreprises, se baser sur l'unité
        // Une pharmacie ou un supermarché peut tout restocker
        $unit = strtolower(trim($product->getUnit() ?? ''));
        $restockableUnits = [
            'piece', 'pièce', 'boîte', 'boite', 'carton', 
            'paquet', 'pack', 'sachet', 'lot', 'bouteille', 
            'canette', 'verre', 'barquette', 'caisse', 'palette',
            'douzaine', 'centaine', 'mille', 'kilogramme', 'kg', 'litre', 'l'
        ];
        
        $isRestockable = in_array($unit, $restockableUnits);
        
        $this->logger->info('Vérification restockabilité (standard)', [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'unit' => $unit,
            'is_restockable' => $isRestockable
        ]);
        
        return $isRestockable;
    }
   /**
     * Remet en stock les produits d'un retour
     */
    private function restoreStockFromReturnItem(ReturnItem $returnItem, User $user, ReturnOrder $returnOrder): void
    {
        $managedReturnItem = $this->entityManager->getRepository(ReturnItem::class)->find($returnItem->getId());
        if (!$managedReturnItem) {
            throw new \Exception('Article de retour non trouvé');
        }

        $managedUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        if (!$managedUser) {
            throw new \Exception('Utilisateur non trouvé');
        }

        $managedReturnOrder = $this->entityManager->getRepository(ReturnOrder::class)->find($returnOrder->getId());
        if (!$managedReturnOrder) {
            throw new \Exception('Retour non trouvé');
        }

        $orderItem = $managedReturnItem->getOriginalOrderItem();
        if (!$orderItem) {
            $this->logger->warning('OriginalOrderItem non trouvé', [
                'return_item_id' => $managedReturnItem->getId()
            ]);
            return;
        }

        $quantity = $managedReturnItem->getQuantityReturned();
        
        $this->logger->info('Tentative de remise en stock', [
            'product_name' => $managedReturnItem->getProductName(),
            'item_type' => $managedReturnItem->getItemType(),
            'item_id' => $managedReturnItem->getItemId(),
            'quantity' => $quantity
        ]);
        
        // Pour les recettes (plats), on ne remet JAMAIS le plat en stock
        if ($managedReturnItem->getItemType() === 'recipe') {
            $this->logger->info('Article de type recette - Ne peut pas être remis en stock', [
                'product_name' => $managedReturnItem->getProductName(),
                'reason' => 'Produit préparé (plat/menu)'
            ]);
            return;
        }
        
        // 🔥 VÉRIFICATION CRITIQUE : item_id ne doit pas être 0
        $itemId = $managedReturnItem->getItemId();
        if (!$itemId || $itemId === 0) {
            $this->logger->error('Item ID invalide pour le retour', [
                'return_item_id' => $managedReturnItem->getId(),
                'item_id' => $itemId,
                'product_name' => $managedReturnItem->getProductName()
            ]);
            throw new \Exception(sprintf(
                'Impossible de restaurer le stock : l\'ID du produit "%s" est invalide (valeur: %d). Contactez l\'administrateur.',
                $managedReturnItem->getProductName(),
                $itemId
            ));
        }
        
        // Pour les produits simples
        $product = $this->entityManager->getRepository(Product::class)->find($itemId);
        if (!$product) {
            $this->logger->error('Produit non trouvé', [
                'product_id' => $itemId,
                'product_name' => $managedReturnItem->getProductName()
            ]);
            throw new \Exception(sprintf(
                'Produit "%s" (ID: %d) non trouvé dans la base de données.',
                $managedReturnItem->getProductName(),
                $itemId
            ));
        }
        
        // Vérifier si le produit peut être remis en stock
        if (!$this->canBeRestocked($product)) {
            $this->logger->warning('Produit non restockable - Stock non modifié', [
                'product_id' => $product->getId(),
                'product_name' => $product->getName(),
                'unit' => $product->getUnit(),
                'quantity' => $quantity
            ]);
            return;
        }
        
        // Restaurer le stock
        $this->restoreProductStock($product, $quantity, $managedUser, $managedReturnOrder, 'RETURN_PRODUCT', $managedReturnItem);
    }

    /**
     * Restaure le stock d'un produit
     */
    private function restoreProductStock(Product $product, int $quantity, User $user, ReturnOrder $returnOrder, string $movementType, ReturnItem $returnItem): void
    {
        $this->logger->info('=== DÉBUT RESTORE PRODUCT STOCK ===', [
            'product_id' => $product->getId(),
            'product_name' => $product->getName(),
            'quantity' => $quantity
        ]);

        $managedProduct = $this->entityManager->getRepository(Product::class)->find($product->getId());
        if (!$managedProduct) {
            throw new \Exception('Produit non trouvé');
        }

        $managedUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        if (!$managedUser) {
            throw new \Exception('Utilisateur non trouvé');
        }

        $managedReturnOrder = $this->entityManager->getRepository(ReturnOrder::class)->find($returnOrder->getId());
        if (!$managedReturnOrder) {
            throw new \Exception('Retour non trouvé');
        }

        // Récupérer le lot d'origine depuis OrderItem
        $orderItem = $returnItem->getOriginalOrderItem();
        $originalBatchId = $orderItem ? $orderItem->getStockBatchId() : null;
        
        $this->logger->info('Vérification du lot d\'origine', [
            'originalBatchId' => $originalBatchId,
            'hasOrderItem' => $orderItem !== null
        ]);
        
        $targetBatch = null;
        
        // 1. Essayer de restaurer dans le lot d'origine
        if ($originalBatchId) {
            $targetBatch = $this->stockBatchRepository->find($originalBatchId);
            if ($targetBatch) {
                $this->logger->info('Lot d\'origine trouvé', [
                    'batch_id' => $targetBatch->getId(),
                    'batch_number' => $targetBatch->getBatchNumber(),
                    'current_quantity' => $targetBatch->getCurrentQuantity(),
                    'is_active' => $targetBatch->isActive()
                ]);
            } else {
                $this->logger->warning('Lot d\'origine non trouvé - fallback vers stock direct', [
                    'original_batch_id' => $originalBatchId
                ]);
            }
        } else {
            $this->logger->info('Pas de lot d\'origine - utilisation du stock direct');
        }
        
        // 2. Cas où on met à jour directement le stock (pas de lot)
        if (!$targetBatch) {
            $this->logger->info('Mise à jour directe du stock produit');
            
            $oldStock = $managedProduct->getStockQuantity();
            $newStock = $oldStock + $quantity;
            
            $this->logger->info('Avant mise à jour', [
                'old_stock' => $oldStock,
                'new_stock' => $newStock
            ]);
            
            $managedProduct->setStockQuantity($newStock);
            $this->entityManager->persist($managedProduct);
            
            // Créer un mouvement de stock sans lot
            $movement = new StockMovement();
            $movement->setMovementType('RETURN');
            $movement->setQuantity($quantity);
            $movement->setUnitPrice($managedProduct->getPurchasePrice());
            $movement->setProduct($managedProduct);
            $movement->setStockBatch(null);
            $movement->setUser($managedUser);
            $movement->setHmaService($managedProduct->getHmaService());
            $movement->setReferenceId($managedReturnOrder->getId());
            $movement->setNotes(sprintf('Retour #%s - %s (produit sans lot)', $managedReturnOrder->getReturnNumber(), $movementType));
            $movement->setCreatedAt(new \DateTime());
            
            $this->entityManager->persist($movement);
            
            $this->logger->info('Mouvement de stock créé', [
                'movement_type' => 'RETURN',
                'quantity' => $quantity
            ]);
            
            // FLUSH CRITIQUE - Sauvegarde en base
            try {
                $this->entityManager->flush();
                $this->logger->info('FLUSH réussi - Stock produit mis à jour', [
                    'new_stock' => $managedProduct->getStockQuantity()
                ]);
            } catch (\Exception $e) {
                $this->logger->error('Erreur lors du FLUSH', [
                    'error' => $e->getMessage()
                ]);
                throw $e;
            }
            
            return;
        }
        
        // 3. Lot trouvé - restauration normale dans le lot
        $this->logger->info('Restauration dans le lot existant');
        
        $oldBatchQuantity = $targetBatch->getCurrentQuantity();
        $newBatchQuantity = $oldBatchQuantity + $quantity;
        
        $this->logger->info('Avant mise à jour lot', [
            'old_batch_quantity' => $oldBatchQuantity,
            'new_batch_quantity' => $newBatchQuantity
        ]);
        
        $targetBatch->setCurrentQuantity($newBatchQuantity);
        
        // Réactiver le lot s'il était inactif
        if (!$targetBatch->isActive()) {
            $targetBatch->setIsActive(true);
            $this->logger->info('Lot réactivé');
        }
        
        $targetBatch->setUpdatedAt(new \DateTimeImmutable());
        $this->entityManager->persist($targetBatch);
        
        // Mettre à jour le stock du produit
        $oldStock = $managedProduct->getStockQuantity();
        $newStock = $oldStock + $quantity;
        
        $this->logger->info('Avant mise à jour produit', [
            'old_stock' => $oldStock,
            'new_stock' => $newStock
        ]);
        
        $managedProduct->setStockQuantity($newStock);
        $this->entityManager->persist($managedProduct);
        
        // Créer le mouvement de stock
        $movement = new StockMovement();
        $movement->setMovementType('RETURN');
        $movement->setQuantity($quantity);
        $movement->setUnitPrice($managedProduct->getPurchasePrice());
        $movement->setProduct($managedProduct);
        $movement->setStockBatch($targetBatch);
        $movement->setUser($managedUser);
        $movement->setHmaService($managedProduct->getHmaService());
        $movement->setReferenceId($managedReturnOrder->getId());
        $movement->setNotes(sprintf('Retour #%s - %s', $managedReturnOrder->getReturnNumber(), $movementType));
        $movement->setCreatedAt(new \DateTime());
        $this->entityManager->persist($movement);
        
        // FLUSH CRITIQUE
        try {
            $this->entityManager->flush();
            $this->logger->info('FLUSH réussi - Stock et lot mis à jour');
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors du FLUSH', [
                'error' => $e->getMessage()
            ]);
            throw $e;
        }
        
        // Synchroniser (optionnel, peut être fait après)
        $this->stockSyncService->syncProductStock($managedProduct);
        
        $this->logger->info('Stock restauré avec succès', [
            'product_id' => $managedProduct->getId(),
            'batch_id' => $targetBatch->getId(),
            'quantity' => $quantity,
            'new_stock' => $newStock
        ]);
    }
    /**
     * Récupère les statistiques des retours
     */
    public function getReturnStats(HmaService $hmaService, ?\DateTime $dateFrom = null, ?\DateTime $dateTo = null): array
    {
        $managedHmaService = $this->entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$managedHmaService) {
            return [
                'total_returns' => 0,
                'pending' => 0,
                'approved' => 0,
                'completed' => 0,
                'rejected' => 0,
                'total_refund_amount' => 0,
            ];
        }

        $qb = $this->entityManager->getRepository(ReturnOrder::class)
            ->createQueryBuilder('r')
            ->where('r.hma_service = :hmaService')
            ->setParameter('hmaService', $managedHmaService);

        if ($dateFrom) {
            $qb->andWhere('r.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('r.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        $returns = $qb->getQuery()->getResult();

        $stats = [
            'total_returns' => 0,
            'pending' => 0,
            'approved' => 0,
            'completed' => 0,
            'rejected' => 0,
            'total_refund_amount' => 0,
        ];

        foreach ($returns as $return) {
            $stats['total_returns']++;
            $stats[$return->getStatus()]++;
            $stats['total_refund_amount'] += (float) $return->getTotalRefundAmount();
        }

        return $stats;
    }
}