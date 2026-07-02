<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/menu.html.twig */
class __TwigTemplate_b8b77d5d5c5c0c267cd827045bd2436c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- ========== Left Sidebar Start ========== -->
<div class=\"vertical-menu\">

    <!-- LOGO -->
    <div class=\"navbar-brand-box\">
        <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo logo-dark\">
            <span class=\"logo-sm\">
                <i class=\"fas fa-store\"></i>
            </span>
            <span class=\"logo-lg\">
                HMA MARKET
            </span>
        </a>

        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo logo-light\">
            <span class=\"logo-sm\">
                <i class=\"fas fa-store\"></i>
            </span>
            <span class=\"logo-lg\">
                HMA MARKET
            </span>
        </a>
    </div>

    <button type=\"button\" class=\"btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn\">
        <i class=\"fas fa-bars\"></i>
    </button>

    <div data-simplebar class=\"sidebar-menu-scroll\">
        <div id=\"sidebar-menu\">
            <!-- Left Menu Start -->
            <ul class=\"metismenu list-unstyled\" id=\"side-menu\">

                <!-- Dashboard (tous les utilisateurs) -->
                <li class=\"menu-title\">
                    <span>Tableau de bord</span>
                </li>
                <li>
                    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"waves-effect\">
                        <i class=\"fas fa-home\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Menu ADMINISTRATEUR -->
                ";
        // line 46
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                <li class=\"menu-title\">
                    <span>Administration</span>
                </li>

                <li>
                    <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                        <i class=\"fas fa-users-cog\"></i>
                        <span>Gestion Utilisateurs</span>
                        <span class=\"menu-arrow\"></span>
                    </a>
                    <ul class=\"sub-menu mm-collapse\" aria-expanded=\"false\">
                        <li><a href=\"";
            // line 58
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\"><i class=\"fas fa-list me-1\"></i>Liste des utilisateurs</a></li>
                        <li><a href=\"";
            // line 59
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\"><i class=\"fas fa-user-plus me-1\"></i>Créer un utilisateur</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-user-tag me-1\"></i>Gestion des rôles</a></li>
                    </ul>
                </li>

                <li>
                    <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                        <i class=\"fas fa-cogs\"></i>
                        <span>Configuration</span>
                        <span class=\"menu-arrow\"></span>
                    </a>
                    <ul class=\"sub-menu mm-collapse\" aria-expanded=\"false\">
                        <li><a href=\"#\"><i class=\"fas fa-sliders-h me-1\"></i>Paramètres généraux</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-store me-1\"></i>Configuration boutique</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-percent me-1\"></i>Taxes & TVA</a></li>
                    </ul>
                </li>
                ";
        }
        // line 77
        yield "
                <!-- Menu GESTIONNAIRE & ADMIN -->
                ";
        // line 79
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 80
            yield "                <li class=\"menu-title\">
                    <span>Gestion Commerciale</span>
                </li>

                <li>
                    <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                        <i class=\"fas fa-box-open\"></i>
                        <span>Produits</span>
                        <span class=\"menu-arrow\"></span>
                    </a>
                    <ul class=\"sub-menu mm-collapse\" aria-expanded=\"false\">
                        <li><a href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
            yield "\"><i class=\"fas fa-th-large me-1\"></i>Catalogue produits</a></li>
                        <li><a href=\"";
            // line 92
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\"><i class=\"fas fa-plus-circle me-1\"></i>Ajouter un produit</a></li>
                        <!-- CORRECTION ICI : Remplacement du # par le bon chemin -->
                        <li><a href=\"";
            // line 94
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
            yield "\"><i class=\"fas fa-tags me-1\"></i>Catégories</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-tag me-1\"></i>Promotions</a></li>
                    </ul>
                </li>

                <li>
                    <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                        <i class=\"fas fa-chart-line\"></i>
                        <span>Ventes & Analyses</span>
                        <span class=\"menu-arrow\"></span>
                    </a>
                    <ul class=\"sub-menu mm-collapse\" aria-expanded=\"false\">
                        <li><a href=\"#\"><i class=\"fas fa-file-invoice-dollar me-1\"></i>Rapport des ventes</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-star me-1\"></i>Meilleurs produits</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-user-friends me-1\"></i>Analyse clients</a></li>
                    </ul>
                </li>
                ";
        }
        // line 112
        yield "
                <!-- Menu STOCK MANAGER & ADMIN & MANAGER -->
                ";
        // line 114
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 115
            yield "                <li class=\"menu-title\">
                    <span>Gestion des Stocks</span>
                </li>

                <li>
                    <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                        <i class=\"fas fa-warehouse\"></i>
                        <span>Inventaire</span>
                        <span class=\"menu-arrow\"></span>
                    </a>
                    <ul class=\"sub-menu mm-collapse\" aria-expanded=\"false\">
                        <li><a href=\"#\"><i class=\"fas fa-boxes me-1\"></i>Niveau des stocks</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-exclamation-triangle me-1\"></i>Stocks faibles</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-exchange-alt me-1\"></i>Ajustements</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-calendar-times me-1\"></i>Produits expirés</a></li>
                    </ul>
                </li>

                <li>
                    <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                        <i class=\"fas fa-truck-loading\"></i>
                        <span>Approvisionnement</span>
                        <span class=\"menu-arrow\"></span>
                    </a>
                    <ul class=\"sub-menu mm-collapse\" aria-expanded=\"false\">
                        <li><a href=\"#\"><i class=\"fas fa-clipboard-list me-1\"></i>Commandes fournisseurs</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-parachute-box me-1\"></i>Fournisseurs</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-dolly me-1\"></i>Réceptions</a></li>
                    </ul>
                </li>
                ";
        }
        // line 146
        yield "
                <!-- Menu CAISSIER & TOUS LES RÔLES -->
                ";
        // line 148
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 149
            yield "                <li class=\"menu-title\">
                    <span>Point de Vente</span>
                </li>

                <li>
                    <a href=\"#\" class=\"waves-effect\">
                        <i class=\"fas fa-cash-register\"></i>
                        <span>Caisse enregistreuse</span>
                    </a>
                </li>

                <li>
                    <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                        <i class=\"fas fa-receipt\"></i>
                        <span>Transactions</span>
                        <span class=\"menu-arrow\"></span>
                    </a>
                    <ul class=\"sub-menu mm-collapse\" aria-expanded=\"false\">
                        <li><a href=\"#\"><i class=\"fas fa-history me-1\"></i>Historique des ventes</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-sun me-1\"></i>Ventes du jour</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-undo me-1\"></i>Remboursements</a></li>
                    </ul>
                </li>
                ";
        }
        // line 173
        yield "
                <!-- Menu RAPPORTS -->
                ";
        // line 175
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER"))) {
            // line 176
            yield "                <li class=\"menu-title\">
                    <span>Rapports</span>
                </li>

                <li>
                    <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                        <i class=\"fas fa-chart-bar\"></i>
                        <span>Analytiques</span>
                        <span class=\"menu-arrow\"></span>
                    </a>
                    <ul class=\"sub-menu mm-collapse\" aria-expanded=\"false\">
                        ";
            // line 187
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 188
                yield "                        <li><a href=\"#\"><i class=\"fas fa-coins me-1\"></i>Rapport financier</a></li>
                        ";
            }
            // line 190
            yield "                        <li><a href=\"#\"><i class=\"fas fa-shopping-cart me-1\"></i>Rapport des ventes</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-box me-1\"></i>Rapport de stock</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-calculator me-1\"></i>Rapport de caisse</a></li>
                    </ul>
                </li>
                ";
        }
        // line 196
        yield "
                <!-- Menu PROFIL -->
                <li class=\"menu-title\">
                    <span>Mon Compte</span>
                </li>
                <li>
                    <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                        <i class=\"fas fa-user-circle\"></i>
                        <span>Mon Profil</span>
                        <span class=\"menu-arrow\"></span>
                    </a>
                    <ul class=\"sub-menu mm-collapse\" aria-expanded=\"false\">
                        <li><a href=\"#\"><i class=\"fas fa-user-edit me-1\"></i>Modifier mon profil</a></li>
                        <li><a href=\"";
        // line 209
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\"><i class=\"fas fa-key me-1\"></i>Changer mot de passe</a></li>
                        <li><a href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"><i class=\"fas fa-sign-out-alt me-1\"></i>Déconnexion</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- Left Sidebar End -->

