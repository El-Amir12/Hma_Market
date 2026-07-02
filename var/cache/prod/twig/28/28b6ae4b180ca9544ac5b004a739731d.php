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

/* marketplace/index.html.twig */
class __TwigTemplate_4eb05796528cf24df882168492b2b241 extends Template
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
        return "base_marketplace.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_marketplace.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "HMA Marketplace - Votre supermarché en ligne";
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
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\"/>
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    :root {
        --primary: #0463f1;
        --primary-dark: #0355d0;
        --secondary: #667eea;
        --dark: #1f2937;
        --light: #f9fafb;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --gradient-primary: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    }

    .hero-marketplace {
        background: var(--gradient-primary);
        border-radius: 28px;
        padding: 4rem 4rem;
        margin-bottom: 3rem;
        color: white;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(4, 99, 241, 0.3);
        width: 100%;
    }

    .hero-marketplace::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 70%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
        animation: heroFloat 10s ease-in-out infinite;
    }

    .hero-marketplace::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -10%;
        width: 50%;
        height: 150%;
        background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%);
        animation: heroFloat 8s ease-in-out infinite reverse;
    }

    @keyframes heroFloat {
        0%, 100% { transform: translateX(0) rotate(0deg); }
        50% { transform: translateX(30px) rotate(3deg); }
    }

    .hero-marketplace .hero-logo-container {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 30px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.2);
        min-height: 200px;
        transition: all 0.3s ease;
    }

    .hero-marketplace .hero-logo {
        max-width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: contain;
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        animation: logoFloat 4s ease-in-out infinite;
        background: white !important;
        padding: 0.5rem;
        transition: all 0.3s ease;
        display: block;
    }

    .hero-marketplace .hero-logo-fallback {
        font-size: 6rem;
        line-height: 1;
        animation: logoFloat 4s ease-in-out infinite;
        filter: drop-shadow(0 10px 30px rgba(0,0,0,0.2));
    }

    @keyframes logoFloat {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-10px) rotate(-2deg); }
    }

    .hero-marketplace .hero-title {
        font-size: 3.2rem;
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 1rem;
        position: relative;
        z-index: 1;
        letter-spacing: -1px;
    }

    .hero-marketplace .hero-title .highlight {
        background: rgba(255,255,255,0.2);
        padding: 0.1rem 1rem;
        border-radius: 16px;
        backdrop-filter: blur(4px);
        display: inline-block;
    }

    .hero-marketplace .hero-subtitle {
        font-size: 1.2rem;
        opacity: 0.9;
        max-width: 500px;
        line-height: 1.6;
        position: relative;
        z-index: 1;
    }

    .hero-marketplace .hero-stats {
        display: flex;
        gap: 3rem;
        margin-top: 1.5rem;
        position: relative;
        z-index: 1;
    }

    .hero-marketplace .hero-stats .number {
        font-size: 2.2rem;
        font-weight: 900;
        display: block;
    }

    .hero-marketplace .hero-stats .label {
        font-size: 0.85rem;
        opacity: 0.8;
    }

    .hero-marketplace .hero-buttons .btn {
        border-radius: 50px;
        padding: 0.8rem 2.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .hero-marketplace .hero-buttons .btn-light {
        background: white;
        color: var(--primary);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .hero-marketplace .hero-buttons .btn-outline-light {
        border: 2px solid rgba(255,255,255,0.6);
        color: white;
    }

    .hero-marketplace .hero-buttons .btn-outline-light:hover {
        background: rgba(255,255,255,0.15);
        transform: translateY(-3px);
        border-color: white;
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .section-header h3 {
        font-size: 1.8rem;
        font-weight: 800;
        color: var(--dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .section-header h3 i {
        color: var(--primary);
    }

    .section-header .see-all {
        color: var(--primary);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        border: 2px solid var(--primary);
    }

    .section-header .see-all:hover {
        background: var(--primary);
        color: white;
        transform: translateX(4px);
    }

    .swiper-container {
        position: relative;
        padding: 0.5rem 0 2.5rem;
        margin: 0 -0.5rem;
        width: 100%;
        overflow: hidden;
    }

    .swiper-slide {
        height: auto;
        padding: 0.5rem;
        flex-shrink: 0;
        width: 280px;
    }

    .category-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem 1rem;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 2px solid #e5e7eb;
        cursor: pointer;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: var(--dark);
        min-height: 140px;
    }

    .category-card:hover {
        transform: translateY(-8px);
        border-color: var(--primary);
        box-shadow: 0 20px 40px rgba(4, 99, 241, 0.12);
    }

    .category-card .category-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: var(--primary);
        margin-bottom: 0.75rem;
        transition: all 0.3s ease;
        overflow: hidden;
        flex-shrink: 0;
    }

    .category-card .category-icon img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .category-card:hover .category-icon {
        transform: scale(1.1) rotate(-5deg);
        background: var(--primary);
        color: white;
    }

    .category-card .category-name {
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 0.25rem;
        color: var(--dark);
    }

    .category-card .category-count {
        font-size: 0.8rem;
        color: #94a3b8;
    }

    .filters-section {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        border: 1px solid #e5e7eb;
        box-shadow: 0 2px 10px rgba(0,0,0,0.04);
    }

    .filters-section .filter-group {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 0.75rem;
        width: 100%;
    }

    .filters-section .filter-group label {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--dark);
        margin-bottom: 0;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        min-width: 80px;
    }

    .filters-section .filter-group select,
    .filters-section .filter-group .search-input {
        border-radius: 50px;
        padding: 0.5rem 1.5rem;
        border: 2px solid #e5e7eb;
        font-size: 0.85rem;
        color: var(--dark);
        transition: all 0.3s ease;
        background: white;
        flex: 1;
        min-width: 150px;
    }

    .filters-section .filter-group select:focus,
    .filters-section .filter-group .search-input:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.08);
        outline: none;
    }

    .filters-section .filter-group .search-input {
        padding-left: 2.5rem;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%2394a3b8' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a6.5 6.5 0 1 1-11 0 6.5 6.5 0 0 1 11 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: 0.8rem center;
        background-size: 16px;
    }

    .filters-section .filter-group .btn-filter {
        border-radius: 50px;
        padding: 0.5rem 1.5rem;
        background: var(--primary);
        color: white;
        border: none;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .filters-section .filter-group .btn-filter:hover {
        background: var(--primary-dark);
        transform: scale(1.02);
    }

    .filters-section .filter-group .btn-reset {
        border-radius: 50px;
        padding: 0.5rem 1rem;
        background: transparent;
        color: #64748b;
        border: 2px solid #e5e7eb;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }

    .filters-section .filter-group .btn-reset:hover {
        background: #f1f5f9;
        border-color: #94a3b8;
    }

    .product-rating {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        margin: 0.3rem 0 0.5rem;
    }

    .product-rating .stars {
        display: flex;
        gap: 0.1rem;
        color: #d1d5db;
    }

    .product-rating .stars .filled {
        color: #f59e0b;
    }

    .product-rating .stars .half-filled {
        color: #f59e0b;
        position: relative;
    }

    .product-rating .stars .half-filled::before {
        content: '\\f005';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 0;
        width: 50%;
        overflow: hidden;
        color: #f59e0b;
    }

    .product-rating .rating-text {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    .product-rating .rating-text strong {
        color: var(--dark);
    }

    .product-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid #e5e7eb;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border-color: var(--primary);
    }

    .product-card .product-image {
        height: 220px;
        background: #f8fafc;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
    }

    .product-card .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
        background: transparent;
    }

    .product-card:hover .product-image img {
        transform: scale(1.08);
    }

    .product-card .product-image .placeholder {
        font-size: 4.5rem;
        color: #cbd5e1;
    }

    .product-card .product-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        font-size: 0.65rem;
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

    .product-card .product-badge.sold-out {
        background: #64748b;
        color: white;
    }

    .product-card .product-badge.featured {
        background: linear-gradient(135deg, #f59e0b, #d97706);
        color: white;
    }

    .product-card .product-body {
        padding: 1.2rem 1.2rem 1rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .product-card .product-category {
        font-size: 0.7rem;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }

    .product-card .product-name {
        font-weight: 700;
        font-size: 1.05rem;
        margin: 0.3rem 0 0.3rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 1.4;
        color: var(--dark);
        flex: 1;
    }

    .product-card .product-pricing {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
        margin-bottom: 0.3rem;
    }

    .product-card .product-price {
        font-weight: 800;
        font-size: 1.3rem;
        color: var(--primary);
    }

    .product-card .product-price .old-price {
        font-size: 0.85rem;
        color: #94a3b8;
        text-decoration: line-through;
        font-weight: 400;
    }

    .product-card .stock-status {
        font-size: 0.7rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        margin-bottom: 0.5rem;
    }

    .product-card .stock-status.in-stock { color: var(--success); }
    .product-card .stock-status.out-of-stock { color: var(--danger); }

    .product-card .favorite-btn {
        position: absolute;
        top: 12px;
        left: 12px;
        width: 38px;
        height: 38px;
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
        z-index: 2;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    .product-card .favorite-btn:hover {
        background: white;
        color: #ef4444;
        transform: scale(1.1);
    }

    .product-card .favorite-btn.active {
        color: #ef4444;
    }

    .product-card .action-buttons {
        display: flex;
        gap: 0.5rem;
        margin-top: auto;
    }

    .product-card .action-buttons .btn-view {
        flex: 1;
        border-radius: 12px;
        padding: 0.7rem;
        border: 2px solid var(--primary);
        background: transparent;
        color: var(--primary);
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        text-decoration: none;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.3rem;
    }

    .product-card .action-buttons .btn-view:hover {
        background: var(--primary);
        color: white;
        transform: scale(1.02);
    }

    .product-card .action-buttons .add-to-cart {
        flex: 1;
        border-radius: 12px;
        padding: 0.7rem;
        border: none;
        font-weight: 700;
        transition: all 0.3s ease;
        background: var(--primary);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        cursor: pointer;
        font-size: 0.85rem;
    }

    .product-card .action-buttons .add-to-cart:hover:not(:disabled) {
        background: var(--primary-dark);
        transform: scale(1.02);
        box-shadow: 0 4px 15px rgba(4, 99, 241, 0.3);
    }

    .product-card .action-buttons .add-to-cart:disabled {
        background: #94a3b8;
        cursor: not-allowed;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

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
        color: var(--dark);
        text-decoration: none;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        background: white;
        cursor: pointer;
    }

    .pagination-wrapper .page-link:hover {
        border-color: var(--primary);
        color: var(--primary);
        background: #f8fafc;
    }

    .pagination-wrapper .page-item.active .page-link {
        background: var(--primary);
        border-color: var(--primary);
        color: white;
    }

    .swiper-button-next,
    .swiper-button-prev {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        color: var(--primary);
        transition: all 0.3s ease;
        border: 2px solid #e5e7eb;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: var(--primary);
        color: white;
        border-color: var(--primary);
        transform: scale(1.05);
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 1.2rem;
        font-weight: 700;
    }

    .swiper-pagination-bullet {
        background: var(--primary);
        opacity: 0.3;
        width: 10px;
        height: 10px;
    }

    .swiper-pagination-bullet-active {
        background: var(--primary);
        opacity: 1;
        width: 30px;
        border-radius: 5px;
    }

    .pharmacy-section {
        background: linear-gradient(135deg, #f8fafc, #e8f0fe);
        border-radius: 28px;
        padding: 3rem;
        margin-top: 3rem;
        border: 1px solid rgba(4, 99, 241, 0.08);
    }

    .pharmacy-card-horizontal {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        transition: all 0.3s ease;
        border: 1px solid #e5e7eb;
        height: 100%;
    }

    .pharmacy-card-horizontal:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        border-color: var(--primary);
    }

    .pharmacy-card-horizontal .pharmacy-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: var(--primary);
        flex-shrink: 0;
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        border: 2px dashed #e5e7eb;
    }

    .empty-state i {
        font-size: 4rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    .empty-state h4 {
        color: var(--dark);
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .empty-state p {
        color: #94a3b8;
        max-width: 400px;
        margin: 0 auto;
    }

    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .animate-on-scroll.visible {
        opacity: 1;
        transform: translateY(0);
    }

    @media (max-width: 1200px) {
        .hero-marketplace { padding: 3rem; }
        .hero-marketplace .hero-title { font-size: 2.8rem; }
        .swiper-slide { width: 240px; }
        .products-grid { grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); }
    }

    @media (max-width: 992px) {
        .hero-marketplace { padding: 2.5rem 2rem; }
        .hero-marketplace .hero-title { font-size: 2.4rem; }
        .hero-marketplace .hero-stats { gap: 1.5rem; }
        .hero-marketplace .hero-stats .number { font-size: 1.8rem; }
        .hero-marketplace .hero-logo-container { min-height: 150px; }
        .hero-marketplace .hero-logo { max-height: 140px; }
        .section-header h3 { font-size: 1.5rem; }
        .swiper-slide { width: 220px; }
        .product-card .product-image { height: 180px; }
        .products-grid { grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); }
        .filters-section .filter-group { flex-direction: column; align-items: stretch; }
        .filters-section .filter-group select,
        .filters-section .filter-group .search-input { width: 100%; min-width: auto; }
    }

    @media (max-width: 768px) {
        .hero-marketplace { padding: 2rem 1.5rem; border-radius: 20px; margin-bottom: 2rem; }
        .hero-marketplace .hero-title { font-size: 2rem; }
        .hero-marketplace .hero-subtitle { font-size: 1rem; }
        .hero-marketplace .hero-stats { gap: 1rem; flex-wrap: wrap; }
        .hero-marketplace .hero-stats .number { font-size: 1.5rem; }
        .hero-marketplace .hero-buttons .btn { width: 100%; justify-content: center; padding: 0.6rem 1.5rem; }
        .hero-marketplace .hero-logo-container { min-height: 120px; padding: 0.5rem; }
        .hero-marketplace .hero-logo { max-height: 100px; border-radius: 12px; }
        .hero-marketplace .hero-logo-fallback { font-size: 4rem; }
        .section-header { flex-direction: column; gap: 0.5rem; align-items: flex-start; }
        .section-header h3 { font-size: 1.3rem; }
        .swiper-slide { width: 180px; }
        .product-card .product-image { height: 150px; }
        .product-card .product-name { font-size: 0.9rem; }
        .product-card .product-price { font-size: 1.1rem; }
        .pharmacy-section { padding: 1.5rem; border-radius: 20px; }
        .swiper-button-next,
        .swiper-button-prev { display: none; }
        .products-grid { grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); gap: 1rem; }
    }

    @media (max-width: 480px) {
        .hero-marketplace { padding: 1.5rem 1rem; }
        .hero-marketplace .hero-title { font-size: 1.6rem; }
        .hero-marketplace .hero-buttons .btn { font-size: 0.85rem; padding: 0.5rem 1rem; }
        .hero-marketplace .hero-logo-container { min-height: 100px; padding: 0.5rem; border-radius: 20px; }
        .hero-marketplace .hero-logo { max-height: 80px; border-radius: 10px; }
        .hero-marketplace .hero-logo-fallback { font-size: 3rem; }
        .swiper-slide { width: 160px; }
        .product-card .product-image { height: 120px; }
        .product-card .product-body { padding: 0.8rem; }
        .product-card .product-name { font-size: 0.8rem; }
        .product-card .product-price { font-size: 1rem; }
        .product-card .action-buttons .add-to-cart,
        .product-card .action-buttons .btn-view { font-size: 0.7rem; padding: 0.4rem; }
        .category-card { min-height: 100px; padding: 1rem; }
        .category-card .category-icon { width: 50px; height: 50px; font-size: 1.4rem; }
        .pharmacy-section { padding: 1rem; }
        .products-grid { grid-template-columns: repeat(2, 1fr); gap: 0.75rem; }
        .product-rating .stars { font-size: 0.7rem; }
        .product-rating .rating-text { font-size: 0.65rem; }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 50px !important;
        padding: 0.5rem 1rem !important;
        border: 2px solid #e5e7eb !important;
        min-height: 44px !important;
    }

    .select2-container--bootstrap-5 .select2-selection:focus {
        border-color: var(--primary) !important;
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.08) !important;
    }

    .select2-container--bootstrap-5 .select2-selection__rendered {
        color: var(--dark) !important;
        font-size: 0.85rem !important;
    }

    /* ==================== STYLES DES PROMOTIONS SIMPLIFIÉS ==================== */

    /* Bordure rouge pour les produits en promotion */
    .product-card.has-promotion {
        border-color: #dc2626;
        border-width: 2px;
    }

    .product-card.has-promotion:hover {
        box-shadow: 0 20px 40px rgba(220, 38, 38, 0.15);
    }

    /* Prix promo en rouge */
    .product-card .product-price.promo-price {
        color: #dc2626;
        font-weight: 800;
        font-size: 1.4rem;
    }

    /* Prix barré */
    .product-card .old-price {
        font-size: 0.85rem;
        color: #94a3b8;
        text-decoration: line-through;
        font-weight: 400;
    }

    /* Nom de la promotion */
    .product-card .promo-name-tag {
        display: block;
        width: 100%;
        font-size: 0.7rem;
        color: #16a34a;
        font-weight: 600;
        margin-top: 0.2rem;
    }

    .product-card .promo-name-tag i {
        color: #22c55e;
    }

    /* Badge \"PROMO\" */
    .product-card .product-badge.promo-label {
        top: 55px;
        right: 12px;
        background: linear-gradient(135deg, #f59e0b, #d97706);
        color: white;
        padding: 0.2rem 0.6rem;
        border-radius: 50px;
        font-size: 0.6rem;
        font-weight: 700;
        text-transform: uppercase;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 2;
        animation: pulse-promo 1.5s infinite;
    }

    /* Badge de réduction */
    .product-card .product-badge.discount {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 2;
        top: 12px;
        right: 12px;
    }

    /* Animations */
    @keyframes pulse-promo {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .product-card .product-price.promo-price {
            font-size: 1.1rem;
        }
        .product-card .old-price {
            font-size: 0.7rem;
        }
        .product-card .promo-name-tag {
            font-size: 0.6rem;
        }
    }

    @media (max-width: 480px) {
        .product-card .product-price.promo-price {
            font-size: 1rem;
        }
        .product-card .product-badge.discount {
            font-size: 0.55rem;
            padding: 0.2rem 0.5rem;
        }
        .product-card .product-badge.promo-label {
            font-size: 0.5rem;
            padding: 0.15rem 0.5rem;
            top: 48px;
        }
    }
    
</style>
";
        yield from [];
    }

    // line 1020
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1021
        yield "<!-- HERO SECTION -->
<div class=\"hero-marketplace animate-on-scroll visible\">
    <div class=\"row align-items-center\">
        <div class=\"col-lg-7\">
            <h1 class=\"hero-title\">
                ";
        // line 1026
        if ((($tmp = ($context["company"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1027
            yield "                    Bienvenue chez <span class=\"highlight\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 1027), "html", null, true);
            yield "</span>
                ";
        } else {
            // line 1029
            yield "                    Vos courses en <span class=\"highlight\">un clic</span>
                ";
        }
        // line 1031
        yield "            </h1>
            <p class=\"hero-subtitle\">
                ";
        // line 1033
        if ((($tmp = ($context["company"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1034
            yield "                    Découvrez tous nos produits et profitez de nos offres exclusives.
                ";
        } else {
            // line 1036
            yield "                    Faites vos courses en ligne et recevez vos produits chez vous.
                ";
        }
        // line 1038
        yield "            </p>
            <div class=\"hero-buttons d-flex gap-3 mt-4 flex-wrap\">
                <a href=\"#products-list\" class=\"btn btn-light btn-lg\">
                    <i class=\"fas fa-shopping-bag me-2\"></i>Commencer vos achats
                </a>
                <a href=\"";
        // line 1043
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\" class=\"btn btn-outline-light btn-lg\">
                    <i class=\"fas fa-hospital me-2\"></i>Pharmacies de garde
                </a>
                ";
        // line 1046
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1046)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1047
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_register");
            yield "\" class=\"btn btn-outline-light btn-lg\">
                        <i class=\"fas fa-user-plus me-2\"></i>Créer un compte
                    </a>
                ";
        }
        // line 1051
        yield "            </div>
            <div class=\"hero-stats\">
                <div class=\"hero-stat\">
                    <span class=\"number\">";
        // line 1054
        yield (((($context["totalProducts"] ?? null) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalProducts"] ?? null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("+" . ($context["totalProducts"] ?? null)), "html", null, true)));
        yield "</span>
                    <span class=\"label\">Produits</span>
                </div>
                <div class=\"hero-stat\">
                    <span class=\"number\">";
        // line 1058
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("+" . Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null))) . " catégories"), "html", null, true)) : ("0"));
        yield "</span>
                    <span class=\"label\"></span>
                </div>
                <div class=\"hero-stat\">
                    <span class=\"number\">24/7</span>
                    <span class=\"label\">Disponible</span>
                </div>
            </div>
        </div>
        <div class=\"col-lg-5 d-none d-lg-block\">
            <div class=\"hero-logo-container\">
                <img src=\"";
        // line 1069
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logos/logo.png"), "html", null, true);
        yield "\" 
                     alt=\"HMA Marketplace\" 
                     class=\"hero-logo\"
                     onerror=\"this.style.display='none'; this.parentElement.querySelector('.hero-logo-fallback').style.display='flex';\">
                <div class=\"hero-logo-fallback\" style=\"display: none;\">🏪</div>
            </div>
        </div>
    </div>
</div>

<!-- CATÉGORIES -->
<div class=\"animate-on-scroll\" style=\"margin-bottom: 3rem;\">
    <div class=\"section-header\">
        <h3><i class=\"fas fa-th-large\"></i>Catégories en vedette</h3>
        ";
        // line 1083
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) > 0)) {
            // line 1084
            yield "            <a href=\"#products-list\" class=\"see-all\">Voir tout <i class=\"fas fa-arrow-right\"></i></a>
        ";
        }
        // line 1086
        yield "    </div>
    
    ";
        // line 1088
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) > 0)) {
            // line 1089
            yield "        <div class=\"swiper-container categories-swiper\">
            <div class=\"swiper-wrapper\">
                ";
            // line 1091
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 1092
                yield "                    <div class=\"swiper-slide\">
                        <a href=\"#products-list\" class=\"category-card\" onclick=\"document.getElementById('categoryFilter').value='";
                // line 1093
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1093), "html", null, true);
                yield "'; document.getElementById('filterForm').submit();\">
                            <div class=\"category-icon\">
                                ";
                // line 1095
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 1095)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1096
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 1096))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1096), "html", null, true);
                    yield "\" loading=\"lazy\">
                                ";
                } else {
                    // line 1098
                    yield "                                    <i class=\"fas fa-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "icon", [], "any", true, true, false, 1098)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 1098), "tag")) : ("tag")), "html", null, true);
                    yield "\"></i>
                                ";
                }
                // line 1100
                yield "                            </div>
                            <span class=\"category-name\">";
                // line 1101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1101), "html", null, true);
                yield "</span>
                            <span class=\"category-count\">";
                // line 1102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 1102)), "html", null, true);
                yield " produits</span>
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1106
            yield "            </div>
            <div class=\"swiper-button-next\"></div>
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-pagination\"></div>
        </div>
    ";
        } else {
            // line 1112
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-tags\"></i>
            <h4>Aucune catégorie disponible</h4>
            <p>Ajoutez vos premières catégories pour commencer à organiser vos produits.</p>
        </div>
    ";
        }
        // line 1118
        yield "</div>

