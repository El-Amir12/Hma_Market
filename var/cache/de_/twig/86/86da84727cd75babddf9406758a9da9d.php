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

/* super_admin/analysis_statistics/index.html.twig */
class __TwigTemplate_da70dec010577dd7bf174749fc7e0544 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_statistics/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_statistics/index.html.twig"));

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

        yield "Statistiques des analyses - Super Admin";
        
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
    .kpi-card.info::before { background: linear-gradient(90deg, var(--info), #38bdf8); }
    
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
    .kpi-icon.info { background: rgba(14, 165, 233, 0.1); color: var(--info); }
    
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
        flex-wrap: wrap;
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

    /* ========================================
       RESPONSIVE - FILTRES
    ======================================== */
    .filter-col {
        flex: 0 0 100% !important;
        max-width: 100% !important;
        width: 100% !important;
    }
    .filter-col-half {
        flex: 0 0 100% !important;
        max-width: 100% !important;
        width: 100% !important;
    }
    .filter-select {
        width: 100% !important;
        font-size: 0.7rem !important;
    }
    .filter-input {
        font-size: 0.7rem !important;
    }

    /* ========================================
       RESPONSIVE - MEDIA QUERIES
    ======================================== */
    
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.5rem; }
        .chart-container { height: 250px; }
        .kpi-card { padding: 1rem; }
        .action-buttons { margin-top: 1rem; justify-content: flex-start; }
        .filters-section { padding: 1rem; }
        .conversion-rate { font-size: 2rem; }
        
        .filter-col-half {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
    }
    
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        
        .filters-section { padding: 0.75rem; }
        .chart-card { padding: 0.75rem; margin-bottom: 0.75rem; }
        .kpi-value { font-size: 1.2rem; }
        .kpi-card { padding: 0.75rem; }
        .kpi-label { font-size: 0.65rem; }
        .kpi-icon { width: 36px; height: 36px; font-size: 1rem; }
        .chart-container { height: 200px; }
        .conversion-rate { font-size: 1.5rem; }
        .chart-title { font-size: 0.9rem; }
        .chart-title .btn-group .btn { font-size: 0.55rem; padding: 0.1rem 0.3rem; }
        
        .filter-col, .filter-col-half {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        
        .h1 { font-size: 1.2rem !important; }
        .h2 { font-size: 1rem !important; }
        .text-muted { font-size: 0.7rem !important; }
        .breadcrumb { font-size: 0.6rem !important; }
        
        .btn {
            font-size: 0.65rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .btn i {
            font-size: 0.65rem !important;
        }
        
        .action-buttons .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        
        .modal-dialog { margin: 0.5rem; }
        .modal-content { border-radius: 12px !important; }
        .modal-body { padding: 0.5rem !important; }
        .modal-footer { padding: 0.4rem !important; flex-wrap: wrap; }
        .modal-footer .btn { font-size: 0.65rem !important; padding: 0.15rem 0.3rem !important; }
        .modal-header { padding: 0.4rem 0.6rem !important; }
        .modal-title { font-size: 0.85rem !important; }
        
        .filter-badge-active { font-size: 0.6rem; padding: 0.15rem 0.5rem; }
        
        .progress { height: 8px !important; }
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
    
    .btn-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.7;
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

    // line 323
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

        // line 324
        yield "<div class=\"stat-dashboard py-3 py-md-4\">
    <div class=\"container-fluid px-2 px-md-4\">
        
        <!-- En-tête -->
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
            <div class=\"w-100 w-sm-auto\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-1\">
                        <li class=\"breadcrumb-item small\">
                            <a href=\"";
        // line 333
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active small\">
                            <i class=\"fas fa-chart-bar me-1\"></i> Statistiques analyses
                        </li>
                    </ol>
                </nav>
                <h1 class=\"h2 fw-bold mb-1\">
                    <i class=\"fas fa-chart-bar text-primary me-2\"></i>
                    <span class=\"d-none d-sm-inline\">Statistiques des analyses</span>
                    <span class=\"d-inline d-sm-none\">Statistiques analyses</span>
                </h1>
                <p class=\"text-muted mb-0 small d-none d-sm-block\">
                    <i class=\"fas fa-chart-pie me-1\"></i>
                    Analyse complète des performances des demandes d'analyse
                </p>
                <p class=\"text-muted mb-0 small d-block d-sm-none\">
                    Performances des demandes d'analyse
                </p>
            </div>
            <div class=\"action-buttons d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
                <button class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\" onclick=\"applyFilters()\" id=\"applyBtn\">
                    <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Appliquer</span>
                </button>
                <button class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-sm-grow-0\" onclick=\"refreshData()\" title=\"Actualiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </button>
                <button class=\"btn btn-outline-success btn-sm flex-grow-1 flex-sm-grow-0\" onclick=\"exportData()\" title=\"Exporter CSV\">
                    <i class=\"fas fa-download\"></i> <span class=\"d-none d-sm-inline\">Exporter</span>
                </button>
            </div>
        </div>

        <!-- Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-2 g-md-3 align-items-end\">
                <!-- Recherche - 100% sur mobile, 3 sur desktop -->
                <div class=\"col-12 col-md-3 filter-col\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-search\"></i> Recherche
                        </label>
                        <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-sm filter-input\" 
                               placeholder=\"Entreprise, n° demande...\" value=\"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 378, $this->source); })()), "search", [], "any", false, false, false, 378), "html", null, true);
        yield "\">
                    </div>
                </div>
                
                <!-- Type - 50% sur mobile, 2 sur desktop -->
                <div class=\"col-6 col-md-2 filter-col-half\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-tag\"></i> Type
                        </label>
                        <select id=\"typeFilter\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["analysisTypes"]) || array_key_exists("analysisTypes", $context) ? $context["analysisTypes"] : (function () { throw new RuntimeError('Variable "analysisTypes" does not exist.', 390, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 391
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 391, $this->source); })()), "type", [], "any", false, false, false, 391) == $context["type"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["type"]), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        yield "                        </select>
                    </div>
                </div>
                
                <!-- Statut - 50% sur mobile, 2 sur desktop -->
                <div class=\"col-6 col-md-2 filter-col-half\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-circle\"></i> Statut
                        </label>
                        <select id=\"statusFilter\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 407
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 407, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 408
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 408, $this->source); })()), "status", [], "any", false, false, false, 408) == $context["key"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        yield "                        </select>
                    </div>
                </div>
                
                <!-- Période - 50% sur mobile, 3 sur desktop -->
                <div class=\"col-6 col-md-3 filter-col-half\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar\"></i> Période
                        </label>
                        <div class=\"d-flex gap-1 gap-md-2\">
                            <input type=\"date\" id=\"dateFrom\" class=\"form-control form-control-sm filter-input\" value=\"";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 423, $this->source); })()), "date_from", [], "any", false, false, false, 423), "html", null, true);
        yield "\">
                            <span class=\"align-self-center\">→</span>
                            <input type=\"date\" id=\"dateTo\" class=\"form-control form-control-sm filter-input\" value=\"";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 425, $this->source); })()), "date_to", [], "any", false, false, false, 425), "html", null, true);
        yield "\">
                        </div>
                    </div>
                </div>
                
                <!-- Bouton Réinitialiser - 50% sur mobile, 2 sur desktop -->
                <div class=\"col-6 col-md-2 filter-col-half\">
                    <button class=\"btn btn-outline-secondary w-100\" onclick=\"resetFilters()\" style=\"font-size:0.75rem;\">
                        <i class=\"fas fa-undo-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Réinitialiser</span>
                    </button>
                </div>
            </div>
            
            <!-- Filtres actifs -->
            <div id=\"activeFilters\" class=\"d-flex gap-1 gap-md-2 flex-wrap mt-2 mt-md-3 pt-2 pt-md-3 border-top\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-2 g-md-4 mb-3 mb-md-4\">
            <div class=\"col-6 col-md-3\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Total demandes</div>
                            <div class=\"kpi-value\" id=\"statTotal\">";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 449)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 449, $this->source); })()), "total", [], "any", false, false, false, 449), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-file-alt\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"kpi-card success\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Terminées</div>
                            <div class=\"kpi-value\" id=\"statCompleted\">";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 462)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 462, $this->source); })()), "completed", [], "any", false, false, false, 462), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-check-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">En attente</div>
                            <div class=\"kpi-value\" id=\"statPending\">";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending", [], "any", true, true, false, 475)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 475, $this->source); })()), "pending", [], "any", false, false, false, 475), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-clock\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"kpi-card info\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Montant total</div>
                            <div class=\"kpi-value\" id=\"statTotalAmount\">";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_amount", [], "any", true, true, false, 488)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 488, $this->source); })()), "total_amount", [], "any", false, false, false, 488), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <small class=\"text-muted\" style=\"font-size:0.6rem;\">FCFA</small>
                        </div>
                        <div class=\"kpi-icon info\">
                            <i class=\"fas fa-money-bill-wave\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques -->
        <div class=\"row g-2 g-md-4\">
            <div class=\"col-12 col-lg-8\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <div class=\"small\">
                            <i class=\"fas fa-chart-line\"></i>
                            <span class=\"d-none d-sm-inline\">Évolution des demandes</span>
                            <span class=\"d-inline d-sm-none\">Évolution</span>
                        </div>
                        <div class=\"d-flex gap-1\">
                            <button class=\"btn btn-sm btn-outline-secondary active\" onclick=\"changeChartPeriod('6')\">6m</button>
                            <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"changeChartPeriod('12')\">12m</button>
                        </div>
                    </div>
                    <div class=\"chart-container\" style=\"height: 220px;\">
                        <canvas id=\"timelineChart\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-lg-4\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-pie\"></i>
                        <span class=\"d-none d-sm-inline\">Répartition par statut</span>
                        <span class=\"d-inline d-sm-none\">Statuts</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 220px;\">
                        <canvas id=\"statusChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-2 g-md-4 mt-2 mt-md-3\">
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-bar\"></i>
                        <span class=\"d-none d-sm-inline\">Répartition par type d'analyse</span>
                        <span class=\"d-inline d-sm-none\">Par type</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 220px;\">
                        <canvas id=\"typeChart\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-trophy\"></i>
                        <span class=\"d-none d-sm-inline\">Top 10 entreprises</span>
                        <span class=\"d-inline d-sm-none\">Top entreprises</span>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Entreprise</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">Demandes</th>
                                    <th class=\"text-end d-none d-md-table-cell\">Terminées</th>
                                    <th class=\"text-end\">Montant</th>
                                </tr>
                            </thead>
                            <tbody id=\"companyStatsList\">
                                ";
        // line 565
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["company_stats"]) || array_key_exists("company_stats", $context) ? $context["company_stats"] : (function () { throw new RuntimeError('Variable "company_stats" does not exist.', 565, $this->source); })()));
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
            // line 566
            yield "                                    <tr>
                                        <td>";
            // line 567
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 567), "html", null, true);
            yield "</td>
                                        <td class=\"small\">";
            // line 568
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "company_name", [], "any", true, true, false, 568)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "company_name", [], "any", false, false, false, 568), "N/A")) : ("N/A")), 0, 15), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "company_name", [], "any", false, false, false, 568)) > 15)) {
                yield "...";
            }
            yield "</td>
                                        <td class=\"text-end d-none d-sm-table-cell\">";
            // line 569
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "total_requests", [], "any", false, false, false, 569), "html", null, true);
            yield "</td>
                                        <td class=\"text-end d-none d-md-table-cell\">";
            // line 570
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "completed", [], "any", false, false, false, 570), "html", null, true);
            yield "</td>
                                        <td class=\"text-end small\">";
            // line 571
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "total_amount", [], "any", false, false, false, 571), 0, ",", " "), "html", null, true);
            yield "</td>
                                    </tr>
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
        // line 573
        if (!$context['_iterated']) {
            // line 574
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center text-muted py-3 small\">
                                            Aucune donnée disponible
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Taux de conversion -->
        <div class=\"row mt-3 mt-md-4\">
            <div class=\"col-12\">
                <div class=\"conversion-card p-3 p-md-4\">
                    <div class=\"row align-items-center g-2 g-md-3\">
                        <div class=\"col-12 col-md-8\">
                            <div class=\"conversion-label\" style=\"font-size:0.7rem;\">Taux de réussite des analyses</div>
                            <div class=\"conversion-rate\" id=\"conversionRate\" style=\"font-size:2rem;\">";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["conversion"] ?? null), "rate", [], "any", true, true, false, 594)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversion"]) || array_key_exists("conversion", $context) ? $context["conversion"] : (function () { throw new RuntimeError('Variable "conversion" does not exist.', 594, $this->source); })()), "rate", [], "any", false, false, false, 594), 0)) : (0)), "html", null, true);
        yield "%</div>
                            <div class=\"mt-1 small\" style=\"font-size:0.7rem;\">
                                <span id=\"conversionTotal\">";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["conversion"] ?? null), "total", [], "any", true, true, false, 596)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversion"]) || array_key_exists("conversion", $context) ? $context["conversion"] : (function () { throw new RuntimeError('Variable "conversion" does not exist.', 596, $this->source); })()), "total", [], "any", false, false, false, 596), 0)) : (0)), "html", null, true);
        yield "</span> demandes totales,
                                <span id=\"conversionCompleted\">";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["conversion"] ?? null), "completed", [], "any", true, true, false, 597)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversion"]) || array_key_exists("conversion", $context) ? $context["conversion"] : (function () { throw new RuntimeError('Variable "conversion" does not exist.', 597, $this->source); })()), "completed", [], "any", false, false, false, 597), 0)) : (0)), "html", null, true);
        yield "</span> terminées
                            </div>
                        </div>
                        <div class=\"col-12 col-md-4\">
                            <div class=\"progress\" style=\"height: 10px; border-radius: 6px; background: rgba(255,255,255,0.2);\">
                                <div class=\"progress-bar bg-white\" 
                                     style=\"width: ";
        // line 603
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["conversion"] ?? null), "rate", [], "any", true, true, false, 603)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversion"]) || array_key_exists("conversion", $context) ? $context["conversion"] : (function () { throw new RuntimeError('Variable "conversion" does not exist.', 603, $this->source); })()), "rate", [], "any", false, false, false, 603), 0)) : (0)), "html", null, true);
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

    // line 617
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

        // line 618
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
<script>
// Variables globales
let timelineChart = null;
let statusChart = null;
let typeChart = null;
let isLoading = false;

