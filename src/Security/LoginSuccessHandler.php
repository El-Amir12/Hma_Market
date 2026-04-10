<?php
// src/Security/LoginSuccessHandler.php

namespace App\Security;

use App\Entity\HmaService;
use App\Entity\User;
use App\Service\EmailService;
use App\Service\SubscriptionNumberGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    private UrlGeneratorInterface $urlGenerator;
    private RequestStack $requestStack;
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passwordHasher;
    private SubscriptionNumberGenerator $subscriptionGenerator;
    private EmailService $emailService;

    public function __construct(
        UrlGeneratorInterface $urlGenerator,
        RequestStack $requestStack,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        SubscriptionNumberGenerator $subscriptionGenerator,
        EmailService $emailService
    ) {
        $this->urlGenerator = $urlGenerator;
        $this->requestStack = $requestStack;
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
        $this->subscriptionGenerator = $subscriptionGenerator;
        $this->emailService = $emailService;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): Response
    {
        $user = $token->getUser();

        // ✅ IMPORTANT: Ne pas traiter les requêtes de réinitialisation
        $route = $request->attributes->get('_route');
        if (in_array($route, ['app_forgot_password_request', 'app_reset_password', 'app_check_email'])) {
            return new RedirectResponse($this->urlGenerator->generate('app_dashboard'));
        }

        // Réinitialiser les tentatives échouées
        if ($user instanceof User) {
            $user->resetFailedLoginAttempts();
            $user->setLoginAt(new \DateTime());
            $this->entityManager->flush();
        }

        // Si c'est un HmaService qui se connecte pour la première fois
        if ($user instanceof HmaService && !$user->isActive()) {
            return $this->handleFirstHmaServiceLogin($user, $request);
        }

        // Pour les utilisateurs normaux
        if ($user instanceof User) {
            // Rafraîchir l'utilisateur depuis la base de données
            $this->entityManager->refresh($user);
            
            // Première connexion - doit changer son mot de passe
            if (!$user->isPasswordChanged()) {
                return new RedirectResponse($this->urlGenerator->generate('app_first_login_change_password'));
            }
        }

        return new RedirectResponse($this->urlGenerator->generate('app_dashboard'));
    }

    private function handleFirstHmaServiceLogin(HmaService $hmaService, Request $request): Response
    {
        // 1. Activer le compte HmaService
        $hmaService->setIsActive(true);
        $hmaService->setActivatedAt(new \DateTime());
        
        // ✅ 2. Numéro d'abonnement - UNIQUE et PERSISTANT
        if (!$hmaService->getSubscriptionNumber()) {
            $subscriptionNumber = $this->subscriptionGenerator->generate();
            $hmaService->setSubscriptionNumber($subscriptionNumber);
        } else {
            $subscriptionNumber = $hmaService->getSubscriptionNumber();
        }
        
        // 3. Vérifier si un utilisateur propriétaire existe déjà
        $existingOwner = $this->entityManager->getRepository(User::class)
            ->findOneBy([
                'email' => $hmaService->getEmail(),
                'is_hma_owner' => true
            ]);

        if (!$existingOwner) {
            // 4. Créer l'utilisateur propriétaire
            $ownerUser = new User();
            $ownerUser->setEmail($hmaService->getEmail());
            $ownerUser->setFullName($hmaService->getCompanyName());
            $ownerUser->setPhone($hmaService->getPhone() ?? 'Non spécifié');
            
            // Générer un mot de passe aléatoire
            $plainPassword = bin2hex(random_bytes(8));
            $hashedPassword = $this->passwordHasher->hashPassword($ownerUser, $plainPassword);
            $ownerUser->setPassword($hashedPassword);
            
            $ownerUser->setRoles(['ROLE_ADMIN']);
            $ownerUser->setIsActive(true);
            $ownerUser->setIsHmaOwner(true);
            $ownerUser->setIsSuperAdmin(false);
            $ownerUser->setHmaServiceId($hmaService); // Relation ManyToOne
            $ownerUser->setPasswordChanged(false);
            $ownerUser->setCreatedAt(new \DateTime());
            $ownerUser->setEmploymentDate(new \DateTime());

            $this->entityManager->persist($ownerUser);
            
            // Synchroniser le mot de passe
            $hmaService->setPassword($hashedPassword);
            
            // ✅ NE PAS PERSISTER hmaService ici (déjà géré)
            
            // 5. Email avec les nouvelles informations
            $this->emailService->sendOwnerCredentials($hmaService, $ownerUser, $plainPassword, $subscriptionNumber);
        }

        // ✅ Notification au SUPER ADMIN
        try {
            $this->emailService->sendSuperAdminActivationNotification($hmaService, $subscriptionNumber);
        } catch (\Exception $e) {
            // Log l'erreur
        }
        
        // ✅ Un seul flush à la fin
        $this->entityManager->flush();

        // 6. Stocker le numéro d'abonnement dans la session
        $session = $this->requestStack->getSession();
        $session->set('new_subscription_number', $subscriptionNumber);
        $session->set('activation_success', 'Votre compte a été activé avec succès ! Votre numéro d\'abonnement est : ' . $subscriptionNumber);

        return new RedirectResponse($this->urlGenerator->generate('app_first_login_info'));
    }
}