<?php
// src/Controller/Sale/RetailSaleController.php

namespace App\Controller\Sale;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/sale/retail')]
class RetailSaleController extends BaseSaleController
{
    #[Route('/search', name: 'retail_sale_search', methods: ['GET'])]
    public function search(Request $request): JsonResponse
    {
        $this->checkSaleAccess();
        
        $query = $request->query->get('q', '');
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            return $this->json(['error' => 'Aucune entreprise associée'], 400);
        }
        
        if (strlen($query) < 2) {
            return $this->json([]);
        }
        
        $products = $this->entityManager->getRepository(Product::class)
            ->createQueryBuilder('p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->andWhere('p.subscription_active = true')
            ->andWhere('p.stock_quantity > 0')
            ->andWhere('p.name LIKE :query OR p.barcode LIKE :query')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('query', '%' . $query . '%')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult();
        
        $results = [];
        foreach ($products as $product) {
            $promotionInfo = $this->promotionCalculator->getBestProductPromotion($product);
            
            $results[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'barcode' => $product->getBarcode(),
                'sale_price' => (float) $product->getSalePrice(),
                'final_price' => $promotionInfo['final_price'],
                'has_promotion' => $promotionInfo['has_promotion'],
                'promotion_message' => $promotionInfo['has_promotion'] ? 
                    $this->promotionCalculator->getPromotionMessage(
                        $promotionInfo['promotion'],
                        $promotionInfo['original_price'],
                        $promotionInfo['final_price'],
                        $hmaService
                    ) : null,
                'image' => $product->getImage(),
                'stock_quantity' => $product->getStockQuantity(),
                'unit' => $product->getUnit(),
                'has_expiry_date' => $product->hasExpiryDate(),
                'is_low_stock' => $product->getStockQuantity() <= $product->getMinQuantity()
            ];
        }
        
        return $this->json($results);
    }
    
    #[Route('/', name: 'retail_sale_index', methods: ['GET'])]
    public function index(): Response
    {
        $this->checkSaleAccess();
        
        $cart = $this->saleService->getCart();
        $cartTotal = $this->saleService->getCartTotal();
        
        return $this->render('sale/retail/index.html.twig', [
            'cart' => $cart,
            'cart_total' => $cartTotal,
            'payment_methods' => self::PAYMENT_METHODS
        ]);
    }
}