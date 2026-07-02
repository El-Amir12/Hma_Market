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

/* return/_form.html.twig */
class __TwigTemplate_8bc5b25925bf4829f8f37b2b644ce46d extends Template
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
        yield "<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-bold\">Motif du retour <span class=\"text-danger\">*</span></label>
            <select name=\"reason\" id=\"reason\" class=\"form-select select2\" required>
                <option value=\"\">-- Sélectionnez un motif --</option>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reasons"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
            // line 9
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            if ((array_key_exists("returnOrder", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reason", [], "any", false, false, false, 9) == $context["value"]))) {
                yield "selected";
            }
            yield ">
                        ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['value'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "            </select>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-bold\">Méthode de remboursement <span class=\"text-danger\">*</span></label>
            <select name=\"refund_method\" id=\"refund_method\" class=\"form-select select2\" required>
                <option value=\"\">-- Sélectionnez une méthode --</option>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["refund_methods"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
            // line 22
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            if ((array_key_exists("returnOrder", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 22) == $context["value"]))) {
                yield "selected";
            }
            yield ">
                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['value'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "            </select>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-bold\">Notes supplémentaires</label>
            <textarea name=\"reason_notes\" id=\"reason_notes\" class=\"form-control\" rows=\"3\" placeholder=\"Précisez le motif du retour...\">";
        // line 35
        if (array_key_exists("returnOrder", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reasonNotes", [], "any", false, false, false, 35), "html", null, true);
        }
        yield "</textarea>
        </div>
    </div>
</div>

";
        // line 40
        if ((array_key_exists("returnOrder", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 40) == "pending"))) {
            // line 41
            yield "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-bold\">Notes internes</label>
            <textarea name=\"notes\" id=\"notes\" class=\"form-control\" rows=\"2\" placeholder=\"Notes internes pour l'administration...\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "notes", [], "any", false, false, false, 45), "html", null, true);
            yield "</textarea>
        </div>
    </div>
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
        return "return/_form.html.twig";
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
        return array (  133 => 45,  127 => 41,  125 => 40,  115 => 35,  104 => 26,  95 => 23,  86 => 22,  82 => 21,  72 => 13,  63 => 10,  54 => 9,  50 => 8,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "return/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\_form.html.twig");
    }
}
