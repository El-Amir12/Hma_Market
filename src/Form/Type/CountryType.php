<?php
// src/Form/Type/CountryType.php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Intl\Countries;

class CountryType extends AbstractType
{
    /**
     * Liste des pays avec leurs codes ISO et drapeaux
     */
    private const COUNTRIES = [
        'BJ' => ['label' => 'Bénin', 'flag' => '🇧🇯', 'phone' => '+229'],
        'CI' => ['label' => "Côte d'Ivoire", 'flag' => '🇨🇮', 'phone' => '+225'],
        'SN' => ['label' => 'Sénégal', 'flag' => '🇸🇳', 'phone' => '+221'],
        'CM' => ['label' => 'Cameroun', 'flag' => '🇨🇲', 'phone' => '+237'],
        'TG' => ['label' => 'Togo', 'flag' => '🇹🇬', 'phone' => '+228'],
        'NG' => ['label' => 'Nigeria', 'flag' => '🇳🇬', 'phone' => '+234'],
        'GH' => ['label' => 'Ghana', 'flag' => '🇬🇭', 'phone' => '+233'],
        'ML' => ['label' => 'Mali', 'flag' => '🇲🇱', 'phone' => '+223'],
        'BF' => ['label' => 'Burkina Faso', 'flag' => '🇧🇫', 'phone' => '+226'],
        'NE' => ['label' => 'Niger', 'flag' => '🇳🇪', 'phone' => '+227'],
        'FR' => ['label' => 'France', 'flag' => '🇫🇷', 'phone' => '+33'],
        'BE' => ['label' => 'Belgique', 'flag' => '🇧🇪', 'phone' => '+32'],
        'CH' => ['label' => 'Suisse', 'flag' => '🇨🇭', 'phone' => '+41'],
        'CA' => ['label' => 'Canada', 'flag' => '🇨🇦', 'phone' => '+1'],
        'US' => ['label' => 'États-Unis', 'flag' => '🇺🇸', 'phone' => '+1'],
        'GB' => ['label' => 'Royaume-Uni', 'flag' => '🇬🇧', 'phone' => '+44'],
        'DE' => ['label' => 'Allemagne', 'flag' => '🇩🇪', 'phone' => '+49'],
        'IT' => ['label' => 'Italie', 'flag' => '🇮🇹', 'phone' => '+39'],
        'ES' => ['label' => 'Espagne', 'flag' => '🇪🇸', 'phone' => '+34'],
        'PT' => ['label' => 'Portugal', 'flag' => '🇵🇹', 'phone' => '+351'],
        'NL' => ['label' => 'Pays-Bas', 'flag' => '🇳🇱', 'phone' => '+31'],
        'LU' => ['label' => 'Luxembourg', 'flag' => '🇱🇺', 'phone' => '+352'],
        'MA' => ['label' => 'Maroc', 'flag' => '🇲🇦', 'phone' => '+212'],
        'DZ' => ['label' => 'Algérie', 'flag' => '🇩🇿', 'phone' => '+213'],
        'TN' => ['label' => 'Tunisie', 'flag' => '🇹🇳', 'phone' => '+216'],
        'EG' => ['label' => 'Égypte', 'flag' => '🇪🇬', 'phone' => '+20'],
        'ZA' => ['label' => 'Afrique du Sud', 'flag' => '🇿🇦', 'phone' => '+27'],
        'KE' => ['label' => 'Kenya', 'flag' => '🇰🇪', 'phone' => '+254'],
        'TZ' => ['label' => 'Tanzanie', 'flag' => '🇹🇿', 'phone' => '+255'],
        'UG' => ['label' => 'Ouganda', 'flag' => '🇺🇬', 'phone' => '+256'],
        'RW' => ['label' => 'Rwanda', 'flag' => '🇷🇼', 'phone' => '+250'],
        'AO' => ['label' => 'Angola', 'flag' => '🇦🇴', 'phone' => '+244'],
        'MZ' => ['label' => 'Mozambique', 'flag' => '🇲🇿', 'phone' => '+258'],
        'ZM' => ['label' => 'Zambie', 'flag' => '🇿🇲', 'phone' => '+260'],
        'ZW' => ['label' => 'Zimbabwe', 'flag' => '🇿🇼', 'phone' => '+263'],
    ];

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => $this->getChoices(),
            'placeholder' => '🌍 Sélectionnez votre pays',
            'required' => false,
            'attr' => [
                'class' => 'form-select',
            ],
        ]);
    }

    public function getParent(): string
    {
        return ChoiceType::class;
    }

    /**
     * Génère les choix avec drapeaux
     */
    private function getChoices(): array
    {
        $choices = [];
        
        foreach (self::COUNTRIES as $code => $country) {
            $label = sprintf('%s %s', $country['flag'], $country['label']);
            $choices[$label] = $code;
        }
        
        return $choices;
    }

    /**
     * Récupère le drapeau d'un pays
     */
    public static function getFlag(string $countryCode): string
    {
        return self::COUNTRIES[$countryCode]['flag'] ?? '🌍';
    }

    /**
     * Récupère le libellé d'un pays
     */
    public static function getCountryLabel(string $countryCode): string
    {
        return self::COUNTRIES[$countryCode]['label'] ?? $countryCode;
    }

    /**
     * Récupère l'indicatif téléphonique d'un pays
     */
    public static function getPhoneCode(string $countryCode): string
    {
        return self::COUNTRIES[$countryCode]['phone'] ?? '';
    }

    /**
     * Récupère tous les pays
     */
    public static function getAllCountries(): array
    {
        return self::COUNTRIES;
    }
}