<?php
// src/Controller/Sale/RetailSaleController.php

namespace App\Controller\Sale;

use App\Entity\Category;
use App\Entity\HmaService;
use App\Entity\Order;
use App\Entity\Product;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/sale/retail')]
class RetailSaleController extends BaseSaleController
{

    #[Route('/search', name: 'retail_sale_search', methods: ['GET'])]
    public function search(Request $request): JsonResponse
    {
        $this->checkSaleAccess();
        
        $query = $request->query->get('q', '');
        $categoryId = $request->query->get('category', '');
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            return $this->json(['error' => 'Aucune entreprise associée'], 400);
        }
        
        $qb = $this->entityManager->getRepository(Product::class)
            ->createQueryBuilder('p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->andWhere('p.subscription_active = true')
            ->andWhere('p.stock_quantity > 0')
            ->setParameter('hmaService', $hmaService);
        
        if (!empty($query) && strlen($query) >= 2) {
            $qb->andWhere('p.name LIKE :query OR p.barcode LIKE :query')
            ->setParameter('query', '%' . $query . '%');
        }
        
        if (!empty($categoryId)) {
            $category = $this->entityManager->getRepository(Category::class)->find($categoryId);
            if ($category) {
                $categoryIds = [$category->getId()];
                foreach ($category->getAllChildren() as $child) {
                    $categoryIds[] = $child->getId();
                }
                $qb->andWhere('p.category IN (:categoryIds)')
                ->setParameter('categoryIds', $categoryIds);
            }
        }
        
        $products = $qb->setMaxResults(50)->getQuery()->getResult();
        
        $results = [];
        foreach ($products as $product) {
            $promotionInfo = $this->promotionCalculator->getBestProductPromotion($product);
            
            $results[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'barcode' => $product->getBarcode(),
                'sale_price' => (float) $product->getSalePrice(),
                'final_price' => $promotionInfo['final_price'],
                'has_promotion' => $promotionInfo['has_promotion'],
                'promotion_message' => $promotionInfo['has_promotion'] ? 
                    $this->promotionCalculator->getPromotionMessage(
                        $promotionInfo['promotion'],
                        $promotionInfo['original_price'],
                        $promotionInfo['final_price'],
                        $hmaService
                    ) : null,
                'image' => $product->getImage(),
                'stock_quantity' => $product->getStockQuantity(),
                'unit' => $product->getUnit(),
                'has_expiry_date' => $product->hasExpiryDate(),
                'is_low_stock' => $product->getStockQuantity() <= $product->getMinQuantity(),
                'category' => $product->getCategory()?->getName(),
                // 🔥 AJOUT - Champ prescription_required
                'prescription_required' => $product->isPrescriptionRequired()
            ];
        }
        
        return $this->json($results);
    }
    
    #[Route('/', name: 'retail_sale_index', methods: ['GET'])]
    public function index(): Response
    {
        $this->checkSaleAccess();
        
        $hmaService = $this->getCurrentHmaService();
        $cart = $this->saleService->getCart();
        $cartTotal = $this->saleService->getCartTotal();
        
        // Récupérer les statistiques quotidiennes
        $dailyStats = $this->getDailyStatsData($hmaService);
        
        // Récupérer TOUTES les catégories pour l'affichage hiérarchique
        $categories = $this->entityManager->getRepository(Category::class)
            ->createQueryBuilder('c')
            ->where('c.hma_service = :hmaService')
            ->andWhere('c.is_active = true')
            ->andWhere('c.subscription_active = true')
            ->orderBy('c.name', 'ASC')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getResult();
        
        return $this->render('sale/retail/index.html.twig', [
            'cart' => $cart,
            'cart_total' => $cartTotal,
            'payment_methods' => self::PAYMENT_METHODS,
            'categories' => $categories,
            'dailyStats' => $dailyStats,
        ]);
    }

