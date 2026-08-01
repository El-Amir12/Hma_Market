<?php
// src/Repository/OrderRepository.php

namespace App\Repository;

use App\Entity\Customer;
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

    // ==================== METHODES EXISTANTES ====================

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

    // ==================== NOUVELLES METHODES POUR CUSTOMER ====================

    /**
     * Récupère toutes les commandes d'un client
     */
    public function findByCustomer(Customer $customer, ?array $filters = null, ?int $limit = null, ?int $offset = null): array
    {
        $qb = $this->createQueryBuilder('o')
            ->where('o.customer = :customer')
            ->setParameter('customer', $customer)
            ->orderBy('o.created_at', 'DESC');

        // Filtres optionnels
        if ($filters) {
            if (!empty($filters['status'])) {
                $qb->andWhere('o.status = :status')
                   ->setParameter('status', $filters['status']);
            }
            if (!empty($filters['search'])) {
                $qb->andWhere('o.order_number LIKE :search OR o.customer_name LIKE :search')
                   ->setParameter('search', '%' . $filters['search'] . '%');
            }
            if (!empty($filters['date_from'])) {
                $qb->andWhere('o.created_at >= :date_from')
                   ->setParameter('date_from', new \DateTime($filters['date_from']));
            }
            if (!empty($filters['date_to'])) {
                $qb->andWhere('o.created_at <= :date_to')
                   ->setParameter('date_to', new \DateTime($filters['date_to'] . ' 23:59:59'));
            }
        }

        if ($limit !== null) {
            $qb->setMaxResults($limit);
        }
        if ($offset !== null) {
            $qb->setFirstResult($offset);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Compte les commandes d'un client
     */
    public function countByCustomer(Customer $customer, ?array $filters = null): int
    {
        $qb = $this->createQueryBuilder('o')
            ->select('COUNT(o.id)')
            ->where('o.customer = :customer')
            ->setParameter('customer', $customer);

        if ($filters) {
            if (!empty($filters['status'])) {
                $qb->andWhere('o.status = :status')
                   ->setParameter('status', $filters['status']);
            }
            if (!empty($filters['search'])) {
                $qb->andWhere('o.order_number LIKE :search OR o.customer_name LIKE :search')
                   ->setParameter('search', '%' . $filters['search'] . '%');
            }
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Récupère une commande d'un client par son ID
     */
    public function findOneByCustomerAndId(Customer $customer, int $orderId): ?Order
    {
        return $this->createQueryBuilder('o')
            ->where('o.customer = :customer')
            ->andWhere('o.id = :orderId')
            ->setParameter('customer', $customer)
            ->setParameter('orderId', $orderId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Récupère les commandes d'un client par statut
     */
    public function findByCustomerAndStatus(Customer $customer, string $status): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.customer = :customer')
            ->andWhere('o.status = :status')
            ->setParameter('customer', $customer)
            ->setParameter('status', $status)
            ->orderBy('o.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les dernières commandes d'un client
     */
    public function findLastOrdersByCustomer(Customer $customer, int $limit = 5): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.customer = :customer')
            ->setParameter('customer', $customer)
            ->orderBy('o.created_at', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère le total des dépenses d'un client
     */
    public function getTotalSpentByCustomer(Customer $customer): float
    {
        $result = $this->createQueryBuilder('o')
            ->select('SUM(o.total_amount) as total')
            ->where('o.customer = :customer')
            ->andWhere('o.status IN (:statuses)')
            ->setParameter('customer', $customer)
            ->setParameter('statuses', ['completed', 'delivered', 'paid'])
            ->getQuery()
            ->getOneOrNullResult();

        return (float) ($result['total'] ?? 0);
    }

    /**
     * Récupère le nombre total de commandes d'un client par statut
     */
    public function countByCustomerAndStatus(Customer $customer): array
    {
        $results = $this->createQueryBuilder('o')
            ->select('o.status, COUNT(o.id) as count')
            ->where('o.customer = :customer')
            ->setParameter('customer', $customer)
            ->groupBy('o.status')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $result) {
            $stats[$result['status']] = (int) $result['count'];
        }

        return $stats;
    }

    /**
     * Récupère le total des commandes d'un client par date
     */
    public function getTotalByCustomerAndDate(Customer $customer, \DateTime $date): float
    {
        $start = clone $date;
        $start->setTime(0, 0, 0);
        $end = clone $date;
        $end->setTime(23, 59, 59);

        $result = $this->createQueryBuilder('o')
            ->select('SUM(o.total_amount) as total')
            ->where('o.customer = :customer')
            ->andWhere('o.created_at BETWEEN :start AND :end')
            ->andWhere('o.status IN (:statuses)')
            ->setParameter('customer', $customer)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->setParameter('statuses', ['completed', 'delivered', 'paid'])
            ->getQuery()
            ->getOneOrNullResult();

        return (float) ($result['total'] ?? 0);
    }

    /**
     * Récupère le total des commandes d'un client par mois
     */
    public function getTotalByCustomerAndMonth(Customer $customer, \DateTime $date): float
    {
        $start = clone $date;
        $start->setDate((int)$start->format('Y'), (int)$start->format('m'), 1);
        $start->setTime(0, 0, 0);
        
        $end = clone $start;
        $end->modify('+1 month');
        $end->setTime(0, 0, 0);

        $result = $this->createQueryBuilder('o')
            ->select('SUM(o.total_amount) as total')
            ->where('o.customer = :customer')
            ->andWhere('o.created_at >= :start')
            ->andWhere('o.created_at < :end')
            ->andWhere('o.status IN (:statuses)')
            ->setParameter('customer', $customer)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->setParameter('statuses', ['completed', 'delivered', 'paid'])
            ->getQuery()
            ->getOneOrNullResult();

        return (float) ($result['total'] ?? 0);
    }

    /**
     * Récupère les produits les plus achetés par un client
     * Utilise le champ product_id de OrderItem
     */
    public function getTopProductsByCustomer(Customer $customer, int $limit = 5): array
    {
        return $this->createQueryBuilder('o')
            ->select('p.id, p.name, p.image, SUM(oi.quantity) as total_quantity, SUM(oi.total_price) as total_amount')
            ->join('o.orderItems', 'oi')
            ->join('App\Entity\Product', 'p', 'WITH', 'p.id = oi.product_id')
            ->where('o.customer = :customer')
            ->andWhere('o.status IN (:statuses)')
            ->setParameter('customer', $customer)
            ->setParameter('statuses', ['completed', 'delivered', 'paid'])
            ->groupBy('p.id')
            ->orderBy('total_quantity', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les statistiques mensuelles d'un client
     */
    public function getMonthlyStatsByCustomer(Customer $customer, int $months = 12): array
    {
        $stats = [];
        $now = new \DateTime();
        
        // Initialiser les mois
        for ($i = $months - 1; $i >= 0; $i--) {
            $date = clone $now;
            $date->modify("-{$i} months");
            $key = $date->format('Y-m');
            
            $stats[$key] = [
                'month' => $date->format('M Y'),
                'total' => 0,
                'count' => 0,
            ];
        }

        $results = $this->createQueryBuilder('o')
            ->select('YEAR(o.created_at) as year, MONTH(o.created_at) as month, SUM(o.total_amount) as total, COUNT(o.id) as count')
            ->where('o.customer = :customer')
            ->andWhere('o.status IN (:statuses)')
            ->setParameter('customer', $customer)
            ->setParameter('statuses', ['completed', 'delivered', 'paid'])
            ->groupBy('year, month')
            ->orderBy('year', 'DESC')
            ->addOrderBy('month', 'DESC')
            ->getQuery()
            ->getResult();

        foreach ($results as $result) {
            $key = $result['year'] . '-' . str_pad($result['month'], 2, '0', STR_PAD_LEFT);
            if (isset($stats[$key])) {
                $stats[$key]['total'] = (float) $result['total'];
                $stats[$key]['count'] = (int) $result['count'];
            }
        }

        return array_values($stats);
    }

    /**
     * Récupère les commandes en attente d'un client
     */
    public function findPendingByCustomer(Customer $customer): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.customer = :customer')
            ->andWhere('o.status = :status')
            ->setParameter('customer', $customer)
            ->setParameter('status', Order::STATUS_PENDING)
            ->orderBy('o.created_at', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les commandes en cours d'un client
     */
    public function findInProgressByCustomer(Customer $customer): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.customer = :customer')
            ->andWhere('o.status IN (:statuses)')
            ->setParameter('customer', $customer)
            ->setParameter('statuses', [Order::STATUS_PENDING, Order::STATUS_PROCESSING, Order::STATUS_SHIPPED])
            ->orderBy('o.created_at', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les commandes terminées d'un client
     */
    public function findCompletedByCustomer(Customer $customer): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.customer = :customer')
            ->andWhere('o.status IN (:statuses)')
            ->setParameter('customer', $customer)
            ->setParameter('statuses', [Order::STATUS_DELIVERED, Order::STATUS_COMPLETED])
            ->orderBy('o.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère le nombre total de commandes d'un client (tous statuts confondus)
     */
    public function getTotalOrdersCountByCustomer(Customer $customer): int
    {
        return (int) $this->createQueryBuilder('o')
            ->select('COUNT(o.id)')
            ->where('o.customer = :customer')
            ->setParameter('customer', $customer)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère la première et la dernière commande d'un client
     */
    public function getFirstAndLastOrderByCustomer(Customer $customer): array
    {
        $first = $this->createQueryBuilder('o')
            ->where('o.customer = :customer')
            ->setParameter('customer', $customer)
            ->orderBy('o.created_at', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        $last = $this->createQueryBuilder('o')
            ->where('o.customer = :customer')
            ->setParameter('customer', $customer)
            ->orderBy('o.created_at', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        return [
            'first' => $first,
            'last' => $last,
        ];
    }
}