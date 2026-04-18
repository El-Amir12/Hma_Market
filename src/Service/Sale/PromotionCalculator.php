<?php
// src/Service/Sale/PromotionCalculator.php

namespace App\Service\Sale;

use App\Entity\Product;
use App\Entity\Recipe;
use App\Entity\Order;
use App\Entity\Promotion;
use App\Entity\HmaService;
use App\Repository\PromotionRepository;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;

class PromotionCalculator
{
    public function __construct(
        private PromotionRepository $promotionRepository,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Vérifie si une promotion est actuellement valide
     */
    public function isPromotionValid(Promotion $promotion): bool
    {
        $now = new \DateTime();
        
        if (!$promotion->isActive()) {
            return false;
        }
        
        $startDate = $promotion->getStartDate();
        $endDate = $promotion->getEndDate();
        
        if ($startDate && $startDate > $now) {
            return false;
        }
        
        if ($endDate && $endDate < $now) {
            return false;
        }
        
        return true;
    }

    /**
     * Calcule la meilleure promotion pour un produit
     */
    public function getBestProductPromotion(Product $product, ?float $customPrice = null): array
    {
        $originalPrice = $customPrice ?? (float) $product->getSalePrice();
        $bestPromotion = null;
        $bestFinalPrice = $originalPrice;
        
        foreach ($product->getPromotionProducts() as $promotionProduct) {
            $promotion = $promotionProduct->getPromotion();
            if ($promotion && $this->isPromotionValid($promotion)) {
                $finalPrice = $this->applyPromotionToPrice($promotion, $originalPrice);
                if ($finalPrice < $bestFinalPrice) {
                    $bestFinalPrice = $finalPrice;
                    $bestPromotion = $promotion;
                }
            }
        }
        
        $category = $product->getCategory();
        if ($category) {
            foreach ($category->getPromotionCategories() as $promotionCategory) {
                $promotion = $promotionCategory->getPromotion();
                if ($promotion && $this->isPromotionValid($promotion)) {
                    $finalPrice = $this->applyPromotionToPrice($promotion, $originalPrice);
                    if ($finalPrice < $bestFinalPrice) {
                        $bestFinalPrice = $finalPrice;
                        $bestPromotion = $promotion;
                    }
                }
            }
        }
        
        $discountAmount = $originalPrice - $bestFinalPrice;
        $discountPercentage = $originalPrice > 0 ? ($discountAmount / $originalPrice) * 100 : 0;
        
        return [
            'has_promotion' => $bestPromotion !== null,
            'promotion' => $bestPromotion,
            'original_price' => $originalPrice,
            'final_price' => $bestFinalPrice,
            'discount_amount' => $discountAmount,
            'discount_percentage' => round($discountPercentage, 2)
        ];
    }

    /**
     * Calcule la meilleure promotion pour une recette
     */
    public function getBestRecipePromotion(Recipe $recipe, ?float $customPrice = null): array
    {
        $originalPrice = $customPrice ?? (float) $recipe->getSellingPrice();
        $bestPromotion = null;
        $bestFinalPrice = $originalPrice;
        
        foreach ($recipe->getPromotionRecipes() as $promotionRecipe) {
            $promotion = $promotionRecipe->getPromotion();
            if ($promotion && $this->isPromotionValid($promotion)) {
                $finalPrice = $this->applyPromotionToPrice($promotion, $originalPrice);
                if ($finalPrice < $bestFinalPrice) {
                    $bestFinalPrice = $finalPrice;
                    $bestPromotion = $promotion;
                }
            }
        }
        
        $category = $recipe->getCategory();
        if ($category) {
            foreach ($category->getPromotionCategoryRecipes() as $promotionCategory) {
                $promotion = $promotionCategory->getPromotion();
                if ($promotion && $this->isPromotionValid($promotion)) {
                    $finalPrice = $this->applyPromotionToPrice($promotion, $originalPrice);
                    if ($finalPrice < $bestFinalPrice) {
                        $bestFinalPrice = $finalPrice;
                        $bestPromotion = $promotion;
                    }
                }
            }
        }
        
        $discountAmount = $originalPrice - $bestFinalPrice;
        $discountPercentage = $originalPrice > 0 ? ($discountAmount / $originalPrice) * 100 : 0;
        
        return [
            'has_promotion' => $bestPromotion !== null,
            'promotion' => $bestPromotion,
            'original_price' => $originalPrice,
            'final_price' => $bestFinalPrice,
            'discount_amount' => $discountAmount,
            'discount_percentage' => round($discountPercentage, 2)
        ];
    }

    /**
     * Applique une promotion à un prix
     */
    private function applyPromotionToPrice(Promotion $promotion, float $originalPrice): float
    {
        $value = (float) $promotion->getValue();
        $typePromotion = $promotion->getTypePromotion();
        
        if (!$typePromotion) {
            return $originalPrice;
        }
        
        $typeName = strtolower(trim($typePromotion->getName()));
        
        if ($typeName === 'pourcentage' || $typeName === 'percentage' || $typeName === '%') {
            $reduction = $originalPrice * ($value / 100);
            return max(0, round($originalPrice - $reduction, 2));
        }
        
        return max(0, $originalPrice - $value);
    }

    /**
     * Récupère le message de la promotion (en bleu)
     */
    public function getPromotionMessage(Promotion $promotion, float $originalPrice, float $finalPrice, ?HmaService $hmaService = null): string
    {
        $value = (float) $promotion->getValue();
        $typePromotion = $promotion->getTypePromotion();
        
        $currency = 'FCFA';
        if ($hmaService && $hmaService->getCountry()) {
            $currencyMap = [
                'CM' => 'XAF', 'CI' => 'XOF', 'SN' => 'XOF',
                'FR' => 'EUR', 'US' => 'USD', 'BJ' => 'FCFA'
            ];
            $currency = $currencyMap[$hmaService->getCountry()] ?? 'FCFA';
        }
        
        $formatPrice = function($price) use ($currency) {
            return number_format($price, 0, ',', ' ') . ' ' . $currency;
        };
        
        if (!$typePromotion) {
            return $promotion->getName() ?? 'Promotion appliquée';
        }
        
        $typeName = strtolower(trim($typePromotion->getName()));
        
        if ($typeName === 'pourcentage' || $typeName === 'percentage' || $typeName === '%') {
            return sprintf("Promotion : -%s%%", $value);
        }
        
        return sprintf("Promotion : -%s", $formatPrice($value));
    }

    public function canCreateSale(HmaService $hmaService): bool
    {
        $limits = HmaService::PLAN_LIMITS[$hmaService->getCurrentPlan()] ?? HmaService::PLAN_LIMITS[HmaService::PLAN_FREEMIUM];
        $maxOrdersPerMonth = $limits['max_orders_per_month'] ?? PHP_INT_MAX;
        
        if ($maxOrdersPerMonth === PHP_INT_MAX) {
            return true;
        }
        
        $currentMonth = (new \DateTime())->format('Y-m');
        $ordersThisMonth = 0;
        
        foreach ($hmaService->getOrders() as $order) {
            if ($order->getCreatedAt() && $order->getCreatedAt()->format('Y-m') === $currentMonth) {
                $ordersThisMonth++;
            }
        }
        
        return $ordersThisMonth < $maxOrdersPerMonth;
    }

    public function canCreateSaleToday(HmaService $hmaService): array
    {
        $limits = HmaService::PLAN_LIMITS[$hmaService->getCurrentPlan()] ?? HmaService::PLAN_LIMITS[HmaService::PLAN_FREEMIUM];
        $maxOrdersPerDay = $limits['max_orders_per_day'] ?? PHP_INT_MAX;
        $isUnlimited = $maxOrdersPerDay === PHP_INT_MAX;
        
        if ($isUnlimited) {
            return [
                'can_sell' => true, 
                'remaining' => PHP_INT_MAX, 
                'limit' => 'Illimité',
                'used' => 0,
                'is_unlimited' => true
            ];
        }
        
        $today = new \DateTime();
        $today->setTime(0, 0, 0);
        $tomorrow = (clone $today)->modify('+1 day');
        
        $ordersToday = $this->entityManager->getRepository(Order::class)
            ->createQueryBuilder('o')
            ->select('COUNT(o.id)')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.created_at >= :today')
            ->andWhere('o.created_at < :tomorrow')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleScalarResult();
        
        $remaining = max(0, $maxOrdersPerDay - $ordersToday);
        
        return [
            'can_sell' => $ordersToday < $maxOrdersPerDay,
            'remaining' => $remaining,
            'limit' => $maxOrdersPerDay,
            'used' => $ordersToday,
            'is_unlimited' => false
        ];
    }
}