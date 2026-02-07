<?php

namespace App\Service;

use App\Entity\Purchase;
use App\Entity\PurchaseItem;
use App\Entity\StockBatch;
use App\Entity\StockMovement;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class PurchaseService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private SluggerInterface $slugger
    ) {}

    public function createPurchase(Purchase $purchase, User $user): void
    {
        $purchase->setUser($user);
        
        // Générer le numéro de réception
        $purchaseNumber = 'REC-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -8));
        $purchase->setPurchaseNumber($purchaseNumber);
        
        // Calculer le montant total
        $totalAmount = '0.00';
        foreach ($purchase->getPurchaseItems() as $item) {
            $totalAmount = bcadd($totalAmount, $item->getTotalPrice(), 2);
            
            // Générer le numéro de lot s'il n'existe pas
            if (!$item->getBatchNumber()) {
                $batchNumber = 'LOT-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
                $item->setBatchNumber($batchNumber);
            }
            
            $item->setCreatedAt(new \DateTime());
        }
        
        $purchase->setTotalAmount($totalAmount);
        $purchase->setCreatedAt(new \DateTime());
        $purchase->setStatus('pending');
        
        $this->entityManager->persist($purchase);
        $this->entityManager->flush();
    }

    public function updatePurchase(Purchase $purchase, User $user): void
    {
        $purchase->setUpdatedAt(new \DateTime());
        
        // Recalculer le montant total
        $totalAmount = '0.00';
        foreach ($purchase->getPurchaseItems() as $item) {
            $totalAmount = bcadd($totalAmount, $item->getTotalPrice(), 2);
        }
        $purchase->setTotalAmount($totalAmount);
        
        $this->entityManager->flush();
    }

    public function completePurchase(Purchase $purchase, User $user): void
    {
        if ($purchase->getStatus() !== 'pending') {
            throw new \Exception('Cette réception ne peut pas être finalisée.');
        }

        foreach ($purchase->getPurchaseItems() as $item) {
            // Créer le lot de stock
            $stockBatch = new StockBatch();
            $stockBatch->setBatchNumber($item->getBatchNumber());
            $stockBatch->setInitialQuantity($item->getQuantity());
            $stockBatch->setCurrentQuantity($item->getQuantity());
            $stockBatch->setUnitPrice($item->getUnitPrice());
            $stockBatch->setExpiryDate($item->getExpiryDate());
            $stockBatch->setManufacturingDate($item->getManufacturingDate());
            $stockBatch->setCreatedAt(new \DateTime());
            $stockBatch->setProduct($item->getProduct());
            $stockBatch->setPurchaseItem($item);
            
            $this->entityManager->persist($stockBatch);
            
            // Mettre à jour la quantité en stock du produit
            $product = $item->getProduct();
            $newStock = $product->getStockQuantity() + $item->getQuantity();
            $product->setStockQuantity($newStock);
            
            // Créer le mouvement de stock
            $stockMovement = new StockMovement();
            $stockMovement->setMovementType('PURCHASE');
            $stockMovement->setQuantity($item->getQuantity());
            $stockMovement->setUnitPrice($item->getUnitPrice());
            $stockMovement->setNotes('Réception n°' . $purchase->getPurchaseNumber());
            $stockMovement->setCreatedAt(new \DateTime());
            $stockMovement->setProduct($product);
            $stockMovement->setPurchaseItem($item);
            $stockMovement->setStockBatch($stockBatch);
            $stockMovement->setUser($user);
            
            $this->entityManager->persist($stockMovement);
        }
        
        $purchase->setStatus('completed');
        $purchase->setUpdatedAt(new \DateTime());
        
        $this->entityManager->flush();
    }

    public function cancelPurchase(Purchase $purchase, User $user): void
    {
        if ($purchase->getStatus() === 'completed') {
            // Annuler les mouvements de stock et restaurer les quantités
            foreach ($purchase->getPurchaseItems() as $item) {
                $product = $item->getProduct();
                $newStock = $product->getStockQuantity() - $item->getQuantity();
                $product->setStockQuantity(max(0, $newStock));
                
                // Marquer les lots comme annulés
                foreach ($product->getStockBatches() as $batch) {
                    if ($batch->getPurchaseItem() === $item) {
                        $batch->setCurrentQuantity(0);
                    }
                }
                
                // Créer un mouvement de stock d'annulation
                $stockMovement = new StockMovement();
                $stockMovement->setMovementType('ADJUSTMENT');
                $stockMovement->setQuantity(-$item->getQuantity());
                $stockMovement->setUnitPrice($item->getUnitPrice());
                $stockMovement->setNotes('Annulation réception n°' . $purchase->getPurchaseNumber());
                $stockMovement->setCreatedAt(new \DateTime());
                $stockMovement->setProduct($product);
                $stockMovement->setPurchaseItem($item);
                $stockMovement->setUser($user);
                
                $this->entityManager->persist($stockMovement);
            }
        }
        
        $purchase->setStatus('cancelled');
        $purchase->setUpdatedAt(new \DateTime());
        
        $this->entityManager->flush();
    }

    public function generatePurchaseNumber(): string
    {
        $date = new \DateTime();
        $year = $date->format('Y');
        $month = $date->format('m');
        
        // Compter les réceptions du mois
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('COUNT(p.id)')
            ->from('App\Entity\Purchase', 'p')
            ->where('YEAR(p.created_at) = :year')
            ->andWhere('MONTH(p.created_at) = :month')
            ->setParameter('year', $year)
            ->setParameter('month', $month);
        
        $count = $qb->getQuery()->getSingleScalarResult();
        $sequence = str_pad($count + 1, 4, '0', STR_PAD_LEFT);
        
        return 'REC-' . $year . $month . '-' . $sequence;
    }

    public function generateBatchNumber(): string
    {
        $date = new \DateTime();
        return 'LOT-' . $date->format('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
    }
}