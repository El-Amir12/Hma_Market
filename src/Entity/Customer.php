<?php
// src/Entity/Customer.php
namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CustomerRepository::class)]
#[ORM\Table(name: 'customer')]
#[ORM\HasLifecycleCallbacks]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà utilisé')]
class Customer implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: 'L\'email est obligatoire')]
    #[Assert\Email(message: 'Veuillez saisir un email valide')]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = ['ROLE_CUSTOMER'];

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Le nom complet est obligatoire')]
    #[Assert\Length(min: 2, max: 100)]
    private ?string $full_name = null;

    #[ORM\Column(length: 30, nullable: true)]
    #[Assert\Length(max: 30)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $country = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $bio = null;

    // ✅ CHAMP IS_ACTIVE - Par défaut false (compte inactif jusqu'à validation)
    #[ORM\Column(options: ['default' => false])]
    private ?bool $is_active = false;

    // ✅ CHAMP IS_VERIFIED - Email vérifié
    #[ORM\Column(options: ['default' => false])]
    private ?bool $is_verified = false;

    // ✅ CHAMP MUST_CHANGE_PASSWORD - Obligation de changer le mot de passe à la première connexion
    #[ORM\Column(options: ['default' => true])]
    private ?bool $must_change_password = true;

    // ✅ TOKEN DE VÉRIFICATION
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $verification_token = null;

    // ✅ DATE D'EXPIRATION DU TOKEN
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $verification_token_expires_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $last_login_at = null;

    #[ORM\Column(nullable: true)]
    private ?int $failedLoginAttempts = 0;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $lockedUntil = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $lastFailedAttemptAt = null;

    #[ORM\Column(nullable: true)]
    private ?string $resetPasswordToken = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $resetPasswordTokenExpiresAt = null;

    // Propriété pour le mot de passe en clair (non persistée)
    private ?string $plainPassword = null;

    #[ORM\OneToOne(mappedBy: 'customer', cascade: ['persist', 'remove'])]
    private ?Cart $cart = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $deleted_at = null;

    /**
     * @var Collection<int, Order>
     */
    #[ORM\OneToMany(targetEntity: Order::class, mappedBy: 'customer')]
    private Collection $orders;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
        $this->roles = ['ROLE_CUSTOMER'];
        $this->created_at = new \DateTimeImmutable();
        $this->is_active = false;
        $this->is_verified = false;
        $this->must_change_password = true;
    }

    // ==================== GETTERS & SETTERS ====================

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
        $roles[] = 'ROLE_CUSTOMER';
        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
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

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(?string $plainPassword): static
    {
        $this->plainPassword = $plainPassword;
        return $this;
    }

    public function eraseCredentials(): void
    {
        $this->plainPassword = null;
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

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;
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

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;
        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): static
    {
        $this->bio = $bio;
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

    public function isVerified(): ?bool
    {
        return $this->is_verified;
    }

    public function setIsVerified(bool $is_verified): static
    {
        $this->is_verified = $is_verified;
        return $this;
    }

    public function isMustChangePassword(): ?bool
    {
        return $this->must_change_password;
    }

    public function setMustChangePassword(bool $must_change_password): static
    {
        $this->must_change_password = $must_change_password;
        return $this;
    }

    public function getVerificationToken(): ?string
    {
        return $this->verification_token;
    }

    public function setVerificationToken(?string $verification_token): static
    {
        $this->verification_token = $verification_token;
        return $this;
    }

    public function getVerificationTokenExpiresAt(): ?\DateTimeImmutable
    {
        return $this->verification_token_expires_at;
    }

    public function setVerificationTokenExpiresAt(?\DateTimeImmutable $verification_token_expires_at): static
    {
        $this->verification_token_expires_at = $verification_token_expires_at;
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

    public function getLastLoginAt(): ?\DateTimeImmutable
    {
        return $this->last_login_at;
    }

    public function setLastLoginAt(?\DateTimeImmutable $last_login_at): static
    {
        $this->last_login_at = $last_login_at;
        return $this;
    }

    public function getFailedLoginAttempts(): ?int
    {
        return $this->failedLoginAttempts;
    }

    public function setFailedLoginAttempts(?int $failedLoginAttempts): static
    {
        $this->failedLoginAttempts = $failedLoginAttempts;
        return $this;
    }

    public function getLockedUntil(): ?\DateTime
    {
        return $this->lockedUntil;
    }

    public function setLockedUntil(?\DateTime $lockedUntil): static
    {
        $this->lockedUntil = $lockedUntil;
        return $this;
    }

    public function getLastFailedAttemptAt(): ?\DateTime
    {
        return $this->lastFailedAttemptAt;
    }

    public function setLastFailedAttemptAt(?\DateTime $lastFailedAttemptAt): static
    {
        $this->lastFailedAttemptAt = $lastFailedAttemptAt;
        return $this;
    }

    public function getResetPasswordToken(): ?string
    {
        return $this->resetPasswordToken;
    }

    public function setResetPasswordToken(?string $resetPasswordToken): static
    {
        $this->resetPasswordToken = $resetPasswordToken;
        return $this;
    }

    public function getResetPasswordTokenExpiresAt(): ?\DateTime
    {
        return $this->resetPasswordTokenExpiresAt;
    }

    public function setResetPasswordTokenExpiresAt(?\DateTime $resetPasswordTokenExpiresAt): static
    {
        $this->resetPasswordTokenExpiresAt = $resetPasswordTokenExpiresAt;
        return $this;
    }

    public function incrementFailedLoginAttempts(): static
    {
        $this->failedLoginAttempts = ($this->failedLoginAttempts ?? 0) + 1;
        $this->lastFailedAttemptAt = new \DateTime();
        
        // Bloquer après 5 tentatives
        if ($this->failedLoginAttempts >= 5) {
            $this->lockedUntil = new \DateTime('+15 minutes');
        }
        
        return $this;
    }

    public function resetFailedLoginAttempts(): static
    {
        $this->failedLoginAttempts = 0;
        $this->lockedUntil = null;
        $this->lastFailedAttemptAt = null;
        return $this;
    }

    public function isLocked(): bool
    {
        if ($this->lockedUntil === null) {
            return false;
        }
        return $this->lockedUntil > new \DateTime();
    }

    public function getRemainingLockMinutes(): ?int
    {
        if (!$this->isLocked()) {
            return null;
        }
        $now = new \DateTime();
        $diff = $now->diff($this->lockedUntil);
        return ($diff->h * 60) + $diff->i;
    }

    public function getRemainingAttempts(): int
    {
        if ($this->isLocked()) {
            return 0;
        }
        return max(0, 5 - ($this->failedLoginAttempts ?? 0));
    }

    public function generateResetToken(): string
    {
        $token = bin2hex(random_bytes(32));
        $this->resetPasswordToken = $token;
        $this->resetPasswordTokenExpiresAt = new \DateTime('+1 hour');
        return $token;
    }

    public function isValidResetToken(string $token): bool
    {
        return $this->resetPasswordToken === $token 
            && $this->resetPasswordTokenExpiresAt !== null
            && $this->resetPasswordTokenExpiresAt > new \DateTime();
    }

    public function clearResetToken(): static
    {
        $this->resetPasswordToken = null;
        $this->resetPasswordTokenExpiresAt = null;
        return $this;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(?Cart $cart): static
    {
        $this->cart = $cart;
        return $this;
    }

    public function getDeletedAt(): ?\DateTimeImmutable
    {
        return $this->deleted_at;
    }

    public function setDeletedAt(?\DateTimeImmutable $deleted_at): static
    {
        $this->deleted_at = $deleted_at;
        return $this;
    }

    // Ajouter une méthode pour vérifier si le client est supprimé
    public function isDeleted(): bool
    {
        return $this->deleted_at !== null;
    }

    // ==================== LIFECYCLE CALLBACKS ====================

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->created_at = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updated_at = new \DateTimeImmutable();
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    public function getFullNameOrEmail(): string
    {
        return $this->full_name ?? $this->email;
    }

    public function getInitials(): string
    {
        if ($this->full_name) {
            $parts = explode(' ', $this->full_name);
            $initials = '';
            foreach ($parts as $part) {
                if (!empty($part)) {
                    $initials .= strtoupper(substr($part, 0, 1));
                }
            }
            return $initials;
        }
        return strtoupper(substr($this->email, 0, 1));
    }

    public function isOnline(): bool
    {
        $lastActivity = $this->getLastLoginAt();
        if (!$lastActivity) {
            return false;
        }
        $threshold = new \DateTimeImmutable('-5 minutes');
        return $lastActivity > $threshold;
    }

    /**
     * Génère un token de vérification unique
     */
    public function generateVerificationToken(): string
    {
        $token = bin2hex(random_bytes(32));
        $this->verification_token = $token;
        $this->verification_token_expires_at = new \DateTimeImmutable('+24 hours');
        return $token;
    }

    /**
     * Vérifie si le token de vérification est valide
     */
    public function isValidVerificationToken(string $token): bool
    {
        return $this->verification_token === $token 
            && $this->verification_token_expires_at 
            && $this->verification_token_expires_at > new \DateTimeImmutable();
    }

    /**
     * Active le compte après vérification
     */
    public function activateAccount(): void
    {
        $this->is_active = true;
        $this->is_verified = true;
        $this->verification_token = null;
        $this->verification_token_expires_at = null;
    }
}