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

/* admin/stock_movement/index.html.twig */
class __TwigTemplate_dfbea4868d77f713d2e2ce5dda4dd7be extends Template
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
        yield "Mouvements de stock - HMA Market";
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
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white;
        border: none;
        height: 100%;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
    }
    @media (min-width: 768px) {
        .stat-icon {
            width: 50px;
            height: 50px;
        }
    }
    .stat-value {
        font-size: 1.3rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.2;
    }
    @media (min-width: 768px) {
        .stat-value {
            font-size: 1.8rem;
        }
    }
    .stat-label {
        font-size: 0.6rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    @media (min-width: 768px) {
        .stat-label {
            font-size: 0.7rem;
        }
    }
    .stat-sub {
        font-size: 0.6rem;
        margin-top: 0.25rem;
        opacity: 0.9;
    }
    @media (min-width: 768px) {
        .stat-sub {
            font-size: 0.7rem;
        }
    }
    .stat-sub small {
        font-size: 0.55rem;
    }
    @media (min-width: 768px) {
        .stat-sub small {
            font-size: 0.65rem;
        }
    }

    /* ============================================
       ✅ CORRECTION : VISIBILITÉ DES ICÔNES
       Force les icônes FontAwesome à être lisibles
       sur tous les fonds colorés (warning, info, etc.)
    ============================================ */
    .stat-card .stat-label i,
    .stat-card .stat-value i,
    .stat-card .stat-sub i {
        color: inherit !important;
        opacity: 1 !important;
    }

    /* Cartes avec fond coloré */
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
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
    .card-bg-secondary {
        background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%) !important;
        color: white;
    }

    .card-bg-primary .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-danger .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-info .stat-icon,
    .card-bg-secondary .stat-icon {
        background: rgba(255,255,255,0.22);
    }

    .card-bg-primary .stat-value,
    .card-bg-success .stat-value,
    .card-bg-danger .stat-value,
    .card-bg-warning .stat-value,
    .card-bg-info .stat-value,
    .card-bg-secondary .stat-value {
        color: white;
    }

    /* ✅ Force les icônes FontAwesome à être bien blanches */
    .card-bg-primary .stat-label i,
    .card-bg-success .stat-label i,
    .card-bg-danger .stat-label i,
    .card-bg-warning .stat-label i,
    .card-bg-info .stat-label i,
    .card-bg-secondary .stat-label i,
    .card-bg-primary .stat-icon i,
    .card-bg-success .stat-icon i,
    .card-bg-danger .stat-icon i,
    .card-bg-warning .stat-icon i,
    .card-bg-info .stat-icon i,
    .card-bg-secondary .stat-icon i,
    .card-bg-primary .stat-sub i,
    .card-bg-success .stat-sub i,
    .card-bg-danger .stat-sub i,
    .card-bg-warning .stat-sub i,
    .card-bg-info .stat-sub i,
    .card-bg-secondary .stat-sub i {
        color: #ffffff !important;
        opacity: 1 !important;
    }

    .card-bg-primary .text-muted,
    .card-bg-success .text-muted,
    .card-bg-danger .text-muted,
    .card-bg-warning .text-muted,
    .card-bg-info .text-muted,
    .card-bg-secondary .text-muted {
        color: rgba(255,255,255,0.9) !important;
    }

    .movement-row-purchase {
        border-left: 3px solid #28a745 !important;
    }
    .movement-row-sale {
        border-left: 3px solid #dc3545 !important;
    }
    .movement-row-return {
        border-left: 3px solid #007bff !important;
    }
    .movement-row-adjustment {
        border-left: 3px solid #ffc107 !important;
    }
    .user-avatar {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        object-fit: cover;
        background: #f0f0f0;
    }
    @media (min-width: 768px) {
        .user-avatar {
            width: 32px;
            height: 32px;
        }
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.5rem;
        border-color: #dee2e6;
        min-height: 38px;
    }

    .badge i, .btn i {
        color: white !important;
    }
    .btn-outline-primary i, .btn-outline-secondary i, .btn-outline-success i, .btn-outline-danger i, .btn-outline-warning i, .btn-outline-info i {
        color: inherit !important;
    }
    .btn-primary i, .btn-success i, .btn-danger i, .btn-warning i, .btn-info i {
        color: white !important;
    }

    /* Responsive table */
    @media (max-width: 768px) {
        .table-responsive {
            font-size: 0.8rem;
        }
        .table td, .table th {
            padding: 0.4rem 0.3rem;
        }
        .badge {
            font-size: 0.6rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .btn-sm {
            padding: 0.15rem 0.3rem;
            font-size: 0.65rem;
        }
        .btn-sm i {
            font-size: 0.7rem;
        }
    }

    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .card-body {
            padding: 0.5rem 0.75rem !important;
        }
        .stat-icon {
            width: 32px;
            height: 32px;
        }
        .stat-icon i {
            font-size: 1rem;
        }
        .stat-value {
            font-size: 1.1rem;
        }
        .stat-label {
            font-size: 0.55rem;
        }
        .stat-sub {
            font-size: 0.5rem;
        }
        .stat-sub small {
            font-size: 0.45rem;
        }
        .user-avatar {
            width: 22px;
            height: 22px;
        }
        .user-avatar i {
            font-size: 0.6rem;
        }
        .pagination-sm .page-link {
            padding: 0.15rem 0.3rem;
            font-size: 0.65rem;
        }
    }
