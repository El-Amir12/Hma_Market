<?php

namespace App\Entity;

use App\Repository\OrderItemRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderItemRepository::class)]
class OrderItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $product_name = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $unit_price = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $batch_purchase_price = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $total_price = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'orderItems')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Order $vente = null;

    #[ORM\ManyToOne(inversedBy: 'orderItems')]
    private ?Recipe $recipe = null;

    #[ORM\Column(nullable: true)]
    private ?int $promotionId = null;

    #[ORM\Column(nullable: true, length: 255)]
    private ?string $promotionName = null;

    #[ORM\Column(nullable: true)]
    private ?string $promotionDiscountAmount = null;

    #[ORM\Column(nullable: true)]
    private ?string $promotionDiscountPercentage = null;

    #[ORM\Column(nullable: true)]
    private ?string $originalUnitPrice = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->product_name;
    }

    public function setProductName(string $product_name): static
    {
        $this->product_name = $product_name;

        return $this;
    }

    public function getUnitPrice(): ?string
    {
        return $this->unit_price;
    }

    public function setUnitPrice(string $unit_price): static
    {
        $this->unit_price = $unit_price;

        return $this;
    }

    public function getBatchPurchasePrice(): ?string
    {
        return $this->batch_purchase_price;
    }

    public function setBatchPurchasePrice(string $batch_purchase_price): static
    {
        $this->batch_purchase_price = $batch_purchase_price;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getTotalPrice(): ?string
    {
        return $this->total_price;
    }

    public function setTotalPrice(string $total_price): static
    {
        $this->total_price = $total_price;

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

    public function getVente(): ?Order
    {
        return $this->vente;
    }

    public function setVente(?Order $vente): static
    {
        $this->vente = $vente;

        return $this;
    }

    public function getRecipe(): ?Recipe
    {
        return $this->recipe;
    }

    public function setRecipe(?Recipe $recipe): static
    {
        $this->recipe = $recipe;

        return $this;
    }

    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    public function setPromotionId(?int $promotionId): static
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    public function setPromotionName(?string $promotionName): static
    {
        $this->promotionName = $promotionName;
        return $this;
    }

    public function getPromotionDiscountAmount(): ?string
    {
        return $this->promotionDiscountAmount;
    }

    public function setPromotionDiscountAmount(?string $promotionDiscountAmount): static
    {
        $this->promotionDiscountAmount = $promotionDiscountAmount;
        return $this;
    }

    public function getPromotionDiscountPercentage(): ?string
    {
        return $this->promotionDiscountPercentage;
    }

    public function setPromotionDiscountPercentage(?string $promotionDiscountPercentage): static
    {
        $this->promotionDiscountPercentage = $promotionDiscountPercentage;
        return $this;
    }

    public function getOriginalUnitPrice(): ?string
    {
        return $this->originalUnitPrice;
    }

    public function setOriginalUnitPrice(?string $originalUnitPrice): static
    {
        $this->originalUnitPrice = $originalUnitPrice;
        return $this;
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    /**
     * Vérifie si l'article a bénéficié d'une promotion
     */
    public function hasPromotion(): bool
    {
        return $this->promotionId !== null && $this->promotionDiscountAmount !== null;
    }

    /**
     * Retourne le prix unitaire original (avant promotion)
     */
    public function getOriginalUnitPriceValue(): ?float
    {
        return $this->originalUnitPrice !== null ? (float) $this->originalUnitPrice : null;
    }

    /**
     * Retourne le montant de la remise
     */
    public function getDiscountAmountValue(): ?float
    {
        return $this->promotionDiscountAmount !== null ? (float) $this->promotionDiscountAmount : null;
    }

    /**
     * Retourne le pourcentage de remise
     */
    public function getDiscountPercentageValue(): ?float
    {
        return $this->promotionDiscountPercentage !== null ? (float) $this->promotionDiscountPercentage : null;
    }
}
