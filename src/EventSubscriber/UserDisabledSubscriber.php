<?php
// src/EventSubscriber/UserDisabledSubscriber.php

namespace App\EventSubscriber;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class UserDisabledSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TokenStorageInterface $tokenStorage,
        private RequestStack $requestStack,
        private UrlGeneratorInterface $urlGenerator,
        private EntityManagerInterface $entityManager
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 1],
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        $route = $request->attributes->get('_route');
        
        // Routes à exclure
        if (in_array($route, ['app_login', 'app_logout', 'app_clear_toast', 'app_forgot_password_request', 'app_reset_password', 'app_check_email', 'app_first_login_change_password'])) {
            return;
        }

        $token = $this->tokenStorage->getToken();
        if (!$token) {
            return;
        }

        $user = $token->getUser();
        if (!$user instanceof User) {
            return;
        }

        // ✅ NETTOYAGE + RAFRAÎCHISSEMENT OBLIGATOIRE
        $this->entityManager->clear();
        $freshUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        
        if (!$freshUser) {
            return;
        }

        // ✅ UTILISER LA MÉTHODE canLogin() POUR LA VÉRIFICATION
        if (!$freshUser->canLogin()) {
            
            $session = $request->getSession();
            $disabledTime = $session->get('disabled_detected_at');
            $now = time();
            
            // Déterminer le message en fonction de la cause
            $message = $this->getDisabledMessage($freshUser);
            $title = $this->getDisabledTitle($freshUser);
            $icon = $this->getDisabledIcon($freshUser);
            
            if (!$disabledTime) {
                // 🟡 PREMIÈRE DÉTECTION - TOAST 5 SECONDES
                $session->set('disabled_detected_at', $now);
                $session->set('logout_in_seconds', 5);
                $session->set('hma_toast', [
                    'type' => $this->getToastType($freshUser),
                    'icon' => $icon,
                    'title' => $title,
                    'message' => $message . ' Déconnexion dans <strong id="logout-countdown">5</strong> secondes.'
                ]);
                
            } else {
                // ⏱️ VÉRIFICATION DU TEMPS ÉCOULÉ
                $elapsed = $now - $disabledTime;
                $remaining = 5 - $elapsed;
                
                if ($remaining <= 0) {
                    // 🔴 DÉCONNEXION
                    $session->invalidate();
                    $this->tokenStorage->setToken(null);
                    
                    $newSession = $this->requestStack->getSession();
                    $newSession->start();
                    $newSession->set('login_info', $this->getLoginInfoMessage($freshUser));
                    
                    $event->setResponse(
                        new RedirectResponse($this->urlGenerator->generate('app_login'))
                    );
                    return;
                    
                } else {
                    // 🟡 MISE À JOUR DU COMPTE À REBOURS
                    $session->set('hma_toast', [
                        'type' => $this->getToastType($freshUser),
                        'icon' => $icon,
                        'title' => $title,
                        'message' => $message . ' Déconnexion dans <strong id="logout-countdown">' . $remaining . '</strong> secondes.'
                    ]);
                }
            }
        } else {
            // ✅ UTILISATEUR AUTORISÉ - NETTOYER
            $request->getSession()->remove('disabled_detected_at');
            $request->getSession()->remove('logout_in_seconds');
            $request->getSession()->remove('hma_toast');
        }
    }

    /**
     * Déterminer le message en fonction de la cause de désactivation
     */
    private function getDisabledMessage(User $user): string
    {
        if ($user->getHmaServiceId() && !$user->getHmaServiceId()->isHmaActive()) {
            return 'Votre entreprise a été désactivée par l\'administrateur système.';
        }
        
        if ($user->isHmaOwner() && !$user->isActive()) {
            return 'Votre compte administrateur a été désactivé.';
        }
        
        if (!$user->isActive()) {
            return 'Votre compte a été désactivé par l\'administrateur de l\'entreprise.';
        }
        
        if (!$user->isSubscriptionActive()) {
            return 'Votre compte est hors quota (limite d\'abonnement atteinte).';
        }
        
        return 'Votre compte a été désactivé.';
    }

    /**
     * Déterminer le titre en fonction de la cause
     */
    private function getDisabledTitle(User $user): string
    {
        if ($user->getHmaServiceId() && !$user->getHmaServiceId()->isHmaActive()) {
            return '🔒 Entreprise bloquée';
        }
        
        if ($user->isHmaOwner() && !$user->isActive()) {
            return '👑 Compte admin désactivé';
        }
        
        if (!$user->isActive()) {
            return '⚠️ Compte désactivé';
        }
        
        if (!$user->isSubscriptionActive()) {
            return '📊 Limite d\'abonnement';
        }
        
        return '⚠️ Accès restreint';
    }

    /**
     * Déterminer l'icône en fonction de la cause
     */
    private function getDisabledIcon(User $user): string
    {
        if ($user->getHmaServiceId() && !$user->getHmaServiceId()->isHmaActive()) {
            return 'bi bi-shield-lock-fill';
        }
        
        if (!$user->isSubscriptionActive()) {
            return 'bi bi-exclamation-triangle-fill';
        }
        
        return 'bi bi-toggle-off';
    }

    /**
     * Déterminer le type de toast (couleur)
     */
    private function getToastType(User $user): string
    {
        if ($user->getHmaServiceId() && !$user->getHmaServiceId()->isHmaActive()) {
            return 'danger';
        }
        
        if (!$user->isSubscriptionActive()) {
            return 'warning';
        }
        
        return 'secondary';
    }

    /**
     * Message pour la page de login après déconnexion
     */
    private function getLoginInfoMessage(User $user): string
    {
        if ($user->getHmaServiceId() && !$user->getHmaServiceId()->isHmaActive()) {
            return 'Vous avez été déconnecté car votre entreprise a été bloquée par l\'administrateur système.';
        }
        
        if (!$user->isSubscriptionActive()) {
            return 'Vous avez été déconnecté car votre compte est hors quota. Contactez votre administrateur.';
        }
        
        return 'Vous avez été déconnecté car votre compte est désactivé.';
    }
}