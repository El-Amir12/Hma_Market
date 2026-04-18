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
    :root { --primary-color: #0463f1; --success-color: #10b981; --danger-color: #ef4444; --warning-color: #f59e0b; --info-color: #3b82f6; }
    
    /* Cartes statistiques - TOUTES IDENTIQUES avec fond blanc pur */
    .stats-card {
        background: #ffffff !important;
        border: 1px solid #e5e7eb !important;
        border-radius: 16px !important;
        transition: transform 0.2s, box-shadow 0.2s;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }
    .stats-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .stats-card .card-body {
        padding: 1rem;
        background: #ffffff !important;
    }
    .stats-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }
    .stats-card h6 {
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
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
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .table-order-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .table-order-row:hover {
        background-color: #f8f9fa;
    }
    .badge-payment-paid { background-color: #10b981; }
    .badge-payment-partial { background-color: #f59e0b; }
    .badge-status-completed { background-color: #10b981; }
    .badge-status-cancelled { background-color: #ef4444; }
    .badge-status-refunded { background-color: #8b5cf6; }
    .badge-status-disabled { background-color: #6c757d; }
    
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
        transition: transform 0.2s;
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
    
    @media (max-width: 768px) {
        .filter-section .row > div {
            margin-bottom: 1rem;
        }
        .stats-card h3 {
            font-size: 1.2rem;
        }
        .table-header-actions {
            margin-top: 0.5rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
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

        // line 129
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 136
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
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "request", [], "any", false, false, false, 161), "query", [], "any", false, false, false, 161), "all", [], "any", false, false, false, 161)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "request", [], "any", false, false, false, 166), "query", [], "any", false, false, false, 166), "all", [], "any", false, false, false, 166)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"";
        // line 172
        yield (((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 172, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_sale_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_index")));
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle vente
            </a>
        </div>
    </div>

    <!-- Message contact Super Admin -->
    <a href=\"";
        // line 179
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

    <!-- 12 Cartes statistiques (TOUTES AVEC LE MÊME FOND BLANC) -->
    <div class=\"row g-3 mb-4\">
        <!-- Carte 1: Chiffre d'affaires -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-primary\">Chiffre d'affaires</h6>
                            <h3 class=\"mb-0 text-primary\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_sales", [], "any", true, true, false, 203)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 203, $this->source); })()), "total_sales", [], "any", false, false, false, 203), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 2: Nombre de ventes -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-success\">Nombre de ventes</h6>
                            <h3 class=\"mb-0 text-success\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", true, true, false, 218)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 218, $this->source); })()), "total_orders", [], "any", false, false, false, 218), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-receipt fa-2x text-success opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 3: Panier moyen -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-info\">Panier moyen</h6>
                            <h3 class=\"mb-0 text-info\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_basket", [], "any", true, true, false, 233)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 233, $this->source); })()), "average_basket", [], "any", false, false, false, 233), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA/vente</small>
                        </div>
                        <i class=\"fas fa-shopping-basket fa-2x text-info opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 4: Clients uniques -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-warning\">Clients uniques</h6>
                            <h3 class=\"mb-0 text-warning\">";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "unique_customers", [], "any", true, true, false, 248)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 248, $this->source); })()), "unique_customers", [], "any", false, false, false, 248), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">personnes</small>
                        </div>
                        <i class=\"fas fa-users fa-2x text-warning opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 5: Ticket moyen -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-danger\">Ticket moyen</h6>
                            <h3 class=\"mb-0 text-danger\">";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_ticket", [], "any", true, true, false, 263)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 263, $this->source); })()), "average_ticket", [], "any", false, false, false, 263), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA/client</small>
                        </div>
                        <i class=\"fas fa-ticket-alt fa-2x text-danger opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 6: Vente max -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-secondary\">Vente max</h6>
                            <h3 class=\"mb-0 text-secondary\">";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "max_sale", [], "any", true, true, false, 278)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 278, $this->source); })()), "max_sale", [], "any", false, false, false, 278), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-arrow-up fa-2x text-secondary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 7: Vente min -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-dark\">Vente min</h6>
                            <h3 class=\"mb-0 text-dark\">";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "min_sale", [], "any", true, true, false, 293)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 293, $this->source); })()), "min_sale", [], "any", false, false, false, 293), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-arrow-down fa-2x text-dark opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 8: Articles vendus -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-cyan\">Articles vendus</h6>
                            <h3 class=\"mb-0 text-cyan\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_items", [], "any", true, true, false, 308)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 308, $this->source); })()), "total_items", [], "any", false, false, false, 308), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">unités</small>
                        </div>
                        <i class=\"fas fa-boxes fa-2x text-cyan opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 9: Ventes actives -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-emerald\">Ventes actives</h6>
                            <h3 class=\"mb-0 text-emerald\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_orders", [], "any", true, true, false, 323)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 323, $this->source); })()), "active_orders", [], "any", false, false, false, 323), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-check-circle fa-2x text-emerald opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 10: Ventes désactivées -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-gray\">Ventes désactivées</h6>
                            <h3 class=\"mb-0 text-gray\">";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_orders", [], "any", true, true, false, 338)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 338, $this->source); })()), "disabled_orders", [], "any", false, false, false, 338), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-ban fa-2x text-gray opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 11: Taux désactivation -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-purple\">Taux désactivation</h6>
                            <h3 class=\"mb-0 text-purple\">";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_percentage", [], "any", true, true, false, 353)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 353, $this->source); })()), "disabled_percentage", [], "any", false, false, false, 353), 0)) : (0)), 1, ",", " "), "html", null, true);
        yield "%</h3>
                            <small class=\"text-muted\">des ventes</small>
                        </div>
                        <i class=\"fas fa-chart-pie fa-2x text-purple opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 12: Ventes annulées -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-rose\">Ventes annulées</h6>
                            <h3 class=\"mb-0 text-rose\">";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "cancelled_orders", [], "any", true, true, false, 368)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 368, $this->source); })()), "cancelled_orders", [], "any", false, false, false, 368), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-times-circle fa-2x text-rose opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Message info filtres (visible quand des filtres sont actifs) -->
    ";
        // line 379
        if (((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 379, $this->source); })()), "date_from", [], "any", false, false, false, 379) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 379, $this->source); })()), "date_to", [], "any", false, false, false, 379)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 379, $this->source); })()), "status", [], "any", false, false, false, 379)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 379, $this->source); })()), "payment_method", [], "any", false, false, false, 379)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 379, $this->source); })()), "user_id", [], "any", false, false, false, 379)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 379, $this->source); })()), "min_amount", [], "any", false, false, false, 379)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 379, $this->source); })()), "max_amount", [], "any", false, false, false, 379))) {
            // line 380
            yield "    <div class=\"filter-info\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-info-circle me-2\"></i>
                <strong>Filtres actifs :</strong> Les statistiques ci-dessus sont basées sur les filtres appliqués.
            </div>
            <a href=\"";
            // line 386
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                <i class=\"fas fa-times me-1\"></i> Effacer les filtres
            </a>
        </div>
    </div>
    ";
        }
        // line 392
        yield "
    <!-- Filtres -->
    <div class=\"filter-section\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 398
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
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 412)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 412, $this->source); })()), "search", [], "any", false, false, false, 412), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Statut</label>
                    <select name=\"status\" class=\"form-select select2-status\">
                        <option value=\"\">Tous</option>
                        ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 418, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 419
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 419, $this->source); })()), "status", [], "any", false, false, false, 419) == $context["status"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["status"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Mode de paiement</label>
                    <select name=\"payment_method\" class=\"form-select select2-payment\">
                        <option value=\"\">Tous</option>
                        ";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payment_methods"]) || array_key_exists("payment_methods", $context) ? $context["payment_methods"] : (function () { throw new RuntimeError('Variable "payment_methods" does not exist.', 427, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 428
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["method"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 428, $this->source); })()), "payment_method", [], "any", false, false, false, 428) == $context["method"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["method"], ["_" => " "])), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['method'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        yield "                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Caissier</label>
                    <select name=\"user_id\" id=\"user-select\" class=\"form-select select2-user\">
                        <option value=\"\">Tous les caissiers</option>
                        ";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 436, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 437
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 437), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 437, $this->source); })()), "user_id", [], "any", false, false, false, 437) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 437))) ? ("selected") : (""));
            yield ">
                                ";
            // line 438
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 438)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 439
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 439))), "html", null, true);
                yield "\" class=\"rounded-circle me-2\" style=\"width: 20px; height: 20px; object-fit: cover;\">
                                ";
            }
            // line 441
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", true, true, false, 441)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 441), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 441))) : (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 441))), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Période</label>
                    <select name=\"date_preset\" id=\"date-preset\" class=\"form-select select2-preset\">
                        <option value=\"\">Personnalisée</option>
                        ";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["date_presets"]) || array_key_exists("date_presets", $context) ? $context["date_presets"] : (function () { throw new RuntimeError('Variable "date_presets" does not exist.', 450, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 451
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 451, $this->source); })()), "date_preset", [], "any", false, false, false, 451) == $context["key"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 453
        yield "                    </select>
                </div>
            </div>

            <div class=\"row g-3 mt-2\" id=\"custom-dates\" style=\"display: ";
        // line 457
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 457, $this->source); })()), "date_preset", [], "any", false, false, false, 457)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("none") : ("flex"));
        yield ";\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 460)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 460, $this->source); })()), "date_from", [], "any", false, false, false, 460), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 464)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 464, $this->source); })()), "date_to", [], "any", false, false, false, 464), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Montant min (FCFA)</label>
                    <input type=\"number\" name=\"min_amount\" class=\"form-control\" placeholder=\"Min\" value=\"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "min_amount", [], "any", true, true, false, 468)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 468, $this->source); })()), "min_amount", [], "any", false, false, false, 468), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Montant max (FCFA)</label>
                    <input type=\"number\" name=\"max_amount\" class=\"form-control\" placeholder=\"Max\" value=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "max_amount", [], "any", true, true, false, 472)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 472, $this->source); })()), "max_amount", [], "any", false, false, false, 472), "")) : ("")), "html", null, true);
        yield "\">
                </div>
            </div>

            <div class=\"row g-3 mt-2\">
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Trier par</label>
                    <select name=\"sort\" class=\"form-select\">
                        <option value=\"created_at\" ";
        // line 480
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 480, $this->source); })()), "sort", [], "any", false, false, false, 480) == "created_at")) ? ("selected") : (""));
        yield ">Date de vente</option>
                        <option value=\"total_amount\" ";
        // line 481
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 481, $this->source); })()), "sort", [], "any", false, false, false, 481) == "total_amount")) ? ("selected") : (""));
        yield ">Montant</option>
                        <option value=\"customer_name\" ";
        // line 482
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 482, $this->source); })()), "sort", [], "any", false, false, false, 482) == "customer_name")) ? ("selected") : (""));
        yield ">Nom client</option>
                    </select>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Ordre</label>
                    <select name=\"direction\" class=\"form-select\">
                        <option value=\"desc\" ";
        // line 488
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 488, $this->source); })()), "direction", [], "any", false, false, false, 488) == "desc")) ? ("selected") : (""));
        yield ">Plus récent d'abord</option>
                        <option value=\"asc\" ";
        // line 489
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 489, $this->source); })()), "direction", [], "any", false, false, false, 489) == "asc")) ? ("selected") : (""));
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
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 512, $this->source); })()), "html", null, true);
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
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 534, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 535
            yield "                            ";
            $context["itemCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 535));
            // line 536
            yield "                            <tr class=\"table-order-row\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 536)]), "html", null, true);
            yield "\">
                                <td><input type=\"checkbox\" class=\"form-check-input row-checkbox\" data-order-id=\"";
            // line 537
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 537), "html", null, true);
            yield "\" data-order-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 537), "html", null, true);
            yield "\"></td>
                                <td>
                                    <strong>";
            // line 539
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 539), "html", null, true);
            yield "</strong>
                                    <br>
                                    <small class=\"text-muted\">#";
            // line 541
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 541), "html", null, true);
            yield "</small>
                                </td>
                                <td>";
            // line 543
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 543), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>
                                    <div>";
            // line 545
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 545), "html", null, true);
            yield "</div>
                                    ";
            // line 546
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 546)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 547
                yield "                                        <small class=\"text-muted\"><i class=\"fas fa-phone me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 547), "html", null, true);
                yield "</small>
                                    ";
            }
            // line 549
            yield "                                  </td>
                                <td>
                                    <span class=\"badge bg-secondary\">";
            // line 551
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemCount"]) || array_key_exists("itemCount", $context) ? $context["itemCount"] : (function () { throw new RuntimeError('Variable "itemCount" does not exist.', 551, $this->source); })()), "html", null, true);
            yield " article(s)</span>
                                    ";
            // line 552
            if ((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 552, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 553
                yield "                                        <br>
                                        <small class=\"text-muted\">Plats</small>
                                    ";
            }
            // line 556
            yield "                                  </td>
                                <td>
                                    <strong class=\"text-primary\">";
            // line 558
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 558), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                  </td>
                                <td>
                                    <span class=\"badge bg-";
            // line 561
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 561) == "cash")) ? ("success") : ("info"));
            yield "\">
                                        ";
            // line 562
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 562), ["_" => " "])), "html", null, true);
            yield "
                                    </span>
                                  </td>
                                <td>
                                    ";
            // line 566
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "isActive", [], "any", false, false, false, 566)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 567
                yield "                                        <span class=\"badge badge-status-completed\">Active</span>
                                    ";
            } else {
                // line 569
                yield "                                        <span class=\"badge badge-status-disabled\">Désactivée</span>
                                    ";
            }
            // line 571
            yield "                                  </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        ";
            // line 574
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 574), "photo", [], "any", false, false, false, 574)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 575
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 575), "photo", [], "any", false, false, false, 575))), "html", null, true);
                yield "\" 
                                                 class=\"rounded-circle me-2\" style=\"width: 30px; height: 30px; object-fit: cover;\">
                                        ";
            } else {
                // line 578
                yield "                                            <div class=\"rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-2\" 
                                                 style=\"width: 30px; height: 30px; font-size: 12px;\">
                                                ";
                // line 580
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 580), "fullName", [], "any", false, false, false, 580))), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 583
            yield "                                        <div>
                                            <div>";
            // line 584
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, true, false, 584), "fullName", [], "any", true, true, false, 584)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 584), "fullName", [], "any", false, false, false, 584), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 584), "email", [], "any", false, false, false, 584))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 584), "email", [], "any", false, false, false, 584))), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\">";
            // line 585
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 585), "roles", [], "any", false, false, false, 585)), ["ROLE_" => ""]), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                  </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 591
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 591)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary print-single\" data-id=\"";
            // line 594
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 594), "html", null, true);
            yield "\" title=\"Imprimer le reçu\">
                                            <i class=\"fas fa-print\"></i>
                                        </button>
                                        ";
            // line 597
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 598
                yield "                                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "isActive", [], "any", false, false, false, 598)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 599
                    yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-warning toggle-order\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 599), "html", null, true);
                    yield "\" data-number=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 599), "html", null, true);
                    yield "\" data-action=\"disable\" title=\"Désactiver\">
                                                    <i class=\"fas fa-ban\"></i>
                                                </button>
                                            ";
                } else {
                    // line 603
                    yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success toggle-order\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 603), "html", null, true);
                    yield "\" data-number=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 603), "html", null, true);
                    yield "\" data-action=\"enable\" title=\"Activer\">
                                                    <i class=\"fas fa-check-circle\"></i>
                                                </button>
                                            ";
                }
                // line 607
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-order\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 607), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 607), "html", null, true);
                yield "\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        ";
            }
            // line 611
            yield "                                    </div>
                                  </td>
                               </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 614
        if (!$context['_iterated']) {
            // line 615
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
        // line 623
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        ";
        // line 629
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 629, $this->source); })()) > 1)) {
            // line 630
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 633
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 633, $this->source); })()) > 1)) {
                // line 634
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 635
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 635, $this->source); })()), "request", [], "any", false, false, false, 635), "query", [], "any", false, false, false, 635), "all", [], "any", false, false, false, 635), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 635, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i> Précédent
                            </a>
                        </li>
                    ";
            }
            // line 640
            yield "                    
                    ";
            // line 641
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 641, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 642
                yield "                        ";
                if ((((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 642, $this->source); })())) || (($context["page"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 642, $this->source); })()) - 2)) && ($context["page"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 642, $this->source); })()) + 2)))) || ($context["page"] == 1)) || ($context["page"] == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 642, $this->source); })())))) {
                    // line 643
                    yield "                            ";
                    if ((($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 643, $this->source); })()) - 3)) || ($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 643, $this->source); })()) + 3)))) {
                        // line 644
                        yield "                                <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                            ";
                    } else {
                        // line 646
                        yield "                                <li class=\"page-item ";
                        yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 646, $this->source); })()))) ? ("active") : (""));
                        yield "\">
                                    <a class=\"page-link\" href=\"";
                        // line 647
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 647, $this->source); })()), "request", [], "any", false, false, false, 647), "query", [], "any", false, false, false, 647), "all", [], "any", false, false, false, 647), ["page" => $context["page"]])), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                                </li>
                            ";
                    }
                    // line 650
                    yield "                        ";
                }
                // line 651
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 652
            yield "                    
                    ";
            // line 653
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 653, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 653, $this->source); })()))) {
                // line 654
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 655
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 655, $this->source); })()), "request", [], "any", false, false, false, 655), "query", [], "any", false, false, false, 655), "all", [], "any", false, false, false, 655), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 655, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                                Suivant <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 660
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 664
        yield "    </div>
