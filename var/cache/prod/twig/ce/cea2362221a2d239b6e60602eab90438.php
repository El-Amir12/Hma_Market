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
class __TwigTemplate_07d63dbf9b1d733ff9645e09e2cf3f8e extends Template
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
        $context["defaultPrimary"] = "#0463f1";
        // line 4
        $context["defaultSecondary"] = "#8b5cf6";
        // line 5
        $context["primaryColor"] = ($context["defaultPrimary"] ?? null);
        // line 6
        $context["secondaryColor"] = ($context["defaultSecondary"] ?? null);
        // line 7
        yield "
";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8), "hmaServiceId", [], "any", false, false, false, 8))) {
            // line 9
            yield "    ";
            $context["companyId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "hmaServiceId", [], "any", false, false, false, 9), "getId", [], "method", false, false, false, 9);
            // line 10
            yield "    ";
            $context["companyColors"] = $this->extensions['App\Twig\CompanyExtension']->getCompanyColors(($context["companyId"] ?? null));
            // line 11
            yield "    ";
            $context["primaryColor"] = CoreExtension::getAttribute($this->env, $this->source, ($context["companyColors"] ?? null), "primary", [], "any", false, false, false, 11);
            // line 12
            yield "    ";
            $context["secondaryColor"] = CoreExtension::getAttribute($this->env, $this->source, ($context["companyColors"] ?? null), "secondary", [], "any", false, false, false, 12);
        }
        // line 14
        yield "
";
        // line 16
        $context["primaryDark"] = $this->extensions['App\Twig\ColorExtension']->colorDarken(($context["primaryColor"] ?? null), 15);
        // line 17
        $context["primaryLight"] = $this->extensions['App\Twig\ColorExtension']->colorLighten(($context["primaryColor"] ?? null), 40);
        yield "  
";
        // line 18
        $context["primaryRgb"] = $this->extensions['App\Twig\ColorExtension']->hexToRgb(($context["primaryColor"] ?? null));
        // line 19
        $context["secondaryDark"] = $this->extensions['App\Twig\ColorExtension']->colorDarken(($context["secondaryColor"] ?? null), 15);
        // line 20
        $context["secondaryLight"] = $this->extensions['App\Twig\ColorExtension']->colorLighten(($context["secondaryColor"] ?? null), 40);
        yield " 
";
        // line 21
        $context["secondaryRgb"] = $this->extensions['App\Twig\ColorExtension']->hexToRgb(($context["secondaryColor"] ?? null));
        // line 22
        yield "
<style>
    :root {
        --primary-color: ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["primaryColor"] ?? null), "html", null, true);
        yield ";
        --primary-dark: ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["primaryDark"] ?? null), "html", null, true);
        yield ";
        --primary-light: ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["primaryLight"] ?? null), "html", null, true);
        yield ";
        --primary-rgb: ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["primaryRgb"] ?? null), "html", null, true);
        yield ";
        
        --secondary-color: ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["secondaryColor"] ?? null), "html", null, true);
        yield ";
        --secondary-dark: ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["secondaryDark"] ?? null), "html", null, true);
        yield ";
        --secondary-light: ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["secondaryLight"] ?? null), "html", null, true);
        yield ";
        --secondary-rgb: ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["secondaryRgb"] ?? null), "html", null, true);
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
        return array (  124 => 33,  120 => 32,  116 => 31,  112 => 30,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  90 => 22,  88 => 21,  84 => 20,  82 => 19,  80 => 18,  76 => 17,  74 => 16,  71 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/_dynamic_styles.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_dynamic_styles.html.twig");
    }
}
