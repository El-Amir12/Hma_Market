<?php
// src/Controller/Marketplace/PharmacySearchController.php

namespace App\Controller\Marketplace;

use App\Repository\HmaServiceRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/marketplace/pharmacies')]
class PharmacySearchController extends AbstractController
{
    private const COUNTRY_NAMES = [
        'BJ' => 'Bénin',
        'FR' => 'France',
        'CM' => 'Cameroun',
        'CI' => "Côte d'Ivoire",
        'SN' => 'Sénégal',
        'TG' => 'Togo',
        'GH' => 'Ghana',
        'NG' => 'Nigeria',
        'ML' => 'Mali',
        'NE' => 'Niger',
        'DZ' => 'Algérie',
        'MA' => 'Maroc',
        'TN' => 'Tunisie',
        'US' => 'États-Unis',
        'CA' => 'Canada',
        'BE' => 'Belgique',
        'CH' => 'Suisse',
        'LU' => 'Luxembourg',
    ];

    // Jours de la semaine pour l'affichage
    private const DAYS_MAP = [
        'monday' => 'Lundi',
        'tuesday' => 'Mardi',
        'wednesday' => 'Mercredi',
        'thursday' => 'Jeudi',
        'friday' => 'Vendredi',
        'saturday' => 'Samedi',
        'sunday' => 'Dimanche',
    ];

