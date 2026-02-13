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

/* dashboard/index.html.twig */
class __TwigTemplate_08796859fa884d2533df2b9446d403d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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

        yield "Tableau de bord - HMA Market";
        
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
    /* Variables CSS */
    :root {
        --primary-color: #3498db;
        --primary-light: #5dade2;
        --primary-dark: #2980b9;
        --success-color: #2ecc71;
        --info-color: #3498db;
        --warning-color: #f39c12;
        --danger-color: #e74c3c;
        --secondary-color: #95a5a6;
        --dark-color: #2c3e50;
        
        --card-shadow: 0 6px 15px rgba(52, 152, 219, 0.1);
        --card-shadow-hover: 0 12px 25px rgba(52, 152, 219, 0.15);
        --border-radius-lg: 12px;
        --border-radius-sm: 8px;
        --transition-smooth: all 0.3s ease;
    }
    
    /* Layout fix */
    .row {
        margin-bottom: 1.5rem;
    }
    
    .mb-4 {
        margin-bottom: 1.5rem !important;
    }
    
    /* Welcome Machine Animation - Style bleu clair */
    .welcome-machine {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
        border-radius: var(--border-radius-lg);
        padding: 2.5rem;
        min-height: 200px;
        position: relative;
        overflow: hidden;
        border: none;
    }
    
    .welcome-machine::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: rgba(255, 255, 255, 0.3);
    }
    
    .machine-text {
        font-size: 1.8rem;
        color: white;
        margin: 0;
        min-height: 60px;
        line-height: 1.4;
        font-weight: 500;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .machine-cursor {
        display: inline-block;
        width: 3px;
        height: 2rem;
        background-color: white;
        margin-left: 5px;
        animation: blink 1s infinite;
        vertical-align: middle;
    }
    
    @keyframes blink {
        0%, 50% { opacity: 1; }
        51%, 100% { opacity: 0; }
    }
    
    /* Unified Card Design */
    .dashboard-card {
        border: none;
        border-radius: var(--border-radius-lg);
        box-shadow: var(--card-shadow);
        transition: var(--transition-smooth);
        height: 100%;
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
        background: white;
    }
    
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--card-shadow-hover);
    }
    
    .dashboard-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--card-color, var(--primary-color));
    }
    
    .dashboard-card.primary-card::before { background: var(--primary-color); }
    .dashboard-card.success-card::before { background: var(--success-color); }
    .dashboard-card.info-card::before { background: var(--info-color); }
    .dashboard-card.warning-card::before { background: var(--warning-color); }
    .dashboard-card.danger-card::before { background: var(--danger-color); }
    .dashboard-card.secondary-card::before { background: var(--secondary-color); }
    .dashboard-card.dark-card::before { background: var(--dark-color); }
    
    .card-body {
        padding: 1.5rem;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    /* Card Content Layout */
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 1rem;
    }
    
    .card-title {
        color: var(--dark-color);
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin: 0;
        opacity: 0.8;
        font-weight: 600;
    }
    
    .stat-number {
        font-size: 2.2rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
        line-height: 1;
    }
    
    .stat-subtitle {
        color: var(--secondary-color);
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }
    
    .card-footer {
        margin-top: auto;
        padding-top: 1rem;
        border-top: 1px solid #ecf0f1;
    }
    
    /* Icon Styling */
    .stat-icon-wrapper {
        width: 56px;
        height: 56px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(52, 152, 219, 0.1);
        color: var(--primary-color);
        font-size: 1.5rem;
        flex-shrink: 0;
    }
    
    .success-card .stat-icon-wrapper {
        background: rgba(46, 204, 113, 0.1);
        color: var(--success-color);
    }
    
    .info-card .stat-icon-wrapper {
        background: rgba(52, 152, 219, 0.1);
        color: var(--info-color);
    }
    
    .warning-card .stat-icon-wrapper {
        background: rgba(243, 156, 18, 0.1);
        color: var(--warning-color);
    }
    
    .danger-card .stat-icon-wrapper {
        background: rgba(231, 76, 60, 0.1);
        color: var(--danger-color);
    }
    
    .secondary-card .stat-icon-wrapper {
        background: rgba(149, 165, 166, 0.1);
        color: var(--secondary-color);
    }
    
    .dark-card .stat-icon-wrapper {
        background: rgba(44, 62, 80, 0.1);
        color: var(--dark-color);
    }
    
    /* Stock Movements Table */
    .stock-movements-card {
        height: 100%;
    }
    
    .movement-item {
        padding: 1rem;
        border-bottom: 1px solid #ecf0f1;
        transition: var(--transition-smooth);
    }
    
    .movement-item:hover {
        background-color: #f8f9fa;
    }
    
    .movement-item:last-child {
        border-bottom: none;
    }
    
    .movement-type {
        display: inline-flex;
        align-items: center;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }
    
    .movement-type.in {
        background-color: rgba(46, 204, 113, 0.1);
        color: var(--success-color);
    }
    
    .movement-type.out {
        background-color: rgba(231, 76, 60, 0.1);
        color: var(--danger-color);
    }
    
    .product-name {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.25rem;
    }
    
    .movement-date {
        font-size: 0.85rem;
        color: var(--secondary-color);
    }
    
    .movement-quantity {
        font-weight: 700;
        font-size: 1.1rem;
    }
    
    /* Company Info Styling */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }
    
    .info-item {
        background: #f8f9fa;
        padding: 1.25rem;
        border-radius: var(--border-radius-sm);
        border-left: 4px solid var(--primary-color);
        transition: var(--transition-smooth);
    }
    
    .info-item:hover {
        background: #edf2f7;
        transform: translateY(-2px);
    }
    
    .info-label {
        font-size: 0.85rem;
        color: var(--secondary-color);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }
    
    .info-value {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--dark-color);
        margin: 0;
    }
    
    /* Quick Actions */
    .quick-action-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1.5rem 0.5rem;
        border: 1px solid #e0e0e0;
        border-radius: var(--border-radius-sm);
        background: white;
        color: var(--dark-color);
        transition: var(--transition-smooth);
        text-decoration: none;
        height: 100%;
        min-height: 120px;
        cursor: pointer;
    }
    
    .quick-action-btn:hover {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(52, 152, 219, 0.2);
        text-decoration: none;
    }
    
    .quick-action-btn i {
        font-size: 2rem;
        margin-bottom: 0.75rem;
    }
    
    /* Empty States */
    .empty-state {
        text-align: center;
        padding: 2rem;
        color: var(--secondary-color);
    }
    
    .empty-state i {
        font-size: 3rem;
        margin-bottom: 1rem;
        opacity: 0.3;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .stat-number {
            font-size: 1.8rem;
        }
        
        .welcome-machine {
            padding: 1.5rem;
        }
        
        .machine-text {
            font-size: 1.4rem;
        }
        
        .info-grid {
            grid-template-columns: 1fr;
        }
    }
    
    /* Animation Classes */
    .fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    /* Status badges */
    .badge-status {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }
    
    .badge-active {
        background-color: rgba(46, 204, 113, 0.1);
        color: var(--success-color);
    }
    
    .badge-trial {
        background-color: rgba(243, 156, 18, 0.1);
        color: var(--warning-color);
    }
    
    .badge-expired {
        background-color: rgba(231, 76, 60, 0.1);
        color: var(--danger-color);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 398
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

        // line 399
        yield "<!-- Begin page -->
<div id=\"layout-wrapper\">
    
    <div class=\"main-content\">
        <div class=\"page-content\">
            <div class=\"container-fluid\">

                <!-- Breadcrumb -->
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"page-title-box\">
                            <h4 class=\"page-title\">Tableau de Bord</h4>
                            <div class=\"page-title-right\">
                                <ol class=\"breadcrumb m-0\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 413
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                                    <li class=\"breadcrumb-item active\">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Welcome Machine -->
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"welcome-machine fade-in\">
                            <div class=\"machine-text\" id=\"welcomeMessage\">
                                <!-- Texte généré par JavaScript -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards - Taille uniforme -->
                <div class=\"row\">
                    <!-- Produits Totaux -->
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card primary-card fade-in\" style=\"animation-delay: 0.1s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Produits Totaux</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Articles en catalogue</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-box-seam\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-primary text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Voir le catalogue
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ventes Totales -->
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card success-card fade-in\" style=\"animation-delay: 0.2s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Ventes Totales</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Transactions complétées</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-cart-check\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-success text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Voir les ventes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chiffre d'Affaires -->
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card info-card fade-in\" style=\"animation-delay: 0.3s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Chiffre d'Affaires</h6>
                                        <div class=\"stat-number\">0 FCFA</div>
                                        <div class=\"stat-subtitle\">Total généré</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-currency-exchange\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-info text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Voir rapports
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clients -->
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card warning-card fade-in\" style=\"animation-delay: 0.4s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Clients</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Clients actifs</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-people\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-warning text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Gérer clients
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deuxième ligne de stats conditionnelles -->
                <div class=\"row\">
                    ";
        // line 533
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 534
            yield "                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card dark-card fade-in\" style=\"animation-delay: 0.2s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Ventes Aujourd'hui</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">0 FCFA générés</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-cash-stack\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <span class=\"badge bg-light text-dark\">En attente: 0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 554
        yield "
                    ";
        // line 555
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 556
            yield "                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card danger-card fade-in\" style=\"animation-delay: 0.3s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Stock Faible</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Produits à réapprovisionner</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-exclamation-triangle\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-danger text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Réapprovisionner
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 579
        yield "
                    ";
        // line 580
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 581
            yield "                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card secondary-card fade-in\" style=\"animation-delay: 0.4s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Utilisateurs</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Comptes actifs</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-person-plus\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"";
            // line 595
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\" class=\"text-secondary text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Gérer utilisateurs
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 604
        yield "
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card primary-card fade-in\" style=\"animation-delay: 0.5s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">En Attente</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Commandes à traiter</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-clock-history\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-primary text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Traiter maintenant
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stock Movements & Quick Actions Row -->
                <div class=\"row\">
                    <!-- Stock Movements -->
                    <div class=\"col-lg-8 mb-4\">
                        <div class=\"dashboard-card stock-movements-card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <h5 class=\"card-title mb-0\">
                                        <i class=\"bi bi-arrow-left-right text-primary me-2\"></i>
                                        Derniers Mouvements de Stock
                                    </h5>
                                    <a href=\"#\" class=\"text-primary text-decoration-none small\">
                                        Voir tout <i class=\"bi bi-arrow-right ms-1\"></i>
                                    </a>
                                </div>
                                
                                <div id=\"stockMovements\">
                                    <!-- Les mouvements seront chargés ici -->
                                    <div class=\"empty-state\">
                                        <i class=\"bi bi-arrow-left-right\"></i>
                                        <p class=\"mb-0\">Aucun mouvement de stock récent</p>
                                        <small class=\"text-muted\">Les mouvements apparaîtront ici</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class=\"col-lg-4 mb-4\">
                        <div class=\"dashboard-card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-3\">
                                    <i class=\"bi bi-lightning text-warning me-2\"></i>
                                    Actions Rapides
                                </h5>
                                
                                <div class=\"row g-3\">
                                    ";
        // line 667
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 668
            yield "                                    <div class=\"col-12\">
                                        <button class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-cart-plus text-primary\"></i>
                                            <span class=\"fw-medium\">Nouvelle Vente</span>
                                        </button>
                                    </div>
                                    ";
        }
        // line 675
        yield "                                    
                                    ";
        // line 676
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 677
            yield "                                    <div class=\"col-12\">
                                        <button class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-plus-circle text-success\"></i>
                                            <span class=\"fw-medium\">Ajouter Produit</span>
                                        </button>
                                    </div>
                                    ";
        }
        // line 684
        yield "                                    
                                    ";
        // line 685
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 686
            yield "                                    <div class=\"col-12\">
                                        <button class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-boxes text-warning\"></i>
                                            <span class=\"fw-medium\">Gérer Stock</span>
                                        </button>
                                    </div>
                                    ";
        }
        // line 693
        yield "                                    
                                    ";
        // line 694
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 695
            yield "                                    <div class=\"col-12\">
                                        <a href=\"";
            // line 696
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-person-plus text-info\"></i>
                                            <span class=\"fw-medium\">Nouvel Utilisateur</span>
                                        </a>
                                    </div>
                                    ";
        }
        // line 702
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Company Information (Visible uniquement pour les administrateurs/propriétaires HMA) -->
                ";
        // line 709
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 709), "isHmaOwner", [], "any", true, true, false, 709) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 709, $this->source); })()), "user", [], "any", false, false, false, 709), "isHmaOwner", [], "any", false, false, false, 709)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 709, $this->source); })()), "user", [], "any", false, false, false, 709), "hmaServiceId", [], "any", false, false, false, 709)))) {
            // line 710
            yield "                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"dashboard-card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-4\">
                                    <i class=\"bi bi-building text-primary me-2\"></i>
                                    Informations de l'Entreprise
                                </h5>
                                
                                ";
            // line 719
            $context["hmaService"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 719, $this->source); })()), "user", [], "any", false, false, false, 719), "hmaServiceId", [], "any", false, false, false, 719);
            // line 720
            yield "                                
                                <div class=\"info-grid\">
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Nom de l'entreprise</div>
                                        <p class=\"info-value\">
                                            ";
            // line 725
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", true, true, false, 725) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 725, $this->source); })()), "companyName", [], "any", false, false, false, 725)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 725, $this->source); })()), "companyName", [], "any", false, false, false, 725), "html", null, true)) : ("Non spécifié"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Email de contact</div>
                                        <p class=\"info-value\">
                                            ";
            // line 732
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "email", [], "any", true, true, false, 732) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 732, $this->source); })()), "email", [], "any", false, false, false, 732)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 732, $this->source); })()), "email", [], "any", false, false, false, 732), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 732, $this->source); })()), "user", [], "any", false, false, false, 732), "email", [], "any", false, false, false, 732), "html", null, true)));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Téléphone</div>
                                        <p class=\"info-value\">
                                            ";
            // line 739
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "phone", [], "any", true, true, false, 739) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 739, $this->source); })()), "phone", [], "any", false, false, false, 739)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 739, $this->source); })()), "phone", [], "any", false, false, false, 739), "html", null, true)) : ("Non spécifié"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Numéro d'abonnement</div>
                                        <p class=\"info-value\">
                                            ";
            // line 746
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "subscriptionNumber", [], "any", true, true, false, 746) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 746, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 746)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 746, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 746), "html", null, true)) : ("N/A"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Adresse</div>
                                        <p class=\"info-value\">
                                            ";
            // line 753
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "address", [], "any", true, true, false, 753) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 753, $this->source); })()), "address", [], "any", false, false, false, 753)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 753, $this->source); })()), "address", [], "any", false, false, false, 753), "html", null, true)) : ("Non spécifiée"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Ville</div>
                                        <p class=\"info-value\">
                                            ";
            // line 760
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "city", [], "any", true, true, false, 760) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 760, $this->source); })()), "city", [], "any", false, false, false, 760)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 760, $this->source); })()), "city", [], "any", false, false, false, 760), "html", null, true)) : ("Non spécifiée"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Pays</div>
                                        <p class=\"info-value\">
                                            ";
            // line 767
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "country", [], "any", true, true, false, 767) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 767, $this->source); })()), "country", [], "any", false, false, false, 767)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 767, $this->source); })()), "country", [], "any", false, false, false, 767), "html", null, true)) : ("Non spécifié"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Période d'essai</div>
                                        <p class=\"info-value\">
                                            ";
            // line 774
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 774, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 774)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 775
                yield "                                                ";
                $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                // line 776
                yield "                                                ";
                $context["trialEnds"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 776, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 776);
                // line 777
                yield "                                                ";
                $context["daysRemaining"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trialEnds"]) || array_key_exists("trialEnds", $context) ? $context["trialEnds"] : (function () { throw new RuntimeError('Variable "trialEnds" does not exist.', 777, $this->source); })()), "diff", [(isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 777, $this->source); })())], "method", false, false, false, 777), "days", [], "any", false, false, false, 777);
                // line 778
                yield "                                                
                                                ";
                // line 779
                if (((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 779, $this->source); })()) > 0)) {
                    // line 780
                    yield "                                                    <span class=\"badge-status badge-trial\">
                                                        <i class=\"bi bi-clock me-1\"></i>
                                                        Jusqu'au ";
                    // line 782
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["trialEnds"]) || array_key_exists("trialEnds", $context) ? $context["trialEnds"] : (function () { throw new RuntimeError('Variable "trialEnds" does not exist.', 782, $this->source); })()), "d/m/Y"), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 782, $this->source); })()), "html", null, true);
                    yield " jours restants)
                                                    </span>
                                                ";
                } else {
                    // line 785
                    yield "                                                    <span class=\"badge-status badge-expired\">
                                                        <i class=\"bi bi-x-circle me-1\"></i>
                                                        Terminée le ";
                    // line 787
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["trialEnds"]) || array_key_exists("trialEnds", $context) ? $context["trialEnds"] : (function () { throw new RuntimeError('Variable "trialEnds" does not exist.', 787, $this->source); })()), "d/m/Y"), "html", null, true);
                    yield "
                                                    </span>
                                                ";
                }
                // line 790
                yield "                                            ";
            } else {
                // line 791
                yield "                                                <span class=\"badge-status badge-active\">
                                                    <i class=\"bi bi-check-circle me-1\"></i>
                                                    Abonnement actif
                                                </span>
                                            ";
            }
            // line 796
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Statut</div>
                                        <p class=\"info-value\">
                                            ";
            // line 802
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 802, $this->source); })()), "isActive", [], "any", false, false, false, 802)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 803
                yield "                                                <span class=\"badge-status badge-active\">
                                                    <i class=\"bi bi-check-circle me-1\"></i>
                                                    Actif
                                                </span>
                                            ";
            } else {
                // line 808
                yield "                                                <span class=\"badge-status badge-expired\">
                                                    <i class=\"bi bi-x-circle me-1\"></i>
                                                    Inactif
                                                </span>
                                            ";
            }
            // line 813
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Date de création</div>
                                        <p class=\"info-value\">
                                            ";
            // line 819
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 819, $this->source); })()), "createdAt", [], "any", false, false, false, 819)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 820
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 820, $this->source); })()), "createdAt", [], "any", false, false, false, 820), "d/m/Y à H:i"), "html", null, true);
                yield "
                                            ";
            } else {
                // line 822
                yield "                                                Non disponible
                                            ";
            }
            // line 824
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Dernière mise à jour</div>
                                        <p class=\"info-value\">
                                            ";
            // line 830
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 830, $this->source); })()), "updatedAt", [], "any", false, false, false, 830)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 831
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 831, $this->source); })()), "updatedAt", [], "any", false, false, false, 831), "d/m/Y à H:i"), "html", null, true);
                yield "
                                            ";
            } else {
                // line 833
                yield "                                                Non disponible
                                            ";
            }
            // line 835
            yield "                                        </p>
                                    </div>
                                </div>
                                
                                <div class=\"mt-4 pt-3 border-top\">
                                    <a href=\"";
            // line 840
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_edit");
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                                        <i class=\"bi bi-pencil me-1\"></i>
                                        Modifier les informations
                                    </a>
                                    <a href=\"";
            // line 844
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_details");
            yield "\" class=\"btn btn-outline-info btn-sm ms-2\">
                                        <i class=\"bi bi-eye me-1\"></i>
                                        Voir les détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 854
        yield "
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 865
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

        // line 866
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Welcome Machine Animation
        const welcomeElement = document.getElementById('welcomeMessage');
        const fullName = \"";
        // line 871
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 871), "fullName", [], "any", true, true, false, 871) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 871, $this->source); })()), "user", [], "any", false, false, false, 871), "fullName", [], "any", false, false, false, 871)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 871, $this->source); })()), "user", [], "any", false, false, false, 871), "fullName", [], "any", false, false, false, 871), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 871), "companyName", [], "any", true, true, false, 871) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 871, $this->source); })()), "user", [], "any", false, false, false, 871), "companyName", [], "any", false, false, false, 871)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 871, $this->source); })()), "user", [], "any", false, false, false, 871), "companyName", [], "any", false, false, false, 871), "html", null, true)) : ("Utilisateur"))));
        yield "\";
        const welcomeText = `Welcome \${fullName} ! 👋`;
        let index = 0;

        function typeWelcomeText() {
            if (index < welcomeText.length) {
                welcomeElement.innerHTML = welcomeText.substring(0, index + 1) + 
                    '<span class=\"machine-cursor\"></span>';
                index++;
                setTimeout(typeWelcomeText, 100);
            } else {
                // Keep cursor blinking for a while, then remove it
                setTimeout(() => {
                    welcomeElement.innerHTML = welcomeText;
                }, 2000);
            }
        }

        // Start typing animation after a short delay
        setTimeout(typeWelcomeText, 500);

        // Load Stock Movements (simulation)
        function loadStockMovements() {
            const movementsContainer = document.getElementById('stockMovements');
            
            // Simulation de données - À remplacer par une requête AJAX réelle
            const sampleMovements = [
                {
                    id: 1,
                    product: \"Samsung Galaxy S23\",
                    type: \"in\",
                    quantity: 50,
                    date: new Date().toISOString(),
                    reference: \"IN-2024-001\"
                },
                {
                    id: 2,
                    product: \"iPhone 15 Pro\",
                    type: \"out\",
                    quantity: 15,
                    date: new Date(Date.now() - 86400000).toISOString(), // Yesterday
                    reference: \"OUT-2024-015\"
                },
                {
                    id: 3,
                    product: \"MacBook Air M2\",
                    type: \"in\",
                    quantity: 25,
                    date: new Date(Date.now() - 172800000).toISOString(), // 2 days ago
                    reference: \"IN-2024-002\"
                },
                {
                    id: 4,
                    product: \"Dell XPS 13\",
                    type: \"out\",
                    quantity: 8,
                    date: new Date(Date.now() - 259200000).toISOString(), // 3 days ago
                    reference: \"OUT-2024-014\"
                }
            ];

            if (sampleMovements.length > 0) {
                let html = '';
                sampleMovements.forEach(movement => {
                    const date = new Date(movement.date);
                    const formattedDate = date.toLocaleDateString('fr-FR', { 
                        day: '2-digit', 
                        month: 'short',
                        hour: '2-digit',
                        minute: '2-digit'
                    });
                    
                    html += `
                        <div class=\"movement-item\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div class=\"flex-grow-1\">
                                    <div class=\"d-flex align-items-center mb-1\">
                                        <span class=\"movement-type \${movement.type} me-2\">
                                            <i class=\"bi bi-\${movement.type === 'in' ? 'arrow-down-left' : 'arrow-up-right'} me-1\"></i>
                                            \${movement.type === 'in' ? 'Entrée' : 'Sortie'}
                                        </span>
                                        <small class=\"text-muted\">\${movement.reference}</small>
                                    </div>
                                    <div class=\"product-name\">\${movement.product}</div>
                                    <div class=\"movement-date\">
                                        <i class=\"bi bi-calendar me-1\"></i>
                                        \${formattedDate}
                                    </div>
                                </div>
                                <div class=\"text-end\">
                                    <div class=\"movement-quantity \${movement.type === 'in' ? 'text-success' : 'text-danger'}\">
                                        \${movement.type === 'in' ? '+' : '-'}\${movement.quantity}
                                    </div>
                                    <small class=\"text-muted\">unités</small>
                                </div>
                            </div>
                        </div>
                    `;
                });
                movementsContainer.innerHTML = html;
            }
        }

        // Load movements after a delay
        setTimeout(loadStockMovements, 1500);

        // Counter animations
        const counters = document.querySelectorAll('.stat-number');
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const target = parseInt(element.textContent) || 0;
                    if (target > 0) {
                        animateCounter(element, target);
                    }
                    counterObserver.unobserve(element);
                }
            });
        }, observerOptions);

        counters.forEach(counter => {
            if (parseInt(counter.textContent) > 0) {
                counterObserver.observe(counter);
            }
        });

        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const duration = 1500;
            const interval = duration / (target / increment);
            
            const timer = setInterval(() => {
                current = Math.ceil(current + increment);
                element.textContent = current.toLocaleString('fr-FR');
                
                if (current >= target) {
                    element.textContent = target.toLocaleString('fr-FR');
                    clearInterval(timer);
                }
            }, interval);
        }

        // Quick Actions Handlers
        document.querySelectorAll('.quick-action-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const action = this.querySelector('span').textContent;
                
                // Simulation d'action - À remplacer par des vrais handlers
                console.log(`Action rapide: \${action}`);
                
                // Feedback visuel
                const originalBg = this.style.backgroundColor;
                const originalColor = this.style.color;
                this.style.backgroundColor = '#e8f4ff';
                this.style.color = '#3498db';
                
                setTimeout(() => {
                    this.style.backgroundColor = originalBg;
                    this.style.color = originalColor;
                }, 300);
            });
        });

        // Update date/time
        function updateDateTime() {
            const now = new Date();
            const dateStr = now.toLocaleDateString('fr-FR', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            const timeStr = now.toLocaleTimeString('fr-FR', {
                hour: '2-digit',
                minute: '2-digit'
            });
            
            // Optionnel: Mettre à jour un élément spécifique si nécessaire
            const timeElements = document.querySelectorAll('.current-time');
            timeElements.forEach(el => {
                el.textContent = `\${dateStr} - \${timeStr}`;
            });
        }

        // Update time initially and every minute
        updateDateTime();
        setInterval(updateDateTime, 60000);
        
        // Card hover effects
        const cards = document.querySelectorAll('.dashboard-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
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
        return "dashboard/index.html.twig";
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
        return array (  1144 => 871,  1136 => 866,  1123 => 865,  1103 => 854,  1090 => 844,  1083 => 840,  1076 => 835,  1072 => 833,  1066 => 831,  1064 => 830,  1056 => 824,  1052 => 822,  1046 => 820,  1044 => 819,  1036 => 813,  1029 => 808,  1022 => 803,  1020 => 802,  1012 => 796,  1005 => 791,  1002 => 790,  996 => 787,  992 => 785,  984 => 782,  980 => 780,  978 => 779,  975 => 778,  972 => 777,  969 => 776,  966 => 775,  964 => 774,  954 => 767,  944 => 760,  934 => 753,  924 => 746,  914 => 739,  904 => 732,  894 => 725,  887 => 720,  885 => 719,  874 => 710,  872 => 709,  863 => 702,  854 => 696,  851 => 695,  849 => 694,  846 => 693,  837 => 686,  835 => 685,  832 => 684,  823 => 677,  821 => 676,  818 => 675,  809 => 668,  807 => 667,  742 => 604,  730 => 595,  714 => 581,  712 => 580,  709 => 579,  684 => 556,  682 => 555,  679 => 554,  657 => 534,  655 => 533,  532 => 413,  516 => 399,  503 => 398,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Tableau de bord - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* Variables CSS */
    :root {
        --primary-color: #3498db;
        --primary-light: #5dade2;
        --primary-dark: #2980b9;
        --success-color: #2ecc71;
        --info-color: #3498db;
        --warning-color: #f39c12;
        --danger-color: #e74c3c;
        --secondary-color: #95a5a6;
        --dark-color: #2c3e50;
        
        --card-shadow: 0 6px 15px rgba(52, 152, 219, 0.1);
        --card-shadow-hover: 0 12px 25px rgba(52, 152, 219, 0.15);
        --border-radius-lg: 12px;
        --border-radius-sm: 8px;
        --transition-smooth: all 0.3s ease;
    }
    
    /* Layout fix */
    .row {
        margin-bottom: 1.5rem;
    }
    
    .mb-4 {
        margin-bottom: 1.5rem !important;
    }
    
    /* Welcome Machine Animation - Style bleu clair */
    .welcome-machine {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
        border-radius: var(--border-radius-lg);
        padding: 2.5rem;
        min-height: 200px;
        position: relative;
        overflow: hidden;
        border: none;
    }
    
    .welcome-machine::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: rgba(255, 255, 255, 0.3);
    }
    
    .machine-text {
        font-size: 1.8rem;
        color: white;
        margin: 0;
        min-height: 60px;
        line-height: 1.4;
        font-weight: 500;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .machine-cursor {
        display: inline-block;
        width: 3px;
        height: 2rem;
        background-color: white;
        margin-left: 5px;
        animation: blink 1s infinite;
        vertical-align: middle;
    }
    
    @keyframes blink {
        0%, 50% { opacity: 1; }
        51%, 100% { opacity: 0; }
    }
    
    /* Unified Card Design */
    .dashboard-card {
        border: none;
        border-radius: var(--border-radius-lg);
        box-shadow: var(--card-shadow);
        transition: var(--transition-smooth);
        height: 100%;
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
        background: white;
    }
    
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--card-shadow-hover);
    }
    
    .dashboard-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--card-color, var(--primary-color));
    }
    
    .dashboard-card.primary-card::before { background: var(--primary-color); }
    .dashboard-card.success-card::before { background: var(--success-color); }
    .dashboard-card.info-card::before { background: var(--info-color); }
    .dashboard-card.warning-card::before { background: var(--warning-color); }
    .dashboard-card.danger-card::before { background: var(--danger-color); }
    .dashboard-card.secondary-card::before { background: var(--secondary-color); }
    .dashboard-card.dark-card::before { background: var(--dark-color); }
    
    .card-body {
        padding: 1.5rem;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    /* Card Content Layout */
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 1rem;
    }
    
    .card-title {
        color: var(--dark-color);
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin: 0;
        opacity: 0.8;
        font-weight: 600;
    }
    
    .stat-number {
        font-size: 2.2rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
        line-height: 1;
    }
    
    .stat-subtitle {
        color: var(--secondary-color);
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }
    
    .card-footer {
        margin-top: auto;
        padding-top: 1rem;
        border-top: 1px solid #ecf0f1;
    }
    
    /* Icon Styling */
    .stat-icon-wrapper {
        width: 56px;
        height: 56px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(52, 152, 219, 0.1);
        color: var(--primary-color);
        font-size: 1.5rem;
        flex-shrink: 0;
    }
    
    .success-card .stat-icon-wrapper {
        background: rgba(46, 204, 113, 0.1);
        color: var(--success-color);
    }
    
    .info-card .stat-icon-wrapper {
        background: rgba(52, 152, 219, 0.1);
        color: var(--info-color);
    }
    
    .warning-card .stat-icon-wrapper {
        background: rgba(243, 156, 18, 0.1);
        color: var(--warning-color);
    }
    
    .danger-card .stat-icon-wrapper {
        background: rgba(231, 76, 60, 0.1);
        color: var(--danger-color);
    }
    
    .secondary-card .stat-icon-wrapper {
        background: rgba(149, 165, 166, 0.1);
        color: var(--secondary-color);
    }
    
    .dark-card .stat-icon-wrapper {
        background: rgba(44, 62, 80, 0.1);
        color: var(--dark-color);
    }
    
    /* Stock Movements Table */
    .stock-movements-card {
        height: 100%;
    }
    
    .movement-item {
        padding: 1rem;
        border-bottom: 1px solid #ecf0f1;
        transition: var(--transition-smooth);
    }
    
    .movement-item:hover {
        background-color: #f8f9fa;
    }
    
    .movement-item:last-child {
        border-bottom: none;
    }
    
    .movement-type {
        display: inline-flex;
        align-items: center;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }
    
    .movement-type.in {
        background-color: rgba(46, 204, 113, 0.1);
        color: var(--success-color);
    }
    
    .movement-type.out {
        background-color: rgba(231, 76, 60, 0.1);
        color: var(--danger-color);
    }
    
    .product-name {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.25rem;
    }
    
    .movement-date {
        font-size: 0.85rem;
        color: var(--secondary-color);
    }
    
    .movement-quantity {
        font-weight: 700;
        font-size: 1.1rem;
    }
    
    /* Company Info Styling */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }
    
    .info-item {
        background: #f8f9fa;
        padding: 1.25rem;
        border-radius: var(--border-radius-sm);
        border-left: 4px solid var(--primary-color);
        transition: var(--transition-smooth);
    }
    
    .info-item:hover {
        background: #edf2f7;
        transform: translateY(-2px);
    }
    
    .info-label {
        font-size: 0.85rem;
        color: var(--secondary-color);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }
    
    .info-value {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--dark-color);
        margin: 0;
    }
    
    /* Quick Actions */
    .quick-action-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1.5rem 0.5rem;
        border: 1px solid #e0e0e0;
        border-radius: var(--border-radius-sm);
        background: white;
        color: var(--dark-color);
        transition: var(--transition-smooth);
        text-decoration: none;
        height: 100%;
        min-height: 120px;
        cursor: pointer;
    }
    
    .quick-action-btn:hover {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(52, 152, 219, 0.2);
        text-decoration: none;
    }
    
    .quick-action-btn i {
        font-size: 2rem;
        margin-bottom: 0.75rem;
    }
    
    /* Empty States */
    .empty-state {
        text-align: center;
        padding: 2rem;
        color: var(--secondary-color);
    }
    
    .empty-state i {
        font-size: 3rem;
        margin-bottom: 1rem;
        opacity: 0.3;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .stat-number {
            font-size: 1.8rem;
        }
        
        .welcome-machine {
            padding: 1.5rem;
        }
        
        .machine-text {
            font-size: 1.4rem;
        }
        
        .info-grid {
            grid-template-columns: 1fr;
        }
    }
    
    /* Animation Classes */
    .fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    /* Status badges */
    .badge-status {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }
    
    .badge-active {
        background-color: rgba(46, 204, 113, 0.1);
        color: var(--success-color);
    }
    
    .badge-trial {
        background-color: rgba(243, 156, 18, 0.1);
        color: var(--warning-color);
    }
    
    .badge-expired {
        background-color: rgba(231, 76, 60, 0.1);
        color: var(--danger-color);
    }
