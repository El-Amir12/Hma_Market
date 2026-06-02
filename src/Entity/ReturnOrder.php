<?php
// src/Entity/ReturnOrder.php

namespace App\Entity;

use App\Repository\ReturnOrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReturnOrderRepository::class)]
#[ORM\Table(name: 'return_order')]
class ReturnOrder
{
    // Statuts constants
    public const STATUS_PENDING = 'pending';
    public const STATUS_APPROVED = 'approved';
    public const STATUS_REJECTED = 'rejected';
    public const STATUS_COMPLETED = 'completed';

    // Motifs constants
    public const REASON_PRODUCT_DEFECTIVE = 'product_defective';
    public const REASON_WRONG_PRODUCT = 'wrong_product';
    public const REASON_CUSTOMER_CANCELLATION = 'customer_cancellation';
    public const REASON_QUALITY_ISSUE = 'quality_issue';
    public const REASON_OTHER = 'other';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $return_number = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Order $original_order = null;

    #[ORM\Column(length: 50)]
    private ?string $order_number = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $customer_name = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $customer_phone = null;

    #[ORM\ManyToOne(targetEntity: User::class, cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $returned_by = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $approved_by = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $completed_by = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $approved_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $completed_at = null;

    #[ORM\Column]
    private ?\DateTime $return_date = null;

    #[ORM\Column(length: 50)]
    private ?string $status = self::STATUS_PENDING;

    #[ORM\Column(length: 50)]
    private ?string $reason = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $reason_notes = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $total_refund_amount = '0';

    #[ORM\Column(length: 50)]
    private ?string $refund_method = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $updated_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    /**
     * @var Collection<int, ReturnItem>
     */
    #[ORM\OneToMany(targetEntity: ReturnItem::class, mappedBy: 'return_order', orphanRemoval: true, cascade: ['persist'])]
    private Collection $returnItems;

