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

/* reports/stock/index.html.twig */
class __TwigTemplate_88c6df873c67f65bac81a9a3aefc093d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/stock/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/stock/index.html.twig"));

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

        yield "Rapport de Stock - ";
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

    .stock-dashboard {
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
    .kpi-card.danger::before { background: linear-gradient(90deg, var(--danger), #f87171); }
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
    .kpi-icon.danger { background: rgba(239, 68, 68, 0.1); color: var(--danger); }
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
    
    /* Container qui s'étend sur toute la largeur */
    .full-width-card {
        width: 100%;
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
    
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    .status-badge.success { background: #10b98120; color: #10b981; }
    .status-badge.warning { background: #f59e0b20; color: #f59e0b; }
    .status-badge.danger { background: #ef444420; color: #ef4444; }
    .status-badge.info { background: #0ea5e920; color: #0ea5e9; }
    .status-badge.secondary { background: #64748b20; color: #64748b; }
    
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
    
    .movement-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.15rem 0.5rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    .movement-badge.purchase_in { background: #10b98120; color: #10b981; }
    .movement-badge.sale_out { background: #ef444420; color: #ef4444; }
    .movement-badge.adjustment_in { background: #0ea5e920; color: #0ea5e9; }
    .movement-badge.adjustment_out { background: #f59e0b20; color: #f59e0b; }
    
    .user-avatar-sm {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #64748b;
    }
    
    .user-info {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .user-details {
        display: flex;
        flex-direction: column;
    }
    
    .user-name {
        font-weight: 600;
        font-size: 0.85rem;
    }
    
    .user-email {
        font-size: 0.7rem;
        color: #64748b;
    }
    
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.3rem; }
        .chart-container { height: 220px; }
        .kpi-card { padding: 1rem; }
        .data-table { font-size: 0.75rem; }
        .data-table th, .data-table td { padding: 0.4rem 0.5rem; }
        .user-avatar-sm { width: 28px; height: 28px; }
        .user-name { font-size: 0.75rem; }
        .user-email { font-size: 0.65rem; }
    }
    
    @media print {
        .no-print, .filters-section, .action-buttons, .btn, nav {
            display: none !important;
        }
        .stock-dashboard { background: white; }
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

    // line 320
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

        // line 321
        yield "<div class=\"stock-dashboard py-3\">
    <div class=\"container-fluid px-3 px-md-4\">
        
        <!-- En-tête -->
        <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
            <div>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-1\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 330
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <i class=\"fas fa-boxes me-1\"></i> Rapport de Stock
                        </li>
                    </ol>
                </nav>
                <h1 class=\"h3 fw-bold mb-0\">
                    <i class=\"fas fa-boxes text-primary me-2\"></i>
                    Rapport de Stock
                </h1>
                <p class=\"text-muted small mb-0\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    ";
        // line 345
        if ((($tmp = (isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 345, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 346
            yield "                        Analyse détaillée des stocks de votre restaurant
                    ";
        } else {
            // line 348
            yield "                        Analyse détaillée des stocks de votre commerce
                    ";
        }
        // line 350
        yield "                </p>
            </div>
            <div class=\"action-buttons d-flex gap-2\">
                <button class=\"btn btn-primary btn-sm\" onclick=\"applyFilters()\" id=\"applyBtn\">
                    <i class=\"fas fa-search me-1\"></i> Appliquer
                </button>
                <button class=\"btn btn-outline-secondary btn-sm\" onclick=\"refreshData()\" title=\"Actualiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </button>
                <button class=\"btn btn-outline-success btn-sm\" onclick=\"exportData()\" title=\"Exporter CSV\">
                    <i class=\"fas fa-download\"></i>
                </button>
                <button class=\"btn btn-outline-secondary btn-sm d-print-none\" onclick=\"window.print()\" title=\"Imprimer\">
                    <i class=\"fas fa-print\"></i>
                </button>
            </div>
        </div>

        <!-- Section Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-3 align-items-end\">
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-alt\"></i> Période prédéfinie
                        </label>
                        <select id=\"datePreset\" class=\"form-select form-select-sm\">
                            <option value=\"\">Personnalisée</option>
                            ";
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["date_presets"]) || array_key_exists("date_presets", $context) ? $context["date_presets"] : (function () { throw new RuntimeError('Variable "date_presets" does not exist.', 378, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 379
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 379, $this->source); })()), "date_preset", [], "any", false, false, false, 379) == $context["key"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        yield "                        </select>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-day\"></i> Date du
                        </label>
                        <input type=\"date\" id=\"dateFrom\" class=\"form-control form-control-sm\" 
                               value=\"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 392, $this->source); })()), "date_from", [], "any", false, false, false, 392), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-day\"></i> Date au
                        </label>
                        <input type=\"date\" id=\"dateTo\" class=\"form-control form-control-sm\" 
                               value=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 401, $this->source); })()), "date_to", [], "any", false, false, false, 401), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-tags\"></i> Catégorie
                        </label>
                        <select id=\"categoryFilter\" class=\"form-select form-select-sm\">
                            <option value=\"\">Toutes</option>
                            ";
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("categories", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 411, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 412
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 412), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 412), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        yield "                        </select>
                    </div>
                </div>
            </div>
            
            <div id=\"activeFilters\" class=\"d-flex gap-2 flex-wrap mt-3 pt-2 border-top\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-chart-line me-1\"></i> Valeur totale du stock
                            </div>
                            <div class=\"kpi-value\" id=\"kpiTotalValue\">
                                ";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpis"] ?? null), "total_value", [], "any", true, true, false, 432)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 432, $this->source); })()), "total_value", [], "any", false, false, false, 432), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up\">
                                ";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 435, $this->source); })()), "html", null, true);
        yield "
                            </div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-chart-line\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card success\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-boxes me-1\"></i> Quantité totale
                            </div>
                            <div class=\"kpi-value\" id=\"kpiTotalQuantity\">
                                ";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpis"] ?? null), "total_quantity", [], "any", true, true, false, 453)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 453, $this->source); })()), "total_quantity", [], "any", false, false, false, 453), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up\">
                                articles
                            </div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-boxes\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> Stock faible
                            </div>
                            <div class=\"kpi-value\" id=\"kpiLowStock\">
                                ";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpis"] ?? null), "low_stock_count", [], "any", true, true, false, 474)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 474, $this->source); })()), "low_stock_count", [], "any", false, false, false, 474), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend down\">
                                produits
                            </div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-exclamation-triangle\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card danger\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-ban me-1\"></i> Rupture de stock
                            </div>
                            <div class=\"kpi-value\" id=\"kpiOutOfStock\">
                                ";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpis"] ?? null), "out_of_stock_count", [], "any", true, true, false, 495)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 495, $this->source); })()), "out_of_stock_count", [], "any", false, false, false, 495), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend down\">
                                produits
                            </div>
                        </div>
                        <div class=\"kpi-icon danger\">
                            <i class=\"fas fa-ban\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphique d'évolution du stock -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-line\"></i>
                        Évolution du stock
                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"changeTimelineType('movements')\">Mouvements</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"changeTimelineType('net')\">Variation nette</button>
                        </div>
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"stockTimelineChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alertes de péremption - PLEINE LARGEUR -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card full-width-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-calendar-times\"></i>
                        Alertes de péremption
                        <span class=\"badge bg-danger\" id=\"expiryCount\">";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["expiry_alerts"]) || array_key_exists("expiry_alerts", $context) ? $context["expiry_alerts"] : (function () { throw new RuntimeError('Variable "expiry_alerts" does not exist.', 535, $this->source); })())), "html", null, true);
        yield "</span>
                    </div>
                    ";
        // line 537
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["expiry_alerts"]) || array_key_exists("expiry_alerts", $context) ? $context["expiry_alerts"] : (function () { throw new RuntimeError('Variable "expiry_alerts" does not exist.', 537, $this->source); })())) > 0)) {
            // line 538
            yield "                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Lot</th>
                                    <th>Quantité</th>
                                    <th>Date d'expiration</th>
                                    <th>Jours restants</th>
                                    <th class=\"text-end\">Valeur</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody id=\"expiryAlertsList\">
                                ";
            // line 552
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["expiry_alerts"]) || array_key_exists("expiry_alerts", $context) ? $context["expiry_alerts"] : (function () { throw new RuntimeError('Variable "expiry_alerts" does not exist.', 552, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 553
                yield "                                    <tr>
                                        <td>
                                            <strong>";
                // line 555
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "product_name", [], "any", false, false, false, 555), "html", null, true);
                yield "</strong>
                                            <br><small class=\"text-muted\">Lot: ";
                // line 556
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "batch_number", [], "any", false, false, false, 556), "html", null, true);
                yield "</small>
                                         </div>
                                        <td>";
                // line 558
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "batch_number", [], "any", false, false, false, 558), "html", null, true);
                yield "</div>
                                        <td>";
                // line 559
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "quantity", [], "any", false, false, false, 559), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "unit", [], "any", false, false, false, 559), "html", null, true);
                yield "</div>
                                        <td>";
                // line 560
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "expiry_date", [], "any", false, false, false, 560), "d/m/Y"), "html", null, true);
                yield "</div>
                                        <td class=\"";
                // line 561
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "days_until_expiry", [], "any", false, false, false, 561) <= 30)) {
                    yield "text-danger fw-bold";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "days_until_expiry", [], "any", false, false, false, 561) <= 60)) {
                    yield "text-warning";
                }
                yield "\">
                                            ";
                // line 562
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "days_until_expiry", [], "any", false, false, false, 562), "html", null, true);
                yield " jours
                                         </div>
                                        <td class=\"text-end\">";
                // line 564
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "total_value", [], "any", false, false, false, 564), 0, ",", " "), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 564, $this->source); })()), "html", null, true);
                yield "</div>
                                        <td>
                                            <span class=\"status-badge ";
                // line 566
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "status_class", [], "any", false, false, false, 566), "html", null, true);
                yield "\">
                                                <i class=\"fas ";
                // line 567
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "status_icon", [], "any", false, false, false, 567), "html", null, true);
                yield "\"></i>
                                                ";
                // line 568
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "status", [], "any", false, false, false, 568), "html", null, true);
                yield "
                                            </span>
                                         </div>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alert'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 573
            yield "                            </tbody>
                        </table>
                    </div>
                    ";
        } else {
            // line 577
            yield "                    <div class=\"text-center py-4 text-muted\">
                        <i class=\"fas fa-check-circle fa-3x mb-2 d-block text-success\"></i>
                        <p>Aucun produit proche de la date d'expiration</p>
                    </div>
                    ";
        }
        // line 582
        yield "                </div>
            </div>
        </div>

        <!-- Stock faible/rupture - PLEINE LARGEUR (car souvent peu d'éléments) -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card full-width-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        Produits en stock faible / rupture
                        <span class=\"badge bg-warning\" id=\"lowStockCount\">";
        // line 593
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["low_stock_products"]) || array_key_exists("low_stock_products", $context) ? $context["low_stock_products"] : (function () { throw new RuntimeError('Variable "low_stock_products" does not exist.', 593, $this->source); })())), "html", null, true);
        yield "</span>
                    </div>
                    ";
        // line 595
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["low_stock_products"]) || array_key_exists("low_stock_products", $context) ? $context["low_stock_products"] : (function () { throw new RuntimeError('Variable "low_stock_products" does not exist.', 595, $this->source); })())) > 0)) {
            // line 596
            yield "                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Stock actuel</th>
                                    <th>Stock min</th>
                                    <th>Unité</th>
                                    <th class=\"text-end\">Valeur</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody id=\"lowStockList\">
                                ";
            // line 609
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["low_stock_products"]) || array_key_exists("low_stock_products", $context) ? $context["low_stock_products"] : (function () { throw new RuntimeError('Variable "low_stock_products" does not exist.', 609, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 610
                yield "                                    <tr>
                                        <td>
                                            <strong>";
                // line 612
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 612), "html", null, true);
                yield "</strong>
                                            <br><small class=\"text-muted\">";
                // line 613
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 613), "html", null, true);
                yield "</small>
                                         </div>
                                        <td class=\"text-danger fw-bold\">";
                // line 615
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "current_stock", [], "any", false, false, false, 615), "html", null, true);
                yield "</div>
                                        <td>";
                // line 616
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "min_stock", [], "any", false, false, false, 616), "html", null, true);
                yield "</div>
                                        <td>";
                // line 617
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 617), "html", null, true);
                yield "</div>
                                        <td class=\"text-end\">";
                // line 618
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "value", [], "any", false, false, false, 618), 0, ",", " "), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 618, $this->source); })()), "html", null, true);
                yield "</div>
                                        <td>
                                            <span class=\"status-badge ";
                // line 620
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status_class", [], "any", false, false, false, 620), "html", null, true);
                yield "\">
                                                <i class=\"fas ";
                // line 621
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status_icon", [], "any", false, false, false, 621), "html", null, true);
                yield "\"></i>
                                                ";
                // line 622
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 622) == "rupture")) {
                    yield "Rupture";
                } else {
                    yield "Stock faible";
                }
                // line 623
                yield "                                            </span>
                                         </div>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 627
            yield "                            </tbody>
                        </table>
                    </div>
                    ";
        } else {
            // line 631
            yield "                    <div class=\"text-center py-4 text-muted\">
                        <i class=\"fas fa-check-circle fa-3x mb-2 d-block text-success\"></i>
                        <p>Aucun produit en stock faible ou en rupture</p>
                    </div>
                    ";
        }
        // line 636
        yield "                </div>
            </div>
        </div>

        <!-- Valeur du stock par catégorie et Top produits - CÔTE À CÔTE -->
        <div class=\"row g-3 mb-4 row-equal-height\">
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-pie\"></i>
                        Valeur du stock par catégorie
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"categoryChart\"></canvas>
                    </div>
                </div>
            </div>
            
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-crown\"></i>
                        Top produits par valeur en stock
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Produit</th>
                                    <th>Stock</th>
                                    <th class=\"text-end\">Valeur</th>
                                </tr>
                            </thead>
                            <tbody id=\"topProductsList\">
                                ";
        // line 671
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_products_by_value"]) || array_key_exists("top_products_by_value", $context) ? $context["top_products_by_value"] : (function () { throw new RuntimeError('Variable "top_products_by_value" does not exist.', 671, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 672
            yield "                                    <tr>
                                        <td>";
            // line 673
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 673), "html", null, true);
            yield "</div>
                                        <td>
                                            <strong>";
            // line 675
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 675), "html", null, true);
            yield "</strong>
                                            <br><small class=\"text-muted\">";
            // line 676
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 676), "html", null, true);
            yield "</small>
                                         </div>
                                        <td>";
            // line 678
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "current_stock", [], "any", false, false, false, 678), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 678), "html", null, true);
            yield "</div>
                                        <td class=\"text-end fw-semibold\">";
            // line 679
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total_value", [], "any", false, false, false, 679), 0, ",", " "), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 679, $this->source); })()), "html", null, true);
            yield "</div>
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
        // line 681
        if (!$context['_iterated']) {
            // line 682
            yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-boxes fa-2x mb-2 d-block\"></i>
                                            Aucun produit en stock
                                         </div>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 689
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Derniers mouvements de stock - PLEINE LARGEUR (car souvent très long) -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card full-width-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-history\"></i>
                        Derniers mouvements de stock
                        <span class=\"badge bg-info\">";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recent_movements"]) || array_key_exists("recent_movements", $context) ? $context["recent_movements"] : (function () { throw new RuntimeError('Variable "recent_movements" does not exist.', 703, $this->source); })())), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Produit</th>
                                    <th>Type</th>
                                    <th>Quantité</th>
                                    <th>Utilisateur</th>
                                </tr>
                            </thead>
                            <tbody id=\"recentMovementsList\">
                                ";
        // line 717
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent_movements"]) || array_key_exists("recent_movements", $context) ? $context["recent_movements"] : (function () { throw new RuntimeError('Variable "recent_movements" does not exist.', 717, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
            // line 718
            yield "                                    <tr>
                                        <td><small>";
            // line 719
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "created_at", [], "any", false, false, false, 719), "d/m/y H:i"), "html", null, true);
            yield "</small></div>
                                        <td>
                                            <strong>";
            // line 721
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product_name", [], "any", false, false, false, 721), "html", null, true);
            yield "</strong>
                                         </div>
                                        <td>
                                            <span class=\"movement-badge ";
            // line 724
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movement_type", [], "any", false, false, false, 724), "html", null, true);
            yield "\">
                                                <i class=\"fas 
                                                    ";
            // line 726
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movement_type", [], "any", false, false, false, 726) == "purchase_in")) {
                yield "fa-arrow-down
                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 727
