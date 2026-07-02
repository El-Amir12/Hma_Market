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

/* marketplace/pharmacy/_product_list.html.twig */
class __TwigTemplate_0abb9d79ff4f8656c4df1cf15c4a356f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "
<style>
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }

    .product-card {
        background: white;
        border-radius: 14px;
        padding: 1.2rem;
        border: 1px solid var(--gray-200);
        transition: all 0.3s ease;
        cursor: pointer;
        height: 100%;
        position: relative;
    }

    .product-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.06);
        border-color: var(--primary-color);
    }

    .product-card .product-name {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.25rem;
        font-size: 1rem;
    }

    .product-card .product-category {
        font-size: 0.8rem;
        color: var(--gray-500);
        margin-bottom: 0.5rem;
    }

    .product-card .product-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 0.5rem;
    }

    .product-card .product-meta .meta-tag {
        font-size: 0.7rem;
        padding: 0.15rem 0.6rem;
        border-radius: 50px;
        background: var(--gray-100);
        color: var(--gray-500);
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }

    .product-card .product-status {
        font-size: 0.75rem;
        font-weight: 600;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }

    .product-status.in-stock {
        background: #dcfce7;
        color: #16a34a;
    }

    .product-status.in-stock i {
        color: #16a34a;
    }

    .product-status.out-of-stock {
        background: #fee2e2;
        color: #dc2626;
    }

    .product-status.out-of-stock i {
        color: #dc2626;
    }

    .product-card .product-price {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 1.1rem;
    }

    .product-prescription {
        font-size: 0.7rem;
        font-weight: 600;
        padding: 0.15rem 0.6rem;
        border-radius: 50px;
        background: #fef3c7;
        color: #92400e;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }

    .product-card .product-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 0.75rem;
        padding-top: 0.75rem;
        border-top: 1px solid var(--gray-100);
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .product-card .stock-info {
        font-size: 0.75rem;
        color: var(--gray-500);
    }

    .product-results-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .product-results-header .result-count {
        font-weight: 600;
        color: var(--dark-color);
    }

    .product-results-header .result-count i {
        color: var(--primary-color);
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        border: 2px dashed var(--gray-200);
    }

    .empty-state i {
        font-size: 4rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    .empty-state h5 {
        color: var(--dark-color);
        font-weight: 700;
    }

    .empty-state .text-muted {
        color: var(--gray-500);
    }

    @media (max-width: 768px) {
        .product-grid { grid-template-columns: 1fr; }
        .product-card .product-footer { flex-direction: column; align-items: flex-start; }
        .product-results-header { flex-direction: column; align-items: flex-start; }
    }
</style>

";
        // line 188
        yield "<div class=\"product-results-header\">
    <div class=\"result-count\">
        <i class=\"fas fa-box me-2\"></i>
        ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)), "html", null, true);
        yield " produit(s) trouvé(s)
        ";
        // line 192
        if ((($tmp = ((array_key_exists("searchProduct", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchProduct"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 193
            yield "            <span class=\"text-muted\" style=\"font-weight: 400; font-size: 0.9rem;\">
                pour \"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchProduct"] ?? null), "html", null, true);
            yield "\"
            </span>
        ";
        }
        // line 197
        yield "    </div>
    <div class=\"text-muted\" style=\"font-size: 0.85rem;\">
        <i class=\"fas fa-info-circle me-1\"></i>
        Cliquez sur un produit pour voir ses détails
    </div>
</div>

";
        // line 207
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) > 0)) {
            // line 208
            yield "    <div class=\"product-grid\">
        ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 210
                yield "            <div class=\"product-card\" 
                 data-product='";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 212
$context["product"], "id", [], "any", false, false, false, 212), "name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 213
$context["product"], "name", [], "any", false, false, false, 213), "categoryName" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 214
$context["product"], "category", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 214), "name", [], "any", false, false, false, 214)) : ("Non catégorisé")), "salePrice" => CoreExtension::getAttribute($this->env, $this->source,                 // line 215
$context["product"], "salePrice", [], "any", false, false, false, 215), "stockQuantity" => CoreExtension::getAttribute($this->env, $this->source,                 // line 216
$context["product"], "stockQuantity", [], "any", false, false, false, 216), "prescriptionRequired" => CoreExtension::getAttribute($this->env, $this->source,                 // line 217
$context["product"], "prescriptionRequired", [], "any", false, false, false, 217), "form" => CoreExtension::getAttribute($this->env, $this->source,                 // line 218
$context["product"], "form", [], "any", false, false, false, 218), "dosage" => CoreExtension::getAttribute($this->env, $this->source,                 // line 219
$context["product"], "dosage", [], "any", false, false, false, 219), "unit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 220
$context["product"], "unit", [], "any", false, false, false, 220), "description" => CoreExtension::getAttribute($this->env, $this->source,                 // line 221
$context["product"], "description", [], "any", false, false, false, 221), "barcode" => CoreExtension::getAttribute($this->env, $this->source,                 // line 222
$context["product"], "barcode", [], "any", false, false, false, 222), "hmaService" => CoreExtension::getAttribute($this->env, $this->source,                 // line 223
$context["product"], "hmaService", [], "any", false, false, false, 223)]), "html_attr");
                // line 224
                yield "'
                 onclick=\"showProductDetail(this)\">
                <div class=\"product-name\">";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 226), "html", null, true);
                yield "</div>
                
                <div class=\"product-category\">
                    <i class=\"fas fa-tag me-1\"></i>
                    ";
                // line 230
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 230), "name", [], "any", false, false, false, 230), "html", null, true)) : ("Non catégorisé"));
                yield "
                </div>

                <div class=\"product-meta\">
                    ";
                // line 234
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 234)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 235
                    yield "                        <span class=\"meta-tag\">
                            <i class=\"fas fa-capsules\"></i> ";
                    // line 236
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 236), "html", null, true);
                    yield "
                        </span>
                    ";
                }
                // line 239
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 240
                    yield "                        <span class=\"meta-tag\">
                            <i class=\"fas fa-weight\"></i> ";
                    // line 241
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 241), "html", null, true);
                    yield "
                        </span>
                    ";
                }
                // line 244
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 244)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 245
                    yield "                        <span class=\"meta-tag\">
                            <i class=\"fas fa-ruler\"></i> ";
                    // line 246
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 246), "html", null, true);
                    yield "
                        </span>
                    ";
                }
                // line 249
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prescriptionRequired", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 250
                    yield "                        <span class=\"product-prescription\">
                            <i class=\"fas fa-prescription-bottle\"></i> Ordonnance
                        </span>
                    ";
                }
                // line 254
                yield "                </div>

                <div class=\"product-footer\">
                    <div>
                        ";
                // line 258
                $context["currentStock"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", true, true, false, 258)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 258), 0)) : (0));
                // line 259
                yield "                        ";
                if ((($context["currentStock"] ?? null) > 0)) {
                    // line 260
                    yield "                            <span class=\"product-status in-stock\">
                                <i class=\"fas fa-check-circle\"></i> Disponible
                            </span>
                            <span class=\"stock-info\">
                                (";
                    // line 264
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentStock"] ?? null), "html", null, true);
                    yield " en stock)
                            </span>
                        ";
                } else {
                    // line 267
                    yield "                            <span class=\"product-status out-of-stock\">
                                <i class=\"fas fa-times-circle\"></i> Non disponible
                            </span>
                        ";
                }
                // line 271
                yield "                    </div>
                    <span class=\"product-price\">
                        ";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 273), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 273)), "html", null, true);
                yield "
                    </span>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 278
            yield "    </div>

";
        } else {
            // line 284
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-box-open\"></i>
        <h5>Aucun produit trouvé</h5>
        <p class=\"text-muted\">
            ";
            // line 288
            $context["hasFilters"] = (((($context["selectedCategory"] ?? null) || ($context["selectedForm"] ?? null)) || ($context["selectedDosage"] ?? null)) ||  !(null === ($context["prescriptionRequired"] ?? null)));
            // line 289
            yield "            ";
            if ((($context["hasFilters"] ?? null) || ((array_key_exists("searchProduct", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchProduct"] ?? null), "")) : ("")))) {
                // line 290
                yield "                Aucun produit ne correspond à vos critères de recherche.
                <br>
                <span style=\"font-size: 0.85rem;\">
                    <i class=\"fas fa-lightbulb me-1\"></i>
                    Essayez de modifier vos filtres ou d'élargir votre recherche.
                </span>
            ";
            } else {
                // line 297
                yield "                Aucun produit disponible dans cette pharmacie pour le moment.
            ";
            }
            // line 299
            yield "        </p>
        ";
            // line 300
            if ((($context["hasFilters"] ?? null) || ((array_key_exists("searchProduct", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchProduct"] ?? null), "")) : ("")))) {
                // line 301
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 303
($context["selectedCountry"] ?? null), "city" =>                 // line 304
($context["selectedCity"] ?? null), "pharmacy" =>                 // line 305
($context["selectedPharmacy"] ?? null)]), "html", null, true);
                // line 306
                yield "\" class=\"btn btn-primary mt-3\">
                <i class=\"fas fa-undo me-1\"></i>Voir tous les produits
            </a>
        ";
            }
            // line 310
            yield "    </div>
";
        }
        // line 312
        yield "
";
        // line 316
        yield "<div class=\"modal fade product-detail-modal\" id=\"productDetailModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"productDetailTitle\">Détail du produit</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
            </div>
            <div class=\"modal-body\" id=\"productDetailBody\">
                <div class=\"text-center py-4\">
                    <i class=\"fas fa-spinner fa-spin fa-2x text-primary\"></i>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ============================================================ #
    // 1. AFFICHER LE DÉTAIL D'UN PRODUIT                          #
    // ============================================================ #
    window.showProductDetail = function(element) {
        try {
            const productData = element.dataset.product;
            if (!productData) return;
            
            const product = JSON.parse(productData);
            
            const body = document.getElementById('productDetailBody');
            const title = document.getElementById('productDetailTitle');
            
            title.textContent = product.name || 'Détail du produit';
            
            const stock = product.stockQuantity || 0;
            const statusClass = stock > 0 ? 'in-stock' : 'out-of-stock';
            const statusText = stock > 0 ? 'Disponible' : 'Non disponible';
            const statusIcon = stock > 0 ? 'fa-check-circle' : 'fa-times-circle';
            
            body.innerHTML = `
                <div class=\"container-fluid p-0\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <div class=\"mb-3\">
                                <h6 class=\"text-muted\"><i class=\"fas fa-tag me-1\"></i> Catégorie</h6>
                                <p class=\"mb-0\">\${product.categoryName || 'Non catégorisé'}</p>
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

                            <div class=\"mb-3\">
                                <h6 class=\"text-muted\"><i class=\"fas fa-ruler me-1\"></i> Unité</h6>
                                <p class=\"mb-0\">\${product.unit || 'Non spécifiée'}</p>
                            </div>

                            \${product.description ? `
                                <div class=\"mb-3\">
                                    <h6 class=\"text-muted\"><i class=\"fas fa-align-left me-1\"></i> Description</h6>
                                    <p class=\"mb-0\">\${product.description}</p>
                                </div>
                            ` : ''}
                            
                            \${product.barcode ? `
                                <div class=\"mb-3\">
                                    <h6 class=\"text-muted\"><i class=\"fas fa-barcode me-1\"></i> Code-barres</h6>
                                    <p class=\"mb-0\" style=\"font-family: monospace;\">\${product.barcode}</p>
                                </div>
                            ` : ''}
                        </div>

                        <div class=\"col-md-5\">
                            <div class=\"card bg-light p-3\">
                                <div class=\"mb-3\">
                                    <h6 class=\"text-muted\">Prix</h6>
                                    <p class=\"h3 text-primary mb-0\">
                                        \${product.salePrice ? product.salePrice + ' €' : 'Prix non défini'}
                                    </p>
                                </div>

                                <div class=\"mb-3\">
                                    <h6 class=\"text-muted\">Disponibilité</h6>
                                    \${stock > 0 ? `
                                        <span class=\"product-status in-stock\">
                                            <i class=\"fas fa-check-circle\"></i> Disponible
                                            <span class=\"text-muted\" style=\"font-weight: 400; font-size: 0.75rem;\">(\${stock} en stock)</span>
                                        </span>
                                    ` : `
                                        <span class=\"product-status out-of-stock\">
                                            <i class=\"fas fa-times-circle\"></i> Non disponible
                                        </span>
                                    `}
                                </div>

                                \${product.prescriptionRequired ? `
                                    <div>
                                        <h6 class=\"text-muted\">Prescription</h6>
                                        <span class=\"prescription-badge\">
                                            <i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise
                                        </span>
                                    </div>
                                ` : ''}
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            const modal = new bootstrap.Modal(document.getElementById('productDetailModal'));
            modal.show();
            
        } catch (e) {
            console.error('Erreur lors de l\\'affichage du produit:', e);
            const body = document.getElementById('productDetailBody');
            if (body) {
                body.innerHTML = `
                    <div class=\"alert alert-danger\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        Une erreur est survenue lors du chargement des détails du produit.
                    </div>
                `;
            }
        }
    };
});
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/pharmacy/_product_list.html.twig";
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
        return array (  425 => 316,  422 => 312,  418 => 310,  412 => 306,  410 => 305,  409 => 304,  408 => 303,  406 => 301,  404 => 300,  401 => 299,  397 => 297,  388 => 290,  385 => 289,  383 => 288,  377 => 284,  372 => 278,  361 => 273,  357 => 271,  351 => 267,  345 => 264,  339 => 260,  336 => 259,  334 => 258,  328 => 254,  322 => 250,  319 => 249,  313 => 246,  310 => 245,  307 => 244,  301 => 241,  298 => 240,  295 => 239,  289 => 236,  286 => 235,  284 => 234,  277 => 230,  270 => 226,  266 => 224,  264 => 223,  263 => 222,  262 => 221,  261 => 220,  260 => 219,  259 => 218,  258 => 217,  257 => 216,  256 => 215,  255 => 214,  254 => 213,  253 => 212,  252 => 211,  249 => 210,  245 => 209,  242 => 208,  240 => 207,  231 => 197,  225 => 194,  222 => 193,  220 => 192,  216 => 191,  211 => 188,  42 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/_product_list.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_product_list.html.twig");
    }
}
