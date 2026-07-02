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

/* marketplace/pharmacy/_product_filters.html.twig */
class __TwigTemplate_c51deb02e788762d96f2d2610b1041e5 extends Template
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

    .product-filters-container .filter-item {
        flex: 1;
        min-width: 180px;
    }

    .filter-item label {
        font-weight: 600;
        font-size: 0.85rem;
        margin-bottom: 0.3rem;
        display: block;
        color: var(--dark-color);
    }

    .filter-item label i {
        color: var(--primary-color);
    }

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

    .filter-item .form-control::placeholder {
        color: #94a3b8;
        font-size: 0.9rem;
    }

    .filter-actions {
        display: flex;
        gap: 0.75rem;
        align-items: flex-end;
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
        border-radius: 4px;
        border: 2px solid var(--gray-300);
        transition: all 0.2s ease;
    }

    .prescription-check input[type=\"checkbox\"]:checked {
        border-color: var(--primary-color);
    }

    .prescription-check label {
        cursor: pointer;
        font-weight: 500;
        margin-bottom: 0;
        color: var(--dark-color);
    }

    .prescription-check label i {
        color: #f59e0b;
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

    .active-filters .filter-tag .remove-filter:hover {
        opacity: 1;
    }

    .filter-status {
        margin-top: 0.5rem;
        font-size: 0.85rem;
        color: var(--gray-500);
    }

    .filter-status .applied {
        color: var(--primary-color);
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .product-filters-container { padding: 1rem; }
        .product-filters-container .filter-group { flex-direction: column; }
        .filter-item { min-width: 100%; }
        .filter-actions { width: 100%; }
        .filter-actions .btn { flex: 1; justify-content: center; }
        .prescription-check { height: auto; padding-top: 0; }
    }
</style>

<div class=\"product-filters-container\">
    <form method=\"get\" id=\"productFilterForm\" class=\"filter-group\">
        <input type=\"hidden\" name=\"mode\" value=\"product\">
        <input type=\"hidden\" name=\"country\" value=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCountry"] ?? null), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"city\" value=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCity"] ?? null), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"pharmacy\" value=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedPharmacy"] ?? null), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"filter_applied\" value=\"1\">

        ";
        // line 199
        yield "        <div class=\"filter-item\">
            <label for=\"categorySelect\">
                <i class=\"fas fa-tags text-primary me-1\"></i> Catégorie
            </label>
            <select name=\"category\" id=\"categorySelect\" class=\"form-select select2-category\">
                <option value=\"\">Toutes les catégories</option>
                ";
        // line 205
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) > 0)) {
            // line 206
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 207
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 207), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 207) == ($context["selectedCategory"] ?? null))) {
                    yield "selected";
                }
                yield ">
                            ";
                // line 208
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 208)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 209
                    yield "                                &nbsp;&nbsp;
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 211) > 0)) {
                    yield "↳";
                }
                // line 212
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 212), "html", null, true);
                yield "
                            <span class=\"text-muted\">(";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 213), "html", null, true);
                yield ")</span>
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            yield "                ";
        } else {
            // line 217
            yield "                    <option value=\"\" disabled>Aucune catégorie disponible</option>
                ";
        }
        // line 219
        yield "            </select>
        </div>

        ";
        // line 223
        yield "        <div class=\"filter-item\">
            <label for=\"formSelect\">
                <i class=\"fas fa-capsules text-primary me-1\"></i> Forme
            </label>
            <select name=\"form\" id=\"formSelect\" class=\"form-select\">
                <option value=\"\">Toutes les formes</option>
                ";
        // line 229
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("forms", $context)) ? (Twig\Extension\CoreExtension::default(($context["forms"] ?? null), [])) : ([]))) > 0)) {
            // line 230
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["forms"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                // line 231
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form"], "html", null, true);
                yield "\" ";
                if ((($context["selectedForm"] ?? null) == $context["form"])) {
                    yield "selected";
                }
                yield ">
                            ";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form"], "html", null, true);
                yield "
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['form'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            yield "                ";
        } else {
            // line 236
            yield "                    <option value=\"\" disabled>Aucune forme disponible</option>
                ";
        }
        // line 238
        yield "            </select>
        </div>

        ";
        // line 242
        yield "        <div class=\"filter-item\">
            <label for=\"dosageInput\">
                <i class=\"fas fa-weight text-primary me-1\"></i> Dosage
            </label>
            <input type=\"text\" name=\"dosage\" id=\"dosageInput\" class=\"form-control\" 
                   placeholder=\"ex: 500mg, 10ml, 5g...\" 
                   value=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("selectedDosage", $context)) ? (Twig\Extension\CoreExtension::default(($context["selectedDosage"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
        </div>

        ";
        // line 252
        yield "        <div class=\"filter-item\" style=\"min-width: 150px; flex: 0.5;\">
            <div class=\"prescription-check\">
                <input type=\"checkbox\" name=\"prescription_required\" id=\"prescriptionCheck\" 
                       value=\"1\" ";
        // line 255
        yield (((($context["prescriptionRequired"] ?? null) == "1")) ? ("checked") : (""));
        yield ">
                <label for=\"prescriptionCheck\">
                    <i class=\"fas fa-prescription-bottle\"></i> Ordonnance
                </label>
            </div>
        </div>

        ";
        // line 263
        yield "        <div class=\"filter-actions\">
            <button type=\"submit\" class=\"btn btn-primary\" id=\"filterButton\">
                <i class=\"fas fa-filter\"></i> Filtrer
            </button>
            <a href=\"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>         // line 269
($context["selectedCountry"] ?? null), "city" =>         // line 270
($context["selectedCity"] ?? null), "pharmacy" =>         // line 271
($context["selectedPharmacy"] ?? null)]), "html", null, true);
        // line 272
        yield "\" class=\"btn btn-outline-secondary\" id=\"clearFiltersButton\">
                <i class=\"fas fa-eraser\"></i> Effacer
            </a>
        </div>
    </form>

    ";
        // line 279
        yield "    <div class=\"filter-status\">
        ";
        // line 280
        if ((($tmp = ((array_key_exists("filterApplied", $context)) ? (Twig\Extension\CoreExtension::default(($context["filterApplied"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "            <span class=\"applied\"><i class=\"fas fa-check-circle\"></i> Filtres appliqués</span>
        ";
        } else {
            // line 283
            yield "            <span><i class=\"fas fa-info-circle\"></i> Tous les produits sont affichés</span>
        ";
        }
        // line 285
        yield "    </div>

    ";
        // line 288
        yield "    ";
        $context["hasActiveFilters"] = (((($context["selectedCategory"] ?? null) || ($context["selectedForm"] ?? null)) || ($context["selectedDosage"] ?? null)) ||  !(null === ($context["prescriptionRequired"] ?? null)));
        // line 289
        yield "    ";
        if ((($tmp = ($context["hasActiveFilters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 290
            yield "        <div class=\"active-filters\">
            <span class=\"text-muted\" style=\"font-size: 0.85rem; font-weight: 500;\">Filtres actifs :</span>
            
            ";
            // line 293
            if ((($tmp = ($context["selectedCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 294
                yield "                ";
                $context["categoryName"] = "";
                // line 295
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 296
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 296) == ($context["selectedCategory"] ?? null))) {
                        // line 297
                        yield "                        ";
                        $context["categoryName"] = CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 297);
                        // line 298
                        yield "                    ";
                    }
                    // line 299
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 300
                yield "                <span class=\"filter-tag\">
                    <i class=\"fas fa-tag\"></i> ";
                // line 301
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["categoryName"] ?? null), "html", null, true);
                yield "
                    <a href=\"";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 304
($context["selectedCountry"] ?? null), "city" =>                 // line 305
($context["selectedCity"] ?? null), "pharmacy" =>                 // line 306
($context["selectedPharmacy"] ?? null), "form" =>                 // line 307
($context["selectedForm"] ?? null), "dosage" =>                 // line 308
($context["selectedDosage"] ?? null), "prescription_required" =>                 // line 309
($context["prescriptionRequired"] ?? null), "filter_applied" => 1]), "html", null, true);
                // line 311
                yield "\" class=\"remove-filter\" title=\"Supprimer ce filtre\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </span>
            ";
            }
            // line 316
            yield "
            ";
            // line 317
            if ((($tmp = ($context["selectedForm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 318
                yield "                <span class=\"filter-tag\">
                    <i class=\"fas fa-capsules\"></i> ";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedForm"] ?? null), "html", null, true);
                yield "
                    <a href=\"";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 322
($context["selectedCountry"] ?? null), "city" =>                 // line 323
($context["selectedCity"] ?? null), "pharmacy" =>                 // line 324
($context["selectedPharmacy"] ?? null), "category" =>                 // line 325
($context["selectedCategory"] ?? null), "dosage" =>                 // line 326
($context["selectedDosage"] ?? null), "prescription_required" =>                 // line 327
($context["prescriptionRequired"] ?? null), "filter_applied" => 1]), "html", null, true);
                // line 329
                yield "\" class=\"remove-filter\" title=\"Supprimer ce filtre\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </span>
            ";
            }
            // line 334
            yield "
            ";
            // line 335
            if ((($tmp = ($context["selectedDosage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 336
                yield "                <span class=\"filter-tag\">
                    <i class=\"fas fa-weight\"></i> ";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedDosage"] ?? null), "html", null, true);
                yield "
                    <a href=\"";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 340
($context["selectedCountry"] ?? null), "city" =>                 // line 341
($context["selectedCity"] ?? null), "pharmacy" =>                 // line 342
($context["selectedPharmacy"] ?? null), "category" =>                 // line 343
($context["selectedCategory"] ?? null), "form" =>                 // line 344
($context["selectedForm"] ?? null), "prescription_required" =>                 // line 345
($context["prescriptionRequired"] ?? null), "filter_applied" => 1]), "html", null, true);
                // line 347
                yield "\" class=\"remove-filter\" title=\"Supprimer ce filtre\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </span>
            ";
            }
            // line 352
            yield "
            ";
            // line 353
            if ((($context["prescriptionRequired"] ?? null) == "1")) {
                // line 354
                yield "                <span class=\"filter-tag\">
                    <i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise
                    <a href=\"";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 358
($context["selectedCountry"] ?? null), "city" =>                 // line 359
($context["selectedCity"] ?? null), "pharmacy" =>                 // line 360
($context["selectedPharmacy"] ?? null), "category" =>                 // line 361
($context["selectedCategory"] ?? null), "form" =>                 // line 362
($context["selectedForm"] ?? null), "dosage" =>                 // line 363
($context["selectedDosage"] ?? null), "filter_applied" => 1]), "html", null, true);
                // line 365
                yield "\" class=\"remove-filter\" title=\"Supprimer ce filtre\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </span>
            ";
            }
            // line 370
            yield "        </div>
    ";
        }
        // line 372
        yield "</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('=== INITIALISATION PRODUCT FILTERS ===');
    
    const categorySelect = document.getElementById('categorySelect');
    if (categorySelect) {
        console.log('✅ Category select trouvé, ID:', categorySelect.id);
        console.log('📊 Nombre d\\'options de catégories:', categorySelect.options.length);
        
        // Afficher les options dans la console
        for (let i = 0; i < categorySelect.options.length; i++) {
            console.log(`  Option \${i}:`, categorySelect.options[i].value, categorySelect.options[i].text);
        }
        
        // ✅ S'assurer que le select est visible
        categorySelect.style.display = 'block';
        categorySelect.style.width = '100%';
        categorySelect.style.visibility = 'visible';
        categorySelect.style.opacity = '1';
        
        // ✅ Attendre que le DOM soit complètement chargé
        setTimeout(function() {
            if (typeof jQuery !== 'undefined' && typeof jQuery.fn.select2 !== 'undefined') {
                // Détruire toute instance existante
                if (jQuery(categorySelect).data('select2')) {
                    jQuery(categorySelect).select2('destroy');
                    console.log('🔄 Instance Select2 détruite');
                }
                
                // Initialiser Select2
                jQuery(categorySelect).select2({
                    theme: 'default',
                    width: '100%',
                    placeholder: 'Toutes les catégories',
                    allowClear: true,
                    language: 'fr'
                });
                
                console.log('✅ Category Select2 initialisé avec succès');
                
                // Forcer le re-rendu
                jQuery(categorySelect).trigger('change');
                
                // Vérifier que le conteneur Select2 est visible
                const select2Container = jQuery(categorySelect).next('.select2-container');
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
            } else {
                console.error('❌ jQuery ou Select2 non disponibles');
            }
        }, 200);
    } else {
        console.warn('⚠️ Élément #categorySelect non trouvé');
    }
});
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/pharmacy/_product_filters.html.twig";
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
        return array (  565 => 372,  561 => 370,  554 => 365,  552 => 363,  551 => 362,  550 => 361,  549 => 360,  548 => 359,  547 => 358,  546 => 356,  542 => 354,  540 => 353,  537 => 352,  530 => 347,  528 => 345,  527 => 344,  526 => 343,  525 => 342,  524 => 341,  523 => 340,  522 => 338,  518 => 337,  515 => 336,  513 => 335,  510 => 334,  503 => 329,  501 => 327,  500 => 326,  499 => 325,  498 => 324,  497 => 323,  496 => 322,  495 => 320,  491 => 319,  488 => 318,  486 => 317,  483 => 316,  476 => 311,  474 => 309,  473 => 308,  472 => 307,  471 => 306,  470 => 305,  469 => 304,  468 => 302,  464 => 301,  461 => 300,  455 => 299,  452 => 298,  449 => 297,  446 => 296,  441 => 295,  438 => 294,  436 => 293,  431 => 290,  428 => 289,  425 => 288,  421 => 285,  417 => 283,  413 => 281,  411 => 280,  408 => 279,  400 => 272,  398 => 271,  397 => 270,  396 => 269,  395 => 267,  389 => 263,  379 => 255,  374 => 252,  368 => 248,  360 => 242,  355 => 238,  351 => 236,  348 => 235,  339 => 232,  330 => 231,  325 => 230,  323 => 229,  315 => 223,  310 => 219,  306 => 217,  303 => 216,  294 => 213,  289 => 212,  284 => 211,  277 => 209,  273 => 208,  264 => 207,  259 => 206,  257 => 205,  249 => 199,  243 => 195,  239 => 194,  235 => 193,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/_product_filters.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_product_filters.html.twig");
    }
}
