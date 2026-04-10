<?php

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

    // Correction : OneToOne au lieu de ManyToOne
    #[ORM\OneToOne(inversedBy: 'stockBatch', targetEntity: PurchaseItem::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?PurchaseItem $purchaseItem = null;

    #[ORM\Column(nullable: true)]
    private ?bool $is_active = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?Location $locationEntity = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    // Ajouter la relation vers StockMovement
    #[ORM\OneToMany(targetEntity: StockMovement::class, mappedBy: 'stock_batch')]
    private Collection $stockMovements;

    #[ORM\ManyToOne(inversedBy: 'stockBatches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    public function __construct()
    {
        $this->stockMovements = new ArrayCollection();
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

    public function getPurchaseItem(): ?PurchaseItem
    {
        return $this->purchaseItem;
    }

    public function setPurchaseItem(?PurchaseItem $purchaseItem): static
    {
        $this->purchaseItem = $purchaseItem;

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
        // Synchroniser pour compatibilité
        $this->location = $locationEntity?->getDisplayName();
        return $this;
    }

    // Méthode utilitaire pour afficher l'emplacement
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

    // Méthodes pour la relation avec StockMovement
    /**
     * @return Collection<int, StockMovement>
     */
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
            // set the owning side to null (unless already changed)
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
}