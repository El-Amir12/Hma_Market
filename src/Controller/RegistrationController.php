<?php

namespace App\Controller;

use App\Entity\HmaService;
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
            // Gérer l'upload du logo
            $logoFile = $form->get('logoFile')->getData();
            if ($logoFile) {
                $logoFileName = $fileUploader->upload($logoFile);
                $hmaService->setLogo($logoFileName);
            }

            // Générer mot de passe aléatoire
            $plainPassword = bin2hex(random_bytes(8));
            $hashedPassword = $passwordHasher->hashPassword($hmaService, $plainPassword);
            
            // ✅ CONFIGURER HmaService
            $hmaService->setPassword($hashedPassword);
            $hmaService->setIsActive(false);
            $hmaService->setCreatedAt(new \DateTime());
            $hmaService->setTrialEndsAt((new \DateTime())->modify('+14 days'));
            $hmaService->setActivatedAt(null);

            // Sauvegarder
            $entityManager->persist($hmaService);
            $entityManager->flush();

            // ✅ Email à l'entreprise (avec mot de passe temporaire)
            $emailService->sendWelcomeEmail($hmaService, $plainPassword);

            $this->addFlash('success', 'Inscription réussie ! Vérifiez votre email pour vos identifiants de connexion.');

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
        
        // ✅ RÉCUPÉRER login_info (déconnexion après compte à rebours)
        $loginInfo = $session->get('login_info');
        if ($loginInfo) {
            $this->addFlash('info', $loginInfo);
            $session->remove('login_info');
        }
        
        // ✅ RÉCUPÉRER login_error (blocage UserChecker)
        $loginError = $session->get('login_error');
        if ($loginError) {
            $this->addFlash('error', $loginError);
            $session->remove('login_error');
        }
        
        $activationSuccess = $session->get('activation_success');
        if ($activationSuccess) {
            $this->addFlash('success', $activationSuccess);
            $session->remove('activation_success');
        }
        
        $tempCredentials = $session->get('temp_owner_credentials');
        if ($tempCredentials) {
            $this->addFlash('info', sprintf(
                'Un compte utilisateur propriétaire a été créé pour %s. Email: %s',
                $tempCredentials['company'],
                $tempCredentials['email']
            ));
            $session->remove('temp_owner_credentials');
        }

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