<?php
// src/Controller/PurchaseController.php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Purchase;
use App\Entity\Supplier;
use App\Entity\User;
use App\Form\PurchaseConfirmationType;
use App\Form\PurchaseType;
use App\Form\ReceivePurchaseType;
use App\Service\PurchaseFlowService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/purchase')]
class PurchaseController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private PurchaseFlowService $purchaseFlowService,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Liste des commandes d'achat
     */
    #[Route('/', name: 'purchase_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw $this->createNotFoundException('Aucune entreprise associée à cet utilisateur');
        }

        $filters = [
            'status' => $request->query->get('status', ''),
            'supplier_id' => $request->query->get('supplier_id', ''),
            'start_date' => $request->query->get('start_date', ''),
            'end_date' => $request->query->get('end_date', ''),
            'search' => $request->query->get('search', ''),
        ];

        $page = max(1, $request->query->getInt('page', 1));
        $limit = 15;

        $suppliers = $this->em->getRepository(Supplier::class)
            ->findBy(['hma_service' => $hmaService, 'is_active' => true]);

        $generalStats = $this->em->getRepository(Purchase::class)->getStatsByFilters($filters);
        $statusCounts = $this->em->getRepository(Purchase::class)->getStatusCountsByFilters($filters);
        $pagination = $this->em->getRepository(Purchase::class)->findFilteredPaginated($filters, $page, $limit);

        return $this->render('purchase/index.html.twig', [
            'purchases' => $pagination['items'],
            'pagination' => $pagination,
            'stats' => $generalStats,
            'status_counts' => $statusCounts,
            'filters' => $filters,
            'suppliers' => $suppliers,
            'statuses' => Purchase::getStatuses(),
        ]);
    }

    /**
     * Panier d'achat
     */
    #[Route('/cart', name: 'purchase_cart', methods: ['GET', 'POST'])]
    public function cart(Request $request): Response
    {
        $form = $this->createForm(PurchaseType::class);
        $form->handleRequest($request);
        
        /** @var User $user */
        $user = $this->getUser();
        $hmaService = $user->getHmaService();
        
        $suppliers = $this->em->getRepository(Supplier::class)
            ->findBy(['hma_service' => $hmaService, 'is_active' => true]);
        
        $cart = $this->purchaseFlowService->getCart();
        $cartTotal = $this->purchaseFlowService->getCartTotal();
        
        return $this->render('purchase/cart.html.twig', [
            'cart' => $cart,
            'cart_total' => $cartTotal,
            'form' => $form->createView(),
            'suppliers' => $suppliers
        ]);
    }

    /**
     * Récupère les données du panier en JSON (AJAX)
     */
    #[Route('/cart-data', name: 'purchase_cart_data', methods: ['GET'])]
    public function cartData(): JsonResponse
    {
        try {
            $cart = $this->purchaseFlowService->getCart();
            $items = array_map(function($item) {
                // On garde toutes les infos utiles pour l'affichage
                return [
                    'product_id' => $item['product_id'],
                    'product_name' => $item['product_name'],
                    'barcode' => $item['barcode'],
                    'image' => $item['image'] ?? null,
                    'unit' => $item['unit'] ?? null,
                    'quantity' => $item['quantity'],
                    'unit_price' => $item['unit_price'],
                    'total_price' => $item['total_price'],
                    'has_expiry_date' => $item['has_expiry_date'] ?? false,
                ];
            }, $cart);
            $cartTotal = $this->purchaseFlowService->getCartTotal();
            
            return $this->json([
                'items' => $items,
                'total' => $cartTotal,
                'count' => count($items)
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur cartData', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Ajouter un produit au panier (AJAX)
     */
    #[Route('/add-product', name: 'purchase_add_product', methods: ['POST'])]
    public function addProduct(Request $request): JsonResponse
    {
        $productId = $request->request->get('product_id');
        $quantity = (int) $request->request->get('quantity', 1);
        $unitPrice = (float) $request->request->get('unit_price');
        
        $product = $this->em->getRepository(Product::class)->find($productId);
        
        if (!$product) {
            return $this->json(['error' => 'Produit non trouvé'], 404);
        }
        
        if (!$product->isActive() || !$product->isSubscriptionActive()) {
            return $this->json(['error' => 'Ce produit n\'est pas disponible'], 403);
        }
        
        if (!$unitPrice || $unitPrice <= 0) {
            $unitPrice = (float) $product->getPurchasePrice();
        }
        
        try {
            $cartItem = $this->purchaseFlowService->addProductToCart($product, $quantity, $unitPrice);
            
            return $this->json([
                'success' => true,
                'cart_item' => $cartItem,
                'cart_total' => $this->purchaseFlowService->getCartTotal(),
                'cart_count' => count($this->purchaseFlowService->getCart())
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur addProduct', ['error' => $e->getMessage()]);
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Supprimer un produit du panier (AJAX)
     */
    #[Route('/remove-product/{productId}', name: 'purchase_remove_product', methods: ['DELETE'])]
    public function removeProduct(int $productId): JsonResponse
    {
        try {
            $result = $this->purchaseFlowService->removeProductFromCart($productId);
            if ($result) {
                return $this->json([
                    'success' => true,
                    'cart_total' => $this->purchaseFlowService->getCartTotal(),
                    'cart_count' => count($this->purchaseFlowService->getCart())
                ]);
            }
            return $this->json(['error' => 'Produit non trouvé dans le panier'], 404);
        } catch (\Exception $e) {
            $this->logger->error('Erreur removeProduct', ['error' => $e->getMessage()]);
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Mettre à jour la quantité (AJAX)
     */
    #[Route('/update-quantity/{productId}', name: 'purchase_update_quantity', methods: ['PUT'])]
    public function updateQuantity(int $productId, Request $request): JsonResponse
    {
        $quantity = (int) $request->request->get('quantity', 1);
        
        try {
            $result = $this->purchaseFlowService->updateCartQuantity($productId, $quantity);
            if ($result) {
                return $this->json([
                    'success' => true,
                    'cart_total' => $this->purchaseFlowService->getCartTotal()
                ]);
            }
            return $this->json(['error' => 'Erreur lors de la mise à jour'], 400);
        } catch (\Exception $e) {
            $this->logger->error('Erreur updateQuantity', ['error' => $e->getMessage()]);
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Confirmer la commande (AJAX)
     */
    #[Route('/confirm', name: 'purchase_confirm', methods: ['POST'])]
    public function confirm(Request $request): JsonResponse
    {
        $cart = $this->purchaseFlowService->getCart();
        
        if (empty($cart)) {
            return $this->json(['error' => 'Le panier est vide'], 400);
        }
        
        $supplierId = $request->request->get('supplier_id');
        $supplier = $this->em->getRepository(Supplier::class)->find($supplierId);
        
        if (!$supplier) {
            return $this->json(['error' => 'Fournisseur non trouvé'], 400);
        }
        
        $notes = $request->request->get('notes');
        $bonCommande = $request->request->get('bon_commande');
        
        $notificationOptions = [
            'notify_by_email' => $request->request->get('notify_by_email') === '1',
            'notify_by_whatsapp' => $request->request->get('notify_by_whatsapp') === '1',
            'send_image' => $request->request->get('send_image') === '1',
            'confirmation_message' => $request->request->get('confirmation_message')
        ];
        
        try {
            /** @var User $user */
            $user = $this->getUser();
            $hmaService = $user->getHmaService();
            
            $purchase = $this->purchaseFlowService->createPurchase($user, $hmaService);
            
            // NE PAS ré‑ajouter les produits ici – le panier est déjà rempli
            // La méthode confirmPurchase() utilisera $this->purchaseFlowService->getCart()
            
            $this->purchaseFlowService->confirmPurchase($purchase, $supplier, $notes, $notificationOptions);
            
            return $this->json([
                'success' => true,
                'message' => 'Commande confirmée avec succès',
                'redirect_url' => $this->generateUrl('purchase_show', ['id' => $purchase->getId()])
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur confirm', ['error' => $e->getMessage()]);
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Réceptionner une commande
     */
    #[Route('/receive/{id}', name: 'purchase_receive', methods: ['GET', 'POST'])]
    public function receive(Request $request, Purchase $purchase): Response
    {
        if ($purchase->getStatus() !== Purchase::STATUS_CONFIRMED) {
            $this->addFlash('error', 'Seules les commandes confirmées peuvent être réceptionnées');
            return $this->redirectToRoute('purchase_index');
        }
        
        if ($request->isMethod('POST')) {
            $batchData = [];
            $valid = true;
            
            foreach ($purchase->getPurchaseItems() as $item) {
                $product = $item->getProduct();
                $itemId = $item->getId();

                $batchData[$itemId] = [
                    'batch_number' => $request->request->get('batch_number_' . $itemId),
                    'manufacturing_date' => $request->request->get('manufacturing_date_' . $itemId),
                    'expiry_date' => $request->request->get('expiry_date_' . $itemId),
                    'received_quantity' => $request->request->get('received_quantity_' . $itemId),
                    'received_price' => $request->request->get('received_price_' . $itemId),
                    'remove' => $request->request->get('remove_' . $itemId),
                ];
                
                // Validation pour les produits périssables
                if ($product->hasExpiryDate()) {
                    if (empty($batchData[$itemId]['batch_number']) ||
                        empty($batchData[$itemId]['manufacturing_date']) ||
                        empty($batchData[$itemId]['expiry_date'])) {
                        $valid = false;
                        $this->addFlash('error', 'Veuillez remplir tous les champs de lot pour le produit : ' . $product->getName());
                    }
                }

                // Vérifier la quantité reçue (doit être >= 0)
                $receivedQty = (int)$batchData[$itemId]['received_quantity'];
                if ($receivedQty < 0) {
                    $valid = false;
                    $this->addFlash('error', 'La quantité reçue doit être positive ou nulle pour le produit : ' . $product->getName());
                }
            }
            
            if ($valid) {
                try {
                    $this->purchaseFlowService->receivePurchase($purchase, $batchData);
                    $this->addFlash('success', 'Commande réceptionnée avec succès. Les lots ont été créés.');
                    return $this->redirectToRoute('purchase_show', ['id' => $purchase->getId()]);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de la réception : ' . $e->getMessage());
                }
            }
        }
        
        return $this->render('purchase/receive.html.twig', [
            'purchase' => $purchase
        ]);
    }

    /**
     * Annuler une commande (réservé aux administrateurs et managers)
     */
    #[Route('/cancel/{id}', name: 'purchase_cancel', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    #[IsGranted('ROLE_MANAGER')]
    public function cancel(Request $request, Purchase $purchase, EntityManagerInterface $em): Response
    {
        if (!$purchase->canCancel()) {
            $this->addFlash('error', 'Cette commande ne peut pas être annulée');
            return $this->redirectToRoute('purchase_index');
        }

        $reason = $request->request->get('reason');
        if (!$reason) {
            $this->addFlash('error', 'Veuillez fournir un motif d\'annulation');
            return $this->redirectToRoute('purchase_index');
        }

        try {
            /** @var \App\Entity\User $user */
            $user = $this->getUser();
            if (!$user) {
                throw new \Exception('Utilisateur non connecté');
            }

            // Obtenir une référence gérée par Doctrine (ne charge pas les données)
            $managedUser = $em->getReference(\App\Entity\User::class, $user->getId());

            // Appeler le service avec l'utilisateur géré
            $this->purchaseFlowService->cancelPurchase($purchase, $reason, $managedUser);

            $this->addFlash('success', 'Commande annulée avec succès. Le fournisseur a été notifié.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'annulation : ' . $e->getMessage());
        }

        return $this->redirectToRoute('purchase_index');
    }

    /**
     * Recherche de produits (AJAX)
     */
    #[Route('/search-products', name: 'purchase_search_products', methods: ['GET'])]
    public function searchProducts(Request $request): JsonResponse
    {
        $query = $request->query->get('q', '');
        /** @var User $user */
        $user = $this->getUser();
        $hmaService = $user->getHmaService();
        
        if (!$hmaService) {
            return $this->json(['error' => 'Aucune entreprise associée'], 400);
        }
        
        $products = $this->em->getRepository(Product::class)
            ->createQueryBuilder('p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->andWhere('p.subscription_active = true')
            ->andWhere('p.name LIKE :query OR p.barcode LIKE :query')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('query', '%' . $query . '%')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult();
        
        $results = [];
        foreach ($products as $product) {
            $results[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'barcode' => $product->getBarcode(),
                'purchase_price' => $product->getPurchasePrice(),
                'image' => $product->getImage(),
                'has_expiry_date' => $product->hasExpiryDate(),
                'unit' => $product->getUnit()
            ];
        }
        
        return $this->json($results);
    }

    /**
     * Afficher une commande
     */
    #[Route('/{id}', name: 'purchase_show', methods: ['GET'])]
    public function show(Purchase $purchase): Response
    {
        return $this->render('purchase/show.html.twig', [
            'purchase' => $purchase
        ]);
    }

    /**
     * Imprimer une commande
     */
    #[Route('/{id}/print', name: 'purchase_print', methods: ['GET'])]
    public function print(Purchase $purchase): Response
    {
        return $this->render('purchase/print.html.twig', [
            'purchase' => $purchase
        ]);
    }

    /**
     * Mettre à jour quantité et prix unitaire d'un article du panier (AJAX)
     */
    #[Route('/update-item/{productId}', name: 'purchase_update_item', methods: ['PUT'])]
    public function updateCartItem(int $productId, Request $request): JsonResponse
    {
        // Lecture du contenu (JSON ou formulaire)
        $content = $request->getContent();
        if (!empty($content) && str_starts_with($content, '{')) {
            $data = json_decode($content, true);
            $quantity = (int) ($data['quantity'] ?? 0);
            $unitPrice = (float) ($data['unit_price'] ?? 0);
        } else {
            $quantity = (int) $request->request->get('quantity', 0);
            $unitPrice = (float) $request->request->get('unit_price', 0);
        }

        if ($quantity <= 0 || $unitPrice <= 0) {
            return $this->json(['error' => 'Quantité et prix unitaire doivent être positifs'], 400);
        }

        try {
            $result = $this->purchaseFlowService->updateCartItem($productId, $quantity, $unitPrice);
            if ($result) {
                return $this->json([
                    'success' => true,
                    'cart_total' => $this->purchaseFlowService->getCartTotal(),
                    'cart_item' => $this->purchaseFlowService->getCart()[$productId] ?? null
                ]);
            }
            return $this->json(['error' => 'Produit non trouvé dans le panier'], 404);
        } catch (\Exception $e) {
            $this->logger->error('Erreur updateCartItem', ['error' => $e->getMessage()]);
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }

}