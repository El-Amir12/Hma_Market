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
class __TwigTemplate_b09d9568097cbf3292dfd320b86610a3 extends Template
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
    /* ✅ Utilisation des variables CSS de base.html.twig */
    
    /* Cartes statistiques */
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        overflow: hidden;
        border-radius: 1rem;
        background: white !important;
        border: 1px solid #e9ecef;
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
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
        margin-top: 0.25rem;
        display: inline-block;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(var(--primary-rgb), 0.05);
        cursor: pointer;
    }
    .progress {
        border-radius: 10px;
        overflow: hidden;
        height: 6px;
    }
    .card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
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
    @media (max-width: 768px) {
        .btn-group { flex-direction: column; }
        .btn-group .btn { margin: 1px 0; }
        .stat-value { font-size: 1.3rem; }
        .stat-icon { width: 40px; height: 40px; }
        .stat-icon i { font-size: 1.3rem; }
    }
    .issue-critical {
        background-color: var(--danger-color) !important;
        color: white !important;
    }
    .issue-high {
        background-color: #fd7e14 !important;
        color: white !important;
    }
    
    /* ✅ Boutons avec couleurs dynamiques */
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 147
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

        // line 148
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-cubes me-1\"></i> Gestion des lots
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-cubes me-2 text-primary\"></i>
                Gestion globale des lots
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Visualisez et gérez tous les lots de stock de votre entreprise
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-map-marker-alt me-2\"></i> Emplacements
            </a>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> Exporter
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><a class=\"dropdown-item\" href=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "request", [], "any", false, false, false, 182), "query", [], "any", false, false, false, 182), "all", [], "any", false, false, false, 182)), "html", null, true);
        yield "\"><i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "request", [], "any", false, false, false, 183), "query", [], "any", false, false, false, 183), "all", [], "any", false, false, false, 183)), "html", null, true);
        yield "\"><i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_excel_template");
        yield "\"><i class=\"fas fa-download me-2\"></i> Télécharger template</a></li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- Cartes statistiques - 2 lignes (4 + 3 = 7 cartes) -->
    <!-- Ligne 1 : 4 cartes -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total lots</div>
                            <div class=\"stat-value text-primary\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 203)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 203, $this->source); })()), "total_batches", [], "any", false, false, false, 203), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-primary bg-opacity-10\">
                            <i class=\"fas fa-boxes fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots actifs</div>
                            <div class=\"stat-value text-success\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 218)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 218, $this->source); })()), "active_batches", [], "any", false, false, false, 218), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-play-circle fa-2x text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Expire bientôt</div>
                            <div class=\"stat-value text-warning\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 233)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 233, $this->source); })()), "expiring_soon_batches", [], "any", false, false, false, 233), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-hourglass-half fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Unités en stock</div>
                            <div class=\"stat-value text-info\">";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 248)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 248, $this->source); })()), "total_quantity", [], "any", false, false, false, 248), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-info bg-opacity-10\">
                            <i class=\"fas fa-chart-line fa-2x text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ligne 2 : 3 cartes -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots expirés</div>
                            <div class=\"stat-value text-danger\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 267)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 267, $this->source); })()), "expired_batches", [], "any", false, false, false, 267), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-danger bg-opacity-10\">
                            <i class=\"fas fa-calendar-times fa-2x text-danger\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Avoirs ouverts</div>
                            <div class=\"stat-value text-secondary\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "open_issues", [], "any", true, true, false, 282)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 282, $this->source); })()), "open_issues", [], "any", false, false, false, 282), 0)) : (0)), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub text-muted mt-1\">";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_issue_amount", [], "any", true, true, false, 283)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 283, $this->source); })()), "total_issue_amount", [], "any", false, false, false, 283), 0)) : (0)), (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 283, $this->source); })())), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-secondary bg-opacity-10\">
                            <i class=\"fas fa-file-invoice-dollar fa-2x text-secondary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Stock faible</div>
                            <div class=\"stat-value text-warning\">";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "low_stock_batches", [], "any", true, true, false, 298)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 298, $this->source); })()), "low_stock_batches", [], "any", false, false, false, 298), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-exclamation-triangle fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 314
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all");
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
                <!-- Première ligne -->
                <div class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"N° lot ou produit...\" value=\"";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 328)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 328, $this->source); })()), "search", [], "any", false, false, false, 328), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Produit</label>
                        <select name=\"product_id\" id=\"product-select\" class=\"form-select select2-product\">
                            <option value=\"\">-- Tous les produits --</option>
                            ";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 334, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 335
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 335), "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "product_id", [], "any", true, true, false, 335)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 335, $this->source); })()), "product_id", [], "any", false, false, false, 335), "")) : ("")) == CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 335))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 335), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        yield "                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select select2-location\">
                            <option value=\"\">-- Tous les emplacements --</option>
                            ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("all_locations", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["all_locations"]) || array_key_exists("all_locations", $context) ? $context["all_locations"] : (function () { throw new RuntimeError('Variable "all_locations" does not exist.', 343, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 344
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 344)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 344, $this->source); })()), "location", [], "any", false, false, false, 344), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        yield "                        </select>
                    </div>
                </div>

                <!-- Deuxième ligne -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold small\">Statut lot</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 356
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 356)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 356, $this->source); })()), "status", [], "any", false, false, false, 356), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 357
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 357)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 357, $this->source); })()), "status", [], "any", false, false, false, 357), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold small\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" ";
        // line 364
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 364)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 364, $this->source); })()), "expiry_status", [], "any", false, false, false, 364), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                            <option value=\"expiring_soon\" ";
        // line 365
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 365)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 365, $this->source); })()), "expiry_status", [], "any", false, false, false, 365), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Expire bientôt</option>
                            <option value=\"not_expiring\" ";
        // line 366
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 366)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 366, $this->source); })()), "expiry_status", [], "any", false, false, false, 366), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold small\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 373
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 373)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 373, $this->source); })()), "low_stock", [], "any", false, false, false, 373), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold small\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 380
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 380)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 380, $this->source); })()), "has_issue", [], "any", false, false, false, 380), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">Avec avoir</option>
                            <option value=\"no\" ";
        // line 381
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 381)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 381, $this->source); })()), "has_issue", [], "any", false, false, false, 381), "")) : ("")) == "no")) ? ("selected") : (""));
        yield ">Sans avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold small\">Statut avoir</label>
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
                </div>

                <!-- Troisième ligne -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Dates expiration</label>
                        <div class=\"d-flex gap-2\"><input type=\"date\" name=\"date_from\" class=\"form-control\" placeholder=\"Du\" value=\"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 403)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 403, $this->source); })()), "date_from", [], "any", false, false, false, 403), "")) : ("")), "html", null, true);
        yield "\"><input type=\"date\" name=\"date_to\" class=\"form-control\" placeholder=\"Au\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 403)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 403, $this->source); })()), "date_to", [], "any", false, false, false, 403), "")) : ("")), "html", null, true);
        yield "\"></div>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"batch_number\" ";
        // line 408
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 408)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 408, $this->source); })()), "sort", [], "any", false, false, false, 408), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                            <option value=\"p.name\" ";
        // line 409
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 409)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 409, $this->source); })()), "sort", [], "any", false, false, false, 409), "expiry_date")) : ("expiry_date")) == "p.name")) ? ("selected") : (""));
        yield ">Produit</option>
                            <option value=\"expiry_date\" ";
        // line 410
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 410)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 410, $this->source); })()), "sort", [], "any", false, false, false, 410), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Date expiration</option>
                            <option value=\"current_quantity\" ";
        // line 411
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 411)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 411, $this->source); })()), "sort", [], "any", false, false, false, 411), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            <option value=\"location\" ";
        // line 412
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 412)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 412, $this->source); })()), "sort", [], "any", false, false, false, 412), "expiry_date")) : ("expiry_date")) == "location")) ? ("selected") : (""));
        yield ">Emplacement</option>
                            <option value=\"issue_status\" ";
        // line 413
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 413)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 413, $this->source); })()), "sort", [], "any", false, false, false, 413), "expiry_date")) : ("expiry_date")) == "issue_status")) ? ("selected") : (""));
        yield ">Statut avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Ordre</label>
                        <select name=\"direction\" class=\"form-select\"><option value=\"asc\" ";
        // line 418
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 418)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 418, $this->source); })()), "direction", [], "any", false, false, false, 418), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">Croissant ↑</option><option value=\"desc\" ";
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 418)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 418, $this->source); })()), "direction", [], "any", false, false, false, 418), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
        yield ">Décroissant ↓</option></select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-list me-2\"></i> Liste des lots</h5>
            <div class=\"d-flex gap-2 align-items-center\">
                <span class=\"badge bg-secondary\">";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 430, $this->source); })())), "html", null, true);
        yield " lot(s)</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\"><i class=\"fas fa-check-double me-1\"></i> Tout sélectionner</button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\"><i class=\"fas fa-times me-1\"></i> Désélectionner</button>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width:40px\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
                            <th>N° lot</th>
                            <th>Produit</th>
                            <th>Emplacement</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Expiration</th>
                            <th>Avoir</th>
                            <th>Statut lot</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 453, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 454
            yield "                            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 454) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 454) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 455
            yield "                            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 455) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 455) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 455) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 456
            yield "                            ";
            $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 456) <= 10);
            // line 457
            yield "                            ";
            $context["hasIssue"] = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 457);
            // line 458
            yield "                            ";
            $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 458)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 458), "displayName", [], "any", false, false, false, 458)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 458)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 458)) : ("—"))));
            // line 459
            yield "                            
                            ";
            // line 461
            yield "                            ";
            $context["canReport"] = false;
            // line 462
            yield "                            ";
            if (( !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 462, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 462))) {
                // line 463
                yield "                                ";
                if ((array_key_exists("canReportIssue", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["canReportIssue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 463), [], "array", true, true, false, 463))) {
                    // line 464
                    yield "                                    ";
                    $context["canReport"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 464, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 464), [], "array", false, false, false, 464);
                    // line 465
                    yield "                                ";
                }
                // line 466
                yield "                            ";
            }
            // line 467
            yield "                            
                            ";
            // line 469
            yield "                            ";
            $context["purchaseItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItems"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 469), [], "array", true, true, false, 469)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 469, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 469), [], "array", false, false, false, 469)) : (null));
            // line 470
            yield "                            
                            <tr class=\"
                                ";
            // line 472
            if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 472, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-danger
                                ";
            } elseif ((($tmp =             // line 473
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 473, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-warning
                                ";
            } elseif ((($tmp =             // line 474
(isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 474, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-info
                                ";
            } elseif ((($tmp =             // line 475
(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 475, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-light
                                ";
            }
            // line 477
            yield "                            \">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 478), "html", null, true);
            yield "\"></td>
                                <td>
                                    <div class=\"d-flex flex-column\">
                                        <strong>";
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 481), "html", null, true);
            yield "</strong>
                                        ";
            // line 482
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 482)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 483
                yield "                                            ";
                // line 484
                yield "                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-receipt me-1\"></i> 
                                                ";
                // line 486
                if ((array_key_exists("purchaseMap", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 486), [], "array", true, true, false, 486))) {
                    // line 487
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseMap"]) || array_key_exists("purchaseMap", $context) ? $context["purchaseMap"] : (function () { throw new RuntimeError('Variable "purchaseMap" does not exist.', 487, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 487), [], "array", false, false, false, 487), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 489
                    yield "                                                    ACHAT #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 489), "html", null, true);
                    yield "
                                                ";
                }
                // line 491
                yield "                                            </small>
                                            
                                            ";
                // line 494
                yield "                                            ";
                if (((isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 494, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 494, $this->source); })()), "purchase", [], "any", false, false, false, 494))) {
                    // line 495
                    yield "                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                                    ";
                    // line 497
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 497, $this->source); })()), "purchase", [], "any", false, false, false, 497), "createdAt", [], "any", false, false, false, 497), "d/m/Y"), "html", null, true);
                    yield "
                                                </small>
                                                ";
                    // line 499
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 499, $this->source); })()), "purchase", [], "any", false, false, false, 499), "supplier", [], "any", false, false, false, 499)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 500
                        yield "                                                    <small class=\"text-muted\">
                                                        <i class=\"fas fa-truck me-1\"></i>
                                                        ";
                        // line 502
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 502), "supplier", [], "any", false, true, false, 502), "name", [], "any", true, true, false, 502)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 502, $this->source); })()), "purchase", [], "any", false, false, false, 502), "supplier", [], "any", false, false, false, 502), "name", [], "any", false, false, false, 502), "")) : ("")), "html", null, true);
                        yield "
                                                    </small>
                                                ";
                    }
                    // line 505
                    yield "                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-box me-1\"></i>
                                                    ";
                    // line 507
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 507, $this->source); })()), "quantity", [], "any", false, false, false, 507), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, true, false, 507), "unit", [], "any", true, true, false, 507)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 507), "unit", [], "any", false, false, false, 507), "pièce(s)")) : ("pièce(s)")), "html", null, true);
                    yield "
                                                </small>
                                            ";
                }
                // line 510
                yield "                                        ";
            }
            // line 511
            yield "                                    </div>
                                </td>
                                <td>
                                    <a href=\"";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 514), "id", [], "any", false, false, false, 514)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 514), "name", [], "any", false, false, false, 514)), "truncate", [35], "method", false, false, false, 514), "html", null, true);
            yield "</a>
                                    <br><small class=\"text-muted\"><i class=\"fas fa-barcode me-1\"></i>";
            // line 515
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 515), "barcode", [], "any", false, false, false, 515), "html", null, true);
            yield "</small>
                                </td>
                                <td>
                                    ";
            // line 518
            if (((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 518, $this->source); })()) != "—")) {
                // line 519
                yield "                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 519, $this->source); })()), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 521
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 523
            yield "                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">";
            // line 526
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 526), "html", null, true);
            yield "</span>
                                        <small class=\"text-muted\">/ ";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 527), "html", null, true);
            yield "</small>
                                        <div class=\"progress mt-1\" style=\"height:4px\">
                                            <div class=\"progress-bar 
                                                ";
            // line 530
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 530) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 530)) * 100) <= 10)) {
                yield "bg-danger
                                                ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,             // line 531
$context["batch"], "currentQuantity", [], "any", false, false, false, 531) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 531)) * 100) <= 30)) {
                yield "bg-warning
                                                ";
            } else {
                // line 532
                yield "bg-success";
            }
            yield "\" 
                                                style=\"width:";
            // line 533
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 533) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 533)) * 100)), "html", null, true);
            yield "%\">
                                            </div>
                                        </div>
                                        ";
            // line 536
            if ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 536, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 537
                yield "                                            <br><span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>
                                        ";
            }
            // line 539
            yield "                                    </div>
                                </td>
                                <td>";
            // line 541
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 541), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 541)), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 543
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 543)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 544
                yield "                                        <div>
                                            <span class=\"fw-bold\">";
                // line 545
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 545), "d/m/Y"), "html", null, true);
                yield "</span>
                                            ";
                // line 546
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 546, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 547
                    yield "                                                <br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            ";
                } elseif ((($tmp =                 // line 548
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 548, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 549
                    yield "                                                <br><span class=\"badge bg-warning text-dark mt-1\">J-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 549), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 549), "days", [], "any", false, false, false, 549), "html", null, true);
                    yield "</span>
                                            ";
                }
                // line 551
                yield "                                        </div>
                                    ";
            } else {
                // line 553
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 555
            yield "                                </td>
                                <td>
                                    ";
            // line 557
            if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 557, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 558
                yield "                                        <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusBadgeClass", [], "any", false, false, false, 558), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusLabel", [], "any", false, false, false, 558), "html", null, true);
                yield "</span>
                                        ";
                // line 559
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issuePriority", [], "any", false, false, false, 559) == "critical")) {
                    // line 560
                    yield "                                            <span class=\"badge bg-danger mt-1 d-block\">Critique</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 561
$context["batch"], "issuePriority", [], "any", false, false, false, 561) == "high")) {
                    // line 562
                    yield "                                            <span class=\"badge bg-warning text-dark mt-1 d-block\">Haute</span>
                                        ";
                }
                // line 564
                yield "                                        <small class=\"text-muted d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 564), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 564)), "html", null, true);
                yield "</small>
                                    ";
            } else {
                // line 566
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 568
            yield "                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 570
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 570)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 571
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
    <div class=\"btn-group\" role=\"group\">
        <a href=\"";
            // line 576
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 576)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\">
            <i class=\"fas fa-print\"></i>
        </a>
        <a href=\"";
            // line 579
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 579)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
            <i class=\"fas fa-eye\"></i>
        </a>
        <a href=\"";
            // line 582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 582)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
            <i class=\"fas fa-map-marker-alt\"></i>
        </a>
        
        ";
            // line 587
            yield "        ";
            if ((($tmp = (isset($context["canReport"]) || array_key_exists("canReport", $context) ? $context["canReport"] : (function () { throw new RuntimeError('Variable "canReport" does not exist.', 587, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 588
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 588)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-danger\" title=\"Signaler un problème\">
                <i class=\"fas fa-exclamation-triangle\"></i>
            </a>
        ";
            } elseif ((            // line 591
(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 591, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["supplierCreditNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 591), [], "array", true, true, false, 591))) {
                // line 592
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplierCreditNotes"]) || array_key_exists("supplierCreditNotes", $context) ? $context["supplierCreditNotes"] : (function () { throw new RuntimeError('Variable "supplierCreditNotes" does not exist.', 592, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 592), [], "array", false, false, false, 592), "id", [], "any", false, false, false, 592)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-info\" title=\"Voir l'avoir\">
                <i class=\"fas fa-file-invoice-dollar\"></i>
            </a>
        ";
            } else {
                // line 596
                yield "            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" disabled title=\"Signalement non disponible (délai de 30 jours dépassé)\">
                <i class=\"fas fa-exclamation-triangle text-muted\"></i>
            </button>
        ";
            }
            // line 600
            yield "        
        <button type=\"button\" class=\"btn btn-sm btn-outline-info toggle-batch-btn\" 
                data-batch-id=\"";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 602), "html", null, true);
            yield "\" 
                data-is-active=\"";
            // line 603
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 603)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\" 
                data-batch-number=\"";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 604), "html", null, true);
            yield "\" 
                data-token=\"";
            // line 605
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 605))), "html", null, true);
            yield "\">
            <i class=\"fas ";
            // line 606
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 606)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield "\"></i>
        </button>
        
        ";
            // line 609
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 609)) == 0)) &&  !(isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 609, $this->source); })()))) {
                // line 610
                yield "            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-batch-btn\" 
                    data-batch-id=\"";
                // line 611
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 611), "html", null, true);
                yield "\" 
                    data-batch-number=\"";
                // line 612
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 612), "html", null, true);
                yield "\" 
                    data-token=\"";
                // line 613
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 613))), "html", null, true);
                yield "\">
                <i class=\"fas fa-trash\"></i>
            </button>
        ";
            }
            // line 617
            yield "    </div>
