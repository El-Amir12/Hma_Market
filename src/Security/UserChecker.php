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

        // ============================================
        // ✅ VÉRIFICATION DU COMPTE ACTIVÉ
        // UNIQUEMENT POUR LES OWNERS (admin entreprise)
        // --------------------------------------------
        // Les owners doivent activer leur compte via le lien email
        // Les employés (isHmaOwner = false) peuvent se connecter
        // directement avec leur mot de passe temporaire
        // ============================================
        if ($user->isHmaOwner() === true && !$user->isAccountActivated()) {
            $message = 'Votre compte n\'est pas encore activé. '
                     . 'Consultez votre boîte mail et cliquez sur le lien d\'activation que nous vous avons envoyé. '
                     . 'Si vous n\'avez rien reçu, demandez un nouveau lien.';
            
            throw new CustomUserMessageAccountStatusException($message);
        }

        // ============================================
        // ✅ VÉRIFICATION DES RÈGLES MÉTIER (tous les utilisateurs)
        // ============================================
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