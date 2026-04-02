<?php

namespace App\Entity;

use App\Repository\CategoryRecipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategoryRecipeRepository::class)]
class CategoryRecipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom de la catégorie de plat est obligatoire")]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le nom ne doit pas dépasser {{ limit }} caractères"
    )]
    private ?string $name = null;

    #[ORM\Column(length: 150, unique: true)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column]
    private ?bool $is_active = true;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'children')]
    #[ORM\JoinColumn(name: 'parent_id', referencedColumnName: 'id')]
    private ?self $parent = null;

    /**
     * @var Collection<int, self>
     */
    #[ORM\OneToMany(targetEntity: self::class, mappedBy: 'parent')]
    private Collection $children;

    /**
     * @var Collection<int, Recipe>
     */
    #[ORM\OneToMany(targetEntity: Recipe::class, mappedBy: 'category')]
    private Collection $recipes;

    #[ORM\ManyToOne(inversedBy: 'categoryRecipes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'categoryRecipes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private bool $subscription_active = true;

    /**
     * @var Collection<int, PromotionCategoryRecipe>
     */
    #[ORM\OneToMany(targetEntity: PromotionCategoryRecipe::class, mappedBy: 'categoryRecipe', orphanRemoval: true)]
    private Collection $promotionCategoryRecipes;

    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->recipes = new ArrayCollection();
        $this->promotionCategoryRecipes = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
        $this->is_active = true;
    }

    // ==================== ID ====================

    public function getId(): ?int
    {
        return $this->id;
    }

    // ==================== Nom ====================

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        $this->setUpdatedAt(new \DateTimeImmutable());

        return $this;
    }

    // ==================== Slug ====================

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;
        $this->setUpdatedAt(new \DateTimeImmutable());

        return $this;
    }

    // ==================== Description ====================

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        $this->setUpdatedAt(new \DateTimeImmutable());

        return $this;
    }

    // ==================== Image ====================

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        $this->setUpdatedAt(new \DateTimeImmutable());

        return $this;
    }

    // ==================== Actif ====================

    public function isActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): static
    {
        $this->is_active = $is_active;
        $this->setUpdatedAt(new \DateTimeImmutable());

        return $this;
    }

    // ==================== Dates ====================

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

    // ==================== Parent / Children ====================

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): static
    {
        $this->parent = $parent;
        $this->setUpdatedAt(new \DateTimeImmutable());

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getChildren(): Collection
    {
        return $this->children;
    }

    public function addChild(self $child): static
    {
        if (!$this->children->contains($child)) {
            $this->children->add($child);
            $child->setParent($this);
        }

        return $this;
    }

    public function removeChild(self $child): static
    {
        if ($this->children->removeElement($child)) {
            // set the owning side to null (unless already changed)
            if ($child->getParent() === $this) {
                $child->setParent(null);
            }
        }

        return $this;
    }

    // ==================== Recettes ====================

    /**
     * @return Collection<int, Recipe>
     */
    public function getRecipes(): Collection
    {
        return $this->recipes;
    }

    public function addRecipe(Recipe $recipe): static
    {
        if (!$this->recipes->contains($recipe)) {
            $this->recipes->add($recipe);
            // Assurez-vous que la méthode setCategory existe dans l'entité Recipe.
            // Si la propriété dans Recipe s'appelle 'categoryRecipe', utilisez setCategoryRecipe.
            $recipe->setCategory($this);
        }

        return $this;
    }

    public function removeRecipe(Recipe $recipe): static
    {
        if ($this->recipes->removeElement($recipe)) {
            // set the owning side to null (unless already changed)
            if ($recipe->getCategory() === $this) {
                $recipe->setCategory(null);
            }
        }

        return $this;
    }

    // ==================== Utilisateur ====================

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        $this->setUpdatedAt(new \DateTimeImmutable());

        return $this;
    }

    // ==================== HmaService ====================

    public function getHmaService(): ?HmaService
    {
        return $this->hma_service;
    }

    public function setHmaService(?HmaService $hma_service): static
    {
        $this->hma_service = $hma_service;
        return $this;
    }

    // ==================== Abonnement actif ====================

    public function isSubscriptionActive(): bool
    {
        return $this->subscription_active;
    }

    public function setSubscriptionActive(bool $subscription_active): self
    {
        $this->subscription_active = $subscription_active;
        return $this;
    }

    // ==================== Promotions liées aux catégories ====================

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
            $promotionCategoryRecipe->setCategoryRecipe($this);
        }

        return $this;
    }

    public function removePromotionCategoryRecipe(PromotionCategoryRecipe $promotionCategoryRecipe): static
    {
        if ($this->promotionCategoryRecipes->removeElement($promotionCategoryRecipe)) {
            // set the owning side to null (unless already changed)
            if ($promotionCategoryRecipe->getCategoryRecipe() === $this) {
                $promotionCategoryRecipe->setCategoryRecipe(null);
            }
        }

        return $this;
    }

    // ==================== Méthodes utilitaires ====================

    /**
     * Retourne le niveau hiérarchique de la catégorie (0 pour les racines).
     */
    public function getHierarchyLevel(): int
    {
        $level = 0;
        $parent = $this->getParent();
        while ($parent !== null) {
            $level++;
            $parent = $parent->getParent();
        }
        return $level;
    }

    /**
     * Retourne le nom avec une indentation selon le niveau hiérarchique.
     */
    public function getDisplayName(): string
    {
        $level = $this->getHierarchyLevel();
        $indent = str_repeat('— ', $level);
        return $indent . $this->getName();
    }

    /**
     * Retourne tous les descendants de la catégorie (enfants, petits-enfants…).
     *
     * @return array|self[]
     */
    public function getAllChildren(): array
    {
        $allChildren = [];
        foreach ($this->getChildren() as $child) {
            $allChildren[] = $child;
            $allChildren = array_merge($allChildren, $child->getAllChildren());
        }
        return $allChildren;
    }

    /**
     * Calcule le nombre total de recettes dans cette catégorie et ses sous-catégories.
     */
    public function getTotalRecipesCount(): int
    {
        $count = $this->getRecipes()->count();
        foreach ($this->getChildren() as $child) {
            $count += $child->getTotalRecipesCount();
        }
        return $count;
    }

    /**
     * Vérifie si la catégorie est un descendant d'une autre catégorie.
     */
    public function isDescendantOf(?self $category): bool
    {
        if ($category === null) {
            return false;
        }
        $parent = $this->getParent();
        while ($parent !== null) {
            if ($parent->getId() === $category->getId()) {
                return true;
            }
            $parent = $parent->getParent();
        }
        return false;
    }

    /**
     * Retourne le chemin complet de la catégorie (ex: "Plats > Entrées > Salades").
     */
    public function getFullPath(): string
    {
        $path = [$this->getName()];
        $parent = $this->getParent();
        while ($parent !== null) {
            array_unshift($path, $parent->getName());
            $parent = $parent->getParent();
        }
        return implode(' > ', $path);
    }

    /**
     * Vérifie si la catégorie (ou ses sous-catégories) contient des recettes actives.
     */
    public function hasActiveRecipes(): bool
    {
        foreach ($this->getRecipes() as $recipe) {
            if ($recipe->isActive()) {
                return true;
            }
        }
        foreach ($this->getChildren() as $child) {
            if ($child->hasActiveRecipes()) {
                return true;
            }
        }
        return false;
    }

    /**
     * Compte le nombre de recettes actives dans la catégorie et ses sous-catégories.
     */
    public function getActiveRecipesCount(): int
    {
        $count = 0;
        foreach ($this->getRecipes() as $recipe) {
            if ($recipe->isActive()) {
                $count++;
            }
        }
        foreach ($this->getChildren() as $child) {
            $count += $child->getActiveRecipesCount();
        }
        return $count;
    }

    /**
     * Génère un slug unique à partir du nom.
     */
    public function generateSlug(): string
    {
        $slug = strtolower($this->getName());
        $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
        $slug = trim($slug, '-');
        if ($this->getId()) {
            $slug .= '-' . $this->getId();
        }
        return $slug;
    }

    /**
     * Pour l'affichage dans les formulaires.
     */
    public function __toString(): string
    {
        return $this->getName() ?: 'Nouvelle catégorie';
    }
}