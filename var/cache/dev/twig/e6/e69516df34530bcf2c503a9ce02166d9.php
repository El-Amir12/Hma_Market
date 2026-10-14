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

/* admin/stock_batch/all.html.twig */
class __TwigTemplate_a4c91ae0b39f67274d116847952e3b3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/all.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/all.html.twig"));

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

        yield "Gestion globale des lots - HMA Market";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    /* ✅ Variables CSS */
    :root {
        --card-radius: 1rem;
        --transition-speed: 0.2s;
    }
    
    /* Cartes statistiques */
    .stat-card {
        transition: transform var(--transition-speed), box-shadow var(--transition-speed);
        overflow: hidden;
        border-radius: var(--card-radius);
        background: white !important;
        border: 1px solid #e9ecef;
        height: 100%;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: var(--card-radius);
        flex-shrink: 0;
    }
    .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.2;
    }
    .stat-label {
        font-size: 0.7rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
    }
    
    .issue-badge {
        font-size: 0.65rem;
        padding: 0.15rem 0.4rem;
        margin-top: 0.15rem;
        display: inline-block;
    }
    
    .progress {
        border-radius: 10px;
        overflow: hidden;
        height: 6px;
    }
    .card {
        transition: transform var(--transition-speed), box-shadow var(--transition-speed);
        border-radius: var(--card-radius);
    }
    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
    }
    .badge {
        font-weight: 500;
    }
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
    }
    .table td {
        vertical-align: middle;
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.5rem;
        border-color: #dee2e6;
        min-height: 38px;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        line-height: 36px;
        padding-left: 12px;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
        height: 36px;
    }
    
    /* ✅ RESPONSIVE - TABLETTE ET MOBILE */
    @media (max-width: 992px) {
        .stat-value {
            font-size: 1.5rem;
        }
        .stat-icon {
            width: 42px;
            height: 42px;
        }
        .stat-icon i {
            font-size: 1.3rem;
        }
    }
    
    @media (max-width: 768px) {
        .stat-value {
            font-size: 1.2rem;
        }
        .stat-icon {
            width: 36px;
            height: 36px;
        }
        .stat-icon i {
            font-size: 1rem;
        }
        .stat-label {
            font-size: 0.6rem;
        }
        
        /* Boutons en colonne sur mobile */
        .btn-group {
            flex-direction: column;
            width: 100%;
        }
        .btn-group .btn {
            margin: 2px 0;
            border-radius: 0.375rem !important;
        }
        .btn-group .btn:not(:last-child) {
            border-radius: 0.375rem !important;
        }
        
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }
        
        /* Header mobile */
        .d-flex.justify-content-between.align-items-center {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 0.75rem !important;
        }
        
        /* Cartes stats - 2 par ligne sur mobile */
        .col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        
        /* Filtres en colonne */
        .row.g-3 > [class*=\"col-\"] {
            margin-bottom: 0.5rem;
        }
        
        /* Tableau - version carte mobile */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        /* Version carte pour mobile */
        .table-card-view .batch-card {
            background: white;
            border-radius: 0.75rem;
            border: 1px solid #e9ecef;
            padding: 0.75rem;
            margin-bottom: 0.75rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .table-card-view .batch-card .batch-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.5rem 1rem;
        }
        .table-card-view .batch-card .batch-item {
            display: flex;
            flex-direction: column;
        }
        .table-card-view .batch-card .batch-item .label {
            font-size: 0.6rem;
            text-transform: uppercase;
            color: #6c757d;
            font-weight: 600;
            letter-spacing: 0.3px;
        }
        .table-card-view .batch-card .batch-item .value {
            font-size: 0.85rem;
            font-weight: 500;
            word-break: break-word;
        }
        .table-card-view .batch-card .batch-actions {
            grid-column: 1 / -1;
            display: flex;
            flex-wrap: wrap;
            gap: 0.25rem;
            margin-top: 0.5rem;
            padding-top: 0.5rem;
            border-top: 1px solid #e9ecef;
        }
        .table-card-view .batch-card .batch-actions .btn {
            font-size: 0.7rem;
            padding: 0.2rem 0.5rem;
        }
        .table-card-view .batch-card .batch-checkbox-wrapper {
            grid-column: 1 / -1;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #e9ecef;
        }
        .table-card-view .batch-card .batch-checkbox-wrapper .form-check-input {
            width: 1.2rem;
            height: 1.2rem;
        }
        .table-card-view .batch-card .batch-checkbox-wrapper .batch-number {
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        /* Status colors sur mobile */
        .batch-card.status-expired {
            border-left: 4px solid #dc3545;
        }
        .batch-card.status-expiring {
            border-left: 4px solid #ffc107;
        }
        .batch-card.status-low {
            border-left: 4px solid #17a2b8;
        }
        .batch-card.status-issue {
            border-left: 4px solid #6c757d;
        }
    }
    
    @media (max-width: 480px) {
        .stat-value {
            font-size: 1rem;
        }
        .stat-icon {
            width: 30px;
            height: 30px;
        }
        .stat-icon i {
            font-size: 0.85rem;
        }
        .stat-label {
            font-size: 0.55rem;
        }
        
        .col-sm-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        
        .table-card-view .batch-card .batch-row {
            grid-template-columns: 1fr;
            gap: 0.3rem;
        }
        
        .table-card-view .batch-card .batch-actions .btn {
            font-size: 0.65rem;
            padding: 0.15rem 0.4rem;
        }
        
        h1.h3 {
            font-size: 1.1rem !important;
        }
        
        .breadcrumb {
            font-size: 0.75rem;
        }
    }
    
    /* Couleurs dynamiques */
    .btn-primary {
        background: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
    }
    .btn-primary:hover {
        background: var(--primary-dark) !important;
        border-color: var(--primary-dark) !important;
    }
    .text-primary {
        color: var(--primary-color) !important;
    }
    .bg-primary {
        background: var(--primary-color) !important;
    }
    .bg-primary.bg-opacity-10 {
        background: rgba(var(--primary-rgb), 0.1) !important;
    }
    .bg-success.bg-opacity-10 {
        background: rgba(46, 204, 113, 0.1) !important;
    }
    .bg-warning.bg-opacity-10 {
        background: rgba(243, 156, 18, 0.1) !important;
    }
    .bg-info.bg-opacity-10 {
        background: rgba(52, 152, 219, 0.1) !important;
    }
    .bg-danger.bg-opacity-10 {
        background: rgba(231, 76, 60, 0.1) !important;
    }
    .bg-secondary.bg-opacity-10 {
        background: rgba(108, 117, 125, 0.1) !important;
    }
    
    /* Désactiver le hover sur mobile pour éviter les problèmes de toucher */
    @media (max-width: 768px) {
        .table-hover tbody tr:hover {
            background-color: inherit !important;
            cursor: default;
        }
        .card:hover {
            transform: none !important;
        }
        .stat-card:hover {
            transform: none !important;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 335
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

        // line 336
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 343
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Tableau de bord</span>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-cubes me-1\"></i> Gestion des lots
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-cubes me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Gestion globale des lots</span>
                <span class=\"d-inline d-sm-none\">Lots</span>
            </h1>
            <p class=\"text-muted mt-2 d-none d-md-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Visualisez et gérez tous les lots de stock de votre entreprise
            </p>
        </div>
        <div class=\"d-flex flex-wrap gap-2 w-100 w-md-auto\">
            <a href=\"";
        // line 363
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"btn btn-outline-info btn-sm flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-map-marker-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Emplacements</span>
            </a>
            <div class=\"btn-group flex-grow-1 flex-md-grow-0\">
                <button type=\"button\" class=\"btn btn-outline-success btn-sm dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> <span class=\"d-none d-sm-inline\">Exporter</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><a class=\"dropdown-item\" href=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "request", [], "any", false, false, false, 371), "query", [], "any", false, false, false, 371), "all", [], "any", false, false, false, 371)), "html", null, true);
        yield "\"><i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 372, $this->source); })()), "request", [], "any", false, false, false, 372), "query", [], "any", false, false, false, 372), "all", [], "any", false, false, false, 372)), "html", null, true);
        yield "\"><i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 374
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_excel_template");
        yield "\"><i class=\"fas fa-download me-2\"></i> Télécharger template</a></li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-2 g-md-3 mb-4\">
        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Total lots</div>
                            <div class=\"stat-value text-primary\">";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 391)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 391, $this->source); })()), "total_batches", [], "any", false, false, false, 391), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-primary bg-opacity-10\">
                            <i class=\"fas fa-boxes text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Lots actifs</div>
                            <div class=\"stat-value text-success\">";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 406)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 406, $this->source); })()), "active_batches", [], "any", false, false, false, 406), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-play-circle text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Expire bientôt</div>
                            <div class=\"stat-value text-warning\">";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 421)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 421, $this->source); })()), "expiring_soon_batches", [], "any", false, false, false, 421), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-hourglass-half text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Unités en stock</div>
                            <div class=\"stat-value text-info\">";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 436)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 436, $this->source); })()), "total_quantity", [], "any", false, false, false, 436), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-info bg-opacity-10\">
                            <i class=\"fas fa-chart-line text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ligne 2 : 3 cartes -->
    <div class=\"row g-2 g-md-3 mb-4\">
        <div class=\"col-6 col-sm-6 col-md-4\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Lots expirés</div>
                            <div class=\"stat-value text-danger\">";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 455)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 455, $this->source); })()), "expired_batches", [], "any", false, false, false, 455), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-danger bg-opacity-10\">
                            <i class=\"fas fa-calendar-times text-danger\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-sm-6 col-md-4\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Avoirs ouverts</div>
                            <div class=\"stat-value text-secondary\">";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "open_issues", [], "any", true, true, false, 470)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 470, $this->source); })()), "open_issues", [], "any", false, false, false, 470), 0)) : (0)), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub text-muted mt-1 d-none d-sm-block\">";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_issue_amount", [], "any", true, true, false, 471)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 471, $this->source); })()), "total_issue_amount", [], "any", false, false, false, 471), 0)) : (0)), (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 471, $this->source); })())), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-secondary bg-opacity-10\">
                            <i class=\"fas fa-file-invoice-dollar text-secondary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-sm-6 col-md-4\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Stock faible</div>
                            <div class=\"stat-value text-warning\">";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "low_stock_batches", [], "any", true, true, false, 486)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 486, $this->source); })()), "low_stock_batches", [], "any", false, false, false, 486), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-exclamation-triangle text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold small\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 502
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white p-2 p-md-3\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-2 g-md-3\">
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control form-control-sm\" placeholder=\"N° lot ou produit...\" value=\"";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 515)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 515, $this->source); })()), "search", [], "any", false, false, false, 515), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Produit</label>
                        <select name=\"product_id\" id=\"product-select\" class=\"form-select form-select-sm select2-product\">
                            <option value=\"\">-- Tous --</option>
                            ";
        // line 521
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 521, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 522
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 522), "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "product_id", [], "any", true, true, false, 522)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 522, $this->source); })()), "product_id", [], "any", false, false, false, 522), "")) : ("")) == CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 522))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 522)), "truncate", [30], "method", false, false, false, 522), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 524
        yield "                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select form-select-sm select2-location\">
                            <option value=\"\">-- Tous --</option>
                            ";
        // line 530
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("all_locations", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["all_locations"]) || array_key_exists("all_locations", $context) ? $context["all_locations"] : (function () { throw new RuntimeError('Variable "all_locations" does not exist.', 530, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 531
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 531)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 531, $this->source); })()), "location", [], "any", false, false, false, 531), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($context["loc"]), "truncate", [25], "method", false, false, false, 531), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        yield "                        </select>
                    </div>
                </div>

                <!-- Deuxième ligne -->
                <div class=\"row g-2 g-md-3 mt-1 mt-md-2\">
                    <div class=\"col-6 col-sm-4 col-md-2\">
                        <label class=\"form-label fw-bold small mb-1\">Statut lot</label>
                        <select name=\"status\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 543
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 543)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 543, $this->source); })()), "status", [], "any", false, false, false, 543), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 544
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 544)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 544, $this->source); })()), "status", [], "any", false, false, false, 544), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-4 col-md-3\">
                        <label class=\"form-label fw-bold small mb-1\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" ";
        // line 551
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 551)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 551, $this->source); })()), "expiry_status", [], "any", false, false, false, 551), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                            <option value=\"expiring_soon\" ";
        // line 552
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 552)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 552, $this->source); })()), "expiry_status", [], "any", false, false, false, 552), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Expire bientôt</option>
                            <option value=\"not_expiring\" ";
        // line 553
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 553)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 553, $this->source); })()), "expiry_status", [], "any", false, false, false, 553), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-4 col-md-2\">
                        <label class=\"form-label fw-bold small mb-1\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 560
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 560)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 560, $this->source); })()), "low_stock", [], "any", false, false, false, 560), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-4 col-md-2\">
                        <label class=\"form-label fw-bold small mb-1\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 567
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 567)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 567, $this->source); })()), "has_issue", [], "any", false, false, false, 567), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">Avec</option>
                            <option value=\"no\" ";
        // line 568
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 568)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 568, $this->source); })()), "has_issue", [], "any", false, false, false, 568), "")) : ("")) == "no")) ? ("selected") : (""));
        yield ">Sans</option>
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-4 col-md-3\">
                        <label class=\"form-label fw-bold small mb-1\">Statut avoir</label>
                        <select name=\"issue_status\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"pending\">En attente</option>
                            <option value=\"acknowledged\">Accusé réception</option>
                            <option value=\"under_review\">En analyse</option>
                            <option value=\"partially_recovered\">Partiellement récupéré</option>
                            <option value=\"recovered\">Récupéré</option>
                            <option value=\"lost\">Perdu</option>
                            <option value=\"closed\">Clôturé</option>
                        </select>
                    </div>
                </div>

                <!-- Troisième ligne -->
                <div class=\"row g-2 g-md-3 mt-1 mt-md-2\">
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Dates expiration</label>
                        <div class=\"d-flex gap-2\">
                            <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" placeholder=\"Du\" value=\"";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 591)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 591, $this->source); })()), "date_from", [], "any", false, false, false, 591), "")) : ("")), "html", null, true);
        yield "\">
                            <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" placeholder=\"Au\" value=\"";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 592)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 592, $this->source); })()), "date_to", [], "any", false, false, false, 592), "")) : ("")), "html", null, true);
        yield "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-3 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Trier par</label>
                        <select name=\"sort\" class=\"form-select form-select-sm\">
                            <option value=\"batch_number\" ";
        // line 598
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 598)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 598, $this->source); })()), "sort", [], "any", false, false, false, 598), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                            <option value=\"p.name\" ";
        // line 599
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 599)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 599, $this->source); })()), "sort", [], "any", false, false, false, 599), "expiry_date")) : ("expiry_date")) == "p.name")) ? ("selected") : (""));
        yield ">Produit</option>
                            <option value=\"expiry_date\" ";
        // line 600
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 600)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 600, $this->source); })()), "sort", [], "any", false, false, false, 600), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Expiration</option>
                            <option value=\"current_quantity\" ";
        // line 601
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 601)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 601, $this->source); })()), "sort", [], "any", false, false, false, 601), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            <option value=\"location\" ";
        // line 602
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 602)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 602, $this->source); })()), "sort", [], "any", false, false, false, 602), "expiry_date")) : ("expiry_date")) == "location")) ? ("selected") : (""));
        yield ">Emplacement</option>
                            <option value=\"issue_status\" ";
        // line 603
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 603)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 603, $this->source); })()), "sort", [], "any", false, false, false, 603), "expiry_date")) : ("expiry_date")) == "issue_status")) ? ("selected") : (""));
        yield ">Statut avoir</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-3 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Ordre</label>
                        <select name=\"direction\" class=\"form-select form-select-sm\">
                            <option value=\"asc\" ";
        // line 609
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 609)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 609, $this->source); })()), "direction", [], "any", false, false, false, 609), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">Croissant ↑</option>
                            <option value=\"desc\" ";
        // line 610
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 610)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 610, $this->source); })()), "direction", [], "any", false, false, false, 610), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
        yield ">Décroissant ↓</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold small\">
                <i class=\"fas fa-list me-2\"></i> 
                <span class=\"d-none d-sm-inline\">Liste des lots</span>
                <span class=\"d-inline d-sm-none\">Lots</span>
            </h5>
            <div class=\"d-flex gap-2 align-items-center flex-wrap\">
                <span class=\"badge bg-secondary\">";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 627, $this->source); })())), "html", null, true);
        yield "</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\"><i class=\"fas fa-check-double me-1\"></i> <span class=\"d-none d-sm-inline\">Tout</span></button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\"><i class=\"fas fa-times me-1\"></i> <span class=\"d-none d-sm-inline\">Désélec.</span></button>
            </div>
        </div>
        
        <!-- Affichage tableau sur grand écran -->
        <div class=\"card-body p-0 d-none d-md-block\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width:40px\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
                            <th>N° lot</th>
                            <th>Produit</th>
                            <th>Emplacement</th>
                            <th>Quantité</th>
                            <th>Prix unit.</th>
                            <th>Expiration</th>
                            <th>Avoir</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 652
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 652, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 653
            yield "                            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 653) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 653) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 654
            yield "                            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 654) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 654) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 654) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 655
            yield "                            ";
            $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 655) <= 10);
            // line 656
            yield "                            ";
            $context["hasIssue"] = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 656);
            // line 657
            yield "                            ";
            $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 657)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 657), "displayName", [], "any", false, false, false, 657)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 657)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 657)) : ("—"))));
            // line 658
            yield "                            
                            ";
            // line 660
            yield "                            ";
            $context["creditNote"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["supplierCreditNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 660), [], "array", true, true, false, 660) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplierCreditNotes"]) || array_key_exists("supplierCreditNotes", $context) ? $context["supplierCreditNotes"] : (function () { throw new RuntimeError('Variable "supplierCreditNotes" does not exist.', 660, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 660), [], "array", false, false, false, 660)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplierCreditNotes"]) || array_key_exists("supplierCreditNotes", $context) ? $context["supplierCreditNotes"] : (function () { throw new RuntimeError('Variable "supplierCreditNotes" does not exist.', 660, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 660), [], "array", false, false, false, 660)) : (null));
            // line 661
            yield "                            ";
            // line 662
            yield "                            ";
            $context["realIssueStatus"] = (((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 662, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 662, $this->source); })()), "status", [], "any", false, false, false, 662)) : (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatus", [], "any", false, false, false, 662)));
            // line 663
            yield "                            
                            ";
            // line 665
            yield "                            ";
            if ((((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 665, $this->source); })()) == "recovered") || ((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 665, $this->source); })()) == "resolved"))) {
                // line 666
                yield "                                ";
                $context["issueBadgeClass"] = "bg-success";
                // line 667
                yield "                                ";
                $context["issueLabel"] = "Récupéré";
                // line 668
                yield "                                ";
                $context["issueIcon"] = "fa-check-circle";
                // line 669
                yield "                            ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 669, $this->source); })()) == "pending")) {
                // line 670
                yield "                                ";
                $context["issueBadgeClass"] = "bg-warning text-dark";
                // line 671
                yield "                                ";
                $context["issueLabel"] = "En attente";
                // line 672
                yield "                                ";
                $context["issueIcon"] = "fa-clock";
                // line 673
                yield "                            ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 673, $this->source); })()) == "acknowledged")) {
                // line 674
                yield "                                ";
                $context["issueBadgeClass"] = "bg-info";
                // line 675
                yield "                                ";
                $context["issueLabel"] = "Accusé réception";
                // line 676
                yield "                                ";
                $context["issueIcon"] = "fa-check";
                // line 677
                yield "                            ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 677, $this->source); })()) == "under_review")) {
                // line 678
                yield "                                ";
                $context["issueBadgeClass"] = "bg-info";
                // line 679
                yield "                                ";
                $context["issueLabel"] = "En analyse";
                // line 680
                yield "                                ";
                $context["issueIcon"] = "fa-search";
                // line 681
                yield "                            ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 681, $this->source); })()) == "partially_recovered")) {
                // line 682
                yield "                                ";
                $context["issueBadgeClass"] = "bg-warning text-dark";
                // line 683
                yield "                                ";
                $context["issueLabel"] = "Partiellement récupéré";
                // line 684
                yield "                                ";
                $context["issueIcon"] = "fa-hourglass-half";
                // line 685
                yield "                            ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 685, $this->source); })()) == "lost")) {
                // line 686
                yield "                                ";
                $context["issueBadgeClass"] = "bg-danger";
                // line 687
                yield "                                ";
                $context["issueLabel"] = "Perdu";
                // line 688
                yield "                                ";
                $context["issueIcon"] = "fa-times-circle";
                // line 689
                yield "                            ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 689, $this->source); })()) == "closed")) {
                // line 690
                yield "                                ";
                $context["issueBadgeClass"] = "bg-secondary";
                // line 691
                yield "                                ";
                $context["issueLabel"] = "Clôturé";
                // line 692
                yield "                                ";
                $context["issueIcon"] = "fa-archive";
                // line 693
                yield "                            ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 693, $this->source); })()) == "rejected")) {
                // line 694
                yield "                                ";
                $context["issueBadgeClass"] = "bg-danger";
                // line 695
                yield "                                ";
                $context["issueLabel"] = "Rejeté";
                // line 696
                yield "                                ";
                $context["issueIcon"] = "fa-times-circle";
                // line 697
                yield "                            ";
            } else {
                // line 698
                yield "                                ";
                $context["issueBadgeClass"] = "bg-secondary";
                // line 699
                yield "                                ";
                $context["issueLabel"] = Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 699, $this->source); })()), ["_" => " "]));
                // line 700
                yield "                                ";
                $context["issueIcon"] = "fa-exclamation-triangle";
                // line 701
                yield "                            ";
            }
            // line 702
            yield "                            
                            ";
            // line 703
            $context["purchaseItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 703), [], "array", true, true, false, 703)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 703, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 703), [], "array", false, false, false, 703)) : (null));
            // line 704
            yield "                            
                            <tr class=\"";
            // line 705
            if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 705, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-danger";
            } elseif ((($tmp = (isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 705, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-warning";
            } elseif ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 705, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-info";
            } elseif ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 705, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-light";
            }
            yield "\">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 706
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 706), "html", null, true);
            yield "\"></td>
                                <td>
                                    <div class=\"d-flex flex-column\">
                                        <strong>";
            // line 709
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 709), "html", null, true);
            yield "</strong>
                                        ";
            // line 710
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 710)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 711
                yield "                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-receipt me-1\"></i> 
                                                ";
                // line 713
                if ((array_key_exists("purchaseMap", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 713), [], "array", true, true, false, 713))) {
                    // line 714
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseMap"]) || array_key_exists("purchaseMap", $context) ? $context["purchaseMap"] : (function () { throw new RuntimeError('Variable "purchaseMap" does not exist.', 714, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 714), [], "array", false, false, false, 714), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 716
                    yield "                                                    ACHAT #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 716), "html", null, true);
                    yield "
                                                ";
                }
                // line 718
                yield "                                            </small>
                                            ";
                // line 719
                if (((isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 719, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 719, $this->source); })()), "purchase", [], "any", false, false, false, 719))) {
                    // line 720
                    yield "                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                                    ";
                    // line 722
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 722, $this->source); })()), "purchase", [], "any", false, false, false, 722), "createdAt", [], "any", false, false, false, 722), "d/m/Y"), "html", null, true);
                    yield "
                                                </small>
                                                ";
                    // line 724
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 724, $this->source); })()), "purchase", [], "any", false, false, false, 724), "supplier", [], "any", false, false, false, 724)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 725
                        yield "                                                    <small class=\"text-muted\">
                                                        <i class=\"fas fa-truck me-1\"></i>
                                                        ";
                        // line 727
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 727), "supplier", [], "any", false, true, false, 727), "name", [], "any", true, true, false, 727)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 727, $this->source); })()), "purchase", [], "any", false, false, false, 727), "supplier", [], "any", false, false, false, 727), "name", [], "any", false, false, false, 727), "")) : ("")), "html", null, true);
                        yield "
                                                    </small>
                                                ";
                    }
                    // line 730
                    yield "                                            ";
                }
                // line 731
                yield "                                        ";
            }
            // line 732
            yield "                                    </div>
                                </td>
                                <td>
                                    <a href=\"";
            // line 735
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 735), "id", [], "any", false, false, false, 735)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 735), "name", [], "any", false, false, false, 735)), "truncate", [30], "method", false, false, false, 735), "html", null, true);
            yield "</a>
                                    <br><small class=\"text-muted\"><i class=\"fas fa-barcode me-1\"></i>";
            // line 736
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 736), "barcode", [], "any", false, false, false, 736), "html", null, true);
            yield "</small>
                                </td>
                                <td>
                                    ";
            // line 739
            if (((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 739, $this->source); })()) != "—")) {
                // line 740
                yield "                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 740, $this->source); })())), "truncate", [15], "method", false, false, false, 740), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 742
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 744
            yield "                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 747), "html", null, true);
            yield "</span>
                                        <small class=\"text-muted\">/ ";
            // line 748
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 748), "html", null, true);
            yield "</small>
                                        <div class=\"progress mt-1\" style=\"height:4px\">
                                            <div class=\"progress-bar 
                                                ";
            // line 751
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 751) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 751)) * 100) <= 10)) {
                yield "bg-danger
                                                ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,             // line 752
$context["batch"], "currentQuantity", [], "any", false, false, false, 752) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 752)) * 100) <= 30)) {
                yield "bg-warning
                                                ";
            } else {
                // line 753
                yield "bg-success";
            }
            yield "\" 
                                                style=\"width:";
            // line 754
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 754) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 754)) * 100)), "html", null, true);
            yield "%\">
                                            </div>
                                        </div>
                                        ";
            // line 757
            if ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 757, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 758
                yield "                                            <br><span class=\"badge bg-warning text-dark mt-1 issue-badge\">Stock faible</span>
                                        ";
            }
            // line 760
            yield "                                    </div>
                                </td>
                                <td>";
            // line 762
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 762), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 762)), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 764
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 764)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 765
                yield "                                        <div>
                                            <span class=\"fw-bold\">";
                // line 766
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 766), "d/m/Y"), "html", null, true);
                yield "</span>
                                            ";
                // line 767
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 767, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 768
                    yield "                                                <br><span class=\"badge bg-danger mt-1 issue-badge\">Expiré</span>
                                            ";
                } elseif ((($tmp =                 // line 769
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 769, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 770
                    yield "                                                <br><span class=\"badge bg-warning text-dark mt-1 issue-badge\">J-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 770), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 770), "days", [], "any", false, false, false, 770), "html", null, true);
                    yield "</span>
                                            ";
                }
                // line 772
                yield "                                        </div>
                                    ";
            } else {
                // line 774
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 776
            yield "                                </td>
                                <td>
                                    ";
            // line 779
            yield "                                    ";
            if (((isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 779, $this->source); })()) && (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 779, $this->source); })()))) {
                // line 780
                yield "                                        <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["issueBadgeClass"]) || array_key_exists("issueBadgeClass", $context) ? $context["issueBadgeClass"] : (function () { throw new RuntimeError('Variable "issueBadgeClass" does not exist.', 780, $this->source); })()), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 781
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["issueIcon"]) || array_key_exists("issueIcon", $context) ? $context["issueIcon"] : (function () { throw new RuntimeError('Variable "issueIcon" does not exist.', 781, $this->source); })()), "html", null, true);
                yield " me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["issueLabel"]) || array_key_exists("issueLabel", $context) ? $context["issueLabel"] : (function () { throw new RuntimeError('Variable "issueLabel" does not exist.', 781, $this->source); })()), "html", null, true);
                yield "
                                        </span>
                                        ";
                // line 783
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issuePriority", [], "any", false, false, false, 783) == "critical")) {
                    // line 784
                    yield "                                            <span class=\"badge bg-danger mt-1 d-block issue-badge\">Critique</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 785
