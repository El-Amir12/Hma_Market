<?php
// src/EventListener/CustomerLoginListener.php
namespace App\EventListener;

use App\Entity\Customer;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class CustomerLoginListener implements EventSubscriberInterface
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
        $request = $event->getRequest();
        $route = $request->attributes->get('_route');

        // ✅ Si l'utilisateur est sur la page de login et déjà connecté
        if ($route === 'marketplace_login') {
            $token = $this->tokenStorage->getToken();
            
            if ($token && $token->getUser() instanceof Customer) {
                $event->setResponse(
                    new RedirectResponse($this->urlGenerator->generate('marketplace_home'))
                );
            }
        }
    }
}