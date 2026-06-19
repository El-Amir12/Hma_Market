<?php
// src/Security/Voter/SubscriptionVoter.php
namespace App\Security\Voter;

use App\Entity\HmaService;
use App\Entity\Subscription;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class SubscriptionVoter extends Voter
{
    public const VIEW = 'SUBSCRIPTION_VIEW';
    public const VIEW_LIST = 'SUBSCRIPTION_VIEW_LIST';
    public const CREATE = 'SUBSCRIPTION_CREATE';
    public const EDIT = 'SUBSCRIPTION_EDIT';
    public const DELETE = 'SUBSCRIPTION_DELETE';

    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [self::VIEW, self::VIEW_LIST, self::CREATE, self::EDIT, self::DELETE])
            && ($subject instanceof Subscription || $subject === null);
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof UserInterface) {
            return false;
        }

        // Super Admin a tous les droits
        if (in_array('ROLE_SUPER_ADMIN', $user->getRoles())) {
            return true;
        }

        // Pour les autres rôles, on vérifie l'appartenance à l'entreprise
        $hmaService = $this->getHmaService($user);
        if (!$hmaService) {
            return false;
        }

        switch ($attribute) {
            case self::VIEW_LIST:
                return $this->canViewList($user);
            case self::VIEW:
                return $this->canView($subject, $hmaService);
            case self::CREATE:
                return $this->canCreate($user);
            case self::EDIT:
            case self::DELETE:
                // Pas de modification/suppression autorisée
                return false;
        }

        return false;
    }

    private function getHmaService(UserInterface $user): ?HmaService
    {
        // Si l'utilisateur est un HmaService directement
        if ($user instanceof HmaService) {
            return $user;
        }

        // Si l'utilisateur a une relation avec HmaService
        $method = 'getHmaService';
        if (method_exists($user, $method)) {
            return $user->$method();
        }

        return null;
    }

    private function canViewList(UserInterface $user): bool
    {
        // Admin et Manager peuvent voir leur propre liste
        return in_array('ROLE_ADMIN', $user->getRoles()) 
            || in_array('ROLE_MANAGER', $user->getRoles())
            || in_array('ROLE_SUPER_ADMIN', $user->getRoles());
    }

    private function canView(Subscription $subscription, HmaService $hmaService): bool
    {
        // Vérifie si l'abonnement appartient à l'entreprise
        $subscriptionService = $subscription->getHmaService();
        return $subscriptionService && $subscriptionService->getId() === $hmaService->getId();
    }

    private function canCreate(UserInterface $user): bool
    {
        // Seul Super Admin peut créer des abonnements
        return in_array('ROLE_SUPER_ADMIN', $user->getRoles());
    }
}