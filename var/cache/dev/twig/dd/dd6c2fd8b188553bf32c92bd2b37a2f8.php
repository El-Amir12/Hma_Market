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

/* super_admin/hma_service/index.html.twig */
class __TwigTemplate_a17d41a24ea767c70a983c24a27f88bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/hma_service/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/hma_service/index.html.twig"));

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

        yield "Gestion des entreprises";
        
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
    :root {
        --primary: #0463f1;
        --primary-dark: #0350c4;
        --secondary: #764ba2;
        --success: #10b981;
        --danger: #ef4444;
        --warning: #f59e0b;
        --info: #0ea5e9;
    }

    /* Cartes statistiques */
    .stat-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        overflow: hidden;
        cursor: pointer;
        color: white;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    }
    .stat-card .stat-value {
        font-size: 2rem;
        font-weight: 800;
        line-height: 1.2;
    }
    .stat-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0.8;
    }
    .stat-card .stat-icon {
        opacity: 0.2;
        transition: opacity 0.3s;
    }
    .stat-card:hover .stat-icon {
        opacity: 0.3;
    }
    .stat-card.bg-primary { background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%); }
    .stat-card.bg-success { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
    .stat-card.bg-danger { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); }
    .stat-card.bg-warning { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); }

    /* Table scrollable */
    .table-responsive-scroll {
        max-height: 60vh;
        overflow-y: auto;
        border-radius: 0.75rem;
        scrollbar-width: thin;
    }
    .table-responsive-scroll::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    .table-responsive-scroll::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    .table-responsive-scroll::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }
    .table-responsive-scroll::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }
    .table thead th {
        position: sticky;
        top: 0;
        background: #f8fafc;
        z-index: 10;
        border-bottom: 2px solid #e2e8f0;
        white-space: nowrap;
    }

    /* Company logo */
    .company-logo {
        width: 45px;
        height: 45px;
        object-fit: cover;
        border-radius: 10px;
    }
    .company-initials {
        width: 45px;
        height: 45px;
        border-radius: 10px;
        background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
    }

    /* Badges */
    .plan-badge {
        font-size: 0.7rem;
        padding: 0.3rem 0.6rem;
        border-radius: 2rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }
    .plan-trial { background: linear-gradient(135deg, #f59e0b, #d97706); color: white; }
    .plan-freemium { background: linear-gradient(135deg, #6c757d, #5a6268); color: white; }
    .plan-basic { background: linear-gradient(135deg, #0463f1, #0350c4); color: white; }
    .plan-premium { background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white; }

    .status-badge {
        font-size: 0.7rem;
        padding: 0.3rem 0.6rem;
        border-radius: 2rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }
    .status-active { background: linear-gradient(135deg, #10b981, #059669); color: white; }
    .status-inactive { background: linear-gradient(135deg, #ef4444, #dc2626); color: white; }
    .status-trial { background: linear-gradient(135deg, #f59e0b, #d97706); color: white; }

    .role-badge {
        font-size: 0.65rem;
        padding: 0.2rem 0.5rem;
        border-radius: 0.5rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.2rem;
    }
    .role-admin { background: #dc2626; color: white; }
    .role-manager { background: #0463f1; color: white; }
    .role-stock { background: #f59e0b; color: #1e293b; }
    .role-cashier { background: #10b981; color: white; }

    /* Boutons filtre */
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

    /* Progress bar */
    .custom-progress {
        height: 5px;
        background: #e2e8f0;
        border-radius: 5px;
        overflow: hidden;
    }
    .custom-progress-bar {
        height: 100%;
        background: linear-gradient(90deg, var(--primary), var(--primary-dark));
        border-radius: 5px;
        transition: width 0.3s ease;
    }

    /* Tooltip */
    .custom-tooltip {
        position: relative;
        cursor: help;
    }
    .custom-tooltip:hover:after {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0,0,0,0.8);
        color: white;
        padding: 4px 8px;
        border-radius: 6px;
        font-size: 11px;
        white-space: nowrap;
        z-index: 1000;
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
    <!-- En-tête avec boutons -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-building me-1\"></i> Entreprises
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-building me-2 text-primary\"></i>
                Gestion des entreprises
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez toutes les entreprises inscrites sur la plateforme
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_export", ["format" => "excel"]);
        yield "\" class=\"btn btn-outline-success\">
                <i class=\"fas fa-file-excel me-1\"></i> Excel
            </a>
            <a href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_export", ["format" => "csv"]);
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-file-csv me-1\"></i> CSV
            </a>
            <a href=\"";
        // line 236
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-1\"></i> Nouvelle entreprise
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stat-card bg-primary p-3\" onclick=\"filterByStatus('all')\">
                <div class=\"d-flex justify-content-between align-items-start\">
                    <div>
                        <div class=\"stat-label\">Total entreprises</div>
                        <div class=\"stat-value\">";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 249, $this->source); })()), "total", [], "any", false, false, false, 249), "html", null, true);
        yield "</div>
                    </div>
                    <i class=\"stat-icon fas fa-building fa-3x\"></i>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stat-card bg-success p-3\" onclick=\"filterByStatus('active')\">
                <div class=\"d-flex justify-content-between align-items-start\">
                    <div>
                        <div class=\"stat-label\">Entreprises actives</div>
                        <div class=\"stat-value\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 260, $this->source); })()), "active", [], "any", false, false, false, 260), "html", null, true);
        yield "</div>
                    </div>
                    <i class=\"stat-icon fas fa-check-circle fa-3x\"></i>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stat-card bg-danger p-3\" onclick=\"filterByStatus('inactive')\">
                <div class=\"d-flex justify-content-between align-items-start\">
                    <div>
                        <div class=\"stat-label\">Entreprises inactives</div>
                        <div class=\"stat-value\">";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 271, $this->source); })()), "inactive", [], "any", false, false, false, 271), "html", null, true);
        yield "</div>
                    </div>
                    <i class=\"stat-icon fas fa-ban fa-3x\"></i>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stat-card bg-warning p-3\" onclick=\"filterByStatus('trial')\">
                <div class=\"d-flex justify-content-between align-items-start\">
                    <div>
                        <div class=\"stat-label\">Période d'essai</div>
                        <div class=\"stat-value\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 282, $this->source); })()), "trial", [], "any", false, false, false, 282), "html", null, true);
        yield "</div>
                    </div>
                    <i class=\"stat-icon fas fa-hourglass-half fa-3x\"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"filter-card p-3 mb-4\">
        <div class=\"row g-3 align-items-end\">
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-search me-1\"></i> Recherche
                </label>
                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Nom, email, n° abonnement...\" value=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 297, $this->source); })()), "search", [], "any", false, false, false, 297), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-chart-line me-1\"></i> Plan
                </label>
                <select id=\"planFilter\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"trial\" ";
        // line 305
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 305, $this->source); })()), "plan", [], "any", false, false, false, 305) == "trial")) ? ("selected") : (""));
        yield ">Essai gratuit</option>
                    <option value=\"freemium\" ";
        // line 306
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 306, $this->source); })()), "plan", [], "any", false, false, false, 306) == "freemium")) ? ("selected") : (""));
        yield ">Freemium</option>
                    <option value=\"basic\" ";
        // line 307
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 307, $this->source); })()), "plan", [], "any", false, false, false, 307) == "basic")) ? ("selected") : (""));
        yield ">Basic</option>
                    <option value=\"premium\" ";
        // line 308
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 308, $this->source); })()), "plan", [], "any", false, false, false, 308) == "premium")) ? ("selected") : (""));
        yield ">Premium</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-store me-1\"></i> Type
                </label>
                <select id=\"companyTypeFilter\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyTypes"]) || array_key_exists("companyTypes", $context) ? $context["companyTypes"] : (function () { throw new RuntimeError('Variable "companyTypes" does not exist.', 317, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 318
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 318, $this->source); })()), "company_type", [], "any", false, false, false, 318) == $context["type"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["type"], ["-" => " "])), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        yield "                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i> Date du
                </label>
                <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 326, $this->source); })()), "date_from", [], "any", false, false, false, 326), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i> Date au
                </label>
                <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 332, $this->source); })()), "date_to", [], "any", false, false, false, 332), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-1\">
                <button class=\"btn btn-primary w-100\" onclick=\"applyFilters()\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    ";
        // line 343
        if ((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 343, $this->source); })()), "search", [], "any", false, false, false, 343) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 343, $this->source); })()), "company_type", [], "any", false, false, false, 343)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 343, $this->source); })()), "status", [], "any", false, false, false, 343)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 343, $this->source); })()), "plan", [], "any", false, false, false, 343)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 343, $this->source); })()), "date_from", [], "any", false, false, false, 343)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 343, $this->source); })()), "date_to", [], "any", false, false, false, 343))) {
            // line 344
            yield "    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        ";
            // line 345
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 345, $this->source); })()), "search", [], "any", false, false, false, 345)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 346
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('search')\">
                <i class=\"fas fa-search me-1\"></i> ";
                // line 347
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 347, $this->source); })()), "search", [], "any", false, false, false, 347), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 351
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 351, $this->source); })()), "company_type", [], "any", false, false, false, 351)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 352
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('company_type')\">
                <i class=\"fas fa-store me-1\"></i> ";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 353, $this->source); })()), "company_type", [], "any", false, false, false, 353), ["-" => " "])), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 357
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 357, $this->source); })()), "status", [], "any", false, false, false, 357)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 358
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> ";
                // line 359
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 359, $this->source); })()), "status", [], "any", false, false, false, 359) == "active")) ? ("Actives") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 359, $this->source); })()), "status", [], "any", false, false, false, 359) == "inactive")) ? ("Inactives") : ("Essai"))));
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 363
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 363, $this->source); })()), "plan", [], "any", false, false, false, 363)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 364
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('plan')\">
                <i class=\"fas fa-chart-line me-1\"></i> ";
                // line 365
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 365, $this->source); })()), "plan", [], "any", false, false, false, 365)), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 369
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 369, $this->source); })()), "date_from", [], "any", false, false, false, 369) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 369, $this->source); })()), "date_to", [], "any", false, false, false, 369))) {
                // line 370
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_from'); removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> ";
                // line 371
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 371, $this->source); })()), "date_from", [], "any", false, false, false, 371)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 371, $this->source); })()), "date_from", [], "any", false, false, false, 371), "html", null, true)) : ("..."));
                yield " → ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 371, $this->source); })()), "date_to", [], "any", false, false, false, 371)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 371, $this->source); })()), "date_to", [], "any", false, false, false, 371), "html", null, true)) : ("..."));
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 375
            yield "        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    ";
        }
        // line 380
        yield "
    <!-- Tableau des entreprises -->
    <div class=\"card border-0 shadow-sm rounded-4\">
        <div class=\"card-header bg-white border-0 pt-4 pb-0 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des entreprises
                <span class=\"badge bg-secondary ms-2\">";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 387, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 387), "html", null, true);
        yield " entreprise(s)</span>
            </h5>
        </div>
        <div class=\"table-responsive-scroll\">
            <table class=\"table table-hover align-middle mb-0\">
                <thead class=\"table-light\">
                    <tr>
                        <th width=\"40\"><input type=\"checkbox\" id=\"selectAll\" class=\"form-check-input\"></th>
                        <th>Entreprise</th>
                        <th>Contact</th>
                        <th>Plan</th>
                        <th>Statut</th>
                        <th>Rôles</th>
                        <th>Utilisation</th>
                        <th>Création</th>
                        <th style=\"min-width: 120px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 406, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 407
            yield "                        <tr id=\"company-row-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 407), "html", null, true);
            yield "\">
                            <td><input type=\"checkbox\" class=\"row-checkbox form-check-input\" value=\"";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 408), "html", null, true);
            yield "\"></td>
                            <td>
                                <div class=\"d-flex align-items-center gap-2\">
                                    ";
            // line 411
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "logo", [], "any", false, false, false, 411)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 412
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, $context["company"], "logo", [], "any", false, false, false, 412))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 412), "html", null, true);
                yield "\" class=\"company-logo\">
                                    ";
            } else {
                // line 414
                yield "                                        <div class=\"company-initials\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 414))), "html", null, true);
                yield "</div>
                                    ";
            }
            // line 416
            yield "                                    <div>
                                        <div class=\"fw-semibold\">";
            // line 417
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 417), "html", null, true);
            yield "</div>
                                        <small class=\"text-muted\">#";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "subscriptionNumber", [], "any", false, false, false, 418), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                             </div>
                            <td>
                                <div><i class=\"fas fa-envelope text-muted me-1 fa-xs\"></i> ";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 423), "html", null, true);
            yield "</div>
                                <small><i class=\"fas fa-phone text-muted me-1 fa-xs\"></i> ";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "phone", [], "any", true, true, false, 424)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "phone", [], "any", false, false, false, 424), "Non renseigné")) : ("Non renseigné")), "html", null, true);
            yield "</small>
                            </td>
                            <td>
                                ";
            // line 427
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlan", [], "any", false, false, false, 427) == "trial")) {
                // line 428
                yield "                                    <span class=\"plan-badge plan-trial\"><i class=\"fas fa-hourglass-half me-1\"></i> Essai</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 429
