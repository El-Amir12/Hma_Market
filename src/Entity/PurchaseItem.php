<?php

namespace App\Entity;

use App\Repository\PurchaseItemRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PurchaseItemRepository::class)]
class PurchaseItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Supprimer cette colonne car on a maintenant une relation OneToOne
    // #[ORM\Column]
    // private ?int $stock_batch_id = null;

    #[ORM\Column(length: 50)]
    private ?string $batch_number = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $unit_price = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $total_price = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $expiry_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $manufacturing_date = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'purchaseItems')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Purchase $purchase = null;

    #[ORM\ManyToOne(inversedBy: 'purchaseItems', fetch: 'EAGER')] // CORRECTION ICI
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $product = null;

    // Ajouter la relation OneToOne vers StockBatch
    #[ORM\OneToOne(targetEntity: StockBatch::class, mappedBy: 'purchaseItem', cascade: ['persist'])]
    private ?StockBatch $stockBatch = null;

    // Ajouter la relation vers StockMovement
    #[ORM\OneToMany(targetEntity: StockMovement::class, mappedBy: 'purchase_item')]
    private $stockMovements;

    public function __construct()
    {
        $this->stockMovements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    // Supprimer getStockBatchId() car on utilise maintenant une relation
    // public function getStockBatchId(): ?int
    // {
    //     return $this->stock_batch_id;
    // }
    // 
    // public function setStockBatchId(int $stock_batch_id): static
    // {
    //     $this->stock_batch_id = $stock_batch_id;
    //     return $this;
    // }

    public function getBatchNumber(): ?string
    {
        return $this->batch_number;
    }

    public function setBatchNumber(string $batch_number): static
    {
        $this->batch_number = $batch_number;

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

    public function setUnitPrice(string $unit_price): static
    {
        $this->unit_price = $unit_price;

        return $this;
    }

    public function getTotalPrice(): ?string
    {
        if (!$this->unit_price || !$this->quantity) {
            return '0.00';
        }
        
        // Utiliser bcdiv pour éviter les problèmes de virgule flottante
        return bcmul($this->unit_price, (string) $this->quantity, 2);
    }

    public function setTotalPrice(string $total_price): static
    {
        $this->total_price = $total_price;

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

    public function getPurchase(): ?Purchase
    {
        return $this->purchase;
    }

    public function setPurchase(?Purchase $purchase): static
    {
        $this->purchase = $purchase;

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

    // Méthodes pour la relation avec StockBatch
    public function getStockBatch(): ?StockBatch
    {
        return $this->stockBatch;
    }

    public function setStockBatch(?StockBatch $stockBatch): static
    {
        // Définir la propriété owning side si nécessaire
        if ($stockBatch !== null && $stockBatch->getPurchaseItem() !== $this) {
            $stockBatch->setPurchaseItem($this);
        }

        $this->stockBatch = $stockBatch;

        return $this;
    }

    // Méthodes pour la relation avec StockMovement
    /**
     * @return Collection<int, StockMovement>
     */
    public function getStockMovements(): \Doctrine\Common\Collections\Collection
    {
        return $this->stockMovements;
    }

    public function addStockMovement(StockMovement $stockMovement): static
    {
        if (!$this->stockMovements->contains($stockMovement)) {
            $this->stockMovements->add($stockMovement);
            $stockMovement->setPurchaseItem($this);
        }

        return $this;
    }

    public function removeStockMovement(StockMovement $stockMovement): static
    {
        if ($this->stockMovements->removeElement($stockMovement)) {
            // set the owning side to null (unless already changed)
            if ($stockMovement->getPurchaseItem() === $this) {
                $stockMovement->setPurchaseItem(null);
            }
        }

        return $this;
    }


}