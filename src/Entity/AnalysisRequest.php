<?php
// src/Entity/AnalysisRequest.php

namespace App\Entity;

use App\Repository\AnalysisRequestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnalysisRequestRepository::class)]
#[ORM\Table(name: 'analysis_request')]
#[ORM\HasLifecycleCallbacks]
class AnalysisRequest
{
    // Statuts
    public const STATUS_PENDING = 'pending';
    public const STATUS_PAID = 'paid';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_FAILED = 'failed';
    public const STATUS_EXPIRED = 'expired';
    
    // Types d'analyse
    public const TYPE_STANDARD = 'standard';
    public const TYPE_POWERBI = 'powerbi';
    public const TYPE_CUSTOM = 'custom';
    public const TYPE_SUBSCRIPTION = 'subscription';
    
    public const MAX_PERIOD_DAYS = 365;
    public const MAX_PERIOD_YEARS = 1;
    
    public const PRICES = [
        self::TYPE_STANDARD => 50000,
        self::TYPE_POWERBI => 150000,
        self::TYPE_CUSTOM => 300000,
        self::TYPE_SUBSCRIPTION => 100000,
    ];
    
    public const TYPE_LABELS = [
        self::TYPE_STANDARD => 'Analyse Standard',
        self::TYPE_POWERBI => 'Analyse Power BI',
        self::TYPE_CUSTOM => 'Analyse sur mesure',
        self::TYPE_SUBSCRIPTION => 'Abonnement mensuel',
    ];
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\Column(length: 50, unique: true)]
    private ?string $request_number = null;
    
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $company = null;
    
    #[ORM\Column(length: 20)]
    private ?string $type = self::TYPE_STANDARD;
    
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $amount = '0';
    
    #[ORM\Column(length: 20)]
    private ?string $status = self::STATUS_PENDING;
    
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $period_start = null;
    
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $period_end = null;
    
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $export_file_path = null;
    
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $exported_at = null;
    
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $paid_at = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $payment_transaction_id = null;

    #[ORM\Column(nullable: true)]
    private ?string $rawExportPath = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $rawExportedAt = null;

    #[ORM\Column(nullable: true)]
    private ?string $finalReportPath = null;

    #[ORM\Column(nullable: true)]
    private ?string $finalReportFilename = null;

    #[ORM\Column(nullable: true)]
    private ?string $finalReportType = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $finalReportUploadedBy = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $finalReportUploadedAt = null;
    
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;
    
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updated_at = null;
    
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $expires_at = null;
    
    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->expires_at = (new \DateTime())->modify('+3 days');
        $this->status = self::STATUS_PENDING;
    }
    
    // ==================== GETTERS & SETTERS ====================
    
    public function getId(): ?int { return $this->id; }
    
    public function getRequestNumber(): ?string { return $this->request_number; }
    public function setRequestNumber(string $request_number): static
    {
        $this->request_number = $request_number;
        return $this;
    }
    
    public function getCompany(): ?HmaService { return $this->company; }
    public function setCompany(?HmaService $company): static
    {
        $this->company = $company;
        return $this;
    }
    
    public function getType(): ?string { return $this->type; }
    public function setType(string $type): static
    {
        $this->type = $type;
        $this->amount = (string) self::PRICES[$type];
        return $this;
    }
    
    public function getAmount(): ?string { return $this->amount; }
    public function setAmount(string $amount): static
    {
        $this->amount = $amount;
        return $this;
    }
    
    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }
    
    public function getPeriodStart(): ?\DateTimeInterface { return $this->period_start; }
    public function setPeriodStart(\DateTimeInterface $period_start): static
    {
        $this->period_start = $period_start;
        return $this;
    }
    
    public function getPeriodEnd(): ?\DateTimeInterface { return $this->period_end; }
    public function setPeriodEnd(\DateTimeInterface $period_end): static
    {
        $this->period_end = $period_end;
        return $this;
    }
    
    public function getNotes(): ?string { return $this->notes; }
    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;
        return $this;
    }
    
    public function getExportFilePath(): ?string { return $this->export_file_path; }
    public function setExportFilePath(?string $export_file_path): static
    {
        $this->export_file_path = $export_file_path;
        return $this;
    }
    
    public function getExportedAt(): ?\DateTimeInterface { return $this->exported_at; }
    public function setExportedAt(?\DateTimeInterface $exported_at): static
    {
        $this->exported_at = $exported_at;
        return $this;
    }
    
    public function getPaidAt(): ?\DateTimeInterface { return $this->paid_at; }
    public function setPaidAt(?\DateTimeInterface $paid_at): static
    {
        $this->paid_at = $paid_at;
        return $this;
    }
    
    public function getPaymentTransactionId(): ?string { return $this->payment_transaction_id; }
    public function setPaymentTransactionId(?string $payment_transaction_id): static
    {
        $this->payment_transaction_id = $payment_transaction_id;
        return $this;
    }

    public function getRawExportPath(): ?string { return $this->rawExportPath; }
    public function setRawExportPath(?string $rawExportPath): self { $this->rawExportPath = $rawExportPath; return $this; }

    public function getRawExportedAt(): ?\DateTime { return $this->rawExportedAt; }
    public function setRawExportedAt(?\DateTime $rawExportedAt): self { $this->rawExportedAt = $rawExportedAt; return $this; }

    public function getFinalReportPath(): ?string { return $this->finalReportPath; }
    public function setFinalReportPath(?string $finalReportPath): self { $this->finalReportPath = $finalReportPath; return $this; }

    public function getFinalReportFilename(): ?string { return $this->finalReportFilename; }
    public function setFinalReportFilename(?string $finalReportFilename): self { $this->finalReportFilename = $finalReportFilename; return $this; }

    public function getFinalReportType(): ?string { return $this->finalReportType; }
    public function setFinalReportType(?string $finalReportType): self { $this->finalReportType = $finalReportType; return $this; }

    public function getFinalReportUploadedBy(): ?User { return $this->finalReportUploadedBy; }
    public function setFinalReportUploadedBy(?User $finalReportUploadedBy): self { $this->finalReportUploadedBy = $finalReportUploadedBy; return $this; }

    public function getFinalReportUploadedAt(): ?\DateTime { return $this->finalReportUploadedAt; }
    public function setFinalReportUploadedAt(?\DateTime $finalReportUploadedAt): self { $this->finalReportUploadedAt = $finalReportUploadedAt; return $this; }
        
    public function getCreatedAt(): ?\DateTimeInterface { return $this->created_at; }
    public function setCreatedAt(\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }
    
    public function getUpdatedAt(): ?\DateTimeInterface { return $this->updated_at; }
    public function setUpdatedAt(?\DateTimeInterface $updated_at): static
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    
    public function getExpiresAt(): ?\DateTimeInterface { return $this->expires_at; }
    public function setExpiresAt(?\DateTimeInterface $expires_at): static
    {
        $this->expires_at = $expires_at;
        return $this;
    }
    
    // ✅ Mise à jour automatique avant update
    #[ORM\PreUpdate]
    public function updateTimestamps(): void
    {
        $this->updated_at = new \DateTime();
    }
    
    // ==================== MÉTHODES UTILITAIRES ====================
    
    public function getTypeLabel(): string
    {
        return self::TYPE_LABELS[$this->type] ?? $this->type;
    }
    
    public function getStatusLabel(): string
    {
        return match($this->status) {
            self::STATUS_PENDING => 'En attente de paiement',
            self::STATUS_PAID => 'Payé - En traitement',
            self::STATUS_PROCESSING => 'Génération en cours',
            self::STATUS_COMPLETED => 'Terminé',
            self::STATUS_FAILED => 'Échec',
            self::STATUS_EXPIRED => 'Expiré',
            default => $this->status,
        };
    }
    
    public function getStatusBadgeClass(): string
    {
        return match($this->status) {
            self::STATUS_PENDING => 'badge bg-warning text-dark',
            self::STATUS_PAID => 'badge bg-info',
            self::STATUS_PROCESSING => 'badge bg-primary',
            self::STATUS_COMPLETED => 'badge bg-success',
            self::STATUS_FAILED => 'badge bg-danger',
            self::STATUS_EXPIRED => 'badge bg-secondary',
            default => 'badge bg-secondary',
        };
    }
    
    public function isExpired(): bool
    {
        return $this->status === self::STATUS_PENDING && $this->expires_at < new \DateTime();
    }
    
    public function canBeProcessed(): bool
    {
        return $this->status === self::STATUS_PAID || $this->status === self::STATUS_PROCESSING;
    }
    
    public function getAmountFormatted(): string
    {
        return number_format((float)$this->amount, 0, ',', ' ') . ' FCFA';
    }
    
    public function getPeriodFormatted(): string
    {
        return $this->period_start?->format('d/m/Y') . ' au ' . $this->period_end?->format('d/m/Y');
    }
    
    public function isPeriodValid(): bool
    {
        if (!$this->period_start || !$this->period_end) {
            return false;
        }
        
        $diff = $this->period_start->diff($this->period_end);
        return $diff->days <= self::MAX_PERIOD_DAYS;
    }
    
    public function getPeriodDays(): int
    {
        if (!$this->period_start || !$this->period_end) {
            return 0;
        }
        return $this->period_start->diff($this->period_end)->days;
    }
}