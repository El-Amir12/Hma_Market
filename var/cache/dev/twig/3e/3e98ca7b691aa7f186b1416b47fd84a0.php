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
class __TwigTemplate_b816e3805a6da220d5caeda6d2d28fbf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/pharmacy/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/pharmacy/search.html.twig"));

        $this->parent = $this->load("base_marketplace.html.twig", 2);
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

        yield "Pharmacies - HMA Market";
        
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 853
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

        // line 854
        yield "<div class=\"page-header\">
    <div class=\"row align-items-center\">
        <div class=\"col-md-8\">
            <h1><i class=\"fas fa-";
        // line 857
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 857, $this->source); })()) == "pharmacy")) ? ("shield-alt") : ("box"));
        yield " me-3\"></i>
                ";
        // line 858
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 858, $this->source); })()) == "pharmacy")) ? ("Pharmacies de garde") : ("Rechercher un produit"));
        yield "
            </h1>
            <p>";
        // line 860
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 860, $this->source); })()) == "pharmacy")) ? ("Trouvez une pharmacie de garde près de chez vous.") : ("Recherchez un produit dans une pharmacie de garde."));
        yield "</p>
        </div>
        <div class=\"col-md-4 text-end d-none d-md-block\">
            <i class=\"fas fa-";
        // line 863
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 863, $this->source); })()) == "pharmacy")) ? ("clock") : ("search-location"));
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
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 870, $this->source); })()) == "pharmacy")) ? ("active") : (""));
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
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 875, $this->source); })()) == "product")) ? ("active") : (""));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 886, $this->source); })()), "html", null, true);
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
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 907, $this->source); })()) == "pharmacy")) {
            // line 908
            yield "        <div class=\"filter-item\">
            <label for=\"searchPharmacyInput\">
                <i class=\"fas fa-search text-primary me-1\"></i> Rechercher
            </label>
            <input type=\"text\" id=\"searchPharmacyInput\" class=\"form-control\" 
                   placeholder=\"Nom de la pharmacie...\" 
                   value=\"";
            // line 914
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 914, $this->source); })()), "")) : ("")), "html", null, true);
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
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 929, $this->source); })()) == "product") && (isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 929, $this->source); })()))) {
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
        if ((($tmp =  !(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 935, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                    <option value=\"\">-- Sélectionnez une pharmacie --</option>
                    ";
        // line 937
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 937, $this->source); })())) > 0)) {
            // line 938
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 938, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pharmacy"]) {
                // line 939
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "id", [], "any", false, false, false, 939), "html", null, true);
                yield "\" ";
                if (((isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 939, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "id", [], "any", false, false, false, 939))) {
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
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 954, $this->source); })()) == "pharmacy")) {
            // line 955
            yield "        ";
            // line 956
            yield "        ";
            // line 957
            yield "        ";
            // line 958
            yield "        ";
            if ((($tmp = (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 958, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 959
                yield "            ";
                // line 960
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_pharmacy_detail.html.twig", ["selectedPharmacyData" =>                 // line 961
(isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 961, $this->source); })()), "selectedCountry" =>                 // line 962
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 962, $this->source); })()), "selectedCity" =>                 // line 963
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 963, $this->source); })()), "searchPharmacy" => ((                // line 964
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 964, $this->source); })()), "")) : (""))]);
                // line 965
                yield "
        ";
            } elseif ((            // line 966
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 966, $this->source); })()) && (isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 966, $this->source); })()))) {
                // line 967
                yield "            ";
                // line 968
                yield "            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 968, $this->source); })())) > 0)) {
                    // line 969
                    yield "                <div class=\"section-title\">
                    <i class=\"fas fa-clock me-2\"></i>
                    Pharmacies de garde à <span class=\"text-primary\">";
                    // line 971
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 971, $this->source); })()), "html", null, true);
                    yield "</span>
                    <span class=\"badge-count\">
                        <i class=\"fas fa-check-circle me-1\"></i>
                        ";
                    // line 974
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPharmacies"]) || array_key_exists("totalPharmacies", $context) ? $context["totalPharmacies"] : (function () { throw new RuntimeError('Variable "totalPharmacies" does not exist.', 974, $this->source); })()), "html", null, true);
                    yield " pharmacie(s) de garde
                    </span>
                </div>

                <div class=\"pharmacy-grid\">
                    ";
                    // line 979
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 979, $this->source); })()));
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
                                $context["daysList"] = Twig\Extension\CoreExtension::merge((isset($context["daysList"]) || array_key_exists("daysList", $context) ? $context["daysList"] : (function () { throw new RuntimeError('Variable "daysList" does not exist.', 1003, $this->source); })()), [(((((CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "day", [], "any", false, false, false, 1003) . " (") . CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "start", [], "any", false, false, false, 1003)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "end", [], "any", false, false, false, 1003)) . ")")]);
                                // line 1004
                                yield "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['dayKey'], $context['dayData'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1005
                            yield "                                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["daysList"]) || array_key_exists("daysList", $context) ? $context["daysList"] : (function () { throw new RuntimeError('Variable "daysList" does not exist.', 1005, $this->source); })()), ", "), "html", null, true);
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
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1012, $this->source); })()), "city" =>                         // line 1013
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1013, $this->source); })()), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                         // line 1014
$context["pharmacy"], "id", [], "any", false, false, false, 1014), "search_pharmacy" => ((                        // line 1015
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 1015, $this->source); })()), "")) : (""))]), "html", null, true);
                        // line 1016
                        yield "\" class=\"btn btn-sm btn-primary\">
                                            <i class=\"fas fa-info-circle me-1\"></i> Détails
                                        </a>
                                        <a href=\"";
                        // line 1019
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                         // line 1021
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1021, $this->source); })()), "city" =>                         // line 1022
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1022, $this->source); })()), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                         // line 1023
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
                    if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1035, $this->source); })()) > 1)) {
                        // line 1036
                        yield "                    <div class=\"pagination-container\">
                        ";
                        // line 1037
                        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1037, $this->source); })()) > 1)) {
                            // line 1038
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                             // line 1040
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1040, $this->source); })()), "city" =>                             // line 1041
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1041, $this->source); })()), "page" => (                            // line 1042
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1042, $this->source); })()) - 1), "search_pharmacy" => ((                            // line 1043
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 1043, $this->source); })()), "")) : (""))]), "html", null, true);
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
                        $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1051, $this->source); })()) - 2));
                        // line 1052
                        yield "                        ";
                        $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1052, $this->source); })()), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1052, $this->source); })()) + 2));
                        // line 1053
                        yield "                        
                        ";
                        // line 1054
                        if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 1054, $this->source); })()) > 1)) {
                            // line 1055
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                             // line 1057
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1057, $this->source); })()), "city" =>                             // line 1058
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1058, $this->source); })()), "page" => 1, "search_pharmacy" => ((                            // line 1060
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 1060, $this->source); })()), "")) : (""))]), "html", null, true);
                            // line 1061
                            yield "\" class=\"page-link\">1</a>
                            ";
                            // line 1062
                            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 1062, $this->source); })()) > 2)) {
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
                        $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 1067, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 1067, $this->source); })())));
                        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                            // line 1068
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                             // line 1070
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1070, $this->source); })()), "city" =>                             // line 1071
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1071, $this->source); })()), "page" =>                             // line 1072
$context["page"], "search_pharmacy" => ((                            // line 1073
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 1073, $this->source); })()), "")) : (""))]), "html", null, true);
                            // line 1074
                            yield "\" class=\"page-link ";
                            yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1074, $this->source); })()))) ? ("active") : (""));
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
                        if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 1079, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1079, $this->source); })()))) {
                            // line 1080
                            yield "                            ";
                            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 1080, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1080, $this->source); })()) - 1))) {
                                // line 1081
                                yield "                                <span class=\"page-link disabled\">…</span>
                            ";
                            }
                            // line 1083
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                             // line 1085
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1085, $this->source); })()), "city" =>                             // line 1086
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1086, $this->source); })()), "page" =>                             // line 1087
(isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1087, $this->source); })()), "search_pharmacy" => ((                            // line 1088
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 1088, $this->source); })()), "")) : (""))]), "html", null, true);
                            // line 1089
                            yield "\" class=\"page-link\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1089, $this->source); })()), "html", null, true);
                            yield "</a>
                        ";
                        }
                        // line 1091
                        yield "
                        ";
                        // line 1092
                        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1092, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1092, $this->source); })()))) {
                            // line 1093
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                             // line 1095
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1095, $this->source); })()), "city" =>                             // line 1096
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1096, $this->source); })()), "page" => (                            // line 1097
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1097, $this->source); })()) + 1), "search_pharmacy" => ((                            // line 1098
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 1098, $this->source); })()), "")) : (""))]), "html", null, true);
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
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1106, $this->source); })()), "html", null, true);
                        yield " sur ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1106, $this->source); })()), "html", null, true);
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
                    if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 1115, $this->source); })()), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1116
                        yield "                            Aucune pharmacie de garde ne correspond à \"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 1116, $this->source); })()), "html", null, true);
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
                    if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 1126, $this->source); })()), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1127
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 1129
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1129, $this->source); })()), "city" =>                         // line 1130
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1130, $this->source); })())]), "html", null, true);
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
            if ((($tmp = (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 1155, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 1163, $this->source); })()), "companyName", [], "any", false, false, false, 1163), "html", null, true);
                yield "
                        </span>
                        <span class=\"text-muted ms-2\">- ";
                // line 1165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 1165, $this->source); })()), "city", [], "any", false, false, false, 1165), "html", null, true);
                yield "</span>
                        
                        ";
                // line 1168
                yield "                        ";
                $context["guardPeriods"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "guardPeriods", [], "any", true, true, false, 1168)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 1168, $this->source); })()), "guardPeriods", [], "any", false, false, false, 1168), [])) : ([]));
                // line 1169
                yield "                        ";
                if ((is_iterable((isset($context["guardPeriods"]) || array_key_exists("guardPeriods", $context) ? $context["guardPeriods"] : (function () { throw new RuntimeError('Variable "guardPeriods" does not exist.', 1169, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["guardPeriods"]) || array_key_exists("guardPeriods", $context) ? $context["guardPeriods"] : (function () { throw new RuntimeError('Variable "guardPeriods" does not exist.', 1169, $this->source); })())) > 0))) {
                    // line 1170
                    yield "                            ";
                    $context["isOnGuard"] = false;
                    // line 1171
                    yield "                            ";
                    $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                    // line 1172
                    yield "                            ";
                    $context["currentDay"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 1172, $this->source); })()), "l"));
                    // line 1173
                    yield "                            ";
                    $context["currentTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 1173, $this->source); })()), "H:i");
                    // line 1174
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["guardPeriods"]) || array_key_exists("guardPeriods", $context) ? $context["guardPeriods"] : (function () { throw new RuntimeError('Variable "guardPeriods" does not exist.', 1174, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 1175
                        yield "                                ";
                        if ((((((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", true, true, false, 1175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1175), "")) : ("")) == (isset($context["currentDay"]) || array_key_exists("currentDay", $context) ? $context["currentDay"] : (function () { throw new RuntimeError('Variable "currentDay" does not exist.', 1175, $this->source); })())) && (((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", true, true, false, 1175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", false, false, false, 1175), "")) : ("")) <= (isset($context["currentTime"]) || array_key_exists("currentTime", $context) ? $context["currentTime"] : (function () { throw new RuntimeError('Variable "currentTime" does not exist.', 1175, $this->source); })()))) && (((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", true, true, false, 1175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", false, false, false, 1175), "")) : ("")) >= (isset($context["currentTime"]) || array_key_exists("currentTime", $context) ? $context["currentTime"] : (function () { throw new RuntimeError('Variable "currentTime" does not exist.', 1175, $this->source); })())))) {
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
                    yield (((($tmp = (isset($context["isOnGuard"]) || array_key_exists("isOnGuard", $context) ? $context["isOnGuard"] : (function () { throw new RuntimeError('Variable "isOnGuard" does not exist.', 1179, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                    yield " ms-2\" style=\"";
                    yield (((($tmp = (isset($context["isOnGuard"]) || array_key_exists("isOnGuard", $context) ? $context["isOnGuard"] : (function () { throw new RuntimeError('Variable "isOnGuard" does not exist.', 1179, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("background:#dcfce7;color:#16a34a;") : ("background:#fee2e2;color:#dc2626;"));
                    yield "\">
                                <i class=\"fas fa-clock\"></i> 
                                ";
                    // line 1181
                    yield (((($tmp = (isset($context["isOnGuard"]) || array_key_exists("isOnGuard", $context) ? $context["isOnGuard"] : (function () { throw new RuntimeError('Variable "isOnGuard" does not exist.', 1181, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("En garde") : ("Pas de garde"));
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
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1194, $this->source); })()), "city" =>                 // line 1195
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1195, $this->source); })())]), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1205, $this->source); })()), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"city\" value=\"";
                // line 1206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1206, $this->source); })()), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"pharmacy\" value=\"";
                // line 1207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 1207, $this->source); })()), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"filter_applied\" value=\"1\">

                    <div class=\"filter-item\">
                        <label for=\"categorySelect\"><i class=\"fas fa-tags text-primary me-1\"></i> Catégorie</label>
                        <select name=\"category\" id=\"categorySelect\" class=\"form-select\">
                            <option value=\"\">Toutes les catégories</option>
                            ";
                // line 1214
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 1214, $this->source); })())) > 0)) {
                    // line 1215
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 1215, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 1216
                        yield "                                    <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1216), "html", null, true);
                        yield "\" ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1216) == (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 1216, $this->source); })()))) {
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
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("forms", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 1231, $this->source); })()), [])) : ([]))) > 0)) {
                    // line 1232
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 1232, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                        // line 1233
                        yield "                                    <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form"], "html", null, true);
                        yield "\" ";
                        if (((isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 1233, $this->source); })()) == $context["form"])) {
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("selectedDosage", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 1242, $this->source); })()), "")) : ("")), "html", null, true);
                yield "\">
                    </div>

                    <div class=\"filter-item\" style=\"min-width: 150px; flex: 0.5;\">
                        <div class=\"prescription-check\">
                            <input type=\"checkbox\" name=\"prescription_required\" id=\"prescriptionCheck\" 
                                   value=\"1\" ";
                // line 1248
                yield ((((isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 1248, $this->source); })()) == "1")) ? ("checked") : (""));
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
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1261, $this->source); })()), "city" =>                 // line 1262
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1262, $this->source); })()), "pharmacy" =>                 // line 1263
(isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 1263, $this->source); })())]), "html", null, true);
                // line 1264
                yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-eraser\"></i> Effacer
                        </a>
                    </div>
                </form>

                <div class=\"filter-status\">
                    ";
                // line 1271
                if ((($tmp = ((array_key_exists("filterApplied", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filterApplied"]) || array_key_exists("filterApplied", $context) ? $context["filterApplied"] : (function () { throw new RuntimeError('Variable "filterApplied" does not exist.', 1271, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                $context["hasActiveFilters"] = ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 1278, $this->source); })()) || (isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 1278, $this->source); })())) || (isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 1278, $this->source); })())) ||  !(null === (isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 1278, $this->source); })())));
                // line 1279
                yield "                ";
                if ((($tmp = (isset($context["hasActiveFilters"]) || array_key_exists("hasActiveFilters", $context) ? $context["hasActiveFilters"] : (function () { throw new RuntimeError('Variable "hasActiveFilters" does not exist.', 1279, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1280
                    yield "                    <div class=\"active-filters\">
                        <span class=\"text-muted\" style=\"font-size: 0.85rem; font-weight: 500;\">Filtres actifs :</span>
                        ";
                    // line 1282
                    if ((($tmp = (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 1282, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1283
                        yield "                            ";
                        $context["categoryName"] = "";
                        // line 1284
                        yield "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 1284, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                            // line 1285
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 1285) == (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 1285, $this->source); })()))) {
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
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoryName"]) || array_key_exists("categoryName", $context) ? $context["categoryName"] : (function () { throw new RuntimeError('Variable "categoryName" does not exist.', 1288, $this->source); })()), "html", null, true);
                        yield "
                                <a href=\"";
                        // line 1289
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                         // line 1291
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1291, $this->source); })()), "city" =>                         // line 1292
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1292, $this->source); })()), "pharmacy" =>                         // line 1293
(isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 1293, $this->source); })()), "form" =>                         // line 1294
(isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 1294, $this->source); })()), "dosage" =>                         // line 1295
(isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 1295, $this->source); })()), "prescription_required" =>                         // line 1296
(isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 1296, $this->source); })()), "filter_applied" => 1]), "html", null, true);
                        // line 1298
                        yield "\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        ";
                    }
                    // line 1301
                    yield "                        ";
                    if ((($tmp = (isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 1301, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1302
                        yield "                            <span class=\"filter-tag\">
                                <i class=\"fas fa-capsules\"></i> ";
                        // line 1303
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 1303, $this->source); })()), "html", null, true);
                        yield "
                                <a href=\"";
                        // line 1304
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                         // line 1306
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1306, $this->source); })()), "city" =>                         // line 1307
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1307, $this->source); })()), "pharmacy" =>                         // line 1308
(isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 1308, $this->source); })()), "category" =>                         // line 1309
(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 1309, $this->source); })()), "dosage" =>                         // line 1310
(isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 1310, $this->source); })()), "prescription_required" =>                         // line 1311
(isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 1311, $this->source); })()), "filter_applied" => 1]), "html", null, true);
                        // line 1313
                        yield "\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        ";
                    }
                    // line 1316
                    yield "                        ";
                    if ((($tmp = (isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 1316, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1317
                        yield "                            <span class=\"filter-tag\">
                                <i class=\"fas fa-weight\"></i> ";
                        // line 1318
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 1318, $this->source); })()), "html", null, true);
                        yield "
                                <a href=\"";
                        // line 1319
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                         // line 1321
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1321, $this->source); })()), "city" =>                         // line 1322
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1322, $this->source); })()), "pharmacy" =>                         // line 1323
(isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 1323, $this->source); })()), "category" =>                         // line 1324
(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 1324, $this->source); })()), "form" =>                         // line 1325
(isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 1325, $this->source); })()), "prescription_required" =>                         // line 1326
(isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 1326, $this->source); })()), "filter_applied" => 1]), "html", null, true);
                        // line 1328
                        yield "\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        ";
                    }
                    // line 1331
                    yield "                        ";
                    if (((isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 1331, $this->source); })()) == "1")) {
                        // line 1332
                        yield "                            <span class=\"filter-tag\">
                                <i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise
                                <a href=\"";
                        // line 1334
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                         // line 1336
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1336, $this->source); })()), "city" =>                         // line 1337
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1337, $this->source); })()), "pharmacy" =>                         // line 1338
(isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 1338, $this->source); })()), "category" =>                         // line 1339
(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 1339, $this->source); })()), "form" =>                         // line 1340
(isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 1340, $this->source); })()), "dosage" =>                         // line 1341
(isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 1341, $this->source); })()), "filter_applied" => 1]), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 1354, $this->source); })())), "html", null, true);
                yield "</span>
                </label>
                
                ";
                // line 1357
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 1357, $this->source); })())) > 0)) {
                    // line 1358
                    yield "                    <select id=\"productSelect\" class=\"form-control\">
                        <option value=\"\">-- Sélectionnez un produit --</option>
                        ";
                    // line 1360
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 1360, $this->source); })()));
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
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1386, $this->source); })()) && (isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1386, $this->source); })()))) {
                // line 1387
                yield "            <div class=\"empty-state\">
                <i class=\"fas fa-store\"></i>
                <h4>Sélectionnez une pharmacie</h4>
                <p class=\"text-muted\">Pour rechercher des produits, veuillez sélectionner une pharmacie dans la liste ci-dessus.</p>
                <a href=\"";
                // line 1391
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" => (isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1391, $this->source); })()), "city" => (isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1391, $this->source); })())]), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1424
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 1432, $this->source); })()), "html", null, true);
        yield "';
    let selectedCountry = '";
        // line 1433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 1433, $this->source); })()), "html", null, true);
        yield "';
    let selectedCity = '";
        // line 1434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 1434, $this->source); })()), "html", null, true);
        yield "';
    let selectedPharmacy = '";
        // line 1435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 1435, $this->source); })()), "html", null, true);
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 1717, $this->source); })())) > 0)) {
            // line 1718
            yield "    const productSelect = document.getElementById('productSelect');
    if (productSelect && typeof \$ !== 'undefined' && typeof \$.fn.select2 !== 'undefined') {
        console.log('📦 Initialisation du select2 produit avec', ";
            // line 1720
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 1720, $this->source); })())), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  2525 => 1856,  2386 => 1720,  2382 => 1718,  2380 => 1717,  2095 => 1435,  2091 => 1434,  2087 => 1433,  2083 => 1432,  2073 => 1425,  2060 => 1424,  2030 => 1403,  2027 => 1402,  2019 => 1396,  2011 => 1391,  2005 => 1387,  2003 => 1386,  1999 => 1384,  1992 => 1379,  1988 => 1377,  1981 => 1375,  1974 => 1374,  1969 => 1373,  1965 => 1372,  1961 => 1371,  1957 => 1370,  1953 => 1369,  1949 => 1368,  1945 => 1367,  1941 => 1366,  1937 => 1365,  1933 => 1364,  1929 => 1363,  1925 => 1362,  1920 => 1361,  1916 => 1360,  1912 => 1358,  1910 => 1357,  1904 => 1354,  1899 => 1351,  1895 => 1348,  1891 => 1346,  1886 => 1343,  1884 => 1341,  1883 => 1340,  1882 => 1339,  1881 => 1338,  1880 => 1337,  1879 => 1336,  1878 => 1334,  1874 => 1332,  1871 => 1331,  1866 => 1328,  1864 => 1326,  1863 => 1325,  1862 => 1324,  1861 => 1323,  1860 => 1322,  1859 => 1321,  1858 => 1319,  1854 => 1318,  1851 => 1317,  1848 => 1316,  1843 => 1313,  1841 => 1311,  1840 => 1310,  1839 => 1309,  1838 => 1308,  1837 => 1307,  1836 => 1306,  1835 => 1304,  1831 => 1303,  1828 => 1302,  1825 => 1301,  1820 => 1298,  1818 => 1296,  1817 => 1295,  1816 => 1294,  1815 => 1293,  1814 => 1292,  1813 => 1291,  1812 => 1289,  1808 => 1288,  1805 => 1287,  1799 => 1286,  1794 => 1285,  1789 => 1284,  1786 => 1283,  1784 => 1282,  1780 => 1280,  1777 => 1279,  1775 => 1278,  1771 => 1276,  1767 => 1274,  1763 => 1272,  1761 => 1271,  1752 => 1264,  1750 => 1263,  1749 => 1262,  1748 => 1261,  1747 => 1259,  1733 => 1248,  1724 => 1242,  1716 => 1236,  1713 => 1235,  1698 => 1233,  1693 => 1232,  1691 => 1231,  1682 => 1224,  1679 => 1223,  1670 => 1220,  1665 => 1219,  1660 => 1218,  1651 => 1217,  1642 => 1216,  1637 => 1215,  1635 => 1214,  1625 => 1207,  1621 => 1206,  1617 => 1205,  1612 => 1202,  1605 => 1196,  1603 => 1195,  1602 => 1194,  1601 => 1192,  1597 => 1190,  1590 => 1185,  1588 => 1184,  1582 => 1181,  1574 => 1179,  1568 => 1178,  1565 => 1177,  1562 => 1176,  1559 => 1175,  1554 => 1174,  1551 => 1173,  1548 => 1172,  1545 => 1171,  1542 => 1170,  1539 => 1169,  1536 => 1168,  1531 => 1165,  1526 => 1163,  1518 => 1157,  1516 => 1156,  1513 => 1155,  1511 => 1154,  1509 => 1153,  1507 => 1152,  1503 => 1150,  1495 => 1144,  1491 => 1142,  1486 => 1139,  1478 => 1135,  1472 => 1131,  1470 => 1130,  1469 => 1129,  1467 => 1127,  1465 => 1126,  1457 => 1120,  1453 => 1118,  1447 => 1116,  1445 => 1115,  1439 => 1111,  1435 => 1109,  1427 => 1106,  1424 => 1105,  1420 => 1103,  1414 => 1099,  1412 => 1098,  1411 => 1097,  1410 => 1096,  1409 => 1095,  1407 => 1093,  1405 => 1092,  1402 => 1091,  1396 => 1089,  1394 => 1088,  1393 => 1087,  1392 => 1086,  1391 => 1085,  1389 => 1083,  1385 => 1081,  1382 => 1080,  1380 => 1079,  1377 => 1078,  1368 => 1075,  1363 => 1074,  1361 => 1073,  1360 => 1072,  1359 => 1071,  1358 => 1070,  1356 => 1068,  1352 => 1067,  1349 => 1066,  1346 => 1065,  1342 => 1063,  1340 => 1062,  1337 => 1061,  1335 => 1060,  1334 => 1058,  1333 => 1057,  1331 => 1055,  1329 => 1054,  1326 => 1053,  1323 => 1052,  1321 => 1051,  1318 => 1050,  1314 => 1048,  1308 => 1044,  1306 => 1043,  1305 => 1042,  1304 => 1041,  1303 => 1040,  1301 => 1038,  1299 => 1037,  1296 => 1036,  1293 => 1035,  1289 => 1032,  1276 => 1024,  1274 => 1023,  1273 => 1022,  1272 => 1021,  1271 => 1019,  1266 => 1016,  1264 => 1015,  1263 => 1014,  1262 => 1013,  1261 => 1012,  1260 => 1010,  1256 => 1008,  1249 => 1005,  1243 => 1004,  1240 => 1003,  1235 => 1002,  1233 => 1001,  1230 => 1000,  1228 => 999,  1222 => 995,  1216 => 992,  1213 => 991,  1211 => 990,  1204 => 988,  1199 => 986,  1191 => 980,  1187 => 979,  1179 => 974,  1173 => 971,  1169 => 969,  1166 => 968,  1164 => 967,  1162 => 966,  1159 => 965,  1157 => 964,  1156 => 963,  1155 => 962,  1154 => 961,  1152 => 960,  1150 => 959,  1147 => 958,  1145 => 957,  1143 => 956,  1141 => 955,  1139 => 954,  1136 => 953,  1128 => 944,  1125 => 943,  1116 => 940,  1107 => 939,  1102 => 938,  1100 => 937,  1093 => 935,  1081 => 929,  1068 => 917,  1062 => 914,  1054 => 908,  1051 => 907,  1028 => 886,  1024 => 884,  1015 => 875,  1011 => 874,  1004 => 870,  1000 => 869,  991 => 863,  985 => 860,  980 => 858,  976 => 857,  971 => 854,  958 => 853,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/pharmacy/search.html.twig #}
{% extends 'base_marketplace.html.twig' %}

