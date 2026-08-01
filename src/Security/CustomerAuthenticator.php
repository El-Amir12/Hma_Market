<?php
// src/Security/CustomerAuthenticator.php

namespace App\Security;

use App\Entity\Customer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Psr\Log\LoggerInterface;

class CustomerAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'marketplace_login';
    
    /** @var string[] Routes API à exclure de la target path */
    private const EXCLUDED_API_ROUTES = [
        'marketplace_favorites_count',
        'marketplace_cart_count',
        'marketplace_auth_check',
        'marketplace_cart_items',
        'marketplace_favorite_check',
    ];
    
    private int $maxAttempts;
    private int $lockTimeMinutes;
    private int $resetTimeMinutes;

    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {
        $this->maxAttempts = (int)($_ENV['MAX_LOGIN_ATTEMPTS'] ?? 5);
        $this->lockTimeMinutes = (int)($_ENV['LOGIN_LOCK_TIME'] ?? 15);
        $this->resetTimeMinutes = (int)($_ENV['LOGIN_RESET_TIME'] ?? 30);
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->getPayload()->getString('email');
        $password = $request->getPayload()->getString('password');
        $csrfToken = $request->getPayload()->getString('_csrf_token');

        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        // ✅ Vérifier et nettoyer la target path AVANT authentification
        $this->cleanTargetPath($request);

        $customer = $this->entityManager->getRepository(Customer::class)->findOneBy(['email' => $email]);
        
        if ($customer) {
            $this->handleCustomerChecks($customer);
        }

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($password),
            [
                new CsrfTokenBadge('authenticate', $csrfToken),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        /** @var Customer $customer */
        $customer = $token->getUser();
        
        if ($customer instanceof Customer) {
            // ✅ Réinitialiser les tentatives
            $customer->setFailedLoginAttempts(0);
            $customer->setLockedUntil(null);
            $customer->setLastFailedAttemptAt(null);
            $customer->setLastLoginAt(new \DateTimeImmutable());
            $this->entityManager->flush();
            
            $this->logger->info('✅ Customer authentifié avec succès', [
                'email' => $customer->getEmail(),
                'id' => $customer->getId(),
                'must_change_password' => $customer->isMustChangePassword()
            ]);
            
            // ✅ Si l'utilisateur doit changer son mot de passe
            if ($customer->isMustChangePassword()) {
                $request->getSession()->set('_force_change_password', '1');
                return new RedirectResponse($this->urlGenerator->generate('marketplace_change_password'));
            }
        }

        // ✅ Vérifier la target path AVANT de l'utiliser
        $targetPath = $this->getSafeTargetPath($request->getSession(), $firewallName);
        
        if ($targetPath) {
            $this->logger->info('➡️ Redirection vers target path', ['target' => $targetPath]);
            return new RedirectResponse($targetPath);
        }

        // ✅ Redirection par défaut vers la home
        $homeUrl = $this->urlGenerator->generate('marketplace_home');
        $this->logger->info('🏠 Redirection vers la page d\'accueil', ['url' => $homeUrl]);
        
        return new RedirectResponse($homeUrl);
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): Response
    {
        $email = $request->getPayload()->getString('email');
        $session = $request->getSession();
        $errorMessage = null;
        
        if ($exception instanceof CustomUserMessageAuthenticationException) {
            $errorMessage = $exception->getMessage();
        }
        
        if ($email) {
            $customer = $this->entityManager->getRepository(Customer::class)->findOneBy(['email' => $email]);
            
            if ($customer && !$customer->isLocked()) {
                $errorMessage = $this->handleFailedAttempt($customer, $errorMessage);
                $this->entityManager->flush();
            }
        }

        $session->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        if ($errorMessage) {
            $session->set('_login_error', $errorMessage);
        }

        return new RedirectResponse($this->urlGenerator->generate(self::LOGIN_ROUTE));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }

    // ==================== MÉTHODES PRIVÉES ====================

    /**
     * Nettoie la target path si elle pointe vers une API
     */
    private function cleanTargetPath(Request $request): void
    {
        $session = $request->getSession();
        $firewallName = 'customer';
        $targetPathKey = '_security.' . $firewallName . '.target_path';
        
        if ($session->has($targetPathKey)) {
            $targetPath = $session->get($targetPathKey);
            
            // Vérifier si la target path est une route API
            foreach (self::EXCLUDED_API_ROUTES as $routeName) {
                try {
                    $routeUrl = $this->urlGenerator->generate($routeName);
                    if (strpos($targetPath, $routeUrl) !== false) {
                        $session->remove($targetPathKey);
                        $this->logger->info('🗑️ Target path API supprimée', [
                            'target' => $targetPath,
                            'route' => $routeName
                        ]);
                        break;
                    }
                } catch (\Exception $e) {
                    // La route n'existe pas, on continue
                }
            }
        }
    }

    /**
     * Récupère une target path sécurisée
     */
    private function getSafeTargetPath($session, string $firewallName): ?string
    {
        $targetPath = $this->getTargetPath($session, $firewallName);
        
        if (!$targetPath) {
            return null;
        }
        
        // Vérifier que la target path n'est pas une API
        foreach (self::EXCLUDED_API_ROUTES as $routeName) {
            try {
                $routeUrl = $this->urlGenerator->generate($routeName);
                if (strpos($targetPath, $routeUrl) !== false) {
                    $this->logger->warning('⚠️ Target path API ignorée', ['target' => $targetPath]);
                    return null;
                }
            } catch (\Exception $e) {
                // La route n'existe pas, on continue
            }
        }
        
        return $targetPath;
    }

    /**
     * Vérifie les conditions du compte customer
     */
    private function handleCustomerChecks(Customer $customer): void
    {
        // ✅ 1. Réinitialiser si dernière tentative date de plus de X minutes
        $lastAttempt = $customer->getLastFailedAttemptAt();
        $failedAttempts = $customer->getFailedLoginAttempts() ?? 0;
        
        if ($lastAttempt && $failedAttempts > 0 && !$customer->isLocked()) {
            $now = new \DateTime();
            $interval = $now->diff($lastAttempt);
            $minutesSinceLastAttempt = ($interval->h * 60) + $interval->i;
            
            if ($minutesSinceLastAttempt >= $this->resetTimeMinutes) {
                $customer->setFailedLoginAttempts(0);
                $customer->setLastFailedAttemptAt(null);
                $this->entityManager->flush();
                $this->logger->info('🔄 Tentatives de connexion réinitialisées', [
                    'email' => $customer->getEmail()
                ]);
            }
        }
        
        // ✅ 2. Déblocage automatique si période de blocage expirée
        if ($customer->getLockedUntil() && $customer->getLockedUntil() <= new \DateTime()) {
            $customer->setFailedLoginAttempts(0);
            $customer->setLockedUntil(null);
            $customer->setLastFailedAttemptAt(null);
            $this->entityManager->flush();
            $this->logger->info('🔓 Compte débloqué automatiquement', [
                'email' => $customer->getEmail()
            ]);
        }
        
        // ✅ 3. Vérifier si le compte est bloqué
        if ($customer->isLocked()) {
            $remainingMinutes = $customer->getRemainingLockMinutes();
            throw new CustomUserMessageAuthenticationException(
                sprintf('Compte bloqué. Veuillez réessayer dans %d minute(s).', max(1, $remainingMinutes))
            );
        }

        // ✅ 4. Vérifier si le compte est actif
        if (!$customer->isActive()) {
            throw new CustomUserMessageAuthenticationException(
                'Votre compte n\'est pas encore activé. Veuillez vérifier votre email.'
            );
        }

        if (!$customer->isVerified()) {
            throw new CustomUserMessageAuthenticationException(
                'Votre email n\'a pas été vérifié. Veuillez vérifier votre boîte de réception.'
            );
        }
    }

    /**
     * Gère une tentative de connexion échouée
     */
    private function handleFailedAttempt(Customer $customer, ?string $errorMessage): string
    {
        $customer->setLastFailedAttemptAt(new \DateTime());
        $currentAttempts = ($customer->getFailedLoginAttempts() ?? 0) + 1;
        $customer->setFailedLoginAttempts($currentAttempts);
        
        if ($currentAttempts >= $this->maxAttempts) {
            $lockUntil = new \DateTime('+' . $this->lockTimeMinutes . ' minutes');
            $customer->setLockedUntil($lockUntil);
            $customer->setLastFailedAttemptAt(null);
            
            $this->logger->warning('🔒 Compte bloqué', [
                'email' => $customer->getEmail(),
                'attempts' => $currentAttempts
            ]);
            
            return sprintf(
                '🔒 Compte bloqué pour %d minutes en raison de trop nombreuses tentatives.',
                $this->lockTimeMinutes
            );
        }
        
        $remainingAttempts = $this->maxAttempts - $currentAttempts;
        $this->logger->warning('⚠️ Tentative de connexion échouée', [
            'email' => $customer->getEmail(),
            'attempts' => $currentAttempts,
            'remaining' => $remainingAttempts
        ]);
        
        return $errorMessage ?? sprintf(
            '⚠️ Email ou mot de passe incorrect. Il vous reste %d tentative(s) avant blocage.',
            $remainingAttempts
        );
    }
}