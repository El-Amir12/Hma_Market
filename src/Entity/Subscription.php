<?php

namespace App\Entity;

use App\Repository\SubscriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriptionRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Subscription
{
    // ==================== CONSTANTES DE STATUT ====================

    public const STATUS_PENDING   = 'pending';
    public const STATUS_ACTIVE    = 'active';
    public const STATUS_EXPIRED   = 'expired';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_SUSPENDED = 'suspended';

    /**
     * Statuts "manuels" : ne doivent PAS être écrasés automatiquement
     * par refreshStatus() ou le lifecycle callback.
     */
    private const MANUAL_STATUSES = [self::STATUS_CANCELLED, self::STATUS_SUSPENDED];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 15)]
    private ?string $billingPeriod = null;

    #[ORM\Column(length: 25)]
    private ?string $status = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $startsAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $endsAt = null;

    #[ORM\Column]
    private ?bool $subscription_active = true;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $paymentMethod = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $transactionId = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'subscriptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    #[ORM\ManyToOne(inversedBy: 'subscriptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SubscriptionPlan $subscriptionPlan = null;

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBillingPeriod(): ?string
    {
        return $this->billingPeriod;
    }

    public function setBillingPeriod(string $billingPeriod): static
    {
        $this->billingPeriod = $billingPeriod;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getStartsAt(): ?\DateTimeImmutable
    {
        return $this->startsAt;
    }

    public function setStartsAt(\DateTimeImmutable $startsAt): static
    {
        $this->startsAt = $startsAt;
        return $this;
    }

    public function getEndsAt(): ?\DateTimeImmutable
    {
        return $this->endsAt;
    }

    public function setEndsAt(\DateTimeImmutable $endsAt): static
    {
        $this->endsAt = $endsAt;
        return $this;
    }

    public function isSubscriptionActive(): ?bool
    {
        return $this->subscription_active;
    }

    public function setSubscriptionActive(bool $subscription_active): static
    {
        $this->subscription_active = $subscription_active;
        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?string $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(?string $transactionId): static
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;
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

    public function getHmaService(): ?HmaService
    {
        return $this->hma_service;
    }

    public function setHmaService(?HmaService $hma_service): static
    {
        $this->hma_service = $hma_service;
        return $this;
    }

    public function getSubscriptionPlan(): ?SubscriptionPlan
    {
        return $this->subscriptionPlan;
    }

    public function setSubscriptionPlan(?SubscriptionPlan $subscriptionPlan): static
    {
        $this->subscriptionPlan = $subscriptionPlan;
        return $this;
    }

    // ==================== MÉTHODES D'AFFICHAGE (inchangées) ====================

    public function getPlanLabel(): string
    {
        if (!$this->subscriptionPlan) {
            return 'Sans plan';
        }
        return $this->subscriptionPlan->getDisplayName() ?? $this->subscriptionPlan->getName() ?? 'Plan inconnu';
    }

    public function getPlanIcon(): string
    {
        if (!$this->subscriptionPlan) {
            return 'bi-box';
        }
        $name = strtolower($this->subscriptionPlan->getName() ?? '');
        return match(true) {
            str_contains($name, 'premium') => 'bi-stars',
            str_contains($name, 'gold') => 'bi-star-fill',
            str_contains($name, 'platinum') => 'bi-gem',
            str_contains($name, 'enterprise') => 'bi-building',
            str_contains($name, 'pro') => 'bi-rocket-takeoff',
            str_contains($name, 'basic') => 'bi-rocket',
            str_contains($name, 'silver') => 'bi-star',
            str_contains($name, 'bronze') => 'bi-circle',
            str_contains($name, 'freemium') => 'bi-gift',
            str_contains($name, 'trial') => 'bi-hourglass-split',
            str_contains($name, 'starter') => 'bi-play-circle',
            str_contains($name, 'standard') => 'bi-check-circle',
            default => 'bi-box'
        };
    }

    public function getPlanBadgeClass(): string
    {
        if (!$this->subscriptionPlan) {
            return 'bg-secondary';
        }
        $name = strtolower($this->subscriptionPlan->getName() ?? '');
        return match(true) {
            str_contains($name, 'premium') || str_contains($name, 'gold') || str_contains($name, 'platinum') => 'bg-warning text-dark',
            str_contains($name, 'enterprise') => 'bg-danger',
            str_contains($name, 'pro') => 'bg-primary',
            str_contains($name, 'standard') || str_contains($name, 'silver') => 'bg-info text-dark',
            str_contains($name, 'basic') || str_contains($name, 'bronze') || str_contains($name, 'starter') => 'bg-secondary',
            str_contains($name, 'freemium') => 'bg-success',
            str_contains($name, 'trial') => 'bg-primary',
            default => 'bg-secondary'
        };
    }

    public function getFormattedPrice(): string
    {
        if (!$this->subscriptionPlan) {
            return '0 FCFA';
        }
        if ($this->billingPeriod === 'yearly') {
            $price = $this->subscriptionPlan->getPriceYearly();
            $period = '/an';
        } else {
            $price = $this->subscriptionPlan->getPriceMonthly();
            $period = '/mois';
        }
        return number_format((float) $price, 0, ',', ' ') . ' FCFA' . $period;
    }

    public function getPlanPrice(): float
    {
        if (!$this->subscriptionPlan) {
            return 0;
        }
        if ($this->billingPeriod === 'yearly') {
            return (float) $this->subscriptionPlan->getPriceYearly();
        }
        return (float) $this->subscriptionPlan->getPriceMonthly();
    }

    public function getPlanName(): ?string
    {
        return $this->subscriptionPlan?->getName();
    }

    public function getPlanDisplayName(): ?string
    {
        return $this->subscriptionPlan?->getDisplayName();
    }

    public function isPlanUnlimited(): bool
    {
        return $this->subscriptionPlan?->isUnlimited() ?? false;
    }

    public function getBillingPeriodLabel(): string
    {
        return match($this->billingPeriod) {
            'monthly' => 'Mensuel',
            'yearly' => 'Annuel',
            'quarterly' => 'Trimestriel',
            'semester' => 'Semestriel',
            default => ucfirst($this->billingPeriod ?? 'Inconnu')
        };
    }

    public function getStatusBadgeClass(): string
    {
        return match($this->status) {
            self::STATUS_ACTIVE => 'bg-success',
            self::STATUS_PENDING => 'bg-warning text-dark',
            self::STATUS_EXPIRED => 'bg-danger',
            self::STATUS_CANCELLED => 'bg-secondary',
            self::STATUS_SUSPENDED => 'bg-dark',
            default => 'bg-secondary'
        };
    }

    public function getStatusLabel(): string
    {
        return match($this->status) {
            self::STATUS_ACTIVE => 'Actif',
            self::STATUS_PENDING => 'En attente',
            self::STATUS_EXPIRED => 'Expiré',
            self::STATUS_CANCELLED => 'Annulé',
            self::STATUS_SUSPENDED => 'Suspendu',
            default => ucfirst($this->status ?? 'Inconnu')
        };
    }

    public function isActive(): bool
    {
        return $this->status === self::STATUS_ACTIVE && $this->subscription_active === true;
    }

    public function isExpired(): bool
    {
        return $this->status === self::STATUS_EXPIRED
            || ($this->endsAt && $this->endsAt < new \DateTimeImmutable());
    }

    public function getDurationInDays(): ?int
    {
        if (!$this->startsAt || !$this->endsAt) {
            return null;
        }
        return $this->startsAt->diff($this->endsAt)->days;
    }

    public function getDaysRemaining(): ?int
    {
        if (!$this->endsAt) {
            return null;
        }
        $now = new \DateTimeImmutable();
        if ($this->endsAt < $now) {
            return 0;
        }
        return $now->diff($this->endsAt)->days;
    }

    public function isExpiringSoon(): bool
    {
        $daysRemaining = $this->getDaysRemaining();
        return $daysRemaining !== null && $daysRemaining > 0 && $daysRemaining <= 30;
    }

    public function getProgressPercentage(): ?float
    {
        if (!$this->startsAt || !$this->endsAt) {
            return null;
        }
        $now = new \DateTimeImmutable();
        $totalDuration = $this->startsAt->diff($this->endsAt)->days;
        $elapsedDuration = $this->startsAt->diff($now)->days;
        if ($totalDuration <= 0) {
            return 0;
        }
        $percentage = ($elapsedDuration / $totalDuration) * 100;
        return min(100, max(0, $percentage));
    }

    // ==================== ✅ SOLUTION 1 : MÉTHODES DE RAFRAÎCHISSEMENT ====================

    /**
     * ✅ Recalcule et met à jour le statut de l'abonnement selon les dates
     * et la cohérence temporelle.
     *
     * Règles appliquées :
     *  - Si `endsAt` < maintenant           → status = 'expired', subscription_active = false
     *  - Si `startsAt` > maintenant         → status = 'pending', subscription_active = false
     *  - Si dans la fenêtre [startsAt, endsAt] et status ∈ {pending, null} → status = 'active', subscription_active = true
     *
     * ⚠️ Les statuts "manuels" (cancelled, suspended) ne sont JAMAIS écrasés.
     *
     * @return bool true si le statut a changé, false sinon
     */
    public function refreshStatus(): bool
    {
        // Ne jamais toucher aux statuts manuels
        if (in_array($this->status, self::MANUAL_STATUSES, true)) {
            return false;
        }

        $now = new \DateTimeImmutable();
        $oldStatus = $this->status;
        $oldActive = $this->subscription_active;

        // 1. Abonnement expiré
        if ($this->endsAt !== null && $this->endsAt < $now) {
            $this->status = self::STATUS_EXPIRED;
            $this->subscription_active = false;
        }
        // 2. Abonnement pas encore démarré
        elseif ($this->startsAt !== null && $this->startsAt > $now) {
            $this->status = self::STATUS_PENDING;
            $this->subscription_active = false;
        }
        // 3. Abonnement en cours de validité
        elseif (
            $this->startsAt !== null
            && $this->startsAt <= $now
            && $this->endsAt !== null
            && $this->endsAt > $now
        ) {
            // Ne basculer en actif que si on est encore en 'pending' ou null
            if ($this->status === self::STATUS_PENDING || $this->status === null) {
                $this->status = self::STATUS_ACTIVE;
                $this->subscription_active = true;
            }
        }

        $hasChanged = ($oldStatus !== $this->status) || ($oldActive !== $this->subscription_active);

        if ($hasChanged) {
            $this->updatedAt = $now;
        }

        return $hasChanged;
    }

    /**
     * ✅ Indique si l'abonnement nécessite un rafraîchissement de statut.
     * Utilisé pour éviter des UPDATE inutiles en base.
     */
    public function needsStatusRefresh(): bool
    {
        // Les statuts manuels ne nécessitent jamais de rafraîchissement
        if (in_array($this->status, self::MANUAL_STATUSES, true)) {
            return false;
        }

        $now = new \DateTimeImmutable();

        // Cas 1 : endsAt est passé mais status n'est pas 'expired'
        if ($this->endsAt !== null && $this->endsAt < $now && $this->status !== self::STATUS_EXPIRED) {
            return true;
        }

        // Cas 2 : on est dans la fenêtre de validité mais status est 'pending'
        if (
            $this->startsAt !== null
            && $this->startsAt <= $now
            && $this->endsAt !== null
            && $this->endsAt > $now
            && $this->status === self::STATUS_PENDING
        ) {
            return true;
        }

        // Cas 3 : startsAt est dans le futur mais status n'est pas 'pending'
        if (
            $this->startsAt !== null
            && $this->startsAt > $now
            && $this->status !== self::STATUS_PENDING
        ) {
            return true;
        }

        return false;
    }

    // ==================== LIFECYCLE CALLBACKS ====================

    /**
     * ✅ Initialisation automatique à la création.
     */
    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        if ($this->createdAt === null) {
            $this->createdAt = new \DateTimeImmutable();
        }

        // Initialiser le statut si non défini
        if ($this->status === null) {
            $this->status = self::STATUS_PENDING;
        }

        // Synchroniser le statut selon les dates
        $this->refreshStatus();

        if ($this->updatedAt === null) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    /**
     * ✅ Synchronisation automatique du statut à chaque mise à jour.
     * Ne s'applique pas aux statuts manuels (cancelled, suspended).
     */
    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->refreshStatus();
    }
}