$context["company"], "currentPlan", [], "any", false, false, false, 429) == "freemium")) {
                // line 430
                yield "                                    <span class=\"plan-badge plan-freemium\"><i class=\"fas fa-gift me-1\"></i> Freemium</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 431
$context["company"], "currentPlan", [], "any", false, false, false, 431) == "basic")) {
                // line 432
                yield "                                    <span class=\"plan-badge plan-basic\"><i class=\"fas fa-rocket me-1\"></i> Basic</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 433
$context["company"], "currentPlan", [], "any", false, false, false, 433) == "premium")) {
                // line 434
                yield "                                    <span class=\"plan-badge plan-premium\"><i class=\"fas fa-crown me-1\"></i> Premium</span>
                                ";
            }
            // line 436
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "subscriptionEndsAt", [], "any", false, false, false, 436)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 437
                yield "                                    <br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "subscriptionEndsAt", [], "any", false, false, false, 437), "d/m/Y"), "html", null, true);
                yield "</small>
                                ";
            }
            // line 439
            yield "                            </td>
                            <td>
                                ";
            // line 441
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 441)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 442
                yield "                                    <span class=\"status-badge status-active\"><i class=\"fas fa-check-circle me-1\"></i> Active</span>
                                ";
            } else {
                // line 444
                yield "                                    <span class=\"status-badge status-inactive\"><i class=\"fas fa-ban me-1\"></i> Désactivée</span>
                                ";
            }
            // line 446
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "isInTrialPeriod", [], "any", false, false, false, 446) && CoreExtension::getAttribute($this->env, $this->source, $context["company"], "trialEndsAt", [], "any", false, false, false, 446))) {
                // line 447
                yield "                                    <br><span class=\"status-badge status-trial mt-1\"><i class=\"fas fa-hourglass-half me-1\"></i> ";
                yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "trialEndsAt", [], "any", false, false, false, 447));
                yield "</span>
                                ";
            }
            // line 449
            yield "                            </td>
                            <td>
                                ";
            // line 451
            $context["roles"] = [];
            // line 452
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "users", [], "any", false, false, false, 452));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 453
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 453));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 454
                    yield "                                        ";
                    if ((($context["role"] != "ROLE_USER") && !CoreExtension::inFilter($context["role"], (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 454, $this->source); })())))) {
                        // line 455
                        yield "                                            ";
                        $context["roles"] = Twig\Extension\CoreExtension::merge((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 455, $this->source); })()), [$context["role"]]);
                        // line 456
                        yield "                                            ";
                        if (($context["role"] == "ROLE_ADMIN")) {
                            // line 457
                            yield "                                                <span class=\"role-badge role-admin\"><i class=\"fas fa-shield-alt me-1\"></i>Admin</span>
                                            ";
                        } elseif ((                        // line 458
$context["role"] == "ROLE_MANAGER")) {
                            // line 459
                            yield "                                                <span class=\"role-badge role-manager\"><i class=\"fas fa-chart-line me-1\"></i>Manager</span>
                                            ";
                        } elseif ((                        // line 460
$context["role"] == "ROLE_STOCK_MANAGER")) {
                            // line 461
                            yield "                                                <span class=\"role-badge role-stock\"><i class=\"fas fa-boxes me-1\"></i>Stock</span>
                                            ";
                        } elseif ((                        // line 462
$context["role"] == "ROLE_CASHIER")) {
                            // line 463
                            yield "                                                <span class=\"role-badge role-cashier\"><i class=\"fas fa-cash-register me-1\"></i>Caissier</span>
                                            ";
                        }
                        // line 465
                        yield "                                        ";
                    }
                    // line 466
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 467
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 468
            yield "                                <div class=\"mt-1\">
                                    <small><i class=\"fas fa-users text-muted me-1\"></i> ";
            // line 469
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "users", [], "any", false, false, false, 469)), "html", null, true);
            yield " utilisateurs</small>
                                </div>
                            </td>
                            <td style=\"min-width: 120px;\">
                                <div class=\"custom-progress mb-1\">
                                    <div class=\"custom-progress-bar\" style=\"width: ";
            // line 474
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "products", [], "any", false, false, false, 474)) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentLimits", [], "any", false, false, false, 474), "max_products", [], "any", false, false, false, 474)) * 100)), "html", null, true);
            yield "%\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between small\">
                                    <span class=\"custom-tooltip\" data-tooltip=\"Produits\"><i class=\"fas fa-box text-muted me-1\"></i> ";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "products", [], "any", false, false, false, 477)), "html", null, true);
            yield "</span>
                                    <span class=\"custom-tooltip\" data-tooltip=\"Commandes\"><i class=\"fas fa-shopping-cart text-muted me-1\"></i> ";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "orders", [], "any", false, false, false, 478)), "html", null, true);
            yield "</span>
                                    <span class=\"custom-tooltip\" data-tooltip=\"Catégories\"><i class=\"fas fa-tags text-muted me-1\"></i> ";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "categories", [], "any", false, false, false, 479)), "html", null, true);
            yield "</span>
                                </div>
                            </td>
                            <td>
                                <span class=\"custom-tooltip\" data-tooltip=\"Créé le ";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "createdAt", [], "any", false, false, false, 483), "d/m/Y à H:i"), "html", null, true);
            yield "\">
                                    <i class=\"fas fa-calendar text-muted me-1\"></i> ";
            // line 484
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "createdAt", [], "any", false, false, false, 484), "d/m/Y"), "html", null, true);
            yield "
                                </span>
                                <br><small class=\"text-muted\">";
            // line 486
            yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "createdAt", [], "any", false, false, false, 486));
            yield "</small>
                            </td>
                            <td>
                                <div class=\"btn-group\">
                                    <a href=\"";
            // line 490
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 490)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 493
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 493)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <input type=\"hidden\" id=\"toggle_token_";
            // line 496
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 496), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle"), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" id=\"delete_token_";
            // line 497
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 497), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
            yield "\">
                                    <button type=\"button\" class=\"btn btn-sm btn-outline-";
            // line 498
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 498)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
            yield " toggle-status-btn\"
                                            data-id=\"";
            // line 499
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 499), "html", null, true);
            yield "\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 499), "html", null, true);
            yield "\" data-active=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 499)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\"
                                            data-bs-toggle=\"modal\" data-bs-target=\"#toggleStatusModal\" title=\"";
            // line 500
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 500)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                        <i class=\"fas fa-";
            // line 501
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 501)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggle-off") : ("toggle-on"));
            yield "\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-company-btn\"
                                            data-id=\"";
            // line 504
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 504), "html", null, true);
            yield "\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 504), "html", null, true);
            yield "\"
                                            data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 511
        if (!$context['_iterated']) {
            // line 512
            yield "                        <tr>
                            <td colspan=\"9\" class=\"text-center py-5\">
                                <i class=\"fas fa-building fa-3x text-muted mb-3 opacity-50\"></i>
                                <h5 class=\"text-muted\">Aucune entreprise trouvée</h5>
                                <p class=\"text-muted small\">Modifiez vos filtres ou créez une nouvelle entreprise</p>
                                <a href=\"";
            // line 517
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_new");
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                                    <i class=\"fas fa-plus me-1\"></i> Créer une entreprise
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        yield "                </tbody>
            </table>
        </div>
        ";
        // line 526
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 526, $this->source); })())) > 0)) {
            // line 527
            yield "        <div class=\"card-footer bg-white border-0 py-3\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                <small class=\"text-muted\">
                    Affichage de ";
            // line 530
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 530, $this->source); })()), "getPaginationData", [], "any", false, false, false, 530), "firstItemNumber", [], "any", false, false, false, 530), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 530, $this->source); })()), "getPaginationData", [], "any", false, false, false, 530), "lastItemNumber", [], "any", false, false, false, 530), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 530, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 530), "html", null, true);
            yield " entreprises
                </small>
                ";
            // line 532
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 532, $this->source); })()));
            yield "
                <small class=\"text-muted\">
                    <i class=\"fas fa-arrow-up-down me-1\"></i> ";
            // line 534
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 534, $this->source); })()), "getPaginationData", [], "any", false, false, false, 534), "totalCount", [], "any", false, false, false, 534), "html", null, true);
            yield " ligne(s)
                </small>
            </div>
        </div>
        ";
        }
        // line 539
        yield "    </div>
