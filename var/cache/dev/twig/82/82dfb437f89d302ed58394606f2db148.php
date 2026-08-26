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

/* reports/sales/index.html.twig */
class __TwigTemplate_f2491377085158d98c5b7720145e6bac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/sales/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/sales/index.html.twig"));

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

        yield "Rapport des Ventes - ";
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

    .sales-dashboard {
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
        height: 100%;
        display: flex;
        flex-direction: column;
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
        flex-shrink: 0;
    }
    
    .chart-title i {
        color: var(--primary);
        margin-right: 0.5rem;
    }
    
    .chart-container {
        position: relative;
        height: 280px;
        flex-shrink: 0;
    }
    
    .table-responsive {
        flex: 1;
        overflow-x: auto;
    }
    
    .row-equal-height {
        display: flex;
        flex-wrap: wrap;
    }
    
    .row-equal-height > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }
    
    .row-equal-height .chart-card {
        flex: 1;
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
        vertical-align: middle;
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
    
    .cashier-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #64748b;
    }
    
    .cashier-info {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .period-selector {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    
    .period-btn {
        padding: 0.25rem 0.75rem;
        border-radius: 2rem;
        font-size: 0.75rem;
        cursor: pointer;
        transition: all 0.2s;
        background: #f1f5f9;
        border: none;
    }
    
    .period-btn.active {
        background: var(--primary);
        color: white;
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
    
    /* Mobile (< 576px) */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        .kpi-value { font-size: 1.1rem; }
        .kpi-card { padding: 0.75rem; }
        .kpi-label { font-size: 0.55rem; }
        .kpi-trend { font-size: 0.55rem; }
        .kpi-icon {
            width: 32px;
            height: 32px;
            font-size: 1rem;
        }
        
        .chart-container { height: 180px; }
        .chart-card { padding: 0.75rem; margin-bottom: 0.75rem; }
        .chart-title { font-size: 0.75rem; }
        .chart-title .btn-group .btn { font-size: 0.55rem; padding: 0.1rem 0.3rem; }
        
        .filters-section { padding: 0.75rem; }
        .filter-label { font-size: 0.55rem; }
        .filter-group { margin-bottom: 0.5rem; }
        
        .data-table { font-size: 0.6rem; }
        .data-table th, .data-table td { padding: 0.2rem 0.3rem; }
        
        .payment-badge { font-size: 0.5rem; padding: 0.1rem 0.3rem; }
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
        
        .cashier-avatar { width: 28px; height: 28px; font-size: 0.65rem; }
        .cashier-info { gap: 0.4rem; }
        
        #activeFilters .badge { font-size: 0.5rem !important; padding: 0.15rem 0.4rem !important; }
    }

    /* Tablette (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .kpi-value { font-size: 1.3rem; }
        .chart-container { height: 220px; }
        .kpi-card { padding: 1rem; }
        .data-table { font-size: 0.7rem; }
        .data-table th, .data-table td { padding: 0.3rem 0.4rem; }
        .cashier-avatar { width: 32px; height: 32px; }
        
        .filter-col-half {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
    }

    @media print {
        .no-print, .filters-section, .action-buttons, .btn, nav {
            display: none !important;
        }
        .sales-dashboard { background: white; }
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

    // line 402
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

        // line 403
        yield "<div class=\"sales-dashboard py-2 py-md-3\">
    <div class=\"container-fluid px-2 px-md-4\">
        
        <!-- En-tête -->
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
            <div class=\"w-100 w-sm-auto\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-1\">
                        <li class=\"breadcrumb-item small\">
                            <a href=\"";
        // line 412
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active small\">
                            <i class=\"fas fa-chart-line me-1\"></i> Rapport des Ventes
                        </li>
                    </ol>
                </nav>
                <h1 class=\"h3 fw-bold mb-0\">
                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                    Rapport des Ventes
                </h1>
                <p class=\"text-muted small mb-0 d-none d-sm-block\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    ";
        // line 427
        if ((($tmp = (isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 427, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 428
            yield "                        Analyse détaillée des ventes de votre restaurant
                    ";
        } else {
            // line 430
            yield "                        Analyse détaillée des ventes de votre commerce
                    ";
        }
        // line 432
        yield "                </p>
                <p class=\"text-muted small mb-0 d-block d-sm-none\">
                    ";
        // line 434
        if ((($tmp = (isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 434, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Ventes restaurant";
        } else {
            yield "Ventes commerce";
        }
        // line 435
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
        // line 463
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["date_presets"]) || array_key_exists("date_presets", $context) ? $context["date_presets"] : (function () { throw new RuntimeError('Variable "date_presets" does not exist.', 463, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 464
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 464, $this->source); })()), "date_preset", [], "any", false, false, false, 464) == $context["key"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
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
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 477, $this->source); })()), "date_from", [], "any", false, false, false, 477), "html", null, true);
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
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 486, $this->source); })()), "date_to", [], "any", false, false, false, 486), "html", null, true);
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
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpis"] ?? null), "revenue", [], "any", true, true, false, 518)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 518, $this->source); })()), "revenue", [], "any", false, false, false, 518), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                ";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 521, $this->source); })()), "html", null, true);
        yield "
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
                                <i class=\"fas fa-shopping-cart me-1\"></i> <span class=\"d-none d-sm-inline\">Nombre de ventes</span>
                                <span class=\"d-inline d-sm-none\">Ventes</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiOrders\">
                                ";
        // line 540
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpis"] ?? null), "total_orders", [], "any", true, true, false, 540)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 540, $this->source); })()), "total_orders", [], "any", false, false, false, 540), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                commandes
                            </div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-wallet me-1\"></i> <span class=\"d-none d-sm-inline\">Panier moyen</span>
                                <span class=\"d-inline d-sm-none\">Panier</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiAverageBasket\">
                                ";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpis"] ?? null), "average_basket", [], "any", true, true, false, 562)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 562, $this->source); })()), "average_basket", [], "any", false, false, false, 562), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                ";
        // line 565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 565, $this->source); })()), "html", null, true);
        yield "
                            </div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-wallet\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card info\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-percent me-1\"></i> <span class=\"d-none d-sm-inline\">Remises accordées</span>
                                <span class=\"d-inline d-sm-none\">Remises</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiDiscounts\">
                                ";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpis"] ?? null), "total_discount", [], "any", true, true, false, 584)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 584, $this->source); })()), "total_discount", [], "any", false, false, false, 584), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                ";
        // line 587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 587, $this->source); })()), "html", null, true);
        yield "
                            </div>
                        </div>
                        <div class=\"kpi-icon info\">
                            <i class=\"fas fa-percent\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques principaux -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12 col-lg-8\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <div>
                            <i class=\"fas fa-chart-line\"></i>
                            <span class=\"d-none d-sm-inline\">Évolution des ventes</span>
                            <span class=\"d-inline d-sm-none\">Évolution</span>
                        </div>
                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('revenue')\">CA</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('orders')\">Cmd</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('items')\">Art</button>
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
                        <span class=\"d-none d-sm-inline\">Paiements</span>
                        <span class=\"d-inline d-sm-none\">Paiements</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"paymentChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Promotions -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-percent\"></i>
                        Impact des promotions
                    </div>
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6 col-md-3\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Ventes avec promo</div>
                                <div class=\"h2 fw-bold text-primary fs-4 fs-md-2\" id=\"ordersWithPromo\">
                                    ";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion_impact"] ?? null), "orders_with_promo", [], "any", true, true, false, 647)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion_impact"]) || array_key_exists("promotion_impact", $context) ? $context["promotion_impact"] : (function () { throw new RuntimeError('Variable "promotion_impact" does not exist.', 647, $this->source); })()), "orders_with_promo", [], "any", false, false, false, 647), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">(";
        // line 649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion_impact"] ?? null), "percentage_with_promo", [], "any", true, true, false, 649)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion_impact"]) || array_key_exists("promotion_impact", $context) ? $context["promotion_impact"] : (function () { throw new RuntimeError('Variable "promotion_impact" does not exist.', 649, $this->source); })()), "percentage_with_promo", [], "any", false, false, false, 649), 0)) : (0)), "html", null, true);
        yield "%)</div>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-3\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Ventes sans promo</div>
                                <div class=\"h2 fw-bold text-secondary fs-4 fs-md-2\" id=\"ordersWithoutPromo\">
                                    ";
        // line 656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion_impact"] ?? null), "orders_without_promo", [], "any", true, true, false, 656)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion_impact"]) || array_key_exists("promotion_impact", $context) ? $context["promotion_impact"] : (function () { throw new RuntimeError('Variable "promotion_impact" does not exist.', 656, $this->source); })()), "orders_without_promo", [], "any", false, false, false, 656), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-3\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">CA avec promotions</div>
                                <div class=\"h2 fw-bold text-success fs-4 fs-md-2\" id=\"revenueWithPromo\">
                                    ";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion_impact"] ?? null), "revenue_with_promo", [], "any", true, true, false, 664)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion_impact"]) || array_key_exists("promotion_impact", $context) ? $context["promotion_impact"] : (function () { throw new RuntimeError('Variable "promotion_impact" does not exist.', 664, $this->source); })()), "revenue_with_promo", [], "any", false, false, false, 664), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">";
        // line 666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 666, $this->source); })()), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-3\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Remises totales</div>
                                <div class=\"h2 fw-bold text-danger fs-4 fs-md-2\" id=\"totalDiscountGiven\">
                                    ";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion_impact"] ?? null), "total_discount_given", [], "any", true, true, false, 673)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion_impact"]) || array_key_exists("promotion_impact", $context) ? $context["promotion_impact"] : (function () { throw new RuntimeError('Variable "promotion_impact" does not exist.', 673, $this->source); })()), "total_discount_given", [], "any", false, false, false, 673), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 675, $this->source); })()), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 680
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion_impact"] ?? null), "top_promotions", [], "any", true, true, false, 680)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion_impact"]) || array_key_exists("promotion_impact", $context) ? $context["promotion_impact"] : (function () { throw new RuntimeError('Variable "promotion_impact" does not exist.', 680, $this->source); })()), "top_promotions", [], "any", false, false, false, 680), [])) : ([]))) > 0)) {
            // line 681
            yield "                    <hr>
                    <div class=\"mt-2 mt-md-3\">
                        <strong class=\"small\" style=\"font-size:0.65rem;\">Top promotions utilisées :</strong>
                        <div class=\"table-responsive mt-2\">
                            <table class=\"data-table\">
                                <thead>
                                    <tr>
                                        <th>Promotion</th>
                                        <th class=\"text-end d-none d-sm-table-cell\">Utilisations</th>
                                        <th class=\"text-end\">Remise</th>
                                    </tr>
                                </thead>
                                <tbody id=\"topPromotionsList\">
                                    ";
            // line 694
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion_impact"]) || array_key_exists("promotion_impact", $context) ? $context["promotion_impact"] : (function () { throw new RuntimeError('Variable "promotion_impact" does not exist.', 694, $this->source); })()), "top_promotions", [], "any", false, false, false, 694), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 695
                yield "                                        <tr>
                                            <td>";
                // line 696
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "name", [], "any", false, false, false, 696), 0, 20), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "name", [], "any", false, false, false, 696)) > 20)) {
                    yield "...";
                }
                yield "</td>
                                            <td class=\"text-end d-none d-sm-table-cell\">";
                // line 697
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "usage_count", [], "any", false, false, false, 697), 0, ",", " "), "html", null, true);
                yield "</td>
                                            <td class=\"text-end text-danger\">";
                // line 698
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "total_discount", [], "any", false, false, false, 698), 0, ",", " "), "html", null, true);
                yield "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 701
            yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                    ";
        }
        // line 706
        yield "                </div>
            </div>
        </div>

        <!-- Top ventes et répartition par heure - MÊME HAUTEUR -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4 row-equal-height\">
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-trophy\"></i>
                        Top ";
        // line 716
        if ((($tmp = (isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 716, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "recettes";
        } else {
            yield "produits";
        }
        // line 717
        yield "                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>";
        // line 723
        if ((($tmp = (isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 723, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Recette";
        } else {
            yield "Produit";
        }
        yield "</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">Qté</th>
                                    <th class=\"text-end\">CA</th>
                                    <th class=\"text-end d-none d-md-table-cell\">Remises</th>
                                </tr>
                            </thead>
                            <tbody id=\"topSellingList\">
                                ";
        // line 730
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["top_selling"]) || array_key_exists("top_selling", $context) ? $context["top_selling"] : (function () { throw new RuntimeError('Variable "top_selling" does not exist.', 730, $this->source); })()), 0, 5));
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
            // line 731
            yield "                                    <tr>
                                        <td>";
            // line 732
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 732), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 734
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 734), 0, 18), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 734)) > 18)) {
                yield "...";
            }
            // line 735
            yield "                                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe_name", [], "any", false, false, false, 735)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 736
                yield "                                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe_name", [], "any", false, false, false, 736), 0, 12), "html", null, true);
                yield "</small>
                                            ";
            }
            // line 738
            yield "                                        </td>
                                        <td class=\"text-end d-none d-sm-table-cell\">";
            // line 739
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_quantity", [], "any", false, false, false, 739), 0, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end fw-semibold\">";
            // line 740
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_revenue", [], "any", false, false, false, 740), 0, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end text-danger d-none d-md-table-cell\">";
            // line 741
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_discount", [], "any", false, false, false, 741), 0, ",", " "), "html", null, true);
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
        // line 743
        if (!$context['_iterated']) {
            // line 744
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                                            Aucune donnée disponible
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 751
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-bar\"></i>
                        <span class=\"d-none d-sm-inline\">Répartition par heure</span>
                        <span class=\"d-inline d-sm-none\">Par heure</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"hourlyChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Répartition par jour et par catégorie - MÊME HAUTEUR -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4 row-equal-height\">
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-calendar-week\"></i>
                        <span class=\"d-none d-sm-inline\">Ventes par jour</span>
                        <span class=\"d-inline d-sm-none\">Par jour</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"dailyChart\"></canvas>
                    </div>
                </div>
            </div>
            
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-pie\"></i>
                        <span class=\"d-none d-sm-inline\">Par catégorie</span>
                        <span class=\"d-inline d-sm-none\">Catégories</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"categoryChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance par caissier -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-users\"></i>
                        Performance par utilisateur
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Utilisateur</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">Ventes</th>
                                    <th class=\"text-end d-none d-md-table-cell\">Articles</th>
                                    <th class=\"text-end\">CA</th>
                                    <th class=\"text-end d-none d-lg-table-cell\">Panier</th>
                                    <th class=\"text-end\">%</th>
                                </tr>
                            </thead>
                            <tbody id=\"cashierList\">
                                ";
        // line 821
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cashier_performance"]) || array_key_exists("cashier_performance", $context) ? $context["cashier_performance"] : (function () { throw new RuntimeError('Variable "cashier_performance" does not exist.', 821, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cashier"]) {
            // line 822
            yield "                                    <tr>
                                        <td>
                                            <div class=\"cashier-info\">
                                                ";
            // line 825
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "photo", [], "any", false, false, false, 825)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 826
                yield "                                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "photo", [], "any", false, false, false, 826))), "html", null, true);
                yield "\" 
                                                         class=\"cashier-avatar\" 
                                                         alt=\"";
                // line 828
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "cashier_name", [], "any", false, false, false, 828), "html", null, true);
                yield "\"
                                                         onerror=\"this.onerror=null; this.src='https://placehold.co/40x40/f1f5f9/64748b?text=";
                // line 829
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "cashier_name", [], "any", false, false, false, 829))), "html", null, true);
                yield "'\">
                                                ";
            } else {
                // line 831
                yield "                                                    <div class=\"cashier-avatar d-flex align-items-center justify-content-center\" 
                                                         style=\"background: #e2e8f0; color: #64748b;\">
                                                        ";
                // line 833
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "cashier_name", [], "any", false, false, false, 833))), "html", null, true);
                yield "
                                                    </div>
                                                ";
            }
            // line 836
            yield "                                                <div>
                                                    <strong class=\"small\">";
            // line 837
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "cashier_name", [], "any", false, false, false, 837), 0, 12), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "cashier_name", [], "any", false, false, false, 837)) > 12)) {
                yield "...";
            }
            yield "</strong>
                                                    ";
            // line 838
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "role", [], "any", false, false, false, 838)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 839
                yield "                                                        <br><small class=\"text-muted\" style=\"font-size:0.5rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "role", [], "any", false, false, false, 839), 0, 10), "html", null, true);
                yield "</small>
                                                    ";
            }
            // line 841
            yield "                                                </div>
                                            </div>
                                        </td>
                                        <td class=\"text-end d-none d-sm-table-cell\">";
            // line 844
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "orders_count", [], "any", false, false, false, 844), 0, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end d-none d-md-table-cell\">";
            // line 845
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "total_items", [], "any", false, false, false, 845), 0, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end fw-semibold\">";
            // line 846
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "total_revenue", [], "any", false, false, false, 846), 0, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end d-none d-lg-table-cell\">";
            // line 847
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "average_basket", [], "any", false, false, false, 847), 0, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end\">
                                            <div class=\"d-flex align-items-center justify-content-end gap-1\">
                                                <span style=\"font-size:0.55rem;\">";
            // line 850
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "percentage", [], "any", false, false, false, 850), "html", null, true);
            yield "%</span>
                                                <div class=\"progress-custom\" style=\"width: 40px;\">
                                                    <div class=\"progress-bar-custom bg-primary\" style=\"width: ";
            // line 852
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cashier"], "percentage", [], "any", false, false, false, 852), "html", null, true);
            yield "%\"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 857
        if (!$context['_iterated']) {
            // line 858
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-users fa-2x mb-2 d-block\"></i>
                                            Aucune donnée disponible
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cashier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 865
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

    // line 876
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

        // line 877
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
<script>
// Variables globales
let timelineChart = null;
let paymentChart = null;
let hourlyChart = null;
let dailyChart = null;
let categoryChart = null;
let currentChartType = 'revenue';
let isLoading = false;

// Données initiales
let timelineData = ";
        // line 890
        yield json_encode(((array_key_exists("timeline", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["timeline"]) || array_key_exists("timeline", $context) ? $context["timeline"] : (function () { throw new RuntimeError('Variable "timeline" does not exist.', 890, $this->source); })()), [])) : ([])));
        yield ";
let paymentData = ";
        // line 891
        yield json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["sales_distribution"] ?? null), "by_payment_method", [], "any", true, true, false, 891)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sales_distribution"]) || array_key_exists("sales_distribution", $context) ? $context["sales_distribution"] : (function () { throw new RuntimeError('Variable "sales_distribution" does not exist.', 891, $this->source); })()), "by_payment_method", [], "any", false, false, false, 891), [])) : ([])));
        yield ";
let hourlyData = ";
        // line 892
        yield json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["sales_distribution"] ?? null), "by_hour", [], "any", true, true, false, 892)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sales_distribution"]) || array_key_exists("sales_distribution", $context) ? $context["sales_distribution"] : (function () { throw new RuntimeError('Variable "sales_distribution" does not exist.', 892, $this->source); })()), "by_hour", [], "any", false, false, false, 892), [])) : ([])));
        yield ";
let dailyData = ";
        // line 893
        yield json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["sales_distribution"] ?? null), "by_day", [], "any", true, true, false, 893)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sales_distribution"]) || array_key_exists("sales_distribution", $context) ? $context["sales_distribution"] : (function () { throw new RuntimeError('Variable "sales_distribution" does not exist.', 893, $this->source); })()), "by_day", [], "any", false, false, false, 893), [])) : ([])));
        yield ";
let categoryData = ";
        // line 894
        yield json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["sales_distribution"] ?? null), "by_category", [], "any", true, true, false, 894)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sales_distribution"]) || array_key_exists("sales_distribution", $context) ? $context["sales_distribution"] : (function () { throw new RuntimeError('Variable "sales_distribution" does not exist.', 894, $this->source); })()), "by_category", [], "any", false, false, false, 894), [])) : ([])));
        yield ";

document.addEventListener('DOMContentLoaded', function() {
    initCharts();
    updateActiveFilters();
});

function initCharts() {
    initTimelineChart();
    initPaymentChart();
    initHourlyChart();
    initDailyChart();
    initCategoryChart();
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
        // line 919
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 919, $this->source); })()), "html", null, true);
        yield ")';
        backgroundColor = 'rgba(4, 99, 241, 0.1)';
        borderColor = '#0463f1';
    } else if (currentChartType === 'orders') {
        data = timelineData.map(d => d.orders || 0);
        label = 'Nombre de commandes';
        backgroundColor = 'rgba(16, 185, 129, 0.1)';
        borderColor = '#10b981';
    } else {
        data = timelineData.map(d => d.items || 0);
        label = 'Articles vendus';
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
        // line 965
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 965, $this->source); })()), "html", null, true);
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
        // line 981
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 981, $this->source); })()), "html", null, true);
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
        // line 1035
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1035, $this->source); })()), "html", null, true);
        yield " (' + percentage + '%)';
                        }
                    }
                }
            }
        }
    });
}

function initHourlyChart() {
    const ctx = document.getElementById('hourlyChart').getContext('2d');
    
    const labels = hourlyData.map(h => h.label || '');
    const data = hourlyData.map(h => h.count || 0);
    
    if (hourlyChart) {
        hourlyChart.destroy();
    }
    
    hourlyChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Nombre de ventes',
                data: data,
                backgroundColor: 'rgba(4, 99, 241, 0.7)',
                borderColor: '#0463f1',
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
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(context.raw);
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
                    title: { display: true, text: 'Ventes', font: { size: 9 } },
                    ticks: { 
                        stepSize: 1,
                        font: { size: 8 }
                    }
                },
                x: { 
                    title: { display: true, text: 'Heure', font: { size: 9 } },
                    ticks: { font: { size: 8 } }
                }
            }
        }
    });
}

function initDailyChart() {
    const ctx = document.getElementById('dailyChart').getContext('2d');
    
    const labels = dailyData.map(d => d.day || '');
    const data = dailyData.map(d => d.count || 0);
    
    if (dailyChart) {
        dailyChart.destroy();
    }
    
    dailyChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Nombre de ventes',
                data: data,
                backgroundColor: 'rgba(16, 185, 129, 0.7)',
                borderColor: '#10b981',
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
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(context.raw);
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
                    title: { display: true, text: 'Ventes', font: { size: 9 } },
                    ticks: { 
                        stepSize: 1,
                        font: { size: 8 }
                    }
                },
                x: { 
                    title: { display: true, text: 'Jour', font: { size: 9 } },
                    ticks: { font: { size: 8 } }
                }
            }
        }
    });
}

function initCategoryChart() {
    const ctx = document.getElementById('categoryChart').getContext('2d');
    
    const labels = categoryData.map(c => c.category || '');
    const data = categoryData.map(c => c.revenue || 0);
    
    if (categoryChart) {
        categoryChart.destroy();
    }
    
    if (categoryData.length > 0) {
        categoryChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: ['#0463f1', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#06b6d4', '#ec4899', '#6366f1'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { 
                        position: 'right',
                        labels: { boxWidth: 10, font: { size: 9 }, padding: 6 }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const value = context.raw;
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                                return context.label + ': ' + new Intl.NumberFormat('fr-FR').format(value) + ' ";
        // line 1193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1193, $this->source); })()), "html", null, true);
        yield " (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });
    }
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
        const response = await fetch(`/reports/sales/data?\${params.toString()}`);
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
    if (data.kpis) {
        const kpiRevenue = document.getElementById('kpiRevenue');
        if (kpiRevenue) kpiRevenue.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.revenue || 0);
        
        const kpiOrders = document.getElementById('kpiOrders');
        if (kpiOrders) kpiOrders.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.total_orders || 0);
        
        const kpiAverageBasket = document.getElementById('kpiAverageBasket');
        if (kpiAverageBasket) kpiAverageBasket.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.average_basket || 0);
        
        const kpiDiscounts = document.getElementById('kpiDiscounts');
        if (kpiDiscounts) kpiDiscounts.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.total_discount || 0);
    }
    
    if (data.timeline && data.timeline.length > 0) {
        timelineData = data.timeline;
        initTimelineChart();
    }
    
    if (data.sales_distribution) {
        if (data.sales_distribution.by_payment_method) {
            paymentData = data.sales_distribution.by_payment_method;
            initPaymentChart();
        }
        if (data.sales_distribution.by_hour) {
            hourlyData = data.sales_distribution.by_hour;
            initHourlyChart();
        }
        if (data.sales_distribution.by_day) {
            dailyData = data.sales_distribution.by_day;
            initDailyChart();
        }
        if (data.sales_distribution.by_category) {
            categoryData = data.sales_distribution.by_category;
            initCategoryChart();
        }
    }
    
    if (data.top_selling) {
        updateTopSelling(data.top_selling);
    }
    
    if (data.promotion_impact) {
        updatePromotionImpact(data.promotion_impact);
    }
    
    if (data.cashier_performance) {
        updateCashierPerformance(data.cashier_performance);
    }
}

function updateTopSelling(items) {
    const container = document.getElementById('topSellingList');
    if (!container) return;
    
    if (!items || items.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = items.slice(0, 5).map((item, index) => `
        <tr>
            <td>\${index + 1}</td>
            <td>
                \${escapeHtml(item.name || '').slice(0, 18)}
                \${item.recipe_name ? `<small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">\${escapeHtml(item.recipe_name).slice(0, 12)}</small>` : ''}
            </td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(item.total_quantity || 0)}</td>
            <td class=\"text-end fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(item.total_revenue || 0)}</td>
            <td class=\"text-end text-danger d-none d-md-table-cell\">\${new Intl.NumberFormat('fr-FR').format(item.total_discount || 0)}</td>
        </tr>
    `).join('');
}

function updatePromotionImpact(impact) {
    if (!impact) return;
    
    const ordersWithPromo = document.getElementById('ordersWithPromo');
    if (ordersWithPromo) ordersWithPromo.textContent = new Intl.NumberFormat('fr-FR').format(impact.orders_with_promo || 0);
    
    const ordersWithoutPromo = document.getElementById('ordersWithoutPromo');
    if (ordersWithoutPromo) ordersWithoutPromo.textContent = new Intl.NumberFormat('fr-FR').format(impact.orders_without_promo || 0);
    
    const revenueWithPromo = document.getElementById('revenueWithPromo');
    if (revenueWithPromo) revenueWithPromo.textContent = new Intl.NumberFormat('fr-FR').format(impact.revenue_with_promo || 0);
    
    const totalDiscountGiven = document.getElementById('totalDiscountGiven');
    if (totalDiscountGiven) totalDiscountGiven.textContent = new Intl.NumberFormat('fr-FR').format(impact.total_discount_given || 0);
}

function updateCashierPerformance(cashiers) {
    const container = document.getElementById('cashierList');
    if (!container) return;
    
    if (!cashiers || cashiers.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"6\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-users fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = cashiers.map(cashier => `
        <tr>
            <td>
                <div class=\"cashier-info\">
                    \${cashier.photo ? 
                        `<img src=\"/uploads/users/\${escapeHtml(cashier.photo)}\" 
                             class=\"cashier-avatar\" 
                             alt=\"\${escapeHtml(cashier.cashier_name)}\"
                             onerror=\"this.onerror=null; this.src='https://placehold.co/40x40/f1f5f9/64748b?text=\${escapeHtml(cashier.cashier_name).charAt(0)}'\">` :
                        `<div class=\"cashier-avatar d-flex align-items-center justify-content-center\" 
                             style=\"background: #e2e8f0; color: #64748b;\">
                            \${escapeHtml(cashier.cashier_name).charAt(0)}
                        </div>`
                    }
                    <div>
                        <strong class=\"small\">\${escapeHtml(cashier.cashier_name).slice(0, 12)}</strong>
                        \${cashier.role ? `<br><small class=\"text-muted\" style=\"font-size:0.5rem;\">\${escapeHtml(cashier.role).slice(0, 10)}</small>` : ''}
                    </div>
                </div>
            </td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(cashier.orders_count || 0)}</td>
            <td class=\"text-end d-none d-md-table-cell\">\${new Intl.NumberFormat('fr-FR').format(cashier.total_items || 0)}</td>
            <td class=\"text-end fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(cashier.total_revenue || 0)}</td>
            <td class=\"text-end d-none d-lg-table-cell\">\${new Intl.NumberFormat('fr-FR').format(cashier.average_basket || 0)}</td>
            <td class=\"text-end\">
                <div class=\"d-flex align-items-center justify-content-end gap-1\">
                    <span style=\"font-size:0.55rem;\">\${cashier.percentage || 0}%</span>
                    <div class=\"progress-custom\" style=\"width: 40px;\">
                        <div class=\"progress-bar-custom bg-primary\" style=\"width: \${cashier.percentage || 0}%\"></div>
                    </div>
                </div>
            </td>
        </tr>
    `).join('');
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
        <span class=\"badge bg-secondary d-inline-flex align-items-center gap-1 gap-sm-2 py-1 py-sm-2 px-2 px-sm-3\" style=\"cursor: pointer; font-size:0.55rem;\" onclick=\"removeFilter('\${filter.key}')\">
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
    
    window.location.href = `/reports/sales/export?\${params.toString()}`;
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
        return "reports/sales/index.html.twig";
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
        return array (  1611 => 1193,  1450 => 1035,  1393 => 981,  1374 => 965,  1325 => 919,  1297 => 894,  1293 => 893,  1289 => 892,  1285 => 891,  1281 => 890,  1265 => 877,  1252 => 876,  1232 => 865,  1220 => 858,  1218 => 857,  1208 => 852,  1203 => 850,  1197 => 847,  1193 => 846,  1189 => 845,  1185 => 844,  1180 => 841,  1174 => 839,  1172 => 838,  1165 => 837,  1162 => 836,  1156 => 833,  1152 => 831,  1147 => 829,  1143 => 828,  1137 => 826,  1135 => 825,  1130 => 822,  1125 => 821,  1053 => 751,  1041 => 744,  1039 => 743,  1024 => 741,  1020 => 740,  1016 => 739,  1013 => 738,  1007 => 736,  1004 => 735,  999 => 734,  994 => 732,  991 => 731,  973 => 730,  959 => 723,  951 => 717,  945 => 716,  933 => 706,  926 => 701,  917 => 698,  913 => 697,  906 => 696,  903 => 695,  899 => 694,  884 => 681,  882 => 680,  874 => 675,  869 => 673,  859 => 666,  854 => 664,  843 => 656,  833 => 649,  828 => 647,  765 => 587,  759 => 584,  737 => 565,  731 => 562,  706 => 540,  684 => 521,  678 => 518,  643 => 486,  631 => 477,  620 => 468,  611 => 465,  604 => 464,  600 => 463,  570 => 435,  564 => 434,  560 => 432,  556 => 430,  552 => 428,  550 => 427,  532 => 412,  521 => 403,  508 => 402,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reports/sales/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Rapport des Ventes - {{ company_name }}{% endblock %}

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

    .sales-dashboard {
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
        height: 100%;
        display: flex;
        flex-direction: column;
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
        flex-shrink: 0;
    }
    
    .chart-title i {
        color: var(--primary);
        margin-right: 0.5rem;
    }
    
    .chart-container {
        position: relative;
        height: 280px;
        flex-shrink: 0;
    }
    
    .table-responsive {
        flex: 1;
        overflow-x: auto;
    }
    
    .row-equal-height {
        display: flex;
        flex-wrap: wrap;
    }
    
    .row-equal-height > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }
    
    .row-equal-height .chart-card {
        flex: 1;
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
        vertical-align: middle;
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
    
    .cashier-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #64748b;
    }
    
    .cashier-info {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .period-selector {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    
    .period-btn {
        padding: 0.25rem 0.75rem;
        border-radius: 2rem;
        font-size: 0.75rem;
        cursor: pointer;
        transition: all 0.2s;
        background: #f1f5f9;
        border: none;
    }
    
    .period-btn.active {
        background: var(--primary);
        color: white;
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
    
    /* Mobile (< 576px) */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        .kpi-value { font-size: 1.1rem; }
        .kpi-card { padding: 0.75rem; }
        .kpi-label { font-size: 0.55rem; }
        .kpi-trend { font-size: 0.55rem; }
        .kpi-icon {
            width: 32px;
            height: 32px;
            font-size: 1rem;
        }
        
        .chart-container { height: 180px; }
        .chart-card { padding: 0.75rem; margin-bottom: 0.75rem; }
        .chart-title { font-size: 0.75rem; }
        .chart-title .btn-group .btn { font-size: 0.55rem; padding: 0.1rem 0.3rem; }
        
        .filters-section { padding: 0.75rem; }
        .filter-label { font-size: 0.55rem; }
        .filter-group { margin-bottom: 0.5rem; }
        
        .data-table { font-size: 0.6rem; }
        .data-table th, .data-table td { padding: 0.2rem 0.3rem; }
        
        .payment-badge { font-size: 0.5rem; padding: 0.1rem 0.3rem; }
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
        
        .cashier-avatar { width: 28px; height: 28px; font-size: 0.65rem; }
        .cashier-info { gap: 0.4rem; }
        
        #activeFilters .badge { font-size: 0.5rem !important; padding: 0.15rem 0.4rem !important; }
    }

    /* Tablette (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .kpi-value { font-size: 1.3rem; }
        .chart-container { height: 220px; }
        .kpi-card { padding: 1rem; }
        .data-table { font-size: 0.7rem; }
        .data-table th, .data-table td { padding: 0.3rem 0.4rem; }
        .cashier-avatar { width: 32px; height: 32px; }
        
        .filter-col-half {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
    }

    @media print {
        .no-print, .filters-section, .action-buttons, .btn, nav {
            display: none !important;
        }
        .sales-dashboard { background: white; }
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
<div class=\"sales-dashboard py-2 py-md-3\">
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
                            <i class=\"fas fa-chart-line me-1\"></i> Rapport des Ventes
                        </li>
                    </ol>
                </nav>
                <h1 class=\"h3 fw-bold mb-0\">
                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                    Rapport des Ventes
                </h1>
                <p class=\"text-muted small mb-0 d-none d-sm-block\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    {% if is_restaurant %}
                        Analyse détaillée des ventes de votre restaurant
                    {% else %}
                        Analyse détaillée des ventes de votre commerce
                    {% endif %}
                </p>
                <p class=\"text-muted small mb-0 d-block d-sm-none\">
                    {% if is_restaurant %}Ventes restaurant{% else %}Ventes commerce{% endif %}
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
                                {{ kpis.revenue|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                {{ currency }}
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
                                <i class=\"fas fa-shopping-cart me-1\"></i> <span class=\"d-none d-sm-inline\">Nombre de ventes</span>
                                <span class=\"d-inline d-sm-none\">Ventes</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiOrders\">
                                {{ kpis.total_orders|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                commandes
                            </div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-wallet me-1\"></i> <span class=\"d-none d-sm-inline\">Panier moyen</span>
                                <span class=\"d-inline d-sm-none\">Panier</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiAverageBasket\">
                                {{ kpis.average_basket|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                {{ currency }}
                            </div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-wallet\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-6 col-md-6 col-lg-3\">
                <div class=\"kpi-card info\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-percent me-1\"></i> <span class=\"d-none d-sm-inline\">Remises accordées</span>
                                <span class=\"d-inline d-sm-none\">Remises</span>
                            </div>
                            <div class=\"kpi-value\" id=\"kpiDiscounts\">
                                {{ kpis.total_discount|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend up d-none d-sm-block\">
                                {{ currency }}
                            </div>
                        </div>
                        <div class=\"kpi-icon info\">
                            <i class=\"fas fa-percent\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques principaux -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12 col-lg-8\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <div>
                            <i class=\"fas fa-chart-line\"></i>
                            <span class=\"d-none d-sm-inline\">Évolution des ventes</span>
                            <span class=\"d-inline d-sm-none\">Évolution</span>
                        </div>
                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('revenue')\">CA</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('orders')\">Cmd</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"changeChartType('items')\">Art</button>
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
                        <span class=\"d-none d-sm-inline\">Paiements</span>
                        <span class=\"d-inline d-sm-none\">Paiements</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"paymentChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Promotions -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-percent\"></i>
                        Impact des promotions
                    </div>
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6 col-md-3\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Ventes avec promo</div>
                                <div class=\"h2 fw-bold text-primary fs-4 fs-md-2\" id=\"ordersWithPromo\">
                                    {{ promotion_impact.orders_with_promo|default(0)|number_format(0, ',', ' ') }}
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">({{ promotion_impact.percentage_with_promo|default(0) }}%)</div>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-3\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Ventes sans promo</div>
                                <div class=\"h2 fw-bold text-secondary fs-4 fs-md-2\" id=\"ordersWithoutPromo\">
                                    {{ promotion_impact.orders_without_promo|default(0)|number_format(0, ',', ' ') }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-3\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">CA avec promotions</div>
                                <div class=\"h2 fw-bold text-success fs-4 fs-md-2\" id=\"revenueWithPromo\">
                                    {{ promotion_impact.revenue_with_promo|default(0)|number_format(0, ',', ' ') }}
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">{{ currency }}</div>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-3\">
                            <div class=\"text-center p-2 p-md-3\">
                                <div class=\"small text-muted\" style=\"font-size:0.55rem;\">Remises totales</div>
                                <div class=\"h2 fw-bold text-danger fs-4 fs-md-2\" id=\"totalDiscountGiven\">
                                    {{ promotion_impact.total_discount_given|default(0)|number_format(0, ',', ' ') }}
                                </div>
                                <div class=\"small\" style=\"font-size:0.5rem;\">{{ currency }}</div>
                            </div>
                        </div>
                    </div>
                    
                    {% if promotion_impact.top_promotions|default([])|length > 0 %}
                    <hr>
                    <div class=\"mt-2 mt-md-3\">
                        <strong class=\"small\" style=\"font-size:0.65rem;\">Top promotions utilisées :</strong>
                        <div class=\"table-responsive mt-2\">
                            <table class=\"data-table\">
                                <thead>
                                    <tr>
                                        <th>Promotion</th>
                                        <th class=\"text-end d-none d-sm-table-cell\">Utilisations</th>
                                        <th class=\"text-end\">Remise</th>
                                    </tr>
                                </thead>
                                <tbody id=\"topPromotionsList\">
                                    {% for promo in promotion_impact.top_promotions|slice(0, 5) %}
                                        <tr>
                                            <td>{{ promo.name|slice(0, 20) }}{% if promo.name|length > 20 %}...{% endif %}</td>
                                            <td class=\"text-end d-none d-sm-table-cell\">{{ promo.usage_count|number_format(0, ',', ' ') }}</td>
                                            <td class=\"text-end text-danger\">{{ promo.total_discount|number_format(0, ',', ' ') }}</td>
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

        <!-- Top ventes et répartition par heure - MÊME HAUTEUR -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4 row-equal-height\">
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
                                    <th class=\"text-end d-none d-md-table-cell\">Remises</th>
                                </tr>
                            </thead>
                            <tbody id=\"topSellingList\">
                                {% for item in top_selling|slice(0, 5) %}
                                    <tr>
                                        <td>{{ loop.index }}</td>
                                        <td>
                                            {{ item.name|slice(0, 18) }}{% if item.name|length > 18 %}...{% endif %}
                                            {% if item.recipe_name %}
                                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">{{ item.recipe_name|slice(0, 12) }}</small>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-end d-none d-sm-table-cell\">{{ item.total_quantity|number_format(0, ',', ' ') }}</td>
                                        <td class=\"text-end fw-semibold\">{{ item.total_revenue|number_format(0, ',', ' ') }}</td>
                                        <td class=\"text-end text-danger d-none d-md-table-cell\">{{ item.total_discount|number_format(0, ',', ' ') }}</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4 text-muted\">
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
                        <i class=\"fas fa-chart-bar\"></i>
                        <span class=\"d-none d-sm-inline\">Répartition par heure</span>
                        <span class=\"d-inline d-sm-none\">Par heure</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"hourlyChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Répartition par jour et par catégorie - MÊME HAUTEUR -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4 row-equal-height\">
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-calendar-week\"></i>
                        <span class=\"d-none d-sm-inline\">Ventes par jour</span>
                        <span class=\"d-inline d-sm-none\">Par jour</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"dailyChart\"></canvas>
                    </div>
                </div>
            </div>
            
            <div class=\"col-12 col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-chart-pie\"></i>
                        <span class=\"d-none d-sm-inline\">Par catégorie</span>
                        <span class=\"d-inline d-sm-none\">Catégories</span>
                    </div>
                    <div class=\"chart-container\" style=\"height: 200px;\">
                        <canvas id=\"categoryChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance par caissier -->
        <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title small\">
                        <i class=\"fas fa-users\"></i>
                        Performance par utilisateur
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Utilisateur</th>
                                    <th class=\"text-end d-none d-sm-table-cell\">Ventes</th>
                                    <th class=\"text-end d-none d-md-table-cell\">Articles</th>
                                    <th class=\"text-end\">CA</th>
                                    <th class=\"text-end d-none d-lg-table-cell\">Panier</th>
                                    <th class=\"text-end\">%</th>
                                </tr>
                            </thead>
                            <tbody id=\"cashierList\">
                                {% for cashier in cashier_performance %}
                                    <tr>
                                        <td>
                                            <div class=\"cashier-info\">
                                                {% if cashier.photo %}
                                                    <img src=\"{{ asset('uploads/users/' ~ cashier.photo) }}\" 
                                                         class=\"cashier-avatar\" 
                                                         alt=\"{{ cashier.cashier_name }}\"
                                                         onerror=\"this.onerror=null; this.src='https://placehold.co/40x40/f1f5f9/64748b?text={{ cashier.cashier_name|first|upper }}'\">
                                                {% else %}
                                                    <div class=\"cashier-avatar d-flex align-items-center justify-content-center\" 
                                                         style=\"background: #e2e8f0; color: #64748b;\">
                                                        {{ cashier.cashier_name|first|upper }}
                                                    </div>
                                                {% endif %}
                                                <div>
                                                    <strong class=\"small\">{{ cashier.cashier_name|slice(0, 12) }}{% if cashier.cashier_name|length > 12 %}...{% endif %}</strong>
                                                    {% if cashier.role %}
                                                        <br><small class=\"text-muted\" style=\"font-size:0.5rem;\">{{ cashier.role|slice(0, 10) }}</small>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </td>
                                        <td class=\"text-end d-none d-sm-table-cell\">{{ cashier.orders_count|number_format(0, ',', ' ') }}</td>
                                        <td class=\"text-end d-none d-md-table-cell\">{{ cashier.total_items|number_format(0, ',', ' ') }}</td>
                                        <td class=\"text-end fw-semibold\">{{ cashier.total_revenue|number_format(0, ',', ' ') }}</td>
                                        <td class=\"text-end d-none d-lg-table-cell\">{{ cashier.average_basket|number_format(0, ',', ' ') }}</td>
                                        <td class=\"text-end\">
                                            <div class=\"d-flex align-items-center justify-content-end gap-1\">
                                                <span style=\"font-size:0.55rem;\">{{ cashier.percentage }}%</span>
                                                <div class=\"progress-custom\" style=\"width: 40px;\">
                                                    <div class=\"progress-bar-custom bg-primary\" style=\"width: {{ cashier.percentage }}%\"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-users fa-2x mb-2 d-block\"></i>
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
let hourlyChart = null;
let dailyChart = null;
let categoryChart = null;
let currentChartType = 'revenue';
let isLoading = false;

// Données initiales
let timelineData = {{ timeline|default([])|json_encode|raw }};
let paymentData = {{ sales_distribution.by_payment_method|default([])|json_encode|raw }};
let hourlyData = {{ sales_distribution.by_hour|default([])|json_encode|raw }};
let dailyData = {{ sales_distribution.by_day|default([])|json_encode|raw }};
let categoryData = {{ sales_distribution.by_category|default([])|json_encode|raw }};

document.addEventListener('DOMContentLoaded', function() {
    initCharts();
    updateActiveFilters();
});

function initCharts() {
    initTimelineChart();
    initPaymentChart();
    initHourlyChart();
    initDailyChart();
    initCategoryChart();
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
        data = timelineData.map(d => d.items || 0);
        label = 'Articles vendus';
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

function initHourlyChart() {
    const ctx = document.getElementById('hourlyChart').getContext('2d');
    
    const labels = hourlyData.map(h => h.label || '');
    const data = hourlyData.map(h => h.count || 0);
    
    if (hourlyChart) {
        hourlyChart.destroy();
    }
    
    hourlyChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Nombre de ventes',
                data: data,
                backgroundColor: 'rgba(4, 99, 241, 0.7)',
                borderColor: '#0463f1',
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
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(context.raw);
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
                    title: { display: true, text: 'Ventes', font: { size: 9 } },
                    ticks: { 
                        stepSize: 1,
                        font: { size: 8 }
                    }
                },
                x: { 
                    title: { display: true, text: 'Heure', font: { size: 9 } },
                    ticks: { font: { size: 8 } }
                }
            }
        }
    });
}

function initDailyChart() {
    const ctx = document.getElementById('dailyChart').getContext('2d');
    
    const labels = dailyData.map(d => d.day || '');
    const data = dailyData.map(d => d.count || 0);
    
    if (dailyChart) {
        dailyChart.destroy();
    }
    
    dailyChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Nombre de ventes',
                data: data,
                backgroundColor: 'rgba(16, 185, 129, 0.7)',
                borderColor: '#10b981',
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
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(context.raw);
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
                    title: { display: true, text: 'Ventes', font: { size: 9 } },
                    ticks: { 
                        stepSize: 1,
                        font: { size: 8 }
                    }
                },
                x: { 
                    title: { display: true, text: 'Jour', font: { size: 9 } },
                    ticks: { font: { size: 8 } }
                }
            }
        }
    });
}

function initCategoryChart() {
    const ctx = document.getElementById('categoryChart').getContext('2d');
    
    const labels = categoryData.map(c => c.category || '');
    const data = categoryData.map(c => c.revenue || 0);
    
    if (categoryChart) {
        categoryChart.destroy();
    }
    
    if (categoryData.length > 0) {
        categoryChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: ['#0463f1', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#06b6d4', '#ec4899', '#6366f1'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { 
                        position: 'right',
                        labels: { boxWidth: 10, font: { size: 9 }, padding: 6 }
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
        const response = await fetch(`/reports/sales/data?\${params.toString()}`);
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
    if (data.kpis) {
        const kpiRevenue = document.getElementById('kpiRevenue');
        if (kpiRevenue) kpiRevenue.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.revenue || 0);
        
        const kpiOrders = document.getElementById('kpiOrders');
        if (kpiOrders) kpiOrders.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.total_orders || 0);
        
        const kpiAverageBasket = document.getElementById('kpiAverageBasket');
        if (kpiAverageBasket) kpiAverageBasket.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.average_basket || 0);
        
        const kpiDiscounts = document.getElementById('kpiDiscounts');
        if (kpiDiscounts) kpiDiscounts.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.total_discount || 0);
    }
    
    if (data.timeline && data.timeline.length > 0) {
        timelineData = data.timeline;
        initTimelineChart();
    }
    
    if (data.sales_distribution) {
        if (data.sales_distribution.by_payment_method) {
            paymentData = data.sales_distribution.by_payment_method;
            initPaymentChart();
        }
        if (data.sales_distribution.by_hour) {
            hourlyData = data.sales_distribution.by_hour;
            initHourlyChart();
        }
        if (data.sales_distribution.by_day) {
            dailyData = data.sales_distribution.by_day;
            initDailyChart();
        }
        if (data.sales_distribution.by_category) {
            categoryData = data.sales_distribution.by_category;
            initCategoryChart();
        }
    }
    
    if (data.top_selling) {
        updateTopSelling(data.top_selling);
    }
    
    if (data.promotion_impact) {
        updatePromotionImpact(data.promotion_impact);
    }
    
    if (data.cashier_performance) {
        updateCashierPerformance(data.cashier_performance);
    }
}

function updateTopSelling(items) {
    const container = document.getElementById('topSellingList');
    if (!container) return;
    
    if (!items || items.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = items.slice(0, 5).map((item, index) => `
        <tr>
            <td>\${index + 1}</td>
            <td>
                \${escapeHtml(item.name || '').slice(0, 18)}
                \${item.recipe_name ? `<small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">\${escapeHtml(item.recipe_name).slice(0, 12)}</small>` : ''}
            </td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(item.total_quantity || 0)}</td>
            <td class=\"text-end fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(item.total_revenue || 0)}</td>
            <td class=\"text-end text-danger d-none d-md-table-cell\">\${new Intl.NumberFormat('fr-FR').format(item.total_discount || 0)}</td>
        </tr>
    `).join('');
}

function updatePromotionImpact(impact) {
    if (!impact) return;
    
    const ordersWithPromo = document.getElementById('ordersWithPromo');
    if (ordersWithPromo) ordersWithPromo.textContent = new Intl.NumberFormat('fr-FR').format(impact.orders_with_promo || 0);
    
    const ordersWithoutPromo = document.getElementById('ordersWithoutPromo');
    if (ordersWithoutPromo) ordersWithoutPromo.textContent = new Intl.NumberFormat('fr-FR').format(impact.orders_without_promo || 0);
    
    const revenueWithPromo = document.getElementById('revenueWithPromo');
    if (revenueWithPromo) revenueWithPromo.textContent = new Intl.NumberFormat('fr-FR').format(impact.revenue_with_promo || 0);
    
    const totalDiscountGiven = document.getElementById('totalDiscountGiven');
    if (totalDiscountGiven) totalDiscountGiven.textContent = new Intl.NumberFormat('fr-FR').format(impact.total_discount_given || 0);
}

function updateCashierPerformance(cashiers) {
    const container = document.getElementById('cashierList');
    if (!container) return;
    
    if (!cashiers || cashiers.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"6\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-users fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                </td>
            </tr>
        `;
        return;
    }
    
    container.innerHTML = cashiers.map(cashier => `
        <tr>
            <td>
                <div class=\"cashier-info\">
                    \${cashier.photo ? 
                        `<img src=\"/uploads/users/\${escapeHtml(cashier.photo)}\" 
                             class=\"cashier-avatar\" 
                             alt=\"\${escapeHtml(cashier.cashier_name)}\"
                             onerror=\"this.onerror=null; this.src='https://placehold.co/40x40/f1f5f9/64748b?text=\${escapeHtml(cashier.cashier_name).charAt(0)}'\">` :
                        `<div class=\"cashier-avatar d-flex align-items-center justify-content-center\" 
                             style=\"background: #e2e8f0; color: #64748b;\">
                            \${escapeHtml(cashier.cashier_name).charAt(0)}
                        </div>`
                    }
                    <div>
                        <strong class=\"small\">\${escapeHtml(cashier.cashier_name).slice(0, 12)}</strong>
                        \${cashier.role ? `<br><small class=\"text-muted\" style=\"font-size:0.5rem;\">\${escapeHtml(cashier.role).slice(0, 10)}</small>` : ''}
                    </div>
                </div>
            </td>
            <td class=\"text-end d-none d-sm-table-cell\">\${new Intl.NumberFormat('fr-FR').format(cashier.orders_count || 0)}</td>
            <td class=\"text-end d-none d-md-table-cell\">\${new Intl.NumberFormat('fr-FR').format(cashier.total_items || 0)}</td>
            <td class=\"text-end fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(cashier.total_revenue || 0)}</td>
            <td class=\"text-end d-none d-lg-table-cell\">\${new Intl.NumberFormat('fr-FR').format(cashier.average_basket || 0)}</td>
            <td class=\"text-end\">
                <div class=\"d-flex align-items-center justify-content-end gap-1\">
                    <span style=\"font-size:0.55rem;\">\${cashier.percentage || 0}%</span>
                    <div class=\"progress-custom\" style=\"width: 40px;\">
                        <div class=\"progress-bar-custom bg-primary\" style=\"width: \${cashier.percentage || 0}%\"></div>
                    </div>
                </div>
            </td>
        </tr>
    `).join('');
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
        <span class=\"badge bg-secondary d-inline-flex align-items-center gap-1 gap-sm-2 py-1 py-sm-2 px-2 px-sm-3\" style=\"cursor: pointer; font-size:0.55rem;\" onclick=\"removeFilter('\${filter.key}')\">
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
    
    window.location.href = `/reports/sales/export?\${params.toString()}`;
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
{% endblock %}", "reports/sales/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reports\\sales\\index.html.twig");
    }
}
