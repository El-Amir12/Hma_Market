<?php
// src/Service/OrderService.php

namespace App\Service;

use App\Entity\Customer;
use App\Entity\Cart;
use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\HmaService;
use App\Entity\User;
use App\Entity\Product;
use App\Service\Sale\PromotionCalculator;
use App\Service\Sale\StockDeductionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;
use Twig\Environment;

class OrderService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private PromotionCalculator $promotionCalculator,
        private StockDeductionService $stockDeductionService,
        private MailerInterface $mailer,
        private Environment $twig,
        private LoggerInterface $logger
    ) {}

    /**
     * Crée une commande à partir du panier (commande marketplace)
     * ✅ Statut: 'pending' (en attente de paiement)
     * ✅ Associe le Customer à la commande
     * ✅ NE PAS déduire le stock (fait après paiement)
     * ✅ NE PAS envoyer d'email (géré par le contrôleur après paiement)
     */
    public function createOrderFromCart(Customer $customer, Cart $cart, array $data): Order
    {
        // Récupérer le Super Admin
        $superAdmin = $this->getSuperAdmin();
        if (!$superAdmin) {
            $this->logger->error('Aucun super administrateur trouvé');
            throw new \Exception('Aucun super administrateur trouvé. La commande ne peut pas être créée.');
        }

        // Récupérer le HmaService du Super Admin
        $hmaService = $this->getHmaServiceFromSuperAdmin($superAdmin);
        if (!$hmaService) {
            $this->logger->error('Aucun HmaService trouvé pour le Super Admin');
            throw new \Exception('Aucun service HMA trouvé. La commande ne peut pas être créée.');
        }

        $order = new Order();
        $order->setOrderNumber($this->generateOrderNumber());
        $order->setCustomerName($customer->getFullName());
        $order->setCustomerPhone($data['phone']);
        $order->setCustomerEmail($data['email'] ?? $customer->getEmail());
        $order->setDeliveryAddress($data['address']);
        $order->setDeliveryCity($data['city'] ?? null);
        $order->setDeliveryZipcode($data['zipcode'] ?? null);
        $order->setDeliveryCountry($data['country'] ?? 'Bénin');
        $order->setDeliveryLatitude($data['latitude'] ?? null);
        $order->setDeliveryLongitude($data['longitude'] ?? null);
        $order->setPaymentMethod($data['payment_method'] ?? 'feda_pay');
        $order->setPaymentStatus('pending');
        $order->setStatus(Order::STATUS_PENDING);
        
        // ✅ Association du Customer
        $order->setCustomer($customer);
        
        $order->setUser($superAdmin);
        $order->setHmaService($hmaService);
        $order->setCreatedAt(new \DateTime());
        $order->setUpdatedAt(new \DateTime());

        $subtotal = 0;
        $totalDiscount = 0;
        $grandTotal = 0;

        foreach ($cart->getItems() as $cartItem) {
            $product = $cartItem->getProduct();
            $promotionInfo = $this->promotionCalculator->getBestProductPromotion($product);
            
            $unitPrice = $promotionInfo['original_price'];
            $discountedPrice = $promotionInfo['final_price'];
            $quantity = $cartItem->getQuantity();
            $itemTotal = $discountedPrice * $quantity;
            $itemDiscount = ($unitPrice - $discountedPrice) * $quantity;

            $orderItem = new OrderItem();
            $orderItem->setProductName($product->getName());
            $orderItem->setUnitPrice((string) $unitPrice);
            
            $purchasePrice = $product->getPurchasePrice() ?? 0;
            $orderItem->setBatchPurchasePrice((string) $purchasePrice);
            
            $orderItem->setQuantity($quantity);
            $orderItem->setNotes($cartItem->getNotes());
            $orderItem->setTotalPrice((string) $itemTotal);
            $orderItem->setProductId($product->getId());
            $orderItem->setCreatedAt(new \DateTime());
            $orderItem->setVente($order);

            if ($promotionInfo['has_promotion'] && $promotionInfo['promotion']) {
                $orderItem->setAppliedPromotion($promotionInfo['promotion']);
                $orderItem->setPromotionId($promotionInfo['promotion']->getId());
                $orderItem->setPromotionName($promotionInfo['promotion']->getName());
                $orderItem->setPromotionDiscountAmount((string) $itemDiscount);
                $orderItem->setPromotionDiscountPercentage((string) $promotionInfo['discount_percentage']);
                $orderItem->setOriginalUnitPrice((string) $unitPrice);
            }

            $this->entityManager->persist($orderItem);
            $order->addOrderItem($orderItem);

            $subtotal += $unitPrice * $quantity;
            $totalDiscount += $itemDiscount;
            $grandTotal += $itemTotal;
        }

        $order->setTotalAmount((string) $grandTotal);
        $order->setAmountPaid((string) 0);
        $order->setChangeAmount((string) 0);

        $this->entityManager->persist($order);
        $this->entityManager->flush();

        $this->logger->info('✅ Commande créée avec succès (en attente de paiement)', [
            'order_id' => $order->getId(),
            'order_number' => $order->getOrderNumber(),
            'customer_id' => $customer->getId(),
            'customer_name' => $customer->getFullName(),
            'total' => $grandTotal,
            'status' => $order->getStatus()
        ]);

        // Vider le panier APRÈS création de la commande
        foreach ($cart->getItems() as $item) {
            $this->entityManager->remove($item);
        }
        $this->entityManager->flush();

        return $order;
    }

    /**
     * Crée une vente directe depuis le dashboard (vente en caisse)
     * ✅ Statut: 'completed' (terminé immédiatement)
     * ✅ Associe le Customer si trouvé
     * ✅ DÉDUIT LE STOCK UNIQUEMENT SI DISPONIBLE
     * ✅ Si stock = 0, on enregistre quand même et on informe l'admin
     */
    public function createDirectSale(
        User $user,
        HmaService $hmaService,
        array $cartData,
        string $customerName,
        string $customerPhone,
        string $paymentMethod,
        float $amountPaid,
        ?string $customerEmail = null,
        ?string $notes = null,
        ?Customer $customer = null
    ): Order {
        $totalAmount = 0;
        foreach ($cartData as $item) {
            $totalAmount += $item['total_price'];
        }
        
        $changeAmount = max(0, $amountPaid - $totalAmount);
        
        $order = new Order();
        $order->setOrderNumber($this->generateOrderNumber());
        $order->setCustomerName($customerName);
        $order->setCustomerPhone($customerPhone);
        $order->setCustomerEmail($customerEmail ?? '');
        $order->setTotalAmount((string) $totalAmount);
        $order->setAmountPaid((string) $amountPaid);
        $order->setChangeAmount((string) $changeAmount);
        $order->setPaymentMethod($paymentMethod);
        $order->setPaymentStatus('paid');
        $order->setStatus(Order::STATUS_COMPLETED);
        $order->setNotes($notes ?? '');
        
        if ($customer) {
            $order->setCustomer($customer);
        }
        
        $order->setUser($user);
        $order->setHmaService($hmaService);
        $order->setCreatedAt(new \DateTime());
        $order->setUpdatedAt(new \DateTime());

        $this->entityManager->persist($order);
        $this->entityManager->flush();

        $stockIssues = [];

        // Ajouter les articles et déduire le stock si disponible
        foreach ($cartData as $item) {
            $orderItem = new OrderItem();
            $orderItem->setProductName($item['name']);
            $orderItem->setUnitPrice((string) $item['unit_price']);
            $orderItem->setBatchPurchasePrice((string) ($item['batch_purchase_price'] ?? 0));
            $orderItem->setQuantity($item['quantity']);
            $orderItem->setNotes($item['notes'] ?? null);
            $orderItem->setTotalPrice((string) $item['total_price']);
            $orderItem->setProductId($item['product_id'] ?? null);
            $orderItem->setCreatedAt(new \DateTime());
            $orderItem->setVente($order);
            
            $this->entityManager->persist($orderItem);
            $order->addOrderItem($orderItem);

            // ✅ DÉDUIRE LE STOCK UNIQUEMENT SI DISPONIBLE
            if (isset($item['product_id']) && $item['product_id']) {
                try {
                    $product = $this->entityManager->getRepository(Product::class)
                        ->find($item['product_id']);
                    
                    if ($product) {
                        // Vérifier le stock disponible
                        $availableStock = $this->stockDeductionService->getProductTotalStock($product);
                        
                        if ($availableStock >= $item['quantity']) {
                            // ✅ Stock suffisant : on déduit
                            $this->stockDeductionService->deductProductStock(
                                $product,
                                $item['quantity'],
                                $order,
                                $user,
                                $order->getId()
                            );
                            
                            $this->logger->info('✅ Stock déduit pour vente directe', [
                                'order_id' => $order->getId(),
                                'product_id' => $item['product_id'],
                                'quantity' => $item['quantity'],
                                'available_stock' => $availableStock
                            ]);
                        } else {
                            // ❌ Stock insuffisant ou = 0 : on enregistre quand même
                            $stockIssues[] = [
                                'product_name' => $product->getName(),
                                'product_id' => $product->getId(),
                                'quantity_requested' => $item['quantity'],
                                'available_stock' => $availableStock,
                                'unit' => $product->getUnit() ?? 'pièce(s)'
                            ];
                            
                            $this->logger->warning('⚠️ Stock insuffisant pour vente directe (commande enregistrée)', [
                                'order_id' => $order->getId(),
                                'product_id' => $item['product_id'],
                                'product_name' => $product->getName(),
                                'available' => $availableStock,
                                'requested' => $item['quantity']
                            ]);
                        }
                    }
                } catch (\Exception $e) {
                    $this->logger->error('❌ Erreur déduction stock vente directe', [
                        'order_id' => $order->getId(),
                        'product_id' => $item['product_id'],
                        'error' => $e->getMessage()
                    ]);
                    // On continue quand même, la commande est enregistrée
                }
            }
        }

        $this->entityManager->flush();

        // ✅ Envoyer un email d'alerte à l'admin si des produits sont en rupture
        if (!empty($stockIssues)) {
            $this->sendStockAlertEmail($order, $stockIssues);
        }

        // Envoyer email de confirmation de vente en caisse
        if ($customerEmail) {
            $this->sendDirectSaleConfirmation($order);
        }

        return $order;
    }

    /**
     * ✅ NOUVEAU : Déduit le stock pour une commande marketplace après paiement
     * ✅ Parcourt d'abord les lots (stock_batch), puis le stock direct (stock_quantity)
     * ✅ Si stock = 0 ou insuffisant, on enregistre quand même et on informe l'admin
     */
    public function deductStockForOrder(Order $order, User $user): array
    {
        $this->logger->info('📦 Début déduction de stock pour la commande', [
            'order_id' => $order->getId(),
            'order_number' => $order->getOrderNumber()
        ]);

        $results = [];
        $stockIssues = [];

        foreach ($order->getOrderItems() as $orderItem) {
            $productId = $orderItem->getProductId();
            if (!$productId) {
                $this->logger->warning('⚠️ OrderItem sans product_id', [
                    'order_item_id' => $orderItem->getId()
                ]);
                continue;
            }

            try {
                $product = $this->entityManager->getRepository(Product::class)
                    ->find($productId);
                
                if (!$product) {
                    $this->logger->warning('⚠️ Produit non trouvé', [
                        'product_id' => $productId
                    ]);
                    $stockIssues[] = [
                        'product_name' => 'Produit ID ' . $productId . ' (non trouvé)',
                        'product_id' => $productId,
                        'quantity_requested' => $orderItem->getQuantity(),
                        'available_stock' => 0,
                        'unit' => 'pièce(s)',
                        'error' => 'Produit non trouvé'
                    ];
                    continue;
                }

                $quantity = (int) $orderItem->getQuantity();
                if ($quantity <= 0) {
                    continue;
                }

                // ✅ Vérifier le stock disponible (parcourt d'abord les lots)
                $availableStock = $this->stockDeductionService->getProductTotalStock($product);
                
                if ($availableStock >= $quantity) {
                    // ✅ Stock suffisant : on déduit avec StockDeductionService
                    // Cette méthode parcourt d'abord les lots (stock_batch)
                    $result = $this->stockDeductionService->deductProductStock(
                        $product,
                        $quantity,
                        $order,
                        $user,
                        $order->getId()
                    );

                    $results[] = [
                        'product_id' => $productId,
                        'product_name' => $product->getName(),
                        'quantity' => $quantity,
                        'available_stock' => $availableStock,
                        'batches_used' => count($result),
                        'status' => 'deducted',
                        'success' => true
                    ];

                    $this->logger->info('✅ Stock déduit pour le produit', [
                        'product_id' => $productId,
                        'product_name' => $product->getName(),
                        'quantity' => $quantity,
                        'available_stock' => $availableStock,
                        'batches_used' => count($result)
                    ]);
                } else {
                    // ❌ Stock insuffisant ou = 0 : on enregistre quand même
                    $stockIssues[] = [
                        'product_name' => $product->getName(),
                        'product_id' => $productId,
                        'quantity_requested' => $quantity,
                        'available_stock' => $availableStock,
                        'unit' => $product->getUnit() ?? 'pièce(s)',
                        'error' => null
                    ];
                    
                    $this->logger->warning('⚠️ Stock insuffisant pour la commande (commande enregistrée)', [
                        'order_id' => $order->getId(),
                        'product_id' => $productId,
                        'product_name' => $product->getName(),
                        'available' => $availableStock,
                        'requested' => $quantity
                    ]);
                    
                    $results[] = [
                        'product_id' => $productId,
                        'product_name' => $product->getName(),
                        'quantity' => $quantity,
                        'available_stock' => $availableStock,
                        'status' => 'insufficient_stock',
                        'success' => false
                    ];
                }

            } catch (\Exception $e) {
                $this->logger->error('❌ Erreur lors de la déduction de stock', [
                    'order_id' => $order->getId(),
                    'order_item_id' => $orderItem->getId(),
                    'product_id' => $orderItem->getProductId(),
                    'error' => $e->getMessage()
                ]);
                $stockIssues[] = [
                    'product_name' => $orderItem->getProductName() ?? 'Produit ID ' . $productId,
                    'product_id' => $productId,
                    'quantity_requested' => $orderItem->getQuantity(),
                    'available_stock' => 0,
                    'unit' => 'pièce(s)',
                    'error' => $e->getMessage()
                ];
            }
        }

        // ✅ Envoyer un email d'alerte à l'admin si des produits sont en rupture
        if (!empty($stockIssues)) {
            $this->sendStockAlertEmail($order, $stockIssues);
        }

        $this->entityManager->flush();

        $successCount = count(array_filter($results, fn($r) => $r['success'] ?? false));
        $issueCount = count($stockIssues);

        $this->logger->info('✅ Fin déduction de stock', [
            'order_id' => $order->getId(),
            'success_count' => $successCount,
            'stock_issues_count' => $issueCount
        ]);

        return [
            'success' => true, // ✅ Toujours true car la commande est enregistrée
            'results' => $results,
            'stock_issues' => $stockIssues,
            'has_stock_issues' => !empty($stockIssues)
        ];
    }

    /**
     * Envoie un email d'alerte de stock à l'admin
     * ✅ Affiche clairement les produits en rupture
     */
    private function sendStockAlertEmail(Order $order, array $stockIssues): void
    {
        try {
            $superAdminEmail = $this->getSuperAdminEmail();
            
            if (!$superAdminEmail) {
                $this->logger->warning('⚠️ Impossible d\'envoyer l\'alerte de stock : aucun email admin trouvé');
                return;
            }

            $fromEmail = $_ENV['MAILER_FROM_EMAIL'] ?? 'noreply@hma-marketplace.com';
            $fromName = $_ENV['MAILER_FROM_NAME'] ?? 'HMA Market';

            $html = $this->twig->render('emails/stock_alert.html.twig', [
                'order' => $order,
                'stockIssues' => $stockIssues,
                'appName' => $_ENV['APP_NAME'] ?? 'HMA Market',
                'appUrl' => $_ENV['APP_URL'] ?? 'http://localhost:8000'
            ]);

            $email = (new Email())
                ->from(new \Symfony\Component\Mime\Address($fromEmail, $fromName))
                ->to($superAdminEmail)
                ->subject('⚠️ RUPTURE DE STOCK - Commande #' . $order->getOrderNumber())
                ->html($html);

            $this->mailer->send($email);
            
            $this->logger->info('✅ Email d\'alerte de stock envoyé à l\'admin', [
                'order_id' => $order->getId(),
                'email' => $superAdminEmail,
                'issues_count' => count($stockIssues)
            ]);

        } catch (\Exception $e) {
            $this->logger->error('❌ Erreur lors de l\'envoi de l\'email d\'alerte de stock', [
                'order_id' => $order->getId(),
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Récupère l'email du super admin
     */
    private function getSuperAdminEmail(): string
    {
        try {
            $superAdmin = $this->entityManager
                ->getRepository(User::class)
                ->createQueryBuilder('u')
                ->where('u.is_super_admin = true')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
            
            if ($superAdmin && $superAdmin->getEmail()) {
                return $superAdmin->getEmail();
            }
        } catch (\Exception $e) {
            $this->logger->warning('⚠️ Erreur lors de la récupération du super admin', [
                'error' => $e->getMessage()
            ]);
        }
        
        return $_ENV['SUPER_ADMIN_EMAIL'] ?? $_ENV['ADMIN_EMAIL'] ?? 'admin@hma-marketplace.com';
    }

    /**
     * Récupère le Super Admin
     */
    private function getSuperAdmin(): ?User
    {
        return $this->entityManager
            ->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.is_super_admin = true')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Récupère le HmaService à partir du Super Admin
     */
    private function getHmaServiceFromSuperAdmin(User $superAdmin): ?HmaService
    {
        $hmaService = $superAdmin->getHmaService();
        
        if (!$hmaService) {
            $hmaService = $this->entityManager
                ->getRepository(HmaService::class)
                ->findOneBy(['email' => $superAdmin->getEmail()]);
        }
        
        if (!$hmaService) {
            $hmaService = $this->entityManager
                ->getRepository(HmaService::class)
                ->findOneBy(['isActive' => true]);
        }
        
        return $hmaService;
    }

    /**
     * Génère un numéro de commande unique
     */
    private function generateOrderNumber(): string
    {
        return 'CMD-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
    }

    /**
     * Envoie un email de confirmation pour une vente en caisse
     */
    private function sendDirectSaleConfirmation(Order $order): void
    {
        try {
            $html = $this->twig->render('emails/direct_sale_confirmation.html.twig', [
                'order' => $order,
                'appName' => $_ENV['APP_NAME'] ?? 'HMA Market',
                'appUrl' => $_ENV['APP_URL'] ?? 'http://localhost:8000'
            ]);

            if ($order->getCustomerEmail()) {
                $email = (new Email())
                    ->from($_ENV['MAILER_FROM_EMAIL'] ?? 'noreply@hma-marketplace.com')
                    ->to($order->getCustomerEmail())
                    ->subject('Votre commande #' . $order->getOrderNumber() . ' - HMA Marketplace')
                    ->html($html);

                $this->mailer->send($email);
                $this->logger->info('✅ Email de confirmation de vente en caisse envoyé', [
                    'order_id' => $order->getId(),
                    'email' => $order->getCustomerEmail()
                ]);
            }

        } catch (\Exception $e) {
            $this->logger->error('❌ Erreur lors de l\'envoi de l\'email de vente en caisse', [
                'order_id' => $order->getId(),
                'error' => $e->getMessage()
            ]);
        }
    }
}