</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 620
        if (!$context['_iterated']) {
            // line 621
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
        // line 629
        yield "                    </tbody>
                </table>
            </div>
        </div>
        ";
        // line 633
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 633, $this->source); })()) > 1)) {
            // line 634
            yield "        <div class=\"card-footer bg-white\"><nav><ul class=\"pagination justify-content-center mb-0\">
            ";
            // line 635
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 635, $this->source); })()) > 1)) {
                yield "<li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 635, $this->source); })()), "request", [], "any", false, false, false, 635), "query", [], "any", false, false, false, 635), "all", [], "any", false, false, false, 635), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 635, $this->source); })()) - 1)])), "html", null, true);
                yield "\"><i class=\"fas fa-chevron-left\"></i> Précédent</a></li>";
            }
            // line 636
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 636, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                yield "<li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 636, $this->source); })()))) ? ("active") : (""));
                yield "\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 636, $this->source); })()), "request", [], "any", false, false, false, 636), "query", [], "any", false, false, false, 636), "all", [], "any", false, false, false, 636), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 637
            yield "            ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 637, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 637, $this->source); })()))) {
                yield "<li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 637, $this->source); })()), "request", [], "any", false, false, false, 637), "query", [], "any", false, false, false, 637), "all", [], "any", false, false, false, 637), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 637, $this->source); })()) + 1)])), "html", null, true);
                yield "\">Suivant <i class=\"fas fa-chevron-right\"></i></a></li>";
            }
            // line 638
            yield "        </ul></nav></div>";
        }
        // line 639
        yield "    </div>
