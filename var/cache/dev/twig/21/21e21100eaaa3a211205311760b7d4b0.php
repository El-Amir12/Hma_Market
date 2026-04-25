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

/* sale/orders/index.html.twig */
class __TwigTemplate_de0e6ac24bf304e4e329f7acc55d42f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/index.html.twig"));

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

        yield "Historique des ventes - HMA Market";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    :root { 
        --primary-color: #0463f1; 
        --success-color: #10b981; 
        --danger-color: #ef4444; 
        --warning-color: #f59e0b; 
        --info-color: #3b82f6; 
    }
    
    /* Cartes statistiques - TOUTES IDENTIQUES avec fond blanc pur */
    .stats-card {
        background: #ffffff !important;
        border: 1px solid #e5e7eb !important;
        border-radius: 16px !important;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }
    
    .stats-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
    }
    
    .stats-card .card-body {
        padding: 1rem;
        background: #ffffff !important;
    }
    
    .stats-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
        line-height: 1.2;
    }
    
    .stats-card h6 {
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
    }
    
    /* Icônes dans les cartes - plus visibles */
    .stats-card i {
        opacity: 0.8;
        transition: opacity 0.2s;
    }
    
    .stats-card:hover i {
        opacity: 1;
    }
    
    /* Couleurs des cartes */
    .stats-card .text-primary { color: var(--primary-color) !important; }
    .stats-card .text-success { color: var(--success-color) !important; }
    .stats-card .text-info { color: var(--info-color) !important; }
    .stats-card .text-warning { color: var(--warning-color) !important; }
    .stats-card .text-danger { color: var(--danger-color) !important; }
    .stats-card .text-secondary { color: #6c757d !important; }
    .stats-card .text-dark { color: #1f2937 !important; }
    .stats-card .text-cyan { color: #06b6d4 !important; }
    .stats-card .text-emerald { color: #10b981 !important; }
    .stats-card .text-gray { color: #6b7280 !important; }
    .stats-card .text-purple { color: #8b5cf6 !important; }
    .stats-card .text-rose { color: #f43f5e !important; }
    
    /* Section filtres */
    .filter-section {
        background: white;
        border-radius: 16px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        border: 1px solid #e5e7eb;
    }
    
    /* Lignes du tableau */
    .table-order-row {
        cursor: pointer;
        transition: background-color 0.2s ease;
    }
    
    .table-order-row:hover {
        background-color: #f8f9fa !important;
    }
    
    /* Badges de paiement */
    .badge-payment-paid { 
        background-color: var(--success-color) !important; 
        color: white !important;
    }
    .badge-payment-partial { 
        background-color: var(--warning-color) !important; 
        color: white !important;
    }
    .badge-status-completed { 
        background-color: var(--success-color) !important; 
        color: white !important;
    }
    .badge-status-cancelled { 
        background-color: var(--danger-color) !important; 
        color: white !important;
    }
    .badge-status-refunded { 
        background-color: #8b5cf6 !important; 
        color: white !important;
    }
    .badge-status-disabled { 
        background-color: #6c757d !important; 
        color: white !important;
    }
    
    /* Message d'information */
    .filter-info {
        background: #e0f2fe !important;
        border-left: 4px solid #0284c7 !important;
        padding: 0.75rem 1rem !important;
        border-radius: 8px !important;
        margin-bottom: 1rem !important;
        color: #0c4a6e !important;
    }
    
    .filter-info .btn-outline-secondary {
        border-color: #0284c7;
        color: #0284c7;
    }
    
    .filter-info .btn-outline-secondary:hover {
        background: #0284c7;
        color: white;
    }
    
    /* Carte de contact */
    .contact-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 16px;
        padding: 1rem;
        margin-bottom: 1.5rem;
        color: white;
        transition: transform 0.2s ease;
    }
    
    .contact-card:hover {
        transform: translateY(-2px);
    }
    
    /* En-tête du tableau */
    .table-header-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
    /* Section Retours & Avoirs */
    .returns-section {
        margin-top: 2rem;
        margin-bottom: 1.5rem;
    }
    .returns-card {
        background: white;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
    }
    .returns-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
        padding: 1rem 1.25rem;
    }
    .return-stat-box {
        text-align: center;
        padding: 1rem;
        border-right: 1px solid #e5e7eb;
    }
    .return-stat-box:last-child {
        border-right: none;
    }
    .return-stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
    }
    .return-stat-value {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0;
    }
    .return-stat-unit {
        font-size: 0.7rem;
        color: #64748b;
        margin-left: 0.25rem;
    }
    .return-stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .filter-section .row > div {
            margin-bottom: 1rem;
        }
        
        .stats-card h3 {
            font-size: 1.2rem;
        }
        
        .stats-card h6 {
            font-size: 0.7rem;
        }
        
        .table-header-actions {
            margin-top: 0.5rem;
        }
        
        .stats-card .card-body {
            padding: 0.75rem;
        }
        
        .return-stat-box {
            border-right: none;
            border-bottom: 1px solid #e5e7eb;
        }
        .return-stat-box:last-child {
            border-bottom: none;
        }
    }
    
    /* Petits écrans (tablettes) */
    @media (max-width: 992px) and (min-width: 769px) {
        .stats-card h3 {
            font-size: 1.3rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 253
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

        // line 254
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 261
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-shopping-cart me-1\"></i> Ventes
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-shopping-cart me-2 text-primary\"></i>
                Historique des ventes
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Consultez et analysez toutes vos ventes
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-export me-1\"></i> Exporter
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 286, $this->source); })()), "request", [], "any", false, false, false, 286), "query", [], "any", false, false, false, 286), "all", [], "any", false, false, false, 286)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "request", [], "any", false, false, false, 291), "query", [], "any", false, false, false, 291), "all", [], "any", false, false, false, 291)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"";
        // line 297
        yield (((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 297, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_sale_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_index")));
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle vente
            </a>
        </div>
    </div>

    <!-- Message contact Super Admin -->
    <a href=\"";
        // line 304
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_contact_super_admin");
        yield "\" class=\"text-decoration-none\">
        <div class=\"contact-card\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                <div>
                    <i class=\"fas fa-chart-line fa-2x me-3 float-start\"></i>
                    <h5 class=\"mb-1\">Analyse approfondie des données</h5>
                    <p class=\"mb-0 opacity-75\">Pour une analyse détaillée de vos ventes, contactez notre équipe Super Admin</p>
                </div>
                <div class=\"btn btn-light\">
                    <i class=\"fab fa-whatsapp me-2 text-success\"></i> Contacter le support
                </div>
            </div>
        </div>
    </a>

    <!-- 12 Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <!-- Carte 1: Chiffre d'affaires -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-primary mb-1\" style=\"font-weight: 600;\">Chiffre d'affaires</h6>
                            <h3 class=\"mb-0 text-primary\" style=\"font-weight: 700;\">";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_sales", [], "any", true, true, false, 328)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 328, $this->source); })()), "total_sales", [], "any", false, false, false, 328), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x\" style=\"color: #0463f1; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 2: Nombre de ventes -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-success mb-1\" style=\"font-weight: 600;\">Nombre de ventes</h6>
                            <h3 class=\"mb-0 text-success\" style=\"font-weight: 700;\">";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", true, true, false, 344)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 344, $this->source); })()), "total_orders", [], "any", false, false, false, 344), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-receipt fa-2x\" style=\"color: #10b981; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 3: Panier moyen -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-info mb-1\" style=\"font-weight: 600;\">Panier moyen</h6>
                            <h3 class=\"mb-0 text-info\" style=\"font-weight: 700;\">";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_basket", [], "any", true, true, false, 360)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 360, $this->source); })()), "average_basket", [], "any", false, false, false, 360), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA/vente</small>
                        </div>
                        <i class=\"fas fa-shopping-basket fa-2x\" style=\"color: #3b82f6; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 4: Clients uniques -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-warning mb-1\" style=\"font-weight: 600;\">Clients uniques</h6>
                            <h3 class=\"mb-0 text-warning\" style=\"font-weight: 700;\">";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "unique_customers", [], "any", true, true, false, 376)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 376, $this->source); })()), "unique_customers", [], "any", false, false, false, 376), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">personnes</small>
                        </div>
                        <i class=\"fas fa-users fa-2x\" style=\"color: #f59e0b; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 5: Ticket moyen -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-danger mb-1\" style=\"font-weight: 600;\">Ticket moyen</h6>
                            <h3 class=\"mb-0 text-danger\" style=\"font-weight: 700;\">";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_ticket", [], "any", true, true, false, 392)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 392, $this->source); })()), "average_ticket", [], "any", false, false, false, 392), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA/client</small>
                        </div>
                        <i class=\"fas fa-ticket-alt fa-2x\" style=\"color: #ef4444; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 6: Vente max -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-secondary mb-1\" style=\"font-weight: 600;\">Vente max</h6>
                            <h3 class=\"mb-0 text-secondary\" style=\"font-weight: 700;\">";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "max_sale", [], "any", true, true, false, 408)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 408, $this->source); })()), "max_sale", [], "any", false, false, false, 408), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-arrow-up fa-2x\" style=\"color: #6b7280; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 7: Vente min -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #374151;\">Vente min</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #374151;\">";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "min_sale", [], "any", true, true, false, 424)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 424, $this->source); })()), "min_sale", [], "any", false, false, false, 424), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-arrow-down fa-2x\" style=\"color: #6b7280; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 8: Articles vendus -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #0d9488;\">Articles vendus</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #0d9488;\">";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_items", [], "any", true, true, false, 440)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 440, $this->source); })()), "total_items", [], "any", false, false, false, 440), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">unités</small>
                        </div>
                        <i class=\"fas fa-boxes fa-2x\" style=\"color: #0d9488; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 9: Ventes actives -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #10b981;\">Ventes actives</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #10b981;\">";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_orders", [], "any", true, true, false, 456)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 456, $this->source); })()), "active_orders", [], "any", false, false, false, 456), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-check-circle fa-2x\" style=\"color: #10b981; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 10: Ventes désactivées -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #6b7280;\">Ventes désactivées</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #6b7280;\">";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_orders", [], "any", true, true, false, 472)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 472, $this->source); })()), "disabled_orders", [], "any", false, false, false, 472), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-ban fa-2x\" style=\"color: #6b7280; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 11: Taux désactivation -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #8b5cf6;\">Taux désactivation</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #8b5cf6;\">";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_percentage", [], "any", true, true, false, 488)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 488, $this->source); })()), "disabled_percentage", [], "any", false, false, false, 488), 0)) : (0)), 1, ",", " "), "html", null, true);
        yield "%</h3>
                            <small class=\"text-muted\">des ventes</small>
                        </div>
                        <i class=\"fas fa-chart-pie fa-2x\" style=\"color: #8b5cf6; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 12: Ventes annulées -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #f43f5e;\">Ventes annulées</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #f43f5e;\">";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "cancelled_orders", [], "any", true, true, false, 504)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 504, $this->source); })()), "cancelled_orders", [], "any", false, false, false, 504), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-times-circle fa-2x\" style=\"color: #f43f5e; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Message info filtres -->
    ";
        // line 515
        if (((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 515, $this->source); })()), "date_from", [], "any", false, false, false, 515) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 515, $this->source); })()), "date_to", [], "any", false, false, false, 515)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 515, $this->source); })()), "status", [], "any", false, false, false, 515)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 515, $this->source); })()), "payment_method", [], "any", false, false, false, 515)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 515, $this->source); })()), "user_id", [], "any", false, false, false, 515)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 515, $this->source); })()), "min_amount", [], "any", false, false, false, 515)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 515, $this->source); })()), "max_amount", [], "any", false, false, false, 515))) {
            // line 516
            yield "    <div class=\"filter-info\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-info-circle me-2\"></i>
                <strong>Filtres actifs :</strong> Les statistiques ci-dessus sont basées sur les filtres appliqués.
            </div>
            <a href=\"";
            // line 522
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                <i class=\"fas fa-times me-1\"></i> Effacer les filtres
            </a>
        </div>
    </div>
    ";
        }
        // line 528
        yield "
    <!-- Section Retours & Avoirs (bien organisée) -->
    <div class=\"returns-section\">
        <div class=\"returns-card\">
            <div class=\"card-header\">
                <h5 class=\"mb-0\">
                    <i class=\"fas fa-undo-alt me-2 text-warning\"></i>
                    Retours & Avoirs
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"row g-0\">
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"return-stat-box\">
                            <div class=\"return-stat-label\">
                                <i class=\"fas fa-chart-line me-1\"></i> Total retours
                            </div>
                            <div class=\"return-stat-value text-primary\">
                                ";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_returns", [], "any", true, true, false, 546)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 546, $this->source); })()), "total_returns", [], "any", false, false, false, 546), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"return-stat-sub text-muted\">demandes</div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"return-stat-box\">
                            <div class=\"return-stat-label\">
                                <i class=\"fas fa-clock me-1\"></i> En attente
                            </div>
                            <div class=\"return-stat-value text-warning\">
                                ";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "pending", [], "any", true, true, false, 557)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 557, $this->source); })()), "pending", [], "any", false, false, false, 557), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"return-stat-sub text-muted\">à valider</div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"return-stat-box\">
                            <div class=\"return-stat-label\">
                                <i class=\"fas fa-check-circle me-1\"></i> Approuvés
                            </div>
                            <div class=\"return-stat-value text-info\">
                                ";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "approved", [], "any", true, true, false, 568)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 568, $this->source); })()), "approved", [], "any", false, false, false, 568), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"return-stat-sub text-muted\">en attente remb.</div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"return-stat-box\">
                            <div class=\"return-stat-label\">
                                <i class=\"fas fa-money-bill-wave me-1\"></i> Remboursés
                            </div>
                            <div class=\"return-stat-value text-success\">
                                ";
        // line 579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "completed", [], "any", true, true, false, 579)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 579, $this->source); })()), "completed", [], "any", false, false, false, 579), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"return-stat-sub text-muted\">terminés</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer bg-white\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">
                                <i class=\"fas fa-hand-holding-usd me-1 text-danger\"></i> Montant remboursé :
                            </span>
                            <strong class=\"text-danger\">";
        // line 593
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_refund_amount", [], "any", true, true, false, 593)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 593, $this->source); })()), "total_refund_amount", [], "any", false, false, false, 593), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</strong>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">
                                <i class=\"fas fa-chart-line me-1 text-success\"></i> Taux d'approbation :
                            </span>
                            ";
        // line 601
        $context["totalReturns"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_returns", [], "any", true, true, false, 601)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 601, $this->source); })()), "total_returns", [], "any", false, false, false, 601), 0)) : (0));
        // line 602
        yield "                            ";
        $context["approvedCompleted"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "approved", [], "any", true, true, false, 602)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 602, $this->source); })()), "approved", [], "any", false, false, false, 602), 0)) : (0)) + ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "completed", [], "any", true, true, false, 602)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 602, $this->source); })()), "completed", [], "any", false, false, false, 602), 0)) : (0)));
        // line 603
        yield "                            ";
        $context["approvalRate"] = ((((isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 603, $this->source); })()) > 0)) ? ((((isset($context["approvedCompleted"]) || array_key_exists("approvedCompleted", $context) ? $context["approvedCompleted"] : (function () { throw new RuntimeError('Variable "approvedCompleted" does not exist.', 603, $this->source); })()) / (isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 603, $this->source); })())) * 100)) : (0));
        // line 604
        yield "                            <strong class=\"text-success\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["approvalRate"]) || array_key_exists("approvalRate", $context) ? $context["approvalRate"] : (function () { throw new RuntimeError('Variable "approvalRate" does not exist.', 604, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "%</strong>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">
                                <i class=\"fas fa-chart-pie me-1 text-danger\"></i> Taux de rejet :
                            </span>
                            ";
        // line 612
        $context["rejectionRate"] = ((((isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 612, $this->source); })()) > 0)) ? (((((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "rejected", [], "any", true, true, false, 612)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 612, $this->source); })()), "rejected", [], "any", false, false, false, 612), 0)) : (0)) / (isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 612, $this->source); })())) * 100)) : (0));
        // line 613
        yield "                            <strong class=\"text-danger\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["rejectionRate"]) || array_key_exists("rejectionRate", $context) ? $context["rejectionRate"] : (function () { throw new RuntimeError('Variable "rejectionRate" does not exist.', 613, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "%</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"filter-section\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 626
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>

        <form method=\"get\" id=\"filter-form\">
            <div class=\"row g-3\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Recherche</label>
                    <input type=\"text\" name=\"search\" class=\"form-control\" 
                           placeholder=\"N° commande, client...\" value=\"";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 640)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 640, $this->source); })()), "search", [], "any", false, false, false, 640), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Statut</label>
                    <select name=\"status\" class=\"form-select select2-status\">
                        <option value=\"\">Tous</option>
                        ";
        // line 646
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 646, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 647
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 647, $this->source); })()), "status", [], "any", false, false, false, 647) == $context["status"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["status"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 649
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Mode de paiement</label>
                    <select name=\"payment_method\" class=\"form-select select2-payment\">
                        <option value=\"\">Tous</option>
                        ";
        // line 655
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payment_methods"]) || array_key_exists("payment_methods", $context) ? $context["payment_methods"] : (function () { throw new RuntimeError('Variable "payment_methods" does not exist.', 655, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 656
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["method"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 656, $this->source); })()), "payment_method", [], "any", false, false, false, 656) == $context["method"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["method"], ["_" => " "])), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['method'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 658
        yield "                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Caissier</label>
                    <select name=\"user_id\" id=\"user-select\" class=\"form-select select2-user\">
                        <option value=\"\">Tous les caissiers</option>
                        ";
        // line 664
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 664, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 665
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 665), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 665, $this->source); })()), "user_id", [], "any", false, false, false, 665) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 665))) ? ("selected") : (""));
            yield ">
                                ";
            // line 666
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 666)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 667
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 667))), "html", null, true);
                yield "\" class=\"rounded-circle me-2\" style=\"width: 20px; height: 20px; object-fit: cover;\">
                                ";
            }
            // line 669
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", true, true, false, 669)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 669), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 669))) : (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 669))), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 672
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Période</label>
                    <select name=\"date_preset\" id=\"date-preset\" class=\"form-select select2-preset\">
                        <option value=\"\">Personnalisée</option>
                        ";
        // line 678
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["date_presets"]) || array_key_exists("date_presets", $context) ? $context["date_presets"] : (function () { throw new RuntimeError('Variable "date_presets" does not exist.', 678, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 679
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 679, $this->source); })()), "date_preset", [], "any", false, false, false, 679) == $context["key"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 681
        yield "                    </select>
                </div>
            </div>

            <div class=\"row g-3 mt-2\" id=\"custom-dates\" style=\"display: ";
        // line 685
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 685, $this->source); })()), "date_preset", [], "any", false, false, false, 685)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("none") : ("flex"));
        yield ";\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 688)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 688, $this->source); })()), "date_from", [], "any", false, false, false, 688), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 692
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 692)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 692, $this->source); })()), "date_to", [], "any", false, false, false, 692), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Montant min (FCFA)</label>
                    <input type=\"number\" name=\"min_amount\" class=\"form-control\" placeholder=\"Min\" value=\"";
        // line 696
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "min_amount", [], "any", true, true, false, 696)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 696, $this->source); })()), "min_amount", [], "any", false, false, false, 696), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Montant max (FCFA)</label>
                    <input type=\"number\" name=\"max_amount\" class=\"form-control\" placeholder=\"Max\" value=\"";
        // line 700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "max_amount", [], "any", true, true, false, 700)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 700, $this->source); })()), "max_amount", [], "any", false, false, false, 700), "")) : ("")), "html", null, true);
        yield "\">
                </div>
            </div>

            <div class=\"row g-3 mt-2\">
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Trier par</label>
                    <select name=\"sort\" class=\"form-select\">
                        <option value=\"created_at\" ";
        // line 708
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 708, $this->source); })()), "sort", [], "any", false, false, false, 708) == "created_at")) ? ("selected") : (""));
        yield ">Date de vente</option>
                        <option value=\"total_amount\" ";
        // line 709
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 709, $this->source); })()), "sort", [], "any", false, false, false, 709) == "total_amount")) ? ("selected") : (""));
        yield ">Montant</option>
                        <option value=\"customer_name\" ";
        // line 710
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 710, $this->source); })()), "sort", [], "any", false, false, false, 710) == "customer_name")) ? ("selected") : (""));
        yield ">Nom client</option>
                    </select>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Ordre</label>
                    <select name=\"direction\" class=\"form-select\">
                        <option value=\"desc\" ";
        // line 716
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 716, $this->source); })()), "direction", [], "any", false, false, false, 716) == "desc")) ? ("selected") : (""));
        yield ">Plus récent d'abord</option>
                        <option value=\"asc\" ";
        // line 717
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 717, $this->source); })()), "direction", [], "any", false, false, false, 717) == "asc")) ? ("selected") : (""));
        yield ">Plus ancien d'abord</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

    <!-- Tableau des ventes -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i> Liste des ventes</h5>
                <div class=\"table-header-actions\">
                    <div class=\"form-check\">
                        <input type=\"checkbox\" class=\"form-check-input\" id=\"selectAllCheckbox\">
                        <label class=\"form-check-label small\" for=\"selectAllCheckbox\">Tout cocher</label>
                    </div>
                    <button class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\">
                        <i class=\"fas fa-times me-1\"></i> Tout décocher
                    </button>
                    <button class=\"btn btn-sm btn-primary\" id=\"printSelectedBtn\" disabled>
                        <i class=\"fas fa-print me-1\"></i> Imprimer sélection
                    </button>
                    <span class=\"badge bg-secondary\">";
        // line 740
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 740, $this->source); })()), "html", null, true);
        yield " vente(s)</span>
                </div>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 40px;\"></th>
                            <th>N° commande</th>
                            <th>Date</th>
                            <th>Client</th>
                            <th>Articles</th>
                            <th>Total</th>
                            <th>Paiement</th>
                            <th>Statut</th>
                            <th>Caissier</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 762
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 762, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 763
            yield "                            ";
            $context["itemCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 763));
            // line 764
            yield "                            <tr class=\"table-order-row\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 764)]), "html", null, true);
            yield "\">
                                <td><input type=\"checkbox\" class=\"form-check-input row-checkbox\" data-order-id=\"";
            // line 765
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 765), "html", null, true);
            yield "\" data-order-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 765), "html", null, true);
            yield "\"></td>
                                <td>
                                    <strong>";
            // line 767
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 767), "html", null, true);
            yield "</strong>
                                </td>
                                <td>";
            // line 769
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 769), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>
                                    <div>";
            // line 771
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 771), "html", null, true);
            yield "</div>
                                    ";
            // line 772
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 772)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 773
                yield "                                        <small class=\"text-muted\"><i class=\"fas fa-phone me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 773), "html", null, true);
                yield "</small>
                                    ";
            }
            // line 775
            yield "                                  </td>
                                <td>
                                    <span class=\"badge bg-secondary\">";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemCount"]) || array_key_exists("itemCount", $context) ? $context["itemCount"] : (function () { throw new RuntimeError('Variable "itemCount" does not exist.', 777, $this->source); })()), "html", null, true);
            yield " article(s)</span>
                                    ";
            // line 778
            if ((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 778, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 779
                yield "                                        <br>
                                        <small class=\"text-muted\">Plats</small>
                                    ";
            }
            // line 782
            yield "                                  </td>
                                <td>
                                    <strong class=\"text-primary\">";
            // line 784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 784), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                  </td>
                                <td>
                                    <span class=\"badge bg-";
            // line 787
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 787) == "cash")) ? ("success") : ("info"));
            yield "\">
                                        ";
            // line 788
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 788), ["_" => " "])), "html", null, true);
            yield "
                                    </span>
                                  </td>
                                <td>
                                    ";
            // line 792
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "isActive", [], "any", false, false, false, 792)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 793
                yield "                                        <span class=\"badge badge-status-completed\">Active</span>
                                    ";
            } else {
                // line 795
                yield "                                        <span class=\"badge badge-status-disabled\">Désactivée</span>
                                    ";
            }
            // line 797
            yield "                                  </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        ";
            // line 800
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 800), "photo", [], "any", false, false, false, 800)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 801
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 801), "photo", [], "any", false, false, false, 801))), "html", null, true);
                yield "\" 
                                                 class=\"rounded-circle me-2\" style=\"width: 30px; height: 30px; object-fit: cover;\">
                                        ";
            } else {
                // line 804
                yield "                                            <div class=\"rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-2\" 
                                                 style=\"width: 30px; height: 30px; font-size: 12px;\">
                                                ";
                // line 806
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 806), "fullName", [], "any", false, false, false, 806))), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 809
            yield "                                        <div>
                                            <div>";
            // line 810
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, true, false, 810), "fullName", [], "any", true, true, false, 810)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 810), "fullName", [], "any", false, false, false, 810), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 810), "email", [], "any", false, false, false, 810))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 810), "email", [], "any", false, false, false, 810))), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\">";
            // line 811
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 811), "roles", [], "any", false, false, false, 811)), ["ROLE_" => ""]), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                  </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 817
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 817)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary print-single\" data-id=\"";
            // line 820
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 820), "html", null, true);
            yield "\" title=\"Imprimer le reçu\">
                                            <i class=\"fas fa-print\"></i>
                                        </button>
                                        ";
            // line 823
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 824
                yield "                                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "isActive", [], "any", false, false, false, 824)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 825
                    yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-warning toggle-order\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 825), "html", null, true);
                    yield "\" data-number=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 825), "html", null, true);
                    yield "\" data-action=\"disable\" title=\"Désactiver\">
                                                    <i class=\"fas fa-ban\"></i>
                                                </button>
                                            ";
                } else {
                    // line 829
                    yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success toggle-order\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 829), "html", null, true);
                    yield "\" data-number=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 829), "html", null, true);
                    yield "\" data-action=\"enable\" title=\"Activer\">
                                                    <i class=\"fas fa-check-circle\"></i>
                                                </button>
                                            ";
                }
                // line 833
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-order\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 833), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 833), "html", null, true);
                yield "\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        ";
            }
            // line 837
            yield "                                    </div>
                                  </td>
                               </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 840
        if (!$context['_iterated']) {
            // line 841
            yield "                             <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <i class=\"fas fa-shopping-cart fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucune vente trouvée</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres pour voir plus de résultats</p>
                                  </td>
                               </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 849
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        ";
        // line 855
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 855, $this->source); })()) > 1)) {
            // line 856
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 859
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 859, $this->source); })()) > 1)) {
                // line 860
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 861
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 861, $this->source); })()), "request", [], "any", false, false, false, 861), "query", [], "any", false, false, false, 861), "all", [], "any", false, false, false, 861), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 861, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i> Précédent
                            </a>
                        </li>
                    ";
            }
            // line 866
            yield "                    
                    ";
            // line 867
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 867, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 868
                yield "                        ";
                if ((((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 868, $this->source); })())) || (($context["page"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 868, $this->source); })()) - 2)) && ($context["page"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 868, $this->source); })()) + 2)))) || ($context["page"] == 1)) || ($context["page"] == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 868, $this->source); })())))) {
                    // line 869
                    yield "                            ";
                    if ((($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 869, $this->source); })()) - 3)) || ($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 869, $this->source); })()) + 3)))) {
                        // line 870
                        yield "                                <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                            ";
                    } else {
                        // line 872
                        yield "                                <li class=\"page-item ";
                        yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 872, $this->source); })()))) ? ("active") : (""));
                        yield "\">
                                    <a class=\"page-link\" href=\"";
                        // line 873
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 873, $this->source); })()), "request", [], "any", false, false, false, 873), "query", [], "any", false, false, false, 873), "all", [], "any", false, false, false, 873), ["page" => $context["page"]])), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                                </li>
                            ";
                    }
                    // line 876
                    yield "                        ";
                }
                // line 877
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 878
            yield "                    
                    ";
            // line 879
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 879, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 879, $this->source); })()))) {
                // line 880
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 881
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 881, $this->source); })()), "request", [], "any", false, false, false, 881), "query", [], "any", false, false, false, 881), "all", [], "any", false, false, false, 881), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 881, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                                Suivant <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 886
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 890
        yield "    </div>
