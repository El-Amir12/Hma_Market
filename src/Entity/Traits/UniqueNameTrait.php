<?php
// src/Entity/Traits/UniqueNameTrait.php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait UniqueNameTrait
{
    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom est obligatoire")]
    #[Assert\Length(min: 2, max: 100, minMessage: "Le nom doit contenir au moins {{ limit }} caractères", maxMessage: "Le nom ne doit pas dépasser {{ limit }} caractères")]
    private ?string $name = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }
}