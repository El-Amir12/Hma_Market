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

/* components/_dynamic_styles.html.twig */
class __TwigTemplate_f9a8133e655cc0a6366a4f36510fe790 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_dynamic_styles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_dynamic_styles.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["defaultPrimary"] = "#0463f1";
        // line 4
        $context["defaultSecondary"] = "#8b5cf6";
        // line 5
        $context["primaryColor"] = (isset($context["defaultPrimary"]) || array_key_exists("defaultPrimary", $context) ? $context["defaultPrimary"] : (function () { throw new RuntimeError('Variable "defaultPrimary" does not exist.', 5, $this->source); })());
        // line 6
        $context["secondaryColor"] = (isset($context["defaultSecondary"]) || array_key_exists("defaultSecondary", $context) ? $context["defaultSecondary"] : (function () { throw new RuntimeError('Variable "defaultSecondary" does not exist.', 6, $this->source); })());
        // line 7
        yield "
";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "hmaServiceId", [], "any", false, false, false, 8))) {
            // line 9
            yield "    ";
            $context["companyId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "hmaServiceId", [], "any", false, false, false, 9), "getId", [], "method", false, false, false, 9);
            // line 10
            yield "    ";
            $context["companyColors"] = $this->extensions['App\Twig\CompanyExtension']->getCompanyColors((isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 10, $this->source); })()));
            // line 11
            yield "    ";
            $context["primaryColor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["companyColors"]) || array_key_exists("companyColors", $context) ? $context["companyColors"] : (function () { throw new RuntimeError('Variable "companyColors" does not exist.', 11, $this->source); })()), "primary", [], "any", false, false, false, 11);
            // line 12
            yield "    ";
            $context["secondaryColor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["companyColors"]) || array_key_exists("companyColors", $context) ? $context["companyColors"] : (function () { throw new RuntimeError('Variable "companyColors" does not exist.', 12, $this->source); })()), "secondary", [], "any", false, false, false, 12);
        }
        // line 14
        yield "
";
        // line 16
        $context["primaryDark"] = $this->extensions['App\Twig\ColorExtension']->colorDarken((isset($context["primaryColor"]) || array_key_exists("primaryColor", $context) ? $context["primaryColor"] : (function () { throw new RuntimeError('Variable "primaryColor" does not exist.', 16, $this->source); })()), 15);
        // line 17
        $context["primaryLight"] = $this->extensions['App\Twig\ColorExtension']->colorLighten((isset($context["primaryColor"]) || array_key_exists("primaryColor", $context) ? $context["primaryColor"] : (function () { throw new RuntimeError('Variable "primaryColor" does not exist.', 17, $this->source); })()), 40);
        yield "  
";
        // line 18
        $context["primaryRgb"] = $this->extensions['App\Twig\ColorExtension']->hexToRgb((isset($context["primaryColor"]) || array_key_exists("primaryColor", $context) ? $context["primaryColor"] : (function () { throw new RuntimeError('Variable "primaryColor" does not exist.', 18, $this->source); })()));
        // line 19
        $context["secondaryDark"] = $this->extensions['App\Twig\ColorExtension']->colorDarken((isset($context["secondaryColor"]) || array_key_exists("secondaryColor", $context) ? $context["secondaryColor"] : (function () { throw new RuntimeError('Variable "secondaryColor" does not exist.', 19, $this->source); })()), 15);
        // line 20
        $context["secondaryLight"] = $this->extensions['App\Twig\ColorExtension']->colorLighten((isset($context["secondaryColor"]) || array_key_exists("secondaryColor", $context) ? $context["secondaryColor"] : (function () { throw new RuntimeError('Variable "secondaryColor" does not exist.', 20, $this->source); })()), 40);
        yield " 
";
        // line 21
        $context["secondaryRgb"] = $this->extensions['App\Twig\ColorExtension']->hexToRgb((isset($context["secondaryColor"]) || array_key_exists("secondaryColor", $context) ? $context["secondaryColor"] : (function () { throw new RuntimeError('Variable "secondaryColor" does not exist.', 21, $this->source); })()));
        // line 22
        yield "
<style>
    :root {
        --primary-color: ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["primaryColor"]) || array_key_exists("primaryColor", $context) ? $context["primaryColor"] : (function () { throw new RuntimeError('Variable "primaryColor" does not exist.', 25, $this->source); })()), "html", null, true);
        yield ";
        --primary-dark: ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["primaryDark"]) || array_key_exists("primaryDark", $context) ? $context["primaryDark"] : (function () { throw new RuntimeError('Variable "primaryDark" does not exist.', 26, $this->source); })()), "html", null, true);
        yield ";
        --primary-light: ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["primaryLight"]) || array_key_exists("primaryLight", $context) ? $context["primaryLight"] : (function () { throw new RuntimeError('Variable "primaryLight" does not exist.', 27, $this->source); })()), "html", null, true);
        yield ";
        --primary-rgb: ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["primaryRgb"]) || array_key_exists("primaryRgb", $context) ? $context["primaryRgb"] : (function () { throw new RuntimeError('Variable "primaryRgb" does not exist.', 28, $this->source); })()), "html", null, true);
        yield ";
        
        --secondary-color: ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["secondaryColor"]) || array_key_exists("secondaryColor", $context) ? $context["secondaryColor"] : (function () { throw new RuntimeError('Variable "secondaryColor" does not exist.', 30, $this->source); })()), "html", null, true);
        yield ";
        --secondary-dark: ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["secondaryDark"]) || array_key_exists("secondaryDark", $context) ? $context["secondaryDark"] : (function () { throw new RuntimeError('Variable "secondaryDark" does not exist.', 31, $this->source); })()), "html", null, true);
        yield ";
        --secondary-light: ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["secondaryLight"]) || array_key_exists("secondaryLight", $context) ? $context["secondaryLight"] : (function () { throw new RuntimeError('Variable "secondaryLight" does not exist.', 32, $this->source); })()), "html", null, true);
        yield ";
        --secondary-rgb: ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["secondaryRgb"]) || array_key_exists("secondaryRgb", $context) ? $context["secondaryRgb"] : (function () { throw new RuntimeError('Variable "secondaryRgb" does not exist.', 33, $this->source); })()), "html", null, true);
        yield ";
        
        /* Variables de compatibilité */
        --success-color: #10b981;
        --danger-color: #ef4444;
        --warning-color: #f59e0b;
        --info-color: #3b82f6;
        --dark-color: #1f2937;
        --light-color: #f9fafb;
    }
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_dynamic_styles.html.twig";
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
        return array (  130 => 33,  126 => 32,  122 => 31,  118 => 30,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  96 => 22,  94 => 21,  90 => 20,  88 => 19,  86 => 18,  82 => 17,  80 => 16,  77 => 14,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  62 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/components/_dynamic_styles.html.twig #}

{% set defaultPrimary = '#0463f1' %}
{% set defaultSecondary = '#8b5cf6' %}
{% set primaryColor = defaultPrimary %}
{% set secondaryColor = defaultSecondary %}

{% if app.user and app.user.hmaServiceId %}
    {% set companyId = app.user.hmaServiceId.getId() %}
    {% set companyColors = get_company_colors(companyId) %}
    {% set primaryColor = companyColors.primary %}
    {% set secondaryColor = companyColors.secondary %}
{% endif %}

{# Calcul des couleurs dérivées - Réduction du pourcentage d'éclaircissement #}
{% set primaryDark = primaryColor|color_darken(15) %}
{% set primaryLight = primaryColor|color_lighten(40) %}  
{% set primaryRgb = primaryColor|hex_to_rgb %}
{% set secondaryDark = secondaryColor|color_darken(15) %}
{% set secondaryLight = secondaryColor|color_lighten(40) %} 
{% set secondaryRgb = secondaryColor|hex_to_rgb %}

<style>
    :root {
        --primary-color: {{ primaryColor }};
        --primary-dark: {{ primaryDark }};
        --primary-light: {{ primaryLight }};
        --primary-rgb: {{ primaryRgb }};
        
        --secondary-color: {{ secondaryColor }};
        --secondary-dark: {{ secondaryDark }};
        --secondary-light: {{ secondaryLight }};
        --secondary-rgb: {{ secondaryRgb }};
        
        /* Variables de compatibilité */
        --success-color: #10b981;
        --danger-color: #ef4444;
        --warning-color: #f59e0b;
        --info-color: #3b82f6;
        --dark-color: #1f2937;
        --light-color: #f9fafb;
    }
</style>", "components/_dynamic_styles.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_dynamic_styles.html.twig");
    }
}
