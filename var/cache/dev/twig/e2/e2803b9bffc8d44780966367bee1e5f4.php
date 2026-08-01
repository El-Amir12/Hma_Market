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
class __TwigTemplate_97b462f1b7b41d9529e45bf636dbdf9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_marketplace.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_marketplace.html.twig"));

        // line 2
        yield "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 11
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
        // line 32
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 33
        yield "    
    <style>
        :root {
            --primary-color: #0463f1;
            --primary-dark: #0350c4;
            --primary-light: #e8f0fe;
            --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
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
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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
        .search-bar .search-input-wrapper {
            position: relative;
            width: 100%;
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
        .search-bar .search-clear {
            position: absolute;
            right: 4rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-400);
            cursor: pointer;
            display: none;
            padding: 0.2rem 0.4rem;
            border-radius: 50%;
            transition: var(--transition);
        }
        .search-bar .search-clear:hover {
            background: var(--gray-200);
            color: var(--gray-600);
        }
        .search-bar input:not(:placeholder-shown) ~ .search-clear {
            display: block;
        }
        
        /* ==================== NAVIGATION ACTIONS ==================== */
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 0.5rem;
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
            background: transparent;
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
            top: -2px;
            right: -2px;
            background: var(--danger-color);
            color: white;
            font-size: 0.6rem;
            font-weight: 700;
            padding: 0.15rem 0.45rem;
            border-radius: 50%;
            min-width: 20px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
            transition: var(--transition);
            animation: badge-pop 0.3s ease;
        }
        @keyframes badge-pop {
            0% { transform: scale(0); }
            50% { transform: scale(1.3); }
            100% { transform: scale(1); }
        }
        
        /* ==================== BUTTONS ==================== */
        .btn-primary-custom {
            background: var(--primary-gradient);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.5rem 1.2rem;
            font-size: 0.85rem;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 2px 8px rgba(4, 99, 241, 0.15);
        }
        .btn-primary-custom:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(4, 99, 241, 0.3);
        }
        .btn-outline-primary-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.5rem 1.2rem;
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
            box-shadow: 0 4px 12px rgba(4, 99, 241, 0.2);
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
            padding: 0.4rem 1.2rem;
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
            margin-right: 0.4rem;
            font-size: 0.9rem;
        }
        
        /* ==================== MAIN CONTENT ==================== */
        main {
            padding: 1.5rem 0;
            min-height: 60vh;
        }
        main .container {
            max-width: 100%;
            padding: 0 2rem;
        }
        
        /* ==================== FLASH MESSAGES ==================== */
        .alert-custom {
            border-radius: var(--radius);
            border: none;
            padding: 1rem 1.5rem;
            box-shadow: var(--shadow-md);
            animation: slideDown 0.3s ease;
        }
        @keyframes slideDown {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
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
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .marketplace-footer .footer-text {
            color: var(--gray-400);
            font-size: 0.9rem;
            line-height: 1.7;
            max-width: 400px;
        }
        .marketplace-footer h5 {
            color: white;
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 1rem;
            letter-spacing: 0.5px;
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
            margin-top: 1rem;
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
            font-size: 1rem;
        }
        .marketplace-footer .footer-social a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
        }
        .marketplace-footer .footer-divider {
            border-color: rgba(255,255,255,0.05);
            margin: 2rem 0;
        }
        
        /* ==================== RESPONSIVE ==================== */
        @media (max-width: 1200px) {
            .search-bar {
                max-width: 400px;
            }
        }
        
        @media (max-width: 992px) {
            .marketplace-navbar .container,
            .categories-nav .container,
            main .container,
            .marketplace-footer .container {
                padding: 0 1.5rem;
            }
            .search-bar {
                min-width: 150px;
                max-width: 350px;
            }
            .navbar-brand-custom {
                font-size: 1.4rem;
            }
            .nav-actions {
                gap: 0.3rem;
            }
            .nav-action-btn {
                width: 38px;
                height: 38px;
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
            .navbar-brand-custom i {
                font-size: 1.4rem;
            }
            .search-bar {
                order: 3;
                max-width: 100%;
                flex-basis: 100%;
                min-width: auto;
            }
            .search-bar .search-shortcut {
                display: none;
            }
            .nav-actions {
                gap: 0.2rem;
            }
            .nav-action-btn {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
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
                padding: 2.5rem 0 1.5rem;
                margin-top: 2rem;
            }
            .marketplace-footer .footer-text {
                max-width: 100%;
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
            .navbar-brand-custom {
                font-size: 1rem;
            }
            .navbar-brand-custom i {
                font-size: 1.2rem;
            }
            .nav-action-btn {
                width: 32px;
                height: 32px;
                font-size: 0.8rem;
            }
            .nav-action-btn .badge-count {
                font-size: 0.5rem;
                min-width: 16px;
                padding: 0.1rem 0.35rem;
                top: -4px;
                right: -4px;
            }
            .categories-nav .category-link {
                font-size: 0.75rem;
                padding: 0.3rem 0.8rem;
            }
            .btn-outline-primary-custom span,
            .btn-primary-custom span {
                display: none !important;
            }
            .btn-outline-primary-custom,
            .btn-primary-custom {
                padding: 0.35rem 0.7rem;
                font-size: 0.8rem;
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
        // line 588
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" class=\"navbar-brand-custom\">
                    <i class=\"fas fa-store\"></i>
                    HMA Market
                    <span class=\"brand-dot\"></span>
                </a>
                
                <!-- Search Bar -->
                <div class=\"search-bar\">
                    <div class=\"search-input-wrapper\">
                        <i class=\"fas fa-search search-icon\"></i>
                        <input type=\"text\" 
                               id=\"marketplaceSearch\" 
                               class=\"form-control\" 
                               placeholder=\"Rechercher un produit, une pharmacie...\"
                               autocomplete=\"off\"
                               onkeyup=\"if(event.key==='Enter') window.location.href='";
        // line 603
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
        yield "?search='+encodeURIComponent(this.value)\">
                        <span class=\"search-shortcut\">⌘K</span>
                        <span class=\"search-clear\" onclick=\"document.getElementById('marketplaceSearch').value='';this.style.display='none';\">
                            <i class=\"fas fa-times\"></i>
                        </span>
                    </div>
                </div>
                
                <!-- Navigation Actions -->
                <div class=\"nav-actions\">
                    <!-- Pharmacies -->
                    <a href=\"";
        // line 614
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\" class=\"nav-action-btn\" title=\"Pharmacies de garde\">
                        <i class=\"fas fa-hospital\"></i>
                    </a>
                    
                    <!-- Favoris -->
                    <a href=\"";
        // line 619
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites");
        yield "\" class=\"nav-action-btn\" title=\"Mes favoris\">
                        <i class=\"fas fa-heart\"></i>
                        ";
        // line 621
        $context["favCount"] = $this->extensions['App\Twig\MarketplaceExtension']->getFavoritesCount();
        // line 622
        yield "                        <span class=\"badge-count\" id=\"favoritesCount\" style=\"display: ";
        yield ((((isset($context["favCount"]) || array_key_exists("favCount", $context) ? $context["favCount"] : (function () { throw new RuntimeError('Variable "favCount" does not exist.', 622, $this->source); })()) > 0)) ? ("block") : ("none"));
        yield ";\">
                            ";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["favCount"]) || array_key_exists("favCount", $context) ? $context["favCount"] : (function () { throw new RuntimeError('Variable "favCount" does not exist.', 623, $this->source); })()), "html", null, true);
        yield "
                        </span>
                    </a>

                    <!-- Panier -->
                    <a href=\"";
        // line 628
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart");
        yield "\" class=\"nav-action-btn\" title=\"Mon panier\">
                        <i class=\"fas fa-shopping-cart\"></i>
                        ";
        // line 630
        $context["cartCount"] = $this->extensions['App\Twig\MarketplaceExtension']->getCartItemsCount();
        // line 631
        yield "                        <span class=\"badge-count\" id=\"cartCount\" style=\"display: ";
        yield ((((isset($context["cartCount"]) || array_key_exists("cartCount", $context) ? $context["cartCount"] : (function () { throw new RuntimeError('Variable "cartCount" does not exist.', 631, $this->source); })()) > 0)) ? ("block") : ("none"));
        yield ";\">
                            ";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cartCount"]) || array_key_exists("cartCount", $context) ? $context["cartCount"] : (function () { throw new RuntimeError('Variable "cartCount" does not exist.', 632, $this->source); })()), "html", null, true);
        yield "
                        </span>
                    </a>
                    
                    <!-- Profil / Connexion -->
                    ";
        // line 637
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 637, $this->source); })()), "user", [], "any", false, false, false, 637) && $this->extensions['App\Twig\RatingExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 637, $this->source); })()), "user", [], "any", false, false, false, 637)))) {
            // line 638
            yield "                        <div class=\"dropdown\">
                            <button class=\"btn btn-primary-custom dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fas fa-user me-1\"></i>
                                <span class=\"d-none d-md-inline\">";
            // line 641
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 641), "fullName", [], "any", true, true, false, 641)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 641, $this->source); })()), "user", [], "any", false, false, false, 641), "fullName", [], "any", false, false, false, 641), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 641, $this->source); })()), "user", [], "any", false, false, false, 641), "email", [], "any", false, false, false, 641))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 641, $this->source); })()), "user", [], "any", false, false, false, 641), "email", [], "any", false, false, false, 641))), "@")), 0, 12), "html", null, true);
            yield "</span>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4 py-2 animate__animated animate__fadeInDown\">
                                <li><a class=\"dropdown-item py-2 rounded-3\" href=\"";
            // line 644
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_profile");
            yield "\">
                                    <i class=\"fas fa-user me-2 text-primary\"></i>Mon profil
                                </a></li>
                                <li><a class=\"dropdown-item py-2 rounded-3\" href=\"";
            // line 647
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_change_password");
            yield "\">
                                    <i class=\"fas fa-key me-2 text-warning\"></i>Changer mon mot de passe
                                </a></li>
                                <li><a class=\"dropdown-item py-2 rounded-3\" href=\"";
            // line 650
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
            yield "\">
                                    <i class=\"fas fa-list me-2 text-primary\"></i>Mes commandes
                                </a></li>
                                <li><a class=\"dropdown-item py-2 rounded-3\" href=\"";
            // line 653
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites");
            yield "\">
                                    <i class=\"fas fa-heart me-2 text-danger\"></i>Mes favoris
                                </a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item py-2 rounded-3 text-danger\" href=\"";
            // line 657
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_logout");
            yield "\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion
                                </a></li>
                            </ul>
                        </div>
                    ";
        } else {
            // line 663
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
            yield "\" class=\"btn-outline-primary-custom\">
                            <i class=\"fas fa-sign-in-alt\"></i>
                            <span class=\"d-none d-md-inline\">Connexion</span>
                        </a>
                        <a href=\"";
            // line 667
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_register");
            yield "\" class=\"btn-primary-custom\">
                            <i class=\"fas fa-user-plus\"></i>
                            <span class=\"d-none d-md-inline\">Inscription</span>
                        </a>
                    ";
        }
        // line 672
        yield "                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== CATEGORIES NAV ==================== -->
    <div class=\"categories-nav\">
        <div class=\"container\">
            <div class=\"d-flex gap-1\">
                <a href=\"";
        // line 681
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" class=\"category-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 681, $this->source); })()), "request", [], "any", false, false, false, 681), "get", ["_route"], "method", false, false, false, 681) == "marketplace_home")) {
            yield "active";
        }
        yield "\">
                    <i class=\"fas fa-home\"></i>Accueil
                </a>
                <a href=\"";
        // line 684
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
        yield "\" class=\"category-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 684, $this->source); })()), "request", [], "any", false, false, false, 684), "get", ["_route"], "method", false, false, false, 684) == "marketplace_products")) {
            yield "active";
        }
        yield "\">
                    <i class=\"fas fa-th\"></i>Tous les produits
                </a>
                <a href=\"";
        // line 687
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\" class=\"category-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 687, $this->source); })()), "request", [], "any", false, false, false, 687), "get", ["_route"], "method", false, false, false, 687) == "marketplace_pharmacy_search")) {
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
        // line 698
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 698, $this->source); })()), "flashes", [], "any", false, false, false, 698));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 699
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 700
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show alert-custom animate__animated animate__fadeInDown\" role=\"alert\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <i class=\"fas fa-";
                // line 702
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
                            <span>";
                // line 703
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                        </div>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 708
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 709
        yield "            
            ";
        // line 710
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 711
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
                    <div class=\"footer-social\">
                        <a href=\"#\" aria-label=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a href=\"#\" aria-label=\"Twitter\"><i class=\"fab fa-twitter\"></i></a>
                        <a href=\"#\" aria-label=\"Instagram\"><i class=\"fab fa-instagram\"></i></a>
                        <a href=\"#\" aria-label=\"LinkedIn\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a href=\"#\" aria-label=\"YouTube\"><i class=\"fab fa-youtube\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4\">
                    <h5>Liens utiles</h5>
                    <div class=\"d-flex flex-column gap-2\">
                        <a href=\"";
        // line 737
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Pharmacies de garde
                        </a>
                        <a href=\"";
        // line 741
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
        yield "\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Tous les produits
                        </a>
                        <a href=\"";
        // line 745
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites");
        yield "\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Mes favoris
                        </a>
                        <a href=\"";
        // line 749
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
        // line 803
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
        // ==================== SELECT2 ====================
        if (typeof \$ !== 'undefined' && \$.fn.select2) {
            \$('.select2').select2({
                theme: 'bootstrap-5',
                width: '100%',
                language: 'fr'
            });
        }
        
        // ==================== NAVBAR SCROLL EFFECT ====================
        const navbar = document.getElementById('mainNavbar');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // ==================== SEARCH SHORTCUT (⌘K) ====================
        document.addEventListener('keydown', function(e) {
            if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
                e.preventDefault();
                const searchInput = document.getElementById('marketplaceSearch');
                if (searchInput) {
                    searchInput.focus();
                    searchInput.select();
                }
            }
            // ESC to clear search
            if (e.key === 'Escape') {
                const searchInput = document.getElementById('marketplaceSearch');
                if (searchInput && document.activeElement === searchInput) {
                    searchInput.blur();
                }
            }
        });
        
        // ==================== SEARCH CLEAR ====================
        const searchInput = document.getElementById('marketplaceSearch');
        const searchClear = document.querySelector('.search-clear');
        if (searchInput && searchClear) {
            searchInput.addEventListener('input', function() {
                if (this.value.length > 0) {
                    searchClear.style.display = 'block';
                } else {
                    searchClear.style.display = 'none';
                }
            });
        }
        
        // ==================== UPDATE COUNTERS ====================
        function updateCounters() {
            // Mettre à jour les favoris
            fetch('";
        // line 881
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites_count");
        yield "')
                .then(response => response.json())
                .then(data => {
                    const badge = document.getElementById('favoritesCount');
                    if (badge) {
                        const count = data.count || 0;
                        badge.textContent = count;
                        badge.style.display = count > 0 ? 'block' : 'none';
                        // Animation de mise à jour
                        if (count > 0) {
                            badge.style.animation = 'none';
                            setTimeout(() => badge.style.animation = 'badge-pop 0.3s ease', 10);
                        }
                    }
                })
                .catch(() => {
                    // Fallback
                    const badge = document.getElementById('favoritesCount');
                    if (badge) {
                        const count = parseInt(badge.textContent) || 0;
                        badge.style.display = count > 0 ? 'block' : 'none';
                    }
                });

            // Mettre à jour le panier
            fetch('";
        // line 906
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart_count");
        yield "')
                .then(response => response.json())
                .then(data => {
                    const badge = document.getElementById('cartCount');
                    if (badge) {
                        const count = data.count || 0;
                        badge.textContent = count;
                        badge.style.display = count > 0 ? 'block' : 'none';
                        // Animation de mise à jour
                        if (count > 0) {
                            badge.style.animation = 'none';
                            setTimeout(() => badge.style.animation = 'badge-pop 0.3s ease', 10);
                        }
                    }
                })
                .catch(() => {
                    // Fallback
                    const badge = document.getElementById('cartCount');
                    if (badge) {
                        const count = parseInt(badge.textContent) || 0;
                        badge.style.display = count > 0 ? 'block' : 'none';
                    }
                });
        }

        // Exposer la fonction globalement
        window.updateCounters = updateCounters;

        // Mettre à jour au chargement
        setTimeout(updateCounters, 300);

        // Écouter les événements personnalisés
        document.addEventListener('cartUpdated', updateCounters);
        document.addEventListener('favoritesUpdated', updateCounters);

        // ==================== NOTIFICATIONS ====================
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
            notification.style.boxShadow = '0 10px 40px rgba(0,0,0,0.15)';
            notification.innerHTML = `
                <div class=\"d-flex align-items-center gap-2\">
                    <i class=\"fas \${icons[type] || icons.info} fa-lg\"></i>
                    <span class=\"fw-medium\">\${message}</span>
                    <button type=\"button\" class=\"btn-close btn-close-white ms-2\" onclick=\"this.closest('.position-fixed').remove()\" style=\"opacity: 0.6;\"></button>
                </div>
            `;
            document.body.appendChild(notification);
            
            // Auto-remove après 4 secondes
            setTimeout(() => {
                notification.style.animation = 'slideDown 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 4000);
        };
        
        // ==================== ADDITIONAL STYLES ====================
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
            .dropdown-menu {
                backdrop-filter: blur(20px);
                background: rgba(255, 255, 255, 0.98);
            }
            .dropdown-item {
                transition: var(--transition);
                padding: 0.5rem 1rem;
            }
            .dropdown-item:hover {
                background: var(--primary-light);
                color: var(--primary-color);
            }
            .dropdown-item.text-danger:hover {
                background: rgba(239, 68, 68, 0.1);
                color: var(--danger-color);
            }
        `;
        document.head.appendChild(style);
    });
    </script>
    
    ";
        // line 1010
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 1011
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "HMA Market - Votre pharmacie en ligne";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 710
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1010
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  1293 => 1010,  1271 => 710,  1249 => 32,  1226 => 8,  1214 => 1011,  1212 => 1010,  1105 => 906,  1077 => 881,  996 => 803,  939 => 749,  932 => 745,  925 => 741,  918 => 737,  890 => 711,  888 => 710,  885 => 709,  879 => 708,  868 => 703,  856 => 702,  850 => 700,  845 => 699,  841 => 698,  823 => 687,  813 => 684,  803 => 681,  792 => 672,  784 => 667,  776 => 663,  767 => 657,  760 => 653,  754 => 650,  748 => 647,  742 => 644,  736 => 641,  731 => 638,  729 => 637,  721 => 632,  716 => 631,  714 => 630,  709 => 628,  701 => 623,  696 => 622,  694 => 621,  689 => 619,  681 => 614,  667 => 603,  649 => 588,  92 => 33,  90 => 32,  66 => 11,  60 => 8,  52 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/base_marketplace.html.twig #}

<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}HMA Market - Votre pharmacie en ligne{% endblock %}</title>
    
    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.ico') }}\">
    
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
    
    {% block stylesheets %}{% endblock %}
    
    <style>
        :root {
            --primary-color: #0463f1;
            --primary-dark: #0350c4;
            --primary-light: #e8f0fe;
            --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
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
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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
        .search-bar .search-input-wrapper {
            position: relative;
            width: 100%;
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
        .search-bar .search-clear {
            position: absolute;
            right: 4rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-400);
            cursor: pointer;
            display: none;
            padding: 0.2rem 0.4rem;
            border-radius: 50%;
            transition: var(--transition);
        }
        .search-bar .search-clear:hover {
            background: var(--gray-200);
            color: var(--gray-600);
        }
        .search-bar input:not(:placeholder-shown) ~ .search-clear {
            display: block;
        }
        
        /* ==================== NAVIGATION ACTIONS ==================== */
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 0.5rem;
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
            background: transparent;
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
            top: -2px;
            right: -2px;
            background: var(--danger-color);
            color: white;
            font-size: 0.6rem;
            font-weight: 700;
            padding: 0.15rem 0.45rem;
            border-radius: 50%;
            min-width: 20px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
            transition: var(--transition);
            animation: badge-pop 0.3s ease;
        }
        @keyframes badge-pop {
            0% { transform: scale(0); }
            50% { transform: scale(1.3); }
            100% { transform: scale(1); }
        }
        
        /* ==================== BUTTONS ==================== */
        .btn-primary-custom {
            background: var(--primary-gradient);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.5rem 1.2rem;
            font-size: 0.85rem;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 2px 8px rgba(4, 99, 241, 0.15);
        }
        .btn-primary-custom:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(4, 99, 241, 0.3);
        }
        .btn-outline-primary-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.5rem 1.2rem;
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
            box-shadow: 0 4px 12px rgba(4, 99, 241, 0.2);
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
            padding: 0.4rem 1.2rem;
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
            margin-right: 0.4rem;
            font-size: 0.9rem;
        }
        
        /* ==================== MAIN CONTENT ==================== */
        main {
            padding: 1.5rem 0;
            min-height: 60vh;
        }
        main .container {
            max-width: 100%;
            padding: 0 2rem;
        }
        
        /* ==================== FLASH MESSAGES ==================== */
        .alert-custom {
            border-radius: var(--radius);
            border: none;
            padding: 1rem 1.5rem;
            box-shadow: var(--shadow-md);
            animation: slideDown 0.3s ease;
        }
        @keyframes slideDown {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
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
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .marketplace-footer .footer-text {
            color: var(--gray-400);
            font-size: 0.9rem;
            line-height: 1.7;
            max-width: 400px;
        }
        .marketplace-footer h5 {
            color: white;
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 1rem;
            letter-spacing: 0.5px;
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
            margin-top: 1rem;
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
            font-size: 1rem;
        }
        .marketplace-footer .footer-social a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
        }
        .marketplace-footer .footer-divider {
            border-color: rgba(255,255,255,0.05);
            margin: 2rem 0;
        }
        
        /* ==================== RESPONSIVE ==================== */
        @media (max-width: 1200px) {
            .search-bar {
                max-width: 400px;
            }
        }
        
        @media (max-width: 992px) {
            .marketplace-navbar .container,
            .categories-nav .container,
            main .container,
            .marketplace-footer .container {
                padding: 0 1.5rem;
            }
            .search-bar {
                min-width: 150px;
                max-width: 350px;
            }
            .navbar-brand-custom {
                font-size: 1.4rem;
            }
            .nav-actions {
                gap: 0.3rem;
            }
            .nav-action-btn {
                width: 38px;
                height: 38px;
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
            .navbar-brand-custom i {
                font-size: 1.4rem;
            }
            .search-bar {
                order: 3;
                max-width: 100%;
                flex-basis: 100%;
                min-width: auto;
            }
            .search-bar .search-shortcut {
                display: none;
            }
            .nav-actions {
                gap: 0.2rem;
            }
            .nav-action-btn {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
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
                padding: 2.5rem 0 1.5rem;
                margin-top: 2rem;
            }
            .marketplace-footer .footer-text {
                max-width: 100%;
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
            .navbar-brand-custom {
                font-size: 1rem;
            }
            .navbar-brand-custom i {
                font-size: 1.2rem;
            }
            .nav-action-btn {
                width: 32px;
                height: 32px;
                font-size: 0.8rem;
            }
            .nav-action-btn .badge-count {
                font-size: 0.5rem;
                min-width: 16px;
                padding: 0.1rem 0.35rem;
                top: -4px;
                right: -4px;
            }
            .categories-nav .category-link {
                font-size: 0.75rem;
                padding: 0.3rem 0.8rem;
            }
            .btn-outline-primary-custom span,
            .btn-primary-custom span {
                display: none !important;
            }
            .btn-outline-primary-custom,
            .btn-primary-custom {
                padding: 0.35rem 0.7rem;
                font-size: 0.8rem;
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
                <a href=\"{{ path('marketplace_home') }}\" class=\"navbar-brand-custom\">
                    <i class=\"fas fa-store\"></i>
                    HMA Market
                    <span class=\"brand-dot\"></span>
                </a>
                
                <!-- Search Bar -->
                <div class=\"search-bar\">
                    <div class=\"search-input-wrapper\">
                        <i class=\"fas fa-search search-icon\"></i>
                        <input type=\"text\" 
                               id=\"marketplaceSearch\" 
                               class=\"form-control\" 
                               placeholder=\"Rechercher un produit, une pharmacie...\"
                               autocomplete=\"off\"
                               onkeyup=\"if(event.key==='Enter') window.location.href='{{ path('marketplace_products') }}?search='+encodeURIComponent(this.value)\">
                        <span class=\"search-shortcut\">⌘K</span>
                        <span class=\"search-clear\" onclick=\"document.getElementById('marketplaceSearch').value='';this.style.display='none';\">
                            <i class=\"fas fa-times\"></i>
                        </span>
                    </div>
                </div>
                
                <!-- Navigation Actions -->
                <div class=\"nav-actions\">
                    <!-- Pharmacies -->
                    <a href=\"{{ path('marketplace_pharmacy_search') }}\" class=\"nav-action-btn\" title=\"Pharmacies de garde\">
                        <i class=\"fas fa-hospital\"></i>
                    </a>
                    
                    <!-- Favoris -->
                    <a href=\"{{ path('marketplace_favorites') }}\" class=\"nav-action-btn\" title=\"Mes favoris\">
                        <i class=\"fas fa-heart\"></i>
                        {% set favCount = get_favorites_count() %}
                        <span class=\"badge-count\" id=\"favoritesCount\" style=\"display: {{ favCount > 0 ? 'block' : 'none' }};\">
                            {{ favCount }}
                        </span>
                    </a>

                    <!-- Panier -->
                    <a href=\"{{ path('marketplace_cart') }}\" class=\"nav-action-btn\" title=\"Mon panier\">
                        <i class=\"fas fa-shopping-cart\"></i>
                        {% set cartCount = get_cart_items_count() %}
                        <span class=\"badge-count\" id=\"cartCount\" style=\"display: {{ cartCount > 0 ? 'block' : 'none' }};\">
                            {{ cartCount }}
                        </span>
                    </a>
                    
                    <!-- Profil / Connexion -->
                    {% if app.user and is_customer(app.user) %}
                        <div class=\"dropdown\">
                            <button class=\"btn btn-primary-custom dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fas fa-user me-1\"></i>
                                <span class=\"d-none d-md-inline\">{{ app.user.fullName|default(app.user.email)|split('@')|first|slice(0, 12) }}</span>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4 py-2 animate__animated animate__fadeInDown\">
                                <li><a class=\"dropdown-item py-2 rounded-3\" href=\"{{ path('marketplace_profile') }}\">
                                    <i class=\"fas fa-user me-2 text-primary\"></i>Mon profil
                                </a></li>
                                <li><a class=\"dropdown-item py-2 rounded-3\" href=\"{{ path('marketplace_change_password') }}\">
                                    <i class=\"fas fa-key me-2 text-warning\"></i>Changer mon mot de passe
                                </a></li>
                                <li><a class=\"dropdown-item py-2 rounded-3\" href=\"{{ path('marketplace_orders') }}\">
                                    <i class=\"fas fa-list me-2 text-primary\"></i>Mes commandes
                                </a></li>
                                <li><a class=\"dropdown-item py-2 rounded-3\" href=\"{{ path('marketplace_favorites') }}\">
                                    <i class=\"fas fa-heart me-2 text-danger\"></i>Mes favoris
                                </a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item py-2 rounded-3 text-danger\" href=\"{{ path('marketplace_logout') }}\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion
                                </a></li>
                            </ul>
                        </div>
                    {% else %}
                        <a href=\"{{ path('marketplace_login') }}\" class=\"btn-outline-primary-custom\">
                            <i class=\"fas fa-sign-in-alt\"></i>
                            <span class=\"d-none d-md-inline\">Connexion</span>
                        </a>
                        <a href=\"{{ path('marketplace_register') }}\" class=\"btn-primary-custom\">
                            <i class=\"fas fa-user-plus\"></i>
                            <span class=\"d-none d-md-inline\">Inscription</span>
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== CATEGORIES NAV ==================== -->
    <div class=\"categories-nav\">
        <div class=\"container\">
            <div class=\"d-flex gap-1\">
                <a href=\"{{ path('marketplace_home') }}\" class=\"category-link {% if app.request.get('_route') == 'marketplace_home' %}active{% endif %}\">
                    <i class=\"fas fa-home\"></i>Accueil
                </a>
                <a href=\"{{ path('marketplace_products') }}\" class=\"category-link {% if app.request.get('_route') == 'marketplace_products' %}active{% endif %}\">
                    <i class=\"fas fa-th\"></i>Tous les produits
                </a>
                <a href=\"{{ path('marketplace_pharmacy_search') }}\" class=\"category-link {% if app.request.get('_route') == 'marketplace_pharmacy_search' %}active{% endif %}\">
                    <i class=\"fas fa-hospital\"></i>Pharmacies
                </a>
            </div>
        </div>
    </div>
    
    <!-- ==================== MAIN CONTENT ==================== -->
    <main>
        <div class=\"container\">
            <!-- Flash messages -->
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }} alert-dismissible fade show alert-custom animate__animated animate__fadeInDown\" role=\"alert\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <i class=\"fas fa-{% if label == 'success' %}check-circle text-success{% elseif label == 'danger' %}exclamation-circle text-danger{% elseif label == 'warning' %}exclamation-triangle text-warning{% else %}info-circle text-primary{% endif %}\"></i>
                            <span>{{ message }}</span>
                        </div>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                {% endfor %}
            {% endfor %}
            
            {% block body %}{% endblock %}
        </div>
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
                    <div class=\"footer-social\">
                        <a href=\"#\" aria-label=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a href=\"#\" aria-label=\"Twitter\"><i class=\"fab fa-twitter\"></i></a>
                        <a href=\"#\" aria-label=\"Instagram\"><i class=\"fab fa-instagram\"></i></a>
                        <a href=\"#\" aria-label=\"LinkedIn\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a href=\"#\" aria-label=\"YouTube\"><i class=\"fab fa-youtube\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4\">
                    <h5>Liens utiles</h5>
                    <div class=\"d-flex flex-column gap-2\">
                        <a href=\"{{ path('marketplace_pharmacy_search') }}\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Pharmacies de garde
                        </a>
                        <a href=\"{{ path('marketplace_products') }}\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Tous les produits
                        </a>
                        <a href=\"{{ path('marketplace_favorites') }}\">
                            <i class=\"fas fa-chevron-right\" style=\"font-size: 0.6rem;\"></i>
                            Mes favoris
                        </a>
                        <a href=\"{{ path('marketplace_orders') }}\">
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
                    &copy; {{ \"now\"|date(\"Y\") }} HMA Market. Tous droits réservés.
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
        // ==================== SELECT2 ====================
        if (typeof \$ !== 'undefined' && \$.fn.select2) {
            \$('.select2').select2({
                theme: 'bootstrap-5',
                width: '100%',
                language: 'fr'
            });
        }
        
        // ==================== NAVBAR SCROLL EFFECT ====================
        const navbar = document.getElementById('mainNavbar');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // ==================== SEARCH SHORTCUT (⌘K) ====================
        document.addEventListener('keydown', function(e) {
            if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
                e.preventDefault();
                const searchInput = document.getElementById('marketplaceSearch');
                if (searchInput) {
                    searchInput.focus();
                    searchInput.select();
                }
            }
            // ESC to clear search
            if (e.key === 'Escape') {
                const searchInput = document.getElementById('marketplaceSearch');
                if (searchInput && document.activeElement === searchInput) {
                    searchInput.blur();
                }
            }
        });
        
        // ==================== SEARCH CLEAR ====================
        const searchInput = document.getElementById('marketplaceSearch');
        const searchClear = document.querySelector('.search-clear');
        if (searchInput && searchClear) {
            searchInput.addEventListener('input', function() {
                if (this.value.length > 0) {
                    searchClear.style.display = 'block';
                } else {
                    searchClear.style.display = 'none';
                }
            });
        }
        
        // ==================== UPDATE COUNTERS ====================
        function updateCounters() {
            // Mettre à jour les favoris
            fetch('{{ path('marketplace_favorites_count') }}')
                .then(response => response.json())
                .then(data => {
                    const badge = document.getElementById('favoritesCount');
                    if (badge) {
                        const count = data.count || 0;
                        badge.textContent = count;
                        badge.style.display = count > 0 ? 'block' : 'none';
                        // Animation de mise à jour
                        if (count > 0) {
                            badge.style.animation = 'none';
                            setTimeout(() => badge.style.animation = 'badge-pop 0.3s ease', 10);
                        }
                    }
                })
                .catch(() => {
                    // Fallback
                    const badge = document.getElementById('favoritesCount');
                    if (badge) {
                        const count = parseInt(badge.textContent) || 0;
                        badge.style.display = count > 0 ? 'block' : 'none';
                    }
                });

            // Mettre à jour le panier
            fetch('{{ path('marketplace_cart_count') }}')
                .then(response => response.json())
                .then(data => {
                    const badge = document.getElementById('cartCount');
                    if (badge) {
                        const count = data.count || 0;
                        badge.textContent = count;
                        badge.style.display = count > 0 ? 'block' : 'none';
                        // Animation de mise à jour
                        if (count > 0) {
                            badge.style.animation = 'none';
                            setTimeout(() => badge.style.animation = 'badge-pop 0.3s ease', 10);
                        }
                    }
                })
                .catch(() => {
                    // Fallback
                    const badge = document.getElementById('cartCount');
                    if (badge) {
                        const count = parseInt(badge.textContent) || 0;
                        badge.style.display = count > 0 ? 'block' : 'none';
                    }
                });
        }

        // Exposer la fonction globalement
        window.updateCounters = updateCounters;

        // Mettre à jour au chargement
        setTimeout(updateCounters, 300);

        // Écouter les événements personnalisés
        document.addEventListener('cartUpdated', updateCounters);
        document.addEventListener('favoritesUpdated', updateCounters);

        // ==================== NOTIFICATIONS ====================
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
            notification.style.boxShadow = '0 10px 40px rgba(0,0,0,0.15)';
            notification.innerHTML = `
                <div class=\"d-flex align-items-center gap-2\">
                    <i class=\"fas \${icons[type] || icons.info} fa-lg\"></i>
                    <span class=\"fw-medium\">\${message}</span>
                    <button type=\"button\" class=\"btn-close btn-close-white ms-2\" onclick=\"this.closest('.position-fixed').remove()\" style=\"opacity: 0.6;\"></button>
                </div>
            `;
            document.body.appendChild(notification);
            
            // Auto-remove après 4 secondes
            setTimeout(() => {
                notification.style.animation = 'slideDown 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 4000);
        };
        
        // ==================== ADDITIONAL STYLES ====================
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
            .dropdown-menu {
                backdrop-filter: blur(20px);
                background: rgba(255, 255, 255, 0.98);
            }
            .dropdown-item {
                transition: var(--transition);
                padding: 0.5rem 1rem;
            }
            .dropdown-item:hover {
                background: var(--primary-light);
                color: var(--primary-color);
            }
            .dropdown-item.text-danger:hover {
                background: rgba(239, 68, 68, 0.1);
                color: var(--danger-color);
            }
        `;
        document.head.appendChild(style);
    });
    </script>
    
    {% block javascripts %}{% endblock %}
</body>
</html>", "base_marketplace.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\base_marketplace.html.twig");
    }
}
