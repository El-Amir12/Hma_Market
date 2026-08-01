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

/* marketplace/products/product_show.html.twig */
class __TwigTemplate_21f354666c0874b04d9526b825b3c1d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/products/product_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/products/product_show.html.twig"));

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
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --card-radius: 16px;
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

    /* ==================== PRODUCT DETAIL ==================== */
    .product-detail-wrapper {
        background: white;
        border-radius: 24px;
        padding: 2rem;
        box-shadow: var(--card-shadow);
        border: 1px solid #e5e7eb;
        margin-bottom: 2rem;
    }

    .product-detail-image {
        width: 100%;
        height: 450px;
        object-fit: cover;
        border-radius: 16px;
        background: #f8fafc;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .product-detail-image:hover {
        transform: scale(1.02);
    }

    .product-detail-image-placeholder {
        width: 100%;
        height: 450px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
        border-radius: 16px;
        font-size: 6rem;
        color: #cbd5e1;
    }

    .product-detail-price {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--primary-color);
    }
    .product-detail-price.promo {
        color: #dc2626;
    }
    .product-detail-old-price {
        font-size: 1.2rem;
        color: #94a3b8;
        text-decoration: line-through;
        font-weight: 400;
    }

    .stock-status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.9rem;
        border: 2px solid transparent;
    }
    .stock-status-badge.in-stock {
        background: #dcfce7;
        color: #16a34a;
        border-color: #86efac;
    }
    .stock-status-badge.out-of-stock {
        background: #fee2e2;
        color: #dc2626;
        border-color: #fca5a5;
    }

    .product-detail-rating {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .product-detail-rating .stars {
        font-size: 1.2rem;
    }

    .info-line {
        display: flex;
        padding: 0.5rem 0;
        border-bottom: 1px solid #f1f5f9;
    }
    .info-line:last-child {
        border-bottom: none;
    }
    .info-label {
        font-weight: 600;
        color: #64748b;
        min-width: 100px;
        font-size: 0.9rem;
    }
    .info-value {
        color: #1e293b;
        font-weight: 500;
    }

    /* ==================== FAVORITE BUTTON ==================== */
    .favorite-btn {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 2px solid #e5e7eb;
        background: white;
        color: #94a3b8;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        flex-shrink: 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    .favorite-btn:hover {
        transform: scale(1.1);
        border-color: #ef4444;
        box-shadow: 0 4px 16px rgba(239, 68, 68, 0.15);
    }
    .favorite-btn i {
        font-size: 1.3rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .favorite-btn.active {
        border-color: #ef4444;
        background: #fef2f2;
        color: #ef4444;
        animation: favorite-pop 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .favorite-btn.active i {
        transform: scale(1.1);
    }

    @keyframes favorite-pop {
        0% { transform: scale(1); }
        30% { transform: scale(1.3); }
        60% { transform: scale(0.9); }
        100% { transform: scale(1); }
    }

    /* ==================== ADD TO CART BUTTON ==================== */
    .btn-add-to-cart {
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 12px;
        padding: 1rem 2rem;
        font-weight: 700;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        text-decoration: none;
        box-shadow: 0 4px 16px rgba(4, 99, 241, 0.25);
        cursor: pointer;
    }
    .btn-add-to-cart:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 32px rgba(4, 99, 241, 0.35);
        color: white;
        text-decoration: none;
    }
    .btn-add-to-cart:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none !important;
        box-shadow: none !important;
    }
    .btn-add-to-cart.already-in-cart {
        background: #10b981;
        box-shadow: 0 4px 16px rgba(16, 185, 129, 0.25);
    }
    .btn-add-to-cart .spinner {
        display: none;
    }
    .btn-add-to-cart.loading .spinner {
        display: inline-block;
        animation: spin 0.8s linear infinite;
    }
    .btn-add-to-cart.loading .btn-text {
        display: none;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* ==================== SECTION HEADER ==================== */
    .section-header-custom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    .section-header-custom h3 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .section-header-custom h3 i {
        color: var(--primary-color);
    }
    .section-header-custom .badge-count {
        background: #e2e8f0;
        color: #64748b;
        font-size: 0.75rem;
        padding: 0.15rem 0.6rem;
        border-radius: 50px;
        font-weight: 600;
    }
    .section-header-custom .see-all {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.4rem 1.2rem;
        border-radius: 50px;
        border: 2px solid var(--primary-color);
        font-size: 0.85rem;
    }
    .section-header-custom .see-all:hover {
        background: var(--primary-color);
        color: white;
        transform: translateX(4px);
    }

    /* ==================== SIMILAR PRODUCTS ==================== */
    .similar-products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 1.5rem;
        margin-top: 1rem;
    }

    .similar-products-grid .product-card {
        border-radius: var(--card-radius);
        overflow: hidden;
        border: 1px solid #e5e7eb;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        background: white;
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: var(--card-shadow);
    }

    .similar-products-grid .product-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-shadow-hover);
        border-color: var(--primary-color);
    }

    .similar-products-grid .product-card .product-image {
        height: 180px;
        background: #f8fafc;
        overflow: hidden;
        position: relative;
        flex-shrink: 0;
    }

    .similar-products-grid .product-card .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .similar-products-grid .product-card:hover .product-image img {
        transform: scale(1.05);
    }

    .similar-products-grid .product-card .product-image .placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        font-size: 3rem;
        color: #cbd5e1;
    }

    .similar-products-grid .product-card .product-badge {
        position: absolute;
        top: 8px;
        right: 8px;
        padding: 0.2rem 0.6rem;
        border-radius: 50px;
        font-size: 0.6rem;
        font-weight: 700;
        text-transform: uppercase;
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        z-index: 2;
    }

    .similar-products-grid .product-card .favorite-btn-sm {
        position: absolute;
        top: 8px;
        left: 8px;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(255,255,255,0.95);
        border: none;
        color: #94a3b8;
        transition: all 0.3s ease;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(4px);
        z-index: 3;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        font-size: 0.8rem;
    }

    .similar-products-grid .product-card .favorite-btn-sm:hover {
        background: white;
        color: #ef4444;
        transform: scale(1.1);
    }

    .similar-products-grid .product-card .favorite-btn-sm.active {
        color: #ef4444;
        background: #fef2f2;
    }

    .similar-products-grid .product-card .product-body {
        padding: 0.8rem 1rem 1rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        cursor: pointer;
    }

    .similar-products-grid .product-card .product-category {
        font-size: 0.65rem;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        margin-bottom: 0.2rem;
    }

    .similar-products-grid .product-card .product-name {
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 0.3rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        color: #0f172a;
        flex: 1;
        min-height: 38px;
    }

    .similar-products-grid .product-card .product-pricing {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.3rem;
        margin-bottom: 0.3rem;
    }

    .similar-products-grid .product-card .product-price {
        font-weight: 700;
        font-size: 1rem;
        color: var(--primary-color);
    }

    .similar-products-grid .product-card .product-price.promo {
        color: #dc2626;
    }

    .similar-products-grid .product-card .old-price {
        font-size: 0.7rem;
        color: #94a3b8;
        text-decoration: line-through;
    }

    .similar-products-grid .product-card .view-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.3rem;
        padding: 0.4rem 0.8rem;
        border-radius: 8px;
        border: 2px solid var(--primary-color);
        color: var(--primary-color);
        font-weight: 600;
        font-size: 0.75rem;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: 0.3rem;
    }

    .similar-products-grid .product-card .view-btn:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.2);
        text-decoration: none;
    }

    /* ==================== PAGINATION ==================== */
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
        margin-top: 2rem;
        flex-wrap: wrap;
    }
    .pagination-wrapper .page-item {
        list-style: none;
    }
    .pagination-wrapper .page-link {
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
    .pagination-wrapper .page-link:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
        transform: translateY(-2px);
    }
    .pagination-wrapper .page-item.active .page-link {
        background: var(--primary-gradient);
        border-color: var(--primary-color);
        color: white;
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.25);
    }

    /* ==================== PURCHASED BANNER ==================== */
    .purchased-banner {
        background: #fef3c7;
        border: 1px solid #fde68a;
        border-radius: 12px;
        padding: 1rem 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .purchased-banner .icon {
        color: #f59e0b;
        font-size: 1.5rem;
    }
    .purchased-banner .title {
        font-weight: 700;
        color: #92400e;
    }
    .purchased-banner .text {
        color: #78350f;
        font-size: 0.85rem;
    }

    /* ==================== SHARE BUTTONS ==================== */
    .share-buttons {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex-wrap: wrap;
    }
    .share-buttons .share-label {
        color: #94a3b8;
        font-size: 0.85rem;
    }
    .share-buttons a {
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }
    .share-buttons a:hover {
        transform: translateY(-2px) scale(1.1);
    }

    /* ==================== FILTRES SIMILAIRES ==================== */
    .similar-filters-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
        padding: 0.75rem 1rem;
        background: #f8fafc;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
    }

    .similar-filters-bar .filter-label {
        font-weight: 600;
        color: #64748b;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }

    .similar-filters-bar select {
        border-radius: 50px;
        padding: 0.3rem 1rem;
        border: 2px solid #e5e7eb;
        font-size: 0.85rem;
        color: #1e293b;
        transition: all 0.3s ease;
        background: white;
        min-width: 150px;
    }

    .similar-filters-bar select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.08);
        outline: none;
    }

    .similar-filters-bar .btn-filter-sm {
        border-radius: 50px;
        padding: 0.3rem 1.2rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .similar-filters-bar .btn-filter-sm:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.25);
    }

    .similar-filters-bar .btn-reset-sm {
        border-radius: 50px;
        padding: 0.3rem 1rem;
        background: transparent;
        color: #64748b;
        border: 2px solid #e5e7eb;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
    }

    .similar-filters-bar .btn-reset-sm:hover {
        background: #f1f5f9;
        border-color: #94a3b8;
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 992px) {
        .product-detail-image { height: 350px; }
        .product-detail-image-placeholder { height: 350px; font-size: 5rem; }
        .product-detail-price { font-size: 2rem; }
        .similar-products-grid { grid-template-columns: repeat(3, 1fr); }
    }

    @media (max-width: 768px) {
        .product-detail-wrapper { padding: 1.25rem; border-radius: 16px; }
        .product-detail-image { height: 250px; }
        .product-detail-image-placeholder { height: 250px; font-size: 4rem; }
        .product-detail-price { font-size: 1.8rem; }
        .product-detail-old-price { font-size: 1rem; }
        .similar-products-grid { grid-template-columns: repeat(2, 1fr); gap: 0.75rem; }
        .favorite-btn { width: 40px; height: 40px; }
        .favorite-btn i { font-size: 1.1rem; }
        .btn-add-to-cart { padding: 0.8rem 1.2rem; font-size: 1rem; }
        .info-label { min-width: 80px; font-size: 0.8rem; }
        .info-value { font-size: 0.85rem; }
        .purchased-banner { flex-direction: column; align-items: flex-start; }
        .section-header-custom { flex-direction: column; align-items: flex-start; }
        .similar-filters-bar { flex-direction: column; align-items: stretch; }
        .similar-filters-bar select { min-width: auto; }
        .similar-products-grid .product-card .product-image { height: 140px; }
    }

    @media (max-width: 480px) {
        .product-detail-wrapper { padding: 1rem; }
        .product-detail-image { height: 200px; }
        .product-detail-image-placeholder { height: 200px; font-size: 3rem; }
        .product-detail-price { font-size: 1.5rem; }
        .similar-products-grid { grid-template-columns: repeat(2, 1fr); gap: 0.5rem; }
        .btn-add-to-cart { padding: 0.6rem 1rem; font-size: 0.9rem; }
        .favorite-btn { width: 36px; height: 36px; }
        .favorite-btn i { font-size: 1rem; }
        .breadcrumb-custom { font-size: 0.85rem; }
        .similar-products-grid .product-card .product-image { height: 120px; }
        .similar-products-grid .product-card .product-name { font-size: 0.8rem; }
        .similar-products-grid .product-card .product-price { font-size: 0.95rem; }
        .similar-products-grid .product-card .favorite-btn-sm { width: 28px; height: 28px; font-size: 0.7rem; }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 664
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

        // line 665
        yield "<div class=\"container py-4\">
    <!-- Breadcrumb -->
    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 669
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\"><i class=\"fas fa-home me-1\"></i>Accueil</a></li>
            ";
        // line 670
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 670, $this->source); })()), "category", [], "any", false, false, false, 670)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 671
            yield "                <li class=\"breadcrumb-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 671, $this->source); })()), "category", [], "any", false, false, false, 671), "id", [], "any", false, false, false, 671), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 671, $this->source); })()), "category", [], "any", false, false, false, 671), "name", [], "any", false, false, false, 671), "html", null, true);
            yield "</a></li>
            ";
        }
        // line 673
        yield "            <li class=\"breadcrumb-item active\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 673, $this->source); })()), "name", [], "any", false, false, false, 673)), "truncate", [40, "..."], "method", false, false, false, 673), "html", null, true);
        yield "</li>
        </ol>
    </nav>

    <!-- Product Detail -->
    <div class=\"product-detail-wrapper\">
        <div class=\"row g-4\">
            <!-- Image -->
            <div class=\"col-lg-6\">
                <div class=\"position-relative\">
                    ";
        // line 683
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 683, $this->source); })()), "image", [], "any", false, false, false, 683) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 683, $this->source); })()), "image", [], "any", false, false, false, 683) != "default-product.png"))) {
            // line 684
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 684, $this->source); })()), "image", [], "any", false, false, false, 684))), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 685
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 685, $this->source); })()), "name", [], "any", false, false, false, 685), "html", null, true);
            yield "\" 
                             class=\"product-detail-image\"
                             loading=\"lazy\">
                    ";
        } else {
            // line 689
            yield "                        <div class=\"product-detail-image-placeholder\">
                            <i class=\"fas fa-box\"></i>
                        </div>
                    ";
        }
        // line 693
        yield "                </div>
            </div>

            <!-- Infos -->
            <div class=\"col-lg-6\">
                <!-- Header -->
                <div class=\"d-flex justify-content-between align-items-start gap-2 mb-2\">
                    <h1 class=\"h2 fw-bold mb-0\" style=\"color: #0f172a;\">";
        // line 700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 700, $this->source); })()), "name", [], "any", false, false, false, 700), "html", null, true);
        yield "</h1>
                    ";
        // line 701
        if ((($tmp = (isset($context["isCustomer"]) || array_key_exists("isCustomer", $context) ? $context["isCustomer"] : (function () { throw new RuntimeError('Variable "isCustomer" does not exist.', 701, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 702
            yield "                        <button class=\"favorite-btn ";
            if ((($tmp = (isset($context["isFavorite"]) || array_key_exists("isFavorite", $context) ? $context["isFavorite"] : (function () { throw new RuntimeError('Variable "isFavorite" does not exist.', 702, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\" 
                                onclick=\"toggleFavorite(this, ";
            // line 703
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 703, $this->source); })()), "id", [], "any", false, false, false, 703), "html", null, true);
            yield ")\"
                                data-product-id=\"";
            // line 704
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 704, $this->source); })()), "id", [], "any", false, false, false, 704), "html", null, true);
            yield "\"
                                title=\"";
            // line 705
            yield (((($tmp = (isset($context["isFavorite"]) || array_key_exists("isFavorite", $context) ? $context["isFavorite"] : (function () { throw new RuntimeError('Variable "isFavorite" does not exist.', 705, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Retirer des favoris") : ("Ajouter aux favoris"));
            yield "\">
                            <i class=\"";
            // line 706
            if ((($tmp = (isset($context["isFavorite"]) || array_key_exists("isFavorite", $context) ? $context["isFavorite"] : (function () { throw new RuntimeError('Variable "isFavorite" does not exist.', 706, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "fas";
            } else {
                yield "far";
            }
            yield " fa-heart\"></i>
                        </button>
                    ";
        }
        // line 709
        yield "                </div>

                <!-- Category -->
                ";
        // line 712
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 712, $this->source); })()), "category", [], "any", false, false, false, 712)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 713
            yield "                    <div class=\"mb-2\">
                        <span class=\"badge bg-primary px-3 py-2 rounded-pill\" style=\"font-size: 0.8rem; font-weight: 500;\">
                            <i class=\"fas fa-tag me-1\"></i> ";
            // line 715
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 715, $this->source); })()), "category", [], "any", false, false, false, 715), "name", [], "any", false, false, false, 715), "html", null, true);
            yield "
                        </span>
                    </div>
                ";
        }
        // line 719
        yield "
                <!-- Rating -->
                <div class=\"product-detail-rating mb-3\">
                    <div class=\"stars\">
                        ";
        // line 723
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 724
            yield "                            ";
            if (($context["i"] <= (isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 724, $this->source); })()))) {
                // line 725
                yield "                                <i class=\"fas fa-star text-warning star\"></i>
                            ";
            } elseif (((            // line 726
$context["i"] - 0.5) <= (isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 726, $this->source); })()))) {
                // line 727
                yield "                                <i class=\"fas fa-star-half-alt text-warning star\"></i>
                            ";
            } else {
                // line 729
                yield "                                <i class=\"far fa-star text-secondary star\"></i>
                            ";
            }
            // line 731
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 732
        yield "                    </div>
                    <span class=\"fw-semibold\">";
        // line 733
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 733, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "</span>
                    <span class=\"text-muted\">
                        (<a href=\"";
        // line 735
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_ratings", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 735, $this->source); })()), "id", [], "any", false, false, false, 735)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ratingsCount"]) || array_key_exists("ratingsCount", $context) ? $context["ratingsCount"] : (function () { throw new RuntimeError('Variable "ratingsCount" does not exist.', 735, $this->source); })()), "html", null, true);
        yield " avis</a>)
                    </span>
                </div>

                <!-- Price -->
                <div class=\"mb-3 p-3 bg-light rounded-3\" style=\"background: #f8fafc !important;\">
                    <div class=\"d-flex align-items-center flex-wrap gap-2\">
                        ";
        // line 742
        if (((isset($context["promotionInfo"]) || array_key_exists("promotionInfo", $context) ? $context["promotionInfo"] : (function () { throw new RuntimeError('Variable "promotionInfo" does not exist.', 742, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionInfo"]) || array_key_exists("promotionInfo", $context) ? $context["promotionInfo"] : (function () { throw new RuntimeError('Variable "promotionInfo" does not exist.', 742, $this->source); })()), "has_promotion", [], "any", false, false, false, 742))) {
            // line 743
            yield "                            <span class=\"product-detail-price promo\">
                                ";
            // line 744
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionInfo"]) || array_key_exists("promotionInfo", $context) ? $context["promotionInfo"] : (function () { throw new RuntimeError('Variable "promotionInfo" does not exist.', 744, $this->source); })()), "final_price", [], "any", false, false, false, 744), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 744, $this->source); })()), "hmaService", [], "any", false, false, false, 744)), "html", null, true);
            yield "
                            </span>
                            <span class=\"product-detail-old-price ms-2\">
                                ";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionInfo"]) || array_key_exists("promotionInfo", $context) ? $context["promotionInfo"] : (function () { throw new RuntimeError('Variable "promotionInfo" does not exist.', 747, $this->source); })()), "original_price", [], "any", false, false, false, 747), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 747, $this->source); })()), "hmaService", [], "any", false, false, false, 747)), "html", null, true);
            yield "
                            </span>
                            <span class=\"badge bg-danger rounded-pill px-3 py-2\" style=\"font-size: 0.85rem; font-weight: 700;\">
                                -";
            // line 750
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionInfo"]) || array_key_exists("promotionInfo", $context) ? $context["promotionInfo"] : (function () { throw new RuntimeError('Variable "promotionInfo" does not exist.', 750, $this->source); })()), "discount_percentage", [], "any", false, false, false, 750), "html", null, true);
            yield "%
                            </span>
                            ";
            // line 752
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionInfo"]) || array_key_exists("promotionInfo", $context) ? $context["promotionInfo"] : (function () { throw new RuntimeError('Variable "promotionInfo" does not exist.', 752, $this->source); })()), "promotion", [], "any", false, false, false, 752), "name", [], "any", false, false, false, 752)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 753
                yield "                                <p class=\"text-success mt-1 mb-0 w-100\" style=\"font-size: 0.85rem;\">
                                    <i class=\"fas fa-tag me-1\"></i> <strong>";
                // line 754
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionInfo"]) || array_key_exists("promotionInfo", $context) ? $context["promotionInfo"] : (function () { throw new RuntimeError('Variable "promotionInfo" does not exist.', 754, $this->source); })()), "promotion", [], "any", false, false, false, 754), "name", [], "any", false, false, false, 754), "html", null, true);
                yield "</strong>
                                </p>
                            ";
            }
            // line 757
            yield "                        ";
        } else {
            // line 758
            yield "                            <span class=\"product-detail-price\">
                                ";
            // line 759
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 759, $this->source); })()), "salePrice", [], "any", false, false, false, 759), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 759, $this->source); })()), "hmaService", [], "any", false, false, false, 759)), "html", null, true);
            yield "
                            </span>
                        ";
        }
        // line 762
        yield "                    </div>
                </div>

                <!-- Stock -->
                <div class=\"mb-3\">
                    ";
        // line 767
        if (((isset($context["currentStock"]) || array_key_exists("currentStock", $context) ? $context["currentStock"] : (function () { throw new RuntimeError('Variable "currentStock" does not exist.', 767, $this->source); })()) > 0)) {
            // line 768
            yield "                        <span class=\"stock-status-badge in-stock\">
                            <i class=\"fas fa-check-circle\"></i> Disponible
                        </span>
                    ";
        } else {
            // line 772
            yield "                        <span class=\"stock-status-badge out-of-stock\">
                            <i class=\"fas fa-times-circle\"></i> Indisponible
                        </span>
                    ";
        }
        // line 776
        yield "                </div>

                <!-- Description -->
                ";
        // line 779
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 779, $this->source); })()), "description", [], "any", false, false, false, 779)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 780
            yield "                    <div class=\"mb-3\">
                        <h6 class=\"fw-bold\" style=\"color: #1e293b;\"><i class=\"fas fa-align-left me-2\" style=\"color: var(--primary-color);\"></i>Description</h6>
                        <p class=\"text-muted\" style=\"line-height: 1.7; color: #475569 !important;\">";
            // line 782
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 782, $this->source); })()), "description", [], "any", false, false, false, 782), "html", null, true));
            yield "</p>
                    </div>
                ";
        }
        // line 785
        yield "
                <!-- Extra Info -->
                ";
        // line 787
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 787, $this->source); })()), "dosage", [], "any", false, false, false, 787) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 787, $this->source); })()), "form", [], "any", false, false, false, 787)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 787, $this->source); })()), "unit", [], "any", false, false, false, 787)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 787, $this->source); })()), "prescriptionRequired", [], "any", false, false, false, 787))) {
            // line 788
            yield "                    <div class=\"mb-3 p-3 bg-light rounded-3\" style=\"background: #f8fafc !important;\">
                        <h6 class=\"fw-bold mb-2\" style=\"color: #1e293b;\"><i class=\"fas fa-info-circle me-2\" style=\"color: var(--primary-color);\"></i>Informations supplémentaires</h6>
                        <div class=\"row g-2\">
                            ";
            // line 791
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 791, $this->source); })()), "dosage", [], "any", false, false, false, 791)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 792
                yield "                                <div class=\"col-md-6\">
                                    <div class=\"info-line\">
                                        <span class=\"info-label\">Dosage</span>
                                        <span class=\"info-value\">";
                // line 795
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 795, $this->source); })()), "dosage", [], "any", false, false, false, 795), "html", null, true);
                yield "</span>
                                    </div>
                                </div>
                            ";
            }
            // line 799
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 799, $this->source); })()), "form", [], "any", false, false, false, 799)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 800
                yield "                                <div class=\"col-md-6\">
                                    <div class=\"info-line\">
                                        <span class=\"info-label\">Forme</span>
                                        <span class=\"info-value\">";
                // line 803
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 803, $this->source); })()), "form", [], "any", false, false, false, 803), "html", null, true);
                yield "</span>
                                    </div>
                                </div>
                            ";
            }
            // line 807
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 807, $this->source); })()), "unit", [], "any", false, false, false, 807)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 808
                yield "                                <div class=\"col-md-6\">
                                    <div class=\"info-line\">
                                        <span class=\"info-label\">Unité</span>
                                        <span class=\"info-value\">";
                // line 811
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 811, $this->source); })()), "unit", [], "any", false, false, false, 811), "html", null, true);
                yield "</span>
                                    </div>
                                </div>
                            ";
            }
            // line 815
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 815, $this->source); })()), "prescriptionRequired", [], "any", false, false, false, 815)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 816
                yield "                                <div class=\"col-md-6\">
                                    <div class=\"info-line\">
                                        <span class=\"info-label\">Prescription</span>
                                        <span class=\"info-value\">
                                            <span class=\"badge bg-warning text-dark\">
                                                <i class=\"fas fa-prescription-bottle me-1\"></i> Obligatoire
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            ";
            }
            // line 827
            yield "                        </div>
                    </div>
                ";
        }
        // line 830
        yield "
                <!-- Actions -->
                <div class=\"d-flex gap-2 flex-wrap\">
                    ";
        // line 833
        if ((($tmp = (isset($context["isCustomer"]) || array_key_exists("isCustomer", $context) ? $context["isCustomer"] : (function () { throw new RuntimeError('Variable "isCustomer" does not exist.', 833, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 834
            yield "                        ";
            if ((($tmp = (isset($context["isInCart"]) || array_key_exists("isInCart", $context) ? $context["isInCart"] : (function () { throw new RuntimeError('Variable "isInCart" does not exist.', 834, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 835
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart");
                yield "\" class=\"btn-add-to-cart already-in-cart flex-grow-1\">
                                <i class=\"fas fa-shopping-cart me-2\"></i> Voir dans le panier
                            </a>
                        ";
            } elseif ((            // line 838
(isset($context["currentStock"]) || array_key_exists("currentStock", $context) ? $context["currentStock"] : (function () { throw new RuntimeError('Variable "currentStock" does not exist.', 838, $this->source); })()) > 0)) {
                // line 839
                yield "                            <button class=\"btn-add-to-cart flex-grow-1 add-to-cart\" 
                                    data-product-id=\"";
                // line 840
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 840, $this->source); })()), "id", [], "any", false, false, false, 840), "html", null, true);
                yield "\"
                                    data-product-name=\"";
                // line 841
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 841, $this->source); })()), "name", [], "any", false, false, false, 841), "html", null, true);
                yield "\">
                                <i class=\"fas fa-cart-plus me-2\"></i>
                                <span class=\"btn-text\">Ajouter au panier</span>
                                <span class=\"spinner\"><i class=\"fas fa-spinner\"></i></span>
                            </button>
                        ";
            } else {
                // line 847
                yield "                            <button class=\"btn-add-to-cart flex-grow-1\" disabled style=\"background: #94a3b8; box-shadow: none;\">
                                <i class=\"fas fa-times me-2\"></i> Indisponible
                            </button>
                        ";
            }
            // line 851
            yield "                    ";
        } else {
            // line 852
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
            yield "\" class=\"btn-add-to-cart flex-grow-1\" style=\"background: #8b5cf6; box-shadow: 0 4px 16px rgba(139, 92, 246, 0.25);\">
                            <i class=\"fas fa-sign-in-alt me-2\"></i> Connectez-vous pour acheter
                        </a>
                    ";
        }
        // line 856
        yield "                </div>

                <!-- Purchased Banner -->
                ";
        // line 859
        if (((isset($context["isCustomer"]) || array_key_exists("isCustomer", $context) ? $context["isCustomer"] : (function () { throw new RuntimeError('Variable "isCustomer" does not exist.', 859, $this->source); })()) && (isset($context["hasPurchased"]) || array_key_exists("hasPurchased", $context) ? $context["hasPurchased"] : (function () { throw new RuntimeError('Variable "hasPurchased" does not exist.', 859, $this->source); })()))) {
            // line 860
            yield "                    <div class=\"mt-3 purchased-banner\">
                        <div class=\"d-flex align-items-center gap-3\">
                            <i class=\"fas fa-star icon\"></i>
                            <div>
                                <h6 class=\"title mb-0\">Vous avez acheté ce produit</h6>
                                <p class=\"text mb-0\">Partagez votre expérience avec la communauté.</p>
                            </div>
                        </div>
                        <a href=\"";
            // line 868
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_ratings", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 868, $this->source); })()), "id", [], "any", false, false, false, 868)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm rounded-pill px-4\">
                            <i class=\"fas fa-pen me-1\"></i> Laisser un avis
                        </a>
                    </div>
                ";
        }
        // line 873
        yield "
                <!-- Share -->
                <div class=\"mt-3 share-buttons\">
                    <span class=\"share-label\"><i class=\"fas fa-share-alt me-1\"></i>Partager :</span>
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 877
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 877, $this->source); })()), "request", [], "any", false, false, false, 877), "uri", [], "any", false, false, false, 877)), "html", null, true);
        yield "\" 
                       target=\"_blank\" style=\"color: #1877f2;\">
                        <i class=\"fab fa-facebook fa-lg\"></i>
                    </a>
                    <a href=\"https://twitter.com/intent/tweet?text=";
        // line 881
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 881, $this->source); })()), "name", [], "any", false, false, false, 881), "html", null, true);
        yield "&url=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 881, $this->source); })()), "request", [], "any", false, false, false, 881), "uri", [], "any", false, false, false, 881)), "html", null, true);
        yield "\" 
                       target=\"_blank\" style=\"color: #000;\">
                        <i class=\"fab fa-x-twitter fa-lg\"></i>
                    </a>
                    <a href=\"https://wa.me/?text=";
        // line 885
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 885, $this->source); })()), "name", [], "any", false, false, false, 885), "html", null, true);
        yield "%20-%20";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 885, $this->source); })()), "request", [], "any", false, false, false, 885), "uri", [], "any", false, false, false, 885)), "html", null, true);
        yield "\" 
                       target=\"_blank\" style=\"color: #25d366;\">
                        <i class=\"fab fa-whatsapp fa-lg\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== PRODUITS SIMILAIRES ==================== -->
    ";
        // line 895
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["similarProducts"]) || array_key_exists("similarProducts", $context) ? $context["similarProducts"] : (function () { throw new RuntimeError('Variable "similarProducts" does not exist.', 895, $this->source); })())) > 0)) {
            // line 896
            yield "        <div class=\"mt-5\">
            <div class=\"section-header-custom\">
                <h3>
                    <i class=\"fas fa-tags\"></i> Produits similaires
                    <span class=\"badge-count\">";
            // line 900
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSimilar"]) || array_key_exists("totalSimilar", $context) ? $context["totalSimilar"] : (function () { throw new RuntimeError('Variable "totalSimilar" does not exist.', 900, $this->source); })()), "html", null, true);
            yield "</span>
                </h3>
                <a href=\"";
            // line 902
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
            yield "?category=";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 902, $this->source); })()), "category", [], "any", false, false, false, 902)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 902, $this->source); })()), "category", [], "any", false, false, false, 902), "id", [], "any", false, false, false, 902), "html", null, true);
            }
            yield "\" class=\"see-all\">
                    Voir tout <i class=\"fas fa-arrow-right ms-1\"></i>
                </a>
            </div>

            <!-- ✅ BARRE DE FILTRES POUR PRODUITS SIMILAIRES -->
            <div class=\"similar-filters-bar\">
                <span class=\"filter-label\"><i class=\"fas fa-filter me-1\"></i>Filtrer</span>
                <select id=\"similarSortFilter\" name=\"similar_sort\" onchange=\"applySimilarFilters()\">
                    <option value=\"latest\">Plus récents</option>
                    <option value=\"price_asc\">Prix croissant</option>
                    <option value=\"price_desc\">Prix décroissant</option>
                    <option value=\"name\">Nom A-Z</option>
                </select>
                <button class=\"btn-filter-sm\" onclick=\"applySimilarFilters()\">
                    <i class=\"fas fa-search me-1\"></i>Filtrer
                </button>
                <button class=\"btn-reset-sm\" onclick=\"resetSimilarFilters()\">
                    <i class=\"fas fa-undo me-1\"></i>Réinitialiser
                </button>
            </div>

            <div class=\"similar-products-grid\" id=\"similarProductsGrid\">
                ";
            // line 925
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["similarProducts"]) || array_key_exists("similarProducts", $context) ? $context["similarProducts"] : (function () { throw new RuntimeError('Variable "similarProducts" does not exist.', 925, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["similarProduct"]) {
                // line 926
                yield "                    <div class=\"product-card similar-product-item\" 
                         data-price=\"";
                // line 927
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "salePrice", [], "any", false, false, false, 927), "html", null, true);
                yield "\"
                         data-name=\"";
                // line 928
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "name", [], "any", false, false, false, 928), "html", null, true);
                yield "\"
                         data-date=\"";
                // line 929
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "createdAt", [], "any", false, false, false, 929), "U"), "html", null, true);
                yield "\">
                        <div class=\"product-image\" onclick=\"window.location.href='";
                // line 930
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "id", [], "any", false, false, false, 930)]), "html", null, true);
                yield "'\">
                            ";
                // line 931
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "image", [], "any", false, false, false, 931) && (CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "image", [], "any", false, false, false, 931) != "default-product.png"))) {
                    // line 932
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "image", [], "any", false, false, false, 932))), "html", null, true);
                    yield "\" 
                                     alt=\"";
                    // line 933
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "name", [], "any", false, false, false, 933), "html", null, true);
                    yield "\" 
                                     loading=\"lazy\">
                            ";
                } else {
                    // line 936
                    yield "                                <div class=\"placeholder\">
                                    <i class=\"fas fa-box\"></i>
                                </div>
                            ";
                }
                // line 940
                yield "                            
                            ";
                // line 942
                yield "                            ";
                $context["hasPromo"] = false;
                // line 943
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "promotionProducts", [], "any", false, false, false, 943));
                foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
                    // line 944
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["pp"], "promotion", [], "any", false, false, false, 944) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pp"], "promotion", [], "any", false, false, false, 944), "isCurrentlyActive", [], "any", false, false, false, 944))) {
                        // line 945
                        yield "                                    ";
                        $context["hasPromo"] = true;
                        // line 946
                        yield "                                ";
                    }
                    // line 947
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['pp'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 948
                yield "                            ";
                if ((($tmp = (isset($context["hasPromo"]) || array_key_exists("hasPromo", $context) ? $context["hasPromo"] : (function () { throw new RuntimeError('Variable "hasPromo" does not exist.', 948, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 949
                    yield "                                <span class=\"product-badge\">Promo</span>
                            ";
                }
                // line 951
                yield "                            
                            ";
                // line 953
                yield "                            ";
                if ((($tmp = (isset($context["isCustomer"]) || array_key_exists("isCustomer", $context) ? $context["isCustomer"] : (function () { throw new RuntimeError('Variable "isCustomer" does not exist.', 953, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 954
                    yield "                                <button class=\"favorite-btn-sm ";
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "id", [], "any", false, false, false, 954), (isset($context["favoriteIds"]) || array_key_exists("favoriteIds", $context) ? $context["favoriteIds"] : (function () { throw new RuntimeError('Variable "favoriteIds" does not exist.', 954, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\" 
                                        onclick=\"event.stopPropagation(); toggleFavorite(this, ";
                    // line 955
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "id", [], "any", false, false, false, 955), "html", null, true);
                    yield ")\"
                                        data-product-id=\"";
                    // line 956
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "id", [], "any", false, false, false, 956), "html", null, true);
                    yield "\">
                                    <i class=\"";
                    // line 957
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "id", [], "any", false, false, false, 957), (isset($context["favoriteIds"]) || array_key_exists("favoriteIds", $context) ? $context["favoriteIds"] : (function () { throw new RuntimeError('Variable "favoriteIds" does not exist.', 957, $this->source); })()))) {
                        yield "fas";
                    } else {
                        yield "far";
                    }
                    yield " fa-heart\"></i>
                                </button>
                            ";
                }
                // line 960
                yield "                        </div>
                        <div class=\"product-body\" onclick=\"window.location.href='";
                // line 961
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "id", [], "any", false, false, false, 961)]), "html", null, true);
                yield "'\">
                            <div class=\"product-category\">
                                ";
                // line 963
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "category", [], "any", false, false, false, 963)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "category", [], "any", false, false, false, 963), "name", [], "any", false, false, false, 963), "html", null, true)) : ("Non catégorisé"));
                yield "
                            </div>
                            
                            <h6 class=\"product-name\">";
                // line 966
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "name", [], "any", false, false, false, 966), "html", null, true);
                yield "</h6>
                            
                            <div class=\"product-pricing\">
                                ";
                // line 969
                if ((($tmp = (isset($context["hasPromo"]) || array_key_exists("hasPromo", $context) ? $context["hasPromo"] : (function () { throw new RuntimeError('Variable "hasPromo" does not exist.', 969, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 970
                    yield "                                    <span class=\"product-price promo\">
                                        ";
                    // line 971
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "salePrice", [], "any", false, false, false, 971), CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "hmaService", [], "any", false, false, false, 971)), "html", null, true);
                    yield "
                                    </span>
                                    <span class=\"old-price\">
                                        ";
                    // line 974
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "purchasePrice", [], "any", false, false, false, 974), CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "hmaService", [], "any", false, false, false, 974)), "html", null, true);
                    yield "
                                    </span>
                                ";
                } else {
                    // line 977
                    yield "                                    <span class=\"product-price\">
                                        ";
                    // line 978
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "salePrice", [], "any", false, false, false, 978), CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "hmaService", [], "any", false, false, false, 978)), "html", null, true);
                    yield "
                                    </span>
                                ";
                }
                // line 981
                yield "                            </div>
                            
                            <div class=\"product-rating\">
                                <div class=\"stars\">
                                    ";
                // line 985
                $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "averageRating", [], "any", true, true, false, 985)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "averageRating", [], "any", false, false, false, 985), 0)) : (0));
                // line 986
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 987
                    yield "                                        ";
                    if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 987, $this->source); })()))) {
                        // line 988
                        yield "                                            <i class=\"fas fa-star filled\"></i>
                                        ";
                    } elseif (((                    // line 989
$context["i"] - 0.5) <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 989, $this->source); })()))) {
                        // line 990
                        yield "                                            <i class=\"fas fa-star-half-alt half-filled\"></i>
                                        ";
                    } else {
                        // line 992
                        yield "                                            <i class=\"far fa-star\"></i>
                                        ";
                    }
                    // line 994
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 995
                yield "                                </div>
                                <span class=\"rating-text\">(<strong>";
                // line 996
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "ratingsCount", [], "any", true, true, false, 996)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "ratingsCount", [], "any", false, false, false, 996), 0)) : (0)), "html", null, true);
                yield "</strong>)</span>
                            </div>
                            
                            <a href=\"";
                // line 999
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["similarProduct"], "id", [], "any", false, false, false, 999)]), "html", null, true);
                yield "\" class=\"view-btn\">
                                <i class=\"fas fa-eye me-1\"></i> Voir
                            </a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['similarProduct'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1005
            yield "            </div>

            <!-- ✅ PAGINATION DES PRODUITS SIMILAIRES -->
            ";
            // line 1008
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1008, $this->source); })()) > 1)) {
                // line 1009
                yield "                <div class=\"pagination-wrapper\">
                    <ul class=\"pagination\">
                        ";
                // line 1011
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1011, $this->source); })()) > 1)) {
                    // line 1012
                    yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
                    // line 1013
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1013, $this->source); })()), "id", [], "any", false, false, false, 1013), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1013, $this->source); })()) - 1)]), "html", null, true);
                    yield "\">
                                    <i class=\"fas fa-chevron-left\"></i>
                                </a>
                            </li>
                        ";
                }
                // line 1018
                yield "
                        ";
                // line 1019
                $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1019, $this->source); })()) - 2));
                // line 1020
                yield "                        ";
                $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1020, $this->source); })()), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1020, $this->source); })()) + 2));
                // line 1021
                yield "
                        ";
                // line 1022
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 1022, $this->source); })()) > 1)) {
                    // line 1023
                    yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
                    // line 1024
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1024, $this->source); })()), "id", [], "any", false, false, false, 1024), "page" => 1]), "html", null, true);
                    yield "\">1</a>
                            </li>
                            ";
                    // line 1026
                    if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 1026, $this->source); })()) > 2)) {
                        // line 1027
                        yield "                                <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                            ";
                    }
                    // line 1029
                    yield "                        ";
                }
                // line 1030
                yield "
                        ";
                // line 1031
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 1031, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 1031, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 1032
                    yield "                            <li class=\"page-item ";
                    if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1032, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\">
                                <a class=\"page-link\" href=\"";
                    // line 1033
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1033, $this->source); })()), "id", [], "any", false, false, false, 1033), "page" => $context["page"]]), "html", null, true);
                    yield "\">
                                    ";
                    // line 1034
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                                </a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1038
                yield "
                        ";
                // line 1039
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 1039, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1039, $this->source); })()))) {
                    // line 1040
                    yield "                            ";
                    if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 1040, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1040, $this->source); })()) - 1))) {
                        // line 1041
                        yield "                                <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                            ";
                    }
                    // line 1043
                    yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
                    // line 1044
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1044, $this->source); })()), "id", [], "any", false, false, false, 1044), "page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1044, $this->source); })())]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1044, $this->source); })()), "html", null, true);
                    yield "</a>
                            </li>
                        ";
                }
                // line 1047
                yield "
                        ";
                // line 1048
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1048, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1048, $this->source); })()))) {
                    // line 1049
                    yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
                    // line 1050
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1050, $this->source); })()), "id", [], "any", false, false, false, 1050), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1050, $this->source); })()) + 1)]), "html", null, true);
                    yield "\">
                                    <i class=\"fas fa-chevron-right\"></i>
                                </a>
                            </li>
                        ";
                }
                // line 1055
                yield "                    </ul>
                </div>
            ";
            }
            // line 1058
            yield "        </div>
    ";
        }
        // line 1060
        yield "</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== FAVORIS ====================
    window.toggleFavorite = function(btn, productId) {
        const icon = btn.querySelector('i');
        const isCurrentlyFavorite = icon.classList.contains('fas');
        const allFavoriteBtns = document.querySelectorAll(`.favorite-btn-sm[data-product-id=\"\${productId}\"], .favorite-btn[data-product-id=\"\${productId}\"]`);
        
        btn.disabled = true;
        btn.style.opacity = '0.6';
        icon.className = 'fas fa-spinner fa-spin';
        
        fetch('";
        // line 1074
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorite_toggle");
        yield "', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ productId: productId })
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
                const isFavorite = data.isFavorite;
                const iconClass = isFavorite ? 'fas' : 'far';
                
                // Mettre à jour TOUS les boutons du même produit
                allFavoriteBtns.forEach(button => {
                    const btnIcon = button.querySelector('i');
                    btnIcon.className = iconClass + ' fa-heart';
                    button.classList.toggle('active', isFavorite);
                    if (isFavorite) {
                        button.style.color = '#ef4444';
                        button.style.borderColor = '#ef4444';
                        button.style.background = '#fef2f2';
                    } else {
                        button.style.color = '#94a3b8';
                        button.style.borderColor = '#e5e7eb';
                        button.style.background = 'rgba(255,255,255,0.95)';
                    }
                    button.disabled = false;
                    button.style.opacity = '1';
                });
                
                if (isFavorite) {
                    showNotification('✓ Ajouté aux favoris', 'success');
                } else {
                    showNotification('Retiré des favoris', 'info');
                }
                
                updateFavoritesCount(data.count);
            } else {
                restoreFavoriteState(btn, isCurrentlyFavorite);
                showNotification(data.error || 'Erreur', 'error');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            restoreFavoriteState(btn, isCurrentlyFavorite);
            showNotification(error.message || 'Erreur de connexion', 'error');
        });
    };

    function restoreFavoriteState(btn, isCurrentlyFavorite) {
        const icon = btn.querySelector('i');
        if (isCurrentlyFavorite) {
            icon.className = 'fas fa-heart';
            btn.classList.add('active');
            btn.style.color = '#ef4444';
            btn.style.borderColor = '#ef4444';
            btn.style.background = '#fef2f2';
        } else {
            icon.className = 'far fa-heart';
            btn.classList.remove('active');
            btn.style.color = '#94a3b8';
            btn.style.borderColor = '#e5e7eb';
            btn.style.background = 'rgba(255,255,255,0.95)';
        }
        btn.disabled = false;
        btn.style.opacity = '1';
    }

    // ==================== AJOUT AU PANIER ====================
    document.querySelectorAll('.add-to-cart').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (this.disabled || this.classList.contains('loading')) return;
            
            const productId = this.dataset.productId;
            const productName = this.dataset.productName || 'Produit';
            
            this.classList.add('loading');
            this.disabled = true;
            
            fetch('";
        // line 1163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart_add");
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ productId: productId, quantity: 1 })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const cartBadge = document.getElementById('cartCount');
                    if (cartBadge) {
                        cartBadge.textContent = data.cartCount || 0;
                        cartBadge.style.display = data.cartCount > 0 ? 'block' : 'none';
                    }
                    
                    this.classList.remove('loading');
                    this.innerHTML = '<i class=\"fas fa-check me-2\"></i> Dans le panier';
                    this.classList.add('already-in-cart');
                    this.onclick = function() {
                        window.location.href = '";
        // line 1184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart");
        yield "';
                    };
                    
                    showNotification('✓ ' + productName + ' ajouté au panier', 'success');
                } else {
                    this.classList.remove('loading');
                    this.disabled = false;
                    
                    if (data.error && data.error.includes('déjà')) {
                        this.innerHTML = '<i class=\"fas fa-check me-2\"></i> Dans le panier';
                        this.classList.add('already-in-cart');
                        this.onclick = function() {
                            window.location.href = '";
        // line 1196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart");
        yield "';
                        };
                        showNotification(data.error, 'info');
                    } else if (data.error && data.error.includes('connecter')) {
                        window.location.href = '";
        // line 1200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
        yield "';
                    } else {
                        showNotification(data.error || 'Erreur', 'error');
                    }
                }
            })
            .catch(() => {
                this.classList.remove('loading');
                this.disabled = false;
                showNotification('Erreur de connexion', 'error');
            });
        });
    });

    // ==================== FILTRES PRODUITS SIMILAIRES ====================
    window.applySimilarFilters = function() {
        const sort = document.getElementById('similarSortFilter').value;
        const grid = document.getElementById('similarProductsGrid');
        const items = grid.querySelectorAll('.similar-product-item');
        const itemsArray = Array.from(items);
        
        let sortedItems = [];
        
        switch(sort) {
            case 'price_asc':
                sortedItems = itemsArray.sort((a, b) => parseFloat(a.dataset.price) - parseFloat(b.dataset.price));
                break;
            case 'price_desc':
                sortedItems = itemsArray.sort((a, b) => parseFloat(b.dataset.price) - parseFloat(a.dataset.price));
                break;
            case 'name':
                sortedItems = itemsArray.sort((a, b) => a.dataset.name.localeCompare(b.dataset.name));
                break;
            default:
                sortedItems = itemsArray.sort((a, b) => parseInt(b.dataset.date) - parseInt(a.dataset.date));
        }
        
        grid.innerHTML = '';
        sortedItems.forEach(item => grid.appendChild(item));
    };

    window.resetSimilarFilters = function() {
        document.getElementById('similarSortFilter').value = 'latest';
        applySimilarFilters();
    };

    // ==================== COMPTEURS ====================
    window.updateFavoritesCount = function(count) {
        const badge = document.getElementById('favoritesCount');
        if (badge) {
            if (count !== undefined) {
                badge.textContent = count;
                badge.style.display = count > 0 ? 'block' : 'none';
            } else {
                fetch('";
        // line 1254
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites_count");
        yield "')
                    .then(r => r.json())
                    .then(data => {
                        badge.textContent = data.count || 0;
                        badge.style.display = data.count > 0 ? 'block' : 'none';
                    })
                    .catch(() => {});
            }
        }
    };

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
        return "marketplace/products/product_show.html.twig";
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
        return array (  1816 => 1254,  1759 => 1200,  1752 => 1196,  1737 => 1184,  1713 => 1163,  1621 => 1074,  1605 => 1060,  1601 => 1058,  1596 => 1055,  1588 => 1050,  1585 => 1049,  1583 => 1048,  1580 => 1047,  1572 => 1044,  1569 => 1043,  1565 => 1041,  1562 => 1040,  1560 => 1039,  1557 => 1038,  1547 => 1034,  1543 => 1033,  1536 => 1032,  1532 => 1031,  1529 => 1030,  1526 => 1029,  1522 => 1027,  1520 => 1026,  1515 => 1024,  1512 => 1023,  1510 => 1022,  1507 => 1021,  1504 => 1020,  1502 => 1019,  1499 => 1018,  1491 => 1013,  1488 => 1012,  1486 => 1011,  1482 => 1009,  1480 => 1008,  1475 => 1005,  1463 => 999,  1457 => 996,  1454 => 995,  1448 => 994,  1444 => 992,  1440 => 990,  1438 => 989,  1435 => 988,  1432 => 987,  1427 => 986,  1425 => 985,  1419 => 981,  1413 => 978,  1410 => 977,  1404 => 974,  1398 => 971,  1395 => 970,  1393 => 969,  1387 => 966,  1381 => 963,  1376 => 961,  1373 => 960,  1363 => 957,  1359 => 956,  1355 => 955,  1348 => 954,  1345 => 953,  1342 => 951,  1338 => 949,  1335 => 948,  1329 => 947,  1326 => 946,  1323 => 945,  1320 => 944,  1315 => 943,  1312 => 942,  1309 => 940,  1303 => 936,  1297 => 933,  1292 => 932,  1290 => 931,  1286 => 930,  1282 => 929,  1278 => 928,  1274 => 927,  1271 => 926,  1267 => 925,  1237 => 902,  1232 => 900,  1226 => 896,  1224 => 895,  1209 => 885,  1200 => 881,  1193 => 877,  1187 => 873,  1179 => 868,  1169 => 860,  1167 => 859,  1162 => 856,  1154 => 852,  1151 => 851,  1145 => 847,  1136 => 841,  1132 => 840,  1129 => 839,  1127 => 838,  1120 => 835,  1117 => 834,  1115 => 833,  1110 => 830,  1105 => 827,  1092 => 816,  1089 => 815,  1082 => 811,  1077 => 808,  1074 => 807,  1067 => 803,  1062 => 800,  1059 => 799,  1052 => 795,  1047 => 792,  1045 => 791,  1040 => 788,  1038 => 787,  1034 => 785,  1028 => 782,  1024 => 780,  1022 => 779,  1017 => 776,  1011 => 772,  1005 => 768,  1003 => 767,  996 => 762,  990 => 759,  987 => 758,  984 => 757,  978 => 754,  975 => 753,  973 => 752,  968 => 750,  962 => 747,  956 => 744,  953 => 743,  951 => 742,  939 => 735,  934 => 733,  931 => 732,  925 => 731,  921 => 729,  917 => 727,  915 => 726,  912 => 725,  909 => 724,  905 => 723,  899 => 719,  892 => 715,  888 => 713,  886 => 712,  881 => 709,  871 => 706,  867 => 705,  863 => 704,  859 => 703,  852 => 702,  850 => 701,  846 => 700,  837 => 693,  831 => 689,  824 => 685,  819 => 684,  817 => 683,  803 => 673,  793 => 671,  791 => 670,  787 => 669,  781 => 665,  768 => 664,  102 => 8,  89 => 7,  65 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/products/product_show.html.twig #}

{% extends 'base_marketplace.html.twig' %}

{% block title %}{{ product.name }} - HMA Marketplace{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --card-radius: 16px;
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

    /* ==================== PRODUCT DETAIL ==================== */
    .product-detail-wrapper {
        background: white;
        border-radius: 24px;
        padding: 2rem;
        box-shadow: var(--card-shadow);
        border: 1px solid #e5e7eb;
        margin-bottom: 2rem;
    }

    .product-detail-image {
        width: 100%;
        height: 450px;
        object-fit: cover;
        border-radius: 16px;
        background: #f8fafc;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .product-detail-image:hover {
        transform: scale(1.02);
    }

    .product-detail-image-placeholder {
        width: 100%;
        height: 450px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
        border-radius: 16px;
        font-size: 6rem;
        color: #cbd5e1;
    }

    .product-detail-price {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--primary-color);
    }
    .product-detail-price.promo {
        color: #dc2626;
    }
    .product-detail-old-price {
        font-size: 1.2rem;
        color: #94a3b8;
        text-decoration: line-through;
        font-weight: 400;
    }

    .stock-status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.9rem;
        border: 2px solid transparent;
    }
    .stock-status-badge.in-stock {
        background: #dcfce7;
        color: #16a34a;
        border-color: #86efac;
    }
    .stock-status-badge.out-of-stock {
        background: #fee2e2;
        color: #dc2626;
        border-color: #fca5a5;
    }

    .product-detail-rating {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .product-detail-rating .stars {
        font-size: 1.2rem;
    }

    .info-line {
        display: flex;
        padding: 0.5rem 0;
        border-bottom: 1px solid #f1f5f9;
    }
    .info-line:last-child {
        border-bottom: none;
    }
    .info-label {
        font-weight: 600;
        color: #64748b;
        min-width: 100px;
        font-size: 0.9rem;
    }
    .info-value {
        color: #1e293b;
        font-weight: 500;
    }

    /* ==================== FAVORITE BUTTON ==================== */
    .favorite-btn {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 2px solid #e5e7eb;
        background: white;
        color: #94a3b8;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        flex-shrink: 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    .favorite-btn:hover {
        transform: scale(1.1);
        border-color: #ef4444;
        box-shadow: 0 4px 16px rgba(239, 68, 68, 0.15);
    }
    .favorite-btn i {
        font-size: 1.3rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .favorite-btn.active {
        border-color: #ef4444;
        background: #fef2f2;
        color: #ef4444;
        animation: favorite-pop 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .favorite-btn.active i {
        transform: scale(1.1);
    }

    @keyframes favorite-pop {
        0% { transform: scale(1); }
        30% { transform: scale(1.3); }
        60% { transform: scale(0.9); }
        100% { transform: scale(1); }
    }

    /* ==================== ADD TO CART BUTTON ==================== */
    .btn-add-to-cart {
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 12px;
        padding: 1rem 2rem;
        font-weight: 700;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        text-decoration: none;
        box-shadow: 0 4px 16px rgba(4, 99, 241, 0.25);
        cursor: pointer;
    }
    .btn-add-to-cart:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 32px rgba(4, 99, 241, 0.35);
        color: white;
        text-decoration: none;
    }
    .btn-add-to-cart:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none !important;
        box-shadow: none !important;
    }
    .btn-add-to-cart.already-in-cart {
        background: #10b981;
        box-shadow: 0 4px 16px rgba(16, 185, 129, 0.25);
    }
    .btn-add-to-cart .spinner {
        display: none;
    }
    .btn-add-to-cart.loading .spinner {
        display: inline-block;
        animation: spin 0.8s linear infinite;
    }
    .btn-add-to-cart.loading .btn-text {
        display: none;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* ==================== SECTION HEADER ==================== */
    .section-header-custom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    .section-header-custom h3 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .section-header-custom h3 i {
        color: var(--primary-color);
    }
    .section-header-custom .badge-count {
        background: #e2e8f0;
        color: #64748b;
        font-size: 0.75rem;
        padding: 0.15rem 0.6rem;
        border-radius: 50px;
        font-weight: 600;
    }
    .section-header-custom .see-all {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.4rem 1.2rem;
        border-radius: 50px;
        border: 2px solid var(--primary-color);
        font-size: 0.85rem;
    }
    .section-header-custom .see-all:hover {
        background: var(--primary-color);
        color: white;
        transform: translateX(4px);
    }

    /* ==================== SIMILAR PRODUCTS ==================== */
    .similar-products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 1.5rem;
        margin-top: 1rem;
    }

    .similar-products-grid .product-card {
        border-radius: var(--card-radius);
        overflow: hidden;
        border: 1px solid #e5e7eb;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        background: white;
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: var(--card-shadow);
    }

    .similar-products-grid .product-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-shadow-hover);
        border-color: var(--primary-color);
    }

    .similar-products-grid .product-card .product-image {
        height: 180px;
        background: #f8fafc;
        overflow: hidden;
        position: relative;
        flex-shrink: 0;
    }

    .similar-products-grid .product-card .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .similar-products-grid .product-card:hover .product-image img {
        transform: scale(1.05);
    }

    .similar-products-grid .product-card .product-image .placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        font-size: 3rem;
        color: #cbd5e1;
    }

    .similar-products-grid .product-card .product-badge {
        position: absolute;
        top: 8px;
        right: 8px;
        padding: 0.2rem 0.6rem;
        border-radius: 50px;
        font-size: 0.6rem;
        font-weight: 700;
        text-transform: uppercase;
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        z-index: 2;
    }

    .similar-products-grid .product-card .favorite-btn-sm {
        position: absolute;
        top: 8px;
        left: 8px;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(255,255,255,0.95);
        border: none;
        color: #94a3b8;
        transition: all 0.3s ease;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(4px);
        z-index: 3;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        font-size: 0.8rem;
    }

    .similar-products-grid .product-card .favorite-btn-sm:hover {
        background: white;
        color: #ef4444;
        transform: scale(1.1);
    }

    .similar-products-grid .product-card .favorite-btn-sm.active {
        color: #ef4444;
        background: #fef2f2;
    }

    .similar-products-grid .product-card .product-body {
        padding: 0.8rem 1rem 1rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        cursor: pointer;
    }

    .similar-products-grid .product-card .product-category {
        font-size: 0.65rem;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        margin-bottom: 0.2rem;
    }

    .similar-products-grid .product-card .product-name {
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 0.3rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        color: #0f172a;
        flex: 1;
        min-height: 38px;
    }

    .similar-products-grid .product-card .product-pricing {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.3rem;
        margin-bottom: 0.3rem;
    }

    .similar-products-grid .product-card .product-price {
        font-weight: 700;
        font-size: 1rem;
        color: var(--primary-color);
    }

    .similar-products-grid .product-card .product-price.promo {
        color: #dc2626;
    }

    .similar-products-grid .product-card .old-price {
        font-size: 0.7rem;
        color: #94a3b8;
        text-decoration: line-through;
    }

    .similar-products-grid .product-card .view-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.3rem;
        padding: 0.4rem 0.8rem;
        border-radius: 8px;
        border: 2px solid var(--primary-color);
        color: var(--primary-color);
        font-weight: 600;
        font-size: 0.75rem;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: 0.3rem;
    }

    .similar-products-grid .product-card .view-btn:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.2);
        text-decoration: none;
    }

    /* ==================== PAGINATION ==================== */
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
        margin-top: 2rem;
        flex-wrap: wrap;
    }
    .pagination-wrapper .page-item {
        list-style: none;
    }
    .pagination-wrapper .page-link {
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
    .pagination-wrapper .page-link:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
        transform: translateY(-2px);
    }
    .pagination-wrapper .page-item.active .page-link {
        background: var(--primary-gradient);
        border-color: var(--primary-color);
        color: white;
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.25);
    }

    /* ==================== PURCHASED BANNER ==================== */
    .purchased-banner {
        background: #fef3c7;
        border: 1px solid #fde68a;
        border-radius: 12px;
        padding: 1rem 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .purchased-banner .icon {
        color: #f59e0b;
        font-size: 1.5rem;
    }
    .purchased-banner .title {
        font-weight: 700;
        color: #92400e;
    }
    .purchased-banner .text {
        color: #78350f;
        font-size: 0.85rem;
    }

    /* ==================== SHARE BUTTONS ==================== */
    .share-buttons {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex-wrap: wrap;
    }
    .share-buttons .share-label {
        color: #94a3b8;
        font-size: 0.85rem;
    }
    .share-buttons a {
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }
    .share-buttons a:hover {
        transform: translateY(-2px) scale(1.1);
    }

    /* ==================== FILTRES SIMILAIRES ==================== */
    .similar-filters-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
        padding: 0.75rem 1rem;
        background: #f8fafc;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
    }

    .similar-filters-bar .filter-label {
        font-weight: 600;
        color: #64748b;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }

    .similar-filters-bar select {
        border-radius: 50px;
        padding: 0.3rem 1rem;
        border: 2px solid #e5e7eb;
        font-size: 0.85rem;
        color: #1e293b;
        transition: all 0.3s ease;
        background: white;
        min-width: 150px;
    }

    .similar-filters-bar select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.08);
        outline: none;
    }

    .similar-filters-bar .btn-filter-sm {
        border-radius: 50px;
        padding: 0.3rem 1.2rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .similar-filters-bar .btn-filter-sm:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.25);
    }

    .similar-filters-bar .btn-reset-sm {
        border-radius: 50px;
        padding: 0.3rem 1rem;
        background: transparent;
        color: #64748b;
        border: 2px solid #e5e7eb;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
    }

    .similar-filters-bar .btn-reset-sm:hover {
        background: #f1f5f9;
        border-color: #94a3b8;
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 992px) {
        .product-detail-image { height: 350px; }
        .product-detail-image-placeholder { height: 350px; font-size: 5rem; }
        .product-detail-price { font-size: 2rem; }
        .similar-products-grid { grid-template-columns: repeat(3, 1fr); }
    }

    @media (max-width: 768px) {
        .product-detail-wrapper { padding: 1.25rem; border-radius: 16px; }
        .product-detail-image { height: 250px; }
        .product-detail-image-placeholder { height: 250px; font-size: 4rem; }
        .product-detail-price { font-size: 1.8rem; }
        .product-detail-old-price { font-size: 1rem; }
        .similar-products-grid { grid-template-columns: repeat(2, 1fr); gap: 0.75rem; }
        .favorite-btn { width: 40px; height: 40px; }
        .favorite-btn i { font-size: 1.1rem; }
        .btn-add-to-cart { padding: 0.8rem 1.2rem; font-size: 1rem; }
        .info-label { min-width: 80px; font-size: 0.8rem; }
        .info-value { font-size: 0.85rem; }
        .purchased-banner { flex-direction: column; align-items: flex-start; }
        .section-header-custom { flex-direction: column; align-items: flex-start; }
        .similar-filters-bar { flex-direction: column; align-items: stretch; }
        .similar-filters-bar select { min-width: auto; }
        .similar-products-grid .product-card .product-image { height: 140px; }
    }

    @media (max-width: 480px) {
        .product-detail-wrapper { padding: 1rem; }
        .product-detail-image { height: 200px; }
        .product-detail-image-placeholder { height: 200px; font-size: 3rem; }
        .product-detail-price { font-size: 1.5rem; }
        .similar-products-grid { grid-template-columns: repeat(2, 1fr); gap: 0.5rem; }
        .btn-add-to-cart { padding: 0.6rem 1rem; font-size: 0.9rem; }
        .favorite-btn { width: 36px; height: 36px; }
        .favorite-btn i { font-size: 1rem; }
        .breadcrumb-custom { font-size: 0.85rem; }
        .similar-products-grid .product-card .product-image { height: 120px; }
        .similar-products-grid .product-card .product-name { font-size: 0.8rem; }
        .similar-products-grid .product-card .product-price { font-size: 0.95rem; }
        .similar-products-grid .product-card .favorite-btn-sm { width: 28px; height: 28px; font-size: 0.7rem; }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <!-- Breadcrumb -->
    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('marketplace_home') }}\"><i class=\"fas fa-home me-1\"></i>Accueil</a></li>
            {% if product.category %}
                <li class=\"breadcrumb-item\"><a href=\"{{ path('marketplace_home') }}?category={{ product.category.id }}\">{{ product.category.name }}</a></li>
            {% endif %}
            <li class=\"breadcrumb-item active\">{{ product.name|u.truncate(40, '...') }}</li>
        </ol>
    </nav>

    <!-- Product Detail -->
    <div class=\"product-detail-wrapper\">
        <div class=\"row g-4\">
            <!-- Image -->
            <div class=\"col-lg-6\">
                <div class=\"position-relative\">
                    {% if product.image and product.image != 'default-product.png' %}
                        <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                             alt=\"{{ product.name }}\" 
                             class=\"product-detail-image\"
                             loading=\"lazy\">
                    {% else %}
                        <div class=\"product-detail-image-placeholder\">
                            <i class=\"fas fa-box\"></i>
                        </div>
                    {% endif %}
                </div>
            </div>

            <!-- Infos -->
            <div class=\"col-lg-6\">
                <!-- Header -->
                <div class=\"d-flex justify-content-between align-items-start gap-2 mb-2\">
                    <h1 class=\"h2 fw-bold mb-0\" style=\"color: #0f172a;\">{{ product.name }}</h1>
                    {% if isCustomer %}
                        <button class=\"favorite-btn {% if isFavorite %}active{% endif %}\" 
                                onclick=\"toggleFavorite(this, {{ product.id }})\"
                                data-product-id=\"{{ product.id }}\"
                                title=\"{{ isFavorite ? 'Retirer des favoris' : 'Ajouter aux favoris' }}\">
                            <i class=\"{% if isFavorite %}fas{% else %}far{% endif %} fa-heart\"></i>
                        </button>
                    {% endif %}
                </div>

                <!-- Category -->
                {% if product.category %}
                    <div class=\"mb-2\">
                        <span class=\"badge bg-primary px-3 py-2 rounded-pill\" style=\"font-size: 0.8rem; font-weight: 500;\">
                            <i class=\"fas fa-tag me-1\"></i> {{ product.category.name }}
                        </span>
                    </div>
                {% endif %}

                <!-- Rating -->
                <div class=\"product-detail-rating mb-3\">
                    <div class=\"stars\">
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
                    <span class=\"fw-semibold\">{{ averageRating|number_format(1, ',', ' ') }}</span>
                    <span class=\"text-muted\">
                        (<a href=\"{{ path('marketplace_product_ratings', {id: product.id}) }}\" class=\"text-decoration-none\">{{ ratingsCount }} avis</a>)
                    </span>
                </div>

                <!-- Price -->
                <div class=\"mb-3 p-3 bg-light rounded-3\" style=\"background: #f8fafc !important;\">
                    <div class=\"d-flex align-items-center flex-wrap gap-2\">
                        {% if promotionInfo and promotionInfo.has_promotion %}
                            <span class=\"product-detail-price promo\">
                                {{ promotionInfo.final_price|price_with_currency(product.hmaService) }}
                            </span>
                            <span class=\"product-detail-old-price ms-2\">
                                {{ promotionInfo.original_price|price_with_currency(product.hmaService) }}
                            </span>
                            <span class=\"badge bg-danger rounded-pill px-3 py-2\" style=\"font-size: 0.85rem; font-weight: 700;\">
                                -{{ promotionInfo.discount_percentage }}%
                            </span>
                            {% if promotionInfo.promotion.name %}
                                <p class=\"text-success mt-1 mb-0 w-100\" style=\"font-size: 0.85rem;\">
                                    <i class=\"fas fa-tag me-1\"></i> <strong>{{ promotionInfo.promotion.name }}</strong>
                                </p>
                            {% endif %}
                        {% else %}
                            <span class=\"product-detail-price\">
                                {{ product.salePrice|price_with_currency(product.hmaService) }}
                            </span>
                        {% endif %}
                    </div>
                </div>

                <!-- Stock -->
                <div class=\"mb-3\">
                    {% if currentStock > 0 %}
                        <span class=\"stock-status-badge in-stock\">
                            <i class=\"fas fa-check-circle\"></i> Disponible
                        </span>
                    {% else %}
                        <span class=\"stock-status-badge out-of-stock\">
                            <i class=\"fas fa-times-circle\"></i> Indisponible
                        </span>
                    {% endif %}
                </div>

                <!-- Description -->
                {% if product.description %}
                    <div class=\"mb-3\">
                        <h6 class=\"fw-bold\" style=\"color: #1e293b;\"><i class=\"fas fa-align-left me-2\" style=\"color: var(--primary-color);\"></i>Description</h6>
                        <p class=\"text-muted\" style=\"line-height: 1.7; color: #475569 !important;\">{{ product.description|nl2br }}</p>
                    </div>
                {% endif %}

                <!-- Extra Info -->
                {% if product.dosage or product.form or product.unit or product.prescriptionRequired %}
                    <div class=\"mb-3 p-3 bg-light rounded-3\" style=\"background: #f8fafc !important;\">
                        <h6 class=\"fw-bold mb-2\" style=\"color: #1e293b;\"><i class=\"fas fa-info-circle me-2\" style=\"color: var(--primary-color);\"></i>Informations supplémentaires</h6>
                        <div class=\"row g-2\">
                            {% if product.dosage %}
                                <div class=\"col-md-6\">
                                    <div class=\"info-line\">
                                        <span class=\"info-label\">Dosage</span>
                                        <span class=\"info-value\">{{ product.dosage }}</span>
                                    </div>
                                </div>
                            {% endif %}
                            {% if product.form %}
                                <div class=\"col-md-6\">
                                    <div class=\"info-line\">
                                        <span class=\"info-label\">Forme</span>
                                        <span class=\"info-value\">{{ product.form }}</span>
                                    </div>
                                </div>
                            {% endif %}
                            {% if product.unit %}
                                <div class=\"col-md-6\">
                                    <div class=\"info-line\">
                                        <span class=\"info-label\">Unité</span>
                                        <span class=\"info-value\">{{ product.unit }}</span>
                                    </div>
                                </div>
                            {% endif %}
                            {% if product.prescriptionRequired %}
                                <div class=\"col-md-6\">
                                    <div class=\"info-line\">
                                        <span class=\"info-label\">Prescription</span>
                                        <span class=\"info-value\">
                                            <span class=\"badge bg-warning text-dark\">
                                                <i class=\"fas fa-prescription-bottle me-1\"></i> Obligatoire
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                {% endif %}

                <!-- Actions -->
                <div class=\"d-flex gap-2 flex-wrap\">
                    {% if isCustomer %}
                        {% if isInCart %}
                            <a href=\"{{ path('marketplace_cart') }}\" class=\"btn-add-to-cart already-in-cart flex-grow-1\">
                                <i class=\"fas fa-shopping-cart me-2\"></i> Voir dans le panier
                            </a>
                        {% elseif currentStock > 0 %}
                            <button class=\"btn-add-to-cart flex-grow-1 add-to-cart\" 
                                    data-product-id=\"{{ product.id }}\"
                                    data-product-name=\"{{ product.name }}\">
                                <i class=\"fas fa-cart-plus me-2\"></i>
                                <span class=\"btn-text\">Ajouter au panier</span>
                                <span class=\"spinner\"><i class=\"fas fa-spinner\"></i></span>
                            </button>
                        {% else %}
                            <button class=\"btn-add-to-cart flex-grow-1\" disabled style=\"background: #94a3b8; box-shadow: none;\">
                                <i class=\"fas fa-times me-2\"></i> Indisponible
                            </button>
                        {% endif %}
                    {% else %}
                        <a href=\"{{ path('marketplace_login') }}\" class=\"btn-add-to-cart flex-grow-1\" style=\"background: #8b5cf6; box-shadow: 0 4px 16px rgba(139, 92, 246, 0.25);\">
                            <i class=\"fas fa-sign-in-alt me-2\"></i> Connectez-vous pour acheter
                        </a>
                    {% endif %}
                </div>

                <!-- Purchased Banner -->
                {% if isCustomer and hasPurchased %}
                    <div class=\"mt-3 purchased-banner\">
                        <div class=\"d-flex align-items-center gap-3\">
                            <i class=\"fas fa-star icon\"></i>
                            <div>
                                <h6 class=\"title mb-0\">Vous avez acheté ce produit</h6>
                                <p class=\"text mb-0\">Partagez votre expérience avec la communauté.</p>
                            </div>
                        </div>
                        <a href=\"{{ path('marketplace_product_ratings', {id: product.id}) }}\" class=\"btn btn-warning btn-sm rounded-pill px-4\">
                            <i class=\"fas fa-pen me-1\"></i> Laisser un avis
                        </a>
                    </div>
                {% endif %}

                <!-- Share -->
                <div class=\"mt-3 share-buttons\">
                    <span class=\"share-label\"><i class=\"fas fa-share-alt me-1\"></i>Partager :</span>
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u={{ app.request.uri|url_encode }}\" 
                       target=\"_blank\" style=\"color: #1877f2;\">
                        <i class=\"fab fa-facebook fa-lg\"></i>
                    </a>
                    <a href=\"https://twitter.com/intent/tweet?text={{ product.name }}&url={{ app.request.uri|url_encode }}\" 
                       target=\"_blank\" style=\"color: #000;\">
                        <i class=\"fab fa-x-twitter fa-lg\"></i>
                    </a>
                    <a href=\"https://wa.me/?text={{ product.name }}%20-%20{{ app.request.uri|url_encode }}\" 
                       target=\"_blank\" style=\"color: #25d366;\">
                        <i class=\"fab fa-whatsapp fa-lg\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== PRODUITS SIMILAIRES ==================== -->
    {% if similarProducts|length > 0 %}
        <div class=\"mt-5\">
            <div class=\"section-header-custom\">
                <h3>
                    <i class=\"fas fa-tags\"></i> Produits similaires
                    <span class=\"badge-count\">{{ totalSimilar }}</span>
                </h3>
                <a href=\"{{ path('marketplace_home') }}?category={% if product.category %}{{ product.category.id }}{% endif %}\" class=\"see-all\">
                    Voir tout <i class=\"fas fa-arrow-right ms-1\"></i>
                </a>
            </div>

            <!-- ✅ BARRE DE FILTRES POUR PRODUITS SIMILAIRES -->
            <div class=\"similar-filters-bar\">
                <span class=\"filter-label\"><i class=\"fas fa-filter me-1\"></i>Filtrer</span>
                <select id=\"similarSortFilter\" name=\"similar_sort\" onchange=\"applySimilarFilters()\">
                    <option value=\"latest\">Plus récents</option>
                    <option value=\"price_asc\">Prix croissant</option>
                    <option value=\"price_desc\">Prix décroissant</option>
                    <option value=\"name\">Nom A-Z</option>
                </select>
                <button class=\"btn-filter-sm\" onclick=\"applySimilarFilters()\">
                    <i class=\"fas fa-search me-1\"></i>Filtrer
                </button>
                <button class=\"btn-reset-sm\" onclick=\"resetSimilarFilters()\">
                    <i class=\"fas fa-undo me-1\"></i>Réinitialiser
                </button>
            </div>

            <div class=\"similar-products-grid\" id=\"similarProductsGrid\">
                {% for similarProduct in similarProducts %}
                    <div class=\"product-card similar-product-item\" 
                         data-price=\"{{ similarProduct.salePrice }}\"
                         data-name=\"{{ similarProduct.name }}\"
                         data-date=\"{{ similarProduct.createdAt|date('U') }}\">
                        <div class=\"product-image\" onclick=\"window.location.href='{{ path('marketplace_product_show', {id: similarProduct.id}) }}'\">
                            {% if similarProduct.image and similarProduct.image != 'default-product.png' %}
                                <img src=\"{{ asset('uploads/products/' ~ similarProduct.image) }}\" 
                                     alt=\"{{ similarProduct.name }}\" 
                                     loading=\"lazy\">
                            {% else %}
                                <div class=\"placeholder\">
                                    <i class=\"fas fa-box\"></i>
                                </div>
                            {% endif %}
                            
                            {# Badge promotion #}
                            {% set hasPromo = false %}
                            {% for pp in similarProduct.promotionProducts %}
                                {% if pp.promotion and pp.promotion.isCurrentlyActive %}
                                    {% set hasPromo = true %}
                                {% endif %}
                            {% endfor %}
                            {% if hasPromo %}
                                <span class=\"product-badge\">Promo</span>
                            {% endif %}
                            
                            {# ✅ FAVORIS - Utilisation correcte de favoriteIds #}
                            {% if isCustomer %}
                                <button class=\"favorite-btn-sm {% if similarProduct.id in favoriteIds %}active{% endif %}\" 
                                        onclick=\"event.stopPropagation(); toggleFavorite(this, {{ similarProduct.id }})\"
                                        data-product-id=\"{{ similarProduct.id }}\">
                                    <i class=\"{% if similarProduct.id in favoriteIds %}fas{% else %}far{% endif %} fa-heart\"></i>
                                </button>
                            {% endif %}
                        </div>
                        <div class=\"product-body\" onclick=\"window.location.href='{{ path('marketplace_product_show', {id: similarProduct.id}) }}'\">
                            <div class=\"product-category\">
                                {{ similarProduct.category ? similarProduct.category.name : 'Non catégorisé' }}
                            </div>
                            
                            <h6 class=\"product-name\">{{ similarProduct.name }}</h6>
                            
                            <div class=\"product-pricing\">
                                {% if hasPromo %}
                                    <span class=\"product-price promo\">
                                        {{ similarProduct.salePrice|price_with_currency(similarProduct.hmaService) }}
                                    </span>
                                    <span class=\"old-price\">
                                        {{ similarProduct.purchasePrice|price_with_currency(similarProduct.hmaService) }}
                                    </span>
                                {% else %}
                                    <span class=\"product-price\">
                                        {{ similarProduct.salePrice|price_with_currency(similarProduct.hmaService) }}
                                    </span>
                                {% endif %}
                            </div>
                            
                            <div class=\"product-rating\">
                                <div class=\"stars\">
                                    {% set rating = similarProduct.averageRating|default(0) %}
                                    {% for i in 1..5 %}
                                        {% if i <= rating %}
                                            <i class=\"fas fa-star filled\"></i>
                                        {% elseif i - 0.5 <= rating %}
                                            <i class=\"fas fa-star-half-alt half-filled\"></i>
                                        {% else %}
                                            <i class=\"far fa-star\"></i>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                                <span class=\"rating-text\">(<strong>{{ similarProduct.ratingsCount|default(0) }}</strong>)</span>
                            </div>
                            
                            <a href=\"{{ path('marketplace_product_show', {id: similarProduct.id}) }}\" class=\"view-btn\">
                                <i class=\"fas fa-eye me-1\"></i> Voir
                            </a>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <!-- ✅ PAGINATION DES PRODUITS SIMILAIRES -->
            {% if totalPages > 1 %}
                <div class=\"pagination-wrapper\">
                    <ul class=\"pagination\">
                        {% if currentPage > 1 %}
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"{{ path('marketplace_product_show', {id: product.id, page: currentPage - 1}) }}\">
                                    <i class=\"fas fa-chevron-left\"></i>
                                </a>
                            </li>
                        {% endif %}

                        {% set startPage = max(1, currentPage - 2) %}
                        {% set endPage = min(totalPages, currentPage + 2) %}

                        {% if startPage > 1 %}
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"{{ path('marketplace_product_show', {id: product.id, page: 1}) }}\">1</a>
                            </li>
                            {% if startPage > 2 %}
                                <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                            {% endif %}
                        {% endif %}

                        {% for page in startPage..endPage %}
                            <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('marketplace_product_show', {id: product.id, page: page}) }}\">
                                    {{ page }}
                                </a>
                            </li>
                        {% endfor %}

                        {% if endPage < totalPages %}
                            {% if endPage < totalPages - 1 %}
                                <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                            {% endif %}
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"{{ path('marketplace_product_show', {id: product.id, page: totalPages}) }}\">{{ totalPages }}</a>
                            </li>
                        {% endif %}

                        {% if currentPage < totalPages %}
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"{{ path('marketplace_product_show', {id: product.id, page: currentPage + 1}) }}\">
                                    <i class=\"fas fa-chevron-right\"></i>
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            {% endif %}
        </div>
    {% endif %}
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== FAVORIS ====================
    window.toggleFavorite = function(btn, productId) {
        const icon = btn.querySelector('i');
        const isCurrentlyFavorite = icon.classList.contains('fas');
        const allFavoriteBtns = document.querySelectorAll(`.favorite-btn-sm[data-product-id=\"\${productId}\"], .favorite-btn[data-product-id=\"\${productId}\"]`);
        
        btn.disabled = true;
        btn.style.opacity = '0.6';
        icon.className = 'fas fa-spinner fa-spin';
        
        fetch('{{ path('marketplace_favorite_toggle') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ productId: productId })
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
                const isFavorite = data.isFavorite;
                const iconClass = isFavorite ? 'fas' : 'far';
                
                // Mettre à jour TOUS les boutons du même produit
                allFavoriteBtns.forEach(button => {
                    const btnIcon = button.querySelector('i');
                    btnIcon.className = iconClass + ' fa-heart';
                    button.classList.toggle('active', isFavorite);
                    if (isFavorite) {
                        button.style.color = '#ef4444';
                        button.style.borderColor = '#ef4444';
                        button.style.background = '#fef2f2';
                    } else {
                        button.style.color = '#94a3b8';
                        button.style.borderColor = '#e5e7eb';
                        button.style.background = 'rgba(255,255,255,0.95)';
                    }
                    button.disabled = false;
                    button.style.opacity = '1';
                });
                
                if (isFavorite) {
                    showNotification('✓ Ajouté aux favoris', 'success');
                } else {
                    showNotification('Retiré des favoris', 'info');
                }
                
                updateFavoritesCount(data.count);
            } else {
                restoreFavoriteState(btn, isCurrentlyFavorite);
                showNotification(data.error || 'Erreur', 'error');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            restoreFavoriteState(btn, isCurrentlyFavorite);
            showNotification(error.message || 'Erreur de connexion', 'error');
        });
    };

    function restoreFavoriteState(btn, isCurrentlyFavorite) {
        const icon = btn.querySelector('i');
        if (isCurrentlyFavorite) {
            icon.className = 'fas fa-heart';
            btn.classList.add('active');
            btn.style.color = '#ef4444';
            btn.style.borderColor = '#ef4444';
            btn.style.background = '#fef2f2';
        } else {
            icon.className = 'far fa-heart';
            btn.classList.remove('active');
            btn.style.color = '#94a3b8';
            btn.style.borderColor = '#e5e7eb';
            btn.style.background = 'rgba(255,255,255,0.95)';
        }
        btn.disabled = false;
        btn.style.opacity = '1';
    }

    // ==================== AJOUT AU PANIER ====================
    document.querySelectorAll('.add-to-cart').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (this.disabled || this.classList.contains('loading')) return;
            
            const productId = this.dataset.productId;
            const productName = this.dataset.productName || 'Produit';
            
            this.classList.add('loading');
            this.disabled = true;
            
            fetch('{{ path('marketplace_cart_add') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ productId: productId, quantity: 1 })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const cartBadge = document.getElementById('cartCount');
                    if (cartBadge) {
                        cartBadge.textContent = data.cartCount || 0;
                        cartBadge.style.display = data.cartCount > 0 ? 'block' : 'none';
                    }
                    
                    this.classList.remove('loading');
                    this.innerHTML = '<i class=\"fas fa-check me-2\"></i> Dans le panier';
                    this.classList.add('already-in-cart');
                    this.onclick = function() {
                        window.location.href = '{{ path('marketplace_cart') }}';
                    };
                    
                    showNotification('✓ ' + productName + ' ajouté au panier', 'success');
                } else {
                    this.classList.remove('loading');
                    this.disabled = false;
                    
                    if (data.error && data.error.includes('déjà')) {
                        this.innerHTML = '<i class=\"fas fa-check me-2\"></i> Dans le panier';
                        this.classList.add('already-in-cart');
                        this.onclick = function() {
                            window.location.href = '{{ path('marketplace_cart') }}';
                        };
                        showNotification(data.error, 'info');
                    } else if (data.error && data.error.includes('connecter')) {
                        window.location.href = '{{ path('marketplace_login') }}';
                    } else {
                        showNotification(data.error || 'Erreur', 'error');
                    }
                }
            })
            .catch(() => {
                this.classList.remove('loading');
                this.disabled = false;
                showNotification('Erreur de connexion', 'error');
            });
        });
    });

    // ==================== FILTRES PRODUITS SIMILAIRES ====================
    window.applySimilarFilters = function() {
        const sort = document.getElementById('similarSortFilter').value;
        const grid = document.getElementById('similarProductsGrid');
        const items = grid.querySelectorAll('.similar-product-item');
        const itemsArray = Array.from(items);
        
        let sortedItems = [];
        
        switch(sort) {
            case 'price_asc':
                sortedItems = itemsArray.sort((a, b) => parseFloat(a.dataset.price) - parseFloat(b.dataset.price));
                break;
            case 'price_desc':
                sortedItems = itemsArray.sort((a, b) => parseFloat(b.dataset.price) - parseFloat(a.dataset.price));
                break;
            case 'name':
                sortedItems = itemsArray.sort((a, b) => a.dataset.name.localeCompare(b.dataset.name));
                break;
            default:
                sortedItems = itemsArray.sort((a, b) => parseInt(b.dataset.date) - parseInt(a.dataset.date));
        }
        
        grid.innerHTML = '';
        sortedItems.forEach(item => grid.appendChild(item));
    };

    window.resetSimilarFilters = function() {
        document.getElementById('similarSortFilter').value = 'latest';
        applySimilarFilters();
    };

    // ==================== COMPTEURS ====================
    window.updateFavoritesCount = function(count) {
        const badge = document.getElementById('favoritesCount');
        if (badge) {
            if (count !== undefined) {
                badge.textContent = count;
                badge.style.display = count > 0 ? 'block' : 'none';
            } else {
                fetch('{{ path('marketplace_favorites_count') }}')
                    .then(r => r.json())
                    .then(data => {
                        badge.textContent = data.count || 0;
                        badge.style.display = data.count > 0 ? 'block' : 'none';
                    })
                    .catch(() => {});
            }
        }
    };

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
{% endblock %}", "marketplace/products/product_show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\products\\product_show.html.twig");
    }
}
