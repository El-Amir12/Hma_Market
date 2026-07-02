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
class __TwigTemplate_0d4a875371a8127af6ded77c7300bef9 extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Historique des ventes - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
    
    /* Cartes avec couleurs spécifiques */
    .stats-card.primary-bg { background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important; color: white; }
    .stats-card.success-bg { background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important; color: white; }
    .stats-card.info-bg { background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important; color: white; }
    .stats-card.warning-bg { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important; color: white; }
    .stats-card.danger-bg { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important; color: white; }
    .stats-card.secondary-bg { background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%) !important; color: white; }
    .stats-card.cyan-bg { background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%) !important; color: white; }
    .stats-card.purple-bg { background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%) !important; color: white; }
    .stats-card.rose-bg { background: linear-gradient(135deg, #f43f5e 0%, #e11d48 100%) !important; color: white; }
    .stats-card.emerald-bg { background: linear-gradient(135deg, #059669 0%, #047857 100%) !important; color: white; }
    
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
    
    .user-avatar-sm {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
    }
    
    .initial-avatar {
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, var(--primary-color), #0350c4);
        color: white;
        font-weight: bold;
    }
</style>
";
        yield from [];
    }

    // line 283
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 284
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 291
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
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 316), "query", [], "any", false, false, false, 316), "all", [], "any", false, false, false, 316)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 321), "query", [], "any", false, false, false, 321), "all", [], "any", false, false, false, 321)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"";
        // line 327
        yield (((($tmp = ($context["isRestaurant"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_sale_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_index")));
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
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_sales", [], "any", true, true, false, 341)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_sales", [], "any", false, false, false, 341), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", true, true, false, 358)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", false, false, false, 358), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_basket", [], "any", true, true, false, 375)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_basket", [], "any", false, false, false, 375), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "unique_customers", [], "any", true, true, false, 392)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "unique_customers", [], "any", false, false, false, 392), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_ticket", [], "any", true, true, false, 409)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_ticket", [], "any", false, false, false, 409), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "max_sale", [], "any", true, true, false, 426)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "max_sale", [], "any", false, false, false, 426), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "min_sale", [], "any", true, true, false, 443)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "min_sale", [], "any", false, false, false, 443), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_items", [], "any", true, true, false, 460)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_items", [], "any", false, false, false, 460), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_orders", [], "any", true, true, false, 477)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_orders", [], "any", false, false, false, 477), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_orders", [], "any", true, true, false, 494)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_orders", [], "any", false, false, false, 494), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"stats-card purple-bg shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h6 class=\"mb-1\">Taux désactivation</h6>
                            <h3 class=\"mb-0\">";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_percentage", [], "any", true, true, false, 511)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disabled_percentage", [], "any", false, false, false, 511), 0)) : (0)), 1, ",", " "), "html", null, true);
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
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "cancelled_orders", [], "any", true, true, false, 528)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "cancelled_orders", [], "any", false, false, false, 528), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 541
        if (((((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 541) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 541)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 541)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 541)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_id", [], "any", false, false, false, 541)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "min_amount", [], "any", false, false, false, 541)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "max_amount", [], "any", false, false, false, 541))) {
            // line 542
            yield "    <div class=\"filter-info\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-info-circle me-2\"></i>
                <strong>Filtres actifs :</strong> Les statistiques ci-dessus sont basées sur les filtres appliqués.
            </div>
            <a href=\"";
            // line 548
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                <i class=\"fas fa-times me-1\"></i> Effacer les filtres
            </a>
        </div>
    </div>
    ";
        }
        // line 554
        yield "
    <!-- Section Retours & Avoirs - Version épurée et lisible -->
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
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_returns", [], "any", true, true, false, 573)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_returns", [], "any", false, false, false, 573), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "pending", [], "any", true, true, false, 584)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "pending", [], "any", false, false, false, 584), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "approved", [], "any", true, true, false, 595)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "approved", [], "any", false, false, false, 595), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "completed", [], "any", true, true, false, 606)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "completed", [], "any", false, false, false, 606), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_refund_amount", [], "any", true, true, false, 619)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_refund_amount", [], "any", false, false, false, 619), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        // line 628
        $context["totalReturns"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_returns", [], "any", true, true, false, 628)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "total_returns", [], "any", false, false, false, 628), 0)) : (0));
        // line 629
        yield "                            ";
        $context["approvedCompleted"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "approved", [], "any", true, true, false, 629)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "approved", [], "any", false, false, false, 629), 0)) : (0)) + ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "completed", [], "any", true, true, false, 629)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "completed", [], "any", false, false, false, 629), 0)) : (0)));
        // line 630
        yield "                            ";
        $context["approvalRate"] = (((($context["totalReturns"] ?? null) > 0)) ? (((($context["approvedCompleted"] ?? null) / ($context["totalReturns"] ?? null)) * 100)) : (0));
        // line 631
        yield "                            <strong class=\"text-success ms-3\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["approvalRate"] ?? null), 1, ",", " "), "html", null, true);
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
        // line 640
        $context["rejectionRate"] = (((($context["totalReturns"] ?? null) > 0)) ? (((((CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "rejected", [], "any", true, true, false, 640)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["returnStats"] ?? null), "rejected", [], "any", false, false, false, 640), 0)) : (0)) / ($context["totalReturns"] ?? null)) * 100)) : (0));
        // line 641
        yield "                            <strong class=\"text-danger ms-3\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["rejectionRate"] ?? null), 1, ",", " "), "html", null, true);
        yield "%</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analyse approfondie des données -->
    <a href=\"";
        // line 650
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
        // line 674
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
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 688)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 688), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold small\">Statut</label>
                    <select name=\"status\" class=\"form-select select2-status\">
                        <option value=\"\">Tous</option>
                        ";
        // line 694
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 695
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 695) == $context["status"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["status"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 697
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold small\">Mode de paiement</label>
                    <select name=\"payment_method\" class=\"form-select select2-payment\">
                        <option value=\"\">Tous</option>
                        ";
        // line 703
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 704
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["method"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 704) == $context["method"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["method"], ["_" => " "])), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['method'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 706
        yield "                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Caissier</label>
                    <select name=\"user_id\" id=\"user-select\" class=\"form-select select2-user\">
                        <option value=\"\">Tous les caissiers</option>
                        ";
        // line 712
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 713
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 713), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_id", [], "any", false, false, false, 713) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 713))) ? ("selected") : (""));
            yield ">
                                ";
            // line 714
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", true, true, false, 714)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 714), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 714))) : (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 714))), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 717
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold small\">Période</label>
                    <select name=\"date_preset\" id=\"date-preset\" class=\"form-select select2-preset\">
                        <option value=\"\">Personnalisée</option>
                        ";
        // line 723
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["date_presets"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 724
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_preset", [], "any", false, false, false, 724) == $context["key"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 726
        yield "                    </select>
                </div>
            </div>

            <div class=\"row g-3 mt-2\" id=\"custom-dates\" style=\"display: ";
        // line 730
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_preset", [], "any", false, false, false, 730)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("none") : ("flex"));
        yield ";\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 733
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 733)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 733), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 737
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 737)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 737), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Montant min (FCFA)</label>
                    <input type=\"number\" name=\"min_amount\" class=\"form-control\" placeholder=\"Min\" value=\"";
        // line 741
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "min_amount", [], "any", true, true, false, 741)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "min_amount", [], "any", false, false, false, 741), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Montant max (FCFA)</label>
                    <input type=\"number\" name=\"max_amount\" class=\"form-control\" placeholder=\"Max\" value=\"";
        // line 745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "max_amount", [], "any", true, true, false, 745)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "max_amount", [], "any", false, false, false, 745), "")) : ("")), "html", null, true);
        yield "\">
                </div>
            </div>

            <div class=\"row g-3 mt-2\">
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold small\">Trier par</label>
                    <select name=\"sort\" class=\"form-select\">
                        <option value=\"created_at\" ";
        // line 753
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 753) == "created_at")) ? ("selected") : (""));
        yield ">Date de vente</option>
                        <option value=\"total_amount\" ";
        // line 754
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 754) == "total_amount")) ? ("selected") : (""));
        yield ">Montant</option>
                        <option value=\"customer_name\" ";
        // line 755
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 755) == "customer_name")) ? ("selected") : (""));
        yield ">Nom client</option>
                    </select>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold small\">Ordre</label>
                    <select name=\"direction\" class=\"form-select\">
                        <option value=\"desc\" ";
        // line 761
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 761) == "desc")) ? ("selected") : (""));
        yield ">Plus récent d'abord</option>
                        <option value=\"asc\" ";
        // line 762
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 762) == "asc")) ? ("selected") : (""));
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
        // line 785
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
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
        // line 807
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 808
            yield "                            ";
            $context["itemCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 808));
            // line 809
            yield "                            <tr class=\"table-order-row\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 809)]), "html", null, true);
            yield "\">
                                <td><input type=\"checkbox\" class=\"form-check-input row-checkbox\" data-order-id=\"";
            // line 810
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 810), "html", null, true);
            yield "\" data-order-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 810), "html", null, true);
            yield "\"></div>
                                <td><strong>";
            // line 811
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 811), "html", null, true);
            yield "</strong></div>
                                <td>";
            // line 812
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 812), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                                <td>
                                    <div class=\"fw-semibold\">";
            // line 814
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 814), "html", null, true);
            yield "</div>
                                    ";
            // line 815
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 815)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 816
                yield "                                        <small class=\"text-muted\"><i class=\"fas fa-phone me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 816), "html", null, true);
                yield "</small>
                                    ";
            }
            // line 818
            yield "                                 </div>
                                <td>
                                    <span class=\"badge bg-secondary\">";
            // line 820
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemCount"] ?? null), "html", null, true);
            yield " article(s)</span>
                                    ";
            // line 821
            if ((($tmp = ($context["isRestaurant"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 822
                yield "                                        <br><small class=\"text-muted\">Plats</small>
                                    ";
            }
            // line 824
            yield "                                 </div>
                                <td><strong class=\"text-primary\">";
            // line 825
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 825), 0, ",", " "), "html", null, true);
            yield " FCFA</strong></div>
                                <td>
                                    <span class=\"badge bg-";
            // line 827
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 827) == "cash")) ? ("success") : ("info"));
            yield "\">
                                        ";
            // line 828
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 828), ["_" => " "])), "html", null, true);
            yield "
                                    </span>
                                 </div>
                                <td>
                                    ";
            // line 832
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "isActive", [], "any", false, false, false, 832)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 833
                yield "                                        <span class=\"badge badge-status-completed\">Active</span>
                                    ";
            } else {
                // line 835
                yield "                                        <span class=\"badge badge-status-disabled\">Désactivée</span>
                                    ";
            }
            // line 837
            yield "                                 </div>
                                <td>
                                    <div class=\"d-flex align-items-center gap-2\">
                                        ";
            // line 840
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 840), "photo", [], "any", false, false, false, 840)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 841
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 841), "photo", [], "any", false, false, false, 841))), "html", null, true);
                yield "\" 
                                                 class=\"rounded-circle user-avatar-sm\" style=\"width: 32px; height: 32px; object-fit: cover;\">
                                        ";
            } else {
                // line 844
                yield "                                            <div class=\"rounded-circle initial-avatar d-flex align-items-center justify-content-center\" style=\"width: 32px; height: 32px;\">
                                                ";
                // line 845
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 845), "fullName", [], "any", false, false, false, 845))), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 848
            yield "                                        <div>
                                            <div class=\"small fw-semibold\">";
            // line 849
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, true, false, 849), "fullName", [], "any", true, true, false, 849)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 849), "fullName", [], "any", false, false, false, 849), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 849), "email", [], "any", false, false, false, 849))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 849), "email", [], "any", false, false, false, 849))), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\">";
            // line 850
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 850), "roleLabel", [], "any", false, false, false, 850), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                 </div>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 856
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 856)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-success quick-print\" 
                                                data-order-id=\"";
            // line 861
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 861), "html", null, true);
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
            // line 873
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 873), "html", null, true);
            yield "\" data-print-type=\"customer\">
                                                        <i class=\"fas fa-receipt me-2\"></i> Ticket client
                                                    </button>
                                                </li>
                                                
                                                ";
            // line 878
            if ((($tmp = ($context["isRestaurant"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 879
                yield "                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-kitchen\" data-order-id=\"";
                // line 881
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 881), "html", null, true);
                yield "\" data-print-type=\"kitchen\">
                                                        <i class=\"fas fa-utensils me-2\"></i> Ticket cuisine
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-delivery\" data-order-id=\"";
                // line 886
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 886), "html", null, true);
                yield "\" data-print-type=\"delivery\">
                                                        <i class=\"fas fa-truck me-2\"></i> Ticket livraison
                                                    </button>
                                                </li>
                                                ";
            }
            // line 891
            yield "                                                
                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li>
                                                    <button type=\"button\" class=\"dropdown-item print-cash\" data-order-id=\"";
            // line 894
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 894), "html", null, true);
            yield "\" data-print-type=\"cash\">
                                                        <i class=\"fas fa-money-bill-wave me-2\"></i> Ticket caisse
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        ";
            // line 901
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 902
                yield "                                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "isActive", [], "any", false, false, false, 902)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 903
                    yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-warning toggle-order\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 903), "html", null, true);
                    yield "\" data-number=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 903), "html", null, true);
                    yield "\" data-action=\"disable\" title=\"Désactiver\">
                                                    <i class=\"fas fa-ban\"></i>
                                                </button>
                                            ";
                } else {
                    // line 907
                    yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success toggle-order\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 907), "html", null, true);
                    yield "\" data-number=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 907), "html", null, true);
                    yield "\" data-action=\"enable\" title=\"Activer\">
                                                    <i class=\"fas fa-check-circle\"></i>
                                                </button>
                                            ";
                }
                // line 911
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-order\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 911), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 911), "html", null, true);
                yield "\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        ";
            }
            // line 915
            yield "                                    </div>
                                 </div>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 918
        if (!$context['_iterated']) {
            // line 919
            yield "                            <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <i class=\"fas fa-shopping-cart fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucune vente trouvée</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres pour voir plus de résultats</p>
                                    <a href=\"";
            // line 924
            yield (((($tmp = ($context["isRestaurant"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_sale_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_index")));
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer une vente
                                    </a>
                                 </div>
                             </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 930
        yield "                    </tbody>
                </table>
            </div>
        </div>

        ";
        // line 935
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 936
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 939
            if ((($context["currentPage"] ?? null) > 1)) {
                // line 940
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 941
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 941), "query", [], "any", false, false, false, 941), "all", [], "any", false, false, false, 941), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i> Précédent
                            </a>
                        </li>
                    ";
            }
            // line 946
            yield "                    
                    ";
            // line 947
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 948
                yield "                        ";
                if ((((($context["page"] == ($context["currentPage"] ?? null)) || (($context["page"] >= (($context["currentPage"] ?? null) - 2)) && ($context["page"] <= (($context["currentPage"] ?? null) + 2)))) || ($context["page"] == 1)) || ($context["page"] == ($context["totalPages"] ?? null)))) {
                    // line 949
                    yield "                            ";
                    if ((($context["page"] == (($context["currentPage"] ?? null) - 3)) || ($context["page"] == (($context["currentPage"] ?? null) + 3)))) {
                        // line 950
                        yield "                                <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                            ";
                    } else {
                        // line 952
                        yield "                                <li class=\"page-item ";
                        yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                        yield "\">
                                    <a class=\"page-link\" href=\"";
                        // line 953
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 953), "query", [], "any", false, false, false, 953), "all", [], "any", false, false, false, 953), ["page" => $context["page"]])), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                                </li>
                            ";
                    }
                    // line 956
                    yield "                        ";
                }
                // line 957
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 958
            yield "                    
                    ";
            // line 959
            if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 960
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 961
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 961), "query", [], "any", false, false, false, 961), "all", [], "any", false, false, false, 961), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
                yield "\">
                                Suivant <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 966
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 970
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
        yield from [];
    }

    // line 1038
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1039
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
        // line 1480
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
        // line 1502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_order"), "html", null, true);
        yield "';
            
            deleteModal.show();
        });
    });
    
    // Initialisation du PrintManager
    window.printManager = new PrintManager();
});
</script>
";
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
        return array (  1964 => 1502,  1939 => 1480,  1495 => 1039,  1488 => 1038,  1417 => 970,  1411 => 966,  1403 => 961,  1400 => 960,  1398 => 959,  1395 => 958,  1389 => 957,  1386 => 956,  1378 => 953,  1373 => 952,  1369 => 950,  1366 => 949,  1363 => 948,  1359 => 947,  1356 => 946,  1348 => 941,  1345 => 940,  1343 => 939,  1338 => 936,  1336 => 935,  1329 => 930,  1317 => 924,  1310 => 919,  1308 => 918,  1301 => 915,  1291 => 911,  1281 => 907,  1271 => 903,  1268 => 902,  1266 => 901,  1256 => 894,  1251 => 891,  1243 => 886,  1235 => 881,  1231 => 879,  1229 => 878,  1221 => 873,  1206 => 861,  1198 => 856,  1189 => 850,  1185 => 849,  1182 => 848,  1176 => 845,  1173 => 844,  1166 => 841,  1164 => 840,  1159 => 837,  1155 => 835,  1151 => 833,  1149 => 832,  1142 => 828,  1138 => 827,  1133 => 825,  1130 => 824,  1126 => 822,  1124 => 821,  1120 => 820,  1116 => 818,  1110 => 816,  1108 => 815,  1104 => 814,  1099 => 812,  1095 => 811,  1089 => 810,  1084 => 809,  1081 => 808,  1076 => 807,  1051 => 785,  1025 => 762,  1021 => 761,  1012 => 755,  1008 => 754,  1004 => 753,  993 => 745,  986 => 741,  979 => 737,  972 => 733,  966 => 730,  960 => 726,  947 => 724,  943 => 723,  935 => 717,  926 => 714,  919 => 713,  915 => 712,  907 => 706,  894 => 704,  890 => 703,  882 => 697,  869 => 695,  865 => 694,  856 => 688,  839 => 674,  812 => 650,  799 => 641,  797 => 640,  784 => 631,  781 => 630,  778 => 629,  776 => 628,  764 => 619,  748 => 606,  734 => 595,  720 => 584,  706 => 573,  685 => 554,  676 => 548,  668 => 542,  666 => 541,  650 => 528,  630 => 511,  610 => 494,  590 => 477,  570 => 460,  550 => 443,  530 => 426,  510 => 409,  490 => 392,  470 => 375,  450 => 358,  430 => 341,  413 => 327,  404 => 321,  396 => 316,  368 => 291,  359 => 284,  352 => 283,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sale/orders/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\index.html.twig");
    }
}