</style>
";
        yield from [];
    }

    // line 272
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 273
        yield "<div class=\"container-fluid px-2 px-md-4\">
    <!-- En-tête -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2 gap-md-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 280
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none small\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-exchange-alt me-1\"></i> Mouvements de stock
                    </li>
                </ol>
            </nav>
            <h1 class=\"h4 h-md-3 mb-0 fw-bold\">
                <i class=\"fas fa-exchange-alt me-2 text-primary\"></i>
                Mouvements de stock
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Visualisez et gérez tous les mouvements de stock de votre entreprise
            </p>
        </div>
        <div class=\"d-flex gap-1 gap-md-2 flex-wrap\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success btn-sm btn-md dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> <span class=\"d-none d-sm-inline\">Exporter</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><a class=\"dropdown-item small\" href=\"";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 304), "query", [], "any", false, false, false, 304), "all", [], "any", false, false, false, 304)), "html", null, true);
        yield "\"><i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)</a></li>
                    <li><a class=\"dropdown-item small\" href=\"";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 305), "query", [], "any", false, false, false, 305), "all", [], "any", false, false, false, 305)), "html", null, true);
        yield "\"><i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)</a></li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary btn-sm btn-md\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
        </div>
    </div>

    <!-- Cartes statistiques générales -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total mouvements</div>
                            <div class=\"stat-value\">";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_movements", [], "any", true, true, false, 322)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_movements", [], "any", false, false, false, 322), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-exchange-alt fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Quantité totale</div>
                            <div class=\"stat-value\">";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 337)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", false, false, false, 337), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Entrées</div>
                            <div class=\"stat-value\">";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_in", [], "any", true, true, false, 352)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_in", [], "any", false, false, false, 352), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-arrow-down fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-danger shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Sorties</div>
                            <div class=\"stat-value\">";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_out", [], "any", true, true, false, 367)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_out", [], "any", false, false, false, 367), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-arrow-up fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cartes par type de mouvement -->
    ";
        // line 379
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["movementTypeStats"] ?? null)) > 0)) {
            // line 380
            yield "    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-4\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> Achats
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "purchase_in", [], "any", true, true, false, 390) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "purchase_in", [], "any", false, false, false, 390)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "purchase_in", [], "any", false, false, false, 390)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-cart-plus fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-6 col-md-4\">
            <div class=\"card stat-card card-bg-danger shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-tag me-1\"></i> Ventes
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "sale_out", [], "any", true, true, false, 410) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "sale_out", [], "any", false, false, false, 410)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "sale_out", [], "any", false, false, false, 410)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-dollar-sign fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-6 col-md-4\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-sliders-h me-1\"></i> Ajustements
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 430
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", true, true, false, 430) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 430)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 430)) : (0)) + (((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", true, true, false, 430) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 430)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 430)) : (0))), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                            <div class=\"stat-sub mt-1 d-none d-sm-block\">
                                <small>
                                    <i class=\"fas fa-plus-circle me-1\"></i> Entrées: ";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", true, true, false, 434) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 434)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 434)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                    &nbsp;|&nbsp;
                                    <i class=\"fas fa-minus-circle me-1\"></i> Sorties: ";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", true, true, false, 436) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 436)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 436)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-sliders-h fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-6 col-md-4\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-undo-alt me-1\"></i> Retours clients
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 457
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_in", [], "any", true, true, false, 457) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_in", [], "any", false, false, false, 457)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_in", [], "any", false, false, false, 457)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-undo-alt fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-6 col-md-4\">
            <div class=\"card stat-card card-bg-secondary shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-truck-loading me-1\"></i> Retours fournisseurs
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_out", [], "any", true, true, false, 477) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_out", [], "any", false, false, false, 477)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_out", [], "any", false, false, false, 477)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-truck-loading fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-6 col-md-4\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 497
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", true, true, false, 497) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 497)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 497)) : (0)) + (((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", true, true, false, 497) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 497)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 497)) : (0))), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                            <div class=\"stat-sub mt-1 d-none d-sm-block\">
                                <small>
                                    <i class=\"fas fa-plus-circle me-1\"></i> Entrants: ";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", true, true, false, 501) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 501)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 501)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                    &nbsp;|&nbsp;
                                    <i class=\"fas fa-minus-circle me-1\"></i> Sortants: ";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", true, true, false, 503) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 503)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 503)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-exchange-alt fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 516
        yield "
    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"";
        // line 522
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index");
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
                    <div class=\"col-12 col-md-3\">
                        <label class=\"form-label fw-bold small\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control form-control-sm\" placeholder=\"Produit, code-barres...\" value=\"";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 535)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 535), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <label class=\"form-label fw-bold small\">Type de mouvement</label>
                        <select name=\"movement_type\" class=\"form-select form-select-sm\" id=\"movement_type_select\">
                            <option value=\"\">📋 Tous</option>
                            ";
        // line 541
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["movementHierarchy"] ?? null));
        foreach ($context['_seq'] as $context["category"] => $context["data"]) {
            // line 542
            yield "                                <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "\">
                                    <option value=\"all_";
            // line 543
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"]), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "movement_type", [], "any", false, false, false, 543) == ("all_" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"])))) ? ("selected") : (""));
            yield ">
                                        📌 Tous les ";
            // line 544
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"]), "html", null, true);
            yield "
                                    </option>
                                    ";
            // line 546
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "children", [], "any", false, false, false, 546));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeData"]) {
                // line 547
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"], "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "movement_type", [], "any", false, false, false, 547) == $context["typeKey"])) ? ("selected") : (""));
                yield ">
                                            ";
                // line 548
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typeData"], "label", [], "any", false, false, false, 548), "html", null, true);
                yield "
                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            yield "                                </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['category'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 553
        yield "                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-md-3\">
                        <label class=\"form-label fw-bold small\">Rôle</label>
                        <select name=\"user_role\" id=\"role-select\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"ROLE_ADMIN\" ";
        // line 559
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_role", [], "any", false, false, false, 559) == "ROLE_ADMIN")) ? ("selected") : (""));
        yield ">Admin</option>
                            <option value=\"ROLE_MANAGER\" ";
        // line 560
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_role", [], "any", false, false, false, 560) == "ROLE_MANAGER")) ? ("selected") : (""));
        yield ">Manager</option>
                            <option value=\"ROLE_STOCK_MANAGER\" ";
        // line 561
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_role", [], "any", false, false, false, 561) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
        yield ">Stock</option>
                            <option value=\"ROLE_CASHIER\" ";
        // line 562
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_role", [], "any", false, false, false, 562) == "ROLE_CASHIER")) ? ("selected") : (""));
        yield ">Caissier</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-md-3\">
                        <label class=\"form-label fw-bold small\">Utilisateur</label>
                        <select name=\"user_id\" id=\"user-select\" class=\"form-select form-select-sm select2-user\">
                            <option value=\"\">Tous</option>
                            ";
        // line 569
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 570
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 570), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_id", [], "any", false, false, false, 570) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 570))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 571
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 571)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 571), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 571)), "truncate", [15], "method", false, false, false, 571), "html", null, true)));
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 574
        yield "                        </select>
                    </div>
                </div>
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-6 col-md-3\">
                        <label class=\"form-label fw-bold small\">Date du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" value=\"";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 580)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 580), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-6 col-md-3\">
                        <label class=\"form-label fw-bold small\">Date au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" value=\"";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 584)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 584), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-6 col-md-3\">
                        <label class=\"form-label fw-bold small\">Trier par</label>
                        <select name=\"sort\" class=\"form-select form-select-sm\">
                            <option value=\"created_at\" ";
        // line 589
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 589)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 589), "created_at")) : ("created_at")) == "created_at")) ? ("selected") : (""));
        yield ">Date</option>
                            <option value=\"movement_type\" ";
        // line 590
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 590)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 590), "created_at")) : ("created_at")) == "movement_type")) ? ("selected") : (""));
        yield ">Type</option>
                            <option value=\"quantity\" ";
        // line 591
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 591)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 591), "created_at")) : ("created_at")) == "quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-md-3\">
                        <label class=\"form-label fw-bold small\">Ordre</label>
                        <select name=\"direction\" class=\"form-select form-select-sm\">
                            <option value=\"desc\" ";
        // line 597
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 597)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 597), "desc")) : ("desc")) == "desc")) ? ("selected") : (""));
        yield ">↓ Décroissant</option>
                            <option value=\"asc\" ";
        // line 598
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 598)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 598), "desc")) : ("desc")) == "asc")) ? ("selected") : (""));
        yield ">↑ Croissant</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des mouvements -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\"><i class=\"fas fa-list me-2\"></i> Liste des mouvements</h5>
            <div class=\"d-flex gap-1 gap-md-2 align-items-center flex-wrap\">
                <span class=\"badge bg-secondary\">";
        // line 611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["movements"] ?? null)), "html", null, true);
        yield "</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\">
                    <i class=\"fas fa-check-double me-1\"></i> <span class=\"d-none d-sm-inline\">Tout sélectionner</span>
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\">
                    <i class=\"fas fa-times me-1\"></i> <span class=\"d-none d-sm-inline\">Désélectionner</span>
                </button>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0 table-sm\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width:30px\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
                            <th class=\"d-none d-sm-table-cell\">Date</th>
                            <th class=\"d-none d-md-table-cell\">Type</th>
                            <th>Produit</th>
                            <th class=\"d-none d-lg-table-cell\">N° lot</th>
                            <th class=\"text-end\">Qté</th>
                            <th class=\"d-none d-xl-table-cell\">Utilisateur</th>
                            <th class=\"d-none d-xxl-table-cell\">Raison / Notes</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 637
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["movements"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
            // line 638
            yield "                            ";
            $context["rowClass"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 638));
            // line 639
            yield "                            <tr class=\"movement-row-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowClass"] ?? null), "html", null, true);
            yield "\">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 640
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "id", [], "any", false, false, false, 640), "html", null, true);
            yield "\"></td>
                                <td class=\"d-none d-sm-table-cell\">
                                    <div class=\"fw-bold small\">";
            // line 642
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 642), "d/m/Y"), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 643
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 643), "H:i:s"), "html", null, true);
            yield "</small>
                                </td>
                                <td class=\"d-none d-md-table-cell\">
                                    <span class=\"badge ";
            // line 646
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeBadgeClass", [], "any", false, false, false, 646), "html", null, true);
            yield " small\">
                                        <i class=\"";
            // line 647
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeIcon", [], "any", false, false, false, 647), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 648
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeLabel", [], "any", false, false, false, 648)), "truncate", [12], "method", false, false, false, 648), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    ";
            // line 652
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 652)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 653
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 653), "product", [], "any", false, false, false, 653), "id", [], "any", false, false, false, 653)]), "html", null, true);
                yield "\" class=\"text-decoration-none small\">
                                            ";
                // line 654
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 654), "product", [], "any", false, false, false, 654), "name", [], "any", false, false, false, 654)), "truncate", [20], "method", false, false, false, 654), "html", null, true);
                yield "
                                        </a>
                                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 656
