<?php
// src/Twig/CountryExtension.php

namespace App\Twig;

use App\Form\Type\CountryType;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class CountryExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('country_flag', [$this, 'getCountryFlag']),
            new TwigFilter('country_label', [$this, 'getCountryLabel']),
            new TwigFilter('country_phone', [$this, 'getCountryPhone']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('country_flag', [$this, 'getCountryFlag']),
            new TwigFunction('country_label', [$this, 'getCountryLabel']),
        ];
    }

    public function getCountryFlag(?string $countryCode): string
    {
        return CountryType::getFlag($countryCode ?? '');
    }

    public function getCountryLabel(?string $countryCode): string
    {
        return CountryType::getCountryLabel($countryCode ?? '');
    }

    public function getCountryPhone(?string $countryCode): string
    {
        return CountryType::getPhoneCode($countryCode ?? '');
    }
}