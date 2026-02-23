<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[ORM\HasLifecycleCallbacks]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    private ?string $full_name = null;

    #[ORM\Column(length: 20)]
    private ?string $phone = null;

    /**
     * @var bool|null Contrôle manuel par l'admin de l'entreprise
     * L'admin peut activer/désactiver manuellement un utilisateur
     */
    #[ORM\Column]
    private ?bool $is_active = true;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\Column(nullable: true)] 
    private ?\DateTime $updated_at = null;

    /**
     * @var bool Si false, l'utilisateur doit changer son mot de passe à la prochaine connexion
     */
    #[ORM\Column]
    private bool $passwordChanged = false;

    /**
     * @var bool|null Contrôle automatique basé sur les quotas d'abonnement
     * Mis à jour automatiquement par le système selon le plan
     */
    #[ORM\Column]
    private ?bool $subscription_active = true;

    /**
     * @var Collection<int, Product>
     */
    #[ORM\OneToMany(targetEntity: Product::class, mappedBy: 'user')]
    private Collection $products;

    /**
     * @var Collection<int, Category>
     */
    #[ORM\OneToMany(targetEntity: Category::class, mappedBy: 'user')]
    private Collection $categories;

    /**
     * @var Collection<int, Purchase>
     */
    #[ORM\OneToMany(targetEntity: Purchase::class, mappedBy: 'user')]
    private Collection $purchases;

    /**
     * @var Collection<int, Order>
     */
    #[ORM\OneToMany(targetEntity: Order::class, mappedBy: 'user')]
    private Collection $orders;

    /**
     * @var Collection<int, StockMovement>
     */
    #[ORM\OneToMany(targetEntity: StockMovement::class, mappedBy: 'user')]
    private Collection $stockMovements;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    // ✅ Relation avec HmaService - nom de colonne explicite
    #[ORM\ManyToOne(targetEntity: HmaService::class, inversedBy: 'users')]
    #[ORM\JoinColumn(name: 'hma_service_id', referencedColumnName: 'id', nullable: true)]
    private ?HmaService $hma_service_id = null;

    #[ORM\Column]
    private ?bool $is_super_admin = false;

    #[ORM\Column]
    private ?bool $is_hma_owner = false;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $employment_date = null;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->purchases = new ArrayCollection();
        $this->orders = new ArrayCollection();
        $this->stockMovements = new ArrayCollection();
        
        // Par défaut, un nouvel utilisateur n'a pas changé son mot de passe
        $this->passwordChanged = false;
    }

    // ==================== GETTERS & SETTERS DE BASE ====================

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    /**
     * Set the user roles
     * 
     * @param array|string|null $roles
     */
    public function setRoles($roles): static
    {
        if ($roles === null) {
            return $this;
        }
        
        if (is_string($roles)) {
            $roles = [$roles];
        }
        
        if (!is_array($roles)) {
            $roles = [];
        }
        
        // ✅ CRITIQUE : Enlever ROLE_USER qui ne doit pas être stocké en base
        $roles = array_filter($roles, fn($role) => $role !== 'ROLE_USER');
        
        $this->roles = array_values(array_unique($roles));
        $this->is_super_admin = in_array('ROLE_SUPER_ADMIN', $this->roles);
        
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

    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFullName(): ?string
    {
        return $this->full_name;
    }

    public function setFullName(string $full_name): static
    {
        $this->full_name = $full_name;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->is_active;
    }
    
    public function setIsActive(bool $isActive): static
    {
        $this->is_active = $isActive;
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

    public function isPasswordChanged(): bool
    {
        return $this->passwordChanged;
    }

    public function setPasswordChanged(bool $passwordChanged): static
    {
        $this->passwordChanged = $passwordChanged;
        return $this;
    }

    public function isSubscriptionActive(): ?bool
    {
        return $this->subscription_active;
    }

    public function setSubscriptionActive(bool $subscriptionActive): static
    {
        $this->subscription_active = $subscriptionActive;
        return $this;
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->created_at = new \DateTime();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updated_at = new \DateTime();
    }

    // ==================== COLLECTIONS ====================

    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): static
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setUser($this);
        }
        return $this;
    }

    public function removeProduct(Product $product): static
    {
        if ($this->products->removeElement($product)) {
            if ($product->getUser() === $this) {
                $product->setUser(null);
            }
        }
        return $this;
    }

    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
            $category->setUser($this);
        }
        return $this;
    }

    public function removeCategory(Category $category): static
    {
        if ($this->categories->removeElement($category)) {
            if ($category->getUser() === $this) {
                $category->setUser(null);
            }
        }
        return $this;
    }

    public function getPurchases(): Collection
    {
        return $this->purchases;
    }

    public function addPurchase(Purchase $purchase): static
    {
        if (!$this->purchases->contains($purchase)) {
            $this->purchases->add($purchase);
            $purchase->setUser($this);
        }
        return $this;
    }

    public function removePurchase(Purchase $purchase): static
    {
        if ($this->purchases->removeElement($purchase)) {
            if ($purchase->getUser() === $this) {
                $purchase->setUser(null);
            }
        }
        return $this;
    }

    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): static
    {
        if (!$this->orders->contains($order)) {
            $this->orders->add($order);
            $order->setUser($this);
        }
        return $this;
    }

    public function removeOrder(Order $order): static
    {
        if ($this->orders->removeElement($order)) {
            if ($order->getUser() === $this) {
                $order->setUser(null);
            }
        }
        return $this;
    }

    public function getStockMovements(): Collection
    {
        return $this->stockMovements;
    }

    public function addStockMovement(StockMovement $stockMovement): static
    {
        if (!$this->stockMovements->contains($stockMovement)) {
            $this->stockMovements->add($stockMovement);
            $stockMovement->setUser($this);
        }
        return $this;
    }

    public function removeStockMovement(StockMovement $stockMovement): static
    {
        if ($this->stockMovements->removeElement($stockMovement)) {
            if ($stockMovement->getUser() === $this) {
                $stockMovement->setUser(null);
            }
        }
        return $this;
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    public function getRoleLabel(): string
    {
        $roleLabels = [
            'ROLE_SUPER_ADMIN' => 'Super Administrateur',
            'ROLE_ADMIN' => 'Administrateur',
            'ROLE_MANAGER' => 'Gestionnaire',
            'ROLE_STOCK_MANAGER' => 'Responsable Stock',
            'ROLE_CASHIER' => 'Caissier',
        ];

        foreach ($this->roles as $role) {
            if (isset($roleLabels[$role])) {
                return $roleLabels[$role];
            }
        }
        return 'Utilisateur';
    }

    public function getRoleBadgeClass(): string
    {
        foreach ($this->roles as $role) {
            return match($role) {
                'ROLE_SUPER_ADMIN' => 'bg-gradient-danger',
                'ROLE_ADMIN' => 'bg-gradient-danger',
                'ROLE_MANAGER' => 'bg-gradient-primary',
                'ROLE_STOCK_MANAGER' => 'bg-gradient-warning',
                'ROLE_CASHIER' => 'bg-gradient-success',
                default => 'bg-gradient-secondary',
            };
        }
        return 'bg-gradient-secondary';
    }

    public function getRoleIcon(): string
    {
        foreach ($this->roles as $role) {
            return match($role) {
                'ROLE_SUPER_ADMIN' => 'bi-shield-shaded',
                'ROLE_ADMIN' => 'bi-shield-check',
                'ROLE_MANAGER' => 'bi-graph-up',
                'ROLE_STOCK_MANAGER' => 'bi-box-seam',
                'ROLE_CASHIER' => 'bi-cash-coin',
                default => 'bi-person',
            };
        }
        return 'bi-person';
    }

    public function hasRole(string $role): bool
    {
        return in_array($role, $this->roles);
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;
        return $this;
    }

    // ==================== MÉTHODES HMA SERVICE ====================

    /**
     * Get the associated HmaService
     */
    public function getHmaServiceId(): ?HmaService
    {
        return $this->hma_service_id;
    }

    /**
     * Set the associated HmaService
     */
    public function setHmaServiceId(?HmaService $hma_service_id): static
    {
        $this->hma_service_id = $hma_service_id;
        return $this;
    }

    /**
     * Alias pour getHmaServiceId()
     */
    public function getHmaService(): ?HmaService
    {
        return $this->getHmaServiceId();
    }

    /**
     * Retourne l'ID numérique du HmaService associé
     */
    public function getHmaServiceIdValue(): ?int
    {
        return $this->hma_service_id?->getId();
    }

    /**
     * Vérifie si l'utilisateur est associé à un HmaService
     */
    public function hasHmaService(): bool
    {
        return $this->hma_service_id !== null;
    }

    public function isSuperAdmin(): bool
    {
        return in_array('ROLE_SUPER_ADMIN', $this->getRoles());
    }

    public function setIsSuperAdmin(bool $is_super_admin): static
    {
        $this->is_super_admin = $is_super_admin;
        
        // Synchroniser automatiquement avec le tableau des rôles
        $roles = $this->roles ?? [];
        
        if ($is_super_admin) {
            // Ajouter ROLE_SUPER_ADMIN s'il n'existe pas déjà
            if (!in_array('ROLE_SUPER_ADMIN', $roles)) {
                $roles[] = 'ROLE_SUPER_ADMIN';
            }
        } else {
            // Retirer ROLE_SUPER_ADMIN s'il existe
            $roles = array_filter($roles, fn($role) => $role !== 'ROLE_SUPER_ADMIN');
            $roles = array_values($roles); // Réindexer
        }
        
        // S'assurer que ROLE_USER est toujours présent
        if (!in_array('ROLE_USER', $roles)) {
            $roles[] = 'ROLE_USER';
        }
        
        $this->roles = array_unique($roles);
        
        return $this;
    }

    public function isHmaOwner(): ?bool
    {
        return $this->is_hma_owner;
    }

    public function setIsHmaOwner(bool $is_hma_owner): static
    {
        $this->is_hma_owner = $is_hma_owner;
        return $this;
    }

    public function getEmploymentDate(): ?\DateTime
    {
        return $this->employment_date;
    }

    public function setEmploymentDate(?\DateTime $employment_date): static
    {
        $this->employment_date = $employment_date;
        return $this;
    }

    // ==================== MÉTHODES POUR L'ENTREPRISE ====================

    /**
     * Récupérer le nom de l'entreprise
     */
    public function getCompanyDisplayName(): string
    {
        if (!$this->hma_service_id) {
            return 'HMA MARKET';
        }
        
        $name = $this->hma_service_id->getCompanyName();
        return $name ?: 'HMA MARKET';
    }

    /**
     * Récupérer le logo
     */
    public function getCompanyLogo(): ?string
    {
        if (!$this->hma_service_id) {
            return null;
        }
        
        return $this->hma_service_id->getLogo();
    }

    /**
     * Récupérer l'initiale
     */
    public function getCompanyInitial(): string
    {
        $name = $this->getCompanyDisplayName();
        return substr($name, 0, 1);
    }

    /**
     * Vérifier si l'utilisateur a une entreprise
     */
    public function hasCompany(): bool
    {
        return $this->hma_service_id !== null;
    }

    /**
     * ✅ Vérifier si l'utilisateur peut se connecter
     * RÈGLES DE CONNEXION:
     * 1. Si l'entreprise est désactivée (hma_active = false) → BLOQUÉ
     * 2. Si l'utilisateur est désactivé manuellement (is_active = false) → BLOQUÉ
     * 3. Si l'utilisateur est hors quota (subscription_active = false) → BLOQUÉ
     * 
     * Exception: Les super admins et propriétaires d'entreprise peuvent toujours se connecter
     */
    public function canLogin(): bool
    {
        // Les super admins peuvent toujours se connecter
        if (in_array('ROLE_SUPER_ADMIN', $this->getRoles()) || $this->is_super_admin) {
            return true;
        }
        
        // Si l'utilisateur a une entreprise
        if ($this->hma_service_id) {
            // 1. Vérifier si l'entreprise est active globalement
            if (!$this->hma_service_id->isHmaActive()) {
                return false;
            }
            
            // 2. Les propriétaires d'entreprise peuvent toujours se connecter
            if ($this->is_hma_owner) {
                return true;
            }
        }
        
        // 3. Pour les autres, il faut être actif manuellement ET dans les quotas
        return $this->is_active && $this->subscription_active;
    }

    /**
     * Obtenir le statut complet pour l'affichage
     */
    public function getStatusLabel(): string
    {
        if ($this->hma_service_id && !$this->hma_service_id->isHmaActive()) {
            return 'Entreprise bloquée';
        }
        
        if (!$this->is_active) {
            return 'Désactivé par admin';
        }
        
        if (!$this->subscription_active) {
            return 'Hors quota';
        }
        
        return 'Actif';
    }

    /**
     * Obtenir la classe CSS pour le statut
     */
    public function getStatusBadgeClass(): string
    {
        if ($this->hma_service_id && !$this->hma_service_id->isHmaActive()) {
            return 'badge bg-dark';
        }
        
        if (!$this->is_active) {
            return 'badge bg-secondary';
        }
        
        if (!$this->subscription_active) {
            return 'badge bg-warning text-dark';
        }
        
        return 'badge bg-success';
    }

    /**
     * Obtenir l'icône du statut
     */
    public function getStatusIcon(): string
    {
        if ($this->hma_service_id && !$this->hma_service_id->isHmaActive()) {
            return 'bi-shield-lock-fill';
        }
        
        if (!$this->is_active) {
            return 'bi-toggle-off';
        }
        
        if (!$this->subscription_active) {
            return 'bi-exclamation-triangle-fill';
        }
        
        return 'bi-check-circle-fill';
    }

    /**
     * Vérifier si l'utilisateur est modifiable par l'admin connecté
     */
    public function isEditableBy(User $admin): bool
    {
        // ✅ Vérification ROBUSTE : super admin via rôles OU champ booléen
        if (in_array('ROLE_SUPER_ADMIN', $admin->getRoles()) || $admin->isSuperAdmin()) {
            return true;
        }
        
        // Si l'admin n'est pas propriétaire d'entreprise, il ne peut rien modifier
        if (!$admin->isHmaOwner()) {
            return false;
        }
        
        // Vérifier que l'admin a une entreprise
        $adminCompany = $admin->getHmaServiceId();
        if (!$adminCompany) {
            return false;
        }
        
        // Si l'utilisateur cible n'a pas d'entreprise
        if (!$this->hma_service_id) {
            return false;
        }
        
        // Vérifier que c'est la MÊME entreprise
        return $adminCompany->getId() === $this->hma_service_id->getId();
    }

    /**
     * Vérifier si l'email peut être modifié
     * Règle : Seul un Super Admin peut modifier son PROPRE email
     */
    public function canEmailBeEditedBy(User $admin): bool
    {
        // ✅ Uniquement Super Admin qui modifie son propre compte
        return $admin->isSuperAdmin() && $this->getId() === $admin->getId();
    }

    /**
     * Vérifier si le rôle peut être modifié
     * Règles :
     * - Super Admin peut modifier le rôle des autres (pas le sien)
     * - Admin entreprise peut modifier le rôle de ses employés (pas le sien)
     */
    public function canRoleBeEditedBy(User $admin): bool
    {
        // ❌ Personne ne peut modifier son propre rôle
        if ($this->getId() === $admin->getId()) {
            return false;
        }
        
        // ✅ Super Admin peut modifier le rôle des autres
        if ($admin->isSuperAdmin()) {
            return true;
        }
        
        // ✅ Admin entreprise peut modifier le rôle de ses employés
        if (in_array('ROLE_ADMIN', $admin->getRoles())) {
            $adminCompany = $admin->getHmaServiceId();
            $targetCompany = $this->getHmaServiceId();
            
            // Vérifier que les deux ont une entreprise et que c'est la même
            if ($adminCompany && $targetCompany && $adminCompany->getId() === $targetCompany->getId()) {
                return true;
            }
        }
        
        return false;
    }

    /**
     * Vérifier si l'utilisateur peut être désactivé/activé
     * L'admin peut désactiver tout le monde (y compris les autres admins)
     * Mais ne peut pas se désactiver lui-même (pour éviter de se bloquer)
     */
    public function canToggleStatusBy(User $admin): bool
    {
        // Ne peut pas se désactiver lui-même
        if ($this->getId() === $admin->getId()) {
            return false;
        }
        
        return $this->isEditableBy($admin);
    }

    /**
     * Vérifier si l'utilisateur peut être supprimé
     * L'admin peut supprimer tout le monde sauf lui-même
     */
    public function canBeDeletedBy(User $admin): bool
    {
        // Ne peut pas se supprimer lui-même
        if ($this->getId() === $admin->getId()) {
            return false;
        }
        
        // Ne peut pas supprimer le super admin système
        if ($this->getEmail() === 'admin@hma.com') {
            return false;
        }
        
        return $this->isEditableBy($admin);
    }
    
    /**
     * Obtenir le libellé d'un rôle (méthode statique)
     */
    public static function getRoleLabelStatic(string $role): string
    {
        return match($role) {
            'ROLE_SUPER_ADMIN' => 'Super Administrateur',
            'ROLE_ADMIN' => 'Administrateur',
            'ROLE_MANAGER' => 'Gestionnaire',
            'ROLE_STOCK_MANAGER' => 'Responsable Stock',
            'ROLE_CASHIER' => 'Caissier',
            default => 'Utilisateur',
        };
    }

    /**
     * Obtenir la classe CSS pour un rôle (méthode statique)
     */
    public static function getRoleBadgeClassStatic(string $role): string
    {
        return match($role) {
            'ROLE_SUPER_ADMIN', 'ROLE_ADMIN' => 'bg-gradient-danger',
            'ROLE_MANAGER' => 'bg-gradient-primary',
            'ROLE_STOCK_MANAGER' => 'bg-gradient-warning',
            'ROLE_CASHIER' => 'bg-gradient-success',
            default => 'bg-gradient-secondary',
        };
    }

    /**
     * Obtenir l'icône pour un rôle (méthode statique)
     */
    public static function getRoleIconStatic(string $role): string
    {
        return match($role) {
            'ROLE_SUPER_ADMIN' => 'bi-shield-shaded',
            'ROLE_ADMIN' => 'bi-shield-check',
            'ROLE_MANAGER' => 'bi-graph-up',
            'ROLE_STOCK_MANAGER' => 'bi-box-seam',
            'ROLE_CASHIER' => 'bi-cash-coin',
            default => 'bi-person',
        };
    }

}