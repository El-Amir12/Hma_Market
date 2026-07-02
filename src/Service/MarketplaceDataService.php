<?php
// src/Service/MarketplaceDataService.php

namespace App\Service;

use App\Entity\Customer;
use App\Repository\CartRepository;
use App\Repository\FavoriteRepository;
use Symfony\Bundle\SecurityBundle\Security;

class MarketplaceDataService
{
    public function __construct(
        private Security $security,
        private FavoriteRepository $favoriteRepository,
        private CartRepository $cartRepository
    ) {}

    public function getFavoritesCount(): int
    {
        $user = $this->security->getUser();
        if (!$user || !$user instanceof Customer) {
            return 0;
        }
        return $this->favoriteRepository->countByCustomer($user);
    }

    public function getCartItemsCount(): int
    {
        $user = $this->security->getUser();
        if (!$user || !$user instanceof Customer) {
            return 0;
        }
        return $this->cartRepository->getCartItemsCount($user);
    }
}