    #[Route('/search', name: 'marketplace_pharmacy_search')]
    public function search(
        Request $request,
        HmaServiceRepository $hmaServiceRepository,
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository
    ): Response {
        $mode = $request->query->get('mode', 'pharmacy');
        $country = $request->query->get('country');
        $city = $request->query->get('city');
        $pharmacyId = $request->query->get('pharmacy');
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 12;
        $searchPharmacy = $request->query->get('search_pharmacy');

        $pharmacies = [];
        $selectedPharmacyData = null;
        $categories = [];
        $products = [];
        $totalPharmacies = 0;
        $forms = [];
        $filterApplied = $request->query->get('filter_applied') === '1';

        // ============================================================ //
        // 1. CHARGEMENT DE LA PHARMACIE SÉLECTIONNÉE                   //
        // ============================================================ //
        if ($pharmacyId) {
            $selectedPharmacyData = $hmaServiceRepository->find($pharmacyId);
            
            if ($selectedPharmacyData && $mode === 'product') {
                // ============================================================ //
                // 1.1 CHARGEMENT DES CATÉGORIES                                 //
                // ✅ is_active = true                                           //
                // ✅ is_public = true (géré par l'abonnement)                  //
                // ✅ company_public = true (géré par l'utilisateur)            //
                // ============================================================ //
                $allCategories = $categoryRepository->createQueryBuilder('c')
                    ->where('c.hma_service = :pharmacyId')
                    ->andWhere('c.is_active = :isActive')
                    ->andWhere('c.is_public = :isPublic')
                    ->andWhere('c.company_public = :companyPublic')
                    ->setParameter('pharmacyId', $pharmacyId)
                    ->setParameter('isActive', true)
                    ->setParameter('isPublic', true)
                    ->setParameter('companyPublic', true)
                    ->orderBy('c.parent', 'ASC')
                    ->addOrderBy('c.name', 'ASC')
                    ->getQuery()
                    ->getResult();

                // Calculer le niveau de chaque catégorie
                $categories = [];
                foreach ($allCategories as $category) {
                    $level = 0;
                    $parent = $category->getParent();
                    while ($parent !== null) {
                        $level++;
                        $parent = $parent->getParent();
                    }
                    $categories[] = [
                        'id' => $category->getId(),
                        'name' => $category->getName(),
                        'level' => $level,
                        'productCount' => $category->getProducts()->count(),
                    ];
                }

                // ============================================================ //
                // 1.2 CHARGEMENT DES FORMES (DISTINCT)                         //
                // ✅ is_active = true                                           //
                // ✅ is_public = true (géré par l'abonnement)                  //
                // ✅ company_public = true (géré par l'utilisateur)            //
                // ============================================================ //
                $formsResult = $productRepository->createQueryBuilder('p')
                    ->select('DISTINCT p.form as form')
                    ->where('p.hma_service = :pharmacyId')
                    ->andWhere('p.is_active = :isActive')
                    ->andWhere('p.is_public = :isPublic')
                    ->andWhere('p.company_public = :companyPublic')
                    ->andWhere('p.form IS NOT NULL')
                    ->andWhere('p.form != :empty')
                    ->setParameter('pharmacyId', $pharmacyId)
                    ->setParameter('isActive', true)
                    ->setParameter('isPublic', true)
                    ->setParameter('companyPublic', true)
                    ->setParameter('empty', '')
                    ->orderBy('p.form', 'ASC')
                    ->getQuery()
                    ->getResult();

                foreach ($formsResult as $form) {
                    if ($form['form']) {
                        $forms[] = $form['form'];
                    }
                }

                // ============================================================ //
                // 1.3 CHARGEMENT DES PRODUITS                                   //
                // ✅ is_active = true                                           //
                // ✅ is_public = true (géré par l'abonnement)                  //
                // ✅ company_public = true (géré par l'utilisateur)            //
                // ✅ Les filtres sont appliqués UNIQUEMENT si filter_applied   //
                // ============================================================ //
                $qb = $productRepository->createQueryBuilder('p')
                    ->leftJoin('p.category', 'c')
                    ->where('p.hma_service = :pharmacyId')
                    ->andWhere('p.is_active = :isActive')
                    ->andWhere('p.is_public = :isPublic')
                    ->andWhere('p.company_public = :companyPublic')
                    ->setParameter('pharmacyId', $pharmacyId)
                    ->setParameter('isActive', true)
                    ->setParameter('isPublic', true)
                    ->setParameter('companyPublic', true);

                // ⚠️ Les filtres sont appliqués UNIQUEMENT si filter_applied = 1
                if ($filterApplied) {
                    $categoryId = $request->query->get('category');
                    if ($categoryId) {
                        $qb->andWhere('p.category = :categoryId')
                           ->setParameter('categoryId', $categoryId);
                    }

                    $form = $request->query->get('form');
                    if ($form) {
                        $qb->andWhere('p.form = :form')
                           ->setParameter('form', $form);
                    }

                    $dosage = $request->query->get('dosage');
                    if ($dosage) {
                        $qb->andWhere('p.dosage LIKE :dosage')
                           ->setParameter('dosage', '%' . $dosage . '%');
                    }

                    $prescriptionRequired = $request->query->get('prescription_required');
                    if ($prescriptionRequired !== null && $prescriptionRequired !== '') {
                        $qb->andWhere('p.prescription_required = :prescription')
                           ->setParameter('prescription', $prescriptionRequired === '1');
                    }
                }

                $products = $qb->orderBy('p.name', 'ASC')
                    ->getQuery()
                    ->getResult();
            }
        }

        // ============================================================ //
        // 2. CHARGEMENT DES PHARMACIES SELON LE MODE                    //
        // ============================================================ //
        if ($city) {
            if ($mode === 'pharmacy') {
                // ============================================================ //
                // 2.1 MODE PHARMACIE : UNIQUEMENT LES PHARMACIES DE GARDE      //
                // ============================================================ //
                $allPharmacies = $hmaServiceRepository->createQueryBuilder('h')
                    ->where('h.city = :city')
                    ->andWhere('h.companyType = :type')
                    ->andWhere('h.isActive = :isActive')
                    ->andWhere('h.isPublic = :isPublic')
                    ->andWhere('h.company_public = :companyPublic')
                    ->setParameter('city', $city)
                    ->setParameter('type', 'pharmacy')
                    ->setParameter('isActive', true)
                    ->setParameter('isPublic', true)
                    ->setParameter('companyPublic', true);

                if ($searchPharmacy) {
                    $allPharmacies->andWhere('h.companyName LIKE :search')
                        ->setParameter('search', '%' . $searchPharmacy . '%');
                }

                $allPharmacies = $allPharmacies->orderBy('h.companyName', 'ASC')
                    ->getQuery()
                    ->getResult();

                // ✅ Filtrer UNIQUEMENT les pharmacies de garde
                $now = new \DateTime();
                $currentDay = strtolower($now->format('l'));
                $currentTime = $now->format('H:i');

                $guardPharmacies = [];
                foreach ($allPharmacies as $pharmacy) {
                    $guardPeriods = $pharmacy->getGuardPeriods() ?? [];
                    if (is_string($guardPeriods)) {
                        $guardPeriods = json_decode($guardPeriods, true) ?? [];
                    }

                    $isOnGuard = false;
                    foreach ($guardPeriods as $period) {
                        if (isset($period['day']) && isset($period['start']) && isset($period['end'])) {
                            if (strtolower($period['day']) === $currentDay) {
                                if ($currentTime >= $period['start'] && $currentTime <= $period['end']) {
                                    $isOnGuard = true;
                                    break;
                                }
                            }
                        }
                    }

                    // ✅ On garde UNIQUEMENT les pharmacies de garde
                    if ($isOnGuard) {
                        $guardPharmacies[] = [
                            'id' => $pharmacy->getId(),
                            'name' => $pharmacy->getCompanyName(),
                            'address' => $pharmacy->getAddress(),
                            'phone' => $pharmacy->getPhone(),
                            'city' => $pharmacy->getCity(),
                            'email' => $pharmacy->getEmail(),
                            'latitude' => $pharmacy->getLatitude(),
                            'longitude' => $pharmacy->getLongitude(),
                            'guardPeriods' => $guardPeriods,
                            'isOnGuard' => true,
                            'guardDays' => $this->getGuardDays($guardPeriods),
                        ];
                    }
                }

                $totalPharmacies = count($guardPharmacies);
                $pharmacies = array_slice($guardPharmacies, ($page - 1) * $limit, $limit);

            } else {
                // ============================================================ //
                // 2.2 MODE PRODUIT : TOUTES LES PHARMACIES DE LA VILLE         //
                // ============================================================ //
                $qbPharmacies = $hmaServiceRepository->createQueryBuilder('h')
                    ->select('h.id', 'h.companyName as name', 'h.address', 'h.phone', 'h.city', 'h.email')
                    ->where('h.city = :city')
                    ->andWhere('h.companyType = :type')
                    ->andWhere('h.isActive = :isActive')
                    ->andWhere('h.isPublic = :isPublic')
                    ->andWhere('h.company_public = :companyPublic')
                    ->setParameter('city', $city)
                    ->setParameter('type', 'pharmacy')
                    ->setParameter('isActive', true)
                    ->setParameter('isPublic', true)
                    ->setParameter('companyPublic', true)
                    ->orderBy('h.companyName', 'ASC');

                $pharmacies = $qbPharmacies->getQuery()->getResult();
                
                // Ne pas paginer les pharmacies en mode product
                $totalPharmacies = count($pharmacies);
            }
        }

        // Récupérer les valeurs des filtres pour les afficher
        $selectedCategory = $request->query->get('category');
        $selectedForm = $request->query->get('form');
        $selectedDosage = $request->query->get('dosage');
        $prescriptionRequired = $request->query->get('prescription_required');

        return $this->render('marketplace/pharmacy/search.html.twig', [
            'mode' => $mode,
            'selectedCountry' => $country,
            'selectedCity' => $city,
            'selectedPharmacy' => $pharmacyId,
            'selectedPharmacyData' => $selectedPharmacyData,
            'pharmacies' => $pharmacies,
            'categories' => $categories,
            'products' => $products,
            'forms' => $forms,
            'currentPage' => $page,
            'totalPharmacies' => $totalPharmacies,
            'limit' => $limit,
            'totalPages' => $mode === 'product' ? 1 : ($totalPharmacies > 0 ? ceil($totalPharmacies / $limit) : 1),
            'searchPharmacy' => $searchPharmacy,
            'selectedCategory' => $selectedCategory,
            'selectedForm' => $selectedForm,
            'selectedDosage' => $selectedDosage,
            'prescriptionRequired' => $prescriptionRequired,
            'filterApplied' => $filterApplied,
            'daysMap' => self::DAYS_MAP,
        ]);
    }

