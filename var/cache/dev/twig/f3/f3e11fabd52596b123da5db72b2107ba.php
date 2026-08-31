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

/* super_admin/analysis_request/index.html.twig */
class __TwigTemplate_eb21e5bea9247eef95434b1590946c9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_request/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_request/index.html.twig"));

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

        yield "Toutes les demandes d'analyse - Super Admin";
        
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

    .request-dashboard {
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

    /* Table */
    .table-container {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    
    .table {
        margin-bottom: 0;
    }
    
    .table th {
        background: #f8fafc;
        font-weight: 600;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748b;
        border-bottom: 2px solid #e2e8f0;
        padding: 0.75rem 1rem;
        white-space: nowrap;
        position: sticky;
        top: 0;
        z-index: 10;
    }
    
    .table td {
        padding: 0.75rem 1rem;
        vertical-align: middle;
        border-bottom: 1px solid #f1f5f9;
    }
    
    .table tbody tr {
        transition: background 0.2s;
        cursor: pointer;
    }
    
    .table tbody tr:hover {
        background: #f8fafc;
    }
    
    .table .badge {
        font-size: 0.7rem;
        padding: 0.3rem 0.6rem;
        border-radius: 2rem;
        font-weight: 500;
    }

    /* Table container avec scroll */
    .table-scroll-container {
        max-height: 65vh;
        overflow-y: auto;
        border-radius: 1rem;
    }
    
    .table-scroll-container::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    .table-scroll-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .table-scroll-container::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }
    
    .table-scroll-container::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }

    /* Badges de statut */
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.25rem 0.6rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
        white-space: nowrap;
    }
    
    .status-pending { background: #fef3c7; color: #92400e; }
    .status-paid { background: #dbeafe; color: #1e40af; }
    .status-processing { background: #e0e7ff; color: #3730a3; }
    .status-completed { background: #d1fae5; color: #065f46; }
    .status-failed { background: #fee2e2; color: #991b1b; }
    .status-expired { background: #f1f5f9; color: #475569; }

    /* Pagination */
    .pagination-container {
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #e2e8f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
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

    /* Responsive */
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.5rem; }
        .kpi-card { padding: 1rem; }
        .action-buttons { margin-top: 1rem; justify-content: flex-start; }
        .table th, .table td { padding: 0.5rem; font-size: 0.75rem; }
        .filters-section { padding: 1rem; }
        .table-container { padding: 1rem; }
    }
    
    @media (max-width: 576px) {
        .filters-section { padding: 0.75rem; }
        .table-container { padding: 0.5rem; }
        .table th, .table td { padding: 0.3rem 0.4rem; font-size: 0.65rem; }
        .table th { font-size: 0.6rem; }
        .kpi-value { font-size: 1.2rem; }
        .kpi-card { padding: 0.75rem; }
        .kpi-label { font-size: 0.65rem; }
        .kpi-icon { width: 36px; height: 36px; font-size: 1rem; }
        .pagination-container { flex-direction: column; align-items: center; }
        .status-badge { font-size: 0.55rem; padding: 0.15rem 0.4rem; }
        .badge { font-size: 0.55rem !important; padding: 0.15rem 0.3rem !important; }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 294
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

        // line 295
        yield "<div class=\"request-dashboard py-4\">
    <div class=\"container-fluid px-4\">
        
        <!-- En-tête -->
        <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
            <div>
                <h1 class=\"h2 fw-bold mb-1\">
                    <i class=\"fas fa-microscope text-primary me-2\"></i>
                    Demandes d'analyse
                </h1>
                <p class=\"text-muted mb-0\">
                    <i class=\"fas fa-list me-1\"></i>
                    Gestion de toutes les demandes d'analyse des entreprises
                </p>
            </div>
            <div class=\"action-buttons\">
                <button class=\"btn btn-primary\" onclick=\"applyFilters()\" id=\"applyBtn\">
                    <i class=\"fas fa-search me-1\"></i> Appliquer
                </button>
                <button class=\"btn btn-outline-secondary\" onclick=\"refreshData()\" title=\"Actualiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </button>
                <button class=\"btn btn-outline-success\" onclick=\"exportData()\" title=\"Exporter CSV\">
                    <i class=\"fas fa-download\"></i>
                </button>
            </div>
        </div>

        <!-- Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-3\">
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-search\"></i> Recherche
                        </label>
                        <input type=\"text\" id=\"searchInput\" class=\"form-control\" 
                               placeholder=\"N° demande, entreprise...\" value=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 332, $this->source); })()), "search", [], "any", false, false, false, 332), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-tag\"></i> Type
                        </label>
                        <select id=\"typeFilter\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["analysisTypes"]) || array_key_exists("analysisTypes", $context) ? $context["analysisTypes"] : (function () { throw new RuntimeError('Variable "analysisTypes" does not exist.', 342, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 343
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 343, $this->source); })()), "type", [], "any", false, false, false, 343) == $context["type"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["type"]), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 347
        yield "                        </select>
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-circle\"></i> Statut
                        </label>
                        <select id=\"statusFilter\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 357, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 358
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 358, $this->source); })()), "status", [], "any", false, false, false, 358) == $context["key"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        yield "                        </select>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar\"></i> Période
                        </label>
                        <div class=\"d-flex gap-2\">
                            <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 371, $this->source); })()), "date_from", [], "any", false, false, false, 371), "html", null, true);
        yield "\">
                            <span class=\"align-self-center\">→</span>
                            <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 373, $this->source); })()), "date_to", [], "any", false, false, false, 373), "html", null, true);
        yield "\">
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 d-flex align-items-end\">
                    <button class=\"btn btn-outline-secondary w-100\" onclick=\"resetFilters()\">
                        <i class=\"fas fa-undo-alt me-1\"></i> Réinitialiser
                    </button>
                </div>
            </div>
            
            <!-- Filtres actifs -->
            <div id=\"activeFilters\" class=\"d-flex gap-2 flex-wrap mt-3 pt-2 border-top\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-4 mb-4\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Total demandes</div>
                            <div class=\"kpi-value\" id=\"statTotal\">";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 395)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 395, $this->source); })()), "total", [], "any", false, false, false, 395), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-list\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">En attente</div>
                            <div class=\"kpi-value\" id=\"statPending\">";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending", [], "any", true, true, false, 408)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 408, $this->source); })()), "pending", [], "any", false, false, false, 408), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-clock\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"kpi-card info\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">En traitement</div>
                            <div class=\"kpi-value\" id=\"statProcessing\">";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "processing", [], "any", true, true, false, 421)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 421, $this->source); })()), "processing", [], "any", false, false, false, 421), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon info\">
                            <i class=\"fas fa-spinner\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"kpi-card success\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Terminées</div>
                            <div class=\"kpi-value\" id=\"statCompleted\">";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 434)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 434, $this->source); })()), "completed", [], "any", false, false, false, 434), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-check-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des demandes -->
        <div class=\"table-container\">
            <div class=\"d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-list me-2 text-primary\"></i>
                    Liste des demandes
                    <span class=\"badge bg-secondary ms-2\">";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("total", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 450, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</span>
                </h5>
                <small class=\"text-muted\">
                    ";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 453, $this->source); })())), "html", null, true);
        yield " demandes affichées
                </small>
            </div>
            
            <div class=\"table-scroll-container\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th style=\"min-width: 100px;\">N° Demande</th>
                                <th style=\"min-width: 120px;\">Entreprise</th>
                                <th style=\"min-width: 100px;\">Type</th>
                                <th style=\"min-width: 80px;\">Montant</th>
                                <th style=\"min-width: 120px;\">Période</th>
                                <th style=\"min-width: 100px;\">Statut</th>
                                <th style=\"min-width: 100px;\">Créée le</th>
                                <th style=\"min-width: 80px;\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 473
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 473, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 474
            yield "                                <tr onclick=\"viewRequest('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 474), "html", null, true);
            yield "')\">
                                    <td>
                                        <code class=\"fw-semibold\">";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requestNumber", [], "any", false, false, false, 476), "html", null, true);
            yield "</code>
                                    </td>
                                    <td>
                                        <div class=\"fw-semibold\">";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "company", [], "any", false, true, false, 479), "companyName", [], "any", true, true, false, 479)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "company", [], "any", false, false, false, 479), "companyName", [], "any", false, false, false, 479), "N/A")) : ("N/A")), "html", null, true);
            yield "</div>
                                        <small class=\"text-muted\">";
            // line 480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "company", [], "any", false, true, false, 480), "type", [], "any", true, true, false, 480)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "company", [], "any", false, false, false, 480), "type", [], "any", false, false, false, 480), "")) : ("")), "html", null, true);
            yield "</small>
                                    </td>
                                    <td>
                                        <span class=\"badge bg-light text-dark\">";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "typeLabel", [], "any", false, false, false, 483), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>
                                        <span class=\"fw-bold text-primary\">";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "amountFormatted", [], "any", false, false, false, 486), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>
                                        <small>";
            // line 489
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "periodFormatted", [], "any", false, false, false, 489), "html", null, true);
            yield "</small>
                                    </td>
                                    <td>
                                        <span class=\"status-badge status-";
            // line 492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 492), "html", null, true);
            yield "\">
                                            <i class=\"fas 
                                                ";
            // line 494
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 494) == "pending")) {
                yield "fa-clock
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 495
$context["request"], "status", [], "any", false, false, false, 495) == "paid")) {
                yield "fa-money-bill-wave
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 496
$context["request"], "status", [], "any", false, false, false, 496) == "processing")) {
                yield "fa-spinner fa-spin
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 497
$context["request"], "status", [], "any", false, false, false, 497) == "completed")) {
                yield "fa-check-circle
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 498
$context["request"], "status", [], "any", false, false, false, 498) == "failed")) {
                yield "fa-times-circle
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 499
$context["request"], "status", [], "any", false, false, false, 499) == "expired")) {
                yield "fa-hourglass-end
                                                ";
            }
            // line 500
            yield "\">
                                            </i>
                                            ";
            // line 502
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "statusLabel", [], "any", false, false, false, 502), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td>
                                        <small>";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "createdAt", [], "any", false, false, false, 506), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                                    </td>
                                    <td onclick=\"event.stopPropagation()\">
                                        <div class=\"d-flex gap-1\">
                                            <a href=\"";
            // line 510
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_analysis_request_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 510)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 517
        if (!$context['_iterated']) {
            // line 518
            yield "                                <tr>
                                    <td colspan=\"8\" class=\"text-center py-5 text-muted\">
                                        <i class=\"fas fa-microscope fa-3x mb-3 opacity-25\"></i>
                                        <p>Aucune demande d'analyse trouvée</p>
                                        <p class=\"small\">Modifiez vos filtres pour afficher plus de résultats</p>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['request'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 526
        yield "                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Pagination -->
            ";
        // line 532
        if (((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 532, $this->source); })()) > 1)) {
            // line 533
            yield "            <div class=\"pagination-container\">
                <small class=\"text-muted\">
                    ";
            // line 535
            $context["start"] = ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 535, $this->source); })()) - 1) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 535, $this->source); })())) + 1);
            // line 536
            yield "                    ";
            $context["end"] = ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 536, $this->source); })()) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 536, $this->source); })()));
            // line 537
            yield "                    ";
            if (((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 537, $this->source); })()) > (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 537, $this->source); })()))) {
                // line 538
                yield "                        ";
                $context["end"] = (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 538, $this->source); })());
                // line 539
                yield "                    ";
            }
            // line 540
            yield "                    Affichage de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 540, $this->source); })()), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 540, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 540, $this->source); })()), "html", null, true);
            yield " demandes
                </small>
                <nav>
                    <ul class=\"pagination\">
                        ";
            // line 544
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 544, $this->source); })()) > 1)) {
                // line 545
                yield "                            <li class=\"page-item\">
                                <button class=\"page-link\" onclick=\"changePage(";
                // line 546
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 546, $this->source); })()) - 1), "html", null, true);
                yield ")\">
                                    <i class=\"fas fa-chevron-left\"></i>
                                </button>
                            </li>
                        ";
            }
            // line 551
            yield "                        
                        ";
            // line 552
            $context["startPage"] = ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 552, $this->source); })()) - 2);
            // line 553
            yield "                        ";
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 553, $this->source); })()) < 1)) {
                // line 554
                yield "                            ";
                $context["startPage"] = 1;
                // line 555
                yield "                        ";
            }
            // line 556
            yield "                        ";
            $context["endPage"] = ((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 556, $this->source); })()) + 4);
            // line 557
            yield "                        ";
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 557, $this->source); })()) > (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 557, $this->source); })()))) {
                // line 558
                yield "                            ";
                $context["endPage"] = (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 558, $this->source); })());
                // line 559
                yield "                            ";
                $context["startPage"] = ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 559, $this->source); })()) - 4);
                // line 560
                yield "                            ";
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 560, $this->source); })()) < 1)) {
                    // line 561
                    yield "                                ";
                    $context["startPage"] = 1;
                    // line 562
                    yield "                            ";
                }
                // line 563
                yield "                        ";
            }
            // line 564
            yield "                        
                        ";
            // line 565
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 565, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 565, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 566
                yield "                            <li class=\"page-item ";
                if (($context["p"] == (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 566, $this->source); })()))) {
                    yield "active";
                }
                yield "\">
                                <button class=\"page-link\" onclick=\"changePage(";
                // line 567
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
            // line 570
            yield "                        
                        ";
            // line 571
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 571, $this->source); })()) < (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 571, $this->source); })()))) {
                // line 572
                yield "                            <li class=\"page-item\">
                                <button class=\"page-link\" onclick=\"changePage(";
                // line 573
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 573, $this->source); })()) + 1), "html", null, true);
                yield ")\">
                                    <i class=\"fas fa-chevron-right\"></i>
                                </button>
                            </li>
                        ";
            }
            // line 578
            yield "                    </ul>
                </nav>
            </div>
            ";
        }
        // line 582
        yield "        </div>

    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 588
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

        // line 589
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Variables globales
let currentPage = ";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("current_page", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 592, $this->source); })()), 1)) : (1)), "html", null, true);
        yield ";