</style>
{% endblock %}

{% block body %}
<!-- Begin page -->
<div id=\"layout-wrapper\">
    
    <div class=\"main-content\">
        <div class=\"page-content\">
            <div class=\"container-fluid\">

                <!-- Breadcrumb -->
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"page-title-box\">
                            <h4 class=\"page-title\">Tableau de Bord</h4>
                            <div class=\"page-title-right\">
                                <ol class=\"breadcrumb m-0\">
                                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                                    <li class=\"breadcrumb-item active\">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Welcome Machine -->
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"welcome-machine fade-in\">
                            <div class=\"machine-text\" id=\"welcomeMessage\">
                                <!-- Texte généré par JavaScript -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards - Taille uniforme -->
                <div class=\"row\">
                    <!-- Produits Totaux -->
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card primary-card fade-in\" style=\"animation-delay: 0.1s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Produits Totaux</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Articles en catalogue</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-box-seam\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-primary text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Voir le catalogue
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ventes Totales -->
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card success-card fade-in\" style=\"animation-delay: 0.2s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Ventes Totales</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Transactions complétées</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-cart-check\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-success text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Voir les ventes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chiffre d'Affaires -->
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card info-card fade-in\" style=\"animation-delay: 0.3s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Chiffre d'Affaires</h6>
                                        <div class=\"stat-number\">0 FCFA</div>
                                        <div class=\"stat-subtitle\">Total généré</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-currency-exchange\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-info text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Voir rapports
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clients -->
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card warning-card fade-in\" style=\"animation-delay: 0.4s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Clients</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Clients actifs</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-people\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-warning text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Gérer clients
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deuxième ligne de stats conditionnelles -->
                <div class=\"row\">
                    {% if is_granted('ROLE_CASHIER') or is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card dark-card fade-in\" style=\"animation-delay: 0.2s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Ventes Aujourd'hui</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">0 FCFA générés</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-cash-stack\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <span class=\"badge bg-light text-dark\">En attente: 0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endif %}

                    {% if is_granted('ROLE_STOCK_MANAGER') or is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card danger-card fade-in\" style=\"animation-delay: 0.3s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Stock Faible</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Produits à réapprovisionner</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-exclamation-triangle\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-danger text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Réapprovisionner
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endif %}

                    {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card secondary-card fade-in\" style=\"animation-delay: 0.4s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Utilisateurs</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Comptes actifs</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-person-plus\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"{{ path('app_user_index') }}\" class=\"text-secondary text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Gérer utilisateurs
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endif %}

                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card primary-card fade-in\" style=\"animation-delay: 0.5s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">En Attente</h6>
                                        <div class=\"stat-number\">0</div>
                                        <div class=\"stat-subtitle\">Commandes à traiter</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-clock-history\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"#\" class=\"text-primary text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Traiter maintenant
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stock Movements & Quick Actions Row -->
                <div class=\"row\">
                    <!-- Stock Movements -->
                    <div class=\"col-lg-8 mb-4\">
                        <div class=\"dashboard-card stock-movements-card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <h5 class=\"card-title mb-0\">
                                        <i class=\"bi bi-arrow-left-right text-primary me-2\"></i>
                                        Derniers Mouvements de Stock
                                    </h5>
                                    <a href=\"#\" class=\"text-primary text-decoration-none small\">
                                        Voir tout <i class=\"bi bi-arrow-right ms-1\"></i>
                                    </a>
                                </div>
                                
                                <div id=\"stockMovements\">
                                    <!-- Les mouvements seront chargés ici -->
                                    <div class=\"empty-state\">
                                        <i class=\"bi bi-arrow-left-right\"></i>
                                        <p class=\"mb-0\">Aucun mouvement de stock récent</p>
                                        <small class=\"text-muted\">Les mouvements apparaîtront ici</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class=\"col-lg-4 mb-4\">
                        <div class=\"dashboard-card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-3\">
                                    <i class=\"bi bi-lightning text-warning me-2\"></i>
                                    Actions Rapides
                                </h5>
                                
                                <div class=\"row g-3\">
                                    {% if is_granted('ROLE_CASHIER') %}
                                    <div class=\"col-12\">
                                        <button class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-cart-plus text-primary\"></i>
                                            <span class=\"fw-medium\">Nouvelle Vente</span>
                                        </button>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_MANAGER') or is_granted('ROLE_ADMIN') %}
                                    <div class=\"col-12\">
                                        <button class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-plus-circle text-success\"></i>
                                            <span class=\"fw-medium\">Ajouter Produit</span>
                                        </button>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_STOCK_MANAGER') %}
                                    <div class=\"col-12\">
                                        <button class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-boxes text-warning\"></i>
                                            <span class=\"fw-medium\">Gérer Stock</span>
                                        </button>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_ADMIN') %}
                                    <div class=\"col-12\">
                                        <a href=\"{{ path('app_user_new') }}\" class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-person-plus text-info\"></i>
                                            <span class=\"fw-medium\">Nouvel Utilisateur</span>
                                        </a>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Company Information (Visible uniquement pour les administrateurs/propriétaires HMA) -->
                {% if app.user.isHmaOwner is defined and app.user.isHmaOwner and app.user.hmaServiceId is not null %}
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"dashboard-card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-4\">
                                    <i class=\"bi bi-building text-primary me-2\"></i>
                                    Informations de l'Entreprise
                                </h5>
                                
                                {% set hmaService = app.user.hmaServiceId %}
                                
                                <div class=\"info-grid\">
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Nom de l'entreprise</div>
                                        <p class=\"info-value\">
                                            {{ hmaService.companyName ?? 'Non spécifié' }}
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Email de contact</div>
                                        <p class=\"info-value\">
                                            {{ hmaService.email ?? app.user.email }}
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Téléphone</div>
                                        <p class=\"info-value\">
                                            {{ hmaService.phone ?? 'Non spécifié' }}
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Numéro d'abonnement</div>
                                        <p class=\"info-value\">
                                            {{ hmaService.subscriptionNumber ?? 'N/A' }}
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Adresse</div>
                                        <p class=\"info-value\">
                                            {{ hmaService.address ?? 'Non spécifiée' }}
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Ville</div>
                                        <p class=\"info-value\">
                                            {{ hmaService.city ?? 'Non spécifiée' }}
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Pays</div>
                                        <p class=\"info-value\">
                                            {{ hmaService.country ?? 'Non spécifié' }}
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Période d'essai</div>
                                        <p class=\"info-value\">
                                            {% if hmaService.trialEndsAt %}
                                                {% set now = date() %}
                                                {% set trialEnds = hmaService.trialEndsAt %}
                                                {% set daysRemaining = trialEnds.diff(now).days %}
                                                
                                                {% if daysRemaining > 0 %}
                                                    <span class=\"badge-status badge-trial\">
                                                        <i class=\"bi bi-clock me-1\"></i>
                                                        Jusqu'au {{ trialEnds|date('d/m/Y') }} ({{ daysRemaining }} jours restants)
                                                    </span>
                                                {% else %}
                                                    <span class=\"badge-status badge-expired\">
                                                        <i class=\"bi bi-x-circle me-1\"></i>
                                                        Terminée le {{ trialEnds|date('d/m/Y') }}
                                                    </span>
                                                {% endif %}
                                            {% else %}
                                                <span class=\"badge-status badge-active\">
                                                    <i class=\"bi bi-check-circle me-1\"></i>
                                                    Abonnement actif
                                                </span>
                                            {% endif %}
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Statut</div>
                                        <p class=\"info-value\">
                                            {% if hmaService.isActive %}
                                                <span class=\"badge-status badge-active\">
                                                    <i class=\"bi bi-check-circle me-1\"></i>
                                                    Actif
                                                </span>
                                            {% else %}
                                                <span class=\"badge-status badge-expired\">
                                                    <i class=\"bi bi-x-circle me-1\"></i>
                                                    Inactif
                                                </span>
                                            {% endif %}
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Date de création</div>
                                        <p class=\"info-value\">
                                            {% if hmaService.createdAt %}
                                                {{ hmaService.createdAt|date('d/m/Y à H:i') }}
                                            {% else %}
                                                Non disponible
                                            {% endif %}
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Dernière mise à jour</div>
                                        <p class=\"info-value\">
                                            {% if hmaService.updatedAt %}
                                                {{ hmaService.updatedAt|date('d/m/Y à H:i') }}
                                            {% else %}
                                                Non disponible
                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                                
                                <div class=\"mt-4 pt-3 border-top\">
                                    <a href=\"{{ path('app_dashboard_hmaservice_edit') }}\" class=\"btn btn-outline-primary btn-sm\">
                                        <i class=\"bi bi-pencil me-1\"></i>
                                        Modifier les informations
                                    </a>
                                    <a href=\"{{ path('app_dashboard_hmaservice_details') }}\" class=\"btn btn-outline-info btn-sm ms-2\">
                                        <i class=\"bi bi-eye me-1\"></i>
                                        Voir les détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Welcome Machine Animation
        const welcomeElement = document.getElementById('welcomeMessage');
        const fullName = \"{{ app.user.fullName ?? app.user.companyName ?? 'Utilisateur' }}\";
        const welcomeText = `Welcome \${fullName} ! 👋`;
        let index = 0;

        function typeWelcomeText() {
            if (index < welcomeText.length) {
                welcomeElement.innerHTML = welcomeText.substring(0, index + 1) + 
                    '<span class=\"machine-cursor\"></span>';
                index++;
                setTimeout(typeWelcomeText, 100);
            } else {
                // Keep cursor blinking for a while, then remove it
                setTimeout(() => {
                    welcomeElement.innerHTML = welcomeText;
                }, 2000);
            }
        }

        // Start typing animation after a short delay
        setTimeout(typeWelcomeText, 500);

        // Load Stock Movements (simulation)
        function loadStockMovements() {
            const movementsContainer = document.getElementById('stockMovements');
            
            // Simulation de données - À remplacer par une requête AJAX réelle
            const sampleMovements = [
                {
                    id: 1,
                    product: \"Samsung Galaxy S23\",
                    type: \"in\",
                    quantity: 50,
                    date: new Date().toISOString(),
                    reference: \"IN-2024-001\"
                },
                {
                    id: 2,
                    product: \"iPhone 15 Pro\",
                    type: \"out\",
                    quantity: 15,
                    date: new Date(Date.now() - 86400000).toISOString(), // Yesterday
                    reference: \"OUT-2024-015\"
                },
                {
                    id: 3,
                    product: \"MacBook Air M2\",
                    type: \"in\",
                    quantity: 25,
                    date: new Date(Date.now() - 172800000).toISOString(), // 2 days ago
                    reference: \"IN-2024-002\"
                },
                {
                    id: 4,
                    product: \"Dell XPS 13\",
                    type: \"out\",
                    quantity: 8,
                    date: new Date(Date.now() - 259200000).toISOString(), // 3 days ago
                    reference: \"OUT-2024-014\"
                }
            ];

            if (sampleMovements.length > 0) {
                let html = '';
                sampleMovements.forEach(movement => {
                    const date = new Date(movement.date);
                    const formattedDate = date.toLocaleDateString('fr-FR', { 
                        day: '2-digit', 
                        month: 'short',
                        hour: '2-digit',
                        minute: '2-digit'
                    });
                    
                    html += `
                        <div class=\"movement-item\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div class=\"flex-grow-1\">
                                    <div class=\"d-flex align-items-center mb-1\">
                                        <span class=\"movement-type \${movement.type} me-2\">
                                            <i class=\"bi bi-\${movement.type === 'in' ? 'arrow-down-left' : 'arrow-up-right'} me-1\"></i>
                                            \${movement.type === 'in' ? 'Entrée' : 'Sortie'}
                                        </span>
                                        <small class=\"text-muted\">\${movement.reference}</small>
                                    </div>
                                    <div class=\"product-name\">\${movement.product}</div>
                                    <div class=\"movement-date\">
                                        <i class=\"bi bi-calendar me-1\"></i>
                                        \${formattedDate}
                                    </div>
                                </div>
                                <div class=\"text-end\">
                                    <div class=\"movement-quantity \${movement.type === 'in' ? 'text-success' : 'text-danger'}\">
                                        \${movement.type === 'in' ? '+' : '-'}\${movement.quantity}
                                    </div>
                                    <small class=\"text-muted\">unités</small>
                                </div>
                            </div>
                        </div>
                    `;
                });
                movementsContainer.innerHTML = html;
            }
        }

        // Load movements after a delay
        setTimeout(loadStockMovements, 1500);

        // Counter animations
        const counters = document.querySelectorAll('.stat-number');
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const target = parseInt(element.textContent) || 0;
                    if (target > 0) {
                        animateCounter(element, target);
                    }
                    counterObserver.unobserve(element);
                }
            });
        }, observerOptions);

        counters.forEach(counter => {
            if (parseInt(counter.textContent) > 0) {
                counterObserver.observe(counter);
            }
        });

        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const duration = 1500;
            const interval = duration / (target / increment);
            
            const timer = setInterval(() => {
                current = Math.ceil(current + increment);
                element.textContent = current.toLocaleString('fr-FR');
                
                if (current >= target) {
                    element.textContent = target.toLocaleString('fr-FR');
                    clearInterval(timer);
                }
            }, interval);
        }

        // Quick Actions Handlers
        document.querySelectorAll('.quick-action-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const action = this.querySelector('span').textContent;
                
                // Simulation d'action - À remplacer par des vrais handlers
                console.log(`Action rapide: \${action}`);
                
                // Feedback visuel
                const originalBg = this.style.backgroundColor;
                const originalColor = this.style.color;
                this.style.backgroundColor = '#e8f4ff';
                this.style.color = '#3498db';
                
                setTimeout(() => {
                    this.style.backgroundColor = originalBg;
                    this.style.color = originalColor;
                }, 300);
            });
        });

        // Update date/time
        function updateDateTime() {
            const now = new Date();
            const dateStr = now.toLocaleDateString('fr-FR', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            const timeStr = now.toLocaleTimeString('fr-FR', {
                hour: '2-digit',
                minute: '2-digit'
            });
            
            // Optionnel: Mettre à jour un élément spécifique si nécessaire
            const timeElements = document.querySelectorAll('.current-time');
            timeElements.forEach(el => {
                el.textContent = `\${dateStr} - \${timeStr}`;
            });
        }

        // Update time initially and every minute
        updateDateTime();
        setInterval(updateDateTime, 60000);
        
        // Card hover effects
        const cards = document.querySelectorAll('.dashboard-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    });
</script>
{% endblock %}", "dashboard/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\dashboard\\index.html.twig");
    }
}
