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

/* base_marketplace.html.twig */
class __TwigTemplate_f45b4e7255c0883d3427bcd827fadb4a extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\">
    
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap\" rel=\"stylesheet\">
    
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    
    <!-- Bootstrap 5 -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css\">
    
    <!-- Animate.css -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    
    <!-- Select2 -->
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
    
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "    
    <style>
        :root {
            --primary-color: #0463f1;
            --primary-dark: #0350c4;
            --primary-light: #e8f0fe;
            --secondary-color: #8b5cf6;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --dark-color: #0f172a;
            --dark-secondary: #1e293b;
            --gray-50: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-400: #94a3b8;
            --gray-500: #64748b;
            --gray-600: #475569;
            --gray-700: #334155;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --radius: 16px;
            --radius-sm: 8px;
            --radius-lg: 24px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--gray-50);
            min-height: 100vh;
            color: var(--dark-color);
            scroll-behavior: smooth;
        }
        
        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }
        ::-webkit-scrollbar-track {
            background: var(--gray-100);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }
        
        /* ==================== NAVBAR ==================== */
        .marketplace-navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            box-shadow: 0 1px 3px rgba(0,0,0,0.04), 0 1px 2px rgba(0,0,0,0.03);
            padding: 0.6rem 0;
            border-bottom: 1px solid rgba(226, 232, 240, 0.6);
            transition: var(--transition);
            position: sticky;
            top: 0;
            z-index: 1050;
        }
        .marketplace-navbar .container {
            max-width: 100%;
            padding: 0 2rem;
        }
        .marketplace-navbar.scrolled {
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            background: rgba(255, 255, 255, 0.98);
        }
        
        .navbar-brand-custom {
            font-weight: 800;
            font-size: 1.6rem;
            color: var(--primary-color);
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            letter-spacing: -0.5px;
            text-decoration: none;
            flex-shrink: 0;
        }
        .navbar-brand-custom:hover {
            color: var(--primary-dark);
            transform: scale(1.02);
        }
        .navbar-brand-custom i {
            font-size: 1.8rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .brand-dot {
            width: 8px;
            height: 8px;
            background: var(--primary-color);
            border-radius: 50%;
            display: inline-block;
            animation: pulse-dot 2s infinite;
        }
        @keyframes pulse-dot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(0.8); }
        }
        
        /* ==================== SEARCH BAR ==================== */
        .search-bar {
            position: relative;
            max-width: 520px;
            width: 100%;
            flex: 1;
            min-width: 200px;
        }
        .search-bar input {
            border-radius: 50px;
            padding: 0.65rem 1.2rem 0.65rem 3.2rem;
            border: 2px solid var(--gray-200);
            width: 100%;
            transition: var(--transition);
            background: var(--gray-50);
            font-size: 0.95rem;
            color: var(--dark-color);
        }
        .search-bar input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.08);
            outline: none;
            background: white;
        }
        .search-bar input::placeholder {
            color: var(--gray-400);
        }
        .search-bar .search-icon {
            position: absolute;
            left: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-400);
            font-size: 1rem;
            transition: var(--transition);
        }
        .search-bar .search-shortcut {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: var(--gray-200);
            color: var(--gray-500);
            font-size: 0.65rem;
            padding: 0.2rem 0.6rem;
            border-radius: 4px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        
        /* ==================== NAVIGATION ACTIONS ==================== */
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-shrink: 0;
        }
        .nav-action-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-600);
            background: var(--gray-100);
            transition: var(--transition);
            border: none;
            position: relative;
            cursor: pointer;
            text-decoration: none;
        }
        .nav-action-btn:hover {
            background: var(--primary-light);
            color: var(--primary-color);
            transform: translateY(-2px);
        }
        .nav-action-btn .badge-count {
            position: absolute;
            top: -4px;
            right: -4px;
            background: var(--danger-color);
            color: white;
            font-size: 0.6rem;
            font-weight: 700;
            padding: 0.2rem 0.5rem;
            border-radius: 50%;
            min-width: 20px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
        }
        
        .btn-primary-custom {
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.45rem 1.2rem;
            font-size: 0.85rem;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-primary-custom:hover {
            background: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
        }
        .btn-outline-primary-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.45rem 1.2rem;
            font-size: 0.85rem;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-outline-primary-custom:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
        }
        
        /* ==================== CATEGORIES NAV ==================== */
        .categories-nav {
            background: white;
            border-bottom: 1px solid var(--gray-200);
            padding: 0.5rem 0;
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: none;
            -webkit-overflow-scrolling: touch;
        }
        .categories-nav .container {
            max-width: 100%;
            padding: 0 2rem;
        }
        .categories-nav::-webkit-scrollbar {
            display: none;
        }
        .categories-nav .category-link {
            color: var(--gray-600);
            text-decoration: none;
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            transition: var(--transition);
            display: inline-block;
        }
        .categories-nav .category-link:hover,
        .categories-nav .category-link.active {
            background: var(--primary-light);
            color: var(--primary-color);
        }
        .categories-nav .category-link i {
            margin-right: 0.3rem;
        }
        .categories-nav .category-link.see-all-categories {
            background: var(--primary-color);
            color: white;
            font-weight: 600;
        }
        .categories-nav .category-link.see-all-categories:hover {
            background: var(--primary-dark);
            color: white;
        }
        
        /* ==================== MAIN CONTENT ==================== */
        main {
            padding: 1.5rem 0;
        }
        main .container {
            max-width: 100%;
            padding: 0 2rem;
        }
        
        /* ==================== FOOTER ==================== */
        .marketplace-footer {
            background: var(--dark-color);
            color: rgba(255,255,255,0.8);
            padding: 4rem 0 2rem;
            margin-top: 4rem;
            border-top: 1px solid rgba(255,255,255,0.05);
        }
        .marketplace-footer .container {
            max-width: 100%;
            padding: 0 2rem;
        }
        .marketplace-footer .footer-brand {
            font-size: 1.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 0.5rem;
        }
        .marketplace-footer .footer-brand i {
            color: var(--primary-color);
        }
        .marketplace-footer .footer-text {
            color: var(--gray-400);
            font-size: 0.9rem;
            line-height: 1.6;
        }
        .marketplace-footer h5 {
            color: white;
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .marketplace-footer a {
            color: var(--gray-400);
            text-decoration: none;
            transition: var(--transition);
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .marketplace-footer a:hover {
            color: white;
            transform: translateX(4px);
        }
        .marketplace-footer .footer-social {
            display: flex;
            gap: 0.75rem;
        }
        .marketplace-footer .footer-social a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            color: var(--gray-400);
        }
        .marketplace-footer .footer-social a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        .marketplace-footer .footer-divider {
            border-color: rgba(255,255,255,0.05);
            margin: 2rem 0;
        }
        
        /* ==================== RESPONSIVE ==================== */
        @media (max-width: 992px) {
            .marketplace-navbar .container,
            .categories-nav .container,
            main .container,
            .marketplace-footer .container {
                padding: 0 1.5rem;
            }
            .search-bar {
                min-width: 150px;
                max-width: 400px;
            }
            .navbar-brand-custom {
                font-size: 1.3rem;
            }
            .nav-actions {
                gap: 0.5rem;
            }
        }
        @media (max-width: 768px) {
            .marketplace-navbar .container,
            .categories-nav .container,
            main .container,
            .marketplace-footer .container {
                padding: 0 1rem;
            }
            .marketplace-navbar .d-flex {
                flex-wrap: wrap;
                gap: 0.75rem;
            }
            .navbar-brand-custom {
                font-size: 1.2rem;
            }
            .search-bar {
                order: 3;
                max-width: 100%;
                flex-basis: 100%;
            }
            .nav-actions {
                gap: 0.4rem;
            }
            .btn-outline-primary-custom {
                padding: 0.35rem 0.8rem;
                font-size: 0.75rem;
            }
            .btn-primary-custom {
                padding: 0.35rem 0.8rem;
                font-size: 0.75rem;
            }
            .marketplace-footer {
                padding: 2rem 0 1.5rem;
            }
        }
        @media (max-width: 480px) {
            .marketplace-navbar .container,
            .categories-nav .container,
            main .container,
            .marketplace-footer .container {
                padding: 0 0.75rem;
            }
            .search-bar input {
                font-size: 0.85rem;
                padding: 0.5rem 1rem 0.5rem 2.8rem;
            }
            .search-bar .search-shortcut {
                display: none;
            }
            .navbar-brand-custom {
                font-size: 1rem;
            }
            .navbar-brand-custom i {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    
    <!-- ==================== NAVBAR ==================== -->
    <nav class=\"marketplace-navbar\" id=\"mainNavbar\">
        <div class=\"container\">
            <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-3\">
                <!-- Logo -->
                <a href=\"";
        // line 489
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" class=\"navbar-brand-custom\">
                    <i class=\"fas fa-store\"></i>
                    HMA Market
                    <span class=\"brand-dot\"></span>
                </a>
                
                <!-- Search Bar -->
                <div class=\"search-bar\">
                    <i class=\"fas fa-search search-icon\"></i>
                    <input type=\"text\" 
                        id=\"marketplaceSearch\" 
                        class=\"form-control\" 
                        placeholder=\"Rechercher un produit, une pharmacie...\"
                        autocomplete=\"off\"
                        onkeyup=\"if(event.key==='Enter') window.location.href='";
        // line 503
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
        yield "?search='+this.value\">
                    <span class=\"search-shortcut\">⌘K</span>
                </div>
                
                <!-- ==================== NAVIGATION ACTIONS ==================== -->
                <div class=\"nav-actions\">
                    <!-- Pharmacies -->
                    <a href=\"";
        // line 510
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\" class=\"nav-action-btn\" title=\"Pharmacies de garde\">
                        <i class=\"fas fa-hospital\"></i>
                    </a>
                    
                    <!-- Favoris - UNIQUEMENT pour les customers connectés -->
                    <a href=\"";
        // line 515
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites");
        yield "\" class=\"nav-action-btn\" title=\"Mes favoris\">
                        <i class=\"fas fa-heart\"></i>
                        ";
        // line 517
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 517) && $this->extensions['App\Twig\AppExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 517)))) {
            // line 518
            yield "                            <span class=\"badge-count\" id=\"favoritesCount\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\MarketplaceExtension']->getFavoritesCount(), "html", null, true);
            yield "</span>
                        ";
        }
        // line 520
        yield "                    </a>
                    
                    <!-- Panier - UNIQUEMENT pour les customers connectés -->
                    <a href=\"";
        // line 523
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart");
        yield "\" class=\"nav-action-btn\" title=\"Mon panier\">
                        <i class=\"fas fa-shopping-cart\"></i>
                        ";
        // line 525
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 525) && $this->extensions['App\Twig\AppExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 525)))) {
            // line 526
            yield "                            <span class=\"badge-count\" id=\"cartCount\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\MarketplaceExtension']->getCartItemsCount(), "html", null, true);
            yield "</span>
                        ";
        }
        // line 528
        yield "                    </a>
                    
                    <!-- Connexion / Profil -->
                    ";
        // line 531
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 531) && $this->extensions['App\Twig\AppExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 531)))) {
            // line 532
            yield "                        <div class=\"dropdown\">
                            <button class=\"btn btn-primary-custom dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fas fa-user me-1\"></i>
                                <span class=\"d-none d-md-inline\">";
            // line 535
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 535), "fullName", [], "any", true, true, false, 535)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 535), "fullName", [], "any", false, false, false, 535), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 535), "email", [], "any", false, false, false, 535))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 535), "email", [], "any", false, false, false, 535))), 0, 12), "html", null, true);
            yield "</span>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4 py-2\">
                                <li><a class=\"dropdown-item py-2\" href=\"";
            // line 538
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_profile");
            yield "\">
                                    <i class=\"fas fa-user me-2 text-primary\"></i>Mon profil
                                </a></li>
                                <li><a class=\"dropdown-item py-2\" href=\"";
            // line 541
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_change_password");
            yield "\">
                                    <i class=\"fas fa-key me-2 text-warning\"></i>Changer mon mot de passe
                                </a></li>
                                <li><a class=\"dropdown-item py-2\" href=\"";
            // line 544
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
            yield "\">
                                    <i class=\"fas fa-list me-2 text-primary\"></i>Mes commandes
                                </a></li>
                                <li><a class=\"dropdown-item py-2\" href=\"";
            // line 547
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites");
            yield "\">
                                    <i class=\"fas fa-heart me-2 text-danger\"></i>Mes favoris
                                </a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item py-2 text-danger\" href=\"";
            // line 551
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_logout");
            yield "\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion
                                </a></li>
                            </ul>
                        </div>
                    ";
        } else {
            // line 557
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
            yield "\" class=\"btn-outline-primary-custom\">
                            <i class=\"fas fa-sign-in-alt\"></i>
                            <span class=\"d-none d-md-inline\">Connexion</span>
                        </a>
                        <a href=\"";
            // line 561
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_register");
            yield "\" class=\"btn-primary-custom\">
                            <i class=\"fas fa-user-plus\"></i>
                            <span class=\"d-none d-md-inline\">Inscription</span>
                        </a>
                    ";
        }
        // line 566
        yield "                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== CATEGORIES NAV ==================== -->
    <div class=\"categories-nav\">
        <div class=\"container\">
            <div class=\"d-flex gap-1\">
                <a href=\"";
        // line 575
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" class=\"category-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 575), "get", ["_route"], "method", false, false, false, 575) == "marketplace_home")) {
            yield "active";
        }
        yield "\">
                    <i class=\"fas fa-home\"></i>Accueil
                </a>
                <a href=\"";
        // line 578
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
        yield "\" class=\"category-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 578), "get", ["_route"], "method", false, false, false, 578) == "marketplace_products")) {
            yield "active";
        }
        yield "\">
                    <i class=\"fas fa-th\"></i>Tous les produits
                </a>
                <a href=\"";
        // line 581
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\" class=\"category-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 581), "get", ["_route"], "method", false, false, false, 581) == "marketplace_pharmacy_search")) {
            yield "active";
        }
        yield "\">
                    <i class=\"fas fa-hospital\"></i>Pharmacies
                </a>
            </div>
        </div>
    </div>
    
    <!-- ==================== MAIN CONTENT ==================== -->
    <main>
        <div class=\"container\">
            <!-- Flash messages -->
            ";
        // line 592
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 592));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 593
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 594
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show border-0 shadow-sm rounded-4 animate__animated animate__fadeInDown\" role=\"alert\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <i class=\"fas fa-";
                // line 596
                if (($context["label"] == "success")) {
                    yield "check-circle text-success";
                } elseif (($context["label"] == "danger")) {
                    yield "exclamation-circle text-danger";
                } elseif (($context["label"] == "warning")) {
                    yield "exclamation-triangle text-warning";
                } else {
                    yield "info-circle text-primary";
                }
                yield "\"></i>
                            ";
                // line 597
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        </div>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 602
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 603
        yield "            
            ";
        // line 604
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 605
        yield "        </div>
    </main>
    
    <!-- ==================== FOOTER ==================== -->
    <footer class=\"marketplace-footer\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-4\">
                    <div class=\"footer-brand\">
                        <i class=\"fas fa-store me-2\"></i>HMA Market
                    </div>
                    <p class=\"footer-text mt-2\">
                        Votre pharmacie en ligne de confiance. Trouvez les produits de santé et les pharmacies de garde 
                        près de chez vous, rapidement et facilement.
                    </p>
                    <div class=\"footer-social mt-3\">
                        <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4\">
                    <h5>Liens utiles</h5>
                    <div class=\"d-flex flex-column gap-2\">
                        <a href=\"";
        // line 631
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Pharmacies de garde
                        </a>
                        <a href=\"";
        // line 635
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
        yield "\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Tous les produits
                        </a>
                        <a href=\"";
        // line 639
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites");
        yield "\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Mes favoris
                        </a>
                        <a href=\"";
        // line 643
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
        yield "\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Mes commandes
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4\">
                    <h5>Informations</h5>
                    <div class=\"d-flex flex-column gap-2\">
                        <a href=\"#\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Conditions générales
                        </a>
                        <a href=\"#\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Politique de confidentialité
                        </a>
                        <a href=\"#\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Livraison et retours
                        </a>
                        <a href=\"#\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            FAQ
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4\">
                    <h5>Contact</h5>
                    <div class=\"d-flex flex-column gap-2\">
                        <a href=\"mailto:contact@hmamarket.com\">
                            <i class=\"fas fa-envelope me-2\"></i>
                            contact@hmamarket.com
                        </a>
                        <a href=\"tel:+2290156139200\">
                            <i class=\"fas fa-phone me-2\"></i>
                            +229 01 56 13 92 00
                        </a>
                        <a href=\"#\">
                            <i class=\"fas fa-map-marker-alt me-2\"></i>
                            Cotonou, Bénin
                        </a>
                        <span style=\"color: var(--gray-400); font-size: 0.85rem;\">
                            <i class=\"fas fa-clock me-2\"></i>
                            Lun - Sam: 8h - 20h
                        </span>
                    </div>
                </div>
            </div>
            
            <hr class=\"footer-divider\">
            
            <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center gap-2\">
                <span style=\"color: var(--gray-400); font-size: 0.85rem;\">
                    &copy; ";
        // line 697
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market. Tous droits réservés.
                </span>
                <div class=\"d-flex gap-3 flex-wrap\">
                    <span style=\"color: var(--gray-500); font-size: 0.75rem;\">
                        <i class=\"fas fa-shield-alt me-1\"></i> Paiement sécurisé
                    </span>
                    <span style=\"color: var(--gray-500); font-size: 0.75rem;\">
                        <i class=\"fas fa-truck me-1\"></i> Livraison rapide
                    </span>
                    <span style=\"color: var(--gray-500); font-size: 0.75rem;\">
                        <i class=\"fas fa-headset me-1\"></i> Support 24/7
                    </span>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- ==================== SCRIPTS ==================== -->
    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select2
        if (typeof \$ !== 'undefined' && \$.fn.select2) {
            \$('.select2').select2({
                theme: 'bootstrap-5',
                width: '100%',
                language: 'fr'
            });
        }
        
        // Navbar scroll effect
        const navbar = document.getElementById('mainNavbar');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Search shortcut (⌘K)
        document.addEventListener('keydown', function(e) {
            if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
                e.preventDefault();
                const searchInput = document.getElementById('marketplaceSearch');
                if (searchInput) {
                    searchInput.focus();
                    searchInput.select();
                }
            }
        });
        
        // Notifications
        window.showNotification = function(message, type = 'info') {
            const colors = {
                success: 'bg-success',
                error: 'bg-danger',
                info: 'bg-primary',
                warning: 'bg-warning'
            };
            const icons = {
                success: 'fa-check-circle',
                error: 'fa-exclamation-circle',
                info: 'fa-info-circle',
                warning: 'fa-exclamation-triangle'
            };
            
            const notification = document.createElement('div');
            notification.className = `position-fixed bottom-0 end-0 p-3 m-3 \${colors[type] || colors.info} text-white rounded-4 shadow-lg`;
            notification.style.zIndex = '9999';
            notification.style.animation = 'slideUp 0.3s ease';
            notification.style.maxWidth = '400px';
            notification.innerHTML = `
                <div class=\"d-flex align-items-center gap-2\">
                    <i class=\"fas \${icons[type] || icons.info} fa-lg\"></i>
                    <span>\${message}</span>
                    <button type=\"button\" class=\"btn-close btn-close-white ms-2\" onclick=\"this.parentElement.parentElement.remove()\"></button>
                </div>
            `;
            document.body.appendChild(notification);
            setTimeout(() => {
                notification.style.animation = 'slideDown 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 4000);
        };
        
        // Animation styles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideUp {
                from { transform: translateY(100%); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
            @keyframes slideDown {
                from { transform: translateY(0); opacity: 1; }
                to { transform: translateY(100%); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
    });
    </script>
    
    ";
        // line 802
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 803
        yield "</body>
</html>";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "HMA Market - Votre pharmacie en ligne";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 604
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 802
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_marketplace.html.twig";
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
        return array (  1030 => 802,  1020 => 604,  1010 => 30,  999 => 6,  993 => 803,  991 => 802,  883 => 697,  826 => 643,  819 => 639,  812 => 635,  805 => 631,  777 => 605,  775 => 604,  772 => 603,  766 => 602,  755 => 597,  743 => 596,  737 => 594,  732 => 593,  728 => 592,  710 => 581,  700 => 578,  690 => 575,  679 => 566,  671 => 561,  663 => 557,  654 => 551,  647 => 547,  641 => 544,  635 => 541,  629 => 538,  623 => 535,  618 => 532,  616 => 531,  611 => 528,  605 => 526,  603 => 525,  598 => 523,  593 => 520,  587 => 518,  585 => 517,  580 => 515,  572 => 510,  562 => 503,  545 => 489,  85 => 31,  83 => 30,  59 => 9,  53 => 6,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base_marketplace.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\base_marketplace.html.twig");
    }
}
