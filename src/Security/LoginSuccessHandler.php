<?php
// src/Security/LoginSuccessHandler.php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private EntityManagerInterface $entityManager
    ) {}

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): Response
    {
        $user = $token->getUser();

        // SÉCURITÉ : le firewall main n'accepte QUE des User
        if (!$user instanceof User) {
            return new RedirectResponse($this->urlGenerator->generate('app_login'));
        }

        // Ne pas traiter les routes de reset password
        $route = $request->attributes->get('_route');
        if (in_array($route, ['app_forgot_password_request', 'app_reset_password', 'app_check_email'])) {
            return new RedirectResponse($this->urlGenerator->generate('app_dashboard'));
        }

        // 1. Reset des tentatives échouées + traçage
        $user->resetFailedLoginAttempts();
        $user->setLoginAt(new \DateTime());
        $this->entityManager->flush();

        // 2. Rafraîchir depuis la BDD
        $this->entityManager->refresh($user);

        // 3. ✅ PREMIÈRE CONNEXION → CHANGEMENT DE MOT DE PASSE OBLIGATOIRE
        // Cela s'applique à TOUS les utilisateurs (owners ET employés)
        // qui n'ont pas encore changé leur mot de passe.
        if (!$user->isPasswordChanged()) {
            return new RedirectResponse(
                $this->urlGenerator->generate('app_first_login_change_password')
            );
        }

        // 4. Redirection normale vers le dashboard
        // Note : La vérification `isAccountActivated` est faite UNIQUEMENT
        // dans le UserChecker (et seulement pour les owners)
        return new RedirectResponse($this->urlGenerator->generate('app_dashboard'));
    }
}