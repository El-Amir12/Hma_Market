<?php
// src/Entity/Location.php

namespace App\Entity;

use App\Repository\LocationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocationRepository::class)]
#[ORM\UniqueConstraint(name: 'unique_location_per_service', columns: ['hma_service_id', 'name'])]
class Location
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $code = null;

    #[ORM\Column]
    private ?bool $is_active = true;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'locations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    /**
     * @var Collection<int, StockBatch>
     */
    #[ORM\OneToMany(targetEntity: StockBatch::class, mappedBy: 'locationEntity')]
    private Collection $stockBatches;

    public function __construct()
    {
        $this->stockBatches = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
        $this->is_active = true;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;
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
            $stockBatch->setLocationEntity($this);
        }
        return $this;
    }

    public function removeStockBatch(StockBatch $stockBatch): static
    {
        if ($this->stockBatches->removeElement($stockBatch)) {
            if ($stockBatch->getLocationEntity() === $this) {
                $stockBatch->setLocationEntity(null);
            }
        }
        return $this;
    }

    public function getDisplayName(): string
    {
        if ($this->code) {
            return $this->code . ' - ' . $this->name;
        }
        return $this->name;
    }
}