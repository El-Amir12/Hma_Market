<?php
// src/Repository/StockBatchRepository.php

namespace App\Repository;

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

    public function findLowQuantityByProductPaginated(int $productId, int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('sb')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.current_quantity <= sb.quantity * 0.2') // Moins de 20% restant
            ->andWhere('sb.current_quantity > 0')
            ->setParameter('productId', $productId)
            ->orderBy('sb.current_quantity', 'ASC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

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

    public function countActiveByProduct(int $productId): int
    {
        return $this->count([
            'product' => $productId,
            'is_active' => true
        ]);
    }

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

    public function getBatchValue(int $productId): float
    {
        $result = $this->createQueryBuilder('sb')
            ->select('SUM(sb.current_quantity * sb.purchase_price) as total_value')
            ->andWhere('sb.product = :productId')
            ->andWhere('sb.is_active = true')
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? (float) $result : 0.0;
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