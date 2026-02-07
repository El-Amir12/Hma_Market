<?php

// src/Twig/AppExtension.php
namespace App\Twig;

use App\Service\MenuBuilder;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    private MenuBuilder $menuBuilder;

    public function __construct(MenuBuilder $menuBuilder)
    {
        $this->menuBuilder = $menuBuilder;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_menu', [$this->menuBuilder, 'getMenuForCurrentUser']),
        ];
    }
}