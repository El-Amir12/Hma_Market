<?php
// src/Repository/StockTransferRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\StockTransfer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StockTransfer>
 */
class StockTransferRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockTransfer::class);
    }

    /**
     * Récupère les transferts filtrés
     */
    public function findFiltered(
        HmaService $hmaService,
        ?string $status = null,
        ?\DateTime $dateFrom = null,
        ?\DateTime $dateTo = null,
        ?int $productId = null,
        ?int $sourceLocationId = null,
        ?int $destinationLocationId = null
    ): array {
        $qb = $this->createQueryBuilder('st')
            ->leftJoin('st.stock_batch', 'sb')
            ->leftJoin('sb.product', 'p')
            ->leftJoin('st.source_location', 'sl')
            ->leftJoin('st.destination_location', 'dl')
            ->addSelect('sb', 'p', 'sl', 'dl')
            ->where('st.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('st.created_at', 'DESC');

        if ($status) {
            $qb->andWhere('st.status = :status')
               ->setParameter('status', $status);
        }

        if ($dateFrom) {
            $qb->andWhere('st.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }

        if ($dateTo) {
            $qb->andWhere('st.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        if ($productId) {
            $qb->andWhere('p.id = :productId')
               ->setParameter('productId', $productId);
        }

        if ($sourceLocationId) {
            $qb->andWhere('sl.id = :sourceLocationId')
               ->setParameter('sourceLocationId', $sourceLocationId);
        }

        if ($destinationLocationId) {
            $qb->andWhere('dl.id = :destinationLocationId')
               ->setParameter('destinationLocationId', $destinationLocationId);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les statistiques des transferts
     */
    public function getStatistics(HmaService $hmaService): array
    {
        $qb = $this->createQueryBuilder('st')
            ->select('st.status, COUNT(st.id) as count, SUM(st.quantity) as total_quantity')
            ->where('st.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('st.status');

        $results = $qb->getQuery()->getResult();
        
        $stats = [
            'total' => 0,
            'total_quantity' => 0,
            'pending' => 0,
            'in_transit' => 0,
            'completed' => 0,
            'cancelled' => 0
        ];
        
        foreach ($results as $result) {
            $stats[$result['status']] = (int)$result['count'];
            $stats['total'] += (int)$result['count'];
            $stats['total_quantity'] += (int)$result['total_quantity'];
        }
        
        return $stats;
    }
}