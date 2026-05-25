<?php
// src/Entity/Inventory.php

namespace App\Entity;

use App\Repository\InventoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InventoryRepository::class)]
#[ORM\Table(name: 'inventory')]
class Inventory
{
    public const STATUS_DRAFT = 'draft';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_CANCELLED = 'cancelled';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $inventory_number = null;

    #[ORM\Column(length: 20)]
    private ?string $status = self::STATUS_DRAFT;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $inventory_date = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $created_by = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $validated_by = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $validated_at = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?Location $location = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $updated_at = null;

    /**
     * @var Collection<int, InventoryItem>
     */
    #[ORM\OneToMany(mappedBy: 'inventory', targetEntity: InventoryItem::class, cascade: ['persist', 'remove'])]
    private Collection $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
        $this->created_at = new \DateTime();
        $this->status = self::STATUS_DRAFT;
    }

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInventoryNumber(): ?string
    {
        return $this->inventory_number;
    }

    public function setInventoryNumber(string $inventory_number): static
    {
        $this->inventory_number = $inventory_number;
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

    public function getInventoryDate(): ?\DateTimeInterface
    {
        return $this->inventory_date;
    }

    public function setInventoryDate(\DateTimeInterface $inventory_date): static
    {
        $this->inventory_date = $inventory_date;
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

    public function getValidatedBy(): ?User
    {
        return $this->validated_by;
    }

    public function setValidatedBy(?User $validated_by): static
    {
        $this->validated_by = $validated_by;
        return $this;
    }

    public function getValidatedAt(): ?\DateTime
    {
        return $this->validated_at;
    }

    public function setValidatedAt(?\DateTime $validated_at): static
    {
        $this->validated_at = $validated_at;
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

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): static
    {
        $this->location = $location;
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

    /**
     * @return Collection<int, InventoryItem>
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(InventoryItem $item): static
    {
        if (!$this->items->contains($item)) {
            $this->items->add($item);
            $item->setInventory($this);
        }
        return $this;
    }

    public function removeItem(InventoryItem $item): static
    {
        if ($this->items->removeElement($item)) {
            if ($item->getInventory() === $this) {
                $item->setInventory(null);
            }
        }
        return $this;
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    public static function getStatusList(): array
    {
        return [
            self::STATUS_DRAFT => 'Brouillon',
            self::STATUS_IN_PROGRESS => 'En cours',
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
            self::STATUS_DRAFT => 'badge bg-secondary',
            self::STATUS_IN_PROGRESS => 'badge bg-primary',
            self::STATUS_COMPLETED => 'badge bg-success',
            self::STATUS_CANCELLED => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    }

    public function getStatusIcon(): string
    {
        return match($this->status) {
            self::STATUS_DRAFT => 'fa-pen',
            self::STATUS_IN_PROGRESS => 'fa-spinner fa-pulse',
            self::STATUS_COMPLETED => 'fa-check-circle',
            self::STATUS_CANCELLED => 'fa-ban',
            default => 'fa-question',
        };
    }

    public function getProgress(): int
    {
        $total = $this->items->count();
        if ($total === 0) {
            return 0;
        }
        
        $counted = 0;
        foreach ($this->items as $item) {
            if ($item->getActualQuantity() !== null && $item->getActualQuantity() > 0) {
                $counted++;
            }
        }
        
        return round(($counted / $total) * 100);
    }

    public function getCountedItemsCount(): int
    {
        $counted = 0;
        foreach ($this->items as $item) {
            if ($item->getActualQuantity() !== null && $item->getActualQuantity() > 0) {
                $counted++;
            }
        }
        return $counted;
    }
}