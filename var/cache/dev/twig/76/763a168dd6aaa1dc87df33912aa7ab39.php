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

/* form/promotion_item.html.twig */
class __TwigTemplate_1bdc44e3d589a3c9deaa28c558078eb5 extends Template
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
            'promotion_category_recipes_widget' => [$this, 'block_promotion_category_recipes_widget'],
            'promotion_recipes_widget' => [$this, 'block_promotion_recipes_widget'],
            'promotion_categories_widget' => [$this, 'block_promotion_categories_widget'],
            'promotion_products_widget' => [$this, 'block_promotion_products_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/promotion_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/promotion_item.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('promotion_category_recipes_widget', $context, $blocks);
        // line 18
        yield "
";
        // line 19
        yield from $this->unwrap()->yieldBlock('promotion_recipes_widget', $context, $blocks);
        // line 34
        yield "
";
        // line 35
        yield from $this->unwrap()->yieldBlock('promotion_categories_widget', $context, $blocks);
        // line 50
        yield "
";
        // line 51
        yield from $this->unwrap()->yieldBlock('promotion_products_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_promotion_category_recipes_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "promotion_category_recipes_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "promotion_category_recipes_widget"));

        // line 4
        yield "    <div class=\"promotion-category-recipes-collection\" 
         data-prototype=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "prototype", [], "any", false, false, false, 5), 'widget'), "html_attr");
        yield "\"
         data-index=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })())), "html", null, true);
        yield "\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            yield "            <div class=\"collection-item mb-3\">
                ";
            // line 9
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "categoryRecipe", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-select select2-category-recipe"]]);
            yield "
                <button type=\"button\" class=\"btn btn-sm btn-danger delete-item-btn mt-2\">
                    <i class=\"fas fa-trash me-1\"></i> Supprimer
                </button>
                ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'rest');
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_promotion_recipes_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "promotion_recipes_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "promotion_recipes_widget"));

        // line 20
        yield "    <div class=\"promotion-recipes-collection\" 
         data-prototype=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "prototype", [], "any", false, false, false, 21), 'widget'), "html_attr");
        yield "\"
         data-index=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })())), "html", null, true);
        yield "\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            yield "            <div class=\"collection-item mb-3\">
                ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-select select2-recipe"]]);
            yield "
                <button type=\"button\" class=\"btn btn-sm btn-danger delete-item-btn mt-2\">
                    <i class=\"fas fa-trash me-1\"></i> Supprimer
                </button>
                ";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'rest');
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_promotion_categories_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "promotion_categories_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "promotion_categories_widget"));

        // line 36
        yield "    <div class=\"promotion-categories-collection\" 
         data-prototype=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "prototype", [], "any", false, false, false, 37), 'widget'), "html_attr");
        yield "\"
         data-index=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })())), "html", null, true);
        yield "\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            yield "            <div class=\"collection-item mb-3\">
                ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-select select2-category"]]);
            yield "
                <button type=\"button\" class=\"btn btn-sm btn-danger delete-item-btn mt-2\">
                    <i class=\"fas fa-trash me-1\"></i> Supprimer
                </button>
                ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'rest');
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_promotion_products_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "promotion_products_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "promotion_products_widget"));

        // line 52
        yield "    <div class=\"promotion-products-collection\" 
         data-prototype=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "prototype", [], "any", false, false, false, 53), 'widget'), "html_attr");
        yield "\"
         data-index=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })())), "html", null, true);
        yield "\">
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            yield "            <div class=\"collection-item mb-3\">
                ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-select select2-product"]]);
            yield "
                <button type=\"button\" class=\"btn btn-sm btn-danger delete-item-btn mt-2\">
                    <i class=\"fas fa-trash me-1\"></i> Supprimer
                </button>
                ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'rest');
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "    </div>
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
        return "form/promotion_item.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  305 => 64,  296 => 61,  289 => 57,  286 => 56,  282 => 55,  278 => 54,  274 => 53,  271 => 52,  258 => 51,  246 => 48,  237 => 45,  230 => 41,  227 => 40,  223 => 39,  219 => 38,  215 => 37,  212 => 36,  199 => 35,  187 => 32,  178 => 29,  171 => 25,  168 => 24,  164 => 23,  160 => 22,  156 => 21,  153 => 20,  140 => 19,  128 => 16,  119 => 13,  112 => 9,  109 => 8,  105 => 7,  101 => 6,  97 => 5,  94 => 4,  81 => 3,  70 => 51,  67 => 50,  65 => 35,  62 => 34,  60 => 19,  57 => 18,  55 => 3,  52 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/form/promotion_item.html.twig #}

{% block promotion_category_recipes_widget %}
    <div class=\"promotion-category-recipes-collection\" 
         data-prototype=\"{{ form_widget(form.vars.prototype)|e('html_attr') }}\"
         data-index=\"{{ form|length }}\">
        {% for item in form %}
            <div class=\"collection-item mb-3\">
                {{ form_widget(item.categoryRecipe, {'attr': {'class': 'form-select select2-category-recipe'}}) }}
                <button type=\"button\" class=\"btn btn-sm btn-danger delete-item-btn mt-2\">
                    <i class=\"fas fa-trash me-1\"></i> Supprimer
                </button>
                {{ form_rest(item) }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block promotion_recipes_widget %}
    <div class=\"promotion-recipes-collection\" 
         data-prototype=\"{{ form_widget(form.vars.prototype)|e('html_attr') }}\"
         data-index=\"{{ form|length }}\">
        {% for item in form %}
            <div class=\"collection-item mb-3\">
                {{ form_widget(item.recipe, {'attr': {'class': 'form-select select2-recipe'}}) }}
                <button type=\"button\" class=\"btn btn-sm btn-danger delete-item-btn mt-2\">
                    <i class=\"fas fa-trash me-1\"></i> Supprimer
                </button>
                {{ form_rest(item) }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block promotion_categories_widget %}
    <div class=\"promotion-categories-collection\" 
         data-prototype=\"{{ form_widget(form.vars.prototype)|e('html_attr') }}\"
         data-index=\"{{ form|length }}\">
        {% for item in form %}
            <div class=\"collection-item mb-3\">
                {{ form_widget(item.category, {'attr': {'class': 'form-select select2-category'}}) }}
                <button type=\"button\" class=\"btn btn-sm btn-danger delete-item-btn mt-2\">
                    <i class=\"fas fa-trash me-1\"></i> Supprimer
                </button>
                {{ form_rest(item) }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block promotion_products_widget %}
    <div class=\"promotion-products-collection\" 
         data-prototype=\"{{ form_widget(form.vars.prototype)|e('html_attr') }}\"
         data-index=\"{{ form|length }}\">
        {% for item in form %}
            <div class=\"collection-item mb-3\">
                {{ form_widget(item.product, {'attr': {'class': 'form-select select2-product'}}) }}
                <button type=\"button\" class=\"btn btn-sm btn-danger delete-item-btn mt-2\">
                    <i class=\"fas fa-trash me-1\"></i> Supprimer
                </button>
                {{ form_rest(item) }}
            </div>
        {% endfor %}
    </div>
{% endblock %}", "form/promotion_item.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\form\\promotion_item.html.twig");
    }
}
