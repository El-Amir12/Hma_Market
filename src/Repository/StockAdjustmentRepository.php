<?php
// src/Repository/StockAdjustmentRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\StockAdjustment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StockAdjustment>
 */
class StockAdjustmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockAdjustment::class);
    }

    /**
     * Récupère les ajustements filtrés
     */
    public function findFiltered(
        HmaService $hmaService,
        ?string $type = null,
        ?\DateTime $dateFrom = null,
        ?\DateTime $dateTo = null,
        ?int $productId = null,
        ?int $batchId = null
    ): array {
        $qb = $this->createQueryBuilder('sa')
            ->leftJoin('sa.stock_batch', 'sb')
            ->leftJoin('sb.product', 'p')
            ->addSelect('sb', 'p')
            ->where('sa.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('sa.created_at', 'DESC');

        if ($type) {
            $qb->andWhere('sa.type = :type')
               ->setParameter('type', $type);
        }

        if ($dateFrom) {
            $qb->andWhere('sa.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }

        if ($dateTo) {
            $qb->andWhere('sa.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        if ($productId) {
            $qb->andWhere('p.id = :productId')
               ->setParameter('productId', $productId);
        }

        if ($batchId) {
            $qb->andWhere('sb.id = :batchId')
               ->setParameter('batchId', $batchId);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les statistiques des ajustements
     */
    public function getStatistics(HmaService $hmaService, ?\DateTime $startDate = null, ?\DateTime $endDate = null): array
    {
        $qb = $this->createQueryBuilder('sa')
            ->select('sa.type, SUM(sa.quantity) as total_quantity, COUNT(sa.id) as total_count')
            ->where('sa.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('sa.type');

        if ($startDate) {
            $qb->andWhere('sa.created_at >= :startDate')
               ->setParameter('startDate', $startDate);
        }
        if ($endDate) {
            $qb->andWhere('sa.created_at <= :endDate')
               ->setParameter('endDate', $endDate);
        }

        $results = $qb->getQuery()->getResult();
        
        $stats = [
            'total_in' => 0,
            'total_out' => 0,
            'count_in' => 0,
            'count_out' => 0,
            'total_quantity' => 0,
            'total_movements' => 0
        ];
        
        foreach ($results as $result) {
            if ($result['type'] === 'in') {
                $stats['total_in'] = (int)$result['total_quantity'];
                $stats['count_in'] = (int)$result['total_count'];
            } else {
                $stats['total_out'] = (int)$result['total_quantity'];
                $stats['count_out'] = (int)$result['total_count'];
            }
        }
        
        $stats['total_quantity'] = $stats['total_in'] + $stats['total_out'];
        $stats['total_movements'] = $stats['count_in'] + $stats['count_out'];
        
        return $stats;
    }
}