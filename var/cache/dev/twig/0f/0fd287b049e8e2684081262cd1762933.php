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
class __TwigTemplate_84a56e985ca75041e766b2fcc38f1bb9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_price/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_price/_form.html.twig"));

        // line 2
        yield "<div class=\"form-group-custom\">
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Identifiant technique"]);
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "type", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: standard, premium, enterprise"]]);
        yield "
    <small class=\"text-muted\">Utilisé en interne, doit être unique (ex: standard, powerbi, custom, subscription)</small>
    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "type", [], "any", false, false, false, 6), 'errors');
        yield "
</div>

<div class=\"form-group-custom\">
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "label", [], "any", false, false, false, 10), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Libellé affiché"]);
        yield "
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "label", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: Analyse Standard"]]);
        yield "
    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "label", [], "any", false, false, false, 12), 'errors');
        yield "
</div>

<div class=\"form-group-custom\">
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Décrivez ce que comprend cette offre..."]]);
        yield "
    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), 'errors');
        yield "
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"form-group-custom\">
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix (FCFA)"]);
        yield "
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "price", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0", "min" => "0", "step" => "1"]]);
        yield "
            <small class=\"text-muted\">Le prix doit être un nombre positif ou nul</small>
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "price", [], "any", false, false, false, 27), 'errors');
        yield "
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"form-group-custom\">
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "display_order", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ordre d'affichage"]);
        yield "
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "display_order", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0, 1, 2, 3...", "min" => "0", "step" => "1"]]);
        yield "
            <small class=\"text-muted\">0 = premier, plus le chiffre est grand, plus l'ordre est bas</small>
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "display_order", [], "any", false, false, false, 35), 'errors');
        yield "
        </div>
    </div>
</div>

<div class=\"form-group-custom mt-3\">
    <div class=\"form-check form-switch\">
        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "is_active", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch", "id" => "isActiveSwitch"]]);
        yield "
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "is_active", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Offre active"]);
        yield "
    </div>
    <small class=\"text-muted\">Les offres inactives ne seront pas visibles par les utilisateurs</small>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  139 => 43,  135 => 42,  125 => 35,  120 => 33,  116 => 32,  108 => 27,  103 => 25,  99 => 24,  90 => 18,  86 => 17,  82 => 16,  75 => 12,  71 => 11,  67 => 10,  60 => 6,  55 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis_price/_form.html.twig #}
<div class=\"form-group-custom\">
    {{ form_label(form.type, 'Identifiant technique', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.type, {'attr': {'class': 'form-control', 'placeholder': 'ex: standard, premium, enterprise'}}) }}
    <small class=\"text-muted\">Utilisé en interne, doit être unique (ex: standard, powerbi, custom, subscription)</small>
    {{ form_errors(form.type) }}
</div>

<div class=\"form-group-custom\">
    {{ form_label(form.label, 'Libellé affiché', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.label, {'attr': {'class': 'form-control', 'placeholder': 'ex: Analyse Standard'}}) }}
    {{ form_errors(form.label) }}
</div>

<div class=\"form-group-custom\">
    {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 3, 'placeholder': 'Décrivez ce que comprend cette offre...'}}) }}
    {{ form_errors(form.description) }}
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"form-group-custom\">
            {{ form_label(form.price, 'Prix (FCFA)', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.price, {'attr': {'class': 'form-control', 'placeholder': '0', 'min': '0', 'step': '1'}}) }}
            <small class=\"text-muted\">Le prix doit être un nombre positif ou nul</small>
            {{ form_errors(form.price) }}
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"form-group-custom\">
            {{ form_label(form.display_order, \"Ordre d'affichage\", {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.display_order, {'attr': {'class': 'form-control', 'placeholder': '0, 1, 2, 3...', 'min': '0', 'step': '1'}}) }}
            <small class=\"text-muted\">0 = premier, plus le chiffre est grand, plus l'ordre est bas</small>
            {{ form_errors(form.display_order) }}
        </div>
    </div>
</div>

<div class=\"form-group-custom mt-3\">
    <div class=\"form-check form-switch\">
        {{ form_widget(form.is_active, {'attr': {'class': 'form-check-input', 'role': 'switch', 'id': 'isActiveSwitch'}}) }}
        {{ form_label(form.is_active, 'Offre active', {'label_attr': {'class': 'form-check-label'}}) }}
    </div>
    <small class=\"text-muted\">Les offres inactives ne seront pas visibles par les utilisateurs</small>
</div>", "super_admin/analysis_price/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_price\\_form.html.twig");
    }
}
