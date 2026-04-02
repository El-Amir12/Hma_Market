<?php

namespace App\Service;

use App\Entity\HmaService;
use App\Entity\User;
use App\Entity\Subscription;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class EmailService
{
    private MailerInterface $mailer;
    private LoggerInterface $logger;
    private string $fromEmail;
    private string $fromName;
    private string $appName;
    private string $appUrl;
    private bool $isProduction;
    private string $adminEmail;
    private string $supportEmail;
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(
        MailerInterface $mailer,
        LoggerInterface $logger,
        UrlGeneratorInterface $urlGenerator,
        string $fromEmail,
        string $fromName,
        string $appName,
        string $appUrl,
        string $appEnv,
        string $adminEmail,
        string $supportEmail
    ) {
        $this->mailer = $mailer;
        $this->logger = $logger;
        $this->urlGenerator = $urlGenerator;
        $this->fromEmail = $fromEmail;
        $this->fromName = $fromName;
        $this->appName = $appName;
        $this->appUrl = $appUrl;
        $this->isProduction = $appEnv === 'prod';
        $this->adminEmail = $adminEmail;
        $this->supportEmail = $supportEmail;
    }

    public function sendWelcomeEmail(HmaService $hmaService, string $plainPassword): bool
    {
        $subject = "Bienvenue sur {$this->appName} !";
        
        if (!$this->isProduction) {
            $subject = "[DEV] " . $subject;
        }
        
        try {
            $email = (new TemplatedEmail())
                ->from(new Address($this->fromEmail, $this->fromName))
                ->to(new Address($hmaService->getEmail(), $hmaService->getCompanyName()))
                ->subject($subject)
                ->htmlTemplate('emails/welcome.html.twig')
                ->context([
                    'company' => $hmaService,
                    'password' => $plainPassword,
                    'app_name' => $this->appName,
                    'login_url' => $this->urlGenerator->generate('app_login', [], UrlGeneratorInterface::ABSOLUTE_URL),
                    'is_production' => $this->isProduction,
                ]);

            $this->mailer->send($email);
            $this->logger->info('Welcome email sent', ['to' => $hmaService->getEmail()]);
            return true;
        } catch (\Exception $e) {
            $this->logger->error('Failed to send welcome email: ' . $e->getMessage());
            
            // En développement, on simule le succès pour ne pas bloquer le flux
            if (!$this->isProduction) {
                $this->logger->warning('Email non envoyé (mode dev) - Vérifiez mailer.log ou utilisez le mailer helper');
                return true;
            }
            return false;
        }
    }

    /**
     * ✅ NOTIFICATION AU SUPER ADMIN - À L'ACTIVATION UNIQUEMENT
     * AVEC LIEN VERS LA PAGE SHOW DE L'ENTREPRISE
     */
    public function sendSuperAdminActivationNotification(HmaService $hmaService, string $subscriptionNumber): bool
    {
        $subject = "✅ Nouvelle entreprise activée : {$hmaService->getCompanyName()}";
        
        if (!$this->isProduction) {
            $subject = "[DEV] " . $subject;
        }
        
        try {
            // ✅ Vérifier que l'email admin est configuré
            if (empty($this->adminEmail)) {
                $this->logger->error('Admin email is not configured');
                
                // En développement, utiliser un fallback
                if (!$this->isProduction) {
                    $this->adminEmail = 'admin@example.com';
                    $this->logger->warning('Using fallback admin email: admin@example.com');
                } else {
                    return false;
                }
            }

            // ✅ GÉNÉRER LE LIEN VERS LA PAGE SHOW DE L'ENTREPRISE
            $companyShowUrl = $this->urlGenerator->generate(
                'app_super_admin_hma_service_show', 
                ['id' => $hmaService->getId()], 
                UrlGeneratorInterface::ABSOLUTE_URL
            );

            // ✅ GARDER LE LIEN VERS LA LISTE POUR RÉFÉRENCE
            $companyListUrl = $this->urlGenerator->generate(
                'app_super_admin_hma_service_index', 
                [], 
                UrlGeneratorInterface::ABSOLUTE_URL
            );

            $email = (new TemplatedEmail())
                ->from(new Address($this->fromEmail, $this->fromName))
                ->to($this->adminEmail)
                ->subject($subject)
                ->htmlTemplate('emails/super_admin_activation.html.twig')
                ->context([
                    'company' => $hmaService,
                    'subscription_number' => $subscriptionNumber,
                    'app_name' => $this->appName,
                    'activation_date' => new \DateTime(),
                    'is_production' => $this->isProduction,
                    // ✅ ANCIEN LIEN (gardé pour référence)
                    'admin_url' => $companyListUrl,
                    // ✅ NOUVEAU LIEN VERS LA PAGE SHOW
                    'company_show_url' => $companyShowUrl,
                ]);

            $this->mailer->send($email);
            $this->logger->info('Super admin activation notification sent', [
                'company' => $hmaService->getCompanyName(),
                'admin_email' => $this->adminEmail,
                'company_show_url' => $companyShowUrl
            ]);
            return true;
            
        } catch (\Exception $e) {
            $this->logger->error('Failed to send super admin notification: ' . $e->getMessage(), [
                'company' => $hmaService->getCompanyName(),
                'error' => $e->getMessage()
            ]);
            
            // En développement, on simule le succès
            if (!$this->isProduction) {
                $this->logger->warning('Super admin notification non envoyée (mode dev)');
                return true;
            }
            return false;
        }
    }

    public function sendOwnerCredentials(HmaService $hmaService, User $ownerUser, string $plainPassword, string $subscriptionNumber): bool
    {
        $subject = "Votre compte propriétaire {$this->appName} est prêt !";
        
        if (!$this->isProduction) {
            $subject = "[DEV] " . $subject;
        }
        
        try {
            $email = (new TemplatedEmail())
                ->from(new Address($this->fromEmail, $this->fromName))
                ->to(new Address($hmaService->getEmail(), $hmaService->getCompanyName()))
                ->subject($subject)
                ->htmlTemplate('emails/owner_credentials.html.twig')
                ->context([
                    'company' => $hmaService,
                    'owner' => $ownerUser,
                    'password' => $plainPassword,
                    'subscription_number' => $subscriptionNumber,
                    'app_name' => $this->appName,
                    'login_url' => $this->urlGenerator->generate('app_login', [], UrlGeneratorInterface::ABSOLUTE_URL),
                    'is_production' => $this->isProduction,
                ]);

            $this->mailer->send($email);
            $this->logger->info('Owner credentials email sent');
            return true;
        } catch (\Exception $e) {
            $this->logger->error('Failed to send owner credentials email: ' . $e->getMessage());
            
            if (!$this->isProduction) {
                $this->logger->warning('Owner credentials email non envoyé (mode dev)');
                return true;
            }
            return false;
        }
    }

    public function sendActivationConfirmation(HmaService $hmaService, string $subscriptionNumber): bool
    {
        $subject = "Confirmation d'activation - {$this->appName}";
        
        if (!$this->isProduction) {
            $subject = "[DEV] " . $subject;
        }
        
        try {
            $email = (new TemplatedEmail())
                ->from(new Address($this->fromEmail, $this->fromName))
                ->to(new Address($hmaService->getEmail(), $hmaService->getCompanyName()))
                ->subject($subject)
                ->htmlTemplate('emails/activation_confirmation.html.twig')
                ->context([
                    'company' => $hmaService,
                    'subscription_number' => $subscriptionNumber,
                    'app_name' => $this->appName,
                    'dashboard_url' => $this->urlGenerator->generate('app_dashboard', [], UrlGeneratorInterface::ABSOLUTE_URL),
                    'is_production' => $this->isProduction,
                ]);

            $this->mailer->send($email);
            $this->logger->info('Activation confirmation email sent');
            return true;
        } catch (\Exception $e) {
            $this->logger->error('Failed to send activation confirmation email: ' . $e->getMessage());
            
            if (!$this->isProduction) {
                $this->logger->warning('Activation confirmation email non envoyé (mode dev)');
                return true;
            }
            return false;
        }
    }
    
    public function sendPasswordResetEmail(User $user, string $resetToken): bool
    {
        $subject = "Réinitialisation de votre mot de passe - {$this->appName}";
        
        if (!$this->isProduction) {
            $subject = "[DEV] " . $subject;
        }
        
        try {
            $email = (new TemplatedEmail())
                ->from(new Address($this->fromEmail, $this->fromName))
                ->to($user->getEmail())
                ->subject($subject)
                ->htmlTemplate('emails/reset_password.html.twig')
                ->context([
                    'user' => $user,
                    'reset_token' => $resetToken,
                    'reset_url' => $this->urlGenerator->generate('app_reset_password', 
                        ['token' => $resetToken], 
                        UrlGeneratorInterface::ABSOLUTE_URL
                    ),
                    'app_name' => $this->appName,
                    'is_production' => $this->isProduction,
                ]);

            $this->mailer->send($email);
            $this->logger->info('Password reset email sent');
            return true;
        } catch (\Exception $e) {
            $this->logger->error('Failed to send password reset email: ' . $e->getMessage());
            
            if (!$this->isProduction) {
                $this->logger->warning('Password reset email non envoyé (mode dev)');
                return true;
            }
            return false;
        }
    }
    
    /**
     * ❌ DÉPRÉCIÉ : À SUPPRIMER
     * Cette méthode ne doit plus être utilisée
     */
    public function sendAdminNotification(HmaService $hmaService): bool
    {
        $this->logger->warning('DEPRECATED: sendAdminNotification called');
        return true; // Ne fait rien
    }

    private function getGlobalLogoUrl(): string
    {
        $baseUrl = rtrim($this->appUrl, '/');
        return $baseUrl . '/uploads/logos/logo.png';
    }

    public function sendSubscriptionConfirmationToUsers(HmaService $service, Subscription $subscription): int
    {
        $users = $service->getUsers()->filter(function(User $user) {
            return $user->isSubscriptionActive() === true;
        });

        $count = 0;
        if ($users->isEmpty()) {
            $this->logger->info('Aucun utilisateur actif à notifier', ['company' => $service->getId()]);
            return $count;
        }

        $subject = "Confirmation de votre abonnement - {$this->appName}";
        if (!$this->isProduction) {
            $subject = "[DEV] " . $subject;
        }

        foreach ($users as $user) {
            try {
                $email = (new TemplatedEmail())
                    ->from(new Address($this->fromEmail, $this->fromName))
                    ->to($user->getEmail())
                    ->subject($subject)
                    ->htmlTemplate('emails/subscription_confirmation_user.html.twig')
                    ->context([
                        'user' => $user,
                        'company' => $service,
                        'subscription' => $subscription,
                        'app_name' => $this->appName,
                        'dashboard_url' => $this->urlGenerator->generate('app_dashboard', [], UrlGeneratorInterface::ABSOLUTE_URL),
                        'support_email' => $this->supportEmail,
                        'global_logo_url' => $this->getGlobalLogoUrl(),
                        'is_production' => $this->isProduction,
                    ]);
                $this->mailer->send($email);
                $count++;
            } catch (\Exception $e) {
                $this->logger->error('Erreur envoi email à ' . $user->getEmail() . ': ' . $e->getMessage());
            }
        }

        $this->logger->info('Emails de confirmation envoyés', [
            'company' => $service->getId(),
            'sent' => $count,
            'total_actifs' => $users->count()
        ]);
        return $count;
    }

    public function sendReactivationEmail(User $user, HmaService $service): bool
    {
        $subject = "Votre accès a été rétabli - {$this->appName}";
        if (!$this->isProduction) {
            $subject = "[DEV] " . $subject;
        }

        try {
            $email = (new TemplatedEmail())
                ->from(new Address($this->fromEmail, $this->fromName))
                ->to($user->getEmail())
                ->subject($subject)
                ->htmlTemplate('emails/subscription_reactivated.html.twig')
                ->context([
                    'user' => $user,
                    'app_name' => $this->appName,
                    'login_url' => $this->urlGenerator->generate('app_login', [], UrlGeneratorInterface::ABSOLUTE_URL),
                    'support_email' => $this->supportEmail,
                    'global_logo_url' => $this->getGlobalLogoUrl(),
                    'is_production' => $this->isProduction,
                ]);
            $this->mailer->send($email);
            $this->logger->info('Email de réactivation envoyé', ['user' => $user->getEmail()]);
            return true;
        } catch (\Exception $e) {
            $this->logger->error('Erreur envoi email réactivation: ' . $e->getMessage());
            return !$this->isProduction;
        }
    }

    public function sendExpirationReminder(User $user, HmaService $company): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address('no-reply@hmamarket.com', 'HMA Market'))
            ->to($user->getEmail())
            ->subject('Votre abonnement expire bientôt')
            ->htmlTemplate('emails/subscription_expiration_reminder.html.twig')
            ->context([
                'user' => $user,
                'company' => $company,
                'expiration_date' => $company->getSubscriptionEndsAt(),
                'renewal_url' => $this->urlGenerator->generate('app_subscription_plans', [], UrlGeneratorInterface::ABSOLUTE_URL)
            ]);

        $this->mailer->send($email);
    }

    /**
     * Envoie un email à un utilisateur pour l'informer qu'il a été désactivé (hors quota)
     */
    public function sendQuotaDeactivationEmail(User $user, HmaService $company): bool
    {
        $subject = "Compte désactivé - {$this->appName}";
        if (!$this->isProduction) {
            $subject = "[DEV] " . $subject;
        }

        try {
            $email = (new TemplatedEmail())
                ->from(new Address($this->fromEmail, $this->fromName))
                ->to($user->getEmail())
                ->subject($subject)
                ->htmlTemplate('emails/quota_deactivation.html.twig')
                ->context([
                    'user' => $user,
                    'company' => $company,
                    'app_name' => $this->appName,
                    'login_url' => $this->urlGenerator->generate('app_login', [], UrlGeneratorInterface::ABSOLUTE_URL),
                    'support_email' => $this->supportEmail,
                    'global_logo_url' => $this->getGlobalLogoUrl(),
                    'is_production' => $this->isProduction,
                ]);
            $this->mailer->send($email);
            $this->logger->info('Email de désactivation (quota) envoyé', ['user' => $user->getEmail()]);
            return true;
        } catch (\Exception $e) {
            $this->logger->error('Erreur envoi email désactivation: ' . $e->getMessage());
            return !$this->isProduction; // en dev, on simule le succès
        }
    }
}