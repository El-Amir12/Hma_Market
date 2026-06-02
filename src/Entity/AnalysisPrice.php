<?php
// src/Entity/AnalysisPrice.php

namespace App\Entity;

use App\Repository\AnalysisPriceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnalysisPriceRepository::class)]
#[ORM\Table(name: 'analysis_price')]
class AnalysisPrice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $type = null;

    #[ORM\Column(length: 100)]
    private ?string $label = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: 'integer')]
    private ?int $price = null;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private bool $is_active = true;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $display_order = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
    }

    // ==================== GETTERS ====================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function isActive(): bool
    {
        return $this->is_active;
    }

    public function getDisplayOrder(): ?int
    {
        return $this->display_order;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    // ==================== SETTERS ====================

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;
        return $this;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function setIsActive(bool $is_active): static
    {
        $this->is_active = $is_active;
        return $this;
    }

    public function setDisplayOrder(?int $display_order): static
    {
        $this->display_order = $display_order;
        return $this;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    public function getPriceFormatted(): string
    {
        return number_format($this->price, 0, ',', ' ') . ' FCFA';
    }

    public function getPriceWithCurrency(): string
    {
        return $this->getPriceFormatted();
    }
}