<?php
// src/Controller/Api/ProductSearchController.php

namespace App\Controller\Api;

use App\Entity\User;
use App\Service\ProductSearchService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/products')]
class ProductSearchController extends AbstractController
{
    public function __construct(
        private ProductSearchService $productSearchService
    ) {
    }

    /**
     * Recherche de produits par code-barres (scan)
     */
    #[Route('/search/barcode', name: 'api_product_search_barcode', methods: ['GET'])]
    public function searchByBarcode(Request $request): JsonResponse
    {
        try {
            $barcode = $request->query->get('barcode');
            
            if (!$barcode) {
                return $this->json(['error' => 'Code-barres requis'], 400);
            }
            
            /** @var User $user */
            $user = $this->getUser();
            
            if (!$user) {
                return $this->json(['error' => 'Utilisateur non connecté'], 401);
            }
            
            $hmaService = $user->getHmaService();
            
            if (!$hmaService) {
                return $this->json(['error' => 'Aucune entreprise associée'], 400);
            }
            
            $product = $this->productSearchService->findByBarcode($barcode, $hmaService);
            
            if (!$product) {
                return $this->json(['error' => 'Produit non trouvé'], 404);
            }
            
            return $this->json([
                'id' => $product->getId(),
                'name' => $product->getName(),
                'barcode' => $product->getBarcode(),
                'purchase_price' => $product->getPurchasePrice(),
                'sale_price' => $product->getSalePrice(),
                'image' => $product->getImage(),
                'has_expiry_date' => $product->hasExpiryDate(),
                'unit' => $product->getUnit(),
                'stock_quantity' => $product->getStockQuantity()
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }
}