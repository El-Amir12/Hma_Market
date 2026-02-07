<?php

namespace App\Entity;

use App\Repository\PurchaseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PurchaseRepository::class)]
class Purchase
{
    const STATUS_DRAFT = 'draft';
    const STATUS_CONFIRMED = 'confirmed';
    const STATUS_RECEIVED = 'received';
    const STATUS_CANCELLED = 'cancelled';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $purchase_number = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $total_amount = '0.00';

    #[ORM\Column(length: 20)]
    private ?string $status = self::STATUS_DRAFT;

    #[ORM\ManyToOne(inversedBy: 'purchases')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Supplier $supplier = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $updated_at = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $cancellation_reason = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $cancelled_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $cancelled_by = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $confirmed_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $received_at = null;

    /**
     * @var Collection<int, PurchaseItem>
     */
    #[ORM\OneToMany(targetEntity: PurchaseItem::class, mappedBy: 'purchase', cascade: ['persist', 'remove'], fetch: 'EAGER')]
    private Collection $purchaseItems;

    #[ORM\ManyToOne(inversedBy: 'purchases')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bon_commande = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $recu_achat = null;

    public function __construct()
    {
        $this->purchaseItems = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPurchaseNumber(): ?string
    {
        return $this->purchase_number;
    }

    public function setPurchaseNumber(string $purchase_number): static
    {
        $this->purchase_number = $purchase_number;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        if ($status === self::STATUS_CONFIRMED) {
            $this->confirmed_at = new \DateTimeImmutable();
        } elseif ($status === self::STATUS_RECEIVED) {
            $this->received_at = new \DateTimeImmutable();
        } elseif ($status === self::STATUS_CANCELLED) {
            $this->cancelled_at = new \DateTimeImmutable();
            // Note: cancelled_by doit être défini séparément dans le contrôleur
        }

        return $this;
    }

    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    public function setSupplier(?Supplier $supplier): static
    {
        $this->supplier = $supplier;

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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
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

    public function getCancellationReason(): ?string
    {
        return $this->cancellation_reason;
    }

    public function setCancellationReason(?string $cancellation_reason): static
    {
        $this->cancellation_reason = $cancellation_reason;
        return $this;
    }

    public function getCancelledAt(): ?\DateTimeImmutable
    {
        return $this->cancelled_at;
    }

    public function setCancelledAt(?\DateTimeImmutable $cancelled_at): static
    {
        $this->cancelled_at = $cancelled_at;
        return $this;
    }

    public function getCancelledBy(): ?User
    {
        return $this->cancelled_by;
    }

    public function setCancelledBy(?User $cancelled_by): static
    {
        $this->cancelled_by = $cancelled_by;
        return $this;
    }

    public function getConfirmedAt(): ?\DateTimeImmutable
    {
        return $this->confirmed_at;
    }

    public function setConfirmedAt(?\DateTimeImmutable $confirmed_at): static
    {
        $this->confirmed_at = $confirmed_at;
        return $this;
    }

    public function getReceivedAt(): ?\DateTimeImmutable
    {
        return $this->received_at;
    }

    public function setReceivedAt(?\DateTimeImmutable $received_at): static
    {
        $this->received_at = $received_at;
        return $this;
    }

    /**
     * @return Collection<int, PurchaseItem>
     */
    public function getPurchaseItems(): Collection
    {
        return $this->purchaseItems;
    }

    /**
     * Vérifier si le panier est prêt pour confirmation
     */
    public function isReadyForConfirmation(): bool
    {
        return $this->getStatus() === self::STATUS_DRAFT && 
            $this->getPurchaseItems()->count() > 0 && 
            $this->getSupplier() !== null;
    }

    public function addPurchaseItem(PurchaseItem $purchaseItem): static
    {
        if (!$this->purchaseItems->contains($purchaseItem)) {
            $this->purchaseItems->add($purchaseItem);
            $purchaseItem->setPurchase($this);
        }

        return $this;
    }

    public function removePurchaseItem(PurchaseItem $purchaseItem): static
    {
        if ($this->purchaseItems->removeElement($purchaseItem)) {
            // set the owning side to null (unless already changed)
            if ($purchaseItem->getPurchase() === $this) {
                $purchaseItem->setPurchase(null);
            }
        }

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

    public function calculateTotalAmount(): static
    {
        $total = 0.00;
        foreach ($this->purchaseItems as $item) {
            $itemTotal = (float) $item->getTotalPrice();
            $total += $itemTotal;
        }
        $this->total_amount = number_format($total, 2, '.', '');
        return $this;
    }

    public function canDelete(): bool
    {
        return $this->status === self::STATUS_DRAFT;
    }

    public function canEdit(): bool
    {
        return $this->status === self::STATUS_DRAFT;
    }

    public function canCancel(): bool
    {
        // Peut être annulé si c'est un brouillon ou confirmé (mais pas déjà reçu ou annulé)
        return $this->status === self::STATUS_DRAFT || 
               $this->status === self::STATUS_CONFIRMED;
    }

    public function canReceive(): bool
    {
        // Peut être reçu si c'est confirmé
        return $this->status === self::STATUS_CONFIRMED;
    }

    public function __toString(): string
    {
        return $this->purchase_number ?? 'Nouvel achat';
    }

    public static function getStatuses(): array
    {
        return [
            self::STATUS_DRAFT => 'Brouillon',
            self::STATUS_CONFIRMED => 'Confirmé',
            self::STATUS_RECEIVED => 'Reçu',
            self::STATUS_CANCELLED => 'Annulé',
        ];
    }

    public static function getStatusText(string $status): string
    {
        $statuses = [
            self::STATUS_DRAFT => 'Brouillon',
            self::STATUS_CONFIRMED => 'Confirmé',
            self::STATUS_RECEIVED => 'Reçu',
            self::STATUS_CANCELLED => 'Annulé',
        ];
        
        return $statuses[$status] ?? $status;
    }

    public function getStatusLabel(): string
    {
        return self::getStatusText($this->status);
    }

    public function getStatusBadgeClass(): string
    {
        $badges = [
            self::STATUS_DRAFT => 'bg-secondary',
            self::STATUS_CONFIRMED => 'bg-primary',
            self::STATUS_RECEIVED => 'bg-success',
            self::STATUS_CANCELLED => 'bg-danger',
        ];
        
        return $badges[$this->status] ?? 'bg-secondary';
    }

    public function getStatusIcon(): string
    {
        $icons = [
            self::STATUS_DRAFT => 'fa-edit',
            self::STATUS_CONFIRMED => 'fa-check',
            self::STATUS_RECEIVED => 'fa-box-open',
            self::STATUS_CANCELLED => 'fa-ban',
        ];
        
        return $icons[$this->status] ?? 'fa-question';
    }

    public function getTotalQuantity(): int
    {
        $total = 0;
        foreach ($this->purchaseItems as $item) {
            $total += $item->getQuantity();
        }
        return $total;
    }

    public function getStatusHistory(): array
    {
        $history = [];
        
        $history[] = [
            'status' => 'Création',
            'date' => $this->created_at,
            'by' => $this->user
        ];
        
        if ($this->confirmed_at) {
            $history[] = [
                'status' => 'Confirmation',
                'date' => $this->confirmed_at,
                'by' => $this->user
            ];
        }
        
        if ($this->received_at) {
            $history[] = [
                'status' => 'Réception',
                'date' => $this->received_at,
                'by' => $this->user
            ];
        }
        
        if ($this->cancelled_at) {
            $history[] = [
                'status' => 'Annulation',
                'date' => $this->cancelled_at,
                'by' => $this->cancelled_by,
                'reason' => $this->cancellation_reason
            ];
        }
        
        if ($this->updated_at) {
            $history[] = [
                'status' => 'Modification',
                'date' => $this->updated_at,
                'by' => $this->user
            ];
        }
        
        // Trier par date
        usort($history, function($a, $b) {
            return $a['date'] <=> $b['date'];
        });
        
        return $history;
    }

    public function getBonCommande(): ?string
    {
        return $this->bon_commande;
    }

    public function setBonCommande(?string $bon_commande): static
    {
        $this->bon_commande = $bon_commande;

        return $this;
    }

    public function getRecuAchat(): ?string
    {
        return $this->recu_achat;
    }

    public function setRecuAchat(?string $recu_achat): static
    {
        $this->recu_achat = $recu_achat;

        return $this;
    }
}