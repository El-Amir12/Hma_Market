<?php
// src/Controller/Sale/BaseSaleController.php

namespace App\Controller\Sale;

use App\Entity\HmaService;
use App\Entity\Order;
use App\Entity\Product;
use App\Entity\Recipe;
use App\Entity\User;
use App\Service\Sale\SaleService;
use App\Service\Sale\PromotionCalculator;
use App\Service\UnitConverter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

abstract class BaseSaleController extends AbstractController
{
    protected const PAYMENT_METHODS = ['cash', 'card', 'mobile_money'];
    
    public function __construct(
        protected EntityManagerInterface $entityManager,
        protected SaleService $saleService,
        protected PromotionCalculator $promotionCalculator,
        protected UnitConverter $unitConverter
    ) {
    }
    
    protected function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof HmaService) return $user;
        if ($user instanceof User) return $user->getHmaService();
        return null;
    }
    
    protected function checkSaleAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && 
            !$this->isGranted('ROLE_MANAGER') && 
            !$this->isGranted('ROLE_STOCK_MANAGER') &&
            !$this->isGranted('ROLE_CASHIER')) {
            throw new AccessDeniedException('Accès refusé. Vous devez être caissier, responsable stock, manager ou admin.');
        }
    }
    
    #[Route('/sale/cart', name: 'sale_cart', methods: ['GET'])]
    public function cart(): Response
    {
        $this->checkSaleAccess();
        
        $cart = $this->saleService->getCart();
        $cartTotal = $this->saleService->getCartTotal();
        
        return $this->render('sale/cart.html.twig', [
            'cart' => $cart,
            'cart_total' => $cartTotal,
            'payment_methods' => self::PAYMENT_METHODS
        ]);
    }

    #[Route('/sale/cart-data', name: 'sale_cart_data', methods: ['GET'])]
    public function cartData(): JsonResponse
    {
        $this->checkSaleAccess();
        
        try {
            $cart = $this->saleService->getCart();
            $cartTotal = $this->saleService->getCartTotal();
            
            $items = array_map(function($item) {
                return [
                    'id' => $item['id'],
                    'type' => $item['type'],
                    'name' => $item['name'],
                    'barcode' => $item['barcode'] ?? null,
                    'unit' => $item['unit'] ?? null,
                    'unit_price' => (float) $item['unit_price'],
                    'total_price' => (float) $item['total_price'],
                    'quantity' => (int) $item['quantity'],
                    'notes' => $item['notes'] ?? null, // 🔥 Inclure les notes
                    'original_unit_price' => (float) ($item['original_unit_price'] ?? $item['unit_price']),
                    'has_promotion' => (bool) ($item['has_promotion'] ?? false),
                    'prescription_required' => (bool) ($item['prescription_required'] ?? false),
                    'promotion' => $item['promotion'] ?? null,
                    'image' => $item['image'] ?? null,
                ];
            }, $cart);
            
            return $this->json([
                'success' => true,
                'items' => $items,
                'total' => $cartTotal,
                'count' => count($items)
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => $e->getMessage(),
                'items' => [],
                'total' => 0,
                'count' => 0
            ]);
        }
    }
    
    #[Route('/sale/add-product/{id}', name: 'sale_add_product', methods: ['POST'])]
    public function addProduct(int $id, Request $request): JsonResponse
    {
        $this->checkSaleAccess();
        
        $quantity = (int) $request->request->get('quantity', 1);
        $notes = $request->request->get('notes'); // 🔥 Récupérer les notes
        
        try {
            $recipe = $this->entityManager->getRepository(Recipe::class)->find($id);
            if ($recipe) {
                // ✅ Vérifications avant ajout
                $this->validateRecipeBeforeAdd($recipe, $quantity);
                $cartItem = $this->saleService->addRecipeToCart($recipe, $quantity, $notes); // 🔥 Passer les notes
                return $this->json([
                    'success' => true,
                    'cart_item' => $cartItem,
                    'cart_total' => $this->saleService->getCartTotal(),
                    'cart_count' => count($this->saleService->getCart())
                ]);
            }
            
            $product = $this->entityManager->getRepository(Product::class)->find($id);
            if (!$product) {
                return $this->json(['error' => 'Produit ou plat non trouvé'], 404);
            }
            
            // ✅ Vérifications avant ajout
            $this->validateProductBeforeAdd($product, $quantity);
            $cartItem = $this->saleService->addProductToCart($product, $quantity, $notes); // 🔥 Passer les notes
            
            return $this->json([
                'success' => true,
                'cart_item' => $cartItem,
                'cart_total' => $this->saleService->getCartTotal(),
                'cart_count' => count($this->saleService->getCart())
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * ✅ Vérifications avant d'ajouter un produit au panier
     */
    private function validateProductBeforeAdd(Product $product, int $quantity): void
    {
        // Vérifier si le produit est actif
        if (!$product->isActive()) {
            throw new \Exception('Ce produit n\'est pas disponible à la vente.');
        }
        
        // Vérifier si l'abonnement est actif
        if (!$product->isSubscriptionActive()) {
            throw new \Exception('Ce produit n\'est pas disponible actuellement.');
        }
        
        // Vérifier le stock
        if ($product->getStockQuantity() < $quantity) {
            throw new \Exception(sprintf(
                'Stock insuffisant. Disponible: %d %s',
                $product->getStockQuantity(),
                $product->getUnit() ?? 'unités'
            ));
        }
        
        // Vérifier si le produit a une date d'expiration
        if ($product->hasExpiryDate() && $product->getExpiryDate() < new \DateTime()) {
            throw new \Exception('Ce produit a expiré et ne peut plus être vendu.');
        }
    }

    /**
     * ✅ Vérifications avant d'ajouter une recette (plat) au panier
     */
    private function validateRecipeBeforeAdd(Recipe $recipe, int $quantity): void
    {
        // Vérifier si la recette est active
        if (!$recipe->isActive()) {
            throw new \Exception('Ce plat n\'est pas disponible à la vente.');
        }
        
        // Vérifier si l'abonnement est actif
        if (!$recipe->isSubscriptionActive()) {
            throw new \Exception('Ce plat n\'est pas disponible actuellement.');
        }
        
        // Vérifier la disponibilité des ingrédients
        foreach ($recipe->getRecipeItems() as $item) {
            $product = $item->getProduct();
            $neededQuantity = $item->getQuantity() * $quantity;
            
            // Conversion d'unité si nécessaire
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

    #[Route('/sale/update-quantity/{type}/{id}', name: 'sale_update_quantity', methods: ['PUT'])]
    public function updateQuantity(string $type, int $id, Request $request): JsonResponse
    {
        $this->checkSaleAccess();
        
        $quantity = (int) $request->request->get('quantity', 0);
        
        if ($quantity === 0) {
            $content = json_decode($request->getContent(), true);
            $quantity = (int) ($content['quantity'] ?? 0);
        }
        
        if ($quantity <= 0) {
            return $this->json(['error' => 'La quantité doit être supérieure à 0'], 400);
        }
        
        try {
            // ✅ Vérifications supplémentaires avant mise à jour
            if ($type === 'product') {
                $product = $this->entityManager->getRepository(Product::class)->find($id);
                if ($product && $product->getStockQuantity() < $quantity) {
                    return $this->json(['error' => sprintf(
                        'Stock insuffisant. Disponible: %d %s',
                        $product->getStockQuantity(),
                        $product->getUnit() ?? 'unités'
                    )], 400);
                }
            } else {
                $recipe = $this->entityManager->getRepository(Recipe::class)->find($id);
                if ($recipe) {
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
                            return $this->json(['error' => sprintf(
                                'Stock insuffisant pour l\'ingrédient "%s"',
                                $product->getName()
                            )], 400);
                        }
                    }
                }
            }
            
            $cartItem = $this->saleService->updateCartItemQuantity($id, $type, $quantity);
            
            return $this->json([
                'success' => true,
                'cart_item' => $cartItem,
                'cart_total' => $this->saleService->getCartTotal()
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }
    
    #[Route('/sale/remove-item/{type}/{id}', name: 'sale_remove_item', methods: ['DELETE'])]
    public function removeItem(string $type, int $id): JsonResponse
    {
        $this->checkSaleAccess();
        
        try {
            $this->saleService->removeFromCart($id, $type);
            
            return $this->json([
                'success' => true,
                'cart_total' => $this->saleService->getCartTotal(),
                'cart_count' => count($this->saleService->getCart())
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }
    
    #[Route('/sale/clear-cart', name: 'sale_clear_cart', methods: ['POST'])]
    public function clearCart(): JsonResponse
    {
        $this->checkSaleAccess();
        
        $this->saleService->clearCart();
        
        return $this->json([
            'success' => true,
            'message' => 'Panier vidé'
        ]);
    }
    
    #[Route('/sale/checkout', name: 'sale_checkout', methods: ['POST'])]
    public function checkout(Request $request): JsonResponse
    {
        $this->checkSaleAccess();
        
        /** @var User $user */
        $user = $this->getUser();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            return $this->json(['error' => 'Aucune entreprise associée'], 400);
        }
        
        $customerName = $request->request->get('customer_name');
        $customerPhone = $request->request->get('customer_phone');
        $paymentMethod = $request->request->get('payment_method');
        $amountPaid = (float) $request->request->get('amount_paid', 0);
        $notes = $request->request->get('notes');
        
        if (!$customerPhone) {
            return $this->json(['error' => 'Le téléphone du client est requis'], 400);
        }
        
        if (!in_array($paymentMethod, self::PAYMENT_METHODS)) {
            return $this->json(['error' => 'Mode de paiement invalide'], 400);
        }
        
        $cartTotal = $this->saleService->getCartTotal();
        if ($amountPaid < $cartTotal) {
            return $this->json(['error' => sprintf('Montant insuffisant. Total: %s FCFA', number_format($cartTotal, 0, ',', ' '))], 400);
        }
        
        try {
            $order = $this->saleService->validateSale(
                $user,
                $hmaService,
                $customerName ?? '',
                $customerPhone,
                $paymentMethod,
                $amountPaid,
                $notes
            );
            
            return $this->json([
                'success' => true,
                'message' => 'Vente enregistrée avec succès',
                'order_id' => $order->getId(),
                'order_number' => $order->getOrderNumber(),
                'change_amount' => $order->getChangeAmount(),
                'redirect_url' => $this->generateUrl('sale_receipt', ['id' => $order->getId()])
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }
    
    #[Route('/sale/receipt/{id}', name: 'sale_receipt', methods: ['GET'])]
    public function receipt(Order $order): Response
    {
        $this->checkSaleAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $order->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé');
        }
        
        return $this->render('sale/receipt.html.twig', [
            'order' => $order,
            'company' => $hmaService
        ]);
    }

    #[Route('/sale/update-notes/{type}/{id}', name: 'sale_update_notes', methods: ['PUT'])]
    public function updateNotes(string $type, int $id, Request $request): JsonResponse
    {
        $this->checkSaleAccess();
        
        $content = json_decode($request->getContent(), true);
        $notes = $content['notes'] ?? null;
        
        try {
            $cartItem = $this->saleService->updateCartItemNotes($id, $type, $notes);
            
            return $this->json([
                'success' => true,
                'cart_item' => $cartItem
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }
        
    #[Route('/sale/search', name: 'sale_search', methods: ['GET'])]
    abstract public function search(Request $request): JsonResponse;
}