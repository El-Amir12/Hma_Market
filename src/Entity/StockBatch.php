<?php
// src/Entity/StockBatch.php

namespace App\Entity;

use App\Repository\StockBatchRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockBatchRepository::class)]
class StockBatch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $batch_number = null;

    #[ORM\Column]
    private ?int $initial_quantity = null;

    #[ORM\Column]
    private ?int $current_quantity = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $unit_price = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $expiry_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $manufacturing_date = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'stockBatches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $product = null;

    #[ORM\Column(name: 'purchase_item_id', nullable: true)]
    private ?int $purchaseItemId = null;

    #[ORM\Column(nullable: true)]
    private ?bool $is_active = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?Location $locationEntity = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\OneToMany(targetEntity: StockMovement::class, mappedBy: 'stock_batch')]
    private Collection $stockMovements;

    #[ORM\ManyToOne(inversedBy: 'stockBatches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    // ========== COLONNES POUR LES AVOIRS FOURNISSEURS ==========
    
    #[ORM\Column(nullable: true)]
    private ?bool $has_issue = false;

    // ✅ Utilisation d'un simple ID au lieu d'une relation OneToOne
    #[ORM\Column(nullable: true)]
    private ?int $supplier_credit_note_id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, nullable: true)]
    private ?string $issue_declared_amount = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, nullable: true)]
    private ?string $issue_recovered_amount = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, nullable: true)]
    private ?string $issue_lost_amount = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $issue_status = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $issue_priority = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $issue_reported_at = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $issue_resolved_at = null;

    public function __construct()
    {
        $this->stockMovements = new ArrayCollection();
        $this->has_issue = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBatchNumber(): ?string
    {
        return $this->batch_number;
    }

    public function setBatchNumber(string $batch_number): static
    {
        $this->batch_number = $batch_number;
        return $this;
    }

    public function getInitialQuantity(): ?int
    {
        return $this->initial_quantity;
    }

    public function setInitialQuantity(int $initial_quantity): static
    {
        $this->initial_quantity = $initial_quantity;
        return $this;
    }

    public function getCurrentQuantity(): ?int
    {
        return $this->current_quantity;
    }

    public function setCurrentQuantity(int $current_quantity): static
    {
        $this->current_quantity = $current_quantity;
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

    public function getExpiryDate(): ?\DateTimeInterface
    {
        return $this->expiry_date;
    }

    public function setExpiryDate(?\DateTimeInterface $expiry_date): static
    {
        $this->expiry_date = $expiry_date;
        return $this;
    }

    public function getManufacturingDate(): ?\DateTimeInterface
    {
        return $this->manufacturing_date;
    }

    public function setManufacturingDate(?\DateTimeInterface $manufacturing_date): static
    {
        $this->manufacturing_date = $manufacturing_date;
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

    public function getPurchaseItemId(): ?int
    {
        return $this->purchaseItemId;
    }

    public function setPurchaseItemId(?int $purchaseItemId): static
    {
        $this->purchaseItemId = $purchaseItemId;
        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(?bool $is_active): static
    {
        $this->is_active = $is_active;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;
        return $this;
    }

    public function getLocationEntity(): ?Location
    {
        return $this->locationEntity;
    }

    public function setLocationEntity(?Location $locationEntity): static
    {
        $this->locationEntity = $locationEntity;
        $this->location = $locationEntity?->getDisplayName();
        return $this;
    }

    public function getLocationDisplay(): string
    {
        if ($this->locationEntity) {
            return $this->locationEntity->getDisplayName();
        }
        return $this->location ?: 'Non défini';
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getStockMovements(): Collection
    {
        return $this->stockMovements;
    }

    public function addStockMovement(StockMovement $stockMovement): static
    {
        if (!$this->stockMovements->contains($stockMovement)) {
            $this->stockMovements->add($stockMovement);
            $stockMovement->setStockBatch($this);
        }
        return $this;
    }

    public function removeStockMovement(StockMovement $stockMovement): static
    {
        if ($this->stockMovements->removeElement($stockMovement)) {
            if ($stockMovement->getStockBatch() === $this) {
                $stockMovement->setStockBatch(null);
            }
        }
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

    // ========== GETTERS/SETTERS POUR LES AVOIRS ==========

    public function hasIssue(): ?bool
    {
        return $this->has_issue;
    }

    public function setHasIssue(?bool $has_issue): static
    {
        $this->has_issue = $has_issue;
        return $this;
    }

    public function getSupplierCreditNoteId(): ?int
    {
        return $this->supplier_credit_note_id;
    }

    public function setSupplierCreditNoteId(?int $supplier_credit_note_id): static
    {
        $this->supplier_credit_note_id = $supplier_credit_note_id;
        return $this;
    }

    public function getIssueDeclaredAmount(): ?string
    {
        return $this->issue_declared_amount;
    }

    public function setIssueDeclaredAmount(?string $issue_declared_amount): static
    {
        $this->issue_declared_amount = $issue_declared_amount;
        return $this;
    }

    public function getIssueRecoveredAmount(): ?string
    {
        return $this->issue_recovered_amount;
    }

    public function setIssueRecoveredAmount(?string $issue_recovered_amount): static
    {
        $this->issue_recovered_amount = $issue_recovered_amount;
        return $this;
    }

    public function getIssueLostAmount(): ?string
    {
        return $this->issue_lost_amount;
    }

    public function setIssueLostAmount(?string $issue_lost_amount): static
    {
        $this->issue_lost_amount = $issue_lost_amount;
        return $this;
    }

    public function getIssueStatus(): ?string
    {
        return $this->issue_status;
    }

    public function setIssueStatus(?string $issue_status): static
    {
        $this->issue_status = $issue_status;
        return $this;
    }

    public function getIssuePriority(): ?string
    {
        return $this->issue_priority;
    }

    public function setIssuePriority(?string $issue_priority): static
    {
        $this->issue_priority = $issue_priority;
        return $this;
    }

    public function getIssueReportedAt(): ?\DateTimeInterface
    {
        return $this->issue_reported_at;
    }

    public function setIssueReportedAt(?\DateTimeInterface $issue_reported_at): static
    {
        $this->issue_reported_at = $issue_reported_at;
        return $this;
    }

    public function getIssueResolvedAt(): ?\DateTimeInterface
    {
        return $this->issue_resolved_at;
    }

    public function setIssueResolvedAt(?\DateTimeInterface $issue_resolved_at): static
    {
        $this->issue_resolved_at = $issue_resolved_at;
        return $this;
    }

    // ========== MÉTHODES UTILITAIRES ==========

    public function getIssueStatusLabel(): string
    {
        $statuses = [
            'pending' => 'En attente',
            'acknowledged' => 'Accusé réception',
            'under_review' => 'En cours d\'analyse',
            'partially_recovered' => 'Partiellement récupéré',
            'recovered' => 'Récupéré',
            'lost' => 'Perdu',
            'closed' => 'Clôturé',
            'refused' => 'Refusé',
        ];
        return $statuses[$this->issue_status] ?? $this->issue_status ?? '—';
    }

    public function getIssueStatusBadgeClass(): string
    {
        return match($this->issue_status) {
            'pending' => 'badge bg-warning text-dark',
            'acknowledged' => 'badge bg-info',
            'under_review' => 'badge bg-primary',
            'partially_recovered' => 'badge bg-secondary',
            'recovered' => 'badge bg-success',
            'lost' => 'badge bg-danger',
            'closed' => 'badge bg-dark',
            'refused' => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    }

    public function getIssuePriorityLabel(): string
    {
        $priorities = [
            'low' => 'Basse',
            'medium' => 'Moyenne',
            'high' => 'Haute',
            'critical' => 'Critique',
        ];
        return $priorities[$this->issue_priority] ?? $this->issue_priority ?? '—';
    }

    public function getIssuePriorityBadgeClass(): string
    {
        return match($this->issue_priority) {
            'low' => 'badge bg-secondary',
            'medium' => 'badge bg-info',
            'high' => 'badge bg-warning text-dark',
            'critical' => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    }
}