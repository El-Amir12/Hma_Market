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
class __TwigTemplate_4c6df128ac1a1cfb2ef520c0aa369e55 extends Template
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
            yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_pharmacy_list.html.twig", ["pharmacies" =>             // line 15
(isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 15, $this->source); })()), "selectedCountry" =>             // line 16
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 16, $this->source); })()), "selectedCity" =>             // line 17
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 17, $this->source); })()), "searchPharmacy" => ((            // line 18
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 18, $this->source); })()), "")) : ("")), "currentPage" =>             // line 19
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 19, $this->source); })()), "totalPages" =>             // line 20
(isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 20, $this->source); })()), "totalPharmacies" =>             // line 21
(isset($context["totalPharmacies"]) || array_key_exists("totalPharmacies", $context) ? $context["totalPharmacies"] : (function () { throw new RuntimeError('Variable "totalPharmacies" does not exist.', 21, $this->source); })())]);
            // line 22
            yield "

";
        } else {
            // line 25
            yield "    ";
            // line 26
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-search-location\"></i>
        <h4>Sélectionnez un pays et une ville</h4>
        <p class=\"text-muted\">Choisissez un pays puis une ville pour voir les pharmacies disponibles.</p>
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
        return array (  87 => 26,  85 => 25,  80 => 22,  78 => 21,  77 => 20,  76 => 19,  75 => 18,  74 => 17,  73 => 16,  72 => 15,  70 => 14,  68 => 13,  66 => 12,  62 => 10,  60 => 9,  59 => 8,  58 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  48 => 2,);
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
    {# Liste des pharmacies #}
    {{ include('marketplace/pharmacy/_pharmacy_list.html.twig', {
        pharmacies: pharmacies,
        selectedCountry: selectedCountry,
        selectedCity: selectedCity,
        searchPharmacy: searchPharmacy|default(''),
        currentPage: currentPage,
        totalPages: totalPages,
        totalPharmacies: totalPharmacies
    }) }}

{% else %}
    {# Aucune sélection #}
    <div class=\"empty-state\">
        <i class=\"fas fa-search-location\"></i>
        <h4>Sélectionnez un pays et une ville</h4>
        <p class=\"text-muted\">Choisissez un pays puis une ville pour voir les pharmacies disponibles.</p>
    </div>
{% endif %}", "marketplace/pharmacy/_pharmacy_mode.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_pharmacy_mode.html.twig");
    }
}
