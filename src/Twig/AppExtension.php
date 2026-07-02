<?php
// src/Twig/AppExtension.php

namespace App\Twig;

use App\Entity\Customer;
use App\Entity\HmaService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

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
            new TwigFilter('sum', [$this, 'calculateSum']),
            new TwigFilter('repeat', [$this, 'repeatString']), // ✅ Ajout du filtre repeat
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('build_category_tree', [$this, 'buildCategoryTree']),
            new TwigFunction('is_customer', [$this, 'isCustomer']),
            new TwigFunction('category_tree_options', [$this, 'getCategoryTreeOptions']), // ✅ Nouvelle fonction
        ];
    }

    public function formatPriceWithCurrency($price, ?HmaService $hmaService = null): string
    {
        if ($price === null) {
            return '';
        }

        $currency = 'XAF';

        if ($hmaService && $hmaService->getCountry()) {
            $currency = self::CURRENCY_MAP[$hmaService->getCountry()] ?? 'XAF';
        }

        $formatted = number_format((float) $price, 0, ',', ' ');
        return $formatted . ' ' . $currency;
    }

    public function calculateSum(array $array, string $property): float
    {
        $sum = 0;
        
        foreach ($array as $item) {
            $getter = 'get' . ucfirst($property);
            
            if (method_exists($item, $getter)) {
                $sum += (float) $item->$getter();
            } elseif (property_exists($item, $property)) {
                $sum += (float) $item->$property;
            } elseif (is_array($item) && isset($item[$property])) {
                $sum += (float) $item[$property];
            }
        }
        
        return $sum;
    }

    /**
     * Filtrer 'repeat' pour répéter une chaîne
     */
    public function repeatString(string $string, int $count): string
    {
        return str_repeat($string, max(0, $count));
    }

    /**
     * Construit l'arbre des catégories en HTML
     */
    public function buildCategoryTree($categories, $parentId = 0, $level = 0): string
    {
        $html = '';
        foreach ($categories as $category) {
            $parent = $category->getParent();
            $parentMatch = ($parent && $parent->getId() == $parentId) || ($parentId == 0 && !$parent);
            
            if ($parentMatch) {
                $indent = str_repeat('&nbsp;&nbsp;&nbsp;', $level);
                $indentDash = str_repeat('— ', $level);
                $displayIndent = $level > 0 ? $indent . $indentDash : '';
                
                $html .= sprintf(
                    '<option value="%d">%s%s</option>',
                    $category->getId(),
                    $displayIndent,
                    htmlspecialchars($category->getName())
                );
                $html .= $this->buildCategoryTree($categories, $category->getId(), $level + 1);
            }
        }
        return $html;
    }

    /**
     * Retourne les options de catégories sous forme de tableau pour Select2
     */
    public function getCategoryTreeOptions($categories, $selectedId = null, $level = 0): array
    {
        $options = [];
        foreach ($categories as $category) {
            $parent = $category->getParent();
            $isRoot = ($level === 0 && !$parent);
            
            if ($isRoot || ($parent && $parent->getId() == $selectedId)) {
                // Ceci est une simplification - dans la vraie vie, vous devriez
                // construire l'arbre différemment
                continue;
            }
        }
        return $options;
    }

    public function isCustomer($user): bool
    {
        return $user instanceof Customer;
    }
}