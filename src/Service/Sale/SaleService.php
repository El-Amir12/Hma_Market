<?php
// src/Service/Sale/SaleService.php

namespace App\Service\Sale;

use App\Entity\Product;
use App\Entity\Recipe;
use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\User;
use App\Entity\HmaService;
use App\Entity\DailyUsage;
use App\Service\UnitConverter;
use App\Service\StockSyncService;
use App\Repository\ProductRepository;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SaleService
{
    private SessionInterface $session;
    private array $cart = [];
    private const CART_KEY = 'sale_cart';
    
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockDeductionService $stockDeductionService,
        private PromotionCalculator $promotionCalculator,
        private UnitConverter $unitConverter,
        private StockSyncService $stockSyncService,
        private ProductRepository $productRepository,
        private RecipeRepository $recipeRepository,
        private LoggerInterface $logger,
        RequestStack $requestStack
    ) {
        $this->session = $requestStack->getSession();
        $this->cart = $this->session->get(self::CART_KEY, []);
    }
    
    /**
     * Ajoute un produit au panier
     */
    public function addProductToCart(Product $product, int $quantity = 1, ?string $notes = null): array
    {
        $this->validateProductBeforeAdd($product, $quantity);
        
        $promotionInfo = $this->promotionCalculator->getBestProductPromotion($product);
        $productId = $product->getId();
        
        if (isset($this->cart[$productId])) {
            $newQuantity = $this->cart[$productId]['quantity'] + $quantity;
            
            if ($product->getStockQuantity() < $newQuantity) {
                throw new \Exception(sprintf(
                    'Stock insuffisant. Vous avez déjà %d dans le panier. Total demandé: %d',
                    $this->cart[$productId]['quantity'],
                    $newQuantity
                ));
            }
            
            $this->cart[$productId]['quantity'] = $newQuantity;
            $this->cart[$productId]['total_price'] = $newQuantity * $promotionInfo['final_price'];
            $this->cart[$productId]['unit_price'] = $promotionInfo['final_price'];
            $this->cart[$productId]['has_promotion'] = $promotionInfo['has_promotion'];
            
            if ($notes !== null) {
                $this->cart[$productId]['notes'] = $notes;
            }
            
            if ($promotionInfo['has_promotion'] && $promotionInfo['promotion']) {
                $this->cart[$productId]['promotion'] = [
                    'id' => $promotionInfo['promotion']->getId(),
                    'name' => $promotionInfo['promotion']->getName(),
                    'discount_amount' => $promotionInfo['discount_amount'],
                    'discount_percentage' => $promotionInfo['discount_percentage'],
                    'message' => $this->promotionCalculator->getPromotionMessage(
                        $promotionInfo['promotion'],
                        $promotionInfo['original_price'],
                        $promotionInfo['final_price']
                    )
                ];
            }
        } else {
            $this->cart[$productId] = [
                'type' => 'product',
                'id' => $productId,
                'name' => $product->getName(),
                'barcode' => $product->getBarcode(),
                'image' => $product->getImage(),
                'unit' => $product->getUnit(),
                'quantity' => $quantity,
                'notes' => $notes,
                'original_unit_price' => $promotionInfo['original_price'],
                'unit_price' => $promotionInfo['final_price'],
                'total_price' => $quantity * $promotionInfo['final_price'],
                'has_promotion' => $promotionInfo['has_promotion'],
                'prescription_required' => $product->isPrescriptionRequired(),
                'promotion' => $promotionInfo['promotion'] ? [
                    'id' => $promotionInfo['promotion']->getId(),
                    'name' => $promotionInfo['promotion']->getName(),
                    'discount_amount' => $promotionInfo['discount_amount'],
                    'discount_percentage' => $promotionInfo['discount_percentage'],
                    'message' => $this->promotionCalculator->getPromotionMessage(
                        $promotionInfo['promotion'],
                        $promotionInfo['original_price'],
                        $promotionInfo['final_price']
                    )
                ] : null,
                'has_expiry_date' => $product->hasExpiryDate(),
                'added_at' => date('Y-m-d H:i:s')
            ];
        }
        
        $this->saveCart();
        return $this->cart[$productId];
    }
    
    /**
     * Ajoute une recette au panier
     */
    public function addRecipeToCart(Recipe $recipe, int $quantity = 1, ?string $notes = null): array
    {
        $this->validateRecipeBeforeAdd($recipe, $quantity);
        
        $promotionInfo = $this->promotionCalculator->getBestRecipePromotion($recipe);
        $cartKey = 'recipe_' . $recipe->getId();
        
        if (isset($this->cart[$cartKey])) {
            $newQuantity = $this->cart[$cartKey]['quantity'] + $quantity;
            $this->checkRecipeStockAvailability($recipe, $newQuantity);
            
            $this->cart[$cartKey]['quantity'] = $newQuantity;
            $this->cart[$cartKey]['total_price'] = $newQuantity * $promotionInfo['final_price'];
            $this->cart[$cartKey]['unit_price'] = $promotionInfo['final_price'];
            $this->cart[$cartKey]['original_unit_price'] = $promotionInfo['original_price'];
            $this->cart[$cartKey]['has_promotion'] = $promotionInfo['has_promotion'];
            
            if ($notes !== null) {
                $this->cart[$cartKey]['notes'] = $notes;
            }
            
            if ($promotionInfo['has_promotion'] && $promotionInfo['promotion']) {
                $this->cart[$cartKey]['promotion'] = [
                    'id' => $promotionInfo['promotion']->getId(),
                    'name' => $promotionInfo['promotion']->getName(),
                    'discount_amount' => $promotionInfo['discount_amount'],
                    'discount_percentage' => $promotionInfo['discount_percentage'],
                    'message' => $this->promotionCalculator->getPromotionMessage(
                        $promotionInfo['promotion'],
                        $promotionInfo['original_price'],
                        $promotionInfo['final_price'],
                        $recipe->getHmaService()
                    )
                ];
            }
        } else {
            $this->checkRecipeStockAvailability($recipe, $quantity);
            
            $this->cart[$cartKey] = [
                'type' => 'recipe',
                'id' => $recipe->getId(),
                'name' => $recipe->getName(),
                'description' => $recipe->getDescription(),
                'image' => $recipe->getImage(),
                'quantity' => $quantity,
                'notes' => $notes,
                'original_unit_price' => $promotionInfo['original_price'],
                'unit_price' => $promotionInfo['final_price'],
                'total_price' => $quantity * $promotionInfo['final_price'],
                'has_promotion' => $promotionInfo['has_promotion'],
                'promotion' => $promotionInfo['promotion'] ? [
                    'id' => $promotionInfo['promotion']->getId(),
                    'name' => $promotionInfo['promotion']->getName(),
                    'discount_amount' => $promotionInfo['discount_amount'],
                    'discount_percentage' => $promotionInfo['discount_percentage'],
                    'message' => $this->promotionCalculator->getPromotionMessage(
                        $promotionInfo['promotion'],
                        $promotionInfo['original_price'],
                        $promotionInfo['final_price'],
                        $recipe->getHmaService()
                    )
                ] : null,
                'added_at' => date('Y-m-d H:i:s')
            ];
        }
        
        $this->saveCart();
        return $this->cart[$cartKey];
    }
    
    /**
     * Met à jour la quantité d'un article dans le panier
     */
    public function updateCartItemQuantity(int $itemId, string $type, int $quantity): array
    {
        $cartKey = ($type === 'product') ? $itemId : 'recipe_' . $itemId;
        
        if (!isset($this->cart[$cartKey])) {
            throw new \Exception('Article non trouvé dans le panier');
        }
        
        if ($quantity <= 0) {
            $this->removeFromCart($itemId, $type);
            return [];
        }
        
        if ($type === 'product') {
            $product = $this->productRepository->find($itemId);
            if ($product && $product->getStockQuantity() < $quantity) {
                throw new \Exception(sprintf(
                    'Stock insuffisant pour "%s". Disponible: %d %s',
                    $product->getName(),
                    $product->getStockQuantity(),
                    $product->getUnit() ?? 'unités'
                ));
            }
            if ($product && $product->hasExpiryDate() && $product->getExpiryDate() < new \DateTime()) {
                throw new \Exception('Ce produit a expiré.');
            }
        } else {
            $recipe = $this->recipeRepository->find($itemId);
            if ($recipe) {
                $this->checkRecipeStockAvailability($recipe, $quantity);
            }
        }
        
        $existingNotes = $this->cart[$cartKey]['notes'] ?? null;
        
        if ($type === 'product') {
            $product = $this->productRepository->find($itemId);
            if ($product) {
                $promotionInfo = $this->promotionCalculator->getBestProductPromotion($product);
                $unitPrice = $promotionInfo['final_price'];
                $totalPrice = $unitPrice * $quantity;
                
                $this->cart[$cartKey]['quantity'] = $quantity;
                $this->cart[$cartKey]['unit_price'] = $unitPrice;
                $this->cart[$cartKey]['total_price'] = $totalPrice;
                $this->cart[$cartKey]['has_promotion'] = $promotionInfo['has_promotion'];
                $this->cart[$cartKey]['original_unit_price'] = $promotionInfo['original_price'];
                $this->cart[$cartKey]['notes'] = $existingNotes;
                
                if ($promotionInfo['has_promotion'] && $promotionInfo['promotion']) {
                    $this->cart[$cartKey]['promotion'] = [
                        'id' => $promotionInfo['promotion']->getId(),
                        'name' => $promotionInfo['promotion']->getName(),
                        'discount_amount' => $promotionInfo['discount_amount'],
                        'discount_percentage' => $promotionInfo['discount_percentage'],
                        'message' => $this->promotionCalculator->getPromotionMessage(
                            $promotionInfo['promotion'],
                            $promotionInfo['original_price'],
                            $promotionInfo['final_price']
                        )
                    ];
                } else {
                    $this->cart[$cartKey]['promotion'] = null;
                }
            }
        } else {
            $recipe = $this->recipeRepository->find($itemId);
            if ($recipe) {
                $promotionInfo = $this->promotionCalculator->getBestRecipePromotion($recipe);
                $unitPrice = $promotionInfo['final_price'];
                $totalPrice = $unitPrice * $quantity;
                
                $this->cart[$cartKey]['quantity'] = $quantity;
                $this->cart[$cartKey]['unit_price'] = $unitPrice;
                $this->cart[$cartKey]['total_price'] = $totalPrice;
                $this->cart[$cartKey]['has_promotion'] = $promotionInfo['has_promotion'];
                $this->cart[$cartKey]['original_unit_price'] = $promotionInfo['original_price'];
                $this->cart[$cartKey]['notes'] = $existingNotes;
                
                if ($promotionInfo['has_promotion'] && $promotionInfo['promotion']) {
                    $this->cart[$cartKey]['promotion'] = [
                        'id' => $promotionInfo['promotion']->getId(),
                        'name' => $promotionInfo['promotion']->getName(),
                        'discount_amount' => $promotionInfo['discount_amount'],
                        'discount_percentage' => $promotionInfo['discount_percentage'],
                        'message' => $this->promotionCalculator->getPromotionMessage(
                            $promotionInfo['promotion'],
                            $promotionInfo['original_price'],
                            $promotionInfo['final_price'],
                            $recipe->getHmaService()
                        )
                    ];
                } else {
                    $this->cart[$cartKey]['promotion'] = null;
                }
            }
        }
        
        $this->saveCart();
        return $this->cart[$cartKey];
    }
    
    /**
     * Met à jour les notes d'un article
     */
    public function updateCartItemNotes(int $itemId, string $type, ?string $notes): array
    {
        $cartKey = ($type === 'product') ? $itemId : 'recipe_' . $itemId;
        
        if (!isset($this->cart[$cartKey])) {
            throw new \Exception('Article non trouvé dans le panier');
        }
        
        $this->cart[$cartKey]['notes'] = $notes;
        $this->saveCart();
        
        return $this->cart[$cartKey];
    }
    
    /**
     * Supprime un article du panier
     */
    public function removeFromCart(int $itemId, string $type): void
    {
        $cartKey = ($type === 'product') ? $itemId : 'recipe_' . $itemId;
        
        if (isset($this->cart[$cartKey])) {
            unset($this->cart[$cartKey]);
            $this->saveCart();
            $this->logger->info('Article supprimé du panier', [
                'type' => $type,
                'id' => $itemId,
                'cart_key' => $cartKey
            ]);
        }
    }
    
    /**
     * Rafraîchit tout le panier en recalculant les promotions
     */
    public function refreshCartPromotions(): void
    {
        $updatedCart = [];
        $modified = false;
        
        foreach ($this->cart as $key => $item) {
            if ($item['type'] === 'product') {
                $product = $this->productRepository->find($item['id']);
                if ($product) {
                    $promotionInfo = $this->promotionCalculator->getBestProductPromotion($product);
                    $newTotalPrice = $promotionInfo['final_price'] * $item['quantity'];
                    
                    if ($item['unit_price'] != $promotionInfo['final_price']) {
                        $modified = true;
                        $item['unit_price'] = $promotionInfo['final_price'];
                        $item['total_price'] = $newTotalPrice;
                        $item['has_promotion'] = $promotionInfo['has_promotion'];
                        $item['original_unit_price'] = $promotionInfo['original_price'];
                        if ($promotionInfo['has_promotion'] && $promotionInfo['promotion']) {
                            $item['promotion'] = [
                                'id' => $promotionInfo['promotion']->getId(),
                                'name' => $promotionInfo['promotion']->getName(),
                                'discount_amount' => $promotionInfo['discount_amount'],
                                'discount_percentage' => $promotionInfo['discount_percentage'],
                                'message' => $this->promotionCalculator->getPromotionMessage(
                                    $promotionInfo['promotion'],
                                    $promotionInfo['original_price'],
                                    $promotionInfo['final_price']
                                )
                            ];
                        } else {
                            $item['promotion'] = null;
                        }
                    }
                    $updatedCart[$key] = $item;
                }
            } else {
                $recipe = $this->recipeRepository->find($item['id']);
                if ($recipe) {
                    $promotionInfo = $this->promotionCalculator->getBestRecipePromotion($recipe);
                    $newTotalPrice = $promotionInfo['final_price'] * $item['quantity'];
                    
                    if ($item['unit_price'] != $promotionInfo['final_price']) {
                        $modified = true;
                        $item['unit_price'] = $promotionInfo['final_price'];
                        $item['total_price'] = $newTotalPrice;
                        $item['has_promotion'] = $promotionInfo['has_promotion'];
                        $item['original_unit_price'] = $promotionInfo['original_price'];
                        if ($promotionInfo['has_promotion'] && $promotionInfo['promotion']) {
                            $item['promotion'] = [
                                'id' => $promotionInfo['promotion']->getId(),
                                'name' => $promotionInfo['promotion']->getName(),
                                'discount_amount' => $promotionInfo['discount_amount'],
                                'discount_percentage' => $promotionInfo['discount_percentage'],
                                'message' => $this->promotionCalculator->getPromotionMessage(
                                    $promotionInfo['promotion'],
                                    $promotionInfo['original_price'],
                                    $promotionInfo['final_price'],
                                    $recipe->getHmaService()
                                )
                            ];
                        } else {
                            $item['promotion'] = null;
                        }
                    }
                    $updatedCart[$key] = $item;
                }
            }
        }
        
        if ($modified) {
            $this->cart = $updatedCart;
            $this->saveCart();
            $this->logger->info('Panier mis à jour après rafraîchissement des promotions');
        }
    }
    
    /**
     * Vide le panier
     */
    public function clearCart(): void
    {
        $this->cart = [];
        $this->saveCart();
    }
    
    /**
     * Récupère le contenu du panier
     */
    public function getCart(): array
    {
        return array_values($this->cart);
    }
    
    /**
     * Calcule le total du panier
     */
    public function getCartTotal(): float
    {
        $total = 0;
        foreach ($this->cart as $item) {
            $total += $item['total_price'];
        }
        return $total;
    }
    
    /**
     * Vérifie la disponibilité des ingrédients
     */
    private function checkRecipeStockAvailability(Recipe $recipe, int $quantity): void
    {
        foreach ($recipe->getRecipeItems() as $item) {
            $product = $item->getProduct();
            $neededQuantity = $item->getQuantity() * $quantity;
            
            if ($item->getUnit() && $product->getUnit()) {
                $neededQuantity = $this->unitConverter->convert(
                    $neededQuantity,
                    $item->getUnit(),
                    $product->getUnit()
                );
            }
            
            if ($product->getStockQuantity() < $neededQuantity) {
                throw new \Exception(sprintf(
                    'Stock insuffisant pour l\'ingrédient "%s". Besoin: %.2f %s, Disponible: %d %s',
                    $product->getName(),
                    $neededQuantity,
                    $product->getUnit() ?? 'unité',
                    $product->getStockQuantity(),
                    $product->getUnit() ?? 'unité'
                ));
            }
        }
    }
    
    /**
     * Vérifications produit
     */
    private function validateProductBeforeAdd(Product $product, int $quantity): void
    {
        if (!$product->isActive()) {
            throw new \Exception('Ce produit n\'est pas disponible.');
        }
        
        if (!$product->isSubscriptionActive()) {
            throw new \Exception('Ce produit n\'est pas disponible actuellement.');
        }
        
        if ($product->getStockQuantity() < $quantity) {
            throw new \Exception(sprintf(
                'Stock insuffisant. Disponible: %d %s',
                $product->getStockQuantity(),
                $product->getUnit() ?? 'unités'
            ));
        }
        
        if ($product->hasExpiryDate() && $product->getExpiryDate() < new \DateTime()) {
            throw new \Exception('Ce produit a expiré et ne peut plus être vendu.');
        }
    }
    
    /**
     * Vérifications recette
     */
    private function validateRecipeBeforeAdd(Recipe $recipe, int $quantity): void
    {
        if (!$recipe->isActive()) {
            throw new \Exception('Ce plat n\'est pas disponible.');
        }
        
        if (!$recipe->isSubscriptionActive()) {
            throw new \Exception('Ce plat n\'est pas disponible actuellement.');
        }
    }
    
    /**
     * Valide une vente avec vérification complète des promotions
     */
    public function validateSale(
        User $user,
        HmaService $hmaService,
        string $customerName,
        string $customerPhone,
        string $paymentMethod,
        float $amountPaid,
        ?string $notes = null
    ): Order {
        if (empty($this->cart)) {
            throw new \Exception('Le panier est vide');
        }
        
        $this->refreshCartPromotions();
        
        $dailyCheck = $this->checkDailyLimit($hmaService);
        if (!$dailyCheck['can_sell']) {
            throw new \Exception(sprintf(
                'Limite quotidienne de ventes atteinte. Maximum: %s ventes par jour.',
                $dailyCheck['limit'] === PHP_INT_MAX ? 'illimité' : $dailyCheck['limit']
            ));
        }
        
        if (!$this->promotionCalculator->canCreateSale($hmaService)) {
            throw new \Exception('Limite de ventes mensuelles atteinte pour votre abonnement');
        }
        
        $totalAmount = $this->getCartTotal();
        $changeAmount = max(0, $amountPaid - $totalAmount);
        
        $managedUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        if (!$managedUser) {
            throw new \Exception('Utilisateur non trouvé');
        }
        
        $managedHmaService = $this->entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$managedHmaService) {
            throw new \Exception('Service non trouvé');
        }
        
        $order = new Order();
        $order->setOrderNumber($this->generateOrderNumber($managedHmaService));
        $order->setCustomerName($customerName);
        $order->setCustomerPhone($customerPhone);
        $order->setTotalAmount((string) $totalAmount);
        $order->setAmountPaid((string) $amountPaid);
        $order->setChangeAmount((string) $changeAmount);
        $order->setPaymentMethod($paymentMethod);
        $order->setPaymentStatus($amountPaid >= $totalAmount ? 'paid' : 'partial');
        $order->setStatus('completed');
        $order->setNotes($notes ?? '');
        $order->setUser($managedUser);
        $order->setHmaService($managedHmaService);
        $order->setCreatedAt(new \DateTime());
        $order->setUpdatedAt(new \DateTime());
        
        $this->entityManager->persist($order);
        
        foreach ($this->cart as $item) {
            if ($item['type'] === 'product') {
                $orderItem = $this->processProductItem($order, $item, $managedUser);
            } else {
                $orderItem = $this->processRecipeItem($order, $item, $managedUser);
            }
            $this->entityManager->persist($orderItem);
            $order->addOrderItem($orderItem);
        }
        
        $this->recordDailyUsage($managedHmaService);
        $this->entityManager->flush();
        
        foreach ($this->cart as $item) {
            if ($item['type'] === 'product') {
                $product = $this->productRepository->find($item['id']);
                if ($product) {
                    $this->stockSyncService->syncProductStock($product);
                }
            } else {
                $recipe = $this->recipeRepository->find($item['id']);
                if ($recipe) {
                    foreach ($recipe->getRecipeItems() as $recipeItem) {
                        $product = $recipeItem->getProduct();
                        if ($product) {
                            $this->stockSyncService->syncProductStock($product);
                        }
                    }
                }
            }
        }
        
        $this->clearCart();
        
        return $order;
    }
    
    /**
     * Vérifie la limite quotidienne de ventes
     */
    private function checkDailyLimit(HmaService $hmaService): array
    {
        $plan = $hmaService->getCurrentPlan();
        $limits = HmaService::PLAN_LIMITS[$plan] ?? HmaService::PLAN_LIMITS[HmaService::PLAN_FREEMIUM];
        
        $maxOrdersPerDay = $limits['max_orders_per_day'] ?? PHP_INT_MAX;
        $isUnlimited = $maxOrdersPerDay === PHP_INT_MAX;
        
        if ($isUnlimited) {
            return [
                'can_sell' => true,
                'limit' => 'Illimité',
                'used' => 0,
                'remaining' => PHP_INT_MAX
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
        
        return [
            'can_sell' => $ordersToday < $maxOrdersPerDay,
            'limit' => $maxOrdersPerDay,
            'used' => $ordersToday,
            'remaining' => max(0, $maxOrdersPerDay - $ordersToday)
        ];
    }
    
    /**
     * Traite un article de type produit
     * ✅ CORRECTION : Ajout de la promotion appliquée
     */
    private function processProductItem(Order $order, array $item, User $user): OrderItem
    {
        $product = $this->productRepository->find($item['id']);
        if (!$product) {
            throw new \Exception(sprintf('Produit non trouvé: %s', $item['name']));
        }
        
        $unitPrice = (float) $item['unit_price'];
        $totalPrice = (float) $item['total_price'];
        $quantity = (int) $item['quantity'];
        
        $usedBatches = $this->stockDeductionService->deductProductStock(
            $product,
            $quantity,
            $order,
            $user,
            $order->getId()
        );
        
        $totalCost = array_sum(array_map(fn($batch) => $batch['total_price'], $usedBatches));
        $averageCost = $quantity > 0 ? $totalCost / $quantity : 0;
        
        $orderItem = new OrderItem();
        $orderItem->setProductName($product->getName());
        $orderItem->setUnitPrice((string) $unitPrice);
        $orderItem->setBatchPurchasePrice((string) $averageCost);
        $orderItem->setQuantity($quantity);
        $orderItem->setNotes($item['notes'] ?? null);
        $orderItem->setTotalPrice((string) $totalPrice);
        $orderItem->setCreatedAt(new \DateTime());
        $orderItem->setVente($order);
        $orderItem->setProductId($product->getId());
        
        if (!empty($usedBatches) && isset($usedBatches[0]['batch'])) {
            $orderItem->setStockBatchId($usedBatches[0]['batch']->getId());
        }
        
        // ✅ NOUVEAU : Ajout de la promotion appliquée (relation directe)
        if (!empty($item['has_promotion']) && !empty($item['promotion']) && isset($item['promotion']['id'])) {
            $promotion = $this->entityManager->getRepository(\App\Entity\Promotion::class)->find($item['promotion']['id']);
            if ($promotion) {
                $orderItem->setAppliedPromotion($promotion);
            }
            
            // Dénormalisation pour compatibilité
            $orderItem->setPromotionId($item['promotion']['id']);
            $orderItem->setPromotionName($item['promotion']['name']);
            $orderItem->setPromotionDiscountAmount((string) ($item['promotion']['discount_amount'] ?? 0));
            $orderItem->setPromotionDiscountPercentage((string) ($item['promotion']['discount_percentage'] ?? 0));
            $orderItem->setOriginalUnitPrice((string) $item['original_unit_price']);
        }
        
        return $orderItem;
    }
    
    /**
     * Traite un article de type recette
     * ✅ CORRECTION : Ajout de la promotion appliquée
     */
    private function processRecipeItem(Order $order, array $item, User $user): OrderItem
    {
        $recipe = $this->recipeRepository->find($item['id']);
        if (!$recipe) {
            throw new \Exception(sprintf('Recette non trouvée: %s', $item['name']));
        }
        
        $unitPrice = (float) $item['unit_price'];
        $totalPrice = (float) $item['total_price'];
        $quantity = (int) $item['quantity'];
        
        foreach ($recipe->getRecipeItems() as $recipeItem) {
            $product = $recipeItem->getProduct();
            $neededQuantity = $recipeItem->getQuantity() * $quantity;
            
            if ($recipeItem->getUnit() && $product->getUnit()) {
                $neededQuantity = $this->unitConverter->convert(
                    $neededQuantity,
                    $recipeItem->getUnit(),
                    $product->getUnit()
                );
            }
            
            $this->stockDeductionService->deductProductStock(
                $product,
                $neededQuantity,
                $order,
                $user,
                $order->getId()
            );
        }
        
        $orderItem = new OrderItem();
        $orderItem->setProductName($recipe->getName());
        $orderItem->setUnitPrice((string) $unitPrice);
        $orderItem->setBatchPurchasePrice('0');
        $orderItem->setQuantity($quantity);
        $orderItem->setNotes($item['notes'] ?? null);
        $orderItem->setTotalPrice((string) $totalPrice);
        $orderItem->setCreatedAt(new \DateTime());
        $orderItem->setRecipe($recipe);
        $orderItem->setVente($order);
        
        // ✅ NOUVEAU : Ajout de la promotion appliquée (relation directe)
        if (!empty($item['has_promotion']) && !empty($item['promotion']) && isset($item['promotion']['id'])) {
            $promotion = $this->entityManager->getRepository(\App\Entity\Promotion::class)->find($item['promotion']['id']);
            if ($promotion) {
                $orderItem->setAppliedPromotion($promotion);
            }
            
            // Dénormalisation pour compatibilité
            $orderItem->setPromotionId($item['promotion']['id']);
            $orderItem->setPromotionName($item['promotion']['name']);
            $orderItem->setPromotionDiscountAmount((string) ($item['promotion']['discount_amount'] ?? 0));
            $orderItem->setPromotionDiscountPercentage((string) ($item['promotion']['discount_percentage'] ?? 0));
            $orderItem->setOriginalUnitPrice((string) $item['original_unit_price']);
        }
        
        return $orderItem;
    }
    
    /**
     * Génère un numéro de commande unique
     */
    private function generateOrderNumber(HmaService $hmaService): string
    {
        $date = new \DateTime();
        return sprintf('VENTE-%s%s%s-%s', 
            $date->format('Y'), 
            $date->format('m'), 
            $date->format('d'), 
            substr(uniqid(), -6)
        );
    }
    
    /**
     * Enregistre l'utilisation quotidienne
     */
    private function recordDailyUsage(HmaService $hmaService): void
    {
        $today = new \DateTime();
        $today->setTime(0, 0, 0);
        
        $managedHmaService = $this->entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$managedHmaService) {
            return;
        }
        
        $dailyUsage = $this->entityManager->getRepository(DailyUsage::class)
            ->findOneBy([
                'hma_service' => $managedHmaService,
                'date' => $today
            ]);
        
        if (!$dailyUsage) {
            $dailyUsage = new DailyUsage();
            $dailyUsage->setHmaService($managedHmaService);
            $dailyUsage->setDate($today);
            $dailyUsage->setSalesCount(0);
            $dailyUsage->setCreatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($dailyUsage);
        }
        
        $dailyUsage->setSalesCount($dailyUsage->getSalesCount() + 1);
        $this->entityManager->persist($dailyUsage);
    }
    
    /**
     * Sauvegarde le panier en session
     */
    private function saveCart(): void
    {
        $this->session->set(self::CART_KEY, $this->cart);
    }
    
    /**
     * Vérifie si le panier est prêt pour la validation
     */
    public function isReadyForCheckout(): bool
    {
        return !empty($this->cart);
    }
}