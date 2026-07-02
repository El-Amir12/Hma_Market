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

/* sale/retail/index.html.twig */
class __TwigTemplate_d57cd61cff8f7268153634a6a3b3312e extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Vente au détail - Produits";
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
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    :root { --primary-color: #0463f1; --success-color: #10b981; --danger-color: #ef4444; --warning-color: #f59e0b; --info-color: #3b82f6; }

    .sale-container {
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
    
    .stat-badge {
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .stat-badge:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
    }
    
    .search-section {
        width: 100%;
    }
    
    .search-bar {
        width: 100%;
        max-width: 100%;
    }
    
    .search-input-group {
        border-radius: 50px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        width: 100%;
    }
    
    .search-input-group .form-control {
        border: 1px solid #e2e8f0;
        border-right: none;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        flex: 1;
    }
    
    .search-input-group .btn {
        padding: 0.75rem 1.5rem;
        background: white;
        border: 1px solid #e2e8f0;
        border-left: none;
        color: var(--primary-color);
        white-space: nowrap;
    }
    
    .barcode-scanner-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 16px;
        padding: 1rem;
        color: white;
    }
    
    .barcode-input-group {
        max-width: 400px;
    }
    
    .barcode-input-group .form-control {
        border-radius: 8px 0 0 8px;
        font-family: monospace;
        font-size: 1.1rem;
        letter-spacing: 1px;
    }
    
    .barcode-input-group .btn {
        border-radius: 0 8px 8px 0;
    }
    
    .two-columns {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
    }
    
    .products-panel, .cart-panel {
        flex: 1;
        min-width: 350px;
        background: white;
        border-radius: 24px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: calc(100vh - 280px);
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
    
    .product-list-info {
        flex: 1;
    }
    
    .product-list-title {
        font-weight: 600;
    }
    
    .product-list-barcode {
        font-size: 0.7rem;
        color: #64748b;
        font-family: monospace;
    }
    
    .product-list-stock {
        font-size: 0.7rem;
    }
    
    .product-list-stock.low-stock {
        color: var(--danger-color);
    }
    
    .product-list-stock.in-stock {
        color: var(--success-color);
    }
    
    .product-list-price {
        font-weight: 700;
        color: var(--primary-color);
        text-align: right;
        min-width: 120px;
    }
    
    .product-list-price .old-price {
        font-size: 0.7rem;
        color: #94a3b8;
        text-decoration: line-through;
        display: block;
    }
    
    .product-list-price .promo-badge {
        font-size: 0.7rem;
        color: #0463f1;
        display: block;
    }
    
    .prescription-badge {
        display: inline-block;
        background: #dc2626;
        color: white;
        font-size: 0.6rem;
        padding: 0.2rem 0.5rem;
        border-radius: 4px;
        margin-left: 0.5rem;
        vertical-align: middle;
    }
    
    .prescription-badge i {
        font-size: 0.6rem;
        margin-right: 0.2rem;
    }
    
    .cart-prescription-warning {
        background: #fee2e2;
        border-left: 3px solid #dc2626;
        padding: 0.25rem 0.5rem;
        margin-top: 0.25rem;
        font-size: 0.7rem;
        color: #dc2626;
        border-radius: 4px;
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
        transition: all 0.3s ease;
    }
    
    .cart-item:hover {
        background: #f8fafc;
    }
    
    .cart-item-info {
        flex: 1;
    }
    
    .cart-item-title {
        font-weight: 600;
    }
    
    .cart-item-barcode {
        font-size: 0.7rem;
        color: #64748b;
        font-family: monospace;
    }
    
    .cart-item-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 0.25rem;
    }
    
    .cart-item-actions button {
        background: none;
        border: none;
        font-size: 0.7rem;
        padding: 0;
    }
    
    .cart-item-actions .edit-item {
        color: #f59e0b;
    }
    
    .cart-item-actions .edit-item:hover {
        text-decoration: underline;
    }
    
    .cart-item-actions .remove-item {
        color: #ef4444;
    }
    
    .cart-item-actions .remove-item:hover {
        text-decoration: underline;
    }
    
    .cart-item-quantity {
        margin: 0 1rem;
        min-width: 100px;
        text-align: center;
    }
    
    .cart-item-quantity .badge {
        font-size: 1.1rem;
        padding: 0.5rem 0.75rem;
        cursor: pointer;
    }
    
    .cart-item-quantity .badge:hover {
        background-color: var(--primary-color);
    }
    
    .cart-item-price {
        text-align: right;
        min-width: 140px;
    }
    
    .cart-item-price .total {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 1.1rem;
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
    
    .empty-cart {
        text-align: center;
        padding: 3rem;
        color: #94a3b8;
    }
    
    .empty-cart i {
        font-size: 3rem;
        margin-bottom: 1rem;
    }
    
    .filter-section {
        padding: 1rem;
        border-bottom: 1px solid #e2e8f0;
    }
    
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 8px;
        min-height: 38px;
    }
    
    @keyframes success-pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    .success-pulse {
        animation: success-pulse 0.5s ease;
    }
    
    .btn-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.7;
    }
    
    .btn-loading .btn-text {
        visibility: hidden;
    }
    
    .btn-loading::after {
        content: '';
        position: absolute;
        width: 1rem;
        height: 1rem;
        top: calc(50% - 0.5rem);
        left: calc(50% - 0.5rem);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        border-top-color: white;
        animation: spin 0.6s linear infinite;
    }
    
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    
    .btn-text {
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    @media (max-width: 768px) {
        .two-columns { flex-direction: column; }
        .products-panel, .cart-panel { height: auto; max-height: 500px; }
        .cart-item { flex-wrap: wrap; }
        .cart-item-quantity { margin: 0.5rem 0; width: 100%; text-align: center; }
        .cart-item-price { width: 100%; text-align: center; margin-top: 0.5rem; }
    }
    
    #confirmCheckoutBtn {
        position: relative;
        transition: all 0.3s ease;
        min-width: 180px;
    }

    #confirmCheckoutBtn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }

    #amountPaid.is-valid {
        border-color: #28a745;
        background-color: #f0fff4;
    }

    #amountPaid.is-invalid {
        border-color: #dc3545;
        background-color: #fff5f5;
    }

    #changeAmount {
        transition: all 0.3s ease;
    }
    
    .btn-loading {
        cursor: wait !important;
    }
    
    .product-list-actions {
        margin-left: 0.5rem;
    }
    
    .hide-product-btn {
        opacity: 0.6;
        transition: opacity 0.2s;
    }
    
    .hide-product-btn:hover {
        opacity: 1;
    }
    
    .cart-item-unit {
        font-size: 0.7rem;
        color: #6c757d;
        margin-top: 0.2rem;
    }
    .cart-item-unit i {
        width: 14px;
        margin-right: 4px;
        color: #6c757d;
    }
</style>
";
        yield from [];
    }

    // line 468
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 469
        yield "<div class=\"sale-container\">
    <div class=\"header-bar\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3 w-100\">
            <h1 class=\"h2 mb-0\">
                <i class=\"fas fa-boxes text-primary\"></i>
                Vente au détail
            </h1>

            <div class=\"d-flex align-items-center gap-3\">
                ";
        // line 478
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", false, false, false, 478) == "∞")) {
            // line 479
            yield "                    <div class=\"stat-badge d-flex align-items-center bg-success rounded-3 p-2 px-3\">
                        <div class=\"me-2\">
                            <span class=\"badge bg-white text-success p-2 rounded-circle\">
                                <i class=\"fas fa-infinity fa-sm\"></i>
                            </span>
                        </div>
                        <div>
                            <small class=\"text-white-50 d-block lh-1\">Ventes aujourd'hui</small>
                            <strong class=\"text-white fs-5\">";
            // line 487
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "used", [], "any", false, false, false, 487), "html", null, true);
            yield " / ∞</strong>
                        </div>
                    </div>
                ";
        } else {
            // line 491
            yield "                    <div class=\"stat-badge d-flex align-items-center ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "can_sell", [], "any", false, false, false, 491)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "used", [], "any", false, false, false, 491) > (CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", false, false, false, 491) * 0.8))) {
                yield "bg-warning";
            } else {
                yield "bg-primary";
            }
            yield " rounded-3 p-2 px-3\">
                        <div class=\"me-2\">
                            <span class=\"badge bg-white text-";
            // line 493
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "can_sell", [], "any", false, false, false, 493)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "used", [], "any", false, false, false, 493) > (CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", false, false, false, 493) * 0.8))) {
                yield "warning";
            } else {
                yield "primary";
            }
            yield " p-2 rounded-circle\">
                                <i class=\"fas fa-chart-line fa-sm\"></i>
                            </span>
                        </div>
                        <div>
                            <small class=\"text-white-50 d-block lh-1\">Ventes aujourd'hui</small>
                            <strong class=\"text-white fs-5\">";
            // line 499
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "used", [], "any", false, false, false, 499), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", false, false, false, 499), "html", null, true);
            yield "</strong>
                            ";
            // line 500
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "can_sell", [], "any", false, false, false, 500)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 501
                yield "                                <small class=\"text-white-50 d-block\">Limite atteinte</small>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 502