    /**
     * Vérifie si la pharmacie est actuellement de garde
     */
    private function isOnGuard(array $guardPeriods): bool
    {
        if (empty($guardPeriods)) {
            return false;
        }

        $now = new \DateTime();
        $currentDay = strtolower($now->format('l'));
        $currentTime = $now->format('H:i');

        foreach ($guardPeriods as $period) {
            if (isset($period['day']) && isset($period['start']) && isset($period['end'])) {
                if (strtolower($period['day']) === $currentDay) {
                    if ($currentTime >= $period['start'] && $currentTime <= $period['end']) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /**
     * Récupère les jours de garde pour affichage
     */
    private function getGuardDays(array $guardPeriods): array
    {
        if (empty($guardPeriods)) {
            return [];
        }

        $days = [];
        foreach ($guardPeriods as $period) {
            if (isset($period['day']) && isset($period['start']) && isset($period['end'])) {
                $dayKey = strtolower($period['day']);
                $days[$dayKey] = [
                    'day' => self::DAYS_MAP[$dayKey] ?? ucfirst($dayKey),
                    'start' => $period['start'],
                    'end' => $period['end'],
                ];
            }
        }
        return $days;
    }

    // ============================================================ //
    // API ROUTES                                                    //
    // ============================================================ //

    #[Route('/api/countries', name: 'api_pharmacy_countries')]
    public function getCountries(HmaServiceRepository $hmaServiceRepository): JsonResponse
    {
        $results = $hmaServiceRepository->createQueryBuilder('h')
            ->select('DISTINCT h.country as code')
            ->where('h.country IS NOT NULL')
            ->andWhere('h.country != :empty')
            ->andWhere('h.companyType = :type')
            ->andWhere('h.isActive = :isActive')
            ->andWhere('h.isPublic = :isPublic')
            ->andWhere('h.company_public = :companyPublic')
            ->setParameter('empty', '')
            ->setParameter('type', 'pharmacy')
            ->setParameter('isActive', true)
            ->setParameter('isPublic', true)
            ->setParameter('companyPublic', true)
            ->orderBy('h.country', 'ASC')
            ->getQuery()
            ->getResult();

        $countries = [];
        foreach ($results as $result) {
            $code = $result['code'];
            if ($code && trim($code) !== '') {
                $countries[] = [
                    'code' => $code,
                    'name' => self::COUNTRY_NAMES[$code] ?? $code
                ];
            }
        }

        return $this->json($countries);
    }

    #[Route('/api/cities', name: 'api_pharmacy_cities')]
    public function getCities(Request $request, HmaServiceRepository $hmaServiceRepository): JsonResponse
    {
        $country = $request->query->get('country');
        if (!$country) {
            return $this->json(['error' => 'Pays non spécifié'], 400);
        }

        $results = $hmaServiceRepository->createQueryBuilder('h')
            ->select('DISTINCT h.city as city')
            ->where('h.country = :country')
            ->andWhere('h.city IS NOT NULL')
            ->andWhere('h.city != :empty')
            ->andWhere('h.companyType = :type')
            ->andWhere('h.isActive = :isActive')
            ->andWhere('h.isPublic = :isPublic')
            ->andWhere('h.company_public = :companyPublic')
            ->setParameter('country', $country)
            ->setParameter('empty', '')
            ->setParameter('type', 'pharmacy')
            ->setParameter('isActive', true)
            ->setParameter('isPublic', true)
            ->setParameter('companyPublic', true)
            ->orderBy('h.city', 'ASC')
            ->getQuery()
            ->getResult();

        $cities = [];
        foreach ($results as $result) {
            $city = trim($result['city']);
            if ($city !== '' && !in_array($city, $cities)) {
                $cities[] = $city;
            }
        }

        return $this->json($cities);
    }

    #[Route('/api/pharmacies', name: 'api_pharmacies')]
    public function getPharmacies(Request $request, HmaServiceRepository $hmaServiceRepository): JsonResponse
    {
        $city = $request->query->get('city');
        if (!$city) {
            return $this->json([]);
        }

        $pharmacies = $hmaServiceRepository->createQueryBuilder('h')
            ->select('h.id', 'h.companyName as name', 'h.address', 'h.phone', 'h.city', 'h.email')
            ->where('h.city = :city')
            ->andWhere('h.companyType = :type')
            ->andWhere('h.isActive = :isActive')
            ->andWhere('h.isPublic = :isPublic')
            ->andWhere('h.company_public = :companyPublic')
            ->setParameter('city', $city)
            ->setParameter('type', 'pharmacy')
            ->setParameter('isActive', true)
            ->setParameter('isPublic', true)
            ->setParameter('companyPublic', true)
            ->orderBy('h.companyName', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->json($pharmacies);
    }

    #[Route('/api/pharmacy/{id}/categories', name: 'api_pharmacy_categories')]
    public function getPharmacyCategories($id, CategoryRepository $categoryRepository): JsonResponse
    {
        $categories = $categoryRepository->createQueryBuilder('c')
            ->select('c.id', 'c.name', 'c.parent')
            ->where('c.hma_service = :pharmacyId')
            ->andWhere('c.is_active = :isActive')
            ->andWhere('c.is_public = :isPublic')
            ->andWhere('c.company_public = :companyPublic')
            ->setParameter('pharmacyId', $id)
            ->setParameter('isActive', true)
            ->setParameter('isPublic', true)
            ->setParameter('companyPublic', true)
            ->orderBy('c.parent', 'ASC')
            ->addOrderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->json($categories);
    }

    #[Route('/api/pharmacy/{id}/forms', name: 'api_pharmacy_forms')]
    public function getPharmacyForms($id, ProductRepository $productRepository): JsonResponse
    {
        $forms = $productRepository->createQueryBuilder('p')
            ->select('DISTINCT p.form as form')
            ->where('p.hma_service = :pharmacyId')
            ->andWhere('p.is_active = :isActive')
            ->andWhere('p.is_public = :isPublic')
            ->andWhere('p.company_public = :companyPublic')
            ->andWhere('p.form IS NOT NULL')
            ->andWhere('p.form != :empty')
            ->setParameter('pharmacyId', $id)
            ->setParameter('isActive', true)
            ->setParameter('isPublic', true)
            ->setParameter('companyPublic', true)
            ->setParameter('empty', '')
            ->orderBy('p.form', 'ASC')
            ->getQuery()
            ->getResult();

        $formsList = [];
        foreach ($forms as $form) {
            if ($form['form']) {
                $formsList[] = $form['form'];
            }
        }

        return $this->json($formsList);
    }

    #[Route('/api/products', name: 'api_products')]
    public function getProducts(
        Request $request, 
        ProductRepository $productRepository
    ): JsonResponse {
        $pharmacyId = $request->query->get('pharmacy');
        $categoryId = $request->query->get('category');
        $form = $request->query->get('form');
        $dosage = $request->query->get('dosage');
        $prescriptionRequired = $request->query->get('prescription_required');

        if (!$pharmacyId) {
            return $this->json([]);
        }

        $qb = $productRepository->createQueryBuilder('p')
            ->select('p.id', 'p.name', 'p.salePrice', 'p.stockQuantity', 'p.prescriptionRequired', 'c.name as categoryName', 'p.form', 'p.dosage', 'p.unit', 'p.description', 'p.barcode')
            ->leftJoin('p.category', 'c')
            ->where('p.hma_service = :pharmacyId')
            ->andWhere('p.is_active = :isActive')
            ->andWhere('p.is_public = :isPublic')
            ->andWhere('p.company_public = :companyPublic')
            ->setParameter('pharmacyId', $pharmacyId)
            ->setParameter('isActive', true)
            ->setParameter('isPublic', true)
            ->setParameter('companyPublic', true);

        if ($categoryId) {
            $qb->andWhere('p.category = :categoryId')
               ->setParameter('categoryId', $categoryId);
        }

        if ($form) {
            $qb->andWhere('p.form = :form')
               ->setParameter('form', $form);
        }

        if ($dosage) {
            $qb->andWhere('p.dosage LIKE :dosage')
               ->setParameter('dosage', '%' . $dosage . '%');
        }

        if ($prescriptionRequired !== null && $prescriptionRequired !== '') {
            $qb->andWhere('p.prescription_required = :prescription')
               ->setParameter('prescription', $prescriptionRequired === '1');
        }

        $products = $qb->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->json($products);
    }
}