<?php
// src/Controller/DynamicStyleController.php

namespace App\Controller;

use App\Entity\HmaService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DynamicStyleController extends AbstractController
{
    #[Route('/css/company-theme.css', name: 'app_dynamic_css')]
    public function getCompanyTheme(): Response
    {
        $user = $this->getUser();
        $primaryColor = '#0463f1';
        $secondaryColor = '#8b5cf6';
        
        // Correction : la méthode s'appelle getHmaService(), pas getHmaServiceId()
        if ($user && method_exists($user, 'getHmaService')) {
            $company = $user->getHmaService();
            
            if ($company) {
                // Vérifier si les méthodes existent avant de les appeler
                $primaryColor = method_exists($company, 'getPrimaryColor') && $company->getPrimaryColor() 
                    ? $company->getPrimaryColor() 
                    : '#0463f1';
                    
                $secondaryColor = method_exists($company, 'getSecondaryColor') && $company->getSecondaryColor() 
                    ? $company->getSecondaryColor() 
                    : '#8b5cf6';
            }
        }
        
        // Calculer les variantes
        $primaryDark = $this->adjustColor($primaryColor, -15);
        $primaryLight = $this->adjustColor($primaryColor, 20);
        
        $css = "
            :root {
                --primary-color: {$primaryColor};
                --primary-dark: {$primaryDark};
                --primary-light: {$primaryLight};
                --secondary-color: {$secondaryColor};
            }
            
            .sidebar {
                background: var(--primary-color) !important;
            }
            
            .btn-primary {
                background: var(--primary-color) !important;
                border-color: var(--primary-color) !important;
            }
            
            .btn-primary:hover {
                background: var(--primary-dark) !important;
                border-color: var(--primary-dark) !important;
            }
            
            .btn-gradient {
                background: var(--primary-color) !important;
            }
            
            .btn-gradient:hover {
                background: var(--primary-dark) !important;
            }
            
            .universal-search-btn {
                background: var(--primary-color) !important;
            }
            
            .universal-search-btn:hover {
                background: var(--primary-dark) !important;
            }
            
            .footer::before {
                background: var(--primary-color) !important;
            }
            
            .footer-logo {
                color: var(--primary-color) !important;
            }
            
            .navbar-brand:hover {
                color: var(--primary-color) !important;
            }
            
            .text-primary {
                color: var(--primary-color) !important;
            }
            
            .btn-outline-primary {
                border-color: var(--primary-color) !important;
                color: var(--primary-color) !important;
            }
            
            .btn-outline-primary:hover {
                background: var(--primary-color) !important;
                color: white !important;
            }
            
            .kpi-card.primary::before {
                background: linear-gradient(90deg, var(--primary-color), var(--primary-dark)) !important;
            }
            
            .chart-title i {
                color: var(--primary-color) !important;
            }
            
            .badge.bg-primary {
                background: var(--primary-color) !important;
            }
            
            .pagination .page-item.active .page-link {
                background: var(--primary-color) !important;
                border-color: var(--primary-color) !important;
            }
            
            a:not(.btn):not(.nav-link):not(.dropdown-item):not(.footer-link) {
                color: var(--primary-color) !important;
            }
            
            a:not(.btn):not(.nav-link):not(.dropdown-item):not(.footer-link):hover {
                color: var(--primary-dark) !important;
            }
            
            .progress-bar-custom.bg-primary {
                background: var(--primary-color) !important;
            }
        ";
        
        return new Response($css, 200, [
            'Content-Type' => 'text/css',
            'Cache-Control' => 'public, max-age=3600'
        ]);
    }
    
    private function adjustColor(string $hex, int $percent): string
    {
        // Supprimer le # si présent
        $hex = ltrim($hex, '#');
        
        // Convertir en RGB
        if (strlen($hex) === 3) {
            $r = hexdec(str_repeat(substr($hex, 0, 1), 2));
            $g = hexdec(str_repeat(substr($hex, 1, 1), 2));
            $b = hexdec(str_repeat(substr($hex, 2, 1), 2));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        
        // Ajuster la luminosité
        $r = max(0, min(255, $r + $r * $percent / 100));
        $g = max(0, min(255, $g + $g * $percent / 100));
        $b = max(0, min(255, $b + $b * $percent / 100));
        
        return sprintf('#%02x%02x%02x', $r, $g, $b);
    }
}