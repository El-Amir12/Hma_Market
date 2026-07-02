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

/* company/analysis/index.html.twig */
class __TwigTemplate_288bdd840f448d473b9310764a56e2ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/analysis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/analysis/index.html.twig"));

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

        yield "Mes analyses approfondies - HMA Market";
        
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

    /* Cartes d'analyse */
    .analysis-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        background: white;
        border: 1px solid rgba(0,0,0,0.05);
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }
    .analysis-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        border-color: transparent;
    }
    .analysis-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
    }
    .analysis-card.status-pending::before { background: linear-gradient(90deg, #f59e0b, #fcd34d); }
    .analysis-card.status-paid::before { background: linear-gradient(90deg, #3b82f6, #60a5fa); }
    .analysis-card.status-processing::before { background: linear-gradient(90deg, #8b5cf6, #a78bfa); }
    .analysis-card.status-completed::before { background: linear-gradient(90deg, #10b981, #34d399); }
    .analysis-card.status-failed::before { background: linear-gradient(90deg, #ef4444, #f87171); }

    /* Badges */
    .badge-custom {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.7rem;
    }
    .badge.bg-pending { background: #fef3c7; color: #b45309; }
    .badge.bg-paid { background: #dbeafe; color: #1e40af; }
    .badge.bg-processing { background: #ede9fe; color: #5b21b6; }
    .badge.bg-completed { background: #d1fae5; color: #065f46; }
    .badge.bg-failed { background: #fee2e2; color: #991b1b; }

    /* Bannière d'information */
    .info-banner {
        background: linear-gradient(135deg, #0463f1, #0350c4);
        border-radius: 1rem;
        position: relative;
        overflow: hidden;
    }
    .info-banner::before {
        content: '📊';
        position: absolute;
        font-size: 10rem;
        right: -2rem;
        bottom: -3rem;
        opacity: 0.1;
    }
    .btn-light-custom {
        background: rgba(255,255,255,0.2);
        border: 1px solid rgba(255,255,255,0.3);
        color: white;
        transition: all 0.3s ease;
    }
    .btn-light-custom:hover {
        background: white;
        color: #0463f1;
        transform: translateY(-2px);
    }

    /* Filtres */
    .filter-card {
        background: #f8fafc;
        border-radius: 1rem;
        transition: all 0.2s ease;
    }
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

    /* État vide */
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
    }
    .empty-state-icon {
        font-size: 4rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    /* Info row */
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px dashed #e2e8f0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.75rem;
        color: #64748b;
    }
    .info-value {
        font-weight: 600;
        font-size: 0.85rem;
    }
    
    /* Statut processing badge */
    .status-processing-badge {
        background: #ede9fe;
        color: #5b21b6;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 203
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

        // line 204
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec filtres -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-chart-line me-1\"></i> Analyses
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line text-primary me-2\"></i>
                Mes analyses approfondies
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Commandez et suivez vos analyses de données
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#filterModal\">
                <i class=\"fas fa-filter me-1\"></i> Filtres
            </button>
            <a href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvelle analyse
            </a>
        </div>
    </div>

    <!-- Bannière d'information générale -->
    <div class=\"info-banner text-white mb-4 p-4\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-8\">
                <div class=\"d-flex align-items-center gap-3\">
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                        <i class=\"fas fa-chart-line fa-2x\"></i>
                    </div>
                    <div>
                        <h4 class=\"mb-1 fw-bold\">Analysez vos performances</h4>
                        <p class=\"mb-0 opacity-75\">
                            Obtenez une analyse détaillée de vos ventes, stocks et performances sur la période de votre choix.
                            Nos experts vous fournissent un rapport personnalisé avec des recommandations actionnables.
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-md-end mt-3 mt-md-0\">
                <div class=\"mt-2\">
                    <a href=\"";
        // line 258
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_new");
        yield "\" class=\"btn btn-light-custom\">
                        <i class=\"fas fa-rocket me-2\"></i> Commander une analyse
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    ";
        // line 267
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 267, $this->source); })()), "type", [], "any", false, false, false, 267) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 267, $this->source); })()), "status", [], "any", false, false, false, 267)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 267, $this->source); })()), "date_from", [], "any", false, false, false, 267)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 267, $this->source); })()), "date_to", [], "any", false, false, false, 267))) {
            // line 268
            yield "    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        ";
            // line 269
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 269, $this->source); })()), "type", [], "any", false, false, false, 269)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 270
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('type')\">
                <i class=\"fas fa-tag me-1\"></i> ";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 271, $this->source); })()), "type", [], "any", false, false, false, 271)), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 275
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 275, $this->source); })()), "status", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 276
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> ";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 277, $this->source); })()), "status", [], "any", false, false, false, 277)), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 281
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 281, $this->source); })()), "date_from", [], "any", false, false, false, 281)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 282
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis le ";
                // line 283
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 283, $this->source); })()), "date_from", [], "any", false, false, false, 283), "d/m/Y"), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 287
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 287, $this->source); })()), "date_to", [], "any", false, false, false, 287)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 288
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au ";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 289, $this->source); })()), "date_to", [], "any", false, false, false, 289), "d/m/Y"), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 293
            yield "        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearAllFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    ";
        }
        // line 298
        yield "
    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total analyses</div>
                            <div class=\"stat-value\">";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 307)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 307, $this->source); })()), "total", [], "any", false, false, false, 307), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">demandes effectuées</div>
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
                            <div class=\"stat-label\">Analyses terminées</div>
                            <div class=\"stat-value\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 323)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 323, $this->source); })()), "completed", [], "any", false, false, false, 323), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">
                                ";
        // line 325
        $context["percent"] = (((((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 325, $this->source); })()), "total", [], "any", false, false, false, 325), 0)) : (0)) > 0)) ? (Twig\Extension\CoreExtension::round(((((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 325, $this->source); })()), "completed", [], "any", false, false, false, 325), 0)) : (0)) / ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 325, $this->source); })()), "total", [], "any", false, false, false, 325), 1)) : (1))) * 100))) : (0));
        // line 326
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 326, $this->source); })()), "html", null, true);
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
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending", [], "any", true, true, false, 342)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 342, $this->source); })()), "pending", [], "any", false, false, false, 342), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">en cours de traitement</div>
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
                            <div class=\"stat-label\">Montant total</div>
                            <div class=\"stat-value\">";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_amount", [], "any", true, true, false, 358)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 358, $this->source); })()), "total_amount", [], "any", false, false, false, 358), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">investi en analyses</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-money-bill-wave fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des analyses -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-history me-2 text-primary\"></i>
                Historique des analyses
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 377, $this->source); })())), "html", null, true);
        yield " analyse(s)</span>
        </div>
        <div class=\"card-body p-0\">
            ";
        // line 380
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 380, $this->source); })()))) {
            // line 381
            yield "                <div class=\"empty-state\">
                    <div class=\"empty-state-icon\">
                        <i class=\"fas fa-chart-line\"></i>
                    </div>
                    <h5 class=\"fw-semibold\">Aucune analyse trouvée</h5>
                    <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez une nouvelle analyse</p>
                    <a href=\"";
            // line 387
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_new");
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Nouvelle analyse
                    </a>
                </div>
            ";
        } else {
            // line 392
            yield "                <div class=\"row g-3 p-3\">
                    ";
            // line 393
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 393, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["analysis"]) {
                // line 394
                yield "                        <div class=\"col-xl-4 col-md-6\">
                            <div class=\"analysis-card h-100 status-";
                // line 395
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 395), "html", null, true);
                yield "\" onclick=\"window.location='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "id", [], "any", false, false, false, 395)]), "html", null, true);
                yield "'\">
                                <div class=\"p-4\">
                                    <!-- En-tête -->
                                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                        <div>
                                            <h6 class=\"mb-1 fw-bold\">";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "requestNumber", [], "any", false, false, false, 400), "html", null, true);
                yield "</h6>
                                            <small class=\"text-muted\">
                                                <i class=\"far fa-calendar-alt me-1\"></i>
                                                ";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "createdAt", [], "any", false, false, false, 403), "d/m/Y H:i"), "html", null, true);
                yield "
                                            </small>
                                        </div>
                                        <span class=\"badge-custom badge bg-";
                // line 406
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 406) == "pending")) ? ("pending") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 406) == "paid")) ? ("paid") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 406) == "processing")) ? ("processing") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 406) == "completed")) ? ("completed") : ("failed"))))))));
                yield "\">
                                            <i class=\"fas ";
                // line 407
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 407) == "pending")) ? ("fa-clock") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 407) == "processing")) ? ("fa-spinner fa-pulse") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 407) == "completed")) ? ("fa-check-circle") : ("fa-times-circle"))))));
                yield " me-1\"></i>
                                            ";
                // line 408
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "statusLabel", [], "any", false, false, false, 408), "html", null, true);
                yield "
                                        </span>
                                    </div>

                                    <!-- Détails -->
                                    <div class=\"mt-3\">
                                        <div class=\"info-row\">
                                            <span class=\"info-label\">
                                                <i class=\"fas fa-tag me-1\"></i>Type d'analyse
                                            </span>
                                            <span class=\"info-value\">";
                // line 418
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "typeLabel", [], "any", false, false, false, 418), "html", null, true);
                yield "</span>
                                        </div>
                                        <div class=\"info-row\">
                                            <span class=\"info-label\">
                                                <i class=\"fas fa-calendar-week me-1\"></i>Période
                                            </span>
                                            <span class=\"info-value\">";
                // line 424
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "periodStart", [], "any", false, false, false, 424), "d/m/Y"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "periodEnd", [], "any", false, false, false, 424), "d/m/Y"), "html", null, true);
                yield "</span>
                                        </div>
                                        <div class=\"info-row\">
                                            <span class=\"info-label\">
                                                <i class=\"fas fa-coins me-1\"></i>Montant
                                            </span>
                                            <span class=\"info-value fw-bold text-primary fs-5\">";
                // line 430
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "amountFormatted", [], "any", false, false, false, 430), "html", null, true);
                yield "</span>
                                        </div>
                                        
                                        ";
                // line 434
                yield "                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 434) == "processing") && CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "rawExportPath", [], "any", false, false, false, 434))) {
                    // line 435
                    yield "                                            <div class=\"info-row mt-2\">
                                                <span class=\"info-label\">
                                                    <i class=\"fas fa-info-circle me-1 text-info\"></i>Statut
                                                </span>
                                                <span class=\"info-value text-info\">
                                                    <i class=\"fas fa-database me-1\"></i> Données brutes disponibles
                                                </span>
                                            </div>
                                        ";
                }
                // line 444
                yield "                                    </div>

                                    <!-- Actions -->
                                    <div class=\"mt-4 pt-2 d-flex gap-2\">
                                        <a href=\"";
                // line 448
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "id", [], "any", false, false, false, 448)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary flex-grow-1\" onclick=\"event.stopPropagation()\">
                                            <i class=\"fas fa-eye me-1\"></i> Détail
                                        </a>
                                        
                                        ";
                // line 453
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 453) == "completed")) {
                    // line 454
                    yield "                                            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "finalReportPath", [], "any", false, false, false, 454)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 455
                        yield "                                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "id", [], "any", false, false, false, 455)]), "html", null, true);
                        yield "\" class=\"btn btn-success px-3\" onclick=\"event.stopPropagation()\" title=\"Télécharger le rapport final\">
                                                    <i class=\"fas fa-file-alt\"></i>
                                                </a>
                                            ";
                    } else {
                        // line 459
                        yield "                                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "id", [], "any", false, false, false, 459)]), "html", null, true);
                        yield "\" class=\"btn btn-outline-primary px-3\" onclick=\"event.stopPropagation()\" title=\"Télécharger les données brutes\">
                                                    <i class=\"fas fa-database\"></i>
                                                </a>
                                            ";
                    }
                    // line 463
                    yield "                                        ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "status", [], "any", false, false, false, 463) == "processing") && CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "rawExportPath", [], "any", false, false, false, 463))) {
                    // line 464
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["analysis"], "id", [], "any", false, false, false, 464)]), "html", null, true);
                    yield "\" class=\"btn btn-outline-primary px-3\" onclick=\"event.stopPropagation()\" title=\"Télécharger les données brutes\">
                                                <i class=\"fas fa-database\"></i>
                                            </a>
                                        ";
                }
                // line 468
                yield "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['analysis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 473
            yield "                </div>
            ";
        }
        // line 475
        yield "        </div>
    </div>
