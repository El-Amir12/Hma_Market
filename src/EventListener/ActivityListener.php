<?php
// src/EventListener/ActivityListener.php
namespace App\EventListener;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class ActivityListener implements EventSubscriberInterface
{
    public function __construct(
        private Security $security,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {}

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $user = $this->security->getUser();
        if (!$user instanceof User) {
            return; // Ignore HmaService ou autres
        }

        $managedUser = $this->entityManager->find(User::class, $user->getId());
        if (!$managedUser) {
            return;
        }

        $now = new \DateTime();
        $last = $managedUser->getLastActivity();

        // Mise à jour toutes les 2 minutes
        if (!$last || ($now->getTimestamp() - $last->getTimestamp()) > 120) {
            $managedUser->setLastActivity($now);
            $this->entityManager->flush();
            $this->logger->info('last_activity mis à jour', ['user_id' => $managedUser->getId()]);
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [RequestEvent::class => 'onKernelRequest'];
    }
}