<?php
// src/Controller/Marketplace/CategoryController.php

namespace App\Controller\Marketplace;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/customer/category')]
class CategoryController extends AbstractController
{
    #[Route('/{slug}', name: 'marketplace_category')]
    public function show(
        Category $category,
        CategoryRepository $categoryRepository
    ): Response {
        // Vérifier que la catégorie est publique
        if (!$category->isPublic() || !$category->isActive()) {
            throw $this->createNotFoundException('Catégorie non disponible');
        }

        // Récupérer les produits de la catégorie
        $products = $category->getProducts()->filter(function($product) {
            return $product->isPublic() && $product->isActive();
        });

        // Récupérer toutes les catégories pour la navigation
        $categories = $categoryRepository->findBy([
            'is_public' => true,
            'is_active' => true,
            'subscription_active' => true
        ]);

        return $this->render('customer/category/show.html.twig', [
            'category' => $category,
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}