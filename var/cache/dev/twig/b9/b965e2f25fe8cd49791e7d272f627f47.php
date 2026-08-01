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

/* purchase/cart.html.twig */
class __TwigTemplate_4b54448e4df7e6327db474e183eca9eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/cart.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
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

        yield "Panier d'achat - HMA Market";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    /* ✅ NE PAS REDÉFINIR :root ICI - Utiliser les variables de base.html.twig */

    .purchase-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    .header-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .search-section {
        width: 100%;
    }
    .search-bar {
        max-width: 800px;
        margin: 0 auto;
    }
    .search-input-group {
        border-radius: 50px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .search-input-group .form-control {
        border: 1px solid #e2e8f0;
        border-right: none;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
    }
    .search-input-group .form-control:focus {
        box-shadow: none;
        border-color: var(--primary-color);
    }
    .search-input-group .btn {
        padding: 0.75rem 1.5rem;
        background: white;
        border: 1px solid #e2e8f0;
        border-left: none;
        color: var(--primary-color);
    }
    .two-columns {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
    }
    .products-panel, .cart-panel {
        flex: 1;
        min-width: 300px;
        background: white;
        border-radius: 24px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: calc(100vh - 220px);
        min-height: 500px;
    }
    .panel-header {
        background: #f8fafc;
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #e2e8f0;
        font-weight: 600;
        flex-shrink: 0;
    }
    .panel-content {
        flex: 1;
        overflow-y: auto;
        padding: 0;
    }
    .product-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .product-list-item {
        display: flex;
        align-items: center;
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #edf2f7;
        cursor: pointer;
        transition: background 0.2s;
    }
    .product-list-item:hover {
        background: #f8fafc;
    }
    .product-list-img {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    .product-list-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }
    .product-list-img .fallback-icon {
        font-size: 2rem;
        color: #94a3b8;
    }
    .product-list-info { flex: 1; }
    .product-list-title { font-weight: 600; }
    .product-list-meta { font-size: 0.8rem; color: #64748b; }
    .product-list-price {
        font-weight: 700;
        color: var(--primary-color);
        text-align: right;
        min-width: 100px;
    }
    .product-list-badge {
        display: inline-block;
        background: #fef3c7;
        color: #b45309;
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
        border-radius: 20px;
        margin-left: 0.5rem;
    }
    .cart-items {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .cart-item {
        display: flex;
        align-items: center;
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #edf2f7;
        transition: background 0.2s;
    }
    .cart-item:hover {
        background: #f8fafc;
    }
    .cart-item-img {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    .cart-item-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }
    .cart-item-img .fallback-icon {
        font-size: 2rem;
        color: #94a3b8;
    }
    .cart-item-details { flex: 1; }
    .cart-item-title { font-weight: 600; }
    .cart-item-meta {
        font-size: 0.8rem;
        color: #64748b;
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    .cart-item-quantity {
        margin: 0 1rem;
    }
    .cart-item-quantity .badge {
        font-size: 1rem;
        padding: 0.5rem 0.75rem;
    }
    .cart-item-price {
        text-align: right;
        min-width: 140px;
    }
    .cart-item-price .total {
        font-weight: 700;
        color: var(--primary-color);
    }
    .cart-footer {
        background: #f8fafc;
        padding: 1rem 1.5rem;
        border-top: 1px solid #e2e8f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        flex-shrink: 0;
    }
    @media (max-width: 768px) {
        .two-columns { flex-direction: column; }
        .products-panel, .cart-panel { height: auto; max-height: 500px; }
        .cart-item { flex-wrap: wrap; }
        .cart-item-quantity {
            margin: 0.5rem 0;
            width: 100%;
            text-align: center;
        }
        .cart-item-price {
            width: 100%;
            text-align: center;
            margin-top: 0.5rem;
        }
    }
    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: 0.2em;
    }
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        justify-content: flex-end;
        margin-top: 0.5rem;
    }
    
    .btn-loading {
        opacity: 0.7;
        cursor: wait;
        pointer-events: none;
    }
    .btn-loading .btn-text {
        display: none;
    }
    .btn-loading .btn-spinner {
        display: inline-block;
    }
    .btn-spinner {
        display: none;
        width: 1rem;
        height: 1rem;
        border: 2px solid rgba(255,255,255,0.3);
        border-radius: 50%;
        border-top-color: white;
        animation: spin 0.6s linear infinite;
    }
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    
    .modal-loading-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255,255,255,0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1060;
        border-radius: 0.5rem;
    }
    .modal-content {
        position: relative;
    }
    
    /* ✅ Couleurs dynamiques pour les modals */
    .modal-header.bg-primary {
        background: var(--primary-color) !important;
    }
    .modal-header.bg-primary .btn-close {
        filter: brightness(0) invert(1);
    }
    
    .text-primary {
        color: var(--primary-color) !important;
    }
    
    .btn-primary {
        background: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
    }
    .btn-primary:hover {
        background: var(--primary-dark) !important;
        border-color: var(--primary-dark) !important;
    }
    
    .btn-outline-primary {
        border-color: var(--primary-color) !important;
        color: var(--primary-color) !important;
    }
    .btn-outline-primary:hover {
        background: var(--primary-color) !important;
        color: white !important;
    }
    
    .btn-success {
        background: var(--success-color) !important;
        border-color: var(--success-color) !important;
    }
    
    .btn-danger {
        background: var(--danger-color) !important;
        border-color: var(--danger-color) !important;
    }
    
    .btn-warning {
        background: var(--warning-color) !important;
        border-color: var(--warning-color) !important;
        color: #000 !important;
    }
    
    .badge.bg-primary {
        background: var(--primary-color) !important;
    }
    
    .badge.bg-warning {
        background: var(--warning-color) !important;
        color: #000 !important;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 337
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

        // line 338
        yield "<div class=\"purchase-container\">
    <div class=\"header-bar\">
        <h1 class=\"h2 mb-0\">
            <i class=\"bi bi-cart3 text-primary\"></i>
            Panier d'achat
        </h1>
        <div>
            <a href=\"";
        // line 345
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"bi bi-arrow-left\"></i> Retour
            </a>
            <button type=\"button\" class=\"btn btn-primary\" id=\"confirmOrderBtn\" ";
        // line 348
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 348, $this->source); })()))) {
            yield "disabled";
        }
        yield ">
                <i class=\"bi bi-check-lg\"></i> Confirmer la commande
            </button>
        </div>
    </div>

    <div class=\"search-section\">
        <div class=\"search-bar\">
            <div class=\"input-group search-input-group\">
                <input type=\"text\" class=\"form-control\" id=\"productSearch\" placeholder=\"Rechercher un produit par nom ou code-barres...\" autocomplete=\"off\">
                <button class=\"btn\" type=\"button\" id=\"scanBarcodeBtn\">
                    <i class=\"bi bi-upc-scan\"></i> Scanner
                </button>
            </div>
        </div>
    </div>

    <div class=\"two-columns\">
        <div class=\"products-panel\">
            <div class=\"panel-header\">
                <i class=\"bi bi-search me-2\"></i> Produits disponibles
                <span class=\"badge bg-secondary ms-2\" id=\"resultCount\">0</span>
            </div>
            <div class=\"panel-content\" id=\"productResultsContainer\">
                <div class=\"text-center text-muted py-5\">
                    <i class=\"bi bi-search fs-1\"></i>
                    <p class=\"mt-2\">Commencez à taper pour voir les produits</p>
                </div>
            </div>
        </div>

        <div class=\"cart-panel\">
            <div class=\"panel-header\">
                <i class=\"bi bi-cart me-2\"></i> Votre panier
                <span class=\"badge bg-primary rounded-pill ms-2\" id=\"cartCount\">";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 382, $this->source); })())), "html", null, true);
        yield "</span>
            </div>
            <div class=\"panel-content\" id=\"cartContainer\">
                ";
        // line 385
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 385, $this->source); })()))) {
            // line 386
            yield "                    <div class=\"text-center py-5 text-muted\">
                        <i class=\"bi bi-cart-x fs-1\"></i>
                        <p class=\"mt-2\">Votre panier est vide</p>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"document.getElementById('productSearch').focus()\">
                            <i class=\"bi bi-plus-circle\"></i> Ajouter des produits
                        </button>
                    </div>
                ";
        } else {
            // line 394
            yield "                    <ul class=\"cart-items\" id=\"cartItemsList\">
                        ";
            // line 395
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 395, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 396
                yield "                            <li class=\"cart-item\" data-product-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_id", [], "any", false, false, false, 396), "html", null, true);
                yield "\">
                                <div class=\"cart-item-img\">
                                    ";
                // line 398
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 398) && (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 398) != "default-product.png"))) {
                    // line 399
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 399))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 399), "html", null, true);
                    yield "\" onerror=\"this.style.display='none'; this.parentElement.querySelector('.fallback-icon').style.display='flex';\">
                                    ";
                }
                // line 401
                yield "                                    <i class=\"fas fa-box fallback-icon\" style=\"display: ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 401) && (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 401) != "default-product.png"))) ? ("none") : ("flex"));
                yield ";\"></i>
                                </div>
                                <div class=\"cart-item-details\">
                                    <div class=\"cart-item-title\">";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 404), "html", null, true);
                yield "</div>
                                    <div class=\"cart-item-meta\">
                                        <i class=\"bi bi-upc-scan\"></i> ";
                // line 406
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "barcode", [], "any", false, false, false, 406), "html", null, true);
                yield "
                                        ";
                // line 407
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit", [], "any", false, false, false, 407)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 408
                    yield "                                            <span class=\"ms-2\"><i class=\"bi bi-rulers\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit", [], "any", false, false, false, 408), "html", null, true);
                    yield "</span>
                                        ";
                }
                // line 410
                yield "                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "has_expiry_date", [], "any", false, false, false, 410)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 411
                    yield "                                            <span class=\"badge bg-warning text-dark\">Périssable</span>
                                        ";
                }
                // line 413
                yield "                                    </div>
                                </div>
                                <div class=\"cart-item-quantity\">
                                    <span class=\"badge bg-secondary\">";
                // line 416
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 416), "html", null, true);
                yield "</span>
                                </div>
                                <div class=\"cart-item-price\">
                                    <div class=\"total\">";
                // line 419
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 419), 0, ",", " "), "html", null, true);
                yield " FCFA</div>
                                    <small class=\"text-muted\">";
                // line 420
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit_price", [], "any", false, false, false, 420), 0, ",", " "), "html", null, true);
                yield " FCFA/unité</small>
                                    <div class=\"action-buttons\">
                                        <button class=\"btn btn-sm btn-outline-primary edit-item\" 
                                                data-id=\"";
                // line 423
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_id", [], "any", false, false, false, 423), "html", null, true);
                yield "\"
                                                data-name=\"";
                // line 424
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 424), "html", null, true);
                yield "\"
                                                data-quantity=\"";
                // line 425
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 425), "html", null, true);
                yield "\"
                                                data-price=\"";
                // line 426
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit_price", [], "any", false, false, false, 426), "html", null, true);
                yield "\">
                                            <i class=\"bi bi-pencil\"></i> Modifier
                                        </button>
                                        <button class=\"btn btn-sm btn-outline-danger remove-btn\" data-id=\"";
                // line 429
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_id", [], "any", false, false, false, 429), "html", null, true);
                yield "\">
                                            <i class=\"bi bi-trash\"></i> Supprimer
                                        </button>
                                    </div>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 436
            yield "                    </ul>
                ";
        }
        // line 438
        yield "            </div>
            <div class=\"cart-footer\">
                <strong>Total TTC :</strong>
                <h4 class=\"mb-0 text-primary\" id=\"cartTotal\">";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["cart_total"]) || array_key_exists("cart_total", $context) ? $context["cart_total"] : (function () { throw new RuntimeError('Variable "cart_total" does not exist.', 441, $this->source); })()), 0, ",", " "), "html", null, true);
        yield " FCFA</h4>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'ajout produit -->
