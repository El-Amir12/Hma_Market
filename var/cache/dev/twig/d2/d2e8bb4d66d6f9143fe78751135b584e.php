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
class __TwigTemplate_2fbc35f9bd71fa5c87b798b922597511 extends Template
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
    /* ✅ NE PAS REDÉFINIR :root ICI - Utiliser les variables de base.html.twig */
    
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
    
    .movement-type.purchase_in {
        background-color: rgba(46, 204, 113, 0.1);
        color: var(--success-color);
    }
    
    .movement-type.sale_out {
        background-color: rgba(231, 76, 60, 0.1);
        color: var(--danger-color);
    }
    
    .movement-type.adjustment_in {
        background-color: rgba(52, 152, 219, 0.1);
        color: var(--info-color);
    }
    
    .movement-type.adjustment_out {
        background-color: rgba(243, 156, 18, 0.1);
        color: var(--warning-color);
    }
    
    .movement-type.return_in {
        background-color: rgba(102, 126, 234, 0.1);
        color: #667eea;
    }
    
    .movement-type.return_out {
        background-color: rgba(149, 165, 166, 0.1);
        color: var(--secondary-color);
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

    /* Welcome Card */
    .welcome-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 16px;
        padding: 1.5rem;
        color: white;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    }

    .welcome-card-content {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        flex-wrap: wrap;
    }

    .welcome-avatar {
        flex-shrink: 0;
    }

    .avatar-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border: 3px solid white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .avatar-placeholder {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(5px);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: bold;
        color: white;
        border: 2px solid white;
    }

    /* Welcome Card Moderne - Bleu */
    .welcome-card-modern {
        background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
        border-radius: 16px;
        padding: 2rem;
        color: white;
        box-shadow: 0 10px 25px rgba(52, 152, 219, 0.3);
        text-align: center;
    }

    .welcome-content {
        max-width: 800px;
        margin: 0 auto;
    }

    .welcome-greeting {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 1rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .welcome-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        margin-top: 1rem;
    }

    .detail-item {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(5px);
        padding: 0.5rem 1.2rem;
        border-radius: 30px;
        font-size: 1rem;
        display: inline-flex;
        align-items: center;
        border: 1px solid rgba(255,255,255,0.2);
    }

    .detail-item i {
        font-size: 1.1rem;
        margin-right: 0.5rem;
    }

    @media (max-width: 768px) {
        .welcome-greeting {
            font-size: 1.6rem;
        }
        .welcome-details {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 500
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

        // line 501
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
        // line 515
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                                    <li class=\"breadcrumb-item active\">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Welcome Card - Style bleu -->
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"welcome-card-modern fade-in\">
                            <div class=\"welcome-content\">
                                <h2 class=\"welcome-greeting\">
                                    ";
        // line 529
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 529), "fullName", [], "any", true, true, false, 529)) {
            // line 530
            yield "                                        Bonjour, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 530, $this->source); })()), "user", [], "any", false, false, false, 530), "fullName", [], "any", false, false, false, 530), "html", null, true);
            yield " 👋
                                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 531
($context["app"] ?? null), "user", [], "any", false, true, false, 531), "companyName", [], "any", true, true, false, 531)) {
            // line 532
            yield "                                        Bonjour, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 532, $this->source); })()), "user", [], "any", false, false, false, 532), "companyName", [], "any", false, false, false, 532), "html", null, true);
            yield " 👋
                                    ";
        } else {
            // line 534
            yield "                                        Bonjour ! 👋
                                    ";
        }
        // line 536
        yield "                                </h2>
                                <div class=\"welcome-details\">
                                    <div class=\"detail-item\">
                                        <i class=\"bi bi-envelope me-2\"></i>
                                        <span>";
        // line 540
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 540, $this->source); })()), "user", [], "any", false, false, false, 540), "email", [], "any", false, false, false, 540), "html", null, true);
        yield "</span>
                                    </div>
                                    ";
        // line 542
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 542), "employmentDate", [], "any", true, true, false, 542) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 542, $this->source); })()), "user", [], "any", false, false, false, 542), "employmentDate", [], "any", false, false, false, 542))) {
            // line 543
            yield "                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-calendar-check me-2\"></i>
                                            <span>Embauché le ";
            // line 545
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 545, $this->source); })()), "user", [], "any", false, false, false, 545), "employmentDate", [], "any", false, false, false, 545), "d/m/Y"), "html", null, true);
            yield "</span>
                                        </div>
                                    ";
        }
        // line 548
        yield "                                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 548), "loginAt", [], "any", true, true, false, 548) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 548, $this->source); })()), "user", [], "any", false, false, false, 548), "loginAt", [], "any", false, false, false, 548))) {
            // line 549
            yield "                                        ";
            $context["loginDiff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 549, $this->source); })()), "user", [], "any", false, false, false, 549), "loginAt", [], "any", false, false, false, 549)], "method", false, false, false, 549);
            // line 550
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginDiff"]) || array_key_exists("loginDiff", $context) ? $context["loginDiff"] : (function () { throw new RuntimeError('Variable "loginDiff" does not exist.', 550, $this->source); })()), "d", [], "any", false, false, false, 550) > 0)) {
                // line 551
                yield "                                            ";
                $context["lastLoginText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginDiff"]) || array_key_exists("loginDiff", $context) ? $context["loginDiff"] : (function () { throw new RuntimeError('Variable "loginDiff" does not exist.', 551, $this->source); })()), "d", [], "any", false, false, false, 551)) . " jour") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginDiff"]) || array_key_exists("loginDiff", $context) ? $context["loginDiff"] : (function () { throw new RuntimeError('Variable "loginDiff" does not exist.', 551, $this->source); })()), "d", [], "any", false, false, false, 551) > 1)) ? ("s") : ("")));
                // line 552
                yield "                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginDiff"]) || array_key_exists("loginDiff", $context) ? $context["loginDiff"] : (function () { throw new RuntimeError('Variable "loginDiff" does not exist.', 552, $this->source); })()), "h", [], "any", false, false, false, 552) > 0)) {
                // line 553
                yield "                                            ";
                $context["lastLoginText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginDiff"]) || array_key_exists("loginDiff", $context) ? $context["loginDiff"] : (function () { throw new RuntimeError('Variable "loginDiff" does not exist.', 553, $this->source); })()), "h", [], "any", false, false, false, 553)) . " heure") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginDiff"]) || array_key_exists("loginDiff", $context) ? $context["loginDiff"] : (function () { throw new RuntimeError('Variable "loginDiff" does not exist.', 553, $this->source); })()), "h", [], "any", false, false, false, 553) > 1)) ? ("s") : ("")));
                // line 554
                yield "                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginDiff"]) || array_key_exists("loginDiff", $context) ? $context["loginDiff"] : (function () { throw new RuntimeError('Variable "loginDiff" does not exist.', 554, $this->source); })()), "i", [], "any", false, false, false, 554) > 0)) {
                // line 555
                yield "                                            ";
                $context["lastLoginText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginDiff"]) || array_key_exists("loginDiff", $context) ? $context["loginDiff"] : (function () { throw new RuntimeError('Variable "loginDiff" does not exist.', 555, $this->source); })()), "i", [], "any", false, false, false, 555)) . " minute") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginDiff"]) || array_key_exists("loginDiff", $context) ? $context["loginDiff"] : (function () { throw new RuntimeError('Variable "loginDiff" does not exist.', 555, $this->source); })()), "i", [], "any", false, false, false, 555) > 1)) ? ("s") : ("")));
                // line 556
                yield "                                        ";
            } else {
                // line 557
                yield "                                            ";
                $context["lastLoginText"] = "À l'instant";
                // line 558
                yield "                                        ";
            }
            // line 559
            yield "                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-box-arrow-in-right me-2\"></i>
                                            <span>Dernière connexion : ";
            // line 561
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastLoginText"]) || array_key_exists("lastLoginText", $context) ? $context["lastLoginText"] : (function () { throw new RuntimeError('Variable "lastLoginText" does not exist.', 561, $this->source); })()), "html", null, true);
            yield "</span>
                                        </div>
                                    ";
        }
        // line 564
        yield "                                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 564), "lastActivity", [], "any", true, true, false, 564) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 564, $this->source); })()), "user", [], "any", false, false, false, 564), "lastActivity", [], "any", false, false, false, 564))) {
            // line 565
            yield "                                        ";
            $context["activityDiff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 565, $this->source); })()), "user", [], "any", false, false, false, 565), "lastActivity", [], "any", false, false, false, 565)], "method", false, false, false, 565);
            // line 566
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityDiff"]) || array_key_exists("activityDiff", $context) ? $context["activityDiff"] : (function () { throw new RuntimeError('Variable "activityDiff" does not exist.', 566, $this->source); })()), "d", [], "any", false, false, false, 566) > 0)) {
                // line 567
                yield "                                            ";
                $context["lastActivityText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityDiff"]) || array_key_exists("activityDiff", $context) ? $context["activityDiff"] : (function () { throw new RuntimeError('Variable "activityDiff" does not exist.', 567, $this->source); })()), "d", [], "any", false, false, false, 567)) . " jour") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityDiff"]) || array_key_exists("activityDiff", $context) ? $context["activityDiff"] : (function () { throw new RuntimeError('Variable "activityDiff" does not exist.', 567, $this->source); })()), "d", [], "any", false, false, false, 567) > 1)) ? ("s") : ("")));
                // line 568
                yield "                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityDiff"]) || array_key_exists("activityDiff", $context) ? $context["activityDiff"] : (function () { throw new RuntimeError('Variable "activityDiff" does not exist.', 568, $this->source); })()), "h", [], "any", false, false, false, 568) > 0)) {
                // line 569
                yield "                                            ";
                $context["lastActivityText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityDiff"]) || array_key_exists("activityDiff", $context) ? $context["activityDiff"] : (function () { throw new RuntimeError('Variable "activityDiff" does not exist.', 569, $this->source); })()), "h", [], "any", false, false, false, 569)) . " heure") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityDiff"]) || array_key_exists("activityDiff", $context) ? $context["activityDiff"] : (function () { throw new RuntimeError('Variable "activityDiff" does not exist.', 569, $this->source); })()), "h", [], "any", false, false, false, 569) > 1)) ? ("s") : ("")));
                // line 570
                yield "                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityDiff"]) || array_key_exists("activityDiff", $context) ? $context["activityDiff"] : (function () { throw new RuntimeError('Variable "activityDiff" does not exist.', 570, $this->source); })()), "i", [], "any", false, false, false, 570) > 0)) {
                // line 571
                yield "                                            ";
                $context["lastActivityText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityDiff"]) || array_key_exists("activityDiff", $context) ? $context["activityDiff"] : (function () { throw new RuntimeError('Variable "activityDiff" does not exist.', 571, $this->source); })()), "i", [], "any", false, false, false, 571)) . " minute") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityDiff"]) || array_key_exists("activityDiff", $context) ? $context["activityDiff"] : (function () { throw new RuntimeError('Variable "activityDiff" does not exist.', 571, $this->source); })()), "i", [], "any", false, false, false, 571) > 1)) ? ("s") : ("")));
                // line 572
                yield "                                        ";
            } else {
                // line 573
                yield "                                            ";
                $context["lastActivityText"] = "À l'instant";
                // line 574
                yield "                                        ";
            }
            // line 575
            yield "                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-activity me-2\"></i>
                                            <span>Dernière activité : ";
            // line 577
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastActivityText"]) || array_key_exists("lastActivityText", $context) ? $context["lastActivityText"] : (function () { throw new RuntimeError('Variable "lastActivityText" does not exist.', 577, $this->source); })()), "html", null, true);
            yield "</span>
                                        </div>
                                    ";
        }
        // line 580
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subscription Widget -->
                <div class=\"subscription-widget-container fade-in\" style=\"animation-delay: 0.2s\">
                    ";
        // line 588
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/_subscription_widget.html.twig");
        yield "
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
                                        <div class=\"stat-number\">";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_products", [], "any", true, true, false, 600)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 600, $this->source); })()), "total_products", [], "any", false, false, false, 600), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                        <div class=\"stat-subtitle\">Articles en catalogue</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-box-seam\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"";
        // line 608
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-primary text-decoration-none small\">
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
                                        <div class=\"stat-number\">";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", true, true, false, 624)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 624, $this->source); })()), "total_orders", [], "any", false, false, false, 624), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                        <div class=\"stat-subtitle\">Transactions complétées</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-cart-check\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"";
        // line 632
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"text-success text-decoration-none small\">
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
                                        <div class=\"stat-number\">";
        // line 648
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_revenue", [], "any", true, true, false, 648)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 648, $this->source); })()), "total_revenue", [], "any", false, false, false, 648), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                        <div class=\"stat-subtitle\">FCFA générés</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-currency-exchange\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"";
        // line 656
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financial_report_index");
        yield "\" class=\"text-info text-decoration-none small\">
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
                                        <div class=\"stat-number\">";
        // line 672
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_customers", [], "any", true, true, false, 672)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 672, $this->source); })()), "total_customers", [], "any", false, false, false, 672), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                        <div class=\"stat-subtitle\">Clients uniques</div>
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
        // line 692
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 693
            yield "                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card dark-card fade-in\" style=\"animation-delay: 0.2s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Ventes Aujourd'hui</h6>
                                        <div class=\"stat-number\">";
            // line 699
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "today_orders", [], "any", true, true, false, 699)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 699, $this->source); })()), "today_orders", [], "any", false, false, false, 699), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield "</div>
                                        <div class=\"stat-subtitle\">";
            // line 700
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "today_revenue", [], "any", true, true, false, 700)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 700, $this->source); })()), "today_revenue", [], "any", false, false, false, 700), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield " FCFA</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-cash-stack\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <span class=\"badge bg-light text-dark\">En attente: ";
            // line 707
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending_orders", [], "any", true, true, false, 707)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 707, $this->source); })()), "pending_orders", [], "any", false, false, false, 707), 0)) : (0)), "html", null, true);
            yield "</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 713
        yield "
                    ";
        // line 714
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 715
            yield "                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card danger-card fade-in\" style=\"animation-delay: 0.3s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Stock Faible</h6>
                                        <div class=\"stat-number\">";
            // line 721
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "low_stock", [], "any", true, true, false, 721)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 721, $this->source); })()), "low_stock", [], "any", false, false, false, 721), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield "</div>
                                        <div class=\"stat-subtitle\">Produits à réapprovisionner</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-exclamation-triangle\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"";
            // line 729
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_report_index");
            yield "\" class=\"text-danger text-decoration-none small\">
                                        <i class=\"bi bi-arrow-right me-1\"></i>
                                        Réapprovisionner
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 738
        yield "
                    ";
        // line 739
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 740
            yield "                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card secondary-card fade-in\" style=\"animation-delay: 0.4s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">Utilisateurs</h6>
                                        <div class=\"stat-number\">";
            // line 746
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_users", [], "any", true, true, false, 746)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 746, $this->source); })()), "total_users", [], "any", false, false, false, 746), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield "</div>
                                        <div class=\"stat-subtitle\">Comptes actifs</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-person-plus\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"";
            // line 754
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
        // line 763
        yield "
                    <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                        <div class=\"dashboard-card primary-card fade-in\" style=\"animation-delay: 0.5s\">
                            <div class=\"card-body\">
                                <div class=\"card-header\">
                                    <div>
                                        <h6 class=\"card-title\">En Attente</h6>
                                        <div class=\"stat-number\">";
        // line 770
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending_orders", [], "any", true, true, false, 770)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 770, $this->source); })()), "pending_orders", [], "any", false, false, false, 770), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                        <div class=\"stat-subtitle\">Commandes à traiter</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-clock-history\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"";
        // line 778
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"text-primary text-decoration-none small\">
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
                                    <a href=\"";
        // line 799
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index");
        yield "\" class=\"text-primary text-decoration-none small\">
                                        Voir tout <i class=\"bi bi-arrow-right ms-1\"></i>
                                    </a>
                                </div>
                                
                                <div id=\"stockMovements\">
                                    ";
        // line 805
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["recentMovements"]) || array_key_exists("recentMovements", $context) ? $context["recentMovements"] : (function () { throw new RuntimeError('Variable "recentMovements" does not exist.', 805, $this->source); })()))) {
            // line 806
            yield "                                        <div class=\"empty-state\">
                                            <i class=\"bi bi-arrow-left-right\"></i>
                                            <p class=\"mb-0\">Aucun mouvement de stock récent</p>
                                            <small class=\"text-muted\">Les mouvements apparaîtront ici</small>
                                        </div>
                                    ";
        } else {
            // line 812
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentMovements"]) || array_key_exists("recentMovements", $context) ? $context["recentMovements"] : (function () { throw new RuntimeError('Variable "recentMovements" does not exist.', 812, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
                // line 813
                yield "                                            <div class=\"movement-item\">
                                                <div class=\"d-flex justify-content-between align-items-start\">
                                                    <div class=\"flex-grow-1\">
                                                        <div class=\"d-flex align-items-center mb-1\">
                                                            ";
                // line 818
                yield "                                                            ";
                $context["isInMovement"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 818), ["purchase_in", "adjustment_in", "return_in", "transfer_in"]);
                // line 819
                yield "                                                            <span class=\"movement-type ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 819), "html", null, true);
                yield " me-2\">
                                                                <i class=\"bi bi-";
                // line 820
                yield (((($tmp = (isset($context["isInMovement"]) || array_key_exists("isInMovement", $context) ? $context["isInMovement"] : (function () { throw new RuntimeError('Variable "isInMovement" does not exist.', 820, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("arrow-down-left") : ("arrow-up-right"));
                yield " me-1\"></i>
                                                                ";
                // line 821
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeLabel", [], "any", false, false, false, 821), "html", null, true);
                yield "
                                                            </span>
                                                        </div>
                                                        <div class=\"product-name\">";
                // line 824
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 824), "name", [], "any", false, false, false, 824), "html", null, true);
                yield "</div>
                                                        <div class=\"movement-date\">
                                                            <i class=\"bi bi-calendar me-1\"></i>
                                                            ";
                // line 827
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 827), "d/m/Y H:i"), "html", null, true);
                yield "
                                                        </div>
                                                    </div>
                                                    <div class=\"text-end\">
                                                        ";
                // line 832
                yield "                                                        ";
                $context["isPositive"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 832), ["purchase_in", "adjustment_in", "return_in", "transfer_in"]);
                // line 833
                yield "                                                        <div class=\"movement-quantity ";
                yield (((($tmp = (isset($context["isPositive"]) || array_key_exists("isPositive", $context) ? $context["isPositive"] : (function () { throw new RuntimeError('Variable "isPositive" does not exist.', 833, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-danger"));
                yield "\">
                                                            ";
                // line 834
                yield (((($tmp = (isset($context["isPositive"]) || array_key_exists("isPositive", $context) ? $context["isPositive"] : (function () { throw new RuntimeError('Variable "isPositive" does not exist.', 834, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("+") : ("-"));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 834), 0, ",", " "), "html", null, true);
                yield "
                                                        </div>
                                                        <small class=\"text-muted\">";
                // line 836
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, true, false, 836), "unit", [], "any", true, true, false, 836) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 836), "unit", [], "any", false, false, false, 836)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 836), "unit", [], "any", false, false, false, 836), "html", null, true)) : ("unités"));
                yield "</small>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 841
            yield "                                    ";
        }
        // line 842
        yield "                                </div>
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
        // line 857
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 858
            yield "                                    <div class=\"col-12\">
                                        <a href=\"";
            // line 859
            yield (((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 859, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_sale_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_index")));
            yield "\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-cart-plus text-primary\"></i>
                                            <span class=\"fw-medium\">Nouvelle Vente</span>
                                        </a>
                                    </div>
                                    ";
        }
        // line 865
        yield "                                    
                                    ";
        // line 866
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 867
            yield "                                    <div class=\"col-12\">
                                        <a href=\"";
            // line 868
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-plus-circle text-success\"></i>
                                            <span class=\"fw-medium\">Ajouter Produit</span>
                                        </a>
                                    </div>
                                    ";
        }
        // line 874
        yield "                                    
                                    ";
        // line 875
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 876
            yield "                                    <div class=\"col-12\">
                                        <a href=\"";
            // line 877
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
            yield "\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-boxes text-warning\"></i>
                                            <span class=\"fw-medium\">Gérer Stock</span>
                                        </a>
                                    </div>
                                    ";
        }
        // line 883
        yield "                                    
                                    ";
        // line 884
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 885
            yield "                                    <div class=\"col-12\">
                                        <a href=\"";
            // line 886
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-person-plus text-info\"></i>
                                            <span class=\"fw-medium\">Nouvel Utilisateur</span>
                                        </a>
                                    </div>
                                    ";
        }
        // line 892
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Company Information (Visible uniquement pour les administrateurs/propriétaires HMA) -->
                ";
        // line 899
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 899), "isHmaOwner", [], "any", true, true, false, 899) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 899, $this->source); })()), "user", [], "any", false, false, false, 899), "isHmaOwner", [], "any", false, false, false, 899)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 899, $this->source); })()), "user", [], "any", false, false, false, 899), "hmaServiceId", [], "any", false, false, false, 899)))) {
            // line 900
            yield "                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"dashboard-card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-4\">
                                    <i class=\"bi bi-building text-primary me-2\"></i>
                                    Informations de l'Entreprise
                                </h5>
                                
                                ";
            // line 909
            $context["hmaService"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 909, $this->source); })()), "user", [], "any", false, false, false, 909), "hmaServiceId", [], "any", false, false, false, 909);
            // line 910
            yield "                                
                                <div class=\"info-grid\">
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Nom de l'entreprise</div>
                                        <p class=\"info-value\">
                                            ";
            // line 915
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", true, true, false, 915) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 915, $this->source); })()), "companyName", [], "any", false, false, false, 915)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 915, $this->source); })()), "companyName", [], "any", false, false, false, 915), "html", null, true)) : ("Non spécifié"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Email de contact</div>
                                        <p class=\"info-value\">
                                            ";
            // line 922
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "email", [], "any", true, true, false, 922) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 922, $this->source); })()), "email", [], "any", false, false, false, 922)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 922, $this->source); })()), "email", [], "any", false, false, false, 922), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 922, $this->source); })()), "user", [], "any", false, false, false, 922), "email", [], "any", false, false, false, 922), "html", null, true)));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Téléphone</div>
                                        <p class=\"info-value\">
                                            ";
            // line 929
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "phone", [], "any", true, true, false, 929) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 929, $this->source); })()), "phone", [], "any", false, false, false, 929)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 929, $this->source); })()), "phone", [], "any", false, false, false, 929), "html", null, true)) : ("Non spécifié"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Numéro d'abonnement</div>
                                        <p class=\"info-value\">
                                            ";
            // line 936
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "subscriptionNumber", [], "any", true, true, false, 936) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 936, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 936)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 936, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 936), "html", null, true)) : ("N/A"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Adresse</div>
                                        <p class=\"info-value\">
                                            ";
            // line 943
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "address", [], "any", true, true, false, 943) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 943, $this->source); })()), "address", [], "any", false, false, false, 943)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 943, $this->source); })()), "address", [], "any", false, false, false, 943), "html", null, true)) : ("Non spécifiée"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Ville</div>
                                        <p class=\"info-value\">
                                            ";
            // line 950
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "city", [], "any", true, true, false, 950) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 950, $this->source); })()), "city", [], "any", false, false, false, 950)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 950, $this->source); })()), "city", [], "any", false, false, false, 950), "html", null, true)) : ("Non spécifiée"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Pays</div>
                                        <p class=\"info-value\">
                                            ";
            // line 957
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "country", [], "any", true, true, false, 957) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 957, $this->source); })()), "country", [], "any", false, false, false, 957)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 957, $this->source); })()), "country", [], "any", false, false, false, 957), "html", null, true)) : ("Non spécifié"));
            yield "
                                        </p>
                                    </div>
                                    
                                    ";
            // line 962
            yield "                                    <div class=\"info-item\">
                                        <div class=\"info-label\">📍 Coordonnées GPS</div>
                                        <p class=\"info-value\">
                                            ";
            // line 965
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 965, $this->source); })()), "longitude", [], "any", false, false, false, 965)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 965, $this->source); })()), "latitude", [], "any", false, false, false, 965)))) {
                // line 966
                yield "                                                <span class=\"d-block\">
                                                    <i class=\"bi bi-geo-alt me-1\"></i>
                                                    Lat: ";
                // line 968
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 968, $this->source); })()), "latitude", [], "any", false, false, false, 968), 6, ",", " "), "html", null, true);
                yield "
                                                </span>
                                                <span class=\"d-block\">
                                                    <i class=\"bi bi-geo-alt me-1\"></i>
                                                    Lng: ";
                // line 972
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 972, $this->source); })()), "longitude", [], "any", false, false, false, 972), 6, ",", " "), "html", null, true);
                yield "
                                                </span>
                                            ";
            } else {
                // line 975
                yield "                                                <span class=\"text-muted\">Non spécifiées</span>
                                            ";
            }
            // line 977
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Période d'essai</div>
                                        <p class=\"info-value\">
                                            ";
            // line 983
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 983, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 983)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 984
                yield "                                                ";
                $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                // line 985
                yield "                                                ";
                $context["trialEnds"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 985, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 985);
                // line 986
                yield "                                                ";
                $context["daysRemaining"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trialEnds"]) || array_key_exists("trialEnds", $context) ? $context["trialEnds"] : (function () { throw new RuntimeError('Variable "trialEnds" does not exist.', 986, $this->source); })()), "diff", [(isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 986, $this->source); })())], "method", false, false, false, 986), "days", [], "any", false, false, false, 986);
                // line 987
                yield "                                                
                                                ";
                // line 988
                if (((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 988, $this->source); })()) > 0)) {
                    // line 989
                    yield "                                                    <span class=\"badge-status badge-trial\">
                                                        <i class=\"bi bi-clock me-1\"></i>
                                                        Jusqu'au ";
                    // line 991
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["trialEnds"]) || array_key_exists("trialEnds", $context) ? $context["trialEnds"] : (function () { throw new RuntimeError('Variable "trialEnds" does not exist.', 991, $this->source); })()), "d/m/Y"), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 991, $this->source); })()), "html", null, true);
                    yield " jours restants)
                                                    </span>
                                                ";
                } else {
                    // line 994
                    yield "                                                    <span class=\"badge-status badge-expired\">
                                                        <i class=\"bi bi-x-circle me-1\"></i>
                                                        Terminée le ";
                    // line 996
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["trialEnds"]) || array_key_exists("trialEnds", $context) ? $context["trialEnds"] : (function () { throw new RuntimeError('Variable "trialEnds" does not exist.', 996, $this->source); })()), "d/m/Y"), "html", null, true);
                    yield "
                                                    </span>
                                                ";
                }
                // line 999
                yield "                                            ";
            } else {
                // line 1000
                yield "                                                <span class=\"badge-status badge-active\">
                                                    <i class=\"bi bi-check-circle me-1\"></i>
                                                    Abonnement actif
                                                </span>
                                            ";
            }
            // line 1005
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Statut</div>
                                        <p class=\"info-value\">
                                            ";
            // line 1011
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 1011, $this->source); })()), "isActive", [], "any", false, false, false, 1011)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1012
                yield "                                                <span class=\"badge-status badge-active\">
                                                    <i class=\"bi bi-check-circle me-1\"></i>
                                                    Actif
                                                </span>
                                            ";
            } else {
                // line 1017
                yield "                                                <span class=\"badge-status badge-expired\">
                                                    <i class=\"bi bi-x-circle me-1\"></i>
                                                    Inactif
                                                </span>
                                            ";
            }
            // line 1022
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Date de création</div>
                                        <p class=\"info-value\">
                                            ";
            // line 1028
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 1028, $this->source); })()), "createdAt", [], "any", false, false, false, 1028)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1029
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 1029, $this->source); })()), "createdAt", [], "any", false, false, false, 1029), "d/m/Y à H:i"), "html", null, true);
                yield "
                                            ";
            } else {
                // line 1031
                yield "                                                Non disponible
                                            ";
            }
            // line 1033
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Dernière mise à jour</div>
                                        <p class=\"info-value\">
                                            ";
            // line 1039
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 1039, $this->source); })()), "updatedAt", [], "any", false, false, false, 1039)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1040
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 1040, $this->source); })()), "updatedAt", [], "any", false, false, false, 1040), "d/m/Y à H:i"), "html", null, true);
                yield "
                                            ";
            } else {
                // line 1042
                yield "                                                Non disponible
                                            ";
            }
            // line 1044
            yield "                                        </p>
                                    </div>
                                </div>
                                
                                <div class=\"mt-4 pt-3 border-top\">
                                    <a href=\"";
            // line 1049
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_edit");
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                                        <i class=\"bi bi-pencil me-1\"></i>
                                        Modifier les informations
                                    </a>
                                    <a href=\"";
            // line 1053
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
        // line 1063
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
        // line 1073
        yield "
