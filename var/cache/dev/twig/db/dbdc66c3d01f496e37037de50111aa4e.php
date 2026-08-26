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
class __TwigTemplate_a62a4d5a7d82871f511512773acfa5b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/stock_movements.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/stock_movements.html.twig"));

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

        yield "Mouvements de stock - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 341
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 359, $this->source); })()), "id", [], "any", false, false, false, 359)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 360, $this->source); })()), "name", [], "any", false, false, false, 360)), "truncate", [20], "method", false, false, false, 360), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 373, $this->source); })()), "name", [], "any", false, false, false, 373), "html", null, true);
        yield "</span>
                <span class=\"text-muted small\">
                    <i class=\"fas fa-barcode me-1\"></i>";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 375, $this->source); })()), "barcode", [], "any", false, false, false, 375), "html", null, true);
        yield "
                </span>
                <span class=\"text-muted small\">
                    <i class=\"fas fa-box me-1\"></i>Stock: ";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 378, $this->source); })()), "currentStock", [], "any", false, false, false, 378), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 378)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 378, $this->source); })()), "unit", [], "any", false, false, false, 378), "pièce")) : ("pièce")), "html", null, true);
        yield "
                </span>
            </div>
        </div>
        <div>
            <a href=\"";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 383, $this->source); })()), "id", [], "any", false, false, false, 383)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_movements", [], "any", true, true, false, 397)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 397, $this->source); })()), "total_movements", [], "any", false, false, false, 397), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_in", [], "any", true, true, false, 412)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 412, $this->source); })()), "total_in", [], "any", false, false, false, 412), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_out", [], "any", true, true, false, 427)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 427, $this->source); })()), "total_out", [], "any", false, false, false, 427), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 442, $this->source); })()), "currentStock", [], "any", false, false, false, 442), 0, ",", " "), "html", null, true);
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 454, $this->source); })())) > 0)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "purchase_in", [], "any", true, true, false, 465) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 465, $this->source); })()), "purchase_in", [], "any", false, false, false, 465)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 465, $this->source); })()), "purchase_in", [], "any", false, false, false, 465)) : (0)), 0, ",", " "), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "sale_out", [], "any", true, true, false, 485) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 485, $this->source); })()), "sale_out", [], "any", false, false, false, 485)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 485, $this->source); })()), "sale_out", [], "any", false, false, false, 485)) : (0)), 0, ",", " "), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", true, true, false, 505) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 505, $this->source); })()), "adjustment_in", [], "any", false, false, false, 505)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 505, $this->source); })()), "adjustment_in", [], "any", false, false, false, 505)) : (0)) + (((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", true, true, false, 505) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 505, $this->source); })()), "adjustment_out", [], "any", false, false, false, 505)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 505, $this->source); })()), "adjustment_out", [], "any", false, false, false, 505)) : (0))), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                            <div class=\"stat-sub mt-1 d-none d-sm-block small\">
                                <small>
                                    ➕ Entrées: ";
            // line 509
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_in", [], "any", true, true, false, 509) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 509, $this->source); })()), "adjustment_in", [], "any", false, false, false, 509)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 509, $this->source); })()), "adjustment_in", [], "any", false, false, false, 509)) : (0)), 0, ",", " "), "html", null, true);
            yield " | 
                                    ➖ Sorties: ";
            // line 510
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "adjustment_out", [], "any", true, true, false, 510) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 510, $this->source); })()), "adjustment_out", [], "any", false, false, false, 510)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 510, $this->source); })()), "adjustment_out", [], "any", false, false, false, 510)) : (0)), 0, ",", " "), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_in", [], "any", true, true, false, 531) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 531, $this->source); })()), "return_in", [], "any", false, false, false, 531)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 531, $this->source); })()), "return_in", [], "any", false, false, false, 531)) : (0)), 0, ",", " "), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "return_out", [], "any", true, true, false, 551) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 551, $this->source); })()), "return_out", [], "any", false, false, false, 551)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 551, $this->source); })()), "return_out", [], "any", false, false, false, 551)) : (0)), 0, ",", " "), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", true, true, false, 571) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 571, $this->source); })()), "transfer_in", [], "any", false, false, false, 571)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 571, $this->source); })()), "transfer_in", [], "any", false, false, false, 571)) : (0)) + (((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", true, true, false, 571) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 571, $this->source); })()), "transfer_out", [], "any", false, false, false, 571)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 571, $this->source); })()), "transfer_out", [], "any", false, false, false, 571)) : (0))), 0, ",", " "), "html", null, true);
            yield "
                            </div>
                            <div class=\"stat-sub mt-1 d-none d-sm-block small\">
                                <small>
                                    ➕ Entrants: ";
            // line 575
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_in", [], "any", true, true, false, 575) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 575, $this->source); })()), "transfer_in", [], "any", false, false, false, 575)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 575, $this->source); })()), "transfer_in", [], "any", false, false, false, 575)) : (0)), 0, ",", " "), "html", null, true);
            yield " | 
                                    ➖ Sortants: ";
            // line 576
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, ($context["movementTypeStats"] ?? null), "transfer_out", [], "any", true, true, false, 576) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 576, $this->source); })()), "transfer_out", [], "any", false, false, false, 576)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypeStats"]) || array_key_exists("movementTypeStats", $context) ? $context["movementTypeStats"] : (function () { throw new RuntimeError('Variable "movementTypeStats" does not exist.', 576, $this->source); })()), "transfer_out", [], "any", false, false, false, 576)) : (0)), 0, ",", " "), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 595, $this->source); })()), "id", [], "any", false, false, false, 595)]), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["movementHierarchy"]) || array_key_exists("movementHierarchy", $context) ? $context["movementHierarchy"] : (function () { throw new RuntimeError('Variable "movementHierarchy" does not exist.', 611, $this->source); })()));
        foreach ($context['_seq'] as $context["category"] => $context["data"]) {
            // line 612
            yield "                                <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "\">
                                    <option value=\"all_";
            // line 613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"]), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 613, $this->source); })()), "movement_type", [], "any", false, false, false, 613) == ("all_" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"])))) ? ("selected") : (""));
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
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 617, $this->source); })()), "movement_type", [], "any", false, false, false, 617) == $context["typeKey"])) ? ("selected") : (""));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 632)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 632, $this->source); })()), "date_from", [], "any", false, false, false, 632), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    
                    <!-- Date au - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-bold small filter-label\">Date au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm filter-select\" value=\"";
        // line 638
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 638)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 638, $this->source); })()), "date_to", [], "any", false, false, false, 638), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    
                    <!-- Ordre - 100% sur mobile, 2 sur desktop -->
                    <div class=\"col-12 col-md-2 filter-col-fourth\">
                        <label class=\"form-label fw-bold small filter-label\">Ordre</label>
                        <select name=\"direction\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"desc\" ";
        // line 645
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 645)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 645, $this->source); })()), "direction", [], "any", false, false, false, 645), "desc")) : ("desc")) == "desc")) ? ("selected") : (""));
        yield ">↓ Décroissant</option>
                            <option value=\"asc\" ";
        // line 646
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 646)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 646, $this->source); })()), "direction", [], "any", false, false, false, 646), "desc")) : ("desc")) == "asc")) ? ("selected") : (""));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["movements"]) || array_key_exists("movements", $context) ? $context["movements"] : (function () { throw new RuntimeError('Variable "movements" does not exist.', 658, $this->source); })())), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["movements"]) || array_key_exists("movements", $context) ? $context["movements"] : (function () { throw new RuntimeError('Variable "movements" does not exist.', 676, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
            // line 677
            yield "                            ";
            $context["rowClass"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 677), "_")));
            // line 678
            yield "                            <tr class=\"movement-row-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 678, $this->source); })()), "html", null, true);
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
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 772, $this->source); })()) > 1)) {
            // line 773
            yield "        <div class=\"card-footer bg-white py-2 py-md-3\">
            <nav>
                <ul class=\"pagination pagination-sm justify-content-center mb-0 flex-wrap gap-1\">
                    ";
            // line 776
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 776, $this->source); })()) > 1)) {
                // line 777
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 778
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 778, $this->source); })()), "id", [], "any", false, false, false, 778), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 778, $this->source); })()) - 1)]), "html", null, true);
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
            $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 784, $this->source); })()) - 2));
            // line 785
            yield "                    ";
            $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 785, $this->source); })()), (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 785, $this->source); })()) + (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 785, $this->source); })())) - 1));
            // line 786
            yield "                    ";
            if ((((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 786, $this->source); })()) - (isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 786, $this->source); })())) < ((isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 786, $this->source); })()) - 1))) {
                // line 787
                yield "                        ";
                $context["startPage"] = max(1, (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 787, $this->source); })()) - (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 787, $this->source); })())) + 1));
                // line 788
                yield "                    ";
            }
            // line 789
            yield "                    
                    ";
            // line 790
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 790, $this->source); })()) > 1)) {
                // line 791
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 792
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 792, $this->source); })()), "id", [], "any", false, false, false, 792), "page" => 1]), "html", null, true);
                yield "\">1</a>
                        </li>
                        ";
                // line 794
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 794, $this->source); })()) > 2)) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 799, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 799, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 800
                yield "                        <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 800, $this->source); })()))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 801
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 801, $this->source); })()), "id", [], "any", false, false, false, 801), "page" => $context["page"]]), "html", null, true);
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
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 805, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 805, $this->source); })()))) {
                // line 806
                yield "                        ";
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 806, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 806, $this->source); })()) - 1))) {
                    // line 807
                    yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                }
                // line 809
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 810
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 810, $this->source); })()), "id", [], "any", false, false, false, 810), "page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 810, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 810, $this->source); })()), "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            // line 813
            yield "                    
                    ";
            // line 814
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 814, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 814, $this->source); })()))) {
                // line 815
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 816
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 816, $this->source); })()), "id", [], "any", false, false, false, 816), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 816, $this->source); })()) + 1)]), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 829
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  1294 => 830,  1281 => 829,  1268 => 825,  1262 => 821,  1254 => 816,  1251 => 815,  1249 => 814,  1246 => 813,  1238 => 810,  1235 => 809,  1231 => 807,  1228 => 806,  1226 => 805,  1223 => 804,  1212 => 801,  1207 => 800,  1203 => 799,  1200 => 798,  1197 => 797,  1193 => 795,  1191 => 794,  1186 => 792,  1183 => 791,  1181 => 790,  1178 => 789,  1175 => 788,  1172 => 787,  1169 => 786,  1166 => 785,  1163 => 784,  1160 => 783,  1152 => 778,  1149 => 777,  1147 => 776,  1142 => 773,  1140 => 772,  1134 => 768,  1121 => 760,  1119 => 759,  1109 => 754,  1104 => 751,  1098 => 749,  1095 => 748,  1089 => 746,  1087 => 745,  1081 => 741,  1070 => 732,  1064 => 729,  1060 => 728,  1056 => 727,  1053 => 726,  1047 => 722,  1039 => 720,  1036 => 719,  1034 => 718,  1023 => 712,  1019 => 711,  1014 => 708,  1010 => 706,  1004 => 704,  1002 => 703,  998 => 701,  994 => 699,  988 => 696,  983 => 695,  981 => 694,  976 => 692,  971 => 691,  969 => 690,  962 => 686,  958 => 685,  954 => 684,  948 => 681,  944 => 680,  938 => 678,  935 => 677,  930 => 676,  909 => 658,  894 => 646,  890 => 645,  880 => 638,  871 => 632,  863 => 626,  856 => 624,  846 => 621,  840 => 619,  838 => 618,  831 => 617,  827 => 616,  822 => 614,  816 => 613,  811 => 612,  807 => 611,  788 => 595,  780 => 589,  764 => 576,  760 => 575,  753 => 571,  730 => 551,  707 => 531,  683 => 510,  679 => 509,  672 => 505,  649 => 485,  626 => 465,  614 => 455,  612 => 454,  597 => 442,  579 => 427,  561 => 412,  543 => 397,  526 => 383,  516 => 378,  510 => 375,  505 => 373,  489 => 360,  485 => 359,  477 => 354,  469 => 349,  460 => 342,  447 => 341,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/product/stock_movements.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Mouvements de stock - {{ product.name }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
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
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- En-tête -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item small\">
                        <a href=\"{{ path('app_admin_product_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item small\">
                        <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"text-decoration-none\">
                            {{ product.name|u.truncate(20) }}
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
                <span class=\"badge bg-primary\">{{ product.name }}</span>
                <span class=\"text-muted small\">
                    <i class=\"fas fa-barcode me-1\"></i>{{ product.barcode }}
                </span>
                <span class=\"text-muted small\">
                    <i class=\"fas fa-box me-1\"></i>Stock: {{ product.currentStock }} {{ product.unit|default('pièce') }}
                </span>
            </div>
        </div>
        <div>
            <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"btn btn-back-dark btn-sm\">
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
                            <div class=\"stat-value\">{{ stats.total_movements|default(0)|number_format(0, ',', ' ') }}</div>
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
                            <div class=\"stat-value\">{{ stats.total_in|default(0)|number_format(0, ',', ' ') }}</div>
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
                            <div class=\"stat-value\">{{ stats.total_out|default(0)|number_format(0, ',', ' ') }}</div>
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
                            <div class=\"stat-value\">{{ product.currentStock|number_format(0, ',', ' ') }}</div>
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
    {% if movementTypeStats|length > 0 %}
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-4\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> Achats
                            </div>
                            <div class=\"stat-value\">
                                {{ (movementTypeStats.purchase_in ?? 0)|number_format(0, ',', ' ') }}
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
                                {{ (movementTypeStats.sale_out ?? 0)|number_format(0, ',', ' ') }}
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
                                {{ ((movementTypeStats.adjustment_in ?? 0) + (movementTypeStats.adjustment_out ?? 0))|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"stat-sub mt-1 d-none d-sm-block small\">
                                <small>
                                    ➕ Entrées: {{ (movementTypeStats.adjustment_in ?? 0)|number_format(0, ',', ' ') }} | 
                                    ➖ Sorties: {{ (movementTypeStats.adjustment_out ?? 0)|number_format(0, ',', ' ') }}
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
                                {{ (movementTypeStats.return_in ?? 0)|number_format(0, ',', ' ') }}
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
                                {{ (movementTypeStats.return_out ?? 0)|number_format(0, ',', ' ') }}
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
                                {{ ((movementTypeStats.transfer_in ?? 0) + (movementTypeStats.transfer_out ?? 0))|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"stat-sub mt-1 d-none d-sm-block small\">
                                <small>
                                    ➕ Entrants: {{ (movementTypeStats.transfer_in ?? 0)|number_format(0, ',', ' ') }} | 
                                    ➖ Sortants: {{ (movementTypeStats.transfer_out ?? 0)|number_format(0, ',', ' ') }}
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
    {% endif %}

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"{{ path('app_admin_product_stock_movements', {'id': product.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
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
                            {% for category, data in movementHierarchy %}
                                <optgroup label=\"{{ category }}\">
                                    <option value=\"all_{{ category|lower }}\" {{ filters.movement_type == 'all_' ~ category|lower ? 'selected' }}>
                                        📌 Tous les {{ category|lower }}
                                    </option>
                                    {% for typeKey, typeData in data.children %}
                                        <option value=\"{{ typeKey }}\" {{ filters.movement_type == typeKey ? 'selected' }}>
                                            {% if typeData.icon is defined %}
                                                <i class=\"{{ typeData.icon }} me-1\"></i>
                                            {% endif %}
                                            {{ typeData.label }}
                                        </option>
                                    {% endfor %}
                                </optgroup>
                            {% endfor %}
                        </select>
                    </div>
                    
                    <!-- Date du - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-bold small filter-label\">Date du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm filter-select\" value=\"{{ filters.date_from|default('') }}\">
                    </div>
                    
                    <!-- Date au - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-bold small filter-label\">Date au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm filter-select\" value=\"{{ filters.date_to|default('') }}\">
                    </div>
                    
                    <!-- Ordre - 100% sur mobile, 2 sur desktop -->
                    <div class=\"col-12 col-md-2 filter-col-fourth\">
                        <label class=\"form-label fw-bold small filter-label\">Ordre</label>
                        <select name=\"direction\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"desc\" {{ filters.direction|default('desc') == 'desc' ? 'selected' }}>↓ Décroissant</option>
                            <option value=\"asc\" {{ filters.direction|default('desc') == 'asc' ? 'selected' }}>↑ Croissant</option>
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
            <span class=\"badge bg-secondary\">{{ movements|length }}</span>
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
                        {% for movement in movements %}
                            {% set rowClass = movement.movementType|split('_')|first|lower %}
                            <tr class=\"movement-row-{{ rowClass }}\">
                                <td>
                                    <div class=\"fw-bold small\">{{ movement.createdAt|date('d/m/Y') }}</div>
                                    <small class=\"text-muted\">{{ movement.createdAt|date('H:i:s') }}</small>
                                </td>
                                <td>
                                    <span class=\"badge {{ movement.movementTypeBadgeClass }} small\" style=\"font-size:0.7rem; white-space:nowrap;\">
                                        <i class=\"{{ movement.movementTypeIcon }} me-1\"></i>
                                        {{ movement.movementTypeLabel|u.truncate(15) }}
                                    </span>
                                </td>
                                <td>
                                    {% if movement.stockBatch %}
                                        <a href=\"{{ path('app_admin_product_show', {'id': movement.stockBatch.product.id}) }}\" class=\"text-decoration-none small\">
                                            {{ movement.stockBatch.product.name|u.truncate(20) }}
                                        </a>
                                    {% elseif movement.product %}
                                        <a href=\"{{ path('app_admin_product_show', {'id': movement.product.id}) }}\" class=\"text-decoration-none small\">
                                            {{ movement.product.name|u.truncate(20) }}
                                        </a>
                                    {% else %}
                                        <span class=\"text-muted small\">—</span>
                                    {% endif %}
                                </td>
                                <td class=\"d-none d-lg-table-cell\">
                                    {% if movement.stockBatch %}
                                        <code class=\"small\">{{ movement.stockBatch.batchNumber|u.truncate(12) }}</code>
                                    {% else %}
                                        <span class=\"text-muted small\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"text-end\">
                                        <span class=\"fw-bold small {{ movement.movementType in ['purchase_in', 'return_in', 'adjustment_in', 'transfer_in'] ? 'text-success' : 'text-danger' }}\">
                                            {{ movement.movementType in ['purchase_in', 'return_in', 'adjustment_in', 'transfer_in'] ? '+' : '-' }} {{ movement.quantity|number_format(0, ',', ' ') }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"user-info\">
                                        {% if movement.user %}
                                            {% if movement.user.photo %}
                                                <img src=\"{{ asset('uploads/users/' ~ movement.user.photo) }}\" alt=\"{{ movement.user.fullName }}\" class=\"user-avatar\" loading=\"lazy\">
                                            {% else %}
                                                <div class=\"user-avatar bg-light d-flex align-items-center justify-content-center\">
                                                    <i class=\"fas fa-user text-muted small\"></i>
                                                </div>
                                            {% endif %}
                                            <div class=\"user-details\">
                                                <span class=\"user-name\">{{ movement.user.fullName ?: 'Utilisateur' }}</span>
                                                <span class=\"user-email\">{{ movement.user.email }}</span>
                                                <span class=\"user-role\">{{ movement.user.roleLabel }}</span>
                                            </div>
                                        {% else %}
                                            <div class=\"user-avatar bg-light d-flex align-items-center justify-content-center\">
                                                <i class=\"fas fa-robot text-muted small\"></i>
                                            </div>
                                            <div class=\"user-details\">
                                                <span class=\"user-name\">Système</span>
                                                <span class=\"user-email\">system@hma.com</span>
                                                <span class=\"user-role\">Automatique</span>
                                            </div>
                                        {% endif %}
                                    </div>
                                </td>
                                <td class=\"d-none d-xl-table-cell\">
                                    <div>
                                        {% if movement.notes %}
                                            <small>{{ movement.notes|u.truncate(30) }}</small>
                                        {% endif %}
                                        {% if movement.referenceId %}
                                            <br><small class=\"text-muted\">#{{ movement.referenceId }}</small>
                                        {% endif %}
                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    <a href=\"{{ path('app_admin_stock_movement_show', {'id': movement.id}) }}\" class=\"btn btn-sm btn-action-dark\" title=\"Voir le détail\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"8\" class=\"text-center py-4 py-md-5\">
                                    <i class=\"fas fa-exchange-alt fa-2x fa-md-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0 small\">Aucun mouvement trouvé pour ce produit</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres pour voir plus de résultats</p>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        {% if totalPages > 1 %}
        <div class=\"card-footer bg-white py-2 py-md-3\">
            <nav>
                <ul class=\"pagination pagination-sm justify-content-center mb-0 flex-wrap gap-1\">
                    {% if currentPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_product_stock_movements', {'id': product.id, 'page': currentPage - 1}) }}\">
                                <i class=\"fas fa-chevron-left\"></i> <span class=\"d-none d-sm-inline\">Précédent</span>
                            </a>
                        </li>
                    {% endif %}
                    {% set maxVisible = 5 %}
                    {% set startPage = max(1, currentPage - 2) %}
                    {% set endPage = min(totalPages, startPage + maxVisible - 1) %}
                    {% if endPage - startPage < maxVisible - 1 %}
                        {% set startPage = max(1, endPage - maxVisible + 1) %}
                    {% endif %}
                    
                    {% if startPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_product_stock_movements', {'id': product.id, 'page': 1}) }}\">1</a>
                        </li>
                        {% if startPage > 2 %}
                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        {% endif %}
                    {% endif %}
                    
                    {% for page in startPage..endPage %}
                        <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_product_stock_movements', {'id': product.id, 'page': page}) }}\">{{ page }}</a>
                        </li>
                    {% endfor %}
                    
                    {% if endPage < totalPages %}
                        {% if endPage < totalPages - 1 %}
                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        {% endif %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_product_stock_movements', {'id': product.id, 'page': totalPages}) }}\">{{ totalPages }}</a>
                        </li>
                    {% endif %}
                    
                    {% if currentPage < totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_product_stock_movements', {'id': product.id, 'page': currentPage + 1}) }}\">
                                <span class=\"d-none d-sm-inline\">Suivant</span> <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
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
{% endblock %}", "admin/product/stock_movements.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\stock_movements.html.twig");
    }
}
