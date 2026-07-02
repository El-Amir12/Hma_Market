<?php
// src/Controller/Marketplace/FavoriteController.php

namespace App\Controller\Marketplace;

use App\Entity\Customer;
use App\Entity\Favorite;
use App\Repository\ProductRepository;
use App\Repository\FavoriteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/marketplace')]
class FavoriteController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private ProductRepository $productRepository,
        private FavoriteRepository $favoriteRepository
    ) {}

    #[Route('/favorites', name: 'marketplace_favorites')]
    public function index(): Response
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('marketplace_login');
        }

        $favorites = $this->favoriteRepository->findBy(['customer' => $customer]);

        return $this->render('marketplace/favorites/index.html.twig', [
            'favorites' => $favorites,
        ]);
    }

    #[Route('/favorite/toggle', name: 'marketplace_favorite_toggle', methods: ['POST'])]
    public function toggle(Request $request): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        $data = json_decode($request->getContent(), true);
        $productId = $data['productId'] ?? null;

        if (!$productId) {
            return $this->json(['success' => false, 'error' => 'Produit non spécifié']);
        }

        $product = $this->productRepository->find($productId);
        if (!$product) {
            return $this->json(['success' => false, 'error' => 'Produit non trouvé']);
        }

        // Vérifier si déjà en favori
        $existingFavorite = $this->favoriteRepository->findOneBy([
            'customer' => $customer,
            'product' => $product
        ]);

        if ($existingFavorite) {
            // Supprimer des favoris
            $this->entityManager->remove($existingFavorite);
            $this->entityManager->flush();
            
            return $this->json([
                'success' => true,
                'isFavorite' => false,
                'message' => 'Retiré des favoris'
            ]);
        } else {
            // Ajouter aux favoris
            $favorite = new Favorite();
            $favorite->setCustomer($customer);
            $favorite->setProduct($product);
            $favorite->setCreatedAt(new \DateTimeImmutable());
            
            $this->entityManager->persist($favorite);
            $this->entityManager->flush();
            
            return $this->json([
                'success' => true,
                'isFavorite' => true,
                'message' => 'Ajouté aux favoris'
            ]);
        }
    }

    #[Route('/favorite/check/{productId}', name: 'marketplace_favorite_check', methods: ['GET'])]
    public function check(int $productId): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['isFavorite' => false]);
        }

        $product = $this->productRepository->find($productId);
        if (!$product) {
            return $this->json(['isFavorite' => false]);
        }

        $favorite = $this->favoriteRepository->findOneBy([
            'customer' => $customer,
            'product' => $product
        ]);

        return $this->json(['isFavorite' => $favorite !== null]);
    }

    #[Route('/favorites/count', name: 'marketplace_favorites_count', methods: ['GET'])]
    public function count(): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['count' => 0]);
        }

        $count = $this->favoriteRepository->countByCustomer($customer);

        return $this->json(['count' => $count]);
    }
}