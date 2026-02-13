<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\HmaService;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordChangeFormType;
use App\Form\FirstLoginChangePasswordFormType;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ResetPasswordRequestFormType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager
    ) {
    }

    /**
     * Afficher et traiter le formulaire de demande de réinitialisation de mot de passe.
     */
    #[Route('/forgot-password', name: 'app_forgot_password_request', methods: ['GET', 'POST'])]
    public function request(Request $request, MailerInterface $mailer, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $email */
            $email = $form->get('email')->getData();
            
            error_log("=== Formulaire soumis pour: " . $email);
            
            return $this->processSendingPasswordResetEmail($email, $mailer, $translator);
        }

        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form->createView(),
        ]);
    }

    /**
     * Page de confirmation après qu'un utilisateur ait demandé une réinitialisation de mot de passe.
     */
    #[Route('/check-email', name: 'app_check_email')]
    public function checkEmail(): Response
    {
        if (null === ($resetToken = $this->getTokenObjectFromSession())) {
            $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
        }

        return $this->render('reset_password/check_email.html.twig', [
            'resetToken' => $resetToken,
        ]);
    }

    /**
     * Valide et traite l'URL de réinitialisation que l'utilisateur a cliqué dans son email.
     */
    #[Route('/reset-password/{token}', name: 'app_reset_password')]
    public function reset(Request $request, UserPasswordHasherInterface $passwordHasher, TranslatorInterface $translator, string $token): Response
    {
        error_log("=== TENTATIVE RÉINITIALISATION ===");
        error_log("Token: " . substr($token, 0, 20) . "...");
        
        try {
            /** @var User $user */
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
            error_log("Token VALIDE pour: " . $user->getEmail());
            
        } catch (ResetPasswordExceptionInterface $e) {
            error_log("ERREUR token: " . $e->getMessage());
            
            $this->addFlash('reset_password_error', sprintf(
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));

            return $this->redirectToRoute('app_forgot_password_request');
        }

        $form = $this->createForm(ResetPasswordChangeFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newPassword = $form->get('plainPassword')->getData();
            $confirmPassword = $form->get('plainPassword')->getData(); // Assuming confirm password is same field in this form
            
            if ($newPassword !== $confirmPassword) {
                $this->addFlash('error', 'Les mots de passe ne correspondent pas.');
                return $this->redirectToRoute('app_reset_password', ['token' => $token]);
            }
            
            $this->resetPasswordHelper->removeResetRequest($token);

            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($hashedPassword);
            
            if ($user->isHmaOwner() && $user->getHmaServiceId()) {
                $this->updateHmaServicePassword($user->getHmaServiceId(), $hashedPassword);
            }
            
            $this->entityManager->flush();

            $this->cleanSessionAfterReset();

            $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès !');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('reset_password/reset_password.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }

    /**
     * Controller pour changer le mot de passe (quand l'utilisateur est connecté)
     */
    #[Route('/change-password', name: 'app_change_password')]
    public function changePassword(
        Request $request, 
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $sessionUser = $this->getUser();
        
        if (!$sessionUser instanceof User) {
            return $this->redirectToRoute('app_login');
        }
        
        // ✅ SOLUTION: Recharger l'utilisateur depuis la base de données
        $user = $this->entityManager->getRepository(User::class)->find($sessionUser->getId());
        
        if (!$user) {
            $this->addFlash('error', 'Utilisateur non trouvé.');
            return $this->redirectToRoute('app_login');
        }
        
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $oldPassword = $form->get('oldPassword')->getData();
            $newPassword = $form->get('newPassword')->getData();
            $confirmPassword = $form->get('confirmPassword')->getData();
            
            // 1. Vérifier l'ancien mot de passe
            if (!$passwordHasher->isPasswordValid($user, $oldPassword)) {
                $this->addFlash('error', 'L\'ancien mot de passe est incorrect.');
                return $this->redirectToRoute('app_change_password');
            }
            
            // 2. Valider que les nouveaux mots de passe correspondent
            if ($newPassword !== $confirmPassword) {
                $this->addFlash('error', 'Les nouveaux mots de passe ne correspondent pas.');
                return $this->redirectToRoute('app_change_password');
            }
            
            // 3. Hasher le nouveau mot de passe
            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
            
            // 4. Mettre à jour dans User table
            $user->setPassword($hashedPassword);
            
            // ✅ 5. Si l'utilisateur est propriétaire HMA, mettre à jour aussi dans HmaService
            if ($user->isHmaOwner() && $user->getHmaServiceId()) {
                $hmaService = $user->getHmaServiceId();
                
                // Vérifier que c'est bien un objet HmaService
                if ($hmaService instanceof HmaService) {
                    // Recharger aussi le HmaService depuis la base pour être sûr
                    $freshHmaService = $this->entityManager->getRepository(HmaService::class)
                        ->find($hmaService->getId());
                    
                    if ($freshHmaService) {
                        // Mettre à jour le mot de passe
                        $freshHmaService->setPassword($hashedPassword);
                        
                        error_log(sprintf('Mot de passe HmaService mis à jour pour: %s (ID: %d)', 
                            $freshHmaService->getEmail(),
                            $freshHmaService->getId()
                        ));
                    }
                }
            }
            
            // ✅ PERSISTER l'utilisateur (obligatoire car il était détaché)
            $this->entityManager->persist($user);
            
            // ✅ Un seul flush pour tout
            $this->entityManager->flush();
            
            $this->addFlash('success', 'Votre mot de passe a été changé avec succès.');
            
            // Optionnel: Déconnecter l'utilisateur pour qu'il se reconnecte avec son nouveau mot de passe
            // return $this->redirectToRoute('app_logout');
            
            // Ou le laisser connecté
            return $this->redirectToRoute('app_dashboard');
        }
        
        return $this->render('reset_password/change_password.html.twig', [
            'changePasswordForm' => $form->createView(),
        ]);
    }
        
        /**
     * Route pour forcer le changement de mot de passe à la première connexion
     */
    #[Route('/first-login-change-password', name: 'app_first_login_change_password')]
    public function firstLoginChangePassword(
        Request $request,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        // Récupérer l'utilisateur depuis la session
        $user = $this->getUser();
        
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }
        
        // ✅ SOLUTION: Recharger l'utilisateur depuis la base de données
        // Car $this->getUser() retourne un utilisateur "détaché" du gestionnaire d'entités
        $freshUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        
        if (!$freshUser) {
            $this->addFlash('error', 'Utilisateur non trouvé.');
            return $this->redirectToRoute('app_login');
        }
        
        // Vérifier si c'est vraiment la première connexion
        if (!$freshUser->isPasswordChanged()) {
            $form = $this->createForm(FirstLoginChangePasswordFormType::class);
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                $newPassword = $form->get('newPassword')->getData();
                
                error_log(sprintf('Changement mot de passe première connexion pour: %s (ID: %d)', 
                    $freshUser->getEmail(), 
                    $freshUser->getId()
                ));
                
                // Hasher le nouveau mot de passe
                $hashedPassword = $passwordHasher->hashPassword($freshUser, $newPassword);
                
                // Mettre à jour l'utilisateur
                $freshUser->setPassword($hashedPassword);
                $freshUser->setPasswordChanged(true);
                
                // ✅ CORRECTION: Mettre à jour HmaService si l'utilisateur est propriétaire
                if ($freshUser->isHmaOwner() && $freshUser->getHmaServiceId()) {
                    $hmaService = $freshUser->getHmaServiceId();
                    
                    // Vérifier que c'est bien un objet HmaService
                    if ($hmaService instanceof HmaService) {
                        // Recharger aussi le HmaService depuis la base pour être sûr
                        $freshHmaService = $this->entityManager->getRepository(HmaService::class)
                            ->find($hmaService->getId());
                        
                        if ($freshHmaService) {
                            // Mettre à jour le mot de passe
                            $freshHmaService->setPassword($hashedPassword);
                            
                            error_log(sprintf('Mot de passe HmaService mis à jour pour: %s (ID: %d)', 
                                $freshHmaService->getEmail(),
                                $freshHmaService->getId()
                            ));
                        }
                    }
                }
                
                // ✅ PERSISTER l'utilisateur (obligatoire car il était détaché)
                $this->entityManager->persist($freshUser);
                
                // ✅ Un seul flush pour tout
                $this->entityManager->flush();
                
                error_log('Mise à jour effectuée avec succès');
                
                // Nettoyer la session
                $this->cleanSessionAfterReset();
                
                $this->addFlash('success', 'Votre mot de passe a été changé avec succès. Veuillez vous reconnecter avec votre nouveau mot de passe.');
                
                return $this->redirectToRoute('app_logout');
            }
            
            return $this->render('reset_password/first_login_change.html.twig', [
                'form' => $form->createView(),
            ]);
        }
        
        return $this->redirectToRoute('app_dashboard');
    }

    private function processSendingPasswordResetEmail(string $emailFormData, MailerInterface $mailer, TranslatorInterface $translator): RedirectResponse
    {
        error_log("=== ENVOI EMAIL ===");
        error_log("Email: " . $emailFormData);
        
        $user = $this->entityManager->getRepository(User::class)->findOneBy([
            'email' => $emailFormData,
        ]);

        if (!$user) {
            error_log("Utilisateur NON trouvé");
            return $this->redirectToRoute('app_check_email');
        }

        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
            error_log("Token généré: " . $resetToken->getToken());
            
        } catch (ResetPasswordExceptionInterface $e) {
            error_log("Erreur génération token: " . $e->getMessage());
            
            $this->addFlash('reset_password_error', sprintf(
                'Impossible de générer un token : %s',
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));
            
            return $this->redirectToRoute('app_check_email');
        }

        try {
            $resetUrl = $this->generateUrl('app_reset_password', [
                'token' => $resetToken->getToken()
            ], UrlGeneratorInterface::ABSOLUTE_URL);
            
            error_log("URL générée: " . $resetUrl);
            
            $email = (new TemplatedEmail())
                ->from(new Address('no-reply@hmamarket.com', 'HMA Market'))
                ->to($user->getEmail())
                ->subject('Réinitialisation de votre mot de passe - HMA Market')
                ->htmlTemplate('reset_password/email.html.twig')
                ->context([
                    'resetToken' => $resetToken,
                    'user' => $user,
                    'resetUrl' => $resetUrl,
                    'expiration_date' => new \DateTime('+1 hour'),
                ]);

            $mailer->send($email);
            error_log("Email envoyé avec succès!");
            
            $this->addFlash('success', 'Un email de réinitialisation vous a été envoyé.');
            
        } catch (\Exception $e) {
            error_log("ERREUR envoi email: " . $e->getMessage());
            
            $this->addFlash('error', 'Erreur lors de l\'envoi de l\'email.');
            return $this->redirectToRoute('app_check_email');
        }

        $this->setTokenObjectInSession($resetToken);
        return $this->redirectToRoute('app_check_email');
    }
    
    /**
     * Mettre à jour le mot de passe dans HmaService
     */
    private function updateHmaServicePassword(HmaService $hmaService, string $hashedPassword): void
    {
        $hmaService->setPassword($hashedPassword);
    }
    
    /**
     * Déconnexion
     */
    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('Cette méthode peut être vide - elle sera interceptée par la clé logout de votre pare-feu.');
    }
}