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
class __TwigTemplate_f0ddfb70c35da729dd9934db293dd4b6 extends Template
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
        // line 7
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
        overflow: hidden;
    }

    .product-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.06);
        border-color: var(--primary-color);
    }

    .product-card .product-image-wrapper {
        width: 100%;
        height: 140px;
        overflow: hidden;
        border-radius: 8px;
        margin-bottom: 0.75rem;
        background: #f8fafc;
        border: 1px solid #e5e7eb;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-card .product-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-card .product-image-wrapper .placeholder-icon {
        font-size: 3rem;
        color: #cbd5e1;
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
        .product-card .product-image-wrapper { height: 100px; }
    }
</style>

";
        // line 203
        yield "<div class=\"product-results-header\">
    <div class=\"result-count\">
        <i class=\"fas fa-box me-2\"></i>
        ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)), "html", null, true);
        yield " produit(s) trouvé(s)
        ";
        // line 207
        if ((($tmp = ((array_key_exists("searchProduct", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchProduct"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "            <span class=\"text-muted\" style=\"font-weight: 400; font-size: 0.9rem;\">
                pour \"";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchProduct"] ?? null), "html", null, true);
            yield "\"
            </span>
        ";
        }
        // line 212
        yield "    </div>
    <div class=\"text-muted\" style=\"font-size: 0.85rem;\">
        <i class=\"fas fa-info-circle me-1\"></i>
        Cliquez sur un produit pour voir ses détails
    </div>
</div>

";
        // line 222
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) > 0)) {
            // line 223
            yield "    <div class=\"product-grid\">
        ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 225
                yield "            ";
                $context["imagePath"] = "";
                // line 226
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 226) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 226) != "default-product.png"))) {
                    // line 227
                    yield "                ";
                    $context["imagePath"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("public/uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 227)));
                    // line 228
                    yield "            ";
                }
                // line 229
                yield "            
            <div class=\"product-card\" 
                 data-product='";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 232
$context["product"], "id", [], "any", false, false, false, 232), "name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 233
$context["product"], "name", [], "any", false, false, false, 233), "categoryName" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 234
$context["product"], "category", [], "any", false, false, false, 234)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 234), "name", [], "any", false, false, false, 234)) : ("Non catégorisé")), "salePrice" => CoreExtension::getAttribute($this->env, $this->source,                 // line 235
$context["product"], "salePrice", [], "any", false, false, false, 235), "stockQuantity" => CoreExtension::getAttribute($this->env, $this->source,                 // line 236
$context["product"], "stockQuantity", [], "any", false, false, false, 236), "prescriptionRequired" => CoreExtension::getAttribute($this->env, $this->source,                 // line 237
$context["product"], "prescriptionRequired", [], "any", false, false, false, 237), "form" => CoreExtension::getAttribute($this->env, $this->source,                 // line 238
$context["product"], "form", [], "any", false, false, false, 238), "dosage" => CoreExtension::getAttribute($this->env, $this->source,                 // line 239
$context["product"], "dosage", [], "any", false, false, false, 239), "unit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 240
$context["product"], "unit", [], "any", false, false, false, 240), "description" => CoreExtension::getAttribute($this->env, $this->source,                 // line 241
$context["product"], "description", [], "any", false, false, false, 241), "barcode" => CoreExtension::getAttribute($this->env, $this->source,                 // line 242
$context["product"], "barcode", [], "any", false, false, false, 242), "hmaService" => CoreExtension::getAttribute($this->env, $this->source,                 // line 243
$context["product"], "hmaService", [], "any", false, false, false, 243), "image" =>                 // line 244
($context["imagePath"] ?? null)]), "html_attr");
                // line 245
                yield "'
                 onclick=\"showProductDetail(this)\">
                
                ";
                // line 249
                yield "                <div class=\"product-image-wrapper\">
                    ";
                // line 250
                if ((($tmp = ($context["imagePath"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 251
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["imagePath"] ?? null), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 251), "html", null, true);
                    yield "\" loading=\"lazy\" onerror=\"this.style.display='none';this.parentElement.querySelector('.placeholder-icon').style.display='block';\">
                    ";
                }
                // line 253
                yield "                    <div class=\"placeholder-icon\" ";
                if ((($tmp = ($context["imagePath"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "style=\"display:none;\"";
                }
                yield ">
                        <i class=\"fas fa-box\"></i>
                    </div>
                </div>
                
                <div class=\"product-name\">";
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 258), "html", null, true);
                yield "</div>
                
                <div class=\"product-category\">
                    <i class=\"fas fa-tag me-1\"></i>
                    ";
                // line 262
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 262)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 262), "name", [], "any", false, false, false, 262), "html", null, true)) : ("Non catégorisé"));
                yield "
                </div>

                <div class=\"product-meta\">
                    ";
                // line 266
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 267
                    yield "                        <span class=\"meta-tag\">
                            <i class=\"fas fa-capsules\"></i> ";
                    // line 268
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 268), "html", null, true);
                    yield "
                        </span>
                    ";
                }
                // line 271
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 272
                    yield "                        <span class=\"meta-tag\">
                            <i class=\"fas fa-weight\"></i> ";
                    // line 273
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 273), "html", null, true);
                    yield "
                        </span>
                    ";
                }
                // line 276
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 277
                    yield "                        <span class=\"meta-tag\">
                            <i class=\"fas fa-ruler\"></i> ";
                    // line 278
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 278), "html", null, true);
                    yield "
                        </span>
                    ";
                }
                // line 281
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prescriptionRequired", [], "any", false, false, false, 281)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 282
                    yield "                        <span class=\"product-prescription\">
                            <i class=\"fas fa-prescription-bottle\"></i> Ordonnance
                        </span>
                    ";
                }
                // line 286
                yield "                </div>

                <div class=\"product-footer\">
                    <div>
                        ";
                // line 290
                $context["currentStock"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 290), 0)) : (0));
                // line 291
                yield "                        ";
                if ((($context["currentStock"] ?? null) > 0)) {
                    // line 292
                    yield "                            <span class=\"product-status in-stock\">
                                <i class=\"fas fa-check-circle\"></i> Disponible
                            </span>
                        ";
                } else {
                    // line 296
                    yield "                            <span class=\"product-status out-of-stock\">
                                <i class=\"fas fa-times-circle\"></i> Non disponible
                            </span>
                        ";
                }
                // line 300
                yield "                    </div>
                    <span class=\"product-price\">
                        ";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 302), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 302)), "html", null, true);
                yield "
                    </span>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            yield "    </div>

