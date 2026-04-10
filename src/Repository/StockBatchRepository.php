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
     * Récupère les lots d'un produit avec pagination
     */
    public function findByProductPaginated(int $productId, int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('sb')
            ->andWhere('sb.product = :productId')
            ->setParameter('productId', $productId)
            ->orderBy('sb.expiry_date', 'ASC')
            ->addOrderBy('sb.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Récupère les lots actifs d'un produit avec pagination
     */
    public function findActiveByProductPaginated(int $productId, int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('sb')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.is_active = true')
            ->andWhere('sb.expiry_date >= :today')
            ->setParameter('productId', $productId)
            ->setParameter('today', new \DateTime())
            ->orderBy('sb.expiry_date', 'ASC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Récupère les lots expirés d'un produit avec pagination
     */
    public function findExpiredByProductPaginated(int $productId, int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('sb')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.expiry_date < :today')
            ->setParameter('productId', $productId)
            ->setParameter('today', new \DateTime())
            ->orderBy('sb.expiry_date', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Récupère les lots qui expirent bientôt
     */
    public function findExpiringSoonByProductPaginated(int $productId, int $days = 30, int $page = 1, int $limit = 12): Paginator
    {
        $today = new \DateTime();
        $expiryDate = (clone $today)->modify("+$days days");

        $query = $this->createQueryBuilder('sb')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.expiry_date >= :today')
            ->andWhere('sb.expiry_date <= :expiryDate')
            ->setParameter('productId', $productId)
            ->setParameter('today', $today)
            ->setParameter('expiryDate', $expiryDate)
            ->orderBy('sb.expiry_date', 'ASC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Récupère les lots avec stock faible
     */
    public function findLowQuantityByProductPaginated(int $productId, int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('sb')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.current_quantity <= 10')
            ->andWhere('sb.current_quantity > 0')
            ->setParameter('productId', $productId)
            ->orderBy('sb.current_quantity', 'ASC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Récupère la quantité totale d'un produit
     */
    public function getTotalQuantity(int $productId): int
    {
        $result = $this->createQueryBuilder('sb')
            ->select('SUM(sb.current_quantity) as total')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.is_active = true')
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? (int) $result : 0;
    }

    /**
     * Compte les lots actifs d'un produit
     */
    public function countActiveByProduct(int $productId): int
    {
        return $this->createQueryBuilder('sb')
            ->select('COUNT(sb.id)')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.is_active = true')
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Compte les lots expirés d'un produit
     */
    public function countExpiredByProduct(int $productId): int
    {
        return $this->createQueryBuilder('sb')
            ->select('COUNT(sb.id)')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.expiry_date < :today')
            ->setParameter('productId', $productId)
            ->setParameter('today', new \DateTime())
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Compte les lots qui expirent bientôt
     */
    public function countExpiringSoonByProduct(int $productId, int $days = 30): int
    {
        $today = new \DateTime();
        $expiryDate = (clone $today)->modify("+$days days");

        return $this->createQueryBuilder('sb')
            ->select('COUNT(sb.id)')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.expiry_date >= :today')
            ->andWhere('sb.expiry_date <= :expiryDate')
            ->setParameter('productId', $productId)
            ->setParameter('today', $today)
            ->setParameter('expiryDate', $expiryDate)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Calcule la valeur totale des lots d'un produit
     */
    public function getBatchValue(int $productId): float
    {
        $result = $this->createQueryBuilder('sb')
            ->select('SUM(sb.current_quantity * sb.unit_price) as total_value')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.is_active = true')
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? (float) $result : 0.0;
    }

    /**
     * Récupère les lots filtrés pour un produit spécifique
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

        // Tri
        $allowedSorts = ['batch_number', 'initial_quantity', 'current_quantity', 'unit_price', 'expiry_date', 'created_at', 'location'];
        if (in_array($sort, $allowedSorts)) {
            $qb->orderBy('b.' . $sort, $direction === 'asc' ? 'ASC' : 'DESC');
        } else {
            $qb->orderBy('b.expiry_date', 'ASC');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Statistiques des lots pour un produit
     */
    public function getStatsForProduct(Product $product): array
    {
        $qb = $this->createQueryBuilder('b')
            ->where('b.product = :product')
            ->setParameter('product', $product);

        $totalBatches = (clone $qb)->select('COUNT(b.id)')->getQuery()->getSingleScalarResult();
        $activeBatches = (clone $qb)->andWhere('b.is_active = true')->select('COUNT(b.id)')->getQuery()->getSingleScalarResult();
        $totalQuantity = (clone $qb)->select('SUM(b.current_quantity)')->getQuery()->getSingleScalarResult() ?: 0;
        
        $now = new \DateTime();
        $expiredBatches = (clone $qb)
            ->andWhere('b.expiry_date IS NOT NULL')
            ->andWhere('b.expiry_date < :now')
            ->setParameter('now', $now)
            ->select('COUNT(b.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $expiringSoonBatches = (clone $qb)
            ->andWhere('b.expiry_date IS NOT NULL')
            ->andWhere('b.expiry_date BETWEEN :now AND :thirtyDays')
            ->setParameter('now', $now)
            ->setParameter('thirtyDays', (clone $now)->modify('+30 days'))
            ->select('COUNT(b.id)')
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total_batches' => $totalBatches,
            'active_batches' => $activeBatches,
            'total_quantity' => $totalQuantity,
            'expired_batches' => $expiredBatches,
            'expiring_soon_batches' => $expiringSoonBatches,
        ];
    }

    /**
     * Emplacements distincts pour un produit
     */
    public function findDistinctLocations(Product $product): array
    {
        $results = $this->createQueryBuilder('b')
            ->select('DISTINCT b.location')
            ->where('b.product = :product')
            ->andWhere('b.location IS NOT NULL')
            ->andWhere('b.location != :empty')
            ->setParameter('product', $product)
            ->setParameter('empty', '')
            ->orderBy('b.location', 'ASC')
            ->getQuery()
            ->getScalarResult();

        return array_column($results, 'location');
    }

    /**
     * Récupère les lots filtrés pour un service HMA (tous les produits)
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
        ?int $productId = null, // Peut être null
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

        // Tri
        $allowedSorts = ['batch_number', 'initial_quantity', 'current_quantity', 'unit_price', 'expiry_date', 'created_at', 'location', 'p.name'];
        if (in_array($sort, $allowedSorts)) {
            if ($sort === 'p.name') {
                $qb->orderBy('p.name', $direction === 'asc' ? 'ASC' : 'DESC');
            } else {
                $qb->orderBy('b.' . $sort, $direction === 'asc' ? 'ASC' : 'DESC');
            }
        } else {
            $qb->orderBy('b.expiry_date', 'ASC');
        }

        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Statistiques globales pour un service HMA
     */
    public function getGlobalStatsForHmaService(HmaService $hmaService): array
    {
        $qb = $this->createQueryBuilder('b')
            ->where('b.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        $totalBatches = (clone $qb)->select('COUNT(b.id)')->getQuery()->getSingleScalarResult();
        $activeBatches = (clone $qb)->andWhere('b.is_active = true')->select('COUNT(b.id)')->getQuery()->getSingleScalarResult();
        $totalQuantity = (clone $qb)->select('SUM(b.current_quantity)')->getQuery()->getSingleScalarResult() ?: 0;
        
        $now = new \DateTime();
        $expiredBatches = (clone $qb)
            ->andWhere('b.expiry_date IS NOT NULL')
            ->andWhere('b.expiry_date < :now')
            ->setParameter('now', $now)
            ->select('COUNT(b.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $expiringSoonBatches = (clone $qb)
            ->andWhere('b.expiry_date IS NOT NULL')
            ->andWhere('b.expiry_date BETWEEN :now AND :thirtyDays')
            ->setParameter('now', $now)
            ->setParameter('thirtyDays', (clone $now)->modify('+30 days'))
            ->select('COUNT(b.id)')
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total_batches' => $totalBatches,
            'active_batches' => $activeBatches,
            'total_quantity' => $totalQuantity,
            'expired_batches' => $expiredBatches,
            'expiring_soon_batches' => $expiringSoonBatches,
        ];
    }

    /**
     * Emplacements distincts pour un service HMA
     */
    public function findDistinctLocationsForHmaService(HmaService $hmaService): array
    {
        $results = $this->createQueryBuilder('b')
            ->select('DISTINCT b.location')
            ->where('b.hma_service = :hmaService')
            ->andWhere('b.location IS NOT NULL')
            ->andWhere('b.location != :empty')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('empty', '')
            ->orderBy('b.location', 'ASC')
            ->getQuery()
            ->getScalarResult();

        return array_column($results, 'location');
    }

    /**
     * Pagination helper
     */
    private function paginate($query, int $page, int $limit): Paginator
    {
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }
}