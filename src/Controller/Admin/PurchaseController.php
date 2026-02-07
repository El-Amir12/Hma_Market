<?php

namespace App\Controller\Admin;

use App\Entity\Purchase;
use App\Entity\PurchaseItem;
use App\Entity\Supplier;
use App\Entity\Product;
use App\Entity\StockMovement;
use App\Entity\StockBatch;
use App\Form\PurchaseType;
use App\Repository\ProductRepository;
use App\Repository\SupplierRepository;
use App\Repository\PurchaseRepository;
use App\Service\PurchaseCartService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpKernel\KernelInterface;

#[Route('/admin/purchase')]
#[IsGranted('ROLE_ADMIN')]
class PurchaseController extends AbstractController
{
    private string $projectDir;
    
    public function __construct(KernelInterface $kernel)
    {
        $this->projectDir = $kernel->getProjectDir();
    }
    
    #[Route('/', name: 'admin_purchase_index', methods: ['GET'])]
    public function index(PurchaseRepository $purchaseRepository, Request $request): Response
    {
        $page = $request->query->getInt('page', 1);
        $status = $request->query->get('status');
        $search = $request->query->get('search');
        $startDate = $request->query->get('start_date');
        $endDate = $request->query->get('end_date');
        
        $statuses = [
            'draft' => 'Brouillon',
            'confirmed' => 'Confirmé',
            'received' => 'Reçu',
            'cancelled' => 'Annulé'
        ];
        
        // Récupérer le nombre total d'achats (tous statuts confondus)
        $totalPurchasesCount = count($purchaseRepository->findAll());
        
        // Compter les achats par statut
        $statusCounts = [];
        foreach ($statuses as $statusKey => $statusLabel) {
            $statusCounts[$statusKey] = count($purchaseRepository->findByStatus($statusKey));
        }
        
        // Appliquer les filtres avec pagination
        if ($search) {
            $paginationData = $purchaseRepository->searchPurchases($search, $page, 15);
        } elseif ($status && array_key_exists($status, $statuses)) {
            $paginationData = $purchaseRepository->findByStatusPaginated($status, $page, 15);
        } elseif ($startDate && $endDate) {
            try {
                $start = new \DateTime($startDate);
                $end = new \DateTime($endDate);
                $end->setTime(23, 59, 59);
                $paginationData = $purchaseRepository->findByDateRangePaginated($start, $end, $page, 15);
            } catch (\Exception $e) {
                // En cas d'erreur de date, on affiche tous les achats
                $paginationData = $purchaseRepository->findAllPaginated($page, 15);
            }
        } else {
            $paginationData = $purchaseRepository->findAllPaginated($page, 15);
        }

        return $this->render('admin/purchase/index.html.twig', [
            'purchases' => $paginationData['items'],
            'pagination' => $paginationData,
            'statuses' => $statuses,
            'current_status' => $status,
            'search' => $search,
            'total_purchases_count' => $totalPurchasesCount,
            'status_counts' => $statusCounts,
        ]);
    }
    
    #[Route('/new', name: 'admin_purchase_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        PurchaseCartService $cartService,
        ProductRepository $productRepository,
        SupplierRepository $supplierRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if ($cartService->getItemCount() === 0) {
            $this->addFlash('warning', 'Votre panier est vide. Ajoutez des produits avant de continuer.');
            return $this->redirectToRoute('admin_purchase_cart');
        }

        $purchase = new Purchase();
        $form = $this->createForm(PurchaseType::class, $purchase);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $cart = $cartService->getCart();
                $supplierData = $cartService->getSupplier();

                $purchase->setPurchaseNumber($this->generatePurchaseNumber());
                $purchase->setUser($this->getUser());
                
                if ($supplierData) {
                    $supplier = $supplierRepository->find($supplierData['id']);
                    $purchase->setSupplier($supplier);
                }

                $purchase->setStatus(Purchase::STATUS_RECEIVED);
                $purchase->setCreatedAt(new \DateTimeImmutable());
                $purchase->setConfirmedAt(new \DateTimeImmutable());
                $purchase->setReceivedAt(new \DateTimeImmutable());

                $entityManager->persist($purchase);
                $entityManager->flush();

                foreach ($cart as $item) {
                    $product = $productRepository->find($item['product_id']);
                    
                    if (!$product) {
                        throw new \Exception(sprintf('Produit ID %d non trouvé', $item['product_id']));
                    }

                    $purchaseItem = new PurchaseItem();
                    $purchaseItem->setProduct($product);
                    $purchaseItem->setPurchase($purchase);
                    
                    $batchNumber = !empty($item['batch_number']) ? $item['batch_number'] : $this->generateBatchNumber();
                    $purchaseItem->setBatchNumber($batchNumber);
                    
                    $purchaseItem->setQuantity($item['quantity']);
                    $purchaseItem->setUnitPrice($item['purchase_price']);
                    
                    $totalPrice = (float) $item['purchase_price'] * (int) $item['quantity'];
                    $purchaseItem->setTotalPrice(number_format($totalPrice, 2, '.', ''));
                    
                    if ($item['has_expiry_date']) {
                        if (!empty($item['manufacturing_date'])) {
                            $purchaseItem->setManufacturingDate(new \DateTime($item['manufacturing_date']));
                        }
                        if (!empty($item['expiry_date'])) {
                            $purchaseItem->setExpiryDate(new \DateTime($item['expiry_date']));
                        }
                    }
                    
                    $purchaseItem->setCreatedAt(new \DateTime());
                    $entityManager->persist($purchaseItem);
                    
                    // Créer le StockBatch
                    $stockBatch = new StockBatch();
                    $stockBatch->setBatchNumber($batchNumber);
                    $stockBatch->setInitialQuantity($item['quantity']);
                    $stockBatch->setCurrentQuantity($item['quantity']);
                    $stockBatch->setUnitPrice($item['purchase_price']);
                    $stockBatch->setProduct($product);
                    $stockBatch->setPurchaseItem($purchaseItem);
                    $stockBatch->setCreatedAt(new \DateTime());
                    $stockBatch->setIsActive(true);
                    
                    if ($item['has_expiry_date']) {
                        if (!empty($item['manufacturing_date'])) {
                            $stockBatch->setManufacturingDate(new \DateTime($item['manufacturing_date']));
                        }
                        if (!empty($item['expiry_date'])) {
                            $stockBatch->setExpiryDate(new \DateTime($item['expiry_date']));
                        }
                    }
                    
                    $entityManager->persist($stockBatch);
                    
                    // Créer un mouvement de stock
                    $stockMovement = new StockMovement();
                    $stockMovement->setMovementType('PURCHASE');
                    $stockMovement->setQuantity($item['quantity']);
                    $stockMovement->setUnitPrice($item['purchase_price']);
                    $stockMovement->setProduct($product);
                    $stockMovement->setPurchaseItem($purchaseItem);
                    $stockMovement->setStockBatch($stockBatch);
                    $stockMovement->setReferenceId($purchase->getId());
                    $stockMovement->setCreatedAt(new \DateTime());
                    $stockMovement->setUser($this->getUser());
                    $stockMovement->setNotes('Réception directe - Commande #' . $purchase->getPurchaseNumber());
                    
                    $entityManager->persist($stockMovement);
                    
                    // Mettre à jour le stock du produit
                    $currentStock = $product->getStockQuantity();
                    $product->setStockQuantity($currentStock + $item['quantity']);
                    $entityManager->persist($product);
                }

