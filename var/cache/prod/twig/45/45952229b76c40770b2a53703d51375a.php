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
class __TwigTemplate_ffc456b51fd3808d14ef9ef8822d9805 extends Template
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
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
    }
    .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.2;
    }
    .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
        opacity: 0.8;
    }
    .stat-sub small {
        font-size: 0.65rem;
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
        background: rgba(255,255,255,0.2);
    }
    
    .card-bg-primary .stat-value,
    .card-bg-success .stat-value,
    .card-bg-danger .stat-value,
    .card-bg-warning .stat-value,
    .card-bg-info .stat-value,
    .card-bg-secondary .stat-value {
        color: white;
    }
    
    .card-bg-primary .text-muted,
    .card-bg-success .text-muted,
    .card-bg-danger .text-muted,
    .card-bg-warning .text-muted,
    .card-bg-info .text-muted,
    .card-bg-secondary .text-muted {
        color: rgba(255,255,255,0.8) !important;
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
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        background: #f0f0f0;
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.5rem;
        border-color: #dee2e6;
        min-height: 38px;
    }
    @media (max-width: 768px) {
        .stat-value { font-size: 1.3rem; }
        .stat-icon { width: 40px; height: 40px; }
        .stat-icon i { font-size: 1.3rem; }
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
</style>
";
        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 147
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-exchange-alt me-1\"></i> Mouvements de stock
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-exchange-alt me-2 text-primary\"></i>
                Mouvements de stock
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Visualisez et gérez tous les mouvements de stock de votre entreprise
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> Exporter
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><a class=\"dropdown-item\" href=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 178), "query", [], "any", false, false, false, 178), "all", [], "any", false, false, false, 178)), "html", null, true);
        yield "\"><i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 179), "query", [], "any", false, false, false, 179), "all", [], "any", false, false, false, 179)), "html", null, true);
        yield "\"><i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)</a></li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- Cartes statistiques générales -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total mouvements</div>
                            <div class=\"stat-value\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_movements", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_movements", [], "any", false, false, false, 196), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-exchange-alt fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Quantité totale</div>
                            <div class=\"stat-value\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", false, false, false, 211), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Entrées</div>
                            <div class=\"stat-value\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_in", [], "any", true, true, false, 226)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_in", [], "any", false, false, false, 226), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-arrow-down fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-danger shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Sorties</div>
                            <div class=\"stat-value\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_out", [], "any", true, true, false, 241)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_out", [], "any", false, false, false, 241), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-arrow-up fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cartes par type de mouvement (regroupées) -->
    ";
        // line 253
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["movementTypeStats"] ?? null)) > 0)) {
            // line 254
            yield "    <div class=\"row g-3 mb-4\">
        ";
            // line 256
            yield "        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> Achats
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "purchase_in", [], "any", true, true, false, 265) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "purchase_in", [], "any", false, false, false, 265)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "purchase_in", [], "any", false, false, false, 265)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-cart-plus fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 277
            yield "        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card card-bg-danger shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-tag me-1\"></i> Ventes
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "sale_out", [], "any", true, true, false, 286) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "sale_out", [], "any", false, false, false, 286)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "sale_out", [], "any", false, false, false, 286)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-dollar-sign fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 298
            yield "        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-pencil-alt me-1\"></i> Ajustements
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", true, true, false, 307) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 307)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 307)) : (0)) + (((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", true, true, false, 307) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 307)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 307)) : (0))), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                            <div class=\"stat-sub mt-1\">
                                <small>
                                    ➕ Entrées: ";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", true, true, false, 311) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 311)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 311)) : (0)), 0, ",", " "), "html", null, true);
            yield " | 
                                    ➖ Sorties: ";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", true, true, false, 312) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 312)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 312)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-pencil-alt fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 325
            yield "        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-undo-alt me-1\"></i> Retours clients
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_in", [], "any", true, true, false, 334) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_in", [], "any", false, false, false, 334)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_in", [], "any", false, false, false, 334)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-undo-alt fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 346
            yield "        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card card-bg-secondary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-truck-loading me-1\"></i> Retours fournisseurs
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_out", [], "any", true, true, false, 355) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_out", [], "any", false, false, false, 355)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_out", [], "any", false, false, false, 355)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-truck-loading fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 367
            yield "        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", true, true, false, 376) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 376)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 376)) : (0)) + (((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", true, true, false, 376) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 376)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 376)) : (0))), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                            <div class=\"stat-sub mt-1\">
                                <small>
                                    ➕ Entrants: ";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", true, true, false, 380) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 380)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 380)) : (0)), 0, ",", " "), "html", null, true);
            yield " | 
                                    ➖ Sortants: ";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", true, true, false, 381) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 381)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 381)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-exchange-alt fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 394
        yield "
    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 400
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold small\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Produit, code-barres, n° lot...\" value=\"";
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 413)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 413), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold small\">Type de mouvement</label>
                        <select name=\"movement_type\" class=\"form-select\" id=\"movement_type_select\">
                            <option value=\"\">📋 Tous les mouvements</option>
                            
                            ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["movementHierarchy"] ?? null));
        foreach ($context['_seq'] as $context["category"] => $context["data"]) {
            // line 421
            yield "                                <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "\">
                                    <option value=\"all_";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"]), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "movement_type", [], "any", false, false, false, 422) == ("all_" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"])))) ? ("selected") : (""));
            yield ">
                                        📌 Tous les ";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"]), "html", null, true);
            yield "
                                    </option>
                                    ";
            // line 425
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "children", [], "any", false, false, false, 425));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeData"]) {
                // line 426
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"], "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "movement_type", [], "any", false, false, false, 426) == $context["typeKey"])) ? ("selected") : (""));
                yield ">
                                            ";
                // line 427
                if (CoreExtension::getAttribute($this->env, $this->source, $context["typeData"], "icon", [], "any", true, true, false, 427)) {
                    // line 428
                    yield "                                                <i class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typeData"], "icon", [], "any", false, false, false, 428), "html", null, true);
                    yield " me-1\"></i>
                                            ";
                }
                // line 430
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typeData"], "label", [], "any", false, false, false, 430), "html", null, true);
                yield "
                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 433
            yield "                                </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['category'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 435
        yield "                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold small\">Rôle utilisateur</label>
                        <select name=\"user_role\" id=\"role-select\" class=\"form-select\">
                            <option value=\"\">Tous les rôles</option>
                            <option value=\"ROLE_ADMIN\" ";
        // line 441
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_role", [], "any", false, false, false, 441) == "ROLE_ADMIN")) ? ("selected") : (""));
        yield ">Administrateur</option>
                            <option value=\"ROLE_MANAGER\" ";
        // line 442
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_role", [], "any", false, false, false, 442) == "ROLE_MANAGER")) ? ("selected") : (""));
        yield ">Manager</option>
                            <option value=\"ROLE_STOCK_MANAGER\" ";
        // line 443
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_role", [], "any", false, false, false, 443) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
        yield ">Responsable Stock</option>
                            <option value=\"ROLE_CASHIER\" ";
        // line 444
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_role", [], "any", false, false, false, 444) == "ROLE_CASHIER")) ? ("selected") : (""));
        yield ">Caissier</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold small\">Utilisateur</label>
                        <select name=\"user_id\" id=\"user-select\" class=\"form-select select2-user\">
                            <option value=\"\">Tous</option>
                            ";
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 452
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 452), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_id", [], "any", false, false, false, 452) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 452))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 453
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 453)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 453), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 453), "html", null, true)));
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 453), "html", null, true);
            yield ")
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        yield "                        </select>
                    </div>
                </div>
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Date du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 462)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 462), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Date au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 466)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 466), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Trier par</label>
                        <div class=\"d-flex gap-2\">
                            <select name=\"sort\" class=\"form-select\">
                                <option value=\"created_at\" ";
        // line 472
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 472)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 472), "created_at")) : ("created_at")) == "created_at")) ? ("selected") : (""));
        yield ">Date</option>
                                <option value=\"movement_type\" ";
        // line 473
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 473)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 473), "created_at")) : ("created_at")) == "movement_type")) ? ("selected") : (""));
        yield ">Type</option>
                                <option value=\"quantity\" ";
        // line 474
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 474)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 474), "created_at")) : ("created_at")) == "quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            </select>
                            <select name=\"direction\" class=\"form-select\" style=\"width: auto;\">
                                <option value=\"desc\" ";
        // line 477
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 477)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 477), "desc")) : ("desc")) == "desc")) ? ("selected") : (""));
        yield ">↓ Décroissant</option>
                                <option value=\"asc\" ";
        // line 478
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 478)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 478), "desc")) : ("desc")) == "asc")) ? ("selected") : (""));
        yield ">↑ Croissant</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des mouvements -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-list me-2\"></i> Liste des mouvements</h5>
            <div class=\"d-flex gap-2 align-items-center\">
                <span class=\"badge bg-secondary\">";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["movements"] ?? null)), "html", null, true);
        yield " mouvement(s)</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\">
                    <i class=\"fas fa-check-double me-1\"></i> Tout sélectionner
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\">
                    <i class=\"fas fa-times me-1\"></i> Désélectionner
                </button>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width:40px\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Produit</th>
                            <th>N° lot</th>
                            <th class=\"text-end\">Quantité</th>
                            <th>Utilisateur</th>
                            <th>Raison / Notes</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["movements"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
            // line 519
            yield "                            ";
            $context["rowClass"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 519));
            // line 520
            yield "                            <tr class=\"movement-row-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowClass"] ?? null), "html", null, true);
            yield "\">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 521
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "id", [], "any", false, false, false, 521), "html", null, true);
            yield "\"></td>
                                <td>
                                    <div class=\"fw-bold\">";
            // line 523
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 523), "d/m/Y"), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 524
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 524), "H:i:s"), "html", null, true);
            yield "</small>
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeBadgeClass", [], "any", false, false, false, 527), "html", null, true);
            yield "\">
                                        <i class=\"";
            // line 528
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeIcon", [], "any", false, false, false, 528), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 529
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeLabel", [], "any", false, false, false, 529), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    ";
            // line 533
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 533)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 534
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 534), "product", [], "any", false, false, false, 534), "id", [], "any", false, false, false, 534)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                                            ";
                // line 535
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 535), "product", [], "any", false, false, false, 535), "name", [], "any", false, false, false, 535)), "truncate", [40], "method", false, false, false, 535), "html", null, true);
                yield "
                                        </a>
                                        <br>
                                        <small class=\"text-muted\">";
                // line 538
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 538), "product", [], "any", false, false, false, 538), "barcode", [], "any", false, false, false, 538), "html", null, true);
                yield "</small>
                                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 539
