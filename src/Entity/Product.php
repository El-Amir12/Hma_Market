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

    #[ORM\Column(options: ['default' => true])]
    private bool $company_public = true;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $last_stock_updated_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $last_stock_updated_by = null;

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

    #[ORM\Column(options: ['default' => false])]
    private bool $is_public = false;

    

    /**
     * @var Collection<int, PromotionProduct>
     */
    #[ORM\OneToMany(targetEntity: PromotionProduct::class, mappedBy: 'product', orphanRemoval: true)]
    private Collection $promotionProducts;

    /**
     * @var Collection<int, Rating>
     */
    #[ORM\OneToMany(targetEntity: Rating::class, mappedBy: 'product', cascade: ['remove'])]
    private Collection $ratings;

    public function __construct()
    {
        $this->purchaseItems = new ArrayCollection();
        $this->stockBatches = new ArrayCollection();
        $this->stockMovements = new ArrayCollection();
        $this->promotionProducts = new ArrayCollection();
        $this->ratings = new ArrayCollection();
        $this->is_active = true;
        $this->is_storable = false;
        $this->is_public = false;
        $this->subscription_active = true;
        $this->created_at = new \DateTime();
    }

    // ==================== GETTERS & SETTERS DE BASE ====================

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

    public function setDescription(?string $description): static
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

    public function setSalePrice(?string $sale_price): static
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

    public function setHasExpiryDate(?bool $has_expiry_date): static
    {
        $this->has_expiry_date = $has_expiry_date;
        return $this;
    }

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

    public function setUpdatedAt(?\DateTime $updated_at): static
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function isCompanyPublic(): bool
    {
        return $this->company_public;
    }

    public function setCompanyPublic(bool $company_public): static
    {
        $this->company_public = $company_public;
        return $this;
    }

    // ✅ Méthode pour vérifier si le produit est visible sur la marketplace
    public function isVisibleOnMarketplace(): bool
    {
        return $this->is_public && $this->company_public;
    }

    public function getLastStockUpdatedAt(): ?\DateTime
    {
        return $this->last_stock_updated_at;
    }

    public function setLastStockUpdatedAt(?\DateTime $last_stock_updated_at): static
    {
        $this->last_stock_updated_at = $last_stock_updated_at;
        return $this;
    }

    public function getLastStockUpdatedBy(): ?User
    {
        return $this->last_stock_updated_by;
    }

    public function setLastStockUpdatedBy(?User $last_stock_updated_by): static
    {
        $this->last_stock_updated_by = $last_stock_updated_by;
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

    public function setPrescriptionRequired(?bool $prescription_required): static
    {
        $this->prescription_required = $prescription_required;
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

    public function isPublic(): bool
    {
        return $this->is_public;
    }

    public function setIsPublic(bool $is_public): static
    {
        $this->is_public = $is_public;
        return $this;
    }

    // ==================== COLLECTIONS ====================

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
            if ($stockMovement->getProduct() === $this) {
                $stockMovement->setProduct(null);
            }
        }
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
            if ($promotionProduct->getProduct() === $this) {
                $promotionProduct->setProduct(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Rating>
     */
    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function addRating(Rating $rating): static
    {
        if (!$this->ratings->contains($rating)) {
            $this->ratings->add($rating);
            $rating->setProduct($this);
        }
        return $this;
    }

    public function removeRating(Rating $rating): static
    {
        if ($this->ratings->removeElement($rating)) {
            if ($rating->getProduct() === $this) {
                $rating->setProduct(null);
            }
        }
        return $this;
    }

    // ==================== MÉTHODES DE STOCK ====================

    /**
     * Calcule le stock actuel total
     */
    public function getCurrentStock(): int
    {
        $totalStock = $this->stock_quantity ?? 0;
        
        foreach ($this->getStockBatches() as $batch) {
            if (($batch->isActive() === null || $batch->isActive() === true) && $batch->getCurrentQuantity() > 0) {
                $totalStock += $batch->getCurrentQuantity();
            }
        }
        
        return $totalStock;
    }

    /**
     * Calcule le stock en ne comptant que les lots
     */
    public function getStockFromBatches(): int
    {
        $totalStock = 0;
        
        foreach ($this->getStockBatches() as $batch) {
            if (($batch->isActive() === null || $batch->isActive() === true) && $batch->getCurrentQuantity() > 0) {
                $totalStock += $batch->getCurrentQuantity();
            }
        }
        
        return $totalStock;
    }

    public function isLowStock(): bool
    {
        return $this->getCurrentStock() <= $this->min_quantity;
    }

    public function getStockStatus(): string
    {
        $stock = $this->getCurrentStock();
        if ($stock <= 0) {
            return 'out_of_stock';
        } elseif ($this->isLowStock()) {
            return 'low_stock';
        } else {
            return 'in_stock';
        }
    }

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

    // ==================== MÉTHODES DE PRIX ET MARGE ====================

    public function getMargin(): float
    {
        $purchasePrice = (float) $this->purchase_price;
        $salePrice = (float) $this->sale_price;
        
        if ($purchasePrice > 0) {
            return $salePrice - $purchasePrice;
        }
        
        return 0.0;
    }

    public function getMarginPercentage(): float
    {
        $purchasePrice = (float) $this->purchase_price;
        $margin = $this->getMargin();
        
        if ($purchasePrice > 0) {
            return ($margin / $purchasePrice) * 100;
        }
        
        return 0.0;
    }

    // ==================== MÉTHODES DE NOTATION ====================

    /**
     * Calcule la note moyenne du produit
     */
    public function getAverageRating(): float
    {
        if ($this->ratings->isEmpty()) {
            return 0;
        }
        
        $total = 0;
        foreach ($this->ratings as $rating) {
            $total += $rating->getScore();
        }
        return round($total / $this->ratings->count(), 1);
    }

    /**
     * Retourne le nombre de notes
     */
    public function getRatingsCount(): int
    {
        return $this->ratings->count();
    }

    /**
     * Retourne la distribution des notes (1 à 5 étoiles)
     */
    public function getRatingDistribution(): array
    {
        $distribution = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];
        foreach ($this->ratings as $rating) {
            $score = $rating->getScore();
            if (isset($distribution[$score])) {
                $distribution[$score]++;
            }
        }
        return $distribution;
    }

    /**
     * Retourne le pourcentage pour chaque note
     */
    public function getRatingPercentages(): array
    {
        $total = $this->getRatingsCount();
        if ($total === 0) {
            return [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];
        }
        
        $distribution = $this->getRatingDistribution();
        $percentages = [];
        foreach ($distribution as $score => $count) {
            $percentages[$score] = round(($count / $total) * 100);
        }
        return $percentages;
    }

    // ==================== AUTRES MÉTHODES ====================

    public function __toString(): string
    {
        if ($this->name && $this->barcode) {
            return sprintf('%s (%s)', $this->name, $this->barcode);
        }
        
        return $this->name ?: 'Nouveau produit';
    }
}