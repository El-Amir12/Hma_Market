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
class __TwigTemplate_ba697fc8c5e8359a2b323e1583327ead extends Template
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
        yield "Tableau de bord - HMA Market";
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
        yield from [];
    }

    // line 497
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 498
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
        // line 512
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
        // line 526
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 526), "fullName", [], "any", true, true, false, 526)) {
            // line 527
            yield "                                        Bonjour, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 527), "fullName", [], "any", false, false, false, 527), "html", null, true);
            yield " 👋
                                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 528
($context["app"] ?? null), "user", [], "any", false, true, false, 528), "companyName", [], "any", true, true, false, 528)) {
            // line 529
            yield "                                        Bonjour, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 529), "companyName", [], "any", false, false, false, 529), "html", null, true);
            yield " 👋
                                    ";
        } else {
            // line 531
            yield "                                        Bonjour ! 👋
                                    ";
        }
        // line 533
        yield "                                </h2>
                                <div class=\"welcome-details\">
                                    <div class=\"detail-item\">
                                        <i class=\"bi bi-envelope me-2\"></i>
                                        <span>";
        // line 537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 537), "email", [], "any", false, false, false, 537), "html", null, true);
        yield "</span>
                                    </div>
                                    ";
        // line 539
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 539), "employmentDate", [], "any", true, true, false, 539) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 539), "employmentDate", [], "any", false, false, false, 539))) {
            // line 540
            yield "                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-calendar-check me-2\"></i>
                                            <span>Embauché le ";
            // line 542
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 542), "employmentDate", [], "any", false, false, false, 542), "d/m/Y"), "html", null, true);
            yield "</span>
                                        </div>
                                    ";
        }
        // line 545
        yield "                                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 545), "loginAt", [], "any", true, true, false, 545) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 545), "loginAt", [], "any", false, false, false, 545))) {
            // line 546
            yield "                                        ";
            $context["loginDiff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 546), "loginAt", [], "any", false, false, false, 546)], "method", false, false, false, 546);
            // line 547
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "d", [], "any", false, false, false, 547) > 0)) {
                // line 548
                yield "                                            ";
                $context["lastLoginText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "d", [], "any", false, false, false, 548)) . " jour") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "d", [], "any", false, false, false, 548) > 1)) ? ("s") : ("")));
                // line 549
                yield "                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "h", [], "any", false, false, false, 549) > 0)) {
                // line 550
                yield "                                            ";
                $context["lastLoginText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "h", [], "any", false, false, false, 550)) . " heure") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "h", [], "any", false, false, false, 550) > 1)) ? ("s") : ("")));
                // line 551
                yield "                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "i", [], "any", false, false, false, 551) > 0)) {
                // line 552
                yield "                                            ";
                $context["lastLoginText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "i", [], "any", false, false, false, 552)) . " minute") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "i", [], "any", false, false, false, 552) > 1)) ? ("s") : ("")));
                // line 553
                yield "                                        ";
            } else {
                // line 554
                yield "                                            ";
                $context["lastLoginText"] = "À l'instant";
                // line 555
                yield "                                        ";
            }
            // line 556
            yield "                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-box-arrow-in-right me-2\"></i>
                                            <span>Dernière connexion : ";
            // line 558
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lastLoginText"] ?? null), "html", null, true);
            yield "</span>
                                        </div>
                                    ";
        }
        // line 561
        yield "                                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 561), "lastActivity", [], "any", true, true, false, 561) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 561), "lastActivity", [], "any", false, false, false, 561))) {
            // line 562
            yield "                                        ";
            $context["activityDiff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 562), "lastActivity", [], "any", false, false, false, 562)], "method", false, false, false, 562);
            // line 563
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["activityDiff"] ?? null), "d", [], "any", false, false, false, 563) > 0)) {
                // line 564
                yield "                                            ";
                $context["lastActivityText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, ($context["activityDiff"] ?? null), "d", [], "any", false, false, false, 564)) . " jour") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["activityDiff"] ?? null), "d", [], "any", false, false, false, 564) > 1)) ? ("s") : ("")));
                // line 565
                yield "                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["activityDiff"] ?? null), "h", [], "any", false, false, false, 565) > 0)) {
                // line 566
                yield "                                            ";
                $context["lastActivityText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, ($context["activityDiff"] ?? null), "h", [], "any", false, false, false, 566)) . " heure") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["activityDiff"] ?? null), "h", [], "any", false, false, false, 566) > 1)) ? ("s") : ("")));
                // line 567
                yield "                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["activityDiff"] ?? null), "i", [], "any", false, false, false, 567) > 0)) {
                // line 568
                yield "                                            ";
                $context["lastActivityText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, ($context["activityDiff"] ?? null), "i", [], "any", false, false, false, 568)) . " minute") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["activityDiff"] ?? null), "i", [], "any", false, false, false, 568) > 1)) ? ("s") : ("")));
                // line 569
                yield "                                        ";
            } else {
                // line 570
                yield "                                            ";
                $context["lastActivityText"] = "À l'instant";
                // line 571
                yield "                                        ";
            }
            // line 572
            yield "                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-activity me-2\"></i>
                                            <span>Dernière activité : ";
            // line 574
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lastActivityText"] ?? null), "html", null, true);
            yield "</span>
                                        </div>
                                    ";
        }
        // line 577
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subscription Widget (conserve la ligne suivante inchangée) -->
                <div class=\"subscription-widget-container fade-in\" style=\"animation-delay: 0.2s\">
                    ";
        // line 585
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
        // line 689
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 690
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
        // line 710
        yield "
                    ";
        // line 711
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 712
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
        // line 735
        yield "
                    ";
        // line 736
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 737
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
            // line 751
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
        // line 760
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
        // line 823
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 824
            yield "                                    <div class=\"col-12\">
                                        <button class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-cart-plus text-primary\"></i>
                                            <span class=\"fw-medium\">Nouvelle Vente</span>
                                        </button>
                                    </div>
                                    ";
        }
        // line 831
        yield "                                    
                                    ";
        // line 832
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 833
            yield "                                    <div class=\"col-12\">
                                        <button class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-plus-circle text-success\"></i>
                                            <span class=\"fw-medium\">Ajouter Produit</span>
                                        </button>
                                    </div>
                                    ";
        }
        // line 840
        yield "                                    
                                    ";
        // line 841
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 842
            yield "                                    <div class=\"col-12\">
                                        <button class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-boxes text-warning\"></i>
                                            <span class=\"fw-medium\">Gérer Stock</span>
                                        </button>
                                    </div>
                                    ";
        }
        // line 849
        yield "                                    
                                    ";
        // line 850
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 851
            yield "                                    <div class=\"col-12\">
                                        <a href=\"";
            // line 852
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"quick-action-btn w-100\">
                                            <i class=\"bi bi-person-plus text-info\"></i>
                                            <span class=\"fw-medium\">Nouvel Utilisateur</span>
                                        </a>
                                    </div>
                                    ";
        }
        // line 858
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Company Information (Visible uniquement pour les administrateurs/propriétaires HMA) -->
                ";
        // line 865
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 865), "isHmaOwner", [], "any", true, true, false, 865) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 865), "isHmaOwner", [], "any", false, false, false, 865)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 865), "hmaServiceId", [], "any", false, false, false, 865)))) {
            // line 866
            yield "                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"dashboard-card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-4\">
                                    <i class=\"bi bi-building text-primary me-2\"></i>
                                    Informations de l'Entreprise
                                </h5>
                                
                                ";
            // line 875
            $context["hmaService"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 875), "hmaServiceId", [], "any", false, false, false, 875);
            // line 876
            yield "                                
                                <div class=\"info-grid\">
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Nom de l'entreprise</div>
                                        <p class=\"info-value\">
                                            ";
            // line 881
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", true, true, false, 881) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", false, false, false, 881)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", false, false, false, 881), "html", null, true)) : ("Non spécifié"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Email de contact</div>
                                        <p class=\"info-value\">
                                            ";
            // line 888
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "email", [], "any", true, true, false, 888) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "email", [], "any", false, false, false, 888)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "email", [], "any", false, false, false, 888), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 888), "email", [], "any", false, false, false, 888), "html", null, true)));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Téléphone</div>
                                        <p class=\"info-value\">
                                            ";
            // line 895
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "phone", [], "any", true, true, false, 895) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "phone", [], "any", false, false, false, 895)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "phone", [], "any", false, false, false, 895), "html", null, true)) : ("Non spécifié"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Numéro d'abonnement</div>
                                        <p class=\"info-value\">
                                            ";
            // line 902
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "subscriptionNumber", [], "any", true, true, false, 902) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "subscriptionNumber", [], "any", false, false, false, 902)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "subscriptionNumber", [], "any", false, false, false, 902), "html", null, true)) : ("N/A"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Adresse</div>
                                        <p class=\"info-value\">
                                            ";
            // line 909
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "address", [], "any", true, true, false, 909) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "address", [], "any", false, false, false, 909)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "address", [], "any", false, false, false, 909), "html", null, true)) : ("Non spécifiée"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Ville</div>
                                        <p class=\"info-value\">
                                            ";
            // line 916
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "city", [], "any", true, true, false, 916) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "city", [], "any", false, false, false, 916)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "city", [], "any", false, false, false, 916), "html", null, true)) : ("Non spécifiée"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Pays</div>
                                        <p class=\"info-value\">
                                            ";
            // line 923
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "country", [], "any", true, true, false, 923) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "country", [], "any", false, false, false, 923)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "country", [], "any", false, false, false, 923), "html", null, true)) : ("Non spécifié"));
            yield "
                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Période d'essai</div>
                                        <p class=\"info-value\">
                                            ";
            // line 930
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "trialEndsAt", [], "any", false, false, false, 930)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 931
                yield "                                                ";
                $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                // line 932
                yield "                                                ";
                $context["trialEnds"] = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "trialEndsAt", [], "any", false, false, false, 932);
                // line 933
                yield "                                                ";
                $context["daysRemaining"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["trialEnds"] ?? null), "diff", [($context["now"] ?? null)], "method", false, false, false, 933), "days", [], "any", false, false, false, 933);
                // line 934
                yield "                                                
                                                ";
                // line 935
                if ((($context["daysRemaining"] ?? null) > 0)) {
                    // line 936
                    yield "                                                    <span class=\"badge-status badge-trial\">
                                                        <i class=\"bi bi-clock me-1\"></i>
                                                        Jusqu'au ";
                    // line 938
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["trialEnds"] ?? null), "d/m/Y"), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysRemaining"] ?? null), "html", null, true);
                    yield " jours restants)
                                                    </span>
                                                ";
                } else {
                    // line 941
                    yield "                                                    <span class=\"badge-status badge-expired\">
                                                        <i class=\"bi bi-x-circle me-1\"></i>
                                                        Terminée le ";
                    // line 943
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["trialEnds"] ?? null), "d/m/Y"), "html", null, true);
                    yield "
                                                    </span>
                                                ";
                }
                // line 946
                yield "                                            ";
            } else {
                // line 947
                yield "                                                <span class=\"badge-status badge-active\">
                                                    <i class=\"bi bi-check-circle me-1\"></i>
                                                    Abonnement actif
                                                </span>
                                            ";
            }
            // line 952
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Statut</div>
                                        <p class=\"info-value\">
                                            ";
            // line 958
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "isActive", [], "any", false, false, false, 958)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 959
                yield "                                                <span class=\"badge-status badge-active\">
                                                    <i class=\"bi bi-check-circle me-1\"></i>
                                                    Actif
                                                </span>
                                            ";
            } else {
                // line 964
                yield "                                                <span class=\"badge-status badge-expired\">
                                                    <i class=\"bi bi-x-circle me-1\"></i>
                                                    Inactif
                                                </span>
                                            ";
            }
            // line 969
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Date de création</div>
                                        <p class=\"info-value\">
                                            ";
            // line 975
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "createdAt", [], "any", false, false, false, 975)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 976
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "createdAt", [], "any", false, false, false, 976), "d/m/Y à H:i"), "html", null, true);
                yield "
                                            ";
            } else {
                // line 978
                yield "                                                Non disponible
                                            ";
            }
            // line 980
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Dernière mise à jour</div>
                                        <p class=\"info-value\">
                                            ";
            // line 986
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "updatedAt", [], "any", false, false, false, 986)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 987
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "updatedAt", [], "any", false, false, false, 987), "d/m/Y à H:i"), "html", null, true);
                yield "
                                            ";
            } else {
                // line 989
                yield "                                                Non disponible
                                            ";
            }
            // line 991
            yield "                                        </p>
                                    </div>
                                </div>
                                
                                <div class=\"mt-4 pt-3 border-top\">
                                    <a href=\"";
            // line 996
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_edit");
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                                        <i class=\"bi bi-pencil me-1\"></i>
                                        Modifier les informations
                                    </a>
                                    <a href=\"";
            // line 1000
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
        // line 1010
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
        yield from [];
    }

    // line 1021
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1022
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Welcome Machine Animation
        const welcomeElement = document.getElementById('welcomeMessage');
        const fullName = \"";
        // line 1027
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1027), "fullName", [], "any", true, true, false, 1027) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1027), "fullName", [], "any", false, false, false, 1027)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1027), "fullName", [], "any", false, false, false, 1027), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1027), "companyName", [], "any", true, true, false, 1027) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1027), "companyName", [], "any", false, false, false, 1027)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1027), "companyName", [], "any", false, false, false, 1027), "html", null, true)) : ("Utilisateur"))));
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
        return array (  1328 => 1027,  1320 => 1022,  1313 => 1021,  1299 => 1010,  1286 => 1000,  1279 => 996,  1272 => 991,  1268 => 989,  1262 => 987,  1260 => 986,  1252 => 980,  1248 => 978,  1242 => 976,  1240 => 975,  1232 => 969,  1225 => 964,  1218 => 959,  1216 => 958,  1208 => 952,  1201 => 947,  1198 => 946,  1192 => 943,  1188 => 941,  1180 => 938,  1176 => 936,  1174 => 935,  1171 => 934,  1168 => 933,  1165 => 932,  1162 => 931,  1160 => 930,  1150 => 923,  1140 => 916,  1130 => 909,  1120 => 902,  1110 => 895,  1100 => 888,  1090 => 881,  1083 => 876,  1081 => 875,  1070 => 866,  1068 => 865,  1059 => 858,  1050 => 852,  1047 => 851,  1045 => 850,  1042 => 849,  1033 => 842,  1031 => 841,  1028 => 840,  1019 => 833,  1017 => 832,  1014 => 831,  1005 => 824,  1003 => 823,  938 => 760,  926 => 751,  910 => 737,  908 => 736,  905 => 735,  880 => 712,  878 => 711,  875 => 710,  853 => 690,  851 => 689,  744 => 585,  734 => 577,  728 => 574,  724 => 572,  721 => 571,  718 => 570,  715 => 569,  712 => 568,  709 => 567,  706 => 566,  703 => 565,  700 => 564,  697 => 563,  694 => 562,  691 => 561,  685 => 558,  681 => 556,  678 => 555,  675 => 554,  672 => 553,  669 => 552,  666 => 551,  663 => 550,  660 => 549,  657 => 548,  654 => 547,  651 => 546,  648 => 545,  642 => 542,  638 => 540,  636 => 539,  631 => 537,  625 => 533,  621 => 531,  615 => 529,  613 => 528,  608 => 527,  606 => 526,  589 => 512,  573 => 498,  566 => 497,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\dashboard\\index.html.twig");
    }
}
