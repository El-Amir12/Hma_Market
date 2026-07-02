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
class __TwigTemplate_139c17962d050d1712f30e1b251cc358 extends Template
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
";
        // line 3
        if ((($tmp = ($context["selectedPharmacyData"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            // line 5
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_pharmacy_detail.html.twig", ["selectedPharmacyData" =>             // line 6
($context["selectedPharmacyData"] ?? null), "selectedCountry" =>             // line 7
($context["selectedCountry"] ?? null), "selectedCity" =>             // line 8
($context["selectedCity"] ?? null), "searchPharmacy" => ((            // line 9
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]);
            // line 10
            yield "

";
        } elseif ((        // line 12
($context["selectedCountry"] ?? null) && ($context["selectedCity"] ?? null))) {
            // line 13
            yield "    ";
            // line 14
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_pharmacy_list.html.twig", ["pharmacies" =>             // line 15
($context["pharmacies"] ?? null), "selectedCountry" =>             // line 16
($context["selectedCountry"] ?? null), "selectedCity" =>             // line 17
($context["selectedCity"] ?? null), "searchPharmacy" => ((            // line 18
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : ("")), "currentPage" =>             // line 19
($context["currentPage"] ?? null), "totalPages" =>             // line 20
($context["totalPages"] ?? null), "totalPharmacies" =>             // line 21
($context["totalPharmacies"] ?? null)]);
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
        return array (  81 => 26,  79 => 25,  74 => 22,  72 => 21,  71 => 20,  70 => 19,  69 => 18,  68 => 17,  67 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  56 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/_pharmacy_mode.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_pharmacy_mode.html.twig");
    }
}
