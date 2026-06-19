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

/* super_admin/analysis/index.html.twig */
class __TwigTemplate_c3ac1511dc6dbccc1cebf3a5ea273633 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis/index.html.twig"));

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

        yield "Analyses - Super Admin | HMA Market";
        
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
<style>
    /* Cartes statistiques */
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white !important;
        border: none;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-card .stat-value {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 0;
    }
    .stat-card .stat-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-card .stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
        opacity: 0.8;
    }
    .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
    }

    /* Couleurs des cartes */
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
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
    .card-bg-purple {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%) !important;
        color: white;
    }

    .card-bg-primary .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-info .stat-icon,
    .card-bg-purple .stat-icon {
        background: rgba(255,255,255,0.2);
    }

    /* Badges statut */
    .badge-status {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.7rem;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
    }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.paid { background: #dbeafe; color: #1e40af; }
    .badge-status.processing { background: #ede9fe; color: #5b21b6; }
    .badge-status.completed { background: #d1fae5; color: #065f46; }
    .badge-status.failed { background: #fee2e2; color: #991b1b; }
    .badge-status.expired { background: #f1f5f9; color: #475569; }

    /* Filtres */
    .filter-card {
        background: #f8fafc;
        border-radius: 1rem;
        transition: all 0.2s ease;
    }

    /* ✅ TABLEAU AVEC SCROLL HORIZONTAL */
    .table-container {
        overflow-x: auto;
        overflow-y: visible;
        scrollbar-width: thin;
        scrollbar-color: #c0c0c0 #f1f1f1;
    }
    
    .table-container::-webkit-scrollbar {
        height: 8px;
    }
    
    .table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .table-container::-webkit-scrollbar-thumb {
        background: #c0c0c0;
        border-radius: 10px;
    }
    
    .table-container::-webkit-scrollbar-thumb:hover {
        background: #a0a0a0;
    }
    
    .table-analysis {
        min-width: 1200px;
        width: 100%;
        white-space: nowrap;
    }
    
    .table-analysis td,
    .table-analysis th {
        white-space: nowrap;
        vertical-align: middle;
    }
    
    .table-analysis tr {
        transition: background 0.2s ease;
        cursor: pointer;
    }
    .table-analysis tr:hover {
        background: #f1f5f9;
    }
    .table-analysis td {
        vertical-align: middle;
        padding: 1rem 0.75rem;
    }

    .company-cell .company-name {
        font-weight: 600;
        margin-bottom: 0.25rem;
    }
    .company-cell .company-subscription {
        font-size: 0.7rem;
        color: #64748b;
    }

    .amount-cell {
        font-weight: 700;
        color: #0463f1;
    }

    /* Modal recherche */
    .modal-search-result {
        max-height: 400px;
        overflow-y: auto;
    }
    .company-result-item {
        transition: all 0.2s ease;
        border-left: 3px solid transparent;
    }
    .company-result-item:hover {
        background: #f1f5f9;
        border-left-color: #0463f1;
        transform: translateX(5px);
    }
    
    /* Badge filtre actif */
    .filter-badge {
        cursor: pointer;
        transition: all 0.2s;
        background: #e2e8f0;
        color: #1e293b;
        padding: 0.3rem 0.7rem;
        border-radius: 2rem;
        font-size: 0.7rem;
    }
    .filter-badge:hover {
        background: #cbd5e1;
        transform: scale(1.05);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 195
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

        // line 196
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-chart-line me-1\"></i> Analyses
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line text-primary me-2\"></i>
                Analyses approfondies
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-globe me-1\"></i>
                Gérez toutes les demandes d'analyse des entreprises
            </p>
        </div>
        <div>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#searchCompanyModal\">
                <i class=\"fas fa-plus me-1\"></i> Nouvelle analyse
            </button>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    ";
        // line 229
        if (((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 229, $this->source); })()), "search", [], "any", false, false, false, 229) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 229, $this->source); })()), "status", [], "any", false, false, false, 229)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 229, $this->source); })()), "type", [], "any", false, false, false, 229)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 229, $this->source); })()), "date_from", [], "any", false, false, false, 229)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 229, $this->source); })()), "date_to", [], "any", false, false, false, 229))) {
            // line 230
            yield "    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        ";
            // line 231
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 231, $this->source); })()), "search", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 232
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('search')\">
                <i class=\"fas fa-search me-1\"></i> ";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 233, $this->source); })()), "search", [], "any", false, false, false, 233), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 237
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 237, $this->source); })()), "status", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 238
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> Statut: ";
                // line 239
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 239, $this->source); })()), "status", [], "any", false, false, false, 239), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 243
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 243, $this->source); })()), "type", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 244
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('type')\">
                <i class=\"fas fa-tag me-1\"></i> Type: ";
                // line 245
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 245, $this->source); })()), "type", [], "any", false, false, false, 245), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 249
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 249, $this->source); })()), "date_from", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 250
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis: ";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 251, $this->source); })()), "date_from", [], "any", false, false, false, 251), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 255
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 255, $this->source); })()), "date_to", [], "any", false, false, false, 255)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 256
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au: ";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 257, $this->source); })()), "date_to", [], "any", false, false, false, 257), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 261
            yield "        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearAllFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    ";
        }
        // line 266
        yield "
    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total demandes</div>
                            <div class=\"stat-value\">";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 275, $this->source); })()), "total", [], "any", false, false, false, 275), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">demandes reçues</div>
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
                            <div class=\"stat-label\">Analyses livrées</div>
                            <div class=\"stat-value\">";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 291)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 291, $this->source); })()), "completed", [], "any", false, false, false, 291), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">
                                ";
        // line 293
        $context["percent"] = (((((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 293)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 293, $this->source); })()), "total", [], "any", false, false, false, 293), 0)) : (0)) > 0)) ? (Twig\Extension\CoreExtension::round(((((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 293)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 293, $this->source); })()), "completed", [], "any", false, false, false, 293), 0)) : (0)) / ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 293)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 293, $this->source); })()), "total", [], "any", false, false, false, 293), 1)) : (1))) * 100))) : (0));
        // line 294
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 294, $this->source); })()), "html", null, true);
        yield "% du total
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">En attente</div>
                            <div class=\"stat-value\">";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending", [], "any", true, true, false, 310)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 310, $this->source); })()), "pending", [], "any", false, false, false, 310), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">à traiter</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-clock fa-2x\"></i>
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
                            <div class=\"stat-label\">CA généré</div>
                            <div class=\"stat-value\">";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_amount", [], "any", true, true, false, 326)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 326, $this->source); })()), "total_amount", [], "any", false, false, false, 326), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">chiffre d'affaires</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-money-bill-wave fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"filter-card p-4 mb-4 shadow-sm\">
        <div class=\"row g-3 align-items-end\">
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-search me-1\"></i>Recherche
                </label>
                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Nom, N° abonnement...\" value=\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 345, $this->source); })()), "search", [], "any", false, false, false, 345), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-filter me-1\"></i>Statut
                </label>
                <select id=\"statusSelect\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"pending\" ";
        // line 353
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 353, $this->source); })()), "status", [], "any", false, false, false, 353) == "pending")) {
            yield "selected";
        }
        yield ">⏳ En attente</option>
                    <option value=\"paid\" ";
        // line 354
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 354, $this->source); })()), "status", [], "any", false, false, false, 354) == "paid")) {
            yield "selected";
        }
        yield ">💰 Payé</option>
                    <option value=\"processing\" ";
        // line 355
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 355, $this->source); })()), "status", [], "any", false, false, false, 355) == "processing")) {
            yield "selected";
        }
        yield ">⚙️ En traitement</option>
                    <option value=\"completed\" ";
        // line 356
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 356, $this->source); })()), "status", [], "any", false, false, false, 356) == "completed")) {
            yield "selected";
        }
        yield ">✅ Terminé</option>
                    <option value=\"failed\" ";
        // line 357
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 357, $this->source); })()), "status", [], "any", false, false, false, 357) == "failed")) {
            yield "selected";
        }
        yield ">❌ Échec</option>
                    <option value=\"expired\" ";
        // line 358
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 358, $this->source); })()), "status", [], "any", false, false, false, 358) == "expired")) {
            yield "selected";
        }
        yield ">⌛ Expiré</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-tag me-1\"></i>Type
                </label>
                <select id=\"typeSelect\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    ";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeList"]) || array_key_exists("typeList", $context) ? $context["typeList"] : (function () { throw new RuntimeError('Variable "typeList" does not exist.', 367, $this->source); })()));
        foreach ($context['_seq'] as $context["typeKey"] => $context["typeLabel"]) {
            // line 368
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 368, $this->source); })()), "type", [], "any", false, false, false, 368) == $context["typeKey"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeLabel"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['typeKey'], $context['typeLabel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        yield "                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date du
                </label>
                <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 376, $this->source); })()), "date_from", [], "any", false, false, false, 376), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date au
                </label>
                <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 382, $this->source); })()), "date_to", [], "any", false, false, false, 382), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-1\">
                <button type=\"button\" id=\"applyFiltersBtn\" class=\"btn btn-primary w-100\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Tableau des demandes AVEC SCROLL HORIZONTAL -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Demandes d'analyse
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 399, $this->source); })()), "html", null, true);
        yield " demande(s)</span>
        </div>
        <div class=\"table-container\">
            <div class=\"card-body p-0\">
                ";
        // line 403
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 403, $this->source); })()))) {
            // line 404
            yield "                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-chart-line fa-3x text-muted mb-3 opacity-50\"></i>
                        <p class=\"text-muted mb-0\">Aucune demande d'analyse trouvée</p>
                        <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez une nouvelle demande</p>
                        <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#searchCompanyModal\">
                            <i class=\"fas fa-plus me-1\"></i> Créer une demande
                        </button>
                    </div>
                ";
        } else {
            // line 413
            yield "                    <table class=\"table table-analysis mb-0\">
                        <thead class=\"table-light\">
                            <tr>
                                <th style=\"min-width: 130px\">N° Demande</th>
                                <th style=\"min-width: 220px\">Entreprise</th>
                                <th style=\"min-width: 120px\">Type</th>
                                <th style=\"min-width: 200px\">Période</th>
                                <th style=\"min-width: 120px\">Montant</th>
                                <th style=\"min-width: 130px\">Statut</th>
                                <th style=\"min-width: 130px\">Date</th>
                                <th style=\"min-width: 100px\" class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 427
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 427, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 428
                yield "                                <tr onclick=\"window.location='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 428)]), "html", null, true);
                yield "'\">
                                    <td>
                                        <span class=\"fw-bold\">";
                // line 430
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requestNumber", [], "any", false, false, false, 430), "html", null, true);
                yield "</span>
                                    </td>
                                    <td class=\"company-cell\">
                                        <div class=\"company-name\">";
                // line 433
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "company", [], "any", false, false, false, 433), "companyName", [], "any", false, false, false, 433), "html", null, true);
                yield "</div>
                                        <div class=\"company-subscription\">
                                            <i class=\"fas fa-id-card me-1\"></i>";
                // line 435
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "company", [], "any", false, false, false, 435), "subscriptionNumber", [], "any", false, false, false, 435), "html", null, true);
                yield "
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"badge bg-secondary bg-opacity-10 text-white px-3 py-2\">
                                            ";
                // line 440
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "typeLabel", [], "any", false, false, false, 440), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td>
                                        <i class=\"far fa-calendar-alt text-muted me-1\"></i>
                                        ";
                // line 445
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "periodStart", [], "any", false, false, false, 445), "d/m/Y"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "periodEnd", [], "any", false, false, false, 445), "d/m/Y"), "html", null, true);
                yield "
                                    </div>
                                    <td class=\"amount-cell\">
                                        ";
                // line 448
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "amountFormatted", [], "any", false, false, false, 448), "html", null, true);
                yield "
                                    </div>
                                    <td>
                                        <span class=\"badge-status ";
                // line 451
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 451), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 452
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 452) == "pending")) ? ("fa-clock") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 452) == "processing")) ? ("fa-spinner fa-spin") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 452) == "completed")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 452) == "paid")) ? ("fa-credit-card") : ("fa-times-circle"))))))));
                yield " me-1\"></i>
                                            ";
                // line 453
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "statusLabel", [], "any", false, false, false, 453), "html", null, true);
                yield "
                                        </span>
                                    </div>
                                    <td>
                                        <i class=\"far fa-calendar text-muted me-1\"></i>
                                        ";
                // line 458
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "createdAt", [], "any", false, false, false, 458), "d/m/Y"), "html", null, true);
                yield "
                                        <br>
                                        <small class=\"text-muted\">";
                // line 460
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "createdAt", [], "any", false, false, false, 460), "H:i"), "html", null, true);
                yield "</small>
                                    </div>
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
                // line 464
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 464)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir le détail\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            ";
                // line 467
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 467) == "completed")) {
                    // line 468
                    yield "                                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["request"], "finalReportPath", [], "any", false, false, false, 468)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 469
                        yield "                                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 469)]), "html", null, true);
                        yield "\" class=\"btn btn-sm btn-outline-success\" title=\"Télécharger le rapport final\">
                                                        <i class=\"fas fa-file-alt\"></i>
                                                    </a>
                                                ";
                    } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 472