let isLoading = false;

document.addEventListener('DOMContentLoaded', function() {
    updateActiveFilters();
});

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
    params.append('page', currentPage);
    
    try {
        const response = await fetch(`/super-admin/analysis-requests/data?\${params.toString()}`);
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
    // Mettre à jour les KPI
    if (data.stats) {
        document.getElementById('statTotal').textContent = data.stats.total || 0;
        document.getElementById('statPending').textContent = data.stats.pending || 0;
        document.getElementById('statProcessing').textContent = data.stats.processing || 0;
        document.getElementById('statCompleted').textContent = data.stats.completed || 0;
    }
    
    // Mettre à jour le tableau (recharger la page pour simplifier)
    if (data.requests) {
        window.location.reload();
    }
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
        <span class=\"filter-badge-active\" onclick=\"removeFilter('\${filter.key}')\">
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
    currentPage = 1;
    applyFilters();
}

function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('typeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('dateFrom').value = '';
    document.getElementById('dateTo').value = '';
    currentPage = 1;
    applyFilters();
}

function changePage(page) {
    currentPage = page;
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
    
    window.location.href = `/super-admin/analysis-requests/export?\${params.toString()}`;
}

function viewRequest(requestId) {
    window.location.href = `/super-admin/analysis-requests/\${requestId}/show`;
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = 'notification-toast';
    const icon = type === 'success' ? 'check-circle' : 'exclamation-circle';
    notification.innerHTML = `<i class=\"fas fa-\${icon} me-2\"></i>\${message}`;
    notification.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 10000;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background: \${type === 'success' ? '#10b981' : '#ef4444'};
        color: white;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
        animation: slideIn 0.3s ease;
    `;
    document.body.appendChild(notification);
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transition = 'opacity 0.3s';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}
</script>
<style>
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
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
</style>
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
        return "super_admin/analysis_request/index.html.twig";
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
        return array (  945 => 592,  939 => 589,  926 => 588,  911 => 582,  905 => 578,  897 => 573,  894 => 572,  892 => 571,  889 => 570,  878 => 567,  871 => 566,  867 => 565,  864 => 564,  861 => 563,  858 => 562,  855 => 561,  852 => 560,  849 => 559,  846 => 558,  843 => 557,  840 => 556,  837 => 555,  834 => 554,  831 => 553,  829 => 552,  826 => 551,  818 => 546,  815 => 545,  813 => 544,  801 => 540,  798 => 539,  795 => 538,  792 => 537,  789 => 536,  787 => 535,  783 => 533,  781 => 532,  773 => 526,  760 => 518,  758 => 517,  746 => 510,  739 => 506,  732 => 502,  728 => 500,  723 => 499,  719 => 498,  715 => 497,  711 => 496,  707 => 495,  703 => 494,  698 => 492,  692 => 489,  686 => 486,  680 => 483,  674 => 480,  670 => 479,  664 => 476,  658 => 474,  653 => 473,  630 => 453,  624 => 450,  605 => 434,  589 => 421,  573 => 408,  557 => 395,  532 => 373,  527 => 371,  516 => 362,  507 => 359,  500 => 358,  496 => 357,  484 => 347,  475 => 344,  468 => 343,  464 => 342,  451 => 332,  412 => 295,  399 => 294,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis_request/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Toutes les demandes d'analyse - Super Admin{% endblock %}

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

    .request-dashboard {
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

    /* Table */
    .table-container {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    
    .table {
        margin-bottom: 0;
    }
    
    .table th {
        background: #f8fafc;
        font-weight: 600;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748b;
        border-bottom: 2px solid #e2e8f0;
        padding: 0.75rem 1rem;
        white-space: nowrap;
        position: sticky;
        top: 0;
        z-index: 10;
    }
    
    .table td {
        padding: 0.75rem 1rem;
        vertical-align: middle;
        border-bottom: 1px solid #f1f5f9;
    }
    
    .table tbody tr {
        transition: background 0.2s;
        cursor: pointer;
    }
    
    .table tbody tr:hover {
        background: #f8fafc;
    }
    
    .table .badge {
        font-size: 0.7rem;
        padding: 0.3rem 0.6rem;
        border-radius: 2rem;
        font-weight: 500;
    }

    /* Table container avec scroll */
    .table-scroll-container {
        max-height: 65vh;
        overflow-y: auto;
        border-radius: 1rem;
    }
    
    .table-scroll-container::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    .table-scroll-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .table-scroll-container::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }
    
    .table-scroll-container::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }

    /* Badges de statut */
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.25rem 0.6rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
        white-space: nowrap;
    }
    
    .status-pending { background: #fef3c7; color: #92400e; }
    .status-paid { background: #dbeafe; color: #1e40af; }
    .status-processing { background: #e0e7ff; color: #3730a3; }
    .status-completed { background: #d1fae5; color: #065f46; }
    .status-failed { background: #fee2e2; color: #991b1b; }
    .status-expired { background: #f1f5f9; color: #475569; }

    /* Pagination */
    .pagination-container {
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #e2e8f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
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

    /* Responsive */
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.5rem; }
        .kpi-card { padding: 1rem; }
        .action-buttons { margin-top: 1rem; justify-content: flex-start; }
        .table th, .table td { padding: 0.5rem; font-size: 0.75rem; }
        .filters-section { padding: 1rem; }
        .table-container { padding: 1rem; }
    }
    
    @media (max-width: 576px) {
        .filters-section { padding: 0.75rem; }
        .table-container { padding: 0.5rem; }
        .table th, .table td { padding: 0.3rem 0.4rem; font-size: 0.65rem; }
        .table th { font-size: 0.6rem; }
        .kpi-value { font-size: 1.2rem; }
        .kpi-card { padding: 0.75rem; }
        .kpi-label { font-size: 0.65rem; }
        .kpi-icon { width: 36px; height: 36px; font-size: 1rem; }
        .pagination-container { flex-direction: column; align-items: center; }
        .status-badge { font-size: 0.55rem; padding: 0.15rem 0.4rem; }
        .badge { font-size: 0.55rem !important; padding: 0.15rem 0.3rem !important; }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"request-dashboard py-4\">
    <div class=\"container-fluid px-4\">
        
        <!-- En-tête -->
        <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
            <div>
                <h1 class=\"h2 fw-bold mb-1\">
                    <i class=\"fas fa-microscope text-primary me-2\"></i>
                    Demandes d'analyse
                </h1>
                <p class=\"text-muted mb-0\">
                    <i class=\"fas fa-list me-1\"></i>
                    Gestion de toutes les demandes d'analyse des entreprises
                </p>
            </div>
            <div class=\"action-buttons\">
                <button class=\"btn btn-primary\" onclick=\"applyFilters()\" id=\"applyBtn\">
                    <i class=\"fas fa-search me-1\"></i> Appliquer
                </button>
                <button class=\"btn btn-outline-secondary\" onclick=\"refreshData()\" title=\"Actualiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </button>
                <button class=\"btn btn-outline-success\" onclick=\"exportData()\" title=\"Exporter CSV\">
                    <i class=\"fas fa-download\"></i>
                </button>
            </div>
        </div>

        <!-- Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-3\">
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-search\"></i> Recherche
                        </label>
                        <input type=\"text\" id=\"searchInput\" class=\"form-control\" 
                               placeholder=\"N° demande, entreprise...\" value=\"{{ filters.search }}\">
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-tag\"></i> Type
                        </label>
                        <select id=\"typeFilter\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            {% for type in analysisTypes %}
                                <option value=\"{{ type }}\" {{ filters.type == type ? 'selected' : '' }}>
                                    {{ type|capitalize }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-circle\"></i> Statut
                        </label>
                        <select id=\"statusFilter\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            {% for key, label in statuses %}
                                <option value=\"{{ key }}\" {{ filters.status == key ? 'selected' : '' }}>
                                    {{ label }}
                                </option>
                            {% endfor %}
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
                <div class=\"col-md-2 d-flex align-items-end\">
                    <button class=\"btn btn-outline-secondary w-100\" onclick=\"resetFilters()\">
                        <i class=\"fas fa-undo-alt me-1\"></i> Réinitialiser
                    </button>
                </div>
            </div>
            
            <!-- Filtres actifs -->
            <div id=\"activeFilters\" class=\"d-flex gap-2 flex-wrap mt-3 pt-2 border-top\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-4 mb-4\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">Total demandes</div>
                            <div class=\"kpi-value\" id=\"statTotal\">{{ stats.total|default(0) }}</div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-list\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
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
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"kpi-card info\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">En traitement</div>
                            <div class=\"kpi-value\" id=\"statProcessing\">{{ stats.processing|default(0) }}</div>
                        </div>
                        <div class=\"kpi-icon info\">
                            <i class=\"fas fa-spinner\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
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
        </div>

        <!-- Tableau des demandes -->
        <div class=\"table-container\">
            <div class=\"d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-list me-2 text-primary\"></i>
                    Liste des demandes
                    <span class=\"badge bg-secondary ms-2\">{{ total|default(0) }}</span>
                </h5>
                <small class=\"text-muted\">
                    {{ requests|length }} demandes affichées
                </small>
            </div>
            
            <div class=\"table-scroll-container\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th style=\"min-width: 100px;\">N° Demande</th>
                                <th style=\"min-width: 120px;\">Entreprise</th>
                                <th style=\"min-width: 100px;\">Type</th>
                                <th style=\"min-width: 80px;\">Montant</th>
                                <th style=\"min-width: 120px;\">Période</th>
                                <th style=\"min-width: 100px;\">Statut</th>
                                <th style=\"min-width: 100px;\">Créée le</th>
                                <th style=\"min-width: 80px;\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for request in requests %}
                                <tr onclick=\"viewRequest('{{ request.id }}')\">
                                    <td>
                                        <code class=\"fw-semibold\">{{ request.requestNumber }}</code>
                                    </td>
                                    <td>
                                        <div class=\"fw-semibold\">{{ request.company.companyName|default('N/A') }}</div>
                                        <small class=\"text-muted\">{{ request.company.type|default('') }}</small>
                                    </td>
                                    <td>
                                        <span class=\"badge bg-light text-dark\">{{ request.typeLabel }}</span>
                                    </td>
                                    <td>
                                        <span class=\"fw-bold text-primary\">{{ request.amountFormatted }}</span>
                                    </td>
                                    <td>
                                        <small>{{ request.periodFormatted }}</small>
                                    </td>
                                    <td>
                                        <span class=\"status-badge status-{{ request.status }}\">
                                            <i class=\"fas 
                                                {% if request.status == 'pending' %}fa-clock
                                                {% elseif request.status == 'paid' %}fa-money-bill-wave
                                                {% elseif request.status == 'processing' %}fa-spinner fa-spin
                                                {% elseif request.status == 'completed' %}fa-check-circle
                                                {% elseif request.status == 'failed' %}fa-times-circle
                                                {% elseif request.status == 'expired' %}fa-hourglass-end
                                                {% endif %}\">
                                            </i>
                                            {{ request.statusLabel }}
                                        </span>
                                    </td>
                                    <td>
                                        <small>{{ request.createdAt|date('d/m/Y H:i') }}</small>
                                    </td>
                                    <td onclick=\"event.stopPropagation()\">
                                        <div class=\"d-flex gap-1\">
                                            <a href=\"{{ path('app_super_admin_analysis_request_show', {'id': request.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"8\" class=\"text-center py-5 text-muted\">
                                        <i class=\"fas fa-microscope fa-3x mb-3 opacity-25\"></i>
                                        <p>Aucune demande d'analyse trouvée</p>
                                        <p class=\"small\">Modifiez vos filtres pour afficher plus de résultats</p>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Pagination -->
            {% if total_pages > 1 %}
            <div class=\"pagination-container\">
                <small class=\"text-muted\">
                    {% set start = ((current_page - 1) * limit) + 1 %}
                    {% set end = current_page * limit %}
                    {% if end > total %}
                        {% set end = total %}
                    {% endif %}
                    Affichage de {{ start }} à {{ end }} sur {{ total }} demandes
                </small>
                <nav>
                    <ul class=\"pagination\">
                        {% if current_page > 1 %}
                            <li class=\"page-item\">
                                <button class=\"page-link\" onclick=\"changePage({{ current_page - 1 }})\">
                                    <i class=\"fas fa-chevron-left\"></i>
                                </button>
                            </li>
                        {% endif %}
                        
                        {% set startPage = current_page - 2 %}
                        {% if startPage < 1 %}
                            {% set startPage = 1 %}
                        {% endif %}
                        {% set endPage = startPage + 4 %}
                        {% if endPage > total_pages %}
                            {% set endPage = total_pages %}
                            {% set startPage = endPage - 4 %}
                            {% if startPage < 1 %}
                                {% set startPage = 1 %}
                            {% endif %}
                        {% endif %}
                        
                        {% for p in startPage..endPage %}
                            <li class=\"page-item {% if p == current_page %}active{% endif %}\">
                                <button class=\"page-link\" onclick=\"changePage({{ p }})\">{{ p }}</button>
                            </li>
                        {% endfor %}
                        
                        {% if current_page < total_pages %}
                            <li class=\"page-item\">
                                <button class=\"page-link\" onclick=\"changePage({{ current_page + 1 }})\">
                                    <i class=\"fas fa-chevron-right\"></i>
                                </button>
                            </li>
                        {% endif %}
                    </ul>
                </nav>
            </div>
            {% endif %}
        </div>

    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// Variables globales
let currentPage = {{ current_page|default(1) }};
let isLoading = false;

document.addEventListener('DOMContentLoaded', function() {
    updateActiveFilters();
});

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
    params.append('page', currentPage);
    
    try {
        const response = await fetch(`/super-admin/analysis-requests/data?\${params.toString()}`);
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
    // Mettre à jour les KPI
    if (data.stats) {
        document.getElementById('statTotal').textContent = data.stats.total || 0;
        document.getElementById('statPending').textContent = data.stats.pending || 0;
        document.getElementById('statProcessing').textContent = data.stats.processing || 0;
        document.getElementById('statCompleted').textContent = data.stats.completed || 0;
    }
    
    // Mettre à jour le tableau (recharger la page pour simplifier)
    if (data.requests) {
        window.location.reload();
    }
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
        <span class=\"filter-badge-active\" onclick=\"removeFilter('\${filter.key}')\">
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
    currentPage = 1;
    applyFilters();
}

function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('typeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('dateFrom').value = '';
    document.getElementById('dateTo').value = '';
    currentPage = 1;
    applyFilters();
}

function changePage(page) {
    currentPage = page;
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
    
    window.location.href = `/super-admin/analysis-requests/export?\${params.toString()}`;
}

function viewRequest(requestId) {
    window.location.href = `/super-admin/analysis-requests/\${requestId}/show`;
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = 'notification-toast';
    const icon = type === 'success' ? 'check-circle' : 'exclamation-circle';
    notification.innerHTML = `<i class=\"fas fa-\${icon} me-2\"></i>\${message}`;
    notification.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 10000;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background: \${type === 'success' ? '#10b981' : '#ef4444'};
        color: white;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
        animation: slideIn 0.3s ease;
    `;
    document.body.appendChild(notification);
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transition = 'opacity 0.3s';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}
</script>
<style>
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
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
</style>
{% endblock %}", "super_admin/analysis_request/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_request\\index.html.twig");
    }
}
