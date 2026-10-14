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

/* super_admin/analysis_price/index.html.twig */
class __TwigTemplate_835c9c42ef25c276d08b8d16dd9739ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_price/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_price/index.html.twig"));

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

        yield "Gestion des prix d'analyse - Super Admin";
        
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
    .stats-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white !important;
        border: none;
    }
    .stats-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stats-card .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0;
    }
    .stats-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-icon {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
    }
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-purple {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%) !important;
        color: white;
    }
    .card-bg-primary .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-info .stat-icon,
    .card-bg-purple .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    
    /* Table avec scroll - CORRIGÉ */
    .price-table-container {
        max-height: 60vh;
        overflow: auto;
        scroll-behavior: smooth;
        width: 100%;
    }
    
    .price-table-container::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    .price-table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .price-table-container::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }
    
    .price-table-container::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }
    
    .price-table {
        min-width: 900px;
        width: 100%;
        margin-bottom: 0;
    }
    
    .price-table thead th {
        position: sticky;
        top: 0;
        background: #f8fafc;
        z-index: 10;
        box-shadow: 0 1px 0 0 #e2e8f0;
    }
    
    .price-table tr {
        transition: background 0.2s ease;
        cursor: pointer;
    }
    .price-table tr:hover {
        background: #f8fafc;
    }
    
    .price-amount {
        font-weight: 700;
        color: #0463f1;
        font-size: 1.1rem;
    }
    
    .type-badge {
        font-family: monospace;
        font-size: 0.75rem;
        background: #f1f5f9;
        padding: 0.25rem 0.5rem;
        border-radius: 0.5rem;
        color: #1e293b;
        display: inline-block;
        white-space: nowrap;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.3rem;
        justify-content: center;
        flex-wrap: nowrap;
    }
    
    .action-buttons .btn {
        padding: 0.2rem 0.4rem;
    }
    
    .price-description {
        max-width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
    }
    
    .price-description:hover {
        white-space: normal;
        word-break: break-word;
        position: relative;
        background: white;
        padding: 0.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 20;
        max-width: 250px;
        white-space: normal;
        cursor: help;
    }
    
    .badge-status {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.2rem 0.4rem;
        border-radius: 2rem;
        font-size: 0.65rem;
        font-weight: 500;
        white-space: nowrap;
    }
    .badge-active {
        background: #d1fae5;
        color: #065f46;
    }
    .badge-inactive {
        background: #fee2e2;
        color: #991b1b;
    }

    /* ========================================
       RESPONSIVE - MOBILE (CORRIGÉ)
    ======================================== */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        /* En-tête */
        .h1 {
            font-size: 1.1rem !important;
        }
        .h3 {
            font-size: 0.95rem !important;
        }
        .text-muted {
            font-size: 0.7rem !important;
        }
        .breadcrumb {
            font-size: 0.6rem !important;
        }
        .breadcrumb-item a {
            font-size: 0.6rem !important;
        }
        
        /* Boutons */
        .btn {
            font-size: 0.65rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .btn i {
            font-size: 0.7rem !important;
        }
        
        /* Stats */
        .stats-card .stat-value {
            font-size: 1.2rem !important;
        }
        .stats-card .stat-label {
            font-size: 0.5rem !important;
        }
        .stat-icon {
            width: 28px !important;
            height: 28px !important;
        }
        .stat-icon i {
            font-size: 1rem !important;
        }
        .card-body {
            padding: 0.4rem !important;
        }
        
        /* ✅ TABLEAU - SCROLL HORIZONTAL ACTIF */
        .price-table-container {
            max-height: 50vh;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .price-table {
            min-width: 700px !important;
            width: 100% !important;
        }
        
        .price-table thead th {
            font-size: 0.55rem !important;
            padding: 0.3rem 0.25rem !important;
            white-space: nowrap;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        
        .price-table tbody td {
            font-size: 0.6rem !important;
            padding: 0.25rem 0.25rem !important;
            vertical-align: middle;
        }
        
        .price-amount {
            font-size: 0.75rem !important;
            white-space: nowrap;
        }
        
        .type-badge {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.25rem !important;
            white-space: nowrap;
        }
        
        .badge-status {
            font-size: 0.45rem !important;
            padding: 0.1rem 0.25rem !important;
            white-space: nowrap;
        }
        .badge-status i {
            font-size: 0.4rem !important;
        }
        
        /* ✅ ACTIONS - boutons plus petits mais visibles */
        .action-buttons {
            gap: 0.1rem !important;
            flex-wrap: nowrap;
        }
        .action-buttons .btn {
            padding: 0.1rem 0.2rem !important;
            font-size: 0.45rem !important;
        }
        .action-buttons .btn i {
            font-size: 0.45rem !important;
        }
        
        /* ✅ DESCRIPTION - scroll horizontal */
        .price-description {
            max-width: 60px !important;
            font-size: 0.55rem !important;
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        /* ✅ INDICATEUR DE SCROLL */
        .table-responsive {
            position: relative;
        }
        
        .table-responsive::after {
            content: '← Faites glisser pour voir plus →';
            display: block;
            text-align: center;
            font-size: 0.5rem;
            color: #94a3b8;
            padding: 0.3rem;
            background: #f8fafc;
            border-radius: 0 0 0.75rem 0.75rem;
            opacity: 0.8;
        }
        
        /* MODALES */
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-body {
            padding: 0.5rem !important;
        }
        .modal-footer {
            padding: 0.4rem !important;
            flex-wrap: wrap;
        }
        .modal-footer .btn {
            font-size: 0.7rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .modal-header {
            padding: 0.4rem 0.6rem !important;
        }
        .modal-title {
            font-size: 0.85rem !important;
        }
        .modal-body p {
            font-size: 0.75rem !important;
        }
        
        /* Card */
        .card {
            border-radius: 0.75rem !important;
        }
        .card-header {
            padding: 0.4rem 0.5rem !important;
        }
        .card-header h5 {
            font-size: 0.75rem !important;
        }
        .card-header .badge {
            font-size: 0.5rem !important;
        }
        
        /* Désactiver hover sur mobile */
        .stats-card:hover {
            transform: none !important;
        }
        .price-table tr:hover {
            background: transparent !important;
        }
        .price-description:hover {
            white-space: nowrap !important;
            background: transparent !important;
            padding: 0 !important;
            box-shadow: none !important;
            max-width: 60px !important;
            cursor: default !important;
        }
    }

    /* Tablette */
    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .h1 {
            font-size: 1.3rem !important;
        }
        .btn {
            font-size: 0.7rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        
        .stats-card .stat-value {
            font-size: 1.4rem !important;
        }
        .stat-icon {
            width: 38px !important;
            height: 38px !important;
        }
        .stat-icon i {
            font-size: 1.4rem !important;
        }
        
        .price-table {
            min-width: 750px !important;
        }
        .price-table thead th {
            font-size: 0.6rem !important;
            padding: 0.4rem 0.3rem !important;
        }
        .price-table tbody td {
            font-size: 0.65rem !important;
            padding: 0.3rem 0.3rem !important;
        }
        .price-description {
            max-width: 100px !important;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 427
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

        // line 428
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 438
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-tags me-1\"></i> Prix des analyses
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tags text-primary me-2\"></i>
                <span class=\"d-none d-sm-inline\">Gestion des prix d'analyse</span>
                <span class=\"d-inline d-sm-none\">Prix analyses</span>
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les tarifs des analyses approfondies
            </p>
            <p class=\"text-muted mt-1 small d-block d-sm-none\">
                Tarifs des analyses
            </p>
        </div>
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 461
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_new");
        yield "\" class=\"btn btn-primary btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-plus me-1\"></i> <span class=\"d-none d-sm-inline\">Nouveau prix</span>
                <span class=\"d-inline d-sm-none\">Nouveau</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CARTES STATISTIQUES
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total offres</div>
                            <div class=\"stat-value\">";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 478)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 478, $this->source); })()), "total", [], "any", false, false, false, 478), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-tags fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Offres actives</div>
                            <div class=\"stat-value\">";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active", [], "any", true, true, false, 493)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 493, $this->source); })()), "active", [], "any", false, false, false, 493), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Offres inactives</div>
                            <div class=\"stat-value\">";
        // line 508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactive", [], "any", true, true, false, 508)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 508, $this->source); })()), "inactive", [], "any", false, false, false, 508), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-ban fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Prix moyen</div>
                            <div class=\"stat-value\">";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 523, $this->source); })()), "min_price", [], "any", false, false, false, 523) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 523, $this->source); })()), "max_price", [], "any", false, false, false, 523)) / 2)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         TABLEAU DES PRIX - AVEC SCROLL
    ========================================== -->
    <div class=\"card border-0 shadow-sm rounded-4\">
        <div class=\"card-header bg-white border-0 pt-3 pt-md-4 pb-2 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Liste des tarifs</span>
                <span class=\"d-inline d-sm-none\">Tarifs</span>
                <span class=\"badge bg-secondary ms-2\">";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 543)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 543, $this->source); })()), "total", [], "any", false, false, false, 543), 0)) : (0)), "html", null, true);
        yield "</span>
            </h5>
        </div>
        
        <!-- ✅ Conteneur avec scroll horizontal activé -->
        <div class=\"price-table-container\">
            <div class=\"table-responsive\">
                <table class=\"table price-table mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 8%; min-width: 70px;\">Type</th>
                            <th style=\"width: 12%; min-width: 100px;\">Libellé</th>
                            <th style=\"width: 25%; min-width: 150px;\">Description</th>
                            <th style=\"width: 10%; min-width: 80px;\">Prix</th>
                            <th style=\"width: 8%; min-width: 60px;\">Ordre</th>
                            <th style=\"width: 12%; min-width: 80px;\">Statut</th>
                            <th style=\"width: 15%; min-width: 150px;\" class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 563
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new RuntimeError('Variable "prices" does not exist.', 563, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 564
            yield "                            <tr onclick=\"window.location='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 564)]), "html", null, true);
            yield "'\">
                                <td>
                                    <code class=\"type-badge\">";
            // line 566
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 566), "html", null, true);
            yield "</code>
                                </td>
                                <td>
                                    <div class=\"fw-semibold small\">";
            // line 569
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 569), 0, 15), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 569)) > 15)) {
                yield "...";
            }
            yield "</div>
                                </td>
                                <td>
                                    <div class=\"price-description\" title=\"";
            // line 572
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", true, true, false, 572)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", false, false, false, 572), "—")) : ("—")), "html", null, true);
            yield "\">
                                        ";
            // line 573
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", true, true, false, 573)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", false, false, false, 573), "—")) : ("—"))), "truncate", [40], "method", false, false, false, 573), "html", null, true);
            yield "
                                    </div>
                                </td>
                                <td>
                                    <span class=\"price-amount\">";
            // line 577
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "priceFormatted", [], "any", false, false, false, 577), "html", null, true);
            yield "</span>
                                    ";
            // line 578
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 578) == "subscription")) {
                // line 579
                yield "                                        <small class=\"text-muted\" style=\"font-size:0.55rem;\">/mois</small>
                                    ";
            }
            // line 581
            yield "                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-secondary\" style=\"font-size:0.6rem;\">";
            // line 583
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "displayOrder", [], "any", true, true, false, 583)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "displayOrder", [], "any", false, false, false, 583), "—")) : ("—")), "html", null, true);
            yield "</span>
                                </td>
                                <td onclick=\"event.stopPropagation()\">
                                    ";
            // line 586
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["price"], "isActive", [], "any", false, false, false, 586)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 587
                yield "                                        <span class=\"badge-status badge-active\">
                                            <i class=\"fas fa-check-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Actif</span>
                                        </span>
                                    ";
            } else {
                // line 591
                yield "                                        <span class=\"badge-status badge-inactive\">
                                            <i class=\"fas fa-ban me-1\"></i> <span class=\"d-none d-sm-inline\">Inactif</span>
                                        </span>
                                    ";
            }
            // line 595
            yield "                                </td>
                                <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                    <div class=\"action-buttons\">
                                        <a href=\"";
            // line 598
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 598)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 602)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm ";
            // line 607
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["price"], "isActive", [], "any", false, false, false, 607)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-danger") : ("btn-outline-success"));
            yield " toggle-price-btn\"
                                                data-id=\"";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 608), "html", null, true);
            yield "\"
                                                data-label=\"";
            // line 609
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 609), "html", null, true);
            yield "\"
                                                data-active=\"";
            // line 610
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["price"], "isActive", [], "any", false, false, false, 610)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\"
                                                data-token=\"";
            // line 611
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 611))), "html", null, true);
            yield "\"
                                                title=\"";
            // line 612
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["price"], "isActive", [], "any", false, false, false, 612)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                            <i class=\"fas ";
            // line 613
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["price"], "isActive", [], "any", false, false, false, 613)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-ban") : ("fa-check-circle"));
            yield "\"></i>
                                        </button>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-danger delete-price-btn\" 
                                                data-id=\"";
            // line 617
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 617), "html", null, true);
            yield "\" 
                                                data-label=\"";
            // line 618
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 618), "html", null, true);
            yield "\"
                                                data-token=\"";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 619))), "html", null, true);
            yield "\"
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 626
        if (!$context['_iterated']) {
            // line 627
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4 py-md-5\">
                                    <i class=\"fas fa-tags fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0 small\">Aucun prix configuré</p>
                                    <p class=\"text-muted small mb-3\">Commencez par créer votre première offre</p>
                                    <a href=\"";
            // line 632
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_new");
            yield "\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un prix
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['price'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 638
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL CONFIRMATION SUPPRESSION
========================================== -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white py-2 py-md-3\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body py-3\">
                <p class=\"small mb-0\">Supprimer l'offre <strong id=\"deleteLabel\"></strong> ?</p>
                <div class=\"alert alert-warning mt-2 p-2 small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Action irréversible.
                </div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                        <i class=\"fas fa-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL CONFIRMATION ACTIVATION/DÉSACTIVATION
========================================== -->
<div class=\"modal fade\" id=\"toggleModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark py-2 py-md-3\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-exchange-alt me-2\"></i>
                    Changer le statut
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body py-3\">
                <p class=\"small mb-0\" id=\"toggleMessage\"></p>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleToken\">
                    <button type=\"submit\" class=\"btn btn-sm\" id=\"toggleBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 706
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

        // line 707
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== MODALE SUPPRESSION ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteLabel = document.getElementById('deleteLabel');
    const deleteToken = document.getElementById('deleteToken');
    
    document.querySelectorAll('.delete-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const id = this.dataset.id;
            const label = this.dataset.label;
            const token = this.dataset.token;
            
            deleteLabel.textContent = label;
            deleteToken.value = token;
            deleteForm.action = '/super-admin/analysis-prices/' + id + '/delete';
            
            deleteModal.show();
        });
    });
    
    // ========== MODALE ACTIVATION/DÉSACTIVATION ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleModal'));
    const toggleForm = document.getElementById('toggleForm');
    const toggleToken = document.getElementById('toggleToken');
    const toggleMessage = document.getElementById('toggleMessage');
    const toggleBtn = document.getElementById('toggleBtn');
    
    document.querySelectorAll('.toggle-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            
            const id = this.dataset.id;
            const label = this.dataset.label;
            const isActive = this.dataset.active === 'true';
            const token = this.dataset.token;
            const newStatus = isActive ? 'désactiver' : 'activer';
            
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong>\${newStatus}</strong> l'offre \"<strong>\${label}</strong>\" ?`;
            
            toggleBtn.className = isActive ? 'btn btn-danger btn-sm' : 'btn btn-success btn-sm';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            
            toggleToken.value = token;
            toggleForm.action = `/super-admin/analysis-prices/\${id}/toggle`;
            
            toggleModal.show();
        });
    });
    
    // ========== INDICATEUR DE SCROLL ==========
    const container = document.querySelector('.price-table-container');
    if (container) {
        // Vérifier si le contenu dépasse la largeur
        const checkScroll = function() {
            const hasScroll = container.scrollWidth > container.clientWidth;
            const indicator = container.querySelector('.scroll-indicator');
            if (hasScroll) {
                if (!indicator) {
                    const div = document.createElement('div');
                    div.className = 'scroll-indicator';
                    div.style.cssText = 'text-align:center;font-size:0.5rem;color:#94a3b8;padding:0.3rem;background:#f8fafc;border-radius:0 0 0.75rem 0.75rem;opacity:0.8;';
                    div.textContent = '← Glissez pour voir plus →';
                    container.parentNode.appendChild(div);
                }
            } else {
                if (indicator) {
                    indicator.remove();
                }
            }
        };
        checkScroll();
        window.addEventListener('resize', checkScroll);
    }
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
        return "super_admin/analysis_price/index.html.twig";
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
        return array (  956 => 707,  943 => 706,  866 => 638,  854 => 632,  847 => 627,  845 => 626,  833 => 619,  829 => 618,  825 => 617,  818 => 613,  814 => 612,  810 => 611,  806 => 610,  802 => 609,  798 => 608,  794 => 607,  786 => 602,  779 => 598,  774 => 595,  768 => 591,  762 => 587,  760 => 586,  754 => 583,  750 => 581,  746 => 579,  744 => 578,  740 => 577,  733 => 573,  729 => 572,  720 => 569,  714 => 566,  708 => 564,  703 => 563,  680 => 543,  657 => 523,  639 => 508,  621 => 493,  603 => 478,  583 => 461,  557 => 438,  545 => 428,  532 => 427,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis_price/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des prix d'analyse - Super Admin{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .stats-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white !important;
        border: none;
    }
    .stats-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stats-card .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0;
    }
    .stats-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-icon {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
    }
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-purple {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%) !important;
        color: white;
    }
    .card-bg-primary .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-info .stat-icon,
    .card-bg-purple .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    
    /* Table avec scroll - CORRIGÉ */
    .price-table-container {
        max-height: 60vh;
        overflow: auto;
        scroll-behavior: smooth;
        width: 100%;
    }
    
    .price-table-container::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    .price-table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .price-table-container::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }
    
    .price-table-container::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }
    
    .price-table {
        min-width: 900px;
        width: 100%;
        margin-bottom: 0;
    }
    
    .price-table thead th {
        position: sticky;
        top: 0;
        background: #f8fafc;
        z-index: 10;
        box-shadow: 0 1px 0 0 #e2e8f0;
    }
    
    .price-table tr {
        transition: background 0.2s ease;
        cursor: pointer;
    }
    .price-table tr:hover {
        background: #f8fafc;
    }
    
    .price-amount {
        font-weight: 700;
        color: #0463f1;
        font-size: 1.1rem;
    }
    
    .type-badge {
        font-family: monospace;
        font-size: 0.75rem;
        background: #f1f5f9;
        padding: 0.25rem 0.5rem;
        border-radius: 0.5rem;
        color: #1e293b;
        display: inline-block;
        white-space: nowrap;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.3rem;
        justify-content: center;
        flex-wrap: nowrap;
    }
    
    .action-buttons .btn {
        padding: 0.2rem 0.4rem;
    }
    
    .price-description {
        max-width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
    }
    
    .price-description:hover {
        white-space: normal;
        word-break: break-word;
        position: relative;
        background: white;
        padding: 0.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 20;
        max-width: 250px;
        white-space: normal;
        cursor: help;
    }
    
    .badge-status {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.2rem 0.4rem;
        border-radius: 2rem;
        font-size: 0.65rem;
        font-weight: 500;
        white-space: nowrap;
    }
    .badge-active {
        background: #d1fae5;
        color: #065f46;
    }
    .badge-inactive {
        background: #fee2e2;
        color: #991b1b;
    }

    /* ========================================
       RESPONSIVE - MOBILE (CORRIGÉ)
    ======================================== */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        /* En-tête */
        .h1 {
            font-size: 1.1rem !important;
        }
        .h3 {
            font-size: 0.95rem !important;
        }
        .text-muted {
            font-size: 0.7rem !important;
        }
        .breadcrumb {
            font-size: 0.6rem !important;
        }
        .breadcrumb-item a {
            font-size: 0.6rem !important;
        }
        
        /* Boutons */
        .btn {
            font-size: 0.65rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .btn i {
            font-size: 0.7rem !important;
        }
        
        /* Stats */
        .stats-card .stat-value {
            font-size: 1.2rem !important;
        }
        .stats-card .stat-label {
            font-size: 0.5rem !important;
        }
        .stat-icon {
            width: 28px !important;
            height: 28px !important;
        }
        .stat-icon i {
            font-size: 1rem !important;
        }
        .card-body {
            padding: 0.4rem !important;
        }
        
        /* ✅ TABLEAU - SCROLL HORIZONTAL ACTIF */
        .price-table-container {
            max-height: 50vh;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .price-table {
            min-width: 700px !important;
            width: 100% !important;
        }
        
        .price-table thead th {
            font-size: 0.55rem !important;
            padding: 0.3rem 0.25rem !important;
            white-space: nowrap;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        
        .price-table tbody td {
            font-size: 0.6rem !important;
            padding: 0.25rem 0.25rem !important;
            vertical-align: middle;
        }
        
        .price-amount {
            font-size: 0.75rem !important;
            white-space: nowrap;
        }
        
        .type-badge {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.25rem !important;
            white-space: nowrap;
        }
        
        .badge-status {
            font-size: 0.45rem !important;
            padding: 0.1rem 0.25rem !important;
            white-space: nowrap;
        }
        .badge-status i {
            font-size: 0.4rem !important;
        }
        
        /* ✅ ACTIONS - boutons plus petits mais visibles */
        .action-buttons {
            gap: 0.1rem !important;
            flex-wrap: nowrap;
        }
        .action-buttons .btn {
            padding: 0.1rem 0.2rem !important;
            font-size: 0.45rem !important;
        }
        .action-buttons .btn i {
            font-size: 0.45rem !important;
        }
        
        /* ✅ DESCRIPTION - scroll horizontal */
        .price-description {
            max-width: 60px !important;
            font-size: 0.55rem !important;
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        /* ✅ INDICATEUR DE SCROLL */
        .table-responsive {
            position: relative;
        }
        
        .table-responsive::after {
            content: '← Faites glisser pour voir plus →';
            display: block;
            text-align: center;
            font-size: 0.5rem;
            color: #94a3b8;
            padding: 0.3rem;
            background: #f8fafc;
            border-radius: 0 0 0.75rem 0.75rem;
            opacity: 0.8;
        }
        
        /* MODALES */
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-body {
            padding: 0.5rem !important;
        }
        .modal-footer {
            padding: 0.4rem !important;
            flex-wrap: wrap;
        }
        .modal-footer .btn {
            font-size: 0.7rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .modal-header {
            padding: 0.4rem 0.6rem !important;
        }
        .modal-title {
            font-size: 0.85rem !important;
        }
        .modal-body p {
            font-size: 0.75rem !important;
        }
        
        /* Card */
        .card {
            border-radius: 0.75rem !important;
        }
        .card-header {
            padding: 0.4rem 0.5rem !important;
        }
        .card-header h5 {
            font-size: 0.75rem !important;
        }
        .card-header .badge {
            font-size: 0.5rem !important;
        }
        
        /* Désactiver hover sur mobile */
        .stats-card:hover {
            transform: none !important;
        }
        .price-table tr:hover {
            background: transparent !important;
        }
        .price-description:hover {
            white-space: nowrap !important;
            background: transparent !important;
            padding: 0 !important;
            box-shadow: none !important;
            max-width: 60px !important;
            cursor: default !important;
        }
    }

    /* Tablette */
    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .h1 {
            font-size: 1.3rem !important;
        }
        .btn {
            font-size: 0.7rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        
        .stats-card .stat-value {
            font-size: 1.4rem !important;
        }
        .stat-icon {
            width: 38px !important;
            height: 38px !important;
        }
        .stat-icon i {
            font-size: 1.4rem !important;
        }
        
        .price-table {
            min-width: 750px !important;
        }
        .price-table thead th {
            font-size: 0.6rem !important;
            padding: 0.4rem 0.3rem !important;
        }
        .price-table tbody td {
            font-size: 0.65rem !important;
            padding: 0.3rem 0.3rem !important;
        }
        .price-description {
            max-width: 100px !important;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-tags me-1\"></i> Prix des analyses
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tags text-primary me-2\"></i>
                <span class=\"d-none d-sm-inline\">Gestion des prix d'analyse</span>
                <span class=\"d-inline d-sm-none\">Prix analyses</span>
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les tarifs des analyses approfondies
            </p>
            <p class=\"text-muted mt-1 small d-block d-sm-none\">
                Tarifs des analyses
            </p>
        </div>
        <div class=\"w-100 w-sm-auto\">
            <a href=\"{{ path('super_admin_analysis_price_new') }}\" class=\"btn btn-primary btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-plus me-1\"></i> <span class=\"d-none d-sm-inline\">Nouveau prix</span>
                <span class=\"d-inline d-sm-none\">Nouveau</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CARTES STATISTIQUES
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total offres</div>
                            <div class=\"stat-value\">{{ stats.total|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-tags fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Offres actives</div>
                            <div class=\"stat-value\">{{ stats.active|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Offres inactives</div>
                            <div class=\"stat-value\">{{ stats.inactive|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-ban fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Prix moyen</div>
                            <div class=\"stat-value\">{{ ((stats.min_price + stats.max_price) / 2)|round|number_format(0, ',', ' ') }}</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         TABLEAU DES PRIX - AVEC SCROLL
    ========================================== -->
    <div class=\"card border-0 shadow-sm rounded-4\">
        <div class=\"card-header bg-white border-0 pt-3 pt-md-4 pb-2 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Liste des tarifs</span>
                <span class=\"d-inline d-sm-none\">Tarifs</span>
                <span class=\"badge bg-secondary ms-2\">{{ stats.total|default(0) }}</span>
            </h5>
        </div>
        
        <!-- ✅ Conteneur avec scroll horizontal activé -->
        <div class=\"price-table-container\">
            <div class=\"table-responsive\">
                <table class=\"table price-table mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 8%; min-width: 70px;\">Type</th>
                            <th style=\"width: 12%; min-width: 100px;\">Libellé</th>
                            <th style=\"width: 25%; min-width: 150px;\">Description</th>
                            <th style=\"width: 10%; min-width: 80px;\">Prix</th>
                            <th style=\"width: 8%; min-width: 60px;\">Ordre</th>
                            <th style=\"width: 12%; min-width: 80px;\">Statut</th>
                            <th style=\"width: 15%; min-width: 150px;\" class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for price in prices %}
                            <tr onclick=\"window.location='{{ path('super_admin_analysis_price_show', {'id': price.id}) }}'\">
                                <td>
                                    <code class=\"type-badge\">{{ price.type }}</code>
                                </td>
                                <td>
                                    <div class=\"fw-semibold small\">{{ price.label|slice(0, 15) }}{% if price.label|length > 15 %}...{% endif %}</div>
                                </td>
                                <td>
                                    <div class=\"price-description\" title=\"{{ price.description|default('—') }}\">
                                        {{ price.description|default('—')|u.truncate(40) }}
                                    </div>
                                </td>
                                <td>
                                    <span class=\"price-amount\">{{ price.priceFormatted }}</span>
                                    {% if price.type == 'subscription' %}
                                        <small class=\"text-muted\" style=\"font-size:0.55rem;\">/mois</small>
                                    {% endif %}
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-secondary\" style=\"font-size:0.6rem;\">{{ price.displayOrder|default('—') }}</span>
                                </td>
                                <td onclick=\"event.stopPropagation()\">
                                    {% if price.isActive %}
                                        <span class=\"badge-status badge-active\">
                                            <i class=\"fas fa-check-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Actif</span>
                                        </span>
                                    {% else %}
                                        <span class=\"badge-status badge-inactive\">
                                            <i class=\"fas fa-ban me-1\"></i> <span class=\"d-none d-sm-inline\">Inactif</span>
                                        </span>
                                    {% endif %}
                                </td>
                                <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                    <div class=\"action-buttons\">
                                        <a href=\"{{ path('super_admin_analysis_price_show', {'id': price.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('super_admin_analysis_price_edit', {'id': price.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm {{ price.isActive ? 'btn-outline-danger' : 'btn-outline-success' }} toggle-price-btn\"
                                                data-id=\"{{ price.id }}\"
                                                data-label=\"{{ price.label }}\"
                                                data-active=\"{{ price.isActive ? 'true' : 'false' }}\"
                                                data-token=\"{{ csrf_token('toggle' ~ price.id) }}\"
                                                title=\"{{ price.isActive ? 'Désactiver' : 'Activer' }}\">
                                            <i class=\"fas {{ price.isActive ? 'fa-ban' : 'fa-check-circle' }}\"></i>
                                        </button>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-danger delete-price-btn\" 
                                                data-id=\"{{ price.id }}\" 
                                                data-label=\"{{ price.label }}\"
                                                data-token=\"{{ csrf_token('delete' ~ price.id) }}\"
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4 py-md-5\">
                                    <i class=\"fas fa-tags fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0 small\">Aucun prix configuré</p>
                                    <p class=\"text-muted small mb-3\">Commencez par créer votre première offre</p>
                                    <a href=\"{{ path('super_admin_analysis_price_new') }}\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un prix
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL CONFIRMATION SUPPRESSION
========================================== -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white py-2 py-md-3\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body py-3\">
                <p class=\"small mb-0\">Supprimer l'offre <strong id=\"deleteLabel\"></strong> ?</p>
                <div class=\"alert alert-warning mt-2 p-2 small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Action irréversible.
                </div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                        <i class=\"fas fa-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL CONFIRMATION ACTIVATION/DÉSACTIVATION
========================================== -->
<div class=\"modal fade\" id=\"toggleModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark py-2 py-md-3\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-exchange-alt me-2\"></i>
                    Changer le statut
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body py-3\">
                <p class=\"small mb-0\" id=\"toggleMessage\"></p>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleToken\">
                    <button type=\"submit\" class=\"btn btn-sm\" id=\"toggleBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== MODALE SUPPRESSION ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteLabel = document.getElementById('deleteLabel');
    const deleteToken = document.getElementById('deleteToken');
    
    document.querySelectorAll('.delete-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const id = this.dataset.id;
            const label = this.dataset.label;
            const token = this.dataset.token;
            
            deleteLabel.textContent = label;
            deleteToken.value = token;
            deleteForm.action = '/super-admin/analysis-prices/' + id + '/delete';
            
            deleteModal.show();
        });
    });
    
    // ========== MODALE ACTIVATION/DÉSACTIVATION ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleModal'));
    const toggleForm = document.getElementById('toggleForm');
    const toggleToken = document.getElementById('toggleToken');
    const toggleMessage = document.getElementById('toggleMessage');
    const toggleBtn = document.getElementById('toggleBtn');
    
    document.querySelectorAll('.toggle-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            
            const id = this.dataset.id;
            const label = this.dataset.label;
            const isActive = this.dataset.active === 'true';
            const token = this.dataset.token;
            const newStatus = isActive ? 'désactiver' : 'activer';
            
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong>\${newStatus}</strong> l'offre \"<strong>\${label}</strong>\" ?`;
            
            toggleBtn.className = isActive ? 'btn btn-danger btn-sm' : 'btn btn-success btn-sm';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            
            toggleToken.value = token;
            toggleForm.action = `/super-admin/analysis-prices/\${id}/toggle`;
            
            toggleModal.show();
        });
    });
    
    // ========== INDICATEUR DE SCROLL ==========
    const container = document.querySelector('.price-table-container');
    if (container) {
        // Vérifier si le contenu dépasse la largeur
        const checkScroll = function() {
            const hasScroll = container.scrollWidth > container.clientWidth;
            const indicator = container.querySelector('.scroll-indicator');
            if (hasScroll) {
                if (!indicator) {
                    const div = document.createElement('div');
                    div.className = 'scroll-indicator';
                    div.style.cssText = 'text-align:center;font-size:0.5rem;color:#94a3b8;padding:0.3rem;background:#f8fafc;border-radius:0 0 0.75rem 0.75rem;opacity:0.8;';
                    div.textContent = '← Glissez pour voir plus →';
                    container.parentNode.appendChild(div);
                }
            } else {
                if (indicator) {
                    indicator.remove();
                }
            }
        };
        checkScroll();
        window.addEventListener('resize', checkScroll);
    }
});
</script>
{% endblock %}", "super_admin/analysis_price/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_price\\index.html.twig");
    }
}