$context["movement"], "product", [], "any", false, false, false, 539)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 540
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 540), "id", [], "any", false, false, false, 540)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                                            ";
                // line 541
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 541), "name", [], "any", false, false, false, 541)), "truncate", [40], "method", false, false, false, 541), "html", null, true);
                yield "
                                        </a>
                                        <br>
                                        <small class=\"text-muted\">";
                // line 544
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 544), "barcode", [], "any", false, false, false, 544), "html", null, true);
                yield "</small>
                                    ";
            } else {
                // line 546
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 548
            yield "                                </td>
                                <td>
                                    ";
            // line 550
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 550)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 551
                yield "                                        <code>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 551), "batchNumber", [], "any", false, false, false, 551)), "truncate", [20], "method", false, false, false, 551), "html", null, true);
                yield "</code>
                                    ";
            } else {
                // line 553
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 555
            yield "                                </td>
                                <td>
                                    <div class=\"text-end\">
                                        <span class=\"fw-bold ";
            // line 558
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 558), ["purchase_in", "return_in"])) ? ("text-success") : ("text-danger"));
            yield "\">
                                            ";
            // line 559
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 559), ["purchase_in", "return_in"])) ? ("+") : ("-"));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 559), 0, ",", " "), "html", null, true);
            yield "
                                        </span>
                                        ";
            // line 561
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 561)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 562
                yield "                                            <br>
                                            <small class=\"text-muted\">";
                // line 563
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 563), CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "hmaService", [], "any", false, false, false, 563)), "html", null, true);
                yield "/unité</small>
                                        ";
            }
            // line 565
            yield "                                    </div>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center gap-2\">
                                        ";
            // line 569
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 569) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 569), "photo", [], "any", false, false, false, 569))) {
                // line 570
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 570), "photo", [], "any", false, false, false, 570))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 570), "fullName", [], "any", false, false, false, 570), "html", null, true);
                yield "\" class=\"user-avatar\" onerror=\"this.src='data:image/svg+xml,%3Csvg xmlns=\\'http://www.w3.org/2000/svg\\' width=\\'32\\' height=\\'32\\' viewBox=\\'0 0 24 24\\' fill=\\'none\\' stroke=\\'%23666\\' stroke-width=\\'1\\'%3E%3Ccircle cx=\\'12\\' cy=\\'8\\' r=\\'4\\'/%3E%3Cpath d=\\'M5 20v-2a7 7 0 0 1 14 0v2\\'/%3E%3C/svg%3E'\">
                                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 571
