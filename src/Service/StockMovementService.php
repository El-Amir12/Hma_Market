<?php
// src/Service/StockMovementService.php

namespace App\Service;

use App\Entity\HmaService;
use App\Entity\StockBatch;
use App\Entity\StockMovement;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class StockMovementService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Crée un mouvement d'ajustement de stock
     * 
     * @param StockBatch $stockBatch Le lot concerné
     * @param int $quantity La quantité du mouvement
     * @param string $movementType Type de mouvement (adjustment_in, adjustment_out, sale_out, purchase_in, etc.)
     * @param string $reason La raison du mouvement
     * @param User $user L'utilisateur qui effectue l'action
     * @param int|null $referenceId ID de référence (commande, achat, transfert, etc.)
     * @return StockMovement
     * @throws \Exception
     */
    public function createAdjustment(
        StockBatch $stockBatch,
        int $quantity,
        string $movementType,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        $oldQuantity = $stockBatch->getCurrentQuantity();
        
        // Vérification du stock pour les sorties
        if (in_array($movementType, ['adjustment_out', 'sale_out', 'transfer_out', 'return_out']) && $oldQuantity < $quantity) {
            throw new \Exception(sprintf(
                'Stock insuffisant. Stock actuel : %d, Quantité demandée : %d',
                $oldQuantity,
                $quantity
            ));
        }

        // Calcul de la nouvelle quantité
        if (in_array($movementType, ['adjustment_in', 'purchase_in', 'return_in', 'transfer_in'])) {
            $newQuantity = $oldQuantity + $quantity;
        } else {
            $newQuantity = $oldQuantity - $quantity;
        }

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
                'batch_number' => $stockBatch->getBatchNumber()
            ]);
        }

        $this->entityManager->persist($movement);
        $this->entityManager->flush();

        $this->logger->info('Mouvement de stock créé', [
            'type' => $movementType,
            'batch_id' => $stockBatch->getId(),
            'batch_number' => $stockBatch->getBatchNumber(),
            'quantity' => $quantity,
            'old_quantity' => $oldQuantity,
            'new_quantity' => $newQuantity,
            'reference_id' => $referenceId,
            'user' => $user->getEmail(),
            'reason' => $reason
        ]);

        return $movement;
    }

    /**
     * Crée un mouvement de vente (sale_out)
     */
    public function createSaleOut(
        StockBatch $stockBatch,
        int $quantity,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        return $this->createAdjustment(
            $stockBatch,
            $quantity,
            'sale_out',
            $reason,
            $user,
            $referenceId
        );
    }

    /**
     * Crée un mouvement d'achat (purchase_in)
     */
    public function createPurchaseIn(
        StockBatch $stockBatch,
        int $quantity,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        return $this->createAdjustment(
            $stockBatch,
            $quantity,
            'purchase_in',
            $reason,
            $user,
            $referenceId
        );
    }

    /**
     * Crée un mouvement de transfert (sortie)
     */
    public function createTransferOut(
        StockBatch $stockBatch,
        int $quantity,
        \App\Entity\Location $destinationLocation,
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

    /**
     * Crée un mouvement de transfert (entrée)
     */
    public function createTransferIn(
        StockBatch $stockBatch,
        int $quantity,
        \App\Entity\Location $sourceLocation,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
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

    /**
     * Crée un mouvement de retour client (return_in)
     */
    public function createReturnIn(
        StockBatch $stockBatch,
        int $quantity,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        return $this->createAdjustment(
            $stockBatch,
            $quantity,
            'return_in',
            $reason,
            $user,
            $referenceId
        );
    }

    /**
     * Crée un mouvement de retour fournisseur (return_out)
     */
    public function createReturnOut(
        StockBatch $stockBatch,
        int $quantity,
        string $reason,
        User $user,
        ?int $referenceId = null
    ): StockMovement {
        return $this->createAdjustment(
            $stockBatch,
            $quantity,
            'return_out',
            $reason,
            $user,
            $referenceId
        );
    }
}