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

/* admin/product/stock_movements.html.twig */
class __TwigTemplate_e4776a3263b30738d97534ab58c54b78 extends Template
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
        yield "Mouvements de stock - ";
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
    .movement-row-transfer {
        border-left: 3px solid #0ea5e9 !important;
    }
    
    .user-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        background: #f0f0f0;
    }
    @media (min-width: 768px) {
        .user-avatar {
            width: 40px;
            height: 40px;
        }
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.5rem;
        border-color: #dee2e6;
        min-height: 38px;
    }
    
    .badge i {
        color: white !important;
    }
    
    /* Amélioration pour les boutons d'action */
    .btn-action-dark {
        background-color: #1a1a2e !important;
        color: white !important;
        border: none !important;
        transition: all 0.2s ease;
        border-radius: 0.5rem;
    }
    .btn-action-dark:hover {
        background-color: #2d2d44 !important;
        transform: scale(1.05);
        color: white !important;
    }
    .btn-action-dark i {
        color: white !important;
    }
    
    .btn-back-dark {
        background-color: #1a1a2e !important;
        color: white !important;
        border: none !important;
        transition: all 0.2s ease;
        border-radius: 0.5rem;
        padding: 0.375rem 0.75rem;
    }
    .btn-back-dark:hover {
        background-color: #2d2d44 !important;
        transform: scale(1.05);
        color: white !important;
    }
    .btn-back-dark i {
        color: white !important;
    }
    
    /* Amélioration de l'affichage des utilisateurs */
    .user-info {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .user-info .user-details {
        display: flex;
        flex-direction: column;
        line-height: 1.2;
    }
    .user-info .user-details .user-name {
        font-weight: 600;
        font-size: 0.8rem;
    }
    .user-info .user-details .user-email {
        font-size: 0.6rem;
        color: #6c757d;
    }
    .user-info .user-details .user-role {
        font-size: 0.6rem;
        color: #0d6efd;
        font-weight: 500;
    }
    
    /* ===== RESPONSIVE ===== */
    
    /* Tablette et mobile */
    @media (max-width: 768px) {
        .table-responsive {
            font-size: 0.75rem;
        }
        .table td, .table th {
            padding: 0.3rem 0.2rem;
        }
        .badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .btn-sm {
            padding: 0.1rem 0.25rem;
            font-size: 0.6rem;
        }
        .btn-sm i {
            font-size: 0.6rem;
        }
        .user-avatar {
            width: 24px;
            height: 24px;
        }
        .user-info .user-details .user-name {
            font-size: 0.65rem;
        }
        .user-info .user-details .user-email {
            font-size: 0.5rem;
        }
        .user-info .user-details .user-role {
            font-size: 0.5rem;
        }
    }
    
    /* Mobile */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 4px !important;
            padding-right: 4px !important;
        }
        .card-header {
            padding: 0.4rem 0.5rem !important;
        }
        .card-body {
            padding: 0.4rem 0.5rem !important;
        }
        .stat-icon {
            width: 28px;
            height: 28px;
        }
        .stat-icon i {
            font-size: 0.8rem;
        }
        .stat-value {
            font-size: 0.9rem;
        }
        .stat-label {
            font-size: 0.5rem;
        }
        .user-avatar {
            width: 20px;
            height: 20px;
        }
        .pagination-sm .page-link {
            padding: 0.1rem 0.2rem;
            font-size: 0.6rem;
        }
        
        /* ✅ Correction : Tous les champs de filtre prennent 100% sur mobile */
        .filter-select {
            width: 100% !important;
            max-width: 100% !important;
            min-width: 100% !important;
            flex: 1 1 100% !important;
            font-size: 0.7rem !important;
            padding: 0.2rem 0.3rem !important;
        }
        .filter-label {
            font-size: 0.6rem !important;
            display: block !important;
            width: 100% !important;
        }
        
        /* ✅ Toutes les colonnes de filtre prennent 100% sur mobile */
        .filter-col,
        .filter-col-half,
        .filter-col-fourth {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        
        /* Boutons d'action plus visibles sur mobile */
        .btn-action-dark {
            padding: 0.2rem 0.35rem !important;
            font-size: 0.6rem !important;
            border-radius: 0.3rem !important;
        }
        .btn-action-dark i {
            font-size: 0.7rem !important;
        }
        .btn-back-dark {
            font-size: 0.7rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        .btn-back-dark i {
            font-size: 0.7rem !important;
        }
    }
    
    /* Très petits écrans */
    @media (max-width: 400px) {
        .table-responsive {
            font-size: 0.65rem;
        }
        .table td, .table th {
            padding: 0.15rem 0.1rem;
        }
        .user-avatar {
            width: 16px;
            height: 16px;
        }
        .user-info .user-details .user-name {
            font-size: 0.55rem;
        }
        .user-info .user-details .user-email {
            font-size: 0.45rem;
        }
        .user-info .user-details .user-role {
            font-size: 0.45rem;
        }
        .badge {
            font-size: 0.45rem !important;
            padding: 0.1rem 0.2rem !important;
        }
    }
</style>
";
        yield from [];
    }

    // line 341
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 342
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- En-tête -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 349
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 354
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 359)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 360)), "truncate", [20], "method", false, false, false, 360), "html", null, true);
        yield "
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
            <div class=\"d-flex align-items-center mt-1 gap-2 flex-wrap\">
                <span class=\"badge bg-primary\">";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 373), "html", null, true);
        yield "</span>
                <span class=\"text-muted small\">
                    <i class=\"fas fa-barcode me-1\"></i>";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 375), "html", null, true);
        yield "
                </span>
                <span class=\"text-muted small\">
                    <i class=\"fas fa-box me-1\"></i>Stock: ";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "currentStock", [], "any", false, false, false, 378), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 378)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 378), "pièce")) : ("pièce")), "html", null, true);
        yield "
                </span>
            </div>
        </div>
        <div>
            <a href=\"";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 383)]), "html", null, true);
        yield "\" class=\"btn btn-back-dark btn-sm\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour au produit
            </a>
        </div>
    </div>

    <!-- Cartes statistiques générales - 2 par ligne sur mobile -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total mouvements</div>
                            <div class=\"stat-value\">";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_movements", [], "any", true, true, false, 397)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_movements", [], "any", false, false, false, 397), 0)) : (0)), 0, ",", " "), "html", null, true);
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
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Entrées</div>
                            <div class=\"stat-value\">";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_in", [], "any", true, true, false, 412)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_in", [], "any", false, false, false, 412), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_out", [], "any", true, true, false, 427)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_out", [], "any", false, false, false, 427), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-arrow-up fa-1x fa-md-2x\"></i>
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
                            <div class=\"stat-label\">Stock actuel</div>
                            <div class=\"stat-value\">";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "currentStock", [], "any", false, false, false, 442), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-box fa-1x fa-md-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cartes par type de mouvement - 2 par ligne sur mobile -->
    ";
        // line 454
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["movementTypeStats"] ?? null)) > 0)) {
            // line 455
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
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "purchase_in", [], "any", true, true, false, 465) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "purchase_in", [], "any", false, false, false, 465)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "purchase_in", [], "any", false, false, false, 465)) : (0)), 0, ",", " "), "html", null, true);
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
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "sale_out", [], "any", true, true, false, 485) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "sale_out", [], "any", false, false, false, 485)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "sale_out", [], "any", false, false, false, 485)) : (0)), 0, ",", " "), "html", null, true);
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
                                <i class=\"fas fa-pencil-alt me-1\"></i> Ajustements
                            </div>
                            <div class=\"stat-value\">
                                ";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", true, true, false, 505) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 505)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 505)) : (0)) + (((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", true, true, false, 505) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 505)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 505)) : (0))), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                            <div class=\"stat-sub mt-1 d-none d-sm-block small\">
                                <small>
                                    ➕ Entrées: ";
            // line 509
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", true, true, false, 509) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 509)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", false, false, false, 509)) : (0)), 0, ",", " "), "html", null, true);
            yield " | 
                                    ➖ Sorties: ";
            // line 510
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", true, true, false, 510) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 510)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", false, false, false, 510)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-pencil-alt fa-1x fa-md-2x\"></i>
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
            // line 531
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_in", [], "any", true, true, false, 531) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_in", [], "any", false, false, false, 531)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_in", [], "any", false, false, false, 531)) : (0)), 0, ",", " "), "html", null, true);
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
            // line 551
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_out", [], "any", true, true, false, 551) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_out", [], "any", false, false, false, 551)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_out", [], "any", false, false, false, 551)) : (0)), 0, ",", " "), "html", null, true);
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
            // line 571
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", true, true, false, 571) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 571)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 571)) : (0)) + (((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", true, true, false, 571) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 571)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 571)) : (0))), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                            <div class=\"stat-sub mt-1 d-none d-sm-block small\">
                                <small>
                                    ➕ Entrants: ";
            // line 575
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", true, true, false, 575) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 575)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", false, false, false, 575)) : (0)), 0, ",", " "), "html", null, true);
            yield " | 
                                    ➖ Sortants: ";
            // line 576
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", true, true, false, 576) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 576)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", false, false, false, 576)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 589
        yield "
    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"";
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 595)]), "html", null, true);
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
                    <!-- Type de mouvement - 100% sur mobile -->
                    <div class=\"col-12 col-md-4 filter-col\">
                        <label class=\"form-label fw-bold small filter-label\">Type de mouvement</label>
                        <select name=\"movement_type\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">📋 Tous</option>
                            ";
        // line 611
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["movementHierarchy"] ?? null));
        foreach ($context['_seq'] as $context["category"] => $context["data"]) {
            // line 612
            yield "                                <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "\">
                                    <option value=\"all_";
            // line 613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"]), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "movement_type", [], "any", false, false, false, 613) == ("all_" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"])))) ? ("selected") : (""));
            yield ">
                                        📌 Tous les ";
            // line 614
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"]), "html", null, true);
            yield "
                                    </option>
                                    ";
            // line 616
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "children", [], "any", false, false, false, 616));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeData"]) {
                // line 617
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"], "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "movement_type", [], "any", false, false, false, 617) == $context["typeKey"])) ? ("selected") : (""));
                yield ">
                                            ";
                // line 618
                if (CoreExtension::getAttribute($this->env, $this->source, $context["typeData"], "icon", [], "any", true, true, false, 618)) {
                    // line 619
                    yield "                                                <i class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typeData"], "icon", [], "any", false, false, false, 619), "html", null, true);
                    yield " me-1\"></i>
                                            ";
                }
                // line 621
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typeData"], "label", [], "any", false, false, false, 621), "html", null, true);
                yield "
                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 624
            yield "                                </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['category'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 626
        yield "                        </select>
                    </div>
                    
                    <!-- Date du - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-bold small filter-label\">Date du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm filter-select\" value=\"";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 632)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 632), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    
                    <!-- Date au - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-bold small filter-label\">Date au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm filter-select\" value=\"";
        // line 638
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 638)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 638), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    
                    <!-- Ordre - 100% sur mobile, 2 sur desktop -->
                    <div class=\"col-12 col-md-2 filter-col-fourth\">
                        <label class=\"form-label fw-bold small filter-label\">Ordre</label>
                        <select name=\"direction\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"desc\" ";
        // line 645
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 645)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 645), "desc")) : ("desc")) == "desc")) ? ("selected") : (""));
        yield ">↓ Décroissant</option>
                            <option value=\"asc\" ";
        // line 646
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 646)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 646), "desc")) : ("desc")) == "asc")) ? ("selected") : (""));
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
            <span class=\"badge bg-secondary\">";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["movements"] ?? null)), "html", null, true);
        yield "</span>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0 table-sm\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Produit</th>
                            <th class=\"d-none d-lg-table-cell\">N° lot</th>
                            <th class=\"text-end\">Qté</th>
                            <th>Utilisateur</th>
                            <th class=\"d-none d-xl-table-cell\">Raison / Notes</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 676
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["movements"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
            // line 677
            yield "                            ";
            $context["rowClass"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 677), "_")));
            // line 678
            yield "                            <tr class=\"movement-row-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowClass"] ?? null), "html", null, true);
            yield "\">
                                <td>
                                    <div class=\"fw-bold small\">";
            // line 680
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 680), "d/m/Y"), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 681
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 681), "H:i:s"), "html", null, true);
            yield "</small>
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 684
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeBadgeClass", [], "any", false, false, false, 684), "html", null, true);
            yield " small\" style=\"font-size:0.7rem; white-space:nowrap;\">
                                        <i class=\"";
            // line 685
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeIcon", [], "any", false, false, false, 685), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 686
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeLabel", [], "any", false, false, false, 686)), "truncate", [15], "method", false, false, false, 686), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    ";
            // line 690
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 690)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 691
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 691), "product", [], "any", false, false, false, 691), "id", [], "any", false, false, false, 691)]), "html", null, true);
                yield "\" class=\"text-decoration-none small\">
                                            ";
                // line 692
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 692), "product", [], "any", false, false, false, 692), "name", [], "any", false, false, false, 692)), "truncate", [20], "method", false, false, false, 692), "html", null, true);
                yield "
                                        </a>
                                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 694