</div>

<!-- MODAL POUR ACTIVER/DÉSACTIVER -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-labelledby=\"toggleStatusModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-warning border-0\">
                <h5 class=\"modal-title text-white\" id=\"toggleStatusModalLabel\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <div class=\"icon-circle mx-auto bg-warning bg-opacity-10\">
                        <i class=\"bi bi-question-circle-fill text-warning\" style=\"font-size: 3rem;\"></i>
                    </div>
                </div>
                <h4 id=\"toggleStatusMessage\" class=\"mb-3 fw-bold\"></h4>
                <p class=\"text-muted mb-0\" id=\"toggleCompanyName\"></p>
                <p class=\"text-muted small mt-3\">
                    <i class=\"bi bi-info-circle me-1\"></i>
                    Cette action peut être annulée à tout moment.
                </p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center pb-4\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">
                        <i class=\"bi bi-check me-2\"></i>Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- templates/super_admin/hma_service/index.html.twig -->
<!-- MODAL POUR SUPPRESSION AVEC CONFIRMATION PAR NOM -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-danger border-0\">
                <h5 class=\"modal-title text-white\" id=\"deleteModalLabel\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <div class=\"icon-circle mx-auto bg-danger bg-opacity-10\">
                        <i class=\"bi bi-trash-fill text-danger\" style=\"font-size: 2.5rem;\"></i>
                    </div>
                </div>
                <h4 class=\"mb-3 fw-bold\">Supprimer cette entreprise ?</h4>
                <p class=\"text-muted mb-2\" id=\"deleteCompanyName\"></p>
                <div class=\"alert alert-warning mt-3 mb-3 small\">
                    <i class=\"bi bi-exclamation-circle me-2\"></i>
                    Cette action est <strong>irréversible</strong>. Toutes les données associées seront définitivement supprimées.
                </div>
                
                <!-- ✅ CHAMP DE CONFIRMATION PAR NOM -->
                <div class=\"mb-3 text-start\">
                    <label for=\"confirmCompanyName\" class=\"form-label fw-semibold\">
                        Tapez le nom de l'entreprise pour confirmer :
                    </label>
                    <input type=\"text\" class=\"form-control\" id=\"confirmCompanyName\" 
                           placeholder=\"Entrez le nom de l'entreprise\">
                    <div id=\"confirmError\" class=\"text-danger small mt-1 d-none\">
                        Le nom saisi ne correspond pas.
                    </div>
                </div>
            </div>
            <div class=\"modal-footer border-0 justify-content-center pb-4\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <button type=\"button\" id=\"confirmDeleteBtn\" class=\"btn btn-danger px-4\" disabled>
                    <i class=\"bi bi-trash me-2\"></i>Supprimer définitivement
                </button>
                <form id=\"deleteForm\" method=\"post\" class=\"d-none\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
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

    // line 634
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

        // line 635
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // ==================== VARIABLES GLOBALES ====================
    let currentToggleId = null;
    let currentDeleteId = null;
    let companyToDelete = null;

    // ==================== FONCTIONS UTILITAIRES ====================
    
    /**
     * Afficher une notification
     */
    function showNotification(message, type = 'success') {
        // Supprimer les anciennes notifications
        const oldNotifications = document.querySelectorAll('.notification');
        oldNotifications.forEach(n => n.remove());
        
        const notification = document.createElement('div');
        notification.className = `notification notification-\${type}`;
        notification.innerHTML = `
            <div class=\"d-flex align-items-center\">
                <i class=\"bi bi-\${type === 'success' ? 'check-circle-fill' : 'exclamation-circle-fill'} me-3 fs-4\"></i>
                <div>\${message}</div>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Animation d'entrée
        setTimeout(() => notification.classList.add('show'), 10);
        
        // Disparition après 3 secondes
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    /**
     * Mettre à jour le statut dans le tableau sans recharger
     */
    function updateCompanyStatus(companyId, isActive) {
        const row = document.getElementById(`company-row-\${companyId}`);
        if (!row) return;
        
        const statusCell = row.querySelector('.status-cell');
        const toggleBtn = row.querySelector('.toggle-status-btn');
        
        if (!statusCell || !toggleBtn) return;
        
        // Mettre à jour le badge de statut
        statusCell.innerHTML = isActive 
            ? '<span class=\"badge status-active status-badge\"><i class=\"bi bi-check-circle me-1\"></i>Active</span>'
            : '<span class=\"badge status-inactive status-badge\"><i class=\"bi bi-x-circle me-1\"></i>Désactivée</span>';
        
        // Mettre à jour le bouton toggle
        toggleBtn.dataset.active = isActive ? 'true' : 'false';
        toggleBtn.className = `btn btn-sm btn-outline-\${isActive ? 'danger' : 'success'} toggle-status-btn`;
        toggleBtn.innerHTML = `<i class=\"bi bi-\${isActive ? 'toggle-off' : 'toggle-on'}\"></i>`;
        toggleBtn.title = isActive ? 'Désactiver' : 'Activer';
    }

    /**
     * Supprimer une ligne du tableau avec animation
     */
    function removeCompanyRow(companyId) {
        const row = document.getElementById(`company-row-\${companyId}`);
        if (row) {
            row.style.transition = 'all 0.3s ease';
            row.style.opacity = '0';
            row.style.transform = 'translateX(20px)';
            
            setTimeout(() => {
                row.remove();
                
                // Mettre à jour le compteur d'entreprises
                updateCompaniesCount();
                
                // Vérifier s'il reste des lignes
                const remainingRows = document.querySelectorAll('tbody tr').length;
                if (remainingRows === 0) {
                    // Recharger pour afficher l'état vide proprement
                    setTimeout(() => {
                        window.location.reload();
                    }, 500);
                }
            }, 300);
        }
    }

    /**
     * Mettre à jour le compteur d'entreprises dans l'en-tête
     */
    function updateCompaniesCount() {
        const countElement = document.querySelector('.card-header .badge-count');
        if (countElement) {
            const currentCount = parseInt(countElement.textContent) || 0;
            countElement.textContent = Math.max(0, currentCount - 1);
        }
    }

    /**
     * Réinitialiser le modal de toggle
     */
    function resetToggleModal() {
        const modal = document.getElementById('toggleStatusModal');
        const submitBtn = modal.querySelector('button[type=\"submit\"]');
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class=\"bi bi-check me-2\"></i>Confirmer';
    }

    /**
     * Réinitialiser le modal de suppression
     */
    function resetDeleteModal() {
        const confirmInput = document.getElementById('confirmCompanyName');
        const confirmBtn = document.getElementById('confirmDeleteBtn');
        const errorDiv = document.getElementById('confirmError');
        
        if (confirmInput) confirmInput.value = '';
        if (confirmBtn) {
            confirmBtn.disabled = true;
            confirmBtn.innerHTML = '<i class=\"bi bi-trash me-2\"></i>Supprimer définitivement';
        }
        if (errorDiv) errorDiv.classList.add('d-none');
    }

    // ==================== GESTION DU MODAL DE TOGGLE ====================

    // Boutons de toggle status
    document.querySelectorAll('.toggle-status-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            const isActive = this.dataset.active === 'true';
            
            currentToggleId = id;
            
            // Mettre à jour le message
            const message = isActive ? 'Désactiver cette entreprise ?' : 'Activer cette entreprise ?';
            document.getElementById('toggleStatusMessage').textContent = message;
            document.getElementById('toggleCompanyName').textContent = name;
            
            // Récupérer le token depuis le champ caché
            const tokenInput = document.getElementById('toggle_token_' + id);
            if (tokenInput) {
                document.getElementById('toggleStatusToken').value = tokenInput.value;
            }
            
            // Mettre à jour l'action du formulaire
            document.getElementById('toggleStatusForm').action = '/super-admin/hma-service/' + id + '/toggle-status';
        });
    });

    // Réinitialiser le modal de toggle quand il est fermé
    const toggleModal = document.getElementById('toggleStatusModal');
    if (toggleModal) {
        toggleModal.addEventListener('hidden.bs.modal', function() {
            resetToggleModal();
        });
    }

    // ==================== GESTION DU MODAL DE SUPPRESSION AVEC CONFIRMATION ====================

    // Boutons de suppression
    document.querySelectorAll('.delete-company-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            
            companyToDelete = { id, name };
            currentDeleteId = id;
            
            // Mettre à jour le message
            document.getElementById('deleteCompanyName').textContent = name;
            
            // Réinitialiser le champ de confirmation
            const confirmInput = document.getElementById('confirmCompanyName');
            const confirmBtn = document.getElementById('confirmDeleteBtn');
            const errorDiv = document.getElementById('confirmError');
            
            if (confirmInput) confirmInput.value = '';
            if (confirmBtn) confirmBtn.disabled = true;
            if (errorDiv) errorDiv.classList.add('d-none');
            
            // Récupérer le token depuis le champ caché
            const tokenInput = document.getElementById('delete_token_' + id);
            if (tokenInput) {
                document.getElementById('deleteToken').value = tokenInput.value;
            }
            
            // Mettre à jour l'action du formulaire
            document.getElementById('deleteForm').action = '/super-admin/hma-service/' + id + '/delete';
        });
    });

    // Vérifier la saisie du nom de confirmation
    const confirmInput = document.getElementById('confirmCompanyName');
    const confirmBtn = document.getElementById('confirmDeleteBtn');
    const errorDiv = document.getElementById('confirmError');

    if (confirmInput && confirmBtn && errorDiv) {
        confirmInput.addEventListener('input', function() {
            const companyName = document.getElementById('deleteCompanyName').textContent;
            const isValid = this.value.trim() === companyName;
            
            confirmBtn.disabled = !isValid;
            
            if (this.value.trim() && !isValid) {
                errorDiv.classList.remove('d-none');
                errorDiv.textContent = 'Le nom saisi ne correspond pas. Veuillez réessayer.';
            } else {
                errorDiv.classList.add('d-none');
            }
        });

        // Gérer la touche Entrée dans le champ de confirmation
        confirmInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !confirmBtn.disabled) {
                e.preventDefault();
                confirmBtn.click();
            }
        });
    }

    // Bouton de confirmation de suppression
    if (confirmBtn) {
        confirmBtn.addEventListener('click', function() {
            if (!companyToDelete) return;
            
            const form = document.getElementById('deleteForm');
            const formData = new FormData(form);
            const url = `/super-admin/hma-service/\${companyToDelete.id}/delete`;
            
            // Désactiver le bouton
            this.disabled = true;
            this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Suppression...';
            
            // Fermer le modal immédiatement pour meilleure UX
            const modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
            if (modal) modal.hide();
            
            // Envoyer la requête AJAX
            fetch(url, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Afficher une notification de succès
                    showNotification(data.message, 'success');
                    
                    // Supprimer la ligne du tableau
                    if (companyToDelete.id) {
                        removeCompanyRow(companyToDelete.id);
                    }
                } else {
                    showNotification(data.message || 'Une erreur est survenue', 'error');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                showNotification('Erreur de communication avec le serveur', 'error');
            })
            .finally(() => {
                // Réinitialiser le modal
                resetDeleteModal();
            });
        });
    }

    // Réinitialiser le modal de suppression quand il est fermé
    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('hidden.bs.modal', function() {
            resetDeleteModal();
            companyToDelete = null;
            currentDeleteId = null;
        });
    }

    // ==================== GESTION DES SOUMISSIONS AJAX DU TOGGLE ====================

    // Gestion de la soumission du formulaire de toggle
    const toggleForm = document.getElementById('toggleStatusForm');
    if (toggleForm) {
        toggleForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = this;
            const formData = new FormData(form);
            const url = form.action;
            const submitBtn = form.querySelector('button[type=\"submit\"]');
            const originalText = submitBtn.innerHTML;
            const modal = bootstrap.Modal.getInstance(document.getElementById('toggleStatusModal'));
            
            // Désactiver le bouton
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...';
            
            // Envoyer la requête AJAX
            fetch(url, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                return response.json();
            })
            .then(data => {
                // Fermer le modal
                if (modal) modal.hide();
                
                if (data.success) {
                    // Afficher une notification de succès
                    showNotification(data.message, 'success');
                    
                    // Mettre à jour l'interface sans recharger
                    if (currentToggleId) {
                        updateCompanyStatus(currentToggleId, data.active);
                    }
                } else {
                    // Afficher l'erreur
                    showNotification(data.message || 'Une erreur est survenue', 'error');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                showNotification('Erreur de communication avec le serveur', 'error');
                
                // Réactiver le bouton si le modal est encore ouvert
                if (modal && modal._isShown) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                }
            });
        });
    }

    // ==================== GESTION DES FILTRES ====================

    window.applyFilters = function() {
        const search = document.getElementById('searchInput').value.trim();
        const plan = document.getElementById('planFilter').value;
        const companyType = document.getElementById('companyTypeFilter').value; // ✅ AJOUT
        const dateFrom = document.getElementById('dateFrom').value;
        const dateTo = document.getElementById('dateTo').value;
        
        let url = new URL(window.location.href);
        
        if (search) url.searchParams.set('search', search);
        else url.searchParams.delete('search');
        
        if (plan) url.searchParams.set('plan', plan);
        else url.searchParams.delete('plan');
        
        if (companyType) url.searchParams.set('company_type', companyType); // ✅ AJOUT
        else url.searchParams.delete('company_type');
        
        if (dateFrom) url.searchParams.set('date_from', dateFrom);
        else url.searchParams.delete('date_from');
        
        if (dateTo) url.searchParams.set('date_to', dateTo);
        else url.searchParams.delete('date_to');
        
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.clearFilters = function() {
        let url = new URL(window.location.href);
        url.searchParams.delete('search');
        url.searchParams.delete('plan');
        url.searchParams.delete('company_type'); // ✅ AJOUT
        url.searchParams.delete('status');
        url.searchParams.delete('date_from');
        url.searchParams.delete('date_to');
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.filterByStatus = function(status) {
        let url = new URL(window.location.href);
        if (status === 'all') {
            url.searchParams.delete('status');
        } else {
            url.searchParams.set('status', status);
        }
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.removeFilter = function(filter) {
        let url = new URL(window.location.href);
        if (filter === 'date_from' || filter === 'date_to') {
            url.searchParams.delete('date_from');
            url.searchParams.delete('date_to');
        } else {
            url.searchParams.delete(filter);
        }
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    // ==================== SÉLECTION MULTIPLE ====================

    const selectAll = document.getElementById('selectAll');
    if (selectAll) {
        selectAll.addEventListener('change', function() {
            document.querySelectorAll('.row-checkbox').forEach(cb => {
                cb.checked = this.checked;
            });
        });

        // Gérer la sélection individuelle
        document.querySelectorAll('.row-checkbox').forEach(cb => {
            cb.addEventListener('change', function() {
                const allChecked = document.querySelectorAll('.row-checkbox:checked').length;
                const total = document.querySelectorAll('.row-checkbox').length;
                selectAll.checked = allChecked === total;
                selectAll.indeterminate = allChecked > 0 && allChecked < total;
            });
        });
    }

    // ==================== RECHERCHE AVEC ENTRÉE ====================

    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                applyFilters();
            }
        });
    }

    // ==================== INITIALISATION ====================

    // Initialiser l'état des checkboxes
    const checkboxes = document.querySelectorAll('.row-checkbox');
    if (checkboxes.length > 0 && selectAll) {
        const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
        const allChecked = Array.from(checkboxes).every(cb => cb.checked);
        selectAll.checked = allChecked;
        selectAll.indeterminate = anyChecked && !allChecked;
    }

    console.log('✅ JavaScript chargé avec succès');
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
        return "super_admin/hma_service/index.html.twig";
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
        return array (  1081 => 635,  1068 => 634,  964 => 539,  956 => 534,  951 => 532,  942 => 530,  937 => 527,  935 => 526,  930 => 523,  918 => 517,  911 => 512,  909 => 511,  895 => 504,  889 => 501,  885 => 500,  877 => 499,  873 => 498,  867 => 497,  861 => 496,  855 => 493,  849 => 490,  842 => 486,  837 => 484,  833 => 483,  826 => 479,  822 => 478,  818 => 477,  812 => 474,  804 => 469,  801 => 468,  795 => 467,  789 => 466,  786 => 465,  782 => 463,  780 => 462,  777 => 461,  775 => 460,  772 => 459,  770 => 458,  767 => 457,  764 => 456,  761 => 455,  758 => 454,  753 => 453,  748 => 452,  746 => 451,  742 => 449,  736 => 447,  733 => 446,  729 => 444,  725 => 442,  723 => 441,  719 => 439,  713 => 437,  710 => 436,  706 => 434,  704 => 433,  701 => 432,  699 => 431,  696 => 430,  694 => 429,  691 => 428,  689 => 427,  683 => 424,  679 => 423,  671 => 418,  667 => 417,  664 => 416,  658 => 414,  650 => 412,  648 => 411,  642 => 408,  637 => 407,  632 => 406,  610 => 387,  601 => 380,  594 => 375,  585 => 371,  582 => 370,  579 => 369,  572 => 365,  569 => 364,  566 => 363,  559 => 359,  556 => 358,  553 => 357,  546 => 353,  543 => 352,  540 => 351,  533 => 347,  530 => 346,  528 => 345,  525 => 344,  523 => 343,  509 => 332,  500 => 326,  492 => 320,  479 => 318,  475 => 317,  463 => 308,  459 => 307,  455 => 306,  451 => 305,  440 => 297,  422 => 282,  408 => 271,  394 => 260,  380 => 249,  364 => 236,  358 => 233,  352 => 230,  330 => 211,  321 => 204,  308 => 203,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/hma_service/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des entreprises{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary: #0463f1;
        --primary-dark: #0350c4;
        --secondary: #764ba2;
        --success: #10b981;
        --danger: #ef4444;
        --warning: #f59e0b;
        --info: #0ea5e9;
    }

    /* Cartes statistiques */
    .stat-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        overflow: hidden;
        cursor: pointer;
        color: white;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    }
    .stat-card .stat-value {
        font-size: 2rem;
        font-weight: 800;
        line-height: 1.2;
    }
    .stat-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0.8;
    }
    .stat-card .stat-icon {
        opacity: 0.2;
        transition: opacity 0.3s;
    }
    .stat-card:hover .stat-icon {
        opacity: 0.3;
    }
    .stat-card.bg-primary { background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%); }
    .stat-card.bg-success { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
    .stat-card.bg-danger { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); }
    .stat-card.bg-warning { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); }

    /* Table scrollable */
    .table-responsive-scroll {
        max-height: 60vh;
        overflow-y: auto;
        border-radius: 0.75rem;
        scrollbar-width: thin;
    }
    .table-responsive-scroll::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    .table-responsive-scroll::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    .table-responsive-scroll::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }
    .table-responsive-scroll::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }
    .table thead th {
        position: sticky;
        top: 0;
        background: #f8fafc;
        z-index: 10;
        border-bottom: 2px solid #e2e8f0;
        white-space: nowrap;
    }

    /* Company logo */
    .company-logo {
        width: 45px;
        height: 45px;
        object-fit: cover;
        border-radius: 10px;
    }
    .company-initials {
        width: 45px;
        height: 45px;
        border-radius: 10px;
        background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
    }

    /* Badges */
    .plan-badge {
        font-size: 0.7rem;
        padding: 0.3rem 0.6rem;
        border-radius: 2rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }
    .plan-trial { background: linear-gradient(135deg, #f59e0b, #d97706); color: white; }
    .plan-freemium { background: linear-gradient(135deg, #6c757d, #5a6268); color: white; }
    .plan-basic { background: linear-gradient(135deg, #0463f1, #0350c4); color: white; }
    .plan-premium { background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white; }

    .status-badge {
        font-size: 0.7rem;
        padding: 0.3rem 0.6rem;
        border-radius: 2rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }
    .status-active { background: linear-gradient(135deg, #10b981, #059669); color: white; }
    .status-inactive { background: linear-gradient(135deg, #ef4444, #dc2626); color: white; }
    .status-trial { background: linear-gradient(135deg, #f59e0b, #d97706); color: white; }

    .role-badge {
        font-size: 0.65rem;
        padding: 0.2rem 0.5rem;
        border-radius: 0.5rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.2rem;
    }
    .role-admin { background: #dc2626; color: white; }
    .role-manager { background: #0463f1; color: white; }
    .role-stock { background: #f59e0b; color: #1e293b; }
    .role-cashier { background: #10b981; color: white; }

    /* Boutons filtre */
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

    /* Progress bar */
    .custom-progress {
        height: 5px;
        background: #e2e8f0;
        border-radius: 5px;
        overflow: hidden;
    }
    .custom-progress-bar {
        height: 100%;
        background: linear-gradient(90deg, var(--primary), var(--primary-dark));
        border-radius: 5px;
        transition: width 0.3s ease;
    }

    /* Tooltip */
    .custom-tooltip {
        position: relative;
        cursor: help;
    }
    .custom-tooltip:hover:after {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0,0,0,0.8);
        color: white;
        padding: 4px 8px;
        border-radius: 6px;
        font-size: 11px;
        white-space: nowrap;
        z-index: 1000;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec boutons -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-building me-1\"></i> Entreprises
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-building me-2 text-primary\"></i>
                Gestion des entreprises
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez toutes les entreprises inscrites sur la plateforme
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('app_super_admin_hma_service_export', {format: 'excel'}) }}\" class=\"btn btn-outline-success\">
                <i class=\"fas fa-file-excel me-1\"></i> Excel
            </a>
            <a href=\"{{ path('app_super_admin_hma_service_export', {format: 'csv'}) }}\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-file-csv me-1\"></i> CSV
            </a>
            <a href=\"{{ path('app_super_admin_hma_service_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-1\"></i> Nouvelle entreprise
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stat-card bg-primary p-3\" onclick=\"filterByStatus('all')\">
                <div class=\"d-flex justify-content-between align-items-start\">
                    <div>
                        <div class=\"stat-label\">Total entreprises</div>
                        <div class=\"stat-value\">{{ stats.total }}</div>
                    </div>
                    <i class=\"stat-icon fas fa-building fa-3x\"></i>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stat-card bg-success p-3\" onclick=\"filterByStatus('active')\">
                <div class=\"d-flex justify-content-between align-items-start\">
                    <div>
                        <div class=\"stat-label\">Entreprises actives</div>
                        <div class=\"stat-value\">{{ stats.active }}</div>
                    </div>
                    <i class=\"stat-icon fas fa-check-circle fa-3x\"></i>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stat-card bg-danger p-3\" onclick=\"filterByStatus('inactive')\">
                <div class=\"d-flex justify-content-between align-items-start\">
                    <div>
                        <div class=\"stat-label\">Entreprises inactives</div>
                        <div class=\"stat-value\">{{ stats.inactive }}</div>
                    </div>
                    <i class=\"stat-icon fas fa-ban fa-3x\"></i>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stat-card bg-warning p-3\" onclick=\"filterByStatus('trial')\">
                <div class=\"d-flex justify-content-between align-items-start\">
                    <div>
                        <div class=\"stat-label\">Période d'essai</div>
                        <div class=\"stat-value\">{{ stats.trial }}</div>
                    </div>
                    <i class=\"stat-icon fas fa-hourglass-half fa-3x\"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"filter-card p-3 mb-4\">
        <div class=\"row g-3 align-items-end\">
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-search me-1\"></i> Recherche
                </label>
                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Nom, email, n° abonnement...\" value=\"{{ filters.search }}\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-chart-line me-1\"></i> Plan
                </label>
                <select id=\"planFilter\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"trial\" {{ filters.plan == 'trial' ? 'selected' : '' }}>Essai gratuit</option>
                    <option value=\"freemium\" {{ filters.plan == 'freemium' ? 'selected' : '' }}>Freemium</option>
                    <option value=\"basic\" {{ filters.plan == 'basic' ? 'selected' : '' }}>Basic</option>
                    <option value=\"premium\" {{ filters.plan == 'premium' ? 'selected' : '' }}>Premium</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-store me-1\"></i> Type
                </label>
                <select id=\"companyTypeFilter\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    {% for type in companyTypes %}
                        <option value=\"{{ type }}\" {{ filters.company_type == type ? 'selected' : '' }}>{{ type|replace({'-': ' '})|title }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i> Date du
                </label>
                <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"{{ filters.date_from }}\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i> Date au
                </label>
                <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"{{ filters.date_to }}\">
            </div>
            <div class=\"col-md-1\">
                <button class=\"btn btn-primary w-100\" onclick=\"applyFilters()\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    {% if filters.search or filters.company_type or filters.status or filters.plan or filters.date_from or filters.date_to %}
    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        {% if filters.search %}
            <span class=\"filter-badge\" onclick=\"removeFilter('search')\">
                <i class=\"fas fa-search me-1\"></i> {{ filters.search }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.company_type %}
            <span class=\"filter-badge\" onclick=\"removeFilter('company_type')\">
                <i class=\"fas fa-store me-1\"></i> {{ filters.company_type|replace({'-': ' '})|title }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.status %}
            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> {{ filters.status == 'active' ? 'Actives' : (filters.status == 'inactive' ? 'Inactives' : 'Essai') }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.plan %}
            <span class=\"filter-badge\" onclick=\"removeFilter('plan')\">
                <i class=\"fas fa-chart-line me-1\"></i> {{ filters.plan|capitalize }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.date_from or filters.date_to %}
            <span class=\"filter-badge\" onclick=\"removeFilter('date_from'); removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> {{ filters.date_from ?: '...' }} → {{ filters.date_to ?: '...' }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    {% endif %}

    <!-- Tableau des entreprises -->
    <div class=\"card border-0 shadow-sm rounded-4\">
        <div class=\"card-header bg-white border-0 pt-4 pb-0 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des entreprises
                <span class=\"badge bg-secondary ms-2\">{{ pagination.getTotalItemCount }} entreprise(s)</span>
            </h5>
        </div>
        <div class=\"table-responsive-scroll\">
            <table class=\"table table-hover align-middle mb-0\">
                <thead class=\"table-light\">
                    <tr>
                        <th width=\"40\"><input type=\"checkbox\" id=\"selectAll\" class=\"form-check-input\"></th>
                        <th>Entreprise</th>
                        <th>Contact</th>
                        <th>Plan</th>
                        <th>Statut</th>
                        <th>Rôles</th>
                        <th>Utilisation</th>
                        <th>Création</th>
                        <th style=\"min-width: 120px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for company in pagination %}
                        <tr id=\"company-row-{{ company.id }}\">
                            <td><input type=\"checkbox\" class=\"row-checkbox form-check-input\" value=\"{{ company.id }}\"></td>
                            <td>
                                <div class=\"d-flex align-items-center gap-2\">
                                    {% if company.logo %}
                                        <img src=\"{{ asset('uploads/logos/' ~ company.logo) }}\" alt=\"{{ company.companyName }}\" class=\"company-logo\">
                                    {% else %}
                                        <div class=\"company-initials\">{{ company.companyName|first|upper }}</div>
                                    {% endif %}
                                    <div>
                                        <div class=\"fw-semibold\">{{ company.companyName }}</div>
                                        <small class=\"text-muted\">#{{ company.subscriptionNumber }}</small>
                                    </div>
                                </div>
                             </div>
                            <td>
                                <div><i class=\"fas fa-envelope text-muted me-1 fa-xs\"></i> {{ company.email }}</div>
                                <small><i class=\"fas fa-phone text-muted me-1 fa-xs\"></i> {{ company.phone|default('Non renseigné') }}</small>
                            </td>
                            <td>
                                {% if company.currentPlan == 'trial' %}
                                    <span class=\"plan-badge plan-trial\"><i class=\"fas fa-hourglass-half me-1\"></i> Essai</span>
                                {% elseif company.currentPlan == 'freemium' %}
                                    <span class=\"plan-badge plan-freemium\"><i class=\"fas fa-gift me-1\"></i> Freemium</span>
                                {% elseif company.currentPlan == 'basic' %}
                                    <span class=\"plan-badge plan-basic\"><i class=\"fas fa-rocket me-1\"></i> Basic</span>
                                {% elseif company.currentPlan == 'premium' %}
                                    <span class=\"plan-badge plan-premium\"><i class=\"fas fa-crown me-1\"></i> Premium</span>
                                {% endif %}
                                {% if company.subscriptionEndsAt %}
                                    <br><small class=\"text-muted\">{{ company.subscriptionEndsAt|date('d/m/Y') }}</small>
                                {% endif %}
                            </td>
                            <td>
                                {% if company.hmaActive %}
                                    <span class=\"status-badge status-active\"><i class=\"fas fa-check-circle me-1\"></i> Active</span>
                                {% else %}
                                    <span class=\"status-badge status-inactive\"><i class=\"fas fa-ban me-1\"></i> Désactivée</span>
                                {% endif %}
                                {% if company.isInTrialPeriod and company.trialEndsAt %}
                                    <br><span class=\"status-badge status-trial mt-1\"><i class=\"fas fa-hourglass-half me-1\"></i> {{ company.trialEndsAt|time_diff }}</span>
                                {% endif %}
                            </td>
                            <td>
                                {% set roles = [] %}
                                {% for user in company.users %}
                                    {% for role in user.roles %}
                                        {% if role != 'ROLE_USER' and role not in roles %}
                                            {% set roles = roles|merge([role]) %}
                                            {% if role == 'ROLE_ADMIN' %}
                                                <span class=\"role-badge role-admin\"><i class=\"fas fa-shield-alt me-1\"></i>Admin</span>
                                            {% elseif role == 'ROLE_MANAGER' %}
                                                <span class=\"role-badge role-manager\"><i class=\"fas fa-chart-line me-1\"></i>Manager</span>
                                            {% elseif role == 'ROLE_STOCK_MANAGER' %}
                                                <span class=\"role-badge role-stock\"><i class=\"fas fa-boxes me-1\"></i>Stock</span>
                                            {% elseif role == 'ROLE_CASHIER' %}
                                                <span class=\"role-badge role-cashier\"><i class=\"fas fa-cash-register me-1\"></i>Caissier</span>
                                            {% endif %}
                                        {% endif %}
                                    {% endfor %}
                                {% endfor %}
                                <div class=\"mt-1\">
                                    <small><i class=\"fas fa-users text-muted me-1\"></i> {{ company.users|length }} utilisateurs</small>
                                </div>
                            </td>
                            <td style=\"min-width: 120px;\">
                                <div class=\"custom-progress mb-1\">
                                    <div class=\"custom-progress-bar\" style=\"width: {{ (company.products|length / company.currentLimits.max_products * 100)|round }}%\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between small\">
                                    <span class=\"custom-tooltip\" data-tooltip=\"Produits\"><i class=\"fas fa-box text-muted me-1\"></i> {{ company.products|length }}</span>
                                    <span class=\"custom-tooltip\" data-tooltip=\"Commandes\"><i class=\"fas fa-shopping-cart text-muted me-1\"></i> {{ company.orders|length }}</span>
                                    <span class=\"custom-tooltip\" data-tooltip=\"Catégories\"><i class=\"fas fa-tags text-muted me-1\"></i> {{ company.categories|length }}</span>
                                </div>
                            </td>
                            <td>
                                <span class=\"custom-tooltip\" data-tooltip=\"Créé le {{ company.createdAt|date('d/m/Y à H:i') }}\">
                                    <i class=\"fas fa-calendar text-muted me-1\"></i> {{ company.createdAt|date('d/m/Y') }}
                                </span>
                                <br><small class=\"text-muted\">{{ company.createdAt|time_diff }}</small>
                            </td>
                            <td>
                                <div class=\"btn-group\">
                                    <a href=\"{{ path('app_super_admin_hma_service_show', {'id': company.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_super_admin_hma_service_edit', {'id': company.id}) }}\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <input type=\"hidden\" id=\"toggle_token_{{ company.id }}\" value=\"{{ csrf_token('toggle') }}\">
                                    <input type=\"hidden\" id=\"delete_token_{{ company.id }}\" value=\"{{ csrf_token('delete') }}\">
                                    <button type=\"button\" class=\"btn btn-sm btn-outline-{{ company.hmaActive ? 'danger' : 'success' }} toggle-status-btn\"
                                            data-id=\"{{ company.id }}\" data-name=\"{{ company.companyName }}\" data-active=\"{{ company.hmaActive ? 'true' : 'false' }}\"
                                            data-bs-toggle=\"modal\" data-bs-target=\"#toggleStatusModal\" title=\"{{ company.hmaActive ? 'Désactiver' : 'Activer' }}\">
                                        <i class=\"fas fa-{{ company.hmaActive ? 'toggle-off' : 'toggle-on' }}\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-company-btn\"
                                            data-id=\"{{ company.id }}\" data-name=\"{{ company.companyName }}\"
                                            data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"9\" class=\"text-center py-5\">
                                <i class=\"fas fa-building fa-3x text-muted mb-3 opacity-50\"></i>
                                <h5 class=\"text-muted\">Aucune entreprise trouvée</h5>
                                <p class=\"text-muted small\">Modifiez vos filtres ou créez une nouvelle entreprise</p>
                                <a href=\"{{ path('app_super_admin_hma_service_new') }}\" class=\"btn btn-primary btn-sm mt-2\">
                                    <i class=\"fas fa-plus me-1\"></i> Créer une entreprise
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        {% if pagination|length > 0 %}
        <div class=\"card-footer bg-white border-0 py-3\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                <small class=\"text-muted\">
                    Affichage de {{ pagination.getPaginationData.firstItemNumber }} à {{ pagination.getPaginationData.lastItemNumber }} sur {{ pagination.getTotalItemCount }} entreprises
                </small>
                {{ knp_pagination_render(pagination) }}
                <small class=\"text-muted\">
                    <i class=\"fas fa-arrow-up-down me-1\"></i> {{ pagination.getPaginationData.totalCount }} ligne(s)
                </small>
            </div>
        </div>
        {% endif %}
    </div>
</div>

<!-- MODAL POUR ACTIVER/DÉSACTIVER -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-labelledby=\"toggleStatusModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-warning border-0\">
                <h5 class=\"modal-title text-white\" id=\"toggleStatusModalLabel\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <div class=\"icon-circle mx-auto bg-warning bg-opacity-10\">
                        <i class=\"bi bi-question-circle-fill text-warning\" style=\"font-size: 3rem;\"></i>
                    </div>
                </div>
                <h4 id=\"toggleStatusMessage\" class=\"mb-3 fw-bold\"></h4>
                <p class=\"text-muted mb-0\" id=\"toggleCompanyName\"></p>
                <p class=\"text-muted small mt-3\">
                    <i class=\"bi bi-info-circle me-1\"></i>
                    Cette action peut être annulée à tout moment.
                </p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center pb-4\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">
                        <i class=\"bi bi-check me-2\"></i>Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- templates/super_admin/hma_service/index.html.twig -->
<!-- MODAL POUR SUPPRESSION AVEC CONFIRMATION PAR NOM -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-danger border-0\">
                <h5 class=\"modal-title text-white\" id=\"deleteModalLabel\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <div class=\"icon-circle mx-auto bg-danger bg-opacity-10\">
                        <i class=\"bi bi-trash-fill text-danger\" style=\"font-size: 2.5rem;\"></i>
                    </div>
                </div>
                <h4 class=\"mb-3 fw-bold\">Supprimer cette entreprise ?</h4>
                <p class=\"text-muted mb-2\" id=\"deleteCompanyName\"></p>
                <div class=\"alert alert-warning mt-3 mb-3 small\">
                    <i class=\"bi bi-exclamation-circle me-2\"></i>
                    Cette action est <strong>irréversible</strong>. Toutes les données associées seront définitivement supprimées.
                </div>
                
                <!-- ✅ CHAMP DE CONFIRMATION PAR NOM -->
                <div class=\"mb-3 text-start\">
                    <label for=\"confirmCompanyName\" class=\"form-label fw-semibold\">
                        Tapez le nom de l'entreprise pour confirmer :
                    </label>
                    <input type=\"text\" class=\"form-control\" id=\"confirmCompanyName\" 
                           placeholder=\"Entrez le nom de l'entreprise\">
                    <div id=\"confirmError\" class=\"text-danger small mt-1 d-none\">
                        Le nom saisi ne correspond pas.
                    </div>
                </div>
            </div>
            <div class=\"modal-footer border-0 justify-content-center pb-4\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <button type=\"button\" id=\"confirmDeleteBtn\" class=\"btn btn-danger px-4\" disabled>
                    <i class=\"bi bi-trash me-2\"></i>Supprimer définitivement
                </button>
                <form id=\"deleteForm\" method=\"post\" class=\"d-none\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // ==================== VARIABLES GLOBALES ====================
    let currentToggleId = null;
    let currentDeleteId = null;
    let companyToDelete = null;

    // ==================== FONCTIONS UTILITAIRES ====================
    
    /**
     * Afficher une notification
     */
    function showNotification(message, type = 'success') {
        // Supprimer les anciennes notifications
        const oldNotifications = document.querySelectorAll('.notification');
        oldNotifications.forEach(n => n.remove());
        
        const notification = document.createElement('div');
        notification.className = `notification notification-\${type}`;
        notification.innerHTML = `
            <div class=\"d-flex align-items-center\">
                <i class=\"bi bi-\${type === 'success' ? 'check-circle-fill' : 'exclamation-circle-fill'} me-3 fs-4\"></i>
                <div>\${message}</div>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Animation d'entrée
        setTimeout(() => notification.classList.add('show'), 10);
        
        // Disparition après 3 secondes
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    /**
     * Mettre à jour le statut dans le tableau sans recharger
     */
    function updateCompanyStatus(companyId, isActive) {
        const row = document.getElementById(`company-row-\${companyId}`);
        if (!row) return;
        
        const statusCell = row.querySelector('.status-cell');
        const toggleBtn = row.querySelector('.toggle-status-btn');
        
        if (!statusCell || !toggleBtn) return;
        
        // Mettre à jour le badge de statut
        statusCell.innerHTML = isActive 
            ? '<span class=\"badge status-active status-badge\"><i class=\"bi bi-check-circle me-1\"></i>Active</span>'
            : '<span class=\"badge status-inactive status-badge\"><i class=\"bi bi-x-circle me-1\"></i>Désactivée</span>';
        
        // Mettre à jour le bouton toggle
        toggleBtn.dataset.active = isActive ? 'true' : 'false';
        toggleBtn.className = `btn btn-sm btn-outline-\${isActive ? 'danger' : 'success'} toggle-status-btn`;
        toggleBtn.innerHTML = `<i class=\"bi bi-\${isActive ? 'toggle-off' : 'toggle-on'}\"></i>`;
        toggleBtn.title = isActive ? 'Désactiver' : 'Activer';
    }

    /**
     * Supprimer une ligne du tableau avec animation
     */
    function removeCompanyRow(companyId) {
        const row = document.getElementById(`company-row-\${companyId}`);
        if (row) {
            row.style.transition = 'all 0.3s ease';
            row.style.opacity = '0';
            row.style.transform = 'translateX(20px)';
            
            setTimeout(() => {
                row.remove();
                
                // Mettre à jour le compteur d'entreprises
                updateCompaniesCount();
                
                // Vérifier s'il reste des lignes
                const remainingRows = document.querySelectorAll('tbody tr').length;
                if (remainingRows === 0) {
                    // Recharger pour afficher l'état vide proprement
                    setTimeout(() => {
                        window.location.reload();
                    }, 500);
                }
            }, 300);
        }
    }

    /**
     * Mettre à jour le compteur d'entreprises dans l'en-tête
     */
    function updateCompaniesCount() {
        const countElement = document.querySelector('.card-header .badge-count');
        if (countElement) {
            const currentCount = parseInt(countElement.textContent) || 0;
            countElement.textContent = Math.max(0, currentCount - 1);
        }
    }

    /**
     * Réinitialiser le modal de toggle
     */
    function resetToggleModal() {
        const modal = document.getElementById('toggleStatusModal');
        const submitBtn = modal.querySelector('button[type=\"submit\"]');
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class=\"bi bi-check me-2\"></i>Confirmer';
    }

    /**
     * Réinitialiser le modal de suppression
     */
    function resetDeleteModal() {
        const confirmInput = document.getElementById('confirmCompanyName');
        const confirmBtn = document.getElementById('confirmDeleteBtn');
        const errorDiv = document.getElementById('confirmError');
        
        if (confirmInput) confirmInput.value = '';
        if (confirmBtn) {
            confirmBtn.disabled = true;
            confirmBtn.innerHTML = '<i class=\"bi bi-trash me-2\"></i>Supprimer définitivement';
        }
        if (errorDiv) errorDiv.classList.add('d-none');
    }

    // ==================== GESTION DU MODAL DE TOGGLE ====================

    // Boutons de toggle status
    document.querySelectorAll('.toggle-status-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            const isActive = this.dataset.active === 'true';
            
            currentToggleId = id;
            
            // Mettre à jour le message
            const message = isActive ? 'Désactiver cette entreprise ?' : 'Activer cette entreprise ?';
            document.getElementById('toggleStatusMessage').textContent = message;
            document.getElementById('toggleCompanyName').textContent = name;
            
            // Récupérer le token depuis le champ caché
            const tokenInput = document.getElementById('toggle_token_' + id);
            if (tokenInput) {
                document.getElementById('toggleStatusToken').value = tokenInput.value;
            }
            
            // Mettre à jour l'action du formulaire
            document.getElementById('toggleStatusForm').action = '/super-admin/hma-service/' + id + '/toggle-status';
        });
    });

    // Réinitialiser le modal de toggle quand il est fermé
    const toggleModal = document.getElementById('toggleStatusModal');
    if (toggleModal) {
        toggleModal.addEventListener('hidden.bs.modal', function() {
            resetToggleModal();
        });
    }

    // ==================== GESTION DU MODAL DE SUPPRESSION AVEC CONFIRMATION ====================

    // Boutons de suppression
    document.querySelectorAll('.delete-company-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            
            companyToDelete = { id, name };
            currentDeleteId = id;
            
            // Mettre à jour le message
            document.getElementById('deleteCompanyName').textContent = name;
            
            // Réinitialiser le champ de confirmation
            const confirmInput = document.getElementById('confirmCompanyName');
            const confirmBtn = document.getElementById('confirmDeleteBtn');
            const errorDiv = document.getElementById('confirmError');
            
            if (confirmInput) confirmInput.value = '';
            if (confirmBtn) confirmBtn.disabled = true;
            if (errorDiv) errorDiv.classList.add('d-none');
            
            // Récupérer le token depuis le champ caché
            const tokenInput = document.getElementById('delete_token_' + id);
            if (tokenInput) {
                document.getElementById('deleteToken').value = tokenInput.value;
            }
            
            // Mettre à jour l'action du formulaire
            document.getElementById('deleteForm').action = '/super-admin/hma-service/' + id + '/delete';
        });
    });

    // Vérifier la saisie du nom de confirmation
    const confirmInput = document.getElementById('confirmCompanyName');
    const confirmBtn = document.getElementById('confirmDeleteBtn');
    const errorDiv = document.getElementById('confirmError');

    if (confirmInput && confirmBtn && errorDiv) {
        confirmInput.addEventListener('input', function() {
            const companyName = document.getElementById('deleteCompanyName').textContent;
            const isValid = this.value.trim() === companyName;
            
            confirmBtn.disabled = !isValid;
            
            if (this.value.trim() && !isValid) {
                errorDiv.classList.remove('d-none');
                errorDiv.textContent = 'Le nom saisi ne correspond pas. Veuillez réessayer.';
            } else {
                errorDiv.classList.add('d-none');
            }
        });

        // Gérer la touche Entrée dans le champ de confirmation
        confirmInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !confirmBtn.disabled) {
                e.preventDefault();
                confirmBtn.click();
            }
        });
    }

    // Bouton de confirmation de suppression
    if (confirmBtn) {
        confirmBtn.addEventListener('click', function() {
            if (!companyToDelete) return;
            
            const form = document.getElementById('deleteForm');
            const formData = new FormData(form);
            const url = `/super-admin/hma-service/\${companyToDelete.id}/delete`;
            
            // Désactiver le bouton
            this.disabled = true;
            this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Suppression...';
            
            // Fermer le modal immédiatement pour meilleure UX
            const modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
            if (modal) modal.hide();
            
            // Envoyer la requête AJAX
            fetch(url, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Afficher une notification de succès
                    showNotification(data.message, 'success');
                    
                    // Supprimer la ligne du tableau
                    if (companyToDelete.id) {
                        removeCompanyRow(companyToDelete.id);
                    }
                } else {
                    showNotification(data.message || 'Une erreur est survenue', 'error');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                showNotification('Erreur de communication avec le serveur', 'error');
            })
            .finally(() => {
                // Réinitialiser le modal
                resetDeleteModal();
            });
        });
    }

    // Réinitialiser le modal de suppression quand il est fermé
    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('hidden.bs.modal', function() {
            resetDeleteModal();
            companyToDelete = null;
            currentDeleteId = null;
        });
    }

    // ==================== GESTION DES SOUMISSIONS AJAX DU TOGGLE ====================

    // Gestion de la soumission du formulaire de toggle
    const toggleForm = document.getElementById('toggleStatusForm');
    if (toggleForm) {
        toggleForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = this;
            const formData = new FormData(form);
            const url = form.action;
            const submitBtn = form.querySelector('button[type=\"submit\"]');
            const originalText = submitBtn.innerHTML;
            const modal = bootstrap.Modal.getInstance(document.getElementById('toggleStatusModal'));
            
            // Désactiver le bouton
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...';
            
            // Envoyer la requête AJAX
            fetch(url, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                return response.json();
            })
            .then(data => {
                // Fermer le modal
                if (modal) modal.hide();
                
                if (data.success) {
                    // Afficher une notification de succès
                    showNotification(data.message, 'success');
                    
                    // Mettre à jour l'interface sans recharger
                    if (currentToggleId) {
                        updateCompanyStatus(currentToggleId, data.active);
                    }
                } else {
                    // Afficher l'erreur
                    showNotification(data.message || 'Une erreur est survenue', 'error');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                showNotification('Erreur de communication avec le serveur', 'error');
                
                // Réactiver le bouton si le modal est encore ouvert
                if (modal && modal._isShown) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                }
            });
        });
    }

    // ==================== GESTION DES FILTRES ====================

    window.applyFilters = function() {
        const search = document.getElementById('searchInput').value.trim();
        const plan = document.getElementById('planFilter').value;
        const companyType = document.getElementById('companyTypeFilter').value; // ✅ AJOUT
        const dateFrom = document.getElementById('dateFrom').value;
        const dateTo = document.getElementById('dateTo').value;
        
        let url = new URL(window.location.href);
        
        if (search) url.searchParams.set('search', search);
        else url.searchParams.delete('search');
        
        if (plan) url.searchParams.set('plan', plan);
        else url.searchParams.delete('plan');
        
        if (companyType) url.searchParams.set('company_type', companyType); // ✅ AJOUT
        else url.searchParams.delete('company_type');
        
        if (dateFrom) url.searchParams.set('date_from', dateFrom);
        else url.searchParams.delete('date_from');
        
        if (dateTo) url.searchParams.set('date_to', dateTo);
        else url.searchParams.delete('date_to');
        
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.clearFilters = function() {
        let url = new URL(window.location.href);
        url.searchParams.delete('search');
        url.searchParams.delete('plan');
        url.searchParams.delete('company_type'); // ✅ AJOUT
        url.searchParams.delete('status');
        url.searchParams.delete('date_from');
        url.searchParams.delete('date_to');
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.filterByStatus = function(status) {
        let url = new URL(window.location.href);
        if (status === 'all') {
            url.searchParams.delete('status');
        } else {
            url.searchParams.set('status', status);
        }
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.removeFilter = function(filter) {
        let url = new URL(window.location.href);
        if (filter === 'date_from' || filter === 'date_to') {
            url.searchParams.delete('date_from');
            url.searchParams.delete('date_to');
        } else {
            url.searchParams.delete(filter);
        }
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    // ==================== SÉLECTION MULTIPLE ====================

    const selectAll = document.getElementById('selectAll');
    if (selectAll) {
        selectAll.addEventListener('change', function() {
            document.querySelectorAll('.row-checkbox').forEach(cb => {
                cb.checked = this.checked;
            });
        });

        // Gérer la sélection individuelle
        document.querySelectorAll('.row-checkbox').forEach(cb => {
            cb.addEventListener('change', function() {
                const allChecked = document.querySelectorAll('.row-checkbox:checked').length;
                const total = document.querySelectorAll('.row-checkbox').length;
                selectAll.checked = allChecked === total;
                selectAll.indeterminate = allChecked > 0 && allChecked < total;
            });
        });
    }

    // ==================== RECHERCHE AVEC ENTRÉE ====================

    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                applyFilters();
            }
        });
    }

    // ==================== INITIALISATION ====================

    // Initialiser l'état des checkboxes
    const checkboxes = document.querySelectorAll('.row-checkbox');
    if (checkboxes.length > 0 && selectAll) {
        const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
        const allChecked = Array.from(checkboxes).every(cb => cb.checked);
        selectAll.checked = allChecked;
        selectAll.indeterminate = anyChecked && !allChecked;
    }

    console.log('✅ JavaScript chargé avec succès');
});
</script>
{% endblock %}", "super_admin/hma_service/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\hma_service\\index.html.twig");
    }
}