{% block title %}Pharmacies - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
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
{% endblock %}

{% block body %}
<div class=\"page-header\">
    <div class=\"row align-items-center\">
        <div class=\"col-md-8\">
            <h1><i class=\"fas fa-{{ mode == 'pharmacy' ? 'shield-alt' : 'box' }} me-3\"></i>
                {{ mode == 'pharmacy' ? 'Pharmacies de garde' : 'Rechercher un produit' }}
            </h1>
            <p>{{ mode == 'pharmacy' ? 'Trouvez une pharmacie de garde près de chez vous.' : 'Recherchez un produit dans une pharmacie de garde.' }}</p>
        </div>
        <div class=\"col-md-4 text-end d-none d-md-block\">
            <i class=\"fas fa-{{ mode == 'pharmacy' ? 'clock' : 'search-location' }}\" style=\"font-size: 3.5rem; opacity: 0.3;\"></i>
        </div>
    </div>
</div>

<div class=\"mode-tabs\">
    <a href=\"{{ path('marketplace_pharmacy_search', {mode: 'pharmacy'}) }}\" 
       class=\"mode-tab {{ mode == 'pharmacy' ? 'active' : '' }}\" 
       data-mode=\"pharmacy\">
        <i class=\"fas fa-shield-alt\"></i> Pharmacies de garde
    </a>
    <a href=\"{{ path('marketplace_pharmacy_search', {mode: 'product'}) }}\" 
       class=\"mode-tab {{ mode == 'product' ? 'active' : '' }}\" 
       data-mode=\"product\">
        <i class=\"fas fa-box\"></i> Rechercher un produit
    </a>