($context["dailyStats"] ?? null), "used", [], "any", false, false, false, 502) > (CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", false, false, false, 502) * 0.8))) {
                // line 503
                yield "                                <small class=\"text-white-50 d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", false, false, false, 503) - CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "used", [], "any", false, false, false, 503)), "html", null, true);
                yield " restante(s)</small>
                            ";
            }
            // line 505
            yield "                        </div>
                    </div>
                ";
        }
        // line 508
        yield "
                <div class=\"d-flex gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"checkoutBtn\" ";
        // line 510
        if (Twig\Extension\CoreExtension::testEmpty(($context["cart"] ?? null))) {
            yield "disabled";
        }
        yield ">
                        <i class=\"fas fa-credit-card\"></i> Encaisser
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-danger\" id=\"clearCartBtn\" ";
        // line 513
        if (Twig\Extension\CoreExtension::testEmpty(($context["cart"] ?? null))) {
            yield "disabled";
        }
        yield ">
                        <i class=\"fas fa-trash\"></i> Vider
                    </button>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 521
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "can_sell", [], "any", false, false, false, 521) && (CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", false, false, false, 521) != "∞"))) {
            // line 522
            yield "    <div class=\"filter-info mt-3\" id=\"limitWarningAlert\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div class=\"flex-grow-1\">
                <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                <strong>Limite de ventes atteinte :</strong> 
                Vous avez utilisé ";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "used", [], "any", false, false, false, 527), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", false, false, false, 527), "html", null, true);
            yield " ventes aujourd'hui.
                Contactez l'administrateur pour augmenter votre quota.
            </div>
            <div class=\"d-flex gap-2 align-items-center\">
                <a href=\"";
            // line 531
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_contact_admin");
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                    <i class=\"fas fa-headset me-1\"></i> Contacter
                </a>
                <button type=\"button\" class=\"btn btn-sm btn-link text-secondary p-0\" onclick=\"document.getElementById('limitWarningAlert').style.display='none'\" style=\"width: 30px; height: 30px;\">
                    <i class=\"fas fa-times\"></i>
                </button>
            </div>
        </div>
    </div>
    ";
        }
        // line 541
        yield "
    <div class=\"barcode-scanner-section\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <div class=\"d-flex align-items-center gap-3\">
                    <i class=\"fas fa-camera fa-2x\"></i>
                    <div>
                        <h5 class=\"mb-0\">Scan code-barres</h5>
                        <small>Scannez le code-barres du produit</small>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"input-group barcode-input-group\">
                    <input type=\"text\" class=\"form-control\" id=\"barcodeInput\" 
                           placeholder=\"Code-barres...\" autocomplete=\"off\" autofocus>
                    <button class=\"btn btn-light\" type=\"button\" id=\"scanBarcodeBtn\">
                        <i class=\"fas fa-qrcode\"></i> Scanner
                    </button>
                </div>
                <small class=\"text-white-50 d-block mt-1\">
                    <i class=\"fas fa-info-circle\"></i> Scannez le code-barres ou saisissez-le manuellement
                </small>
            </div>
        </div>
    </div>

    <div class=\"search-section\">
        <div class=\"search-bar\">
            <div class=\"input-group search-input-group\">
                <input type=\"text\" class=\"form-control\" id=\"productSearch\" 
                       placeholder=\"Rechercher un produit par nom ou code-barres...\" autocomplete=\"off\">
                <button class=\"btn\" type=\"button\" id=\"searchBtn\">
                    <i class=\"fas fa-search\"></i> Rechercher
                </button>
            </div>
        </div>
    </div>

    <div class=\"two-columns\">
        <div class=\"products-panel\">
            <div class=\"panel-header\">
                <i class=\"fas fa-boxes me-2\"></i> Produits disponibles
                <span class=\"badge bg-secondary ms-2\" id=\"resultCount\">0</span>
            </div>
            <div class=\"panel-content\">
                <div class=\"filter-section\">
                    <label class=\"form-label fw-bold\">Filtrer par catégorie</label>
                    <select id=\"categorySelect\" class=\"form-select\" style=\"width: 100%;\">
                        <option value=\"\">-- Toutes les catégories --</option>
                        ";
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 592
            yield "                            ";
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 592))) {
                // line 593
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 593), "html", null, true);
                yield "\" class=\"fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 593), "html", null, true);
                yield "</option>
                            ";
            } else {
                // line 595
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 595), "html", null, true);
                yield "\" class=\"text-muted\"> &nbsp;&nbsp;&nbsp; ├─ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 595), "html", null, true);
                yield "</option>
                            ";
            }
            // line 597
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 598
        yield "                    </select>
                </div>
                <div id=\"productResultsContainer\">
                    <div class=\"text-center text-muted py-5\">
                        <i class=\"fas fa-search fs-1\"></i>
                        <p class=\"mt-2\">Recherchez un produit pour commencer</p>
                        <p class=\"small\">ou scannez un code-barres</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"cart-panel\">
            <div class=\"panel-header\">
                <i class=\"fas fa-shopping-cart me-2\"></i> Panier
                <span class=\"badge bg-primary rounded-pill ms-2\" id=\"cartCount\">";
        // line 613
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["cart"] ?? null)), "html", null, true);
        yield "</span>
            </div>
            <div class=\"panel-content\" id=\"cartContainer\">
                ";
        // line 616
        if (Twig\Extension\CoreExtension::testEmpty(($context["cart"] ?? null))) {
            // line 617
            yield "                    <div class=\"empty-cart\">
                        <i class=\"fas fa-shopping-cart\"></i>
                        <p>Votre panier est vide</p>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"document.getElementById('productSearch').focus()\">
                            <i class=\"fas fa-plus-circle\"></i> Ajouter des produits
                        </button>
                    </div>
                ";
        } else {
            // line 625
            yield "                    <ul class=\"cart-items\" id=\"cartItemsList\">
                        ";
            // line 626
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["cart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 627
                yield "                            <li class=\"cart-item\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 627), "html", null, true);
                yield "\" data-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 627), "html", null, true);
                yield "\" data-price=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit_price", [], "any", false, false, false, 627), "html", null, true);
                yield "\" data-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 627), "html", null, true);
                yield "\" data-unit=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit", [], "any", false, false, false, 627), "html", null, true);
                yield "\" data-prescription=\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prescription_required", [], "any", false, false, false, 627)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\">
                                <div class=\"cart-item-info\">
                                    <div class=\"cart-item-title\">
                                        ";
                // line 630
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 630), "html", null, true);
                yield "
                                        ";
                // line 631
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prescription_required", [], "any", false, false, false, 631)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 632
                    yield "                                            <span class=\"prescription-badge\">
                                                <i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise
                                            </span>
                                        ";
                }
                // line 636
                yield "                                    </div>
                                    ";
                // line 637
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "barcode", [], "any", true, true, false, 637) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "barcode", [], "any", false, false, false, 637))) {
                    // line 638
                    yield "                                        <div class=\"cart-item-barcode\">
                                            <i class=\"fas fa-barcode\"></i> ";
                    // line 639
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "barcode", [], "any", false, false, false, 639), "html", null, true);
                    yield "
                                        </div>
                                    ";
                }
                // line 642
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit", [], "any", true, true, false, 642) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit", [], "any", false, false, false, 642))) {
                    // line 643
                    yield "                                        <div class=\"cart-item-unit\">
                                            <i class=\"fas fa-cube\"></i> Unité : ";
                    // line 644
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit", [], "any", false, false, false, 644), "html", null, true);
                    yield "
                                        </div>
                                    ";
                }
                // line 647
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "has_promotion", [], "any", false, false, false, 647) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 647))) {
                    // line 648
                    yield "                                        <div class=\"small text-primary\">
                                            <i class=\"fas fa-tag text-primary me-1\"></i>
                                            <span class=\"text-primary\">";
                    // line 650
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 650), "message", [], "any", false, false, false, 650), "html", null, true);
                    yield "</span>
                                        </div>
                                    ";
                }
                // line 653
                yield "                                    <div class=\"cart-item-actions\">
                                        <button class=\"edit-item\"><i class=\"fas fa-edit\"></i> Modifier</button>
                                        <button class=\"remove-item\"><i class=\"fas fa-trash-alt\"></i> Supprimer</button>
                                    </div>
                                </div>
                                <div class=\"cart-item-quantity\">
                                    <span class=\"badge bg-secondary quantity-badge\">";
                // line 659
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 659), "html", null, true);
                yield "</span>
                                </div>
                                <div class=\"cart-item-price\">
                                    ";
                // line 662
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "has_promotion", [], "any", false, false, false, 662)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 663
                    yield "                                        <div class=\"total text-primary fw-bold\">
                                            ";
                    // line 664
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 664), 0, ",", " "), "html", null, true);
                    yield " FCFA
                                            <span class=\"badge bg-primary ms-2\" style=\"background-color: #0463f1 !important; color: white !important;\">
                                                -";
                    // line 666
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 666), "discount_percentage", [], "any", false, false, false, 666), "html", null, true);
                    yield "%
                                            </span>
                                        </div>
                                        <div class=\"mt-1\">
                                            <small class=\"text-muted text-decoration-line-through\">
                                                ";
                    // line 671
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_unit_price", [], "any", false, false, false, 671) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 671)), 0, ",", " "), "html", null, true);
                    yield " FCFA
                                            </small>
                                            <small class=\"text-primary ms-2\">
                                                <i class=\"fas fa-chart-line\"></i> Économie: ";
                    // line 674
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 674), "discount_amount", [], "any", false, false, false, 674), 0, ",", " "), "html", null, true);
                    yield " FCFA
                                            </small>
                                        </div>
                                    ";
                } else {
                    // line 678
                    yield "                                        <div class=\"total\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 678), 0, ",", " "), "html", null, true);
                    yield " FCFA</div>
                                        <small class=\"text-muted\">";
                    // line 679
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit_price", [], "any", false, false, false, 679), 0, ",", " "), "html", null, true);
                    yield " FCFA</small>
                                    ";
                }
                // line 681
                yield "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 684
            yield "                    </ul>
                ";
        }
        // line 686
        yield "            </div>
            <div class=\"cart-footer\">
                <strong>Total TTC :</strong>
                <h4 class=\"mb-0 text-primary\" id=\"cartTotal\">";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["cart_total"] ?? null), 0, ",", " "), "html", null, true);
        yield " FCFA</h4>
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"addProductModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-plus-circle me-2\"></i> Ajouter au panier</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-3\" id=\"modalProductImage\">
                    <i class=\"fas fa-box fa-3x text-muted\"></i>
                </div>
                <div class=\"text-center\" id=\"modalProductNameContainer\">
                    <h5 id=\"modalProductName\"></h5>
                </div>
                <p class=\"text-center text-muted\" id=\"modalProductPrice\"></p>
                <p class=\"text-center small text-muted\" id=\"modalProductBarcode\">
                    <i class=\"fas fa-barcode\"></i> <span></span>
                </p>
                <div id=\"prescriptionWarning\" class=\"alert alert-danger\" style=\"display: none;\">
                    <i class=\"fas fa-prescription-bottle me-2\"></i>
                    <strong>Attention :</strong> Ce produit nécessite une ordonnance. Veuillez la demander au client avant d'ajouter au panier.
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Quantité</label>
                    <div class=\"input-group\">
                        <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"decrementQty\">-</button>
                        <input type=\"number\" id=\"productQuantity\" class=\"form-control text-center\" value=\"1\" min=\"1\">
                        <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"incrementQty\">+</button>
                    </div>
                </div>
                <div class=\"alert alert-warning small\" id=\"minQuantity\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-triangle\"></i> Stock limité !
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmAddBtn\">
                    <span class=\"btn-text\"><i class=\"fas fa-cart-plus me-2\"></i> Ajouter</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"editItemModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-edit me-2\"></i> Modifier la quantité</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <input type=\"hidden\" id=\"editItemId\">
                <input type=\"hidden\" id=\"editItemType\">
                <div class=\"text-center mb-3\">
                    <h5 id=\"editItemName\"></h5>
                    <p class=\"text-muted\" id=\"editItemPrice\"></p>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Nouvelle quantité</label>
                    <div class=\"input-group\">
                        <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"editDecrementQty\">-</button>
                        <input type=\"number\" id=\"editQuantity\" class=\"form-control text-center\" value=\"1\" min=\"1\">
                        <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"editIncrementQty\">+</button>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmEditBtn\">
                    <span class=\"btn-text\"><i class=\"fas fa-save me-2\"></i> Enregistrer</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmRemoveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"confirmRemoveMessage\"></p>
                <p class=\"text-danger mb-0\"><small>⚠️ Cette action est irréversible.</small></p>
                <input type=\"hidden\" id=\"removeItemId\">
                <input type=\"hidden\" id=\"removeItemType\">
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmRemoveBtn\">
                    <span class=\"btn-text\"><i class=\"fas fa-trash-alt me-2\"></i> Supprimer</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmClearCartModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Vider le panier
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir vider tout le panier ?</p>
                <p class=\"text-danger mb-0\"><small>⚠️ Cette action est irréversible.</small></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmClearCartBtn\">
                    <span class=\"btn-text\"><i class=\"fas fa-trash-alt me-2\"></i> Vider le panier</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"checkoutModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-credit-card me-2\"></i> Encaissement</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <form id=\"checkoutForm\">
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Téléphone client *</label>
                        <div class=\"input-group\">
                            <input type=\"tel\" name=\"customer_phone\" id=\"customerPhone\" class=\"form-control\" required placeholder=\"Ex: 691234567\">
                            <button type=\"button\" class=\"btn btn-outline-info\" id=\"checkCustomerBtn\">
                                <i class=\"fas fa-search\"></i> Vérifier
                            </button>
                        </div>
                        <small class=\"text-muted\">Le numéro de téléphone est obligatoire</small>
                    </div>
                    <div class=\"mb-3\" id=\"customerNameGroup\">
                        <label class=\"form-label\">Nom du client</label>
                        <input type=\"text\" name=\"customer_name\" id=\"customerName\" class=\"form-control\" placeholder=\"Saisissez le nom du client\">
                        <small class=\"text-muted\" id=\"nameHint\">Optionnel</small>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Mode de paiement *</label>
                        <select name=\"payment_method\" id=\"paymentMethod\" class=\"form-select\" required>
                            <option value=\"cash\">💰 Espèces</option>
                            <option value=\"card\">💳 Carte bancaire</option>
                            <option value=\"mobile_money\">📱 Mobile Money</option>
                        </select>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Montant payé (FCFA) *</label>
                        <input type=\"number\" name=\"amount_paid\" id=\"amountPaid\" class=\"form-control\" required placeholder=\"Montant donné par le client\" value=\"0\" step=\"100\">
                        <small class=\"text-muted\">Total à payer: <strong id=\"totalToPay\">";
        // line 856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["cart_total"] ?? null), 0, ",", " "), "html", null, true);
        yield "</strong> FCFA</small>
                    </div>
                    
                    <div class=\"mt-3 mb-3\" id=\"changeContainer\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body text-center\">
                                <i class=\"fas fa-calculator fa-2x text-info mb-2\"></i>
                                <h6 class=\"card-subtitle mb-2 text-muted\">Monnaie à rendre</h6>
                                <h2 class=\"card-title text-success\" id=\"changeAmount\">0 FCFA</h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"autoPrintReceipt\" checked>
                            <label class=\"form-check-label\" for=\"autoPrintReceipt\">
                                <i class=\"fas fa-print me-1 text-primary\"></i>
                                Imprimer le reçu automatiquement
                            </label>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Notes</label>
                        <textarea name=\"notes\" class=\"form-control\" rows=\"2\" placeholder=\"Instructions spéciales...\"></textarea>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmCheckoutBtn\">
                    <span class=\"btn-text\"><i class=\"fas fa-check-circle me-2\"></i> Valider la vente</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title text-dark\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Limite de ventes quotidienne atteinte</h5>
                <p class=\"text-muted\">Vous avez déjà effectué ";
        // line 907
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "used", [], "any", false, false, false, 907), "html", null, true);
        yield " ventes sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", false, false, false, 907), "html", null, true);
        yield " aujourd'hui.</p>
                <p class=\"text-muted small\">Pour augmenter votre limite, contactez l'administrateur de l'entreprise.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"";
        // line 911
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_contact_admin");
        yield "\" class=\"btn btn-warning px-4\">
                    <i class=\"fas fa-headset me-2\"></i> Contacter l'administrateur
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 921
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 922
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
// ==================== CONSTANTES ====================
const URLs = {
    search: \"";
        // line 928
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_search");
        yield "\",
    addToCart: \"";
        // line 929
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_add_product", ["id" => "ID_PLACEHOLDER"]);
        yield "\",
    cartData: \"";
        // line 930
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_cart_data");
        yield "\",
    checkout: \"";
        // line 931
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_checkout");
        yield "\",
    updateQuantity: \"";
        // line 932
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_update_quantity", ["type" => "product", "id" => "ID_PLACEHOLDER"]), "html", null, true);
        yield "\",
    removeItem: \"";
        // line 933
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_remove_item", ["type" => "product", "id" => "ID_PLACEHOLDER"]), "html", null, true);
        yield "\",
    clearCart: \"";
        // line 934
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_clear_cart");
        yield "\",
    searchCustomer: \"";
        // line 935
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_search_customer");
        yield "\"
};

