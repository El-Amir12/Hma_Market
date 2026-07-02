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

/* sale/cart.html.twig */
class __TwigTemplate_eeeeb44757295159998b066e8def5578 extends Template
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
        yield "Panier de vente - HMA Market";
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
    :root { --primary-color: #0463f1; }

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
    
    .search-section {
        width: 100%;
    }
    
    .search-bar {
        max-width: 600px;
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
        min-width: 350px;
        background: white;
        border-radius: 24px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: calc(100vh - 200px);
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
    
    /* Produits */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1rem;
        padding: 1rem;
    }
    
    .product-card {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.2s ease;
        cursor: pointer;
    }
    
    .product-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-color: var(--primary-color);
    }
    
    .product-card-img {
        height: 150px;
        background: #f8fafc;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    
    .product-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .product-card-img .fallback-icon {
        font-size: 3rem;
        color: #94a3b8;
    }
    
    .product-card-body {
        padding: 1rem;
    }
    
    .product-card-title {
        font-weight: 600;
        margin-bottom: 0.25rem;
        font-size: 1rem;
    }
    
    .product-card-barcode {
        font-size: 0.7rem;
        color: #64748b;
        margin-bottom: 0.5rem;
    }
    
    .product-card-price {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 1.1rem;
    }
    
    .product-card-old-price {
        font-size: 0.8rem;
        color: #94a3b8;
        text-decoration: line-through;
        margin-left: 0.5rem;
    }
    
    .product-card-stock {
        font-size: 0.7rem;
        margin-top: 0.5rem;
    }
    
    .badge-low-stock {
        background-color: #fef3c7;
        color: #b45309;
    }
    
    .badge-promotion {
        background-color: #dc2626;
        color: white;
        font-size: 0.7rem;
    }
    
    /* Panier */
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
    
    .cart-item-info {
        flex: 1;
    }
    
    .cart-item-title {
        font-weight: 600;
    }
    
    .cart-item-meta {
        font-size: 0.75rem;
        color: #64748b;
    }
    
    .cart-item-quantity {
        margin: 0 1rem;
        min-width: 80px;
        text-align: center;
    }
    
    .cart-item-quantity .badge {
        font-size: 1rem;
        padding: 0.5rem 0.75rem;
    }
    
    .cart-item-price {
        text-align: right;
        min-width: 120px;
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
    
    .promotion-badge {
        background-color: #dc2626;
        color: white;
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
        border-radius: 20px;
        display: inline-block;
        margin-top: 0.25rem;
    }
    
    @media (max-width: 768px) {
        .two-columns { flex-direction: column; }
        .products-panel, .cart-panel { height: auto; max-height: 500px; }
        .product-grid { grid-template-columns: 1fr; }
        .cart-item { flex-wrap: wrap; }
        .cart-item-quantity { margin: 0.5rem 0; width: 100%; }
        .cart-item-price { width: 100%; text-align: left; margin-top: 0.5rem; }
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
    
    .empty-cart {
        text-align: center;
        padding: 3rem;
        color: #94a3b8;
    }
    
    .empty-cart i {
        font-size: 3rem;
        margin-bottom: 1rem;
    }
</style>
";
        yield from [];
    }

    // line 295
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 296
        yield "<div class=\"sale-container\">
    <div class=\"header-bar\">
        <h1 class=\"h2 mb-0\">
            <i class=\"bi bi-cart3 text-primary\"></i>
            Vente rapide
        </h1>
        <div>
            <button type=\"button\" class=\"btn btn-primary\" id=\"checkoutBtn\" ";
        // line 303
        if (Twig\Extension\CoreExtension::testEmpty(($context["cart"] ?? null))) {
            yield "disabled";
        }
        yield ">
                <i class=\"bi bi-credit-card\"></i> Encaisser
            </button>
            <button type=\"button\" class=\"btn btn-outline-danger ms-2\" id=\"clearCartBtn\" ";
        // line 306
        if (Twig\Extension\CoreExtension::testEmpty(($context["cart"] ?? null))) {
            yield "disabled";
        }
        yield ">
                <i class=\"bi bi-trash\"></i> Vider
            </button>
        </div>
    </div>

    <div class=\"search-section\">
        <div class=\"search-bar\">
            <div class=\"input-group search-input-group\">
                <input type=\"text\" class=\"form-control\" id=\"productSearch\" 
                       placeholder=\"Rechercher par nom ou code-barres...\" autocomplete=\"off\">
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
                    <p class=\"mt-2\">Recherchez un produit pour commencer</p>
                </div>
            </div>
        </div>

        <div class=\"cart-panel\">
            <div class=\"panel-header\">
                <i class=\"bi bi-cart me-2\"></i> Panier en cours
                <span class=\"badge bg-primary rounded-pill ms-2\" id=\"cartCount\">";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["cart"] ?? null)), "html", null, true);
        yield "</span>
            </div>
            <div class=\"panel-content\" id=\"cartContainer\">
                ";
        // line 344
        if (Twig\Extension\CoreExtension::testEmpty(($context["cart"] ?? null))) {
            // line 345
            yield "                    <div class=\"empty-cart\">
                        <i class=\"bi bi-cart-x\"></i>
                        <p>Votre panier est vide</p>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"document.getElementById('productSearch').focus()\">
                            <i class=\"bi bi-plus-circle\"></i> Ajouter des produits
                        </button>
                    </div>
                ";
        } else {
            // line 353
            yield "                    <ul class=\"cart-items\" id=\"cartItemsList\">
                        ";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["cart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 355
                yield "                            <li class=\"cart-item\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 355), "html", null, true);
                yield "\" data-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 355), "html", null, true);
                yield "\">
                                <div class=\"cart-item-info\">
                                    <div class=\"cart-item-title\">";
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 357), "html", null, true);
                yield "</div>
                                    <div class=\"cart-item-meta\">
                                        ";
                // line 359
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 359) == "product")) {
                    // line 360
                    yield "                                            <i class=\"bi bi-upc-scan\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "barcode", [], "any", false, false, false, 360), "html", null, true);
                    yield "
                                        ";
                }
                // line 362
                yield "                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit", [], "any", false, false, false, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 363
                    yield "                                            <span class=\"ms-2\"><i class=\"bi bi-rulers\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit", [], "any", false, false, false, 363), "html", null, true);
                    yield "</span>
                                        ";
                }
                // line 365
                yield "                                    </div>
                                    ";
                // line 366
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "has_promotion", [], "any", false, false, false, 366) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 366))) {
                    // line 367
                    yield "                                        <div class=\"promotion-badge\">
                                            <i class=\"bi bi-tag\"></i> ";
                    // line 368
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 368), "message", [], "any", false, false, false, 368), "html", null, true);
                    yield "
                                        </div>
                                    ";
                }
                // line 371
                yield "                                </div>
                                <div class=\"cart-item-quantity\">
                                    <div class=\"input-group input-group-sm\">
                                        <button class=\"btn btn-outline-secondary btn-decr\" type=\"button\">-</button>
                                        <input type=\"text\" class=\"form-control text-center quantity-input\" 
                                               value=\"";
                // line 376
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 376), "html", null, true);
                yield "\" style=\"width: 50px;\">
                                        <button class=\"btn btn-outline-secondary btn-incr\" type=\"button\">+</button>
                                    </div>
                                </div>
                                <div class=\"cart-item-price\">
                                    <div class=\"total\">";
                // line 381
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 381), 0, ",", " "), "html", null, true);
                yield " FCFA</div>
                                    <small class=\"text-muted\">";
                // line 382
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit_price", [], "any", false, false, false, 382), 0, ",", " "), "html", null, true);
                yield " FCFA/unité</small>
                                    <div class=\"action-buttons\">
                                        <button class=\"btn btn-sm btn-outline-danger remove-item\" title=\"Supprimer\">
                                            <i class=\"bi bi-trash\"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 391
            yield "                    </ul>
                ";
        }
        // line 393
        yield "            </div>
            <div class=\"cart-footer\">
                <strong>Total TTC :</strong>
                <h3 class=\"mb-0 text-primary\" id=\"cartTotal\">";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["cart_total"] ?? null), 0, ",", " "), "html", null, true);
        yield " FCFA</h3>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'encaissement -->
