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

/* marketplace/pharmacy/_product_mode.html.twig */
class __TwigTemplate_2079b1599942179a86f7accdd87ff584 extends Template
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
        // line 2
        yield "
<style>
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

    .pharmacy-selected-info .pharmacy-name i {
        color: var(--primary-color);
    }

    .pharmacy-selected-info .btn-outline-primary {
        border-radius: 50px;
        padding: 0.4rem 1.2rem;
        font-size: 0.85rem;
    }

    .product-select-container {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid var(--gray-200);
        margin-top: 1.5rem;
    }

    .product-select-container .form-label {
        font-size: 1rem;
    }

    .product-select-container .badge {
        font-size: 0.8rem;
        padding: 0.25rem 0.75rem;
    }

    .no-products-message {
        text-align: center;
        padding: 2rem;
        color: var(--gray-500);
    }

    .no-products-message i {
        font-size: 3rem;
        color: var(--gray-300);
        margin-bottom: 1rem;
        display: block;
    }

    /* ✅ Styles pour le statut */
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

    .empty-state h4 {
        color: var(--dark-color);
        font-weight: 700;
    }

    .empty-state .text-muted {
        color: var(--gray-500);
    }

    .empty-state .btn-primary {
        border-radius: 50px;
        padding: 0.6rem 2rem;
    }

    @media (max-width: 768px) {
        .pharmacy-selected-info { flex-direction: column; align-items: flex-start; }
        .product-select-container { padding: 1rem; }
    }
</style>

";
        // line 140
        if ((($tmp = ($context["selectedPharmacyData"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 141
            yield "    <div class=\"pharmacy-selected-info\">
        <div class=\"d-flex align-items-center gap-3\">
            <i class=\"fas fa-store\" style=\"font-size: 1.5rem; color: var(--primary-color);\"></i>
            <div>
                <span class=\"pharmacy-name\">
                    <i class=\"fas fa-hospital me-1\"></i>
                    ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "companyName", [], "any", false, false, false, 147), "html", null, true);
            yield "
                </span>
                <span class=\"text-muted ms-2\">- ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "city", [], "any", false, false, false, 149), "html", null, true);
            yield "</span>
            </div>
        </div>
        <a href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>             // line 154
($context["selectedCountry"] ?? null), "city" =>             // line 155
($context["selectedCity"] ?? null)]), "html", null, true);
            // line 156
            yield "\" class=\"btn btn-sm btn-outline-primary\">
            <i class=\"fas fa-undo\"></i> Changer de pharmacie
        </a>
    </div>

    ";
            // line 162
            yield "    ";
            // line 163
            yield "    ";
            // line 164
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_product_filters.html.twig", ["selectedPharmacy" =>             // line 165
($context["selectedPharmacy"] ?? null), "selectedCountry" =>             // line 166
($context["selectedCountry"] ?? null), "selectedCity" =>             // line 167
($context["selectedCity"] ?? null), "categories" =>             // line 168
($context["categories"] ?? null), "selectedCategory" =>             // line 169
($context["selectedCategory"] ?? null), "selectedForm" =>             // line 170
($context["selectedForm"] ?? null), "selectedDosage" =>             // line 171
($context["selectedDosage"] ?? null), "prescriptionRequired" =>             // line 172
($context["prescriptionRequired"] ?? null), "forms" => ((            // line 173
array_key_exists("forms", $context)) ? (Twig\Extension\CoreExtension::default(($context["forms"] ?? null), [])) : ([])), "filterApplied" => ((            // line 174
array_key_exists("filterApplied", $context)) ? (Twig\Extension\CoreExtension::default(($context["filterApplied"] ?? null), false)) : (false))]);
            // line 175
            yield "

    ";
            // line 178
            yield "    ";
            // line 179
            yield "    ";
            // line 180
            yield "    <div class=\"product-select-container\">
        <label class=\"form-label fw-semibold\">
            <i class=\"fas fa-box text-primary me-1\"></i> Produits disponibles
            <span class=\"badge bg-primary ms-2\">";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)), "html", null, true);
            yield "</span>
        </label>
        
        ";
            // line 186
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) > 0)) {
                // line 187
                yield "            <select id=\"productSelect\" class=\"form-control select2-product\">
                <option value=\"\">-- Sélectionnez un produit --</option>
                ";
                // line 189
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 190
                    yield "                    <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 190), "html", null, true);
                    yield "\" 
                            data-name=\"";
                    // line 191
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 191), "html", null, true);
                    yield "\"
                            data-category=\"";
                    // line 192
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 192), "name", [], "any", false, false, false, 192), "html", null, true)) : ("Non catégorisé"));
                    yield "\"
                            data-price=\"";
                    // line 193
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 193), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 193)), "html", null, true);
                    yield "\"
                            data-stock=\"";
                    // line 194
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 194), 0)) : (0)), "html", null, true);
                    yield "\"
                            data-prescription=\"";
                    // line 195
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prescriptionRequired", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                    yield "\"
                            data-form=\"";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 196), "")) : ("")), "html", null, true);
                    yield "\"
                            data-dosage=\"";
                    // line 197
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", true, true, false, 197)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 197), "")) : ("")), "html", null, true);
                    yield "\"
                            data-unit=\"";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 198)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 198), "")) : ("")), "html", null, true);
                    yield "\"
                            data-description=\"";
                    // line 199
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 199), "")) : ("")), "html", null, true);
                    yield "\"
                            data-barcode=\"";
                    // line 200
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", true, true, false, 200)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 200), "")) : ("")), "html", null, true);
                    yield "\">
                        ";
                    // line 201
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 201), "html", null, true);
                    yield " 
                        ";
                    // line 202
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " - ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 202), "html", null, true);
                    }
                    // line 203
                    yield "                        ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 203), "html", null, true);
                        yield ")";
                    }
                    // line 204
                    yield "                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                yield "            </select>
        ";
            } else {
                // line 208
                yield "            <div class=\"no-products-message\">
                <i class=\"fas fa-box-open\"></i>
                <p>Aucun produit disponible dans cette pharmacie.</p>
                <p class=\"text-muted small\">Les produits apparaîtront ici une fois ajoutés.</p>
            </div>
        ";
            }
            // line 214
            yield "    </div>

    ";
            // line 217
            yield "    ";
            // line 218
            yield "    ";
            // line 219
            yield "    <div class=\"modal fade product-detail-modal\" id=\"productDetailModal\" tabindex=\"-1\" aria-hidden=\"true\">
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

