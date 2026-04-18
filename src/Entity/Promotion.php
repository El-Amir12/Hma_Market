<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'promotions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    #[ORM\Column(length: 150)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypePromotion $typePromotion = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $value = null;

    #[ORM\Column]
    private ?\DateTime $startDate = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $endDate = null;

    #[ORM\Column]
    private ?bool $is_active = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $updated_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    /**
     * @var Collection<int, PromotionProduct>
     */
    #[ORM\OneToMany(targetEntity: PromotionProduct::class, mappedBy: 'promotion', orphanRemoval: true, cascade: ['persist'])]
    private Collection $promotionProducts;

    /**
     * @var Collection<int, PromotionCategory>
     */
    #[ORM\OneToMany(targetEntity: PromotionCategory::class, mappedBy: 'promotion', orphanRemoval: true, cascade: ['persist'])]
    private Collection $promotionCategories;

    /**
     * @var Collection<int, PromotionCategoryRecipe>
     */
    #[ORM\OneToMany(targetEntity: PromotionCategoryRecipe::class, mappedBy: 'promotion', orphanRemoval: true, cascade: ['persist'])]
    private Collection $promotionCategoryRecipes;

    /**
     * @var Collection<int, PromotionRecipe>
     */
    #[ORM\OneToMany(targetEntity: PromotionRecipe::class, mappedBy: 'promotion', orphanRemoval: true, cascade: ['persist'])]
    private Collection $promotionRecipes;

    public function __construct()
    {
        $this->promotionProducts = new ArrayCollection();
        $this->promotionCategories = new ArrayCollection();
        $this->promotionCategoryRecipes = new ArrayCollection();
        $this->promotionRecipes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

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

    public function getTypePromotion(): ?TypePromotion { 
        return $this->typePromotion; 
    }

    public function setTypePromotion(?TypePromotion $typePromotion): static 
    { 
        $this->typePromotion = $typePromotion; 
    
        return $this; 
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTime $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTime $endDate): static
    {
        $this->endDate = $endDate;

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
            $promotionProduct->setPromotion($this);
        }

        return $this;
    }

    public function removePromotionProduct(PromotionProduct $promotionProduct): static
    {
        if ($this->promotionProducts->removeElement($promotionProduct)) {
            // set the owning side to null (unless already changed)
            if ($promotionProduct->getPromotion() === $this) {
                $promotionProduct->setPromotion(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PromotionCategory>
     */
    public function getPromotionCategories(): Collection
    {
        return $this->promotionCategories;
    }

    public function addPromotionCategory(PromotionCategory $promotionCategory): static
    {
        if (!$this->promotionCategories->contains($promotionCategory)) {
            $this->promotionCategories->add($promotionCategory);
            $promotionCategory->setPromotion($this);
        }

        return $this;
    }

    public function removePromotionCategory(PromotionCategory $promotionCategory): static
    {
        if ($this->promotionCategories->removeElement($promotionCategory)) {
            // set the owning side to null (unless already changed)
            if ($promotionCategory->getPromotion() === $this) {
                $promotionCategory->setPromotion(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PromotionCategoryRecipe>
     */
    public function getPromotionCategoryRecipes(): Collection
    {
        return $this->promotionCategoryRecipes;
    }

    public function addPromotionCategoryRecipe(PromotionCategoryRecipe $promotionCategoryRecipe): static
    {
        if (!$this->promotionCategoryRecipes->contains($promotionCategoryRecipe)) {
            $this->promotionCategoryRecipes->add($promotionCategoryRecipe);
            $promotionCategoryRecipe->setPromotion($this);
        }

        return $this;
    }

    public function removePromotionCategoryRecipe(PromotionCategoryRecipe $promotionCategoryRecipe): static
    {
        if ($this->promotionCategoryRecipes->removeElement($promotionCategoryRecipe)) {
            // set the owning side to null (unless already changed)
            if ($promotionCategoryRecipe->getPromotion() === $this) {
                $promotionCategoryRecipe->setPromotion(null);
            }
        }

        return $this;
    }

    public function getPromotionRecipes(): Collection
    {
        return $this->promotionRecipes;
    }

    public function addPromotionRecipe(PromotionRecipe $promotionRecipe): static
    {
        if (!$this->promotionRecipes->contains($promotionRecipe)) {
            $this->promotionRecipes->add($promotionRecipe);
            $promotionRecipe->setPromotion($this);
        }
        return $this;
    }

    public function removePromotionRecipe(PromotionRecipe $promotionRecipe): static
    {
        if ($this->promotionRecipes->removeElement($promotionRecipe)) {
            if ($promotionRecipe->getPromotion() === $this) {
                $promotionRecipe->setPromotion(null);
            }
        }
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

    public function isOngoing(): bool
    {
        $now = new \DateTime();
        $startDate = $this->getStartDate();
        $endDate = $this->getEndDate();
        
        if ($startDate <= $now && ($endDate === null || $endDate >= $now)) {
            return true;
        }
        return false;
    }

    public function isUpcoming(): bool
    {
        $now = new \DateTime();
        $startDate = $this->getStartDate();
        
        return $startDate > $now;
    }

    public function isEnded(): bool
    {
        $now = new \DateTime();
        $endDate = $this->getEndDate();
        
        return $endDate !== null && $endDate < $now;
    }

    /**
     * Calcule le prix après application de la promotion
     * 
     * @param float $originalPrice Prix original
     * @return float Prix après promotion
     */
    public function applyToPrice(float $originalPrice): float
    {
        $typePromotion = $this->getTypePromotion();
        $value = (float) $this->getValue();
        
        if (!$typePromotion) {
            return $originalPrice;
        }
        
        $typeName = strtolower(trim($typePromotion->getName()));
        
        // Support pour différents formats de noms
        if ($typeName === 'pourcentage' || $typeName === 'percentage' || $typeName === '%') {
            // Réduction en pourcentage
            $reduction = $originalPrice * ($value / 100);
            return round($originalPrice - $reduction, 2);
        } 
        
        if ($typeName === 'Montant fixe' || $typeName === 'fixed' || $typeName === 'fixe') {
            // Réduction fixe
            return max(0, $originalPrice - $value);
        }
        
        return $originalPrice;
    }
    
    /**
     * Vérifie si la promotion est actuellement active
     */
    public function isCurrentlyActive(): bool
    {
        $now = new \DateTime();
        
        if (!$this->isActive()) {
            return false;
        }
        
        if ($this->getStartDate() && $this->getStartDate() > $now) {
            return false;
        }
        
        if ($this->getEndDate() && $this->getEndDate() < $now) {
            return false;
        }
        
        return true;
    }

}
