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

/* marketplace/pharmacy/_pharmacy_mode.html.twig */
class __TwigTemplate_47dfd65ad6e5340fff9d07f4f3965947 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/pharmacy/_pharmacy_mode.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/pharmacy/_pharmacy_mode.html.twig"));

        // line 2
        yield "
";
        // line 3
        if ((($tmp = (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            // line 5
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_pharmacy_detail.html.twig", ["selectedPharmacyData" =>             // line 6
(isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 6, $this->source); })()), "selectedCountry" =>             // line 7
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 7, $this->source); })()), "selectedCity" =>             // line 8
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 8, $this->source); })()), "searchPharmacy" => ((            // line 9
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 9, $this->source); })()), "")) : (""))]);
            // line 10
            yield "

";
        } elseif ((        // line 12
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 12, $this->source); })()) && (isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "    ";
            // line 14
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 14, $this->source); })())) > 0)) {
                // line 15
                yield "        <div class=\"section-title\">
            <i class=\"fas fa-clock me-2\" style=\"color: var(--success-color);\"></i>
            Pharmacies de garde à <span class=\"text-primary\">";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 17, $this->source); })()), "html", null, true);
                yield "</span>
            <span class=\"badge-count\" style=\"background: #dcfce7; color: #16a34a;\">
                <i class=\"fas fa-check-circle me-1\"></i>
                ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPharmacies"]) || array_key_exists("totalPharmacies", $context) ? $context["totalPharmacies"] : (function () { throw new RuntimeError('Variable "totalPharmacies" does not exist.', 20, $this->source); })()), "html", null, true);
                yield " pharmacie(s) de garde
            </span>
        </div>

        <div class=\"pharmacy-grid\">
            ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 25, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["pharmacy"]) {
                    // line 26
                    yield "                <div class=\"pharmacy-card\">
                    <div class=\"d-flex gap-3 align-items-start\">
                        <div class=\"pharmacy-icon\" style=\"background: #dcfce7; color: #16a34a;\">
                            <i class=\"fas fa-shield-alt\"></i>
                        </div>
                        <div class=\"flex-grow-1\">
                            <div class=\"pharmacy-name\">";
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "name", [], "any", false, false, false, 32), "html", null, true);
                    yield "</div>
                            <div class=\"pharmacy-address\">
                                <i class=\"fas fa-map-marker-alt\"></i> ";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "address", [], "any", false, false, false, 34), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "city", [], "any", false, false, false, 34), "html", null, true);
                    yield "
                            </div>
                            ";
                    // line 36
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "phone", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 37
                        yield "                                <div class=\"pharmacy-address\">
                                    <i class=\"fas fa-phone\"></i> ";
                        // line 38
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "phone", [], "any", false, false, false, 38), "html", null, true);
                        yield "
                                </div>
                            ";
                    }
                    // line 41
                    yield "                            <div class=\"mt-2\">
                                <span class=\"guard-badge active\" style=\"background: #dcfce7; color: #16a34a; animation: pulse-guard 2s infinite;\">
                                    <i class=\"fas fa-clock\"></i> En garde maintenant
                                </span>
                                ";
                    // line 45
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "guardDays", [], "any", true, true, false, 45) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "guardDays", [], "any", false, false, false, 45)) > 0))) {
                        // line 46
                        yield "                                    <span class=\"text-muted ms-2\" style=\"font-size: 0.75rem;\">
                                        ";
                        // line 47
                        $context["daysList"] = [];
                        // line 48
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "guardDays", [], "any", false, false, false, 48));
                        foreach ($context['_seq'] as $context["dayKey"] => $context["dayData"]) {
                            // line 49
                            yield "                                            ";
                            $context["daysList"] = Twig\Extension\CoreExtension::merge((isset($context["daysList"]) || array_key_exists("daysList", $context) ? $context["daysList"] : (function () { throw new RuntimeError('Variable "daysList" does not exist.', 49, $this->source); })()), [(((((CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "day", [], "any", false, false, false, 49) . " (") . CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "start", [], "any", false, false, false, 49)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "end", [], "any", false, false, false, 49)) . ")")]);
                            // line 50
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['dayKey'], $context['dayData'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["daysList"]) || array_key_exists("daysList", $context) ? $context["daysList"] : (function () { throw new RuntimeError('Variable "daysList" does not exist.', 51, $this->source); })()), ", "), "html", null, true);
                        yield "
                                    </span>
                                ";
                    }
                    // line 54
                    yield "                            </div>
                            <div class=\"pharmacy-actions\">
                                <a href=\"";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 58
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 58, $this->source); })()), "city" =>                     // line 59
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 59, $this->source); })()), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                     // line 60
$context["pharmacy"], "id", [], "any", false, false, false, 60), "search_pharmacy" => ((                    // line 61
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 61, $this->source); })()), "")) : (""))]), "html", null, true);
                    // line 62
                    yield "\" class=\"btn btn-sm btn-primary\">
                                    <i class=\"fas fa-info-circle me-1\"></i> Détails
                                </a>
                                <a href=\"";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                     // line 67
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 67, $this->source); })()), "city" =>                     // line 68
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 68, $this->source); })()), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                     // line 69
$context["pharmacy"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                    // line 70
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
                // line 78
                yield "        </div>

        ";
                // line 81
                yield "        ";
                if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 81, $this->source); })()) > 1)) {
                    // line 82
                    yield "            <div class=\"pagination-container\">
                ";
                    // line 83
                    if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 83, $this->source); })()) > 1)) {
                        // line 84
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 86
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 86, $this->source); })()), "city" =>                         // line 87
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 87, $this->source); })()), "page" => (                        // line 88
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 88, $this->source); })()) - 1), "search_pharmacy" => ((                        // line 89
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 89, $this->source); })()), "")) : (""))]), "html", null, true);
                        // line 90
                        yield "\" class=\"page-link\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                ";
                    } else {
                        // line 94
                        yield "                    <span class=\"page-link disabled\"><i class=\"fas fa-chevron-left\"></i></span>
                ";
                    }
                    // line 96
                    yield "
                ";
                    // line 97
                    $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 97, $this->source); })()) - 2));
                    // line 98
                    yield "                ";
                    $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 98, $this->source); })()), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 98, $this->source); })()) + 2));
                    // line 99
                    yield "                
                ";
                    // line 100
                    if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 100, $this->source); })()) > 1)) {
                        // line 101
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 103
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 103, $this->source); })()), "city" =>                         // line 104
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 104, $this->source); })()), "page" => 1, "search_pharmacy" => ((                        // line 106
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 106, $this->source); })()), "")) : (""))]), "html", null, true);
                        // line 107
                        yield "\" class=\"page-link\">1</a>
                    ";
                        // line 108
                        if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 108, $this->source); })()) > 2)) {
                            // line 109
                            yield "                        <span class=\"page-link disabled\">…</span>
                    ";
                        }
                        // line 111
                        yield "                ";
                    }
                    // line 112
                    yield "
                ";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 113, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 113, $this->source); })())));
                    foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                        // line 114
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 116
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 116, $this->source); })()), "city" =>                         // line 117
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 117, $this->source); })()), "page" =>                         // line 118
$context["page"], "search_pharmacy" => ((                        // line 119
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 119, $this->source); })()), "")) : (""))]), "html", null, true);
                        // line 120
                        yield "\" class=\"page-link ";
                        yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 120, $this->source); })()))) ? ("active") : (""));
                        yield "\">
                        ";
                        // line 121
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "
                    </a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    yield "
                ";
                    // line 125
                    if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 125, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 125, $this->source); })()))) {
                        // line 126
                        yield "                    ";
                        if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 126, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 126, $this->source); })()) - 1))) {
                            // line 127
                            yield "                        <span class=\"page-link disabled\">…</span>
                    ";
                        }
                        // line 129
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 131
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 131, $this->source); })()), "city" =>                         // line 132
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 132, $this->source); })()), "page" =>                         // line 133
(isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 133, $this->source); })()), "search_pharmacy" => ((                        // line 134
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 134, $this->source); })()), "")) : (""))]), "html", null, true);
                        // line 135
                        yield "\" class=\"page-link\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 135, $this->source); })()), "html", null, true);
                        yield "</a>
                ";
                    }
                    // line 137
                    yield "
                ";
                    // line 138
                    if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 138, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 138, $this->source); })()))) {
                        // line 139
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 141
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 141, $this->source); })()), "city" =>                         // line 142
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 142, $this->source); })()), "page" => (                        // line 143
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 143, $this->source); })()) + 1), "search_pharmacy" => ((                        // line 144
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 144, $this->source); })()), "")) : (""))]), "html", null, true);
                        // line 145
                        yield "\" class=\"page-link\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                ";
                    } else {
                        // line 149
                        yield "                    <span class=\"page-link disabled\"><i class=\"fas fa-chevron-right\"></i></span>
                ";
                    }
                    // line 151
                    yield "
                <span class=\"page-info\">Page ";
                    // line 152
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 152, $this->source); })()), "html", null, true);
                    yield " sur ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 152, $this->source); })()), "html", null, true);
                    yield "</span>
            </div>
        ";
                }
                // line 155
                yield "
    ";
            } else {
                // line 157
                yield "        <div class=\"empty-state\">
            <i class=\"fas fa-clock\" style=\"color: #f59e0b;\"></i>
            <h4>Aucune pharmacie de garde trouvée</h4>
            <p class=\"text-muted\">
                ";
                // line 161
                if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 161, $this->source); })()), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 162
                    yield "                    Aucune pharmacie de garde ne correspond à \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 162, $this->source); })()), "html", null, true);
                    yield "\" dans cette ville.
                ";
                } else {
                    // line 164
                    yield "                    Aucune pharmacie de garde disponible dans cette ville pour le moment.
                ";
                }
                // line 166
                yield "            </p>
            <div class=\"mt-3\">
                <small class=\"text-muted d-block mb-2\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Les pharmacies de garde sont affichées automatiquement en fonction de l'heure actuelle.
                </small>
                ";
                // line 172
                if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 172, $this->source); })()), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 173
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 175
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 175, $this->source); })()), "city" =>                     // line 176
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 176, $this->source); })())]), "html", null, true);
                    // line 177
                    yield "\" class=\"btn btn-primary mt-2\">
                        <i class=\"fas fa-undo me-1\"></i> Voir toutes les pharmacies de garde
                    </a>
                ";
                } else {
                    // line 181
                    yield "                    <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy"]);
                    yield "\" class=\"btn btn-primary mt-2\">
                        <i class=\"fas fa-undo me-1\"></i> Nouvelle recherche
                    </a>
                ";
                }
                // line 185
                yield "            </div>
        </div>
    ";
            }
            // line 188
            yield "
