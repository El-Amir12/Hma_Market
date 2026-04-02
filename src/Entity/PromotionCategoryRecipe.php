<?php

namespace App\Entity;

use App\Repository\PromotionCategoryRecipeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionCategoryRecipeRepository::class)]
class PromotionCategoryRecipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'promotionCategoryRecipes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Promotion $promotion = null;

    #[ORM\ManyToOne(inversedBy: 'promotionCategoryRecipes')]
    #[ORM\JoinColumn(name: 'category_recipe_id', referencedColumnName: 'id', nullable: false)]
    private ?CategoryRecipe $categoryRecipe = null;

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

    public function getCategoryRecipe(): ?CategoryRecipe
    {
        return $this->categoryRecipe;
    }

    public function setCategoryRecipe(?CategoryRecipe $categoryRecipe): static
    {
        $this->categoryRecipe = $categoryRecipe;

        return $this;
    }
}