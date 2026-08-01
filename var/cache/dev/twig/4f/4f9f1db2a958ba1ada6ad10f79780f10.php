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

/* marketplace/cart/index.html.twig */
class __TwigTemplate_99a8ca0e1f81399adb2ed372add74bf2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/cart/index.html.twig"));

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

        yield "Mon Panier - HMA Marketplace";
        
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

    .cart-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .cart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .cart-header h1 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .cart-header h1 .badge {
        font-size: 0.9rem;
        background: var(--primary-gradient);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
    }

    .cart-empty {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 2px dashed #e5e7eb;
    }

    .cart-empty i {
        font-size: 4rem;
        color: #94a3b8;
        margin-bottom: 1rem;
    }

    .cart-empty h3 {
        color: #0f172a;
        font-weight: 600;
    }

    .cart-empty p {
        color: #94a3b8;
        margin-bottom: 1.5rem;
    }

    .cart-grid {
        display: grid;
        grid-template-columns: 1fr 380px;
        gap: 2rem;
    }

    @media (max-width: 992px) {
        .cart-grid {
            grid-template-columns: 1fr;
        }
    }

    .cart-items-card {
        background: white;
        border-radius: var(--card-radius);
        box-shadow: var(--card-shadow);
        overflow: hidden;
    }

    .cart-item {
        display: grid;
        grid-template-columns: 100px 1fr auto;
        gap: 1rem;
        padding: 1.25rem;
        border-bottom: 1px solid #f1f5f9;
        transition: background 0.2s ease;
        align-items: center;
    }

    .cart-item:last-child {
        border-bottom: none;
    }

    .cart-item:hover {
        background: #f8fafc;
    }

    .cart-item-image {
        width: 100px;
        height: 100px;
        border-radius: 12px;
        overflow: hidden;
        background: #f1f5f9;
        flex-shrink: 0;
        position: relative;
        cursor: pointer;
    }

    .cart-item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cart-item-image .placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        font-size: 2rem;
        background: #f1f5f9;
    }

    .cart-item-details {
        flex: 1;
        min-width: 0;
    }

    .cart-item-details .item-name {
        font-weight: 600;
        color: #0f172a;
        margin-bottom: 0.25rem;
        font-size: 1rem;
    }

    .cart-item-details .item-name a {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .cart-item-details .item-name a:hover {
        color: var(--primary-color);
    }

    .cart-item-details .item-meta {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex-wrap: wrap;
        font-size: 0.85rem;
        color: #64748b;
    }

    .cart-item-details .item-meta .unit {
        background: #f1f5f9;
        padding: 0.1rem 0.5rem;
        border-radius: 4px;
        font-size: 0.7rem;
    }

    .cart-item-details .promotion-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        font-size: 0.7rem;
        padding: 0.15rem 0.6rem;
        border-radius: 50px;
        background: #dcfce7;
        color: #16a34a;
        font-weight: 600;
    }

    .cart-item-details .promotion-badge i {
        font-size: 0.6rem;
    }

    .note-section {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-top: 0.5rem;
        flex-wrap: wrap;
    }

    .note-display {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        background: #f1f5f9;
        border-radius: 6px;
        font-size: 0.8rem;
        color: #475569;
        max-width: 280px;
    }

    .note-display i {
        color: var(--primary-color);
        font-size: 0.7rem;
        flex-shrink: 0;
    }

    .note-display .note-text {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: #0f172a;
    }

    .note-display .note-empty {
        color: #94a3b8;
        font-style: italic;
    }

    .btn-note {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.2rem 0.6rem;
        border: 1px solid #e5e7eb;
        border-radius: 6px;
        background: white;
        font-size: 0.7rem;
        color: #64748b;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-note:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
    }

    .btn-note i {
        font-size: 0.6rem;
    }

    .btn-note .badge-edit {
        background: var(--primary-gradient);
        color: white;
        padding: 0.05rem 0.4rem;
        border-radius: 50px;
        font-size: 0.6rem;
        font-weight: 600;
    }

    .cart-item-prices {
        text-align: right;
        flex-shrink: 0;
    }

    .cart-item-prices .original-price {
        font-size: 0.8rem;
        color: #94a3b8;
        text-decoration: line-through;
    }

    .cart-item-prices .current-price {
        font-size: 1.1rem;
        font-weight: 700;
        color: #0f172a;
    }

    .cart-item-prices .discount-amount {
        font-size: 0.75rem;
        color: #16a34a;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: #f1f5f9;
        border-radius: 50px;
        padding: 0.2rem;
    }

    .quantity-control button {
        width: 32px;
        height: 32px;
        border: none;
        border-radius: 50%;
        background: white;
        color: #0f172a;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .quantity-control button:hover {
        background: var(--primary-color);
        color: white;
    }

    .quantity-control button:active {
        transform: scale(0.9);
    }

    .quantity-control input {
        width: 40px;
        height: 32px;
        border: none;
        background: transparent;
        text-align: center;
        font-weight: 600;
        font-size: 0.95rem;
        color: #0f172a;
        outline: none;
    }

    .quantity-control input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    .quantity-control input[type=number] {
        -moz-appearance: textfield;
    }

    .remove-item {
        background: none;
        border: none;
        color: #94a3b8;
        font-size: 1.2rem;
        cursor: pointer;
        transition: all 0.2s ease;
        padding: 0.25rem;
    }

    .remove-item:hover {
        color: #ef4444;
        transform: scale(1.1);
    }

    .remove-item:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }

    .cart-summary {
        background: white;
        border-radius: var(--card-radius);
        box-shadow: var(--card-shadow);
        padding: 1.5rem;
        position: sticky;
        top: 2rem;
        height: fit-content;
    }

    .cart-summary h3 {
        font-size: 1.2rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #f1f5f9;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        padding: 0.5rem 0;
        font-size: 0.95rem;
        color: #475569;
    }

    .summary-row.total {
        font-size: 1.2rem;
        font-weight: 700;
        color: #0f172a;
        border-top: 2px solid #f1f5f9;
        padding-top: 1rem;
        margin-top: 0.5rem;
    }

    .summary-row.discount {
        color: #16a34a;
    }

    .btn-checkout {
        width: 100%;
        padding: 0.9rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .btn-checkout:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(4, 99, 241, 0.3);
    }

    .btn-checkout:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }

    .btn-continue-shopping {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s ease;
        margin-top: 1rem;
    }

    .btn-continue-shopping:hover {
        color: var(--primary-dark);
    }

    .btn-continue-shopping i {
        transition: transform 0.2s ease;
    }

    .btn-continue-shopping:hover i {
        transform: translateX(-4px);
    }

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

    .note-modal .modal-content {
        border-radius: var(--card-radius);
        border: none;
    }

    .note-modal .modal-header {
        border-bottom: 2px solid #f1f5f9;
        padding: 1.25rem 1.5rem;
    }

    .note-modal .modal-header .modal-title {
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .note-modal .modal-body {
        padding: 1.5rem;
    }

    .note-modal .modal-body .note-product {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: #f8fafc;
        border-radius: 12px;
        margin-bottom: 1.5rem;
    }

    .note-modal .modal-body .note-product img {
        width: 70px;
        height: 70px;
        border-radius: 8px;
        object-fit: cover;
        background: #f1f5f9;
    }

    .note-modal .modal-body .note-product .product-info {
        flex: 1;
    }

    .note-modal .modal-body .note-product .product-name {
        font-weight: 600;
        color: #0f172a;
        font-size: 1rem;
    }

    .note-modal .modal-body .note-product .product-price {
        font-size: 0.85rem;
        color: #64748b;
    }

    .note-modal .modal-body .note-product .product-quantity {
        font-size: 0.8rem;
        color: #94a3b8;
    }

    .note-modal .modal-body .note-textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        font-size: 0.95rem;
        resize: vertical;
        min-height: 100px;
        transition: border-color 0.2s ease;
        font-family: inherit;
    }

    .note-modal .modal-body .note-textarea:focus {
        border-color: var(--primary-color);
        outline: none;
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.1);
    }

    .note-modal .modal-body .note-char-count {
        text-align: right;
        font-size: 0.75rem;
        color: #94a3b8;
        margin-top: 0.3rem;
    }

    .note-modal .modal-body .debug-info {
        margin-top: 1rem;
        padding: 0.75rem;
        background: #fff3cd;
        border-radius: 8px;
        font-size: 0.8rem;
        display: none;
        border: 1px solid #ffc107;
    }

    .note-modal .modal-body .debug-info strong {
        color: #856404;
    }

    .note-modal .modal-body .debug-info p {
        margin: 0.25rem 0 0 0;
        color: #856404;
        word-break: break-all;
    }

    .note-modal .modal-footer {
        border-top: 2px solid #f1f5f9;
        padding: 1rem 1.5rem;
    }

    /* ==================== MODAL CONFIRMATION SUPPRESSION ==================== */
    .delete-modal .modal-content {
        border-radius: var(--card-radius);
        border: none;
    }

    .delete-modal .modal-header {
        border-bottom: 2px solid #f1f5f9;
        padding: 1.25rem 1.5rem;
    }

    .delete-modal .modal-header .modal-title {
        font-weight: 700;
        color: #0f172a;
    }

    .delete-modal .modal-body {
        padding: 1.5rem;
        text-align: center;
    }

    .delete-modal .modal-body .delete-icon {
        font-size: 4rem;
        color: #ef4444;
        margin-bottom: 1rem;
    }

    .delete-modal .modal-body .delete-text {
        color: #475569;
        margin-bottom: 0.5rem;
    }

    .delete-modal .modal-body .delete-item-name {
        font-weight: 700;
        color: #0f172a;
    }

    .delete-modal .modal-footer {
        border-top: 2px solid #f1f5f9;
        padding: 1rem 1.5rem;
    }

    /* ==================== MODAL CHECKOUT ==================== */
    .checkout-modal .modal-content {
        border-radius: var(--card-radius);
        border: none;
    }

    .checkout-modal .modal-header {
        border-bottom: 2px solid #f1f5f9;
        padding: 1.25rem 1.5rem;
    }

    .checkout-modal .modal-header .modal-title {
        font-weight: 700;
        color: #0f172a;
    }

    .checkout-modal .modal-body {
        padding: 1.5rem;
    }

    .checkout-modal .modal-footer {
        border-top: 2px solid #f1f5f9;
        padding: 1rem 1.5rem;
    }

    .checkout-modal .order-summary-item {
        display: flex;
        justify-content: space-between;
        padding: 0.5rem 0;
        border-bottom: 1px solid #f1f5f9;
        font-size: 0.9rem;
    }

    .checkout-modal .order-summary-item:last-child {
        border-bottom: none;
    }

    .checkout-modal .order-summary-total {
        display: flex;
        justify-content: space-between;
        padding-top: 1rem;
        margin-top: 0.5rem;
        border-top: 2px solid #e5e7eb;
        font-weight: 700;
        font-size: 1.1rem;
        color: #0f172a;
    }

    @media (max-width: 768px) {
        .cart-item {
            grid-template-columns: 80px 1fr;
            gap: 0.75rem;
            padding: 1rem;
        }

        .cart-item-image {
            width: 80px;
            height: 80px;
        }

        .cart-item-prices {
            grid-column: 1 / -1;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 1rem;
            justify-content: space-between;
        }

        .quantity-control {
            width: fit-content;
        }

        .cart-summary {
            position: static;
        }

        .cart-header h1 {
            font-size: 1.4rem;
        }

        .note-section {
            flex-wrap: wrap;
        }

        .note-display {
            max-width: 180px;
            font-size: 0.7rem;
        }

        .btn-note {
            font-size: 0.65rem;
        }

        .checkout-modal .modal-dialog {
            margin: 0.5rem;
        }
    }

    @media (max-width: 480px) {
        .cart-item {
            grid-template-columns: 60px 1fr;
            padding: 0.75rem;
        }

        .cart-item-image {
            width: 60px;
            height: 60px;
        }

        .cart-item-details .item-name {
            font-size: 0.9rem;
        }

        .quantity-control button {
            width: 28px;
            height: 28px;
            font-size: 0.8rem;
        }

        .quantity-control input {
            width: 32px;
            font-size: 0.85rem;
        }

        .cart-item-prices .current-price {
            font-size: 0.95rem;
        }

        .toast {
            min-width: auto;
            max-width: 90vw;
            padding: 0.75rem 1rem;
        }

        .note-display {
            max-width: 140px;
            font-size: 0.65rem;
        }

        .note-modal .modal-body .note-product {
            flex-wrap: wrap;
        }

        .note-modal .modal-body .note-product img {
            width: 50px;
            height: 50px;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 823
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

        // line 824
        yield "<div class=\"cart-container\">
    <div class=\"cart-header\">
        <h1>
            <i class=\"fas fa-shopping-cart text-primary\"></i>
            Mon Panier
            <span class=\"badge\">";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemsCount"]) || array_key_exists("itemsCount", $context) ? $context["itemsCount"] : (function () { throw new RuntimeError('Variable "itemsCount" does not exist.', 829, $this->source); })()), "html", null, true);
        yield "</span>
        </h1>
        <a href=\"";
        // line 831
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
        yield "\" class=\"btn-continue-shopping\">
            <i class=\"fas fa-arrow-left\"></i>
            Continuer mes achats
        </a>
    </div>

    ";
        // line 837
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 837, $this->source); })())) > 0)) {
            // line 838
            yield "        <div class=\"cart-grid\">
            <div class=\"cart-items-card\">
                ";
            // line 840
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 840, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 841
                yield "                    <div class=\"cart-item\" data-cart-item-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 841), "html", null, true);
                yield "\">
                        <div class=\"cart-item-image\" onclick=\"window.location.href='";
                // line 842
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 842), "id", [], "any", false, false, false, 842)]), "html", null, true);
                yield "'\">
                            ";
                // line 843
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 843)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 844
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 844), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 844), "name", [], "any", false, false, false, 844), "html", null, true);
                    yield "\" loading=\"lazy\">
                            ";
                } else {
                    // line 846
                    yield "                                <div class=\"placeholder\">
                                    <i class=\"fas fa-box\"></i>
                                </div>
                            ";
                }
                // line 850
                yield "                        </div>

                        <div class=\"cart-item-details\">
                            <div class=\"item-name\">
                                <a href=\"";
                // line 854
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 854), "id", [], "any", false, false, false, 854)]), "html", null, true);
                yield "\">
                                    ";
                // line 855
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 855), "name", [], "any", false, false, false, 855), "html", null, true);
                yield "
                                </a>
                            </div>
                            <div class=\"item-meta\">
                                ";
                // line 859
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 859), "unit", [], "any", false, false, false, 859)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 860
                    yield "                                    <span class=\"unit\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 860), "unit", [], "any", false, false, false, 860), "html", null, true);
                    yield "</span>
                                ";
                }
                // line 862
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 862), "has_promotion", [], "any", false, false, false, 862)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 863
                    yield "                                    <span class=\"promotion-badge\">
                                        <i class=\"fas fa-tag\"></i>
                                        ";
                    // line 865
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 865), "promotion", [], "any", false, false, false, 865), "name", [], "any", false, false, false, 865), "html", null, true);
                    yield "
                                    </span>
                                ";
                }
                // line 868
                yield "                            </div>

                            <div class=\"note-section\">
                                <div class=\"note-display\">
                                    <i class=\"fas fa-pencil-alt\"></i>
                                    ";
                // line 873
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 873)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 874
                    yield "                                        <span class=\"note-text\">
                                            ";
                    // line 875
                    $context["words"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 875), " "), 0, 20);
                    // line 876
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["words"]) || array_key_exists("words", $context) ? $context["words"] : (function () { throw new RuntimeError('Variable "words" does not exist.', 876, $this->source); })()), " "), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["words"]) || array_key_exists("words", $context) ? $context["words"] : (function () { throw new RuntimeError('Variable "words" does not exist.', 876, $this->source); })())) >= 20)) {
                        yield "...";
                    }
                    // line 877
                    yield "                                        </span>
                                    ";
                } else {
                    // line 879
                    yield "                                        <span class=\"note-empty\">Ajouter une note</span>
                                    ";
                }
                // line 881
                yield "                                </div>
                                <button class=\"btn-note\" 
                                        data-cart-item-id=\"";
                // line 883
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 883), "html", null, true);
                yield "\"
                                        data-note=\"";
                // line 884
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", true, true, false, 884)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 884), "")) : ("")), "html", null, true);
                yield "\" 
                                        data-product=\"";
                // line 885
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 885), "name", [], "any", false, false, false, 885), "html", null, true);
                yield "\" 
                                        data-product-id=\"";
                // line 886
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 886), "id", [], "any", false, false, false, 886), "html", null, true);
                yield "\" 
                                        data-image=\"";
                // line 887
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", true, true, false, 887)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 887), "")) : ("")), "html", null, true);
                yield "\"
                                        data-price=\"";
                // line 888
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discounted_price", [], "any", false, false, false, 888), "html", null, true);
                yield "\" 
                                        data-quantity=\"";
                // line 889
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 889), "html", null, true);
                yield "\">
                                    <i class=\"fas fa-edit\"></i>
                                    <span>Modifier</span>
                                    <span class=\"badge-edit\">✎</span>
                                </button>
                            </div>
                        </div>

                        <div class=\"cart-item-prices\">
                            <div class=\"quantity-control\">
                                <button class=\"qty-decrease\" data-cart-item-id=\"";
                // line 899
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 899), "html", null, true);
                yield "\">
                                    <i class=\"fas fa-minus\"></i>
                                </button>
                                <input type=\"number\" 
                                       class=\"qty-input\" 
                                       value=\"";
                // line 904
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 904), "html", null, true);
                yield "\" 
                                       min=\"1\"
                                       data-cart-item-id=\"";
                // line 906
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 906), "html", null, true);
                yield "\">
                                <button class=\"qty-increase\" data-cart-item-id=\"";
                // line 907
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 907), "html", null, true);
                yield "\">
                                    <i class=\"fas fa-plus\"></i>
                                </button>
                            </div>
                            <div>
                                ";
                // line 912
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit_price", [], "any", false, false, false, 912) > CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discounted_price", [], "any", false, false, false, 912))) {
                    // line 913
                    yield "                                    <div class=\"original-price\">
                                        ";
                    // line 914
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit_price", [], "any", false, false, false, 914), 0, ",", " "), "html", null, true);
                    yield " FCFA
                                    </div>
                                ";
                }
                // line 917
                yield "                                <div class=\"current-price\">
                                    ";
                // line 918
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discounted_price", [], "any", false, false, false, 918), 0, ",", " "), "html", null, true);
                yield " FCFA
                                </div>
                                ";
                // line 920
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discount", [], "any", false, false, false, 920) > 0)) {
                    // line 921
                    yield "                                    <div class=\"discount-amount\">
                                        - ";
                    // line 922
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discount", [], "any", false, false, false, 922), 0, ",", " "), "html", null, true);
                    yield " FCFA
                                    </div>
                                ";
                }
                // line 925
                yield "                            </div>
                            <button class=\"remove-item\" 
                                    data-cart-item-id=\"";
                // line 927
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 927), "html", null, true);
                yield "\"
                                    data-product-name=\"";
                // line 928
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 928), "name", [], "any", false, false, false, 928), "html", null, true);
                yield "\"
                                    data-product-id=\"";
                // line 929
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 929), "id", [], "any", false, false, false, 929), "html", null, true);
                yield "\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 935
            yield "            </div>

            <div class=\"cart-summary\">
                <h3>Résumé de la commande</h3>
                
                <div class=\"summary-row\">
                    <span>Sous-total</span>
                    <span>";
            // line 942
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 942, $this->source); })()), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>
                
                ";
            // line 945
            if (((isset($context["totalDiscount"]) || array_key_exists("totalDiscount", $context) ? $context["totalDiscount"] : (function () { throw new RuntimeError('Variable "totalDiscount" does not exist.', 945, $this->source); })()) > 0)) {
                // line 946
                yield "                    <div class=\"summary-row discount\">
                        <span>Remise</span>
                        <span>- ";
                // line 948
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalDiscount"]) || array_key_exists("totalDiscount", $context) ? $context["totalDiscount"] : (function () { throw new RuntimeError('Variable "totalDiscount" does not exist.', 948, $this->source); })()), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                    </div>
                ";
            }
            // line 951
            yield "                
                <div class=\"summary-row total\">
                    <span>Total</span>
                    <span>";
            // line 954
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["grandTotal"]) || array_key_exists("grandTotal", $context) ? $context["grandTotal"] : (function () { throw new RuntimeError('Variable "grandTotal" does not exist.', 954, $this->source); })()), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>

                <button class=\"btn-checkout\" id=\"btnCheckout\">
                    <i class=\"fas fa-credit-card\"></i>
                    Valider la commande
                </button>
            </div>
        </div>
    ";
        } else {
            // line 964
            yield "        <div class=\"cart-empty\">
            <i class=\"fas fa-shopping-cart\"></i>
            <h3>Votre panier est vide</h3>
            <p>Commencez vos achats en parcourant nos produits</p>
            <a href=\"";
            // line 968
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
            yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-arrow-left me-2\"></i>
                Découvrir nos produits
            </a>
        </div>
    ";
        }
        // line 974
        yield "</div>

