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

/* marketplace/pharmacy/search.html.twig */
class __TwigTemplate_1834b420bacd96a77125f70e94c66b31 extends Template
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
        yield "Pharmacies - HMA Market";
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<style>
    :root {
        --primary-color: #0463f1;
        --primary-light: #e8f0fe;
        --dark-color: #1e293b;
        --gray-500: #64748b;
        --gray-300: #cbd5e1;
        --gray-200: #e5e7eb;
        --gray-100: #f1f5f9;
        --success-color: #16a34a;
    }

    body { background: #f8fafc; }

    .page-header {
        background: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        border-radius: 20px;
        padding: 2rem 3rem;
        margin-bottom: 2rem;
        color: white;
        box-shadow: 0 4px 20px rgba(4, 99, 241, 0.3);
    }

    .page-header h1 { font-weight: 800; font-size: 2rem; }
    .page-header p { opacity: 0.9; margin-bottom: 0; }

    .mode-tabs {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .mode-tab {
        padding: 0.7rem 2rem;
        border-radius: 50px;
        border: 2px solid #e5e7eb;
        background: white;
        color: #64748b;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
        flex: 1;
        text-align: center;
    }

    .mode-tab.active {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        box-shadow: 0 4px 15px rgba(4, 99, 241, 0.3);
    }

    .mode-tab:hover:not(.active) {
        border-color: var(--primary-color);
        color: var(--primary-color);
        transform: translateY(-2px);
    }

    .mode-tab i { margin-right: 0.5rem; }

    /* Select2 Styles */
    .select2-container { display: block !important; width: 100% !important; z-index: 1050 !important; }
    .select2-container--default .select2-selection--single {
        display: block !important;
        height: 48px !important;
        padding: 0 !important;
        border: 2px solid #e5e7eb !important;
        border-radius: 12px !important;
        background-color: white !important;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out !important;
    }
    .select2-container--default .select2-selection--single:hover { border-color: var(--primary-color) !important; }
    .select2-container--default.select2-container--open .select2-selection--single {
        border-color: var(--primary-color) !important;
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.08) !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        display: block !important;
        line-height: 44px !important;
        padding-left: 1rem !important;
        padding-right: 2.5rem !important;
        color: #1e293b !important;
        font-size: 1rem !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        white-space: nowrap !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__placeholder { color: #94a3b8 !important; }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        display: block !important;
        height: 44px !important;
        width: 2.5rem !important;
        position: absolute !important;
        right: 0 !important;
        top: 0 !important;
        bottom: 0 !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #64748b transparent transparent transparent !important;
        border-style: solid !important;
        border-width: 5px 4px 0 4px !important;
        height: 0 !important;
        left: 50% !important;
        margin-left: -4px !important;
        margin-top: -2px !important;
        position: absolute !important;
        top: 50% !important;
        width: 0 !important;
    }
    .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #64748b transparent !important;
        border-width: 0 4px 5px 4px !important;
    }
    .select2-dropdown {
        display: block !important;
        border: 2px solid #e5e7eb !important;
        border-radius: 12px !important;
        background-color: white !important;
        overflow: hidden !important;
        z-index: 1060 !important;
        margin-top: 4px !important;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1) !important;
    }
    .select2-results__option {
        display: block !important;
        padding: 0.6rem 1rem !important;
        color: #1e293b !important;
        font-size: 0.95rem !important;
        transition: background-color 0.15s ease !important;
    }
    .select2-results__option--highlighted {
        background-color: var(--primary-color) !important;
        color: white !important;
    }
    .select2-results__option[aria-selected=\"true\"] {
        background-color: var(--primary-light) !important;
        color: var(--primary-color) !important;
    }

    /* Filters */
    .filters-container {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid var(--gray-200);
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }

    .filters-container .filter-group {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        align-items: flex-end;
    }

    .filters-container .filter-item { flex: 1; min-width: 180px; }

    .filter-item label {
        font-weight: 600;
        font-size: 0.85rem;
        margin-bottom: 0.3rem;
        display: block;
        color: var(--dark-color);
    }

    .filter-item label i { color: var(--primary-color); }

    .filter-item .form-select,
    .filter-item .form-control {
        border-radius: 12px;
        border: 2px solid var(--gray-200);
        padding: 0.6rem 1rem;
        height: 48px;
        transition: all 0.3s ease;
        background-color: white;
    }

    .filter-item .form-control:focus,
    .filter-item .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.08);
        outline: none;
    }

    .filter-actions {
        display: flex;
        gap: 0.75rem;
        align-items: center;
        flex-wrap: wrap;
    }

    .filter-actions .btn {
        border-radius: 12px;
        padding: 0.6rem 1.5rem;
        font-weight: 600;
        height: 48px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        justify-content: center;
    }

    .filter-actions .btn-primary {
        background: var(--primary-color);
        border: 2px solid var(--primary-color);
        color: white;
    }

    .filter-actions .btn-primary:hover {
        background: #0355d4;
        border-color: #0355d4;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(4, 99, 241, 0.3);
    }

    .filter-actions .btn-outline-secondary {
        background: white;
        border: 2px solid var(--gray-200);
        color: var(--gray-500);
    }

    .filter-actions .btn-outline-secondary:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        transform: translateY(-2px);
    }

    .pharmacy-select-container {
        display: none;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid var(--gray-200);
    }

    .pharmacy-select-container.visible { display: block; }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        border: 2px dashed #e5e7eb;
    }

    .empty-state i { font-size: 4rem; color: #cbd5e1; margin-bottom: 1rem; }
    .empty-state h4 { color: var(--dark-color); font-weight: 700; }
    .empty-state .text-muted { color: var(--gray-500); }

    /* Guard Badge */
    .guard-badge {
        background: #dcfce7;
        color: #16a34a;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }

    .guard-badge.active {
        animation: pulse-guard 2s infinite;
    }

    .guard-badge.inactive {
        background: #fee2e2;
        color: #dc2626;
    }

    @keyframes pulse-guard {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.7; transform: scale(0.98); }
    }

    /* Pharmacy Grid */
    .pharmacy-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 1.5rem;
    }

    .pharmacy-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid var(--gray-200);
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .pharmacy-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--success-color), #22c55e);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .pharmacy-card:hover::before { opacity: 1; }
    .pharmacy-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        border-color: var(--success-color);
    }

    .pharmacy-card .pharmacy-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        background: #dcfce7;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--success-color);
        flex-shrink: 0;
    }

    .pharmacy-card .pharmacy-name {
        font-weight: 700;
        font-size: 1.1rem;
        color: var(--dark-color);
        margin-bottom: 0.25rem;
    }

    .pharmacy-card .pharmacy-address {
        font-size: 0.85rem;
        color: var(--gray-500);
        margin-bottom: 0.2rem;
    }

    .pharmacy-card .pharmacy-address i { width: 18px; color: #94a3b8; }

    .pharmacy-card .pharmacy-actions {
        margin-top: 0.75rem;
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .pharmacy-card .pharmacy-actions .btn-sm {
        border-radius: 50px;
        font-size: 0.75rem;
        padding: 0.25rem 0.8rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .section-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .section-title .badge-count {
        background: #dcfce7;
        color: var(--success-color);
        font-weight: 600;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        font-size: 0.85rem;
    }

    .section-title i { color: var(--success-color); }

    /* Pagination */
    .pagination-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 2rem;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .pagination-container .page-link {
        border-radius: 8px;
        padding: 0.5rem 1rem;
        border: 1px solid var(--gray-200);
        color: var(--dark-color);
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        min-width: 40px;
        justify-content: center;
    }

    .pagination-container .page-link:hover {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        transform: translateY(-2px);
    }

    .pagination-container .page-link.active {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        font-weight: 700;
    }

    .pagination-container .page-link.disabled {
        opacity: 0.5;
        cursor: not-allowed;
        pointer-events: none;
    }

    .pagination-container .page-info {
        color: var(--gray-500);
        font-size: 0.85rem;
        padding: 0 0.5rem;
    }

    /* Pharmacy Detail */
    .pharmacy-selected-info {
        background: var(--primary-light);
        border-radius: 12px;
        padding: 1rem 1.5rem;
        border-left: 4px solid var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .pharmacy-selected-info .pharmacy-name {
        font-weight: 600;
        color: var(--dark-color);
    }

    .pharmacy-selected-info .pharmacy-name i { color: var(--primary-color); }

    /* Product Filters */
    .product-filters-container {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid var(--gray-200);
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }

    .product-filters-container .filter-group {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        align-items: flex-end;
    }

    .product-filters-container .filter-item { flex: 1; min-width: 180px; }

    .product-filters-container .filter-item label {
        font-weight: 600;
        font-size: 0.85rem;
        margin-bottom: 0.3rem;
        display: block;
        color: var(--dark-color);
    }

    .product-filters-container .filter-item label i { color: var(--primary-color); }

    .product-filters-container .filter-item .form-select,
    .product-filters-container .filter-item .form-control {
        border-radius: 12px;
        border: 2px solid var(--gray-200);
        padding: 0.6rem 1rem;
        height: 48px;
        transition: all 0.3s ease;
        background-color: white;
    }

    .prescription-check {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding-top: 0.5rem;
        height: 48px;
    }

    .prescription-check input[type=\"checkbox\"] {
        width: 20px;
        height: 20px;
        accent-color: var(--primary-color);
        cursor: pointer;
        flex-shrink: 0;
    }

    .prescription-check label {
        cursor: pointer;
        font-weight: 500;
        margin-bottom: 0;
        color: var(--dark-color);
    }

    .product-select-container {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid var(--gray-200);
        margin-top: 1.5rem;
    }

    .product-select-container .form-label { font-size: 1rem; }
    .product-select-container .badge { font-size: 0.8rem; padding: 0.25rem 0.75rem; }

    .product-status {
        font-size: 0.85rem;
        font-weight: 600;
        padding: 0.3rem 1rem;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .product-status.in-stock {
        background: #dcfce7;
        color: #16a34a;
    }

    .product-status.out-of-stock {
        background: #fee2e2;
        color: #dc2626;
    }

    .prescription-badge {
        font-size: 0.85rem;
        font-weight: 600;
        padding: 0.3rem 1rem;
        border-radius: 50px;
        background: #fef3c7;
        color: #92400e;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .product-info {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        width: 100% !important;
        padding: 2px 0 !important;
    }

    .product-info .product-name { font-weight: 500 !important; }
    .product-info .product-price {
        color: var(--primary-color) !important;
        font-weight: 600 !important;
        font-size: 0.9rem !important;
    }

    .active-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid var(--gray-200);
    }

    .active-filters .filter-tag {
        background: var(--primary-light);
        color: var(--primary-color);
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
    }

    .active-filters .filter-tag .remove-filter {
        cursor: pointer;
        opacity: 0.7;
        transition: opacity 0.2s ease;
        text-decoration: none;
        color: inherit;
    }

    .active-filters .filter-tag .remove-filter:hover { opacity: 1; }

    .filter-status {
        margin-top: 0.5rem;
        font-size: 0.85rem;
        color: var(--gray-500);
    }

    .filter-status .applied {
        color: var(--primary-color);
        font-weight: 600;
    }

    /* ============================================================ */
    /* ✅ RESPONSIVE - CORRECTIONS POUR MOBILE                       */
    /* ============================================================ */
    @media (max-width: 992px) {
        .page-header { padding: 1.5rem; }
        .page-header h1 { font-size: 1.8rem; }
    }

    @media (max-width: 768px) {
        .page-header { padding: 1.25rem; }
        .page-header h1 { font-size: 1.5rem; }
        .page-header p { font-size: 0.9rem; }
        
        .mode-tabs { flex-direction: column; }
        .mode-tab { 
            padding: 0.6rem 1rem; 
            font-size: 0.85rem;
            width: 100%;
        }

        /* ✅ FILTRES - Centrage et alignement sur mobile */
        .filters-container { padding: 1rem; }
        
        .filters-container .filter-group {
            flex-direction: column;
            align-items: stretch;
            gap: 0.75rem;
        }

        .filters-container .filter-item {
            min-width: 100%;
            width: 100%;
        }

        .filters-container .filter-item label {
            font-size: 0.8rem;
            margin-bottom: 0.2rem;
        }

        .filters-container .filter-item .form-select,
        .filters-container .filter-item .form-control {
            height: 44px;
            font-size: 0.9rem;
            padding: 0.5rem 0.75rem;
            width: 100%;
        }

        /* ✅ SELECT2 sur mobile */
        .select2-container--default .select2-selection--single {
            height: 44px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 40px !important;
            font-size: 0.9rem !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 40px !important;
        }

        /* ✅ BOUTONS - Centrage et pleine largeur */
        .filter-actions {
            flex-direction: column;
            width: 100%;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }

        .filter-actions .btn {
            width: 100%;
            justify-content: center;
            height: 44px;
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
        }

        /* ✅ SELECTEUR PHARMACIE */
        .pharmacy-select-container {
            margin-top: 0.75rem;
            padding-top: 0.75rem;
        }

        .pharmacy-select-container .filter-group {
            flex-direction: column;
            gap: 0.75rem;
        }

        /* ✅ GRILLE PHARMACIES */
        .pharmacy-grid { 
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .pharmacy-card { padding: 1rem; }
        .pharmacy-card .pharmacy-name { font-size: 1rem; }
        .pharmacy-card .pharmacy-address { font-size: 0.8rem; }
        .pharmacy-card .pharmacy-actions { 
            flex-direction: column;
            width: 100%;
        }
        .pharmacy-card .pharmacy-actions .btn-sm { 
            width: 100%; 
            text-align: center;
            justify-content: center;
        }

        /* ✅ PAGINATION */
        .pagination-container .page-link { 
            padding: 0.4rem 0.8rem; 
            font-size: 0.85rem;
            min-width: 35px;
        }

        /* ✅ PRODUCT FILTERS */
        .product-filters-container { padding: 1rem; }
        .product-filters-container .filter-group {
            flex-direction: column;
            gap: 0.75rem;
        }
        .product-filters-container .filter-item {
            min-width: 100%;
            width: 100%;
        }
        .product-filters-container .filter-item .form-select,
        .product-filters-container .filter-item .form-control {
            height: 44px;
            font-size: 0.9rem;
            padding: 0.5rem 0.75rem;
            width: 100%;
        }

        .prescription-check {
            height: auto;
            padding-top: 0;
            padding-bottom: 0.5rem;
        }

        .prescription-check input[type=\"checkbox\"] {
            width: 18px;
            height: 18px;
        }

        /* ✅ PHARMACY SELECTED INFO */
        .pharmacy-selected-info { 
            flex-direction: column; 
            align-items: flex-start;
            padding: 0.75rem 1rem;
            gap: 0.75rem;
        }
        .pharmacy-selected-info .d-flex {
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .pharmacy-selected-info .btn-sm {
            width: 100%;
            text-align: center;
            justify-content: center;
        }

        /* ✅ PRODUCT SELECT */
        .product-select-container { padding: 1rem; }
        .product-select-container .form-label { font-size: 0.9rem; }

        /* ✅ ACTIVE FILTERS */
        .active-filters {
            gap: 0.3rem;
            margin-top: 0.75rem;
            padding-top: 0.75rem;
        }
        .active-filters .filter-tag {
            font-size: 0.7rem;
            padding: 0.15rem 0.6rem;
        }

        /* ✅ EMPTY STATE */
        .empty-state { padding: 2rem 1rem; }
        .empty-state i { font-size: 3rem; }
        .empty-state h4 { font-size: 1.2rem; }

        /* ✅ SECTION TITLE */
        .section-title { font-size: 1rem; }
        .section-title .badge-count { font-size: 0.75rem; }
    }

    @media (max-width: 480px) {
        .page-header { padding: 1rem; }
        .page-header h1 { font-size: 1.2rem; }
        .page-header p { font-size: 0.8rem; }
        
        .mode-tab { 
            padding: 0.5rem 0.75rem; 
            font-size: 0.75rem;
        }

        .filters-container { padding: 0.75rem; }
        .filters-container .filter-item .form-select,
        .filters-container .filter-item .form-control {
            height: 40px;
            font-size: 0.85rem;
            padding: 0.4rem 0.6rem;
        }

        .filter-actions .btn {
            height: 40px;
            font-size: 0.85rem;
            padding: 0.4rem 0.75rem;
        }

        .guard-badge { font-size: 0.6rem; padding: 0.15rem 0.6rem; }
        
        .pharmacy-card .pharmacy-icon {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }
        .pharmacy-card .pharmacy-actions .btn-sm {
            font-size: 0.7rem;
            padding: 0.2rem 0.6rem;
        }

        .product-filters-container { padding: 0.75rem; }
        .product-filters-container .filter-item .form-select,
        .product-filters-container .filter-item .form-control {
            height: 40px;
            font-size: 0.85rem;
            padding: 0.4rem 0.6rem;
        }
    }
</style>
";
        yield from [];
    }

    // line 853
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 854
        yield "<div class=\"page-header\">
    <div class=\"row align-items-center\">
        <div class=\"col-md-8\">
            <h1><i class=\"fas fa-";
        // line 857
        yield (((($context["mode"] ?? null) == "pharmacy")) ? ("shield-alt") : ("box"));
        yield " me-3\"></i>
                ";
        // line 858
        yield (((($context["mode"] ?? null) == "pharmacy")) ? ("Pharmacies de garde") : ("Rechercher un produit"));
        yield "
            </h1>
            <p>";
        // line 860
        yield (((($context["mode"] ?? null) == "pharmacy")) ? ("Trouvez une pharmacie de garde près de chez vous.") : ("Recherchez un produit dans une pharmacie de garde."));
        yield "</p>
        </div>
        <div class=\"col-md-4 text-end d-none d-md-block\">
            <i class=\"fas fa-";
        // line 863
        yield (((($context["mode"] ?? null) == "pharmacy")) ? ("clock") : ("search-location"));
        yield "\" style=\"font-size: 3.5rem; opacity: 0.3;\"></i>
        </div>
    </div>
</div>

<div class=\"mode-tabs\">
    <a href=\"";
        // line 869
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy"]);
        yield "\" 
       class=\"mode-tab ";
        // line 870
        yield (((($context["mode"] ?? null) == "pharmacy")) ? ("active") : (""));
        yield "\" 
       data-mode=\"pharmacy\">
        <i class=\"fas fa-shield-alt\"></i> Pharmacies de garde
    </a>
    <a href=\"";
        // line 874
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product"]);
        yield "\" 
       class=\"mode-tab ";
        // line 875
        yield (((($context["mode"] ?? null) == "product")) ? ("active") : (""));
        yield "\" 
       data-mode=\"product\">
        <i class=\"fas fa-box\"></i> Rechercher un produit
    </a>
</div>

";
        // line 884
        yield "<div class=\"filters-container\">
    <form method=\"get\" id=\"filterForm\" class=\"filter-group\">
        <input type=\"hidden\" name=\"mode\" value=\"";
        // line 886
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mode"] ?? null), "html", null, true);
        yield "\">
        
        <div class=\"filter-item\">
            <label for=\"countrySelect\">
                <i class=\"fas fa-globe text-primary me-1\"></i> Pays
            </label>
            <select id=\"countrySelect\" class=\"form-select\">
                <option value=\"\">-- Sélectionnez un pays --</option>
            </select>
        </div>
        
        <div class=\"filter-item\">
            <label for=\"citySelect\">
                <i class=\"fas fa-city text-primary me-1\"></i> Ville
            </label>
            <select id=\"citySelect\" class=\"form-select\" disabled>
                <option value=\"\">-- Sélectionnez une ville --</option>
            </select>
        </div>

        ";
        // line 907
        yield "        ";
        if ((($context["mode"] ?? null) == "pharmacy")) {
            // line 908
            yield "        <div class=\"filter-item\">
            <label for=\"searchPharmacyInput\">
                <i class=\"fas fa-search text-primary me-1\"></i> Rechercher
            </label>
            <input type=\"text\" id=\"searchPharmacyInput\" class=\"form-control\" 
                   placeholder=\"Nom de la pharmacie...\" 
                   value=\"";
            // line 914
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : ("")), "html", null, true);
            yield "\">
        </div>
        ";
        }
        // line 917
        yield "
        <div class=\"filter-actions\">
            <button type=\"button\" id=\"applyFiltersBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-check\"></i> Appliquer
            </button>
            <button type=\"button\" id=\"clearFiltersBtn\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-eraser\"></i> Effacer
            </button>
        </div>
    </form>

    ";
        // line 929
        yield "    <div id=\"pharmacySelector\" class=\"pharmacy-select-container ";
        if (((($context["mode"] ?? null) == "product") && ($context["selectedCity"] ?? null))) {
            yield "visible";
        }
        yield "\">
        <div class=\"filter-group\" style=\"margin-top: 0;\">
            <div class=\"filter-item\" style=\"flex: 1;\">
                <label for=\"pharmacySelect\">
                    <i class=\"fas fa-store text-primary me-1\"></i> Pharmacie
                </label>
                <select id=\"pharmacySelect\" class=\"form-select\" ";
        // line 935
        if ((($tmp =  !($context["selectedCity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                    <option value=\"\">-- Sélectionnez une pharmacie --</option>
                    ";
        // line 937
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pharmacies"] ?? null)) > 0)) {
            // line 938
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pharmacies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pharmacy"]) {
                // line 939
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "id", [], "any", false, false, false, 939), "html", null, true);
                yield "\" ";
                if ((($context["selectedPharmacy"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "id", [], "any", false, false, false, 939))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 940
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "name", [], "any", false, false, false, 940), "html", null, true);
                yield "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pharmacy'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 943
            yield "                    ";
        }
        // line 944
        yield "                </select>
            </div>
        </div>
    </div>
</div>

";
        // line 953
        yield "<div id=\"resultsContainer\" class=\"mt-4\">
    ";
        // line 954
        if ((($context["mode"] ?? null) == "pharmacy")) {
            // line 955
            yield "        ";
            // line 956
            yield "        ";
            // line 957
            yield "        ";
            // line 958
            yield "        ";
            if ((($tmp = ($context["selectedPharmacyData"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 959
                yield "            ";
                // line 960
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_pharmacy_detail.html.twig", ["selectedPharmacyData" =>                 // line 961
($context["selectedPharmacyData"] ?? null), "selectedCountry" =>                 // line 962
($context["selectedCountry"] ?? null), "selectedCity" =>                 // line 963
($context["selectedCity"] ?? null), "searchPharmacy" => ((                // line 964
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]);
                // line 965
                yield "
        ";
            } elseif ((            // line 966
($context["selectedCountry"] ?? null) && ($context["selectedCity"] ?? null))) {
                // line 967
                yield "            ";
                // line 968
                yield "            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pharmacies"] ?? null)) > 0)) {
                    // line 969
                    yield "                <div class=\"section-title\">
                    <i class=\"fas fa-clock me-2\"></i>
                    Pharmacies de garde à <span class=\"text-primary\">";
                    // line 971
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCity"] ?? null), "html", null, true);
                    yield "</span>
                    <span class=\"badge-count\">
                        <i class=\"fas fa-check-circle me-1\"></i>
                        ";
                    // line 974
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPharmacies"] ?? null), "html", null, true);
                    yield " pharmacie(s) de garde
                    </span>
                </div>

                <div class=\"pharmacy-grid\">
                    ";
                    // line 979
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["pharmacies"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["pharmacy"]) {
                        // line 980
                        yield "                        <div class=\"pharmacy-card\">
                            <div class=\"d-flex gap-3 align-items-start\">
                                <div class=\"pharmacy-icon\">
                                    <i class=\"fas fa-shield-alt\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <div class=\"pharmacy-name\">";
                        // line 986
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "name", [], "any", false, false, false, 986), "html", null, true);
                        yield "</div>
                                    <div class=\"pharmacy-address\">
                                        <i class=\"fas fa-map-marker-alt\"></i> ";
                        // line 988
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "address", [], "any", false, false, false, 988), "html", null, true);
                        yield ", ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "city", [], "any", false, false, false, 988), "html", null, true);
                        yield "
                                    </div>
                                    ";
                        // line 990
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "phone", [], "any", false, false, false, 990)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 991
                            yield "                                        <div class=\"pharmacy-address\">
                                            <i class=\"fas fa-phone\"></i> ";
                            // line 992
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "phone", [], "any", false, false, false, 992), "html", null, true);
                            yield "
                                        </div>
                                    ";
                        }
                        // line 995
                        yield "                                    <div class=\"mt-2\">
                                        <span class=\"guard-badge active\">
                                            <i class=\"fas fa-clock\"></i> En garde maintenant
                                        </span>
                                        ";
                        // line 999
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "guardDays", [], "any", true, true, false, 999) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "guardDays", [], "any", false, false, false, 999)) > 0))) {
                            // line 1000
                            yield "                                            <span class=\"text-muted ms-2\" style=\"font-size: 0.75rem;\">
                                                ";
                            // line 1001
                            $context["daysList"] = [];
                            // line 1002
                            yield "                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "guardDays", [], "any", false, false, false, 1002));
                            foreach ($context['_seq'] as $context["dayKey"] => $context["dayData"]) {
                                // line 1003
                                yield "                                                    ";
                                $context["daysList"] = Twig\Extension\CoreExtension::merge(($context["daysList"] ?? null), [(((((CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "day", [], "any", false, false, false, 1003) . " (") . CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "start", [], "any", false, false, false, 1003)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "end", [], "any", false, false, false, 1003)) . ")")]);
                                // line 1004
                                yield "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['dayKey'], $context['dayData'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1005
                            yield "                                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["daysList"] ?? null), ", "), "html", null, true);
                            yield "
                                            </span>
                                        ";
                        }
                        // line 1008
                        yield "                                    </div>
                                    <div class=\"pharmacy-actions\">
                                        <a href=\"";
                        // line 1010
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 1012
($context["selectedCountry"] ?? null), "city" =>                         // line 1013
($context["selectedCity"] ?? null), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                         // line 1014
$context["pharmacy"], "id", [], "any", false, false, false, 1014), "search_pharmacy" => ((                        // line 1015
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                        // line 1016
                        yield "\" class=\"btn btn-sm btn-primary\">
                                            <i class=\"fas fa-info-circle me-1\"></i> Détails
                                        </a>
                                        <a href=\"";
                        // line 1019
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                         // line 1021
($context["selectedCountry"] ?? null), "city" =>                         // line 1022
($context["selectedCity"] ?? null), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                         // line 1023
$context["pharmacy"], "id", [], "any", false, false, false, 1023)]), "html", null, true);
                        // line 1024
                        yield "\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-box me-1\"></i> Voir produits
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['pharmacy'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1032
                    yield "                </div>

                ";
                    // line 1035
                    yield "                ";
                    if ((($context["totalPages"] ?? null) > 1)) {
                        // line 1036
                        yield "                    <div class=\"pagination-container\">
                        ";
                        // line 1037
                        if ((($context["currentPage"] ?? null) > 1)) {
                            // line 1038
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                             // line 1040
($context["selectedCountry"] ?? null), "city" =>                             // line 1041
($context["selectedCity"] ?? null), "page" => (                            // line 1042
($context["currentPage"] ?? null) - 1), "search_pharmacy" => ((                            // line 1043
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                            // line 1044
                            yield "\" class=\"page-link\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        ";
                        } else {
                            // line 1048
                            yield "                            <span class=\"page-link disabled\"><i class=\"fas fa-chevron-left\"></i></span>
                        ";
                        }
                        // line 1050
                        yield "
                        ";
                        // line 1051
                        $context["startPage"] = max(1, (($context["currentPage"] ?? null) - 2));
                        // line 1052
                        yield "                        ";
                        $context["endPage"] = min(($context["totalPages"] ?? null), (($context["currentPage"] ?? null) + 2));
                        // line 1053
                        yield "                        
                        ";
                        // line 1054
                        if ((($context["startPage"] ?? null) > 1)) {
                            // line 1055
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                             // line 1057
($context["selectedCountry"] ?? null), "city" =>                             // line 1058
($context["selectedCity"] ?? null), "page" => 1, "search_pharmacy" => ((                            // line 1060
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                            // line 1061
                            yield "\" class=\"page-link\">1</a>
                            ";
                            // line 1062
                            if ((($context["startPage"] ?? null) > 2)) {
                                // line 1063
                                yield "                                <span class=\"page-link disabled\">…</span>
                            ";
                            }
                            // line 1065
                            yield "                        ";
                        }
                        // line 1066
                        yield "
                        ";
                        // line 1067
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                            // line 1068
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                             // line 1070
($context["selectedCountry"] ?? null), "city" =>                             // line 1071
($context["selectedCity"] ?? null), "page" =>                             // line 1072
$context["page"], "search_pharmacy" => ((                            // line 1073
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                            // line 1074
                            yield "\" class=\"page-link ";
                            yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                            yield "\">
                                ";
                            // line 1075
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                            yield "
                            </a>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1078
                        yield "
                        ";
                        // line 1079
                        if ((($context["endPage"] ?? null) < ($context["totalPages"] ?? null))) {
                            // line 1080
                            yield "                            ";
                            if ((($context["endPage"] ?? null) < (($context["totalPages"] ?? null) - 1))) {
                                // line 1081
                                yield "                                <span class=\"page-link disabled\">…</span>
                            ";
                            }
                            // line 1083
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                             // line 1085
($context["selectedCountry"] ?? null), "city" =>                             // line 1086
($context["selectedCity"] ?? null), "page" =>                             // line 1087
($context["totalPages"] ?? null), "search_pharmacy" => ((                            // line 1088
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                            // line 1089
                            yield "\" class=\"page-link\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                            yield "</a>
                        ";
                        }
                        // line 1091
                        yield "
                        ";
                        // line 1092
                        if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                            // line 1093
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                             // line 1095
($context["selectedCountry"] ?? null), "city" =>                             // line 1096
($context["selectedCity"] ?? null), "page" => (                            // line 1097
($context["currentPage"] ?? null) + 1), "search_pharmacy" => ((                            // line 1098
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                            // line 1099
                            yield "\" class=\"page-link\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        ";
                        } else {
                            // line 1103
                            yield "                            <span class=\"page-link disabled\"><i class=\"fas fa-chevron-right\"></i></span>
                        ";
                        }
                        // line 1105
                        yield "
                        <span class=\"page-info\">Page ";
                        // line 1106
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
                        yield " sur ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                        yield "</span>
                    </div>
                ";
                    }
                    // line 1109
                    yield "
            ";
                } else {
                    // line 1111
                    yield "                <div class=\"empty-state\">
                    <i class=\"fas fa-clock\" style=\"color: #f59e0b;\"></i>
                    <h4>Aucune pharmacie de garde trouvée</h4>
                    <p class=\"text-muted\">
                        ";
                    // line 1115
                    if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1116
                        yield "                            Aucune pharmacie de garde ne correspond à \"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchPharmacy"] ?? null), "html", null, true);
                        yield "\" dans cette ville.
                        ";
                    } else {
                        // line 1118
                        yield "                            Aucune pharmacie de garde disponible dans cette ville pour le moment.
                        ";
                    }
                    // line 1120
                    yield "                    </p>
                    <div class=\"mt-3\">
                        <small class=\"text-muted d-block mb-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Les pharmacies de garde sont affichées automatiquement en fonction de l'heure actuelle.
                        </small>
                        ";
                    // line 1126
                    if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1127
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 1129
($context["selectedCountry"] ?? null), "city" =>                         // line 1130
($context["selectedCity"] ?? null)]), "html", null, true);
                        // line 1131
                        yield "\" class=\"btn btn-primary mt-2\">
                                <i class=\"fas fa-undo me-1\"></i> Voir toutes les pharmacies de garde
                            </a>
                        ";
                    } else {
                        // line 1135
                        yield "                            <a href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy"]);
                        yield "\" class=\"btn btn-primary mt-2\">
                                <i class=\"fas fa-undo me-1\"></i> Nouvelle recherche
                            </a>
                        ";
                    }
                    // line 1139
                    yield "                    </div>
                </div>
            ";
                }
                // line 1142
                yield "
        ";
            } else {
                // line 1144
                yield "            <div class=\"empty-state\">
                <i class=\"fas fa-search-location\"></i>
                <h4>Sélectionnez un pays et une ville</h4>
                <p class=\"text-muted\">Choisissez un pays puis une ville pour voir les pharmacies de garde disponibles.</p>
            </div>
        ";
            }
            // line 1150
            yield "
    ";
        } else {
            // line 1152
            yield "        ";
            // line 1153
            yield "        ";
            // line 1154
            yield "        ";
            // line 1155
            yield "        ";
            if ((($tmp = ($context["selectedPharmacyData"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1156
                yield "            ";
                // line 1157
                yield "            <div class=\"pharmacy-selected-info\">
                <div class=\"d-flex align-items-center gap-3\">
                    <i class=\"fas fa-store\" style=\"font-size: 1.5rem; color: var(--primary-color);\"></i>
                    <div>
                        <span class=\"pharmacy-name\">
                            <i class=\"fas fa-hospital me-1\"></i>
                            ";
                // line 1163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "companyName", [], "any", false, false, false, 1163), "html", null, true);
                yield "
                        </span>
                        <span class=\"text-muted ms-2\">- ";
                // line 1165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "city", [], "any", false, false, false, 1165), "html", null, true);
                yield "</span>
                        
                        ";
                // line 1168
                yield "                        ";
                $context["guardPeriods"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "guardPeriods", [], "any", true, true, false, 1168)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "guardPeriods", [], "any", false, false, false, 1168), [])) : ([]));
                // line 1169
                yield "                        ";
                if ((is_iterable(($context["guardPeriods"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["guardPeriods"] ?? null)) > 0))) {
                    // line 1170
                    yield "                            ";
                    $context["isOnGuard"] = false;
                    // line 1171
                    yield "                            ";
                    $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                    // line 1172
                    yield "                            ";
                    $context["currentDay"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["now"] ?? null), "l"));
                    // line 1173
                    yield "                            ";
                    $context["currentTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["now"] ?? null), "H:i");
                    // line 1174
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["guardPeriods"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 1175
                        yield "                                ";
                        if ((((((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", true, true, false, 1175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1175), "")) : ("")) == ($context["currentDay"] ?? null)) && (((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", true, true, false, 1175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", false, false, false, 1175), "")) : ("")) <= ($context["currentTime"] ?? null))) && (((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", true, true, false, 1175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", false, false, false, 1175), "")) : ("")) >= ($context["currentTime"] ?? null)))) {
                            // line 1176
                            yield "                                    ";
                            $context["isOnGuard"] = true;
                            // line 1177
                            yield "                                ";
                        }
                        // line 1178
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['period'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1179
                    yield "                            <span class=\"guard-badge ";
                    yield (((($tmp = ($context["isOnGuard"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                    yield " ms-2\" style=\"";
                    yield (((($tmp = ($context["isOnGuard"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("background:#dcfce7;color:#16a34a;") : ("background:#fee2e2;color:#dc2626;"));
                    yield "\">
                                <i class=\"fas fa-clock\"></i> 
                                ";
                    // line 1181
                    yield (((($tmp = ($context["isOnGuard"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("En garde") : ("Pas de garde"));
                    yield "
                            </span>
                        ";
                } else {
                    // line 1184
                    yield "                            ";
                    // line 1185
                    yield "                            <span class=\"guard-badge inactive ms-2\" style=\"background:#fee2e2;color:#dc2626;\">
                                <i class=\"fas fa-clock\"></i> 
                                Pas de garde
                            </span>
                        ";
                }
                // line 1190
                yield "                    </div>
                </div>
                <a href=\"";
                // line 1192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 1194
($context["selectedCountry"] ?? null), "city" =>                 // line 1195
($context["selectedCity"] ?? null)]), "html", null, true);
                // line 1196
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                    <i class=\"fas fa-undo\"></i> Changer de pharmacie
                </a>
            </div>

            ";
                // line 1202
                yield "            <div class=\"product-filters-container\">
                <form method=\"get\" id=\"productFilterForm\" class=\"filter-group\">
                    <input type=\"hidden\" name=\"mode\" value=\"product\">
                    <input type=\"hidden\" name=\"country\" value=\"";
                // line 1205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCountry"] ?? null), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"city\" value=\"";
                // line 1206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCity"] ?? null), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"pharmacy\" value=\"";
                // line 1207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedPharmacy"] ?? null), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"filter_applied\" value=\"1\">

                    <div class=\"filter-item\">
                        <label for=\"categorySelect\"><i class=\"fas fa-tags text-primary me-1\"></i> Catégorie</label>
                        <select name=\"category\" id=\"categorySelect\" class=\"form-select\">
                            <option value=\"\">Toutes les catégories</option>
                            ";
                // line 1214
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) > 0)) {
                    // line 1215
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 1216
                        yield "                                    <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1216), "html", null, true);
                        yield "\" ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1216) == ($context["selectedCategory"] ?? null))) {
                            yield "selected";
                        }
                        yield ">
                                        ";
                        // line 1217
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 1217)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            yield "&nbsp;&nbsp;";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1218
                        yield "                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 1218) > 0)) {
                            yield "↳";
                        }
                        // line 1219
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1219), "html", null, true);
                        yield "
                                        <span class=\"text-muted\">(";
                        // line 1220
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 1220), "html", null, true);
                        yield ")</span>
                                    </option>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1223
                    yield "                            ";
                }
                // line 1224
                yield "                        </select>
                    </div>

                    <div class=\"filter-item\">
                        <label for=\"formSelect\"><i class=\"fas fa-capsules text-primary me-1\"></i> Forme</label>
                        <select name=\"form\" id=\"formSelect\" class=\"form-select\">
                            <option value=\"\">Toutes les formes</option>
                            ";
                // line 1231
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("forms", $context)) ? (Twig\Extension\CoreExtension::default(($context["forms"] ?? null), [])) : ([]))) > 0)) {
                    // line 1232
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["forms"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                        // line 1233
                        yield "                                    <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form"], "html", null, true);
                        yield "\" ";
                        if ((($context["selectedForm"] ?? null) == $context["form"])) {
                            yield "selected";
                        }
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form"], "html", null, true);
                        yield "</option>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['form'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1235
                    yield "                            ";
                }
                // line 1236
                yield "                        </select>
                    </div>

                    <div class=\"filter-item\">
                        <label for=\"dosageInput\"><i class=\"fas fa-weight text-primary me-1\"></i> Dosage</label>
                        <input type=\"text\" name=\"dosage\" id=\"dosageInput\" class=\"form-control\" 
                               placeholder=\"ex: 500mg, 10ml...\" value=\"";
                // line 1242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("selectedDosage", $context)) ? (Twig\Extension\CoreExtension::default(($context["selectedDosage"] ?? null), "")) : ("")), "html", null, true);
                yield "\">
                    </div>

                    <div class=\"filter-item\" style=\"min-width: 150px; flex: 0.5;\">
                        <div class=\"prescription-check\">
                            <input type=\"checkbox\" name=\"prescription_required\" id=\"prescriptionCheck\" 
                                   value=\"1\" ";
                // line 1248
                yield (((($context["prescriptionRequired"] ?? null) == "1")) ? ("checked") : (""));
                yield ">
                            <label for=\"prescriptionCheck\">
                                <i class=\"fas fa-prescription-bottle\"></i> Ordonnance
                            </label>
                        </div>
                    </div>

                    <div class=\"filter-actions\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-filter\"></i> Filtrer
                        </button>
                        <a href=\"";
                // line 1259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 1261
($context["selectedCountry"] ?? null), "city" =>                 // line 1262
($context["selectedCity"] ?? null), "pharmacy" =>                 // line 1263
($context["selectedPharmacy"] ?? null)]), "html", null, true);
                // line 1264
                yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-eraser\"></i> Effacer
                        </a>
                    </div>
                </form>

                <div class=\"filter-status\">
                    ";
                // line 1271
                if ((($tmp = ((array_key_exists("filterApplied", $context)) ? (Twig\Extension\CoreExtension::default(($context["filterApplied"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1272
                    yield "                        <span class=\"applied\"><i class=\"fas fa-check-circle\"></i> Filtres appliqués</span>
                    ";
                } else {
                    // line 1274
                    yield "                        <span><i class=\"fas fa-info-circle\"></i> Tous les produits sont affichés</span>
                    ";
                }
                // line 1276
                yield "                </div>

                ";
                // line 1278
                $context["hasActiveFilters"] = (((($context["selectedCategory"] ?? null) || ($context["selectedForm"] ?? null)) || ($context["selectedDosage"] ?? null)) ||  !(null === ($context["prescriptionRequired"] ?? null)));
                // line 1279
                yield "                ";
                if ((($tmp = ($context["hasActiveFilters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1280
                    yield "                    <div class=\"active-filters\">
                        <span class=\"text-muted\" style=\"font-size: 0.85rem; font-weight: 500;\">Filtres actifs :</span>
                        ";
                    // line 1282
                    if ((($tmp = ($context["selectedCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1283
                        yield "                            ";
                        $context["categoryName"] = "";
                        // line 1284
                        yield "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                            // line 1285
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 1285) == ($context["selectedCategory"] ?? null))) {
                                $context["categoryName"] = CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 1285);
                            }
                            // line 1286
                            yield "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1287
                        yield "                            <span class=\"filter-tag\">
                                <i class=\"fas fa-tag\"></i> ";
                        // line 1288
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["categoryName"] ?? null), "html", null, true);
                        yield "
                                <a href=\"";
                        // line 1289
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                         // line 1291
($context["selectedCountry"] ?? null), "city" =>                         // line 1292
($context["selectedCity"] ?? null), "pharmacy" =>                         // line 1293
($context["selectedPharmacy"] ?? null), "form" =>                         // line 1294
($context["selectedForm"] ?? null), "dosage" =>                         // line 1295
($context["selectedDosage"] ?? null), "prescription_required" =>                         // line 1296
($context["prescriptionRequired"] ?? null), "filter_applied" => 1]), "html", null, true);
                        // line 1298
                        yield "\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        ";
                    }
                    // line 1301
                    yield "                        ";
                    if ((($tmp = ($context["selectedForm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1302
                        yield "                            <span class=\"filter-tag\">
                                <i class=\"fas fa-capsules\"></i> ";
                        // line 1303
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedForm"] ?? null), "html", null, true);
                        yield "
                                <a href=\"";
                        // line 1304
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                         // line 1306
($context["selectedCountry"] ?? null), "city" =>                         // line 1307
($context["selectedCity"] ?? null), "pharmacy" =>                         // line 1308
($context["selectedPharmacy"] ?? null), "category" =>                         // line 1309
($context["selectedCategory"] ?? null), "dosage" =>                         // line 1310
($context["selectedDosage"] ?? null), "prescription_required" =>                         // line 1311
($context["prescriptionRequired"] ?? null), "filter_applied" => 1]), "html", null, true);
                        // line 1313
                        yield "\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        ";
                    }
                    // line 1316
                    yield "                        ";
                    if ((($tmp = ($context["selectedDosage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1317
                        yield "                            <span class=\"filter-tag\">
                                <i class=\"fas fa-weight\"></i> ";
                        // line 1318
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedDosage"] ?? null), "html", null, true);
                        yield "
                                <a href=\"";
                        // line 1319
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                         // line 1321
($context["selectedCountry"] ?? null), "city" =>                         // line 1322
($context["selectedCity"] ?? null), "pharmacy" =>                         // line 1323
($context["selectedPharmacy"] ?? null), "category" =>                         // line 1324
($context["selectedCategory"] ?? null), "form" =>                         // line 1325
($context["selectedForm"] ?? null), "prescription_required" =>                         // line 1326
($context["prescriptionRequired"] ?? null), "filter_applied" => 1]), "html", null, true);
                        // line 1328
                        yield "\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        ";
                    }
                    // line 1331
                    yield "                        ";
                    if ((($context["prescriptionRequired"] ?? null) == "1")) {
                        // line 1332
                        yield "                            <span class=\"filter-tag\">
                                <i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise
                                <a href=\"";
                        // line 1334
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                         // line 1336
($context["selectedCountry"] ?? null), "city" =>                         // line 1337
($context["selectedCity"] ?? null), "pharmacy" =>                         // line 1338
($context["selectedPharmacy"] ?? null), "category" =>                         // line 1339
($context["selectedCategory"] ?? null), "form" =>                         // line 1340
($context["selectedForm"] ?? null), "dosage" =>                         // line 1341
($context["selectedDosage"] ?? null), "filter_applied" => 1]), "html", null, true);
                        // line 1343
                        yield "\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        ";
                    }
                    // line 1346
                    yield "                    </div>
                ";
                }
                // line 1348
                yield "            </div>

            ";
                // line 1351
                yield "            <div class=\"product-select-container\">
                <label class=\"form-label fw-semibold\">
                    <i class=\"fas fa-box text-primary me-1\"></i> Produits disponibles
                    <span class=\"badge bg-primary ms-2\">";
                // line 1354
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)), "html", null, true);
                yield "</span>
                </label>
                
                ";
                // line 1357
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) > 0)) {
                    // line 1358
                    yield "                    <select id=\"productSelect\" class=\"form-control\">
                        <option value=\"\">-- Sélectionnez un produit --</option>
                        ";
                    // line 1360
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 1361
                        yield "                            <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 1361), "html", null, true);
                        yield "\" 
                                    data-name=\"";
                        // line 1362
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 1362), "html", null, true);
                        yield "\"
                                    data-category=\"";
                        // line 1363
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 1363)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 1363), "name", [], "any", false, false, false, 1363), "html", null, true)) : ("Non catégorisé"));
                        yield "\"
                                    data-price=\"";
                        // line 1364
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 1364), 0, ",", " "), "html", null, true);
                        yield " FCFA\"
                                    data-stock=\"";
                        // line 1365
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", true, true, false, 1365)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 1365), 0)) : (0)), "html", null, true);
                        yield "\"
                                    data-prescription=\"";
                        // line 1366
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prescriptionRequired", [], "any", false, false, false, 1366)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                        yield "\"
                                    data-form=\"";
                        // line 1367
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", true, true, false, 1367)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 1367), "")) : ("")), "html", null, true);
                        yield "\"
                                    data-dosage=\"";
                        // line 1368
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", true, true, false, 1368)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 1368), "")) : ("")), "html", null, true);
                        yield "\"
                                    data-unit=\"";
                        // line 1369
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 1369)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 1369), "")) : ("")), "html", null, true);
                        yield "\"
                                    data-description=\"";
                        // line 1370
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", true, true, false, 1370)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 1370), "")) : ("")), "html", null, true);
                        yield "\"
                                    data-barcode=\"";
                        // line 1371
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", true, true, false, 1371)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 1371), "")) : ("")), "html", null, true);
                        yield "\">
                                ";
                        // line 1372
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 1372), "html", null, true);
                        yield " 
                                ";
                        // line 1373
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 1373)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " - ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 1373), "html", null, true);
                        }
                        // line 1374
                        yield "                                ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 1374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " (";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 1374), "html", null, true);
                            yield ")";
                        }
                        // line 1375
                        yield "                            </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1377
                    yield "                    </select>
                ";
                } else {
                    // line 1379
                    yield "                    <div class=\"text-center py-4\">
                        <i class=\"fas fa-box-open\" style=\"font-size: 2rem; color: var(--gray-300); display: block; margin-bottom: 0.5rem;\"></i>
                        <p class=\"text-muted\">Aucun produit disponible dans cette pharmacie.</p>
                    </div>
                ";
                }
                // line 1384
                yield "            </div>

        ";
            } elseif ((            // line 1386
($context["selectedCountry"] ?? null) && ($context["selectedCity"] ?? null))) {
                // line 1387
                yield "            <div class=\"empty-state\">
                <i class=\"fas fa-store\"></i>
                <h4>Sélectionnez une pharmacie</h4>
                <p class=\"text-muted\">Pour rechercher des produits, veuillez sélectionner une pharmacie dans la liste ci-dessus.</p>
                <a href=\"";
                // line 1391
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" => ($context["selectedCountry"] ?? null), "city" => ($context["selectedCity"] ?? null)]), "html", null, true);
                yield "\" class=\"btn btn-primary mt-3\">
                    <i class=\"fas fa-undo me-1\"></i> Actualiser
                </a>
            </div>
        ";
            } else {
                // line 1396
                yield "            <div class=\"empty-state\">
                <i class=\"fas fa-search-location\"></i>
                <h4>Sélectionnez un pays et une ville</h4>
                <p class=\"text-muted\">Pour rechercher des produits, veuillez d'abord sélectionner un pays, une ville, puis une pharmacie.</p>
            </div>
        ";
            }
            // line 1402
            yield "    ";
        }
        // line 1403
        yield "</div>

