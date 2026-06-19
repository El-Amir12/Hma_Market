<?php
// src/Service/Report/SalesReportService.php - Version corrigée

namespace App\Service\Report;

use App\Entity\HmaService;
use App\Entity\Order;
use App\Entity\OrderItem;
use Doctrine\ORM\EntityManagerInterface;

class SalesReportService
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    /**
     * Récupère les KPIs principaux des ventes
     */
    public function getKPIs(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('
                COUNT(o.id) as total_orders,
                SUM(o.total_amount) as total_revenue,
                SUM(o.amount_paid) as total_paid,
                AVG(o.total_amount) as avg_basket,
                COUNT(DISTINCT o.customer_phone) as unique_customers,
                SUM(oi.quantity) as total_items,
                SUM(oi.promotionDiscountAmount) as total_discount
            ')
            ->from(Order::class, 'o')
            ->leftJoin('o.orderItems', 'oi')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        if ($paymentMethod) {
            $qb->andWhere('o.payment_method = :paymentMethod')
               ->setParameter('paymentMethod', $paymentMethod);
        }
        
        $result = $qb->getQuery()->getSingleResult();
        
        return [
            'revenue' => round((float) ($result['total_revenue'] ?? 0), 2),
            'total_orders' => (int) ($result['total_orders'] ?? 0),
            'average_basket' => round((float) ($result['avg_basket'] ?? 0), 2),
            'total_items' => (int) ($result['total_items'] ?? 0),
            'total_discount' => round((float) ($result['total_discount'] ?? 0), 2),
            'unique_customers' => (int) ($result['unique_customers'] ?? 0),
        ];
    }

    /**
     * Statistiques d'évolution temporelle
     */
    public function getTimelineStats(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        if (!$dateFrom) {
            $dateFrom = new \DateTime('-11 months');
            $dateFrom = $dateFrom->modify('first day of this month');
        }
        
        if (!$dateTo) {
            $dateTo = new \DateTime();
        }
        
        $results = [];
        $current = clone $dateFrom;
        
        while ($current <= $dateTo) {
            $monthStart = clone $current;
            $monthStart->setTime(0, 0, 0);
            $monthEnd = clone $current;
            $monthEnd->modify('last day of this month')->setTime(23, 59, 59);
            
            $qb = $this->entityManager->createQueryBuilder()
                ->select('
                    SUM(o.total_amount) as revenue,
                    COUNT(o.id) as orders,
                    SUM(oi.quantity) as items,
                    SUM(oi.promotionDiscountAmount) as discounts
                ')
                ->from(Order::class, 'o')
                ->leftJoin('o.orderItems', 'oi')
                ->where('o.hma_service = :hmaService')
                ->andWhere('o.status = :status')
                ->andWhere('o.is_active = true')
                ->andWhere('o.created_at BETWEEN :start AND :end')
                ->setParameter('hmaService', $hmaService)
                ->setParameter('status', 'completed')
                ->setParameter('start', $monthStart)
                ->setParameter('end', $monthEnd);
            
            if ($paymentMethod) {
                $qb->andWhere('o.payment_method = :paymentMethod')
                   ->setParameter('paymentMethod', $paymentMethod);
            }
            
            $stats = $qb->getQuery()->getSingleResult();
            
            $results[] = [
                'month' => $current->format('M Y'),
                'revenue' => round((float) ($stats['revenue'] ?? 0), 2),
                'orders' => (int) ($stats['orders'] ?? 0),
                'items' => (int) ($stats['items'] ?? 0),
                'discounts' => round((float) ($stats['discounts'] ?? 0), 2),
                'average_basket' => ($stats['orders'] ?? 0) > 0 ? round(($stats['revenue'] ?? 0) / $stats['orders'], 2) : 0,
            ];
            
            $current->modify('first day of next month');
        }
        
        return $results;
    }

    /**
     * Top produits/recettes les plus vendus
     */
    public function getTopSelling(HmaService $hmaService, array $filters = [], bool $isRestaurant = false): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('
                oi.product_name as name,
                SUM(oi.quantity) as total_quantity,
                SUM(oi.total_price) as total_revenue,
                SUM(oi.promotionDiscountAmount) as total_discount
            ')
            ->from(OrderItem::class, 'oi')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        if ($paymentMethod) {
            $qb->andWhere('o.payment_method = :paymentMethod')
               ->setParameter('paymentMethod', $paymentMethod);
        }
        
        if ($isRestaurant) {
            $qb->addSelect('r.name as recipe_name')
               ->leftJoin('oi.recipe', 'r')
               ->addGroupBy('r.name');
        }
        
        $qb->groupBy('oi.product_name')
           ->orderBy('total_revenue', 'DESC')
           ->setMaxResults(10);
        
        $results = $qb->getQuery()->getResult();
        
        $formatted = [];
        foreach ($results as $item) {
            $formatted[] = [
                'name' => $item['name'],
                'recipe_name' => $item['recipe_name'] ?? null,
                'total_quantity' => (int) $item['total_quantity'],
                'total_revenue' => round((float) $item['total_revenue'], 2),
                'total_discount' => round((float) ($item['total_discount'] ?? 0), 2),
            ];
        }
        
        return $formatted;
    }

    /**
     * Impact des promotions sur les ventes - Version corrigée SQL natif
     */
    public function getPromotionImpact(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        $conn = $this->entityManager->getConnection();
        
        // Construction de la requête sans paramètres nommés problématiques
        $sql = '
            SELECT 
                COUNT(DISTINCT CASE WHEN oi.promotion_id IS NOT NULL THEN o.id END) as orders_with_promo,
                COUNT(DISTINCT CASE WHEN oi.promotion_id IS NULL THEN o.id END) as orders_without_promo,
                SUM(CASE WHEN oi.promotion_id IS NOT NULL THEN oi.total_price ELSE 0 END) as revenue_with_promo,
                SUM(CASE WHEN oi.promotion_id IS NULL THEN oi.total_price ELSE 0 END) as revenue_without_promo,
                SUM(oi.promotion_discount_amount) as total_discount_given
            FROM order_item oi
            JOIN `order` o ON oi.vente_id = o.id
            WHERE o.hma_service_id = ' . (int) $hmaService->getId() . '
                AND o.status = "completed"
                AND o.is_active = 1
        ';
        
        if ($dateFrom) {
            $sql .= ' AND o.created_at >= "' . $dateFrom->format('Y-m-d H:i:s') . '"';
        }
        if ($dateTo) {
            $sql .= ' AND o.created_at <= "' . $dateTo->format('Y-m-d H:i:s') . '"';
        }
        if ($paymentMethod) {
            $sql .= ' AND o.payment_method = "' . $paymentMethod . '"';
        }
        
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery()->fetchAssociative();
        
        $ordersWithPromo = (int) ($result['orders_with_promo'] ?? 0);
        $ordersWithoutPromo = (int) ($result['orders_without_promo'] ?? 0);
        $totalOrders = $ordersWithPromo + $ordersWithoutPromo;
        
        return [
            'orders_with_promo' => $ordersWithPromo,
            'orders_without_promo' => $ordersWithoutPromo,
            'percentage_with_promo' => $totalOrders > 0 ? round(($ordersWithPromo / $totalOrders) * 100, 1) : 0,
            'revenue_with_promo' => round((float) ($result['revenue_with_promo'] ?? 0), 2),
            'revenue_without_promo' => round((float) ($result['revenue_without_promo'] ?? 0), 2),
            'total_discount_given' => round((float) ($result['total_discount_given'] ?? 0), 2),
            'top_promotions' => $this->getTopPromotions($hmaService, $filters),
        ];
    }

    /**
     * Top promotions utilisées - Version corrigée
     */
    private function getTopPromotions(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                oi.promotion_name as name,
                COUNT(oi.id) as usage_count,
                SUM(oi.promotion_discount_amount) as total_discount
            FROM order_item oi
            JOIN `order` o ON oi.vente_id = o.id
            WHERE o.hma_service_id = ' . (int) $hmaService->getId() . '
                AND o.status = "completed"
                AND o.is_active = 1
                AND oi.promotion_id IS NOT NULL
        ';
        
        if ($dateFrom) {
            $sql .= ' AND o.created_at >= "' . $dateFrom->format('Y-m-d H:i:s') . '"';
        }
        if ($dateTo) {
            $sql .= ' AND o.created_at <= "' . $dateTo->format('Y-m-d H:i:s') . '"';
        }
        if ($paymentMethod) {
            $sql .= ' AND o.payment_method = "' . $paymentMethod . '"';
        }
        
        $sql .= ' GROUP BY oi.promotion_name ORDER BY total_discount DESC LIMIT 5';
        
        $stmt = $conn->prepare($sql);
        $results = $stmt->executeQuery()->fetchAllAssociative();
        
        $formatted = [];
        foreach ($results as $item) {
            if ($item['name']) {
                $formatted[] = [
                    'name' => $item['name'],
                    'usage_count' => (int) $item['usage_count'],
                    'total_discount' => round((float) $item['total_discount'], 2),
                ];
            }
        }
        
        return $formatted;
    }

    /**
     * Répartition des ventes
     */
    public function getSalesDistribution(HmaService $hmaService, array $filters = [], bool $isRestaurant = false): array
    {
        return [
            'by_payment_method' => $this->getPaymentDistribution($hmaService, $filters),
            'by_hour' => $this->getHourlyDistribution($hmaService, $filters),
            'by_day' => $this->getDailyDistribution($hmaService, $filters),
            'by_category' => $isRestaurant ? $this->getCategoryDistribution($hmaService, $filters) : [],
        ];
    }

    /**
     * Répartition par mode de paiement
     */
    private function getPaymentDistribution(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('o.payment_method as method, COUNT(o.id) as count, SUM(o.total_amount) as total')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        if ($paymentMethod) {
            $qb->andWhere('o.payment_method = :paymentMethod')
               ->setParameter('paymentMethod', $paymentMethod);
        }
        
        $qb->groupBy('o.payment_method');
        
        $results = $qb->getQuery()->getResult();
        
        $methodLabels = [
            'cash' => 'Espèces',
            'card' => 'Carte bancaire',
            'mobile_money' => 'Mobile Money',
        ];
        
        $totalCount = array_sum(array_column($results, 'count'));
        $formatted = [];
        
        foreach ($results as $item) {
            $formatted[] = [
                'method' => $item['method'],
                'label' => $methodLabels[$item['method']] ?? $item['method'],
                'count' => (int) $item['count'],
                'percentage' => $totalCount > 0 ? round(($item['count'] / $totalCount) * 100, 1) : 0,
                'total' => round((float) $item['total'], 2),
            ];
        }
        
        return $formatted;
    }

    /**
     * Répartition par heure - Version corrigée SQL natif
     */
    private function getHourlyDistribution(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                HOUR(o.created_at) as hour,
                COUNT(o.id) as count,
                SUM(o.total_amount) as total
            FROM `order` o
            WHERE o.hma_service_id = ' . (int) $hmaService->getId() . '
                AND o.status = "completed"
                AND o.is_active = 1
        ';
        
        if ($dateFrom) {
            $sql .= ' AND o.created_at >= "' . $dateFrom->format('Y-m-d H:i:s') . '"';
        }
        if ($dateTo) {
            $sql .= ' AND o.created_at <= "' . $dateTo->format('Y-m-d H:i:s') . '"';
        }
        if ($paymentMethod) {
            $sql .= ' AND o.payment_method = "' . $paymentMethod . '"';
        }
        
        $sql .= ' GROUP BY HOUR(o.created_at) ORDER BY hour ASC';
        
        $stmt = $conn->prepare($sql);
        $results = $stmt->executeQuery()->fetchAllAssociative();
        
        $distribution = [];
        for ($h = 8; $h <= 22; $h++) {
            $found = false;
            foreach ($results as $item) {
                if ((int) $item['hour'] === $h) {
                    $distribution[] = [
                        'hour' => $h,
                        'label' => $h . 'h',
                        'count' => (int) $item['count'],
                        'total' => round((float) $item['total'], 2),
                    ];
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $distribution[] = [
                    'hour' => $h,
                    'label' => $h . 'h',
                    'count' => 0,
                    'total' => 0,
                ];
            }
        }
        
        return $distribution;
    }

    /**
     * Répartition par jour de semaine - Version corrigée SQL natif
     */
    private function getDailyDistribution(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                DAYOFWEEK(o.created_at) as day_num,
                COUNT(o.id) as count,
                SUM(o.total_amount) as total
            FROM `order` o
            WHERE o.hma_service_id = ' . (int) $hmaService->getId() . '
                AND o.status = "completed"
                AND o.is_active = 1
        ';
        
        if ($dateFrom) {
            $sql .= ' AND o.created_at >= "' . $dateFrom->format('Y-m-d H:i:s') . '"';
        }
        if ($dateTo) {
            $sql .= ' AND o.created_at <= "' . $dateTo->format('Y-m-d H:i:s') . '"';
        }
        if ($paymentMethod) {
            $sql .= ' AND o.payment_method = "' . $paymentMethod . '"';
        }
        
        $sql .= ' GROUP BY DAYOFWEEK(o.created_at) ORDER BY day_num ASC';
        
        $stmt = $conn->prepare($sql);
        $results = $stmt->executeQuery()->fetchAllAssociative();
        
        $dayLabels = [
            1 => 'Dimanche',
            2 => 'Lundi',
            3 => 'Mardi',
            4 => 'Mercredi',
            5 => 'Jeudi',
            6 => 'Vendredi',
            7 => 'Samedi',
        ];
        
        $distribution = [];
        foreach ($dayLabels as $num => $label) {
            $found = false;
            foreach ($results as $item) {
                if ((int) $item['day_num'] === $num) {
                    $distribution[] = [
                        'day' => $label,
                        'day_num' => $num,
                        'count' => (int) $item['count'],
                        'total' => round((float) $item['total'], 2),
                    ];
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $distribution[] = [
                    'day' => $label,
                    'day_num' => $num,
                    'count' => 0,
                    'total' => 0,
                ];
            }
        }
        
        return $distribution;
    }

    /**
     * Répartition par catégorie (pour restaurants)
     */
    private function getCategoryDistribution(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('c.name as category, SUM(oi.quantity) as quantity, SUM(oi.total_price) as revenue')
            ->from(OrderItem::class, 'oi')
            ->join('oi.vente', 'o')
            ->join('oi.recipe', 'r')
            ->leftJoin('r.category', 'c')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed')
            ->groupBy('c.name');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        if ($paymentMethod) {
            $qb->andWhere('o.payment_method = :paymentMethod')
               ->setParameter('paymentMethod', $paymentMethod);
        }
        
        $results = $qb->getQuery()->getResult();
        
        $totalRevenue = array_sum(array_column($results, 'revenue'));
        $distribution = [];
        
        foreach ($results as $item) {
            $distribution[] = [
                'category' => $item['category'] ?? 'Sans catégorie',
                'quantity' => (int) $item['quantity'],
                'revenue' => round((float) $item['revenue'], 2),
                'percentage' => $totalRevenue > 0 ? round(($item['revenue'] / $totalRevenue) * 100, 1) : 0,
            ];
        }
        
        usort($distribution, function($a, $b) {
            return $b['revenue'] <=> $a['revenue'];
        });
        
        return $distribution;
    }

    /**
     * Ventes par période (jour/semaine/mois)
     */
    public function getSalesByPeriod(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
        if (!$dateFrom) {
            $dateFrom = new \DateTime('-30 days');
        }
        if (!$dateTo) {
            $dateTo = new \DateTime();
        }
        
        $interval = $dateFrom->diff($dateTo);
        $groupBy = $interval->days > 90 ? 'month' : ($interval->days > 30 ? 'week' : 'day');
        
        $conn = $this->entityManager->getConnection();
        
        switch ($groupBy) {
            case 'day':
                $sql = '
                    SELECT 
                        DATE(o.created_at) as period,
                        COUNT(o.id) as orders,
                        SUM(o.total_amount) as revenue,
                        SUM(oi.quantity) as items
                    FROM `order` o
                    LEFT JOIN order_item oi ON oi.vente_id = o.id
                    WHERE o.hma_service_id = ' . (int) $hmaService->getId() . '
                        AND o.status = "completed"
                        AND o.is_active = 1
                        AND o.created_at >= "' . $dateFrom->format('Y-m-d H:i:s') . '"
                        AND o.created_at <= "' . $dateTo->format('Y-m-d H:i:s') . '"
                    GROUP BY DATE(o.created_at)
                    ORDER BY period ASC
                ';
                break;
            case 'week':
                $sql = '
                    SELECT 
                        CONCAT(YEAR(o.created_at), \'-S\', WEEK(o.created_at)) as period,
                        MIN(DATE(o.created_at)) as start_date,
                        COUNT(o.id) as orders,
                        SUM(o.total_amount) as revenue,
                        SUM(oi.quantity) as items
                    FROM `order` o
                    LEFT JOIN order_item oi ON oi.vente_id = o.id
                    WHERE o.hma_service_id = ' . (int) $hmaService->getId() . '
                        AND o.status = "completed"
                        AND o.is_active = 1
                        AND o.created_at >= "' . $dateFrom->format('Y-m-d H:i:s') . '"
                        AND o.created_at <= "' . $dateTo->format('Y-m-d H:i:s') . '"
                    GROUP BY YEAR(o.created_at), WEEK(o.created_at)
                    ORDER BY period ASC
                ';
                break;
            case 'month':
            default:
                $sql = '
                    SELECT 
                        DATE_FORMAT(o.created_at, \'%Y-%m\') as period,
                        COUNT(o.id) as orders,
                        SUM(o.total_amount) as revenue,
                        SUM(oi.quantity) as items
                    FROM `order` o
                    LEFT JOIN order_item oi ON oi.vente_id = o.id
                    WHERE o.hma_service_id = ' . (int) $hmaService->getId() . '
                        AND o.status = "completed"
                        AND o.is_active = 1
                        AND o.created_at >= "' . $dateFrom->format('Y-m-d H:i:s') . '"
                        AND o.created_at <= "' . $dateTo->format('Y-m-d H:i:s') . '"
                    GROUP BY YEAR(o.created_at), MONTH(o.created_at)
                    ORDER BY period ASC
                ';
                break;
        }
        
        $stmt = $conn->prepare($sql);
        $results = $stmt->executeQuery()->fetchAllAssociative();
        
        $periods = [];
        foreach ($results as $item) {
            $periods[] = [
                'period' => $item['period'],
                'start_date' => $item['start_date'] ?? null,
                'orders' => (int) $item['orders'],
                'revenue' => round((float) $item['revenue'], 2),
                'items' => (int) $item['items'],
                'average_basket' => ($item['orders'] ?? 0) > 0 ? round($item['revenue'] / $item['orders'], 2) : 0,
            ];
        }
        
        return [
            'group_by' => $groupBy,
            'data' => $periods,
        ];
    }

    /**
     * Performance par utilisateur (caissiers et autres)
     */
    public function getCashierPerformance(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('
                u.id as user_id,
                u.full_name as cashier_name,
                u.photo as photo,
                u.roles as roles,
                COUNT(o.id) as orders_count,
                SUM(o.total_amount) as total_revenue,
                SUM(oi.quantity) as total_items,
                AVG(o.total_amount) as average_basket
            ')
            ->from(Order::class, 'o')
            ->join('o.user', 'u')
            ->leftJoin('o.orderItems', 'oi')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed')
            ->groupBy('u.id, u.full_name, u.photo, u.roles');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
            ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
            ->setParameter('dateTo', $dateTo);
        }
        if ($paymentMethod) {
            $qb->andWhere('o.payment_method = :paymentMethod')
            ->setParameter('paymentMethod', $paymentMethod);
        }
        
        $results = $qb->getQuery()->getResult();
        
        $totalRevenue = array_sum(array_column($results, 'total_revenue'));
        $performance = [];
        
        // Fonction utilitaire pour obtenir le libellé du rôle
        $getRoleLabel = function($roles) {
            $rolesArray = is_array($roles) ? $roles : json_decode($roles, true) ?? [];
            
            $roleLabels = [
                'ROLE_SUPER_ADMIN' => 'Super Administrateur',
                'ROLE_ADMIN' => 'Administrateur',
                'ROLE_MANAGER' => 'Gestionnaire',
                'ROLE_STOCK_MANAGER' => 'Responsable Stock',
                'ROLE_CASHIER' => 'Caissier',
                'ROLE_USER' => 'Utilisateur',
            ];
            
            foreach ($rolesArray as $role) {
                if (isset($roleLabels[$role])) {
                    return $roleLabels[$role];
                }
            }
            return 'Utilisateur';
        };
        
        foreach ($results as $item) {
            $performance[] = [
                'user_id' => $item['user_id'],
                'cashier_name' => $item['cashier_name'] ?? 'Inconnu',
                'photo' => $item['photo'] ?? null,
                'role' => $getRoleLabel($item['roles']),
                'orders_count' => (int) $item['orders_count'],
                'total_revenue' => round((float) $item['total_revenue'], 2),
                'total_items' => (int) $item['total_items'],
                'average_basket' => round((float) ($item['average_basket'] ?? 0), 2),
                'percentage' => $totalRevenue > 0 ? round(($item['total_revenue'] / $totalRevenue) * 100, 1) : 0,
            ];
        }
        
        // Trier par chiffre d'affaires décroissant
        usort($performance, function($a, $b) {
            return $b['total_revenue'] <=> $a['total_revenue'];
        });
        
        return $performance;
    }

    /**
     * Top recettes (pour restaurants)
     */
    public function getTopRecipes(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $paymentMethod = $filters['payment_method'] ?? null;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('
                r.id,
                r.name as recipe_name,
                c.name as category_name,
                SUM(oi.quantity) as quantity_sold,
                SUM(oi.total_price) as total_revenue,
                AVG(oi.unit_price) as avg_price
            ')
            ->from(OrderItem::class, 'oi')
            ->join('oi.recipe', 'r')
            ->leftJoin('r.category', 'c')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->andWhere('oi.recipe IS NOT NULL')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed')
            ->groupBy('r.id, r.name, c.name');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        if ($paymentMethod) {
            $qb->andWhere('o.payment_method = :paymentMethod')
               ->setParameter('paymentMethod', $paymentMethod);
        }
        
        $qb->orderBy('total_revenue', 'DESC')
           ->setMaxResults(10);
        
        $results = $qb->getQuery()->getResult();
        
        $totalRevenue = array_sum(array_column($results, 'total_revenue'));
        $recipes = [];
        
        foreach ($results as $item) {
            $recipes[] = [
                'id' => $item['id'],
                'name' => $item['recipe_name'],
                'category' => $item['category_name'] ?? 'Sans catégorie',
                'quantity_sold' => (int) $item['quantity_sold'],
                'total_revenue' => round((float) $item['total_revenue'], 2),
                'avg_price' => round((float) $item['avg_price'], 2),
                'percentage' => $totalRevenue > 0 ? round(($item['total_revenue'] / $totalRevenue) * 100, 1) : 0,
            ];
        }
        
        return $recipes;
    }

    private function getDateFrom(array $filters): ?\DateTime
    {
        if (!empty($filters['date_from'])) {
            $date = new \DateTime($filters['date_from']);
            $date->setTime(0, 0, 0);
            return $date;
        }
        return null;
    }

    private function getDateTo(array $filters): ?\DateTime
    {
        if (!empty($filters['date_to'])) {
            $date = new \DateTime($filters['date_to']);
            $date->setTime(23, 59, 59);
            return $date;
        }
        return null;
    }
}