</div>

{# ============================================================ #}
{# FILTRES COMMUNS (Pays et Ville)                              #}
{# ============================================================ #}
<div class=\"filters-container\">
    <form method=\"get\" id=\"filterForm\" class=\"filter-group\">
        <input type=\"hidden\" name=\"mode\" value=\"{{ mode }}\">
        
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

        {# ✅ MODE PHARMACIE : Champ de recherche supplémentaire #}
        {% if mode == 'pharmacy' %}
        <div class=\"filter-item\">
            <label for=\"searchPharmacyInput\">
                <i class=\"fas fa-search text-primary me-1\"></i> Rechercher
            </label>
            <input type=\"text\" id=\"searchPharmacyInput\" class=\"form-control\" 
                   placeholder=\"Nom de la pharmacie...\" 
                   value=\"{{ searchPharmacy|default('') }}\">
        </div>
        {% endif %}

        <div class=\"filter-actions\">
            <button type=\"button\" id=\"applyFiltersBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-check\"></i> Appliquer
            </button>
            <button type=\"button\" id=\"clearFiltersBtn\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-eraser\"></i> Effacer
            </button>
        </div>
    </form>

    {# ✅ MODE PRODUIT : Sélecteur de pharmacie #}
    <div id=\"pharmacySelector\" class=\"pharmacy-select-container {% if mode == 'product' and selectedCity %}visible{% endif %}\">
        <div class=\"filter-group\" style=\"margin-top: 0;\">
            <div class=\"filter-item\" style=\"flex: 1;\">
                <label for=\"pharmacySelect\">
                    <i class=\"fas fa-store text-primary me-1\"></i> Pharmacie
                </label>
                <select id=\"pharmacySelect\" class=\"form-select\" {% if not selectedCity %}disabled{% endif %}>
                    <option value=\"\">-- Sélectionnez une pharmacie --</option>
                    {% if pharmacies|length > 0 %}
                        {% for pharmacy in pharmacies %}
                            <option value=\"{{ pharmacy.id }}\" {% if selectedPharmacy == pharmacy.id %}selected{% endif %}>
                                {{ pharmacy.name }}
                            </option>
                        {% endfor %}
                    {% endif %}
                </select>
            </div>
        </div>
    </div>
</div>

{# ============================================================ #}
{# RÉSULTATS                                                     #}
{# ============================================================ #}
<div id=\"resultsContainer\" class=\"mt-4\">
    {% if mode == 'pharmacy' %}
        {# ============================================================ #}
        {# MODE PHARMACIE DE GARDE                                       #}
        {# ============================================================ #}
        {% if selectedPharmacyData %}
            {# Détail d'une pharmacie #}
            {{ include('marketplace/pharmacy/_pharmacy_detail.html.twig', {
                selectedPharmacyData: selectedPharmacyData,
                selectedCountry: selectedCountry,
                selectedCity: selectedCity,
                searchPharmacy: searchPharmacy|default('')
            }) }}
        {% elseif selectedCountry and selectedCity %}
            {# Liste des pharmacies DE GARDE #}
            {% if pharmacies|length > 0 %}
                <div class=\"section-title\">
                    <i class=\"fas fa-clock me-2\"></i>
                    Pharmacies de garde à <span class=\"text-primary\">{{ selectedCity }}</span>
                    <span class=\"badge-count\">
                        <i class=\"fas fa-check-circle me-1\"></i>
                        {{ totalPharmacies }} pharmacie(s) de garde
                    </span>
                </div>

                <div class=\"pharmacy-grid\">
                    {% for pharmacy in pharmacies %}
                        <div class=\"pharmacy-card\">
                            <div class=\"d-flex gap-3 align-items-start\">
                                <div class=\"pharmacy-icon\">
                                    <i class=\"fas fa-shield-alt\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <div class=\"pharmacy-name\">{{ pharmacy.name }}</div>
                                    <div class=\"pharmacy-address\">
                                        <i class=\"fas fa-map-marker-alt\"></i> {{ pharmacy.address }}, {{ pharmacy.city }}
                                    </div>
                                    {% if pharmacy.phone %}
                                        <div class=\"pharmacy-address\">
                                            <i class=\"fas fa-phone\"></i> {{ pharmacy.phone }}
                                        </div>
                                    {% endif %}
                                    <div class=\"mt-2\">
                                        <span class=\"guard-badge active\">
                                            <i class=\"fas fa-clock\"></i> En garde maintenant
                                        </span>
                                        {% if pharmacy.guardDays is defined and pharmacy.guardDays|length > 0 %}
                                            <span class=\"text-muted ms-2\" style=\"font-size: 0.75rem;\">
                                                {% set daysList = [] %}
                                                {% for dayKey, dayData in pharmacy.guardDays %}
                                                    {% set daysList = daysList|merge([dayData.day ~ ' (' ~ dayData.start ~ '-' ~ dayData.end ~ ')']) %}
                                                {% endfor %}
                                                {{ daysList|join(', ') }}
                                            </span>
                                        {% endif %}
                                    </div>
                                    <div class=\"pharmacy-actions\">
                                        <a href=\"{{ path('marketplace_pharmacy_search', {
                                            mode: 'pharmacy', 
                                            country: selectedCountry, 
                                            city: selectedCity, 
                                            pharmacy: pharmacy.id,
                                            search_pharmacy: searchPharmacy|default('')
                                        }) }}\" class=\"btn btn-sm btn-primary\">
                                            <i class=\"fas fa-info-circle me-1\"></i> Détails
                                        </a>
                                        <a href=\"{{ path('marketplace_pharmacy_search', {
                                            mode: 'product', 
                                            country: selectedCountry, 
                                            city: selectedCity, 
                                            pharmacy: pharmacy.id
                                        }) }}\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-box me-1\"></i> Voir produits
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>

                {# Pagination #}
                {% if totalPages > 1 %}
                    <div class=\"pagination-container\">
                        {% if currentPage > 1 %}
                            <a href=\"{{ path('marketplace_pharmacy_search', {
                                mode: 'pharmacy', 
                                country: selectedCountry, 
                                city: selectedCity, 
                                page: currentPage - 1, 
                                search_pharmacy: searchPharmacy|default('')
                            }) }}\" class=\"page-link\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        {% else %}
                            <span class=\"page-link disabled\"><i class=\"fas fa-chevron-left\"></i></span>
                        {% endif %}

                        {% set startPage = max(1, currentPage - 2) %}
                        {% set endPage = min(totalPages, currentPage + 2) %}
                        
                        {% if startPage > 1 %}
                            <a href=\"{{ path('marketplace_pharmacy_search', {
                                mode: 'pharmacy', 
                                country: selectedCountry, 
                                city: selectedCity, 
                                page: 1, 
                                search_pharmacy: searchPharmacy|default('')
                            }) }}\" class=\"page-link\">1</a>
                            {% if startPage > 2 %}
                                <span class=\"page-link disabled\">…</span>
                            {% endif %}
                        {% endif %}

                        {% for page in startPage..endPage %}
                            <a href=\"{{ path('marketplace_pharmacy_search', {
                                mode: 'pharmacy', 
                                country: selectedCountry, 
                                city: selectedCity, 
                                page: page, 
                                search_pharmacy: searchPharmacy|default('')
                            }) }}\" class=\"page-link {{ page == currentPage ? 'active' : '' }}\">
                                {{ page }}
                            </a>
                        {% endfor %}

                        {% if endPage < totalPages %}
                            {% if endPage < totalPages - 1 %}
                                <span class=\"page-link disabled\">…</span>
                            {% endif %}
                            <a href=\"{{ path('marketplace_pharmacy_search', {
                                mode: 'pharmacy', 
                                country: selectedCountry, 
                                city: selectedCity, 
                                page: totalPages, 
                                search_pharmacy: searchPharmacy|default('')
                            }) }}\" class=\"page-link\">{{ totalPages }}</a>
                        {% endif %}

                        {% if currentPage < totalPages %}
                            <a href=\"{{ path('marketplace_pharmacy_search', {
                                mode: 'pharmacy', 
                                country: selectedCountry, 
                                city: selectedCity, 
                                page: currentPage + 1, 
                                search_pharmacy: searchPharmacy|default('')
                            }) }}\" class=\"page-link\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        {% else %}
                            <span class=\"page-link disabled\"><i class=\"fas fa-chevron-right\"></i></span>
                        {% endif %}

                        <span class=\"page-info\">Page {{ currentPage }} sur {{ totalPages }}</span>
                    </div>
                {% endif %}

            {% else %}
                <div class=\"empty-state\">
                    <i class=\"fas fa-clock\" style=\"color: #f59e0b;\"></i>
                    <h4>Aucune pharmacie de garde trouvée</h4>
                    <p class=\"text-muted\">
                        {% if searchPharmacy|default('') %}
                            Aucune pharmacie de garde ne correspond à \"{{ searchPharmacy }}\" dans cette ville.
                        {% else %}
                            Aucune pharmacie de garde disponible dans cette ville pour le moment.
                        {% endif %}
                    </p>
                    <div class=\"mt-3\">
                        <small class=\"text-muted d-block mb-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Les pharmacies de garde sont affichées automatiquement en fonction de l'heure actuelle.
                        </small>
                        {% if searchPharmacy|default('') %}
                            <a href=\"{{ path('marketplace_pharmacy_search', {
                                mode: 'pharmacy', 
                                country: selectedCountry, 
                                city: selectedCity
                            }) }}\" class=\"btn btn-primary mt-2\">
                                <i class=\"fas fa-undo me-1\"></i> Voir toutes les pharmacies de garde
                            </a>
                        {% else %}
                            <a href=\"{{ path('marketplace_pharmacy_search', {mode: 'pharmacy'}) }}\" class=\"btn btn-primary mt-2\">
                                <i class=\"fas fa-undo me-1\"></i> Nouvelle recherche
                            </a>
                        {% endif %}
                    </div>
                </div>
            {% endif %}

        {% else %}
            <div class=\"empty-state\">
                <i class=\"fas fa-search-location\"></i>
                <h4>Sélectionnez un pays et une ville</h4>
                <p class=\"text-muted\">Choisissez un pays puis une ville pour voir les pharmacies de garde disponibles.</p>
            </div>
        {% endif %}

    {% else %}
        {# ============================================================ #}
        {# MODE RECHERCHE DE PRODUIT                                     #}
        {# ============================================================ #}
        {% if selectedPharmacyData %}
            {# Pharmacie sélectionnée #}
            <div class=\"pharmacy-selected-info\">
                <div class=\"d-flex align-items-center gap-3\">
                    <i class=\"fas fa-store\" style=\"font-size: 1.5rem; color: var(--primary-color);\"></i>
                    <div>
                        <span class=\"pharmacy-name\">
                            <i class=\"fas fa-hospital me-1\"></i>
                            {{ selectedPharmacyData.companyName }}
                        </span>
                        <span class=\"text-muted ms-2\">- {{ selectedPharmacyData.city }}</span>
                        
                        {# ✅ Vérifier les périodes de garde #}
                        {% set guardPeriods = selectedPharmacyData.guardPeriods|default([]) %}
                        {% if guardPeriods is iterable and guardPeriods|length > 0 %}
                            {% set isOnGuard = false %}
                            {% set now = date() %}
                            {% set currentDay = now|date('l')|lower %}
                            {% set currentTime = now|date('H:i') %}
                            {% for period in guardPeriods %}
                                {% if period.day|default('') == currentDay and period.start|default('') <= currentTime and period.end|default('') >= currentTime %}
                                    {% set isOnGuard = true %}
                                {% endif %}
                            {% endfor %}
                            <span class=\"guard-badge {{ isOnGuard ? 'active' : 'inactive' }} ms-2\" style=\"{{ isOnGuard ? 'background:#dcfce7;color:#16a34a;' : 'background:#fee2e2;color:#dc2626;' }}\">
                                <i class=\"fas fa-clock\"></i> 
                                {{ isOnGuard ? 'En garde' : 'Pas de garde' }}
                            </span>
                        {% else %}
                            {# ✅ Pas de période de garde configurée #}
                            <span class=\"guard-badge inactive ms-2\" style=\"background:#fee2e2;color:#dc2626;\">
                                <i class=\"fas fa-clock\"></i> 
                                Pas de garde
                            </span>
                        {% endif %}
                    </div>
                </div>
                <a href=\"{{ path('marketplace_pharmacy_search', {
                    mode: 'product', 
                    country: selectedCountry, 
                    city: selectedCity
                }) }}\" class=\"btn btn-sm btn-outline-primary\">
                    <i class=\"fas fa-undo\"></i> Changer de pharmacie
                </a>
            </div>

            {# Filtres produits #}
            <div class=\"product-filters-container\">
                <form method=\"get\" id=\"productFilterForm\" class=\"filter-group\">
                    <input type=\"hidden\" name=\"mode\" value=\"product\">
                    <input type=\"hidden\" name=\"country\" value=\"{{ selectedCountry }}\">
                    <input type=\"hidden\" name=\"city\" value=\"{{ selectedCity }}\">
                    <input type=\"hidden\" name=\"pharmacy\" value=\"{{ selectedPharmacy }}\">
                    <input type=\"hidden\" name=\"filter_applied\" value=\"1\">

                    <div class=\"filter-item\">
                        <label for=\"categorySelect\"><i class=\"fas fa-tags text-primary me-1\"></i> Catégorie</label>
                        <select name=\"category\" id=\"categorySelect\" class=\"form-select\">
                            <option value=\"\">Toutes les catégories</option>
                            {% if categories|length > 0 %}
                                {% for category in categories %}
                                    <option value=\"{{ category.id }}\" {% if category.id == selectedCategory %}selected{% endif %}>
                                        {% for i in 0..category.level %}&nbsp;&nbsp;{% endfor %}
                                        {% if category.level > 0 %}↳{% endif %}
                                        {{ category.name }}
                                        <span class=\"text-muted\">({{ category.productCount }})</span>
                                    </option>
                                {% endfor %}
                            {% endif %}
                        </select>
                    </div>

                    <div class=\"filter-item\">
                        <label for=\"formSelect\"><i class=\"fas fa-capsules text-primary me-1\"></i> Forme</label>
                        <select name=\"form\" id=\"formSelect\" class=\"form-select\">
                            <option value=\"\">Toutes les formes</option>
                            {% if forms|default([])|length > 0 %}
                                {% for form in forms %}
                                    <option value=\"{{ form }}\" {% if selectedForm == form %}selected{% endif %}>{{ form }}</option>
                                {% endfor %}
                            {% endif %}
                        </select>
                    </div>

                    <div class=\"filter-item\">
                        <label for=\"dosageInput\"><i class=\"fas fa-weight text-primary me-1\"></i> Dosage</label>
                        <input type=\"text\" name=\"dosage\" id=\"dosageInput\" class=\"form-control\" 
                               placeholder=\"ex: 500mg, 10ml...\" value=\"{{ selectedDosage|default('') }}\">
                    </div>

                    <div class=\"filter-item\" style=\"min-width: 150px; flex: 0.5;\">
                        <div class=\"prescription-check\">
                            <input type=\"checkbox\" name=\"prescription_required\" id=\"prescriptionCheck\" 
                                   value=\"1\" {{ prescriptionRequired == '1' ? 'checked' : '' }}>
                            <label for=\"prescriptionCheck\">
                                <i class=\"fas fa-prescription-bottle\"></i> Ordonnance
                            </label>
                        </div>
                    </div>

                    <div class=\"filter-actions\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-filter\"></i> Filtrer
                        </button>
                        <a href=\"{{ path('marketplace_pharmacy_search', {
                            mode: 'product', 
                            country: selectedCountry, 
                            city: selectedCity, 
                            pharmacy: selectedPharmacy
                        }) }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-eraser\"></i> Effacer
                        </a>
                    </div>
                </form>

                <div class=\"filter-status\">
                    {% if filterApplied|default(false) %}
                        <span class=\"applied\"><i class=\"fas fa-check-circle\"></i> Filtres appliqués</span>
                    {% else %}
                        <span><i class=\"fas fa-info-circle\"></i> Tous les produits sont affichés</span>
                    {% endif %}
                </div>

                {% set hasActiveFilters = selectedCategory or selectedForm or selectedDosage or prescriptionRequired is not null %}
                {% if hasActiveFilters %}
                    <div class=\"active-filters\">
                        <span class=\"text-muted\" style=\"font-size: 0.85rem; font-weight: 500;\">Filtres actifs :</span>
                        {% if selectedCategory %}
                            {% set categoryName = '' %}
                            {% for cat in categories %}
                                {% if cat.id == selectedCategory %}{% set categoryName = cat.name %}{% endif %}
                            {% endfor %}
                            <span class=\"filter-tag\">
                                <i class=\"fas fa-tag\"></i> {{ categoryName }}
                                <a href=\"{{ path('marketplace_pharmacy_search', {
                                    mode: 'product', 
                                    country: selectedCountry, 
                                    city: selectedCity, 
                                    pharmacy: selectedPharmacy,
                                    form: selectedForm,
                                    dosage: selectedDosage,
                                    prescription_required: prescriptionRequired,
                                    filter_applied: 1
                                }) }}\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        {% endif %}
                        {% if selectedForm %}
                            <span class=\"filter-tag\">
                                <i class=\"fas fa-capsules\"></i> {{ selectedForm }}
                                <a href=\"{{ path('marketplace_pharmacy_search', {
                                    mode: 'product', 
                                    country: selectedCountry, 
                                    city: selectedCity, 
                                    pharmacy: selectedPharmacy,
                                    category: selectedCategory,
                                    dosage: selectedDosage,
                                    prescription_required: prescriptionRequired,
                                    filter_applied: 1
                                }) }}\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        {% endif %}
                        {% if selectedDosage %}
                            <span class=\"filter-tag\">
                                <i class=\"fas fa-weight\"></i> {{ selectedDosage }}
                                <a href=\"{{ path('marketplace_pharmacy_search', {
                                    mode: 'product', 
                                    country: selectedCountry, 
                                    city: selectedCity, 
                                    pharmacy: selectedPharmacy,
                                    category: selectedCategory,
                                    form: selectedForm,
                                    prescription_required: prescriptionRequired,
                                    filter_applied: 1
                                }) }}\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        {% endif %}
                        {% if prescriptionRequired == '1' %}
                            <span class=\"filter-tag\">
                                <i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise
                                <a href=\"{{ path('marketplace_pharmacy_search', {
                                    mode: 'product', 
                                    country: selectedCountry, 
                                    city: selectedCity, 
                                    pharmacy: selectedPharmacy,
                                    category: selectedCategory,
                                    form: selectedForm,
                                    dosage: selectedDosage,
                                    filter_applied: 1
                                }) }}\" class=\"remove-filter\"><i class=\"fas fa-times\"></i></a>
                            </span>
                        {% endif %}
                    </div>
                {% endif %}
            </div>

            {# Sélecteur de produit #}
            <div class=\"product-select-container\">
                <label class=\"form-label fw-semibold\">
                    <i class=\"fas fa-box text-primary me-1\"></i> Produits disponibles
                    <span class=\"badge bg-primary ms-2\">{{ products|length }}</span>
                </label>
                
                {% if products|length > 0 %}
                    <select id=\"productSelect\" class=\"form-control\">
                        <option value=\"\">-- Sélectionnez un produit --</option>
                        {% for product in products %}
                            <option value=\"{{ product.id }}\" 
                                    data-name=\"{{ product.name }}\"
                                    data-category=\"{{ product.category ? product.category.name : 'Non catégorisé' }}\"
                                    data-price=\"{{ product.salePrice|number_format(0, ',', ' ') }} FCFA\"
                                    data-stock=\"{{ product.stockQuantity|default(0) }}\"
                                    data-prescription=\"{{ product.prescriptionRequired ? 'true' : 'false' }}\"
                                    data-form=\"{{ product.form|default('') }}\"
                                    data-dosage=\"{{ product.dosage|default('') }}\"
                                    data-unit=\"{{ product.unit|default('') }}\"
                                    data-description=\"{{ product.description|default('') }}\"
                                    data-barcode=\"{{ product.barcode|default('') }}\">
                                {{ product.name }} 
                                {% if product.form %} - {{ product.form }}{% endif %}
                                {% if product.dosage %} ({{ product.dosage }}){% endif %}
                            </option>
                        {% endfor %}
                    </select>
                {% else %}
                    <div class=\"text-center py-4\">
                        <i class=\"fas fa-box-open\" style=\"font-size: 2rem; color: var(--gray-300); display: block; margin-bottom: 0.5rem;\"></i>
                        <p class=\"text-muted\">Aucun produit disponible dans cette pharmacie.</p>
                    </div>
                {% endif %}
            </div>

        {% elseif selectedCountry and selectedCity %}
            <div class=\"empty-state\">
                <i class=\"fas fa-store\"></i>
                <h4>Sélectionnez une pharmacie</h4>
                <p class=\"text-muted\">Pour rechercher des produits, veuillez sélectionner une pharmacie dans la liste ci-dessus.</p>
                <a href=\"{{ path('marketplace_pharmacy_search', {mode: 'product', country: selectedCountry, city: selectedCity}) }}\" class=\"btn btn-primary mt-3\">
                    <i class=\"fas fa-undo me-1\"></i> Actualiser
                </a>
            </div>
        {% else %}
            <div class=\"empty-state\">
                <i class=\"fas fa-search-location\"></i>
                <h4>Sélectionnez un pays et une ville</h4>
                <p class=\"text-muted\">Pour rechercher des produits, veuillez d'abord sélectionner un pays, une ville, puis une pharmacie.</p>
            </div>
        {% endif %}
    {% endif %}
</div>

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
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

<script>
\$(document).ready(function() {
    let currentMode = '{{ mode }}';
    let selectedCountry = '{{ selectedCountry }}';
    let selectedCity = '{{ selectedCity }}';
    let selectedPharmacy = '{{ selectedPharmacy }}';

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
    {% if products|length > 0 %}
    const productSelect = document.getElementById('productSelect');
    if (productSelect && typeof \$ !== 'undefined' && typeof \$.fn.select2 !== 'undefined') {
        console.log('📦 Initialisation du select2 produit avec', {{ products|length }}, 'produits');
        
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
    {% endif %}

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
{% endblock %}", "marketplace/pharmacy/search.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\search.html.twig");
    }
}
