<?php
// src/Service/PurchaseFlowService.php

namespace App\Service;

use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\Location;
use App\Entity\Purchase;
use App\Entity\PurchaseItem;
use App\Entity\StockBatch;
use App\Entity\StockMovement;
use App\Entity\Supplier;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Security;
use App\Service\NotificationService;

class PurchaseFlowService
{
    private array $cart = [];
    private SessionInterface $session;
    
    public function __construct(
        private EntityManagerInterface $entityManager,
        private NotificationService $notificationService,
        private StockService $stockService,
        private LoggerInterface $logger,
        private Security $security,
        RequestStack $requestStack,
        private string $bonCommandeDirectory,   
        private string $recuAchatDirectory,    
        private InvoicePdfGenerator $pdfGenerator
    ) {
        $this->session = $requestStack->getSession();
        $this->cart = $this->session->get('purchase_cart', []);
    }

    /**
     * Crée une nouvelle commande d'achat (brouillon)
     */
    public function createPurchase(User $user, HmaService $hmaService): Purchase
    {
        $managedUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        if (!$managedUser) {
            throw new \Exception('Utilisateur non trouvé en base de données');
        }
        
        $managedHmaService = $this->entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$managedHmaService) {
            throw new \Exception('Entreprise non trouvée en base de données');
        }
        
        $purchase = new Purchase();
        $purchase->setUser($managedUser);
        $purchase->setHmaService($managedHmaService);
        $purchase->setStatus(Purchase::STATUS_DRAFT);
        $purchase->setPurchaseNumber($this->generatePurchaseNumber($managedHmaService));
        $purchase->setCreatedAt(new \DateTimeImmutable());
        
        $this->entityManager->persist($purchase);
        $this->entityManager->flush();
        
        $this->logger->info('Nouvelle commande d\'achat créée', [
            'purchase_id' => $purchase->getId(),
            'user_id' => $managedUser->getId(),
            'number' => $purchase->getPurchaseNumber()
        ]);
        