// Données initiales
let timelineData = ";
        // line 628
        yield json_encode((isset($context["timeline"]) || array_key_exists("timeline", $context) ? $context["timeline"] : (function () { throw new RuntimeError('Variable "timeline" does not exist.', 628, $this->source); })()));
        yield ";
let typeDistribution = ";
        // line 629
        yield json_encode((isset($context["type_distribution"]) || array_key_exists("type_distribution", $context) ? $context["type_distribution"] : (function () { throw new RuntimeError('Variable "type_distribution" does not exist.', 629, $this->source); })()));
        yield ";
let statsData = ";
        // line 630
        yield json_encode((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 630, $this->source); })()));
        yield ";

document.addEventListener('DOMContentLoaded', function() {
    initCharts();
    updateActiveFilters();
});

function initCharts() {
    initTimelineChart();
    initStatusChart();
    initTypeChart();
}

function initTimelineChart() {
    const ctx = document.getElementById('timelineChart').getContext('2d');
    
    const labels = timelineData.months || [];
    const totalData = timelineData.total || [];
    const completedData = timelineData.completed || [];
    const pendingData = timelineData.pending || [];
    
    timelineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Total',
                    data: totalData,
                    borderColor: '#0463f1',
                    backgroundColor: 'rgba(4, 99, 241, 0.05)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 3
                },
                {
                    label: 'Terminées',
                    data: completedData,
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.05)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 3
                },
                {
                    label: 'En attente',
                    data: pendingData,
                    borderColor: '#f59e0b',
                    backgroundColor: 'rgba(245, 158, 11, 0.05)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 3
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: { mode: 'index', intersect: false },
                legend: { 
                    position: 'top',
                    labels: { boxWidth: 12, font: { size: 10 } }
                }
            },
            scales: {
                y: { 
                    beginAtZero: true, 
                    grid: { display: true, drawBorder: false },
                    ticks: { font: { size: 9 } }
                },
                x: { 
                    grid: { display: false },
                    ticks: { font: { size: 8 } }
                }
            }
        }
    });
}

