<?php
// src/Form/Type/CountryType.php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Intl\Countries;

class CountryType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => $this->getCountries(),
            'choice_label' => function ($choice, $key, $value) {
                return $value; // Affiche le nom avec drapeau
            },
            'choice_value' => function ($choice) {
                return $choice; // Stocke le code pays
            },
            'placeholder' => '🌍 Sélectionnez votre pays',
            'attr' => [
                'class' => 'form-select form-select-lg',
            ],
        ]);
    }

    public function getParent(): string
    {
        return ChoiceType::class;
    }

    private function getCountries(): array
    {
        $countries = Countries::getNames('fr');
        asort($countries);
        
        $result = [];
        foreach ($countries as $code => $name) {
            $flag = $this->getCountryFlag($code);
            $result[$code] = $flag . ' ' . $name;
        }
        
        return $result;
    }

    private function getCountryFlag(string $countryCode): string
    {
        $flag = '';
        for ($i = 0; $i < 2; $i++) {
            $char = $countryCode[$i] ?? '';
            if ($char) {
                $flag .= mb_chr(0x1F1A5 + ord($char) - 65);
            }
        }
        return $flag;
    }
}