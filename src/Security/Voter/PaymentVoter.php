<?php
// src/Security/Voter/PaymentVoter.php
namespace App\Security\Voter;

use App\Entity\HmaService;
use App\Entity\Payment;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class PaymentVoter extends Voter
{
    public const VIEW = 'PAYMENT_VIEW';
    public const VIEW_LIST = 'PAYMENT_VIEW_LIST';
    public const CREATE = 'PAYMENT_CREATE';
    public const EDIT = 'PAYMENT_EDIT';
    public const DELETE = 'PAYMENT_DELETE';

    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [self::VIEW, self::VIEW_LIST, self::CREATE, self::EDIT, self::DELETE])
            && ($subject instanceof Payment || $subject === null);
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
                return false;
        }

        return false;
    }

    private function getHmaService(UserInterface $user): ?HmaService
    {
        if ($user instanceof HmaService) {
            return $user;
        }

        $method = 'getHmaService';
        if (method_exists($user, $method)) {
            return $user->$method();
        }

        return null;
    }

    private function canViewList(UserInterface $user): bool
    {
        return in_array('ROLE_ADMIN', $user->getRoles()) 
            || in_array('ROLE_MANAGER', $user->getRoles())
            || in_array('ROLE_SUPER_ADMIN', $user->getRoles());
    }

    private function canView(Payment $payment, HmaService $hmaService): bool
    {
        $paymentService = $payment->getHmaService();
        return $paymentService && $paymentService->getId() === $hmaService->getId();
    }

    private function canCreate(UserInterface $user): bool
    {
        return in_array('ROLE_SUPER_ADMIN', $user->getRoles());
    }
}