$context["movement"], "movement_type", [], "any", false, false, false, 727) == "sale_out")) {
                yield "fa-arrow-up
                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 728
$context["movement"], "movement_type", [], "any", false, false, false, 728) == "adjustment_in")) {
                yield "fa-plus
                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 729
$context["movement"], "movement_type", [], "any", false, false, false, 729) == "adjustment_out")) {
                yield "fa-minus
                                                    ";
            } else {
                // line 730
                yield "fa-exchange-alt";
            }
            yield "\">
                                                </i>
                                                ";
            // line 732
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movement_label", [], "any", false, false, false, 732), "html", null, true);
            yield "
                                            </span>
                                         </div>
                                        <td class=\"";
            // line 735
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movement_type", [], "any", false, false, false, 735) == "purchase_in")) {
                yield "text-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movement_type", [], "any", false, false, false, 735) == "sale_out")) {
                yield "text-danger";
            }
            yield " fw-bold\">
                                            ";
            // line 736
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movement_type", [], "any", false, false, false, 736) == "purchase_in")) {
                yield "+";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movement_type", [], "any", false, false, false, 736) == "sale_out")) {
                yield "-";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 736), "html", null, true);
            yield "
                                         </div>
                                        <td>
                                            <div class=\"user-info\">
                                                ";
            // line 740
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user_photo", [], "any", false, false, false, 740)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 741
                yield "                                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user_photo", [], "any", false, false, false, 741))), "html", null, true);
                yield "\" 
                                                         class=\"user-avatar-sm\" 
                                                         alt=\"";
                // line 743
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user_name", [], "any", false, false, false, 743), "html", null, true);
                yield "\"
                                                         onerror=\"this.onerror=null; this.src='https://placehold.co/32x32/f1f5f9/64748b?text=";
                // line 744
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user_name", [], "any", false, false, false, 744))), "html", null, true);
                yield "'\">
                                                ";
            } else {
                // line 746
                yield "                                                    <div class=\"user-avatar-sm d-flex align-items-center justify-content-center\" 
                                                         style=\"background: #e2e8f0; color: #64748b;\">
                                                        ";
                // line 748
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user_name", [], "any", false, false, false, 748))), "html", null, true);
                yield "
                                                    </div>
                                                ";
            }
            // line 751
            yield "                                                <div class=\"user-details\">
                                                    <span class=\"user-name\">";
            // line 752
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user_name", [], "any", false, false, false, 752), "html", null, true);
            yield "</span>
                                                    <span class=\"user-email\">";
            // line 753
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user_email", [], "any", false, false, false, 753), "html", null, true);
            yield "</span>
                                                </div>
                                            </div>
                                         </div>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 758
        if (!$context['_iterated']) {
            // line 759
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-history fa-2x mb-2 d-block\"></i>
                                            Aucun mouvement récent
                                         </div>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 766
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section ingrédients (pour restaurants) - PLEINE LARGEUR -->
        ";
        // line 774
        if (((isset($context["is_restaurant"]) || array_key_exists("is_restaurant", $context) ? $context["is_restaurant"] : (function () { throw new RuntimeError('Variable "is_restaurant" does not exist.', 774, $this->source); })()) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("top_ingredients", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["top_ingredients"]) || array_key_exists("top_ingredients", $context) ? $context["top_ingredients"] : (function () { throw new RuntimeError('Variable "top_ingredients" does not exist.', 774, $this->source); })()), [])) : ([]))) > 0))) {
            // line 775
            yield "        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card full-width-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-utensils\"></i>
                        Top ingrédients les plus utilisés
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ingrédient</th>
                                    <th>Quantité utilisée</th>
                                    <th>Unité</th>
                                    <th>Recettes concernées</th>
                                </tr>
                            </thead>
                            <tbody id=\"topIngredientsList\">
                                ";
            // line 794
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_ingredients"]) || array_key_exists("top_ingredients", $context) ? $context["top_ingredients"] : (function () { throw new RuntimeError('Variable "top_ingredients" does not exist.', 794, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                // line 795
                yield "                                    <tr>
                                        <td>";
                // line 796
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 796), "html", null, true);
                yield "</div>
                                        <td><strong>";
                // line 797
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 797), "html", null, true);
                yield "</strong></div>
                                        <td>";
                // line 798
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "total_quantity_used", [], "any", false, false, false, 798), 0, ",", " "), "html", null, true);
                yield "</div>
                                        <td>";
                // line 799
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "unit", [], "any", false, false, false, 799), "html", null, true);
                yield "</div>
                                        <td>";
                // line 800
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "recipe_count", [], "any", false, false, false, 800), "html", null, true);
                yield " recette(s)</div>
                                    </tr>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 803
            yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 810
        yield "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 815
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

        // line 816
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
<script>
// Variables globales
let stockTimelineChart = null;
let categoryChart = null;
let currentTimelineType = 'movements';
let isLoading = false;

