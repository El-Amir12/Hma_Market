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

/* marketplace/pharmacy/_pharmacy_list.html.twig */
class __TwigTemplate_c95723c20e817666d9945558526444bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/pharmacy/_pharmacy_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/pharmacy/_pharmacy_list.html.twig"));

        // line 2
        yield "
<style>
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
        cursor: pointer;
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
        background: linear-gradient(90deg, var(--primary-color), #667eea);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .pharmacy-card:hover::before {
        opacity: 1;
    }

    .pharmacy-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        border-color: var(--primary-color);
    }

    .pharmacy-card .pharmacy-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        background: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--primary-color);
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

    .pharmacy-card .pharmacy-address i {
        width: 18px;
        color: #94a3b8;
    }

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
        background: var(--gray-200);
        color: var(--gray-500);
        font-weight: 600;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        font-size: 0.85rem;
    }

    .section-title i {
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

    .empty-state .btn-primary {
        border-radius: 50px;
        padding: 0.6rem 2rem;
    }

    @media (max-width: 768px) {
        .pharmacy-grid { grid-template-columns: 1fr; }
        .pharmacy-card .pharmacy-actions { flex-direction: column; }
        .pharmacy-card .pharmacy-actions .btn-sm { width: 100%; text-align: center; }
        .pagination-container .page-link { padding: 0.4rem 0.8rem; font-size: 0.85rem; }
    }
</style>

";
        // line 214
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 214, $this->source); })())) > 0)) {
            // line 215
            yield "    <div class=\"section-title\">
        <i class=\"fas fa-store me-2\"></i>
        Pharmacies à <span class=\"text-primary\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 217, $this->source); })()), "html", null, true);
            yield "</span>
        <span class=\"badge-count\">
            ";
            // line 219
            if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 219, $this->source); })()), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 220
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPharmacies"]) || array_key_exists("totalPharmacies", $context) ? $context["totalPharmacies"] : (function () { throw new RuntimeError('Variable "totalPharmacies" does not exist.', 220, $this->source); })()), "html", null, true);
                yield " résultat(s) pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 220, $this->source); })()), "html", null, true);
                yield "\"
            ";
            } else {
                // line 222
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPharmacies"]) || array_key_exists("totalPharmacies", $context) ? $context["totalPharmacies"] : (function () { throw new RuntimeError('Variable "totalPharmacies" does not exist.', 222, $this->source); })()), "html", null, true);
                yield " pharmacie(s)
            ";
            }
            // line 224
            yield "        </span>
    </div>

    <div class=\"pharmacy-grid\">
        ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 228, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pharmacy"]) {
                // line 229
                yield "            <div class=\"pharmacy-card\">
                <div class=\"d-flex gap-3 align-items-start\">
                    <div class=\"pharmacy-icon\">
                        <i class=\"fas fa-hospital\"></i>
                    </div>
                    <div class=\"flex-grow-1\">
                        <div class=\"pharmacy-name\">";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "name", [], "any", false, false, false, 235), "html", null, true);
                yield "</div>
                        <div class=\"pharmacy-address\">
                            <i class=\"fas fa-map-marker-alt\"></i> ";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "address", [], "any", false, false, false, 237), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "city", [], "any", false, false, false, 237), "html", null, true);
                yield "
                        </div>
                        ";
                // line 239
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "phone", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 240
                    yield "                            <div class=\"pharmacy-address\">
                                <i class=\"fas fa-phone\"></i> ";
                    // line 241
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "phone", [], "any", false, false, false, 241), "html", null, true);
                    yield "
                            </div>
                        ";
                }
                // line 244
                yield "                        <div class=\"mt-2\">
                            <span class=\"guard-badge\">
                                <i class=\"fas fa-clock\"></i> Garde 24/7
                            </span>
                        </div>
                        <div class=\"pharmacy-actions\">
                            <a href=\"";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                 // line 252
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 252, $this->source); })()), "city" =>                 // line 253
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 253, $this->source); })()), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                 // line 254
$context["pharmacy"], "id", [], "any", false, false, false, 254), "search_pharmacy" => ((                // line 255
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 255, $this->source); })()), "")) : (""))]), "html", null, true);
                // line 256
                yield "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fas fa-info-circle me-1\"></i> Détails
                            </a>
                            <a href=\"";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 261
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 261, $this->source); })()), "city" =>                 // line 262
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 262, $this->source); })()), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                 // line 263
$context["pharmacy"], "id", [], "any", false, false, false, 263)]), "html", null, true);
                // line 264
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
            // line 272
            yield "    </div>

    ";
            // line 275
            yield "    ";
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 275, $this->source); })()) > 1)) {
                // line 276
                yield "        <div class=\"pagination-container\">
            ";
                // line 277
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 277, $this->source); })()) > 1)) {
                    // line 278
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 280
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 280, $this->source); })()), "city" =>                     // line 281
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 281, $this->source); })()), "page" => (                    // line 282
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 282, $this->source); })()) - 1), "search_pharmacy" => ((                    // line 283
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 283, $this->source); })()), "")) : (""))]), "html", null, true);
                    // line 284
                    yield "\" class=\"page-link\">
                    <i class=\"fas fa-chevron-left\"></i>
                </a>
            ";
                } else {
                    // line 288
                    yield "                <span class=\"page-link disabled\">
                    <i class=\"fas fa-chevron-left\"></i>
                </span>
            ";
                }
                // line 292
                yield "
            ";
                // line 293
                $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 293, $this->source); })()) - 2));
                // line 294
                yield "            ";
                $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 294, $this->source); })()), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 294, $this->source); })()) + 2));
                // line 295
                yield "            
            ";
                // line 296
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 296, $this->source); })()) > 1)) {
                    // line 297
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 299
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 299, $this->source); })()), "city" =>                     // line 300
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 300, $this->source); })()), "page" => 1, "search_pharmacy" => ((                    // line 302
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 302, $this->source); })()), "")) : (""))]), "html", null, true);
                    // line 303
                    yield "\" class=\"page-link\">1</a>
                ";
                    // line 304
                    if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 304, $this->source); })()) > 2)) {
                        // line 305
                        yield "                    <span class=\"page-link disabled\">…</span>
                ";
                    }
                    // line 307
                    yield "            ";
                }
                // line 308
                yield "
            ";
                // line 309
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 309, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 309, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 310
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 312
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 312, $this->source); })()), "city" =>                     // line 313
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 313, $this->source); })()), "page" =>                     // line 314
$context["page"], "search_pharmacy" => ((                    // line 315
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 315, $this->source); })()), "")) : (""))]), "html", null, true);
                    // line 316
                    yield "\" class=\"page-link ";
                    yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 316, $this->source); })()))) ? ("active") : (""));
                    yield "\">
                    ";
                    // line 317
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                </a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 320
                yield "
            ";
                // line 321
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 321, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 321, $this->source); })()))) {
                    // line 322
                    yield "                ";
                    if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 322, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 322, $this->source); })()) - 1))) {
                        // line 323
                        yield "                    <span class=\"page-link disabled\">…</span>
                ";
                    }
                    // line 325
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 327
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 327, $this->source); })()), "city" =>                     // line 328
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 328, $this->source); })()), "page" =>                     // line 329
(isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 329, $this->source); })()), "search_pharmacy" => ((                    // line 330
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 330, $this->source); })()), "")) : (""))]), "html", null, true);
                    // line 331
                    yield "\" class=\"page-link\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 331, $this->source); })()), "html", null, true);
                    yield "</a>
            ";
                }
                // line 333
                yield "
            ";
                // line 334
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 334, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 334, $this->source); })()))) {
                    // line 335
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 337
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 337, $this->source); })()), "city" =>                     // line 338
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 338, $this->source); })()), "page" => (                    // line 339
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 339, $this->source); })()) + 1), "search_pharmacy" => ((                    // line 340
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 340, $this->source); })()), "")) : (""))]), "html", null, true);
                    // line 341
                    yield "\" class=\"page-link\">
                    <i class=\"fas fa-chevron-right\"></i>
                </a>
            ";
                } else {
                    // line 345
                    yield "                <span class=\"page-link disabled\">
                    <i class=\"fas fa-chevron-right\"></i>
                </span>
            ";
                }
                // line 349
                yield "
            <span class=\"page-info\">
                Page ";
                // line 351
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 351, $this->source); })()), "html", null, true);
                yield " sur ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 351, $this->source); })()), "html", null, true);
                yield "
            </span>
        </div>
    ";
            }
            // line 355
            yield "
