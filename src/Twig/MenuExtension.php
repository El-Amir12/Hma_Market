<?php

namespace App\Twig;

use App\Service\MenuBuilder;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class MenuExtension extends AbstractExtension
{
    private MenuBuilder $menuBuilder;

    public function __construct(MenuBuilder $menuBuilder)
    {
        $this->menuBuilder = $menuBuilder;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_menu', [$this, 'getMenu']),
        ];
    }

    public function getMenu(): array
    {
        return $this->menuBuilder->getMenuForCurrentUser();
    }
}