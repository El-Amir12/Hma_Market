<?php
// src/Entity/Order.php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    // ==================== CONSTANTES DES STATUTS ====================
    public const STATUS_PENDING = 'pending';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_SHIPPED = 'shipped';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_REFUNDED = 'refunded';

    /**
     * Retourne tous les statuts disponibles avec leurs libellés
     */
    public static function getStatusLabels(): array
    {
        return [
            self::STATUS_PENDING => '⏳ En attente',
            self::STATUS_PROCESSING => '⚙️ En traitement',
            self::STATUS_SHIPPED => '📦 Expédiée',
            self::STATUS_DELIVERED => '✅ Livrée',
            self::STATUS_COMPLETED => '✅ Terminée',
            self::STATUS_CANCELLED => '❌ Annulée',
            self::STATUS_REFUNDED => '🔄 Remboursée',
        ];
    }

    /**
     * Retourne les couleurs Bootstrap pour chaque statut
     */
    public static function getStatusColors(): array
    {
        return [
            self::STATUS_PENDING => 'warning',
            self::STATUS_PROCESSING => 'info',
            self::STATUS_SHIPPED => 'primary',
            self::STATUS_DELIVERED => 'success',
            self::STATUS_COMPLETED => 'success',
            self::STATUS_CANCELLED => 'danger',
            self::STATUS_REFUNDED => 'secondary',
        ];
    }

    /**
     * Vérifie si la commande est une vente en caisse
     */
    public function isDirectSale(): bool
    {
        return empty($this->customer_email) && $this->status === self::STATUS_COMPLETED;
    }

    /**
     * Vérifie si la commande est une commande marketplace
     */
    public function isMarketplaceOrder(): bool
    {
        return !empty($this->customer_email);
    }

    /**
     * Retourne le libellé du statut actuel
     */
    public function getStatusLabel(): string
    {
        $labels = self::getStatusLabels();
        return $labels[$this->status] ?? $this->status ?? 'Inconnu';
    }

    /**
     * Retourne la couleur du statut actuel
     */
    public function getStatusColor(): string
    {
        $colors = self::getStatusColors();
        return $colors[$this->status] ?? 'secondary';
    }

    // ==================== PROPRIÉTÉS ====================

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $order_number = null;

    #[ORM\Column(length: 50)]
    private ?string $customer_name = null;

    #[ORM\Column(length: 30)]
    private ?string $customer_phone = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $total_amount = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $amount_paid = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $change_amount = null;

    #[ORM\Column(length: 20)]
    private ?string $payment_method = null;

    #[ORM\Column(length: 20)]
    private ?string $payment_status = null;

    #[ORM\Column(length: 20)]
    private ?string $status = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $delivery_address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $delivery_city = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $delivery_zipcode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $delivery_country = null;

    #[ORM\Column(nullable: true)]
    private ?float $delivery_latitude = null;

    #[ORM\Column(nullable: true)]
    private ?float $delivery_longitude = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $customer_email = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\Column]
    private ?\DateTime $updated_at = null;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private bool $subscription_active = true;

    #[ORM\ManyToOne(inversedBy: 'orders')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private ?bool $is_active = true;

    /**
     * @var Collection<int, OrderItem>
     */
    #[ORM\OneToMany(targetEntity: OrderItem::class, mappedBy: 'vente', orphanRemoval: true)]
    private Collection $orderItems;

    #[ORM\ManyToOne(inversedBy: 'orders')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    // ✅ NOUVELLE RELATION : Customer (nullable)
    #[ORM\ManyToOne(targetEntity: Customer::class, inversedBy: 'orders')]
    #[ORM\JoinColumn(name: 'customer_id', referencedColumnName: 'id', nullable: true)]
    private ?Customer $customer = null;

    // ==================== CONSTRUCTEUR ====================

    public function __construct()
    {
        $this->orderItems = new ArrayCollection();
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
        $this->is_active = true;
        $this->subscription_active = true;
    }

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderNumber(): ?string
    {
        return $this->order_number;
    }

    public function setOrderNumber(string $order_number): static
    {
        $this->order_number = $order_number;
        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->customer_name;
    }

    public function setCustomerName(string $customer_name): static
    {
        $this->customer_name = $customer_name;
        return $this;
    }

    public function getCustomerPhone(): ?string
    {
        return $this->customer_phone;
    }

    public function setCustomerPhone(string $customer_phone): static
    {
        $this->customer_phone = $customer_phone;
        return $this;
    }

    public function getTotalAmount(): ?string
    {
        return $this->total_amount;
    }

    public function setTotalAmount(string $total_amount): static
    {
        $this->total_amount = $total_amount;
        return $this;
    }

    public function getAmountPaid(): ?string
    {
        return $this->amount_paid;
    }

    public function setAmountPaid(string $amount_paid): static
    {
        $this->amount_paid = $amount_paid;
        return $this;
    }

    public function getChangeAmount(): ?string
    {
        return $this->change_amount;
    }

    public function setChangeAmount(string $change_amount): static
    {
        $this->change_amount = $change_amount;
        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->payment_method;
    }

    public function setPaymentMethod(string $payment_method): static
    {
        $this->payment_method = $payment_method;
        return $this;
    }

    public function getPaymentStatus(): ?string
    {
        return $this->payment_status;
    }

    public function setPaymentStatus(string $payment_status): static
    {
        $this->payment_status = $payment_status;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;
        return $this;
    }

    public function getDeliveryAddress(): ?string
    {
        return $this->delivery_address;
    }

    public function setDeliveryAddress(?string $delivery_address): static
    {
        $this->delivery_address = $delivery_address;
        return $this;
    }

    public function getDeliveryCity(): ?string
    {
        return $this->delivery_city;
    }

    public function setDeliveryCity(?string $delivery_city): static
    {
        $this->delivery_city = $delivery_city;
        return $this;
    }

    public function getDeliveryZipcode(): ?string
    {
        return $this->delivery_zipcode;
    }

    public function setDeliveryZipcode(?string $delivery_zipcode): static
    {
        $this->delivery_zipcode = $delivery_zipcode;
        return $this;
    }

    public function getDeliveryCountry(): ?string
    {
        return $this->delivery_country;
    }

    public function setDeliveryCountry(?string $delivery_country): static
    {
        $this->delivery_country = $delivery_country;
        return $this;
    }

    public function getDeliveryLatitude(): ?float
    {
        return $this->delivery_latitude;
    }

    public function setDeliveryLatitude(?float $delivery_latitude): static
    {
        $this->delivery_latitude = $delivery_latitude;
        return $this;
    }

    public function getDeliveryLongitude(): ?float
    {
        return $this->delivery_longitude;
    }

    public function setDeliveryLongitude(?float $delivery_longitude): static
    {
        $this->delivery_longitude = $delivery_longitude;
        return $this;
    }

    public function getCustomerEmail(): ?string
    {
        return $this->customer_email;
    }

    public function setCustomerEmail(?string $customer_email): static
    {
        $this->customer_email = $customer_email;
        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTime $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTime $updated_at): static
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): static
    {
        $this->is_active = $is_active;
        return $this;
    }

    public function isSubscriptionActive(): bool
    {
        return $this->subscription_active;
    }

    public function setSubscriptionActive(bool $subscription_active): self
    {
        $this->subscription_active = $subscription_active;
        return $this;
    }

    public function getHmaService(): ?HmaService
    {
        return $this->hma_service;
    }

    public function setHmaService(?HmaService $hma_service): static
    {
        $this->hma_service = $hma_service;
        return $this;
    }

    /**
     * @return Collection<int, OrderItem>
     */
    public function getOrderItems(): Collection
    {
        return $this->orderItems;
    }

    public function addOrderItem(OrderItem $orderItem): static
    {
        if (!$this->orderItems->contains($orderItem)) {
            $this->orderItems->add($orderItem);
            $orderItem->setVente($this);
        }
        return $this;
    }

    public function removeOrderItem(OrderItem $orderItem): static
    {
        if ($this->orderItems->removeElement($orderItem)) {
            if ($orderItem->getVente() === $this) {
                $orderItem->setVente(null);
            }
        }
        return $this;
    }

    // ==================== GETTERS & SETTERS CUSTOMER ====================

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): static
    {
        $this->customer = $customer;
        return $this;
    }

    // ==================== MÉTHODES DE CALCUL ====================

    /**
     * Calcule le sous-total HT de la commande (sans les remises)
     */
    public function getSubtotal(): float
    {
        $subtotal = 0;
        foreach ($this->orderItems as $item) {
            $subtotal += (float) $item->getTotalPrice();
        }
        return $subtotal;
    }

    /**
     * Calcule le montant total des remises
     */
    public function getDiscountTotal(): float
    {
        $discount = 0;
        foreach ($this->orderItems as $item) {
            $discount += (float) ($item->getDiscountAmountValue() ?? 0);
        }
        return $discount;
    }

    /**
     * Calcule le total après remise (équivalent à total_amount)
     */
    public function getGrandTotal(): float
    {
        return $this->getSubtotal() - $this->getDiscountTotal();
    }

    /**
     * Formate le sous-total
     */
    public function getSubtotalFormatted(): string
    {
        return number_format($this->getSubtotal(), 0, ',', ' ') . ' FCFA';
    }

    /**
     * Formate le total des remises
     */
    public function getDiscountTotalFormatted(): string
    {
        return number_format($this->getDiscountTotal(), 0, ',', ' ') . ' FCFA';
    }
}