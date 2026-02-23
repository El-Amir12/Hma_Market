<?php
// src/Entity/HmaService.php

namespace App\Entity;

use App\Repository\HmaServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: HmaServiceRepository::class)]
#[ORM\HasLifecycleCallbacks]
class HmaService implements UserInterface, PasswordAuthenticatedUserInterface
{
    // Constantes pour les plans d'abonnement
    public const PLAN_TRIAL = 'trial';
    public const PLAN_FREEMIUM = 'freemium';
    public const PLAN_BASIC = 'basic';
    public const PLAN_PREMIUM = 'premium';
    
    // Limites par plan
    public const PLAN_LIMITS = [
        self::PLAN_TRIAL => [
            'max_users_per_role' => PHP_INT_MAX,
            'max_products' => PHP_INT_MAX,
            'max_orders_per_month' => PHP_INT_MAX,
            'max_categories' => PHP_INT_MAX,
            'max_suppliers' => PHP_INT_MAX,
            'features' => ['all']
        ],
        self::PLAN_FREEMIUM => [
            'max_users_per_role' => 1,
            'max_products' => 50,
            'max_orders_per_month' => 100,
            'max_categories' => 10,
            'max_suppliers' => 5,
            'features' => ['basic_inventory', 'basic_reports']
        ],
        self::PLAN_BASIC => [
            'max_users_per_role' => 2,
            'max_products' => 200,
            'max_orders_per_month' => 500,
            'max_categories' => 20,
            'max_suppliers' => 15,
            'features' => ['advanced_inventory', 'reports', 'api_access']
        ],
        self::PLAN_PREMIUM => [
            'max_users_per_role' => PHP_INT_MAX,
            'max_products' => PHP_INT_MAX,
            'max_orders_per_month' => PHP_INT_MAX,
            'max_categories' => PHP_INT_MAX,
            'max_suppliers' => PHP_INT_MAX,
            'features' => ['all', 'priority_support', 'custom_domain', 'white_label']
        ],
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $companyName = null;

    #[ORM\Column(length: 50)]
    private ?string $companyType = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 100, unique: true)] 
    private ?string $email = null;

    #[ORM\Column(length: 100)]
    private ?string $password = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 8, nullable: true)]
    private ?string $longitude = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 8, nullable: true)]
    private ?string $latitude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logo = null;

    #[ORM\Column]
    private ?bool $isActive = null;

    #[ORM\Column]
    private ?bool $hma_active = true;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $trialEndsAt = null;

    #[ORM\Column]
    private ?\DateTime $createdAt = null;

    #[ORM\Column]
    private ?\DateTime $updated_at = null;

    #[ORM\Column(length: 10, unique: true, nullable: true)]
    private ?string $subscription_number = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $activatedAt = null;

    #[ORM\Column(length: 20, options: ['default' => self::PLAN_TRIAL])]
    private ?string $subscriptionPlan = self::PLAN_TRIAL;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $subscriptionStartAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $subscriptionEndsAt = null;

    // Compteurs pour les limites
    #[ORM\Column(options: ['default' => 0])]
    private int $productCount = 0;

    #[ORM\Column(options: ['default' => 0])]
    private int $orderCount = 0;

    #[ORM\Column(options: ['default' => 0])]
    private int $userCount = 0;

    #[ORM\Column(options: ['default' => 0])]
    private int $categoryCount = 0;

    #[ORM\Column(options: ['default' => 0])]
    private int $supplierCount = 0;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $country = null;

    /**
     * @var Collection<int, Subscription>
     */
    #[ORM\OneToMany(targetEntity: Subscription::class, mappedBy: 'hma_service', cascade: ['remove'], orphanRemoval: true)]
    private Collection $subscriptions;

    /**
     * @var Collection<int, DailyUsage>
     */
    #[ORM\OneToMany(targetEntity: DailyUsage::class, mappedBy: 'hma_service')]
    private Collection $dailyUsages;

    /**
     * @var Collection<int, EmployeeRoleCount>
     */
    #[ORM\OneToMany(targetEntity: EmployeeRoleCount::class, mappedBy: 'hma_service')]
    private Collection $employeeRoleCounts;

    /**
     * @var Collection<int, Payment>
     */
   #[ORM\OneToMany(targetEntity: Payment::class, mappedBy: 'hma_service', cascade: ['remove'], orphanRemoval: true)]
    private Collection $payments;

    /**
     * @var Collection<int, Invoice>
     */
    #[ORM\OneToMany(targetEntity: Invoice::class, mappedBy: 'hma_service', cascade: ['remove'], orphanRemoval: true)]
    private Collection $invoices;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'hma_service_id', cascade: ['remove'], orphanRemoval: true)]
    private Collection $users;

    /**
     * @var Collection<int, Product>
     */
    #[ORM\OneToMany(targetEntity: Product::class, mappedBy: 'hma_service', cascade: ['remove'], orphanRemoval: true)]
    private Collection $products;

    /**
     * @var Collection<int, Category>
     */
    #[ORM\OneToMany(targetEntity: Category::class, mappedBy: 'hma_service', cascade: ['remove'], orphanRemoval: true)]
    private Collection $categories;

    /**
     * @var Collection<int, Purchase>
     */
    #[ORM\OneToMany(targetEntity: Purchase::class, mappedBy: 'hma_service', cascade: ['remove'], orphanRemoval: true)]
    private Collection $purchases;

    /**
     * @var Collection<int, Order>
     */
    #[ORM\OneToMany(targetEntity: Order::class, mappedBy: 'hma_service', cascade: ['remove'], orphanRemoval: true)]
    private Collection $orders; 

    /**
     * @var Collection<int, Supplier>
     */
    #[ORM\OneToMany(targetEntity: Supplier::class, mappedBy: 'hma_service', cascade: ['remove'], orphanRemoval: true)]
    private Collection $suppliers;

    /**
     * @var Collection<int, StockBatch>
     */
    #[ORM\OneToMany(targetEntity: StockBatch::class, mappedBy: 'hma_service', cascade: ['remove'], orphanRemoval: true)]
    private Collection $stockBatches;

    /**
     * @var Collection<int, StockMovement>
     */
    #[ORM\OneToMany(targetEntity: StockMovement::class, mappedBy: 'hma_service', cascade: ['remove'], orphanRemoval: true)]
    private Collection $stockMovements;

    public function __construct()
    {
        $this->subscriptions = new ArrayCollection();
        $this->dailyUsages = new ArrayCollection();
        $this->employeeRoleCounts = new ArrayCollection();
        $this->payments = new ArrayCollection();
        $this->invoices = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->products = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->purchases = new ArrayCollection();
        $this->orders = new ArrayCollection();
        $this->suppliers = new ArrayCollection();
        $this->stockBatches = new ArrayCollection();
        $this->stockMovements = new ArrayCollection();
        
        // Initialiser les compteurs
        $this->productCount = 0;
        $this->orderCount = 0;
        $this->userCount = 0;
        $this->categoryCount = 0;
        $this->supplierCount = 0;
        
        // Initialiser la période d'essai à 14 jours
        $this->trialEndsAt = (new \DateTime())->modify('+14 days');
    }

    // ==================== GETTERS & SETTERS EXISTANTS ====================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): static
    {
        $this->companyName = $companyName;
        return $this;
    }

    public function getCompanyType(): ?string
    {
        return $this->companyType;
    }

    public function setCompanyType(string $companyType): static
    {
        $this->companyType = $companyType;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;
        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): static
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): static
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): static
    {
        $this->logo = $logo;
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

    public function isHmaActive(): ?bool
    {
        return $this->hma_active;
    }

    public function setHmaActive(bool $hmaActive): static
    {
        $this->hma_active = $hmaActive;
        return $this;
    }

    public function getTrialEndsAt(): ?\DateTime
    {
        return $this->trialEndsAt;
    }

    public function setTrialEndsAt(?\DateTime $trialEndsAt): static
    {
        $this->trialEndsAt = $trialEndsAt;
        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;
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

    public function getSubscriptionNumber(): ?string
    {
        return $this->subscription_number;
    }

    public function setSubscriptionNumber(?string $subscription_number): static
    {
        $this->subscription_number = $subscription_number;
        return $this;
    }

    public function getActivatedAt(): ?\DateTime
    {
        return $this->activatedAt;
    }

    public function setActivatedAt(?\DateTime $activatedAt): static
    {
        $this->activatedAt = $activatedAt;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;
        return $this;
    }

    // ==================== NOUVEAUX GETTERS & SETTERS ====================

    public function getSubscriptionPlan(): ?string
    {
        return $this->subscriptionPlan;
    }

    public function setSubscriptionPlan(string $subscriptionPlan): static
    {
        $this->subscriptionPlan = $subscriptionPlan;
        return $this;
    }

    public function getSubscriptionStartAt(): ?\DateTime
    {
        return $this->subscriptionStartAt;
    }

    public function setSubscriptionStartAt(?\DateTime $subscriptionStartAt): static
    {
        $this->subscriptionStartAt = $subscriptionStartAt;
        return $this;
    }

    public function getSubscriptionEndsAt(): ?\DateTime
    {
        return $this->subscriptionEndsAt;
    }

    public function setSubscriptionEndsAt(?\DateTime $subscriptionEndsAt): static
    {
        $this->subscriptionEndsAt = $subscriptionEndsAt;
        return $this;
    }

    public function getProductCount(): int
    {
        return $this->productCount;
    }

    public function setProductCount(int $productCount): static
    {
        $this->productCount = $productCount;
        return $this;
    }

    public function getOrderCount(): int
    {
        return $this->orderCount;
    }

    public function setOrderCount(int $orderCount): static
    {
        $this->orderCount = $orderCount;
        return $this;
    }

    public function getUserCount(): int
    {
        return $this->userCount;
    }

    public function setUserCount(int $userCount): static
    {
        $this->userCount = $userCount;
        return $this;
    }

    public function getCategoryCount(): int
    {
        return $this->categoryCount;
    }

    public function setCategoryCount(int $categoryCount): static
    {
        $this->categoryCount = $categoryCount;
        return $this;
    }

    public function getSupplierCount(): int
    {
        return $this->supplierCount;
    }

    public function setSupplierCount(int $supplierCount): static
    {
        $this->supplierCount = $supplierCount;
        return $this;
    }

    // ==================== MÉTHODES DE GESTION DES COLLECTIONS ====================

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
            $subscription->setHmaService($this);
        }
        return $this;
    }

    public function removeSubscription(Subscription $subscription): static
    {
        if ($this->subscriptions->removeElement($subscription)) {
            if ($subscription->getHmaService() === $this) {
                $subscription->setHmaService(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, DailyUsage>
     */
    public function getDailyUsages(): Collection
    {
        return $this->dailyUsages;
    }

    public function addDailyUsage(DailyUsage $dailyUsage): static
    {
        if (!$this->dailyUsages->contains($dailyUsage)) {
            $this->dailyUsages->add($dailyUsage);
            $dailyUsage->setHmaService($this);
        }
        return $this;
    }

    public function removeDailyUsage(DailyUsage $dailyUsage): static
    {
        if ($this->dailyUsages->removeElement($dailyUsage)) {
            if ($dailyUsage->getHmaService() === $this) {
                $dailyUsage->setHmaService(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, EmployeeRoleCount>
     */
    public function getEmployeeRoleCounts(): Collection
    {
        return $this->employeeRoleCounts;
    }

    public function addEmployeeRoleCount(EmployeeRoleCount $employeeRoleCount): static
    {
        if (!$this->employeeRoleCounts->contains($employeeRoleCount)) {
            $this->employeeRoleCounts->add($employeeRoleCount);
            $employeeRoleCount->setHmaService($this);
        }
        return $this;
    }

    public function removeEmployeeRoleCount(EmployeeRoleCount $employeeRoleCount): static
    {
        if ($this->employeeRoleCounts->removeElement($employeeRoleCount)) {
            if ($employeeRoleCount->getHmaService() === $this) {
                $employeeRoleCount->setHmaService(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Payment>
     */
    public function getPayments(): Collection
    {
        return $this->payments;
    }

    public function addPayment(Payment $payment): static
    {
        if (!$this->payments->contains($payment)) {
            $this->payments->add($payment);
            $payment->setHmaService($this);
        }
        return $this;
    }

    public function removePayment(Payment $payment): static
    {
        if ($this->payments->removeElement($payment)) {
            if ($payment->getHmaService() === $this) {
                $payment->setHmaService(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Invoice>
     */
    public function getInvoices(): Collection
    {
        return $this->invoices;
    }

    public function addInvoice(Invoice $invoice): static
    {
        if (!$this->invoices->contains($invoice)) {
            $this->invoices->add($invoice);
            $invoice->setHmaService($this);
        }
        return $this;
    }

    public function removeInvoice(Invoice $invoice): static
    {
        if ($this->invoices->removeElement($invoice)) {
            if ($invoice->getHmaService() === $this) {
                $invoice->setHmaService(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setHmaServiceId($this);
        }
        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            if ($user->getHmaServiceId() === $this) {
                $user->setHmaServiceId(null);
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
            $product->setHmaService($this);
            $this->productCount = $this->products->count();
        }
        return $this;
    }

    public function removeProduct(Product $product): static
    {
        if ($this->products->removeElement($product)) {
            if ($product->getHmaService() === $this) {
                $product->setHmaService(null);
            }
            $this->productCount = $this->products->count();
        }
        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
            $category->setHmaService($this);
            $this->categoryCount = $this->categories->count();
        }
        return $this;
    }

    public function removeCategory(Category $category): static
    {
        if ($this->categories->removeElement($category)) {
            if ($category->getHmaService() === $this) {
                $category->setHmaService(null);
            }
            $this->categoryCount = $this->categories->count();
        }
        return $this;
    }

    /**
     * @return Collection<int, Purchase>
     */
    public function getPurchases(): Collection
    {
        return $this->purchases;
    }

    public function addPurchase(Purchase $purchase): static
    {
        if (!$this->purchases->contains($purchase)) {
            $this->purchases->add($purchase);
            $purchase->setHmaService($this);
        }
        return $this;
    }

    public function removePurchase(Purchase $purchase): static
    {
        if ($this->purchases->removeElement($purchase)) {
            if ($purchase->getHmaService() === $this) {
                $purchase->setHmaService(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Order>
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): static
    {
        if (!$this->orders->contains($order)) {
            $this->orders->add($order);
            $order->setHmaService($this);
            $this->orderCount = $this->orders->count();
        }
        return $this;
    }

    public function removeOrder(Order $order): static
    {
        if ($this->orders->removeElement($order)) {
            if ($order->getHmaService() === $this) {
                $order->setHmaService(null);
            }
            $this->orderCount = $this->orders->count();
        }
        return $this;
    }

    /**
     * @return Collection<int, Supplier>
     */
    public function getSuppliers(): Collection
    {
        return $this->suppliers;
    }

    public function addSupplier(Supplier $supplier): static
    {
        if (!$this->suppliers->contains($supplier)) {
            $this->suppliers->add($supplier);
            $supplier->setHmaService($this);
            $this->supplierCount = $this->suppliers->count();
        }
        return $this;
    }

    public function removeSupplier(Supplier $supplier): static
    {
        if ($this->suppliers->removeElement($supplier)) {
            if ($supplier->getHmaService() === $this) {
                $supplier->setHmaService(null);
            }
            $this->supplierCount = $this->suppliers->count();
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
            $stockBatch->setHmaService($this);
        }
        return $this;
    }

    public function removeStockBatch(StockBatch $stockBatch): static
    {
        if ($this->stockBatches->removeElement($stockBatch)) {
            if ($stockBatch->getHmaService() === $this) {
                $stockBatch->setHmaService(null);
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
            $stockMovement->setHmaService($this);
        }
        return $this;
    }

    public function removeStockMovement(StockMovement $stockMovement): static
    {
        if ($this->stockMovements->removeElement($stockMovement)) {
            if ($stockMovement->getHmaService() === $this) {
                $stockMovement->setHmaService(null);
            }
        }
        return $this;
    }

    // ==================== MÉTHODES DE GESTION DES ABONNEMENTS ====================

    /**
     * Obtenir le plan actuel en tenant compte de la période d'essai
     */
    public function getCurrentPlan(): string
    {
        // Si en période d'essai et essai non expiré
        if ($this->trialEndsAt && $this->trialEndsAt > new \DateTime()) {
            return self::PLAN_TRIAL;
        }
        
        // Sinon retourner le plan souscrit
        return $this->subscriptionPlan ?? self::PLAN_FREEMIUM;
    }

    /**
     * Vérifier si le compte est en période d'essai
     */
    public function isInTrialPeriod(): bool
    {
        return $this->trialEndsAt && $this->trialEndsAt > new \DateTime();
    }

    /**
     * Vérifier si l'abonnement est actif
     */
    public function hasActiveSubscription(): bool
    {
        $plan = $this->getCurrentPlan();
        return $plan !== self::PLAN_FREEMIUM && $this->isActive;
    }

    /**
     * Obtenir les limites du plan actuel
     */
    public function getCurrentLimits(): array
    {
        $plan = $this->getCurrentPlan();
        return self::PLAN_LIMITS[$plan] ?? self::PLAN_LIMITS[self::PLAN_FREEMIUM];
    }

    /**
     * Vérifier si peut ajouter un produit
     */
    public function canAddProduct(): bool
    {
        $limits = $this->getCurrentLimits();
        return $this->productCount < $limits['max_products'];
    }

    /**
     * Vérifier si peut ajouter une catégorie
     */
    public function canAddCategory(): bool
    {
        $limits = $this->getCurrentLimits();
        return $this->categoryCount < $limits['max_categories'];
    }

    /**
     * Vérifier si peut ajouter un fournisseur
     */
    public function canAddSupplier(): bool
    {
        $limits = $this->getCurrentLimits();
        return $this->supplierCount < $limits['max_suppliers'];
    }

    /**
     * Vérifier si peut créer une commande
     */
    public function canCreateOrder(): bool
    {
        $limits = $this->getCurrentLimits();
        $currentMonth = (new \DateTime())->format('Y-m');
        
        $ordersThisMonth = $this->orders->filter(function(Order $order) use ($currentMonth) {
            return $order->getCreatedAt() && $order->getCreatedAt()->format('Y-m') === $currentMonth;
        })->count();
        
        return $ordersThisMonth < $limits['max_orders_per_month'];
    }

    /**
     * Vérifier si peut ajouter un utilisateur avec un rôle spécifique
     */
    public function canAddUserWithRole(string $role): bool
    {
        $limits = $this->getCurrentLimits();
        
        // Compter les utilisateurs avec ce rôle
        $roleCount = $this->users->filter(function(User $user) use ($role) {
            return in_array($role, $user->getRoles());
        })->count();
        
        return $roleCount < $limits['max_users_per_role'];
    }

    /**
     * Obtenir le nombre de produits restants
     */
    public function getRemainingProducts(): int
    {
        $limits = $this->getCurrentLimits();
        if ($limits['max_products'] === PHP_INT_MAX) {
            return PHP_INT_MAX;
        }
        return max(0, $limits['max_products'] - $this->productCount);
    }

    /**
     * Obtenir le nombre de catégories restantes
     */
    public function getRemainingCategories(): int
    {
        $limits = $this->getCurrentLimits();
        if ($limits['max_categories'] === PHP_INT_MAX) {
            return PHP_INT_MAX;
        }
        return max(0, $limits['max_categories'] - $this->categoryCount);
    }

    /**
     * Obtenir le nombre de fournisseurs restants
     */
    public function getRemainingSuppliers(): int
    {
        $limits = $this->getCurrentLimits();
        if ($limits['max_suppliers'] === PHP_INT_MAX) {
            return PHP_INT_MAX;
        }
        return max(0, $limits['max_suppliers'] - $this->supplierCount);
    }

    /**
     * Obtenir le pourcentage d'utilisation des produits
     */
    public function getProductUsagePercentage(): float
    {
        $limits = $this->getCurrentLimits();
        
        if ($limits['max_products'] === PHP_INT_MAX) {
            return 0;
        }
        
        // Utiliser la collection au lieu du compteur
        $count = $this->products->count();
        return round(($count / $limits['max_products']) * 100, 2);
    }

    /**
     * Obtenir les statistiques d'utilisation
     */
    public function getUsageStats(): array
    {
        $limits = $this->getCurrentLimits();
        $plan = $this->getCurrentPlan();
        
        return [
            'plan' => $plan,
            'plan_label' => $this->getPlanLabel($plan),
            'is_trial' => $this->isInTrialPeriod(),
            'trial_days_remaining' => $this->trialEndsAt ? max(0, $this->trialEndsAt->diff(new \DateTime())->days) : 0,
            'products' => [
                'current' => $this->productCount,
                'limit' => $limits['max_products'],
                'remaining' => $limits['max_products'] === PHP_INT_MAX ? '∞' : max(0, $limits['max_products'] - $this->productCount),
                'percentage' => $this->getProductUsagePercentage()
            ],
            'categories' => [
                'current' => $this->categoryCount,
                'limit' => $limits['max_categories'],
                'remaining' => $limits['max_categories'] === PHP_INT_MAX ? '∞' : max(0, $limits['max_categories'] - $this->categoryCount)
            ],
            'suppliers' => [
                'current' => $this->supplierCount,
                'limit' => $limits['max_suppliers'],
                'remaining' => $limits['max_suppliers'] === PHP_INT_MAX ? '∞' : max(0, $limits['max_suppliers'] - $this->supplierCount)
            ],
            'users' => [
                'current' => $this->userCount,
                'limit' => $limits['max_users_per_role'] . ' par rôle',
            ],
            'features' => $limits['features']
        ];
    }

    /**
     * Obtenir le libellé du plan
     */
    private function getPlanLabel(string $plan): string
    {
        return match($plan) {
            self::PLAN_TRIAL => 'Essai gratuit',
            self::PLAN_FREEMIUM => 'Gratuit',
            self::PLAN_BASIC => 'Basic',
            self::PLAN_PREMIUM => 'Premium',
            default => $plan
        };
    }

    /**
     * Vérifier si une fonctionnalité est disponible
     */
    public function hasFeature(string $feature): bool
    {
        $limits = $this->getCurrentLimits();
        return in_array($feature, $limits['features']) || in_array('all', $limits['features']);
    }

    // ==================== LIFECYCLE CALLBACKS ====================

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTime();
        if ($this->updated_at === null) {
            $this->updated_at = new \DateTime();
        }
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updated_at = new \DateTime();
    }

    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function updateCounters(): void
    {
        $this->userCount = $this->users->count();
        $this->productCount = $this->products->count();
        $this->categoryCount = $this->categories->count();
        $this->supplierCount = $this->suppliers->count();
        $this->orderCount = $this->orders->count();
    }

    // ==================== MÉTHODES D'INTERFACE ====================

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function getRoles(): array
    {
        return ['ROLE_HMA_SERVICE'];
    }

    public function eraseCredentials(): void
    {
        // Si vous stockez le mot de passe en clair, effacez-le ici
    }

    public function getUsername(): string
    {
        return $this->email;
    }

    /**
     * Génère un numéro d'abonnement unique de 10 caractères
     * Format: 2 lettres + 8 chiffres (ex: AB12345678)
     */
    public function generateSubscriptionNumber(): string
    {
        // Générer 2 lettres majuscules
        $letters = '';
        for ($i = 0; $i < 2; $i++) {
            $letters .= chr(rand(65, 90)); // A-Z
        }
        
        // Générer 8 chiffres
        $numbers = '';
        for ($i = 0; $i < 8; $i++) {
            $numbers .= rand(0, 9);
        }
        
        return $letters . $numbers;
    }

    /**
     * Obtenir le libellé du plan actuel
     */
    public function getCurrentPlanLabel(): string
    {
        return $this->getPlanLabel($this->getCurrentPlan());
    }

    /**
     * Obtenir la classe CSS pour le plan
     */
    public function getCurrentPlanBadgeClass(): string
    {
        return match($this->getCurrentPlan()) {
            self::PLAN_PREMIUM => 'bg-gradient-premium',
            self::PLAN_BASIC => 'bg-gradient-basic',
            self::PLAN_FREEMIUM => 'bg-gradient-freemium',
            self::PLAN_TRIAL => 'bg-gradient-trial',
            default => 'bg-secondary'
        };
    }

    /**
     * Obtenir l'icône du plan
     */
    public function getCurrentPlanIcon(): string
    {
        return match($this->getCurrentPlan()) {
            self::PLAN_PREMIUM => 'bi-stars',
            self::PLAN_BASIC => 'bi-rocket',
            self::PLAN_FREEMIUM => 'bi-gift',
            self::PLAN_TRIAL => 'bi-hourglass-split',
            default => 'bi-question-circle'
        };
    }
}