<?php
// src/Controller/DashboardController.php

namespace App\Controller;

use App\Repository\DashboardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(DashboardRepository $dashboardRepository): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        // Récupération de l'entreprise via la méthode existante
        $company = $user ? $user->getHmaServiceId() : null;

        // Déterminer si l'entreprise est un restaurant
        $isRestaurant = false;
        if ($company) {
            $companyType = $company->getType();
            $isRestaurant = $companyType === 'restaurant';
        }

        // Stats par défaut si pas d'entreprise
        $stats = [
            'total_products' => 0,
            'total_orders' => 0,
            'total_revenue' => 0,
            'total_customers' => 0,
            'today_orders' => 0,
            'today_revenue' => 0,
            'low_stock' => 0,
            'total_users' => 0,
            'pending_orders' => 0,
        ];

        $recentMovements = [];
        $salesStats = [];
        $topProducts = [];
        $returnStats = [
            'total' => 0,
            'pending' => 0,
            'approved' => 0,
            'completed' => 0,
            'refund_amount' => 0,
        ];

        if ($company) {
            // Récupérer les statistiques
            $stats = $dashboardRepository->getDashboardStats($company);
            
            // Récupérer les mouvements récents
            $recentMovements = $dashboardRepository->getRecentStockMovements($company, 10);
            
            // Récupérer les statistiques de ventes
            $salesStats = $dashboardRepository->getSalesStats($company, 30);
            
            // Récupérer les produits les plus vendus
            $topProducts = $dashboardRepository->getTopProducts($company, 5);
            
            // Récupérer les statistiques des retours
            $returnStats = $dashboardRepository->getReturnStats($company);
        }

        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
            'company' => $company,
            'stats' => $stats,
            'recentMovements' => $recentMovements,
            'salesStats' => $salesStats,
            'topProducts' => $topProducts,
            'returnStats' => $returnStats,
            'isRestaurant' => $isRestaurant,
        ]);
    }

    /**
     * ✅ Route pour basculer la visibilité de la boutique (uniquement company_public)
     */
    #[Route('/toggle-visibility', name: 'app_dashboard_toggle_visibility', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function toggleVisibility(Request $request, EntityManagerInterface $em): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        if (!$user) {
            $this->addFlash('error', 'Utilisateur non connecté.');
            return $this->redirectToRoute('app_dashboard');
        }

        // ✅ Récupération de l'entreprise via l'EntityManager pour être sûr d'avoir une entité gérée
        $company = $user->getHmaServiceId();
        
        if (!$company) {
            $this->addFlash('error', 'Aucune entreprise trouvée.');
            return $this->redirectToRoute('app_dashboard');
        }

        // ✅ Vérification du token CSRF
        if (!$this->isCsrfTokenValid('toggle_visibility', $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_dashboard');
        }

        // ✅ Récupérer l'ID de l'entreprise pour recharger l'entité
        $companyId = $company->getId();
        
        // ✅ Recharger l'entité depuis l'EntityManager pour être sûr
        $managedCompany = $em->getRepository(\App\Entity\HmaService::class)->find($companyId);
        
        if (!$managedCompany) {
            $this->addFlash('error', 'Entreprise introuvable.');
            return $this->redirectToRoute('app_dashboard');
        }

        $action = $request->request->get('action', '');
        $currentStatus = $managedCompany->isCompanyPublic();
        
        if ($action === 'hide') {
            $managedCompany->setCompanyPublic(false);
            $message = 'Votre boutique a été masquée avec succès.';
        } elseif ($action === 'show') {
            $managedCompany->setCompanyPublic(true);
            $message = 'Votre boutique est maintenant visible sur le marketplace.';
        } else {
            // Toggle par défaut
            $managedCompany->setCompanyPublic(!$currentStatus);
            $message = $managedCompany->isCompanyPublic() 
                ? 'Votre boutique est maintenant visible sur le marketplace.' 
                : 'Votre boutique a été masquée avec succès.';
        }

        // ✅ Sauvegarde explicite
        $em->persist($managedCompany);
        $em->flush();
        
        // ✅ Vérification que la modification a bien été prise en compte
        $newStatus = $managedCompany->isCompanyPublic();
        
        // ✅ Ajout d'un message de confirmation avec le statut
        $statusText = $newStatus ? 'visible' : 'masquée';
        $this->addFlash('success', $message . " (Statut: {$statusText})");

        return $this->redirectToRoute('app_dashboard');
    }

    /**
     * ✅ Route pour enregistrer les périodes de garde
     */
    #[Route('/guard-periods', name: 'app_dashboard_guard_periods', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function saveGuardPeriods(Request $request, EntityManagerInterface $em): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        if (!$user) {
            $this->addFlash('error', 'Utilisateur non connecté.');
            return $this->redirectToRoute('app_dashboard');
        }

        $company = $user->getHmaServiceId();
        
        if (!$company) {
            $this->addFlash('error', 'Aucune entreprise trouvée.');
            return $this->redirectToRoute('app_dashboard');
        }

        // ✅ Vérification du token CSRF
        if (!$this->isCsrfTokenValid('guard_periods', $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_dashboard');
        }

        // ✅ Recharger l'entité depuis l'EntityManager pour être sûr
        $managedCompany = $em->getRepository(\App\Entity\HmaService::class)->find($company->getId());
        
        if (!$managedCompany) {
            $this->addFlash('error', 'Entreprise introuvable.');
            return $this->redirectToRoute('app_dashboard');
        }

        $periods = $request->request->all('guard_periods');
        $validPeriods = [];

        if ($periods) {
            foreach ($periods as $period) {
                if (!empty($period['day']) && !empty($period['start']) && !empty($period['end'])) {
                    $validPeriods[] = [
                        'day' => $period['day'],
                        'start' => $period['start'],
                        'end' => $period['end'],
                    ];
                }
            }
        }

        $managedCompany->setGuardPeriods($validPeriods);
        
        // ✅ Sauvegarde explicite
        $em->persist($managedCompany);
        $em->flush();

        $count = count($validPeriods);
        $this->addFlash('success', $count > 0 
            ? "{$count} période(s) de garde enregistrée(s) avec succès." 
            : 'Toutes les périodes de garde ont été supprimées.');

        return $this->redirectToRoute('app_dashboard');
    }
}