</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\" style=\"background: var(--primary-color); color: white;\"><h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> lot(s) sélectionné(s)</div><div class=\"d-grid gap-2\"><button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\"><i class=\"fas fa-print me-2\"></i> Imprimer la sélection</button><button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\"><i class=\"fas fa-print me-2\"></i> Imprimer tous les lots</button></div></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button></div></div></div></div>
<div class=\"modal fade\" id=\"importExcelModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\" style=\"background: var(--success-color); color: white;\"><h5 class=\"modal-title\"><i class=\"fas fa-file-excel me-2\"></i> Importer des lots</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> Utilisez l'export pour obtenir le template.</div><form method=\"post\" action=\"";
        // line 644
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_import_excel");
        yield "\" enctype=\"multipart/form-data\"><div class=\"mb-3\"><label class=\"form-label fw-bold\">Fichier Excel (.xlsx)</label><input type=\"file\" name=\"excel_file\" class=\"form-control\" accept=\".xlsx,.xls\" required></div><div class=\"form-check mb-3\"><input type=\"checkbox\" name=\"update_only_location\" class=\"form-check-input\" id=\"updateOnlyLocation\" checked><label class=\"form-check-label\" for=\"updateOnlyLocation\">Mettre à jour uniquement les emplacements</label></div><div class=\"d-grid\"><button type=\"submit\" class=\"btn\" style=\"background: var(--success-color); color: white; border-color: var(--success-color);\"><i class=\"fas fa-upload me-2\"></i> Importer</button></div></form></div></div></div></div>
