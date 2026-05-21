<?php
// src/Entity/SupplierCreditNote.php

namespace App\Entity;

use App\Repository\SupplierCreditNoteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SupplierCreditNoteRepository::class)]
#[ORM\Table(name: 'supplier_credit_note')]
#[ORM\HasLifecycleCallbacks]
class SupplierCreditNote
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_ACKNOWLEDGED = 'acknowledged';
    public const STATUS_UNDER_REVIEW = 'under_review';
    public const STATUS_PARTIALLY_RECOVERED = 'partially_recovered';
    public const STATUS_RECOVERED = 'recovered';
    public const STATUS_LOST = 'lost';
    public const STATUS_CLOSED = 'closed';
    public const STATUS_REFUSED = 'refused';
    
    public const PRIORITY_LOW = 'low';
    public const PRIORITY_MEDIUM = 'medium';
    public const PRIORITY_HIGH = 'high';
    public const PRIORITY_CRITICAL = 'critical';
    
    public const ISSUE_TYPE_QUALITY = 'quality';
    public const ISSUE_TYPE_QUANTITY_MISSING = 'quantity_missing';
    public const ISSUE_TYPE_DAMAGED = 'damaged';
    public const ISSUE_TYPE_WRONG_PRODUCT = 'wrong_product';
    public const ISSUE_TYPE_SHORT_SHELF_LIFE = 'short_shelf_life';
    public const ISSUE_TYPE_OTHER = 'other';

    public const STOCK_ACTION_LABELS = [
        'none' => 'Aucune action',
        'reduce' => 'Réduire le stock',
        'zero' => 'Mettre à zéro',
        'return' => 'Retour fournisseur',
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $credit_note_number = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?StockBatch $stockBatch = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Purchase $purchase = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Supplier $supplier = null;

    #[ORM\Column(length: 50)]
    private ?string $issue_type = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $declared_amount = '0.00';

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, nullable: true)]
    private ?string $recovered_amount = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, nullable: true)]
    private ?string $lost_amount = null;

    #[ORM\Column(length: 20)]
    private ?string $status = self::STATUS_PENDING;

    #[ORM\Column(length: 20)]
    private ?string $priority = self::PRIORITY_MEDIUM;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $attachments = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $reported_by = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $reported_at = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $supplier_response = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $supplier_response_at = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, nullable: true)]
    private ?string $supplier_proposed_amount = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $supplier_decision = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $supplier_reference = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $internal_notes = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $resolved_by = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $resolved_at = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $resolution_notes = null;

    #[ORM\Column(nullable: true)]
    private ?int $affected_quantity = null;

    #[ORM\Column(length: 20, nullable: true, options: ['default' => 'none'])]
    private ?string $stock_action = 'none';

    // 🔥 NOUVEAU CHAMP : pour savoir si l'action sur le stock a déjà été appliquée
    #[ORM\Column(options: ['default' => false])]
    private ?bool $stock_action_applied = false;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    /**
     * @var Collection<int, SupplierCreditNoteHistory>
     */
    #[ORM\OneToMany(targetEntity: SupplierCreditNoteHistory::class, mappedBy: 'creditNote', cascade: ['persist', 'remove'])]
    private Collection $histories;

    public function __construct()
    {
        $this->histories = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
        $this->stock_action_applied = false;
    }

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int { return $this->id; }

    public function getCreditNoteNumber(): ?string { return $this->credit_note_number; }
    public function setCreditNoteNumber(string $credit_note_number): static
    {
        $this->credit_note_number = $credit_note_number;
        return $this;
    }

    public function getStockBatch(): ?StockBatch { return $this->stockBatch; }
    public function setStockBatch(?StockBatch $stockBatch): static
    {
        $this->stockBatch = $stockBatch;
        return $this;
    }

    public function getPurchase(): ?Purchase { return $this->purchase; }
    public function setPurchase(?Purchase $purchase): static
    {
        $this->purchase = $purchase;
        return $this;
    }

    public function getSupplier(): ?Supplier { return $this->supplier; }
    public function setSupplier(?Supplier $supplier): static
    {
        $this->supplier = $supplier;
        return $this;
    }

    public function getIssueType(): ?string { return $this->issue_type; }
    public function setIssueType(string $issue_type): static
    {
        $this->issue_type = $issue_type;
        return $this;
    }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getDeclaredAmount(): ?string { return $this->declared_amount; }
    public function setDeclaredAmount(string $declared_amount): static
    {
        $this->declared_amount = $declared_amount;
        return $this;
    }

    public function getRecoveredAmount(): ?string { return $this->recovered_amount; }
    public function setRecoveredAmount(?string $recovered_amount): static
    {
        $this->recovered_amount = $recovered_amount;
        return $this;
    }

    public function getLostAmount(): ?string { return $this->lost_amount; }
    public function setLostAmount(?string $lost_amount): static
    {
        $this->lost_amount = $lost_amount;
        return $this;
    }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getPriority(): ?string { return $this->priority; }
    public function setPriority(string $priority): static
    {
        $this->priority = $priority;
        return $this;
    }

    public function getAttachments(): ?array { return $this->attachments; }
    public function setAttachments(?array $attachments): static
    {
        $this->attachments = $attachments;
        return $this;
    }

    public function getReportedBy(): ?User { return $this->reported_by; }
    public function setReportedBy(?User $reported_by): static
    {
        $this->reported_by = $reported_by;
        return $this;
    }

    public function getReportedAt(): ?\DateTimeImmutable { return $this->reported_at; }
    public function setReportedAt(?\DateTimeImmutable $reported_at): static
    {
        $this->reported_at = $reported_at;
        return $this;
    }

    public function getSupplierResponse(): ?string { return $this->supplier_response; }
    public function setSupplierResponse(?string $supplier_response): static
    {
        $this->supplier_response = $supplier_response;
        return $this;
    }

    public function getSupplierResponseAt(): ?\DateTimeImmutable { return $this->supplier_response_at; }
    public function setSupplierResponseAt(?\DateTimeImmutable $supplier_response_at): static
    {
        $this->supplier_response_at = $supplier_response_at;
        return $this;
    }

    public function getSupplierProposedAmount(): ?string { return $this->supplier_proposed_amount; }
    public function setSupplierProposedAmount(?string $supplier_proposed_amount): static
    {
        $this->supplier_proposed_amount = $supplier_proposed_amount;
        return $this;
    }

    public function getSupplierDecision(): ?string { return $this->supplier_decision; }
    public function setSupplierDecision(?string $supplier_decision): static
    {
        $this->supplier_decision = $supplier_decision;
        return $this;
    }

    public function getSupplierReference(): ?string { return $this->supplier_reference; }
    public function setSupplierReference(?string $supplier_reference): static
    {
        $this->supplier_reference = $supplier_reference;
        return $this;
    }

    public function getInternalNotes(): ?string { return $this->internal_notes; }
    public function setInternalNotes(?string $internal_notes): static
    {
        $this->internal_notes = $internal_notes;
        return $this;
    }

    public function getResolvedBy(): ?User { return $this->resolved_by; }
    public function setResolvedBy(?User $resolved_by): static
    {
        $this->resolved_by = $resolved_by;
        return $this;
    }

    public function getResolvedAt(): ?\DateTimeImmutable { return $this->resolved_at; }
    public function setResolvedAt(?\DateTimeImmutable $resolved_at): static
    {
        $this->resolved_at = $resolved_at;
        return $this;
    }

    public function getResolutionNotes(): ?string { return $this->resolution_notes; }
    public function setResolutionNotes(?string $resolution_notes): static
    {
        $this->resolution_notes = $resolution_notes;
        return $this;
    }

    public function getAffectedQuantity(): ?int
    {
        return $this->affected_quantity;
    }

    public function setAffectedQuantity(?int $affected_quantity): static
    {
        $this->affected_quantity = $affected_quantity;
        return $this;
    }

    public function getStockAction(): ?string
    {
        return $this->stock_action;
    }

    public function setStockAction(?string $stock_action): static
    {
        $this->stock_action = $stock_action;
        return $this;
    }

    public function getStockActionLabel(): string
    {
        return self::STOCK_ACTION_LABELS[$this->stock_action] ?? 'Aucune action';
    }

    // 🔥 GETTER & SETTER pour stock_action_applied
    public function getStockActionApplied(): ?bool
    {
        return $this->stock_action_applied;
    }

    public function setStockActionApplied(?bool $stock_action_applied): static
    {
        $this->stock_action_applied = $stock_action_applied;
        return $this;
    }

    public function getHmaService(): ?HmaService { return $this->hma_service; }
    public function setHmaService(?HmaService $hma_service): static
    {
        $this->hma_service = $hma_service;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->created_at; }
    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable { return $this->updated_at; }
    public function setUpdatedAt(?\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return Collection<int, SupplierCreditNoteHistory>
     */
    public function getHistories(): Collection
    {
        return $this->histories;
    }

    public function addHistory(SupplierCreditNoteHistory $history): static
    {
        if (!$this->histories->contains($history)) {
            $this->histories->add($history);
            $history->setCreditNote($this);
        }
        return $this;
    }

    public function removeHistory(SupplierCreditNoteHistory $history): static
    {
        if ($this->histories->removeElement($history)) {
            if ($history->getCreditNote() === $this) {
                $history->setCreditNote(null);
            }
        }
        return $this;
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    public static function getStatusList(): array
    {
        return [
            self::STATUS_PENDING => 'En attente',
            self::STATUS_ACKNOWLEDGED => 'Accusé réception',
            self::STATUS_UNDER_REVIEW => 'En cours d\'analyse',
            self::STATUS_PARTIALLY_RECOVERED => 'Partiellement récupéré',
            self::STATUS_RECOVERED => 'Récupéré',
            self::STATUS_LOST => 'Perdu',
            self::STATUS_CLOSED => 'Clôturé',
            self::STATUS_REFUSED => 'Refusé',
        ];
    }

    public static function getPriorityList(): array
    {
        return [
            self::PRIORITY_LOW => 'Basse',
            self::PRIORITY_MEDIUM => 'Moyenne',
            self::PRIORITY_HIGH => 'Haute',
            self::PRIORITY_CRITICAL => 'Critique',
        ];
    }

    public static function getIssueTypeList(): array
    {
        return [
            self::ISSUE_TYPE_QUALITY => 'Défaut de qualité',
            self::ISSUE_TYPE_QUANTITY_MISSING => 'Quantité manquante',
            self::ISSUE_TYPE_DAMAGED => 'Produit abîmé',
            self::ISSUE_TYPE_WRONG_PRODUCT => 'Erreur de produit',
            self::ISSUE_TYPE_SHORT_SHELF_LIFE => 'Durée de vie courte',
            self::ISSUE_TYPE_OTHER => 'Autre',
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
            self::STATUS_ACKNOWLEDGED => 'badge bg-info',
            self::STATUS_UNDER_REVIEW => 'badge bg-primary',
            self::STATUS_PARTIALLY_RECOVERED => 'badge bg-secondary',
            self::STATUS_RECOVERED => 'badge bg-success',
            self::STATUS_LOST => 'badge bg-danger',
            self::STATUS_CLOSED => 'badge bg-dark',
            self::STATUS_REFUSED => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    }

    public function getPriorityLabel(): string
    {
        return self::getPriorityList()[$this->priority] ?? $this->priority;
    }

    public function getPriorityBadgeClass(): string
    {
        return match($this->priority) {
            self::PRIORITY_LOW => 'badge bg-secondary',
            self::PRIORITY_MEDIUM => 'badge bg-info',
            self::PRIORITY_HIGH => 'badge bg-warning text-dark',
            self::PRIORITY_CRITICAL => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    }

    public function getIssueTypeLabel(): string
    {
        return self::getIssueTypeList()[$this->issue_type] ?? $this->issue_type;
    }
}