$context["batch"], "issuePriority", [], "any", false, false, false, 785) == "high")) {
                    // line 786
                    yield "                                            <span class=\"badge bg-warning text-dark mt-1 d-block issue-badge\">Haute</span>
                                        ";
                }
                // line 788
                yield "                                        <small class=\"text-muted d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 788, $this->source); })()), "declaredAmount", [], "any", false, false, false, 788), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 788)), "html", null, true);
                yield "</small>
                                    ";
            } elseif ((($tmp =             // line 789
(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 789, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 790
                yield "                                        ";
                // line 791
                yield "                                        <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusLabel", [], "any", false, false, false, 791), "html", null, true);
                yield "</span>
                                        <small class=\"text-muted d-block\">";
                // line 792
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 792), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 792)), "html", null, true);
                yield "</small>
                                    ";
            } else {
                // line 794
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 796
            yield "                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 798
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 798)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 799
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 799)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        ";
            // line 805
            yield "                                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 805)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-secondary\" 
                                           title=\"Imprimer\" 
                                           target=\"_blank\">
                                            <i class=\"fas fa-print\"></i>
                                        </a>
                                        
                                        ";
            // line 813
            yield "                                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 813)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-primary\" 
                                           title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        
                                        ";
            // line 820
            yield "                                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 820)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-warning\" 
                                           title=\"Modifier l'emplacement\">
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                        </a>
                                        
                                        ";
            // line 827
            yield "                                        ";
            if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["canReportIssue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 827), [], "array", true, true, false, 827) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 827, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 827), [], "array", false, false, false, 827)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 827, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 827), [], "array", false, false, false, 827)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 828
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 828)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-outline-danger\" 
                                               title=\"Signaler un problème\">
                                                <i class=\"fas fa-exclamation-triangle\"></i>
                                            </a>
                                        ";
            } elseif ((($tmp =             // line 833
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 833, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 834
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 834, $this->source); })()), "id", [], "any", false, false, false, 834)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm 
                                                   ";
                // line 836
                if (CoreExtension::inFilter((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 836, $this->source); })()), ["recovered", "resolved"])) {
                    yield "btn-success
                                                   ";
                } elseif ((                // line 837
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 837, $this->source); })()) == "pending")) {
                    yield "btn-warning
                                                   ";
                } elseif (CoreExtension::inFilter(                // line 838
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 838, $this->source); })()), ["rejected", "lost"])) {
                    yield "btn-danger
                                                   ";
                } else {
                    // line 839
                    yield "btn-info";
                }
                yield "\" 
                                               title=\"Voir l'avoir (";
                // line 840
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["issueLabel"]) || array_key_exists("issueLabel", $context) ? $context["issueLabel"] : (function () { throw new RuntimeError('Variable "issueLabel" does not exist.', 840, $this->source); })()), "html", null, true);
                yield ")\"
                                               target=\"_blank\">
                                                <i class=\"fas ";
                // line 842
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["issueIcon"]) || array_key_exists("issueIcon", $context) ? $context["issueIcon"] : (function () { throw new RuntimeError('Variable "issueIcon" does not exist.', 842, $this->source); })()), "html", null, true);
                yield "\"></i>
                                            </a>
                                        ";
            } else {
                // line 845
                yield "                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-secondary\" 
                                                    disabled 
                                                    title=\"Signalement non disponible\">
                                                <i class=\"fas fa-exclamation-triangle text-muted\"></i>
                                            </button>
                                        ";
            }
            // line 852
            yield "                                        
                                        ";
            // line 854
            yield "                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-info toggle-batch-btn\" 
                                                data-batch-id=\"";
            // line 856
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 856), "html", null, true);
            yield "\" 
                                                data-is-active=\"";
            // line 857
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 857)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\" 
                                                data-batch-number=\"";
            // line 858
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 858), "html", null, true);
            yield "\" 
                                                data-token=\"";
            // line 859
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 859))), "html", null, true);
            yield "\">
                                            <i class=\"fas ";
            // line 860
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 860)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield "\"></i>
                                        </button>
                                        
                                        ";
            // line 864
            yield "                                        ";
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 864)) == 0)) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 864))) {
                // line 865
                yield "                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger delete-batch-btn\" 
                                                    data-batch-id=\"";
                // line 867
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 867), "html", null, true);
                yield "\" 
                                                    data-batch-number=\"";
                // line 868
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 868), "html", null, true);
                yield "\" 
                                                    data-token=\"";
                // line 869
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 869))), "html", null, true);
                yield "\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        ";
            }
            // line 873
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 876
        if (!$context['_iterated']) {
            // line 877
            yield "                            <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun lot trouvé</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres ou créez des achats pour générer des lots</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 885
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- ✅ Affichage en cartes pour mobile -->
        <div class=\"card-body p-2 p-sm-3 d-md-none table-card-view\">
            ";
        // line 892
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 892, $this->source); })())) > 0)) {
            // line 893
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 893, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 894
                yield "                    ";
                $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 894) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 894) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
                // line 895
                yield "                    ";
                $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 895) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 895) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 895) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
                // line 896
                yield "                    ";
                $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 896) <= 10);
                // line 897
                yield "                    ";
                $context["hasIssue"] = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 897);
                // line 898
                yield "                    ";
                $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 898)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 898), "displayName", [], "any", false, false, false, 898)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 898)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 898)) : ("—"))));
                // line 899
                yield "                    
                    ";
                // line 901
                yield "                    ";
                $context["creditNote"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["supplierCreditNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 901), [], "array", true, true, false, 901) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplierCreditNotes"]) || array_key_exists("supplierCreditNotes", $context) ? $context["supplierCreditNotes"] : (function () { throw new RuntimeError('Variable "supplierCreditNotes" does not exist.', 901, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 901), [], "array", false, false, false, 901)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplierCreditNotes"]) || array_key_exists("supplierCreditNotes", $context) ? $context["supplierCreditNotes"] : (function () { throw new RuntimeError('Variable "supplierCreditNotes" does not exist.', 901, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 901), [], "array", false, false, false, 901)) : (null));
                // line 902
                yield "                    ";
                $context["realIssueStatus"] = (((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 902, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 902, $this->source); })()), "status", [], "any", false, false, false, 902)) : (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatus", [], "any", false, false, false, 902)));
                // line 903
                yield "                    
                    ";
                // line 904
                if ((((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 904, $this->source); })()) == "recovered") || ((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 904, $this->source); })()) == "resolved"))) {
                    // line 905
                    yield "                        ";
                    $context["issueBadgeClass"] = "bg-success";
                    // line 906
                    yield "                        ";
                    $context["issueLabel"] = "Récupéré";
                    // line 907
                    yield "                    ";
                } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 907, $this->source); })()) == "pending")) {
                    // line 908
                    yield "                        ";
                    $context["issueBadgeClass"] = "bg-warning text-dark";
                    // line 909
                    yield "                        ";
                    $context["issueLabel"] = "En attente";
                    // line 910
                    yield "                    ";
                } elseif ((((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 910, $this->source); })()) == "lost") || ((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 910, $this->source); })()) == "rejected"))) {
                    // line 911
                    yield "                        ";
                    $context["issueBadgeClass"] = "bg-danger";
                    // line 912
                    yield "                        ";
                    $context["issueLabel"] = ((((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 912, $this->source); })()) == "lost")) ? ("Perdu") : ("Rejeté"));
                    // line 913
                    yield "                    ";
                } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 913, $this->source); })()) == "closed")) {
                    // line 914
                    yield "                        ";
                    $context["issueBadgeClass"] = "bg-secondary";
                    // line 915
                    yield "                        ";
                    $context["issueLabel"] = "Clôturé";
                    // line 916
                    yield "                    ";
                } else {
                    // line 917
                    yield "                        ";
                    $context["issueBadgeClass"] = "bg-info";
                    // line 918
                    yield "                        ";
                    $context["issueLabel"] = Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 918, $this->source); })()), ["_" => " "]));
                    // line 919
                    yield "                    ";
                }
                // line 920
                yield "                    
                    ";
                // line 921
                $context["purchaseItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 921), [], "array", true, true, false, 921)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 921, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 921), [], "array", false, false, false, 921)) : (null));
                // line 922
                yield "                    
                    <div class=\"batch-card ";
                // line 923
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 923, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-expired";
                } elseif ((($tmp = (isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 923, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-expiring";
                } elseif ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 923, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-low";
                } elseif ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 923, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-issue";
                }
                yield "\">
                        <div class=\"batch-checkbox-wrapper\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
                // line 925
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 925), "html", null, true);
                yield "\" id=\"mobile-check-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 925), "html", null, true);
                yield "\">
                            <label for=\"mobile-check-";
                // line 926
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 926), "html", null, true);
                yield "\" class=\"batch-number\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 926), "html", null, true);
                yield "</label>
                            ";
                // line 927
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 927)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 928
                    yield "                                <span class=\"badge bg-success ms-auto\">Actif</span>
                            ";
                } else {
                    // line 930
                    yield "                                <span class=\"badge bg-secondary ms-auto\">Inactif</span>
                            ";
                }
                // line 932
                yield "                        </div>
                        <div class=\"batch-row\">
                            <div class=\"batch-item\">
                                <span class=\"label\">Produit</span>
                                <span class=\"value\">
                                    <a href=\"";
                // line 937
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 937), "id", [], "any", false, false, false, 937)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 937), "name", [], "any", false, false, false, 937)), "truncate", [25], "method", false, false, false, 937), "html", null, true);
                yield "</a>
                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Emplacement</span>
                                <span class=\"value\">
                                    ";
                // line 943
                if (((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 943, $this->source); })()) != "—")) {
                    // line 944
                    yield "                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 944, $this->source); })())), "truncate", [12], "method", false, false, false, 944), "html", null, true);
                    yield "</span>
                                    ";
                } else {
                    // line 946
                    yield "                                        —
                                    ";
                }
                // line 948
                yield "                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Quantité</span>
                                <span class=\"value\">
                                    <span class=\"fw-bold\">";
                // line 953
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 953), "html", null, true);
                yield "</span>
                                    <small class=\"text-muted\">/ ";
                // line 954
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 954), "html", null, true);
                yield "</small>
                                    <div class=\"progress mt-1\" style=\"height:4px;max-width:80px;\">
                                        <div class=\"progress-bar 
                                            ";
                // line 957
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 957) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 957)) * 100) <= 10)) {
                    yield "bg-danger
                                            ";
                } elseif ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 958