$context["movement"], "product", [], "any", false, false, false, 694)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 695
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 695), "id", [], "any", false, false, false, 695)]), "html", null, true);
                yield "\" class=\"text-decoration-none small\">
                                            ";
                // line 696
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 696), "name", [], "any", false, false, false, 696)), "truncate", [20], "method", false, false, false, 696), "html", null, true);
                yield "
                                        </a>
                                    ";
            } else {
                // line 699
                yield "                                        <span class=\"text-muted small\">—</span>
                                    ";
            }
            // line 701
            yield "                                </td>
                                <td class=\"d-none d-lg-table-cell\">
                                    ";
            // line 703
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 703)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 704
                yield "                                        <code class=\"small\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 704), "batchNumber", [], "any", false, false, false, 704)), "truncate", [12], "method", false, false, false, 704), "html", null, true);
                yield "</code>
                                    ";
            } else {
                // line 706
                yield "                                        <span class=\"text-muted small\">—</span>
                                    ";
            }
            // line 708
            yield "                                </td>
                                <td>
                                    <div class=\"text-end\">
                                        <span class=\"fw-bold small ";
            // line 711
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 711), ["purchase_in", "return_in", "adjustment_in", "transfer_in"])) ? ("text-success") : ("text-danger"));
            yield "\">
                                            ";
            // line 712
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 712), ["purchase_in", "return_in", "adjustment_in", "transfer_in"])) ? ("+") : ("-"));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 712), 0, ",", " "), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"user-info\">
                                        ";
            // line 718
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 718)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 719
                yield "                                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 719), "photo", [], "any", false, false, false, 719)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 720
                    yield "                                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 720), "photo", [], "any", false, false, false, 720))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 720), "fullName", [], "any", false, false, false, 720), "html", null, true);
                    yield "\" class=\"user-avatar\" loading=\"lazy\">
                                            ";
                } else {
                    // line 722
                    yield "                                                <div class=\"user-avatar bg-light d-flex align-items-center justify-content-center\">
                                                    <i class=\"fas fa-user text-muted small\"></i>
                                                </div>
                                            ";
                }
                // line 726
                yield "                                            <div class=\"user-details\">
                                                <span class=\"user-name\">";
                // line 727
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 727), "fullName", [], "any", false, false, false, 727)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 727), "fullName", [], "any", false, false, false, 727), "html", null, true)) : ("Utilisateur"));
                yield "</span>
                                                <span class=\"user-email\">";
                // line 728
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 728), "email", [], "any", false, false, false, 728), "html", null, true);
                yield "</span>
                                                <span class=\"user-role\">";
                // line 729
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 729), "roleLabel", [], "any", false, false, false, 729), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            } else {
                // line 732
                yield "                                            <div class=\"user-avatar bg-light d-flex align-items-center justify-content-center\">
                                                <i class=\"fas fa-robot text-muted small\"></i>
                                            </div>
                                            <div class=\"user-details\">
                                                <span class=\"user-name\">Système</span>
                                                <span class=\"user-email\">system@hma.com</span>
                                                <span class=\"user-role\">Automatique</span>
                                            </div>
                                        ";
            }
            // line 741
            yield "                                    </div>
                                </td>
                                <td class=\"d-none d-xl-table-cell\">
                                    <div>
                                        ";
            // line 745
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 745)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 746
                yield "                                            <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 746)), "truncate", [30], "method", false, false, false, 746), "html", null, true);
                yield "</small>
                                        ";
            }
            // line 748
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "referenceId", [], "any", false, false, false, 748)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 749
                yield "                                            <br><small class=\"text-muted\">#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "referenceId", [], "any", false, false, false, 749), "html", null, true);
                yield "</small>
                                        ";
            }
            // line 751
            yield "                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    <a href=\"";
            // line 754
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "id", [], "any", false, false, false, 754)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-action-dark\" title=\"Voir le détail\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 759
        if (!$context['_iterated']) {
            // line 760
            yield "                            <tr>
                                <td colspan=\"8\" class=\"text-center py-4 py-md-5\">
                                    <i class=\"fas fa-exchange-alt fa-2x fa-md-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0 small\">Aucun mouvement trouvé pour ce produit</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres pour voir plus de résultats</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 768
        yield "                    </tbody>
                </table>
            </div>
        </div>
        ";
        // line 772
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 773
            yield "        <div class=\"card-footer bg-white py-2 py-md-3\">
            <nav>
                <ul class=\"pagination pagination-sm justify-content-center mb-0 flex-wrap gap-1\">
                    ";
            // line 776
            if ((($context["currentPage"] ?? null) > 1)) {
                // line 777
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 778
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 778), "page" => (($context["currentPage"] ?? null) - 1)]), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i> <span class=\"d-none d-sm-inline\">Précédent</span>
                            </a>
                        </li>
                    ";
            }
            // line 783
            yield "                    ";
            $context["maxVisible"] = 5;
            // line 784
            yield "                    ";
            $context["startPage"] = max(1, (($context["currentPage"] ?? null) - 2));
            // line 785
            yield "                    ";
            $context["endPage"] = min(($context["totalPages"] ?? null), ((($context["startPage"] ?? null) + ($context["maxVisible"] ?? null)) - 1));
            // line 786
            yield "                    ";
            if (((($context["endPage"] ?? null) - ($context["startPage"] ?? null)) < (($context["maxVisible"] ?? null) - 1))) {
                // line 787
                yield "                        ";
                $context["startPage"] = max(1, ((($context["endPage"] ?? null) - ($context["maxVisible"] ?? null)) + 1));
                // line 788
                yield "                    ";
            }
            // line 789
            yield "                    
                    ";
            // line 790
            if ((($context["startPage"] ?? null) > 1)) {
                // line 791
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 792
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 792), "page" => 1]), "html", null, true);
                yield "\">1</a>
                        </li>
                        ";
                // line 794
                if ((($context["startPage"] ?? null) > 2)) {
                    // line 795
                    yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                }
                // line 797
                yield "                    ";
            }
            // line 798
            yield "                    
                    ";
            // line 799
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 800
                yield "                        <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 801
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 801), "page" => $context["page"]]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 804
            yield "                    
                    ";
            // line 805
            if ((($context["endPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 806
                yield "                        ";
                if ((($context["endPage"] ?? null) < (($context["totalPages"] ?? null) - 1))) {
                    // line 807
                    yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                }
                // line 809
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 810
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 810), "page" => ($context["totalPages"] ?? null)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            // line 813
            yield "                    
                    ";
            // line 814
            if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 815
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 816
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 816), "page" => (($context["currentPage"] ?? null) + 1)]), "html", null, true);
                yield "\">
                                <span class=\"d-none d-sm-inline\">Suivant</span> <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 821
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 825
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 829
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 830
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
        return "admin/product/stock_movements.html.twig";
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
        return array (  1240 => 830,  1233 => 829,  1226 => 825,  1220 => 821,  1212 => 816,  1209 => 815,  1207 => 814,  1204 => 813,  1196 => 810,  1193 => 809,  1189 => 807,  1186 => 806,  1184 => 805,  1181 => 804,  1170 => 801,  1165 => 800,  1161 => 799,  1158 => 798,  1155 => 797,  1151 => 795,  1149 => 794,  1144 => 792,  1141 => 791,  1139 => 790,  1136 => 789,  1133 => 788,  1130 => 787,  1127 => 786,  1124 => 785,  1121 => 784,  1118 => 783,  1110 => 778,  1107 => 777,  1105 => 776,  1100 => 773,  1098 => 772,  1092 => 768,  1079 => 760,  1077 => 759,  1067 => 754,  1062 => 751,  1056 => 749,  1053 => 748,  1047 => 746,  1045 => 745,  1039 => 741,  1028 => 732,  1022 => 729,  1018 => 728,  1014 => 727,  1011 => 726,  1005 => 722,  997 => 720,  994 => 719,  992 => 718,  981 => 712,  977 => 711,  972 => 708,  968 => 706,  962 => 704,  960 => 703,  956 => 701,  952 => 699,  946 => 696,  941 => 695,  939 => 694,  934 => 692,  929 => 691,  927 => 690,  920 => 686,  916 => 685,  912 => 684,  906 => 681,  902 => 680,  896 => 678,  893 => 677,  888 => 676,  867 => 658,  852 => 646,  848 => 645,  838 => 638,  829 => 632,  821 => 626,  814 => 624,  804 => 621,  798 => 619,  796 => 618,  789 => 617,  785 => 616,  780 => 614,  774 => 613,  769 => 612,  765 => 611,  746 => 595,  738 => 589,  722 => 576,  718 => 575,  711 => 571,  688 => 551,  665 => 531,  641 => 510,  637 => 509,  630 => 505,  607 => 485,  584 => 465,  572 => 455,  570 => 454,  555 => 442,  537 => 427,  519 => 412,  501 => 397,  484 => 383,  474 => 378,  468 => 375,  463 => 373,  447 => 360,  443 => 359,  435 => 354,  427 => 349,  418 => 342,  411 => 341,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/product/stock_movements.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\stock_movements.html.twig");
    }
}
