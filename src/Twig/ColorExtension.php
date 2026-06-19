<?php
// src/Twig/ColorExtension.php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ColorExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('color_darken', [$this, 'colorDarken']),
        ];
    }

    public function colorDarken(string $hex, int $percent): string
    {
        // Nettoyer la couleur
        $hex = ltrim($hex, '#');
        
        // Si la couleur est vide ou invalide, retourner une valeur par défaut
        if (empty($hex) || !preg_match('/^[0-9a-fA-F]{3,6}$/', $hex)) {
            return '#0350c4'; // Bleu foncé par défaut
        }
        
        // Gérer les couleurs en 3 caractères (ex: #fff)
        if (strlen($hex) === 3) {
            $r = hexdec(str_repeat(substr($hex, 0, 1), 2));
            $g = hexdec(str_repeat(substr($hex, 1, 1), 2));
            $b = hexdec(str_repeat(substr($hex, 2, 1), 2));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        
        // Assombrir
        $r = max(0, min(255, $r + $r * $percent / 100));
        $g = max(0, min(255, $g + $g * $percent / 100));
        $b = max(0, min(255, $b + $b * $percent / 100));
        
        return sprintf('#%02x%02x%02x', $r, $g, $b);
    }
}