<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\"><h5 class=\"modal-title\">Confirmation</h5><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><p id=\"toggleBatchMessage\"></p></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button><form id=\"toggleBatchForm\" method=\"post\"><input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\"><button type=\"submit\" class=\"btn\" id=\"toggleBatchBtn\"></button></form></div></div></div></div>
<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\" style=\"background: var(--danger-color); color: white;\"><h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><p id=\"deleteBatchMessage\"></p></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button><form id=\"deleteBatchForm\" method=\"post\"><input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\"><button type=\"submit\" class=\"btn\" style=\"background: var(--danger-color); color: white; border-color: var(--danger-color);\">Supprimer</button></form></div></div></div></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 650
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

        // line 651
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    \$('#product-select, #location-select').select2({ theme: 'bootstrap-5', language: 'fr', allowClear: true, width: '100%' });
    const selectAll = document.getElementById('select-all-checkbox'), checkboxes = document.querySelectorAll('.batch-checkbox'), countSpan = document.getElementById('selectedCount');
    function updateCount() { const s = document.querySelectorAll('.batch-checkbox:checked').length; if(countSpan) countSpan.textContent = s; if(selectAll) selectAll.checked = checkboxes.length === s; }
    if(selectAll) selectAll.addEventListener('change', function() { checkboxes.forEach(cb => cb.checked = selectAll.checked); updateCount(); });
    document.getElementById('selectAllBtn')?.addEventListener('click', () => { checkboxes.forEach(cb => cb.checked = true); if(selectAll) selectAll.checked = true; updateCount(); });
    document.getElementById('deselectAllBtn')?.addEventListener('click', () => { checkboxes.forEach(cb => cb.checked = false); if(selectAll) selectAll.checked = false; updateCount(); });
    checkboxes.forEach(cb => cb.addEventListener('change', updateCount));
    updateCount();
    document.getElementById('print-selected')?.addEventListener('click', () => { const s = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value); if(s.length) window.open('/admin/stock-batch/print-multiple?ids=' + s.join(','), '_blank'); else alert('Sélectionnez au moins un lot.'); });
    document.getElementById('print-all')?.addEventListener('click', () => { const all = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value); if(all.length) window.open('/admin/stock-batch/print-multiple?ids=' + all.join(','), '_blank'); else alert('Aucun lot à imprimer.'); });
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => btn.addEventListener('click', function() {
        const id = this.dataset.batchId, isActive = this.dataset.isActive === '1', token = this.dataset.token, num = this.dataset.batchNumber;
        document.getElementById('toggleBatchMessage').innerText = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${num}\" ?`;
        document.getElementById('toggleBatchForm').action = `/admin/stock-batch/\${id}/toggle`;
        document.getElementById('toggleBatchToken').value = token;
        const btn2 = document.getElementById('toggleBatchBtn');
        btn2.className = isActive ? 'btn btn-danger' : 'btn btn-success';
        btn2.textContent = isActive ? 'Désactiver' : 'Activer';
        toggleModal.show();
    }));
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => btn.addEventListener('click', function() {
        document.getElementById('deleteBatchMessage').innerHTML = `<div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div><p>Supprimer le lot <strong>\${this.dataset.batchNumber}</strong> ?</p><p class=\"text-danger mb-0\"><small>Cette suppression n'est possible que si aucun mouvement de stock n'est associé.</small></p>`;
        document.getElementById('deleteBatchForm').action = '/admin/stock-batch/' + this.dataset.batchId + '/delete';
        document.getElementById('deleteBatchToken').value = this.dataset.token;
        deleteModal.show();
    }));
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
        return array (  1201 => 651,  1188 => 650,  1172 => 644,  1165 => 639,  1162 => 638,  1155 => 637,  1139 => 636,  1133 => 635,  1130 => 634,  1128 => 633,  1122 => 629,  1109 => 621,  1107 => 620,  1100 => 617,  1093 => 613,  1089 => 612,  1085 => 611,  1082 => 610,  1080 => 609,  1074 => 606,  1070 => 605,  1066 => 604,  1062 => 603,  1058 => 602,  1054 => 600,  1048 => 596,  1040 => 592,  1038 => 591,  1031 => 588,  1028 => 587,  1021 => 582,  1015 => 579,  1009 => 576,  1001 => 571,  997 => 570,  993 => 568,  989 => 566,  983 => 564,  979 => 562,  977 => 561,  974 => 560,  972 => 559,  965 => 558,  963 => 557,  959 => 555,  955 => 553,  951 => 551,  945 => 549,  943 => 548,  940 => 547,  938 => 546,  934 => 545,  931 => 544,  929 => 543,  924 => 541,  920 => 539,  916 => 537,  914 => 536,  908 => 533,  903 => 532,  898 => 531,  894 => 530,  888 => 527,  884 => 526,  879 => 523,  875 => 521,  869 => 519,  867 => 518,  861 => 515,  855 => 514,  850 => 511,  847 => 510,  839 => 507,  835 => 505,  829 => 502,  825 => 500,  823 => 499,  818 => 497,  814 => 495,  811 => 494,  807 => 491,  801 => 489,  795 => 487,  793 => 486,  789 => 484,  787 => 483,  785 => 482,  781 => 481,  775 => 478,  772 => 477,  767 => 475,  763 => 474,  759 => 473,  755 => 472,  751 => 470,  748 => 469,  745 => 467,  742 => 466,  739 => 465,  736 => 464,  733 => 463,  730 => 462,  727 => 461,  724 => 459,  721 => 458,  718 => 457,  715 => 456,  712 => 455,  709 => 454,  704 => 453,  678 => 430,  661 => 418,  653 => 413,  649 => 412,  645 => 411,  641 => 410,  637 => 409,  633 => 408,  623 => 403,  598 => 381,  594 => 380,  584 => 373,  574 => 366,  570 => 365,  566 => 364,  556 => 357,  552 => 356,  540 => 346,  527 => 344,  523 => 343,  515 => 337,  502 => 335,  498 => 334,  489 => 328,  472 => 314,  453 => 298,  435 => 283,  431 => 282,  413 => 267,  391 => 248,  373 => 233,  355 => 218,  337 => 203,  316 => 185,  311 => 183,  307 => 182,  296 => 174,  274 => 155,  265 => 148,  252 => 147,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
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
    /* ✅ Utilisation des variables CSS de base.html.twig */
    
    /* Cartes statistiques */
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        overflow: hidden;
        border-radius: 1rem;
        background: white !important;
        border: 1px solid #e9ecef;
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
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
        margin-top: 0.25rem;
        display: inline-block;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(var(--primary-rgb), 0.05);
        cursor: pointer;
    }
    .progress {
        border-radius: 10px;
        overflow: hidden;
        height: 6px;
    }
    .card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
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
    @media (max-width: 768px) {
        .btn-group { flex-direction: column; }
        .btn-group .btn { margin: 1px 0; }
        .stat-value { font-size: 1.3rem; }
        .stat-icon { width: 40px; height: 40px; }
        .stat-icon i { font-size: 1.3rem; }
    }
    .issue-critical {
        background-color: var(--danger-color) !important;
        color: white !important;
    }
    .issue-high {
        background-color: #fd7e14 !important;
        color: white !important;
    }
    
    /* ✅ Boutons avec couleurs dynamiques */
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
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-cubes me-1\"></i> Gestion des lots
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-cubes me-2 text-primary\"></i>
                Gestion globale des lots
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Visualisez et gérez tous les lots de stock de votre entreprise
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('app_admin_location_index') }}\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-map-marker-alt me-2\"></i> Emplacements
            </a>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> Exporter
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_export_excel', app.request.query.all) }}\"><i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_export_pdf', app.request.query.all) }}\"><i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_export_excel_template') }}\"><i class=\"fas fa-download me-2\"></i> Télécharger template</a></li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- Cartes statistiques - 2 lignes (4 + 3 = 7 cartes) -->
    <!-- Ligne 1 : 4 cartes -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total lots</div>
                            <div class=\"stat-value text-primary\">{{ stats.total_batches|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon bg-primary bg-opacity-10\">
                            <i class=\"fas fa-boxes fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots actifs</div>
                            <div class=\"stat-value text-success\">{{ stats.active_batches|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-play-circle fa-2x text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Expire bientôt</div>
                            <div class=\"stat-value text-warning\">{{ stats.expiring_soon_batches|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-hourglass-half fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Unités en stock</div>
                            <div class=\"stat-value text-info\">{{ stats.total_quantity|default(0)|number_format(0, ',', ' ') }}</div>
                        </div>
                        <div class=\"stat-icon bg-info bg-opacity-10\">
                            <i class=\"fas fa-chart-line fa-2x text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ligne 2 : 3 cartes -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots expirés</div>
                            <div class=\"stat-value text-danger\">{{ stats.expired_batches|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon bg-danger bg-opacity-10\">
                            <i class=\"fas fa-calendar-times fa-2x text-danger\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Avoirs ouverts</div>
                            <div class=\"stat-value text-secondary\">{{ stats.open_issues|default(0) }}</div>
                            <div class=\"stat-sub text-muted mt-1\">{{ stats.total_issue_amount|default(0)|price_with_currency(hmaService) }}</div>
                        </div>
                        <div class=\"stat-icon bg-secondary bg-opacity-10\">
                            <i class=\"fas fa-file-invoice-dollar fa-2x text-secondary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Stock faible</div>
                            <div class=\"stat-value text-warning\">{{ stats.low_stock_batches|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-exclamation-triangle fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_admin_stock_batch_all') }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white\">
            <form method=\"get\" id=\"filter-form\">
                <!-- Première ligne -->
                <div class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"N° lot ou produit...\" value=\"{{ filters.search|default('') }}\">
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Produit</label>
                        <select name=\"product_id\" id=\"product-select\" class=\"form-select select2-product\">
                            <option value=\"\">-- Tous les produits --</option>
                            {% for product in products %}
                                <option value=\"{{ product.id }}\" {{ filters.product_id|default('') == product.id ? 'selected' }}>{{ product.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select select2-location\">
                            <option value=\"\">-- Tous les emplacements --</option>
                            {% for loc in all_locations|default([]) %}
                                <option value=\"{{ loc }}\" {{ filters.location|default('') == loc ? 'selected' }}>{{ loc }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>

                <!-- Deuxième ligne -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold small\">Statut lot</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ filters.status|default('') == 'active' ? 'selected' }}>Actifs</option>
                            <option value=\"inactive\" {{ filters.status|default('') == 'inactive' ? 'selected' }}>Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold small\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" {{ filters.expiry_status|default('') == 'expired' ? 'selected' }}>Expirés</option>
                            <option value=\"expiring_soon\" {{ filters.expiry_status|default('') == 'expiring_soon' ? 'selected' }}>Expire bientôt</option>
                            <option value=\"not_expiring\" {{ filters.expiry_status|default('') == 'not_expiring' ? 'selected' }}>Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold small\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" {{ filters.low_stock|default('') == 'yes' ? 'selected' }}>≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold small\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" {{ filters.has_issue|default('') == 'yes' ? 'selected' }}>Avec avoir</option>
                            <option value=\"no\" {{ filters.has_issue|default('') == 'no' ? 'selected' }}>Sans avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold small\">Statut avoir</label>
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
                </div>

                <!-- Troisième ligne -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Dates expiration</label>
                        <div class=\"d-flex gap-2\"><input type=\"date\" name=\"date_from\" class=\"form-control\" placeholder=\"Du\" value=\"{{ filters.date_from|default('') }}\"><input type=\"date\" name=\"date_to\" class=\"form-control\" placeholder=\"Au\" value=\"{{ filters.date_to|default('') }}\"></div>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"batch_number\" {{ filters.sort|default('expiry_date') == 'batch_number' ? 'selected' }}>N° lot</option>
                            <option value=\"p.name\" {{ filters.sort|default('expiry_date') == 'p.name' ? 'selected' }}>Produit</option>
                            <option value=\"expiry_date\" {{ filters.sort|default('expiry_date') == 'expiry_date' ? 'selected' }}>Date expiration</option>
                            <option value=\"current_quantity\" {{ filters.sort|default('expiry_date') == 'current_quantity' ? 'selected' }}>Quantité</option>
                            <option value=\"location\" {{ filters.sort|default('expiry_date') == 'location' ? 'selected' }}>Emplacement</option>
                            <option value=\"issue_status\" {{ filters.sort|default('expiry_date') == 'issue_status' ? 'selected' }}>Statut avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Ordre</label>
                        <select name=\"direction\" class=\"form-select\"><option value=\"asc\" {{ filters.direction|default('asc') == 'asc' ? 'selected' }}>Croissant ↑</option><option value=\"desc\" {{ filters.direction|default('asc') == 'desc' ? 'selected' }}>Décroissant ↓</option></select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-list me-2\"></i> Liste des lots</h5>
            <div class=\"d-flex gap-2 align-items-center\">
                <span class=\"badge bg-secondary\">{{ batches|length }} lot(s)</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\"><i class=\"fas fa-check-double me-1\"></i> Tout sélectionner</button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\"><i class=\"fas fa-times me-1\"></i> Désélectionner</button>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width:40px\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
                            <th>N° lot</th>
                            <th>Produit</th>
                            <th>Emplacement</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Expiration</th>
                            <th>Avoir</th>
                            <th>Statut lot</th>
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
                            
                            {# ✅ Vérifier si le signalement est autorisé #}
                            {% set canReport = false %}
                            {% if not hasIssue and batch.purchaseItemId %}
                                {% if canReportIssue is defined and canReportIssue[batch.id] is defined %}
                                    {% set canReport = canReportIssue[batch.id] %}
                                {% endif %}
                            {% endif %}
                            
                            {# ✅ Récupérer le PurchaseItem pour ce batch #}
                            {% set purchaseItem = purchaseItems[batch.id] is defined ? purchaseItems[batch.id] : null %}
                            
                            <tr class=\"
                                {% if isExpired %}table-danger
                                {% elseif isExpiringSoon %}table-warning
                                {% elseif isLowStock %}table-info
                                {% elseif hasIssue %}table-light
                                {% endif %}
                            \">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"{{ batch.id }}\"></td>
                                <td>
                                    <div class=\"d-flex flex-column\">
                                        <strong>{{ batch.batchNumber }}</strong>
                                        {% if batch.purchaseItemId %}
                                            {# Numéro de commande #}
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-receipt me-1\"></i> 
                                                {% if purchaseMap is defined and purchaseMap[batch.purchaseItemId] is defined %}
                                                    {{ purchaseMap[batch.purchaseItemId] }}
                                                {% else %}
                                                    ACHAT #{{ batch.purchaseItemId }}
                                                {% endif %}
                                            </small>
                                            
                                            {# ✅ DATE D'ACHAT, FOURNISSEUR ET QUANTITÉ #}
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
                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-box me-1\"></i>
                                                    {{ purchaseItem.quantity }} {{ batch.product.unit|default('pièce(s)') }}
                                                </small>
                                            {% endif %}
                                        {% endif %}
                                    </div>
                                </td>
                                <td>
                                    <a href=\"{{ path('app_admin_product_show', {'id': batch.product.id}) }}\" class=\"text-decoration-none\">{{ batch.product.name|u.truncate(35) }}</a>
                                    <br><small class=\"text-muted\"><i class=\"fas fa-barcode me-1\"></i>{{ batch.product.barcode }}</small>
                                </td>
                                <td>
                                    {% if locationDisplay != '—' %}
                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> {{ locationDisplay }}</span>
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
                                            <br><span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>
                                        {% endif %}
                                    </div>
                                </td>
                                <td>{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</td>
                                <td>
                                    {% if batch.expiryDate %}
                                        <div>
                                            <span class=\"fw-bold\">{{ batch.expiryDate|date('d/m/Y') }}</span>
                                            {% if isExpired %}
                                                <br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            {% elseif isExpiringSoon %}
                                                <br><span class=\"badge bg-warning text-dark mt-1\">J-{{ batch.expiryDate.diff(date()).days }}</span>
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
                                            <span class=\"badge bg-danger mt-1 d-block\">Critique</span>
                                        {% elseif batch.issuePriority == 'high' %}
                                            <span class=\"badge bg-warning text-dark mt-1 d-block\">Haute</span>
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
        
        {# ✅ SIGNALER UN PROBLÈME - UNIQUEMENT SI AUTORISÉ #}
        {% if canReport %}
            <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-sm btn-outline-danger\" title=\"Signaler un problème\">
                <i class=\"fas fa-exclamation-triangle\"></i>
            </a>
        {% elseif hasIssue and supplierCreditNotes[batch.id] is defined %}
            <a href=\"{{ path('app_supplier_credit_note_show', {'id': supplierCreditNotes[batch.id].id}) }}\" class=\"btn btn-sm btn-outline-info\" title=\"Voir l'avoir\">
                <i class=\"fas fa-file-invoice-dollar\"></i>
            </a>
        {% else %}
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" disabled title=\"Signalement non disponible (délai de 30 jours dépassé)\">
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
        {% if totalPages > 1 %}
        <div class=\"card-footer bg-white\"><nav><ul class=\"pagination justify-content-center mb-0\">
            {% if currentPage > 1 %}<li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_all', app.request.query.all|merge({'page': currentPage - 1})) }}\"><i class=\"fas fa-chevron-left\"></i> Précédent</a></li>{% endif %}
            {% for page in 1..totalPages %}<li class=\"page-item {{ page == currentPage ? 'active' : '' }}\"><a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_all', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a></li>{% endfor %}
            {% if currentPage < totalPages %}<li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_all', app.request.query.all|merge({'page': currentPage + 1})) }}\">Suivant <i class=\"fas fa-chevron-right\"></i></a></li>{% endif %}
        </ul></nav></div>{% endif %}
    </div>
</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\" style=\"background: var(--primary-color); color: white;\"><h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> lot(s) sélectionné(s)</div><div class=\"d-grid gap-2\"><button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\"><i class=\"fas fa-print me-2\"></i> Imprimer la sélection</button><button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\"><i class=\"fas fa-print me-2\"></i> Imprimer tous les lots</button></div></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button></div></div></div></div>
<div class=\"modal fade\" id=\"importExcelModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\" style=\"background: var(--success-color); color: white;\"><h5 class=\"modal-title\"><i class=\"fas fa-file-excel me-2\"></i> Importer des lots</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> Utilisez l'export pour obtenir le template.</div><form method=\"post\" action=\"{{ path('app_admin_stock_batch_import_excel') }}\" enctype=\"multipart/form-data\"><div class=\"mb-3\"><label class=\"form-label fw-bold\">Fichier Excel (.xlsx)</label><input type=\"file\" name=\"excel_file\" class=\"form-control\" accept=\".xlsx,.xls\" required></div><div class=\"form-check mb-3\"><input type=\"checkbox\" name=\"update_only_location\" class=\"form-check-input\" id=\"updateOnlyLocation\" checked><label class=\"form-check-label\" for=\"updateOnlyLocation\">Mettre à jour uniquement les emplacements</label></div><div class=\"d-grid\"><button type=\"submit\" class=\"btn\" style=\"background: var(--success-color); color: white; border-color: var(--success-color);\"><i class=\"fas fa-upload me-2\"></i> Importer</button></div></form></div></div></div></div>
<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\"><h5 class=\"modal-title\">Confirmation</h5><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><p id=\"toggleBatchMessage\"></p></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button><form id=\"toggleBatchForm\" method=\"post\"><input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\"><button type=\"submit\" class=\"btn\" id=\"toggleBatchBtn\"></button></form></div></div></div></div>
<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\" style=\"background: var(--danger-color); color: white;\"><h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><p id=\"deleteBatchMessage\"></p></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button><form id=\"deleteBatchForm\" method=\"post\"><input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\"><button type=\"submit\" class=\"btn\" style=\"background: var(--danger-color); color: white; border-color: var(--danger-color);\">Supprimer</button></form></div></div></div></div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    \$('#product-select, #location-select').select2({ theme: 'bootstrap-5', language: 'fr', allowClear: true, width: '100%' });
    const selectAll = document.getElementById('select-all-checkbox'), checkboxes = document.querySelectorAll('.batch-checkbox'), countSpan = document.getElementById('selectedCount');
    function updateCount() { const s = document.querySelectorAll('.batch-checkbox:checked').length; if(countSpan) countSpan.textContent = s; if(selectAll) selectAll.checked = checkboxes.length === s; }
    if(selectAll) selectAll.addEventListener('change', function() { checkboxes.forEach(cb => cb.checked = selectAll.checked); updateCount(); });
    document.getElementById('selectAllBtn')?.addEventListener('click', () => { checkboxes.forEach(cb => cb.checked = true); if(selectAll) selectAll.checked = true; updateCount(); });
    document.getElementById('deselectAllBtn')?.addEventListener('click', () => { checkboxes.forEach(cb => cb.checked = false); if(selectAll) selectAll.checked = false; updateCount(); });
    checkboxes.forEach(cb => cb.addEventListener('change', updateCount));
    updateCount();
    document.getElementById('print-selected')?.addEventListener('click', () => { const s = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value); if(s.length) window.open('/admin/stock-batch/print-multiple?ids=' + s.join(','), '_blank'); else alert('Sélectionnez au moins un lot.'); });
    document.getElementById('print-all')?.addEventListener('click', () => { const all = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value); if(all.length) window.open('/admin/stock-batch/print-multiple?ids=' + all.join(','), '_blank'); else alert('Aucun lot à imprimer.'); });
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => btn.addEventListener('click', function() {
        const id = this.dataset.batchId, isActive = this.dataset.isActive === '1', token = this.dataset.token, num = this.dataset.batchNumber;
        document.getElementById('toggleBatchMessage').innerText = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${num}\" ?`;
        document.getElementById('toggleBatchForm').action = `/admin/stock-batch/\${id}/toggle`;
        document.getElementById('toggleBatchToken').value = token;
        const btn2 = document.getElementById('toggleBatchBtn');
        btn2.className = isActive ? 'btn btn-danger' : 'btn btn-success';
        btn2.textContent = isActive ? 'Désactiver' : 'Activer';
        toggleModal.show();
    }));
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => btn.addEventListener('click', function() {
        document.getElementById('deleteBatchMessage').innerHTML = `<div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div><p>Supprimer le lot <strong>\${this.dataset.batchNumber}</strong> ?</p><p class=\"text-danger mb-0\"><small>Cette suppression n'est possible que si aucun mouvement de stock n'est associé.</small></p>`;
        document.getElementById('deleteBatchForm').action = '/admin/stock-batch/' + this.dataset.batchId + '/delete';
        document.getElementById('deleteBatchToken').value = this.dataset.token;
        deleteModal.show();
    }));
});
</script>
{% endblock %}", "admin/stock_batch/all.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\all.html.twig");
    }
}
