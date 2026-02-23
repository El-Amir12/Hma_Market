<?php
// src/Twig/SubscriptionExtension.php
namespace App\Twig;

use App\Entity\HmaService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class SubscriptionExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_subscription_info', [$this, 'getSubscriptionInfo']),
            new TwigFunction('get_plan_badge_class', [$this, 'getPlanBadgeClass']),
            new TwigFunction('can_upgrade_subscription', [$this, 'canUpgradeSubscription']),
        ];
    }

    public function getSubscriptionInfo(?HmaService $hmaService): array
    {
        if (!$hmaService) {
            return [
                'plan' => 'free',
                'plan_label' => 'Gratuit',
                'is_trial' => false,
                'days_remaining' => 0,
                'end_date' => null,
                'features' => [],
                'usage' => []
            ];
        }

        $stats = $hmaService->getUsageStats();
        $plan = $hmaService->getCurrentPlan();
        
        return [
            'plan' => $plan,
            'plan_label' => $stats['plan_label'],
            'is_trial' => $stats['is_trial'],
            'days_remaining' => $stats['trial_days_remaining'],
            'end_date' => $hmaService->getTrialEndsAt()?->format('d/m/Y'),
            'subscription_end' => $hmaService->getSubscriptionEndsAt()?->format('d/m/Y'),
            'features' => $stats['features'],
            'usage' => $stats,
            'can_upgrade' => $plan !== HmaService::PLAN_PREMIUM
        ];
    }

    public function getPlanBadgeClass(string $plan): string
    {
        return match($plan) {
            HmaService::PLAN_TRIAL => 'bg-info',
            HmaService::PLAN_FREEMIUM => 'bg-secondary',
            HmaService::PLAN_BASIC => 'bg-primary',
            HmaService::PLAN_PREMIUM => 'bg-warning',
            default => 'bg-secondary'
        };
    }

    public function canUpgradeSubscription($user): bool
    {
        if (!$user) {
            return false;
        }
        
        // Vérifier si l'utilisateur a le rôle ADMIN ou MANAGER
        return in_array('ROLE_ADMIN', $user->getRoles()) || 
               in_array('ROLE_MANAGER', $user->getRoles());
    }
}