$context["movement"], "product", [], "any", false, false, false, 656)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 657
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 657), "id", [], "any", false, false, false, 657)]), "html", null, true);
                yield "\" class=\"text-decoration-none small\">
                                            ";
                // line 658
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 658), "name", [], "any", false, false, false, 658)), "truncate", [20], "method", false, false, false, 658), "html", null, true);
                yield "
                                        </a>
                                    ";
            } else {
                // line 661
                yield "                                        <span class=\"text-muted small\">—</span>
                                    ";
            }
            // line 663
            yield "                                </td>
                                <td class=\"d-none d-lg-table-cell\">
                                    ";
            // line 665
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 665)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 666
                yield "                                        <code class=\"small\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 666), "batchNumber", [], "any", false, false, false, 666)), "truncate", [12], "method", false, false, false, 666), "html", null, true);
                yield "</code>
                                    ";
            } else {
                // line 668
                yield "                                        <span class=\"text-muted small\">—</span>
                                    ";
            }
            // line 670
            yield "                                </td>
                                <td>
                                    <div class=\"text-end\">
                                        <span class=\"fw-bold small ";
            // line 673
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 673), ["purchase_in", "return_in"])) ? ("text-success") : ("text-danger"));
            yield "\">
                                            ";
            // line 674
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 674), ["purchase_in", "return_in"])) ? ("+") : ("-"));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 674), 0, ",", " "), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                </td>
                                <td class=\"d-none d-xl-table-cell\">
                                    <div class=\"d-flex align-items-center gap-1\">
                                        ";
            // line 680
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 680) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 680), "photo", [], "any", false, false, false, 680))) {
                // line 681
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 681), "photo", [], "any", false, false, false, 681))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 681), "fullName", [], "any", false, false, false, 681), "html", null, true);
                yield "\" class=\"user-avatar\" onerror=\"this.src='data:image/svg+xml,%3Csvg xmlns=\\'http://www.w3.org/2000/svg\\' width=\\'32\\' height=\\'32\\' viewBox=\\'0 0 24 24\\' fill=\\'none\\' stroke=\\'%23666\\' stroke-width=\\'1\\'%3E%3Ccircle cx=\\'12\\' cy=\\'8\\' r=\\'4\\'/%3E%3Cpath d=\\'M5 20v-2a7 7 0 0 1 14 0v2\\'/%3E%3C/svg%3E'\">
                                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 682
