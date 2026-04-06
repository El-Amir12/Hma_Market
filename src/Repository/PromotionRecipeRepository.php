<?php
// src/Repository/PromotionRecipeRepository.php

namespace App\Repository;

use App\Entity\PromotionRecipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PromotionRecipe>
 */
class PromotionRecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PromotionRecipe::class);
    }
}