<!-- ✅ MODAL DE CONFIRMATION POUR LA VISIBILITÉ -->
<div class=\"modal fade\" id=\"visibilityConfirmModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header ";
        // line 1078
        if (((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1078, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1078, $this->source); })()), "companyPublic", [], "any", false, false, false, 1078))) {
            yield "bg-warning";
        } else {
            yield "bg-success";
        }
        yield " text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-shop me-2\"></i>
                    ";
        // line 1081
        if (((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1081, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1081, $this->source); })()), "companyPublic", [], "any", false, false, false, 1081))) {
            // line 1082
            yield "                        Masquer votre boutique
                    ";
        } else {
            // line 1084
            yield "                        Rendre votre boutique visible
                    ";
        }
        // line 1086
        yield "                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                ";
        // line 1090
        if (((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1090, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1090, $this->source); })()), "companyPublic", [], "any", false, false, false, 1090))) {
            // line 1091
            yield "                    <i class=\"bi bi-eye-slash text-warning\" style=\"font-size: 4rem;\"></i>
                    <h4 class=\"mt-3\">Masquer votre boutique ?</h4>
                    <p class=\"text-muted\">
                        Votre boutique ne sera plus visible sur le marketplace.
                        Les clients ne pourront plus voir vos produits.
                    </p>
                    <div class=\"alert alert-warning\">
                        <i class=\"bi bi-info-circle me-2\"></i>
                        Vous pourrez toujours réactiver la visibilité à tout moment.
                    </div>
                ";
        } else {
            // line 1102
            yield "                    <i class=\"bi bi-eye text-success\" style=\"font-size: 4rem;\"></i>
                    <h4 class=\"mt-3\">Rendre votre boutique visible ?</h4>
                    <p class=\"text-muted\">
                        Votre boutique sera visible sur le marketplace.
                        Les clients pourront voir vos produits et passer des commandes.
                    </p>
                    <div class=\"alert alert-success\">
                        <i class=\"bi bi-info-circle me-2\"></i>
                        Vous pourrez toujours masquer votre boutique à tout moment.
                    </div>
                ";
        }
        // line 1113
        yield "            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form method=\"post\" action=\"";
        // line 1116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_toggle_visibility");
        yield "\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle_visibility"), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"action\" value=\"";
        // line 1118
        yield ((((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1118, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1118, $this->source); })()), "companyPublic", [], "any", false, false, false, 1118))) ? ("hide") : ("show"));
        yield "\">
                    <button type=\"submit\" class=\"btn ";
        // line 1119
        if (((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1119, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1119, $this->source); })()), "companyPublic", [], "any", false, false, false, 1119))) {
            yield "btn-warning";
        } else {
            yield "btn-success";
        }
        yield "\">
                        <i class=\"bi ";
        // line 1120
        if (((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1120, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1120, $this->source); })()), "companyPublic", [], "any", false, false, false, 1120))) {
            yield "bi-eye-slash";
        } else {
            yield "bi-eye";
        }
        yield " me-2\"></i>
                        ";
        // line 1121
        if (((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1121, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1121, $this->source); })()), "companyPublic", [], "any", false, false, false, 1121))) {
            // line 1122
            yield "                            Masquer ma boutique
                        ";
        } else {
            // line 1124
            yield "                            Rendre visible
                        ";
        }
        // line 1126
        yield "                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ✅ MODAL PÉRIODES DE GARDE -->
