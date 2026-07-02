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

/* components/_form.html.twig */
class __TwigTemplate_e4f2792b5867cb18b3c7ccf11af74205 extends Template
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
            'form_actions' => [$this, 'block_form_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["form_class"] = ((array_key_exists("form_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["form_class"] ?? null), "row g-3 needs-validation")) : ("row g-3 needs-validation"));
        // line 3
        $context["show_labels"] = ((array_key_exists("show_labels", $context)) ? (Twig\Extension\CoreExtension::default(($context["show_labels"] ?? null), true)) : (true));
        // line 4
        $context["show_help"] = ((array_key_exists("show_help", $context)) ? (Twig\Extension\CoreExtension::default(($context["show_help"] ?? null), true)) : (true));
        // line 5
        $context["disabled"] = ((array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["disabled"] ?? null), false)) : (false));
        // line 6
        yield "
<form 
    method=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("method", $context)) ? (Twig\Extension\CoreExtension::default(($context["method"] ?? null), "POST")) : ("POST")), "html", null, true);
        yield "\" 
    action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default(($context["action"] ?? null), "")) : ("")), "html", null, true);
        yield "\" 
    class=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_class"] ?? null), "html", null, true);
        yield "\"
    ";
        // line 11
        if (array_key_exists("enctype", $context)) {
            yield "enctype=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["enctype"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 12
        yield "    novalidate
>
    ";
        // line 14
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 14), "valid", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "        <div class=\"alert alert-danger\">
            <i class=\"fas fa-exclamation-triangle me-2\"></i>
            Veuillez corriger les erreurs ci-dessous.
        </div>
    ";
        }
        // line 20
        yield "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 22
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22) != "_token")) {
                // line 23
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 23), "compound", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    yield "                ";
                    // line 25
                    yield "                <div class=\"col-12\">
                    ";
                    // line 26
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row', ["row_class" => "mb-3", "label_class" => "form-label", "widget_class" => "form-control", "help_class" => "form-text"]);
                    // line 31
                    yield "
                </div>
            ";
                } else {
                    // line 34
                    yield "                ";
                    // line 35
                    yield "                ";
                    $context["col_class"] = "col-md-6";
                    // line 36
                    yield "                ";
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), ["email", "phone", "description"])) {
                        // line 37
                        yield "                    ";
                        $context["col_class"] = "col-md-12";
                        // line 38
                        yield "                ";
                    }
                    // line 39
                    yield "                
                <div class=\"";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 41
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row', ["row_class" => "mb-3", "label_class" => "form-label fw-semibold", "widget_class" => ("form-control" . (((($tmp =                     // line 44
($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" bg-light") : (""))), "attr" => (((($tmp =                     // line 45
($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["disabled" => "disabled"]) : ([])), "help_class" => "form-text text-muted"]);
                    // line 47
                    yield "
                </div>
            ";
                }
                // line 50
                yield "        ";
            }
            // line 51
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    
    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 53), 'widget');
        yield "
    
    ";
        // line 55
        yield from $this->unwrap()->yieldBlock('form_actions', $context, $blocks);
        // line 70
        yield "</form>";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "        <div class=\"col-12\">
            <div class=\"mt-4 d-flex justify-content-end gap-2\">
                ";
        // line 58
        if (array_key_exists("cancel_path", $context)) {
            // line 59
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cancel_path"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-light\">
                        <i class=\"fas fa-times me-1\"></i> Annuler
                    </a>
                ";
        }
        // line 63
        yield "                <button type=\"submit\" class=\"btn btn-primary\" ";
        yield (((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield ">
                    <i class=\"fas fa-";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("submit_icon", $context)) ? (Twig\Extension\CoreExtension::default(($context["submit_icon"] ?? null), "save")) : ("save")), "html", null, true);
        yield " me-1\"></i>
                    ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("submit_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["submit_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_form.html.twig";
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
        return array (  195 => 65,  191 => 64,  186 => 63,  178 => 59,  176 => 58,  172 => 56,  165 => 55,  160 => 70,  158 => 55,  153 => 53,  150 => 52,  144 => 51,  141 => 50,  136 => 47,  134 => 45,  133 => 44,  132 => 41,  128 => 40,  125 => 39,  122 => 38,  119 => 37,  116 => 36,  113 => 35,  111 => 34,  106 => 31,  104 => 26,  101 => 25,  99 => 24,  96 => 23,  93 => 22,  89 => 21,  86 => 20,  79 => 15,  77 => 14,  73 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_form.html.twig");
    }
}
