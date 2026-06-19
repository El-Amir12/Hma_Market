<?php
// src/Entity/SubscriptionPlan.php

namespace App\Entity;

use App\Repository\SubscriptionPlanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriptionPlanRepository::class)]
#[ORM\HasLifecycleCallbacks]
class SubscriptionPlan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $name = null;

    #[ORM\Column(length: 100)]
    private ?string $displayName = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $priceMonthly = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $priceYearly = null;

    #[ORM\Column(nullable: true)]
    private ?int $maxUsersPerRole = null;

    #[ORM\Column(nullable: true)]
    private ?int $maxProducts = null;

    #[ORM\Column(nullable: true)]
    private ?int $maxOrdersPerMonth = null;

    #[ORM\Column(nullable: true)]
    private ?int $maxCategories = null;

    #[ORM\Column(nullable: true)]
    private ?int $maxSuppliers = null;

    // ========== CHAMPS POUR LES RESTAURANTS (correspondent à HmaService) ==========
    
    #[ORM\Column(nullable: true)]
    private ?int $maxRecipes = null;
    
    #[ORM\Column(nullable: true)]
    private ?int $maxRecipeCategories = null;
    
    // ========================================================

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $features = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $isActive = true;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    /**
     * @var Collection<int, Subscription>
     */
    #[ORM\OneToMany(targetEntity: Subscription::class, mappedBy: 'subscriptionPlan')]
    private Collection $subscriptions;

    public function __construct()
    {
        $this->subscriptions = new ArrayCollection();
    }

    // ==================== GETTERS & SETTERS ====================

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

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): static
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getPriceMonthly(): ?string
    {
        return $this->priceMonthly;
    }

    public function setPriceMonthly(string $priceMonthly): static
    {
        $this->priceMonthly = $priceMonthly;
        return $this;
    }

    public function getPriceYearly(): ?string
    {
        return $this->priceYearly;
    }

    public function setPriceYearly(string $priceYearly): static
    {
        $this->priceYearly = $priceYearly;
        return $this;
    }

    public function getMaxUsersPerRole(): ?int
    {
        return $this->maxUsersPerRole;
    }

    public function setMaxUsersPerRole(?int $maxUsersPerRole): static
    {
        $this->maxUsersPerRole = $maxUsersPerRole;
        return $this;
    }

    public function getMaxProducts(): ?int
    {
        return $this->maxProducts;
    }

    public function setMaxProducts(?int $maxProducts): static
    {
        $this->maxProducts = $maxProducts;
        return $this;
    }

    public function getMaxOrdersPerMonth(): ?int
    {
        return $this->maxOrdersPerMonth;
    }

    public function setMaxOrdersPerMonth(?int $maxOrdersPerMonth): static
    {
        $this->maxOrdersPerMonth = $maxOrdersPerMonth;
        return $this;
    }

    public function getMaxCategories(): ?int
    {
        return $this->maxCategories;
    }

    public function setMaxCategories(?int $maxCategories): static
    {
        $this->maxCategories = $maxCategories;
        return $this;
    }

    public function getMaxSuppliers(): ?int
    {
        return $this->maxSuppliers;
    }

    public function setMaxSuppliers(?int $maxSuppliers): static
    {
        $this->maxSuppliers = $maxSuppliers;
        return $this;
    }

    // ========== GETTERS & SETTERS POUR RESTAURANT ==========

    public function getMaxRecipes(): ?int
    {
        return $this->maxRecipes;
    }

    public function setMaxRecipes(?int $maxRecipes): static
    {
        $this->maxRecipes = $maxRecipes;
        return $this;
    }

    public function getMaxRecipeCategories(): ?int
    {
        return $this->maxRecipeCategories;
    }

    public function setMaxRecipeCategories(?int $maxRecipeCategories): static
    {
        $this->maxRecipeCategories = $maxRecipeCategories;
        return $this;
    }

    // ============================================================

    public function getFeatures(): array
    {
        return $this->features ?? [];
    }

    public function setFeatures(?array $features): static
    {
        $this->features = $features;
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

    public function isActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return Collection<int, Subscription>
     */
    public function getSubscriptions(): Collection
    {
        return $this->subscriptions;
    }

    public function addSubscription(Subscription $subscription): static
    {
        if (!$this->subscriptions->contains($subscription)) {
            $this->subscriptions->add($subscription);
            $subscription->setSubscriptionPlan($this);
        }
        return $this;
    }

    public function removeSubscription(Subscription $subscription): static
    {
        if ($this->subscriptions->removeElement($subscription)) {
            if ($subscription->getSubscriptionPlan() === $this) {
                $subscription->setSubscriptionPlan(null);
            }
        }
        return $this;
    }

    // ==================== LIFECYCLE CALLBACKS ====================

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    // ==================== METHODES UTILITAIRES ====================

    /**
     * Vérifie si le plan est illimité (tous les champs de limite sont null)
     */
    public function isUnlimited(): bool
    {
        return $this->maxUsersPerRole === null 
            && $this->maxProducts === null 
            && $this->maxOrdersPerMonth === null
            && $this->maxCategories === null
            && $this->maxSuppliers === null
            && $this->maxRecipes === null
            && $this->maxRecipeCategories === null;
    }
}