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
#[ORM\HasLifecycleCallbacks] // AJOUTER CE TAG
class HmaService implements UserInterface, PasswordAuthenticatedUserInterface
{
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

    /**
     * @var Collection<int, Subscription>
     */
    #[ORM\OneToMany(targetEntity: Subscription::class, mappedBy: 'hma_service_id')]
    private Collection $subscriptions;

    /**
     * @var Collection<int, DailyUsage>
     */
    #[ORM\OneToMany(targetEntity: DailyUsage::class, mappedBy: 'hma_service_id')]
    private Collection $dailyUsages;

    /**
     * @var Collection<int, EmployeeRoleCount>
     */
    #[ORM\OneToMany(targetEntity: EmployeeRoleCount::class, mappedBy: 'hma_service_id')]
    private Collection $employeeRoleCounts;

    /**
     * @var Collection<int, Payment>
     */
    #[ORM\OneToMany(targetEntity: Payment::class, mappedBy: 'hma_service_id')]
    private Collection $payments;

    /**
     * @var Collection<int, Invoice>
     */
    #[ORM\OneToMany(targetEntity: Invoice::class, mappedBy: 'hma_service_id')]
    private Collection $invoices;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'hma_service_id')]
    private Collection $users;

    /**
     * @var Collection<int, Product>
     */
    #[ORM\OneToMany(targetEntity: Product::class, mappedBy: 'hma_service_id')]
    private Collection $products;

    /**
     * @var Collection<int, Category>
     */
    #[ORM\OneToMany(targetEntity: Category::class, mappedBy: 'hma_service_id')]
    private Collection $categories;

    /**
     * @var Collection<int, Purchase>
     */
    #[ORM\OneToMany(targetEntity: Purchase::class, mappedBy: 'hma_service_id')]
    private Collection $purchases;

    /**
     * @var Collection<int, Order>
     */
    #[ORM\OneToMany(targetEntity: Order::class, mappedBy: 'hma_service_id')]
    private Collection $orders;

    /**
     * @var Collection<int, Supplier>
     */
    #[ORM\OneToMany(targetEntity: Supplier::class, mappedBy: 'hma_service_id')]
    private Collection $suppliers;

    /**
     * @var Collection<int, StockBatch>
     */
    #[ORM\OneToMany(targetEntity: StockBatch::class, mappedBy: 'hma_service_id')]
    private Collection $stockBatches;

    /**
     * @var Collection<int, StockMovement>
     */
    #[ORM\OneToMany(targetEntity: StockMovement::class, mappedBy: 'hma_service')]
    private Collection $stockMovements;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $country = null;

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
    }

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

    // AJOUTER CES METHODES POUR LA GESTION AUTOMATIQUE
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
            $subscription->setHmaServiceId($this);
        }

        return $this;
    }

    public function removeSubscription(Subscription $subscription): static
    {
        if ($this->subscriptions->removeElement($subscription)) {
            // set the owning side to null (unless already changed)
            if ($subscription->getHmaServiceId() === $this) {
                $subscription->setHmaServiceId(null);
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
            $dailyUsage->setHmaServiceId($this);
        }

        return $this;
    }

    public function removeDailyUsage(DailyUsage $dailyUsage): static
    {
        if ($this->dailyUsages->removeElement($dailyUsage)) {
            // set the owning side to null (unless already changed)
            if ($dailyUsage->getHmaServiceId() === $this) {
                $dailyUsage->setHmaServiceId(null);
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
            $employeeRoleCount->setHmaServiceId($this);
        }

        return $this;
    }

    public function removeEmployeeRoleCount(EmployeeRoleCount $employeeRoleCount): static
    {
        if ($this->employeeRoleCounts->removeElement($employeeRoleCount)) {
            // set the owning side to null (unless already changed)
            if ($employeeRoleCount->getHmaServiceId() === $this) {
                $employeeRoleCount->setHmaServiceId(null);
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
            $payment->setHmaServiceId($this);
        }

        return $this;
    }

    public function removePayment(Payment $payment): static
    {
        if ($this->payments->removeElement($payment)) {
            // set the owning side to null (unless already changed)
            if ($payment->getHmaServiceId() === $this) {
                $payment->setHmaServiceId(null);
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
            $invoice->setHmaServiceId($this);
        }

        return $this;
    }

    public function removeInvoice(Invoice $invoice): static
    {
        if ($this->invoices->removeElement($invoice)) {
            // set the owning side to null (unless already changed)
            if ($invoice->getHmaServiceId() === $this) {
                $invoice->setHmaServiceId(null);
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
            // set the owning side to null (unless already changed)
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
            $product->setHmaServiceId($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getHmaServiceId() === $this) {
                $product->setHmaServiceId(null);
            }
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
            $category->setHmaServiceId($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): static
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getHmaServiceId() === $this) {
                $category->setHmaServiceId(null);
            }
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
            $purchase->setHmaServiceId($this);
        }

        return $this;
    }

    public function removePurchase(Purchase $purchase): static
    {
        if ($this->purchases->removeElement($purchase)) {
            // set the owning side to null (unless already changed)
            if ($purchase->getHmaServiceId() === $this) {
                $purchase->setHmaServiceId(null);
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
            $order->setHmaServiceId($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): static
    {
        if ($this->orders->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getHmaServiceId() === $this) {
                $order->setHmaServiceId(null);
            }
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
            $supplier->setHmaServiceId($this);
        }

        return $this;
    }

    public function removeSupplier(Supplier $supplier): static
    {
        if ($this->suppliers->removeElement($supplier)) {
            // set the owning side to null (unless already changed)
            if ($supplier->getHmaServiceId() === $this) {
                $supplier->setHmaServiceId(null);
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
            $stockBatch->setHmaServiceId($this);
        }

        return $this;
    }

    public function removeStockBatch(StockBatch $stockBatch): static
    {
        if ($this->stockBatches->removeElement($stockBatch)) {
            // set the owning side to null (unless already changed)
            if ($stockBatch->getHmaServiceId() === $this) {
                $stockBatch->setHmaServiceId(null);
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
            // set the owning side to null (unless already changed)
            if ($stockMovement->getHmaService() === $this) {
                $stockMovement->setHmaService(null);
            }
        }

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

    public function getUsername(): string
    {
        return $this->email;
    }
}