";
        } else {
            // line 190
            yield "    ";
            // line 191
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-search-location\"></i>
        <h4>Sélectionnez un pays et une ville</h4>
        <p class=\"text-muted\">Choisissez un pays puis une ville pour voir les pharmacies de garde disponibles.</p>
    </div>
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
        return "marketplace/pharmacy/_pharmacy_mode.html.twig";
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
        return array (  401 => 191,  399 => 190,  395 => 188,  390 => 185,  382 => 181,  376 => 177,  374 => 176,  373 => 175,  371 => 173,  369 => 172,  361 => 166,  357 => 164,  351 => 162,  349 => 161,  343 => 157,  339 => 155,  331 => 152,  328 => 151,  324 => 149,  318 => 145,  316 => 144,  315 => 143,  314 => 142,  313 => 141,  311 => 139,  309 => 138,  306 => 137,  300 => 135,  298 => 134,  297 => 133,  296 => 132,  295 => 131,  293 => 129,  289 => 127,  286 => 126,  284 => 125,  281 => 124,  272 => 121,  267 => 120,  265 => 119,  264 => 118,  263 => 117,  262 => 116,  260 => 114,  256 => 113,  253 => 112,  250 => 111,  246 => 109,  244 => 108,  241 => 107,  239 => 106,  238 => 104,  237 => 103,  235 => 101,  233 => 100,  230 => 99,  227 => 98,  225 => 97,  222 => 96,  218 => 94,  212 => 90,  210 => 89,  209 => 88,  208 => 87,  207 => 86,  205 => 84,  203 => 83,  200 => 82,  197 => 81,  193 => 78,  180 => 70,  178 => 69,  177 => 68,  176 => 67,  175 => 65,  170 => 62,  168 => 61,  167 => 60,  166 => 59,  165 => 58,  164 => 56,  160 => 54,  153 => 51,  147 => 50,  144 => 49,  139 => 48,  137 => 47,  134 => 46,  132 => 45,  126 => 41,  120 => 38,  117 => 37,  115 => 36,  108 => 34,  103 => 32,  95 => 26,  91 => 25,  83 => 20,  77 => 17,  73 => 15,  70 => 14,  68 => 13,  66 => 12,  62 => 10,  60 => 9,  59 => 8,  58 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/pharmacy/_pharmacy_mode.html.twig #}

{% if selectedPharmacyData %}
    {# Détail d'une pharmacie #}
    {{ include('marketplace/pharmacy/_pharmacy_detail.html.twig', {
        selectedPharmacyData: selectedPharmacyData,
        selectedCountry: selectedCountry,
        selectedCity: selectedCity,
        searchPharmacy: searchPharmacy|default('')
    }) }}

{% elseif selectedCountry and selectedCity %}
    {# Liste des pharmacies DE GARDE UNIQUEMENT #}
    {% if pharmacies|length > 0 %}
        <div class=\"section-title\">
            <i class=\"fas fa-clock me-2\" style=\"color: var(--success-color);\"></i>
            Pharmacies de garde à <span class=\"text-primary\">{{ selectedCity }}</span>
            <span class=\"badge-count\" style=\"background: #dcfce7; color: #16a34a;\">
                <i class=\"fas fa-check-circle me-1\"></i>
                {{ totalPharmacies }} pharmacie(s) de garde
            </span>
        </div>

        <div class=\"pharmacy-grid\">
            {% for pharmacy in pharmacies %}
                <div class=\"pharmacy-card\">
                    <div class=\"d-flex gap-3 align-items-start\">
                        <div class=\"pharmacy-icon\" style=\"background: #dcfce7; color: #16a34a;\">
                            <i class=\"fas fa-shield-alt\"></i>
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
                                <span class=\"guard-badge active\" style=\"background: #dcfce7; color: #16a34a; animation: pulse-guard 2s infinite;\">
                                    <i class=\"fas fa-clock\"></i> En garde maintenant
                                </span>
                                {% if pharmacy.guardDays is defined and pharmacy.guardDays|length > 0 %}
                                    <span class=\"text-muted ms-2\" style=\"font-size: 0.75rem;\">
                                        {% set daysList = [] %}
                                        {% for dayKey, dayData in pharmacy.guardDays %}
                                            {% set daysList = daysList|merge([dayData.day ~ ' (' ~ dayData.start ~ '-' ~ dayData.end ~ ')']) %}
                                        {% endfor %}
                                        {{ daysList|join(', ') }}
                                    </span>
                                {% endif %}
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
                    <span class=\"page-link disabled\"><i class=\"fas fa-chevron-left\"></i></span>
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
                    <span class=\"page-link disabled\"><i class=\"fas fa-chevron-right\"></i></span>
                {% endif %}

                <span class=\"page-info\">Page {{ currentPage }} sur {{ totalPages }}</span>
            </div>
        {% endif %}

    {% else %}
        <div class=\"empty-state\">
            <i class=\"fas fa-clock\" style=\"color: #f59e0b;\"></i>
            <h4>Aucune pharmacie de garde trouvée</h4>
            <p class=\"text-muted\">
                {% if searchPharmacy|default('') %}
                    Aucune pharmacie de garde ne correspond à \"{{ searchPharmacy }}\" dans cette ville.
                {% else %}
                    Aucune pharmacie de garde disponible dans cette ville pour le moment.
                {% endif %}
            </p>
            <div class=\"mt-3\">
                <small class=\"text-muted d-block mb-2\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Les pharmacies de garde sont affichées automatiquement en fonction de l'heure actuelle.
                </small>
                {% if searchPharmacy|default('') %}
                    <a href=\"{{ path('marketplace_pharmacy_search', {
                        mode: 'pharmacy', 
                        country: selectedCountry, 
                        city: selectedCity
                    }) }}\" class=\"btn btn-primary mt-2\">
                        <i class=\"fas fa-undo me-1\"></i> Voir toutes les pharmacies de garde
                    </a>
                {% else %}
                    <a href=\"{{ path('marketplace_pharmacy_search', {mode: 'pharmacy'}) }}\" class=\"btn btn-primary mt-2\">
                        <i class=\"fas fa-undo me-1\"></i> Nouvelle recherche
                    </a>
                {% endif %}
            </div>
        </div>
    {% endif %}

{% else %}
    {# Aucune sélection #}
    <div class=\"empty-state\">
        <i class=\"fas fa-search-location\"></i>
        <h4>Sélectionnez un pays et une ville</h4>
        <p class=\"text-muted\">Choisissez un pays puis une ville pour voir les pharmacies de garde disponibles.</p>
    </div>
{% endif %}", "marketplace/pharmacy/_pharmacy_mode.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_pharmacy_mode.html.twig");
    }
}
