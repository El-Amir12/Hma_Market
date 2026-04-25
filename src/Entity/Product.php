<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ORM\Table(name: 'product')]
#[ORM\Index(name: 'idx_hma_service', columns: ['hma_service_id'])]
#[ORM\Index(name: 'idx_is_active', columns: ['is_active'])]
#[ORM\Index(name: 'idx_subscription_active', columns: ['subscription_active'])]
#[ORM\Index(name: 'idx_barcode', columns: ['barcode'])]
#[ORM\Index(name: 'idx_name', columns: ['name'])]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 100)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $barcode = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, nullable: true)]
    private ?string $sale_price = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $purchase_price = null;

    #[ORM\Column]
    private ?int $stock_quantity = null;

    #[ORM\Column]
    private ?int $min_quantity = null;

    #[ORM\Column(length: 255, nullable: true)]  
    private ?string $image = null;

    #[ORM\Column]
    private ?bool $has_expiry_date = null;

    #[ORM\Column(options: ['default' => true])]
    private ?bool $is_active = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\Column(nullable: true)]  
    private ?\DateTime $updated_at = null;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private bool $subscription_active = true;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: true)]  
    private ?Category $category = null;

    #[ORM\ManyToOne(inversedBy: 'products', cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    /**
     * @var Collection<int, PurchaseItem>
     */
    #[ORM\OneToMany(targetEntity: PurchaseItem::class, mappedBy: 'product')]
    private Collection $purchaseItems;

    /**
     * @var Collection<int, StockBatch>
     */
    #[ORM\OneToMany(targetEntity: StockBatch::class, mappedBy: 'product')]
    private Collection $stockBatches;

    /**
     * @var Collection<int, StockMovement>
     */
    #[ORM\OneToMany(targetEntity: StockMovement::class, mappedBy: 'product')]
    private Collection $stockMovements;

    #[ORM\ManyToOne(inversedBy: 'products', cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $unit = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $dosage = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $form = null;

    #[ORM\Column(nullable: true)]
    private ?bool $prescription_required = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $is_storable = false;

    /**
     * @var Collection<int, PromotionProduct>
     */
    #[ORM\OneToMany(targetEntity: PromotionProduct::class, mappedBy: 'product', orphanRemoval: true)]
    private Collection $promotionProducts;

    public function __construct()
    {
        $this->purchaseItems = new ArrayCollection();
        $this->stockBatches = new ArrayCollection();
        $this->stockMovements = new ArrayCollection();
        $this->promotionProducts = new ArrayCollection();
        $this->is_active = true;
        $this->is_storable = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): static
    {
        $this->barcode = $barcode;

        return $this;
    }

    public function getSalePrice(): ?string
    {
        return $this->sale_price;
    }

    public function setSalePrice(string $sale_price): static
    {
        $this->sale_price = $sale_price;

        return $this;
    }

    public function getPurchasePrice(): ?string
    {
        return $this->purchase_price;
    }

    public function setPurchasePrice(string $purchase_price): static
    {
        $this->purchase_price = $purchase_price;

        return $this;
    }

    public function getStockQuantity(): ?int
    {
        return $this->stock_quantity;
    }

    public function setStockQuantity(int $stock_quantity): static
    {
        $this->stock_quantity = $stock_quantity;

        return $this;
    }

    public function getMinQuantity(): ?int
    {
        return $this->min_quantity;
    }

    public function setMinQuantity(int $min_quantity): static
    {
        $this->min_quantity = $min_quantity;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static  
    {
        $this->image = $image;

        return $this;
    }

    public function getHasExpiryDate(): ?bool
    {
        return $this->has_expiry_date;
    }

    public function setHasExpiryDate(bool $has_expiry_date): static
    {
        $this->has_expiry_date = $has_expiry_date;
        return $this;
    }

    // Ajoutez cette méthode pour les appels booléens
    public function hasExpiryDate(): bool
    {
        return $this->has_expiry_date ?? false;
    }

    public function getExpiryDate(): ?\DateTimeInterface
    {
        return $this->has_expiry_date;
    }

    public function setExpiryDate(?\DateTimeInterface $expiry_date): static
    {
        $this->has_expiry_date = $expiry_date;
        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): static
    {
        $this->is_active = $is_active;

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

    public function setUpdatedAt(\DateTime $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function isSubscriptionActive(): bool
    {
        return $this->subscription_active;
    }

    public function setSubscriptionActive(bool $subscription_active): self
    {
        $this->subscription_active = $subscription_active;
        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

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

    /**
     * @return Collection<int, PurchaseItem>
     */
    public function getPurchaseItems(): Collection
    {
        return $this->purchaseItems;
    }

    public function addPurchaseItem(PurchaseItem $purchaseItem): static
    {
        if (!$this->purchaseItems->contains($purchaseItem)) {
            $this->purchaseItems->add($purchaseItem);
            $purchaseItem->setProduct($this);
        }

        return $this;
    }

    public function removePurchaseItem(PurchaseItem $purchaseItem): static
    {
        if ($this->purchaseItems->removeElement($purchaseItem)) {
            // set the owning side to null (unless already changed)
            if ($purchaseItem->getProduct() === $this) {
                $purchaseItem->setProduct(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, StockBatch>
     */
    public function getStockBatches(): Collection
    {
        return $this->stockBatches;
    }

    public function addStockBatch(StockBatch $stockBatch): static
    {
        if (!$this->stockBatches->contains($stockBatch)) {
            $this->stockBatches->add($stockBatch);
            $stockBatch->setProduct($this);
        }

        return $this;
    }

    public function removeStockBatch(StockBatch $stockBatch): static
    {
        if ($this->stockBatches->removeElement($stockBatch)) {
            // set the owning side to null (unless already changed)
            if ($stockBatch->getProduct() === $this) {
                $stockBatch->setProduct(null);
            }
        }

        return $this;
    }

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
            $stockMovement->setProduct($this);
        }

        return $this;
    }

    public function removeStockMovement(StockMovement $stockMovement): static
    {
        if ($this->stockMovements->removeElement($stockMovement)) {
            // set the owning side to null (unless already changed)
            if ($stockMovement->getProduct() === $this) {
                $stockMovement->setProduct(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        if ($this->name && $this->barcode) {
            return sprintf('%s (%s)', $this->name, $this->barcode);
        }
        
        return $this->name ?: 'Nouveau produit';
    }

    /**
     * Méthode utilitaire pour vérifier si le stock est faible
     */
    public function isLowStock(): bool
    {
        return $this->stock_quantity <= $this->min_quantity;
    }

    /**
     * Méthode utilitaire pour obtenir le statut du stock
     */
    public function getStockStatus(): string
    {
        if ($this->stock_quantity <= 0) {
            return 'out_of_stock';
        } elseif ($this->isLowStock()) {
            return 'low_stock';
        } else {
            return 'in_stock';
        }
    }

    /**
     * Méthode utilitaire pour obtenir le statut du stock sous forme de badge
     */
    public function getStockStatusBadge(): string
    {
        $status = $this->getStockStatus();
        
        switch ($status) {
            case 'out_of_stock':
                return '<span class="badge bg-danger">Rupture de stock</span>';
            case 'low_stock':
                return '<span class="badge bg-warning text-dark">Stock faible</span>';
            default:
                return '<span class="badge bg-success">En stock</span>';
        }
    }

    /**
     * Calcule la marge du produit
     */
    public function getMargin(): float
    {
        $purchasePrice = (float) $this->purchase_price;
        $salePrice = (float) $this->sale_price;
        
        if ($purchasePrice > 0) {
            return $salePrice - $purchasePrice;
        }
        
        return 0.0;
    }

    /**
     * Calcule le pourcentage de marge
     */
    public function getMarginPercentage(): float
    {
        $purchasePrice = (float) $this->purchase_price;
        $margin = $this->getMargin();
        
        if ($purchasePrice > 0) {
            return ($margin / $purchasePrice) * 100;
        }
        
        return 0.0;
    }

    public function getStockBadgeClass(): string
    {
        $status = $this->getStockStatus();
        $classes = [
            'out_of_stock' => 'bg-danger',
            'low_stock' => 'bg-warning text-dark',
            'in_stock' => 'bg-success',
        ];
        
        return $classes[$status] ?? 'bg-secondary';
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

    public function getDosage(): ?string
    {
        return $this->dosage;
    }

    public function setDosage(?string $dosage): static
    {
        $this->dosage = $dosage;

        return $this;
    }

    public function getForm(): ?string
    {
        return $this->form;
    }

    public function setForm(?string $form): static
    {
        $this->form = $form;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;
        return $this;
    }

    public function isPrescriptionRequired(): ?bool
    {
        return $this->prescription_required;
    }

    public function setPrescriptionRequired(bool $prescription_required): static
    {
        $this->prescription_required = $prescription_required;

        return $this;
    }

    /**
     * @return Collection<int, PromotionProduct>
     */
    public function getPromotionProducts(): Collection
    {
        return $this->promotionProducts;
    }

    public function addPromotionProduct(PromotionProduct $promotionProduct): static
    {
        if (!$this->promotionProducts->contains($promotionProduct)) {
            $this->promotionProducts->add($promotionProduct);
            $promotionProduct->setProduct($this);
        }

        return $this;
    }

    public function removePromotionProduct(PromotionProduct $promotionProduct): static
    {
        if ($this->promotionProducts->removeElement($promotionProduct)) {
            // set the owning side to null (unless already changed)
            if ($promotionProduct->getProduct() === $this) {
                $promotionProduct->setProduct(null);
            }
        }

        return $this;
    }

    public function isStorable(): bool
    {
        return $this->is_storable;
    }

    public function setIsStorable(bool $is_storable): self
    {
        $this->is_storable = $is_storable;
        return $this;
    }
}