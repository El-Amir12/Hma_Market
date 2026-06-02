<?php
// src/Entity/AnalysisPayment.php

namespace App\Entity;

use App\Repository\AnalysisPaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnalysisPaymentRepository::class)]
#[ORM\Table(name: 'analysis_payment')]
class AnalysisPayment
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_SUCCESS = 'success';
    public const STATUS_FAILED = 'failed';
    public const STATUS_REFUNDED = 'refunded';
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?AnalysisRequest $analysis_request = null;
    
    #[ORM\Column(length: 100, unique: true)]
    private ?string $transaction_id = null;
    
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $amount = '0';
    
    #[ORM\Column(length: 20)]
    private ?string $status = self::STATUS_PENDING;
    
    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $payment_data = null;
    
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $paid_at = null;
    
    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;
    
    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
    }
    
    // ==================== GETTERS & SETTERS ====================
    
    public function getId(): ?int { return $this->id; }
    
    public function getAnalysisRequest(): ?AnalysisRequest { return $this->analysis_request; }
    public function setAnalysisRequest(?AnalysisRequest $analysis_request): static
    {
        $this->analysis_request = $analysis_request;
        return $this;
    }
    
    public function getTransactionId(): ?string { return $this->transaction_id; }
    public function setTransactionId(string $transaction_id): static
    {
        $this->transaction_id = $transaction_id;
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
    
    public function getPaymentData(): ?array { return $this->payment_data; }
    public function setPaymentData(?array $payment_data): static
    {
        $this->payment_data = $payment_data;
        return $this;
    }
    
    public function getPaidAt(): ?\DateTimeImmutable { return $this->paid_at; }
    public function setPaidAt(?\DateTimeImmutable $paid_at): static
    {
        $this->paid_at = $paid_at;
        return $this;
    }
    
    public function getCreatedAt(): ?\DateTimeImmutable { return $this->created_at; }
    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }
    
    public function getStatusLabel(): string
    {
        return match($this->status) {
            self::STATUS_PENDING => 'En attente',
            self::STATUS_SUCCESS => 'Payé',
            self::STATUS_FAILED => 'Échec',
            self::STATUS_REFUNDED => 'Remboursé',
            default => $this->status,
        };
    }
}