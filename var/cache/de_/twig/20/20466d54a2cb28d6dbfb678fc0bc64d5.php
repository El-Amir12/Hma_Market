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

/* super_admin/statistics/index.html.twig */
class __TwigTemplate_8d481f3b3b1115218bba20ed803fb8fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/statistics/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/statistics/index.html.twig"));

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

        yield "Tableau de bord - Statistiques Globales";
        
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
        --success: #10b981;
        --danger: #ef4444;
        --warning: #f59e0b;
        --info: #0ea5e9;
        --purple: #8b5cf6;
        --dark: #1e293b;
    }

    .stat-dashboard {
        background: #f1f5f9;
        min-height: 100vh;
    }

    /* Cartes KPI */
    .kpi-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    
    .kpi-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 25px -12px rgba(0,0,0,0.1);
    }
    
    .kpi-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
    }
    
    .kpi-card.primary::before { background: linear-gradient(90deg, var(--primary), var(--purple)); }
    .kpi-card.success::before { background: linear-gradient(90deg, var(--success), #34d399); }
    .kpi-card.danger::before { background: linear-gradient(90deg, var(--danger), #f87171); }
    .kpi-card.warning::before { background: linear-gradient(90deg, var(--warning), #fbbf24); }
    
    .kpi-icon {
        width: 48px;
        height: 48px;
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    
    .kpi-icon.primary { background: rgba(4, 99, 241, 0.1); color: var(--primary); }
    .kpi-icon.success { background: rgba(16, 185, 129, 0.1); color: var(--success); }
    .kpi-icon.danger { background: rgba(239, 68, 68, 0.1); color: var(--danger); }
    .kpi-icon.warning { background: rgba(245, 158, 11, 0.1); color: var(--warning); }
    
    .kpi-value {
        font-size: 2rem;
        font-weight: 800;
        line-height: 1.2;
        margin-top: 0.5rem;
    }
    
    .kpi-label {
        color: #64748b;
        font-size: 0.875rem;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Cartes graphiques */
    .chart-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .chart-card:hover {
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
    }
    
    .chart-title {
        font-size: 1.125rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .chart-title i {
        color: var(--primary);
        margin-right: 0.5rem;
    }
    
    .chart-container {
        position: relative;
        height: 300px;
    }

    /* Section filtres */
    .filters-section {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    
    .filter-group {
        margin-bottom: 1rem;
    }
    
    .filter-label {
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748b;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.75rem;
        justify-content: flex-end;
        align-items: center;
    }
    
    .filter-badge-active {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.25rem 0.75rem;
        background: #f1f5f9;
        border-radius: 2rem;
        font-size: 0.75rem;
        cursor: pointer;
        transition: all 0.2s;
    }
    
    .filter-badge-active:hover {
        background: #e2e8f0;
    }

    /* Ranking */
    .ranking-list {
        max-height: 400px;
        overflow-y: auto;
    }
    
    .ranking-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.75rem;
        border-radius: 1rem;
        transition: all 0.2s;
        cursor: pointer;
    }
    
    .ranking-item:hover {
        background: #f8fafc;
    }
    
    .ranking-number {
        width: 32px;
        height: 32px;
        background: #f1f5f9;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.875rem;
    }
    
    .ranking-number.top-1 { background: linear-gradient(135deg, #f59e0b, #d97706); color: white; }
    .ranking-number.top-2 { background: linear-gradient(135deg, #94a3b8, #64748b); color: white; }
    .ranking-number.top-3 { background: linear-gradient(135deg, #cd7b3a, #b45309); color: white; }
    
    .ranking-info {
        flex: 1;
    }
    
    .ranking-name {
        font-weight: 600;
        font-size: 0.875rem;
    }
    
    .ranking-value {
        font-size: 0.75rem;
        color: #64748b;
    }
    
    /* Badges des plans */
    .plan-badge-stat {
        font-size: 0.65rem;
        padding: 0.3rem 0.75rem;
        border-radius: 2rem;
        font-weight: 600;
        color: white !important;
        display: inline-block;
        text-transform: capitalize;
        letter-spacing: 0.3px;
    }
    
    .plan-badge-stat.trial { background: linear-gradient(135deg, #f59e0b, #d97706); color: white !important; }
    .plan-badge-stat.freemium { background: linear-gradient(135deg, #64748b, #475569); color: white !important; }
    .plan-badge-stat.basic { background: linear-gradient(135deg, #0463f1, #0350c4); color: white !important; }
    .plan-badge-stat.premium { background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white !important; }

    /* Pagination */
    .pagination-container {
        margin-top: 0.5rem;
    }
    
    .pagination {
        margin-bottom: 0;
        gap: 0.25rem;
    }
    
    .page-link {
        border-radius: 0.5rem !important;
        border: none;
        padding: 0.4rem 0.75rem;
        font-size: 0.75rem;
        color: var(--dark);
        background: #f1f5f9;
        transition: all 0.2s;
        cursor: pointer;
    }
    
    .page-link:hover {
        background: #e2e8f0;
        color: var(--primary);
    }
    
    .page-item.active .page-link {
        background: var(--primary);
        color: white;
    }
    
    /* Conversion card */
    .conversion-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1.5rem;
        padding: 1.5rem;
        color: white;
    }
    
    .conversion-rate {
        font-size: 3rem;
        font-weight: 800;
    }
    
    .conversion-label {
        font-size: 0.875rem;
        opacity: 0.9;
    }
    
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.5rem; }
        .chart-container { height: 250px; }
        .kpi-card { padding: 1rem; }
        .action-buttons { margin-top: 1rem; justify-content: flex-start; }
    }
    
    .notification-toast {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 10000;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background: var(--success);
        color: white;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
        animation: slideIn 0.3s ease;
    }
    
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    
    /* Spinner sur les boutons */
    .btn-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.7;
    }
    
    .btn-loading .btn-text {
        visibility: hidden;
    }
    
    .btn-loading::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 16px;
        height: 16px;
        margin: -8px 0 0 -8px;
        border: 2px solid rgba(255,255,255,0.3);
        border-top-color: white;
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
    }
    
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 340
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

        // line 341
        yield "<div class=\"stat-dashboard py-4\">
    <div class=\"container-fluid px-4\">
        
        <!-- En-tête avec boutons à droite -->
        <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
            <div>
                <h1 class=\"h2 fw-bold mb-1\">
                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                    Tableau de bord global
                </h1>
                <p class=\"text-muted mb-0\">
                    <i class=\"fas fa-calendar-alt me-1\"></i>
                    Vue d'ensemble de toutes les entreprises sur la plateforme
                </p>
            </div>
            <div class=\"action-buttons\" id=\"actionButtons\">
                <button class=\"btn btn-primary\" onclick=\"applyFilters()\" id=\"applyBtn\">
                    <i class=\"fas fa-search me-1\"></i> Appliquer les filtres
                </button>
                <button class=\"btn btn-outline-secondary\" onclick=\"refreshData()\" title=\"Actualiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </button>
                <button class=\"btn btn-outline-success\" onclick=\"exportData()\" title=\"Exporter\">
                    <i class=\"fas fa-download\"></i>
                </button>
            </div>
        </div>

        <!-- Section Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-3\">
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-search\"></i> Recherche
                        </label>
                        <input type=\"text\" id=\"searchInput\" class=\"form-control\" 
                               placeholder=\"Nom de l'entreprise...\" value=\"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 378, $this->source); })()), "search", [], "any", false, false, false, 378), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-chart-line\"></i> Plan
                        </label>
                        <select id=\"planFilter\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"trial\" ";
        // line 388
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 388, $this->source); })()), "plan", [], "any", false, false, false, 388) == "trial")) ? ("selected") : (""));
        yield ">Essai</option>
                            <option value=\"freemium\" ";
        // line 389
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 389, $this->source); })()), "plan", [], "any", false, false, false, 389) == "freemium")) ? ("selected") : (""));
        yield ">Freemium</option>
                            <option value=\"basic\" ";
        // line 390
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 390, $this->source); })()), "plan", [], "any", false, false, false, 390) == "basic")) ? ("selected") : (""));
        yield ">Basic</option>
                            <option value=\"premium\" ";
        // line 391
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 391, $this->source); })()), "plan", [], "any", false, false, false, 391) == "premium")) ? ("selected") : (""));
        yield ">Premium</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-store\"></i> Type
                        </label>
                        <select id=\"companyTypeFilter\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 402
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyTypes"]) || array_key_exists("companyTypes", $context) ? $context["companyTypes"] : (function () { throw new RuntimeError('Variable "companyTypes" does not exist.', 402, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 403
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 403, $this->source); })()), "company_type", [], "any", false, false, false, 403) == $context["type"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["type"]), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        yield "                        </select>
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-filter\"></i> Statut
                        </label>
                        <select id=\"statusFilter\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 417
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 417, $this->source); })()), "status", [], "any", false, false, false, 417) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                            <option value=\"inactive\" ";
        // line 418
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 418, $this->source); })()), "status", [], "any", false, false, false, 418) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                            <option value=\"trial\" ";
        // line 419
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 419, $this->source); })()), "status", [], "any", false, false, false, 419) == "trial")) ? ("selected") : (""));
        yield ">En essai</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar\"></i> Période
                        </label>
                        <div class=\"d-flex gap-2\">
                            <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 429, $this->source); })()), "date_from", [], "any", false, false, false, 429), "html", null, true);
        yield "\">
                            <span class=\"align-self-center\">→</span>
                            <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 431, $this->source); })()), "date_to", [], "any", false, false, false, 431), "html", null, true);
        yield "\">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres actifs + Bouton Réinitialiser -->
        <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
            <div id=\"activeFilters\" class=\"d-flex gap-2 flex-wrap\"></div>
            <div id=\"resetButtonContainer\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-4 mb-4\">
            <div class=\"col-md-3\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Total entreprises</div>
                            <div class=\"kpi-value\" id=\"statTotal\">";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 451, $this->source); })()), "total", [], "any", false, false, false, 451), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-building\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"kpi-card success\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Entreprises actives</div>
                            <div class=\"kpi-value\" id=\"statActive\">";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 464, $this->source); })()), "active", [], "any", false, false, false, 464), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-check-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"kpi-card danger\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Entreprises inactives</div>
                            <div class=\"kpi-value\" id=\"statInactive\">";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 477, $this->source); })()), "inactive", [], "any", false, false, false, 477), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon danger\">
                            <i class=\"fas fa-ban\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Période d'essai</div>
                            <div class=\"kpi-value\" id=\"statTrial\">";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 490, $this->source); })()), "trial", [], "any", false, false, false, 490), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-hourglass-half\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques principaux -->
        <div class=\"row g-4\">
            <div class=\"col-lg-8\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <div>
                            <i class=\"fas fa-chart-line\"></i>
                            Évolution des inscriptions
                        </div>
                        <div class=\"d-flex gap-2\">
                            <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"changeChartPeriod('6')\">6 mois</button>
                            <button class=\"btn btn-sm btn-outline-secondary active\" onclick=\"changeChartPeriod('12')\">12 mois</button>
                            <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"changeChartPeriod('24')\">24 mois</button>
                        </div>
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"registrationsChart\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-pie\"></i>
                        Répartition par plan
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"plansChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-area\"></i>
                        Évolution des entreprises actives
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"activeEvolutionChart\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        Top 10 villes
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"geoChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <!-- Top entreprises (CA) avec pagination -->
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-trophy\"></i>
                        Classement - Chiffre d'affaires
                    </div>
                    <div class=\"ranking-list\" id=\"topRevenueList\">
                        ";
        // line 567
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 567, $this->source); })()), "items", [], "any", false, false, false, 567));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 568
            yield "                            <div class=\"ranking-item\" onclick=\"viewCompany(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 568), "html", null, true);
            yield ")\">
                                <div class=\"ranking-number ";
            // line 569
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 569) <= 3)) {
                yield "top-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 569), "html", null, true);
            }
            yield "\">
                                    ";
            // line 570
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 570, $this->source); })()), "page", [], "any", false, false, false, 570) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 570, $this->source); })()), "limit", [], "any", false, false, false, 570)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 570)), "html", null, true);
            yield "
                                </div>
                                <div class=\"ranking-info\">
                                    <div class=\"ranking-name\">";
            // line 573
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 573), "html", null, true);
            yield "</div>
                                    <div class=\"ranking-value\">
                                        ";
            // line 575
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "value", [], "any", false, false, false, 575), 0, ",", " "), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currency", [], "any", false, false, false, 575), "html", null, true);
            yield "
                                    </div>
                                </div>
                                <div>
                                    <span class=\"plan-badge-stat ";
            // line 579
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "plan_class", [], "any", false, false, false, 579), "html", null, true);
            yield "\">
                                        ";
            // line 580
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "plan_label", [], "any", false, false, false, 580), "html", null, true);
            yield "
                                    </span>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 584
        if (!$context['_iterated']) {
            // line 585
            yield "                            <div class=\"text-center py-4 text-muted\">
                                <i class=\"fas fa-chart-line fa-2x mb-2\"></i>
                                <p>Aucune donnée disponible</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        yield "                    </div>
                    
                    <!-- Pagination pour le CA -->
                    ";
        // line 593
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 593, $this->source); })()), "total_pages", [], "any", false, false, false, 593) > 1)) {
            // line 594
            yield "                    <div class=\"d-flex justify-content-between align-items-center mt-3 pt-2 border-top\">
                        <small class=\"text-muted\">
                            ";
            // line 596
            $context["start"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 596, $this->source); })()), "page", [], "any", false, false, false, 596) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 596, $this->source); })()), "limit", [], "any", false, false, false, 596)) + 1);
            // line 597
            yield "                            ";
            $context["end"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 597, $this->source); })()), "page", [], "any", false, false, false, 597) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 597, $this->source); })()), "limit", [], "any", false, false, false, 597));
            // line 598
            yield "                            ";
            if (((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 598, $this->source); })()) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 598, $this->source); })()), "total", [], "any", false, false, false, 598))) {
                // line 599
                yield "                                ";
                $context["end"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 599, $this->source); })()), "total", [], "any", false, false, false, 599);
                // line 600
                yield "                            ";
            }
            // line 601
            yield "                            Affichage de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 601, $this->source); })()), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 601, $this->source); })()), "html", null, true);
            yield " 
                            sur ";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 602, $this->source); })()), "total", [], "any", false, false, false, 602), "html", null, true);
            yield " entreprises
                        </small>
                        <div class=\"pagination-container\">
                            <nav>
                                <ul class=\"pagination pagination-sm mb-0\">
                                    ";
            // line 607
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 607, $this->source); })()), "page", [], "any", false, false, false, 607) > 1)) {
                // line 608
                yield "                                        <li class=\"page-item\">
                                            <button class=\"page-link\" onclick=\"changeRevenuePage(";
                // line 609
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 609, $this->source); })()), "page", [], "any", false, false, false, 609) - 1), "html", null, true);
                yield ")\">
                                                <i class=\"fas fa-chevron-left\"></i>
                                            </button>
                                        </li>
                                    ";
            }
            // line 614
            yield "                                    
                                    ";
            // line 615
            $context["startPage"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 615, $this->source); })()), "page", [], "any", false, false, false, 615) - 2);
            // line 616
            yield "                                    ";
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 616, $this->source); })()) < 1)) {
                // line 617
                yield "                                        ";
                $context["startPage"] = 1;
                // line 618
                yield "                                    ";
            }
            // line 619
            yield "                                    ";
            $context["endPage"] = ((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 619, $this->source); })()) + 4);
            // line 620
            yield "                                    ";
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 620, $this->source); })()) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 620, $this->source); })()), "total_pages", [], "any", false, false, false, 620))) {
                // line 621
                yield "                                        ";
                $context["endPage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 621, $this->source); })()), "total_pages", [], "any", false, false, false, 621);
                // line 622
                yield "                                        ";
                $context["startPage"] = ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 622, $this->source); })()) - 4);
                // line 623
                yield "                                        ";
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 623, $this->source); })()) < 1)) {
                    // line 624
                    yield "                                            ";
                    $context["startPage"] = 1;
                    // line 625
                    yield "                                        ";
                }
                // line 626
                yield "                                    ";
            }
            // line 627
            yield "                                    
                                    ";
            // line 628
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 628, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 628, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 629
                yield "                                        <li class=\"page-item ";
                if (($context["p"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 629, $this->source); })()), "page", [], "any", false, false, false, 629))) {
                    yield "active";
                }
                yield "\">
                                            <button class=\"page-link\" onclick=\"changeRevenuePage(";
                // line 630
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield ")\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "</button>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 633
            yield "                                    
                                    ";
            // line 634
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 634, $this->source); })()), "page", [], "any", false, false, false, 634) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 634, $this->source); })()), "total_pages", [], "any", false, false, false, 634))) {
                // line 635
                yield "                                        <li class=\"page-item\">
                                            <button class=\"page-link\" onclick=\"changeRevenuePage(";
                // line 636
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 636, $this->source); })()), "page", [], "any", false, false, false, 636) + 1), "html", null, true);
                yield ")\">
                                                <i class=\"fas fa-chevron-right\"></i>
                                            </button>
                                        </li>
                                    ";
            }
            // line 641
            yield "                                </ul>
                            </nav>
                        </div>
                    </div>
                    ";
        }
        // line 646
        yield "                </div>
            </div>

            <!-- Top entreprises (Commandes) avec pagination -->
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-shopping-cart\"></i>
                        Classement - Nombre de commandes
                    </div>
                    <div class=\"ranking-list\" id=\"topOrdersList\">
                        ";
        // line 657
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 657, $this->source); })()), "items", [], "any", false, false, false, 657));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 658
            yield "                            <div class=\"ranking-item\" onclick=\"viewCompany(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 658), "html", null, true);
            yield ")\">
                                <div class=\"ranking-number ";
            // line 659
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 659) <= 3)) {
                yield "top-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 659), "html", null, true);
            }
            yield "\">
                                    ";
            // line 660
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 660, $this->source); })()), "page", [], "any", false, false, false, 660) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 660, $this->source); })()), "limit", [], "any", false, false, false, 660)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 660)), "html", null, true);
            yield "
                                </div>
                                <div class=\"ranking-info\">
                                    <div class=\"ranking-name\">";
            // line 663
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 663), "html", null, true);
            yield "</div>
                                    <div class=\"ranking-value\">
                                        ";
            // line 665
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "value", [], "any", false, false, false, 665), 0, ",", " "), "html", null, true);
            yield " commandes
                                    </div>
                                </div>
                                <div>
                                    <span class=\"plan-badge-stat ";
            // line 669
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "plan_class", [], "any", false, false, false, 669), "html", null, true);
            yield "\">
                                        ";
            // line 670
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "plan_label", [], "any", false, false, false, 670), "html", null, true);
            yield "
                                    </span>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 674
        if (!$context['_iterated']) {
            // line 675
            yield "                            <div class=\"text-center py-4 text-muted\">
                                <i class=\"fas fa-shopping-cart fa-2x mb-2\"></i>
                                <p>Aucune donnée disponible</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 680
        yield "                    </div>
                    
                    <!-- Pagination pour les commandes -->
                    ";
        // line 683
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 683, $this->source); })()), "total_pages", [], "any", false, false, false, 683) > 1)) {
            // line 684
            yield "                    <div class=\"d-flex justify-content-between align-items-center mt-3 pt-2 border-top\">
                        <small class=\"text-muted\">
                            ";
            // line 686
            $context["start"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 686, $this->source); })()), "page", [], "any", false, false, false, 686) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 686, $this->source); })()), "limit", [], "any", false, false, false, 686)) + 1);
            // line 687
            yield "                            ";
            $context["end"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 687, $this->source); })()), "page", [], "any", false, false, false, 687) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 687, $this->source); })()), "limit", [], "any", false, false, false, 687));
            // line 688
            yield "                            ";
            if (((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 688, $this->source); })()) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 688, $this->source); })()), "total", [], "any", false, false, false, 688))) {
                // line 689
                yield "                                ";
                $context["end"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 689, $this->source); })()), "total", [], "any", false, false, false, 689);
                // line 690
                yield "                            ";
            }
            // line 691
            yield "                            Affichage de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 691, $this->source); })()), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 691, $this->source); })()), "html", null, true);
            yield " 
                            sur ";
            // line 692
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 692, $this->source); })()), "total", [], "any", false, false, false, 692), "html", null, true);
            yield " entreprises
                        </small>
                        <div class=\"pagination-container\">
                            <nav>
                                <ul class=\"pagination pagination-sm mb-0\">
                                    ";
            // line 697
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 697, $this->source); })()), "page", [], "any", false, false, false, 697) > 1)) {
                // line 698
                yield "                                        <li class=\"page-item\">
                                            <button class=\"page-link\" onclick=\"changeOrdersPage(";
                // line 699
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 699, $this->source); })()), "page", [], "any", false, false, false, 699) - 1), "html", null, true);
                yield ")\">
                                                <i class=\"fas fa-chevron-left\"></i>
                                            </button>
                                        </li>
                                    ";
            }
            // line 704
            yield "                                    
                                    ";
            // line 705
            $context["startPage"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 705, $this->source); })()), "page", [], "any", false, false, false, 705) - 2);
            // line 706
            yield "                                    ";
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 706, $this->source); })()) < 1)) {
                // line 707
                yield "                                        ";
                $context["startPage"] = 1;
                // line 708
                yield "                                    ";
            }
            // line 709
            yield "                                    ";
            $context["endPage"] = ((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 709, $this->source); })()) + 4);
            // line 710
            yield "                                    ";
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 710, $this->source); })()) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 710, $this->source); })()), "total_pages", [], "any", false, false, false, 710))) {
                // line 711
                yield "                                        ";
                $context["endPage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 711, $this->source); })()), "total_pages", [], "any", false, false, false, 711);
                // line 712
                yield "                                        ";
                $context["startPage"] = ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 712, $this->source); })()) - 4);
                // line 713
                yield "                                        ";
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 713, $this->source); })()) < 1)) {
                    // line 714
                    yield "                                            ";
                    $context["startPage"] = 1;
                    // line 715
                    yield "                                        ";
                }
                // line 716
                yield "                                    ";
            }
            // line 717
            yield "                                    
                                    ";
            // line 718
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 718, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 718, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 719
                yield "                                        <li class=\"page-item ";
                if (($context["p"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 719, $this->source); })()), "page", [], "any", false, false, false, 719))) {
                    yield "active";
                }
                yield "\">
                                            <button class=\"page-link\" onclick=\"changeOrdersPage(";
                // line 720
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield ")\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "</button>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 723
            yield "                                    
                                    ";
            // line 724
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 724, $this->source); })()), "page", [], "any", false, false, false, 724) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 724, $this->source); })()), "total_pages", [], "any", false, false, false, 724))) {
                // line 725
                yield "                                        <li class=\"page-item\">
                                            <button class=\"page-link\" onclick=\"changeOrdersPage(";
                // line 726
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 726, $this->source); })()), "page", [], "any", false, false, false, 726) + 1), "html", null, true);
                yield ")\">
                                                <i class=\"fas fa-chevron-right\"></i>
                                            </button>
                                        </li>
                                    ";
            }
            // line 731
            yield "                                </ul>
                            </nav>
                        </div>
                    </div>
                    ";
        }
        // line 736
        yield "                </div>
            </div>
        </div>

        <!-- Conversion Card -->
        <div class=\"row mt-4\">
            <div class=\"col-12\">
                <div class=\"conversion-card\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-8\">
                            <div class=\"conversion-label\">Taux de conversion (Essai → Payant)</div>
                            <div class=\"conversion-rate\" id=\"conversionRateLarge\">";
        // line 747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversion"]) || array_key_exists("conversion", $context) ? $context["conversion"] : (function () { throw new RuntimeError('Variable "conversion" does not exist.', 747, $this->source); })()), "rate", [], "any", false, false, false, 747), "html", null, true);
        yield "%</div>
                            <div class=\"mt-2\">
                                <span id=\"conversionTrial\">";
        // line 749
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversion"]) || array_key_exists("conversion", $context) ? $context["conversion"] : (function () { throw new RuntimeError('Variable "conversion" does not exist.', 749, $this->source); })()), "total_trial", [], "any", false, false, false, 749), "html", null, true);
        yield "</span> entreprises en essai,
                                <span id=\"convertedCount\">";
        // line 750
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversion"]) || array_key_exists("conversion", $context) ? $context["conversion"] : (function () { throw new RuntimeError('Variable "conversion" does not exist.', 750, $this->source); })()), "converted", [], "any", false, false, false, 750), "html", null, true);
        yield "</span> sont passées à un plan payant
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"progress\" style=\"height: 12px; border-radius: 6px; background: rgba(255,255,255,0.2);\">
                                <div class=\"progress-bar bg-white\" 
                                     style=\"width: ";
        // line 756
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversion"]) || array_key_exists("conversion", $context) ? $context["conversion"] : (function () { throw new RuntimeError('Variable "conversion" does not exist.', 756, $this->source); })()), "rate", [], "any", false, false, false, 756), "html", null, true);
        yield "%; border-radius: 6px;\"
                                     id=\"conversionProgress\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 770
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

        // line 771
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
<script>
// Variables globales
let registrationsChart = null;
let plansChart = null;
let activeEvolutionChart = null;
let geoChart = null;
let currentPeriod = 12;

