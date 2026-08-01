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

/* marketplace/profile/index.html.twig */
class __TwigTemplate_c974801d04744181d36151a7ab2de90f extends Template
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
        // line 3
        return "base_marketplace.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/profile/index.html.twig"));

        $this->parent = $this->load("base_marketplace.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Mon Profil - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/apexcharts@3.49.1/dist/apexcharts.css\">
<style>
    :root {
        --card-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
        --card-hover-shadow: 0 8px 40px rgba(0, 0, 0, 0.10);
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --success-gradient: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        --warning-gradient: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
        --danger-gradient: linear-gradient(135deg, #ef4444 0%, #f87171 100%);
        --info-gradient: linear-gradient(135deg, #3b82f6 0%, #60a5fa 100%);
    }

    /* ==================== PROFILE HEADER ==================== */
    .profile-header {
        background: var(--primary-gradient);
        border-radius: 28px;
        padding: 2.5rem 3rem;
        color: white;
        position: relative;
        overflow: hidden;
        margin-bottom: 2rem;
        box-shadow: 0 12px 40px rgba(4, 99, 241, 0.25);
    }

    .profile-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -30%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
        animation: headerFloat 15s ease-in-out infinite;
    }

    @keyframes headerFloat {
        0%, 100% { transform: translateX(0) rotate(0deg); }
        50% { transform: translateX(40px) rotate(5deg); }
    }

    .profile-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.8rem;
        font-weight: 800;
        color: white;
        border: 3px solid rgba(255,255,255,0.3);
        flex-shrink: 0;
        position: relative;
        z-index: 1;
        box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    }

    .profile-avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-info {
        position: relative;
        z-index: 1;
    }

    .profile-info h1 {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 0.25rem;
    }

    .profile-info .badge-status {
        font-size: 0.75rem;
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(4px);
        border: 1px solid rgba(255,255,255,0.15);
    }

    .profile-info .badge-status.active {
        background: rgba(16, 185, 129, 0.3);
        border-color: rgba(16, 185, 129, 0.4);
        color: #6ee7b7;
    }

    .profile-info .badge-status.inactive {
        background: rgba(239, 68, 68, 0.3);
        border-color: rgba(239, 68, 68, 0.4);
        color: #fca5a5;
    }

    .profile-actions {
        position: relative;
        z-index: 1;
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
    }

    .profile-actions .btn {
        border-radius: 50px;
        padding: 0.6rem 1.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        backdrop-filter: blur(4px);
    }

    .profile-actions .btn-light {
        background: rgba(255,255,255,0.95);
        color: var(--primary-color);
    }

    .profile-actions .btn-light:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        background: white;
    }

    .profile-actions .btn-outline-light {
        border: 2px solid rgba(255,255,255,0.5);
        color: white;
    }

    .profile-actions .btn-outline-light:hover {
        background: rgba(255,255,255,0.15);
        border-color: white;
        transform: translateY(-2px);
    }

    /* ==================== STATS CARDS ==================== */
    .stat-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem 1.5rem;
        border: 1px solid #e5e7eb;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--card-hover-shadow);
        border-color: transparent;
    }

    .stat-card .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        margin-bottom: 0.75rem;
        flex-shrink: 0;
    }

    .stat-card .stat-icon.primary {
        background: #dbeafe;
        color: #2563eb;
    }

    .stat-card .stat-icon.success {
        background: #d1fae5;
        color: #059669;
    }

    .stat-card .stat-icon.warning {
        background: #fef3c7;
        color: #d97706;
    }

    .stat-card .stat-icon.danger {
        background: #fee2e2;
        color: #dc2626;
    }

    .stat-card .stat-icon.info {
        background: #e0f2fe;
        color: #0284c7;
    }

    .stat-card .stat-number {
        font-size: 2rem;
        font-weight: 800;
        color: var(--dark-color);
        line-height: 1.2;
    }

    .stat-card .stat-label {
        font-size: 0.85rem;
        color: #64748b;
        font-weight: 500;
    }

    .stat-card .stat-change {
        font-size: 0.75rem;
        font-weight: 600;
        padding: 0.2rem 0.6rem;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
    }

    .stat-card .stat-change.positive {
        color: #059669;
        background: #d1fae5;
    }

    .stat-card .stat-change.negative {
        color: #dc2626;
        background: #fee2e2;
    }

    /* ==================== SECTION TITLE ==================== */
    .section-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 1.25rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .section-title i {
        color: var(--primary-color);
    }

    /* ==================== CHART CARD ==================== */
    .chart-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        border: 1px solid #e5e7eb;
        transition: all 0.3s ease;
    }

    .chart-card:hover {
        box-shadow: var(--card-hover-shadow);
        border-color: transparent;
    }

    .chart-controls {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .chart-controls .btn-filter {
        padding: 0.3rem 1rem;
        border-radius: 50px;
        border: 2px solid #e5e7eb;
        background: transparent;
        font-size: 0.8rem;
        font-weight: 600;
        color: #64748b;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .chart-controls .btn-filter:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
    }

    .chart-controls .btn-filter.active {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }

    /* ==================== TOP PRODUCTS ==================== */
    .top-product-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.75rem 1rem;
        border-radius: 14px;
        transition: all 0.3s ease;
        border: 1px solid transparent;
        cursor: pointer;
    }

    .top-product-item:hover {
        background: #f8fafc;
        border-color: #e5e7eb;
    }

    .top-product-item .rank {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: var(--primary-light);
        color: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.85rem;
        flex-shrink: 0;
    }

    .top-product-item .rank.gold {
        background: #fef3c7;
        color: #d97706;
    }

    .top-product-item .rank.silver {
        background: #f1f5f9;
        color: #475569;
    }

    .top-product-item .rank.bronze {
        background: #fef3c7;
        color: #b45309;
    }

    .top-product-item .product-image {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        flex-shrink: 0;
    }

    .top-product-item .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .top-product-item .product-image .placeholder {
        font-size: 1.5rem;
        color: #94a3b8;
    }

    .top-product-item .product-info {
        flex: 1;
        min-width: 0;
    }

    .top-product-item .product-info .name {
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--dark-color);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .top-product-item .product-info .details {
        font-size: 0.8rem;
        color: #64748b;
    }

    /* ==================== RECENT ORDERS ==================== */
    .order-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.75rem 1rem;
        border-radius: 14px;
        transition: all 0.3s ease;
        border: 1px solid transparent;
        text-decoration: none;
        color: inherit;
    }

    .order-item:hover {
        background: #f8fafc;
        border-color: #e5e7eb;
        text-decoration: none;
        color: inherit;
    }

    .order-item .order-number {
        font-weight: 700;
        font-size: 0.9rem;
        color: var(--dark-color);
        min-width: 120px;
    }

    .order-item .order-date {
        font-size: 0.8rem;
        color: #64748b;
        min-width: 100px;
    }

    .order-item .order-amount {
        font-weight: 700;
        font-size: 0.95rem;
        color: var(--dark-color);
    }

    .order-item .order-status {
        font-size: 0.7rem;
        padding: 0.25rem 0.8rem;
        border-radius: 50px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    .order-status.pending {
        background: #fef3c7;
        color: #d97706;
    }

    .order-status.processing {
        background: #dbeafe;
        color: #2563eb;
    }

    .order-status.shipped {
        background: #e0f2fe;
        color: #0284c7;
    }

    .order-status.delivered {
        background: #d1fae5;
        color: #059669;
    }

    .order-status.completed {
        background: #d1fae5;
        color: #059669;
    }

    .order-status.cancelled {
        background: #fee2e2;
        color: #dc2626;
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 992px) {
        .profile-header {
            padding: 1.5rem;
        }
        .profile-avatar {
            width: 70px;
            height: 70px;
            font-size: 2rem;
        }
        .profile-info h1 {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .profile-header {
            padding: 1.25rem;
            border-radius: 20px;
        }
        .profile-avatar {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }
        .profile-info h1 {
            font-size: 1.25rem;
        }
        .profile-actions {
            width: 100%;
        }
        .profile-actions .btn {
            flex: 1;
            justify-content: center;
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
        }
        .stat-card .stat-number {
            font-size: 1.5rem;
        }
        .stat-card {
            padding: 1rem;
        }
        .chart-controls {
            justify-content: center;
        }
        .chart-controls .btn-filter {
            font-size: 0.7rem;
            padding: 0.2rem 0.8rem;
        }
        .order-item {
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .order-item .order-number {
            min-width: 80px;
            font-size: 0.8rem;
        }
        .order-item .order-date {
            min-width: 70px;
            font-size: 0.7rem;
        }
    }

    @media (max-width: 480px) {
        .profile-header {
            padding: 1rem;
        }
        .profile-avatar {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
        .profile-info h1 {
            font-size: 1.1rem;
        }
        .profile-actions .btn {
            font-size: 0.75rem;
            padding: 0.4rem 0.8rem;
        }
        .stat-card .stat-number {
            font-size: 1.2rem;
        }
        .stat-card .stat-icon {
            width: 38px;
            height: 38px;
            font-size: 1rem;
        }
        .section-title {
            font-size: 1rem;
        }
        .top-product-item {
            padding: 0.5rem 0.75rem;
        }
        .top-product-item .product-image {
            width: 36px;
            height: 36px;
        }
        .top-product-item .product-info .name {
            font-size: 0.8rem;
        }
    }

    /* ==================== EMPTY STATE ==================== */
    .empty-state-sm {
        text-align: center;
        padding: 2rem 1rem;
        color: #94a3b8;
    }

    .empty-state-sm i {
        font-size: 2.5rem;
        color: #cbd5e1;
        margin-bottom: 0.5rem;
    }

    .empty-state-sm p {
        font-size: 0.9rem;
        margin: 0;
    }

    /* ==================== ANIMATIONS ==================== */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .animate-on-scroll.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .stat-card {
        animation: fadeInUp 0.5s ease forwards;
        opacity: 0;
    }

    .stat-card:nth-child(1) { animation-delay: 0.05s; }
    .stat-card:nth-child(2) { animation-delay: 0.10s; }
    .stat-card:nth-child(3) { animation-delay: 0.15s; }
    .stat-card:nth-child(4) { animation-delay: 0.20s; }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideUp {
        from { transform: translateY(100%); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes slideDown {
        from { transform: translateY(0); opacity: 1; }
        to { transform: translateY(100%); opacity: 0; }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 617
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

        // line 618
        yield "
<!-- ==================== PROFILE HEADER ==================== -->
<div class=\"profile-header animate-on-scroll visible\">
    <div class=\"row align-items-center g-4\">
        <div class=\"col-md-auto\">
            <div class=\"profile-avatar\">
                ";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", true, true, false, 624)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 624, $this->source); })()), "fullName", [], "any", false, false, false, 624), CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 624, $this->source); })()), "email", [], "any", false, false, false, 624))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 624, $this->source); })()), "email", [], "any", false, false, false, 624))), 0, 2)), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"col-md\">
            <div class=\"profile-info\">
                <div class=\"d-flex align-items-center gap-3 flex-wrap\">
                    <h1>";
        // line 630
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", true, true, false, 630)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 630, $this->source); })()), "fullName", [], "any", false, false, false, 630), "Client")) : ("Client")), "html", null, true);
        yield "</h1>
                    <span class=\"badge-status ";
        // line 631
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 631, $this->source); })()), "isActive", [], "any", false, false, false, 631)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
        yield "\">
                        <i class=\"fas fa-";
        // line 632
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 632, $this->source); })()), "isActive", [], "any", false, false, false, 632)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check-circle") : ("times-circle"));
        yield " me-1\"></i>
                        ";
        // line 633
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 633, $this->source); })()), "isActive", [], "any", false, false, false, 633)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Compte actif") : ("Compte inactif"));
        yield "
                    </span>
                </div>
                <div class=\"d-flex flex-wrap gap-3 mt-1\">
                    <span><i class=\"fas fa-envelope me-1\"></i> ";
        // line 637
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 637, $this->source); })()), "email", [], "any", false, false, false, 637), "html", null, true);
        yield "</span>
                    ";
        // line 638
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 638, $this->source); })()), "phone", [], "any", false, false, false, 638)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 639
            yield "                        <span><i class=\"fas fa-phone me-1\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 639, $this->source); })()), "phone", [], "any", false, false, false, 639), "html", null, true);
            yield "</span>
                    ";
        }
        // line 641
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 641, $this->source); })()), "city", [], "any", false, false, false, 641)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 642
            yield "                        <span><i class=\"fas fa-map-marker-alt me-1\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 642, $this->source); })()), "city", [], "any", false, false, false, 642), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "country", [], "any", true, true, false, 642)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 642, $this->source); })()), "country", [], "any", false, false, false, 642), "Bénin")) : ("Bénin")), "html", null, true);
            yield "</span>
                    ";
        }
        // line 644
        yield "                    <span><i class=\"fas fa-calendar-alt me-1\"></i> Membre depuis ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 644, $this->source); })()), "createdAt", [], "any", false, false, false, 644), "d/m/Y"), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
        <div class=\"col-md-auto\">
            <div class=\"profile-actions\">
                <a href=\"";
        // line 650
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_profile_edit");
        yield "\" class=\"btn btn-light\">
                    <i class=\"fas fa-user-edit me-1\"></i> Modifier
                </a>
                <a href=\"";
        // line 653
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_change_password");
        yield "\" class=\"btn btn-outline-light\">
                    <i class=\"fas fa-key me-1\"></i> Mot de passe
                </a>
                <a href=\"";
        // line 656
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
        yield "\" class=\"btn btn-outline-light\">
                    <i class=\"fas fa-list me-1\"></i> Commandes
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ==================== STATISTIQUES ==================== -->
<div class=\"row g-4 mb-4 animate-on-scroll\">
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"stat-card\">
            <div class=\"stat-icon primary\">
                <i class=\"fas fa-shopping-bag\"></i>
            </div>
            <div class=\"stat-number\">";
        // line 671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 671, $this->source); })()), "total_orders", [], "any", false, false, false, 671), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Commandes totales</div>
            <div class=\"mt-1\">
                ";
        // line 674
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 674, $this->source); })()), "last_order", [], "any", false, false, false, 674)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 675
            yield "                    <small class=\"text-muted\">
                        <i class=\"fas fa-clock me-1\"></i>
                        Dernière le ";
            // line 677
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 677, $this->source); })()), "last_order", [], "any", false, false, false, 677), "createdAt", [], "any", false, false, false, 677), "d/m/Y"), "html", null, true);
            yield "
                    </small>
                ";
        }
        // line 680
        yield "            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"stat-card\">
            <div class=\"stat-icon success\">
                <i class=\"fas fa-money-bill-wave\"></i>
            </div>
            <div class=\"stat-number\">";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 688, $this->source); })()), "total_spent", [], "any", false, false, false, 688), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
            <div class=\"stat-label\">Total dépensé</div>
            <div class=\"mt-1\">
                <small class=\"text-muted\">
                    <i class=\"fas fa-calculator me-1\"></i>
                    Moyenne : ";
        // line 693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 693, $this->source); })()), "average_order_value", [], "any", false, false, false, 693), 0, ",", " "), "html", null, true);
        yield " FCFA
                </small>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"stat-card\">
            <div class=\"stat-icon warning\">
                <i class=\"fas fa-truck\"></i>
            </div>
            <div class=\"stat-number\">";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["orderStats"] ?? null), "status_counts", [], "any", false, true, false, 703), "delivered", [], "any", true, true, false, 703)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 703, $this->source); })()), "status_counts", [], "any", false, false, false, 703), "delivered", [], "any", false, false, false, 703), 0)) : (0)) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["orderStats"] ?? null), "status_counts", [], "any", false, true, false, 703), "completed", [], "any", true, true, false, 703)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 703, $this->source); })()), "status_counts", [], "any", false, false, false, 703), "completed", [], "any", false, false, false, 703), 0)) : (0))), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Commandes livrées</div>
            <div class=\"mt-1\">
                <small class=\"text-muted\">
                    <i class=\"fas fa-check-circle text-success me-1\"></i>
                    ";
        // line 708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["orderStats"] ?? null), "status_counts", [], "any", false, true, false, 708), "completed", [], "any", true, true, false, 708)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 708, $this->source); })()), "status_counts", [], "any", false, false, false, 708), "completed", [], "any", false, false, false, 708), 0)) : (0)), "html", null, true);
        yield " terminées
                </small>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"stat-card\">
            <div class=\"stat-icon danger\">
                <i class=\"fas fa-clock\"></i>
            </div>
            <div class=\"stat-number\">";
        // line 718
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["orderStats"] ?? null), "status_counts", [], "any", false, true, false, 718), "pending", [], "any", true, true, false, 718)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 718, $this->source); })()), "status_counts", [], "any", false, false, false, 718), "pending", [], "any", false, false, false, 718), 0)) : (0)) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["orderStats"] ?? null), "status_counts", [], "any", false, true, false, 718), "processing", [], "any", true, true, false, 718)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 718, $this->source); })()), "status_counts", [], "any", false, false, false, 718), "processing", [], "any", false, false, false, 718), 0)) : (0))), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Commandes en cours</div>
            <div class=\"mt-1\">
                <small class=\"text-muted\">
                    <i class=\"fas fa-hourglass-half me-1\"></i>
                    ";
        // line 723
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["orderStats"] ?? null), "status_counts", [], "any", false, true, false, 723), "pending", [], "any", true, true, false, 723)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 723, $this->source); })()), "status_counts", [], "any", false, false, false, 723), "pending", [], "any", false, false, false, 723), 0)) : (0)), "html", null, true);
        yield " en attente
                </small>
            </div>
        </div>
    </div>
