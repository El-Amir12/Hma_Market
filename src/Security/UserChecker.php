<?php
// src/Security/UserChecker.php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof User) {
            return;
        }

        // ✅ Vérifier si l'utilisateur peut se connecter en utilisant la méthode canLogin()
        if (!$user->canLogin()) {
            // Déterminer la cause du blocage
            if ($user->getHmaServiceId() && !$user->getHmaServiceId()->isHmaActive()) {
                $message = 'Votre entreprise a été désactivée par l\'administrateur système. Contactez le support.';
            } elseif ($user->isHmaOwner()) {
                $message = 'Votre compte administrateur a été désactivé. Contactez le support.';
            } elseif (!$user->isActive()) {
                $message = 'Votre compte a été désactivé par l\'administrateur de l\'entreprise.';
            } elseif (!$user->isSubscriptionActive()) {
                $message = 'Votre compte est actuellement hors quota (limite d\'abonnement atteinte).';
            } else {
                $message = 'Votre compte n\'est pas autorisé à se connecter.';
            }
            
            throw new CustomUserMessageAccountStatusException($message);
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        // Rien à faire ici
    }
}