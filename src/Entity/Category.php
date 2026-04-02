<?php
// src/Entity/Category.php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom de la catégorie est obligatoire")]
    #[Assert\Length(min: 2, max: 100, minMessage: "Le nom doit contenir au moins {{ limit }} caractères", maxMessage: "Le nom ne doit pas dépasser {{ limit }} caractères")]
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
     * @var Collection<int, Product>
     */
    #[ORM\OneToMany(targetEntity: Product::class, mappedBy: 'category')]
    private Collection $products;

    #[ORM\ManyToOne(inversedBy: 'categories')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'categories')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private bool $subscription_active = true;

    /**
     * @var Collection<int, PromotionCategory>
     */
    #[ORM\OneToMany(targetEntity: PromotionCategory::class, mappedBy: 'category', orphanRemoval: true)]
    private Collection $promotionCategories;

    // Propriétés transientes pour les compteurs
    private int $productCount = 0;
    private int $childrenCount = 0;

    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->products = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
        $this->is_active = true;
        $this->promotionCategories = new ArrayCollection();
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
        $this->setUpdatedAt(new \DateTimeImmutable());

        return $this;
    }

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
            if ($child->getParent() === $this) {
                $child->setParent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): static
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setCategory($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        if ($this->products->removeElement($product)) {
            if ($product->getCategory() === $this) {
                $product->setCategory(null);
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
        $this->setUpdatedAt(new \DateTimeImmutable());

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
            $promotionCategory->setCategory($this);
        }

        return $this;
    }

    public function removePromotionCategory(PromotionCategory $promotionCategory): static
    {
        if ($this->promotionCategories->removeElement($promotionCategory)) {
            if ($promotionCategory->getCategory() === $this) {
                $promotionCategory->setCategory(null);
            }
        }

        return $this;
    }

    // === Méthodes utilitaires ===

    public function getHierarchyLevel(): int
    {
        $level = 0;
        $parent = $this->getParent();
        $visited = [];
        while ($parent !== null) {
            $id = $parent->getId();
            if (in_array($id, $visited)) {
                // Cycle détecté, on arrête
                break;
            }
            $visited[] = $id;
            $level++;
            $parent = $parent->getParent();
            if ($level > 100) break; // sécurité supplémentaire
        }
        return $level;
    }

    public function getDisplayName(): string
    {
        $level = $this->getHierarchyLevel();
        return str_repeat('— ', $level) . $this->getName();
    }

    public function getAllChildren(): array
    {
        $allChildren = [];
        foreach ($this->getChildren() as $child) {
            $allChildren[] = $child;
            $allChildren = array_merge($allChildren, $child->getAllChildren());
        }
        return $allChildren;
    }

    public function getTotalProductsCount(): int
    {
        $count = $this->getProducts()->count();
        foreach ($this->getChildren() as $child) {
            $count += $child->getTotalProductsCount();
        }
        return $count;
    }

    public function isDescendantOf(?Category $category): bool
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

    public function hasActiveProducts(): bool
    {
        foreach ($this->getProducts() as $product) {
            if ($product->isActive()) {
                return true;
            }
        }
        foreach ($this->getChildren() as $child) {
            if ($child->hasActiveProducts()) {
                return true;
            }
        }
        return false;
    }

    public function getActiveProductsCount(): int
    {
        $count = 0;
        foreach ($this->getProducts() as $product) {
            if ($product->isActive()) {
                $count++;
            }
        }
        foreach ($this->getChildren() as $child) {
            $count += $child->getActiveProductsCount();
        }
        return $count;
    }

    public function __toString(): string
    {
        return $this->getName();
    }

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

    // === Getters / Setters pour les compteurs transients ===

    public function getProductCount(): int
    {
        return $this->productCount;
    }

    public function setProductCount(int $productCount): self
    {
        $this->productCount = $productCount;
        return $this;
    }

    public function getChildrenCount(): int
    {
        return $this->childrenCount;
    }

    public function setChildrenCount(int $childrenCount): self
    {
        $this->childrenCount = $childrenCount;
        return $this;
    }
}