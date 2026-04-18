<?php
// src/Entity/ReturnItem.php

namespace App\Entity;

use App\Repository\ReturnItemRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReturnItemRepository::class)]
#[ORM\Table(name: 'return_item')]
class ReturnItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'returnItems')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ReturnOrder $return_order = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?OrderItem $original_order_item = null;

    #[ORM\Column(length: 255)]
    private ?string $product_name = null;

    #[ORM\Column(length: 50)]
    private ?string $item_type = null; // product, recipe

    #[ORM\Column]
    private ?int $item_id = null;

    #[ORM\Column]
    private ?int $quantity_returned = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $unit_price_at_sale = '0';

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $refund_amount = '0';

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $total_refund = '0';

    #[ORM\Column(nullable: true)]
    private ?int $promotion_id = null;

    #[ORM\Column(nullable: true)]
    private ?string $promotion_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReturnOrder(): ?ReturnOrder
    {
        return $this->return_order;
    }

    public function setReturnOrder(?ReturnOrder $return_order): static
    {
        $this->return_order = $return_order;
        return $this;
    }

    public function getOriginalOrderItem(): ?OrderItem
    {
        return $this->original_order_item;
    }

    public function setOriginalOrderItem(?OrderItem $original_order_item): static
    {
        $this->original_order_item = $original_order_item;
        return $this;
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

    public function getItemType(): ?string
    {
        return $this->item_type;
    }

    public function setItemType(string $item_type): static
    {
        $this->item_type = $item_type;
        return $this;
    }

    public function getItemId(): ?int
    {
        return $this->item_id;
    }

    public function setItemId(int $item_id): static
    {
        $this->item_id = $item_id;
        return $this;
    }

    public function getQuantityReturned(): ?int
    {
        return $this->quantity_returned;
    }

    public function setQuantityReturned(int $quantity_returned): static
    {
        $this->quantity_returned = $quantity_returned;
        return $this;
    }

    public function getUnitPriceAtSale(): ?string
    {
        return $this->unit_price_at_sale;
    }

    public function setUnitPriceAtSale(string $unit_price_at_sale): static
    {
        $this->unit_price_at_sale = $unit_price_at_sale;
        return $this;
    }

    public function getRefundAmount(): ?string
    {
        return $this->refund_amount;
    }

    public function setRefundAmount(string $refund_amount): static
    {
        $this->refund_amount = $refund_amount;
        return $this;
    }

    public function getTotalRefund(): ?string
    {
        return $this->total_refund;
    }

    public function setTotalRefund(string $total_refund): static
    {
        $this->total_refund = $total_refund;
        return $this;
    }

    public function getPromotionId(): ?int
    {
        return $this->promotion_id;
    }

    public function setPromotionId(?int $promotion_id): static
    {
        $this->promotion_id = $promotion_id;
        return $this;
    }

    public function getPromotionName(): ?string
    {
        return $this->promotion_name;
    }

    public function setPromotionName(?string $promotion_name): static
    {
        $this->promotion_name = $promotion_name;
        return $this;
    }
}