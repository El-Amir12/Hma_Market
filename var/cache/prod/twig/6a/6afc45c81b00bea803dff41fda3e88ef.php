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
class __TwigTemplate_1a8eafa11d85b26c0a08099f9505ce2b extends Template
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
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('recipe_item_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_recipe_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "product", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Produit"]);
        yield "
                        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "product", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-select product-select"]]);
        yield "
                        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "product", [], "any", false, false, false, 14), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"form-group\">
                        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Quantité"]);
        yield "
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control quantity-input"]]);
        yield "
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 21), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"form-group\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unit", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Unité"]);
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unit", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control unit-input"]]);
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unit", [], "any", false, false, false, 28), 'errors');
        yield "
                    </div>
                </div>
            </div>
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
        return "form/recipe_item.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  107 => 28,  103 => 27,  99 => 26,  91 => 21,  87 => 20,  83 => 19,  75 => 14,  71 => 13,  67 => 12,  57 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "form/recipe_item.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\form\\recipe_item.html.twig");
    }
}
