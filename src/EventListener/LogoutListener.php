<?php
// src/EventListener/LogoutListener.php
namespace App\EventListener;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\LogoutEvent;

class LogoutListener implements EventSubscriberInterface
{
    public function __construct(private EntityManagerInterface $em) {}

    public function onLogout(LogoutEvent $event)
    {
        $user = $event->getToken()?->getUser();

        if ($user instanceof User) {
            $managedUser = $this->em->find(User::class, $user->getId());
            if ($managedUser) {
                $managedUser->setLogoutAt(new \DateTime());
                $this->em->flush();
            }
        }
    }

    public static function getSubscribedEvents()
    {
        return [LogoutEvent::class => 'onLogout'];
    }
}