<?php

// src/Controller/DashboardController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Récupérez l'utilisateur connecté
        $user = $this->getUser();
        
        // Données statistiques (à remplacer par vos vraies données)
        $stats = $this->getDashboardStats();
        
        // Selon le rôle, préparez les données appropriées
        $dashboardData = [
            'userRole' => $this->getUserRoleLabel($user),
            'today' => new \DateTime(),
            'stats' => $stats,
            'todaySales' => [
                'count' => 42,
                'amount' => 1250000
            ],
            'stockAlerts' => [
                'lowStock' => 15,
                'expiringSoon' => 8
            ]
        ];
        
        return $this->render('dashboard/index.html.twig', [
            'dashboardData' => $dashboardData,
            'stats' => $stats  // Pour la nouvelle version
        ]);
    }
    
    private function getDashboardStats(): array
    {
        // Ici, récupérez vos vraies statistiques depuis la base de données
        // Pour l'exemple, je mets des données fictives
        
        return [
            'totalProducts' => 1250,
            'lowStockProducts' => 25,
            'totalSales' => 845,
            'totalRevenue' => 45000000,
            'totalCustomers' => 320,
            'todayOrders' => 42,
            'pendingOrders' => 12,
            'totalUsers' => 15
        ];
    }
    
    private function getUserRoleLabel($user): string
    {
        if (!$user) {
            return 'Visiteur';
        }
        
        $roles = $user->getRoles();
        
        if (in_array('ROLE_ADMIN', $roles)) {
            return 'Administrateur';
        } elseif (in_array('ROLE_MANAGER', $roles)) {
            return 'Gestionnaire';
        } elseif (in_array('ROLE_STOCK_MANAGER', $roles)) {
            return 'Responsable Stock';
        } elseif (in_array('ROLE_CASHIER', $roles)) {
            return 'Caissier';
        }
        
        return 'Utilisateur';
    }
}