<!-- ==================== MODAL NOTE ==================== -->
<div class=\"modal fade note-modal\" id=\"noteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-pencil-alt text-primary\"></i>
                    Modifier la note
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"note-product\">
                    <img id=\"modalNoteImage\" src=\"\" alt=\"Produit\" style=\"display:none;\">
                    <div class=\"product-info\">
                        <div class=\"product-name\" id=\"modalNoteProductName\"></div>
                        <div class=\"product-price\" id=\"modalNoteProductPrice\"></div>
                        <div class=\"product-quantity\" id=\"modalNoteProductQuantity\"></div>
                    </div>
                </div>
                
                <label for=\"modalNoteTextarea\" class=\"form-label fw-bold small\">Votre note</label>
                <textarea class=\"note-textarea\" id=\"modalNoteTextarea\" placeholder=\"Écrivez votre note ici...\" maxlength=\"500\"></textarea>
                <div class=\"note-char-count\">
                    <span id=\"modalNoteCharCount\">0</span> / 500 caractères
                </div>

                <div class=\"debug-info\" id=\"debugInfo\">
                    <strong>🔍 Debug:</strong>
                    <p id=\"debugMessage\">En attente...</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i>Annuler
                </button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"modalBtnSaveNote\">
                    <i class=\"fas fa-save me-2\"></i>Enregistrer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== MODAL CONFIRMATION SUPPRESSION ==================== -->