";
        } else {
            // line 357
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-hospital\"></i>
        <h5>Aucune pharmacie trouvée</h5>
        <p class=\"text-muted\">
            ";
            // line 361
            if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 361, $this->source); })()), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 362
                yield "                Aucune pharmacie ne correspond à \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 362, $this->source); })()), "html", null, true);
                yield "\" dans cette ville.
            ";
            } else {
                // line 364
                yield "                Aucune pharmacie disponible dans cette ville pour le moment.
            ";
            }
            // line 366
            yield "        </p>
        ";
            // line 367
            if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 367, $this->source); })()), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 368
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                 // line 370
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 370, $this->source); })()), "city" =>                 // line 371
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 371, $this->source); })())]), "html", null, true);
                // line 372
                yield "\" class=\"btn btn-primary mt-3\">
                <i class=\"fas fa-undo me-1\"></i>Voir toutes les pharmacies
            </a>
        ";
            } else {
                // line 376
                yield "            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy"]);
                yield "\" 
               class=\"btn btn-primary mt-3\">
                <i class=\"fas fa-undo me-1\"></i>Nouvelle recherche
            </a>
        ";
            }
            // line 381
            yield "    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/pharmacy/_pharmacy_list.html.twig";
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
        return array (  563 => 381,  554 => 376,  548 => 372,  546 => 371,  545 => 370,  543 => 368,  541 => 367,  538 => 366,  534 => 364,  528 => 362,  526 => 361,  520 => 357,  516 => 355,  507 => 351,  503 => 349,  497 => 345,  491 => 341,  489 => 340,  488 => 339,  487 => 338,  486 => 337,  484 => 335,  482 => 334,  479 => 333,  473 => 331,  471 => 330,  470 => 329,  469 => 328,  468 => 327,  466 => 325,  462 => 323,  459 => 322,  457 => 321,  454 => 320,  445 => 317,  440 => 316,  438 => 315,  437 => 314,  436 => 313,  435 => 312,  433 => 310,  429 => 309,  426 => 308,  423 => 307,  419 => 305,  417 => 304,  414 => 303,  412 => 302,  411 => 300,  410 => 299,  408 => 297,  406 => 296,  403 => 295,  400 => 294,  398 => 293,  395 => 292,  389 => 288,  383 => 284,  381 => 283,  380 => 282,  379 => 281,  378 => 280,  376 => 278,  374 => 277,  371 => 276,  368 => 275,  364 => 272,  351 => 264,  349 => 263,  348 => 262,  347 => 261,  346 => 259,  341 => 256,  339 => 255,  338 => 254,  337 => 253,  336 => 252,  335 => 250,  327 => 244,  321 => 241,  318 => 240,  316 => 239,  309 => 237,  304 => 235,  296 => 229,  292 => 228,  286 => 224,  280 => 222,  272 => 220,  270 => 219,  265 => 217,  261 => 215,  259 => 214,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/pharmacy/_pharmacy_list.html.twig #}

<style>
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
        cursor: pointer;
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
        background: linear-gradient(90deg, var(--primary-color), #667eea);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .pharmacy-card:hover::before {
        opacity: 1;
    }

    .pharmacy-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        border-color: var(--primary-color);
    }

    .pharmacy-card .pharmacy-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        background: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--primary-color);
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

    .pharmacy-card .pharmacy-address i {
        width: 18px;
        color: #94a3b8;
    }

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
        background: var(--gray-200);
        color: var(--gray-500);
        font-weight: 600;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        font-size: 0.85rem;
    }

    .section-title i {
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

    .empty-state .btn-primary {
        border-radius: 50px;
        padding: 0.6rem 2rem;
    }

    @media (max-width: 768px) {
        .pharmacy-grid { grid-template-columns: 1fr; }
        .pharmacy-card .pharmacy-actions { flex-direction: column; }
        .pharmacy-card .pharmacy-actions .btn-sm { width: 100%; text-align: center; }
        .pagination-container .page-link { padding: 0.4rem 0.8rem; font-size: 0.85rem; }
    }
</style>

{# ============================================================ #}
{# 1. RÉSULTATS                                                 #}
{# ============================================================ #}
{% if pharmacies|length > 0 %}
    <div class=\"section-title\">
        <i class=\"fas fa-store me-2\"></i>
        Pharmacies à <span class=\"text-primary\">{{ selectedCity }}</span>
        <span class=\"badge-count\">
            {% if searchPharmacy|default('') %}
                {{ totalPharmacies }} résultat(s) pour \"{{ searchPharmacy }}\"
            {% else %}
                {{ totalPharmacies }} pharmacie(s)
            {% endif %}
        </span>
    </div>

    <div class=\"pharmacy-grid\">
        {% for pharmacy in pharmacies %}
            <div class=\"pharmacy-card\">
                <div class=\"d-flex gap-3 align-items-start\">
                    <div class=\"pharmacy-icon\">
                        <i class=\"fas fa-hospital\"></i>
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
                            <span class=\"guard-badge\">
                                <i class=\"fas fa-clock\"></i> Garde 24/7
                            </span>
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
                <span class=\"page-link disabled\">
                    <i class=\"fas fa-chevron-left\"></i>
                </span>
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
                <span class=\"page-link disabled\">
                    <i class=\"fas fa-chevron-right\"></i>
                </span>
            {% endif %}

            <span class=\"page-info\">
                Page {{ currentPage }} sur {{ totalPages }}
            </span>
        </div>
    {% endif %}

{% else %}
    <div class=\"empty-state\">
        <i class=\"fas fa-hospital\"></i>
        <h5>Aucune pharmacie trouvée</h5>
        <p class=\"text-muted\">
            {% if searchPharmacy|default('') %}
                Aucune pharmacie ne correspond à \"{{ searchPharmacy }}\" dans cette ville.
            {% else %}
                Aucune pharmacie disponible dans cette ville pour le moment.
            {% endif %}
        </p>
        {% if searchPharmacy|default('') %}
            <a href=\"{{ path('marketplace_pharmacy_search', {
                mode: 'pharmacy', 
                country: selectedCountry, 
                city: selectedCity
            }) }}\" class=\"btn btn-primary mt-3\">
                <i class=\"fas fa-undo me-1\"></i>Voir toutes les pharmacies
            </a>
        {% else %}
            <a href=\"{{ path('marketplace_pharmacy_search', {mode: 'pharmacy'}) }}\" 
               class=\"btn btn-primary mt-3\">
                <i class=\"fas fa-undo me-1\"></i>Nouvelle recherche
            </a>
        {% endif %}
    </div>
{% endif %}", "marketplace/pharmacy/_pharmacy_list.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_pharmacy_list.html.twig");
    }
}