<div class=\"modal fade\" id=\"addProductModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">Ajouter au panier</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-3\" id=\"modalProductImageContainer\">
                    <div class=\"product-img-fallback bg-light rounded d-flex align-items-center justify-content-center mx-auto\" style=\"width: 80px; height: 80px;\">
                        <i class=\"fas fa-box text-secondary fs-1\"></i>
                    </div>
                </div>
                <h6 class=\"text-center fw-bold\" id=\"modalProductName\">Nom du produit</h6>
                <p class=\"text-center text-muted small\" id=\"modalProductBarcode\">Code-barres</p>
                <p class=\"text-center text-muted small\" id=\"modalProductUnit\"></p>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Quantité</label>
                    <div class=\"input-group\">
                        <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"decrementQty\">-</button>
                        <input type=\"number\" id=\"productQuantity\" class=\"form-control text-center\" value=\"1\" min=\"1\">
                        <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"incrementQty\">+</button>
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Prix unitaire (FCFA)</label>
                    <input type=\"number\" id=\"productPrice\" class=\"form-control\" step=\"0.01\">
                </div>
                <div id=\"perishableWarning\" class=\"alert alert-warning d-none\">
                    <i class=\"bi bi-exclamation-triangle\"></i>
                    Ce produit est périssable. Le numéro de lot sera généré à la réception.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmAddToCartBtn\">
                    <span class=\"btn-text\">Ajouter au panier</span>
                    <span class=\"btn-spinner\"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de modification d'article -->
<div class=\"modal fade\" id=\"editItemModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">Modifier l'article</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <input type=\"hidden\" id=\"editProductId\" value=\"\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Produit</label>
                    <input type=\"text\" id=\"editProductName\" class=\"form-control\" readonly>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Quantité</label>
                    <input type=\"number\" id=\"editQuantity\" class=\"form-control\" min=\"1\" step=\"1\" value=\"1\">
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Prix unitaire (FCFA)</label>
                    <input type=\"number\" id=\"editUnitPrice\" class=\"form-control\" step=\"0.01\" min=\"0.01\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"saveEditChanges\">
                    <span class=\"btn-text\">Enregistrer</span>
                    <span class=\"btn-spinner\"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
<div class=\"modal fade\" id=\"removeCartItemModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Supprimer l'article ?</h5>
                <p class=\"text-muted\">Êtes-vous sûr de vouloir retirer cet article du panier ?</p>
                <input type=\"hidden\" id=\"removeProductId\" value=\"\">
            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmRemoveBtn\">
                    <span class=\"btn-text\">Supprimer</span>
                    <span class=\"btn-spinner\"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de commande avec vérification des fournisseurs -->