<div class=\"modal fade\" id=\"guardPeriodsModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--primary-color); color: white;\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-clock-history me-2\"></i>
                    Modifier les périodes de garde
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" action=\"";
        // line 1144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_guard_periods");
        yield "\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("guard_periods"), "html", null, true);
        yield "\">
                    
                    <p class=\"text-muted mb-3\">
                        <i class=\"bi bi-info-circle me-1\"></i>
                        Définissez les jours et horaires de garde pour votre pharmacie.
                    </p>
                    
                    <div id=\"guardPeriodsContainer\">
                        ";
        // line 1155
        yield "                        ";
        $context["guardPeriods"] = (((($tmp = (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1155, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "guardPeriods", [], "any", true, true, false, 1155)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 1155, $this->source); })()), "guardPeriods", [], "any", false, false, false, 1155), [])) : ([]))) : ([]));
        // line 1156
        yield "                        
                        ";
        // line 1157
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["guardPeriods"]) || array_key_exists("guardPeriods", $context) ? $context["guardPeriods"] : (function () { throw new RuntimeError('Variable "guardPeriods" does not exist.', 1157, $this->source); })()))) {
            // line 1158
            yield "                            <div class=\"text-center text-muted py-3\">
                                <i class=\"bi bi-clock fs-3 d-block mb-2\"></i>
                                Aucune période de garde configurée
                            </div>
                            <div class=\"guard-period-row d-flex gap-2 align-items-center mb-2\">
                                <select name=\"guard_periods[0][day]\" class=\"form-select\" style=\"flex: 1;\">
                                    <option value=\"\">Choisir un jour</option>
                                    <option value=\"monday\">Lundi</option>
                                    <option value=\"tuesday\">Mardi</option>
                                    <option value=\"wednesday\">Mercredi</option>
                                    <option value=\"thursday\">Jeudi</option>
                                    <option value=\"friday\">Vendredi</option>
                                    <option value=\"saturday\">Samedi</option>
                                    <option value=\"sunday\">Dimanche</option>
                                </select>
                                <input type=\"time\" name=\"guard_periods[0][start]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Début\">
                                <input type=\"time\" name=\"guard_periods[0][end]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Fin\">
                                <button type=\"button\" class=\"btn btn-danger remove-guard-period\" disabled>
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                            </div>
                        ";
        } else {
            // line 1180
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["guardPeriods"]) || array_key_exists("guardPeriods", $context) ? $context["guardPeriods"] : (function () { throw new RuntimeError('Variable "guardPeriods" does not exist.', 1180, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                // line 1181
                yield "                                <div class=\"guard-period-row d-flex gap-2 align-items-center mb-2\">
                                    <select name=\"guard_periods[";
                // line 1182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1182), "html", null, true);
                yield "][day]\" class=\"form-select\" style=\"flex: 1;\">
                                        <option value=\"\">Choisir un jour</option>
                                        <option value=\"monday\" ";
                // line 1184
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1184) == "monday")) {
                    yield "selected";
                }
                yield ">Lundi</option>
                                        <option value=\"tuesday\" ";
                // line 1185
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1185) == "tuesday")) {
                    yield "selected";
                }
                yield ">Mardi</option>
                                        <option value=\"wednesday\" ";
                // line 1186
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1186) == "wednesday")) {
                    yield "selected";
                }
                yield ">Mercredi</option>
                                        <option value=\"thursday\" ";
                // line 1187
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1187) == "thursday")) {
                    yield "selected";
                }
                yield ">Jeudi</option>
                                        <option value=\"friday\" ";
                // line 1188
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1188) == "friday")) {
                    yield "selected";
                }
                yield ">Vendredi</option>
                                        <option value=\"saturday\" ";
                // line 1189
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1189) == "saturday")) {
                    yield "selected";
                }
                yield ">Samedi</option>
                                        <option value=\"sunday\" ";
                // line 1190
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1190) == "sunday")) {
                    yield "selected";
                }
                yield ">Dimanche</option>
                                    </select>
                                    <input type=\"time\" name=\"guard_periods[";
                // line 1192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1192), "html", null, true);
                yield "][start]\" class=\"form-control\" style=\"width: 120px;\" value=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", true, true, false, 1192) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", false, false, false, 1192)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", false, false, false, 1192), "html", null, true)) : (""));
                yield "\">
                                    <input type=\"time\" name=\"guard_periods[";
                // line 1193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1193), "html", null, true);
                yield "][end]\" class=\"form-control\" style=\"width: 120px;\" value=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", true, true, false, 1193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", false, false, false, 1193)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", false, false, false, 1193), "html", null, true)) : (""));
                yield "\">
                                    <button type=\"button\" class=\"btn btn-danger remove-guard-period\">
                                        <i class=\"bi bi-trash\"></i>
                                    </button>
                                </div>
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
            unset($context['_seq'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1199
            yield "                        ";
        }
        // line 1200
        yield "                    </div>
                    
                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2\" id=\"addGuardPeriod\">
                        <i class=\"bi bi-plus-circle me-1\"></i>
                        Ajouter une période
                    </button>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn\" style=\"background: var(--primary-color); color: white;\">
                        <i class=\"bi bi-save me-2\"></i>
                        Enregistrer les périodes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1221
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

        // line 1222
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ============================================
    // 1. GESTION DES PÉRIODES DE GARDE
    // ============================================
    const container = document.getElementById('guardPeriodsContainer');
    const addBtn = document.getElementById('addGuardPeriod');
    
    if (container && addBtn) {
        let periodIndex = container.querySelectorAll('.guard-period-row').length || 0;

        // Fonction pour réinitialiser les champs d'une ligne
        function resetRow(row) {
            row.querySelectorAll('select, input').forEach(el => el.value = '');
        }

        // Fonction pour créer une nouvelle ligne
        function createRow(index) {
            const row = document.createElement('div');
            row.className = 'guard-period-row d-flex gap-2 align-items-center mb-2';
            row.innerHTML = `
                <select name=\"guard_periods[\${index}][day]\" class=\"form-select\" style=\"flex: 1;\">
                    <option value=\"\">Choisir un jour</option>
                    <option value=\"monday\">Lundi</option>
                    <option value=\"tuesday\">Mardi</option>
                    <option value=\"wednesday\">Mercredi</option>
                    <option value=\"thursday\">Jeudi</option>
                    <option value=\"friday\">Vendredi</option>
                    <option value=\"saturday\">Samedi</option>
                    <option value=\"sunday\">Dimanche</option>
                </select>
                <input type=\"time\" name=\"guard_periods[\${index}][start]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Début\">
                <input type=\"time\" name=\"guard_periods[\${index}][end]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Fin\">
                <button type=\"button\" class=\"btn btn-danger remove-guard-period\">
                    <i class=\"bi bi-trash\"></i>
                </button>
            `;
            return row;
        }

        // Ajouter une période
        addBtn.addEventListener('click', function() {
            const row = createRow(periodIndex);
            container.appendChild(row);
            
            // Gérer la suppression de la nouvelle ligne
            const removeBtn = row.querySelector('.remove-guard-period');
            removeBtn.addEventListener('click', function() {
                const rows = container.querySelectorAll('.guard-period-row');
                if (rows.length > 1) {
                    row.remove();
                } else {
                    resetRow(row);
                }
            });
            
            periodIndex++;
        });

        // Supprimer une période (délégation d'événements)
        container.addEventListener('click', function(e) {
            const removeBtn = e.target.closest('.remove-guard-period');
            if (removeBtn) {
                const row = removeBtn.closest('.guard-period-row');
                const rows = container.querySelectorAll('.guard-period-row');
                if (rows.length > 1) {
                    row.remove();
                } else {
                    resetRow(row);
                }
            }
        });
    }

    // ============================================
    // 2. WELCOME MACHINE ANIMATION
    // ============================================
    const welcomeElement = document.getElementById('welcomeMessage');
    if (welcomeElement) {
        const fullName = \"";
        // line 1302
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1302), "fullName", [], "any", true, true, false, 1302) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1302, $this->source); })()), "user", [], "any", false, false, false, 1302), "fullName", [], "any", false, false, false, 1302)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1302, $this->source); })()), "user", [], "any", false, false, false, 1302), "fullName", [], "any", false, false, false, 1302), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1302), "companyName", [], "any", true, true, false, 1302) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1302, $this->source); })()), "user", [], "any", false, false, false, 1302), "companyName", [], "any", false, false, false, 1302)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1302, $this->source); })()), "user", [], "any", false, false, false, 1302), "companyName", [], "any", false, false, false, 1302), "html", null, true)) : ("Utilisateur"))));
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
                setTimeout(() => {
                    welcomeElement.innerHTML = welcomeText;
                }, 2000);
            }
        }

        setTimeout(typeWelcomeText, 500);
    }

    // ============================================
    // 3. COUNTER ANIMATIONS
    // ============================================
    const counters = document.querySelectorAll('.stat-number');
    if (counters.length > 0) {
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const target = parseInt(element.textContent.replace(/\\s/g, '')) || 0;
                    if (target > 0) {
                        animateCounter(element, target);
                    }
                    counterObserver.unobserve(element);
                }
            });
        }, observerOptions);

        counters.forEach(counter => {
            const value = parseInt(counter.textContent.replace(/\\s/g, ''));
            if (value > 0) {
                counterObserver.observe(counter);
            }
        });

        function animateCounter(element, target) {
            let current = 0;
            const increment = Math.ceil(target / 60);
            const duration = 1500;
            const interval = Math.min(50, duration / 60);
            
            const timer = setInterval(() => {
                current = Math.min(current + increment, target);
                element.textContent = current.toLocaleString('fr-FR');
                
                if (current >= target) {
                    element.textContent = target.toLocaleString('fr-FR');
                    clearInterval(timer);
                }
            }, interval);
        }
    }

    // ============================================
    // 4. QUICK ACTIONS HANDLERS
    // ============================================
    document.querySelectorAll('.quick-action-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Si c'est un lien, ne pas interférer
            if (this.tagName === 'A') return;
            
            const action = this.querySelector('span')?.textContent || 'Action';
            console.log(`Action rapide: \${action}`);
            
            // Feedback visuel
            const originalBg = this.style.backgroundColor;
            const originalColor = this.style.color;
            this.style.backgroundColor = 'rgba(52, 152, 219, 0.1)';
            this.style.color = '#3498db';
            
            setTimeout(() => {
                this.style.backgroundColor = originalBg;
                this.style.color = originalColor;
            }, 300);
        });
    });

    // ============================================
    // 5. DATE/TIME UPDATE
    // ============================================
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
        
        const timeElements = document.querySelectorAll('.current-time');
        timeElements.forEach(el => {
            el.textContent = `\${dateStr} - \${timeStr}`;
        });
    }

    updateDateTime();
    setInterval(updateDateTime, 60000);

    // ============================================
    // 6. CARD HOVER EFFECTS
    // ============================================
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
        return array (  1919 => 1302,  1836 => 1222,  1823 => 1221,  1793 => 1200,  1790 => 1199,  1768 => 1193,  1762 => 1192,  1755 => 1190,  1749 => 1189,  1743 => 1188,  1737 => 1187,  1731 => 1186,  1725 => 1185,  1719 => 1184,  1714 => 1182,  1711 => 1181,  1693 => 1180,  1669 => 1158,  1667 => 1157,  1664 => 1156,  1661 => 1155,  1650 => 1146,  1645 => 1144,  1625 => 1126,  1621 => 1124,  1617 => 1122,  1615 => 1121,  1607 => 1120,  1599 => 1119,  1595 => 1118,  1591 => 1117,  1587 => 1116,  1582 => 1113,  1569 => 1102,  1556 => 1091,  1554 => 1090,  1548 => 1086,  1544 => 1084,  1540 => 1082,  1538 => 1081,  1528 => 1078,  1521 => 1073,  1510 => 1063,  1497 => 1053,  1490 => 1049,  1483 => 1044,  1479 => 1042,  1473 => 1040,  1471 => 1039,  1463 => 1033,  1459 => 1031,  1453 => 1029,  1451 => 1028,  1443 => 1022,  1436 => 1017,  1429 => 1012,  1427 => 1011,  1419 => 1005,  1412 => 1000,  1409 => 999,  1403 => 996,  1399 => 994,  1391 => 991,  1387 => 989,  1385 => 988,  1382 => 987,  1379 => 986,  1376 => 985,  1373 => 984,  1371 => 983,  1363 => 977,  1359 => 975,  1353 => 972,  1346 => 968,  1342 => 966,  1340 => 965,  1335 => 962,  1328 => 957,  1318 => 950,  1308 => 943,  1298 => 936,  1288 => 929,  1278 => 922,  1268 => 915,  1261 => 910,  1259 => 909,  1248 => 900,  1246 => 899,  1237 => 892,  1228 => 886,  1225 => 885,  1223 => 884,  1220 => 883,  1211 => 877,  1208 => 876,  1206 => 875,  1203 => 874,  1194 => 868,  1191 => 867,  1189 => 866,  1186 => 865,  1177 => 859,  1174 => 858,  1172 => 857,  1155 => 842,  1152 => 841,  1141 => 836,  1135 => 834,  1130 => 833,  1127 => 832,  1120 => 827,  1114 => 824,  1108 => 821,  1104 => 820,  1099 => 819,  1096 => 818,  1090 => 813,  1085 => 812,  1077 => 806,  1075 => 805,  1066 => 799,  1042 => 778,  1031 => 770,  1022 => 763,  1010 => 754,  999 => 746,  991 => 740,  989 => 739,  986 => 738,  974 => 729,  963 => 721,  955 => 715,  953 => 714,  950 => 713,  941 => 707,  931 => 700,  927 => 699,  919 => 693,  917 => 692,  894 => 672,  875 => 656,  864 => 648,  845 => 632,  834 => 624,  815 => 608,  804 => 600,  789 => 588,  779 => 580,  773 => 577,  769 => 575,  766 => 574,  763 => 573,  760 => 572,  757 => 571,  754 => 570,  751 => 569,  748 => 568,  745 => 567,  742 => 566,  739 => 565,  736 => 564,  730 => 561,  726 => 559,  723 => 558,  720 => 557,  717 => 556,  714 => 555,  711 => 554,  708 => 553,  705 => 552,  702 => 551,  699 => 550,  696 => 549,  693 => 548,  687 => 545,  683 => 543,  681 => 542,  676 => 540,  670 => 536,  666 => 534,  660 => 532,  658 => 531,  653 => 530,  651 => 529,  634 => 515,  618 => 501,  605 => 500,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Tableau de bord - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* ✅ NE PAS REDÉFINIR :root ICI - Utiliser les variables de base.html.twig */
    
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
    
    .movement-type.purchase_in {
        background-color: rgba(46, 204, 113, 0.1);
        color: var(--success-color);
    }
    
    .movement-type.sale_out {
        background-color: rgba(231, 76, 60, 0.1);
        color: var(--danger-color);
    }
    
    .movement-type.adjustment_in {
        background-color: rgba(52, 152, 219, 0.1);
        color: var(--info-color);
    }
    
    .movement-type.adjustment_out {
        background-color: rgba(243, 156, 18, 0.1);
        color: var(--warning-color);
    }
    
    .movement-type.return_in {
        background-color: rgba(102, 126, 234, 0.1);
        color: #667eea;
    }
    
    .movement-type.return_out {
        background-color: rgba(149, 165, 166, 0.1);
        color: var(--secondary-color);
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

    /* Welcome Card */
    .welcome-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 16px;
        padding: 1.5rem;
        color: white;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    }

    .welcome-card-content {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        flex-wrap: wrap;
    }

    .welcome-avatar {
        flex-shrink: 0;
    }

    .avatar-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border: 3px solid white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .avatar-placeholder {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(5px);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: bold;
        color: white;
        border: 2px solid white;
    }

    /* Welcome Card Moderne - Bleu */
    .welcome-card-modern {
        background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
        border-radius: 16px;
        padding: 2rem;
        color: white;
        box-shadow: 0 10px 25px rgba(52, 152, 219, 0.3);
        text-align: center;
    }

    .welcome-content {
        max-width: 800px;
        margin: 0 auto;
    }

    .welcome-greeting {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 1rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .welcome-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        margin-top: 1rem;
    }

    .detail-item {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(5px);
        padding: 0.5rem 1.2rem;
        border-radius: 30px;
        font-size: 1rem;
        display: inline-flex;
        align-items: center;
        border: 1px solid rgba(255,255,255,0.2);
    }

    .detail-item i {
        font-size: 1.1rem;
        margin-right: 0.5rem;
    }

    @media (max-width: 768px) {
        .welcome-greeting {
            font-size: 1.6rem;
        }
        .welcome-details {
            flex-direction: column;
            align-items: center;
        }
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

                <!-- Welcome Card - Style bleu -->
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"welcome-card-modern fade-in\">
                            <div class=\"welcome-content\">
                                <h2 class=\"welcome-greeting\">
                                    {% if app.user.fullName is defined %}
                                        Bonjour, {{ app.user.fullName }} 👋
                                    {% elseif app.user.companyName is defined %}
                                        Bonjour, {{ app.user.companyName }} 👋
                                    {% else %}
                                        Bonjour ! 👋
                                    {% endif %}
                                </h2>
                                <div class=\"welcome-details\">
                                    <div class=\"detail-item\">
                                        <i class=\"bi bi-envelope me-2\"></i>
                                        <span>{{ app.user.email }}</span>
                                    </div>
                                    {% if app.user.employmentDate is defined and app.user.employmentDate %}
                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-calendar-check me-2\"></i>
                                            <span>Embauché le {{ app.user.employmentDate|date('d/m/Y') }}</span>
                                        </div>
                                    {% endif %}
                                    {% if app.user.loginAt is defined and app.user.loginAt %}
                                        {% set loginDiff = date().diff(app.user.loginAt) %}
                                        {% if loginDiff.d > 0 %}
                                            {% set lastLoginText = 'Il y a ' ~ loginDiff.d ~ ' jour' ~ (loginDiff.d > 1 ? 's') %}
                                        {% elseif loginDiff.h > 0 %}
                                            {% set lastLoginText = 'Il y a ' ~ loginDiff.h ~ ' heure' ~ (loginDiff.h > 1 ? 's') %}
                                        {% elseif loginDiff.i > 0 %}
                                            {% set lastLoginText = 'Il y a ' ~ loginDiff.i ~ ' minute' ~ (loginDiff.i > 1 ? 's') %}
                                        {% else %}
                                            {% set lastLoginText = 'À l\\'instant' %}
                                        {% endif %}
                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-box-arrow-in-right me-2\"></i>
                                            <span>Dernière connexion : {{ lastLoginText }}</span>
                                        </div>
                                    {% endif %}
                                    {% if app.user.lastActivity is defined and app.user.lastActivity %}
                                        {% set activityDiff = date().diff(app.user.lastActivity) %}
                                        {% if activityDiff.d > 0 %}
                                            {% set lastActivityText = 'Il y a ' ~ activityDiff.d ~ ' jour' ~ (activityDiff.d > 1 ? 's') %}
                                        {% elseif activityDiff.h > 0 %}
                                            {% set lastActivityText = 'Il y a ' ~ activityDiff.h ~ ' heure' ~ (activityDiff.h > 1 ? 's') %}
                                        {% elseif activityDiff.i > 0 %}
                                            {% set lastActivityText = 'Il y a ' ~ activityDiff.i ~ ' minute' ~ (activityDiff.i > 1 ? 's') %}
                                        {% else %}
                                            {% set lastActivityText = 'À l\\'instant' %}
                                        {% endif %}
                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-activity me-2\"></i>
                                            <span>Dernière activité : {{ lastActivityText }}</span>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subscription Widget -->
                <div class=\"subscription-widget-container fade-in\" style=\"animation-delay: 0.2s\">
                    {{ include('components/_subscription_widget.html.twig') }}
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
                                        <div class=\"stat-number\">{{ stats.total_products|default(0)|number_format(0, ',', ' ') }}</div>
                                        <div class=\"stat-subtitle\">Articles en catalogue</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-box-seam\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"{{ path('app_admin_product_index') }}\" class=\"text-primary text-decoration-none small\">
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
                                        <div class=\"stat-number\">{{ stats.total_orders|default(0)|number_format(0, ',', ' ') }}</div>
                                        <div class=\"stat-subtitle\">Transactions complétées</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-cart-check\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"{{ path('app_orders_index') }}\" class=\"text-success text-decoration-none small\">
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
                                        <div class=\"stat-number\">{{ stats.total_revenue|default(0)|number_format(0, ',', ' ') }}</div>
                                        <div class=\"stat-subtitle\">FCFA générés</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-currency-exchange\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"{{ path('app_financial_report_index') }}\" class=\"text-info text-decoration-none small\">
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
                                        <div class=\"stat-number\">{{ stats.total_customers|default(0)|number_format(0, ',', ' ') }}</div>
                                        <div class=\"stat-subtitle\">Clients uniques</div>
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
                                        <div class=\"stat-number\">{{ stats.today_orders|default(0)|number_format(0, ',', ' ') }}</div>
                                        <div class=\"stat-subtitle\">{{ stats.today_revenue|default(0)|number_format(0, ',', ' ') }} FCFA</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-cash-stack\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <span class=\"badge bg-light text-dark\">En attente: {{ stats.pending_orders|default(0) }}</span>
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
                                        <div class=\"stat-number\">{{ stats.low_stock|default(0)|number_format(0, ',', ' ') }}</div>
                                        <div class=\"stat-subtitle\">Produits à réapprovisionner</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-exclamation-triangle\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"{{ path('app_stock_report_index') }}\" class=\"text-danger text-decoration-none small\">
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
                                        <div class=\"stat-number\">{{ stats.total_users|default(0)|number_format(0, ',', ' ') }}</div>
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
                                        <div class=\"stat-number\">{{ stats.pending_orders|default(0)|number_format(0, ',', ' ') }}</div>
                                        <div class=\"stat-subtitle\">Commandes à traiter</div>
                                    </div>
                                    <div class=\"stat-icon-wrapper\">
                                        <i class=\"bi bi-clock-history\"></i>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"{{ path('app_orders_index') }}\" class=\"text-primary text-decoration-none small\">
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
                                    <a href=\"{{ path('app_admin_stock_movement_index') }}\" class=\"text-primary text-decoration-none small\">
                                        Voir tout <i class=\"bi bi-arrow-right ms-1\"></i>
                                    </a>
                                </div>
                                
                                <div id=\"stockMovements\">
                                    {% if recentMovements is empty %}
                                        <div class=\"empty-state\">
                                            <i class=\"bi bi-arrow-left-right\"></i>
                                            <p class=\"mb-0\">Aucun mouvement de stock récent</p>
                                            <small class=\"text-muted\">Les mouvements apparaîtront ici</small>
                                        </div>
                                    {% else %}
                                        {% for movement in recentMovements %}
                                            <div class=\"movement-item\">
                                                <div class=\"d-flex justify-content-between align-items-start\">
                                                    <div class=\"flex-grow-1\">
                                                        <div class=\"d-flex align-items-center mb-1\">
                                                            {# ✅ CORRIGÉ: Utilisation de movement_type au lieu de type #}
                                                            {% set isInMovement = movement.movementType in ['purchase_in', 'adjustment_in', 'return_in', 'transfer_in'] %}
                                                            <span class=\"movement-type {{ movement.movementType }} me-2\">
                                                                <i class=\"bi bi-{{ isInMovement ? 'arrow-down-left' : 'arrow-up-right' }} me-1\"></i>
                                                                {{ movement.movementTypeLabel }}
                                                            </span>
                                                        </div>
                                                        <div class=\"product-name\">{{ movement.product.name }}</div>
                                                        <div class=\"movement-date\">
                                                            <i class=\"bi bi-calendar me-1\"></i>
                                                            {{ movement.createdAt|date('d/m/Y H:i') }}
                                                        </div>
                                                    </div>
                                                    <div class=\"text-end\">
                                                        {# ✅ CORRIGÉ: Utilisation de movement_type pour déterminer le signe #}
                                                        {% set isPositive = movement.movementType in ['purchase_in', 'adjustment_in', 'return_in', 'transfer_in'] %}
                                                        <div class=\"movement-quantity {{ isPositive ? 'text-success' : 'text-danger' }}\">
                                                            {{ isPositive ? '+' : '-' }}{{ movement.quantity|number_format(0, ',', ' ') }}
                                                        </div>
                                                        <small class=\"text-muted\">{{ movement.product.unit ?? 'unités' }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% endif %}
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
                                        <a href=\"{{ isRestaurant ? path('restaurant_sale_index') : path('retail_sale_index') }}\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-cart-plus text-primary\"></i>
                                            <span class=\"fw-medium\">Nouvelle Vente</span>
                                        </a>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_MANAGER') or is_granted('ROLE_ADMIN') %}
                                    <div class=\"col-12\">
                                        <a href=\"{{ path('app_admin_product_new') }}\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-plus-circle text-success\"></i>
                                            <span class=\"fw-medium\">Ajouter Produit</span>
                                        </a>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_STOCK_MANAGER') %}
                                    <div class=\"col-12\">
                                        <a href=\"{{ path('app_stock_adjustment_index') }}\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-boxes text-warning\"></i>
                                            <span class=\"fw-medium\">Gérer Stock</span>
                                        </a>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_ADMIN') %}
                                    <div class=\"col-12\">
                                        <a href=\"{{ path('app_user_new') }}\" class=\"quick-action-btn w-100 text-decoration-none\">
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
                                    
                                    {# ✅ AJOUT : Longitude et Latitude #}
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">📍 Coordonnées GPS</div>
                                        <p class=\"info-value\">
                                            {% if hmaService.longitude is not null and hmaService.latitude is not null %}
                                                <span class=\"d-block\">
                                                    <i class=\"bi bi-geo-alt me-1\"></i>
                                                    Lat: {{ hmaService.latitude|number_format(6, ',', ' ') }}
                                                </span>
                                                <span class=\"d-block\">
                                                    <i class=\"bi bi-geo-alt me-1\"></i>
                                                    Lng: {{ hmaService.longitude|number_format(6, ',', ' ') }}
                                                </span>
                                            {% else %}
                                                <span class=\"text-muted\">Non spécifiées</span>
                                            {% endif %}
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
{# ... tout le contenu existant ... #}

<!-- ✅ MODAL DE CONFIRMATION POUR LA VISIBILITÉ -->
<div class=\"modal fade\" id=\"visibilityConfirmModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header {% if company and company.companyPublic %}bg-warning{% else %}bg-success{% endif %} text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-shop me-2\"></i>
                    {% if company and company.companyPublic %}
                        Masquer votre boutique
                    {% else %}
                        Rendre votre boutique visible
                    {% endif %}
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                {% if company and company.companyPublic %}
                    <i class=\"bi bi-eye-slash text-warning\" style=\"font-size: 4rem;\"></i>
                    <h4 class=\"mt-3\">Masquer votre boutique ?</h4>
                    <p class=\"text-muted\">
                        Votre boutique ne sera plus visible sur le marketplace.
                        Les clients ne pourront plus voir vos produits.
                    </p>
                    <div class=\"alert alert-warning\">
                        <i class=\"bi bi-info-circle me-2\"></i>
                        Vous pourrez toujours réactiver la visibilité à tout moment.
                    </div>
                {% else %}
                    <i class=\"bi bi-eye text-success\" style=\"font-size: 4rem;\"></i>
                    <h4 class=\"mt-3\">Rendre votre boutique visible ?</h4>
                    <p class=\"text-muted\">
                        Votre boutique sera visible sur le marketplace.
                        Les clients pourront voir vos produits et passer des commandes.
                    </p>
                    <div class=\"alert alert-success\">
                        <i class=\"bi bi-info-circle me-2\"></i>
                        Vous pourrez toujours masquer votre boutique à tout moment.
                    </div>
                {% endif %}
            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form method=\"post\" action=\"{{ path('app_dashboard_toggle_visibility') }}\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_visibility') }}\">
                    <input type=\"hidden\" name=\"action\" value=\"{{ company and company.companyPublic ? 'hide' : 'show' }}\">
                    <button type=\"submit\" class=\"btn {% if company and company.companyPublic %}btn-warning{% else %}btn-success{% endif %}\">
                        <i class=\"bi {% if company and company.companyPublic %}bi-eye-slash{% else %}bi-eye{% endif %} me-2\"></i>
                        {% if company and company.companyPublic %}
                            Masquer ma boutique
                        {% else %}
                            Rendre visible
                        {% endif %}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ✅ MODAL PÉRIODES DE GARDE -->
<div class=\"modal fade\" id=\"guardPeriodsModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--primary-color); color: white;\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-clock-history me-2\"></i>
                    Modifier les périodes de garde
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" action=\"{{ path('app_dashboard_guard_periods') }}\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('guard_periods') }}\">
                    
                    <p class=\"text-muted mb-3\">
                        <i class=\"bi bi-info-circle me-1\"></i>
                        Définissez les jours et horaires de garde pour votre pharmacie.
                    </p>
                    
                    <div id=\"guardPeriodsContainer\">
                        {# ✅ Récupération correcte des périodes depuis l'objet company #}
                        {% set guardPeriods = company ? company.guardPeriods|default([]) : [] %}
                        
                        {% if guardPeriods is empty %}
                            <div class=\"text-center text-muted py-3\">
                                <i class=\"bi bi-clock fs-3 d-block mb-2\"></i>
                                Aucune période de garde configurée
                            </div>
                            <div class=\"guard-period-row d-flex gap-2 align-items-center mb-2\">
                                <select name=\"guard_periods[0][day]\" class=\"form-select\" style=\"flex: 1;\">
                                    <option value=\"\">Choisir un jour</option>
                                    <option value=\"monday\">Lundi</option>
                                    <option value=\"tuesday\">Mardi</option>
                                    <option value=\"wednesday\">Mercredi</option>
                                    <option value=\"thursday\">Jeudi</option>
                                    <option value=\"friday\">Vendredi</option>
                                    <option value=\"saturday\">Samedi</option>
                                    <option value=\"sunday\">Dimanche</option>
                                </select>
                                <input type=\"time\" name=\"guard_periods[0][start]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Début\">
                                <input type=\"time\" name=\"guard_periods[0][end]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Fin\">
                                <button type=\"button\" class=\"btn btn-danger remove-guard-period\" disabled>
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                            </div>
                        {% else %}
                            {% for period in guardPeriods %}
                                <div class=\"guard-period-row d-flex gap-2 align-items-center mb-2\">
                                    <select name=\"guard_periods[{{ loop.index0 }}][day]\" class=\"form-select\" style=\"flex: 1;\">
                                        <option value=\"\">Choisir un jour</option>
                                        <option value=\"monday\" {% if period.day == 'monday' %}selected{% endif %}>Lundi</option>
                                        <option value=\"tuesday\" {% if period.day == 'tuesday' %}selected{% endif %}>Mardi</option>
                                        <option value=\"wednesday\" {% if period.day == 'wednesday' %}selected{% endif %}>Mercredi</option>
                                        <option value=\"thursday\" {% if period.day == 'thursday' %}selected{% endif %}>Jeudi</option>
                                        <option value=\"friday\" {% if period.day == 'friday' %}selected{% endif %}>Vendredi</option>
                                        <option value=\"saturday\" {% if period.day == 'saturday' %}selected{% endif %}>Samedi</option>
                                        <option value=\"sunday\" {% if period.day == 'sunday' %}selected{% endif %}>Dimanche</option>
                                    </select>
                                    <input type=\"time\" name=\"guard_periods[{{ loop.index0 }}][start]\" class=\"form-control\" style=\"width: 120px;\" value=\"{{ period.start ?? '' }}\">
                                    <input type=\"time\" name=\"guard_periods[{{ loop.index0 }}][end]\" class=\"form-control\" style=\"width: 120px;\" value=\"{{ period.end ?? '' }}\">
                                    <button type=\"button\" class=\"btn btn-danger remove-guard-period\">
                                        <i class=\"bi bi-trash\"></i>
                                    </button>
                                </div>
                            {% endfor %}
                        {% endif %}
                    </div>
                    
                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2\" id=\"addGuardPeriod\">
                        <i class=\"bi bi-plus-circle me-1\"></i>
                        Ajouter une période
                    </button>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn\" style=\"background: var(--primary-color); color: white;\">
                        <i class=\"bi bi-save me-2\"></i>
                        Enregistrer les périodes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ============================================
    // 1. GESTION DES PÉRIODES DE GARDE
    // ============================================
    const container = document.getElementById('guardPeriodsContainer');
    const addBtn = document.getElementById('addGuardPeriod');
    
    if (container && addBtn) {
        let periodIndex = container.querySelectorAll('.guard-period-row').length || 0;

        // Fonction pour réinitialiser les champs d'une ligne
        function resetRow(row) {
            row.querySelectorAll('select, input').forEach(el => el.value = '');
        }

        // Fonction pour créer une nouvelle ligne
        function createRow(index) {
            const row = document.createElement('div');
            row.className = 'guard-period-row d-flex gap-2 align-items-center mb-2';
            row.innerHTML = `
                <select name=\"guard_periods[\${index}][day]\" class=\"form-select\" style=\"flex: 1;\">
                    <option value=\"\">Choisir un jour</option>
                    <option value=\"monday\">Lundi</option>
                    <option value=\"tuesday\">Mardi</option>
                    <option value=\"wednesday\">Mercredi</option>
                    <option value=\"thursday\">Jeudi</option>
                    <option value=\"friday\">Vendredi</option>
                    <option value=\"saturday\">Samedi</option>
                    <option value=\"sunday\">Dimanche</option>
                </select>
                <input type=\"time\" name=\"guard_periods[\${index}][start]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Début\">
                <input type=\"time\" name=\"guard_periods[\${index}][end]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Fin\">
                <button type=\"button\" class=\"btn btn-danger remove-guard-period\">
                    <i class=\"bi bi-trash\"></i>
                </button>
            `;
            return row;
        }

        // Ajouter une période
        addBtn.addEventListener('click', function() {
            const row = createRow(periodIndex);
            container.appendChild(row);
            
            // Gérer la suppression de la nouvelle ligne
            const removeBtn = row.querySelector('.remove-guard-period');
            removeBtn.addEventListener('click', function() {
                const rows = container.querySelectorAll('.guard-period-row');
                if (rows.length > 1) {
                    row.remove();
                } else {
                    resetRow(row);
                }
            });
            
            periodIndex++;
        });

        // Supprimer une période (délégation d'événements)
        container.addEventListener('click', function(e) {
            const removeBtn = e.target.closest('.remove-guard-period');
            if (removeBtn) {
                const row = removeBtn.closest('.guard-period-row');
                const rows = container.querySelectorAll('.guard-period-row');
                if (rows.length > 1) {
                    row.remove();
                } else {
                    resetRow(row);
                }
            }
        });
    }

    // ============================================
    // 2. WELCOME MACHINE ANIMATION
    // ============================================
    const welcomeElement = document.getElementById('welcomeMessage');
    if (welcomeElement) {
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
                setTimeout(() => {
                    welcomeElement.innerHTML = welcomeText;
                }, 2000);
            }
        }

        setTimeout(typeWelcomeText, 500);
    }

    // ============================================
    // 3. COUNTER ANIMATIONS
    // ============================================
    const counters = document.querySelectorAll('.stat-number');
    if (counters.length > 0) {
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const target = parseInt(element.textContent.replace(/\\s/g, '')) || 0;
                    if (target > 0) {
                        animateCounter(element, target);
                    }
                    counterObserver.unobserve(element);
                }
            });
        }, observerOptions);

        counters.forEach(counter => {
            const value = parseInt(counter.textContent.replace(/\\s/g, ''));
            if (value > 0) {
                counterObserver.observe(counter);
            }
        });

        function animateCounter(element, target) {
            let current = 0;
            const increment = Math.ceil(target / 60);
            const duration = 1500;
            const interval = Math.min(50, duration / 60);
            
            const timer = setInterval(() => {
                current = Math.min(current + increment, target);
                element.textContent = current.toLocaleString('fr-FR');
                
                if (current >= target) {
                    element.textContent = target.toLocaleString('fr-FR');
                    clearInterval(timer);
                }
            }, interval);
        }
    }

    // ============================================
    // 4. QUICK ACTIONS HANDLERS
    // ============================================
    document.querySelectorAll('.quick-action-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Si c'est un lien, ne pas interférer
            if (this.tagName === 'A') return;
            
            const action = this.querySelector('span')?.textContent || 'Action';
            console.log(`Action rapide: \${action}`);
            
            // Feedback visuel
            const originalBg = this.style.backgroundColor;
            const originalColor = this.style.color;
            this.style.backgroundColor = 'rgba(52, 152, 219, 0.1)';
            this.style.color = '#3498db';
            
            setTimeout(() => {
                this.style.backgroundColor = originalBg;
                this.style.color = originalColor;
            }, 300);
        });
    });

    // ============================================
    // 5. DATE/TIME UPDATE
    // ============================================
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
        
        const timeElements = document.querySelectorAll('.current-time');
        timeElements.forEach(el => {
            el.textContent = `\${dateStr} - \${timeStr}`;
        });
    }

    updateDateTime();
    setInterval(updateDateTime, 60000);

    // ============================================
    // 6. CARD HOVER EFFECTS
    // ============================================
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
