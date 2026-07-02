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
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HomeController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/marketplace', name: 'marketplace_home')]
    public function index(
        Request $request,
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        FavoriteRepository $favoriteRepository,
        CartRepository $cartRepository
    ): Response {
        // Initialiser les variables
        $products = [];
        $categories = [];
        $featuredProducts = [];
        $totalProducts = 0;
        $page = 1;
        $totalPages = 1;
        $search = null;
        $categoryId = null;
        $sort = 'latest';
        $favoritesCount = 0;
        $cartItemsCount = 0;
        $favoriteIds = [];

        // Récupérer l'entreprise du Super Admin
        $myCompany = $this->entityManager->createQueryBuilder()
            ->select('h')
            ->from(HmaService::class, 'h')
            ->join('h.users', 'u')
            ->andWhere('u.is_super_admin = true')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if ($myCompany) {
            // Récupérer les catégories
            $categories = $categoryRepository->createQueryBuilder('c')
                ->where('c.hma_service = :company')
                ->andWhere('c.is_public = true')
                ->andWhere('c.is_active = true')
                ->andWhere('c.subscription_active = true')
                ->setParameter('company', $myCompany)
                ->orderBy('c.name', 'ASC')
                ->getQuery()
                ->getResult();

            // Produits en vedette
            $featuredProducts = $productRepository->createQueryBuilder('p')
                ->where('p.hma_service = :company')
                ->andWhere('p.is_public = true')
                ->andWhere('p.is_active = true')
                ->andWhere('p.subscription_active = true')
                ->setParameter('company', $myCompany)
                ->orderBy('p.created_at', 'DESC')
                ->setMaxResults(12)
                ->getQuery()
                ->getResult();

            // Paramètres de requête
            $page = max(1, $request->query->getInt('page', 1));
            $limit = 20;
            $offset = ($page - 1) * $limit;
            $search = $request->query->get('search');
            $categoryId = $request->query->get('category');
            $sort = $request->query->get('sort', 'latest');

            $queryBuilder = $productRepository->createQueryBuilder('p')
                ->where('p.hma_service = :company')
                ->andWhere('p.is_public = true')
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

            $totalProducts = $queryBuilder->select('COUNT(p.id)')
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

            $totalPages = ceil($totalProducts / $limit);

            // ✅ Vérification CORRECTE pour les Customers
            $user = $this->getUser();
            if ($user && $this->isCustomer($user)) {
                $favoriteIds = $favoriteRepository->findFavoriteProductIds($user);
                $favoritesCount = $favoriteRepository->countByCustomer($user);
                $cartItemsCount = $cartRepository->getCartItemsCount($user);
            }
        }

        return $this->render('marketplace/index.html.twig', [
            'products' => $products,
            'featuredProducts' => $featuredProducts,
            'categories' => $categories,
            'company' => $myCompany,
            'totalProducts' => $totalProducts,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'selectedCategory' => $categoryId,
            'selectedSort' => $sort,
            'favoriteIds' => $favoriteIds,
            'favoritesCount' => $favoritesCount,
            'cartItemsCount' => $cartItemsCount,
        ]);
    }

    /**
     * ✅ Vérifie si l'utilisateur est un Customer
     */
    private function isCustomer($user): bool
    {
        return $user instanceof \App\Entity\Customer;
    }

    /**
     * ✅ Route pour les favoris
     */
    #[Route('/marketplace/favorite/toggle', name: 'marketplace_favorite_toggle', methods: ['POST'])]
    #[IsGranted('ROLE_CUSTOMER')]
    public function toggleFavorite(Request $request, FavoriteRepository $favoriteRepository): JsonResponse
    {
        $user = $this->getUser();
        
        // ✅ Vérification que c'est bien un Customer
        if (!$user || !$this->isCustomer($user)) {
            return $this->json([
                'success' => false,
                'error' => 'Vous devez être connecté en tant que client'
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

        // ✅ RECHERCHE EXISTANT
        $existing = $favoriteRepository->findOneBy([
            'customer' => $user,
            'product' => $product
        ]);

        if ($existing) {
            // ❌ Décoche : on supprime
            $this->entityManager->remove($existing);
            $this->entityManager->flush();
            $isFavorite = false;
        } else {
            // ❤️ Coche : on ajoute
            $favorite = new Favorite();
            $favorite->setCustomer($user)
                     ->setProduct($product)
                     ->setCreatedAt(new \DateTimeImmutable());
            $this->entityManager->persist($favorite);
            $this->entityManager->flush();
            $isFavorite = true;
        }

        $count = $favoriteRepository->countByCustomer($user);

        return $this->json([
            'success' => true,
            'isFavorite' => $isFavorite,
            'count' => $count
        ]);
    }

    #[Route('/marketplace/favorites/count', name: 'marketplace_favorites_count', methods: ['GET'])]
    #[IsGranted('ROLE_CUSTOMER')]
    public function getFavoritesCount(FavoriteRepository $favoriteRepository): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user || !$this->isCustomer($user)) {
            return $this->json(['count' => 0]);
        }

        return $this->json(['count' => $favoriteRepository->countByCustomer($user)]);
    }

    #[Route('/marketplace/cart/count', name: 'marketplace_cart_count', methods: ['GET'])]
    #[IsGranted('ROLE_CUSTOMER')]
    public function getCartCount(CartRepository $cartRepository): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user || !$this->isCustomer($user)) {
            return $this->json(['count' => 0]);
        }

        return $this->json(['count' => $cartRepository->getCartItemsCount($user)]);
    }

    #[Route('/marketplace/cart/add', name: 'marketplace_cart_add', methods: ['POST'])]
    #[IsGranted('ROLE_CUSTOMER')]
    public function addToCart(Request $request, CartRepository $cartRepository): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user || !$this->isCustomer($user)) {
            return $this->json([
                'success' => false,
                'error' => 'Connectez-vous pour ajouter au panier'
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

        $currentStock = $product->getCurrentStock();
        if ($currentStock <= 0) {
            return $this->json([
                'success' => false,
                'error' => 'Produit en rupture de stock'
            ], 400);
        }

        $cart = $cartRepository->getCartForCustomer($user);
        if (!$cart) {
            $cart = new Cart();
            $cart->setCustomer($user);
            $this->entityManager->persist($cart);
            $this->entityManager->flush();
        }

        $existingItem = null;
        foreach ($cart->getItems() as $item) {
            if ($item->getProduct()->getId() === $product->getId()) {
                $existingItem = $item;
                break;
            }
        }

        if ($existingItem) {
            $newQuantity = $existingItem->getQuantity() + $quantity;
            if ($newQuantity > $currentStock) {
                return $this->json([
                    'success' => false,
                    'error' => 'Stock insuffisant'
                ], 400);
            }
            $existingItem->setQuantity($newQuantity);
        } else {
            if ($quantity > $currentStock) {
                return $this->json([
                    'success' => false,
                    'error' => 'Stock insuffisant'
                ], 400);
            }
            $cartItem = new CartItem();
            $cartItem->setCart($cart)
                     ->setProduct($product)
                     ->setQuantity($quantity);
            $this->entityManager->persist($cartItem);
        }

        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'cartCount' => $cartRepository->getCartItemsCount($user),
            'message' => 'Ajouté au panier'
        ]);
    }
}