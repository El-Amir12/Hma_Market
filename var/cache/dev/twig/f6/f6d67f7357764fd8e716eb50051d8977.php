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

/* marketplace/profile/orders.html.twig */
class __TwigTemplate_6ea7aadc27869815a10ab14926fab59b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/profile/orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/profile/orders.html.twig"));

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

        yield "Mes commandes - HMA Marketplace";
        
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
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --card-radius: 16px;
        --card-shadow: 0 2px 16px rgba(0,0,0,0.08);
        --card-shadow-hover: 0 8px 32px rgba(0,0,0,0.12);
    }

    .orders-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .orders-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .orders-header h1 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .orders-header h1 .badge {
        font-size: 0.9rem;
        background: var(--primary-gradient);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
    }

    /* ==================== FILTERS CARD ==================== */
    .filters-card {
        background: white;
        border-radius: var(--card-radius);
        box-shadow: var(--card-shadow);
        padding: 1.5rem;
        margin-bottom: 2rem;
        border: 1px solid #f1f5f9;
        transition: all 0.3s ease;
    }

    .filters-card:hover {
        box-shadow: var(--card-shadow-hover);
    }

    .filters-card .filters-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.25rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .filters-card .filters-header .filters-title {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-weight: 600;
        color: #0f172a;
        font-size: 0.95rem;
    }

    .filters-card .filters-header .filters-title i {
        color: var(--primary-color);
    }

    .filters-card .filters-header .filters-title .filter-count {
        background: #f1f5f9;
        padding: 0.05rem 0.5rem;
        border-radius: 50px;
        font-size: 0.7rem;
        color: #64748b;
        font-weight: 500;
    }

    .filters-card .filters-header .filters-actions {
        display: flex;
        gap: 0.5rem;
        align-items: center;
    }

    .filters-card .filters-header .filters-actions .btn-filter {
        padding: 0.5rem 1.5rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.85rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .filters-card .filters-header .filters-actions .btn-filter:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
    }

    .filters-card .filters-header .filters-actions .btn-filter:active {
        transform: scale(0.95);
    }

    .filters-card .filters-header .filters-actions .btn-reset {
        padding: 0.5rem 1rem;
        background: #f1f5f9;
        color: #64748b;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.85rem;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        gap: 0.4rem;
        text-decoration: none;
    }

    .filters-card .filters-header .filters-actions .btn-reset:hover {
        background: #e2e8f0;
        color: #0f172a;
        transform: translateY(-2px);
    }

    .filters-card .filters-header .filters-actions .btn-reset:active {
        transform: scale(0.95);
    }

    .filters-card .filters-body {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 1rem;
        align-items: end;
    }

    .filters-card .filter-group {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .filters-card .filter-group label {
        font-size: 0.7rem;
        font-weight: 700;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }

    .filters-card .filter-group label .label-icon {
        font-size: 0.6rem;
    }

    .filters-card .filter-group input,
    .filters-card .filter-group select {
        padding: 0.6rem 0.75rem;
        border: 1.5px solid #e5e7eb;
        border-radius: 10px;
        font-size: 0.9rem;
        transition: all 0.2s ease;
        background: white;
        width: 100%;
        color: #0f172a;
    }

    .filters-card .filter-group input::placeholder {
        color: #94a3b8;
        font-size: 0.85rem;
    }

    .filters-card .filter-group input:focus,
    .filters-card .filter-group select:focus {
        border-color: var(--primary-color);
        outline: none;
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.1);
    }

    .filters-card .filter-group select {
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%2364748b' d='M6 8L1 3h10z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        padding-right: 2.5rem;
        cursor: pointer;
    }

    .filters-card .filter-group input[type=\"date\"] {
        cursor: pointer;
    }

    .filters-card .filter-group input[type=\"date\"]::-webkit-calendar-picker-indicator {
        cursor: pointer;
        opacity: 0.6;
    }

    .filters-card .filter-group input[type=\"date\"]::-webkit-calendar-picker-indicator:hover {
        opacity: 1;
    }

    /* ==================== ACTIVE FILTERS ==================== */
    .active-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #f1f5f9;
    }

    .active-filters .filter-tag {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        background: #f1f5f9;
        border-radius: 50px;
        font-size: 0.7rem;
        color: #475569;
    }

    .active-filters .filter-tag i {
        font-size: 0.6rem;
        color: #94a3b8;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .active-filters .filter-tag i:hover {
        color: #ef4444;
    }

    .active-filters .filter-tag .tag-label {
        font-weight: 500;
        color: #64748b;
    }

    .active-filters .filter-tag .tag-value {
        font-weight: 600;
        color: #0f172a;
    }

    /* ==================== ORDERS LIST ==================== */
    .orders-empty {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 2px dashed #e5e7eb;
    }

    .orders-empty i {
        font-size: 4rem;
        color: #94a3b8;
        margin-bottom: 1rem;
    }

    .orders-empty h3 {
        color: #0f172a;
        font-weight: 600;
    }

    .orders-empty p {
        color: #94a3b8;
        margin-bottom: 1.5rem;
    }

    .order-card {
        background: white;
        border-radius: var(--card-radius);
        box-shadow: var(--card-shadow);
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        border: 1px solid #f1f5f9;
    }

    .order-card:hover {
        box-shadow: var(--card-shadow-hover);
        border-color: var(--primary-color);
    }

    .order-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #f1f5f9;
        margin-bottom: 1rem;
    }

    .order-header .order-number {
        font-weight: 700;
        font-size: 1.1rem;
        color: #0f172a;
    }

    .order-header .order-number .order-id {
        color: var(--primary-color);
    }

    .order-header .order-date {
        color: #94a3b8;
        font-size: 0.85rem;
    }

    .order-status {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    .order-status i {
        font-size: 0.6rem;
    }

    .order-status.paid {
        background: #dcfce7;
        color: #16a34a;
    }

    .order-status.pending {
        background: #fef3c7;
        color: #92400e;
    }

    .order-status.completed {
        background: #dbeafe;
        color: #1d4ed8;
    }

    .order-status.cancelled {
        background: #fee2e2;
        color: #dc2626;
    }

    .order-status.refunded {
        background: #f3e8ff;
        color: #7c3aed;
    }

    .order-status.processing {
        background: #e0f2fe;
        color: #0369a1;
    }

    .order-status.shipped {
        background: #d1fae5;
        color: #059669;
    }

    .order-body {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 1.5rem;
        align-items: center;
    }

    .order-items {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .order-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem;
        background: #f8fafc;
        border-radius: 8px;
        transition: background 0.2s ease;
    }

    .order-item:hover {
        background: #f1f5f9;
    }

    /* ✅ Icône générique pour les articles de la commande */
    .order-item-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        background: var(--primary-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .order-item-details {
        flex: 1;
    }

    .order-item-details .item-name {
        font-weight: 600;
        color: #0f172a;
        font-size: 0.9rem;
    }

    .order-item-details .item-meta {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    .order-total {
        text-align: right;
        flex-shrink: 0;
    }

    .order-total .total-label {
        font-size: 0.8rem;
        color: #94a3b8;
    }

    .order-total .total-amount {
        font-size: 1.3rem;
        font-weight: 700;
        color: #0f172a;
    }

    .order-total .total-items {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    .order-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #f1f5f9;
    }

    .btn-order-detail {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.4rem 1rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.8rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .btn-order-detail:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
        color: white;
    }

    /* ==================== PAGINATION ==================== */
    .pagination-modern {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.4rem;
        margin-top: 2rem;
        flex-wrap: wrap;
    }

    .pagination-modern .page-item {
        list-style: none;
    }

    .pagination-modern .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 40px;
        height: 40px;
        border-radius: 12px;
        border: 2px solid #e5e7eb;
        color: #475569;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        background: white;
        cursor: pointer;
    }

    .pagination-modern .page-link:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
    }

    .pagination-modern .page-item.active .page-link {
        background: var(--primary-gradient);
        border-color: var(--primary-color);
        color: white;
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.25);
    }

    .pagination-modern .page-item.disabled .page-link {
        opacity: 0.4;
        cursor: not-allowed;
        pointer-events: none;
    }

    .pagination-modern .page-info {
        color: #94a3b8;
        font-size: 0.85rem;
        padding: 0 0.5rem;
        font-weight: 500;
    }

    /* ==================== TOAST ==================== */
    .toast-container {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .toast {
        background: white;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.15);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        min-width: 300px;
        animation: slideIn 0.3s ease;
        border-left: 4px solid var(--primary-color);
    }

    .toast.success {
        border-left-color: #16a34a;
    }

    .toast.error {
        border-left-color: #ef4444;
    }

    .toast.warning {
        border-left-color: #f59e0b;
    }

    .toast i {
        font-size: 1.2rem;
    }

    .toast.success i {
        color: #16a34a;
    }

    .toast.error i {
        color: #ef4444;
    }

    .toast.warning i {
        color: #f59e0b;
    }

    .toast .toast-message {
        flex: 1;
        font-size: 0.9rem;
        color: #0f172a;
    }

    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 1024px) {
        .filters-card .filters-body {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 768px) {
        .order-body {
            grid-template-columns: 1fr;
        }

        .order-total {
            text-align: left;
            width: 100%;
        }

        .order-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .orders-header h1 {
            font-size: 1.4rem;
        }

        .order-card {
            padding: 1rem;
        }

        .order-item {
            flex-wrap: wrap;
        }

        .filters-card .filters-body {
            grid-template-columns: 1fr;
        }

        .filters-card .filters-header {
            flex-direction: column;
            align-items: stretch;
        }

        .filters-card .filters-header .filters-actions {
            justify-content: flex-end;
            flex-wrap: wrap;
        }

        .filters-card .filters-header .filters-actions .btn-filter {
            flex: 1;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .order-item-icon {
            width: 32px;
            height: 32px;
            font-size: 0.9rem;
        }

        .order-total .total-amount {
            font-size: 1.1rem;
        }

        .toast {
            min-width: auto;
            max-width: 90vw;
            padding: 0.75rem 1rem;
        }

        .pagination-modern .page-link {
            min-width: 32px;
            height: 32px;
            font-size: 0.75rem;
            border-radius: 8px;
        }

        .filters-card .filters-header .filters-actions {
            flex-direction: column;
            width: 100%;
        }

        .filters-card .filters-header .filters-actions .btn-filter,
        .filters-card .filters-header .filters-actions .btn-reset {
            width: 100%;
            justify-content: center;
        }

        .active-filters .filter-tag {
            font-size: 0.65rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 713
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

        // line 714
        yield "<div class=\"orders-container\">
    <div class=\"orders-header\">
        <h1>
            <i class=\"fas fa-shopping-bag text-primary\"></i>
            Mes commandes
            <span class=\"badge\">";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalOrders"]) || array_key_exists("totalOrders", $context) ? $context["totalOrders"] : (function () { throw new RuntimeError('Variable "totalOrders" does not exist.', 719, $this->source); })()), "html", null, true);
        yield "</span>
        </h1>
        <a href=\"";
        // line 721
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" class=\"btn btn-outline-primary btn-sm\">
            <i class=\"fas fa-arrow-left me-2\"></i>
            Retour à l'accueil
        </a>
    </div>

    <!-- ==================== FILTRES ==================== -->
    <div class=\"filters-card\">
        <form method=\"GET\" action=\"";
        // line 729
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
        yield "\" id=\"filterForm\">
            <div class=\"filters-header\">
                <div class=\"filters-title\">
                    <i class=\"fas fa-sliders-h\"></i>
                    Filtrer mes commandes
                    <span class=\"filter-count\" id=\"filterCount\">
                        ";
        // line 735
        $context["activeFilters"] = 0;
        // line 736
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 736, $this->source); })()), "search", [], "any", false, false, false, 736)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["activeFilters"] = ((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 736, $this->source); })()) + 1);
        }
        // line 737
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 737, $this->source); })()), "status", [], "any", false, false, false, 737)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["activeFilters"] = ((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 737, $this->source); })()) + 1);
        }
        // line 738
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 738, $this->source); })()), "date_from", [], "any", false, false, false, 738)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["activeFilters"] = ((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 738, $this->source); })()) + 1);
        }
        // line 739
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 739, $this->source); })()), "date_to", [], "any", false, false, false, 739)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["activeFilters"] = ((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 739, $this->source); })()) + 1);
        }
        // line 740
        yield "                        ";
        if (((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 740, $this->source); })()) > 0)) {
            yield "(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 740, $this->source); })()), "html", null, true);
            yield ")";
        }
        // line 741
        yield "                    </span>
                </div>
                <div class=\"filters-actions\">
                    <a href=\"";
        // line 744
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
        yield "\" class=\"btn-reset\" title=\"Réinitialiser les filtres\">
                        <i class=\"fas fa-times\"></i>
                        <span class=\"d-none d-sm-inline\">Réinitialiser</span>
                    </a>
                    <button type=\"submit\" class=\"btn-filter\">
                        <i class=\"fas fa-search\"></i>
                        <span class=\"d-none d-sm-inline\">Appliquer les filtres</span>
                        <span class=\"d-inline d-sm-none\">Filtrer</span>
                    </button>
                </div>
            </div>

            <div class=\"filters-body\">
                <div class=\"filter-group\">
                    <label for=\"search\">
                        <span class=\"label-icon\">🔍</span> Rechercher
                    </label>
                    <input type=\"text\" id=\"search\" name=\"search\" 
                           placeholder=\"N° commande, produit...\" 
                           value=\"";
        // line 763
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 763, $this->source); })()), "search", [], "any", false, false, false, 763), "html", null, true);
        yield "\">
                </div>
                
                <div class=\"filter-group\">
                    <label for=\"status\">
                        <span class=\"label-icon\">📊</span> Statut
                    </label>
                    <select id=\"status\" name=\"status\">
                        <option value=\"\">Tous les statuts</option>
                        ";
        // line 772
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 772, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 773
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 773, $this->source); })()), "status", [], "any", false, false, false, 773) == $context["key"])) {
                yield "selected";
            }
            yield ">
                                ";
            // line 774
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 777
        yield "                    </select>
                </div>
                
                <div class=\"filter-group\">
                    <label for=\"date_from\">
                        <span class=\"label-icon\">📅</span> Date début
                    </label>
                    <input type=\"date\" id=\"date_from\" name=\"date_from\" value=\"";
        // line 784
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 784, $this->source); })()), "date_from", [], "any", false, false, false, 784), "html", null, true);
        yield "\">
                </div>
                
                <div class=\"filter-group\">
                    <label for=\"date_to\">
                        <span class=\"label-icon\">📅</span> Date fin
                    </label>
                    <input type=\"date\" id=\"date_to\" name=\"date_to\" value=\"";
        // line 791
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 791, $this->source); })()), "date_to", [], "any", false, false, false, 791), "html", null, true);
        yield "\">
                </div>
            </div>

            <!-- Active Filters Tags -->
            <div class=\"active-filters\" id=\"activeFilters\" style=\"";
        // line 796
        if (((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 796, $this->source); })()) == 0)) {
            yield "display:none;";
        }
        yield "\">
                ";
        // line 797
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 797, $this->source); })()), "search", [], "any", false, false, false, 797)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 798
            yield "                    <span class=\"filter-tag\">
                        <span class=\"tag-label\">Recherche:</span>
                        <span class=\"tag-value\">";
            // line 800
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 800, $this->source); })()), "search", [], "any", false, false, false, 800), "html", null, true);
            yield "</span>
                        <i class=\"fas fa-times\" onclick=\"removeFilter('search')\"></i>
                    </span>
                ";
        }
        // line 804
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 804, $this->source); })()), "status", [], "any", false, false, false, 804)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 805
            yield "                    <span class=\"filter-tag\">
                        <span class=\"tag-label\">Statut:</span>
                        <span class=\"tag-value\">";
            // line 807
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statuses"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 807, $this->source); })()), "status", [], "any", false, false, false, 807), [], "array", true, true, false, 807) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 807, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 807, $this->source); })()), "status", [], "any", false, false, false, 807), [], "array", false, false, false, 807)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 807, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 807, $this->source); })()), "status", [], "any", false, false, false, 807), [], "array", false, false, false, 807), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 807, $this->source); })()), "status", [], "any", false, false, false, 807), "html", null, true)));
            yield "</span>
                        <i class=\"fas fa-times\" onclick=\"removeFilter('status')\"></i>
                    </span>
                ";
        }
        // line 811
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 811, $this->source); })()), "date_from", [], "any", false, false, false, 811)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 812
            yield "                    <span class=\"filter-tag\">
                        <span class=\"tag-label\">Du:</span>
                        <span class=\"tag-value\">";
            // line 814
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 814, $this->source); })()), "date_from", [], "any", false, false, false, 814), "d/m/Y"), "html", null, true);
            yield "</span>
                        <i class=\"fas fa-times\" onclick=\"removeFilter('date_from')\"></i>
                    </span>
                ";
        }
        // line 818
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 818, $this->source); })()), "date_to", [], "any", false, false, false, 818)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 819
            yield "                    <span class=\"filter-tag\">
                        <span class=\"tag-label\">Au:</span>
                        <span class=\"tag-value\">";
            // line 821
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 821, $this->source); })()), "date_to", [], "any", false, false, false, 821), "d/m/Y"), "html", null, true);
            yield "</span>
                        <i class=\"fas fa-times\" onclick=\"removeFilter('date_to')\"></i>
                    </span>
                ";
        }
        // line 825
        yield "                ";
        if (((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 825, $this->source); })()) > 1)) {
            // line 826
            yield "                    <span class=\"filter-tag\" style=\"background: var(--primary-gradient); color: white;\">
                        <i class=\"fas fa-undo-alt me-1\"></i>
                        <a href=\"";
            // line 828
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
            yield "\" style=\"color: white; text-decoration: none; font-weight: 600;\">Tout effacer</a>
                    </span>
                ";
        }
        // line 831
        yield "            </div>
        </form>
    </div>

    <!-- ==================== LISTE DES COMMANDES ==================== -->
    ";
        // line 836
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 836, $this->source); })())) > 0)) {
            // line 837
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 837, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 838
                yield "            <div class=\"order-card\">
                <div class=\"order-header\">
                    <div>
                        <div class=\"order-number\">
                            Commande #<span class=\"order-id\">";
                // line 842
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 842), "html", null, true);
                yield "</span>
                        </div>
                        <div class=\"order-date\">
                            <i class=\"far fa-calendar-alt me-1\"></i>
                            ";
                // line 846
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 846), "d/m/Y à H:i"), "html", null, true);
                yield "
                        </div>
                    </div>
                    <div>
                        <span class=\"order-status\" style=\"background: ";
                // line 850
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentStatus", [], "any", false, false, false, 850) == "paid")) ? ("#dcfce7") : ("#fef3c7"));
                yield "; color: ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentStatus", [], "any", false, false, false, 850) == "paid")) ? ("#16a34a") : ("#92400e"));
                yield ";\">
                            <i class=\"fas ";
                // line 851
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentStatus", [], "any", false, false, false, 851) == "paid")) ? ("fa-check-circle") : ("fa-clock"));
                yield "\"></i>
                            ";
                // line 852
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentStatus", [], "any", false, false, false, 852) == "paid")) ? ("Payée") : ("En attente"));
                yield "
                        </span>
                        <span class=\"order-status\" style=\"background: var(--bs-";
                // line 854
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statusColor", [], "any", true, true, false, 854)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statusColor", [], "any", false, false, false, 854), "secondary")) : ("secondary")), "html", null, true);
                yield "-subtle); color: var(--bs-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statusColor", [], "any", true, true, false, 854)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statusColor", [], "any", false, false, false, 854), "secondary")) : ("secondary")), "html", null, true);
                yield "-text); margin-left: 0.5rem;\">
                            <i class=\"fas ";
                // line 855
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 855) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 855) == "delivered"))) ? ("fa-check-circle") : ("fa-clock"));
                yield "\"></i>
                            ";
                // line 856
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statusLabel", [], "any", true, true, false, 856)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statusLabel", [], "any", false, false, false, 856), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 856))) : (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 856))), "html", null, true);
                yield "
                        </span>
                    </div>
                </div>

                <div class=\"order-body\">
                    <div class=\"order-items\">
                        ";
                // line 863
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 863), 0, 3));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 864
                    yield "                            <div class=\"order-item\">
                                <div class=\"order-item-icon\">
                                    <i class=\"fas fa-box\"></i>
                                </div>
                                <div class=\"order-item-details\">
                                    <div class=\"item-name\">";
                    // line 869
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 869), "html", null, true);
                    yield "</div>
                                    <div class=\"item-meta\">
                                        ";
                    // line 871
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 871), "html", null, true);
                    yield " x ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 871), 0, ",", " "), "html", null, true);
                    yield " FCFA
                                        ";
                    // line 872
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 872)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 873
                        yield "                                            <span class=\"badge\" style=\"background: #dcfce7; color: #16a34a; font-size: 0.6rem; padding: 0.05rem 0.4rem;\">
                                                <i class=\"fas fa-tag me-1\"></i>";
                        // line 874
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 874), "html", null, true);
                        yield "
                                            </span>
                                        ";
                    }
                    // line 877
                    yield "                                    </div>
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 881
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 881)) > 3)) {
                    // line 882
                    yield "                            <div class=\"text-muted small\">
                                <i class=\"fas fa-plus-circle me-1\"></i>
                                ";
                    // line 884
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 884)) - 3), "html", null, true);
                    yield " autre(s) article(s)
                            </div>
                        ";
                }
                // line 887
                yield "                    </div>

                    <div class=\"order-total\">
                        <div class=\"total-label\">Total</div>
                        <div class=\"total-amount\">";
                // line 891
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 891), 0, ",", " "), "html", null, true);
                yield " FCFA</div>
                        <div class=\"total-items\">";
                // line 892
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 892)), "html", null, true);
                yield " article(s)</div>
                    </div>
                </div>

                <div class=\"order-actions\">
                    <a href=\"";
                // line 897
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_order_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 897)]), "html", null, true);
                yield "\" class=\"btn-order-detail\">
                        <i class=\"fas fa-eye\"></i>
                        Voir le détail
                    </a>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 904
            yield "
        <!-- Pagination -->
        ";
            // line 906
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 906, $this->source); })()) > 1)) {
                // line 907
                yield "            <nav class=\"pagination-modern\" aria-label=\"Pagination des commandes\">
                <ul class=\"pagination\">
                    ";
                // line 909
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 909, $this->source); })()) > 1)) {
                    // line 910
                    yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                    // line 911
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 911, $this->source); })()) - 1), "status" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 911, $this->source); })()), "status", [], "any", false, false, false, 911), "search" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 911, $this->source); })()), "search", [], "any", false, false, false, 911), "date_from" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 911, $this->source); })()), "date_from", [], "any", false, false, false, 911), "date_to" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 911, $this->source); })()), "date_to", [], "any", false, false, false, 911)]), "html", null, true);
                    yield "\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                    ";
                } else {
                    // line 916
                    yield "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-left\"></i></span>
                        </li>
                    ";
                }
                // line 920
                yield "
                    ";
                // line 921
                $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 921, $this->source); })()) - 2));
                // line 922
                yield "                    ";
                $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 922, $this->source); })()), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 922, $this->source); })()) + 2));
                // line 923
                yield "
                    ";
                // line 924
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 924, $this->source); })()) > 1)) {
                    // line 925
                    yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                    // line 926
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders", ["page" => 1, "status" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 926, $this->source); })()), "status", [], "any", false, false, false, 926), "search" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 926, $this->source); })()), "search", [], "any", false, false, false, 926), "date_from" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 926, $this->source); })()), "date_from", [], "any", false, false, false, 926), "date_to" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 926, $this->source); })()), "date_to", [], "any", false, false, false, 926)]), "html", null, true);
                    yield "\">1</a>
                        </li>
                        ";
                    // line 928
                    if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 928, $this->source); })()) > 2)) {
                        // line 929
                        yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                    }
                    // line 931
                    yield "                    ";
                }
                // line 932
                yield "
                    ";
                // line 933
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 933, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 933, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 934
                    yield "                        <li class=\"page-item ";
                    if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 934, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\">
                            <a class=\"page-link\" href=\"";
                    // line 935
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders", ["page" => $context["page"], "status" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 935, $this->source); })()), "status", [], "any", false, false, false, 935), "search" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 935, $this->source); })()), "search", [], "any", false, false, false, 935), "date_from" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 935, $this->source); })()), "date_from", [], "any", false, false, false, 935), "date_to" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 935, $this->source); })()), "date_to", [], "any", false, false, false, 935)]), "html", null, true);
                    yield "\">
                                ";
                    // line 936
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 940
                yield "
                    ";
                // line 941
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 941, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 941, $this->source); })()))) {
                    // line 942
                    yield "                        ";
                    if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 942, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 942, $this->source); })()) - 1))) {
                        // line 943
                        yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                    }
                    // line 945
                    yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                    // line 946
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders", ["page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 946, $this->source); })()), "status" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 946, $this->source); })()), "status", [], "any", false, false, false, 946), "search" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 946, $this->source); })()), "search", [], "any", false, false, false, 946), "date_from" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 946, $this->source); })()), "date_from", [], "any", false, false, false, 946), "date_to" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 946, $this->source); })()), "date_to", [], "any", false, false, false, 946)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 946, $this->source); })()), "html", null, true);
                    yield "</a>
                        </li>
                    ";
                }
                // line 949
                yield "
                    ";
                // line 950
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 950, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 950, $this->source); })()))) {
                    // line 951
                    yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                    // line 952
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 952, $this->source); })()) + 1), "status" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 952, $this->source); })()), "status", [], "any", false, false, false, 952), "search" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 952, $this->source); })()), "search", [], "any", false, false, false, 952), "date_from" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 952, $this->source); })()), "date_from", [], "any", false, false, false, 952), "date_to" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 952, $this->source); })()), "date_to", [], "any", false, false, false, 952)]), "html", null, true);
                    yield "\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
                } else {
                    // line 957
                    yield "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-right\"></i></span>
                        </li>
                    ";
                }
                // line 961
                yield "                </ul>
                <span class=\"page-info\">
                    Page ";
                // line 963
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 963, $this->source); })()), "html", null, true);
                yield " sur ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 963, $this->source); })()), "html", null, true);
                yield "
                </span>
            </nav>
        ";
            }
            // line 967
            yield "    ";
        } else {
            // line 968
            yield "        <div class=\"orders-empty\">
            <i class=\"fas fa-shopping-bag\"></i>
            <h3>Aucune commande trouvée</h3>
            <p>
                ";
            // line 972
            if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 972, $this->source); })()), "search", [], "any", false, false, false, 972) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 972, $this->source); })()), "status", [], "any", false, false, false, 972)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 972, $this->source); })()), "date_from", [], "any", false, false, false, 972)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 972, $this->source); })()), "date_to", [], "any", false, false, false, 972))) {
                // line 973
                yield "                    Aucune commande ne correspond à vos critères de recherche.
                    <br><a href=\"";
                // line 974
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
                yield "\" class=\"btn btn-sm btn-outline-primary mt-2\">Réinitialiser les filtres</a>
                ";
            } else {
                // line 976
                yield "                    Vous n'avez pas encore passé de commande.
                    <br><a href=\"";
                // line 977
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
                yield "\" class=\"btn btn-primary mt-2\">
                        <i class=\"fas fa-shopping-cart me-2\"></i> Découvrir nos produits
                    </a>
                ";
            }
            // line 981
            yield "            </p>
        </div>
    ";
        }
        // line 984
        yield "</div>

