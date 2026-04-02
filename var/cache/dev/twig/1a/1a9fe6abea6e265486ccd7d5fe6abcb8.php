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

/* form/recipe_item.html.twig */
class __TwigTemplate_9c9f540f8b8c530526832fe8f080e74e extends Template
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
            'recipe_item_widget' => [$this, 'block_recipe_item_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/recipe_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/recipe_item.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('recipe_item_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_recipe_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "recipe_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "recipe_item_widget"));

        // line 4
        yield "    <div class=\"recipe-item card mb-3 border\">
        <div class=\"card-body position-relative\">
            <button type=\"button\" class=\"btn btn-sm btn-outline-danger position-absolute top-0 end-0 m-2 delete-ingredient\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteConfirmModal\">
                <i class=\"bi bi-trash3\"></i> Supprimer
            </button>
            <div class=\"row g-3\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "product", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Produit"]);
        yield "
                        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "product", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-select product-select"]]);
        yield "
                        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "product", [], "any", false, false, false, 14), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"form-group\">
                        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "quantity", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Quantité"]);
        yield "
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "quantity", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control quantity-input"]]);
        yield "
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "quantity", [], "any", false, false, false, 21), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"form-group\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "unit", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Unité"]);
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "unit", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control unit-input"]]);
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "unit", [], "any", false, false, false, 28), 'errors');
        yield "
                    </div>
                </div>
            </div>
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
        return "form/recipe_item.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  125 => 28,  121 => 27,  117 => 26,  109 => 21,  105 => 20,  101 => 19,  93 => 14,  89 => 13,  85 => 12,  75 => 4,  52 => 3,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/form/recipe_item.html.twig #}

{% block recipe_item_widget %}
    <div class=\"recipe-item card mb-3 border\">
        <div class=\"card-body position-relative\">
            <button type=\"button\" class=\"btn btn-sm btn-outline-danger position-absolute top-0 end-0 m-2 delete-ingredient\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteConfirmModal\">
                <i class=\"bi bi-trash3\"></i> Supprimer
            </button>
            <div class=\"row g-3\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        {{ form_label(form.product, 'Produit', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.product, {'attr': {'class': 'form-select product-select'}}) }}
                        {{ form_errors(form.product) }}
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"form-group\">
                        {{ form_label(form.quantity, 'Quantité', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.quantity, {'attr': {'class': 'form-control quantity-input'}}) }}
                        {{ form_errors(form.quantity) }}
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"form-group\">
                        {{ form_label(form.unit, 'Unité', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.unit, {'attr': {'class': 'form-control unit-input'}}) }}
                        {{ form_errors(form.unit) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "form/recipe_item.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\form\\recipe_item.html.twig");
    }
}
