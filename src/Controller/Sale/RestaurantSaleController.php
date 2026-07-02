<?php
// src/Controller/Sale/RestaurantSaleController.php

namespace App\Controller\Sale;

use App\Entity\CategoryRecipe;
use App\Entity\HmaService;
use App\Entity\Order;
use App\Entity\Customer;
use App\Entity\Recipe;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/sale/restaurant')]
class RestaurantSaleController extends BaseSaleController
{
    #[Route('/search', name: 'restaurant_sale_search', methods: ['GET'])]
    public function search(Request $request): JsonResponse
    {
        $this->checkSaleAccess();
        
        $query = $request->query->get('q', '');
        $categoryId = $request->query->get('category', '');
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            return $this->json(['error' => 'Aucune entreprise associée'], 400);
        }
        
        $qb = $this->entityManager->getRepository(Recipe::class)
            ->createQueryBuilder('r')
            ->where('r.hma_service = :hmaService')
            ->andWhere('r.is_active = true')
            ->andWhere('r.subscription_active = true')
            ->setParameter('hmaService', $hmaService);
        
        if (!empty($query) && strlen($query) >= 2) {
            $qb->andWhere('r.name LIKE :query')
               ->setParameter('query', '%' . $query . '%');
        }
        
        if (!empty($categoryId)) {
            $qb->andWhere('r.category = :categoryId')
               ->setParameter('categoryId', $categoryId);
        }
        
        $recipes = $qb->setMaxResults(50)->getQuery()->getResult();
        
        $results = [];
        foreach ($recipes as $recipe) {
            $promotionInfo = $this->promotionCalculator->getBestRecipePromotion($recipe);
            
            $results[] = [
                'id' => $recipe->getId(),
                'name' => $recipe->getName(),
                'description' => $recipe->getDescription(),
                'selling_price' => (float) $recipe->getSellingPrice(),
                'final_price' => $promotionInfo['final_price'],
                'has_promotion' => $promotionInfo['has_promotion'],
                'promotion_message' => $promotionInfo['has_promotion'] ? 
                    $this->promotionCalculator->getPromotionMessage(
                        $promotionInfo['promotion'],
                        $promotionInfo['original_price'],
                        $promotionInfo['final_price'],
                        $hmaService
                    ) : null,
                'image' => $recipe->getImage(),
                'category' => $recipe->getCategory()?->getName()
            ];
        }
        
