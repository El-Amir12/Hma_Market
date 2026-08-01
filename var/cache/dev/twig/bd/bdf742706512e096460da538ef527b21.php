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

/* marketplace/products/product_ratings.html.twig */
class __TwigTemplate_bd0ed34b54fb6cd47416072c402c36b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/products/product_ratings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/products/product_ratings.html.twig"));

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

        yield "Avis sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - HMA Marketplace";
        
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
        --card-radius: 20px;
        --card-shadow: 0 2px 12px rgba(0,0,0,0.06);
        --card-shadow-hover: 0 12px 35px rgba(0,0,0,0.12);
    }

    /* ==================== BREADCRUMB ==================== */
    .breadcrumb-custom {
        background: transparent;
        padding: 0;
        margin-bottom: 1.5rem;
    }
    .breadcrumb-custom .breadcrumb-item a {
        color: var(--primary-color);
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .breadcrumb-custom .breadcrumb-item a:hover {
        color: var(--primary-dark);
        text-decoration: underline;
    }
    .breadcrumb-custom .breadcrumb-item.active {
        color: #64748b;
    }
    .breadcrumb-custom .breadcrumb-item + .breadcrumb-item::before {
        content: \"›\";
        font-size: 1.2rem;
        font-weight: 300;
        color: #94a3b8;
    }

    /* ==================== RATING SUMMARY ==================== */
    .rating-summary-card {
        background: white;
        border-radius: var(--card-radius);
        padding: 2rem;
        border: 1px solid #e5e7eb;
        box-shadow: var(--card-shadow);
        text-align: center;
        transition: all 0.3s ease;
    }

    .rating-summary-card:hover {
        box-shadow: var(--card-shadow-hover);
        transform: translateY(-2px);
    }

    .rating-summary-card .big-number {
        font-size: 4rem;
        font-weight: 900;
        color: #f59e0b;
        line-height: 1;
        letter-spacing: -2px;
    }

    .rating-summary-card .stars-big {
        font-size: 1.8rem;
        margin: 0.5rem 0;
    }

    .rating-summary-card .rating-count {
        color: #64748b;
        font-size: 0.95rem;
    }
    .rating-summary-card .rating-count strong {
        color: #0f172a;
    }

    /* ==================== DISTRIBUTION BARS ==================== */
    .distribution-bar {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.25rem 0;
        transition: all 0.2s ease;
        cursor: pointer;
    }
    .distribution-bar:hover {
        background: #f8fafc;
        border-radius: 8px;
        padding-left: 0.5rem;
    }
    .distribution-bar .star-label {
        font-size: 0.85rem;
        font-weight: 600;
        color: #475569;
        min-width: 30px;
        text-align: right;
    }
    .distribution-bar .bar-track {
        flex: 1;
        height: 8px;
        background: #e5e7eb;
        border-radius: 4px;
        overflow: hidden;
        position: relative;
    }
    .distribution-bar .bar-track .bar-fill {
        height: 100%;
        background: linear-gradient(90deg, #f59e0b, #fbbf24);
        border-radius: 4px;
        transition: width 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        width: 0%;
    }
    .distribution-bar .bar-count {
        font-size: 0.8rem;
        color: #94a3b8;
        min-width: 35px;
        font-weight: 500;
    }

    /* ==================== RATING FORM ==================== */
    .rating-form-card {
        background: white;
        border-radius: var(--card-radius);
        padding: 1.5rem;
        border: 1px solid #e5e7eb;
        box-shadow: var(--card-shadow);
        transition: all 0.3s ease;
    }
    .rating-form-card:hover {
        box-shadow: var(--card-shadow-hover);
    }
    .rating-form-card .form-title {
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .rating-form-card .form-title i {
        color: var(--primary-color);
    }

    .rating-stars-input {
        display: flex;
        gap: 0.3rem;
        margin: 0.5rem 0 1rem;
    }
    .rating-stars-input .star-btn {
        font-size: 2rem;
        padding: 0;
        border: none;
        background: none;
        color: #d1d5db;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .rating-stars-input .star-btn:hover {
        transform: scale(1.2);
        color: #f59e0b;
    }
    .rating-stars-input .star-btn.active {
        color: #f59e0b;
    }

    /* ==================== USER RATING CARD ==================== */
    .user-rating-card {
        background: #f0f7ff;
        border: 2px solid var(--primary-color);
        border-radius: var(--card-radius);
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        position: relative;
    }
    .user-rating-card .badge-mine {
        position: absolute;
        top: -10px;
        right: 15px;
        background: var(--primary-gradient);
        color: white;
        padding: 0.2rem 1rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .user-rating-card .edit-hint {
        font-size: 0.8rem;
        color: #64748b;
    }

    /* ==================== RATING ITEM ==================== */
    .rating-item {
        background: white;
        border-radius: var(--card-radius);
        padding: 1.5rem;
        border: 1px solid #e5e7eb;
        box-shadow: var(--card-shadow);
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }
    .rating-item:hover {
        box-shadow: var(--card-shadow-hover);
        border-color: var(--primary-color);
    }
    .rating-item .rating-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    .rating-item .rating-header .user-info {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    /* ✅ AVATAR AMÉLIORÉ */
    .rating-item .rating-header .user-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
        text-transform: uppercase;
    }
    
    /* Couleurs d'avatar variées */
    .rating-item .rating-header .user-avatar.color-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
    .rating-item .rating-header .user-avatar.color-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
    .rating-item .rating-header .user-avatar.color-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
    .rating-item .rating-header .user-avatar.color-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
    .rating-item .rating-header .user-avatar.color-5 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
    .rating-item .rating-header .user-avatar.color-6 { background: linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%); }
    .rating-item .rating-header .user-avatar.color-7 { background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%); }
    .rating-item .rating-header .user-avatar.color-8 { background: linear-gradient(135deg, #fddb92 0%, #d1fdff 100%); }
    
    /* Avatar pour \"Mon avis\" */
    .user-rating-card .user-avatar-mine {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: var(--primary-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
        text-transform: uppercase;
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
    }

    .rating-item .rating-header .user-name {
        font-weight: 600;
        color: #0f172a;
    }
    .rating-item .rating-header .rating-date {
        font-size: 0.8rem;
        color: #94a3b8;
    }
    .rating-item .rating-stars {
        font-size: 1rem;
        margin: 0.3rem 0;
    }
    .rating-item .rating-comment {
        color: #475569;
        line-height: 1.7;
        margin-top: 0.5rem;
    }
    .rating-item .rating-comment:empty {
        display: none;
    }
    .rating-item .rating-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        font-size: 0.7rem;
        padding: 0.15rem 0.6rem;
        border-radius: 50px;
        background: #fef3c7;
        color: #92400e;
        font-weight: 600;
    }
    .rating-item .rating-badge.verified {
        background: #dcfce7;
        color: #16a34a;
    }
    .rating-item .rating-badge.is-mine {
        background: var(--primary-gradient);
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

    /* ==================== EMPTY STATE ==================== */
    .empty-state-ratings {
        text-align: center;
        padding: 3rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 2px dashed #e5e7eb;
    }
    .empty-state-ratings .icon-wrapper {
        width: 80px;
        height: 80px;
        background: #fef3c7;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }
    .empty-state-ratings .icon-wrapper i {
        font-size: 2.5rem;
        color: #f59e0b;
    }
    .empty-state-ratings h5 {
        color: #0f172a;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    .empty-state-ratings p {
        color: #94a3b8;
        max-width: 400px;
        margin: 0 auto;
    }

    /* ==================== BACK BUTTON ==================== */
    .btn-back-product {
        border-radius: 50px;
        padding: 0.6rem 2rem;
        border: 2px solid #e5e7eb;
        color: #64748b;
        background: transparent;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-weight: 600;
    }
    .btn-back-product:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
        transform: translateX(-4px);
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 992px) {
        .rating-summary-card .big-number { font-size: 3.5rem; }
        .rating-summary-card .stars-big { font-size: 1.5rem; }
    }

    @media (max-width: 768px) {
        .rating-summary-card { padding: 1.5rem; }
        .rating-summary-card .big-number { font-size: 3rem; }
        .rating-summary-card .stars-big { font-size: 1.3rem; }
        .rating-item .rating-header { flex-direction: column; align-items: flex-start; }
        .rating-item .rating-header .rating-date { margin-top: 0.2rem; }
        .rating-form-card { padding: 1rem; }
        .rating-stars-input .star-btn { font-size: 1.6rem; }
        .pagination-modern .page-link { min-width: 36px; height: 36px; font-size: 0.8rem; }
        .distribution-bar .star-label { font-size: 0.75rem; min-width: 25px; }
        .distribution-bar .bar-count { font-size: 0.7rem; min-width: 30px; }
        .user-rating-card { padding: 1rem; }
        .user-rating-card .badge-mine { position: relative; top: 0; right: 0; display: inline-block; margin-bottom: 0.5rem; }
        .rating-item .rating-header .user-avatar { width: 38px; height: 38px; font-size: 0.9rem; }
        .user-rating-card .user-avatar-mine { width: 38px; height: 38px; font-size: 0.9rem; }
    }

    @media (max-width: 480px) {
        .rating-summary-card .big-number { font-size: 2.5rem; }
        .rating-summary-card .stars-big { font-size: 1.1rem; }
        .rating-stars-input .star-btn { font-size: 1.4rem; }
        .rating-item { padding: 1rem; }
        .rating-item .rating-header .user-avatar { width: 32px; height: 32px; font-size: 0.8rem; }
        .user-rating-card .user-avatar-mine { width: 32px; height: 32px; font-size: 0.8rem; }
        .rating-item .rating-stars { font-size: 0.8rem; }
        .rating-item .rating-comment { font-size: 0.85rem; }
        .pagination-modern .page-link { min-width: 32px; height: 32px; font-size: 0.75rem; border-radius: 8px; }
        .distribution-bar { gap: 0.4rem; }
        .btn-back-product { font-size: 0.85rem; padding: 0.4rem 1.2rem; }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 450
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

        // line 451
        yield "<div class=\"container py-4\">
    <!-- ==================== BREADCRUMB ==================== -->
    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
                <a href=\"";
        // line 456
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\">
                    <i class=\"fas fa-home me-1\"></i>Accueil
                </a>
            </li>
            <li class=\"breadcrumb-item\">
                <a href=\"";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 461, $this->source); })()), "id", [], "any", false, false, false, 461)]), "html", null, true);
        yield "\">
                    ";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 462, $this->source); })()), "name", [], "any", false, false, false, 462)), "truncate", [30, "..."], "method", false, false, false, 462), "html", null, true);
        yield "
                </a>
            </li>
            <li class=\"breadcrumb-item active\">Avis</li>
        </ol>
    </nav>

    <!-- ==================== TITRE ==================== -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <h1 class=\"h3 fw-bold mb-0\" style=\"color: #0f172a;\">
            <i class=\"fas fa-star text-warning me-2\"></i>
            Avis sur <span class=\"text-primary\">";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 473, $this->source); })()), "name", [], "any", false, false, false, 473), "html", null, true);
        yield "</span>
        </h1>
        <a href=\"";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 475, $this->source); })()), "id", [], "any", false, false, false, 475)]), "html", null, true);
        yield "\" class=\"btn-back-product\">
            <i class=\"fas fa-arrow-left me-1\"></i> Retour au produit
        </a>
    </div>

    <!-- ==================== CONTENU PRINCIPAL ==================== -->
    <div class=\"row g-4 align-items-stretch\">
        <!-- ==================== COLONNE GAUCHE : RÉSUMÉ ==================== -->
        <div class=\"col-lg-4 d-flex flex-column\">
            <!-- Carte Résumé -->
            <div class=\"rating-summary-card\">
                <div class=\"big-number\">";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 486, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "</div>
                <div class=\"stars-big\">
                    ";
        // line 488
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 489
            yield "                        ";
            if (($context["i"] <= (isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 489, $this->source); })()))) {
                // line 490
                yield "                            <i class=\"fas fa-star text-warning star\"></i>
                        ";
            } elseif (((            // line 491
$context["i"] - 0.5) <= (isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 491, $this->source); })()))) {
                // line 492
                yield "                            <i class=\"fas fa-star-half-alt text-warning star\"></i>
                        ";
            } else {
                // line 494
                yield "                            <i class=\"far fa-star text-secondary star\"></i>
                        ";
            }
            // line 496
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 497
        yield "                </div>
                <p class=\"rating-count\">
                    <strong>";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalRatings"]) || array_key_exists("totalRatings", $context) ? $context["totalRatings"] : (function () { throw new RuntimeError('Variable "totalRatings" does not exist.', 499, $this->source); })()), "html", null, true);
        yield "</strong> avis
                </p>

                <!-- Distribution des notes -->
                <div class=\"mt-3 pt-3 border-top\">
                    ";
        // line 504
        $context["distribution"] = ((array_key_exists("ratingDistribution", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["ratingDistribution"]) || array_key_exists("ratingDistribution", $context) ? $context["ratingDistribution"] : (function () { throw new RuntimeError('Variable "ratingDistribution" does not exist.', 504, $this->source); })()), [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0])) : ([1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0]));
        // line 505
        yield "                    ";
        $context["maxCount"] = ((array_key_exists("maxCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["maxCount"]) || array_key_exists("maxCount", $context) ? $context["maxCount"] : (function () { throw new RuntimeError('Variable "maxCount" does not exist.', 505, $this->source); })()), 1)) : (1));
        // line 506
        yield "                    
                    ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 508
            yield "                        ";
            $context["count"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["distribution"] ?? null), $context["score"], [], "array", true, true, false, 508)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["distribution"]) || array_key_exists("distribution", $context) ? $context["distribution"] : (function () { throw new RuntimeError('Variable "distribution" does not exist.', 508, $this->source); })()), $context["score"], [], "array", false, false, false, 508), 0)) : (0));
            // line 509
            yield "                        ";
            $context["percentage"] = ((((isset($context["maxCount"]) || array_key_exists("maxCount", $context) ? $context["maxCount"] : (function () { throw new RuntimeError('Variable "maxCount" does not exist.', 509, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 509, $this->source); })()) / (isset($context["maxCount"]) || array_key_exists("maxCount", $context) ? $context["maxCount"] : (function () { throw new RuntimeError('Variable "maxCount" does not exist.', 509, $this->source); })())) * 100))) : (0));
            // line 510
            yield "                        <div class=\"distribution-bar\">
                            <span class=\"star-label\">";
            // line 511
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["score"], "html", null, true);
            yield "</span>
                            <div class=\"bar-track\">
                                <div class=\"bar-fill\" style=\"width: ";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 513, $this->source); })()), "html", null, true);
            yield "%;\"></div>
                            </div>
                            <span class=\"bar-count\">";
            // line 515
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 515, $this->source); })()), "html", null, true);
            yield "</span>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['score'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        yield "                </div>
            </div>

            <!-- Espaceur pour pousser le formulaire vers le bas -->
            <div class=\"flex-grow-1\"></div>

            <!-- ==================== FORMULAIRE D'AVIS ==================== -->
            ";
        // line 525
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 525, $this->source); })()), "user", [], "any", false, false, false, 525) && $this->extensions['App\Twig\RatingExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 525, $this->source); })()), "user", [], "any", false, false, false, 525)))) {
            // line 526
            yield "                ";
            if ((($tmp = (isset($context["hasPurchased"]) || array_key_exists("hasPurchased", $context) ? $context["hasPurchased"] : (function () { throw new RuntimeError('Variable "hasPurchased" does not exist.', 526, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 527
                yield "                    <!-- Client a acheté le produit -->
                    <div class=\"rating-form-card mt-3\">
                        <h6 class=\"form-title\">
                            <i class=\"fas fa-pen\"></i> 
                            ";
                // line 531
                if ((($tmp = (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 531, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 532
                    yield "                                Modifier mon avis
                            ";
                } else {
                    // line 534
                    yield "                                Donner mon avis
                            ";
                }
                // line 536
                yield "                        </h6>
                        <p class=\"text-muted small\">
                            ";
                // line 538
                if ((($tmp = (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 538, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 539
                    yield "                                Vous avez déjà laissé un avis sur ce produit. Modifiez-le ci-dessous.
                            ";
                } else {
                    // line 541
                    yield "                                Vous avez acheté ce produit, partagez votre expérience !
                            ";
                }
                // line 543
                yield "                        </p>
                        
                        <form id=\"ratingForm\">
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Note</label>
                                <div class=\"rating-stars-input\" id=\"ratingStarsInput\">
                                    ";
                // line 549
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 550
                    yield "                                        <button type=\"button\" class=\"star-btn ";
                    if (((isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 550, $this->source); })()) && ($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 550, $this->source); })()), "score", [], "any", false, false, false, 550)))) {
                        yield "active";
                    }
                    yield "\" data-score=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\">
                                            <i class=\"fas fa-star\"></i>
                                        </button>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 554
                yield "                                </div>
                                <input type=\"hidden\" name=\"score\" id=\"ratingScore\" value=\"";
                // line 555
                yield (((($tmp = (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 555, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 555, $this->source); })()), "score", [], "any", false, false, false, 555), "html", null, true)) : (0));
                yield "\">
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Commentaire</label>
                                <textarea name=\"comment\" id=\"ratingComment\" class=\"form-control\" rows=\"3\" 
                                          placeholder=\"Partagez votre expérience avec ce produit...\">";
                // line 560
                yield (((($tmp = (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 560, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 560, $this->source); })()), "comment", [], "any", false, false, false, 560), "html", null, true)) : (""));
                yield "</textarea>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary w-100\">
                                <i class=\"fas fa-paper-plane me-2\"></i>
                                ";
                // line 564
                if ((($tmp = (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 564, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 565
                    yield "                                    Modifier mon avis
                                ";
                } else {
                    // line 567
                    yield "                                    Envoyer mon avis
                                ";
                }
                // line 569
                yield "                            </button>
                        </form>
                    </div>
                ";
            } else {
                // line 573
                yield "                    <!-- Client n'a pas acheté le produit -->
                    <div class=\"rating-form-card mt-3\" style=\"background: #f8fafc; border-color: #e5e7eb;\">
                        <div class=\"text-center py-3\">
                            <i class=\"fas fa-shopping-bag fa-2x text-muted mb-2\" style=\"color: #94a3b8;\"></i>
                            <h6 class=\"fw-bold\" style=\"color: #475569;\">Achetez d'abord ce produit</h6>
                            <p class=\"text-muted small mb-0\">
                                Vous devez avoir acheté ce produit pour pouvoir laisser un avis.
                            </p>
                            <a href=\"";
                // line 581
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 581, $this->source); })()), "id", [], "any", false, false, false, 581)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary btn-sm mt-2\">
                                <i class=\"fas fa-eye me-1\"></i> Voir le produit
                            </a>
                        </div>
                    </div>
                ";
            }
            // line 587
            yield "            ";
        } else {
            // line 588
            yield "                <!-- Utilisateur non connecté ou non client -->
                <div class=\"rating-form-card mt-3\" style=\"background: #f8fafc; border-color: #e5e7eb;\">
                    <div class=\"text-center py-3\">
                        <i class=\"fas fa-user-lock fa-2x text-muted mb-2\" style=\"color: #94a3b8;\"></i>
                        <h6 class=\"fw-bold\" style=\"color: #475569;\">Connectez-vous pour donner votre avis</h6>
                        <p class=\"text-muted small mb-0\">
                            Vous devez être connecté et avoir acheté ce produit pour laisser un avis.
                        </p>
                        <a href=\"";
            // line 596
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                            <i class=\"fas fa-sign-in-alt me-1\"></i> Se connecter
                        </a>
                    </div>
                </div>
            ";
        }
        // line 602
        yield "        </div>

        <!-- ==================== COLONNE DROITE : LISTE DES AVIS ==================== -->
        <div class=\"col-lg-8 d-flex flex-column\">
            <!-- En-tête -->
            <div class=\"d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2\">
                <h4 class=\"fw-bold mb-0\" style=\"color: #0f172a;\">
                    <i class=\"fas fa-star text-warning me-2\"></i>
                    Tous les avis
                    <span class=\"badge bg-light text-dark ms-2\">";
        // line 611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalRatings"]) || array_key_exists("totalRatings", $context) ? $context["totalRatings"] : (function () { throw new RuntimeError('Variable "totalRatings" does not exist.', 611, $this->source); })()), "html", null, true);
        yield "</span>
                </h4>
                <span class=\"text-muted small\">
                    <i class=\"fas fa-clock me-1\"></i> Les plus récents d'abord
                </span>
            </div>

            <!-- ==================== AVIS DE L'UTILISATEUR ==================== -->
            ";
        // line 619
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 619, $this->source); })()), "user", [], "any", false, false, false, 619) && $this->extensions['App\Twig\RatingExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 619, $this->source); })()), "user", [], "any", false, false, false, 619))) && (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 619, $this->source); })()))) {
            // line 620
            yield "                <div class=\"user-rating-card\">
                    <span class=\"badge-mine\"><i class=\"fas fa-user me-1\"></i> Mon avis</span>
                    <div class=\"rating-header\">
                        <div class=\"user-info\">
                            <div class=\"user-avatar-mine\">
                                ";
            // line 625
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 625, $this->source); })()), "user", [], "any", false, false, false, 625), "fullName", [], "any", false, false, false, 625))), "html", null, true);
            yield "
                            </div>
                            <div>
                                <div class=\"user-name\">
                                    ";
            // line 629
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 629, $this->source); })()), "user", [], "any", false, false, false, 629), "fullName", [], "any", false, false, false, 629), "html", null, true);
            yield "
                                    <span class=\"rating-badge is-mine ms-1\">
                                        <i class=\"fas fa-user\"></i> Vous
                                    </span>
                                    <span class=\"rating-badge verified ms-1\">
                                        <i class=\"fas fa-check-circle\"></i> Achat vérifié
                                    </span>
                                </div>
                                <div class=\"rating-stars\">
                                    ";
            // line 638
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 639
                yield "                                        ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 639, $this->source); })()), "score", [], "any", false, false, false, 639))) {
                    // line 640
                    yield "                                            <i class=\"fas fa-star text-warning\"></i>
                                        ";
                } else {
                    // line 642
                    yield "                                            <i class=\"far fa-star text-secondary\"></i>
                                        ";
                }
                // line 644
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 645
            yield "                                </div>
                            </div>
                        </div>
                        <span class=\"rating-date\">
                            <i class=\"far fa-calendar-alt me-1\"></i>
                            ";
            // line 650
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 650, $this->source); })()), "createdAt", [], "any", false, false, false, 650), "d/m/Y"), "html", null, true);
            yield "
                            ";
            // line 651
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 651, $this->source); })()), "updatedAt", [], "any", false, false, false, 651) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 651, $this->source); })()), "updatedAt", [], "any", false, false, false, 651) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 651, $this->source); })()), "createdAt", [], "any", false, false, false, 651)))) {
                // line 652
                yield "                                <span class=\"text-muted ms-1\">(modifié)</span>
                            ";
            }
            // line 654
            yield "                        </span>
                    </div>

                    ";
            // line 657
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 657, $this->source); })()), "comment", [], "any", false, false, false, 657)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 658
                yield "                        <div class=\"rating-comment\">";
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 658, $this->source); })()), "comment", [], "any", false, false, false, 658), "html", null, true));
                yield "</div>
                    ";
            }
            // line 660
            yield "                    
                    <div class=\"mt-2\">
                        <span class=\"edit-hint\">
                            <i class=\"fas fa-edit me-1\"></i> 
                            Vous pouvez modifier votre avis dans le formulaire ci-contre
                        </span>
                    </div>
                </div>
            ";
        }
        // line 669
        yield "
            <!-- ==================== LISTE DES AVIS DES AUTRES ==================== -->
            ";
        // line 671
        $context["otherRatings"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["ratings"]) || array_key_exists("ratings", $context) ? $context["ratings"] : (function () { throw new RuntimeError('Variable "ratings" does not exist.', 671, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return ( !(isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 671, $this->source); })()) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 671, $this->source); })()), "id", [], "any", false, false, false, 671) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 671, $this->source); })()), "id", [], "any", false, false, false, 671))); });
        // line 672
        yield "            
            ";
        // line 673
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["otherRatings"]) || array_key_exists("otherRatings", $context) ? $context["otherRatings"] : (function () { throw new RuntimeError('Variable "otherRatings" does not exist.', 673, $this->source); })())) > 0)) {
            // line 674
            yield "                <!-- Avis des autres utilisateurs -->
                ";
            // line 675
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["otherRatings"]) || array_key_exists("otherRatings", $context) ? $context["otherRatings"] : (function () { throw new RuntimeError('Variable "otherRatings" does not exist.', 675, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 676
                yield "                    ";
                $context["colorIndex"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 676) % 8) + 1);
                // line 677
                yield "                    <div class=\"rating-item\">
                        <div class=\"rating-header\">
                            <div class=\"user-info\">
                                <div class=\"user-avatar color-";
                // line 680
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["colorIndex"]) || array_key_exists("colorIndex", $context) ? $context["colorIndex"] : (function () { throw new RuntimeError('Variable "colorIndex" does not exist.', 680, $this->source); })()), "html", null, true);
                yield "\">
                                    ";
                // line 681
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "customer", [], "any", false, false, false, 681)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "customer", [], "any", false, false, false, 681), "fullName", [], "any", false, false, false, 681))), "html", null, true)) : ("?"));
                yield "
                                </div>
                                <div>
                                    <div class=\"user-name\">
                                        ";
                // line 685
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "customer", [], "any", false, false, false, 685)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "customer", [], "any", false, false, false, 685), "fullName", [], "any", false, false, false, 685), "html", null, true)) : ("Client anonyme"));
                yield "
                                        <span class=\"rating-badge verified ms-1\">
                                            <i class=\"fas fa-check-circle\"></i> Achat vérifié
                                        </span>
                                    </div>
                                    <div class=\"rating-stars\">
                                        ";
                // line 691
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 692
                    yield "                                            ";
                    if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "score", [], "any", false, false, false, 692))) {
                        // line 693
                        yield "                                                <i class=\"fas fa-star text-warning\"></i>
                                            ";
                    } else {
                        // line 695
                        yield "                                                <i class=\"far fa-star text-secondary\"></i>
                                            ";
                    }
                    // line 697
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 698
                yield "                                    </div>
                                </div>
                            </div>
                            <span class=\"rating-date\">
                                <i class=\"far fa-calendar-alt me-1\"></i>
                                ";
                // line 703
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "createdAt", [], "any", false, false, false, 703), "d/m/Y"), "html", null, true);
                yield "
                            </span>
                        </div>

                        ";
                // line 707
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "comment", [], "any", false, false, false, 707)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 708
                    yield "                            <div class=\"rating-comment\">";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "comment", [], "any", false, false, false, 708), "html", null, true));
                    yield "</div>
                        ";
                }
                // line 710
                yield "                    </div>
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
            unset($context['_seq'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 712
            yield "
                <!-- Pagination -->
                ";
            // line 714
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 714, $this->source); })()) > 1)) {
                // line 715
                yield "                    <div class=\"mt-auto\">
                        <nav class=\"pagination-modern\" aria-label=\"Pagination des avis\">
                            <ul class=\"pagination\">
                                ";
                // line 718
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 718, $this->source); })()) > 1)) {
                    // line 719
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 720
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_ratings", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 720, $this->source); })()), "id", [], "any", false, false, false, 720), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 720, $this->source); })()) - 1)]), "html", null, true);
                    yield "\">
                                            <i class=\"fas fa-chevron-left\"></i>
                                        </a>
                                    </li>
                                ";
                } else {
                    // line 725
                    yield "                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\"><i class=\"fas fa-chevron-left\"></i></span>
                                    </li>
                                ";
                }
                // line 729
                yield "
                                ";
                // line 730
                $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 730, $this->source); })()) - 2));
                // line 731
                yield "                                ";
                $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 731, $this->source); })()), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 731, $this->source); })()) + 2));
                // line 732
                yield "
                                ";
                // line 733
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 733, $this->source); })()) > 1)) {
                    // line 734
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 735
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_ratings", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 735, $this->source); })()), "id", [], "any", false, false, false, 735), "page" => 1]), "html", null, true);
                    yield "\">1</a>
                                    </li>
                                    ";
                    // line 737
                    if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 737, $this->source); })()) > 2)) {
                        // line 738
                        yield "                                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                                    ";
                    }
                    // line 740
                    yield "                                ";
                }
                // line 741
                yield "
                                ";
                // line 742
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 742, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 742, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 743
                    yield "                                    <li class=\"page-item ";
                    if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 743, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\">
                                        <a class=\"page-link\" href=\"";
                    // line 744
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_ratings", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 744, $this->source); })()), "id", [], "any", false, false, false, 744), "page" => $context["page"]]), "html", null, true);
                    yield "\">
                                            ";
                    // line 745
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 749
                yield "
                                ";
                // line 750
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 750, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 750, $this->source); })()))) {
                    // line 751
                    yield "                                    ";
                    if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 751, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 751, $this->source); })()) - 1))) {
                        // line 752
                        yield "                                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                                    ";
                    }
                    // line 754
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 755
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_ratings", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 755, $this->source); })()), "id", [], "any", false, false, false, 755), "page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 755, $this->source); })())]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 755, $this->source); })()), "html", null, true);
                    yield "</a>
                                    </li>
                                ";
                }
                // line 758
                yield "
                                ";
                // line 759
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 759, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 759, $this->source); })()))) {
                    // line 760
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 761
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_ratings", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 761, $this->source); })()), "id", [], "any", false, false, false, 761), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 761, $this->source); })()) + 1)]), "html", null, true);
                    yield "\">
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                    </li>
                                ";
                } else {
                    // line 766
                    yield "                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\"><i class=\"fas fa-chevron-right\"></i></span>
                                    </li>
                                ";
                }
                // line 770
                yield "                            </ul>
                            <span class=\"page-info\">
                                Page ";
                // line 772
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 772, $this->source); })()), "html", null, true);
                yield " sur ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 772, $this->source); })()), "html", null, true);
                yield "
                            </span>
                        </nav>
                    </div>
                ";
            }
            // line 777
            yield "            ";
        } else {
            // line 778
            yield "                <!-- Empty State -->
                <div class=\"empty-state-ratings\">
                    <div class=\"icon-wrapper\">
                        <i class=\"fas fa-star\"></i>
                    </div>
                    <h5>Aucun avis pour le moment</h5>
                    <p>
                        ";
            // line 785
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 785, $this->source); })()), "user", [], "any", false, false, false, 785) && $this->extensions['App\Twig\RatingExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 785, $this->source); })()), "user", [], "any", false, false, false, 785))) && (isset($context["hasPurchased"]) || array_key_exists("hasPurchased", $context) ? $context["hasPurchased"] : (function () { throw new RuntimeError('Variable "hasPurchased" does not exist.', 785, $this->source); })()))) {
                // line 786
                yield "                            Soyez le premier à donner votre avis sur ce produit !
                        ";
            } else {
                // line 788
                yield "                            Les premiers avis apparaîtront ici. Si vous avez acheté ce produit, vous pouvez laisser votre avis ci-contre.
                        ";
            }
            // line 790
            yield "                    </p>
                </div>
            ";
        }
        // line 793
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 798
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

        // line 799
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== GESTION DES ÉTOILES ====================
    const starBtns = document.querySelectorAll('#ratingStarsInput .star-btn');
    const ratingScore = document.getElementById('ratingScore');
    let selectedScore = parseInt(ratingScore.value) || 0;

    // Initialiser les étoiles
    starBtns.forEach(btn => {
        const score = parseInt(btn.dataset.score);
        if (score <= selectedScore) {
            btn.classList.add('active');
        }
    });

    starBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const score = parseInt(this.dataset.score);
            selectedScore = score;
            ratingScore.value = score;

            starBtns.forEach(b => {
                const s = parseInt(b.dataset.score);
                if (s <= score) {
                    b.classList.add('active');
                } else {
                    b.classList.remove('active');
                }
            });

            this.style.transform = 'scale(0.8)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);
        });

        btn.addEventListener('mouseenter', function() {
            const score = parseInt(this.dataset.score);
            starBtns.forEach(b => {
                const s = parseInt(b.dataset.score);
                if (s <= score) {
                    b.style.transform = 'scale(1.1)';
                    b.style.color = '#f59e0b';
                }
            });
        });

        btn.addEventListener('mouseleave', function() {
            starBtns.forEach(b => {
                b.style.transform = 'scale(1)';
                const s = parseInt(b.dataset.score);
                if (s <= selectedScore) {
                    b.style.color = '#f59e0b';
                } else {
                    b.style.color = '#d1d5db';
                }
            });
        });
    });

    // ==================== GESTION DU FORMULAIRE ====================
    const ratingForm = document.getElementById('ratingForm');
    if (ratingForm) {
        ratingForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const score = parseInt(ratingScore.value);
            if (score === 0) {
                showNotification('Veuillez sélectionner une note', 'warning');
                document.getElementById('ratingStarsInput').style.animation = 'shake 0.5s ease';
                setTimeout(() => {
                    document.getElementById('ratingStarsInput').style.animation = '';
                }, 500);
                return;
            }

            const comment = document.getElementById('ratingComment').value.trim();
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            const originalText = submitBtn.innerHTML;

            submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Envoi en cours...';
            submitBtn.disabled = true;

            fetch('";
        // line 883
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 883, $this->source); })()), "id", [], "any", false, false, false, 883)]), "html", null, true);
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ score: score, comment: comment })
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        throw new Error(data.error || 'Erreur serveur');
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    showNotification('✓ Votre avis a été enregistré avec succès !', 'success');
                    submitBtn.innerHTML = '<i class=\"fas fa-check me-2\"></i> Envoyé !';
                    submitBtn.classList.add('btn-success');
                    submitBtn.classList.remove('btn-primary');

                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                } else {
                    showNotification(data.error || 'Erreur lors de l\\'envoi', 'error');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                showNotification(error.message || 'Erreur de connexion', 'error');
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        });
    }

    // ==================== ANIMATION DES BARRES DE DISTRIBUTION ====================
    const barFills = document.querySelectorAll('.bar-fill');
    barFills.forEach((bar, index) => {
        setTimeout(() => {
            const width = bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.width = width;
            }, 100 + index * 100);
        }, 300);
    });

    // ==================== SHAKE ANIMATION ====================
    const styleShake = document.createElement('style');
    styleShake.textContent = `
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20% { transform: translateX(-10px); }
            40% { transform: translateX(10px); }
            60% { transform: translateX(-10px); }
            80% { transform: translateX(10px); }
        }
    `;
    document.head.appendChild(styleShake);

    // ==================== NOTIFICATIONS ====================
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
        notification.style.boxShadow = '0 10px 40px rgba(0,0,0,0.15)';
        notification.innerHTML = `
            <div class=\"d-flex align-items-center gap-2\">
                <i class=\"fas \${icons[type] || icons.info} fa-lg\"></i>
                <span class=\"fw-medium\">\${message}</span>
                <button type=\"button\" class=\"btn-close btn-close-white ms-2\" onclick=\"this.closest('.position-fixed').remove()\" style=\"opacity: 0.6;\"></button>
            </div>
        `;
        document.body.appendChild(notification);

        setTimeout(() => {
            notification.style.animation = 'slideDown 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 4000);
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
        return "marketplace/products/product_ratings.html.twig";
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
        return array (  1367 => 883,  1280 => 799,  1267 => 798,  1253 => 793,  1248 => 790,  1244 => 788,  1240 => 786,  1238 => 785,  1229 => 778,  1226 => 777,  1216 => 772,  1212 => 770,  1206 => 766,  1198 => 761,  1195 => 760,  1193 => 759,  1190 => 758,  1182 => 755,  1179 => 754,  1175 => 752,  1172 => 751,  1170 => 750,  1167 => 749,  1157 => 745,  1153 => 744,  1146 => 743,  1142 => 742,  1139 => 741,  1136 => 740,  1132 => 738,  1130 => 737,  1125 => 735,  1122 => 734,  1120 => 733,  1117 => 732,  1114 => 731,  1112 => 730,  1109 => 729,  1103 => 725,  1095 => 720,  1092 => 719,  1090 => 718,  1085 => 715,  1083 => 714,  1079 => 712,  1064 => 710,  1058 => 708,  1056 => 707,  1049 => 703,  1042 => 698,  1036 => 697,  1032 => 695,  1028 => 693,  1025 => 692,  1021 => 691,  1012 => 685,  1005 => 681,  1001 => 680,  996 => 677,  993 => 676,  976 => 675,  973 => 674,  971 => 673,  968 => 672,  966 => 671,  962 => 669,  951 => 660,  945 => 658,  943 => 657,  938 => 654,  934 => 652,  932 => 651,  928 => 650,  921 => 645,  915 => 644,  911 => 642,  907 => 640,  904 => 639,  900 => 638,  888 => 629,  881 => 625,  874 => 620,  872 => 619,  861 => 611,  850 => 602,  841 => 596,  831 => 588,  828 => 587,  819 => 581,  809 => 573,  803 => 569,  799 => 567,  795 => 565,  793 => 564,  786 => 560,  778 => 555,  775 => 554,  760 => 550,  756 => 549,  748 => 543,  744 => 541,  740 => 539,  738 => 538,  734 => 536,  730 => 534,  726 => 532,  724 => 531,  718 => 527,  715 => 526,  713 => 525,  704 => 518,  695 => 515,  690 => 513,  685 => 511,  682 => 510,  679 => 509,  676 => 508,  672 => 507,  669 => 506,  666 => 505,  664 => 504,  656 => 499,  652 => 497,  646 => 496,  642 => 494,  638 => 492,  636 => 491,  633 => 490,  630 => 489,  626 => 488,  621 => 486,  607 => 475,  602 => 473,  588 => 462,  584 => 461,  576 => 456,  569 => 451,  556 => 450,  104 => 8,  91 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/products/product_ratings.html.twig #}

{% extends 'base_marketplace.html.twig' %}

{% block title %}Avis sur {{ product.name }} - HMA Marketplace{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --card-radius: 20px;
        --card-shadow: 0 2px 12px rgba(0,0,0,0.06);
        --card-shadow-hover: 0 12px 35px rgba(0,0,0,0.12);
    }

    /* ==================== BREADCRUMB ==================== */
    .breadcrumb-custom {
        background: transparent;
        padding: 0;
        margin-bottom: 1.5rem;
    }
    .breadcrumb-custom .breadcrumb-item a {
        color: var(--primary-color);
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .breadcrumb-custom .breadcrumb-item a:hover {
        color: var(--primary-dark);
        text-decoration: underline;
    }
    .breadcrumb-custom .breadcrumb-item.active {
        color: #64748b;
    }
    .breadcrumb-custom .breadcrumb-item + .breadcrumb-item::before {
        content: \"›\";
        font-size: 1.2rem;
        font-weight: 300;
        color: #94a3b8;
    }

    /* ==================== RATING SUMMARY ==================== */
    .rating-summary-card {
        background: white;
        border-radius: var(--card-radius);
        padding: 2rem;
        border: 1px solid #e5e7eb;
        box-shadow: var(--card-shadow);
        text-align: center;
        transition: all 0.3s ease;
    }

    .rating-summary-card:hover {
        box-shadow: var(--card-shadow-hover);
        transform: translateY(-2px);
    }

    .rating-summary-card .big-number {
        font-size: 4rem;
        font-weight: 900;
        color: #f59e0b;
        line-height: 1;
        letter-spacing: -2px;
    }

    .rating-summary-card .stars-big {
        font-size: 1.8rem;
        margin: 0.5rem 0;
    }

    .rating-summary-card .rating-count {
        color: #64748b;
        font-size: 0.95rem;
    }
    .rating-summary-card .rating-count strong {
        color: #0f172a;
    }

    /* ==================== DISTRIBUTION BARS ==================== */
    .distribution-bar {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.25rem 0;
        transition: all 0.2s ease;
        cursor: pointer;
    }
    .distribution-bar:hover {
        background: #f8fafc;
        border-radius: 8px;
        padding-left: 0.5rem;
    }
    .distribution-bar .star-label {
        font-size: 0.85rem;
        font-weight: 600;
        color: #475569;
        min-width: 30px;
        text-align: right;
    }
    .distribution-bar .bar-track {
        flex: 1;
        height: 8px;
        background: #e5e7eb;
        border-radius: 4px;
        overflow: hidden;
        position: relative;
    }
    .distribution-bar .bar-track .bar-fill {
        height: 100%;
        background: linear-gradient(90deg, #f59e0b, #fbbf24);
        border-radius: 4px;
        transition: width 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        width: 0%;
    }
    .distribution-bar .bar-count {
        font-size: 0.8rem;
        color: #94a3b8;
        min-width: 35px;
        font-weight: 500;
    }

    /* ==================== RATING FORM ==================== */
    .rating-form-card {
        background: white;
        border-radius: var(--card-radius);
        padding: 1.5rem;
        border: 1px solid #e5e7eb;
        box-shadow: var(--card-shadow);
        transition: all 0.3s ease;
    }
    .rating-form-card:hover {
        box-shadow: var(--card-shadow-hover);
    }
    .rating-form-card .form-title {
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .rating-form-card .form-title i {
        color: var(--primary-color);
    }

    .rating-stars-input {
        display: flex;
        gap: 0.3rem;
        margin: 0.5rem 0 1rem;
    }
    .rating-stars-input .star-btn {
        font-size: 2rem;
        padding: 0;
        border: none;
        background: none;
        color: #d1d5db;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .rating-stars-input .star-btn:hover {
        transform: scale(1.2);
        color: #f59e0b;
    }
    .rating-stars-input .star-btn.active {
        color: #f59e0b;
    }

    /* ==================== USER RATING CARD ==================== */
    .user-rating-card {
        background: #f0f7ff;
        border: 2px solid var(--primary-color);
        border-radius: var(--card-radius);
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        position: relative;
    }
    .user-rating-card .badge-mine {
        position: absolute;
        top: -10px;
        right: 15px;
        background: var(--primary-gradient);
        color: white;
        padding: 0.2rem 1rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .user-rating-card .edit-hint {
        font-size: 0.8rem;
        color: #64748b;
    }

    /* ==================== RATING ITEM ==================== */
    .rating-item {
        background: white;
        border-radius: var(--card-radius);
        padding: 1.5rem;
        border: 1px solid #e5e7eb;
        box-shadow: var(--card-shadow);
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }
    .rating-item:hover {
        box-shadow: var(--card-shadow-hover);
        border-color: var(--primary-color);
    }
    .rating-item .rating-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    .rating-item .rating-header .user-info {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    /* ✅ AVATAR AMÉLIORÉ */
    .rating-item .rating-header .user-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
        text-transform: uppercase;
    }
    
    /* Couleurs d'avatar variées */
    .rating-item .rating-header .user-avatar.color-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
    .rating-item .rating-header .user-avatar.color-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
    .rating-item .rating-header .user-avatar.color-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
    .rating-item .rating-header .user-avatar.color-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
    .rating-item .rating-header .user-avatar.color-5 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
    .rating-item .rating-header .user-avatar.color-6 { background: linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%); }
    .rating-item .rating-header .user-avatar.color-7 { background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%); }
    .rating-item .rating-header .user-avatar.color-8 { background: linear-gradient(135deg, #fddb92 0%, #d1fdff 100%); }
    
    /* Avatar pour \"Mon avis\" */
    .user-rating-card .user-avatar-mine {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: var(--primary-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
        text-transform: uppercase;
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
    }

    .rating-item .rating-header .user-name {
        font-weight: 600;
        color: #0f172a;
    }
    .rating-item .rating-header .rating-date {
        font-size: 0.8rem;
        color: #94a3b8;
    }
    .rating-item .rating-stars {
        font-size: 1rem;
        margin: 0.3rem 0;
    }
    .rating-item .rating-comment {
        color: #475569;
        line-height: 1.7;
        margin-top: 0.5rem;
    }
    .rating-item .rating-comment:empty {
        display: none;
    }
    .rating-item .rating-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        font-size: 0.7rem;
        padding: 0.15rem 0.6rem;
        border-radius: 50px;
        background: #fef3c7;
        color: #92400e;
        font-weight: 600;
    }
    .rating-item .rating-badge.verified {
        background: #dcfce7;
        color: #16a34a;
    }
    .rating-item .rating-badge.is-mine {
        background: var(--primary-gradient);
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

    /* ==================== EMPTY STATE ==================== */
    .empty-state-ratings {
        text-align: center;
        padding: 3rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 2px dashed #e5e7eb;
    }
    .empty-state-ratings .icon-wrapper {
        width: 80px;
        height: 80px;
        background: #fef3c7;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }
    .empty-state-ratings .icon-wrapper i {
        font-size: 2.5rem;
        color: #f59e0b;
    }
    .empty-state-ratings h5 {
        color: #0f172a;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    .empty-state-ratings p {
        color: #94a3b8;
        max-width: 400px;
        margin: 0 auto;
    }

    /* ==================== BACK BUTTON ==================== */
    .btn-back-product {
        border-radius: 50px;
        padding: 0.6rem 2rem;
        border: 2px solid #e5e7eb;
        color: #64748b;
        background: transparent;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-weight: 600;
    }
    .btn-back-product:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
        transform: translateX(-4px);
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 992px) {
        .rating-summary-card .big-number { font-size: 3.5rem; }
        .rating-summary-card .stars-big { font-size: 1.5rem; }
    }

    @media (max-width: 768px) {
        .rating-summary-card { padding: 1.5rem; }
        .rating-summary-card .big-number { font-size: 3rem; }
        .rating-summary-card .stars-big { font-size: 1.3rem; }
        .rating-item .rating-header { flex-direction: column; align-items: flex-start; }
        .rating-item .rating-header .rating-date { margin-top: 0.2rem; }
        .rating-form-card { padding: 1rem; }
        .rating-stars-input .star-btn { font-size: 1.6rem; }
        .pagination-modern .page-link { min-width: 36px; height: 36px; font-size: 0.8rem; }
        .distribution-bar .star-label { font-size: 0.75rem; min-width: 25px; }
        .distribution-bar .bar-count { font-size: 0.7rem; min-width: 30px; }
        .user-rating-card { padding: 1rem; }
        .user-rating-card .badge-mine { position: relative; top: 0; right: 0; display: inline-block; margin-bottom: 0.5rem; }
        .rating-item .rating-header .user-avatar { width: 38px; height: 38px; font-size: 0.9rem; }
        .user-rating-card .user-avatar-mine { width: 38px; height: 38px; font-size: 0.9rem; }
    }

    @media (max-width: 480px) {
        .rating-summary-card .big-number { font-size: 2.5rem; }
        .rating-summary-card .stars-big { font-size: 1.1rem; }
        .rating-stars-input .star-btn { font-size: 1.4rem; }
        .rating-item { padding: 1rem; }
        .rating-item .rating-header .user-avatar { width: 32px; height: 32px; font-size: 0.8rem; }
        .user-rating-card .user-avatar-mine { width: 32px; height: 32px; font-size: 0.8rem; }
        .rating-item .rating-stars { font-size: 0.8rem; }
        .rating-item .rating-comment { font-size: 0.85rem; }
        .pagination-modern .page-link { min-width: 32px; height: 32px; font-size: 0.75rem; border-radius: 8px; }
        .distribution-bar { gap: 0.4rem; }
        .btn-back-product { font-size: 0.85rem; padding: 0.4rem 1.2rem; }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <!-- ==================== BREADCRUMB ==================== -->
    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
                <a href=\"{{ path('marketplace_home') }}\">
                    <i class=\"fas fa-home me-1\"></i>Accueil
                </a>
            </li>
            <li class=\"breadcrumb-item\">
                <a href=\"{{ path('marketplace_product_show', {id: product.id}) }}\">
                    {{ product.name|u.truncate(30, '...') }}
                </a>
            </li>
            <li class=\"breadcrumb-item active\">Avis</li>
        </ol>
    </nav>

    <!-- ==================== TITRE ==================== -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <h1 class=\"h3 fw-bold mb-0\" style=\"color: #0f172a;\">
            <i class=\"fas fa-star text-warning me-2\"></i>
            Avis sur <span class=\"text-primary\">{{ product.name }}</span>
        </h1>
        <a href=\"{{ path('marketplace_product_show', {id: product.id}) }}\" class=\"btn-back-product\">
            <i class=\"fas fa-arrow-left me-1\"></i> Retour au produit
        </a>
    </div>

    <!-- ==================== CONTENU PRINCIPAL ==================== -->
    <div class=\"row g-4 align-items-stretch\">
        <!-- ==================== COLONNE GAUCHE : RÉSUMÉ ==================== -->
        <div class=\"col-lg-4 d-flex flex-column\">
            <!-- Carte Résumé -->
            <div class=\"rating-summary-card\">
                <div class=\"big-number\">{{ averageRating|number_format(1, ',', ' ') }}</div>
                <div class=\"stars-big\">
                    {% for i in 1..5 %}
                        {% if i <= averageRating %}
                            <i class=\"fas fa-star text-warning star\"></i>
                        {% elseif i - 0.5 <= averageRating %}
                            <i class=\"fas fa-star-half-alt text-warning star\"></i>
                        {% else %}
                            <i class=\"far fa-star text-secondary star\"></i>
                        {% endif %}
                    {% endfor %}
                </div>
                <p class=\"rating-count\">
                    <strong>{{ totalRatings }}</strong> avis
                </p>

                <!-- Distribution des notes -->
                <div class=\"mt-3 pt-3 border-top\">
                    {% set distribution = ratingDistribution|default({1:0, 2:0, 3:0, 4:0, 5:0}) %}
                    {% set maxCount = maxCount|default(1) %}
                    
                    {% for score in 5..1 %}
                        {% set count = distribution[score]|default(0) %}
                        {% set percentage = maxCount > 0 ? (count / maxCount * 100)|round : 0 %}
                        <div class=\"distribution-bar\">
                            <span class=\"star-label\">{{ score }}</span>
                            <div class=\"bar-track\">
                                <div class=\"bar-fill\" style=\"width: {{ percentage }}%;\"></div>
                            </div>
                            <span class=\"bar-count\">{{ count }}</span>
                        </div>
                    {% endfor %}
                </div>
            </div>

            <!-- Espaceur pour pousser le formulaire vers le bas -->
            <div class=\"flex-grow-1\"></div>

            <!-- ==================== FORMULAIRE D'AVIS ==================== -->
            {% if app.user and is_customer(app.user) %}
                {% if hasPurchased %}
                    <!-- Client a acheté le produit -->
                    <div class=\"rating-form-card mt-3\">
                        <h6 class=\"form-title\">
                            <i class=\"fas fa-pen\"></i> 
                            {% if userRating %}
                                Modifier mon avis
                            {% else %}
                                Donner mon avis
                            {% endif %}
                        </h6>
                        <p class=\"text-muted small\">
                            {% if userRating %}
                                Vous avez déjà laissé un avis sur ce produit. Modifiez-le ci-dessous.
                            {% else %}
                                Vous avez acheté ce produit, partagez votre expérience !
                            {% endif %}
                        </p>
                        
                        <form id=\"ratingForm\">
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Note</label>
                                <div class=\"rating-stars-input\" id=\"ratingStarsInput\">
                                    {% for i in 1..5 %}
                                        <button type=\"button\" class=\"star-btn {% if userRating and i <= userRating.score %}active{% endif %}\" data-score=\"{{ i }}\">
                                            <i class=\"fas fa-star\"></i>
                                        </button>
                                    {% endfor %}
                                </div>
                                <input type=\"hidden\" name=\"score\" id=\"ratingScore\" value=\"{{ userRating ? userRating.score : 0 }}\">
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Commentaire</label>
                                <textarea name=\"comment\" id=\"ratingComment\" class=\"form-control\" rows=\"3\" 
                                          placeholder=\"Partagez votre expérience avec ce produit...\">{{ userRating ? userRating.comment : '' }}</textarea>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary w-100\">
                                <i class=\"fas fa-paper-plane me-2\"></i>
                                {% if userRating %}
                                    Modifier mon avis
                                {% else %}
                                    Envoyer mon avis
                                {% endif %}
                            </button>
                        </form>
                    </div>
                {% else %}
                    <!-- Client n'a pas acheté le produit -->
                    <div class=\"rating-form-card mt-3\" style=\"background: #f8fafc; border-color: #e5e7eb;\">
                        <div class=\"text-center py-3\">
                            <i class=\"fas fa-shopping-bag fa-2x text-muted mb-2\" style=\"color: #94a3b8;\"></i>
                            <h6 class=\"fw-bold\" style=\"color: #475569;\">Achetez d'abord ce produit</h6>
                            <p class=\"text-muted small mb-0\">
                                Vous devez avoir acheté ce produit pour pouvoir laisser un avis.
                            </p>
                            <a href=\"{{ path('marketplace_product_show', {id: product.id}) }}\" class=\"btn btn-outline-primary btn-sm mt-2\">
                                <i class=\"fas fa-eye me-1\"></i> Voir le produit
                            </a>
                        </div>
                    </div>
                {% endif %}
            {% else %}
                <!-- Utilisateur non connecté ou non client -->
                <div class=\"rating-form-card mt-3\" style=\"background: #f8fafc; border-color: #e5e7eb;\">
                    <div class=\"text-center py-3\">
                        <i class=\"fas fa-user-lock fa-2x text-muted mb-2\" style=\"color: #94a3b8;\"></i>
                        <h6 class=\"fw-bold\" style=\"color: #475569;\">Connectez-vous pour donner votre avis</h6>
                        <p class=\"text-muted small mb-0\">
                            Vous devez être connecté et avoir acheté ce produit pour laisser un avis.
                        </p>
                        <a href=\"{{ path('marketplace_login') }}\" class=\"btn btn-primary btn-sm mt-2\">
                            <i class=\"fas fa-sign-in-alt me-1\"></i> Se connecter
                        </a>
                    </div>
                </div>
            {% endif %}
        </div>

        <!-- ==================== COLONNE DROITE : LISTE DES AVIS ==================== -->
        <div class=\"col-lg-8 d-flex flex-column\">
            <!-- En-tête -->
            <div class=\"d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2\">
                <h4 class=\"fw-bold mb-0\" style=\"color: #0f172a;\">
                    <i class=\"fas fa-star text-warning me-2\"></i>
                    Tous les avis
                    <span class=\"badge bg-light text-dark ms-2\">{{ totalRatings }}</span>
                </h4>
                <span class=\"text-muted small\">
                    <i class=\"fas fa-clock me-1\"></i> Les plus récents d'abord
                </span>
            </div>

            <!-- ==================== AVIS DE L'UTILISATEUR ==================== -->
            {% if app.user and is_customer(app.user) and userRating %}
                <div class=\"user-rating-card\">
                    <span class=\"badge-mine\"><i class=\"fas fa-user me-1\"></i> Mon avis</span>
                    <div class=\"rating-header\">
                        <div class=\"user-info\">
                            <div class=\"user-avatar-mine\">
                                {{ app.user.fullName|first|upper }}
                            </div>
                            <div>
                                <div class=\"user-name\">
                                    {{ app.user.fullName }}
                                    <span class=\"rating-badge is-mine ms-1\">
                                        <i class=\"fas fa-user\"></i> Vous
                                    </span>
                                    <span class=\"rating-badge verified ms-1\">
                                        <i class=\"fas fa-check-circle\"></i> Achat vérifié
                                    </span>
                                </div>
                                <div class=\"rating-stars\">
                                    {% for i in 1..5 %}
                                        {% if i <= userRating.score %}
                                            <i class=\"fas fa-star text-warning\"></i>
                                        {% else %}
                                            <i class=\"far fa-star text-secondary\"></i>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                        <span class=\"rating-date\">
                            <i class=\"far fa-calendar-alt me-1\"></i>
                            {{ userRating.createdAt|date('d/m/Y') }}
                            {% if userRating.updatedAt and userRating.updatedAt != userRating.createdAt %}
                                <span class=\"text-muted ms-1\">(modifié)</span>
                            {% endif %}
                        </span>
                    </div>

                    {% if userRating.comment %}
                        <div class=\"rating-comment\">{{ userRating.comment|nl2br }}</div>
                    {% endif %}
                    
                    <div class=\"mt-2\">
                        <span class=\"edit-hint\">
                            <i class=\"fas fa-edit me-1\"></i> 
                            Vous pouvez modifier votre avis dans le formulaire ci-contre
                        </span>
                    </div>
                </div>
            {% endif %}

            <!-- ==================== LISTE DES AVIS DES AUTRES ==================== -->
            {% set otherRatings = ratings|filter(r => not userRating or r.id != userRating.id) %}
            
            {% if otherRatings|length > 0 %}
                <!-- Avis des autres utilisateurs -->
                {% for rating in otherRatings %}
                    {% set colorIndex = loop.index % 8 + 1 %}
                    <div class=\"rating-item\">
                        <div class=\"rating-header\">
                            <div class=\"user-info\">
                                <div class=\"user-avatar color-{{ colorIndex }}\">
                                    {{ rating.customer ? rating.customer.fullName|first|upper : '?' }}
                                </div>
                                <div>
                                    <div class=\"user-name\">
                                        {{ rating.customer ? rating.customer.fullName : 'Client anonyme' }}
                                        <span class=\"rating-badge verified ms-1\">
                                            <i class=\"fas fa-check-circle\"></i> Achat vérifié
                                        </span>
                                    </div>
                                    <div class=\"rating-stars\">
                                        {% for i in 1..5 %}
                                            {% if i <= rating.score %}
                                                <i class=\"fas fa-star text-warning\"></i>
                                            {% else %}
                                                <i class=\"far fa-star text-secondary\"></i>
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                            <span class=\"rating-date\">
                                <i class=\"far fa-calendar-alt me-1\"></i>
                                {{ rating.createdAt|date('d/m/Y') }}
                            </span>
                        </div>

                        {% if rating.comment %}
                            <div class=\"rating-comment\">{{ rating.comment|nl2br }}</div>
                        {% endif %}
                    </div>
                {% endfor %}

                <!-- Pagination -->
                {% if totalPages > 1 %}
                    <div class=\"mt-auto\">
                        <nav class=\"pagination-modern\" aria-label=\"Pagination des avis\">
                            <ul class=\"pagination\">
                                {% if currentPage > 1 %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('marketplace_product_ratings', {id: product.id, page: currentPage - 1}) }}\">
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
                                        <a class=\"page-link\" href=\"{{ path('marketplace_product_ratings', {id: product.id, page: 1}) }}\">1</a>
                                    </li>
                                    {% if startPage > 2 %}
                                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                                    {% endif %}
                                {% endif %}

                                {% for page in startPage..endPage %}
                                    <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                                        <a class=\"page-link\" href=\"{{ path('marketplace_product_ratings', {id: product.id, page: page}) }}\">
                                            {{ page }}
                                        </a>
                                    </li>
                                {% endfor %}

                                {% if endPage < totalPages %}
                                    {% if endPage < totalPages - 1 %}
                                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                                    {% endif %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('marketplace_product_ratings', {id: product.id, page: totalPages}) }}\">{{ totalPages }}</a>
                                    </li>
                                {% endif %}

                                {% if currentPage < totalPages %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('marketplace_product_ratings', {id: product.id, page: currentPage + 1}) }}\">
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
                    </div>
                {% endif %}
            {% else %}
                <!-- Empty State -->
                <div class=\"empty-state-ratings\">
                    <div class=\"icon-wrapper\">
                        <i class=\"fas fa-star\"></i>
                    </div>
                    <h5>Aucun avis pour le moment</h5>
                    <p>
                        {% if app.user and is_customer(app.user) and hasPurchased %}
                            Soyez le premier à donner votre avis sur ce produit !
                        {% else %}
                            Les premiers avis apparaîtront ici. Si vous avez acheté ce produit, vous pouvez laisser votre avis ci-contre.
                        {% endif %}
                    </p>
                </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== GESTION DES ÉTOILES ====================
    const starBtns = document.querySelectorAll('#ratingStarsInput .star-btn');
    const ratingScore = document.getElementById('ratingScore');
    let selectedScore = parseInt(ratingScore.value) || 0;

    // Initialiser les étoiles
    starBtns.forEach(btn => {
        const score = parseInt(btn.dataset.score);
        if (score <= selectedScore) {
            btn.classList.add('active');
        }
    });

    starBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const score = parseInt(this.dataset.score);
            selectedScore = score;
            ratingScore.value = score;

            starBtns.forEach(b => {
                const s = parseInt(b.dataset.score);
                if (s <= score) {
                    b.classList.add('active');
                } else {
                    b.classList.remove('active');
                }
            });

            this.style.transform = 'scale(0.8)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);
        });

        btn.addEventListener('mouseenter', function() {
            const score = parseInt(this.dataset.score);
            starBtns.forEach(b => {
                const s = parseInt(b.dataset.score);
                if (s <= score) {
                    b.style.transform = 'scale(1.1)';
                    b.style.color = '#f59e0b';
                }
            });
        });

        btn.addEventListener('mouseleave', function() {
            starBtns.forEach(b => {
                b.style.transform = 'scale(1)';
                const s = parseInt(b.dataset.score);
                if (s <= selectedScore) {
                    b.style.color = '#f59e0b';
                } else {
                    b.style.color = '#d1d5db';
                }
            });
        });
    });

    // ==================== GESTION DU FORMULAIRE ====================
    const ratingForm = document.getElementById('ratingForm');
    if (ratingForm) {
        ratingForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const score = parseInt(ratingScore.value);
            if (score === 0) {
                showNotification('Veuillez sélectionner une note', 'warning');
                document.getElementById('ratingStarsInput').style.animation = 'shake 0.5s ease';
                setTimeout(() => {
                    document.getElementById('ratingStarsInput').style.animation = '';
                }, 500);
                return;
            }

            const comment = document.getElementById('ratingComment').value.trim();
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            const originalText = submitBtn.innerHTML;

            submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Envoi en cours...';
            submitBtn.disabled = true;

            fetch('{{ path('marketplace_product_rate', {id: product.id}) }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ score: score, comment: comment })
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        throw new Error(data.error || 'Erreur serveur');
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    showNotification('✓ Votre avis a été enregistré avec succès !', 'success');
                    submitBtn.innerHTML = '<i class=\"fas fa-check me-2\"></i> Envoyé !';
                    submitBtn.classList.add('btn-success');
                    submitBtn.classList.remove('btn-primary');

                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                } else {
                    showNotification(data.error || 'Erreur lors de l\\'envoi', 'error');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                showNotification(error.message || 'Erreur de connexion', 'error');
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        });
    }

    // ==================== ANIMATION DES BARRES DE DISTRIBUTION ====================
    const barFills = document.querySelectorAll('.bar-fill');
    barFills.forEach((bar, index) => {
        setTimeout(() => {
            const width = bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.width = width;
            }, 100 + index * 100);
        }, 300);
    });

    // ==================== SHAKE ANIMATION ====================
    const styleShake = document.createElement('style');
    styleShake.textContent = `
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20% { transform: translateX(-10px); }
            40% { transform: translateX(10px); }
            60% { transform: translateX(-10px); }
            80% { transform: translateX(10px); }
        }
    `;
    document.head.appendChild(styleShake);

    // ==================== NOTIFICATIONS ====================
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
        notification.style.boxShadow = '0 10px 40px rgba(0,0,0,0.15)';
        notification.innerHTML = `
            <div class=\"d-flex align-items-center gap-2\">
                <i class=\"fas \${icons[type] || icons.info} fa-lg\"></i>
                <span class=\"fw-medium\">\${message}</span>
                <button type=\"button\" class=\"btn-close btn-close-white ms-2\" onclick=\"this.closest('.position-fixed').remove()\" style=\"opacity: 0.6;\"></button>
            </div>
        `;
        document.body.appendChild(notification);

        setTimeout(() => {
            notification.style.animation = 'slideDown 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 4000);
    }
});
</script>
{% endblock %}", "marketplace/products/product_ratings.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\products\\product_ratings.html.twig");
    }
}
