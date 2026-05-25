<?php
// src/Entity/InventoryItem.php

namespace App\Entity;

use App\Repository\InventoryItemRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InventoryItemRepository::class)]
#[ORM\Table(name: 'inventory_item')]
class InventoryItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Inventory $inventory = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $product = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?StockBatch $stock_batch = null;

    #[ORM\Column]
    private ?int $expected_quantity = 0;

    #[ORM\Column]
    private ?int $actual_quantity = 0;

    #[ORM\Column]
    private ?int $difference = 0;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?Location $location = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $counted_by = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $counted_at = null;

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInventory(): ?Inventory
    {
        return $this->inventory;
    }

    public function setInventory(?Inventory $inventory): static
    {
        $this->inventory = $inventory;
        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;
        return $this;
    }

    public function getStockBatch(): ?StockBatch
    {
        return $this->stock_batch;
    }

    public function setStockBatch(?StockBatch $stock_batch): static
    {
        $this->stock_batch = $stock_batch;
        return $this;
    }

    public function getExpectedQuantity(): ?int
    {
        return $this->expected_quantity;
    }

    public function setExpectedQuantity(int $expected_quantity): static
    {
        $this->expected_quantity = $expected_quantity;
        return $this;
    }

    public function getActualQuantity(): ?int
    {
        return $this->actual_quantity;
    }

    public function setActualQuantity(int $actual_quantity): static
    {
        $this->actual_quantity = $actual_quantity;
        $this->difference = $actual_quantity - $this->expected_quantity;
        return $this;
    }

    public function getDifference(): ?int
    {
        return $this->difference;
    }

    public function setDifference(int $difference): static
    {
        $this->difference = $difference;
        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): static
    {
        $this->location = $location;
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

    public function getCountedBy(): ?User
    {
        return $this->counted_by;
    }

    public function setCountedBy(?User $counted_by): static
    {
        $this->counted_by = $counted_by;
        return $this;
    }

    public function getCountedAt(): ?\DateTime
    {
        return $this->counted_at;
    }

    public function setCountedAt(?\DateTime $counted_at): static
    {
        $this->counted_at = $counted_at;
        return $this;
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    public function hasDifference(): bool
    {
        return $this->difference !== 0;
    }

    public function getDifferenceType(): string
    {
        if ($this->difference > 0) {
            return 'surplus';
        }
        if ($this->difference < 0) {
            return 'manque';
        }
        return 'egal';
    }

    public function getDifferenceBadgeClass(): string
    {
        return match($this->getDifferenceType()) {
            'surplus' => 'badge bg-success',
            'manque' => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    }

    public function getDifferenceLabel(): string
    {
        return match($this->getDifferenceType()) {
            'surplus' => '+' . $this->difference,
            'manque' => (string)$this->difference,
            default => 'OK',
        };
    }
}