</div>

<!-- ==================== GRAPHIQUES ==================== -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-lg-8 animate-on-scroll\">
        <div class=\"chart-card\">
            <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-3\">
                <div class=\"section-title mb-0\">
                    <i class=\"fas fa-chart-area\"></i>
                    Évolution des commandes
                </div>
                <div class=\"chart-controls\" id=\"chartControls\">
                    <button class=\"btn-filter\" data-period=\"week\">Semaine</button>
                    <button class=\"btn-filter\" data-period=\"month\">Mois</button>
                    <button class=\"btn-filter active\" data-period=\"year\">Année</button>
                </div>
            </div>
            <div id=\"ordersChart\"></div>
        </div>
    </div>
    <div class=\"col-lg-4 animate-on-scroll\">
        <div class=\"chart-card\" style=\"height: 100%;\">
            <div class=\"section-title\">
                <i class=\"fas fa-chart-pie\"></i>
                Répartition des commandes
            </div>
            <div id=\"statusChart\"></div>
            <div class=\"mt-3\">
                ";
        // line 756
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("statuses", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 756, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["status"] => $context["label"]) {
            // line 757
            yield "                    ";
            $context["count"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["orderStats"] ?? null), "status_counts", [], "any", false, true, false, 757), $context["status"], [], "array", true, true, false, 757)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 757, $this->source); })()), "status_counts", [], "any", false, false, false, 757), $context["status"], [], "array", false, false, false, 757), 0)) : (0));
            // line 758
            yield "                    ";
            if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 758, $this->source); })()) > 0)) {
                // line 759
                yield "                        <div class=\"d-flex justify-content-between align-items-center mb-1\">
                            <span class=\"text-muted small\">
                                <span class=\"order-status ";
                // line 761
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
                yield " d-inline-block\" style=\"width:10px;height:10px;border-radius:50%;padding:0;margin-right:6px;\"></span>
                                ";
                // line 762
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "
                            </span>
                            <span class=\"fw-semibold small\">";
                // line 764
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 764, $this->source); })()), "html", null, true);
                yield "</span>
                        </div>
                    ";
            }
            // line 767
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['status'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 768
        yield "            </div>
        </div>
    </div>
</div>

<!-- ==================== TOP PRODUITS & DERNIÈRES COMMANDES ==================== -->
<div class=\"row g-4\">
    <div class=\"col-lg-6 animate-on-scroll\">
        <div class=\"chart-card\">
            <div class=\"section-title\">
                <i class=\"fas fa-star text-warning\"></i>
                Top produits les plus achetés
            </div>
            ";
        // line 781
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["topProducts"]) || array_key_exists("topProducts", $context) ? $context["topProducts"] : (function () { throw new RuntimeError('Variable "topProducts" does not exist.', 781, $this->source); })())) > 0)) {
            // line 782
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topProducts"]) || array_key_exists("topProducts", $context) ? $context["topProducts"] : (function () { throw new RuntimeError('Variable "topProducts" does not exist.', 782, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 783
                yield "                    <div class=\"top-product-item\">
                        <div class=\"rank ";
                // line 784
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 784) == 1)) {
                    yield "gold";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 784) == 2)) {
                    yield "silver";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 784) == 3)) {
                    yield "bronze";
                }
                yield "\">
                            #";
                // line 785
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 785), "html", null, true);
                yield "
                        </div>
                        <div class=\"product-image\">
                            ";
                // line 788
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 788)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 789
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 789))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 789), "html", null, true);
                    yield "\" loading=\"lazy\">
                            ";
                } else {
                    // line 791
                    yield "                                <span class=\"placeholder\"><i class=\"fas fa-box\"></i></span>
                            ";
                }
                // line 793
                yield "                        </div>
                        <div class=\"product-info\">
                            <div class=\"name\">";
                // line 795
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 795), "html", null, true);
                yield "</div>
                            <div class=\"details\">
                                ";
                // line 797
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total_quantity", [], "any", false, false, false, 797), "html", null, true);
                yield " unités achetées · 
                                ";
                // line 798
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total_amount", [], "any", false, false, false, 798), 0, ",", " "), "html", null, true);
                yield " FCFA
                            </div>
                        </div>
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
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 803
            yield "            ";
        } else {
            // line 804
            yield "                <div class=\"empty-state-sm\">
                    <i class=\"fas fa-shopping-bag\"></i>
                    <p>Vous n'avez pas encore acheté de produits</p>
                </div>
            ";
        }
        // line 809
        yield "        </div>
    </div>
    <div class=\"col-lg-6 animate-on-scroll\">
        <div class=\"chart-card\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <div class=\"section-title mb-0\">
                    <i class=\"fas fa-clock\"></i>
                    Dernières commandes
                </div>
                <a href=\"";
        // line 818
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
        yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill\">
                    Voir tout <i class=\"fas fa-arrow-right ms-1\"></i>
                </a>
            </div>
            ";
        // line 822
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recentOrders"]) || array_key_exists("recentOrders", $context) ? $context["recentOrders"] : (function () { throw new RuntimeError('Variable "recentOrders" does not exist.', 822, $this->source); })())) > 0)) {
            // line 823
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentOrders"]) || array_key_exists("recentOrders", $context) ? $context["recentOrders"] : (function () { throw new RuntimeError('Variable "recentOrders" does not exist.', 823, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 824
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_order_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 824)]), "html", null, true);
                yield "\" class=\"order-item\">
                        <div class=\"order-number\">#";
                // line 825
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 825), "html", null, true);
                yield "</div>
                        <div class=\"order-date\">";
                // line 826
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 826), "d/m/Y H:i"), "html", null, true);
                yield "</div>
                        <div class=\"order-amount\">";
                // line 827
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "grandTotal", [], "any", false, false, false, 827), 0, ",", " "), "html", null, true);
                yield " FCFA</div>
                        <span class=\"order-status ";
                // line 828
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 828), "html", null, true);
                yield "\">
                            ";
                // line 829
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statusLabel", [], "any", false, false, false, 829), "html", null, true);
                yield "
                        </span>
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 833
            yield "            ";
        } else {
            // line 834
            yield "                <div class=\"empty-state-sm\">
                    <i class=\"fas fa-inbox\"></i>
                    <p>Vous n'avez pas encore de commandes</p>
                </div>
            ";
        }
        // line 839
        yield "        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 845
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

        // line 846
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/apexcharts@3.49.1/dist/apexcharts.min.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== DONNÉES INITIALES ====================
    const chartData = ";
        // line 852
        yield json_encode((isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 852, $this->source); })()));
        yield ";
    const statusCounts = ";
        // line 853
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderStats"]) || array_key_exists("orderStats", $context) ? $context["orderStats"] : (function () { throw new RuntimeError('Variable "orderStats" does not exist.', 853, $this->source); })()), "status_counts", [], "any", false, false, false, 853));
        yield ";
    const statusLabels = {
        pending: 'En attente',
        processing: 'En traitement',
        shipped: 'Expédiée',
        delivered: 'Livrée',
        completed: 'Terminée',
        cancelled: 'Annulée'
    };

    // ==================== GRAPHIQUE DES COMMANDES ====================
    const orderChartOptions = {
        series: [{
            name: 'Montant (FCFA)',
            data: chartData.data || []
        }],
        chart: {
            type: 'area',
            height: 280,
            toolbar: { show: false },
            zoom: { enabled: false },
            fontFamily: 'Inter, sans-serif',
            animations: {
                enabled: true,
                easing: 'easeinout',
                speed: 800
            }
        },
        dataLabels: { enabled: false },
        stroke: {
            curve: 'smooth',
            width: 3,
            colors: ['#0463f1']
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0.05,
                stops: [0, 100],
                colorStops: [
                    { offset: 0, color: '#0463f1' },
                    { offset: 100, color: '#667eea' }
                ]
            }
        },
        grid: {
            borderColor: '#e5e7eb',
            strokeDashArray: 4,
            xaxis: { lines: { show: true } },
            yaxis: { lines: { show: true } }
        },
        xaxis: {
            categories: chartData.labels || [],
            labels: {
                style: {
                    colors: '#64748b',
                    fontSize: '11px',
                    fontWeight: 500
                }
            },
            axisBorder: { show: false },
            axisTicks: { show: false }
        },
        yaxis: {
            labels: {
                style: {
                    colors: '#64748b',
                    fontSize: '11px',
                    fontWeight: 500
                },
                formatter: function(value) {
                    return value.toLocaleString('fr-FR') + ' FCFA';
                }
            }
        },
        tooltip: {
            theme: 'light',
            style: {
                fontSize: '12px',
                fontFamily: 'Inter, sans-serif'
            },
            y: {
                formatter: function(value) {
                    return value.toLocaleString('fr-FR') + ' FCFA';
                }
            }
        }
    };

    const orderChart = new ApexCharts(
        document.querySelector('#ordersChart'),
        orderChartOptions
    );
    orderChart.render();

    // ==================== GRAPHIQUE DES STATUTS ====================
    const statusColors = {
        pending: '#f59e0b',
        processing: '#3b82f6',
        shipped: '#0284c7',
        delivered: '#059669',
        completed: '#10b981',
        cancelled: '#ef4444'
    };

    const statusData = [];
    const statusLabelsArray = [];

    for (const [status, count] of Object.entries(statusCounts)) {
        if (count > 0 && statusLabels[status]) {
            statusData.push(count);
            statusLabelsArray.push(statusLabels[status]);
        }
    }

    // Couleurs correspondantes
    const colors = statusData.map((_, index) => {
        const statusKeys = Object.keys(statusCounts).filter(s => statusCounts[s] > 0 && statusLabels[s]);
        return statusColors[statusKeys[index]] || '#64748b';
    });

    const statusChartOptions = {
        series: statusData,
        chart: {
            type: 'donut',
            height: 220,
            fontFamily: 'Inter, sans-serif',
            animations: {
                enabled: true,
                easing: 'easeinout',
                speed: 800
            }
        },
        colors: colors,
        labels: statusLabelsArray,
        legend: { show: false },
        dataLabels: {
            enabled: true,
            formatter: function(value, { seriesIndex }) {
                const total = seriesData.reduce((a, b) => a + b, 0);
                const percent = total > 0 ? ((seriesData[seriesIndex] / total) * 100).toFixed(1) : 0;
                return percent + '%';
            },
            style: {
                fontSize: '11px',
                fontWeight: 600,
                colors: ['#1f2937']
            }
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '60%',
                    labels: {
                        show: true,
                        total: {
                            show: true,
                            label: 'Total',
                            formatter: function() {
                                return seriesData.reduce((a, b) => a + b, 0);
                            },
                            style: {
                                fontSize: '14px',
                                fontWeight: 700,
                                color: '#1f2937'
                            }
                        },
                        value: {
                            style: {
                                fontSize: '12px',
                                fontWeight: 600,
                                color: '#1f2937'
                            }
                        }
                    }
                }
            }
        },
        tooltip: {
            y: {
                formatter: function(value) {
                    return value + ' commandes';
                }
            }
        }
    };

    // Variable pour stocker les données séries pour le total
    const seriesData = statusData;

    const statusChart = new ApexCharts(
        document.querySelector('#statusChart'),
        statusChartOptions
    );
    statusChart.render();

    // ==================== FILTRES PÉRIODE ====================
    const filterButtons = document.querySelectorAll('#chartControls .btn-filter');
    let currentPeriod = 'year';

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const period = this.dataset.period;
            
            // Mettre à jour l'état actif
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            if (period === currentPeriod) return;
            currentPeriod = period;
            
            // Afficher un loader
            orderChart.showLoading();
            
            // Récupérer les nouvelles données
            fetch('";
        // line 1070
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_profile_stats_data");
        yield "?period=' + period)
                .then(response => response.json())
                .then(data => {
                    if (data.chartData) {
                        // Mettre à jour le graphique
                        orderChart.updateOptions({
                            xaxis: {
                                categories: data.chartData.labels || []
                            }
                        });
                        orderChart.updateSeries([{
                            data: data.chartData.data || []
                        }]);
                        orderChart.hideLoading();
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    orderChart.hideLoading();
                });
        });
    });

    // ==================== ANIMATION ON SCROLL ====================
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // ==================== NOTIFICATION ====================
    function showNotification(message, type = 'info') {
        const colors = {
            success: 'bg-success',
            error: 'bg-danger',
            info: 'bg-primary',
            warning: 'bg-warning'
        };
        const icons = {
            success: 'fa-check-circle',
            error: 'fa-exclamation-circle',
            info: 'fa-info-circle',
            warning: 'fa-exclamation-triangle'
        };
        
        const notification = document.createElement('div');
        notification.className = `position-fixed bottom-0 end-0 p-3 m-3 \${colors[type] || colors.info} text-white rounded-4 shadow-lg`;
        notification.style.zIndex = '9999';
        notification.style.animation = 'slideUp 0.3s ease';
        notification.style.maxWidth = '400px';
        notification.innerHTML = `
            <div class=\"d-flex align-items-center gap-2\">
                <i class=\"fas \${icons[type] || icons.info} fa-lg\"></i>
                <span>\${message}</span>
                <button type=\"button\" class=\"btn-close btn-close-white ms-2\" onclick=\"this.closest('div.position-fixed').remove()\"></button>
            </div>
        `;
        document.body.appendChild(notification);
        setTimeout(() => {
            notification.style.animation = 'slideDown 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 3500);
    }

    window.showNotification = showNotification;
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
        return "marketplace/profile/index.html.twig";
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
        return array (  1419 => 1070,  1199 => 853,  1195 => 852,  1186 => 846,  1173 => 845,  1158 => 839,  1151 => 834,  1148 => 833,  1138 => 829,  1134 => 828,  1130 => 827,  1126 => 826,  1122 => 825,  1117 => 824,  1112 => 823,  1110 => 822,  1103 => 818,  1092 => 809,  1085 => 804,  1082 => 803,  1063 => 798,  1059 => 797,  1054 => 795,  1050 => 793,  1046 => 791,  1038 => 789,  1036 => 788,  1030 => 785,  1020 => 784,  1017 => 783,  999 => 782,  997 => 781,  982 => 768,  976 => 767,  970 => 764,  965 => 762,  961 => 761,  957 => 759,  954 => 758,  951 => 757,  947 => 756,  911 => 723,  903 => 718,  890 => 708,  882 => 703,  869 => 693,  861 => 688,  851 => 680,  845 => 677,  841 => 675,  839 => 674,  833 => 671,  815 => 656,  809 => 653,  803 => 650,  793 => 644,  785 => 642,  782 => 641,  776 => 639,  774 => 638,  770 => 637,  763 => 633,  759 => 632,  755 => 631,  751 => 630,  742 => 624,  734 => 618,  721 => 617,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/profile/index.html.twig #}

{% extends 'base_marketplace.html.twig' %}

{% block title %}Mon Profil - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/apexcharts@3.49.1/dist/apexcharts.css\">
<style>
    :root {
        --card-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
        --card-hover-shadow: 0 8px 40px rgba(0, 0, 0, 0.10);
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --success-gradient: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        --warning-gradient: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
        --danger-gradient: linear-gradient(135deg, #ef4444 0%, #f87171 100%);
        --info-gradient: linear-gradient(135deg, #3b82f6 0%, #60a5fa 100%);
    }

    /* ==================== PROFILE HEADER ==================== */
    .profile-header {
        background: var(--primary-gradient);
        border-radius: 28px;
        padding: 2.5rem 3rem;
        color: white;
        position: relative;
        overflow: hidden;
        margin-bottom: 2rem;
        box-shadow: 0 12px 40px rgba(4, 99, 241, 0.25);
    }

    .profile-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -30%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
        animation: headerFloat 15s ease-in-out infinite;
    }

    @keyframes headerFloat {
        0%, 100% { transform: translateX(0) rotate(0deg); }
        50% { transform: translateX(40px) rotate(5deg); }
    }

    .profile-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.8rem;
        font-weight: 800;
        color: white;
        border: 3px solid rgba(255,255,255,0.3);
        flex-shrink: 0;
        position: relative;
        z-index: 1;
        box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    }

    .profile-avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-info {
        position: relative;
        z-index: 1;
    }

    .profile-info h1 {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 0.25rem;
    }

    .profile-info .badge-status {
        font-size: 0.75rem;
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(4px);
        border: 1px solid rgba(255,255,255,0.15);
    }

    .profile-info .badge-status.active {
        background: rgba(16, 185, 129, 0.3);
        border-color: rgba(16, 185, 129, 0.4);
        color: #6ee7b7;
    }

    .profile-info .badge-status.inactive {
        background: rgba(239, 68, 68, 0.3);
        border-color: rgba(239, 68, 68, 0.4);
        color: #fca5a5;
    }

    .profile-actions {
        position: relative;
        z-index: 1;
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
    }

    .profile-actions .btn {
        border-radius: 50px;
        padding: 0.6rem 1.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        backdrop-filter: blur(4px);
    }

    .profile-actions .btn-light {
        background: rgba(255,255,255,0.95);
        color: var(--primary-color);
    }

    .profile-actions .btn-light:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        background: white;
    }

    .profile-actions .btn-outline-light {
        border: 2px solid rgba(255,255,255,0.5);
        color: white;
    }

    .profile-actions .btn-outline-light:hover {
        background: rgba(255,255,255,0.15);
        border-color: white;
        transform: translateY(-2px);
    }

    /* ==================== STATS CARDS ==================== */
    .stat-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem 1.5rem;
        border: 1px solid #e5e7eb;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--card-hover-shadow);
        border-color: transparent;
    }

    .stat-card .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        margin-bottom: 0.75rem;
        flex-shrink: 0;
    }

    .stat-card .stat-icon.primary {
        background: #dbeafe;
        color: #2563eb;
    }

    .stat-card .stat-icon.success {
        background: #d1fae5;
        color: #059669;
    }

    .stat-card .stat-icon.warning {
        background: #fef3c7;
        color: #d97706;
    }

    .stat-card .stat-icon.danger {
        background: #fee2e2;
        color: #dc2626;
    }

    .stat-card .stat-icon.info {
        background: #e0f2fe;
        color: #0284c7;
    }

    .stat-card .stat-number {
        font-size: 2rem;
        font-weight: 800;
        color: var(--dark-color);
        line-height: 1.2;
    }

    .stat-card .stat-label {
        font-size: 0.85rem;
        color: #64748b;
        font-weight: 500;
    }

    .stat-card .stat-change {
        font-size: 0.75rem;
        font-weight: 600;
        padding: 0.2rem 0.6rem;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
    }

    .stat-card .stat-change.positive {
        color: #059669;
        background: #d1fae5;
    }

    .stat-card .stat-change.negative {
        color: #dc2626;
        background: #fee2e2;
    }

    /* ==================== SECTION TITLE ==================== */
    .section-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 1.25rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .section-title i {
        color: var(--primary-color);
    }

    /* ==================== CHART CARD ==================== */
    .chart-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        border: 1px solid #e5e7eb;
        transition: all 0.3s ease;
    }

    .chart-card:hover {
        box-shadow: var(--card-hover-shadow);
        border-color: transparent;
    }

    .chart-controls {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .chart-controls .btn-filter {
        padding: 0.3rem 1rem;
        border-radius: 50px;
        border: 2px solid #e5e7eb;
        background: transparent;
        font-size: 0.8rem;
        font-weight: 600;
        color: #64748b;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .chart-controls .btn-filter:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
    }

    .chart-controls .btn-filter.active {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }

    /* ==================== TOP PRODUCTS ==================== */
    .top-product-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.75rem 1rem;
        border-radius: 14px;
        transition: all 0.3s ease;
        border: 1px solid transparent;
        cursor: pointer;
    }

    .top-product-item:hover {
        background: #f8fafc;
        border-color: #e5e7eb;
    }

    .top-product-item .rank {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: var(--primary-light);
        color: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.85rem;
        flex-shrink: 0;
    }

    .top-product-item .rank.gold {
        background: #fef3c7;
        color: #d97706;
    }

    .top-product-item .rank.silver {
        background: #f1f5f9;
        color: #475569;
    }

    .top-product-item .rank.bronze {
        background: #fef3c7;
        color: #b45309;
    }

    .top-product-item .product-image {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        flex-shrink: 0;
    }

    .top-product-item .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .top-product-item .product-image .placeholder {
        font-size: 1.5rem;
        color: #94a3b8;
    }

    .top-product-item .product-info {
        flex: 1;
        min-width: 0;
    }

    .top-product-item .product-info .name {
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--dark-color);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .top-product-item .product-info .details {
        font-size: 0.8rem;
        color: #64748b;
    }

    /* ==================== RECENT ORDERS ==================== */
    .order-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.75rem 1rem;
        border-radius: 14px;
        transition: all 0.3s ease;
        border: 1px solid transparent;
        text-decoration: none;
        color: inherit;
    }

    .order-item:hover {
        background: #f8fafc;
        border-color: #e5e7eb;
        text-decoration: none;
        color: inherit;
    }

    .order-item .order-number {
        font-weight: 700;
        font-size: 0.9rem;
        color: var(--dark-color);
        min-width: 120px;
    }

    .order-item .order-date {
        font-size: 0.8rem;
        color: #64748b;
        min-width: 100px;
    }

    .order-item .order-amount {
        font-weight: 700;
        font-size: 0.95rem;
        color: var(--dark-color);
    }

    .order-item .order-status {
        font-size: 0.7rem;
        padding: 0.25rem 0.8rem;
        border-radius: 50px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    .order-status.pending {
        background: #fef3c7;
        color: #d97706;
    }

    .order-status.processing {
        background: #dbeafe;
        color: #2563eb;
    }

    .order-status.shipped {
        background: #e0f2fe;
        color: #0284c7;
    }

    .order-status.delivered {
        background: #d1fae5;
        color: #059669;
    }

    .order-status.completed {
        background: #d1fae5;
        color: #059669;
    }

    .order-status.cancelled {
        background: #fee2e2;
        color: #dc2626;
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 992px) {
        .profile-header {
            padding: 1.5rem;
        }
        .profile-avatar {
            width: 70px;
            height: 70px;
            font-size: 2rem;
        }
        .profile-info h1 {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .profile-header {
            padding: 1.25rem;
            border-radius: 20px;
        }
        .profile-avatar {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }
        .profile-info h1 {
            font-size: 1.25rem;
        }
        .profile-actions {
            width: 100%;
        }
        .profile-actions .btn {
            flex: 1;
            justify-content: center;
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
        }
        .stat-card .stat-number {
            font-size: 1.5rem;
        }
        .stat-card {
            padding: 1rem;
        }
        .chart-controls {
            justify-content: center;
        }
        .chart-controls .btn-filter {
            font-size: 0.7rem;
            padding: 0.2rem 0.8rem;
        }
        .order-item {
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .order-item .order-number {
            min-width: 80px;
            font-size: 0.8rem;
        }
        .order-item .order-date {
            min-width: 70px;
            font-size: 0.7rem;
        }
    }

    @media (max-width: 480px) {
        .profile-header {
            padding: 1rem;
        }
        .profile-avatar {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
        .profile-info h1 {
            font-size: 1.1rem;
        }
        .profile-actions .btn {
            font-size: 0.75rem;
            padding: 0.4rem 0.8rem;
        }
        .stat-card .stat-number {
            font-size: 1.2rem;
        }
        .stat-card .stat-icon {
            width: 38px;
            height: 38px;
            font-size: 1rem;
        }
        .section-title {
            font-size: 1rem;
        }
        .top-product-item {
            padding: 0.5rem 0.75rem;
        }
        .top-product-item .product-image {
            width: 36px;
            height: 36px;
        }
        .top-product-item .product-info .name {
            font-size: 0.8rem;
        }
    }

    /* ==================== EMPTY STATE ==================== */
    .empty-state-sm {
        text-align: center;
        padding: 2rem 1rem;
        color: #94a3b8;
    }

    .empty-state-sm i {
        font-size: 2.5rem;
        color: #cbd5e1;
        margin-bottom: 0.5rem;
    }

    .empty-state-sm p {
        font-size: 0.9rem;
        margin: 0;
    }

    /* ==================== ANIMATIONS ==================== */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .animate-on-scroll.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .stat-card {
        animation: fadeInUp 0.5s ease forwards;
        opacity: 0;
    }

    .stat-card:nth-child(1) { animation-delay: 0.05s; }
    .stat-card:nth-child(2) { animation-delay: 0.10s; }
    .stat-card:nth-child(3) { animation-delay: 0.15s; }
    .stat-card:nth-child(4) { animation-delay: 0.20s; }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideUp {
        from { transform: translateY(100%); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes slideDown {
        from { transform: translateY(0); opacity: 1; }
        to { transform: translateY(100%); opacity: 0; }
    }
</style>
{% endblock %}

{% block body %}

<!-- ==================== PROFILE HEADER ==================== -->
<div class=\"profile-header animate-on-scroll visible\">
    <div class=\"row align-items-center g-4\">
        <div class=\"col-md-auto\">
            <div class=\"profile-avatar\">
                {{ customer.fullName|default(customer.email)|slice(0, 2)|upper }}
            </div>
        </div>
        <div class=\"col-md\">
            <div class=\"profile-info\">
                <div class=\"d-flex align-items-center gap-3 flex-wrap\">
                    <h1>{{ customer.fullName|default('Client') }}</h1>
                    <span class=\"badge-status {{ customer.isActive ? 'active' : 'inactive' }}\">
                        <i class=\"fas fa-{{ customer.isActive ? 'check-circle' : 'times-circle' }} me-1\"></i>
                        {{ customer.isActive ? 'Compte actif' : 'Compte inactif' }}
                    </span>
                </div>
                <div class=\"d-flex flex-wrap gap-3 mt-1\">
                    <span><i class=\"fas fa-envelope me-1\"></i> {{ customer.email }}</span>
                    {% if customer.phone %}
                        <span><i class=\"fas fa-phone me-1\"></i> {{ customer.phone }}</span>
                    {% endif %}
                    {% if customer.city %}
                        <span><i class=\"fas fa-map-marker-alt me-1\"></i> {{ customer.city }}, {{ customer.country|default('Bénin') }}</span>
                    {% endif %}
                    <span><i class=\"fas fa-calendar-alt me-1\"></i> Membre depuis {{ customer.createdAt|date('d/m/Y') }}</span>
                </div>
            </div>
        </div>
        <div class=\"col-md-auto\">
            <div class=\"profile-actions\">
                <a href=\"{{ path('marketplace_profile_edit') }}\" class=\"btn btn-light\">
                    <i class=\"fas fa-user-edit me-1\"></i> Modifier
                </a>
                <a href=\"{{ path('marketplace_change_password') }}\" class=\"btn btn-outline-light\">
                    <i class=\"fas fa-key me-1\"></i> Mot de passe
                </a>
                <a href=\"{{ path('marketplace_orders') }}\" class=\"btn btn-outline-light\">
                    <i class=\"fas fa-list me-1\"></i> Commandes
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ==================== STATISTIQUES ==================== -->
<div class=\"row g-4 mb-4 animate-on-scroll\">
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"stat-card\">
            <div class=\"stat-icon primary\">
                <i class=\"fas fa-shopping-bag\"></i>
            </div>
            <div class=\"stat-number\">{{ orderStats.total_orders }}</div>
            <div class=\"stat-label\">Commandes totales</div>
            <div class=\"mt-1\">
                {% if orderStats.last_order %}
                    <small class=\"text-muted\">
                        <i class=\"fas fa-clock me-1\"></i>
                        Dernière le {{ orderStats.last_order.createdAt|date('d/m/Y') }}
                    </small>
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"stat-card\">
            <div class=\"stat-icon success\">
                <i class=\"fas fa-money-bill-wave\"></i>
            </div>
            <div class=\"stat-number\">{{ orderStats.total_spent|number_format(0, ',', ' ') }} FCFA</div>
            <div class=\"stat-label\">Total dépensé</div>
            <div class=\"mt-1\">
                <small class=\"text-muted\">
                    <i class=\"fas fa-calculator me-1\"></i>
                    Moyenne : {{ orderStats.average_order_value|number_format(0, ',', ' ') }} FCFA
                </small>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"stat-card\">
            <div class=\"stat-icon warning\">
                <i class=\"fas fa-truck\"></i>
            </div>
            <div class=\"stat-number\">{{ orderStats.status_counts.delivered|default(0) + orderStats.status_counts.completed|default(0) }}</div>
            <div class=\"stat-label\">Commandes livrées</div>
            <div class=\"mt-1\">
                <small class=\"text-muted\">
                    <i class=\"fas fa-check-circle text-success me-1\"></i>
                    {{ orderStats.status_counts.completed|default(0) }} terminées
                </small>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"stat-card\">
            <div class=\"stat-icon danger\">
                <i class=\"fas fa-clock\"></i>
            </div>
            <div class=\"stat-number\">{{ orderStats.status_counts.pending|default(0) + orderStats.status_counts.processing|default(0) }}</div>
            <div class=\"stat-label\">Commandes en cours</div>
            <div class=\"mt-1\">
                <small class=\"text-muted\">
                    <i class=\"fas fa-hourglass-half me-1\"></i>
                    {{ orderStats.status_counts.pending|default(0) }} en attente
                </small>
            </div>
        </div>
    </div>
</div>

<!-- ==================== GRAPHIQUES ==================== -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-lg-8 animate-on-scroll\">
        <div class=\"chart-card\">
            <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-3\">
                <div class=\"section-title mb-0\">
                    <i class=\"fas fa-chart-area\"></i>
                    Évolution des commandes
                </div>
                <div class=\"chart-controls\" id=\"chartControls\">
                    <button class=\"btn-filter\" data-period=\"week\">Semaine</button>
                    <button class=\"btn-filter\" data-period=\"month\">Mois</button>
                    <button class=\"btn-filter active\" data-period=\"year\">Année</button>
                </div>
            </div>
            <div id=\"ordersChart\"></div>
        </div>
    </div>
    <div class=\"col-lg-4 animate-on-scroll\">
        <div class=\"chart-card\" style=\"height: 100%;\">
            <div class=\"section-title\">
                <i class=\"fas fa-chart-pie\"></i>
                Répartition des commandes
            </div>
            <div id=\"statusChart\"></div>
            <div class=\"mt-3\">
                {% for status, label in statuses|default([]) %}
                    {% set count = orderStats.status_counts[status]|default(0) %}
                    {% if count > 0 %}
                        <div class=\"d-flex justify-content-between align-items-center mb-1\">
                            <span class=\"text-muted small\">
                                <span class=\"order-status {{ status }} d-inline-block\" style=\"width:10px;height:10px;border-radius:50%;padding:0;margin-right:6px;\"></span>
                                {{ label }}
                            </span>
                            <span class=\"fw-semibold small\">{{ count }}</span>
                        </div>
                    {% endif %}
                {% endfor %}
            </div>
        </div>
    </div>
</div>

<!-- ==================== TOP PRODUITS & DERNIÈRES COMMANDES ==================== -->
<div class=\"row g-4\">
    <div class=\"col-lg-6 animate-on-scroll\">
        <div class=\"chart-card\">
            <div class=\"section-title\">
                <i class=\"fas fa-star text-warning\"></i>
                Top produits les plus achetés
            </div>
            {% if topProducts|length > 0 %}
                {% for product in topProducts %}
                    <div class=\"top-product-item\">
                        <div class=\"rank {% if loop.index == 1 %}gold{% elseif loop.index == 2 %}silver{% elseif loop.index == 3 %}bronze{% endif %}\">
                            #{{ loop.index }}
                        </div>
                        <div class=\"product-image\">
                            {% if product.image %}
                                <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" alt=\"{{ product.name }}\" loading=\"lazy\">
                            {% else %}
                                <span class=\"placeholder\"><i class=\"fas fa-box\"></i></span>
                            {% endif %}
                        </div>
                        <div class=\"product-info\">
                            <div class=\"name\">{{ product.name }}</div>
                            <div class=\"details\">
                                {{ product.total_quantity }} unités achetées · 
                                {{ product.total_amount|number_format(0, ',', ' ') }} FCFA
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"empty-state-sm\">
                    <i class=\"fas fa-shopping-bag\"></i>
                    <p>Vous n'avez pas encore acheté de produits</p>
                </div>
            {% endif %}
        </div>
    </div>
    <div class=\"col-lg-6 animate-on-scroll\">
        <div class=\"chart-card\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <div class=\"section-title mb-0\">
                    <i class=\"fas fa-clock\"></i>
                    Dernières commandes
                </div>
                <a href=\"{{ path('marketplace_orders') }}\" class=\"btn btn-sm btn-outline-primary rounded-pill\">
                    Voir tout <i class=\"fas fa-arrow-right ms-1\"></i>
                </a>
            </div>
            {% if recentOrders|length > 0 %}
                {% for order in recentOrders %}
                    <a href=\"{{ path('marketplace_order_detail', {id: order.id}) }}\" class=\"order-item\">
                        <div class=\"order-number\">#{{ order.orderNumber }}</div>
                        <div class=\"order-date\">{{ order.createdAt|date('d/m/Y H:i') }}</div>
                        <div class=\"order-amount\">{{ order.grandTotal|number_format(0, ',', ' ') }} FCFA</div>
                        <span class=\"order-status {{ order.status }}\">
                            {{ order.statusLabel }}
                        </span>
                    </a>
                {% endfor %}
            {% else %}
                <div class=\"empty-state-sm\">
                    <i class=\"fas fa-inbox\"></i>
                    <p>Vous n'avez pas encore de commandes</p>
                </div>
            {% endif %}
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/apexcharts@3.49.1/dist/apexcharts.min.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== DONNÉES INITIALES ====================
    const chartData = {{ chartData|json_encode|raw }};
    const statusCounts = {{ orderStats.status_counts|json_encode|raw }};
    const statusLabels = {
        pending: 'En attente',
        processing: 'En traitement',
        shipped: 'Expédiée',
        delivered: 'Livrée',
        completed: 'Terminée',
        cancelled: 'Annulée'
    };

    // ==================== GRAPHIQUE DES COMMANDES ====================
    const orderChartOptions = {
        series: [{
            name: 'Montant (FCFA)',
            data: chartData.data || []
        }],
        chart: {
            type: 'area',
            height: 280,
            toolbar: { show: false },
            zoom: { enabled: false },
            fontFamily: 'Inter, sans-serif',
            animations: {
                enabled: true,
                easing: 'easeinout',
                speed: 800
            }
        },
        dataLabels: { enabled: false },
        stroke: {
            curve: 'smooth',
            width: 3,
            colors: ['#0463f1']
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0.05,
                stops: [0, 100],
                colorStops: [
                    { offset: 0, color: '#0463f1' },
                    { offset: 100, color: '#667eea' }
                ]
            }
        },
        grid: {
            borderColor: '#e5e7eb',
            strokeDashArray: 4,
            xaxis: { lines: { show: true } },
            yaxis: { lines: { show: true } }
        },
        xaxis: {
            categories: chartData.labels || [],
            labels: {
                style: {
                    colors: '#64748b',
                    fontSize: '11px',
                    fontWeight: 500
                }
            },
            axisBorder: { show: false },
            axisTicks: { show: false }
        },
        yaxis: {
            labels: {
                style: {
                    colors: '#64748b',
                    fontSize: '11px',
                    fontWeight: 500
                },
                formatter: function(value) {
                    return value.toLocaleString('fr-FR') + ' FCFA';
                }
            }
        },
        tooltip: {
            theme: 'light',
            style: {
                fontSize: '12px',
                fontFamily: 'Inter, sans-serif'
            },
            y: {
                formatter: function(value) {
                    return value.toLocaleString('fr-FR') + ' FCFA';
                }
            }
        }
    };

    const orderChart = new ApexCharts(
        document.querySelector('#ordersChart'),
        orderChartOptions
    );
    orderChart.render();

    // ==================== GRAPHIQUE DES STATUTS ====================
    const statusColors = {
        pending: '#f59e0b',
        processing: '#3b82f6',
        shipped: '#0284c7',
        delivered: '#059669',
        completed: '#10b981',
        cancelled: '#ef4444'
    };

    const statusData = [];
    const statusLabelsArray = [];

    for (const [status, count] of Object.entries(statusCounts)) {
        if (count > 0 && statusLabels[status]) {
            statusData.push(count);
            statusLabelsArray.push(statusLabels[status]);
        }
    }

    // Couleurs correspondantes
    const colors = statusData.map((_, index) => {
        const statusKeys = Object.keys(statusCounts).filter(s => statusCounts[s] > 0 && statusLabels[s]);
        return statusColors[statusKeys[index]] || '#64748b';
    });

    const statusChartOptions = {
        series: statusData,
        chart: {
            type: 'donut',
            height: 220,
            fontFamily: 'Inter, sans-serif',
            animations: {
                enabled: true,
                easing: 'easeinout',
                speed: 800
            }
        },
        colors: colors,
        labels: statusLabelsArray,
        legend: { show: false },
        dataLabels: {
            enabled: true,
            formatter: function(value, { seriesIndex }) {
                const total = seriesData.reduce((a, b) => a + b, 0);
                const percent = total > 0 ? ((seriesData[seriesIndex] / total) * 100).toFixed(1) : 0;
                return percent + '%';
            },
            style: {
                fontSize: '11px',
                fontWeight: 600,
                colors: ['#1f2937']
            }
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '60%',
                    labels: {
                        show: true,
                        total: {
                            show: true,
                            label: 'Total',
                            formatter: function() {
                                return seriesData.reduce((a, b) => a + b, 0);
                            },
                            style: {
                                fontSize: '14px',
                                fontWeight: 700,
                                color: '#1f2937'
                            }
                        },
                        value: {
                            style: {
                                fontSize: '12px',
                                fontWeight: 600,
                                color: '#1f2937'
                            }
                        }
                    }
                }
            }
        },
        tooltip: {
            y: {
                formatter: function(value) {
                    return value + ' commandes';
                }
            }
        }
    };

    // Variable pour stocker les données séries pour le total
    const seriesData = statusData;

    const statusChart = new ApexCharts(
        document.querySelector('#statusChart'),
        statusChartOptions
    );
    statusChart.render();

    // ==================== FILTRES PÉRIODE ====================
    const filterButtons = document.querySelectorAll('#chartControls .btn-filter');
    let currentPeriod = 'year';

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const period = this.dataset.period;
            
            // Mettre à jour l'état actif
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            if (period === currentPeriod) return;
            currentPeriod = period;
            
            // Afficher un loader
            orderChart.showLoading();
            
            // Récupérer les nouvelles données
            fetch('{{ path('marketplace_profile_stats_data') }}?period=' + period)
                .then(response => response.json())
                .then(data => {
                    if (data.chartData) {
                        // Mettre à jour le graphique
                        orderChart.updateOptions({
                            xaxis: {
                                categories: data.chartData.labels || []
                            }
                        });
                        orderChart.updateSeries([{
                            data: data.chartData.data || []
                        }]);
                        orderChart.hideLoading();
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    orderChart.hideLoading();
                });
        });
    });

    // ==================== ANIMATION ON SCROLL ====================
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // ==================== NOTIFICATION ====================
    function showNotification(message, type = 'info') {
        const colors = {
            success: 'bg-success',
            error: 'bg-danger',
            info: 'bg-primary',
            warning: 'bg-warning'
        };
        const icons = {
            success: 'fa-check-circle',
            error: 'fa-exclamation-circle',
            info: 'fa-info-circle',
            warning: 'fa-exclamation-triangle'
        };
        
        const notification = document.createElement('div');
        notification.className = `position-fixed bottom-0 end-0 p-3 m-3 \${colors[type] || colors.info} text-white rounded-4 shadow-lg`;
        notification.style.zIndex = '9999';
        notification.style.animation = 'slideUp 0.3s ease';
        notification.style.maxWidth = '400px';
        notification.innerHTML = `
            <div class=\"d-flex align-items-center gap-2\">
                <i class=\"fas \${icons[type] || icons.info} fa-lg\"></i>
                <span>\${message}</span>
                <button type=\"button\" class=\"btn-close btn-close-white ms-2\" onclick=\"this.closest('div.position-fixed').remove()\"></button>
            </div>
        `;
        document.body.appendChild(notification);
        setTimeout(() => {
            notification.style.animation = 'slideDown 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 3500);
    }

    window.showNotification = showNotification;
});
</script>
{% endblock %}", "marketplace/profile/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\profile\\index.html.twig");
    }
}