";
        } elseif ((        // line 241
($context["selectedCountry"] ?? null) && ($context["selectedCity"] ?? null))) {
            // line 242
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-store\"></i>
        <h4>Sélectionnez une pharmacie</h4>
        <p class=\"text-muted\">
            Pour rechercher des produits, veuillez sélectionner une pharmacie dans la liste ci-dessus.
        </p>
        <a href=\"";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>             // line 250
($context["selectedCountry"] ?? null), "city" =>             // line 251
($context["selectedCity"] ?? null)]), "html", null, true);
            // line 252
            yield "\" class=\"btn btn-primary mt-3\">
            <i class=\"fas fa-undo me-1\"></i>Actualiser
        </a>
    </div>

";
        } else {
            // line 261
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-search-location\"></i>
        <h4>Sélectionnez un pays et une ville</h4>
        <p class=\"text-muted\">
            Pour rechercher des produits, veuillez d'abord sélectionner un pays, une ville, puis une pharmacie.
        </p>
    </div>
";
        }
        // line 269
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('=== INITIALISATION PRODUCT MODE ===');
    
    // ============================================================ //
    // 1. INITIALISATION DU SELECT2 PRODUIT                         //
    // ============================================================ //
    ";
        // line 277
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) > 0)) {
            // line 278
            yield "    const productSelect = document.getElementById('productSelect');
    
    if (productSelect) {
        console.log('✅ Product select trouvé, ID:', productSelect.id);
        console.log('📊 Nombre de produits:', ";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)), "html", null, true);
            yield ");
        
        // Vérifier que jQuery et Select2 sont disponibles
        if (typeof jQuery === 'undefined') {
            console.error('❌ jQuery non chargé !');
            return;
        }
        
        if (typeof jQuery.fn.select2 === 'undefined') {
            console.error('❌ Select2 non chargé !');
            return;
        }
        
        // ✅ S'assurer que le select est visible
        productSelect.style.display = 'block';
        productSelect.style.width = '100%';
        productSelect.style.visibility = 'visible';
        productSelect.style.opacity = '1';
        
        // ✅ Attendre que le DOM soit complètement chargé
        setTimeout(function() {
            // Détruire toute instance existante
            if (jQuery(productSelect).data('select2')) {
                jQuery(productSelect).select2('destroy');
                console.log('🔄 Instance Select2 détruite');
            }
            
            // Initialiser Select2
            jQuery(productSelect).select2({
                theme: 'default',
                width: '100%',
                placeholder: '-- Sélectionnez un produit --',
                allowClear: true,
                language: 'fr',
                templateResult: formatProductOption,
                templateSelection: formatProductSelection,
                escapeMarkup: function(markup) {
                    return markup;
                }
            });
            
            console.log('✅ Product Select2 initialisé avec succès');
            
            // Forcer le re-rendu
            jQuery(productSelect).trigger('change');
            
            // Vérifier que le conteneur Select2 est visible
            const select2Container = jQuery(productSelect).next('.select2-container');
            if (select2Container.length) {
                select2Container.css({
                    'display': 'block',
                    'width': '100%',
                    'visibility': 'visible',
                    'opacity': '1'
                });
                console.log('✅ Conteneur Select2 visible');
            } else {
                console.warn('⚠️ Conteneur Select2 non trouvé');
            }
        }, 200);
        
        // Événement de sélection
        jQuery(productSelect).on('select2:select', function(e) {
            console.log('🖱️ Produit sélectionné:', e.params.data);
            const data = e.params.data;
            const element = data.element;
            
            if (element) {
                const product = {
                    id: element.value,
                    name: element.getAttribute('data-name') || data.text,
                    category: element.getAttribute('data-category') || 'Non catégorisé',
                    price: element.getAttribute('data-price') || 'Prix non défini',
                    stock: parseInt(element.getAttribute('data-stock') || 0),
                    prescription: element.getAttribute('data-prescription') === 'true',
                    form: element.getAttribute('data-form') || '',
                    dosage: element.getAttribute('data-dosage') || '',
                    unit: element.getAttribute('data-unit') || '',
                    description: element.getAttribute('data-description') || '',
                    barcode: element.getAttribute('data-barcode') || ''
                };
                
                showProductDetail(product);
            }
        });
    } else {
        console.warn('⚠️ Élément #productSelect non trouvé');
    }
    ";
        } else {
            // line 371
            yield "    console.log('ℹ️ Aucun produit disponible');
    ";
        }
        // line 373
        yield "});

// ============================================================ //
// 2. FONCTIONS DE FORMATAGE                                     //
// ============================================================ //
function formatProductOption(option) {
    if (!option.id) {
        return option.text;
    }

    const element = option.element;
    if (!element) {
        return option.text;
    }
    
    const productName = element.getAttribute('data-name') || option.text;
    const category = element.getAttribute('data-category') || 'Non catégorisé';
    const price = element.getAttribute('data-price') || 'Prix non défini';
    const prescription = element.getAttribute('data-prescription') === 'true';
    const form = element.getAttribute('data-form') || '';
    const dosage = element.getAttribute('data-dosage') || '';
    const unit = element.getAttribute('data-unit') || '';

    let metaParts = [];
    if (form) metaParts.push(form);
    if (dosage) metaParts.push(dosage);
    if (unit) metaParts.push(unit);
    const metaText = metaParts.length > 0 ? ` - \${metaParts.join(' · ')}` : '';

    let html = `
        <div class=\"product-info\">
            <div>
                <span class=\"product-name\">\${productName}</span>
                <span class=\"product-meta\">\${category}\${metaText}</span>
                \${prescription ? '<span class=\"prescription-badge\"><i class=\"fas fa-prescription-bottle\"></i> Ordonnance</span>' : ''}
            </div>
            <span class=\"product-price\">\${price}</span>
        </div>
    `;

    return jQuery(html);
}

function formatProductSelection(option) {
    if (!option.id) {
        return option.text;
    }

    const element = option.element;
    if (!element) {
        return option.text;
    }
    
    const productName = element.getAttribute('data-name') || option.text;
    const price = element.getAttribute('data-price') || '';
    const prescription = element.getAttribute('data-prescription') === 'true';

    let html = `
        <div class=\"d-flex justify-content-between align-items-center w-100\">
            <span>
                <i class=\"fas fa-box me-2 text-primary\"></i>
                \${productName}
                \${prescription ? '<span class=\"badge bg-warning ms-1\"><i class=\"fas fa-prescription-bottle\"></i></span>' : ''}
            </span>
            <span class=\"text-primary fw-bold\">\${price}</span>
        </div>
    `;

    return jQuery(html);
}

// ============================================================ //
// 3. AFFICHAGE DU DÉTAIL DU PRODUIT AVEC STATUT                //
// ============================================================ //
function showProductDetail(product) {
    console.log('📦 Affichage du détail du produit:', product);
    
    const body = document.getElementById('productDetailBody');
    const title = document.getElementById('productDetailTitle');
    
    if (!body || !title) {
        console.error('❌ Éléments de la modale non trouvés');
        return;
    }
    
    title.textContent = product.name || 'Détail du produit';
    
    // ✅ Déterminer le statut du stock
    const stock = product.stock || 0;
    const isInStock = stock > 0;
    const statusClass = isInStock ? 'in-stock' : 'out-of-stock';
    const statusIcon = isInStock ? 'fa-check-circle' : 'fa-times-circle';
    const statusText = isInStock ? 'Disponible' : 'Non disponible';
    
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
                            <p class=\"h3 text-primary mb-0\">\${product.price}</p>
                        </div>

                        <!-- ✅ STATUT DU PRODUIT -->
                        <div class=\"mb-3\">
                            <h6 class=\"text-muted\">Disponibilité</h6>
                            <span class=\"product-status \${statusClass}\">
                                <i class=\"fas \${statusIcon}\"></i> \${statusText}
                            </span>
                        </div>

                        \${product.prescription ? `
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
    
    const modalElement = document.getElementById('productDetailModal');
    if (modalElement) {
        const modal = new bootstrap.Modal(modalElement);
        modal.show();
        console.log('✅ Modale ouverte');
    } else {
        console.error('❌ Élément #productDetailModal non trouvé');
    }
}
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/pharmacy/_product_mode.html.twig";
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
        return array (  512 => 373,  508 => 371,  416 => 282,  410 => 278,  408 => 277,  398 => 269,  388 => 261,  380 => 252,  378 => 251,  377 => 250,  376 => 248,  368 => 242,  366 => 241,  345 => 219,  343 => 218,  341 => 217,  337 => 214,  329 => 208,  325 => 206,  318 => 204,  311 => 203,  306 => 202,  302 => 201,  298 => 200,  294 => 199,  290 => 198,  286 => 197,  282 => 196,  278 => 195,  274 => 194,  270 => 193,  266 => 192,  262 => 191,  257 => 190,  253 => 189,  249 => 187,  247 => 186,  241 => 183,  236 => 180,  234 => 179,  232 => 178,  228 => 175,  226 => 174,  225 => 173,  224 => 172,  223 => 171,  222 => 170,  221 => 169,  220 => 168,  219 => 167,  218 => 166,  217 => 165,  215 => 164,  213 => 163,  211 => 162,  204 => 156,  202 => 155,  201 => 154,  200 => 152,  194 => 149,  189 => 147,  181 => 141,  179 => 140,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/_product_mode.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_product_mode.html.twig");
    }
}