function initStatusChart() {
    const ctx = document.getElementById('statusChart').getContext('2d');
    
    const labels = ['En attente', 'Payé', 'En traitement', 'Terminé', 'Échec', 'Expiré'];
    const data = [
        statsData.pending || 0,
        statsData.paid || 0,
        statsData.processing || 0,
        statsData.completed || 0,
        statsData.failed || 0,
        statsData.expired || 0
    ];
    const colors = ['#f59e0b', '#0ea5e9', '#8b5cf6', '#10b981', '#ef4444', '#64748b'];
    
    statusChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: colors,
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { 
                    position: 'bottom',
                    labels: { boxWidth: 10, font: { size: 9 }, padding: 8 }
                }
            }
        }
    });
}

function initTypeChart() {
    const ctx = document.getElementById('typeChart').getContext('2d');
    
    const labels = typeDistribution.map(item => item.type || 'unknown');
    const data = typeDistribution.map(item => item.count || 0);
    const colors = ['#0463f1', '#8b5cf6', '#10b981', '#f59e0b', '#ef4444', '#0ea5e9'];
    
    typeChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Nombre de demandes',
                data: data,
                backgroundColor: colors.slice(0, labels.length),
                borderRadius: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.raw + ' demandes';
                        }
                    }
                }
            },
            scales: {
                y: { 
                    beginAtZero: true, 
                    grid: { display: true, drawBorder: false },
                    ticks: { font: { size: 9 }, stepSize: 1 }
                },
                x: { 
                    grid: { display: false },
                    ticks: { font: { size: 8 } }
                }
            }
        }
    });
}

