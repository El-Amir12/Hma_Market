<?php
// src/EventListener/MustChangePasswordListener.php
namespace App\EventListener;

use App\Entity\Customer;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class MustChangePasswordListener implements EventSubscriberInterface
{
    public function __construct(
        private TokenStorageInterface $tokenStorage,
        private UrlGeneratorInterface $urlGenerator
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => 'onKernelRequest',
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        $route = $request->attributes->get('_route');

        // Routes autorisées
        $allowedRoutes = [
            'marketplace_change_password',
            'marketplace_logout',
            'marketplace_login',
            'marketplace_register',
            'marketplace_verify_email',
            'marketplace_check_email',
            'marketplace_resend_verification',
            'marketplace_home',  // ✅ Ajout de la route home
        ];

        if (in_array($route, $allowedRoutes)) {
            return;
        }

        $token = $this->tokenStorage->getToken();
        if (!$token) {
            return;
        }

        $user = $token->getUser();
        if (!$user instanceof Customer) {
            return;
        }

        if ($user->isMustChangePassword()) {
            // ✅ Utilisation de la session pour stocker le message
            $session = $request->getSession();
            if ($session instanceof Session) {
                $session->getFlashBag()->add(
                    'warning',
                    '🔒 Vous devez changer votre mot de passe temporaire avant d\'accéder à cette page.'
                );
            }
            
            $event->setResponse(
                new RedirectResponse($this->urlGenerator->generate('marketplace_change_password'))
            );
        }
    }
}