</div>

<!-- Modal Filtres -->
<div class=\"modal fade\" id=\"filterModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-filter me-2\"></i> Filtrer les analyses
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <form id=\"filterForm\">
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Type d'analyse</label>
                        <select name=\"type\" class=\"form-select\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"standard\" ";
        // line 495
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 495, $this->source); })()), "type", [], "any", false, false, false, 495) == "standard")) {
            yield "selected";
        }
        yield ">📊 Analyse Standard</option>
                            <option value=\"powerbi\" ";
        // line 496
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 496, $this->source); })()), "type", [], "any", false, false, false, 496) == "powerbi")) {
            yield "selected";
        }
        yield ">📈 Analyse Power BI</option>
                            <option value=\"custom\" ";
        // line 497
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 497, $this->source); })()), "type", [], "any", false, false, false, 497) == "custom")) {
            yield "selected";
        }
        yield ">🎯 Analyse sur mesure</option>
                        </select>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"pending\" ";
        // line 504
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 504, $this->source); })()), "status", [], "any", false, false, false, 504) == "pending")) {
            yield "selected";
        }
        yield ">⏳ En attente</option>
                            <option value=\"paid\" ";
        // line 505
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 505, $this->source); })()), "status", [], "any", false, false, false, 505) == "paid")) {
            yield "selected";
        }
        yield ">💰 Payé</option>
                            <option value=\"processing\" ";
        // line 506
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 506, $this->source); })()), "status", [], "any", false, false, false, 506) == "processing")) {
            yield "selected";
        }
        yield ">⚙️ En traitement</option>
                            <option value=\"completed\" ";
        // line 507
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 507, $this->source); })()), "status", [], "any", false, false, false, 507) == "completed")) {
            yield "selected";
        }
        yield ">✅ Terminé</option>
                            <option value=\"failed\" ";
        // line 508
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 508, $this->source); })()), "status", [], "any", false, false, false, 508) == "failed")) {
            yield "selected";
        }
        yield ">❌ Échec</option>
                        </select>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-semibold\">Date du</label>
                                <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 515)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 515, $this->source); })()), "date_from", [], "any", false, false, false, 515), "")) : ("")), "html", null, true);
        yield "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-semibold\">Date au</label>
                                <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 521)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 521, $this->source); })()), "date_to", [], "any", false, false, false, 521), "")) : ("")), "html", null, true);
        yield "\">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"applyFiltersBtn\">
                    <i class=\"fas fa-search me-1\"></i> Appliquer les filtres
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

    // line 538
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

        // line 539
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterModal = new bootstrap.Modal(document.getElementById('filterModal'));
    const applyFiltersBtn = document.getElementById('applyFiltersBtn');
    
    function applyFilters() {
        const form = document.getElementById('filterForm');
        const formData = new FormData(form);
        const params = new URLSearchParams();
        
        for (const [key, value] of formData.entries()) {
            if (value) {
                params.set(key, value);
            }
        }
        
        window.location.href = '";
        // line 556
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
        yield "?' + params.toString();
    }
    
    if (applyFiltersBtn) {
        applyFiltersBtn.addEventListener('click', applyFilters);
    }
    
    const filterForm = document.getElementById('filterForm');
    if (filterForm) {
        filterForm.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                applyFilters();
            }
        });
    }
});

