<?php
// src/Repository/PromotionRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\Promotion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

class PromotionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Promotion::class);
    }

    public function findFilteredPaginated(
        HmaService $hmaService,
        string $search = '',
        string $status = 'all',
        string $period = 'all',
        int $typeId = 0,
        int $page = 1,
        int $limit = 12
    ): Paginator {
        $qb = $this->createQueryBuilder('p')
            ->where('p.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('p.created_at', 'DESC');

        if ($search) {
            $qb->andWhere('p.name LIKE :search OR p.description LIKE :search')
               ->setParameter('search', '%'.$search.'%');
        }
        if ($status === 'active') {
            $qb->andWhere('p.is_active = true');
        } elseif ($status === 'inactive') {
            $qb->andWhere('p.is_active = false');
        }
        if ($typeId > 0) {
            $qb->andWhere('p.typePromotion = :typeId')
               ->setParameter('typeId', $typeId);
        }

        $now = new \DateTime();
        if ($period === 'ongoing') {
            $qb->andWhere('p.startDate <= :now')
               ->andWhere('p.endDate IS NULL OR p.endDate >= :now')
               ->setParameter('now', $now);
        } elseif ($period === 'upcoming') {
            $qb->andWhere('p.startDate > :now')
               ->setParameter('now', $now);
        } elseif ($period === 'ended') {
            $qb->andWhere('p.endDate IS NOT NULL')
               ->andWhere('p.endDate < :now')
               ->setParameter('now', $now);
        }

        $query = $qb->getQuery();
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);
        return $paginator;
    }

    public function countFiltered(
        HmaService $hmaService,
        string $search = '',
        string $status = 'all',
        string $period = 'all',
        int $typeId = 0
    ): int {
        $qb = $this->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->where('p.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($search) {
            $qb->andWhere('p.name LIKE :search OR p.description LIKE :search')
               ->setParameter('search', '%'.$search.'%');
        }
        if ($status === 'active') {
            $qb->andWhere('p.is_active = true');
        } elseif ($status === 'inactive') {
            $qb->andWhere('p.is_active = false');
        }
        if ($typeId > 0) {
            $qb->andWhere('p.typePromotion = :typeId')
               ->setParameter('typeId', $typeId);
        }
        $now = new \DateTime();
        if ($period === 'ongoing') {
            $qb->andWhere('p.startDate <= :now')
               ->andWhere('p.endDate IS NULL OR p.endDate >= :now')
               ->setParameter('now', $now);
        } elseif ($period === 'upcoming') {
            $qb->andWhere('p.startDate > :now')
               ->setParameter('now', $now);
        } elseif ($period === 'ended') {
            $qb->andWhere('p.endDate IS NOT NULL')
               ->andWhere('p.endDate < :now')
               ->setParameter('now', $now);
        }
        return (int) $qb->getQuery()->getSingleScalarResult();
    }
    
    /**
     * Récupère tous les IDs des plats concernés par une promotion (sans doublon) via SQL
     */
    public function getApplicablePlateIdsForPromotion(int $promotionId, int $hmaServiceId): array
    {
        $sql = "
            SELECT DISTINCT r.id
            FROM recipe r
            WHERE r.hma_service_id = :hmaServiceId
            AND r.is_active = 1
            AND r.subscription_active = 1
            AND (
                -- Cas 1: Aucune sélection (promotion globale)
                (SELECT COUNT(*) FROM promotion_category_recipe WHERE promotion_id = :promotionId) = 0
                AND (SELECT COUNT(*) FROM promotion_recipe WHERE promotion_id = :promotionId) = 0
                
                OR
                
                -- Cas 2 & 4: Plats des catégories sélectionnées
                r.category_recipe_id IN (
                    SELECT pcr.category_recipe_id 
                    FROM promotion_category_recipe pcr 
                    WHERE pcr.promotion_id = :promotionId
                )
                
                OR
                
                -- Cas 3 & 4: Plats spécifiques sélectionnés
                r.id IN (
                    SELECT pr.recipe_id 
                    FROM promotion_recipe pr 
                    WHERE pr.promotion_id = :promotionId
                )
            )
        ";
        
        $conn = $this->getEntityManager()->getConnection();
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery([
            'promotionId' => $promotionId,
            'hmaServiceId' => $hmaServiceId
        ]);
        
        return array_column($result->fetchAllAssociative(), 'id');
    }
}