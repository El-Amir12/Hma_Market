<?php
// src/Controller/PurchaseController.php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Purchase;
use App\Entity\Supplier;
use App\Entity\User;
use App\Entity\Location;
use App\Entity\StockBatch;
use App\Entity\PurchaseItem;  
use App\Form\PurchaseConfirmationType;
use App\Form\PurchaseType;
use App\Form\ReceivePurchaseType;
use App\Repository\LocationRepository;
use App\Repository\PurchaseRepository;
use App\Repository\StockBatchRepository;
use App\Repository\SupplierRepository;
use App\Service\SupplierCreditNoteService;
use App\Service\PurchaseFlowService;
use App\Service\InvoicePdfGenerator;
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
        private LoggerInterface $logger,
        private InvoicePdfGenerator $pdfGenerator
    ) {
    }

    /**
     * Envoie une réponse JSON propre (sans caractères parasites)
     */
    private function sendJsonResponse($data, int $status = 200): JsonResponse
    {
        // Nettoyer tous les buffers de sortie
        while (ob_get_level() > 0) {
            ob_end_clean();
        }
        
        return $this->json($data, $status);
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
            'hma_service_id' => $hmaService->getId(),
        ];

        $page = max(1, $request->query->getInt('page', 1));
        $limit = 15;

        // Filtrer les fournisseurs par entreprise
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
        
        // Filtrer les fournisseurs actifs et avec abonnement actif
        $suppliers = $this->em->getRepository(Supplier::class)
            ->findBy([
                'hma_service' => $hmaService, 
                'is_active' => true,
                'subscription_active' => true
            ]);
        
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
            
            return $this->sendJsonResponse([
                'items' => $items,
                'total' => $cartTotal,
                'count' => count($items)
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur cartData', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return $this->sendJsonResponse(['error' => $e->getMessage()], 500);
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
            return $this->sendJsonResponse(['error' => 'Produit non trouvé'], 404);
        }
        
        if (!$product->isActive() || !$product->isSubscriptionActive()) {
            return $this->sendJsonResponse(['error' => 'Ce produit n\'est pas disponible'], 403);
        }
        
        if (!$unitPrice || $unitPrice <= 0) {
            $unitPrice = (float) $product->getPurchasePrice();
        }
        
        try {
            $cartItem = $this->purchaseFlowService->addProductToCart($product, $quantity, $unitPrice);
            
            return $this->sendJsonResponse([
                'success' => true,
                'cart_item' => $cartItem,
                'cart_total' => $this->purchaseFlowService->getCartTotal(),
                'cart_count' => count($this->purchaseFlowService->getCart())
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur addProduct', ['error' => $e->getMessage()]);
            return $this->sendJsonResponse(['error' => $e->getMessage()], 400);
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
                return $this->sendJsonResponse([
                    'success' => true,
                    'cart_total' => $this->purchaseFlowService->getCartTotal(),
                    'cart_count' => count($this->purchaseFlowService->getCart())
                ]);
            }
            return $this->sendJsonResponse(['error' => 'Produit non trouvé dans le panier'], 404);
        } catch (\Exception $e) {
            $this->logger->error('Erreur removeProduct', ['error' => $e->getMessage()]);
            return $this->sendJsonResponse(['error' => $e->getMessage()], 500);
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
                return $this->sendJsonResponse([
                    'success' => true,
                    'cart_total' => $this->purchaseFlowService->getCartTotal()
                ]);
            }
            return $this->sendJsonResponse(['error' => 'Erreur lors de la mise à jour'], 400);
        } catch (\Exception $e) {
            $this->logger->error('Erreur updateQuantity', ['error' => $e->getMessage()]);
            return $this->sendJsonResponse(['error' => $e->getMessage()], 500);
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
            return $this->sendJsonResponse(['error' => 'Le panier est vide'], 400);
        }
        
        $supplierId = $request->request->get('supplier_id');
        $supplier = $this->em->getRepository(Supplier::class)->find($supplierId);
        
        if (!$supplier) {
            return $this->sendJsonResponse(['error' => 'Fournisseur non trouvé'], 400);
        }
        
        if (!$supplier->isActive()) {
            return $this->sendJsonResponse(['error' => 'Ce fournisseur est désactivé'], 400);
        }
        
        if (!$supplier->isSubscriptionActive()) {
            return $this->sendJsonResponse(['error' => 'L\'abonnement de ce fournisseur n\'est pas actif. Contactez l\'administrateur.'], 400);
        }
        
        /** @var User $user */
        $user = $this->getUser();
        $hmaService = $user->getHmaService();
        
        if ($supplier->getHmaService()->getId() !== $hmaService->getId()) {
            return $this->sendJsonResponse(['error' => 'Fournisseur non autorisé pour cette entreprise'], 403);
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
            $purchase = $this->purchaseFlowService->createPurchase($user, $hmaService);
            $this->purchaseFlowService->confirmPurchase($purchase, $supplier, $notes, $notificationOptions);
            
            return $this->sendJsonResponse([
                'success' => true,
                'message' => 'Commande confirmée avec succès',
                'redirect_url' => $this->generateUrl('purchase_show', ['id' => $purchase->getId()])
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur confirm', ['error' => $e->getMessage()]);
            return $this->sendJsonResponse(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Réceptionner une commande
     */
    #[Route('/receive/{id}', name: 'purchase_receive', methods: ['GET', 'POST'])]
    public function receive(
        Request $request, 
        Purchase $purchase, 
        LocationRepository $locationRepository,
        SupplierCreditNoteService $creditNoteService
    ): Response {
        if ($purchase->getStatus() !== Purchase::STATUS_CONFIRMED) {
            $this->addFlash('error', 'Seules les commandes confirmées peuvent être réceptionnées');
            return $this->redirectToRoute('purchase_index');
        }
        
        $hmaService = $purchase->getHmaService();
        $locations = $locationRepository->findActiveByHmaService($hmaService);
        
        if ($request->isMethod('POST')) {
            $session = $request->getSession();
            $pendingIssues = $session->get('pending_issues', []);
            
            $batchData = [];
            $valid = true;
            
            foreach ($purchase->getPurchaseItems() as $item) {
                $product = $item->getProduct();
                $itemId = $item->getId();
                
                $issueForItem = null;
                foreach ($pendingIssues as $issue) {
                    if (($issue['batch_id'] ?? null) == $itemId) {
                        $issueForItem = $issue;
                        break;
                    }
                }

                $batchData[$itemId] = [
                    'batch_number' => $request->request->get('batch_number_' . $itemId),
                    'manufacturing_date' => $request->request->get('manufacturing_date_' . $itemId),
                    'expiry_date' => $request->request->get('expiry_date_' . $itemId),
                    'received_quantity' => (int)$request->request->get('received_quantity_' . $itemId, 0),
                    'received_price' => (float)$request->request->get('received_price_' . $itemId, 0),
                    'remove' => $request->request->get('remove_' . $itemId),
                    'location_id' => $request->request->get('location_id_' . $itemId),
                    'issue' => $issueForItem,
                ];
                
                if ($product->hasExpiryDate()) {
                    if (empty($batchData[$itemId]['batch_number']) ||
                        empty($batchData[$itemId]['manufacturing_date']) ||
                        empty($batchData[$itemId]['expiry_date'])) {
                        $valid = false;
                        $this->addFlash('error', 'Veuillez remplir tous les champs de lot pour le produit : ' . $product->getName());
                    }
                }

                $receivedQty = $batchData[$itemId]['received_quantity'];
                if ($receivedQty < 0) {
                    $valid = false;
                    $this->addFlash('error', 'La quantité reçue doit être positive ou nulle pour le produit : ' . $product->getName());
                }
                
                if ($issueForItem && ($issueForItem['affected_quantity'] ?? 0) > $receivedQty) {
                    $valid = false;
                    $this->addFlash('error', sprintf(
                        'Pour le produit "%s", la quantité problématique (%d) dépasse la quantité reçue (%d)',
                        $product->getName(),
                        $issueForItem['affected_quantity'],
                        $receivedQty
                    ));
                }
            }
            
            if ($valid) {
                try {
                    /** @var User $user */
                    $user = $this->getUser();
                    
                    $result = $this->processReceptionWithIssues($purchase, $batchData, $user, $creditNoteService);
                    
                    $processedIssueIds = [];
                    foreach ($batchData as $data) {
                        if ($data['issue'] && isset($data['issue']['batch_id'])) {
                            $processedIssueIds[] = $data['issue']['batch_id'];
                        }
                    }
                    $remainingIssues = array_filter($pendingIssues, function($issue) use ($processedIssueIds) {
                        return !in_array($issue['batch_id'] ?? null, $processedIssueIds);
                    });
                    $session->set('pending_issues', array_values($remainingIssues));
                    
                    $this->addFlash('success', 'Commande réceptionnée avec succès. ' . $result['message']);
                    return $this->redirectToRoute('purchase_show', ['id' => $purchase->getId()]);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de la réception : ' . $e->getMessage());
                    $this->logger->error('Erreur réception', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
                }
            }
        }
        
        return $this->render('purchase/receive.html.twig', [
            'purchase' => $purchase,
            'locations' => $locations,
        ]);
    }
    
    /**
     * Traite la réception avec création des lots, des avoirs, du reçu et mise à jour du stock
     */
    private function processReceptionWithIssues(
        Purchase $purchase,
        array $batchData,
        User $user,
        SupplierCreditNoteService $creditNoteService
    ): array {
        $managedUser = $this->em->getRepository(User::class)->find($user->getId());
        if (!$managedUser) {
            throw new \Exception('Utilisateur non trouvé en base de données');
        }
        
        $createdCreditNotes = [];
        $totalProblematicItems = 0;
        
        foreach ($purchase->getPurchaseItems() as $item) {
            $itemId = $item->getId();
            
            if (!isset($batchData[$itemId])) {
                continue;
            }
            
            $data = $batchData[$itemId];
            
            if ($data['remove']) {
                continue;
            }
            
            $product = $item->getProduct();
            $receivedQuantity = $data['received_quantity'];
            $receivedPrice = $data['received_price'] > 0 ? $data['received_price'] : (float)$item->getUnitPrice();
            $batchNumber = $data['batch_number'] ?: 'LOT-' . $purchase->getPurchaseNumber() . '-' . $itemId;
            $issue = $data['issue'] ?? null;
            
            $problematicQuantity = $issue ? (int)($issue['affected_quantity'] ?? 0) : 0;
            
            // 🔥 CORRECTION 1: NE PAS soustraire les produits problématiques ici
            // On met TOUTE la quantité reçue en stock
            $goodQuantity = $receivedQuantity; // Au lieu de $receivedQuantity - $problematicQuantity
            
            $stockBatch = new StockBatch();
            $stockBatch->setBatchNumber($batchNumber);
            $stockBatch->setProduct($product);
            $stockBatch->setUnitPrice((string)$receivedPrice);
            $stockBatch->setInitialQuantity($receivedQuantity);
            $stockBatch->setCurrentQuantity($goodQuantity); // Toute la quantité reçue
            $stockBatch->setIsActive(true);
            $stockBatch->setHmaService($purchase->getHmaService());
            $stockBatch->setCreatedAt(new \DateTime());
            $stockBatch->setPurchaseItemId($itemId);
            
            if ($product->hasExpiryDate()) {
                if (!empty($data['manufacturing_date'])) {
                    $manufacturingDate = new \DateTime($data['manufacturing_date']);
                    $stockBatch->setManufacturingDate($manufacturingDate);
                    $item->setManufacturingDate($manufacturingDate);
                }
                if (!empty($data['expiry_date'])) {
                    $expiryDate = new \DateTime($data['expiry_date']);
                    $stockBatch->setExpiryDate($expiryDate);
                    $item->setExpiryDate($expiryDate);
                }
                $this->em->persist($item);
            }
            
            if (!empty($data['location_id'])) {
                $location = $this->em->getRepository(Location::class)->find($data['location_id']);
                if ($location) {
                    $stockBatch->setLocationEntity($location);
                }
            }
            
            $this->em->persist($stockBatch);
            
            // 🔥 CORRECTION 2: Créer l'avoir avec stock_action = 'reduce'
            if ($issue && $problematicQuantity > 0) {
                $attachments = $issue['attachments'] ?? null;
                
                $creditNote = $creditNoteService->createCreditNote(
                    $stockBatch,
                    $purchase,
                    $purchase->getSupplier(),
                    $issue['issue_type'],
                    $issue['description'],
                    (float)($issue['declared_amount'] ?? 0),
                    $issue['priority'] ?? 'medium',
                    $attachments,
                    $managedUser,
                    $purchase->getHmaService(),
                    $problematicQuantity,
                    SupplierCreditNoteService::STOCK_ACTION_REDUCE  // 🔥 Forcer 'reduce'
                );
                
                $stockBatch->setHasIssue(true);
                $stockBatch->setSupplierCreditNoteId($creditNote->getId());
                $stockBatch->setIssueStatus($creditNote->getStatus());
                $stockBatch->setIssuePriority($creditNote->getPriority());
                $stockBatch->setIssueDeclaredAmount($creditNote->getDeclaredAmount());
                $stockBatch->setIssueReportedAt(new \DateTime());
                
                $createdCreditNotes[] = $creditNote;
                $totalProblematicItems += $problematicQuantity;
            }
            
            // 🔥 CORRECTION 3: Mettre TOUTE la quantité reçue en stock (pas la quantité bonne)
            $currentStock = $product->getStockQuantity() ?? 0;
            $product->setStockQuantity($currentStock + $receivedQuantity); // TOUTE la quantité
            
            $this->logger->info('Mise à jour stock produit', [
                'product_id' => $product->getId(),
                'product_name' => $product->getName(),
                'ancien_stock' => $currentStock,
                'ajout' => $receivedQuantity,
                'problematique' => $problematicQuantity,
                'nouveau_stock' => $currentStock + $receivedQuantity
            ]);
            
            $this->em->persist($product);
        }
        
        $purchase->setStatus(Purchase::STATUS_RECEIVED);
        $purchase->setReceivedAt(new \DateTimeImmutable());
        $this->em->persist($purchase);
        
        try {
            $recuPath = $this->pdfGenerator->generatePurchaseReceipt($purchase);
            if ($recuPath) {
                $purchase->setRecuAchat($recuPath);
                $this->logger->info('Reçu généré avec succès', ['path' => $recuPath]);
            }
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de la génération du reçu', ['error' => $e->getMessage()]);
        }
        
        $this->em->flush();
        
        try {
            $this->purchaseFlowService->getNotificationService()->sendPurchaseReceivedConfirmation($purchase, $createdCreditNotes);
            $this->logger->info('Confirmation de réception envoyée au fournisseur', [
                'purchase_id' => $purchase->getId(),
                'supplier' => $purchase->getSupplier()?->getName(),
                'nb_credits_notes' => count($createdCreditNotes)
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de l\'envoi de la confirmation de réception', [
                'purchase_id' => $purchase->getId(),
                'error' => $e->getMessage()
            ]);
        }
        
        $message = count($createdCreditNotes) > 0 
            ? sprintf('%d avoir(s) créé(s) pour %d produit(s) problématique(s). Le(s) fournisseur(s) ont été notifié(s).', count($createdCreditNotes), $totalProblematicItems)
            : 'Aucun problème signalé.';
        
        return [
            'message' => $message,
            'credit_notes' => $createdCreditNotes,
            'problematic_count' => $totalProblematicItems
        ];
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
            /** @var User $user */
            $user = $this->getUser();
            if (!$user) {
                throw new \Exception('Utilisateur non connecté');
            }

            $managedUser = $em->getReference(User::class, $user->getId());
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
        // Nettoyer les buffers avant tout
        while (ob_get_level() > 0) {
            ob_end_clean();
        }
        
        try {
            $query = $request->query->get('q', '');
            
            /** @var User $user */
            $user = $this->getUser();
            $hmaService = $user->getHmaService();
            
            if (!$hmaService) {
                return $this->sendJsonResponse(['error' => 'Aucune entreprise associée'], 400);
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
            
            // Encoder manuellement pour déboguer
            $json = json_encode($results);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Erreur JSON: ' . json_last_error_msg());
            }
            
            return $this->sendJsonResponse($results);
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur searchProducts', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return $this->sendJsonResponse(['error' => $e->getMessage()], 500);
        }
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
            return $this->sendJsonResponse(['error' => 'Quantité et prix unitaire doivent être positifs'], 400);
        }

        try {
            $result = $this->purchaseFlowService->updateCartItem($productId, $quantity, $unitPrice);
            if ($result) {
                return $this->sendJsonResponse([
                    'success' => true,
                    'cart_total' => $this->purchaseFlowService->getCartTotal(),
                    'cart_item' => $this->purchaseFlowService->getCart()[$productId] ?? null
                ]);
            }
            return $this->sendJsonResponse(['error' => 'Produit non trouvé dans le panier'], 404);
        } catch (\Exception $e) {
            $this->logger->error('Erreur updateCartItem', ['error' => $e->getMessage()]);
            return $this->sendJsonResponse(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Enregistrement temporaire d'un problème (soumission normale)
     */
    #[Route('/report-issue-temp', name: 'purchase_report_issue_temp', methods: ['POST'])]
    public function reportIssueTemp(Request $request): Response
    {
        $batchId = $request->request->get('batch_id');
        $purchaseId = $request->request->get('purchase_id');
        
        if (!$purchaseId && $batchId) {
            $purchaseItem = $this->em->getRepository(PurchaseItem::class)->find($batchId);
            if ($purchaseItem && $purchaseItem->getPurchase()) {
                $purchaseId = $purchaseItem->getPurchase()->getId();
            }
        }
        
        if (!$purchaseId) {
            $purchaseId = 0;
        }
        
        try {
            $issueType = $request->request->get('issue_type');
            $description = $request->request->get('description');
            $declaredAmount = (float)$request->request->get('declared_amount', 0);
            $priority = $request->request->get('priority', 'medium');
            $affectedQuantity = $request->request->get('affected_quantity');
            $stockAction = $request->request->get('stock_action', 'none');
            $productName = $request->request->get('product_name');
            $batchNumber = $request->request->get('batch_number');
            $unitPrice = (float)$request->request->get('unit_price', 0);
            
            // 🔥 CORRECTION: Récupérer les pièces jointes existantes
            $existingAttachmentsRaw = $request->request->get('existing_attachments', '');
            $attachments = [];
            
            // Décoder le JSON des pièces jointes existantes
            if (!empty($existingAttachmentsRaw)) {
                $decodedAttachments = json_decode($existingAttachmentsRaw, true);
                if (is_array($decodedAttachments)) {
                    $attachments = $decodedAttachments;
                }
            }
            
            // Traiter les nouveaux fichiers joints
            $uploadedFiles = $request->files->get('attachments', []);
            
            // Créer le dossier s'il n'existe pas
            $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/credit_notes_attachments';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            
            foreach ($uploadedFiles as $file) {
                if ($file && $file->isValid()) {
                    $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove', $originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();
                    
                    $file->move($uploadDir, $newFilename);
                    $attachments[] = $newFilename;
                }
            }
            
            $session = $request->getSession();
            $pendingIssues = $session->get('pending_issues', []);
            
            // Vérifier si un problème existe déjà pour ce batch_id
            $existingKey = null;
            foreach ($pendingIssues as $key => $issue) {
                if ($issue['batch_id'] == $batchId) {
                    $existingKey = $key;
                    break;
                }
            }
            
            // Calculer le montant déclaré si nécessaire
            if ($declaredAmount <= 0 && $affectedQuantity && $unitPrice) {
                $declaredAmount = $affectedQuantity * $unitPrice;
            }
            
            $newIssue = [
                'batch_id' => $batchId,
                'purchase_id' => $purchaseId,
                'product_name' => $productName,
                'batch_number' => $batchNumber,
                'unit_price' => $unitPrice,
                'issue_type' => $issueType,
                'description' => $description,
                'declared_amount' => $declaredAmount,
                'priority' => $priority,
                'affected_quantity' => $affectedQuantity,
                'stock_action' => $stockAction,
                'attachments' => $attachments,
                'created_at' => (new \DateTime())->format('Y-m-d H:i:s')
            ];
            
            if ($existingKey !== null) {
                $pendingIssues[$existingKey] = $newIssue;
                $message = '✓ Problème mis à jour avec succès !';
            } else {
                $pendingIssues[] = $newIssue;
                $message = '✓ Problème signalé avec succès !';
            }
            
            $session->set('pending_issues', $pendingIssues);
            
            $this->addFlash('success', $message . ' Vous pourrez finaliser l\'avoir après la réception.');
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur: ' . $e->getMessage());
            $this->logger->error('Erreur reportIssueTemp', ['error' => $e->getMessage()]);
        }
        
        return $this->redirectToRoute('purchase_receive', ['id' => $purchaseId]);
    }

    #[Route('/delete-issue-temp/{batchId}', name: 'purchase_delete_issue_temp', methods: ['POST'])]
    public function deleteIssueTemp(int $batchId, Request $request): Response
    {
        $session = $request->getSession();
        $pendingIssues = $session->get('pending_issues', []);
        
        $purchaseId = null;
        foreach ($pendingIssues as $key => $issue) {
            if ($issue['batch_id'] == $batchId) {
                $purchaseId = $issue['purchase_id'];
                unset($pendingIssues[$key]);
                break;
            }
        }
        
        $session->set('pending_issues', array_values($pendingIssues));
        
        if ($purchaseId) {
            $this->addFlash('success', '✓ Problème supprimé avec succès !');
        } else {
            $this->addFlash('warning', 'Aucun problème trouvé à supprimer.');
        }
        
        return $this->redirectToRoute('purchase_receive', ['id' => $purchaseId ?: 0]);
    }
}