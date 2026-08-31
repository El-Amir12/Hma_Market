<?php
// src/Service/MenuBuilder.php

namespace App\Service;

use Symfony\Component\Security\Core\Security;
use App\Entity\User;
use App\Entity\HmaService;

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
        
        $menus[] = $this->getDashboardMenuItem();
        
        if ($this->security->isGranted('ROLE_SUPER_ADMIN')) {
            $menus = array_merge($menus, $this->getSuperAdminMenu());
        }
        elseif ($this->security->isGranted('ROLE_ADMIN')) {
            $menus = array_merge($menus, $this->getAdminMenu());
        }
        elseif ($this->security->isGranted('ROLE_MANAGER')) {
            $menus = array_merge($menus, $this->getManagerMenu());
        }
        
        if ($this->security->isGranted('ROLE_STOCK_MANAGER') && !$this->security->isGranted('ROLE_MANAGER')) {
            $menus = array_merge($menus, $this->getStockManagerMenu());
        }
        
        if ($this->security->isGranted('ROLE_CASHIER') && !$this->security->isGranted('ROLE_MANAGER')) {
            $menus = array_merge($menus, $this->getCashierMenu());
        }
        
        if ($this->security->isGranted('ROLE_ADMIN') || 
            $this->security->isGranted('ROLE_MANAGER') || 
            $this->security->isGranted('ROLE_STOCK_MANAGER')) {
            $menus = array_merge($menus, $this->getReportsMenu());
        }
        
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

    private function isRetail(): bool
    {
        return $this->getCompanyType() === 'retail';
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

    /**
     * Menu VENTES dropdown avec sous-menus
     */
    private function getSalesMenu(): array
    {
        $salesChildren = [
            [
                'type' => 'link',
                'route' => $this->isRestaurant() ? 'restaurant_sale_index' : 'retail_sale_index',
                'label' => 'Nouvelle vente',
                'icon' => 'fas fa-plus-circle'
            ],
            [
                'type' => 'link',
                'route' => 'app_orders_index',
                'label' => 'Historique des ventes',
                'icon' => 'fas fa-history'
            ],
            [
                'type' => 'divider'
            ],
            [
                'type' => 'link',
                'route' => 'returns_index',
                'label' => 'Retours & Avoirs',
                'icon' => 'fas fa-undo-alt',
            ]
        ];

        return [
            'type' => 'dropdown',
            'label' => 'Ventes',
            'icon' => 'fas fa-shopping-cart',
            'children' => $salesChildren
        ];
    }

    /**
     * Menu Gestion des stocks (Ajustements, Transferts, Inventaires)
     */
    private function getStockManagementMenu(): array
    {
        $children = [
            [
                'type' => 'link',
                'route' => 'app_stock_adjustment_index',
                'label' => 'Ajustements de stock',
                'icon' => 'fas fa-calculator'
            ],
            [
                'type' => 'link',
                'route' => 'app_stock_transfer_index',
                'label' => 'Transferts de stock',
                'icon' => 'fas fa-exchange-alt'
            ],
            [
                'type' => 'link',
                'route' => 'app_stock_inventory_index',
                'label' => 'Inventaires',
                'icon' => 'fas fa-clipboard-list'
            ],
            [
                'type' => 'divider'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_stock_batch_all',
                'label' => 'Gestion des lots',
                'icon' => 'fas fa-cubes'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_stock_movement_index',
                'label' => 'Mouvements de stock',
                'icon' => 'fas fa-history'
            ]
        ];
        
        return [
            'type' => 'dropdown',
            'label' => 'Gestion des stocks',
            'icon' => 'fas fa-boxes',
            'children' => $children
        ];
    }

    /**
     * Menu FOURNISSEURS
     */
    private function getSuppliersMenu(): array
    {
        return [
            'type' => 'dropdown',
            'label' => 'Fournisseurs',
            'icon' => 'fas fa-truck',
            'children' => [
                [
                    'type' => 'link',
                    'route' => 'app_admin_supplier_index', 
                    'label' => 'Liste des fournisseurs',
                    'icon' => 'fas fa-list-ul'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_supplier_new', 
                    'label' => 'Ajouter un fournisseur',
                    'icon' => 'fas fa-plus-circle'
                ]
            ]
        ];
    }

    /**
     * Menu APPROVISIONNEMENT
     */
    private function getProcurementMenu(): array
    {
        return [
            'type' => 'dropdown',
            'label' => 'Approvisionnement',
            'icon' => 'fas fa-truck',
            'children' => [
                [
                    'type' => 'link',
                    'route' => 'purchase_index', 
                    'label' => 'Commandes d\'achat',
                    'icon' => 'fas fa-clipboard-list'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_supplier_credit_note_index', 
                    'label' => 'Avoirs Fournisseurs',
                    'icon' => 'fas fa-file-invoice-dollar'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_stock_movement_index', 
                    'label' => 'Mouvement du stock',
                    'icon' => 'fas fa-exchange-alt'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_location_index', 
                    'label' => 'Emplacement',
                    'icon' => 'fas fa-map-marker-alt'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_stock_batch_all', 
                    'label' => 'Gestion des lots',
                    'icon' => 'fas fa-cubes'
                ]
            ]
        ];
    }

    /**
     * Menu CATALOGUE
     */
    private function getCatalogueMenu(): array
    {
        $children = [
            [
                'type' => 'link',
                'route' => 'app_admin_category_index',
                'label' => 'Catégories',
                'icon' => 'fas fa-tags'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_product_new',
                'label' => 'Nouveau produit',
                'icon' => 'fas fa-box'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_product_index', 
                'label' => 'Produits',
                'icon' => 'fas fa-boxes'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_promotion_index', 
                'label' => 'Promotions',
                'icon' => 'fas fa-percent'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_promotion_category_index', 
                'label' => 'Catégories promo',
                'icon' => 'fas fa-tags'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_promotion_product_index',
                'label' => 'Promotions des produits',
                'icon' => 'fas fa-tag'
            ]
        ];

        return [
            'type' => 'dropdown',
            'label' => 'Catalogue',
            'icon' => 'fas fa-th',
            'children' => $children
        ];
    }

    /**
     * ✅ MENU SUPER ADMIN COMPLET
     */
    private function getSuperAdminMenu(): array
    {
        return [
            // ============================================
            // SECTION 1: SUPER ADMINISTRATION
            // ============================================
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
                        'route' => 'super_admin_analysis_price_index',
                        'label' => '💰 Prix des analyses',
                        'icon' => 'fas fa-tags'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_super_admin_hma_service_index',
                        'label' => 'Toutes les entreprises',
                        'icon' => 'fas fa-building'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'super_admin_subscription_index',
                        'label' => 'Abonnements',
                        'icon' => 'fas fa-credit-card'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_super_admin_statistics_index',
                        'label' => 'Statistiques globales',
                        'icon' => 'fas fa-chart-bar'
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
                        'route' => 'app_company_settings_index',
                        'label' => 'Configuration globale',
                        'icon' => 'fas fa-sliders-h'
                    ]
                ]
            ],

            // ============================================
            // SECTION 2: E-COMMERCE (NOUVEAU)
            // ============================================
            [
                'type' => 'section',
                'label' => 'E-COMMERCE'
            ],
            // Fournisseurs
            $this->getSuppliersMenu(),
            // Approvisionnement
            $this->getProcurementMenu(),
            // Ventes
            $this->getSalesMenu(),
            // Gestion des stocks
            $this->getStockManagementMenu(),
            // Catalogue
            $this->getCatalogueMenu(),

            // ============================================
            // SECTION 4: ANALYSES APPROFONDIES (SUPER ADMIN)
            // ============================================
            [
                'type' => 'section',
                'label' => 'ANALYSES APPROFONDIES'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Analyses Super Admin',
                'icon' => 'fas fa-microscope',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'app_super_admin_analysis_request_index',
                        'label' => 'Toutes les demandes',
                        'icon' => 'fas fa-list'
                    ],
                    [
                        'type' => 'divider'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_super_admin_analysis_statistics_index',
                        'label' => 'Statistiques des analyses',
                        'icon' => 'fas fa-chart-bar'
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
                        'route' => 'app_company_settings_index',
                        'label' => 'Paramètres entreprise',
                        'icon' => 'fas fa-sliders-h'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'admin_subscription_index',
                        'label' => 'Abonnement',
                        'icon' => 'fas fa-credit-card'
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
                        'icon' => 'fas fa-list-ul'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_supplier_new', 
                        'label' => 'Ajouter un fournisseur',
                        'icon' => 'fas fa-plus-circle'
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
                        'icon' => 'fas fa-clipboard-list'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_supplier_credit_note_index', 
                        'label' => 'Avoirs Fournisseurs',
                        'icon' => 'fas fa-file-invoice-dollar'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_stock_movement_index', 
                        'label' => 'Mouvement du stock',
                        'icon' => 'fas fa-exchange-alt'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_location_index', 
                        'label' => 'Emplacement',
                        'icon' => 'fas fa-map-marker-alt'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_stock_batch_all', 
                        'label' => 'Gestion des lots',
                        'icon' => 'fas fa-cubes'
                    ]
                ]
            ]
        ];

        // SECTION VENTES
        $menu[] = [
            'type' => 'section',
            'label' => 'VENTES'
        ];
        $menu[] = $this->getSalesMenu();

        // MENU GESTION DES STOCKS
        $menu[] = $this->getStockManagementMenu();

        // Section Catalogue
        $catalogueChildren = [
            [
                'type' => 'link',
                'route' => 'app_admin_category_index',
                'label' => 'Catégories',
                'icon' => 'fas fa-tags'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_product_new',
                'label' => 'Nouveau produit',
                'icon' => 'fas fa-box'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_product_index', 
                'label' => 'Produits',
                'icon' => 'fas fa-boxes'
            ],
        ];

        if (!$this->isRestaurant()) {
            $catalogueChildren[] = [
                'type' => 'link',
                'route' => 'app_admin_promotion_index', 
                'label' => 'Promotions',
                'icon' => 'fas fa-percent'
            ];
            $catalogueChildren[] = [
                'type' => 'link',
                'route' => 'app_admin_promotion_category_index', 
                'label' => 'Catégories promo',
                'icon' => 'fas fa-tags'
            ];
            $catalogueChildren[] = [
                'type' => 'link',
                'route' => 'app_admin_promotion_product_index',
                'label' => 'Promotions des produits',
                'icon' => 'fas fa-tag'
            ];
        }

        $menu[] = [
            'type' => 'dropdown',
            'label' => 'Catalogue',
            'icon' => 'fas fa-th',
            'children' => $catalogueChildren
        ];

        if ($this->isRestaurant()) {
            $menuChildren = [
                [
                    'type' => 'link',
                    'route' => 'app_admin_category_recipe_index', 
                    'label' => 'Section du menu',
                    'icon' => 'fas fa-th'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_recipe_new',
                    'label' => 'Nouvel article',
                    'icon' => 'fas fa-plus-circle'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_recipe_index',
                    'label' => 'Menu',
                    'icon' => 'fas fa-utensils'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_promotion_index', 
                    'label' => 'Promotions',
                    'icon' => 'fas fa-percent'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_restaurant_promotion_category_index', 
                    'label' => 'Catégories promo',
                    'icon' => 'fas fa-tags'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_restaurant_promotion_recipe_index', 
                    'label' => 'Promotions des articles',
                    'icon' => 'fas fa-tag'
                ]
            ];
            $menu[] = [
                'type' => 'dropdown',
                'label' => 'Menu',
                'icon' => 'fas fa-utensils',
                'children' => $menuChildren
            ];
        }

        // SECTION ANALYSES
        $menu[] = [
            'type' => 'section',
            'label' => 'ANALYSES'
        ];
        $menu[] = [
            'type' => 'link',
            'route' => 'company_analysis_index',
            'label' => 'Mes analyses',
            'icon' => 'fas fa-chart-line'
        ];
        $menu[] = [
            'type' => 'link',
            'route' => 'company_analysis_new',
            'label' => 'Nouvelle analyse',
            'icon' => 'fas fa-plus-circle'
        ];

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

        // SECTION VENTES
        $menu[] = [
            'type' => 'section',
            'label' => 'VENTES'
        ];
        $menu[] = $this->getSalesMenu();

        // MENU GESTION DES STOCKS
        $menu[] = $this->getStockManagementMenu();

        $produitsChildren = [
            [
                'type' => 'link',
                'route' => 'app_admin_product_index', 
                'label' => 'Produits',
                'icon' => 'fas fa-boxes'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_product_new', 
                'label' => 'Nouveau produit',
                'icon' => 'fas fa-plus-circle'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_category_index',
                'label' => 'Catégories',
                'icon' => 'fas fa-tags'
            ],
            [
                'type' => 'link',
                'route' => 'purchase_index', 
                'label' => 'Approvisionnement',
                'icon' => 'fas fa-truck'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_stock_movement_index', 
                'label' => 'Mouvement du stock',
                'icon' => 'fas fa-exchange-alt'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_location_index', 
                'label' => 'Emplacement',
                'icon' => 'fas fa-map-marker-alt'
            ],
            [
                'type' => 'link',
                'route' => 'app_admin_stock_batch_all',
                'label' => 'Gestion des lots',
                'icon' => 'fas fa-cubes'
            ],
        ];

        if (!$this->isRestaurant()) {
            $produitsChildren[] = [
                'type' => 'link',
                'route' => 'app_admin_promotion_index', 
                'label' => 'Promotions',
                'icon' => 'fas fa-percent'
            ];
            $produitsChildren[] = [
                'type' => 'link',
                'route' => 'app_admin_promotion_category_index', 
                'label' => 'Catégories promo',
                'icon' => 'fas fa-tags'
            ];
            $produitsChildren[] = [
                'type' => 'link',
                'route' => 'app_admin_promotion_product_index', 
                'label' => 'Promotions des produits',
                'icon' => 'fas fa-tag'
            ];
        }

        $menu[] = [
            'type' => 'dropdown',
            'label' => 'Produits',
            'icon' => 'fas fa-box',
            'children' => $produitsChildren
        ];

        if ($this->isRestaurant()) {
            $menuChildren = [
                [
                    'type' => 'link',
                    'route' => 'app_admin_category_recipe_index', 
                    'label' => 'Section du menu',
                    'icon' => 'fas fa-th'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_recipe_new',
                    'label' => 'Nouvel article',
                    'icon' => 'fas fa-plus-circle'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_recipe_index',
                    'label' => 'Menu',
                    'icon' => 'fas fa-utensils'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_promotion_index', 
                    'label' => 'Promotions',
                    'icon' => 'fas fa-percent'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_restaurant_promotion_category_index', 
                    'label' => 'Catégories promo',
                    'icon' => 'fas fa-tags'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_restaurant_promotion_recipe_index', 
                    'label' => 'Promotions des articles',
                    'icon' => 'fas fa-tag'
                ]
            ];
            $menu[] = [
                'type' => 'dropdown',
                'label' => 'Menu',
                'icon' => 'fas fa-utensils',
                'children' => $menuChildren
            ];
        }

        // SECTION ANALYSES
        $menu[] = [
            'type' => 'section',
            'label' => 'ANALYSES'
        ];
        $menu[] = [
            'type' => 'link',
            'route' => 'company_analysis_index',
            'label' => 'Mes analyses',
            'icon' => 'fas fa-chart-line'
        ];
        $menu[] = [
            'type' => 'link',
            'route' => 'company_analysis_new',
            'label' => 'Nouvelle analyse',
            'icon' => 'fas fa-plus-circle'
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
                'route' => 'app_admin_stock_batch_all', 
                'label' => 'Dashboard stock',
                'icon' => 'fas fa-chart-pie'
            ],
            $this->getStockManagementMenu(),
            [
                'type' => 'dropdown',
                'label' => 'Approvisionnement',
                'icon' => 'fas fa-truck',
                'children' => [
                    [
                        'type' => 'link',
                        'route' => 'purchase_index', 
                        'label' => 'Approvisionnement',
                        'icon' => 'fas fa-clipboard-list'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_stock_movement_index',
                        'label' => 'Mouvement du stock',
                        'icon' => 'fas fa-exchange-alt'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_location_index',
                        'label' => 'Emplacement',
                        'icon' => 'fas fa-map-marker-alt'
                    ],
                    [
                        'type' => 'link',
                        'route' => 'app_admin_stock_batch_all', 
                        'label' => 'Gestion des lots',
                        'icon' => 'fas fa-cubes'
                    ]
                ]
            ]
        ];
    }

    private function getCashierMenu(): array
    {
        $menu = [
            [
                'type' => 'section',
                'label' => 'CAISSE'
            ],
            [
                'type' => 'link',
                'route' => $this->isRestaurant() ? 'restaurant_sale_index' : 'retail_sale_index',
                'label' => 'Caisse',
                'icon' => 'fas fa-cash-register'
            ]
        ];

        // SECTION VENTES
        $menu[] = [
            'type' => 'section',
            'label' => 'VENTES'
        ];
        $menu[] = $this->getSalesMenu();

        if (!$this->isRestaurant()) {
            $catalogueChildren = [
                [
                    'type' => 'link',
                    'route' => 'app_admin_category_index',
                    'label' => 'Catégories',
                    'icon' => 'fas fa-tags'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_product_index', 
                    'label' => 'Produits',
                    'icon' => 'fas fa-boxes'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_stock_batch_all',
                    'label' => 'Stock',
                    'icon' => 'fas fa-cubes'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_location_index',
                    'label' => 'Emplacements',
                    'icon' => 'fas fa-map-marker-alt'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_promotion_index', 
                    'label' => 'Promotions',
                    'icon' => 'fas fa-percent'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_promotion_category_index', 
                    'label' => 'Catégories promo',
                    'icon' => 'fas fa-tags'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_promotion_product_index',
                    'label' => 'Promotions des produits',
                    'icon' => 'fas fa-tag'
                ]
            ];

            $menu[] = [
                'type' => 'dropdown',
                'label' => 'Catalogue',
                'icon' => 'fas fa-th',
                'children' => $catalogueChildren
            ];
        }

        if ($this->isRestaurant()) {
            $restaurantChildren = [
                [
                    'type' => 'link',
                    'route' => 'app_admin_category_recipe_index', 
                    'label' => 'Section du menu',
                    'icon' => 'fas fa-utensils'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_recipe_index',
                    'label' => 'Menu',
                    'icon' => 'fas fa-hamburger'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_stock_batch_all',
                    'label' => 'Stock',
                    'icon' => 'fas fa-cubes'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_location_index',
                    'label' => 'Emplacements',
                    'icon' => 'fas fa-map-marker-alt'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_admin_promotion_index', 
                    'label' => 'Promotions',
                    'icon' => 'fas fa-percent'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_restaurant_promotion_category_index', 
                    'label' => 'Catégories promo',
                    'icon' => 'fas fa-tags'
                ],
                [
                    'type' => 'link',
                    'route' => 'app_restaurant_promotion_recipe_index', 
                    'label' => 'Promotions des articles',
                    'icon' => 'fas fa-tag'
                ]
            ];

            $menu[] = [
                'type' => 'dropdown',
                'label' => 'Restauration',
                'icon' => 'fas fa-utensils',
                'children' => $restaurantChildren
            ];
        }

        return $menu;
    }

    private function getReportsMenu(): array
    {
        $children = [];
        
        if ($this->security->isGranted('ROLE_ADMIN')) {
            $children[] = [
                'type' => 'link',
                'route' => 'app_financial_report_index',
                'label' => 'Rapport financier',
                'icon' => 'fas fa-calculator'
            ];
        }
        
        $children[] = [
            'type' => 'link',
            'route' => 'app_sales_report_index',
            'label' => 'Rapport des ventes',
            'icon' => 'fas fa-chart-line'
        ];
        
        $children[] = [
            'type' => 'link',
            'route' => 'app_stock_report_index',
            'label' => 'Rapport de stock',
            'icon' => 'fas fa-box'
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