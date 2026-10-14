<?php
// src/DataFixtures/PharmacySupplierFixtures.php

namespace App\DataFixtures;

use App\Entity\HmaService;
use App\Entity\Supplier;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class PharmacySupplierFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['pharmacy', 'demo'];
    }

    public function load(ObjectManager $manager): void
    {
        $company = $manager->getRepository(HmaService::class)->find(29);

        if (!$company) {
            echo "❌ Entreprise ID 29 non trouvée.\n";
            return;
        }

        echo "🚚 Chargement des fournisseurs...\n";

        $suppliers = [
            [
                'name' => 'COPHARMA Bénin',
                'contactPerson' => 'M. Kouassi',
                'phone' => '+229 01 97 00 00 01',
                'email' => 'contact@copharma.bj',
                'adress' => 'Cotonou, Zone industrielle',
            ],
            [
                'name' => 'SOBEBRA Distribution',
                'contactPerson' => 'Mme Adjoa',
                'phone' => '+229 01 97 00 00 02',
                'email' => 'commandes@sobebra.bj',
                'adress' => 'Cotonou, Akpakpa',
            ],
            [
                'name' => 'PHARMA DISTRIB',
                'contactPerson' => 'M. Dossou',
                'phone' => '+229 01 97 00 00 03',
                'email' => 'info@pharmadistrib.bj',
                'adress' => 'Porto-Novo, Centre',
            ],
            [
                'name' => 'UBIPHARM Bénin',
                'contactPerson' => 'Mme Kiki',
                'phone' => '+229 01 97 00 00 04',
                'email' => 'contact@ubipharm.bj',
                'adress' => 'Cotonou, Gbégamey',
            ],
        ];

        $total = 0;
        foreach ($suppliers as $data) {
            $supplier = new Supplier();
            $supplier->setName($data['name']);
            $supplier->setContactPerson($data['contactPerson']);
            $supplier->setPhone($data['phone']);
            $supplier->setEmail($data['email']);
            $supplier->setAdress($data['adress']);
            $supplier->setHmaService($company);
            // ❌ SUPPRIMÉ : $supplier->setUser($user);
            $supplier->setIsActive(true);
            $supplier->setSubscriptionActive(true);
            
            $manager->persist($supplier);
            $total++;
            echo "  🚚 {$data['name']}\n";
        }

        $manager->flush();
        echo "\n✅ {$total} fournisseurs créés !\n";
    }
}