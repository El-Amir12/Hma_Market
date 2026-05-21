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
    
    .stats-card i {
        opacity: 0.8;
        transition: opacity 0.2s;
    }
    
    .stats-card:hover i {
        opacity: 1;
    }
    
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
    
    .filter-section {
        background: white;
        border-radius: 16px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        border: 1px solid #e5e7eb;
    }
    
    .table-order-row {
        cursor: pointer;
        transition: background-color 0.2s ease;
    }
    
    .table-order-row:hover {
        background-color: #f8f9fa !important;
    }
    
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
    
    .table-header-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
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

    // line 241
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

        // line 242
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 249
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
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 274, $this->source); })()), "request", [], "any", false, false, false, 274), "query", [], "any", false, false, false, 274), "all", [], "any", false, false, false, 274)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "request", [], "any", false, false, false, 279), "query", [], "any", false, false, false, 279), "all", [], "any", false, false, false, 279)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"";
        // line 285
        yield (((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 285, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_sale_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_index")));
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle vente
            </a>
        </div>
    </div>

    <!-- Message contact Super Admin -->
    <a href=\"";
        // line 292
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
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-primary mb-1\" style=\"font-weight: 600;\">Chiffre d'affaires</h6>
                            <h3 class=\"mb-0 text-primary\" style=\"font-weight: 700;\">";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_sales", [], "any", true, true, false, 315)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 315, $this->source); })()), "total_sales", [], "any", false, false, false, 315), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x\" style=\"color: #0463f1; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-success mb-1\" style=\"font-weight: 600;\">Nombre de ventes</h6>
                            <h3 class=\"mb-0 text-success\" style=\"font-weight: 700;\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 330, $this->source); })()), "total_orders", [], "any", false, false, false, 330), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-receipt fa-2x\" style=\"color: #10b981; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-info mb-1\" style=\"font-weight: 600;\">Panier moyen</h6>
                            <h3 class=\"mb-0 text-info\" style=\"font-weight: 700;\">";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_basket", [], "any", true, true, false, 345)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 345, $this->source); })()), "average_basket", [], "any", false, false, false, 345), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA/vente</small>
                        </div>
                        <i class=\"fas fa-shopping-basket fa-2x\" style=\"color: #3b82f6; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-warning mb-1\" style=\"font-weight: 600;\">Clients uniques</h6>
                            <h3 class=\"mb-0 text-warning\" style=\"font-weight: 700;\">";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "unique_customers", [], "any", true, true, false, 360)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 360, $this->source); })()), "unique_customers", [], "any", false, false, false, 360), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">personnes</small>
                        </div>
                        <i class=\"fas fa-users fa-2x\" style=\"color: #f59e0b; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-danger mb-1\" style=\"font-weight: 600;\">Ticket moyen</h6>
                            <h3 class=\"mb-0 text-danger\" style=\"font-weight: 700;\">";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_ticket", [], "any", true, true, false, 375)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 375, $this->source); })()), "average_ticket", [], "any", false, false, false, 375), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA/client</small>
                        </div>
                        <i class=\"fas fa-ticket-alt fa-2x\" style=\"color: #ef4444; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-secondary mb-1\" style=\"font-weight: 600;\">Vente max</h6>
                            <h3 class=\"mb-0 text-secondary\" style=\"font-weight: 700;\">";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "max_sale", [], "any", true, true, false, 390)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 390, $this->source); })()), "max_sale", [], "any", false, false, false, 390), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-arrow-up fa-2x\" style=\"color: #6b7280; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #374151;\">Vente min</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #374151;\">";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "min_sale", [], "any", true, true, false, 405)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 405, $this->source); })()), "min_sale", [], "any", false, false, false, 405), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-arrow-down fa-2x\" style=\"color: #6b7280; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #0d9488;\">Articles vendus</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #0d9488;\">";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_items", [], "any", true, true, false, 420)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 420, $this->source); })()), "total_items", [], "any", false, false, false, 420), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">unités</small>
                        </div>
                        <i class=\"fas fa-boxes fa-2x\" style=\"color: #0d9488; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #10b981;\">Ventes actives</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #10b981;\">";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_orders", [], "any", true, true, false, 435)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 435, $this->source); })()), "active_orders", [], "any", false, false, false, 435), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-check-circle fa-2x\" style=\"color: #10b981; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #6b7280;\">Ventes désactivées</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #6b7280;\">";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_orders", [], "any", true, true, false, 450)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 450, $this->source); })()), "disabled_orders", [], "any", false, false, false, 450), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-ban fa-2x\" style=\"color: #6b7280; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #8b5cf6;\">Taux désactivation</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #8b5cf6;\">";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_percentage", [], "any", true, true, false, 465)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 465, $this->source); })()), "disabled_percentage", [], "any", false, false, false, 465), 0)) : (0)), 1, ",", " "), "html", null, true);
        yield "%</h3>
                            <small class=\"text-muted\">des ventes</small>
                        </div>
                        <i class=\"fas fa-chart-pie fa-2x\" style=\"color: #8b5cf6; opacity: 0.8;\"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"mb-1\" style=\"font-weight: 600; color: #f43f5e;\">Ventes annulées</h6>
                            <h3 class=\"mb-0\" style=\"font-weight: 700; color: #f43f5e;\">";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "cancelled_orders", [], "any", true, true, false, 480)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 480, $this->source); })()), "cancelled_orders", [], "any", false, false, false, 480), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 491
        if (((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 491, $this->source); })()), "date_from", [], "any", false, false, false, 491) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 491, $this->source); })()), "date_to", [], "any", false, false, false, 491)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 491, $this->source); })()), "status", [], "any", false, false, false, 491)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 491, $this->source); })()), "payment_method", [], "any", false, false, false, 491)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 491, $this->source); })()), "user_id", [], "any", false, false, false, 491)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 491, $this->source); })()), "min_amount", [], "any", false, false, false, 491)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 491, $this->source); })()), "max_amount", [], "any", false, false, false, 491))) {
            // line 492
            yield "    <div class=\"filter-info\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-info-circle me-2\"></i>
                <strong>Filtres actifs :</strong> Les statistiques ci-dessus sont basées sur les filtres appliqués.
            </div>
            <a href=\"";
            // line 498
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                <i class=\"fas fa-times me-1\"></i> Effacer les filtres
            </a>
        </div>
    </div>
    ";
        }
        // line 504
        yield "
    <!-- Section Retours & Avoirs -->
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
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_returns", [], "any", true, true, false, 522)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 522, $this->source); })()), "total_returns", [], "any", false, false, false, 522), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "pending", [], "any", true, true, false, 533)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 533, $this->source); })()), "pending", [], "any", false, false, false, 533), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "approved", [], "any", true, true, false, 544)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 544, $this->source); })()), "approved", [], "any", false, false, false, 544), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "completed", [], "any", true, true, false, 555)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 555, $this->source); })()), "completed", [], "any", false, false, false, 555), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_refund_amount", [], "any", true, true, false, 569)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 569, $this->source); })()), "total_refund_amount", [], "any", false, false, false, 569), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</strong>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">
                                <i class=\"fas fa-chart-line me-1 text-success\"></i> Taux d'approbation :
                            </span>
                            ";
        // line 577
        $context["totalReturns"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_returns", [], "any", true, true, false, 577)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 577, $this->source); })()), "total_returns", [], "any", false, false, false, 577), 0)) : (0));
        // line 578
        yield "                            ";
        $context["approvedCompleted"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "approved", [], "any", true, true, false, 578)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 578, $this->source); })()), "approved", [], "any", false, false, false, 578), 0)) : (0)) + ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "completed", [], "any", true, true, false, 578)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 578, $this->source); })()), "completed", [], "any", false, false, false, 578), 0)) : (0)));
        // line 579
        yield "                            ";
        $context["approvalRate"] = ((((isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 579, $this->source); })()) > 0)) ? ((((isset($context["approvedCompleted"]) || array_key_exists("approvedCompleted", $context) ? $context["approvedCompleted"] : (function () { throw new RuntimeError('Variable "approvedCompleted" does not exist.', 579, $this->source); })()) / (isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 579, $this->source); })())) * 100)) : (0));
        // line 580
        yield "                            <strong class=\"text-success\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["approvalRate"]) || array_key_exists("approvalRate", $context) ? $context["approvalRate"] : (function () { throw new RuntimeError('Variable "approvalRate" does not exist.', 580, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "%</strong>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">
                                <i class=\"fas fa-chart-pie me-1 text-danger\"></i> Taux de rejet :
                            </span>
                            ";
        // line 588
        $context["rejectionRate"] = ((((isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 588, $this->source); })()) > 0)) ? (((((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "rejected", [], "any", true, true, false, 588)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 588, $this->source); })()), "rejected", [], "any", false, false, false, 588), 0)) : (0)) / (isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 588, $this->source); })())) * 100)) : (0));
        // line 589
        yield "                            <strong class=\"text-danger\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["rejectionRate"]) || array_key_exists("rejectionRate", $context) ? $context["rejectionRate"] : (function () { throw new RuntimeError('Variable "rejectionRate" does not exist.', 589, $this->source); })()), 1, ",", " "), "html", null, true);
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
        // line 602
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
        // line 616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 616)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 616, $this->source); })()), "search", [], "any", false, false, false, 616), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Statut</label>
                    <select name=\"status\" class=\"form-select select2-status\">
                        <option value=\"\">Tous</option>
                        ";
        // line 622
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 622, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 623
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 623, $this->source); })()), "status", [], "any", false, false, false, 623) == $context["status"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["status"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 625
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Mode de paiement</label>
                    <select name=\"payment_method\" class=\"form-select select2-payment\">
                        <option value=\"\">Tous</option>
                        ";
        // line 631
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payment_methods"]) || array_key_exists("payment_methods", $context) ? $context["payment_methods"] : (function () { throw new RuntimeError('Variable "payment_methods" does not exist.', 631, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 632
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["method"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 632, $this->source); })()), "payment_method", [], "any", false, false, false, 632) == $context["method"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["method"], ["_" => " "])), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['method'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        yield "                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Caissier</label>
                    <select name=\"user_id\" id=\"user-select\" class=\"form-select select2-user\">
                        <option value=\"\">Tous les caissiers</option>
                        ";
        // line 640
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 640, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 641
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 641), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 641, $this->source); })()), "user_id", [], "any", false, false, false, 641) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 641))) ? ("selected") : (""));
            yield ">
                                ";
            // line 642
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 642)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 643
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 643))), "html", null, true);
                yield "\" class=\"rounded-circle me-2\" style=\"width: 20px; height: 20px; object-fit: cover;\">
                                ";
            }
            // line 645
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", true, true, false, 645)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 645), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 645))) : (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 645))), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 648
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Période</label>
                    <select name=\"date_preset\" id=\"date-preset\" class=\"form-select select2-preset\">
                        <option value=\"\">Personnalisée</option>
                        ";
        // line 654
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["date_presets"]) || array_key_exists("date_presets", $context) ? $context["date_presets"] : (function () { throw new RuntimeError('Variable "date_presets" does not exist.', 654, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 655
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 655, $this->source); })()), "date_preset", [], "any", false, false, false, 655) == $context["key"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 657
        yield "                    </select>
                </div>
            </div>

            <div class=\"row g-3 mt-2\" id=\"custom-dates\" style=\"display: ";
        // line 661
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 661, $this->source); })()), "date_preset", [], "any", false, false, false, 661)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("none") : ("flex"));
        yield ";\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 664)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 664, $this->source); })()), "date_from", [], "any", false, false, false, 664), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 668)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 668, $this->source); })()), "date_to", [], "any", false, false, false, 668), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Montant min (FCFA)</label>
                    <input type=\"number\" name=\"min_amount\" class=\"form-control\" placeholder=\"Min\" value=\"";
        // line 672
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "min_amount", [], "any", true, true, false, 672)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 672, $this->source); })()), "min_amount", [], "any", false, false, false, 672), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Montant max (FCFA)</label>
                    <input type=\"number\" name=\"max_amount\" class=\"form-control\" placeholder=\"Max\" value=\"";
        // line 676
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "max_amount", [], "any", true, true, false, 676)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 676, $this->source); })()), "max_amount", [], "any", false, false, false, 676), "")) : ("")), "html", null, true);
        yield "\">
                </div>
            </div>

            <div class=\"row g-3 mt-2\">
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Trier par</label>
                    <select name=\"sort\" class=\"form-select\">
                        <option value=\"created_at\" ";
        // line 684
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 684, $this->source); })()), "sort", [], "any", false, false, false, 684) == "created_at")) ? ("selected") : (""));
        yield ">Date de vente</option>
                        <option value=\"total_amount\" ";
        // line 685
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 685, $this->source); })()), "sort", [], "any", false, false, false, 685) == "total_amount")) ? ("selected") : (""));
        yield ">Montant</option>
                        <option value=\"customer_name\" ";
        // line 686
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 686, $this->source); })()), "sort", [], "any", false, false, false, 686) == "customer_name")) ? ("selected") : (""));
        yield ">Nom client</option>
                    </select>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Ordre</label>
                    <select name=\"direction\" class=\"form-select\">
                        <option value=\"desc\" ";
        // line 692
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 692, $this->source); })()), "direction", [], "any", false, false, false, 692) == "desc")) ? ("selected") : (""));
        yield ">Plus récent d'abord</option>
                        <option value=\"asc\" ";
        // line 693
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 693, $this->source); })()), "direction", [], "any", false, false, false, 693) == "asc")) ? ("selected") : (""));
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
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 716, $this->source); })()), "html", null, true);
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
        // line 738
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 738, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 739
            yield "                            ";
            $context["itemCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 739));
            // line 740
            yield "                            <tr class=\"table-order-row\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 740)]), "html", null, true);
            yield "\">
                                <td><input type=\"checkbox\" class=\"form-check-input row-checkbox\" data-order-id=\"";
            // line 741
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 741), "html", null, true);
            yield "\" data-order-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 741), "html", null, true);
            yield "\"></td>
                                <td><strong>";
            // line 742
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 742), "html", null, true);
            yield "</strong></td>
                                <td>";
            // line 743
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 743), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>
                                    <div>";
            // line 745
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 745), "html", null, true);
            yield "</div>
                                    ";
            // line 746
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 746)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 747
                yield "                                        <small class=\"text-muted\"><i class=\"fas fa-phone me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 747), "html", null, true);
                yield "</small>
                                    ";
            }
            // line 749
            yield "                                  </td>
                                <td>
                                    <span class=\"badge bg-secondary\">";
            // line 751
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemCount"]) || array_key_exists("itemCount", $context) ? $context["itemCount"] : (function () { throw new RuntimeError('Variable "itemCount" does not exist.', 751, $this->source); })()), "html", null, true);
            yield " article(s)</span>
                                    ";
            // line 752
            if ((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 752, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 753
                yield "                                        <br><small class=\"text-muted\">Plats</small>
                                    ";
            }
            // line 755
            yield "                                  </td>
                                <td><strong class=\"text-primary\">";
            // line 756
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 756), 0, ",", " "), "html", null, true);
            yield " FCFA</strong></td>
                                <td>
                                    <span class=\"badge bg-";
            // line 758
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 758) == "cash")) ? ("success") : ("info"));
            yield "\">
                                        ";
            // line 759
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 759), ["_" => " "])), "html", null, true);
            yield "
                                    </span>
                                  </td>
                                <td>
                                    ";
            // line 763
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "isActive", [], "any", false, false, false, 763)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 764
                yield "                                        <span class=\"badge badge-status-completed\">Active</span>
                                    ";
            } else {
                // line 766
                yield "                                        <span class=\"badge badge-status-disabled\">Désactivée</span>
                                    ";
            }
            // line 768
            yield "                                  </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        ";
            // line 771
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 771), "photo", [], "any", false, false, false, 771)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 772
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 772), "photo", [], "any", false, false, false, 772))), "html", null, true);
                yield "\" 
                                                 class=\"rounded-circle me-2\" style=\"width: 30px; height: 30px; object-fit: cover;\">
                                        ";
            } else {
                // line 775
                yield "                                            <div class=\"rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-2\" 
                                                 style=\"width: 30px; height: 30px; font-size: 12px;\">
                                                ";
                // line 777
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 777), "fullName", [], "any", false, false, false, 777))), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 780
            yield "                                        <div>
                                            <div>";
            // line 781
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, true, false, 781), "fullName", [], "any", true, true, false, 781)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 781), "fullName", [], "any", false, false, false, 781), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 781), "email", [], "any", false, false, false, 781))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 781), "email", [], "any", false, false, false, 781))), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\">";
            // line 782
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 782), "roles", [], "any", false, false, false, 782)), ["ROLE_" => ""]), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                  </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 788
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 788)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-success quick-print\" 
                                                data-order-id=\"";
            // line 793
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 793), "html", null, true);
            yield "\" 
                                                data-print-type=\"customer\" 
                                                title=\"Impression rapide\">
                                            <i class=\"fas fa-print\"></i>
                                            <i class=\"fas fa-bolt fa-xs\"></i>
                                        </button>
                                        
                                        <div class=\"btn-group\" role=\"group\">
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\">
                                                <i class=\"fas fa-chevron-down\"></i>
                                            </button>
                                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-customer\" data-order-id=\"";
            // line 806
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 806), "html", null, true);
            yield "\" data-print-type=\"customer\">
                                                        <i class=\"fas fa-receipt me-2\"></i> Ticket client
                                                    </button>
                                                </li>
                                                
                                                ";
            // line 811
            if ((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 811, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 812
                yield "                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-kitchen\" data-order-id=\"";
                // line 814
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 814), "html", null, true);
                yield "\" data-print-type=\"kitchen\">
                                                        <i class=\"fas fa-utensils me-2\"></i> Ticket cuisine
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-delivery\" data-order-id=\"";
                // line 819
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 819), "html", null, true);
                yield "\" data-print-type=\"delivery\">
                                                        <i class=\"fas fa-truck me-2\"></i> Ticket livraison
                                                    </button>
                                                </li>
                                                ";
            }
            // line 824
            yield "                                                
                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-cash\" data-order-id=\"";
            // line 827
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 827), "html", null, true);
            yield "\" data-print-type=\"cash\">
                                                        <i class=\"fas fa-money-bill-wave me-2\"></i> Ticket caisse
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        ";
            // line 834
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 835
                yield "                                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "isActive", [], "any", false, false, false, 835)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 836
                    yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-warning toggle-order\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 836), "html", null, true);
                    yield "\" data-number=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 836), "html", null, true);
                    yield "\" data-action=\"disable\" title=\"Désactiver\">
                                                    <i class=\"fas fa-ban\"></i>
                                                </button>
                                            ";
                } else {
                    // line 840
                    yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success toggle-order\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 840), "html", null, true);
                    yield "\" data-number=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 840), "html", null, true);
                    yield "\" data-action=\"enable\" title=\"Activer\">
                                                    <i class=\"fas fa-check-circle\"></i>
                                                </button>
                                            ";
                }
                // line 844
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-order\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 844), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 844), "html", null, true);
                yield "\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        ";
            }
            // line 848
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 851
        if (!$context['_iterated']) {
            // line 852
            yield "                            <tr>
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
        // line 860
        yield "                    </tbody>
                </table>
            </div>
        </div>

        ";
        // line 865
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 865, $this->source); })()) > 1)) {
            // line 866
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 869
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 869, $this->source); })()) > 1)) {
                // line 870
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 871
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 871, $this->source); })()), "request", [], "any", false, false, false, 871), "query", [], "any", false, false, false, 871), "all", [], "any", false, false, false, 871), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 871, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i> Précédent
                            </a>
                        </li>
                    ";
            }
            // line 876
            yield "                    
                    ";
            // line 877
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 877, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 878
                yield "                        ";
                if ((((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 878, $this->source); })())) || (($context["page"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 878, $this->source); })()) - 2)) && ($context["page"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 878, $this->source); })()) + 2)))) || ($context["page"] == 1)) || ($context["page"] == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 878, $this->source); })())))) {
                    // line 879
                    yield "                            ";
                    if ((($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 879, $this->source); })()) - 3)) || ($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 879, $this->source); })()) + 3)))) {
                        // line 880
                        yield "                                <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                            ";
                    } else {
                        // line 882
                        yield "                                <li class=\"page-item ";
                        yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 882, $this->source); })()))) ? ("active") : (""));
                        yield "\">
                                    <a class=\"page-link\" href=\"";
                        // line 883
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 883, $this->source); })()), "request", [], "any", false, false, false, 883), "query", [], "any", false, false, false, 883), "all", [], "any", false, false, false, 883), ["page" => $context["page"]])), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                                </li>
                            ";
                    }
                    // line 886
                    yield "                        ";
                }
                // line 887
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 888
            yield "                    
                    ";
            // line 889
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 889, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 889, $this->source); })()))) {
                // line 890
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 891
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 891, $this->source); })()), "request", [], "any", false, false, false, 891), "query", [], "any", false, false, false, 891), "all", [], "any", false, false, false, 891), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 891, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                                Suivant <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 896
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 900
        yield "    </div>