<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"bi bi-check-circle\"></i> Confirmer la commande</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 560
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 560, $this->source); })()))) {
            // line 561
            yield "                    <div class=\"alert alert-danger\">
                        <i class=\"bi bi-exclamation-triangle me-2\"></i>
                        <strong>Aucun fournisseur disponible</strong><br>
                        Veuillez activer des fournisseurs ou contacter l'administrateur.
                    </div>
                ";
        } else {
            // line 567
            yield "                    <form id=\"confirmationForm\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-12\">
                                <label class=\"form-label\">Fournisseur *</label>
                                <select name=\"supplier_id\" id=\"supplierSelect\" class=\"form-select\" required>
                                    <option value=\"\">Sélectionner un fournisseur</option>
                                    ";
            // line 573
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 573, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
                // line 574
                yield "                                       <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 574), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 574), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "email", [], "any", false, false, false, 574), "html", null, true);
                yield ")</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 576
            yield "                                </select>
                            </div>
                            <div class=\"col-12\">
                                <label class=\"form-label\">Bon de commande</label>
                                <input type=\"text\" name=\"bon_commande\" class=\"form-control\" placeholder=\"Optionnel - Numéro ou référence\">
                            </div>
                            <div class=\"col-12\">
                                <label class=\"form-label\">Notes</label>
                                <textarea name=\"notes\" class=\"form-control\" rows=\"2\" placeholder=\"Instructions de livraison, conditions particulières...\"></textarea>
                            </div>
                            <div class=\"col-12\">
                                <hr>
                                <h6>Options de notification</h6>
                                <div class=\"row g-2\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"notify_by_email\" value=\"1\" checked>
                                            <label class=\"form-check-label\">Email</label>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"notify_by_whatsapp\" value=\"1\" checked>
                                            <label class=\"form-check-label\">WhatsApp</label>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"send_image\" value=\"1\" checked>
                                            <label class=\"form-check-label\">Inclure image produit (WhatsApp)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <label class=\"form-label\">Message personnalisé (optionnel)</label>
                                <textarea name=\"confirmation_message\" class=\"form-control\" rows=\"2\" placeholder=\"Ajouter un message pour le fournisseur...\"></textarea>
                            </div>
                        </div>
                    </form>
                    <div class=\"alert alert-info mt-3\">
                        <i class=\"bi bi-info-circle\"></i>
                        La confirmation enverra un email et/ou WhatsApp au fournisseur avec les détails de la commande.
                    </div>
                ";
        }
        // line 621
        yield "            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                ";
        // line 624
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 624, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 625
            yield "                    <button type=\"button\" class=\"btn btn-primary\" id=\"confirmPurchaseBtn\">
                        <span class=\"btn-text\">Confirmer la commande</span>
                        <span class=\"btn-spinner\"></span>
                    </button>
                ";
        }
        // line 630
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 636
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

        // line 637
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
    // URLs
    const searchUrl = \"";
        // line 641
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_search_products");
        yield "\";
    const addToCartUrl = \"";
        // line 642
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_add_product");
        yield "\";
    const cartDataUrl = \"";
        // line 643
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart_data");
        yield "\";
    const confirmUrl = \"";
        // line 644
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_confirm");
        yield "\";
    const removeProductUrlTemplate = \"";
        // line 645
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_remove_product", ["productId" => "PLACEHOLDER"]);
        yield "\".replace('PLACEHOLDER', '{productId}');
    const updateItemUrlTemplate = \"";
        // line 646
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_update_item", ["productId" => "PLACEHOLDER"]);
        yield "\".replace('PLACEHOLDER', '{productId}');

    let searchTimeout = null;
    let currentProduct = null;

    const searchInput = document.getElementById('productSearch');
    const resultsContainer = document.getElementById('productResultsContainer');
    const cartContainer = document.getElementById('cartContainer');
    const cartCountSpan = document.getElementById('cartCount');
    const cartTotalSpan = document.getElementById('cartTotal');
    const confirmOrderBtn = document.getElementById('confirmOrderBtn');

    const addProductModal = new bootstrap.Modal(document.getElementById('addProductModal'));
    const editModal = new bootstrap.Modal(document.getElementById('editItemModal'));
    const removeModal = new bootstrap.Modal(document.getElementById('removeCartItemModal'));
    const confirmModal = new bootstrap.Modal(document.getElementById('confirmationModal'));

    function setButtonLoading(btn, isLoading) {
        if (!btn) return;
        if (isLoading) {
            btn.classList.add('btn-loading');
            btn.disabled = true;
        } else {
            btn.classList.remove('btn-loading');
            btn.disabled = false;
        }
    }

    function setModalLoading(modalElement, isLoading) {
        if (!modalElement) return;
        const modalContent = modalElement.querySelector('.modal-content');
        if (!modalContent) return;
        
        let overlay = modalContent.querySelector('.modal-loading-overlay');
        if (isLoading) {
            if (!overlay) {
                overlay = document.createElement('div');
                overlay.className = 'modal-loading-overlay';
                overlay.innerHTML = `
                    <div class=\"text-center\">
                        <div class=\"spinner-border text-primary\" role=\"status\">
                            <span class=\"visually-hidden\">Chargement...</span>
                        </div>
                        <p class=\"mt-2 mb-0\">Traitement en cours...</p>
                    </div>
                `;
                modalContent.style.position = 'relative';
                modalContent.appendChild(overlay);
            }
            overlay.style.display = 'flex';
        } else if (overlay) {
            overlay.style.display = 'none';
        }
    }

    // Éléments du modal d'ajout
    const modalProductImageContainer = document.getElementById('modalProductImageContainer');
    const modalProductName = document.getElementById('modalProductName');
    const modalProductBarcode = document.getElementById('modalProductBarcode');
    const modalProductUnit = document.getElementById('modalProductUnit');
    const productQuantityInput = document.getElementById('productQuantity');
    const productPriceInput = document.getElementById('productPrice');
    const perishableWarning = document.getElementById('perishableWarning');
    const decrementQty = document.getElementById('decrementQty');
    const incrementQty = document.getElementById('incrementQty');
    const confirmAddBtn = document.getElementById('confirmAddToCartBtn');

    // Éléments du modal d'édition
    const editProductId = document.getElementById('editProductId');
    const editProductName = document.getElementById('editProductName');
    const editQuantity = document.getElementById('editQuantity');
    const editUnitPrice = document.getElementById('editUnitPrice');
    const saveEditChangesBtn = document.getElementById('saveEditChanges');

    // Éléments du modal de suppression
    const confirmRemoveBtn = document.getElementById('confirmRemoveBtn');
    let pendingRemoveProductId = null;

    // Gestion des quantités
    incrementQty?.addEventListener('click', () => {
        productQuantityInput.value = parseInt(productQuantityInput.value) + 1;
    });
    decrementQty?.addEventListener('click', () => {
        let val = parseInt(productQuantityInput.value);
        if (val > 1) productQuantityInput.value = val - 1;
    });

    // Ajout au panier
    confirmAddBtn?.addEventListener('click', async () => {
        if (!currentProduct) {
            showToast('error', 'Aucun produit sélectionné');
            addProductModal.hide();
            return;
        }
        const quantity = parseInt(productQuantityInput.value);
        const unitPrice = parseFloat(productPriceInput.value);
        if (isNaN(quantity) || quantity < 1) {
            showToast('error', 'Quantité invalide');
            return;
        }
        if (isNaN(unitPrice) || unitPrice <= 0) {
            showToast('error', 'Prix unitaire invalide');
            return;
        }

        setButtonLoading(confirmAddBtn, true);
        setModalLoading(document.getElementById('addProductModal'), true);

        const formData = new FormData();
        formData.append('product_id', currentProduct.id);
        formData.append('quantity', quantity);
        formData.append('unit_price', unitPrice);
        
        try {
            const response = await fetch(addToCartUrl, { method: 'POST', body: formData });
            const data = await response.json();
            if (data.success) {
                await refreshCart();
                showToast('success', `\${currentProduct.name} ajouté au panier`);
                addProductModal.hide();
                productQuantityInput.value = 1;
                productPriceInput.value = '';
                currentProduct = null;
                searchInput.value = '';
                resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"bi bi-search fs-1\"></i><p class=\"mt-2\">Commencez à taper pour voir les produits</p></div>';
                document.getElementById('resultCount').textContent = '0';
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur ajout panier:', error);
            showToast('error', 'Erreur lors de l\\'ajout');
        } finally {
            setButtonLoading(confirmAddBtn, false);
            setModalLoading(document.getElementById('addProductModal'), false);
        }
    });

    // Recherche en temps réel
    searchInput?.addEventListener('input', function(e) {
        const query = e.target.value.trim();
        if (searchTimeout) clearTimeout(searchTimeout);
        if (query.length < 2) {
            resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"bi bi-search fs-1\"></i><p class=\"mt-2\">Commencez à taper pour voir les produits</p></div>';
            document.getElementById('resultCount').textContent = '0';
            return;
        }
        resultsContainer.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\" role=\"status\"><span class=\"visually-hidden\">Chargement...</span></div><p class=\"mt-2\">Recherche en cours...</p></div>';
        searchTimeout = setTimeout(() => {
            fetch(`\${searchUrl}?q=\${encodeURIComponent(query)}`)
                .then(response => {
                    if (!response.ok) throw new Error('Erreur réseau');
                    return response.json();
                })
                .then(products => {
                    if (!products.length) {
                        resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"bi bi-search fs-1\"></i><p class=\"mt-2\">Aucun produit trouvé</p></div>';
                        document.getElementById('resultCount').textContent = '0';
                        return;
                    }
                    let html = '<ul class=\"product-list\">';
                    products.forEach(product => {
                        html += `
                            <li class=\"product-list-item\" 
                                data-product-id=\"\${product.id}\"
                                data-product-name=\"\${escapeHtml(product.name)}\"
                                data-product-barcode=\"\${product.barcode}\"
                                data-product-price=\"\${product.purchase_price}\"
                                data-product-image=\"\${product.image ? '/uploads/products/' + product.image : ''}\"
                                data-has-expiry=\"\${product.has_expiry_date}\"
                                data-unit=\"\${product.unit || ''}\">
                                <div class=\"product-list-img\">
                                    \${product.image ? 
                                        `<img src=\"/uploads/products/\${product.image}\" alt=\"\${escapeHtml(product.name)}\">` : 
                                        `<i class=\"fas fa-box fallback-icon\"></i>`
                                    }
                                </div>
                                <div class=\"product-list-info\">
                                    <div class=\"product-list-title\">\${escapeHtml(product.name)}</div>
                                    <div class=\"product-list-meta\">
                                        <i class=\"bi bi-upc-scan\"></i> \${product.barcode}
                                        \${product.unit ? `<span class=\"ms-2\"><i class=\"bi bi-rulers\"></i> \${product.unit}</span>` : ''}
                                    </div>
                                </div>
                                <div class=\"product-list-price\">
                                    \${formatPrice(product.purchase_price)} FCFA
                                    \${product.has_expiry_date ? '<span class=\"product-list-badge\">Périssable</span>' : ''}
                                </div>
                            </li>
                        `;
                    });
                    html += '</ul>';
                    resultsContainer.innerHTML = html;
                    document.getElementById('resultCount').textContent = products.length;

                    document.querySelectorAll('.product-list-item').forEach(item => {
                        item.addEventListener('click', () => openAddProductModal(item));
                    });
                })
                .catch(error => {
                    console.error('Erreur recherche:', error);
                    resultsContainer.innerHTML = '<div class=\"text-center py-5 text-danger\">Erreur de connexion. Veuillez réessayer.</div>';
                });
        }, 300);
    });

    function openAddProductModal(element) {
        const productId = element.dataset.productId;
        const productName = element.dataset.productName;
        const productBarcode = element.dataset.productBarcode;
        const productPrice = parseFloat(element.dataset.productPrice);
        const productImage = element.dataset.productImage;
        const hasExpiry = element.dataset.hasExpiry === 'true';
        const productUnit = element.dataset.unit || 'pièce';

        modalProductName.textContent = productName;
        modalProductBarcode.textContent = productBarcode;
        modalProductUnit.textContent = `Unité : \${productUnit}`;
        productPriceInput.value = productPrice;
        
        if (productImage) {
            modalProductImageContainer.innerHTML = `<img src=\"\${productImage}\" alt=\"\${escapeHtml(productName)}\" style=\"width: 80px; height: 80px; object-fit: cover; border-radius: 8px;\">`;
        } else {
            modalProductImageContainer.innerHTML = `<div class=\"product-img-fallback bg-light rounded d-flex align-items-center justify-content-center mx-auto\" style=\"width: 80px; height: 80px;\"><i class=\"fas fa-box text-secondary fs-1\"></i></div>`;
        }
        
        if (hasExpiry) {
            perishableWarning.classList.remove('d-none');
        } else {
            perishableWarning.classList.add('d-none');
        }
        
        currentProduct = {
            id: parseInt(productId),
            name: productName,
            barcode: productBarcode,
            purchase_price: productPrice,
            has_expiry_date: hasExpiry,
            unit: productUnit
        };
        addProductModal.show();
    }

    // Gestion des actions du panier
    cartContainer?.addEventListener('click', async (e) => {
        const removeBtn = e.target.closest('.remove-btn');
        if (removeBtn) {
            const productId = parseInt(removeBtn.dataset.id);
            pendingRemoveProductId = productId;
            removeModal.show();
            return;
        }
        
        const editBtn = e.target.closest('.edit-item');
        if (editBtn) {
            const productId = parseInt(editBtn.dataset.id);
            const productName = editBtn.dataset.name;
            const quantity = parseInt(editBtn.dataset.quantity);
            const price = parseFloat(editBtn.dataset.price);
            editProductId.value = productId;
            editProductName.value = productName;
            editQuantity.value = quantity;
            editUnitPrice.value = price;
            editModal.show();
        }
    });

    // Sauvegarde modification
    saveEditChangesBtn?.addEventListener('click', async () => {
        const productId = editProductId.value;
        const quantity = parseInt(editQuantity.value);
        const unitPrice = parseFloat(editUnitPrice.value);
        
        if (isNaN(quantity) || quantity < 1) {
            showToast('error', 'Quantité invalide');
            return;
        }
        if (isNaN(unitPrice) || unitPrice <= 0) {
            showToast('error', 'Prix unitaire invalide');
            return;
        }

        setButtonLoading(saveEditChangesBtn, true);
        setModalLoading(document.getElementById('editItemModal'), true);

        const updateUrl = updateItemUrlTemplate.replace('{productId}', productId);
        try {
            const response = await fetch(updateUrl, {
                method: 'PUT',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ quantity: quantity, unit_price: unitPrice })
            });
            const data = await response.json();
            if (data.success) {
                await refreshCart();
                editModal.hide();
                showToast('success', 'Article modifié avec succès');
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur updateItem:', error);
            showToast('error', 'Erreur lors de la modification');
        } finally {
            setButtonLoading(saveEditChangesBtn, false);
            setModalLoading(document.getElementById('editItemModal'), false);
        }
    });

    // Confirmation suppression
    confirmRemoveBtn?.addEventListener('click', async () => {
        if (pendingRemoveProductId !== null) {
            setButtonLoading(confirmRemoveBtn, true);
            setModalLoading(document.getElementById('removeCartItemModal'), true);
            await removeFromCart(pendingRemoveProductId);
            setButtonLoading(confirmRemoveBtn, false);
            setModalLoading(document.getElementById('removeCartItemModal'), false);
            pendingRemoveProductId = null;
            removeModal.hide();
        }
    });

    async function removeFromCart(productId) {
        const removeUrl = removeProductUrlTemplate.replace('{productId}', productId);
        try {
            const response = await fetch(removeUrl, { method: 'DELETE' });
            const data = await response.json();
            if (data.success) {
                await refreshCart();
                showToast('success', 'Produit supprimé');
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur removeFromCart:', error);
            showToast('error', 'Erreur lors de la suppression');
        }
    }

    // Rafraîchissement panier
    async function refreshCart() {
        try {
            const response = await fetch(cartDataUrl);
            if (!response.ok) throw new Error(`HTTP \${response.status}`);
            const data = await response.json();
            updateCartDisplay(data);
        } catch (error) {
            console.error('Erreur refreshCart:', error);
            showToast('error', 'Impossible de rafraîchir le panier');
        }
    }

    function updateCartDisplay(cartData) {
        if (!cartData.items || cartData.items.length === 0) {
            cartContainer.innerHTML = `
                <div class=\"text-center py-5 text-muted\">
                    <i class=\"bi bi-cart-x fs-1\"></i>
                    <p class=\"mt-2\">Votre panier est vide</p>
                    <button class=\"btn btn-primary btn-sm\" onclick=\"document.getElementById('productSearch').focus()\">
                        <i class=\"bi bi-plus-circle\"></i> Ajouter des produits
                    </button>
                </div>
            `;
            cartTotalSpan.innerHTML = '0 FCFA';
            cartCountSpan.innerHTML = '0';
            confirmOrderBtn.disabled = true;
            return;
        }

        let itemsHtml = '<ul class=\"cart-items\">';
        cartData.items.forEach(item => {
            itemsHtml += `
                <li class=\"cart-item\" data-product-id=\"\${item.product_id}\">
                    <div class=\"cart-item-img\">
                        \${(item.image && item.image != 'default-product.png') ? `<img src=\"/uploads/products/\${item.image}\" alt=\"\${escapeHtml(item.product_name)}\">` : ''}
                        <i class=\"fas fa-box fallback-icon\" style=\"display: \${(item.image && item.image != 'default-product.png') ? 'none' : 'flex'};\"></i>
                    </div>
                    <div class=\"cart-item-details\">
                        <div class=\"cart-item-title\">\${escapeHtml(item.product_name)}</div>
                        <div class=\"cart-item-meta\">
                            <i class=\"bi bi-upc-scan\"></i> \${item.barcode}
                            \${item.unit ? `<span class=\"ms-2\"><i class=\"bi bi-rulers\"></i> \${item.unit}</span>` : ''}
                            \${item.has_expiry_date ? '<span class=\"badge bg-warning text-dark\">Périssable</span>' : ''}
                        </div>
                    </div>
                    <div class=\"cart-item-quantity\">
                        <span class=\"badge bg-secondary\">\${item.quantity}</span>
                    </div>
                    <div class=\"cart-item-price\">
                        <div class=\"total\">\${formatPrice(item.total_price)} FCFA</div>
                        <small class=\"text-muted\">\${formatPrice(item.unit_price)} FCFA/unité</small>
                        <div class=\"action-buttons\">
                            <button class=\"btn btn-sm btn-outline-primary edit-item\" 
                                    data-id=\"\${item.product_id}\"
                                    data-name=\"\${escapeHtml(item.product_name)}\"
                                    data-quantity=\"\${item.quantity}\"
                                    data-price=\"\${item.unit_price}\">
                                <i class=\"bi bi-pencil\"></i> Modifier
                            </button>
                            <button class=\"btn btn-sm btn-outline-danger remove-btn\" data-id=\"\${item.product_id}\">
                                <i class=\"bi bi-trash\"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </li>
            `;
        });
        itemsHtml += '</ul>';
        cartContainer.innerHTML = itemsHtml;
        cartTotalSpan.innerHTML = `\${formatPrice(cartData.total)} FCFA`;
        cartCountSpan.innerHTML = cartData.items.length;
        confirmOrderBtn.disabled = false;
    }

    // Scanner
    document.getElementById('scanBarcodeBtn')?.addEventListener('click', async () => {
        const barcode = prompt('Entrez le code-barres à scanner:');
        if (!barcode || barcode.length < 3) return;
        try {
            const response = await fetch(`\${searchUrl}?q=\${encodeURIComponent(barcode)}`);
            const products = await response.json();
            if (!products.length) {
                showToast('error', 'Aucun produit trouvé avec ce code-barres');
                return;
            }
            const product = products[0];
            const dummy = document.createElement('div');
            dummy.dataset.productId = product.id;
            dummy.dataset.productName = product.name;
            dummy.dataset.productBarcode = product.barcode;
            dummy.dataset.productPrice = product.purchase_price;
            dummy.dataset.productImage = product.image ? '/uploads/products/' + product.image : '';
            dummy.dataset.hasExpiry = product.has_expiry_date;
            dummy.dataset.unit = product.unit || 'pièce';
            openAddProductModal(dummy);
        } catch (error) {
            console.error('Erreur scan:', error);
            showToast('error', 'Erreur lors de la recherche du produit');
        }
    });

    // Confirmation commande
    const confirmPurchaseBtn = document.getElementById('confirmPurchaseBtn');
    
    confirmOrderBtn?.addEventListener('click', () => confirmModal.show());
    
    confirmPurchaseBtn?.addEventListener('click', async () => {
        const form = document.getElementById('confirmationForm');
        const formData = new FormData(form);
        
        setButtonLoading(confirmPurchaseBtn, true);
        setModalLoading(document.getElementById('confirmationModal'), true);
        
        try {
            const response = await fetch(confirmUrl, { method: 'POST', body: formData });
            const data = await response.json();
            if (data.success) {
                confirmModal.hide();
                showToast('success', data.message);
                setTimeout(() => window.location.href = data.redirect_url, 1500);
            } else {
                showToast('error', data.error);
                setButtonLoading(confirmPurchaseBtn, false);
                setModalLoading(document.getElementById('confirmationModal'), false);
            }
        } catch (error) {
            console.error('Erreur confirmation:', error);
            showToast('error', 'Erreur lors de la confirmation');
            setButtonLoading(confirmPurchaseBtn, false);
            setModalLoading(document.getElementById('confirmationModal'), false);
        }
    });

    // Utilitaires
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function formatPrice(price) {
        return new Intl.NumberFormat('fr-FR').format(price);
    }

    function showToast(type, message) {
        const toastHtml = `
            <div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 9999\">
                <div class=\"toast align-items-center text-white border-0 toast-\${type}\" role=\"alert\" data-bs-autohide=\"true\" data-bs-delay=\"3000\">
                    <div class=\"d-flex\">
                        <div class=\"toast-body\">
                            <i class=\"bi bi-\${type === 'success' ? 'check-circle' : 'exclamation-triangle'} me-2\"></i>
                            \${message}
                        </div>
                        <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
                    </div>
                </div>
            </div>
        `;
        const container = document.createElement('div');
        container.innerHTML = toastHtml;
        document.body.appendChild(container);
        const toastElement = container.querySelector('.toast');
        const toast = new bootstrap.Toast(toastElement);
        toast.show();
        toastElement.addEventListener('hidden.bs.toast', () => container.remove());
    }

    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof \$.fn.select2 !== 'undefined') {
            \$('#supplierSelect').select2({
                theme: 'bootstrap-5',
                placeholder: 'Rechercher un fournisseur...',
                allowClear: true,
                dropdownParent: \$('#confirmationModal')
            });
        }
        refreshCart();
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
        return "purchase/cart.html.twig";
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
        return array (  915 => 646,  911 => 645,  907 => 644,  903 => 643,  899 => 642,  895 => 641,  888 => 637,  875 => 636,  860 => 630,  853 => 625,  851 => 624,  846 => 621,  799 => 576,  786 => 574,  782 => 573,  774 => 567,  766 => 561,  764 => 560,  642 => 441,  637 => 438,  633 => 436,  620 => 429,  614 => 426,  610 => 425,  606 => 424,  602 => 423,  596 => 420,  592 => 419,  586 => 416,  581 => 413,  577 => 411,  574 => 410,  568 => 408,  566 => 407,  562 => 406,  557 => 404,  550 => 401,  542 => 399,  540 => 398,  534 => 396,  530 => 395,  527 => 394,  517 => 386,  515 => 385,  509 => 382,  470 => 348,  464 => 345,  455 => 338,  442 => 337,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/purchase/cart.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Panier d'achat - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    /* ✅ NE PAS REDÉFINIR :root ICI - Utiliser les variables de base.html.twig */

    .purchase-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    .header-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .search-section {
        width: 100%;
    }
    .search-bar {
        max-width: 800px;
        margin: 0 auto;
    }
    .search-input-group {
        border-radius: 50px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .search-input-group .form-control {
        border: 1px solid #e2e8f0;
        border-right: none;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
    }
    .search-input-group .form-control:focus {
        box-shadow: none;
        border-color: var(--primary-color);
    }
    .search-input-group .btn {
        padding: 0.75rem 1.5rem;
        background: white;
        border: 1px solid #e2e8f0;
        border-left: none;
        color: var(--primary-color);
    }
    .two-columns {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
    }
    .products-panel, .cart-panel {
        flex: 1;
        min-width: 300px;
        background: white;
        border-radius: 24px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: calc(100vh - 220px);
        min-height: 500px;
    }
    .panel-header {
        background: #f8fafc;
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #e2e8f0;
        font-weight: 600;
        flex-shrink: 0;
    }
    .panel-content {
        flex: 1;
        overflow-y: auto;
        padding: 0;
    }
    .product-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .product-list-item {
        display: flex;
        align-items: center;
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #edf2f7;
        cursor: pointer;
        transition: background 0.2s;
    }
    .product-list-item:hover {
        background: #f8fafc;
    }
    .product-list-img {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    .product-list-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }
    .product-list-img .fallback-icon {
        font-size: 2rem;
        color: #94a3b8;
    }
    .product-list-info { flex: 1; }
    .product-list-title { font-weight: 600; }
    .product-list-meta { font-size: 0.8rem; color: #64748b; }
    .product-list-price {
        font-weight: 700;
        color: var(--primary-color);
        text-align: right;
        min-width: 100px;
    }
    .product-list-badge {
        display: inline-block;
        background: #fef3c7;
        color: #b45309;
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
        border-radius: 20px;
        margin-left: 0.5rem;
    }
    .cart-items {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .cart-item {
        display: flex;
        align-items: center;
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #edf2f7;
        transition: background 0.2s;
    }
    .cart-item:hover {
        background: #f8fafc;
    }
    .cart-item-img {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    .cart-item-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }
    .cart-item-img .fallback-icon {
        font-size: 2rem;
        color: #94a3b8;
    }
    .cart-item-details { flex: 1; }
    .cart-item-title { font-weight: 600; }
    .cart-item-meta {
        font-size: 0.8rem;
        color: #64748b;
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    .cart-item-quantity {
        margin: 0 1rem;
    }
    .cart-item-quantity .badge {
        font-size: 1rem;
        padding: 0.5rem 0.75rem;
    }
    .cart-item-price {
        text-align: right;
        min-width: 140px;
    }
    .cart-item-price .total {
        font-weight: 700;
        color: var(--primary-color);
    }
    .cart-footer {
        background: #f8fafc;
        padding: 1rem 1.5rem;
        border-top: 1px solid #e2e8f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        flex-shrink: 0;
    }
    @media (max-width: 768px) {
        .two-columns { flex-direction: column; }
        .products-panel, .cart-panel { height: auto; max-height: 500px; }
        .cart-item { flex-wrap: wrap; }
        .cart-item-quantity {
            margin: 0.5rem 0;
            width: 100%;
            text-align: center;
        }
        .cart-item-price {
            width: 100%;
            text-align: center;
            margin-top: 0.5rem;
        }
    }
    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: 0.2em;
    }
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        justify-content: flex-end;
        margin-top: 0.5rem;
    }
    
    .btn-loading {
        opacity: 0.7;
        cursor: wait;
        pointer-events: none;
    }
    .btn-loading .btn-text {
        display: none;
    }
    .btn-loading .btn-spinner {
        display: inline-block;
    }
    .btn-spinner {
        display: none;
        width: 1rem;
        height: 1rem;
        border: 2px solid rgba(255,255,255,0.3);
        border-radius: 50%;
        border-top-color: white;
        animation: spin 0.6s linear infinite;
    }
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    
    .modal-loading-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255,255,255,0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1060;
        border-radius: 0.5rem;
    }
    .modal-content {
        position: relative;
    }
    
    /* ✅ Couleurs dynamiques pour les modals */
    .modal-header.bg-primary {
        background: var(--primary-color) !important;
    }
    .modal-header.bg-primary .btn-close {
        filter: brightness(0) invert(1);
    }
    
    .text-primary {
        color: var(--primary-color) !important;
    }
    
    .btn-primary {
        background: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
    }
    .btn-primary:hover {
        background: var(--primary-dark) !important;
        border-color: var(--primary-dark) !important;
    }
    
    .btn-outline-primary {
        border-color: var(--primary-color) !important;
        color: var(--primary-color) !important;
    }
    .btn-outline-primary:hover {
        background: var(--primary-color) !important;
        color: white !important;
    }
    
    .btn-success {
        background: var(--success-color) !important;
        border-color: var(--success-color) !important;
    }
    
    .btn-danger {
        background: var(--danger-color) !important;
        border-color: var(--danger-color) !important;
    }
    
    .btn-warning {
        background: var(--warning-color) !important;
        border-color: var(--warning-color) !important;
        color: #000 !important;
    }
    
    .badge.bg-primary {
        background: var(--primary-color) !important;
    }
    
    .badge.bg-warning {
        background: var(--warning-color) !important;
        color: #000 !important;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"purchase-container\">
    <div class=\"header-bar\">
        <h1 class=\"h2 mb-0\">
            <i class=\"bi bi-cart3 text-primary\"></i>
            Panier d'achat
        </h1>
        <div>
            <a href=\"{{ path('purchase_index') }}\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"bi bi-arrow-left\"></i> Retour
            </a>
            <button type=\"button\" class=\"btn btn-primary\" id=\"confirmOrderBtn\" {% if cart is empty %}disabled{% endif %}>
                <i class=\"bi bi-check-lg\"></i> Confirmer la commande
            </button>
        </div>
    </div>

    <div class=\"search-section\">
        <div class=\"search-bar\">
            <div class=\"input-group search-input-group\">
                <input type=\"text\" class=\"form-control\" id=\"productSearch\" placeholder=\"Rechercher un produit par nom ou code-barres...\" autocomplete=\"off\">
                <button class=\"btn\" type=\"button\" id=\"scanBarcodeBtn\">
                    <i class=\"bi bi-upc-scan\"></i> Scanner
                </button>
            </div>
        </div>
    </div>

    <div class=\"two-columns\">
        <div class=\"products-panel\">
            <div class=\"panel-header\">
                <i class=\"bi bi-search me-2\"></i> Produits disponibles
                <span class=\"badge bg-secondary ms-2\" id=\"resultCount\">0</span>
            </div>
            <div class=\"panel-content\" id=\"productResultsContainer\">
                <div class=\"text-center text-muted py-5\">
                    <i class=\"bi bi-search fs-1\"></i>
                    <p class=\"mt-2\">Commencez à taper pour voir les produits</p>
                </div>
            </div>
        </div>

        <div class=\"cart-panel\">
            <div class=\"panel-header\">
                <i class=\"bi bi-cart me-2\"></i> Votre panier
                <span class=\"badge bg-primary rounded-pill ms-2\" id=\"cartCount\">{{ cart|length }}</span>
            </div>
            <div class=\"panel-content\" id=\"cartContainer\">
                {% if cart is empty %}
                    <div class=\"text-center py-5 text-muted\">
                        <i class=\"bi bi-cart-x fs-1\"></i>
                        <p class=\"mt-2\">Votre panier est vide</p>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"document.getElementById('productSearch').focus()\">
                            <i class=\"bi bi-plus-circle\"></i> Ajouter des produits
                        </button>
                    </div>
                {% else %}
                    <ul class=\"cart-items\" id=\"cartItemsList\">
                        {% for item in cart %}
                            <li class=\"cart-item\" data-product-id=\"{{ item.product_id }}\">
                                <div class=\"cart-item-img\">
                                    {% if item.image and item.image != 'default-product.png' %}
                                        <img src=\"{{ asset('uploads/products/' ~ item.image) }}\" alt=\"{{ item.product_name }}\" onerror=\"this.style.display='none'; this.parentElement.querySelector('.fallback-icon').style.display='flex';\">
                                    {% endif %}
                                    <i class=\"fas fa-box fallback-icon\" style=\"display: {{ (item.image and item.image != 'default-product.png') ? 'none' : 'flex' }};\"></i>
                                </div>
                                <div class=\"cart-item-details\">
                                    <div class=\"cart-item-title\">{{ item.product_name }}</div>
                                    <div class=\"cart-item-meta\">
                                        <i class=\"bi bi-upc-scan\"></i> {{ item.barcode }}
                                        {% if item.unit %}
                                            <span class=\"ms-2\"><i class=\"bi bi-rulers\"></i> {{ item.unit }}</span>
                                        {% endif %}
                                        {% if item.has_expiry_date %}
                                            <span class=\"badge bg-warning text-dark\">Périssable</span>
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"cart-item-quantity\">
                                    <span class=\"badge bg-secondary\">{{ item.quantity }}</span>
                                </div>
                                <div class=\"cart-item-price\">
                                    <div class=\"total\">{{ item.total_price|number_format(0, ',', ' ') }} FCFA</div>
                                    <small class=\"text-muted\">{{ item.unit_price|number_format(0, ',', ' ') }} FCFA/unité</small>
                                    <div class=\"action-buttons\">
                                        <button class=\"btn btn-sm btn-outline-primary edit-item\" 
                                                data-id=\"{{ item.product_id }}\"
                                                data-name=\"{{ item.product_name }}\"
                                                data-quantity=\"{{ item.quantity }}\"
                                                data-price=\"{{ item.unit_price }}\">
                                            <i class=\"bi bi-pencil\"></i> Modifier
                                        </button>
                                        <button class=\"btn btn-sm btn-outline-danger remove-btn\" data-id=\"{{ item.product_id }}\">
                                            <i class=\"bi bi-trash\"></i> Supprimer
                                        </button>
                                    </div>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
            <div class=\"cart-footer\">
                <strong>Total TTC :</strong>
                <h4 class=\"mb-0 text-primary\" id=\"cartTotal\">{{ cart_total|number_format(0, ',', ' ') }} FCFA</h4>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'ajout produit -->
<div class=\"modal fade\" id=\"addProductModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">Ajouter au panier</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-3\" id=\"modalProductImageContainer\">
                    <div class=\"product-img-fallback bg-light rounded d-flex align-items-center justify-content-center mx-auto\" style=\"width: 80px; height: 80px;\">
                        <i class=\"fas fa-box text-secondary fs-1\"></i>
                    </div>
                </div>
                <h6 class=\"text-center fw-bold\" id=\"modalProductName\">Nom du produit</h6>
                <p class=\"text-center text-muted small\" id=\"modalProductBarcode\">Code-barres</p>
                <p class=\"text-center text-muted small\" id=\"modalProductUnit\"></p>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Quantité</label>
                    <div class=\"input-group\">
                        <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"decrementQty\">-</button>
                        <input type=\"number\" id=\"productQuantity\" class=\"form-control text-center\" value=\"1\" min=\"1\">
                        <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"incrementQty\">+</button>
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Prix unitaire (FCFA)</label>
                    <input type=\"number\" id=\"productPrice\" class=\"form-control\" step=\"0.01\">
                </div>
                <div id=\"perishableWarning\" class=\"alert alert-warning d-none\">
                    <i class=\"bi bi-exclamation-triangle\"></i>
                    Ce produit est périssable. Le numéro de lot sera généré à la réception.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmAddToCartBtn\">
                    <span class=\"btn-text\">Ajouter au panier</span>
                    <span class=\"btn-spinner\"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de modification d'article -->
<div class=\"modal fade\" id=\"editItemModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">Modifier l'article</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <input type=\"hidden\" id=\"editProductId\" value=\"\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Produit</label>
                    <input type=\"text\" id=\"editProductName\" class=\"form-control\" readonly>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Quantité</label>
                    <input type=\"number\" id=\"editQuantity\" class=\"form-control\" min=\"1\" step=\"1\" value=\"1\">
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Prix unitaire (FCFA)</label>
                    <input type=\"number\" id=\"editUnitPrice\" class=\"form-control\" step=\"0.01\" min=\"0.01\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"saveEditChanges\">
                    <span class=\"btn-text\">Enregistrer</span>
                    <span class=\"btn-spinner\"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
<div class=\"modal fade\" id=\"removeCartItemModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Supprimer l'article ?</h5>
                <p class=\"text-muted\">Êtes-vous sûr de vouloir retirer cet article du panier ?</p>
                <input type=\"hidden\" id=\"removeProductId\" value=\"\">
            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmRemoveBtn\">
                    <span class=\"btn-text\">Supprimer</span>
                    <span class=\"btn-spinner\"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de commande avec vérification des fournisseurs -->
<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"bi bi-check-circle\"></i> Confirmer la commande</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                {% if suppliers is empty %}
                    <div class=\"alert alert-danger\">
                        <i class=\"bi bi-exclamation-triangle me-2\"></i>
                        <strong>Aucun fournisseur disponible</strong><br>
                        Veuillez activer des fournisseurs ou contacter l'administrateur.
                    </div>
                {% else %}
                    <form id=\"confirmationForm\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-12\">
                                <label class=\"form-label\">Fournisseur *</label>
                                <select name=\"supplier_id\" id=\"supplierSelect\" class=\"form-select\" required>
                                    <option value=\"\">Sélectionner un fournisseur</option>
                                    {% for supplier in suppliers %}
                                       <option value=\"{{ supplier.id }}\">{{ supplier.name }} ({{ supplier.email }})</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-12\">
                                <label class=\"form-label\">Bon de commande</label>
                                <input type=\"text\" name=\"bon_commande\" class=\"form-control\" placeholder=\"Optionnel - Numéro ou référence\">
                            </div>
                            <div class=\"col-12\">
                                <label class=\"form-label\">Notes</label>
                                <textarea name=\"notes\" class=\"form-control\" rows=\"2\" placeholder=\"Instructions de livraison, conditions particulières...\"></textarea>
                            </div>
                            <div class=\"col-12\">
                                <hr>
                                <h6>Options de notification</h6>
                                <div class=\"row g-2\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"notify_by_email\" value=\"1\" checked>
                                            <label class=\"form-check-label\">Email</label>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"notify_by_whatsapp\" value=\"1\" checked>
                                            <label class=\"form-check-label\">WhatsApp</label>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"send_image\" value=\"1\" checked>
                                            <label class=\"form-check-label\">Inclure image produit (WhatsApp)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <label class=\"form-label\">Message personnalisé (optionnel)</label>
                                <textarea name=\"confirmation_message\" class=\"form-control\" rows=\"2\" placeholder=\"Ajouter un message pour le fournisseur...\"></textarea>
                            </div>
                        </div>
                    </form>
                    <div class=\"alert alert-info mt-3\">
                        <i class=\"bi bi-info-circle\"></i>
                        La confirmation enverra un email et/ou WhatsApp au fournisseur avec les détails de la commande.
                    </div>
                {% endif %}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                {% if suppliers is not empty %}
                    <button type=\"button\" class=\"btn btn-primary\" id=\"confirmPurchaseBtn\">
                        <span class=\"btn-text\">Confirmer la commande</span>
                        <span class=\"btn-spinner\"></span>
                    </button>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
    // URLs
    const searchUrl = \"{{ path('purchase_search_products') }}\";
    const addToCartUrl = \"{{ path('purchase_add_product') }}\";
    const cartDataUrl = \"{{ path('purchase_cart_data') }}\";
    const confirmUrl = \"{{ path('purchase_confirm') }}\";
    const removeProductUrlTemplate = \"{{ path('purchase_remove_product', {'productId': 'PLACEHOLDER'}) }}\".replace('PLACEHOLDER', '{productId}');
    const updateItemUrlTemplate = \"{{ path('purchase_update_item', {'productId': 'PLACEHOLDER'}) }}\".replace('PLACEHOLDER', '{productId}');

    let searchTimeout = null;
    let currentProduct = null;

    const searchInput = document.getElementById('productSearch');
    const resultsContainer = document.getElementById('productResultsContainer');
    const cartContainer = document.getElementById('cartContainer');
    const cartCountSpan = document.getElementById('cartCount');
    const cartTotalSpan = document.getElementById('cartTotal');
    const confirmOrderBtn = document.getElementById('confirmOrderBtn');

    const addProductModal = new bootstrap.Modal(document.getElementById('addProductModal'));
    const editModal = new bootstrap.Modal(document.getElementById('editItemModal'));
    const removeModal = new bootstrap.Modal(document.getElementById('removeCartItemModal'));
    const confirmModal = new bootstrap.Modal(document.getElementById('confirmationModal'));

    function setButtonLoading(btn, isLoading) {
        if (!btn) return;
        if (isLoading) {
            btn.classList.add('btn-loading');
            btn.disabled = true;
        } else {
            btn.classList.remove('btn-loading');
            btn.disabled = false;
        }
    }

    function setModalLoading(modalElement, isLoading) {
        if (!modalElement) return;
        const modalContent = modalElement.querySelector('.modal-content');
        if (!modalContent) return;
        
        let overlay = modalContent.querySelector('.modal-loading-overlay');
        if (isLoading) {
            if (!overlay) {
                overlay = document.createElement('div');
                overlay.className = 'modal-loading-overlay';
                overlay.innerHTML = `
                    <div class=\"text-center\">
                        <div class=\"spinner-border text-primary\" role=\"status\">
                            <span class=\"visually-hidden\">Chargement...</span>
                        </div>
                        <p class=\"mt-2 mb-0\">Traitement en cours...</p>
                    </div>
                `;
                modalContent.style.position = 'relative';
                modalContent.appendChild(overlay);
            }
            overlay.style.display = 'flex';
        } else if (overlay) {
            overlay.style.display = 'none';
        }
    }

    // Éléments du modal d'ajout
    const modalProductImageContainer = document.getElementById('modalProductImageContainer');
    const modalProductName = document.getElementById('modalProductName');
    const modalProductBarcode = document.getElementById('modalProductBarcode');
    const modalProductUnit = document.getElementById('modalProductUnit');
    const productQuantityInput = document.getElementById('productQuantity');
    const productPriceInput = document.getElementById('productPrice');
    const perishableWarning = document.getElementById('perishableWarning');
    const decrementQty = document.getElementById('decrementQty');
    const incrementQty = document.getElementById('incrementQty');
    const confirmAddBtn = document.getElementById('confirmAddToCartBtn');

    // Éléments du modal d'édition
    const editProductId = document.getElementById('editProductId');
    const editProductName = document.getElementById('editProductName');
    const editQuantity = document.getElementById('editQuantity');
    const editUnitPrice = document.getElementById('editUnitPrice');
    const saveEditChangesBtn = document.getElementById('saveEditChanges');

    // Éléments du modal de suppression
    const confirmRemoveBtn = document.getElementById('confirmRemoveBtn');
    let pendingRemoveProductId = null;

    // Gestion des quantités
    incrementQty?.addEventListener('click', () => {
        productQuantityInput.value = parseInt(productQuantityInput.value) + 1;
    });
    decrementQty?.addEventListener('click', () => {
        let val = parseInt(productQuantityInput.value);
        if (val > 1) productQuantityInput.value = val - 1;
    });

    // Ajout au panier
    confirmAddBtn?.addEventListener('click', async () => {
        if (!currentProduct) {
            showToast('error', 'Aucun produit sélectionné');
            addProductModal.hide();
            return;
        }
        const quantity = parseInt(productQuantityInput.value);
        const unitPrice = parseFloat(productPriceInput.value);
        if (isNaN(quantity) || quantity < 1) {
            showToast('error', 'Quantité invalide');
            return;
        }
        if (isNaN(unitPrice) || unitPrice <= 0) {
            showToast('error', 'Prix unitaire invalide');
            return;
        }

        setButtonLoading(confirmAddBtn, true);
        setModalLoading(document.getElementById('addProductModal'), true);

        const formData = new FormData();
        formData.append('product_id', currentProduct.id);
        formData.append('quantity', quantity);
        formData.append('unit_price', unitPrice);
        
        try {
            const response = await fetch(addToCartUrl, { method: 'POST', body: formData });
            const data = await response.json();
            if (data.success) {
                await refreshCart();
                showToast('success', `\${currentProduct.name} ajouté au panier`);
                addProductModal.hide();
                productQuantityInput.value = 1;
                productPriceInput.value = '';
                currentProduct = null;
                searchInput.value = '';
                resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"bi bi-search fs-1\"></i><p class=\"mt-2\">Commencez à taper pour voir les produits</p></div>';
                document.getElementById('resultCount').textContent = '0';
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur ajout panier:', error);
            showToast('error', 'Erreur lors de l\\'ajout');
        } finally {
            setButtonLoading(confirmAddBtn, false);
            setModalLoading(document.getElementById('addProductModal'), false);
        }
    });

    // Recherche en temps réel
    searchInput?.addEventListener('input', function(e) {
        const query = e.target.value.trim();
        if (searchTimeout) clearTimeout(searchTimeout);
        if (query.length < 2) {
            resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"bi bi-search fs-1\"></i><p class=\"mt-2\">Commencez à taper pour voir les produits</p></div>';
            document.getElementById('resultCount').textContent = '0';
            return;
        }
        resultsContainer.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\" role=\"status\"><span class=\"visually-hidden\">Chargement...</span></div><p class=\"mt-2\">Recherche en cours...</p></div>';
        searchTimeout = setTimeout(() => {
            fetch(`\${searchUrl}?q=\${encodeURIComponent(query)}`)
                .then(response => {
                    if (!response.ok) throw new Error('Erreur réseau');
                    return response.json();
                })
                .then(products => {
                    if (!products.length) {
                        resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"bi bi-search fs-1\"></i><p class=\"mt-2\">Aucun produit trouvé</p></div>';
                        document.getElementById('resultCount').textContent = '0';
                        return;
                    }
                    let html = '<ul class=\"product-list\">';
                    products.forEach(product => {
                        html += `
                            <li class=\"product-list-item\" 
                                data-product-id=\"\${product.id}\"
                                data-product-name=\"\${escapeHtml(product.name)}\"
                                data-product-barcode=\"\${product.barcode}\"
                                data-product-price=\"\${product.purchase_price}\"
                                data-product-image=\"\${product.image ? '/uploads/products/' + product.image : ''}\"
                                data-has-expiry=\"\${product.has_expiry_date}\"
                                data-unit=\"\${product.unit || ''}\">
                                <div class=\"product-list-img\">
                                    \${product.image ? 
                                        `<img src=\"/uploads/products/\${product.image}\" alt=\"\${escapeHtml(product.name)}\">` : 
                                        `<i class=\"fas fa-box fallback-icon\"></i>`
                                    }
                                </div>
                                <div class=\"product-list-info\">
                                    <div class=\"product-list-title\">\${escapeHtml(product.name)}</div>
                                    <div class=\"product-list-meta\">
                                        <i class=\"bi bi-upc-scan\"></i> \${product.barcode}
                                        \${product.unit ? `<span class=\"ms-2\"><i class=\"bi bi-rulers\"></i> \${product.unit}</span>` : ''}
                                    </div>
                                </div>
                                <div class=\"product-list-price\">
                                    \${formatPrice(product.purchase_price)} FCFA
                                    \${product.has_expiry_date ? '<span class=\"product-list-badge\">Périssable</span>' : ''}
                                </div>
                            </li>
                        `;
                    });
                    html += '</ul>';
                    resultsContainer.innerHTML = html;
                    document.getElementById('resultCount').textContent = products.length;

                    document.querySelectorAll('.product-list-item').forEach(item => {
                        item.addEventListener('click', () => openAddProductModal(item));
                    });
                })
                .catch(error => {
                    console.error('Erreur recherche:', error);
                    resultsContainer.innerHTML = '<div class=\"text-center py-5 text-danger\">Erreur de connexion. Veuillez réessayer.</div>';
                });
        }, 300);
    });

    function openAddProductModal(element) {
        const productId = element.dataset.productId;
        const productName = element.dataset.productName;
        const productBarcode = element.dataset.productBarcode;
        const productPrice = parseFloat(element.dataset.productPrice);
        const productImage = element.dataset.productImage;
        const hasExpiry = element.dataset.hasExpiry === 'true';
        const productUnit = element.dataset.unit || 'pièce';

        modalProductName.textContent = productName;
        modalProductBarcode.textContent = productBarcode;
        modalProductUnit.textContent = `Unité : \${productUnit}`;
        productPriceInput.value = productPrice;
        
        if (productImage) {
            modalProductImageContainer.innerHTML = `<img src=\"\${productImage}\" alt=\"\${escapeHtml(productName)}\" style=\"width: 80px; height: 80px; object-fit: cover; border-radius: 8px;\">`;
        } else {
            modalProductImageContainer.innerHTML = `<div class=\"product-img-fallback bg-light rounded d-flex align-items-center justify-content-center mx-auto\" style=\"width: 80px; height: 80px;\"><i class=\"fas fa-box text-secondary fs-1\"></i></div>`;
        }
        
        if (hasExpiry) {
            perishableWarning.classList.remove('d-none');
        } else {
            perishableWarning.classList.add('d-none');
        }
        
        currentProduct = {
            id: parseInt(productId),
            name: productName,
            barcode: productBarcode,
            purchase_price: productPrice,
            has_expiry_date: hasExpiry,
            unit: productUnit
        };
        addProductModal.show();
    }

    // Gestion des actions du panier
    cartContainer?.addEventListener('click', async (e) => {
        const removeBtn = e.target.closest('.remove-btn');
        if (removeBtn) {
            const productId = parseInt(removeBtn.dataset.id);
            pendingRemoveProductId = productId;
            removeModal.show();
            return;
        }
        
        const editBtn = e.target.closest('.edit-item');
        if (editBtn) {
            const productId = parseInt(editBtn.dataset.id);
            const productName = editBtn.dataset.name;
            const quantity = parseInt(editBtn.dataset.quantity);
            const price = parseFloat(editBtn.dataset.price);
            editProductId.value = productId;
            editProductName.value = productName;
            editQuantity.value = quantity;
            editUnitPrice.value = price;
            editModal.show();
        }
    });

    // Sauvegarde modification
    saveEditChangesBtn?.addEventListener('click', async () => {
        const productId = editProductId.value;
        const quantity = parseInt(editQuantity.value);
        const unitPrice = parseFloat(editUnitPrice.value);
        
        if (isNaN(quantity) || quantity < 1) {
            showToast('error', 'Quantité invalide');
            return;
        }
        if (isNaN(unitPrice) || unitPrice <= 0) {
            showToast('error', 'Prix unitaire invalide');
            return;
        }

        setButtonLoading(saveEditChangesBtn, true);
        setModalLoading(document.getElementById('editItemModal'), true);

        const updateUrl = updateItemUrlTemplate.replace('{productId}', productId);
        try {
            const response = await fetch(updateUrl, {
                method: 'PUT',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ quantity: quantity, unit_price: unitPrice })
            });
            const data = await response.json();
            if (data.success) {
                await refreshCart();
                editModal.hide();
                showToast('success', 'Article modifié avec succès');
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur updateItem:', error);
            showToast('error', 'Erreur lors de la modification');
        } finally {
            setButtonLoading(saveEditChangesBtn, false);
            setModalLoading(document.getElementById('editItemModal'), false);
        }
    });

    // Confirmation suppression
    confirmRemoveBtn?.addEventListener('click', async () => {
        if (pendingRemoveProductId !== null) {
            setButtonLoading(confirmRemoveBtn, true);
            setModalLoading(document.getElementById('removeCartItemModal'), true);
            await removeFromCart(pendingRemoveProductId);
            setButtonLoading(confirmRemoveBtn, false);
            setModalLoading(document.getElementById('removeCartItemModal'), false);
            pendingRemoveProductId = null;
            removeModal.hide();
        }
    });

    async function removeFromCart(productId) {
        const removeUrl = removeProductUrlTemplate.replace('{productId}', productId);
        try {
            const response = await fetch(removeUrl, { method: 'DELETE' });
            const data = await response.json();
            if (data.success) {
                await refreshCart();
                showToast('success', 'Produit supprimé');
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur removeFromCart:', error);
            showToast('error', 'Erreur lors de la suppression');
        }
    }

    // Rafraîchissement panier
    async function refreshCart() {
        try {
            const response = await fetch(cartDataUrl);
            if (!response.ok) throw new Error(`HTTP \${response.status}`);
            const data = await response.json();
            updateCartDisplay(data);
        } catch (error) {
            console.error('Erreur refreshCart:', error);
            showToast('error', 'Impossible de rafraîchir le panier');
        }
    }

    function updateCartDisplay(cartData) {
        if (!cartData.items || cartData.items.length === 0) {
            cartContainer.innerHTML = `
                <div class=\"text-center py-5 text-muted\">
                    <i class=\"bi bi-cart-x fs-1\"></i>
                    <p class=\"mt-2\">Votre panier est vide</p>
                    <button class=\"btn btn-primary btn-sm\" onclick=\"document.getElementById('productSearch').focus()\">
                        <i class=\"bi bi-plus-circle\"></i> Ajouter des produits
                    </button>
                </div>
            `;
            cartTotalSpan.innerHTML = '0 FCFA';
            cartCountSpan.innerHTML = '0';
            confirmOrderBtn.disabled = true;
            return;
        }

        let itemsHtml = '<ul class=\"cart-items\">';
        cartData.items.forEach(item => {
            itemsHtml += `
                <li class=\"cart-item\" data-product-id=\"\${item.product_id}\">
                    <div class=\"cart-item-img\">
                        \${(item.image && item.image != 'default-product.png') ? `<img src=\"/uploads/products/\${item.image}\" alt=\"\${escapeHtml(item.product_name)}\">` : ''}
                        <i class=\"fas fa-box fallback-icon\" style=\"display: \${(item.image && item.image != 'default-product.png') ? 'none' : 'flex'};\"></i>
                    </div>
                    <div class=\"cart-item-details\">
                        <div class=\"cart-item-title\">\${escapeHtml(item.product_name)}</div>
                        <div class=\"cart-item-meta\">
                            <i class=\"bi bi-upc-scan\"></i> \${item.barcode}
                            \${item.unit ? `<span class=\"ms-2\"><i class=\"bi bi-rulers\"></i> \${item.unit}</span>` : ''}
                            \${item.has_expiry_date ? '<span class=\"badge bg-warning text-dark\">Périssable</span>' : ''}
                        </div>
                    </div>
                    <div class=\"cart-item-quantity\">
                        <span class=\"badge bg-secondary\">\${item.quantity}</span>
                    </div>
                    <div class=\"cart-item-price\">
                        <div class=\"total\">\${formatPrice(item.total_price)} FCFA</div>
                        <small class=\"text-muted\">\${formatPrice(item.unit_price)} FCFA/unité</small>
                        <div class=\"action-buttons\">
                            <button class=\"btn btn-sm btn-outline-primary edit-item\" 
                                    data-id=\"\${item.product_id}\"
                                    data-name=\"\${escapeHtml(item.product_name)}\"
                                    data-quantity=\"\${item.quantity}\"
                                    data-price=\"\${item.unit_price}\">
                                <i class=\"bi bi-pencil\"></i> Modifier
                            </button>
                            <button class=\"btn btn-sm btn-outline-danger remove-btn\" data-id=\"\${item.product_id}\">
                                <i class=\"bi bi-trash\"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </li>
            `;
        });
        itemsHtml += '</ul>';
        cartContainer.innerHTML = itemsHtml;
        cartTotalSpan.innerHTML = `\${formatPrice(cartData.total)} FCFA`;
        cartCountSpan.innerHTML = cartData.items.length;
        confirmOrderBtn.disabled = false;
    }

    // Scanner
    document.getElementById('scanBarcodeBtn')?.addEventListener('click', async () => {
        const barcode = prompt('Entrez le code-barres à scanner:');
        if (!barcode || barcode.length < 3) return;
        try {
            const response = await fetch(`\${searchUrl}?q=\${encodeURIComponent(barcode)}`);
            const products = await response.json();
            if (!products.length) {
                showToast('error', 'Aucun produit trouvé avec ce code-barres');
                return;
            }
            const product = products[0];
            const dummy = document.createElement('div');
            dummy.dataset.productId = product.id;
            dummy.dataset.productName = product.name;
            dummy.dataset.productBarcode = product.barcode;
            dummy.dataset.productPrice = product.purchase_price;
            dummy.dataset.productImage = product.image ? '/uploads/products/' + product.image : '';
            dummy.dataset.hasExpiry = product.has_expiry_date;
            dummy.dataset.unit = product.unit || 'pièce';
            openAddProductModal(dummy);
        } catch (error) {
            console.error('Erreur scan:', error);
            showToast('error', 'Erreur lors de la recherche du produit');
        }
    });

    // Confirmation commande
    const confirmPurchaseBtn = document.getElementById('confirmPurchaseBtn');
    
    confirmOrderBtn?.addEventListener('click', () => confirmModal.show());
    
    confirmPurchaseBtn?.addEventListener('click', async () => {
        const form = document.getElementById('confirmationForm');
        const formData = new FormData(form);
        
        setButtonLoading(confirmPurchaseBtn, true);
        setModalLoading(document.getElementById('confirmationModal'), true);
        
        try {
            const response = await fetch(confirmUrl, { method: 'POST', body: formData });
            const data = await response.json();
            if (data.success) {
                confirmModal.hide();
                showToast('success', data.message);
                setTimeout(() => window.location.href = data.redirect_url, 1500);
            } else {
                showToast('error', data.error);
                setButtonLoading(confirmPurchaseBtn, false);
                setModalLoading(document.getElementById('confirmationModal'), false);
            }
        } catch (error) {
            console.error('Erreur confirmation:', error);
            showToast('error', 'Erreur lors de la confirmation');
            setButtonLoading(confirmPurchaseBtn, false);
            setModalLoading(document.getElementById('confirmationModal'), false);
        }
    });

    // Utilitaires
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function formatPrice(price) {
        return new Intl.NumberFormat('fr-FR').format(price);
    }

    function showToast(type, message) {
        const toastHtml = `
            <div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 9999\">
                <div class=\"toast align-items-center text-white border-0 toast-\${type}\" role=\"alert\" data-bs-autohide=\"true\" data-bs-delay=\"3000\">
                    <div class=\"d-flex\">
                        <div class=\"toast-body\">
                            <i class=\"bi bi-\${type === 'success' ? 'check-circle' : 'exclamation-triangle'} me-2\"></i>
                            \${message}
                        </div>
                        <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
                    </div>
                </div>
            </div>
        `;
        const container = document.createElement('div');
        container.innerHTML = toastHtml;
        document.body.appendChild(container);
        const toastElement = container.querySelector('.toast');
        const toast = new bootstrap.Toast(toastElement);
        toast.show();
        toastElement.addEventListener('hidden.bs.toast', () => container.remove());
    }

    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof \$.fn.select2 !== 'undefined') {
            \$('#supplierSelect').select2({
                theme: 'bootstrap-5',
                placeholder: 'Rechercher un fournisseur...',
                allowClear: true,
                dropdownParent: \$('#confirmationModal')
            });
        }
        refreshCart();
    });
</script>
{% endblock %}", "purchase/cart.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\cart.html.twig");
    }
}
