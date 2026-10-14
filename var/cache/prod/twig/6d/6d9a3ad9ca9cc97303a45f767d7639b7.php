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

/* marketplace/products/products.html.twig */
class __TwigTemplate_9fef92774c8a7746bcfd1ed66aed762b extends Template
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
        $this->parent = $this->load("base_marketplace.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Tous les produits - HMA Marketplace";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --card-radius: 16px;
        --card-shadow: 0 2px 12px rgba(0,0,0,0.06);
        --card-shadow-hover: 0 12px 35px rgba(0,0,0,0.12);
    }

    /* ==================== PAGE HEADER ==================== */
    .page-header-modern {
        margin-bottom: 2rem;
        padding: 1.5rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 1px solid #e5e7eb;
        box-shadow: var(--card-shadow);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .page-header-modern .header-left h1 {
        font-size: 1.6rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.1rem;
    }

    .page-header-modern .header-left h1 i {
        color: var(--primary-color);
        margin-right: 0.5rem;
    }

    .page-header-modern .header-left .subtitle {
        color: #64748b;
        font-size: 0.9rem;
        margin: 0;
    }

    .page-header-modern .header-right {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex-wrap: wrap;
    }

    .page-header-modern .header-right .stat-badge {
        background: var(--primary-gradient);
        color: white;
        padding: 0.4rem 1rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.8rem;
        display: flex;
        align-items: center;
        gap: 0.4rem;
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.2);
    }

    /* ==================== FILTERS BAR ==================== */
    .filters-bar-modern {
        background: white;
        border-radius: var(--card-radius);
        padding: 1.5rem 2rem;
        margin-bottom: 2rem;
        border: 1px solid #e5e7eb;
        box-shadow: var(--card-shadow);
    }

    .filters-bar-modern .filter-row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr auto;
        gap: 1rem;
        align-items: flex-end;
    }

    .filters-bar-modern .filter-group {
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
    }

    .filters-bar-modern .filter-group label {
        font-weight: 600;
        font-size: 0.75rem;
        color: #475569;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }

    .filters-bar-modern .filter-group label i {
        color: var(--primary-color);
    }

    .filters-bar-modern .filter-group .form-control,
    .filters-bar-modern .filter-group .form-select {
        border-radius: 12px;
        border: 2px solid #e5e7eb;
        padding: 0.6rem 1rem;
        height: 46px;
        transition: all 0.3s ease;
        background: #fafbfc;
        font-size: 0.9rem;
        color: #1e293b;
        width: 100%;
    }

    .filters-bar-modern .filter-group .form-control:focus,
    .filters-bar-modern .filter-group .form-select:focus {
        border-color: var(--primary-color);
        background: white;
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.06);
        outline: none;
    }

    .filters-bar-modern .filter-actions {
        display: flex;
        gap: 0.5rem;
        align-items: center;
        height: 46px;
    }

    .filters-bar-modern .filter-actions .btn {
        border-radius: 12px;
        padding: 0.5rem 1.2rem;
        font-weight: 600;
        height: 46px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.85rem;
        border: none;
        cursor: pointer;
    }

    .filters-bar-modern .filter-actions .btn-primary {
        background: var(--primary-gradient);
        color: white;
        box-shadow: 0 2px 8px rgba(4, 99, 241, 0.15);
    }

    .filters-bar-modern .filter-actions .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 16px rgba(4, 99, 241, 0.3);
    }

    .filters-bar-modern .filter-actions .btn-reset {
        border: 2px solid #e5e7eb;
        color: #94a3b8;
        background: transparent;
    }

    .filters-bar-modern .filter-actions .btn-reset:hover {
        background: #f1f5f9;
        border-color: #94a3b8;
        color: #475569;
    }

    /* ==================== FILTERS FOOTER ==================== */
    .filters-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.75rem;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #e5e7eb;
    }

    .filter-results-count {
        font-size: 0.85rem;
        color: #64748b;
    }

    .filter-results-count strong {
        color: #0f172a;
        font-weight: 700;
    }

    .active-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 0.4rem;
    }

    .active-filters .filter-tag {
        background: #e8f0fe;
        color: var(--primary-color);
        padding: 0.2rem 0.7rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
    }

    .active-filters .filter-tag .remove-filter {
        cursor: pointer;
        opacity: 0.5;
        transition: opacity 0.2s ease;
        text-decoration: none;
        color: inherit;
    }

    .active-filters .filter-tag .remove-filter:hover {
        opacity: 1;
    }

    /* ==================== PRODUCT CARD ==================== */
    .product-card {
        background: white;
        border-radius: var(--card-radius);
        overflow: hidden;
        border: 1px solid #e5e7eb;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: var(--card-shadow);
        position: relative;
    }

    .product-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-shadow-hover);
        border-color: var(--primary-color);
    }

    .product-card.has-promotion {
        border-color: #f59e0b;
        border-width: 2px;
    }

    .product-card.has-promotion:hover {
        border-color: #d97706;
        box-shadow: 0 12px 35px rgba(245, 158, 11, 0.15);
    }

    /* ==================== PRODUCT IMAGE ==================== */
    .product-card .product-image {
        height: 200px;
        background: #f8fafc;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        flex-shrink: 0;
    }

    .product-card .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .product-card:hover .product-image img {
        transform: scale(1.05);
    }

    .product-card .product-image .placeholder {
        font-size: 4rem;
        color: #cbd5e1;
    }

    /* ==================== PRODUCT BADGES ==================== */
    .product-card .product-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        padding: 0.25rem 0.7rem;
        border-radius: 50px;
        font-size: 0.6rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 2;
    }

    .product-card .product-badge.discount {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
    }

    .product-card .product-badge.promo-label {
        top: 48px;
        right: 12px;
        background: linear-gradient(135deg, #f59e0b, #d97706);
        color: white;
        padding: 0.15rem 0.5rem;
        font-size: 0.5rem;
        animation: pulse-promo 1.5s infinite;
    }

    @keyframes pulse-promo {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    /* ==================== FAVORITE BUTTON ==================== */
    .product-card .favorite-btn {
        position: absolute;
        top: 12px;
        left: 12px;
        width: 36px;
        height: 36px;
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
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        font-size: 0.9rem;
    }

    .product-card .favorite-btn:hover {
        background: white;
        color: #ef4444;
        transform: scale(1.1);
    }

    .product-card .favorite-btn.active {
        color: #ef4444;
        background: #fef2f2;
    }

    /* ==================== PRODUCT BODY ==================== */
    .product-card .product-body {
        padding: 1rem 1.2rem 1.2rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        cursor: pointer;
    }

    .product-card .product-category {
        font-size: 0.7rem;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        margin-bottom: 0.3rem;
    }

    .product-card .product-name {
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 0.5rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 1.4;
        color: #0f172a;
        flex: 1;
        min-height: 44px;
    }

    /* ==================== PRODUCT PRICING ==================== */
    .product-card .product-pricing {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.4rem;
        margin-bottom: 0.3rem;
    }

    .product-card .product-price {
        font-weight: 800;
        font-size: 1.2rem;
        color: var(--primary-color);
    }

    .product-card .product-price.promo-price {
        color: #dc2626;
        font-size: 1.25rem;
    }

    .product-card .old-price {
        font-size: 0.8rem;
        color: #94a3b8;
        text-decoration: line-through;
        font-weight: 400;
    }

    .product-card .promo-name-tag {
        display: block;
        width: 100%;
        font-size: 0.65rem;
        color: #16a34a;
        font-weight: 600;
        margin-top: 0.2rem;
    }

    .product-card .promo-name-tag i {
        color: #22c55e;
    }

    /* ==================== PRODUCT RATING ==================== */
    .product-card .product-rating {
        display: flex;
        align-items: center;
        gap: 0.3rem;
        margin-top: 0.2rem;
        margin-bottom: 0.5rem;
    }

    .product-card .product-rating .stars {
        display: flex;
        gap: 0.1rem;
        color: #d1d5db;
        font-size: 0.8rem;
    }

    .product-card .product-rating .stars .filled {
        color: #f59e0b;
    }

    .product-card .product-rating .stars .half-filled {
        color: #f59e0b;
    }

    .product-card .product-rating .rating-text {
        font-size: 0.7rem;
        color: #94a3b8;
    }

    .product-card .product-rating .rating-text strong {
        color: #0f172a;
    }

    /* ==================== ACTION BUTTONS ==================== */
    .product-card .action-buttons {
        display: flex;
        flex-direction: column;
        gap: 0.4rem;
        margin-top: auto;
        padding-top: 0.5rem;
        border-top: 1px solid #f1f5f9;
    }

    .product-card .action-buttons .add-to-cart {
        width: 100%;
        border-radius: 10px;
        padding: 0.6rem;
        border: none;
        font-weight: 700;
        transition: all 0.3s ease;
        background: var(--primary-gradient);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        cursor: pointer;
        font-size: 0.85rem;
        text-decoration: none;
    }

    .product-card .action-buttons .add-to-cart:hover:not(:disabled):not(.already-in-cart):not(.btn-login-to-add) {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(4, 99, 241, 0.3);
    }

    .product-card .action-buttons .add-to-cart:disabled {
        cursor: not-allowed;
        opacity: 0.8;
    }

    .product-card .action-buttons .add-to-cart.already-in-cart {
        background: #10b981;
    }

    .product-card .action-buttons .add-to-cart.already-in-cart:hover {
        background: #059669;
        transform: none;
        box-shadow: none;
    }

    .product-card .action-buttons .btn-login-to-add {
        background: #e5e7eb;
        color: #64748b;
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        padding: 0.6rem;
        border-radius: 10px;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .product-card .action-buttons .btn-login-to-add:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(4, 99, 241, 0.3);
        text-decoration: none;
    }

    /* ==================== PRODUCTS GRID ==================== */
    .products-grid-modern {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
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
        min-width: 42px;
        height: 42px;
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
    .empty-state-modern {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 2px dashed #e5e7eb;
    }

    .empty-state-modern .icon-wrapper {
        width: 80px;
        height: 80px;
        background: #e8f0fe;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .empty-state-modern .icon-wrapper i {
        font-size: 2.5rem;
        color: var(--primary-color);
    }

    .empty-state-modern h4 {
        color: #0f172a;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .empty-state-modern p {
        color: #94a3b8;
        max-width: 450px;
        margin: 0 auto 1.5rem;
    }

    .empty-state-modern .btn-primary {
        border-radius: 50px;
        padding: 0.6rem 2rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .empty-state-modern .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 16px rgba(4, 99, 241, 0.3);
    }

    /* ==================== SELECT2 ==================== */
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 12px !important;
        padding: 0.6rem 1rem !important;
        border: 2px solid #e5e7eb !important;
        min-height: 46px !important;
        background: #fafbfc !important;
    }

    .select2-container--bootstrap-5 .select2-selection:hover {
        border-color: #94a3b8 !important;
    }

    .select2-container--bootstrap-5 .select2-selection:focus {
        border-color: var(--primary-color) !important;
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.06) !important;
    }

    .select2-container--bootstrap-5 .select2-selection__rendered {
        color: #1e293b !important;
        font-size: 0.9rem !important;
        line-height: 1.5 !important;
        padding: 0 !important;
    }

    .select2-container--bootstrap-5 .select2-selection__arrow {
        height: 42px !important;
    }

    .select2-dropdown {
        border-radius: 12px !important;
        border: 2px solid #e5e7eb !important;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08) !important;
        overflow: hidden !important;
    }

    .select2-results__option {
        padding: 0.6rem 1rem !important;
        font-size: 0.9rem !important;
        color: #1e293b !important;
        transition: background 0.15s ease !important;
    }

    .select2-results__option--highlighted {
        background-color: var(--primary-color) !important;
        color: white !important;
    }

    .select2-results__option[aria-selected=\"true\"] {
        background-color: #e8f0fe !important;
        color: var(--primary-color) !important;
    }

    .select2-search--dropdown .select2-search__field {
        border-radius: 8px !important;
        border: 2px solid #e5e7eb !important;
        padding: 0.5rem 1rem !important;
        font-size: 0.9rem !important;
    }

    .select2-search--dropdown .select2-search__field:focus {
        border-color: var(--primary-color) !important;
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.06) !important;
        outline: none !important;
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 1200px) {
        .filters-bar-modern .filter-row {
            grid-template-columns: 1fr 1fr 1fr;
        }
        .filters-bar-modern .filter-actions {
            grid-column: 1 / -1;
            justify-content: flex-end;
        }
    }

    @media (max-width: 992px) {
        .products-grid-modern {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1rem;
        }
        .product-card .product-image {
            height: 160px;
        }
    }

    @media (max-width: 768px) {
        .page-header-modern {
            flex-direction: column;
            align-items: flex-start;
            padding: 1rem 1.25rem;
        }
        .page-header-modern .header-left h1 {
            font-size: 1.3rem;
        }
        .page-header-modern .header-right {
            width: 100%;
        }
        .page-header-modern .header-right .stat-badge {
            width: 100%;
            justify-content: center;
        }

        .filters-bar-modern {
            padding: 1rem 1.25rem;
        }
        .filters-bar-modern .filter-row {
            grid-template-columns: 1fr;
            gap: 0.75rem;
        }
        .filters-bar-modern .filter-actions {
            grid-column: auto;
            justify-content: stretch;
            height: auto;
            flex-wrap: wrap;
        }
        .filters-bar-modern .filter-actions .btn {
            flex: 1;
            justify-content: center;
        }

        .filters-footer {
            flex-direction: column;
            align-items: flex-start;
        }

        .active-filters {
            width: 100%;
        }

        .products-grid-modern {
            grid-template-columns: repeat(2, 1fr);
            gap: 0.75rem;
        }
        .product-card .product-image {
            height: 140px;
        }
        .product-card .product-name {
            font-size: 0.9rem;
            min-height: 38px;
        }
        .product-card .product-price {
            font-size: 1rem;
        }

        .pagination-modern .page-link {
            min-width: 36px;
            height: 36px;
            font-size: 0.8rem;
        }
        .pagination-modern .page-info {
            font-size: 0.75rem;
        }

        .empty-state-modern {
            padding: 2rem 1.5rem;
        }
        .empty-state-modern .icon-wrapper {
            width: 60px;
            height: 60px;
        }
        .empty-state-modern .icon-wrapper i {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .products-grid-modern {
            grid-template-columns: repeat(2, 1fr);
            gap: 0.5rem;
        }
        .product-card .product-image {
            height: 120px;
        }
        .product-card .product-body {
            padding: 0.75rem 0.8rem 1rem;
        }
        .product-card .product-name {
            font-size: 0.8rem;
            min-height: 34px;
        }
        .product-card .product-price {
            font-size: 0.9rem;
        }
        .product-card .product-price.promo-price {
            font-size: 0.95rem;
        }
        .product-card .old-price {
            font-size: 0.7rem;
        }
        .product-card .action-buttons .add-to-cart {
            font-size: 0.75rem;
            padding: 0.4rem;
        }
        .product-card .action-buttons .btn-login-to-add {
            font-size: 0.75rem;
            padding: 0.4rem;
        }
        .product-card .product-badge.discount {
            font-size: 0.5rem;
            padding: 0.15rem 0.5rem;
        }
        .product-card .product-badge.promo-label {
            font-size: 0.45rem;
            padding: 0.1rem 0.4rem;
            top: 40px;
        }
        .product-card .favorite-btn {
            width: 30px;
            height: 30px;
            font-size: 0.75rem;
            top: 8px;
            left: 8px;
        }

        .filters-bar-modern .filter-actions .btn {
            font-size: 0.75rem;
            padding: 0.4rem 0.8rem;
            height: 38px;
        }
        .page-header-modern .header-left h1 {
            font-size: 1.1rem;
        }
        .pagination-modern .page-link {
            min-width: 30px;
            height: 30px;
            font-size: 0.7rem;
            border-radius: 8px;
        }
        .filter-results-count {
            font-size: 0.7rem;
        }
        .active-filters .filter-tag {
            font-size: 0.6rem;
            padding: 0.15rem 0.5rem;
        }
    }
</style>
";
        yield from [];
    }

    // line 891
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 892
        yield "<div class=\"container py-4\">
    <!-- ==================== PAGE HEADER ==================== -->
    <div class=\"page-header-modern\">
        <div class=\"header-left\">
            <h1>
                <i class=\"fas fa-box-open\"></i>
                Catalogue des produits
            </h1>
            <p class=\"subtitle\">
                Découvrez tous nos produits disponibles à la vente
            </p>
        </div>
        <div class=\"header-right\">
            <span class=\"stat-badge\">
                <i class=\"fas fa-box\"></i>
                ";
        // line 907
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalProducts"] ?? null), "html", null, true);
        yield " produits
            </span>
        </div>
    </div>

    <!-- ==================== FILTERS BAR ==================== -->
    <div class=\"filters-bar-modern\">
        <form method=\"GET\" action=\"";
        // line 914
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
        yield "\" id=\"filterForm\">
            <div class=\"filter-row\">
                <div class=\"filter-group\">
                    <label for=\"categoryFilter\">
                        <i class=\"fas fa-tags\"></i> Catégorie
                    </label>
                    <select id=\"categoryFilter\" name=\"category\" class=\"form-select select2-category\">
                        <option value=\"\">Toutes les catégories</option>
                        ";
        // line 922
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 923
            yield "                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 923))) {
                // line 924
                yield "                                <optgroup label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 924), "html", null, true);
                yield "\">
                                    <option value=\"";
                // line 925
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 925), "html", null, true);
                yield "\" ";
                if ((($context["selectedCategory"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 925))) {
                    yield "selected";
                }
                yield ">
                                        ─ ";
                // line 926
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 926), "html", null, true);
                yield "
                                    </option>
                                    ";
                // line 928
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["categories"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "parent", [], "any", false, false, false, 928)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "parent", [], "any", false, false, false, 928), "id", [], "any", false, false, false, 928) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 928))); }));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 929
                    yield "                                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 929), "html", null, true);
                    yield "\" ";
                    if ((($context["selectedCategory"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 929))) {
                        yield "selected";
                    }
                    yield ">
                                            &nbsp;&nbsp;&nbsp;├─ ";
                    // line 930
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 930), "html", null, true);
                    yield "
                                        </option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 933
                yield "                                </optgroup>
                            ";
            }
            // line 935
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 936
        yield "                    </select>
                </div>

                <div class=\"filter-group\">
                    <label for=\"sortFilter\">
                        <i class=\"fas fa-arrow-up-wide-short\"></i> Trier par
                    </label>
                    <select id=\"sortFilter\" name=\"sort\" class=\"form-select\">
                        <option value=\"latest\" ";
        // line 944
        if ((($context["selectedSort"] ?? null) == "latest")) {
            yield "selected";
        }
        yield ">Plus récents</option>
                        <option value=\"price_asc\" ";
        // line 945
        if ((($context["selectedSort"] ?? null) == "price_asc")) {
            yield "selected";
        }
        yield ">Prix croissant</option>
                        <option value=\"price_desc\" ";
        // line 946
        if ((($context["selectedSort"] ?? null) == "price_desc")) {
            yield "selected";
        }
        yield ">Prix décroissant</option>
                        <option value=\"name\" ";
        // line 947
        if ((($context["selectedSort"] ?? null) == "name")) {
            yield "selected";
        }
        yield ">Nom A-Z</option>
                        <option value=\"name_desc\" ";
        // line 948
        if ((($context["selectedSort"] ?? null) == "name_desc")) {
            yield "selected";
        }
        yield ">Nom Z-A</option>
                    </select>
                </div>

                <div class=\"filter-group\">
                    <label for=\"searchInput\">
                        <i class=\"fas fa-search\"></i> Recherche
                    </label>
                    <div class=\"position-relative\">
                        <input type=\"text\" id=\"searchInput\" name=\"search\" class=\"form-control\" 
                               placeholder=\"Nom, description...\" value=\"";
        // line 958
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default(($context["search"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
                        ";
        // line 959
        if ((($tmp = ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default(($context["search"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 960
            yield "                            <button type=\"button\" class=\"btn btn-link position-absolute end-0 top-0 h-100 px-3 text-muted\" 
                                    onclick=\"document.getElementById('searchInput').value='';document.getElementById('filterForm').submit();\"
                                    style=\"text-decoration: none;\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                        ";
        }
        // line 966
        yield "                    </div>
                </div>

                <div class=\"filter-actions\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-filter me-1\"></i> Appliquer
                    </button>
                    <a href=\"";
        // line 973
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
        yield "\" class=\"btn btn-reset\">
                        <i class=\"fas fa-undo me-1\"></i> Réinitialiser
                    </a>
                </div>
            </div>
        </form>

        <div class=\"filters-footer\">
            <div class=\"filter-results-count\">
                <strong>";
        // line 982
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)), "html", null, true);
        yield "</strong> produit(s) affiché(s)
                ";
        // line 983
        if ((($tmp = ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default(($context["search"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 984
            yield "                    <span class=\"text-muted\">pour \"<span class=\"text-primary fw-semibold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
            yield "</span>\"</span>
                ";
        }
        // line 986
        yield "                ";
        if ((($tmp = ($context["selectedCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 987
            yield "                    ";
            $context["catName"] = "";
            // line 988
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 989
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 989) == ($context["selectedCategory"] ?? null))) {
                    // line 990
                    yield "                            ";
                    $context["catName"] = CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 990);
                    // line 991
                    yield "                        ";
                }
                // line 992
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 993
            yield "                    <span class=\"text-muted\">dans <span class=\"text-primary fw-semibold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["catName"] ?? null), "html", null, true);
            yield "</span></span>
                ";
        }
        // line 995
        yield "            </div>

            ";
        // line 997
        if (((((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default(($context["search"] ?? null), "")) : ("")) || ($context["selectedCategory"] ?? null)) || (($context["selectedSort"] ?? null) != "latest"))) {
            // line 998
            yield "                <div class=\"active-filters\">
                    ";
            // line 999
            if ((($tmp = ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default(($context["search"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1000
                yield "                        <span class=\"filter-tag\">
                            <i class=\"fas fa-search\"></i> \"";
                // line 1001
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
                yield "\"
                            <a href=\"";
                // line 1002
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products", ["category" => ($context["selectedCategory"] ?? null), "sort" => ($context["selectedSort"] ?? null)]), "html", null, true);
                yield "\" class=\"remove-filter\">
                                <i class=\"fas fa-times\"></i>
                            </a>
                        </span>
                    ";
            }
            // line 1007
            yield "                    ";
            if ((($tmp = ($context["selectedCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1008
                yield "                        ";
                $context["catName"] = "";
                // line 1009
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 1010
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 1010) == ($context["selectedCategory"] ?? null))) {
                        // line 1011
                        yield "                                ";
                        $context["catName"] = CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 1011);
                        // line 1012
                        yield "                            ";
                    }
                    // line 1013
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1014
                yield "                        <span class=\"filter-tag\">
                            <i class=\"fas fa-tag\"></i> ";
                // line 1015
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["catName"] ?? null), "html", null, true);
                yield "
                            <a href=\"";
                // line 1016
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products", ["search" => ($context["search"] ?? null), "sort" => ($context["selectedSort"] ?? null)]), "html", null, true);
                yield "\" class=\"remove-filter\">
                                <i class=\"fas fa-times\"></i>
                            </a>
                        </span>
                    ";
            }
            // line 1021
            yield "                    ";
            if ((($context["selectedSort"] ?? null) != "latest")) {
                // line 1022
                yield "                        ";
                $context["sortLabels"] = ["price_asc" => "Prix croissant", "price_desc" => "Prix décroissant", "name" => "Nom A-Z", "name_desc" => "Nom Z-A"];
                // line 1028
                yield "                        <span class=\"filter-tag\">
                            <i class=\"fas fa-arrow-up-wide-short\"></i> ";
                // line 1029
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["sortLabels"] ?? null), ($context["selectedSort"] ?? null), [], "array", true, true, false, 1029)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["sortLabels"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["selectedSort"] ?? null)] ?? null) : null), ($context["selectedSort"] ?? null))) : (($context["selectedSort"] ?? null))), "html", null, true);
                yield "
                            <a href=\"";
                // line 1030
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products", ["search" => ($context["search"] ?? null), "category" => ($context["selectedCategory"] ?? null)]), "html", null, true);
                yield "\" class=\"remove-filter\">
                                <i class=\"fas fa-times\"></i>
                            </a>
                        </span>
                    ";
            }
            // line 1035
            yield "                </div>
            ";
        }
        // line 1037
        yield "        </div>
    </div>

    <!-- ==================== PRODUCTS GRID ==================== -->
    ";
        // line 1041
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) > 0)) {
            // line 1042
            yield "        <div class=\"products-grid-modern\" id=\"productsGrid\">
            ";
            // line 1043
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
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
                // line 1044
                yield "                ";
                yield from $this->load("marketplace/_product_card.html.twig", 1044)->unwrap()->yield(CoreExtension::merge($context, ["product" =>                 // line 1045
$context["product"], "favoriteIds" =>                 // line 1046
($context["favoriteIds"] ?? null), "cartProductIds" => ((                // line 1047
array_key_exists("cartProductIds", $context)) ? (Twig\Extension\CoreExtension::default(($context["cartProductIds"] ?? null), [])) : ([]))]));
                // line 1049
                yield "            ";
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
            // line 1050
            yield "        </div>

        <!-- ==================== PAGINATION ==================== -->
        ";
            // line 1053
            if ((($context["totalPages"] ?? null) > 1)) {
                // line 1054
                yield "            <nav class=\"pagination-modern\" aria-label=\"Pagination\">
                <ul class=\"pagination\">
                    ";
                // line 1056
                if ((($context["currentPage"] ?? null) > 1)) {
                    // line 1057
                    yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"?page=";
                    // line 1058
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["currentPage"] ?? null) - 1), "html", null, true);
                    if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&search=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
                    }
                    if ((($tmp = ($context["selectedCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&category=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCategory"] ?? null), "html", null, true);
                    }
                    if ((($tmp = ($context["selectedSort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&sort=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedSort"] ?? null), "html", null, true);
                    }
                    yield "\" aria-label=\"Précédent\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                    ";
                } else {
                    // line 1063
                    yield "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-left\"></i></span>
                        </li>
                    ";
                }
                // line 1067
                yield "
                    ";
                // line 1068
                $context["startPage"] = max(1, (($context["currentPage"] ?? null) - 2));
                // line 1069
                yield "                    ";
                $context["endPage"] = min(($context["totalPages"] ?? null), (($context["currentPage"] ?? null) + 2));
                // line 1070
                yield "
                    ";
                // line 1071
                if ((($context["startPage"] ?? null) > 1)) {
                    // line 1072
                    yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"?page=1";
                    // line 1073
                    if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&search=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
                    }
                    if ((($tmp = ($context["selectedCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&category=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCategory"] ?? null), "html", null, true);
                    }
                    if ((($tmp = ($context["selectedSort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&sort=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedSort"] ?? null), "html", null, true);
                    }
                    yield "\">1</a>
                        </li>
                        ";
                    // line 1075
                    if ((($context["startPage"] ?? null) > 2)) {
                        // line 1076
                        yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                    }
                    // line 1078
                    yield "                    ";
                }
                // line 1079
                yield "
                    ";
                // line 1080
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 1081
                    yield "                        <li class=\"page-item ";
                    if (($context["page"] == ($context["currentPage"] ?? null))) {
                        yield "active";
                    }
                    yield "\">
                            <a class=\"page-link\" href=\"?page=";
                    // line 1082
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&search=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
                    }
                    if ((($tmp = ($context["selectedCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&category=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCategory"] ?? null), "html", null, true);
                    }
                    if ((($tmp = ($context["selectedSort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&sort=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedSort"] ?? null), "html", null, true);
                    }
                    yield "\">
                                ";
                    // line 1083
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1087
                yield "
                    ";
                // line 1088
                if ((($context["endPage"] ?? null) < ($context["totalPages"] ?? null))) {
                    // line 1089
                    yield "                        ";
                    if ((($context["endPage"] ?? null) < (($context["totalPages"] ?? null) - 1))) {
                        // line 1090
                        yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                    }
                    // line 1092
                    yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"?page=";
                    // line 1093
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                    if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&search=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
                    }
                    if ((($tmp = ($context["selectedCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&category=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCategory"] ?? null), "html", null, true);
                    }
                    if ((($tmp = ($context["selectedSort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&sort=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedSort"] ?? null), "html", null, true);
                    }
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                    yield "</a>
                        </li>
                    ";
                }
                // line 1096
                yield "
                    ";
                // line 1097
                if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                    // line 1098
                    yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"?page=";
                    // line 1099
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["currentPage"] ?? null) + 1), "html", null, true);
                    if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&search=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
                    }
                    if ((($tmp = ($context["selectedCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&category=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCategory"] ?? null), "html", null, true);
                    }
                    if ((($tmp = ($context["selectedSort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "&sort=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedSort"] ?? null), "html", null, true);
                    }
                    yield "\" aria-label=\"Suivant\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
                } else {
                    // line 1104
                    yield "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-right\"></i></span>
                        </li>
                    ";
                }
                // line 1108
                yield "                </ul>
                <span class=\"page-info\">
                    Page ";
                // line 1110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
                yield " sur ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                yield "
                </span>
            </nav>
        ";
            }
            // line 1114
            yield "    ";
        } else {
            // line 1115
            yield "        <!-- ==================== EMPTY STATE ==================== -->
        <div class=\"empty-state-modern\">
            <div class=\"icon-wrapper\">
                <i class=\"fas fa-box-open\"></i>
            </div>
            <h4>Aucun produit trouvé</h4>
            <p>
                ";
            // line 1122
            if ((($tmp = ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default(($context["search"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1123
                yield "                    Aucun produit ne correspond à votre recherche \"<strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
                yield "</strong>\".
                    <br>Essayez de modifier vos critères de recherche.
                ";
            } else {
                // line 1126
                yield "                    Aucun produit disponible dans le catalogue pour le moment.
                    <br>Revenez plus tard, de nouveaux produits seront ajoutés.
                ";
            }
            // line 1129
            yield "            </p>
            ";
            // line 1130
            if ((($tmp = ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default(($context["search"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1131
                yield "                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
                yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-undo me-1\"></i> Voir tous les produits
                </a>
            ";
            }
            // line 1135
            yield "        </div>
    ";
        }
        // line 1137
        yield "</div>
";
        yield from [];
    }

    // line 1140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1141
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== SELECT2 ====================
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('.select2-category').select2({
            theme: 'bootstrap-5',
            width: '100%',
            placeholder: 'Toutes les catégories',
            allowClear: true,
            language: 'fr'
        });

        \$('.select2-category').on('change', function() {
            document.getElementById('filterForm').submit();
        });

        \$('#sortFilter').on('change', function() {
            document.getElementById('filterForm').submit();
        });
    }

    // ==================== SEARCH ====================
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('filterForm').submit();
            }
        });
    }

    // ==================== SCROLL TO PRODUCTS ====================
    ";
        // line 1177
        if (((((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default(($context["search"] ?? null), "")) : ("")) || ($context["selectedCategory"] ?? null)) || (($context["selectedSort"] ?? null) != "latest"))) {
            // line 1178
            yield "        const productsGrid = document.getElementById('productsGrid');
        if (productsGrid) {
            setTimeout(function() {
                const rect = productsGrid.getBoundingClientRect();
                const offset = rect.top + window.pageYOffset - 80;
                window.scrollTo({ top: offset, behavior: 'smooth' });
            }, 300);
        }
    ";
        }
        // line 1187
        yield "});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/products/products.html.twig";
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
        return array (  1642 => 1187,  1631 => 1178,  1629 => 1177,  1590 => 1141,  1583 => 1140,  1577 => 1137,  1573 => 1135,  1565 => 1131,  1563 => 1130,  1560 => 1129,  1555 => 1126,  1548 => 1123,  1546 => 1122,  1537 => 1115,  1534 => 1114,  1525 => 1110,  1521 => 1108,  1515 => 1104,  1495 => 1099,  1492 => 1098,  1490 => 1097,  1487 => 1096,  1467 => 1093,  1464 => 1092,  1460 => 1090,  1457 => 1089,  1455 => 1088,  1452 => 1087,  1442 => 1083,  1426 => 1082,  1419 => 1081,  1415 => 1080,  1412 => 1079,  1409 => 1078,  1405 => 1076,  1403 => 1075,  1387 => 1073,  1384 => 1072,  1382 => 1071,  1379 => 1070,  1376 => 1069,  1374 => 1068,  1371 => 1067,  1365 => 1063,  1345 => 1058,  1342 => 1057,  1340 => 1056,  1336 => 1054,  1334 => 1053,  1329 => 1050,  1315 => 1049,  1313 => 1047,  1312 => 1046,  1311 => 1045,  1309 => 1044,  1292 => 1043,  1289 => 1042,  1287 => 1041,  1281 => 1037,  1277 => 1035,  1269 => 1030,  1265 => 1029,  1262 => 1028,  1259 => 1022,  1256 => 1021,  1248 => 1016,  1244 => 1015,  1241 => 1014,  1235 => 1013,  1232 => 1012,  1229 => 1011,  1226 => 1010,  1221 => 1009,  1218 => 1008,  1215 => 1007,  1207 => 1002,  1203 => 1001,  1200 => 1000,  1198 => 999,  1195 => 998,  1193 => 997,  1189 => 995,  1183 => 993,  1177 => 992,  1174 => 991,  1171 => 990,  1168 => 989,  1163 => 988,  1160 => 987,  1157 => 986,  1151 => 984,  1149 => 983,  1145 => 982,  1133 => 973,  1124 => 966,  1116 => 960,  1114 => 959,  1110 => 958,  1095 => 948,  1089 => 947,  1083 => 946,  1077 => 945,  1071 => 944,  1061 => 936,  1055 => 935,  1051 => 933,  1042 => 930,  1033 => 929,  1029 => 928,  1024 => 926,  1016 => 925,  1011 => 924,  1008 => 923,  1004 => 922,  993 => 914,  983 => 907,  966 => 892,  959 => 891,  72 => 8,  65 => 7,  54 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/products/products.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\products\\products.html.twig");
    }
}
