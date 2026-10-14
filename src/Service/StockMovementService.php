<?php
// src/Service/StockMovementService.php

namespace App\Service;

use App\Entity\Location;
use App\Entity\Product;
use App\Entity\StockBatch;
use App\Entity\StockMovement;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class StockMovementService
{
    /** ✅ Garde-fou anti-boucle : compte la profondeur d'appel */
    private static int $callDepth = 0;
    private const MAX_DEPTH = 5;

    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockSyncService $stockSyncService,
        private LoggerInterface $logger
    ) {
    }

    /**
     * ✅ Crée un mouvement de stock ET synchronise Product.stock_quantity.
     *
     * Flow :
     *   1. Modifie le lot + crée le mouvement
     *   2. Flush #1 (lot + mouvement)
     *   3. syncProductStockAndFlush() → Flush #2 (Product.stock_quantity)
     */
    public function createAdjustment(
        StockBatch $stockBatch,
        int $quantity,
        string $movementType,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        // ✅ GARDE-FOU ANTI-BOUCLE
        self::$callDepth++;

        if (self::$callDepth > self::MAX_DEPTH) {
            self::$callDepth = 0;

            $this->logger->critical('🚨 BOUCLE DÉTECTÉE dans createAdjustment', [
                'movement_type' => $movementType,
                'batch_id' => $stockBatch->getId(),
                'batch_number' => $stockBatch->getBatchNumber(),
                'quantity' => $quantity,
                'reference_id' => $referenceId,
                'user' => $user->getEmail(),
                'stack' => array_map(
                    fn($frame) => sprintf(
                        '%s::%s() ligne %d',
                        $frame['class'] ?? 'function',
                        $frame['function'] ?? 'unknown',
                        $frame['line'] ?? 0
                    ),
                    array_slice(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 15), 0, 15)
                ),
            ]);

            throw new \RuntimeException(sprintf(
                'Boucle infinie détectée dans createAdjustment (profondeur > %d). ' .
                'Vérifiez qu\'un EventListener ou une relation ne déclenche pas un flush en cascade. ' .
                'Consultez les logs pour la stack trace complète.',
                self::MAX_DEPTH
            ));
        }

        try {
            $oldQuantity = $stockBatch->getCurrentQuantity();

            // Vérification du stock pour les sorties
            if (
                in_array($movementType, ['adjustment_out', 'sale_out', 'transfer_out', 'return_out'], true)
                && $oldQuantity < $quantity
            ) {
                throw new \Exception(sprintf(
                    'Stock insuffisant. Stock actuel : %d, Quantité demandée : %d',
                    $oldQuantity,
                    $quantity
                ));
            }

            // Calcul de la nouvelle quantité
            if (in_array($movementType, ['adjustment_in', 'purchase_in', 'return_in', 'transfer_in'], true)) {
                $newQuantity = $oldQuantity + $quantity;
            } else {
                $newQuantity = $oldQuantity - $quantity;
            }

            // Récupérer l'ID produit AVANT toute modif
            $productId = $stockBatch->getProduct()?->getId();

            // Création du mouvement
            $movement = new StockMovement();
            $movement->setMovementType($movementType);
            $movement->setQuantity($quantity);
            $movement->setUnitPrice($stockBatch->getUnitPrice());
            $movement->setNotes($reason);
            $movement->setReferenceId($referenceId);
            $movement->setProduct($stockBatch->getProduct());
            $movement->setStockBatch($stockBatch);
            $movement->setUser($user);
            $movement->setHmaService($stockBatch->getHmaService());
            $movement->setCreatedAt(new \DateTime());

            // Mise à jour du stock du lot
            $stockBatch->setCurrentQuantity($newQuantity);
            $stockBatch->setUpdatedAt(new \DateTimeImmutable());

            // Si le lot est à zéro, le désactiver
            if ($newQuantity <= 0) {
                $stockBatch->setIsActive(false);
                $this->logger->info('Lot désactivé car stock à zéro', [
                    'batch_id' => $stockBatch->getId(),
                    'batch_number' => $stockBatch->getBatchNumber(),
                ]);
            }

            $this->entityManager->persist($movement);
            $this->entityManager->flush();   // ✅ Flush #1 : lot + mouvement

            // ✅ Flush #2 : synchroniser Product.stock_quantity
            if ($productId !== null) {
                /** @var Product|null $freshProduct */
                $freshProduct = $this->entityManager->getRepository(Product::class)->find($productId);
                if ($freshProduct !== null) {
                    $this->stockSyncService->syncProductStockAndFlush($freshProduct);
                } else {
                    $this->logger->warning('Produit introuvable après flush du mouvement', [
                        'product_id' => $productId,
                    ]);
                }
            }

            $this->logger->info('Mouvement de stock créé', [
                'type' => $movementType,
                'batch_id' => $stockBatch->getId(),
                'batch_number' => $stockBatch->getBatchNumber(),
                'quantity' => $quantity,
                'old_quantity' => $oldQuantity,
                'new_quantity' => $newQuantity,
                'reference_id' => $referenceId,
                'user' => $user->getEmail(),
                'reason' => $reason,
                'call_depth' => self::$callDepth,
            ]);

            return $movement;

        } finally {
            // ✅ TOUJOURS décrémenter, même en cas d'exception
            self::$callDepth--;
        }
    }

    public function createSaleOut(
        StockBatch $stockBatch,
        int $quantity,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        return $this->createAdjustment($stockBatch, $quantity, 'sale_out', $reason, $user, $referenceId);
    }

    public function createPurchaseIn(
        StockBatch $stockBatch,
        int $quantity,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        return $this->createAdjustment($stockBatch, $quantity, 'purchase_in', $reason, $user, $referenceId);
    }

    public function createTransferOut(
        StockBatch $stockBatch,
        int $quantity,
        Location $destinationLocation,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        return $this->createAdjustment(
            $stockBatch,
            $quantity,
            'transfer_out',
            "Transfert vers {$destinationLocation->getDisplayName()} : {$reason}",
            $user,
            $referenceId
        );
    }

    public function createTransferIn(
        StockBatch $stockBatch,
        int $quantity,
        Location $sourceLocation,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        // ✅ Persist sans flush si nouveau lot
        // createAdjustment() fera le flush
        if ($stockBatch->getId() === null) {
            $this->entityManager->persist($stockBatch);
        }

        return $this->createAdjustment(
            $stockBatch,
            $quantity,
            'transfer_in',
            "Transfert depuis {$sourceLocation->getDisplayName()} : {$reason}",
            $user,
            $referenceId
        );
    }

    public function createReturnIn(
        StockBatch $stockBatch,
        int $quantity,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        return $this->createAdjustment($stockBatch, $quantity, 'return_in', $reason, $user, $referenceId);
    }

    public function createReturnOut(
        StockBatch $stockBatch,
        int $quantity,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        return $this->createAdjustment($stockBatch, $quantity, 'return_out', $reason, $user, $referenceId);
    }
}