async function applyFilters() {
    if (isLoading) return;
    isLoading = true;
    
    const applyBtn = document.getElementById('applyBtn');
    if (applyBtn) {
        applyBtn.classList.add('btn-loading');
        applyBtn.disabled = true;
    }
    
    const params = new URLSearchParams();
    const search = document.getElementById('searchInput')?.value.trim() || '';
    const type = document.getElementById('typeFilter')?.value || '';
    const status = document.getElementById('statusFilter')?.value || '';
    const dateFrom = document.getElementById('dateFrom')?.value || '';
    const dateTo = document.getElementById('dateTo')?.value || '';
    
    if (search) params.append('search', search);
    if (type) params.append('type', type);
    if (status) params.append('status', status);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    
    try {
        const response = await fetch(`/super-admin/analysis-statistics/data?\${params.toString()}`);
        if (!response.ok) throw new Error('Erreur réseau');
        const data = await response.json();
        updateDashboard(data);
        updateActiveFilters();
        showNotification('Données mises à jour avec succès', 'success');
    } catch (error) {
        console.error('Erreur:', error);
        showNotification('Erreur lors du chargement des données', 'error');
    } finally {
        if (applyBtn) {
            applyBtn.classList.remove('btn-loading');
            applyBtn.disabled = false;
        }
        isLoading = false;
    }
}

function updateDashboard(data) {
    if (data.stats) {
        document.getElementById('statTotal').textContent = data.stats.total || 0;
        document.getElementById('statCompleted').textContent = data.stats.completed || 0;
        document.getElementById('statPending').textContent = data.stats.pending || 0;
        document.getElementById('statTotalAmount').textContent = new Intl.NumberFormat('fr-FR').format(data.stats.total_amount || 0);
    }
    
    if (data.timeline && data.timeline.months) {
        timelineData = data.timeline;
        timelineChart.data.labels = data.timeline.months;
        timelineChart.data.datasets[0].data = data.timeline.total;
        timelineChart.data.datasets[1].data = data.timeline.completed;
        timelineChart.data.datasets[2].data = data.timeline.pending;
        timelineChart.update();
    }
    
    if (data.stats) {
        statusChart.data.datasets[0].data = [
            data.stats.pending || 0,
            data.stats.paid || 0,
            data.stats.processing || 0,
            data.stats.completed || 0,
            data.stats.failed || 0,
            data.stats.expired || 0
        ];
        statusChart.update();
    }
    
    if (data.type_distribution) {
        typeDistribution = data.type_distribution;
        typeChart.data.labels = data.type_distribution.map(item => item.type || 'unknown');
        typeChart.data.datasets[0].data = data.type_distribution.map(item => item.count || 0);
        typeChart.update();
    }
    
    if (data.company_stats) {
        updateCompanyStats(data.company_stats);
    }
    
    if (data.conversion) {
        document.getElementById('conversionRate').textContent = data.conversion.rate + '%';
        document.getElementById('conversionTotal').textContent = data.conversion.total || 0;
        document.getElementById('conversionCompleted').textContent = data.conversion.completed || 0;
        document.getElementById('conversionProgress').style.width = data.conversion.rate + '%';
    }
}