// Pagination
let currentRevenuePage = ";
        // line 782
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["top_revenue"] ?? null), "page", [], "any", true, true, false, 782)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_revenue"]) || array_key_exists("top_revenue", $context) ? $context["top_revenue"] : (function () { throw new RuntimeError('Variable "top_revenue" does not exist.', 782, $this->source); })()), "page", [], "any", false, false, false, 782), 1)) : (1)), "html", null, true);
        yield ";
let currentOrdersPage = ";
        // line 783
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["top_orders"] ?? null), "page", [], "any", true, true, false, 783)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_orders"]) || array_key_exists("top_orders", $context) ? $context["top_orders"] : (function () { throw new RuntimeError('Variable "top_orders" does not exist.', 783, $this->source); })()), "page", [], "any", false, false, false, 783), 1)) : (1)), "html", null, true);
        yield ";

let timelineData = ";
        // line 785
        yield json_encode((isset($context["timeline"]) || array_key_exists("timeline", $context) ? $context["timeline"] : (function () { throw new RuntimeError('Variable "timeline" does not exist.', 785, $this->source); })()));
        yield ";
let statsData = ";
        // line 786
        yield json_encode((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 786, $this->source); })()));
        yield ";
let geoData = ";
        // line 787
        yield json_encode((isset($context["geographic"]) || array_key_exists("geographic", $context) ? $context["geographic"] : (function () { throw new RuntimeError('Variable "geographic" does not exist.', 787, $this->source); })()));
        yield ";

