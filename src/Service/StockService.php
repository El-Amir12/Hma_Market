<?php
// src/Service/StockService.php
namespace App\Service;

use App\Entity\Product;
use App\Entity\StockBatch;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class StockService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Calcule le stock disponible en tenant compte des lots (FIFO)
     */
    public function getAvailableStock(Product $product): int
    {
        $total = 0;
        foreach ($product->getStockBatches() as $batch) {
            if ($batch->isActive()) {
                $total += $batch->getCurrentQuantity();
            }
        }
        return $total;
    }

    /**
     * Vérifie si un lot est périmé
     */
    public function isBatchExpired(StockBatch $batch): bool
    {
        if (!$batch->getExpiryDate()) {
            return false;
        }
        
        return $batch->getExpiryDate() < new \DateTime();
    }

    /**
     * Vérifie si un lot est proche de péremption (dans X jours)
     */
    public function isBatchExpiringSoon(StockBatch $batch, int $days = 30): bool
    {
        if (!$batch->getExpiryDate()) {
            return false;
        }
        
        $now = new \DateTime();
        $expiry = $batch->getExpiryDate();
        $interval = $now->diff($expiry);
        
        return $interval->days <= $days && $interval->invert === 0;
    }

    /**
     * Récupère les lots proches de péremption
     */
    public function getExpiringBatches(Product $product, int $days = 30): array
    {
        $expiring = [];
        foreach ($product->getStockBatches() as $batch) {
            if ($this->isBatchExpiringSoon($batch, $days) && !$this->isBatchExpired($batch)) {
                $expiring[] = $batch;
            }
        }
        return $expiring;
    }

    /**
     * Récupère les lots périmés
     */
    public function getExpiredBatches(Product $product): array
    {
        $expired = [];
        foreach ($product->getStockBatches() as $batch) {
            if ($this->isBatchExpired($batch)) {
                $expired[] = $batch;
            }
        }
        return $expired;
    }

    /**
     * Désactive un lot (perte, péremption, etc.)
     */
    public function deactivateBatch(StockBatch $batch, string $reason): void
    {
        $batch->setIsActive(false);
        
        // Créer un mouvement de stock pour la sortie
        // TODO: Créer un mouvement d'ajustement
        
        $this->entityManager->flush();
        
        $this->logger->info('Lot désactivé', [
            'batch_id' => $batch->getId(),
            'reason' => $reason
        ]);
    }
}