<!-- ==================== TOAST CONTAINER ==================== -->
<div class=\"toast-container\" id=\"toastContainer\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 990
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

        // line 991
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== TOAST NOTIFICATIONS ====================
    function showToast(message, type = 'info') {
        const container = document.getElementById('toastContainer');
        const icons = {
            success: 'fa-check-circle',
            error: 'fa-exclamation-circle',
            warning: 'fa-exclamation-triangle',
            info: 'fa-info-circle'
        };

        const toast = document.createElement('div');
        toast.className = `toast \${type}`;
        toast.innerHTML = `
            <i class=\"fas \${icons[type] || icons.info}\"></i>
            <span class=\"toast-message\">\${message}</span>
            <button onclick=\"this.closest('.toast').remove()\" style=\"background:none;border:none;color:#94a3b8;cursor:pointer;\">
                <i class=\"fas fa-times\"></i>
            </button>
        `;

        container.appendChild(toast);

        setTimeout(() => {
            toast.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => toast.remove(), 300);
        }, 4000);
    }

    // ✅ Afficher un message si le paiement a été confirmé
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('payment_success') === '1') {
        showToast('✅ Votre paiement a été confirmé ! Merci pour votre commande.', 'success');
    }

    // ✅ Fonction pour supprimer un filtre
    window.removeFilter = function(filterName) {
        const form = document.getElementById('filterForm');
        const input = form.querySelector(`[name=\"\${filterName}\"]`);
        if (input) {
            if (input.tagName === 'SELECT') {
                input.value = '';
            } else {
                input.value = '';
            }
            form.submit();
        }
    };

    // ✅ Autocomplétion de la recherche (optionnel)
    const searchInput = document.getElementById('search');
    if (searchInput) {
        let timer;
        searchInput.addEventListener('input', function() {
            clearTimeout(timer);
            timer = setTimeout(() => {
                this.closest('form').submit();
            }, 500);
        });
    }
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
        return "marketplace/profile/orders.html.twig";
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
        return array (  1415 => 991,  1402 => 990,  1387 => 984,  1382 => 981,  1375 => 977,  1372 => 976,  1367 => 974,  1364 => 973,  1362 => 972,  1356 => 968,  1353 => 967,  1344 => 963,  1340 => 961,  1334 => 957,  1326 => 952,  1323 => 951,  1321 => 950,  1318 => 949,  1310 => 946,  1307 => 945,  1303 => 943,  1300 => 942,  1298 => 941,  1295 => 940,  1285 => 936,  1281 => 935,  1274 => 934,  1270 => 933,  1267 => 932,  1264 => 931,  1260 => 929,  1258 => 928,  1253 => 926,  1250 => 925,  1248 => 924,  1245 => 923,  1242 => 922,  1240 => 921,  1237 => 920,  1231 => 916,  1223 => 911,  1220 => 910,  1218 => 909,  1214 => 907,  1212 => 906,  1208 => 904,  1195 => 897,  1187 => 892,  1183 => 891,  1177 => 887,  1171 => 884,  1167 => 882,  1164 => 881,  1155 => 877,  1149 => 874,  1146 => 873,  1144 => 872,  1138 => 871,  1133 => 869,  1126 => 864,  1122 => 863,  1112 => 856,  1108 => 855,  1102 => 854,  1097 => 852,  1093 => 851,  1087 => 850,  1080 => 846,  1073 => 842,  1067 => 838,  1062 => 837,  1060 => 836,  1053 => 831,  1047 => 828,  1043 => 826,  1040 => 825,  1033 => 821,  1029 => 819,  1026 => 818,  1019 => 814,  1015 => 812,  1012 => 811,  1005 => 807,  1001 => 805,  998 => 804,  991 => 800,  987 => 798,  985 => 797,  979 => 796,  971 => 791,  961 => 784,  952 => 777,  943 => 774,  934 => 773,  930 => 772,  918 => 763,  896 => 744,  891 => 741,  884 => 740,  879 => 739,  874 => 738,  869 => 737,  864 => 736,  862 => 735,  853 => 729,  842 => 721,  837 => 719,  830 => 714,  817 => 713,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/profile/orders.html.twig #}

{% extends 'base_marketplace.html.twig' %}

{% block title %}Mes commandes - HMA Marketplace{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --card-radius: 16px;
        --card-shadow: 0 2px 16px rgba(0,0,0,0.08);
        --card-shadow-hover: 0 8px 32px rgba(0,0,0,0.12);
    }

    .orders-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .orders-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .orders-header h1 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .orders-header h1 .badge {
        font-size: 0.9rem;
        background: var(--primary-gradient);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
    }

    /* ==================== FILTERS CARD ==================== */
    .filters-card {
        background: white;
        border-radius: var(--card-radius);
        box-shadow: var(--card-shadow);
        padding: 1.5rem;
        margin-bottom: 2rem;
        border: 1px solid #f1f5f9;
        transition: all 0.3s ease;
    }

    .filters-card:hover {
        box-shadow: var(--card-shadow-hover);
    }

    .filters-card .filters-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.25rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .filters-card .filters-header .filters-title {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-weight: 600;
        color: #0f172a;
        font-size: 0.95rem;
    }

    .filters-card .filters-header .filters-title i {
        color: var(--primary-color);
    }

    .filters-card .filters-header .filters-title .filter-count {
        background: #f1f5f9;
        padding: 0.05rem 0.5rem;
        border-radius: 50px;
        font-size: 0.7rem;
        color: #64748b;
        font-weight: 500;
    }

    .filters-card .filters-header .filters-actions {
        display: flex;
        gap: 0.5rem;
        align-items: center;
    }

    .filters-card .filters-header .filters-actions .btn-filter {
        padding: 0.5rem 1.5rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.85rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .filters-card .filters-header .filters-actions .btn-filter:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
    }

    .filters-card .filters-header .filters-actions .btn-filter:active {
        transform: scale(0.95);
    }

    .filters-card .filters-header .filters-actions .btn-reset {
        padding: 0.5rem 1rem;
        background: #f1f5f9;
        color: #64748b;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.85rem;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        gap: 0.4rem;
        text-decoration: none;
    }

    .filters-card .filters-header .filters-actions .btn-reset:hover {
        background: #e2e8f0;
        color: #0f172a;
        transform: translateY(-2px);
    }

    .filters-card .filters-header .filters-actions .btn-reset:active {
        transform: scale(0.95);
    }

    .filters-card .filters-body {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 1rem;
        align-items: end;
    }

    .filters-card .filter-group {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .filters-card .filter-group label {
        font-size: 0.7rem;
        font-weight: 700;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }

    .filters-card .filter-group label .label-icon {
        font-size: 0.6rem;
    }

    .filters-card .filter-group input,
    .filters-card .filter-group select {
        padding: 0.6rem 0.75rem;
        border: 1.5px solid #e5e7eb;
        border-radius: 10px;
        font-size: 0.9rem;
        transition: all 0.2s ease;
        background: white;
        width: 100%;
        color: #0f172a;
    }

    .filters-card .filter-group input::placeholder {
        color: #94a3b8;
        font-size: 0.85rem;
    }

    .filters-card .filter-group input:focus,
    .filters-card .filter-group select:focus {
        border-color: var(--primary-color);
        outline: none;
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.1);
    }

    .filters-card .filter-group select {
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%2364748b' d='M6 8L1 3h10z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        padding-right: 2.5rem;
        cursor: pointer;
    }

    .filters-card .filter-group input[type=\"date\"] {
        cursor: pointer;
    }

    .filters-card .filter-group input[type=\"date\"]::-webkit-calendar-picker-indicator {
        cursor: pointer;
        opacity: 0.6;
    }

    .filters-card .filter-group input[type=\"date\"]::-webkit-calendar-picker-indicator:hover {
        opacity: 1;
    }

    /* ==================== ACTIVE FILTERS ==================== */
    .active-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #f1f5f9;
    }

    .active-filters .filter-tag {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        background: #f1f5f9;
        border-radius: 50px;
        font-size: 0.7rem;
        color: #475569;
    }

    .active-filters .filter-tag i {
        font-size: 0.6rem;
        color: #94a3b8;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .active-filters .filter-tag i:hover {
        color: #ef4444;
    }

    .active-filters .filter-tag .tag-label {
        font-weight: 500;
        color: #64748b;
    }

    .active-filters .filter-tag .tag-value {
        font-weight: 600;
        color: #0f172a;
    }

    /* ==================== ORDERS LIST ==================== */
    .orders-empty {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 2px dashed #e5e7eb;
    }

    .orders-empty i {
        font-size: 4rem;
        color: #94a3b8;
        margin-bottom: 1rem;
    }

    .orders-empty h3 {
        color: #0f172a;
        font-weight: 600;
    }

    .orders-empty p {
        color: #94a3b8;
        margin-bottom: 1.5rem;
    }

    .order-card {
        background: white;
        border-radius: var(--card-radius);
        box-shadow: var(--card-shadow);
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        border: 1px solid #f1f5f9;
    }

    .order-card:hover {
        box-shadow: var(--card-shadow-hover);
        border-color: var(--primary-color);
    }

    .order-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #f1f5f9;
        margin-bottom: 1rem;
    }

    .order-header .order-number {
        font-weight: 700;
        font-size: 1.1rem;
        color: #0f172a;
    }

    .order-header .order-number .order-id {
        color: var(--primary-color);
    }

    .order-header .order-date {
        color: #94a3b8;
        font-size: 0.85rem;
    }

    .order-status {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    .order-status i {
        font-size: 0.6rem;
    }

    .order-status.paid {
        background: #dcfce7;
        color: #16a34a;
    }

    .order-status.pending {
        background: #fef3c7;
        color: #92400e;
    }

    .order-status.completed {
        background: #dbeafe;
        color: #1d4ed8;
    }

    .order-status.cancelled {
        background: #fee2e2;
        color: #dc2626;
    }

    .order-status.refunded {
        background: #f3e8ff;
        color: #7c3aed;
    }

    .order-status.processing {
        background: #e0f2fe;
        color: #0369a1;
    }

    .order-status.shipped {
        background: #d1fae5;
        color: #059669;
    }

    .order-body {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 1.5rem;
        align-items: center;
    }

    .order-items {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .order-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem;
        background: #f8fafc;
        border-radius: 8px;
        transition: background 0.2s ease;
    }

    .order-item:hover {
        background: #f1f5f9;
    }

    /* ✅ Icône générique pour les articles de la commande */
    .order-item-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        background: var(--primary-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .order-item-details {
        flex: 1;
    }

    .order-item-details .item-name {
        font-weight: 600;
        color: #0f172a;
        font-size: 0.9rem;
    }

    .order-item-details .item-meta {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    .order-total {
        text-align: right;
        flex-shrink: 0;
    }

    .order-total .total-label {
        font-size: 0.8rem;
        color: #94a3b8;
    }

    .order-total .total-amount {
        font-size: 1.3rem;
        font-weight: 700;
        color: #0f172a;
    }

    .order-total .total-items {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    .order-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #f1f5f9;
    }

    .btn-order-detail {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.4rem 1rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.8rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .btn-order-detail:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
        color: white;
    }

    /* ==================== PAGINATION ==================== */
    .pagination-modern {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.4rem;
        margin-top: 2rem;
        flex-wrap: wrap;
    }

    .pagination-modern .page-item {
        list-style: none;
    }

    .pagination-modern .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 40px;
        height: 40px;
        border-radius: 12px;
        border: 2px solid #e5e7eb;
        color: #475569;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        background: white;
        cursor: pointer;
    }

    .pagination-modern .page-link:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
    }

    .pagination-modern .page-item.active .page-link {
        background: var(--primary-gradient);
        border-color: var(--primary-color);
        color: white;
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.25);
    }

    .pagination-modern .page-item.disabled .page-link {
        opacity: 0.4;
        cursor: not-allowed;
        pointer-events: none;
    }

    .pagination-modern .page-info {
        color: #94a3b8;
        font-size: 0.85rem;
        padding: 0 0.5rem;
        font-weight: 500;
    }

    /* ==================== TOAST ==================== */
    .toast-container {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .toast {
        background: white;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.15);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        min-width: 300px;
        animation: slideIn 0.3s ease;
        border-left: 4px solid var(--primary-color);
    }

    .toast.success {
        border-left-color: #16a34a;
    }

    .toast.error {
        border-left-color: #ef4444;
    }

    .toast.warning {
        border-left-color: #f59e0b;
    }

    .toast i {
        font-size: 1.2rem;
    }

    .toast.success i {
        color: #16a34a;
    }

    .toast.error i {
        color: #ef4444;
    }

    .toast.warning i {
        color: #f59e0b;
    }

    .toast .toast-message {
        flex: 1;
        font-size: 0.9rem;
        color: #0f172a;
    }

    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 1024px) {
        .filters-card .filters-body {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 768px) {
        .order-body {
            grid-template-columns: 1fr;
        }

        .order-total {
            text-align: left;
            width: 100%;
        }

        .order-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .orders-header h1 {
            font-size: 1.4rem;
        }

        .order-card {
            padding: 1rem;
        }

        .order-item {
            flex-wrap: wrap;
        }

        .filters-card .filters-body {
            grid-template-columns: 1fr;
        }

        .filters-card .filters-header {
            flex-direction: column;
            align-items: stretch;
        }

        .filters-card .filters-header .filters-actions {
            justify-content: flex-end;
            flex-wrap: wrap;
        }

        .filters-card .filters-header .filters-actions .btn-filter {
            flex: 1;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .order-item-icon {
            width: 32px;
            height: 32px;
            font-size: 0.9rem;
        }

        .order-total .total-amount {
            font-size: 1.1rem;
        }

        .toast {
            min-width: auto;
            max-width: 90vw;
            padding: 0.75rem 1rem;
        }

        .pagination-modern .page-link {
            min-width: 32px;
            height: 32px;
            font-size: 0.75rem;
            border-radius: 8px;
        }

        .filters-card .filters-header .filters-actions {
            flex-direction: column;
            width: 100%;
        }

        .filters-card .filters-header .filters-actions .btn-filter,
        .filters-card .filters-header .filters-actions .btn-reset {
            width: 100%;
            justify-content: center;
        }

        .active-filters .filter-tag {
            font-size: 0.65rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"orders-container\">
    <div class=\"orders-header\">
        <h1>
            <i class=\"fas fa-shopping-bag text-primary\"></i>
            Mes commandes
            <span class=\"badge\">{{ totalOrders }}</span>
        </h1>
        <a href=\"{{ path('marketplace_home') }}\" class=\"btn btn-outline-primary btn-sm\">
            <i class=\"fas fa-arrow-left me-2\"></i>
            Retour à l'accueil
        </a>
    </div>

    <!-- ==================== FILTRES ==================== -->
    <div class=\"filters-card\">
        <form method=\"GET\" action=\"{{ path('marketplace_orders') }}\" id=\"filterForm\">
            <div class=\"filters-header\">
                <div class=\"filters-title\">
                    <i class=\"fas fa-sliders-h\"></i>
                    Filtrer mes commandes
                    <span class=\"filter-count\" id=\"filterCount\">
                        {% set activeFilters = 0 %}
                        {% if filters.search %}{% set activeFilters = activeFilters + 1 %}{% endif %}
                        {% if filters.status %}{% set activeFilters = activeFilters + 1 %}{% endif %}
                        {% if filters.date_from %}{% set activeFilters = activeFilters + 1 %}{% endif %}
                        {% if filters.date_to %}{% set activeFilters = activeFilters + 1 %}{% endif %}
                        {% if activeFilters > 0 %}({{ activeFilters }}){% endif %}
                    </span>
                </div>
                <div class=\"filters-actions\">
                    <a href=\"{{ path('marketplace_orders') }}\" class=\"btn-reset\" title=\"Réinitialiser les filtres\">
                        <i class=\"fas fa-times\"></i>
                        <span class=\"d-none d-sm-inline\">Réinitialiser</span>
                    </a>
                    <button type=\"submit\" class=\"btn-filter\">
                        <i class=\"fas fa-search\"></i>
                        <span class=\"d-none d-sm-inline\">Appliquer les filtres</span>
                        <span class=\"d-inline d-sm-none\">Filtrer</span>
                    </button>
                </div>
            </div>

            <div class=\"filters-body\">
                <div class=\"filter-group\">
                    <label for=\"search\">
                        <span class=\"label-icon\">🔍</span> Rechercher
                    </label>
                    <input type=\"text\" id=\"search\" name=\"search\" 
                           placeholder=\"N° commande, produit...\" 
                           value=\"{{ filters.search }}\">
                </div>
                
                <div class=\"filter-group\">
                    <label for=\"status\">
                        <span class=\"label-icon\">📊</span> Statut
                    </label>
                    <select id=\"status\" name=\"status\">
                        <option value=\"\">Tous les statuts</option>
                        {% for key, label in statuses %}
                            <option value=\"{{ key }}\" {% if filters.status == key %}selected{% endif %}>
                                {{ label }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                
                <div class=\"filter-group\">
                    <label for=\"date_from\">
                        <span class=\"label-icon\">📅</span> Date début
                    </label>
                    <input type=\"date\" id=\"date_from\" name=\"date_from\" value=\"{{ filters.date_from }}\">
                </div>
                
                <div class=\"filter-group\">
                    <label for=\"date_to\">
                        <span class=\"label-icon\">📅</span> Date fin
                    </label>
                    <input type=\"date\" id=\"date_to\" name=\"date_to\" value=\"{{ filters.date_to }}\">
                </div>
            </div>

            <!-- Active Filters Tags -->
            <div class=\"active-filters\" id=\"activeFilters\" style=\"{% if activeFilters == 0 %}display:none;{% endif %}\">
                {% if filters.search %}
                    <span class=\"filter-tag\">
                        <span class=\"tag-label\">Recherche:</span>
                        <span class=\"tag-value\">{{ filters.search }}</span>
                        <i class=\"fas fa-times\" onclick=\"removeFilter('search')\"></i>
                    </span>
                {% endif %}
                {% if filters.status %}
                    <span class=\"filter-tag\">
                        <span class=\"tag-label\">Statut:</span>
                        <span class=\"tag-value\">{{ statuses[filters.status] ?? filters.status }}</span>
                        <i class=\"fas fa-times\" onclick=\"removeFilter('status')\"></i>
                    </span>
                {% endif %}
                {% if filters.date_from %}
                    <span class=\"filter-tag\">
                        <span class=\"tag-label\">Du:</span>
                        <span class=\"tag-value\">{{ filters.date_from|date('d/m/Y') }}</span>
                        <i class=\"fas fa-times\" onclick=\"removeFilter('date_from')\"></i>
                    </span>
                {% endif %}
                {% if filters.date_to %}
                    <span class=\"filter-tag\">
                        <span class=\"tag-label\">Au:</span>
                        <span class=\"tag-value\">{{ filters.date_to|date('d/m/Y') }}</span>
                        <i class=\"fas fa-times\" onclick=\"removeFilter('date_to')\"></i>
                    </span>
                {% endif %}
                {% if activeFilters > 1 %}
                    <span class=\"filter-tag\" style=\"background: var(--primary-gradient); color: white;\">
                        <i class=\"fas fa-undo-alt me-1\"></i>
                        <a href=\"{{ path('marketplace_orders') }}\" style=\"color: white; text-decoration: none; font-weight: 600;\">Tout effacer</a>
                    </span>
                {% endif %}
            </div>
        </form>
    </div>

    <!-- ==================== LISTE DES COMMANDES ==================== -->
    {% if orders|length > 0 %}
        {% for order in orders %}
            <div class=\"order-card\">
                <div class=\"order-header\">
                    <div>
                        <div class=\"order-number\">
                            Commande #<span class=\"order-id\">{{ order.orderNumber }}</span>
                        </div>
                        <div class=\"order-date\">
                            <i class=\"far fa-calendar-alt me-1\"></i>
                            {{ order.createdAt|date('d/m/Y à H:i') }}
                        </div>
                    </div>
                    <div>
                        <span class=\"order-status\" style=\"background: {{ order.paymentStatus == 'paid' ? '#dcfce7' : '#fef3c7' }}; color: {{ order.paymentStatus == 'paid' ? '#16a34a' : '#92400e' }};\">
                            <i class=\"fas {{ order.paymentStatus == 'paid' ? 'fa-check-circle' : 'fa-clock' }}\"></i>
                            {{ order.paymentStatus == 'paid' ? 'Payée' : 'En attente' }}
                        </span>
                        <span class=\"order-status\" style=\"background: var(--bs-{{ order.statusColor|default('secondary') }}-subtle); color: var(--bs-{{ order.statusColor|default('secondary') }}-text); margin-left: 0.5rem;\">
                            <i class=\"fas {{ order.status == 'completed' or order.status == 'delivered' ? 'fa-check-circle' : 'fa-clock' }}\"></i>
                            {{ order.statusLabel|default(order.status) }}
                        </span>
                    </div>
                </div>

                <div class=\"order-body\">
                    <div class=\"order-items\">
                        {% for item in order.orderItems|slice(0, 3) %}
                            <div class=\"order-item\">
                                <div class=\"order-item-icon\">
                                    <i class=\"fas fa-box\"></i>
                                </div>
                                <div class=\"order-item-details\">
                                    <div class=\"item-name\">{{ item.productName }}</div>
                                    <div class=\"item-meta\">
                                        {{ item.quantity }} x {{ item.unitPrice|number_format(0, ',', ' ') }} FCFA
                                        {% if item.promotionName %}
                                            <span class=\"badge\" style=\"background: #dcfce7; color: #16a34a; font-size: 0.6rem; padding: 0.05rem 0.4rem;\">
                                                <i class=\"fas fa-tag me-1\"></i>{{ item.promotionName }}
                                            </span>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                        {% if order.orderItems|length > 3 %}
                            <div class=\"text-muted small\">
                                <i class=\"fas fa-plus-circle me-1\"></i>
                                {{ order.orderItems|length - 3 }} autre(s) article(s)
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"order-total\">
                        <div class=\"total-label\">Total</div>
                        <div class=\"total-amount\">{{ order.totalAmount|number_format(0, ',', ' ') }} FCFA</div>
                        <div class=\"total-items\">{{ order.orderItems|length }} article(s)</div>
                    </div>
                </div>

                <div class=\"order-actions\">
                    <a href=\"{{ path('marketplace_order_detail', {id: order.id}) }}\" class=\"btn-order-detail\">
                        <i class=\"fas fa-eye\"></i>
                        Voir le détail
                    </a>
                </div>
            </div>
        {% endfor %}

        <!-- Pagination -->
        {% if totalPages > 1 %}
            <nav class=\"pagination-modern\" aria-label=\"Pagination des commandes\">
                <ul class=\"pagination\">
                    {% if currentPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('marketplace_orders', {page: currentPage - 1, status: filters.status, search: filters.search, date_from: filters.date_from, date_to: filters.date_to}) }}\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-left\"></i></span>
                        </li>
                    {% endif %}

                    {% set startPage = max(1, currentPage - 2) %}
                    {% set endPage = min(totalPages, currentPage + 2) %}

                    {% if startPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('marketplace_orders', {page: 1, status: filters.status, search: filters.search, date_from: filters.date_from, date_to: filters.date_to}) }}\">1</a>
                        </li>
                        {% if startPage > 2 %}
                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        {% endif %}
                    {% endif %}

                    {% for page in startPage..endPage %}
                        <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('marketplace_orders', {page: page, status: filters.status, search: filters.search, date_from: filters.date_from, date_to: filters.date_to}) }}\">
                                {{ page }}
                            </a>
                        </li>
                    {% endfor %}

                    {% if endPage < totalPages %}
                        {% if endPage < totalPages - 1 %}
                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        {% endif %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('marketplace_orders', {page: totalPages, status: filters.status, search: filters.search, date_from: filters.date_from, date_to: filters.date_to}) }}\">{{ totalPages }}</a>
                        </li>
                    {% endif %}

                    {% if currentPage < totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('marketplace_orders', {page: currentPage + 1, status: filters.status, search: filters.search, date_from: filters.date_from, date_to: filters.date_to}) }}\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-right\"></i></span>
                        </li>
                    {% endif %}
                </ul>
                <span class=\"page-info\">
                    Page {{ currentPage }} sur {{ totalPages }}
                </span>
            </nav>
        {% endif %}
    {% else %}
        <div class=\"orders-empty\">
            <i class=\"fas fa-shopping-bag\"></i>
            <h3>Aucune commande trouvée</h3>
            <p>
                {% if filters.search or filters.status or filters.date_from or filters.date_to %}
                    Aucune commande ne correspond à vos critères de recherche.
                    <br><a href=\"{{ path('marketplace_orders') }}\" class=\"btn btn-sm btn-outline-primary mt-2\">Réinitialiser les filtres</a>
                {% else %}
                    Vous n'avez pas encore passé de commande.
                    <br><a href=\"{{ path('marketplace_products') }}\" class=\"btn btn-primary mt-2\">
                        <i class=\"fas fa-shopping-cart me-2\"></i> Découvrir nos produits
                    </a>
                {% endif %}
            </p>
        </div>
    {% endif %}
