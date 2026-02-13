<?php
// src/Security/UserChecker.php

namespace App\Security;

use App\Entity\User;
use App\Entity\HmaService;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        // ✅ UNIQUEMENT pour la tentative de connexion
        if ($user instanceof User) {
            // Les propriétaires peuvent se connecter même inactifs
            if ($user->isHmaOwner()) {
                return;
            }
            
            // ❌ Employé inactif - BLOQUER avec message
            if (!$user->isActive()) {
                throw new CustomUserMessageAccountStatusException(
                    'Votre compte est désactivé. Veuillez contacter votre administrateur.'
                );
            }
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        // Rien à faire
    }
}