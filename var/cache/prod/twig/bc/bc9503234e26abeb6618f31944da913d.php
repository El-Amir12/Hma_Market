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

/* components/_modal.html.twig */
class __TwigTemplate_98e05f1de6f723bdaf84f044b044e84f extends Template
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
            'modal_body' => [$this, 'block_modal_body'],
            'modal_footer' => [$this, 'block_modal_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"modal fade\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modalId"] ?? null), "html", null, true);
        yield "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered ";
        // line 3
        if (array_key_exists("modalSize", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modalSize"] ?? null), "html", null, true);
        } else {
            yield "modal-lg";
        }
        yield "\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modalId"] ?? null), "html", null, true);
        yield "Label\">
                    ";
        // line 7
        if (array_key_exists("modalIcon", $context)) {
            yield "<i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modalIcon"] ?? null), "html", null, true);
            yield " me-2\"></i>";
        }
        // line 8
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modalTitle"] ?? null), "html", null, true);
        yield "
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 13
        yield from $this->unwrap()->yieldBlock('modal_body', $context, $blocks);
        // line 14
        yield "            </div>
            <div class=\"modal-footer\">
                ";
        // line 16
        yield from $this->unwrap()->yieldBlock('modal_footer', $context, $blocks);
        // line 23
        yield "            </div>
        </div>
    </div>
</div>";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-save me-1\"></i>
                        ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                    </button>
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_modal.html.twig";
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
        return array (  116 => 20,  111 => 17,  104 => 16,  94 => 13,  86 => 23,  84 => 16,  80 => 14,  78 => 13,  69 => 8,  63 => 7,  59 => 6,  49 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/_modal.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_modal.html.twig");
    }
}
