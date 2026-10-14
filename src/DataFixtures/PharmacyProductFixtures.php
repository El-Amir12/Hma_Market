<?php
// src/DataFixtures/PharmacyProductFixtures.php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class PharmacyProductFixtures extends Fixture implements FixtureGroupInterface
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

        $user = $manager->getRepository(User::class)
            ->findOneBy(['hma_service_id' => $company->getId(), 'is_hma_owner' => true]);

        if (!$user) {
            echo "❌ Aucun propriétaire trouvé.\n";
            return;
        }

        // Récupérer les catégories
        $categoryRepo = $manager->getRepository(Category::class);
        $antalgiques = $categoryRepo->findOneBy(['name' => 'Antalgiques', 'hma_service' => $company]);
        $antibiotiques = $categoryRepo->findOneBy(['name' => 'Antibiotiques', 'hma_service' => $company]);
        $vitamines = $categoryRepo->findOneBy(['name' => 'Vitamines', 'hma_service' => $company]);
        $cremes = $categoryRepo->findOneBy(['name' => 'Crèmes solaires', 'hma_service' => $company]);
        $bebes = $categoryRepo->findOneBy(['name' => 'Laits infantiles', 'hma_service' => $company]);

        echo "💊 Chargement des produits...\n";

        // ✅ Produits : [nom, barcode, catégorie, prix achat, prix vente, stock, min, description, unité, dosage, forme]
        $products = [
            // Antalgiques
            ['Paracétamol 500mg', 'PARA500001', $antalgiques, 100.00, 250.00, 500, 50, 'Boîte de 20 comprimés', 'boîte', '500mg', 'comprimé'],
            ['Ibuprofène 400mg', 'IBU400001', $antalgiques, 150.00, 350.00, 300, 30, 'Boîte de 20 comprimés', 'boîte', '400mg', 'comprimé'],
            ['Aspirine 500mg', 'ASP500001', $antalgiques, 80.00, 200.00, 400, 40, 'Boîte de 20 comprimés', 'boîte', '500mg', 'comprimé'],
            ['Doliprane 1000mg', 'DOLIP1000', $antalgiques, 200.00, 450.00, 250, 25, 'Boîte de 8 comprimés', 'boîte', '1000mg', 'comprimé'],

            // Antibiotiques
            ['Amoxicilline 500mg', 'AMOX500001', $antibiotiques, 300.00, 650.00, 150, 20, 'Boîte de 12 gélules', 'boîte', '500mg', 'gélule'],
            ['Azithromycine 250mg', 'AZITH250', $antibiotiques, 500.00, 1100.00, 100, 15, 'Boîte de 6 comprimés', 'boîte', '250mg', 'comprimé'],
            ['Ciprofloxacine 500mg', 'CIPRO500', $antibiotiques, 400.00, 850.00, 120, 15, 'Boîte de 10 comprimés', 'boîte', '500mg', 'comprimé'],

            // Vitamines
            ['Vitamine C 500mg', 'VITC500001', $vitamines, 120.00, 300.00, 600, 50, 'Flacon de 60 comprimés', 'flacon', '500mg', 'comprimé'],
            ['Vitamine D3 1000UI', 'VITD30001', $vitamines, 200.00, 500.00, 400, 40, 'Flacon de 90 gouttes', 'flacon', '1000UI', 'gouttes'],
            ['Multivitamines Adulte', 'MULTIVIT01', $vitamines, 350.00, 850.00, 300, 30, 'Boîte de 30 comprimés', 'boîte', null, 'comprimé'],

            // Crèmes solaires
            ['Crème solaire SPF 50+', 'SOL50001', $cremes, 800.00, 1800.00, 200, 20, 'Tube de 200ml', 'tube', 'SPF 50+', 'crème'],
            ['Lait solaire SPF 30', 'SOL30001', $cremes, 600.00, 1400.00, 250, 25, 'Tube de 200ml', 'tube', 'SPF 30', 'lait'],

            // Bébés
            ['Lait infantile 1er âge', 'LAIT1001', $bebes, 1200.00, 2500.00, 150, 15, 'Boîte de 800g', 'boîte', null, 'poudre'],
            ['Lait infantile 2e âge', 'LAIT2001', $bebes, 1100.00, 2300.00, 180, 18, 'Boîte de 800g', 'boîte', null, 'poudre'],
        ];

        $total = 0;
        foreach ($products as $data) {
            [$name, $barcode, $category, $purchasePrice, $salePrice, $stock, $minStock, $description, $unit, $dosage, $form] = $data;

            if (!$category) {
                echo "⚠️ Catégorie introuvable pour {$name}, ignoré.\n";
                continue;
            }

            $product = new Product();
            $product->setName($name);
            $product->setSlug($this->generateSlug($name));
            $product->setBarcode($barcode);
            $product->setCategory($category);
            $product->setHmaService($company);
            $product->setUser($user);
            $product->setDescription($description);
            $product->setPurchasePrice((string) $purchasePrice);
            $product->setSalePrice((string) $salePrice);
            $product->setStockQuantity($stock);
            $product->setMinQuantity($minStock);
            $product->setUnit($unit);
            $product->setDosage($dosage);
            $product->setForm($form);
            $product->setIsActive(true);
            $product->setIsPublic(true);
            $product->setSubscriptionActive(true);
            $product->setHasExpiryDate(true);
            $product->setIsStorable(true);
            $product->setPrescriptionRequired(false);
            $product->setCreatedAt(new \DateTime());
            $manager->persist($product);
            $total++;
            echo "  💊 {$name} ({$stock} unités) - {$purchasePrice} FCFA → {$salePrice} FCFA\n";
        }

        $manager->flush();
        echo "\n✅ {$total} produits créés !\n";
    }

    private function generateSlug(string $name): string
    {
        $slug = strtolower($name);
        $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
        $slug = trim($slug, '-');
        return $slug . '-' . uniqid();
    }
}