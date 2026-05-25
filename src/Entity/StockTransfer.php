<?php
// src/Entity/StockTransfer.php

namespace App\Entity;

use App\Repository\StockTransferRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockTransferRepository::class)]
#[ORM\Table(name: 'stock_transfer')]
class StockTransfer
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_IN_TRANSIT = 'in_transit';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_CANCELLED = 'cancelled';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $transfer_number = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?StockBatch $stock_batch = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $source_location = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $destination_location = null;

    #[ORM\Column(length: 20)]
    private ?string $status = self::STATUS_PENDING;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $reason = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $created_by = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $received_by = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $received_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $updated_at = null;

    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->status = self::STATUS_PENDING;
    }

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransferNumber(): ?string
    {
        return $this->transfer_number;
    }

    public function setTransferNumber(string $transfer_number): static
    {
        $this->transfer_number = $transfer_number;
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

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getSourceLocation(): ?Location
    {
        return $this->source_location;
    }

    public function setSourceLocation(?Location $source_location): static
    {
        $this->source_location = $source_location;
        return $this;
    }

    public function getDestinationLocation(): ?Location
    {
        return $this->destination_location;
    }

    public function setDestinationLocation(?Location $destination_location): static
    {
        $this->destination_location = $destination_location;
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

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): static
    {
        $this->reason = $reason;
        return $this;
    }

    public function getCreatedBy(): ?User
    {
        return $this->created_by;
    }

    public function setCreatedBy(?User $created_by): static
    {
        $this->created_by = $created_by;
        return $this;
    }

    public function getReceivedBy(): ?User
    {
        return $this->received_by;
    }

    public function setReceivedBy(?User $received_by): static
    {
        $this->received_by = $received_by;
        return $this;
    }

    public function getReceivedAt(): ?\DateTime
    {
        return $this->received_at;
    }

    public function setReceivedAt(?\DateTime $received_at): static
    {
        $this->received_at = $received_at;
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

    public function setUpdatedAt(?\DateTime $updated_at): static
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    public static function getStatusList(): array
    {
        return [
            self::STATUS_PENDING => 'En attente',
            self::STATUS_IN_TRANSIT => 'En transit',
            self::STATUS_COMPLETED => 'Terminé',
            self::STATUS_CANCELLED => 'Annulé',
        ];
    }

    public function getStatusLabel(): string
    {
        return self::getStatusList()[$this->status] ?? $this->status;
    }

    public function getStatusBadgeClass(): string
    {
        return match($this->status) {
            self::STATUS_PENDING => 'badge bg-warning text-dark',
            self::STATUS_IN_TRANSIT => 'badge bg-primary',
            self::STATUS_COMPLETED => 'badge bg-success',
            self::STATUS_CANCELLED => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    }

    public function getStatusIcon(): string
    {
        return match($this->status) {
            self::STATUS_PENDING => 'fa-clock',
            self::STATUS_IN_TRANSIT => 'fa-truck',
            self::STATUS_COMPLETED => 'fa-check-circle',
            self::STATUS_CANCELLED => 'fa-ban',
            default => 'fa-question',
        };
    }
}