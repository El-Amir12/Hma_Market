<?php
// src/Service/MenuBuilder.php
namespace App\Service;

use Symfony\Component\Security\Core\Security;

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
        $menus = array_merge($menus, $this->getCommonMenu());
        
        // Menu selon le rôle
        if ($this->security->isGranted('ROLE_ADMIN')) {
            // L'admin voit le menu Admin ET Manager
            $menus = array_merge($menus, $this->getAdminMenu());
            $menus = array_merge($menus, $this->getManagerMenu());
        }
        
        if ($this->security->isGranted('ROLE_MANAGER') && !$this->security->isGranted('ROLE_ADMIN')) {
            // Manager seulement (pas admin)
            $menus = array_merge($menus, $this->getManagerMenu());
        }
        
        if ($this->security->isGranted('ROLE_STOCK_MANAGER')) {
            $menus = array_merge($menus, $this->getStockManagerMenu());
        }
        
        if ($this->security->isGranted('ROLE_CASHIER')) {
            $menus = array_merge($menus, $this->getCashierMenu());
        }
        
        // Menu rapports - pour les rôles autorisés
        if ($this->security->isGranted('ROLE_MANAGER') || 
            $this->security->isGranted('ROLE_ADMIN') || 
            $this->security->isGranted('ROLE_STOCK_MANAGER')) {
            $menus = array_merge($menus, $this->getReportsMenu());
        }
        
        // Menu profil (toujours en dernier)
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
                'icon' => 'fas fa-sign-in-alt'
            ]
        ];
    }

    private function getCommonMenu(): array
    {
        return [
            [
                'type' => 'title',
                'label' => 'Tableau de bord'
            ],
            [
                'type' => 'link',
                'route' => 'app_dashboard',
                'label' => 'Dashboard',
                'icon' => 'fas fa-home'
            ]
        ];
    }

    private function getAdminMenu(): array
    {
        return [
            [
                'type' => 'title',
                'label' => 'Administration'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Gestion Utilisateurs',
                'icon' => 'fas fa-users-cog',
                'children' => [
                    [
                        'route' => 'app_user_index',
                        'label' => 'Liste des utilisateurs',
                        'icon' => 'fas fa-list'
                    ],
                    [
                        'route' => 'app_user_new',
                        'label' => 'Créer un utilisateur',
                        'icon' => 'fas fa-user-plus'
                    ],
                    [
                        'route' => 'app_admin_supplier_new',
                        'label' => 'Liste des fournisseurs',
                        'icon' => 'fas fa-list'
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Configuration',
                'icon' => 'fas fa-cogs',
                'children' => [
                    [
                        'route' => null,
                        'label' => 'Paramètres généraux',
                        'icon' => 'fas fa-sliders-h'
                    ],
                    [
                        'route' => null,
                        'label' => 'Configuration boutique',
                        'icon' => 'fas fa-store'
                    ]
                ]
            ]
        ];
    }

    private function getManagerMenu(): array
    {
        return [
            [
                'type' => 'title',
                'label' => 'Gestion Commerciale'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Produits',
                'icon' => 'fas fa-box-open',
                'children' => [
                    [
                        'route' => 'app_admin_product_index',
                        'label' => 'Catalogue produits',
                        'icon' => 'fas fa-th-large'
                    ],
                    [
                        'route' => null,
                        'label' => 'Ajouter un produit',
                        'icon' => 'fas fa-plus-circle'
                    ],
                    [
                        'route' => 'app_admin_category_index',
                        'label' => 'Catégories',
                        'icon' => 'fas fa-tags'
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Ventes & Analyses',
                'icon' => 'fas fa-chart-line',
                'children' => [
                    [
                        'route' => null,
                        'label' => 'Rapport des ventes',
                        'icon' => 'fas fa-file-invoice-dollar'
                    ],
                    [
                        'route' => null,
                        'label' => 'Meilleurs produits',
                        'icon' => 'fas fa-star'
                    ]
                ]
            ]
        ];
    }

    private function getStockManagerMenu(): array
    {
        return [
            [
                'type' => 'title',
                'label' => 'Gestion des Stocks'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Inventaire',
                'icon' => 'fas fa-warehouse',
                'children' => [
                    [
                        'route' => null,
                        'label' => 'Niveau des stocks',
                        'icon' => 'fas fa-boxes'
                    ],
                    [
                        'route' => null,
                        'label' => 'Stocks faibles',
                        'icon' => 'fas fa-exclamation-triangle'
                    ]
                ]
            ],
            [
                'type' => 'dropdown',
                'label' => 'Approvisionnement',
                'icon' => 'fas fa-truck-loading',
                'children' => [
                    [
                        'route' => null,
                        'label' => 'Commandes fournisseurs',
                        'icon' => 'fas fa-clipboard-list'
                    ],
                    [
                        'route' => null,
                        'label' => 'Fournisseurs',
                        'icon' => 'fas fa-parachute-box'
                    ]
                ]
            ]
        ];
    }

    private function getCashierMenu(): array
    {
        return [
            [
                'type' => 'title',
                'label' => 'Point de Vente'
            ],
            [
                'type' => 'link',
                'route' => null,
                'label' => 'Caisse enregistreuse',
                'icon' => 'fas fa-cash-register'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Transactions',
                'icon' => 'fas fa-receipt',
                'children' => [
                    [
                        'route' => null,
                        'label' => 'Historique des ventes',
                        'icon' => 'fas fa-history'
                    ],
                    [
                        'route' => null,
                        'label' => 'Ventes du jour',
                        'icon' => 'fas fa-sun'
                    ]
                ]
            ]
        ];
    }

    private function getReportsMenu(): array
    {
        $children = [
            [
                'route' => null,
                'label' => 'Rapport des ventes',
                'icon' => 'fas fa-shopping-cart'
            ],
            [
                'route' => null,
                'label' => 'Rapport de stock',
                'icon' => 'fas fa-box'
            ]
        ];
        
        if ($this->security->isGranted('ROLE_ADMIN')) {
            array_unshift($children, [
                'route' => null,
                'label' => 'Rapport financier',
                'icon' => 'fas fa-coins'
            ]);
        }
        
        return [
            [
                'type' => 'title',
                'label' => 'Rapports'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Analytiques',
                'icon' => 'fas fa-chart-bar',
                'children' => $children
            ]
        ];
    }

    private function getProfileMenu(): array
    {
        return [
            [
                'type' => 'title',
                'label' => 'Mon Compte'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Mon Profil',
                'icon' => 'fas fa-user-circle',
                'children' => [
                    [
                        'route' => null,
                        'label' => 'Modifier mon profil',
                        'icon' => 'fas fa-user-edit'
                    ],
                    [
                        'route' => 'app_forgot_password_request',
                        'label' => 'Changer mot de passe',
                        'icon' => 'fas fa-key'
                    ],
                    [
                        'route' => 'app_logout',
                        'label' => 'Déconnexion',
                        'icon' => 'fas fa-sign-out-alt'
                    ]
                ]
            ]
        ];
    }
}