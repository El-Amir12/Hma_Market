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
class __TwigTemplate_eb5cbd365a34681dfe6afc0326f1895a extends Template
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
    /* ✅ NE PAS REDÉFINIR :root ICI - Utiliser les variables de base.html.twig */
    
    .stats-card {
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%) !important;
        border: 1px solid #e5e7eb !important;
        border-radius: 20px !important;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        position: relative;
    }
    
    .stats-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--primary-color);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .stats-card:hover::before {
        opacity: 1;
    }
    
    .stats-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.15) !important;
    }
    
    .stats-card .card-body {
        padding: 1.25rem;
        background: transparent !important;
    }
    
    .stats-card h3 {
        font-size: 1.75rem;
        font-weight: 800;
        margin-bottom: 0.25rem;
        line-height: 1.2;
    }
    
    .stats-card h6 {
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.75rem;
        opacity: 0.8;
    }
    
    .stats-card i {
        opacity: 0.7;
        transition: opacity 0.3s, transform 0.3s;
    }
    
    .stats-card:hover i {
        opacity: 1;
        transform: scale(1.05);
    }
    
    /* ✅ Cartes avec couleurs dynamiques - Utilisation des variables CSS */
    .stats-card.primary-bg { 
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%) !important; 
        color: white; 
    }
    .stats-card.success-bg { 
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important; 
        color: white; 
    }
    .stats-card.info-bg { 
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important; 
        color: white; 
    }
    .stats-card.warning-bg { 
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important; 
        color: white; 
    }
    .stats-card.danger-bg { 
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important; 
        color: white; 
    }
    .stats-card.secondary-bg { 
        background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%) !important; 
        color: white; 
    }
    .stats-card.cyan-bg { 
        background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%) !important; 
        color: white; 
    }
    .stats-card.purple-bg { 
        background: linear-gradient(135deg, var(--secondary-color) 0%, var(--secondary-dark) 100%) !important; 
        color: white; 
    }
    .stats-card.rose-bg { 
        background: linear-gradient(135deg, #f43f5e 0%, #e11d48 100%) !important; 
        color: white; 
    }
    .stats-card.emerald-bg { 
        background: linear-gradient(135deg, #059669 0%, #047857 100%) !important; 
        color: white; 
    }
    
    .stats-card.primary-bg .stat-icon,
    .stats-card.success-bg .stat-icon,
    .stats-card.info-bg .stat-icon,
    .stats-card.warning-bg .stat-icon,
    .stats-card.danger-bg .stat-icon,
    .stats-card.secondary-bg .stat-icon,
    .stats-card.cyan-bg .stat-icon,
    .stats-card.purple-bg .stat-icon,
    .stats-card.rose-bg .stat-icon,
    .stats-card.emerald-bg .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    
    .filter-section {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        border: 1px solid #e5e7eb;
    }
    
    .table-order-row {
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.1s;
    }
    
    .table-order-row:hover {
        background-color: #f8fafc !important;
    }
    
    /* ✅ Badges avec couleurs dynamiques */
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
        background-color: var(--secondary-color) !important; 
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
        border-radius: 12px !important;
        margin-bottom: 1rem !important;
        color: #0c4a6e !important;
    }
    
    .contact-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        color: white;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .contact-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2);
    }
    
    .returns-card {
        background: white;
        border-radius: 20px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }
    
    .returns-card:hover {
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .returns-card .card-header {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border-bottom: 1px solid #e5e7eb;
        padding: 1rem 1.25rem;
    }
    
    .return-stat-box {
        text-align: center;
        padding: 1.25rem;
        border-right: 1px solid #e5e7eb;
        transition: background 0.3s ease;
    }
    
    .return-stat-box:hover {
        background: #f8fafc;
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
        font-size: 1.75rem;
        font-weight: 800;
        margin-bottom: 0;
    }
    
    .return-stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
    }
    
    /* ✅ Avatar avec couleurs dynamiques */
    .initial-avatar {
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        color: white;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        flex-shrink: 0;
    }
    
    .user-avatar-sm {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        flex-shrink: 0;
    }
    
    @media (max-width: 768px) {
        .filter-section .row > div {
            margin-bottom: 1rem;
        }
        
        .stats-card h3 {
            font-size: 1.3rem;
        }
        
        .stats-card h6 {
            font-size: 0.65rem;
        }
        
        .return-stat-box {
            border-right: none;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .return-stat-box:last-child {
            border-bottom: none;
        }
        
        .return-stat-value {
            font-size: 1.3rem;
        }
    }
    
    @media (max-width: 992px) and (min-width: 769px) {
        .stats-card h3 {
            font-size: 1.4rem;
        }
    }
    
    .btn-group .btn {
        transition: all 0.2s ease;
    }
    
    .btn-group .btn:hover {
        transform: translateY(-1px);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 315
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

        // line 316
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 323
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
            <h1 class=\"h3 mb-0 fw-bold\">
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
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 348, $this->source); })()), "request", [], "any", false, false, false, 348), "query", [], "any", false, false, false, 348), "all", [], "any", false, false, false, 348)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "request", [], "any", false, false, false, 353), "query", [], "any", false, false, false, 353), "all", [], "any", false, false, false, 353)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"";
        // line 359
        yield (((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 359, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_sale_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_index")));
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle vente
            </a>
        </div>
    </div>

    <!-- 12 Cartes statistiques avec fonds colorés -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card primary-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Chiffre d'affaires</h6>
                            <h3 class=\"mb-0\">";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_sales", [], "any", true, true, false, 373)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 373, $this->source); })()), "total_sales", [], "any", false, false, false, 373), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">FCFA</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card success-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Nombre de ventes</h6>
                            <h3 class=\"mb-0\">";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", true, true, false, 390)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 390, $this->source); })()), "total_orders", [], "any", false, false, false, 390), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">commandes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-receipt fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card info-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Panier moyen</h6>
                            <h3 class=\"mb-0\">";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_basket", [], "any", true, true, false, 407)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 407, $this->source); })()), "average_basket", [], "any", false, false, false, 407), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">FCFA/vente</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-shopping-basket fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card warning-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Clients uniques</h6>
                            <h3 class=\"mb-0\">";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "unique_customers", [], "any", true, true, false, 424)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 424, $this->source); })()), "unique_customers", [], "any", false, false, false, 424), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">personnes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-users fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card danger-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Ticket moyen</h6>
                            <h3 class=\"mb-0\">";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_ticket", [], "any", true, true, false, 441)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 441, $this->source); })()), "average_ticket", [], "any", false, false, false, 441), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">FCFA/client</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-ticket-alt fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card secondary-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Vente max</h6>
                            <h3 class=\"mb-0\">";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "max_sale", [], "any", true, true, false, 458)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 458, $this->source); })()), "max_sale", [], "any", false, false, false, 458), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">FCFA</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-arrow-up fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\" style=\"background: linear-gradient(135deg, #374151 0%, #1f2937 100%) !important; color: white;\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Vente min</h6>
                            <h3 class=\"mb-0\">";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "min_sale", [], "any", true, true, false, 475)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 475, $this->source); })()), "min_sale", [], "any", false, false, false, 475), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">FCFA</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2 bg-white bg-opacity-25\">
                            <i class=\"fas fa-arrow-down fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card cyan-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Articles vendus</h6>
                            <h3 class=\"mb-0\">";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_items", [], "any", true, true, false, 492)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 492, $this->source); })()), "total_items", [], "any", false, false, false, 492), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">unités</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-boxes fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card emerald-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Ventes actives</h6>
                            <h3 class=\"mb-0\">";
        // line 509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_orders", [], "any", true, true, false, 509)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 509, $this->source); })()), "active_orders", [], "any", false, false, false, 509), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">commandes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card secondary-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Ventes désactivées</h6>
                            <h3 class=\"mb-0\">";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_orders", [], "any", true, true, false, 526)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 526, $this->source); })()), "disabled_orders", [], "any", false, false, false, 526), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">commandes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-ban fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- ✅ CORRECTION : Utilisation de primary-bg au lieu de purple-bg -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card primary-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Taux désactivation</h6>
                            <h3 class=\"mb-0\">";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_percentage", [], "any", true, true, false, 544)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 544, $this->source); })()), "disabled_percentage", [], "any", false, false, false, 544), 0)) : (0)), 1, ",", " "), "html", null, true);
        yield "%</h3>
                            <small class=\"opacity-75\">des ventes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-chart-pie fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card rose-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Ventes annulées</h6>
                            <h3 class=\"mb-0\">";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "cancelled_orders", [], "any", true, true, false, 561)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 561, $this->source); })()), "cancelled_orders", [], "any", false, false, false, 561), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"opacity-75\">commandes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-times-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Message info filtres -->
    ";
        // line 574
        if (((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 574, $this->source); })()), "date_from", [], "any", false, false, false, 574) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 574, $this->source); })()), "date_to", [], "any", false, false, false, 574)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 574, $this->source); })()), "status", [], "any", false, false, false, 574)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 574, $this->source); })()), "payment_method", [], "any", false, false, false, 574)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 574, $this->source); })()), "user_id", [], "any", false, false, false, 574)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 574, $this->source); })()), "min_amount", [], "any", false, false, false, 574)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 574, $this->source); })()), "max_amount", [], "any", false, false, false, 574))) {
            // line 575
            yield "    <div class=\"filter-info\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-info-circle me-2\"></i>
                <strong>Filtres actifs :</strong> Les statistiques ci-dessus sont basées sur les filtres appliqués.
            </div>
            <a href=\"";
            // line 581
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                <i class=\"fas fa-times me-1\"></i> Effacer les filtres
            </a>
        </div>
    </div>
    ";
        }
        // line 587
        yield "
    <!-- Section Retours & Avoirs -->
    <div class=\"mb-4\">
        <div class=\"card border-0 shadow-sm rounded-4\">
            <div class=\"card-header bg-white border-0 pt-4 pb-0\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-undo-alt me-2 text-warning\"></i>
                    Retours & Avoirs
                </h5>
            </div>
            <div class=\"card-body pt-3\">
                <div class=\"row g-4\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"text-center\">
                            <div class=\"mb-2\">
                                <span class=\"badge bg-primary px-3 py-2\">
                                    <i class=\"fas fa-chart-line me-1 text-white\"></i> Total
                                </span>
                            </div>
                            <div class=\"h1 fw-bold text-primary\">";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_returns", [], "any", true, true, false, 606)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 606, $this->source); })()), "total_returns", [], "any", false, false, false, 606), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <small class=\"text-muted\">demandes de retour</small>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"text-center\">
                            <div class=\"mb-2\">
                                <span class=\"badge bg-warning px-3 py-2\">
                                    <i class=\"fas fa-clock me-1 text-white\"></i> En attente
                                </span>
                            </div>
                            <div class=\"h1 fw-bold text-warning\">";
        // line 617
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "pending", [], "any", true, true, false, 617)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 617, $this->source); })()), "pending", [], "any", false, false, false, 617), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <small class=\"text-muted\">à valider</small>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"text-center\">
                            <div class=\"mb-2\">
                                <span class=\"badge bg-info px-3 py-2\">
                                    <i class=\"fas fa-check-circle me-1 text-white\"></i> Approuvés
                                </span>
                            </div>
                            <div class=\"h1 fw-bold text-info\">";
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "approved", [], "any", true, true, false, 628)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 628, $this->source); })()), "approved", [], "any", false, false, false, 628), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <small class=\"text-muted\">en attente remb.</small>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"text-center\">
                            <div class=\"mb-2\">
                                <span class=\"badge bg-success px-3 py-2\">
                                    <i class=\"fas fa-money-bill-wave me-1 text-white\"></i> Remboursés
                                </span>
                            </div>
                            <div class=\"h1 fw-bold text-success\">";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "completed", [], "any", true, true, false, 639)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 639, $this->source); })()), "completed", [], "any", false, false, false, 639), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <small class=\"text-muted\">terminés</small>
                        </div>
                    </div>
                </div>

                <div class=\"row g-3 mt-3 pt-2 border-top\">
                    <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center justify-content-between p-3 bg-light rounded-3\">
                            <div>
                                <i class=\"fas fa-hand-holding-usd text-danger me-2\"></i>
                                <span class=\"text-dark\">Montant remboursé</span>
                            </div>
                            <strong class=\"text-danger ms-3\">";
        // line 652
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_refund_amount", [], "any", true, true, false, 652)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 652, $this->source); })()), "total_refund_amount", [], "any", false, false, false, 652), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</strong>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center justify-content-between p-3 bg-light rounded-3\">
                            <div>
                                <i class=\"fas fa-chart-line text-success me-2\"></i>
                                <span class=\"text-dark\">Taux d'approbation</span>
                            </div>
                            ";
        // line 661
        $context["totalReturns"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_returns", [], "any", true, true, false, 661)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 661, $this->source); })()), "total_returns", [], "any", false, false, false, 661), 0)) : (0));
        // line 662
        yield "                            ";
        $context["approvedCompleted"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "approved", [], "any", true, true, false, 662)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 662, $this->source); })()), "approved", [], "any", false, false, false, 662), 0)) : (0)) + ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "completed", [], "any", true, true, false, 662)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 662, $this->source); })()), "completed", [], "any", false, false, false, 662), 0)) : (0)));
        // line 663
        yield "                            ";
        $context["approvalRate"] = ((((isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 663, $this->source); })()) > 0)) ? ((((isset($context["approvedCompleted"]) || array_key_exists("approvedCompleted", $context) ? $context["approvedCompleted"] : (function () { throw new RuntimeError('Variable "approvedCompleted" does not exist.', 663, $this->source); })()) / (isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 663, $this->source); })())) * 100)) : (0));
        // line 664
        yield "                            <strong class=\"text-success ms-3\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["approvalRate"]) || array_key_exists("approvalRate", $context) ? $context["approvalRate"] : (function () { throw new RuntimeError('Variable "approvalRate" does not exist.', 664, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "%</strong>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center justify-content-between p-3 bg-light rounded-3\">
                            <div>
                                <i class=\"fas fa-chart-pie text-danger me-2\"></i>
                                <span class=\"text-dark\">Taux de rejet</span>
                            </div>
                            ";
        // line 673
        $context["rejectionRate"] = ((((isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 673, $this->source); })()) > 0)) ? (((((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "rejected", [], "any", true, true, false, 673)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnStats"]) || array_key_exists("returnStats", $context) ? $context["returnStats"] : (function () { throw new RuntimeError('Variable "returnStats" does not exist.', 673, $this->source); })()), "rejected", [], "any", false, false, false, 673), 0)) : (0)) / (isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 673, $this->source); })())) * 100)) : (0));
        // line 674
        yield "                            <strong class=\"text-danger ms-3\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["rejectionRate"]) || array_key_exists("rejectionRate", $context) ? $context["rejectionRate"] : (function () { throw new RuntimeError('Variable "rejectionRate" does not exist.', 674, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "%</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analyse approfondie des données -->
    <a href=\"";
        // line 683
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_contact_super_admin");
        yield "\" class=\"text-decoration-none d-block mb-4\">
        <div class=\"contact-card\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-4\">
                <div class=\"d-flex align-items-center gap-3\">
                    <div class=\"rounded-circle bg-white bg-opacity-25 p-3\">
                        <i class=\"fas fa-chart-line fa-2x\"></i>
                    </div>
                    <div>
                        <h4 class=\"mb-1 fw-bold\">📊 Analyse approfondie des données</h4>
                        <p class=\"mb-0 opacity-75\">Cliquez pour découvrir nos offres d'analyse</p>
                    </div>
                </div>
                <div class=\"btn btn-light\">
                    <i class=\"fas fa-arrow-right me-2\"></i> En savoir plus
                </div>
            </div>
        </div>
    </a>

    <!-- Filtres -->
    <div class=\"filter-section\">
        <div class=\"d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 707
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
                    <label class=\"form-label fw-bold small\">Recherche</label>
                    <input type=\"text\" name=\"search\" class=\"form-control\" 
                           placeholder=\"N° commande, client...\" value=\"";
        // line 721
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 721)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 721, $this->source); })()), "search", [], "any", false, false, false, 721), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold small\">Statut</label>
                    <select name=\"status\" class=\"form-select select2-status\">
                        <option value=\"\">Tous</option>
                        ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 727, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 728
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 728, $this->source); })()), "status", [], "any", false, false, false, 728) == $context["status"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["status"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 730
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold small\">Mode de paiement</label>
                    <select name=\"payment_method\" class=\"form-select select2-payment\">
                        <option value=\"\">Tous</option>
                        ";
        // line 736
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payment_methods"]) || array_key_exists("payment_methods", $context) ? $context["payment_methods"] : (function () { throw new RuntimeError('Variable "payment_methods" does not exist.', 736, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 737
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["method"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 737, $this->source); })()), "payment_method", [], "any", false, false, false, 737) == $context["method"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["method"], ["_" => " "])), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['method'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 739
        yield "                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Caissier</label>
                    <select name=\"user_id\" id=\"user-select\" class=\"form-select select2-user\">
                        <option value=\"\">Tous les caissiers</option>
                        ";
        // line 745
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 745, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 746
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 746), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 746, $this->source); })()), "user_id", [], "any", false, false, false, 746) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 746))) ? ("selected") : (""));
            yield ">
                                ";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", true, true, false, 747)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 747), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 747))) : (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 747))), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 750
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold small\">Période</label>
                    <select name=\"date_preset\" id=\"date-preset\" class=\"form-select select2-preset\">
                        <option value=\"\">Personnalisée</option>
                        ";
        // line 756
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["date_presets"]) || array_key_exists("date_presets", $context) ? $context["date_presets"] : (function () { throw new RuntimeError('Variable "date_presets" does not exist.', 756, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 757
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 757, $this->source); })()), "date_preset", [], "any", false, false, false, 757) == $context["key"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 759
        yield "                    </select>
                </div>
            </div>

            <div class=\"row g-3 mt-2\" id=\"custom-dates\" style=\"display: ";
        // line 763
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 763, $this->source); })()), "date_preset", [], "any", false, false, false, 763)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("none") : ("flex"));
        yield ";\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 766)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 766, $this->source); })()), "date_from", [], "any", false, false, false, 766), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 770
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 770)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 770, $this->source); })()), "date_to", [], "any", false, false, false, 770), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Montant min (FCFA)</label>
                    <input type=\"number\" name=\"min_amount\" class=\"form-control\" placeholder=\"Min\" value=\"";
        // line 774
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "min_amount", [], "any", true, true, false, 774)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 774, $this->source); })()), "min_amount", [], "any", false, false, false, 774), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Montant max (FCFA)</label>
                    <input type=\"number\" name=\"max_amount\" class=\"form-control\" placeholder=\"Max\" value=\"";
        // line 778
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "max_amount", [], "any", true, true, false, 778)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 778, $this->source); })()), "max_amount", [], "any", false, false, false, 778), "")) : ("")), "html", null, true);
        yield "\">
                </div>
            </div>

            <div class=\"row g-3 mt-2\">
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold small\">Trier par</label>
                    <select name=\"sort\" class=\"form-select\">
                        <option value=\"created_at\" ";
        // line 786
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 786, $this->source); })()), "sort", [], "any", false, false, false, 786) == "created_at")) ? ("selected") : (""));
        yield ">Date de vente</option>
                        <option value=\"total_amount\" ";
        // line 787
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 787, $this->source); })()), "sort", [], "any", false, false, false, 787) == "total_amount")) ? ("selected") : (""));
        yield ">Montant</option>
                        <option value=\"customer_name\" ";
        // line 788
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 788, $this->source); })()), "sort", [], "any", false, false, false, 788) == "customer_name")) ? ("selected") : (""));
        yield ">Nom client</option>
                    </select>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold small\">Ordre</label>
                    <select name=\"direction\" class=\"form-select\">
                        <option value=\"desc\" ";
        // line 794
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 794, $this->source); })()), "direction", [], "any", false, false, false, 794) == "desc")) ? ("selected") : (""));
        yield ">Plus récent d'abord</option>
                        <option value=\"asc\" ";
        // line 795
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 795, $this->source); })()), "direction", [], "any", false, false, false, 795) == "asc")) ? ("selected") : (""));
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
                <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-list me-2\"></i> Liste des ventes</h5>
                <div class=\"table-header-actions d-flex gap-2 align-items-center flex-wrap\">
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
        // line 818
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 818, $this->source); })()), "html", null, true);
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
        // line 840
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 840, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 841
            yield "                            ";
            $context["itemCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 841));
            // line 842
            yield "                            <tr class=\"table-order-row\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 842)]), "html", null, true);
            yield "\">
                                <td><input type=\"checkbox\" class=\"form-check-input row-checkbox\" data-order-id=\"";
            // line 843
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 843), "html", null, true);
            yield "\" data-order-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 843), "html", null, true);
            yield "\"></td>
                                <td><strong>";
            // line 844
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 844), "html", null, true);
            yield "</strong></td>
                                <td>";
            // line 845
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 845), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"fw-semibold\">";
            // line 847
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 847), "html", null, true);
            yield "</div>
                                    ";
            // line 848
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 848)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 849
                yield "                                        <small class=\"text-muted\"><i class=\"fas fa-phone me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 849), "html", null, true);
                yield "</small>
                                    ";
            }
            // line 851
            yield "                                </td>
                                <td>
                                    <span class=\"badge bg-secondary\">";
            // line 853
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemCount"]) || array_key_exists("itemCount", $context) ? $context["itemCount"] : (function () { throw new RuntimeError('Variable "itemCount" does not exist.', 853, $this->source); })()), "html", null, true);
            yield " article(s)</span>
                                    ";
            // line 854
            if ((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 854, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 855
                yield "                                        <br><small class=\"text-muted\">Plats</small>
                                    ";
            }
            // line 857
            yield "                                </td>
                                <td><strong class=\"text-primary\">";
            // line 858
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 858), 0, ",", " "), "html", null, true);
            yield " FCFA</strong></td>
                                <td>
                                    <span class=\"badge bg-";
            // line 860
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 860) == "cash")) ? ("success") : ("info"));
            yield "\">
                                        ";
            // line 861
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 861), ["_" => " "])), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    ";
            // line 865
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "isActive", [], "any", false, false, false, 865)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 866
                yield "                                        <span class=\"badge badge-status-completed\">Active</span>
                                    ";
            } else {
                // line 868
                yield "                                        <span class=\"badge badge-status-disabled\">Désactivée</span>
                                    ";
            }
            // line 870
            yield "                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center gap-2\">
                                        ";
            // line 873
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 873), "photo", [], "any", false, false, false, 873)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 874
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 874), "photo", [], "any", false, false, false, 874))), "html", null, true);
                yield "\" 
                                                 class=\"rounded-circle user-avatar-sm\" style=\"width: 32px; height: 32px; object-fit: cover;\">
                                        ";
            } else {
                // line 877
                yield "                                            <div class=\"rounded-circle initial-avatar d-flex align-items-center justify-content-center\" style=\"width: 32px; height: 32px;\">
                                                ";
                // line 878
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 878), "fullName", [], "any", false, false, false, 878))), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 881
            yield "                                        <div>
                                            <div class=\"small fw-semibold\">";
            // line 882
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, true, false, 882), "fullName", [], "any", true, true, false, 882)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 882), "fullName", [], "any", false, false, false, 882), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 882), "email", [], "any", false, false, false, 882))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 882), "email", [], "any", false, false, false, 882))), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\">";
            // line 883
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 883), "roleLabel", [], "any", false, false, false, 883), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 889
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 889)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-success quick-print\" 
                                                data-order-id=\"";
            // line 894
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 894), "html", null, true);
            yield "\" 
                                                data-print-type=\"customer\" 
                                                title=\"Impression rapide\">
                                            <i class=\"fas fa-print\"></i>
                                        </button>
                                        
                                        <div class=\"btn-group\" role=\"group\">
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\">
                                                <i class=\"fas fa-chevron-down\"></i>
                                            </button>
                                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-customer\" data-order-id=\"";
            // line 906
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 906), "html", null, true);
            yield "\" data-print-type=\"customer\">
                                                        <i class=\"fas fa-receipt me-2\"></i> Ticket client
                                                    </button>
                                                </li>
                                                
                                                ";
            // line 911
            if ((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 911, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 912
                yield "                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-kitchen\" data-order-id=\"";
                // line 914
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 914), "html", null, true);
                yield "\" data-print-type=\"kitchen\">
                                                        <i class=\"fas fa-utensils me-2\"></i> Ticket cuisine
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-delivery\" data-order-id=\"";
                // line 919
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 919), "html", null, true);
                yield "\" data-print-type=\"delivery\">
                                                        <i class=\"fas fa-truck me-2\"></i> Ticket livraison
                                                    </button>
                                                </li>
                                                ";
            }
            // line 924
            yield "                                                
                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-cash\" data-order-id=\"";
            // line 927
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 927), "html", null, true);
            yield "\" data-print-type=\"cash\">
                                                        <i class=\"fas fa-money-bill-wave me-2\"></i> Ticket caisse
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        ";
            // line 934
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 935
                yield "                                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "isActive", [], "any", false, false, false, 935)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 936
                    yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-warning toggle-order\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 936), "html", null, true);
                    yield "\" data-number=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 936), "html", null, true);
                    yield "\" data-action=\"disable\" title=\"Désactiver\">
                                                    <i class=\"fas fa-ban\"></i>
                                                </button>
                                            ";
                } else {
                    // line 940
                    yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success toggle-order\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 940), "html", null, true);
                    yield "\" data-number=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 940), "html", null, true);
                    yield "\" data-action=\"enable\" title=\"Activer\">
                                                    <i class=\"fas fa-check-circle\"></i>
                                                </button>
                                            ";
                }
                // line 944
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-order\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 944), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 944), "html", null, true);
                yield "\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        ";
            }
            // line 948
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 951
        if (!$context['_iterated']) {
            // line 952
            yield "                            <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <i class=\"fas fa-shopping-cart fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucune vente trouvée</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres pour voir plus de résultats</p>
                                    <a href=\"";
            // line 957
            yield (((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 957, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_sale_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_index")));
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer une vente
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 963
        yield "                    </tbody>
                </table>
            </div>
        </div>

        ";
        // line 968
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 968, $this->source); })()) > 1)) {
            // line 969
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 972
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 972, $this->source); })()) > 1)) {
                // line 973
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 974
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 974, $this->source); })()), "request", [], "any", false, false, false, 974), "query", [], "any", false, false, false, 974), "all", [], "any", false, false, false, 974), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 974, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i> Précédent
                            </a>
                        </li>
                    ";
            }
            // line 979
            yield "                    
                    ";
            // line 980
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 980, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 981
                yield "                        ";
                if ((((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 981, $this->source); })())) || (($context["page"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 981, $this->source); })()) - 2)) && ($context["page"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 981, $this->source); })()) + 2)))) || ($context["page"] == 1)) || ($context["page"] == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 981, $this->source); })())))) {
                    // line 982
                    yield "                            ";
                    if ((($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 982, $this->source); })()) - 3)) || ($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 982, $this->source); })()) + 3)))) {
                        // line 983
                        yield "                                <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                            ";
                    } else {
                        // line 985
                        yield "                                <li class=\"page-item ";
                        yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 985, $this->source); })()))) ? ("active") : (""));
                        yield "\">
                                    <a class=\"page-link\" href=\"";
                        // line 986
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 986, $this->source); })()), "request", [], "any", false, false, false, 986), "query", [], "any", false, false, false, 986), "all", [], "any", false, false, false, 986), ["page" => $context["page"]])), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                                </li>
                            ";
                    }
                    // line 989
                    yield "                        ";
                }
                // line 990
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 991
            yield "                    
                    ";
            // line 992
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 992, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 992, $this->source); })()))) {
                // line 993
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 994
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 994, $this->source); })()), "request", [], "any", false, false, false, 994), "query", [], "any", false, false, false, 994), "all", [], "any", false, false, false, 994), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 994, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                                Suivant <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 999
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 1003
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

    // line 1071
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

        // line 1072
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation Select2
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
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
    }

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
        if (printWindow) {
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
        }
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
        // line 1270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle_order"), "html", null, true);
        yield "';
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
        // line 1292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_order"), "html", null, true);
        yield "';
            
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
        return array (  1808 => 1292,  1783 => 1270,  1582 => 1072,  1569 => 1071,  1492 => 1003,  1486 => 999,  1478 => 994,  1475 => 993,  1473 => 992,  1470 => 991,  1464 => 990,  1461 => 989,  1453 => 986,  1448 => 985,  1444 => 983,  1441 => 982,  1438 => 981,  1434 => 980,  1431 => 979,  1423 => 974,  1420 => 973,  1418 => 972,  1413 => 969,  1411 => 968,  1404 => 963,  1392 => 957,  1385 => 952,  1383 => 951,  1376 => 948,  1366 => 944,  1356 => 940,  1346 => 936,  1343 => 935,  1341 => 934,  1331 => 927,  1326 => 924,  1318 => 919,  1310 => 914,  1306 => 912,  1304 => 911,  1296 => 906,  1281 => 894,  1273 => 889,  1264 => 883,  1260 => 882,  1257 => 881,  1251 => 878,  1248 => 877,  1241 => 874,  1239 => 873,  1234 => 870,  1230 => 868,  1226 => 866,  1224 => 865,  1217 => 861,  1213 => 860,  1208 => 858,  1205 => 857,  1201 => 855,  1199 => 854,  1195 => 853,  1191 => 851,  1185 => 849,  1183 => 848,  1179 => 847,  1174 => 845,  1170 => 844,  1164 => 843,  1159 => 842,  1156 => 841,  1151 => 840,  1126 => 818,  1100 => 795,  1096 => 794,  1087 => 788,  1083 => 787,  1079 => 786,  1068 => 778,  1061 => 774,  1054 => 770,  1047 => 766,  1041 => 763,  1035 => 759,  1022 => 757,  1018 => 756,  1010 => 750,  1001 => 747,  994 => 746,  990 => 745,  982 => 739,  969 => 737,  965 => 736,  957 => 730,  944 => 728,  940 => 727,  931 => 721,  914 => 707,  887 => 683,  874 => 674,  872 => 673,  859 => 664,  856 => 663,  853 => 662,  851 => 661,  839 => 652,  823 => 639,  809 => 628,  795 => 617,  781 => 606,  760 => 587,  751 => 581,  743 => 575,  741 => 574,  725 => 561,  705 => 544,  684 => 526,  664 => 509,  644 => 492,  624 => 475,  604 => 458,  584 => 441,  564 => 424,  544 => 407,  524 => 390,  504 => 373,  487 => 359,  478 => 353,  470 => 348,  442 => 323,  433 => 316,  420 => 315,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
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
    /* ✅ NE PAS REDÉFINIR :root ICI - Utiliser les variables de base.html.twig */
    
    .stats-card {
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%) !important;
        border: 1px solid #e5e7eb !important;
        border-radius: 20px !important;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        position: relative;
    }
    
    .stats-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--primary-color);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .stats-card:hover::before {
        opacity: 1;
    }
    
    .stats-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.15) !important;
    }
    
    .stats-card .card-body {
        padding: 1.25rem;
        background: transparent !important;
    }
    
    .stats-card h3 {
        font-size: 1.75rem;
        font-weight: 800;
        margin-bottom: 0.25rem;
        line-height: 1.2;
    }
    
    .stats-card h6 {
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.75rem;
        opacity: 0.8;
    }
    
    .stats-card i {
        opacity: 0.7;
        transition: opacity 0.3s, transform 0.3s;
    }
    
    .stats-card:hover i {
        opacity: 1;
        transform: scale(1.05);
    }
    
    /* ✅ Cartes avec couleurs dynamiques - Utilisation des variables CSS */
    .stats-card.primary-bg { 
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%) !important; 
        color: white; 
    }
    .stats-card.success-bg { 
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important; 
        color: white; 
    }
    .stats-card.info-bg { 
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important; 
        color: white; 
    }
    .stats-card.warning-bg { 
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important; 
        color: white; 
    }
    .stats-card.danger-bg { 
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important; 
        color: white; 
    }
    .stats-card.secondary-bg { 
        background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%) !important; 
        color: white; 
    }
    .stats-card.cyan-bg { 
        background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%) !important; 
        color: white; 
    }
    .stats-card.purple-bg { 
        background: linear-gradient(135deg, var(--secondary-color) 0%, var(--secondary-dark) 100%) !important; 
        color: white; 
    }
    .stats-card.rose-bg { 
        background: linear-gradient(135deg, #f43f5e 0%, #e11d48 100%) !important; 
        color: white; 
    }
    .stats-card.emerald-bg { 
        background: linear-gradient(135deg, #059669 0%, #047857 100%) !important; 
        color: white; 
    }
    
    .stats-card.primary-bg .stat-icon,
    .stats-card.success-bg .stat-icon,
    .stats-card.info-bg .stat-icon,
    .stats-card.warning-bg .stat-icon,
    .stats-card.danger-bg .stat-icon,
    .stats-card.secondary-bg .stat-icon,
    .stats-card.cyan-bg .stat-icon,
    .stats-card.purple-bg .stat-icon,
    .stats-card.rose-bg .stat-icon,
    .stats-card.emerald-bg .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    
    .filter-section {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        border: 1px solid #e5e7eb;
    }
    
    .table-order-row {
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.1s;
    }
    
    .table-order-row:hover {
        background-color: #f8fafc !important;
    }
    
    /* ✅ Badges avec couleurs dynamiques */
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
        background-color: var(--secondary-color) !important; 
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
        border-radius: 12px !important;
        margin-bottom: 1rem !important;
        color: #0c4a6e !important;
    }
    
    .contact-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        color: white;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .contact-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2);
    }
    
    .returns-card {
        background: white;
        border-radius: 20px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }
    
    .returns-card:hover {
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .returns-card .card-header {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border-bottom: 1px solid #e5e7eb;
        padding: 1rem 1.25rem;
    }
    
    .return-stat-box {
        text-align: center;
        padding: 1.25rem;
        border-right: 1px solid #e5e7eb;
        transition: background 0.3s ease;
    }
    
    .return-stat-box:hover {
        background: #f8fafc;
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
        font-size: 1.75rem;
        font-weight: 800;
        margin-bottom: 0;
    }
    
    .return-stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
    }
    
    /* ✅ Avatar avec couleurs dynamiques */
    .initial-avatar {
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        color: white;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        flex-shrink: 0;
    }
    
    .user-avatar-sm {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        flex-shrink: 0;
    }
    
    @media (max-width: 768px) {
        .filter-section .row > div {
            margin-bottom: 1rem;
        }
        
        .stats-card h3 {
            font-size: 1.3rem;
        }
        
        .stats-card h6 {
            font-size: 0.65rem;
        }
        
        .return-stat-box {
            border-right: none;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .return-stat-box:last-child {
            border-bottom: none;
        }
        
        .return-stat-value {
            font-size: 1.3rem;
        }
    }
    
    @media (max-width: 992px) and (min-width: 769px) {
        .stats-card h3 {
            font-size: 1.4rem;
        }
    }
    
    .btn-group .btn {
        transition: all 0.2s ease;
    }
    
    .btn-group .btn:hover {
        transform: translateY(-1px);
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
            <h1 class=\"h3 mb-0 fw-bold\">
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

    <!-- 12 Cartes statistiques avec fonds colorés -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card primary-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Chiffre d'affaires</h6>
                            <h3 class=\"mb-0\">{{ stats.total_sales|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">FCFA</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card success-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Nombre de ventes</h6>
                            <h3 class=\"mb-0\">{{ stats.total_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">commandes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-receipt fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card info-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Panier moyen</h6>
                            <h3 class=\"mb-0\">{{ stats.average_basket|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">FCFA/vente</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-shopping-basket fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card warning-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Clients uniques</h6>
                            <h3 class=\"mb-0\">{{ stats.unique_customers|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">personnes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-users fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card danger-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Ticket moyen</h6>
                            <h3 class=\"mb-0\">{{ stats.average_ticket|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">FCFA/client</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-ticket-alt fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card secondary-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Vente max</h6>
                            <h3 class=\"mb-0\">{{ stats.max_sale|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">FCFA</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-arrow-up fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\" style=\"background: linear-gradient(135deg, #374151 0%, #1f2937 100%) !important; color: white;\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Vente min</h6>
                            <h3 class=\"mb-0\">{{ stats.min_sale|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">FCFA</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2 bg-white bg-opacity-25\">
                            <i class=\"fas fa-arrow-down fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card cyan-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Articles vendus</h6>
                            <h3 class=\"mb-0\">{{ stats.total_items|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">unités</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-boxes fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card emerald-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Ventes actives</h6>
                            <h3 class=\"mb-0\">{{ stats.active_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">commandes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card secondary-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Ventes désactivées</h6>
                            <h3 class=\"mb-0\">{{ stats.disabled_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">commandes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-ban fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- ✅ CORRECTION : Utilisation de primary-bg au lieu de purple-bg -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card primary-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Taux désactivation</h6>
                            <h3 class=\"mb-0\">{{ stats.disabled_percentage|default(0)|number_format(1, ',', ' ') }}%</h3>
                            <small class=\"opacity-75\">des ventes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-chart-pie fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card rose-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Ventes annulées</h6>
                            <h3 class=\"mb-0\">{{ stats.cancelled_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"opacity-75\">commandes</small>
                        </div>
                        <div class=\"stat-icon rounded-circle p-2\">
                            <i class=\"fas fa-times-circle fa-2x\"></i>
                        </div>
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
    <div class=\"mb-4\">
        <div class=\"card border-0 shadow-sm rounded-4\">
            <div class=\"card-header bg-white border-0 pt-4 pb-0\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-undo-alt me-2 text-warning\"></i>
                    Retours & Avoirs
                </h5>
            </div>
            <div class=\"card-body pt-3\">
                <div class=\"row g-4\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"text-center\">
                            <div class=\"mb-2\">
                                <span class=\"badge bg-primary px-3 py-2\">
                                    <i class=\"fas fa-chart-line me-1 text-white\"></i> Total
                                </span>
                            </div>
                            <div class=\"h1 fw-bold text-primary\">{{ returnStats.total_returns|default(0)|number_format(0, ',', ' ') }}</div>
                            <small class=\"text-muted\">demandes de retour</small>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"text-center\">
                            <div class=\"mb-2\">
                                <span class=\"badge bg-warning px-3 py-2\">
                                    <i class=\"fas fa-clock me-1 text-white\"></i> En attente
                                </span>
                            </div>
                            <div class=\"h1 fw-bold text-warning\">{{ returnStats.pending|default(0)|number_format(0, ',', ' ') }}</div>
                            <small class=\"text-muted\">à valider</small>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"text-center\">
                            <div class=\"mb-2\">
                                <span class=\"badge bg-info px-3 py-2\">
                                    <i class=\"fas fa-check-circle me-1 text-white\"></i> Approuvés
                                </span>
                            </div>
                            <div class=\"h1 fw-bold text-info\">{{ returnStats.approved|default(0)|number_format(0, ',', ' ') }}</div>
                            <small class=\"text-muted\">en attente remb.</small>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"text-center\">
                            <div class=\"mb-2\">
                                <span class=\"badge bg-success px-3 py-2\">
                                    <i class=\"fas fa-money-bill-wave me-1 text-white\"></i> Remboursés
                                </span>
                            </div>
                            <div class=\"h1 fw-bold text-success\">{{ returnStats.completed|default(0)|number_format(0, ',', ' ') }}</div>
                            <small class=\"text-muted\">terminés</small>
                        </div>
                    </div>
                </div>

                <div class=\"row g-3 mt-3 pt-2 border-top\">
                    <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center justify-content-between p-3 bg-light rounded-3\">
                            <div>
                                <i class=\"fas fa-hand-holding-usd text-danger me-2\"></i>
                                <span class=\"text-dark\">Montant remboursé</span>
                            </div>
                            <strong class=\"text-danger ms-3\">{{ returnStats.total_refund_amount|default(0)|number_format(0, ',', ' ') }} FCFA</strong>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center justify-content-between p-3 bg-light rounded-3\">
                            <div>
                                <i class=\"fas fa-chart-line text-success me-2\"></i>
                                <span class=\"text-dark\">Taux d'approbation</span>
                            </div>
                            {% set totalReturns = returnStats.total_returns|default(0) %}
                            {% set approvedCompleted = (returnStats.approved|default(0)) + (returnStats.completed|default(0)) %}
                            {% set approvalRate = (totalReturns > 0) ? (approvedCompleted / totalReturns * 100) : 0 %}
                            <strong class=\"text-success ms-3\">{{ approvalRate|number_format(1, ',', ' ') }}%</strong>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center justify-content-between p-3 bg-light rounded-3\">
                            <div>
                                <i class=\"fas fa-chart-pie text-danger me-2\"></i>
                                <span class=\"text-dark\">Taux de rejet</span>
                            </div>
                            {% set rejectionRate = (totalReturns > 0) ? ((returnStats.rejected|default(0)) / totalReturns * 100) : 0 %}
                            <strong class=\"text-danger ms-3\">{{ rejectionRate|number_format(1, ',', ' ') }}%</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analyse approfondie des données -->
    <a href=\"{{ path('app_orders_contact_super_admin') }}\" class=\"text-decoration-none d-block mb-4\">
        <div class=\"contact-card\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-4\">
                <div class=\"d-flex align-items-center gap-3\">
                    <div class=\"rounded-circle bg-white bg-opacity-25 p-3\">
                        <i class=\"fas fa-chart-line fa-2x\"></i>
                    </div>
                    <div>
                        <h4 class=\"mb-1 fw-bold\">📊 Analyse approfondie des données</h4>
                        <p class=\"mb-0 opacity-75\">Cliquez pour découvrir nos offres d'analyse</p>
                    </div>
                </div>
                <div class=\"btn btn-light\">
                    <i class=\"fas fa-arrow-right me-2\"></i> En savoir plus
                </div>
            </div>
        </div>
    </a>

    <!-- Filtres -->
    <div class=\"filter-section\">
        <div class=\"d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
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
                    <label class=\"form-label fw-bold small\">Recherche</label>
                    <input type=\"text\" name=\"search\" class=\"form-control\" 
                           placeholder=\"N° commande, client...\" value=\"{{ filters.search|default('') }}\">
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold small\">Statut</label>
                    <select name=\"status\" class=\"form-select select2-status\">
                        <option value=\"\">Tous</option>
                        {% for status in statuses %}
                            <option value=\"{{ status }}\" {{ filters.status == status ? 'selected' }}>{{ status|capitalize }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold small\">Mode de paiement</label>
                    <select name=\"payment_method\" class=\"form-select select2-payment\">
                        <option value=\"\">Tous</option>
                        {% for method in payment_methods %}
                            <option value=\"{{ method }}\" {{ filters.payment_method == method ? 'selected' }}>{{ method|replace({'_': ' '})|capitalize }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Caissier</label>
                    <select name=\"user_id\" id=\"user-select\" class=\"form-select select2-user\">
                        <option value=\"\">Tous les caissiers</option>
                        {% for user in users %}
                            <option value=\"{{ user.id }}\" {{ filters.user_id == user.id ? 'selected' }}>
                                {{ user.fullName|default(user.email) }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold small\">Période</label>
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
                    <label class=\"form-label fw-bold small\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ filters.date_from|default('') }}\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ filters.date_to|default('') }}\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Montant min (FCFA)</label>
                    <input type=\"number\" name=\"min_amount\" class=\"form-control\" placeholder=\"Min\" value=\"{{ filters.min_amount|default('') }}\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Montant max (FCFA)</label>
                    <input type=\"number\" name=\"max_amount\" class=\"form-control\" placeholder=\"Max\" value=\"{{ filters.max_amount|default('') }}\">
                </div>
            </div>

            <div class=\"row g-3 mt-2\">
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold small\">Trier par</label>
                    <select name=\"sort\" class=\"form-select\">
                        <option value=\"created_at\" {{ filters.sort == 'created_at' ? 'selected' }}>Date de vente</option>
                        <option value=\"total_amount\" {{ filters.sort == 'total_amount' ? 'selected' }}>Montant</option>
                        <option value=\"customer_name\" {{ filters.sort == 'customer_name' ? 'selected' }}>Nom client</option>
                    </select>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold small\">Ordre</label>
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
                <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-list me-2\"></i> Liste des ventes</h5>
                <div class=\"table-header-actions d-flex gap-2 align-items-center flex-wrap\">
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
                                    <div class=\"fw-semibold\">{{ order.customerName }}</div>
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
                                    <div class=\"d-flex align-items-center gap-2\">
                                        {% if order.user.photo %}
                                            <img src=\"{{ asset('uploads/users/' ~ order.user.photo) }}\" 
                                                 class=\"rounded-circle user-avatar-sm\" style=\"width: 32px; height: 32px; object-fit: cover;\">
                                        {% else %}
                                            <div class=\"rounded-circle initial-avatar d-flex align-items-center justify-content-center\" style=\"width: 32px; height: 32px;\">
                                                {{ order.user.fullName|first|upper }}
                                            </div>
                                        {% endif %}
                                        <div>
                                            <div class=\"small fw-semibold\">{{ order.user.fullName|default(order.user.email) }}</div>
                                            <small class=\"text-muted\">{{ order.user.roleLabel }}</small>
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
                                    <i class=\"fas fa-shopping-cart fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucune vente trouvée</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres pour voir plus de résultats</p>
                                    <a href=\"{{ isRestaurant ? path('restaurant_sale_index') : path('retail_sale_index') }}\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer une vente
                                    </a>
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
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation Select2
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
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
    }

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
        if (printWindow) {
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
        }
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
            toggleOrderToken.value = '{{ csrf_token(\"toggle_order\") }}';
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
            deleteOrderToken.value = '{{ csrf_token(\"delete_order\") }}';
            
            deleteModal.show();
        });
    });
});
</script>
{% endblock %}", "sale/orders/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\index.html.twig");
    }
}