$context["request"], "rawExportPath", [], "any", false, false, false, 472)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 473
                        yield "                                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 473)]), "html", null, true);
                        yield "\" class=\"btn btn-sm btn-outline-success\" title=\"Télécharger les données brutes\">
                                                        <i class=\"fas fa-database\"></i>
                                                    </a>
                                                ";
                    }
                    // line 477
                    yield "                                            ";
                }
                // line 478
                yield "                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['request'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 482
            yield "                        </tbody>
                    </table>
                ";
        }
        // line 485
        yield "            </div>
        </div>

        <!-- Pagination -->
        ";
        // line 489
        if ((array_key_exists("totalPages", $context) && ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 489, $this->source); })()) > 1))) {
            // line 490
            yield "        <div class=\"card-footer bg-white border-0 py-3\">
            <nav>
                <ul class=\"pagination justify-content-center mb-0\">
                    <li class=\"page-item ";
            // line 493
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 493, $this->source); })()) == 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 494
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 494, $this->source); })()) > 1)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 494, $this->source); })()), "request", [], "any", false, false, false, 494), "query", [], "any", false, false, false, 494), "all", [], "any", false, false, false, 494), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 494, $this->source); })()) - 1)])), "html", null, true)) : ("#"));
            yield "\">
                            <i class=\"fas fa-chevron-left\"></i> Précédent
                        </a>
                    </li>
                    ";
            // line 498
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 498, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 499
                yield "                        ";
                if (((($context["page"] == 1) || ($context["page"] == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 499, $this->source); })()))) || (($context["page"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 499, $this->source); })()) - 2)) && ($context["page"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 499, $this->source); })()) + 2))))) {
                    // line 500
                    yield "                            <li class=\"page-item ";
                    yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 500, $this->source); })()))) ? ("active") : (""));
                    yield "\">
                                <a class=\"page-link\" href=\"";
                    // line 501
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 501, $this->source); })()), "request", [], "any", false, false, false, 501), "query", [], "any", false, false, false, 501), "all", [], "any", false, false, false, 501), ["page" => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                            </li>
                        ";
                } elseif (((                // line 503
$context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 503, $this->source); })()) - 3)) || ($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 503, $this->source); })()) + 3)))) {
                    // line 504
                    yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                        ";
                }
                // line 506
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 507
            yield "                    <li class=\"page-item ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 507, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 507, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 508
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 508, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 508, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 508, $this->source); })()), "request", [], "any", false, false, false, 508), "query", [], "any", false, false, false, 508), "all", [], "any", false, false, false, 508), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 508, $this->source); })()) + 1)])), "html", null, true)) : ("#"));
            yield "\">
                            Suivant <i class=\"fas fa-chevron-right\"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        ";
        }
        // line 516
        yield "    </div>
