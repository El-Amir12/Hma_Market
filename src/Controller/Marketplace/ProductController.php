<?php
// src/Controller/Marketplace/ProductController.php

namespace App\Controller\Marketplace;

use App\Entity\Product;
use App\Entity\HmaService;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\FavoriteRepository;
use App\Repository\CartRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/marketplace/products')]
class ProductController extends AbstractController
{
    private function getMyCompany(EntityManagerInterface $entityManager): ?HmaService
    {
        return $entityManager->createQueryBuilder()
            ->select('h')
            ->from(HmaService::class, 'h')
            ->join('h.users', 'u')
            ->where('u.is_super_admin = true')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    #[Route('/', name: 'marketplace_products')]
    public function index(
        Request $request,
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        EntityManagerInterface $entityManager,
        FavoriteRepository $favoriteRepository,
        CartRepository $cartRepository
    ): Response {
        $myCompany = $this->getMyCompany($entityManager);
        $search = $request->query->get('search');
        $categoryId = $request->query->get('category');

        $categories = $categoryRepository->createQueryBuilder('c')
            ->where('c.hma_service = :company')
            ->andWhere('c.is_public = true')
            ->andWhere('c.is_active = true')
            ->setParameter('company', $myCompany)
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();

        $qb = $productRepository->createQueryBuilder('p')
            ->where('p.hma_service = :company')
            ->andWhere('p.is_public = true')
            ->andWhere('p.is_active = true')
            ->setParameter('company', $myCompany);

        if ($categoryId) {
            $qb->andWhere('p.category = :categoryId')
               ->setParameter('categoryId', $categoryId);
        }

        if ($search) {
            $qb->andWhere('p.name LIKE :search')
               ->setParameter('search', "%{$search}%");
        }

        $products = $qb->orderBy('p.created_at', 'DESC')
            ->getQuery()
            ->getResult();

        $user = $this->getUser();
        $favoriteIds = [];
        $favoritesCount = 0;
        $cartItemsCount = 0;

        if ($user && $this->isGranted('ROLE_CUSTOMER')) {
            $favoriteIds = $favoriteRepository->findFavoriteProductIds($user);
            $favoritesCount = $favoriteRepository->countByCustomer($user);
            $cartItemsCount = $cartRepository->getCartItemsCount($user);
        }

        return $this->render('marketplace/products/index.html.twig', [
            'products' => $products,
            'categories' => $categories,
            'selectedCategory' => $categoryId,
            'search' => $search,
            'favoriteIds' => $favoriteIds,
            'favoritesCount' => $favoritesCount,
            'cartItemsCount' => $cartItemsCount,
        ]);
    }

    #[Route('/{id}', name: 'marketplace_product_show')]
    public function show(Product $product, EntityManagerInterface $entityManager): Response
    {
        $myCompany = $this->getMyCompany($entityManager);
        
        if ($product->getHmaService()->getId() !== $myCompany->getId()) {
            throw $this->createNotFoundException('Produit non disponible');
        }

        if (!$product->isPublic() || !$product->isActive()) {
            throw $this->createNotFoundException('Produit non disponible');
        }

        return $this->render('marketplace/products/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/detail/{id}', name: 'marketplace_product_detail')]
    public function detail(Product $product, EntityManagerInterface $entityManager): Response
    {
        return $this->show($product, $entityManager);
    }

    #[Route('/{id}/{slug}', name: 'marketplace_product_detail_slug')]
    public function showWithSlug(Product $product, EntityManagerInterface $entityManager): Response
    {
        return $this->show($product, $entityManager);
    }
}