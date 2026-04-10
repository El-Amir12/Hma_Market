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
            new TwigFilter('sum', [$this, 'calculateSum']),
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

    /**
     * Calcule la somme d'une propriété sur un tableau d'objets
     * 
     * @param array $array Le tableau d'objets
     * @param string $property Le nom de la propriété (ex: 'currentQuantity', 'unitPrice')
     * @return float La somme calculée
     */
    public function calculateSum(array $array, string $property): float
    {
        $sum = 0;
        
        foreach ($array as $item) {
            // Construire le nom du getter (ex: getCurrentQuantity)
            $getter = 'get' . ucfirst($property);
            
            // Vérifier si la méthode existe
            if (method_exists($item, $getter)) {
                $sum += (float) $item->$getter();
            } 
            // Vérifier si la propriété existe (accès direct)
            elseif (property_exists($item, $property)) {
                $sum += (float) $item->$property;
            }
            // Vérifier si c'est un tableau associatif
            elseif (is_array($item) && isset($item[$property])) {
                $sum += (float) $item[$property];
            }
        }
        
        return $sum;
    }
}