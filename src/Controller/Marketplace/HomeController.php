<?php
// src/Controller/Marketplace/HomeController.php

namespace App\Controller\Marketplace;

use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\Favorite;
use App\Entity\Cart;
use App\Entity\CartItem;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\FavoriteRepository;
use App\Repository\CartRepository;
use App\Repository\PromotionRepository;
use App\Service\Sale\SaleService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private SaleService $saleService
    ) {}

    #[Route('/marketplace', name: 'marketplace_home')]
    public function index(
        Request $request,
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        FavoriteRepository $favoriteRepository,
        CartRepository $cartRepository,
        PromotionRepository $promotionRepository
    ): Response {
        // Récupérer le Super Admin
        $superAdmin = $this->entityManager->createQueryBuilder()
            ->select('u')
            ->from(\App\Entity\User::class, 'u')
            ->andWhere('u.is_super_admin = true')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        // Récupérer l'entreprise du Super Admin
        $myCompany = null;
        if ($superAdmin) {
            $myCompany = $superAdmin->getHmaServiceId();
        }

        // Si pas d'entreprise, on affiche une page vide
        if (!$myCompany) {
            return $this->render('marketplace/index.html.twig', [
                'products' => [],
                'featuredProducts' => [],
                'categories' => [],
                'company' => null,
                'totalProducts' => 0,
                'totalCategories' => 0,
                'currentPage' => 1,
                'totalPages' => 1,
                'search' => null,
                'selectedCategory' => null,
                'selectedSort' => 'latest',
                'favoriteIds' => [],
                'favoritesCount' => 0,
                'cartItemsCount' => 0,
                'isCustomer' => false,
                'cartProductIds' => [],
            ]);
        }

        // Récupérer TOUTES les catégories du Super Admin
        $categories = $categoryRepository->createQueryBuilder('c')
            ->where('c.hma_service = :company')
            ->andWhere('c.is_active = true')
            ->andWhere('c.subscription_active = true')
            ->setParameter('company', $myCompany)
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();

        $totalCategories = count($categories);

        // Produits en vedette du Super Admin
        $featuredProducts = $productRepository->createQueryBuilder('p')
            ->where('p.hma_service = :company')
            ->andWhere('p.is_active = true')
            ->andWhere('p.subscription_active = true')
            ->setParameter('company', $myCompany)
            ->orderBy('p.created_at', 'DESC')
            ->setMaxResults(12)
            ->getQuery()
            ->getResult();

        // Ajouter le stock pour les produits en vedette
        foreach ($featuredProducts as $product) {
            $product->currentStock = $this->saleService->getProductTotalStock($product);
            $product->promotionInfo = $this->getBestPromotionForProduct($product, $promotionRepository);
            $product->averageRating = $product->getAverageRating();
            $product->ratingsCount = $product->getRatingsCount();
        }

        // Paramètres de requête
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 20;
        $offset = ($page - 1) * $limit;
        $search = $request->query->get('search');
        $categoryId = $request->query->get('category');
        $sort = $request->query->get('sort', 'latest');

        // Requête produits du Super Admin
        $queryBuilder = $productRepository->createQueryBuilder('p')
            ->where('p.hma_service = :company')
            ->andWhere('p.is_active = true')
            ->andWhere('p.subscription_active = true')
            ->setParameter('company', $myCompany);

        if ($search) {
            $queryBuilder->andWhere('p.name LIKE :search OR p.description LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($categoryId) {
            $queryBuilder->andWhere('p.category = :categoryId')
                ->setParameter('categoryId', $categoryId);
        }

        switch ($sort) {
            case 'price_asc':
                $queryBuilder->orderBy('p.sale_price', 'ASC');
                break;
            case 'price_desc':
                $queryBuilder->orderBy('p.sale_price', 'DESC');
                break;
            case 'name':
                $queryBuilder->orderBy('p.name', 'ASC');
                break;
            default:
                $queryBuilder->orderBy('p.created_at', 'DESC');
        }

        // Compter le total des produits
        $totalProducts = (int) $queryBuilder->select('COUNT(p.id)')
            ->getQuery()
            ->getSingleScalarResult();

        // Récupérer les produits
        $products = $queryBuilder->select('p')
            ->addSelect('c')
            ->leftJoin('p.category', 'c')
            ->leftJoin('p.promotionProducts', 'pp')
            ->leftJoin('pp.promotion', 'promo')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->getQuery()
            ->getResult();

        // Ajouter le stock pour chaque produit
        foreach ($products as $product) {
            $product->currentStock = $this->saleService->getProductTotalStock($product);
            $product->promotionInfo = $this->getBestPromotionForProduct($product, $promotionRepository);
            $product->averageRating = $product->getAverageRating();
            $product->ratingsCount = $product->getRatingsCount();
        }

        $totalPages = ceil($totalProducts / $limit);

        // Vérifier si l'utilisateur est un Customer
        $user = $this->getUser();
        $isCustomer = $user && $this->isCustomer($user);
        
        $favoriteIds = [];
        $favoritesCount = 0;
        $cartItemsCount = 0;
        $cartProductIds = [];

        // Si Customer, récupérer ses favoris, son panier et les produits dans le panier
        if ($isCustomer) {
            $favoriteIds = $favoriteRepository->findFavoriteProductIds($user);
            $favoritesCount = $favoriteRepository->countByCustomer($user);
            $cartItemsCount = $cartRepository->getCartItemsCount($user);
            
            // Récupérer les IDs des produits dans le panier
            $cart = $cartRepository->getCartForCustomer($user);
            if ($cart) {
                foreach ($cart->getItems() as $item) {
                    $cartProductIds[] = $item->getProduct()->getId();
                }
            }
        }

        return $this->render('marketplace/index.html.twig', [
            'products' => $products,
            'featuredProducts' => $featuredProducts,
            'categories' => $categories,
            'company' => $myCompany,
            'totalProducts' => $totalProducts,
            'totalCategories' => $totalCategories,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'selectedCategory' => $categoryId,
            'selectedSort' => $sort,
            'favoriteIds' => $favoriteIds,
            'favoritesCount' => $favoritesCount,
            'cartItemsCount' => $cartItemsCount,
            'isCustomer' => $isCustomer,
            'cartProductIds' => $cartProductIds,
        ]);
    }

    /**
     * Récupère la meilleure promotion active pour un produit
     */
    private function getBestPromotionForProduct(Product $product, PromotionRepository $promotionRepository): ?array
    {
        $promotionProducts = $product->getPromotionProducts();
        
        if ($promotionProducts->isEmpty()) {
            return null;
        }

        $bestPromotion = null;
        $bestDiscount = 0;
        $originalPrice = (float) ($product->getSalePrice() ?: $product->getPurchasePrice());

        foreach ($promotionProducts as $promotionProduct) {
            $promotion = $promotionProduct->getPromotion();
            
            if (!$promotion || !$promotion->isCurrentlyActive()) {
                continue;
            }

            $typePromotion = $promotion->getTypePromotion();
            if (!$typePromotion) {
                continue;
            }

            $typeName = strtolower(trim($typePromotion->getName()));
            $value = (float) $promotion->getValue();
            $discount = 0;

            if ($typeName === 'pourcentage' || $typeName === 'percentage' || $typeName === '%') {
                $discount = $originalPrice * ($value / 100);
            } elseif ($typeName === 'montant fixe' || $typeName === 'fixed' || $typeName === 'fixe') {
                $discount = min($value, $originalPrice);
            }

            if ($discount > $bestDiscount) {
                $bestDiscount = $discount;
                $bestPromotion = $promotion;
            }
        }

        if (!$bestPromotion) {
            return null;
        }

        $finalPrice = $originalPrice - $bestDiscount;

        return [
            'promotion' => $bestPromotion,
            'original_price' => $originalPrice,
            'final_price' => max(0, $finalPrice),
            'discount_amount' => $bestDiscount,
            'discount_percentage' => $originalPrice > 0 ? round(($bestDiscount / $originalPrice) * 100, 1) : 0,
            'has_promotion' => true,
            'formatted_discount' => $bestPromotion->getFormattedDiscount(),
        ];
    }

    /**
     * Vérifie si l'utilisateur est un Customer
     */
    private function isCustomer($user): bool
    {
        return $user instanceof \App\Entity\Customer;
    }

    /**
     * Route pour les favoris
     */
    #[Route('/marketplace/favorite/toggle', name: 'marketplace_favorite_toggle', methods: ['POST'])]
    public function toggleFavorite(Request $request, FavoriteRepository $favoriteRepository): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user || !$this->isCustomer($user)) {
            return $this->json([
                'success' => false,
                'error' => 'Vous devez être connecté en tant que client pour ajouter des favoris'
            ], 401);
        }

        $data = json_decode($request->getContent(), true);
        $productId = $data['productId'] ?? null;

        if (!$productId) {
            return $this->json([
                'success' => false,
                'error' => 'ID produit manquant'
            ], 400);
        }

        $product = $this->entityManager->getRepository(Product::class)->find($productId);
        if (!$product) {
            return $this->json([
                'success' => false,
                'error' => 'Produit introuvable'
            ], 404);
        }

        $existing = $favoriteRepository->findOneBy([
            'customer' => $user,
            'product' => $product
        ]);

        if ($existing) {
            $this->entityManager->remove($existing);
            $this->entityManager->flush();
            $isFavorite = false;
            $message = 'Retiré des favoris';
        } else {
            $favorite = new Favorite();
            $favorite->setCustomer($user)
                     ->setProduct($product)
                     ->setCreatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($favorite);
            $this->entityManager->flush();
            $isFavorite = true;
            $message = 'Ajouté aux favoris';
        }

        $count = $favoriteRepository->countByCustomer($user);

        return $this->json([
            'success' => true,
            'isFavorite' => $isFavorite,
            'count' => $count,
            'message' => $message
        ]);
    }

    #[Route('/marketplace/favorites/count', name: 'marketplace_favorites_count', methods: ['GET'])]
    public function getFavoritesCount(FavoriteRepository $favoriteRepository): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user || !$this->isCustomer($user)) {
            return $this->json(['count' => 0]);
        }

        return $this->json(['count' => $favoriteRepository->countByCustomer($user)]);
    }

    #[Route('/marketplace/cart/count', name: 'marketplace_cart_count', methods: ['GET'])]
    public function getCartCount(CartRepository $cartRepository): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user || !$this->isCustomer($user)) {
            return $this->json(['count' => 0]);
        }

        return $this->json(['count' => $cartRepository->getCartItemsCount($user)]);
    }

    #[Route('/marketplace/cart/items', name: 'marketplace_cart_items', methods: ['GET'])]
    public function getCartItems(CartRepository $cartRepository): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user || !$this->isCustomer($user)) {
            return $this->json(['items' => []]);
        }

        $cart = $cartRepository->getCartForCustomer($user);
        if (!$cart) {
            return $this->json(['items' => []]);
        }

        $items = [];
        foreach ($cart->getItems() as $item) {
            $items[] = $item->getProduct()->getId();
        }

        return $this->json(['items' => $items]);
    }

    #[Route('/marketplace/cart/add', name: 'marketplace_cart_add', methods: ['POST'])]
    public function addToCart(Request $request, CartRepository $cartRepository): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user || !$this->isCustomer($user)) {
            return $this->json([
                'success' => false,
                'error' => 'Connectez-vous en tant que client pour ajouter au panier'
            ], 401);
        }

        $data = json_decode($request->getContent(), true);
        $productId = $data['productId'] ?? null;
        $quantity = max(1, $data['quantity'] ?? 1);

        if (!$productId) {
            return $this->json([
                'success' => false,
                'error' => 'ID produit manquant'
            ], 400);
        }

        $product = $this->entityManager->getRepository(Product::class)->find($productId);
        if (!$product) {
            return $this->json([
                'success' => false,
                'error' => 'Produit introuvable'
            ], 404);
        }

        // Vérifier si le produit est déjà dans le panier
        $cart = $cartRepository->getCartForCustomer($user);
        if ($cart) {
            foreach ($cart->getItems() as $item) {
                if ($item->getProduct()->getId() === $product->getId()) {
                    return $this->json([
                        'success' => false,
                        'error' => 'Ce produit est déjà dans votre panier'
                    ], 400);
                }
            }
        }

        $currentStock = $this->saleService->getProductTotalStock($product);
        if ($currentStock <= 0) {
            return $this->json([
                'success' => false,
                'error' => 'Produit en rupture de stock'
            ], 400);
        }

        if ($quantity > $currentStock) {
            return $this->json([
                'success' => false,
                'error' => 'Stock insuffisant. Seulement ' . $currentStock . ' unités disponibles.'
            ], 400);
        }

        if (!$cart) {
            $cart = new Cart();
            $cart->setCustomer($user);
            $this->entityManager->persist($cart);
            $this->entityManager->flush();
        }

        $cartItem = new CartItem();
        $cartItem->setCart($cart)
                 ->setProduct($product)
                 ->setQuantity($quantity);
        $this->entityManager->persist($cartItem);
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'cartCount' => $cartRepository->getCartItemsCount($user),
            'message' => 'Ajouté au panier'
        ]);
    }
    
    #[Route('/marketplace/cart/status', name: 'marketplace_cart_status', methods: ['GET'])]
    public function getCartStatus(CartRepository $cartRepository): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user || !$this->isCustomer($user)) {
            return $this->json([
                'items_count' => 0,
                'product_ids' => []
            ]);
        }

        $cart = $cartRepository->getCartForCustomer($user);
        $productIds = [];
        $itemsCount = 0;
        
        if ($cart) {
            $itemsCount = $cart->getItemsCount();
            foreach ($cart->getItems() as $item) {
                $productIds[] = $item->getProduct()->getId();
            }
        }

        return $this->json([
            'items_count' => $itemsCount,
            'product_ids' => $productIds
        ]);
    }
}