</div>

<!-- Modales (inchangées) -->
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

    // line 748
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

        // line 749
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
    
    // Impression unique
    document.querySelectorAll('.print-single').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const orderId = this.dataset.id;
            loadReceipt(orderId);
        });
    });
    
    // Impression multiple
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
        // line 950
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
        // line 972
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
        return array (  1448 => 972,  1423 => 950,  1219 => 749,  1206 => 748,  1113 => 664,  1107 => 660,  1099 => 655,  1096 => 654,  1094 => 653,  1091 => 652,  1085 => 651,  1082 => 650,  1074 => 647,  1069 => 646,  1065 => 644,  1062 => 643,  1059 => 642,  1055 => 641,  1052 => 640,  1044 => 635,  1041 => 634,  1039 => 633,  1034 => 630,  1032 => 629,  1024 => 623,  1011 => 615,  1009 => 614,  1002 => 611,  992 => 607,  982 => 603,  972 => 599,  969 => 598,  967 => 597,  961 => 594,  955 => 591,  946 => 585,  942 => 584,  939 => 583,  933 => 580,  929 => 578,  922 => 575,  920 => 574,  915 => 571,  911 => 569,  907 => 567,  905 => 566,  898 => 562,  894 => 561,  888 => 558,  884 => 556,  879 => 553,  877 => 552,  873 => 551,  869 => 549,  863 => 547,  861 => 546,  857 => 545,  852 => 543,  847 => 541,  842 => 539,  835 => 537,  830 => 536,  827 => 535,  822 => 534,  797 => 512,  771 => 489,  767 => 488,  758 => 482,  754 => 481,  750 => 480,  739 => 472,  732 => 468,  725 => 464,  718 => 460,  712 => 457,  706 => 453,  693 => 451,  689 => 450,  681 => 444,  671 => 441,  665 => 439,  663 => 438,  656 => 437,  652 => 436,  644 => 430,  631 => 428,  627 => 427,  619 => 421,  606 => 419,  602 => 418,  593 => 412,  576 => 398,  568 => 392,  559 => 386,  551 => 380,  549 => 379,  535 => 368,  517 => 353,  499 => 338,  481 => 323,  463 => 308,  445 => 293,  427 => 278,  409 => 263,  391 => 248,  373 => 233,  355 => 218,  337 => 203,  310 => 179,  300 => 172,  291 => 166,  283 => 161,  255 => 136,  246 => 129,  233 => 128,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
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
    :root { --primary-color: #0463f1; --success-color: #10b981; --danger-color: #ef4444; --warning-color: #f59e0b; --info-color: #3b82f6; }
    
    /* Cartes statistiques - TOUTES IDENTIQUES avec fond blanc pur */
    .stats-card {
        background: #ffffff !important;
        border: 1px solid #e5e7eb !important;
        border-radius: 16px !important;
        transition: transform 0.2s, box-shadow 0.2s;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }
    .stats-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .stats-card .card-body {
        padding: 1rem;
        background: #ffffff !important;
    }
    .stats-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }
    .stats-card h6 {
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
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
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .table-order-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .table-order-row:hover {
        background-color: #f8f9fa;
    }
    .badge-payment-paid { background-color: #10b981; }
    .badge-payment-partial { background-color: #f59e0b; }
    .badge-status-completed { background-color: #10b981; }
    .badge-status-cancelled { background-color: #ef4444; }
    .badge-status-refunded { background-color: #8b5cf6; }
    .badge-status-disabled { background-color: #6c757d; }
    
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
        transition: transform 0.2s;
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
    
    @media (max-width: 768px) {
        .filter-section .row > div {
            margin-bottom: 1rem;
        }
        .stats-card h3 {
            font-size: 1.2rem;
        }
        .table-header-actions {
            margin-top: 0.5rem;
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

    <!-- 12 Cartes statistiques (TOUTES AVEC LE MÊME FOND BLANC) -->
    <div class=\"row g-3 mb-4\">
        <!-- Carte 1: Chiffre d'affaires -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-primary\">Chiffre d'affaires</h6>
                            <h3 class=\"mb-0 text-primary\">{{ stats.total_sales|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 2: Nombre de ventes -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-success\">Nombre de ventes</h6>
                            <h3 class=\"mb-0 text-success\">{{ stats.total_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-receipt fa-2x text-success opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 3: Panier moyen -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-info\">Panier moyen</h6>
                            <h3 class=\"mb-0 text-info\">{{ stats.average_basket|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">FCFA/vente</small>
                        </div>
                        <i class=\"fas fa-shopping-basket fa-2x text-info opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 4: Clients uniques -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-warning\">Clients uniques</h6>
                            <h3 class=\"mb-0 text-warning\">{{ stats.unique_customers|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">personnes</small>
                        </div>
                        <i class=\"fas fa-users fa-2x text-warning opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 5: Ticket moyen -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-danger\">Ticket moyen</h6>
                            <h3 class=\"mb-0 text-danger\">{{ stats.average_ticket|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">FCFA/client</small>
                        </div>
                        <i class=\"fas fa-ticket-alt fa-2x text-danger opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 6: Vente max -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-secondary\">Vente max</h6>
                            <h3 class=\"mb-0 text-secondary\">{{ stats.max_sale|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-arrow-up fa-2x text-secondary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 7: Vente min -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-dark\">Vente min</h6>
                            <h3 class=\"mb-0 text-dark\">{{ stats.min_sale|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <i class=\"fas fa-arrow-down fa-2x text-dark opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 8: Articles vendus -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-cyan\">Articles vendus</h6>
                            <h3 class=\"mb-0 text-cyan\">{{ stats.total_items|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">unités</small>
                        </div>
                        <i class=\"fas fa-boxes fa-2x text-cyan opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 9: Ventes actives -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-emerald\">Ventes actives</h6>
                            <h3 class=\"mb-0 text-emerald\">{{ stats.active_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-check-circle fa-2x text-emerald opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 10: Ventes désactivées -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-gray\">Ventes désactivées</h6>
                            <h3 class=\"mb-0 text-gray\">{{ stats.disabled_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-ban fa-2x text-gray opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 11: Taux désactivation -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-purple\">Taux désactivation</h6>
                            <h3 class=\"mb-0 text-purple\">{{ stats.disabled_percentage|default(0)|number_format(1, ',', ' ') }}%</h3>
                            <small class=\"text-muted\">des ventes</small>
                        </div>
                        <i class=\"fas fa-chart-pie fa-2x text-purple opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte 12: Ventes annulées -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h6 class=\"text-rose\">Ventes annulées</h6>
                            <h3 class=\"mb-0 text-rose\">{{ stats.cancelled_orders|default(0)|number_format(0, ',', ' ') }}</h3>
                            <small class=\"text-muted\">commandes</small>
                        </div>
                        <i class=\"fas fa-times-circle fa-2x text-rose opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Message info filtres (visible quand des filtres sont actifs) -->
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
                                    <br>
                                    <small class=\"text-muted\">#{{ order.id }}</small>
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

<!-- Modales (inchangées) -->
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
    
    // Impression unique
    document.querySelectorAll('.print-single').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const orderId = this.dataset.id;
            loadReceipt(orderId);
        });
    });
    
    // Impression multiple
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
