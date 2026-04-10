<?php
// src/Security/LoginFormAuthentificatorAuthenticator.php

namespace App\Security;

use App\Entity\User;
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

class LoginFormAuthentificatorAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';
    
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
        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        
        if ($user) {
            // ✅ 1. Réinitialiser si dernière tentative date de plus de X minutes
            $lastAttempt = $user->getLastFailedAttemptAt();
            $failedAttempts = $user->getFailedLoginAttempts() ?? 0;
            
            if ($lastAttempt && $failedAttempts > 0 && !$user->isLocked()) {
                $now = new \DateTime();
                $interval = $now->diff($lastAttempt);
                $minutesSinceLastAttempt = ($interval->h * 60) + $interval->i;
                
                if ($minutesSinceLastAttempt >= $this->resetTimeMinutes) {
                    $user->setFailedLoginAttempts(0);
                    $user->setLastFailedAttemptAt(null);
                    $this->entityManager->flush();
                }
            }
            
            // ✅ 2. Déblocage automatique si période de blocage expirée
            if ($user->getLockedUntil() && $user->getLockedUntil() <= new \DateTime()) {
                $user->setFailedLoginAttempts(0);
                $user->setLockedUntil(null);
                $user->setLastFailedAttemptAt(null);
                $this->entityManager->flush();
            }
            
            // ✅ 3. Vérifier si le compte est bloqué
            if ($user->isLocked()) {
                $remainingMinutes = $user->getRemainingLockTime();
                throw new CustomUserMessageAuthenticationException(
                    sprintf('Compte bloqué. Veuillez réessayer dans %d minute(s).', max(1, $remainingMinutes))
                );
            }
        }

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->getPayload()->getString('password')),
            [
                new CsrfTokenBadge('authenticate', $request->getPayload()->getString('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        $user = $token->getUser();
        if ($user instanceof User) {
            // ✅ Réinitialiser TOUT après une connexion réussie
            $user->setFailedLoginAttempts(0);
            $user->setLockedUntil(null);
            $user->setLastFailedAttemptAt(null);
            $user->setLoginAt(new \DateTime());
            $this->entityManager->flush();
        }

        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse($this->urlGenerator->generate('app_dashboard'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): Response
    {
        $email = $request->getPayload()->getString('email');
        
        if ($email) {
            $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
            
            if ($user && !$user->isLocked()) {
                // ✅ Mettre à jour la date de dernière tentative échouée
                $user->setLastFailedAttemptAt(new \DateTime());
                
                $currentAttempts = ($user->getFailedLoginAttempts() ?? 0) + 1;
                $user->setFailedLoginAttempts($currentAttempts);
                
                if ($currentAttempts >= $this->maxAttempts) {
                    // ✅ Bloquer le compte
                    $lockUntil = new \DateTime('+' . $this->lockTimeMinutes . ' minutes');
                    $user->setLockedUntil($lockUntil);
                    $user->setLastFailedAttemptAt(null);
                    
                    $this->requestStack->getSession()->set('_login_error', sprintf(
                        'Compte bloqué pour %d minutes en raison de trop nombreuses tentatives.',
                        $this->lockTimeMinutes
                    ));
                } else {
                    // ✅ Afficher un avertissement
                    $remainingAttempts = $this->maxAttempts - $currentAttempts;
                    $this->requestStack->getSession()->set('_login_warning', sprintf(
                        'Identifiants incorrects. Il vous reste %d tentative(s) avant blocage.',
                        $remainingAttempts
                    ));
                }
                
                $this->entityManager->flush();
            }
        }

        return parent::onAuthenticationFailure($request, $exception);
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}