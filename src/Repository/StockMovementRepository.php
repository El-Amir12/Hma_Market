<?php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\StockMovement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StockMovement>
 */
class StockMovementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockMovement::class);
    }

    /**
     * Récupère les mouvements filtrés pour un service HMA
     */
    public function findFilteredForHmaService(
        HmaService $hmaService,
        string $search = '',
        string $movementType = '',
        ?int $userId = null,
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null,
        string $sort = 'created_at',
        string $direction = 'desc',
        int $page = 1,
        int $limit = 20
    ): Paginator {
        $qb = $this->createQueryBuilder('sm')
            ->leftJoin('sm.stock_batch', 'sb')
            ->leftJoin('sb.product', 'p')
            ->leftJoin('sm.user', 'u')
            ->addSelect('sb', 'p', 'u')
            ->where('sm.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($search) {
            $qb->andWhere('(p.name LIKE :search OR p.barcode LIKE :search OR sb.batch_number LIKE :search)')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($movementType) {
            $qb->andWhere('sm.movement_type = :movementType')
                ->setParameter('movementType', $movementType);
        }

        if ($userId) {
            $qb->andWhere('u.id = :userId')
                ->setParameter('userId', $userId);
        }

        if ($dateFrom) {
            $qb->andWhere('sm.created_at >= :dateFrom')
                ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('sm.created_at <= :dateTo')
                ->setParameter('dateTo', $dateTo);
        }

        $allowedSorts = ['created_at', 'movement_type', 'quantity'];
        if (in_array($sort, $allowedSorts)) {
            $qb->orderBy('sm.' . $sort, $direction === 'asc' ? 'ASC' : 'DESC');
        } else {
            $qb->orderBy('sm.created_at', 'DESC');
        }

        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Récupère tous les mouvements filtrés sans pagination (pour les exports)
     */
    public function findAllFilteredForHmaService(
        HmaService $hmaService,
        string $search = '',
        string $movementType = '',
        ?int $userId = null,
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null,
        string $sort = 'created_at',
        string $direction = 'desc'
    ): array {
        $qb = $this->createQueryBuilder('sm')
            ->leftJoin('sm.stock_batch', 'sb')
            ->leftJoin('sb.product', 'p')
            ->leftJoin('sm.user', 'u')
            ->addSelect('sb', 'p', 'u')
            ->where('sm.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($search) {
            $qb->andWhere('(p.name LIKE :search OR p.barcode LIKE :search OR sb.batch_number LIKE :search)')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($movementType) {
            $qb->andWhere('sm.movement_type = :movementType')
                ->setParameter('movementType', $movementType);
        }

        if ($userId) {
            $qb->andWhere('u.id = :userId')
                ->setParameter('userId', $userId);
        }

        if ($dateFrom) {
            $qb->andWhere('sm.created_at >= :dateFrom')
                ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('sm.created_at <= :dateTo')
                ->setParameter('dateTo', $dateTo);
        }

        $allowedSorts = ['created_at', 'movement_type', 'quantity'];
        if (in_array($sort, $allowedSorts)) {
            $qb->orderBy('sm.' . $sort, $direction === 'asc' ? 'ASC' : 'DESC');
        } else {
            $qb->orderBy('sm.created_at', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les statistiques des mouvements pour un service HMA
     */
    public function getStatsForHmaService(
        HmaService $hmaService,
        string $search = '',
        string $movementType = '',
        ?int $userId = null,
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null
    ): array {
        $qb = $this->createQueryBuilder('sm')
            ->select('COUNT(sm.id) as total_movements')
            ->addSelect('SUM(sm.quantity) as total_quantity')
            ->addSelect('SUM(CASE WHEN sm.movement_type IN (:inTypes) THEN sm.quantity ELSE 0 END) as total_in')
            ->addSelect('SUM(CASE WHEN sm.movement_type IN (:outTypes) THEN sm.quantity ELSE 0 END) as total_out')
            ->where('sm.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('inTypes', ['purchase_in', 'return_in', 'adjustment_in', 'transfer_in'])
            ->setParameter('outTypes', ['sale_out', 'return_out', 'adjustment_out', 'transfer_out']);

        if ($search) {
            $qb->leftJoin('sm.stock_batch', 'sb')
               ->leftJoin('sb.product', 'p')
               ->andWhere('(p.name LIKE :search OR p.barcode LIKE :search OR sb.batch_number LIKE :search)')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($movementType) {
            $qb->andWhere('sm.movement_type = :movementType')
               ->setParameter('movementType', $movementType);
        }

        if ($userId) {
            $qb->leftJoin('sm.user', 'u')
               ->andWhere('u.id = :userId')
               ->setParameter('userId', $userId);
        }

        if ($dateFrom) {
            $qb->andWhere('sm.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('sm.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        $result = $qb->getQuery()->getSingleResult();

        return [
            'total_movements' => (int)($result['total_movements'] ?? 0),
            'total_quantity' => (int)($result['total_quantity'] ?? 0),
            'total_in' => (int)($result['total_in'] ?? 0),
            'total_out' => (int)($result['total_out'] ?? 0),
        ];
    }

    /**
     * Récupère les statistiques par type de mouvement
     */
    public function getMovementTypeStats(
        HmaService $hmaService,
        string $search = '',
        ?int $userId = null,
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null
    ): array {
        $qb = $this->createQueryBuilder('sm')
            ->select('sm.movement_type as type')
            ->addSelect('SUM(sm.quantity) as total_quantity')
            ->where('sm.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('sm.movement_type');

        if ($search) {
            $qb->leftJoin('sm.stock_batch', 'sb')
               ->leftJoin('sb.product', 'p')
               ->andWhere('(p.name LIKE :search OR p.barcode LIKE :search OR sb.batch_number LIKE :search)')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($userId) {
            $qb->leftJoin('sm.user', 'u')
               ->andWhere('u.id = :userId')
               ->setParameter('userId', $userId);
        }

        if ($dateFrom) {
            $qb->andWhere('sm.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('sm.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        $results = $qb->getQuery()->getResult();
        
        $stats = [];
        foreach ($results as $result) {
            $stats[$result['type']] = (int)$result['total_quantity'];
        }
        
        return $stats;
    }

    /**
     * Récupère les types de mouvements distincts pour un service HMA
     */
    public function getDistinctMovementTypes(HmaService $hmaService): array
    {
        $result = $this->createQueryBuilder('sm')
            ->select('DISTINCT sm.movement_type')
            ->where('sm.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getResult();

        return array_column($result, 'movement_type');
    }

    /**
     * Récupère les mouvements par lot
     */
    public function findByBatchId(int $batchId): array
    {
        return $this->createQueryBuilder('sm')
            ->where('sm.stock_batch = :batchId')
            ->setParameter('batchId', $batchId)
            ->orderBy('sm.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les mouvements par produit
     */
    public function findByProductId(int $productId): array
    {
        return $this->createQueryBuilder('sm')
            ->leftJoin('sm.stock_batch', 'sb')
            ->where('sb.product = :productId')
            ->setParameter('productId', $productId)
            ->orderBy('sm.created_at', 'DESC')
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

    public function findByCompanyAndPeriod(HmaService $company, \DateTime $start, \DateTime $end): array
    {
        return $this->createQueryBuilder('sm')
            ->leftJoin('sm.product', 'p')
            ->where('p.hma_service = :company')
            ->andWhere('sm.created_at BETWEEN :start AND :end')
            ->setParameter('company', $company)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('sm.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }
}