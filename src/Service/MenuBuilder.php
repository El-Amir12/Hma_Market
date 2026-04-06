<?php
// src/Service/MenuBuilder.php

namespace App\Service;

use Symfony\Component\Security\Core\Security;
use App\Entity\User;
use App\Entity\HmaService;
use Doctrine\ORM\Query\Exec\FinalizedSelectExecutor;

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

    private function getCompanyType(): ?string
    {
        $user = $this->security->getUser();
        if (!$user instanceof User) {
            return null;
        }
        $hmaService = $user->getHmaService();
        return $hmaService?->getType();
    }

    private function isRestaurant(): bool
    {
        return $this->getCompanyType() === 'restaurant';
    }

    private function getPublicMenu(): array
    {
        return [
            [
                'type' => 'link',
                'route' => 'app_login',
                'label' => 'Connexion',
                'icon' => 'fas fa-sign-in-alt'
            ]
        ];
    }

    private function getDashboardMenuItem(): array
    {
        return [
            'type' => 'link',
            'route' => 'app_dashboard',
            'label' => 'Tableau de bord',
            'icon' => 'fas fa-tachometer-alt'
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
                'icon' => 'fas fa-cloud',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_super_admin_subscription_plan_index', 
                        'label' => 'Types d\'abonnement',
                        'icon' => 'fas fa-tags',
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_super_admin_hma_service_index',
                        'label' => 'Toutes les entreprises',
                        'icon' => 'fas fa-building',
                        'coming_soon' => false
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Abonnements',
                        'icon' => 'fas fa-credit-card',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Statistiques globales',
                        'icon' => 'fas fa-chart-bar',
                        'coming_soon' => true
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Gestion système',
                'icon' => 'fas fa-cogs',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index',
                        'label' => 'Tous les utilisateurs',
                        'icon' => 'fas fa-users'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_new',
                        'label' => 'Créer un utilisateur',
                        'icon' => 'fas fa-user-plus'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Configuration globale',
                        'icon' => 'fas fa-sliders-h',
                        'coming_soon' => true
                    ]
                ]
            ]
        ];
    }

    private function getAdminMenu(): array
    {
        $menu = [
            [
                'type' => 'section',
                'label' => 'ADMINISTRATION'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Gestion entreprise',
                'icon' => 'fas fa-building',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Paramètres entreprise',
                        'icon' => 'fas fa-sliders-h',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Abonnement',
                        'icon' => 'fas fa-credit-card',
                        'coming_soon' => true
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Utilisateurs',
                'icon' => 'fas fa-users',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index',
                        'label' => 'Liste des utilisateurs',
                        'icon' => 'fas fa-list-ul'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_new',
                        'label' => 'Créer un utilisateur',
                        'icon' => 'fas fa-user-plus'
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Fournisseurs',
                'icon' => 'fas fa-truck',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_admin_supplier_index', 
                        'label' => 'Liste des fournisseurs',
                        'icon' => 'fas fa-list-ul',
                        'coming_soon' => false
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_supplier_new', 
                        'label' => 'Ajouter un fournisseur',
                        'icon' => 'fas fa-plus-circle',
                        'coming_soon' => false
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Approvisionnement',
                'icon' => 'fas fa-truck',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'purchase_index', 
                        'label' => 'Commandes d\'achat',
                        'icon' => 'fas fa-clipboard-list',
                        'coming_soon' => false
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_supplier_new', 
                        'label' => 'Mouvement du stock',
                        'icon' => 'fas fa-exchange-alt',
                        'coming_soon' => false
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_supplier_new', 
                        'label' => 'Gestion des lots',
                        'icon' => 'fas fa-cubes',
                        'coming_soon' => false
                    ]
                ]
            ]
        ];

        // Section Catalogue (produits) pour tous les types d'entreprises
        $catalogueChildren = [
            [
                'type' => 'link',
                'route' => 'app_admin_category_index',
                'label' => 'Catégories',
                'icon' => 'fas fa-tags',
                'coming_soon' => false
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_product_new',
                'label' => 'Nouveau produit',
                'icon' => 'fas fa-box',
                'coming_soon' => false
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_product_index', 
                'label' => 'Produits',
                'icon' => 'fas fa-boxes',
                'coming_soon' => false
            ],
        ];

        // Si ce n'est pas un restaurant, on ajoute les promotions dans Catalogue
        if (!$this->isRestaurant()) {
            $catalogueChildren[] = [
                'type' => 'link',
                'route' => 'app_admin_promotion_index', 
                'label' => 'Promotions',
                'icon' => 'fas fa-percent',
                'coming_soon' => false
            ];
            $catalogueChildren[] = [
                'type' => 'link',
                'route' => 'app_admin_promotion_category_index', 
                'label' => 'Catégories promo',
                'icon' => 'fas fa-tags',
                'coming_soon' => false
            ];
            $catalogueChildren[] = [
                'type' => 'link',
                'route' => 'app_admin_promotion_product_index',
                'label' => 'Promotions des produits',
                'icon' => 'fas fa-tag',
                'coming_soon' => false
            ];
        }

        $menu[] = [
            'type' => 'dropdown',
            'label' => 'Catalogue',
            'icon' => 'fas fa-th',
            'children' => $catalogueChildren
        ];

        // Si restaurant, on ajoute la section Menu (plats) avec ses propres promotions
        if ($this->isRestaurant()) {
            $menuChildren = [
                [
                    'type' => 'link',
                    'route' => 'app_admin_category_recipe_index', 
                    'label' => 'Catégories de plats',
                    'icon' => 'fas fa-th',
                    'coming_soon' => false
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_recipe_new',
                    'label' => 'Nouveau plat',
                    'icon' => 'fas fa-plus-circle',
                    'coming_soon' => false
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_recipe_index', // Route à créer pour liste des plats
                    'label' => 'Plats',
                    'icon' => 'fas fa-utensils',
                    'coming_soon' => false
                ],
                // Promotions pour les plats
                [
                    'type' => 'link',
                    'route' => 'app_admin_promotion_index', 
                    'label' => 'Promotions',
                    'icon' => 'fas fa-percent',
                    'coming_soon' => false
                ],
                [
                    'type' => 'link',
                    'route' => 'app_restaurant_promotion_category_index', 
                    'label' => 'Catégories promo',
                    'icon' => 'fas fa-tags',
                    'coming_soon' => false
                ],
                [
                    'type' => 'link',
                    'route' => 'app_restaurant_promotion_recipe_index', 
                    'label' => 'Promotions des plats',
                    'icon' => 'fas fa-tag',
                    'coming_soon' => false
                ]
            ];
            $menu[] = [
                'type' => 'dropdown',
                'label' => 'Menu',
                'icon' => 'fas fa-utensils',
                'children' => $menuChildren
            ];
        }

        return $menu;
    }

    private function getManagerMenu(): array
    {
        $menu = [
            [
                'type' => 'section',
                'label' => 'GESTION'
            ],
            [
                'type' => 'link',
                'route' => 'app_manager_team_index',
                'label' => 'Mon équipe',
                'icon' => 'fas fa-users'
            ]
        ];

        // Section Produits pour tous
        $produitsChildren = [
            [
                'type' => 'link',
                'route' => 'app_admin_product_index', 
                'label' => 'Produits',
                'icon' => 'fas fa-boxes',
                'coming_soon' => false
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_product_new', 
                'label' => 'Nouveau produit',
                'icon' => 'fas fa-plus-circle',
                'coming_soon' => false
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_category_index',
                'label' => 'Catégories',
                'icon' => 'fas fa-tags',
                'coming_soon' => false
            ],
            [
                'type' => 'link',
                'route' => 'purchase_index', 
                'label' => 'Approvisionnement',
                'icon' => 'fas fa-truck',
                'coming_soon' => false
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_supplier_new', 
                'label' => 'Mouvement du stock',
                'icon' => 'fas fa-exchange-alt',
                'coming_soon' => false
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_category_index',
                'label' => 'Gestion des lots',
                'icon' => 'fas fa-cubes',
                'coming_soon' => false
            ],
        ];

        // Si ce n'est pas un restaurant, on ajoute les promotions dans Produits
        if (!$this->isRestaurant()) {
            $produitsChildren[] = [
                'type' => 'link',
                'route' => 'app_admin_promotion_index', 
                'label' => 'Promotions',
                'icon' => 'fas fa-percent',
                'coming_soon' => false
            ];
            $produitsChildren[] = [
                'type' => 'link',
                'route' => 'app_user_index', // Temporaire
                'label' => 'Promotions des catégories',
                'icon' => 'fas fa-tags',
                'coming_soon' => true
            ];
            $produitsChildren[] = [
                'type' => 'link',
                'route' => 'app_user_index', // Temporaire
                'label' => 'Promotions des produits',
                'icon' => 'fas fa-tag',
                'coming_soon' => true
            ];
        }

        $menu[] = [
            'type' => 'dropdown',
            'label' => 'Produits',
            'icon' => 'fas fa-box',
            'children' => $produitsChildren
        ];

        // Si restaurant, on ajoute la section Menu
        if ($this->isRestaurant()) {
            $menuChildren = [
                [
                    'type' => 'link',
                    'route' => 'app_admin_category_recipe_index', 
                    'label' => 'Catégories de plats',
                    'icon' => 'fas fa-th',
                    'coming_soon' => false
                ],
                [
                    'type' => 'link',
                    'route' => 'app_user_index', // Route à créer pour nouveau plat
                    'label' => 'Nouveau plat',
                    'icon' => 'fas fa-plus-circle',
                    'coming_soon' => true
                ],
                [
                    'type' => 'link',
                    'route' => 'app_user_index', // Route à créer pour liste des plats
                    'label' => 'Plats',
                    'icon' => 'fas fa-utensils',
                    'coming_soon' => true
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_promotion_index', 
                    'label' => 'Promotions',
                    'icon' => 'fas fa-percent',
                    'coming_soon' => false
                ],
                [
                    'type' => 'link',
                    'route' => 'app_user_index', // Temporaire
                    'label' => 'Catégories promo',
                    'icon' => 'fas fa-tags',
                    'coming_soon' => true
                ],
                [
                    'type' => 'link',
                    'route' => 'app_user_index', // Temporaire
                    'label' => 'Promotions des plats',
                    'icon' => 'fas fa-tag',
                    'coming_soon' => true
                ]
            ];
            $menu[] = [
                'type' => 'dropdown',
                'label' => 'Menu',
                'icon' => 'fas fa-utensils',
                'children' => $menuChildren
            ];
        }

        // Section Ventes (commune)
        $menu[] = [
            'type' => 'dropdown',
            'label' => 'Ventes',
            'icon' => 'fas fa-shopping-cart',
            'children' => [
                [
                    'type' => 'link',
                    'route' => 'app_user_index', // Temporaire
                    'label' => 'Commandes',
                    'icon' => 'fas fa-receipt',
                    'coming_soon' => true
                ],
                [
                    'type' => 'link',
                    'route' => 'app_user_index', // Temporaire
                    'label' => 'Nouvelle commande',
                    'icon' => 'fas fa-plus-circle',
                    'coming_soon' => true
                ]
            ]
        ];

        return $menu;
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
                'icon' => 'fas fa-chart-pie',
                'coming_soon' => true
            ],
            [
                'type' => 'dropdown',
                'label' => 'Gestion stock',
                'icon' => 'fas fa-boxes',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Inventaire',
                        'icon' => 'fas fa-list-check',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Mouvements',
                        'icon' => 'fas fa-exchange-alt',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Alertes stock',
                        'icon' => 'fas fa-exclamation-triangle',
                        'coming_soon' => true
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Approvisionnement',
                'icon' => 'fas fa-truck',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'purchase_index', 
                        'label' => 'Approvisionnement',
                        'icon' => 'fas fa-clipboard-list',
                        'coming_soon' => false
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_supplier_new', // À remplacer par la vraie route
                        'label' => 'Mouvement du stock',
                        'icon' => 'fas fa-exchange-alt',
                        'coming_soon' => false
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_supplier_new', // À remplacer par la vraie route
                        'label' => 'Gestion des lots',
                        'icon' => 'fas fa-cubes',
                        'coming_soon' => false
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
                'icon' => 'fas fa-cash-register',
                'badge' => 'Bientôt',
                'coming_soon' => true
            ],
            [
                'type' => 'dropdown',
                'label' => 'Ventes',
                'icon' => 'fas fa-receipt',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Ventes du jour',
                        'icon' => 'fas fa-sun',
                        'coming_soon' => true
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_user_index', // Temporaire
                        'label' => 'Historique',
                        'icon' => 'fas fa-history',
                        'coming_soon' => true
                    ]
                ]
            ],
            [
                'type' => 'link',
                'route' => 'app_user_index', // Temporaire
                'label' => 'Retours',
                'icon' => 'fas fa-undo-alt',
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
                'icon' => 'fas fa-calculator',
                'coming_soon' => true
            ];
        }
        
        $children[] = [
            'type' => 'link',
            'route' => 'app_user_index', // Temporaire
            'label' => 'Rapport des ventes',
            'icon' => 'fas fa-chart-line',
            'coming_soon' => true
        ];
        
        $children[] = [
            'type' => 'link',
            'route' => 'app_user_index', // Temporaire
            'label' => 'Rapport de stock',
            'icon' => 'fas fa-box',
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
                'icon' => 'fas fa-chart-bar',
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
                'icon' => 'fas fa-user-circle',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_profile_show',
                        'label' => 'Voir mon profil',
                        'icon' => 'fas fa-eye'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_profile_edit',
                        'label' => 'Modifier mon profil',
                        'icon' => 'fas fa-pencil-alt'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_change_password',
                        'label' => 'Changer mot de passe',
                        'icon' => 'fas fa-key'
                    ],
                    [
                        'type' => 'divider'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_logout',
                        'label' => 'Déconnexion',
                        'icon' => 'fas fa-sign-out-alt',
                        'danger' => true
                    ]
                ]
            ]
        ];
    }
}