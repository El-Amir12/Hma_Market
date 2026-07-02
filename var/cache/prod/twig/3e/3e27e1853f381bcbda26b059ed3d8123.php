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

/* super_admin/analysis_price/_form.html.twig */
class __TwigTemplate_04d3d3be0502866caef47077a0db2ed4 extends Template
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
        yield "<div class=\"form-group-custom\">
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 3), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Identifiant technique"]);
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: standard, premium, enterprise"]]);
        yield "
    <small class=\"text-muted\">Utilisé en interne, doit être unique (ex: standard, powerbi, custom, subscription)</small>
    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 6), 'errors');
        yield "
</div>

<div class=\"form-group-custom\">
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "label", [], "any", false, false, false, 10), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Libellé affiché"]);
        yield "
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "label", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: Analyse Standard"]]);
        yield "
    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "label", [], "any", false, false, false, 12), 'errors');
        yield "
</div>

<div class=\"form-group-custom\">
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Décrivez ce que comprend cette offre..."]]);
        yield "
    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 18), 'errors');
        yield "
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"form-group-custom\">
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix (FCFA)"]);
        yield "
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0", "min" => "0", "step" => "1"]]);
        yield "
            <small class=\"text-muted\">Le prix doit être un nombre positif ou nul</small>
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 27), 'errors');
        yield "
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"form-group-custom\">
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "display_order", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ordre d'affichage"]);
        yield "
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "display_order", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0, 1, 2, 3...", "min" => "0", "step" => "1"]]);
        yield "
            <small class=\"text-muted\">0 = premier, plus le chiffre est grand, plus l'ordre est bas</small>
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "display_order", [], "any", false, false, false, 35), 'errors');
        yield "
        </div>
    </div>
</div>

<div class=\"form-group-custom mt-3\">
    <div class=\"form-check form-switch\">
        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch", "id" => "isActiveSwitch"]]);
        yield "
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Offre active"]);
        yield "
    </div>
    <small class=\"text-muted\">Les offres inactives ne seront pas visibles par les utilisateurs</small>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "super_admin/analysis_price/_form.html.twig";
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
        return array (  133 => 43,  129 => 42,  119 => 35,  114 => 33,  110 => 32,  102 => 27,  97 => 25,  93 => 24,  84 => 18,  80 => 17,  76 => 16,  69 => 12,  65 => 11,  61 => 10,  54 => 6,  49 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/analysis_price/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_price\\_form.html.twig");
    }
}
