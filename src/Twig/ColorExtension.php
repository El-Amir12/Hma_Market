<?php
// src/Twig/ColorExtension.php

namespace App\Twig;

use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class ColorExtension extends AbstractExtension
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('color_darken', [$this, 'colorDarken']),
            new TwigFilter('color_lighten', [$this, 'colorLighten']),
            new TwigFilter('hex_to_rgb', [$this, 'hexToRgb']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_company_colors', [$this, 'getCompanyColors']),
        ];
    }

    /**
     * Récupère les couleurs de l'entreprise depuis la base de données
     */
    public function getCompanyColors($companyId): array
    {
        // Valeurs par défaut (bleu HMA)
        $default = [
            'primary' => '#0463f1',
            'secondary' => '#8b5cf6'
        ];

        if (!$companyId) {
            return $default;
        }

        try {
            $company = $this->entityManager
                ->getRepository(\App\Entity\HmaService::class)
                ->find($companyId);

            if (!$company) {
                return $default;
            }

            $primary = $company->getPrimaryColor();
            $secondary = $company->getSecondaryColor();

            return [
                'primary' => $this->validateHexColor($primary) ? $primary : $default['primary'],
                'secondary' => $this->validateHexColor($secondary) ? $secondary : $default['secondary'],
            ];
        } catch (\Exception $e) {
            return $default;
        }
    }

    /**
     * Valide une couleur hexadécimale
     */
    private function validateHexColor(?string $color): bool
    {
        if (!$color) {
            return false;
        }
        return (bool) preg_match('/^#[0-9a-fA-F]{6}$/', $color);
    }

    /**
     * Assombrit une couleur hexadécimale
     */
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
        
        // Assombrir (soustraire le pourcentage)
        $r = max(0, min(255, $r - ($r * $percent / 100)));
        $g = max(0, min(255, $g - ($g * $percent / 100)));
        $b = max(0, min(255, $b - ($b * $percent / 100)));
        
        return sprintf('#%02x%02x%02x', (int)$r, (int)$g, (int)$b);
    }

    /**
     * Éclaircit une couleur hexadécimale
     */
    public function colorLighten(string $hex, int $percent): string
    {
        // Nettoyer la couleur
        $hex = ltrim($hex, '#');
        
        // Si la couleur est vide ou invalide, retourner une valeur par défaut
        if (empty($hex) || !preg_match('/^[0-9a-fA-F]{3,6}$/', $hex)) {
            return '#e8f0fe'; // Bleu clair par défaut
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
        
        // Éclaircir (ajouter le pourcentage vers le blanc)
        $r = max(0, min(255, $r + ((255 - $r) * $percent / 100)));
        $g = max(0, min(255, $g + ((255 - $g) * $percent / 100)));
        $b = max(0, min(255, $b + ((255 - $b) * $percent / 100)));
        
        return sprintf('#%02x%02x%02x', (int)$r, (int)$g, (int)$b);
    }

    /**
     * Convertit une couleur hexadécimale en RGB
     */
    public function hexToRgb(string $hex): string
    {
        $hex = ltrim($hex, '#');
        
        if (empty($hex) || !preg_match('/^[0-9a-fA-F]{3,6}$/', $hex)) {
            return '4, 99, 241'; // Bleu HMA par défaut
        }
        
        if (strlen($hex) === 3) {
            $r = hexdec(str_repeat(substr($hex, 0, 1), 2));
            $g = hexdec(str_repeat(substr($hex, 1, 1), 2));
            $b = hexdec(str_repeat(substr($hex, 2, 1), 2));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        
        return "$r, $g, $b";
    }
}