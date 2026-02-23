<?php
// src/Service/MenuBuilder.php

namespace App\Service;

use Symfony\Component\Security\Core\Security;
use App\Entity\User;

class MenuBuilder
{
    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function getMenuForCurrentUser(): array
    {
        $user = $this->security->getUser();
        if (!$user) {
            return $this->getPublicMenu();
        }

        $menus = [];
        
        // Menu commun à tous les utilisateurs connectés
        $menus[] = $this->getDashboardMenuItem();
        
        // Ajout des menus selon la hiérarchie des rôles
        if ($this->security->isGranted('ROLE_SUPER_ADMIN')) {
            $menus = array_merge($menus, $this->getSuperAdminMenu());
        }
        elseif ($this->security->isGranted('ROLE_ADMIN')) {
            $menus = array_merge($menus, $this->getAdminMenu());
        }
        elseif ($this->security->isGranted('ROLE_MANAGER')) {
            $menus = array_merge($menus, $this->getManagerMenu());
        }
        
        // Rôles indépendants (peuvent être combinés avec d'autres)
        if ($this->security->isGranted('ROLE_STOCK_MANAGER') && !$this->security->isGranted('ROLE_MANAGER')) {
            $menus = array_merge($menus, $this->getStockManagerMenu());
        }
        
        if ($this->security->isGranted('ROLE_CASHIER') && !$this->security->isGranted('ROLE_MANAGER')) {
            $menus = array_merge($menus, $this->getCashierMenu());
        }
        
        // Menu rapport (uniquement pour les rôles autorisés)
        if ($this->security->isGranted('ROLE_ADMIN') || 
            $this->security->isGranted('ROLE_MANAGER') || 
            $this->security->isGranted('ROLE_STOCK_MANAGER')) {
            $menus = array_merge($menus, $this->getReportsMenu());
        }
        
        // Menu profil
        $menus = array_merge($menus, $this->getProfileMenu());
        
        return $menus;
    }

    private function getPublicMenu(): array
    {
        return [
            [
                'type' => 'link',
                'route' => 'app_login',
                'label' => 'Connexion',
                'icon' => 'bi bi-box-arrow-in-right'
            ]
        ];
    }

    private function getDashboardMenuItem(): array
    {
        return [
            'type' => 'link',
            'route' => 'app_dashboard',
            'label' => 'Tableau de bord',
            'icon' => 'bi bi-speedometer2'
        ];
    }