function updateCompanyStats(companies) {
    const container = document.getElementById('companyStatsList');
    if (!container) return;
    
    if (!companies || companies.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center text-muted py-3 small\">
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = companies.map((company, index) => `
        <tr>
            <td>\${index + 1}</td>
            <td class=\"small\">\${escapeHtml(company.company_name || 'N/A').slice(0, 15)}</td>
            <td class=\"text-end d-none d-sm-table-cell\">\${company.total_requests || 0}</td>
            <td class=\"text-end d-none d-md-table-cell\">\${company.completed || 0}</td>
            <td class=\"text-end small\">\${new Intl.NumberFormat('fr-FR').format(company.total_amount || 0)}</td>
        </tr>
    `).join('');
}

function updateActiveFilters() {
    const search = document.getElementById('searchInput')?.value.trim() || '';
    const type = document.getElementById('typeFilter')?.value || '';
    const status = document.getElementById('statusFilter')?.value || '';
    const dateFrom = document.getElementById('dateFrom')?.value || '';
    const dateTo = document.getElementById('dateTo')?.value || '';
    
    const container = document.getElementById('activeFilters');
    if (!container) return;
    
    const activeFilters = [];
    
    if (search) activeFilters.push({ key: 'search', label: `Recherche: \${search}` });
    if (type) activeFilters.push({ key: 'type', label: `Type: \${type}` });
    if (status) {
        const statusLabels = {
            'pending': 'En attente',
            'paid': 'Payé',
            'processing': 'En traitement',
            'completed': 'Terminé',
            'failed': 'Échec',
            'expired': 'Expiré'
        };
        activeFilters.push({ key: 'status', label: `Statut: \${statusLabels[status] || status}` });
    }
    if (dateFrom || dateTo) {
        activeFilters.push({ key: 'date', label: `Période: \${dateFrom || '...'} → \${dateTo || '...'}` });
    }
    
    if (activeFilters.length === 0) {
        container.innerHTML = '';
        return;
    }
    
    container.innerHTML = activeFilters.map(filter => `
        <span class=\"filter-badge-active\" onclick=\"removeFilter('\${filter.key}')\" style=\"font-size:0.6rem; padding:0.15rem 0.5rem;\">
            <i class=\"fas fa-filter me-1\"></i>
            \${filter.label}
            <i class=\"fas fa-times ms-2\"></i>
        </span>
    `).join('');
}

function removeFilter(key) {
    if (key === 'search') {
        document.getElementById('searchInput').value = '';
    } else if (key === 'type') {
        document.getElementById('typeFilter').value = '';
    } else if (key === 'status') {
        document.getElementById('statusFilter').value = '';
    } else if (key === 'date') {
        document.getElementById('dateFrom').value = '';
        document.getElementById('dateTo').value = '';
    }
    applyFilters();
}

function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('typeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('dateFrom').value = '';
    document.getElementById('dateTo').value = '';
    applyFilters();
}

function changeChartPeriod(period) {
    document.querySelectorAll('.chart-title .btn-group .btn').forEach(btn => {
        btn.classList.remove('active');
    });
    event.target.classList.add('active');
    applyFilters();
}

function refreshData() {
    applyFilters();
}

function exportData() {
    const params = new URLSearchParams();
    const search = document.getElementById('searchInput')?.value.trim() || '';
    const type = document.getElementById('typeFilter')?.value || '';
    const status = document.getElementById('statusFilter')?.value || '';
    const dateFrom = document.getElementById('dateFrom')?.value || '';
    const dateTo = document.getElementById('dateTo')?.value || '';
    
    if (search) params.append('search', search);
    if (type) params.append('type', type);
    if (status) params.append('status', status);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    
    window.location.href = `/super-admin/analysis-statistics/export?\${params.toString()}`;
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = 'notification-toast';
    const icon = type === 'success' ? 'check-circle' : 'exclamation-circle';
    notification.innerHTML = `<i class=\"fas fa-\${icon} me-2\"></i>\${message}`;
    notification.style.fontSize = '0.8rem';
    notification.style.padding = '0.75rem 1rem';
    document.body.appendChild(notification);
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transition = 'opacity 0.3s';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
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
        return "super_admin/analysis_statistics/index.html.twig";
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
        return array (  902 => 630,  898 => 629,  894 => 628,  881 => 618,  868 => 617,  844 => 603,  835 => 597,  831 => 596,  826 => 594,  810 => 580,  799 => 574,  797 => 573,  782 => 571,  778 => 570,  774 => 569,  767 => 568,  763 => 567,  760 => 566,  742 => 565,  662 => 488,  646 => 475,  630 => 462,  614 => 449,  587 => 425,  582 => 423,  569 => 412,  560 => 409,  553 => 408,  549 => 407,  535 => 395,  526 => 392,  519 => 391,  515 => 390,  500 => 378,  452 => 333,  441 => 324,  428 => 323,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis_statistics/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Statistiques des analyses - Super Admin{% endblock %}

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
    .kpi-card.info::before { background: linear-gradient(90deg, var(--info), #38bdf8); }
    
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
    .kpi-icon.info { background: rgba(14, 165, 233, 0.1); color: var(--info); }
    
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
        flex-wrap: wrap;
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

    /* ========================================
       RESPONSIVE - FILTRES
    ======================================== */
    .filter-col {
        flex: 0 0 100% !important;
        max-width: 100% !important;
        width: 100% !important;
    }
    .filter-col-half {
        flex: 0 0 100% !important;
        max-width: 100% !important;
        width: 100% !important;
    }
    .filter-select {
        width: 100% !important;
        font-size: 0.7rem !important;
    }
    .filter-input {
        font-size: 0.7rem !important;
    }

    /* ========================================
       RESPONSIVE - MEDIA QUERIES
    ======================================== */
    
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.5rem; }
        .chart-container { height: 250px; }
        .kpi-card { padding: 1rem; }
        .action-buttons { margin-top: 1rem; justify-content: flex-start; }
        .filters-section { padding: 1rem; }
        .conversion-rate { font-size: 2rem; }
        
        .filter-col-half {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
    }
    
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        
        .filters-section { padding: 0.75rem; }
        .chart-card { padding: 0.75rem; margin-bottom: 0.75rem; }
        .kpi-value { font-size: 1.2rem; }
        .kpi-card { padding: 0.75rem; }
        .kpi-label { font-size: 0.65rem; }
        .kpi-icon { width: 36px; height: 36px; font-size: 1rem; }
        .chart-container { height: 200px; }
        .conversion-rate { font-size: 1.5rem; }
        .chart-title { font-size: 0.9rem; }
        .chart-title .btn-group .btn { font-size: 0.55rem; padding: 0.1rem 0.3rem; }
        
        .filter-col, .filter-col-half {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        
        .h1 { font-size: 1.2rem !important; }
        .h2 { font-size: 1rem !important; }
        .text-muted { font-size: 0.7rem !important; }
        .breadcrumb { font-size: 0.6rem !important; }
        
        .btn {
            font-size: 0.65rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .btn i {
            font-size: 0.65rem !important;
        }
        
        .action-buttons .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        
        .modal-dialog { margin: 0.5rem; }
        .modal-content { border-radius: 12px !important; }
        .modal-body { padding: 0.5rem !important; }
        .modal-footer { padding: 0.4rem !important; flex-wrap: wrap; }
        .modal-footer .btn { font-size: 0.65rem !important; padding: 0.15rem 0.3rem !important; }
        .modal-header { padding: 0.4rem 0.6rem !important; }
        .modal-title { font-size: 0.85rem !important; }
        
        .filter-badge-active { font-size: 0.6rem; padding: 0.15rem 0.5rem; }
        
        .progress { height: 8px !important; }
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
    
    .btn-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.7;
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
<div class=\"stat-dashboard py-3 py-md-4\">
    <div class=\"container-fluid px-2 px-md-4\">
        
        <!-- En-tête -->
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
            <div class=\"w-100 w-sm-auto\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-1\">
                        <li class=\"breadcrumb-item small\">
                            <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active small\">
                            <i class=\"fas fa-chart-bar me-1\"></i> Statistiques analyses
                        </li>
                    </ol>
                </nav>
                <h1 class=\"h2 fw-bold mb-1\">
                    <i class=\"fas fa-chart-bar text-primary me-2\"></i>
                    <span class=\"d-none d-sm-inline\">Statistiques des analyses</span>
                    <span class=\"d-inline d-sm-none\">Statistiques analyses</span>
                </h1>
                <p class=\"text-muted mb-0 small d-none d-sm-block\">
                    <i class=\"fas fa-chart-pie me-1\"></i>
                    Analyse complète des performances des demandes d'analyse
                </p>
                <p class=\"text-muted mb-0 small d-block d-sm-none\">
                    Performances des demandes d'analyse
                </p>
            </div>
            <div class=\"action-buttons d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
                <button class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\" onclick=\"applyFilters()\" id=\"applyBtn\">
                    <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Appliquer</span>
                </button>
                <button class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-sm-grow-0\" onclick=\"refreshData()\" title=\"Actualiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </button>
                <button class=\"btn btn-outline-success btn-sm flex-grow-1 flex-sm-grow-0\" onclick=\"exportData()\" title=\"Exporter CSV\">
                    <i class=\"fas fa-download\"></i> <span class=\"d-none d-sm-inline\">Exporter</span>
                </button>
            </div>
        </div>

        <!-- Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-2 g-md-3 align-items-end\">
                <!-- Recherche - 100% sur mobile, 3 sur desktop -->
                <div class=\"col-12 col-md-3 filter-col\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-search\"></i> Recherche
                        </label>
                        <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-sm filter-input\" 
                               placeholder=\"Entreprise, n° demande...\" value=\"{{ filters.search }}\">
                    </div>
                </div>
                
                <!-- Type - 50% sur mobile, 2 sur desktop -->
                <div class=\"col-6 col-md-2 filter-col-half\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-tag\"></i> Type
                        </label>
                        <select id=\"typeFilter\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            {% for type in analysisTypes %}
                                <option value=\"{{ type }}\" {{ filters.type == type ? 'selected' : '' }}>
                                    {{ type|capitalize }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                
                <!-- Statut - 50% sur mobile, 2 sur desktop -->
                <div class=\"col-6 col-md-2 filter-col-half\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-circle\"></i> Statut
                        </label>
                        <select id=\"statusFilter\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            {% for key, label in statuses %}
                                <option value=\"{{ key }}\" {{ filters.status == key ? 'selected' : '' }}>
                                    {{ label }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                
                <!-- Période - 50% sur mobile, 3 sur desktop -->
                <div class=\"col-6 col-md-3 filter-col-half\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar\"></i> Période
                        </label>
                        <div class=\"d-flex gap-1 gap-md-2\">
                            <input type=\"date\" id=\"dateFrom\" class=\"form-control form-control-sm filter-input\" value=\"{{ filters.date_from }}\">
                            <span class=\"align-self-center\">→</span>
                            <input type=\"date\" id=\"dateTo\" class=\"form-control form-control-sm filter-input\" value=\"{{ filters.date_to }}\">
                        </div>
                    </div>
                </div>
                
                <!-- Bouton Réinitialiser - 50% sur mobile, 2 sur desktop -->
                <div class=\"col-6 col-md-2 filter-col-half\">
                    <button class=\"btn btn-outline-secondary w-100\" onclick=\"resetFilters()\" style=\"font-size:0.75rem;\">
                        <i class=\"fas fa-undo-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Réinitialiser</span>
                    </button>
                </div>
            </div>
            
            <!-- Filtres actifs -->
            <div id=\"activeFilters\" class=\"d-flex gap-1 gap-md-2 flex-wrap mt-2 mt-md-3 pt-2 pt-md-3 border-top\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-2 g-md-4 mb-3 mb-md-4\">
            <div class=\"col-6 col-md-3\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Total demandes</div>
                            <div class=\"kpi-value\" id=\"statTotal\">{{ stats.total|default(0) }}</div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-file-alt\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"kpi-card success\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Terminées</div>
                            <div class=\"kpi-value\" id=\"statCompleted\">{{ stats.completed|default(0) }}</div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-check-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">En attente</div>
                            <div class=\"kpi-value\" id=\"statPending\">{{ stats.pending|default(0) }}</div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-clock\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"kpi-card info\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Montant total</div>
                            <div class=\"kpi-value\" id=\"statTotalAmount\">{{ stats.total_amount|default(0)|number_format(0, ',', ' ') }}</div>
                            <small class=\"text-muted\" style=\"font-size:0.6rem;\">FCFA</small>
                        </div>
                        <div class=\"kpi-icon info\">
                            <i class=\"fas fa-money-bill-wave\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques -->
        <div class=\"row g-2 g-md-4\">
            <div class=\"col-12 col-lg-8\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <div class=\"small\">
                            <i class=\"fas fa-chart-line\"></i>
                            <span class=\"d-none d-sm-inline\">Évolution des demandes</span>
                            <span class=\"d-inline d-sm-none\">Évolution</span>
                        </div>
                        <div class=\"d-flex gap-1\">
                            <button class=\"btn btn-sm btn-outline-secondary active\" onclick=\"changeChartPeriod('6')\">6m</button>
                            <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"changeChartPeriod('12')\">12m</button>
                        </div>
                    </div>
                    <div class=\"chart-container\" style=\"height: 220px;\">
                        <canvas id=\"timelineChart\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-lg-4\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-pie\"></i>
                        <span class=\"d-none d-sm-inline\">Répartition par statut</span>
                        <span class=\"d-inline d-sm-none\">Statuts</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 220px;\">
                        <canvas id=\"statusChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-2 g-md-4 mt-2 mt-md-3\">
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-bar\"></i>
                        <span class=\"d-none d-sm-inline\">Répartition par type d'analyse</span>
                        <span class=\"d-inline d-sm-none\">Par type</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 220px;\">
                        <canvas id=\"typeChart\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-trophy\"></i>
                        <span class=\"d-none d-sm-inline\">Top 10 entreprises</span>
                        <span class=\"d-inline d-sm-none\">Top entreprises</span>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Entreprise</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">Demandes</th>
                                    <th class=\"text-end d-none d-md-table-cell\">Terminées</th>
                                    <th class=\"text-end\">Montant</th>
                                </tr>
                            </thead>
                            <tbody id=\"companyStatsList\">
                                {% for company in company_stats %}
                                    <tr>
                                        <td>{{ loop.index }}</td>
                                        <td class=\"small\">{{ company.company_name|default('N/A')|slice(0, 15) }}{% if company.company_name|length > 15 %}...{% endif %}</td>
                                        <td class=\"text-end d-none d-sm-table-cell\">{{ company.total_requests }}</td>
                                        <td class=\"text-end d-none d-md-table-cell\">{{ company.completed }}</td>
                                        <td class=\"text-end small\">{{ company.total_amount|number_format(0, ',', ' ') }}</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\" class=\"text-center text-muted py-3 small\">
                                            Aucune donnée disponible
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Taux de conversion -->
        <div class=\"row mt-3 mt-md-4\">
            <div class=\"col-12\">
                <div class=\"conversion-card p-3 p-md-4\">
                    <div class=\"row align-items-center g-2 g-md-3\">
                        <div class=\"col-12 col-md-8\">
                            <div class=\"conversion-label\" style=\"font-size:0.7rem;\">Taux de réussite des analyses</div>
                            <div class=\"conversion-rate\" id=\"conversionRate\" style=\"font-size:2rem;\">{{ conversion.rate|default(0) }}%</div>
                            <div class=\"mt-1 small\" style=\"font-size:0.7rem;\">
                                <span id=\"conversionTotal\">{{ conversion.total|default(0) }}</span> demandes totales,
                                <span id=\"conversionCompleted\">{{ conversion.completed|default(0) }}</span> terminées
                            </div>
                        </div>
                        <div class=\"col-12 col-md-4\">
                            <div class=\"progress\" style=\"height: 10px; border-radius: 6px; background: rgba(255,255,255,0.2);\">
                                <div class=\"progress-bar bg-white\" 
                                     style=\"width: {{ conversion.rate|default(0) }}%; border-radius: 6px;\"
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
let timelineChart = null;
let statusChart = null;
let typeChart = null;
let isLoading = false;

// Données initiales
let timelineData = {{ timeline|json_encode|raw }};
let typeDistribution = {{ type_distribution|json_encode|raw }};
let statsData = {{ stats|json_encode|raw }};

document.addEventListener('DOMContentLoaded', function() {
    initCharts();
    updateActiveFilters();
});

function initCharts() {
    initTimelineChart();
    initStatusChart();
    initTypeChart();
}

function initTimelineChart() {
    const ctx = document.getElementById('timelineChart').getContext('2d');
    
    const labels = timelineData.months || [];
    const totalData = timelineData.total || [];
    const completedData = timelineData.completed || [];
    const pendingData = timelineData.pending || [];
    
    timelineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Total',
                    data: totalData,
                    borderColor: '#0463f1',
                    backgroundColor: 'rgba(4, 99, 241, 0.05)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 3
                },
                {
                    label: 'Terminées',
                    data: completedData,
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.05)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 3
                },
                {
                    label: 'En attente',
                    data: pendingData,
                    borderColor: '#f59e0b',
                    backgroundColor: 'rgba(245, 158, 11, 0.05)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 3
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: { mode: 'index', intersect: false },
                legend: { 
                    position: 'top',
                    labels: { boxWidth: 12, font: { size: 10 } }
                }
            },
            scales: {
                y: { 
                    beginAtZero: true, 
                    grid: { display: true, drawBorder: false },
                    ticks: { font: { size: 9 } }
                },
                x: { 
                    grid: { display: false },
                    ticks: { font: { size: 8 } }
                }
            }
        }
    });
}

function initStatusChart() {
    const ctx = document.getElementById('statusChart').getContext('2d');
    
    const labels = ['En attente', 'Payé', 'En traitement', 'Terminé', 'Échec', 'Expiré'];
    const data = [
        statsData.pending || 0,
        statsData.paid || 0,
        statsData.processing || 0,
        statsData.completed || 0,
        statsData.failed || 0,
        statsData.expired || 0
    ];
    const colors = ['#f59e0b', '#0ea5e9', '#8b5cf6', '#10b981', '#ef4444', '#64748b'];
    
    statusChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: colors,
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { 
                    position: 'bottom',
                    labels: { boxWidth: 10, font: { size: 9 }, padding: 8 }
                }
            }
        }
    });
}