$context["movement"], "user", [], "any", false, false, false, 682)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 683
                yield "                                            <div class=\"user-avatar bg-light d-flex align-items-center justify-content-center\">
                                                <i class=\"fas fa-user text-muted small\"></i>
                                            </div>
                                        ";
            } else {
                // line 687
                yield "                                            <div class=\"user-avatar bg-light d-flex align-items-center justify-content-center\">
                                                <i class=\"fas fa-robot text-muted small\"></i>
                                            </div>
                                        ";
            }
            // line 691
            yield "                                        <div>
                                            <div class=\"small fw-bold\">";
            // line 692
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 692)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 692), "fullName", [], "any", false, false, false, 692)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 692), "fullName", [], "any", false, false, false, 692), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 692), "email", [], "any", false, false, false, 692)), "truncate", [12], "method", false, false, false, 692), "html", null, true)))) : ("Système"));
            yield "</div>
                                            <div class=\"small text-muted\">";
            // line 693
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 693)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 693), "roleLabel", [], "any", false, false, false, 693)), "truncate", [10], "method", false, false, false, 693), "html", null, true)) : (""));
            yield "</div>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"d-none d-xxl-table-cell\">
                                    <div>
                                        ";
            // line 699
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 699)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 700
                yield "                                            <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 700)), "truncate", [30], "method", false, false, false, 700), "html", null, true);
                yield "</small>
                                        ";
            }
            // line 702
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "referenceId", [], "any", false, false, false, 702)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 703
                yield "                                            <br><small class=\"text-muted\">#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "referenceId", [], "any", false, false, false, 703), "html", null, true);
                yield "</small>
                                        ";
            }
            // line 705
            yield "                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    <a href=\"";
            // line 708
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "id", [], "any", false, false, false, 708)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 713
        if (!$context['_iterated']) {
            // line 714
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center py-4 py-md-5\">
                                    <i class=\"fas fa-exchange-alt fa-2x fa-md-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun mouvement trouvé</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres pour voir plus de résultats</p>
                                    <a href=\"";
            // line 719
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_new");
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un ajustement
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 725
        yield "                    </tbody>
                </table>
            </div>
        </div>
        ";
        // line 729
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 730
            yield "        <div class=\"card-footer bg-white py-2 py-md-3\">
            <nav>
                <ul class=\"pagination pagination-sm justify-content-center mb-0\">
                    ";
            // line 733
            if ((($context["currentPage"] ?? null) > 1)) {
                // line 734
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 735
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 735), "query", [], "any", false, false, false, 735), "all", [], "any", false, false, false, 735), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i> <span class=\"d-none d-sm-inline\">Précédent</span>
                            </a>
                        </li>
                    ";
            }
            // line 740
            yield "                    ";
            $context["maxVisible"] = 5;
            // line 741
            yield "                    ";
            $context["startPage"] = max(1, (($context["currentPage"] ?? null) - 2));
            // line 742
            yield "                    ";
            $context["endPage"] = min(($context["totalPages"] ?? null), ((($context["startPage"] ?? null) + ($context["maxVisible"] ?? null)) - 1));
            // line 743
            yield "                    ";
            if (((($context["endPage"] ?? null) - ($context["startPage"] ?? null)) < (($context["maxVisible"] ?? null) - 1))) {
                // line 744
                yield "                        ";
                $context["startPage"] = max(1, ((($context["endPage"] ?? null) - ($context["maxVisible"] ?? null)) + 1));
                // line 745
                yield "                    ";
            }
            // line 746
            yield "
                    ";
            // line 747
            if ((($context["startPage"] ?? null) > 1)) {
                // line 748
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 749
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 749), "query", [], "any", false, false, false, 749), "all", [], "any", false, false, false, 749), ["page" => 1])), "html", null, true);
                yield "\">1</a>
                        </li>
                        ";
                // line 751
                if ((($context["startPage"] ?? null) > 2)) {
                    // line 752
                    yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                }
                // line 754
                yield "                    ";
            }
            // line 755
            yield "
                    ";
            // line 756
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 757
                yield "                        <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 758
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 758), "query", [], "any", false, false, false, 758), "all", [], "any", false, false, false, 758), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 761
            yield "
                    ";
            // line 762
            if ((($context["endPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 763
                yield "                        ";
                if ((($context["endPage"] ?? null) < (($context["totalPages"] ?? null) - 1))) {
                    // line 764
                    yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                }
                // line 766
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 767
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 767), "query", [], "any", false, false, false, 767), "all", [], "any", false, false, false, 767), ["page" => ($context["totalPages"] ?? null)])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            // line 770
            yield "
                    ";
            // line 771
            if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 772
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 773
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 773), "query", [], "any", false, false, false, 773), "all", [], "any", false, false, false, 773), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
                yield "\">
                                <span class=\"d-none d-sm-inline\">Suivant</span> <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 778
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 782
        yield "    </div>