let state = {
    searchTimeout: null,
    currentCartTotal: ";
        // line 940
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cart_total"] ?? null), "html", null, true);
        yield ",
    currentCategory: '',
    currentProduct: null,
    pendingRemoveId: null,
    pendingRemoveType: null,
    isProcessing: false,
    audioContext: null
};

// ==================== GESTION DU SON ====================
const AudioManager = {
    init() {
        if (!state.audioContext && window.AudioContext) {
            state.audioContext = new (window.AudioContext || window.webkitAudioContext)();
        }
        return state.audioContext;
    },

    playSaleSuccess() {
        try {
            const ctx = this.init();
            if (!ctx) return;
            if (ctx.state === 'suspended') ctx.resume();
            
            const now = ctx.currentTime;
            const masterGain = ctx.createGain();
            masterGain.connect(ctx.destination);
            masterGain.gain.setValueAtTime(1.5, now);
            
            const osc1 = ctx.createOscillator();
            osc1.type = 'sine';
            osc1.frequency.setValueAtTime(1200, now);
            osc1.frequency.exponentialRampToValueAtTime(800, now + 0.1);
            osc1.connect(masterGain);
            osc1.start();
            osc1.stop(now + 0.15);
            
            const osc2 = ctx.createOscillator();
            osc2.type = 'triangle';
            osc2.frequency.setValueAtTime(600, now + 0.1);
            osc2.frequency.exponentialRampToValueAtTime(400, now + 0.25);
            osc2.connect(masterGain);
            osc2.start(now + 0.1);
            osc2.stop(now + 0.35);
            
            const noise = ctx.createBufferSource();
            const bufferSize = ctx.sampleRate * 0.1;
            const buffer = ctx.createBuffer(1, bufferSize, ctx.sampleRate);
            const data = buffer.getChannelData(0);
            for (let i = 0; i < bufferSize; i++) {
                data[i] = Math.random() * 2 - 1;
            }
            noise.buffer = buffer;
            noise.connect(masterGain);
            noise.start(now + 0.2);
            noise.stop(now + 0.35);
            
            masterGain.gain.exponentialRampToValueAtTime(0.0001, now + 0.8);
        } catch (e) { console.error('Erreur audio:', e); }
    },

    playAddToCart() {
        try {
            const ctx = this.init();
            if (!ctx) return;
            if (ctx.state === 'suspended') ctx.resume();
            
            const now = ctx.currentTime;
            const masterGain = ctx.createGain();
            masterGain.connect(ctx.destination);
            masterGain.gain.setValueAtTime(1.2, now);
            
            const osc = ctx.createOscillator();
            osc.type = 'sine';
            osc.frequency.setValueAtTime(880, now);
            osc.frequency.exponentialRampToValueAtTime(660, now + 0.1);
            osc.connect(masterGain);
            osc.start();
            osc.stop(now + 0.15);
            
            masterGain.gain.exponentialRampToValueAtTime(0.0001, now + 0.3);
        } catch (e) { console.error('Erreur audio:', e); }
    },
    
    playBarcodeBeep() {
        try {
            const ctx = this.init();
            if (!ctx) return;
            if (ctx.state === 'suspended') ctx.resume();
            
            const now = ctx.currentTime;
            const osc = ctx.createOscillator();
            osc.type = 'sine';
            osc.frequency.setValueAtTime(1000, now);
            osc.frequency.exponentialRampToValueAtTime(800, now + 0.08);
            osc.connect(ctx.destination);
            osc.start();
            osc.stop(now + 0.1);
        } catch (e) { console.error('Erreur audio:', e); }
    }
};