</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"toggleOrderModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exchange-alt me-2\"></i> Changer le statut</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\"><p id=\"toggleOrderMessage\"></p></div>
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
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression</h5>
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
                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt me-2\"></i> Supprimer définitivement</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"receiptModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Aperçu du reçu</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"receiptContent\">
                <div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"printReceiptBtn\"><i class=\"fas fa-print me-2\"></i> Imprimer</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 968
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

        // line 969
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
// ==================== PRINT MANAGER ====================
class PrintManager {
    constructor() {
        this.printQueue = [];
        this.isPrinting = false;
        this.init();
    }
    
    init() {
        this.setupEventListeners();
    }
    
    setupEventListeners() {
        const printButtons = document.querySelectorAll('.print-customer, .print-kitchen, .print-cash, .print-delivery, .quick-print');
        
        printButtons.forEach(btn => {
            btn.removeEventListener('click', this.handlePrintClick);
            btn.addEventListener('click', this.handlePrintClick.bind(this));
        });
        
        const printSelectedBtn = document.getElementById('printSelectedBtn');
        if (printSelectedBtn) {
            printSelectedBtn.removeEventListener('click', this.handleMultiplePrint);
            printSelectedBtn.addEventListener('click', this.handleMultiplePrint.bind(this));
        }
    }
    
