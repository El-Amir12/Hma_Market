<?php
// src/Controller/AccountActivationController.php

namespace App\Controller;

use App\Entity\HmaService;
use App\Entity\User;
use App\Service\EmailService;
use App\Service\SubscriptionNumberGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountActivationController extends AbstractController
{
    #[Route('/activate/{token}', name: 'app_activate_account')]
    public function activate(
        string $token,
        EntityManagerInterface $em,
        SubscriptionNumberGenerator $subscriptionGenerator,
        EmailService $emailService,
        LoggerInterface $logger
    ): Response {
        // ============================================
        // ✅ LOGGING IMMÉDIAT - AVANT TOUTE CHOSE
        // ============================================
        $logger->info('═══════════════════════════════════════');
        $logger->info('🚀 ACTIVATION CALLED');
        $logger->info('Token reçu de l\'URL', [
            'token' => $token,
            'length' => strlen($token),
            'url_complete' => $_SERVER['REQUEST_URI'] ?? 'N/A'
        ]);

        // ============================================
        // 1. CHERCHER L'UTILISATEUR PAR TOKEN
        // ============================================
        $user = $em->getRepository(User::class)
            ->findOneBy(['activationToken' => $token]);

        if (!$user) {
            $logger->error('❌ USER NON TROUVÉ POUR CE TOKEN');
            
            // Lister tous les tokens en base pour comparaison
            $allUsers = $em->getRepository(User::class)->findAll();
            $logger->info('📋 Tokens existants en base:', []);
            foreach ($allUsers as $u) {
                $logger->info('  → User', [
                    'id' => $u->getId(),
                    'email' => $u->getEmail(),
                    'token' => $u->getActivationToken() ?? 'NULL',
                    'token_len' => $u->getActivationToken() ? strlen($u->getActivationToken()) : 0,
                    'is_activated' => $u->isAccountActivated() ? 'YES' : 'NO',
                ]);
            }
            
            $this->addFlash('error', 'Lien d\'activation invalide ou déjà utilisé. Si vous avez déjà activé votre compte, connectez-vous directement.');
            return $this->redirectToRoute('app_login');
        }

        $logger->info('✅ USER TROUVÉ', [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'is_activated' => $user->isAccountActivated() ? 'YES' : 'NO',
        ]);

        // ============================================
        // 2. VÉRIFIER L'EXPIRATION (48h max)
        // ============================================
        $sentAt = $user->getActivationTokenSentAt();
        if ($sentAt && $sentAt < new \DateTime('-48 hours')) {
            $logger->warning('⚠️ Token expiré', [
                'sent_at' => $sentAt->format('Y-m-d H:i:s'),
                'now' => (new \DateTime())->format('Y-m-d H:i:s'),
            ]);
            
            $this->addFlash(
                'error',
                'Votre lien d\'activation a expiré. Veuillez en demander un nouveau.'
            );
            return $this->redirectToRoute('app_login');
        }

        // ============================================
        // 3. DÉJÀ ACTIVÉ ?
        // ============================================
        if ($user->isAccountActivated()) {
            $logger->info('ℹ️ User déjà activé - redirection');
            
            $this->addFlash('info', 'Votre compte est déjà activé. Vous pouvez vous connecter.');
            return $this->redirectToRoute('app_login');
        }

        // ============================================
        // 4. ACTIVER LE COMPTE
        // ============================================
        $logger->info('⚡ Activation en cours...');
        
        $user->setIsAccountActivated(true);
        $user->setActivationToken(null);
        $user->setActivationTokenSentAt(null);

        $logger->info('✅ Compte activé (en mémoire)');

        // ============================================
        // 5. ACTIVER L'ENTREPRISE + GÉNÉRER LE NUMÉRO
        // ============================================
        $company = $user->getHmaServiceId();
        $subscriptionNumber = null;

        if ($company instanceof HmaService) {
            $logger->info('🏢 Entreprise trouvée', [
                'company_id' => $company->getId(),
                'company_name' => $company->getCompanyName(),
            ]);

            // Activer l'entreprise
            $company->setIsActive(true);
            $company->setActivatedAt(new \DateTime());

            // Générer le numéro d'abonnement
            if (!$company->getSubscriptionNumber()) {
                $subscriptionNumber = $subscriptionGenerator->generate();
                $company->setSubscriptionNumber($subscriptionNumber);
                
                $logger->info('🔑 Numéro d\'abonnement généré', [
                    'number' => $subscriptionNumber,
                ]);
            } else {
                $subscriptionNumber = $company->getSubscriptionNumber();
                
                $logger->info('🔑 Numéro d\'abonnement existant', [
                    'number' => $subscriptionNumber,
                ]);
            }
        } else {
            $logger->error('❌ AUCUNE ENTREPRISE ASSOCIÉE À L\'UTILISATEUR');
        }

        // ============================================
        // 6. FLUSH EN BASE (POINT CRITIQUE)
        // ============================================
        try {
            $em->flush();
            $logger->info('✅ FLUSH RÉUSSI - Base de données mise à jour');
        } catch (\Exception $e) {
            $logger->error('❌ ERREUR FLUSH: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);
            
            $this->addFlash('error', 'Erreur lors de l\'activation. Contactez le support.');
            return $this->redirectToRoute('app_login');
        }

        // ============================================
        // 7. ENVOYER LES EMAILS D'ACTIVATION
        // ============================================
        if ($company instanceof HmaService && $subscriptionNumber) {
            
            // 7a. Email d'activation à l'entreprise
            try {
                $emailService->sendCompanyActivationEmail($company, $user);
                $logger->info('📧 Email activation envoyé à', [
                    'to' => $user->getEmail(),
                ]);
            } catch (\Exception $e) {
                $logger->error('❌ Erreur envoi email activation: ' . $e->getMessage());
            }

            // 7b. Notification au Super Admin
            try {
                $emailService->sendSuperAdminActivationNotification($company, $subscriptionNumber);
                $logger->info('📧 Email super admin envoyé');
            } catch (\Exception $e) {
                $logger->error('❌ Erreur envoi email super admin: ' . $e->getMessage());
            }
        }

        $logger->info('═══════════════════════════════════════');
        $logger->info('✅ ACTIVATION TERMINÉE AVEC SUCCÈS');
        $logger->info('═══════════════════════════════════════');

        // ============================================
        // 8. MESSAGE FLASH DE SUCCÈS
        // ============================================
        $this->addFlash(
            'success',
            '🎉 Votre compte a été activé avec succès ! '
            . ($subscriptionNumber ? 'Votre numéro d\'abonnement est : ' . $subscriptionNumber : '')
        );

        return $this->redirectToRoute('app_login');
    }

    /**
     * Renvoyer un lien d'activation.
     */
    #[Route('/resend-activation', name: 'app_resend_activation', methods: ['POST'])]
    public function resend(
        Request $request,
        EntityManagerInterface $em,
        EmailService $emailService,
        LoggerInterface $logger
    ): Response {
        $logger->info('🔄 RESEND ACTIVATION CALLED');
        
        $email = $request->request->get('email');

        if (!$email) {
            $logger->warning('Email manquant dans la requête');
            $this->addFlash('error', 'Email manquant.');
            return $this->redirectToRoute('app_login');
        }

        $logger->info('Email à renvoyer', ['email' => $email]);

        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            $logger->info('Utilisateur non trouvé', ['email' => $email]);
            $this->addFlash('info', 'Si un compte existe avec cet email, un lien vous a été envoyé.');
            return $this->redirectToRoute('app_login');
        }

        if ($user->isAccountActivated()) {
            $logger->info('Compte déjà activé', ['email' => $email]);
            $this->addFlash('info', 'Votre compte est déjà activé. Vous pouvez vous connecter.');
            return $this->redirectToRoute('app_login');
        }

        // Nouveau token
        $token = bin2hex(random_bytes(32));
        $user->setActivationToken($token);
        $user->setActivationTokenSentAt(new \DateTime());
        
        $logger->info('Nouveau token généré', [
            'token' => $token,
            'length' => strlen($token),
        ]);
        
        $em->flush();
        $logger->info('✅ Token sauvegardé en base');

        try {
            $company = $user->getHmaServiceId();
            if ($company) {
                $emailService->sendWelcomeEmail($company, $user, $token);
                $logger->info('📧 Email de bienvenue renvoyé à', ['email' => $email]);
            } else {
                $logger->warning('Aucune entreprise associée', ['email' => $email]);
            }
        } catch (\Exception $e) {
            $logger->error('❌ Erreur envoi email: ' . $e->getMessage());
        }

        $this->addFlash('success', 'Un nouveau lien d\'activation vous a été envoyé.');
        return $this->redirectToRoute('app_login');
    }
}