    /**
     * Récupère les statistiques quotidiennes pour l'affichage
     */
    private function getDailyStatsData(?HmaService $hmaService): array
    {
        if (!$hmaService) {
            return [
                'can_sell' => true,
                'limit' => '∞',
                'used' => 0,
                'remaining' => '∞',
                'percentage' => 100,
                'is_unlimited' => true,
                'plan' => 'unknown'
            ];
        }
        
        $plan = $hmaService->getCurrentPlan();
        $limits = HmaService::PLAN_LIMITS[$plan] ?? HmaService::PLAN_LIMITS[HmaService::PLAN_FREEMIUM];
        
        $maxOrdersPerDay = $limits['max_orders_per_day'] ?? PHP_INT_MAX;
        $isUnlimited = $maxOrdersPerDay === PHP_INT_MAX;
        
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
        
        $remaining = $isUnlimited ? '∞' : max(0, $maxOrdersPerDay - $ordersToday);
        $percentage = $isUnlimited ? 100 : min(100, round(($ordersToday / $maxOrdersPerDay) * 100));
        
        return [
            'can_sell' => $isUnlimited || $ordersToday < $maxOrdersPerDay,
            'limit' => $isUnlimited ? '∞' : $maxOrdersPerDay,
            'used' => $ordersToday,
            'remaining' => $remaining,
            'percentage' => $percentage,
            'is_unlimited' => $isUnlimited,
            'plan' => $plan
        ];
    }

    /**
     * API pour les statistiques quotidiennes
     */
    #[Route('/daily-stats', name: 'retail_daily_stats', methods: ['GET'])]
    public function getDailyStatsApi(): JsonResponse
    {
        $this->checkSaleAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            return $this->json([
                'error' => 'Aucune entreprise associée',
                'can_sell' => true,
                'limit' => 'Illimité',
                'used' => 0,
                'remaining' => 'Illimité',
                'percentage' => 100,
                'is_unlimited' => true,
                'plan' => 'unknown',
                'whatsapp_url' => null
            ]);
        }
        
        $plan = $hmaService->getCurrentPlan();
        $limits = HmaService::PLAN_LIMITS[$plan] ?? HmaService::PLAN_LIMITS[HmaService::PLAN_FREEMIUM];
        
        $maxOrdersPerDay = $limits['max_orders_per_day'] ?? PHP_INT_MAX;
        $isUnlimited = $maxOrdersPerDay === PHP_INT_MAX;
        
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
        
        $remaining = $isUnlimited ? 'Illimité' : max(0, $maxOrdersPerDay - $ordersToday);
        $percentage = $isUnlimited ? 100 : min(100, round(($ordersToday / $maxOrdersPerDay) * 100));
        
        $superAdmin = $this->entityManager->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.is_hma_owner = :isOwner')
            ->andWhere('u.hma_service = :hmaService')
            ->setParameter('isOwner', true)
            ->setParameter('hmaService', $hmaService)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        $whatsappNumber = $superAdmin ? $superAdmin->getPhone() : null;
        $whatsappUrl = $whatsappNumber ? 'https://wa.me/' . preg_replace('/[^0-9]/', '', $whatsappNumber) : null;
        
        return $this->json([
            'can_sell' => $isUnlimited || $ordersToday < $maxOrdersPerDay,
            'limit' => $isUnlimited ? 'Illimité' : $maxOrdersPerDay,
            'used' => $ordersToday,
            'remaining' => $remaining,
            'percentage' => $percentage,
            'is_unlimited' => $isUnlimited,
            'plan' => $plan,
            'whatsapp_url' => $whatsappUrl,
            'message' => $isUnlimited 
                ? 'Aucune limite de ventes quotidienne'
                : ($ordersToday < $maxOrdersPerDay 
                    ? sprintf('Ventes du jour: %d/%d - Encore %d vente(s) possible(s)', $ordersToday, $maxOrdersPerDay, $remaining)
                    : sprintf('⚠️ Limite atteinte: %d/%d ventes aujourd\'hui', $ordersToday, $maxOrdersPerDay))
        ]);
    }
}