        return $purchase;
    }

    /**
     * Ajoute un produit au panier
     */
    public function addProductToCart(Product $product, int $quantity, float $unitPrice, ?string $batchNumber = null): array
    {
        $cartKey = $product->getId();
        
        if (isset($this->cart[$cartKey])) {
            $this->cart[$cartKey]['quantity'] += $quantity;
        } else {
            $this->cart[$cartKey] = [
                'product_id' => $product->getId(),
                'product_name' => $product->getName(),
                'barcode' => $product->getBarcode(),
                'image' => $product->getImage(),
                'unit' => $product->getUnit(),
                'quantity' => $quantity,
                'unit_price' => $unitPrice,
                'total_price' => $quantity * $unitPrice,
                'has_expiry_date' => $product->hasExpiryDate(),
                'batch_number' => $batchNumber
            ];
        }
        
        $this->cart[$cartKey]['total_price'] = $this->cart[$cartKey]['quantity'] * $this->cart[$cartKey]['unit_price'];
        $this->saveCart();
        
        $this->logger->info('Produit ajouté au panier', [
            'product_id' => $product->getId(),
            'quantity' => $quantity
        ]);
        
        return $this->cart[$cartKey];
    }

    /**
     * Supprime un produit du panier
     */
    public function removeProductFromCart(int $productId): bool
    {
        if (isset($this->cart[$productId])) {
            unset($this->cart[$productId]);
            $this->saveCart();
            $this->logger->info('Produit supprimé du panier', ['product_id' => $productId]);
            return true;
        }
        
        return false;
    }

    /**
     * Met à jour la quantité d'un produit dans le panier
     */
    public function updateCartQuantity(int $productId, int $quantity): bool
    {
        if (isset($this->cart[$productId]) && $quantity > 0) {
            $this->cart[$productId]['quantity'] = $quantity;
            $this->cart[$productId]['total_price'] = $quantity * $this->cart[$productId]['unit_price'];
            $this->saveCart();
            return true;
        }
        
        return false;
    }

    /**
     * Récupère le contenu du panier
     */
    public function getCart(): array
    {
        $enrichedCart = [];
        foreach ($this->cart as $item) {
            try {
                $product = $this->entityManager->getRepository(Product::class)->find($item['product_id']);
                if ($product && $product->isActive() && $product->isSubscriptionActive()) {
                    $item['product'] = $product;
                    $enrichedCart[] = $item;
                } else {
                    $this->logger->warning('Produit introuvable ou inactif, suppression du panier', ['product_id' => $item['product_id']]);
                    unset($this->cart[$item['product_id']]);
                }
            } catch (\Exception $e) {
                $this->logger->error('Erreur lors de l\'enrichissement du panier', ['error' => $e->getMessage()]);
            }
        }
        $this->saveCart();
        return $enrichedCart;
    }

    /**
     * Calcule le total du panier
     */
    public function getCartTotal(): float
    {
        $total = 0;
        foreach ($this->cart as $item) {
            $total += $item['total_price'] ?? 0;
        }
        return $total;
    }

    /**
     * Vide le panier
     */
    public function clearCart(): void
    {
        $this->cart = [];
        $this->saveCart();
    }

    /**
     * Confirme la commande et envoie les notifications
     */
    public function confirmPurchase(Purchase $purchase, Supplier $supplier, ?string $notes = null, array $notificationOptions = []): void
    {
        if ($purchase->getStatus() !== Purchase::STATUS_DRAFT) {
            throw new \Exception('Seules les commandes en brouillon peuvent être confirmées');
        }
        
        if (empty($this->cart)) {
            throw new \Exception('Le panier est vide');
        }
        
        // 🔥 VÉRIFICATION SUPPLÉMENTAIRE
        if (!$supplier->isActive()) {
            throw new \Exception('Le fournisseur n\'est pas actif');
        }
        
        if (!$supplier->isSubscriptionActive()) {
            throw new \Exception('L\'abonnement du fournisseur n\'est pas actif');
        }
        
        // 🔥 VÉRIFIER QUE LE FOURNISSEUR APPARTIENT À L'ENTREPRISE
        if ($supplier->getHmaService()->getId() !== $purchase->getHmaService()->getId()) {
            throw new \Exception('Fournisseur non autorisé pour cette entreprise');
        }
        
        $purchase->setSupplier($supplier);
        $purchase->setNotes($notes);
        $purchase->setStatus(Purchase::STATUS_CONFIRMED);
        $purchase->setConfirmedAt(new \DateTimeImmutable());

        foreach ($this->cart as $cartItem) {
            $product = $this->entityManager->getRepository(Product::class)->find($cartItem['product_id']);
            if (!$product) {
                continue;
            }
            
            $purchaseItem = new PurchaseItem();
            $purchaseItem->setPurchase($purchase);
            $purchaseItem->setProduct($product);
            $purchaseItem->setQuantity($cartItem['quantity']);
            $purchaseItem->setUnitPrice((string) $cartItem['unit_price']);
            $purchaseItem->setTotalPrice((string) $cartItem['total_price']);
            $purchaseItem->setBatchNumber($cartItem['batch_number'] ?? $this->generateBatchNumber($product));
            $purchaseItem->setCreatedAt(new \DateTime());
            
            $purchase->addPurchaseItem($purchaseItem);
            $this->entityManager->persist($purchaseItem);
        }
        
        $purchase->calculateTotalAmount();
        $this->entityManager->flush();
        
        // Génération du bon de commande (PDF)
        $bonCommandePath = $this->pdfGenerator->generatePurchaseOrder($purchase);
        if ($bonCommandePath) {
            $purchase->setBonCommande($bonCommandePath);
            $this->entityManager->flush();
        }
        
        $this->notificationService->sendPurchaseConfirmation($purchase, $notificationOptions);
        $this->clearCart();
        
        $this->logger->info('Commande confirmée', [
            'purchase_id' => $purchase->getId(),
            'supplier_id' => $supplier->getId(),
            'total' => $purchase->getTotalAmount()
        ]);
    }

    /**
     * Annule une commande
     */
    public function cancelPurchase(Purchase $purchase, string $reason, User $cancelledBy): void
    {
        if (!$purchase->canCancel()) {
            throw new \Exception('Cette commande ne peut pas être annulée');
        }
        
        $purchase->setStatus(Purchase::STATUS_CANCELLED);
        $purchase->setCancellationReason($reason);
        $purchase->setCancelledAt(new \DateTimeImmutable());
        $purchase->setCancelledBy($cancelledBy);
        
        $this->entityManager->flush();
        
        $this->notificationService->sendPurchaseCancellation($purchase, $reason);
        
        $this->logger->info('Commande annulée', [
            'purchase_id' => $purchase->getId(),
            'reason' => $reason,
            'cancelled_by' => $cancelledBy->getId()
        ]);
    }

    /**
     * Réceptionne une commande et crée les lots
     * @param array $batchData Tableau associatif [itemId => ['batch_number', 'manufacturing_date', 'expiry_date', 'received_quantity', 'received_price', 'remove']]
     */
    public function receivePurchase(Purchase $purchase, array $batchData): void
    {
        if ($purchase->getStatus() !== Purchase::STATUS_CONFIRMED) {
            throw new \Exception('Seules les commandes confirmées peuvent être réceptionnées');
        }

        $this->entityManager->beginTransaction();

        try {
            foreach ($purchase->getPurchaseItems() as $item) {
                $product = $item->getProduct();
                $data = $batchData[$item->getId()] ?? [];

                // Vérifier si l'utilisateur a coché "supprimer"
                if (!empty($data['remove']) && $data['remove'] == 1) {
                    $purchase->removePurchaseItem($item);
                    $this->entityManager->remove($item);
                    continue;
                }

                // Quantité reçue
                $receivedQuantity = isset($data['received_quantity']) && is_numeric($data['received_quantity']) 
                    ? (int)$data['received_quantity'] 
                    : $item->getQuantity();

                if ($receivedQuantity <= 0) {
                    $purchase->removePurchaseItem($item);
                    $this->entityManager->remove($item);
                    continue;
                }

                // Prix unitaire reçu
                $receivedPrice = isset($data['received_price']) && is_numeric($data['received_price']) 
                    ? (float)$data['received_price'] 
                    : (float)$item->getUnitPrice();

                // Mettre à jour les champs du PurchaseItem
                $item->setQuantity($receivedQuantity);
                $item->setUnitPrice((string)$receivedPrice);
                $item->setTotalPrice(bcmul((string)$receivedPrice, (string)$receivedQuantity, 2));
                
                // Récupérer l'emplacement
                $location = null;
                if (!empty($data['location_id'])) {
                    $location = $this->entityManager->getRepository(Location::class)->find($data['location_id']);
                }
                
                // Si le produit a une date d'expiration
                if ($product->hasExpiryDate()) {
                    if (empty($data['batch_number']) || empty($data['manufacturing_date']) || empty($data['expiry_date'])) {
                        throw new \Exception(sprintf('Données de lot manquantes pour le produit "%s"', $product->getName()));
                    }
                    $item->setManufacturingDate(new \DateTime($data['manufacturing_date']));
                    $item->setExpiryDate(new \DateTime($data['expiry_date']));
                }

                $this->entityManager->persist($item);

                // Génération du lot
                $batchNumber = $data['batch_number'] ?? $item->getBatchNumber();
                if (empty($batchNumber)) {
                    $batchNumber = $this->generateBatchNumber($product);
                }

                $stockBatch = new StockBatch();
                $stockBatch->setBatchNumber($batchNumber);
                $stockBatch->setInitialQuantity($receivedQuantity);
                $stockBatch->setCurrentQuantity($receivedQuantity);
                $stockBatch->setUnitPrice((string)$receivedPrice);
                $stockBatch->setProduct($product);
                $stockBatch->setPurchaseItemId($item->getId());
                $stockBatch->setHmaService($purchase->getHmaService());
                $stockBatch->setIsActive(true);
                $stockBatch->setCreatedAt(new \DateTime());
                
                // Enregistrer l'emplacement
                if ($location) {
                    $stockBatch->setLocationEntity($location);
                    $stockBatch->setLocation($location->getDisplayName()); // Pour compatibilité
                }

                if ($product->hasExpiryDate()) {
                    $stockBatch->setManufacturingDate(new \DateTime($data['manufacturing_date']));
                    $stockBatch->setExpiryDate(new \DateTime($data['expiry_date']));
                }

                $this->entityManager->persist($stockBatch);

                // Mouvement de stock
                $movement = new StockMovement();
                $movement->setMovementType('PURCHASE');
                $movement->setQuantity($receivedQuantity);
                $movement->setUnitPrice((string)$receivedPrice);
                $movement->setProduct($product);
                $movement->setStockBatch($stockBatch);
                $movement->setPurchaseItem($item);
                $movement->setUser($purchase->getUser());
                $movement->setHmaService($purchase->getHmaService());
                $movement->setCreatedAt(new \DateTime());
                $movement->setNotes('Réception commande ' . $purchase->getPurchaseNumber());
                $movement->setReferenceId($purchase->getId());

                $this->entityManager->persist($movement);

                // Mise à jour du stock produit
                $product->setStockQuantity($product->getStockQuantity() + $receivedQuantity);
                $this->entityManager->persist($product);
            }

            // Recalculer le total de la commande
            $purchase->calculateTotalAmount();
            $purchase->setStatus(Purchase::STATUS_RECEIVED);
            $purchase->setReceivedAt(new \DateTimeImmutable());

            $this->entityManager->flush();
            $this->entityManager->commit();

            // Générer le reçu
            $recuPath = $this->pdfGenerator->generatePurchaseReceipt($purchase);
            if ($recuPath) {
                $purchase->setRecuAchat($recuPath);
                $this->entityManager->flush();
            }

            $this->notificationService->sendPurchaseReceivedConfirmation($purchase);

            $this->logger->info('Commande réceptionnée', [
                'purchase_id' => $purchase->getId(),
            ]);

        } catch (\Exception $e) {
            $this->entityManager->rollback();
            $this->logger->error('Erreur lors de la réception de la commande', [
                'purchase_id' => $purchase->getId(),
                'error' => $e->getMessage()
            ]);
            throw $e;
        }
    }
    /**
     * Génère un numéro de commande unique
     */
    private function generatePurchaseNumber(HmaService $hmaService): string
    {
        $date = new \DateTime();
        $year = $date->format('Y');
        $month = $date->format('m');
        $day = $date->format('d');
        
        $count = $this->entityManager->getRepository(Purchase::class)->count([
            'hma_service' => $hmaService,
            'created_at' => new \DateTimeImmutable('today')
        ]);
        
        $sequence = str_pad($count + 1, 4, '0', STR_PAD_LEFT);
        
        return sprintf('ACH-%s%s%s-%s', $year, $month, $day, $sequence);
    }

    /**
     * Génère un numéro de lot automatique
     */
    private function generateBatchNumber(Product $product): string
    {
        $date = new \DateTime();
        $random = str_pad(random_int(1, 99999), 5, '0', STR_PAD_LEFT);
        
        return sprintf(
            'LOT-%s-%s-%s',
            $date->format('Ymd'),
            $product->getId(),
            $random
        );
    }

    /**
     * Sauvegarde le panier en session
     */
    private function saveCart(): void
    {
        $this->session->set('purchase_cart', $this->cart);
    }

    public function updateCartItem(int $productId, int $quantity, float $unitPrice): bool
    {
        if (isset($this->cart[$productId])) {
            $this->cart[$productId]['quantity'] = $quantity;
            $this->cart[$productId]['unit_price'] = $unitPrice;
            $this->cart[$productId]['total_price'] = $quantity * $unitPrice;
            $this->saveCart();
            return true;
        }
        return false;
    }

    /**
     * Récupère le service de notification
     */
    public function getNotificationService(): NotificationService
    {
        return $this->notificationService;
    }

    /**
     * Envoie la confirmation de réception au fournisseur
     */
    public function sendPurchaseReceivedConfirmation(Purchase $purchase): void
    {
        try {
            $this->notificationService->sendPurchaseReceivedConfirmation($purchase);
            $this->logger->info('Confirmation de réception envoyée', [
                'purchase_id' => $purchase->getId(),
                'supplier' => $purchase->getSupplier()?->getName()
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de l\'envoi de la confirmation de réception', [
                'purchase_id' => $purchase->getId(),
                'error' => $e->getMessage()
            ]);
        }
    }
}