document.body.addEventListener('click', function initAudio() {
    AudioManager.init();
    document.body.removeEventListener('click', initAudio);
}, { once: true });

// ==================== RÉFÉRENCES DOM ====================
const DOM = {
    searchInput: document.getElementById('productSearch'),
    resultsContainer: document.getElementById('productResultsContainer'),
    cartContainer: document.getElementById('cartContainer'),
    cartCountSpan: document.getElementById('cartCount'),
    cartTotalSpan: document.getElementById('cartTotal'),
    checkoutBtn: document.getElementById('checkoutBtn'),
    clearCartBtn: document.getElementById('clearCartBtn'),
    searchBtn: document.getElementById('searchBtn'),
    categorySelect: document.getElementById('categorySelect'),
    barcodeInput: document.getElementById('barcodeInput'),
    scanBarcodeBtn: document.getElementById('scanBarcodeBtn'),
    customerPhone: document.getElementById('customerPhone'),
    customerName: document.getElementById('customerName'),
    nameHint: document.getElementById('nameHint'),
    amountPaidInput: document.getElementById('amountPaid'),
    changeContainer: document.getElementById('changeContainer'),
    changeAmountSpan: document.getElementById('changeAmount'),
    totalToPaySpan: document.getElementById('totalToPay'),
    confirmCheckoutBtn: document.getElementById('confirmCheckoutBtn'),
    checkCustomerBtn: document.getElementById('checkCustomerBtn'),
    confirmClearCartBtn: document.getElementById('confirmClearCartBtn')
};

// ==================== UTILITAIRES ====================
function setButtonLoading(button, isLoading) {
    if (!button) return;
    if (isLoading) {
        button.dataset.originalText = button.innerHTML;
        button.disabled = true;
        button.classList.add('btn-loading');
        const btnText = button.querySelector('.btn-text');
        if (btnText) btnText.style.visibility = 'hidden';
    } else {
        button.disabled = false;
        button.classList.remove('btn-loading');
        const btnText = button.querySelector('.btn-text');
        if (btnText) btnText.style.visibility = '';
        if (button.dataset.originalText) {
            button.innerHTML = button.dataset.originalText;
            delete button.dataset.originalText;
        }
    }
}

function setSimpleButtonLoading(button, isLoading) {
    if (!button) return;
    if (isLoading) {
        button.dataset.originalText = button.innerHTML;
        button.disabled = true;
        button.classList.add('btn-loading');
        button.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span> Chargement...';
    } else {
        button.disabled = false;
        button.classList.remove('btn-loading');
        if (button.dataset.originalText) {
            button.innerHTML = button.dataset.originalText;
            delete button.dataset.originalText;
        }
    }
}

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

function showToast(type, message) {
    const toastHtml = `<div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 9999\"><div class=\"toast align-items-center text-white bg-\${type === 'success' ? 'success' : 'danger'} border-0\" role=\"alert\" data-bs-autohide=\"true\" data-bs-delay=\"3000\"><div class=\"d-flex\"><div class=\"toast-body\"><i class=\"fas fa-\${type === 'success' ? 'check-circle' : 'exclamation-triangle'} me-2\"></i> \${message}</div><button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button></div></div></div>`;
    const container = document.createElement('div');
    container.innerHTML = toastHtml;
    document.body.appendChild(container);
    const toastElement = container.querySelector('.toast');
    if (toastElement) {
        const toast = new bootstrap.Toast(toastElement);
        toast.show();
        setTimeout(() => container.remove(), 3500);
    }
}

// ==================== GESTION DU PANIER ====================
async function refreshCart() {
    try {
        const response = await fetch(URLs.cartData);
        const data = await response.json();
        updateCartDisplay(data);
        state.currentCartTotal = data.total;
        if (DOM.totalToPaySpan) DOM.totalToPaySpan.innerHTML = state.currentCartTotal.toLocaleString('fr-FR');
        updateChangeAmount();
        if (DOM.cartCountSpan) DOM.cartCountSpan.innerHTML = data.items.length;
    } catch (error) { console.error('Erreur refreshCart:', error); }
}