<!-- FILTRES -->
<div class=\"filters-section animate-on-scroll\" id=\"products-list\">
    <form method=\"GET\" action=\"";
        // line 1122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" id=\"filterForm\">
        <div class=\"filter-group\">
            <label><i class=\"fas fa-filter text-primary\"></i> Filtres</label>
            
            <select id=\"categoryFilter\" name=\"category\" class=\"select2-category\">
                <option value=\"\">Toutes les catégories</option>
                ";
        // line 1128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1129
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1129), "html", null, true);
            yield "\" ";
            if ((($context["selectedCategory"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1129))) {
                yield "selected";
            }
            yield ">
                        ";
            // line 1130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1130), "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1133
        yield "            </select>
            
            <select id=\"sortFilter\" name=\"sort\">
                <option value=\"latest\" ";
        // line 1136
        if ((($context["selectedSort"] ?? null) == "latest")) {
            yield "selected";
        }
        yield ">Plus récents</option>
                <option value=\"price_asc\" ";
        // line 1137
        if ((($context["selectedSort"] ?? null) == "price_asc")) {
            yield "selected";
        }
        yield ">Prix croissant</option>
                <option value=\"price_desc\" ";
        // line 1138
        if ((($context["selectedSort"] ?? null) == "price_desc")) {
            yield "selected";
        }
        yield ">Prix décroissant</option>
                <option value=\"name\" ";
        // line 1139
        if ((($context["selectedSort"] ?? null) == "name")) {
            yield "selected";
        }
        yield ">Nom A-Z</option>
            </select>
            
            <input type=\"text\" id=\"searchInput\" name=\"search\" class=\"search-input\" 
                   placeholder=\"Rechercher un produit...\" value=\"";
        // line 1143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default(($context["search"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
            
            <button type=\"submit\" class=\"btn-filter\">
                <i class=\"fas fa-search me-1\"></i>Filtrer
            </button>
            <a href=\"";
        // line 1148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" class=\"btn-reset\">
                <i class=\"fas fa-undo me-1\"></i>Réinitialiser
            </a>
        </div>
    </form>
</div>

<!-- PRODUITS EN VEDETTE -->
<div class=\"animate-on-scroll\" style=\"margin-bottom: 3rem;\">
    <div class=\"section-header\">
        <h3><i class=\"fas fa-star text-warning\"></i>Produits en vedette</h3>
        ";
        // line 1159
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["featuredProducts"] ?? null)) > 0)) {
            // line 1160
            yield "            <a href=\"#products-list\" class=\"see-all\">Voir tout <i class=\"fas fa-arrow-right\"></i></a>
        ";
        }
        // line 1162
        yield "    </div>
    
    ";
        // line 1164
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["featuredProducts"] ?? null)) > 0)) {
            // line 1165
            yield "        <div class=\"swiper-container products-featured-swiper\">
            <div class=\"swiper-wrapper\">
                ";
            // line 1167
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["featuredProducts"] ?? null));
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
                // line 1168
                yield "                    <div class=\"swiper-slide\">
                        ";
                // line 1169
                yield from $this->load("marketplace/_product_card.html.twig", 1169)->unwrap()->yield(CoreExtension::merge($context, ["product" => $context["product"], "favoriteIds" => ($context["favoriteIds"] ?? null)]));
                // line 1170
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
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1172
            yield "            </div>
            <div class=\"swiper-button-next\"></div>
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-pagination\"></div>
        </div>
    ";
        } else {
            // line 1178
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-box-open\"></i>
            <h4>Aucun produit en vedette</h4>
            <p>Ajoutez vos premiers produits pour commencer à vendre sur la marketplace.</p>
        </div>
    ";
        }
        // line 1184
        yield "</div>

