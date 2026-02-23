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

/* super_admin/hma_service/show.html.twig */
class __TwigTemplate_c60bd7aca842b688cf61d82be538b62a extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/hma_service/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/hma_service/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 4, $this->source); })()), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* Variables de couleurs */
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --success-gradient: linear-gradient(135deg, #28a745 0%, #218838 100%);
        --warning-gradient: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        --danger-gradient: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        --info-gradient: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        --purple-gradient: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%);
        --dark-gradient: linear-gradient(135deg, #343a40 0%, #23272b 100%);
    }

    /* En-tête entreprise amélioré */
    .company-header {
        background: var(--primary-gradient);
        color: white;
        padding: 2.5rem;
        border-radius: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 15px 30px rgba(102, 126, 234, 0.3);
        position: relative;
        overflow: hidden;
    }

    .company-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .company-logo-large {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 20px;
        border: 4px solid white;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }

    .company-logo-large:hover {
        transform: scale(1.05);
    }

    .company-initials-large {
        width: 120px;
        height: 120px;
        border-radius: 20px;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(5px);
        border: 4px solid white;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 3.5rem;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }

    .company-initials-large:hover {
        transform: scale(1.05);
    }

    /* Badges améliorés */
    .badge-custom {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
        border-radius: 50px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }

    .badge-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    }

    /* STYLES POUR LES RÔLES - COPIÉS DE INDEX.HTML.TWIG */
    .role-badge {
        font-size: 0.8rem;
        padding: 0.3rem 0.6rem;
        margin-right: 2px;
        display: inline-block;
        font-weight: 500;
        border-radius: 50px;
    }
    
    .role-badge.role-admin {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    .role-badge.role-manager {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .role-badge.role-stock {
        background: linear-gradient(135deg, #ffc107 0%, #ffca2c 100%);
        color: #212529;
    }
    .role-badge.role-cashier {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
        color: white;
    }
    .role-badge.role-user {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }
    
    /* STYLES POUR LES PLANS - COPIÉS DE INDEX.HTML.TWIG */
    .plan-badge {
        font-size: 0.85rem;
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 50px;
    }
    
    .plan-trial {
        background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        color: white;
    }
    .plan-freemium {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }
    .plan-basic {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .plan-premium {
        background: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%);
        color: white;
    }
    
    /* STYLES POUR LE STATUT - COPIÉS DE INDEX.HTML.TWIG */
    .status-badge {
        font-size: 0.85rem;
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 50px;
    }
    
    .status-active {
        background: linear-gradient(135deg, #28a745 0%, #218838 100%);
        color: white;
    }
    
    .status-inactive {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    
    .status-trial {
        background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        color: #212529;
    }

    /* Cartes d'information améliorées */
    .info-card {
        transition: all 0.3s;
        height: 100%;
        border: none;
        border-radius: 1rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .info-card .card-body {
        padding: 1.5rem;
    }

    .info-card .card-title {
        color: #495057;
        font-weight: 600;
        margin-bottom: 1.2rem;
    }

    .info-card hr {
        margin: 1rem 0;
        opacity: 0.1;
    }

    /* Alertes améliorées */
    .alert-trial {
        background: var(--warning-gradient);
        color: #212529;
        border: none;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        margin-top: 1rem;
        box-shadow: 0 5px 10px rgba(255, 193, 7, 0.3);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.02); }
        100% { transform: scale(1); }
    }

    /* Barres de progression améliorées */
    .usage-progress {
        height: 8px;
        border-radius: 4px;
        background-color: #e9ecef;
        overflow: hidden;
        margin: 0.5rem 0;
    }

    .progress-bar {
        position: relative;
        overflow: hidden;
    }

    .progress-bar::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    /* Badges de fonctionnalités améliorés */
    .feature-badge {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        color: #495057;
        padding: 0.6rem 1.2rem;
        border-radius: 50px;
        font-size: 0.9rem;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
    }

    .feature-badge:hover {
        background: var(--primary-gradient);
        color: white;
        border-color: transparent;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .feature-badge:hover i {
        color: white !important;
    }

    /* Cartes de rôles améliorées */
    .role-card {
        border: none;
        border-radius: 1rem;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s;
        overflow: hidden;
        height: 100%;
    }

    .role-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .role-card .card-body {
        padding: 1.5rem;
    }

    .role-count {
        font-size: 2rem;
        font-weight: bold;
        color: #212529;
        margin: 0.5rem 0;
    }

    /* Statuts des rôles */
    .role-status-active {
        color: #28a745;
        font-weight: 600;
    }

    .role-status-warning {
        color: #ffc107;
        font-weight: 600;
    }

    .role-status-inactive {
        color: #dc3545;
        font-weight: 600;
    }

    /* Tableau des abonnements amélioré */
    .subscriptions-table {
        border-collapse: separate;
        border-spacing: 0 0.5rem;
    }

    .subscriptions-table tbody tr {
        background: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
        transition: all 0.3s;
    }

    .subscriptions-table tbody tr:hover {
        background: #f8f9fa;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-2px);
    }

    .subscriptions-table td {
        padding: 1rem;
        vertical-align: middle;
        border: none;
    }

    /* Icônes animées */
    .animated-icon {
        transition: all 0.3s;
    }

    .animated-icon:hover {
        transform: rotate(360deg) scale(1.2);
    }

    /* Tooltips personnalisés */
    .custom-tooltip {
        position: relative;
        cursor: help;
    }

    .custom-tooltip:hover:after {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0,0,0,0.8);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        font-size: 0.85rem;
        white-space: nowrap;
        z-index: 1000;
        pointer-events: none;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* Compteurs animés */
    .counter-number {
        font-size: 1.2rem;
        font-weight: 600;
        color: #212529;
        transition: all 0.3s;
    }

    .counter-number:hover {
        color: var(--primary-gradient);
        transform: scale(1.1);
    }

    /* Boutons améliorés */
    .btn-action {
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s;
        border: none;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .btn-action:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    .btn-back {
        background: rgba(255,255,255,0.2);
        color: white;
        border: 1px solid rgba(255,255,255,0.3);
        backdrop-filter: blur(5px);
    }

    .btn-back:hover {
        background: rgba(255,255,255,0.3);
        color: white;
        border-color: rgba(255,255,255,0.5);
        transform: translateX(-3px);
    }

    .btn-back i {
        transition: transform 0.3s;
    }

    .btn-back:hover i {
        transform: translateX(-3px);
    }

    .btn-edit {
        background: white;
        color: #667eea;
    }

    .btn-edit:hover {
        background: var(--primary-gradient);
        color: white;
    }

    .btn-history {
        background: var(--info-gradient);
        color: white;
    }

    /* Carte Leaflet améliorée */
    #map {
        border-radius: 0.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }

    #map:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    /* Animations d'entrée */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animated-card {
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
    }

    .animated-card:nth-child(1) { animation-delay: 0.1s; }
    .animated-card:nth-child(2) { animation-delay: 0.2s; }
    .animated-card:nth-child(3) { animation-delay: 0.3s; }
    .animated-card:nth-child(4) { animation-delay: 0.4s; }
    .animated-card:nth-child(5) { animation-delay: 0.5s; }

    /* Mini cartes de statistiques */
    .stat-mini-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 1rem;
        padding: 1rem;
        text-align: center;
        transition: all 0.3s;
    }

    .stat-mini-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .stat-mini-icon {
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }

    .stat-mini-value {
        font-size: 1.5rem;
        font-weight: bold;
        color: #212529;
    }

    .stat-mini-label {
        font-size: 0.85rem;
        color: #6c757d;
    }

    /* Badge d'évolution */
    .evolution-badge {
        padding: 0.25rem 0.5rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .evolution-up {
        background: #d4edda;
        color: #155724;
    }

    .evolution-down {
        background: #f8d7da;
        color: #721c24;
    }

    .evolution-stable {
        background: #e2e3e5;
        color: #383d41;
    }

    /* Barre de progression personnalisée */
    .progress {
        background-color: #e9ecef;
        border-radius: 4px;
        overflow: hidden;
    }

    .progress-bar {
        transition: width 0.6s ease;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 542
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

        // line 543
        yield "<div class=\"container-fluid py-4\">
    <!-- En-tête avec navigation -->
    <nav aria-label=\"breadcrumb\" class=\"mb-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
                <a href=\"";
        // line 548
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_index");
        yield "\" class=\"text-decoration-none\">
                    <i class=\"bi bi-building me-1\"></i>
                    Entreprises
                </a>
            </li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                ";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 554, $this->source); })()), "companyName", [], "any", false, false, false, 554), "html", null, true);
        yield "
            </li>
        </ol>
    </nav>

    <!-- Header entreprise amélioré -->
    <div class=\"company-header animated-card\">
        <div class=\"row align-items-center\">
            <div class=\"col-auto\">
                ";
        // line 563
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 563, $this->source); })()), "logo", [], "any", false, false, false, 563)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 564
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 564, $this->source); })()), "logo", [], "any", false, false, false, 564))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 565
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 565, $this->source); })()), "companyName", [], "any", false, false, false, 565), "html", null, true);
            yield "\" 
                         class=\"company-logo-large\">
                ";
        } else {
            // line 568
            yield "                    <div class=\"company-initials-large\">
                        ";
            // line 569
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 569, $this->source); })()), "companyName", [], "any", false, false, false, 569))), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 572
        yield "            </div>
            <div class=\"col\">
                <h1 class=\"display-4 mb-2 fw-bold\">";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 574, $this->source); })()), "companyName", [], "any", false, false, false, 574), "html", null, true);
        yield "</h1>
                <div class=\"d-flex gap-2 flex-wrap\">
                    <span class=\"badge badge-custom bg-white text-dark\">
                        <i class=\"bi bi-hash me-1\"></i>
                        #";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 578, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 578), "html", null, true);
        yield "
                    </span>
                    <span class=\"badge badge-custom bg-white text-dark\">
                        <i class=\"bi bi-tag me-1\"></i>
                        ";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 582, $this->source); })()), "companyType", [], "any", false, false, false, 582)), "html", null, true);
        yield "
                    </span>
                    
                    <!-- BADGE STATUT AVEC STYLE CORRIGÉ -->
                    ";
        // line 586
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 586, $this->source); })()), "hmaActive", [], "any", false, false, false, 586)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 587
            yield "                        <span class=\"badge status-active status-badge\">
                            <i class=\"bi bi-check-circle me-1\"></i>
                            Active
                        </span>
                    ";
        } else {
            // line 592
            yield "                        <span class=\"badge status-inactive status-badge\">
                            <i class=\"bi bi-x-circle me-1\"></i>
                            Désactivée
                        </span>
                    ";
        }
        // line 597
        yield "                    
                    <!-- BADGE PLAN AVEC STYLE CORRIGÉ -->
                    ";
        // line 599
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 599, $this->source); })()), "currentPlan", [], "any", false, false, false, 599) == "trial")) {
            // line 600
            yield "                        <span class=\"badge plan-trial plan-badge\">
                            <i class=\"bi bi-hourglass-split me-1\"></i>
                            ";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 602, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 602), "html", null, true);
            yield "
                        </span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 604
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 604, $this->source); })()), "currentPlan", [], "any", false, false, false, 604) == "freemium")) {
            // line 605
            yield "                        <span class=\"badge plan-freemium plan-badge\">
                            <i class=\"bi bi-gift me-1\"></i>
                            ";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 607, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 607), "html", null, true);
            yield "
                        </span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 609
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 609, $this->source); })()), "currentPlan", [], "any", false, false, false, 609) == "basic")) {
            // line 610
            yield "                        <span class=\"badge plan-basic plan-badge\">
                            <i class=\"bi bi-rocket me-1\"></i>
                            ";
            // line 612
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 612, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 612), "html", null, true);
            yield "
                        </span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 614
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 614, $this->source); })()), "currentPlan", [], "any", false, false, false, 614) == "premium")) {
            // line 615
            yield "                        <span class=\"badge plan-premium plan-badge\">
                            <i class=\"bi bi-stars me-1\"></i>
                            ";
            // line 617
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 617, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 617), "html", null, true);
            yield "
                        </span>
                    ";
        } else {
            // line 620
            yield "                        <span class=\"badge bg-secondary plan-badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 620, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 620), "html", null, true);
            yield "</span>
                    ";
        }
        // line 622
        yield "                    
                    <!-- BADGE ABONNEMENT ACTIF -->
                    ";
        // line 624
        if ((($tmp = (isset($context["has_active_subscription"]) || array_key_exists("has_active_subscription", $context) ? $context["has_active_subscription"] : (function () { throw new RuntimeError('Variable "has_active_subscription" does not exist.', 624, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 625
            yield "                        <span class=\"badge status-active status-badge\">
                            <i class=\"bi bi-check-circle me-1\"></i>
                            Abonnement actif
                        </span>
                    ";
        } else {
            // line 630
            yield "                        <span class=\"badge status-trial status-badge\">
                            <i class=\"bi bi-exclamation-triangle me-1\"></i>
                            Sans abonnement actif
                        </span>
                    ";
        }
        // line 635
        yield "                </div>
            </div>
            <div class=\"col-auto\">
                <div class=\"d-flex gap-2\">
                    <a href=\"";
        // line 639
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_index");
        yield "\" 
                       class=\"btn btn-action btn-back\"
                       title=\"Retour à la liste des entreprises\">
                        <i class=\"bi bi-arrow-left me-1\"></i>
                        Retour
                    </a>
                    
                    <a href=\"";
        // line 646
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 646, $this->source); })()), "id", [], "any", false, false, false, 646)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-action btn-edit\"
                       title=\"Modifier cette entreprise\">
                        <i class=\"bi bi-pencil me-1\"></i>
                        Modifier
                    </a>
                    
                    <a href=\"";
        // line 653
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 653, $this->source); })()), "id", [], "any", false, false, false, 653)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-action btn-history\"
                       title=\"Voir l'historique des abonnements\">
                        <i class=\"bi bi-clock-history me-1\"></i>
                        Historique
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mini statistiques rapides -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-primary\">
                    <i class=\"bi bi-box\"></i>
                </div>
                <div class=\"stat-mini-value\">";
        // line 671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_products"]) || array_key_exists("total_products", $context) ? $context["total_products"] : (function () { throw new RuntimeError('Variable "total_products" does not exist.', 671, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-mini-label\">Produits</div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-success\">
                    <i class=\"bi bi-cart\"></i>
                </div>
                <div class=\"stat-mini-value\">";
        // line 680
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_orders"]) || array_key_exists("total_orders", $context) ? $context["total_orders"] : (function () { throw new RuntimeError('Variable "total_orders" does not exist.', 680, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-mini-label\">Commandes</div>
                ";
        // line 682
        if ((array_key_exists("orders_evolution", $context) && ((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 682, $this->source); })()) != 0))) {
            // line 683
            yield "                    <span class=\"evolution-badge ";
            yield ((((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 683, $this->source); })()) > 0)) ? ("evolution-up") : ("evolution-down"));
            yield " mt-2\">
                        <i class=\"bi bi-arrow-";
            // line 684
            yield ((((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 684, $this->source); })()) > 0)) ? ("up") : ("down"));
            yield "\"></i>
                        ";
            // line 685
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(abs((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 685, $this->source); })())), "html", null, true);
            yield "% vs mois dernier
                    </span>
                ";
        }
        // line 688
        yield "            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-info\">
                    <i class=\"bi bi-tags\"></i>
                </div>
                <div class=\"stat-mini-value\">";
        // line 695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_categories"]) || array_key_exists("total_categories", $context) ? $context["total_categories"] : (function () { throw new RuntimeError('Variable "total_categories" does not exist.', 695, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-mini-label\">Catégories</div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-warning\">
                    <i class=\"bi bi-truck\"></i>
                </div>
                <div class=\"stat-mini-value\">";
        // line 704
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_suppliers"]) || array_key_exists("total_suppliers", $context) ? $context["total_suppliers"] : (function () { throw new RuntimeError('Variable "total_suppliers" does not exist.', 704, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-mini-label\">Fournisseurs</div>
            </div>
        </div>
    </div>

    <!-- Cartes d'information améliorées -->
    <div class=\"row g-4 mb-4\">
        <!-- Contact -->
        <div class=\"col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-envelope me-2 text-primary animated-icon\"></i>
                        Contact
                    </h5>
                    <hr>
                    <div class=\"d-flex align-items-center mb-3\">
                        <div class=\"bg-primary bg-opacity-10 p-2 rounded-circle me-3\">
                            <i class=\"bi bi-envelope text-primary\"></i>
                        </div>
                        <div>
                            <small class=\"text-muted d-block\">Email</small>
                            <a href=\"mailto:";
        // line 727
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 727, $this->source); })()), "email", [], "any", false, false, false, 727), "html", null, true);
        yield "\" class=\"text-decoration-none text-dark fw-bold\">
                                ";
        // line 728
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 728, $this->source); })()), "email", [], "any", false, false, false, 728), "html", null, true);
        yield "
                            </a>
                        </div>
                    </div>
                    
                    ";
        // line 733
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 733, $this->source); })()), "phone", [], "any", false, false, false, 733)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 734
            yield "                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"bg-success bg-opacity-10 p-2 rounded-circle me-3\">
                                <i class=\"bi bi-telephone text-success\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\">Téléphone</small>
                                <a href=\"tel:";
            // line 740
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 740, $this->source); })()), "phone", [], "any", false, false, false, 740), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark fw-bold\">
                                    ";
            // line 741
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 741, $this->source); })()), "phone", [], "any", false, false, false, 741), "html", null, true);
            yield "
                                </a>
                            </div>
                        </div>
                    ";
        }
        // line 746
        yield "                    
                    ";
        // line 747
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 747, $this->source); })()), "address", [], "any", false, false, false, 747)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 748
            yield "                        <div class=\"d-flex align-items-center\">
                            <div class=\"bg-info bg-opacity-10 p-2 rounded-circle me-3\">
                                <i class=\"bi bi-geo-alt text-info\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\">Adresse</small>
                                <span class=\"text-dark\">
                                    ";
            // line 755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 755, $this->source); })()), "address", [], "any", false, false, false, 755), "html", null, true);
            yield "<br>
                                    ";
            // line 756
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 756, $this->source); })()), "city", [], "any", false, false, false, 756)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 756, $this->source); })()), "city", [], "any", false, false, false, 756), "html", null, true);
                yield ", ";
            }
            // line 757
            yield "                                    ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "country", [], "any", true, true, false, 757) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 757, $this->source); })()), "country", [], "any", false, false, false, 757)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 757, $this->source); })()), "country", [], "any", false, false, false, 757), "html", null, true)) : ("Sénégal"));
            yield "
                                </span>
                            </div>
                        </div>
                    ";
        }
        // line 762
        yield "                </div>
            </div>
        </div>

        <!-- Dates clés améliorées -->
        <div class=\"col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-calendar me-2 text-primary animated-icon\"></i>
                        Dates clés
                    </h5>
                    <hr>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"bg-light p-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\">Création</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Date de création\">
                                    <i class=\"bi bi-calendar-plus me-1 text-primary\"></i>
                                    ";
        // line 782
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["created_at"]) || array_key_exists("created_at", $context) ? $context["created_at"] : (function () { throw new RuntimeError('Variable "created_at" does not exist.', 782, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"bg-light p-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\">Activation</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Date d'activation\">
                                    <i class=\"bi bi-calendar-check me-1 text-success\"></i>
                                    ";
        // line 791
        yield (((($tmp = (isset($context["activated_at"]) || array_key_exists("activated_at", $context) ? $context["activated_at"] : (function () { throw new RuntimeError('Variable "activated_at" does not exist.', 791, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["activated_at"]) || array_key_exists("activated_at", $context) ? $context["activated_at"] : (function () { throw new RuntimeError('Variable "activated_at" does not exist.', 791, $this->source); })()), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class=\"my-3\">
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"bg-light p-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\">Début abonnement</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Début de l'abonnement\">
                                    <i class=\"bi bi-play-circle me-1 text-info\"></i>
                                    ";
        // line 805
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 805, $this->source); })()), "subscriptionStartAt", [], "any", false, false, false, 805)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 805, $this->source); })()), "subscriptionStartAt", [], "any", false, false, false, 805), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"bg-light p-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\">Fin abonnement</small>
                                <div class=\"fw-bold counter-number ";
        // line 812
        yield ((((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 812, $this->source); })()) && ((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 812, $this->source); })()) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) ? ("text-danger") : (""));
        yield "\" 
                                     data-tooltip=\"Fin de l'abonnement\">
                                    <i class=\"bi bi-stop-circle me-1 ";
        // line 814
        yield ((((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 814, $this->source); })()) && ((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 814, $this->source); })()) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) ? ("text-danger") : ("text-warning"));
        yield "\"></i>
                                    ";
        // line 815
        yield (((($tmp = (isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 815, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 815, $this->source); })()), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alerte essai -->
                    ";
        // line 822
        if ((($tmp = (isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 822, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 823
            yield "                        <div class=\"alert-trial mt-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"me-3\">
                                    <i class=\"bi bi-hourglass-split fs-4\"></i>
                                </div>
                                <div>
                                    <strong>Période d'essai</strong><br>
                                    <small>
                                        Expire le ";
            // line 831
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 831, $this->source); })()), "d/m/Y"), "html", null, true);
            yield "
                                        (";
            // line 832
            yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff((isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 832, $this->source); })()));
            yield ")
                                    </small>
                                </div>
                                <div class=\"ms-auto\">
                                    <span class=\"badge bg-dark\">
                                        ";
            // line 837
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 837, $this->source); })()), "d/m/Y"), "html", null, true);
            yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 843
        yield "
                    <!-- Alerte expiration abonnement -->
                    ";
        // line 845
        if (((array_key_exists("days_until_expiration", $context) &&  !(null === (isset($context["days_until_expiration"]) || array_key_exists("days_until_expiration", $context) ? $context["days_until_expiration"] : (function () { throw new RuntimeError('Variable "days_until_expiration" does not exist.', 845, $this->source); })()))) && ((isset($context["days_until_expiration"]) || array_key_exists("days_until_expiration", $context) ? $context["days_until_expiration"] : (function () { throw new RuntimeError('Variable "days_until_expiration" does not exist.', 845, $this->source); })()) <= 30))) {
            // line 846
            yield "                        <div class=\"alert alert-warning mt-3 py-2\">
                            <i class=\"bi bi-exclamation-triangle me-2\"></i>
                            <strong>Attention :</strong> Abonnement expire dans ";
            // line 848
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["days_until_expiration"]) || array_key_exists("days_until_expiration", $context) ? $context["days_until_expiration"] : (function () { throw new RuntimeError('Variable "days_until_expiration" does not exist.', 848, $this->source); })()), "html", null, true);
            yield " jours
                        </div>
                    ";
        }
        // line 851
        yield "                </div>
            </div>
        </div>

        <!-- Localisation -->
        <div class=\"col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-geo me-2 text-primary animated-icon\"></i>
                        Localisation
                    </h5>
                    <hr>
                    ";
        // line 864
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 864, $this->source); })()), "latitude", [], "any", false, false, false, 864) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 864, $this->source); })()), "longitude", [], "any", false, false, false, 864))) {
            // line 865
            yield "                        <div id=\"map\" style=\"height: 180px;\"></div>
                        <div class=\"d-flex justify-content-between mt-3\">
                            <small class=\"text-muted\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Lat: ";
            // line 869
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 869, $this->source); })()), "latitude", [], "any", false, false, false, 869), "html", null, true);
            yield "
                            </small>
                            <small class=\"text-muted\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Long: ";
            // line 873
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 873, $this->source); })()), "longitude", [], "any", false, false, false, 873), "html", null, true);
            yield "
                            </small>
                        </div>
                    ";
        } else {
            // line 877
            yield "                        <div class=\"text-center py-4\">
                            <div class=\"mb-3\">
                                <i class=\"bi bi-geo-alt fs-1 text-muted\"></i>
                            </div>
                            <h6 class=\"text-muted\">Aucune localisation</h6>
                            <p class=\"text-muted small\">Cette entreprise n'a pas renseigné de coordonnées GPS.</p>
                        </div>
                    ";
        }
        // line 885
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques d'utilisation améliorées -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-md-6\">
            <div class=\"card animated-card\">
                <div class=\"card-header bg-white border-0 pt-4\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-bar-chart me-2 text-primary\"></i>
                        Utilisation des ressources
                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Produits -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"fw-semibold\">
                                <i class=\"bi bi-box me-2 text-primary\"></i>
                                Produits
                            </span>
                            <span class=\"counter-number\">
                                <strong>";
        // line 909
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 909, $this->source); })()), "productCount", [], "any", false, false, false, 909), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\">/ ";
        // line 910
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 910, $this->source); })()), "products", [], "any", false, false, false, 910), "limit", [], "any", false, false, false, 910) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 910, $this->source); })()), "products", [], "any", false, false, false, 910), "limit", [], "any", false, false, false, 910), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-primary\" 
                                 style=\"width: ";
        // line 915
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 915, $this->source); })()), "products", [], "any", false, false, false, 915), "percentage", [], "any", false, false, false, 915), "html", null, true);
        yield "%\">
                            </div>
                        </div>
                        <small class=\"text-muted mt-1 d-block\">
                            <i class=\"bi bi-arrow-right me-1\"></i>
                            ";
        // line 920
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 920, $this->source); })()), "products", [], "any", false, false, false, 920), "remaining", [], "any", false, false, false, 920) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("Illimité") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 920, $this->source); })()), "products", [], "any", false, false, false, 920), "remaining", [], "any", false, false, false, 920) . " restants"), "html", null, true)));
        yield "
                        </small>
                    </div>

                    <!-- Catégories -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"fw-semibold\">
                                <i class=\"bi bi-tags me-2 text-success\"></i>
                                Catégories
                            </span>
                            <span class=\"counter-number\">
                                <strong>";
        // line 932
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 932, $this->source); })()), "categoryCount", [], "any", false, false, false, 932), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\">/ ";
        // line 933
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 933, $this->source); })()), "categories", [], "any", false, false, false, 933), "limit", [], "any", false, false, false, 933) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 933, $this->source); })()), "categories", [], "any", false, false, false, 933), "limit", [], "any", false, false, false, 933), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-success\" 
                                 style=\"width: ";
        // line 938
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 938, $this->source); })()), "categoryCount", [], "any", false, false, false, 938) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 938, $this->source); })()), "categories", [], "any", false, false, false, 938), "limit", [], "any", false, false, false, 938)) * 100)), "html", null, true);
        yield "%\">
                            </div>
                        </div>
                    </div>

                    <!-- Fournisseurs -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"fw-semibold\">
                                <i class=\"bi bi-truck me-2 text-warning\"></i>
                                Fournisseurs
                            </span>
                            <span class=\"counter-number\">
                                <strong>";
        // line 951
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 951, $this->source); })()), "supplierCount", [], "any", false, false, false, 951), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\">/ ";
        // line 952
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 952, $this->source); })()), "suppliers", [], "any", false, false, false, 952), "limit", [], "any", false, false, false, 952) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 952, $this->source); })()), "suppliers", [], "any", false, false, false, 952), "limit", [], "any", false, false, false, 952), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-warning\" 
                                 style=\"width: ";
        // line 957
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 957, $this->source); })()), "supplierCount", [], "any", false, false, false, 957) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 957, $this->source); })()), "suppliers", [], "any", false, false, false, 957), "limit", [], "any", false, false, false, 957)) * 100)), "html", null, true);
        yield "%\">
                            </div>
                        </div>
                    </div>

                    <!-- Utilisateurs -->
                    <div class=\"mt-4 pt-2 border-top\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"fw-semibold\">
                                <i class=\"bi bi-people me-2 text-info\"></i>
                                Utilisateurs
                            </span>
                            <span class=\"counter-number\">
                                <strong>";
        // line 970
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users_count"]) || array_key_exists("total_users_count", $context) ? $context["total_users_count"] : (function () { throw new RuntimeError('Variable "total_users_count" does not exist.', 970, $this->source); })()), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\">total</small>
                            </span>
                        </div>
                        
                        ";
        // line 976
        yield "                        <div class=\"d-flex justify-content-between mt-2 small\">
                            <span class=\"text-success\">
                                <i class=\"bi bi-person-check\"></i>
                                ";
        // line 979
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_users_count"]) || array_key_exists("active_users_count", $context) ? $context["active_users_count"] : (function () { throw new RuntimeError('Variable "active_users_count" does not exist.', 979, $this->source); })()), "html", null, true);
        yield " actifs
                            </span>
                            <span class=\"text-warning\">
                                <i class=\"bi bi-person-exclamation\"></i>
                                ";
        // line 983
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["out_of_quota_count"]) || array_key_exists("out_of_quota_count", $context) ? $context["out_of_quota_count"] : (function () { throw new RuntimeError('Variable "out_of_quota_count" does not exist.', 983, $this->source); })()), "html", null, true);
        yield " hors quota
                            </span>
                            <span class=\"text-muted\">
                                <i class=\"bi bi-person-x\"></i>
                                ";
        // line 987
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_by_admin_count"]) || array_key_exists("inactive_by_admin_count", $context) ? $context["inactive_by_admin_count"] : (function () { throw new RuntimeError('Variable "inactive_by_admin_count" does not exist.', 987, $this->source); })()), "html", null, true);
        yield " désactivés
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fonctionnalités disponibles -->
        <div class=\"col-md-6\">
            <div class=\"card animated-card h-100\">
                <div class=\"card-header bg-white border-0 pt-4\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-stars me-2 text-primary\"></i>
                        Fonctionnalités disponibles
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex flex-wrap gap-2\">
                        ";
        // line 1006
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1006, $this->source); })()), "features", [], "any", false, false, false, 1006));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 1007
            yield "                            <span class=\"feature-badge\">
                                <i class=\"bi bi-check-circle-fill text-success me-1\"></i>
                                ";
            // line 1009
            if (($context["feature"] == "all")) {
                // line 1010
                yield "                                    Toutes les fonctionnalités
                                ";
            } elseif ((            // line 1011
$context["feature"] == "basic_inventory")) {
                // line 1012
                yield "                                    Inventaire basique
                                ";
            } elseif ((            // line 1013
$context["feature"] == "basic_reports")) {
                // line 1014
                yield "                                    Rapports basiques
                                ";
            } elseif ((            // line 1015
$context["feature"] == "advanced_inventory")) {
                // line 1016
                yield "                                    Inventaire avancé
                                ";
            } elseif ((            // line 1017
$context["feature"] == "reports")) {
                // line 1018
                yield "                                    Rapports avancés
                                ";
            } elseif ((            // line 1019
$context["feature"] == "api_access")) {
                // line 1020
                yield "                                    Accès API
                                ";
            } elseif ((            // line 1021
$context["feature"] == "priority_support")) {
                // line 1022
                yield "                                    Support prioritaire
                                ";
            } elseif ((            // line 1023
$context["feature"] == "custom_domain")) {
                // line 1024
                yield "                                    Domaine personnalisé
                                ";
            } elseif ((            // line 1025
$context["feature"] == "white_label")) {
                // line 1026
                yield "                                    White Label
                                ";
            } else {
                // line 1028
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["feature"], ["_" => " "])), "html", null, true);
                yield "
                                ";
            }
            // line 1030
            yield "                            </span>
                        ";
            $context['_iterated'] = true;
        }
        // line 1031
        if (!$context['_iterated']) {
            // line 1032
            yield "                            <div class=\"text-center py-4 w-100\">
                                <i class=\"bi bi-exclamation-circle fs-1 text-muted mb-3\"></i>
                                <p class=\"text-muted mb-0\">Aucune fonctionnalité disponible</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1037
        yield "                    </div>

                    ";
        // line 1039
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1039, $this->source); })()), "features", [], "any", false, false, false, 1039))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1040
            yield "                        <div class=\"mt-4 p-3 bg-light rounded-3\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <small class=\"text-muted d-block mb-1\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Plan actuel
                                    </small>
                                    <!-- BADGE PLAN AVEC STYLE CORRIGÉ -->
                                    ";
            // line 1048
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1048, $this->source); })()), "currentPlan", [], "any", false, false, false, 1048) == "trial")) {
                // line 1049
                yield "                                        <span class=\"badge plan-trial plan-badge p-2\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            ";
                // line 1051
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1051, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1051), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1053
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1053, $this->source); })()), "currentPlan", [], "any", false, false, false, 1053) == "freemium")) {
                // line 1054
                yield "                                        <span class=\"badge plan-freemium plan-badge p-2\">
                                            <i class=\"bi bi-gift me-1\"></i>
                                            ";
                // line 1056
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1056, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1056), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1058
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1058, $this->source); })()), "currentPlan", [], "any", false, false, false, 1058) == "basic")) {
                // line 1059
                yield "                                        <span class=\"badge plan-basic plan-badge p-2\">
                                            <i class=\"bi bi-rocket me-1\"></i>
                                            ";
                // line 1061
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1061, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1061), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1063
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1063, $this->source); })()), "currentPlan", [], "any", false, false, false, 1063) == "premium")) {
                // line 1064
                yield "                                        <span class=\"badge plan-premium plan-badge p-2\">
                                            <i class=\"bi bi-stars me-1\"></i>
                                            ";
                // line 1066
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1066, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1066), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 1069
                yield "                                        <span class=\"badge bg-secondary plan-badge p-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1069, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1069), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 1071
            yield "                                </div>
                                ";
            // line 1072
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1072, $this->source); })()), "trial_days_remaining", [], "any", false, false, false, 1072) > 0)) {
                // line 1073
                yield "                                    <div class=\"text-warning\">
                                        <i class=\"bi bi-hourglass-split me-1\"></i>
                                        ";
                // line 1075
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1075, $this->source); })()), "trial_days_remaining", [], "any", false, false, false, 1075), "html", null, true);
                yield " jours restants
                                    </div>
                                ";
            }
            // line 1078
            yield "                            </div>
                        </div>
                    ";
        }
        // line 1081
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques par rôle améliorées avec statut -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-12\">
            <div class=\"card animated-card\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-people me-2 text-primary\"></i>
                        Utilisateurs par rôle
                    </h5>
                    <div class=\"d-flex gap-2 flex-wrap\">
                        <span class=\"badge bg-success\">
                            <i class=\"bi bi-person-check me-1\"></i>
                            Actifs: ";
        // line 1098
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_users_count"]) || array_key_exists("active_users_count", $context) ? $context["active_users_count"] : (function () { throw new RuntimeError('Variable "active_users_count" does not exist.', 1098, $this->source); })()), "html", null, true);
        yield "
                        </span>
                        <span class=\"badge bg-warning text-dark\">
                            <i class=\"bi bi-person-exclamation me-1\"></i>
                            Hors quota: ";
        // line 1102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["out_of_quota_count"]) || array_key_exists("out_of_quota_count", $context) ? $context["out_of_quota_count"] : (function () { throw new RuntimeError('Variable "out_of_quota_count" does not exist.', 1102, $this->source); })()), "html", null, true);
        yield "
                        </span>
                        <span class=\"badge bg-secondary\">
                            <i class=\"bi bi-person-x me-1\"></i>
                            Désactivés: ";
        // line 1106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_by_admin_count"]) || array_key_exists("inactive_by_admin_count", $context) ? $context["inactive_by_admin_count"] : (function () { throw new RuntimeError('Variable "inactive_by_admin_count" does not exist.', 1106, $this->source); })()), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        ";
        // line 1112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users_by_role_with_status"]) || array_key_exists("users_by_role_with_status", $context) ? $context["users_by_role_with_status"] : (function () { throw new RuntimeError('Variable "users_by_role_with_status" does not exist.', 1112, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["role"] => $context["data"]) {
            // line 1113
            yield "                            <div class=\"col-md-3 mb-3\">
                                <div class=\"role-card\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                            <!-- BADGE RÔLE AVEC STYLE CORRIGÉ -->
                                            ";
            // line 1118
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 1119
                yield "                                                <span class=\"role-badge role-admin\">
                                                    <i class=\"bi bi-shield-check me-1\"></i>
                                                    ";
                // line 1121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1121), "html", null, true);
                yield "
                                                </span>
                                            ";
            } elseif ((            // line 1123
$context["role"] == "ROLE_MANAGER")) {
                // line 1124
                yield "                                                <span class=\"role-badge role-manager\">
                                                    <i class=\"bi bi-graph-up me-1\"></i>
                                                    ";
                // line 1126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1126), "html", null, true);
                yield "
                                                </span>
                                            ";
            } elseif ((            // line 1128
$context["role"] == "ROLE_STOCK_MANAGER")) {
                // line 1129
                yield "                                                <span class=\"role-badge role-stock\">
                                                    <i class=\"bi bi-box-seam me-1\"></i>
                                                    ";
                // line 1131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1131), "html", null, true);
                yield "
                                                </span>
                                            ";
            } elseif ((            // line 1133
$context["role"] == "ROLE_CASHIER")) {
                // line 1134
                yield "                                                <span class=\"role-badge role-cashier\">
                                                    <i class=\"bi bi-cash-coin me-1\"></i>
                                                    ";
                // line 1136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1136), "html", null, true);
                yield "
                                                </span>
                                            ";
            } else {
                // line 1139
                yield "                                                <span class=\"role-badge role-user\">
                                                    <i class=\"bi bi-person me-1\"></i>
                                                    ";
                // line 1141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1141), "html", null, true);
                yield "
                                                </span>
                                            ";
            }
            // line 1144
            yield "                                            <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1144), "html", null, true);
            yield "</span>
                                        </div>
                                        
                                        <!-- Barre de progression du statut -->
                                        <div class=\"progress mb-3\" style=\"height: 8px; background-color: #e9ecef;\">
                                            ";
            // line 1149
            $context["active_percent"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1149) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "active", [], "any", false, false, false, 1149) / CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1149)) * 100))) : (0));
            // line 1150
            yield "                                            ";
            $context["quota_percent"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1150) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quota", [], "any", false, false, false, 1150) / CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1150)) * 100))) : (0));
            // line 1151
            yield "                                            ";
            $context["inactive_percent"] = ((100 - (isset($context["active_percent"]) || array_key_exists("active_percent", $context) ? $context["active_percent"] : (function () { throw new RuntimeError('Variable "active_percent" does not exist.', 1151, $this->source); })())) - (isset($context["quota_percent"]) || array_key_exists("quota_percent", $context) ? $context["quota_percent"] : (function () { throw new RuntimeError('Variable "quota_percent" does not exist.', 1151, $this->source); })()));
            // line 1152
            yield "                                            
                                            <div class=\"progress-bar bg-success\" 
                                                 style=\"width: ";
            // line 1154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_percent"]) || array_key_exists("active_percent", $context) ? $context["active_percent"] : (function () { throw new RuntimeError('Variable "active_percent" does not exist.', 1154, $this->source); })()), "html", null, true);
            yield "%; border-radius: 4px 0 0 4px;\"
                                                 title=\"Actifs: ";
            // line 1155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "active", [], "any", false, false, false, 1155), "html", null, true);
            yield "\"></div>
                                            <div class=\"progress-bar bg-warning\" 
                                                 style=\"width: ";
            // line 1157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota_percent"]) || array_key_exists("quota_percent", $context) ? $context["quota_percent"] : (function () { throw new RuntimeError('Variable "quota_percent" does not exist.', 1157, $this->source); })()), "html", null, true);
            yield "%;\"
                                                 title=\"Hors quota: ";
            // line 1158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quota", [], "any", false, false, false, 1158), "html", null, true);
            yield "\"></div>
                                            <div class=\"progress-bar bg-secondary\" 
                                                 style=\"width: ";
            // line 1160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_percent"]) || array_key_exists("inactive_percent", $context) ? $context["inactive_percent"] : (function () { throw new RuntimeError('Variable "inactive_percent" does not exist.', 1160, $this->source); })()), "html", null, true);
            yield "%; border-radius: 0 4px 4px 0;\"
                                                 title=\"Désactivés: ";
            // line 1161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "inactive", [], "any", false, false, false, 1161), "html", null, true);
            yield "\"></div>
                                        </div>
                                        
                                        <!-- Détails des statuts -->
                                        <div class=\"d-flex justify-content-between text-center\">
                                            <div>
                                                <span class=\"fw-bold text-success\">";
            // line 1167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "active", [], "any", false, false, false, 1167), "html", null, true);
            yield "</span>
                                                <div><small class=\"text-muted\">Actifs</small></div>
                                            </div>
                                            <div>
                                                <span class=\"fw-bold text-warning\">";
            // line 1171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quota", [], "any", false, false, false, 1171), "html", null, true);
            yield "</span>
                                                <div><small class=\"text-muted\">Quota</small></div>
                                            </div>
                                            <div>
                                                <span class=\"fw-bold text-secondary\">";
            // line 1175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "inactive", [], "any", false, false, false, 1175), "html", null, true);
            yield "</span>
                                                <div><small class=\"text-muted\">Inactifs</small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 1182
        if (!$context['_iterated']) {
            // line 1183
            yield "                            <div class=\"col-12 text-center py-5\">
                                <i class=\"bi bi-people fs-1 text-muted d-block mb-3\"></i>
                                <h5 class=\"text-muted\">Aucun utilisateur</h5>
                                <p class=\"text-muted\">Cette entreprise n'a pas encore d'utilisateurs.</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['role'], $context['data'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1189
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Derniers abonnements -->
    <div class=\"card animated-card\">
        <div class=\"card-header bg-white d-flex justify-content-between align-items-center py-3\">
            <h5 class=\"mb-0\">
                <i class=\"bi bi-clock-history me-2 text-primary\"></i>
                Derniers abonnements
            </h5>
            <a href=\"";
        // line 1202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1202, $this->source); })()), "id", [], "any", false, false, false, 1202)]), "html", null, true);
        yield "\" 
               class=\"btn btn-sm btn-outline-primary\">
                Voir tout l'historique
                <i class=\"bi bi-arrow-right ms-1\"></i>
            </a>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table subscriptions-table mb-0\">
                    <thead>
                        <tr>
                            <th class=\"border-0 bg-light py-3 px-4\">Date</th>
                            <th class=\"border-0 bg-light py-3 px-4\">Plan</th>
                            <th class=\"border-0 bg-light py-3 px-4\">Montant</th>
                            <th class=\"border-0 bg-light py-3 px-4\">Statut</th>
                            <th class=\"border-0 bg-light py-3 px-4\">Date de fin</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 1221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 1221, $this->source); })()), 0, 5));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 1222
            yield "                            <tr>
                                <td class=\"px-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-calendar3 me-2 text-muted\"></i>
                                        <div>
                                            <div>";
            // line 1227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 1227), "d/m/Y"), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\">";
            // line 1228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 1228), "H:i"), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"px-4\">
                                    <!-- BADGE PLAN AVEC STYLE CORRIGÉ -->
                                    ";
            // line 1234
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "plan", [], "any", false, false, false, 1234) == "trial")) {
                // line 1235
                yield "                                        <span class=\"badge plan-trial plan-badge p-2\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            ";
                // line 1237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planLabel", [], "any", false, false, false, 1237), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1239
$context["subscription"], "plan", [], "any", false, false, false, 1239) == "freemium")) {
                // line 1240
                yield "                                        <span class=\"badge plan-freemium plan-badge p-2\">
                                            <i class=\"bi bi-gift me-1\"></i>
                                            ";
                // line 1242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planLabel", [], "any", false, false, false, 1242), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1244
$context["subscription"], "plan", [], "any", false, false, false, 1244) == "basic")) {
                // line 1245
                yield "                                        <span class=\"badge plan-basic plan-badge p-2\">
                                            <i class=\"bi bi-rocket me-1\"></i>
                                            ";
                // line 1247
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planLabel", [], "any", false, false, false, 1247), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1249
$context["subscription"], "plan", [], "any", false, false, false, 1249) == "premium")) {
                // line 1250
                yield "                                        <span class=\"badge plan-premium plan-badge p-2\">
                                            <i class=\"bi bi-stars me-1\"></i>
                                            ";
                // line 1252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planLabel", [], "any", false, false, false, 1252), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 1255
                yield "                                        <span class=\"badge bg-secondary plan-badge p-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planLabel", [], "any", false, false, false, 1255), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 1257
            yield "                                </td>
                                <td class=\"px-4\">
                                    ";
            // line 1259
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "amount", [], "any", false, false, false, 1259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1260
                yield "                                        <div class=\"fw-bold text-dark\">
                                            ";
                // line 1261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "amount", [], "any", false, false, false, 1261), 0, ",", " "), "html", null, true);
                yield " 
                                            <small class=\"text-muted\">FCFA</small>
                                        </div>
                                    ";
            } else {
                // line 1265
                yield "                                        <span class=\"text-muted\">-</span>
                                    ";
            }
            // line 1267
            yield "                                </td>
                                <td class=\"px-4\">
                                    ";
            // line 1269
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 1269) == "active")) {
                // line 1270
                yield "                                        <span class=\"status-badge status-active\">
                                            <i class=\"bi bi-check-circle\"></i>
                                            Actif
                                        </span>
                                    ";
            } else {
                // line 1275
                yield "                                        <span class=\"status-badge status-inactive\">
                                            <i class=\"bi bi-x-circle\"></i>
                                            Inactif
                                        </span>
                                    ";
            }
            // line 1280
            yield "                                </td>
                                <td class=\"px-4\">
                                    ";
            // line 1282
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 1282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1283
                yield "                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"bi bi-calendar-x me-2 text-muted\"></i>
                                            <span class=\"";
                // line 1285
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 1285) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) ? ("text-danger fw-bold") : (""));
                yield "\">
                                                ";
                // line 1286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 1286), "d/m/Y"), "html", null, true);
                yield "
                                            </span>
                                        </div>
                                    ";
            } else {
                // line 1290
                yield "                                        <span class=\"text-muted\">-</span>
                                    ";
            }
            // line 1292
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 1294
        if (!$context['_iterated']) {
            // line 1295
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-5\">
                                    <i class=\"bi bi-clock-history fs-1 text-muted d-block mb-3\"></i>
                                    <h5 class=\"text-muted\">Aucun abonnement</h5>
                                    <p class=\"text-muted\">Cette entreprise n'a pas encore d'historique d'abonnements.</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1303
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Carte Leaflet -->
";
        // line 1311
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1311, $this->source); })()), "latitude", [], "any", false, false, false, 1311) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1311, $this->source); })()), "longitude", [], "any", false, false, false, 1311))) {
            // line 1312
            yield "    ";
            yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 1313
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
        <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const map = L.map('map').setView([";
        // line 1318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1318, $this->source); })()), "latitude", [], "any", false, false, false, 1318), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1318, $this->source); })()), "longitude", [], "any", false, false, false, 1318), "html", null, true);
        yield "], 15);
                
                L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                    attribution: '©OpenStreetMap, ©CartoDB',
                    subdomains: 'abcd',
                    maxZoom: 19
                }).addTo(map);
                
                const customIcon = L.divIcon({
                    className: 'custom-marker',
                    html: '<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 40px; height: 40px; border-radius: 50%; border: 3px solid white; box-shadow: 0 5px 15px rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center;\"><i class=\"bi bi-building\" style=\"color: white; font-size: 20px;\"></i></div>',
                    iconSize: [40, 40],
                    iconAnchor: [20, 20],
                    popupAnchor: [0, -20]
                });
                
                L.marker([";
        // line 1334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1334, $this->source); })()), "latitude", [], "any", false, false, false, 1334), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1334, $this->source); })()), "longitude", [], "any", false, false, false, 1334), "html", null, true);
        yield "], { icon: customIcon })
                    .addTo(map)
                    .bindPopup(`
                        <div style=\"text-align: center; padding: 10px;\">
                            <strong style=\"color: #667eea;\">";
        // line 1338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1338, $this->source); })()), "companyName", [], "any", false, false, false, 1338), "html", null, true);
        yield "</strong><br>
                            <small>";
        // line 1339
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1339, $this->source); })()), "address", [], "any", false, false, false, 1339)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1339, $this->source); })()), "address", [], "any", false, false, false, 1339), "html", null, true)) : ("Adresse non renseignée"));
        yield "</small>
                        </div>
                    `)
                    .openPopup();
            });
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "super_admin/hma_service/show.html.twig";
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
        return array (  2006 => 1339,  2002 => 1338,  1993 => 1334,  1972 => 1318,  1963 => 1313,  1938 => 1312,  1936 => 1311,  1926 => 1303,  1913 => 1295,  1911 => 1294,  1905 => 1292,  1901 => 1290,  1894 => 1286,  1890 => 1285,  1886 => 1283,  1884 => 1282,  1880 => 1280,  1873 => 1275,  1866 => 1270,  1864 => 1269,  1860 => 1267,  1856 => 1265,  1849 => 1261,  1846 => 1260,  1844 => 1259,  1840 => 1257,  1834 => 1255,  1828 => 1252,  1824 => 1250,  1822 => 1249,  1817 => 1247,  1813 => 1245,  1811 => 1244,  1806 => 1242,  1802 => 1240,  1800 => 1239,  1795 => 1237,  1791 => 1235,  1789 => 1234,  1780 => 1228,  1776 => 1227,  1769 => 1222,  1764 => 1221,  1742 => 1202,  1727 => 1189,  1716 => 1183,  1714 => 1182,  1702 => 1175,  1695 => 1171,  1688 => 1167,  1679 => 1161,  1675 => 1160,  1670 => 1158,  1666 => 1157,  1661 => 1155,  1657 => 1154,  1653 => 1152,  1650 => 1151,  1647 => 1150,  1645 => 1149,  1636 => 1144,  1630 => 1141,  1626 => 1139,  1620 => 1136,  1616 => 1134,  1614 => 1133,  1609 => 1131,  1605 => 1129,  1603 => 1128,  1598 => 1126,  1594 => 1124,  1592 => 1123,  1587 => 1121,  1583 => 1119,  1581 => 1118,  1574 => 1113,  1569 => 1112,  1560 => 1106,  1553 => 1102,  1546 => 1098,  1527 => 1081,  1522 => 1078,  1516 => 1075,  1512 => 1073,  1510 => 1072,  1507 => 1071,  1501 => 1069,  1495 => 1066,  1491 => 1064,  1489 => 1063,  1484 => 1061,  1480 => 1059,  1478 => 1058,  1473 => 1056,  1469 => 1054,  1467 => 1053,  1462 => 1051,  1458 => 1049,  1456 => 1048,  1446 => 1040,  1444 => 1039,  1440 => 1037,  1430 => 1032,  1428 => 1031,  1423 => 1030,  1417 => 1028,  1413 => 1026,  1411 => 1025,  1408 => 1024,  1406 => 1023,  1403 => 1022,  1401 => 1021,  1398 => 1020,  1396 => 1019,  1393 => 1018,  1391 => 1017,  1388 => 1016,  1386 => 1015,  1383 => 1014,  1381 => 1013,  1378 => 1012,  1376 => 1011,  1373 => 1010,  1371 => 1009,  1367 => 1007,  1362 => 1006,  1340 => 987,  1333 => 983,  1326 => 979,  1321 => 976,  1313 => 970,  1297 => 957,  1289 => 952,  1285 => 951,  1269 => 938,  1261 => 933,  1257 => 932,  1242 => 920,  1234 => 915,  1226 => 910,  1222 => 909,  1196 => 885,  1186 => 877,  1179 => 873,  1172 => 869,  1166 => 865,  1164 => 864,  1149 => 851,  1143 => 848,  1139 => 846,  1137 => 845,  1133 => 843,  1124 => 837,  1116 => 832,  1112 => 831,  1102 => 823,  1100 => 822,  1090 => 815,  1086 => 814,  1081 => 812,  1071 => 805,  1054 => 791,  1042 => 782,  1020 => 762,  1011 => 757,  1006 => 756,  1002 => 755,  993 => 748,  991 => 747,  988 => 746,  980 => 741,  976 => 740,  968 => 734,  966 => 733,  958 => 728,  954 => 727,  928 => 704,  916 => 695,  907 => 688,  901 => 685,  897 => 684,  892 => 683,  890 => 682,  885 => 680,  873 => 671,  852 => 653,  842 => 646,  832 => 639,  826 => 635,  819 => 630,  812 => 625,  810 => 624,  806 => 622,  800 => 620,  794 => 617,  790 => 615,  788 => 614,  783 => 612,  779 => 610,  777 => 609,  772 => 607,  768 => 605,  766 => 604,  761 => 602,  757 => 600,  755 => 599,  751 => 597,  744 => 592,  737 => 587,  735 => 586,  728 => 582,  721 => 578,  714 => 574,  710 => 572,  704 => 569,  701 => 568,  695 => 565,  690 => 564,  688 => 563,  676 => 554,  667 => 548,  660 => 543,  647 => 542,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/hma_service/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ hma_service.companyName }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* Variables de couleurs */
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --success-gradient: linear-gradient(135deg, #28a745 0%, #218838 100%);
        --warning-gradient: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        --danger-gradient: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        --info-gradient: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        --purple-gradient: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%);
        --dark-gradient: linear-gradient(135deg, #343a40 0%, #23272b 100%);
    }

    /* En-tête entreprise amélioré */
    .company-header {
        background: var(--primary-gradient);
        color: white;
        padding: 2.5rem;
        border-radius: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 15px 30px rgba(102, 126, 234, 0.3);
        position: relative;
        overflow: hidden;
    }

    .company-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .company-logo-large {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 20px;
        border: 4px solid white;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }

    .company-logo-large:hover {
        transform: scale(1.05);
    }

    .company-initials-large {
        width: 120px;
        height: 120px;
        border-radius: 20px;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(5px);
        border: 4px solid white;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 3.5rem;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }

    .company-initials-large:hover {
        transform: scale(1.05);
    }

    /* Badges améliorés */
    .badge-custom {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
        border-radius: 50px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }

    .badge-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    }

    /* STYLES POUR LES RÔLES - COPIÉS DE INDEX.HTML.TWIG */
    .role-badge {
        font-size: 0.8rem;
        padding: 0.3rem 0.6rem;
        margin-right: 2px;
        display: inline-block;
        font-weight: 500;
        border-radius: 50px;
    }
    
    .role-badge.role-admin {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    .role-badge.role-manager {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .role-badge.role-stock {
        background: linear-gradient(135deg, #ffc107 0%, #ffca2c 100%);
        color: #212529;
    }
    .role-badge.role-cashier {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
        color: white;
    }
    .role-badge.role-user {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }
    
    /* STYLES POUR LES PLANS - COPIÉS DE INDEX.HTML.TWIG */
    .plan-badge {
        font-size: 0.85rem;
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 50px;
    }
    
    .plan-trial {
        background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        color: white;
    }
    .plan-freemium {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }
    .plan-basic {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .plan-premium {
        background: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%);
        color: white;
    }
    
    /* STYLES POUR LE STATUT - COPIÉS DE INDEX.HTML.TWIG */
    .status-badge {
        font-size: 0.85rem;
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 50px;
    }
    
    .status-active {
        background: linear-gradient(135deg, #28a745 0%, #218838 100%);
        color: white;
    }
    
    .status-inactive {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    
    .status-trial {
        background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        color: #212529;
    }

    /* Cartes d'information améliorées */
    .info-card {
        transition: all 0.3s;
        height: 100%;
        border: none;
        border-radius: 1rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .info-card .card-body {
        padding: 1.5rem;
    }

    .info-card .card-title {
        color: #495057;
        font-weight: 600;
        margin-bottom: 1.2rem;
    }

    .info-card hr {
        margin: 1rem 0;
        opacity: 0.1;
    }

    /* Alertes améliorées */
    .alert-trial {
        background: var(--warning-gradient);
        color: #212529;
        border: none;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        margin-top: 1rem;
        box-shadow: 0 5px 10px rgba(255, 193, 7, 0.3);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.02); }
        100% { transform: scale(1); }
    }

    /* Barres de progression améliorées */
    .usage-progress {
        height: 8px;
        border-radius: 4px;
        background-color: #e9ecef;
        overflow: hidden;
        margin: 0.5rem 0;
    }

    .progress-bar {
        position: relative;
        overflow: hidden;
    }

    .progress-bar::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    /* Badges de fonctionnalités améliorés */
    .feature-badge {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        color: #495057;
        padding: 0.6rem 1.2rem;
        border-radius: 50px;
        font-size: 0.9rem;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
    }

    .feature-badge:hover {
        background: var(--primary-gradient);
        color: white;
        border-color: transparent;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .feature-badge:hover i {
        color: white !important;
    }

    /* Cartes de rôles améliorées */
    .role-card {
        border: none;
        border-radius: 1rem;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s;
        overflow: hidden;
        height: 100%;
    }

    .role-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .role-card .card-body {
        padding: 1.5rem;
    }

    .role-count {
        font-size: 2rem;
        font-weight: bold;
        color: #212529;
        margin: 0.5rem 0;
    }

    /* Statuts des rôles */
    .role-status-active {
        color: #28a745;
        font-weight: 600;
    }

    .role-status-warning {
        color: #ffc107;
        font-weight: 600;
    }

    .role-status-inactive {
        color: #dc3545;
        font-weight: 600;
    }

    /* Tableau des abonnements amélioré */
    .subscriptions-table {
        border-collapse: separate;
        border-spacing: 0 0.5rem;
    }

    .subscriptions-table tbody tr {
        background: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
        transition: all 0.3s;
    }

    .subscriptions-table tbody tr:hover {
        background: #f8f9fa;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-2px);
    }

    .subscriptions-table td {
        padding: 1rem;
        vertical-align: middle;
        border: none;
    }

    /* Icônes animées */
    .animated-icon {
        transition: all 0.3s;
    }

    .animated-icon:hover {
        transform: rotate(360deg) scale(1.2);
    }

    /* Tooltips personnalisés */
    .custom-tooltip {
        position: relative;
        cursor: help;
    }

    .custom-tooltip:hover:after {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0,0,0,0.8);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        font-size: 0.85rem;
        white-space: nowrap;
        z-index: 1000;
        pointer-events: none;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* Compteurs animés */
    .counter-number {
        font-size: 1.2rem;
        font-weight: 600;
        color: #212529;
        transition: all 0.3s;
    }

    .counter-number:hover {
        color: var(--primary-gradient);
        transform: scale(1.1);
    }

    /* Boutons améliorés */
    .btn-action {
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s;
        border: none;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .btn-action:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    .btn-back {
        background: rgba(255,255,255,0.2);
        color: white;
        border: 1px solid rgba(255,255,255,0.3);
        backdrop-filter: blur(5px);
    }

    .btn-back:hover {
        background: rgba(255,255,255,0.3);
        color: white;
        border-color: rgba(255,255,255,0.5);
        transform: translateX(-3px);
    }

    .btn-back i {
        transition: transform 0.3s;
    }

    .btn-back:hover i {
        transform: translateX(-3px);
    }

    .btn-edit {
        background: white;
        color: #667eea;
    }

    .btn-edit:hover {
        background: var(--primary-gradient);
        color: white;
    }

    .btn-history {
        background: var(--info-gradient);
        color: white;
    }

    /* Carte Leaflet améliorée */
    #map {
        border-radius: 0.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }

    #map:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    /* Animations d'entrée */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animated-card {
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
    }

    .animated-card:nth-child(1) { animation-delay: 0.1s; }
    .animated-card:nth-child(2) { animation-delay: 0.2s; }
    .animated-card:nth-child(3) { animation-delay: 0.3s; }
    .animated-card:nth-child(4) { animation-delay: 0.4s; }
    .animated-card:nth-child(5) { animation-delay: 0.5s; }

    /* Mini cartes de statistiques */
    .stat-mini-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 1rem;
        padding: 1rem;
        text-align: center;
        transition: all 0.3s;
    }

    .stat-mini-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .stat-mini-icon {
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }

    .stat-mini-value {
        font-size: 1.5rem;
        font-weight: bold;
        color: #212529;
    }

    .stat-mini-label {
        font-size: 0.85rem;
        color: #6c757d;
    }

    /* Badge d'évolution */
    .evolution-badge {
        padding: 0.25rem 0.5rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .evolution-up {
        background: #d4edda;
        color: #155724;
    }

    .evolution-down {
        background: #f8d7da;
        color: #721c24;
    }

    .evolution-stable {
        background: #e2e3e5;
        color: #383d41;
    }

    /* Barre de progression personnalisée */
    .progress {
        background-color: #e9ecef;
        border-radius: 4px;
        overflow: hidden;
    }

    .progress-bar {
        transition: width 0.6s ease;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <!-- En-tête avec navigation -->
    <nav aria-label=\"breadcrumb\" class=\"mb-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
                <a href=\"{{ path('app_super_admin_hma_service_index') }}\" class=\"text-decoration-none\">
                    <i class=\"bi bi-building me-1\"></i>
                    Entreprises
                </a>
            </li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                {{ hma_service.companyName }}
            </li>
        </ol>
    </nav>

    <!-- Header entreprise amélioré -->
    <div class=\"company-header animated-card\">
        <div class=\"row align-items-center\">
            <div class=\"col-auto\">
                {% if hma_service.logo %}
                    <img src=\"{{ asset('uploads/logos/' ~ hma_service.logo) }}\" 
                         alt=\"{{ hma_service.companyName }}\" 
                         class=\"company-logo-large\">
                {% else %}
                    <div class=\"company-initials-large\">
                        {{ hma_service.companyName|first|upper }}
                    </div>
                {% endif %}
            </div>
            <div class=\"col\">
                <h1 class=\"display-4 mb-2 fw-bold\">{{ hma_service.companyName }}</h1>
                <div class=\"d-flex gap-2 flex-wrap\">
                    <span class=\"badge badge-custom bg-white text-dark\">
                        <i class=\"bi bi-hash me-1\"></i>
                        #{{ hma_service.subscriptionNumber }}
                    </span>
                    <span class=\"badge badge-custom bg-white text-dark\">
                        <i class=\"bi bi-tag me-1\"></i>
                        {{ hma_service.companyType|capitalize }}
                    </span>
                    
                    <!-- BADGE STATUT AVEC STYLE CORRIGÉ -->
                    {% if hma_service.hmaActive %}
                        <span class=\"badge status-active status-badge\">
                            <i class=\"bi bi-check-circle me-1\"></i>
                            Active
                        </span>
                    {% else %}
                        <span class=\"badge status-inactive status-badge\">
                            <i class=\"bi bi-x-circle me-1\"></i>
                            Désactivée
                        </span>
                    {% endif %}
                    
                    <!-- BADGE PLAN AVEC STYLE CORRIGÉ -->
                    {% if hma_service.currentPlan == 'trial' %}
                        <span class=\"badge plan-trial plan-badge\">
                            <i class=\"bi bi-hourglass-split me-1\"></i>
                            {{ hma_service.currentPlanLabel }}
                        </span>
                    {% elseif hma_service.currentPlan == 'freemium' %}
                        <span class=\"badge plan-freemium plan-badge\">
                            <i class=\"bi bi-gift me-1\"></i>
                            {{ hma_service.currentPlanLabel }}
                        </span>
                    {% elseif hma_service.currentPlan == 'basic' %}
                        <span class=\"badge plan-basic plan-badge\">
                            <i class=\"bi bi-rocket me-1\"></i>
                            {{ hma_service.currentPlanLabel }}
                        </span>
                    {% elseif hma_service.currentPlan == 'premium' %}
                        <span class=\"badge plan-premium plan-badge\">
                            <i class=\"bi bi-stars me-1\"></i>
                            {{ hma_service.currentPlanLabel }}
                        </span>
                    {% else %}
                        <span class=\"badge bg-secondary plan-badge\">{{ hma_service.currentPlanLabel }}</span>
                    {% endif %}
                    
                    <!-- BADGE ABONNEMENT ACTIF -->
                    {% if has_active_subscription %}
                        <span class=\"badge status-active status-badge\">
                            <i class=\"bi bi-check-circle me-1\"></i>
                            Abonnement actif
                        </span>
                    {% else %}
                        <span class=\"badge status-trial status-badge\">
                            <i class=\"bi bi-exclamation-triangle me-1\"></i>
                            Sans abonnement actif
                        </span>
                    {% endif %}
                </div>
            </div>
            <div class=\"col-auto\">
                <div class=\"d-flex gap-2\">
                    <a href=\"{{ path('app_super_admin_hma_service_index') }}\" 
                       class=\"btn btn-action btn-back\"
                       title=\"Retour à la liste des entreprises\">
                        <i class=\"bi bi-arrow-left me-1\"></i>
                        Retour
                    </a>
                    
                    <a href=\"{{ path('app_super_admin_hma_service_edit', {'id': hma_service.id}) }}\" 
                       class=\"btn btn-action btn-edit\"
                       title=\"Modifier cette entreprise\">
                        <i class=\"bi bi-pencil me-1\"></i>
                        Modifier
                    </a>
                    
                    <a href=\"{{ path('app_super_admin_hma_service_subscriptions', {'id': hma_service.id}) }}\" 
                       class=\"btn btn-action btn-history\"
                       title=\"Voir l'historique des abonnements\">
                        <i class=\"bi bi-clock-history me-1\"></i>
                        Historique
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mini statistiques rapides -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-primary\">
                    <i class=\"bi bi-box\"></i>
                </div>
                <div class=\"stat-mini-value\">{{ total_products }}</div>
                <div class=\"stat-mini-label\">Produits</div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-success\">
                    <i class=\"bi bi-cart\"></i>
                </div>
                <div class=\"stat-mini-value\">{{ total_orders }}</div>
                <div class=\"stat-mini-label\">Commandes</div>
                {% if orders_evolution is defined and orders_evolution != 0 %}
                    <span class=\"evolution-badge {{ orders_evolution > 0 ? 'evolution-up' : 'evolution-down' }} mt-2\">
                        <i class=\"bi bi-arrow-{{ orders_evolution > 0 ? 'up' : 'down' }}\"></i>
                        {{ orders_evolution|abs }}% vs mois dernier
                    </span>
                {% endif %}
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-info\">
                    <i class=\"bi bi-tags\"></i>
                </div>
                <div class=\"stat-mini-value\">{{ total_categories }}</div>
                <div class=\"stat-mini-label\">Catégories</div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-warning\">
                    <i class=\"bi bi-truck\"></i>
                </div>
                <div class=\"stat-mini-value\">{{ total_suppliers }}</div>
                <div class=\"stat-mini-label\">Fournisseurs</div>
            </div>
        </div>
    </div>

    <!-- Cartes d'information améliorées -->
    <div class=\"row g-4 mb-4\">
        <!-- Contact -->
        <div class=\"col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-envelope me-2 text-primary animated-icon\"></i>
                        Contact
                    </h5>
                    <hr>
                    <div class=\"d-flex align-items-center mb-3\">
                        <div class=\"bg-primary bg-opacity-10 p-2 rounded-circle me-3\">
                            <i class=\"bi bi-envelope text-primary\"></i>
                        </div>
                        <div>
                            <small class=\"text-muted d-block\">Email</small>
                            <a href=\"mailto:{{ hma_service.email }}\" class=\"text-decoration-none text-dark fw-bold\">
                                {{ hma_service.email }}
                            </a>
                        </div>
                    </div>
                    
                    {% if hma_service.phone %}
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"bg-success bg-opacity-10 p-2 rounded-circle me-3\">
                                <i class=\"bi bi-telephone text-success\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\">Téléphone</small>
                                <a href=\"tel:{{ hma_service.phone }}\" class=\"text-decoration-none text-dark fw-bold\">
                                    {{ hma_service.phone }}
                                </a>
                            </div>
                        </div>
                    {% endif %}
                    
                    {% if hma_service.address %}
                        <div class=\"d-flex align-items-center\">
                            <div class=\"bg-info bg-opacity-10 p-2 rounded-circle me-3\">
                                <i class=\"bi bi-geo-alt text-info\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\">Adresse</small>
                                <span class=\"text-dark\">
                                    {{ hma_service.address }}<br>
                                    {% if hma_service.city %}{{ hma_service.city }}, {% endif %}
                                    {{ hma_service.country ?? 'Sénégal' }}
                                </span>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Dates clés améliorées -->
        <div class=\"col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-calendar me-2 text-primary animated-icon\"></i>
                        Dates clés
                    </h5>
                    <hr>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"bg-light p-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\">Création</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Date de création\">
                                    <i class=\"bi bi-calendar-plus me-1 text-primary\"></i>
                                    {{ created_at|date('d/m/Y') }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"bg-light p-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\">Activation</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Date d'activation\">
                                    <i class=\"bi bi-calendar-check me-1 text-success\"></i>
                                    {{ activated_at ? activated_at|date('d/m/Y') : '-' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class=\"my-3\">
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"bg-light p-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\">Début abonnement</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Début de l'abonnement\">
                                    <i class=\"bi bi-play-circle me-1 text-info\"></i>
                                    {{ hma_service.subscriptionStartAt ? hma_service.subscriptionStartAt|date('d/m/Y') : '-' }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"bg-light p-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\">Fin abonnement</small>
                                <div class=\"fw-bold counter-number {{ subscription_ends_at and subscription_ends_at < date() ? 'text-danger' : '' }}\" 
                                     data-tooltip=\"Fin de l'abonnement\">
                                    <i class=\"bi bi-stop-circle me-1 {{ subscription_ends_at and subscription_ends_at < date() ? 'text-danger' : 'text-warning' }}\"></i>
                                    {{ subscription_ends_at ? subscription_ends_at|date('d/m/Y') : '-' }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alerte essai -->
                    {% if trial_ends_at %}
                        <div class=\"alert-trial mt-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"me-3\">
                                    <i class=\"bi bi-hourglass-split fs-4\"></i>
                                </div>
                                <div>
                                    <strong>Période d'essai</strong><br>
                                    <small>
                                        Expire le {{ trial_ends_at|date('d/m/Y') }}
                                        ({{ trial_ends_at|time_diff }})
                                    </small>
                                </div>
                                <div class=\"ms-auto\">
                                    <span class=\"badge bg-dark\">
                                        {{ trial_ends_at|date('d/m/Y') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    {% endif %}

                    <!-- Alerte expiration abonnement -->
                    {% if days_until_expiration is defined and days_until_expiration is not null and days_until_expiration <= 30 %}
                        <div class=\"alert alert-warning mt-3 py-2\">
                            <i class=\"bi bi-exclamation-triangle me-2\"></i>
                            <strong>Attention :</strong> Abonnement expire dans {{ days_until_expiration }} jours
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Localisation -->
        <div class=\"col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-geo me-2 text-primary animated-icon\"></i>
                        Localisation
                    </h5>
                    <hr>
                    {% if hma_service.latitude and hma_service.longitude %}
                        <div id=\"map\" style=\"height: 180px;\"></div>
                        <div class=\"d-flex justify-content-between mt-3\">
                            <small class=\"text-muted\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Lat: {{ hma_service.latitude }}
                            </small>
                            <small class=\"text-muted\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Long: {{ hma_service.longitude }}
                            </small>
                        </div>
                    {% else %}
                        <div class=\"text-center py-4\">
                            <div class=\"mb-3\">
                                <i class=\"bi bi-geo-alt fs-1 text-muted\"></i>
                            </div>
                            <h6 class=\"text-muted\">Aucune localisation</h6>
                            <p class=\"text-muted small\">Cette entreprise n'a pas renseigné de coordonnées GPS.</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques d'utilisation améliorées -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-md-6\">
            <div class=\"card animated-card\">
                <div class=\"card-header bg-white border-0 pt-4\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-bar-chart me-2 text-primary\"></i>
                        Utilisation des ressources
                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Produits -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"fw-semibold\">
                                <i class=\"bi bi-box me-2 text-primary\"></i>
                                Produits
                            </span>
                            <span class=\"counter-number\">
                                <strong>{{ hma_service.productCount }}</strong>
                                <small class=\"text-muted\">/ {{ usage_stats.products.limit == constant('PHP_INT_MAX') ? '∞' : usage_stats.products.limit }}</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-primary\" 
                                 style=\"width: {{ usage_stats.products.percentage }}%\">
                            </div>
                        </div>
                        <small class=\"text-muted mt-1 d-block\">
                            <i class=\"bi bi-arrow-right me-1\"></i>
                            {{ usage_stats.products.remaining == constant('PHP_INT_MAX') ? 'Illimité' : usage_stats.products.remaining ~ ' restants' }}
                        </small>
                    </div>

                    <!-- Catégories -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"fw-semibold\">
                                <i class=\"bi bi-tags me-2 text-success\"></i>
                                Catégories
                            </span>
                            <span class=\"counter-number\">
                                <strong>{{ hma_service.categoryCount }}</strong>
                                <small class=\"text-muted\">/ {{ usage_stats.categories.limit == constant('PHP_INT_MAX') ? '∞' : usage_stats.categories.limit }}</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-success\" 
                                 style=\"width: {{ (hma_service.categoryCount / usage_stats.categories.limit * 100)|round }}%\">
                            </div>
                        </div>
                    </div>

                    <!-- Fournisseurs -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"fw-semibold\">
                                <i class=\"bi bi-truck me-2 text-warning\"></i>
                                Fournisseurs
                            </span>
                            <span class=\"counter-number\">
                                <strong>{{ hma_service.supplierCount }}</strong>
                                <small class=\"text-muted\">/ {{ usage_stats.suppliers.limit == constant('PHP_INT_MAX') ? '∞' : usage_stats.suppliers.limit }}</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-warning\" 
                                 style=\"width: {{ (hma_service.supplierCount / usage_stats.suppliers.limit * 100)|round }}%\">
                            </div>
                        </div>
                    </div>

                    <!-- Utilisateurs -->
                    <div class=\"mt-4 pt-2 border-top\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"fw-semibold\">
                                <i class=\"bi bi-people me-2 text-info\"></i>
                                Utilisateurs
                            </span>
                            <span class=\"counter-number\">
                                <strong>{{ total_users_count }}</strong>
                                <small class=\"text-muted\">total</small>
                            </span>
                        </div>
                        
                        {# Répartition des utilisateurs #}
                        <div class=\"d-flex justify-content-between mt-2 small\">
                            <span class=\"text-success\">
                                <i class=\"bi bi-person-check\"></i>
                                {{ active_users_count }} actifs
                            </span>
                            <span class=\"text-warning\">
                                <i class=\"bi bi-person-exclamation\"></i>
                                {{ out_of_quota_count }} hors quota
                            </span>
                            <span class=\"text-muted\">
                                <i class=\"bi bi-person-x\"></i>
                                {{ inactive_by_admin_count }} désactivés
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fonctionnalités disponibles -->
        <div class=\"col-md-6\">
            <div class=\"card animated-card h-100\">
                <div class=\"card-header bg-white border-0 pt-4\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-stars me-2 text-primary\"></i>
                        Fonctionnalités disponibles
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex flex-wrap gap-2\">
                        {% for feature in usage_stats.features %}
                            <span class=\"feature-badge\">
                                <i class=\"bi bi-check-circle-fill text-success me-1\"></i>
                                {% if feature == 'all' %}
                                    Toutes les fonctionnalités
                                {% elseif feature == 'basic_inventory' %}
                                    Inventaire basique
                                {% elseif feature == 'basic_reports' %}
                                    Rapports basiques
                                {% elseif feature == 'advanced_inventory' %}
                                    Inventaire avancé
                                {% elseif feature == 'reports' %}
                                    Rapports avancés
                                {% elseif feature == 'api_access' %}
                                    Accès API
                                {% elseif feature == 'priority_support' %}
                                    Support prioritaire
                                {% elseif feature == 'custom_domain' %}
                                    Domaine personnalisé
                                {% elseif feature == 'white_label' %}
                                    White Label
                                {% else %}
                                    {{ feature|replace({'_': ' '})|title }}
                                {% endif %}
                            </span>
                        {% else %}
                            <div class=\"text-center py-4 w-100\">
                                <i class=\"bi bi-exclamation-circle fs-1 text-muted mb-3\"></i>
                                <p class=\"text-muted mb-0\">Aucune fonctionnalité disponible</p>
                            </div>
                        {% endfor %}
                    </div>

                    {% if usage_stats.features is not empty %}
                        <div class=\"mt-4 p-3 bg-light rounded-3\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <small class=\"text-muted d-block mb-1\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Plan actuel
                                    </small>
                                    <!-- BADGE PLAN AVEC STYLE CORRIGÉ -->
                                    {% if hma_service.currentPlan == 'trial' %}
                                        <span class=\"badge plan-trial plan-badge p-2\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            {{ hma_service.currentPlanLabel }}
                                        </span>
                                    {% elseif hma_service.currentPlan == 'freemium' %}
                                        <span class=\"badge plan-freemium plan-badge p-2\">
                                            <i class=\"bi bi-gift me-1\"></i>
                                            {{ hma_service.currentPlanLabel }}
                                        </span>
                                    {% elseif hma_service.currentPlan == 'basic' %}
                                        <span class=\"badge plan-basic plan-badge p-2\">
                                            <i class=\"bi bi-rocket me-1\"></i>
                                            {{ hma_service.currentPlanLabel }}
                                        </span>
                                    {% elseif hma_service.currentPlan == 'premium' %}
                                        <span class=\"badge plan-premium plan-badge p-2\">
                                            <i class=\"bi bi-stars me-1\"></i>
                                            {{ hma_service.currentPlanLabel }}
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-secondary plan-badge p-2\">{{ hma_service.currentPlanLabel }}</span>
                                    {% endif %}
                                </div>
                                {% if usage_stats.trial_days_remaining > 0 %}
                                    <div class=\"text-warning\">
                                        <i class=\"bi bi-hourglass-split me-1\"></i>
                                        {{ usage_stats.trial_days_remaining }} jours restants
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques par rôle améliorées avec statut -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-12\">
            <div class=\"card animated-card\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-people me-2 text-primary\"></i>
                        Utilisateurs par rôle
                    </h5>
                    <div class=\"d-flex gap-2 flex-wrap\">
                        <span class=\"badge bg-success\">
                            <i class=\"bi bi-person-check me-1\"></i>
                            Actifs: {{ active_users_count }}
                        </span>
                        <span class=\"badge bg-warning text-dark\">
                            <i class=\"bi bi-person-exclamation me-1\"></i>
                            Hors quota: {{ out_of_quota_count }}
                        </span>
                        <span class=\"badge bg-secondary\">
                            <i class=\"bi bi-person-x me-1\"></i>
                            Désactivés: {{ inactive_by_admin_count }}
                        </span>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        {% for role, data in users_by_role_with_status %}
                            <div class=\"col-md-3 mb-3\">
                                <div class=\"role-card\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                            <!-- BADGE RÔLE AVEC STYLE CORRIGÉ -->
                                            {% if role == 'ROLE_ADMIN' %}
                                                <span class=\"role-badge role-admin\">
                                                    <i class=\"bi bi-shield-check me-1\"></i>
                                                    {{ data.label }}
                                                </span>
                                            {% elseif role == 'ROLE_MANAGER' %}
                                                <span class=\"role-badge role-manager\">
                                                    <i class=\"bi bi-graph-up me-1\"></i>
                                                    {{ data.label }}
                                                </span>
                                            {% elseif role == 'ROLE_STOCK_MANAGER' %}
                                                <span class=\"role-badge role-stock\">
                                                    <i class=\"bi bi-box-seam me-1\"></i>
                                                    {{ data.label }}
                                                </span>
                                            {% elseif role == 'ROLE_CASHIER' %}
                                                <span class=\"role-badge role-cashier\">
                                                    <i class=\"bi bi-cash-coin me-1\"></i>
                                                    {{ data.label }}
                                                </span>
                                            {% else %}
                                                <span class=\"role-badge role-user\">
                                                    <i class=\"bi bi-person me-1\"></i>
                                                    {{ data.label }}
                                                </span>
                                            {% endif %}
                                            <span class=\"badge bg-secondary\">{{ data.total }}</span>
                                        </div>
                                        
                                        <!-- Barre de progression du statut -->
                                        <div class=\"progress mb-3\" style=\"height: 8px; background-color: #e9ecef;\">
                                            {% set active_percent = data.total > 0 ? (data.active / data.total * 100)|round : 0 %}
                                            {% set quota_percent = data.total > 0 ? (data.quota / data.total * 100)|round : 0 %}
                                            {% set inactive_percent = 100 - active_percent - quota_percent %}
                                            
                                            <div class=\"progress-bar bg-success\" 
                                                 style=\"width: {{ active_percent }}%; border-radius: 4px 0 0 4px;\"
                                                 title=\"Actifs: {{ data.active }}\"></div>
                                            <div class=\"progress-bar bg-warning\" 
                                                 style=\"width: {{ quota_percent }}%;\"
                                                 title=\"Hors quota: {{ data.quota }}\"></div>
                                            <div class=\"progress-bar bg-secondary\" 
                                                 style=\"width: {{ inactive_percent }}%; border-radius: 0 4px 4px 0;\"
                                                 title=\"Désactivés: {{ data.inactive }}\"></div>
                                        </div>
                                        
                                        <!-- Détails des statuts -->
                                        <div class=\"d-flex justify-content-between text-center\">
                                            <div>
                                                <span class=\"fw-bold text-success\">{{ data.active }}</span>
                                                <div><small class=\"text-muted\">Actifs</small></div>
                                            </div>
                                            <div>
                                                <span class=\"fw-bold text-warning\">{{ data.quota }}</span>
                                                <div><small class=\"text-muted\">Quota</small></div>
                                            </div>
                                            <div>
                                                <span class=\"fw-bold text-secondary\">{{ data.inactive }}</span>
                                                <div><small class=\"text-muted\">Inactifs</small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"col-12 text-center py-5\">
                                <i class=\"bi bi-people fs-1 text-muted d-block mb-3\"></i>
                                <h5 class=\"text-muted\">Aucun utilisateur</h5>
                                <p class=\"text-muted\">Cette entreprise n'a pas encore d'utilisateurs.</p>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Derniers abonnements -->
    <div class=\"card animated-card\">
        <div class=\"card-header bg-white d-flex justify-content-between align-items-center py-3\">
            <h5 class=\"mb-0\">
                <i class=\"bi bi-clock-history me-2 text-primary\"></i>
                Derniers abonnements
            </h5>
            <a href=\"{{ path('app_super_admin_hma_service_subscriptions', {'id': hma_service.id}) }}\" 
               class=\"btn btn-sm btn-outline-primary\">
                Voir tout l'historique
                <i class=\"bi bi-arrow-right ms-1\"></i>
            </a>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table subscriptions-table mb-0\">
                    <thead>
                        <tr>
                            <th class=\"border-0 bg-light py-3 px-4\">Date</th>
                            <th class=\"border-0 bg-light py-3 px-4\">Plan</th>
                            <th class=\"border-0 bg-light py-3 px-4\">Montant</th>
                            <th class=\"border-0 bg-light py-3 px-4\">Statut</th>
                            <th class=\"border-0 bg-light py-3 px-4\">Date de fin</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for subscription in subscriptions|slice(0, 5) %}
                            <tr>
                                <td class=\"px-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-calendar3 me-2 text-muted\"></i>
                                        <div>
                                            <div>{{ subscription.createdAt|date('d/m/Y') }}</div>
                                            <small class=\"text-muted\">{{ subscription.createdAt|date('H:i') }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"px-4\">
                                    <!-- BADGE PLAN AVEC STYLE CORRIGÉ -->
                                    {% if subscription.plan == 'trial' %}
                                        <span class=\"badge plan-trial plan-badge p-2\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            {{ subscription.planLabel }}
                                        </span>
                                    {% elseif subscription.plan == 'freemium' %}
                                        <span class=\"badge plan-freemium plan-badge p-2\">
                                            <i class=\"bi bi-gift me-1\"></i>
                                            {{ subscription.planLabel }}
                                        </span>
                                    {% elseif subscription.plan == 'basic' %}
                                        <span class=\"badge plan-basic plan-badge p-2\">
                                            <i class=\"bi bi-rocket me-1\"></i>
                                            {{ subscription.planLabel }}
                                        </span>
                                    {% elseif subscription.plan == 'premium' %}
                                        <span class=\"badge plan-premium plan-badge p-2\">
                                            <i class=\"bi bi-stars me-1\"></i>
                                            {{ subscription.planLabel }}
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-secondary plan-badge p-2\">{{ subscription.planLabel }}</span>
                                    {% endif %}
                                </td>
                                <td class=\"px-4\">
                                    {% if subscription.amount %}
                                        <div class=\"fw-bold text-dark\">
                                            {{ subscription.amount|number_format(0, ',', ' ') }} 
                                            <small class=\"text-muted\">FCFA</small>
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted\">-</span>
                                    {% endif %}
                                </td>
                                <td class=\"px-4\">
                                    {% if subscription.status == 'active' %}
                                        <span class=\"status-badge status-active\">
                                            <i class=\"bi bi-check-circle\"></i>
                                            Actif
                                        </span>
                                    {% else %}
                                        <span class=\"status-badge status-inactive\">
                                            <i class=\"bi bi-x-circle\"></i>
                                            Inactif
                                        </span>
                                    {% endif %}
                                </td>
                                <td class=\"px-4\">
                                    {% if subscription.endsAt %}
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"bi bi-calendar-x me-2 text-muted\"></i>
                                            <span class=\"{{ subscription.endsAt < date() ? 'text-danger fw-bold' : '' }}\">
                                                {{ subscription.endsAt|date('d/m/Y') }}
                                            </span>
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted\">-</span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-5\">
                                    <i class=\"bi bi-clock-history fs-1 text-muted d-block mb-3\"></i>
                                    <h5 class=\"text-muted\">Aucun abonnement</h5>
                                    <p class=\"text-muted\">Cette entreprise n'a pas encore d'historique d'abonnements.</p>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Carte Leaflet -->
{% if hma_service.latitude and hma_service.longitude %}
    {% block javascripts %}
        {{ parent() }}
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
        <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const map = L.map('map').setView([{{ hma_service.latitude }}, {{ hma_service.longitude }}], 15);
                
                L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                    attribution: '©OpenStreetMap, ©CartoDB',
                    subdomains: 'abcd',
                    maxZoom: 19
                }).addTo(map);
                
                const customIcon = L.divIcon({
                    className: 'custom-marker',
                    html: '<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 40px; height: 40px; border-radius: 50%; border: 3px solid white; box-shadow: 0 5px 15px rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center;\"><i class=\"bi bi-building\" style=\"color: white; font-size: 20px;\"></i></div>',
                    iconSize: [40, 40],
                    iconAnchor: [20, 20],
                    popupAnchor: [0, -20]
                });
                
                L.marker([{{ hma_service.latitude }}, {{ hma_service.longitude }}], { icon: customIcon })
                    .addTo(map)
                    .bindPopup(`
                        <div style=\"text-align: center; padding: 10px;\">
                            <strong style=\"color: #667eea;\">{{ hma_service.companyName }}</strong><br>
                            <small>{{ hma_service.address ?: 'Adresse non renseignée' }}</small>
                        </div>
                    `)
                    .openPopup();
            });
        </script>
    {% endblock %}
{% endif %}
{% endblock %}", "super_admin/hma_service/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\hma_service\\show.html.twig");
    }
}
