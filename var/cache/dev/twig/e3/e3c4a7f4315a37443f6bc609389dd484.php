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
class __TwigTemplate_9393a37ff8a5000362602fd9289e8d82 extends Template
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
    }
    .batch-card .card-footer {
        background: #ffffff !important;
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
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    .stat-card .card-body {
        padding: 1.25rem;
        color: #ffffff !important;
    }
    .stat-card .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.2;
        color: #ffffff !important;
    }
    .stat-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.85) !important;
    }
    .stat-card .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
        background: rgba(255, 255, 255, 0.2);
    }
    .stat-card .stat-icon i {
        color: #ffffff !important;
        font-size: 1.8rem;
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
    .stat-card-low-stock {
        background: linear-gradient(135deg, #e83e8c, #f06292) !important;
    }

    /* ========================================
       ELEMENTS COMMUNS
    ======================================== */
    .badge {
        font-weight: 500;
        padding: 0.4rem 0.6rem;
    }
    .progress {
        border-radius: 10px;
        overflow: hidden;
        height: 6px;
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
    }
    .filters-card .card-body {
        background: #ffffff !important;
    }

    /* ========================================
       RESPONSIVE
    ======================================== */
    @media (max-width: 768px) {
        .btn-group { flex-direction: column; }
        .btn-group .btn { margin: 2px 0; }
        .stat-value { font-size: 1.3rem; }
        .stat-icon { width: 40px; height: 40px; }
        .stat-icon i { font-size: 1.3rem; }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 160
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

        // line 161
        yield "<div class=\"container-fluid px-4\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 176, $this->source); })()), "id", [], "any", false, false, false, 176)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 177, $this->source); })()), "name", [], "any", false, false, false, 177)), "truncate", [30], "method", false, false, false, 177), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Gestion des lots</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-primary\"></i>
                Lots de stock - ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 185, $this->source); })()), "name", [], "any", false, false, false, 185), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Les lots sont créés automatiquement lors des achats.
            </p>
        </div>
        <div class=\"d-flex gap-2 flex-wrap\">
            <a href=\"";
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-map-marker-alt me-2\"></i> Emplacements
            </a>
            <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
            </a>
            <a href=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 199, $this->source); })()), "id", [], "any", false, false, false, 199)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour produit
            </a>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- ==========================================
         STATISTIQUES - 7 CARTES (3 + 4)
    ========================================== -->
    <!-- Ligne 1 : 3 cartes -->
    <div class=\"row g-3 mb-4\">
        <!-- Carte 1 : Total lots - Bleu -->
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card stat-card-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total lots</div>
                            <div class=\"stat-value\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 220, $this->source); })()), "total_batches", [], "any", false, false, false, 220), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-boxes\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte 2 : Lots actifs - Vert -->
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card stat-card-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots actifs</div>
                            <div class=\"stat-value\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 237)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 237, $this->source); })()), "active_batches", [], "any", false, false, false, 237), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-play-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte 3 : Lots inactifs - Orange -->
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card stat-card-inactive shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots inactifs</div>
                            <div class=\"stat-value\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactive_batches", [], "any", true, true, false, 254)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 254, $this->source); })()), "inactive_batches", [], "any", false, false, false, 254), 0)) : (0)), "html", null, true);
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
    <div class=\"row g-3 mb-4\">
        <!-- Carte 4 : Unités en stock - Cyan -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card stat-card-info shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Unités en stock</div>
                            <div class=\"stat-value\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 274)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 274, $this->source); })()), "total_quantity", [], "any", false, false, false, 274), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte 5 : Lots expirés - Rouge -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card stat-card-danger shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots expirés</div>
                            <div class=\"stat-value\">";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 291)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 291, $this->source); })()), "expired_batches", [], "any", false, false, false, 291), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-calendar-times\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte 6 : Expire bientôt - Jaune -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card stat-card-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Expire bientôt</div>
                            <div class=\"stat-value\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 308)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 308, $this->source); })()), "expiring_soon_batches", [], "any", false, false, false, 308), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-hourglass-half\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte 7 : Avoirs signalés - Gris -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card stat-card-secondary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Avoirs signalés</div>
                            <div class=\"stat-value\">";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "has_issue_count", [], "any", true, true, false, 325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 325, $this->source); })()), "has_issue_count", [], "any", false, false, false, 325), 0)) : (0)), "html", null, true);
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
    <div class=\"card border-0 shadow-sm mb-4 filters-card\">
        <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 345, $this->source); })()), "id", [], "any", false, false, false, 345)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <!-- Ligne 1 -->
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"N° lot...\" value=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 359)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 359, $this->source); })()), "search", [], "any", false, false, false, 359), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 365
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 365)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 365, $this->source); })()), "status", [], "any", false, false, false, 365), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 366
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 366)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 366, $this->source); })()), "status", [], "any", false, false, false, 366), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" ";
        // line 373
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 373)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 373, $this->source); })()), "expiry_status", [], "any", false, false, false, 373), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                            <option value=\"expiring_soon\" ";
        // line 374
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 374)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 374, $this->source); })()), "expiry_status", [], "any", false, false, false, 374), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Expire bientôt</option>
                            <option value=\"not_expiring\" ";
        // line 375
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 375)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 375, $this->source); })()), "expiry_status", [], "any", false, false, false, 375), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 382
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 382)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 382, $this->source); })()), "low_stock", [], "any", false, false, false, 382), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select select2-location\">
                            <option value=\"\">-- Tous les emplacements --</option>
                            ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 389, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 390
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 390)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 390, $this->source); })()), "location", [], "any", false, false, false, 390), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 392
        yield "                        </select>
                    </div>
                </div>

                <!-- Ligne 2 -->
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 402
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 402)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 402, $this->source); })()), "has_issue", [], "any", false, false, false, 402), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">Avec avoir</option>
                            <option value=\"no\" ";
        // line 403
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 403)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 403, $this->source); })()), "has_issue", [], "any", false, false, false, 403), "")) : ("")) == "no")) ? ("selected") : (""));
        yield ">Sans avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Statut avoir</label>
                        <select name=\"issue_status\" class=\"form-select\">
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
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Expiration du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 421)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 421, $this->source); })()), "date_from", [], "any", false, false, false, 421), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Expiration au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 425)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 425, $this->source); })()), "date_to", [], "any", false, false, false, 425), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                </div>

                <!-- Ligne 3 : Tri -->
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-6\">
                        <label class=\"form-label fw-semibold small\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"batch_number\" ";
        // line 434
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 434)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 434, $this->source); })()), "sort", [], "any", false, false, false, 434), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                            <option value=\"expiry_date\" ";
        // line 435
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 435)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 435, $this->source); })()), "sort", [], "any", false, false, false, 435), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Date expiration</option>
                            <option value=\"current_quantity\" ";
        // line 436
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 436)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 436, $this->source); })()), "sort", [], "any", false, false, false, 436), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            <option value=\"created_at\" ";
        // line 437
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 437)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 437, $this->source); })()), "sort", [], "any", false, false, false, 437), "expiry_date")) : ("expiry_date")) == "created_at")) ? ("selected") : (""));
        yield ">Date création</option>
                            <option value=\"location\" ";
        // line 438
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 438)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 438, $this->source); })()), "sort", [], "any", false, false, false, 438), "expiry_date")) : ("expiry_date")) == "location")) ? ("selected") : (""));
        yield ">Emplacement</option>
                            <option value=\"issue_status\" ";
        // line 439
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 439)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 439, $this->source); })()), "sort", [], "any", false, false, false, 439), "expiry_date")) : ("expiry_date")) == "issue_status")) ? ("selected") : (""));
        yield ">Statut avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"form-label fw-semibold small\">Ordre</label>
                        <select name=\"direction\" class=\"form-select\">
                            <option value=\"asc\" ";
        // line 445
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 445)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 445, $this->source); })()), "direction", [], "any", false, false, false, 445), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">Croissant ↑</option>
                            <option value=\"desc\" ";
        // line 446
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 446)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 446, $this->source); })()), "direction", [], "any", false, false, false, 446), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
        yield ">Décroissant ↓</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         LISTE DES LOTS EN CARTES
    ========================================== -->
    <div class=\"row\">
        ";
        // line 458
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 458, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 459
            yield "            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 459) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 459) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 460
            yield "            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 460) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 460) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 460) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 461
            yield "            ";
            $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 461) <= 10);
            // line 462
            yield "            ";
            $context["hasIssue"] = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 462);
            // line 463
            yield "            ";
            $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 463)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 463), "displayName", [], "any", false, false, false, 463)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 463)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 463)) : ("—"))));
            // line 464
            yield "
            ";
            // line 466
            yield "            ";
            $context["canReport"] = false;
            // line 467
            yield "            ";
            if (( !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 467, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 467))) {
                // line 468
                yield "                ";
                if ((array_key_exists("canReportIssue", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["canReportIssue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 468), [], "array", true, true, false, 468))) {
                    // line 469
                    yield "                    ";
                    $context["canReport"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 469, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 469), [], "array", false, false, false, 469);
                    // line 470
                    yield "                ";
                }
                // line 471
                yield "            ";
            }
            // line 472
            yield "
            ";
            // line 474
            yield "            ";
            $context["creditNote"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["supplierCreditNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 474), [], "array", true, true, false, 474)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplierCreditNotes"]) || array_key_exists("supplierCreditNotes", $context) ? $context["supplierCreditNotes"] : (function () { throw new RuntimeError('Variable "supplierCreditNotes" does not exist.', 474, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 474), [], "array", false, false, false, 474)) : (null));
            // line 475
            yield "
            <div class=\"col-xl-4 col-lg-6 mb-4\">
                <div class=\"card batch-card h-100 shadow-sm ";
            // line 477
            if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 477, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "has-issue";
            } elseif ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 477, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "expired";
            }
            yield "\">
                    <!-- En-tête de la carte -->
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 481), "html", null, true);
            yield "\" id=\"batch_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 481), "html", null, true);
            yield "\">
                            <div>
                                <h6 class=\"mb-0 fw-bold\">";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 483), "html", null, true);
            yield "</h6>
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i>";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "createdAt", [], "any", false, false, false, 485), "d/m/Y"), "html", null, true);
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
                                    <a class=\"dropdown-item\" href=\"";
            // line 495
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 495)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2 text-info\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 500
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 500)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2 text-warning\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 505)]), "html", null, true);
            yield "\" target=\"_blank\">
                                        <i class=\"fas fa-print me-2 text-secondary\"></i> Imprimer
                                    </a>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 512
            yield "                                    ";
            if ((($tmp = (isset($context["canReport"]) || array_key_exists("canReport", $context) ? $context["canReport"] : (function () { throw new RuntimeError('Variable "canReport" does not exist.', 512, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 513
                yield "                                        <a class=\"dropdown-item text-danger\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 513)]), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Signaler un problème
                                            ";
                // line 515
                if ((array_key_exists("purchaseItems", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 515), [], "array", true, true, false, 515))) {
                    // line 516
                    yield "                                                ";
                    $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 516, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 516), [], "array", false, false, false, 516), "purchase", [], "any", false, false, false, 516);
                    // line 517
                    yield "                                                ";
                    if (((isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 517, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 517, $this->source); })()), "receivedAt", [], "any", false, false, false, 517))) {
                        // line 518
                        yield "                                                    ";
                        $context["daysRemaining"] = (30 - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 518, $this->source); })()), "receivedAt", [], "any", false, false, false, 518)], "method", false, false, false, 518), "days", [], "any", false, false, false, 518));
                        // line 519
                        yield "                                                    ";
                        if (((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 519, $this->source); })()) > 0)) {
                            // line 520
                            yield "                                                        <span class=\"badge bg-danger ms-1\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 520, $this->source); })()), "html", null, true);
                            yield "j</span>
                                                    ";
                        }
                        // line 522
                        yield "                                                ";
                    }
                    // line 523
                    yield "                                            ";
                }
                // line 524
                yield "                                        </a>
                                    ";
            } elseif ((($tmp =             // line 525
(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 525, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 526
                yield "                                        ";
                // line 527
                yield "                                        ";
                if ((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 527, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 528
                    yield "                                            <a class=\"dropdown-item text-info\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 528, $this->source); })()), "id", [], "any", false, false, false, 528)]), "html", null, true);
                    yield "\">
                                                <i class=\"fas fa-file-invoice-dollar me-2\"></i> Voir l'avoir
                                            </a>
                                        ";
                } else {
                    // line 532
                    yield "                                            <a class=\"dropdown-item text-muted\" href=\"#\" onclick=\"return false;\" title=\"Avoir non trouvé\">
                                                <i class=\"fas fa-file-invoice-dollar me-2\"></i> Avoir introuvable
                                            </a>
                                        ";
                }
                // line 536
                yield "                                    ";
            } else {
                // line 537
                yield "                                        <a class=\"dropdown-item text-muted\" href=\"#\" onclick=\"return false;\" title=\"Signalement non disponible (délai de 30 jours dépassé)\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Signaler un problème
                                            <span class=\"badge bg-secondary ms-1\">⛔</span>
                                        </a>
                                    ";
            }
            // line 542
            yield "                                </li>
                                <li>
                                    <button type=\"button\" class=\"dropdown-item toggle-batch-btn\"
                                            data-batch-id=\"";
            // line 545
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 545), "html", null, true);
            yield "\"
                                            data-is-active=\"";
            // line 546
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 546)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                            data-batch-number=\"";
            // line 547
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 547), "html", null, true);
            yield "\"
                                            data-token=\"";
            // line 548
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 548))), "html", null, true);
            yield "\">
                                        <i class=\"fas ";
            // line 549
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 549)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield " me-2\"></i>
                                        ";
            // line 550
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 550)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                    </button>
                                </li>
                                ";
            // line 553
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 553)) == 0)) &&  !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 553, $this->source); })()))) {
                // line 554
                yield "                                    <li>
                                        <button type=\"button\" class=\"dropdown-item text-danger delete-batch-btn\"
                                                data-batch-id=\"";
                // line 556
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 556), "html", null, true);
                yield "\"
                                                data-batch-number=\"";
                // line 557
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 557), "html", null, true);
                yield "\"
                                                data-token=\"";
                // line 558
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 558))), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    </li>
                                ";
            }
            // line 563
            yield "                            </ul>
                        </div>
                    </div>

                    <!-- Corps de la carte -->
                    <div class=\"card-body\">
                        <div class=\"mb-3\">
                            <!-- Emplacement -->
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Emplacement</span>
                                ";
            // line 573
            if (((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 573, $this->source); })()) != "—")) {
                // line 574
                yield "                                    <span class=\"badge bg-info text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 574, $this->source); })()), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 576
                yield "                                    <span class=\"text-muted\">—</span>
                                ";
            }
            // line 578
            yield "                            </div>

                            <!-- Quantité -->
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Quantité</span>
                                <div class=\"text-end\">
                                    <span class=\"fw-bold ";
            // line 584
            if ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 584, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "text-danger";
            }
            yield "\">
                                        ";
            // line 585
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 585), "html", null, true);
            yield "
                                    </span>
                                    <small class=\"text-muted\">/ ";
            // line 587
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 587), "html", null, true);
            yield "</small>
                                    <div class=\"progress mt-1\" style=\"width: 100px;\">
                                        <div class=\"progress-bar
                                            ";
            // line 590
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 590) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 590)) * 100) <= 10)) {
                yield "bg-danger
                                            ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,             // line 591
$context["batch"], "currentQuantity", [], "any", false, false, false, 591) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 591)) * 100) <= 30)) {
                yield "bg-warning
                                            ";
            } else {
                // line 592
                yield "bg-success";
            }
            yield "\"
                                            style=\"width: ";
            // line 593
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 593) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 593)) * 100)), "html", null, true);
            yield "%\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Prix unitaire -->
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Prix unitaire</span>
                                <span class=\"fw-bold text-primary\">";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 602), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 602)), "html", null, true);
            yield "</span>
                            </div>

                            <!-- Expiration -->
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Expiration</span>
                                <div>
                                    ";
            // line 609
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 609)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 610
                yield "                                        <span class=\"fw-bold ";
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 610, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "text-danger";
                } elseif ((($tmp = (isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 610, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "text-warning";
                } else {
                    yield "text-success";
                }
                yield "\">
                                            ";
                // line 611
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 611), "d/m/Y"), "html", null, true);
                yield "
                                        </span>
                                        ";
                // line 613
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 613, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 614
                    yield "                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                        ";
                } elseif ((($tmp =                 // line 615
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 615, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 616
                    yield "                                            <span class=\"badge bg-warning text-dark ms-1\">Bientôt</span>
                                        ";
                }
                // line 618
                yield "                                    ";
            } else {
                // line 619
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 621
            yield "                                </div>
                            </div>

                            ";
            // line 625
            yield "                            ";
            if ((array_key_exists("purchaseItems", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 625), [], "array", true, true, false, 625))) {
                // line 626
                yield "                                ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 626, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 626), [], "array", false, false, false, 626), "purchase", [], "any", false, false, false, 626);
                // line 627
                yield "                                ";
                if (((isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 627, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 627, $this->source); })()), "receivedAt", [], "any", false, false, false, 627))) {
                    // line 628
                    yield "                                    ";
                    $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 628, $this->source); })()), "receivedAt", [], "any", false, false, false, 628)], "method", false, false, false, 628), "days", [], "any", false, false, false, 628);
                    // line 629
                    yield "                                    ";
                    $context["daysRemaining"] = (30 - (isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 629, $this->source); })()));
                    // line 630
                    yield "                                    <div class=\"mt-2\">
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-calendar-check me-1\"></i>
                                            Réception: ";
                    // line 633
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 633, $this->source); })()), "receivedAt", [], "any", false, false, false, 633), "d/m/Y"), "html", null, true);
                    yield "
                                            ";
                    // line 634
                    if (((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 634, $this->source); })()) > 0)) {
                        // line 635
                        yield "                                                <span class=\"badge bg-success ms-1\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 635, $this->source); })()), "html", null, true);
                        yield "j restant</span>
                                            ";
                    } else {
                        // line 637
                        yield "                                                <span class=\"badge bg-secondary ms-1\">Délai expiré</span>
                                            ";
                    }
                    // line 639
                    yield "                                        </small>
                                    </div>
                                ";
                }
                // line 642
                yield "                            ";
            }
            // line 643
            yield "                        </div>

                        <!-- Section avoir -->
                        ";
            // line 646
            if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 646, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 647
                yield "                            <div class=\"alert alert-danger py-2 mb-0\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <i class=\"fas fa-file-invoice-dollar me-1\"></i>
                                        <span class=\"badge ";
                // line 651
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusBadgeClass", [], "any", false, false, false, 651), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusLabel", [], "any", false, false, false, 651), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"text-end\">
                                        <small class=\"text-danger\">";
                // line 654
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 654), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 654)), "html", null, true);
                yield "</small>
                                    </div>
                                </div>
                            </div>
                        ";
            } else {
                // line 659
                yield "                            <div class=\"alert alert-light py-2 mb-0 text-center\">
                                <small class=\"text-muted\">Aucun problème signalé</small>
                            </div>
                        ";
            }
            // line 663
            yield "                    </div>

                    <!-- Pied de la carte -->
                    <div class=\"card-footer d-flex justify-content-between\">
                        <span class=\"badge ";
            // line 667
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 667)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                            ";
            // line 668
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 668)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                        </span>
                        <small class=\"text-muted\">
                            <i class=\"fas fa-exchange-alt me-1\"></i>";
            // line 671
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 671)), "html", null, true);
            yield " mouvement(s)
                        </small>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 676
        if (!$context['_iterated']) {
            // line 677
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun lot trouvé</h5>
                    <p class=\"text-muted\">Modifiez vos filtres ou créez un achat pour générer des lots</p>
                    <a href=\"";
            // line 682
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
            yield "\" class=\"btn btn-primary mt-2\">
                        <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
                    </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 688
        yield "    </div>
</div>

<!-- ==========================================
     MODALES
========================================== -->
<!-- Modale impression -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <span id=\"selectedCount\">0</span> lot(s) sélectionné(s)
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer la sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer tous les lots
                    </button>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modale toggle -->
<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBatchBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modale suppression -->
<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
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

    // line 769
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

        // line 770
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ==========================================
    // SELECT2 - Emplacement
    // ==========================================
    if (document.getElementById('location-select')) {
        \$('#location-select').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: \"-- Tous les emplacements --\",
            allowClear: true,
            width: '100%'
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

    // Boutons Select All / Deselect All
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
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId;
            const isActive = this.dataset.isActive === '1';
            const token = this.dataset.token;
            const batchNumber = this.dataset.batchNumber;

            document.getElementById('toggleBatchMessage').textContent =
                `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${batchNumber}\" ?`;

            document.getElementById('toggleBatchForm').action = `/admin/stock-batch/\${batchId}/toggle`;
            document.getElementById('toggleBatchToken').value = token;

            const btn = document.getElementById('toggleBatchBtn');
            btn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            btn.textContent = isActive ? 'Désactiver' : 'Activer';

            toggleModal.show();
        });
    });

    // ==========================================
    // SUPPRESSION
    // ==========================================
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId;
            const batchNumber = this.dataset.batchNumber;
            const token = this.dataset.token;

            document.getElementById('deleteBatchMessage').innerHTML = `
                <div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div>
                <p>Supprimer le lot <strong>\${batchNumber}</strong> ?</p>
                <p class=\"text-danger mb-0\"><small>Cette suppression n'est possible que si aucun mouvement de stock n'est associé.</small></p>
            `;

            document.getElementById('deleteBatchForm').action = `/admin/stock-batch/\${batchId}/delete`;
            document.getElementById('deleteBatchToken').value = token;

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
        return array (  1285 => 770,  1272 => 769,  1182 => 688,  1170 => 682,  1163 => 677,  1161 => 676,  1151 => 671,  1145 => 668,  1141 => 667,  1135 => 663,  1129 => 659,  1121 => 654,  1113 => 651,  1107 => 647,  1105 => 646,  1100 => 643,  1097 => 642,  1092 => 639,  1088 => 637,  1082 => 635,  1080 => 634,  1076 => 633,  1071 => 630,  1068 => 629,  1065 => 628,  1062 => 627,  1059 => 626,  1056 => 625,  1051 => 621,  1047 => 619,  1044 => 618,  1040 => 616,  1038 => 615,  1035 => 614,  1033 => 613,  1028 => 611,  1017 => 610,  1015 => 609,  1005 => 602,  993 => 593,  988 => 592,  983 => 591,  979 => 590,  973 => 587,  968 => 585,  962 => 584,  954 => 578,  950 => 576,  944 => 574,  942 => 573,  930 => 563,  922 => 558,  918 => 557,  914 => 556,  910 => 554,  908 => 553,  902 => 550,  898 => 549,  894 => 548,  890 => 547,  886 => 546,  882 => 545,  877 => 542,  870 => 537,  867 => 536,  861 => 532,  853 => 528,  850 => 527,  848 => 526,  846 => 525,  843 => 524,  840 => 523,  837 => 522,  831 => 520,  828 => 519,  825 => 518,  822 => 517,  819 => 516,  817 => 515,  811 => 513,  808 => 512,  799 => 505,  791 => 500,  783 => 495,  770 => 485,  765 => 483,  758 => 481,  747 => 477,  743 => 475,  740 => 474,  737 => 472,  734 => 471,  731 => 470,  728 => 469,  725 => 468,  722 => 467,  719 => 466,  716 => 464,  713 => 463,  710 => 462,  707 => 461,  704 => 460,  701 => 459,  696 => 458,  681 => 446,  677 => 445,  668 => 439,  664 => 438,  660 => 437,  656 => 436,  652 => 435,  648 => 434,  636 => 425,  629 => 421,  608 => 403,  604 => 402,  592 => 392,  579 => 390,  575 => 389,  565 => 382,  555 => 375,  551 => 374,  547 => 373,  537 => 366,  533 => 365,  524 => 359,  507 => 345,  484 => 325,  464 => 308,  444 => 291,  424 => 274,  401 => 254,  381 => 237,  361 => 220,  337 => 199,  331 => 196,  325 => 193,  314 => 185,  303 => 177,  299 => 176,  291 => 171,  279 => 161,  266 => 160,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
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
    }
    .batch-card .card-footer {
        background: #ffffff !important;
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
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    .stat-card .card-body {
        padding: 1.25rem;
        color: #ffffff !important;
    }
    .stat-card .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.2;
        color: #ffffff !important;
    }
    .stat-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.85) !important;
    }
    .stat-card .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
        background: rgba(255, 255, 255, 0.2);
    }
    .stat-card .stat-icon i {
        color: #ffffff !important;
        font-size: 1.8rem;
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
    .stat-card-low-stock {
        background: linear-gradient(135deg, #e83e8c, #f06292) !important;
    }

    /* ========================================
       ELEMENTS COMMUNS
    ======================================== */
    .badge {
        font-weight: 500;
        padding: 0.4rem 0.6rem;
    }
    .progress {
        border-radius: 10px;
        overflow: hidden;
        height: 6px;
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
    }
    .filters-card .card-body {
        background: #ffffff !important;
    }

    /* ========================================
       RESPONSIVE
    ======================================== */
    @media (max-width: 768px) {
        .btn-group { flex-direction: column; }
        .btn-group .btn { margin: 2px 0; }
        .stat-value { font-size: 1.3rem; }
        .stat-icon { width: 40px; height: 40px; }
        .stat-icon i { font-size: 1.3rem; }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_product_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"text-decoration-none\">
                            {{ product.name|u.truncate(30) }}
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Gestion des lots</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-primary\"></i>
                Lots de stock - {{ product.name }}
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Les lots sont créés automatiquement lors des achats.
            </p>
        </div>
        <div class=\"d-flex gap-2 flex-wrap\">
            <a href=\"{{ path('app_admin_location_index') }}\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-map-marker-alt me-2\"></i> Emplacements
            </a>
            <a href=\"{{ path('purchase_cart') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
            </a>
            <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour produit
            </a>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- ==========================================
         STATISTIQUES - 7 CARTES (3 + 4)
    ========================================== -->
    <!-- Ligne 1 : 3 cartes -->
    <div class=\"row g-3 mb-4\">
        <!-- Carte 1 : Total lots - Bleu -->
        <div class=\"col-md-4 col-sm-6\">
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

        <!-- Carte 2 : Lots actifs - Vert -->
        <div class=\"col-md-4 col-sm-6\">
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

        <!-- Carte 3 : Lots inactifs - Orange -->
        <div class=\"col-md-4 col-sm-6\">
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
    <div class=\"row g-3 mb-4\">
        <!-- Carte 4 : Unités en stock - Cyan -->
        <div class=\"col-md-3 col-sm-6\">
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

        <!-- Carte 5 : Lots expirés - Rouge -->
        <div class=\"col-md-3 col-sm-6\">
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

        <!-- Carte 6 : Expire bientôt - Jaune -->
        <div class=\"col-md-3 col-sm-6\">
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

        <!-- Carte 7 : Avoirs signalés - Gris -->
        <div class=\"col-md-3 col-sm-6\">
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
         FILTRES
    ========================================== -->
    <div class=\"card border-0 shadow-sm mb-4 filters-card\">
        <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <!-- Ligne 1 -->
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"N° lot...\" value=\"{{ filters.search|default('') }}\">
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ filters.status|default('') == 'active' ? 'selected' }}>Actifs</option>
                            <option value=\"inactive\" {{ filters.status|default('') == 'inactive' ? 'selected' }}>Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" {{ filters.expiry_status|default('') == 'expired' ? 'selected' }}>Expirés</option>
                            <option value=\"expiring_soon\" {{ filters.expiry_status|default('') == 'expiring_soon' ? 'selected' }}>Expire bientôt</option>
                            <option value=\"not_expiring\" {{ filters.expiry_status|default('') == 'not_expiring' ? 'selected' }}>Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" {{ filters.low_stock|default('') == 'yes' ? 'selected' }}>≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select select2-location\">
                            <option value=\"\">-- Tous les emplacements --</option>
                            {% for loc in locations %}
                                <option value=\"{{ loc }}\" {{ filters.location|default('') == loc ? 'selected' }}>{{ loc }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>

                <!-- Ligne 2 -->
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" {{ filters.has_issue|default('') == 'yes' ? 'selected' }}>Avec avoir</option>
                            <option value=\"no\" {{ filters.has_issue|default('') == 'no' ? 'selected' }}>Sans avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Statut avoir</label>
                        <select name=\"issue_status\" class=\"form-select\">
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
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Expiration du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ filters.date_from|default('') }}\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Expiration au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ filters.date_to|default('') }}\">
                    </div>
                </div>

                <!-- Ligne 3 : Tri -->
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-6\">
                        <label class=\"form-label fw-semibold small\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"batch_number\" {{ filters.sort|default('expiry_date') == 'batch_number' ? 'selected' }}>N° lot</option>
                            <option value=\"expiry_date\" {{ filters.sort|default('expiry_date') == 'expiry_date' ? 'selected' }}>Date expiration</option>
                            <option value=\"current_quantity\" {{ filters.sort|default('expiry_date') == 'current_quantity' ? 'selected' }}>Quantité</option>
                            <option value=\"created_at\" {{ filters.sort|default('expiry_date') == 'created_at' ? 'selected' }}>Date création</option>
                            <option value=\"location\" {{ filters.sort|default('expiry_date') == 'location' ? 'selected' }}>Emplacement</option>
                            <option value=\"issue_status\" {{ filters.sort|default('expiry_date') == 'issue_status' ? 'selected' }}>Statut avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"form-label fw-semibold small\">Ordre</label>
                        <select name=\"direction\" class=\"form-select\">
                            <option value=\"asc\" {{ filters.direction|default('asc') == 'asc' ? 'selected' }}>Croissant ↑</option>
                            <option value=\"desc\" {{ filters.direction|default('asc') == 'desc' ? 'selected' }}>Décroissant ↓</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         LISTE DES LOTS EN CARTES
    ========================================== -->
    <div class=\"row\">
        {% for batch in batches %}
            {% set isExpired = batch.expiryDate and batch.expiryDate < date() %}
            {% set isExpiringSoon = batch.expiryDate and batch.expiryDate >= date() and batch.expiryDate < date('+30 days') %}
            {% set isLowStock = batch.currentQuantity <= 10 %}
            {% set hasIssue = batch.hasIssue %}
            {% set locationDisplay = batch.locationEntity ? batch.locationEntity.displayName : (batch.location ?: '—') %}

            {# Vérifier si le signalement est autorisé #}
            {% set canReport = false %}
            {% if not hasIssue and batch.purchaseItemId %}
                {% if canReportIssue is defined and canReportIssue[batch.id] is defined %}
                    {% set canReport = canReportIssue[batch.id] %}
                {% endif %}
            {% endif %}

            {# Récupérer l'avoir associé #}
            {% set creditNote = supplierCreditNotes[batch.id] is defined ? supplierCreditNotes[batch.id] : null %}

            <div class=\"col-xl-4 col-lg-6 mb-4\">
                <div class=\"card batch-card h-100 shadow-sm {% if hasIssue %}has-issue{% elseif isExpired %}expired{% endif %}\">
                    <!-- En-tête de la carte -->
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"{{ batch.id }}\" id=\"batch_{{ batch.id }}\">
                            <div>
                                <h6 class=\"mb-0 fw-bold\">{{ batch.batchNumber }}</h6>
                                <small class=\"text-muted\">
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
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\">
                                        <i class=\"fas fa-eye me-2 text-info\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\">
                                        <i class=\"fas fa-edit me-2 text-warning\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_print', {'id': batch.id}) }}\" target=\"_blank\">
                                        <i class=\"fas fa-print me-2 text-secondary\"></i> Imprimer
                                    </a>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    {# SIGNALER UN PROBLÈME #}
                                    {% if canReport %}
                                        <a class=\"dropdown-item text-danger\" href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Signaler un problème
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
                                    {% elseif hasIssue %}
                                        {# Si le lot a déjà un avoir #}
                                        {% if creditNote %}
                                            <a class=\"dropdown-item text-info\" href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\">
                                                <i class=\"fas fa-file-invoice-dollar me-2\"></i> Voir l'avoir
                                            </a>
                                        {% else %}
                                            <a class=\"dropdown-item text-muted\" href=\"#\" onclick=\"return false;\" title=\"Avoir non trouvé\">
                                                <i class=\"fas fa-file-invoice-dollar me-2\"></i> Avoir introuvable
                                            </a>
                                        {% endif %}
                                    {% else %}
                                        <a class=\"dropdown-item text-muted\" href=\"#\" onclick=\"return false;\" title=\"Signalement non disponible (délai de 30 jours dépassé)\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Signaler un problème
                                            <span class=\"badge bg-secondary ms-1\">⛔</span>
                                        </a>
                                    {% endif %}
                                </li>
                                <li>
                                    <button type=\"button\" class=\"dropdown-item toggle-batch-btn\"
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
                                        <button type=\"button\" class=\"dropdown-item text-danger delete-batch-btn\"
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

                    <!-- Corps de la carte -->
                    <div class=\"card-body\">
                        <div class=\"mb-3\">
                            <!-- Emplacement -->
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Emplacement</span>
                                {% if locationDisplay != '—' %}
                                    <span class=\"badge bg-info text-dark\">{{ locationDisplay }}</span>
                                {% else %}
                                    <span class=\"text-muted\">—</span>
                                {% endif %}
                            </div>

                            <!-- Quantité -->
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Quantité</span>
                                <div class=\"text-end\">
                                    <span class=\"fw-bold {% if isLowStock %}text-danger{% endif %}\">
                                        {{ batch.currentQuantity }}
                                    </span>
                                    <small class=\"text-muted\">/ {{ batch.initialQuantity }}</small>
                                    <div class=\"progress mt-1\" style=\"width: 100px;\">
                                        <div class=\"progress-bar
                                            {% if batch.currentQuantity/batch.initialQuantity*100 <= 10 %}bg-danger
                                            {% elseif batch.currentQuantity/batch.initialQuantity*100 <= 30 %}bg-warning
                                            {% else %}bg-success{% endif %}\"
                                            style=\"width: {{ (batch.currentQuantity / batch.initialQuantity * 100)|round }}%\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Prix unitaire -->
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Prix unitaire</span>
                                <span class=\"fw-bold text-primary\">{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</span>
                            </div>

                            <!-- Expiration -->
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Expiration</span>
                                <div>
                                    {% if batch.expiryDate %}
                                        <span class=\"fw-bold {% if isExpired %}text-danger{% elseif isExpiringSoon %}text-warning{% else %}text-success{% endif %}\">
                                            {{ batch.expiryDate|date('d/m/Y') }}
                                        </span>
                                        {% if isExpired %}
                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                        {% elseif isExpiringSoon %}
                                            <span class=\"badge bg-warning text-dark ms-1\">Bientôt</span>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </div>
                            </div>

                            {# Date de réception et délai restant #}
                            {% if purchaseItems is defined and purchaseItems[batch.id] is defined %}
                                {% set purchase = purchaseItems[batch.id].purchase %}
                                {% if purchase and purchase.receivedAt %}
                                    {% set daysSinceReception = date().diff(purchase.receivedAt).days %}
                                    {% set daysRemaining = 30 - daysSinceReception %}
                                    <div class=\"mt-2\">
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-calendar-check me-1\"></i>
                                            Réception: {{ purchase.receivedAt|date('d/m/Y') }}
                                            {% if daysRemaining > 0 %}
                                                <span class=\"badge bg-success ms-1\">{{ daysRemaining }}j restant</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary ms-1\">Délai expiré</span>
                                            {% endif %}
                                        </small>
                                    </div>
                                {% endif %}
                            {% endif %}
                        </div>

                        <!-- Section avoir -->
                        {% if hasIssue %}
                            <div class=\"alert alert-danger py-2 mb-0\">
                                <div class=\"d-flex justify-content-between align-items-center\">
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
                            <div class=\"alert alert-light py-2 mb-0 text-center\">
                                <small class=\"text-muted\">Aucun problème signalé</small>
                            </div>
                        {% endif %}
                    </div>

                    <!-- Pied de la carte -->
                    <div class=\"card-footer d-flex justify-content-between\">
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
                <div class=\"card border-0 shadow-sm text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun lot trouvé</h5>
                    <p class=\"text-muted\">Modifiez vos filtres ou créez un achat pour générer des lots</p>
                    <a href=\"{{ path('purchase_cart') }}\" class=\"btn btn-primary mt-2\">
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
<!-- Modale impression -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <span id=\"selectedCount\">0</span> lot(s) sélectionné(s)
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer la sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer tous les lots
                    </button>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modale toggle -->
<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBatchBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modale suppression -->
<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
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
    if (document.getElementById('location-select')) {
        \$('#location-select').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: \"-- Tous les emplacements --\",
            allowClear: true,
            width: '100%'
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

    // Boutons Select All / Deselect All
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
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId;
            const isActive = this.dataset.isActive === '1';
            const token = this.dataset.token;
            const batchNumber = this.dataset.batchNumber;

            document.getElementById('toggleBatchMessage').textContent =
                `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${batchNumber}\" ?`;

            document.getElementById('toggleBatchForm').action = `/admin/stock-batch/\${batchId}/toggle`;
            document.getElementById('toggleBatchToken').value = token;

            const btn = document.getElementById('toggleBatchBtn');
            btn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            btn.textContent = isActive ? 'Désactiver' : 'Activer';

            toggleModal.show();
        });
    });

    // ==========================================
    // SUPPRESSION
    // ==========================================
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId;
            const batchNumber = this.dataset.batchNumber;
            const token = this.dataset.token;

            document.getElementById('deleteBatchMessage').innerHTML = `
                <div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div>
                <p>Supprimer le lot <strong>\${batchNumber}</strong> ?</p>
                <p class=\"text-danger mb-0\"><small>Cette suppression n'est possible que si aucun mouvement de stock n'est associé.</small></p>
            `;

            document.getElementById('deleteBatchForm').action = `/admin/stock-batch/\${batchId}/delete`;
            document.getElementById('deleteBatchToken').value = token;

            deleteModal.show();
        });
    });

});
</script>
{% endblock %}", "admin/stock_batch/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\index.html.twig");
    }
}
