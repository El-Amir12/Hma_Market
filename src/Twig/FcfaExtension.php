<?php

// src/Twig/FcfaExtension.php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class FcfaExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('format_fcfa', [$this, 'formatFcfa']),
        ];
    }

    public function formatFcfa($amount, int $decimals = 0): string
    {
        $number = (float) $amount;
        $formatted = number_format($number, $decimals, ',', ' ');
        return $formatted . ' FCFA';
    }
}