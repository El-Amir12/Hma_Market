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
        
        if (in_array($route, ['app_login', 'app_logout', 'app_clear_toast'])) {
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

        // ✅ DÉTECTION DES COMPTES DÉSACTIVÉS
        if (!$freshUser->isActive() && !$freshUser->isHmaOwner()) {
            
            $session = $request->getSession();
            $disabledTime = $session->get('disabled_detected_at');
            $now = time();
            
            if (!$disabledTime) {
                // 🟡 PREMIÈRE DÉTECTION - TOAST 5 SECONDES
                $session->set('disabled_detected_at', $now);
                $session->set('logout_in_seconds', 5);
                $session->set('hma_toast', [
                    'type' => 'warning',
                    'icon' => 'bi bi-exclamation-triangle-fill',
                    'title' => '⚠️ Compte désactivé',
                    'message' => 'Votre compte a été désactivé. Déconnexion dans <strong id="logout-countdown">5</strong> secondes.'
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
                    $newSession->set('login_info', 'Vous avez été déconnecté car votre compte est désactivé.');
                    
                    $event->setResponse(
                        new RedirectResponse($this->urlGenerator->generate('app_login'))
                    );
                    return;
                    
                } else {
                    // 🟡 MISE À JOUR DU COMPTE À REBOURS
                    $session->set('hma_toast', [
                        'type' => 'warning',
                        'icon' => 'bi bi-exclamation-triangle-fill',
                        'title' => '⚠️ Compte désactivé',
                        'message' => 'Votre compte a été désactivé. Déconnexion dans <strong id="logout-countdown">' . $remaining . '</strong> secondes.'
                    ]);
                }
            }
        } else {
            // ✅ UTILISATEUR ACTIF - NETTOYER
            $request->getSession()->remove('disabled_detected_at');
            $request->getSession()->remove('logout_in_seconds');
            $request->getSession()->remove('hma_toast');
        }
    }
}