function updateCartDisplay(cartData) {
    if (!cartData.items || cartData.items.length === 0) {
        if (DOM.cartContainer) {
            DOM.cartContainer.innerHTML = `<div class=\"empty-cart\"><i class=\"fas fa-shopping-cart\"></i><p>Votre panier est vide</p><button class=\"btn btn-primary btn-sm\" onclick=\"document.getElementById('productSearch').focus()\"><i class=\"fas fa-plus-circle\"></i> Ajouter des produits</button></div>`;
        }
        if (DOM.cartTotalSpan) DOM.cartTotalSpan.innerHTML = '0 FCFA';
        if (DOM.cartCountSpan) DOM.cartCountSpan.innerHTML = '0';
        if (DOM.checkoutBtn) DOM.checkoutBtn.disabled = true;
        if (DOM.clearCartBtn) DOM.clearCartBtn.disabled = true;
        return;
    }

    let itemsHtml = '<ul class=\"cart-items\">';
    cartData.items.forEach(item => {
        const hasPromo = item.has_promotion;
        const promoMessage = hasPromo && item.promotion ? `<div class=\"small text-primary\"><i class=\"fas fa-tag text-primary me-1\"></i><span class=\"text-primary\">\${escapeHtml(item.promotion.message)}</span></div>` : '';
        const barcodeHtml = item.barcode ? `<div class=\"cart-item-barcode\"><i class=\"fas fa-barcode\"></i> \${escapeHtml(item.barcode)}</div>` : '';
        
        const unitDisplay = item.unit ? `<div class=\"cart-item-unit small text-muted\"><i class=\"fas fa-cube me-1\"></i>Unité: \${escapeHtml(item.unit)}</div>` : '';
        
        const titlePrescriptionBadge = item.prescription_required ? 
            `<span class=\"prescription-badge\"><i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise</span>` : '';
        
        itemsHtml += `
            <li class=\"cart-item\" 
                data-id=\"\${item.id}\" 
                data-type=\"\${item.type}\" 
                data-price=\"\${item.unit_price}\" 
                data-unit=\"\${item.unit || ''}\" 
                data-name=\"\${escapeHtml(item.name)}\"
                data-prescription=\"\${item.prescription_required ? 'true' : 'false'}\">
                <div class=\"cart-item-info\">
                    <div class=\"cart-item-title\">
                        \${escapeHtml(item.name)}
                        \${titlePrescriptionBadge}
                    </div>
                    \${barcodeHtml}
                    \${unitDisplay}
                    \${promoMessage}
                    <div class=\"cart-item-actions\">
                        <button class=\"edit-item\"><i class=\"fas fa-edit\"></i> Modifier</button>
                        <button class=\"remove-item\" data-id=\"\${item.id}\" data-type=\"\${item.type}\" data-name=\"\${escapeHtml(item.name)}\"><i class=\"fas fa-trash-alt\"></i> Supprimer</button>
                    </div>
                </div>
                <div class=\"cart-item-quantity\">
                    <span class=\"badge bg-secondary quantity-badge\">\${item.quantity}</span>
                </div>
                <div class=\"cart-item-price\">
                    \${hasPromo ? `
                        <div class=\"total text-primary fw-bold\">
                            \${item.total_price.toLocaleString('fr-FR')} FCFA
                            <span class=\"badge bg-primary ms-2\" style=\"background-color: #0463f1; color: white;\">-\${item.promotion.discount_percentage}%</span>
                        </div>
                        <div class=\"mt-1\">
                            <small class=\"text-muted text-decoration-line-through\">\${(item.original_unit_price * item.quantity).toLocaleString('fr-FR')} FCFA</small>
                            <small class=\"text-primary ms-2\"><i class=\"fas fa-chart-line\"></i> Économie: \${item.promotion.discount_amount.toLocaleString('fr-FR')} FCFA</small>
                        </div>
                    ` : `
                        <div class=\"total\">\${item.total_price.toLocaleString('fr-FR')} FCFA</div>
                        <small class=\"text-muted\">\${item.unit_price.toLocaleString('fr-FR')} FCFA\${item.unit ? ` / \${escapeHtml(item.unit)}` : ''}</small>
                    `}
                </div>
            </li>
        `;
    });
    itemsHtml += '</ul>';
    if (DOM.cartContainer) DOM.cartContainer.innerHTML = itemsHtml;
    if (DOM.cartTotalSpan) DOM.cartTotalSpan.innerHTML = `\${cartData.total.toLocaleString('fr-FR')} FCFA`;
    if (DOM.cartCountSpan) DOM.cartCountSpan.innerHTML = cartData.items.length;
    if (DOM.checkoutBtn) DOM.checkoutBtn.disabled = false;
    if (DOM.clearCartBtn) DOM.clearCartBtn.disabled = false;
    
    attachCartEvents();
}

function updateChangeAmount() {
    if (!DOM.amountPaidInput) return;
    const amountPaid = parseFloat(DOM.amountPaidInput.value) || 0;
    const totalToPay = state.currentCartTotal;
    const change = amountPaid - totalToPay;
    if (!DOM.changeAmountSpan) return;
    
    if (amountPaid >= totalToPay && totalToPay > 0) {
        DOM.changeAmountSpan.innerHTML = change.toLocaleString('fr-FR') + ' FCFA';
        DOM.changeAmountSpan.className = 'card-title text-success';
        DOM.amountPaidInput.classList.remove('is-invalid');
        DOM.amountPaidInput.classList.add('is-valid');
    } else if (amountPaid > 0 && amountPaid < totalToPay) {
        const missing = totalToPay - amountPaid;
        DOM.changeAmountSpan.innerHTML = missing.toLocaleString('fr-FR') + ' FCFA';
        DOM.changeAmountSpan.className = 'card-title text-danger';
        DOM.amountPaidInput.classList.add('is-invalid');
        DOM.amountPaidInput.classList.remove('is-valid');
    } else {
        DOM.changeAmountSpan.innerHTML = totalToPay.toLocaleString('fr-FR') + ' FCFA';
        DOM.changeAmountSpan.className = 'card-title text-warning';
        DOM.amountPaidInput.classList.remove('is-invalid');
        DOM.amountPaidInput.classList.remove('is-valid');
    }
}

if (DOM.amountPaidInput) {
    DOM.amountPaidInput.addEventListener('input', updateChangeAmount);
    setTimeout(updateChangeAmount, 100);
}

// ==================== RECHERCHE PRODUITS ====================
function performSearch(query) {
    let url = `\${URLs.search}?q=\${encodeURIComponent(query)}`;
    if (state.currentCategory) url += `&category=\${encodeURIComponent(state.currentCategory)}`;
    
    if (DOM.resultsContainer) {
        DOM.resultsContainer.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Recherche...</p></div>';
    }
    
    fetch(url)
        .then(response => response.json())
        .then(products => {
            if (!products.length) {
                DOM.resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"fas fa-search fs-1\"></i><p class=\"mt-2\">Aucun produit trouvé</p><p class=\"small\">Essayez de scanner un code-barres</p></div>';
                document.getElementById('resultCount').textContent = '0';
                return;
            }
            displayProducts(products);
            document.getElementById('resultCount').textContent = products.length;
        })
        .catch(error => {
            console.error('Erreur:', error);
            DOM.resultsContainer.innerHTML = '<div class=\"text-center py-5 text-danger\">Erreur de connexion</div>';
        });
}

