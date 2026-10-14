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
class __TwigTemplate_bb78162a088522e4e3da15265bb7aa67 extends Template
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

    /* ==================== ANIMATIONS ET NOTIFICATIONS ==================== */
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    
    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }
    
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    
    .notification-toast {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 10000;
        min-width: 320px;
        padding: 1rem 1.25rem;
        border-radius: 0.75rem;
        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.2);
        animation: slideIn 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .notification-toast.success { background: linear-gradient(135deg, #10b981, #059669); color: white; }
    .notification-toast.error { background: linear-gradient(135deg, #ef4444, #dc2626); color: white; }
    .notification-toast.warning { background: linear-gradient(135deg, #f59e0b, #d97706); color: white; }
    
    /* Loading overlay */
    .global-loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(3px);
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .global-loading-content {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem 2.5rem;
        text-align: center;
        box-shadow: 0 20px 35px rgba(0,0,0,0.3);
        animation: slideIn 0.3s ease;
    }
    
    .global-loading-spinner {
        width: 50px;
        height: 50px;
        border: 4px solid #e2e8f0;
        border-top-color: #0463f1;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
        margin: 0 auto 1rem;
    }
    
    .global-loading-text {
        font-size: 1rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }
    
    .global-loading-subtext {
        font-size: 0.8rem;
        color: #64748b;
    }
    
    /* Row loading animation */
    .row-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.6;
    }
    
    .row-loading::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
        animation: shimmer 1s infinite;
    }
    
    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
    
    /* Button loading state */
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
        width: 18px;
        height: 18px;
        margin: -9px 0 0 -9px;
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

    // line 332
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

        // line 333
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec boutons -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 340
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
        // line 359
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_export", ["format" => "excel"]);
        yield "\" class=\"btn btn-outline-success\">
                <i class=\"fas fa-file-excel me-1\"></i> Excel
            </a>
            <a href=\"";
        // line 362
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_export", ["format" => "csv"]);
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-file-csv me-1\"></i> CSV
            </a>
            <a href=\"";
        // line 365
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
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 378, $this->source); })()), "total", [], "any", false, false, false, 378), "html", null, true);
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
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 389, $this->source); })()), "active", [], "any", false, false, false, 389), "html", null, true);
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
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 400, $this->source); })()), "inactive", [], "any", false, false, false, 400), "html", null, true);
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
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 411, $this->source); })()), "trial", [], "any", false, false, false, 411), "html", null, true);
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
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 426, $this->source); })()), "search", [], "any", false, false, false, 426), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-chart-line me-1\"></i> Plan
                </label>
                <select id=\"planFilter\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"trial\" ";
        // line 434
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 434, $this->source); })()), "plan", [], "any", false, false, false, 434) == "trial")) ? ("selected") : (""));
        yield ">Essai gratuit</option>
                    <option value=\"freemium\" ";
        // line 435
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 435, $this->source); })()), "plan", [], "any", false, false, false, 435) == "freemium")) ? ("selected") : (""));
        yield ">Freemium</option>
                    <option value=\"basic\" ";
        // line 436
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 436, $this->source); })()), "plan", [], "any", false, false, false, 436) == "basic")) ? ("selected") : (""));
        yield ">Basic</option>
                    <option value=\"premium\" ";
        // line 437
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 437, $this->source); })()), "plan", [], "any", false, false, false, 437) == "premium")) ? ("selected") : (""));
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
        // line 446
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyTypes"]) || array_key_exists("companyTypes", $context) ? $context["companyTypes"] : (function () { throw new RuntimeError('Variable "companyTypes" does not exist.', 446, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 447
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 447, $this->source); })()), "company_type", [], "any", false, false, false, 447) == $context["type"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["type"], ["-" => " "])), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        yield "                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i> Date du
                </label>
                <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 455, $this->source); })()), "date_from", [], "any", false, false, false, 455), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i> Date au
                </label>
                <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 461, $this->source); })()), "date_to", [], "any", false, false, false, 461), "html", null, true);
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
        // line 472
        if ((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 472, $this->source); })()), "search", [], "any", false, false, false, 472) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 472, $this->source); })()), "company_type", [], "any", false, false, false, 472)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 472, $this->source); })()), "status", [], "any", false, false, false, 472)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 472, $this->source); })()), "plan", [], "any", false, false, false, 472)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 472, $this->source); })()), "date_from", [], "any", false, false, false, 472)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 472, $this->source); })()), "date_to", [], "any", false, false, false, 472))) {
            // line 473
            yield "    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        ";
            // line 474
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 474, $this->source); })()), "search", [], "any", false, false, false, 474)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 475
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('search')\">
                <i class=\"fas fa-search me-1\"></i> ";
                // line 476
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 476, $this->source); })()), "search", [], "any", false, false, false, 476), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 480
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 480, $this->source); })()), "company_type", [], "any", false, false, false, 480)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 481
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('company_type')\">
                <i class=\"fas fa-store me-1\"></i> ";
                // line 482
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 482, $this->source); })()), "company_type", [], "any", false, false, false, 482), ["-" => " "])), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 486
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 486, $this->source); })()), "status", [], "any", false, false, false, 486)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 487
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> ";
                // line 488
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 488, $this->source); })()), "status", [], "any", false, false, false, 488) == "active")) ? ("Actives") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 488, $this->source); })()), "status", [], "any", false, false, false, 488) == "inactive")) ? ("Inactives") : ("Essai"))));
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 492
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 492, $this->source); })()), "plan", [], "any", false, false, false, 492)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 493
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('plan')\">
                <i class=\"fas fa-chart-line me-1\"></i> ";
                // line 494
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 494, $this->source); })()), "plan", [], "any", false, false, false, 494)), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 498
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 498, $this->source); })()), "date_from", [], "any", false, false, false, 498) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 498, $this->source); })()), "date_to", [], "any", false, false, false, 498))) {
                // line 499
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_from'); removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> ";
                // line 500
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 500, $this->source); })()), "date_from", [], "any", false, false, false, 500)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 500, $this->source); })()), "date_from", [], "any", false, false, false, 500), "html", null, true)) : ("..."));
                yield " → ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 500, $this->source); })()), "date_to", [], "any", false, false, false, 500)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 500, $this->source); })()), "date_to", [], "any", false, false, false, 500), "html", null, true)) : ("..."));
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 504
            yield "        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    ";
        }
        // line 509
        yield "
    <!-- Tableau des entreprises -->
    <div class=\"card border-0 shadow-sm rounded-4\">
        <div class=\"card-header bg-white border-0 pt-4 pb-0 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des entreprises
                <span class=\"badge bg-secondary ms-2\" id=\"companiesCount\">";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 516, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 516), "html", null, true);
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
                <tbody id=\"companiesTableBody\">
                    ";
        // line 535
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 535, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 536
            yield "                        <tr id=\"company-row-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 536), "html", null, true);
            yield "\" data-company-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 536), "html", null, true);
            yield "\">
                            <td><input type=\"checkbox\" class=\"row-checkbox form-check-input\" value=\"";
            // line 537
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 537), "html", null, true);
            yield "\"></td>
                            <td>
                                <div class=\"d-flex align-items-center gap-2\">
                                    ";
            // line 540
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "logo", [], "any", false, false, false, 540)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 541
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, $context["company"], "logo", [], "any", false, false, false, 541))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 541), "html", null, true);
                yield "\" class=\"company-logo\">
                                    ";
            } else {
                // line 543
                yield "                                        <div class=\"company-initials\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 543))), "html", null, true);
                yield "</div>
                                    ";
            }
            // line 545
            yield "                                    <div>
                                        <div class=\"fw-semibold\">";
            // line 546
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 546), "html", null, true);
            yield "</div>
                                        <small class=\"text-muted\">#";
            // line 547
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "subscriptionNumber", [], "any", false, false, false, 547), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                             </div>
                            <td>
                                <div><i class=\"fas fa-envelope text-muted me-1 fa-xs\"></i> ";
            // line 552
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 552), "html", null, true);
            yield "</div>
                                <small><i class=\"fas fa-phone text-muted me-1 fa-xs\"></i> ";
            // line 553
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "phone", [], "any", true, true, false, 553)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "phone", [], "any", false, false, false, 553), "Non renseigné")) : ("Non renseigné")), "html", null, true);
            yield "</small>
                            </td>
                            <td>
                                ";
            // line 556
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlan", [], "any", false, false, false, 556) == "trial")) {
                // line 557
                yield "                                    <span class=\"plan-badge plan-trial\"><i class=\"fas fa-hourglass-half me-1\"></i> Essai</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 558