    private function getSuperAdminMenu(): array
    {
        return [
            [
                'type' => 'section',
                'label' => 'SUPER ADMINISTRATION'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Plateforme SaaS',
                'icon' => 'bi bi-cloud',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_super_admin_hma_service_index',
                        'label' => 'Toutes les entreprises',
                        'icon' => 'bi bi-building',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Abonnements',
                        'icon' => 'bi bi-credit-card',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Statistiques globales',
                        'icon' => 'bi bi-bar-chart',
                        'coming_soon' => true
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Gestion système',
                'icon' => 'bi bi-gear-wide-connected',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index',
                        'label' => 'Tous les utilisateurs',
                        'icon' => 'bi bi-people'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_new',
                        'label' => 'Créer un utilisateur',
                        'icon' => 'bi bi-person-plus'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Configuration globale',
                        'icon' => 'bi bi-sliders',
                        'coming_soon' => true
                    ]
                ]
            ]
        ];
    }

    private function getAdminMenu(): array
    {
        return [
            [
                'type' => 'section',
                'label' => 'ADMINISTRATION'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Gestion entreprise',
                'icon' => 'bi bi-building-gear',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Paramètres entreprise',
                        'icon' => 'bi bi-sliders',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Abonnement',
                        'icon' => 'bi bi-credit-card',
                        'coming_soon' => true
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Utilisateurs',
                'icon' => 'bi bi-people',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index',
                        'label' => 'Liste des utilisateurs',
                        'icon' => 'bi bi-list-ul'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_new',
                        'label' => 'Créer un utilisateur',
                        'icon' => 'bi bi-person-plus'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Gestion des rôles',
                        'icon' => 'bi bi-shield',
                        'coming_soon' => true
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Fournisseurs',
                'icon' => 'bi bi-truck',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Liste des fournisseurs',
                        'icon' => 'bi bi-list-ul',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Ajouter un fournisseur',
                        'icon' => 'bi bi-plus-circle',
                        'coming_soon' => true
                    ]
                ]
            ]
        ];
    }

    private function getManagerMenu(): array
    {
        return [
            [
                'type' => 'section',
                'label' => 'GESTION'
            ],
            [
                'type' => 'link',
                'route' => 'app_manager_team_index',
                'label' => 'Mon équipe',
                'icon' => 'bi bi-people'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Produits',
                'icon' => 'bi bi-box',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Catalogue',
                        'icon' => 'bi bi-grid',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Nouveau produit',
                        'icon' => 'bi bi-plus-circle',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Catégories',
                        'icon' => 'bi bi-tags',
                        'coming_soon' => true
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Ventes',
                'icon' => 'bi bi-cart',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Commandes',
                        'icon' => 'bi bi-receipt',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Nouvelle commande',
                        'icon' => 'bi bi-plus-circle',
                        'coming_soon' => true
                    ]
                ]
            ]
        ];
    }

    private function getStockManagerMenu(): array
    {
        return [
            [
                'type' => 'section',
                'label' => 'STOCK'
            ],
            [
                'type' => 'link',
                'route' => 'app_user_index', // Temporaire
                'label' => 'Dashboard stock',
                'icon' => 'bi bi-pie-chart',
                'coming_soon' => true
            ],
            [
                'type' => 'dropdown',
                'label' => 'Gestion stock',
                'icon' => 'bi bi-boxes',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Inventaire',
                        'icon' => 'bi bi-list-check',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Mouvements',
                        'icon' => 'bi bi-arrow-left-right',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Alertes stock',
                        'icon' => 'bi bi-exclamation-triangle',
                        'coming_soon' => true
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Approvisionnement',
                'icon' => 'bi bi-truck',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Commandes fournisseurs',
                        'icon' => 'bi bi-clipboard',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Fournisseurs',
                        'icon' => 'bi bi-person-lines-fill',
                        'coming_soon' => true
                    ]
                ]
            ]
        ];
    }

    private function getCashierMenu(): array
    {
        return [
            [
                'type' => 'section',
                'label' => 'CAISSE'
            ],
            [
                'type' => 'link',
                'route' => 'app_user_index', // Temporaire
                'label' => 'Caisse',
                'icon' => 'bi bi-cash-register',
                'badge' => 'Bientôt',
                'coming_soon' => true
            ],
            [
                'type' => 'dropdown',
                'label' => 'Ventes',
                'icon' => 'bi bi-receipt',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Ventes du jour',
                        'icon' => 'bi bi-sun',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Historique',
                        'icon' => 'bi bi-clock-history',
                        'coming_soon' => true
                    ]
                ]
            ],
            [
                'type' => 'link',
                'route' => 'app_user_index', // Temporaire
                'label' => 'Retours',
                'icon' => 'bi bi-arrow-return-left',
                'coming_soon' => true
            ]
        ];
    }

    private function getReportsMenu(): array
    {
        $children = [];
        
        if ($this->security->isGranted('ROLE_ADMIN')) {
            $children[] = [
                'type' => 'link',
                'route' => 'app_user_index', // Temporaire
                'label' => 'Rapport financier',
                'icon' => 'bi bi-calculator',
                'coming_soon' => true
            ];
        }
        
        $children[] = [
            'type' => 'link',
            'route' => 'app_user_index', // Temporaire
            'label' => 'Rapport des ventes',
            'icon' => 'bi bi-graph-up',
            'coming_soon' => true
        ];
        
        $children[] = [
            'type' => 'link',
            'route' => 'app_user_index', // Temporaire
            'label' => 'Rapport de stock',
            'icon' => 'bi bi-box',
            'coming_soon' => true
        ];
        
        return [
            [
                'type' => 'section',
                'label' => 'RAPPORTS'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Analyses',
                'icon' => 'bi bi-bar-chart',
                'children' => $children
            ]
        ];
    }

    private function getProfileMenu(): array
    {
        /** @var User|null $user */
        $user = $this->security->getUser();
        
        return [
            [
                'type' => 'section',
                'label' => 'MON COMPTE'
            ],
            [
                'type' => 'dropdown',
                'label' => $user ? $user->getFullName() : 'Mon Profil',
                'icon' => 'bi bi-person-circle',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_profile_show',
                        'label' => 'Voir mon profil',
                        'icon' => 'bi bi-eye'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_profile_edit',
                        'label' => 'Modifier mon profil',
                        'icon' => 'bi bi-pencil'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_change_password',
                        'label' => 'Changer mot de passe',
                        'icon' => 'bi bi-key'
                    ],
                    [
                        'type' => 'divider'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_logout',
                        'label' => 'Déconnexion',
                        'icon' => 'bi bi-box-arrow-right',
                        'danger' => true
                    ]
                ]
            ]
        ];
    }
}