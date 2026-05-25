<?php
// src/Entity/StockAdjustment.php

namespace App\Entity;

use App\Repository\StockAdjustmentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockAdjustmentRepository::class)]
#[ORM\Table(name: 'stock_adjustment')]
class StockAdjustment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $type = null; // 'in' ou 'out'

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $reason = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $justification_file = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $created_by = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?StockBatch $stock_batch = null;

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
    }

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
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

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): static
    {
        $this->reason = $reason;
        return $this;
    }

    public function getJustificationFile(): ?string
    {
        return $this->justification_file;
    }

    public function setJustificationFile(?string $justification_file): static
    {
        $this->justification_file = $justification_file;
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

    public function getStockBatch(): ?StockBatch
    {
        return $this->stock_batch;
    }

    public function setStockBatch(?StockBatch $stock_batch): static
    {
        $this->stock_batch = $stock_batch;
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

    public function getTypeLabel(): string
    {
        return $this->type === 'in' ? 'Entrée (+) ' : 'Sortie (-)';
    }

    public function getTypeBadgeClass(): string
    {
        return $this->type === 'in' ? 'bg-success' : 'bg-danger';
    }

    public function getTypeIcon(): string
    {
        return $this->type === 'in' ? 'fa-plus-circle' : 'fa-minus-circle';
    }
}