$context["company"], "currentPlan", [], "any", false, false, false, 558) == "freemium")) {
                // line 559
                yield "                                    <span class=\"plan-badge plan-freemium\"><i class=\"fas fa-gift me-1\"></i> Freemium</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 560
$context["company"], "currentPlan", [], "any", false, false, false, 560) == "basic")) {
                // line 561
                yield "                                    <span class=\"plan-badge plan-basic\"><i class=\"fas fa-rocket me-1\"></i> Basic</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 562
$context["company"], "currentPlan", [], "any", false, false, false, 562) == "premium")) {
                // line 563
                yield "                                    <span class=\"plan-badge plan-premium\"><i class=\"fas fa-crown me-1\"></i> Premium</span>
                                ";
            }
            // line 565
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "subscriptionEndsAt", [], "any", false, false, false, 565)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 566
                yield "                                    <br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "subscriptionEndsAt", [], "any", false, false, false, 566), "d/m/Y"), "html", null, true);
                yield "</small>
                                ";
            }
            // line 568
            yield "                            </td>
                            <td class=\"status-cell\">
                                ";
            // line 570
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 570)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 571
                yield "                                    <span class=\"status-badge status-active\"><i class=\"fas fa-check-circle me-1\"></i> Active</span>
                                ";
            } else {
                // line 573
                yield "                                    <span class=\"status-badge status-inactive\"><i class=\"fas fa-ban me-1\"></i> Désactivée</span>
                                ";
            }
            // line 575
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "isInTrialPeriod", [], "any", false, false, false, 575) && CoreExtension::getAttribute($this->env, $this->source, $context["company"], "trialEndsAt", [], "any", false, false, false, 575))) {
                // line 576
                yield "                                    <br><span class=\"status-badge status-trial mt-1\"><i class=\"fas fa-hourglass-half me-1\"></i> ";
                yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "trialEndsAt", [], "any", false, false, false, 576));
                yield "</span>
                                ";
            }
            // line 578
            yield "                            </td>
                            <td>
                                ";
            // line 580
            $context["roles"] = [];
            // line 581
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "users", [], "any", false, false, false, 581));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 582
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 582));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 583
                    yield "                                        ";
                    if ((($context["role"] != "ROLE_USER") && !CoreExtension::inFilter($context["role"], (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 583, $this->source); })())))) {
                        // line 584
                        yield "                                            ";
                        $context["roles"] = Twig\Extension\CoreExtension::merge((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 584, $this->source); })()), [$context["role"]]);
                        // line 585
                        yield "                                            ";
                        if (($context["role"] == "ROLE_ADMIN")) {
                            // line 586
                            yield "                                                <span class=\"role-badge role-admin\"><i class=\"fas fa-shield-alt me-1\"></i>Admin</span>
                                            ";
                        } elseif ((                        // line 587
$context["role"] == "ROLE_MANAGER")) {
                            // line 588
                            yield "                                                <span class=\"role-badge role-manager\"><i class=\"fas fa-chart-line me-1\"></i>Manager</span>
                                            ";
                        } elseif ((                        // line 589
$context["role"] == "ROLE_STOCK_MANAGER")) {
                            // line 590
                            yield "                                                <span class=\"role-badge role-stock\"><i class=\"fas fa-boxes me-1\"></i>Stock</span>
                                            ";
                        } elseif ((                        // line 591
$context["role"] == "ROLE_CASHIER")) {
                            // line 592
                            yield "                                                <span class=\"role-badge role-cashier\"><i class=\"fas fa-cash-register me-1\"></i>Caissier</span>
                                            ";
                        }
                        // line 594
                        yield "                                        ";
                    }
                    // line 595
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 596
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 597
            yield "                                <div class=\"mt-1\">
                                    <small><i class=\"fas fa-users text-muted me-1\"></i> ";
            // line 598
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "users", [], "any", false, false, false, 598)), "html", null, true);
            yield " utilisateurs</small>
                                </div>
                            </td>
                            <td style=\"min-width: 120px;\">
                                <div class=\"custom-progress mb-1\">
                                    <div class=\"custom-progress-bar\" style=\"width: ";
            // line 603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "products", [], "any", false, false, false, 603)) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentLimits", [], "any", false, false, false, 603), "max_products", [], "any", false, false, false, 603)) * 100)), "html", null, true);
            yield "%\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between small\">
                                    <span class=\"custom-tooltip\" data-tooltip=\"Produits\"><i class=\"fas fa-box text-muted me-1\"></i> ";
            // line 606
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "products", [], "any", false, false, false, 606)), "html", null, true);
            yield "</span>
                                    <span class=\"custom-tooltip\" data-tooltip=\"Commandes\"><i class=\"fas fa-shopping-cart text-muted me-1\"></i> ";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "orders", [], "any", false, false, false, 607)), "html", null, true);
            yield "</span>
                                    <span class=\"custom-tooltip\" data-tooltip=\"Catégories\"><i class=\"fas fa-tags text-muted me-1\"></i> ";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "categories", [], "any", false, false, false, 608)), "html", null, true);
            yield "</span>
                                </div>
                            </td>
                            <td>
                                <span class=\"custom-tooltip\" data-tooltip=\"Créé le ";
            // line 612
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "createdAt", [], "any", false, false, false, 612), "d/m/Y à H:i"), "html", null, true);
            yield "\">
                                    <i class=\"fas fa-calendar text-muted me-1\"></i> ";
            // line 613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "createdAt", [], "any", false, false, false, 613), "d/m/Y"), "html", null, true);
            yield "
                                </span>
                                <br><small class=\"text-muted\">";
            // line 615
            yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "createdAt", [], "any", false, false, false, 615));
            yield "</small>
                            </td>
                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 619)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 622
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 622)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <input type=\"hidden\" id=\"toggle_token_";
            // line 625
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 625), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle"), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" id=\"delete_token_";
            // line 626
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 626), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
            yield "\">
                                    <button type=\"button\" class=\"btn btn-sm btn-outline-";
            // line 627
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 627)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
            yield " toggle-status-btn\"
                                            data-id=\"";
            // line 628
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 628), "html", null, true);
            yield "\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 628), "html", null, true);
            yield "\" data-active=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 628)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\"
                                            data-bs-toggle=\"modal\" data-bs-target=\"#toggleStatusModal\" title=\"";
            // line 629
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 629)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                        <i class=\"fas fa-";
            // line 630
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 630)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggle-off") : ("toggle-on"));
            yield "\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-company-btn\"
                                            data-id=\"";
            // line 633
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 633), "html", null, true);
            yield "\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 633), "html", null, true);
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
        // line 640
        if (!$context['_iterated']) {
            // line 641
            yield "                        <tr>
                            <td colspan=\"9\" class=\"text-center py-5\">
                                <i class=\"fas fa-building fa-3x text-muted mb-3 opacity-50\"></i>
                                <h5 class=\"text-muted\">Aucune entreprise trouvée</h5>
                                <p class=\"text-muted small\">Modifiez vos filtres ou créez une nouvelle entreprise</p>
                                <a href=\"";
            // line 646
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
        // line 652
        yield "                </tbody>
            </table>
        </div>
        ";
        // line 655
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 655, $this->source); })())) > 0)) {
            // line 656
            yield "        <div class=\"card-footer bg-white border-0 py-3\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                <small class=\"text-muted\">
                    Affichage de ";
            // line 659
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 659, $this->source); })()), "getPaginationData", [], "any", false, false, false, 659), "firstItemNumber", [], "any", false, false, false, 659), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 659, $this->source); })()), "getPaginationData", [], "any", false, false, false, 659), "lastItemNumber", [], "any", false, false, false, 659), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 659, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 659), "html", null, true);
            yield " entreprises
                </small>
                ";
            // line 661
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 661, $this->source); })()));
            yield "
                <small class=\"text-muted\">
                    <i class=\"fas fa-arrow-up-down me-1\"></i> ";
            // line 663
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 663, $this->source); })()), "getPaginationData", [], "any", false, false, false, 663), "totalCount", [], "any", false, false, false, 663), "html", null, true);
            yield " ligne(s)
                </small>
            </div>
        </div>
        ";
        }
        // line 668
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

    // line 761
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

        // line 762
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // ==================== VARIABLES GLOBALES ====================
    let currentToggleId = null;
    let currentDeleteId = null;
    let companyToDelete = null;
    let deleteInProgress = false;
    let globalLoadingOverlay = null;

    // ==================== FONCTIONS DE CHARGEMENT ====================
    
    /**
     * Affiche un overlay de chargement global
     */
    function showGlobalLoading(message = 'Suppression en cours...', subMessage = 'Veuillez patienter') {
        if (globalLoadingOverlay) {
            globalLoadingOverlay.remove();
        }
        
        globalLoadingOverlay = document.createElement('div');
        globalLoadingOverlay.className = 'global-loading-overlay';
        globalLoadingOverlay.innerHTML = `
            <div class=\"global-loading-content\">
                <div class=\"global-loading-spinner\"></div>
                <div class=\"global-loading-text\">\${message}</div>
                <div class=\"global-loading-subtext\">\${subMessage}</div>
            </div>
        `;
        document.body.appendChild(globalLoadingOverlay);
    }
    
    /**
     * Masque l'overlay de chargement global
     */
    function hideGlobalLoading() {
        if (globalLoadingOverlay) {
            globalLoadingOverlay.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => {
                if (globalLoadingOverlay) {
                    globalLoadingOverlay.remove();
                    globalLoadingOverlay = null;
                }
            }, 300);
        }
    }
    
    /**
     * Affiche un effet de chargement sur une ligne du tableau
     */
    function showRowLoading(companyId) {
        const row = document.getElementById(`company-row-\${companyId}`);
        if (row) {
            row.classList.add('row-loading');
        }
    }
    
    /**
     * Masque l'effet de chargement sur une ligne
     */
    function hideRowLoading(companyId) {
        const row = document.getElementById(`company-row-\${companyId}`);
        if (row) {
            row.classList.remove('row-loading');
        }
    }
    
    /**
     * Affiche un effet de chargement sur un bouton
     */
    function showButtonLoading(button, text = 'Chargement...') {
        button.classList.add('btn-loading');
        const originalText = button.innerHTML;
        button.setAttribute('data-original-text', originalText);
        button.innerHTML = `<span class=\"btn-text\">\${text}</span>`;
        return originalText;
    }
    
    /**
     * Restaure l'état normal d'un bouton
     */
    function hideButtonLoading(button) {
        button.classList.remove('btn-loading');
        const originalText = button.getAttribute('data-original-text');
        if (originalText) {
            button.innerHTML = originalText;
        }
    }
    
    /**
     * Affiche une notification toast
     */
    function showNotification(message, type = 'success') {
        const oldNotifications = document.querySelectorAll('.notification-toast');
        oldNotifications.forEach(n => n.remove());
        
        const icons = {
            success: 'fas fa-check-circle',
            error: 'fas fa-exclamation-circle',
            warning: 'fas fa-exclamation-triangle'
        };
        
        const toast = document.createElement('div');
        toast.className = `notification-toast \${type}`;
        toast.innerHTML = `
            <i class=\"\${icons[type] || icons.success} fs-4\"></i>
            <div class=\"flex-grow-1\">\${message}</div>
            <button type=\"button\" class=\"btn-close btn-close-white\" onclick=\"this.parentElement.remove()\"></button>
        `;
        
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => toast.remove(), 300);
        }, 4000);
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
        
        statusCell.innerHTML = isActive 
            ? '<span class=\"status-badge status-active\"><i class=\"fas fa-check-circle me-1\"></i> Active</span>'
            : '<span class=\"status-badge status-inactive\"><i class=\"fas fa-ban me-1\"></i> Désactivée</span>';
        
        toggleBtn.dataset.active = isActive ? 'true' : 'false';
        toggleBtn.className = `btn btn-sm btn-outline-\${isActive ? 'danger' : 'success'} toggle-status-btn`;
        toggleBtn.innerHTML = `<i class=\"fas fa-\${isActive ? 'toggle-off' : 'toggle-on'}\"></i>`;
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
                updateCompaniesCount();
                
                const remainingRows = document.querySelectorAll('#companiesTableBody tr').length;
                if (remainingRows === 0) {
                    setTimeout(() => window.location.reload(), 500);
                }
            }, 300);
        }
    }

    /**
     * Mettre à jour le compteur d'entreprises
     */
    function updateCompaniesCount() {
        const countElement = document.getElementById('companiesCount');
        if (countElement) {
            const currentCount = parseInt(countElement.textContent) || 0;
            const newCount = Math.max(0, currentCount - 1);
            countElement.textContent = `\${newCount} entreprise(s)`;
        }
    }

    /**
     * Réinitialiser le modal de toggle
     */
    function resetToggleModal() {
        const submitBtn = document.querySelector('#toggleStatusForm button[type=\"submit\"]');
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class=\"bi bi-check me-2\"></i>Confirmer';
        }
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
            confirmBtn.classList.remove('btn-loading');
        }
        if (errorDiv) errorDiv.classList.add('d-none');
    }

    // ==================== GESTION DU MODAL DE TOGGLE ====================

    document.querySelectorAll('.toggle-status-btn').forEach(button => {
        button.addEventListener('click', function() {
            currentToggleId = this.dataset.id;
            const name = this.dataset.name;
            const isActive = this.dataset.active === 'true';
            
            const message = isActive ? 'Désactiver cette entreprise ?' : 'Activer cette entreprise ?';
            document.getElementById('toggleStatusMessage').textContent = message;
            document.getElementById('toggleCompanyName').textContent = name;
            
            const tokenInput = document.getElementById('toggle_token_' + currentToggleId);
            if (tokenInput) {
                document.getElementById('toggleStatusToken').value = tokenInput.value;
            }
            
            document.getElementById('toggleStatusForm').action = '/super-admin/hma-service/' + currentToggleId + '/toggle-status';
        });
    });

    const toggleModal = document.getElementById('toggleStatusModal');
    if (toggleModal) {
        toggleModal.addEventListener('hidden.bs.modal', resetToggleModal);
    }

    // ==================== GESTION DU MODAL DE SUPPRESSION ====================

    document.querySelectorAll('.delete-company-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            
            companyToDelete = { id, name };
            currentDeleteId = id;
            
            document.getElementById('deleteCompanyName').textContent = name;
            
            const confirmInput = document.getElementById('confirmCompanyName');
            const confirmBtn = document.getElementById('confirmDeleteBtn');
            const errorDiv = document.getElementById('confirmError');
            
            if (confirmInput) confirmInput.value = '';
            if (confirmBtn) confirmBtn.disabled = true;
            if (errorDiv) errorDiv.classList.add('d-none');
            
            const tokenInput = document.getElementById('delete_token_' + id);
            if (tokenInput) {
                document.getElementById('deleteToken').value = tokenInput.value;
            }
            
            document.getElementById('deleteForm').action = '/super-admin/hma-service/' + id + '/delete';
        });
    });

    // Vérification de la saisie du nom
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

        confirmInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !confirmBtn.disabled && !deleteInProgress) {
                e.preventDefault();
                confirmBtn.click();
            }
        });
    }

    // Bouton de confirmation de suppression avec effet de chargement
    if (confirmBtn) {
        confirmBtn.addEventListener('click', async function() {
            if (!companyToDelete || deleteInProgress) return;
            
            deleteInProgress = true;
            
            // Afficher l'effet de chargement sur le bouton
            showButtonLoading(this, 'Suppression...');
            
            // Afficher l'overlay global
            showGlobalLoading(
                `Suppression de \"\${companyToDelete.name}\"...`, 
                'Veuillez patienter, suppression des données en cours'
            );
            
            // Afficher l'effet de chargement sur la ligne
            showRowLoading(companyToDelete.id);
            
            const form = document.getElementById('deleteForm');
            const formData = new FormData(form);
            const url = `/super-admin/hma-service/\${companyToDelete.id}/delete`;
            
            // Fermer le modal immédiatement
            const modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
            if (modal) modal.hide();
            
            try {
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                
                const data = await response.json();
                
                if (data.success) {
                    showNotification(data.message, 'success');
                    removeCompanyRow(companyToDelete.id);
                } else {
                    showNotification(data.message || 'Une erreur est survenue', 'error');
                    hideRowLoading(companyToDelete.id);
                }
                
            } catch (error) {
                console.error('Erreur:', error);
                showNotification('Erreur de communication avec le serveur', 'error');
                hideRowLoading(companyToDelete.id);
            } finally {
                // Masquer l'overlay après un court délai
                setTimeout(() => {
                    hideGlobalLoading();
                }, 500);
                
                hideButtonLoading(confirmBtn);
                resetDeleteModal();
                deleteInProgress = false;
                companyToDelete = null;
                currentDeleteId = null;
            }
        });
    }

    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('hidden.bs.modal', function() {
            if (!deleteInProgress) {
                resetDeleteModal();
                companyToDelete = null;
                currentDeleteId = null;
            }
        });
    }

    // ==================== GESTION DES SOUMISSIONS AJAX DU TOGGLE ====================

    const toggleForm = document.getElementById('toggleStatusForm');
    if (toggleForm) {
        toggleForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const form = this;
            const formData = new FormData(form);
            const url = form.action;
            const submitBtn = form.querySelector('button[type=\"submit\"]');
            const modal = bootstrap.Modal.getInstance(document.getElementById('toggleStatusModal'));
            
            showButtonLoading(submitBtn, 'Traitement...');
            showRowLoading(currentToggleId);
            
            try {
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                
                const data = await response.json();
                
                if (modal) modal.hide();
                
                if (data.success) {
                    showNotification(data.message, 'success');
                    if (currentToggleId) {
                        updateCompanyStatus(currentToggleId, data.active);
                    }
                } else {
                    showNotification(data.message || 'Une erreur est survenue', 'error');
                }
                
            } catch (error) {
                console.error('Erreur:', error);
                showNotification('Erreur de communication avec le serveur', 'error');
            } finally {
                hideButtonLoading(submitBtn);
                hideRowLoading(currentToggleId);
                resetToggleModal();
            }
        });
    }

    // ==================== GESTION DES FILTRES ====================

    window.applyFilters = function() {
        const search = document.getElementById('searchInput')?.value.trim() || '';
        const plan = document.getElementById('planFilter')?.value || '';
        const companyType = document.getElementById('companyTypeFilter')?.value || '';
        const dateFrom = document.getElementById('dateFrom')?.value || '';
        const dateTo = document.getElementById('dateTo')?.value || '';
        
        const url = new URL(window.location.href);
        
        ['search', 'plan', 'company_type', 'date_from', 'date_to'].forEach(param => {
            url.searchParams.delete(param);
        });
        
        if (search) url.searchParams.set('search', search);
        if (plan) url.searchParams.set('plan', plan);
        if (companyType) url.searchParams.set('company_type', companyType);
        if (dateFrom) url.searchParams.set('date_from', dateFrom);
        if (dateTo) url.searchParams.set('date_to', dateTo);
        
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.clearFilters = function() {
        const url = new URL(window.location.href);
        url.searchParams.delete('search');
        url.searchParams.delete('plan');
        url.searchParams.delete('company_type');
        url.searchParams.delete('status');
        url.searchParams.delete('date_from');
        url.searchParams.delete('date_to');
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.filterByStatus = function(status) {
        const url = new URL(window.location.href);
        if (status === 'all') {
            url.searchParams.delete('status');
        } else {
            url.searchParams.set('status', status);
        }
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.removeFilter = function(filter) {
        const url = new URL(window.location.href);
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

        document.querySelectorAll('.row-checkbox').forEach(cb => {
            cb.addEventListener('change', function() {
                const allChecked = document.querySelectorAll('.row-checkbox:checked').length;
                const total = document.querySelectorAll('.row-checkbox').length;
                if (selectAll) {
                    selectAll.checked = allChecked === total;
                    selectAll.indeterminate = allChecked > 0 && allChecked < total;
                }
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
        return array (  1210 => 762,  1197 => 761,  1095 => 668,  1087 => 663,  1082 => 661,  1073 => 659,  1068 => 656,  1066 => 655,  1061 => 652,  1049 => 646,  1042 => 641,  1040 => 640,  1026 => 633,  1020 => 630,  1016 => 629,  1008 => 628,  1004 => 627,  998 => 626,  992 => 625,  986 => 622,  980 => 619,  973 => 615,  968 => 613,  964 => 612,  957 => 608,  953 => 607,  949 => 606,  943 => 603,  935 => 598,  932 => 597,  926 => 596,  920 => 595,  917 => 594,  913 => 592,  911 => 591,  908 => 590,  906 => 589,  903 => 588,  901 => 587,  898 => 586,  895 => 585,  892 => 584,  889 => 583,  884 => 582,  879 => 581,  877 => 580,  873 => 578,  867 => 576,  864 => 575,  860 => 573,  856 => 571,  854 => 570,  850 => 568,  844 => 566,  841 => 565,  837 => 563,  835 => 562,  832 => 561,  830 => 560,  827 => 559,  825 => 558,  822 => 557,  820 => 556,  814 => 553,  810 => 552,  802 => 547,  798 => 546,  795 => 545,  789 => 543,  781 => 541,  779 => 540,  773 => 537,  766 => 536,  761 => 535,  739 => 516,  730 => 509,  723 => 504,  714 => 500,  711 => 499,  708 => 498,  701 => 494,  698 => 493,  695 => 492,  688 => 488,  685 => 487,  682 => 486,  675 => 482,  672 => 481,  669 => 480,  662 => 476,  659 => 475,  657 => 474,  654 => 473,  652 => 472,  638 => 461,  629 => 455,  621 => 449,  608 => 447,  604 => 446,  592 => 437,  588 => 436,  584 => 435,  580 => 434,  569 => 426,  551 => 411,  537 => 400,  523 => 389,  509 => 378,  493 => 365,  487 => 362,  481 => 359,  459 => 340,  450 => 333,  437 => 332,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
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

    /* ==================== ANIMATIONS ET NOTIFICATIONS ==================== */
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    
    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }
    
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    
    .notification-toast {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 10000;
        min-width: 320px;
        padding: 1rem 1.25rem;
        border-radius: 0.75rem;
        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.2);
        animation: slideIn 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .notification-toast.success { background: linear-gradient(135deg, #10b981, #059669); color: white; }
    .notification-toast.error { background: linear-gradient(135deg, #ef4444, #dc2626); color: white; }
    .notification-toast.warning { background: linear-gradient(135deg, #f59e0b, #d97706); color: white; }
    
    /* Loading overlay */
    .global-loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(3px);
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .global-loading-content {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem 2.5rem;
        text-align: center;
        box-shadow: 0 20px 35px rgba(0,0,0,0.3);
        animation: slideIn 0.3s ease;
    }
    
    .global-loading-spinner {
        width: 50px;
        height: 50px;
        border: 4px solid #e2e8f0;
        border-top-color: #0463f1;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
        margin: 0 auto 1rem;
    }
    
    .global-loading-text {
        font-size: 1rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }
    
    .global-loading-subtext {
        font-size: 0.8rem;
        color: #64748b;
    }
    
    /* Row loading animation */
    .row-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.6;
    }
    
    .row-loading::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
        animation: shimmer 1s infinite;
    }
    
    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
    
    /* Button loading state */
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
        width: 18px;
        height: 18px;
        margin: -9px 0 0 -9px;
        border: 2px solid rgba(255,255,255,0.3);
        border-top-color: white;
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
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
                <span class=\"badge bg-secondary ms-2\" id=\"companiesCount\">{{ pagination.getTotalItemCount }} entreprise(s)</span>
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
                <tbody id=\"companiesTableBody\">
                    {% for company in pagination %}
                        <tr id=\"company-row-{{ company.id }}\" data-company-name=\"{{ company.companyName }}\">
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
                            <td class=\"status-cell\">
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
                                <div class=\"btn-group\" role=\"group\">
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
    let deleteInProgress = false;
    let globalLoadingOverlay = null;

    // ==================== FONCTIONS DE CHARGEMENT ====================
    
    /**
     * Affiche un overlay de chargement global
     */
    function showGlobalLoading(message = 'Suppression en cours...', subMessage = 'Veuillez patienter') {
        if (globalLoadingOverlay) {
            globalLoadingOverlay.remove();
        }
        
        globalLoadingOverlay = document.createElement('div');
        globalLoadingOverlay.className = 'global-loading-overlay';
        globalLoadingOverlay.innerHTML = `
            <div class=\"global-loading-content\">
                <div class=\"global-loading-spinner\"></div>
                <div class=\"global-loading-text\">\${message}</div>
                <div class=\"global-loading-subtext\">\${subMessage}</div>
            </div>
        `;
        document.body.appendChild(globalLoadingOverlay);
    }
    
    /**
     * Masque l'overlay de chargement global
     */
    function hideGlobalLoading() {
        if (globalLoadingOverlay) {
            globalLoadingOverlay.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => {
                if (globalLoadingOverlay) {
                    globalLoadingOverlay.remove();
                    globalLoadingOverlay = null;
                }
            }, 300);
        }
    }
    
    /**
     * Affiche un effet de chargement sur une ligne du tableau
     */
    function showRowLoading(companyId) {
        const row = document.getElementById(`company-row-\${companyId}`);
        if (row) {
            row.classList.add('row-loading');
        }
    }
    
    /**
     * Masque l'effet de chargement sur une ligne
     */
    function hideRowLoading(companyId) {
        const row = document.getElementById(`company-row-\${companyId}`);
        if (row) {
            row.classList.remove('row-loading');
        }
    }
    
    /**
     * Affiche un effet de chargement sur un bouton
     */
    function showButtonLoading(button, text = 'Chargement...') {
        button.classList.add('btn-loading');
        const originalText = button.innerHTML;
        button.setAttribute('data-original-text', originalText);
        button.innerHTML = `<span class=\"btn-text\">\${text}</span>`;
        return originalText;
    }
    
    /**
     * Restaure l'état normal d'un bouton
     */
    function hideButtonLoading(button) {
        button.classList.remove('btn-loading');
        const originalText = button.getAttribute('data-original-text');
        if (originalText) {
            button.innerHTML = originalText;
        }
    }
    
    /**
     * Affiche une notification toast
     */
    function showNotification(message, type = 'success') {
        const oldNotifications = document.querySelectorAll('.notification-toast');
        oldNotifications.forEach(n => n.remove());
        
        const icons = {
            success: 'fas fa-check-circle',
            error: 'fas fa-exclamation-circle',
            warning: 'fas fa-exclamation-triangle'
        };
        
        const toast = document.createElement('div');
        toast.className = `notification-toast \${type}`;
        toast.innerHTML = `
            <i class=\"\${icons[type] || icons.success} fs-4\"></i>
            <div class=\"flex-grow-1\">\${message}</div>
            <button type=\"button\" class=\"btn-close btn-close-white\" onclick=\"this.parentElement.remove()\"></button>
        `;
        
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => toast.remove(), 300);
        }, 4000);
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
        
        statusCell.innerHTML = isActive 
            ? '<span class=\"status-badge status-active\"><i class=\"fas fa-check-circle me-1\"></i> Active</span>'
            : '<span class=\"status-badge status-inactive\"><i class=\"fas fa-ban me-1\"></i> Désactivée</span>';
        
        toggleBtn.dataset.active = isActive ? 'true' : 'false';
        toggleBtn.className = `btn btn-sm btn-outline-\${isActive ? 'danger' : 'success'} toggle-status-btn`;
        toggleBtn.innerHTML = `<i class=\"fas fa-\${isActive ? 'toggle-off' : 'toggle-on'}\"></i>`;
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
                updateCompaniesCount();
                
                const remainingRows = document.querySelectorAll('#companiesTableBody tr').length;
                if (remainingRows === 0) {
                    setTimeout(() => window.location.reload(), 500);
                }
            }, 300);
        }
    }

    /**
     * Mettre à jour le compteur d'entreprises
     */
    function updateCompaniesCount() {
        const countElement = document.getElementById('companiesCount');
        if (countElement) {
            const currentCount = parseInt(countElement.textContent) || 0;
            const newCount = Math.max(0, currentCount - 1);
            countElement.textContent = `\${newCount} entreprise(s)`;
        }
    }

    /**
     * Réinitialiser le modal de toggle
     */
    function resetToggleModal() {
        const submitBtn = document.querySelector('#toggleStatusForm button[type=\"submit\"]');
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class=\"bi bi-check me-2\"></i>Confirmer';
        }
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
            confirmBtn.classList.remove('btn-loading');
        }
        if (errorDiv) errorDiv.classList.add('d-none');
    }

    // ==================== GESTION DU MODAL DE TOGGLE ====================

    document.querySelectorAll('.toggle-status-btn').forEach(button => {
        button.addEventListener('click', function() {
            currentToggleId = this.dataset.id;
            const name = this.dataset.name;
            const isActive = this.dataset.active === 'true';
            
            const message = isActive ? 'Désactiver cette entreprise ?' : 'Activer cette entreprise ?';
            document.getElementById('toggleStatusMessage').textContent = message;
            document.getElementById('toggleCompanyName').textContent = name;
            
            const tokenInput = document.getElementById('toggle_token_' + currentToggleId);
            if (tokenInput) {
                document.getElementById('toggleStatusToken').value = tokenInput.value;
            }
            
            document.getElementById('toggleStatusForm').action = '/super-admin/hma-service/' + currentToggleId + '/toggle-status';
        });
    });

    const toggleModal = document.getElementById('toggleStatusModal');
    if (toggleModal) {
        toggleModal.addEventListener('hidden.bs.modal', resetToggleModal);
    }

    // ==================== GESTION DU MODAL DE SUPPRESSION ====================

    document.querySelectorAll('.delete-company-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            
            companyToDelete = { id, name };
            currentDeleteId = id;
            
            document.getElementById('deleteCompanyName').textContent = name;
            
            const confirmInput = document.getElementById('confirmCompanyName');
            const confirmBtn = document.getElementById('confirmDeleteBtn');
            const errorDiv = document.getElementById('confirmError');
            
            if (confirmInput) confirmInput.value = '';
            if (confirmBtn) confirmBtn.disabled = true;
            if (errorDiv) errorDiv.classList.add('d-none');
            
            const tokenInput = document.getElementById('delete_token_' + id);
            if (tokenInput) {
                document.getElementById('deleteToken').value = tokenInput.value;
            }
            
            document.getElementById('deleteForm').action = '/super-admin/hma-service/' + id + '/delete';
        });
    });

    // Vérification de la saisie du nom
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

        confirmInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !confirmBtn.disabled && !deleteInProgress) {
                e.preventDefault();
                confirmBtn.click();
            }
        });
    }

    // Bouton de confirmation de suppression avec effet de chargement
    if (confirmBtn) {
        confirmBtn.addEventListener('click', async function() {
            if (!companyToDelete || deleteInProgress) return;
            
            deleteInProgress = true;
            
            // Afficher l'effet de chargement sur le bouton
            showButtonLoading(this, 'Suppression...');
            
            // Afficher l'overlay global
            showGlobalLoading(
                `Suppression de \"\${companyToDelete.name}\"...`, 
                'Veuillez patienter, suppression des données en cours'
            );
            
            // Afficher l'effet de chargement sur la ligne
            showRowLoading(companyToDelete.id);
            
            const form = document.getElementById('deleteForm');
            const formData = new FormData(form);
            const url = `/super-admin/hma-service/\${companyToDelete.id}/delete`;
            
            // Fermer le modal immédiatement
            const modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
            if (modal) modal.hide();
            
            try {
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                
                const data = await response.json();
                
                if (data.success) {
                    showNotification(data.message, 'success');
                    removeCompanyRow(companyToDelete.id);
                } else {
                    showNotification(data.message || 'Une erreur est survenue', 'error');
                    hideRowLoading(companyToDelete.id);
                }
                
            } catch (error) {
                console.error('Erreur:', error);
                showNotification('Erreur de communication avec le serveur', 'error');
                hideRowLoading(companyToDelete.id);
            } finally {
                // Masquer l'overlay après un court délai
                setTimeout(() => {
                    hideGlobalLoading();
                }, 500);
                
                hideButtonLoading(confirmBtn);
                resetDeleteModal();
                deleteInProgress = false;
                companyToDelete = null;
                currentDeleteId = null;
            }
        });
    }

    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('hidden.bs.modal', function() {
            if (!deleteInProgress) {
                resetDeleteModal();
                companyToDelete = null;
                currentDeleteId = null;
            }
        });
    }

    // ==================== GESTION DES SOUMISSIONS AJAX DU TOGGLE ====================

    const toggleForm = document.getElementById('toggleStatusForm');
    if (toggleForm) {
        toggleForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const form = this;
            const formData = new FormData(form);
            const url = form.action;
            const submitBtn = form.querySelector('button[type=\"submit\"]');
            const modal = bootstrap.Modal.getInstance(document.getElementById('toggleStatusModal'));
            
            showButtonLoading(submitBtn, 'Traitement...');
            showRowLoading(currentToggleId);
            
            try {
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                
                const data = await response.json();
                
                if (modal) modal.hide();
                
                if (data.success) {
                    showNotification(data.message, 'success');
                    if (currentToggleId) {
                        updateCompanyStatus(currentToggleId, data.active);
                    }
                } else {
                    showNotification(data.message || 'Une erreur est survenue', 'error');
                }
                
            } catch (error) {
                console.error('Erreur:', error);
                showNotification('Erreur de communication avec le serveur', 'error');
            } finally {
                hideButtonLoading(submitBtn);
                hideRowLoading(currentToggleId);
                resetToggleModal();
            }
        });
    }

    // ==================== GESTION DES FILTRES ====================

    window.applyFilters = function() {
        const search = document.getElementById('searchInput')?.value.trim() || '';
        const plan = document.getElementById('planFilter')?.value || '';
        const companyType = document.getElementById('companyTypeFilter')?.value || '';
        const dateFrom = document.getElementById('dateFrom')?.value || '';
        const dateTo = document.getElementById('dateTo')?.value || '';
        
        const url = new URL(window.location.href);
        
        ['search', 'plan', 'company_type', 'date_from', 'date_to'].forEach(param => {
            url.searchParams.delete(param);
        });
        
        if (search) url.searchParams.set('search', search);
        if (plan) url.searchParams.set('plan', plan);
        if (companyType) url.searchParams.set('company_type', companyType);
        if (dateFrom) url.searchParams.set('date_from', dateFrom);
        if (dateTo) url.searchParams.set('date_to', dateTo);
        
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.clearFilters = function() {
        const url = new URL(window.location.href);
        url.searchParams.delete('search');
        url.searchParams.delete('plan');
        url.searchParams.delete('company_type');
        url.searchParams.delete('status');
        url.searchParams.delete('date_from');
        url.searchParams.delete('date_to');
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.filterByStatus = function(status) {
        const url = new URL(window.location.href);
        if (status === 'all') {
            url.searchParams.delete('status');
        } else {
            url.searchParams.set('status', status);
        }
        url.searchParams.set('page', '1');
        window.location.href = url.toString();
    };

    window.removeFilter = function(filter) {
        const url = new URL(window.location.href);
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

        document.querySelectorAll('.row-checkbox').forEach(cb => {
            cb.addEventListener('change', function() {
                const allChecked = document.querySelectorAll('.row-checkbox:checked').length;
                const total = document.querySelectorAll('.row-checkbox').length;
                if (selectAll) {
                    selectAll.checked = allChecked === total;
                    selectAll.indeterminate = allChecked > 0 && allChecked < total;
                }
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

    console.log('✅ JavaScript chargé avec succès');
});
</script>
{% endblock %}", "super_admin/hma_service/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\hma_service\\index.html.twig");
    }
}