</div>

<!-- Modal options impression -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info p-2 small\">
                    <i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> mouvement(s) sélectionné(s)
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"print-selected\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer la sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"print-all\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer tous
                    </button>
                </div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 814
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 815
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('.select2-user').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '-- Tous --',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true
        });
    }

    const selectAll = document.getElementById('select-all-checkbox');
    const checkboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');

    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
        if (selectAll) selectAll.checked = checkboxes.length === selected && selected > 0;
    }

    if (selectAll) {
        selectAll.addEventListener('change', function() {
            checkboxes.forEach(cb => cb.checked = selectAll.checked);
            updateSelectedCount();
        });
    }

    document.getElementById('selectAllBtn')?.addEventListener('click', () => {
        checkboxes.forEach(cb => cb.checked = true);
        if (selectAll) selectAll.checked = true;
        updateSelectedCount();
    });

    document.getElementById('deselectAllBtn')?.addEventListener('click', () => {
        checkboxes.forEach(cb => cb.checked = false);
        if (selectAll) selectAll.checked = false;
        updateSelectedCount();
    });

    checkboxes.forEach(cb => cb.addEventListener('change', updateSelectedCount));
    updateSelectedCount();

    document.getElementById('print-selected')?.addEventListener('click', () => {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length === 0) {
            alert('Veuillez sélectionner au moins un mouvement.');
            return;
        }
        window.open('";
        // line 869
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_print_multiple");
        yield "?ids=' + selected.join(','), '_blank');
        const modal = bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'));
        if (modal) modal.hide();
    });

    document.getElementById('print-all')?.addEventListener('click', () => {
        const allIds = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (allIds.length === 0) {
            alert('Aucun mouvement à imprimer.');
            return;
        }
        window.open('";
        // line 880
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_print_multiple");
        yield "?ids=' + allIds.join(','), '_blank');
        const modal = bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'));
        if (modal) modal.hide();
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
        return "admin/stock_movement/index.html.twig";
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
        return array (  1313 => 880,  1299 => 869,  1242 => 815,  1235 => 814,  1200 => 782,  1194 => 778,  1186 => 773,  1183 => 772,  1181 => 771,  1178 => 770,  1170 => 767,  1167 => 766,  1163 => 764,  1160 => 763,  1158 => 762,  1155 => 761,  1144 => 758,  1139 => 757,  1135 => 756,  1132 => 755,  1129 => 754,  1125 => 752,  1123 => 751,  1118 => 749,  1115 => 748,  1113 => 747,  1110 => 746,  1107 => 745,  1104 => 744,  1101 => 743,  1098 => 742,  1095 => 741,  1092 => 740,  1084 => 735,  1081 => 734,  1079 => 733,  1074 => 730,  1072 => 729,  1066 => 725,  1054 => 719,  1047 => 714,  1045 => 713,  1035 => 708,  1030 => 705,  1024 => 703,  1021 => 702,  1015 => 700,  1013 => 699,  1004 => 693,  1000 => 692,  997 => 691,  991 => 687,  985 => 683,  983 => 682,  976 => 681,  974 => 680,  963 => 674,  959 => 673,  954 => 670,  950 => 668,  944 => 666,  942 => 665,  938 => 663,  934 => 661,  928 => 658,  923 => 657,  921 => 656,  916 => 654,  911 => 653,  909 => 652,  902 => 648,  898 => 647,  894 => 646,  888 => 643,  884 => 642,  879 => 640,  874 => 639,  871 => 638,  866 => 637,  837 => 611,  821 => 598,  817 => 597,  808 => 591,  804 => 590,  800 => 589,  792 => 584,  785 => 580,  777 => 574,  768 => 571,  761 => 570,  757 => 569,  747 => 562,  743 => 561,  739 => 560,  735 => 559,  727 => 553,  720 => 551,  711 => 548,  704 => 547,  700 => 546,  695 => 544,  689 => 543,  684 => 542,  680 => 541,  671 => 535,  655 => 522,  647 => 516,  631 => 503,  626 => 501,  619 => 497,  596 => 477,  573 => 457,  549 => 436,  544 => 434,  537 => 430,  514 => 410,  491 => 390,  479 => 380,  477 => 379,  462 => 367,  444 => 352,  426 => 337,  408 => 322,  388 => 305,  384 => 304,  357 => 280,  348 => 273,  341 => 272,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/stock_movement/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_movement\\index.html.twig");
    }
}
