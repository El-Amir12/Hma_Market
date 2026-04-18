<?php
// src/Repository/OrderItemRepository.php

namespace App\Repository;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\Recipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrderItem>
 */
class OrderItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrderItem::class);
    }

    /**
     * Récupère tous les articles d'une commande
     */
    public function findByOrder(Order $order): array
    {
        return $this->createQueryBuilder('oi')
            ->where('oi.vente = :order')
            ->setParameter('order', $order)
            ->orderBy('oi.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère tous les articles d'un produit
     */
    public function findByProduct(Product $product): array
    {
        return $this->createQueryBuilder('oi')
            ->where('oi.product = :product')
            ->setParameter('product', $product)
            ->orderBy('oi.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère tous les articles d'une recette (plat)
     */
    public function findByRecipe(Recipe $recipe): array
    {
        return $this->createQueryBuilder('oi')
            ->where('oi.recipe = :recipe')
            ->setParameter('recipe', $recipe)
            ->orderBy('oi.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Calcule le chiffre d'affaires par produit
     */
    public function getRevenueByProduct(HmaService $hmaService, ?\DateTime $dateFrom = null, ?\DateTime $dateTo = null): array
    {
        $qb = $this->createQueryBuilder('oi')
            ->select('IDENTITY(oi.product) as product_id, SUM(oi.total_price) as total_revenue, SUM(oi.quantity) as total_quantity')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('oi.product');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Calcule le chiffre d'affaires par recette (plat)
     */
    public function getRevenueByRecipe(HmaService $hmaService, ?\DateTime $dateFrom = null, ?\DateTime $dateTo = null): array
    {
        $qb = $this->createQueryBuilder('oi')
            ->select('IDENTITY(oi.recipe) as recipe_id, SUM(oi.total_price) as total_revenue, SUM(oi.quantity) as total_quantity')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('oi.recipe IS NOT NULL')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('oi.recipe');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les meilleures ventes (Top produits)
     */
    public function getTopProducts(HmaService $hmaService, int $limit = 10, ?\DateTime $dateFrom = null, ?\DateTime $dateTo = null): array
    {
        $qb = $this->createQueryBuilder('oi')
            ->select('IDENTITY(oi.product) as product_id, SUM(oi.quantity) as total_quantity, SUM(oi.total_price) as total_revenue')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('oi.product IS NOT NULL')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('oi.product')
            ->orderBy('total_quantity', 'DESC')
            ->setMaxResults($limit);
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les meilleures ventes (Top recettes/plats)
     */
    public function getTopRecipes(HmaService $hmaService, int $limit = 10, ?\DateTime $dateFrom = null, ?\DateTime $dateTo = null): array
    {
        $qb = $this->createQueryBuilder('oi')
            ->select('IDENTITY(oi.recipe) as recipe_id, SUM(oi.quantity) as total_quantity, SUM(oi.total_price) as total_revenue')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :hmaService')
            ->andWhere('oi.recipe IS NOT NULL')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('oi.recipe')
            ->orderBy('total_quantity', 'DESC')
            ->setMaxResults($limit);
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les ventes par heure (pour analyse horaire)
     */
    public function getSalesByHour(HmaService $hmaService, ?\DateTime $dateFrom = null, ?\DateTime $dateTo = null): array
    {
        $qb = $this->createQueryBuilder('oi')
            ->select('HOUR(o.created_at) as hour, COUNT(DISTINCT o.id) as order_count, SUM(oi.total_price) as revenue')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('hour')
            ->orderBy('hour', 'ASC');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les ventes par jour de semaine
     */
    public function getSalesByWeekday(HmaService $hmaService, ?\DateTime $dateFrom = null, ?\DateTime $dateTo = null): array
    {
        $qb = $this->createQueryBuilder('oi')
            ->select('WEEKDAY(o.created_at) as weekday, COUNT(DISTINCT o.id) as order_count, SUM(oi.total_price) as revenue')
            ->join('oi.vente', 'o')
            ->where('o.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('weekday')
            ->orderBy('weekday', 'ASC');
        
        if ($dateFrom) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les articles d'une commande avec les détails du produit/recette
     */
    public function findOrderItemsWithDetails(Order $order): array
    {
        return $this->createQueryBuilder('oi')
            ->select('oi', 'p', 'r')
            ->leftJoin('oi.product', 'p')
            ->leftJoin('oi.recipe', 'r')
            ->where('oi.vente = :order')
            ->setParameter('order', $order)
            ->orderBy('oi.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Supprime tous les articles d'une commande
     */
    public function deleteByOrder(Order $order): int
    {
        return $this->createQueryBuilder('oi')
            ->delete()
            ->where('oi.vente = :order')
            ->setParameter('order', $order)
            ->getQuery()
            ->execute();
    }

    /**
     * Calcule le nombre total d'articles vendus pour un produit
     */
    public function getTotalQuantitySoldByProduct(Product $product): int
    {
        $result = $this->createQueryBuilder('oi')
            ->select('SUM(oi.quantity) as total')
            ->where('oi.product = :product')
            ->setParameter('product', $product)
            ->getQuery()
            ->getOneOrNullResult();
        
        return (int) ($result['total'] ?? 0);
    }

    /**
     * Calcule le nombre total d'articles vendus pour une recette
     */
    public function getTotalQuantitySoldByRecipe(Recipe $recipe): int
    {
        $result = $this->createQueryBuilder('oi')
            ->select('SUM(oi.quantity) as total')
            ->where('oi.recipe = :recipe')
            ->setParameter('recipe', $recipe)
            ->getQuery()
            ->getOneOrNullResult();
        
        return (int) ($result['total'] ?? 0);
    }
}