$context["movement"], "user", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 572
                yield "                                            <div class=\"user-avatar bg-light d-flex align-items-center justify-content-center\">
                                                <i class=\"fas fa-user text-muted\"></i>
                                            </div>
                                        ";
            } else {
                // line 576
                yield "                                            <div class=\"user-avatar bg-light d-flex align-items-center justify-content-center\">
                                                <i class=\"fas fa-robot text-muted\"></i>
                                            </div>
                                        ";
            }
            // line 580
            yield "                                        <div>
                                            <div class=\"small fw-bold\">";
            // line 581
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 581)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 581), "fullName", [], "any", false, false, false, 581)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 581), "fullName", [], "any", false, false, false, 581), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 581), "email", [], "any", false, false, false, 581), "html", null, true)))) : ("Système"));
            yield "</div>
                                            <div class=\"small text-muted\">";
            // line 582
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 582)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 582), "email", [], "any", false, false, false, 582), "html", null, true)) : (""));
            yield "</div>
                                            ";
            // line 583
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 583)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 584
                yield "                                                <small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 584), "roleLabel", [], "any", false, false, false, 584), "html", null, true);
                yield "</small>
                                            ";
            }
            // line 586
            yield "                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        ";
            // line 591
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 591)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 592
                yield "                                            <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 592)), "truncate", [60], "method", false, false, false, 592), "html", null, true);
                yield "</small>
                                        ";
            }
            // line 594
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "referenceId", [], "any", false, false, false, 594)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 595
                yield "                                            <br><small class=\"text-muted\">Ref: #";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "referenceId", [], "any", false, false, false, 595), "html", null, true);
                yield "</small>
                                        ";
            }
            // line 597
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "purchaseItem", [], "any", false, false, false, 597)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 598
                yield "                                            <br><small class=\"text-muted\">Achat: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "purchaseItem", [], "any", false, false, false, 598), "purchase", [], "any", false, false, false, 598), "purchaseNumber", [], "any", false, false, false, 598), "html", null, true);
                yield "</small>
                                        ";
            }
            // line 600
            yield "                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    <a href=\"";
            // line 603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "id", [], "any", false, false, false, 603)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 608
        if (!$context['_iterated']) {
            // line 609
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-exchange-alt fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun mouvement trouvé</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres pour voir plus de résultats</p>
                                    <a href=\"";
            // line 614
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_new");
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un ajustement
                                    </a>
                                 </div>
                             </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 620
        yield "                    </tbody>
                </table>
            </div>
        </div>
        ";
        // line 624
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 625
            yield "        <div class=\"card-footer bg-white\">
            <nav>
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 628
            if ((($context["currentPage"] ?? null) > 1)) {
                // line 629
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 630
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 630), "query", [], "any", false, false, false, 630), "all", [], "any", false, false, false, 630), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i> Précédent
                            </a>
                        </li>
                    ";
            }
            // line 635
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 636
                yield "                        <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 637
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 637), "query", [], "any", false, false, false, 637), "all", [], "any", false, false, false, 637), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 640
            yield "                    ";
            if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 641
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 642
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 642), "query", [], "any", false, false, false, 642), "all", [], "any", false, false, false, 642), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
                yield "\">
                                Suivant <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 647
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 651
        yield "    </div>