";
        } else {
            // line 313
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-box-open\"></i>
        <h5>Aucun produit trouvé</h5>
        <p class=\"text-muted\">
            ";
            // line 317
            $context["hasFilters"] = (((($context["selectedCategory"] ?? null) || ($context["selectedForm"] ?? null)) || ($context["selectedDosage"] ?? null)) ||  !(null === ($context["prescriptionRequired"] ?? null)));
            // line 318
            yield "            ";
            if ((($context["hasFilters"] ?? null) || ((array_key_exists("searchProduct", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchProduct"] ?? null), "")) : ("")))) {
                // line 319
                yield "                Aucun produit ne correspond à vos critères de recherche.
                <br>
                <span style=\"font-size: 0.85rem;\">
                    <i class=\"fas fa-lightbulb me-1\"></i>
                    Essayez de modifier vos filtres ou d'élargir votre recherche.
                </span>
            ";
            } else {
                // line 326
                yield "                Aucun produit disponible dans cette pharmacie pour le moment.
            ";
            }
            // line 328
            yield "        </p>
        ";
            // line 329
            if ((($context["hasFilters"] ?? null) || ((array_key_exists("searchProduct", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchProduct"] ?? null), "")) : ("")))) {
                // line 330
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 332
($context["selectedCountry"] ?? null), "city" =>                 // line 333
($context["selectedCity"] ?? null), "pharmacy" =>                 // line 334
($context["selectedPharmacy"] ?? null)]), "html", null, true);
                // line 335
                yield "\" class=\"btn btn-primary mt-3\">
                <i class=\"fas fa-undo me-1\"></i>Voir tous les produits
            </a>
        ";
            }
            // line 339
            yield "    </div>
";
        }
        // line 341
        yield "
";
        // line 345
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
    // 1. AFFICHER LE DÉTAIL D'UN PRODUIT AVEC IMAGE              #
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
            
            // ✅ Image du produit
            let imageHtml = '';
            if (product.image) {
                imageHtml = `<img src=\"\${product.image}\" alt=\"\${product.name}\" loading=\"lazy\" style=\"width: 100%; max-height: 200px; object-fit: contain; border-radius: 8px;\" onerror=\"this.style.display='none';this.parentElement.querySelector('.placeholder-icon').style.display='block';\">`;
                imageHtml += `<div class=\"placeholder-icon\" style=\"display:none;\"><i class=\"fas fa-box\" style=\"font-size: 4rem; color: #cbd5e1;\"></i></div>`;
            } else {
                imageHtml = `<div class=\"placeholder-icon\"><i class=\"fas fa-box\" style=\"font-size: 4rem; color: #cbd5e1;\"></i></div>`;
            }
            
            body.innerHTML = `
                <div class=\"container-fluid p-0\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <div style=\"background: #f8fafc; border-radius: 12px; padding: 1rem; text-align: center; border: 1px solid #e5e7eb; min-height: 200px; display: flex; align-items: center; justify-content: center;\">
                                \${imageHtml}
                            </div>
                        </div>
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
                            
                            \${product.prescriptionRequired ? `
                                <div class=\"mb-3\">
                                    <h6 class=\"text-muted\"><i class=\"fas fa-prescription-bottle me-1\"></i> Prescription</h6>
                                    <p class=\"mb-0\">
                                        <span class=\"prescription-badge\">
                                            <i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise
                                        </span>
                                    </p>
                                </div>
                            ` : ''}
                        </div>
                    </div>
                    
                    <div class=\"row mt-3\">
                        <div class=\"col-12\">
                            <div class=\"card bg-light p-3\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h6 class=\"text-muted\">Prix</h6>
                                        <p class=\"h3 text-primary mb-0\">
                                            \${product.salePrice ? product.salePrice + ' FCFA' : 'Prix non défini'}
                                        </p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6 class=\"text-muted\">Disponibilité</h6>
                                        <span class=\"product-status \${statusClass}\">
                                            <i class=\"fas \${statusIcon}\"></i> \${statusText}
                                        </span>
                                    </div>
                                </div>
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
        return array (  484 => 345,  481 => 341,  477 => 339,  471 => 335,  469 => 334,  468 => 333,  467 => 332,  465 => 330,  463 => 329,  460 => 328,  456 => 326,  447 => 319,  444 => 318,  442 => 317,  436 => 313,  431 => 307,  420 => 302,  416 => 300,  410 => 296,  404 => 292,  401 => 291,  399 => 290,  393 => 286,  387 => 282,  384 => 281,  378 => 278,  375 => 277,  372 => 276,  366 => 273,  363 => 272,  360 => 271,  354 => 268,  351 => 267,  349 => 266,  342 => 262,  335 => 258,  324 => 253,  316 => 251,  314 => 250,  311 => 249,  306 => 245,  304 => 244,  303 => 243,  302 => 242,  301 => 241,  300 => 240,  299 => 239,  298 => 238,  297 => 237,  296 => 236,  295 => 235,  294 => 234,  293 => 233,  292 => 232,  291 => 231,  287 => 229,  284 => 228,  281 => 227,  278 => 226,  275 => 225,  271 => 224,  268 => 223,  266 => 222,  257 => 212,  251 => 209,  248 => 208,  246 => 207,  242 => 206,  237 => 203,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/_product_list.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_product_list.html.twig");
    }
}