                $purchase->calculateTotalAmount();
                
                // Générer et stocker le PDF de réception d'achat
                $this->generateAndStoreReceiptPdf($purchase, $entityManager);
                
                $entityManager->flush();
                
                $cartService->clear();
                
                $this->addFlash('success', sprintf('Réception #%s enregistrée avec succès.', $purchase->getPurchaseNumber()));
                
                return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
                
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue: ' . $e->getMessage());
            }
        }

        return $this->render('admin/purchase/new.html.twig', [
            'purchase' => $purchase,
            'form' => $form,
            'cart' => $cartService->getCart(),
            'supplier' => $cartService->getSupplier(),
            'total_amount' => $cartService->getTotalAmount(),
        ]);
    }

    #[Route('/cart', name: 'admin_purchase_cart', methods: ['GET'])]
    public function cart(
        PurchaseCartService $cartService,
        SupplierRepository $supplierRepository
    ): Response {
        $supplierData = $cartService->getSupplier();
        $cartSupplier = null;
        
        if ($supplierData && isset($supplierData['id'])) {
            $cartSupplier = $supplierRepository->find($supplierData['id']);
        }

        return $this->render('admin/purchase/cart.html.twig', [
            'cart' => $cartService->getCart(),
            'cart_supplier' => $cartSupplier,
            'total_amount' => $cartService->getTotalAmount(),
            'suppliers' => $supplierRepository->findAllActive(),
        ]);
    }

    #[Route('/cart/add-product', name: 'admin_purchase_cart_add_product', methods: ['POST'])]
    public function addToCart(
        Request $request,
        PurchaseCartService $cartService,
        ProductRepository $productRepository
    ): JsonResponse {
        $productId = $request->request->getInt('product_id');
        $quantity = $request->request->getInt('quantity', 1);
        $batchNumber = $request->request->get('batch_number', '');
        $manufacturingDate = $request->request->get('manufacturing_date', '');
        $expiryDate = $request->request->get('expiry_date', '');

        if ($quantity <= 0) {
            return new JsonResponse(['success' => false, 'message' => 'La quantité doit être supérieure à 0']);
        }

        $product = $productRepository->find($productId);
        
        if (!$product) {
            return new JsonResponse(['success' => false, 'message' => 'Produit non trouvé']);
        }

        $manufacturingDateTime = null;
        $expiryDateTime = null;
        
        if (!empty($manufacturingDate)) {
            try {
                $manufacturingDateTime = new \DateTime($manufacturingDate);
            } catch (\Exception $e) {}
        }
        
        if (!empty($expiryDate)) {
            try {
                $expiryDateTime = new \DateTime($expiryDate);
            } catch (\Exception $e) {}
        }

        $cartService->addItem($product, $quantity, $batchNumber, $manufacturingDateTime, $expiryDateTime);

        return new JsonResponse([
            'success' => true,
            'item_count' => $cartService->getItemCount(),
            'total_amount' => $cartService->getTotalAmount(),
            'message' => 'Produit ajouté au panier'
        ]);
    }

    #[Route('/cart/update/{index}', name: 'admin_purchase_cart_update', methods: ['POST'])]
    public function updateCartItem(
        int $index,
        Request $request,
        PurchaseCartService $cartService
    ): JsonResponse {
        $quantity = $request->request->getInt('quantity');
        $batchNumber = $request->request->get('batch_number', '');
        $manufacturingDate = $request->request->get('manufacturing_date', '');
        $expiryDate = $request->request->get('expiry_date', '');

        if ($quantity <= 0) {
            return new JsonResponse(['success' => false, 'message' => 'La quantité doit être supérieure à 0']);
        }

        $updateData = [
            'quantity' => $quantity,
            'batch_number' => $batchNumber,
            'manufacturing_date' => $manufacturingDate,
            'expiry_date' => $expiryDate
        ];

        $cartService->updateItem($index, $updateData);

        return new JsonResponse([
            'success' => true,
            'total_amount' => $cartService->getTotalAmount(),
            'message' => 'Produit mis à jour'
        ]);
    }

    #[Route('/cart/remove/{index}', name: 'admin_purchase_cart_remove', methods: ['DELETE'])]
    public function removeCartItem(
        int $index,
        PurchaseCartService $cartService
    ): JsonResponse {
        $cartService->removeItem($index);

        return new JsonResponse([
            'success' => true,
            'item_count' => $cartService->getItemCount(),
            'total_amount' => $cartService->getTotalAmount(),
            'message' => 'Produit retiré du panier'
        ]);
    }

    #[Route('/cart/set-supplier/{id}', name: 'admin_purchase_cart_set_supplier', methods: ['POST'])]
    public function setCartSupplier(
        Supplier $supplier,
        PurchaseCartService $cartService,
        Request $request
    ): JsonResponse {
        $submittedToken = $request->request->get('_token');
        
        if (!$this->isCsrfTokenValid('purchase_confirm', $submittedToken)) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Token de sécurité invalide'
            ], 400);
        }
        
        $cartService->setSupplier($supplier);
        
        return new JsonResponse([
            'success' => true,
            'message' => 'Fournisseur sélectionné avec succès',
            'supplier' => [
                'id' => $supplier->getId(),
                'name' => $supplier->getName(),
                'email' => $supplier->getEmail()
            ]
        ]);
    }

    #[Route('/cart/clear', name: 'admin_purchase_cart_clear', methods: ['POST'])]
    public function clearCart(PurchaseCartService $cartService): JsonResponse
    {
        $cartService->clear();

        return new JsonResponse([
            'success' => true,
            'message' => 'Panier vidé'
        ]);
    }

    #[Route('/search-products', name: 'admin_purchase_search_products', methods: ['GET'])]
    public function searchProducts(
        Request $request,
        ProductRepository $productRepository
    ): JsonResponse {
        $query = $request->query->get('q', '');
        $limit = $request->query->getInt('limit', 10);

        $products = $productRepository->searchActiveProducts($query, $limit);

        $results = [];
        foreach ($products as $product) {
            $results[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'barcode' => $product->getBarcode(),
                'purchase_price' => $product->getPurchasePrice(),
                'sale_price' => $product->getSalePrice(),
                'current_stock' => $product->getStockQuantity(),
                'has_expiry_date' => $product->hasExpiryDate(),
                'category' => $product->getCategory() ? $product->getCategory()->getName() : 'Non catégorisé',
                'stock_status' => $product->getStockStatus(),
            ];
        }

        return new JsonResponse($results);
    }

    #[Route('/confirm-order', name: 'admin_purchase_confirm_order', methods: ['POST'])]
    public function confirmOrder(
        Request $request,
        PurchaseCartService $cartService,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): JsonResponse {
        $submittedToken = $request->request->get('_token');
        
        if (!$this->isCsrfTokenValid('purchase_confirm', $submittedToken)) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Token de sécurité invalide. Rechargez la page et réessayez.'
            ], 400);
        }
        
        if ($cartService->getItemCount() === 0) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Le panier est vide'
            ], 400);
        }

        $supplierData = $cartService->getSupplier();
        if (!$supplierData) {
            return new JsonResponse([
                'success' => false, 
                'message' => 'Veuillez sélectionner un fournisseur'
            ], 400);
        }
        
        try {
            // Démarrer une transaction
            $entityManager->beginTransaction();
            
            $purchase = new Purchase();
            $purchase->setPurchaseNumber($this->generatePurchaseNumber());
            $purchase->setUser($this->getUser());
            $purchase->setCreatedAt(new \DateTimeImmutable());
            
            $supplier = $entityManager->getRepository(Supplier::class)->find($supplierData['id']);
            if (!$supplier) {
                $entityManager->rollback();
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Fournisseur non trouvé'
                ], 404);
            }
            $purchase->setSupplier($supplier);
            
            $cart = $cartService->getCart();
            $totalAmount = 0.00;
            $totalItems = 0;
            $totalQuantity = 0;
            
            foreach ($cart as $item) {
                $product = $entityManager->getRepository(Product::class)->find($item['product_id']);
                
                if (!$product) {
                    // Rollback et retourner une erreur
                    $entityManager->rollback();
                    return new JsonResponse([
                        'success' => false,
                        'message' => 'Produit non trouvé: ID ' . $item['product_id']
                    ], 404);
                }
                
                $purchaseItem = new PurchaseItem();
                $purchaseItem->setProduct($product);
                $purchaseItem->setPurchase($purchase);
                $purchaseItem->setQuantity($item['quantity']);
                $purchaseItem->setUnitPrice($item['purchase_price']);
                
                $batchNumber = !empty($item['batch_number']) ? $item['batch_number'] : $this->generateBatchNumber();
                $purchaseItem->setBatchNumber($batchNumber);
                
                $itemTotal = (float) $item['purchase_price'] * (int) $item['quantity'];
                $purchaseItem->setTotalPrice(number_format($itemTotal, 2, '.', ''));
                
                if ($item['has_expiry_date']) {
                    if (!empty($item['manufacturing_date'])) {
                        try {
                            $purchaseItem->setManufacturingDate(new \DateTime($item['manufacturing_date']));
                        } catch (\Exception $e) {
                            // Date invalide, on met null
                            $purchaseItem->setManufacturingDate(null);
                        }
                    }
                    if (!empty($item['expiry_date'])) {
                        try {
                            $purchaseItem->setExpiryDate(new \DateTime($item['expiry_date']));
                        } catch (\Exception $e) {
                            // Date invalide, on met null
                            $purchaseItem->setExpiryDate(null);
                        }
                    }
                }
                
                $purchaseItem->setCreatedAt(new \DateTime());
                $entityManager->persist($purchaseItem);
                
                $totalAmount += $itemTotal;
                $totalItems++;
                $totalQuantity += $item['quantity'];
            }
            
            $purchase->setTotalAmount(number_format($totalAmount, 2, '.', ''));
            $purchase->setStatus(Purchase::STATUS_CONFIRMED);
            $purchase->setConfirmedAt(new \DateTimeImmutable());
            
            $entityManager->persist($purchase);
            
            // Flush pour obtenir l'ID de l'achat
            $entityManager->flush();
            
            // CORRECTION ICI : Calculer les totaux pour le PDF
            $purchaseTotals = [
                'total_items' => $totalItems,
                'total_quantity' => $totalQuantity,
                'total_amount' => $totalAmount
            ];
            
            // Générer et stocker le PDF de bon de commande - IMPORTANT !
            try {
                $this->generateAndStorePurchasePdf($purchase, $entityManager, $purchaseTotals);
                $entityManager->flush();
            } catch (\Exception $e) {
                // Log l'erreur mais on continue
                error_log('Erreur génération PDF: ' . $e->getMessage());
                // On ne rollback pas à cause d'une erreur de PDF
            }
            
            // Envoyer email seulement si l'adresse existe
            if ($supplier->getEmail()) {
                try {
                    $this->sendOrderEmail($purchase, $mailer);
                } catch (\Exception $e) {
                    // Ne pas rollback pour une erreur d'email
                    error_log('Erreur envoi email: ' . $e->getMessage());
                    // Pas de flash message ici car c'est une requête AJAX
                }
            }
            
            // VIDER LE PANIER - IMPORTANT !
            $cartService->clear();
            
            // Commit la transaction
            $entityManager->commit();
            
            return new JsonResponse([
                'success' => true,
                'purchase_id' => $purchase->getId(),
                'purchase_number' => $purchase->getPurchaseNumber(),
                'total_amount' => $purchase->getTotalAmount(),
                'message' => 'Commande #' . $purchase->getPurchaseNumber() . ' confirmée avec succès.'
            ]);
            
        } catch (\Exception $e) {
            // Rollback en cas d'erreur
            if ($entityManager->getConnection()->isTransactionActive()) {
                $entityManager->rollback();
            }
            
            error_log('Erreur confirmation commande: ' . $e->getMessage());
            error_log('Stack trace: ' . $e->getTraceAsString());
            
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur lors de la confirmation: ' . $e->getMessage(),
                'debug' => 'Veuillez vérifier les logs serveur pour plus de détails.'
            ], 500);
        }
    }

    #[Route('/cart/check-empty', name: 'admin_purchase_cart_check_empty', methods: ['GET'])]
    public function checkCartEmpty(PurchaseCartService $cartService): JsonResponse
    {
        return new JsonResponse([
            'is_empty' => $cartService->getItemCount() === 0,
            'item_count' => $cartService->getItemCount(),
            'cart' => $cartService->getCart()
        ]);
    }

    #[Route('/{id}', name: 'admin_purchase_show', methods: ['GET'])]
    public function show(Purchase $purchase): Response
    {
        // Calculer les totaux pour l'affichage
        $totalQuantity = 0;
        foreach ($purchase->getPurchaseItems() as $item) {
            $totalQuantity += $item->getQuantity();
        }
        
        return $this->render('admin/purchase/show.html.twig', [
            'purchase' => $purchase,
            'has_bon_commande' => $purchase->getBonCommande() !== null,
            'has_recu_achat' => $purchase->getRecuAchat() !== null,
            'total_quantity' => $totalQuantity,
            'total_items' => count($purchase->getPurchaseItems()),
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_purchase_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Purchase $purchase,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$purchase->canEdit()) {
            $this->addFlash('error', 'Cet achat ne peut plus être modifié.');
            return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
        }

        $form = $this->createForm(PurchaseType::class, $purchase);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $purchase->setUpdatedAt(new \DateTime());
            $entityManager->flush();

            $this->addFlash('success', 'Achat modifié avec succès.');
            return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
        }

        return $this->render('admin/purchase/edit.html.twig', [
            'purchase' => $purchase,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_purchase_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Purchase $purchase,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$purchase->canDelete()) {
            $this->addFlash('error', 'Cet achat ne peut plus être supprimé.');
            return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
        }

        if ($this->isCsrfTokenValid('delete'.$purchase->getId(), $request->request->get('_token'))) {
            // Supprimer les fichiers PDF associés
            if ($purchase->getBonCommande()) {
                $filePath = $this->getParameter('bon_commande_directory') . '/' . $purchase->getBonCommande();
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
            
            if ($purchase->getRecuAchat()) {
                $filePath = $this->getParameter('recu_achat_directory') . '/' . $purchase->getRecuAchat();
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
            
            // Supprimer les mouvements de stock associés
            $stockMovements = $entityManager->getRepository(StockMovement::class)->findBy([
                'reference_id' => $purchase->getId(),
                'movement_type' => 'PURCHASE'
            ]);
            
            foreach ($stockMovements as $movement) {
                // Supprimer également le StockBatch associé si existe
                if ($movement->getStockBatch()) {
                    $entityManager->remove($movement->getStockBatch());
                }
                $entityManager->remove($movement);
            }
            
            // Supprimer les PurchaseItems
            foreach ($purchase->getPurchaseItems() as $item) {
                $entityManager->remove($item);
            }
            
            $entityManager->remove($purchase);
            $entityManager->flush();
            
            $this->addFlash('success', 'Achat supprimé avec succès.');
        }

        return $this->redirectToRoute('admin_purchase_index');
    }

    #[Route('/{id}/resend-email', name: 'admin_purchase_resend_email', methods: ['POST'])]
    public function resendEmail(
        Purchase $purchase,
        MailerInterface $mailer,
        Request $request
    ): JsonResponse {
        $submittedToken = $request->request->get('_token');
        
        if (!$this->isCsrfTokenValid('resend_email'.$purchase->getId(), $submittedToken)) {
            return new JsonResponse(['success' => false, 'message' => 'Token de sécurité invalide']);
        }
        
        try {
            if ($purchase->getStatus() === Purchase::STATUS_CONFIRMED) {
                $this->sendOrderEmail($purchase, $mailer);
                $message = 'Email de commande renvoyé avec succès';
            } elseif ($purchase->getStatus() === Purchase::STATUS_RECEIVED) {
                $this->sendReceiptEmail($purchase, $mailer);
                $message = 'Email de réception renvoyé avec succès';
            } else {
                return new JsonResponse(['success' => false, 'message' => 'Statut invalide']);
            }
            
            return new JsonResponse(['success' => true, 'message' => $message]);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => 'Erreur: ' . $e->getMessage()]);
        }
    }

    #[Route('/{id}/generate-pdf', name: 'admin_purchase_generate_pdf', methods: ['GET'])]
    public function generatePdf(
        Purchase $purchase, 
        Request $request, 
        EntityManagerInterface $entityManager
    ): Response {
        $type = $request->query->get('type', 'bon-commande');
        
        try {
            if ($type === 'bon-commande') {
                $filePath = null;
                // Si le PDF existe déjà, le retourner
                if ($purchase->getBonCommande()) {
                    $filePath = $this->getParameter('bon_commande_directory') . '/' . $purchase->getBonCommande();
                }
                
                if (!$filePath || !file_exists($filePath)) {
                    // CORRECTION ICI : Recharger avec les items
                    $purchaseId = $purchase->getId();
                    
                    $purchase = $entityManager->createQueryBuilder()
                        ->select('p', 'pi', 'prod')
                        ->from(Purchase::class, 'p')
                        ->leftJoin('p.purchaseItems', 'pi')
                        ->leftJoin('pi.product', 'prod')
                        ->where('p.id = :id')
                        ->setParameter('id', $purchaseId)
                        ->getQuery()
                        ->getOneOrNullResult();
                    
                    if (!$purchase) {
                        throw new \Exception('Achat non trouvé');
                    }
                    
                    // Calculer les totaux
                    $totalQuantity = 0;
                    $totalAmount = 0;
                    
                    foreach ($purchase->getPurchaseItems() as $item) {
                        $totalQuantity += $item->getQuantity();
                        $totalAmount += $item->getTotalPrice();
                    }
                    
                    $purchaseTotals = [
                        'total_items' => count($purchase->getPurchaseItems()),
                        'total_quantity' => $totalQuantity,
                        'total_amount' => $totalAmount
                    ];
                    
                    // Générer et stocker le PDF
                    $this->generateAndStorePurchasePdf($purchase, $entityManager, $purchaseTotals);
                    $entityManager->flush();
                    
                    $filePath = $this->getParameter('bon_commande_directory') . '/' . $purchase->getBonCommande();
                }
                
                $filename = 'bon-commande-' . $purchase->getPurchaseNumber() . '.pdf';
                
                return $this->file($filePath, $filename, ResponseHeaderBag::DISPOSITION_INLINE);
            } else {
                // Même correction pour recu-achat...
                $filePath = null;
                if ($purchase->getRecuAchat()) {
                    $filePath = $this->getParameter('recu_achat_directory') . '/' . $purchase->getRecuAchat();
                }
                
                if (!$filePath || !file_exists($filePath)) {
                    // CORRECTION ICI : Recharger avec les items
                    $purchaseId = $purchase->getId();
                    
                    $purchase = $entityManager->createQueryBuilder()
                        ->select('p', 'pi', 'prod')
                        ->from(Purchase::class, 'p')
                        ->leftJoin('p.purchaseItems', 'pi')
                        ->leftJoin('pi.product', 'prod')
                        ->where('p.id = :id')
                        ->setParameter('id', $purchaseId)
                        ->getQuery()
                        ->getOneOrNullResult();
                    
                    if (!$purchase) {
                        throw new \Exception('Achat non trouvé');
                    }
                    
                    // Générer et stocker le PDF
                    $this->generateAndStoreReceiptPdf($purchase, $entityManager);
                    $entityManager->flush();
                    
                    $filePath = $this->getParameter('recu_achat_directory') . '/' . $purchase->getRecuAchat();
                }
                
                $filename = 'recu-achat-' . $purchase->getPurchaseNumber() . '.pdf';
                
                return $this->file($filePath, $filename, ResponseHeaderBag::DISPOSITION_INLINE);
            }
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de la génération du PDF: ' . $e->getMessage());
            return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
        }
    }

    #[Route('/{id}/view-pdf', name: 'admin_purchase_view_pdf', methods: ['GET'])]
    public function viewPdf(Purchase $purchase, Request $request): Response
    {
        $type = $request->query->get('type', 'bon-commande');
        
        if ($type === 'bon-commande' && $purchase->getBonCommande()) {
            $filePath = $this->getParameter('bon_commande_directory') . '/' . $purchase->getBonCommande();
            if (file_exists($filePath)) {
                return $this->file($filePath, null, ResponseHeaderBag::DISPOSITION_INLINE);
            }
        } elseif ($type === 'recu-achat' && $purchase->getRecuAchat()) {
            $filePath = $this->getParameter('recu_achat_directory') . '/' . $purchase->getRecuAchat();
            if (file_exists($filePath)) {
                return $this->file($filePath, null, ResponseHeaderBag::DISPOSITION_INLINE);
            }
        }
        
        // Si le PDF n'existe pas, le générer
        return $this->redirectToRoute('admin_purchase_generate_pdf', [
            'id' => $purchase->getId(),
            'type' => $type
        ]);
    }

    #[Route('/{id}/download-pdf', name: 'admin_purchase_download_pdf', methods: ['GET'])]
    public function downloadPdf(Purchase $purchase, Request $request): Response
    {
        $type = $request->query->get('type', 'bon-commande');
        
        if ($type === 'bon-commande') {
            if (!$purchase->getBonCommande()) {
                $this->addFlash('error', 'Le bon de commande n\'a pas encore été généré.');
                return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
            }
            
            $filePath = $this->getParameter('bon_commande_directory') . '/' . $purchase->getBonCommande();
            if (!file_exists($filePath)) {
                $this->addFlash('error', 'Le fichier PDF n\'existe pas.');
                return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
            }
            
            $filename = 'bon-commande-' . $purchase->getPurchaseNumber() . '.pdf';
            
            return $this->file($filePath, $filename, ResponseHeaderBag::DISPOSITION_ATTACHMENT);
        } elseif ($type === 'recu-achat') {
            if (!$purchase->getRecuAchat()) {
                $this->addFlash('error', 'Le reçu d\'achat n\'a pas encore été généré.');
                return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
            }
            
            $filePath = $this->getParameter('recu_achat_directory') . '/' . $purchase->getRecuAchat();
            if (!file_exists($filePath)) {
                $this->addFlash('error', 'Le fichier PDF n\'existe pas.');
                return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
            }
            
            $filename = 'recu-achat-' . $purchase->getPurchaseNumber() . '.pdf';
            
            return $this->file($filePath, $filename, ResponseHeaderBag::DISPOSITION_ATTACHMENT);
        }
        
        $this->addFlash('error', 'Type de document invalide.');
        return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
    }

    #[Route('/{id}/cancel', name: 'admin_purchase_cancel', methods: ['POST'])]
    public function cancelPurchase(
        Purchase $purchase,
        Request $request,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): JsonResponse {
        if (!$purchase->canCancel()) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Cet achat ne peut plus être annulé.'
            ], 400);
        }

        $reason = $request->request->get('reason', '');

        if (empty($reason)) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Veuillez indiquer une raison d\'annulation.'
            ], 400);
        }

        try {
            $purchase->setStatus(Purchase::STATUS_CANCELLED);
            $purchase->setCancellationReason($reason);
            $purchase->setCancelledAt(new \DateTimeImmutable());
            $purchase->setCancelledBy($this->getUser());

            $entityManager->flush();

            // Envoyer un email d'annulation au fournisseur
            $this->sendCancellationEmail($purchase, $mailer, $reason);

            return new JsonResponse([
                'success' => true,
                'message' => 'Achat annulé avec succès.'
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur lors de l\'annulation: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/{id}/approve', name: 'admin_purchase_approve', methods: ['POST'])]
    public function approvePurchase(
        Purchase $purchase,
        Request $request,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): JsonResponse {
        if ($purchase->getStatus() !== Purchase::STATUS_DRAFT) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Cet achat n\'est pas un brouillon.'
            ], 400);
        }

        $data = json_decode($request->getContent(), true);
        $notes = $data['notes'] ?? '';

        if ($notes) {
            $purchase->setNotes($notes);
        }

        $purchase->setStatus(Purchase::STATUS_CONFIRMED);
        $purchase->setConfirmedAt(new \DateTimeImmutable());

        $entityManager->flush();
        
        // Calculer les totaux pour le PDF
        $totalQuantity = 0;
        $totalAmount = 0;
        
        foreach ($purchase->getPurchaseItems() as $item) {
            $totalQuantity += $item->getQuantity();
            $totalAmount += $item->getTotalPrice();
        }
        
        $purchaseTotals = [
            'total_items' => count($purchase->getPurchaseItems()),
            'total_quantity' => $totalQuantity,
            'total_amount' => $totalAmount
        ];
        
        // Générer et stocker le PDF de bon de commande
        $this->generateAndStorePurchasePdf($purchase, $entityManager, $purchaseTotals);
        $entityManager->flush();

        if ($purchase->getSupplier() && $purchase->getSupplier()->getEmail()) {
            $this->sendOrderEmail($purchase, $mailer);
        }

        return new JsonResponse([
            'success' => true,
            'message' => 'Achat approuvé et confirmé avec succès.'
        ]);
    }

    #[Route('/{purchaseId}/add-product/{productId}', name: 'admin_purchase_add_product_to_purchase', methods: ['POST'])]
    public function addProductToPurchase(
        int $purchaseId,
        int $productId,
        Request $request,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $purchase = $entityManager->getRepository(Purchase::class)->find($purchaseId);
        $product = $entityManager->getRepository(Product::class)->find($productId);
        
        if (!$purchase || !$product) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Achat ou produit non trouvé'
            ], 404);
        }
        
        if ($purchase->getStatus() !== Purchase::STATUS_CONFIRMED) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Cet achat ne peut plus être modifié'
            ], 400);
        }
        
        $data = json_decode($request->getContent(), true);
        $quantity = $data['quantity'] ?? 1;
        
        $existingItem = null;
        foreach ($purchase->getPurchaseItems() as $item) {
            if ($item->getProduct()->getId() === $productId) {
                $existingItem = $item;
                break;
            }
        }
        
        if ($existingItem) {
            $existingItem->setQuantity($existingItem->getQuantity() + $quantity);
            $itemTotal = (float) $existingItem->getUnitPrice() * $existingItem->getQuantity();
            $existingItem->setTotalPrice(number_format($itemTotal, 2, '.', ''));
        } else {
            $purchaseItem = new PurchaseItem();
            $purchaseItem->setProduct($product);
            $purchaseItem->setPurchase($purchase);
            $purchaseItem->setQuantity($quantity);
            $purchaseItem->setUnitPrice($product->getPurchasePrice());
            $purchaseItem->setBatchNumber($this->generateBatchNumber());
            $purchaseItem->setCreatedAt(new \DateTime());
            
            $itemTotal = (float) $product->getPurchasePrice() * $quantity;
            $purchaseItem->setTotalPrice(number_format($itemTotal, 2, '.', ''));
            
            if ($product->hasExpiryDate()) {
                $purchaseItem->setManufacturingDate(new \DateTime());
                $expiryDate = new \DateTime();
                $expiryDate->modify('+1 year');
                $purchaseItem->setExpiryDate($expiryDate);
            }
            
            $entityManager->persist($purchaseItem);
        }
        
        $purchase->calculateTotalAmount();
        $entityManager->flush();
        
        return new JsonResponse([
            'success' => true,
            'message' => 'Produit ajouté avec succès',
            'total_amount' => $purchase->getTotalAmount()
        ]);
    }

    #[Route('/{id}/update-items', name: 'admin_purchase_update_items', methods: ['POST'])]
    public function updatePurchaseItems(
        Purchase $purchase,
        Request $request,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        if ($purchase->getStatus() !== Purchase::STATUS_DRAFT) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Cet achat ne peut plus être modifié.'
            ], 400);
        }

        $data = json_decode($request->getContent(), true);
        $items = $data['items'] ?? [];

        foreach ($items as $itemData) {
            $item = $entityManager->getRepository(PurchaseItem::class)->find($itemData['id']);
            
            if ($item && $item->getPurchase()->getId() === $purchase->getId()) {
                if (isset($itemData['batch_number'])) {
                    $item->setBatchNumber($itemData['batch_number']);
                }
                
                if (isset($itemData['quantity'])) {
                    $item->setQuantity($itemData['quantity']);
                }
                
                if (isset($itemData['unit_price'])) {
                    $item->setUnitPrice($itemData['unit_price']);
                    $itemTotal = $itemData['quantity'] * $itemData['unit_price'];
                    $item->setTotalPrice(number_format($itemTotal, 2, '.', ''));
                }
                
                if ($item->getProduct()->hasExpiryDate()) {
                    if (!empty($itemData['manufacturing_date'])) {
                        $item->setManufacturingDate(new \DateTime($itemData['manufacturing_date']));
                    }
                    if (!empty($itemData['expiry_date'])) {
                        $item->setExpiryDate(new \DateTime($itemData['expiry_date']));
                    }
                }
            }
        }

        $purchase->calculateTotalAmount();
        $entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'message' => 'Produits mis à jour avec succès.',
            'total_amount' => $purchase->getTotalAmount()
        ]);
    }

    #[Route('/{id}/edit-item/{itemId}', name: 'admin_purchase_edit_item', methods: ['POST'])]
    public function editPurchaseItem(
        Purchase $purchase,
        int $itemId,
        Request $request,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        if ($purchase->getStatus() !== Purchase::STATUS_CONFIRMED) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Cet achat ne peut plus être modifié.'
            ], 400);
        }
        
        $item = $entityManager->getRepository(PurchaseItem::class)->find($itemId);
        
        if (!$item || $item->getPurchase()->getId() !== $purchase->getId()) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Produit non trouvé.'
            ], 404);
        }

        try {
            $batchNumber = $request->request->get('batch_number');
            $quantity = $request->request->getInt('quantity');
            $manufacturingDate = $request->request->get('manufacturing_date');
            $expiryDate = $request->request->get('expiry_date');
            
            if (empty($batchNumber)) {
                $batchNumber = $this->generateBatchNumber();
            }
            
            if ($quantity <= 0) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'La quantité doit être supérieure à 0.'
                ], 400);
            }
            
            $item->setBatchNumber($batchNumber);
            $item->setQuantity($quantity);
            
            // Recalculer le total avec le prix unitaire original
            $itemTotal = $quantity * $item->getUnitPrice();
            $item->setTotalPrice(number_format($itemTotal, 2, '.', ''));
            
            if ($item->getProduct()->hasExpiryDate()) {
                if (!empty($manufacturingDate)) {
                    try {
                        $item->setManufacturingDate(new \DateTime($manufacturingDate));
                    } catch (\Exception $e) {
                        // Date invalide, on ne fait rien
                    }
                }
                
                if (!empty($expiryDate)) {
                    try {
                        $item->setExpiryDate(new \DateTime($expiryDate));
                    } catch (\Exception $e) {
                        // Date invalide, on ne fait rien
                    }
                }
            }

            $purchase->calculateTotalAmount();
            $entityManager->flush();

            return new JsonResponse([
                'success' => true,
                'message' => 'Produit modifié avec succès.',
                'total_amount' => $purchase->getTotalAmount()
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/{id}/remove-item/{itemId}', name: 'admin_purchase_remove_item', methods: ['DELETE'])]
    public function removePurchaseItem(
        Purchase $purchase,
        int $itemId,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $item = $entityManager->getRepository(PurchaseItem::class)->find($itemId);

        if (!$item || $item->getPurchase()->getId() !== $purchase->getId()) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Produit non trouvé.'
            ], 404);
        }

        if ($purchase->getStatus() !== Purchase::STATUS_CONFIRMED) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Cet achat ne peut plus être modifié.'
            ], 400);
        }

        try {
            $entityManager->remove($item);
            $purchase->calculateTotalAmount();
            $entityManager->flush();

            return new JsonResponse([
                'success' => true,
                'message' => 'Produit retiré avec succès.'
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/{id}/receive-api', name: 'admin_purchase_receive_api', methods: ['POST'])]
    public function receivePurchaseApi(
        Purchase $purchase,
        Request $request,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): JsonResponse {
        if ($purchase->getStatus() !== Purchase::STATUS_CONFIRMED) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Cette commande ne peut pas être réceptionnée'
            ], 400);
        }
        
        $data = json_decode($request->getContent(), true);
        $notes = $data['notes'] ?? '';
        
        try {
            // CORRECTION ICI : Sauvegarder les notes de réception proprement
            if ($notes) {
                $existingNotes = $purchase->getNotes() ?? '';
                if (!empty($existingNotes)) {
                    $purchase->setNotes($existingNotes . "\n\n--- NOTES DE RÉCEPTION ---\n" . $notes);
                } else {
                    $purchase->setNotes("NOTES DE RÉCEPTION:\n" . $notes);
                }
            }
            
            // Vérifier que tous les produits périssables ont des dates d'expiration
            $hasMissingDates = false;
            $missingDatesProducts = [];
            
            foreach ($purchase->getPurchaseItems() as $item) {
                $product = $item->getProduct();
                
                if ($product->hasExpiryDate()) {
                    if (!$item->getExpiryDate()) {
                        $hasMissingDates = true;
                        $missingDatesProducts[] = $product->getName();
                    }
                }
                
                if (!$item->getBatchNumber()) {
                    $item->setBatchNumber($this->generateBatchNumber());
                }
            }
            
            if ($hasMissingDates) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Les produits suivants nécessitent une date d\'expiration: ' . implode(', ', $missingDatesProducts)
                ], 400);
            }
            
            $purchase->setStatus(Purchase::STATUS_RECEIVED);
            $purchase->setReceivedAt(new \DateTimeImmutable());
            
            // Mettre à jour les stocks et créer les mouvements de stock
            foreach ($purchase->getPurchaseItems() as $item) {
                $product = $item->getProduct();
                $currentStock = $product->getStockQuantity();
                $product->setStockQuantity($currentStock + $item->getQuantity());
                $entityManager->persist($product);
                
                // Créer le StockBatch
                $stockBatch = new StockBatch();
                $stockBatch->setBatchNumber($item->getBatchNumber());
                $stockBatch->setInitialQuantity($item->getQuantity());
                $stockBatch->setCurrentQuantity($item->getQuantity());
                $stockBatch->setUnitPrice($item->getUnitPrice());
                $stockBatch->setProduct($product);
                $stockBatch->setPurchaseItem($item);
                $stockBatch->setCreatedAt(new \DateTime());
                $stockBatch->setIsActive(true);
                
                if ($item->getManufacturingDate()) {
                    $stockBatch->setManufacturingDate($item->getManufacturingDate());
                }
                
                if ($item->getExpiryDate()) {
                    $stockBatch->setExpiryDate($item->getExpiryDate());
                }
                
                $entityManager->persist($stockBatch);
                
                // Créer le mouvement de stock
                $stockMovement = new StockMovement();
                $stockMovement->setMovementType('PURCHASE');
                $stockMovement->setQuantity($item->getQuantity());
                $stockMovement->setUnitPrice($item->getUnitPrice());
                $stockMovement->setProduct($product);
                $stockMovement->setPurchaseItem($item);
                $stockMovement->setStockBatch($stockBatch);
                $stockMovement->setReferenceId($purchase->getId());
                $stockMovement->setCreatedAt(new \DateTime());
                $stockMovement->setUser($this->getUser());
                
                // Ajouter les notes spécifiques à la réception
                $movementNotes = 'Réception de la commande #' . $purchase->getPurchaseNumber();
                if ($notes) {
                    $movementNotes .= "\nNotes: " . $notes;
                }
                $stockMovement->setNotes($movementNotes);
                
                $entityManager->persist($stockMovement);
            }
            
            // Générer et stocker le PDF de réception
            $this->generateAndStoreReceiptPdf($purchase, $entityManager);
            
            $entityManager->flush();
            
            // Envoyer l'email de réception au fournisseur
            $this->sendReceiptEmail($purchase, $mailer);
            
            return new JsonResponse([
                'success' => true,
                'message' => 'Réception enregistrée avec succès',
                'redirect_url' => $this->generateUrl('admin_purchase_show', ['id' => $purchase->getId()])
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/cart/edit/{id}', name: 'admin_purchase_cart_edit', methods: ['GET'])]
    public function cartEdit(
        Purchase $purchase,
        PurchaseCartService $cartService,
        EntityManagerInterface $entityManager
    ): Response {
        if ($purchase->getStatus() !== Purchase::STATUS_DRAFT) {
            $this->addFlash('error', 'Cet achat ne peut plus être modifié.');
            return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
        }

        $cartService->clear();
        
        if ($purchase->getSupplier()) {
            $cartService->setSupplier($purchase->getSupplier());
        }
        
        foreach ($purchase->getPurchaseItems() as $item) {
            $product = $entityManager->getRepository(Product::class)->find($item->getProduct()->getId());
            if ($product) {
                $cartService->addItem(
                    $product,
                    $item->getQuantity(),
                    $item->getBatchNumber(),
                    $item->getManufacturingDate(),
                    $item->getExpiryDate()
                );
            }
        }

        return $this->redirectToRoute('admin_purchase_cart');
    }

    /**
     * Méthodes privées utilitaires
     */
    private function generatePurchaseNumber(): string
    {
        $timestamp = (new \DateTime())->format('YmdHis');
        $random = rand(100, 999);
        
        return sprintf('ACH-%s%s', $timestamp, $random);
    }

    private function generateBatchNumber(): string
    {
        return 'LOT-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
    }

    private function sendOrderEmail(Purchase $purchase, MailerInterface $mailer): void
    {
        if (!$purchase->getSupplier() || !$purchase->getSupplier()->getEmail()) {
            return;
        }
        
        try {
            // Calculer les totaux pour l'email
            $totalQuantity = 0;
            foreach ($purchase->getPurchaseItems() as $item) {
                $totalQuantity += $item->getQuantity();
            }
            
            $email = (new Email())
                ->from($this->getParameter('app.email_from'))
                ->to($purchase->getSupplier()->getEmail())
                ->subject('Bon de commande #' . $purchase->getPurchaseNumber())
                ->html($this->renderView('emails/purchase_order.html.twig', [
                    'purchase' => $purchase,
                    'total_quantity' => $totalQuantity,
                    'total_items' => count($purchase->getPurchaseItems())
                ]));
            
            $mailer->send($email);
            
            // Log pour débogage
            error_log('Email de commande envoyé à: ' . $purchase->getSupplier()->getEmail());
        } catch (\Exception $e) {
            error_log('Erreur envoi email commande: ' . $e->getMessage());
        }
    }

    private function sendReceiptEmail(Purchase $purchase, MailerInterface $mailer): void
    {
        if (!$purchase->getSupplier() || !$purchase->getSupplier()->getEmail()) {
            return;
        }
        
        try {
            // Calculer les totaux pour l'email
            $totalQuantity = 0;
            foreach ($purchase->getPurchaseItems() as $item) {
                $totalQuantity += $item->getQuantity();
            }
            
            $email = (new Email())
                ->from($this->getParameter('app.email_from'))
                ->to($purchase->getSupplier()->getEmail())
                ->subject('Confirmation de réception - Commande #' . $purchase->getPurchaseNumber())
                ->html($this->renderView('emails/purchase_receipt.html.twig', [
                    'purchase' => $purchase,
                    'total_quantity' => $totalQuantity,
                    'total_items' => count($purchase->getPurchaseItems())
                ]));
            
            $mailer->send($email);
            
            error_log('Email de réception envoyé à: ' . $purchase->getSupplier()->getEmail());
        } catch (\Exception $e) {
            error_log('Erreur envoi email réception: ' . $e->getMessage());
        }
    }

    private function sendCancellationEmail(Purchase $purchase, MailerInterface $mailer, string $reason): void
    {
        if (!$purchase->getSupplier() || !$purchase->getSupplier()->getEmail()) {
            return;
        }
        
        try {
            // Calculer les totaux pour l'email
            $totalQuantity = 0;
            foreach ($purchase->getPurchaseItems() as $item) {
                $totalQuantity += $item->getQuantity();
            }
            
            $email = (new Email())
                ->from($this->getParameter('app.email_from'))
                ->to($purchase->getSupplier()->getEmail())
                ->subject('Annulation de commande #' . $purchase->getPurchaseNumber())
                ->html($this->renderView('emails/purchase_cancellation.html.twig', [
                    'purchase' => $purchase,
                    'reason' => $reason,
                    'total_quantity' => $totalQuantity,
                    'total_items' => count($purchase->getPurchaseItems())
                ]));
            
            $mailer->send($email);
            
            error_log('Email d\'annulation envoyé à: ' . $purchase->getSupplier()->getEmail());
        } catch (\Exception $e) {
            error_log('Erreur envoi email annulation: ' . $e->getMessage());
        }
    }

    /**
     * Génère et stocke le PDF de bon de commande
     * @param array $totals Tableau contenant les totaux calculés
     */
    private function generateAndStorePurchasePdf(Purchase $purchase, EntityManagerInterface $entityManager, array $totals = []): void
{
    try {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        $options->set('tempDir', $this->projectDir . '/var/tmp');
        $options->set('isPhpEnabled', true);
        $options->set('isFontSubsettingEnabled', true);
        
        $dompdf = new Dompdf($options);
        
        // CORRECTION ICI : Recharger l'entité avec les items
        $purchaseId = $purchase->getId();
        
        // Recharger l'achat avec les items et les produits
        $purchase = $entityManager->createQueryBuilder()
            ->select('p', 'pi', 'prod')
            ->from(Purchase::class, 'p')
            ->leftJoin('p.purchaseItems', 'pi')
            ->leftJoin('pi.product', 'prod')
            ->where('p.id = :id')
            ->setParameter('id', $purchaseId)
            ->getQuery()
            ->getOneOrNullResult();
        
        if (!$purchase) {
            throw new \Exception('Achat non trouvé après rechargement');
        }
        
        // Calculer les totaux si non fournis
        if (empty($totals)) {
            $totalQuantity = 0;
            $totalAmount = 0;
            
            foreach ($purchase->getPurchaseItems() as $item) {
                $totalQuantity += $item->getQuantity();
                $totalAmount += $item->getTotalPrice();
            }
            
            $totals = [
                'total_items' => count($purchase->getPurchaseItems()),
                'total_quantity' => $totalQuantity,
                'total_amount' => $totalAmount
            ];
        }
        
        // DEBUG: Vérifier ce qui est passé au template
        error_log('DEBUG generateAndStorePurchasePdf:');
        error_log('Purchase ID: ' . $purchase->getId());
        error_log('Purchase Items count: ' . count($purchase->getPurchaseItems()));
        
        foreach ($purchase->getPurchaseItems() as $item) {
            error_log('Item: ' . $item->getId() . ' - Product: ' . $item->getProduct()->getName() . ' - Qty: ' . $item->getQuantity());
        }
        
        $html = $this->renderView('admin/purchase/pdf_order.html.twig', [
            'purchase' => $purchase,
            'total_items' => $totals['total_items'],
            'total_quantity' => $totals['total_quantity'],
            'subtotal' => $totals['total_amount'],
        ]);
        
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        // Générer le nom de fichier
        $filename = 'bon-commande-' . $purchase->getPurchaseNumber() . '-' . date('YmdHis') . '.pdf';
        $uploadDir = $this->getParameter('bon_commande_directory');
        
        // Créer le dossier s'il n'existe pas
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        // Sauvegarder le PDF
        $output = $dompdf->output();
        $filePath = $uploadDir . '/' . $filename;
        file_put_contents($filePath, $output);
        
        // Mettre à jour l'entité originale
        $originalPurchase = $entityManager->getRepository(Purchase::class)->find($purchaseId);
        $originalPurchase->setBonCommande($filename);
        $entityManager->persist($originalPurchase);
        
        // Flush pour sauvegarder immédiatement
        $entityManager->flush();
        
    } catch (\Exception $e) {
        error_log('Erreur génération PDF bon de commande: ' . $e->getMessage());
        throw new \Exception('Erreur lors de la génération du PDF: ' . $e->getMessage());
    }
}

    /**
     * Génère et stocke le PDF de réception d'achat
     */
    private function generateAndStoreReceiptPdf(Purchase $purchase, EntityManagerInterface $entityManager): void
{
    try {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        
        // Utiliser le chemin du projet depuis le constructeur
        $options->set('tempDir', $this->projectDir . '/var/tmp');
        
        $dompdf = new Dompdf($options);
        
        // CORRECTION ICI : Recharger l'entité avec les items
        $purchaseId = $purchase->getId();
        
        // Recharger l'achat avec les items et les produits
        $purchase = $entityManager->createQueryBuilder()
            ->select('p', 'pi', 'prod')
            ->from(Purchase::class, 'p')
            ->leftJoin('p.purchaseItems', 'pi')
            ->leftJoin('pi.product', 'prod')
            ->where('p.id = :id')
            ->setParameter('id', $purchaseId)
            ->getQuery()
            ->getOneOrNullResult();
        
        if (!$purchase) {
            throw new \Exception('Achat non trouvé après rechargement');
        }
        
        // Calculer le nombre total d'articles et la quantité totale
        $totalItems = count($purchase->getPurchaseItems());
        $totalQuantity = 0;
        $totalAmount = 0;
        
        foreach ($purchase->getPurchaseItems() as $item) {
            $totalQuantity += $item->getQuantity();
            $totalAmount += $item->getTotalPrice();
        }
        
        $html = $this->renderView('admin/purchase/pdf_receipt.html.twig', [
            'purchase' => $purchase,
            'total_items' => $totalItems,
            'total_quantity' => $totalQuantity,
            'subtotal' => $totalAmount,
        ]);
        
        $dompdf->loadHtml($html, 'UTF-8');
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $output = $dompdf->output();
        
        // Nom du fichier
        $filename = 'recu-achat-' . $purchase->getPurchaseNumber() . '-' . date('YmdHis') . '.pdf';
        
        // Chemin du dossier
        $uploadDir = $this->getParameter('recu_achat_directory');
        
        // Créer le dossier s'il n'existe pas
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        // Chemin complet du fichier
        $filePath = $uploadDir . '/' . $filename;
        
        // Sauvegarder le fichier
        file_put_contents($filePath, $output);
        
        // Mettre à jour l'entité originale
        $originalPurchase = $entityManager->getRepository(Purchase::class)->find($purchaseId);
        $originalPurchase->setRecuAchat($filename);
        $entityManager->persist($originalPurchase);
        
        // Flush pour sauvegarder immédiatement
        $entityManager->flush();
        
    } catch (\Exception $e) {
        error_log('Erreur génération PDF réception: ' . $e->getMessage());
        throw new \Exception('Erreur génération PDF réception: ' . $e->getMessage());
    }
}
}