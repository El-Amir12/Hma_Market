<?php

namespace App\Service;

use App\Entity\Product;
use App\Entity\Supplier;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PurchaseCartService
{
    private SessionInterface $session;
    private const CART_KEY = 'purchase_cart';
    private const SUPPLIER_KEY = 'purchase_supplier';

    public function __construct(RequestStack $requestStack)
    {
        $this->session = $requestStack->getSession();
    }

    /**
     * Ajouter un produit au panier
     */
    public function addItem(Product $product, int $quantity = 1, ?string $batchNumber = null, 
                           ?\DateTimeInterface $manufacturingDate = null, 
                           ?\DateTimeInterface $expiryDate = null): void
    {
        $cart = $this->getCart();
        
        // Vérifier si le produit existe déjà dans le panier
        $itemKey = $this->findProductKey($product->getId());
        
        if ($itemKey !== null) {
            // Mettre à jour la quantité
            $cart[$itemKey]['quantity'] += $quantity;
        } else {
            // Ajouter un nouvel item
            $item = [
                'product_id' => $product->getId(),
                'product_name' => $product->getName(),
                'barcode' => $product->getBarcode(),
                'purchase_price' => (string) $product->getPurchasePrice(),
                'sale_price' => (string) $product->getSalePrice(),
                'quantity' => $quantity,
                'batch_number' => $batchNumber ?? $this->generateBatchNumber(),
                'manufacturing_date' => $manufacturingDate ? $manufacturingDate->format('Y-m-d') : null,
                'expiry_date' => $expiryDate ? $expiryDate->format('Y-m-d') : null,
                'has_expiry_date' => $product->hasExpiryDate(),
                'added_at' => date('Y-m-d H:i:s')
            ];
            
            $cart[] = $item;
        }
        
        $this->saveCart($cart);
    }

    /**
     * Mettre à jour un produit dans le panier
     */
    public function updateItem(int $index, array $data): void
    {
        $cart = $this->getCart();
        
        if (isset($cart[$index])) {
            foreach ($data as $key => $value) {
                if ($key === 'manufacturing_date' || $key === 'expiry_date') {
                    if (!empty($value)) {
                        try {
                            $cart[$index][$key] = $value;
                        } catch (\Exception $e) {
                            $cart[$index][$key] = null;
                        }
                    } else {
                        $cart[$index][$key] = null;
                    }
                } else {
                    $cart[$index][$key] = $value;
                }
            }
            $this->saveCart($cart);
        }
    }

    /**
     * Supprimer un produit du panier
     */
    public function removeItem(int $index): void
    {
        $cart = $this->getCart();
        
        if (isset($cart[$index])) {
            unset($cart[$index]);
            $this->saveCart(array_values($cart)); // Réindexer
        }
    }

    /**
     * Vider le panier
     */
    public function clear(): void
    {
        $this->session->remove(self::CART_KEY);
        $this->session->remove(self::SUPPLIER_KEY);
        $this->session->save(); // Sauvegarder explicitement
    }

    /**
     * Obtenir le contenu du panier
     */
    public function getCart(): array
    {
        return $this->session->get(self::CART_KEY, []);
    }

    /**
     * Obtenir le nombre d'articles dans le panier
     */
    public function getItemCount(): int
    {
        return count($this->getCart());
    }

    /**
     * Calculer le montant total
     */
    public function getTotalAmount(): string
    {
        $total = 0.00;
        $cart = $this->getCart();
        
        foreach ($cart as $item) {
            $price = (float) $item['purchase_price'];
            $quantity = (int) $item['quantity'];
            $total += $price * $quantity;
        }
        
        return number_format($total, 2, '.', '');
    }

    /**
     * Enregistrer le fournisseur
     */
    public function setSupplier(?Supplier $supplier): void
    {
        if ($supplier) {
            $supplierData = [
                'id' => $supplier->getId(),
                'name' => $supplier->getName(),
                'email' => $supplier->getEmail(),
                'phone' => $supplier->getPhone(),
                'address' => $supplier->getAdress(),
                'selected_at' => date('Y-m-d H:i:s')
            ];
            
            $this->session->set(self::SUPPLIER_KEY, $supplierData);
            // Force la sauvegarde immédiate
            $this->session->save();
        } else {
            $this->session->remove(self::SUPPLIER_KEY);
            $this->session->save();
        }
    }

    /**
     * Obtenir le fournisseur
     */
    public function getSupplier(): ?array
    {
        $supplier = $this->session->get(self::SUPPLIER_KEY);
        
        if (!$supplier) {
            return null;
        }
        
        // Vérifier la structure
        if (!isset($supplier['id'])) {
            return null;
        }
        
        return $supplier;
    }

    /**
     * Obtenir l'ID du fournisseur
     */
    public function getSupplierId(): ?int
    {
        $supplier = $this->getSupplier();
        return $supplier && isset($supplier['id']) ? (int) $supplier['id'] : null;
    }

    /**
     * Générer un numéro de lot par défaut
     */
    private function generateBatchNumber(): string
    {
        return 'LOT-PROV-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
    }

    /**
     * Trouver la clé d'un produit dans le panier
     */
    private function findProductKey(int $productId): ?int
    {
        $cart = $this->getCart();
        
        foreach ($cart as $key => $item) {
            if ($item['product_id'] === $productId) {
                return $key;
            }
        }
        
        return null;
    }

    /**
     * Sauvegarder le panier
     */
    private function saveCart(array $cart): void
    {
        $this->session->set(self::CART_KEY, $cart);
        $this->session->save();
    }

    /**
     * Obtenir les données pour confirmation
     */
    public function getCartForConfirmation(): array
    {
        return [
            'items' => $this->getCart(),
            'supplier' => $this->getSupplier(),
            'total_amount' => $this->getTotalAmount(),
            'item_count' => $this->getItemCount(),
            'created_at' => date('Y-m-d H:i:s'),
        ];
    }

    /**
     * Vérifier si le panier est prêt pour confirmation
     */
    public function isReadyForConfirmation(): bool
    {
        return $this->getItemCount() > 0 && $this->getSupplierId() !== null;
    }
}