<?php
// src/Service/UnitConverter.php

namespace App\Service;

class UnitConverter
{
    private const CONVERSION_TO_GRAM = [
        'tonne' => 1000000,
        'quintal' => 100000,
        'kg' => 1000,
        'hg' => 100,
        'dag' => 10,
        'g' => 1,
        'dg' => 0.1,
        'cg' => 0.01,
        'mg' => 0.001,
    ];

    private const CONVERSION_TO_MILLILITER = [
        'm3' => 1000000,
        'L' => 1000,
        'dL' => 100,
        'cL' => 10,
        'mL' => 1,
        'ml' => 1,
    ];

    // Unités de type "pièce" (tout ce qui se compte à l'unité)
    private const PIECE_UNITS = [
        'pièce', 'piece',
        'boîte', 'boite',
        'carton',
        'paquet', 'pack',
        'sachet',
        'lot',
        'bouteille',
        'canette',
        'verre',
        'assiette',
        'portion',
        'barquette',
        'caisse',
        'palette',
        'rouleau',
        'bobine',
        'rame',
        'pile',
        'jeu',
        'set',
        'kit',
        'douzaine',
        'centaine',
        'mille',
    ];

    public function convert(float $quantity, string $fromUnit, string $toUnit): float
    {
        $fromUnit = strtolower(trim($fromUnit));
        $toUnit = strtolower(trim($toUnit));

        if ($fromUnit === $toUnit) {
            return $quantity;
        }

        $fromType = $this->getUnitType($fromUnit);
        $toType = $this->getUnitType($toUnit);
        
        if ($fromType !== $toType) {
            throw new \InvalidArgumentException("Conversion impossible entre $fromUnit et $toUnit");
        }

        if ($fromType === 'weight') {
            $grams = $quantity * self::CONVERSION_TO_GRAM[$fromUnit];
            return $grams / self::CONVERSION_TO_GRAM[$toUnit];
        }
        
        if ($fromType === 'volume') {
            $ml = $quantity * self::CONVERSION_TO_MILLILITER[$fromUnit];
            return $ml / self::CONVERSION_TO_MILLILITER[$toUnit];
        }
        
        return $quantity;
    }

    public function getSupportedUnits(): array
    {
        $units = array_merge(
            array_keys(self::CONVERSION_TO_GRAM),
            array_keys(self::CONVERSION_TO_MILLILITER),
            self::PIECE_UNITS
        );
        
        // Trier par ordre alphabétique
        sort($units);
        
        return $units;
    }

    /**
     * Retourne les unités groupées par catégorie pour le select2
     */
    public function getGroupedUnits(): array
    {
        return [
            '📦 Poids (masse)' => array_keys(self::CONVERSION_TO_GRAM),
            '💧 Volume (liquides)' => array_keys(self::CONVERSION_TO_MILLILITER),
            '🔢 Pièces / Unités' => self::PIECE_UNITS,
        ];
    }

    public function getUnitType(string $unit): string
    {
        $unit = strtolower(trim($unit));
        
        if (isset(self::CONVERSION_TO_GRAM[$unit])) {
            return 'weight';
        }
        if (isset(self::CONVERSION_TO_MILLILITER[$unit])) {
            return 'volume';
        }
        if (in_array($unit, self::PIECE_UNITS)) {
            return 'piece';
        }
        throw new \InvalidArgumentException("Unité inconnue : $unit");
    }

    /**
     * Vérifie si une unité est de type "pièce" (restockable)
     */
    public function isPieceUnit(string $unit): bool
    {
        $unit = strtolower(trim($unit));
        return in_array($unit, self::PIECE_UNITS);
    }
}