</div>

<!-- ==================== TOAST CONTAINER ==================== -->
<div class=\"toast-container\" id=\"toastContainer\"></div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== TOAST NOTIFICATIONS ====================
    function showToast(message, type = 'info') {
        const container = document.getElementById('toastContainer');
        const icons = {
            success: 'fa-check-circle',
            error: 'fa-exclamation-circle',
            warning: 'fa-exclamation-triangle',
            info: 'fa-info-circle'
        };

        const toast = document.createElement('div');
        toast.className = `toast \${type}`;
        toast.innerHTML = `
            <i class=\"fas \${icons[type] || icons.info}\"></i>
            <span class=\"toast-message\">\${message}</span>
            <button onclick=\"this.closest('.toast').remove()\" style=\"background:none;border:none;color:#94a3b8;cursor:pointer;\">
                <i class=\"fas fa-times\"></i>
            </button>
        `;

        container.appendChild(toast);

        setTimeout(() => {
            toast.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => toast.remove(), 300);
        }, 4000);
    }

    // ✅ Afficher un message si le paiement a été confirmé
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('payment_success') === '1') {
        showToast('✅ Votre paiement a été confirmé ! Merci pour votre commande.', 'success');
    }

    // ✅ Fonction pour supprimer un filtre
    window.removeFilter = function(filterName) {
        const form = document.getElementById('filterForm');
        const input = form.querySelector(`[name=\"\${filterName}\"]`);
        if (input) {
            if (input.tagName === 'SELECT') {
                input.value = '';
            } else {
                input.value = '';
            }
            form.submit();
        }
    };

    // ✅ Autocomplétion de la recherche (optionnel)
    const searchInput = document.getElementById('search');
    if (searchInput) {
        let timer;
        searchInput.addEventListener('input', function() {
            clearTimeout(timer);
            timer = setTimeout(() => {
                this.closest('form').submit();
            }, 500);
        });
    }
});
</script>
{% endblock %}", "marketplace/profile/orders.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\profile\\orders.html.twig");
    }
}