// État du chargement
let isLoading = false;

document.addEventListener('DOMContentLoaded', function() {
    initCharts();
    updateActiveFilters();
});

function initCharts() {
    if (!timelineData.registrations || timelineData.registrations.length === 0) return;
    
    const registrationsCtx = document.getElementById('registrationsChart').getContext('2d');
    registrationsChart = new Chart(registrationsCtx, {
        type: 'line',
        data: {
            labels: timelineData.registrations.map(d => d.month),
            datasets: [{
                label: 'Nouvelles inscriptions',
                data: timelineData.registrations.map(d => d.count),
                borderColor: '#0463f1',
                backgroundColor: 'rgba(4, 99, 241, 0.05)',
                borderWidth: 3,
                fill: true,
                tension: 0.4,
                pointRadius: 4,
                pointHoverRadius: 6,
                pointBackgroundColor: '#0463f1',
                pointBorderColor: 'white'
            }]
        },
        options: getChartOptions('Nombre d\\'entreprises')
    });

    const plansCtx = document.getElementById('plansChart').getContext('2d');
    plansChart = new Chart(plansCtx, {
        type: 'doughnut',
        data: {
            labels: ['Premium', 'Basic', 'Freemium', 'Essai'],
            datasets: [{
                data: [statsData.plans.premium, statsData.plans.basic, statsData.plans.freemium, statsData.plans.trial],
                backgroundColor: ['#8b5cf6', '#0463f1', '#64748b', '#f59e0b'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    const activeCtx = document.getElementById('activeEvolutionChart').getContext('2d');
    activeEvolutionChart = new Chart(activeCtx, {
        type: 'line',
        data: {
            labels: timelineData.active_evolution.map(d => d.month),
            datasets: [{
                label: 'Entreprises actives',
                data: timelineData.active_evolution.map(d => d.active),
                borderColor: '#10b981',
                backgroundColor: 'rgba(16, 185, 129, 0.05)',
                borderWidth: 3,
                fill: true,
                tension: 0.4
            }]
        },
        options: getChartOptions('Nombre d\\'entreprises actives')
    });

    if (geoData && geoData.length > 0) {
        const geoCtx = document.getElementById('geoChart').getContext('2d');
        geoChart = new Chart(geoCtx, {
            type: 'bar',
            data: {
                labels: geoData.map(d => d.city),
                datasets: [{
                    label: 'Nombre d\\'entreprises',
                    data: geoData.map(d => d.count),
                    backgroundColor: 'rgba(4, 99, 241, 0.7)',
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, grid: { display: true } },
                    x: { ticks: { autoSkip: true, maxRotation: 45 } }
                }
            }
        });
    }
}

function getChartOptions(yLabel) {
    return {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { tooltip: { mode: 'index', intersect: false }, legend: { position: 'top' } },
        scales: {
            y: { beginAtZero: true, title: { display: true, text: yLabel }, grid: { display: true } },
            x: { title: { display: true, text: 'Mois' }, grid: { display: false } }
        }
    };
}

function showButtonLoading(button) {
    if (!button) return;
    button.classList.add('btn-loading');
    const originalText = button.innerHTML;
    button.setAttribute('data-original-text', originalText);
    button.innerHTML = '<span class=\"btn-text\">Chargement...</span>';
}

function hideButtonLoading(button) {
    if (!button) return;
    button.classList.remove('btn-loading');
    const originalText = button.getAttribute('data-original-text');
    if (originalText) {
        button.innerHTML = originalText;
    }
}

function changeRevenuePage(page) {
    currentRevenuePage = page;
    applyFilters();
}

function changeOrdersPage(page) {
    currentOrdersPage = page;
    applyFilters();
}

async function applyFilters() {
    if (isLoading) return;
    isLoading = true;
    
    const applyBtn = document.getElementById('applyBtn');
    showButtonLoading(applyBtn);
    
    const params = new URLSearchParams();
    const search = document.getElementById('searchInput').value.trim();
    const plan = document.getElementById('planFilter').value;
    const companyType = document.getElementById('companyTypeFilter').value;
    const status = document.getElementById('statusFilter').value;
    const dateFrom = document.getElementById('dateFrom').value;
    const dateTo = document.getElementById('dateTo').value;
    
    if (search) params.append('search', search);
    if (plan) params.append('plan', plan);
    if (companyType) params.append('company_type', companyType);
    if (status) params.append('status', status);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    
    params.append('revenue_page', currentRevenuePage);
    params.append('orders_page', currentOrdersPage);
    
    try {
        const response = await fetch(`/super-admin/statistics/data?\${params.toString()}`);
        if (!response.ok) {
            throw new Error(`HTTP error! status: \${response.status}`);
        }
        const data = await response.json();
        updateDashboard(data);
        updateActiveFilters();
    } catch (error) {
        console.error('Erreur:', error);
        showNotification('Erreur lors du chargement des données: ' + error.message, 'error');
    } finally {
        hideButtonLoading(applyBtn);
        isLoading = false;
    }
}

function updateDashboard(data) {
    // Mettre à jour les KPI
    if (data.stats) {
        document.getElementById('statTotal').textContent = data.stats.total;
        document.getElementById('statActive').textContent = data.stats.active;
        document.getElementById('statInactive').textContent = data.stats.inactive;
        document.getElementById('statTrial').textContent = data.stats.trial;
    }
    
    if (data.conversion) {
        document.getElementById('conversionRateLarge').textContent = data.conversion.rate + '%';
        document.getElementById('conversionTrial').textContent = data.conversion.total_trial;
        document.getElementById('convertedCount').textContent = data.conversion.converted;
        const progressBar = document.getElementById('conversionProgress');
        if (progressBar) progressBar.style.width = data.conversion.rate + '%';
    }
    
    // Mettre à jour les graphiques
    if (registrationsChart && data.timeline && data.timeline.registrations) {
        registrationsChart.data.labels = data.timeline.registrations.map(d => d.month);
        registrationsChart.data.datasets[0].data = data.timeline.registrations.map(d => d.count);
        registrationsChart.update();
    }
    
    if (plansChart && data.stats && data.stats.plans) {
        plansChart.data.datasets[0].data = [
            data.stats.plans.premium, 
            data.stats.plans.basic, 
            data.stats.plans.freemium, 
            data.stats.plans.trial
        ];
        plansChart.update();
    }
    
    if (activeEvolutionChart && data.timeline && data.timeline.active_evolution) {
        activeEvolutionChart.data.labels = data.timeline.active_evolution.map(d => d.month);
        activeEvolutionChart.data.datasets[0].data = data.timeline.active_evolution.map(d => d.active);
        activeEvolutionChart.update();
    }
    
    // Mettre à jour les rankings
    if (data.top_revenue) {
        updateRankingList('topRevenueList', data.top_revenue.items, data.top_revenue);
    }
    if (data.top_orders) {
        updateRankingList('topOrdersList', data.top_orders.items, data.top_orders);
    }
    
    // Mettre à jour le graphique géographique
    if (geoChart && data.geographic && data.geographic.length > 0) {
        geoChart.data.labels = data.geographic.map(d => d.city);
        geoChart.data.datasets[0].data = data.geographic.map(d => d.count);
        geoChart.update();
    }
}

function updateRankingList(elementId, items, paginationData) {
    const container = document.getElementById(elementId);
    if (!container) return;
    
    if (!items || items.length === 0) {
        container.innerHTML = `
            <div class=\"text-center py-4 text-muted\">
                <i class=\"fas fa-chart-line fa-2x mb-2\"></i>
                <p>Aucune donnée disponible</p>
            </div>
        `;
        return;
    }
    
    container.innerHTML = items.map((company, index) => {
        const globalRank = ((paginationData.page - 1) * paginationData.limit) + index + 1;
        const isTop3 = globalRank <= 3;
        return `
            <div class=\"ranking-item\" onclick=\"viewCompany(\${company.id})\">
                <div class=\"ranking-number \${isTop3 ? `top-\${globalRank}` : ''}\">
                    \${globalRank}
                </div>
                <div class=\"ranking-info\">
                    <div class=\"ranking-name\">\${escapeHtml(company.name)}</div>
                    <div class=\"ranking-value\">
                        \${formatNumber(company.value)} \${company.currency || (elementId === 'topRevenueList' ? 'FCFA' : 'commandes')}
                    </div>
                </div>
                <div>
                    <span class=\"plan-badge-stat \${company.plan_class}\">
                        \${company.plan_label}
                    </span>
                </div>
            </div>
        `;
    }).join('');
}

function updateActiveFilters() {
    const search = document.getElementById('searchInput').value.trim();
    const plan = document.getElementById('planFilter').value;
    const companyType = document.getElementById('companyTypeFilter').value;
    const status = document.getElementById('statusFilter').value;
    const dateFrom = document.getElementById('dateFrom').value;
    const dateTo = document.getElementById('dateTo').value;
    
    const container = document.getElementById('activeFilters');
    const resetContainer = document.getElementById('resetButtonContainer');
    const activeFilters = [];
    
    if (search) activeFilters.push({ key: 'search', label: `Recherche: \${search}` });
    if (plan) activeFilters.push({ key: 'plan', label: `Plan: \${plan}` });
    if (companyType) activeFilters.push({ key: 'company_type', label: `Type: \${companyType}` });
    if (status) activeFilters.push({ key: 'status', label: `Statut: \${status === 'active' ? 'Actives' : (status === 'inactive' ? 'Inactives' : 'Essai')}` });
    if (dateFrom || dateTo) activeFilters.push({ key: 'date', label: `Période: \${dateFrom || '...'} → \${dateTo || '...'}` });
    
    if (activeFilters.length === 0) {
        container.innerHTML = '';
        resetContainer.innerHTML = '';
        return;
    }
    
    container.innerHTML = activeFilters.map(filter => `
        <span class=\"filter-badge-active\" onclick=\"removeFilter('\${filter.key}')\">
            <i class=\"fas fa-filter me-1\"></i>
            \${filter.label}
            <i class=\"fas fa-times ms-2\"></i>
        </span>
    `).join('');
    
    resetContainer.innerHTML = `
        <button class=\"btn btn-sm btn-outline-danger\" onclick=\"resetAllFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Réinitialiser
        </button>
    `;
}

function removeFilter(key) {
    if (key === 'date') {
        document.getElementById('dateFrom').value = '';
        document.getElementById('dateTo').value = '';
    } else if (key === 'search') {
        document.getElementById('searchInput').value = '';
    } else if (key === 'plan') {
        document.getElementById('planFilter').value = '';
    } else if (key === 'company_type') {
        document.getElementById('companyTypeFilter').value = '';
    } else if (key === 'status') {
        document.getElementById('statusFilter').value = '';
    }
    currentRevenuePage = 1;
    currentOrdersPage = 1;
    applyFilters();
}

function resetAllFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('planFilter').value = '';
    document.getElementById('companyTypeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('dateFrom').value = '';
    document.getElementById('dateTo').value = '';
    currentRevenuePage = 1;
    currentOrdersPage = 1;
    applyFilters();
}

function refreshData() {
    applyFilters();
}

function exportData() {
    const params = new URLSearchParams();
    const search = document.getElementById('searchInput').value.trim();
    const plan = document.getElementById('planFilter').value;
    const companyType = document.getElementById('companyTypeFilter').value;
    const status = document.getElementById('statusFilter').value;
    const dateFrom = document.getElementById('dateFrom').value;
    const dateTo = document.getElementById('dateTo').value;
    
    if (search) params.append('search', search);
    if (plan) params.append('plan', plan);
    if (companyType) params.append('company_type', companyType);
    if (status) params.append('status', status);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    
    window.location.href = `/super-admin/statistics/export?\${params.toString()}`;
}

function viewCompany(companyId) {
    window.location.href = `/super-admin/hma-service/\${companyId}`;
}

function changeChartPeriod(months) {
    currentPeriod = months;
    applyFilters();
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = 'notification-toast';
    const icon = type === 'success' ? 'check-circle' : 'exclamation-circle';
    notification.innerHTML = `<i class=\"fas fa-\${icon} me-2\"></i>\${message}`;
    document.body.appendChild(notification);
    setTimeout(() => notification.remove(), 3000);
}

function formatNumber(num) {
    if (num >= 1000000) return (num / 1000000).toFixed(1) + 'M';
    if (num >= 1000) return (num / 1000).toFixed(1) + 'k';
    return num.toString();
}

function escapeHtml(str) {
    if (!str) return '';
    return str.replace(/[&<>]/g, function(m) {
        if (m === '&') return '&amp;';
        if (m === '<') return '&lt;';
        if (m === '>') return '&gt;';
        return m;
    });
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
        return "super_admin/statistics/index.html.twig";
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
        return array (  1299 => 787,  1295 => 786,  1291 => 785,  1286 => 783,  1282 => 782,  1268 => 771,  1255 => 770,  1231 => 756,  1222 => 750,  1218 => 749,  1213 => 747,  1200 => 736,  1193 => 731,  1185 => 726,  1182 => 725,  1180 => 724,  1177 => 723,  1166 => 720,  1159 => 719,  1155 => 718,  1152 => 717,  1149 => 716,  1146 => 715,  1143 => 714,  1140 => 713,  1137 => 712,  1134 => 711,  1131 => 710,  1128 => 709,  1125 => 708,  1122 => 707,  1119 => 706,  1117 => 705,  1114 => 704,  1106 => 699,  1103 => 698,  1101 => 697,  1093 => 692,  1086 => 691,  1083 => 690,  1080 => 689,  1077 => 688,  1074 => 687,  1072 => 686,  1068 => 684,  1066 => 683,  1061 => 680,  1051 => 675,  1049 => 674,  1032 => 670,  1028 => 669,  1021 => 665,  1016 => 663,  1010 => 660,  1003 => 659,  998 => 658,  980 => 657,  967 => 646,  960 => 641,  952 => 636,  949 => 635,  947 => 634,  944 => 633,  933 => 630,  926 => 629,  922 => 628,  919 => 627,  916 => 626,  913 => 625,  910 => 624,  907 => 623,  904 => 622,  901 => 621,  898 => 620,  895 => 619,  892 => 618,  889 => 617,  886 => 616,  884 => 615,  881 => 614,  873 => 609,  870 => 608,  868 => 607,  860 => 602,  853 => 601,  850 => 600,  847 => 599,  844 => 598,  841 => 597,  839 => 596,  835 => 594,  833 => 593,  828 => 590,  818 => 585,  816 => 584,  799 => 580,  795 => 579,  786 => 575,  781 => 573,  775 => 570,  768 => 569,  763 => 568,  745 => 567,  665 => 490,  649 => 477,  633 => 464,  617 => 451,  594 => 431,  589 => 429,  576 => 419,  572 => 418,  568 => 417,  556 => 407,  547 => 404,  540 => 403,  536 => 402,  522 => 391,  518 => 390,  514 => 389,  510 => 388,  497 => 378,  458 => 341,  445 => 340,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/statistics/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Tableau de bord - Statistiques Globales{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary: #0463f1;
        --primary-dark: #0350c4;
        --success: #10b981;
        --danger: #ef4444;
        --warning: #f59e0b;
        --info: #0ea5e9;
        --purple: #8b5cf6;
        --dark: #1e293b;
    }

    .stat-dashboard {
        background: #f1f5f9;
        min-height: 100vh;
    }

    /* Cartes KPI */
    .kpi-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    
    .kpi-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 25px -12px rgba(0,0,0,0.1);
    }
    
    .kpi-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
    }
    
    .kpi-card.primary::before { background: linear-gradient(90deg, var(--primary), var(--purple)); }
    .kpi-card.success::before { background: linear-gradient(90deg, var(--success), #34d399); }
    .kpi-card.danger::before { background: linear-gradient(90deg, var(--danger), #f87171); }
    .kpi-card.warning::before { background: linear-gradient(90deg, var(--warning), #fbbf24); }
    
    .kpi-icon {
        width: 48px;
        height: 48px;
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    
    .kpi-icon.primary { background: rgba(4, 99, 241, 0.1); color: var(--primary); }
    .kpi-icon.success { background: rgba(16, 185, 129, 0.1); color: var(--success); }
    .kpi-icon.danger { background: rgba(239, 68, 68, 0.1); color: var(--danger); }
    .kpi-icon.warning { background: rgba(245, 158, 11, 0.1); color: var(--warning); }
    
    .kpi-value {
        font-size: 2rem;
        font-weight: 800;
        line-height: 1.2;
        margin-top: 0.5rem;
    }
    
    .kpi-label {
        color: #64748b;
        font-size: 0.875rem;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Cartes graphiques */
    .chart-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .chart-card:hover {
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
    }
    
    .chart-title {
        font-size: 1.125rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .chart-title i {
        color: var(--primary);
        margin-right: 0.5rem;
    }
    
    .chart-container {
        position: relative;
        height: 300px;
    }

    /* Section filtres */
    .filters-section {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    
    .filter-group {
        margin-bottom: 1rem;
    }
    
    .filter-label {
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748b;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.75rem;
        justify-content: flex-end;
        align-items: center;
    }
    
    .filter-badge-active {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.25rem 0.75rem;
        background: #f1f5f9;
        border-radius: 2rem;
        font-size: 0.75rem;
        cursor: pointer;
        transition: all 0.2s;
    }
    
    .filter-badge-active:hover {
        background: #e2e8f0;
    }

    /* Ranking */
    .ranking-list {
        max-height: 400px;
        overflow-y: auto;
    }
    
    .ranking-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.75rem;
        border-radius: 1rem;
        transition: all 0.2s;
        cursor: pointer;
    }
    
    .ranking-item:hover {
        background: #f8fafc;
    }
    
    .ranking-number {
        width: 32px;
        height: 32px;
        background: #f1f5f9;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.875rem;
    }
    
    .ranking-number.top-1 { background: linear-gradient(135deg, #f59e0b, #d97706); color: white; }
    .ranking-number.top-2 { background: linear-gradient(135deg, #94a3b8, #64748b); color: white; }
    .ranking-number.top-3 { background: linear-gradient(135deg, #cd7b3a, #b45309); color: white; }
    
    .ranking-info {
        flex: 1;
    }
    
    .ranking-name {
        font-weight: 600;
        font-size: 0.875rem;
    }
    
    .ranking-value {
        font-size: 0.75rem;
        color: #64748b;
    }
    
    /* Badges des plans */
    .plan-badge-stat {
        font-size: 0.65rem;
        padding: 0.3rem 0.75rem;
        border-radius: 2rem;
        font-weight: 600;
        color: white !important;
        display: inline-block;
        text-transform: capitalize;
        letter-spacing: 0.3px;
    }
    
    .plan-badge-stat.trial { background: linear-gradient(135deg, #f59e0b, #d97706); color: white !important; }
    .plan-badge-stat.freemium { background: linear-gradient(135deg, #64748b, #475569); color: white !important; }
    .plan-badge-stat.basic { background: linear-gradient(135deg, #0463f1, #0350c4); color: white !important; }
    .plan-badge-stat.premium { background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white !important; }

    /* Pagination */
    .pagination-container {
        margin-top: 0.5rem;
    }
    
    .pagination {
        margin-bottom: 0;
        gap: 0.25rem;
    }
    
    .page-link {
        border-radius: 0.5rem !important;
        border: none;
        padding: 0.4rem 0.75rem;
        font-size: 0.75rem;
        color: var(--dark);
        background: #f1f5f9;
        transition: all 0.2s;
        cursor: pointer;
    }
    
    .page-link:hover {
        background: #e2e8f0;
        color: var(--primary);
    }
    
    .page-item.active .page-link {
        background: var(--primary);
        color: white;
    }
    
    /* Conversion card */
    .conversion-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1.5rem;
        padding: 1.5rem;
        color: white;
    }
    
    .conversion-rate {
        font-size: 3rem;
        font-weight: 800;
    }
    
    .conversion-label {
        font-size: 0.875rem;
        opacity: 0.9;
    }
    
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.5rem; }
        .chart-container { height: 250px; }
        .kpi-card { padding: 1rem; }
        .action-buttons { margin-top: 1rem; justify-content: flex-start; }
    }
    
    .notification-toast {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 10000;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background: var(--success);
        color: white;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
        animation: slideIn 0.3s ease;
    }
    
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    
    /* Spinner sur les boutons */
    .btn-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.7;
    }
    
    .btn-loading .btn-text {
        visibility: hidden;
    }
    
    .btn-loading::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 16px;
        height: 16px;
        margin: -8px 0 0 -8px;
        border: 2px solid rgba(255,255,255,0.3);
        border-top-color: white;
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
    }
    
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"stat-dashboard py-4\">
    <div class=\"container-fluid px-4\">
        
        <!-- En-tête avec boutons à droite -->
        <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
            <div>
                <h1 class=\"h2 fw-bold mb-1\">
                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                    Tableau de bord global
                </h1>
                <p class=\"text-muted mb-0\">
                    <i class=\"fas fa-calendar-alt me-1\"></i>
                    Vue d'ensemble de toutes les entreprises sur la plateforme
                </p>
            </div>
            <div class=\"action-buttons\" id=\"actionButtons\">
                <button class=\"btn btn-primary\" onclick=\"applyFilters()\" id=\"applyBtn\">
                    <i class=\"fas fa-search me-1\"></i> Appliquer les filtres
                </button>
                <button class=\"btn btn-outline-secondary\" onclick=\"refreshData()\" title=\"Actualiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </button>
                <button class=\"btn btn-outline-success\" onclick=\"exportData()\" title=\"Exporter\">
                    <i class=\"fas fa-download\"></i>
                </button>
            </div>
        </div>

        <!-- Section Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-3\">
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-search\"></i> Recherche
                        </label>
                        <input type=\"text\" id=\"searchInput\" class=\"form-control\" 
                               placeholder=\"Nom de l'entreprise...\" value=\"{{ filters.search }}\">
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-chart-line\"></i> Plan
                        </label>
                        <select id=\"planFilter\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"trial\" {{ filters.plan == 'trial' ? 'selected' : '' }}>Essai</option>
                            <option value=\"freemium\" {{ filters.plan == 'freemium' ? 'selected' : '' }}>Freemium</option>
                            <option value=\"basic\" {{ filters.plan == 'basic' ? 'selected' : '' }}>Basic</option>
                            <option value=\"premium\" {{ filters.plan == 'premium' ? 'selected' : '' }}>Premium</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-store\"></i> Type
                        </label>
                        <select id=\"companyTypeFilter\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            {% for type in companyTypes %}
                                <option value=\"{{ type }}\" {{ filters.company_type == type ? 'selected' : '' }}>
                                    {{ type|capitalize }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-filter\"></i> Statut
                        </label>
                        <select id=\"statusFilter\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ filters.status == 'active' ? 'selected' : '' }}>Actives</option>
                            <option value=\"inactive\" {{ filters.status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                            <option value=\"trial\" {{ filters.status == 'trial' ? 'selected' : '' }}>En essai</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar\"></i> Période
                        </label>
                        <div class=\"d-flex gap-2\">
                            <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"{{ filters.date_from }}\">
                            <span class=\"align-self-center\">→</span>
                            <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"{{ filters.date_to }}\">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres actifs + Bouton Réinitialiser -->
        <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
            <div id=\"activeFilters\" class=\"d-flex gap-2 flex-wrap\"></div>
            <div id=\"resetButtonContainer\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-4 mb-4\">
            <div class=\"col-md-3\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Total entreprises</div>
                            <div class=\"kpi-value\" id=\"statTotal\">{{ stats.total }}</div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-building\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"kpi-card success\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Entreprises actives</div>
                            <div class=\"kpi-value\" id=\"statActive\">{{ stats.active }}</div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-check-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"kpi-card danger\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Entreprises inactives</div>
                            <div class=\"kpi-value\" id=\"statInactive\">{{ stats.inactive }}</div>
                        </div>
                        <div class=\"kpi-icon danger\">
                            <i class=\"fas fa-ban\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Période d'essai</div>
                            <div class=\"kpi-value\" id=\"statTrial\">{{ stats.trial }}</div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-hourglass-half\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques principaux -->
        <div class=\"row g-4\">
            <div class=\"col-lg-8\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <div>
                            <i class=\"fas fa-chart-line\"></i>
                            Évolution des inscriptions
                        </div>
                        <div class=\"d-flex gap-2\">
                            <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"changeChartPeriod('6')\">6 mois</button>
                            <button class=\"btn btn-sm btn-outline-secondary active\" onclick=\"changeChartPeriod('12')\">12 mois</button>
                            <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"changeChartPeriod('24')\">24 mois</button>
                        </div>
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"registrationsChart\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-pie\"></i>
                        Répartition par plan
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"plansChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-area\"></i>
                        Évolution des entreprises actives
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"activeEvolutionChart\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        Top 10 villes
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"geoChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <!-- Top entreprises (CA) avec pagination -->
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-trophy\"></i>
                        Classement - Chiffre d'affaires
                    </div>
                    <div class=\"ranking-list\" id=\"topRevenueList\">
                        {% for company in top_revenue.items %}
                            <div class=\"ranking-item\" onclick=\"viewCompany({{ company.id }})\">
                                <div class=\"ranking-number {% if loop.index <= 3 %}top-{{ loop.index }}{% endif %}\">
                                    {{ ((top_revenue.page - 1) * top_revenue.limit) + loop.index }}
                                </div>
                                <div class=\"ranking-info\">
                                    <div class=\"ranking-name\">{{ company.name }}</div>
                                    <div class=\"ranking-value\">
                                        {{ company.value|number_format(0, ',', ' ') }} {{ company.currency }}
                                    </div>
                                </div>
                                <div>
                                    <span class=\"plan-badge-stat {{ company.plan_class }}\">
                                        {{ company.plan_label }}
                                    </span>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"text-center py-4 text-muted\">
                                <i class=\"fas fa-chart-line fa-2x mb-2\"></i>
                                <p>Aucune donnée disponible</p>
                            </div>
                        {% endfor %}
                    </div>
                    
                    <!-- Pagination pour le CA -->
                    {% if top_revenue.total_pages > 1 %}
                    <div class=\"d-flex justify-content-between align-items-center mt-3 pt-2 border-top\">
                        <small class=\"text-muted\">
                            {% set start = ((top_revenue.page - 1) * top_revenue.limit) + 1 %}
                            {% set end = top_revenue.page * top_revenue.limit %}
                            {% if end > top_revenue.total %}
                                {% set end = top_revenue.total %}
                            {% endif %}
                            Affichage de {{ start }} à {{ end }} 
                            sur {{ top_revenue.total }} entreprises
                        </small>
                        <div class=\"pagination-container\">
                            <nav>
                                <ul class=\"pagination pagination-sm mb-0\">
                                    {% if top_revenue.page > 1 %}
                                        <li class=\"page-item\">
                                            <button class=\"page-link\" onclick=\"changeRevenuePage({{ top_revenue.page - 1 }})\">
                                                <i class=\"fas fa-chevron-left\"></i>
                                            </button>
                                        </li>
                                    {% endif %}
                                    
                                    {% set startPage = top_revenue.page - 2 %}
                                    {% if startPage < 1 %}
                                        {% set startPage = 1 %}
                                    {% endif %}
                                    {% set endPage = startPage + 4 %}
                                    {% if endPage > top_revenue.total_pages %}
                                        {% set endPage = top_revenue.total_pages %}
                                        {% set startPage = endPage - 4 %}
                                        {% if startPage < 1 %}
                                            {% set startPage = 1 %}
                                        {% endif %}
                                    {% endif %}
                                    
                                    {% for p in startPage..endPage %}
                                        <li class=\"page-item {% if p == top_revenue.page %}active{% endif %}\">
                                            <button class=\"page-link\" onclick=\"changeRevenuePage({{ p }})\">{{ p }}</button>
                                        </li>
                                    {% endfor %}
                                    
                                    {% if top_revenue.page < top_revenue.total_pages %}
                                        <li class=\"page-item\">
                                            <button class=\"page-link\" onclick=\"changeRevenuePage({{ top_revenue.page + 1 }})\">
                                                <i class=\"fas fa-chevron-right\"></i>
                                            </button>
                                        </li>
                                    {% endif %}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>

            <!-- Top entreprises (Commandes) avec pagination -->
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-shopping-cart\"></i>
                        Classement - Nombre de commandes
                    </div>
                    <div class=\"ranking-list\" id=\"topOrdersList\">
                        {% for company in top_orders.items %}
                            <div class=\"ranking-item\" onclick=\"viewCompany({{ company.id }})\">
                                <div class=\"ranking-number {% if loop.index <= 3 %}top-{{ loop.index }}{% endif %}\">
                                    {{ ((top_orders.page - 1) * top_orders.limit) + loop.index }}
                                </div>
                                <div class=\"ranking-info\">
                                    <div class=\"ranking-name\">{{ company.name }}</div>
                                    <div class=\"ranking-value\">
                                        {{ company.value|number_format(0, ',', ' ') }} commandes
                                    </div>
                                </div>
                                <div>
                                    <span class=\"plan-badge-stat {{ company.plan_class }}\">
                                        {{ company.plan_label }}
                                    </span>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"text-center py-4 text-muted\">
                                <i class=\"fas fa-shopping-cart fa-2x mb-2\"></i>
                                <p>Aucune donnée disponible</p>
                            </div>
                        {% endfor %}
                    </div>
                    
                    <!-- Pagination pour les commandes -->
                    {% if top_orders.total_pages > 1 %}
                    <div class=\"d-flex justify-content-between align-items-center mt-3 pt-2 border-top\">
                        <small class=\"text-muted\">
                            {% set start = ((top_orders.page - 1) * top_orders.limit) + 1 %}
                            {% set end = top_orders.page * top_orders.limit %}
                            {% if end > top_orders.total %}
                                {% set end = top_orders.total %}
                            {% endif %}
                            Affichage de {{ start }} à {{ end }} 
                            sur {{ top_orders.total }} entreprises
                        </small>
                        <div class=\"pagination-container\">
                            <nav>
                                <ul class=\"pagination pagination-sm mb-0\">
                                    {% if top_orders.page > 1 %}
                                        <li class=\"page-item\">
                                            <button class=\"page-link\" onclick=\"changeOrdersPage({{ top_orders.page - 1 }})\">
                                                <i class=\"fas fa-chevron-left\"></i>
                                            </button>
                                        </li>
                                    {% endif %}
                                    
                                    {% set startPage = top_orders.page - 2 %}
                                    {% if startPage < 1 %}
                                        {% set startPage = 1 %}
                                    {% endif %}
                                    {% set endPage = startPage + 4 %}
                                    {% if endPage > top_orders.total_pages %}
                                        {% set endPage = top_orders.total_pages %}
                                        {% set startPage = endPage - 4 %}
                                        {% if startPage < 1 %}
                                            {% set startPage = 1 %}
                                        {% endif %}
                                    {% endif %}
                                    
                                    {% for p in startPage..endPage %}
                                        <li class=\"page-item {% if p == top_orders.page %}active{% endif %}\">
                                            <button class=\"page-link\" onclick=\"changeOrdersPage({{ p }})\">{{ p }}</button>
                                        </li>
                                    {% endfor %}
                                    
                                    {% if top_orders.page < top_orders.total_pages %}
                                        <li class=\"page-item\">
                                            <button class=\"page-link\" onclick=\"changeOrdersPage({{ top_orders.page + 1 }})\">
                                                <i class=\"fas fa-chevron-right\"></i>
                                            </button>
                                        </li>
                                    {% endif %}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Conversion Card -->
        <div class=\"row mt-4\">
            <div class=\"col-12\">
                <div class=\"conversion-card\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-8\">
                            <div class=\"conversion-label\">Taux de conversion (Essai → Payant)</div>
                            <div class=\"conversion-rate\" id=\"conversionRateLarge\">{{ conversion.rate }}%</div>
                            <div class=\"mt-2\">
                                <span id=\"conversionTrial\">{{ conversion.total_trial }}</span> entreprises en essai,
                                <span id=\"convertedCount\">{{ conversion.converted }}</span> sont passées à un plan payant
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"progress\" style=\"height: 12px; border-radius: 6px; background: rgba(255,255,255,0.2);\">
                                <div class=\"progress-bar bg-white\" 
                                     style=\"width: {{ conversion.rate }}%; border-radius: 6px;\"
                                     id=\"conversionProgress\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
<script>
// Variables globales
let registrationsChart = null;
let plansChart = null;
let activeEvolutionChart = null;
let geoChart = null;
let currentPeriod = 12;

// Pagination
let currentRevenuePage = {{ top_revenue.page|default(1) }};
let currentOrdersPage = {{ top_orders.page|default(1) }};

let timelineData = {{ timeline|json_encode|raw }};
let statsData = {{ stats|json_encode|raw }};
let geoData = {{ geographic|json_encode|raw }};

// État du chargement
let isLoading = false;

document.addEventListener('DOMContentLoaded', function() {
    initCharts();
    updateActiveFilters();
});

function initCharts() {
    if (!timelineData.registrations || timelineData.registrations.length === 0) return;
    
    const registrationsCtx = document.getElementById('registrationsChart').getContext('2d');
    registrationsChart = new Chart(registrationsCtx, {
        type: 'line',
        data: {
            labels: timelineData.registrations.map(d => d.month),
            datasets: [{
                label: 'Nouvelles inscriptions',
                data: timelineData.registrations.map(d => d.count),
                borderColor: '#0463f1',
                backgroundColor: 'rgba(4, 99, 241, 0.05)',
                borderWidth: 3,
                fill: true,
                tension: 0.4,
                pointRadius: 4,
                pointHoverRadius: 6,
                pointBackgroundColor: '#0463f1',
                pointBorderColor: 'white'
            }]
        },
        options: getChartOptions('Nombre d\\'entreprises')
    });

    const plansCtx = document.getElementById('plansChart').getContext('2d');
    plansChart = new Chart(plansCtx, {
        type: 'doughnut',
        data: {
            labels: ['Premium', 'Basic', 'Freemium', 'Essai'],
            datasets: [{
                data: [statsData.plans.premium, statsData.plans.basic, statsData.plans.freemium, statsData.plans.trial],
                backgroundColor: ['#8b5cf6', '#0463f1', '#64748b', '#f59e0b'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    const activeCtx = document.getElementById('activeEvolutionChart').getContext('2d');
    activeEvolutionChart = new Chart(activeCtx, {
        type: 'line',
        data: {
            labels: timelineData.active_evolution.map(d => d.month),
            datasets: [{
                label: 'Entreprises actives',
                data: timelineData.active_evolution.map(d => d.active),
                borderColor: '#10b981',
                backgroundColor: 'rgba(16, 185, 129, 0.05)',
                borderWidth: 3,
                fill: true,
                tension: 0.4
            }]
        },
        options: getChartOptions('Nombre d\\'entreprises actives')
    });

    if (geoData && geoData.length > 0) {
        const geoCtx = document.getElementById('geoChart').getContext('2d');
        geoChart = new Chart(geoCtx, {
            type: 'bar',
            data: {
                labels: geoData.map(d => d.city),
                datasets: [{
                    label: 'Nombre d\\'entreprises',
                    data: geoData.map(d => d.count),
                    backgroundColor: 'rgba(4, 99, 241, 0.7)',
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, grid: { display: true } },
                    x: { ticks: { autoSkip: true, maxRotation: 45 } }
                }
            }
        });
    }
}

function getChartOptions(yLabel) {
    return {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { tooltip: { mode: 'index', intersect: false }, legend: { position: 'top' } },
        scales: {
            y: { beginAtZero: true, title: { display: true, text: yLabel }, grid: { display: true } },
            x: { title: { display: true, text: 'Mois' }, grid: { display: false } }
        }
    };
}

function showButtonLoading(button) {
    if (!button) return;
    button.classList.add('btn-loading');
    const originalText = button.innerHTML;
    button.setAttribute('data-original-text', originalText);
    button.innerHTML = '<span class=\"btn-text\">Chargement...</span>';
}

function hideButtonLoading(button) {
    if (!button) return;
    button.classList.remove('btn-loading');
    const originalText = button.getAttribute('data-original-text');
    if (originalText) {
        button.innerHTML = originalText;
    }
}

function changeRevenuePage(page) {
    currentRevenuePage = page;
    applyFilters();
}

function changeOrdersPage(page) {
    currentOrdersPage = page;
    applyFilters();
}

async function applyFilters() {
    if (isLoading) return;
    isLoading = true;
    
    const applyBtn = document.getElementById('applyBtn');
    showButtonLoading(applyBtn);
    
    const params = new URLSearchParams();
    const search = document.getElementById('searchInput').value.trim();
    const plan = document.getElementById('planFilter').value;
    const companyType = document.getElementById('companyTypeFilter').value;
    const status = document.getElementById('statusFilter').value;
    const dateFrom = document.getElementById('dateFrom').value;
    const dateTo = document.getElementById('dateTo').value;
    
    if (search) params.append('search', search);
    if (plan) params.append('plan', plan);
    if (companyType) params.append('company_type', companyType);
    if (status) params.append('status', status);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    
    params.append('revenue_page', currentRevenuePage);
    params.append('orders_page', currentOrdersPage);
    
    try {
        const response = await fetch(`/super-admin/statistics/data?\${params.toString()}`);
        if (!response.ok) {
            throw new Error(`HTTP error! status: \${response.status}`);
        }
        const data = await response.json();
        updateDashboard(data);
        updateActiveFilters();
    } catch (error) {
        console.error('Erreur:', error);
        showNotification('Erreur lors du chargement des données: ' + error.message, 'error');
    } finally {
        hideButtonLoading(applyBtn);
        isLoading = false;
    }
}

function updateDashboard(data) {
    // Mettre à jour les KPI
    if (data.stats) {
        document.getElementById('statTotal').textContent = data.stats.total;
        document.getElementById('statActive').textContent = data.stats.active;
        document.getElementById('statInactive').textContent = data.stats.inactive;
        document.getElementById('statTrial').textContent = data.stats.trial;
    }
    
    if (data.conversion) {
        document.getElementById('conversionRateLarge').textContent = data.conversion.rate + '%';
        document.getElementById('conversionTrial').textContent = data.conversion.total_trial;
        document.getElementById('convertedCount').textContent = data.conversion.converted;
        const progressBar = document.getElementById('conversionProgress');
        if (progressBar) progressBar.style.width = data.conversion.rate + '%';
    }
    
    // Mettre à jour les graphiques
    if (registrationsChart && data.timeline && data.timeline.registrations) {
        registrationsChart.data.labels = data.timeline.registrations.map(d => d.month);
        registrationsChart.data.datasets[0].data = data.timeline.registrations.map(d => d.count);
        registrationsChart.update();
    }
    
    if (plansChart && data.stats && data.stats.plans) {
        plansChart.data.datasets[0].data = [
            data.stats.plans.premium, 
            data.stats.plans.basic, 
            data.stats.plans.freemium, 
            data.stats.plans.trial
        ];
        plansChart.update();
    }
    
    if (activeEvolutionChart && data.timeline && data.timeline.active_evolution) {
        activeEvolutionChart.data.labels = data.timeline.active_evolution.map(d => d.month);
        activeEvolutionChart.data.datasets[0].data = data.timeline.active_evolution.map(d => d.active);
        activeEvolutionChart.update();
    }
    
    // Mettre à jour les rankings
    if (data.top_revenue) {
        updateRankingList('topRevenueList', data.top_revenue.items, data.top_revenue);
    }
    if (data.top_orders) {
        updateRankingList('topOrdersList', data.top_orders.items, data.top_orders);
    }
    
    // Mettre à jour le graphique géographique
    if (geoChart && data.geographic && data.geographic.length > 0) {
        geoChart.data.labels = data.geographic.map(d => d.city);
        geoChart.data.datasets[0].data = data.geographic.map(d => d.count);
        geoChart.update();
    }
}

function updateRankingList(elementId, items, paginationData) {
    const container = document.getElementById(elementId);
    if (!container) return;
    
    if (!items || items.length === 0) {
        container.innerHTML = `
            <div class=\"text-center py-4 text-muted\">
                <i class=\"fas fa-chart-line fa-2x mb-2\"></i>
                <p>Aucune donnée disponible</p>
            </div>
        `;
        return;
    }
    
    container.innerHTML = items.map((company, index) => {
        const globalRank = ((paginationData.page - 1) * paginationData.limit) + index + 1;
        const isTop3 = globalRank <= 3;
        return `
            <div class=\"ranking-item\" onclick=\"viewCompany(\${company.id})\">
                <div class=\"ranking-number \${isTop3 ? `top-\${globalRank}` : ''}\">
                    \${globalRank}
                </div>
                <div class=\"ranking-info\">
                    <div class=\"ranking-name\">\${escapeHtml(company.name)}</div>
                    <div class=\"ranking-value\">
                        \${formatNumber(company.value)} \${company.currency || (elementId === 'topRevenueList' ? 'FCFA' : 'commandes')}
                    </div>
                </div>
                <div>
                    <span class=\"plan-badge-stat \${company.plan_class}\">
                        \${company.plan_label}
                    </span>
                </div>
            </div>
        `;
    }).join('');
}

function updateActiveFilters() {
    const search = document.getElementById('searchInput').value.trim();
    const plan = document.getElementById('planFilter').value;
    const companyType = document.getElementById('companyTypeFilter').value;
    const status = document.getElementById('statusFilter').value;
    const dateFrom = document.getElementById('dateFrom').value;
    const dateTo = document.getElementById('dateTo').value;
    
    const container = document.getElementById('activeFilters');
    const resetContainer = document.getElementById('resetButtonContainer');
    const activeFilters = [];
    
    if (search) activeFilters.push({ key: 'search', label: `Recherche: \${search}` });
    if (plan) activeFilters.push({ key: 'plan', label: `Plan: \${plan}` });
    if (companyType) activeFilters.push({ key: 'company_type', label: `Type: \${companyType}` });
    if (status) activeFilters.push({ key: 'status', label: `Statut: \${status === 'active' ? 'Actives' : (status === 'inactive' ? 'Inactives' : 'Essai')}` });
    if (dateFrom || dateTo) activeFilters.push({ key: 'date', label: `Période: \${dateFrom || '...'} → \${dateTo || '...'}` });
    
    if (activeFilters.length === 0) {
        container.innerHTML = '';
        resetContainer.innerHTML = '';
        return;
    }
    
    container.innerHTML = activeFilters.map(filter => `
        <span class=\"filter-badge-active\" onclick=\"removeFilter('\${filter.key}')\">
            <i class=\"fas fa-filter me-1\"></i>
            \${filter.label}
            <i class=\"fas fa-times ms-2\"></i>
        </span>
    `).join('');
    
    resetContainer.innerHTML = `
        <button class=\"btn btn-sm btn-outline-danger\" onclick=\"resetAllFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Réinitialiser
        </button>
    `;
}

function removeFilter(key) {
    if (key === 'date') {
        document.getElementById('dateFrom').value = '';
        document.getElementById('dateTo').value = '';
    } else if (key === 'search') {
        document.getElementById('searchInput').value = '';
    } else if (key === 'plan') {
        document.getElementById('planFilter').value = '';
    } else if (key === 'company_type') {
        document.getElementById('companyTypeFilter').value = '';
    } else if (key === 'status') {
        document.getElementById('statusFilter').value = '';
    }
    currentRevenuePage = 1;
    currentOrdersPage = 1;
    applyFilters();
}

function resetAllFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('planFilter').value = '';
    document.getElementById('companyTypeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('dateFrom').value = '';
    document.getElementById('dateTo').value = '';
    currentRevenuePage = 1;
    currentOrdersPage = 1;
    applyFilters();
}

function refreshData() {
    applyFilters();
}

function exportData() {
    const params = new URLSearchParams();
    const search = document.getElementById('searchInput').value.trim();
    const plan = document.getElementById('planFilter').value;
    const companyType = document.getElementById('companyTypeFilter').value;
    const status = document.getElementById('statusFilter').value;
    const dateFrom = document.getElementById('dateFrom').value;
    const dateTo = document.getElementById('dateTo').value;
    
    if (search) params.append('search', search);
    if (plan) params.append('plan', plan);
    if (companyType) params.append('company_type', companyType);
    if (status) params.append('status', status);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    
    window.location.href = `/super-admin/statistics/export?\${params.toString()}`;
}

function viewCompany(companyId) {
    window.location.href = `/super-admin/hma-service/\${companyId}`;
}

function changeChartPeriod(months) {
    currentPeriod = months;
    applyFilters();
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = 'notification-toast';
    const icon = type === 'success' ? 'check-circle' : 'exclamation-circle';
    notification.innerHTML = `<i class=\"fas fa-\${icon} me-2\"></i>\${message}`;
    document.body.appendChild(notification);
    setTimeout(() => notification.remove(), 3000);
}

function formatNumber(num) {
    if (num >= 1000000) return (num / 1000000).toFixed(1) + 'M';
    if (num >= 1000) return (num / 1000).toFixed(1) + 'k';
    return num.toString();
}

function escapeHtml(str) {
    if (!str) return '';
    return str.replace(/[&<>]/g, function(m) {
        if (m === '&') return '&amp;';
        if (m === '<') return '&lt;';
        if (m === '>') return '&gt;';
        return m;
    });
}
</script>
{% endblock %}", "super_admin/statistics/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\statistics\\index.html.twig");
    }
}
