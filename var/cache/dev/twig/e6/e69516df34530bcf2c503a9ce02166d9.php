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
            yield "                            ";
            $context["canReport"] = false;
            // line 659
            yield "                            ";
            if (( !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 659, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 659))) {
                // line 660
                yield "                                ";
                if ((array_key_exists("canReportIssue", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["canReportIssue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 660), [], "array", true, true, false, 660))) {
                    // line 661
                    yield "                                    ";
                    $context["canReport"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 661, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 661), [], "array", false, false, false, 661);
                    // line 662
                    yield "                                ";
                }
                // line 663
                yield "                            ";
            }
            // line 664
            yield "                            ";
            $context["purchaseItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 664), [], "array", true, true, false, 664)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 664, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 664), [], "array", false, false, false, 664)) : (null));
            // line 665
            yield "                            
                            <tr class=\"";
            // line 666
            if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 666, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-danger";
            } elseif ((($tmp = (isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 666, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-warning";
            } elseif ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 666, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-info";
            } elseif ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 666, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-light";
            }
            yield "\">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 667
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 667), "html", null, true);
            yield "\"></td>
                                <td>
                                    <div class=\"d-flex flex-column\">
                                        <strong>";
            // line 670
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 670), "html", null, true);
            yield "</strong>
                                        ";
            // line 671
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 671)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 672
                yield "                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-receipt me-1\"></i> 
                                                ";
                // line 674
                if ((array_key_exists("purchaseMap", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 674), [], "array", true, true, false, 674))) {
                    // line 675
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseMap"]) || array_key_exists("purchaseMap", $context) ? $context["purchaseMap"] : (function () { throw new RuntimeError('Variable "purchaseMap" does not exist.', 675, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 675), [], "array", false, false, false, 675), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 677
                    yield "                                                    ACHAT #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 677), "html", null, true);
                    yield "
                                                ";
                }
                // line 679
                yield "                                            </small>
                                            ";
                // line 680
                if (((isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 680, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 680, $this->source); })()), "purchase", [], "any", false, false, false, 680))) {
                    // line 681
                    yield "                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                                    ";
                    // line 683
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 683, $this->source); })()), "purchase", [], "any", false, false, false, 683), "createdAt", [], "any", false, false, false, 683), "d/m/Y"), "html", null, true);
                    yield "
                                                </small>
                                                ";
                    // line 685
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 685, $this->source); })()), "purchase", [], "any", false, false, false, 685), "supplier", [], "any", false, false, false, 685)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 686
                        yield "                                                    <small class=\"text-muted\">
                                                        <i class=\"fas fa-truck me-1\"></i>
                                                        ";
                        // line 688
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 688), "supplier", [], "any", false, true, false, 688), "name", [], "any", true, true, false, 688)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 688, $this->source); })()), "purchase", [], "any", false, false, false, 688), "supplier", [], "any", false, false, false, 688), "name", [], "any", false, false, false, 688), "")) : ("")), "html", null, true);
                        yield "
                                                    </small>
                                                ";
                    }
                    // line 691
                    yield "                                            ";
                }
                // line 692
                yield "                                        ";
            }
            // line 693
            yield "                                    </div>
                                </td>
                                <td>
                                    <a href=\"";
            // line 696
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 696), "id", [], "any", false, false, false, 696)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 696), "name", [], "any", false, false, false, 696)), "truncate", [30], "method", false, false, false, 696), "html", null, true);
            yield "</a>
                                    <br><small class=\"text-muted\"><i class=\"fas fa-barcode me-1\"></i>";
            // line 697
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 697), "barcode", [], "any", false, false, false, 697), "html", null, true);
            yield "</small>
                                </td>
                                <td>
                                    ";
            // line 700
            if (((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 700, $this->source); })()) != "—")) {
                // line 701
                yield "                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 701, $this->source); })())), "truncate", [15], "method", false, false, false, 701), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 703
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 705
            yield "                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">";
            // line 708
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 708), "html", null, true);
            yield "</span>
                                        <small class=\"text-muted\">/ ";
            // line 709
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 709), "html", null, true);
            yield "</small>
                                        <div class=\"progress mt-1\" style=\"height:4px\">
                                            <div class=\"progress-bar 
                                                ";
            // line 712
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 712) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 712)) * 100) <= 10)) {
                yield "bg-danger
                                                ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,             // line 713
$context["batch"], "currentQuantity", [], "any", false, false, false, 713) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 713)) * 100) <= 30)) {
                yield "bg-warning
                                                ";
            } else {
                // line 714
                yield "bg-success";
            }
            yield "\" 
                                                style=\"width:";
            // line 715
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 715) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 715)) * 100)), "html", null, true);
            yield "%\">
                                            </div>
                                        </div>
                                        ";
            // line 718
            if ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 718, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 719
                yield "                                            <br><span class=\"badge bg-warning text-dark mt-1 issue-badge\">Stock faible</span>
                                        ";
            }
            // line 721
            yield "                                    </div>
                                </td>
                                <td>";
            // line 723
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 723), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 723)), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 725
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 725)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 726
                yield "                                        <div>
                                            <span class=\"fw-bold\">";
                // line 727
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 727), "d/m/Y"), "html", null, true);
                yield "</span>
                                            ";
                // line 728
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 728, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 729
                    yield "                                                <br><span class=\"badge bg-danger mt-1 issue-badge\">Expiré</span>
                                            ";
                } elseif ((($tmp =                 // line 730
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 730, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 731
                    yield "                                                <br><span class=\"badge bg-warning text-dark mt-1 issue-badge\">J-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 731), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 731), "days", [], "any", false, false, false, 731), "html", null, true);
                    yield "</span>
                                            ";
                }
                // line 733
                yield "                                        </div>
                                    ";
            } else {
                // line 735
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 737
            yield "                                </td>
                                <td>
                                    ";
            // line 739
            if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 739, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 740
                yield "                                        <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusBadgeClass", [], "any", false, false, false, 740), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusLabel", [], "any", false, false, false, 740), "html", null, true);
                yield "</span>
                                        ";
                // line 741
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issuePriority", [], "any", false, false, false, 741) == "critical")) {
                    // line 742
                    yield "                                            <span class=\"badge bg-danger mt-1 d-block issue-badge\">Critique</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 743
$context["batch"], "issuePriority", [], "any", false, false, false, 743) == "high")) {
                    // line 744
                    yield "                                            <span class=\"badge bg-warning text-dark mt-1 d-block issue-badge\">Haute</span>
                                        ";
                }
                // line 746
                yield "                                        <small class=\"text-muted d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 746), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 746)), "html", null, true);
                yield "</small>
                                    ";
            } else {
                // line 748
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 750
            yield "                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 752
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 752)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 753
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 753)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 758
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 758)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\">
                                            <i class=\"fas fa-print\"></i>
                                        </a>
                                        <a href=\"";
            // line 761
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 761)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 764
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 764)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                        </a>
                                        ";
            // line 767
            if ((($tmp = (isset($context["canReport"]) || array_key_exists("canReport", $context) ? $context["canReport"] : (function () { throw new RuntimeError('Variable "canReport" does not exist.', 767, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 768
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 768)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-danger\" title=\"Signaler un problème\">
                                                <i class=\"fas fa-exclamation-triangle\"></i>
                                            </a>
                                        ";
            } elseif ((            // line 771
(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 771, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["supplierCreditNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 771), [], "array", true, true, false, 771))) {
                // line 772
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplierCreditNotes"]) || array_key_exists("supplierCreditNotes", $context) ? $context["supplierCreditNotes"] : (function () { throw new RuntimeError('Variable "supplierCreditNotes" does not exist.', 772, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 772), [], "array", false, false, false, 772), "id", [], "any", false, false, false, 772)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-info\" title=\"Voir l'avoir\">
                                                <i class=\"fas fa-file-invoice-dollar\"></i>
                                            </a>
                                        ";
            } else {
                // line 776
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" disabled title=\"Signalement non disponible\">
                                                <i class=\"fas fa-exclamation-triangle text-muted\"></i>
                                            </button>
                                        ";
            }
            // line 780
            yield "                                        <button type=\"button\" class=\"btn btn-sm btn-outline-info toggle-batch-btn\" 
                                                data-batch-id=\"";
            // line 781
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 781), "html", null, true);
            yield "\" 
                                                data-is-active=\"";
            // line 782
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 782)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\" 
                                                data-batch-number=\"";
            // line 783
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 783), "html", null, true);
            yield "\" 
                                                data-token=\"";
            // line 784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 784))), "html", null, true);
            yield "\">
                                            <i class=\"fas ";
            // line 785
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 785)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield "\"></i>
                                        </button>
                                        ";
            // line 787
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 787)) == 0)) &&  !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 787, $this->source); })()))) {
                // line 788
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-batch-btn\" 
                                                    data-batch-id=\"";
                // line 789
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 789), "html", null, true);
                yield "\" 
                                                    data-batch-number=\"";
                // line 790
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 790), "html", null, true);
                yield "\" 
                                                    data-token=\"";
                // line 791
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 791))), "html", null, true);
                yield "\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        ";
            }
            // line 795
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 798
        if (!$context['_iterated']) {
            // line 799
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
        // line 807
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- ✅ Affichage en cartes pour mobile (md et moins) -->
        <div class=\"card-body p-2 p-sm-3 d-md-none table-card-view\">
            ";
        // line 814
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 814, $this->source); })())) > 0)) {
            // line 815
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 815, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 816
                yield "                    ";
                $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 816) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 816) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
                // line 817
                yield "                    ";
                $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 817) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 817) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 817) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
                // line 818
                yield "                    ";
                $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 818) <= 10);
                // line 819
                yield "                    ";
                $context["hasIssue"] = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 819);
                // line 820
                yield "                    ";
                $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 820)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 820), "displayName", [], "any", false, false, false, 820)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 820)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 820)) : ("—"))));
                // line 821
                yield "                    ";
                $context["canReport"] = false;
                // line 822
                yield "                    ";
                if (( !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 822, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 822))) {
                    // line 823
                    yield "                        ";
                    if ((array_key_exists("canReportIssue", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["canReportIssue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 823), [], "array", true, true, false, 823))) {
                        // line 824
                        yield "                            ";
                        $context["canReport"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 824, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 824), [], "array", false, false, false, 824);
                        // line 825
                        yield "                        ";
                    }
                    // line 826
                    yield "                    ";
                }
                // line 827
                yield "                    ";
                $context["purchaseItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 827), [], "array", true, true, false, 827)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 827, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 827), [], "array", false, false, false, 827)) : (null));
                // line 828
                yield "                    
                    <div class=\"batch-card ";
                // line 829
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 829, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-expired";
                } elseif ((($tmp = (isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 829, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-expiring";
                } elseif ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 829, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-low";
                } elseif ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 829, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-issue";
                }
                yield "\">
                        <div class=\"batch-checkbox-wrapper\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
                // line 831
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 831), "html", null, true);
                yield "\" id=\"mobile-check-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 831), "html", null, true);
                yield "\">
                            <label for=\"mobile-check-";
                // line 832
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 832), "html", null, true);
                yield "\" class=\"batch-number\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 832), "html", null, true);
                yield "</label>
                            ";
                // line 833
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 833)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 834
                    yield "                                <span class=\"badge bg-success ms-auto\">Actif</span>
                            ";
                } else {
                    // line 836
                    yield "                                <span class=\"badge bg-secondary ms-auto\">Inactif</span>
                            ";
                }
                // line 838
                yield "                        </div>
                        <div class=\"batch-row\">
                            <div class=\"batch-item\">
                                <span class=\"label\">Produit</span>
                                <span class=\"value\">
                                    <a href=\"";
                // line 843
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 843), "id", [], "any", false, false, false, 843)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 843), "name", [], "any", false, false, false, 843)), "truncate", [25], "method", false, false, false, 843), "html", null, true);
                yield "</a>
                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Emplacement</span>
                                <span class=\"value\">
                                    ";
                // line 849
                if (((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 849, $this->source); })()) != "—")) {
                    // line 850
                    yield "                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 850, $this->source); })())), "truncate", [12], "method", false, false, false, 850), "html", null, true);
                    yield "</span>
                                    ";
                } else {
                    // line 852
                    yield "                                        —
                                    ";
                }
                // line 854
                yield "                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Quantité</span>
                                <span class=\"value\">
                                    <span class=\"fw-bold\">";
                // line 859
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 859), "html", null, true);
                yield "</span>
                                    <small class=\"text-muted\">/ ";
                // line 860
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 860), "html", null, true);
                yield "</small>
                                    <div class=\"progress mt-1\" style=\"height:4px;max-width:80px;\">
                                        <div class=\"progress-bar 
                                            ";
                // line 863
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 863) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 863)) * 100) <= 10)) {
                    yield "bg-danger
                                            ";
                } elseif ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 864