function displayProducts(products) {
    let html = '<ul class=\"product-list\">';
    products.forEach(product => {
        const hasPromo = product.has_promotion;
        const displayPrice = hasPromo ? product.final_price : product.sale_price;
        const oldPriceHtml = hasPromo ? `<span class=\"old-price\">\${product.sale_price.toLocaleString('fr-FR')} FCFA</span>` : '';
        const promoBadge = hasPromo ? `<span class=\"promo-badge text-primary\"><i class=\"fas fa-tag text-primary\"></i> \${product.promotion_message || 'Promo!'}</span>` : '';
        
        const prescriptionBadge = product.prescription_required ? 
            `<span class=\"prescription-badge\"><i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise</span>` : '';
        
        let stockClass = 'in-stock';
        let stockText = `Stock: \${product.stock_quantity} \${product.unit || 'unités'}`;
        if (product.is_low_stock) {
            stockClass = 'low-stock';
            stockText = `⚠️ Stock faible: \${product.stock_quantity} \${product.unit || 'unités'}`;
        }
        
        html += `
            <li class=\"product-list-item\" data-product-id=\"\${product.id}\" data-product='\${JSON.stringify(product).replace(/'/g, \"&#39;\")}'>
                <div class=\"product-list-img\">
                    \${product.image ? `<img src=\"/uploads/products/\${product.image}\" alt=\"\${escapeHtml(product.name)}\">` : `<i class=\"fas fa-box fallback-icon\"></i>`}
                </div>
                <div class=\"product-list-info\">
                    <div class=\"product-list-title\">
                        \${escapeHtml(product.name)}
                        \${prescriptionBadge}
                    </div>
                    \${product.barcode ? `<div class=\"product-list-barcode\"><i class=\"fas fa-barcode\"></i> \${escapeHtml(product.barcode)}</div>` : ''}
                    <div class=\"product-list-stock \${stockClass}\">\${stockText}</div>
                </div>
                <div class=\"product-list-price\">
                    \${displayPrice.toLocaleString('fr-FR')} FCFA
                    \${oldPriceHtml}
                    \${promoBadge}
                </div>
                <div class=\"product-list-actions ms-2\">
                    <button type=\"button\" class=\"btn btn-sm btn-link text-danger hide-product-btn\" data-product-id=\"\${product.id}\" title=\"Masquer ce produit\">
                        <i class=\"fas fa-times-circle fa-lg\"></i>
                    </button>
                </div>
            </li>
        `;
    });
    html += '</ul>';
    DOM.resultsContainer.innerHTML = html;
    
    document.querySelectorAll('.product-list-item').forEach(item => {
        const hideBtn = item.querySelector('.hide-product-btn');
        if (hideBtn) {
            hideBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                const productId = parseInt(hideBtn.dataset.productId);
                hideProductItem(productId, item);
            });
        }
        
        item.addEventListener('click', (e) => {
            if (!e.target.closest('.hide-product-btn')) {
                const productData = JSON.parse(item.dataset.product);
                openAddModal(productData);
            }
        });
    });
}

function hideProductItem(productId, itemElement) {
    itemElement.style.transition = 'all 0.3s ease';
    itemElement.style.opacity = '0';
    itemElement.style.transform = 'translateX(20px)';
    
    setTimeout(() => {
        itemElement.remove();
        
        const remainingItems = document.querySelectorAll('.product-list-item').length;
        const resultCount = document.getElementById('resultCount');
        if (resultCount) {
            resultCount.textContent = remainingItems;
        }
        
        if (remainingItems === 0) {
            DOM.resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"fas fa-search fs-1\"></i><p class=\"mt-2\">Aucun produit trouvé</p><p class=\"small\">Essayez de scanner un code-barres</p></div>';
        }
        
        showToast('info', 'Produit masqué de la liste');
    }, 200);
}

// ==================== OUVERTURE MODALE AVEC PRESCRIPTION ====================
function openAddModal(product) {
    state.currentProduct = product;
    const productNameContainer = document.getElementById('modalProductName');
    const prescriptionWarning = document.getElementById('prescriptionWarning');
    
    if (product.prescription_required) {
        productNameContainer.innerHTML = `\${escapeHtml(product.name)} <span class=\"prescription-badge\" style=\"display: inline-block; background: #dc2626; color: white; font-size: 0.7rem; padding: 0.2rem 0.5rem; border-radius: 4px;\"><i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise</span>`;
        if (prescriptionWarning) prescriptionWarning.style.display = 'block';
    } else {
        productNameContainer.textContent = product.name;
        if (prescriptionWarning) prescriptionWarning.style.display = 'none';
    }
    
    const displayPrice = product.has_promotion ? product.final_price : product.sale_price;
    document.getElementById('modalProductPrice').innerHTML = `\${displayPrice.toLocaleString('fr-FR')} FCFA`;
    
    const barcodeSpan = document.querySelector('#modalProductBarcode span');
    if (barcodeSpan && product.barcode) {
        barcodeSpan.textContent = product.barcode;
        document.getElementById('modalProductBarcode').style.display = 'block';
    } else if (document.getElementById('modalProductBarcode')) {
        document.getElementById('modalProductBarcode').style.display = 'none';
    }
    
    const productImageDiv = document.getElementById('modalProductImage');
    if (product.image) {
        productImageDiv.innerHTML = `<img src=\"/uploads/products/\${product.image}\" alt=\"\${escapeHtml(product.name)}\" style=\"width: 80px; height: 80px; object-fit: cover; border-radius: 8px;\">`;
    } else {
        productImageDiv.innerHTML = `<i class=\"fas fa-box fa-3x text-muted\"></i>`;
    }
    
    document.getElementById('productQuantity').value = 1;
    
    const minQuantityWarning = document.getElementById('minQuantity');
    if (minQuantityWarning) {
        if (product.is_low_stock) {
            minQuantityWarning.style.display = 'block';
            minQuantityWarning.innerHTML = `<i class=\"fas fa-exclamation-triangle\"></i> Stock limité: \${product.stock_quantity} \${product.unit || 'unités'} restantes`;
        } else {
            minQuantityWarning.style.display = 'none';
        }
    }
    
    new bootstrap.Modal(document.getElementById('addProductModal')).show();
}

// ==================== SCAN CODE-BARRES ====================
async function searchByBarcode(barcode) {
    if (!barcode || barcode.trim() === '') {
        showToast('warning', 'Veuillez saisir un code-barres');
        return;
    }
    
    setSimpleButtonLoading(DOM.scanBarcodeBtn, true);
    
    try {
        const url = `\${URLs.search}?q=\${encodeURIComponent(barcode)}`;
        const response = await fetch(url);
        const products = await response.json();
        
        if (products.length === 0) {
            showToast('error', `Aucun produit trouvé avec le code-barres: \${barcode}`);
            DOM.barcodeInput.value = '';
            DOM.barcodeInput.focus();
            return;
        }
        
        const product = products[0];
        
        if (product.prescription_required) {
            const confirmAdd = confirm(`⚠️ ORDONNANCE REQUISE !\\n\\nLe produit \"\${product.name}\" nécessite une ordonnance.\\n\\nAvez-vous bien demandé l'ordonnance au client ?`);
            if (!confirmAdd) {
                showToast('warning', 'Veuillez demander l\\'ordonnance avant d\\'ajouter ce produit');
                DOM.barcodeInput.value = '';
                DOM.barcodeInput.focus();
                setSimpleButtonLoading(DOM.scanBarcodeBtn, false);
                return;
            }
        }
        
        const formData = new FormData();
        formData.append('quantity', 1);
        const addUrl = URLs.addToCart.replace('ID_PLACEHOLDER', product.id);
        
        const addResponse = await fetch(addUrl, { method: 'POST', body: formData });
        const addData = await addResponse.json();
        
        if (addData.success) {
            AudioManager.playBarcodeBeep();
            await refreshCart();
            showToast('success', `\${product.name} ajouté au panier`);
            DOM.barcodeInput.value = '';
            DOM.barcodeInput.focus();
            
            const cartPanel = document.querySelector('.cart-panel');
            if (cartPanel) {
                cartPanel.classList.add('success-pulse');
                setTimeout(() => cartPanel.classList.remove('success-pulse'), 500);
            }
        } else {
            showToast('error', addData.error || 'Erreur lors de l\\'ajout');
        }
    } catch (error) {
        console.error('Erreur scan:', error);
        showToast('error', 'Erreur lors du scan du code-barres');
    } finally {
        setSimpleButtonLoading(DOM.scanBarcodeBtn, false);
    }
}

if (DOM.barcodeInput) {
    DOM.barcodeInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            searchByBarcode(DOM.barcodeInput.value);
        }
    });
}

if (DOM.scanBarcodeBtn) {
    DOM.scanBarcodeBtn.addEventListener('click', () => {
        searchByBarcode(DOM.barcodeInput.value);
    });
}

