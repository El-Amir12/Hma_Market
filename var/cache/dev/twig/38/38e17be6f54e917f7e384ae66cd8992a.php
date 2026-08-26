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
class __TwigTemplate_9136bb7b323253acffb65c0884e34d54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/index.html.twig"));

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

        yield "Gestion des lots - ";
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 385
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 401, $this->source); })()), "id", [], "any", false, false, false, 401)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 402, $this->source); })()), "name", [], "any", false, false, false, 402)), "truncate", [20], "method", false, false, false, 402), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 410, $this->source); })()), "name", [], "any", false, false, false, 410)), "truncate", [25], "method", false, false, false, 410), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 424, $this->source); })()), "id", [], "any", false, false, false, 424)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 444)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 444, $this->source); })()), "total_batches", [], "any", false, false, false, 444), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 460)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 460, $this->source); })()), "active_batches", [], "any", false, false, false, 460), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactive_batches", [], "any", true, true, false, 476)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 476, $this->source); })()), "inactive_batches", [], "any", false, false, false, 476), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 495)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 495, $this->source); })()), "total_quantity", [], "any", false, false, false, 495), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 511)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 511, $this->source); })()), "expired_batches", [], "any", false, false, false, 511), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 527)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 527, $this->source); })()), "expiring_soon_batches", [], "any", false, false, false, 527), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "has_issue_count", [], "any", true, true, false, 543)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 543, $this->source); })()), "has_issue_count", [], "any", false, false, false, 543), 0)) : (0)), "html", null, true);
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
         FILTRES - VERSION CORRIGÉE
    ========================================== -->
    <div class=\"card border-0 shadow-sm mb-3 mb-md-4 filters-card\">
        <div class=\"card-header py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"";
        // line 563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 563, $this->source); })()), "id", [], "any", false, false, false, 563)]), "html", null, true);
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
                    <!-- Recherche - 100% sur mobile, 3 sur desktop -->
                    <div class=\"col-12 col-md-3 filter-col\">
                        <label class=\"form-label fw-semibold small filter-label\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control form-control-sm filter-select\" placeholder=\"N° lot...\" value=\"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 578)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 578, $this->source); })()), "search", [], "any", false, false, false, 578), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    
                    <!-- Statut - 50% sur mobile, 2 sur desktop -->
                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 586
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 586)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 586, $this->source); })()), "status", [], "any", false, false, false, 586), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 587
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 587)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 587, $this->source); })()), "status", [], "any", false, false, false, 587), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>
                    
                    <!-- Expiration - 50% sur mobile, 2 sur desktop -->
                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" ";
        // line 596
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 596)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 596, $this->source); })()), "expiry_status", [], "any", false, false, false, 596), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                            <option value=\"expiring_soon\" ";
        // line 597
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 597)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 597, $this->source); })()), "expiry_status", [], "any", false, false, false, 597), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Bientôt</option>
                            <option value=\"not_expiring\" ";
        // line 598
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 598)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 598, $this->source); })()), "expiry_status", [], "any", false, false, false, 598), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                        </select>
                    </div>
                    
                    <!-- Stock faible - 50% sur mobile, 2 sur desktop -->
                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 607
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 607)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 607, $this->source); })()), "low_stock", [], "any", false, false, false, 607), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10</option>
                        </select>
                    </div>
                    
                    <!-- Emplacement - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select form-select-sm select2-location filter-select\">
                            <option value=\"\">-- Tous --</option>
                            ";
        // line 616
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 616, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 617
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 617)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 617, $this->source); })()), "location", [], "any", false, false, false, 617), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($context["loc"]), "truncate", [15], "method", false, false, false, 617), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 619
        yield "                        </select>
                    </div>
                </div>

                <!-- LIGNE 2 -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <!-- Avoir - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 630
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 630)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 630, $this->source); })()), "has_issue", [], "any", false, false, false, 630), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">Avec avoir</option>
                            <option value=\"no\" ";
        // line 631
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 631)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 631, $this->source); })()), "has_issue", [], "any", false, false, false, 631), "")) : ("")) == "no")) ? ("selected") : (""));
        yield ">Sans avoir</option>
                        </select>
                    </div>
                    
                    <!-- Statut avoir - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Statut avoir</label>
                        <select name=\"issue_status\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"pending\">En attente</option>
                            <option value=\"acknowledged\">Accusé</option>
                            <option value=\"under_review\">En analyse</option>
                            <option value=\"partially_recovered\">Partiel</option>
                            <option value=\"recovered\">Récupéré</option>
                            <option value=\"lost\">Perdu</option>
                            <option value=\"closed\">Clôturé</option>
                        </select>
                    </div>
                    
                    <!-- Expiration du - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Expiration du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm filter-select\" value=\"";
        // line 653
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 653)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 653, $this->source); })()), "date_from", [], "any", false, false, false, 653), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    
                    <!-- Expiration au - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Expiration au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm filter-select\" value=\"";
        // line 659
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 659)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 659, $this->source); })()), "date_to", [], "any", false, false, false, 659), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                </div>

                <!-- LIGNE 3 -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <!-- Trier par - 50% sur mobile, 6 sur desktop -->
                    <div class=\"col-6 col-md-6 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Trier par</label>
                        <select name=\"sort\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"batch_number\" ";
        // line 669
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 669)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 669, $this->source); })()), "sort", [], "any", false, false, false, 669), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                            <option value=\"expiry_date\" ";
        // line 670
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 670)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 670, $this->source); })()), "sort", [], "any", false, false, false, 670), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Date expiration</option>
                            <option value=\"current_quantity\" ";
        // line 671
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 671)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 671, $this->source); })()), "sort", [], "any", false, false, false, 671), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            <option value=\"created_at\" ";
        // line 672
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 672)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 672, $this->source); })()), "sort", [], "any", false, false, false, 672), "expiry_date")) : ("expiry_date")) == "created_at")) ? ("selected") : (""));
        yield ">Date création</option>
                        </select>
                    </div>
                    
                    <!-- Ordre - 50% sur mobile, 6 sur desktop -->
                    <div class=\"col-6 col-md-6 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Ordre</label>
                        <select name=\"direction\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"asc\" ";
        // line 680
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 680)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 680, $this->source); })()), "direction", [], "any", false, false, false, 680), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">↑ Croissant</option>
                            <option value=\"desc\" ";
        // line 681
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 681)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 681, $this->source); })()), "direction", [], "any", false, false, false, 681), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
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
        // line 693
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 693, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 694
            yield "            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 694) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 694) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 695
            yield "            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 695) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 695) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 695) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 696
            yield "            ";
            $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 696) <= 10);
            // line 697
            yield "            ";
            $context["hasIssue"] = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 697);
            // line 698
            yield "            ";
            $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 698)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 698), "displayName", [], "any", false, false, false, 698)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 698)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 698)) : ("—"))));
            // line 699
            yield "
            ";
            // line 700
            $context["canReport"] = false;
            // line 701
            yield "            ";
            if (( !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 701, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 701))) {
                // line 702
                yield "                ";
                if ((array_key_exists("canReportIssue", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["canReportIssue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 702), [], "array", true, true, false, 702))) {
                    // line 703
                    yield "                    ";
                    $context["canReport"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 703, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 703), [], "array", false, false, false, 703);
                    // line 704
                    yield "                ";
                }
                // line 705
                yield "            ";
            }
            // line 706
            yield "
            ";
            // line 707
            $context["creditNote"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["supplierCreditNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 707), [], "array", true, true, false, 707)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplierCreditNotes"]) || array_key_exists("supplierCreditNotes", $context) ? $context["supplierCreditNotes"] : (function () { throw new RuntimeError('Variable "supplierCreditNotes" does not exist.', 707, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 707), [], "array", false, false, false, 707)) : (null));
            // line 708
            yield "
            <div class=\"col-12 col-sm-6 col-lg-6 col-xl-4\">
                <div class=\"card batch-card h-100 shadow-sm ";
            // line 710
            if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 710, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "has-issue";
            } elseif ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 710, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "expired";
            }
            yield "\">
                    <!-- En-tête -->
                    <div class=\"card-header d-flex flex-wrap justify-content-between align-items-center gap-2\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 714
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 714), "html", null, true);
            yield "\" id=\"batch_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 714), "html", null, true);
            yield "\" style=\"width:14px;height:14px;\">
                            <div>
                                <h6 class=\"mb-0 fw-bold fs-6 fs-md-5\">";
            // line 716
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 716), "html", null, true);
            yield "</h6>
                                <small class=\"text-muted small\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i>";
            // line 718
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "createdAt", [], "any", false, false, false, 718), "d/m/Y"), "html", null, true);
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
            // line 728
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 728)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2 text-info\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item small\" href=\"";
            // line 733
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 733)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2 text-warning\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item small\" href=\"";
            // line 738
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 738)]), "html", null, true);
            yield "\" target=\"_blank\">
                                        <i class=\"fas fa-print me-2 text-secondary\"></i> Imprimer
                                    </a>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 744
            if ((($tmp = (isset($context["canReport"]) || array_key_exists("canReport", $context) ? $context["canReport"] : (function () { throw new RuntimeError('Variable "canReport" does not exist.', 744, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 745
                yield "                                        <a class=\"dropdown-item text-danger small\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 745)]), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Signaler
                                            ";
                // line 747
                if ((array_key_exists("purchaseItems", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 747), [], "array", true, true, false, 747))) {
                    // line 748
                    yield "                                                ";
                    $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 748, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 748), [], "array", false, false, false, 748), "purchase", [], "any", false, false, false, 748);
                    // line 749
                    yield "                                                ";
                    if (((isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 749, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 749, $this->source); })()), "receivedAt", [], "any", false, false, false, 749))) {
                        // line 750
                        yield "                                                    ";
                        $context["daysRemaining"] = (30 - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 750, $this->source); })()), "receivedAt", [], "any", false, false, false, 750)], "method", false, false, false, 750), "days", [], "any", false, false, false, 750));
                        // line 751
                        yield "                                                    ";
                        if (((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 751, $this->source); })()) > 0)) {
                            // line 752
                            yield "                                                        <span class=\"badge bg-danger ms-1\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 752, $this->source); })()), "html", null, true);
                            yield "j</span>
                                                    ";
                        }
                        // line 754
                        yield "                                                ";
                    }
                    // line 755
                    yield "                                            ";
                }
                // line 756
                yield "                                        </a>
                                    ";
            } elseif ((            // line 757
(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 757, $this->source); })()) && (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 757, $this->source); })()))) {
                // line 758
                yield "                                        <a class=\"dropdown-item text-info small\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 758, $this->source); })()), "id", [], "any", false, false, false, 758)]), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-file-invoice-dollar me-2\"></i> Voir l'avoir
                                        </a>
                                    ";
            } elseif ((($tmp =             // line 761
(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 761, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 762
                yield "                                        <a class=\"dropdown-item text-muted small\" href=\"#\" onclick=\"return false;\">
                                            <i class=\"fas fa-file-invoice-dollar me-2\"></i> Avoir introuvable
                                        </a>
                                    ";
            } else {
                // line 766
                yield "                                        <a class=\"dropdown-item text-muted small\" href=\"#\" onclick=\"return false;\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Non disponible
                                        </a>
                                    ";
            }
            // line 770
            yield "                                </li>
                                <li>
                                    <button type=\"button\" class=\"dropdown-item small toggle-batch-btn\"
                                            data-batch-id=\"";
            // line 773
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 773), "html", null, true);
            yield "\"
                                            data-is-active=\"";
            // line 774
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 774)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                            data-batch-number=\"";
            // line 775
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 775), "html", null, true);
            yield "\"
                                            data-token=\"";
            // line 776
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 776))), "html", null, true);
            yield "\">
                                        <i class=\"fas ";
            // line 777
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 777)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield " me-2\"></i>
                                        ";
            // line 778
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 778)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                    </button>
                                </li>
                                ";
            // line 781
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 781)) == 0)) &&  !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 781, $this->source); })()))) {
                // line 782
                yield "                                    <li>
                                        <button type=\"button\" class=\"dropdown-item text-danger small delete-batch-btn\"
                                                data-batch-id=\"";
                // line 784
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 784), "html", null, true);
                yield "\"
                                                data-batch-number=\"";
                // line 785
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 785), "html", null, true);
                yield "\"
                                                data-token=\"";
                // line 786
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 786))), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    </li>
                                ";
            }
            // line 791
            yield "                            </ul>
                        </div>
                    </div>

                    <!-- Corps -->
                    <div class=\"card-body\">
                        <div class=\"mb-2 mb-md-3\">
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Emplacement</span>
                                ";
            // line 800
            if (((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 800, $this->source); })()) != "—")) {
                // line 801
                yield "                                    <span class=\"badge bg-info text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 801, $this->source); })())), "truncate", [15], "method", false, false, false, 801), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 803
                yield "                                    <span class=\"text-muted small\">—</span>
                                ";
            }
            // line 805
            yield "                            </div>

                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Quantité</span>
                                <div class=\"text-end\">
                                    <span class=\"fw-bold small ";
            // line 810
            if ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 810, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "text-danger";
            }
            yield "\">
                                        ";
            // line 811
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 811), "html", null, true);
            yield "
                                    </span>
                                    <small class=\"text-muted\">/ ";
            // line 813
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 813), "html", null, true);
            yield "</small>
                                    <div class=\"progress mt-1\" style=\"width: 80px; margin-left: auto;\">
                                        <div class=\"progress-bar
                                            ";
            // line 816
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 816) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 816)) * 100) <= 10)) {
                yield "bg-danger
                                            ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,             // line 817
$context["batch"], "currentQuantity", [], "any", false, false, false, 817) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 817)) * 100) <= 30)) {
                yield "bg-warning
                                            ";
            } else {
                // line 818
                yield "bg-success";
            }
            yield "\"
                                            style=\"width: ";
            // line 819
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 819) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 819)) * 100)), "html", null, true);
            yield "%\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Prix unitaire</span>
                                <span class=\"fw-bold text-primary small\">";
            // line 827
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 827), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 827)), "html", null, true);
            yield "</span>
                            </div>

                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Expiration</span>
                                <div>
                                    ";
            // line 833
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 833)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 834
                yield "                                        <span class=\"fw-bold small ";
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 834, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "text-danger";
                } elseif ((($tmp = (isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 834, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "text-warning";
                } else {
                    yield "text-success";
                }
                yield "\">
                                            ";
                // line 835
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 835), "d/m/Y"), "html", null, true);
                yield "
                                        </span>
                                        ";
                // line 837
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 837, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 838
                    yield "                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                        ";
                } elseif ((($tmp =                 // line 839
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 839, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 840
                    yield "                                            <span class=\"badge bg-warning text-dark ms-1\">Bientôt</span>
                                        ";
                }
                // line 842
                yield "                                    ";
            } else {
                // line 843
                yield "                                        <span class=\"text-muted small\">—</span>
                                    ";
            }
            // line 845
            yield "                                </div>
                            </div>

                            ";
            // line 849
            yield "                            ";
            if ((array_key_exists("purchaseItems", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 849), [], "array", true, true, false, 849))) {
                // line 850
                yield "                                ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 850, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 850), [], "array", false, false, false, 850), "purchase", [], "any", false, false, false, 850);
                // line 851
                yield "                                ";
                if (((isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 851, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 851, $this->source); })()), "receivedAt", [], "any", false, false, false, 851))) {
                    // line 852
                    yield "                                    ";
                    $context["daysRemaining"] = (30 - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 852, $this->source); })()), "receivedAt", [], "any", false, false, false, 852)], "method", false, false, false, 852), "days", [], "any", false, false, false, 852));
                    // line 853
                    yield "                                    <div class=\"mt-1 mt-md-2\">
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-calendar-check me-1\"></i>
                                            Réception: ";
                    // line 856
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 856, $this->source); })()), "receivedAt", [], "any", false, false, false, 856), "d/m/Y"), "html", null, true);
                    yield "
                                            ";
                    // line 857
                    if (((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 857, $this->source); })()) > 0)) {
                        // line 858
                        yield "                                                <span class=\"badge bg-success\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 858, $this->source); })()), "html", null, true);
                        yield "j</span>
                                            ";
                    } else {
                        // line 860
                        yield "                                                <span class=\"badge bg-secondary\">Délai expiré</span>
                                            ";
                    }
                    // line 862
                    yield "                                        </small>
                                    </div>
                                ";
                }
                // line 865
                yield "                            ";
            }
            // line 866
            yield "                        </div>

                        <!-- Section avoir -->
                        ";
            // line 869
            if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 869, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 870
                yield "                            <div class=\"alert alert-danger py-1 py-md-2 mb-0 small\">
                                <div class=\"d-flex flex-wrap justify-content-between align-items-center gap-1\">
                                    <div>
                                        <i class=\"fas fa-file-invoice-dollar me-1\"></i>
                                        <span class=\"badge ";
                // line 874
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusBadgeClass", [], "any", false, false, false, 874), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusLabel", [], "any", false, false, false, 874), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"text-end\">
                                        <small class=\"text-danger\">";
                // line 877
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 877), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 877)), "html", null, true);
                yield "</small>
                                    </div>
                                </div>
                            </div>
                        ";
            } else {
                // line 882
                yield "                            <div class=\"alert alert-light py-1 py-md-2 mb-0 text-center small\">
                                <span class=\"text-muted\">Aucun problème signalé</span>
                            </div>
                        ";
            }
            // line 886
            yield "                    </div>

                    <!-- Pied -->
                    <div class=\"card-footer d-flex flex-wrap justify-content-between\">
                        <span class=\"badge ";
            // line 890
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 890)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                            ";
            // line 891
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 891)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                        </span>
                        <small class=\"text-muted\">
                            <i class=\"fas fa-exchange-alt me-1\"></i>";
            // line 894
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 894)), "html", null, true);
            yield " mouvement(s)
                        </small>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 899
        if (!$context['_iterated']) {
            // line 900
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-4 py-md-5\">
                    <i class=\"fas fa-box-open fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h5 class=\"text-muted fs-6 fs-md-5\">Aucun lot trouvé</h5>
                    <p class=\"text-muted small\">Modifiez vos filtres ou créez un achat pour générer des lots</p>
                    <a href=\"";
            // line 905
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
        // line 911
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 989
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

        // line 990
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

    document.getElementById('selectAllBtn')?.addEventListener('click', function() {
        checkboxes.forEach(cb => cb.checked = true);
        updateSelectedCount();
    });

    document.getElementById('deselectAllBtn')?.addEventListener('click', function() {
        checkboxes.forEach(cb => cb.checked = false);
        updateSelectedCount();
    });

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  1493 => 990,  1480 => 989,  1393 => 911,  1381 => 905,  1374 => 900,  1372 => 899,  1362 => 894,  1356 => 891,  1352 => 890,  1346 => 886,  1340 => 882,  1332 => 877,  1324 => 874,  1318 => 870,  1316 => 869,  1311 => 866,  1308 => 865,  1303 => 862,  1299 => 860,  1293 => 858,  1291 => 857,  1287 => 856,  1282 => 853,  1279 => 852,  1276 => 851,  1273 => 850,  1270 => 849,  1265 => 845,  1261 => 843,  1258 => 842,  1254 => 840,  1252 => 839,  1249 => 838,  1247 => 837,  1242 => 835,  1231 => 834,  1229 => 833,  1220 => 827,  1209 => 819,  1204 => 818,  1199 => 817,  1195 => 816,  1189 => 813,  1184 => 811,  1178 => 810,  1171 => 805,  1167 => 803,  1161 => 801,  1159 => 800,  1148 => 791,  1140 => 786,  1136 => 785,  1132 => 784,  1128 => 782,  1126 => 781,  1120 => 778,  1116 => 777,  1112 => 776,  1108 => 775,  1104 => 774,  1100 => 773,  1095 => 770,  1089 => 766,  1083 => 762,  1081 => 761,  1074 => 758,  1072 => 757,  1069 => 756,  1066 => 755,  1063 => 754,  1057 => 752,  1054 => 751,  1051 => 750,  1048 => 749,  1045 => 748,  1043 => 747,  1037 => 745,  1035 => 744,  1026 => 738,  1018 => 733,  1010 => 728,  997 => 718,  992 => 716,  985 => 714,  974 => 710,  970 => 708,  968 => 707,  965 => 706,  962 => 705,  959 => 704,  956 => 703,  953 => 702,  950 => 701,  948 => 700,  945 => 699,  942 => 698,  939 => 697,  936 => 696,  933 => 695,  930 => 694,  925 => 693,  910 => 681,  906 => 680,  895 => 672,  891 => 671,  887 => 670,  883 => 669,  870 => 659,  861 => 653,  836 => 631,  832 => 630,  819 => 619,  806 => 617,  802 => 616,  790 => 607,  778 => 598,  774 => 597,  770 => 596,  758 => 587,  754 => 586,  743 => 578,  725 => 563,  702 => 543,  683 => 527,  664 => 511,  645 => 495,  623 => 476,  604 => 460,  585 => 444,  562 => 424,  556 => 421,  550 => 418,  539 => 410,  528 => 402,  524 => 401,  516 => 396,  504 => 386,  491 => 385,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des lots - {{ product.name }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
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
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
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
                    <li class=\"breadcrumb-item active small\">Lots</li>
                </ol>
            </nav>
            <h1 class=\"h4 h-md-3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-primary\"></i>
                Lots de stock - {{ product.name|u.truncate(25) }}
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Les lots sont créés automatiquement lors des achats.
            </p>
        </div>
        <div class=\"d-flex gap-1 gap-md-2 flex-wrap\">
            <a href=\"{{ path('app_admin_location_index') }}\" class=\"btn btn-outline-info btn-sm\">
                <i class=\"fas fa-map-marker-alt me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Emplacements</span>
            </a>
            <a href=\"{{ path('purchase_cart') }}\" class=\"btn btn-success btn-sm\">
                <i class=\"fas fa-cart-plus me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Nouvel achat</span>
            </a>
            <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
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
                            <div class=\"stat-value\">{{ stats.total_batches|default(0) }}</div>
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
                            <div class=\"stat-value\">{{ stats.active_batches|default(0) }}</div>
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
                            <div class=\"stat-value\">{{ stats.inactive_batches|default(0) }}</div>
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
                            <div class=\"stat-value\">{{ stats.total_quantity|default(0)|number_format(0, ',', ' ') }}</div>
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
                            <div class=\"stat-value\">{{ stats.expired_batches|default(0) }}</div>
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
                            <div class=\"stat-value\">{{ stats.expiring_soon_batches|default(0) }}</div>
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
                            <div class=\"stat-value\">{{ stats.has_issue_count|default(0) }}</div>
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
         FILTRES - VERSION CORRIGÉE
    ========================================== -->
    <div class=\"card border-0 shadow-sm mb-3 mb-md-4 filters-card\">
        <div class=\"card-header py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
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
                    <!-- Recherche - 100% sur mobile, 3 sur desktop -->
                    <div class=\"col-12 col-md-3 filter-col\">
                        <label class=\"form-label fw-semibold small filter-label\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control form-control-sm filter-select\" placeholder=\"N° lot...\" value=\"{{ filters.search|default('') }}\">
                    </div>
                    
                    <!-- Statut - 50% sur mobile, 2 sur desktop -->
                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ filters.status|default('') == 'active' ? 'selected' }}>Actifs</option>
                            <option value=\"inactive\" {{ filters.status|default('') == 'inactive' ? 'selected' }}>Inactifs</option>
                        </select>
                    </div>
                    
                    <!-- Expiration - 50% sur mobile, 2 sur desktop -->
                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" {{ filters.expiry_status|default('') == 'expired' ? 'selected' }}>Expirés</option>
                            <option value=\"expiring_soon\" {{ filters.expiry_status|default('') == 'expiring_soon' ? 'selected' }}>Bientôt</option>
                            <option value=\"not_expiring\" {{ filters.expiry_status|default('') == 'not_expiring' ? 'selected' }}>Non expirés</option>
                        </select>
                    </div>
                    
                    <!-- Stock faible - 50% sur mobile, 2 sur desktop -->
                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" {{ filters.low_stock|default('') == 'yes' ? 'selected' }}>≤ 10</option>
                        </select>
                    </div>
                    
                    <!-- Emplacement - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select form-select-sm select2-location filter-select\">
                            <option value=\"\">-- Tous --</option>
                            {% for loc in locations %}
                                <option value=\"{{ loc }}\" {{ filters.location|default('') == loc ? 'selected' }}>{{ loc|u.truncate(15) }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>

                <!-- LIGNE 2 -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <!-- Avoir - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" {{ filters.has_issue|default('') == 'yes' ? 'selected' }}>Avec avoir</option>
                            <option value=\"no\" {{ filters.has_issue|default('') == 'no' ? 'selected' }}>Sans avoir</option>
                        </select>
                    </div>
                    
                    <!-- Statut avoir - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Statut avoir</label>
                        <select name=\"issue_status\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"pending\">En attente</option>
                            <option value=\"acknowledged\">Accusé</option>
                            <option value=\"under_review\">En analyse</option>
                            <option value=\"partially_recovered\">Partiel</option>
                            <option value=\"recovered\">Récupéré</option>
                            <option value=\"lost\">Perdu</option>
                            <option value=\"closed\">Clôturé</option>
                        </select>
                    </div>
                    
                    <!-- Expiration du - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Expiration du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm filter-select\" value=\"{{ filters.date_from|default('') }}\">
                    </div>
                    
                    <!-- Expiration au - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Expiration au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm filter-select\" value=\"{{ filters.date_to|default('') }}\">
                    </div>
                </div>

                <!-- LIGNE 3 -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <!-- Trier par - 50% sur mobile, 6 sur desktop -->
                    <div class=\"col-6 col-md-6 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Trier par</label>
                        <select name=\"sort\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"batch_number\" {{ filters.sort|default('expiry_date') == 'batch_number' ? 'selected' }}>N° lot</option>
                            <option value=\"expiry_date\" {{ filters.sort|default('expiry_date') == 'expiry_date' ? 'selected' }}>Date expiration</option>
                            <option value=\"current_quantity\" {{ filters.sort|default('expiry_date') == 'current_quantity' ? 'selected' }}>Quantité</option>
                            <option value=\"created_at\" {{ filters.sort|default('expiry_date') == 'created_at' ? 'selected' }}>Date création</option>
                        </select>
                    </div>
                    
                    <!-- Ordre - 50% sur mobile, 6 sur desktop -->
                    <div class=\"col-6 col-md-6 filter-col-half\">
                        <label class=\"form-label fw-semibold small filter-label\">Ordre</label>
                        <select name=\"direction\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"asc\" {{ filters.direction|default('asc') == 'asc' ? 'selected' }}>↑ Croissant</option>
                            <option value=\"desc\" {{ filters.direction|default('asc') == 'desc' ? 'selected' }}>↓ Décroissant</option>
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

            {% set creditNote = supplierCreditNotes[batch.id] is defined ? supplierCreditNotes[batch.id] : null %}

            <div class=\"col-12 col-sm-6 col-lg-6 col-xl-4\">
                <div class=\"card batch-card h-100 shadow-sm {% if hasIssue %}has-issue{% elseif isExpired %}expired{% endif %}\">
                    <!-- En-tête -->
                    <div class=\"card-header d-flex flex-wrap justify-content-between align-items-center gap-2\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"{{ batch.id }}\" id=\"batch_{{ batch.id }}\" style=\"width:14px;height:14px;\">
                            <div>
                                <h6 class=\"mb-0 fw-bold fs-6 fs-md-5\">{{ batch.batchNumber }}</h6>
                                <small class=\"text-muted small\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i>{{ batch.createdAt|date('d/m/Y') }}
                                </small>
                            </div>
                        </div>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-ellipsis-v\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end shadow-sm\">
                                <li>
                                    <a class=\"dropdown-item small\" href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\">
                                        <i class=\"fas fa-eye me-2 text-info\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item small\" href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\">
                                        <i class=\"fas fa-edit me-2 text-warning\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item small\" href=\"{{ path('app_admin_stock_batch_print', {'id': batch.id}) }}\" target=\"_blank\">
                                        <i class=\"fas fa-print me-2 text-secondary\"></i> Imprimer
                                    </a>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    {% if canReport %}
                                        <a class=\"dropdown-item text-danger small\" href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Signaler
                                            {% if purchaseItems is defined and purchaseItems[batch.id] is defined %}
                                                {% set purchase = purchaseItems[batch.id].purchase %}
                                                {% if purchase and purchase.receivedAt %}
                                                    {% set daysRemaining = 30 - date().diff(purchase.receivedAt).days %}
                                                    {% if daysRemaining > 0 %}
                                                        <span class=\"badge bg-danger ms-1\">{{ daysRemaining }}j</span>
                                                    {% endif %}
                                                {% endif %}
                                            {% endif %}
                                        </a>
                                    {% elseif hasIssue and creditNote %}
                                        <a class=\"dropdown-item text-info small\" href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\">
                                            <i class=\"fas fa-file-invoice-dollar me-2\"></i> Voir l'avoir
                                        </a>
                                    {% elseif hasIssue %}
                                        <a class=\"dropdown-item text-muted small\" href=\"#\" onclick=\"return false;\">
                                            <i class=\"fas fa-file-invoice-dollar me-2\"></i> Avoir introuvable
                                        </a>
                                    {% else %}
                                        <a class=\"dropdown-item text-muted small\" href=\"#\" onclick=\"return false;\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Non disponible
                                        </a>
                                    {% endif %}
                                </li>
                                <li>
                                    <button type=\"button\" class=\"dropdown-item small toggle-batch-btn\"
                                            data-batch-id=\"{{ batch.id }}\"
                                            data-is-active=\"{{ batch.isActive ? '1' : '0' }}\"
                                            data-batch-number=\"{{ batch.batchNumber }}\"
                                            data-token=\"{{ csrf_token('toggle-batch' ~ batch.id) }}\">
                                        <i class=\"fas {{ batch.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} me-2\"></i>
                                        {{ batch.isActive ? 'Désactiver' : 'Activer' }}
                                    </button>
                                </li>
                                {% if is_granted('ROLE_ADMIN') and batch.stockMovements|length == 0 and not hasIssue %}
                                    <li>
                                        <button type=\"button\" class=\"dropdown-item text-danger small delete-batch-btn\"
                                                data-batch-id=\"{{ batch.id }}\"
                                                data-batch-number=\"{{ batch.batchNumber }}\"
                                                data-token=\"{{ csrf_token('delete-batch' ~ batch.id) }}\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>

                    <!-- Corps -->
                    <div class=\"card-body\">
                        <div class=\"mb-2 mb-md-3\">
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Emplacement</span>
                                {% if locationDisplay != '—' %}
                                    <span class=\"badge bg-info text-dark\">{{ locationDisplay|u.truncate(15) }}</span>
                                {% else %}
                                    <span class=\"text-muted small\">—</span>
                                {% endif %}
                            </div>

                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Quantité</span>
                                <div class=\"text-end\">
                                    <span class=\"fw-bold small {% if isLowStock %}text-danger{% endif %}\">
                                        {{ batch.currentQuantity }}
                                    </span>
                                    <small class=\"text-muted\">/ {{ batch.initialQuantity }}</small>
                                    <div class=\"progress mt-1\" style=\"width: 80px; margin-left: auto;\">
                                        <div class=\"progress-bar
                                            {% if batch.currentQuantity/batch.initialQuantity*100 <= 10 %}bg-danger
                                            {% elseif batch.currentQuantity/batch.initialQuantity*100 <= 30 %}bg-warning
                                            {% else %}bg-success{% endif %}\"
                                            style=\"width: {{ (batch.currentQuantity / batch.initialQuantity * 100)|round }}%\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Prix unitaire</span>
                                <span class=\"fw-bold text-primary small\">{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</span>
                            </div>

                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Expiration</span>
                                <div>
                                    {% if batch.expiryDate %}
                                        <span class=\"fw-bold small {% if isExpired %}text-danger{% elseif isExpiringSoon %}text-warning{% else %}text-success{% endif %}\">
                                            {{ batch.expiryDate|date('d/m/Y') }}
                                        </span>
                                        {% if isExpired %}
                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                        {% elseif isExpiringSoon %}
                                            <span class=\"badge bg-warning text-dark ms-1\">Bientôt</span>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"text-muted small\">—</span>
                                    {% endif %}
                                </div>
                            </div>

                            {# Date de réception #}
                            {% if purchaseItems is defined and purchaseItems[batch.id] is defined %}
                                {% set purchase = purchaseItems[batch.id].purchase %}
                                {% if purchase and purchase.receivedAt %}
                                    {% set daysRemaining = 30 - date().diff(purchase.receivedAt).days %}
                                    <div class=\"mt-1 mt-md-2\">
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-calendar-check me-1\"></i>
                                            Réception: {{ purchase.receivedAt|date('d/m/Y') }}
                                            {% if daysRemaining > 0 %}
                                                <span class=\"badge bg-success\">{{ daysRemaining }}j</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">Délai expiré</span>
                                            {% endif %}
                                        </small>
                                    </div>
                                {% endif %}
                            {% endif %}
                        </div>

                        <!-- Section avoir -->
                        {% if hasIssue %}
                            <div class=\"alert alert-danger py-1 py-md-2 mb-0 small\">
                                <div class=\"d-flex flex-wrap justify-content-between align-items-center gap-1\">
                                    <div>
                                        <i class=\"fas fa-file-invoice-dollar me-1\"></i>
                                        <span class=\"badge {{ batch.issueStatusBadgeClass }}\">{{ batch.issueStatusLabel }}</span>
                                    </div>
                                    <div class=\"text-end\">
                                        <small class=\"text-danger\">{{ batch.issueDeclaredAmount|price_with_currency(batch.hmaService) }}</small>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"alert alert-light py-1 py-md-2 mb-0 text-center small\">
                                <span class=\"text-muted\">Aucun problème signalé</span>
                            </div>
                        {% endif %}
                    </div>

                    <!-- Pied -->
                    <div class=\"card-footer d-flex flex-wrap justify-content-between\">
                        <span class=\"badge {{ batch.isActive ? 'bg-success' : 'bg-secondary' }}\">
                            {{ batch.isActive ? 'Actif' : 'Inactif' }}
                        </span>
                        <small class=\"text-muted\">
                            <i class=\"fas fa-exchange-alt me-1\"></i>{{ batch.stockMovements|length }} mouvement(s)
                        </small>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-4 py-md-5\">
                    <i class=\"fas fa-box-open fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h5 class=\"text-muted fs-6 fs-md-5\">Aucun lot trouvé</h5>
                    <p class=\"text-muted small\">Modifiez vos filtres ou créez un achat pour générer des lots</p>
                    <a href=\"{{ path('purchase_cart') }}\" class=\"btn btn-primary btn-sm mt-2\">
                        <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
                    </a>
                </div>
            </div>
        {% endfor %}
    </div>
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

{% endblock %}

{% block javascripts %}
{{ parent() }}
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

    document.getElementById('selectAllBtn')?.addEventListener('click', function() {
        checkboxes.forEach(cb => cb.checked = true);
        updateSelectedCount();
    });

    document.getElementById('deselectAllBtn')?.addEventListener('click', function() {
        checkboxes.forEach(cb => cb.checked = false);
        updateSelectedCount();
    });

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
{% endblock %}", "admin/stock_batch/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\index.html.twig");
    }
}
