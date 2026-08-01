<?php
// src/Controller/Marketplace/CartController.php

namespace App\Controller\Marketplace;

use App\Entity\Customer;
use App\Entity\Cart;
use App\Entity\User;
use App\Entity\CartItem;
use App\Entity\Order;
use App\Entity\OrderItem;
use App\Repository\CartRepository;
use App\Repository\ProductRepository;
use App\Service\Sale\PromotionCalculator;
use App\Service\FedaPayService;
use App\Service\OrderService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;
use Twig\Environment;

#[Route('/marketplace/cart')]
class CartController extends AbstractController
{
    public function __construct(
        private CartRepository $cartRepository,
        private ProductRepository $productRepository,
        private EntityManagerInterface $entityManager,
        private PromotionCalculator $promotionCalculator,
        private FedaPayService $fedaPayService,
        private OrderService $orderService,
        private MailerInterface $mailer,
        private Environment $twig,
        private LoggerInterface $logger
    ) {}

    #[Route('/', name: 'marketplace_cart')]
    public function index(): Response
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('marketplace_login');
        }

        $cart = $this->cartRepository->findOneBy(['customer' => $customer]);
        if (!$cart) {
            $cart = new Cart();
            $cart->setCustomer($customer);
            $this->entityManager->persist($cart);
            $this->entityManager->flush();
        }

        $items = $cart->getItems();
        $cartItems = [];
        $subtotal = 0;
        $totalDiscount = 0;
        $grandTotal = 0;

        foreach ($items as $item) {
            $product = $item->getProduct();
            $promotionInfo = $this->promotionCalculator->getBestProductPromotion($product);
            
            $itemPrice = $promotionInfo['final_price'];
            $itemTotal = $itemPrice * $item->getQuantity();
            $itemDiscount = ($promotionInfo['original_price'] - $itemPrice) * $item->getQuantity();
            
            $cartItems[] = [
                'id' => $item->getId(),
                'product' => $product,
                'quantity' => $item->getQuantity(),
                'notes' => $item->getNotes(),
                'unit_price' => $promotionInfo['original_price'],
                'discounted_price' => $itemPrice,
                'total' => $itemTotal,
                'discount' => $itemDiscount,
                'promotion' => $promotionInfo,
                'image' => $product->getImage() ? '/uploads/products/' . $product->getImage() : null
            ];
            
            $subtotal += $promotionInfo['original_price'] * $item->getQuantity();
            $totalDiscount += $itemDiscount;
            $grandTotal += $itemTotal;
        }

        return $this->render('marketplace/cart/index.html.twig', [
            'cart' => $cart,
            'items' => $cartItems,
            'subtotal' => $subtotal,
            'totalDiscount' => $totalDiscount,
            'grandTotal' => $grandTotal,
            'itemsCount' => $cart->getItemsCount(),
            'fedaPayPublicKey' => $_ENV['FEDAPAY_PUBLIC_KEY'] ?? '',
        ]);
    }

    #[Route('/add', name: 'marketplace_cart_add', methods: ['POST'])]
    public function add(Request $request): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        $data = json_decode($request->getContent(), true);
        $productId = $data['productId'] ?? null;
        $quantity = max(1, (int) ($data['quantity'] ?? 1));
        $notes = $data['notes'] ?? null;

        if (!$productId) {
            return $this->json(['success' => false, 'error' => 'Produit non spécifié']);
        }

        $product = $this->productRepository->find($productId);
        if (!$product || !$product->isActive()) {
            return $this->json(['success' => false, 'error' => 'Produit non disponible']);
        }

        $cart = $this->cartRepository->findOneBy(['customer' => $customer]);
        if (!$cart) {
            $cart = new Cart();
            $cart->setCustomer($customer);
            $this->entityManager->persist($cart);
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
            $existingItem->setQuantity($newQuantity);
            if ($notes !== null) {
                $existingItem->setNotes($notes);
            }
        } else {
            $cartItem = new CartItem();
            $cartItem->setCart($cart);
            $cartItem->setProduct($product);
            $cartItem->setQuantity($quantity);
            $cartItem->setNotes($notes);
            $this->entityManager->persist($cartItem);
        }

        $cart->setUpdatedAt(new \DateTimeImmutable());
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'cartCount' => $cart->getItemsCount(),
            'message' => 'Produit ajouté au panier'
        ]);
    }

    #[Route('/update/{id}', name: 'marketplace_cart_update', methods: ['POST'])]
    public function update(int $id, Request $request): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        $data = json_decode($request->getContent(), true);
        $quantity = (int) ($data['quantity'] ?? 1);
        $notes = $data['notes'] ?? null;

        $cartItem = $this->entityManager->getRepository(CartItem::class)->find($id);
        if (!$cartItem || $cartItem->getCart()->getCustomer()->getId() !== $customer->getId()) {
            return $this->json(['success' => false, 'error' => 'Article non trouvé']);
        }

        if ($quantity <= 0) {
            $this->entityManager->remove($cartItem);
        } else {
            $cartItem->setQuantity($quantity);
            if ($notes !== null) {
                $cartItem->setNotes($notes);
            }
        }

        $cartItem->getCart()->setUpdatedAt(new \DateTimeImmutable());
        $this->entityManager->flush();

        $cart = $cartItem->getCart();
        $subtotal = 0;
        $totalDiscount = 0;
        $grandTotal = 0;

        foreach ($cart->getItems() as $item) {
            $product = $item->getProduct();
            $promotionInfo = $this->promotionCalculator->getBestProductPromotion($product);
            $itemPrice = $promotionInfo['final_price'];
            $itemTotal = $itemPrice * $item->getQuantity();
            $itemDiscount = ($promotionInfo['original_price'] - $itemPrice) * $item->getQuantity();
            
            $subtotal += $promotionInfo['original_price'] * $item->getQuantity();
            $totalDiscount += $itemDiscount;
            $grandTotal += $itemTotal;
        }

        return $this->json([
            'success' => true,
            'cartCount' => $cart->getItemsCount(),
            'subtotal' => $subtotal,
            'totalDiscount' => $totalDiscount,
            'grandTotal' => $grandTotal,
            'message' => 'Panier mis à jour'
        ]);
    }

    #[Route('/remove/{id}', name: 'marketplace_cart_remove', methods: ['POST'])]
    public function remove(int $id): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        $cartItem = $this->entityManager->getRepository(CartItem::class)->find($id);
        if (!$cartItem || $cartItem->getCart()->getCustomer()->getId() !== $customer->getId()) {
            return $this->json(['success' => false, 'error' => 'Article non trouvé']);
        }

        $cart = $cartItem->getCart();
        $this->entityManager->remove($cartItem);
        $cart->setUpdatedAt(new \DateTimeImmutable());
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'cartCount' => $cart->getItemsCount(),
            'message' => 'Article supprimé du panier'
        ]);
    }

    #[Route('/clear', name: 'marketplace_cart_clear', methods: ['POST'])]
    public function clear(): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        $cart = $this->cartRepository->findOneBy(['customer' => $customer]);
        if ($cart) {
            foreach ($cart->getItems() as $item) {
                $this->entityManager->remove($item);
            }
            $cart->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->flush();
        }

        return $this->json([
            'success' => true,
            'message' => 'Panier vidé'
        ]);
    }

    #[Route('/checkout', name: 'marketplace_cart_checkout', methods: ['POST'])]
    public function checkout(Request $request): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        $data = json_decode($request->getContent(), true);
        
        $phone = $data['phone'] ?? null;
        $email = $data['email'] ?? $customer->getEmail();
        $address = $data['address'] ?? null;
        $city = $data['city'] ?? null;
        $zipcode = $data['zipcode'] ?? null;
        $country = $data['country'] ?? 'Bénin';
        $latitude = $data['latitude'] ?? null;
        $longitude = $data['longitude'] ?? null;

        if (!$phone) {
            return $this->json(['success' => false, 'error' => 'Numéro de téléphone requis']);
        }

        if (!$address) {
            return $this->json(['success' => false, 'error' => 'Adresse de livraison requise']);
        }

        $cart = $this->cartRepository->findOneBy(['customer' => $customer]);
        if (!$cart || $cart->getItems()->count() === 0) {
            return $this->json(['success' => false, 'error' => 'Panier vide']);
        }

        try {
            // ✅ Créer la commande SANS envoyer d'email (send_email = false)
            $order = $this->orderService->createOrderFromCart($customer, $cart, [
                'phone' => $phone,
                'email' => $email,
                'address' => $address,
                'city' => $city,
                'zipcode' => $zipcode,
                'country' => $country,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'payment_method' => 'feda_pay',
                'send_email' => false // ✅ Pas d'email ici
            ]);

            // ✅ URL de callback absolue avec order_id
            $callbackUrl = $this->generateUrl('marketplace_payment_callback', [
                'order_id' => $order->getId()
            ], 0);

            // ✅ CORRECTION : Montant en FCFA (pas de multiplication)
            $amount = (int) $order->getGrandTotal();
            
            $this->logger->info('💰 Préparation paiement FedaPay', [
                'order_id' => $order->getId(),
                'order_number' => $order->getOrderNumber(),
                'grand_total' => $order->getGrandTotal(),
                'amount_sent' => $amount,
                'currency' => 'XOF'
            ]);

            $paymentUrl = $this->fedaPayService->createPayment([
                'amount' => $amount,
                'description' => 'Commande #' . $order->getOrderNumber(),
                'customer_email' => $email,
                'customer_name' => $customer->getFullName(),
                'reference' => $order->getOrderNumber(),
                'callback_url' => $callbackUrl,
                'currency' => 'XOF'
            ]);

            return $this->json([
                'success' => true,
                'order_id' => $order->getId(),
                'payment_url' => $paymentUrl,
                'redirect' => true,
                'amount' => $amount // Pour debug
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Checkout error: ' . $e->getMessage());
            return $this->json([
                'success' => false,
                'error' => 'Erreur lors de la validation de la commande: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/payment/callback', name: 'marketplace_payment_callback')]
    public function paymentCallback(Request $request): Response
    {
        $this->logger->info('🔔 Callback FedaPay reçu', [
            'method' => $request->getMethod(),
            'query' => $request->query->all(),
            'post' => $request->request->all(),
            'content' => $request->getContent()
        ]);

        // ✅ Récupérer tous les paramètres possibles
        $transactionId = $request->query->get('transaction_id') ?? $request->request->get('transaction_id');
        $orderId = $request->query->get('order_id') ?? $request->request->get('order_id');
        $status = $request->query->get('status') ?? $request->request->get('status');
        $reference = $request->query->get('reference') ?? $request->request->get('reference');

        $this->logger->info('📦 Paramètres extraits', [
            'transaction_id' => $transactionId,
            'order_id' => $orderId,
            'status' => $status,
            'reference' => $reference
        ]);

        $paymentSuccess = false;

        // ✅ Si on a l'order_id, récupérer la commande
        if ($orderId) {
            try {
                $order = $this->entityManager->getRepository(Order::class)->find($orderId);
                
                if ($order) {
                    $this->logger->info('✅ Commande trouvée', [
                        'order_id' => $orderId,
                        'order_number' => $order->getOrderNumber(),
                        'current_payment_status' => $order->getPaymentStatus(),
                        'current_order_status' => $order->getStatus()
                    ]);

                    // ✅ Si on a un transaction_id, vérifier le paiement
                    if ($transactionId) {
                        try {
                            $transaction = $this->fedaPayService->verifyPayment($transactionId);
                            
                            $this->logger->info('🔍 Transaction vérifiée', [
                                'transaction_id' => $transactionId,
                                'status' => $transaction['status'] ?? 'unknown'
                            ]);

                            if (isset($transaction['status']) && $transaction['status'] === 'approved') {
                                // ✅ Mettre à jour le statut de paiement
                                $order->setPaymentStatus('paid');
                                $order->setAmountPaid((string) $order->getGrandTotal());
                                
                                // ✅ Récupérer le Super Admin pour la déduction de stock
                                $superAdmin = $this->entityManager
                                    ->getRepository(User::class)
                                    ->createQueryBuilder('u')
                                    ->where('u.is_super_admin = true')
                                    ->setMaxResults(1)
                                    ->getQuery()
                                    ->getOneOrNullResult();

                                // ✅ DÉDUIRE LE STOCK (si disponible)
                                $stockIssues = [];
                                if ($superAdmin) {
                                    $stockResult = $this->orderService->deductStockForOrder($order, $superAdmin);
                                    $stockIssues = $stockResult['stock_issues'] ?? [];
                                    
                                    if ($stockResult['has_stock_issues']) {
                                        $order->setStatus(Order::STATUS_PENDING);
                                        $order->setNotes(($order->getNotes() ?? '') . "\n⚠️ Produits en rupture de stock.");
                                    } else {
                                        $order->setStatus(Order::STATUS_PROCESSING);
                                    }
                                    
                                    $this->logger->info('📦 Résultat de la déduction de stock', [
                                        'order_id' => $orderId,
                                        'has_stock_issues' => $stockResult['has_stock_issues'],
                                        'stock_issues_count' => count($stockIssues)
                                    ]);
                                } else {
                                    $order->setStatus(Order::STATUS_PENDING);
                                    $this->logger->warning('⚠️ Aucun Super Admin trouvé pour la déduction de stock', [
                                        'order_id' => $orderId
                                    ]);
                                }

                                $this->entityManager->flush();
                                $paymentSuccess = true;
                                
                                $this->logger->info('✅ Paiement approuvé pour la commande', [
                                    'order_id' => $orderId,
                                    'transaction_id' => $transactionId,
                                    'payment_status' => 'paid',
                                    'order_status' => $order->getStatus(),
                                    'stock_issues_count' => count($stockIssues)
                                ]);

                                // ✅ ENVOI DES EMAILS UNIQUEMENT ICI (paiement confirmé)
                                $this->sendPaymentConfirmation($order, $stockIssues);
                            }
                        } catch (\Exception $e) {
                            $this->logger->error('❌ Erreur lors de la vérification de la transaction', [
                                'error' => $e->getMessage(),
                                'transaction_id' => $transactionId
                            ]);
                        }
                    } else {
                        // ✅ Si pas de transaction_id, mais on a un statut
                        if ($status === 'approved' || $status === 'success' || $status === 'paid') {
                            // ✅ Mettre à jour le statut de paiement
                            $order->setPaymentStatus('paid');
                            $order->setAmountPaid((string) $order->getGrandTotal());
                            
                            // ✅ Récupérer le Super Admin pour la déduction de stock
                            $superAdmin = $this->entityManager
                                ->getRepository(User::class)
                                ->createQueryBuilder('u')
                                ->where('u.is_super_admin = true')
                                ->setMaxResults(1)
                                ->getQuery()
                                ->getOneOrNullResult();

                            // ✅ DÉDUIRE LE STOCK (si disponible)
                            $stockIssues = [];
                            if ($superAdmin) {
                                $stockResult = $this->orderService->deductStockForOrder($order, $superAdmin);
                                $stockIssues = $stockResult['stock_issues'] ?? [];
                                
                                if ($stockResult['has_stock_issues']) {
                                    $order->setStatus(Order::STATUS_PENDING);
                                    $order->setNotes(($order->getNotes() ?? '') . "\n⚠️ Produits en rupture de stock.");
                                } else {
                                    $order->setStatus(Order::STATUS_PROCESSING);
                                }
                            } else {
                                $order->setStatus(Order::STATUS_PENDING);
                            }

                            $this->entityManager->flush();
                            $paymentSuccess = true;
                            
                            $this->logger->info('✅ Paiement approuvé par statut', [
                                'order_id' => $orderId,
                                'status' => $status,
                                'payment_status' => 'paid',
                                'order_status' => $order->getStatus(),
                                'stock_issues_count' => count($stockIssues)
                            ]);
                            
                            // ✅ ENVOI DES EMAILS UNIQUEMENT ICI (paiement confirmé)
                            $this->sendPaymentConfirmation($order, $stockIssues);
                        }
                    }
                    
                    // ✅ REDIRECTION VERS LE DÉTAIL DE LA COMMANDE
                    return $this->redirectToRoute('marketplace_order_detail', [
                        'id' => $orderId,
                        'payment_success' => $paymentSuccess ? '1' : '0'
                    ]);
                }
            } catch (\Exception $e) {
                $this->logger->error('❌ Erreur lors du traitement du callback', [
                    'error' => $e->getMessage(),
                    'order_id' => $orderId
                ]);
            }
        }

        // ✅ Fallback si pas d'order_id
        if ($transactionId) {
            return $this->redirectToRoute('marketplace_payment_status', [
                'transaction_id' => $transactionId
            ]);
        }
        
        return $this->redirectToRoute('marketplace_orders');
    }

    #[Route('/payment/status/{transaction_id?}', name: 'marketplace_payment_status')]
    public function paymentStatus(?string $transaction_id, Request $request): Response
    {
        $orderId = $request->query->get('order_id');
        
        // ✅ Si on a un order_id, rediriger vers le détail de la commande
        if ($orderId) {
            try {
                $order = $this->entityManager->getRepository(Order::class)->find($orderId);
                if ($order) {
                    // Vérifier le statut du paiement si on a un transaction_id
                    if ($transaction_id) {
                        try {
                            $transaction = $this->fedaPayService->verifyPayment($transaction_id);
                            if (isset($transaction['status']) && $transaction['status'] === 'approved') {
                                $order->setPaymentStatus('paid');
                                $order->setAmountPaid((string) $order->getGrandTotal());
                                
                                // ✅ Récupérer le Super Admin
                                $superAdmin = $this->entityManager
                                    ->getRepository(User::class)
                                    ->createQueryBuilder('u')
                                    ->where('u.is_super_admin = true')
                                    ->setMaxResults(1)
                                    ->getQuery()
                                    ->getOneOrNullResult();

                                // ✅ DÉDUIRE LE STOCK
                                $stockIssues = [];
                                if ($superAdmin) {
                                    $stockResult = $this->orderService->deductStockForOrder($order, $superAdmin);
                                    $stockIssues = $stockResult['stock_issues'] ?? [];
                                    
                                    if ($stockResult['has_stock_issues']) {
                                        $order->setStatus(Order::STATUS_PENDING);
                                    } else {
                                        $order->setStatus(Order::STATUS_PROCESSING);
                                    }
                                } else {
                                    $order->setStatus(Order::STATUS_PENDING);
                                }
                                
                                $this->entityManager->flush();
                                
                                // ✅ ENVOI DES EMAILS
                                $this->sendPaymentConfirmation($order, $stockIssues);
                            }
                        } catch (\Exception $e) {
                            $this->logger->error('❌ Erreur dans paymentStatus', [
                                'error' => $e->getMessage(),
                                'transaction_id' => $transaction_id
                            ]);
                        }
                    }
                    
                    // ✅ Rediriger vers le détail de la commande
                    return $this->redirectToRoute('marketplace_order_detail', [
                        'id' => $orderId,
                        'payment_success' => $order->getPaymentStatus() === 'paid' ? '1' : '0'
                    ]);
                }
            } catch (\Exception $e) {
                $this->logger->error('❌ Erreur dans paymentStatus', [
                    'error' => $e->getMessage(),
                    'order_id' => $orderId
                ]);
            }
        }
        
        // ✅ Fallback vers la liste des commandes
        return $this->redirectToRoute('marketplace_orders');
    }

    /**
     * Envoie un email de confirmation de paiement au client et au super admin
     * ✅ Appelé UNIQUEMENT quand le paiement est confirmé
     * ✅ 2 emails différents : un pour le client, un pour le super admin
     * 
     * @param Order $order La commande
     * @param array $stockIssues Liste des produits en rupture de stock
     */
    private function sendPaymentConfirmation(Order $order, array $stockIssues = []): void
    {
        try {
            $this->logger->info('📧 Début envoi des emails de confirmation de paiement', [
                'order_id' => $order->getId(),
                'order_number' => $order->getOrderNumber(),
                'has_stock_issues' => !empty($stockIssues),
                'stock_issues_count' => count($stockIssues)
            ]);

            // ✅ Récupération des emails depuis .env
            $fromEmail = $_ENV['MAILER_FROM_EMAIL'] ?? 'noreply@hma-marketplace.com';
            $fromName = $_ENV['MAILER_FROM_NAME'] ?? 'HMA Market';

            // ✅ Récupérer l'email du super admin depuis la base de données
            $superAdminEmail = $this->getSuperAdminEmail();

            $this->logger->info('📧 Configuration emails', [
                'from_email' => $fromEmail,
                'from_name' => $fromName,
                'super_admin_email' => $superAdminEmail,
                'customer_email' => $order->getCustomerEmail()
            ]);

            // ✅ EMAIL POUR LE CLIENT
            if ($order->getCustomerEmail()) {
                try {
                    $clientHtml = $this->twig->render('emails/order_confirmation.html.twig', [
                        'order' => $order,
                        'payment_confirmed' => true,
                        'is_admin' => false,
                        'stockIssues' => $stockIssues,
                        'appName' => $_ENV['APP_NAME'] ?? 'HMA Market',
                        'appUrl' => $_ENV['APP_URL'] ?? 'http://localhost:8000'
                    ]);

                    $clientEmail = (new Email())
                        ->from(new \Symfony\Component\Mime\Address($fromEmail, $fromName))
                        ->to($order->getCustomerEmail())
                        ->subject('✅ Paiement confirmé - Commande #' . $order->getOrderNumber())
                        ->html($clientHtml);

                    $this->mailer->send($clientEmail);
                    $this->logger->info('✅ Email de confirmation de paiement envoyé au client', [
                        'order_id' => $order->getId(),
                        'email' => $order->getCustomerEmail(),
                        'has_stock_issues' => !empty($stockIssues)
                    ]);
                } catch (\Exception $e) {
                    $this->logger->error('❌ Erreur envoi email client', [
                        'order_id' => $order->getId(),
                        'error' => $e->getMessage(),
                        'trace' => $e->getTraceAsString()
                    ]);
                }
            } else {
                $this->logger->warning('⚠️ Pas d\'email client pour la commande', [
                    'order_id' => $order->getId()
                ]);
            }

            // ✅ EMAIL POUR LE SUPER ADMIN (avec les produits en rupture)
            try {
                $this->logger->info('📧 Préparation email super admin', [
                    'to' => $superAdminEmail,
                    'order_id' => $order->getId(),
                    'stock_issues_count' => count($stockIssues)
                ]);

                $adminHtml = $this->twig->render('emails/admin_order_notification.html.twig', [
                    'order' => $order,
                    'payment_confirmed' => true,
                    'is_admin' => true,
                    'stockIssues' => $stockIssues, // ✅ Passage des problèmes de stock
                    'appName' => $_ENV['APP_NAME'] ?? 'HMA Market',
                    'appUrl' => $_ENV['APP_URL'] ?? 'http://localhost:8000'
                ]);

                $adminEmail = (new Email())
                    ->from(new \Symfony\Component\Mime\Address($fromEmail, $fromName))
                    ->to($superAdminEmail)
                    ->subject('💰 NOUVEAU PAIEMENT - Commande #' . $order->getOrderNumber() . ' - ' . $order->getCustomerName())
                    ->html($adminHtml);

                $this->mailer->send($adminEmail);
                $this->logger->info('✅ Email de notification envoyé au super admin', [
                    'order_id' => $order->getId(),
                    'email' => $superAdminEmail,
                    'stock_issues_count' => count($stockIssues)
                ]);

            } catch (\Exception $e) {
                $this->logger->error('❌ Erreur envoi email super admin', [
                    'order_id' => $order->getId(),
                    'to' => $superAdminEmail,
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ]);
            }

            $this->logger->info('📧 Fin envoi des emails de confirmation de paiement', [
                'order_id' => $order->getId()
            ]);

        } catch (\Exception $e) {
            $this->logger->error('❌ Erreur globale lors de l\'envoi des emails de confirmation de paiement', [
                'order_id' => $order->getId(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
        }
    }

    /**
     * Récupère l'email du super admin
     * ✅ Priorité : Base de données -> .env
     */
    private function getSuperAdminEmail(): string
    {
        // 1. Essayer de récupérer depuis la base de données
        try {
            $superAdmin = $this->entityManager
                ->getRepository(User::class)
                ->createQueryBuilder('u')
                ->where('u.is_super_admin = true')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
            
            if ($superAdmin && $superAdmin->getEmail()) {
                $this->logger->info('✅ Super admin trouvé en base de données', [
                    'email' => $superAdmin->getEmail()
                ]);
                return $superAdmin->getEmail();
            }
        } catch (\Exception $e) {
            $this->logger->warning('⚠️ Erreur lors de la récupération du super admin en base de données', [
                'error' => $e->getMessage()
            ]);
        }
        
        // 2. Fallback sur .env
        $email = $_ENV['SUPER_ADMIN_EMAIL'] ?? $_ENV['ADMIN_EMAIL'] ?? 'admin@hma-marketplace.com';
        $this->logger->info('📧 Utilisation de l\'email super admin depuis .env', [
            'email' => $email
        ]);
        
        return $email;
    }
}