<?php
// src/Controller/RegistrationController.php

namespace App\Controller;

use App\Entity\HmaService;
use App\Entity\User;
use App\Form\HmaServiceRegistrationType;
use App\Service\EmailService;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        EntityManagerInterface $entityManager,
        EmailService $emailService,
        UserPasswordHasherInterface $passwordHasher,
        FileUploader $fileUploader
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_dashboard');
        }

        $hmaService = new HmaService();
        $form = $this->createForm(HmaServiceRegistrationType::class, $hmaService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // 1. Logo
            $logoFile = $form->get('logoFile')->getData();
            if ($logoFile) {
                $hmaService->setLogo($fileUploader->upload($logoFile));
            }

            // 2. Mot de passe
            $plainPassword = $form->get('plainPassword')->getData();

            if (empty($plainPassword)) {
                $this->addFlash('error', 'Le mot de passe est obligatoire.');
                return $this->render('registration/register.html.twig', [
                    'registrationForm' => $form->createView(),
                ]);
            }

            // 3. Configurer HmaService (INACTIF)
            $hmaService->setIsActive(false);
            $hmaService->setHmaActive(true);
            $hmaService->setCreatedAt(new \DateTime());
            $hmaService->setUpdatedAt(new \DateTime());
            $hmaService->setTrialEndsAt((new \DateTime())->modify('+14 days'));
            $hmaService->setActivatedAt(null);
            $hmaService->setSubscriptionPlan(HmaService::PLAN_TRIAL);
            $hmaService->setSubscriptionStartAt(new \DateTime());

            // 4. Créer le User owner (NON ACTIVÉ)
            $owner = new User();
            $owner->setEmail($hmaService->getEmail());
            $owner->setFullName($hmaService->getCompanyName());
            $owner->setPhone($hmaService->getPhone() ?? 'Non spécifié');
            $owner->setPassword($passwordHasher->hashPassword($owner, $plainPassword));
            $owner->setRoles(['ROLE_ADMIN']);
            $owner->setIsActive(true);
            $owner->setIsHmaOwner(true);
            $owner->setIsSuperAdmin(false);
            $owner->setHmaServiceId($hmaService);
            $owner->setPasswordChanged(true);       // Mot de passe choisi
            $owner->setSubscriptionActive(true);
            $owner->setCreatedAt(new \DateTime());
            $owner->setEmploymentDate(new \DateTime());

            // ✅ 5. NOUVEAU : Token d'activation
            $token = bin2hex(random_bytes(32));
            $owner->setIsAccountActivated(false);   // PAS ENCORE ACTIVÉ
            $owner->setActivationToken($token);
            $owner->setActivationTokenSentAt(new \DateTime());

            // 6. Persister
            $entityManager->persist($hmaService);
            $entityManager->persist($owner);
            $entityManager->flush();

            // ✅ 7. Envoyer l'email de Bienvenue AVEC le lien d'activation
            try {
                $emailService->sendWelcomeEmail($hmaService, $owner, $token);
            } catch (\Exception $e) {
                // Log
            }

            $this->addFlash(
                'info',
                'Inscription réussie ! Un email de bienvenue vous a été envoyé à ' 
                . $owner->getEmail() 
                . '. Cliquez sur le lien qu\'il contient pour activer votre compte.'
            );

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_dashboard');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $session = $request->getSession();

        // ✅ Nettoyer le flag de logout
        $session->remove('_logout_in_progress');

        // ✅ RÉCUPÉRER login_info
        $loginInfo = $session->get('login_info');
        if ($loginInfo) {
            $this->addFlash('info', $loginInfo);
            $session->remove('login_info');
        }

        // ✅ RÉCUPÉRER login_error
        $loginError = $session->get('login_error');
        if ($loginError) {
            $this->addFlash('error', $loginError);
            $session->remove('login_error');
        }

        // ✅ RÉCUPÉRER activation_success
        $activationSuccess = $session->get('activation_success');
        if ($activationSuccess) {
            $this->addFlash('success', $activationSuccess);
            $session->remove('activation_success');
        }

        // ✅ NOUVEAU : RÉCUPÉRER activation_required_message
        $activationRequired = $session->get('activation_required_message');
        if ($activationRequired) {
            $this->addFlash('warning', $activationRequired);
            $session->remove('activation_required_message');
        }

        $session->remove('temp_owner_credentials');

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}