<?php

namespace App\Entity;

use App\Repository\DailyUsageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DailyUsageRepository::class)]
class DailyUsage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date = null;

    #[ORM\Column(nullable: true)]
    private ?int $salesCount = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'dailyUsages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getSalesCount(): ?int
    {
        return $this->salesCount;
    }

    public function setSalesCount(?int $salesCount): static
    {
        $this->salesCount = $salesCount;

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

    public function getHmaServiceId(): ?HmaService
    {
        return $this->hma_service_id;
    }

    public function setHmaServiceId(?HmaService $hma_service_id): static
    {
        $this->hma_service_id = $hma_service_id;

        return $this;
    }
}
