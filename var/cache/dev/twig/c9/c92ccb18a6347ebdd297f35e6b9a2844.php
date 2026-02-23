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
class __TwigTemplate_9b1356572f2288aa20751fa5d1f57e0e extends Template
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
    /* Variables */
    :root {
        --primary: #667eea;
        --secondary: #764ba2;
        --success: #28a745;
        --danger: #dc3545;
        --warning: #ffc107;
        --info: #17a2b8;
    }

    /* Styles pour les cartes de statistiques */
    .stat-card {
        transition: transform 0.2s;
        cursor: pointer;
        border-left: 4px solid transparent;
        border-radius: 12px;
        overflow: hidden;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .stat-card.total { border-left-color: var(--primary); }
    .stat-card.active { border-left-color: var(--success); }
    .stat-card.inactive { border-left-color: var(--danger); }
    .stat-card.trial { border-left-color: var(--warning); }
    
    /* Styles pour les logos */
    .company-logo {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 8px;
    }
    .company-initials {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
    }
    
    /* Badges de filtre */
    .filter-badge {
        cursor: pointer;
        transition: all 0.2s;
    }
    .filter-badge:hover {
        opacity: 0.8;
        transform: scale(1.05);
    }
    
    /* SCROLLABLE TABLEAU */
    .table-responsive {
        max-height: 600px;
        overflow-y: auto;
        border-radius: 8px;
        scrollbar-width: thin;
        scrollbar-color: #c0c0c0 #f8f9fa;
    }
    
    .table-responsive::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    .table-responsive::-webkit-scrollbar-track {
        background: #f8f9fa;
        border-radius: 4px;
    }
    
    .table-responsive::-webkit-scrollbar-thumb {
        background: #c0c0c0;
        border-radius: 4px;
    }
    
    .table-responsive::-webkit-scrollbar-thumb:hover {
        background: #a0a0a0;
    }
    
    .table thead th {
        position: sticky;
        top: 0;
        background-color: #f8f9fa;
        z-index: 10;
        border-bottom: 2px solid #dee2e6;
        box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.1);
    }
    
    /* Icônes circulaires pour modals */
    .icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Style pour les rôles */
    .role-badge {
        font-size: 0.7rem;
        padding: 0.2rem 0.4rem;
        margin-right: 2px;
        display: inline-block;
        font-weight: 500;
        border-radius: 4px;
    }
    
    .role-badge.role-admin {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    .role-badge.role-manager {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .role-badge.role-stock {
        background: linear-gradient(135deg, #ffc107 0%, #ffca2c 100%);
        color: #212529;
    }
    .role-badge.role-cashier {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
        color: white;
    }
    .role-badge.role-user {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }
    
    /* Style pour les plans */
    .plan-badge {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        font-weight: 500;
        border-radius: 50px;
    }
    
    .plan-trial {
        background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        color: white;
    }
    .plan-freemium {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }
    .plan-basic {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .plan-premium {
        background: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%);
        color: white;
    }
    
    /* Style pour le statut */
    .status-badge {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        font-weight: 500;
        border-radius: 50px;
    }
    
    .status-active {
        background: linear-gradient(135deg, #28a745 0%, #218838 100%);
        color: white;
    }
    
    .status-inactive {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    
    .status-trial {
        background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        color: #212529;
    }
    
    /* Style pour la colonne des rôles */
    .roles-column {
        max-width: 150px;
        min-width: 120px;
    }
    
    /* Espacement pour les actions */
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
    }
    
    /* Tooltip personnalisé */
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
        border-radius: 4px;
        font-size: 12px;
        white-space: nowrap;
        z-index: 1000;
        pointer-events: none;
    }
    
    /* Style pour les compteurs d'utilisation */
    .usage-counter {
        font-size: 0.75rem;
        color: #495057;
    }
    
    .usage-icon {
        color: #6c757d;
        margin-right: 2px;
    }
    
    .text-dark-strong {
        color: #212529 !important;
        font-weight: 500;
    }
    
    .table td {
        vertical-align: middle;
        color: #212529;
    }

    /* ✅ NOTIFICATIONS */
    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 1rem 1.5rem;
        background: white;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        z-index: 9999;
        transform: translateX(400px);
        transition: transform 0.3s ease;
        border-left: 4px solid;
        min-width: 300px;
    }

    .notification.show {
        transform: translateX(0);
    }

    .notification-success {
        border-left-color: #28a745;
    }

    .notification-success i {
        color: #28a745;
    }

    .notification-error {
        border-left-color: #dc3545;
    }

    .notification-error i {
        color: #dc3545;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 284
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

        // line 285
        yield "<div class=\"container-fluid py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3 text-dark\">
            <i class=\"bi bi-building me-2 text-primary\"></i>
            Gestion des entreprises
        </h1>
        <div>
            <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_new");
        yield "\" class=\"btn btn-primary me-2\">
                <i class=\"bi bi-plus-circle me-1\"></i>
                Nouvelle entreprise
            </a>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-download me-1\"></i>
                    Exporter
                </button>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 304
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_export", ["format" => "excel"]);
        yield "?ids=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 304, $this->source); })()), "request", [], "any", false, false, false, 304), "get", ["ids"], "method", false, false, false, 304), "html", null, true);
        yield "\">
                            <i class=\"bi bi-file-excel me-2 text-success\"></i>
                            Excel
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 310
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_export", ["format" => "csv"]);
        yield "?ids=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 310, $this->source); })()), "request", [], "any", false, false, false, 310), "get", ["ids"], "method", false, false, false, 310), "html", null, true);
        yield "\">
                            <i class=\"bi bi-filetype-csv me-2 text-info\"></i>
                            CSV
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card stat-card total\" onclick=\"filterByStatus('all')\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"text-muted mb-1\">Total</h6>
                            <h3 class=\"mb-0 text-dark\">";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 328, $this->source); })()), "total", [], "any", false, false, false, 328), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"bg-primary bg-opacity-10 p-3 rounded\">
                            <i class=\"bi bi-building fs-3 text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card active\" onclick=\"filterByStatus('active')\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"text-muted mb-1\">Actives</h6>
                            <h3 class=\"mb-0 text-success\">";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 343, $this->source); })()), "active", [], "any", false, false, false, 343), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"bg-success bg-opacity-10 p-3 rounded\">
                            <i class=\"bi bi-check-circle fs-3 text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card inactive\" onclick=\"filterByStatus('inactive')\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"text-muted mb-1\">Inactives</h6>
                            <h3 class=\"mb-0 text-danger\">";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 358, $this->source); })()), "inactive", [], "any", false, false, false, 358), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"bg-danger bg-opacity-10 p-3 rounded\">
                            <i class=\"bi bi-x-circle fs-3 text-danger\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card trial\" onclick=\"filterByStatus('trial')\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"text-muted mb-1\">Période d'essai</h6>
                            <h3 class=\"mb-0 text-warning\">";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 373, $this->source); })()), "trial", [], "any", false, false, false, 373), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"bg-warning bg-opacity-10 p-3 rounded\">
                            <i class=\"bi bi-hourglass-split fs-3 text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres rapides -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <div class=\"row g-3\">
                <div class=\"col-md-4\">
                    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher (nom, email, n° abonnement)...\" value=\"";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 389, $this->source); })()), "search", [], "any", false, false, false, 389), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-2\">
                    <select id=\"planFilter\" class=\"form-select\">
                        <option value=\"\">Tous les plans</option>
                        <option value=\"trial\" ";
        // line 394
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 394, $this->source); })()), "plan", [], "any", false, false, false, 394) == "trial")) ? ("selected") : (""));
        yield ">Essai gratuit</option>
                        <option value=\"freemium\" ";
        // line 395
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 395, $this->source); })()), "plan", [], "any", false, false, false, 395) == "freemium")) ? ("selected") : (""));
        yield ">Freemium</option>
                        <option value=\"basic\" ";
        // line 396
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 396, $this->source); })()), "plan", [], "any", false, false, false, 396) == "basic")) ? ("selected") : (""));
        yield ">Basic</option>
                        <option value=\"premium\" ";
        // line 397
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 397, $this->source); })()), "plan", [], "any", false, false, false, 397) == "premium")) ? ("selected") : (""));
        yield ">Premium</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 401, $this->source); })()), "date_from", [], "any", false, false, false, 401), "html", null, true);
        yield "\" placeholder=\"Date début\">
                </div>
                <div class=\"col-md-2\">
                    <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 404, $this->source); })()), "date_to", [], "any", false, false, false, 404), "html", null, true);
        yield "\" placeholder=\"Date fin\">
                </div>
                <div class=\"col-md-2 d-flex gap-2\">
                    <button class=\"btn btn-primary w-50\" onclick=\"applyFilters()\">
                        <i class=\"bi bi-funnel me-1\"></i>
                        Filtrer
                    </button>
                    <button class=\"btn btn-outline-secondary w-50\" onclick=\"clearFilters()\">
                        <i class=\"bi bi-eraser me-1\"></i>
                        Effacer
                    </button>
                </div>
            </div>

            <!-- Badges de filtres actifs -->
            <div class=\"mt-3 d-flex gap-2 flex-wrap\">
                ";
        // line 420
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 420, $this->source); })()), "search", [], "any", false, false, false, 420)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 421
            yield "                    <span class=\"badge bg-primary filter-badge\" onclick=\"removeFilter('search')\">
                        <i class=\"bi bi-search me-1\"></i>
                        ";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 423, $this->source); })()), "search", [], "any", false, false, false, 423), "html", null, true);
            yield "
                        <i class=\"bi bi-x ms-1\"></i>
                    </span>
                ";
        }
        // line 427
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 427, $this->source); })()), "status", [], "any", false, false, false, 427)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 428
            yield "                    <span class=\"badge bg-primary filter-badge\" onclick=\"removeFilter('status')\">
                        Statut: ";
            // line 429
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 429, $this->source); })()), "status", [], "any", false, false, false, 429) == "active")) ? ("Actives") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 429, $this->source); })()), "status", [], "any", false, false, false, 429) == "inactive")) ? ("Inactives") : ("Essai"))));
            yield "
                        <i class=\"bi bi-x ms-1\"></i>
                    </span>
                ";
        }
        // line 433
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 433, $this->source); })()), "plan", [], "any", false, false, false, 433)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 434
            yield "                    <span class=\"badge bg-primary filter-badge\" onclick=\"removeFilter('plan')\">
                        Plan: ";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 435, $this->source); })()), "plan", [], "any", false, false, false, 435), "html", null, true);
            yield "
                        <i class=\"bi bi-x ms-1\"></i>
                    </span>
                ";
        }
        // line 439
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 439, $this->source); })()), "date_from", [], "any", false, false, false, 439) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 439, $this->source); })()), "date_to", [], "any", false, false, false, 439))) {
            // line 440
            yield "                    <span class=\"badge bg-primary filter-badge\" onclick=\"removeFilter('date_from'); removeFilter('date_to')\">
                        Période: ";
            // line 441
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 441, $this->source); })()), "date_from", [], "any", false, false, false, 441)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 441, $this->source); })()), "date_from", [], "any", false, false, false, 441), "html", null, true)) : ("..."));
            yield " → ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 441, $this->source); })()), "date_to", [], "any", false, false, false, 441)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 441, $this->source); })()), "date_to", [], "any", false, false, false, 441), "html", null, true)) : ("..."));
            yield "
                        <i class=\"bi bi-x ms-1\"></i>
                    </span>
                ";
        }
        // line 445
        yield "            </div>
        </div>
    </div>

    <!-- Tableau des entreprises avec scroll -->
    <div class=\"card\">
        <div class=\"card-header bg-white d-flex justify-content-between align-items-center py-3\">
            <h5 class=\"mb-0 text-dark\">
                <i class=\"bi bi-building me-2 text-primary\"></i>
                Liste des entreprises (";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 454, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 454), "html", null, true);
        yield ")
            </h5>
            <div class=\"text-muted small\">
                <i class=\"bi bi-arrow-up-down me-1\"></i>
                Utilisez le scroll pour voir plus de lignes
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th width=\"40\">
                                <input type=\"checkbox\" id=\"selectAll\" class=\"form-check-input\">
                            </th>
                            <th>Entreprise</th>
                            <th>Contact</th>
                            <th>Plan</th>
                            <th>Statut</th>
                            <th class=\"roles-column\">Rôles</th>
                            <th>Utilisation</th>
                            <th>Création</th>
                            <th style=\"min-width: 120px;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 480
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 480, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 481
            yield "                            <tr id=\"company-row-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 481), "html", null, true);
            yield "\">
                                <td>
                                    <input type=\"checkbox\" class=\"row-checkbox form-check-input\" value=\"";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 483), "html", null, true);
            yield "\">
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        ";
            // line 487
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "logo", [], "any", false, false, false, 487)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 488
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, $context["company"], "logo", [], "any", false, false, false, 488))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 489
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 489), "html", null, true);
                yield "\" 
                                                 class=\"company-logo me-2\">
                                        ";
            } else {
                // line 492
                yield "                                            <div class=\"company-initials me-2\">
                                                ";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 493))), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 496
            yield "                                        <div>
                                            <strong class=\"text-dark\">";
            // line 497
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 497), "html", null, true);
            yield "</strong><br>
                                            <small class=\"text-muted\">#";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "subscriptionNumber", [], "any", false, false, false, 498), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <i class=\"bi bi-envelope me-1 text-muted\" title=\"Email\"></i>
                                        <a href=\"mailto:";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 505), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 505), "html", null, true);
            yield "</a>
                                        <br>
                                        <small>
                                            <i class=\"bi bi-telephone me-1 text-muted\" title=\"Téléphone\"></i>
                                            ";
            // line 509
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "phone", [], "any", false, false, false, 509)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 510
                yield "                                                <a href=\"tel:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "phone", [], "any", false, false, false, 510), "html", null, true);
                yield "\" class=\"text-decoration-none text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "phone", [], "any", false, false, false, 510), "html", null, true);
                yield "</a>
                                            ";
            } else {
                // line 512
                yield "                                                <span class=\"text-muted\">Non renseigné</span>
                                            ";
            }
            // line 514
            yield "                                        </small>
                                    </div>
                                </td>
                                <td>
                                    ";
            // line 519
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlan", [], "any", false, false, false, 519) == "trial")) {
                // line 520
                yield "                                        <span class=\"badge plan-trial plan-badge\" title=\"Plan: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlanLabel", [], "any", false, false, false, 520), "html", null, true);
                yield "\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            ";
                // line 522
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlanLabel", [], "any", false, false, false, 522), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 524
$context["company"], "currentPlan", [], "any", false, false, false, 524) == "freemium")) {
                // line 525
                yield "                                        <span class=\"badge plan-freemium plan-badge\" title=\"Plan: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlanLabel", [], "any", false, false, false, 525), "html", null, true);
                yield "\">
                                            <i class=\"bi bi-gift me-1\"></i>
                                            ";
                // line 527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlanLabel", [], "any", false, false, false, 527), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 529
