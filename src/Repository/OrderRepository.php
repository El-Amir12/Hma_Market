<?php
// src/Repository/OrderRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\Order;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Order>
 */
class OrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Order::class);
    }

    public function findFilteredQuery(
        HmaService $hmaService,
        ?string $status = null,
        ?string $paymentMethod = null,
        ?int $userId = null,
        ?\DateTime $dateFrom = null,
        ?\DateTime $dateTo = null,
        ?float $minAmount = null,
        ?float $maxAmount = null,
        ?string $search = null,
        string $sort = 'created_at',
        string $direction = 'desc'
    ): Query {
        $qb = $this->createQueryBuilder('o')
            ->where('o.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);
        
        if ($status) {
            $qb->andWhere('o.status = :status')->setParameter('status', $status);
        }
        
        if ($paymentMethod) {
            $qb->andWhere('o.payment_method = :paymentMethod')->setParameter('paymentMethod', $paymentMethod);
        }
        
        if ($userId) {
            $qb->andWhere('o.user = :userId')->setParameter('userId', $userId);
        }
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')->setParameter('dateTo', $dateTo);
        }
        
        if ($minAmount) {
            $qb->andWhere('o.total_amount >= :minAmount')->setParameter('minAmount', $minAmount);
        }
        
        if ($maxAmount) {
            $qb->andWhere('o.total_amount <= :maxAmount')->setParameter('maxAmount', $maxAmount);
        }
        
        if ($search) {
            $qb->andWhere('o.order_number LIKE :search OR o.customer_name LIKE :search OR o.customer_phone LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }
        
        $qb->orderBy('o.' . $sort, $direction);
        
        return $qb->getQuery();
    }

    public function getStats(HmaService $hmaService, ?\DateTime $dateFrom = null, ?\DateTime $dateTo = null): array
    {
        $qb = $this->createQueryBuilder('o')
            ->select('
                COUNT(o.id) as total_orders,
                SUM(o.total_amount) as total_sales,
                AVG(o.total_amount) as average_basket,
                COUNT(DISTINCT o.customer_phone) as unique_customers,
                MAX(o.total_amount) as max_sale,
                MIN(o.total_amount) as min_sale,
                SUM(oi.quantity) as total_items,
                AVG(o.total_amount) as average_ticket,
                SUM(CASE WHEN o.is_active = true THEN 1 ELSE 0 END) as active_orders,
                SUM(CASE WHEN o.is_active = false THEN 1 ELSE 0 END) as disabled_orders,
                SUM(CASE WHEN o.status = \'cancelled\' THEN 1 ELSE 0 END) as cancelled_orders
            ')
            ->leftJoin('o.orderItems', 'oi')
            ->where('o.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')->setParameter('dateTo', $dateTo);
        }
        
        $result = $qb->getQuery()->getOneOrNullResult();
        
        $totalOrders = (int)($result['total_orders'] ?? 0);
        $disabledOrders = (int)($result['disabled_orders'] ?? 0);
        $disabledPercentage = $totalOrders > 0 ? ($disabledOrders / $totalOrders) * 100 : 0;
        
        return [
            'total_orders' => $totalOrders,
            'total_sales' => (float)($result['total_sales'] ?? 0),
            'average_basket' => (float)($result['average_basket'] ?? 0),
            'unique_customers' => (int)($result['unique_customers'] ?? 0),
            'max_sale' => (float)($result['max_sale'] ?? 0),
            'min_sale' => (float)($result['min_sale'] ?? 0),
            'total_items' => (int)($result['total_items'] ?? 0),
            'average_ticket' => (float)($result['average_ticket'] ?? 0),
            'active_orders' => (int)($result['active_orders'] ?? 0),
            'disabled_orders' => $disabledOrders,
            'disabled_percentage' => round($disabledPercentage, 1),
            'cancelled_orders' => (int)($result['cancelled_orders'] ?? 0),
        ];
    }

    /**
     * Récupère les commandes d'une entreprise sur une période donnée
     */
    public function findByCompanyAndPeriod(HmaService $company, \DateTimeInterface $startDate, \DateTimeInterface $endDate): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.hma_service = :company')
            ->andWhere('o.created_at BETWEEN :startDate AND :endDate')
            ->setParameter('company', $company)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('o.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }
    
}