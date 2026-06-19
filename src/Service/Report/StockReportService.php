<?php
// src/Service/Report/StockReportService.php

namespace App\Service\Report;

use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\StockMovement;
use Doctrine\ORM\EntityManagerInterface;

class StockReportService
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    /**
     * KPIs du stock
     */
    public function getStockKPIs(HmaService $hmaService, array $filters = []): array
    {
        $category = $filters['category'] ?? null;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('
                COUNT(p.id) as total_products,
                SUM(p.stock_quantity) as total_quantity,
                SUM(p.stock_quantity * p.purchase_price) as total_value
            ')
            ->from(Product::class, 'p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->setParameter('hmaService', $hmaService);
        
        if ($category) {
            $qb->andWhere('p.category = :category')
               ->setParameter('category', $category);
        }
        
        $result = $qb->getQuery()->getSingleResult();
        
        // Compter les produits par statut
        $lowStockCount = $this->entityManager->createQueryBuilder()
            ->select('COUNT(p.id)')
            ->from(Product::class, 'p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->andWhere('p.stock_quantity > 0')
            ->andWhere('p.stock_quantity <= p.min_quantity')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getSingleScalarResult();
        
        $outOfStockCount = $this->entityManager->createQueryBuilder()
            ->select('COUNT(p.id)')
            ->from(Product::class, 'p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->andWhere('p.stock_quantity = 0')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getSingleScalarResult();
        
        $inStockCount = $this->entityManager->createQueryBuilder()
            ->select('COUNT(p.id)')
            ->from(Product::class, 'p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->andWhere('p.stock_quantity > 0')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getSingleScalarResult();
        
        return [
            'total_products' => (int) ($result['total_products'] ?? 0),
            'total_quantity' => (int) ($result['total_quantity'] ?? 0),
            'total_value' => round((float) ($result['total_value'] ?? 0), 2),
            'low_stock_count' => (int) $lowStockCount,
            'out_of_stock_count' => (int) $outOfStockCount,
            'in_stock_count' => (int) $inStockCount,
        ];
    }

    /**
     * Produits avec stock faible ou en rupture
     */
    public function getLowStockProducts(HmaService $hmaService, array $filters = []): array
    {
        $category = $filters['category'] ?? null;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('
                p.id,
                p.name,
                p.stock_quantity as current_stock,
                p.min_quantity as min_stock,
                p.purchase_price,
                p.unit,
                c.name as category_name
            ')
            ->from(Product::class, 'p')
            ->leftJoin('p.category', 'c')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->andWhere('p.stock_quantity <= p.min_quantity')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('p.stock_quantity', 'ASC');
        
        if ($category) {
            $qb->andWhere('p.category = :category')
               ->setParameter('category', $category);
        }
        
        $results = $qb->getQuery()->getResult();
        
        $products = [];
        foreach ($results as $item) {
            $status = $item['current_stock'] == 0 ? 'rupture' : 'faible';
            $products[] = [
                'id' => $item['id'],
                'name' => $item['name'],
                'current_stock' => (int) $item['current_stock'],
                'min_stock' => (int) $item['min_stock'],
                'unit' => $item['unit'] ?? 'pièce(s)',
                'category' => $item['category_name'] ?? 'Sans catégorie',
                'purchase_price' => (float) $item['purchase_price'],
                'value' => (float) $item['current_stock'] * (float) $item['purchase_price'],
                'status' => $status,
                'status_class' => $status == 'rupture' ? 'danger' : 'warning',
                'status_icon' => $status == 'rupture' ? 'fa-ban' : 'fa-exclamation-triangle',
            ];
        }
        
        return $products;
    }

    /**
     * Valeur du stock par catégorie
     */
    public function getStockValueByCategory(HmaService $hmaService, array $filters = []): array
    {
        $category = $filters['category'] ?? null;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('
                c.name as category,
                COUNT(p.id) as product_count,
                SUM(p.stock_quantity) as total_quantity,
                SUM(p.stock_quantity * p.purchase_price) as total_value
            ')
            ->from(Product::class, 'p')
            ->leftJoin('p.category', 'c')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('c.name');
        
        if ($category) {
            $qb->andWhere('p.category = :category')
               ->setParameter('category', $category);
        }
        
        $results = $qb->getQuery()->getResult();
        
        $categories = [];
        $totalValue = 0;
        
        foreach ($results as $item) {
            $value = (float) ($item['total_value'] ?? 0);
            $totalValue += $value;
            $categories[] = [
                'category' => $item['category'] ?? 'Sans catégorie',
                'product_count' => (int) $item['product_count'],
                'total_quantity' => (int) $item['total_quantity'],
                'total_value' => round($value, 2),
            ];
        }
        
        // Ajouter les pourcentages
        foreach ($categories as &$cat) {
            $cat['percentage'] = $totalValue > 0 ? round(($cat['total_value'] / $totalValue) * 100, 1) : 0;
        }
        
        // Trier par valeur décroissante
        usort($categories, function($a, $b) {
            return $b['total_value'] <=> $a['total_value'];
        });
        
        return $categories;
    }

        /**
     * Mouvements de stock récents
     */
    public function getRecentMovements(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        $limit = 50;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('
                sm.id,
                sm.movement_type,
                sm.quantity,
                sm.unit_price,
                sm.notes,
                sm.created_at,
                p.name as product_name,
                p.id as product_id,
                u.full_name as user_name,
                u.photo as user_photo,
                u.email as user_email
            ')
            ->from(StockMovement::class, 'sm')
            ->join('sm.product', 'p')
            ->leftJoin('sm.user', 'u')
            ->where('sm.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('sm.created_at', 'DESC')
            ->setMaxResults($limit);
        
        if ($dateFrom) {
            $qb->andWhere('sm.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('sm.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        $results = $qb->getQuery()->getResult();
        
        $movements = [];
        foreach ($results as $item) {
            $movements[] = [
                'id' => $item['id'],
                'product_name' => $item['product_name'],
                'product_id' => $item['product_id'],
                'movement_type' => $item['movement_type'],
                'movement_label' => $this->getMovementLabel($item['movement_type']),
                'movement_class' => $this->getMovementClass($item['movement_type']),
                'quantity' => (int) $item['quantity'],
                'unit_price' => (float) ($item['unit_price'] ?? 0),
                'total_value' => (int) $item['quantity'] * (float) ($item['unit_price'] ?? 0),
                'notes' => $item['notes'],
                'user_name' => $item['user_name'] ?? 'Système',
                'user_photo' => $item['user_photo'] ?? null,
                'user_email' => $item['user_email'] ?? null,
                'created_at' => $item['created_at'],
            ];
        }
        
        return $movements;
    }
    
    /**
     * Top produits par valeur en stock
     */
    public function getTopProductsByValue(HmaService $hmaService, array $filters = []): array
    {
        $category = $filters['category'] ?? null;
        
        $qb = $this->entityManager->createQueryBuilder()
            ->select('
                p.id,
                p.name,
                p.stock_quantity as current_stock,
                p.purchase_price,
                p.unit,
                c.name as category_name,
                (p.stock_quantity * p.purchase_price) as total_value
            ')
            ->from(Product::class, 'p')
            ->leftJoin('p.category', 'c')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->andWhere('p.stock_quantity > 0')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('total_value', 'DESC')
            ->setMaxResults(10);
        
        if ($category) {
            $qb->andWhere('p.category = :category')
               ->setParameter('category', $category);
        }
        
        $results = $qb->getQuery()->getResult();
        
        $products = [];
        foreach ($results as $item) {
            $products[] = [
                'id' => $item['id'],
                'name' => $item['name'],
                'current_stock' => (int) $item['current_stock'],
                'unit' => $item['unit'] ?? 'pièce(s)',
                'category' => $item['category_name'] ?? 'Sans catégorie',
                'purchase_price' => (float) $item['purchase_price'],
                'total_value' => round((float) $item['total_value'], 2),
            ];
        }
        
        return $products;
    }

    /**
     * Évolution du stock dans le temps - Version corrigée
     */
    public function getStockTimeline(HmaService $hmaService, array $filters = []): array
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
        
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                DATE_FORMAT(sm.created_at, \'%Y-%m\') as month,
                SUM(CASE WHEN sm.movement_type = "purchase_in" THEN sm.quantity ELSE 0 END) as purchases,
                SUM(CASE WHEN sm.movement_type = "sale_out" THEN sm.quantity ELSE 0 END) as sales,
                SUM(CASE WHEN sm.movement_type = "adjustment_in" THEN sm.quantity ELSE 0 END) as adjustments_in,
                SUM(CASE WHEN sm.movement_type = "adjustment_out" THEN sm.quantity ELSE 0 END) as adjustments_out
            FROM stock_movement sm
            WHERE sm.hma_service_id = ' . (int) $hmaService->getId() . '
                AND sm.created_at >= "' . $dateFrom->format('Y-m-d 00:00:00') . '"
                AND sm.created_at <= "' . $dateTo->format('Y-m-d 23:59:59') . '"
            GROUP BY YEAR(sm.created_at), MONTH(sm.created_at)
            ORDER BY month ASC
        ';
        
        $stmt = $conn->prepare($sql);
        $results = $stmt->executeQuery()->fetchAllAssociative();
        
        $timeline = [];
        foreach ($results as $item) {
            $purchases = (int) $item['purchases'];
            $sales = (int) $item['sales'];
            $adjustmentsIn = (int) $item['adjustments_in'];
            $adjustmentsOut = (int) $item['adjustments_out'];
            
            $netChange = $purchases - $sales + $adjustmentsIn - $adjustmentsOut;
            
            $timeline[] = [
                'month' => date('M Y', strtotime($item['month'] . '-01')),
                'purchases' => $purchases,
                'sales' => $sales,
                'adjustments_in' => $adjustmentsIn,
                'adjustments_out' => $adjustmentsOut,
                'net_change' => $netChange,
            ];
        }
        
        return $timeline;
    }

    /**
     * Alertes de péremption - Version corrigée
     */
    public function getExpiryAlerts(HmaService $hmaService, array $filters = []): array
    {
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                sb.id,
                sb.batch_number,
                sb.current_quantity as quantity,
                sb.unit_price,
                sb.expiry_date,
                p.id as product_id,
                p.name as product_name,
                p.unit,
                DATEDIFF(sb.expiry_date, CURDATE()) as days_until_expiry
            FROM stock_batch sb
            JOIN product p ON sb.product_id = p.id
            WHERE sb.hma_service_id = ' . (int) $hmaService->getId() . '
                AND sb.is_active = 1
                AND sb.current_quantity > 0
                AND sb.expiry_date IS NOT NULL
                AND sb.expiry_date <= DATE_ADD(CURDATE(), INTERVAL 90 DAY)
            ORDER BY sb.expiry_date ASC
        ';
        
        $stmt = $conn->prepare($sql);
        $results = $stmt->executeQuery()->fetchAllAssociative();
        
        $alerts = [];
        foreach ($results as $item) {
            $daysUntilExpiry = (int) $item['days_until_expiry'];
            $status = $this->getExpiryStatus($daysUntilExpiry);
            
            $alerts[] = [
                'id' => $item['id'],
                'product_id' => $item['product_id'],
                'product_name' => $item['product_name'],
                'batch_number' => $item['batch_number'],
                'quantity' => (int) $item['quantity'],
                'unit' => $item['unit'] ?? 'pièce(s)',
                'unit_price' => (float) $item['unit_price'],
                'total_value' => (int) $item['quantity'] * (float) $item['unit_price'],
                'expiry_date' => new \DateTime($item['expiry_date']),
                'days_until_expiry' => $daysUntilExpiry,
                'status' => $status['label'],
                'status_class' => $status['class'],
                'status_icon' => $status['icon'],
            ];
        }
        
        return $alerts;
    }

    /**
     * Top ingrédients (pour restaurants) - Version corrigée
     */
    public function getTopIngredients(HmaService $hmaService, array $filters = []): array
    {
        $dateFrom = $this->getDateFrom($filters);
        $dateTo = $this->getDateTo($filters);
        
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                p.id,
                p.name as ingredient_name,
                p.unit,
                SUM(ri.quantity * oi.quantity) as total_quantity_used,
                COUNT(DISTINCT oi.vente_id) as recipe_count
            FROM order_item oi
            JOIN recipe_item ri ON ri.recipe_id = oi.recipe_id
            JOIN product p ON ri.product_id = p.id
            JOIN `order` o ON oi.vente_id = o.id
            WHERE o.hma_service_id = ' . (int) $hmaService->getId() . '
                AND o.status = "completed"
                AND o.is_active = 1
        ';
        
        if ($dateFrom) {
            $sql .= ' AND o.created_at >= "' . $dateFrom->format('Y-m-d 00:00:00') . '"';
        }
        if ($dateTo) {
            $sql .= ' AND o.created_at <= "' . $dateTo->format('Y-m-d 23:59:59') . '"';
        }
        
        $sql .= ' GROUP BY p.id, p.name, p.unit
                  ORDER BY total_quantity_used DESC
                  LIMIT 10';
        
        $stmt = $conn->prepare($sql);
        $results = $stmt->executeQuery()->fetchAllAssociative();
        
        $ingredients = [];
        foreach ($results as $item) {
            $ingredients[] = [
                'id' => $item['id'],
                'name' => $item['ingredient_name'],
                'unit' => $item['unit'] ?? 'pièce(s)',
                'total_quantity_used' => round((float) $item['total_quantity_used'], 2),
                'recipe_count' => (int) $item['recipe_count'],
            ];
        }
        
        return $ingredients;
    }

    /**
     * Libellé du mouvement
     */
    private function getMovementLabel(string $type): string
    {
        return match($type) {
            'purchase_in' => 'Achat',
            'sale_out' => 'Vente',
            'adjustment_in' => 'Ajustement (+)',
            'adjustment_out' => 'Ajustement (-)',
            'return_in' => 'Retour client',
            'return_out' => 'Retour fournisseur',
            'transfer_in' => 'Transfert entrant',
            'transfer_out' => 'Transfert sortant',
            default => $type,
        };
    }

    /**
     * Classe CSS pour le mouvement
     */
    private function getMovementClass(string $type): string
    {
        return match($type) {
            'purchase_in' => 'success',
            'sale_out' => 'danger',
            'adjustment_in' => 'info',
            'adjustment_out' => 'warning',
            'return_in' => 'primary',
            'return_out' => 'secondary',
            'transfer_in' => 'success',
            'transfer_out' => 'warning',
            default => 'secondary',
        };
    }

    /**
     * Statut d'expiration
     */
    private function getExpiryStatus(int $daysUntilExpiry): array
    {
        if ($daysUntilExpiry <= 0) {
            return ['label' => 'Expiré', 'class' => 'danger', 'icon' => 'fa-skull-crossbones'];
        } elseif ($daysUntilExpiry <= 30) {
            return ['label' => 'Urgent (30j)', 'class' => 'danger', 'icon' => 'fa-exclamation-circle'];
        } elseif ($daysUntilExpiry <= 60) {
            return ['label' => 'Attention (60j)', 'class' => 'warning', 'icon' => 'fa-clock'];
        } else {
            return ['label' => 'Bientôt (90j)', 'class' => 'info', 'icon' => 'fa-calendar-week'];
        }
    }

    /**
     * Récupère la date de début depuis les filtres
     */
    private function getDateFrom(array $filters): ?\DateTime
    {
        if (!empty($filters['date_from'])) {
            $date = new \DateTime($filters['date_from']);
            $date->setTime(0, 0, 0);
            return $date;
        }
        return null;
    }

    /**
     * Récupère la date de fin depuis les filtres
     */
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