</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"toggleOrderModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exchange-alt me-2\"></i> Changer le statut
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleOrderMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleOrderForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleOrderToken\">
                    <button type=\"submit\" class=\"btn btn-warning\" id=\"toggleOrderBtn\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteOrderModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir supprimer la vente <strong id=\"deleteOrderNumber\"></strong> ?</p>
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>Attention :</strong> Cette action est irréversible et supprimera également tous les articles associés.
                </div>
                <p class=\"text-danger mb-0\"><small>⚠️ La suppression d'une vente ne restaure pas le stock !</small></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteOrderForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteOrderToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash-alt me-2\"></i> Supprimer définitivement
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"receiptModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-print me-2\"></i> Aperçu du reçu
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"receiptContent\">
                <div class=\"text-center py-5\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"printReceiptBtn\">
                    <i class=\"fas fa-print me-2\"></i> Imprimer
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

    // line 974
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

        // line 975
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation Select2
    \$('.select2-status, .select2-payment, .select2-user, .select2-preset').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        width: '100%'
    });

    \$('#user-select').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: 'Tous les caissiers',
        allowClear: true,
        width: '100%'
    });

    // Gestion des dates personnalisées
    const datePreset = document.getElementById('date-preset');
    const customDates = document.getElementById('custom-dates');
    
    if (datePreset) {
        datePreset.addEventListener('change', function() {
            if (this.value) {
                customDates.style.display = 'none';
                document.querySelectorAll('input[name=\"date_from\"], input[name=\"date_to\"]').forEach(input => input.value = '');
            } else {
                customDates.style.display = 'flex';
            }
        });
    }

    // Rendre les lignes cliquables
    document.querySelectorAll('.table-order-row').forEach(row => {
        row.addEventListener('click', function(e) {
            if (!e.target.closest('a') && !e.target.closest('button') && !e.target.closest('input[type=\"checkbox\"]')) {
                window.location.href = this.dataset.href;
            }
        });
    });

    // ========== GESTION DES CHECKBOX ==========
    const rowCheckboxes = document.querySelectorAll('.row-checkbox');
    const selectAllCheckbox = document.getElementById('selectAllCheckbox');
    const deselectAllBtn = document.getElementById('deselectAllBtn');
    const printSelectedBtn = document.getElementById('printSelectedBtn');
    
    function updateSelectedCount() {
        const checkedCount = document.querySelectorAll('.row-checkbox:checked').length;
        if (printSelectedBtn) {
            printSelectedBtn.disabled = checkedCount === 0;
            printSelectedBtn.innerHTML = `<i class=\"fas fa-print me-1\"></i> Imprimer sélection (\${checkedCount})`;
        }
        if (selectAllCheckbox) {
            selectAllCheckbox.checked = checkedCount === rowCheckboxes.length && rowCheckboxes.length > 0;
            selectAllCheckbox.indeterminate = checkedCount > 0 && checkedCount < rowCheckboxes.length;
        }
    }
    
    function toggleAllCheckboxes(checked) {
        rowCheckboxes.forEach(cb => cb.checked = checked);
        updateSelectedCount();
    }
    
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            toggleAllCheckboxes(this.checked);
        });
    }
    
    if (deselectAllBtn) {
        deselectAllBtn.addEventListener('click', function() {
            toggleAllCheckboxes(false);
        });
    }
    
    rowCheckboxes.forEach(cb => {
        cb.addEventListener('change', updateSelectedCount);
    });
    
    updateSelectedCount();

    // ========== IMPRESSION ==========
    const receiptModal = new bootstrap.Modal(document.getElementById('receiptModal'));
    const receiptContent = document.getElementById('receiptContent');
    
    function loadReceipt(orderId) {
        receiptContent.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Chargement du reçu...</p></div>';
        receiptModal.show();
        
        fetch(`/orders/\${orderId}/receipt-content`)
            .then(response => response.text())
            .then(html => {
                receiptContent.innerHTML = html;
            })
            .catch(error => {
                receiptContent.innerHTML = '<div class=\"alert alert-danger\">Erreur lors du chargement du reçu</div>';
            });
    }
    
    function loadMultipleReceipts(orderIds) {
        receiptContent.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Chargement des reçus...</p></div>';
        receiptModal.show();
        
        fetch(`/orders/receipts-content?ids=\${orderIds.join(',')}`)
            .then(response => response.text())
            .then(html => {
                receiptContent.innerHTML = html;
            })
            .catch(error => {
                receiptContent.innerHTML = '<div class=\"alert alert-danger\">Erreur lors du chargement des reçus</div>';
            });
    }
    
    document.querySelectorAll('.print-single').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const orderId = this.dataset.id;
            loadReceipt(orderId);
        });
    });
    
    if (printSelectedBtn) {
        printSelectedBtn.addEventListener('click', function() {
            const selectedIds = Array.from(document.querySelectorAll('.row-checkbox:checked')).map(cb => cb.dataset.orderId);
            if (selectedIds.length === 0) return;
            
            if (selectedIds.length === 1) {
                loadReceipt(selectedIds[0]);
            } else {
                loadMultipleReceipts(selectedIds);
            }
        });
    }
    
    document.getElementById('printReceiptBtn')?.addEventListener('click', function() {
        const printContent = receiptContent.innerHTML;
        const printWindow = window.open('', '_blank', 'width=400,height=600');
        printWindow.document.write(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>Reçu de vente</title>
                <meta charset=\"UTF-8\">
                <style>
                    body { font-family: monospace; margin: 0; padding: 20px; width: 350px; margin: 0 auto; }
                    .receipt { text-align: center; }
                    .receipt-header { margin-bottom: 15px; }
                    .receipt-header h2 { margin: 0; font-size: 18px; }
                    .receipt-header p { margin: 5px 0; font-size: 12px; }
                    .receipt-line { border-top: 1px dashed #000; margin: 10px 0; }
                    .receipt-items { width: 100%; margin: 10px 0; font-size: 12px; }
                    .receipt-items th, .receipt-items td { text-align: left; padding: 3px 0; }
                    .receipt-items td:last-child { text-align: right; }
                    .receipt-total { font-weight: bold; margin-top: 10px; }
                    .receipt-footer { margin-top: 15px; font-size: 10px; text-align: center; }
                    @media print {
                        body { margin: 0; padding: 10px; }
                        .no-print { display: none; }
                    }
                </style>
            </head>
            <body>
                \${printContent}
                <div class=\"receipt-footer no-print\">
                    <button onclick=\"window.print()\" style=\"margin-top: 20px; padding: 8px 16px;\">Imprimer</button>
                </div>
                <script>
                    window.print();
                <\\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    });

    // Toggle (désactiver/activer) une vente
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleOrderModal'));
    const toggleOrderMessage = document.getElementById('toggleOrderMessage');
    const toggleOrderForm = document.getElementById('toggleOrderForm');
    const toggleOrderToken = document.getElementById('toggleOrderToken');
    const toggleOrderBtn = document.getElementById('toggleOrderBtn');
    
    document.querySelectorAll('.toggle-order').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const orderId = this.dataset.id;
            const orderNumber = this.dataset.number;
            const action = this.dataset.action;
            
            const isDisable = action === 'disable';
            toggleOrderMessage.textContent = isDisable 
                ? `Êtes-vous sûr de vouloir désactiver la vente \"\${orderNumber}\" ? Elle ne sera plus visible dans les rapports.`
                : `Êtes-vous sûr de vouloir réactiver la vente \"\${orderNumber}\" ?`;
            
            toggleOrderForm.action = '/orders/' + orderId + '/toggle';
            toggleOrderToken.value = '";
        // line 1174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle_order"), "html", null, true);
        yield "'.replace('ID_PLACEHOLDER', orderId);
            toggleOrderBtn.className = isDisable ? 'btn btn-warning' : 'btn btn-success';
            toggleOrderBtn.textContent = isDisable ? 'Désactiver' : 'Activer';
            
            toggleModal.show();
        });
    });

    // Suppression d'une vente
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteOrderModal'));
    const deleteOrderNumber = document.getElementById('deleteOrderNumber');
    const deleteOrderForm = document.getElementById('deleteOrderForm');
    const deleteOrderToken = document.getElementById('deleteOrderToken');
    
    document.querySelectorAll('.delete-order').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const orderId = this.dataset.id;
            const orderNumber = this.dataset.number;
            
            deleteOrderNumber.textContent = orderNumber;
            deleteOrderForm.action = '/orders/' + orderId + '/delete';
            deleteOrderToken.value = '";
        // line 1196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_order"), "html", null, true);
        yield "'.replace('ID_PLACEHOLDER', orderId);
            
            deleteModal.show();
        });
    });
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
        return "sale/orders/index.html.twig";
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
        return array (  1698 => 1196,  1673 => 1174,  1471 => 975,  1458 => 974,  1365 => 890,  1359 => 886,  1351 => 881,  1348 => 880,  1346 => 879,  1343 => 878,  1337 => 877,  1334 => 876,  1326 => 873,  1321 => 872,  1317 => 870,  1314 => 869,  1311 => 868,  1307 => 867,  1304 => 866,  1296 => 861,  1293 => 860,  1291 => 859,  1286 => 856,  1284 => 855,  1276 => 849,  1263 => 841,  1261 => 840,  1254 => 837,  1244 => 833,  1234 => 829,  1224 => 825,  1221 => 824,  1219 => 823,  1213 => 820,  1207 => 817,  1198 => 811,  1194 => 810,  1191 => 809,  1185 => 806,  1181 => 804,  1174 => 801,  1172 => 800,  1167 => 797,  1163 => 795,  1159 => 793,  1157 => 792,  1150 => 788,  1146 => 787,  1140 => 784,  1136 => 782,  1131 => 779,  1129 => 778,  1125 => 777,  1121 => 775,  1115 => 773,  1113 => 772,  1109 => 771,  1104 => 769,  1099 => 767,  1092 => 765,  1087 => 764,  1084 => 763,  1079 => 762,  1054 => 740,  1028 => 717,  1024 => 716,  1015 => 710,  1011 => 709,  1007 => 708,  996 => 700,  989 => 696,  982 => 692,  975 => 688,  969 => 685,  963 => 681,  950 => 679,  946 => 678,  938 => 672,  928 => 669,  922 => 667,  920 => 666,  913 => 665,  909 => 664,  901 => 658,  888 => 656,  884 => 655,  876 => 649,  863 => 647,  859 => 646,  850 => 640,  833 => 626,  816 => 613,  814 => 612,  802 => 604,  799 => 603,  796 => 602,  794 => 601,  783 => 593,  766 => 579,  752 => 568,  738 => 557,  724 => 546,  704 => 528,  695 => 522,  687 => 516,  685 => 515,  671 => 504,  652 => 488,  633 => 472,  614 => 456,  595 => 440,  576 => 424,  557 => 408,  538 => 392,  519 => 376,  500 => 360,  481 => 344,  462 => 328,  435 => 304,  425 => 297,  416 => 291,  408 => 286,  380 => 261,  371 => 254,  358 => 253,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sale/orders/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Historique des ventes - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    :root { 
        --primary-color: #0463f1; 
        --success-color: #10b981; 
        --danger-color: #ef4444; 
        --warning-color: #f59e0b; 
        --info-color: #3b82f6; 
    }
    
    /* Cartes statistiques - TOUTES IDENTIQUES avec fond blanc pur */
    .stats-card {
        background: #ffffff !important;
        border: 1px solid #e5e7eb !important;
        border-radius: 16px !important;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }
    
    .stats-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
    }
    
    .stats-card .card-body {
        padding: 1rem;
        background: #ffffff !important;
    }
    
    .stats-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
        line-height: 1.2;
    }
    
    .stats-card h6 {
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
    }
    
    /* Icônes dans les cartes - plus visibles */
    .stats-card i {
        opacity: 0.8;
        transition: opacity 0.2s;
    }
    
    .stats-card:hover i {
        opacity: 1;
    }
    
    /* Couleurs des cartes */
    .stats-card .text-primary { color: var(--primary-color) !important; }
    .stats-card .text-success { color: var(--success-color) !important; }
    .stats-card .text-info { color: var(--info-color) !important; }
    .stats-card .text-warning { color: var(--warning-color) !important; }
    .stats-card .text-danger { color: var(--danger-color) !important; }
    .stats-card .text-secondary { color: #6c757d !important; }
    .stats-card .text-dark { color: #1f2937 !important; }
    .stats-card .text-cyan { color: #06b6d4 !important; }
    .stats-card .text-emerald { color: #10b981 !important; }
    .stats-card .text-gray { color: #6b7280 !important; }
    .stats-card .text-purple { color: #8b5cf6 !important; }
    .stats-card .text-rose { color: #f43f5e !important; }
    
    /* Section filtres */
    .filter-section {
        background: white;
        border-radius: 16px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        border: 1px solid #e5e7eb;
    }
    
    /* Lignes du tableau */
    .table-order-row {
        cursor: pointer;
        transition: background-color 0.2s ease;
    }
    
    .table-order-row:hover {
        background-color: #f8f9fa !important;
    }
    
    /* Badges de paiement */
    .badge-payment-paid { 
        background-color: var(--success-color) !important; 
        color: white !important;
    }
    .badge-payment-partial { 
        background-color: var(--warning-color) !important; 
        color: white !important;
    }
    .badge-status-completed { 
        background-color: var(--success-color) !important; 
        color: white !important;
    }
    .badge-status-cancelled { 
        background-color: var(--danger-color) !important; 
        color: white !important;
    }
    .badge-status-refunded { 
        background-color: #8b5cf6 !important; 
        color: white !important;
    }
    .badge-status-disabled { 
        background-color: #6c757d !important; 
        color: white !important;
    }
    
    /* Message d'information */
    .filter-info {
        background: #e0f2fe !important;
        border-left: 4px solid #0284c7 !important;
        padding: 0.75rem 1rem !important;
        border-radius: 8px !important;
        margin-bottom: 1rem !important;
        color: #0c4a6e !important;
    }
    
    .filter-info .btn-outline-secondary {
        border-color: #0284c7;
        color: #0284c7;
    }
    
    .filter-info .btn-outline-secondary:hover {
        background: #0284c7;
        color: white;
    }
    
    /* Carte de contact */
    .contact-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 16px;
        padding: 1rem;
        margin-bottom: 1.5rem;
        color: white;
        transition: transform 0.2s ease;
    }
    
    .contact-card:hover {
        transform: translateY(-2px);
    }
    
    /* En-tête du tableau */
    .table-header-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
    /* Section Retours & Avoirs */
    .returns-section {
        margin-top: 2rem;
        margin-bottom: 1.5rem;
    }
    .returns-card {
        background: white;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
    }
    .returns-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
        padding: 1rem 1.25rem;
    }
    .return-stat-box {
        text-align: center;
        padding: 1rem;
        border-right: 1px solid #e5e7eb;
    }
    .return-stat-box:last-child {
        border-right: none;
    }
    .return-stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
    }
    .return-stat-value {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0;
    }
    .return-stat-unit {
        font-size: 0.7rem;
        color: #64748b;
        margin-left: 0.25rem;
    }
    .return-stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .filter-section .row > div {
            margin-bottom: 1rem;
        }
        
        .stats-card h3 {
            font-size: 1.2rem;
        }
        
        .stats-card h6 {
            font-size: 0.7rem;
        }
        
        .table-header-actions {
            margin-top: 0.5rem;
        }
        
        .stats-card .card-body {
            padding: 0.75rem;
        }
        
        .return-stat-box {
            border-right: none;
            border-bottom: 1px solid #e5e7eb;
        }
        .return-stat-box:last-child {
            border-bottom: none;
        }
    }
    
    /* Petits écrans (tablettes) */
    @media (max-width: 992px) and (min-width: 769px) {
        .stats-card h3 {
            font-size: 1.3rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
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
                        <i class=\"fas fa-shopping-cart me-1\"></i> Ventes
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-shopping-cart me-2 text-primary\"></i>
                Historique des ventes
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Consultez et analysez toutes vos ventes
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-export me-1\"></i> Exporter
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_orders_export_excel', app.request.query.all) }}\">
                            <i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_orders_export_pdf', app.request.query.all) }}\">
                            <i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"{{ isRestaurant ? path('restaurant_sale_index') : path('retail_sale_index') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle vente
            </a>
        </div>
    </div>

    <!-- Message contact Super Admin -->
    <a href=\"{{ path('app_orders_contact_super_admin') }}\" class=\"text-decoration-none\">
        <div class=\"contact-card\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                <div>
                    <i class=\"fas fa-chart-line fa-2x me-3 float-start\"></i>
                    <h5 class=\"mb-1\">Analyse approfondie des données</h5>
                    <p class=\"mb-0 opacity-75\">Pour une analyse détaillée de vos ventes, contactez notre équipe Super Admin</p>
                </div>
                <div class=\"btn btn-light\">
                    <i class=\"fab fa-whatsapp me-2 text-success\"></i> Contacter le support
                </div>
            </div>
        </div>
    </a>

    <!-- 12 Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <!-- Carte 1: Chiffre d'affaires -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-primary mb-1\" style=\"font-weight: 600;\">Chiffre d'affaires</h6>
                            <h3 class=\"mb-0 text-primary\" style=\"font-weight: 700;\">{{ stats.total_sales|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x\" style=\"color: #0463f1; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 2: Nombre de ventes -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-success mb-1\" style=\"font-weight: 600;\">Nombre de ventes</h6>
                            <h3 class=\"mb-0 text-success\" style=\"font-weight: 700;\">{{ stats.total_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-receipt fa-2x\" style=\"color: #10b981; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 3: Panier moyen -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-info mb-1\" style=\"font-weight: 600;\">Panier moyen</h6>
                            <h3 class=\"mb-0 text-info\" style=\"font-weight: 700;\">{{ stats.average_basket|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">FCFA/vente</small>
                        </div>
                        <i class=\"fas fa-shopping-basket fa-2x\" style=\"color: #3b82f6; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 4: Clients uniques -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-warning mb-1\" style=\"font-weight: 600;\">Clients uniques</h6>
                            <h3 class=\"mb-0 text-warning\" style=\"font-weight: 700;\">{{ stats.unique_customers|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">personnes</small>
                        </div>
                        <i class=\"fas fa-users fa-2x\" style=\"color: #f59e0b; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 5: Ticket moyen -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-danger mb-1\" style=\"font-weight: 600;\">Ticket moyen</h6>
                            <h3 class=\"mb-0 text-danger\" style=\"font-weight: 700;\">{{ stats.average_ticket|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">FCFA/client</small>
                        </div>
                        <i class=\"fas fa-ticket-alt fa-2x\" style=\"color: #ef4444; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 6: Vente max -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-secondary mb-1\" style=\"font-weight: 600;\">Vente max</h6>
                            <h3 class=\"mb-0 text-secondary\" style=\"font-weight: 700;\">{{ stats.max_sale|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-arrow-up fa-2x\" style=\"color: #6b7280; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 7: Vente min -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #374151;\">Vente min</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #374151;\">{{ stats.min_sale|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-arrow-down fa-2x\" style=\"color: #6b7280; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 8: Articles vendus -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #0d9488;\">Articles vendus</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #0d9488;\">{{ stats.total_items|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">unités</small>
                        </div>
                        <i class=\"fas fa-boxes fa-2x\" style=\"color: #0d9488; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 9: Ventes actives -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #10b981;\">Ventes actives</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #10b981;\">{{ stats.active_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-check-circle fa-2x\" style=\"color: #10b981; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 10: Ventes désactivées -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #6b7280;\">Ventes désactivées</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #6b7280;\">{{ stats.disabled_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-ban fa-2x\" style=\"color: #6b7280; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 11: Taux désactivation -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #8b5cf6;\">Taux désactivation</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #8b5cf6;\">{{ stats.disabled_percentage|default(0)|number_format(1, ',', ' ') }}%</h3>
                            <small class=\"text-muted\">des ventes</small>
                        </div>
                        <i class=\"fas fa-chart-pie fa-2x\" style=\"color: #8b5cf6; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carte 12: Ventes annulées -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #f43f5e;\">Ventes annulées</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #f43f5e;\">{{ stats.cancelled_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-times-circle fa-2x\" style=\"color: #f43f5e; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Message info filtres -->
    {% if filters.date_from or filters.date_to or filters.status or filters.payment_method or filters.user_id or filters.min_amount or filters.max_amount %}
    <div class=\"filter-info\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-info-circle me-2\"></i>
                <strong>Filtres actifs :</strong> Les statistiques ci-dessus sont basées sur les filtres appliqués.
            </div>
            <a href=\"{{ path('app_orders_index') }}\" class=\"btn btn-sm btn-outline-secondary\">
                <i class=\"fas fa-times me-1\"></i> Effacer les filtres
            </a>
        </div>
    </div>
    {% endif %}

    <!-- Section Retours & Avoirs (bien organisée) -->
    <div class=\"returns-section\">
        <div class=\"returns-card\">
            <div class=\"card-header\">
                <h5 class=\"mb-0\">
                    <i class=\"fas fa-undo-alt me-2 text-warning\"></i>
                    Retours & Avoirs
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"row g-0\">
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"return-stat-box\">
                            <div class=\"return-stat-label\">
                                <i class=\"fas fa-chart-line me-1\"></i> Total retours
                            </div>
                            <div class=\"return-stat-value text-primary\">
                                {{ returnStats.total_returns|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"return-stat-sub text-muted\">demandes</div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"return-stat-box\">
                            <div class=\"return-stat-label\">
                                <i class=\"fas fa-clock me-1\"></i> En attente
                            </div>
                            <div class=\"return-stat-value text-warning\">
                                {{ returnStats.pending|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"return-stat-sub text-muted\">à valider</div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"return-stat-box\">
                            <div class=\"return-stat-label\">
                                <i class=\"fas fa-check-circle me-1\"></i> Approuvés
                            </div>
                            <div class=\"return-stat-value text-info\">
                                {{ returnStats.approved|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"return-stat-sub text-muted\">en attente remb.</div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"return-stat-box\">
                            <div class=\"return-stat-label\">
                                <i class=\"fas fa-money-bill-wave me-1\"></i> Remboursés
                            </div>
                            <div class=\"return-stat-value text-success\">
                                {{ returnStats.completed|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <div class=\"return-stat-sub text-muted\">terminés</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer bg-white\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">
                                <i class=\"fas fa-hand-holding-usd me-1 text-danger\"></i> Montant remboursé :
                            </span>
                            <strong class=\"text-danger\">{{ returnStats.total_refund_amount|default(0)|number_format(0, ',', ' ') }} FCFA</strong>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">
                                <i class=\"fas fa-chart-line me-1 text-success\"></i> Taux d'approbation :
                            </span>
                            {% set totalReturns = returnStats.total_returns|default(0) %}
                            {% set approvedCompleted = (returnStats.approved|default(0)) + (returnStats.completed|default(0)) %}
                            {% set approvalRate = (totalReturns > 0) ? (approvedCompleted / totalReturns * 100) : 0 %}
                            <strong class=\"text-success\">{{ approvalRate|number_format(1, ',', ' ') }}%</strong>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">
                                <i class=\"fas fa-chart-pie me-1 text-danger\"></i> Taux de rejet :
                            </span>
                            {% set rejectionRate = (totalReturns > 0) ? ((returnStats.rejected|default(0)) / totalReturns * 100) : 0 %}
                            <strong class=\"text-danger\">{{ rejectionRate|number_format(1, ',', ' ') }}%</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"filter-section\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_orders_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>

        <form method=\"get\" id=\"filter-form\">
            <div class=\"row g-3\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Recherche</label>
                    <input type=\"text\" name=\"search\" class=\"form-control\" 
                           placeholder=\"N° commande, client...\" value=\"{{ filters.search|default('') }}\">
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Statut</label>
                    <select name=\"status\" class=\"form-select select2-status\">
                        <option value=\"\">Tous</option>
                        {% for status in statuses %}
                            <option value=\"{{ status }}\" {{ filters.status == status ? 'selected' }}>{{ status|capitalize }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Mode de paiement</label>
                    <select name=\"payment_method\" class=\"form-select select2-payment\">
                        <option value=\"\">Tous</option>
                        {% for method in payment_methods %}
                            <option value=\"{{ method }}\" {{ filters.payment_method == method ? 'selected' }}>{{ method|replace({'_': ' '})|capitalize }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Caissier</label>
                    <select name=\"user_id\" id=\"user-select\" class=\"form-select select2-user\">
                        <option value=\"\">Tous les caissiers</option>
                        {% for user in users %}
                            <option value=\"{{ user.id }}\" {{ filters.user_id == user.id ? 'selected' }}>
                                {% if user.photo %}
                                    <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" class=\"rounded-circle me-2\" style=\"width: 20px; height: 20px; object-fit: cover;\">
                                {% endif %}
                                {{ user.fullName|default(user.email) }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Période</label>
                    <select name=\"date_preset\" id=\"date-preset\" class=\"form-select select2-preset\">
                        <option value=\"\">Personnalisée</option>
                        {% for key, label in date_presets %}
                            <option value=\"{{ key }}\" {{ filters.date_preset == key ? 'selected' }}>{{ label }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"row g-3 mt-2\" id=\"custom-dates\" style=\"display: {{ filters.date_preset ? 'none' : 'flex' }};\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ filters.date_from|default('') }}\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ filters.date_to|default('') }}\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Montant min (FCFA)</label>
                    <input type=\"number\" name=\"min_amount\" class=\"form-control\" placeholder=\"Min\" value=\"{{ filters.min_amount|default('') }}\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Montant max (FCFA)</label>
                    <input type=\"number\" name=\"max_amount\" class=\"form-control\" placeholder=\"Max\" value=\"{{ filters.max_amount|default('') }}\">
                </div>
            </div>

            <div class=\"row g-3 mt-2\">
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Trier par</label>
                    <select name=\"sort\" class=\"form-select\">
                        <option value=\"created_at\" {{ filters.sort == 'created_at' ? 'selected' }}>Date de vente</option>
                        <option value=\"total_amount\" {{ filters.sort == 'total_amount' ? 'selected' }}>Montant</option>
                        <option value=\"customer_name\" {{ filters.sort == 'customer_name' ? 'selected' }}>Nom client</option>
                    </select>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Ordre</label>
                    <select name=\"direction\" class=\"form-select\">
                        <option value=\"desc\" {{ filters.direction == 'desc' ? 'selected' }}>Plus récent d'abord</option>
                        <option value=\"asc\" {{ filters.direction == 'asc' ? 'selected' }}>Plus ancien d'abord</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

    <!-- Tableau des ventes -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i> Liste des ventes</h5>
                <div class=\"table-header-actions\">
                    <div class=\"form-check\">
                        <input type=\"checkbox\" class=\"form-check-input\" id=\"selectAllCheckbox\">
                        <label class=\"form-check-label small\" for=\"selectAllCheckbox\">Tout cocher</label>
                    </div>
                    <button class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\">
                        <i class=\"fas fa-times me-1\"></i> Tout décocher
                    </button>
                    <button class=\"btn btn-sm btn-primary\" id=\"printSelectedBtn\" disabled>
                        <i class=\"fas fa-print me-1\"></i> Imprimer sélection
                    </button>
                    <span class=\"badge bg-secondary\">{{ totalItems }} vente(s)</span>
                </div>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 40px;\"></th>
                            <th>N° commande</th>
                            <th>Date</th>
                            <th>Client</th>
                            <th>Articles</th>
                            <th>Total</th>
                            <th>Paiement</th>
                            <th>Statut</th>
                            <th>Caissier</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for order in orders %}
                            {% set itemCount = order.orderItems|length %}
                            <tr class=\"table-order-row\" data-href=\"{{ path('app_orders_show', {'id': order.id}) }}\">
                                <td><input type=\"checkbox\" class=\"form-check-input row-checkbox\" data-order-id=\"{{ order.id }}\" data-order-number=\"{{ order.orderNumber }}\"></td>
                                <td>
                                    <strong>{{ order.orderNumber }}</strong>
                                </td>
                                <td>{{ order.createdAt|date('d/m/Y H:i') }}</td>
                                <td>
                                    <div>{{ order.customerName }}</div>
                                    {% if order.customerPhone %}
                                        <small class=\"text-muted\"><i class=\"fas fa-phone me-1\"></i>{{ order.customerPhone }}</small>
                                    {% endif %}
                                  </td>
                                <td>
                                    <span class=\"badge bg-secondary\">{{ itemCount }} article(s)</span>
                                    {% if isRestaurant %}
                                        <br>
                                        <small class=\"text-muted\">Plats</small>
                                    {% endif %}
                                  </td>
                                <td>
                                    <strong class=\"text-primary\">{{ order.totalAmount|number_format(0, ',', ' ') }} FCFA</strong>
                                  </td>
                                <td>
                                    <span class=\"badge bg-{{ order.paymentMethod == 'cash' ? 'success' : 'info' }}\">
                                        {{ order.paymentMethod|replace({'_': ' '})|capitalize }}
                                    </span>
                                  </td>
                                <td>
                                    {% if order.isActive %}
                                        <span class=\"badge badge-status-completed\">Active</span>
                                    {% else %}
                                        <span class=\"badge badge-status-disabled\">Désactivée</span>
                                    {% endif %}
                                  </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        {% if order.user.photo %}
                                            <img src=\"{{ asset('uploads/users/' ~ order.user.photo) }}\" 
                                                 class=\"rounded-circle me-2\" style=\"width: 30px; height: 30px; object-fit: cover;\">
                                        {% else %}
                                            <div class=\"rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-2\" 
                                                 style=\"width: 30px; height: 30px; font-size: 12px;\">
                                                {{ order.user.fullName|first|upper }}
                                            </div>
                                        {% endif %}
                                        <div>
                                            <div>{{ order.user.fullName|default(order.user.email) }}</div>
                                            <small class=\"text-muted\">{{ order.user.roles|first|replace({'ROLE_': ''}) }}</small>
                                        </div>
                                    </div>
                                  </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"{{ path('app_orders_show', {'id': order.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary print-single\" data-id=\"{{ order.id }}\" title=\"Imprimer le reçu\">
                                            <i class=\"fas fa-print\"></i>
                                        </button>
                                        {% if is_granted('ROLE_ADMIN') %}
                                            {% if order.isActive %}
                                                <button type=\"button\" class=\"btn btn-sm btn-outline-warning toggle-order\" data-id=\"{{ order.id }}\" data-number=\"{{ order.orderNumber }}\" data-action=\"disable\" title=\"Désactiver\">
                                                    <i class=\"fas fa-ban\"></i>
                                                </button>
                                            {% else %}
                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success toggle-order\" data-id=\"{{ order.id }}\" data-number=\"{{ order.orderNumber }}\" data-action=\"enable\" title=\"Activer\">
                                                    <i class=\"fas fa-check-circle\"></i>
                                                </button>
                                            {% endif %}
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-order\" data-id=\"{{ order.id }}\" data-number=\"{{ order.orderNumber }}\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        {% endif %}
                                    </div>
                                  </td>
                               </tr>
                        {% else %}
                             <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <i class=\"fas fa-shopping-cart fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucune vente trouvée</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres pour voir plus de résultats</p>
                                  </td>
                               </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        {% if totalPages > 1 %}
        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    {% if currentPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_orders_index', app.request.query.all|merge({'page': currentPage - 1})) }}\">
                                <i class=\"fas fa-chevron-left\"></i> Précédent
                            </a>
                        </li>
                    {% endif %}
                    
                    {% for page in 1..totalPages %}
                        {% if page == currentPage or (page >= currentPage - 2 and page <= currentPage + 2) or page == 1 or page == totalPages %}
                            {% if page == currentPage - 3 or page == currentPage + 3 %}
                                <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                            {% else %}
                                <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('app_orders_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                                </li>
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                    
                    {% if currentPage < totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_orders_index', app.request.query.all|merge({'page': currentPage + 1})) }}\">
                                Suivant <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
        </div>
        {% endif %}
    </div>
</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"toggleOrderModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exchange-alt me-2\"></i> Changer le statut
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleOrderMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleOrderForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleOrderToken\">
                    <button type=\"submit\" class=\"btn btn-warning\" id=\"toggleOrderBtn\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteOrderModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir supprimer la vente <strong id=\"deleteOrderNumber\"></strong> ?</p>
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>Attention :</strong> Cette action est irréversible et supprimera également tous les articles associés.
                </div>
                <p class=\"text-danger mb-0\"><small>⚠️ La suppression d'une vente ne restaure pas le stock !</small></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteOrderForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteOrderToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash-alt me-2\"></i> Supprimer définitivement
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"receiptModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-print me-2\"></i> Aperçu du reçu
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"receiptContent\">
                <div class=\"text-center py-5\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"printReceiptBtn\">
                    <i class=\"fas fa-print me-2\"></i> Imprimer
                </button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation Select2
    \$('.select2-status, .select2-payment, .select2-user, .select2-preset').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        width: '100%'
    });

    \$('#user-select').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: 'Tous les caissiers',
        allowClear: true,
        width: '100%'
    });

    // Gestion des dates personnalisées
    const datePreset = document.getElementById('date-preset');
    const customDates = document.getElementById('custom-dates');
    
    if (datePreset) {
        datePreset.addEventListener('change', function() {
            if (this.value) {
                customDates.style.display = 'none';
                document.querySelectorAll('input[name=\"date_from\"], input[name=\"date_to\"]').forEach(input => input.value = '');
            } else {
                customDates.style.display = 'flex';
            }
        });
    }

    // Rendre les lignes cliquables
    document.querySelectorAll('.table-order-row').forEach(row => {
        row.addEventListener('click', function(e) {
            if (!e.target.closest('a') && !e.target.closest('button') && !e.target.closest('input[type=\"checkbox\"]')) {
                window.location.href = this.dataset.href;
            }
        });
    });

    // ========== GESTION DES CHECKBOX ==========
    const rowCheckboxes = document.querySelectorAll('.row-checkbox');
    const selectAllCheckbox = document.getElementById('selectAllCheckbox');
    const deselectAllBtn = document.getElementById('deselectAllBtn');
    const printSelectedBtn = document.getElementById('printSelectedBtn');
    
    function updateSelectedCount() {
        const checkedCount = document.querySelectorAll('.row-checkbox:checked').length;
        if (printSelectedBtn) {
            printSelectedBtn.disabled = checkedCount === 0;
            printSelectedBtn.innerHTML = `<i class=\"fas fa-print me-1\"></i> Imprimer sélection (\${checkedCount})`;
        }
        if (selectAllCheckbox) {
            selectAllCheckbox.checked = checkedCount === rowCheckboxes.length && rowCheckboxes.length > 0;
            selectAllCheckbox.indeterminate = checkedCount > 0 && checkedCount < rowCheckboxes.length;
        }
    }
    
    function toggleAllCheckboxes(checked) {
        rowCheckboxes.forEach(cb => cb.checked = checked);
        updateSelectedCount();
    }
    
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            toggleAllCheckboxes(this.checked);
        });
    }
    
    if (deselectAllBtn) {
        deselectAllBtn.addEventListener('click', function() {
            toggleAllCheckboxes(false);
        });
    }
    
    rowCheckboxes.forEach(cb => {
        cb.addEventListener('change', updateSelectedCount);
    });
    
    updateSelectedCount();

    // ========== IMPRESSION ==========
    const receiptModal = new bootstrap.Modal(document.getElementById('receiptModal'));
    const receiptContent = document.getElementById('receiptContent');
    
    function loadReceipt(orderId) {
        receiptContent.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Chargement du reçu...</p></div>';
        receiptModal.show();
        
        fetch(`/orders/\${orderId}/receipt-content`)
            .then(response => response.text())
            .then(html => {
                receiptContent.innerHTML = html;
            })
            .catch(error => {
                receiptContent.innerHTML = '<div class=\"alert alert-danger\">Erreur lors du chargement du reçu</div>';
            });
    }
    
    function loadMultipleReceipts(orderIds) {
        receiptContent.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Chargement des reçus...</p></div>';
        receiptModal.show();
        
        fetch(`/orders/receipts-content?ids=\${orderIds.join(',')}`)
            .then(response => response.text())
            .then(html => {
                receiptContent.innerHTML = html;
            })
            .catch(error => {
                receiptContent.innerHTML = '<div class=\"alert alert-danger\">Erreur lors du chargement des reçus</div>';
            });
    }
    
    document.querySelectorAll('.print-single').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const orderId = this.dataset.id;
            loadReceipt(orderId);
        });
    });
    
    if (printSelectedBtn) {
        printSelectedBtn.addEventListener('click', function() {
            const selectedIds = Array.from(document.querySelectorAll('.row-checkbox:checked')).map(cb => cb.dataset.orderId);
            if (selectedIds.length === 0) return;
            
            if (selectedIds.length === 1) {
                loadReceipt(selectedIds[0]);
            } else {
                loadMultipleReceipts(selectedIds);
            }
        });
    }
    
    document.getElementById('printReceiptBtn')?.addEventListener('click', function() {
        const printContent = receiptContent.innerHTML;
        const printWindow = window.open('', '_blank', 'width=400,height=600');
        printWindow.document.write(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>Reçu de vente</title>
                <meta charset=\"UTF-8\">
                <style>
                    body { font-family: monospace; margin: 0; padding: 20px; width: 350px; margin: 0 auto; }
                    .receipt { text-align: center; }
                    .receipt-header { margin-bottom: 15px; }
                    .receipt-header h2 { margin: 0; font-size: 18px; }
                    .receipt-header p { margin: 5px 0; font-size: 12px; }
                    .receipt-line { border-top: 1px dashed #000; margin: 10px 0; }
                    .receipt-items { width: 100%; margin: 10px 0; font-size: 12px; }
                    .receipt-items th, .receipt-items td { text-align: left; padding: 3px 0; }
                    .receipt-items td:last-child { text-align: right; }
                    .receipt-total { font-weight: bold; margin-top: 10px; }
                    .receipt-footer { margin-top: 15px; font-size: 10px; text-align: center; }
                    @media print {
                        body { margin: 0; padding: 10px; }
                        .no-print { display: none; }
                    }
                </style>
            </head>
            <body>
                \${printContent}
                <div class=\"receipt-footer no-print\">
                    <button onclick=\"window.print()\" style=\"margin-top: 20px; padding: 8px 16px;\">Imprimer</button>
                </div>
                <script>
                    window.print();
                <\\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    });

    // Toggle (désactiver/activer) une vente
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleOrderModal'));
    const toggleOrderMessage = document.getElementById('toggleOrderMessage');
    const toggleOrderForm = document.getElementById('toggleOrderForm');
    const toggleOrderToken = document.getElementById('toggleOrderToken');
    const toggleOrderBtn = document.getElementById('toggleOrderBtn');
    
    document.querySelectorAll('.toggle-order').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const orderId = this.dataset.id;
            const orderNumber = this.dataset.number;
            const action = this.dataset.action;
            
            const isDisable = action === 'disable';
            toggleOrderMessage.textContent = isDisable 
                ? `Êtes-vous sûr de vouloir désactiver la vente \"\${orderNumber}\" ? Elle ne sera plus visible dans les rapports.`
                : `Êtes-vous sûr de vouloir réactiver la vente \"\${orderNumber}\" ?`;
            
            toggleOrderForm.action = '/orders/' + orderId + '/toggle';
            toggleOrderToken.value = '{{ csrf_token(\"toggle_order\") }}'.replace('ID_PLACEHOLDER', orderId);
            toggleOrderBtn.className = isDisable ? 'btn btn-warning' : 'btn btn-success';
            toggleOrderBtn.textContent = isDisable ? 'Désactiver' : 'Activer';
            
            toggleModal.show();
        });
    });

    // Suppression d'une vente
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteOrderModal'));
    const deleteOrderNumber = document.getElementById('deleteOrderNumber');
    const deleteOrderForm = document.getElementById('deleteOrderForm');
    const deleteOrderToken = document.getElementById('deleteOrderToken');
    
    document.querySelectorAll('.delete-order').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const orderId = this.dataset.id;
            const orderNumber = this.dataset.number;
            
            deleteOrderNumber.textContent = orderNumber;
            deleteOrderForm.action = '/orders/' + orderId + '/delete';
            deleteOrderToken.value = '{{ csrf_token(\"delete_order\") }}'.replace('ID_PLACEHOLDER', orderId);
            
            deleteModal.show();
        });
    });
});
</script>
{% endblock %}", "sale/orders/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\index.html.twig");
    }
}
