<?php
// src/Repository/ReturnOrderRepository.php

namespace App\Repository;

use App\Entity\ReturnOrder;
use App\Entity\HmaService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReturnOrder>
 */
class ReturnOrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReturnOrder::class);
    }

    /**
     * Génère un numéro de retour unique
     */
    public function generateReturnNumber(HmaService $hmaService): string
    {
        $date = new \DateTime();
        $year = $date->format('Y');
        $month = $date->format('m');
        $day = $date->format('d');
        
        $count = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.hma_service = :hmaService')
            ->andWhere('r.created_at >= :today')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('today', new \DateTime('today'))
            ->getQuery()
            ->getSingleScalarResult();
        
        $sequence = str_pad($count + 1, 4, '0', STR_PAD_LEFT);
        
        return sprintf('RETOUR-%s%s%s-%s', $year, $month, $day, $sequence);
    }

    /**
     * Récupère les retours filtrés
     */
    public function findFiltered(
        HmaService $hmaService,
        ?string $status = null,
        ?string $search = null,
        ?\DateTime $dateFrom = null,
        ?\DateTime $dateTo = null,
        int $page = 1,
        int $limit = 15
    ): array {
        $qb = $this->createQueryBuilder('r')
            ->where('r.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('r.created_at', 'DESC');

        if ($status && $status !== 'all') {
            $qb->andWhere('r.status = :status')
               ->setParameter('status', $status);
        }

        if ($search) {
            $qb->andWhere('r.order_number LIKE :search OR r.customer_name LIKE :search OR r.customer_phone LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($dateFrom) {
            $qb->andWhere('r.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }

        if ($dateTo) {
            $qb->andWhere('r.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        $qb->setFirstResult(($page - 1) * $limit)
           ->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }

    /**
     * Compte le nombre de retours filtrés
     */
    public function countFiltered(
        HmaService $hmaService,
        ?string $status = null,
        ?string $search = null,
        ?\DateTime $dateFrom = null,
        ?\DateTime $dateTo = null
    ): int {
        $qb = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($status && $status !== 'all') {
            $qb->andWhere('r.status = :status')
               ->setParameter('status', $status);
        }

        if ($search) {
            $qb->andWhere('r.order_number LIKE :search OR r.customer_name LIKE :search OR r.customer_phone LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($dateFrom) {
            $qb->andWhere('r.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }

        if ($dateTo) {
            $qb->andWhere('r.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }
}