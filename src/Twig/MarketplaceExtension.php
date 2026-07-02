<?php
// src/Twig/MarketplaceExtension.php

namespace App\Twig;

use App\Entity\Category;
use App\Entity\Customer;
use App\Repository\CategoryRepository;
use App\Repository\CustomerRepository;
use App\Service\MarketplaceDataService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class MarketplaceExtension extends AbstractExtension
{
    public function __construct(
        private CategoryRepository $categoryRepository,
        private CustomerRepository $customerRepository,
        private EntityManagerInterface $entityManager,
        private Security $security,
        private MarketplaceDataService $marketplaceDataService
    ) {}

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_public_categories', [$this, 'getPublicCategories']),
            new TwigFunction('get_customer_cart_count', [$this, 'getCustomerCartCount']),
            new TwigFunction('get_customer', [$this, 'getCustomer']),
            // ✅ AJOUT des fonctions pour les compteurs
            new TwigFunction('get_favorites_count', [$this, 'getFavoritesCount']),
            new TwigFunction('get_cart_items_count', [$this, 'getCartItemsCount']),
        ];
    }

    /**
     * Récupère les catégories publiques pour la marketplace
     */
    public function getPublicCategories(): array
    {
        return $this->categoryRepository->createQueryBuilder('c')
            ->where('c.is_public = true')
            ->andWhere('c.is_active = true')
            ->andWhere('c.subscription_active = true')
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère le nombre d'articles dans le panier d'un client
     */
    public function getCustomerCartCount(?Customer $customer = null): int
    {
        if (!$customer) {
            return 0;
        }

        $cart = $customer->getCart();
        if (!$cart) {
            return 0;
        }

        return $cart->getItemsCount();
    }

    /**
     * Récupère le client connecté (si c'est un Customer)
     */
    public function getCustomer(): ?Customer
    {
        $user = $this->security->getUser();
        if ($user instanceof Customer) {
            return $user;
        }
        return null;
    }

    /**
     * ✅ Récupère le nombre de favoris du customer connecté
     */
    public function getFavoritesCount(): int
    {
        return $this->marketplaceDataService->getFavoritesCount();
    }

    /**
     * ✅ Récupère le nombre d'articles dans le panier du customer connecté
     */
    public function getCartItemsCount(): int
    {
        return $this->marketplaceDataService->getCartItemsCount();
    }
}