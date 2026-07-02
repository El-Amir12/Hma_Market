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

/* partials/_pagination.html.twig */
class __TwigTemplate_856456b6bd60d1b9b007998d06ca061d extends Template
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
        yield "<nav aria-label=\"Pagination\">
    <ul class=\"pagination justify-content-center mb-0\">
        <li class=\"page-item ";
        // line 4
        yield (((($context["currentPage"] ?? null) <= 1)) ? ("disabled") : (""));
        yield "\">
            <a class=\"page-link\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["params"] ?? null), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
        yield "\">
                <i class=\"bi bi-chevron-left\"></i>
            </a>
        </li>
        
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            yield "            <li class=\"page-item ";
            yield ((($context["i"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
            yield "\">
                <a class=\"page-link\" href=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["params"] ?? null), ["page" => $context["i"]])), "html", null, true);
            yield "\">
                    ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "        
        <li class=\"page-item ";
        // line 18
        yield (((($context["currentPage"] ?? null) >= ($context["totalPages"] ?? null))) ? ("disabled") : (""));
        yield "\">
            <a class=\"page-link\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["params"] ?? null), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
        yield "\">
                <i class=\"bi bi-chevron-right\"></i>
            </a>
        </li>
    </ul>
</nav>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_pagination.html.twig";
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
        return array (  88 => 19,  84 => 18,  81 => 17,  71 => 13,  67 => 12,  62 => 11,  58 => 10,  50 => 5,  46 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/_pagination.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\partials\\_pagination.html.twig");
    }
}