function removeFilter(filter) {
    let url = new URL(window.location.href);
    url.searchParams.delete(filter);
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
}

function clearAllFilters() {
    window.location.href = '";
        // line 582
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
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
        return "company/analysis/index.html.twig";
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
        return array (  913 => 582,  884 => 556,  864 => 539,  851 => 538,  824 => 521,  815 => 515,  803 => 508,  797 => 507,  791 => 506,  785 => 505,  779 => 504,  767 => 497,  761 => 496,  755 => 495,  733 => 475,  729 => 473,  719 => 468,  711 => 464,  708 => 463,  700 => 459,  692 => 455,  689 => 454,  686 => 453,  679 => 448,  673 => 444,  662 => 435,  659 => 434,  653 => 430,  642 => 424,  633 => 418,  620 => 408,  616 => 407,  612 => 406,  606 => 403,  600 => 400,  590 => 395,  587 => 394,  583 => 393,  580 => 392,  572 => 387,  564 => 381,  562 => 380,  556 => 377,  534 => 358,  515 => 342,  495 => 326,  493 => 325,  488 => 323,  469 => 307,  458 => 298,  451 => 293,  444 => 289,  441 => 288,  438 => 287,  431 => 283,  428 => 282,  425 => 281,  418 => 277,  415 => 276,  412 => 275,  405 => 271,  402 => 270,  400 => 269,  397 => 268,  395 => 267,  383 => 258,  355 => 233,  330 => 211,  321 => 204,  308 => 203,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/company/analysis/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Mes analyses approfondies - HMA Market{% endblock %}

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

    /* Cartes d'analyse */
    .analysis-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        background: white;
        border: 1px solid rgba(0,0,0,0.05);
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }
    .analysis-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        border-color: transparent;
    }
    .analysis-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
    }
    .analysis-card.status-pending::before { background: linear-gradient(90deg, #f59e0b, #fcd34d); }
    .analysis-card.status-paid::before { background: linear-gradient(90deg, #3b82f6, #60a5fa); }
    .analysis-card.status-processing::before { background: linear-gradient(90deg, #8b5cf6, #a78bfa); }
    .analysis-card.status-completed::before { background: linear-gradient(90deg, #10b981, #34d399); }
    .analysis-card.status-failed::before { background: linear-gradient(90deg, #ef4444, #f87171); }

    /* Badges */
    .badge-custom {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.7rem;
    }
    .badge.bg-pending { background: #fef3c7; color: #b45309; }
    .badge.bg-paid { background: #dbeafe; color: #1e40af; }
    .badge.bg-processing { background: #ede9fe; color: #5b21b6; }
    .badge.bg-completed { background: #d1fae5; color: #065f46; }
    .badge.bg-failed { background: #fee2e2; color: #991b1b; }

    /* Bannière d'information */
    .info-banner {
        background: linear-gradient(135deg, #0463f1, #0350c4);
        border-radius: 1rem;
        position: relative;
        overflow: hidden;
    }
    .info-banner::before {
        content: '📊';
        position: absolute;
        font-size: 10rem;
        right: -2rem;
        bottom: -3rem;
        opacity: 0.1;
    }
    .btn-light-custom {
        background: rgba(255,255,255,0.2);
        border: 1px solid rgba(255,255,255,0.3);
        color: white;
        transition: all 0.3s ease;
    }
    .btn-light-custom:hover {
        background: white;
        color: #0463f1;
        transform: translateY(-2px);
    }

    /* Filtres */
    .filter-card {
        background: #f8fafc;
        border-radius: 1rem;
        transition: all 0.2s ease;
    }
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

    /* État vide */
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
    }
    .empty-state-icon {
        font-size: 4rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    /* Info row */
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px dashed #e2e8f0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.75rem;
        color: #64748b;
    }
    .info-value {
        font-weight: 600;
        font-size: 0.85rem;
    }
    
    /* Statut processing badge */
    .status-processing-badge {
        background: #ede9fe;
        color: #5b21b6;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec filtres -->
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
                        <i class=\"fas fa-chart-line me-1\"></i> Analyses
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line text-primary me-2\"></i>
                Mes analyses approfondies
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Commandez et suivez vos analyses de données
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#filterModal\">
                <i class=\"fas fa-filter me-1\"></i> Filtres
            </button>
            <a href=\"{{ path('company_analysis_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvelle analyse
            </a>
        </div>
    </div>

    <!-- Bannière d'information générale -->
    <div class=\"info-banner text-white mb-4 p-4\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-8\">
                <div class=\"d-flex align-items-center gap-3\">
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                        <i class=\"fas fa-chart-line fa-2x\"></i>
                    </div>
                    <div>
                        <h4 class=\"mb-1 fw-bold\">Analysez vos performances</h4>
                        <p class=\"mb-0 opacity-75\">
                            Obtenez une analyse détaillée de vos ventes, stocks et performances sur la période de votre choix.
                            Nos experts vous fournissent un rapport personnalisé avec des recommandations actionnables.
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-md-end mt-3 mt-md-0\">
                <div class=\"mt-2\">
                    <a href=\"{{ path('company_analysis_new') }}\" class=\"btn btn-light-custom\">
                        <i class=\"fas fa-rocket me-2\"></i> Commander une analyse
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    {% if filters.type or filters.status or filters.date_from or filters.date_to %}
    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        {% if filters.type %}
            <span class=\"filter-badge\" onclick=\"removeFilter('type')\">
                <i class=\"fas fa-tag me-1\"></i> {{ filters.type|capitalize }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.status %}
            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> {{ filters.status|capitalize }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.date_from %}
            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis le {{ filters.date_from|date('d/m/Y') }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.date_to %}
            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au {{ filters.date_to|date('d/m/Y') }}
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
                            <div class=\"stat-label\">Total analyses</div>
                            <div class=\"stat-value\">{{ stats.total|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">demandes effectuées</div>
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
                            <div class=\"stat-label\">Analyses terminées</div>
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
                            <div class=\"stat-sub\">en cours de traitement</div>
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
                            <div class=\"stat-label\">Montant total</div>
                            <div class=\"stat-value\">{{ stats.total_amount|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">investi en analyses</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-money-bill-wave fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des analyses -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-history me-2 text-primary\"></i>
                Historique des analyses
            </h5>
            <span class=\"badge bg-secondary\">{{ requests|length }} analyse(s)</span>
        </div>
        <div class=\"card-body p-0\">
            {% if requests is empty %}
                <div class=\"empty-state\">
                    <div class=\"empty-state-icon\">
                        <i class=\"fas fa-chart-line\"></i>
                    </div>
                    <h5 class=\"fw-semibold\">Aucune analyse trouvée</h5>
                    <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez une nouvelle analyse</p>
                    <a href=\"{{ path('company_analysis_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Nouvelle analyse
                    </a>
                </div>
            {% else %}
                <div class=\"row g-3 p-3\">
                    {% for analysis in requests %}
                        <div class=\"col-xl-4 col-md-6\">
                            <div class=\"analysis-card h-100 status-{{ analysis.status }}\" onclick=\"window.location='{{ path('company_analysis_show', {'id': analysis.id}) }}'\">
                                <div class=\"p-4\">
                                    <!-- En-tête -->
                                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                        <div>
                                            <h6 class=\"mb-1 fw-bold\">{{ analysis.requestNumber }}</h6>
                                            <small class=\"text-muted\">
                                                <i class=\"far fa-calendar-alt me-1\"></i>
                                                {{ analysis.createdAt|date('d/m/Y H:i') }}
                                            </small>
                                        </div>
                                        <span class=\"badge-custom badge bg-{{ analysis.status == 'pending' ? 'pending' : (analysis.status == 'paid' ? 'paid' : (analysis.status == 'processing' ? 'processing' : (analysis.status == 'completed' ? 'completed' : 'failed'))) }}\">
                                            <i class=\"fas {{ analysis.status == 'pending' ? 'fa-clock' : (analysis.status == 'processing' ? 'fa-spinner fa-pulse' : (analysis.status == 'completed' ? 'fa-check-circle' : 'fa-times-circle')) }} me-1\"></i>
                                            {{ analysis.statusLabel }}
                                        </span>
                                    </div>

                                    <!-- Détails -->
                                    <div class=\"mt-3\">
                                        <div class=\"info-row\">
                                            <span class=\"info-label\">
                                                <i class=\"fas fa-tag me-1\"></i>Type d'analyse
                                            </span>
                                            <span class=\"info-value\">{{ analysis.typeLabel }}</span>
                                        </div>
                                        <div class=\"info-row\">
                                            <span class=\"info-label\">
                                                <i class=\"fas fa-calendar-week me-1\"></i>Période
                                            </span>
                                            <span class=\"info-value\">{{ analysis.periodStart|date('d/m/Y') }} - {{ analysis.periodEnd|date('d/m/Y') }}</span>
                                        </div>
                                        <div class=\"info-row\">
                                            <span class=\"info-label\">
                                                <i class=\"fas fa-coins me-1\"></i>Montant
                                            </span>
                                            <span class=\"info-value fw-bold text-primary fs-5\">{{ analysis.amountFormatted }}</span>
                                        </div>
                                        
                                        {# Message pour les analyses en traitement avec données brutes disponibles #}
                                        {% if analysis.status == 'processing' and analysis.rawExportPath %}
                                            <div class=\"info-row mt-2\">
                                                <span class=\"info-label\">
                                                    <i class=\"fas fa-info-circle me-1 text-info\"></i>Statut
                                                </span>
                                                <span class=\"info-value text-info\">
                                                    <i class=\"fas fa-database me-1\"></i> Données brutes disponibles
                                                </span>
                                            </div>
                                        {% endif %}
                                    </div>

                                    <!-- Actions -->
                                    <div class=\"mt-4 pt-2 d-flex gap-2\">
                                        <a href=\"{{ path('company_analysis_show', {'id': analysis.id}) }}\" class=\"btn btn-outline-primary flex-grow-1\" onclick=\"event.stopPropagation()\">
                                            <i class=\"fas fa-eye me-1\"></i> Détail
                                        </a>
                                        
                                        {# Bouton de téléchargement selon le statut #}
                                        {% if analysis.status == 'completed' %}
                                            {% if analysis.finalReportPath %}
                                                <a href=\"{{ path('company_analysis_download_final', {'id': analysis.id}) }}\" class=\"btn btn-success px-3\" onclick=\"event.stopPropagation()\" title=\"Télécharger le rapport final\">
                                                    <i class=\"fas fa-file-alt\"></i>
                                                </a>
                                            {% else %}
                                                <a href=\"{{ path('company_analysis_download_raw', {'id': analysis.id}) }}\" class=\"btn btn-outline-primary px-3\" onclick=\"event.stopPropagation()\" title=\"Télécharger les données brutes\">
                                                    <i class=\"fas fa-database\"></i>
                                                </a>
                                            {% endif %}
                                        {% elseif analysis.status == 'processing' and analysis.rawExportPath %}
                                            <a href=\"{{ path('company_analysis_download_raw', {'id': analysis.id}) }}\" class=\"btn btn-outline-primary px-3\" onclick=\"event.stopPropagation()\" title=\"Télécharger les données brutes\">
                                                <i class=\"fas fa-database\"></i>
                                            </a>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>
</div>

<!-- Modal Filtres -->
<div class=\"modal fade\" id=\"filterModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-filter me-2\"></i> Filtrer les analyses
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <form id=\"filterForm\">
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Type d'analyse</label>
                        <select name=\"type\" class=\"form-select\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"standard\" {% if filters.type == 'standard' %}selected{% endif %}>📊 Analyse Standard</option>
                            <option value=\"powerbi\" {% if filters.type == 'powerbi' %}selected{% endif %}>📈 Analyse Power BI</option>
                            <option value=\"custom\" {% if filters.type == 'custom' %}selected{% endif %}>🎯 Analyse sur mesure</option>
                        </select>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"pending\" {% if filters.status == 'pending' %}selected{% endif %}>⏳ En attente</option>
                            <option value=\"paid\" {% if filters.status == 'paid' %}selected{% endif %}>💰 Payé</option>
                            <option value=\"processing\" {% if filters.status == 'processing' %}selected{% endif %}>⚙️ En traitement</option>
                            <option value=\"completed\" {% if filters.status == 'completed' %}selected{% endif %}>✅ Terminé</option>
                            <option value=\"failed\" {% if filters.status == 'failed' %}selected{% endif %}>❌ Échec</option>
                        </select>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-semibold\">Date du</label>
                                <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ filters.date_from|default('') }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-semibold\">Date au</label>
                                <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ filters.date_to|default('') }}\">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"applyFiltersBtn\">
                    <i class=\"fas fa-search me-1\"></i> Appliquer les filtres
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
    const filterModal = new bootstrap.Modal(document.getElementById('filterModal'));
    const applyFiltersBtn = document.getElementById('applyFiltersBtn');
    
    function applyFilters() {
        const form = document.getElementById('filterForm');
        const formData = new FormData(form);
        const params = new URLSearchParams();
        
        for (const [key, value] of formData.entries()) {
            if (value) {
                params.set(key, value);
            }
        }
        
        window.location.href = '{{ path('company_analysis_index') }}?' + params.toString();
    }
    
    if (applyFiltersBtn) {
        applyFiltersBtn.addEventListener('click', applyFilters);
    }
    
    const filterForm = document.getElementById('filterForm');
    if (filterForm) {
        filterForm.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                applyFilters();
            }
        });
    }
});

function removeFilter(filter) {
    let url = new URL(window.location.href);
    url.searchParams.delete(filter);
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
}

function clearAllFilters() {
    window.location.href = '{{ path('company_analysis_index') }}';
}
</script>
{% endblock %}", "company/analysis/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\company\\analysis\\index.html.twig");
    }
}
