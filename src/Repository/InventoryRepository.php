<?php
// src/Repository/InventoryRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\Inventory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Inventory>
 */
class InventoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inventory::class);
    }

    /**
     * Récupère les inventaires filtrés
     */
    public function findFiltered(
        HmaService $hmaService,
        ?string $status = null,
        ?\DateTime $dateFrom = null,
        ?\DateTime $dateTo = null
    ): array {
        $qb = $this->createQueryBuilder('i')
            ->where('i.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('i.created_at', 'DESC');

        if ($status) {
            $qb->andWhere('i.status = :status')
               ->setParameter('status', $status);
        }

        if ($dateFrom) {
            $qb->andWhere('i.inventory_date >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }

        if ($dateTo) {
            $qb->andWhere('i.inventory_date <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les statistiques des inventaires
     */
    public function getStatistics(HmaService $hmaService): array
    {
        $qb = $this->createQueryBuilder('i')
            ->select('i.status, COUNT(i.id) as count')
            ->where('i.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('i.status');

        $results = $qb->getQuery()->getResult();
        
        $stats = [
            'total' => 0,
            'draft' => 0,
            'in_progress' => 0,
            'completed' => 0,
            'cancelled' => 0
        ];
        
        foreach ($results as $result) {
            $stats[$result['status']] = (int)$result['count'];
            $stats['total'] += (int)$result['count'];
        }
        
        return $stats;
    }
}