<div class=\"modal fade delete-modal\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle text-danger\"></i>
                    Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"delete-icon\">
                    <i class=\"fas fa-trash-alt\"></i>
                </div>
                <h5 class=\"fw-bold\">Supprimer cet article ?</h5>
                <p class=\"delete-text\">
                    Êtes-vous sûr de vouloir supprimer <span class=\"delete-item-name\" id=\"deleteItemName\"></span> de votre panier ?
                </p>
                <p class=\"text-muted small\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i>Annuler
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"btnConfirmDelete\">
                    <i class=\"fas fa-trash-alt me-2\"></i>Supprimer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== MODAL CHECKOUT ==================== -->
<div class=\"modal fade checkout-modal\" id=\"checkoutModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-check-circle text-success me-2\"></i>
                    Valider votre commande
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-7\">
                        <h6 class=\"fw-bold mb-3\">Informations de livraison</h6>
                        <form id=\"checkoutForm\">
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Téléphone <span class=\"text-danger\">*</span></label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">+229</span>
                                    <input type=\"tel\" class=\"form-control\" id=\"phone\" 
                                           placeholder=\"97 00 00 00\" required>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" 
                                       value=\"";
        // line 1081
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1081, $this->source); })()), "user", [], "any", false, false, false, 1081), "email", [], "any", false, false, false, 1081), "html", null, true);
        yield "\" placeholder=\"votre@email.com\">
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Adresse de livraison <span class=\"text-danger\">*</span></label>
                                <input type=\"text\" class=\"form-control\" id=\"address\" 
                                       placeholder=\"Ex: Quartier, Rue, Numéro\" required>
                            </div>
                            
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold small\">Ville</label>
                                    <input type=\"text\" class=\"form-control\" id=\"city\" 
                                           placeholder=\"Cotonou, Porto-Novo...\">
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold small\">Code postal</label>
                                    <input type=\"text\" class=\"form-control\" id=\"zipcode\" 
                                           placeholder=\"Ex: 01BP...\">
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Pays</label>
                                <select class=\"form-select\" id=\"country\">
                                    <option value=\"Bénin\" selected>Bénin</option>
                                    <option value=\"Togo\">Togo</option>
                                    <option value=\"Côte d'Ivoire\">Côte d'Ivoire</option>
                                    <option value=\"Sénégal\">Sénégal</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    
                    <div class=\"col-md-5\">
                        <h6 class=\"fw-bold mb-3\">Récapitulatif</h6>
                        <div id=\"orderSummary\" class=\"bg-light p-3 rounded-3\">
                            <!-- Rempli par JS -->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i>Annuler
                </button>
                <button type=\"button\" class=\"btn btn-success\" id=\"btnPay\">
                    <i class=\"fas fa-credit-card me-2\"></i>
                    Effectuer le paiement
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== TOAST CONTAINER ==================== -->
<div class=\"toast-container\" id=\"toastContainer\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1140
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

        // line 1141
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('✅ DOM fully loaded and parsed');

    var cart = {
        items: ";
        // line 1147
        yield json_encode((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1147, $this->source); })()));
        yield ",
        subtotal: ";
        // line 1148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 1148, $this->source); })()), "html", null, true);
        yield ",
        totalDiscount: ";
        // line 1149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalDiscount"]) || array_key_exists("totalDiscount", $context) ? $context["totalDiscount"] : (function () { throw new RuntimeError('Variable "totalDiscount" does not exist.', 1149, $this->source); })()), "html", null, true);
        yield ",
        grandTotal: ";
        // line 1150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["grandTotal"]) || array_key_exists("grandTotal", $context) ? $context["grandTotal"] : (function () { throw new RuntimeError('Variable "grandTotal" does not exist.', 1150, $this->source); })()), "html", null, true);
        yield "
    };

    var currentCartItemId = null;
    var currentDeleteCartItemId = null;

    function debugLog(message, data) {
        console.log('🔍 DEBUG:', message, data || '');
        var debugDiv = document.getElementById('debugInfo');
        var debugMsg = document.getElementById('debugMessage');
        if (debugDiv && debugMsg) {
            debugDiv.style.display = 'block';
            debugMsg.textContent = message + (data ? ' - ' + JSON.stringify(data) : '');
        }
    }

    // ==================== OPEN NOTE MODAL ====================
    function openNoteModal(button) {
        console.log('✅ openNoteModal called');
        
        var cartItemId = button.dataset.cartItemId || '';
        var note = button.dataset.note || '';
        var productName = button.dataset.product || 'Produit';
        var productId = button.dataset.productId || '';
        var image = button.dataset.image || '';
        var price = parseFloat(button.dataset.price) || 0;
        var quantity = parseInt(button.dataset.quantity) || 1;
        
        console.log('📦 CartItem ID:', cartItemId);
        console.log('📝 Note:', note);
        
        currentCartItemId = cartItemId;
        debugLog('Ouverture du modal pour: ' + productName + ' (CartItem ID: ' + cartItemId + ')');
        
        var productNameEl = document.getElementById('modalNoteProductName');
        var productPriceEl = document.getElementById('modalNoteProductPrice');
        var productQuantityEl = document.getElementById('modalNoteProductQuantity');
        var productImageEl = document.getElementById('modalNoteImage');
        var textarea = document.getElementById('modalNoteTextarea');
        var charCount = document.getElementById('modalNoteCharCount');
        
        if (productNameEl) productNameEl.textContent = productName;
        if (productPriceEl) productPriceEl.textContent = price.toLocaleString('fr-FR') + ' FCFA / unité';
        if (productQuantityEl) productQuantityEl.textContent = 'Quantité: ' + quantity;
        
        if (productImageEl) {
            if (image) {
                productImageEl.src = image;
                productImageEl.style.display = 'block';
            } else {
                productImageEl.style.display = 'none';
            }
        }
        
        if (textarea) {
            textarea.value = note;
            if (charCount) charCount.textContent = note.length;
            setTimeout(function() {
                textarea.focus();
                textarea.setSelectionRange(textarea.value.length, textarea.value.length);
            }, 400);
        }
        
        try {
            var modal = new bootstrap.Modal(document.getElementById('noteModal'));
            modal.show();
            console.log('✅ Modal shown successfully');
        } catch (e) {
            console.error('❌ Error showing modal:', e);
        }
    }

    window.openNoteModal = openNoteModal;

    // ==================== BOUTONS NOTES ====================
    var noteButtons = document.querySelectorAll('.btn-note');
    console.log('🔘 Number of note buttons found:', noteButtons.length);
    
    noteButtons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('🖱️ Button clicked - CartItem ID:', this.dataset.cartItemId);
            openNoteModal(this);
        });
    });

    // ==================== CHARACTER COUNT ====================
    var textarea = document.getElementById('modalNoteTextarea');
    var charCount = document.getElementById('modalNoteCharCount');
    
    if (textarea && charCount) {
        textarea.addEventListener('input', function() {
            var count = this.value.length;
            charCount.textContent = count;
            if (count > 500) {
                this.value = this.value.slice(0, 500);
                charCount.textContent = 500;
            }
        });
    }

    // ==================== SAVE NOTE ====================
    var btnSave = document.getElementById('modalBtnSaveNote');
    if (btnSave) {
        btnSave.addEventListener('click', function() {
            var note = document.getElementById('modalNoteTextarea').value.trim();
            var cartItemId = currentCartItemId;
            
            if (!cartItemId) {
                showToast('Erreur: produit non identifié', 'error');
                return;
            }
            
            this.disabled = true;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Enregistrement...';
            
            var url = '/marketplace/cart/update/' + cartItemId;
            
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ notes: note })
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.success) {
                    var modal = bootstrap.Modal.getInstance(document.getElementById('noteModal'));
                    if (modal) modal.hide();
                    
                    var cartItem = document.querySelector('.cart-item[data-cart-item-id=\"' + cartItemId + '\"]');
                    if (cartItem) {
                        var noteDisplay = cartItem.querySelector('.note-display');
                        var noteText = noteDisplay ? noteDisplay.querySelector('.note-text') : null;
                        var noteEmpty = noteDisplay ? noteDisplay.querySelector('.note-empty') : null;
                        
                        if (noteDisplay) {
                            if (note && note.trim().length > 0) {
                                var words = note.split(' ').slice(0, 20);
                                var displayText = words.join(' ') + (words.length >= 20 ? '...' : '');
                                if (noteText) {
                                    noteText.textContent = displayText;
                                    noteText.style.display = 'inline';
                                }
                                if (noteEmpty) {
                                    noteEmpty.style.display = 'none';
                                }
                            } else {
                                if (noteText) {
                                    noteText.textContent = '';
                                    noteText.style.display = 'none';
                                }
                                if (noteEmpty) {
                                    noteEmpty.style.display = 'inline';
                                }
                            }
                        }
                        
                        var btnNote = cartItem.querySelector('.btn-note');
                        if (btnNote) {
                            btnNote.dataset.note = note;
                        }
                    }
                    
                    showToast('Note enregistrée avec succès', 'success');
                } else {
                    showToast(data.error || 'Erreur lors de l\\'enregistrement', 'error');
                    this.disabled = false;
                    this.innerHTML = '<i class=\"fas fa-save me-2\"></i>Enregistrer';
                }
            }.bind(this))
            .catch(function() {
                showToast('Erreur de connexion', 'error');
                this.disabled = false;
                this.innerHTML = '<i class=\"fas fa-save me-2\"></i>Enregistrer';
            }.bind(this));
        });
    }

    // ==================== DELETE ITEM - OUVERTURE MODAL ====================
    var deleteButtons = document.querySelectorAll('.remove-item');
    console.log('🔘 Number of delete buttons found:', deleteButtons.length);
    
    deleteButtons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var cartItemId = this.dataset.cartItemId;
            var productName = this.dataset.productName || 'cet article';
            
            console.log('🗑️ Delete button clicked - CartItem ID:', cartItemId);
            
            // Stocker l'ID pour la confirmation
            currentDeleteCartItemId = cartItemId;
            
            // Mettre à jour le nom du produit dans le modal
            document.getElementById('deleteItemName').textContent = productName;
            
            // Ouvrir le modal de confirmation
            try {
                var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
                modal.show();
                console.log('✅ Delete modal shown');
            } catch (e) {
                console.error('❌ Error showing delete modal:', e);
            }
        });
    });

    // ==================== CONFIRMATION SUPPRESSION ====================
    var btnConfirmDelete = document.getElementById('btnConfirmDelete');
    if (btnConfirmDelete) {
        btnConfirmDelete.addEventListener('click', function() {
            var cartItemId = currentDeleteCartItemId;
            
            if (!cartItemId) {
                showToast('Erreur: article non identifié', 'error');
                return;
            }
            
            // Désactiver le bouton et afficher le chargement
            this.disabled = true;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Suppression...';
            
            var url = '/marketplace/cart/remove/' + cartItemId;
            console.log('🗑️ Sending delete request for cart item:', cartItemId);
            
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                console.log('📦 Delete response:', data);
                
                if (data.success) {
                    // Fermer le modal
                    var modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
                    if (modal) modal.hide();
                    
                    // Afficher un toast de succès
                    showToast('Article supprimé avec succès', 'success');
                    
                    // Recharger la page après un court délai
                    setTimeout(function() {
                        window.location.reload();
                    }, 800);
                } else {
                    showToast(data.error || 'Erreur lors de la suppression', 'error');
                    // Réactiver le bouton
                    this.disabled = false;
                    this.innerHTML = '<i class=\"fas fa-trash-alt me-2\"></i>Supprimer';
                }
            }.bind(this))
            .catch(function(error) {
                console.error('❌ Delete error:', error);
                showToast('Erreur de connexion', 'error');
                this.disabled = false;
                this.innerHTML = '<i class=\"fas fa-trash-alt me-2\"></i>Supprimer';
            }.bind(this));
        });
    }

    // ==================== QUANTITY CONTROLS ====================
    document.querySelectorAll('.qty-decrease').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var input = this.parentElement.querySelector('.qty-input');
            var val = parseInt(input.value) || 1;
            if (val > 1) {
                val--;
                input.value = val;
                updateQuantity(input.dataset.cartItemId, val);
            }
        });
    });

    document.querySelectorAll('.qty-increase').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var input = this.parentElement.querySelector('.qty-input');
            var val = parseInt(input.value) || 1;
            val++;
            input.value = val;
            updateQuantity(input.dataset.cartItemId, val);
        });
    });

    document.querySelectorAll('.qty-input').forEach(function(input) {
        input.addEventListener('change', function() {
            var val = parseInt(this.value) || 1;
            if (val < 1) val = 1;
            this.value = val;
            updateQuantity(this.dataset.cartItemId, val);
        });
    });

    // ==================== CHECKOUT ====================
    var btnCheckout = document.getElementById('btnCheckout');
    if (btnCheckout) {
        console.log('✅ Checkout button found');
        btnCheckout.addEventListener('click', function() {
            console.log('🖱️ Checkout button clicked');
            if (cart.items.length === 0) {
                showToast('Votre panier est vide', 'warning');
                return;
            }
            showCheckoutModal();
        });
    } else {
        console.error('❌ Checkout button not found');
    }

    // ==================== SHOW CHECKOUT MODAL ====================
    function showCheckoutModal() {
        console.log('🔄 showCheckoutModal called');
        var modalElement = document.getElementById('checkoutModal');
        var modal = new bootstrap.Modal(modalElement);
        var summary = document.getElementById('orderSummary');
        
        var html = '';
        cart.items.forEach(function(item) {
            html += `
                <div class=\"order-summary-item\">
                    <span>\${item.product.name} <span class=\"text-muted small\">x\${item.quantity}</span></span>
                    <span>\${(item.discounted_price * item.quantity).toLocaleString('fr-FR')} FCFA</span>
                </div>
            `;
        });
        html += `
            <div class=\"order-summary-total\">
                <span>Total</span>
                <span>\${cart.grandTotal.toLocaleString('fr-FR')} FCFA</span>
            </div>
        `;
        summary.innerHTML = html;
        
        modal.show();
        console.log('✅ Checkout modal shown');
    }

    // ==================== PAYMENT ====================
    var btnPay = document.getElementById('btnPay');
    if (btnPay) {
        console.log('✅ Payment button found');
        btnPay.addEventListener('click', function() {
            console.log('🖱️ Payment button clicked');
            processCheckout();
        });
    } else {
        console.error('❌ Payment button not found');
    }

    function processCheckout() {
        console.log('🔄 processCheckout called');
        var btnPay = document.getElementById('btnPay');
        var phone = document.getElementById('phone').value.trim();
        var email = document.getElementById('email').value.trim();
        var address = document.getElementById('address').value.trim();
        var city = document.getElementById('city').value.trim();
        var zipcode = document.getElementById('zipcode').value.trim();
        var country = document.getElementById('country').value;

        if (!phone) {
            showToast('Veuillez saisir votre numéro de téléphone', 'warning');
            document.getElementById('phone').focus();
            return;
        }

        if (!address) {
            showToast('Veuillez saisir votre adresse de livraison', 'warning');
            document.getElementById('address').focus();
            return;
        }

        btnPay.disabled = true;
        btnPay.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Traitement en cours...';

        var url = '";
        // line 1534
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart_checkout");
        yield "';
        console.log('🌐 Sending request to:', url);

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({
                phone: phone,
                email: email,
                address: address,
                city: city,
                zipcode: zipcode,
                country: country
            })
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            console.log('📦 Response data:', data);
            
            if (data.success) {
                if (data.payment_url) {
                    console.log('🔗 Redirecting to payment URL:', data.payment_url);
                    window.location.href = data.payment_url;
                } else {
                    showToast('Commande validée !', 'success');
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
            } else {
                showToast(data.error || 'Erreur lors de la validation', 'error');
                btnPay.disabled = false;
                btnPay.innerHTML = '<i class=\"fas fa-credit-card me-2\"></i> Effectuer le paiement';
            }
        })
        .catch(function() {
            showToast('Erreur de connexion', 'error');
            btnPay.disabled = false;
            btnPay.innerHTML = '<i class=\"fas fa-credit-card me-2\"></i> Effectuer le paiement';
        });
    }

    // ==================== QUANTITY FUNCTIONS ====================
    function updateQuantity(cartItemId, quantity) {
        var url = '/marketplace/cart/update/' + cartItemId;
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ quantity: quantity })
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data.success) {
                updateCartSummary(data);
                showToast('Panier mis à jour', 'success');
            } else {
                showToast(data.error || 'Erreur lors de la mise à jour', 'error');
            }
        })
        .catch(function() {
            showToast('Erreur de connexion', 'error');
        });
    }

    function updateCartSummary(data) {
        var badge = document.querySelector('.cart-header .badge');
        if (badge) badge.textContent = data.cartCount;
        
        var summaryRows = document.querySelectorAll('.summary-row');
        if (summaryRows.length >= 2) {
            if (data.subtotal !== undefined) {
                summaryRows[0].querySelector('span:last-child').textContent = 
                    data.subtotal.toLocaleString('fr-FR') + ' FCFA';
            }
            if (data.totalDiscount !== undefined && data.totalDiscount > 0) {
                var discountRow = summaryRows[1];
                discountRow.querySelector('span:last-child').textContent = 
                    '- ' + data.totalDiscount.toLocaleString('fr-FR') + ' FCFA';
            }
            if (data.grandTotal !== undefined) {
                var totalRow = summaryRows[summaryRows.length - 1];
                totalRow.querySelector('span:last-child').textContent = 
                    data.grandTotal.toLocaleString('fr-FR') + ' FCFA';
            }
        }
    }

    // ==================== TOAST NOTIFICATIONS ====================
    function showToast(message, type) {
        type = type || 'info';
        var container = document.getElementById('toastContainer');
        var icons = {
            success: 'fa-check-circle',
            error: 'fa-exclamation-circle',
            warning: 'fa-exclamation-triangle',
            info: 'fa-info-circle'
        };

        var toast = document.createElement('div');
        toast.className = 'toast ' + type;
        toast.innerHTML = `
            <i class=\"fas \${icons[type] || icons.info}\"></i>
            <span class=\"toast-message\">\${message}</span>
            <button onclick=\"this.closest('.toast').remove()\" style=\"background:none;border:none;color:#94a3b8;cursor:pointer;\">
                <i class=\"fas fa-times\"></i>
            </button>
        `;

        container.appendChild(toast);

        setTimeout(function() {
            toast.style.animation = 'slideOut 0.3s ease';
            setTimeout(function() {
                toast.remove();
            }, 300);
        }, 4000);
    }

    // ==================== RÉINITIALISATION APRÈS NAVIGATION ====================
    // Réinitialiser l'état des boutons de suppression si le modal est fermé sans confirmation
    document.addEventListener('hidden.bs.modal', function (event) {
        if (event.target.id === 'deleteModal') {
            var btnConfirm = document.getElementById('btnConfirmDelete');
            if (btnConfirm) {
                btnConfirm.disabled = false;
                btnConfirm.innerHTML = '<i class=\"fas fa-trash-alt me-2\"></i>Supprimer';
            }
            currentDeleteCartItemId = null;
        }
    });

    console.log('✅ All event listeners attached');
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
        return "marketplace/cart/index.html.twig";
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
        return array (  1841 => 1534,  1454 => 1150,  1450 => 1149,  1446 => 1148,  1442 => 1147,  1433 => 1141,  1420 => 1140,  1351 => 1081,  1242 => 974,  1233 => 968,  1227 => 964,  1214 => 954,  1209 => 951,  1203 => 948,  1199 => 946,  1197 => 945,  1191 => 942,  1182 => 935,  1170 => 929,  1166 => 928,  1162 => 927,  1158 => 925,  1152 => 922,  1149 => 921,  1147 => 920,  1142 => 918,  1139 => 917,  1133 => 914,  1130 => 913,  1128 => 912,  1120 => 907,  1116 => 906,  1111 => 904,  1103 => 899,  1090 => 889,  1086 => 888,  1082 => 887,  1078 => 886,  1074 => 885,  1070 => 884,  1066 => 883,  1062 => 881,  1058 => 879,  1054 => 877,  1048 => 876,  1046 => 875,  1043 => 874,  1041 => 873,  1034 => 868,  1028 => 865,  1024 => 863,  1021 => 862,  1015 => 860,  1013 => 859,  1006 => 855,  1002 => 854,  996 => 850,  990 => 846,  982 => 844,  980 => 843,  976 => 842,  971 => 841,  967 => 840,  963 => 838,  961 => 837,  952 => 831,  947 => 829,  940 => 824,  927 => 823,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/cart/index.html.twig #}

{% extends 'base_marketplace.html.twig' %}

{% block title %}Mon Panier - HMA Marketplace{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --card-radius: 16px;
        --card-shadow: 0 2px 16px rgba(0,0,0,0.08);
        --card-shadow-hover: 0 8px 32px rgba(0,0,0,0.12);
    }

    .cart-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .cart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .cart-header h1 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .cart-header h1 .badge {
        font-size: 0.9rem;
        background: var(--primary-gradient);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
    }

    .cart-empty {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 2px dashed #e5e7eb;
    }

    .cart-empty i {
        font-size: 4rem;
        color: #94a3b8;
        margin-bottom: 1rem;
    }

    .cart-empty h3 {
        color: #0f172a;
        font-weight: 600;
    }

    .cart-empty p {
        color: #94a3b8;
        margin-bottom: 1.5rem;
    }

    .cart-grid {
        display: grid;
        grid-template-columns: 1fr 380px;
        gap: 2rem;
    }

    @media (max-width: 992px) {
        .cart-grid {
            grid-template-columns: 1fr;
        }
    }

    .cart-items-card {
        background: white;
        border-radius: var(--card-radius);
        box-shadow: var(--card-shadow);
        overflow: hidden;
    }

    .cart-item {
        display: grid;
        grid-template-columns: 100px 1fr auto;
        gap: 1rem;
        padding: 1.25rem;
        border-bottom: 1px solid #f1f5f9;
        transition: background 0.2s ease;
        align-items: center;
    }

    .cart-item:last-child {
        border-bottom: none;
    }

    .cart-item:hover {
        background: #f8fafc;
    }

    .cart-item-image {
        width: 100px;
        height: 100px;
        border-radius: 12px;
        overflow: hidden;
        background: #f1f5f9;
        flex-shrink: 0;
        position: relative;
        cursor: pointer;
    }

    .cart-item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cart-item-image .placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        font-size: 2rem;
        background: #f1f5f9;
    }

    .cart-item-details {
        flex: 1;
        min-width: 0;
    }

    .cart-item-details .item-name {
        font-weight: 600;
        color: #0f172a;
        margin-bottom: 0.25rem;
        font-size: 1rem;
    }

    .cart-item-details .item-name a {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .cart-item-details .item-name a:hover {
        color: var(--primary-color);
    }

    .cart-item-details .item-meta {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex-wrap: wrap;
        font-size: 0.85rem;
        color: #64748b;
    }

    .cart-item-details .item-meta .unit {
        background: #f1f5f9;
        padding: 0.1rem 0.5rem;
        border-radius: 4px;
        font-size: 0.7rem;
    }

    .cart-item-details .promotion-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        font-size: 0.7rem;
        padding: 0.15rem 0.6rem;
        border-radius: 50px;
        background: #dcfce7;
        color: #16a34a;
        font-weight: 600;
    }

    .cart-item-details .promotion-badge i {
        font-size: 0.6rem;
    }

    .note-section {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-top: 0.5rem;
        flex-wrap: wrap;
    }

    .note-display {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        background: #f1f5f9;
        border-radius: 6px;
        font-size: 0.8rem;
        color: #475569;
        max-width: 280px;
    }

    .note-display i {
        color: var(--primary-color);
        font-size: 0.7rem;
        flex-shrink: 0;
    }

    .note-display .note-text {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: #0f172a;
    }

    .note-display .note-empty {
        color: #94a3b8;
        font-style: italic;
    }

    .btn-note {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.2rem 0.6rem;
        border: 1px solid #e5e7eb;
        border-radius: 6px;
        background: white;
        font-size: 0.7rem;
        color: #64748b;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-note:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
    }

    .btn-note i {
        font-size: 0.6rem;
    }

    .btn-note .badge-edit {
        background: var(--primary-gradient);
        color: white;
        padding: 0.05rem 0.4rem;
        border-radius: 50px;
        font-size: 0.6rem;
        font-weight: 600;
    }

    .cart-item-prices {
        text-align: right;
        flex-shrink: 0;
    }

    .cart-item-prices .original-price {
        font-size: 0.8rem;
        color: #94a3b8;
        text-decoration: line-through;
    }

    .cart-item-prices .current-price {
        font-size: 1.1rem;
        font-weight: 700;
        color: #0f172a;
    }

    .cart-item-prices .discount-amount {
        font-size: 0.75rem;
        color: #16a34a;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: #f1f5f9;
        border-radius: 50px;
        padding: 0.2rem;
    }

    .quantity-control button {
        width: 32px;
        height: 32px;
        border: none;
        border-radius: 50%;
        background: white;
        color: #0f172a;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .quantity-control button:hover {
        background: var(--primary-color);
        color: white;
    }

    .quantity-control button:active {
        transform: scale(0.9);
    }

    .quantity-control input {
        width: 40px;
        height: 32px;
        border: none;
        background: transparent;
        text-align: center;
        font-weight: 600;
        font-size: 0.95rem;
        color: #0f172a;
        outline: none;
    }

    .quantity-control input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    .quantity-control input[type=number] {
        -moz-appearance: textfield;
    }

    .remove-item {
        background: none;
        border: none;
        color: #94a3b8;
        font-size: 1.2rem;
        cursor: pointer;
        transition: all 0.2s ease;
        padding: 0.25rem;
    }

    .remove-item:hover {
        color: #ef4444;
        transform: scale(1.1);
    }

    .remove-item:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }

    .cart-summary {
        background: white;
        border-radius: var(--card-radius);
        box-shadow: var(--card-shadow);
        padding: 1.5rem;
        position: sticky;
        top: 2rem;
        height: fit-content;
    }

    .cart-summary h3 {
        font-size: 1.2rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #f1f5f9;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        padding: 0.5rem 0;
        font-size: 0.95rem;
        color: #475569;
    }

    .summary-row.total {
        font-size: 1.2rem;
        font-weight: 700;
        color: #0f172a;
        border-top: 2px solid #f1f5f9;
        padding-top: 1rem;
        margin-top: 0.5rem;
    }

    .summary-row.discount {
        color: #16a34a;
    }

    .btn-checkout {
        width: 100%;
        padding: 0.9rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .btn-checkout:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(4, 99, 241, 0.3);
    }

    .btn-checkout:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }

    .btn-continue-shopping {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s ease;
        margin-top: 1rem;
    }

    .btn-continue-shopping:hover {
        color: var(--primary-dark);
    }

    .btn-continue-shopping i {
        transition: transform 0.2s ease;
    }

    .btn-continue-shopping:hover i {
        transform: translateX(-4px);
    }

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

    .note-modal .modal-content {
        border-radius: var(--card-radius);
        border: none;
    }

    .note-modal .modal-header {
        border-bottom: 2px solid #f1f5f9;
        padding: 1.25rem 1.5rem;
    }

    .note-modal .modal-header .modal-title {
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .note-modal .modal-body {
        padding: 1.5rem;
    }

    .note-modal .modal-body .note-product {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: #f8fafc;
        border-radius: 12px;
        margin-bottom: 1.5rem;
    }

    .note-modal .modal-body .note-product img {
        width: 70px;
        height: 70px;
        border-radius: 8px;
        object-fit: cover;
        background: #f1f5f9;
    }

    .note-modal .modal-body .note-product .product-info {
        flex: 1;
    }

    .note-modal .modal-body .note-product .product-name {
        font-weight: 600;
        color: #0f172a;
        font-size: 1rem;
    }

    .note-modal .modal-body .note-product .product-price {
        font-size: 0.85rem;
        color: #64748b;
    }

    .note-modal .modal-body .note-product .product-quantity {
        font-size: 0.8rem;
        color: #94a3b8;
    }

    .note-modal .modal-body .note-textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        font-size: 0.95rem;
        resize: vertical;
        min-height: 100px;
        transition: border-color 0.2s ease;
        font-family: inherit;
    }

    .note-modal .modal-body .note-textarea:focus {
        border-color: var(--primary-color);
        outline: none;
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.1);
    }

    .note-modal .modal-body .note-char-count {
        text-align: right;
        font-size: 0.75rem;
        color: #94a3b8;
        margin-top: 0.3rem;
    }

    .note-modal .modal-body .debug-info {
        margin-top: 1rem;
        padding: 0.75rem;
        background: #fff3cd;
        border-radius: 8px;
        font-size: 0.8rem;
        display: none;
        border: 1px solid #ffc107;
    }

    .note-modal .modal-body .debug-info strong {
        color: #856404;
    }

    .note-modal .modal-body .debug-info p {
        margin: 0.25rem 0 0 0;
        color: #856404;
        word-break: break-all;
    }

    .note-modal .modal-footer {
        border-top: 2px solid #f1f5f9;
        padding: 1rem 1.5rem;
    }

    /* ==================== MODAL CONFIRMATION SUPPRESSION ==================== */
    .delete-modal .modal-content {
        border-radius: var(--card-radius);
        border: none;
    }

    .delete-modal .modal-header {
        border-bottom: 2px solid #f1f5f9;
        padding: 1.25rem 1.5rem;
    }

    .delete-modal .modal-header .modal-title {
        font-weight: 700;
        color: #0f172a;
    }

    .delete-modal .modal-body {
        padding: 1.5rem;
        text-align: center;
    }

    .delete-modal .modal-body .delete-icon {
        font-size: 4rem;
        color: #ef4444;
        margin-bottom: 1rem;
    }

    .delete-modal .modal-body .delete-text {
        color: #475569;
        margin-bottom: 0.5rem;
    }

    .delete-modal .modal-body .delete-item-name {
        font-weight: 700;
        color: #0f172a;
    }

    .delete-modal .modal-footer {
        border-top: 2px solid #f1f5f9;
        padding: 1rem 1.5rem;
    }

    /* ==================== MODAL CHECKOUT ==================== */
    .checkout-modal .modal-content {
        border-radius: var(--card-radius);
        border: none;
    }

    .checkout-modal .modal-header {
        border-bottom: 2px solid #f1f5f9;
        padding: 1.25rem 1.5rem;
    }

    .checkout-modal .modal-header .modal-title {
        font-weight: 700;
        color: #0f172a;
    }

    .checkout-modal .modal-body {
        padding: 1.5rem;
    }

    .checkout-modal .modal-footer {
        border-top: 2px solid #f1f5f9;
        padding: 1rem 1.5rem;
    }

    .checkout-modal .order-summary-item {
        display: flex;
        justify-content: space-between;
        padding: 0.5rem 0;
        border-bottom: 1px solid #f1f5f9;
        font-size: 0.9rem;
    }

    .checkout-modal .order-summary-item:last-child {
        border-bottom: none;
    }

    .checkout-modal .order-summary-total {
        display: flex;
        justify-content: space-between;
        padding-top: 1rem;
        margin-top: 0.5rem;
        border-top: 2px solid #e5e7eb;
        font-weight: 700;
        font-size: 1.1rem;
        color: #0f172a;
    }

    @media (max-width: 768px) {
        .cart-item {
            grid-template-columns: 80px 1fr;
            gap: 0.75rem;
            padding: 1rem;
        }

        .cart-item-image {
            width: 80px;
            height: 80px;
        }

        .cart-item-prices {
            grid-column: 1 / -1;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 1rem;
            justify-content: space-between;
        }

        .quantity-control {
            width: fit-content;
        }

        .cart-summary {
            position: static;
        }

        .cart-header h1 {
            font-size: 1.4rem;
        }

        .note-section {
            flex-wrap: wrap;
        }

        .note-display {
            max-width: 180px;
            font-size: 0.7rem;
        }

        .btn-note {
            font-size: 0.65rem;
        }

        .checkout-modal .modal-dialog {
            margin: 0.5rem;
        }
    }

    @media (max-width: 480px) {
        .cart-item {
            grid-template-columns: 60px 1fr;
            padding: 0.75rem;
        }

        .cart-item-image {
            width: 60px;
            height: 60px;
        }

        .cart-item-details .item-name {
            font-size: 0.9rem;
        }

        .quantity-control button {
            width: 28px;
            height: 28px;
            font-size: 0.8rem;
        }

        .quantity-control input {
            width: 32px;
            font-size: 0.85rem;
        }

        .cart-item-prices .current-price {
            font-size: 0.95rem;
        }

        .toast {
            min-width: auto;
            max-width: 90vw;
            padding: 0.75rem 1rem;
        }

        .note-display {
            max-width: 140px;
            font-size: 0.65rem;
        }

        .note-modal .modal-body .note-product {
            flex-wrap: wrap;
        }

        .note-modal .modal-body .note-product img {
            width: 50px;
            height: 50px;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"cart-container\">
    <div class=\"cart-header\">
        <h1>
            <i class=\"fas fa-shopping-cart text-primary\"></i>
            Mon Panier
            <span class=\"badge\">{{ itemsCount }}</span>
        </h1>
        <a href=\"{{ path('marketplace_products') }}\" class=\"btn-continue-shopping\">
            <i class=\"fas fa-arrow-left\"></i>
            Continuer mes achats
        </a>
    </div>

    {% if items|length > 0 %}
        <div class=\"cart-grid\">
            <div class=\"cart-items-card\">
                {% for item in items %}
                    <div class=\"cart-item\" data-cart-item-id=\"{{ item.id }}\">
                        <div class=\"cart-item-image\" onclick=\"window.location.href='{{ path('marketplace_product_show', {id: item.product.id}) }}'\">
                            {% if item.image %}
                                <img src=\"{{ item.image }}\" alt=\"{{ item.product.name }}\" loading=\"lazy\">
                            {% else %}
                                <div class=\"placeholder\">
                                    <i class=\"fas fa-box\"></i>
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"cart-item-details\">
                            <div class=\"item-name\">
                                <a href=\"{{ path('marketplace_product_show', {id: item.product.id}) }}\">
                                    {{ item.product.name }}
                                </a>
                            </div>
                            <div class=\"item-meta\">
                                {% if item.product.unit %}
                                    <span class=\"unit\">{{ item.product.unit }}</span>
                                {% endif %}
                                {% if item.promotion.has_promotion %}
                                    <span class=\"promotion-badge\">
                                        <i class=\"fas fa-tag\"></i>
                                        {{ item.promotion.promotion.name }}
                                    </span>
                                {% endif %}
                            </div>

                            <div class=\"note-section\">
                                <div class=\"note-display\">
                                    <i class=\"fas fa-pencil-alt\"></i>
                                    {% if item.notes %}
                                        <span class=\"note-text\">
                                            {% set words = item.notes|split(' ')|slice(0, 20) %}
                                            {{ words|join(' ') }}{% if words|length >= 20 %}...{% endif %}
                                        </span>
                                    {% else %}
                                        <span class=\"note-empty\">Ajouter une note</span>
                                    {% endif %}
                                </div>
                                <button class=\"btn-note\" 
                                        data-cart-item-id=\"{{ item.id }}\"
                                        data-note=\"{{ item.notes|default('') }}\" 
                                        data-product=\"{{ item.product.name }}\" 
                                        data-product-id=\"{{ item.product.id }}\" 
                                        data-image=\"{{ item.image|default('') }}\"
                                        data-price=\"{{ item.discounted_price }}\" 
                                        data-quantity=\"{{ item.quantity }}\">
                                    <i class=\"fas fa-edit\"></i>
                                    <span>Modifier</span>
                                    <span class=\"badge-edit\">✎</span>
                                </button>
                            </div>
                        </div>

                        <div class=\"cart-item-prices\">
                            <div class=\"quantity-control\">
                                <button class=\"qty-decrease\" data-cart-item-id=\"{{ item.id }}\">
                                    <i class=\"fas fa-minus\"></i>
                                </button>
                                <input type=\"number\" 
                                       class=\"qty-input\" 
                                       value=\"{{ item.quantity }}\" 
                                       min=\"1\"
                                       data-cart-item-id=\"{{ item.id }}\">
                                <button class=\"qty-increase\" data-cart-item-id=\"{{ item.id }}\">
                                    <i class=\"fas fa-plus\"></i>
                                </button>
                            </div>
                            <div>
                                {% if item.unit_price > item.discounted_price %}
                                    <div class=\"original-price\">
                                        {{ item.unit_price|number_format(0, ',', ' ') }} FCFA
                                    </div>
                                {% endif %}
                                <div class=\"current-price\">
                                    {{ item.discounted_price|number_format(0, ',', ' ') }} FCFA
                                </div>
                                {% if item.discount > 0 %}
                                    <div class=\"discount-amount\">
                                        - {{ item.discount|number_format(0, ',', ' ') }} FCFA
                                    </div>
                                {% endif %}
                            </div>
                            <button class=\"remove-item\" 
                                    data-cart-item-id=\"{{ item.id }}\"
                                    data-product-name=\"{{ item.product.name }}\"
                                    data-product-id=\"{{ item.product.id }}\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <div class=\"cart-summary\">
                <h3>Résumé de la commande</h3>
                
                <div class=\"summary-row\">
                    <span>Sous-total</span>
                    <span>{{ subtotal|number_format(0, ',', ' ') }} FCFA</span>
                </div>
                
                {% if totalDiscount > 0 %}
                    <div class=\"summary-row discount\">
                        <span>Remise</span>
                        <span>- {{ totalDiscount|number_format(0, ',', ' ') }} FCFA</span>
                    </div>
                {% endif %}
                
                <div class=\"summary-row total\">
                    <span>Total</span>
                    <span>{{ grandTotal|number_format(0, ',', ' ') }} FCFA</span>
                </div>

                <button class=\"btn-checkout\" id=\"btnCheckout\">
                    <i class=\"fas fa-credit-card\"></i>
                    Valider la commande
                </button>
            </div>
        </div>
    {% else %}
        <div class=\"cart-empty\">
            <i class=\"fas fa-shopping-cart\"></i>
            <h3>Votre panier est vide</h3>
            <p>Commencez vos achats en parcourant nos produits</p>
            <a href=\"{{ path('marketplace_products') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-arrow-left me-2\"></i>
                Découvrir nos produits
            </a>
        </div>
    {% endif %}
</div>

<!-- ==================== MODAL NOTE ==================== -->
<div class=\"modal fade note-modal\" id=\"noteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-pencil-alt text-primary\"></i>
                    Modifier la note
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"note-product\">
                    <img id=\"modalNoteImage\" src=\"\" alt=\"Produit\" style=\"display:none;\">
                    <div class=\"product-info\">
                        <div class=\"product-name\" id=\"modalNoteProductName\"></div>
                        <div class=\"product-price\" id=\"modalNoteProductPrice\"></div>
                        <div class=\"product-quantity\" id=\"modalNoteProductQuantity\"></div>
                    </div>
                </div>
                
                <label for=\"modalNoteTextarea\" class=\"form-label fw-bold small\">Votre note</label>
                <textarea class=\"note-textarea\" id=\"modalNoteTextarea\" placeholder=\"Écrivez votre note ici...\" maxlength=\"500\"></textarea>
                <div class=\"note-char-count\">
                    <span id=\"modalNoteCharCount\">0</span> / 500 caractères
                </div>

                <div class=\"debug-info\" id=\"debugInfo\">
                    <strong>🔍 Debug:</strong>
                    <p id=\"debugMessage\">En attente...</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i>Annuler
                </button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"modalBtnSaveNote\">
                    <i class=\"fas fa-save me-2\"></i>Enregistrer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== MODAL CONFIRMATION SUPPRESSION ==================== -->
<div class=\"modal fade delete-modal\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle text-danger\"></i>
                    Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"delete-icon\">
                    <i class=\"fas fa-trash-alt\"></i>
                </div>
                <h5 class=\"fw-bold\">Supprimer cet article ?</h5>
                <p class=\"delete-text\">
                    Êtes-vous sûr de vouloir supprimer <span class=\"delete-item-name\" id=\"deleteItemName\"></span> de votre panier ?
                </p>
                <p class=\"text-muted small\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i>Annuler
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"btnConfirmDelete\">
                    <i class=\"fas fa-trash-alt me-2\"></i>Supprimer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== MODAL CHECKOUT ==================== -->
<div class=\"modal fade checkout-modal\" id=\"checkoutModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-check-circle text-success me-2\"></i>
                    Valider votre commande
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-7\">
                        <h6 class=\"fw-bold mb-3\">Informations de livraison</h6>
                        <form id=\"checkoutForm\">
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Téléphone <span class=\"text-danger\">*</span></label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">+229</span>
                                    <input type=\"tel\" class=\"form-control\" id=\"phone\" 
                                           placeholder=\"97 00 00 00\" required>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" 
                                       value=\"{{ app.user.email }}\" placeholder=\"votre@email.com\">
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Adresse de livraison <span class=\"text-danger\">*</span></label>
                                <input type=\"text\" class=\"form-control\" id=\"address\" 
                                       placeholder=\"Ex: Quartier, Rue, Numéro\" required>
                            </div>
                            
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold small\">Ville</label>
                                    <input type=\"text\" class=\"form-control\" id=\"city\" 
                                           placeholder=\"Cotonou, Porto-Novo...\">
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold small\">Code postal</label>
                                    <input type=\"text\" class=\"form-control\" id=\"zipcode\" 
                                           placeholder=\"Ex: 01BP...\">
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold small\">Pays</label>
                                <select class=\"form-select\" id=\"country\">
                                    <option value=\"Bénin\" selected>Bénin</option>
                                    <option value=\"Togo\">Togo</option>
                                    <option value=\"Côte d'Ivoire\">Côte d'Ivoire</option>
                                    <option value=\"Sénégal\">Sénégal</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    
                    <div class=\"col-md-5\">
                        <h6 class=\"fw-bold mb-3\">Récapitulatif</h6>
                        <div id=\"orderSummary\" class=\"bg-light p-3 rounded-3\">
                            <!-- Rempli par JS -->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i>Annuler
                </button>
                <button type=\"button\" class=\"btn btn-success\" id=\"btnPay\">
                    <i class=\"fas fa-credit-card me-2\"></i>
                    Effectuer le paiement
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== TOAST CONTAINER ==================== -->
<div class=\"toast-container\" id=\"toastContainer\"></div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('✅ DOM fully loaded and parsed');

    var cart = {
        items: {{ items|json_encode|raw }},
        subtotal: {{ subtotal }},
        totalDiscount: {{ totalDiscount }},
        grandTotal: {{ grandTotal }}
    };

    var currentCartItemId = null;
    var currentDeleteCartItemId = null;

    function debugLog(message, data) {
        console.log('🔍 DEBUG:', message, data || '');
        var debugDiv = document.getElementById('debugInfo');
        var debugMsg = document.getElementById('debugMessage');
        if (debugDiv && debugMsg) {
            debugDiv.style.display = 'block';
            debugMsg.textContent = message + (data ? ' - ' + JSON.stringify(data) : '');
        }
    }

    // ==================== OPEN NOTE MODAL ====================
    function openNoteModal(button) {
        console.log('✅ openNoteModal called');
        
        var cartItemId = button.dataset.cartItemId || '';
        var note = button.dataset.note || '';
        var productName = button.dataset.product || 'Produit';
        var productId = button.dataset.productId || '';
        var image = button.dataset.image || '';
        var price = parseFloat(button.dataset.price) || 0;
        var quantity = parseInt(button.dataset.quantity) || 1;
        
        console.log('📦 CartItem ID:', cartItemId);
        console.log('📝 Note:', note);
        
        currentCartItemId = cartItemId;
        debugLog('Ouverture du modal pour: ' + productName + ' (CartItem ID: ' + cartItemId + ')');
        
        var productNameEl = document.getElementById('modalNoteProductName');
        var productPriceEl = document.getElementById('modalNoteProductPrice');
        var productQuantityEl = document.getElementById('modalNoteProductQuantity');
        var productImageEl = document.getElementById('modalNoteImage');
        var textarea = document.getElementById('modalNoteTextarea');
        var charCount = document.getElementById('modalNoteCharCount');
        
        if (productNameEl) productNameEl.textContent = productName;
        if (productPriceEl) productPriceEl.textContent = price.toLocaleString('fr-FR') + ' FCFA / unité';
        if (productQuantityEl) productQuantityEl.textContent = 'Quantité: ' + quantity;
        
        if (productImageEl) {
            if (image) {
                productImageEl.src = image;
                productImageEl.style.display = 'block';
            } else {
                productImageEl.style.display = 'none';
            }
        }
        
        if (textarea) {
            textarea.value = note;
            if (charCount) charCount.textContent = note.length;
            setTimeout(function() {
                textarea.focus();
                textarea.setSelectionRange(textarea.value.length, textarea.value.length);
            }, 400);
        }
        
        try {
            var modal = new bootstrap.Modal(document.getElementById('noteModal'));
            modal.show();
            console.log('✅ Modal shown successfully');
        } catch (e) {
            console.error('❌ Error showing modal:', e);
        }
    }

    window.openNoteModal = openNoteModal;

    // ==================== BOUTONS NOTES ====================
    var noteButtons = document.querySelectorAll('.btn-note');
    console.log('🔘 Number of note buttons found:', noteButtons.length);
    
    noteButtons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('🖱️ Button clicked - CartItem ID:', this.dataset.cartItemId);
            openNoteModal(this);
        });
    });

    // ==================== CHARACTER COUNT ====================
    var textarea = document.getElementById('modalNoteTextarea');
    var charCount = document.getElementById('modalNoteCharCount');
    
    if (textarea && charCount) {
        textarea.addEventListener('input', function() {
            var count = this.value.length;
            charCount.textContent = count;
            if (count > 500) {
                this.value = this.value.slice(0, 500);
                charCount.textContent = 500;
            }
        });
    }

    // ==================== SAVE NOTE ====================
    var btnSave = document.getElementById('modalBtnSaveNote');
    if (btnSave) {
        btnSave.addEventListener('click', function() {
            var note = document.getElementById('modalNoteTextarea').value.trim();
            var cartItemId = currentCartItemId;
            
            if (!cartItemId) {
                showToast('Erreur: produit non identifié', 'error');
                return;
            }
            
            this.disabled = true;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Enregistrement...';
            
            var url = '/marketplace/cart/update/' + cartItemId;
            
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ notes: note })
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.success) {
                    var modal = bootstrap.Modal.getInstance(document.getElementById('noteModal'));
                    if (modal) modal.hide();
                    
                    var cartItem = document.querySelector('.cart-item[data-cart-item-id=\"' + cartItemId + '\"]');
                    if (cartItem) {
                        var noteDisplay = cartItem.querySelector('.note-display');
                        var noteText = noteDisplay ? noteDisplay.querySelector('.note-text') : null;
                        var noteEmpty = noteDisplay ? noteDisplay.querySelector('.note-empty') : null;
                        
                        if (noteDisplay) {
                            if (note && note.trim().length > 0) {
                                var words = note.split(' ').slice(0, 20);
                                var displayText = words.join(' ') + (words.length >= 20 ? '...' : '');
                                if (noteText) {
                                    noteText.textContent = displayText;
                                    noteText.style.display = 'inline';
                                }
                                if (noteEmpty) {
                                    noteEmpty.style.display = 'none';
                                }
                            } else {
                                if (noteText) {
                                    noteText.textContent = '';
                                    noteText.style.display = 'none';
                                }
                                if (noteEmpty) {
                                    noteEmpty.style.display = 'inline';
                                }
                            }
                        }
                        
                        var btnNote = cartItem.querySelector('.btn-note');
                        if (btnNote) {
                            btnNote.dataset.note = note;
                        }
                    }
                    
                    showToast('Note enregistrée avec succès', 'success');
                } else {
                    showToast(data.error || 'Erreur lors de l\\'enregistrement', 'error');
                    this.disabled = false;
                    this.innerHTML = '<i class=\"fas fa-save me-2\"></i>Enregistrer';
                }
            }.bind(this))
            .catch(function() {
                showToast('Erreur de connexion', 'error');
                this.disabled = false;
                this.innerHTML = '<i class=\"fas fa-save me-2\"></i>Enregistrer';
            }.bind(this));
        });
    }

    // ==================== DELETE ITEM - OUVERTURE MODAL ====================
    var deleteButtons = document.querySelectorAll('.remove-item');
    console.log('🔘 Number of delete buttons found:', deleteButtons.length);
    
    deleteButtons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var cartItemId = this.dataset.cartItemId;
            var productName = this.dataset.productName || 'cet article';
            
            console.log('🗑️ Delete button clicked - CartItem ID:', cartItemId);
            
            // Stocker l'ID pour la confirmation
            currentDeleteCartItemId = cartItemId;
            
            // Mettre à jour le nom du produit dans le modal
            document.getElementById('deleteItemName').textContent = productName;
            
            // Ouvrir le modal de confirmation
            try {
                var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
                modal.show();
                console.log('✅ Delete modal shown');
            } catch (e) {
                console.error('❌ Error showing delete modal:', e);
            }
        });
    });

    // ==================== CONFIRMATION SUPPRESSION ====================
    var btnConfirmDelete = document.getElementById('btnConfirmDelete');
    if (btnConfirmDelete) {
        btnConfirmDelete.addEventListener('click', function() {
            var cartItemId = currentDeleteCartItemId;
            
            if (!cartItemId) {
                showToast('Erreur: article non identifié', 'error');
                return;
            }
            
            // Désactiver le bouton et afficher le chargement
            this.disabled = true;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Suppression...';
            
            var url = '/marketplace/cart/remove/' + cartItemId;
            console.log('🗑️ Sending delete request for cart item:', cartItemId);
            
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                console.log('📦 Delete response:', data);
                
                if (data.success) {
                    // Fermer le modal
                    var modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
                    if (modal) modal.hide();
                    
                    // Afficher un toast de succès
                    showToast('Article supprimé avec succès', 'success');
                    
                    // Recharger la page après un court délai
                    setTimeout(function() {
                        window.location.reload();
                    }, 800);
                } else {
                    showToast(data.error || 'Erreur lors de la suppression', 'error');
                    // Réactiver le bouton
                    this.disabled = false;
                    this.innerHTML = '<i class=\"fas fa-trash-alt me-2\"></i>Supprimer';
                }
            }.bind(this))
            .catch(function(error) {
                console.error('❌ Delete error:', error);
                showToast('Erreur de connexion', 'error');
                this.disabled = false;
                this.innerHTML = '<i class=\"fas fa-trash-alt me-2\"></i>Supprimer';
            }.bind(this));
        });
    }

    // ==================== QUANTITY CONTROLS ====================
    document.querySelectorAll('.qty-decrease').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var input = this.parentElement.querySelector('.qty-input');
            var val = parseInt(input.value) || 1;
            if (val > 1) {
                val--;
                input.value = val;
                updateQuantity(input.dataset.cartItemId, val);
            }
        });
    });

    document.querySelectorAll('.qty-increase').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var input = this.parentElement.querySelector('.qty-input');
            var val = parseInt(input.value) || 1;
            val++;
            input.value = val;
            updateQuantity(input.dataset.cartItemId, val);
        });
    });

    document.querySelectorAll('.qty-input').forEach(function(input) {
        input.addEventListener('change', function() {
            var val = parseInt(this.value) || 1;
            if (val < 1) val = 1;
            this.value = val;
            updateQuantity(this.dataset.cartItemId, val);
        });
    });

    // ==================== CHECKOUT ====================
    var btnCheckout = document.getElementById('btnCheckout');
    if (btnCheckout) {
        console.log('✅ Checkout button found');
        btnCheckout.addEventListener('click', function() {
            console.log('🖱️ Checkout button clicked');
            if (cart.items.length === 0) {
                showToast('Votre panier est vide', 'warning');
                return;
            }
            showCheckoutModal();
        });
    } else {
        console.error('❌ Checkout button not found');
    }

    // ==================== SHOW CHECKOUT MODAL ====================
    function showCheckoutModal() {
        console.log('🔄 showCheckoutModal called');
        var modalElement = document.getElementById('checkoutModal');
        var modal = new bootstrap.Modal(modalElement);
        var summary = document.getElementById('orderSummary');
        
        var html = '';
        cart.items.forEach(function(item) {
            html += `
                <div class=\"order-summary-item\">
                    <span>\${item.product.name} <span class=\"text-muted small\">x\${item.quantity}</span></span>
                    <span>\${(item.discounted_price * item.quantity).toLocaleString('fr-FR')} FCFA</span>
                </div>
            `;
        });
        html += `
            <div class=\"order-summary-total\">
                <span>Total</span>
                <span>\${cart.grandTotal.toLocaleString('fr-FR')} FCFA</span>
            </div>
        `;
        summary.innerHTML = html;
        
        modal.show();
        console.log('✅ Checkout modal shown');
    }

    // ==================== PAYMENT ====================
    var btnPay = document.getElementById('btnPay');
    if (btnPay) {
        console.log('✅ Payment button found');
        btnPay.addEventListener('click', function() {
            console.log('🖱️ Payment button clicked');
            processCheckout();
        });
    } else {
        console.error('❌ Payment button not found');
    }

    function processCheckout() {
        console.log('🔄 processCheckout called');
        var btnPay = document.getElementById('btnPay');
        var phone = document.getElementById('phone').value.trim();
        var email = document.getElementById('email').value.trim();
        var address = document.getElementById('address').value.trim();
        var city = document.getElementById('city').value.trim();
        var zipcode = document.getElementById('zipcode').value.trim();
        var country = document.getElementById('country').value;

        if (!phone) {
            showToast('Veuillez saisir votre numéro de téléphone', 'warning');
            document.getElementById('phone').focus();
            return;
        }

        if (!address) {
            showToast('Veuillez saisir votre adresse de livraison', 'warning');
            document.getElementById('address').focus();
            return;
        }

        btnPay.disabled = true;
        btnPay.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Traitement en cours...';

        var url = '{{ path('marketplace_cart_checkout') }}';
        console.log('🌐 Sending request to:', url);

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({
                phone: phone,
                email: email,
                address: address,
                city: city,
                zipcode: zipcode,
                country: country
            })
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            console.log('📦 Response data:', data);
            
            if (data.success) {
                if (data.payment_url) {
                    console.log('🔗 Redirecting to payment URL:', data.payment_url);
                    window.location.href = data.payment_url;
                } else {
                    showToast('Commande validée !', 'success');
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
            } else {
                showToast(data.error || 'Erreur lors de la validation', 'error');
                btnPay.disabled = false;
                btnPay.innerHTML = '<i class=\"fas fa-credit-card me-2\"></i> Effectuer le paiement';
            }
        })
        .catch(function() {
            showToast('Erreur de connexion', 'error');
            btnPay.disabled = false;
            btnPay.innerHTML = '<i class=\"fas fa-credit-card me-2\"></i> Effectuer le paiement';
        });
    }

    // ==================== QUANTITY FUNCTIONS ====================
    function updateQuantity(cartItemId, quantity) {
        var url = '/marketplace/cart/update/' + cartItemId;
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ quantity: quantity })
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data.success) {
                updateCartSummary(data);
                showToast('Panier mis à jour', 'success');
            } else {
                showToast(data.error || 'Erreur lors de la mise à jour', 'error');
            }
        })
        .catch(function() {
            showToast('Erreur de connexion', 'error');
        });
    }

    function updateCartSummary(data) {
        var badge = document.querySelector('.cart-header .badge');
        if (badge) badge.textContent = data.cartCount;
        
        var summaryRows = document.querySelectorAll('.summary-row');
        if (summaryRows.length >= 2) {
            if (data.subtotal !== undefined) {
                summaryRows[0].querySelector('span:last-child').textContent = 
                    data.subtotal.toLocaleString('fr-FR') + ' FCFA';
            }
            if (data.totalDiscount !== undefined && data.totalDiscount > 0) {
                var discountRow = summaryRows[1];
                discountRow.querySelector('span:last-child').textContent = 
                    '- ' + data.totalDiscount.toLocaleString('fr-FR') + ' FCFA';
            }
            if (data.grandTotal !== undefined) {
                var totalRow = summaryRows[summaryRows.length - 1];
                totalRow.querySelector('span:last-child').textContent = 
                    data.grandTotal.toLocaleString('fr-FR') + ' FCFA';
            }
        }
    }

    // ==================== TOAST NOTIFICATIONS ====================
    function showToast(message, type) {
        type = type || 'info';
        var container = document.getElementById('toastContainer');
        var icons = {
            success: 'fa-check-circle',
            error: 'fa-exclamation-circle',
            warning: 'fa-exclamation-triangle',
            info: 'fa-info-circle'
        };

        var toast = document.createElement('div');
        toast.className = 'toast ' + type;
        toast.innerHTML = `
            <i class=\"fas \${icons[type] || icons.info}\"></i>
            <span class=\"toast-message\">\${message}</span>
            <button onclick=\"this.closest('.toast').remove()\" style=\"background:none;border:none;color:#94a3b8;cursor:pointer;\">
                <i class=\"fas fa-times\"></i>
            </button>
        `;

        container.appendChild(toast);

        setTimeout(function() {
            toast.style.animation = 'slideOut 0.3s ease';
            setTimeout(function() {
                toast.remove();
            }, 300);
        }, 4000);
    }

    // ==================== RÉINITIALISATION APRÈS NAVIGATION ====================
    // Réinitialiser l'état des boutons de suppression si le modal est fermé sans confirmation
    document.addEventListener('hidden.bs.modal', function (event) {
        if (event.target.id === 'deleteModal') {
            var btnConfirm = document.getElementById('btnConfirmDelete');
            if (btnConfirm) {
                btnConfirm.disabled = false;
                btnConfirm.innerHTML = '<i class=\"fas fa-trash-alt me-2\"></i>Supprimer';
            }
            currentDeleteCartItemId = null;
        }
    });

    console.log('✅ All event listeners attached');
});
</script>
{% endblock %}", "marketplace/cart/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\cart\\index.html.twig");
    }
}