$context["batch"], "currentQuantity", [], "any", false, false, false, 958) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 958)) * 100) <= 30)) {
                    yield "bg-warning
                                            ";
                } else {
                    // line 959
                    yield "bg-success";
                }
                yield "\" 
                                            style=\"width:";
                // line 960
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 960) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 960)) * 100)), "html", null, true);
                yield "%\">
                                        </div>
                                    </div>
                                    ";
                // line 963
                if ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 963, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 964
                    yield "                                        <span class=\"badge bg-warning text-dark mt-1 issue-badge d-block\">Stock faible</span>
                                    ";
                }
                // line 966
                yield "                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Prix unitaire</span>
                                <span class=\"value\">";
                // line 970
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 970), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 970)), "html", null, true);
                yield "</span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Expiration</span>
                                <span class=\"value\">
                                    ";
                // line 975
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 975)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 976
                    yield "                                        <span class=\"fw-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 976), "d/m/Y"), "html", null, true);
                    yield "</span>
                                        ";
                    // line 977
                    if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 977, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 978
                        yield "                                            <span class=\"badge bg-danger mt-1 issue-badge d-block\">Expiré</span>
                                        ";
                    } elseif ((($tmp =                     // line 979
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 979, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 980
                        yield "                                            <span class=\"badge bg-warning text-dark mt-1 issue-badge d-block\">J-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 980), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 980), "days", [], "any", false, false, false, 980), "html", null, true);
                        yield "</span>
                                        ";
                    }
                    // line 982
                    yield "                                    ";
                } else {
                    // line 983
                    yield "                                        —
                                    ";
                }
                // line 985
                yield "                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Avoir</span>
                                <span class=\"value\">
                                    ";
                // line 991
                yield "                                    ";
                if (((isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 991, $this->source); })()) && (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 991, $this->source); })()))) {
                    // line 992
                    yield "                                        <span class=\"badge ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["issueBadgeClass"]) || array_key_exists("issueBadgeClass", $context) ? $context["issueBadgeClass"] : (function () { throw new RuntimeError('Variable "issueBadgeClass" does not exist.', 992, $this->source); })()), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["issueLabel"]) || array_key_exists("issueLabel", $context) ? $context["issueLabel"] : (function () { throw new RuntimeError('Variable "issueLabel" does not exist.', 992, $this->source); })()), "html", null, true);
                    yield "</span>
                                        ";
                    // line 993
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issuePriority", [], "any", false, false, false, 993) == "critical")) {
                        // line 994
                        yield "                                            <span class=\"badge bg-danger mt-1 issue-badge d-block\">Critique</span>
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 995
$context["batch"], "issuePriority", [], "any", false, false, false, 995) == "high")) {
                        // line 996
                        yield "                                            <span class=\"badge bg-warning text-dark mt-1 issue-badge d-block\">Haute</span>
                                        ";
                    }
                    // line 998
                    yield "                                        <small class=\"text-muted d-block\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 998, $this->source); })()), "declaredAmount", [], "any", false, false, false, 998), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 998)), "html", null, true);
                    yield "</small>
                                    ";
                } elseif ((($tmp =                 // line 999
(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 999, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1000
                    yield "                                        <span class=\"badge ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusBadgeClass", [], "any", false, false, false, 1000), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusLabel", [], "any", false, false, false, 1000), "html", null, true);
                    yield "</span>
                                        <small class=\"text-muted d-block\">";
                    // line 1001
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 1001), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 1001)), "html", null, true);
                    yield "</small>
                                    ";
                } else {
                    // line 1003
                    yield "                                        —
                                    ";
                }
                // line 1005
                yield "                                </span>
                            </div>
                            ";
                // line 1007
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 1007)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1008
                    yield "                            <div class=\"batch-item\" style=\"grid-column:1/-1;\">
                                <span class=\"label\">Réf. achat</span>
                                <span class=\"value small text-muted\">
                                    <i class=\"fas fa-receipt me-1\"></i> 
                                    ";
                    // line 1012
                    if ((array_key_exists("purchaseMap", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 1012), [], "array", true, true, false, 1012))) {
                        // line 1013
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseMap"]) || array_key_exists("purchaseMap", $context) ? $context["purchaseMap"] : (function () { throw new RuntimeError('Variable "purchaseMap" does not exist.', 1013, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 1013), [], "array", false, false, false, 1013), "html", null, true);
                        yield "
                                    ";
                    } else {
                        // line 1015
                        yield "                                        ACHAT #";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 1015), "html", null, true);
                        yield "
                                    ";
                    }
                    // line 1017
                    yield "                                    ";
                    if (((isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 1017, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 1017, $this->source); })()), "purchase", [], "any", false, false, false, 1017))) {
                        // line 1018
                        yield "                                        — ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 1018, $this->source); })()), "purchase", [], "any", false, false, false, 1018), "createdAt", [], "any", false, false, false, 1018), "d/m/Y"), "html", null, true);
                        yield "
                                        ";
                        // line 1019
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 1019, $this->source); })()), "purchase", [], "any", false, false, false, 1019), "supplier", [], "any", false, false, false, 1019)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1020
                            yield "                                            — ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 1020), "supplier", [], "any", false, true, false, 1020), "name", [], "any", true, true, false, 1020)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 1020, $this->source); })()), "purchase", [], "any", false, false, false, 1020), "supplier", [], "any", false, false, false, 1020), "name", [], "any", false, false, false, 1020), "")) : ("")), "html", null, true);
                            yield "
                                        ";
                        }
                        // line 1022
                        yield "                                    ";
                    }
                    // line 1023
                    yield "                                </span>
                            </div>
                            ";
                }
                // line 1026
                yield "                        </div>
                        <div class=\"batch-actions\">
                            <a href=\"";
                // line 1028
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1028)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\">
                                <i class=\"fas fa-print\"></i> Imprimer
                            </a>
                            <a href=\"";
                // line 1031
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1031)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
                // line 1034
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1034)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                <i class=\"fas fa-map-marker-alt\"></i> Modifier
                            </a>
                            ";
                // line 1037
                if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["canReportIssue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1037), [], "array", true, true, false, 1037) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 1037, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1037), [], "array", false, false, false, 1037)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 1037, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1037), [], "array", false, false, false, 1037)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1038
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1038)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-danger\" title=\"Signaler\">
                                    <i class=\"fas fa-exclamation-triangle\"></i> Signaler
                                </a>
                            ";
                } elseif ((($tmp =                 // line 1041
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 1041, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1042
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 1042, $this->source); })()), "id", [], "any", false, false, false, 1042)]), "html", null, true);
                    yield "\" 
                                   class=\"btn btn-sm 
                                       ";
                    // line 1044
                    if (CoreExtension::inFilter((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 1044, $this->source); })()), ["recovered", "resolved"])) {
                        yield "btn-success
                                       ";
                    } elseif ((                    // line 1045
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 1045, $this->source); })()) == "pending")) {
                        yield "btn-warning
                                       ";
                    } elseif (CoreExtension::inFilter(                    // line 1046
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 1046, $this->source); })()), ["rejected", "lost"])) {
                        yield "btn-danger
                                       ";
                    } else {
                        // line 1047
                        yield "btn-info";
                    }
                    yield "\">
                                    <i class=\"fas fa-file-invoice-dollar\"></i> Avoir (";
                    // line 1048
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["issueLabel"]) || array_key_exists("issueLabel", $context) ? $context["issueLabel"] : (function () { throw new RuntimeError('Variable "issueLabel" does not exist.', 1048, $this->source); })()), "html", null, true);
                    yield ")
                                </a>
                            ";
                } else {
                    // line 1051
                    yield "                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" disabled>
                                    <i class=\"fas fa-exclamation-triangle text-muted\"></i>
                                </button>
                            ";
                }
                // line 1055
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-info toggle-batch-btn\" 
                                    data-batch-id=\"";
                // line 1056
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1056), "html", null, true);
                yield "\" 
                                    data-is-active=\"";
                // line 1057
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 1057)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
                yield "\" 
                                    data-batch-number=\"";
                // line 1058
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 1058), "html", null, true);
                yield "\" 
                                    data-token=\"";
                // line 1059
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1059))), "html", null, true);
                yield "\">
                                <i class=\"fas ";
                // line 1060
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 1060)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield "\"></i>
                            </button>
                            ";
                // line 1062
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 1062)) == 0)) &&  !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 1062, $this->source); })()))) {
                    // line 1063
                    yield "                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-batch-btn\" 
                                        data-batch-id=\"";
                    // line 1064
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1064), "html", null, true);
                    yield "\" 
                                        data-batch-number=\"";
                    // line 1065
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 1065), "html", null, true);
                    yield "\" 
                                        data-token=\"";
                    // line 1066
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1066))), "html", null, true);
                    yield "\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            ";
                }
                // line 1070
                yield "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1073
            yield "            ";
        } else {
            // line 1074
            yield "                <div class=\"text-center py-5\">
                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                    <p class=\"text-muted mb-0\">Aucun lot trouvé</p>
                    <p class=\"text-muted small\">Modifiez vos filtres</p>
                </div>
            ";
        }
        // line 1080
        yield "        </div>

        ";
        // line 1082
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1082, $this->source); })()) > 1)) {
            // line 1083
            yield "        <div class=\"card-footer bg-white p-2 p-md-3\">
            <nav>
                <ul class=\"pagination justify-content-center mb-0 flex-wrap\">
                    ";
            // line 1086
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1086, $this->source); })()) > 1)) {
                // line 1087
                yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1087, $this->source); })()), "request", [], "any", false, false, false, 1087), "query", [], "any", false, false, false, 1087), "all", [], "any", false, false, false, 1087), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1087, $this->source); })()) - 1)])), "html", null, true);
                yield "\"><i class=\"fas fa-chevron-left\"></i> <span class=\"d-none d-sm-inline\">Précédent</span></a></li>
                    ";
            }
            // line 1089
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1089, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 1090
                yield "                        <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1090, $this->source); })()))) ? ("active") : (""));
                yield " d-none d-sm-block\">
                            <a class=\"page-link\" href=\"";
                // line 1091
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1091, $this->source); })()), "request", [], "any", false, false, false, 1091), "query", [], "any", false, false, false, 1091), "all", [], "any", false, false, false, 1091), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1094
            yield "                    ";
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1094, $this->source); })()) > 5)) {
                // line 1095
                yield "                        <li class=\"page-item d-block d-sm-none\">
                            <span class=\"page-link\">";
                // line 1096
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1096, $this->source); })()), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1096, $this->source); })()), "html", null, true);
                yield "</span>
                        </li>
                    ";
            }
            // line 1099
            yield "                    ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1099, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1099, $this->source); })()))) {
                // line 1100
                yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1100, $this->source); })()), "request", [], "any", false, false, false, 1100), "query", [], "any", false, false, false, 1100), "all", [], "any", false, false, false, 1100), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1100, $this->source); })()) + 1)])), "html", null, true);
                yield "\"><span class=\"d-none d-sm-inline\">Suivant</span> <i class=\"fas fa-chevron-right\"></i></a></li>
                    ";
            }
            // line 1102
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 1106
        yield "    </div>
