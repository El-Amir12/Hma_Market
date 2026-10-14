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

/* admin/stock_batch/index.html.twig */
class __TwigTemplate_e8db5e5089294e286d9f5c51fc5add96 extends Template
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
        yield "Gestion des lots - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
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
    /* ========================================
       CARTES DES LOTS (BATCH CARDS)
    ======================================== */
    .batch-card {
        transition: all 0.3s ease;
        border-left: 4px solid #0463f1;
        margin-bottom: 1rem;
        border-radius: 1rem;
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-left-width: 4px;
    }
    .batch-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .batch-card.has-issue {
        border-left-color: #dc3545;
        background-color: #fff5f5;
    }
    .batch-card.expired {
        border-left-color: #6c757d;
        background-color: #f8f9fa;
    }
    .batch-card .card-header {
        background: #ffffff !important;
        padding: 0.5rem 0.75rem;
    }
    .batch-card .card-body {
        padding: 0.5rem 0.75rem;
    }
    .batch-card .card-footer {
        background: #ffffff !important;
        padding: 0.3rem 0.75rem;
    }
    @media (min-width: 768px) {
        .batch-card .card-header {
            padding: 0.75rem 1rem;
        }
        .batch-card .card-body {
            padding: 0.75rem 1rem;
        }
        .batch-card .card-footer {
            padding: 0.5rem 1rem;
        }
    }
    .batch-card .alert-light {
        background-color: #f8f9fa;
        color: #212529;
    }

    /* ========================================
       CARTES DE STATISTIQUES
    ======================================== */
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        overflow: hidden;
        border: none;
        color: #ffffff !important;
        height: 100%;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    .stat-card .card-body {
        padding: 0.75rem;
        color: #ffffff !important;
    }
    @media (min-width: 768px) {
        .stat-card .card-body {
            padding: 1.25rem;
        }
    }
    .stat-card .stat-value {
        font-size: 1.3rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.2;
        color: #ffffff !important;
    }
    @media (min-width: 768px) {
        .stat-card .stat-value {
            font-size: 1.8rem;
        }
    }
    .stat-card .stat-label {
        font-size: 0.55rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.85) !important;
    }
    @media (min-width: 768px) {
        .stat-card .stat-label {
            font-size: 0.7rem;
        }
    }
    .stat-card .stat-icon {
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
        background: rgba(255, 255, 255, 0.2);
        flex-shrink: 0;
    }
    @media (min-width: 768px) {
        .stat-card .stat-icon {
            width: 50px;
            height: 50px;
        }
    }
    .stat-card .stat-icon i {
        color: #ffffff !important;
        font-size: 1.2rem;
    }
    @media (min-width: 768px) {
        .stat-card .stat-icon i {
            font-size: 1.8rem;
        }
    }

    /* Couleurs des cartes de statistiques */
    .stat-card-primary {
        background: linear-gradient(135deg, #0463f1, #0a7aff) !important;
    }
    .stat-card-success {
        background: linear-gradient(135deg, #28a745, #34ce57) !important;
    }
    .stat-card-inactive {
        background: linear-gradient(135deg, #fd7e14, #ff9a44) !important;
    }
    .stat-card-info {
        background: linear-gradient(135deg, #17a2b8, #20c997) !important;
    }
    .stat-card-danger {
        background: linear-gradient(135deg, #dc3545, #e74c6f) !important;
    }
    .stat-card-warning {
        background: linear-gradient(135deg, #ffc107, #ffda6a) !important;
    }
    .stat-card-secondary {
        background: linear-gradient(135deg, #6c757d, #8a929b) !important;
    }

    /* ========================================
       ELEMENTS COMMUNS
    ======================================== */
    .badge {
        font-weight: 500;
        padding: 0.2rem 0.4rem;
        font-size: 0.6rem;
    }
    @media (min-width: 768px) {
        .badge {
            padding: 0.4rem 0.6rem;
            font-size: 0.75rem;
        }
    }
    .progress {
        border-radius: 10px;
        overflow: hidden;
        height: 4px;
    }
    @media (min-width: 768px) {
        .progress {
            height: 6px;
        }
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
    .filters-card {
        border-radius: 1rem;
    }
    .filters-card .card-header {
        background: #ffffff !important;
        padding: 0.5rem 0.75rem;
    }
    .filters-card .card-body {
        background: #ffffff !important;
        padding: 0.5rem 0.75rem;
    }
    @media (min-width: 768px) {
        .filters-card .card-header {
            padding: 0.75rem 1rem;
        }
        .filters-card .card-body {
            padding: 0.75rem 1rem;
        }
    }

    /* ========================================
       CLASSES POUR FILTRES RESPONSIVE
    ======================================== */
    .filter-col {
        flex: 0 0 100% !important;
        max-width: 100% !important;
        width: 100% !important;
    }
    .filter-col-half {
        flex: 0 0 50% !important;
        max-width: 50% !important;
        width: 50% !important;
    }
    .filter-col-third {
        flex: 0 0 33.333% !important;
        max-width: 33.333% !important;
        width: 33.333% !important;
    }
    .filter-select {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 100% !important;
        flex: 1 1 100% !important;
    }
    .filter-label {
        display: block !important;
        width: 100% !important;
    }

    /* ========================================
       RESPONSIVE
    ======================================== */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        .h1 {
            font-size: 1.3rem !important;
        }
        .h3 {
            font-size: 1.1rem !important;
        }
        .h5 {
            font-size: 0.85rem !important;
        }
        .h6 {
            font-size: 0.75rem !important;
        }
        .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .btn i {
            font-size: 0.65rem !important;
        }
        .form-control, .form-select {
            font-size: 0.7rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .form-label {
            font-size: 0.6rem !important;
        }
        .breadcrumb {
            font-size: 0.6rem !important;
        }
        .modal-body {
            padding: 0.75rem !important;
        }
        .modal-footer {
            padding: 0.5rem !important;
        }
        .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
        .badge {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        .batch-card .card-header {
            padding: 0.3rem 0.5rem !important;
        }
        .batch-card .card-body {
            padding: 0.3rem 0.5rem !important;
        }
        .batch-card .card-footer {
            padding: 0.2rem 0.5rem !important;
        }
        .stat-card .card-body {
            padding: 0.5rem !important;
        }
        .stat-card .stat-value {
            font-size: 1.1rem !important;
        }
        .stat-card .stat-label {
            font-size: 0.45rem !important;
        }
        .stat-card .stat-icon {
            width: 28px !important;
            height: 28px !important;
        }
        .stat-card .stat-icon i {
            font-size: 0.9rem !important;
        }
        .dropdown-menu {
            font-size: 0.7rem !important;
        }
        .dropdown-item {
            padding: 0.2rem 0.5rem !important;
        }

        /* ✅ CORRECTION : TOUS LES FILTRES PRENNENT 100% SUR MOBILE */
        .filter-col,
        .filter-col-half,
        .filter-col-third {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        .filter-select {
            font-size: 0.7rem !important;
            padding: 0.2rem 0.3rem !important;
        }
        .filter-label {
            font-size: 0.6rem !important;
        }
    }

    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        .stat-card .stat-value {
            font-size: 1.4rem !important;
        }
        .stat-card .stat-icon {
            width: 40px !important;
            height: 40px !important;
        }
        .stat-card .stat-icon i {
            font-size: 1.4rem !important;
        }
        
        /* ✅ SUR TABLETTE : 2 COLONNES */
        .filter-col-half {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
        .filter-col-third {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
    }

    /* Modal responsive */
    @media (max-width: 576px) {
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-footer .btn {
            font-size: 0.7rem !important;
            padding: 0.2rem 0.5rem !important;
        }
    }
</style>
";
        yield from [];
    }

    // line 385
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 386
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 396
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 401)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 402)), "truncate", [20], "method", false, false, false, 402), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">Lots</li>
                </ol>
            </nav>
            <h1 class=\"h4 h-md-3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-primary\"></i>
                Lots de stock - ";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 410)), "truncate", [25], "method", false, false, false, 410), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Les lots sont créés automatiquement lors des achats.
            </p>
        </div>
        <div class=\"d-flex gap-1 gap-md-2 flex-wrap\">
            <a href=\"";
        // line 418
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"btn btn-outline-info btn-sm\">
                <i class=\"fas fa-map-marker-alt me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Emplacements</span>
            </a>
            <a href=\"";
        // line 421
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
        yield "\" class=\"btn btn-success btn-sm\">
                <i class=\"fas fa-cart-plus me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Nouvel achat</span>
            </a>
            <a href=\"";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 424)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
        </div>
    </div>

    <!-- ==========================================
         STATISTIQUES - 7 CARTES (3 + 4)
    ========================================== -->
    <!-- Ligne 1 : 3 cartes -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-sm-6 col-md-4\">
            <div class=\"card stat-card stat-card-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total lots</div>
                            <div class=\"stat-value\">";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 444)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", false, false, false, 444), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-boxes\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-6 col-sm-6 col-md-4\">
            <div class=\"card stat-card stat-card-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots actifs</div>
                            <div class=\"stat-value\">";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 460)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", false, false, false, 460), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-play-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-sm-6 col-md-4\">
            <div class=\"card stat-card stat-card-inactive shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots inactifs</div>
                            <div class=\"stat-value\">";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactive_batches", [], "any", true, true, false, 476)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactive_batches", [], "any", false, false, false, 476), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-pause-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ligne 2 : 4 cartes -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card stat-card-info shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Unités en stock</div>
                            <div class=\"stat-value\">";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 495)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", false, false, false, 495), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card stat-card-danger shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots expirés</div>
                            <div class=\"stat-value\">";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 511)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", false, false, false, 511), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-calendar-times\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card stat-card-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Expire bientôt</div>
                            <div class=\"stat-value\">";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 527)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", false, false, false, 527), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-hourglass-half\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-6 col-sm-6 col-md-3\">
            <div class=\"card stat-card stat-card-secondary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Avoirs signalés</div>
                            <div class=\"stat-value\">";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "has_issue_count", [], "any", true, true, false, 543)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "has_issue_count", [], "any", false, false, false, 543), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-file-invoice-dollar\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         FILTRES
    ========================================== -->
    <div class=\"card border-0 shadow-sm mb-3 mb-md-4 filters-card\">
        <div class=\"card-header py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"";
        // line 563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 563)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <!-- LIGNE 1 -->
                <div class=\"row g-2 g-md-3\">
                    <div class=\"col-12 col-md-3 filter-col\">
                        <label class=\"form-label fw-semibold small filter-label\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control form-control-sm filter-select\" placeholder=\"N° lot...\" value=\"";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 577)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 577), "")) : ("")), "html", null, true);
        yield "\">
                    </div>

                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 584
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 584)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 584), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 585
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 585)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 585), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>

                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" ";
        // line 593
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 593)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 593), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                            <option value=\"expiring_soon\" ";
        // line 594
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 594)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 594), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Bientôt</option>
                            <option value=\"not_expiring\" ";
        // line 595
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 595)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 595), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                        </select>
                    </div>

                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 603
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 603)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", false, false, false, 603), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10</option>
                        </select>
                    </div>

                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select form-select-sm select2-location filter-select\">
                            <option value=\"\">-- Tous --</option>
                            ";
        // line 611
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 612
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 612)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", false, false, false, 612), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($context["loc"]), "truncate", [15], "method", false, false, false, 612), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 614
        yield "                        </select>
                    </div>
                </div>

                <!-- LIGNE 2 -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 624
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 624)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", false, false, false, 624), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">Avec avoir</option>
                            <option value=\"no\" ";
        // line 625
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 625)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", false, false, false, 625), "")) : ("")) == "no")) ? ("selected") : (""));
        yield ">Sans avoir</option>
                        </select>
                    </div>

                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Statut avoir</label>
                        <select name=\"issue_status\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"pending\" ";
        // line 633
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", true, true, false, 633)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 633), "")) : ("")) == "pending")) ? ("selected") : (""));
        yield ">En attente</option>
                            <option value=\"acknowledged\" ";
        // line 634
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", true, true, false, 634)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 634), "")) : ("")) == "acknowledged")) ? ("selected") : (""));
        yield ">Accusé</option>
                            <option value=\"under_review\" ";
        // line 635
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", true, true, false, 635)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 635), "")) : ("")) == "under_review")) ? ("selected") : (""));
        yield ">En analyse</option>
                            <option value=\"partially_recovered\" ";
        // line 636
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", true, true, false, 636)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 636), "")) : ("")) == "partially_recovered")) ? ("selected") : (""));
        yield ">Partiel</option>
                            <option value=\"recovered\" ";
        // line 637
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", true, true, false, 637)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 637), "")) : ("")) == "recovered")) ? ("selected") : (""));
        yield ">Récupéré</option>
                            <option value=\"lost\" ";
        // line 638
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", true, true, false, 638)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 638), "")) : ("")) == "lost")) ? ("selected") : (""));
        yield ">Perdu</option>
                            <option value=\"closed\" ";
        // line 639
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", true, true, false, 639)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 639), "")) : ("")) == "closed")) ? ("selected") : (""));
        yield ">Clôturé</option>
                        </select>
                    </div>

                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Expiration du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm filter-select\" value=\"";
        // line 645
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 645)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 645), "")) : ("")), "html", null, true);
        yield "\">
                    </div>

                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Expiration au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm filter-select\" value=\"";
        // line 650
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 650)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 650), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                </div>

                <!-- LIGNE 3 -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-6 col-md-6 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Trier par</label>
                        <select name=\"sort\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"batch_number\" ";
        // line 659
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 659)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 659), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                            <option value=\"expiry_date\" ";
        // line 660
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 660)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 660), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Date expiration</option>
                            <option value=\"current_quantity\" ";
        // line 661
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 661)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 661), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            <option value=\"created_at\" ";
        // line 662
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 662)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 662), "expiry_date")) : ("expiry_date")) == "created_at")) ? ("selected") : (""));
        yield ">Date création</option>
                        </select>
                    </div>

                    <div class=\"col-6 col-md-6 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Ordre</label>
                        <select name=\"direction\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"asc\" ";
        // line 669
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 669)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 669), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">↑ Croissant</option>
                            <option value=\"desc\" ";
        // line 670
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 670)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 670), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
        yield ">↓ Décroissant</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         LISTE DES LOTS EN CARTES
    ========================================== -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        ";
        // line 682
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["batches"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 683
            yield "            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 683) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 683) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 684
            yield "            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 684) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 684) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 684) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 685
            yield "            ";
            $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 685) <= 10);
            // line 686
            yield "            ";
            $context["hasIssue"] = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 686);
            // line 687
            yield "            ";
            $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 687)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 687), "displayName", [], "any", false, false, false, 687)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 687)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 687)) : ("—"))));
            // line 688
            yield "
            ";
            // line 689
            $context["canReport"] = false;
            // line 690
            yield "            ";
            if (( !($context["hasIssue"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 690))) {
                // line 691
                yield "                ";
                if ((array_key_exists("canReportIssue", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["canReportIssue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 691), [], "array", true, true, false, 691))) {
                    // line 692
                    yield "                    ";
                    $context["canReport"] = (($_v0 = ($context["canReportIssue"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 692)] ?? null) : null);
                    // line 693
                    yield "                ";
                }
                // line 694
                yield "            ";
            }
            // line 695
            yield "
            ";
            // line 697
            yield "            ";
            $context["creditNote"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["supplierCreditNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 697), [], "array", true, true, false, 697)) ? ((($_v1 = ($context["supplierCreditNotes"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 697)] ?? null) : null)) : (null));
            // line 698
            yield "            ";
            $context["realIssueStatus"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 698)) : (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatus", [], "any", false, false, false, 698)));
            // line 699
            yield "            ";
            $context["realDeclaredAmount"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "declaredAmount", [], "any", false, false, false, 699)) : (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 699)));
            // line 700
            yield "
            ";
            // line 702
            yield "            ";
            if (((($context["realIssueStatus"] ?? null) == "recovered") || (($context["realIssueStatus"] ?? null) == "resolved"))) {
                // line 703
                yield "                ";
                $context["issueBadgeClass"] = "bg-success";
                // line 704
                yield "                ";
                $context["issueLabel"] = "Récupéré";
                // line 705
                yield "                ";
                $context["issueIcon"] = "fa-check-circle";
                // line 706
                yield "            ";
            } elseif ((($context["realIssueStatus"] ?? null) == "pending")) {
                // line 707
                yield "                ";
                $context["issueBadgeClass"] = "bg-warning text-dark";
                // line 708
                yield "                ";
                $context["issueLabel"] = "En attente";
                // line 709
                yield "                ";
                $context["issueIcon"] = "fa-clock";
                // line 710
                yield "            ";
            } elseif ((($context["realIssueStatus"] ?? null) == "acknowledged")) {
                // line 711
                yield "                ";
                $context["issueBadgeClass"] = "bg-info";
                // line 712
                yield "                ";
                $context["issueLabel"] = "Accusé réception";
                // line 713
                yield "                ";
                $context["issueIcon"] = "fa-check";
                // line 714
                yield "            ";
            } elseif ((($context["realIssueStatus"] ?? null) == "under_review")) {
                // line 715
                yield "                ";
                $context["issueBadgeClass"] = "bg-info";
                // line 716
                yield "                ";
                $context["issueLabel"] = "En analyse";
                // line 717
                yield "                ";
                $context["issueIcon"] = "fa-search";
                // line 718
                yield "            ";
            } elseif ((($context["realIssueStatus"] ?? null) == "partially_recovered")) {
                // line 719
                yield "                ";
                $context["issueBadgeClass"] = "bg-warning text-dark";
                // line 720
                yield "                ";
                $context["issueLabel"] = "Partiel. récupéré";
                // line 721
                yield "                ";
                $context["issueIcon"] = "fa-hourglass-half";
                // line 722
                yield "            ";
            } elseif ((($context["realIssueStatus"] ?? null) == "lost")) {
                // line 723
                yield "                ";
                $context["issueBadgeClass"] = "bg-danger";
                // line 724
                yield "                ";
                $context["issueLabel"] = "Perdu";
                // line 725
                yield "                ";
                $context["issueIcon"] = "fa-times-circle";
                // line 726
                yield "            ";
            } elseif ((($context["realIssueStatus"] ?? null) == "rejected")) {
                // line 727
                yield "                ";
                $context["issueBadgeClass"] = "bg-danger";
                // line 728
                yield "                ";
                $context["issueLabel"] = "Rejeté";
                // line 729
                yield "                ";
                $context["issueIcon"] = "fa-ban";
                // line 730
                yield "            ";
            } elseif ((($context["realIssueStatus"] ?? null) == "closed")) {
                // line 731
                yield "                ";
                $context["issueBadgeClass"] = "bg-secondary";
                // line 732
                yield "                ";
                $context["issueLabel"] = "Clôturé";
                // line 733
                yield "                ";
                $context["issueIcon"] = "fa-archive";
                // line 734
                yield "            ";
            } else {
                // line 735
                yield "                ";
                $context["issueBadgeClass"] = "bg-secondary";
                // line 736
                yield "                ";
                $context["issueLabel"] = Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["realIssueStatus"] ?? null), ["_" => " "]));
                // line 737
                yield "                ";
                $context["issueIcon"] = "fa-exclamation-triangle";
                // line 738
                yield "            ";
            }
            // line 739
            yield "
            <div class=\"col-12 col-sm-6 col-lg-6 col-xl-4\">
                <div class=\"card batch-card h-100 shadow-sm ";
            // line 741
            if ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "has-issue";
            } elseif ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "expired";
            }
            yield "\">
                    <!-- En-tête -->
                    <div class=\"card-header d-flex flex-wrap justify-content-between align-items-center gap-2\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 745
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 745), "html", null, true);
            yield "\" id=\"batch_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 745), "html", null, true);
            yield "\" style=\"width:14px;height:14px;\">
                            <div>
                                <h6 class=\"mb-0 fw-bold fs-6 fs-md-5\">";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 747), "html", null, true);
            yield "</h6>
                                <small class=\"text-muted small\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i>";
            // line 749
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "createdAt", [], "any", false, false, false, 749), "d/m/Y"), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-ellipsis-v\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end shadow-sm\">
                                <li>
                                    <a class=\"dropdown-item small\" href=\"";
            // line 759
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 759)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2 text-info\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item small\" href=\"";
            // line 764
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 764)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2 text-warning\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item small\" href=\"";
            // line 769
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 769)]), "html", null, true);
            yield "\" target=\"_blank\">
                                        <i class=\"fas fa-print me-2 text-secondary\"></i> Imprimer
                                    </a>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 775
            if ((($tmp = ($context["canReport"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 776
                yield "                                        <a class=\"dropdown-item text-danger small\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 776)]), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Signaler
                                            ";
                // line 778
                if ((array_key_exists("purchaseItems", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 778), [], "array", true, true, false, 778))) {
                    // line 779
                    yield "                                                ";
                    $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["purchaseItems"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 779)] ?? null) : null), "purchase", [], "any", false, false, false, 779);
                    // line 780
                    yield "                                                ";
                    if ((($context["purchase"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 780))) {
                        // line 781
                        yield "                                                    ";
                        $context["daysRemaining"] = (30 - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 781)], "method", false, false, false, 781), "days", [], "any", false, false, false, 781));
                        // line 782
                        yield "                                                    ";
                        if ((($context["daysRemaining"] ?? null) > 0)) {
                            // line 783
                            yield "                                                        <span class=\"badge bg-danger ms-1\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysRemaining"] ?? null), "html", null, true);
                            yield "j</span>
                                                    ";
                        }
                        // line 785
                        yield "                                                ";
                    }
                    // line 786
                    yield "                                            ";
                }
                // line 787
                yield "                                        </a>
                                    ";
            } elseif ((            // line 788
($context["hasIssue"] ?? null) && ($context["creditNote"] ?? null))) {
                // line 789
                yield "                                        ";
                // line 790
                yield "                                        <a class=\"dropdown-item small 
                                            ";
                // line 791
                if (CoreExtension::inFilter(($context["realIssueStatus"] ?? null), ["recovered", "resolved"])) {
                    yield "text-success
                                            ";
                } elseif ((                // line 792
($context["realIssueStatus"] ?? null) == "pending")) {
                    yield "text-warning
                                            ";
                } elseif (CoreExtension::inFilter(                // line 793
($context["realIssueStatus"] ?? null), ["lost", "rejected"])) {
                    yield "text-danger
                                            ";
                } else {
                    // line 794
                    yield "text-info";
                }
                yield "\" 
                                           href=\"";
                // line 795
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "id", [], "any", false, false, false, 795)]), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 796
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueIcon"] ?? null), "html", null, true);
                yield " me-2\"></i> 
                                            Voir avoir (";
                // line 797
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueLabel"] ?? null), "html", null, true);
                yield ")
                                        </a>
                                    ";
            } elseif ((($tmp =             // line 799
($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 800
                yield "                                        <a class=\"dropdown-item text-muted small\" href=\"#\" onclick=\"return false;\">
                                            <i class=\"fas fa-file-invoice-dollar me-2\"></i> Avoir introuvable
                                        </a>
                                    ";
            } else {
                // line 804
                yield "                                        <a class=\"dropdown-item text-muted small\" href=\"#\" onclick=\"return false;\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Non disponible
                                        </a>
                                    ";
            }
            // line 808
            yield "                                </li>
                                <li>
                                    <button type=\"button\" class=\"dropdown-item small toggle-batch-btn\"
                                            data-batch-id=\"";
            // line 811
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 811), "html", null, true);
            yield "\"
                                            data-is-active=\"";
            // line 812
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 812)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                            data-batch-number=\"";
            // line 813
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 813), "html", null, true);
            yield "\"
                                            data-token=\"";
            // line 814
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 814))), "html", null, true);
            yield "\">
                                        <i class=\"fas ";
            // line 815
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 815)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield " me-2\"></i>
                                        ";
            // line 816
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 816)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                    </button>
                                </li>
                                ";
            // line 819
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 819)) == 0)) &&  !($context["hasIssue"] ?? null))) {
                // line 820
                yield "                                    <li>
                                        <button type=\"button\" class=\"dropdown-item text-danger small delete-batch-btn\"
                                                data-batch-id=\"";
                // line 822
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 822), "html", null, true);
                yield "\"
                                                data-batch-number=\"";
                // line 823
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 823), "html", null, true);
                yield "\"
                                                data-token=\"";
                // line 824
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 824))), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    </li>
                                ";
            }
            // line 829
            yield "                            </ul>
                        </div>
                    </div>

                    <!-- Corps -->
                    <div class=\"card-body\">
                        <div class=\"mb-2 mb-md-3\">
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Emplacement</span>
                                ";
            // line 838
            if ((($context["locationDisplay"] ?? null) != "—")) {
                // line 839
                yield "                                    <span class=\"badge bg-info text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["locationDisplay"] ?? null)), "truncate", [15], "method", false, false, false, 839), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 841
                yield "                                    <span class=\"text-muted small\">—</span>
                                ";
            }
            // line 843
            yield "                            </div>

                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Quantité</span>
                                <div class=\"text-end\">
                                    <span class=\"fw-bold small ";
            // line 848
            if ((($tmp = ($context["isLowStock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "text-danger";
            }
            yield "\">
                                        ";
            // line 849
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 849), "html", null, true);
            yield "
                                    </span>
                                    <small class=\"text-muted\">/ ";
            // line 851
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 851), "html", null, true);
            yield "</small>
                                    <div class=\"progress mt-1\" style=\"width: 80px; margin-left: auto;\">
                                        <div class=\"progress-bar
                                            ";
            // line 854
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 854) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 854)) * 100) <= 10)) {
                yield "bg-danger
                                            ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,             // line 855
$context["batch"], "currentQuantity", [], "any", false, false, false, 855) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 855)) * 100) <= 30)) {
                yield "bg-warning
                                            ";
            } else {
                // line 856
                yield "bg-success";
            }
            yield "\"
                                            style=\"width: ";
            // line 857
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 857) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 857)) * 100)), "html", null, true);
            yield "%\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Prix unitaire</span>
                                <span class=\"fw-bold text-primary small\">";
            // line 865
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 865), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 865)), "html", null, true);
            yield "</span>
                            </div>

                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Expiration</span>
                                <div>
                                    ";
            // line 871
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 871)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 872
                yield "                                        <span class=\"fw-bold small ";
                if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "text-danger";
                } elseif ((($tmp = ($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "text-warning";
                } else {
                    yield "text-success";
                }
                yield "\">
                                            ";
                // line 873
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 873), "d/m/Y"), "html", null, true);
                yield "
                                        </span>
                                        ";
                // line 875
                if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 876
                    yield "                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                        ";
                } elseif ((($tmp =                 // line 877
($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 878
                    yield "                                            <span class=\"badge bg-warning text-dark ms-1\">Bientôt</span>
                                        ";
                }
                // line 880
                yield "                                    ";
            } else {
                // line 881
                yield "                                        <span class=\"text-muted small\">—</span>
                                    ";
            }
            // line 883
            yield "                                </div>
                            </div>

                            ";
            // line 887
            yield "                            ";
            if ((array_key_exists("purchaseItems", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 887), [], "array", true, true, false, 887))) {
                // line 888
                yield "                                ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["purchaseItems"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 888)] ?? null) : null), "purchase", [], "any", false, false, false, 888);
                // line 889
                yield "                                ";
                if ((($context["purchase"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 889))) {
                    // line 890
                    yield "                                    ";
                    $context["daysRemaining"] = (30 - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 890)], "method", false, false, false, 890), "days", [], "any", false, false, false, 890));
                    // line 891
                    yield "                                    <div class=\"mt-1 mt-md-2\">
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-calendar-check me-1\"></i>
                                            Réception: ";
                    // line 894
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 894), "d/m/Y"), "html", null, true);
                    yield "
                                            ";
                    // line 895
                    if ((($context["daysRemaining"] ?? null) > 0)) {
                        // line 896
                        yield "                                                <span class=\"badge bg-success\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysRemaining"] ?? null), "html", null, true);
                        yield "j</span>
                                            ";
                    } else {
                        // line 898
                        yield "                                                <span class=\"badge bg-secondary\">Délai expiré</span>
                                            ";
                    }
                    // line 900
                    yield "                                        </small>
                                    </div>
                                ";
                }
                // line 903
                yield "                            ";
            }
            // line 904
            yield "                        </div>

                        <!-- ✅ Section avoir avec VRAI statut -->
                        ";
            // line 907
            if ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 908
                yield "                            <div class=\"alert 
                                ";
                // line 909
                if (CoreExtension::inFilter(($context["realIssueStatus"] ?? null), ["recovered", "resolved"])) {
                    yield "alert-success
                                ";
                } elseif ((                // line 910
($context["realIssueStatus"] ?? null) == "pending")) {
                    yield "alert-warning
                                ";
                } elseif (CoreExtension::inFilter(                // line 911
($context["realIssueStatus"] ?? null), ["lost", "rejected"])) {
                    yield "alert-danger
                                ";
                } else {
                    // line 912
                    yield "alert-info";
                }
                yield " 
                                py-1 py-md-2 mb-0 small\">
                                <div class=\"d-flex flex-wrap justify-content-between align-items-center gap-1\">
                                    <div>
                                        <i class=\"fas fa-file-invoice-dollar me-1\"></i>
                                        <span class=\"badge ";
                // line 917
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueBadgeClass"] ?? null), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 918
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueIcon"] ?? null), "html", null, true);
                yield " me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["issueLabel"] ?? null), "html", null, true);
                yield "
                                        </span>
                                    </div>
                                    <div class=\"text-end\">
                                        <small class=\"";
                // line 922
                if (CoreExtension::inFilter(($context["realIssueStatus"] ?? null), ["recovered", "resolved"])) {
                    yield "text-success";
                } elseif ((($context["realIssueStatus"] ?? null) == "pending")) {
                    yield "text-warning";
                } else {
                    yield "text-danger";
                }
                yield "\">
                                            ";
                // line 923
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["realDeclaredAmount"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 923)), "html", null, true);
                yield "
                                        </small>
                                    </div>
                                </div>
                            </div>
                        ";
            } else {
                // line 929
                yield "                            <div class=\"alert alert-light py-1 py-md-2 mb-0 text-center small\">
                                <span class=\"text-muted\">Aucun problème signalé</span>
                            </div>
                        ";
            }
            // line 933
            yield "                    </div>

                    <!-- Pied -->
                    <div class=\"card-footer d-flex flex-wrap justify-content-between\">
                        <span class=\"badge ";
            // line 937
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 937)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                            ";
            // line 938
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 938)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                        </span>
                        <small class=\"text-muted\">
                            <i class=\"fas fa-exchange-alt me-1\"></i>";
            // line 941
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 941)), "html", null, true);
            yield " mouvement(s)
                        </small>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 946
        if (!$context['_iterated']) {
            // line 947
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-4 py-md-5\">
                    <i class=\"fas fa-box-open fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h5 class=\"text-muted fs-6 fs-md-5\">Aucun lot trouvé</h5>
                    <p class=\"text-muted small\">Modifiez vos filtres ou créez un achat pour générer des lots</p>
                    <a href=\"";
            // line 952
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                        <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
                    </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 958
        yield "    </div>
</div>

<!-- ==========================================
     MODALES
========================================== -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-print me-2\"></i> Options</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info p-2 small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <span id=\"selectedCount\">0</span> lot(s) sélectionné(s)
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"print-selected\">
                        <i class=\"fas fa-print me-2\"></i> Sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"print-all\">
                        <i class=\"fas fa-print me-2\"></i> Tous
                    </button>
                </div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title fs-6\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleBatchMessage\" class=\"small\"></p>
            </div>
            <div class=\"modal-footer py-2\">
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
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteBatchMessage\" class=\"small\"></p>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

";
        yield from [];
    }

    // line 1036
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1037
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ==========================================
    // SELECT2 - Emplacement
    // ==========================================
    if (document.getElementById('location-select') && typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('#location-select').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: \"-- Tous les emplacements --\",
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true
        });
    }

    // ==========================================
    // SÉLECTION MULTIPLE
    // ==========================================
    const checkboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');

    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) {
            selectedCountSpan.textContent = selected;
        }
    }

    checkboxes.forEach(cb => cb.addEventListener('change', updateSelectedCount));
    updateSelectedCount();

    // ==========================================
    // IMPRESSION
    // ==========================================
    document.getElementById('print-selected')?.addEventListener('click', function() {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length === 0) {
            alert('Veuillez sélectionner au moins un lot.');
            return;
        }
        window.open('/admin/stock-batch/print-multiple?ids=' + selected.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });

    document.getElementById('print-all')?.addEventListener('click', function() {
        const allIds = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (allIds.length === 0) {
            alert('Aucun lot à imprimer.');
            return;
        }
        window.open('/admin/stock-batch/print-multiple?ids=' + allIds.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });

    // ==========================================
    // TOGGLE STATUT
    // ==========================================
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    const toggleForm = document.getElementById('toggleBatchForm');
    const toggleToken = document.getElementById('toggleBatchToken');
    const toggleMessage = document.getElementById('toggleBatchMessage');
    const toggleBtn = document.getElementById('toggleBatchBtn');

    document.querySelectorAll('.toggle-batch-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId;
            const isActive = this.dataset.isActive === '1';
            const token = this.dataset.token;
            const batchNumber = this.dataset.batchNumber;

            toggleMessage.textContent =
                `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${batchNumber}\" ?`;

            toggleForm.action = `/admin/stock-batch/\${batchId}/toggle`;
            toggleToken.value = token;

            toggleBtn.className = isActive ? 'btn btn-danger btn-sm' : 'btn btn-success btn-sm';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';

            toggleModal.show();
        });
    });

    // ==========================================
    // SUPPRESSION
    // ==========================================
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    const deleteForm = document.getElementById('deleteBatchForm');
    const deleteToken = document.getElementById('deleteBatchToken');
    const deleteMessage = document.getElementById('deleteBatchMessage');

    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId;
            const batchNumber = this.dataset.batchNumber;
            const token = this.dataset.token;

            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning p-2 small\">⚠️ Cette action est irréversible.</div>
                <p>Supprimer le lot <strong>\${batchNumber}</strong> ?</p>
                <p class=\"text-danger mb-0 small\">Uniquement si aucun mouvement de stock n'est associé.</p>
            `;

            deleteForm.action = `/admin/stock-batch/\${batchId}/delete`;
            deleteToken.value = token;

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
        return "admin/stock_batch/index.html.twig";
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
        return array (  1634 => 1037,  1627 => 1036,  1546 => 958,  1534 => 952,  1527 => 947,  1525 => 946,  1515 => 941,  1509 => 938,  1505 => 937,  1499 => 933,  1493 => 929,  1484 => 923,  1474 => 922,  1465 => 918,  1461 => 917,  1452 => 912,  1447 => 911,  1443 => 910,  1439 => 909,  1436 => 908,  1434 => 907,  1429 => 904,  1426 => 903,  1421 => 900,  1417 => 898,  1411 => 896,  1409 => 895,  1405 => 894,  1400 => 891,  1397 => 890,  1394 => 889,  1391 => 888,  1388 => 887,  1383 => 883,  1379 => 881,  1376 => 880,  1372 => 878,  1370 => 877,  1367 => 876,  1365 => 875,  1360 => 873,  1349 => 872,  1347 => 871,  1338 => 865,  1327 => 857,  1322 => 856,  1317 => 855,  1313 => 854,  1307 => 851,  1302 => 849,  1296 => 848,  1289 => 843,  1285 => 841,  1279 => 839,  1277 => 838,  1266 => 829,  1258 => 824,  1254 => 823,  1250 => 822,  1246 => 820,  1244 => 819,  1238 => 816,  1234 => 815,  1230 => 814,  1226 => 813,  1222 => 812,  1218 => 811,  1213 => 808,  1207 => 804,  1201 => 800,  1199 => 799,  1194 => 797,  1190 => 796,  1186 => 795,  1181 => 794,  1176 => 793,  1172 => 792,  1168 => 791,  1165 => 790,  1163 => 789,  1161 => 788,  1158 => 787,  1155 => 786,  1152 => 785,  1146 => 783,  1143 => 782,  1140 => 781,  1137 => 780,  1134 => 779,  1132 => 778,  1126 => 776,  1124 => 775,  1115 => 769,  1107 => 764,  1099 => 759,  1086 => 749,  1081 => 747,  1074 => 745,  1063 => 741,  1059 => 739,  1056 => 738,  1053 => 737,  1050 => 736,  1047 => 735,  1044 => 734,  1041 => 733,  1038 => 732,  1035 => 731,  1032 => 730,  1029 => 729,  1026 => 728,  1023 => 727,  1020 => 726,  1017 => 725,  1014 => 724,  1011 => 723,  1008 => 722,  1005 => 721,  1002 => 720,  999 => 719,  996 => 718,  993 => 717,  990 => 716,  987 => 715,  984 => 714,  981 => 713,  978 => 712,  975 => 711,  972 => 710,  969 => 709,  966 => 708,  963 => 707,  960 => 706,  957 => 705,  954 => 704,  951 => 703,  948 => 702,  945 => 700,  942 => 699,  939 => 698,  936 => 697,  933 => 695,  930 => 694,  927 => 693,  924 => 692,  921 => 691,  918 => 690,  916 => 689,  913 => 688,  910 => 687,  907 => 686,  904 => 685,  901 => 684,  898 => 683,  893 => 682,  878 => 670,  874 => 669,  864 => 662,  860 => 661,  856 => 660,  852 => 659,  840 => 650,  832 => 645,  823 => 639,  819 => 638,  815 => 637,  811 => 636,  807 => 635,  803 => 634,  799 => 633,  788 => 625,  784 => 624,  772 => 614,  759 => 612,  755 => 611,  744 => 603,  733 => 595,  729 => 594,  725 => 593,  714 => 585,  710 => 584,  700 => 577,  683 => 563,  660 => 543,  641 => 527,  622 => 511,  603 => 495,  581 => 476,  562 => 460,  543 => 444,  520 => 424,  514 => 421,  508 => 418,  497 => 410,  486 => 402,  482 => 401,  474 => 396,  462 => 386,  455 => 385,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/stock_batch/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\index.html.twig");
    }
}
