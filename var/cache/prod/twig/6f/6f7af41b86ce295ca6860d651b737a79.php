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
class __TwigTemplate_0702dc0f3937821ec97a1271a1273d6f extends Template
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
    /* ============================================
       LAYOUT DE BASE
       ============================================ */
    .row {
        margin-bottom: 1rem;
    }
    
    .mb-4 {
        margin-bottom: 1rem !important;
    }

    /* ============================================
       WELCOME CARD MODERNE
       ============================================ */
    .welcome-card-modern {
        background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
        border-radius: 16px;
        padding: 2rem;
        color: white;
        box-shadow: 0 10px 25px rgba(52, 152, 219, 0.3);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .welcome-card-modern::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 300px;
        height: 300px;
        background: rgba(255,255,255,0.08);
        border-radius: 50%;
    }

    .welcome-content {
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
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
        max-width: 100%;
        word-break: break-word;
    }

    .detail-item i {
        font-size: 1.1rem;
        margin-right: 0.5rem;
        flex-shrink: 0;
    }

    /* ============================================
       DASHBOARD CARDS
       ============================================ */
    .dashboard-card {
        border: none;
        border-radius: var(--border-radius-lg, 16px);
        box-shadow: var(--card-shadow, 0 4px 20px rgba(0,0,0,0.06));
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
        background: white;
        display: flex;
        flex-direction: column;
    }
    
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
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
    .dashboard-card.success-card::before { background: var(--success-color, #10b981); }
    .dashboard-card.info-card::before { background: var(--info-color, #3b82f6); }
    .dashboard-card.warning-card::before { background: var(--warning-color, #f59e0b); }
    .dashboard-card.danger-card::before { background: var(--danger-color, #ef4444); }
    .dashboard-card.secondary-card::before { background: var(--secondary-color, #8b5cf6); }
    .dashboard-card.dark-card::before { background: var(--dark-color, #1f2937); }
    
    .dashboard-card .card-body {
        padding: 1.5rem;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .dashboard-card .card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 1rem;
        padding: 0;
        background: transparent;
        border: none;
    }
    
    .dashboard-card .card-title {
        color: var(--dark-color, #1f2937);
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin: 0;
        opacity: 0.8;
        font-weight: 600;
    }
    
    .dashboard-card .stat-number {
        font-size: 2.2rem;
        font-weight: 700;
        color: var(--dark-color, #1f2937);
        margin-bottom: 0.5rem;
        line-height: 1;
        word-break: break-word;
    }
    
    .dashboard-card .stat-subtitle {
        color: var(--secondary-color, #8b5cf6);
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }
    
    .dashboard-card .card-footer {
        margin-top: auto;
        padding-top: 1rem;
        border-top: 1px solid #ecf0f1;
        background: transparent;
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

    /* ============================================
       STATS GRID ADAPTATIF
       Remplit automatiquement les lignes selon le nombre de cartes
       ============================================ */
    .stats-grid {
        display: grid;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    /* 4 cartes → 4 colonnes sur desktop */
    .stats-grid.cols-4 {
        grid-template-columns: repeat(4, 1fr);
    }

    /* 3 cartes → 3 colonnes sur desktop */
    .stats-grid.cols-3 {
        grid-template-columns: repeat(3, 1fr);
    }

    /* 2 cartes → 2 colonnes sur desktop */
    .stats-grid.cols-2 {
        grid-template-columns: repeat(2, 1fr);
    }

    /* 5 cartes → 3 + 2 (avec la dernière qui prend 2 colonnes) */
    .stats-grid.cols-5 {
        grid-template-columns: repeat(6, 1fr);
    }
    .stats-grid.cols-5 > * {
        grid-column: span 2;
    }
    .stats-grid.cols-5 > *:nth-child(4),
    .stats-grid.cols-5 > *:nth-child(5) {
        grid-column: span 3;
    }

    /* 6 cartes → 3 + 3 */
    .stats-grid.cols-6 {
        grid-template-columns: repeat(3, 1fr);
    }

    /* 1 carte → pleine largeur */
    .stats-grid.cols-1 {
        grid-template-columns: 1fr;
    }

    /* ============================================
       STOCK MOVEMENTS
       ============================================ */
    .stock-movements-card {
        height: 100%;
    }
    
    .movement-item {
        padding: 1rem;
        border-bottom: 1px solid #ecf0f1;
        transition: background 0.3s ease;
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
        word-break: break-word;
    }
    
    .movement-date {
        font-size: 0.85rem;
        color: var(--secondary-color);
    }
    
    .movement-quantity {
        font-weight: 700;
        font-size: 1.1rem;
    }
    
    /* ============================================
       COMPANY INFO
       ============================================ */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }
    
    .info-item {
        background: #f8f9fa;
        padding: 1.25rem;
        border-radius: 8px;
        border-left: 4px solid var(--primary-color);
        transition: all 0.3s ease;
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
        word-break: break-word;
    }
    
    /* ============================================
       QUICK ACTIONS
       ============================================ */
    .quick-action-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1.5rem 0.5rem;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background: white;
        color: var(--dark-color);
        transition: all 0.3s ease;
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
    
    /* ============================================
       EMPTY STATES
       ============================================ */
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
    
    /* ============================================
       ANIMATIONS
       ============================================ */
    .fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    /* ============================================
       BADGES
       ============================================ */
    .badge-status {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
        display: inline-block;
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

    /* ============================================
       RESPONSIVE - TABLETTE (max 991px)
       ============================================ */
    @media (max-width: 991.98px) {
        /* 4 cartes → 2 colonnes */
        .stats-grid.cols-4 {
            grid-template-columns: repeat(2, 1fr);
        }
        /* 3 cartes → 2 colonnes */
        .stats-grid.cols-3 {
            grid-template-columns: repeat(2, 1fr);
        }
        /* 5 cartes → 2 colonnes */
        .stats-grid.cols-5 {
            grid-template-columns: repeat(2, 1fr);
        }
        .stats-grid.cols-5 > *,
        .stats-grid.cols-5 > *:nth-child(4),
        .stats-grid.cols-5 > *:nth-child(5) {
            grid-column: span 1;
        }
        /* 6 cartes → 2 colonnes */
        .stats-grid.cols-6 {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .welcome-greeting {
            font-size: 1.6rem;
        }
    }

    /* ============================================
       RESPONSIVE - MOBILE (max 768px)
       ============================================ */
    @media (max-width: 767.98px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }

        /* Toutes les grilles → 1 colonne sur mobile */
        .stats-grid.cols-4,
        .stats-grid.cols-3,
        .stats-grid.cols-2,
        .stats-grid.cols-5,
        .stats-grid.cols-6,
        .stats-grid.cols-1 {
            grid-template-columns: 1fr;
        }
        .stats-grid.cols-5 > *,
        .stats-grid.cols-5 > *:nth-child(4),
        .stats-grid.cols-5 > *:nth-child(5) {
            grid-column: span 1;
        }

        /* Welcome card */
        .welcome-card-modern {
            padding: 1.25rem 1rem;
            border-radius: 12px;
        }
        .welcome-greeting {
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
        }
        .welcome-details {
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }
        .detail-item {
            font-size: 0.85rem;
            padding: 0.4rem 0.9rem;
            width: 100%;
            justify-content: center;
        }

        /* Dashboard cards */
        .dashboard-card .card-body {
            padding: 1rem;
        }
        .dashboard-card .stat-number {
            font-size: 1.5rem;
        }
        .dashboard-card .stat-subtitle {
            font-size: 0.8rem;
            margin-bottom: 0.5rem;
        }
        .dashboard-card .card-title {
            font-size: 0.8rem;
        }
        .stat-icon-wrapper {
            width: 42px;
            height: 42px;
            font-size: 1.15rem;
        }

        /* Info grid */
        .info-grid {
            grid-template-columns: 1fr;
            gap: 0.75rem;
        }
        .info-item {
            padding: 0.85rem;
        }
        .info-value {
            font-size: 0.95rem;
        }
        .info-label {
            font-size: 0.75rem;
        }

        /* Movements */
        .movement-item {
            padding: 0.75rem 0.5rem;
        }
        .movement-type {
            font-size: 0.75rem;
            padding: 0.2rem 0.6rem;
        }
        .product-name {
            font-size: 0.9rem;
        }
        .movement-date {
            font-size: 0.75rem;
        }
        .movement-quantity {
            font-size: 1rem;
        }

        /* Quick actions */
        .quick-action-btn {
            min-height: 90px;
            padding: 1rem 0.5rem;
        }
        .quick-action-btn i {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        /* Page title */
        .page-title {
            font-size: 1.2rem;
        }
        .breadcrumb {
            font-size: 0.8rem;
        }

        /* Empty state */
        .empty-state {
            padding: 1.5rem 1rem;
        }
        .empty-state i {
            font-size: 2rem;
        }

        /* Modals */
        .modal-dialog {
            margin: 0.5rem;
        }
        .guard-period-row {
            flex-wrap: wrap;
            gap: 0.5rem !important;
        }
        .guard-period-row select {
            flex: 1 1 100% !important;
        }
        .guard-period-row input[type=\"time\"] {
            width: calc(50% - 1.5rem) !important;
        }
        .guard-period-row .btn-danger {
            width: 100%;
        }
    }

    /* ============================================
       RESPONSIVE - TRÈS PETITS MOBILES (max 375px)
       ============================================ */
    @media (max-width: 375.98px) {
        .welcome-greeting {
            font-size: 1.2rem;
        }
        .detail-item {
            font-size: 0.75rem;
        }
        .dashboard-card .stat-number {
            font-size: 1.3rem;
        }
        .stat-icon-wrapper {
            width: 36px;
            height: 36px;
            font-size: 1rem;
        }
        .quick-action-btn i {
            font-size: 1.3rem;
        }
    }
</style>
";
        yield from [];
    }

    // line 667
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 671
        $context["hasCashierAccess"] = (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"));
        // line 672
        $context["hasStockAccess"] = (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"));
        // line 673
        $context["hasAdminAccess"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN");
        // line 674
        yield "
";
        // line 676
        $context["cardCount"] = 0;
        // line 677
        if ((($tmp = ($context["hasCashierAccess"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["cardCount"] = (($context["cardCount"] ?? null) + 1);
        }
        // line 678
        if ((($tmp = ($context["hasStockAccess"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["cardCount"] = (($context["cardCount"] ?? null) + 1);
        }
        // line 679
        if ((($tmp = ($context["hasAdminAccess"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["cardCount"] = (($context["cardCount"] ?? null) + 1);
        }
        // line 681
        $context["cardCount"] = (($context["cardCount"] ?? null) + 1);
        // line 682
        yield "
";
        // line 684
        $context["mainCardCount"] = 4;
        // line 685
        yield "
<div id=\"layout-wrapper\">
    <div class=\"main-content\">
        <div class=\"page-content\">
            <div class=\"container-fluid\">

                <!-- Breadcrumb -->
                <div class=\"row mb-3\">
                    <div class=\"col-12\">
                        <div class=\"page-title-box d-flex justify-content-between align-items-center flex-wrap gap-2\">
                            <h4 class=\"page-title mb-0\">Tableau de Bord</h4>
                            <ol class=\"breadcrumb m-0\">
                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 697
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                                <li class=\"breadcrumb-item active\">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Welcome Card -->
                <div class=\"row mb-3\">
                    <div class=\"col-12\">
                        <div class=\"welcome-card-modern fade-in\">
                            <div class=\"welcome-content\">
                                <h2 class=\"welcome-greeting\">
                                    ";
        // line 710
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 710), "fullName", [], "any", true, true, false, 710)) {
            // line 711
            yield "                                        Bonjour, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 711), "fullName", [], "any", false, false, false, 711), "html", null, true);
            yield " 👋
                                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 712
($context["app"] ?? null), "user", [], "any", false, true, false, 712), "companyName", [], "any", true, true, false, 712)) {
            // line 713
            yield "                                        Bonjour, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 713), "companyName", [], "any", false, false, false, 713), "html", null, true);
            yield " 👋
                                    ";
        } else {
            // line 715
            yield "                                        Bonjour ! 👋
                                    ";
        }
        // line 717
        yield "                                </h2>
                                <div class=\"welcome-details\">
                                    <div class=\"detail-item\">
                                        <i class=\"bi bi-envelope me-2\"></i>
                                        <span>";
        // line 721
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 721), "email", [], "any", false, false, false, 721), "html", null, true);
        yield "</span>
                                    </div>
                                    ";
        // line 723
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 723), "employmentDate", [], "any", true, true, false, 723) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 723), "employmentDate", [], "any", false, false, false, 723))) {
            // line 724
            yield "                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-calendar-check me-2\"></i>
                                            <span>Embauché le ";
            // line 726
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 726), "employmentDate", [], "any", false, false, false, 726), "d/m/Y"), "html", null, true);
            yield "</span>
                                        </div>
                                    ";
        }
        // line 729
        yield "                                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 729), "loginAt", [], "any", true, true, false, 729) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 729), "loginAt", [], "any", false, false, false, 729))) {
            // line 730
            yield "                                        ";
            $context["loginDiff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 730), "loginAt", [], "any", false, false, false, 730)], "method", false, false, false, 730);
            // line 731
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "d", [], "any", false, false, false, 731) > 0)) {
                // line 732
                yield "                                            ";
                $context["lastLoginText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "d", [], "any", false, false, false, 732)) . " jour") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "d", [], "any", false, false, false, 732) > 1)) ? ("s") : ("")));
                // line 733
                yield "                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "h", [], "any", false, false, false, 733) > 0)) {
                // line 734
                yield "                                            ";
                $context["lastLoginText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "h", [], "any", false, false, false, 734)) . " heure") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "h", [], "any", false, false, false, 734) > 1)) ? ("s") : ("")));
                // line 735
                yield "                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "i", [], "any", false, false, false, 735) > 0)) {
                // line 736
                yield "                                            ";
                $context["lastLoginText"] = ((("Il y a " . CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "i", [], "any", false, false, false, 736)) . " minute") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["loginDiff"] ?? null), "i", [], "any", false, false, false, 736) > 1)) ? ("s") : ("")));
                // line 737
                yield "                                        ";
            } else {
                // line 738
                yield "                                            ";
                $context["lastLoginText"] = "À l'instant";
                // line 739
                yield "                                        ";
            }
            // line 740
            yield "                                        <div class=\"detail-item\">
                                            <i class=\"bi bi-box-arrow-in-right me-2\"></i>
                                            <span>Dernière connexion : ";
            // line 742
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lastLoginText"] ?? null), "html", null, true);
            yield "</span>
                                        </div>
                                    ";
        }
        // line 745
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subscription Widget -->
                <div class=\"subscription-widget-container fade-in mb-3\" style=\"animation-delay: 0.2s\">
                    ";
        // line 753
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/_subscription_widget.html.twig");
        yield "
                </div>

                <!-- ============================================
                     STATS PRINCIPALES (TOUJOURS 4 CARTES)
                     ============================================ -->
                <div class=\"stats-grid cols-4\">
                    <!-- Produits Totaux -->
                    <div class=\"dashboard-card primary-card fade-in\" style=\"animation-delay: 0.1s\">
                        <div class=\"card-body\">
                            <div class=\"card-header\">
                                <div>
                                    <h6 class=\"card-title\">Produits Totaux</h6>
                                    <div class=\"stat-number\">";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_products", [], "any", true, true, false, 766)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_products", [], "any", false, false, false, 766), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                    <div class=\"stat-subtitle\">Articles en catalogue</div>
                                </div>
                                <div class=\"stat-icon-wrapper\">
                                    <i class=\"bi bi-box-seam\"></i>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"";
        // line 774
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-primary text-decoration-none small\">
                                    <i class=\"bi bi-arrow-right me-1\"></i>
                                    Voir le catalogue
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Ventes Totales -->
                    <div class=\"dashboard-card success-card fade-in\" style=\"animation-delay: 0.2s\">
                        <div class=\"card-body\">
                            <div class=\"card-header\">
                                <div>
                                    <h6 class=\"card-title\">Ventes Totales</h6>
                                    <div class=\"stat-number\">";
        // line 788
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", true, true, false, 788)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", false, false, false, 788), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                    <div class=\"stat-subtitle\">Transactions complétées</div>
                                </div>
                                <div class=\"stat-icon-wrapper\">
                                    <i class=\"bi bi-cart-check\"></i>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"";
        // line 796
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"text-success text-decoration-none small\">
                                    <i class=\"bi bi-arrow-right me-1\"></i>
                                    Voir les ventes
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Chiffre d'Affaires -->
                    <div class=\"dashboard-card info-card fade-in\" style=\"animation-delay: 0.3s\">
                        <div class=\"card-body\">
                            <div class=\"card-header\">
                                <div>
                                    <h6 class=\"card-title\">Chiffre d'Affaires</h6>
                                    <div class=\"stat-number\">";
        // line 810
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_revenue", [], "any", true, true, false, 810)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_revenue", [], "any", false, false, false, 810), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                    <div class=\"stat-subtitle\">FCFA générés</div>
                                </div>
                                <div class=\"stat-icon-wrapper\">
                                    <i class=\"bi bi-currency-exchange\"></i>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"";
        // line 818
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financial_report_index");
        yield "\" class=\"text-info text-decoration-none small\">
                                    <i class=\"bi bi-arrow-right me-1\"></i>
                                    Voir rapports
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Clients -->
                    <div class=\"dashboard-card warning-card fade-in\" style=\"animation-delay: 0.4s\">
                        <div class=\"card-body\">
                            <div class=\"card-header\">
                                <div>
                                    <h6 class=\"card-title\">Clients</h6>
                                    <div class=\"stat-number\">";
        // line 832
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_customers", [], "any", true, true, false, 832)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_customers", [], "any", false, false, false, 832), 0)) : (0)), 0, ",", " "), "html", null, true);
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

                <!-- ============================================
                     STATS CONDITIONNELLES
                     Grille adaptative selon le nombre de cartes visibles
                     ============================================ -->
                ";
        // line 853
        if ((($context["cardCount"] ?? null) > 0)) {
            // line 854
            yield "                <div class=\"stats-grid cols-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cardCount"] ?? null), "html", null, true);
            yield "\">
                    
                    ";
            // line 856
            if ((($tmp = ($context["hasCashierAccess"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 857
                yield "                    <!-- Ventes Aujourd'hui -->
                    <div class=\"dashboard-card dark-card fade-in\" style=\"animation-delay: 0.2s\">
                        <div class=\"card-body\">
                            <div class=\"card-header\">
                                <div>
                                    <h6 class=\"card-title\">Ventes Aujourd'hui</h6>
                                    <div class=\"stat-number\">";
                // line 863
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "today_orders", [], "any", true, true, false, 863)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "today_orders", [], "any", false, false, false, 863), 0)) : (0)), 0, ",", " "), "html", null, true);
                yield "</div>
                                    <div class=\"stat-subtitle\">";
                // line 864
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "today_revenue", [], "any", true, true, false, 864)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "today_revenue", [], "any", false, false, false, 864), 0)) : (0)), 0, ",", " "), "html", null, true);
                yield " FCFA</div>
                                </div>
                                <div class=\"stat-icon-wrapper\">
                                    <i class=\"bi bi-cash-stack\"></i>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <span class=\"badge bg-light text-dark\">En attente: ";
                // line 871
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending_orders", [], "any", true, true, false, 871)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending_orders", [], "any", false, false, false, 871), 0)) : (0)), "html", null, true);
                yield "</span>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 876
            yield "
                    ";
            // line 877
            if ((($tmp = ($context["hasStockAccess"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 878
                yield "                    <!-- Stock Faible -->
                    <div class=\"dashboard-card danger-card fade-in\" style=\"animation-delay: 0.3s\">
                        <div class=\"card-body\">
                            <div class=\"card-header\">
                                <div>
                                    <h6 class=\"card-title\">Stock Faible</h6>
                                    <div class=\"stat-number\">";
                // line 884
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "low_stock", [], "any", true, true, false, 884)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "low_stock", [], "any", false, false, false, 884), 0)) : (0)), 0, ",", " "), "html", null, true);
                yield "</div>
                                    <div class=\"stat-subtitle\">Produits à réapprovisionner</div>
                                </div>
                                <div class=\"stat-icon-wrapper\">
                                    <i class=\"bi bi-exclamation-triangle\"></i>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"";
                // line 892
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_report_index");
                yield "\" class=\"text-danger text-decoration-none small\">
                                    <i class=\"bi bi-arrow-right me-1\"></i>
                                    Réapprovisionner
                                </a>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 900
            yield "
                    ";
            // line 901
            if ((($tmp = ($context["hasAdminAccess"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 902
                yield "                    <!-- Utilisateurs -->
                    <div class=\"dashboard-card secondary-card fade-in\" style=\"animation-delay: 0.4s\">
                        <div class=\"card-body\">
                            <div class=\"card-header\">
                                <div>
                                    <h6 class=\"card-title\">Utilisateurs</h6>
                                    <div class=\"stat-number\">";
                // line 908
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_users", [], "any", true, true, false, 908)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_users", [], "any", false, false, false, 908), 0)) : (0)), 0, ",", " "), "html", null, true);
                yield "</div>
                                    <div class=\"stat-subtitle\">Comptes actifs</div>
                                </div>
                                <div class=\"stat-icon-wrapper\">
                                    <i class=\"bi bi-person-plus\"></i>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"";
                // line 916
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                yield "\" class=\"text-secondary text-decoration-none small\">
                                    <i class=\"bi bi-arrow-right me-1\"></i>
                                    Gérer utilisateurs
                                </a>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 924
            yield "
                    <!-- En Attente (TOUJOURS VISIBLE) -->
                    <div class=\"dashboard-card primary-card fade-in\" style=\"animation-delay: 0.5s\">
                        <div class=\"card-body\">
                            <div class=\"card-header\">
                                <div>
                                    <h6 class=\"card-title\">En Attente</h6>
                                    <div class=\"stat-number\">";
            // line 931
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending_orders", [], "any", true, true, false, 931)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending_orders", [], "any", false, false, false, 931), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield "</div>
                                    <div class=\"stat-subtitle\">Commandes à traiter</div>
                                </div>
                                <div class=\"stat-icon-wrapper\">
                                    <i class=\"bi bi-clock-history\"></i>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"";
            // line 939
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
            yield "\" class=\"text-primary text-decoration-none small\">
                                    <i class=\"bi bi-arrow-right me-1\"></i>
                                    Traiter maintenant
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                ";
        }
        // line 949
        yield "
                <!-- ============================================
                     STOCK MOVEMENTS & QUICK ACTIONS
                     ============================================ -->
                <div class=\"row g-3\">
                    <!-- Stock Movements -->
                    <div class=\"col-lg-8\">
                        <div class=\"dashboard-card stock-movements-card h-100\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2\">
                                    <h5 class=\"card-title mb-0\">
                                        <i class=\"bi bi-arrow-left-right text-primary me-2\"></i>
                                        Derniers Mouvements de Stock
                                    </h5>
                                    <a href=\"";
        // line 963
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index");
        yield "\" class=\"text-primary text-decoration-none small\">
                                        Voir tout <i class=\"bi bi-arrow-right ms-1\"></i>
                                    </a>
                                </div>
                                
                                <div id=\"stockMovements\">
                                    ";
        // line 969
        if (Twig\Extension\CoreExtension::testEmpty(($context["recentMovements"] ?? null))) {
            // line 970
            yield "                                        <div class=\"empty-state\">
                                            <i class=\"bi bi-arrow-left-right\"></i>
                                            <p class=\"mb-0\">Aucun mouvement de stock récent</p>
                                            <small class=\"text-muted\">Les mouvements apparaîtront ici</small>
                                        </div>
                                    ";
        } else {
            // line 976
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["recentMovements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
                // line 977
                yield "                                            <div class=\"movement-item\">
                                                <div class=\"d-flex justify-content-between align-items-start gap-2\">
                                                    <div class=\"flex-grow-1 min-w-0\">
                                                        <div class=\"d-flex align-items-center mb-1 flex-wrap gap-1\">
                                                            ";
                // line 981
                $context["isInMovement"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 981), ["purchase_in", "adjustment_in", "return_in", "transfer_in"]);
                // line 982
                yield "                                                            <span class=\"movement-type ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 982), "html", null, true);
                yield "\">
                                                                <i class=\"bi bi-";
                // line 983
                yield (((($tmp = ($context["isInMovement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("arrow-down-left") : ("arrow-up-right"));
                yield " me-1\"></i>
                                                                ";
                // line 984
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeLabel", [], "any", false, false, false, 984), "html", null, true);
                yield "
                                                            </span>
                                                        </div>
                                                        <div class=\"product-name\">";
                // line 987
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 987), "name", [], "any", false, false, false, 987), "html", null, true);
                yield "</div>
                                                        <div class=\"movement-date\">
                                                            <i class=\"bi bi-calendar me-1\"></i>
                                                            ";
                // line 990
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 990), "d/m/Y H:i"), "html", null, true);
                yield "
                                                        </div>
                                                    </div>
                                                    <div class=\"text-end flex-shrink-0\">
                                                        ";
                // line 994
                $context["isPositive"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 994), ["purchase_in", "adjustment_in", "return_in", "transfer_in"]);
                // line 995
                yield "                                                        <div class=\"movement-quantity ";
                yield (((($tmp = ($context["isPositive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-danger"));
                yield "\">
                                                            ";
                // line 996
                yield (((($tmp = ($context["isPositive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("+") : ("-"));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 996), 0, ",", " "), "html", null, true);
                yield "
                                                        </div>
                                                        <small class=\"text-muted\">";
                // line 998
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, true, false, 998), "unit", [], "any", true, true, false, 998) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 998), "unit", [], "any", false, false, false, 998)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "product", [], "any", false, false, false, 998), "unit", [], "any", false, false, false, 998), "html", null, true)) : ("unités"));
                yield "</small>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1003
            yield "                                    ";
        }
        // line 1004
        yield "                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class=\"col-lg-4\">
                        <div class=\"dashboard-card h-100\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-3\">
                                    <i class=\"bi bi-lightning text-warning me-2\"></i>
                                    Actions Rapides
                                </h5>
                                
                                <div class=\"row g-2\">
                                    ";
        // line 1019
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1020
            yield "                                    <div class=\"col-12\">
                                        <a href=\"";
            // line 1021
            yield (((($tmp = ($context["isRestaurant"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_sale_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_index")));
            yield "\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-cart-plus text-primary\"></i>
                                            <span class=\"fw-medium\">Nouvelle Vente</span>
                                        </a>
                                    </div>
                                    ";
        }
        // line 1027
        yield "                                    
                                    ";
        // line 1028
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 1029
            yield "                                    <div class=\"col-12\">
                                        <a href=\"";
            // line 1030
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-plus-circle text-success\"></i>
                                            <span class=\"fw-medium\">Ajouter Produit</span>
                                        </a>
                                    </div>
                                    ";
        }
        // line 1036
        yield "                                    
                                    ";
        // line 1037
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1038
            yield "                                    <div class=\"col-12\">
                                        <a href=\"";
            // line 1039
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
            yield "\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-boxes text-warning\"></i>
                                            <span class=\"fw-medium\">Gérer Stock</span>
                                        </a>
                                    </div>
                                    ";
        }
        // line 1045
        yield "                                    
                                    ";
        // line 1046
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1047
            yield "                                    <div class=\"col-12\">
                                        <a href=\"";
            // line 1048
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"quick-action-btn w-100 text-decoration-none\">
                                            <i class=\"bi bi-person-plus text-info\"></i>
                                            <span class=\"fw-medium\">Nouvel Utilisateur</span>
                                        </a>
                                    </div>
                                    ";
        }
        // line 1054
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================
                     COMPANY INFORMATION (OWNER UNIQUEMENT)
                     ============================================ -->
                ";
        // line 1063
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1063), "isHmaOwner", [], "any", true, true, false, 1063) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1063), "isHmaOwner", [], "any", false, false, false, 1063)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1063), "hmaServiceId", [], "any", false, false, false, 1063)))) {
            // line 1064
            yield "                <div class=\"row mt-3\">
                    <div class=\"col-12\">
                        <div class=\"dashboard-card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-4\">
                                    <i class=\"bi bi-building text-primary me-2\"></i>
                                    Informations de l'Entreprise
                                </h5>
                                
                                ";
            // line 1073
            $context["hmaService"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1073), "hmaServiceId", [], "any", false, false, false, 1073);
            // line 1074
            yield "                                
                                <div class=\"info-grid\">
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Nom de l'entreprise</div>
                                        <p class=\"info-value\">";
            // line 1078
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", true, true, false, 1078) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", false, false, false, 1078)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", false, false, false, 1078), "html", null, true)) : ("Non spécifié"));
            yield "</p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Email de contact</div>
                                        <p class=\"info-value\">";
            // line 1083
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "email", [], "any", true, true, false, 1083) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "email", [], "any", false, false, false, 1083)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "email", [], "any", false, false, false, 1083), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1083), "email", [], "any", false, false, false, 1083), "html", null, true)));
            yield "</p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Téléphone</div>
                                        <p class=\"info-value\">";
            // line 1088
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "phone", [], "any", true, true, false, 1088) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "phone", [], "any", false, false, false, 1088)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "phone", [], "any", false, false, false, 1088), "html", null, true)) : ("Non spécifié"));
            yield "</p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Numéro d'abonnement</div>
                                        <p class=\"info-value\">";
            // line 1093
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "subscriptionNumber", [], "any", true, true, false, 1093) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "subscriptionNumber", [], "any", false, false, false, 1093)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "subscriptionNumber", [], "any", false, false, false, 1093), "html", null, true)) : ("N/A"));
            yield "</p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Adresse</div>
                                        <p class=\"info-value\">";
            // line 1098
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "address", [], "any", true, true, false, 1098) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "address", [], "any", false, false, false, 1098)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "address", [], "any", false, false, false, 1098), "html", null, true)) : ("Non spécifiée"));
            yield "</p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Ville</div>
                                        <p class=\"info-value\">";
            // line 1103
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "city", [], "any", true, true, false, 1103) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "city", [], "any", false, false, false, 1103)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "city", [], "any", false, false, false, 1103), "html", null, true)) : ("Non spécifiée"));
            yield "</p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Pays</div>
                                        <p class=\"info-value\">";
            // line 1108
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "country", [], "any", true, true, false, 1108) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "country", [], "any", false, false, false, 1108)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "country", [], "any", false, false, false, 1108), "html", null, true)) : ("Non spécifié"));
            yield "</p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">📍 Coordonnées GPS</div>
                                        <p class=\"info-value\">
                                            ";
            // line 1114
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "longitude", [], "any", false, false, false, 1114)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "latitude", [], "any", false, false, false, 1114)))) {
                // line 1115
                yield "                                                <span class=\"d-block\">
                                                    <i class=\"bi bi-geo-alt me-1\"></i>
                                                    Lat: ";
                // line 1117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "latitude", [], "any", false, false, false, 1117), 6, ",", " "), "html", null, true);
                yield "
                                                </span>
                                                <span class=\"d-block\">
                                                    <i class=\"bi bi-geo-alt me-1\"></i>
                                                    Lng: ";
                // line 1121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "longitude", [], "any", false, false, false, 1121), 6, ",", " "), "html", null, true);
                yield "
                                                </span>
                                            ";
            } else {
                // line 1124
                yield "                                                <span class=\"text-muted\">Non spécifiées</span>
                                            ";
            }
            // line 1126
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Période d'essai</div>
                                        <p class=\"info-value\">
                                            ";
            // line 1132
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "trialEndsAt", [], "any", false, false, false, 1132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1133
                yield "                                                ";
                $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                // line 1134
                yield "                                                ";
                $context["trialEnds"] = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "trialEndsAt", [], "any", false, false, false, 1134);
                // line 1135
                yield "                                                ";
                $context["daysRemaining"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["trialEnds"] ?? null), "diff", [($context["now"] ?? null)], "method", false, false, false, 1135), "days", [], "any", false, false, false, 1135);
                // line 1136
                yield "                                                
                                                ";
                // line 1137
                if ((($context["daysRemaining"] ?? null) > 0)) {
                    // line 1138
                    yield "                                                    <span class=\"badge-status badge-trial\">
                                                        <i class=\"bi bi-clock me-1\"></i>
                                                        ";
                    // line 1140
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysRemaining"] ?? null), "html", null, true);
                    yield " jours restants
                                                    </span>
                                                ";
                } else {
                    // line 1143
                    yield "                                                    <span class=\"badge-status badge-expired\">
                                                        <i class=\"bi bi-x-circle me-1\"></i>
                                                        Terminée
                                                    </span>
                                                ";
                }
                // line 1148
                yield "                                            ";
            } else {
                // line 1149
                yield "                                                <span class=\"badge-status badge-active\">
                                                    <i class=\"bi bi-check-circle me-1\"></i>
                                                    Actif
                                                </span>
                                            ";
            }
            // line 1154
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Statut</div>
                                        <p class=\"info-value\">
                                            ";
            // line 1160
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "isActive", [], "any", false, false, false, 1160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1161
                yield "                                                <span class=\"badge-status badge-active\">
                                                    <i class=\"bi bi-check-circle me-1\"></i>
                                                    Actif
                                                </span>
                                            ";
            } else {
                // line 1166
                yield "                                                <span class=\"badge-status badge-expired\">
                                                    <i class=\"bi bi-x-circle me-1\"></i>
                                                    Inactif
                                                </span>
                                            ";
            }
            // line 1171
            yield "                                        </p>
                                    </div>
                                    
                                    <div class=\"info-item\">
                                        <div class=\"info-label\">Date de création</div>
                                        <p class=\"info-value\">
                                            ";
            // line 1177
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "createdAt", [], "any", false, false, false, 1177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1178
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "createdAt", [], "any", false, false, false, 1178), "d/m/Y"), "html", null, true);
                yield "
                                            ";
            } else {
                // line 1180
                yield "                                                N/A
                                            ";
            }
            // line 1182
            yield "                                        </p>
                                    </div>
                                </div>
                                
                                <div class=\"mt-4 pt-3 border-top d-flex flex-wrap gap-2\">
                                    <a href=\"";
            // line 1187
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_edit");
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                                        <i class=\"bi bi-pencil me-1\"></i>
                                        Modifier
                                    </a>
                                    <a href=\"";
            // line 1191
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_details");
            yield "\" class=\"btn btn-outline-info btn-sm\">
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
        // line 1201
        yield "
            </div>
        </div>
    </div>
