<?php
// src/Repository/TypePromotionRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\TypePromotion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TypePromotionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypePromotion::class);
    }

    public function findByHmaService(HmaService $hmaService, ?bool $onlyActive = null, string $search = '', int $page = 1, int $limit = 12): array
    {
        $qb = $this->createQueryBuilder('t')
            ->where('t.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);
        
        if ($onlyActive === true) {
            $qb->andWhere('t.is_active = true');
        } elseif ($onlyActive === false) {
            $qb->andWhere('t.is_active = false');
        }
        
        if (!empty($search)) {
            $qb->andWhere('t.name LIKE :search OR t.description LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }
        
        $qb->orderBy('t.name', 'ASC')
           ->setFirstResult(($page - 1) * $limit)
           ->setMaxResults($limit);
        
        return $qb->getQuery()->getResult();
    }

    public function countFiltered(HmaService $hmaService, ?bool $onlyActive = null, string $search = ''): int
    {
        $qb = $this->createQueryBuilder('t')
            ->select('COUNT(t.id)')
            ->where('t.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);
        
        if ($onlyActive === true) {
            $qb->andWhere('t.is_active = true');
        } elseif ($onlyActive === false) {
            $qb->andWhere('t.is_active = false');
        }
        
        if (!empty($search)) {
            $qb->andWhere('t.name LIKE :search OR t.description LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }
        
        return (int) $qb->getQuery()->getSingleScalarResult();
    }
}