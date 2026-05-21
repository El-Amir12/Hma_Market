<?php
// src/Entity/SupplierCreditNoteToken.php

namespace App\Entity;

use App\Repository\SupplierCreditNoteTokenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SupplierCreditNoteTokenRepository::class)]
#[ORM\Table(name: 'supplier_credit_note_token')]
class SupplierCreditNoteToken
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?SupplierCreditNote $creditNote = null;

    #[ORM\Column(length: 100, unique: true)]
    private ?string $token = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $expires_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $used_at = null;

    #[ORM\Column(length: 45, nullable: true)]
    private ?string $ip_address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $user_agent = null;

    public function getId(): ?int { return $this->id; }

    public function getCreditNote(): ?SupplierCreditNote { return $this->creditNote; }
    public function setCreditNote(?SupplierCreditNote $creditNote): static
    {
        $this->creditNote = $creditNote;
        return $this;
    }

    public function getToken(): ?string { return $this->token; }
    public function setToken(string $token): static
    {
        $this->token = $token;
        return $this;
    }

    public function getExpiresAt(): ?\DateTimeImmutable { return $this->expires_at; }
    public function setExpiresAt(\DateTimeImmutable $expires_at): static
    {
        $this->expires_at = $expires_at;
        return $this;
    }

    public function getUsedAt(): ?\DateTimeImmutable { return $this->used_at; }
    public function setUsedAt(?\DateTimeImmutable $used_at): static
    {
        $this->used_at = $used_at;
        return $this;
    }

    public function getIpAddress(): ?string { return $this->ip_address; }
    public function setIpAddress(?string $ip_address): static
    {
        $this->ip_address = $ip_address;
        return $this;
    }

    public function getUserAgent(): ?string { return $this->user_agent; }
    public function setUserAgent(?string $user_agent): static
    {
        $this->user_agent = $user_agent;
        return $this;
    }

    public function isValid(): bool
    {
        return $this->used_at === null && $this->expires_at > new \DateTimeImmutable();
    }
}