<!-- TOUS LES PRODUITS -->
<div class=\"animate-on-scroll\" style=\"margin-bottom: 2rem;\">
    <div class=\"section-header\">
        <h3>
            <i class=\"fas fa-list\"></i>Tous nos produits
            <span class=\"badge bg-primary rounded-pill ms-2\">";
        // line 1191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalProducts"] ?? null), "html", null, true);
        yield "</span>
        </h3>
    </div>
    
    ";
        // line 1195
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) > 0)) {
            // line 1196
            yield "        <div class=\"products-grid\" id=\"productsGrid\">
            ";
            // line 1197
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
                // line 1198
                yield "                ";
                yield from $this->load("marketplace/_product_card.html.twig", 1198)->unwrap()->yield(CoreExtension::merge($context, ["product" => $context["product"], "favoriteIds" => ($context["favoriteIds"] ?? null)]));
                // line 1199
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
            // line 1200
            yield "        </div>
        
        ";
            // line 1202
            if ((($context["totalPages"] ?? null) > 1)) {
                // line 1203
                yield "        <div class=\"pagination-wrapper\">
            <ul class=\"pagination\">
                ";
                // line 1205
                if ((($context["currentPage"] ?? null) > 1)) {
                    // line 1206
                    yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"?page=";
                    // line 1207
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
                    yield "\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </a>
                    </li>
                ";
                }
                // line 1212
                yield "                
                ";
                // line 1213
                $context["startPage"] = max(1, (($context["currentPage"] ?? null) - 2));
                // line 1214
                yield "                ";
                $context["endPage"] = min(($context["totalPages"] ?? null), (($context["currentPage"] ?? null) + 2));
                // line 1215
                yield "                
                ";
                // line 1216
                if ((($context["startPage"] ?? null) > 1)) {
                    // line 1217
                    yield "                    <li class=\"page-item\"><a class=\"page-link\" href=\"?page=1";
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
                    yield "\">1</a></li>
                    ";
                    // line 1218
                    if ((($context["startPage"] ?? null) > 2)) {
                        yield "<li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>";
                    }
                    // line 1219
                    yield "                ";
                }
                // line 1220
                yield "                
                ";
                // line 1221
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 1222
                    yield "                    <li class=\"page-item ";
                    if (($context["page"] == ($context["currentPage"] ?? null))) {
                        yield "active";
                    }
                    yield "\">
                        <a class=\"page-link\" href=\"?page=";
                    // line 1223
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
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1226
                yield "                
                ";
                // line 1227
                if ((($context["endPage"] ?? null) < ($context["totalPages"] ?? null))) {
                    // line 1228
                    yield "                    ";
                    if ((($context["endPage"] ?? null) < (($context["totalPages"] ?? null) - 1))) {
                        yield "<li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>";
                    }
                    // line 1229
                    yield "                    <li class=\"page-item\"><a class=\"page-link\" href=\"?page=";
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
                    yield "</a></li>
                ";
                }
                // line 1231
                yield "                
                ";
                // line 1232
                if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                    // line 1233
                    yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"?page=";
                    // line 1234
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
                    yield "\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </a>
                    </li>
                ";
                }
                // line 1239
                yield "            </ul>
        </div>
        ";
            }
            // line 1242
            yield "    ";
        } else {
            // line 1243
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-box-open\"></i>
            <h4>Aucun produit trouvé</h4>
            <p>";
            // line 1246
            if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Aucun produit ne correspond à votre recherche \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
                yield "\".";
            } else {
                yield "Ajoutez vos premiers produits pour commencer à vendre sur la marketplace.";
            }
            yield "</p>
            ";
            // line 1247
            if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1248
                yield "                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
                yield "\" class=\"btn btn-primary mt-3\">
                    <i class=\"fas fa-undo me-1\"></i>Voir tous les produits
                </a>
            ";
            }
            // line 1252
            yield "        </div>
    ";
        }
        // line 1254
        yield "</div>

