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

/* marketplace/pharmacy/_category_options.html.twig */
class __TwigTemplate_014ecfb79f869dac8c435072313fd67a extends Template
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
";
        // line 8
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) > 0)) {
            // line 9
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 10), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 10) == ($context["selected"] ?? null))) {
                    yield "selected";
                }
                yield ">
            ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 11)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 12
                    yield "                &nbsp;&nbsp;
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 14) > 0)) {
                    yield "↳";
                }
                // line 15
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15), "html", null, true);
                yield "
            <span class=\"text-muted\">(";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 16), "html", null, true);
                yield ")</span>
        </option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 20
            yield "    <option value=\"\" disabled>Aucune catégorie disponible</option>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/pharmacy/_category_options.html.twig";
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
        return array (  92 => 20,  82 => 16,  77 => 15,  72 => 14,  65 => 12,  61 => 11,  52 => 10,  47 => 9,  45 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/_category_options.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_category_options.html.twig");
    }
}