$context["batch"], "currentQuantity", [], "any", false, false, false, 864) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 864)) * 100) <= 30)) {
                    yield "bg-warning
                                            ";
                } else {
                    // line 865
                    yield "bg-success";
                }
                yield "\" 
                                            style=\"width:";
                // line 866
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 866) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 866)) * 100)), "html", null, true);
                yield "%\">
                                        </div>
                                    </div>
                                    ";
                // line 869
                if ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 869, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 870
                    yield "                                        <span class=\"badge bg-warning text-dark mt-1 issue-badge d-block\">Stock faible</span>
                                    ";
                }
                // line 872
                yield "                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Prix unitaire</span>
                                <span class=\"value\">";
                // line 876
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 876), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 876)), "html", null, true);
                yield "</span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Expiration</span>
                                <span class=\"value\">
                                    ";
                // line 881
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 881)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 882
                    yield "                                        <span class=\"fw-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 882), "d/m/Y"), "html", null, true);
                    yield "</span>
                                        ";
                    // line 883
                    if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 883, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 884
                        yield "                                            <span class=\"badge bg-danger mt-1 issue-badge d-block\">Expiré</span>
                                        ";
                    } elseif ((($tmp =                     // line 885
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 885, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 886
                        yield "                                            <span class=\"badge bg-warning text-dark mt-1 issue-badge d-block\">J-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 886), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 886), "days", [], "any", false, false, false, 886), "html", null, true);
                        yield "</span>
                                        ";
                    }
                    // line 888
                    yield "                                    ";
                } else {
                    // line 889
                    yield "                                        —
                                    ";
                }
                // line 891
                yield "                                </span>
                            </div>
                            <div class=\"batch-item\">
                                <span class=\"label\">Avoir</span>
                                <span class=\"value\">
                                    ";
                // line 896
                if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 896, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 897
                    yield "                                        <span class=\"badge ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusBadgeClass", [], "any", false, false, false, 897), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusLabel", [], "any", false, false, false, 897), "html", null, true);
                    yield "</span>
                                        ";
                    // line 898
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issuePriority", [], "any", false, false, false, 898) == "critical")) {
                        // line 899
                        yield "                                            <span class=\"badge bg-danger mt-1 issue-badge d-block\">Critique</span>
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 900
$context["batch"], "issuePriority", [], "any", false, false, false, 900) == "high")) {
                        // line 901
                        yield "                                            <span class=\"badge bg-warning text-dark mt-1 issue-badge d-block\">Haute</span>
                                        ";
                    }
                    // line 903
                    yield "                                        <small class=\"text-muted d-block\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 903), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 903)), "html", null, true);
                    yield "</small>
                                    ";
                } else {
                    // line 905
                    yield "                                        —
                                    ";
                }
                // line 907
                yield "                                </span>
                            </div>
                            ";
                // line 909
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 909)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 910
                    yield "                            <div class=\"batch-item\" style=\"grid-column:1/-1;\">
                                <span class=\"label\">Réf. achat</span>
                                <span class=\"value small text-muted\">
                                    <i class=\"fas fa-receipt me-1\"></i> 
                                    ";
                    // line 914
                    if ((array_key_exists("purchaseMap", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 914), [], "array", true, true, false, 914))) {
                        // line 915
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseMap"]) || array_key_exists("purchaseMap", $context) ? $context["purchaseMap"] : (function () { throw new RuntimeError('Variable "purchaseMap" does not exist.', 915, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 915), [], "array", false, false, false, 915), "html", null, true);
                        yield "
                                    ";
                    } else {
                        // line 917
                        yield "                                        ACHAT #";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 917), "html", null, true);
                        yield "
                                    ";
                    }
                    // line 919
                    yield "                                    ";
                    if (((isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 919, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 919, $this->source); })()), "purchase", [], "any", false, false, false, 919))) {
                        // line 920
                        yield "                                        — ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 920, $this->source); })()), "purchase", [], "any", false, false, false, 920), "createdAt", [], "any", false, false, false, 920), "d/m/Y"), "html", null, true);
                        yield "
                                        ";
                        // line 921
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 921, $this->source); })()), "purchase", [], "any", false, false, false, 921), "supplier", [], "any", false, false, false, 921)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 922
                            yield "                                            — ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 922), "supplier", [], "any", false, true, false, 922), "name", [], "any", true, true, false, 922)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 922, $this->source); })()), "purchase", [], "any", false, false, false, 922), "supplier", [], "any", false, false, false, 922), "name", [], "any", false, false, false, 922), "")) : ("")), "html", null, true);
                            yield "
                                        ";
                        }
                        // line 924
                        yield "                                    ";
                    }
                    // line 925
                    yield "                                </span>
                            </div>
                            ";
                }
                // line 928
                yield "                        </div>
                        <div class=\"batch-actions\">
                            <a href=\"";
                // line 930
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 930)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\">
                                <i class=\"fas fa-print\"></i> Imprimer
                            </a>
                            <a href=\"";
                // line 933
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 933)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
                // line 936
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 936)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                <i class=\"fas fa-map-marker-alt\"></i> Modifier
                            </a>
                            ";
                // line 939
                if ((($tmp = (isset($context["canReport"]) || array_key_exists("canReport", $context) ? $context["canReport"] : (function () { throw new RuntimeError('Variable "canReport" does not exist.', 939, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 940
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 940)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-danger\" title=\"Signaler\">
                                    <i class=\"fas fa-exclamation-triangle\"></i> Signaler
                                </a>
                            ";
                } elseif ((                // line 943
(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 943, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["supplierCreditNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 943), [], "array", true, true, false, 943))) {
                    // line 944
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplierCreditNotes"]) || array_key_exists("supplierCreditNotes", $context) ? $context["supplierCreditNotes"] : (function () { throw new RuntimeError('Variable "supplierCreditNotes" does not exist.', 944, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 944), [], "array", false, false, false, 944), "id", [], "any", false, false, false, 944)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-info\" title=\"Voir l'avoir\">
                                    <i class=\"fas fa-file-invoice-dollar\"></i> Avoir
                                </a>
                            ";
                } else {
                    // line 948
                    yield "                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" disabled>
                                    <i class=\"fas fa-exclamation-triangle text-muted\"></i>
                                </button>
                            ";
                }
                // line 952
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-info toggle-batch-btn\" 
                                    data-batch-id=\"";
                // line 953
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 953), "html", null, true);
                yield "\" 
                                    data-is-active=\"";
                // line 954
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 954)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
                yield "\" 
                                    data-batch-number=\"";
                // line 955
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 955), "html", null, true);
                yield "\" 
                                    data-token=\"";
                // line 956
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 956))), "html", null, true);
                yield "\">
                                <i class=\"fas ";
                // line 957
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 957)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield "\"></i>
                            </button>
                            ";
                // line 959
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 959)) == 0)) &&  !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 959, $this->source); })()))) {
                    // line 960
                    yield "                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-batch-btn\" 
                                        data-batch-id=\"";
                    // line 961
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 961), "html", null, true);
                    yield "\" 
                                        data-batch-number=\"";
                    // line 962
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 962), "html", null, true);
                    yield "\" 
                                        data-token=\"";
                    // line 963
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 963))), "html", null, true);
                    yield "\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            ";
                }
                // line 967
                yield "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 970
            yield "            ";
        } else {
            // line 971
            yield "                <div class=\"text-center py-5\">
                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                    <p class=\"text-muted mb-0\">Aucun lot trouvé</p>
                    <p class=\"text-muted small\">Modifiez vos filtres</p>
                </div>
            ";
        }
        // line 977
        yield "        </div>

        ";
        // line 979
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 979, $this->source); })()) > 1)) {
            // line 980
            yield "        <div class=\"card-footer bg-white p-2 p-md-3\">
            <nav>
                <ul class=\"pagination justify-content-center mb-0 flex-wrap\">
                    ";
            // line 983
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 983, $this->source); })()) > 1)) {
                // line 984
                yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 984, $this->source); })()), "request", [], "any", false, false, false, 984), "query", [], "any", false, false, false, 984), "all", [], "any", false, false, false, 984), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 984, $this->source); })()) - 1)])), "html", null, true);
                yield "\"><i class=\"fas fa-chevron-left\"></i> <span class=\"d-none d-sm-inline\">Précédent</span></a></li>
                    ";
            }
            // line 986
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 986, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 987
                yield "                        <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 987, $this->source); })()))) ? ("active") : (""));
                yield " d-none d-sm-block\">
                            <a class=\"page-link\" href=\"";
                // line 988
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 988, $this->source); })()), "request", [], "any", false, false, false, 988), "query", [], "any", false, false, false, 988), "all", [], "any", false, false, false, 988), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 991
            yield "                    ";
            // line 992
            yield "                    ";
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 992, $this->source); })()) > 5)) {
                // line 993
                yield "                        <li class=\"page-item d-block d-sm-none\">
                            <span class=\"page-link\">";
                // line 994
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 994, $this->source); })()), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 994, $this->source); })()), "html", null, true);
                yield "</span>
                        </li>
                    ";
            }
            // line 997
            yield "                    ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 997, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 997, $this->source); })()))) {
                // line 998
                yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 998, $this->source); })()), "request", [], "any", false, false, false, 998), "query", [], "any", false, false, false, 998), "all", [], "any", false, false, false, 998), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 998, $this->source); })()) + 1)])), "html", null, true);
                yield "\"><span class=\"d-none d-sm-inline\">Suivant</span> <i class=\"fas fa-chevron-right\"></i></a></li>
                    ";
            }
            // line 1000
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 1004
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
        // line 1040
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

    // line 1104
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

        // line 1105
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

    // Impression sélection
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

    // Toggle batch (activation/désactivation)
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

    // Suppression
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
        return array (  1888 => 1105,  1875 => 1104,  1801 => 1040,  1763 => 1004,  1757 => 1000,  1751 => 998,  1748 => 997,  1740 => 994,  1737 => 993,  1734 => 992,  1732 => 991,  1721 => 988,  1716 => 987,  1711 => 986,  1705 => 984,  1703 => 983,  1698 => 980,  1696 => 979,  1692 => 977,  1684 => 971,  1681 => 970,  1673 => 967,  1666 => 963,  1662 => 962,  1658 => 961,  1655 => 960,  1653 => 959,  1648 => 957,  1644 => 956,  1640 => 955,  1636 => 954,  1632 => 953,  1629 => 952,  1623 => 948,  1615 => 944,  1613 => 943,  1606 => 940,  1604 => 939,  1598 => 936,  1592 => 933,  1586 => 930,  1582 => 928,  1577 => 925,  1574 => 924,  1568 => 922,  1566 => 921,  1561 => 920,  1558 => 919,  1552 => 917,  1546 => 915,  1544 => 914,  1538 => 910,  1536 => 909,  1532 => 907,  1528 => 905,  1522 => 903,  1518 => 901,  1516 => 900,  1513 => 899,  1511 => 898,  1504 => 897,  1502 => 896,  1495 => 891,  1491 => 889,  1488 => 888,  1482 => 886,  1480 => 885,  1477 => 884,  1475 => 883,  1470 => 882,  1468 => 881,  1460 => 876,  1454 => 872,  1450 => 870,  1448 => 869,  1442 => 866,  1437 => 865,  1432 => 864,  1428 => 863,  1422 => 860,  1418 => 859,  1411 => 854,  1407 => 852,  1401 => 850,  1399 => 849,  1388 => 843,  1381 => 838,  1377 => 836,  1373 => 834,  1371 => 833,  1365 => 832,  1359 => 831,  1346 => 829,  1343 => 828,  1340 => 827,  1337 => 826,  1334 => 825,  1331 => 824,  1328 => 823,  1325 => 822,  1322 => 821,  1319 => 820,  1316 => 819,  1313 => 818,  1310 => 817,  1307 => 816,  1302 => 815,  1300 => 814,  1291 => 807,  1278 => 799,  1276 => 798,  1269 => 795,  1262 => 791,  1258 => 790,  1254 => 789,  1251 => 788,  1249 => 787,  1244 => 785,  1240 => 784,  1236 => 783,  1232 => 782,  1228 => 781,  1225 => 780,  1219 => 776,  1211 => 772,  1209 => 771,  1202 => 768,  1200 => 767,  1194 => 764,  1188 => 761,  1182 => 758,  1174 => 753,  1170 => 752,  1166 => 750,  1162 => 748,  1156 => 746,  1152 => 744,  1150 => 743,  1147 => 742,  1145 => 741,  1138 => 740,  1136 => 739,  1132 => 737,  1128 => 735,  1124 => 733,  1118 => 731,  1116 => 730,  1113 => 729,  1111 => 728,  1107 => 727,  1104 => 726,  1102 => 725,  1097 => 723,  1093 => 721,  1089 => 719,  1087 => 718,  1081 => 715,  1076 => 714,  1071 => 713,  1067 => 712,  1061 => 709,  1057 => 708,  1052 => 705,  1048 => 703,  1042 => 701,  1040 => 700,  1034 => 697,  1028 => 696,  1023 => 693,  1020 => 692,  1017 => 691,  1011 => 688,  1007 => 686,  1005 => 685,  1000 => 683,  996 => 681,  994 => 680,  991 => 679,  985 => 677,  979 => 675,  977 => 674,  973 => 672,  971 => 671,  967 => 670,  961 => 667,  949 => 666,  946 => 665,  943 => 664,  940 => 663,  937 => 662,  934 => 661,  931 => 660,  928 => 659,  925 => 658,  922 => 657,  919 => 656,  916 => 655,  913 => 654,  910 => 653,  905 => 652,  877 => 627,  857 => 610,  853 => 609,  844 => 603,  840 => 602,  836 => 601,  832 => 600,  828 => 599,  824 => 598,  815 => 592,  811 => 591,  785 => 568,  781 => 567,  771 => 560,  761 => 553,  757 => 552,  753 => 551,  743 => 544,  739 => 543,  727 => 533,  714 => 531,  710 => 530,  702 => 524,  689 => 522,  685 => 521,  676 => 515,  660 => 502,  641 => 486,  623 => 471,  619 => 470,  601 => 455,  579 => 436,  561 => 421,  543 => 406,  525 => 391,  505 => 374,  500 => 372,  496 => 371,  485 => 363,  462 => 343,  453 => 336,  440 => 335,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
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
                            {% set canReport = false %}
                            {% if not hasIssue and batch.purchaseItemId %}
                                {% if canReportIssue is defined and canReportIssue[batch.id] is defined %}
                                    {% set canReport = canReportIssue[batch.id] %}
                                {% endif %}
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
                                    {% if hasIssue %}
                                        <span class=\"badge {{ batch.issueStatusBadgeClass }}\">{{ batch.issueStatusLabel }}</span>
                                        {% if batch.issuePriority == 'critical' %}
                                            <span class=\"badge bg-danger mt-1 d-block issue-badge\">Critique</span>
                                        {% elseif batch.issuePriority == 'high' %}
                                            <span class=\"badge bg-warning text-dark mt-1 d-block issue-badge\">Haute</span>
                                        {% endif %}
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
                                        <a href=\"{{ path('app_admin_stock_batch_print', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\">
                                            <i class=\"fas fa-print\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                        </a>
                                        {% if canReport %}
                                            <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-sm btn-outline-danger\" title=\"Signaler un problème\">
                                                <i class=\"fas fa-exclamation-triangle\"></i>
                                            </a>
                                        {% elseif hasIssue and supplierCreditNotes[batch.id] is defined %}
                                            <a href=\"{{ path('app_supplier_credit_note_show', {'id': supplierCreditNotes[batch.id].id}) }}\" class=\"btn btn-sm btn-outline-info\" title=\"Voir l'avoir\">
                                                <i class=\"fas fa-file-invoice-dollar\"></i>
                                            </a>
                                        {% else %}
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" disabled title=\"Signalement non disponible\">
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

        <!-- ✅ Affichage en cartes pour mobile (md et moins) -->
        <div class=\"card-body p-2 p-sm-3 d-md-none table-card-view\">
            {% if batches|length > 0 %}
                {% for batch in batches %}
                    {% set isExpired = batch.expiryDate and batch.expiryDate < date() %}
                    {% set isExpiringSoon = batch.expiryDate and batch.expiryDate >= date() and batch.expiryDate < date('+30 days') %}
                    {% set isLowStock = batch.currentQuantity <= 10 %}
                    {% set hasIssue = batch.hasIssue %}
                    {% set locationDisplay = batch.locationEntity ? batch.locationEntity.displayName : (batch.location ?: '—') %}
                    {% set canReport = false %}
                    {% if not hasIssue and batch.purchaseItemId %}
                        {% if canReportIssue is defined and canReportIssue[batch.id] is defined %}
                            {% set canReport = canReportIssue[batch.id] %}
                        {% endif %}
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
                                    {% if hasIssue %}
                                        <span class=\"badge {{ batch.issueStatusBadgeClass }}\">{{ batch.issueStatusLabel }}</span>
                                        {% if batch.issuePriority == 'critical' %}
                                            <span class=\"badge bg-danger mt-1 issue-badge d-block\">Critique</span>
                                        {% elseif batch.issuePriority == 'high' %}
                                            <span class=\"badge bg-warning text-dark mt-1 issue-badge d-block\">Haute</span>
                                        {% endif %}
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
                            {% if canReport %}
                                <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-sm btn-outline-danger\" title=\"Signaler\">
                                    <i class=\"fas fa-exclamation-triangle\"></i> Signaler
                                </a>
                            {% elseif hasIssue and supplierCreditNotes[batch.id] is defined %}
                                <a href=\"{{ path('app_supplier_credit_note_show', {'id': supplierCreditNotes[batch.id].id}) }}\" class=\"btn btn-sm btn-outline-info\" title=\"Voir l'avoir\">
                                    <i class=\"fas fa-file-invoice-dollar\"></i> Avoir
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
                    {# Version mobile avec moins de pages #}
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

    // Impression sélection
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

    // Toggle batch (activation/désactivation)
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

    // Suppression
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
