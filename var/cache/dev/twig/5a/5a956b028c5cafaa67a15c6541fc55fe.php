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
                <!-- Informations de connexion de l'entreprise -->
                ";
        // line 637
        $context["lastLogin"] = null;
        // line 638
        yield "                ";
        $context["online"] = false;
        // line 639
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 639, $this->source); })()), "users", [], "any", false, false, false, 639));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 640
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "loginAt", [], "any", false, false, false, 640) && ((null === (isset($context["lastLogin"]) || array_key_exists("lastLogin", $context) ? $context["lastLogin"] : (function () { throw new RuntimeError('Variable "lastLogin" does not exist.', 640, $this->source); })())) || (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "loginAt", [], "any", false, false, false, 640) > (isset($context["lastLogin"]) || array_key_exists("lastLogin", $context) ? $context["lastLogin"] : (function () { throw new RuntimeError('Variable "lastLogin" does not exist.', 640, $this->source); })()))))) {
                // line 641
                yield "                        ";
                $context["lastLogin"] = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "loginAt", [], "any", false, false, false, 641);
                // line 642
                yield "                    ";
            }
            // line 643
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "online", [], "any", false, false, false, 643)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 644
                yield "                        ";
                $context["online"] = true;
                // line 645
                yield "                    ";
            }
            // line 646
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 647
        yield "
                <div class=\"mt-3 d-flex align-items-center gap-3 text-white-50\">
                    <div>
                        <i class=\"bi bi-clock-history me-1\"></i>
                        Dernière connexion : 
                        ";
        // line 652
        if ((($tmp = (isset($context["lastLogin"]) || array_key_exists("lastLogin", $context) ? $context["lastLogin"] : (function () { throw new RuntimeError('Variable "lastLogin" does not exist.', 652, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 653
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["lastLogin"]) || array_key_exists("lastLogin", $context) ? $context["lastLogin"] : (function () { throw new RuntimeError('Variable "lastLogin" does not exist.', 653, $this->source); })()), "d/m/Y H:i"), "html", null, true);
            yield "
                        ";
        } else {
            // line 655
            yield "                            Jamais
                        ";
        }
        // line 657
        yield "                    </div>
                    <div>
                        <i class=\"bi bi-circle-fill me-1 ";
        // line 659
        if ((($tmp = (isset($context["online"]) || array_key_exists("online", $context) ? $context["online"] : (function () { throw new RuntimeError('Variable "online" does not exist.', 659, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "text-success";
        } else {
            yield "text-secondary";
        }
        yield "\" style=\"font-size: 0.8rem;\"></i>
                        ";
        // line 660
        yield (((($tmp = (isset($context["online"]) || array_key_exists("online", $context) ? $context["online"] : (function () { throw new RuntimeError('Variable "online" does not exist.', 660, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("En ligne") : ("Hors ligne"));
        yield "
                    </div>
                </div>
            </div>
            <div class=\"col-auto\">
                <div class=\"d-flex gap-2\">
                    <a href=\"";
        // line 666
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_index");
        yield "\" 
                       class=\"btn btn-action btn-back\"
                       title=\"Retour à la liste des entreprises\">
                        <i class=\"bi bi-arrow-left me-1\"></i>
                        Retour
                    </a>
                    
                    <a href=\"";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 673, $this->source); })()), "id", [], "any", false, false, false, 673)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-action btn-edit\"
                       title=\"Modifier cette entreprise\">
                        <i class=\"bi bi-pencil me-1\"></i>
                        Modifier
                    </a>
                    
                    <a href=\"";
        // line 680
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 680, $this->source); })()), "id", [], "any", false, false, false, 680)]), "html", null, true);
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
        // line 698
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_products"]) || array_key_exists("total_products", $context) ? $context["total_products"] : (function () { throw new RuntimeError('Variable "total_products" does not exist.', 698, $this->source); })()), "html", null, true);
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
        // line 707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_orders"]) || array_key_exists("total_orders", $context) ? $context["total_orders"] : (function () { throw new RuntimeError('Variable "total_orders" does not exist.', 707, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-mini-label\">Commandes</div>
                ";
        // line 709
        if ((array_key_exists("orders_evolution", $context) && ((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 709, $this->source); })()) != 0))) {
            // line 710
            yield "                    <span class=\"evolution-badge ";
            yield ((((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 710, $this->source); })()) > 0)) ? ("evolution-up") : ("evolution-down"));
            yield " mt-2\">
                        <i class=\"bi bi-arrow-";
            // line 711
            yield ((((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 711, $this->source); })()) > 0)) ? ("up") : ("down"));
            yield "\"></i>
                        ";
            // line 712
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(abs((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 712, $this->source); })())), "html", null, true);
            yield "% vs mois dernier
                    </span>
                ";
        }
        // line 715
        yield "            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-info\">
                    <i class=\"bi bi-tags\"></i>
                </div>
                <div class=\"stat-mini-value\">";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_categories"]) || array_key_exists("total_categories", $context) ? $context["total_categories"] : (function () { throw new RuntimeError('Variable "total_categories" does not exist.', 722, $this->source); })()), "html", null, true);
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
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_suppliers"]) || array_key_exists("total_suppliers", $context) ? $context["total_suppliers"] : (function () { throw new RuntimeError('Variable "total_suppliers" does not exist.', 731, $this->source); })()), "html", null, true);
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
        // line 754
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 754, $this->source); })()), "email", [], "any", false, false, false, 754), "html", null, true);
        yield "\" class=\"text-decoration-none text-dark fw-bold\">
                                ";
        // line 755
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 755, $this->source); })()), "email", [], "any", false, false, false, 755), "html", null, true);
        yield "
                            </a>
                        </div>
                    </div>
                    
                    ";
        // line 760
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 760, $this->source); })()), "phone", [], "any", false, false, false, 760)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 761
            yield "                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"bg-success bg-opacity-10 p-2 rounded-circle me-3\">
                                <i class=\"bi bi-telephone text-success\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\">Téléphone</small>
                                <a href=\"tel:";
            // line 767
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 767, $this->source); })()), "phone", [], "any", false, false, false, 767), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark fw-bold\">
                                    ";
            // line 768
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 768, $this->source); })()), "phone", [], "any", false, false, false, 768), "html", null, true);
            yield "
                                </a>
                            </div>
                        </div>
                    ";
        }
        // line 773
        yield "                    
                    ";
        // line 774
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 774, $this->source); })()), "address", [], "any", false, false, false, 774)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 775
            yield "                        <div class=\"d-flex align-items-center\">
                            <div class=\"bg-info bg-opacity-10 p-2 rounded-circle me-3\">
                                <i class=\"bi bi-geo-alt text-info\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\">Adresse</small>
                                <span class=\"text-dark\">
                                    ";
            // line 782
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 782, $this->source); })()), "address", [], "any", false, false, false, 782), "html", null, true);
            yield "<br>
                                    ";
            // line 783
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 783, $this->source); })()), "city", [], "any", false, false, false, 783)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 783, $this->source); })()), "city", [], "any", false, false, false, 783), "html", null, true);
                yield ", ";
            }
            // line 784
            yield "                                    ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "country", [], "any", true, true, false, 784) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 784, $this->source); })()), "country", [], "any", false, false, false, 784)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 784, $this->source); })()), "country", [], "any", false, false, false, 784), "html", null, true)) : ("Sénégal"));
            yield "
                                </span>
                            </div>
                        </div>
                    ";
        }
        // line 789
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
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["created_at"]) || array_key_exists("created_at", $context) ? $context["created_at"] : (function () { throw new RuntimeError('Variable "created_at" does not exist.', 809, $this->source); })()), "d/m/Y"), "html", null, true);
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
        // line 818
        yield (((($tmp = (isset($context["activated_at"]) || array_key_exists("activated_at", $context) ? $context["activated_at"] : (function () { throw new RuntimeError('Variable "activated_at" does not exist.', 818, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["activated_at"]) || array_key_exists("activated_at", $context) ? $context["activated_at"] : (function () { throw new RuntimeError('Variable "activated_at" does not exist.', 818, $this->source); })()), "d/m/Y"), "html", null, true)) : ("-"));
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
        // line 832
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 832, $this->source); })()), "subscriptionStartAt", [], "any", false, false, false, 832)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 832, $this->source); })()), "subscriptionStartAt", [], "any", false, false, false, 832), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"bg-light p-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\">Fin abonnement</small>
                                <div class=\"fw-bold counter-number ";
        // line 839
        yield ((((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 839, $this->source); })()) && ((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 839, $this->source); })()) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) ? ("text-danger") : (""));
        yield "\" 
                                     data-tooltip=\"Fin de l'abonnement\">
                                    <i class=\"bi bi-stop-circle me-1 ";
        // line 841
        yield ((((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 841, $this->source); })()) && ((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 841, $this->source); })()) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) ? ("text-danger") : ("text-warning"));
        yield "\"></i>
                                    ";
        // line 842
        yield (((($tmp = (isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 842, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 842, $this->source); })()), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alerte essai -->
                    ";
        // line 849
        if ((($tmp = (isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 849, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 850
            yield "                        <div class=\"alert-trial mt-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"me-3\">
                                    <i class=\"bi bi-hourglass-split fs-4\"></i>
                                </div>
                                <div>
                                    <strong>Période d'essai</strong><br>
                                    <small>
                                        Expire le ";
            // line 858
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 858, $this->source); })()), "d/m/Y"), "html", null, true);
            yield "
                                        (";
            // line 859
            yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff((isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 859, $this->source); })()));
            yield ")
                                    </small>
                                </div>
                                <div class=\"ms-auto\">
                                    <span class=\"badge bg-dark\">
                                        ";
            // line 864
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 864, $this->source); })()), "d/m/Y"), "html", null, true);
            yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 870
        yield "
                    <!-- Alerte expiration abonnement -->
                    ";
        // line 872
        if (((array_key_exists("days_until_expiration", $context) &&  !(null === (isset($context["days_until_expiration"]) || array_key_exists("days_until_expiration", $context) ? $context["days_until_expiration"] : (function () { throw new RuntimeError('Variable "days_until_expiration" does not exist.', 872, $this->source); })()))) && ((isset($context["days_until_expiration"]) || array_key_exists("days_until_expiration", $context) ? $context["days_until_expiration"] : (function () { throw new RuntimeError('Variable "days_until_expiration" does not exist.', 872, $this->source); })()) <= 30))) {
            // line 873
            yield "                        <div class=\"alert alert-warning mt-3 py-2\">
                            <i class=\"bi bi-exclamation-triangle me-2\"></i>
                            <strong>Attention :</strong> Abonnement expire dans ";
            // line 875
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["days_until_expiration"]) || array_key_exists("days_until_expiration", $context) ? $context["days_until_expiration"] : (function () { throw new RuntimeError('Variable "days_until_expiration" does not exist.', 875, $this->source); })()), "html", null, true);
            yield " jours
                        </div>
                    ";
        }
        // line 878
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
        // line 891
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 891, $this->source); })()), "latitude", [], "any", false, false, false, 891) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 891, $this->source); })()), "longitude", [], "any", false, false, false, 891))) {
            // line 892
            yield "                        <div id=\"map\" style=\"height: 180px;\"></div>
                        <div class=\"d-flex justify-content-between mt-3\">
                            <small class=\"text-muted\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Lat: ";
            // line 896
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 896, $this->source); })()), "latitude", [], "any", false, false, false, 896), "html", null, true);
            yield "
                            </small>
                            <small class=\"text-muted\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Long: ";
            // line 900
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 900, $this->source); })()), "longitude", [], "any", false, false, false, 900), "html", null, true);
            yield "
                            </small>
                        </div>
                    ";
        } else {
            // line 904
            yield "                        <div class=\"text-center py-4\">
                            <div class=\"mb-3\">
                                <i class=\"bi bi-geo-alt fs-1 text-muted\"></i>
                            </div>
                            <h6 class=\"text-muted\">Aucune localisation</h6>
                            <p class=\"text-muted small\">Cette entreprise n'a pas renseigné de coordonnées GPS.</p>
                        </div>
                    ";
        }
        // line 912
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
        // line 936
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 936, $this->source); })()), "productCount", [], "any", false, false, false, 936), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\">/ ";
        // line 937
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 937, $this->source); })()), "products", [], "any", false, false, false, 937), "limit", [], "any", false, false, false, 937) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 937, $this->source); })()), "products", [], "any", false, false, false, 937), "limit", [], "any", false, false, false, 937), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-primary\" 
                                 style=\"width: ";
        // line 942
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 942, $this->source); })()), "products", [], "any", false, false, false, 942), "percentage", [], "any", false, false, false, 942), "html", null, true);
        yield "%\">
                            </div>
                        </div>
                        <small class=\"text-muted mt-1 d-block\">
                            <i class=\"bi bi-arrow-right me-1\"></i>
                            ";
        // line 947
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 947, $this->source); })()), "products", [], "any", false, false, false, 947), "remaining", [], "any", false, false, false, 947) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("Illimité") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 947, $this->source); })()), "products", [], "any", false, false, false, 947), "remaining", [], "any", false, false, false, 947) . " restants"), "html", null, true)));
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
        // line 959
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 959, $this->source); })()), "categoryCount", [], "any", false, false, false, 959), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\">/ ";
        // line 960
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 960, $this->source); })()), "categories", [], "any", false, false, false, 960), "limit", [], "any", false, false, false, 960) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 960, $this->source); })()), "categories", [], "any", false, false, false, 960), "limit", [], "any", false, false, false, 960), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-success\" 
                                 style=\"width: ";
        // line 965
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 965, $this->source); })()), "categoryCount", [], "any", false, false, false, 965) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 965, $this->source); })()), "categories", [], "any", false, false, false, 965), "limit", [], "any", false, false, false, 965)) * 100)), "html", null, true);
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
        // line 978
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 978, $this->source); })()), "supplierCount", [], "any", false, false, false, 978), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\">/ ";
        // line 979
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 979, $this->source); })()), "suppliers", [], "any", false, false, false, 979), "limit", [], "any", false, false, false, 979) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 979, $this->source); })()), "suppliers", [], "any", false, false, false, 979), "limit", [], "any", false, false, false, 979), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-warning\" 
                                 style=\"width: ";
        // line 984
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 984, $this->source); })()), "supplierCount", [], "any", false, false, false, 984) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 984, $this->source); })()), "suppliers", [], "any", false, false, false, 984), "limit", [], "any", false, false, false, 984)) * 100)), "html", null, true);
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
        // line 997
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users_count"]) || array_key_exists("total_users_count", $context) ? $context["total_users_count"] : (function () { throw new RuntimeError('Variable "total_users_count" does not exist.', 997, $this->source); })()), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\">total</small>
                            </span>
                        </div>
                        
                        ";
        // line 1003
        yield "                        <div class=\"d-flex justify-content-between mt-2 small\">
                            <span class=\"text-success\">
                                <i class=\"bi bi-person-check\"></i>
                                ";
        // line 1006
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_users_count"]) || array_key_exists("active_users_count", $context) ? $context["active_users_count"] : (function () { throw new RuntimeError('Variable "active_users_count" does not exist.', 1006, $this->source); })()), "html", null, true);
        yield " actifs
                            </span>
                            <span class=\"text-warning\">
                                <i class=\"bi bi-person-exclamation\"></i>
                                ";
        // line 1010
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["out_of_quota_count"]) || array_key_exists("out_of_quota_count", $context) ? $context["out_of_quota_count"] : (function () { throw new RuntimeError('Variable "out_of_quota_count" does not exist.', 1010, $this->source); })()), "html", null, true);
        yield " hors quota
                            </span>
                            <span class=\"text-muted\">
                                <i class=\"bi bi-person-x\"></i>
                                ";
        // line 1014
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_by_admin_count"]) || array_key_exists("inactive_by_admin_count", $context) ? $context["inactive_by_admin_count"] : (function () { throw new RuntimeError('Variable "inactive_by_admin_count" does not exist.', 1014, $this->source); })()), "html", null, true);
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
        // line 1033
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1033, $this->source); })()), "features", [], "any", false, false, false, 1033));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 1034
            yield "                            <span class=\"feature-badge\">
                                <i class=\"bi bi-check-circle-fill text-success me-1\"></i>
                                ";
            // line 1036
            if (($context["feature"] == "all")) {
                // line 1037
                yield "                                    Toutes les fonctionnalités
                                ";
            } elseif ((            // line 1038
$context["feature"] == "basic_inventory")) {
                // line 1039
                yield "                                    Inventaire basique
                                ";
            } elseif ((            // line 1040
$context["feature"] == "basic_reports")) {
                // line 1041
                yield "                                    Rapports basiques
                                ";
            } elseif ((            // line 1042
$context["feature"] == "advanced_inventory")) {
                // line 1043
                yield "                                    Inventaire avancé
                                ";
            } elseif ((            // line 1044
$context["feature"] == "reports")) {
                // line 1045
                yield "                                    Rapports avancés
                                ";
            } elseif ((            // line 1046
$context["feature"] == "api_access")) {
                // line 1047
                yield "                                    Accès API
                                ";
            } elseif ((            // line 1048
$context["feature"] == "priority_support")) {
                // line 1049
                yield "                                    Support prioritaire
                                ";
            } elseif ((            // line 1050
$context["feature"] == "custom_domain")) {
                // line 1051
                yield "                                    Domaine personnalisé
                                ";
            } elseif ((            // line 1052
$context["feature"] == "white_label")) {
                // line 1053
                yield "                                    White Label
                                ";
            } else {
                // line 1055
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["feature"], ["_" => " "])), "html", null, true);
                yield "
                                ";
            }
            // line 1057
            yield "                            </span>
                        ";
            $context['_iterated'] = true;
        }
        // line 1058
        if (!$context['_iterated']) {
            // line 1059
            yield "                            <div class=\"text-center py-4 w-100\">
                                <i class=\"bi bi-exclamation-circle fs-1 text-muted mb-3\"></i>
                                <p class=\"text-muted mb-0\">Aucune fonctionnalité disponible</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1064
        yield "                    </div>

                    ";
        // line 1066
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1066, $this->source); })()), "features", [], "any", false, false, false, 1066))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1067
            yield "                        <div class=\"mt-4 p-3 bg-light rounded-3\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <small class=\"text-muted d-block mb-1\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Plan actuel
                                    </small>
                                    <!-- BADGE PLAN AVEC STYLE CORRIGÉ -->
                                    ";
            // line 1075
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1075, $this->source); })()), "currentPlan", [], "any", false, false, false, 1075) == "trial")) {
                // line 1076
                yield "                                        <span class=\"badge plan-trial plan-badge p-2\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            ";
                // line 1078
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1078, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1078), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1080
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1080, $this->source); })()), "currentPlan", [], "any", false, false, false, 1080) == "freemium")) {
                // line 1081
                yield "                                        <span class=\"badge plan-freemium plan-badge p-2\">
                                            <i class=\"bi bi-gift me-1\"></i>
                                            ";
                // line 1083
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1083, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1083), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1085
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1085, $this->source); })()), "currentPlan", [], "any", false, false, false, 1085) == "basic")) {
                // line 1086
                yield "                                        <span class=\"badge plan-basic plan-badge p-2\">
                                            <i class=\"bi bi-rocket me-1\"></i>
                                            ";
                // line 1088
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1088, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1088), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1090
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1090, $this->source); })()), "currentPlan", [], "any", false, false, false, 1090) == "premium")) {
                // line 1091
                yield "                                        <span class=\"badge plan-premium plan-badge p-2\">
                                            <i class=\"bi bi-stars me-1\"></i>
                                            ";
                // line 1093
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1093, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1093), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 1096
                yield "                                        <span class=\"badge bg-secondary plan-badge p-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1096, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1096), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 1098
            yield "                                </div>
                                ";
            // line 1099
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1099, $this->source); })()), "trial_days_remaining", [], "any", false, false, false, 1099) > 0)) {
                // line 1100
                yield "                                    <div class=\"text-warning\">
                                        <i class=\"bi bi-hourglass-split me-1\"></i>
                                        ";
                // line 1102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1102, $this->source); })()), "trial_days_remaining", [], "any", false, false, false, 1102), "html", null, true);
                yield " jours restants
                                    </div>
                                ";
            }
            // line 1105
            yield "                            </div>
                        </div>
                    ";
        }
        // line 1108
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
        // line 1125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_users_count"]) || array_key_exists("active_users_count", $context) ? $context["active_users_count"] : (function () { throw new RuntimeError('Variable "active_users_count" does not exist.', 1125, $this->source); })()), "html", null, true);
        yield "
                        </span>
                        <span class=\"badge bg-warning text-dark\">
                            <i class=\"bi bi-person-exclamation me-1\"></i>
                            Hors quota: ";
        // line 1129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["out_of_quota_count"]) || array_key_exists("out_of_quota_count", $context) ? $context["out_of_quota_count"] : (function () { throw new RuntimeError('Variable "out_of_quota_count" does not exist.', 1129, $this->source); })()), "html", null, true);
        yield "
                        </span>
                        <span class=\"badge bg-secondary\">
                            <i class=\"bi bi-person-x me-1\"></i>
                            Désactivés: ";
        // line 1133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_by_admin_count"]) || array_key_exists("inactive_by_admin_count", $context) ? $context["inactive_by_admin_count"] : (function () { throw new RuntimeError('Variable "inactive_by_admin_count" does not exist.', 1133, $this->source); })()), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        ";
        // line 1139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users_by_role_with_status"]) || array_key_exists("users_by_role_with_status", $context) ? $context["users_by_role_with_status"] : (function () { throw new RuntimeError('Variable "users_by_role_with_status" does not exist.', 1139, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["role"] => $context["data"]) {
            // line 1140
            yield "                            <div class=\"col-md-3 mb-3\">
                                <div class=\"role-card\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                            <!-- BADGE RÔLE AVEC STYLE CORRIGÉ -->
                                            ";
            // line 1145
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 1146
                yield "                                                <span class=\"role-badge role-admin\">
                                                    <i class=\"bi bi-shield-check me-1\"></i>
                                                    ";
                // line 1148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1148), "html", null, true);
                yield "
                                                </span>
                                            ";
            } elseif ((            // line 1150
$context["role"] == "ROLE_MANAGER")) {
                // line 1151
                yield "                                                <span class=\"role-badge role-manager\">
                                                    <i class=\"bi bi-graph-up me-1\"></i>
                                                    ";
                // line 1153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1153), "html", null, true);
                yield "
                                                </span>
                                            ";
            } elseif ((            // line 1155
$context["role"] == "ROLE_STOCK_MANAGER")) {
                // line 1156
                yield "                                                <span class=\"role-badge role-stock\">
                                                    <i class=\"bi bi-box-seam me-1\"></i>
                                                    ";
                // line 1158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1158), "html", null, true);
                yield "
                                                </span>
                                            ";
            } elseif ((            // line 1160
$context["role"] == "ROLE_CASHIER")) {
                // line 1161
                yield "                                                <span class=\"role-badge role-cashier\">
                                                    <i class=\"bi bi-cash-coin me-1\"></i>
                                                    ";
                // line 1163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1163), "html", null, true);
                yield "
                                                </span>
                                            ";
            } else {
                // line 1166
                yield "                                                <span class=\"role-badge role-user\">
                                                    <i class=\"bi bi-person me-1\"></i>
                                                    ";
                // line 1168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1168), "html", null, true);
                yield "
                                                </span>
                                            ";
            }
            // line 1171
            yield "                                            <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1171), "html", null, true);
            yield "</span>
                                        </div>
                                        
                                        <!-- Barre de progression du statut -->
                                        <div class=\"progress mb-3\" style=\"height: 8px; background-color: #e9ecef;\">
                                            ";
            // line 1176
            $context["active_percent"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1176) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "active", [], "any", false, false, false, 1176) / CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1176)) * 100))) : (0));
            // line 1177
            yield "                                            ";
            $context["quota_percent"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1177) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quota", [], "any", false, false, false, 1177) / CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1177)) * 100))) : (0));
            // line 1178
            yield "                                            ";
            $context["inactive_percent"] = ((100 - (isset($context["active_percent"]) || array_key_exists("active_percent", $context) ? $context["active_percent"] : (function () { throw new RuntimeError('Variable "active_percent" does not exist.', 1178, $this->source); })())) - (isset($context["quota_percent"]) || array_key_exists("quota_percent", $context) ? $context["quota_percent"] : (function () { throw new RuntimeError('Variable "quota_percent" does not exist.', 1178, $this->source); })()));
            // line 1179
            yield "                                            
                                            <div class=\"progress-bar bg-success\" 
                                                 style=\"width: ";
            // line 1181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_percent"]) || array_key_exists("active_percent", $context) ? $context["active_percent"] : (function () { throw new RuntimeError('Variable "active_percent" does not exist.', 1181, $this->source); })()), "html", null, true);
            yield "%; border-radius: 4px 0 0 4px;\"
                                                 title=\"Actifs: ";
            // line 1182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "active", [], "any", false, false, false, 1182), "html", null, true);
            yield "\"></div>
                                            <div class=\"progress-bar bg-warning\" 
                                                 style=\"width: ";
            // line 1184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota_percent"]) || array_key_exists("quota_percent", $context) ? $context["quota_percent"] : (function () { throw new RuntimeError('Variable "quota_percent" does not exist.', 1184, $this->source); })()), "html", null, true);
            yield "%;\"
                                                 title=\"Hors quota: ";
            // line 1185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quota", [], "any", false, false, false, 1185), "html", null, true);
            yield "\"></div>
                                            <div class=\"progress-bar bg-secondary\" 
                                                 style=\"width: ";
            // line 1187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_percent"]) || array_key_exists("inactive_percent", $context) ? $context["inactive_percent"] : (function () { throw new RuntimeError('Variable "inactive_percent" does not exist.', 1187, $this->source); })()), "html", null, true);
            yield "%; border-radius: 0 4px 4px 0;\"
                                                 title=\"Désactivés: ";
            // line 1188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "inactive", [], "any", false, false, false, 1188), "html", null, true);
            yield "\"></div>
                                        </div>
                                        
                                        <!-- Détails des statuts -->
                                        <div class=\"d-flex justify-content-between text-center\">
                                            <div>
                                                <span class=\"fw-bold text-success\">";
            // line 1194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "active", [], "any", false, false, false, 1194), "html", null, true);
            yield "</span>
                                                <div><small class=\"text-muted\">Actifs</small></div>
                                            </div>
                                            <div>
                                                <span class=\"fw-bold text-warning\">";
            // line 1198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quota", [], "any", false, false, false, 1198), "html", null, true);
            yield "</span>
                                                <div><small class=\"text-muted\">Quota</small></div>
                                            </div>
                                            <div>
                                                <span class=\"fw-bold text-secondary\">";
            // line 1202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "inactive", [], "any", false, false, false, 1202), "html", null, true);
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
        // line 1209
        if (!$context['_iterated']) {
            // line 1210
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
        // line 1216
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
        // line 1229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1229, $this->source); })()), "id", [], "any", false, false, false, 1229)]), "html", null, true);
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
        // line 1248
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 1248, $this->source); })()), 0, 5));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 1249
            yield "                            ";
            $context["plan"] = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "subscriptionPlan", [], "any", false, false, false, 1249);
            // line 1250
            yield "                            <tr>
                                <td class=\"px-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-calendar3 me-2 text-muted\"></i>
                                        <div>
                                            <div>";
            // line 1255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 1255), "d/m/Y"), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\">";
            // line 1256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 1256), "H:i"), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"px-4\">
                                    ";
            // line 1261
            if ((($tmp = (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1261, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1262
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1262, $this->source); })()), "name", [], "any", false, false, false, 1262) == "trial")) {
                    // line 1263
                    yield "                                            <span class=\"badge plan-trial plan-badge p-2\">
                                                <i class=\"bi bi-hourglass-split me-1\"></i>
                                                ";
                    // line 1265
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1265, $this->source); })()), "displayName", [], "any", false, false, false, 1265), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1267
(isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1267, $this->source); })()), "name", [], "any", false, false, false, 1267) == "freemium")) {
                    // line 1268
                    yield "                                            <span class=\"badge plan-freemium plan-badge p-2\">
                                                <i class=\"bi bi-gift me-1\"></i>
                                                ";
                    // line 1270
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1270, $this->source); })()), "displayName", [], "any", false, false, false, 1270), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1272
(isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1272, $this->source); })()), "name", [], "any", false, false, false, 1272) == "basic")) {
                    // line 1273
                    yield "                                            <span class=\"badge plan-basic plan-badge p-2\">
                                                <i class=\"bi bi-rocket me-1\"></i>
                                                ";
                    // line 1275
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1275, $this->source); })()), "displayName", [], "any", false, false, false, 1275), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1277
(isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1277, $this->source); })()), "name", [], "any", false, false, false, 1277) == "premium")) {
                    // line 1278
                    yield "                                            <span class=\"badge plan-premium plan-badge p-2\">
                                                <i class=\"bi bi-stars me-1\"></i>
                                                ";
                    // line 1280
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1280, $this->source); })()), "displayName", [], "any", false, false, false, 1280), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } else {
                    // line 1283
                    yield "                                            <span class=\"badge bg-secondary plan-badge p-2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1283, $this->source); })()), "displayName", [], "any", false, false, false, 1283), "html", null, true);
                    yield "</span>
                                        ";
                }
                // line 1285
                yield "                                    ";
            } else {
                // line 1286
                yield "                                        <span class=\"badge bg-secondary plan-badge p-2\">Plan inconnu</span>
                                    ";
            }
            // line 1288
            yield "                                </td>
                                <td class=\"px-4\">
                                    ";
            // line 1290
            if ((($tmp = (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1290, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1291
                yield "                                        ";
                $context["amount"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "billingPeriod", [], "any", false, false, false, 1291) == "yearly")) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1291, $this->source); })()), "priceYearly", [], "any", false, false, false, 1291)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1291, $this->source); })()), "priceMonthly", [], "any", false, false, false, 1291)));
                // line 1292
                yield "                                        <div class=\"fw-bold text-dark\">
                                            ";
                // line 1293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 1293, $this->source); })()), 0, ",", " "), "html", null, true);
                yield " 
                                            <small class=\"text-muted\">FCFA</small>
                                            <br><small class=\"text-muted\">";
                // line 1295
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "billingPeriod", [], "any", false, false, false, 1295) == "yearly")) ? ("annuel") : ("mensuel"));
                yield "</small>
                                        </div>
                                    ";
            } else {
                // line 1298
                yield "                                        <span class=\"text-muted\">-</span>
                                    ";
            }
            // line 1300
            yield "                                </td>
                                <td class=\"px-4\">
                                    ";
            // line 1302
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 1302) == "active")) {
                // line 1303
                yield "                                        <span class=\"status-badge status-active\">
                                            <i class=\"bi bi-check-circle\"></i> Actif
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1306
$context["subscription"], "status", [], "any", false, false, false, 1306) == "pending")) {
                // line 1307
                yield "                                        <span class=\"status-badge status-trial\">
                                            <i class=\"bi bi-hourglass\"></i> En attente
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1310
$context["subscription"], "status", [], "any", false, false, false, 1310) == "expired")) {
                // line 1311
                yield "                                        <span class=\"status-badge status-inactive\">
                                            <i class=\"bi bi-x-circle\"></i> Expiré
                                        </span>
                                    ";
            } else {
                // line 1315
                yield "                                        <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 1315)), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 1317
            yield "                                </td>
                                <td class=\"px-4\">
                                    ";
            // line 1319
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 1319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1320
                yield "                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"bi bi-calendar-x me-2 text-muted\"></i>
                                            <span class=\"";
                // line 1322
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 1322) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) ? ("text-danger fw-bold") : (""));
                yield "\">
                                                ";
                // line 1323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 1323), "d/m/Y"), "html", null, true);
                yield "
                                            </span>
                                        </div>
                                    ";
            } else {
                // line 1327
                yield "                                        <span class=\"text-muted\">-</span>
                                    ";
            }
            // line 1329
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 1331
        if (!$context['_iterated']) {
            // line 1332
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
        // line 1340
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Carte Leaflet -->
";
        // line 1348
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1348, $this->source); })()), "latitude", [], "any", false, false, false, 1348) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1348, $this->source); })()), "longitude", [], "any", false, false, false, 1348))) {
            // line 1349
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

        // line 1350
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
        <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const map = L.map('map').setView([";
        // line 1355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1355, $this->source); })()), "latitude", [], "any", false, false, false, 1355), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1355, $this->source); })()), "longitude", [], "any", false, false, false, 1355), "html", null, true);
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
        // line 1371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1371, $this->source); })()), "latitude", [], "any", false, false, false, 1371), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1371, $this->source); })()), "longitude", [], "any", false, false, false, 1371), "html", null, true);
        yield "], { icon: customIcon })
                    .addTo(map)
                    .bindPopup(`
                        <div style=\"text-align: center; padding: 10px;\">
                            <strong style=\"color: #667eea;\">";
        // line 1375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1375, $this->source); })()), "companyName", [], "any", false, false, false, 1375), "html", null, true);
        yield "</strong><br>
                            <small>";
        // line 1376
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1376, $this->source); })()), "address", [], "any", false, false, false, 1376)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1376, $this->source); })()), "address", [], "any", false, false, false, 1376), "html", null, true)) : ("Adresse non renseignée"));
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
        return array (  2109 => 1376,  2105 => 1375,  2096 => 1371,  2075 => 1355,  2066 => 1350,  2041 => 1349,  2039 => 1348,  2029 => 1340,  2016 => 1332,  2014 => 1331,  2008 => 1329,  2004 => 1327,  1997 => 1323,  1993 => 1322,  1989 => 1320,  1987 => 1319,  1983 => 1317,  1977 => 1315,  1971 => 1311,  1969 => 1310,  1964 => 1307,  1962 => 1306,  1957 => 1303,  1955 => 1302,  1951 => 1300,  1947 => 1298,  1941 => 1295,  1936 => 1293,  1933 => 1292,  1930 => 1291,  1928 => 1290,  1924 => 1288,  1920 => 1286,  1917 => 1285,  1911 => 1283,  1905 => 1280,  1901 => 1278,  1899 => 1277,  1894 => 1275,  1890 => 1273,  1888 => 1272,  1883 => 1270,  1879 => 1268,  1877 => 1267,  1872 => 1265,  1868 => 1263,  1865 => 1262,  1863 => 1261,  1855 => 1256,  1851 => 1255,  1844 => 1250,  1841 => 1249,  1836 => 1248,  1814 => 1229,  1799 => 1216,  1788 => 1210,  1786 => 1209,  1774 => 1202,  1767 => 1198,  1760 => 1194,  1751 => 1188,  1747 => 1187,  1742 => 1185,  1738 => 1184,  1733 => 1182,  1729 => 1181,  1725 => 1179,  1722 => 1178,  1719 => 1177,  1717 => 1176,  1708 => 1171,  1702 => 1168,  1698 => 1166,  1692 => 1163,  1688 => 1161,  1686 => 1160,  1681 => 1158,  1677 => 1156,  1675 => 1155,  1670 => 1153,  1666 => 1151,  1664 => 1150,  1659 => 1148,  1655 => 1146,  1653 => 1145,  1646 => 1140,  1641 => 1139,  1632 => 1133,  1625 => 1129,  1618 => 1125,  1599 => 1108,  1594 => 1105,  1588 => 1102,  1584 => 1100,  1582 => 1099,  1579 => 1098,  1573 => 1096,  1567 => 1093,  1563 => 1091,  1561 => 1090,  1556 => 1088,  1552 => 1086,  1550 => 1085,  1545 => 1083,  1541 => 1081,  1539 => 1080,  1534 => 1078,  1530 => 1076,  1528 => 1075,  1518 => 1067,  1516 => 1066,  1512 => 1064,  1502 => 1059,  1500 => 1058,  1495 => 1057,  1489 => 1055,  1485 => 1053,  1483 => 1052,  1480 => 1051,  1478 => 1050,  1475 => 1049,  1473 => 1048,  1470 => 1047,  1468 => 1046,  1465 => 1045,  1463 => 1044,  1460 => 1043,  1458 => 1042,  1455 => 1041,  1453 => 1040,  1450 => 1039,  1448 => 1038,  1445 => 1037,  1443 => 1036,  1439 => 1034,  1434 => 1033,  1412 => 1014,  1405 => 1010,  1398 => 1006,  1393 => 1003,  1385 => 997,  1369 => 984,  1361 => 979,  1357 => 978,  1341 => 965,  1333 => 960,  1329 => 959,  1314 => 947,  1306 => 942,  1298 => 937,  1294 => 936,  1268 => 912,  1258 => 904,  1251 => 900,  1244 => 896,  1238 => 892,  1236 => 891,  1221 => 878,  1215 => 875,  1211 => 873,  1209 => 872,  1205 => 870,  1196 => 864,  1188 => 859,  1184 => 858,  1174 => 850,  1172 => 849,  1162 => 842,  1158 => 841,  1153 => 839,  1143 => 832,  1126 => 818,  1114 => 809,  1092 => 789,  1083 => 784,  1078 => 783,  1074 => 782,  1065 => 775,  1063 => 774,  1060 => 773,  1052 => 768,  1048 => 767,  1040 => 761,  1038 => 760,  1030 => 755,  1026 => 754,  1000 => 731,  988 => 722,  979 => 715,  973 => 712,  969 => 711,  964 => 710,  962 => 709,  957 => 707,  945 => 698,  924 => 680,  914 => 673,  904 => 666,  895 => 660,  887 => 659,  883 => 657,  879 => 655,  873 => 653,  871 => 652,  864 => 647,  858 => 646,  855 => 645,  852 => 644,  849 => 643,  846 => 642,  843 => 641,  840 => 640,  835 => 639,  832 => 638,  830 => 637,  826 => 635,  819 => 630,  812 => 625,  810 => 624,  806 => 622,  800 => 620,  794 => 617,  790 => 615,  788 => 614,  783 => 612,  779 => 610,  777 => 609,  772 => 607,  768 => 605,  766 => 604,  761 => 602,  757 => 600,  755 => 599,  751 => 597,  744 => 592,  737 => 587,  735 => 586,  728 => 582,  721 => 578,  714 => 574,  710 => 572,  704 => 569,  701 => 568,  695 => 565,  690 => 564,  688 => 563,  676 => 554,  667 => 548,  660 => 543,  647 => 542,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
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
                <!-- Informations de connexion de l'entreprise -->
                {% set lastLogin = null %}
                {% set online = false %}
                {% for user in hma_service.users %}
                    {% if user.loginAt and (lastLogin is null or user.loginAt > lastLogin) %}
                        {% set lastLogin = user.loginAt %}
                    {% endif %}
                    {% if user.online %}
                        {% set online = true %}
                    {% endif %}
                {% endfor %}

                <div class=\"mt-3 d-flex align-items-center gap-3 text-white-50\">
                    <div>
                        <i class=\"bi bi-clock-history me-1\"></i>
                        Dernière connexion : 
                        {% if lastLogin %}
                            {{ lastLogin|date('d/m/Y H:i') }}
                        {% else %}
                            Jamais
                        {% endif %}
                    </div>
                    <div>
                        <i class=\"bi bi-circle-fill me-1 {% if online %}text-success{% else %}text-secondary{% endif %}\" style=\"font-size: 0.8rem;\"></i>
                        {{ online ? 'En ligne' : 'Hors ligne' }}
                    </div>
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
                            {% set plan = subscription.subscriptionPlan %}
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
                                    {% if plan %}
                                        {% if plan.name == 'trial' %}
                                            <span class=\"badge plan-trial plan-badge p-2\">
                                                <i class=\"bi bi-hourglass-split me-1\"></i>
                                                {{ plan.displayName }}
                                            </span>
                                        {% elseif plan.name == 'freemium' %}
                                            <span class=\"badge plan-freemium plan-badge p-2\">
                                                <i class=\"bi bi-gift me-1\"></i>
                                                {{ plan.displayName }}
                                            </span>
                                        {% elseif plan.name == 'basic' %}
                                            <span class=\"badge plan-basic plan-badge p-2\">
                                                <i class=\"bi bi-rocket me-1\"></i>
                                                {{ plan.displayName }}
                                            </span>
                                        {% elseif plan.name == 'premium' %}
                                            <span class=\"badge plan-premium plan-badge p-2\">
                                                <i class=\"bi bi-stars me-1\"></i>
                                                {{ plan.displayName }}
                                            </span>
                                        {% else %}
                                            <span class=\"badge bg-secondary plan-badge p-2\">{{ plan.displayName }}</span>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"badge bg-secondary plan-badge p-2\">Plan inconnu</span>
                                    {% endif %}
                                </td>
                                <td class=\"px-4\">
                                    {% if plan %}
                                        {% set amount = (subscription.billingPeriod == 'yearly') ? plan.priceYearly : plan.priceMonthly %}
                                        <div class=\"fw-bold text-dark\">
                                            {{ amount|number_format(0, ',', ' ') }} 
                                            <small class=\"text-muted\">FCFA</small>
                                            <br><small class=\"text-muted\">{{ subscription.billingPeriod == 'yearly' ? 'annuel' : 'mensuel' }}</small>
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted\">-</span>
                                    {% endif %}
                                </td>
                                <td class=\"px-4\">
                                    {% if subscription.status == 'active' %}
                                        <span class=\"status-badge status-active\">
                                            <i class=\"bi bi-check-circle\"></i> Actif
                                        </span>
                                    {% elseif subscription.status == 'pending' %}
                                        <span class=\"status-badge status-trial\">
                                            <i class=\"bi bi-hourglass\"></i> En attente
                                        </span>
                                    {% elseif subscription.status == 'expired' %}
                                        <span class=\"status-badge status-inactive\">
                                            <i class=\"bi bi-x-circle\"></i> Expiré
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\">{{ subscription.status|capitalize }}</span>
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
