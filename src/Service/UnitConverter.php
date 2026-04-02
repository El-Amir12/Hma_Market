<?php
// src/Service/UnitConverter.php

namespace App\Service;

class UnitConverter
{
    private const CONVERSION_TO_GRAM = [
        'kg' => 1000,
        'g' => 1,
        'mg' => 0.001,
    ];

    private const CONVERSION_TO_MILLILITER = [
        'L' => 1000,
        'ml' => 1,
        'cl' => 10,
    ];

    // Liste des unités de type "pièce" (tout ce qui se compte à l'unité)
    private const PIECE_UNITS = [
        'pièce', 'piece',   // les deux orthographes
        'boîte', 'boite',
        'carton',
        'paquet',
        'pack'
    ];

    public function convert(float $quantity, string $fromUnit, string $toUnit): float
    {
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
        // Pour le type 'piece', on ne convertit pas (retourne la quantité inchangée)
        return $quantity;
    }

    public function getSupportedUnits(): array
    {
        return array_merge(
            array_keys(self::CONVERSION_TO_GRAM),
            array_keys(self::CONVERSION_TO_MILLILITER),
            self::PIECE_UNITS
        );
    }

    /**
     * Retourne le type d'une unité : 'weight', 'volume' ou 'piece'.
     */
    public function getUnitType(string $unit): string
    {
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
}