<?php
// src/DataFixtures/PharmacyCategoryFixtures.php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\HmaService;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class PharmacyCategoryFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['pharmacy', 'demo'];
    }

    public function load(ObjectManager $manager): void
    {
        // ✅ Récupère l'entreprise (ID 29)
        $company = $manager->getRepository(HmaService::class)->find(29);

        if (!$company) {
            echo "❌ Entreprise ID 29 non trouvée.\n";
            return;
        }

        // ✅ Récupère le User propriétaire
        $user = $manager->getRepository(User::class)
            ->findOneBy(['hma_service_id' => $company->getId(), 'is_hma_owner' => true]);

        if (!$user) {
            echo "❌ Aucun propriétaire trouvé pour l'entreprise.\n";
            return;
        }

        echo "🏥 Chargement des catégories pour : {$company->getCompanyName()}\n";

        // ✅ Structure : Catégorie parente => Sous-catégories
        $categories = [
            'Médicaments' => [
                'Antalgiques',
                'Antibiotiques',
                'Anti-inflammatoires',
                'Antipaludéens',
                'Vitamines',
                'Antihistaminiques',
                'Antiacides',
            ],
            'Parapharmacie' => [
                'Crèmes solaires',
                'Soins visage',
                'Soins cheveux',
                'Hygiène bucco-dentaire',
                'Déodorants',
            ],
            'Matériel médical' => [
                'Thermomètres',
                'Tensiomètres',
                'Pansements',
                'Seringues',
                'Bandages',
            ],
            'Compléments alimentaires' => [
                'Fer',
                'Calcium',
                'Magnésium',
                'Oméga 3',
                'Multivitamines',
            ],
            'Bébé & Maman' => [
                'Laits infantiles',
                'Couches',
                'Biberons',
                'Soins bébé',
            ],
        ];

        $totalCategories = 0;
        $totalSubCategories = 0;

        foreach ($categories as $parentName => $subCategories) {
            // ✅ Créer la catégorie parente
            $parent = new Category();
            $parent->setName($parentName);
            $parent->setSlug($this->generateSlug($parentName));
            $parent->setDescription("Catégorie principale : {$parentName}");
            $parent->setHmaService($company);
            $parent->setUser($user);
            $parent->setIsActive(true);
            $parent->setSubscriptionActive(true);
            $parent->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($parent);
            $totalCategories++;
            echo "  📁 {$parentName}\n";

            // ✅ Créer les sous-catégories
            foreach ($subCategories as $subName) {
                $sub = new Category();
                $sub->setName($subName);
                $sub->setSlug($this->generateSlug($subName));
                $sub->setParent($parent);
                $sub->setDescription("Sous-catégorie de {$parentName}");
                $sub->setHmaService($company);
                $sub->setUser($user);
                $sub->setIsActive(true);
                $sub->setSubscriptionActive(true);
                $sub->setCreatedAt(new \DateTimeImmutable());
                $manager->persist($sub);
                $totalSubCategories++;
                echo "    └─ {$subName}\n";
            }
        }

        $manager->flush();

        echo "\n✅ {$totalCategories} catégories et {$totalSubCategories} sous-catégories créées !\n";
    }

    private function generateSlug(string $name): string
    {
        $slug = strtolower($name);
        $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
        $slug = trim($slug, '-');
        return $slug . '-' . uniqid();
    }
}