    handlePrintClick = (e) => {
        e.preventDefault();
        e.stopPropagation();
        
        const btn = e.currentTarget;
        let orderId = btn.dataset.orderId;
        let type = btn.dataset.printType;
        
        if (btn.classList.contains('quick-print') && !type) {
            type = 'customer';
        }
        
        if (!orderId) {
            const parent = btn.closest('[data-order-id]');
            if (parent) orderId = parent.dataset.orderId;
        }
        
        if (!orderId) {
            this.showToast('error', 'Impossible d\\'identifier la commande');
            return;
        }
        
        this.printTicket(orderId, type);
    }
    
    handleMultiplePrint = async () => {
        const selectedIds = Array.from(document.querySelectorAll('.row-checkbox:checked'))
            .map(cb => cb.dataset.orderId)
            .filter(id => id);
        
        if (selectedIds.length === 0) {
            this.showToast('warning', 'Veuillez sélectionner des commandes');
            return;
        }
        
        const type = confirm('Imprimer tickets client (OK) ou cuisine (Annuler) ?') ? 'customer' : 'kitchen';
        await this.printMultipleTickets(selectedIds, type);
    }
    
    async printTicket(orderId, type, options = {}) {
        this.printQueue.push({ orderId, type, options });
        this.processQueue();
    }
    
    async processQueue() {
        if (this.isPrinting || this.printQueue.length === 0) return;
        
        this.isPrinting = true;
        const job = this.printQueue.shift();
        
        try {
            await this.executePrint(job.orderId, job.type, job.options);
        } catch (error) {
            console.error('Erreur d\\'impression:', error);
            this.showFallbackPdf(job.orderId, job.type);
        }
        
        this.isPrinting = false;
        this.processQueue();
    }
    
    async executePrint(orderId, type, options) {
        const url = `/print/ticket/\${orderId}/\${type}`;
        const fullUrl = `\${url}?include_drinks=true&show_prices=true&language=fr`;
        
        const printWindow = window.open(fullUrl, '_blank', 'width=400,height=600,menubar=yes,toolbar=yes');
        
        if (printWindow) {
            printWindow.onload = () => {
                setTimeout(() => {
                    try {
                        printWindow.print();
                        printWindow.onafterprint = () => {
                            printWindow.close();
                            this.showToast('success', `Ticket \${type} prêt à être imprimé`);
                        };
                    } catch (e) {
                        printWindow.close();
                        throw e;
                    }
                }, 500);
            };
        } else {
            throw new Error('Popup bloqué');
        }
    }
    
    showFallbackPdf(orderId, type) {
        let modal = document.getElementById('pdfFallbackModal');
        if (modal) modal.remove();
        
        const modalHtml = `
            <div class=\"modal fade\" id=\"pdfFallbackModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-warning text-dark\">
                            <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Impression impossible</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body text-center py-4\">
                            <i class=\"fas fa-print fa-3x text-muted mb-3\"></i>
                            <p>Impossible d'imprimer directement.</p>
                            <p class=\"text-muted\">Veuillez télécharger le PDF et l'imprimer manuellement.</p>
                        </div>
                        <div class=\"modal-footer justify-content-center\">
                            <a href=\"/print/ticket/\${orderId}/\${type}\" class=\"btn btn-primary\" target=\"_blank\">
                                <i class=\"fas fa-file-pdf me-2\"></i> Télécharger PDF
                            </a>
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', modalHtml);
        modal = new bootstrap.Modal(document.getElementById('pdfFallbackModal'));
        modal.show();
        
        document.getElementById('pdfFallbackModal').addEventListener('hidden.bs.modal', () => {
            document.getElementById('pdfFallbackModal').remove();
        });
    }
    
    async printMultipleTickets(orderIds, type) {
        this.showLoading('Préparation des tickets...');
        
        try {
            const response = await fetch('/print/multiple', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ order_ids: orderIds, type: type })
            });
            
            const data = await response.json();
            
            if (data.success) {
                const blob = this.base64ToBlob(data.pdf, 'application/pdf');
                const url = URL.createObjectURL(blob);
                const printWindow = window.open(url, '_blank');
                
                if (printWindow) {
                    printWindow.onload = () => {
                        setTimeout(() => {
                            try {
                                printWindow.print();
                                printWindow.onafterprint = () => printWindow.close();
                            } catch (e) {
                                printWindow.close();
                            }
                        }, 500);
                    };
                }
                
                this.showToast('success', `\${data.count} ticket(s) prêt(s) à imprimer`);
            } else {
                this.showToast('error', data.error || 'Erreur lors de l\\'impression');
            }
        } catch (error) {
            this.showToast('error', 'Erreur de connexion au serveur');
        } finally {
            this.hideLoading();
        }
    }
    
    base64ToBlob(base64, mimeType) {
        try {
            const byteCharacters = atob(base64);
            const byteNumbers = new Array(byteCharacters.length);
            for (let i = 0; i < byteCharacters.length; i++) {
                byteNumbers[i] = byteCharacters.charCodeAt(i);
            }
            const byteArray = new Uint8Array(byteNumbers);
            return new Blob([byteArray], { type: mimeType });
        } catch (error) {
            return new Blob([], { type: mimeType });
        }
    }
    
    showToast(type, message) {
        const toast = document.createElement('div');
        const bgColor = type === 'success' ? 'bg-success' : (type === 'warning' ? 'bg-warning' : 'bg-danger');
        const icon = type === 'success' ? 'check-circle' : (type === 'warning' ? 'exclamation-triangle' : 'times-circle');
        toast.className = `position-fixed bottom-0 end-0 p-3 m-3 \${bgColor} text-white rounded shadow`;
        toast.style.zIndex = '9999';
        toast.innerHTML = `<i class=\"fas fa-\${icon} me-2\"></i>\${message}`;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }
    
    showLoading(message) {
        this.hideLoading();
        const loader = document.createElement('div');
        loader.id = 'printLoader';
        loader.innerHTML = `
            <div style=\"position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.5); z-index:10000; display:flex; align-items:center; justify-content:center;\">
                <div class=\"bg-white p-4 rounded-4 text-center shadow-lg\" style=\"min-width: 250px;\">
                    <div class=\"spinner-border text-primary mb-3\"></div>
                    <p class=\"mb-0\">\${message}</p>
                </div>
            </div>
        `;
        document.body.appendChild(loader);
    }
    
    hideLoading() {
        const loader = document.getElementById('printLoader');
        if (loader) loader.remove();
    }
    
    refresh() {
        this.setupEventListeners();
    }
}

// ==================== INITIALISATION PRINCIPALE ====================
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
                    @media print { body { margin: 0; padding: 10px; } .no-print { display: none; } }
                </style>
            </head>
            <body>
                \${printContent}
                <div class=\"receipt-footer no-print\">
                    <button onclick=\"window.print()\" style=\"margin-top: 20px; padding: 8px 16px;\">Imprimer</button>
                </div>
                <script>window.print();<\\/script>
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
        // line 1406
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
        // line 1428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_order"), "html", null, true);
        yield "'.replace('ID_PLACEHOLDER', orderId);
            
            deleteModal.show();
        });
    });
    
    // Initialisation du PrintManager
    window.printManager = new PrintManager();
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
        return array (  1947 => 1428,  1922 => 1406,  1482 => 969,  1469 => 968,  1392 => 900,  1386 => 896,  1378 => 891,  1375 => 890,  1373 => 889,  1370 => 888,  1364 => 887,  1361 => 886,  1353 => 883,  1348 => 882,  1344 => 880,  1341 => 879,  1338 => 878,  1334 => 877,  1331 => 876,  1323 => 871,  1320 => 870,  1318 => 869,  1313 => 866,  1311 => 865,  1304 => 860,  1291 => 852,  1289 => 851,  1282 => 848,  1272 => 844,  1262 => 840,  1252 => 836,  1249 => 835,  1247 => 834,  1237 => 827,  1232 => 824,  1224 => 819,  1216 => 814,  1212 => 812,  1210 => 811,  1202 => 806,  1186 => 793,  1178 => 788,  1169 => 782,  1165 => 781,  1162 => 780,  1156 => 777,  1152 => 775,  1145 => 772,  1143 => 771,  1138 => 768,  1134 => 766,  1130 => 764,  1128 => 763,  1121 => 759,  1117 => 758,  1112 => 756,  1109 => 755,  1105 => 753,  1103 => 752,  1099 => 751,  1095 => 749,  1089 => 747,  1087 => 746,  1083 => 745,  1078 => 743,  1074 => 742,  1068 => 741,  1063 => 740,  1060 => 739,  1055 => 738,  1030 => 716,  1004 => 693,  1000 => 692,  991 => 686,  987 => 685,  983 => 684,  972 => 676,  965 => 672,  958 => 668,  951 => 664,  945 => 661,  939 => 657,  926 => 655,  922 => 654,  914 => 648,  904 => 645,  898 => 643,  896 => 642,  889 => 641,  885 => 640,  877 => 634,  864 => 632,  860 => 631,  852 => 625,  839 => 623,  835 => 622,  826 => 616,  809 => 602,  792 => 589,  790 => 588,  778 => 580,  775 => 579,  772 => 578,  770 => 577,  759 => 569,  742 => 555,  728 => 544,  714 => 533,  700 => 522,  680 => 504,  671 => 498,  663 => 492,  661 => 491,  647 => 480,  629 => 465,  611 => 450,  593 => 435,  575 => 420,  557 => 405,  539 => 390,  521 => 375,  503 => 360,  485 => 345,  467 => 330,  449 => 315,  423 => 292,  413 => 285,  404 => 279,  396 => 274,  368 => 249,  359 => 242,  346 => 241,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
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
    
    .stats-card i {
        opacity: 0.8;
        transition: opacity 0.2s;
    }
    
    .stats-card:hover i {
        opacity: 1;
    }
    
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
    
    .filter-section {
        background: white;
        border-radius: 16px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        border: 1px solid #e5e7eb;
    }
    
    .table-order-row {
        cursor: pointer;
        transition: background-color 0.2s ease;
    }
    
    .table-order-row:hover {
        background-color: #f8f9fa !important;
    }
    
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
    
    .table-header-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
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

    <!-- Section Retours & Avoirs -->
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
                                <td><strong>{{ order.orderNumber }}</strong></td>
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
                                        <br><small class=\"text-muted\">Plats</small>
                                    {% endif %}
                                  </td>
                                <td><strong class=\"text-primary\">{{ order.totalAmount|number_format(0, ',', ' ') }} FCFA</strong></td>
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
                                        
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-success quick-print\" 
                                                data-order-id=\"{{ order.id }}\" 
                                                data-print-type=\"customer\" 
                                                title=\"Impression rapide\">
                                            <i class=\"fas fa-print\"></i>
                                            <i class=\"fas fa-bolt fa-xs\"></i>
                                        </button>
                                        
                                        <div class=\"btn-group\" role=\"group\">
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\">
                                                <i class=\"fas fa-chevron-down\"></i>
                                            </button>
                                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-customer\" data-order-id=\"{{ order.id }}\" data-print-type=\"customer\">
                                                        <i class=\"fas fa-receipt me-2\"></i> Ticket client
                                                    </button>
                                                </li>
                                                
                                                {% if isRestaurant %}
                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-kitchen\" data-order-id=\"{{ order.id }}\" data-print-type=\"kitchen\">
                                                        <i class=\"fas fa-utensils me-2\"></i> Ticket cuisine
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-delivery\" data-order-id=\"{{ order.id }}\" data-print-type=\"delivery\">
                                                        <i class=\"fas fa-truck me-2\"></i> Ticket livraison
                                                    </button>
                                                </li>
                                                {% endif %}
                                                
                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-cash\" data-order-id=\"{{ order.id }}\" data-print-type=\"cash\">
                                                        <i class=\"fas fa-money-bill-wave me-2\"></i> Ticket caisse
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        
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
                <h5 class=\"modal-title\"><i class=\"fas fa-exchange-alt me-2\"></i> Changer le statut</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\"><p id=\"toggleOrderMessage\"></p></div>
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
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression</h5>
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
                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt me-2\"></i> Supprimer définitivement</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"receiptModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Aperçu du reçu</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"receiptContent\">
                <div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"printReceiptBtn\"><i class=\"fas fa-print me-2\"></i> Imprimer</button>
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
// ==================== PRINT MANAGER ====================
class PrintManager {
    constructor() {
        this.printQueue = [];
        this.isPrinting = false;
        this.init();
    }
    
    init() {
        this.setupEventListeners();
    }
    
    setupEventListeners() {
        const printButtons = document.querySelectorAll('.print-customer, .print-kitchen, .print-cash, .print-delivery, .quick-print');
        
        printButtons.forEach(btn => {
            btn.removeEventListener('click', this.handlePrintClick);
            btn.addEventListener('click', this.handlePrintClick.bind(this));
        });
        
        const printSelectedBtn = document.getElementById('printSelectedBtn');
        if (printSelectedBtn) {
            printSelectedBtn.removeEventListener('click', this.handleMultiplePrint);
            printSelectedBtn.addEventListener('click', this.handleMultiplePrint.bind(this));
        }
    }
    
    handlePrintClick = (e) => {
        e.preventDefault();
        e.stopPropagation();
        
        const btn = e.currentTarget;
        let orderId = btn.dataset.orderId;
        let type = btn.dataset.printType;
        
        if (btn.classList.contains('quick-print') && !type) {
            type = 'customer';
        }
        
        if (!orderId) {
            const parent = btn.closest('[data-order-id]');
            if (parent) orderId = parent.dataset.orderId;
        }
        
        if (!orderId) {
            this.showToast('error', 'Impossible d\\'identifier la commande');
            return;
        }
        
        this.printTicket(orderId, type);
    }
    
    handleMultiplePrint = async () => {
        const selectedIds = Array.from(document.querySelectorAll('.row-checkbox:checked'))
            .map(cb => cb.dataset.orderId)
            .filter(id => id);
        
        if (selectedIds.length === 0) {
            this.showToast('warning', 'Veuillez sélectionner des commandes');
            return;
        }
        
        const type = confirm('Imprimer tickets client (OK) ou cuisine (Annuler) ?') ? 'customer' : 'kitchen';
        await this.printMultipleTickets(selectedIds, type);
    }
    
    async printTicket(orderId, type, options = {}) {
        this.printQueue.push({ orderId, type, options });
        this.processQueue();
    }
    
    async processQueue() {
        if (this.isPrinting || this.printQueue.length === 0) return;
        
        this.isPrinting = true;
        const job = this.printQueue.shift();
        
        try {
            await this.executePrint(job.orderId, job.type, job.options);
        } catch (error) {
            console.error('Erreur d\\'impression:', error);
            this.showFallbackPdf(job.orderId, job.type);
        }
        
        this.isPrinting = false;
        this.processQueue();
    }
    
    async executePrint(orderId, type, options) {
        const url = `/print/ticket/\${orderId}/\${type}`;
        const fullUrl = `\${url}?include_drinks=true&show_prices=true&language=fr`;
        
        const printWindow = window.open(fullUrl, '_blank', 'width=400,height=600,menubar=yes,toolbar=yes');
        
        if (printWindow) {
            printWindow.onload = () => {
                setTimeout(() => {
                    try {
                        printWindow.print();
                        printWindow.onafterprint = () => {
                            printWindow.close();
                            this.showToast('success', `Ticket \${type} prêt à être imprimé`);
                        };
                    } catch (e) {
                        printWindow.close();
                        throw e;
                    }
                }, 500);
            };
        } else {
            throw new Error('Popup bloqué');
        }
    }
    
    showFallbackPdf(orderId, type) {
        let modal = document.getElementById('pdfFallbackModal');
        if (modal) modal.remove();
        
        const modalHtml = `
            <div class=\"modal fade\" id=\"pdfFallbackModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-warning text-dark\">
                            <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Impression impossible</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body text-center py-4\">
                            <i class=\"fas fa-print fa-3x text-muted mb-3\"></i>
                            <p>Impossible d'imprimer directement.</p>
                            <p class=\"text-muted\">Veuillez télécharger le PDF et l'imprimer manuellement.</p>
                        </div>
                        <div class=\"modal-footer justify-content-center\">
                            <a href=\"/print/ticket/\${orderId}/\${type}\" class=\"btn btn-primary\" target=\"_blank\">
                                <i class=\"fas fa-file-pdf me-2\"></i> Télécharger PDF
                            </a>
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', modalHtml);
        modal = new bootstrap.Modal(document.getElementById('pdfFallbackModal'));
        modal.show();
        
        document.getElementById('pdfFallbackModal').addEventListener('hidden.bs.modal', () => {
            document.getElementById('pdfFallbackModal').remove();
        });
    }
    
    async printMultipleTickets(orderIds, type) {
        this.showLoading('Préparation des tickets...');
        
        try {
            const response = await fetch('/print/multiple', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ order_ids: orderIds, type: type })
            });
            
            const data = await response.json();
            
            if (data.success) {
                const blob = this.base64ToBlob(data.pdf, 'application/pdf');
                const url = URL.createObjectURL(blob);
                const printWindow = window.open(url, '_blank');
                
                if (printWindow) {
                    printWindow.onload = () => {
                        setTimeout(() => {
                            try {
                                printWindow.print();
                                printWindow.onafterprint = () => printWindow.close();
                            } catch (e) {
                                printWindow.close();
                            }
                        }, 500);
                    };
                }
                
                this.showToast('success', `\${data.count} ticket(s) prêt(s) à imprimer`);
            } else {
                this.showToast('error', data.error || 'Erreur lors de l\\'impression');
            }
        } catch (error) {
            this.showToast('error', 'Erreur de connexion au serveur');
        } finally {
            this.hideLoading();
        }
    }
    
    base64ToBlob(base64, mimeType) {
        try {
            const byteCharacters = atob(base64);
            const byteNumbers = new Array(byteCharacters.length);
            for (let i = 0; i < byteCharacters.length; i++) {
                byteNumbers[i] = byteCharacters.charCodeAt(i);
            }
            const byteArray = new Uint8Array(byteNumbers);
            return new Blob([byteArray], { type: mimeType });
        } catch (error) {
            return new Blob([], { type: mimeType });
        }
    }
    
    showToast(type, message) {
        const toast = document.createElement('div');
        const bgColor = type === 'success' ? 'bg-success' : (type === 'warning' ? 'bg-warning' : 'bg-danger');
        const icon = type === 'success' ? 'check-circle' : (type === 'warning' ? 'exclamation-triangle' : 'times-circle');
        toast.className = `position-fixed bottom-0 end-0 p-3 m-3 \${bgColor} text-white rounded shadow`;
        toast.style.zIndex = '9999';
        toast.innerHTML = `<i class=\"fas fa-\${icon} me-2\"></i>\${message}`;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }
    
    showLoading(message) {
        this.hideLoading();
        const loader = document.createElement('div');
        loader.id = 'printLoader';
        loader.innerHTML = `
            <div style=\"position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.5); z-index:10000; display:flex; align-items:center; justify-content:center;\">
                <div class=\"bg-white p-4 rounded-4 text-center shadow-lg\" style=\"min-width: 250px;\">
                    <div class=\"spinner-border text-primary mb-3\"></div>
                    <p class=\"mb-0\">\${message}</p>
                </div>
            </div>
        `;
        document.body.appendChild(loader);
    }
    
    hideLoading() {
        const loader = document.getElementById('printLoader');
        if (loader) loader.remove();
    }
    
    refresh() {
        this.setupEventListeners();
    }
}

// ==================== INITIALISATION PRINCIPALE ====================
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
                    @media print { body { margin: 0; padding: 10px; } .no-print { display: none; } }
                </style>
            </head>
            <body>
                \${printContent}
                <div class=\"receipt-footer no-print\">
                    <button onclick=\"window.print()\" style=\"margin-top: 20px; padding: 8px 16px;\">Imprimer</button>
                </div>
                <script>window.print();<\\/script>
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
    
    // Initialisation du PrintManager
    window.printManager = new PrintManager();
});
</script>
{% endblock %}", "sale/orders/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\index.html.twig");
    }
}