</div>

<!-- Modal recherche entreprise -->
<div class=\"modal fade\" id=\"searchCompanyModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content rounded-4\">
            <div class=\"modal-header bg-primary text-white border-0 rounded-top-4\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-building me-2\"></i>Nouvelle demande d'analyse
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <div class=\"mb-4\">
                    <label class=\"form-label fw-semibold\">Rechercher une entreprise</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-light border-end-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" id=\"companySearchInput\" class=\"form-control border-start-0\" 
                               placeholder=\"Nom, numéro d'abonnement ou email...\">
                    </div>
                    <small class=\"text-muted mt-1 d-block\">
                        <i class=\"fas fa-info-circle me-1\"></i>Saisissez au moins 2 caractères
                    </small>
                </div>
                <div id=\"searchResults\" class=\"modal-search-result\"></div>
            </div>
            <div class=\"modal-footer border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i>Fermer
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 555
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

        // line 556
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filtres
    const searchInput = document.getElementById('searchInput');
    const statusSelect = document.getElementById('statusSelect');
    const typeSelect = document.getElementById('typeSelect');
    const dateFrom = document.getElementById('dateFrom');
    const dateTo = document.getElementById('dateTo');
    const applyBtn = document.getElementById('applyFiltersBtn');
    
    function applyFilters() {
        const params = new URLSearchParams();
        if (searchInput.value) params.set('search', searchInput.value);
        if (statusSelect.value) params.set('status', statusSelect.value);
        if (typeSelect.value) params.set('type', typeSelect.value);
        if (dateFrom.value) params.set('date_from', dateFrom.value);
        if (dateTo.value) params.set('date_to', dateTo.value);
        
        window.location.href = '";
        // line 575
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index");
        yield "?' + params.toString();
    }
    
    if (applyBtn) applyBtn.addEventListener('click', applyFilters);
    
    // Recherche entreprise
    const companySearchInput = document.getElementById('companySearchInput');
    const searchResults = document.getElementById('searchResults');
    
    let searchTimeout;
    if (companySearchInput) {
        companySearchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            const query = this.value.trim();
            
            if (query.length < 2) {
                searchResults.innerHTML = `
                    <div class=\"alert alert-info border-0 bg-light\">
                        <i class=\"fas fa-info-circle me-2\"></i>Saisissez au moins 2 caractères
                    </div>
                `;
                return;
            }
            
            searchResults.innerHTML = `
                <div class=\"text-center py-4\">
                    <div class=\"spinner-border text-primary\" role=\"status\"></div>
                    <p class=\"mt-2 text-muted\">Recherche en cours...</p>
                </div>
            `;
            
            searchTimeout = setTimeout(() => {
                fetch(`/super-admin/analysis/company/search?q=\${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.length === 0) {
                            searchResults.innerHTML = `
                                <div class=\"alert alert-warning border-0\">
                                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Aucune entreprise trouvée
                                </div>
                            `;
                            return;
                        }
                        
                        let html = '<div class=\"list-group\">';
                        data.forEach(company => {
                            const typeLabel = company.type === 'restaurant' ? '🍽️ Restaurant' : '🛒 Commerce';
                            html += `
                                <a href=\"/super-admin/analysis/new/\${company.id}\" class=\"list-group-item list-group-item-action company-result-item border-0 rounded-3 mb-2 shadow-sm\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <div class=\"fw-semibold\">\${escapeHtml(company.name)}</div>
                                            <div class=\"small text-muted\">
                                                <i class=\"fas fa-id-card me-1\"></i>\${escapeHtml(company.subscription_number)}
                                                <span class=\"mx-2\">•</span>
                                                <i class=\"fas fa-envelope me-1\"></i>\${escapeHtml(company.email)}
                                            </div>
                                        </div>
                                        <div>
                                            <span class=\"badge bg-secondary\">\${typeLabel}</span>
                                            <i class=\"fas fa-chevron-right ms-2 text-muted\"></i>
                                        </div>
                                    </div>
                                </a>
                            `;
                        });
                        html += '</div>';
                        searchResults.innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        searchResults.innerHTML = `
                            <div class=\"alert alert-danger border-0\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>Erreur lors de la recherche
                            </div>
                        `;
                    });
            }, 300);
        });
    }
    
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
});

// ========== FONCTIONS GLOBALES ==========
function removeFilter(filter) {
    let url = new URL(window.location.href);
    url.searchParams.delete(filter);
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
}

function clearAllFilters() {
    window.location.href = '";
        // line 672
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index");
        yield "';
}
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
        return "super_admin/analysis/index.html.twig";
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
        return array (  1050 => 672,  950 => 575,  928 => 556,  915 => 555,  867 => 516,  856 => 508,  851 => 507,  845 => 506,  841 => 504,  839 => 503,  832 => 501,  827 => 500,  824 => 499,  820 => 498,  813 => 494,  809 => 493,  804 => 490,  802 => 489,  796 => 485,  791 => 482,  782 => 478,  779 => 477,  771 => 473,  769 => 472,  762 => 469,  759 => 468,  757 => 467,  751 => 464,  744 => 460,  739 => 458,  731 => 453,  727 => 452,  723 => 451,  717 => 448,  709 => 445,  701 => 440,  693 => 435,  688 => 433,  682 => 430,  676 => 428,  672 => 427,  656 => 413,  645 => 404,  643 => 403,  636 => 399,  616 => 382,  607 => 376,  599 => 370,  584 => 368,  580 => 367,  566 => 358,  560 => 357,  554 => 356,  548 => 355,  542 => 354,  536 => 353,  525 => 345,  503 => 326,  484 => 310,  464 => 294,  462 => 293,  457 => 291,  438 => 275,  427 => 266,  420 => 261,  413 => 257,  410 => 256,  407 => 255,  400 => 251,  397 => 250,  394 => 249,  387 => 245,  384 => 244,  381 => 243,  374 => 239,  371 => 238,  368 => 237,  361 => 233,  358 => 232,  356 => 231,  353 => 230,  351 => 229,  322 => 203,  313 => 196,  300 => 195,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Analyses - Super Admin | HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* Cartes statistiques */
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white !important;
        border: none;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-card .stat-value {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 0;
    }
    .stat-card .stat-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-card .stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
        opacity: 0.8;
    }
    .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
    }

    /* Couleurs des cartes */
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
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
    .card-bg-purple {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%) !important;
        color: white;
    }

    .card-bg-primary .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-info .stat-icon,
    .card-bg-purple .stat-icon {
        background: rgba(255,255,255,0.2);
    }

    /* Badges statut */
    .badge-status {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.7rem;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
    }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.paid { background: #dbeafe; color: #1e40af; }
    .badge-status.processing { background: #ede9fe; color: #5b21b6; }
    .badge-status.completed { background: #d1fae5; color: #065f46; }
    .badge-status.failed { background: #fee2e2; color: #991b1b; }
    .badge-status.expired { background: #f1f5f9; color: #475569; }

    /* Filtres */
    .filter-card {
        background: #f8fafc;
        border-radius: 1rem;
        transition: all 0.2s ease;
    }

    /* ✅ TABLEAU AVEC SCROLL HORIZONTAL */
    .table-container {
        overflow-x: auto;
        overflow-y: visible;
        scrollbar-width: thin;
        scrollbar-color: #c0c0c0 #f1f1f1;
    }
    
    .table-container::-webkit-scrollbar {
        height: 8px;
    }
    
    .table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .table-container::-webkit-scrollbar-thumb {
        background: #c0c0c0;
        border-radius: 10px;
    }
    
    .table-container::-webkit-scrollbar-thumb:hover {
        background: #a0a0a0;
    }
    
    .table-analysis {
        min-width: 1200px;
        width: 100%;
        white-space: nowrap;
    }
    
    .table-analysis td,
    .table-analysis th {
        white-space: nowrap;
        vertical-align: middle;
    }
    
    .table-analysis tr {
        transition: background 0.2s ease;
        cursor: pointer;
    }
    .table-analysis tr:hover {
        background: #f1f5f9;
    }
    .table-analysis td {
        vertical-align: middle;
        padding: 1rem 0.75rem;
    }

    .company-cell .company-name {
        font-weight: 600;
        margin-bottom: 0.25rem;
    }
    .company-cell .company-subscription {
        font-size: 0.7rem;
        color: #64748b;
    }

    .amount-cell {
        font-weight: 700;
        color: #0463f1;
    }

    /* Modal recherche */
    .modal-search-result {
        max-height: 400px;
        overflow-y: auto;
    }
    .company-result-item {
        transition: all 0.2s ease;
        border-left: 3px solid transparent;
    }
    .company-result-item:hover {
        background: #f1f5f9;
        border-left-color: #0463f1;
        transform: translateX(5px);
    }
    
    /* Badge filtre actif */
    .filter-badge {
        cursor: pointer;
        transition: all 0.2s;
        background: #e2e8f0;
        color: #1e293b;
        padding: 0.3rem 0.7rem;
        border-radius: 2rem;
        font-size: 0.7rem;
    }
    .filter-badge:hover {
        background: #cbd5e1;
        transform: scale(1.05);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-chart-line me-1\"></i> Analyses
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line text-primary me-2\"></i>
                Analyses approfondies
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-globe me-1\"></i>
                Gérez toutes les demandes d'analyse des entreprises
            </p>
        </div>
        <div>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#searchCompanyModal\">
                <i class=\"fas fa-plus me-1\"></i> Nouvelle analyse
            </button>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    {% if filters.search or filters.status or filters.type or filters.date_from or filters.date_to %}
    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        {% if filters.search %}
            <span class=\"filter-badge\" onclick=\"removeFilter('search')\">
                <i class=\"fas fa-search me-1\"></i> {{ filters.search }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.status %}
            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> Statut: {{ filters.status }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.type %}
            <span class=\"filter-badge\" onclick=\"removeFilter('type')\">
                <i class=\"fas fa-tag me-1\"></i> Type: {{ filters.type }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.date_from %}
            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis: {{ filters.date_from }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.date_to %}
            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au: {{ filters.date_to }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearAllFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    {% endif %}

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total demandes</div>
                            <div class=\"stat-value\">{{ stats.total|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">demandes reçues</div>
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
                            <div class=\"stat-label\">Analyses livrées</div>
                            <div class=\"stat-value\">{{ stats.completed|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">
                                {% set percent = (stats.total|default(0) > 0) ? ((stats.completed|default(0) / stats.total|default(1)) * 100)|round : 0 %}
                                {{ percent }}% du total
                            </div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">En attente</div>
                            <div class=\"stat-value\">{{ stats.pending|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">à traiter</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-clock fa-2x\"></i>
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
                            <div class=\"stat-label\">CA généré</div>
                            <div class=\"stat-value\">{{ stats.total_amount|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">chiffre d'affaires</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-money-bill-wave fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"filter-card p-4 mb-4 shadow-sm\">
        <div class=\"row g-3 align-items-end\">
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-search me-1\"></i>Recherche
                </label>
                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Nom, N° abonnement...\" value=\"{{ filters.search }}\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-filter me-1\"></i>Statut
                </label>
                <select id=\"statusSelect\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"pending\" {% if filters.status == 'pending' %}selected{% endif %}>⏳ En attente</option>
                    <option value=\"paid\" {% if filters.status == 'paid' %}selected{% endif %}>💰 Payé</option>
                    <option value=\"processing\" {% if filters.status == 'processing' %}selected{% endif %}>⚙️ En traitement</option>
                    <option value=\"completed\" {% if filters.status == 'completed' %}selected{% endif %}>✅ Terminé</option>
                    <option value=\"failed\" {% if filters.status == 'failed' %}selected{% endif %}>❌ Échec</option>
                    <option value=\"expired\" {% if filters.status == 'expired' %}selected{% endif %}>⌛ Expiré</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-tag me-1\"></i>Type
                </label>
                <select id=\"typeSelect\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    {% for typeKey, typeLabel in typeList %}
                        <option value=\"{{ typeKey }}\" {% if filters.type == typeKey %}selected{% endif %}>{{ typeLabel }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date du
                </label>
                <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"{{ filters.date_from }}\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date au
                </label>
                <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"{{ filters.date_to }}\">
            </div>
            <div class=\"col-md-1\">
                <button type=\"button\" id=\"applyFiltersBtn\" class=\"btn btn-primary w-100\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Tableau des demandes AVEC SCROLL HORIZONTAL -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Demandes d'analyse
            </h5>
            <span class=\"badge bg-secondary\">{{ total }} demande(s)</span>
        </div>
        <div class=\"table-container\">
            <div class=\"card-body p-0\">
                {% if requests is empty %}
                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-chart-line fa-3x text-muted mb-3 opacity-50\"></i>
                        <p class=\"text-muted mb-0\">Aucune demande d'analyse trouvée</p>
                        <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez une nouvelle demande</p>
                        <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#searchCompanyModal\">
                            <i class=\"fas fa-plus me-1\"></i> Créer une demande
                        </button>
                    </div>
                {% else %}
                    <table class=\"table table-analysis mb-0\">
                        <thead class=\"table-light\">
                            <tr>
                                <th style=\"min-width: 130px\">N° Demande</th>
                                <th style=\"min-width: 220px\">Entreprise</th>
                                <th style=\"min-width: 120px\">Type</th>
                                <th style=\"min-width: 200px\">Période</th>
                                <th style=\"min-width: 120px\">Montant</th>
                                <th style=\"min-width: 130px\">Statut</th>
                                <th style=\"min-width: 130px\">Date</th>
                                <th style=\"min-width: 100px\" class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for request in requests %}
                                <tr onclick=\"window.location='{{ path('super_admin_analysis_show', {'id': request.id}) }}'\">
                                    <td>
                                        <span class=\"fw-bold\">{{ request.requestNumber }}</span>
                                    </td>
                                    <td class=\"company-cell\">
                                        <div class=\"company-name\">{{ request.company.companyName }}</div>
                                        <div class=\"company-subscription\">
                                            <i class=\"fas fa-id-card me-1\"></i>{{ request.company.subscriptionNumber }}
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"badge bg-secondary bg-opacity-10 text-white px-3 py-2\">
                                            {{ request.typeLabel }}
                                        </span>
                                    </td>
                                    <td>
                                        <i class=\"far fa-calendar-alt text-muted me-1\"></i>
                                        {{ request.periodStart|date('d/m/Y') }} - {{ request.periodEnd|date('d/m/Y') }}
                                    </div>
                                    <td class=\"amount-cell\">
                                        {{ request.amountFormatted }}
                                    </div>
                                    <td>
                                        <span class=\"badge-status {{ request.status }}\">
                                            <i class=\"fas {{ request.status == 'pending' ? 'fa-clock' : (request.status == 'processing' ? 'fa-spinner fa-spin' : (request.status == 'completed' ? 'fa-check-circle' : (request.status == 'paid' ? 'fa-credit-card' : 'fa-times-circle'))) }} me-1\"></i>
                                            {{ request.statusLabel }}
                                        </span>
                                    </div>
                                    <td>
                                        <i class=\"far fa-calendar text-muted me-1\"></i>
                                        {{ request.createdAt|date('d/m/Y') }}
                                        <br>
                                        <small class=\"text-muted\">{{ request.createdAt|date('H:i') }}</small>
                                    </div>
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('super_admin_analysis_show', {'id': request.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir le détail\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            {% if request.status == 'completed' %}
                                                {% if request.finalReportPath %}
                                                    <a href=\"{{ path('super_admin_analysis_download_final', {'id': request.id}) }}\" class=\"btn btn-sm btn-outline-success\" title=\"Télécharger le rapport final\">
                                                        <i class=\"fas fa-file-alt\"></i>
                                                    </a>
                                                {% elseif request.rawExportPath %}
                                                    <a href=\"{{ path('super_admin_analysis_download_raw', {'id': request.id}) }}\" class=\"btn btn-sm btn-outline-success\" title=\"Télécharger les données brutes\">
                                                        <i class=\"fas fa-database\"></i>
                                                    </a>
                                                {% endif %}
                                            {% endif %}
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>

        <!-- Pagination -->
        {% if totalPages is defined and totalPages > 1 %}
        <div class=\"card-footer bg-white border-0 py-3\">
            <nav>
                <ul class=\"pagination justify-content-center mb-0\">
                    <li class=\"page-item {{ currentPage == 1 ? 'disabled' : '' }}\">
                        <a class=\"page-link\" href=\"{{ currentPage > 1 ? path('super_admin_analysis_index', app.request.query.all|merge({'page': currentPage - 1})) : '#' }}\">
                            <i class=\"fas fa-chevron-left\"></i> Précédent
                        </a>
                    </li>
                    {% for page in 1..totalPages %}
                        {% if page == 1 or page == totalPages or (page >= currentPage - 2 and page <= currentPage + 2) %}
                            <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('super_admin_analysis_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                            </li>
                        {% elseif page == currentPage - 3 or page == currentPage + 3 %}
                            <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                        {% endif %}
                    {% endfor %}
                    <li class=\"page-item {{ currentPage == totalPages ? 'disabled' : '' }}\">
                        <a class=\"page-link\" href=\"{{ currentPage < totalPages ? path('super_admin_analysis_index', app.request.query.all|merge({'page': currentPage + 1})) : '#' }}\">
                            Suivant <i class=\"fas fa-chevron-right\"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        {% endif %}
    </div>
</div>

<!-- Modal recherche entreprise -->
<div class=\"modal fade\" id=\"searchCompanyModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content rounded-4\">
            <div class=\"modal-header bg-primary text-white border-0 rounded-top-4\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-building me-2\"></i>Nouvelle demande d'analyse
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <div class=\"mb-4\">
                    <label class=\"form-label fw-semibold\">Rechercher une entreprise</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-light border-end-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" id=\"companySearchInput\" class=\"form-control border-start-0\" 
                               placeholder=\"Nom, numéro d'abonnement ou email...\">
                    </div>
                    <small class=\"text-muted mt-1 d-block\">
                        <i class=\"fas fa-info-circle me-1\"></i>Saisissez au moins 2 caractères
                    </small>
                </div>
                <div id=\"searchResults\" class=\"modal-search-result\"></div>
            </div>
            <div class=\"modal-footer border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i>Fermer
                </button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filtres
    const searchInput = document.getElementById('searchInput');
    const statusSelect = document.getElementById('statusSelect');
    const typeSelect = document.getElementById('typeSelect');
    const dateFrom = document.getElementById('dateFrom');
    const dateTo = document.getElementById('dateTo');
    const applyBtn = document.getElementById('applyFiltersBtn');
    
    function applyFilters() {
        const params = new URLSearchParams();
        if (searchInput.value) params.set('search', searchInput.value);
        if (statusSelect.value) params.set('status', statusSelect.value);
        if (typeSelect.value) params.set('type', typeSelect.value);
        if (dateFrom.value) params.set('date_from', dateFrom.value);
        if (dateTo.value) params.set('date_to', dateTo.value);
        
        window.location.href = '{{ path('super_admin_analysis_index') }}?' + params.toString();
    }
    
    if (applyBtn) applyBtn.addEventListener('click', applyFilters);
    
    // Recherche entreprise
    const companySearchInput = document.getElementById('companySearchInput');
    const searchResults = document.getElementById('searchResults');
    
    let searchTimeout;
    if (companySearchInput) {
        companySearchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            const query = this.value.trim();
            
            if (query.length < 2) {
                searchResults.innerHTML = `
                    <div class=\"alert alert-info border-0 bg-light\">
                        <i class=\"fas fa-info-circle me-2\"></i>Saisissez au moins 2 caractères
                    </div>
                `;
                return;
            }
            
            searchResults.innerHTML = `
                <div class=\"text-center py-4\">
                    <div class=\"spinner-border text-primary\" role=\"status\"></div>
                    <p class=\"mt-2 text-muted\">Recherche en cours...</p>
                </div>
            `;
            
            searchTimeout = setTimeout(() => {
                fetch(`/super-admin/analysis/company/search?q=\${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.length === 0) {
                            searchResults.innerHTML = `
                                <div class=\"alert alert-warning border-0\">
                                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Aucune entreprise trouvée
                                </div>
                            `;
                            return;
                        }
                        
                        let html = '<div class=\"list-group\">';
                        data.forEach(company => {
                            const typeLabel = company.type === 'restaurant' ? '🍽️ Restaurant' : '🛒 Commerce';
                            html += `
                                <a href=\"/super-admin/analysis/new/\${company.id}\" class=\"list-group-item list-group-item-action company-result-item border-0 rounded-3 mb-2 shadow-sm\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <div class=\"fw-semibold\">\${escapeHtml(company.name)}</div>
                                            <div class=\"small text-muted\">
                                                <i class=\"fas fa-id-card me-1\"></i>\${escapeHtml(company.subscription_number)}
                                                <span class=\"mx-2\">•</span>
                                                <i class=\"fas fa-envelope me-1\"></i>\${escapeHtml(company.email)}
                                            </div>
                                        </div>
                                        <div>
                                            <span class=\"badge bg-secondary\">\${typeLabel}</span>
                                            <i class=\"fas fa-chevron-right ms-2 text-muted\"></i>
                                        </div>
                                    </div>
                                </a>
                            `;
                        });
                        html += '</div>';
                        searchResults.innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        searchResults.innerHTML = `
                            <div class=\"alert alert-danger border-0\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>Erreur lors de la recherche
                            </div>
                        `;
                    });
            }, 300);
        });
    }
    
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
});

// ========== FONCTIONS GLOBALES ==========
function removeFilter(filter) {
    let url = new URL(window.location.href);
    url.searchParams.delete(filter);
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
}

function clearAllFilters() {
    window.location.href = '{{ path('super_admin_analysis_index') }}';
}
</script>
{% endblock %}", "super_admin/analysis/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis\\index.html.twig");
    }
}
