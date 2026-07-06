<?php
// src/Security/CustomerAuthenticator.php

namespace App\Security;

use App\Entity\Customer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
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

class CustomerAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'marketplace_login';
    
    private int $maxAttempts;
    private int $lockTimeMinutes;
    private int $resetTimeMinutes;

    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private EntityManagerInterface $entityManager,
        private RequestStack $requestStack
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

        $customer = $this->entityManager->getRepository(Customer::class)->findOneBy(['email' => $email]);
        
        if ($customer) {
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
                }
            }
            
            // ✅ 2. Déblocage automatique si période de blocage expirée
            if ($customer->getLockedUntil() && $customer->getLockedUntil() <= new \DateTime()) {
                $customer->setFailedLoginAttempts(0);
                $customer->setLockedUntil(null);
                $customer->setLastFailedAttemptAt(null);
                $this->entityManager->flush();
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
            // ✅ Réinitialiser TOUT après une connexion réussie
            $customer->setFailedLoginAttempts(0);
            $customer->setLockedUntil(null);
            $customer->setLastFailedAttemptAt(null);
            $customer->setLastLoginAt(new \DateTimeImmutable());
            
            // ✅ Si l'utilisateur doit changer son mot de passe
            if ($customer->isMustChangePassword()) {
                $this->entityManager->flush();
                $request->getSession()->set('_force_change_password', '1');
                return new RedirectResponse($this->urlGenerator->generate('marketplace_change_password'));
            }
            
            $this->entityManager->flush();
        }

        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse($this->urlGenerator->generate('marketplace_home'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): Response
    {
        $email = $request->getPayload()->getString('email');
        $session = $request->getSession();
        $errorMessage = null;
        
        // ✅ Si l'erreur est personnalisée, on l'utilise
        if ($exception instanceof CustomUserMessageAuthenticationException) {
            $errorMessage = $exception->getMessage();
        }
        
        if ($email) {
            $customer = $this->entityManager->getRepository(Customer::class)->findOneBy(['email' => $email]);
            
            if ($customer && !$customer->isLocked()) {
                // ✅ Mettre à jour la date de dernière tentative échouée
                $customer->setLastFailedAttemptAt(new \DateTime());
                
                $currentAttempts = ($customer->getFailedLoginAttempts() ?? 0) + 1;
                $customer->setFailedLoginAttempts($currentAttempts);
                
                if ($currentAttempts >= $this->maxAttempts) {
                    // ✅ Bloquer le compte
                    $lockUntil = new \DateTime('+' . $this->lockTimeMinutes . ' minutes');
                    $customer->setLockedUntil($lockUntil);
                    $customer->setLastFailedAttemptAt(null);
                    
                    $errorMessage = sprintf(
                        '🔒 Compte bloqué pour %d minutes en raison de trop nombreuses tentatives.',
                        $this->lockTimeMinutes
                    );
                } else {
                    // ✅ Afficher un avertissement
                    $remainingAttempts = $this->maxAttempts - $currentAttempts;
                    $errorMessage = sprintf(
                        '⚠️ Email ou mot de passe incorrect. Il vous reste %d tentative(s) avant blocage.',
                        $remainingAttempts
                    );
                }
                
                $this->entityManager->flush();
            }
        }

        $session->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        // ✅ Stocker le message d'erreur en session
        if ($errorMessage) {
            $session->set('_login_error', $errorMessage);
        }

        return new RedirectResponse($this->urlGenerator->generate(self::LOGIN_ROUTE));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}