function initTypeChart() {
    const ctx = document.getElementById('typeChart').getContext('2d');
    
    const labels = typeDistribution.map(item => item.type || 'unknown');
    const data = typeDistribution.map(item => item.count || 0);
    const colors = ['#0463f1', '#8b5cf6', '#10b981', '#f59e0b', '#ef4444', '#0ea5e9'];
    
    typeChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Nombre de demandes',
                data: data,
                backgroundColor: colors.slice(0, labels.length),
                borderRadius: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.raw + ' demandes';
                        }
                    }
                }
            },
            scales: {
                y: { 
                    beginAtZero: true, 
                    grid: { display: true, drawBorder: false },
                    ticks: { font: { size: 9 }, stepSize: 1 }
                },
                x: { 
                    grid: { display: false },
                    ticks: { font: { size: 8 } }
                }
            }
        }
    });
}

async function applyFilters() {
    if (isLoading) return;
    isLoading = true;
    
    const applyBtn = document.getElementById('applyBtn');
    if (applyBtn) {
        applyBtn.classList.add('btn-loading');
        applyBtn.disabled = true;
    }
    
    const params = new URLSearchParams();
    const search = document.getElementById('searchInput')?.value.trim() || '';
    const type = document.getElementById('typeFilter')?.value || '';
    const status = document.getElementById('statusFilter')?.value || '';
    const dateFrom = document.getElementById('dateFrom')?.value || '';
    const dateTo = document.getElementById('dateTo')?.value || '';
    
    if (search) params.append('search', search);
    if (type) params.append('type', type);
    if (status) params.append('status', status);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    
    try {
        const response = await fetch(`/super-admin/analysis-statistics/data?\${params.toString()}`);
        if (!response.ok) throw new Error('Erreur réseau');
        const data = await response.json();
        updateDashboard(data);
        updateActiveFilters();
        showNotification('Données mises à jour avec succès', 'success');
    } catch (error) {
        console.error('Erreur:', error);
        showNotification('Erreur lors du chargement des données', 'error');
    } finally {
        if (applyBtn) {
            applyBtn.classList.remove('btn-loading');
            applyBtn.disabled = false;
        }
        isLoading = false;
    }
}

