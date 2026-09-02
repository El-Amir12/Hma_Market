<?php

namespace App\Entity;

use App\Repository\SubscriptionRepository;
use App\Repository\PaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriptionRepository::class)]
class Subscription
{
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

    /**
     * Obtenir le libellé du plan (displayName) depuis le SubscriptionPlan associé
     */
    public function getPlanLabel(): string
    {
        if (!$this->subscriptionPlan) {
            return 'Sans plan';
        }
        
        return $this->subscriptionPlan->getDisplayName() ?? $this->subscriptionPlan->getName() ?? 'Plan inconnu';
    }

    /**
     * Obtenir l'icône du plan en fonction du nom
     */
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

    /**
     * Obtenir la classe CSS du badge pour le plan
     */
    public function getPlanBadgeClass(): string
    {
        if (!$this->subscriptionPlan) {
            return 'bg-secondary';
        }
        
        $name = strtolower($this->subscriptionPlan->getName() ?? '');
        
        return match(true) {
            // Plans premium
            str_contains($name, 'premium') || str_contains($name, 'gold') || str_contains($name, 'platinum') => 'bg-warning text-dark',
            // Plans enterprise
            str_contains($name, 'enterprise') => 'bg-danger',
            // Plans pro
            str_contains($name, 'pro') => 'bg-primary',
            // Plans standard / silver
            str_contains($name, 'standard') || str_contains($name, 'silver') => 'bg-info text-dark',
            // Plans basic / bronze / starter
            str_contains($name, 'basic') || str_contains($name, 'bronze') || str_contains($name, 'starter') => 'bg-secondary',
            // Plans freemium
            str_contains($name, 'freemium') => 'bg-success',
            // Plans trial
            str_contains($name, 'trial') => 'bg-primary',
            default => 'bg-secondary'
        };
    }

    /**
     * Obtenir le prix formaté du plan
     */
    public function getFormattedPrice(): string
    {
        if (!$this->subscriptionPlan) {
            return '0 FCFA';
        }
        
        // Utiliser le prix selon la période de facturation
        if ($this->billingPeriod === 'yearly') {
            $price = $this->subscriptionPlan->getPriceYearly();
            $period = '/an';
        } else {
            $price = $this->subscriptionPlan->getPriceMonthly();
            $period = '/mois';
        }
        
        return number_format($price, 0, ',', ' ') . ' FCFA' . $period;
    }

    /**
     * Obtenir le prix du plan (pour les calculs)
     */
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

    /**
     * Obtenir le nom technique du plan
     */
    public function getPlanName(): ?string
    {
        if (!$this->subscriptionPlan) {
            return null;
        }
        
        return $this->subscriptionPlan->getName();
    }

    /**
     * Obtenir le nom d'affichage du plan
     */
    public function getPlanDisplayName(): ?string
    {
        if (!$this->subscriptionPlan) {
            return null;
        }
        
        return $this->subscriptionPlan->getDisplayName();
    }

    /**
     * Vérifier si le plan est illimité
     */
    public function isPlanUnlimited(): bool
    {
        if (!$this->subscriptionPlan) {
            return false;
        }
        
        return $this->subscriptionPlan->isUnlimited();
    }

    /**
     * Obtenir la période de facturation en libellé
     */
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

    /**
     * Obtenir la classe CSS pour le statut de l'abonnement
     */
    public function getStatusBadgeClass(): string
    {
        return match($this->status) {
            'active' => 'bg-success',
            'pending' => 'bg-warning text-dark',
            'expired' => 'bg-danger',
            'cancelled' => 'bg-secondary',
            'suspended' => 'bg-dark',
            default => 'bg-secondary'
        };
    }

    /**
     * Obtenir le libellé du statut
     */
    public function getStatusLabel(): string
    {
        return match($this->status) {
            'active' => 'Actif',
            'pending' => 'En attente',
            'expired' => 'Expiré',
            'cancelled' => 'Annulé',
            'suspended' => 'Suspendu',
            default => ucfirst($this->status ?? 'Inconnu')
        };
    }

    /**
     * Vérifier si l'abonnement est actif
     */
    public function isActive(): bool
    {
        return $this->status === 'active' && $this->subscription_active === true;
    }

    /**
     * Vérifier si l'abonnement est expiré
     */
    public function isExpired(): bool
    {
        return $this->status === 'expired' || ($this->endsAt && $this->endsAt < new \DateTimeImmutable());
    }

    /**
     * Obtenir la durée de l'abonnement
     */
    public function getDurationInDays(): ?int
    {
        if (!$this->startsAt || !$this->endsAt) {
            return null;
        }
        
        return $this->startsAt->diff($this->endsAt)->days;
    }

    /**
     * Obtenir le nombre de jours restants
     */
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

    /**
     * Vérifier si l'abonnement est sur le point d'expirer (dans 30 jours ou moins)
     */
    public function isExpiringSoon(): bool
    {
        $daysRemaining = $this->getDaysRemaining();
        return $daysRemaining !== null && $daysRemaining > 0 && $daysRemaining <= 30;
    }

    /**
     * Obtenir le pourcentage de progression de l'abonnement
     */
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

}
