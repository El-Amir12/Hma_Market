<?php
// src/Twig/ArrayExtension.php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ArrayExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('unique', [$this, 'getUnique']),
        ];
    }

    public function getUnique(array $array): array
    {
        return array_unique($array);
    }
}