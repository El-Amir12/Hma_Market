<?php
// src/Repository/StockBatchRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\StockBatch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<StockBatch>
 */
class StockBatchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockBatch::class);
    }

    /**
     * Récupère les statistiques pour un produit spécifique
     */
    public function getStatsForProduct(Product $product): array
    {
        $now = new \DateTime();
        $thirtyDays = (clone $now)->modify('+30 days');
        
        $qb = $this->createQueryBuilder('b')
            ->select(
                'COUNT(b.id) as total_batches',
                'SUM(CASE WHEN b.is_active = true THEN 1 ELSE 0 END) as active_batches',
                'SUM(CASE WHEN b.is_active = false THEN 1 ELSE 0 END) as inactive_batches',
                'SUM(CASE WHEN b.expiry_date IS NOT NULL AND b.expiry_date < :now THEN 1 ELSE 0 END) as expired_batches',
                'SUM(CASE WHEN b.expiry_date IS NOT NULL AND b.expiry_date >= :now AND b.expiry_date <= :thirtyDays THEN 1 ELSE 0 END) as expiring_soon_batches',
                'SUM(b.current_quantity) as total_quantity',
                'SUM(CASE WHEN b.has_issue = true AND (b.issue_status != :closed AND b.issue_status != :recovered AND b.issue_status IS NOT NULL) THEN 1 ELSE 0 END) as open_issues',
                'SUM(CASE WHEN b.has_issue = true AND (b.issue_status != :closed AND b.issue_status != :recovered AND b.issue_status IS NOT NULL) THEN b.issue_declared_amount ELSE 0 END) as total_issue_amount'
            )
            ->where('b.product = :product')
            ->setParameter('product', $product)
            ->setParameter('now', $now)
            ->setParameter('thirtyDays', $thirtyDays)
            ->setParameter('closed', 'closed')
            ->setParameter('recovered', 'recovered')
            ->getQuery()
            ->getSingleResult();

        // Remplacer les valeurs null par 0
        return array_map(function($value) {
            return $value ?? 0;
        }, $qb);
    }

    /**
     * Récupère les statistiques globales pour un service HMA
     */
    public function getStatsForHmaService(HmaService $hmaService): array
    {
        $now = new \DateTime();
        $thirtyDays = (clone $now)->modify('+30 days');
        
        $qb = $this->createQueryBuilder('b')
            ->select(
                'COUNT(b.id) as total_batches',
                'SUM(CASE WHEN b.is_active = true THEN 1 ELSE 0 END) as active_batches',
                'SUM(CASE WHEN b.is_active = false THEN 1 ELSE 0 END) as inactive_batches',
                'SUM(CASE WHEN b.expiry_date IS NOT NULL AND b.expiry_date < :now THEN 1 ELSE 0 END) as expired_batches',
                'SUM(CASE WHEN b.expiry_date IS NOT NULL AND b.expiry_date >= :now AND b.expiry_date <= :thirtyDays THEN 1 ELSE 0 END) as expiring_soon_batches',
                'SUM(b.current_quantity) as total_quantity',
                'SUM(CASE WHEN b.has_issue = true AND (b.issue_status != :closed AND b.issue_status != :recovered AND b.issue_status IS NOT NULL) THEN 1 ELSE 0 END) as open_issues',
                'SUM(CASE WHEN b.has_issue = true AND (b.issue_status != :closed AND b.issue_status != :recovered AND b.issue_status IS NOT NULL) THEN b.issue_declared_amount ELSE 0 END) as total_issue_amount'
            )
            ->where('b.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('now', $now)
            ->setParameter('thirtyDays', $thirtyDays)
            ->setParameter('closed', 'closed')
            ->setParameter('recovered', 'recovered')
            ->getQuery()
            ->getSingleResult();

        // Remplacer les valeurs null par 0
        return array_map(function($value) {
            return $value ?? 0;
        }, $qb);
    }

    /**
     * Récupère les emplacements distincts pour un produit
     */
    public function findDistinctLocations(Product $product): array
    {
        $qb = $this->createQueryBuilder('b')
            ->select('DISTINCT b.location')
            ->where('b.product = :product')
            ->andWhere('b.location IS NOT NULL')
            ->andWhere('b.location != :empty')
            ->setParameter('product', $product)
            ->setParameter('empty', '')
            ->orderBy('b.location', 'ASC')
            ->getQuery()
            ->getResult();

        return array_column($qb, 'location');
    }

    /**
     * Récupère les emplacements distincts pour un service HMA
     */
    public function findDistinctLocationsForHmaService(HmaService $hmaService): array
    {
        $qb = $this->createQueryBuilder('b')
            ->select('DISTINCT b.location')
            ->where('b.hma_service = :hmaService')
            ->andWhere('b.location IS NOT NULL')
            ->andWhere('b.location != :empty')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('empty', '')
            ->orderBy('b.location', 'ASC')
            ->getQuery()
            ->getResult();

        return array_column($qb, 'location');
    }

    /**
     * Récupère le nombre total de lots pour un service HMA
     */
    public function countByHmaService(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('b')
            ->select('COUNT(b.id)')
            ->where('b.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère le nombre de lots actifs pour un service HMA
     */
    public function countActiveByHmaService(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('b')
            ->select('COUNT(b.id)')
            ->where('b.hma_service = :hmaService')
            ->andWhere('b.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère le nombre de lots expirés pour un service HMA
     */
    public function countExpiredByHmaService(HmaService $hmaService): int
    {
        $now = new \DateTime();
        
        return $this->createQueryBuilder('b')
            ->select('COUNT(b.id)')
            ->where('b.hma_service = :hmaService')
            ->andWhere('b.expiry_date IS NOT NULL')
            ->andWhere('b.expiry_date < :now')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('now', $now)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère le nombre de lots qui expirent bientôt pour un service HMA
     */
    public function countExpiringSoonByHmaService(HmaService $hmaService): int
    {
        $now = new \DateTime();
        $thirtyDays = (clone $now)->modify('+30 days');
        
        return $this->createQueryBuilder('b')
            ->select('COUNT(b.id)')
            ->where('b.hma_service = :hmaService')
            ->andWhere('b.expiry_date IS NOT NULL')
            ->andWhere('b.expiry_date >= :now')
            ->andWhere('b.expiry_date <= :thirtyDays')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('now', $now)
            ->setParameter('thirtyDays', $thirtyDays)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère la quantité totale en stock pour un service HMA
     */
    public function getTotalQuantityByHmaService(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('b')
            ->select('SUM(b.current_quantity)')
            ->where('b.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getSingleScalarResult() ?? 0;
    }

    /**
     * Récupère les lots filtrés pour un produit spécifique (avec filtres avoir)
     */
    public function findFilteredForProduct(
        Product $product,
        string $search = '',
        string $status = '',
        string $expiryStatus = '',
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null,
        bool $lowStock = false,
        string $location = '',
        string $hasIssue = '',
        string $issueStatus = '',
        string $sort = 'expiry_date',
        string $direction = 'asc'
    ): array {
        $qb = $this->createQueryBuilder('b')
            ->where('b.product = :product')
            ->setParameter('product', $product);

        // Recherche par numéro de lot
        if ($search) {
            $qb->andWhere('b.batch_number LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut
        if ($status === 'active') {
            $qb->andWhere('b.is_active = true');
        } elseif ($status === 'inactive') {
            $qb->andWhere('b.is_active = false');
        }

        // Filtre par expiration
        $now = new \DateTime();
        if ($expiryStatus === 'expired') {
            $qb->andWhere('b.expiry_date IS NOT NULL')
               ->andWhere('b.expiry_date < :now')
               ->setParameter('now', $now);
        } elseif ($expiryStatus === 'expiring_soon') {
            $thirtyDays = (clone $now)->modify('+30 days');
            $qb->andWhere('b.expiry_date IS NOT NULL')
               ->andWhere('b.expiry_date BETWEEN :now AND :thirtyDays')
               ->setParameter('now', $now)
               ->setParameter('thirtyDays', $thirtyDays);
        } elseif ($expiryStatus === 'not_expiring') {
            $qb->andWhere('b.expiry_date IS NULL OR b.expiry_date > :now')
               ->setParameter('now', $now);
        }

        // Filtre par plage de dates
        if ($dateFrom) {
            $qb->andWhere('b.expiry_date >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('b.expiry_date <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        // Filtre par stock faible
        if ($lowStock) {
            $qb->andWhere('b.current_quantity <= 10');
        }

        // Filtre par emplacement
        if ($location) {
            $qb->andWhere('b.location = :location')
               ->setParameter('location', $location);
        }

        // Filtres pour les avoirs
        if ($hasIssue === 'yes') {
            $qb->andWhere('b.has_issue = true');
        } elseif ($hasIssue === 'no') {
            $qb->andWhere('b.has_issue = false OR b.has_issue IS NULL');
        }

        if ($issueStatus) {
            $qb->andWhere('b.issue_status = :issueStatus')
               ->setParameter('issueStatus', $issueStatus);
        }

        // Tri
        $allowedSorts = ['batch_number', 'initial_quantity', 'current_quantity', 'unit_price', 'expiry_date', 'created_at', 'location', 'issue_status'];
        if (in_array($sort, $allowedSorts)) {
            if ($sort === 'issue_status') {
                $qb->orderBy('b.issue_status', $direction === 'asc' ? 'ASC' : 'DESC');
            } else {
                $qb->orderBy('b.' . $sort, $direction === 'asc' ? 'ASC' : 'DESC');
            }
        } else {
            $qb->orderBy('b.expiry_date', 'ASC');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les lots filtrés pour un service HMA (tous les produits) avec filtres avoir
     */
    public function findFilteredForHmaService(
        HmaService $hmaService,
        string $search = '',
        string $status = '',
        string $expiryStatus = '',
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null,
        bool $lowStock = false,
        string $location = '',
        ?int $productId = null,
        string $hasIssue = '',
        string $issueStatus = '',
        string $sort = 'expiry_date',
        string $direction = 'asc',
        int $page = 1,
        int $limit = 20
    ): Paginator {
        $qb = $this->createQueryBuilder('b')
            ->leftJoin('b.product', 'p')
            ->addSelect('p')
            ->where('b.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        // Filtre par produit - UNIQUEMENT si productId n'est pas null
        if ($productId !== null) {
            $qb->andWhere('p.id = :productId')
               ->setParameter('productId', $productId);
        }

        // Recherche par numéro de lot ou nom de produit
        if ($search) {
            $qb->andWhere('(b.batch_number LIKE :search OR p.name LIKE :search)')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut
        if ($status === 'active') {
            $qb->andWhere('b.is_active = true');
        } elseif ($status === 'inactive') {
            $qb->andWhere('b.is_active = false');
        }

        // Filtre par expiration
        $now = new \DateTime();
        if ($expiryStatus === 'expired') {
            $qb->andWhere('b.expiry_date IS NOT NULL')
               ->andWhere('b.expiry_date < :now')
               ->setParameter('now', $now);
        } elseif ($expiryStatus === 'expiring_soon') {
            $thirtyDays = (clone $now)->modify('+30 days');
            $qb->andWhere('b.expiry_date IS NOT NULL')
               ->andWhere('b.expiry_date BETWEEN :now AND :thirtyDays')
               ->setParameter('now', $now)
               ->setParameter('thirtyDays', $thirtyDays);
        } elseif ($expiryStatus === 'not_expiring') {
            $qb->andWhere('b.expiry_date IS NULL OR b.expiry_date > :now')
               ->setParameter('now', $now);
        }

        // Filtre par plage de dates
        if ($dateFrom) {
            $qb->andWhere('b.expiry_date >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('b.expiry_date <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        // Filtre par stock faible
        if ($lowStock) {
            $qb->andWhere('b.current_quantity <= 10');
        }

        // Filtre par emplacement
        if ($location) {
            $qb->andWhere('b.location = :location')
               ->setParameter('location', $location);
        }

        // Filtres pour les avoirs
        if ($hasIssue === 'yes') {
            $qb->andWhere('b.has_issue = true');
        } elseif ($hasIssue === 'no') {
            $qb->andWhere('b.has_issue = false OR b.has_issue IS NULL');
        }

        if ($issueStatus) {
            $qb->andWhere('b.issue_status = :issueStatus')
               ->setParameter('issueStatus', $issueStatus);
        }

        // Tri
        $allowedSorts = ['batch_number', 'initial_quantity', 'current_quantity', 'unit_price', 'expiry_date', 'created_at', 'location', 'p.name', 'issue_status'];
        if (in_array($sort, $allowedSorts)) {
            if ($sort === 'p.name') {
                $qb->orderBy('p.name', $direction === 'asc' ? 'ASC' : 'DESC');
            } elseif ($sort === 'issue_status') {
                $qb->orderBy('b.issue_status', $direction === 'asc' ? 'ASC' : 'DESC');
            } else {
                $qb->orderBy('b.' . $sort, $direction === 'asc' ? 'ASC' : 'DESC');
            }
        } else {
            $qb->orderBy('b.expiry_date', 'ASC');
        }

        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Récupère les lots pour un produit spécifique avec pagination
     */
    public function findPaginatedByProduct(
        Product $product,
        int $page = 1,
        int $limit = 20
    ): Paginator {
        $qb = $this->createQueryBuilder('b')
            ->where('b.product = :product')
            ->setParameter('product', $product)
            ->orderBy('b.created_at', 'DESC');

        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Récupère les lots actifs pour un produit
     */
    public function findActiveByProduct(Product $product): array
    {
        return $this->createQueryBuilder('b')
            ->where('b.product = :product')
            ->andWhere('b.is_active = true')
            ->andWhere('b.current_quantity > 0')
            ->setParameter('product', $product)
            ->orderBy('b.expiry_date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les lots expirés pour un service HMA
     */
    public function findExpiredByHmaService(HmaService $hmaService): array
    {
        $now = new \DateTime();
        
        return $this->createQueryBuilder('b')
            ->where('b.hma_service = :hmaService')
            ->andWhere('b.expiry_date IS NOT NULL')
            ->andWhere('b.expiry_date < :now')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('now', $now)
            ->orderBy('b.expiry_date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les lots qui expirent bientôt pour un service HMA
     */
    public function findExpiringSoonByHmaService(HmaService $hmaService): array
    {
        $now = new \DateTime();
        $thirtyDays = (clone $now)->modify('+30 days');
        
        return $this->createQueryBuilder('b')
            ->where('b.hma_service = :hmaService')
            ->andWhere('b.expiry_date IS NOT NULL')
            ->andWhere('b.expiry_date >= :now')
            ->andWhere('b.expiry_date <= :thirtyDays')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('now', $now)
            ->setParameter('thirtyDays', $thirtyDays)
            ->orderBy('b.expiry_date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les lots avec avoirs ouverts pour un service HMA
     */
    public function findOpenIssuesByHmaService(HmaService $hmaService): array
    {
        return $this->createQueryBuilder('b')
            ->where('b.hma_service = :hmaService')
            ->andWhere('b.has_issue = true')
            ->andWhere('b.issue_status != :closed')
            ->andWhere('b.issue_status != :recovered')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('closed', 'closed')
            ->setParameter('recovered', 'recovered')
            ->orderBy('b.issue_priority', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les lots en stock faible pour un service HMA
     */
    public function findLowStockByHmaService(HmaService $hmaService, int $threshold = 10): array
    {
        return $this->createQueryBuilder('b')
            ->where('b.hma_service = :hmaService')
            ->andWhere('b.current_quantity <= :threshold')
            ->andWhere('b.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('threshold', $threshold)
            ->orderBy('b.current_quantity', 'ASC')
            ->getQuery()
            ->getResult();
    }

    private function paginate($query, int $page, int $limit): Paginator
    {
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }
}