// ==================== AJOUT AU PANIER ====================
document.getElementById('confirmAddBtn')?.addEventListener('click', async () => {
    if (!state.currentProduct) return;
    setButtonLoading(document.getElementById('confirmAddBtn'), true);
    
    const quantity = parseInt(document.getElementById('productQuantity').value) || 1;
    
    if (state.currentProduct.prescription_required) {
        const confirmAdd = confirm(`⚠️ ORDONNANCE REQUISE !\\n\\nLe produit \"\${state.currentProduct.name}\" nécessite une ordonnance.\\n\\nAvez-vous bien demandé l'ordonnance au client ?`);
        if (!confirmAdd) {
            showToast('warning', 'Veuillez demander l\\'ordonnance avant d\\'ajouter ce produit');
            setButtonLoading(document.getElementById('confirmAddBtn'), false);
            bootstrap.Modal.getInstance(document.getElementById('addProductModal'))?.hide();
            return;
        }
    }
    
    const formData = new FormData();
    formData.append('quantity', quantity);
    const url = URLs.addToCart.replace('ID_PLACEHOLDER', state.currentProduct.id);
    
    try {
        const response = await fetch(url, { method: 'POST', body: formData });
        const data = await response.json();
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('addProductModal'))?.hide();
            await refreshCart();
            AudioManager.playAddToCart();
            
            if (DOM.searchInput) DOM.searchInput.value = '';
            if (DOM.categorySelect && typeof \$ !== 'undefined') \$(DOM.categorySelect).val(null).trigger('change');
            state.currentCategory = '';
            DOM.resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"fas fa-search fs-1\"></i><p class=\"mt-2\">Recherchez un produit pour commencer</p><p class=\"small\">ou scannez un code-barres</p></div>';
            document.getElementById('resultCount').textContent = '0';
            
            showToast('success', `\${state.currentProduct.name} (x\${quantity}) ajouté`);
        } else {
            showToast('error', data.error);
        }
    } catch (error) {
        showToast('error', 'Erreur lors de l\\'ajout');
    } finally {
        setButtonLoading(document.getElementById('confirmAddBtn'), false);
    }
});

// ==================== ÉVÉNEMENTS PANIER ====================
function attachCartEvents() {
    document.querySelectorAll('.edit-item').forEach(btn => {
        btn.removeEventListener('click', handleEditClick);
        btn.addEventListener('click', handleEditClick);
    });
    document.querySelectorAll('.quantity-badge').forEach(badge => {
        badge.removeEventListener('click', handleBadgeClick);
        badge.addEventListener('click', handleBadgeClick);
    });
    document.querySelectorAll('.remove-item').forEach(btn => {
        btn.removeEventListener('click', handleRemoveClick);
        btn.addEventListener('click', handleRemoveClick);
    });
}

function handleEditClick(e) {
    const item = e.currentTarget.closest('.cart-item');
    const itemPrice = parseFloat(item.dataset.price);
    const itemUnit = item.dataset.unit || '';
    const itemName = item.dataset.name || '';
    const itemPrescription = item.dataset.prescription === 'true';
    
    document.getElementById('editItemId').value = parseInt(item.dataset.id);
    document.getElementById('editItemType').value = item.dataset.type;
    document.getElementById('editItemName').textContent = itemName;
    
    const editItemPriceElement = document.getElementById('editItemPrice');
    let priceHtml = `\${itemPrice.toLocaleString('fr-FR')} FCFA`;
    if (itemUnit) {
        priceHtml += ` / \${escapeHtml(itemUnit)}`;
    }
    if (itemPrescription) {
        priceHtml += `<div class=\"small text-danger mt-1\"><i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise</div>`;
    }
    editItemPriceElement.innerHTML = priceHtml;
    
    document.getElementById('editQuantity').value = parseInt(item.querySelector('.quantity-badge').textContent);
    new bootstrap.Modal(document.getElementById('editItemModal')).show();
}

function handleBadgeClick(e) {
    const item = e.currentTarget.closest('.cart-item');
    document.getElementById('editItemId').value = parseInt(item.dataset.id);
    document.getElementById('editItemType').value = item.dataset.type;
    document.getElementById('editItemName').textContent = item.dataset.name || '';
    document.getElementById('editItemPrice').innerHTML = `\${parseFloat(item.dataset.price).toLocaleString('fr-FR')} FCFA`;
    document.getElementById('editQuantity').value = parseInt(e.currentTarget.textContent);
    new bootstrap.Modal(document.getElementById('editItemModal')).show();
}

function handleRemoveClick(e) {
    e.stopPropagation();
    state.pendingRemoveId = parseInt(this.dataset.id);
    state.pendingRemoveType = this.dataset.type;
    document.getElementById('confirmRemoveMessage').innerHTML = `Êtes-vous sûr de vouloir supprimer \"<strong>\${this.dataset.name}</strong>\" du panier ?`;
    new bootstrap.Modal(document.getElementById('confirmRemoveModal')).show();
}

document.getElementById('confirmRemoveBtn')?.addEventListener('click', async () => {
    if (state.pendingRemoveId !== null) {
        setButtonLoading(document.getElementById('confirmRemoveBtn'), true);
        const url = URLs.removeItem.replace('ID_PLACEHOLDER', state.pendingRemoveId);
        try {
            const response = await fetch(url, { method: 'DELETE' });
            const data = await response.json();
            if (data.success) {
                bootstrap.Modal.getInstance(document.getElementById('confirmRemoveModal'))?.hide();
                await refreshCart();
                showToast('success', 'Article supprimé');
                state.pendingRemoveId = null;
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            showToast('error', 'Erreur lors de la suppression');
        } finally {
            setButtonLoading(document.getElementById('confirmRemoveBtn'), false);
        }
    }
});

document.getElementById('confirmEditBtn')?.addEventListener('click', async () => {
    let newQuantity = parseInt(document.getElementById('editQuantity').value);
    const id = parseInt(document.getElementById('editItemId').value);
    if (isNaN(newQuantity) || newQuantity < 1) {
        showToast('error', 'Quantité invalide');
        return;
    }
    setButtonLoading(document.getElementById('confirmEditBtn'), true);
    const url = URLs.updateQuantity.replace('ID_PLACEHOLDER', id);
    const formData = new URLSearchParams();
    formData.append('quantity', newQuantity);
    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded', 'X-Requested-With': 'XMLHttpRequest' },
            body: formData.toString()
        });
        const data = await response.json();
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('editItemModal'))?.hide();
            await refreshCart();
            showToast('success', 'Quantité mise à jour');
        } else {
            showToast('error', data.error);
        }
    } catch (error) {
        showToast('error', 'Erreur lors de la modification');
    } finally {
        setButtonLoading(document.getElementById('confirmEditBtn'), false);
    }
});

// ==================== VIDER PANIER ====================
if (DOM.clearCartBtn) {
    DOM.clearCartBtn.addEventListener('click', () => {
        new bootstrap.Modal(document.getElementById('confirmClearCartModal')).show();
    });
}
if (DOM.confirmClearCartBtn) {
    DOM.confirmClearCartBtn.addEventListener('click', async () => {
        setButtonLoading(DOM.confirmClearCartBtn, true);
        await fetch(URLs.clearCart, { method: 'POST' });
        await refreshCart();
        bootstrap.Modal.getInstance(document.getElementById('confirmClearCartModal'))?.hide();
        showToast('success', 'Panier vidé');
        setButtonLoading(DOM.confirmClearCartBtn, false);
    });
}

// ==================== RECHERCHE CLIENT ====================
if (DOM.customerPhone && DOM.checkCustomerBtn) {
    async function searchCustomer() {
        const phone = DOM.customerPhone.value.trim();
        if (!phone || phone.length < 6) {
            DOM.nameHint.innerHTML = '<i class=\"fas fa-exclamation-triangle text-warning\"></i> Numéro invalide (6 chiffres minimum)';
            DOM.customerName.value = '';
            return;
        }
        setSimpleButtonLoading(DOM.checkCustomerBtn, true);
        DOM.nameHint.innerHTML = '<i class=\"fas fa-spinner fa-spin text-info\"></i> Recherche...';
        try {
            const response = await fetch(`\${URLs.searchCustomer}?phone=\${encodeURIComponent(phone)}`);
            const data = await response.json();
            if (data.found && data.customer_name) {
                DOM.customerName.value = data.customer_name;
                DOM.nameHint.innerHTML = '<i class=\"fas fa-check-circle text-success\"></i> Client trouvé !';
            } else {
                DOM.customerName.value = '';
                DOM.nameHint.innerHTML = '<i class=\"fas fa-user-plus text-info\"></i> Nouveau client';
                DOM.customerName.focus();
            }
        } catch (error) {
            DOM.nameHint.innerHTML = '<i class=\"fas fa-exclamation-triangle text-danger\"></i> Erreur de connexion';
        } finally {
            setSimpleButtonLoading(DOM.checkCustomerBtn, false);
        }
    }
    DOM.checkCustomerBtn.addEventListener('click', searchCustomer);
    DOM.customerPhone.addEventListener('keypress', (e) => { if (e.key === 'Enter') searchCustomer(); });
}