<!-- Modal Détail Produit -->
<div class=\"modal fade\" id=\"productDetailModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"productDetailTitle\">Détail du produit</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"productDetailBody\">
                <div class=\"text-center py-4\"><i class=\"fas fa-spinner fa-spin fa-2x text-primary\"></i></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 1424
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1425
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

<script>
\$(document).ready(function() {
    let currentMode = '";
        // line 1432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mode"] ?? null), "html", null, true);
        yield "';
    let selectedCountry = '";
        // line 1433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCountry"] ?? null), "html", null, true);
        yield "';
    let selectedCity = '";
        // line 1434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCity"] ?? null), "html", null, true);
        yield "';
    let selectedPharmacy = '";
        // line 1435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedPharmacy"] ?? null), "html", null, true);
        yield "';

    console.log('=== 🚀 INITIALISATION ===');
    console.log('Mode:', currentMode);
    console.log('Pays sélectionné:', selectedCountry);
    console.log('Ville sélectionnée:', selectedCity);
    console.log('Pharmacie sélectionnée:', selectedPharmacy);

    // ============================================================ //
    // 1. INITIALISATION SELECT2                                     //
    // ============================================================ //
    function initSelect2(selector) {
        const \$select = \$(selector);
        if (!\$select.length || typeof \$.fn.select2 === 'undefined') {
            console.warn('⚠️ Select2 non disponible ou sélecteur non trouvé:', selector);
            return;
        }
        if (\$select.data('select2')) {
            \$select.select2('destroy');
            console.log('🔄 Select2 détruit pour:', selector);
        }
        
        \$select.select2({
            theme: 'default',
            width: '100%',
            placeholder: \$select.find('option:first').text() || '-- Sélectionnez --',
            allowClear: true,
            language: 'fr'
        });
        
        setTimeout(function() {
            const container = \$select.next('.select2-container');
            if (container.length) {
                container.css({
                    'display': 'block',
                    'width': '100%',
                    'visibility': 'visible',
                    'opacity': '1'
                });
            }
        }, 50);
        
        console.log('✅ Select2 initialisé pour:', selector);
    }

    // ============================================================ //
    // 2. CHARGER LES PAYS                                          //
    // ============================================================ //
    function loadCountries() {
        console.log('🌍 Chargement des pays...');
        \$.ajax({
            url: '/marketplace/pharmacies/api/countries',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                const select = \$('#countrySelect');
                select.empty().append('<option value=\"\">-- Sélectionnez un pays --</option>');
                data.forEach(function(country) {
                    select.append(`<option value=\"\${country.code}\" \${selectedCountry === country.code ? 'selected' : ''}>\${country.name}</option>`);
                });
                initSelect2('#countrySelect');
                if (selectedCountry) {
                    select.val(selectedCountry).trigger('change');
                    console.log('✅ Pays sélectionné:', selectedCountry);
                }
                console.log('✅ Pays chargés:', data.length);
            },
            error: function(xhr, status, error) {
                console.error('❌ Erreur lors du chargement des pays:', error);
            }
        });
    }

    // ============================================================ //
    // 3. CHARGER LES VILLES                                        //
    // ============================================================ //
    function loadCities(country) {
        console.log('🏙️ Chargement des villes pour:', country);
        const select = \$('#citySelect');
        select.prop('disabled', true).empty().append('<option value=\"\">Chargement...</option>');

        \$.ajax({
            url: `/marketplace/pharmacies/api/cities?country=\${country}`,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                select.empty().append('<option value=\"\">-- Sélectionnez une ville --</option>');
                if (data && data.length > 0) {
                    data.forEach(function(city) {
                        select.append(`<option value=\"\${city}\" \${selectedCity === city ? 'selected' : ''}>\${city}</option>`);
                    });
                    select.prop('disabled', false);
                    console.log('✅ Villes chargées:', data.length);
                } else {
                    select.append('<option value=\"\">Aucune ville trouvée</option>');
                    select.prop('disabled', true);
                }
                initSelect2('#citySelect');
                if (selectedCity) {
                    select.val(selectedCity).trigger('change');
                    console.log('✅ Ville sélectionnée:', selectedCity);
                }
            },
            error: function(xhr, status, error) {
                console.error('❌ Erreur lors du chargement des villes:', error);
                select.empty().append('<option value=\"\">Erreur de chargement</option>');
                select.prop('disabled', true);
                initSelect2('#citySelect');
            }
        });
    }

    // ============================================================ //
    // 4. CHARGER LES PHARMACIES (MODE PRODUIT)                     //
    // ============================================================ //
    function loadPharmacies(city) {
        console.log('🏪 Chargement des pharmacies pour:', city);
        const select = \$('#pharmacySelect');
        const container = \$('#pharmacySelector');
        
        if (currentMode === 'product' && city) {
            container.addClass('visible').show();
            select.prop('disabled', true).empty().append('<option value=\"\">Chargement des pharmacies...</option>');

            \$.ajax({
                url: `/marketplace/pharmacies/api/pharmacies?city=\${city}`,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    select.empty().append('<option value=\"\">-- Sélectionnez une pharmacie --</option>');
                    if (data && data.length > 0) {
                        data.forEach(function(pharmacy) {
                            const selected = selectedPharmacy == pharmacy.id ? 'selected' : '';
                            select.append(`<option value=\"\${pharmacy.id}\" \${selected}>\${pharmacy.name}</option>`);
                        });
                        select.prop('disabled', false);
                        console.log('✅ Pharmacies chargées:', data.length);
                    } else {
                        select.append('<option value=\"\">Aucune pharmacie trouvée</option>');
                        select.prop('disabled', true);
                        console.log('⚠️ Aucune pharmacie trouvée pour cette ville');
                    }
                    
                    // ✅ Réinitialiser Select2 APRÈS avoir rempli les options
                    setTimeout(function() {
                        initSelect2('#pharmacySelect');
                        // Si une pharmacie est pré-sélectionnée
                        if (selectedPharmacy) {
                            \$('#pharmacySelect').val(selectedPharmacy).trigger('change');
                            console.log('✅ Pharmacie pré-sélectionnée:', selectedPharmacy);
                        }
                    }, 200);
                },
                error: function(xhr, status, error) {
                    console.error('❌ Erreur lors du chargement des pharmacies:', error);
                    select.empty().append('<option value=\"\">Erreur de chargement</option>');
                    select.prop('disabled', true);
                    initSelect2('#pharmacySelect');
                }
            });
        } else {
            container.removeClass('visible').hide();
            select.empty().append('<option value=\"\">-- Sélectionnez une ville d\\'abord --</option>');
            select.prop('disabled', true);
            initSelect2('#pharmacySelect');
            console.log('ℹ️ Mode non product ou pas de ville');
        }
    }

    // ============================================================ //
    // 5. APPLIQUER LES FILTRES                                     //
    // ============================================================ //
    function applyFilters() {
        const country = \$('#countrySelect').val();
        const city = \$('#citySelect').val();
        const pharmacy = \$('#pharmacySelect').val();
        
        console.log('🔍 Application des filtres:', { country, city, pharmacy });
        
        let params = {
            mode: currentMode,
            country: country || '',
            city: city || '',
            pharmacy: pharmacy || ''
        };
        
        const searchPharmacy = \$('#searchPharmacyInput').val();
        if (searchPharmacy) {
            params.search_pharmacy = searchPharmacy;
        }
        
        redirectTo(params);
    }

    function clearFilters() {
        console.log('🧹 Effacement des filtres');
        \$('#countrySelect').val('').trigger('change');
        \$('#citySelect').val('').prop('disabled', true).trigger('change');
        \$('#pharmacySelect').val('').prop('disabled', true).trigger('change');
        \$('#searchPharmacyInput').val('');
        \$('#pharmacySelector').removeClass('visible').hide();
        
        initSelect2('#countrySelect');
        initSelect2('#citySelect');
        initSelect2('#pharmacySelect');
        
        redirectTo({ mode: currentMode, country: '', city: '', pharmacy: '' });
    }

    function redirectTo(params) {
        const url = new URL(window.location.href);
        Object.keys(params).forEach(key => {
            if (params[key] && params[key] !== '') {
                url.searchParams.set(key, params[key]);
            } else {
                url.searchParams.delete(key);
            }
        });
        console.log('🔄 Redirection vers:', url.toString());
        window.location.href = url.toString();
    }

    // ============================================================ //
    // 6. ÉVÉNEMENTS                                                //
    // ============================================================ //
    \$('#countrySelect').on('change', function() {
        const country = this.value;
        console.log('🌍 Pays sélectionné:', country);
        if (country) {
            loadCities(country);
        } else {
            \$('#citySelect').empty().append('<option value=\"\">-- Sélectionnez une ville --</option>').prop('disabled', true);
            \$('#pharmacySelect').empty().append('<option value=\"\">-- Sélectionnez une ville d\\'abord --</option>').prop('disabled', true);
            \$('#pharmacySelector').removeClass('visible').hide();
            initSelect2('#citySelect');
            initSelect2('#pharmacySelect');
        }
    });

    \$('#citySelect').on('change', function() {
        const city = this.value;
        console.log('🏙️ Ville sélectionnée:', city);
        console.log('📌 Mode actuel:', currentMode);
        
        if (city && currentMode === 'product') {
            loadPharmacies(city);
        } else {
            \$('#pharmacySelect').empty().append('<option value=\"\">-- Sélectionnez une ville d\\'abord --</option>').prop('disabled', true);
            \$('#pharmacySelector').removeClass('visible').hide();
            initSelect2('#pharmacySelect');
        }
    });

    // ✅ Événement sur le sélecteur de pharmacie
    \$('#pharmacySelect').on('change', function() {
        const pharmacyId = this.value;
        console.log('🏪 Pharmacie sélectionnée:', pharmacyId);
        if (pharmacyId) {
            applyFilters();
        }
    });

    \$('#applyFiltersBtn').on('click', function(e) {
        e.preventDefault();
        applyFilters();
    });

    \$('#clearFiltersBtn').on('click', function(e) {
        e.preventDefault();
        clearFilters();
    });

    \$('#searchPharmacyInput').on('keypress', function(e) {
        if (e.which === 13) {
            e.preventDefault();
            applyFilters();
        }
    });

    // ============================================================ //
    // 7. PRODUIT SELECT2 INIT                                      //
    // ============================================================ //
    ";
        // line 1717
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) > 0)) {
            // line 1718
            yield "    const productSelect = document.getElementById('productSelect');
    if (productSelect && typeof \$ !== 'undefined' && typeof \$.fn.select2 !== 'undefined') {
        console.log('📦 Initialisation du select2 produit avec', ";
            // line 1720
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)), "html", null, true);
            yield ", 'produits');
        
        \$(productSelect).select2({
            theme: 'default',
            width: '100%',
            placeholder: '-- Sélectionnez un produit --',
            allowClear: true,
            language: 'fr',
            templateResult: function(option) {
                if (!option.id) return option.text;
                const el = option.element;
                if (!el) return option.text;
                
                const name = el.getAttribute('data-name') || option.text;
                const price = el.getAttribute('data-price') || 'Prix non défini';
                const prescription = el.getAttribute('data-prescription') === 'true';
                const form = el.getAttribute('data-form') || '';
                const dosage = el.getAttribute('data-dosage') || '';
                
                let meta = [];
                if (form) meta.push(form);
                if (dosage) meta.push(dosage);
                
                return \$(`
                    <div class=\"product-info\">
                        <div>
                            <span class=\"product-name\">\${name}</span>
                            \${meta.length > 0 ? `<span class=\"product-meta\" style=\"font-size:0.75rem;color:#94a3b8;margin-left:0.5rem;\">\${meta.join(' · ')}</span>` : ''}
                            \${prescription ? `<span class=\"prescription-badge\" style=\"font-size:0.65rem;padding:0.1rem 0.5rem;border-radius:50px;background:#fef3c7;color:#92400e;margin-left:0.5rem;\"><i class=\"fas fa-prescription-bottle\"></i> Ordonnance</span>` : ''}
                        </div>
                        <span class=\"product-price\">\${price}</span>
                    </div>
                `);
            },
            templateSelection: function(option) {
                if (!option.id) return option.text;
                const el = option.element;
                if (!el) return option.text;
                
                const name = el.getAttribute('data-name') || option.text;
                const price = el.getAttribute('data-price') || '';
                const prescription = el.getAttribute('data-prescription') === 'true';
                
                return \$(`
                    <div class=\"d-flex justify-content-between align-items-center w-100\">
                        <span><i class=\"fas fa-box me-2 text-primary\"></i> \${name}\${prescription ? ' <span class=\"badge bg-warning ms-1\"><i class=\"fas fa-prescription-bottle\"></i></span>' : ''}</span>
                        <span class=\"text-primary fw-bold\">\${price}</span>
                    </div>
                `);
            }
        });
        
        console.log('✅ Product Select2 initialisé');
        
        \$(productSelect).on('select2:select', function(e) {
            const data = e.params.data;
            if (data && data.element) {
                console.log('🖱️ Produit sélectionné:', data.text);
                
                const body = document.getElementById('productDetailBody');
                const title = document.getElementById('productDetailTitle');
                if (!body || !title) return;
                
                const product = {
                    id: data.element.value,
                    name: data.element.getAttribute('data-name') || data.text,
                    category: data.element.getAttribute('data-category') || 'Non catégorisé',
                    price: data.element.getAttribute('data-price') || 'Prix non défini',
                    stock: parseInt(data.element.getAttribute('data-stock') || 0),
                    prescription: data.element.getAttribute('data-prescription') === 'true',
                    form: data.element.getAttribute('data-form') || '',
                    dosage: data.element.getAttribute('data-dosage') || '',
                    unit: data.element.getAttribute('data-unit') || '',
                    description: data.element.getAttribute('data-description') || '',
                    barcode: data.element.getAttribute('data-barcode') || ''
                };
                
                title.textContent = product.name || 'Détail du produit';
                const isInStock = product.stock > 0;
                
                body.innerHTML = `
                    <div class=\"container-fluid p-0\">
                        <div class=\"row\">
                            <div class=\"col-md-7\">
                                <div class=\"mb-3\">
                                    <h6 class=\"text-muted\"><i class=\"fas fa-tag me-1\"></i> Catégorie</h6>
                                    <p class=\"mb-0\">\${product.category || 'Non catégorisé'}</p>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"mb-3\">
                                            <h6 class=\"text-muted\"><i class=\"fas fa-capsules me-1\"></i> Forme</h6>
                                            <p class=\"mb-0\">\${product.form || 'Non spécifiée'}</p>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"mb-3\">
                                            <h6 class=\"text-muted\"><i class=\"fas fa-weight me-1\"></i> Dosage</h6>
                                            <p class=\"mb-0\">\${product.dosage || 'Non spécifié'}</p>
                                        </div>
                                    </div>
                                </div>
                                \${product.unit ? `<div class=\"mb-3\"><h6 class=\"text-muted\"><i class=\"fas fa-ruler me-1\"></i> Unité</h6><p class=\"mb-0\">\${product.unit}</p></div>` : ''}
                                \${product.description ? `<div class=\"mb-3\"><h6 class=\"text-muted\"><i class=\"fas fa-align-left me-1\"></i> Description</h6><p class=\"mb-0\">\${product.description}</p></div>` : ''}
                                \${product.barcode ? `<div class=\"mb-3\"><h6 class=\"text-muted\"><i class=\"fas fa-barcode me-1\"></i> Code-barres</h6><p class=\"mb-0\" style=\"font-family:monospace;\">\${product.barcode}</p></div>` : ''}
                            </div>
                            <div class=\"col-md-5\">
                                <div class=\"card bg-light p-3\">
                                    <div class=\"mb-3\">
                                        <h6 class=\"text-muted\">Prix</h6>
                                        <p class=\"h3 text-primary mb-0\">\${product.price}</p>
                                    </div>
                                    <div class=\"mb-3\">
                                        <h6 class=\"text-muted\">Disponibilité</h6>
                                        <span class=\"product-status \${isInStock ? 'in-stock' : 'out-of-stock'}\">
                                            <i class=\"fas \${isInStock ? 'fa-check-circle' : 'fa-times-circle'}\"></i>
                                            \${isInStock ? `Disponible\${product.stock > 0 ? ` (\${product.stock} en stock)` : ''}` : 'Non disponible'}
                                        </span>
                                    </div>
                                    \${product.prescription ? `
                                        <div>
                                            <h6 class=\"text-muted\">Prescription</h6>
                                            <span class=\"prescription-badge\"><i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise</span>
                                        </div>
                                    ` : ''}
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                
                new bootstrap.Modal(document.getElementById('productDetailModal')).show();
            }
        });
    }
    ";
        }
        // line 1856
        yield "
    // ============================================================ //
    // 8. INITIALISATION                                            //
    // ============================================================ //
    initSelect2('#countrySelect');
    initSelect2('#citySelect');
    initSelect2('#pharmacySelect');
    loadCountries();

    if (currentMode === 'product' && selectedCity) {
        console.log('🔄 Mode product avec ville pré-sélectionnée:', selectedCity);
        \$('#pharmacySelector').addClass('visible').show();
        if (!selectedPharmacy) {
            loadPharmacies(selectedCity);
        } else {
            // Si une pharmacie est déjà sélectionnée, on la met en valeur
            setTimeout(function() {
                \$('#pharmacySelect').val(selectedPharmacy).trigger('change');
                console.log('✅ Pharmacie pré-sélectionnée:', selectedPharmacy);
            }, 600);
        }
    } else {
        \$('#pharmacySelector').removeClass('visible').hide();
        console.log('ℹ️ Mode pharmacy ou pas de ville sélectionnée');
    }

    console.log('=== ✅ INITIALISATION TERMINÉE ===');
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
        return "marketplace/pharmacy/search.html.twig";
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
        return array (  2471 => 1856,  2332 => 1720,  2328 => 1718,  2326 => 1717,  2041 => 1435,  2037 => 1434,  2033 => 1433,  2029 => 1432,  2019 => 1425,  2012 => 1424,  1988 => 1403,  1985 => 1402,  1977 => 1396,  1969 => 1391,  1963 => 1387,  1961 => 1386,  1957 => 1384,  1950 => 1379,  1946 => 1377,  1939 => 1375,  1932 => 1374,  1927 => 1373,  1923 => 1372,  1919 => 1371,  1915 => 1370,  1911 => 1369,  1907 => 1368,  1903 => 1367,  1899 => 1366,  1895 => 1365,  1891 => 1364,  1887 => 1363,  1883 => 1362,  1878 => 1361,  1874 => 1360,  1870 => 1358,  1868 => 1357,  1862 => 1354,  1857 => 1351,  1853 => 1348,  1849 => 1346,  1844 => 1343,  1842 => 1341,  1841 => 1340,  1840 => 1339,  1839 => 1338,  1838 => 1337,  1837 => 1336,  1836 => 1334,  1832 => 1332,  1829 => 1331,  1824 => 1328,  1822 => 1326,  1821 => 1325,  1820 => 1324,  1819 => 1323,  1818 => 1322,  1817 => 1321,  1816 => 1319,  1812 => 1318,  1809 => 1317,  1806 => 1316,  1801 => 1313,  1799 => 1311,  1798 => 1310,  1797 => 1309,  1796 => 1308,  1795 => 1307,  1794 => 1306,  1793 => 1304,  1789 => 1303,  1786 => 1302,  1783 => 1301,  1778 => 1298,  1776 => 1296,  1775 => 1295,  1774 => 1294,  1773 => 1293,  1772 => 1292,  1771 => 1291,  1770 => 1289,  1766 => 1288,  1763 => 1287,  1757 => 1286,  1752 => 1285,  1747 => 1284,  1744 => 1283,  1742 => 1282,  1738 => 1280,  1735 => 1279,  1733 => 1278,  1729 => 1276,  1725 => 1274,  1721 => 1272,  1719 => 1271,  1710 => 1264,  1708 => 1263,  1707 => 1262,  1706 => 1261,  1705 => 1259,  1691 => 1248,  1682 => 1242,  1674 => 1236,  1671 => 1235,  1656 => 1233,  1651 => 1232,  1649 => 1231,  1640 => 1224,  1637 => 1223,  1628 => 1220,  1623 => 1219,  1618 => 1218,  1609 => 1217,  1600 => 1216,  1595 => 1215,  1593 => 1214,  1583 => 1207,  1579 => 1206,  1575 => 1205,  1570 => 1202,  1563 => 1196,  1561 => 1195,  1560 => 1194,  1559 => 1192,  1555 => 1190,  1548 => 1185,  1546 => 1184,  1540 => 1181,  1532 => 1179,  1526 => 1178,  1523 => 1177,  1520 => 1176,  1517 => 1175,  1512 => 1174,  1509 => 1173,  1506 => 1172,  1503 => 1171,  1500 => 1170,  1497 => 1169,  1494 => 1168,  1489 => 1165,  1484 => 1163,  1476 => 1157,  1474 => 1156,  1471 => 1155,  1469 => 1154,  1467 => 1153,  1465 => 1152,  1461 => 1150,  1453 => 1144,  1449 => 1142,  1444 => 1139,  1436 => 1135,  1430 => 1131,  1428 => 1130,  1427 => 1129,  1425 => 1127,  1423 => 1126,  1415 => 1120,  1411 => 1118,  1405 => 1116,  1403 => 1115,  1397 => 1111,  1393 => 1109,  1385 => 1106,  1382 => 1105,  1378 => 1103,  1372 => 1099,  1370 => 1098,  1369 => 1097,  1368 => 1096,  1367 => 1095,  1365 => 1093,  1363 => 1092,  1360 => 1091,  1354 => 1089,  1352 => 1088,  1351 => 1087,  1350 => 1086,  1349 => 1085,  1347 => 1083,  1343 => 1081,  1340 => 1080,  1338 => 1079,  1335 => 1078,  1326 => 1075,  1321 => 1074,  1319 => 1073,  1318 => 1072,  1317 => 1071,  1316 => 1070,  1314 => 1068,  1310 => 1067,  1307 => 1066,  1304 => 1065,  1300 => 1063,  1298 => 1062,  1295 => 1061,  1293 => 1060,  1292 => 1058,  1291 => 1057,  1289 => 1055,  1287 => 1054,  1284 => 1053,  1281 => 1052,  1279 => 1051,  1276 => 1050,  1272 => 1048,  1266 => 1044,  1264 => 1043,  1263 => 1042,  1262 => 1041,  1261 => 1040,  1259 => 1038,  1257 => 1037,  1254 => 1036,  1251 => 1035,  1247 => 1032,  1234 => 1024,  1232 => 1023,  1231 => 1022,  1230 => 1021,  1229 => 1019,  1224 => 1016,  1222 => 1015,  1221 => 1014,  1220 => 1013,  1219 => 1012,  1218 => 1010,  1214 => 1008,  1207 => 1005,  1201 => 1004,  1198 => 1003,  1193 => 1002,  1191 => 1001,  1188 => 1000,  1186 => 999,  1180 => 995,  1174 => 992,  1171 => 991,  1169 => 990,  1162 => 988,  1157 => 986,  1149 => 980,  1145 => 979,  1137 => 974,  1131 => 971,  1127 => 969,  1124 => 968,  1122 => 967,  1120 => 966,  1117 => 965,  1115 => 964,  1114 => 963,  1113 => 962,  1112 => 961,  1110 => 960,  1108 => 959,  1105 => 958,  1103 => 957,  1101 => 956,  1099 => 955,  1097 => 954,  1094 => 953,  1086 => 944,  1083 => 943,  1074 => 940,  1065 => 939,  1060 => 938,  1058 => 937,  1051 => 935,  1039 => 929,  1026 => 917,  1020 => 914,  1012 => 908,  1009 => 907,  986 => 886,  982 => 884,  973 => 875,  969 => 874,  962 => 870,  958 => 869,  949 => 863,  943 => 860,  938 => 858,  934 => 857,  929 => 854,  922 => 853,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/search.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\search.html.twig");
    }
}
