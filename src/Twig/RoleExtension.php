<?php
// src/Twig/RoleExtension.php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class RoleExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('role_label', [$this, 'getRoleLabel']),
            new TwigFilter('role_badge', [$this, 'getRoleBadge']),
            new TwigFilter('role_icon', [$this, 'getRoleIcon']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('role_label', [$this, 'getRoleLabel']),
            new TwigFunction('role_badge', [$this, 'getRoleBadge']),
            new TwigFunction('role_icon', [$this, 'getRoleIcon']),
        ];
    }

    public function getRoleLabel(string $role): string
    {
        return match($role) {
            'ROLE_SUPER_ADMIN' => 'Super Administrateur',
            'ROLE_ADMIN' => 'Administrateur',
            'ROLE_MANAGER' => 'Gestionnaire',
            'ROLE_STOCK_MANAGER' => 'Responsable Stock',
            'ROLE_CASHIER' => 'Caissier',
            default => 'Utilisateur',
        };
    }

    public function getRoleBadge(string $role): string
    {
        return match($role) {
            'ROLE_SUPER_ADMIN', 'ROLE_ADMIN' => 'bg-gradient-danger',
            'ROLE_MANAGER' => 'bg-gradient-primary',
            'ROLE_STOCK_MANAGER' => 'bg-gradient-warning',
            'ROLE_CASHIER' => 'bg-gradient-success',
            default => 'bg-gradient-secondary',
        };
    }

    public function getRoleIcon(string $role): string
    {
        return match($role) {
            'ROLE_SUPER_ADMIN' => 'bi-shield-shaded',
            'ROLE_ADMIN' => 'bi-shield-check',
            'ROLE_MANAGER' => 'bi-graph-up',
            'ROLE_STOCK_MANAGER' => 'bi-box-seam',
            'ROLE_CASHIER' => 'bi-cash-coin',
            default => 'bi-person',
        };
    }
}