        return $this->json($results);
    }

    /**
     * ✅ RECHERCHE CLIENT : D'abord dans Order, puis dans Customer
     */
    #[Route('/search-customer', name: 'restaurant_sale_search_customer', methods: ['GET'])]
    public function searchCustomer(Request $request): JsonResponse
    {
        $this->checkSaleAccess();
        
        $phone = $request->query->get('phone');
        $email = $request->query->get('email');
        
        if (!$phone && !$email) {
            return $this->json([
                'found' => false,
                'error' => 'Veuillez fournir un téléphone ou un email'
            ], 400);
        }
        
        try {
            $hmaService = $this->getCurrentHmaService();
            $customer = null;
            $orderInfo = null;
            
            // 🔍 1. D'ABORD, rechercher dans les commandes (Order)
            if ($phone) {
                $cleanPhone = preg_replace('/[^0-9]/', '', $phone);
                
                // Rechercher une commande avec ce téléphone
                $order = $this->entityManager->getRepository(Order::class)
                    ->createQueryBuilder('o')
                    ->where('o.customer_phone LIKE :phone1')
                    ->orWhere('o.customer_phone LIKE :phone2')
                    ->andWhere('o.hma_service = :hmaService')
                    ->setParameter('phone1', '%' . $cleanPhone)
                    ->setParameter('phone2', $cleanPhone . '%')
                    ->setParameter('hmaService', $hmaService)
                    ->orderBy('o.created_at', 'DESC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
                
                if ($order) {
                    // ✅ Client trouvé dans les commandes
                    $orderInfo = [
                        'found_in_orders' => true,
                        'customer_name' => $order->getCustomerName(),
                        'customer_phone' => $order->getCustomerPhone(),
                        'last_order_date' => $order->getCreatedAt()->format('Y-m-d H:i:s'),
                        'last_order_number' => $order->getOrderNumber(),
                        'last_order_amount' => (float) $order->getTotalAmount()
                    ];
                    
                    // Essayer de trouver le Customer correspondant
                    $customer = $this->entityManager->getRepository(Customer::class)
                        ->createQueryBuilder('c')
                        ->where('c.phone LIKE :phone1')
                        ->orWhere('c.phone LIKE :phone2')
                        ->setParameter('phone1', '%' . $cleanPhone)
                        ->setParameter('phone2', $cleanPhone . '%')
                        ->setMaxResults(1)
                        ->getQuery()
                        ->getOneOrNullResult();
                    
                    // Si pas de Customer, on crée un objet virtuel avec les données de la commande
                    if (!$customer) {
                        $customerData = [
                            'id' => null,
                            'full_name' => $order->getCustomerName(),
                            'email' => null,
                            'phone' => $order->getCustomerPhone(),
                            'address' => null,
                            'city' => null,
                            'country' => null,
                            'is_active' => true,
                            'is_verified' => false,
                            'created_at' => $order->getCreatedAt()->format('Y-m-d H:i:s'),
                            'from_order' => true
                        ];
                        
                        return $this->json([
                            'found' => true,
                            'customer' => $customerData,
                            'stats' => [
                                'total_orders' => $this->countOrdersByPhone($cleanPhone, $hmaService),
                                'total_spent' => $this->sumOrdersByPhone($cleanPhone, $hmaService),
                                'last_order_date' => $orderInfo['last_order_date'],
                                'last_order_amount' => $orderInfo['last_order_amount']
                            ],
                            'recent_orders' => $this->getRecentOrdersByPhone($cleanPhone, $hmaService),
                            'source' => 'orders'
                        ]);
                    }
                }
            }
            
            // 🔍 2. Si pas trouvé dans les commandes, rechercher dans Customer
            if (!$customer && $phone) {
                $cleanPhone = preg_replace('/[^0-9]/', '', $phone);
                
                $customer = $this->entityManager->getRepository(Customer::class)
                    ->createQueryBuilder('c')
                    ->where('c.phone LIKE :phone1')
                    ->orWhere('c.phone LIKE :phone2')
                    ->setParameter('phone1', '%' . $cleanPhone)
                    ->setParameter('phone2', $cleanPhone . '%')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
            }
            
            if (!$customer && $email) {
                $customer = $this->entityManager->getRepository(Customer::class)
                    ->findOneBy(['email' => $email]);
            }
            
            // 🔍 3. Si trouvé dans Customer, récupérer ses commandes
            if ($customer) {
                $orders = $this->entityManager->getRepository(Order::class)
                    ->createQueryBuilder('o')
                    ->where('o.customer = :customer')
                    ->andWhere('o.hma_service = :hmaService')
                    ->setParameter('customer', $customer)
                    ->setParameter('hmaService', $hmaService)
                    ->orderBy('o.created_at', 'DESC')
                    ->setMaxResults(10)
                    ->getQuery()
                    ->getResult();
                
                $totalOrders = $this->entityManager->getRepository(Order::class)
                    ->createQueryBuilder('o')
                    ->select('COUNT(o.id)')
                    ->where('o.customer = :customer')
                    ->setParameter('customer', $customer)
                    ->getQuery()
                    ->getSingleScalarResult();
                
                $totalSpent = $this->entityManager->getRepository(Order::class)
                    ->createQueryBuilder('o')
                    ->select('SUM(o.total_amount)')
                    ->where('o.customer = :customer')
                    ->andWhere('o.status = :status')
                    ->setParameter('customer', $customer)
                    ->setParameter('status', 'completed')
                    ->getQuery()
                    ->getSingleScalarResult() ?? 0;
                
                $lastOrder = $orders[0] ?? null;
                
                return $this->json([
                    'found' => true,
                    'customer' => [
                        'id' => $customer->getId(),
                        'full_name' => $customer->getFullName(),
                        'email' => $customer->getEmail(),
                        'phone' => $customer->getPhone(),
                        'address' => $customer->getAddress(),
                        'city' => $customer->getCity(),
                        'country' => $customer->getCountry(),
                        'is_active' => $customer->isActive(),
                        'is_verified' => $customer->isVerified(),
                        'created_at' => $customer->getCreatedAt()?->format('Y-m-d H:i:s'),
                        'from_order' => false
                    ],
                    'stats' => [
                        'total_orders' => $totalOrders,
                        'total_spent' => (float) $totalSpent,
                        'last_order_date' => $lastOrder ? $lastOrder->getCreatedAt()->format('Y-m-d H:i:s') : null,
                        'last_order_amount' => $lastOrder ? (float) $lastOrder->getTotalAmount() : 0,
                    ],
                    'recent_orders' => array_map(function($order) {
                        return [
                            'id' => $order->getId(),
                            'order_number' => $order->getOrderNumber(),
                            'total_amount' => (float) $order->getTotalAmount(),
                            'created_at' => $order->getCreatedAt()->format('Y-m-d H:i:s'),
                            'status' => $order->getStatus(),
                            'payment_method' => $order->getPaymentMethod(),
                        ];
                    }, $orders),
                    'source' => 'customer'
                ]);
            }
            
            // ❌ 4. Aucun client trouvé
            return $this->json([
                'found' => false,
                'message' => 'Aucun client trouvé avec ces informations'
            ]);
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur recherche client', [
                'phone' => $phone,
                'email' => $email,
                'error' => $e->getMessage()
            ]);
            
            return $this->json([
                'found' => false,
                'error' => 'Erreur lors de la recherche du client'
            ], 500);
        }
    }

    /**
     * Compte le nombre de commandes pour un téléphone donné
     */
    private function countOrdersByPhone(string $phone, HmaService $hmaService): int
    {
        return (int) $this->entityManager->getRepository(Order::class)
            ->createQueryBuilder('o')
            ->select('COUNT(o.id)')
            ->where('o.customer_phone LIKE :phone')
            ->andWhere('o.hma_service = :hmaService')
            ->setParameter('phone', '%' . $phone)
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Calcule le total dépensé pour un téléphone donné
     */
    private function sumOrdersByPhone(string $phone, HmaService $hmaService): float
    {
        return (float) $this->entityManager->getRepository(Order::class)
            ->createQueryBuilder('o')
            ->select('SUM(o.total_amount)')
            ->where('o.customer_phone LIKE :phone')
            ->andWhere('o.hma_service = :hmaService')
            ->andWhere('o.status = :status')
            ->setParameter('phone', '%' . $phone)
            ->setParameter('hmaService', $hmaService)
            ->setParameter('status', 'completed')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;
    }

    /**
     * Récupère les dernières commandes pour un téléphone donné
     */
    private function getRecentOrdersByPhone(string $phone, HmaService $hmaService): array
    {
        $orders = $this->entityManager->getRepository(Order::class)
            ->createQueryBuilder('o')
            ->where('o.customer_phone LIKE :phone')
            ->andWhere('o.hma_service = :hmaService')
            ->setParameter('phone', '%' . $phone)
            ->setParameter('hmaService', $hmaService)
            ->orderBy('o.created_at', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        return array_map(function($order) {
            return [
                'id' => $order->getId(),
                'order_number' => $order->getOrderNumber(),
                'total_amount' => (float) $order->getTotalAmount(),
                'created_at' => $order->getCreatedAt()->format('Y-m-d H:i:s'),
                'status' => $order->getStatus(),
                'payment_method' => $order->getPaymentMethod(),
                'customer_name' => $order->getCustomerName()
            ];
        }, $orders);
    }
    
    #[Route('/', name: 'restaurant_sale_index', methods: ['GET'])]
    public function index(): Response
    {
        $this->checkSaleAccess();
        
        $hmaService = $this->getCurrentHmaService();
        $cart = $this->saleService->getCart();
        $cartTotal = $this->saleService->getCartTotal();
        
        $dailyStats = $this->getDailyStatsData($hmaService);
        
        $categories = $this->entityManager->getRepository(CategoryRecipe::class)
            ->createQueryBuilder('c')
            ->where('c.hma_service = :hmaService')
            ->andWhere('c.is_active = true')
            ->andWhere('c.subscription_active = true')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
        
        return $this->render('sale/restaurant/index.html.twig', [
            'cart' => $cart,
            'cart_total' => $cartTotal,
            'payment_methods' => self::PAYMENT_METHODS,
            'categories' => $categories,
            'dailyStats' => $dailyStats,
        ]);
    }

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

    #[Route('/daily-stats', name: 'api_daily_stats', methods: ['GET'])]
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