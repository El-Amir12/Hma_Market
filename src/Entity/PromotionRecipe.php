<?php
// src/Entity/PromotionRecipe.php

namespace App\Entity;

use App\Repository\PromotionRecipeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRecipeRepository::class)]
class PromotionRecipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'promotionRecipes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Promotion $promotion = null;

    // CHANGEZ ICI : Utilisez Recipe au lieu de CategoryRecipe
    #[ORM\ManyToOne(inversedBy: 'promotionRecipes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Recipe $recipe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPromotion(): ?Promotion
    {
        return $this->promotion;
    }

    public function setPromotion(?Promotion $promotion): static
    {
        $this->promotion = $promotion;
        return $this;
    }

    public function getRecipe(): ?Recipe
    {
        return $this->recipe;
    }

    public function setRecipe(?Recipe $recipe): static
    {
        $this->recipe = $recipe;
        return $this;
    }
}