function updateDashboard(data) {
    if (data.stats) {
        document.getElementById('statTotal').textContent = data.stats.total || 0;
        document.getElementById('statCompleted').textContent = data.stats.completed || 0;
        document.getElementById('statPending').textContent = data.stats.pending || 0;
        document.getElementById('statTotalAmount').textContent = new Intl.NumberFormat('fr-FR').format(data.stats.total_amount || 0);
    }
    
    if (data.timeline && data.timeline.months) {
        timelineData = data.timeline;
        timelineChart.data.labels = data.timeline.months;
        timelineChart.data.datasets[0].data = data.timeline.total;
        timelineChart.data.datasets[1].data = data.timeline.completed;
        timelineChart.data.datasets[2].data = data.timeline.pending;
        timelineChart.update();
    }
    
    if (data.stats) {
        statusChart.data.datasets[0].data = [
            data.stats.pending || 0,
            data.stats.paid || 0,
            data.stats.processing || 0,
            data.stats.completed || 0,
            data.stats.failed || 0,
            data.stats.expired || 0
        ];
        statusChart.update();
    }
    
    if (data.type_distribution) {
        typeDistribution = data.type_distribution;
        typeChart.data.labels = data.type_distribution.map(item => item.type || 'unknown');
        typeChart.data.datasets[0].data = data.type_distribution.map(item => item.count || 0);
        typeChart.update();
    }
    
    if (data.company_stats) {
        updateCompanyStats(data.company_stats);
    }
    
    if (data.conversion) {
        document.getElementById('conversionRate').textContent = data.conversion.rate + '%';
        document.getElementById('conversionTotal').textContent = data.conversion.total || 0;
        document.getElementById('conversionCompleted').textContent = data.conversion.completed || 0;
        document.getElementById('conversionProgress').style.width = data.conversion.rate + '%';
    }
}