<!-- PHARMACIES -->
<div class=\"pharmacy-section animate-on-scroll\">
    <div class=\"section-header\">
        <h3><i class=\"fas fa-hospital text-primary\"></i>Pharmacies de garde</h3>
        <a href=\"";
        // line 1260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\" class=\"see-all\">
            Voir toutes <i class=\"fas fa-arrow-right\"></i>
        </a>
    </div>
    <div class=\"row g-4\">
        <div class=\"col-md-6\">
            <div class=\"pharmacy-card-horizontal d-flex align-items-center gap-3\">
                <div class=\"pharmacy-icon\"><i class=\"fas fa-search-location\"></i></div>
                <div>
                    <h5 class=\"fw-bold mb-1\">Trouvez une pharmacie</h5>
                    <p class=\"text-muted small mb-2\">Recherchez par pays, ville et trouvez les pharmacies de garde près de chez vous.</p>
                    <a href=\"";
        // line 1271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\" class=\"btn btn-sm btn-primary\">
                        <i class=\"fas fa-arrow-right me-1\"></i>Rechercher
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"pharmacy-card-horizontal d-flex align-items-center gap-3\">
                <div class=\"pharmacy-icon\" style=\"background: rgba(16, 185, 129, 0.1); color: var(--success);\">
                    <i class=\"fas fa-clock\"></i>
                </div>
                <div>
                    <h5 class=\"fw-bold mb-1\">Disponibilité 24/7</h5>
                    <p class=\"text-muted small mb-2\">Consultez les horaires d'ouverture et les pharmacies de garde pour vos urgences.</p>
                    <a href=\"";
        // line 1285
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\" class=\"btn btn-sm btn-success\">
                        <i class=\"fas fa-clock me-1\"></i>Voir les gardes
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 1295
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1296
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // SELECT2
    \$('.select2-category').select2({
        theme: 'bootstrap-5',
        width: '100%',
        placeholder: 'Toutes les catégories',
        allowClear: true,
        language: 'fr'
    });

    // SWIPER CATEGORIES
    if (document.querySelector('.categories-swiper')) {
        new Swiper('.categories-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 15,
            loop: true,
            autoplay: { delay: 4000, disableOnInteraction: true },
            navigation: {
                nextEl: '.categories-swiper .swiper-button-next',
                prevEl: '.categories-swiper .swiper-button-prev',
            },
            pagination: { el: '.categories-swiper .swiper-pagination', clickable: true },
            breakpoints: {
                320: { slidesPerView: 2, spaceBetween: 10 },
                480: { slidesPerView: 3, spaceBetween: 12 },
                640: { slidesPerView: 4, spaceBetween: 15 },
                768: { slidesPerView: 5, spaceBetween: 15 },
                1024: { slidesPerView: 6, spaceBetween: 20 },
                1200: { slidesPerView: 8, spaceBetween: 20 },
            }
        });
    }

    // SWIPER FEATURED PRODUCTS
    if (document.querySelector('.products-featured-swiper')) {
        new Swiper('.products-featured-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            loop: true,
            autoplay: { delay: 5000, disableOnInteraction: true },
            navigation: {
                nextEl: '.products-featured-swiper .swiper-button-next',
                prevEl: '.products-featured-swiper .swiper-button-prev',
            },
            pagination: { el: '.products-featured-swiper .swiper-pagination', clickable: true },
            breakpoints: {
                320: { slidesPerView: 1.2, spaceBetween: 10 },
                480: { slidesPerView: 2, spaceBetween: 12 },
                640: { slidesPerView: 2.5, spaceBetween: 15 },
                768: { slidesPerView: 3, spaceBetween: 20 },
                1024: { slidesPerView: 4, spaceBetween: 25 },
                1200: { slidesPerView: 5, spaceBetween: 25 },
            }
        });
    }

    // ANIMATION ON SCROLL
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

    // ==================== FAVORIS - VERSION CORRIGÉE ====================
    window.toggleFavorite = function(btn, productId) {
        const icon = btn.querySelector('i');
        const isCurrentlyFavorite = icon.classList.contains('fas');
        
        btn.disabled = true;
        icon.className = 'fas fa-spinner fa-spin';
        
        fetch('";
        // line 1373
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
                if (data.isFavorite) {
                    icon.className = 'fas fa-heart';
                    btn.classList.add('active');
                    showNotification('✓ Ajouté aux favoris', 'success');
                } else {
                    icon.className = 'far fa-heart';
                    btn.classList.remove('active');
                    showNotification('Retiré des favoris', 'info');
                }
                updateFavoritesCount(data.count);
            } else {
                icon.className = isCurrentlyFavorite ? 'fas fa-heart' : 'far fa-heart';
                if (isCurrentlyFavorite) btn.classList.add('active');
                else btn.classList.remove('active');
                showNotification(data.error || 'Erreur', 'error');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            icon.className = isCurrentlyFavorite ? 'fas fa-heart' : 'far fa-heart';
            if (isCurrentlyFavorite) btn.classList.add('active');
            else btn.classList.remove('active');
            showNotification(error.message || 'Erreur de connexion', 'error');
        })
        .finally(() => {
            btn.disabled = false;
        });
    };

    // ==================== AJOUT AU PANIER ====================
    document.querySelectorAll('.add-to-cart').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (this.disabled) return;
            
            const productId = this.dataset.productId;
            const originalText = this.innerHTML;
            
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-1\"></i> Ajout...';
            this.disabled = true;
            
            fetch('";
        // line 1432
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
                        cartBadge.style.display = 'block';
                        cartBadge.style.transform = 'scale(1.4)';
                        setTimeout(() => cartBadge.style.transform = 'scale(1)', 300);
                    }
                    
                    this.innerHTML = '<i class=\"fas fa-check me-1\"></i> Ajouté !';
                    this.style.background = '#10b981';
                    
                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.style.background = '';
                        this.disabled = false;
                    }, 1500);
                } else {
                    this.innerHTML = originalText;
                    this.disabled = false;
                    showNotification(data.error || 'Erreur', 'error');
                }
            })
            .catch(() => {
                this.innerHTML = originalText;
                this.disabled = false;
                showNotification('Erreur de connexion', 'error');
            });
        });
    });

    // ==================== MISE À JOUR DES COMPTEURS ====================
    window.updateFavoritesCount = function(count) {
        const badge = document.getElementById('favoritesCount');
        if (badge) {
            if (count !== undefined) {
                badge.textContent = count;
                badge.style.display = count > 0 ? 'block' : 'none';
            } else {
                fetch('";
        // line 1481
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites_count");
        yield "')
                    .then(r => r.json())
                    .then(data => {
                        badge.textContent = data.count || 0;
                        badge.style.display = data.count > 0 ? 'block' : 'none';
                    })
                    .catch(() => {});
            }
            badge.style.transform = 'scale(1.5)';
            setTimeout(() => badge.style.transform = 'scale(1)', 300);
        }
    };

    window.updateCartCount = function() {
        const badge = document.getElementById('cartCount');
        if (badge) {
            fetch('";
        // line 1497
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart_count");
        yield "')
                .then(r => r.json())
                .then(data => {
                    badge.textContent = data.count || 0;
                    badge.style.display = data.count > 0 ? 'block' : 'none';
                })
                .catch(() => {});
        }
    };

    // ✅ Initialiser les compteurs UNIQUEMENT si l'utilisateur est un Customer
    ";
        // line 1508
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1508) && $this->extensions['App\Twig\AppExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1508)))) {
            // line 1509
            yield "        if (document.getElementById('favoritesCount')) {
            updateFavoritesCount();
        }
        if (document.getElementById('cartCount')) {
            updateCartCount();
        }
    ";
        }
        // line 1516
        yield "
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

    // Styles pour les notifications
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideUp {
            from { transform: translateY(100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes slideDown {
            from { transform: translateY(0); opacity: 1; }
            to { transform: translateY(100%); opacity: 0; }
        }
    `;
    document.head.appendChild(style);
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
        return "marketplace/index.html.twig";
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
        return array (  1988 => 1516,  1979 => 1509,  1977 => 1508,  1963 => 1497,  1944 => 1481,  1892 => 1432,  1830 => 1373,  1750 => 1296,  1743 => 1295,  1729 => 1285,  1712 => 1271,  1698 => 1260,  1690 => 1254,  1686 => 1252,  1678 => 1248,  1676 => 1247,  1666 => 1246,  1661 => 1243,  1658 => 1242,  1653 => 1239,  1633 => 1234,  1630 => 1233,  1628 => 1232,  1625 => 1231,  1605 => 1229,  1600 => 1228,  1598 => 1227,  1595 => 1226,  1572 => 1223,  1565 => 1222,  1561 => 1221,  1558 => 1220,  1555 => 1219,  1551 => 1218,  1535 => 1217,  1533 => 1216,  1530 => 1215,  1527 => 1214,  1525 => 1213,  1522 => 1212,  1502 => 1207,  1499 => 1206,  1497 => 1205,  1493 => 1203,  1491 => 1202,  1487 => 1200,  1473 => 1199,  1470 => 1198,  1453 => 1197,  1450 => 1196,  1448 => 1195,  1441 => 1191,  1432 => 1184,  1424 => 1178,  1416 => 1172,  1401 => 1170,  1399 => 1169,  1396 => 1168,  1379 => 1167,  1375 => 1165,  1373 => 1164,  1369 => 1162,  1365 => 1160,  1363 => 1159,  1349 => 1148,  1341 => 1143,  1332 => 1139,  1326 => 1138,  1320 => 1137,  1314 => 1136,  1309 => 1133,  1300 => 1130,  1291 => 1129,  1287 => 1128,  1278 => 1122,  1272 => 1118,  1264 => 1112,  1256 => 1106,  1246 => 1102,  1242 => 1101,  1239 => 1100,  1233 => 1098,  1225 => 1096,  1223 => 1095,  1218 => 1093,  1215 => 1092,  1211 => 1091,  1207 => 1089,  1205 => 1088,  1201 => 1086,  1197 => 1084,  1195 => 1083,  1178 => 1069,  1164 => 1058,  1157 => 1054,  1152 => 1051,  1144 => 1047,  1142 => 1046,  1136 => 1043,  1129 => 1038,  1125 => 1036,  1121 => 1034,  1119 => 1033,  1115 => 1031,  1111 => 1029,  1105 => 1027,  1103 => 1026,  1096 => 1021,  1089 => 1020,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\index.html.twig");
    }
}