<style>
    /* Variables de couleurs */
    :root {
        --sidebar-bg: #1e3a8a; /* Bleu foncé */
        --sidebar-active: #3b82f6; /* Bleu vif */
        --sidebar-hover: #2563eb; /* Bleu moyen */
        --sidebar-text: #ffffff;
        --sidebar-submenu-bg: #1e40af; /* Bleu plus foncé pour sous-menus */
    }

    /* Sidebar principale */
    .vertical-menu {
        background: var(--sidebar-bg);
        width: 250px;
        position: fixed;
        top: 0;
        bottom: 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1001;
        transition: all 0.3s;
    }

    /* Logo */
    .navbar-brand-box {
        padding: 0 1.5rem;
        height: 70px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .logo-lg {
        color: var(--sidebar-text);
        font-weight: 700;
        font-size: 20px;
    }
    
    .logo-sm {
        color: var(--sidebar-text);
        font-size: 24px;
    }

    /* Menu items */
    .sidebar-menu-scroll {
        height: calc(100vh - 70px);
        padding-top: 1rem;
    }

    /* Titres de menu */
    .menu-title {
        color: rgba(255, 255, 255, 0.6);
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 12px 20px 5px;
        margin-top: 10px;
    }

    /* Items de menu */
    #sidebar-menu .metismenu a {
        color: var(--sidebar-text);
        display: flex;
        align-items: center;
        padding: 12px 20px;
        font-size: 14px;
        transition: all 0.3s;
        text-decoration: none;
        position: relative;
    }

    #sidebar-menu .metismenu a:hover {
        color: var(--sidebar-text);
        background: var(--sidebar-hover);
    }

    #sidebar-menu .metismenu a.active {
        background: var(--sidebar-active);
        color: var(--sidebar-text);
    }

    /* Icônes */
    #sidebar-menu .metismenu i {
        font-size: 16px;
        margin-right: 10px;
        width: 20px;
        text-align: center;
    }

    /* Flèches */
    .menu-arrow {
        position: absolute;
        right: 20px;
        transition: transform 0.3s;
    }

    .has-arrow[aria-expanded=\"true\"] .menu-arrow {
        transform: rotate(90deg);
    }

    /* Sous-menus */
    .sub-menu {
        background: var(--sidebar-submenu-bg);
        padding-left: 0;
        list-style: none;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .sub-menu.mm-show {
        max-height: 500px;
    }

    .sub-menu li a {
        padding: 10px 20px 10px 50px;
        font-size: 13.5px;
        color: rgba(255, 255, 255, 0.8);
    }

    .sub-menu li a:hover {
        background: rgba(255, 255, 255, 0.1);
        color: var(--sidebar-text);
    }

    .sub-menu li a i.me-1 {
        font-size: 12px;
        width: 15px;
    }

    /* Badges */
    .badge {
        position: absolute;
        right: 20px;
        padding: 2px 8px;
        font-size: 10px;
    }

    /* Bouton de toggle */
    .vertical-menu-btn {
        position: absolute;
        right: -40px;
        top: 15px;
        background: var(--sidebar-bg);
        color: var(--sidebar-text);
        border: none;
        z-index: 1002;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .vertical-menu {
            margin-left: -250px;
        }
        
        .vertical-menu.show {
            margin-left: 0;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion des menus déroulants
    const arrowElements = document.querySelectorAll('.has-arrow');
    
    arrowElements.forEach(element => {
        element.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Fermer les autres sous-menus ouverts
            const openMenus = document.querySelectorAll('.has-arrow[aria-expanded=\"true\"]');
            openMenus.forEach(openMenu => {
                if (openMenu !== this) {
                    openMenu.setAttribute('aria-expanded', 'false');
                    const subMenu = openMenu.nextElementSibling;
                    if (subMenu) {
                        subMenu.classList.remove('mm-show');
                        subMenu.classList.add('mm-collapse');
                    }
                }
            });
            
            // Basculer l'état du menu cliqué
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            
            const subMenu = this.nextElementSibling;
            if (subMenu) {
                if (!isExpanded) {
                    subMenu.classList.remove('mm-collapse');
                    subMenu.classList.add('mm-show');
                } else {
                    subMenu.classList.remove('mm-show');
                    subMenu.classList.add('mm-collapse');
                }
            }
        });
    });

    // Gestion du bouton de toggle du sidebar (mobile)
    const verticalMenuBtn = document.querySelector('.vertical-menu-btn');
    if (verticalMenuBtn) {
        verticalMenuBtn.addEventListener('click', function() {
            const verticalMenu = document.querySelector('.vertical-menu');
            verticalMenu.classList.toggle('show');
        });
    }

    // Activer le lien actif
    const currentPath = window.location.pathname;
    const menuLinks = document.querySelectorAll('#sidebar-menu a[href]');
    
    menuLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
            
            // Ouvrir le parent si c'est un sous-menu
            const parentMenu = link.closest('.has-arrow');
            if (parentMenu) {
                parentMenu.setAttribute('aria-expanded', 'true');
                const subMenu = parentMenu.nextElementSibling;
                if (subMenu) {
                    subMenu.classList.remove('mm-collapse');
                    subMenu.classList.add('mm-show');
                }
            }
        }
    });
});
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  310 => 210,  306 => 209,  291 => 196,  283 => 190,  279 => 188,  277 => 187,  264 => 176,  262 => 175,  258 => 173,  232 => 149,  230 => 148,  226 => 146,  193 => 115,  191 => 114,  187 => 112,  166 => 94,  161 => 92,  157 => 91,  144 => 80,  142 => 79,  138 => 77,  117 => 59,  113 => 58,  100 => 47,  98 => 46,  88 => 39,  61 => 15,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/menu.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\partials\\menu.html.twig");
    }
}