</div>

<!-- ============================================
     MODALS
     ============================================ -->

<!-- Modal Visibilité -->
<div class=\"modal fade\" id=\"visibilityConfirmModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\">
        <div class=\"modal-content\">
            <div class=\"modal-header ";
        // line 1215
        if ((($context["company"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 1215))) {
            yield "bg-warning";
        } else {
            yield "bg-success";
        }
        yield " text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-shop me-2\"></i>
                    ";
        // line 1218
        if ((($context["company"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 1218))) {
            // line 1219
            yield "                        Masquer votre boutique
                    ";
        } else {
            // line 1221
            yield "                        Rendre votre boutique visible
                    ";
        }
        // line 1223
        yield "                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                ";
        // line 1227
        if ((($context["company"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 1227))) {
            // line 1228
            yield "                    <i class=\"bi bi-eye-slash text-warning\" style=\"font-size: 4rem;\"></i>
                    <h4 class=\"mt-3\">Masquer votre boutique ?</h4>
                    <p class=\"text-muted\">
                        Votre boutique ne sera plus visible sur le marketplace.
                    </p>
                ";
        } else {
            // line 1234
            yield "                    <i class=\"bi bi-eye text-success\" style=\"font-size: 4rem;\"></i>
                    <h4 class=\"mt-3\">Rendre votre boutique visible ?</h4>
                    <p class=\"text-muted\">
                        Votre boutique sera visible sur le marketplace.
                    </p>
                ";
        }
        // line 1240
        yield "            </div>
            <div class=\"modal-footer justify-content-center flex-column flex-sm-row gap-2\">
                <button type=\"button\" class=\"btn btn-secondary w-100 w-sm-auto\" data-bs-dismiss=\"modal\">Annuler</button>
                <form method=\"post\" action=\"";
        // line 1243
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_toggle_visibility");
        yield "\" class=\"w-100 w-sm-auto\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle_visibility"), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"action\" value=\"";
        // line 1245
        yield (((($context["company"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 1245))) ? ("hide") : ("show"));
        yield "\">
                    <button type=\"submit\" class=\"btn ";
        // line 1246
        if ((($context["company"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 1246))) {
            yield "btn-warning";
        } else {
            yield "btn-success";
        }
        yield " w-100\">
                        <i class=\"bi ";
        // line 1247
        if ((($context["company"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 1247))) {
            yield "bi-eye-slash";
        } else {
            yield "bi-eye";
        }
        yield " me-2\"></i>
                        Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Périodes de garde -->
<div class=\"modal fade\" id=\"guardPeriodsModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--primary-color); color: white;\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-clock-history me-2\"></i>
                    Modifier les périodes de garde
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" action=\"";
        // line 1267
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_guard_periods");
        yield "\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("guard_periods"), "html", null, true);
        yield "\">
                    
                    <p class=\"text-muted mb-3\">
                        <i class=\"bi bi-info-circle me-1\"></i>
                        Définissez les jours et horaires de garde.
                    </p>
                    
                    <div id=\"guardPeriodsContainer\">
                        ";
        // line 1277
        $context["guardPeriods"] = (((($tmp = ($context["company"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "guardPeriods", [], "any", true, true, false, 1277)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "guardPeriods", [], "any", false, false, false, 1277), [])) : ([]))) : ([]));
        // line 1278
        yield "                        
                        ";
        // line 1279
        if (Twig\Extension\CoreExtension::testEmpty(($context["guardPeriods"] ?? null))) {
            // line 1280
            yield "                            <div class=\"guard-period-row d-flex gap-2 align-items-center mb-2 flex-wrap\">
                                <select name=\"guard_periods[0][day]\" class=\"form-select\" style=\"flex: 1; min-width: 150px;\">
                                    <option value=\"\">Choisir un jour</option>
                                    <option value=\"monday\">Lundi</option>
                                    <option value=\"tuesday\">Mardi</option>
                                    <option value=\"wednesday\">Mercredi</option>
                                    <option value=\"thursday\">Jeudi</option>
                                    <option value=\"friday\">Vendredi</option>
                                    <option value=\"saturday\">Samedi</option>
                                    <option value=\"sunday\">Dimanche</option>
                                </select>
                                <input type=\"time\" name=\"guard_periods[0][start]\" class=\"form-control\" style=\"width: 120px;\">
                                <input type=\"time\" name=\"guard_periods[0][end]\" class=\"form-control\" style=\"width: 120px;\">
                                <button type=\"button\" class=\"btn btn-danger remove-guard-period\" disabled>
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                            </div>
                        ";
        } else {
            // line 1298
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["guardPeriods"] ?? null));
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
                // line 1299
                yield "                                <div class=\"guard-period-row d-flex gap-2 align-items-center mb-2 flex-wrap\">
                                    <select name=\"guard_periods[";
                // line 1300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1300), "html", null, true);
                yield "][day]\" class=\"form-select\" style=\"flex: 1; min-width: 150px;\">
                                        <option value=\"\">Choisir un jour</option>
                                        <option value=\"monday\" ";
                // line 1302
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1302) == "monday")) {
                    yield "selected";
                }
                yield ">Lundi</option>
                                        <option value=\"tuesday\" ";
                // line 1303
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1303) == "tuesday")) {
                    yield "selected";
                }
                yield ">Mardi</option>
                                        <option value=\"wednesday\" ";
                // line 1304
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1304) == "wednesday")) {
                    yield "selected";
                }
                yield ">Mercredi</option>
                                        <option value=\"thursday\" ";
                // line 1305
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1305) == "thursday")) {
                    yield "selected";
                }
                yield ">Jeudi</option>
                                        <option value=\"friday\" ";
                // line 1306
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1306) == "friday")) {
                    yield "selected";
                }
                yield ">Vendredi</option>
                                        <option value=\"saturday\" ";
                // line 1307
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1307) == "saturday")) {
                    yield "selected";
                }
                yield ">Samedi</option>
                                        <option value=\"sunday\" ";
                // line 1308
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1308) == "sunday")) {
                    yield "selected";
                }
                yield ">Dimanche</option>
                                    </select>
                                    <input type=\"time\" name=\"guard_periods[";
                // line 1310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1310), "html", null, true);
                yield "][start]\" class=\"form-control\" style=\"width: 120px;\" value=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", true, true, false, 1310) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", false, false, false, 1310)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", false, false, false, 1310), "html", null, true)) : (""));
                yield "\">
                                    <input type=\"time\" name=\"guard_periods[";
                // line 1311
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1311), "html", null, true);
                yield "][end]\" class=\"form-control\" style=\"width: 120px;\" value=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", true, true, false, 1311) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", false, false, false, 1311)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", false, false, false, 1311), "html", null, true)) : (""));
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
            // line 1317
            yield "                        ";
        }
        // line 1318
        yield "                    </div>
                    
                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2\" id=\"addGuardPeriod\">
                        <i class=\"bi bi-plus-circle me-1\"></i>
                        Ajouter une période
                    </button>
                </div>
                <div class=\"modal-footer flex-column flex-sm-row gap-2\">
                    <button type=\"button\" class=\"btn btn-secondary w-100 w-sm-auto\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn w-100 w-sm-auto\" style=\"background: var(--primary-color); color: white;\">
                        <i class=\"bi bi-save me-2\"></i>
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        yield from [];
    }

    // line 1339
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1340
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

        function resetRow(row) {
            row.querySelectorAll('select, input').forEach(el => el.value = '');
        }

        function createRow(index) {
            const row = document.createElement('div');
            row.className = 'guard-period-row d-flex gap-2 align-items-center mb-2 flex-wrap';
            row.innerHTML = `
                <select name=\"guard_periods[\${index}][day]\" class=\"form-select\" style=\"flex: 1; min-width: 150px;\">
                    <option value=\"\">Choisir un jour</option>
                    <option value=\"monday\">Lundi</option>
                    <option value=\"tuesday\">Mardi</option>
                    <option value=\"wednesday\">Mercredi</option>
                    <option value=\"thursday\">Jeudi</option>
                    <option value=\"friday\">Vendredi</option>
                    <option value=\"saturday\">Samedi</option>
                    <option value=\"sunday\">Dimanche</option>
                </select>
                <input type=\"time\" name=\"guard_periods[\${index}][start]\" class=\"form-control\" style=\"width: 120px;\">
                <input type=\"time\" name=\"guard_periods[\${index}][end]\" class=\"form-control\" style=\"width: 120px;\">
                <button type=\"button\" class=\"btn btn-danger remove-guard-period\">
                    <i class=\"bi bi-trash\"></i>
                </button>
            `;
            return row;
        }

        addBtn.addEventListener('click', function() {
            const row = createRow(periodIndex);
            container.appendChild(row);
            
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

        container.addEventListener('click', function(e) {
            const removeBtn = e.target.closest('.remove-guard-period');
            if (removeBtn && !removeBtn.disabled) {
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
    // 2. COUNTER ANIMATIONS
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
        return array (  1870 => 1340,  1863 => 1339,  1839 => 1318,  1836 => 1317,  1814 => 1311,  1808 => 1310,  1801 => 1308,  1795 => 1307,  1789 => 1306,  1783 => 1305,  1777 => 1304,  1771 => 1303,  1765 => 1302,  1760 => 1300,  1757 => 1299,  1739 => 1298,  1719 => 1280,  1717 => 1279,  1714 => 1278,  1712 => 1277,  1701 => 1269,  1696 => 1267,  1669 => 1247,  1661 => 1246,  1657 => 1245,  1653 => 1244,  1649 => 1243,  1644 => 1240,  1636 => 1234,  1628 => 1228,  1626 => 1227,  1620 => 1223,  1616 => 1221,  1612 => 1219,  1610 => 1218,  1600 => 1215,  1584 => 1201,  1571 => 1191,  1564 => 1187,  1557 => 1182,  1553 => 1180,  1547 => 1178,  1545 => 1177,  1537 => 1171,  1530 => 1166,  1523 => 1161,  1521 => 1160,  1513 => 1154,  1506 => 1149,  1503 => 1148,  1496 => 1143,  1490 => 1140,  1486 => 1138,  1484 => 1137,  1481 => 1136,  1478 => 1135,  1475 => 1134,  1472 => 1133,  1470 => 1132,  1462 => 1126,  1458 => 1124,  1452 => 1121,  1445 => 1117,  1441 => 1115,  1439 => 1114,  1430 => 1108,  1422 => 1103,  1414 => 1098,  1406 => 1093,  1398 => 1088,  1390 => 1083,  1382 => 1078,  1376 => 1074,  1374 => 1073,  1363 => 1064,  1361 => 1063,  1350 => 1054,  1341 => 1048,  1338 => 1047,  1336 => 1046,  1333 => 1045,  1324 => 1039,  1321 => 1038,  1319 => 1037,  1316 => 1036,  1307 => 1030,  1304 => 1029,  1302 => 1028,  1299 => 1027,  1290 => 1021,  1287 => 1020,  1285 => 1019,  1268 => 1004,  1265 => 1003,  1254 => 998,  1248 => 996,  1243 => 995,  1241 => 994,  1234 => 990,  1228 => 987,  1222 => 984,  1218 => 983,  1213 => 982,  1211 => 981,  1205 => 977,  1200 => 976,  1192 => 970,  1190 => 969,  1181 => 963,  1165 => 949,  1152 => 939,  1141 => 931,  1132 => 924,  1121 => 916,  1110 => 908,  1102 => 902,  1100 => 901,  1097 => 900,  1086 => 892,  1075 => 884,  1067 => 878,  1065 => 877,  1062 => 876,  1054 => 871,  1044 => 864,  1040 => 863,  1032 => 857,  1030 => 856,  1024 => 854,  1022 => 853,  998 => 832,  981 => 818,  970 => 810,  953 => 796,  942 => 788,  925 => 774,  914 => 766,  898 => 753,  888 => 745,  882 => 742,  878 => 740,  875 => 739,  872 => 738,  869 => 737,  866 => 736,  863 => 735,  860 => 734,  857 => 733,  854 => 732,  851 => 731,  848 => 730,  845 => 729,  839 => 726,  835 => 724,  833 => 723,  828 => 721,  822 => 717,  818 => 715,  812 => 713,  810 => 712,  805 => 711,  803 => 710,  787 => 697,  773 => 685,  771 => 684,  768 => 682,  766 => 681,  762 => 679,  758 => 678,  754 => 677,  752 => 676,  749 => 674,  747 => 673,  745 => 672,  743 => 671,  736 => 667,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\dashboard\\index.html.twig");
    }
}