// Données initiales
let stockTimelineData = ";
        // line 826
        yield json_encode(((array_key_exists("stock_timeline", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["stock_timeline"]) || array_key_exists("stock_timeline", $context) ? $context["stock_timeline"] : (function () { throw new RuntimeError('Variable "stock_timeline" does not exist.', 826, $this->source); })()), [])) : ([])));
        yield ";
let categoryData = ";
        // line 827
        yield json_encode(((array_key_exists("stock_value_by_category", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["stock_value_by_category"]) || array_key_exists("stock_value_by_category", $context) ? $context["stock_value_by_category"] : (function () { throw new RuntimeError('Variable "stock_value_by_category" does not exist.', 827, $this->source); })()), [])) : ([])));
        yield ";

document.addEventListener('DOMContentLoaded', function() {
    initCharts();
    updateActiveFilters();
});

function initCharts() {
    initStockTimelineChart();
    initCategoryChart();
}

function initStockTimelineChart() {
    const ctx = document.getElementById('stockTimelineChart').getContext('2d');
    
    let datasets = [];
    
    if (currentTimelineType === 'movements') {
        datasets = [
            {
                label: 'Achats',
                data: stockTimelineData.map(d => d.purchases || 0),
                borderColor: '#10b981',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            },
            {
                label: 'Ventes',
                data: stockTimelineData.map(d => d.sales || 0),
                borderColor: '#ef4444',
                backgroundColor: 'rgba(239, 68, 68, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }
        ];
    } else {
        datasets = [
            {
                label: 'Variation nette du stock',
                data: stockTimelineData.map(d => d.net_change || 0),
                borderColor: '#0463f1',
                backgroundColor: 'rgba(4, 99, 241, 0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.4
            }
        ];
    }
    
    if (stockTimelineChart) {
        stockTimelineChart.destroy();
    }
    
    stockTimelineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: stockTimelineData.map(d => d.month || ''),
            datasets: datasets
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let value = context.raw;
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(value);
                        }
                    }
                },
                legend: { position: 'top' }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'Quantité' },
                    ticks: {
                        callback: function(value) {
                            return new Intl.NumberFormat('fr-FR').format(value);
                        }
                    }
                },
                x: { title: { display: true, text: 'Mois' } }
            }
        }
    });
}

