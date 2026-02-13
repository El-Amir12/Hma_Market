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
class __TwigTemplate_4312d48def1e398f13e2e30dc6e71e23 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_form.html.twig"));

        // line 2
        $context["form_class"] = ((array_key_exists("form_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_class"]) || array_key_exists("form_class", $context) ? $context["form_class"] : (function () { throw new RuntimeError('Variable "form_class" does not exist.', 2, $this->source); })()), "row g-3 needs-validation")) : ("row g-3 needs-validation"));
        // line 3
        $context["show_labels"] = ((array_key_exists("show_labels", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["show_labels"]) || array_key_exists("show_labels", $context) ? $context["show_labels"] : (function () { throw new RuntimeError('Variable "show_labels" does not exist.', 3, $this->source); })()), true)) : (true));
        // line 4
        $context["show_help"] = ((array_key_exists("show_help", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["show_help"]) || array_key_exists("show_help", $context) ? $context["show_help"] : (function () { throw new RuntimeError('Variable "show_help" does not exist.', 4, $this->source); })()), true)) : (true));
        // line 5
        $context["disabled"] = ((array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 5, $this->source); })()), false)) : (false));
        // line 6
        yield "
<form 
    method=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("method", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 8, $this->source); })()), "POST")) : ("POST")), "html", null, true);
        yield "\" 
    action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" 
    class=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form_class"]) || array_key_exists("form_class", $context) ? $context["form_class"] : (function () { throw new RuntimeError('Variable "form_class" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "\"
    ";
        // line 11
        if (array_key_exists("enctype", $context)) {
            yield "enctype=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enctype"]) || array_key_exists("enctype", $context) ? $context["enctype"] : (function () { throw new RuntimeError('Variable "enctype" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "\"";
        }
        // line 12
        yield "    novalidate
>
    ";
        // line 14
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "valid", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()));
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
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["col_class"]) || array_key_exists("col_class", $context) ? $context["col_class"] : (function () { throw new RuntimeError('Variable "col_class" does not exist.', 40, $this->source); })()), "html", null, true);
                    yield "\">
                    ";
                    // line 41
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row', ["row_class" => "mb-3", "label_class" => "form-label fw-semibold", "widget_class" => ("form-control" . (((($tmp =                     // line 44
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 44, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" bg-light") : (""))), "attr" => (((($tmp =                     // line 45
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 45, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["disabled" => "disabled"]) : ([])), "help_class" => "form-text text-muted"]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "_token", [], "any", false, false, false, 53), 'widget');
        yield "
    
    ";
        // line 55
        yield from $this->unwrap()->yieldBlock('form_actions', $context, $blocks);
        // line 70
        yield "</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_actions"));

        // line 56
        yield "        <div class=\"col-12\">
            <div class=\"mt-4 d-flex justify-content-end gap-2\">
                ";
        // line 58
        if (array_key_exists("cancel_path", $context)) {
            // line 59
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cancel_path"]) || array_key_exists("cancel_path", $context) ? $context["cancel_path"] : (function () { throw new RuntimeError('Variable "cancel_path" does not exist.', 59, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-light\">
                        <i class=\"fas fa-times me-1\"></i> Annuler
                    </a>
                ";
        }
        // line 63
        yield "                <button type=\"submit\" class=\"btn btn-primary\" ";
        yield (((($tmp = (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 63, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield ">
                    <i class=\"fas fa-";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("submit_icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["submit_icon"]) || array_key_exists("submit_icon", $context) ? $context["submit_icon"] : (function () { throw new RuntimeError('Variable "submit_icon" does not exist.', 64, $this->source); })()), "save")) : ("save")), "html", null, true);
        yield " me-1\"></i>
                    ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("submit_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["submit_label"]) || array_key_exists("submit_label", $context) ? $context["submit_label"] : (function () { throw new RuntimeError('Variable "submit_label" does not exist.', 65, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  213 => 65,  209 => 64,  204 => 63,  196 => 59,  194 => 58,  190 => 56,  177 => 55,  166 => 70,  164 => 55,  159 => 53,  156 => 52,  150 => 51,  147 => 50,  142 => 47,  140 => 45,  139 => 44,  138 => 41,  134 => 40,  131 => 39,  128 => 38,  125 => 37,  122 => 36,  119 => 35,  117 => 34,  112 => 31,  110 => 26,  107 => 25,  105 => 24,  102 => 23,  99 => 22,  95 => 21,  92 => 20,  85 => 15,  83 => 14,  79 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/components/_form.html.twig #}
{% set form_class = form_class|default('row g-3 needs-validation') %}
{% set show_labels = show_labels|default(true) %}
{% set show_help = show_help|default(true) %}
{% set disabled = disabled|default(false) %}

<form 
    method=\"{{ method|default('POST') }}\" 
    action=\"{{ action|default('') }}\" 
    class=\"{{ form_class }}\"
    {% if enctype is defined %}enctype=\"{{ enctype }}\"{% endif %}
    novalidate
>
    {% if not form.vars.valid %}
        <div class=\"alert alert-danger\">
            <i class=\"fas fa-exclamation-triangle me-2\"></i>
            Veuillez corriger les erreurs ci-dessous.
        </div>
    {% endif %}

    {% for child in form %}
        {% if child.vars.name != '_token' %}
            {% if child.vars.compound %}
                {# Pour les types composés #}
                <div class=\"col-12\">
                    {{ form_row(child, {
                        'row_class': 'mb-3',
                        'label_class': 'form-label',
                        'widget_class': 'form-control',
                        'help_class': 'form-text'
                    }) }}
                </div>
            {% else %}
                {# Déterminer la taille de colonne #}
                {% set col_class = 'col-md-6' %}
                {% if child.vars.name in ['email', 'phone', 'description'] %}
                    {% set col_class = 'col-md-12' %}
                {% endif %}
                
                <div class=\"{{ col_class }}\">
                    {{ form_row(child, {
                        'row_class': 'mb-3',
                        'label_class': 'form-label fw-semibold',
                        'widget_class': 'form-control' ~ (disabled ? ' bg-light' : ''),
                        'attr': disabled ? {'disabled': 'disabled'} : {},
                        'help_class': 'form-text text-muted'
                    }) }}
                </div>
            {% endif %}
        {% endif %}
    {% endfor %}
    
    {{ form_widget(form._token) }}
    
    {% block form_actions %}
        <div class=\"col-12\">
            <div class=\"mt-4 d-flex justify-content-end gap-2\">
                {% if cancel_path is defined %}
                    <a href=\"{{ cancel_path }}\" class=\"btn btn-light\">
                        <i class=\"fas fa-times me-1\"></i> Annuler
                    </a>
                {% endif %}
                <button type=\"submit\" class=\"btn btn-primary\" {{ disabled ? 'disabled' : '' }}>
                    <i class=\"fas fa-{{ submit_icon|default('save') }} me-1\"></i>
                    {{ submit_label|default('Enregistrer') }}
                </button>
            </div>
        </div>
    {% endblock %}
</form>", "components/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_form.html.twig");
    }
}
