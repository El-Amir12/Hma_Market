<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: RecipeRepository::class)]
#[UniqueEntity(
    fields: ['hma_service', 'name'],
    message: 'Une recette avec ce nom existe déjà pour votre entreprise.'
)]
class Recipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'recipes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    #[ORM\Column(length: 150)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $instructions = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $selling_price = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 50, options: ['default' => 'food'])]
    private ?string $type = 'food';

    #[ORM\Column]
    private ?bool $is_active = null;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private bool $subscription_active = true;

    /**
     * @var Collection<int, RecipeItem>
     */
    #[ORM\OneToMany(targetEntity: RecipeItem::class, mappedBy: 'recipe', orphanRemoval: true, cascade: ['persist', 'remove'])]
    private Collection $recipeItems;

    /**
     * @var Collection<int, OrderItem>
     */
    #[ORM\OneToMany(targetEntity: OrderItem::class, mappedBy: 'recipe')]
    private Collection $orderItems;

    /**
     * @var Collection<int, PromotionRecipe>
     */
    #[ORM\OneToMany(targetEntity: PromotionRecipe::class, mappedBy: 'recipe', orphanRemoval: true)]
    private Collection $promotionRecipes;

    #[ORM\ManyToOne(inversedBy: 'recipes')]
    #[ORM\JoinColumn(nullable: true)]
    private ?CategoryRecipe $category = null;

    public function __construct()
    {
        $this->recipeItems = new ArrayCollection();
        $this->orderItems = new ArrayCollection();
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

    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    public function setInstructions(?string $instructions): static
    {
        $this->instructions = $instructions;
        return $this;
    }

    public function getSellingPrice(): ?string
    {
        return $this->selling_price;
    }

    public function setSellingPrice(string $selling_price): static
    {
        $this->selling_price = $selling_price;

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

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
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

    public function isSubscriptionActive(): bool
    {
        return $this->subscription_active;
    }

    public function setSubscriptionActive(bool $subscription_active): self
    {
        $this->subscription_active = $subscription_active;
        return $this;
    }

    /**
     * @return Collection<int, RecipeItem>
     */
    public function getRecipeItems(): Collection
    {
        return $this->recipeItems;
    }

    public function addRecipeItem(RecipeItem $recipeItem): static
    {
        if (!$this->recipeItems->contains($recipeItem)) {
            $this->recipeItems->add($recipeItem);
            $recipeItem->setRecipe($this);
        }

        return $this;
    }

    public function removeRecipeItem(RecipeItem $recipeItem): static
    {
        if ($this->recipeItems->removeElement($recipeItem)) {
            if ($recipeItem->getRecipe() === $this) {
                $recipeItem->setRecipe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, OrderItem>
     */
    public function getOrderItems(): Collection
    {
        return $this->orderItems;
    }

    public function addOrderItem(OrderItem $orderItem): static
    {
        if (!$this->orderItems->contains($orderItem)) {
            $this->orderItems->add($orderItem);
            $orderItem->setRecipe($this);
        }

        return $this;
    }

    public function removeOrderItem(OrderItem $orderItem): static
    {
        if ($this->orderItems->removeElement($orderItem)) {
            if ($orderItem->getRecipe() === $this) {
                $orderItem->setRecipe(null);
            }
        }

        return $this;
    }

    public function getCategory(): ?CategoryRecipe
    {
        return $this->category;
    }

    public function setCategory(?CategoryRecipe $category): static
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection<int, PromotionRecipe>
     */
    public function getPromotionRecipes(): Collection
    {
        return $this->promotionRecipes;
    }

    public function addPromotionRecipe(PromotionRecipe $promotionRecipe): static
    {
        if (!$this->promotionRecipes->contains($promotionRecipe)) {
            $this->promotionRecipes->add($promotionRecipe);
            $promotionRecipe->setRecipe($this);
        }
        return $this;
    }

    public function removePromotionRecipe(PromotionRecipe $promotionRecipe): static
    {
        if ($this->promotionRecipes->removeElement($promotionRecipe)) {
            if ($promotionRecipe->getRecipe() === $this) {
                $promotionRecipe->setRecipe(null);
            }
        }
        return $this;
    }
}