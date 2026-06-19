<?php
// src/Service/Report/FinancialCalculatorService.php

namespace App\Service\Report;

use App\Entity\HmaService;
use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Recipe;
use App\Entity\StockBatch;
use App\Entity\Payment;
use App\Entity\Subscription;
use App\Repository\PaymentRepository;
use App\Repository\SubscriptionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class FinancialCalculatorService
{
    private LoggerInterface $logger;

    public function __construct(
        private EntityManagerInterface $entityManager,
        private PaymentRepository $paymentRepository,
        private SubscriptionRepository $subscriptionRepository,
        ?LoggerInterface $logger = null
    ) {
        $this->logger = $logger ?? new NullLogger();
    }

    /**
     * Calcule tous les indicateurs financiers
     */
    public function calculateIndicators(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
        // Commandes de base
        $ordersQuery = $this->entityManager->createQueryBuilder()
            ->select('o')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed');
        
        if ($dateFrom) {
            $ordersQuery->andWhere('o.created_at >= :dateFrom')
                ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $ordersQuery->andWhere('o.created_at <= :dateTo')
                ->setParameter('dateTo', $dateTo);
        }
        
        $orders = $ordersQuery->getQuery()->getResult();
        
        // Calculs de base
        $revenue = 0;
        $ordersCount = count($orders);
        $uniqueCustomers = [];
        $paymentMethods = [];
        
        foreach ($orders as $order) {
            $revenue += (float) $order->getTotalAmount();
            if ($order->getCustomerPhone()) {
                $uniqueCustomers[$order->getCustomerPhone()] = true;
            }
            $method = $order->getPaymentMethod();
            $paymentMethods[$method] = ($paymentMethods[$method] ?? 0) + 1;
        }
        
        $uniqueCustomersCount = count($uniqueCustomers);
        $averageBasket = $ordersCount > 0 ? $revenue / $ordersCount : 0;
        
        // Coût des ventes (COGS)
        $cogs = $this->calculateCOGS($hmaService, $orders, $filters);
        
        // Marge brute
        $grossMargin = $revenue - $cogs;
        $grossMarginPercentage = $revenue > 0 ? ($grossMargin / $revenue) * 100 : 0;
        
        // Indicateurs spécifiques restaurant
        $ingredientsCost = 0;
        $costToSalesRatio = 0;
        
        if ($hmaService->getType() === 'restaurant') {
            $ingredientsCost = $this->calculateIngredientsCost($hmaService, $orders, $filters);
            $costToSalesRatio = $revenue > 0 ? ($ingredientsCost / $revenue) * 100 : 0;
        }
        
        return [
            'revenue' => round($revenue, 2),
            'cogs' => round($cogs, 2),
            'gross_margin' => round($grossMargin, 2),
            'gross_margin_percentage' => round($grossMarginPercentage, 1),
            'orders_count' => $ordersCount,
            'average_basket' => round($averageBasket, 2),
            'unique_customers' => $uniqueCustomersCount,
            'payment_methods' => $paymentMethods,
            'ingredients_cost' => round($ingredientsCost, 2),
            'cost_to_sales_ratio' => round($costToSalesRatio, 1),
        ];
    }

    /**
     * Calcule le Coût des Ventes (COGS)
     */
    private function calculateCOGS(HmaService $hmaService, array $orders, array $filters): float
    {
        $totalCogs = 0;
        
        foreach ($orders as $order) {
            foreach ($order->getOrderItems() as $item) {
                // Utiliser le batch_purchase_price si disponible
                $purchasePrice = (float) ($item->getBatchPurchasePrice() ?? 0);
                
                // Sinon, récupérer le prix d'achat du produit
                if ($purchasePrice === 0 && $item->getProductId()) {
                    $product = $this->entityManager->getRepository('App\Entity\Product')
                        ->find($item->getProductId());
                    if ($product) {
                        $purchasePrice = (float) $product->getPurchasePrice();
                    }
                }
                
                $totalCogs += $purchasePrice * $item->getQuantity();
            }
        }
        
        return $totalCogs;
    }

    /**
     * Calcule le coût des ingrédients pour les restaurants
     */
    private function calculateIngredientsCost(HmaService $hmaService, array $orders, array $filters): float
    {
        $totalCost = 0;
        
        foreach ($orders as $order) {
            foreach ($order->getOrderItems() as $item) {
                $recipe = $item->getRecipe();
                if ($recipe) {
                    $totalCost += $this->calculateRecipeCost($recipe, $item->getQuantity());
                }
            }
        }
        
        return $totalCost;
    }

    /**
     * Calcule le coût d'une recette
     */
    private function calculateRecipeCost(Recipe $recipe, int $multiplier = 1): float
    {
        $totalCost = 0;
        
        foreach ($recipe->getRecipeItems() as $recipeItem) {
            $product = $recipeItem->getProduct();
            if ($product) {
                $purchasePrice = (float) $product->getPurchasePrice();
                $quantity = $recipeItem->getQuantity();
                $totalCost += $purchasePrice * $quantity * $multiplier;
            }
        }
        
        return $totalCost;
    }

    /**
     * Statistiques d'évolution temporelle
     */
    public function getTimelineStats(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
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
            
            // Chiffre d'affaires du mois
            $revenue = $this->entityManager->createQueryBuilder()
                ->select('SUM(o.total_amount)')
                ->from(Order::class, 'o')
                ->where('o.hma_service = :hmaService')
                ->andWhere('o.status = :status')
                ->andWhere('o.is_active = true')
                ->andWhere('o.created_at BETWEEN :start AND :end')
                ->setParameter('hmaService', $hmaService)
                ->setParameter('status', 'completed')
                ->setParameter('start', $monthStart)
                ->setParameter('end', $monthEnd)
                ->getQuery()
                ->getSingleScalarResult() ?? 0;
            
            // Nombre de commandes du mois
            $ordersCount = $this->entityManager->createQueryBuilder()
                ->select('COUNT(o.id)')
                ->from(Order::class, 'o')
                ->where('o.hma_service = :hmaService')
                ->andWhere('o.status = :status')
                ->andWhere('o.is_active = true')
                ->andWhere('o.created_at BETWEEN :start AND :end')
                ->setParameter('hmaService', $hmaService)
                ->setParameter('status', 'completed')
                ->setParameter('start', $monthStart)
                ->setParameter('end', $monthEnd)
                ->getQuery()
                ->getSingleScalarResult() ?? 0;
            
            $results[] = [
                'month' => $current->format('M Y'),
                'revenue' => round((float) $revenue, 2),
                'orders' => (int) $ordersCount,
                'average_basket' => $ordersCount > 0 ? round((float) $revenue / $ordersCount, 2) : 0,
            ];
            
            $current->modify('first day of next month');
        }
        
        return $results;
    }

    /**
     * Top produits/recettes les plus vendus
     */
    public function getTopSellingItems(HmaService $hmaService, array $filters = [], bool $isRestaurant = false): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('oi.product_name as name, SUM(oi.quantity) as total_quantity, SUM(oi.total_price) as total_revenue')
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
        
        if ($isRestaurant) {
            $qb->addSelect('r.id as recipe_id, r.name as recipe_name')
               ->leftJoin('oi.recipe', 'r');
        }
        
        $qb->groupBy('oi.product_name')
           ->orderBy('total_revenue', 'DESC')
           ->setMaxResults(10);
        
        if ($isRestaurant) {
            $qb->addGroupBy('r.id, r.name');
        }
        
        $results = $qb->getQuery()->getResult();
        
        // Formater les résultats
        $formatted = [];
        foreach ($results as $item) {
            $formatted[] = [
                'name' => $item['name'],
                'recipe_name' => $item['recipe_name'] ?? null,
                'total_quantity' => (int) $item['total_quantity'],
                'total_revenue' => round((float) $item['total_revenue'], 2),
            ];
        }
        
        return $formatted;
    }

    /**
     * Répartition des modes de paiement
     */
    public function getPaymentDistribution(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('o.payment_method as method, COUNT(o.id) as count, SUM(o.total_amount) as total')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed')
            ->groupBy('o.payment_method');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        $results = $qb->getQuery()->getResult();
        
        $formatted = [];
        $totalCount = array_sum(array_column($results, 'count'));
        
        foreach ($results as $item) {
            $methodLabels = [
                'cash' => 'Espèces',
                'card' => 'Carte bancaire',
                'mobile_money' => 'Mobile Money',
            ];
            
            $percentage = $totalCount > 0 ? round(($item['count'] / $totalCount) * 100, 1) : 0;
            
            $formatted[] = [
                'method' => $item['method'],
                'label' => $methodLabels[$item['method']] ?? $item['method'],
                'count' => (int) $item['count'],
                'percentage' => $percentage,
                'total' => round((float) $item['total'], 2),
            ];
        }
        
        return $formatted;
    }

    /**
     * Coût des ventes détaillé
     */
    public function getCostOfGoodsSold(HmaService $hmaService, array $filters = [], bool $isRestaurant = false): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
        $ordersQuery = $this->entityManager->createQueryBuilder()
            ->select('o')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed');
        
        if ($dateFrom) {
            $ordersQuery->andWhere('o.created_at >= :dateFrom')
                ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $ordersQuery->andWhere('o.created_at <= :dateTo')
                ->setParameter('dateTo', $dateTo);
        }
        
        $orders = $ordersQuery->getQuery()->getResult();
        
        $totalCogs = 0;
        $cogsByCategory = [];
        
        foreach ($orders as $order) {
            foreach ($order->getOrderItems() as $item) {
                $purchasePrice = (float) ($item->getBatchPurchasePrice() ?? 0);
                
                if ($purchasePrice === 0 && $item->getProductId()) {
                    $product = $this->entityManager->getRepository('App\Entity\Product')
                        ->find($item->getProductId());
                    if ($product) {
                        $purchasePrice = (float) $product->getPurchasePrice();
                    }
                }
                
                $itemCogs = $purchasePrice * $item->getQuantity();
                $totalCogs += $itemCogs;
                
                // Par catégorie si disponible
                $categoryName = 'Sans catégorie';
                if ($item->getProductId()) {
                    $product = $this->entityManager->getRepository('App\Entity\Product')
                        ->find($item->getProductId());
                    if ($product && $product->getCategory()) {
                        $categoryName = $product->getCategory()->getName();
                    }
                }
                
                $cogsByCategory[$categoryName] = ($cogsByCategory[$categoryName] ?? 0) + $itemCogs;
            }
        }
        
        // Trier par valeur décroissante
        arsort($cogsByCategory);
        
        return [
            'total' => round($totalCogs, 2),
            'by_category' => array_map(function($value) {
                return round($value, 2);
            }, $cogsByCategory),
        ];
    }

    /**
     * Marge par catégorie
     */
    public function getMarginByCategory(HmaService $hmaService, array $filters = [], bool $isRestaurant = false): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
        $ordersQuery = $this->entityManager->createQueryBuilder()
            ->select('o')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed');
        
        if ($dateFrom) {
            $ordersQuery->andWhere('o.created_at >= :dateFrom')
                ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $ordersQuery->andWhere('o.created_at <= :dateTo')
                ->setParameter('dateTo', $dateTo);
        }
        
        $orders = $ordersQuery->getQuery()->getResult();
        
        $revenueByCategory = [];
        $cogsByCategory = [];
        
        foreach ($orders as $order) {
            foreach ($order->getOrderItems() as $item) {
                $categoryName = 'Sans catégorie';
                $revenue = (float) $item->getTotalPrice();
                $purchasePrice = (float) ($item->getBatchPurchasePrice() ?? 0);
                
                if ($purchasePrice === 0 && $item->getProductId()) {
                    $product = $this->entityManager->getRepository('App\Entity\Product')
                        ->find($item->getProductId());
                    if ($product) {
                        $purchasePrice = (float) $product->getPurchasePrice();
                        if ($product->getCategory()) {
                            $categoryName = $product->getCategory()->getName();
                        }
                    }
                }
                
                $cogs = $purchasePrice * $item->getQuantity();
                
                $revenueByCategory[$categoryName] = ($revenueByCategory[$categoryName] ?? 0) + $revenue;
                $cogsByCategory[$categoryName] = ($cogsByCategory[$categoryName] ?? 0) + $cogs;
            }
        }
        
        $results = [];
        foreach ($revenueByCategory as $category => $revenue) {
            $cogs = $cogsByCategory[$category] ?? 0;
            $margin = $revenue - $cogs;
            $marginPercentage = $revenue > 0 ? ($margin / $revenue) * 100 : 0;
            
            $results[] = [
                'category' => $category,
                'revenue' => round($revenue, 2),
                'cogs' => round($cogs, 2),
                'margin' => round($margin, 2),
                'margin_percentage' => round($marginPercentage, 1),
            ];
        }
        
        // Trier par marge décroissante
        usort($results, function($a, $b) {
            return $b['margin_percentage'] <=> $a['margin_percentage'];
        });
        
        return $results;
    }

    /**
     * Récupère les paiements d'abonnement
     */
    public function getSubscriptionPayments(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
        $qb = $this->paymentRepository->createQueryBuilder('p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.status = :status')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'paid');
        
        if ($dateFrom) {
            $qb->andWhere('p.paymentDate >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('p.paymentDate <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        $qb->orderBy('p.paymentDate', 'DESC');
        
        $payments = $qb->getQuery()->getResult();
        
        $result = [];
        foreach ($payments as $payment) {
            $result[] = [
                'id' => $payment->getId(),
                'amount' => (float) $payment->getAmount(),
                'paymentMethod' => $payment->getPaymentMethod(),
                'status' => $payment->getStatus(),
                'paymentDate' => $payment->getPaymentDate(),
                'subscriptionNumber' => $payment->getSubscriptionNumber(),
                'invoiceNumber' => $payment->getInvoiceNumber(),
            ];
        }
        
        return $result;
    }

    /**
     * Récupère les statistiques d'abonnement
     */
    public function getSubscriptionStats(HmaService $hmaService): array
    {
        // Total payé
        $totalPaid = $this->paymentRepository->createQueryBuilder('p')
            ->select('SUM(p.amount)')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.status = :status')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'paid')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;
        
        // Dernier paiement
        $lastPayment = $this->paymentRepository->createQueryBuilder('p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.status = :status')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'paid')
            ->orderBy('p.paymentDate', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        // Abonnement actif
        $activeSubscription = $this->subscriptionRepository->findActiveSubscription($hmaService);
        
        // Prochain paiement estimé
        $nextPaymentDate = null;
        if ($activeSubscription && $activeSubscription->getEndsAt()) {
            $nextPaymentDate = $activeSubscription->getEndsAt();
        }
        
        return [
            'total_paid' => round((float) $totalPaid, 2),
            'last_payment_date' => $lastPayment ? $lastPayment->getPaymentDate() : null,
            'last_payment_amount' => $lastPayment ? (float) $lastPayment->getAmount() : 0,
            'current_plan' => $activeSubscription ? $activeSubscription->getSubscriptionPlan()->getName() : null,
            'next_payment_date' => $nextPaymentDate,
            'subscription_status' => $activeSubscription ? $activeSubscription->getStatus() : null,
        ];
    }

    /**
     * Récupère le coût des recettes (pour restaurants)
     */
    public function getRecipeCosts(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
        // Récupérer les commandes avec des recettes
        $qb = $this->entityManager->createQueryBuilder()
            ->select('r.id, r.name, r.selling_price, SUM(oi.quantity) as quantity_sold')
            ->from(OrderItem::class, 'oi')
            ->join('oi.recipe', 'r')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed')
            ->groupBy('r.id, r.name, r.selling_price');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        $results = $qb->getQuery()->getResult();
        
        $recipeCosts = [];
        foreach ($results as $row) {
            // Récupérer la recette complète
            $recipe = $this->entityManager->getRepository(Recipe::class)->find($row['id']);
            if ($recipe) {
                $unitCost = $this->calculateRecipeCost($recipe, 1);
                $totalCost = $unitCost * $row['quantity_sold'];
                $sellingPrice = (float) $row['selling_price'];
                $margin = ($sellingPrice - $unitCost) * $row['quantity_sold'];
                
                $recipeCosts[] = [
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'unit_cost' => round($unitCost, 2),
                    'quantity_sold' => (int) $row['quantity_sold'],
                    'total_cost' => round($totalCost, 2),
                    'selling_price' => round($sellingPrice, 2),
                    'margin' => round($margin, 2),
                ];
            }
        }
        
        // Trier par coût total décroissant
        usort($recipeCosts, function($a, $b) {
            return $b['total_cost'] <=> $a['total_cost'];
        });
        
        return $recipeCosts;
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

    /**
     * Récupère les ventes par recette
     */
    public function getRecipeSales(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('r.id, r.name, c.name as category, SUM(oi.quantity) as quantity, SUM(oi.total_price) as revenue')
            ->from(OrderItem::class, 'oi')
            ->join('oi.recipe', 'r')
            ->leftJoin('r.category', 'c')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->andWhere('o.is_active = true')
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
        
        $results = $qb->getQuery()->getResult();
        
        // Calculer le total pour les pourcentages
        $totalRevenue = array_sum(array_column($results, 'revenue'));
        
        $recipeSales = [];
        foreach ($results as $row) {
            $recipeSales[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'category' => $row['category'] ?? 'Sans catégorie',
                'quantity' => (int) $row['quantity'],
                'revenue' => round((float) $row['revenue'], 2),
                'percentage' => $totalRevenue > 0 ? round(($row['revenue'] / $totalRevenue) * 100, 1) : 0,
            ];
        }
        
        // Trier par chiffre d'affaires décroissant
        usort($recipeSales, function($a, $b) {
            return $b['revenue'] <=> $a['revenue'];
        });
        
        return $recipeSales;
    }

    /**
     * Récupère les statistiques des ventes de recettes
     */
    public function getRecipeSalesStats(HmaService $hmaService, array $filters = []): array
    {
        $recipeSales = $this->getRecipeSales($hmaService, $filters);
        
        return [
            'total_quantity' => array_sum(array_column($recipeSales, 'quantity')),
            'total_revenue' => array_sum(array_column($recipeSales, 'revenue')),
            'unique_recipes' => count($recipeSales),
        ];
    }
}