$context["company"], "currentPlan", [], "any", false, false, false, 529) == "basic")) {
                // line 530
                yield "                                        <span class=\"badge plan-basic plan-badge\" title=\"Plan: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlanLabel", [], "any", false, false, false, 530), "html", null, true);
                yield "\">
                                            <i class=\"bi bi-rocket me-1\"></i>
                                            ";
                // line 532
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlanLabel", [], "any", false, false, false, 532), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 534
$context["company"], "currentPlan", [], "any", false, false, false, 534) == "premium")) {
                // line 535
                yield "                                        <span class=\"badge plan-premium plan-badge\" title=\"Plan: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlanLabel", [], "any", false, false, false, 535), "html", null, true);
                yield "\">
                                            <i class=\"bi bi-stars me-1\"></i>
                                            ";
                // line 537
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlanLabel", [], "any", false, false, false, 537), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 540
                yield "                                        <span class=\"badge bg-secondary plan-badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentPlanLabel", [], "any", false, false, false, 540), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 542
            yield "                                    
                                    ";
            // line 543
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "subscriptionEndsAt", [], "any", false, false, false, 543)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 544
                yield "                                        <br>
                                        <small class=\"text-muted custom-tooltip\" 
                                               data-tooltip=\"Fin d'abonnement\">
                                            <i class=\"bi bi-calendar me-1\"></i>
                                            ";
                // line 548
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "subscriptionEndsAt", [], "any", false, false, false, 548), "d/m/Y"), "html", null, true);
                yield "
                                        </small>
                                    ";
            }
            // line 551
            yield "                                </td>
                                <td class=\"status-cell\">
                                    ";
            // line 554
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 554)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 555
                yield "                                        <span class=\"badge status-active status-badge\">
                                            <i class=\"bi bi-check-circle me-1\"></i>
                                            Active
                                        </span>
                                    ";
            } else {
                // line 560
                yield "                                        <span class=\"badge status-inactive status-badge\">
                                            <i class=\"bi bi-x-circle me-1\"></i>
                                            Désactivée
                                        </span>
                                    ";
            }
            // line 565
            yield "                                    
                                    ";
            // line 566
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "isInTrialPeriod", [], "any", false, false, false, 566) && CoreExtension::getAttribute($this->env, $this->source, $context["company"], "trialEndsAt", [], "any", false, false, false, 566))) {
                // line 567
                yield "                                        <br>
                                        <span class=\"badge status-trial status-badge mt-1\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            Essai: ";
                // line 570
                yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "trialEndsAt", [], "any", false, false, false, 570));
                yield "
                                        </span>
                                    ";
            }
            // line 573
            yield "                                </td>
                                <td class=\"roles-column\">
                                    ";
            // line 575
            $context["roles"] = [];
            // line 576
            yield "                                    ";
            $context["active_users"] = 0;
            // line 577
            yield "                                    ";
            $context["inactive_users"] = 0;
            // line 578
            yield "                                    
                                    ";
            // line 579
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "users", [], "any", false, false, false, 579));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 580
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 580) && CoreExtension::getAttribute($this->env, $this->source, $context["user"], "subscriptionActive", [], "any", false, false, false, 580))) {
                    // line 581
                    yield "                                            ";
                    $context["active_users"] = ((isset($context["active_users"]) || array_key_exists("active_users", $context) ? $context["active_users"] : (function () { throw new RuntimeError('Variable "active_users" does not exist.', 581, $this->source); })()) + 1);
                    // line 582
                    yield "                                        ";
                } else {
                    // line 583
                    yield "                                            ";
                    $context["inactive_users"] = ((isset($context["inactive_users"]) || array_key_exists("inactive_users", $context) ? $context["inactive_users"] : (function () { throw new RuntimeError('Variable "inactive_users" does not exist.', 583, $this->source); })()) + 1);
                    // line 584
                    yield "                                        ";
                }
                // line 585
                yield "                                        
                                        ";
                // line 586
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 586));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 587
                    yield "                                            ";
                    if ((($context["role"] != "ROLE_USER") && !CoreExtension::inFilter($context["role"], (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 587, $this->source); })())))) {
                        // line 588
                        yield "                                                ";
                        $context["roles"] = Twig\Extension\CoreExtension::merge((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 588, $this->source); })()), [$context["role"]]);
                        // line 589
                        yield "                                            ";
                    }
                    // line 590
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 591
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 592
            yield "                                    
                                    <div class=\"d-flex flex-wrap gap-1 mb-1\">
                                        ";
            // line 594
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 594, $this->source); })()), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 595
                yield "                                            ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 596
                    yield "                                                <span class=\"badge role-badge role-admin\" title=\"Administrateur\">
                                                    <i class=\"bi bi-shield-check me-1\"></i>Admin
                                                </span>
                                            ";
                } elseif ((                // line 599
$context["role"] == "ROLE_MANAGER")) {
                    // line 600
                    yield "                                                <span class=\"badge role-badge role-manager\" title=\"Gestionnaire\">
                                                    <i class=\"bi bi-graph-up me-1\"></i>Manager
                                                </span>
                                            ";
                } elseif ((                // line 603
$context["role"] == "ROLE_STOCK_MANAGER")) {
                    // line 604
                    yield "                                                <span class=\"badge role-badge role-stock\" title=\"Responsable Stock\">
                                                    <i class=\"bi bi-box-seam me-1\"></i>Stock
                                                </span>
                                            ";
                } elseif ((                // line 607
$context["role"] == "ROLE_CASHIER")) {
                    // line 608
                    yield "                                                <span class=\"badge role-badge role-cashier\" title=\"Caissier\">
                                                    <i class=\"bi bi-cash-coin me-1\"></i>Caissier
                                                </span>
                                            ";
                }
                // line 612
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 613
            yield "                                    </div>
                                    
                                    ";
            // line 616
            yield "                                    <div class=\"d-flex align-items-center gap-2 mt-1\">
                                        ";
            // line 617
            if (((isset($context["active_users"]) || array_key_exists("active_users", $context) ? $context["active_users"] : (function () { throw new RuntimeError('Variable "active_users" does not exist.', 617, $this->source); })()) > 0)) {
                // line 618
                yield "                                            <small class=\"text-success\" title=\"Utilisateurs actifs\">
                                                <i class=\"bi bi-person-check-fill\"></i>
                                                ";
                // line 620
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_users"]) || array_key_exists("active_users", $context) ? $context["active_users"] : (function () { throw new RuntimeError('Variable "active_users" does not exist.', 620, $this->source); })()), "html", null, true);
                yield "
                                            </small>
                                        ";
            }
            // line 623
            yield "                                        
                                        ";
            // line 624
            if (((isset($context["inactive_users"]) || array_key_exists("inactive_users", $context) ? $context["inactive_users"] : (function () { throw new RuntimeError('Variable "inactive_users" does not exist.', 624, $this->source); })()) > 0)) {
                // line 625
                yield "                                            <small class=\"text-warning\" title=\"Utilisateurs inactifs\">
                                                <i class=\"bi bi-person-exclamation\"></i>
                                                ";
                // line 627
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_users"]) || array_key_exists("inactive_users", $context) ? $context["inactive_users"] : (function () { throw new RuntimeError('Variable "inactive_users" does not exist.', 627, $this->source); })()), "html", null, true);
                yield "
                                            </small>
                                        ";
            }
            // line 630
            yield "                                        
                                        <small class=\"text-muted\">
                                            <i class=\"bi bi-people\"></i>
                                            ";
            // line 633
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "users", [], "any", false, false, false, 633)), "html", null, true);
            yield " total
                                        </small>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"progress mb-2\" style=\"height: 5px; background-color: #e9ecef;\" 
                                        title=\"Produits: ";
            // line 639
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "products", [], "any", false, false, false, 639)), "html", null, true);
            yield "/";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentLimits", [], "any", false, false, false, 639), "max_products", [], "any", false, false, false, 639) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("Illimité") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentLimits", [], "any", false, false, false, 639), "max_products", [], "any", false, false, false, 639), "html", null, true)));
            yield "\">
                                        <div class=\"progress-bar bg-primary\" 
                                            style=\"width: ";
            // line 641
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "products", [], "any", false, false, false, 641)) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["company"], "currentLimits", [], "any", false, false, false, 641), "max_products", [], "any", false, false, false, 641)) * 100)), "html", null, true);
            yield "%; background: linear-gradient(90deg, #0d6efd, #0a58ca);\">
                                        </div>
                                    </div>
                                    <div class=\"d-flex justify-content-between small usage-counter\">
                                        <span class=\"custom-tooltip\" data-tooltip=\"Produits\">
                                            <i class=\"bi bi-box usage-icon\"></i>
                                            <span class=\"text-dark\">";
            // line 647
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "products", [], "any", false, false, false, 647)), "html", null, true);
            yield "</span>
                                        </span>
                                        <span class=\"custom-tooltip\" data-tooltip=\"Commandes\">
                                            <i class=\"bi bi-cart usage-icon\"></i>
                                            <span class=\"text-dark\">";
            // line 651
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "orders", [], "any", false, false, false, 651)), "html", null, true);
            yield "</span>
                                        </span>
                                        <span class=\"custom-tooltip\" data-tooltip=\"Catégories\">
                                            <i class=\"bi bi-tags usage-icon\"></i>
                                            <span class=\"text-dark\">";
            // line 655
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "categories", [], "any", false, false, false, 655)), "html", null, true);
            yield "</span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class=\"custom-tooltip text-dark\" 
                                          data-tooltip=\"Créé le ";
            // line 661
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "createdAt", [], "any", false, false, false, 661), "d/m/Y à H:i"), "html", null, true);
            yield "\">
                                        <i class=\"bi bi-calendar me-1 text-muted\"></i>
                                        ";
            // line 663
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "createdAt", [], "any", false, false, false, 663), "d/m/Y"), "html", null, true);
            yield "
                                    </span>
                                    <br>
                                    <small class=\"text-muted\">
                                        <i class=\"bi bi-clock me-1\"></i>
                                        ";
            // line 668
            yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "createdAt", [], "any", false, false, false, 668));
            yield "
                                    </small>
                                </td>
                                <td>
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 673
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 673)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-info\" 
                                           title=\"Voir détails\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 678
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 678)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-warning\"
                                           title=\"Modifier\">
                                            <i class=\"bi bi-pencil\"></i>
                                        </a>
                                        
                                        ";
            // line 685
            yield "                                        <input type=\"hidden\" id=\"toggle_token_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 685), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle"), "html", null, true);
            yield "\">
                                        <input type=\"hidden\" id=\"delete_token_";
            // line 686
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 686), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
            yield "\">
                                        
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-";
            // line 689
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 689)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
            yield " toggle-status-btn\"
                                                data-id=\"";
            // line 690
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 690), "html", null, true);
            yield "\"
                                                data-name=\"";
            // line 691
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 691), "html", null, true);
            yield "\"
                                                data-active=\"";
            // line 692
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 692)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\"
                                                data-bs-toggle=\"modal\"
                                                data-bs-target=\"#toggleStatusModal\"
                                                title=\"";
            // line 695
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 695)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                            <i class=\"bi bi-";
            // line 696
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["company"], "hmaActive", [], "any", false, false, false, 696)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggle-off") : ("toggle-on"));
            yield "\"></i>
                                        </button>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-danger delete-company-btn\"
                                                data-id=\"";
            // line 700
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 700), "html", null, true);
            yield "\"
                                                data-name=\"";
            // line 701
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 701), "html", null, true);
            yield "\"
                                                data-bs-toggle=\"modal\"
                                                data-bs-target=\"#deleteModal\"
                                                title=\"Supprimer\">
                                            <i class=\"bi bi-trash\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 710
        if (!$context['_iterated']) {
            // line 711
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"bi bi-building fs-1 text-muted d-block mb-3\"></i>
                                    <h5 class=\"text-muted\">Aucune entreprise trouvée</h5>
                                    <p class=\"text-muted mb-3\">Aucune entreprise ne correspond à vos critères de recherche.</p>
                                    <button class=\"btn btn-outline-primary\" onclick=\"clearFilters()\">
                                        <i class=\"bi bi-eraser me-1\"></i>
                                        Effacer les filtres
                                    </button>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 723
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        ";
        // line 729
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 729, $this->source); })())) > 0)) {
            // line 730
            yield "            <div class=\"card-footer bg-white py-3\">
                <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                    <div class=\"text-muted small\">
                        Affichage de ";
            // line 733
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 733, $this->source); })()), "getPaginationData", [], "any", false, false, false, 733), "firstItemNumber", [], "any", false, false, false, 733), "html", null, true);
            yield " 
                        à ";
            // line 734
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 734, $this->source); })()), "getPaginationData", [], "any", false, false, false, 734), "lastItemNumber", [], "any", false, false, false, 734), "html", null, true);
            yield " 
                        sur ";
            // line 735
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 735, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 735), "html", null, true);
            yield " entreprises
                    </div>
                    <div class=\"pagination-wrapper\">
                        ";
            // line 738
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 738, $this->source); })()));
            yield "
                    </div>
                    <div class=\"text-muted small\">
                        <i class=\"bi bi-arrow-up-down me-1\"></i>
                        ";
            // line 742
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 742, $this->source); })()), "getPaginationData", [], "any", false, false, false, 742), "totalCount", [], "any", false, false, false, 742), "html", null, true);
            yield " ligne(s) au total
                    </div>
                </div>
            </div>
        ";
        }
        // line 747
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

    // line 842
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

        // line 843
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
        const dateFrom = document.getElementById('dateFrom').value;
        const dateTo = document.getElementById('dateTo').value;
        
        let url = new URL(window.location.href);
        
        if (search) url.searchParams.set('search', search);
        else url.searchParams.delete('search');
        
        if (plan) url.searchParams.set('plan', plan);
        else url.searchParams.delete('plan');
        
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
        return array (  1352 => 843,  1339 => 842,  1235 => 747,  1227 => 742,  1220 => 738,  1214 => 735,  1210 => 734,  1206 => 733,  1201 => 730,  1199 => 729,  1191 => 723,  1174 => 711,  1172 => 710,  1158 => 701,  1154 => 700,  1147 => 696,  1143 => 695,  1137 => 692,  1133 => 691,  1129 => 690,  1125 => 689,  1117 => 686,  1110 => 685,  1101 => 678,  1093 => 673,  1085 => 668,  1077 => 663,  1072 => 661,  1063 => 655,  1056 => 651,  1049 => 647,  1040 => 641,  1033 => 639,  1024 => 633,  1019 => 630,  1013 => 627,  1009 => 625,  1007 => 624,  1004 => 623,  998 => 620,  994 => 618,  992 => 617,  989 => 616,  985 => 613,  979 => 612,  973 => 608,  971 => 607,  966 => 604,  964 => 603,  959 => 600,  957 => 599,  952 => 596,  949 => 595,  945 => 594,  941 => 592,  935 => 591,  929 => 590,  926 => 589,  923 => 588,  920 => 587,  916 => 586,  913 => 585,  910 => 584,  907 => 583,  904 => 582,  901 => 581,  898 => 580,  894 => 579,  891 => 578,  888 => 577,  885 => 576,  883 => 575,  879 => 573,  873 => 570,  868 => 567,  866 => 566,  863 => 565,  856 => 560,  849 => 555,  846 => 554,  842 => 551,  836 => 548,  830 => 544,  828 => 543,  825 => 542,  819 => 540,  813 => 537,  807 => 535,  805 => 534,  800 => 532,  794 => 530,  792 => 529,  787 => 527,  781 => 525,  779 => 524,  774 => 522,  768 => 520,  765 => 519,  759 => 514,  755 => 512,  747 => 510,  745 => 509,  736 => 505,  726 => 498,  722 => 497,  719 => 496,  713 => 493,  710 => 492,  704 => 489,  699 => 488,  697 => 487,  690 => 483,  684 => 481,  679 => 480,  650 => 454,  639 => 445,  630 => 441,  627 => 440,  624 => 439,  617 => 435,  614 => 434,  611 => 433,  604 => 429,  601 => 428,  598 => 427,  591 => 423,  587 => 421,  585 => 420,  566 => 404,  560 => 401,  553 => 397,  549 => 396,  545 => 395,  541 => 394,  533 => 389,  514 => 373,  496 => 358,  478 => 343,  460 => 328,  437 => 310,  426 => 304,  412 => 293,  402 => 285,  389 => 284,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/hma_service/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des entreprises{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* Variables */
    :root {
        --primary: #667eea;
        --secondary: #764ba2;
        --success: #28a745;
        --danger: #dc3545;
        --warning: #ffc107;
        --info: #17a2b8;
    }

    /* Styles pour les cartes de statistiques */
    .stat-card {
        transition: transform 0.2s;
        cursor: pointer;
        border-left: 4px solid transparent;
        border-radius: 12px;
        overflow: hidden;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .stat-card.total { border-left-color: var(--primary); }
    .stat-card.active { border-left-color: var(--success); }
    .stat-card.inactive { border-left-color: var(--danger); }
    .stat-card.trial { border-left-color: var(--warning); }
    
    /* Styles pour les logos */
    .company-logo {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 8px;
    }
    .company-initials {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
    }
    
    /* Badges de filtre */
    .filter-badge {
        cursor: pointer;
        transition: all 0.2s;
    }
    .filter-badge:hover {
        opacity: 0.8;
        transform: scale(1.05);
    }
    
    /* SCROLLABLE TABLEAU */
    .table-responsive {
        max-height: 600px;
        overflow-y: auto;
        border-radius: 8px;
        scrollbar-width: thin;
        scrollbar-color: #c0c0c0 #f8f9fa;
    }
    
    .table-responsive::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    .table-responsive::-webkit-scrollbar-track {
        background: #f8f9fa;
        border-radius: 4px;
    }
    
    .table-responsive::-webkit-scrollbar-thumb {
        background: #c0c0c0;
        border-radius: 4px;
    }
    
    .table-responsive::-webkit-scrollbar-thumb:hover {
        background: #a0a0a0;
    }
    
    .table thead th {
        position: sticky;
        top: 0;
        background-color: #f8f9fa;
        z-index: 10;
        border-bottom: 2px solid #dee2e6;
        box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.1);
    }
    
    /* Icônes circulaires pour modals */
    .icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Style pour les rôles */
    .role-badge {
        font-size: 0.7rem;
        padding: 0.2rem 0.4rem;
        margin-right: 2px;
        display: inline-block;
        font-weight: 500;
        border-radius: 4px;
    }
    
    .role-badge.role-admin {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    .role-badge.role-manager {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .role-badge.role-stock {
        background: linear-gradient(135deg, #ffc107 0%, #ffca2c 100%);
        color: #212529;
    }
    .role-badge.role-cashier {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
        color: white;
    }
    .role-badge.role-user {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }
    
    /* Style pour les plans */
    .plan-badge {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        font-weight: 500;
        border-radius: 50px;
    }
    
    .plan-trial {
        background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        color: white;
    }
    .plan-freemium {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }
    .plan-basic {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .plan-premium {
        background: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%);
        color: white;
    }
    
    /* Style pour le statut */
    .status-badge {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        font-weight: 500;
        border-radius: 50px;
    }
    
    .status-active {
        background: linear-gradient(135deg, #28a745 0%, #218838 100%);
        color: white;
    }
    
    .status-inactive {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    
    .status-trial {
        background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        color: #212529;
    }
    
    /* Style pour la colonne des rôles */
    .roles-column {
        max-width: 150px;
        min-width: 120px;
    }
    
    /* Espacement pour les actions */
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
    }
    
    /* Tooltip personnalisé */
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
        border-radius: 4px;
        font-size: 12px;
        white-space: nowrap;
        z-index: 1000;
        pointer-events: none;
    }
    
    /* Style pour les compteurs d'utilisation */
    .usage-counter {
        font-size: 0.75rem;
        color: #495057;
    }
    
    .usage-icon {
        color: #6c757d;
        margin-right: 2px;
    }
    
    .text-dark-strong {
        color: #212529 !important;
        font-weight: 500;
    }
    
    .table td {
        vertical-align: middle;
        color: #212529;
    }

    /* ✅ NOTIFICATIONS */
    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 1rem 1.5rem;
        background: white;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        z-index: 9999;
        transform: translateX(400px);
        transition: transform 0.3s ease;
        border-left: 4px solid;
        min-width: 300px;
    }

    .notification.show {
        transform: translateX(0);
    }

    .notification-success {
        border-left-color: #28a745;
    }

    .notification-success i {
        color: #28a745;
    }

    .notification-error {
        border-left-color: #dc3545;
    }

    .notification-error i {
        color: #dc3545;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3 text-dark\">
            <i class=\"bi bi-building me-2 text-primary\"></i>
            Gestion des entreprises
        </h1>
        <div>
            <a href=\"{{ path('app_super_admin_hma_service_new') }}\" class=\"btn btn-primary me-2\">
                <i class=\"bi bi-plus-circle me-1\"></i>
                Nouvelle entreprise
            </a>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-download me-1\"></i>
                    Exporter
                </button>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_super_admin_hma_service_export', {format: 'excel'}) }}?ids={{ app.request.get('ids') }}\">
                            <i class=\"bi bi-file-excel me-2 text-success\"></i>
                            Excel
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_super_admin_hma_service_export', {format: 'csv'}) }}?ids={{ app.request.get('ids') }}\">
                            <i class=\"bi bi-filetype-csv me-2 text-info\"></i>
                            CSV
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card stat-card total\" onclick=\"filterByStatus('all')\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"text-muted mb-1\">Total</h6>
                            <h3 class=\"mb-0 text-dark\">{{ stats.total }}</h3>
                        </div>
                        <div class=\"bg-primary bg-opacity-10 p-3 rounded\">
                            <i class=\"bi bi-building fs-3 text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card active\" onclick=\"filterByStatus('active')\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"text-muted mb-1\">Actives</h6>
                            <h3 class=\"mb-0 text-success\">{{ stats.active }}</h3>
                        </div>
                        <div class=\"bg-success bg-opacity-10 p-3 rounded\">
                            <i class=\"bi bi-check-circle fs-3 text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card inactive\" onclick=\"filterByStatus('inactive')\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"text-muted mb-1\">Inactives</h6>
                            <h3 class=\"mb-0 text-danger\">{{ stats.inactive }}</h3>
                        </div>
                        <div class=\"bg-danger bg-opacity-10 p-3 rounded\">
                            <i class=\"bi bi-x-circle fs-3 text-danger\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card trial\" onclick=\"filterByStatus('trial')\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"text-muted mb-1\">Période d'essai</h6>
                            <h3 class=\"mb-0 text-warning\">{{ stats.trial }}</h3>
                        </div>
                        <div class=\"bg-warning bg-opacity-10 p-3 rounded\">
                            <i class=\"bi bi-hourglass-split fs-3 text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres rapides -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <div class=\"row g-3\">
                <div class=\"col-md-4\">
                    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher (nom, email, n° abonnement)...\" value=\"{{ filters.search }}\">
                </div>
                <div class=\"col-md-2\">
                    <select id=\"planFilter\" class=\"form-select\">
                        <option value=\"\">Tous les plans</option>
                        <option value=\"trial\" {{ filters.plan == 'trial' ? 'selected' : '' }}>Essai gratuit</option>
                        <option value=\"freemium\" {{ filters.plan == 'freemium' ? 'selected' : '' }}>Freemium</option>
                        <option value=\"basic\" {{ filters.plan == 'basic' ? 'selected' : '' }}>Basic</option>
                        <option value=\"premium\" {{ filters.plan == 'premium' ? 'selected' : '' }}>Premium</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"{{ filters.date_from }}\" placeholder=\"Date début\">
                </div>
                <div class=\"col-md-2\">
                    <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"{{ filters.date_to }}\" placeholder=\"Date fin\">
                </div>
                <div class=\"col-md-2 d-flex gap-2\">
                    <button class=\"btn btn-primary w-50\" onclick=\"applyFilters()\">
                        <i class=\"bi bi-funnel me-1\"></i>
                        Filtrer
                    </button>
                    <button class=\"btn btn-outline-secondary w-50\" onclick=\"clearFilters()\">
                        <i class=\"bi bi-eraser me-1\"></i>
                        Effacer
                    </button>
                </div>
            </div>

            <!-- Badges de filtres actifs -->
            <div class=\"mt-3 d-flex gap-2 flex-wrap\">
                {% if filters.search %}
                    <span class=\"badge bg-primary filter-badge\" onclick=\"removeFilter('search')\">
                        <i class=\"bi bi-search me-1\"></i>
                        {{ filters.search }}
                        <i class=\"bi bi-x ms-1\"></i>
                    </span>
                {% endif %}
                {% if filters.status %}
                    <span class=\"badge bg-primary filter-badge\" onclick=\"removeFilter('status')\">
                        Statut: {{ filters.status == 'active' ? 'Actives' : (filters.status == 'inactive' ? 'Inactives' : 'Essai') }}
                        <i class=\"bi bi-x ms-1\"></i>
                    </span>
                {% endif %}
                {% if filters.plan %}
                    <span class=\"badge bg-primary filter-badge\" onclick=\"removeFilter('plan')\">
                        Plan: {{ filters.plan }}
                        <i class=\"bi bi-x ms-1\"></i>
                    </span>
                {% endif %}
                {% if filters.date_from or filters.date_to %}
                    <span class=\"badge bg-primary filter-badge\" onclick=\"removeFilter('date_from'); removeFilter('date_to')\">
                        Période: {{ filters.date_from ?: '...' }} → {{ filters.date_to ?: '...' }}
                        <i class=\"bi bi-x ms-1\"></i>
                    </span>
                {% endif %}
            </div>
        </div>
    </div>

    <!-- Tableau des entreprises avec scroll -->
    <div class=\"card\">
        <div class=\"card-header bg-white d-flex justify-content-between align-items-center py-3\">
            <h5 class=\"mb-0 text-dark\">
                <i class=\"bi bi-building me-2 text-primary\"></i>
                Liste des entreprises ({{ pagination.getTotalItemCount }})
            </h5>
            <div class=\"text-muted small\">
                <i class=\"bi bi-arrow-up-down me-1\"></i>
                Utilisez le scroll pour voir plus de lignes
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th width=\"40\">
                                <input type=\"checkbox\" id=\"selectAll\" class=\"form-check-input\">
                            </th>
                            <th>Entreprise</th>
                            <th>Contact</th>
                            <th>Plan</th>
                            <th>Statut</th>
                            <th class=\"roles-column\">Rôles</th>
                            <th>Utilisation</th>
                            <th>Création</th>
                            <th style=\"min-width: 120px;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for company in pagination %}
                            <tr id=\"company-row-{{ company.id }}\">
                                <td>
                                    <input type=\"checkbox\" class=\"row-checkbox form-check-input\" value=\"{{ company.id }}\">
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        {% if company.logo %}
                                            <img src=\"{{ asset('uploads/logos/' ~ company.logo) }}\" 
                                                 alt=\"{{ company.companyName }}\" 
                                                 class=\"company-logo me-2\">
                                        {% else %}
                                            <div class=\"company-initials me-2\">
                                                {{ company.companyName|first|upper }}
                                            </div>
                                        {% endif %}
                                        <div>
                                            <strong class=\"text-dark\">{{ company.companyName }}</strong><br>
                                            <small class=\"text-muted\">#{{ company.subscriptionNumber }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <i class=\"bi bi-envelope me-1 text-muted\" title=\"Email\"></i>
                                        <a href=\"mailto:{{ company.email }}\" class=\"text-decoration-none text-dark\">{{ company.email }}</a>
                                        <br>
                                        <small>
                                            <i class=\"bi bi-telephone me-1 text-muted\" title=\"Téléphone\"></i>
                                            {% if company.phone %}
                                                <a href=\"tel:{{ company.phone }}\" class=\"text-decoration-none text-dark\">{{ company.phone }}</a>
                                            {% else %}
                                                <span class=\"text-muted\">Non renseigné</span>
                                            {% endif %}
                                        </small>
                                    </div>
                                </td>
                                <td>
                                    {# Badge du plan avec couleur #}
                                    {% if company.currentPlan == 'trial' %}
                                        <span class=\"badge plan-trial plan-badge\" title=\"Plan: {{ company.currentPlanLabel }}\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            {{ company.currentPlanLabel }}
                                        </span>
                                    {% elseif company.currentPlan == 'freemium' %}
                                        <span class=\"badge plan-freemium plan-badge\" title=\"Plan: {{ company.currentPlanLabel }}\">
                                            <i class=\"bi bi-gift me-1\"></i>
                                            {{ company.currentPlanLabel }}
                                        </span>
                                    {% elseif company.currentPlan == 'basic' %}
                                        <span class=\"badge plan-basic plan-badge\" title=\"Plan: {{ company.currentPlanLabel }}\">
                                            <i class=\"bi bi-rocket me-1\"></i>
                                            {{ company.currentPlanLabel }}
                                        </span>
                                    {% elseif company.currentPlan == 'premium' %}
                                        <span class=\"badge plan-premium plan-badge\" title=\"Plan: {{ company.currentPlanLabel }}\">
                                            <i class=\"bi bi-stars me-1\"></i>
                                            {{ company.currentPlanLabel }}
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-secondary plan-badge\">{{ company.currentPlanLabel }}</span>
                                    {% endif %}
                                    
                                    {% if company.subscriptionEndsAt %}
                                        <br>
                                        <small class=\"text-muted custom-tooltip\" 
                                               data-tooltip=\"Fin d'abonnement\">
                                            <i class=\"bi bi-calendar me-1\"></i>
                                            {{ company.subscriptionEndsAt|date('d/m/Y') }}
                                        </small>
                                    {% endif %}
                                </td>
                                <td class=\"status-cell\">
                                    {# Badge du statut avec couleur #}
                                    {% if company.hmaActive %}
                                        <span class=\"badge status-active status-badge\">
                                            <i class=\"bi bi-check-circle me-1\"></i>
                                            Active
                                        </span>
                                    {% else %}
                                        <span class=\"badge status-inactive status-badge\">
                                            <i class=\"bi bi-x-circle me-1\"></i>
                                            Désactivée
                                        </span>
                                    {% endif %}
                                    
                                    {% if company.isInTrialPeriod and company.trialEndsAt %}
                                        <br>
                                        <span class=\"badge status-trial status-badge mt-1\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            Essai: {{ company.trialEndsAt|time_diff }}
                                        </span>
                                    {% endif %}
                                </td>
                                <td class=\"roles-column\">
                                    {% set roles = [] %}
                                    {% set active_users = 0 %}
                                    {% set inactive_users = 0 %}
                                    
                                    {% for user in company.users %}
                                        {% if user.isActive and user.subscriptionActive %}
                                            {% set active_users = active_users + 1 %}
                                        {% else %}
                                            {% set inactive_users = inactive_users + 1 %}
                                        {% endif %}
                                        
                                        {% for role in user.roles %}
                                            {% if role != 'ROLE_USER' and role not in roles %}
                                                {% set roles = roles|merge([role]) %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endfor %}
                                    
                                    <div class=\"d-flex flex-wrap gap-1 mb-1\">
                                        {% for role in roles|slice(0, 3) %}
                                            {% if role == 'ROLE_ADMIN' %}
                                                <span class=\"badge role-badge role-admin\" title=\"Administrateur\">
                                                    <i class=\"bi bi-shield-check me-1\"></i>Admin
                                                </span>
                                            {% elseif role == 'ROLE_MANAGER' %}
                                                <span class=\"badge role-badge role-manager\" title=\"Gestionnaire\">
                                                    <i class=\"bi bi-graph-up me-1\"></i>Manager
                                                </span>
                                            {% elseif role == 'ROLE_STOCK_MANAGER' %}
                                                <span class=\"badge role-badge role-stock\" title=\"Responsable Stock\">
                                                    <i class=\"bi bi-box-seam me-1\"></i>Stock
                                                </span>
                                            {% elseif role == 'ROLE_CASHIER' %}
                                                <span class=\"badge role-badge role-cashier\" title=\"Caissier\">
                                                    <i class=\"bi bi-cash-coin me-1\"></i>Caissier
                                                </span>
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                    
                                    {# Indicateurs de statut des utilisateurs #}
                                    <div class=\"d-flex align-items-center gap-2 mt-1\">
                                        {% if active_users > 0 %}
                                            <small class=\"text-success\" title=\"Utilisateurs actifs\">
                                                <i class=\"bi bi-person-check-fill\"></i>
                                                {{ active_users }}
                                            </small>
                                        {% endif %}
                                        
                                        {% if inactive_users > 0 %}
                                            <small class=\"text-warning\" title=\"Utilisateurs inactifs\">
                                                <i class=\"bi bi-person-exclamation\"></i>
                                                {{ inactive_users }}
                                            </small>
                                        {% endif %}
                                        
                                        <small class=\"text-muted\">
                                            <i class=\"bi bi-people\"></i>
                                            {{ company.users|length }} total
                                        </small>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"progress mb-2\" style=\"height: 5px; background-color: #e9ecef;\" 
                                        title=\"Produits: {{ company.products|length }}/{{ company.currentLimits.max_products == constant('PHP_INT_MAX') ? 'Illimité' : company.currentLimits.max_products }}\">
                                        <div class=\"progress-bar bg-primary\" 
                                            style=\"width: {{ (company.products|length / company.currentLimits.max_products * 100)|round }}%; background: linear-gradient(90deg, #0d6efd, #0a58ca);\">
                                        </div>
                                    </div>
                                    <div class=\"d-flex justify-content-between small usage-counter\">
                                        <span class=\"custom-tooltip\" data-tooltip=\"Produits\">
                                            <i class=\"bi bi-box usage-icon\"></i>
                                            <span class=\"text-dark\">{{ company.products|length }}</span>
                                        </span>
                                        <span class=\"custom-tooltip\" data-tooltip=\"Commandes\">
                                            <i class=\"bi bi-cart usage-icon\"></i>
                                            <span class=\"text-dark\">{{ company.orders|length }}</span>
                                        </span>
                                        <span class=\"custom-tooltip\" data-tooltip=\"Catégories\">
                                            <i class=\"bi bi-tags usage-icon\"></i>
                                            <span class=\"text-dark\">{{ company.categories|length }}</span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class=\"custom-tooltip text-dark\" 
                                          data-tooltip=\"Créé le {{ company.createdAt|date('d/m/Y à H:i') }}\">
                                        <i class=\"bi bi-calendar me-1 text-muted\"></i>
                                        {{ company.createdAt|date('d/m/Y') }}
                                    </span>
                                    <br>
                                    <small class=\"text-muted\">
                                        <i class=\"bi bi-clock me-1\"></i>
                                        {{ company.createdAt|time_diff }}
                                    </small>
                                </td>
                                <td>
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"{{ path('app_super_admin_hma_service_show', {'id': company.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-info\" 
                                           title=\"Voir détails\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_super_admin_hma_service_edit', {'id': company.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-warning\"
                                           title=\"Modifier\">
                                            <i class=\"bi bi-pencil\"></i>
                                        </a>
                                        
                                        {# ✅ CHAMPS CACHÉS POUR LES TOKENS CSRF #}
                                        <input type=\"hidden\" id=\"toggle_token_{{ company.id }}\" value=\"{{ csrf_token('toggle') }}\">
                                        <input type=\"hidden\" id=\"delete_token_{{ company.id }}\" value=\"{{ csrf_token('delete') }}\">
                                        
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-{{ company.hmaActive ? 'danger' : 'success' }} toggle-status-btn\"
                                                data-id=\"{{ company.id }}\"
                                                data-name=\"{{ company.companyName }}\"
                                                data-active=\"{{ company.hmaActive ? 'true' : 'false' }}\"
                                                data-bs-toggle=\"modal\"
                                                data-bs-target=\"#toggleStatusModal\"
                                                title=\"{{ company.hmaActive ? 'Désactiver' : 'Activer' }}\">
                                            <i class=\"bi bi-{{ company.hmaActive ? 'toggle-off' : 'toggle-on' }}\"></i>
                                        </button>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-danger delete-company-btn\"
                                                data-id=\"{{ company.id }}\"
                                                data-name=\"{{ company.companyName }}\"
                                                data-bs-toggle=\"modal\"
                                                data-bs-target=\"#deleteModal\"
                                                title=\"Supprimer\">
                                            <i class=\"bi bi-trash\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"bi bi-building fs-1 text-muted d-block mb-3\"></i>
                                    <h5 class=\"text-muted\">Aucune entreprise trouvée</h5>
                                    <p class=\"text-muted mb-3\">Aucune entreprise ne correspond à vos critères de recherche.</p>
                                    <button class=\"btn btn-outline-primary\" onclick=\"clearFilters()\">
                                        <i class=\"bi bi-eraser me-1\"></i>
                                        Effacer les filtres
                                    </button>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        {% if pagination|length > 0 %}
            <div class=\"card-footer bg-white py-3\">
                <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                    <div class=\"text-muted small\">
                        Affichage de {{ pagination.getPaginationData.firstItemNumber }} 
                        à {{ pagination.getPaginationData.lastItemNumber }} 
                        sur {{ pagination.getTotalItemCount }} entreprises
                    </div>
                    <div class=\"pagination-wrapper\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
                    <div class=\"text-muted small\">
                        <i class=\"bi bi-arrow-up-down me-1\"></i>
                        {{ pagination.getPaginationData.totalCount }} ligne(s) au total
                    </div>
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
        const dateFrom = document.getElementById('dateFrom').value;
        const dateTo = document.getElementById('dateTo').value;
        
        let url = new URL(window.location.href);
        
        if (search) url.searchParams.set('search', search);
        else url.searchParams.delete('search');
        
        if (plan) url.searchParams.set('plan', plan);
        else url.searchParams.delete('plan');
        
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
