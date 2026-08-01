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
class __TwigTemplate_324ef013517606f98d2771d37560121c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/pharmacy/_product_filters.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/pharmacy/_product_filters.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 193, $this->source); })()), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"city\" value=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 194, $this->source); })()), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"pharmacy\" value=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 195, $this->source); })()), "html", null, true);
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 205, $this->source); })())) > 0)) {
            // line 206
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 206, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 207
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 207), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 207) == (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 207, $this->source); })()))) {
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("forms", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 229, $this->source); })()), [])) : ([]))) > 0)) {
            // line 230
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 230, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                // line 231
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form"], "html", null, true);
                yield "\" ";
                if (((isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 231, $this->source); })()) == $context["form"])) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("selectedDosage", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 248, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
        </div>

        ";
        // line 252
        yield "        <div class=\"filter-item\" style=\"min-width: 150px; flex: 0.5;\">
            <div class=\"prescription-check\">
                <input type=\"checkbox\" name=\"prescription_required\" id=\"prescriptionCheck\" 
                       value=\"1\" ";
        // line 255
        yield ((((isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 255, $this->source); })()) == "1")) ? ("checked") : (""));
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
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 269, $this->source); })()), "city" =>         // line 270
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 270, $this->source); })()), "pharmacy" =>         // line 271
(isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 271, $this->source); })())]), "html", null, true);
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
        if ((($tmp = ((array_key_exists("filterApplied", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filterApplied"]) || array_key_exists("filterApplied", $context) ? $context["filterApplied"] : (function () { throw new RuntimeError('Variable "filterApplied" does not exist.', 280, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        $context["hasActiveFilters"] = ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 288, $this->source); })()) || (isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 288, $this->source); })())) || (isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 288, $this->source); })())) ||  !(null === (isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 288, $this->source); })())));
        // line 289
        yield "    ";
        if ((($tmp = (isset($context["hasActiveFilters"]) || array_key_exists("hasActiveFilters", $context) ? $context["hasActiveFilters"] : (function () { throw new RuntimeError('Variable "hasActiveFilters" does not exist.', 289, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 290
            yield "        <div class=\"active-filters\">
            <span class=\"text-muted\" style=\"font-size: 0.85rem; font-weight: 500;\">Filtres actifs :</span>
            
            ";
            // line 293
            if ((($tmp = (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 293, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 294
                yield "                ";
                $context["categoryName"] = "";
                // line 295
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 295, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 296
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 296) == (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 296, $this->source); })()))) {
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoryName"]) || array_key_exists("categoryName", $context) ? $context["categoryName"] : (function () { throw new RuntimeError('Variable "categoryName" does not exist.', 301, $this->source); })()), "html", null, true);
                yield "
                    <a href=\"";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 304
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 304, $this->source); })()), "city" =>                 // line 305
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 305, $this->source); })()), "pharmacy" =>                 // line 306
(isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 306, $this->source); })()), "form" =>                 // line 307
(isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 307, $this->source); })()), "dosage" =>                 // line 308
(isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 308, $this->source); })()), "prescription_required" =>                 // line 309
(isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 309, $this->source); })()), "filter_applied" => 1]), "html", null, true);
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
            if ((($tmp = (isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 317, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 318
                yield "                <span class=\"filter-tag\">
                    <i class=\"fas fa-capsules\"></i> ";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 319, $this->source); })()), "html", null, true);
                yield "
                    <a href=\"";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 322
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 322, $this->source); })()), "city" =>                 // line 323
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 323, $this->source); })()), "pharmacy" =>                 // line 324
(isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 324, $this->source); })()), "category" =>                 // line 325
(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 325, $this->source); })()), "dosage" =>                 // line 326
(isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 326, $this->source); })()), "prescription_required" =>                 // line 327
(isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 327, $this->source); })()), "filter_applied" => 1]), "html", null, true);
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
            if ((($tmp = (isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 335, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 336
                yield "                <span class=\"filter-tag\">
                    <i class=\"fas fa-weight\"></i> ";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 337, $this->source); })()), "html", null, true);
                yield "
                    <a href=\"";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 340
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 340, $this->source); })()), "city" =>                 // line 341
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 341, $this->source); })()), "pharmacy" =>                 // line 342
(isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 342, $this->source); })()), "category" =>                 // line 343
(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 343, $this->source); })()), "form" =>                 // line 344
(isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 344, $this->source); })()), "prescription_required" =>                 // line 345
(isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 345, $this->source); })()), "filter_applied" => 1]), "html", null, true);
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
            if (((isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 353, $this->source); })()) == "1")) {
                // line 354
                yield "                <span class=\"filter-tag\">
                    <i class=\"fas fa-prescription-bottle\"></i> Ordonnance requise
                    <a href=\"";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 358
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 358, $this->source); })()), "city" =>                 // line 359
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 359, $this->source); })()), "pharmacy" =>                 // line 360
(isset($context["selectedPharmacy"]) || array_key_exists("selectedPharmacy", $context) ? $context["selectedPharmacy"] : (function () { throw new RuntimeError('Variable "selectedPharmacy" does not exist.', 360, $this->source); })()), "category" =>                 // line 361
(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 361, $this->source); })()), "form" =>                 // line 362
(isset($context["selectedForm"]) || array_key_exists("selectedForm", $context) ? $context["selectedForm"] : (function () { throw new RuntimeError('Variable "selectedForm" does not exist.', 362, $this->source); })()), "dosage" =>                 // line 363
(isset($context["selectedDosage"]) || array_key_exists("selectedDosage", $context) ? $context["selectedDosage"] : (function () { throw new RuntimeError('Variable "selectedDosage" does not exist.', 363, $this->source); })()), "filter_applied" => 1]), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  571 => 372,  567 => 370,  560 => 365,  558 => 363,  557 => 362,  556 => 361,  555 => 360,  554 => 359,  553 => 358,  552 => 356,  548 => 354,  546 => 353,  543 => 352,  536 => 347,  534 => 345,  533 => 344,  532 => 343,  531 => 342,  530 => 341,  529 => 340,  528 => 338,  524 => 337,  521 => 336,  519 => 335,  516 => 334,  509 => 329,  507 => 327,  506 => 326,  505 => 325,  504 => 324,  503 => 323,  502 => 322,  501 => 320,  497 => 319,  494 => 318,  492 => 317,  489 => 316,  482 => 311,  480 => 309,  479 => 308,  478 => 307,  477 => 306,  476 => 305,  475 => 304,  474 => 302,  470 => 301,  467 => 300,  461 => 299,  458 => 298,  455 => 297,  452 => 296,  447 => 295,  444 => 294,  442 => 293,  437 => 290,  434 => 289,  431 => 288,  427 => 285,  423 => 283,  419 => 281,  417 => 280,  414 => 279,  406 => 272,  404 => 271,  403 => 270,  402 => 269,  401 => 267,  395 => 263,  385 => 255,  380 => 252,  374 => 248,  366 => 242,  361 => 238,  357 => 236,  354 => 235,  345 => 232,  336 => 231,  331 => 230,  329 => 229,  321 => 223,  316 => 219,  312 => 217,  309 => 216,  300 => 213,  295 => 212,  290 => 211,  283 => 209,  279 => 208,  270 => 207,  265 => 206,  263 => 205,  255 => 199,  249 => 195,  245 => 194,  241 => 193,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/pharmacy/_product_filters.html.twig #}

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
        <input type=\"hidden\" name=\"country\" value=\"{{ selectedCountry }}\">
        <input type=\"hidden\" name=\"city\" value=\"{{ selectedCity }}\">
        <input type=\"hidden\" name=\"pharmacy\" value=\"{{ selectedPharmacy }}\">
        <input type=\"hidden\" name=\"filter_applied\" value=\"1\">

        {# Catégorie #}
        <div class=\"filter-item\">
            <label for=\"categorySelect\">
                <i class=\"fas fa-tags text-primary me-1\"></i> Catégorie
            </label>
            <select name=\"category\" id=\"categorySelect\" class=\"form-select select2-category\">
                <option value=\"\">Toutes les catégories</option>
                {% if categories|length > 0 %}
                    {% for category in categories %}
                        <option value=\"{{ category.id }}\" {% if category.id == selectedCategory %}selected{% endif %}>
                            {% for i in 0..category.level %}
                                &nbsp;&nbsp;
                            {% endfor %}
                            {% if category.level > 0 %}↳{% endif %}
                            {{ category.name }}
                            <span class=\"text-muted\">({{ category.productCount }})</span>
                        </option>
                    {% endfor %}
                {% else %}
                    <option value=\"\" disabled>Aucune catégorie disponible</option>
                {% endif %}
            </select>
        </div>

        {# Forme #}
        <div class=\"filter-item\">
            <label for=\"formSelect\">
                <i class=\"fas fa-capsules text-primary me-1\"></i> Forme
            </label>
            <select name=\"form\" id=\"formSelect\" class=\"form-select\">
                <option value=\"\">Toutes les formes</option>
                {% if forms|default([])|length > 0 %}
                    {% for form in forms %}
                        <option value=\"{{ form }}\" {% if selectedForm == form %}selected{% endif %}>
                            {{ form }}
                        </option>
                    {% endfor %}
                {% else %}
                    <option value=\"\" disabled>Aucune forme disponible</option>
                {% endif %}
            </select>
        </div>

        {# Dosage #}
        <div class=\"filter-item\">
            <label for=\"dosageInput\">
                <i class=\"fas fa-weight text-primary me-1\"></i> Dosage
            </label>
            <input type=\"text\" name=\"dosage\" id=\"dosageInput\" class=\"form-control\" 
                   placeholder=\"ex: 500mg, 10ml, 5g...\" 
                   value=\"{{ selectedDosage|default('') }}\">
        </div>

        {# Prescription #}
        <div class=\"filter-item\" style=\"min-width: 150px; flex: 0.5;\">
            <div class=\"prescription-check\">
                <input type=\"checkbox\" name=\"prescription_required\" id=\"prescriptionCheck\" 
                       value=\"1\" {{ prescriptionRequired == '1' ? 'checked' : '' }}>
                <label for=\"prescriptionCheck\">
                    <i class=\"fas fa-prescription-bottle\"></i> Ordonnance
                </label>
            </div>
        </div>

        {# Actions #}
        <div class=\"filter-actions\">
            <button type=\"submit\" class=\"btn btn-primary\" id=\"filterButton\">
                <i class=\"fas fa-filter\"></i> Filtrer
            </button>
            <a href=\"{{ path('marketplace_pharmacy_search', {
                mode: 'product', 
                country: selectedCountry, 
                city: selectedCity, 
                pharmacy: selectedPharmacy
            }) }}\" class=\"btn btn-outline-secondary\" id=\"clearFiltersButton\">
                <i class=\"fas fa-eraser\"></i> Effacer
            </a>
        </div>
    </form>

    {# Statut des filtres #}
    <div class=\"filter-status\">
        {% if filterApplied|default(false) %}
            <span class=\"applied\"><i class=\"fas fa-check-circle\"></i> Filtres appliqués</span>
        {% else %}
            <span><i class=\"fas fa-info-circle\"></i> Tous les produits sont affichés</span>
        {% endif %}
    </div>

    {# Filtres actifs #}
    {% set hasActiveFilters = selectedCategory or selectedForm or selectedDosage or prescriptionRequired is not null %}
    {% if hasActiveFilters %}
        <div class=\"active-filters\">
            <span class=\"text-muted\" style=\"font-size: 0.85rem; font-weight: 500;\">Filtres actifs :</span>
            
            {% if selectedCategory %}
                {% set categoryName = '' %}
                {% for cat in categories %}
                    {% if cat.id == selectedCategory %}
                        {% set categoryName = cat.name %}
                    {% endif %}
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
                    }) }}\" class=\"remove-filter\" title=\"Supprimer ce filtre\">
                        <i class=\"fas fa-times\"></i>
                    </a>
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
                    }) }}\" class=\"remove-filter\" title=\"Supprimer ce filtre\">
                        <i class=\"fas fa-times\"></i>
                    </a>
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
                    }) }}\" class=\"remove-filter\" title=\"Supprimer ce filtre\">
                        <i class=\"fas fa-times\"></i>
                    </a>
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
                    }) }}\" class=\"remove-filter\" title=\"Supprimer ce filtre\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </span>
            {% endif %}
        </div>
    {% endif %}
</div>

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
</script>", "marketplace/pharmacy/_product_filters.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_product_filters.html.twig");
    }
}