function updateCompanyStats(companies) {
    const container = document.getElementById('companyStatsList');
    if (!container) return;
    
    if (!companies || companies.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center text-muted py-3 small\">
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = companies.map((company, index) => `
        <tr>
            <td>\${index + 1}</td>
            <td class=\"small\">\${escapeHtml(company.company_name || 'N/A').slice(0, 15)}</td>
            <td class=\"text-end d-none d-sm-table-cell\">\${company.total_requests || 0}</td>
            <td class=\"text-end d-none d-md-table-cell\">\${company.completed || 0}</td>
            <td class=\"text-end small\">\${new Intl.NumberFormat('fr-FR').format(company.total_amount || 0)}</td>
        </tr>
    `).join('');
}

function updateActiveFilters() {
    const search = document.getElementById('searchInput')?.value.trim() || '';
    const type = document.getElementById('typeFilter')?.value || '';
    const status = document.getElementById('statusFilter')?.value || '';
    const dateFrom = document.getElementById('dateFrom')?.value || '';
    const dateTo = document.getElementById('dateTo')?.value || '';
    
    const container = document.getElementById('activeFilters');
    if (!container) return;
    
    const activeFilters = [];
    
    if (search) activeFilters.push({ key: 'search', label: `Recherche: \${search}` });
    if (type) activeFilters.push({ key: 'type', label: `Type: \${type}` });
    if (status) {
        const statusLabels = {
            'pending': 'En attente',
            'paid': 'Payé',
            'processing': 'En traitement',
            'completed': 'Terminé',
            'failed': 'Échec',
            'expired': 'Expiré'
        };
        activeFilters.push({ key: 'status', label: `Statut: \${statusLabels[status] || status}` });
    }
    if (dateFrom || dateTo) {
        activeFilters.push({ key: 'date', label: `Période: \${dateFrom || '...'} → \${dateTo || '...'}` });
    }
    
    if (activeFilters.length === 0) {
        container.innerHTML = '';
        return;
    }
    
    container.innerHTML = activeFilters.map(filter => `
        <span class=\"filter-badge-active\" onclick=\"removeFilter('\${filter.key}')\" style=\"font-size:0.6rem; padding:0.15rem 0.5rem;\">
            <i class=\"fas fa-filter me-1\"></i>
            \${filter.label}
            <i class=\"fas fa-times ms-2\"></i>
        </span>
    `).join('');
}

function removeFilter(key) {
    if (key === 'search') {
        document.getElementById('searchInput').value = '';
    } else if (key === 'type') {
        document.getElementById('typeFilter').value = '';
    } else if (key === 'status') {
        document.getElementById('statusFilter').value = '';
    } else if (key === 'date') {
        document.getElementById('dateFrom').value = '';
        document.getElementById('dateTo').value = '';
    }
    applyFilters();
}

function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('typeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('dateFrom').value = '';
    document.getElementById('dateTo').value = '';
    applyFilters();
}

function changeChartPeriod(period) {
    document.querySelectorAll('.chart-title .btn-group .btn').forEach(btn => {
        btn.classList.remove('active');
    });
    event.target.classList.add('active');
    applyFilters();
}

function refreshData() {
    applyFilters();
}

function exportData() {
    const params = new URLSearchParams();
    const search = document.getElementById('searchInput')?.value.trim() || '';
    const type = document.getElementById('typeFilter')?.value || '';
    const status = document.getElementById('statusFilter')?.value || '';
    const dateFrom = document.getElementById('dateFrom')?.value || '';
    const dateTo = document.getElementById('dateTo')?.value || '';
    
    if (search) params.append('search', search);
    if (type) params.append('type', type);
    if (status) params.append('status', status);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    
    window.location.href = `/super-admin/analysis-statistics/export?\${params.toString()}`;
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = 'notification-toast';
    const icon = type === 'success' ? 'check-circle' : 'exclamation-circle';
    notification.innerHTML = `<i class=\"fas fa-\${icon} me-2\"></i>\${message}`;
    notification.style.fontSize = '0.8rem';
    notification.style.padding = '0.75rem 1rem';
    document.body.appendChild(notification);
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transition = 'opacity 0.3s';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
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
{% endblock %}", "super_admin/analysis_statistics/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_statistics\\index.html.twig");
    }
}
