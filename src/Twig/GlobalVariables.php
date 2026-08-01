<?php
// src/Twig/GlobalVariables.php

namespace App\Twig;

use App\Entity\Customer;
use App\Repository\FavoriteRepository;
use App\Repository\CartRepository;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Psr\Log\LoggerInterface;

class GlobalVariables
{
    public function __construct(
        private Security $security,
        private TokenStorageInterface $tokenStorage,
        private FavoriteRepository $favoriteRepository,
        private CartRepository $cartRepository,
        private LoggerInterface $logger
    ) {}

    /**
     * Récupère le nombre de favoris pour l'utilisateur connecté
     */
    public function getFavoritesCount(): int
    {
        $customer = $this->getCustomer();
        
        if (!$customer) {
            return 0;
        }

        try {
            return $this->favoriteRepository->countByCustomer($customer);
        } catch (\Exception $e) {
            $this->logger->error('Erreur GlobalVariables::getFavoritesCount', [
                'error' => $e->getMessage()
            ]);
            return 0;
        }
    }

    /**
     * Récupère le nombre d'articles dans le panier pour l'utilisateur connecté
     */
    public function getCartCount(): int
    {
        $customer = $this->getCustomer();
        
        if (!$customer) {
            return 0;
        }

        try {
            return $this->cartRepository->getCartItemsCount($customer);
        } catch (\Exception $e) {
            $this->logger->error('Erreur GlobalVariables::getCartCount', [
                'error' => $e->getMessage()
            ]);
            return 0;
        }
    }

    /**
     * Récupère le Customer depuis Security ou TokenStorage
     */
    private function getCustomer(): ?Customer
    {
        // 1. Via Security
        $user = $this->security->getUser();
        if ($user instanceof Customer) {
            return $user;
        }

        // 2. Via TokenStorage (plus fiable après connexion)
        $token = $this->tokenStorage->getToken();
        if ($token) {
            $tokenUser = $token->getUser();
            if ($tokenUser instanceof Customer) {
                return $tokenUser;
            }
        }

        return null;
    }

    /**
     * Méthode magique pour que Twig puisse appeler directement l'objet
     * Exemple: {{ favorites_count }} au lieu de {{ favorites_count.getFavoritesCount() }}
     */
    public function __toString(): string
    {
        return (string) $this->getFavoritesCount();
    }
}