<?php

namespace App\Entity;

use App\Repository\StockMovementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockMovementRepository::class)]
class StockMovement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $movement_type = null; // 'PURCHASE', 'SALE', 'ADJUSTMENT'

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column(nullable: true)]
    private ?int $reference_id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, nullable: true)]
    private ?string $unit_price = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'stockMovements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $product = null;

    #[ORM\ManyToOne(inversedBy: 'stockMovements')]
    private ?PurchaseItem $purchase_item = null;

    #[ORM\ManyToOne(inversedBy: 'stockMovements')]
    private ?StockBatch $stock_batch = null;

    #[ORM\ManyToOne(inversedBy: 'stockMovements')]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'stockMovements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovementType(): ?string
    {
        return $this->movement_type;
    }

    public function setMovementType(string $movement_type): static
    {
        $this->movement_type = $movement_type;

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

    public function getUnitPrice(): ?string
    {
        return $this->unit_price;
    }

    public function setUnitPrice(?string $unit_price): static
    {
        $this->unit_price = $unit_price;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTime $created_at): static
    {
        $this->created_at = $created_at;

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

    public function getPurchaseItem(): ?PurchaseItem
    {
        return $this->purchase_item;
    }

    public function setPurchaseItem(?PurchaseItem $purchase_item): static
    {
        $this->purchase_item = $purchase_item;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getReferenceId(): ?int
    {
        return $this->reference_id;
    }

    public function setReferenceId(?int $reference_id): static
    {
        $this->reference_id = $reference_id;

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

    public static function getMovementTypes(): array
    {
        return [
            'purchase_in' => 'Achat',
            'sale_out' => 'Vente',
            'adjustment_in' => 'Ajustement (+)',
            'adjustment_out' => 'Ajustement (-)',
            'return_in' => 'Retour client',
            'return_out' => 'Retour fournisseur',
            'transfer_in' => 'Transfert entrant',
            'transfer_out' => 'Transfert sortant',
        ];
    }

    public function getMovementTypeLabel(): string
    {
        $types = self::getMovementTypes();
        return $types[$this->movement_type] ?? $this->movement_type ?? 'Inconnu';
    }

    public function getMovementTypeIcon(): string
    {
        return match($this->movement_type) {
            'purchase_in' => 'bi-arrow-down-circle text-success',
            'sale_out' => 'bi-arrow-up-circle text-danger',
            'adjustment_in' => 'bi-plus-circle text-info',
            'adjustment_out' => 'bi-dash-circle text-warning',
            'return_in' => 'bi-arrow-return-left text-primary',
            'return_out' => 'bi-arrow-return-right text-secondary',
            default => 'bi-question-circle',
        };
    }

    public function getMovementTypeBadgeClass(): string
    {
        return match($this->movement_type) {
            'purchase_in' => 'bg-success',
            'sale_out' => 'bg-danger',
            'adjustment_in' => 'bg-info',
            'adjustment_out' => 'bg-warning text-dark',
            'return_in' => 'bg-primary',
            'return_out' => 'bg-secondary',
            default => 'bg-secondary',
        };
    }
}