function initCategoryChart() {
    const ctx = document.getElementById('categoryChart').getContext('2d');
    
    const labels = categoryData.map(c => c.category || '');
    const data = categoryData.map(c => c.total_value || 0);
    
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
                    legend: { position: 'right' },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const value = context.raw;
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                                return context.label + ': ' + new Intl.NumberFormat('fr-FR').format(value) + ' ";
        // line 951
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 951, $this->source); })()), "html", null, true);
        yield " (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });
    } else {
        ctx.fillStyle = '#e5e7eb';
        ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);
        ctx.fillStyle = '#64748b';
        ctx.font = '14px Arial';
        ctx.textAlign = 'center';
        ctx.fillText('Aucune donnée disponible', ctx.canvas.width / 2, ctx.canvas.height / 2);
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
    const category = document.getElementById('categoryFilter')?.value;
    
    if (datePreset) params.append('date_preset', datePreset);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    if (category) params.append('category', category);
    
    try {
        const response = await fetch(`/reports/stock/data?\${params.toString()}`);
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
    // Mettre à jour les KPI
    if (data.kpis) {
        const kpiTotalValue = document.getElementById('kpiTotalValue');
        if (kpiTotalValue) kpiTotalValue.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.total_value || 0);
        
        const kpiTotalQuantity = document.getElementById('kpiTotalQuantity');
        if (kpiTotalQuantity) kpiTotalQuantity.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.total_quantity || 0);
        
        const kpiLowStock = document.getElementById('kpiLowStock');
        if (kpiLowStock) kpiLowStock.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.low_stock_count || 0);
        
        const kpiOutOfStock = document.getElementById('kpiOutOfStock');
        if (kpiOutOfStock) kpiOutOfStock.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.out_of_stock_count || 0);
    }
    
    // Mettre à jour les graphiques
    if (data.stock_timeline && data.stock_timeline.length > 0) {
        stockTimelineData = data.stock_timeline;
        initStockTimelineChart();
    }
    
    if (data.stock_value_by_category) {
        categoryData = data.stock_value_by_category;
        initCategoryChart();
    }
    
    // Mettre à jour les tableaux
    if (data.low_stock_products) {
        updateLowStockList(data.low_stock_products);
    }
    
    if (data.top_products_by_value) {
        updateTopProductsList(data.top_products_by_value);
    }
    
    if (data.recent_movements) {
        updateRecentMovements(data.recent_movements);
    }
    
    if (data.expiry_alerts) {
        updateExpiryAlerts(data.expiry_alerts);
    }
    
    if (data.top_ingredients) {
        updateTopIngredients(data.top_ingredients);
    }
}