// ==================== SÉLECTION CATÉGORIES ====================
if (DOM.categorySelect && typeof \$ !== 'undefined') {
    \$(DOM.categorySelect).select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: '-- Toutes les catégories --',
        allowClear: true,
        width: '100%'
    }).on('change', function() {
        state.currentCategory = \$(this).val() || '';
        const query = DOM.searchInput ? DOM.searchInput.value.trim() : '';
        if (query.length >= 2 || state.currentCategory) performSearch(query);
        else if (!query && state.currentCategory) performSearch('');
    });
}

if (DOM.searchBtn) {
    DOM.searchBtn.addEventListener('click', () => performSearch(DOM.searchInput.value.trim()));
}
if (DOM.searchInput) {
    DOM.searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') performSearch(DOM.searchInput.value.trim());
    });
}

// ==================== OUVERTURE MODALE ENCAISSEMENT ====================
function openCheckoutModal() {
    if (DOM.customerPhone) DOM.customerPhone.value = '';
    if (DOM.customerName) DOM.customerName.value = '';
    if (DOM.amountPaidInput) DOM.amountPaidInput.value = '0';
    if (DOM.totalToPaySpan) DOM.totalToPaySpan.innerHTML = state.currentCartTotal.toLocaleString('fr-FR');
    setTimeout(() => {
        if (DOM.amountPaidInput) {
            DOM.amountPaidInput.dispatchEvent(new Event('input', { bubbles: true }));
            updateChangeAmount();
        }
    }, 50);
    new bootstrap.Modal(document.getElementById('checkoutModal')).show();
}

if (DOM.checkoutBtn) {
    DOM.checkoutBtn.addEventListener('click', async () => {
        const dailyStats = ";
        // line 1739
        yield json_encode(($context["dailyStats"] ?? null));
        yield ";
        if (!dailyStats.can_sell && dailyStats.limit !== '∞') {
            new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            return;
        }
        
        // 🔥 PLUS DE CONFIRMATION DE PRESCRIPTION ICI - DÉJÀ FAITE À L'AJOUT
        openCheckoutModal();
    });
}

// ==================== GESTION DE L'IMPRESSION ====================
function downloadPdfReceipt(orderId) {
    window.open(`/orders/\${orderId}/download-pdf`, '_blank');
    showToast('info', 'Téléchargement du PDF lancé');
}

function printReceiptWithCheck(orderId) {
    const printWindow = window.open(`/orders/\${orderId}/print`, '_blank', 'width=450,height=650');
    if (printWindow) {
        printWindow.onload = function() {
            setTimeout(() => {
                try {
                    printWindow.print();
                    printWindow.onafterprint = function() {
                        printWindow.close();
                    };
                } catch(e) {
                    printWindow.close();
                    showPdfDownloadModal(orderId);
                }
            }, 500);
        };
    } else {
        showPdfDownloadModal(orderId);
    }
}

function showPdfDownloadModal(orderId) {
    const existingModal = document.getElementById('pdfDownloadModal');
    if (existingModal) existingModal.remove();
    
    const modalHtml = `
        <div class=\"modal fade\" id=\"pdfDownloadModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-warning text-dark\">
                        <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Impression impossible</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    <div class=\"modal-body text-center py-4\">
                        <i class=\"fas fa-ban fa-3x text-warning mb-3\"></i>
                        <p>La fenêtre d'impression a été bloquée par votre navigateur.</p>
                        <p class=\"text-muted\">Vous pouvez télécharger le reçu en PDF :</p>
                    </div>
                    <div class=\"modal-footer justify-content-center\">
                        <button type=\"button\" class=\"btn btn-primary\" onclick=\"downloadPdfReceipt('\${orderId}'); bootstrap.Modal.getInstance(document.getElementById('pdfDownloadModal')).hide();\">
                            <i class=\"fas fa-file-pdf me-2\"></i> Télécharger PDF
                        </button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    document.body.insertAdjacentHTML('beforeend', modalHtml);
    new bootstrap.Modal(document.getElementById('pdfDownloadModal')).show();
}

function handleReceiptPrinting(orderId) {
    const autoPrint = document.getElementById('autoPrintReceipt')?.checked;
    if (autoPrint) {
        printReceiptWithCheck(orderId);
    }
}

// ==================== VALIDATION VENTE ====================
if (DOM.confirmCheckoutBtn) {
    DOM.confirmCheckoutBtn.addEventListener('click', async () => {
        if (state.isProcessing) return;
        
        const phone = DOM.customerPhone?.value.trim();
        if (!phone || phone.length < 6) {
            showToast('error', 'Le numéro de téléphone est obligatoire');
            DOM.customerPhone?.classList.add('is-invalid');
            return;
        }
        DOM.customerPhone?.classList.remove('is-invalid');
        
        const amountPaid = parseFloat(DOM.amountPaidInput?.value) || 0;
        if (amountPaid < state.currentCartTotal) {
            showToast('error', `Montant insuffisant. Total: \${state.currentCartTotal.toLocaleString('fr-FR')} FCFA`);
            DOM.amountPaidInput?.classList.add('is-invalid');
            return;
        }
        DOM.amountPaidInput?.classList.remove('is-invalid');
        
        state.isProcessing = true;
        setButtonLoading(DOM.confirmCheckoutBtn, true);
        
        const formData = new FormData(document.getElementById('checkoutForm'));
        
        try {
            const response = await fetch(URLs.checkout, { method: 'POST', body: formData });
            const data = await response.json();
            
            if (data.success) {
                bootstrap.Modal.getInstance(document.getElementById('checkoutModal'))?.hide();
                AudioManager.playSaleSuccess();
                showToast('success', data.message);
                await refreshCart();
                
                if (data.order_id) {
                    handleReceiptPrinting(data.order_id);
                }
                
                if (data.redirect_url) {
                    setTimeout(() => window.open(data.redirect_url, '_blank'), 1500);
                }
                setTimeout(() => location.reload(), 1000);
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            showToast('error', 'Erreur lors de l\\'enregistrement');
        } finally {
            state.isProcessing = false;
            setButtonLoading(DOM.confirmCheckoutBtn, false);
        }
    });
}

// ==================== INITIALISATION ====================
function setupQuantityControls() {
    const inc = document.getElementById('incrementQty');
    const dec = document.getElementById('decrementQty');
    const qty = document.getElementById('productQuantity');
    if (inc && qty) inc.addEventListener('click', () => qty.value = parseInt(qty.value) + 1);
    if (dec && qty) dec.addEventListener('click', () => { if (parseInt(qty.value) > 1) qty.value = parseInt(qty.value) - 1; });
    
    const editInc = document.getElementById('editIncrementQty');
    const editDec = document.getElementById('editDecrementQty');
    const editQty = document.getElementById('editQuantity');
    if (editInc && editQty) editInc.addEventListener('click', () => editQty.value = parseInt(editQty.value) + 1);
    if (editDec && editQty) editDec.addEventListener('click', () => { if (parseInt(editQty.value) > 1) editQty.value = parseInt(editQty.value) - 1; });
}

setupQuantityControls();
refreshCart();

if (DOM.barcodeInput) {
    DOM.barcodeInput.focus();
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sale/retail/index.html.twig";
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
        return array (  2045 => 1739,  1243 => 940,  1235 => 935,  1231 => 934,  1227 => 933,  1223 => 932,  1219 => 931,  1215 => 930,  1211 => 929,  1207 => 928,  1198 => 922,  1191 => 921,  1177 => 911,  1168 => 907,  1114 => 856,  944 => 689,  939 => 686,  935 => 684,  927 => 681,  922 => 679,  917 => 678,  910 => 674,  904 => 671,  896 => 666,  891 => 664,  888 => 663,  886 => 662,  880 => 659,  872 => 653,  866 => 650,  862 => 648,  859 => 647,  853 => 644,  850 => 643,  847 => 642,  841 => 639,  838 => 638,  836 => 637,  833 => 636,  827 => 632,  825 => 631,  821 => 630,  804 => 627,  800 => 626,  797 => 625,  787 => 617,  785 => 616,  779 => 613,  762 => 598,  756 => 597,  748 => 595,  740 => 593,  737 => 592,  733 => 591,  681 => 541,  668 => 531,  659 => 527,  652 => 522,  650 => 521,  637 => 513,  629 => 510,  625 => 508,  620 => 505,  614 => 503,  612 => 502,  609 => 501,  607 => 500,  601 => 499,  586 => 493,  574 => 491,  567 => 487,  557 => 479,  555 => 478,  544 => 469,  537 => 468,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sale/retail/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\retail\\index.html.twig");
    }
}
