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

/* reports/financial/index.html.twig */
class __TwigTemplate_4051b7e146e5e6232a3bca0d2119ebdb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/financial/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/financial/index.html.twig"));

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

        yield "Rapport Financier - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["company_name"]) || array_key_exists("company_name", $context) ? $context["company_name"] : (function () { throw new RuntimeError('Variable "company_name" does not exist.', 4, $this->source); })()), "html", null, true);
        
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

    .report-dashboard {
        background: #f1f5f9;
        min-height: 100vh;
    }

    .kpi-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.25rem;
        transition: all 0.3s ease;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        height: 100%;
        position: relative;
        overflow: hidden;
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
    .kpi-icon.warning { background: rgba(245, 158, 11, 0.1); color: var(--warning); }
    .kpi-icon.info { background: rgba(14, 165, 233, 0.1); color: var(--info); }
    
    .kpi-value {
        font-size: 1.75rem;
        font-weight: 800;
        line-height: 1.2;
        margin-top: 0.5rem;
    }
    
    .kpi-label {
        color: #64748b;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .kpi-trend {
        font-size: 0.7rem;
        margin-top: 0.5rem;
    }
    
    .kpi-trend.up { color: var(--success); }
    .kpi-trend.down { color: var(--danger); }

    .chart-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .chart-card:hover {
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
    }
    
    .chart-title {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 1.25rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 0.75rem;
    }
    
    .chart-title i {
        color: var(--primary);
        margin-right: 0.5rem;
    }
    
    .chart-container {
        position: relative;
        height: 280px;
    }

    .filters-section {
        background: white;
        border-radius: 1.5rem;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    
    .filter-group {
        margin-bottom: 0.75rem;
    }
    
    .filter-label {
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748b;
        margin-bottom: 0.4rem;
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }
    
    .data-table {
        width: 100%;
        font-size: 0.85rem;
    }
    
    .data-table th {
        background: #f8fafc;
        padding: 0.75rem;
        font-weight: 600;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .data-table td {
        padding: 0.6rem 0.75rem;
        border-bottom: 1px solid #f1f5f9;
    }
    
    .data-table tr:hover td {
        background: #f8fafc;
    }
    
    .badge-margin-high { background: #10b98120; color: #10b981; }
    .badge-margin-medium { background: #f59e0b20; color: #f59e0b; }
    .badge-margin-low { background: #ef444420; color: #ef4444; }
    
    .payment-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    .payment-badge.cash { background: #10b98120; color: #10b981; }
    .payment-badge.card { background: #8b5cf620; color: #8b5cf6; }
    .payment-badge.mobile_money { background: #f59e0b20; color: #f59e0b; }
    
    .progress-custom {
        height: 6px;
        background: #e5e7eb;
        border-radius: 3px;
        overflow: hidden;
    }
    
    .progress-bar-custom {
        height: 100%;
        border-radius: 3px;
        transition: width 0.5s ease;
    }
    
    .plan-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    .plan-badge.freemium { background: #64748b20; color: #64748b; }
    .plan-badge.basic { background: #0463f120; color: #0463f1; }
    .plan-badge.premium { background: #8b5cf620; color: #8b5cf6; }

    /* ========================================
       RESPONSIVE
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
    
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.3rem; }
        .chart-container { height: 220px; }
        .kpi-card { padding: 1rem; }
        .data-table { font-size: 0.7rem; }
        .data-table th, .data-table td { padding: 0.3rem 0.4rem; }
        
        .kpi-icon {
            width: 36px;
            height: 36px;
            font-size: 1rem;
        }
        
        .filter-col-half {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
    }
    
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        .kpi-value { font-size: 1.1rem; }
        .kpi-card { padding: 0.75rem; }
        .kpi-label { font-size: 0.6rem; }
        .kpi-trend { font-size: 0.55rem; }
        
        .chart-container { height: 180px; }
        .chart-card { padding: 0.75rem; margin-bottom: 0.75rem; }
        .chart-title { font-size: 0.8rem; }
        
        .filters-section { padding: 0.75rem; }
        .filter-label { font-size: 0.55rem; }
        .filter-group { margin-bottom: 0.5rem; }
        
        .data-table { font-size: 0.6rem; }
        .data-table th, .data-table td { padding: 0.2rem 0.3rem; }
        
        .payment-badge { font-size: 0.55rem; padding: 0.1rem 0.4rem; }
        .badge { font-size: 0.5rem !important; padding: 0.15rem 0.3rem !important; }
        
        .action-buttons .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        
        .filter-col, .filter-col-half {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        
        .h1 { font-size: 1.2rem !important; }
        .h2 { font-size: 1rem !important; }
        .h3 { font-size: 0.9rem !important; }
        .text-muted { font-size: 0.6rem !important; }
        
        .breadcrumb { font-size: 0.55rem !important; }
        
        .modal-dialog { margin: 0.5rem; }
        .modal-content { border-radius: 12px !important; }
        
        .progress-custom { height: 4px; }
    }
    
    @media print {
        .no-print, .filters-section, .action-buttons, .btn, nav {
            display: none !important;
        }
        .report-dashboard { background: white; }
        .kpi-card, .chart-card { box-shadow: none; border: 1px solid #e5e7eb; break-inside: avoid; }
        body { padding: 0; margin: 0; }
    }
    
    @keyframes spin { to { transform: rotate(360deg); } }
    .btn-loading { position: relative; pointer-events: none; opacity: 0.7; }
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 333
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

        // line 334
        yield "<div class=\"report-dashboard py-2 py-md-3\">
    <div class=\"container-fluid px-2 px-md-4\">
        
        <!-- En-tête -->
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
            <div class=\"w-100 w-sm-auto\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-1\">
                        <li class=\"breadcrumb-item small\">
                            <a href=\"";
        // line 343
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active small\">
                            <i class=\"fas fa-chart-line me-1\"></i> Rapport Financier
                        </li>
                    </ol>
                </nav>
                <h1 class=\"h3 fw-bold mb-0\">
                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                    Rapport Financier
                </h1>
                <p class=\"text-muted small mb-0 d-none d-sm-block\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    ";
        // line 358
        if ((($tmp = (isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 358, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 359
            yield "                        Analyse complète des performances financières de votre restaurant
                    ";
        } else {
            // line 361
            yield "                        Analyse complète des performances financières de votre commerce
                    ";
        }
        // line 363
        yield "                </p>
                <p class=\"text-muted small mb-0 d-block d-sm-none\">
                    ";
        // line 365
        if ((($tmp = (isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 365, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Performances restaurant";
        } else {
            yield "Performances commerce";
        }
        // line 366
        yield "                </p>
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
                <button class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-sm-grow-0 d-print-none\" onclick=\"window.print()\" title=\"Imprimer\">
                    <i class=\"fas fa-print\"></i>
                </button>
            </div>
        </div>

        <!-- Section Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-2 g-md-3 align-items-end\">
                <div class=\"col-12 col-md-3 filter-col\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-alt\"></i> Période prédéfinie
                        </label>
                        <select id=\"datePreset\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Personnalisée</option>
                            ";
        // line 394
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["date_presets"]) || array_key_exists("date_presets", $context) ? $context["date_presets"] : (function () { throw new RuntimeError('Variable "date_presets" does not exist.', 394, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 395
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 395, $this->source); })()), "date_preset", [], "any", false, false, false, 395) == $context["key"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        yield "                        </select>
                    </div>
                </div>
                <div class=\"col-6 col-md-3 filter-col-half\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-day\"></i> Date du
                        </label>
                        <input type=\"date\" id=\"dateFrom\" class=\"form-control form-control-sm filter-input\" 
                               value=\"";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 408, $this->source); })()), "date_from", [], "any", false, false, false, 408), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-6 col-md-3 filter-col-half\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-day\"></i> Date au
                        </label>
                        <input type=\"date\" id=\"dateTo\" class=\"form-control form-control-sm filter-input\" 
                               value=\"";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 417, $this->source); })()), "date_to", [], "any", false, false, false, 417), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-12 col-md-3 filter-col\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-credit-card\"></i> Mode de paiement
                        </label>
                        <select id=\"paymentMethod\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"cash\">Espèces</option>
                            <option value=\"card\">Carte bancaire</option>
                            <option value=\"mobile_money\">Mobile Money</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div id=\"activeFilters\" class=\"d-flex gap-1 gap-md-2 flex-wrap mt-2 mt-md-3 pt-2 pt-md-3 border-top\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-chart-line me-1\"></i> <span class=\"d-none d-sm-inline\">Chiffre d'affaires</span>
                                <span class=\"d-inline d-sm-none\">CA</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiRevenue\">
                                ";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "revenue", [], "any", true, true, false, 449)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["indicators"]) || array_key_exists("indicators", $context) ? $context["indicators"] : (function () { throw new RuntimeError('Variable "indicators" does not exist.', 449, $this->source); })()), "revenue", [], "any", false, false, false, 449), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\" id=\"kpiRevenueTrend\">
                                <i class=\"fas fa-arrow-up me-1\"></i> vs période précédente
                            </div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-chart-line\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card success\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-chart-pie me-1\"></i> <span class=\"d-none d-sm-inline\">Marge brute</span>
                                <span class=\"d-inline d-sm-none\">Marge</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiMargin\">
                                ";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "gross_margin", [], "any", true, true, false, 471)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["indicators"]) || array_key_exists("indicators", $context) ? $context["indicators"] : (function () { throw new RuntimeError('Variable "indicators" does not exist.', 471, $this->source); })()), "gross_margin", [], "any", false, false, false, 471), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                                <small class=\"fs-6\">";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 472, $this->source); })()), "html", null, true);
        yield "</small>
                            </div>
                            <div class=\"kpi-trend up\">
                                (";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "gross_margin_percentage", [], "any", true, true, false, 475)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["indicators"]) || array_key_exists("indicators", $context) ? $context["indicators"] : (function () { throw new RuntimeError('Variable "indicators" does not exist.', 475, $this->source); })()), "gross_margin_percentage", [], "any", false, false, false, 475), 0)) : (0)), "html", null, true);
        yield "%)
                            </div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-chart-pie\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> <span class=\"d-none d-sm-inline\">Nombre de ventes</span>
                                <span class=\"d-inline d-sm-none\">Ventes</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiOrders\">
                                ";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "orders_count", [], "any", true, true, false, 494)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["indicators"]) || array_key_exists("indicators", $context) ? $context["indicators"] : (function () { throw new RuntimeError('Variable "indicators" does not exist.', 494, $this->source); })()), "orders_count", [], "any", false, false, false, 494), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                commandes
                            </div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card info\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-wallet me-1\"></i> <span class=\"d-none d-sm-inline\">Panier moyen</span>
                                <span class=\"d-inline d-sm-none\">Panier</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiAverageBasket\">
                                ";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "average_basket", [], "any", true, true, false, 516)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["indicators"]) || array_key_exists("indicators", $context) ? $context["indicators"] : (function () { throw new RuntimeError('Variable "indicators" does not exist.', 516, $this->source); })()), "average_basket", [], "any", false, false, false, 516), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                ";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 519, $this->source); })()), "html", null, true);
        yield " par vente
                            </div>
                        </div>
                        <div class=\"kpi-icon info\">
                            <i class=\"fas fa-wallet\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques principaux -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12 col-lg-8\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <div class=\"small\">
                            <i class=\"fas fa-chart-line\"></i>
                            <span class=\"d-none d-sm-inline\">Évolution du chiffre d'affaires</span>
                            <span class=\"d-inline d-sm-none\">Évolution CA</span>
                        </div>
                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('revenue')\">CA</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('orders')\">Cmd</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('basket')\">Panier</button>
                        </div>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"timelineChart\"></canvas>
                    </div>
                </div>
            </div>
            
            <div class=\"col-12 col-lg-4\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-pie\"></i>
                        <span class=\"d-none d-sm-inline\">Répartition des paiements</span>
                        <span class=\"d-inline d-sm-none\">Paiements</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"paymentChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top produits et marge par catégorie -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-trophy\"></i>
                        Top ";
        // line 572
        if ((($tmp = (isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 572, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "recettes";
        } else {
            yield "produits";
        }
        // line 573
        yield "                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>";
        // line 579
        if ((($tmp = (isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 579, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Recette";
        } else {
            yield "Produit";
        }
        yield "</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">Qté</th>
                                    <th class=\"text-end\">CA</th>
                                </thead>
                            </thead>
                            <tbody id=\"topItemsList\">
                                ";
        // line 585
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_items"]) || array_key_exists("top_items", $context) ? $context["top_items"] : (function () { throw new RuntimeError('Variable "top_items" does not exist.', 585, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 586
            yield "                                    <tr>
                                        <td>";
            // line 587
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 587), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 589
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 589), 0, 20), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 589)) > 20)) {
                yield "...";
            }
            // line 590
            yield "                                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe_name", [], "any", false, false, false, 590)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 591
                yield "                                                <small class=\"text-muted d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe_name", [], "any", false, false, false, 591), 0, 15), "html", null, true);
                yield "</small>
                                            ";
            }
            // line 593
            yield "                                        </td>
                                        <td class=\"text-end d-none d-sm-table-cell\">";
            // line 594
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_quantity", [], "any", false, false, false, 594), 0, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end fw-semibold\">";
            // line 595
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_revenue", [], "any", false, false, false, 595), 0, ",", " "), "html", null, true);
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
        // line 597
        if (!$context['_iterated']) {
            // line 598
            yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                                            Aucune donnée disponible
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 605
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-simple\"></i>
                        Marge par catégorie
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Catégorie</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">CA</th>
                                    <th class=\"text-end d-none d-md-table-cell\">Coût</th>
                                    <th class=\"text-end\">Marge</th>
                                    <th class=\"text-end\">%</th>
                                </tr>
                            </thead>
                            <tbody id=\"marginByCategoryList\">
                                ";
        // line 629
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["margin_by_category"]) || array_key_exists("margin_by_category", $context) ? $context["margin_by_category"] : (function () { throw new RuntimeError('Variable "margin_by_category" does not exist.', 629, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 630
            yield "                                    <tr>
                                        <td>";
            // line 631
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 631), 0, 15), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 631)) > 15)) {
                yield "...";
            }
            yield "</td>
                                        <td class=\"text-end d-none d-sm-table-cell\">";
            // line 632
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "revenue", [], "any", false, false, false, 632), 0, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end text-muted d-none d-md-table-cell\">";
            // line 633
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "cogs", [], "any", false, false, false, 633), 0, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end fw-semibold ";
            // line 634
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "margin", [], "any", false, false, false, 634) >= 0)) {
                yield "text-success";
            } else {
                yield "text-danger";
            }
            yield "\">
                                            ";
            // line 635
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "margin", [], "any", false, false, false, 635), 0, ",", " "), "html", null, true);
            yield "
                                        </td>
                                        <td class=\"text-end\">
                                            <span class=\"badge 
                                                ";
            // line 639
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "margin_percentage", [], "any", false, false, false, 639) >= 50)) {
                yield "badge-margin-high
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 640
$context["category"], "margin_percentage", [], "any", false, false, false, 640) >= 30)) {
                yield "badge-margin-medium
                                                ";
            } else {
                // line 641
                yield "badge-margin-low";
            }
            yield "\">
                                                ";
            // line 642
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "margin_percentage", [], "any", false, false, false, 642), "html", null, true);
            yield "%
                                            </span>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 646
        if (!$context['_iterated']) {
            // line 647
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-chart-simple fa-2x mb-2 d-block\"></i>
                                            Aucune donnée disponible
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 654
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section RESTAURANT : Analyse des ventes par recette -->
        ";
        // line 662
        if ((($tmp = (isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 662, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 663
            yield "        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-line\"></i>
                        Analyse des ventes par recette
                    </div>
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Total recettes vendues</div>
                                <div class=\"h2 fw-bold text-primary fs-4 fs-md-2\" id=\"totalRecipesSold\">
                                    ";
            // line 675
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe_sales_stats"] ?? null), "total_quantity", [], "any", true, true, false, 675)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe_sales_stats"]) || array_key_exists("recipe_sales_stats", $context) ? $context["recipe_sales_stats"] : (function () { throw new RuntimeError('Variable "recipe_sales_stats" does not exist.', 675, $this->source); })()), "total_quantity", [], "any", false, false, false, 675), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">articles vendus</div>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">CA généré</div>
                                <div class=\"h2 fw-bold text-success fs-4 fs-md-2\" id=\"totalRecipesRevenue\">
                                    ";
            // line 684
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe_sales_stats"] ?? null), "total_revenue", [], "any", true, true, false, 684)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe_sales_stats"]) || array_key_exists("recipe_sales_stats", $context) ? $context["recipe_sales_stats"] : (function () { throw new RuntimeError('Variable "recipe_sales_stats" does not exist.', 684, $this->source); })()), "total_revenue", [], "any", false, false, false, 684), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">";
            // line 686
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 686, $this->source); })()), "html", null, true);
            yield "</div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Recettes populaires</div>
                                <div class=\"h2 fw-bold text-info fs-4 fs-md-2\" id=\"topRecipesCount\">
                                    ";
            // line 693
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe_sales_stats"] ?? null), "unique_recipes", [], "any", true, true, false, 693)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe_sales_stats"]) || array_key_exists("recipe_sales_stats", $context) ? $context["recipe_sales_stats"] : (function () { throw new RuntimeError('Variable "recipe_sales_stats" does not exist.', 693, $this->source); })()), "unique_recipes", [], "any", false, false, false, 693), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">recettes différentes</div>
                            </div>
                        </div>
                    </div>
                    
                    ";
            // line 700
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("recipe_sales", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipe_sales"]) || array_key_exists("recipe_sales", $context) ? $context["recipe_sales"] : (function () { throw new RuntimeError('Variable "recipe_sales" does not exist.', 700, $this->source); })()), [])) : ([]))) > 0)) {
                // line 701
                yield "                    <hr>
                    <div class=\"mt-2 mt-md-3\">
                        <strong class=\"small\" style=\"font-size:0.65rem;\">Classement des recettes :</strong>
                        <div class=\"table-responsive mt-2\">
                            <table class=\"data-table\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Recette</th>
                                        <th class=\"text-end d-none d-sm-table-cell\">Qté</th>
                                        <th class=\"text-end\">CA</th>
                                        <th class=\"text-end d-none d-md-table-cell\">%</th>
                                    </tr>
                                </thead>
                                <tbody id=\"recipeSalesList\">
                                    ";
                // line 716
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recipe_sales"]) || array_key_exists("recipe_sales", $context) ? $context["recipe_sales"] : (function () { throw new RuntimeError('Variable "recipe_sales" does not exist.', 716, $this->source); })()), 0, 10));
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
                foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                    // line 717
                    yield "                                        <tr>
                                            <td>";
                    // line 718
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 718), "html", null, true);
                    yield "</td>
                                            <td>
                                                <strong>";
                    // line 720
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 720), 0, 15), "html", null, true);
                    yield "</strong>
                                                ";
                    // line 721
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 721)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 722
                        yield "                                                    <br><small class=\"text-muted\" style=\"font-size:0.5rem;\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 722), 0, 12), "html", null, true);
                        yield "</small>
                                                ";
                    }
                    // line 724
                    yield "                                            </td>
                                            <td class=\"text-end d-none d-sm-table-cell\">";
                    // line 725
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "quantity", [], "any", false, false, false, 725), 0, ",", " "), "html", null, true);
                    yield "</td>
                                            <td class=\"text-end fw-semibold text-success\">";
                    // line 726
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "revenue", [], "any", false, false, false, 726), 0, ",", " "), "html", null, true);
                    yield "</td>
                                            <td class=\"text-end d-none d-md-table-cell\">
                                                <div class=\"d-flex align-items-center justify-content-end gap-1\">
                                                    <span style=\"font-size:0.6rem;\">";
                    // line 729
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "percentage", [], "any", false, false, false, 729), "html", null, true);
                    yield "%</span>
                                                    <div class=\"progress-custom\" style=\"width: 60px;\">
                                                        <div class=\"progress-bar-custom bg-success\" style=\"width: ";
                    // line 731
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "percentage", [], "any", false, false, false, 731), "html", null, true);
                    yield "%\"></div>
                                                    </div>
                                                </div>
                                            </td>
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
                // line 736
                if (!$context['_iterated']) {
                    // line 737
                    yield "                                        <tr>
                                            <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                                <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                                                Aucune donnée de recette disponible
                                            </td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['recipe'], $context['_parent'], $context['_iterated'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 744
                yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                    ";
            } else {
                // line 749
                yield "                    <div class=\"text-center py-4 text-muted\">
                        <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                        Aucune vente de recette enregistrée sur cette période
                    </div>
                    ";
            }
            // line 754
            yield "                </div>
            </div>
        </div>
        ";
        }
        // line 758
        yield "
        <!-- Section ABONNEMENTS : Évolution des paiements -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-line\"></i>
                        Évolution des paiements d'abonnement
                    </div>
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Total payé</div>
                                <div class=\"h2 fw-bold text-primary fs-4 fs-md-2\" id=\"subscriptionTotal\">
                                    ";
        // line 772
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_stats"] ?? null), "total_paid", [], "any", true, true, false, 772)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_stats"]) || array_key_exists("subscription_stats", $context) ? $context["subscription_stats"] : (function () { throw new RuntimeError('Variable "subscription_stats" does not exist.', 772, $this->source); })()), "total_paid", [], "any", false, false, false, 772), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">";
        // line 774
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 774, $this->source); })()), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Dernier paiement</div>
                                <div class=\"h2 fw-bold text-warning fs-5 fs-md-3\" id=\"lastPayment\">
                                    ";
        // line 781
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_stats"]) || array_key_exists("subscription_stats", $context) ? $context["subscription_stats"] : (function () { throw new RuntimeError('Variable "subscription_stats" does not exist.', 781, $this->source); })()), "last_payment_date", [], "any", false, false, false, 781)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 782
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_stats"]) || array_key_exists("subscription_stats", $context) ? $context["subscription_stats"] : (function () { throw new RuntimeError('Variable "subscription_stats" does not exist.', 782, $this->source); })()), "last_payment_date", [], "any", false, false, false, 782), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 784
            yield "                                        -
                                    ";
        }
        // line 786
        yield "                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">
                                    ";
        // line 788
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_stats"]) || array_key_exists("subscription_stats", $context) ? $context["subscription_stats"] : (function () { throw new RuntimeError('Variable "subscription_stats" does not exist.', 788, $this->source); })()), "last_payment_amount", [], "any", false, false, false, 788)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 789
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_stats"]) || array_key_exists("subscription_stats", $context) ? $context["subscription_stats"] : (function () { throw new RuntimeError('Variable "subscription_stats" does not exist.', 789, $this->source); })()), "last_payment_amount", [], "any", false, false, false, 789), 0, ",", " "), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 789, $this->source); })()), "html", null, true);
            yield "
                                    ";
        }
        // line 791
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Plan actuel</div>
                                <div class=\"h2 fw-bold text-info fs-5 fs-md-3\" id=\"currentPlan\">
                                    ";
        // line 798
        if ((($tmp = (isset($context["current_plan"]) || array_key_exists("current_plan", $context) ? $context["current_plan"] : (function () { throw new RuntimeError('Variable "current_plan" does not exist.', 798, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 799
            yield "                                        <span class=\"plan-badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["current_plan"]) || array_key_exists("current_plan", $context) ? $context["current_plan"] : (function () { throw new RuntimeError('Variable "current_plan" does not exist.', 799, $this->source); })())), "html", null, true);
            yield "\" style=\"font-size:0.6rem;\">
                                            ";
            // line 800
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["current_plan"]) || array_key_exists("current_plan", $context) ? $context["current_plan"] : (function () { throw new RuntimeError('Variable "current_plan" does not exist.', 800, $this->source); })())), "html", null, true);
            yield "
                                        </span>
                                    ";
        } else {
            // line 803
            yield "                                        -
                                    ";
        }
        // line 805
        yield "                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">
                                    ";
        // line 807
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_stats"]) || array_key_exists("subscription_stats", $context) ? $context["subscription_stats"] : (function () { throw new RuntimeError('Variable "subscription_stats" does not exist.', 807, $this->source); })()), "next_payment_date", [], "any", false, false, false, 807)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 808
            yield "                                        Prochain: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_stats"]) || array_key_exists("subscription_stats", $context) ? $context["subscription_stats"] : (function () { throw new RuntimeError('Variable "subscription_stats" does not exist.', 808, $this->source); })()), "next_payment_date", [], "any", false, false, false, 808), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        }
        // line 810
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 815
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("subscription_payments", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["subscription_payments"]) || array_key_exists("subscription_payments", $context) ? $context["subscription_payments"] : (function () { throw new RuntimeError('Variable "subscription_payments" does not exist.', 815, $this->source); })()), [])) : ([]))) > 0)) {
            // line 816
            yield "                    <hr>
                    <div class=\"mt-2 mt-md-3\">
                        <div class=\"chart-container\" style=\"height: 200px;\">
                            <canvas id=\"subscriptionChart\"></canvas>
                        </div>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3\">
                        <strong class=\"small\" style=\"font-size:0.65rem;\">Historique des paiements :</strong>
                        <div class=\"table-responsive mt-2\">
                            <table class=\"data-table\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th class=\"text-end\">Montant</th>
                                        <th class=\"d-none d-sm-table-cell\">Méthode</th>
                                        <th class=\"d-none d-md-table-cell\">Statut</th>
                                    </tr>
                                </thead>
                                <tbody id=\"paymentHistoryList\">
                                    ";
            // line 836
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["subscription_payments"]) || array_key_exists("subscription_payments", $context) ? $context["subscription_payments"] : (function () { throw new RuntimeError('Variable "subscription_payments" does not exist.', 836, $this->source); })()), 0, 10));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 837
                yield "                                        <tr>
                                            <td>";
                // line 838
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 838), "d/m/Y"), "html", null, true);
                yield "</td>
                                            <td class=\"fw-semibold text-end\">";
                // line 839
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 839), 0, ",", " "), "html", null, true);
                yield "</td>
                                            <td class=\"d-none d-sm-table-cell\">
                                                <span class=\"payment-badge ";
                // line 841
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 841) == "cash")) ? ("cash") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 841) == "card")) ? ("card") : ("mobile_money"))));
                yield "\" style=\"font-size:0.5rem;\">
                                                    <i class=\"fas fa-";
                // line 842
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 842) == "cash")) {
                    yield "money-bill-wave";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 842) == "card")) {
                    yield "credit-card";
                } else {
                    yield "mobile-alt";
                }
                yield "\"></i>
                                                    ";
                // line 843
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 843), ["_" => " "])), 0, 10), "html", null, true);
                yield "
                                                </span>
                                            </td>
                                            <td class=\"d-none d-md-table-cell\">
                                                ";
                // line 847
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 847) == "paid")) {
                    // line 848
                    yield "                                                    <span class=\"badge bg-success\" style=\"font-size:0.5rem;\">Payé</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 849
$context["payment"], "status", [], "any", false, false, false, 849) == "pending")) {
                    // line 850
                    yield "                                                    <span class=\"badge bg-warning\" style=\"font-size:0.5rem;\">En attente</span>
                                                ";
                } else {
                    // line 852
                    yield "                                                    <span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 852), "html", null, true);
                    yield "</span>
                                                ";
                }
                // line 854
                yield "                                            </td>
                                        </tr>
                                    ";
                $context['_iterated'] = true;
            }
            // line 856
            if (!$context['_iterated']) {
                // line 857
                yield "                                        <tr>
                                            <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                                                <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                                                Aucun paiement d'abonnement enregistré
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 864
            yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                    ";
        }
        // line 869
        yield "                </div>
            </div>
        </div>

        <!-- Répartition des méthodes de paiement détaillée -->
        <div class=\"row g-2 g-md-3\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-credit-card\"></i>
                        Détail des paiements (Ventes)
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Mode</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">Nb</th>
                                    <th class=\"text-end\">%</th>
                                    <th class=\"text-end\">Montant</th>
                                </tr>
                            </thead>
                            <tbody id=\"paymentDetailsList\">
                                ";
        // line 892
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payment_distribution"]) || array_key_exists("payment_distribution", $context) ? $context["payment_distribution"] : (function () { throw new RuntimeError('Variable "payment_distribution" does not exist.', 892, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 893
            yield "                                    <tr>
                                        <td>
                                            <span class=\"payment-badge ";
            // line 895
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "method", [], "any", false, false, false, 895), "html", null, true);
            yield "\" style=\"font-size:0.55rem;\">
                                                <i class=\"fas fa-";
            // line 896
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "method", [], "any", false, false, false, 896) == "cash")) {
                yield "money-bill-wave";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "method", [], "any", false, false, false, 896) == "card")) {
                yield "credit-card";
            } else {
                yield "mobile-alt";
            }
            yield "\"></i>
                                                <span class=\"d-none d-sm-inline\">";
            // line 897
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "label", [], "any", false, false, false, 897), "html", null, true);
            yield "</span>
                                                <span class=\"d-inline d-sm-none\">";
            // line 898
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "label", [], "any", false, false, false, 898), 0, 8), "html", null, true);
            yield "</span>
                                            </span>
                                        </td>
                                        <td class=\"text-end d-none d-sm-table-cell\">";
            // line 901
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "count", [], "any", false, false, false, 901), 0, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end\">
                                            <div class=\"d-flex align-items-center justify-content-end gap-1\">
                                                <span style=\"font-size:0.6rem;\">";
            // line 904
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "percentage", [], "any", false, false, false, 904), "html", null, true);
            yield "%</span>
                                                <div class=\"progress-custom\" style=\"width: 50px;\">
                                                    <div class=\"progress-bar-custom bg-primary\" style=\"width: ";
            // line 906
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "percentage", [], "any", false, false, false, 906), "html", null, true);
            yield "%\"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=\"text-end fw-semibold\" style=\"font-size:0.65rem;\">";
            // line 910
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "total", [], "any", false, false, false, 910), 0, ",", " "), "html", null, true);
            yield "</td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 912
        if (!$context['_iterated']) {
            // line 913
            yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                                            Aucune donnée disponible
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 920
        yield "                            </tbody>
                        </table>
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

    // line 931
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

        // line 932
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
<script>
// Variables globales
let timelineChart = null;
let paymentChart = null;
let subscriptionChart = null;
let currentChartType = 'revenue';
let isLoading = false;

// Données initiales
let timelineData = ";
        // line 943
        yield json_encode(((array_key_exists("timeline", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["timeline"]) || array_key_exists("timeline", $context) ? $context["timeline"] : (function () { throw new RuntimeError('Variable "timeline" does not exist.', 943, $this->source); })()), [])) : ([])));
        yield ";
let paymentData = ";
        // line 944
        yield json_encode(((array_key_exists("payment_distribution", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["payment_distribution"]) || array_key_exists("payment_distribution", $context) ? $context["payment_distribution"] : (function () { throw new RuntimeError('Variable "payment_distribution" does not exist.', 944, $this->source); })()), [])) : ([])));
        yield ";
let subscriptionData = ";
        // line 945
        yield json_encode(((array_key_exists("subscription_payments", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["subscription_payments"]) || array_key_exists("subscription_payments", $context) ? $context["subscription_payments"] : (function () { throw new RuntimeError('Variable "subscription_payments" does not exist.', 945, $this->source); })()), [])) : ([])));
        yield ";

document.addEventListener('DOMContentLoaded', function() {
    if (timelineData.length > 0) {
        initCharts();
    }
    if (subscriptionData.length > 0) {
        initSubscriptionChart();
    }
    updateActiveFilters();
});

function initCharts() {
    initTimelineChart();
    if (paymentData.length > 0) {
        initPaymentChart();
    }
}

function initTimelineChart() {
    const ctx = document.getElementById('timelineChart').getContext('2d');
    
    let data = [];
    let label = '';
    let backgroundColor = '';
    let borderColor = '';
    
    if (currentChartType === 'revenue') {
        data = timelineData.map(d => d.revenue || 0);
        label = 'Chiffre d\\'affaires (";
        // line 974
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 974, $this->source); })()), "html", null, true);
        yield ")';
        backgroundColor = 'rgba(4, 99, 241, 0.1)';
        borderColor = '#0463f1';
    } else if (currentChartType === 'orders') {
        data = timelineData.map(d => d.orders || 0);
        label = 'Nombre de commandes';
        backgroundColor = 'rgba(16, 185, 129, 0.1)';
        borderColor = '#10b981';
    } else {
        data = timelineData.map(d => d.average_basket || 0);
        label = 'Panier moyen (";
        // line 984
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 984, $this->source); })()), "html", null, true);
        yield ")';
        backgroundColor = 'rgba(245, 158, 11, 0.1)';
        borderColor = '#f59e0b';
    }
    
    if (timelineChart) {
        timelineChart.destroy();
    }
    
    timelineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: timelineData.map(d => d.month || ''),
            datasets: [{
                label: label,
                data: data,
                borderColor: borderColor,
                backgroundColor: backgroundColor,
                borderWidth: 2,
                fill: true,
                tension: 0.4,
                pointRadius: 3,
                pointHoverRadius: 5,
                pointBackgroundColor: borderColor,
                pointBorderColor: 'white'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let value = context.raw;
                            if (currentChartType !== 'orders') {
                                return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(value) + ' ";
        // line 1020
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1020, $this->source); })()), "html", null, true);
        yield "';
                            }
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(value);
                        }
                    }
                },
                legend: { position: 'top', labels: { boxWidth: 12, font: { size: 10 } } }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { display: true, drawBorder: false },
                    ticks: {
                        font: { size: 9 },
                        callback: function(value) {
                            if (currentChartType !== 'orders') {
                                return new Intl.NumberFormat('fr-FR').format(value) + ' ";
        // line 1036
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1036, $this->source); })()), "html", null, true);
        yield "';
                            }
                            return new Intl.NumberFormat('fr-FR').format(value);
                        }
                    }
                },
                x: { 
                    grid: { display: false },
                    ticks: { font: { size: 8 } }
                }
            }
        }
    });
}

function initPaymentChart() {
    const ctx = document.getElementById('paymentChart').getContext('2d');
    
    const labels = paymentData.map(p => p.label || '');
    const data = paymentData.map(p => p.total || 0);
    const backgroundColors = {
        'cash': '#10b981',
        'card': '#8b5cf6',
        'mobile_money': '#f59e0b'
    };
    
    if (paymentChart) {
        paymentChart.destroy();
    }
    
    paymentChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: paymentData.map(p => backgroundColors[p.method] || '#0463f1'),
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
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const value = context.raw;
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                            return context.label + ': ' + new Intl.NumberFormat('fr-FR').format(value) + ' ";
        // line 1090
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1090, $this->source); })()), "html", null, true);
        yield " (' + percentage + '%)';
                        }
                    }
                }
            }
        }
    });
}

function initSubscriptionChart() {
    const ctx = document.getElementById('subscriptionChart').getContext('2d');
    
    const paymentsByMonth = {};
    subscriptionData.forEach(payment => {
        const date = new Date(payment.paymentDate);
        const monthKey = `\${date.getFullYear()}-\${date.getMonth() + 1}`;
        const monthLabel = date.toLocaleDateString('fr-FR', { month: 'short', year: 'numeric' });
        
        if (!paymentsByMonth[monthKey]) {
            paymentsByMonth[monthKey] = { label: monthLabel, total: 0 };
        }
        paymentsByMonth[monthKey].total += payment.amount || 0;
    });
    
    const sortedMonths = Object.keys(paymentsByMonth).sort();
    const labels = sortedMonths.map(m => paymentsByMonth[m].label);
    const data = sortedMonths.map(m => paymentsByMonth[m].total);
    
    if (subscriptionChart) {
        subscriptionChart.destroy();
    }
    
    subscriptionChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Paiements d\\'abonnement (";
        // line 1127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1127, $this->source); })()), "html", null, true);
        yield ")',
                data: data,
                backgroundColor: 'rgba(139, 92, 246, 0.7)',
                borderColor: '#8b5cf6',
                borderWidth: 1,
                borderRadius: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(context.raw) + ' ";
        // line 1142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1142, $this->source); })()), "html", null, true);
        yield "';
                        }
                    }
                },
                legend: { 
                    position: 'top',
                    labels: { boxWidth: 10, font: { size: 9 } }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'Montant (";
        // line 1154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1154, $this->source); })()), "html", null, true);
        yield ")', font: { size: 9 } },
                    ticks: {
                        font: { size: 8 },
                        callback: function(value) {
                            return new Intl.NumberFormat('fr-FR').format(value) + ' ";
        // line 1158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1158, $this->source); })()), "html", null, true);
        yield "';
                        }
                    }
                },
                x: { 
                    title: { display: true, text: 'Mois', font: { size: 9 } },
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
    if (applyBtn) applyBtn.classList.add('btn-loading');
    
    const params = new URLSearchParams();
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const paymentMethod = document.getElementById('paymentMethod')?.value;
    
    if (datePreset) params.append('date_preset', datePreset);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    if (paymentMethod) params.append('payment_method', paymentMethod);
    
    try {
        const response = await fetch(`/reports/financial/data?\${params.toString()}`);
        if (!response.ok) throw new Error('Erreur réseau');
        const data = await response.json();
        updateDashboard(data);
        updateActiveFilters();
        showNotification('Données mises à jour avec succès', 'success');
    } catch (error) {
        console.error('Erreur:', error);
        showNotification('Erreur lors du chargement des données', 'error');
    } finally {
        if (applyBtn) applyBtn.classList.remove('btn-loading');
        isLoading = false;
    }
}

function updateDashboard(data) {
    if (data.indicators) {
        const kpiRevenue = document.getElementById('kpiRevenue');
        if (kpiRevenue) kpiRevenue.textContent = new Intl.NumberFormat('fr-FR').format(data.indicators.revenue || 0);
        
        const kpiMargin = document.getElementById('kpiMargin');
        if (kpiMargin) kpiMargin.innerHTML = new Intl.NumberFormat('fr-FR').format(data.indicators.gross_margin || 0) + 
            ' <small class=\"fs-6\">";
        // line 1212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1212, $this->source); })()), "html", null, true);
        yield "</small>';
        
        const kpiOrders = document.getElementById('kpiOrders');
        if (kpiOrders) kpiOrders.textContent = new Intl.NumberFormat('fr-FR').format(data.indicators.orders_count || 0);
        
        const kpiAverageBasket = document.getElementById('kpiAverageBasket');
        if (kpiAverageBasket) kpiAverageBasket.textContent = new Intl.NumberFormat('fr-FR').format(data.indicators.average_basket || 0);
    }
    
    if (data.timeline && data.timeline.length > 0) {
        timelineData = data.timeline;
        initTimelineChart();
    }
    
    if (data.payment_distribution && data.payment_distribution.length > 0) {
        paymentData = data.payment_distribution;
        initPaymentChart();
        updatePaymentDetails(data.payment_distribution);
    } else if (data.payment_distribution && data.payment_distribution.length === 0) {
        updatePaymentDetails([]);
    }
    
    if (data.top_items) {
        updateTopItems(data.top_items);
    }
    
    if (data.margin_by_category) {
        updateMarginByCategory(data.margin_by_category);
    } else {
        updateMarginByCategory([]);
    }
    
    if (data.subscription_payments) {
        subscriptionData = data.subscription_payments;
        if (subscriptionData.length > 0) {
            initSubscriptionChart();
            updatePaymentHistory(subscriptionData);
        }
    }
    
    if (data.subscription_stats) {
        updateSubscriptionStats(data.subscription_stats);
    }
    
    if (data.recipe_sales) {
        updateRecipeSales(data.recipe_sales);
    }
    
    if (data.recipe_sales_stats) {
        updateRecipeSalesStats(data.recipe_sales_stats);
    }
}

function updateTopItems(items) {
    const container = document.getElementById('topItemsList');
    if (!container) return;
    
    if (!items || items.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = items.map((item, index) => `
        <tr>
            <td>\${index + 1}</td>
            <td>
                \${escapeHtml(item.name || '').slice(0, 25)}
                \${item.recipe_name ? `<small class=\"text-muted d-block\">\${escapeHtml(item.recipe_name).slice(0, 15)}</small>` : ''}
            </td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(item.total_quantity || 0)}</td>
            <td class=\"text-end fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(item.total_revenue || 0)}</td>
        </tr>
    `).join('');
}

function updateMarginByCategory(categories) {
    const container = document.getElementById('marginByCategoryList');
    if (!container) return;
    
    if (!categories || categories.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-simple fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = categories.map(category => `
        <tr>
            <td>\${escapeHtml(category.category || 'Sans catégorie').slice(0, 18)}</td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(category.revenue || 0)}</td>
            <td class=\"text-end text-muted d-none d-md-table-cell\">\${new Intl.NumberFormat('fr-FR').format(category.cogs || 0)}</td>
            <td class=\"text-end fw-semibold \${(category.margin || 0) >= 0 ? 'text-success' : 'text-danger'}\">
                \${new Intl.NumberFormat('fr-FR').format(category.margin || 0)}
            </td>
            <td class=\"text-end\">
                <span class=\"badge 
                    \${(category.margin_percentage || 0) >= 50 ? 'badge-margin-high'
                    : (category.margin_percentage || 0) >= 30 ? 'badge-margin-medium'
                    : 'badge-margin-low'}\" style=\"font-size:0.55rem;\">
                    \${category.margin_percentage || 0}%
                </span>
            </td>
        </tr>
    `).join('');
}

function updatePaymentDetails(payments) {
    const container = document.getElementById('paymentDetailsList');
    if (!container) return;
    
    if (!payments || payments.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    const icons = {
        'cash': 'money-bill-wave',
        'card': 'credit-card',
        'mobile_money': 'mobile-alt'
    };
    
    container.innerHTML = payments.map(payment => `
        <tr>
            <td>
                <span class=\"payment-badge \${payment.method || ''}\" style=\"font-size:0.55rem;\">
                    <i class=\"fas fa-\${icons[payment.method] || 'credit-card'}\"></i>
                    <span class=\"d-none d-sm-inline\">\${payment.label || payment.method || ''}</span>
                    <span class=\"d-inline d-sm-none\">\${(payment.label || payment.method || '').slice(0, 8)}</span>
                </span>
            </td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(payment.count || 0)}</td>
            <td class=\"text-end\">
                <div class=\"d-flex align-items-center justify-content-end gap-1\">
                    <span style=\"font-size:0.55rem;\">\${payment.percentage || 0}%</span>
                    <div class=\"progress-custom\" style=\"width: 50px;\">
                        <div class=\"progress-bar-custom bg-primary\" style=\"width: \${payment.percentage || 0}%\"></div>
                    </div>
                </div>
            </td>
            <td class=\"text-end fw-semibold\" style=\"font-size:0.65rem;\">\${new Intl.NumberFormat('fr-FR').format(payment.total || 0)}</td>
        </tr>
    `).join('');
}

function updateSubscriptionStats(stats) {
    if (!stats) return;
    
    const totalPaid = document.getElementById('subscriptionTotal');
    if (totalPaid) totalPaid.textContent = new Intl.NumberFormat('fr-FR').format(stats.total_paid || 0);
    
    const lastPayment = document.getElementById('lastPayment');
    if (lastPayment && stats.last_payment_date) {
        lastPayment.textContent = new Date(stats.last_payment_date).toLocaleDateString('fr-FR');
    }
}

function updatePaymentHistory(payments) {
    const container = document.getElementById('paymentHistoryList');
    if (!container) return;
    
    if (!payments || payments.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                    Aucun paiement d'abonnement enregistré
                </td>
            </tr>
        `;
        return;
    }
    
    const methodIcons = {
        'cash': 'money-bill-wave',
        'card': 'credit-card',
        'mobile_money': 'mobile-alt'
    };
    
    container.innerHTML = payments.slice(0, 10).map(payment => `
        <tr>
            <td>\${new Date(payment.paymentDate).toLocaleDateString('fr-FR')}</td>
            <td class=\"fw-semibold text-end\">\${new Intl.NumberFormat('fr-FR').format(payment.amount || 0)}</td>
            <td class=\"d-none d-sm-table-cell\">
                <span class=\"payment-badge \${payment.paymentMethod || ''}\" style=\"font-size:0.5rem;\">
                    <i class=\"fas fa-\${methodIcons[payment.paymentMethod] || 'credit-card'}\"></i>
                    \${(payment.paymentMethod || '').replace('_', ' ').toUpperCase().slice(0, 10)}
                </span>
            </td>
            <td class=\"d-none d-md-table-cell\">
                \${payment.status === 'paid' ? '<span class=\"badge bg-success\" style=\"font-size:0.5rem;\">Payé</span>' : 
                  payment.status === 'pending' ? '<span class=\"badge bg-warning\" style=\"font-size:0.5rem;\">En attente</span>' : 
                  '<span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">' + (payment.status || 'Inconnu') + '</span>'}
            </td>
        </tr>
    `).join('');
}

function updateRecipeSales(recipes) {
    const container = document.getElementById('recipeSalesList');
    if (!container) return;
    
    if (!recipes || recipes.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                    Aucune donnée de recette disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = recipes.slice(0, 10).map((recipe, index) => `
        <tr>
            <td>\${index + 1}</td>
            <td>
                <strong>\${escapeHtml(recipe.name).slice(0, 18)}</strong>
                \${recipe.category ? `<br><small class=\"text-muted\" style=\"font-size:0.5rem;\">\${escapeHtml(recipe.category).slice(0, 12)}</small>` : ''}
            </td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(recipe.quantity || 0)}</td>
            <td class=\"text-end fw-semibold text-success\">\${new Intl.NumberFormat('fr-FR').format(recipe.revenue || 0)}</td>
            <td class=\"text-end d-none d-md-table-cell\">
                <div class=\"d-flex align-items-center justify-content-end gap-1\">
                    <span style=\"font-size:0.55rem;\">\${recipe.percentage || 0}%</span>
                    <div class=\"progress-custom\" style=\"width: 60px;\">
                        <div class=\"progress-bar-custom bg-success\" style=\"width: \${recipe.percentage || 0}%\"></div>
                    </div>
                </div>
            </td>
        </tr>
    `).join('');
}

function updateRecipeSalesStats(stats) {
    if (!stats) return;
    
    const totalQuantity = document.getElementById('totalRecipesSold');
    if (totalQuantity) totalQuantity.textContent = new Intl.NumberFormat('fr-FR').format(stats.total_quantity || 0);
    
    const totalRevenue = document.getElementById('totalRecipesRevenue');
    if (totalRevenue) totalRevenue.textContent = new Intl.NumberFormat('fr-FR').format(stats.total_revenue || 0);
    
    const uniqueRecipes = document.getElementById('topRecipesCount');
    if (uniqueRecipes) uniqueRecipes.textContent = new Intl.NumberFormat('fr-FR').format(stats.unique_recipes || 0);
}

function updateActiveFilters() {
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const paymentMethod = document.getElementById('paymentMethod')?.value;
    
    const container = document.getElementById('activeFilters');
    if (!container) return;
    
    const activeFilters = [];
    
    if (datePreset) {
        const presetSelect = document.getElementById('datePreset');
        const selectedOption = presetSelect?.options[presetSelect.selectedIndex];
        const presetLabel = selectedOption?.text || datePreset;
        activeFilters.push({ key: 'date', label: `Période: \${presetLabel}` });
    } else if (dateFrom || dateTo) {
        activeFilters.push({ key: 'date', label: `Du \${dateFrom || '...'} au \${dateTo || '...'}` });
    }
    
    if (paymentMethod) {
        const labels = { cash: 'Espèces', card: 'Carte bancaire', mobile_money: 'Mobile Money' };
        activeFilters.push({ key: 'payment', label: `Paiement: \${labels[paymentMethod] || paymentMethod}` });
    }
    
    if (activeFilters.length === 0) {
        container.innerHTML = '';
        return;
    }
    
    container.innerHTML = activeFilters.map(filter => `
        <span class=\"badge bg-secondary d-inline-flex align-items-center gap-1 gap-sm-2 py-1 py-sm-2 px-2 px-sm-3\" style=\"cursor: pointer; font-size:0.6rem;\" onclick=\"removeFilter('\${filter.key}')\">
            <i class=\"fas fa-filter\"></i>
            \${filter.label}
            <i class=\"fas fa-times ms-1\"></i>
        </span>
    `).join('');
}

function removeFilter(key) {
    if (key === 'date') {
        const datePreset = document.getElementById('datePreset');
        const dateFrom = document.getElementById('dateFrom');
        const dateTo = document.getElementById('dateTo');
        if (datePreset) datePreset.value = '';
        if (dateFrom) dateFrom.value = '';
        if (dateTo) dateTo.value = '';
    } else if (key === 'payment') {
        const paymentMethod = document.getElementById('paymentMethod');
        if (paymentMethod) paymentMethod.value = '';
    }
    applyFilters();
}

function changeChartType(type) {
    currentChartType = type;
    if (timelineData.length > 0) {
        initTimelineChart();
    }
}

function refreshData() {
    applyFilters();
}

function exportData() {
    const params = new URLSearchParams();
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const paymentMethod = document.getElementById('paymentMethod')?.value;
    
    if (datePreset) params.append('date_preset', datePreset);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    if (paymentMethod) params.append('payment_method', paymentMethod);
    
    window.location.href = `/reports/financial/export?\${params.toString()}`;
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `position-fixed bottom-0 end-0 p-2 p-md-3 m-2 m-md-3 bg-\${type === 'error' ? 'danger' : 'success'} text-white rounded shadow`;
    notification.style.zIndex = '9999';
    notification.style.fontSize = '0.7rem';
    notification.innerHTML = `<i class=\"fas fa-\${type === 'error' ? 'exclamation-circle' : 'check-circle'} me-2\"></i>\${message}`;
    document.body.appendChild(notification);
    setTimeout(() => notification.remove(), 3000);
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
        return "reports/financial/index.html.twig";
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
        return array (  1804 => 1212,  1747 => 1158,  1740 => 1154,  1725 => 1142,  1707 => 1127,  1667 => 1090,  1610 => 1036,  1591 => 1020,  1552 => 984,  1539 => 974,  1507 => 945,  1503 => 944,  1499 => 943,  1485 => 932,  1472 => 931,  1452 => 920,  1440 => 913,  1438 => 912,  1431 => 910,  1424 => 906,  1419 => 904,  1413 => 901,  1407 => 898,  1403 => 897,  1393 => 896,  1389 => 895,  1385 => 893,  1380 => 892,  1355 => 869,  1348 => 864,  1336 => 857,  1334 => 856,  1328 => 854,  1322 => 852,  1318 => 850,  1316 => 849,  1313 => 848,  1311 => 847,  1304 => 843,  1294 => 842,  1290 => 841,  1285 => 839,  1281 => 838,  1278 => 837,  1273 => 836,  1251 => 816,  1249 => 815,  1242 => 810,  1236 => 808,  1234 => 807,  1230 => 805,  1226 => 803,  1220 => 800,  1215 => 799,  1213 => 798,  1204 => 791,  1196 => 789,  1194 => 788,  1190 => 786,  1186 => 784,  1180 => 782,  1178 => 781,  1168 => 774,  1163 => 772,  1147 => 758,  1141 => 754,  1134 => 749,  1127 => 744,  1115 => 737,  1113 => 736,  1095 => 731,  1090 => 729,  1084 => 726,  1080 => 725,  1077 => 724,  1071 => 722,  1069 => 721,  1065 => 720,  1060 => 718,  1057 => 717,  1039 => 716,  1022 => 701,  1020 => 700,  1010 => 693,  1000 => 686,  995 => 684,  983 => 675,  969 => 663,  967 => 662,  957 => 654,  945 => 647,  943 => 646,  934 => 642,  929 => 641,  924 => 640,  920 => 639,  913 => 635,  905 => 634,  901 => 633,  897 => 632,  890 => 631,  887 => 630,  882 => 629,  856 => 605,  844 => 598,  842 => 597,  827 => 595,  823 => 594,  820 => 593,  814 => 591,  811 => 590,  806 => 589,  801 => 587,  798 => 586,  780 => 585,  767 => 579,  759 => 573,  753 => 572,  697 => 519,  691 => 516,  666 => 494,  644 => 475,  638 => 472,  634 => 471,  609 => 449,  574 => 417,  562 => 408,  551 => 399,  542 => 396,  535 => 395,  531 => 394,  501 => 366,  495 => 365,  491 => 363,  487 => 361,  483 => 359,  481 => 358,  463 => 343,  452 => 334,  439 => 333,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reports/financial/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Rapport Financier - {{ company_name }}{% endblock %}

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

    .report-dashboard {
        background: #f1f5f9;
        min-height: 100vh;
    }

    .kpi-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.25rem;
        transition: all 0.3s ease;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        height: 100%;
        position: relative;
        overflow: hidden;
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
    .kpi-icon.warning { background: rgba(245, 158, 11, 0.1); color: var(--warning); }
    .kpi-icon.info { background: rgba(14, 165, 233, 0.1); color: var(--info); }
    
    .kpi-value {
        font-size: 1.75rem;
        font-weight: 800;
        line-height: 1.2;
        margin-top: 0.5rem;
    }
    
    .kpi-label {
        color: #64748b;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .kpi-trend {
        font-size: 0.7rem;
        margin-top: 0.5rem;
    }
    
    .kpi-trend.up { color: var(--success); }
    .kpi-trend.down { color: var(--danger); }

    .chart-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .chart-card:hover {
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
    }
    
    .chart-title {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 1.25rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 0.75rem;
    }
    
    .chart-title i {
        color: var(--primary);
        margin-right: 0.5rem;
    }
    
    .chart-container {
        position: relative;
        height: 280px;
    }

    .filters-section {
        background: white;
        border-radius: 1.5rem;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    
    .filter-group {
        margin-bottom: 0.75rem;
    }
    
    .filter-label {
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748b;
        margin-bottom: 0.4rem;
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }
    
    .data-table {
        width: 100%;
        font-size: 0.85rem;
    }
    
    .data-table th {
        background: #f8fafc;
        padding: 0.75rem;
        font-weight: 600;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .data-table td {
        padding: 0.6rem 0.75rem;
        border-bottom: 1px solid #f1f5f9;
    }
    
    .data-table tr:hover td {
        background: #f8fafc;
    }
    
    .badge-margin-high { background: #10b98120; color: #10b981; }
    .badge-margin-medium { background: #f59e0b20; color: #f59e0b; }
    .badge-margin-low { background: #ef444420; color: #ef4444; }
    
    .payment-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    .payment-badge.cash { background: #10b98120; color: #10b981; }
    .payment-badge.card { background: #8b5cf620; color: #8b5cf6; }
    .payment-badge.mobile_money { background: #f59e0b20; color: #f59e0b; }
    
    .progress-custom {
        height: 6px;
        background: #e5e7eb;
        border-radius: 3px;
        overflow: hidden;
    }
    
    .progress-bar-custom {
        height: 100%;
        border-radius: 3px;
        transition: width 0.5s ease;
    }
    
    .plan-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    .plan-badge.freemium { background: #64748b20; color: #64748b; }
    .plan-badge.basic { background: #0463f120; color: #0463f1; }
    .plan-badge.premium { background: #8b5cf620; color: #8b5cf6; }

    /* ========================================
       RESPONSIVE
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
    
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.3rem; }
        .chart-container { height: 220px; }
        .kpi-card { padding: 1rem; }
        .data-table { font-size: 0.7rem; }
        .data-table th, .data-table td { padding: 0.3rem 0.4rem; }
        
        .kpi-icon {
            width: 36px;
            height: 36px;
            font-size: 1rem;
        }
        
        .filter-col-half {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
    }
    
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        .kpi-value { font-size: 1.1rem; }
        .kpi-card { padding: 0.75rem; }
        .kpi-label { font-size: 0.6rem; }
        .kpi-trend { font-size: 0.55rem; }
        
        .chart-container { height: 180px; }
        .chart-card { padding: 0.75rem; margin-bottom: 0.75rem; }
        .chart-title { font-size: 0.8rem; }
        
        .filters-section { padding: 0.75rem; }
        .filter-label { font-size: 0.55rem; }
        .filter-group { margin-bottom: 0.5rem; }
        
        .data-table { font-size: 0.6rem; }
        .data-table th, .data-table td { padding: 0.2rem 0.3rem; }
        
        .payment-badge { font-size: 0.55rem; padding: 0.1rem 0.4rem; }
        .badge { font-size: 0.5rem !important; padding: 0.15rem 0.3rem !important; }
        
        .action-buttons .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        
        .filter-col, .filter-col-half {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        
        .h1 { font-size: 1.2rem !important; }
        .h2 { font-size: 1rem !important; }
        .h3 { font-size: 0.9rem !important; }
        .text-muted { font-size: 0.6rem !important; }
        
        .breadcrumb { font-size: 0.55rem !important; }
        
        .modal-dialog { margin: 0.5rem; }
        .modal-content { border-radius: 12px !important; }
        
        .progress-custom { height: 4px; }
    }
    
    @media print {
        .no-print, .filters-section, .action-buttons, .btn, nav {
            display: none !important;
        }
        .report-dashboard { background: white; }
        .kpi-card, .chart-card { box-shadow: none; border: 1px solid #e5e7eb; break-inside: avoid; }
        body { padding: 0; margin: 0; }
    }
    
    @keyframes spin { to { transform: rotate(360deg); } }
    .btn-loading { position: relative; pointer-events: none; opacity: 0.7; }
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
</style>
{% endblock %}

{% block body %}
<div class=\"report-dashboard py-2 py-md-3\">
    <div class=\"container-fluid px-2 px-md-4\">
        
        <!-- En-tête -->
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
            <div class=\"w-100 w-sm-auto\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-1\">
                        <li class=\"breadcrumb-item small\">
                            <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active small\">
                            <i class=\"fas fa-chart-line me-1\"></i> Rapport Financier
                        </li>
                    </ol>
                </nav>
                <h1 class=\"h3 fw-bold mb-0\">
                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                    Rapport Financier
                </h1>
                <p class=\"text-muted small mb-0 d-none d-sm-block\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    {% if is_restaurant %}
                        Analyse complète des performances financières de votre restaurant
                    {% else %}
                        Analyse complète des performances financières de votre commerce
                    {% endif %}
                </p>
                <p class=\"text-muted small mb-0 d-block d-sm-none\">
                    {% if is_restaurant %}Performances restaurant{% else %}Performances commerce{% endif %}
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
                <button class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-sm-grow-0 d-print-none\" onclick=\"window.print()\" title=\"Imprimer\">
                    <i class=\"fas fa-print\"></i>
                </button>
            </div>
        </div>

        <!-- Section Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-2 g-md-3 align-items-end\">
                <div class=\"col-12 col-md-3 filter-col\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-alt\"></i> Période prédéfinie
                        </label>
                        <select id=\"datePreset\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Personnalisée</option>
                            {% for key, label in date_presets %}
                                <option value=\"{{ key }}\" {{ filters.date_preset == key ? 'selected' }}>
                                    {{ label }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"col-6 col-md-3 filter-col-half\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-day\"></i> Date du
                        </label>
                        <input type=\"date\" id=\"dateFrom\" class=\"form-control form-control-sm filter-input\" 
                               value=\"{{ filters.date_from }}\">
                    </div>
                </div>
                <div class=\"col-6 col-md-3 filter-col-half\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-day\"></i> Date au
                        </label>
                        <input type=\"date\" id=\"dateTo\" class=\"form-control form-control-sm filter-input\" 
                               value=\"{{ filters.date_to }}\">
                    </div>
                </div>
                <div class=\"col-12 col-md-3 filter-col\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-credit-card\"></i> Mode de paiement
                        </label>
                        <select id=\"paymentMethod\" class=\"form-select form-select-sm filter-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"cash\">Espèces</option>
                            <option value=\"card\">Carte bancaire</option>
                            <option value=\"mobile_money\">Mobile Money</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div id=\"activeFilters\" class=\"d-flex gap-1 gap-md-2 flex-wrap mt-2 mt-md-3 pt-2 pt-md-3 border-top\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-chart-line me-1\"></i> <span class=\"d-none d-sm-inline\">Chiffre d'affaires</span>
                                <span class=\"d-inline d-sm-none\">CA</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiRevenue\">
                                {{ indicators.revenue|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\" id=\"kpiRevenueTrend\">
                                <i class=\"fas fa-arrow-up me-1\"></i> vs période précédente
                            </div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-chart-line\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card success\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-chart-pie me-1\"></i> <span class=\"d-none d-sm-inline\">Marge brute</span>
                                <span class=\"d-inline d-sm-none\">Marge</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiMargin\">
                                {{ indicators.gross_margin|default(0)|number_format(0, ',', ' ') }}
                                <small class=\"fs-6\">{{ currency }}</small>
                            </div>
                            <div class=\"kpi-trend up\">
                                ({{ indicators.gross_margin_percentage|default(0) }}%)
                            </div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-chart-pie\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> <span class=\"d-none d-sm-inline\">Nombre de ventes</span>
                                <span class=\"d-inline d-sm-none\">Ventes</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiOrders\">
                                {{ indicators.orders_count|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                commandes
                            </div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card info\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-wallet me-1\"></i> <span class=\"d-none d-sm-inline\">Panier moyen</span>
                                <span class=\"d-inline d-sm-none\">Panier</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiAverageBasket\">
                                {{ indicators.average_basket|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                {{ currency }} par vente
                            </div>
                        </div>
                        <div class=\"kpi-icon info\">
                            <i class=\"fas fa-wallet\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques principaux -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12 col-lg-8\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <div class=\"small\">
                            <i class=\"fas fa-chart-line\"></i>
                            <span class=\"d-none d-sm-inline\">Évolution du chiffre d'affaires</span>
                            <span class=\"d-inline d-sm-none\">Évolution CA</span>
                        </div>
                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('revenue')\">CA</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('orders')\">Cmd</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('basket')\">Panier</button>
                        </div>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"timelineChart\"></canvas>
                    </div>
                </div>
            </div>
            
            <div class=\"col-12 col-lg-4\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-pie\"></i>
                        <span class=\"d-none d-sm-inline\">Répartition des paiements</span>
                        <span class=\"d-inline d-sm-none\">Paiements</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"paymentChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top produits et marge par catégorie -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-trophy\"></i>
                        Top {% if is_restaurant %}recettes{% else %}produits{% endif %}
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{% if is_restaurant %}Recette{% else %}Produit{% endif %}</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">Qté</th>
                                    <th class=\"text-end\">CA</th>
                                </thead>
                            </thead>
                            <tbody id=\"topItemsList\">
                                {% for item in top_items %}
                                    <tr>
                                        <td>{{ loop.index }}</td>
                                        <td>
                                            {{ item.name|slice(0, 20) }}{% if item.name|length > 20 %}...{% endif %}
                                            {% if item.recipe_name %}
                                                <small class=\"text-muted d-block\">{{ item.recipe_name|slice(0, 15) }}</small>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-end d-none d-sm-table-cell\">{{ item.total_quantity|number_format(0, ',', ' ') }}</td>
                                        <td class=\"text-end fw-semibold\">{{ item.total_revenue|number_format(0, ',', ' ') }}</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                                            Aucune donnée disponible
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-simple\"></i>
                        Marge par catégorie
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Catégorie</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">CA</th>
                                    <th class=\"text-end d-none d-md-table-cell\">Coût</th>
                                    <th class=\"text-end\">Marge</th>
                                    <th class=\"text-end\">%</th>
                                </tr>
                            </thead>
                            <tbody id=\"marginByCategoryList\">
                                {% for category in margin_by_category %}
                                    <tr>
                                        <td>{{ category.category|slice(0, 15) }}{% if category.category|length > 15 %}...{% endif %}</td>
                                        <td class=\"text-end d-none d-sm-table-cell\">{{ category.revenue|number_format(0, ',', ' ') }}</td>
                                        <td class=\"text-end text-muted d-none d-md-table-cell\">{{ category.cogs|number_format(0, ',', ' ') }}</td>
                                        <td class=\"text-end fw-semibold {% if category.margin >= 0 %}text-success{% else %}text-danger{% endif %}\">
                                            {{ category.margin|number_format(0, ',', ' ') }}
                                        </td>
                                        <td class=\"text-end\">
                                            <span class=\"badge 
                                                {% if category.margin_percentage >= 50 %}badge-margin-high
                                                {% elseif category.margin_percentage >= 30 %}badge-margin-medium
                                                {% else %}badge-margin-low{% endif %}\">
                                                {{ category.margin_percentage }}%
                                            </span>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-chart-simple fa-2x mb-2 d-block\"></i>
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

        <!-- Section RESTAURANT : Analyse des ventes par recette -->
        {% if is_restaurant %}
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-line\"></i>
                        Analyse des ventes par recette
                    </div>
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Total recettes vendues</div>
                                <div class=\"h2 fw-bold text-primary fs-4 fs-md-2\" id=\"totalRecipesSold\">
                                    {{ recipe_sales_stats.total_quantity|default(0)|number_format(0, ',', ' ') }}
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">articles vendus</div>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">CA généré</div>
                                <div class=\"h2 fw-bold text-success fs-4 fs-md-2\" id=\"totalRecipesRevenue\">
                                    {{ recipe_sales_stats.total_revenue|default(0)|number_format(0, ',', ' ') }}
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">{{ currency }}</div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Recettes populaires</div>
                                <div class=\"h2 fw-bold text-info fs-4 fs-md-2\" id=\"topRecipesCount\">
                                    {{ recipe_sales_stats.unique_recipes|default(0)|number_format(0, ',', ' ') }}
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">recettes différentes</div>
                            </div>
                        </div>
                    </div>
                    
                    {% if recipe_sales|default([])|length > 0 %}
                    <hr>
                    <div class=\"mt-2 mt-md-3\">
                        <strong class=\"small\" style=\"font-size:0.65rem;\">Classement des recettes :</strong>
                        <div class=\"table-responsive mt-2\">
                            <table class=\"data-table\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Recette</th>
                                        <th class=\"text-end d-none d-sm-table-cell\">Qté</th>
                                        <th class=\"text-end\">CA</th>
                                        <th class=\"text-end d-none d-md-table-cell\">%</th>
                                    </tr>
                                </thead>
                                <tbody id=\"recipeSalesList\">
                                    {% for recipe in recipe_sales|slice(0, 10) %}
                                        <tr>
                                            <td>{{ loop.index }}</td>
                                            <td>
                                                <strong>{{ recipe.name|slice(0, 15) }}</strong>
                                                {% if recipe.category %}
                                                    <br><small class=\"text-muted\" style=\"font-size:0.5rem;\">{{ recipe.category|slice(0, 12) }}</small>
                                                {% endif %}
                                            </td>
                                            <td class=\"text-end d-none d-sm-table-cell\">{{ recipe.quantity|number_format(0, ',', ' ') }}</td>
                                            <td class=\"text-end fw-semibold text-success\">{{ recipe.revenue|number_format(0, ',', ' ') }}</td>
                                            <td class=\"text-end d-none d-md-table-cell\">
                                                <div class=\"d-flex align-items-center justify-content-end gap-1\">
                                                    <span style=\"font-size:0.6rem;\">{{ recipe.percentage }}%</span>
                                                    <div class=\"progress-custom\" style=\"width: 60px;\">
                                                        <div class=\"progress-bar-custom bg-success\" style=\"width: {{ recipe.percentage }}%\"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                                <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                                                Aucune donnée de recette disponible
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {% else %}
                    <div class=\"text-center py-4 text-muted\">
                        <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                        Aucune vente de recette enregistrée sur cette période
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
        {% endif %}

        <!-- Section ABONNEMENTS : Évolution des paiements -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-line\"></i>
                        Évolution des paiements d'abonnement
                    </div>
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Total payé</div>
                                <div class=\"h2 fw-bold text-primary fs-4 fs-md-2\" id=\"subscriptionTotal\">
                                    {{ subscription_stats.total_paid|default(0)|number_format(0, ',', ' ') }}
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">{{ currency }}</div>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Dernier paiement</div>
                                <div class=\"h2 fw-bold text-warning fs-5 fs-md-3\" id=\"lastPayment\">
                                    {% if subscription_stats.last_payment_date %}
                                        {{ subscription_stats.last_payment_date|date('d/m/Y') }}
                                    {% else %}
                                        -
                                    {% endif %}
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">
                                    {% if subscription_stats.last_payment_amount %}
                                        {{ subscription_stats.last_payment_amount|number_format(0, ',', ' ') }} {{ currency }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-4\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Plan actuel</div>
                                <div class=\"h2 fw-bold text-info fs-5 fs-md-3\" id=\"currentPlan\">
                                    {% if current_plan %}
                                        <span class=\"plan-badge {{ current_plan|lower }}\" style=\"font-size:0.6rem;\">
                                            {{ current_plan|capitalize }}
                                        </span>
                                    {% else %}
                                        -
                                    {% endif %}
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">
                                    {% if subscription_stats.next_payment_date %}
                                        Prochain: {{ subscription_stats.next_payment_date|date('d/m/Y') }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {% if subscription_payments|default([])|length > 0 %}
                    <hr>
                    <div class=\"mt-2 mt-md-3\">
                        <div class=\"chart-container\" style=\"height: 200px;\">
                            <canvas id=\"subscriptionChart\"></canvas>
                        </div>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3\">
                        <strong class=\"small\" style=\"font-size:0.65rem;\">Historique des paiements :</strong>
                        <div class=\"table-responsive mt-2\">
                            <table class=\"data-table\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th class=\"text-end\">Montant</th>
                                        <th class=\"d-none d-sm-table-cell\">Méthode</th>
                                        <th class=\"d-none d-md-table-cell\">Statut</th>
                                    </tr>
                                </thead>
                                <tbody id=\"paymentHistoryList\">
                                    {% for payment in subscription_payments|slice(0, 10) %}
                                        <tr>
                                            <td>{{ payment.paymentDate|date('d/m/Y') }}</td>
                                            <td class=\"fw-semibold text-end\">{{ payment.amount|number_format(0, ',', ' ') }}</td>
                                            <td class=\"d-none d-sm-table-cell\">
                                                <span class=\"payment-badge {{ payment.paymentMethod == 'cash' ? 'cash' : (payment.paymentMethod == 'card' ? 'card' : 'mobile_money') }}\" style=\"font-size:0.5rem;\">
                                                    <i class=\"fas fa-{% if payment.paymentMethod == 'cash' %}money-bill-wave{% elseif payment.paymentMethod == 'card' %}credit-card{% else %}mobile-alt{% endif %}\"></i>
                                                    {{ payment.paymentMethod|replace({'_': ' '})|capitalize|slice(0, 10) }}
                                                </span>
                                            </td>
                                            <td class=\"d-none d-md-table-cell\">
                                                {% if payment.status == 'paid' %}
                                                    <span class=\"badge bg-success\" style=\"font-size:0.5rem;\">Payé</span>
                                                {% elseif payment.status == 'pending' %}
                                                    <span class=\"badge bg-warning\" style=\"font-size:0.5rem;\">En attente</span>
                                                {% else %}
                                                    <span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">{{ payment.status }}</span>
                                                {% endif %}
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                                                <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                                                Aucun paiement d'abonnement enregistré
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Répartition des méthodes de paiement détaillée -->
        <div class=\"row g-2 g-md-3\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-credit-card\"></i>
                        Détail des paiements (Ventes)
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Mode</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">Nb</th>
                                    <th class=\"text-end\">%</th>
                                    <th class=\"text-end\">Montant</th>
                                </tr>
                            </thead>
                            <tbody id=\"paymentDetailsList\">
                                {% for payment in payment_distribution %}
                                    <tr>
                                        <td>
                                            <span class=\"payment-badge {{ payment.method }}\" style=\"font-size:0.55rem;\">
                                                <i class=\"fas fa-{% if payment.method == 'cash' %}money-bill-wave{% elseif payment.method == 'card' %}credit-card{% else %}mobile-alt{% endif %}\"></i>
                                                <span class=\"d-none d-sm-inline\">{{ payment.label }}</span>
                                                <span class=\"d-inline d-sm-none\">{{ payment.label|slice(0, 8) }}</span>
                                            </span>
                                        </td>
                                        <td class=\"text-end d-none d-sm-table-cell\">{{ payment.count|number_format(0, ',', ' ') }}</td>
                                        <td class=\"text-end\">
                                            <div class=\"d-flex align-items-center justify-content-end gap-1\">
                                                <span style=\"font-size:0.6rem;\">{{ payment.percentage }}%</span>
                                                <div class=\"progress-custom\" style=\"width: 50px;\">
                                                    <div class=\"progress-bar-custom bg-primary\" style=\"width: {{ payment.percentage }}%\"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=\"text-end fw-semibold\" style=\"font-size:0.65rem;\">{{ payment.total|number_format(0, ',', ' ') }}</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
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

    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
<script>
// Variables globales
let timelineChart = null;
let paymentChart = null;
let subscriptionChart = null;
let currentChartType = 'revenue';
let isLoading = false;

// Données initiales
let timelineData = {{ timeline|default([])|json_encode|raw }};
let paymentData = {{ payment_distribution|default([])|json_encode|raw }};
let subscriptionData = {{ subscription_payments|default([])|json_encode|raw }};

document.addEventListener('DOMContentLoaded', function() {
    if (timelineData.length > 0) {
        initCharts();
    }
    if (subscriptionData.length > 0) {
        initSubscriptionChart();
    }
    updateActiveFilters();
});

function initCharts() {
    initTimelineChart();
    if (paymentData.length > 0) {
        initPaymentChart();
    }
}

function initTimelineChart() {
    const ctx = document.getElementById('timelineChart').getContext('2d');
    
    let data = [];
    let label = '';
    let backgroundColor = '';
    let borderColor = '';
    
    if (currentChartType === 'revenue') {
        data = timelineData.map(d => d.revenue || 0);
        label = 'Chiffre d\\'affaires ({{ currency }})';
        backgroundColor = 'rgba(4, 99, 241, 0.1)';
        borderColor = '#0463f1';
    } else if (currentChartType === 'orders') {
        data = timelineData.map(d => d.orders || 0);
        label = 'Nombre de commandes';
        backgroundColor = 'rgba(16, 185, 129, 0.1)';
        borderColor = '#10b981';
    } else {
        data = timelineData.map(d => d.average_basket || 0);
        label = 'Panier moyen ({{ currency }})';
        backgroundColor = 'rgba(245, 158, 11, 0.1)';
        borderColor = '#f59e0b';
    }
    
    if (timelineChart) {
        timelineChart.destroy();
    }
    
    timelineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: timelineData.map(d => d.month || ''),
            datasets: [{
                label: label,
                data: data,
                borderColor: borderColor,
                backgroundColor: backgroundColor,
                borderWidth: 2,
                fill: true,
                tension: 0.4,
                pointRadius: 3,
                pointHoverRadius: 5,
                pointBackgroundColor: borderColor,
                pointBorderColor: 'white'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let value = context.raw;
                            if (currentChartType !== 'orders') {
                                return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(value) + ' {{ currency }}';
                            }
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(value);
                        }
                    }
                },
                legend: { position: 'top', labels: { boxWidth: 12, font: { size: 10 } } }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { display: true, drawBorder: false },
                    ticks: {
                        font: { size: 9 },
                        callback: function(value) {
                            if (currentChartType !== 'orders') {
                                return new Intl.NumberFormat('fr-FR').format(value) + ' {{ currency }}';
                            }
                            return new Intl.NumberFormat('fr-FR').format(value);
                        }
                    }
                },
                x: { 
                    grid: { display: false },
                    ticks: { font: { size: 8 } }
                }
            }
        }
    });
}

function initPaymentChart() {
    const ctx = document.getElementById('paymentChart').getContext('2d');
    
    const labels = paymentData.map(p => p.label || '');
    const data = paymentData.map(p => p.total || 0);
    const backgroundColors = {
        'cash': '#10b981',
        'card': '#8b5cf6',
        'mobile_money': '#f59e0b'
    };
    
    if (paymentChart) {
        paymentChart.destroy();
    }
    
    paymentChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: paymentData.map(p => backgroundColors[p.method] || '#0463f1'),
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
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const value = context.raw;
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                            return context.label + ': ' + new Intl.NumberFormat('fr-FR').format(value) + ' {{ currency }} (' + percentage + '%)';
                        }
                    }
                }
            }
        }
    });
}

function initSubscriptionChart() {
    const ctx = document.getElementById('subscriptionChart').getContext('2d');
    
    const paymentsByMonth = {};
    subscriptionData.forEach(payment => {
        const date = new Date(payment.paymentDate);
        const monthKey = `\${date.getFullYear()}-\${date.getMonth() + 1}`;
        const monthLabel = date.toLocaleDateString('fr-FR', { month: 'short', year: 'numeric' });
        
        if (!paymentsByMonth[monthKey]) {
            paymentsByMonth[monthKey] = { label: monthLabel, total: 0 };
        }
        paymentsByMonth[monthKey].total += payment.amount || 0;
    });
    
    const sortedMonths = Object.keys(paymentsByMonth).sort();
    const labels = sortedMonths.map(m => paymentsByMonth[m].label);
    const data = sortedMonths.map(m => paymentsByMonth[m].total);
    
    if (subscriptionChart) {
        subscriptionChart.destroy();
    }
    
    subscriptionChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Paiements d\\'abonnement ({{ currency }})',
                data: data,
                backgroundColor: 'rgba(139, 92, 246, 0.7)',
                borderColor: '#8b5cf6',
                borderWidth: 1,
                borderRadius: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(context.raw) + ' {{ currency }}';
                        }
                    }
                },
                legend: { 
                    position: 'top',
                    labels: { boxWidth: 10, font: { size: 9 } }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'Montant ({{ currency }})', font: { size: 9 } },
                    ticks: {
                        font: { size: 8 },
                        callback: function(value) {
                            return new Intl.NumberFormat('fr-FR').format(value) + ' {{ currency }}';
                        }
                    }
                },
                x: { 
                    title: { display: true, text: 'Mois', font: { size: 9 } },
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
    if (applyBtn) applyBtn.classList.add('btn-loading');
    
    const params = new URLSearchParams();
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const paymentMethod = document.getElementById('paymentMethod')?.value;
    
    if (datePreset) params.append('date_preset', datePreset);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    if (paymentMethod) params.append('payment_method', paymentMethod);
    
    try {
        const response = await fetch(`/reports/financial/data?\${params.toString()}`);
        if (!response.ok) throw new Error('Erreur réseau');
        const data = await response.json();
        updateDashboard(data);
        updateActiveFilters();
        showNotification('Données mises à jour avec succès', 'success');
    } catch (error) {
        console.error('Erreur:', error);
        showNotification('Erreur lors du chargement des données', 'error');
    } finally {
        if (applyBtn) applyBtn.classList.remove('btn-loading');
        isLoading = false;
    }
}

function updateDashboard(data) {
    if (data.indicators) {
        const kpiRevenue = document.getElementById('kpiRevenue');
        if (kpiRevenue) kpiRevenue.textContent = new Intl.NumberFormat('fr-FR').format(data.indicators.revenue || 0);
        
        const kpiMargin = document.getElementById('kpiMargin');
        if (kpiMargin) kpiMargin.innerHTML = new Intl.NumberFormat('fr-FR').format(data.indicators.gross_margin || 0) + 
            ' <small class=\"fs-6\">{{ currency }}</small>';
        
        const kpiOrders = document.getElementById('kpiOrders');
        if (kpiOrders) kpiOrders.textContent = new Intl.NumberFormat('fr-FR').format(data.indicators.orders_count || 0);
        
        const kpiAverageBasket = document.getElementById('kpiAverageBasket');
        if (kpiAverageBasket) kpiAverageBasket.textContent = new Intl.NumberFormat('fr-FR').format(data.indicators.average_basket || 0);
    }
    
    if (data.timeline && data.timeline.length > 0) {
        timelineData = data.timeline;
        initTimelineChart();
    }
    
    if (data.payment_distribution && data.payment_distribution.length > 0) {
        paymentData = data.payment_distribution;
        initPaymentChart();
        updatePaymentDetails(data.payment_distribution);
    } else if (data.payment_distribution && data.payment_distribution.length === 0) {
        updatePaymentDetails([]);
    }
    
    if (data.top_items) {
        updateTopItems(data.top_items);
    }
    
    if (data.margin_by_category) {
        updateMarginByCategory(data.margin_by_category);
    } else {
        updateMarginByCategory([]);
    }
    
    if (data.subscription_payments) {
        subscriptionData = data.subscription_payments;
        if (subscriptionData.length > 0) {
            initSubscriptionChart();
            updatePaymentHistory(subscriptionData);
        }
    }
    
    if (data.subscription_stats) {
        updateSubscriptionStats(data.subscription_stats);
    }
    
    if (data.recipe_sales) {
        updateRecipeSales(data.recipe_sales);
    }
    
    if (data.recipe_sales_stats) {
        updateRecipeSalesStats(data.recipe_sales_stats);
    }
}

function updateTopItems(items) {
    const container = document.getElementById('topItemsList');
    if (!container) return;
    
    if (!items || items.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = items.map((item, index) => `
        <tr>
            <td>\${index + 1}</td>
            <td>
                \${escapeHtml(item.name || '').slice(0, 25)}
                \${item.recipe_name ? `<small class=\"text-muted d-block\">\${escapeHtml(item.recipe_name).slice(0, 15)}</small>` : ''}
            </td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(item.total_quantity || 0)}</td>
            <td class=\"text-end fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(item.total_revenue || 0)}</td>
        </tr>
    `).join('');
}

function updateMarginByCategory(categories) {
    const container = document.getElementById('marginByCategoryList');
    if (!container) return;
    
    if (!categories || categories.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-simple fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = categories.map(category => `
        <tr>
            <td>\${escapeHtml(category.category || 'Sans catégorie').slice(0, 18)}</td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(category.revenue || 0)}</td>
            <td class=\"text-end text-muted d-none d-md-table-cell\">\${new Intl.NumberFormat('fr-FR').format(category.cogs || 0)}</td>
            <td class=\"text-end fw-semibold \${(category.margin || 0) >= 0 ? 'text-success' : 'text-danger'}\">
                \${new Intl.NumberFormat('fr-FR').format(category.margin || 0)}
            </td>
            <td class=\"text-end\">
                <span class=\"badge 
                    \${(category.margin_percentage || 0) >= 50 ? 'badge-margin-high'
                    : (category.margin_percentage || 0) >= 30 ? 'badge-margin-medium'
                    : 'badge-margin-low'}\" style=\"font-size:0.55rem;\">
                    \${category.margin_percentage || 0}%
                </span>
            </td>
        </tr>
    `).join('');
}

function updatePaymentDetails(payments) {
    const container = document.getElementById('paymentDetailsList');
    if (!container) return;
    
    if (!payments || payments.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    const icons = {
        'cash': 'money-bill-wave',
        'card': 'credit-card',
        'mobile_money': 'mobile-alt'
    };
    
    container.innerHTML = payments.map(payment => `
        <tr>
            <td>
                <span class=\"payment-badge \${payment.method || ''}\" style=\"font-size:0.55rem;\">
                    <i class=\"fas fa-\${icons[payment.method] || 'credit-card'}\"></i>
                    <span class=\"d-none d-sm-inline\">\${payment.label || payment.method || ''}</span>
                    <span class=\"d-inline d-sm-none\">\${(payment.label || payment.method || '').slice(0, 8)}</span>
                </span>
            </td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(payment.count || 0)}</td>
            <td class=\"text-end\">
                <div class=\"d-flex align-items-center justify-content-end gap-1\">
                    <span style=\"font-size:0.55rem;\">\${payment.percentage || 0}%</span>
                    <div class=\"progress-custom\" style=\"width: 50px;\">
                        <div class=\"progress-bar-custom bg-primary\" style=\"width: \${payment.percentage || 0}%\"></div>
                    </div>
                </div>
            </td>
            <td class=\"text-end fw-semibold\" style=\"font-size:0.65rem;\">\${new Intl.NumberFormat('fr-FR').format(payment.total || 0)}</td>
        </tr>
    `).join('');
}

function updateSubscriptionStats(stats) {
    if (!stats) return;
    
    const totalPaid = document.getElementById('subscriptionTotal');
    if (totalPaid) totalPaid.textContent = new Intl.NumberFormat('fr-FR').format(stats.total_paid || 0);
    
    const lastPayment = document.getElementById('lastPayment');
    if (lastPayment && stats.last_payment_date) {
        lastPayment.textContent = new Date(stats.last_payment_date).toLocaleDateString('fr-FR');
    }
}

function updatePaymentHistory(payments) {
    const container = document.getElementById('paymentHistoryList');
    if (!container) return;
    
    if (!payments || payments.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                    Aucun paiement d'abonnement enregistré
                </td>
            </tr>
        `;
        return;
    }
    
    const methodIcons = {
        'cash': 'money-bill-wave',
        'card': 'credit-card',
        'mobile_money': 'mobile-alt'
    };
    
    container.innerHTML = payments.slice(0, 10).map(payment => `
        <tr>
            <td>\${new Date(payment.paymentDate).toLocaleDateString('fr-FR')}</td>
            <td class=\"fw-semibold text-end\">\${new Intl.NumberFormat('fr-FR').format(payment.amount || 0)}</td>
            <td class=\"d-none d-sm-table-cell\">
                <span class=\"payment-badge \${payment.paymentMethod || ''}\" style=\"font-size:0.5rem;\">
                    <i class=\"fas fa-\${methodIcons[payment.paymentMethod] || 'credit-card'}\"></i>
                    \${(payment.paymentMethod || '').replace('_', ' ').toUpperCase().slice(0, 10)}
                </span>
            </td>
            <td class=\"d-none d-md-table-cell\">
                \${payment.status === 'paid' ? '<span class=\"badge bg-success\" style=\"font-size:0.5rem;\">Payé</span>' : 
                  payment.status === 'pending' ? '<span class=\"badge bg-warning\" style=\"font-size:0.5rem;\">En attente</span>' : 
                  '<span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">' + (payment.status || 'Inconnu') + '</span>'}
            </td>
        </tr>
    `).join('');
}

function updateRecipeSales(recipes) {
    const container = document.getElementById('recipeSalesList');
    if (!container) return;
    
    if (!recipes || recipes.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                    Aucune donnée de recette disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = recipes.slice(0, 10).map((recipe, index) => `
        <tr>
            <td>\${index + 1}</td>
            <td>
                <strong>\${escapeHtml(recipe.name).slice(0, 18)}</strong>
                \${recipe.category ? `<br><small class=\"text-muted\" style=\"font-size:0.5rem;\">\${escapeHtml(recipe.category).slice(0, 12)}</small>` : ''}
            </td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(recipe.quantity || 0)}</td>
            <td class=\"text-end fw-semibold text-success\">\${new Intl.NumberFormat('fr-FR').format(recipe.revenue || 0)}</td>
            <td class=\"text-end d-none d-md-table-cell\">
                <div class=\"d-flex align-items-center justify-content-end gap-1\">
                    <span style=\"font-size:0.55rem;\">\${recipe.percentage || 0}%</span>
                    <div class=\"progress-custom\" style=\"width: 60px;\">
                        <div class=\"progress-bar-custom bg-success\" style=\"width: \${recipe.percentage || 0}%\"></div>
                    </div>
                </div>
            </td>
        </tr>
    `).join('');
}

function updateRecipeSalesStats(stats) {
    if (!stats) return;
    
    const totalQuantity = document.getElementById('totalRecipesSold');
    if (totalQuantity) totalQuantity.textContent = new Intl.NumberFormat('fr-FR').format(stats.total_quantity || 0);
    
    const totalRevenue = document.getElementById('totalRecipesRevenue');
    if (totalRevenue) totalRevenue.textContent = new Intl.NumberFormat('fr-FR').format(stats.total_revenue || 0);
    
    const uniqueRecipes = document.getElementById('topRecipesCount');
    if (uniqueRecipes) uniqueRecipes.textContent = new Intl.NumberFormat('fr-FR').format(stats.unique_recipes || 0);
}

function updateActiveFilters() {
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const paymentMethod = document.getElementById('paymentMethod')?.value;
    
    const container = document.getElementById('activeFilters');
    if (!container) return;
    
    const activeFilters = [];
    
    if (datePreset) {
        const presetSelect = document.getElementById('datePreset');
        const selectedOption = presetSelect?.options[presetSelect.selectedIndex];
        const presetLabel = selectedOption?.text || datePreset;
        activeFilters.push({ key: 'date', label: `Période: \${presetLabel}` });
    } else if (dateFrom || dateTo) {
        activeFilters.push({ key: 'date', label: `Du \${dateFrom || '...'} au \${dateTo || '...'}` });
    }
    
    if (paymentMethod) {
        const labels = { cash: 'Espèces', card: 'Carte bancaire', mobile_money: 'Mobile Money' };
        activeFilters.push({ key: 'payment', label: `Paiement: \${labels[paymentMethod] || paymentMethod}` });
    }
    
    if (activeFilters.length === 0) {
        container.innerHTML = '';
        return;
    }
    
    container.innerHTML = activeFilters.map(filter => `
        <span class=\"badge bg-secondary d-inline-flex align-items-center gap-1 gap-sm-2 py-1 py-sm-2 px-2 px-sm-3\" style=\"cursor: pointer; font-size:0.6rem;\" onclick=\"removeFilter('\${filter.key}')\">
            <i class=\"fas fa-filter\"></i>
            \${filter.label}
            <i class=\"fas fa-times ms-1\"></i>
        </span>
    `).join('');
}

function removeFilter(key) {
    if (key === 'date') {
        const datePreset = document.getElementById('datePreset');
        const dateFrom = document.getElementById('dateFrom');
        const dateTo = document.getElementById('dateTo');
        if (datePreset) datePreset.value = '';
        if (dateFrom) dateFrom.value = '';
        if (dateTo) dateTo.value = '';
    } else if (key === 'payment') {
        const paymentMethod = document.getElementById('paymentMethod');
        if (paymentMethod) paymentMethod.value = '';
    }
    applyFilters();
}

function changeChartType(type) {
    currentChartType = type;
    if (timelineData.length > 0) {
        initTimelineChart();
    }
}

function refreshData() {
    applyFilters();
}

function exportData() {
    const params = new URLSearchParams();
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const paymentMethod = document.getElementById('paymentMethod')?.value;
    
    if (datePreset) params.append('date_preset', datePreset);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    if (paymentMethod) params.append('payment_method', paymentMethod);
    
    window.location.href = `/reports/financial/export?\${params.toString()}`;
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `position-fixed bottom-0 end-0 p-2 p-md-3 m-2 m-md-3 bg-\${type === 'error' ? 'danger' : 'success'} text-white rounded shadow`;
    notification.style.zIndex = '9999';
    notification.style.fontSize = '0.7rem';
    notification.innerHTML = `<i class=\"fas fa-\${type === 'error' ? 'exclamation-circle' : 'check-circle'} me-2\"></i>\${message}`;
    document.body.appendChild(notification);
    setTimeout(() => notification.remove(), 3000);
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
{% endblock %}", "reports/financial/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reports\\financial\\index.html.twig");
    }
}