</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--primary-color); color: white;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> lot(s) sélectionné(s)
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\"><i class=\"fas fa-print me-2\"></i> Imprimer sélection</button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\"><i class=\"fas fa-print me-2\"></i> Imprimer tous</button>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"importExcelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--success-color); color: white;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-file-excel me-2\"></i> Importer</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info small\"><i class=\"fas fa-info-circle me-2\"></i> Utilisez l'export pour obtenir le template.</div>
                <form method=\"post\" action=\"";
        // line 1142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_import_excel");
        yield "\" enctype=\"multipart/form-data\">
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold small\">Fichier Excel (.xlsx)</label>
                        <input type=\"file\" name=\"excel_file\" class=\"form-control form-control-sm\" accept=\".xlsx,.xls\" required>
                    </div>
                    <div class=\"form-check mb-3\">
                        <input type=\"checkbox\" name=\"update_only_location\" class=\"form-check-input\" id=\"updateOnlyLocation\" checked>
                        <label class=\"form-check-label small\" for=\"updateOnlyLocation\">Mettre à jour uniquement les emplacements</label>
                    </div>
                    <div class=\"d-grid\">
                        <button type=\"submit\" class=\"btn\" style=\"background: var(--success-color); color: white; border-color: var(--success-color);\">
                            <i class=\"fas fa-upload me-2\"></i> Importer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\">
                    <button type=\"submit\" class=\"btn btn-sm\" id=\"toggleBatchBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--danger-color); color: white;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\">
                    <button type=\"submit\" class=\"btn btn-sm\" style=\"background: var(--danger-color); color: white; border-color: var(--danger-color);\">Supprimer</button>
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

    // line 1206
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

        // line 1207
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sélecteurs Select2
    if (typeof \$.fn.select2 !== 'undefined') {
        \$('#product-select, #location-select').select2({ 
            theme: 'bootstrap-5', 
            language: 'fr', 
            allowClear: true, 
            width: '100%',
            dropdownParent: \$('#product-select, #location-select').parent()
        });
    }

    // Gestion des checkboxes
    const selectAll = document.getElementById('select-all-checkbox');
    const checkboxes = document.querySelectorAll('.batch-checkbox');
    const countSpan = document.getElementById('selectedCount');

    function updateCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (countSpan) countSpan.textContent = selected;
        if (selectAll) selectAll.checked = checkboxes.length === selected && checkboxes.length > 0;
    }

    if (selectAll) {
        selectAll.addEventListener('change', function() {
            checkboxes.forEach(cb => cb.checked = selectAll.checked);
            updateCount();
        });
    }

    document.getElementById('selectAllBtn')?.addEventListener('click', function(e) {
        e.preventDefault();
        checkboxes.forEach(cb => cb.checked = true);
        if (selectAll) selectAll.checked = true;
        updateCount();
    });

    document.getElementById('deselectAllBtn')?.addEventListener('click', function(e) {
        e.preventDefault();
        checkboxes.forEach(cb => cb.checked = false);
        if (selectAll) selectAll.checked = false;
        updateCount();
    });

    checkboxes.forEach(cb => cb.addEventListener('change', updateCount));
    updateCount();

    document.getElementById('print-selected')?.addEventListener('click', function() {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length) {
            window.open('/admin/stock-batch/print-multiple?ids=' + selected.join(','), '_blank');
        } else {
            alert('Sélectionnez au moins un lot.');
        }
    });

    document.getElementById('print-all')?.addEventListener('click', function() {
        const all = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (all.length) {
            window.open('/admin/stock-batch/print-multiple?ids=' + all.join(','), '_blank');
        } else {
            alert('Aucun lot à imprimer.');
        }
    });

    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.batchId;
            const isActive = this.dataset.isActive === '1';
            const token = this.dataset.token;
            const num = this.dataset.batchNumber;
            
            document.getElementById('toggleBatchMessage').innerText = 
                `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${num}\" ?`;
            document.getElementById('toggleBatchForm').action = `/admin/stock-batch/\${id}/toggle`;
            document.getElementById('toggleBatchToken').value = token;
            
            const btnSubmit = document.getElementById('toggleBatchBtn');
            btnSubmit.className = isActive ? 'btn btn-danger btn-sm' : 'btn btn-success btn-sm';
            btnSubmit.textContent = isActive ? 'Désactiver' : 'Activer';
            
            toggleModal.show();
        });
    });

    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            document.getElementById('deleteBatchMessage').innerHTML = 
                `<div class=\"alert alert-warning small\">⚠️ Cette action est irréversible.</div>
                 <p>Supprimer le lot <strong>\${this.dataset.batchNumber}</strong> ?</p>
                 <p class=\"text-danger mb-0 small\">Cette suppression n'est possible que si aucun mouvement de stock n'est associé.</p>`;
            document.getElementById('deleteBatchForm').action = '/admin/stock-batch/' + this.dataset.batchId + '/delete';
            document.getElementById('deleteBatchToken').value = this.dataset.token;
            deleteModal.show();
        });
    });
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
        return "admin/stock_batch/all.html.twig";
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
        return array (  2146 => 1207,  2133 => 1206,  2059 => 1142,  2021 => 1106,  2015 => 1102,  2009 => 1100,  2006 => 1099,  1998 => 1096,  1995 => 1095,  1992 => 1094,  1981 => 1091,  1976 => 1090,  1971 => 1089,  1965 => 1087,  1963 => 1086,  1958 => 1083,  1956 => 1082,  1952 => 1080,  1944 => 1074,  1941 => 1073,  1933 => 1070,  1926 => 1066,  1922 => 1065,  1918 => 1064,  1915 => 1063,  1913 => 1062,  1908 => 1060,  1904 => 1059,  1900 => 1058,  1896 => 1057,  1892 => 1056,  1889 => 1055,  1883 => 1051,  1877 => 1048,  1872 => 1047,  1867 => 1046,  1863 => 1045,  1859 => 1044,  1853 => 1042,  1851 => 1041,  1844 => 1038,  1842 => 1037,  1836 => 1034,  1830 => 1031,  1824 => 1028,  1820 => 1026,  1815 => 1023,  1812 => 1022,  1806 => 1020,  1804 => 1019,  1799 => 1018,  1796 => 1017,  1790 => 1015,  1784 => 1013,  1782 => 1012,  1776 => 1008,  1774 => 1007,  1770 => 1005,  1766 => 1003,  1761 => 1001,  1754 => 1000,  1752 => 999,  1747 => 998,  1743 => 996,  1741 => 995,  1738 => 994,  1736 => 993,  1729 => 992,  1726 => 991,  1719 => 985,  1715 => 983,  1712 => 982,  1706 => 980,  1704 => 979,  1701 => 978,  1699 => 977,  1694 => 976,  1692 => 975,  1684 => 970,  1678 => 966,  1674 => 964,  1672 => 963,  1666 => 960,  1661 => 959,  1656 => 958,  1652 => 957,  1646 => 954,  1642 => 953,  1635 => 948,  1631 => 946,  1625 => 944,  1623 => 943,  1612 => 937,  1605 => 932,  1601 => 930,  1597 => 928,  1595 => 927,  1589 => 926,  1583 => 925,  1570 => 923,  1567 => 922,  1565 => 921,  1562 => 920,  1559 => 919,  1556 => 918,  1553 => 917,  1550 => 916,  1547 => 915,  1544 => 914,  1541 => 913,  1538 => 912,  1535 => 911,  1532 => 910,  1529 => 909,  1526 => 908,  1523 => 907,  1520 => 906,  1517 => 905,  1515 => 904,  1512 => 903,  1509 => 902,  1506 => 901,  1503 => 899,  1500 => 898,  1497 => 897,  1494 => 896,  1491 => 895,  1488 => 894,  1483 => 893,  1481 => 892,  1472 => 885,  1459 => 877,  1457 => 876,  1450 => 873,  1443 => 869,  1439 => 868,  1435 => 867,  1431 => 865,  1428 => 864,  1422 => 860,  1418 => 859,  1414 => 858,  1410 => 857,  1406 => 856,  1402 => 854,  1399 => 852,  1390 => 845,  1384 => 842,  1379 => 840,  1374 => 839,  1369 => 838,  1365 => 837,  1361 => 836,  1355 => 834,  1353 => 833,  1344 => 828,  1341 => 827,  1331 => 820,  1321 => 813,  1310 => 805,  1302 => 799,  1298 => 798,  1294 => 796,  1290 => 794,  1285 => 792,  1280 => 791,  1278 => 790,  1276 => 789,  1271 => 788,  1267 => 786,  1265 => 785,  1262 => 784,  1260 => 783,  1253 => 781,  1248 => 780,  1245 => 779,  1241 => 776,  1237 => 774,  1233 => 772,  1227 => 770,  1225 => 769,  1222 => 768,  1220 => 767,  1216 => 766,  1213 => 765,  1211 => 764,  1206 => 762,  1202 => 760,  1198 => 758,  1196 => 757,  1190 => 754,  1185 => 753,  1180 => 752,  1176 => 751,  1170 => 748,  1166 => 747,  1161 => 744,  1157 => 742,  1151 => 740,  1149 => 739,  1143 => 736,  1137 => 735,  1132 => 732,  1129 => 731,  1126 => 730,  1120 => 727,  1116 => 725,  1114 => 724,  1109 => 722,  1105 => 720,  1103 => 719,  1100 => 718,  1094 => 716,  1088 => 714,  1086 => 713,  1082 => 711,  1080 => 710,  1076 => 709,  1070 => 706,  1058 => 705,  1055 => 704,  1053 => 703,  1050 => 702,  1047 => 701,  1044 => 700,  1041 => 699,  1038 => 698,  1035 => 697,  1032 => 696,  1029 => 695,  1026 => 694,  1023 => 693,  1020 => 692,  1017 => 691,  1014 => 690,  1011 => 689,  1008 => 688,  1005 => 687,  1002 => 686,  999 => 685,  996 => 684,  993 => 683,  990 => 682,  987 => 681,  984 => 680,  981 => 679,  978 => 678,  975 => 677,  972 => 676,  969 => 675,  966 => 674,  963 => 673,  960 => 672,  957 => 671,  954 => 670,  951 => 669,  948 => 668,  945 => 667,  942 => 666,  939 => 665,  936 => 663,  933 => 662,  931 => 661,  928 => 660,  925 => 658,  922 => 657,  919 => 656,  916 => 655,  913 => 654,  910 => 653,  905 => 652,  877 => 627,  857 => 610,  853 => 609,  844 => 603,  840 => 602,  836 => 601,  832 => 600,  828 => 599,  824 => 598,  815 => 592,  811 => 591,  785 => 568,  781 => 567,  771 => 560,  761 => 553,  757 => 552,  753 => 551,  743 => 544,  739 => 543,  727 => 533,  714 => 531,  710 => 530,  702 => 524,  689 => 522,  685 => 521,  676 => 515,  660 => 502,  641 => 486,  623 => 471,  619 => 470,  601 => 455,  579 => 436,  561 => 421,  543 => 406,  525 => 391,  505 => 374,  500 => 372,  496 => 371,  485 => 363,  462 => 343,  453 => 336,  440 => 335,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/all.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion globale des lots - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    /* ✅ Variables CSS */
    :root {
        --card-radius: 1rem;
        --transition-speed: 0.2s;
    }
    
    /* Cartes statistiques */
    .stat-card {
        transition: transform var(--transition-speed), box-shadow var(--transition-speed);
        overflow: hidden;
        border-radius: var(--card-radius);
        background: white !important;
        border: 1px solid #e9ecef;
        height: 100%;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: var(--card-radius);
        flex-shrink: 0;
    }
    .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.2;
    }
    .stat-label {
        font-size: 0.7rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
    }
    
    .issue-badge {
        font-size: 0.65rem;
        padding: 0.15rem 0.4rem;
        margin-top: 0.15rem;
        display: inline-block;
    }
    
    .progress {
        border-radius: 10px;
        overflow: hidden;
        height: 6px;
    }
    .card {
        transition: transform var(--transition-speed), box-shadow var(--transition-speed);
        border-radius: var(--card-radius);
    }
    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
    }
    .badge {
        font-weight: 500;
    }
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
    }
    .table td {
        vertical-align: middle;
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.5rem;
        border-color: #dee2e6;
        min-height: 38px;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        line-height: 36px;
        padding-left: 12px;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
        height: 36px;
    }
    
    /* ✅ RESPONSIVE - TABLETTE ET MOBILE */
    @media (max-width: 992px) {
        .stat-value {
            font-size: 1.5rem;
        }
        .stat-icon {
            width: 42px;
            height: 42px;
        }
        .stat-icon i {
            font-size: 1.3rem;
        }
    }
    
    @media (max-width: 768px) {
        .stat-value {
            font-size: 1.2rem;
        }
        .stat-icon {
            width: 36px;
            height: 36px;
        }
        .stat-icon i {
            font-size: 1rem;
        }
        .stat-label {
            font-size: 0.6rem;
        }
        
        /* Boutons en colonne sur mobile */
        .btn-group {
            flex-direction: column;
            width: 100%;
        }
        .btn-group .btn {
            margin: 2px 0;
            border-radius: 0.375rem !important;
        }
        .btn-group .btn:not(:last-child) {
            border-radius: 0.375rem !important;
        }
        
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }
        
        /* Header mobile */
        .d-flex.justify-content-between.align-items-center {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 0.75rem !important;
        }
        
        /* Cartes stats - 2 par ligne sur mobile */
        .col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        
        /* Filtres en colonne */
        .row.g-3 > [class*=\"col-\"] {
            margin-bottom: 0.5rem;
        }
        
        /* Tableau - version carte mobile */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        /* Version carte pour mobile */
        .table-card-view .batch-card {
            background: white;
            border-radius: 0.75rem;
            border: 1px solid #e9ecef;
            padding: 0.75rem;
            margin-bottom: 0.75rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .table-card-view .batch-card .batch-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.5rem 1rem;
        }
        .table-card-view .batch-card .batch-item {
            display: flex;
            flex-direction: column;
        }
        .table-card-view .batch-card .batch-item .label {
            font-size: 0.6rem;
            text-transform: uppercase;
            color: #6c757d;
            font-weight: 600;
            letter-spacing: 0.3px;
        }
        .table-card-view .batch-card .batch-item .value {
            font-size: 0.85rem;
            font-weight: 500;
            word-break: break-word;
        }
        .table-card-view .batch-card .batch-actions {
            grid-column: 1 / -1;
            display: flex;
            flex-wrap: wrap;
            gap: 0.25rem;
            margin-top: 0.5rem;
            padding-top: 0.5rem;
            border-top: 1px solid #e9ecef;
        }
        .table-card-view .batch-card .batch-actions .btn {
            font-size: 0.7rem;
            padding: 0.2rem 0.5rem;
        }
        .table-card-view .batch-card .batch-checkbox-wrapper {
            grid-column: 1 / -1;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #e9ecef;
        }
        .table-card-view .batch-card .batch-checkbox-wrapper .form-check-input {
            width: 1.2rem;
            height: 1.2rem;
        }
        .table-card-view .batch-card .batch-checkbox-wrapper .batch-number {
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        /* Status colors sur mobile */
        .batch-card.status-expired {
            border-left: 4px solid #dc3545;
        }
        .batch-card.status-expiring {
            border-left: 4px solid #ffc107;
        }
        .batch-card.status-low {
            border-left: 4px solid #17a2b8;
        }
        .batch-card.status-issue {
            border-left: 4px solid #6c757d;
        }
    }
    
    @media (max-width: 480px) {
        .stat-value {
            font-size: 1rem;
        }
        .stat-icon {
            width: 30px;
            height: 30px;
        }
        .stat-icon i {
            font-size: 0.85rem;
        }
        .stat-label {
            font-size: 0.55rem;
        }
        
        .col-sm-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        
        .table-card-view .batch-card .batch-row {
            grid-template-columns: 1fr;
            gap: 0.3rem;
        }
        
        .table-card-view .batch-card .batch-actions .btn {
            font-size: 0.65rem;
            padding: 0.15rem 0.4rem;
        }
        
        h1.h3 {
            font-size: 1.1rem !important;
        }
        
        .breadcrumb {
            font-size: 0.75rem;
        }
    }
    
    /* Couleurs dynamiques */
    .btn-primary {
        background: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
    }
    .btn-primary:hover {
        background: var(--primary-dark) !important;
        border-color: var(--primary-dark) !important;
    }
    .text-primary {
        color: var(--primary-color) !important;
    }
    .bg-primary {
        background: var(--primary-color) !important;
    }
    .bg-primary.bg-opacity-10 {
        background: rgba(var(--primary-rgb), 0.1) !important;
    }
    .bg-success.bg-opacity-10 {
        background: rgba(46, 204, 113, 0.1) !important;
    }
    .bg-warning.bg-opacity-10 {
        background: rgba(243, 156, 18, 0.1) !important;
    }
    .bg-info.bg-opacity-10 {
        background: rgba(52, 152, 219, 0.1) !important;
    }
    .bg-danger.bg-opacity-10 {
        background: rgba(231, 76, 60, 0.1) !important;
    }
    .bg-secondary.bg-opacity-10 {
        background: rgba(108, 117, 125, 0.1) !important;
    }
    
    /* Désactiver le hover sur mobile pour éviter les problèmes de toucher */
    @media (max-width: 768px) {
        .table-hover tbody tr:hover {
            background-color: inherit !important;
            cursor: default;
        }
        .card:hover {
            transform: none !important;
        }
        .stat-card:hover {
            transform: none !important;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Tableau de bord</span>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-cubes me-1\"></i> Gestion des lots
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-cubes me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Gestion globale des lots</span>
                <span class=\"d-inline d-sm-none\">Lots</span>
            </h1>
            <p class=\"text-muted mt-2 d-none d-md-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Visualisez et gérez tous les lots de stock de votre entreprise
            </p>
        </div>
        <div class=\"d-flex flex-wrap gap-2 w-100 w-md-auto\">
            <a href=\"{{ path('app_admin_location_index') }}\" class=\"btn btn-outline-info btn-sm flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-map-marker-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Emplacements</span>
            </a>
            <div class=\"btn-group flex-grow-1 flex-md-grow-0\">
                <button type=\"button\" class=\"btn btn-outline-success btn-sm dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> <span class=\"d-none d-sm-inline\">Exporter</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_export_excel', app.request.query.all) }}\"><i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_export_pdf', app.request.query.all) }}\"><i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_export_excel_template') }}\"><i class=\"fas fa-download me-2\"></i> Télécharger template</a></li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-2 g-md-3 mb-4\">
        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Total lots</div>
                            <div class=\"stat-value text-primary\">{{ stats.total_batches|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon bg-primary bg-opacity-10\">
                            <i class=\"fas fa-boxes text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Lots actifs</div>
                            <div class=\"stat-value text-success\">{{ stats.active_batches|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-play-circle text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Expire bientôt</div>
                            <div class=\"stat-value text-warning\">{{ stats.expiring_soon_batches|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-hourglass-half text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Unités en stock</div>
                            <div class=\"stat-value text-info\">{{ stats.total_quantity|default(0)|number_format(0, ',', ' ') }}</div>
                        </div>
                        <div class=\"stat-icon bg-info bg-opacity-10\">
                            <i class=\"fas fa-chart-line text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ligne 2 : 3 cartes -->
    <div class=\"row g-2 g-md-3 mb-4\">
        <div class=\"col-6 col-sm-6 col-md-4\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Lots expirés</div>
                            <div class=\"stat-value text-danger\">{{ stats.expired_batches|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon bg-danger bg-opacity-10\">
                            <i class=\"fas fa-calendar-times text-danger\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-sm-6 col-md-4\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Avoirs ouverts</div>
                            <div class=\"stat-value text-secondary\">{{ stats.open_issues|default(0) }}</div>
                            <div class=\"stat-sub text-muted mt-1 d-none d-sm-block\">{{ stats.total_issue_amount|default(0)|price_with_currency(hmaService) }}</div>
                        </div>
                        <div class=\"stat-icon bg-secondary bg-opacity-10\">
                            <i class=\"fas fa-file-invoice-dollar text-secondary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-sm-6 col-md-4\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body p-2 p-sm-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 me-2\">
                            <div class=\"stat-label\">Stock faible</div>
                            <div class=\"stat-value text-warning\">{{ stats.low_stock_batches|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-exclamation-triangle text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold small\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_admin_stock_batch_all') }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white p-2 p-md-3\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-2 g-md-3\">
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control form-control-sm\" placeholder=\"N° lot ou produit...\" value=\"{{ filters.search|default('') }}\">
                    </div>
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Produit</label>
                        <select name=\"product_id\" id=\"product-select\" class=\"form-select form-select-sm select2-product\">
                            <option value=\"\">-- Tous --</option>
                            {% for product in products %}
                                <option value=\"{{ product.id }}\" {{ filters.product_id|default('') == product.id ? 'selected' }}>{{ product.name|u.truncate(30) }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select form-select-sm select2-location\">
                            <option value=\"\">-- Tous --</option>
                            {% for loc in all_locations|default([]) %}
                                <option value=\"{{ loc }}\" {{ filters.location|default('') == loc ? 'selected' }}>{{ loc|u.truncate(25) }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>

                <!-- Deuxième ligne -->
                <div class=\"row g-2 g-md-3 mt-1 mt-md-2\">
                    <div class=\"col-6 col-sm-4 col-md-2\">
                        <label class=\"form-label fw-bold small mb-1\">Statut lot</label>
                        <select name=\"status\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ filters.status|default('') == 'active' ? 'selected' }}>Actifs</option>
                            <option value=\"inactive\" {{ filters.status|default('') == 'inactive' ? 'selected' }}>Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-4 col-md-3\">
                        <label class=\"form-label fw-bold small mb-1\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" {{ filters.expiry_status|default('') == 'expired' ? 'selected' }}>Expirés</option>
                            <option value=\"expiring_soon\" {{ filters.expiry_status|default('') == 'expiring_soon' ? 'selected' }}>Expire bientôt</option>
                            <option value=\"not_expiring\" {{ filters.expiry_status|default('') == 'not_expiring' ? 'selected' }}>Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-4 col-md-2\">
                        <label class=\"form-label fw-bold small mb-1\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" {{ filters.low_stock|default('') == 'yes' ? 'selected' }}>≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-4 col-md-2\">
                        <label class=\"form-label fw-bold small mb-1\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" {{ filters.has_issue|default('') == 'yes' ? 'selected' }}>Avec</option>
                            <option value=\"no\" {{ filters.has_issue|default('') == 'no' ? 'selected' }}>Sans</option>
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-4 col-md-3\">
                        <label class=\"form-label fw-bold small mb-1\">Statut avoir</label>
                        <select name=\"issue_status\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"pending\">En attente</option>
                            <option value=\"acknowledged\">Accusé réception</option>
                            <option value=\"under_review\">En analyse</option>
                            <option value=\"partially_recovered\">Partiellement récupéré</option>
                            <option value=\"recovered\">Récupéré</option>
                            <option value=\"lost\">Perdu</option>
                            <option value=\"closed\">Clôturé</option>
                        </select>
                    </div>
                </div>

                <!-- Troisième ligne -->
                <div class=\"row g-2 g-md-3 mt-1 mt-md-2\">
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Dates expiration</label>
                        <div class=\"d-flex gap-2\">
                            <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" placeholder=\"Du\" value=\"{{ filters.date_from|default('') }}\">
                            <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" placeholder=\"Au\" value=\"{{ filters.date_to|default('') }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-3 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Trier par</label>
                        <select name=\"sort\" class=\"form-select form-select-sm\">
                            <option value=\"batch_number\" {{ filters.sort|default('expiry_date') == 'batch_number' ? 'selected' }}>N° lot</option>
                            <option value=\"p.name\" {{ filters.sort|default('expiry_date') == 'p.name' ? 'selected' }}>Produit</option>
                            <option value=\"expiry_date\" {{ filters.sort|default('expiry_date') == 'expiry_date' ? 'selected' }}>Expiration</option>
                            <option value=\"current_quantity\" {{ filters.sort|default('expiry_date') == 'current_quantity' ? 'selected' }}>Quantité</option>
                            <option value=\"location\" {{ filters.sort|default('expiry_date') == 'location' ? 'selected' }}>Emplacement</option>
                            <option value=\"issue_status\" {{ filters.sort|default('expiry_date') == 'issue_status' ? 'selected' }}>Statut avoir</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-3 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Ordre</label>
                        <select name=\"direction\" class=\"form-select form-select-sm\">
                            <option value=\"asc\" {{ filters.direction|default('asc') == 'asc' ? 'selected' }}>Croissant ↑</option>
                            <option value=\"desc\" {{ filters.direction|default('asc') == 'desc' ? 'selected' }}>Décroissant ↓</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold small\">
                <i class=\"fas fa-list me-2\"></i> 
                <span class=\"d-none d-sm-inline\">Liste des lots</span>
                <span class=\"d-inline d-sm-none\">Lots</span>
            </h5>
            <div class=\"d-flex gap-2 align-items-center flex-wrap\">
                <span class=\"badge bg-secondary\">{{ batches|length }}</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\"><i class=\"fas fa-check-double me-1\"></i> <span class=\"d-none d-sm-inline\">Tout</span></button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\"><i class=\"fas fa-times me-1\"></i> <span class=\"d-none d-sm-inline\">Désélec.</span></button>
            </div>
        </div>
        
        <!-- Affichage tableau sur grand écran -->
        <div class=\"card-body p-0 d-none d-md-block\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width:40px\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
                            <th>N° lot</th>
                            <th>Produit</th>
                            <th>Emplacement</th>
                            <th>Quantité</th>
                            <th>Prix unit.</th>
                            <th>Expiration</th>
                            <th>Avoir</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for batch in batches %}
                            {% set isExpired = batch.expiryDate and batch.expiryDate < date() %}
                            {% set isExpiringSoon = batch.expiryDate and batch.expiryDate >= date() and batch.expiryDate < date('+30 days') %}
                            {% set isLowStock = batch.currentQuantity <= 10 %}
                            {% set hasIssue = batch.hasIssue %}
                            {% set locationDisplay = batch.locationEntity ? batch.locationEntity.displayName : (batch.location ?: '—') %}
                            
                            {# ✅ Récupération du VRAI avoir (sans filtre de statut) #}
                            {% set creditNote = supplierCreditNotes[batch.id] ?? null %}
                            {# ✅ Utilisation du statut ACTUEL de l'avoir, pas du batch #}
                            {% set realIssueStatus = creditNote ? creditNote.status : batch.issueStatus %}
                            
                            {# ✅ Calcul du badge de statut AVOIR #}
                            {% if realIssueStatus == 'recovered' or realIssueStatus == 'resolved' %}
                                {% set issueBadgeClass = 'bg-success' %}
                                {% set issueLabel = 'Récupéré' %}
                                {% set issueIcon = 'fa-check-circle' %}
                            {% elseif realIssueStatus == 'pending' %}
                                {% set issueBadgeClass = 'bg-warning text-dark' %}
                                {% set issueLabel = 'En attente' %}
                                {% set issueIcon = 'fa-clock' %}
                            {% elseif realIssueStatus == 'acknowledged' %}
                                {% set issueBadgeClass = 'bg-info' %}
                                {% set issueLabel = 'Accusé réception' %}
                                {% set issueIcon = 'fa-check' %}
                            {% elseif realIssueStatus == 'under_review' %}
                                {% set issueBadgeClass = 'bg-info' %}
                                {% set issueLabel = 'En analyse' %}
                                {% set issueIcon = 'fa-search' %}
                            {% elseif realIssueStatus == 'partially_recovered' %}
                                {% set issueBadgeClass = 'bg-warning text-dark' %}
                                {% set issueLabel = 'Partiellement récupéré' %}
                                {% set issueIcon = 'fa-hourglass-half' %}
                            {% elseif realIssueStatus == 'lost' %}
                                {% set issueBadgeClass = 'bg-danger' %}
                                {% set issueLabel = 'Perdu' %}
                                {% set issueIcon = 'fa-times-circle' %}
                            {% elseif realIssueStatus == 'closed' %}
                                {% set issueBadgeClass = 'bg-secondary' %}
                                {% set issueLabel = 'Clôturé' %}
                                {% set issueIcon = 'fa-archive' %}
                            {% elseif realIssueStatus == 'rejected' %}
                                {% set issueBadgeClass = 'bg-danger' %}
                                {% set issueLabel = 'Rejeté' %}
                                {% set issueIcon = 'fa-times-circle' %}
                            {% else %}
                                {% set issueBadgeClass = 'bg-secondary' %}
                                {% set issueLabel = realIssueStatus|replace({'_': ' '})|capitalize %}
                                {% set issueIcon = 'fa-exclamation-triangle' %}
                            {% endif %}
                            
                            {% set purchaseItem = purchaseItems[batch.id] is defined ? purchaseItems[batch.id] : null %}
                            
                            <tr class=\"{% if isExpired %}table-danger{% elseif isExpiringSoon %}table-warning{% elseif isLowStock %}table-info{% elseif hasIssue %}table-light{% endif %}\">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"{{ batch.id }}\"></td>
                                <td>
                                    <div class=\"d-flex flex-column\">
                                        <strong>{{ batch.batchNumber }}</strong>
                                        {% if batch.purchaseItemId %}
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-receipt me-1\"></i> 
                                                {% if purchaseMap is defined and purchaseMap[batch.purchaseItemId] is defined %}
                                                    {{ purchaseMap[batch.purchaseItemId] }}
                                                {% else %}
                                                    ACHAT #{{ batch.purchaseItemId }}
                                                {% endif %}
                                            </small>
                                            {% if purchaseItem and purchaseItem.purchase %}
                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                                    {{ purchaseItem.purchase.createdAt|date('d/m/Y') }}
                                                </small>
                                                {% if purchaseItem.purchase.supplier %}
                                                    <small class=\"text-muted\">
                                                        <i class=\"fas fa-truck me-1\"></i>
                                                        {{ purchaseItem.purchase.supplier.name|default('') }}
                                                    </small>
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    </div>
                                </td>
                                <td>
                                    <a href=\"{{ path('app_admin_product_show', {'id': batch.product.id}) }}\" class=\"text-decoration-none\">{{ batch.product.name|u.truncate(30) }}</a>
                                    <br><small class=\"text-muted\"><i class=\"fas fa-barcode me-1\"></i>{{ batch.product.barcode }}</small>
                                </td>
                                <td>
                                    {% if locationDisplay != '—' %}
                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> {{ locationDisplay|u.truncate(15) }}</span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">{{ batch.currentQuantity }}</span>
                                        <small class=\"text-muted\">/ {{ batch.initialQuantity }}</small>
                                        <div class=\"progress mt-1\" style=\"height:4px\">
                                            <div class=\"progress-bar 
                                                {% if batch.currentQuantity/batch.initialQuantity*100 <= 10 %}bg-danger
                                                {% elseif batch.currentQuantity/batch.initialQuantity*100 <= 30 %}bg-warning
                                                {% else %}bg-success{% endif %}\" 
                                                style=\"width:{{ (batch.currentQuantity / batch.initialQuantity * 100)|round }}%\">
                                            </div>
                                        </div>
                                        {% if isLowStock %}
                                            <br><span class=\"badge bg-warning text-dark mt-1 issue-badge\">Stock faible</span>
                                        {% endif %}
                                    </div>
                                </td>
                                <td>{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</td>
                                <td>
                                    {% if batch.expiryDate %}
                                        <div>
                                            <span class=\"fw-bold\">{{ batch.expiryDate|date('d/m/Y') }}</span>
                                            {% if isExpired %}
                                                <br><span class=\"badge bg-danger mt-1 issue-badge\">Expiré</span>
                                            {% elseif isExpiringSoon %}
                                                <br><span class=\"badge bg-warning text-dark mt-1 issue-badge\">J-{{ batch.expiryDate.diff(date()).days }}</span>
                                            {% endif %}
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {# ✅ CORRECTION : Utilisation du VRAI statut de l'avoir #}
                                    {% if hasIssue and creditNote %}
                                        <span class=\"badge {{ issueBadgeClass }}\">
                                            <i class=\"fas {{ issueIcon }} me-1\"></i>{{ issueLabel }}
                                        </span>
                                        {% if batch.issuePriority == 'critical' %}
                                            <span class=\"badge bg-danger mt-1 d-block issue-badge\">Critique</span>
                                        {% elseif batch.issuePriority == 'high' %}
                                            <span class=\"badge bg-warning text-dark mt-1 d-block issue-badge\">Haute</span>
                                        {% endif %}
                                        <small class=\"text-muted d-block\">{{ creditNote.declaredAmount|price_with_currency(batch.hmaService) }}</small>
                                    {% elseif hasIssue %}
                                        {# Fallback si l'avoir n'est pas chargé #}
                                        <span class=\"badge bg-secondary\">{{ batch.issueStatusLabel }}</span>
                                        <small class=\"text-muted d-block\">{{ batch.issueDeclaredAmount|price_with_currency(batch.hmaService) }}</small>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <span class=\"badge {{ batch.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                        {{ batch.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        {# Imprimer #}
                                        <a href=\"{{ path('app_admin_stock_batch_print', {'id': batch.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-secondary\" 
                                           title=\"Imprimer\" 
                                           target=\"_blank\">
                                            <i class=\"fas fa-print\"></i>
                                        </a>
                                        
                                        {# Voir #}
                                        <a href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-primary\" 
                                           title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        
                                        {# Modifier #}
                                        <a href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-warning\" 
                                           title=\"Modifier l'emplacement\">
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                        </a>
                                        
                                        {# ✅ Signalement / Voir avoir #}
                                        {% if canReportIssue[batch.id] ?? false %}
                                            <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-danger\" 
                                               title=\"Signaler un problème\">
                                                <i class=\"fas fa-exclamation-triangle\"></i>
                                            </a>
                                        {% elseif creditNote %}
                                            <a href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\" 
                                               class=\"btn btn-sm 
                                                   {% if realIssueStatus in ['recovered', 'resolved'] %}btn-success
                                                   {% elseif realIssueStatus == 'pending' %}btn-warning
                                                   {% elseif realIssueStatus in ['rejected', 'lost'] %}btn-danger
                                                   {% else %}btn-info{% endif %}\" 
                                               title=\"Voir l'avoir ({{ issueLabel }})\"
                                               target=\"_blank\">
                                                <i class=\"fas {{ issueIcon }}\"></i>
                                            </a>
                                        {% else %}
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-secondary\" 
                                                    disabled 
                                                    title=\"Signalement non disponible\">
                                                <i class=\"fas fa-exclamation-triangle text-muted\"></i>
                                            </button>
                                        {% endif %}
                                        
                                        {# Toggle actif/inactif #}
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-info toggle-batch-btn\" 
                                                data-batch-id=\"{{ batch.id }}\" 
                                                data-is-active=\"{{ batch.isActive ? '1' : '0' }}\" 
                                                data-batch-number=\"{{ batch.batchNumber }}\" 
                                                data-token=\"{{ csrf_token('toggle-batch' ~ batch.id) }}\">
                                            <i class=\"fas {{ batch.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }}\"></i>
                                        </button>
                                        
                                        {# Supprimer #}
                                        {% if is_granted('ROLE_ADMIN') and batch.stockMovements|length == 0 and not batch.hasIssue %}
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger delete-batch-btn\" 
                                                    data-batch-id=\"{{ batch.id }}\" 
                                                    data-batch-number=\"{{ batch.batchNumber }}\" 
                                                    data-token=\"{{ csrf_token('delete-batch' ~ batch.id) }}\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun lot trouvé</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres ou créez des achats pour générer des lots</p>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ✅ Affichage en cartes pour mobile -->
        <div class=\"card-body p-2 p-sm-3 d-md-none table-card-view\">
            {% if batches|length > 0 %}
                {% for batch in batches %}
                    {% set isExpired = batch.expiryDate and batch.expiryDate < date() %}
                    {% set isExpiringSoon = batch.expiryDate and batch.expiryDate >= date() and batch.expiryDate < date('+30 days') %}
                    {% set isLowStock = batch.currentQuantity <= 10 %}
                    {% set hasIssue = batch.hasIssue %}
                    {% set locationDisplay = batch.locationEntity ? batch.locationEntity.displayName : (batch.location ?: '—') %}
                    
                    {# ✅ Récupération du VRAI avoir #}
                    {% set creditNote = supplierCreditNotes[batch.id] ?? null %}
                    {% set realIssueStatus = creditNote ? creditNote.status : batch.issueStatus %}
                    
                    {% if realIssueStatus == 'recovered' or realIssueStatus == 'resolved' %}
                        {% set issueBadgeClass = 'bg-success' %}
                        {% set issueLabel = 'Récupéré' %}
                    {% elseif realIssueStatus == 'pending' %}
                        {% set issueBadgeClass = 'bg-warning text-dark' %}
                        {% set issueLabel = 'En attente' %}
                    {% elseif realIssueStatus == 'lost' or realIssueStatus == 'rejected' %}
                        {% set issueBadgeClass = 'bg-danger' %}
                        {% set issueLabel = realIssueStatus == 'lost' ? 'Perdu' : 'Rejeté' %}
                    {% elseif realIssueStatus == 'closed' %}
                        {% set issueBadgeClass = 'bg-secondary' %}
                        {% set issueLabel = 'Clôturé' %}
                    {% else %}
                        {% set issueBadgeClass = 'bg-info' %}
                        {% set issueLabel = realIssueStatus|replace({'_': ' '})|capitalize %}
                    {% endif %}
                    
                    {% set purchaseItem = purchaseItems[batch.id] is defined ? purchaseItems[batch.id] : null %}
                    
                    <div class=\"batch-card {% if isExpired %}status-expired{% elseif isExpiringSoon %}status-expiring{% elseif isLowStock %}status-low{% elseif hasIssue %}status-issue{% endif %}\">
                        <div class=\"batch-checkbox-wrapper\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"{{ batch.id }}\" id=\"mobile-check-{{ batch.id }}\">
                            <label for=\"mobile-check-{{ batch.id }}\" class=\"batch-number\">{{ batch.batchNumber }}</label>
                            {% if batch.isActive %}
                                <span class=\"badge bg-success ms-auto\">Actif</span>
                            {% else %}
                                <span class=\"badge bg-secondary ms-auto\">Inactif</span>
                            {% endif %}
                        </div>
                        <div class=\"batch-row\">
                            <div class=\"batch-item\">
                                <span class=\"label\">Produit</span>
                                <span class=\"value\">
                                    <a href=\"{{ path('app_admin_product_show', {'id': batch.product.id}) }}\" class=\"text-decoration-none\">{{ batch.product.name|u.truncate(25) }}</a>
                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Emplacement</span>
                                <span class=\"value\">
                                    {% if locationDisplay != '—' %}
                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> {{ locationDisplay|u.truncate(12) }}</span>
                                    {% else %}
                                        —
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Quantité</span>
                                <span class=\"value\">
                                    <span class=\"fw-bold\">{{ batch.currentQuantity }}</span>
                                    <small class=\"text-muted\">/ {{ batch.initialQuantity }}</small>
                                    <div class=\"progress mt-1\" style=\"height:4px;max-width:80px;\">
                                        <div class=\"progress-bar 
                                            {% if batch.currentQuantity/batch.initialQuantity*100 <= 10 %}bg-danger
                                            {% elseif batch.currentQuantity/batch.initialQuantity*100 <= 30 %}bg-warning
                                            {% else %}bg-success{% endif %}\" 
                                            style=\"width:{{ (batch.currentQuantity / batch.initialQuantity * 100)|round }}%\">
                                        </div>
                                    </div>
                                    {% if isLowStock %}
                                        <span class=\"badge bg-warning text-dark mt-1 issue-badge d-block\">Stock faible</span>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Prix unitaire</span>
                                <span class=\"value\">{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Expiration</span>
                                <span class=\"value\">
                                    {% if batch.expiryDate %}
                                        <span class=\"fw-bold\">{{ batch.expiryDate|date('d/m/Y') }}</span>
                                        {% if isExpired %}
                                            <span class=\"badge bg-danger mt-1 issue-badge d-block\">Expiré</span>
                                        {% elseif isExpiringSoon %}
                                            <span class=\"badge bg-warning text-dark mt-1 issue-badge d-block\">J-{{ batch.expiryDate.diff(date()).days }}</span>
                                        {% endif %}
                                    {% else %}
                                        —
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Avoir</span>
                                <span class=\"value\">
                                    {# ✅ CORRECTION : Utilisation du VRAI statut #}
                                    {% if hasIssue and creditNote %}
                                        <span class=\"badge {{ issueBadgeClass }}\">{{ issueLabel }}</span>
                                        {% if batch.issuePriority == 'critical' %}
                                            <span class=\"badge bg-danger mt-1 issue-badge d-block\">Critique</span>
                                        {% elseif batch.issuePriority == 'high' %}
                                            <span class=\"badge bg-warning text-dark mt-1 issue-badge d-block\">Haute</span>
                                        {% endif %}
                                        <small class=\"text-muted d-block\">{{ creditNote.declaredAmount|price_with_currency(batch.hmaService) }}</small>
                                    {% elseif hasIssue %}
                                        <span class=\"badge {{ batch.issueStatusBadgeClass }}\">{{ batch.issueStatusLabel }}</span>
                                        <small class=\"text-muted d-block\">{{ batch.issueDeclaredAmount|price_with_currency(batch.hmaService) }}</small>
                                    {% else %}
                                        —
                                    {% endif %}
                                </span>
                            </div>
                            {% if batch.purchaseItemId %}
                            <div class=\"batch-item\" style=\"grid-column:1/-1;\">
                                <span class=\"label\">Réf. achat</span>
                                <span class=\"value small text-muted\">
                                    <i class=\"fas fa-receipt me-1\"></i> 
                                    {% if purchaseMap is defined and purchaseMap[batch.purchaseItemId] is defined %}
                                        {{ purchaseMap[batch.purchaseItemId] }}
                                    {% else %}
                                        ACHAT #{{ batch.purchaseItemId }}
                                    {% endif %}
                                    {% if purchaseItem and purchaseItem.purchase %}
                                        — {{ purchaseItem.purchase.createdAt|date('d/m/Y') }}
                                        {% if purchaseItem.purchase.supplier %}
                                            — {{ purchaseItem.purchase.supplier.name|default('') }}
                                        {% endif %}
                                    {% endif %}
                                </span>
                            </div>
                            {% endif %}
                        </div>
                        <div class=\"batch-actions\">
                            <a href=\"{{ path('app_admin_stock_batch_print', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\">
                                <i class=\"fas fa-print\"></i> Imprimer
                            </a>
                            <a href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                <i class=\"fas fa-map-marker-alt\"></i> Modifier
                            </a>
                            {% if canReportIssue[batch.id] ?? false %}
                                <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-sm btn-outline-danger\" title=\"Signaler\">
                                    <i class=\"fas fa-exclamation-triangle\"></i> Signaler
                                </a>
                            {% elseif creditNote %}
                                <a href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\" 
                                   class=\"btn btn-sm 
                                       {% if realIssueStatus in ['recovered', 'resolved'] %}btn-success
                                       {% elseif realIssueStatus == 'pending' %}btn-warning
                                       {% elseif realIssueStatus in ['rejected', 'lost'] %}btn-danger
                                       {% else %}btn-info{% endif %}\">
                                    <i class=\"fas fa-file-invoice-dollar\"></i> Avoir ({{ issueLabel }})
                                </a>
                            {% else %}
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" disabled>
                                    <i class=\"fas fa-exclamation-triangle text-muted\"></i>
                                </button>
                            {% endif %}
                            <button type=\"button\" class=\"btn btn-sm btn-outline-info toggle-batch-btn\" 
                                    data-batch-id=\"{{ batch.id }}\" 
                                    data-is-active=\"{{ batch.isActive ? '1' : '0' }}\" 
                                    data-batch-number=\"{{ batch.batchNumber }}\" 
                                    data-token=\"{{ csrf_token('toggle-batch' ~ batch.id) }}\">
                                <i class=\"fas {{ batch.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }}\"></i>
                            </button>
                            {% if is_granted('ROLE_ADMIN') and batch.stockMovements|length == 0 and not hasIssue %}
                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-batch-btn\" 
                                        data-batch-id=\"{{ batch.id }}\" 
                                        data-batch-number=\"{{ batch.batchNumber }}\" 
                                        data-token=\"{{ csrf_token('delete-batch' ~ batch.id) }}\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"text-center py-5\">
                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                    <p class=\"text-muted mb-0\">Aucun lot trouvé</p>
                    <p class=\"text-muted small\">Modifiez vos filtres</p>
                </div>
            {% endif %}
        </div>

        {% if totalPages > 1 %}
        <div class=\"card-footer bg-white p-2 p-md-3\">
            <nav>
                <ul class=\"pagination justify-content-center mb-0 flex-wrap\">
                    {% if currentPage > 1 %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_all', app.request.query.all|merge({'page': currentPage - 1})) }}\"><i class=\"fas fa-chevron-left\"></i> <span class=\"d-none d-sm-inline\">Précédent</span></a></li>
                    {% endif %}
                    {% for page in 1..totalPages %}
                        <li class=\"page-item {{ page == currentPage ? 'active' : '' }} d-none d-sm-block\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_all', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                        </li>
                    {% endfor %}
                    {% if totalPages > 5 %}
                        <li class=\"page-item d-block d-sm-none\">
                            <span class=\"page-link\">{{ currentPage }} / {{ totalPages }}</span>
                        </li>
                    {% endif %}
                    {% if currentPage < totalPages %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_all', app.request.query.all|merge({'page': currentPage + 1})) }}\"><span class=\"d-none d-sm-inline\">Suivant</span> <i class=\"fas fa-chevron-right\"></i></a></li>
                    {% endif %}
                </ul>
            </nav>
        </div>
        {% endif %}
    </div>
</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--primary-color); color: white;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> lot(s) sélectionné(s)
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\"><i class=\"fas fa-print me-2\"></i> Imprimer sélection</button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\"><i class=\"fas fa-print me-2\"></i> Imprimer tous</button>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"importExcelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--success-color); color: white;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-file-excel me-2\"></i> Importer</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info small\"><i class=\"fas fa-info-circle me-2\"></i> Utilisez l'export pour obtenir le template.</div>
                <form method=\"post\" action=\"{{ path('app_admin_stock_batch_import_excel') }}\" enctype=\"multipart/form-data\">
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold small\">Fichier Excel (.xlsx)</label>
                        <input type=\"file\" name=\"excel_file\" class=\"form-control form-control-sm\" accept=\".xlsx,.xls\" required>
                    </div>
                    <div class=\"form-check mb-3\">
                        <input type=\"checkbox\" name=\"update_only_location\" class=\"form-check-input\" id=\"updateOnlyLocation\" checked>
                        <label class=\"form-check-label small\" for=\"updateOnlyLocation\">Mettre à jour uniquement les emplacements</label>
                    </div>
                    <div class=\"d-grid\">
                        <button type=\"submit\" class=\"btn\" style=\"background: var(--success-color); color: white; border-color: var(--success-color);\">
                            <i class=\"fas fa-upload me-2\"></i> Importer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\">
                    <button type=\"submit\" class=\"btn btn-sm\" id=\"toggleBatchBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--danger-color); color: white;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\">
                    <button type=\"submit\" class=\"btn btn-sm\" style=\"background: var(--danger-color); color: white; border-color: var(--danger-color);\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sélecteurs Select2
    if (typeof \$.fn.select2 !== 'undefined') {
        \$('#product-select, #location-select').select2({ 
            theme: 'bootstrap-5', 
            language: 'fr', 
            allowClear: true, 
            width: '100%',
            dropdownParent: \$('#product-select, #location-select').parent()
        });
    }

    // Gestion des checkboxes
    const selectAll = document.getElementById('select-all-checkbox');
    const checkboxes = document.querySelectorAll('.batch-checkbox');
    const countSpan = document.getElementById('selectedCount');

    function updateCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (countSpan) countSpan.textContent = selected;
        if (selectAll) selectAll.checked = checkboxes.length === selected && checkboxes.length > 0;
    }

    if (selectAll) {
        selectAll.addEventListener('change', function() {
            checkboxes.forEach(cb => cb.checked = selectAll.checked);
            updateCount();
        });
    }

    document.getElementById('selectAllBtn')?.addEventListener('click', function(e) {
        e.preventDefault();
        checkboxes.forEach(cb => cb.checked = true);
        if (selectAll) selectAll.checked = true;
        updateCount();
    });

    document.getElementById('deselectAllBtn')?.addEventListener('click', function(e) {
        e.preventDefault();
        checkboxes.forEach(cb => cb.checked = false);
        if (selectAll) selectAll.checked = false;
        updateCount();
    });

    checkboxes.forEach(cb => cb.addEventListener('change', updateCount));
    updateCount();

    document.getElementById('print-selected')?.addEventListener('click', function() {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length) {
            window.open('/admin/stock-batch/print-multiple?ids=' + selected.join(','), '_blank');
        } else {
            alert('Sélectionnez au moins un lot.');
        }
    });

    document.getElementById('print-all')?.addEventListener('click', function() {
        const all = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (all.length) {
            window.open('/admin/stock-batch/print-multiple?ids=' + all.join(','), '_blank');
        } else {
            alert('Aucun lot à imprimer.');
        }
    });

    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.batchId;
            const isActive = this.dataset.isActive === '1';
            const token = this.dataset.token;
            const num = this.dataset.batchNumber;
            
            document.getElementById('toggleBatchMessage').innerText = 
                `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${num}\" ?`;
            document.getElementById('toggleBatchForm').action = `/admin/stock-batch/\${id}/toggle`;
            document.getElementById('toggleBatchToken').value = token;
            
            const btnSubmit = document.getElementById('toggleBatchBtn');
            btnSubmit.className = isActive ? 'btn btn-danger btn-sm' : 'btn btn-success btn-sm';
            btnSubmit.textContent = isActive ? 'Désactiver' : 'Activer';
            
            toggleModal.show();
        });
    });

    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            document.getElementById('deleteBatchMessage').innerHTML = 
                `<div class=\"alert alert-warning small\">⚠️ Cette action est irréversible.</div>
                 <p>Supprimer le lot <strong>\${this.dataset.batchNumber}</strong> ?</p>
                 <p class=\"text-danger mb-0 small\">Cette suppression n'est possible que si aucun mouvement de stock n'est associé.</p>`;
            document.getElementById('deleteBatchForm').action = '/admin/stock-batch/' + this.dataset.batchId + '/delete';
            document.getElementById('deleteBatchToken').value = this.dataset.token;
            deleteModal.show();
        });
    });
});
</script>
{% endblock %}", "admin/stock_batch/all.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\all.html.twig");
    }
}
