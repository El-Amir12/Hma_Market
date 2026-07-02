<?php
// src/Repository/DashboardRepository.php

namespace App\Repository;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\Order;
use App\Entity\User;
use App\Entity\StockBatch;
use App\Entity\StockMovement;
use App\Entity\OrderItem;

class DashboardRepository
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * Récupère les statistiques globales pour une entreprise
     */
    public function getDashboardStats(HmaService $company): array
    {
        // Produits totaux
        $productCount = $this->em->createQueryBuilder()
            ->select('COUNT(p.id)')
            ->from(Product::class, 'p')
            ->where('p.hma_service = :company')
            ->andWhere('p.is_active = :active')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        // Ventes totales (commandes actives)
        $orderCount = $this->em->createQueryBuilder()
            ->select('COUNT(o.id)')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :company')
            ->andWhere('o.is_active = :active')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        // Chiffre d'affaires total
        $totalRevenue = $this->em->createQueryBuilder()
            ->select('SUM(o.total_amount)')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :company')
            ->andWhere('o.is_active = :active')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        // Nombre de clients uniques - basé sur le numéro de téléphone
        $customerCount = $this->em->createQueryBuilder()
            ->select('COUNT(DISTINCT o.customer_phone)')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :company')
            ->andWhere('o.is_active = :active')
            ->andWhere('o.customer_phone IS NOT NULL')
            ->andWhere('o.customer_phone != :empty')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->setParameter('empty', '')
            ->getQuery()
            ->getSingleScalarResult();

        // Ventes d'aujourd'hui
        $today = new \DateTime();
        $today->setTime(0, 0, 0);
        $tomorrow = clone $today;
        $tomorrow->modify('+1 day');

        $todayOrders = $this->em->createQueryBuilder()
            ->select('COUNT(o.id)')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :company')
            ->andWhere('o.is_active = :active')
            ->andWhere('o.created_at BETWEEN :today AND :tomorrow')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleScalarResult();

        $todayRevenue = $this->em->createQueryBuilder()
            ->select('SUM(o.total_amount)')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :company')
            ->andWhere('o.is_active = :active')
            ->andWhere('o.created_at BETWEEN :today AND :tomorrow')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        // Stock faible - basé sur le stock total du produit
        $lowStockCount = $this->em->createQueryBuilder()
            ->select('COUNT(DISTINCT p.id)')
            ->from(Product::class, 'p')
            ->leftJoin('p.stockBatches', 'b')
            ->where('p.hma_service = :company')
            ->andWhere('p.is_active = :active')
            ->andWhere('p.subscription_active = :subscription_active')
            ->andWhere('(
                p.stock_quantity <= p.min_quantity 
                OR (
                    SELECT COALESCE(SUM(b2.current_quantity), 0) 
                    FROM App\Entity\StockBatch b2 
                    WHERE b2.product = p 
                    AND b2.is_active = true 
                    AND (b2.expiry_date IS NULL OR b2.expiry_date >= :now)
                ) <= p.min_quantity
            )')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->setParameter('subscription_active', true)
            ->setParameter('now', new \DateTime())
            ->getQuery()
            ->getSingleScalarResult();

        // Nombre d'utilisateurs actifs
        $userCount = $this->em->createQueryBuilder()
            ->select('COUNT(u.id)')
            ->from(User::class, 'u')
            ->where('u.hma_service_id = :company')
            ->andWhere('u.is_active = :active')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        // Commandes en attente
        $pendingOrders = $this->em->createQueryBuilder()
            ->select('COUNT(o.id)')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :company')
            ->andWhere('o.is_active = :active')
            ->andWhere('o.status = :status')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->setParameter('status', 'pending')
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total_products' => (int) $productCount,
            'total_orders' => (int) $orderCount,
            'total_revenue' => (float) $totalRevenue,
            'total_customers' => (int) $customerCount,
            'today_orders' => (int) $todayOrders,
            'today_revenue' => (float) $todayRevenue,
            'low_stock' => (int) $lowStockCount,
            'total_users' => (int) $userCount,
            'pending_orders' => (int) $pendingOrders,
        ];
    }

    /**
     * Récupère les derniers mouvements de stock
     */
    public function getRecentStockMovements(HmaService $company, int $limit = 10): array
    {
        return $this->em->createQueryBuilder()
            ->select('m', 'p')
            ->from(StockMovement::class, 'm')
            ->join('m.product', 'p')
            ->where('m.hma_service = :company')
            ->orderBy('m.created_at', 'DESC')
            ->setMaxResults($limit)
            ->setParameter('company', $company)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les statistiques de ventes par jour pour le graphique
     */
    public function getSalesStats(HmaService $company, int $days = 30): array
    {
        $stats = [];
        $endDate = new \DateTime();
        $startDate = clone $endDate;
        $startDate->modify("-$days days");
        $startDate->setTime(0, 0, 0);

        $results = $this->em->createQueryBuilder()
            ->select('SUBSTRING(o.created_at, 1, 10) as date, COUNT(o.id) as count, SUM(o.total_amount) as revenue')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :company')
            ->andWhere('o.is_active = :active')
            ->andWhere('o.created_at >= :startDate')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->setParameter('startDate', $startDate)
            ->getQuery()
            ->getResult();

        // Convertir en tableau associatif
        $dataMap = [];
        foreach ($results as $row) {
            $dataMap[$row['date']] = [
                'count' => (int) $row['count'],
                'revenue' => (float) $row['revenue']
            ];
        }

        // Remplir les jours manquants
        $current = clone $startDate;
        while ($current <= $endDate) {
            $dateKey = $current->format('Y-m-d');
            $stats[] = [
                'date' => $dateKey,
                'count' => $dataMap[$dateKey]['count'] ?? 0,
                'revenue' => $dataMap[$dateKey]['revenue'] ?? 0,
            ];
            $current->modify('+1 day');
        }

        return $stats;
    }

    /**
     * Récupère les produits les plus vendus
     * ✅ CORRIGÉ: Utilisation correcte des associations
     */
    public function getTopProducts(HmaService $company, int $limit = 5): array
    {
        // Récupérer les produits (ceux qui ont un product_id)
        $products = $this->em->createQueryBuilder()
            ->select('oi.product_id as id, oi.product_name as name, SUM(oi.quantity) as total_quantity, SUM(oi.total_price) as total_revenue')
            ->from(OrderItem::class, 'oi')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :company')
            ->andWhere('o.is_active = :active')
            ->andWhere('oi.product_id IS NOT NULL')
            ->groupBy('oi.product_id, oi.product_name')
            ->orderBy('total_quantity', 'DESC')
            ->setMaxResults($limit)
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->getQuery()
            ->getResult();

        // Si aucun produit n'est trouvé, on essaie de récupérer les recettes (restaurant)
        if (empty($products)) {
            // ✅ CORRIGÉ: Utiliser recipe.id au lieu de recipe directement
            $recipes = $this->em->createQueryBuilder()
                ->select('r.id as id, oi.product_name as name, SUM(oi.quantity) as total_quantity, SUM(oi.total_price) as total_revenue')
                ->from(OrderItem::class, 'oi')
                ->join('oi.vente', 'o')
                ->join('oi.recipe', 'r')  // ✅ JOIN sur l'association recipe
                ->where('o.hma_service = :company')
                ->andWhere('o.is_active = :active')
                ->andWhere('oi.recipe IS NOT NULL')
                ->groupBy('r.id, oi.product_name')
                ->orderBy('total_quantity', 'DESC')
                ->setMaxResults($limit)
                ->setParameter('company', $company)
                ->setParameter('active', true)
                ->getQuery()
                ->getResult();

            // Ajouter le type 'recipe' pour les identifier
            foreach ($recipes as &$item) {
                $item['type'] = 'recipe';
            }

            return $recipes;
        }

        // Ajouter le type 'product' pour les produits
        foreach ($products as &$item) {
            $item['type'] = 'product';
        }

        return $products;
    }

    /**
     * Récupère les recettes les plus vendues (pour les restaurants)
     * ✅ CORRIGÉ: Utilisation correcte de l'association recipe
     */
    public function getTopRecipes(HmaService $company, int $limit = 5): array
    {
        return $this->em->createQueryBuilder()
            ->select('r.id as id, oi.product_name as name, SUM(oi.quantity) as total_quantity, SUM(oi.total_price) as total_revenue')
            ->from(OrderItem::class, 'oi')
            ->join('oi.vente', 'o')
            ->join('oi.recipe', 'r')  // ✅ JOIN sur l'association recipe
            ->where('o.hma_service = :company')
            ->andWhere('o.is_active = :active')
            ->andWhere('oi.recipe IS NOT NULL')
            ->groupBy('r.id, oi.product_name')
            ->orderBy('total_quantity', 'DESC')
            ->setMaxResults($limit)
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les statistiques des retours
     */
    public function getReturnStats(HmaService $company): array
    {
        $totalReturns = $this->em->createQueryBuilder()
            ->select('COUNT(r.id)')
            ->from('App\Entity\ReturnOrder', 'r')
            ->where('r.hma_service = :company')
            ->setParameter('company', $company)
            ->getQuery()
            ->getSingleScalarResult();

        $pendingReturns = $this->em->createQueryBuilder()
            ->select('COUNT(r.id)')
            ->from('App\Entity\ReturnOrder', 'r')
            ->where('r.hma_service = :company')
            ->andWhere('r.status = :status')
            ->setParameter('company', $company)
            ->setParameter('status', 'pending')
            ->getQuery()
            ->getSingleScalarResult();

        $approvedReturns = $this->em->createQueryBuilder()
            ->select('COUNT(r.id)')
            ->from('App\Entity\ReturnOrder', 'r')
            ->where('r.hma_service = :company')
            ->andWhere('r.status = :status')
            ->setParameter('company', $company)
            ->setParameter('status', 'approved')
            ->getQuery()
            ->getSingleScalarResult();

        $completedReturns = $this->em->createQueryBuilder()
            ->select('COUNT(r.id)')
            ->from('App\Entity\ReturnOrder', 'r')
            ->where('r.hma_service = :company')
            ->andWhere('r.status = :status')
            ->setParameter('company', $company)
            ->setParameter('status', 'completed')
            ->getQuery()
            ->getSingleScalarResult();

        $totalRefundAmount = $this->em->createQueryBuilder()
            ->select('SUM(r.total_refund_amount)')
            ->from('App\Entity\ReturnOrder', 'r')
            ->where('r.hma_service = :company')
            ->andWhere('r.status = :status')
            ->setParameter('company', $company)
            ->setParameter('status', 'completed')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        return [
            'total' => (int) $totalReturns,
            'pending' => (int) $pendingReturns,
            'approved' => (int) $approvedReturns,
            'completed' => (int) $completedReturns,
            'refund_amount' => (float) $totalRefundAmount,
        ];
    }

    /**
     * Récupère le nombre total de commandes pour une entreprise
     */
    public function getTotalOrders(HmaService $company): int
    {
        return (int) $this->em->createQueryBuilder()
            ->select('COUNT(o.id)')
            ->from(Order::class, 'o')
            ->where('o.hma_service = :company')
            ->andWhere('o.is_active = :active')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère le nombre total de produits pour une entreprise
     */
    public function getTotalProducts(HmaService $company): int
    {
        return (int) $this->em->createQueryBuilder()
            ->select('COUNT(p.id)')
            ->from(Product::class, 'p')
            ->where('p.hma_service = :company')
            ->andWhere('p.is_active = :active')
            ->setParameter('company', $company)
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();
    }
}