function updateLowStockList(products) {
    const container = document.getElementById('lowStockList');
    const countBadge = document.getElementById('lowStockCount');
    if (!container) return;
    
    if (countBadge) countBadge.textContent = products.length;
    
    if (!products || products.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"6\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-check-circle fa-2x mb-2 d-block text-success\"></i>
                    Aucun produit en stock faible ou en rupture
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = products.map(product => `
        <tr>
            <td>
                <strong>\${escapeHtml(product.name)}</strong>
                <br><small class=\"text-muted\">\${escapeHtml(product.category)}</small>
             </div>
            <td class=\"text-danger fw-bold\">\${product.current_stock}</div>
            <td>\${product.min_stock}</div>
            <td>\${escapeHtml(product.unit)}</div>
            <td class=\"text-end\">\${new Intl.NumberFormat('fr-FR').format(product.value)} ";
        // line 1079
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1079, $this->source); })()), "html", null, true);
        yield "</div>
            <td>
                <span class=\"status-badge \${product.status_class}\">
                    <i class=\"fas \${product.status_icon}\"></i>
                    \${product.status === 'rupture' ? 'Rupture' : 'Stock faible'}
                </span>
             </div>
         </>
    `).join('');
}

function updateTopProductsList(products) {
    const container = document.getElementById('topProductsList');
    if (!container) return;
    
    if (!products || products.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-boxes fa-2x mb-2 d-block\"></i>
                    Aucun produit en stock
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = products.map((product, index) => `
        <tr>
            <td>\${index + 1}</div>
            <td>
                <strong>\${escapeHtml(product.name)}</strong>
                <br><small class=\"text-muted\">\${escapeHtml(product.category)}</small>
             </div>
            <td>\${product.current_stock} \${escapeHtml(product.unit)}</div>
            <td class=\"text-end fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(product.total_value)} ";
        // line 1114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1114, $this->source); })()), "html", null, true);
        yield "</div>
         </>
    `).join('');
}

function updateRecentMovements(movements) {
    const container = document.getElementById('recentMovementsList');
    if (!container) return;
    
    if (!movements || movements.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-history fa-2x mb-2 d-block\"></i>
                    Aucun mouvement récent
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = movements.map(movement => {
        const date = new Date(movement.created_at);
        const sign = movement.movement_type === 'purchase_in' ? '+' : (movement.movement_type === 'sale_out' ? '-' : '');
        const signClass = movement.movement_type === 'purchase_in' ? 'text-success' : (movement.movement_type === 'sale_out' ? 'text-danger' : '');
        
        return `
            <tr>
                <td><small>\${date.toLocaleDateString('fr-FR')} \${date.toLocaleTimeString('fr-FR', {hour:'2-digit', minute:'2-digit'})}</small></div>
                <td>
                    <strong>\${escapeHtml(movement.product_name)}</strong>
                 </div>
                <td>
                    <span class=\"movement-badge \${movement.movement_type}\">
                        <i class=\"fas \${movement.movement_type === 'purchase_in' ? 'fa-arrow-down' : (movement.movement_type === 'sale_out' ? 'fa-arrow-up' : (movement.movement_type === 'adjustment_in' ? 'fa-plus' : 'fa-minus'))}\"></i>
                        \${movement.movement_label}
                    </span>
                 </div>
                <td class=\"\${signClass} fw-bold\">\${sign}\${movement.quantity}</div>
                <td>
                    <div class=\"user-info\">
                        \${movement.user_photo ? 
                            `<img src=\"/uploads/users/\${escapeHtml(movement.user_photo)}\" 
                                 class=\"user-avatar-sm\" 
                                 alt=\"\${escapeHtml(movement.user_name)}\"
                                 onerror=\"this.onerror=null; this.src='https://placehold.co/32x32/f1f5f9/64748b?text=\${escapeHtml(movement.user_name).charAt(0)}'\">` :
                            `<div class=\"user-avatar-sm d-flex align-items-center justify-content-center\" 
                                 style=\"background: #e2e8f0; color: #64748b;\">
                                \${escapeHtml(movement.user_name).charAt(0)}
                            </div>`
                        }
                        <div class=\"user-details\">
                            <span class=\"user-name\">\${escapeHtml(movement.user_name)}</span>
                            <span class=\"user-email\">\${escapeHtml(movement.user_email || '')}</span>
                        </div>
                    </div>
                 </div>
             </>
        `;
    }).join('');
}

function updateExpiryAlerts(alerts) {
    const container = document.getElementById('expiryAlertsList');
    const countBadge = document.getElementById('expiryCount');
    if (!container) return;
    
    if (countBadge) countBadge.textContent = alerts.length;
    
    if (!alerts || alerts.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"7\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-check-circle fa-2x mb-2 d-block text-success\"></i>
                    Aucun produit proche de la date d'expiration
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = alerts.map(alert => {
        const expiryDate = new Date(alert.expiry_date);
        const daysClass = alert.days_until_expiry <= 30 ? 'text-danger fw-bold' : (alert.days_until_expiry <= 60 ? 'text-warning' : '');
        
        return `
            <tr>
                <td>
                    <strong>\${escapeHtml(alert.product_name)}</strong>
                    <br><small class=\"text-muted\">Lot: \${escapeHtml(alert.batch_number)}</small>
                 </div>
                <td>\${escapeHtml(alert.batch_number)}</div>
                <td>\${alert.quantity} \${escapeHtml(alert.unit)}</div>
                <td>\${expiryDate.toLocaleDateString('fr-FR')}</div>
                <td class=\"\${daysClass}\">\${alert.days_until_expiry} jours</div>
                <td class=\"text-end\">\${new Intl.NumberFormat('fr-FR').format(alert.total_value)} ";
        // line 1209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 1209, $this->source); })()), "html", null, true);
        yield "</div>
                <td>
                    <span class=\"status-badge \${alert.status_class}\">
                        <i class=\"fas \${alert.status_icon}\"></i>
                        \${alert.status}
                    </span>
                 </div>
             </>
        `;
    }).join('');
}

function updateTopIngredients(ingredients) {
    const container = document.getElementById('topIngredientsList');
    if (!container) return;
    
    if (!ingredients || ingredients.length === 0) return;
    
    container.innerHTML = ingredients.map((ingredient, index) => `
        <tr>
            <td>\${index + 1}</div>
            <td><strong>\${escapeHtml(ingredient.name)}</strong></div>
            <td>\${new Intl.NumberFormat('fr-FR').format(ingredient.total_quantity_used)}</div>
            <td>\${escapeHtml(ingredient.unit)}</div>
            <td>\${ingredient.recipe_count} recette(s)</div>
         </>
    `).join('');
}

function updateActiveFilters() {
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const category = document.getElementById('categoryFilter')?.value;
    
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
    
    if (category) {
        const categorySelect = document.getElementById('categoryFilter');
        const selectedOption = categorySelect?.options[categorySelect.selectedIndex];
        const categoryLabel = selectedOption?.text || category;
        activeFilters.push({ key: 'category', label: `Catégorie: \${categoryLabel}` });
    }
    
    if (activeFilters.length === 0) {
        container.innerHTML = '';
        return;
    }
    
    container.innerHTML = activeFilters.map(filter => `
        <span class=\"badge bg-secondary d-inline-flex align-items-center gap-2 py-2 px-3\" style=\"cursor: pointer;\" onclick=\"removeFilter('\${filter.key}')\">
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
    } else if (key === 'category') {
        const categoryFilter = document.getElementById('categoryFilter');
        if (categoryFilter) categoryFilter.value = '';
    }
    applyFilters();
}

function changeTimelineType(type) {
    currentTimelineType = type;
    if (stockTimelineData.length > 0) {
        initStockTimelineChart();
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
    const category = document.getElementById('categoryFilter')?.value;
    
    if (datePreset) params.append('date_preset', datePreset);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    if (category) params.append('category', category);
    
    window.location.href = `/reports/stock/export?\${params.toString()}`;
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `position-fixed bottom-0 end-0 p-3 m-3 bg-\${type === 'error' ? 'danger' : 'success'} text-white rounded shadow`;
    notification.style.zIndex = '9999';
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
        return "reports/stock/index.html.twig";
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
        return array (  1736 => 1209,  1638 => 1114,  1600 => 1079,  1469 => 951,  1342 => 827,  1338 => 826,  1325 => 816,  1312 => 815,  1298 => 810,  1289 => 803,  1272 => 800,  1268 => 799,  1264 => 798,  1260 => 797,  1256 => 796,  1253 => 795,  1236 => 794,  1215 => 775,  1213 => 774,  1203 => 766,  1191 => 759,  1189 => 758,  1179 => 753,  1175 => 752,  1172 => 751,  1166 => 748,  1162 => 746,  1157 => 744,  1153 => 743,  1147 => 741,  1145 => 740,  1133 => 736,  1125 => 735,  1119 => 732,  1113 => 730,  1108 => 729,  1104 => 728,  1100 => 727,  1096 => 726,  1091 => 724,  1085 => 721,  1080 => 719,  1077 => 718,  1072 => 717,  1055 => 703,  1039 => 689,  1027 => 682,  1025 => 681,  1008 => 679,  1002 => 678,  997 => 676,  993 => 675,  988 => 673,  985 => 672,  967 => 671,  930 => 636,  923 => 631,  917 => 627,  908 => 623,  902 => 622,  898 => 621,  894 => 620,  887 => 618,  883 => 617,  879 => 616,  875 => 615,  870 => 613,  866 => 612,  862 => 610,  858 => 609,  843 => 596,  841 => 595,  836 => 593,  823 => 582,  816 => 577,  810 => 573,  799 => 568,  795 => 567,  791 => 566,  784 => 564,  779 => 562,  771 => 561,  767 => 560,  761 => 559,  757 => 558,  752 => 556,  748 => 555,  744 => 553,  740 => 552,  724 => 538,  722 => 537,  717 => 535,  674 => 495,  650 => 474,  626 => 453,  605 => 435,  599 => 432,  579 => 414,  568 => 412,  564 => 411,  551 => 401,  539 => 392,  528 => 383,  519 => 380,  512 => 379,  508 => 378,  478 => 350,  474 => 348,  470 => 346,  468 => 345,  450 => 330,  439 => 321,  426 => 320,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reports/stock/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Rapport de Stock - {{ company_name }}{% endblock %}

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

    .stock-dashboard {
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
    .kpi-card.danger::before { background: linear-gradient(90deg, var(--danger), #f87171); }
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
    .kpi-icon.danger { background: rgba(239, 68, 68, 0.1); color: var(--danger); }
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
    
    /* Container qui s'étend sur toute la largeur */
    .full-width-card {
        width: 100%;
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
    
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    .status-badge.success { background: #10b98120; color: #10b981; }
    .status-badge.warning { background: #f59e0b20; color: #f59e0b; }
    .status-badge.danger { background: #ef444420; color: #ef4444; }
    .status-badge.info { background: #0ea5e920; color: #0ea5e9; }
    .status-badge.secondary { background: #64748b20; color: #64748b; }
    
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
    
    .movement-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.15rem 0.5rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    .movement-badge.purchase_in { background: #10b98120; color: #10b981; }
    .movement-badge.sale_out { background: #ef444420; color: #ef4444; }
    .movement-badge.adjustment_in { background: #0ea5e920; color: #0ea5e9; }
    .movement-badge.adjustment_out { background: #f59e0b20; color: #f59e0b; }
    
    .user-avatar-sm {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #64748b;
    }
    
    .user-info {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .user-details {
        display: flex;
        flex-direction: column;
    }
    
    .user-name {
        font-weight: 600;
        font-size: 0.85rem;
    }
    
    .user-email {
        font-size: 0.7rem;
        color: #64748b;
    }
    
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.3rem; }
        .chart-container { height: 220px; }
        .kpi-card { padding: 1rem; }
        .data-table { font-size: 0.75rem; }
        .data-table th, .data-table td { padding: 0.4rem 0.5rem; }
        .user-avatar-sm { width: 28px; height: 28px; }
        .user-name { font-size: 0.75rem; }
        .user-email { font-size: 0.65rem; }
    }
    
    @media print {
        .no-print, .filters-section, .action-buttons, .btn, nav {
            display: none !important;
        }
        .stock-dashboard { background: white; }
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
<div class=\"stock-dashboard py-3\">
    <div class=\"container-fluid px-3 px-md-4\">
        
        <!-- En-tête -->
        <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
            <div>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-1\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <i class=\"fas fa-boxes me-1\"></i> Rapport de Stock
                        </li>
                    </ol>
                </nav>
                <h1 class=\"h3 fw-bold mb-0\">
                    <i class=\"fas fa-boxes text-primary me-2\"></i>
                    Rapport de Stock
                </h1>
                <p class=\"text-muted small mb-0\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    {% if is_restaurant %}
                        Analyse détaillée des stocks de votre restaurant
                    {% else %}
                        Analyse détaillée des stocks de votre commerce
                    {% endif %}
                </p>
            </div>
            <div class=\"action-buttons d-flex gap-2\">
                <button class=\"btn btn-primary btn-sm\" onclick=\"applyFilters()\" id=\"applyBtn\">
                    <i class=\"fas fa-search me-1\"></i> Appliquer
                </button>
                <button class=\"btn btn-outline-secondary btn-sm\" onclick=\"refreshData()\" title=\"Actualiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </button>
                <button class=\"btn btn-outline-success btn-sm\" onclick=\"exportData()\" title=\"Exporter CSV\">
                    <i class=\"fas fa-download\"></i>
                </button>
                <button class=\"btn btn-outline-secondary btn-sm d-print-none\" onclick=\"window.print()\" title=\"Imprimer\">
                    <i class=\"fas fa-print\"></i>
                </button>
            </div>
        </div>

        <!-- Section Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-3 align-items-end\">
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-alt\"></i> Période prédéfinie
                        </label>
                        <select id=\"datePreset\" class=\"form-select form-select-sm\">
                            <option value=\"\">Personnalisée</option>
                            {% for key, label in date_presets %}
                                <option value=\"{{ key }}\" {{ filters.date_preset == key ? 'selected' }}>
                                    {{ label }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-day\"></i> Date du
                        </label>
                        <input type=\"date\" id=\"dateFrom\" class=\"form-control form-control-sm\" 
                               value=\"{{ filters.date_from }}\">
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-day\"></i> Date au
                        </label>
                        <input type=\"date\" id=\"dateTo\" class=\"form-control form-control-sm\" 
                               value=\"{{ filters.date_to }}\">
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-tags\"></i> Catégorie
                        </label>
                        <select id=\"categoryFilter\" class=\"form-select form-select-sm\">
                            <option value=\"\">Toutes</option>
                            {% for category in categories|default([]) %}
                                <option value=\"{{ category.id }}\">{{ category.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
            </div>
            
            <div id=\"activeFilters\" class=\"d-flex gap-2 flex-wrap mt-3 pt-2 border-top\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-chart-line me-1\"></i> Valeur totale du stock
                            </div>
                            <div class=\"kpi-value\" id=\"kpiTotalValue\">
                                {{ kpis.total_value|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend up\">
                                {{ currency }}
                            </div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-chart-line\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card success\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-boxes me-1\"></i> Quantité totale
                            </div>
                            <div class=\"kpi-value\" id=\"kpiTotalQuantity\">
                                {{ kpis.total_quantity|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend up\">
                                articles
                            </div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-boxes\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> Stock faible
                            </div>
                            <div class=\"kpi-value\" id=\"kpiLowStock\">
                                {{ kpis.low_stock_count|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend down\">
                                produits
                            </div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-exclamation-triangle\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card danger\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-ban me-1\"></i> Rupture de stock
                            </div>
                            <div class=\"kpi-value\" id=\"kpiOutOfStock\">
                                {{ kpis.out_of_stock_count|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"kpi-trend down\">
                                produits
                            </div>
                        </div>
                        <div class=\"kpi-icon danger\">
                            <i class=\"fas fa-ban\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphique d'évolution du stock -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-line\"></i>
                        Évolution du stock
                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"changeTimelineType('movements')\">Mouvements</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"changeTimelineType('net')\">Variation nette</button>
                        </div>
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"stockTimelineChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alertes de péremption - PLEINE LARGEUR -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card full-width-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-calendar-times\"></i>
                        Alertes de péremption
                        <span class=\"badge bg-danger\" id=\"expiryCount\">{{ expiry_alerts|length }}</span>
                    </div>
                    {% if expiry_alerts|length > 0 %}
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Lot</th>
                                    <th>Quantité</th>
                                    <th>Date d'expiration</th>
                                    <th>Jours restants</th>
                                    <th class=\"text-end\">Valeur</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody id=\"expiryAlertsList\">
                                {% for alert in expiry_alerts %}
                                    <tr>
                                        <td>
                                            <strong>{{ alert.product_name }}</strong>
                                            <br><small class=\"text-muted\">Lot: {{ alert.batch_number }}</small>
                                         </div>
                                        <td>{{ alert.batch_number }}</div>
                                        <td>{{ alert.quantity }} {{ alert.unit }}</div>
                                        <td>{{ alert.expiry_date|date('d/m/Y') }}</div>
                                        <td class=\"{% if alert.days_until_expiry <= 30 %}text-danger fw-bold{% elseif alert.days_until_expiry <= 60 %}text-warning{% endif %}\">
                                            {{ alert.days_until_expiry }} jours
                                         </div>
                                        <td class=\"text-end\">{{ alert.total_value|number_format(0, ',', ' ') }} {{ currency }}</div>
                                        <td>
                                            <span class=\"status-badge {{ alert.status_class }}\">
                                                <i class=\"fas {{ alert.status_icon }}\"></i>
                                                {{ alert.status }}
                                            </span>
                                         </div>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    {% else %}
                    <div class=\"text-center py-4 text-muted\">
                        <i class=\"fas fa-check-circle fa-3x mb-2 d-block text-success\"></i>
                        <p>Aucun produit proche de la date d'expiration</p>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Stock faible/rupture - PLEINE LARGEUR (car souvent peu d'éléments) -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card full-width-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        Produits en stock faible / rupture
                        <span class=\"badge bg-warning\" id=\"lowStockCount\">{{ low_stock_products|length }}</span>
                    </div>
                    {% if low_stock_products|length > 0 %}
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Stock actuel</th>
                                    <th>Stock min</th>
                                    <th>Unité</th>
                                    <th class=\"text-end\">Valeur</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody id=\"lowStockList\">
                                {% for product in low_stock_products %}
                                    <tr>
                                        <td>
                                            <strong>{{ product.name }}</strong>
                                            <br><small class=\"text-muted\">{{ product.category }}</small>
                                         </div>
                                        <td class=\"text-danger fw-bold\">{{ product.current_stock }}</div>
                                        <td>{{ product.min_stock }}</div>
                                        <td>{{ product.unit }}</div>
                                        <td class=\"text-end\">{{ product.value|number_format(0, ',', ' ') }} {{ currency }}</div>
                                        <td>
                                            <span class=\"status-badge {{ product.status_class }}\">
                                                <i class=\"fas {{ product.status_icon }}\"></i>
                                                {% if product.status == 'rupture' %}Rupture{% else %}Stock faible{% endif %}
                                            </span>
                                         </div>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    {% else %}
                    <div class=\"text-center py-4 text-muted\">
                        <i class=\"fas fa-check-circle fa-3x mb-2 d-block text-success\"></i>
                        <p>Aucun produit en stock faible ou en rupture</p>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Valeur du stock par catégorie et Top produits - CÔTE À CÔTE -->
        <div class=\"row g-3 mb-4 row-equal-height\">
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-pie\"></i>
                        Valeur du stock par catégorie
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"categoryChart\"></canvas>
                    </div>
                </div>
            </div>
            
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-crown\"></i>
                        Top produits par valeur en stock
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Produit</th>
                                    <th>Stock</th>
                                    <th class=\"text-end\">Valeur</th>
                                </tr>
                            </thead>
                            <tbody id=\"topProductsList\">
                                {% for product in top_products_by_value %}
                                    <tr>
                                        <td>{{ loop.index }}</div>
                                        <td>
                                            <strong>{{ product.name }}</strong>
                                            <br><small class=\"text-muted\">{{ product.category }}</small>
                                         </div>
                                        <td>{{ product.current_stock }} {{ product.unit }}</div>
                                        <td class=\"text-end fw-semibold\">{{ product.total_value|number_format(0, ',', ' ') }} {{ currency }}</div>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-boxes fa-2x mb-2 d-block\"></i>
                                            Aucun produit en stock
                                         </div>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Derniers mouvements de stock - PLEINE LARGEUR (car souvent très long) -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card full-width-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-history\"></i>
                        Derniers mouvements de stock
                        <span class=\"badge bg-info\">{{ recent_movements|length }}</span>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Produit</th>
                                    <th>Type</th>
                                    <th>Quantité</th>
                                    <th>Utilisateur</th>
                                </tr>
                            </thead>
                            <tbody id=\"recentMovementsList\">
                                {% for movement in recent_movements %}
                                    <tr>
                                        <td><small>{{ movement.created_at|date('d/m/y H:i') }}</small></div>
                                        <td>
                                            <strong>{{ movement.product_name }}</strong>
                                         </div>
                                        <td>
                                            <span class=\"movement-badge {{ movement.movement_type }}\">
                                                <i class=\"fas 
                                                    {% if movement.movement_type == 'purchase_in' %}fa-arrow-down
                                                    {% elseif movement.movement_type == 'sale_out' %}fa-arrow-up
                                                    {% elseif movement.movement_type == 'adjustment_in' %}fa-plus
                                                    {% elseif movement.movement_type == 'adjustment_out' %}fa-minus
                                                    {% else %}fa-exchange-alt{% endif %}\">
                                                </i>
                                                {{ movement.movement_label }}
                                            </span>
                                         </div>
                                        <td class=\"{% if movement.movement_type == 'purchase_in' %}text-success{% elseif movement.movement_type == 'sale_out' %}text-danger{% endif %} fw-bold\">
                                            {% if movement.movement_type == 'purchase_in' %}+{% elseif movement.movement_type == 'sale_out' %}-{% endif %}{{ movement.quantity }}
                                         </div>
                                        <td>
                                            <div class=\"user-info\">
                                                {% if movement.user_photo %}
                                                    <img src=\"{{ asset('uploads/users/' ~ movement.user_photo) }}\" 
                                                         class=\"user-avatar-sm\" 
                                                         alt=\"{{ movement.user_name }}\"
                                                         onerror=\"this.onerror=null; this.src='https://placehold.co/32x32/f1f5f9/64748b?text={{ movement.user_name|first|upper }}'\">
                                                {% else %}
                                                    <div class=\"user-avatar-sm d-flex align-items-center justify-content-center\" 
                                                         style=\"background: #e2e8f0; color: #64748b;\">
                                                        {{ movement.user_name|first|upper }}
                                                    </div>
                                                {% endif %}
                                                <div class=\"user-details\">
                                                    <span class=\"user-name\">{{ movement.user_name }}</span>
                                                    <span class=\"user-email\">{{ movement.user_email }}</span>
                                                </div>
                                            </div>
                                         </div>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-history fa-2x mb-2 d-block\"></i>
                                            Aucun mouvement récent
                                         </div>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section ingrédients (pour restaurants) - PLEINE LARGEUR -->
        {% if is_restaurant and top_ingredients|default([])|length > 0 %}
        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card full-width-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-utensils\"></i>
                        Top ingrédients les plus utilisés
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ingrédient</th>
                                    <th>Quantité utilisée</th>
                                    <th>Unité</th>
                                    <th>Recettes concernées</th>
                                </tr>
                            </thead>
                            <tbody id=\"topIngredientsList\">
                                {% for ingredient in top_ingredients %}
                                    <tr>
                                        <td>{{ loop.index }}</div>
                                        <td><strong>{{ ingredient.name }}</strong></div>
                                        <td>{{ ingredient.total_quantity_used|number_format(0, ',', ' ') }}</div>
                                        <td>{{ ingredient.unit }}</div>
                                        <td>{{ ingredient.recipe_count }} recette(s)</div>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {% endif %}

    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
<script>
// Variables globales
let stockTimelineChart = null;
let categoryChart = null;
let currentTimelineType = 'movements';
let isLoading = false;

// Données initiales
let stockTimelineData = {{ stock_timeline|default([])|json_encode|raw }};
let categoryData = {{ stock_value_by_category|default([])|json_encode|raw }};

document.addEventListener('DOMContentLoaded', function() {
    initCharts();
    updateActiveFilters();
});

function initCharts() {
    initStockTimelineChart();
    initCategoryChart();
}

function initStockTimelineChart() {
    const ctx = document.getElementById('stockTimelineChart').getContext('2d');
    
    let datasets = [];
    
    if (currentTimelineType === 'movements') {
        datasets = [
            {
                label: 'Achats',
                data: stockTimelineData.map(d => d.purchases || 0),
                borderColor: '#10b981',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            },
            {
                label: 'Ventes',
                data: stockTimelineData.map(d => d.sales || 0),
                borderColor: '#ef4444',
                backgroundColor: 'rgba(239, 68, 68, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }
        ];
    } else {
        datasets = [
            {
                label: 'Variation nette du stock',
                data: stockTimelineData.map(d => d.net_change || 0),
                borderColor: '#0463f1',
                backgroundColor: 'rgba(4, 99, 241, 0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.4
            }
        ];
    }
    
    if (stockTimelineChart) {
        stockTimelineChart.destroy();
    }
    
    stockTimelineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: stockTimelineData.map(d => d.month || ''),
            datasets: datasets
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let value = context.raw;
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(value);
                        }
                    }
                },
                legend: { position: 'top' }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'Quantité' },
                    ticks: {
                        callback: function(value) {
                            return new Intl.NumberFormat('fr-FR').format(value);
                        }
                    }
                },
                x: { title: { display: true, text: 'Mois' } }
            }
        }
    });
}

function initCategoryChart() {
    const ctx = document.getElementById('categoryChart').getContext('2d');
    
    const labels = categoryData.map(c => c.category || '');
    const data = categoryData.map(c => c.total_value || 0);
    
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
                    legend: { position: 'right' },
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
    } else {
        ctx.fillStyle = '#e5e7eb';
        ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);
        ctx.fillStyle = '#64748b';
        ctx.font = '14px Arial';
        ctx.textAlign = 'center';
        ctx.fillText('Aucune donnée disponible', ctx.canvas.width / 2, ctx.canvas.height / 2);
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
    const category = document.getElementById('categoryFilter')?.value;
    
    if (datePreset) params.append('date_preset', datePreset);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    if (category) params.append('category', category);
    
    try {
        const response = await fetch(`/reports/stock/data?\${params.toString()}`);
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
    // Mettre à jour les KPI
    if (data.kpis) {
        const kpiTotalValue = document.getElementById('kpiTotalValue');
        if (kpiTotalValue) kpiTotalValue.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.total_value || 0);
        
        const kpiTotalQuantity = document.getElementById('kpiTotalQuantity');
        if (kpiTotalQuantity) kpiTotalQuantity.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.total_quantity || 0);
        
        const kpiLowStock = document.getElementById('kpiLowStock');
        if (kpiLowStock) kpiLowStock.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.low_stock_count || 0);
        
        const kpiOutOfStock = document.getElementById('kpiOutOfStock');
        if (kpiOutOfStock) kpiOutOfStock.textContent = new Intl.NumberFormat('fr-FR').format(data.kpis.out_of_stock_count || 0);
    }
    
    // Mettre à jour les graphiques
    if (data.stock_timeline && data.stock_timeline.length > 0) {
        stockTimelineData = data.stock_timeline;
        initStockTimelineChart();
    }
    
    if (data.stock_value_by_category) {
        categoryData = data.stock_value_by_category;
        initCategoryChart();
    }
    
    // Mettre à jour les tableaux
    if (data.low_stock_products) {
        updateLowStockList(data.low_stock_products);
    }
    
    if (data.top_products_by_value) {
        updateTopProductsList(data.top_products_by_value);
    }
    
    if (data.recent_movements) {
        updateRecentMovements(data.recent_movements);
    }
    
    if (data.expiry_alerts) {
        updateExpiryAlerts(data.expiry_alerts);
    }
    
    if (data.top_ingredients) {
        updateTopIngredients(data.top_ingredients);
    }
}

function updateLowStockList(products) {
    const container = document.getElementById('lowStockList');
    const countBadge = document.getElementById('lowStockCount');
    if (!container) return;
    
    if (countBadge) countBadge.textContent = products.length;
    
    if (!products || products.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"6\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-check-circle fa-2x mb-2 d-block text-success\"></i>
                    Aucun produit en stock faible ou en rupture
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = products.map(product => `
        <tr>
            <td>
                <strong>\${escapeHtml(product.name)}</strong>
                <br><small class=\"text-muted\">\${escapeHtml(product.category)}</small>
             </div>
            <td class=\"text-danger fw-bold\">\${product.current_stock}</div>
            <td>\${product.min_stock}</div>
            <td>\${escapeHtml(product.unit)}</div>
            <td class=\"text-end\">\${new Intl.NumberFormat('fr-FR').format(product.value)} {{ currency }}</div>
            <td>
                <span class=\"status-badge \${product.status_class}\">
                    <i class=\"fas \${product.status_icon}\"></i>
                    \${product.status === 'rupture' ? 'Rupture' : 'Stock faible'}
                </span>
             </div>
         </>
    `).join('');
}

function updateTopProductsList(products) {
    const container = document.getElementById('topProductsList');
    if (!container) return;
    
    if (!products || products.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-boxes fa-2x mb-2 d-block\"></i>
                    Aucun produit en stock
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = products.map((product, index) => `
        <tr>
            <td>\${index + 1}</div>
            <td>
                <strong>\${escapeHtml(product.name)}</strong>
                <br><small class=\"text-muted\">\${escapeHtml(product.category)}</small>
             </div>
            <td>\${product.current_stock} \${escapeHtml(product.unit)}</div>
            <td class=\"text-end fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(product.total_value)} {{ currency }}</div>
         </>
    `).join('');
}

function updateRecentMovements(movements) {
    const container = document.getElementById('recentMovementsList');
    if (!container) return;
    
    if (!movements || movements.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-history fa-2x mb-2 d-block\"></i>
                    Aucun mouvement récent
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = movements.map(movement => {
        const date = new Date(movement.created_at);
        const sign = movement.movement_type === 'purchase_in' ? '+' : (movement.movement_type === 'sale_out' ? '-' : '');
        const signClass = movement.movement_type === 'purchase_in' ? 'text-success' : (movement.movement_type === 'sale_out' ? 'text-danger' : '');
        
        return `
            <tr>
                <td><small>\${date.toLocaleDateString('fr-FR')} \${date.toLocaleTimeString('fr-FR', {hour:'2-digit', minute:'2-digit'})}</small></div>
                <td>
                    <strong>\${escapeHtml(movement.product_name)}</strong>
                 </div>
                <td>
                    <span class=\"movement-badge \${movement.movement_type}\">
                        <i class=\"fas \${movement.movement_type === 'purchase_in' ? 'fa-arrow-down' : (movement.movement_type === 'sale_out' ? 'fa-arrow-up' : (movement.movement_type === 'adjustment_in' ? 'fa-plus' : 'fa-minus'))}\"></i>
                        \${movement.movement_label}
                    </span>
                 </div>
                <td class=\"\${signClass} fw-bold\">\${sign}\${movement.quantity}</div>
                <td>
                    <div class=\"user-info\">
                        \${movement.user_photo ? 
                            `<img src=\"/uploads/users/\${escapeHtml(movement.user_photo)}\" 
                                 class=\"user-avatar-sm\" 
                                 alt=\"\${escapeHtml(movement.user_name)}\"
                                 onerror=\"this.onerror=null; this.src='https://placehold.co/32x32/f1f5f9/64748b?text=\${escapeHtml(movement.user_name).charAt(0)}'\">` :
                            `<div class=\"user-avatar-sm d-flex align-items-center justify-content-center\" 
                                 style=\"background: #e2e8f0; color: #64748b;\">
                                \${escapeHtml(movement.user_name).charAt(0)}
                            </div>`
                        }
                        <div class=\"user-details\">
                            <span class=\"user-name\">\${escapeHtml(movement.user_name)}</span>
                            <span class=\"user-email\">\${escapeHtml(movement.user_email || '')}</span>
                        </div>
                    </div>
                 </div>
             </>
        `;
    }).join('');
}

function updateExpiryAlerts(alerts) {
    const container = document.getElementById('expiryAlertsList');
    const countBadge = document.getElementById('expiryCount');
    if (!container) return;
    
    if (countBadge) countBadge.textContent = alerts.length;
    
    if (!alerts || alerts.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"7\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-check-circle fa-2x mb-2 d-block text-success\"></i>
                    Aucun produit proche de la date d'expiration
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = alerts.map(alert => {
        const expiryDate = new Date(alert.expiry_date);
        const daysClass = alert.days_until_expiry <= 30 ? 'text-danger fw-bold' : (alert.days_until_expiry <= 60 ? 'text-warning' : '');
        
        return `
            <tr>
                <td>
                    <strong>\${escapeHtml(alert.product_name)}</strong>
                    <br><small class=\"text-muted\">Lot: \${escapeHtml(alert.batch_number)}</small>
                 </div>
                <td>\${escapeHtml(alert.batch_number)}</div>
                <td>\${alert.quantity} \${escapeHtml(alert.unit)}</div>
                <td>\${expiryDate.toLocaleDateString('fr-FR')}</div>
                <td class=\"\${daysClass}\">\${alert.days_until_expiry} jours</div>
                <td class=\"text-end\">\${new Intl.NumberFormat('fr-FR').format(alert.total_value)} {{ currency }}</div>
                <td>
                    <span class=\"status-badge \${alert.status_class}\">
                        <i class=\"fas \${alert.status_icon}\"></i>
                        \${alert.status}
                    </span>
                 </div>
             </>
        `;
    }).join('');
}

function updateTopIngredients(ingredients) {
    const container = document.getElementById('topIngredientsList');
    if (!container) return;
    
    if (!ingredients || ingredients.length === 0) return;
    
    container.innerHTML = ingredients.map((ingredient, index) => `
        <tr>
            <td>\${index + 1}</div>
            <td><strong>\${escapeHtml(ingredient.name)}</strong></div>
            <td>\${new Intl.NumberFormat('fr-FR').format(ingredient.total_quantity_used)}</div>
            <td>\${escapeHtml(ingredient.unit)}</div>
            <td>\${ingredient.recipe_count} recette(s)</div>
         </>
    `).join('');
}

function updateActiveFilters() {
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const category = document.getElementById('categoryFilter')?.value;
    
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
    
    if (category) {
        const categorySelect = document.getElementById('categoryFilter');
        const selectedOption = categorySelect?.options[categorySelect.selectedIndex];
        const categoryLabel = selectedOption?.text || category;
        activeFilters.push({ key: 'category', label: `Catégorie: \${categoryLabel}` });
    }
    
    if (activeFilters.length === 0) {
        container.innerHTML = '';
        return;
    }
    
    container.innerHTML = activeFilters.map(filter => `
        <span class=\"badge bg-secondary d-inline-flex align-items-center gap-2 py-2 px-3\" style=\"cursor: pointer;\" onclick=\"removeFilter('\${filter.key}')\">
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
    } else if (key === 'category') {
        const categoryFilter = document.getElementById('categoryFilter');
        if (categoryFilter) categoryFilter.value = '';
    }
    applyFilters();
}

function changeTimelineType(type) {
    currentTimelineType = type;
    if (stockTimelineData.length > 0) {
        initStockTimelineChart();
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
    const category = document.getElementById('categoryFilter')?.value;
    
    if (datePreset) params.append('date_preset', datePreset);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    if (category) params.append('category', category);
    
    window.location.href = `/reports/stock/export?\${params.toString()}`;
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `position-fixed bottom-0 end-0 p-3 m-3 bg-\${type === 'error' ? 'danger' : 'success'} text-white rounded shadow`;
    notification.style.zIndex = '9999';
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
{% endblock %}", "reports/stock/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reports\\stock\\index.html.twig");
    }
}
