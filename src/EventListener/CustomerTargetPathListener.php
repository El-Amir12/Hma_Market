<?php
// src/EventListener/CustomerTargetPathListener.php

namespace App\EventListener;

use App\Entity\Customer;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Psr\Log\LoggerInterface;

class CustomerTargetPathListener implements EventSubscriberInterface
{
    private const FIREWALL_NAME = 'customer';
    private const EXCLUDED_PATHS = [
        '/favorites/count',
        '/cart/count',
        '/auth/check',
        '/cart/items',
        '/favorites/check',
    ];

    public function __construct(
        private TokenStorageInterface $tokenStorage,
        private LoggerInterface $logger
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
        $session = $request->getSession();
        
        // Vérifier si l'utilisateur est un Customer
        $token = $this->tokenStorage->getToken();
        if (!$token) {
            return;
        }
        
        $user = $token->getUser();
        if (!$user instanceof Customer) {
            return;
        }

        // Nettoyer la target path si elle pointe vers une API
        $targetPathKey = '_security.' . self::FIREWALL_NAME . '.target_path';
        $targetPath = $session->get($targetPathKey);
        
        if ($targetPath) {
            foreach (self::EXCLUDED_PATHS as $excludedPath) {
                if (strpos($targetPath, $excludedPath) !== false) {
                    $session->remove($targetPathKey);
                    $this->logger->info('🧹 Target path supprimée', [
                        'target' => $targetPath,
                        'reason' => 'Route API exclue'
                    ]);
                    break;
                }
            }
        }
    }
}