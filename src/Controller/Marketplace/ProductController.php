<?php
// src/Controller/Marketplace/ProductController.php

namespace App\Controller\Marketplace;

use App\Entity\Product;
use App\Entity\Rating;
use App\Entity\OrderItem;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\FavoriteRepository;
use App\Repository\CartRepository;
use App\Repository\RatingRepository;
use App\Repository\OrderItemRepository;
use App\Service\Sale\SaleService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private SaleService $saleService
    ) {}

    #[Route('/marketplace/products', name: 'marketplace_products', methods: ['GET'])]
    public function list(
        Request $request,
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        FavoriteRepository $favoriteRepository,
        CartRepository $cartRepository
    ): Response {
        $superAdmin = $this->entityManager->createQueryBuilder()
            ->select('u')
            ->from(\App\Entity\User::class, 'u')
            ->andWhere('u.is_super_admin = true')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        $myCompany = $superAdmin ? $superAdmin->getHmaServiceId() : null;

        if (!$myCompany) {
            return $this->render('marketplace/products/products.html.twig', [
                'products' => [],
                'categories' => [],
                'totalProducts' => 0,
                'currentPage' => 1,
                'totalPages' => 1,
                'search' => null,
                'selectedCategory' => null,
                'selectedSort' => 'latest',
                'favoriteIds' => [],
                'cartProductIds' => [],
                'isCustomer' => false,
                'favoritesCount' => 0,
                'cartItemsCount' => 0,
            ]);
        }

        $categories = $categoryRepository->createQueryBuilder('c')
            ->where('c.hma_service = :company')
            ->andWhere('c.is_active = true')
            ->andWhere('c.subscription_active = true')
            ->setParameter('company', $myCompany)
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();

        $page = max(1, $request->query->getInt('page', 1));
        $limit = 20;
        $offset = ($page - 1) * $limit;
        $search = $request->query->get('search');
        $categoryId = $request->query->get('category');
        $sort = $request->query->get('sort', 'latest');

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
            case 'price_asc': $queryBuilder->orderBy('p.sale_price', 'ASC'); break;
            case 'price_desc': $queryBuilder->orderBy('p.sale_price', 'DESC'); break;
            case 'name': $queryBuilder->orderBy('p.name', 'ASC'); break;
            default: $queryBuilder->orderBy('p.created_at', 'DESC');
        }

        $totalProducts = (int) $queryBuilder->select('COUNT(p.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $products = $queryBuilder->select('p')
            ->addSelect('c')
            ->leftJoin('p.category', 'c')
            ->leftJoin('p.promotionProducts', 'pp')
            ->leftJoin('pp.promotion', 'promo')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->getQuery()
            ->getResult();

        foreach ($products as $product) {
            $product->currentStock = $this->saleService->getProductTotalStock($product);
            $product->averageRating = $product->getAverageRating();
            $product->ratingsCount = $product->getRatingsCount();
        }

        $totalPages = ceil($totalProducts / $limit);
        $user = $this->getUser();
        $isCustomer = $user && $this->isCustomer($user);
        
        $favoriteIds = [];
        $favoritesCount = 0;
        $cartItemsCount = 0;
        $cartProductIds = [];

        if ($isCustomer) {
            $favoriteIds = $favoriteRepository->findFavoriteProductIds($user);
            $favoritesCount = $favoriteRepository->countByCustomer($user);
            $cartItemsCount = $cartRepository->getCartItemsCount($user);
            
            $cart = $cartRepository->getCartForCustomer($user);
            if ($cart) {
                foreach ($cart->getItems() as $item) {
                    $cartProductIds[] = $item->getProduct()->getId();
                }
            }
        }

        return $this->render('marketplace/products/products.html.twig', [
            'products' => $products,
            'categories' => $categories,
            'company' => $myCompany,
            'totalProducts' => $totalProducts,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'selectedCategory' => $categoryId,
            'selectedSort' => $sort,
            'favoriteIds' => $favoriteIds,
            'cartProductIds' => $cartProductIds,
            'isCustomer' => $isCustomer,
            'favoritesCount' => $favoritesCount,
            'cartItemsCount' => $cartItemsCount,
        ]);
    }

    #[Route('/marketplace/product/{id}', name: 'marketplace_product_show', methods: ['GET'])]
    public function show(
        int $id,
        Request $request,
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        FavoriteRepository $favoriteRepository,
        CartRepository $cartRepository,
        RatingRepository $ratingRepository,
        OrderItemRepository $orderItemRepository
    ): Response {
        $product = $productRepository->find($id);
        if (!$product || !$product->isActive() || !$product->isSubscriptionActive()) {
            throw $this->createNotFoundException('Produit non disponible');
        }

        $currentStock = $this->saleService->getProductTotalStock($product);
        $product->currentStock = $currentStock;

        $averageRating = $product->getAverageRating();
        $ratingsCount = $product->getRatingsCount();
        $ratingDistribution = $product->getRatingDistribution();
        $promotionInfo = $this->getBestPromotionForProduct($product);

        $user = $this->getUser();
        $isCustomer = $user && $this->isCustomer($user);
        
        $hasPurchased = false;
        $userRating = null;
        $isFavorite = false;
        $isInCart = false;
        $favoritesCount = 0;
        $cartItemsCount = 0;
        $cartProductIds = [];
        $favoriteIds = [];

        if ($isCustomer) {
            $hasPurchased = $this->hasUserPurchasedProduct($user, $product, $orderItemRepository);
            $userRating = $ratingRepository->findOneBy([
                'customer' => $user,
                'product' => $product
            ]);
            $isFavorite = $favoriteRepository->findOneBy(['customer' => $user, 'product' => $product]) !== null;
            $favoritesCount = $favoriteRepository->countByCustomer($user);
            $cartItemsCount = $cartRepository->getCartItemsCount($user);
            $favoriteIds = $favoriteRepository->findFavoriteProductIds($user);
            
            $cart = $cartRepository->getCartForCustomer($user);
            if ($cart) {
                foreach ($cart->getItems() as $item) {
                    $cartProductIds[] = $item->getProduct()->getId();
                    if ($item->getProduct()->getId() === $product->getId()) {
                        $isInCart = true;
                    }
                }
            }
        }

        // Produits similaires
        $similarProducts = [];
        $category = $product->getCategory();
        
        if ($category) {
            $categoryIds = $this->getCategoryAndSubcategoryIds($category);
            
            $similarProducts = $productRepository->createQueryBuilder('p')
                ->where('p.category IN (:categoryIds)')
                ->andWhere('p.id != :productId')
                ->andWhere('p.is_active = true')
                ->andWhere('p.subscription_active = true')
                ->andWhere('p.hma_service = :company')
                ->setParameter('categoryIds', $categoryIds)
                ->setParameter('productId', $product->getId())
                ->setParameter('company', $product->getHmaService())
                ->orderBy('p.created_at', 'DESC')
                ->setMaxResults(30)
                ->getQuery()
                ->getResult();
            
            shuffle($similarProducts);
            $similarProducts = array_slice($similarProducts, 0, 12);
        }

        foreach ($similarProducts as $similarProduct) {
            $similarProduct->currentStock = $this->saleService->getProductTotalStock($similarProduct);
        }

        $page = max(1, $request->query->getInt('page', 1));
        $limit = 6;
        $offset = ($page - 1) * $limit;
        $totalSimilar = count($similarProducts);
        $totalPages = ceil($totalSimilar / $limit);
        $pagedSimilar = array_slice($similarProducts, $offset, $limit);

        return $this->render('marketplace/products/product_show.html.twig', [
            'product' => $product,
            'currentStock' => $currentStock,
            'averageRating' => $averageRating,
            'ratingsCount' => $ratingsCount,
            'ratingDistribution' => $ratingDistribution,
            'promotionInfo' => $promotionInfo,
            'hasPurchased' => $hasPurchased,
            'userRating' => $userRating,
            'isFavorite' => $isFavorite,
            'isInCart' => $isInCart,
            'favoritesCount' => $favoritesCount,
            'cartItemsCount' => $cartItemsCount,
            'cartProductIds' => $cartProductIds,
            'favoriteIds' => $favoriteIds,
            'similarProducts' => $pagedSimilar,
            'totalSimilar' => $totalSimilar,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'isCustomer' => $isCustomer,
        ]);
    }

    #[Route('/marketplace/product/{id}/rate', name: 'marketplace_product_rate', methods: ['POST'])]
    public function rateProduct(
        int $id,
        Request $request,
        RatingRepository $ratingRepository,
        OrderItemRepository $orderItemRepository
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user || !$this->isCustomer($user)) {
            return $this->json([
                'success' => false,
                'error' => 'Vous devez être connecté pour noter un produit'
            ], 401);
        }

        $product = $this->entityManager->getRepository(Product::class)->find($id);
        if (!$product) {
            return $this->json([
                'success' => false,
                'error' => 'Produit non trouvé'
            ], 404);
        }

        if (!$this->hasUserPurchasedProduct($user, $product, $orderItemRepository)) {
            return $this->json([
                'success' => false,
                'error' => 'Vous devez avoir acheté ce produit pour le noter'
            ], 403);
        }

        $data = json_decode($request->getContent(), true);
        $score = $data['score'] ?? null;
        $comment = $data['comment'] ?? null;

        if (!$score || $score < 1 || $score > 5) {
            return $this->json([
                'success' => false,
                'error' => 'Note invalide (1 à 5)'
            ], 400);
        }

        $existingRating = $ratingRepository->findOneBy([
            'customer' => $user,
            'product' => $product
        ]);

        if ($existingRating) {
            $existingRating->setScore($score)
                          ->setComment($comment)
                          ->setUpdatedAt(new \DateTimeImmutable());
        } else {
            $rating = new Rating();
            $rating->setCustomer($user)
                   ->setProduct($product)
                   ->setScore($score)
                   ->setComment($comment)
                   ->setCreatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($rating);
        }

        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => 'Note enregistrée avec succès',
            'average' => $product->getAverageRating(),
            'count' => $product->getRatingsCount()
        ]);
    }

    #[Route('/marketplace/product/{id}/ratings', name: 'marketplace_product_ratings', methods: ['GET'])]
    public function getRatings(
        int $id,
        Request $request,
        RatingRepository $ratingRepository,
        OrderItemRepository $orderItemRepository
    ): Response {
        $product = $this->entityManager->getRepository(Product::class)->find($id);
        if (!$product) {
            throw $this->createNotFoundException('Produit non trouvé');
        }

        $page = max(1, $request->query->getInt('page', 1));
        $limit = 10;
        $offset = ($page - 1) * $limit;

        // ✅ Récupérer les avis avec les informations du client
        $ratings = $ratingRepository->createQueryBuilder('r')
            ->leftJoin('r.customer', 'c')
            ->addSelect('c')
            ->where('r.product = :product')
            ->setParameter('product', $product)
            ->orderBy('r.created_at', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->getQuery()
            ->getResult();

        $totalRatings = $ratingRepository->count(['product' => $product]);
        $totalPages = ceil($totalRatings / $limit);
        
        $ratingDistribution = $product->getRatingDistribution();
        $averageRating = $product->getAverageRating();
        $maxCount = !empty($ratingDistribution) ? max($ratingDistribution) : 1;

        $user = $this->getUser();
        $hasPurchased = false;
        $userRating = null;
        
        if ($user && $this->isCustomer($user)) {
            $hasPurchased = $this->hasUserPurchasedProduct($user, $product, $orderItemRepository);
            $userRating = $ratingRepository->findOneBy([
                'customer' => $user,
                'product' => $product
            ]);
        }

        return $this->render('marketplace/products/product_ratings.html.twig', [
            'product' => $product,
            'ratings' => $ratings,
            'totalRatings' => $totalRatings,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'averageRating' => $averageRating,
            'ratingDistribution' => $ratingDistribution,
            'maxCount' => $maxCount,
            'hasPurchased' => $hasPurchased,
            'userRating' => $userRating,
        ]);
    }

    // ==================== MÉTHODES PRIVÉES ====================

    /**
     * Vérifie si un utilisateur a acheté un produit
     */
    private function hasUserPurchasedProduct($user, Product $product, OrderItemRepository $orderItemRepository): bool
    {
        $customerPhone = $user->getPhone();
        if (!$customerPhone) {
            return false;
        }

        $orderItems = $orderItemRepository->createQueryBuilder('oi')
            ->join('oi.vente', 'o')
            ->where('o.customer_phone = :phone')
            ->andWhere('oi.product_id = :productId')
            ->andWhere('o.status IN (:statuses)')
            ->setParameter('phone', $customerPhone)
            ->setParameter('productId', $product->getId())
            ->setParameter('statuses', ['completed', 'delivered', 'paid'])
            ->getQuery()
            ->getResult();

        return count($orderItems) > 0;
    }

    /**
     * Récupère la meilleure promotion pour un produit
     */
    private function getBestPromotionForProduct(Product $product): ?array
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
     * Récupère les IDs d'une catégorie et de ses sous-catégories
     */
    private function getCategoryAndSubcategoryIds($category): array
    {
        $ids = [$category->getId()];
        foreach ($category->getChildren() as $child) {
            $ids = array_merge($ids, $this->getCategoryAndSubcategoryIds($child));
        }
        return $ids;
    }
}