    public function __construct()
    {
        $this->returnItems = new ArrayCollection();
        $this->created_at = new \DateTime();
        $this->status = self::STATUS_PENDING;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReturnNumber(): ?string
    {
        return $this->return_number;
    }

    public function setReturnNumber(string $return_number): static
    {
        $this->return_number = $return_number;
        return $this;
    }

    public function getOriginalOrder(): ?Order
    {
        return $this->original_order;
    }

    public function setOriginalOrder(?Order $original_order): static
    {
        $this->original_order = $original_order;
        return $this;
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

    public function setCustomerName(?string $customer_name): static
    {
        $this->customer_name = $customer_name;
        return $this;
    }

    public function getCustomerPhone(): ?string
    {
        return $this->customer_phone;
    }

    public function setCustomerPhone(?string $customer_phone): static
    {
        $this->customer_phone = $customer_phone;
        return $this;
    }

    public function getReturnedBy(): ?User
    {
        return $this->returned_by;
    }

    public function setReturnedBy(?User $returned_by): static
    {
        $this->returned_by = $returned_by;
        return $this;
    }

    public function getApprovedBy(): ?User
    {
        return $this->approved_by;
    }

    public function setApprovedBy(?User $approved_by): static
    {
        $this->approved_by = $approved_by;
        return $this;
    }

    public function getCompletedBy(): ?User
    {
        return $this->completed_by;
    }

    public function setCompletedBy(?User $completed_by): static
    {
        $this->completed_by = $completed_by;
        return $this;
    }

    public function getApprovedAt(): ?\DateTime
    {
        return $this->approved_at;
    }

    public function setApprovedAt(?\DateTime $approved_at): static
    {
        $this->approved_at = $approved_at;
        return $this;
    }

    public function getCompletedAt(): ?\DateTime
    {
        return $this->completed_at;
    }

    public function setCompletedAt(?\DateTime $completed_at): static
    {
        $this->completed_at = $completed_at;
        return $this;
    }

    public function getReturnDate(): ?\DateTime
    {
        return $this->return_date;
    }

    public function setReturnDate(\DateTime $return_date): static
    {
        $this->return_date = $return_date;
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

    public function setReason(string $reason): static
    {
        $this->reason = $reason;
        return $this;
    }

    public function getReasonNotes(): ?string
    {
        return $this->reason_notes;
    }

    public function setReasonNotes(?string $reason_notes): static
    {
        $this->reason_notes = $reason_notes;
        return $this;
    }

    public function getTotalRefundAmount(): ?string
    {
        return $this->total_refund_amount;
    }

    public function setTotalRefundAmount(string $total_refund_amount): static
    {
        $this->total_refund_amount = $total_refund_amount;
        return $this;
    }

    public function getRefundMethod(): ?string
    {
        return $this->refund_method;
    }

    public function setRefundMethod(string $refund_method): static
    {
        $this->refund_method = $refund_method;
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

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTime $updated_at): static
    {
        $this->updated_at = $updated_at;
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
     * @return Collection<int, ReturnItem>
     */
    public function getReturnItems(): Collection
    {
        return $this->returnItems;
    }

    public function addReturnItem(ReturnItem $returnItem): static
    {
        if (!$this->returnItems->contains($returnItem)) {
            $this->returnItems->add($returnItem);
            $returnItem->setReturnOrder($this);
        }
        return $this;
    }

    public function removeReturnItem(ReturnItem $returnItem): static
    {
        if ($this->returnItems->removeElement($returnItem)) {
            if ($returnItem->getReturnOrder() === $this) {
                $returnItem->setReturnOrder(null);
            }
        }
        return $this;
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    /**
     * Retourne le libellé du statut
     */
    public function getStatusLabel(): string
    {
        return match($this->status) {
            self::STATUS_PENDING => 'En attente',
            self::STATUS_APPROVED => 'Approuvé',
            self::STATUS_REJECTED => 'Rejeté',
            self::STATUS_COMPLETED => 'Terminé',
            default => ucfirst($this->status ?? '—'),
        };
    }

    /**
     * Retourne le libellé du motif
     */
    public function getReasonLabel(): string
    {
        return match($this->reason) {
            self::REASON_PRODUCT_DEFECTIVE => 'Produit défectueux',
            self::REASON_WRONG_PRODUCT => 'Produit incorrect',
            self::REASON_CUSTOMER_CANCELLATION => 'Annulation client',
            self::REASON_QUALITY_ISSUE => 'Problème de qualité',
            self::REASON_OTHER => 'Autre',
            null => '—',
            default => ucfirst(str_replace('_', ' ', $this->reason)),
        };
    }

    /**
     * Retourne la classe CSS pour le badge de statut
     */
    public function getStatusBadgeClass(): string
    {
        return match($this->status) {
            self::STATUS_PENDING => 'badge bg-warning text-dark',
            self::STATUS_APPROVED => 'badge bg-info',
            self::STATUS_REJECTED => 'badge bg-danger',
            self::STATUS_COMPLETED => 'badge bg-success',
            default => 'badge bg-secondary',
        };
    }

    /**
     * Vérifie si le retour est en attente
     */
    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }

    /**
     * Vérifie si le retour est approuvé
     */
    public function isApproved(): bool
    {
        return $this->status === self::STATUS_APPROVED;
    }

    /**
     * Vérifie si le retour est rejeté
     */
    public function isRejected(): bool
    {
        return $this->status === self::STATUS_REJECTED;
    }

    /**
     * Vérifie si le retour est terminé
     */
    public function isCompleted(): bool
    {
        return $this->status === self::STATUS_COMPLETED;
    }

    /**
     * Approuve le retour
     */
    public function approve(User $approvedBy): void
    {
        $this->status = self::STATUS_APPROVED;
        $this->approved_by = $approvedBy;
        $this->approved_at = new \DateTime();
    }

    /**
     * Rejette le retour
     */
    public function reject(): void
    {
        $this->status = self::STATUS_REJECTED;
    }

    /**
     * Complète le retour
     */
    public function complete(User $completedBy): void
    {
        $this->status = self::STATUS_COMPLETED;
        $this->completed_by = $completedBy;
        $this->completed_at = new \DateTime();
    }

    /**
     * Retourne le montant remboursé formaté
     */
    public function getTotalRefundAmountFormatted(): string
    {
        return number_format((float)$this->total_refund_amount, 0, ',', ' ') . ' FCFA';
    }

    /**
     * Retourne le libellé de la méthode de remboursement
     */
    public function getRefundMethodLabel(): string
    {
        return match($this->refund_method) {
            'cash' => 'Espèces',
            'bank_transfer' => 'Virement bancaire',
            'wallet' => 'Portefeuille',
            'credit_note' => 'Avoir',
            default => ucfirst(str_replace('_', ' ', $this->refund_method ?? '—')),
        };
    }
}