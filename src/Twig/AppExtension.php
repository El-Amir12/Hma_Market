<?php

namespace App\Twig;

use App\Entity\HmaService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    private const CURRENCY_MAP = [
        'CM' => 'XAF',
        'CI' => 'XOF',
        'SN' => 'XOF',
        'FR' => 'EUR',
        'US' => 'USD',
        'BJ' => 'FCFA',
    ];

    public function getFilters(): array
    {
        return [
            new TwigFilter('price_with_currency', [$this, 'formatPriceWithCurrency']),
        ];
    }

    public function formatPriceWithCurrency($price, ?HmaService $hmaService = null): string
    {
        if ($price === null) {
            return '';
        }

        $currency = 'XAF'; // défaut

        if ($hmaService && $hmaService->getCountry()) {
            $currency = self::CURRENCY_MAP[$hmaService->getCountry()] ?? 'XAF';
        }

        $formatted = number_format((float) $price, 0, ',', ' ');
        return $formatted . ' ' . $currency;
    }
}