<div class=\"modal fade\" id=\"checkoutModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"bi bi-credit-card me-2\"></i> Encaissement</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <form id=\"checkoutForm\">
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Nom du client *</label>
                        <input type=\"text\" name=\"customer_name\" class=\"form-control\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Téléphone</label>
                        <input type=\"tel\" name=\"customer_phone\" class=\"form-control\">
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Mode de paiement *</label>
                        <select name=\"payment_method\" class=\"form-select\" required>
                            <option value=\"cash\">Espèces</option>
                            <option value=\"card\">Carte bancaire</option>
                            <option value=\"mobile_money\">Mobile Money</option>
                        </select>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Montant payé (FCFA) *</label>
                        <input type=\"number\" name=\"amount_paid\" class=\"form-control\" id=\"amountPaid\" required>
                        <small class=\"text-muted\">Total à payer: <strong id=\"totalToPay\">";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["cart_total"] ?? null), 0, ",", " "), "html", null, true);
        yield "</strong> FCFA</small>
                    </div>
                    <div class=\"mb-3\" id=\"changeContainer\" style=\"display: none;\">
                        <label class=\"form-label text-success\">Monnaie à rendre</label>
                        <div class=\"alert alert-success\" id=\"changeAmount\">0 FCFA</div>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Notes (optionnel)</label>
                        <textarea name=\"notes\" class=\"form-control\" rows=\"2\"></textarea>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmCheckoutBtn\">
                    <i class=\"bi bi-check-lg\"></i> Valider la vente
                </button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 454
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 455
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // URLs
    const searchUrl = \"";
        // line 458
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retail_sale_search");
        yield "\";
    const addToCartUrl = \"";
        // line 459
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_add_product");
        yield "\";
    const cartDataUrl = \"";
        // line 460
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_cart_data");
        yield "\";
    const checkoutUrl = \"";
        // line 461
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_checkout");
        yield "\";
    const updateQuantityUrl = \"";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_update_quantity", ["type" => "PLACEHOLDER", "id" => "PLACEHOLDER"]), "html", null, true);
        yield "\";
    const removeItemUrl = \"";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_remove_item", ["type" => "PLACEHOLDER", "id" => "PLACEHOLDER"]), "html", null, true);
        yield "\";
    const clearCartUrl = \"";
        // line 464
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sale_clear_cart");
        yield "\";

    let searchTimeout = null;
    let currentCartTotal = ";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cart_total"] ?? null), "html", null, true);
        yield ";

    // DOM elements
    const searchInput = document.getElementById('productSearch');
    const resultsContainer = document.getElementById('productResultsContainer');
    const cartContainer = document.getElementById('cartContainer');
    const cartCountSpan = document.getElementById('cartCount');
    const cartTotalSpan = document.getElementById('cartTotal');
    const checkoutBtn = document.getElementById('checkoutBtn');
    const clearCartBtn = document.getElementById('clearCartBtn');

    // Modals
    const checkoutModal = new bootstrap.Modal(document.getElementById('checkoutModal'));

    // Recherche
    searchInput.addEventListener('input', function(e) {
        const query = e.target.value.trim();
        if (searchTimeout) clearTimeout(searchTimeout);
        
        if (query.length < 2) {
            resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"bi bi-search fs-1\"></i><p class=\"mt-2\">Recherchez un produit pour commencer</p></div>';
            document.getElementById('resultCount').textContent = '0';
            return;
        }
        
        resultsContainer.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Recherche...</p></div>';
        
        searchTimeout = setTimeout(() => {
            fetch(`\${searchUrl}?q=\${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(products => {
                    if (!products.length) {
                        resultsContainer.innerHTML = '<div class=\"text-center text-muted py-5\"><i class=\"bi bi-search fs-1\"></i><p class=\"mt-2\">Aucun produit trouvé</p></div>';
                        document.getElementById('resultCount').textContent = '0';
                        return;
                    }
                    
                    let html = '<div class=\"product-grid\">';
                    products.forEach(product => {
                        const lowStockClass = product.is_low_stock ? 'badge-low-stock' : '';
                        const promotionBadge = product.has_promotion ? 
                            `<span class=\"badge badge-promotion ms-2\"><i class=\"bi bi-tag\"></i> Promo</span>` : '';
                        
                        html += `
                            <div class=\"product-card\" data-product='\${JSON.stringify(product)}'>
                                <div class=\"product-card-img\">
                                    \${product.image ? 
                                        `<img src=\"/uploads/products/\${product.image}\" alt=\"\${escapeHtml(product.name)}\">` : 
                                        `<i class=\"fas fa-box fallback-icon\"></i>`
                                    }
                                </div>
                                <div class=\"product-card-body\">
                                    <div class=\"product-card-title\">\${escapeHtml(product.name)}</div>
                                    <div class=\"product-card-barcode\">
                                        <i class=\"bi bi-upc-scan\"></i> \${product.barcode}
                                        \${promotionBadge}
                                    </div>
                                    <div class=\"product-card-price\">
                                        \${product.final_price.toLocaleString('fr-FR')} FCFA
                                        \${product.has_promotion ? 
                                            `<span class=\"product-card-old-price\">\${product.sale_price.toLocaleString('fr-FR')} FCFA</span>` : ''}
                                    </div>
                                    <div class=\"product-card-stock\">
                                        <span class=\"badge \${lowStockClass}\">Stock: \${product.stock_quantity} \${product.unit || 'pièce(s)'}</span>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    html += '</div>';
                    resultsContainer.innerHTML = html;
                    document.getElementById('resultCount').textContent = products.length;
                    
                    // Attacher événements
                    document.querySelectorAll('.product-card').forEach(card => {
                        card.addEventListener('click', () => addToCart(JSON.parse(card.dataset.product)));
                    });
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    resultsContainer.innerHTML = '<div class=\"text-center py-5 text-danger\">Erreur de connexion</div>';
                });
        }, 300);
    });

    // Ajout au panier
    async function addToCart(product) {
        const formData = new FormData();
        formData.append('quantity', 1);
        
        try {
            const response = await fetch(addToCartUrl.replace('{id}', product.id), {
                method: 'POST',
                body: formData
            });
            const data = await response.json();
            
            if (data.success) {
                await refreshCart();
                showToast('success', `\${product.name} ajouté au panier`);
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur:', error);
            showToast('error', 'Erreur lors de l\\'ajout');
        }
    }

    // Rafraîchir le panier
    async function refreshCart() {
        try {
            const response = await fetch(cartDataUrl);
            const data = await response.json();
            updateCartDisplay(data);
            currentCartTotal = data.total;
        } catch (error) {
            console.error('Erreur:', error);
        }
    }

    // Mise à jour de l'affichage du panier
    function updateCartDisplay(cartData) {
        if (!cartData.items || cartData.items.length === 0) {
            cartContainer.innerHTML = `
                <div class=\"empty-cart\">
                    <i class=\"bi bi-cart-x\"></i>
                    <p>Votre panier est vide</p>
                    <button class=\"btn btn-primary btn-sm\" onclick=\"document.getElementById('productSearch').focus()\">
                        <i class=\"bi bi-plus-circle\"></i> Ajouter des produits
                    </button>
                </div>
            `;
            cartTotalSpan.innerHTML = '0 FCFA';
            cartCountSpan.innerHTML = '0';
            checkoutBtn.disabled = true;
            clearCartBtn.disabled = true;
            return;
        }

        let itemsHtml = '<ul class=\"cart-items\">';
        cartData.items.forEach(item => {
            itemsHtml += `
                <li class=\"cart-item\" data-id=\"\${item.id}\" data-type=\"\${item.type}\">
                    <div class=\"cart-item-info\">
                        <div class=\"cart-item-title\">\${escapeHtml(item.name)}</div>
                        <div class=\"cart-item-meta\">
                            \${item.type === 'product' ? `<i class=\"bi bi-upc-scan\"></i> \${item.barcode}` : ''}
                            \${item.unit ? `<span class=\"ms-2\"><i class=\"bi bi-rulers\"></i> \${item.unit}</span>` : ''}
                        </div>
                        \${item.has_promotion && item.promotion ? 
                            `<div class=\"promotion-badge\"><i class=\"bi bi-tag\"></i> \${escapeHtml(item.promotion.message)}</div>` : ''}
                    </div>
                    <div class=\"cart-item-quantity\">
                        <div class=\"input-group input-group-sm\">
                            <button class=\"btn btn-outline-secondary btn-decr\" type=\"button\">-</button>
                            <input type=\"text\" class=\"form-control text-center quantity-input\" value=\"\${item.quantity}\" style=\"width: 50px;\">
                            <button class=\"btn btn-outline-secondary btn-incr\" type=\"button\">+</button>
                        </div>
                    </div>
                    <div class=\"cart-item-price\">
                        <div class=\"total\">\${item.total_price.toLocaleString('fr-FR')} FCFA</div>
                        <small class=\"text-muted\">\${item.unit_price.toLocaleString('fr-FR')} FCFA/unité</small>
                        <div class=\"action-buttons\">
                            <button class=\"btn btn-sm btn-outline-danger remove-item\"><i class=\"bi bi-trash\"></i></button>
                        </div>
                    </div>
                </li>
            `;
        });
        itemsHtml += '</ul>';
        cartContainer.innerHTML = itemsHtml;
        cartTotalSpan.innerHTML = `\${cartData.total.toLocaleString('fr-FR')} FCFA`;
        cartCountSpan.innerHTML = cartData.items.length;
        checkoutBtn.disabled = false;
        clearCartBtn.disabled = false;
        
        // Attacher événements
        attachCartEvents();
    }

    // Attacher événements du panier
    function attachCartEvents() {
        document.querySelectorAll('.cart-item').forEach(item => {
            const id = item.dataset.id;
            const type = item.dataset.type;
            
            // Décrémenter
            item.querySelector('.btn-decr')?.addEventListener('click', async () => {
                const input = item.querySelector('.quantity-input');
                let quantity = parseInt(input.value) - 1;
                if (quantity >= 1) {
                    await updateQuantity(id, type, quantity);
                }
            });
            
            // Incrémenter
            item.querySelector('.btn-incr')?.addEventListener('click', async () => {
                const input = item.querySelector('.quantity-input');
                let quantity = parseInt(input.value) + 1;
                await updateQuantity(id, type, quantity);
            });
            
            // Modifier manuelle
            item.querySelector('.quantity-input')?.addEventListener('change', async (e) => {
                let quantity = parseInt(e.target.value);
                if (isNaN(quantity) || quantity < 1) quantity = 1;
                await updateQuantity(id, type, quantity);
            });
            
            // Supprimer
            item.querySelector('.remove-item')?.addEventListener('click', async () => {
                await removeItem(id, type);
            });
        });
    }

    // Mettre à jour la quantité
    async function updateQuantity(id, type, quantity) {
        const url = updateQuantityUrl.replace('PLACEHOLDER', type).replace('PLACEHOLDER', id);
        const formData = new FormData();
        formData.append('quantity', quantity);
        
        try {
            const response = await fetch(url, { method: 'PUT', body: formData });
            const data = await response.json();
            if (data.success) {
                await refreshCart();
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur:', error);
        }
    }

    // Supprimer un article
    async function removeItem(id, type) {
        const url = removeItemUrl.replace('PLACEHOLDER', type).replace('PLACEHOLDER', id);
        
        try {
            const response = await fetch(url, { method: 'DELETE' });
            const data = await response.json();
            if (data.success) {
                await refreshCart();
                showToast('success', 'Article supprimé');
            }
        } catch (error) {
            console.error('Erreur:', error);
        }
    }

    // Vider le panier
    clearCartBtn?.addEventListener('click', async () => {
        if (confirm('Vider tout le panier ?')) {
            try {
                await fetch(clearCartUrl, { method: 'POST' });
                await refreshCart();
                showToast('success', 'Panier vidé');
            } catch (error) {
                console.error('Erreur:', error);
            }
        }
    });

    // Scanner
    document.getElementById('scanBarcodeBtn')?.addEventListener('click', () => {
        const barcode = prompt('Scanner le code-barres:');
        if (barcode && barcode.length > 2) {
            searchInput.value = barcode;
            searchInput.dispatchEvent(new Event('input'));
        }
    });

    // Encaissement
    checkoutBtn?.addEventListener('click', () => {
        document.getElementById('totalToPay').innerHTML = currentCartTotal.toLocaleString('fr-FR');
        checkoutModal.show();
    });

    // Calcul de la monnaie
    const amountPaidInput = document.getElementById('amountPaid');
    const changeContainer = document.getElementById('changeContainer');
    const changeAmountSpan = document.getElementById('changeAmount');
    
    amountPaidInput?.addEventListener('input', function() {
        const amountPaid = parseFloat(this.value) || 0;
        const change = amountPaid - currentCartTotal;
        
        if (amountPaid >= currentCartTotal) {
            changeContainer.style.display = 'block';
            changeAmountSpan.innerHTML = change.toLocaleString('fr-FR') + ' FCFA';
        } else {
            changeContainer.style.display = 'none';
        }
    });

    // Confirmation vente
    document.getElementById('confirmCheckoutBtn')?.addEventListener('click', async () => {
        const form = document.getElementById('checkoutForm');
        const formData = new FormData(form);
        
        try {
            const response = await fetch(checkoutUrl, { method: 'POST', body: formData });
            const data = await response.json();
            
            if (data.success) {
                checkoutModal.hide();
                showToast('success', data.message);
                await refreshCart();
                
                if (data.redirect_url) {
                    setTimeout(() => {
                        window.open(data.redirect_url, '_blank');
                    }, 1000);
                }
            } else {
                showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur:', error);
            showToast('error', 'Erreur lors de l\\'enregistrement');
        }
    });

    // Utilitaires
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function showToast(type, message) {
        const toastHtml = `
            <div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 9999\">
                <div class=\"toast align-items-center text-white bg-\${type === 'success' ? 'success' : 'danger'} border-0\" role=\"alert\" data-bs-autohide=\"true\" data-bs-delay=\"3000\">
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
        const toast = new bootstrap.Toast(container.querySelector('.toast'));
        toast.show();
        setTimeout(() => container.remove(), 3500);
    }

    // Initialisation
    refreshCart();
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sale/cart.html.twig";
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
        return array (  648 => 467,  642 => 464,  638 => 463,  634 => 462,  630 => 461,  626 => 460,  622 => 459,  618 => 458,  612 => 455,  605 => 454,  578 => 431,  540 => 396,  535 => 393,  531 => 391,  516 => 382,  512 => 381,  504 => 376,  497 => 371,  491 => 368,  488 => 367,  486 => 366,  483 => 365,  477 => 363,  474 => 362,  468 => 360,  466 => 359,  461 => 357,  453 => 355,  449 => 354,  446 => 353,  436 => 345,  434 => 344,  428 => 341,  388 => 306,  380 => 303,  371 => 296,  364 => 295,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sale/cart.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\cart.html.twig");
    }
}
