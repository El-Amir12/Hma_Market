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
class __TwigTemplate_de8d76e62977a6181051b95af420d67a extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Gestion globale des lots - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 335
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 371), "query", [], "any", false, false, false, 371), "all", [], "any", false, false, false, 371)), "html", null, true);
        yield "\"><i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 372), "query", [], "any", false, false, false, 372), "all", [], "any", false, false, false, 372)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 391)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", false, false, false, 391), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 406)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", false, false, false, 406), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 421)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", false, false, false, 421), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 436)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", false, false, false, 436), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 455)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", false, false, false, 455), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "open_issues", [], "any", true, true, false, 470)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "open_issues", [], "any", false, false, false, 470), 0)) : (0)), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub text-muted mt-1 d-none d-sm-block\">";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_issue_amount", [], "any", true, true, false, 471)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_issue_amount", [], "any", false, false, false, 471), 0)) : (0)), ($context["hmaService"] ?? null)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "low_stock_batches", [], "any", true, true, false, 486)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "low_stock_batches", [], "any", false, false, false, 486), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 515)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 515), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Produit</label>
                        <select name=\"product_id\" id=\"product-select\" class=\"form-select form-select-sm select2-product\">
                            <option value=\"\">-- Tous --</option>
                            ";
        // line 521
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 522
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 522), "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "product_id", [], "any", true, true, false, 522)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "product_id", [], "any", false, false, false, 522), "")) : ("")) == CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 522))) ? ("selected") : (""));
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
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("all_locations", $context)) ? (Twig\Extension\CoreExtension::default(($context["all_locations"] ?? null), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 531
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 531)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", false, false, false, 531), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
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
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 543)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 543), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 544
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 544)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 544), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-4 col-md-3\">
                        <label class=\"form-label fw-bold small mb-1\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" ";
        // line 551
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 551)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 551), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                            <option value=\"expiring_soon\" ";
        // line 552
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 552)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 552), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Expire bientôt</option>
                            <option value=\"not_expiring\" ";
        // line 553
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 553)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 553), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-4 col-md-2\">
                        <label class=\"form-label fw-bold small mb-1\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 560
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 560)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", false, false, false, 560), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-4 col-md-2\">
                        <label class=\"form-label fw-bold small mb-1\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 567
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 567)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", false, false, false, 567), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">Avec</option>
                            <option value=\"no\" ";
        // line 568
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 568)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", false, false, false, 568), "")) : ("")) == "no")) ? ("selected") : (""));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 591)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 591), "")) : ("")), "html", null, true);
        yield "\">
                            <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" placeholder=\"Au\" value=\"";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 592)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 592), "")) : ("")), "html", null, true);
        yield "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-3 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Trier par</label>
                        <select name=\"sort\" class=\"form-select form-select-sm\">
                            <option value=\"batch_number\" ";
        // line 598
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 598)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 598), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                            <option value=\"p.name\" ";
        // line 599
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 599)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 599), "expiry_date")) : ("expiry_date")) == "p.name")) ? ("selected") : (""));
        yield ">Produit</option>
                            <option value=\"expiry_date\" ";
        // line 600
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 600)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 600), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Expiration</option>
                            <option value=\"current_quantity\" ";
        // line 601
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 601)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 601), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            <option value=\"location\" ";
        // line 602
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 602)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 602), "expiry_date")) : ("expiry_date")) == "location")) ? ("selected") : (""));
        yield ">Emplacement</option>
                            <option value=\"issue_status\" ";
        // line 603
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 603)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 603), "expiry_date")) : ("expiry_date")) == "issue_status")) ? ("selected") : (""));
        yield ">Statut avoir</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-3 col-md-4\">
                        <label class=\"form-label fw-bold small mb-1\">Ordre</label>
                        <select name=\"direction\" class=\"form-select form-select-sm\">
                            <option value=\"asc\" ";
        // line 609
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 609)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 609), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">Croissant ↑</option>
                            <option value=\"desc\" ";
        // line 610
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 610)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 610), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batches"] ?? null)), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["batches"] ?? null));
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
            $context["creditNote"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["supplierCreditNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 660), [], "array", true, true, false, 660) &&  !(null === (($_v0 = ($context["supplierCreditNotes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 660)] ?? null) : null)))) ? ((($_v1 = ($context["supplierCreditNotes"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 660)] ?? null) : null)) : (null));
            // line 661
            yield "                            ";
            // line 662
            yield "                            ";
            $context["realIssueStatus"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 662)) : (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatus", [], "any", false, false, false, 662)));
            // line 663
            yield "                            
                            ";
            // line 665
            yield "                            ";
            if (((($context["realIssueStatus"] ?? null) == "recovered") || (($context["realIssueStatus"] ?? null) == "resolved"))) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "pending")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "acknowledged")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "under_review")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "partially_recovered")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "lost")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "closed")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "rejected")) {
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
                $context["issueLabel"] = Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["realIssueStatus"] ?? null), ["_" => " "]));
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
            $context["purchaseItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 703), [], "array", true, true, false, 703)) ? ((($_v2 = ($context["purchaseItems"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 703)] ?? null) : null)) : (null));
            // line 704
            yield "                            
                            <tr class=\"";
            // line 705
            if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-danger";
            } elseif ((($tmp = ($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-warning";
            } elseif ((($tmp = ($context["isLowStock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-info";
            } elseif ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["purchaseMap"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 714)] ?? null) : null), "html", null, true);
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
                if ((($context["purchaseItem"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 719))) {
                    // line 720
                    yield "                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                                    ";
                    // line 722
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 722), "createdAt", [], "any", false, false, false, 722), "d/m/Y"), "html", null, true);
                    yield "
                                                </small>
                                                ";
                    // line 724
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 724), "supplier", [], "any", false, false, false, 724)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 725
                        yield "                                                    <small class=\"text-muted\">
                                                        <i class=\"fas fa-truck me-1\"></i>
                                                        ";
                        // line 727
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 727), "supplier", [], "any", false, true, false, 727), "name", [], "any", true, true, false, 727)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 727), "supplier", [], "any", false, false, false, 727), "name", [], "any", false, false, false, 727), "")) : ("")), "html", null, true);
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
            if ((($context["locationDisplay"] ?? null) != "—")) {
                // line 740
                yield "                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["locationDisplay"] ?? null)), "truncate", [15], "method", false, false, false, 740), "html", null, true);
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
            if ((($tmp = ($context["isLowStock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 768
                    yield "                                                <br><span class=\"badge bg-danger mt-1 issue-badge\">Expiré</span>
                                            ";
                } elseif ((($tmp =                 // line 769
($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($context["hasIssue"] ?? null) && ($context["creditNote"] ?? null))) {
                // line 780
                yield "                                        <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueBadgeClass"] ?? null), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 781
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueIcon"] ?? null), "html", null, true);
                yield " me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueLabel"] ?? null), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "declaredAmount", [], "any", false, false, false, 788), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 788)), "html", null, true);
                yield "</small>
                                    ";
            } elseif ((($tmp =             // line 789
($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["canReportIssue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 827), [], "array", true, true, false, 827) &&  !(null === (($_v4 = ($context["canReportIssue"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 827)] ?? null) : null)))) ? ((($_v5 = ($context["canReportIssue"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 827)] ?? null) : null)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 834
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "id", [], "any", false, false, false, 834)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm 
                                                   ";
                // line 836
                if (CoreExtension::inFilter(($context["realIssueStatus"] ?? null), ["recovered", "resolved"])) {
                    yield "btn-success
                                                   ";
                } elseif ((                // line 837
($context["realIssueStatus"] ?? null) == "pending")) {
                    yield "btn-warning
                                                   ";
                } elseif (CoreExtension::inFilter(                // line 838
($context["realIssueStatus"] ?? null), ["rejected", "lost"])) {
                    yield "btn-danger
                                                   ";
                } else {
                    // line 839
                    yield "btn-info";
                }
                yield "\" 
                                               title=\"Voir l'avoir (";
                // line 840
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueLabel"] ?? null), "html", null, true);
                yield ")\"
                                               target=\"_blank\">
                                                <i class=\"fas ";
                // line 842
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueIcon"] ?? null), "html", null, true);
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batches"] ?? null)) > 0)) {
            // line 893
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["batches"] ?? null));
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
                $context["creditNote"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["supplierCreditNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 901), [], "array", true, true, false, 901) &&  !(null === (($_v6 = ($context["supplierCreditNotes"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 901)] ?? null) : null)))) ? ((($_v7 = ($context["supplierCreditNotes"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 901)] ?? null) : null)) : (null));
                // line 902
                yield "                    ";
                $context["realIssueStatus"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 902)) : (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatus", [], "any", false, false, false, 902)));
                // line 903
                yield "                    
                    ";
                // line 904
                if (((($context["realIssueStatus"] ?? null) == "recovered") || (($context["realIssueStatus"] ?? null) == "resolved"))) {
                    // line 905
                    yield "                        ";
                    $context["issueBadgeClass"] = "bg-success";
                    // line 906
                    yield "                        ";
                    $context["issueLabel"] = "Récupéré";
                    // line 907
                    yield "                    ";
                } elseif ((($context["realIssueStatus"] ?? null) == "pending")) {
                    // line 908
                    yield "                        ";
                    $context["issueBadgeClass"] = "bg-warning text-dark";
                    // line 909
                    yield "                        ";
                    $context["issueLabel"] = "En attente";
                    // line 910
                    yield "                    ";
                } elseif (((($context["realIssueStatus"] ?? null) == "lost") || (($context["realIssueStatus"] ?? null) == "rejected"))) {
                    // line 911
                    yield "                        ";
                    $context["issueBadgeClass"] = "bg-danger";
                    // line 912
                    yield "                        ";
                    $context["issueLabel"] = (((($context["realIssueStatus"] ?? null) == "lost")) ? ("Perdu") : ("Rejeté"));
                    // line 913
                    yield "                    ";
                } elseif ((($context["realIssueStatus"] ?? null) == "closed")) {
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
                    $context["issueLabel"] = Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["realIssueStatus"] ?? null), ["_" => " "]));
                    // line 919
                    yield "                    ";
                }
                // line 920
                yield "                    
                    ";
                // line 921
                $context["purchaseItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 921), [], "array", true, true, false, 921)) ? ((($_v8 = ($context["purchaseItems"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 921)] ?? null) : null)) : (null));
                // line 922
                yield "                    
                    <div class=\"batch-card ";
                // line 923
                if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-expired";
                } elseif ((($tmp = ($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-expiring";
                } elseif ((($tmp = ($context["isLowStock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "status-low";
                } elseif ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                if ((($context["locationDisplay"] ?? null) != "—")) {
                    // line 944
                    yield "                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["locationDisplay"] ?? null)), "truncate", [12], "method", false, false, false, 944), "html", null, true);
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
                if ((($tmp = ($context["isLowStock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                    if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 978
                        yield "                                            <span class=\"badge bg-danger mt-1 issue-badge d-block\">Expiré</span>
                                        ";
                    } elseif ((($tmp =                     // line 979
($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                if ((($context["hasIssue"] ?? null) && ($context["creditNote"] ?? null))) {
                    // line 992
                    yield "                                        <span class=\"badge ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueBadgeClass"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueLabel"] ?? null), "html", null, true);
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
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "declaredAmount", [], "any", false, false, false, 998), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 998)), "html", null, true);
                    yield "</small>
                                    ";
                } elseif ((($tmp =                 // line 999
($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["purchaseMap"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 1013)] ?? null) : null), "html", null, true);
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
                    if ((($context["purchaseItem"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 1017))) {
                        // line 1018
                        yield "                                        — ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 1018), "createdAt", [], "any", false, false, false, 1018), "d/m/Y"), "html", null, true);
                        yield "
                                        ";
                        // line 1019
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 1019), "supplier", [], "any", false, false, false, 1019)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1020
                            yield "                                            — ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 1020), "supplier", [], "any", false, true, false, 1020), "name", [], "any", true, true, false, 1020)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 1020), "supplier", [], "any", false, false, false, 1020), "name", [], "any", false, false, false, 1020), "")) : ("")), "html", null, true);
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
                if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["canReportIssue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1037), [], "array", true, true, false, 1037) &&  !(null === (($_v10 = ($context["canReportIssue"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1037)] ?? null) : null)))) ? ((($_v11 = ($context["canReportIssue"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1037)] ?? null) : null)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1038
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 1038)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-danger\" title=\"Signaler\">
                                    <i class=\"fas fa-exclamation-triangle\"></i> Signaler
                                </a>
                            ";
                } elseif ((($tmp =                 // line 1041
($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1042
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "id", [], "any", false, false, false, 1042)]), "html", null, true);
                    yield "\" 
                                   class=\"btn btn-sm 
                                       ";
                    // line 1044
                    if (CoreExtension::inFilter(($context["realIssueStatus"] ?? null), ["recovered", "resolved"])) {
                        yield "btn-success
                                       ";
                    } elseif ((                    // line 1045
($context["realIssueStatus"] ?? null) == "pending")) {
                        yield "btn-warning
                                       ";
                    } elseif (CoreExtension::inFilter(                    // line 1046
($context["realIssueStatus"] ?? null), ["rejected", "lost"])) {
                        yield "btn-danger
                                       ";
                    } else {
                        // line 1047
                        yield "btn-info";
                    }
                    yield "\">
                                    <i class=\"fas fa-file-invoice-dollar\"></i> Avoir (";
                    // line 1048
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueLabel"] ?? null), "html", null, true);
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
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 1062)) == 0)) &&  !($context["hasIssue"] ?? null))) {
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
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 1083
            yield "        <div class=\"card-footer bg-white p-2 p-md-3\">
            <nav>
                <ul class=\"pagination justify-content-center mb-0 flex-wrap\">
                    ";
            // line 1086
            if ((($context["currentPage"] ?? null) > 1)) {
                // line 1087
                yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1087), "query", [], "any", false, false, false, 1087), "all", [], "any", false, false, false, 1087), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
                yield "\"><i class=\"fas fa-chevron-left\"></i> <span class=\"d-none d-sm-inline\">Précédent</span></a></li>
                    ";
            }
            // line 1089
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 1090
                yield "                        <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield " d-none d-sm-block\">
                            <a class=\"page-link\" href=\"";
                // line 1091
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1091), "query", [], "any", false, false, false, 1091), "all", [], "any", false, false, false, 1091), ["page" => $context["page"]])), "html", null, true);
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
            if ((($context["totalPages"] ?? null) > 5)) {
                // line 1095
                yield "                        <li class=\"page-item d-block d-sm-none\">
                            <span class=\"page-link\">";
                // line 1096
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                yield "</span>
                        </li>
                    ";
            }
            // line 1099
            yield "                    ";
            if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 1100
                yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1100), "query", [], "any", false, false, false, 1100), "all", [], "any", false, false, false, 1100), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
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
        yield from [];
    }

    // line 1206
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  2092 => 1207,  2085 => 1206,  2017 => 1142,  1979 => 1106,  1973 => 1102,  1967 => 1100,  1964 => 1099,  1956 => 1096,  1953 => 1095,  1950 => 1094,  1939 => 1091,  1934 => 1090,  1929 => 1089,  1923 => 1087,  1921 => 1086,  1916 => 1083,  1914 => 1082,  1910 => 1080,  1902 => 1074,  1899 => 1073,  1891 => 1070,  1884 => 1066,  1880 => 1065,  1876 => 1064,  1873 => 1063,  1871 => 1062,  1866 => 1060,  1862 => 1059,  1858 => 1058,  1854 => 1057,  1850 => 1056,  1847 => 1055,  1841 => 1051,  1835 => 1048,  1830 => 1047,  1825 => 1046,  1821 => 1045,  1817 => 1044,  1811 => 1042,  1809 => 1041,  1802 => 1038,  1800 => 1037,  1794 => 1034,  1788 => 1031,  1782 => 1028,  1778 => 1026,  1773 => 1023,  1770 => 1022,  1764 => 1020,  1762 => 1019,  1757 => 1018,  1754 => 1017,  1748 => 1015,  1742 => 1013,  1740 => 1012,  1734 => 1008,  1732 => 1007,  1728 => 1005,  1724 => 1003,  1719 => 1001,  1712 => 1000,  1710 => 999,  1705 => 998,  1701 => 996,  1699 => 995,  1696 => 994,  1694 => 993,  1687 => 992,  1684 => 991,  1677 => 985,  1673 => 983,  1670 => 982,  1664 => 980,  1662 => 979,  1659 => 978,  1657 => 977,  1652 => 976,  1650 => 975,  1642 => 970,  1636 => 966,  1632 => 964,  1630 => 963,  1624 => 960,  1619 => 959,  1614 => 958,  1610 => 957,  1604 => 954,  1600 => 953,  1593 => 948,  1589 => 946,  1583 => 944,  1581 => 943,  1570 => 937,  1563 => 932,  1559 => 930,  1555 => 928,  1553 => 927,  1547 => 926,  1541 => 925,  1528 => 923,  1525 => 922,  1523 => 921,  1520 => 920,  1517 => 919,  1514 => 918,  1511 => 917,  1508 => 916,  1505 => 915,  1502 => 914,  1499 => 913,  1496 => 912,  1493 => 911,  1490 => 910,  1487 => 909,  1484 => 908,  1481 => 907,  1478 => 906,  1475 => 905,  1473 => 904,  1470 => 903,  1467 => 902,  1464 => 901,  1461 => 899,  1458 => 898,  1455 => 897,  1452 => 896,  1449 => 895,  1446 => 894,  1441 => 893,  1439 => 892,  1430 => 885,  1417 => 877,  1415 => 876,  1408 => 873,  1401 => 869,  1397 => 868,  1393 => 867,  1389 => 865,  1386 => 864,  1380 => 860,  1376 => 859,  1372 => 858,  1368 => 857,  1364 => 856,  1360 => 854,  1357 => 852,  1348 => 845,  1342 => 842,  1337 => 840,  1332 => 839,  1327 => 838,  1323 => 837,  1319 => 836,  1313 => 834,  1311 => 833,  1302 => 828,  1299 => 827,  1289 => 820,  1279 => 813,  1268 => 805,  1260 => 799,  1256 => 798,  1252 => 796,  1248 => 794,  1243 => 792,  1238 => 791,  1236 => 790,  1234 => 789,  1229 => 788,  1225 => 786,  1223 => 785,  1220 => 784,  1218 => 783,  1211 => 781,  1206 => 780,  1203 => 779,  1199 => 776,  1195 => 774,  1191 => 772,  1185 => 770,  1183 => 769,  1180 => 768,  1178 => 767,  1174 => 766,  1171 => 765,  1169 => 764,  1164 => 762,  1160 => 760,  1156 => 758,  1154 => 757,  1148 => 754,  1143 => 753,  1138 => 752,  1134 => 751,  1128 => 748,  1124 => 747,  1119 => 744,  1115 => 742,  1109 => 740,  1107 => 739,  1101 => 736,  1095 => 735,  1090 => 732,  1087 => 731,  1084 => 730,  1078 => 727,  1074 => 725,  1072 => 724,  1067 => 722,  1063 => 720,  1061 => 719,  1058 => 718,  1052 => 716,  1046 => 714,  1044 => 713,  1040 => 711,  1038 => 710,  1034 => 709,  1028 => 706,  1016 => 705,  1013 => 704,  1011 => 703,  1008 => 702,  1005 => 701,  1002 => 700,  999 => 699,  996 => 698,  993 => 697,  990 => 696,  987 => 695,  984 => 694,  981 => 693,  978 => 692,  975 => 691,  972 => 690,  969 => 689,  966 => 688,  963 => 687,  960 => 686,  957 => 685,  954 => 684,  951 => 683,  948 => 682,  945 => 681,  942 => 680,  939 => 679,  936 => 678,  933 => 677,  930 => 676,  927 => 675,  924 => 674,  921 => 673,  918 => 672,  915 => 671,  912 => 670,  909 => 669,  906 => 668,  903 => 667,  900 => 666,  897 => 665,  894 => 663,  891 => 662,  889 => 661,  886 => 660,  883 => 658,  880 => 657,  877 => 656,  874 => 655,  871 => 654,  868 => 653,  863 => 652,  835 => 627,  815 => 610,  811 => 609,  802 => 603,  798 => 602,  794 => 601,  790 => 600,  786 => 599,  782 => 598,  773 => 592,  769 => 591,  743 => 568,  739 => 567,  729 => 560,  719 => 553,  715 => 552,  711 => 551,  701 => 544,  697 => 543,  685 => 533,  672 => 531,  668 => 530,  660 => 524,  647 => 522,  643 => 521,  634 => 515,  618 => 502,  599 => 486,  581 => 471,  577 => 470,  559 => 455,  537 => 436,  519 => 421,  501 => 406,  483 => 391,  463 => 374,  458 => 372,  454 => 371,  443 => 363,  420 => 343,  411 => 336,  404 => 335,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/stock_batch/all.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\all.html.twig");
    }
}