</div>

<!-- Modal options impression -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> mouvement(s) sélectionné(s)
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer la sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer tous les mouvements
                    </button>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 683
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 684
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
            placeholder: '-- Tous les utilisateurs --',
            allowClear: true,
            width: '100%'
        });
    }

    const selectAll = document.getElementById('select-all-checkbox');
    const checkboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');

    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
        if (selectAll) selectAll.checked = checkboxes.length === selected;
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
        // line 737
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
        // line 748
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
        return array (  1181 => 748,  1167 => 737,  1111 => 684,  1104 => 683,  1069 => 651,  1063 => 647,  1055 => 642,  1052 => 641,  1049 => 640,  1038 => 637,  1033 => 636,  1028 => 635,  1020 => 630,  1017 => 629,  1015 => 628,  1010 => 625,  1008 => 624,  1002 => 620,  990 => 614,  983 => 609,  981 => 608,  971 => 603,  966 => 600,  960 => 598,  957 => 597,  951 => 595,  948 => 594,  942 => 592,  940 => 591,  933 => 586,  927 => 584,  925 => 583,  921 => 582,  917 => 581,  914 => 580,  908 => 576,  902 => 572,  900 => 571,  893 => 570,  891 => 569,  885 => 565,  880 => 563,  877 => 562,  875 => 561,  868 => 559,  864 => 558,  859 => 555,  855 => 553,  849 => 551,  847 => 550,  843 => 548,  839 => 546,  834 => 544,  828 => 541,  823 => 540,  821 => 539,  817 => 538,  811 => 535,  806 => 534,  804 => 533,  797 => 529,  793 => 528,  789 => 527,  783 => 524,  779 => 523,  774 => 521,  769 => 520,  766 => 519,  761 => 518,  732 => 492,  715 => 478,  711 => 477,  705 => 474,  701 => 473,  697 => 472,  688 => 466,  681 => 462,  673 => 456,  662 => 453,  655 => 452,  651 => 451,  641 => 444,  637 => 443,  633 => 442,  629 => 441,  621 => 435,  614 => 433,  604 => 430,  598 => 428,  596 => 427,  589 => 426,  585 => 425,  580 => 423,  574 => 422,  569 => 421,  565 => 420,  555 => 413,  539 => 400,  531 => 394,  515 => 381,  511 => 380,  504 => 376,  493 => 367,  479 => 355,  468 => 346,  454 => 334,  443 => 325,  428 => 312,  424 => 311,  417 => 307,  406 => 298,  392 => 286,  381 => 277,  367 => 265,  356 => 256,  353 => 254,  351 => 253,  336 => 241,  318 => 226,  300 => 211,  282 => 196,  262 => 179,  258 => 178,  231 => 154,  222 => 147,  215 => 146,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/stock_movement/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_movement\\index.html.twig");
    }
}
