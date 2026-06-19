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
class __TwigTemplate_7aa1b44d46b9a06e52fce729b9f506b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/_form.html.twig"));

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
            // line 9
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            if ((array_key_exists("returnOrder", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 9, $this->source); })()), "reason", [], "any", false, false, false, 9) == $context["value"]))) {
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["refund_methods"]) || array_key_exists("refund_methods", $context) ? $context["refund_methods"] : (function () { throw new RuntimeError('Variable "refund_methods" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
            // line 22
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            if ((array_key_exists("returnOrder", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 22, $this->source); })()), "refundMethod", [], "any", false, false, false, 22) == $context["value"]))) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 35, $this->source); })()), "reasonNotes", [], "any", false, false, false, 35), "html", null, true);
        }
        yield "</textarea>
        </div>
    </div>
</div>

";
        // line 40
        if ((array_key_exists("returnOrder", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40) == "pending"))) {
            // line 41
            yield "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-bold\">Notes internes</label>
            <textarea name=\"notes\" id=\"notes\" class=\"form-control\" rows=\"2\" placeholder=\"Notes internes pour l'administration...\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 45, $this->source); })()), "notes", [], "any", false, false, false, 45), "html", null, true);
            yield "</textarea>
        </div>
    </div>
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
        return array (  139 => 45,  133 => 41,  131 => 40,  121 => 35,  110 => 26,  101 => 23,  92 => 22,  88 => 21,  78 => 13,  69 => 10,  60 => 9,  56 => 8,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/return/_form.html.twig #}
<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-bold\">Motif du retour <span class=\"text-danger\">*</span></label>
            <select name=\"reason\" id=\"reason\" class=\"form-select select2\" required>
                <option value=\"\">-- Sélectionnez un motif --</option>
                {% for value, label in reasons %}
                    <option value=\"{{ value }}\" {% if returnOrder is defined and returnOrder.reason == value %}selected{% endif %}>
                        {{ label }}
                    </option>
                {% endfor %}
            </select>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-bold\">Méthode de remboursement <span class=\"text-danger\">*</span></label>
            <select name=\"refund_method\" id=\"refund_method\" class=\"form-select select2\" required>
                <option value=\"\">-- Sélectionnez une méthode --</option>
                {% for value, label in refund_methods %}
                    <option value=\"{{ value }}\" {% if returnOrder is defined and returnOrder.refundMethod == value %}selected{% endif %}>
                        {{ label }}
                    </option>
                {% endfor %}
            </select>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-bold\">Notes supplémentaires</label>
            <textarea name=\"reason_notes\" id=\"reason_notes\" class=\"form-control\" rows=\"3\" placeholder=\"Précisez le motif du retour...\">{% if returnOrder is defined %}{{ returnOrder.reasonNotes }}{% endif %}</textarea>
        </div>
    </div>
</div>

{% if returnOrder is defined and returnOrder.status == 'pending' %}
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-bold\">Notes internes</label>
            <textarea name=\"notes\" id=\"notes\" class=\"form-control\" rows=\"2\" placeholder=\"Notes internes pour l'administration...\">{{ returnOrder.notes }}</textarea>
        </div>
    </div>
</div>
{% endif %}", "return/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\_form.html.twig");
    }
}
