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

/* supplier_credit_note/_form.html.twig */
class __TwigTemplate_052dbe5294113a572fc36cbae3597ccd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier_credit_note/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier_credit_note/_form.html.twig"));

        // line 2
        yield "<div class=\"card shadow-sm\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\">
            <i class=\"fas fa-file-alt me-2\"></i>
            Formulaire de signalement
        </h5>
    </div>
    <div class=\"card-body\">
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
        
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "issueType", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Type de problème"]);
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "issueType", [], "any", false, false, false, 15), 'widget');
        yield "
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "issueType", [], "any", false, false, false, 16), 'errors');
        yield "
            </div>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "priority", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Priorité"]);
        yield "
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "priority", [], "any", false, false, false, 20), 'widget');
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "priority", [], "any", false, false, false, 21), 'errors');
        yield "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "affected_quantity", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Quantité concernée"]);
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "affected_quantity", [], "any", false, false, false, 28), 'widget');
        yield "
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "affected_quantity", [], "any", false, false, false, 29), 'errors');
        yield "
                <small class=\"text-muted\">Laissez vide pour un montant uniquement</small>
            </div>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "declaredAmount", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Montant déclaré (FCFA)"]);
        yield "
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "declaredAmount", [], "any", false, false, false, 34), 'widget');
        yield "
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "declaredAmount", [], "any", false, false, false, 35), 'errors');
        yield "
                <small class=\"text-muted\">Calculé automatiquement si vous renseignez la quantité</small>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 mb-3\">
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "stock_action", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Action recommandée sur le stock"]);
        yield "
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "stock_action", [], "any", false, false, false, 43), 'widget');
        yield "
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "stock_action", [], "any", false, false, false, 44), 'errors');
        yield "
                <small class=\"text-muted\">Cette action sera enregistrée dans l'historique comme recommandation</small>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 mb-3\">
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Description détaillée"]);
        yield "
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'widget');
        yield "
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), 'errors');
        yield "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 mb-3\">
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "attachments", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Pièces jointes"]);
        yield "
                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "attachments", [], "any", false, false, false, 60), 'widget');
        yield "
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "attachments", [], "any", false, false, false, 61), 'errors');
        yield "
                <small class=\"text-muted\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Formats supportés: JPG, PNG, GIF, WEBP, MP4, MPEG, MOV (max 50Mo par fichier)
                </small>
            </div>
        </div>

        <div class=\"d-flex justify-content-end gap-2\">
            <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save me-1\"></i> Signaler le problème
            </button>
        </div>

        ";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        yield "
    </div>
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
        return "supplier_credit_note/_form.html.twig";
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
        return array (  195 => 78,  184 => 70,  172 => 61,  168 => 60,  164 => 59,  155 => 53,  151 => 52,  147 => 51,  137 => 44,  133 => 43,  129 => 42,  119 => 35,  115 => 34,  111 => 33,  104 => 29,  100 => 28,  96 => 27,  87 => 21,  83 => 20,  79 => 19,  73 => 16,  69 => 15,  65 => 14,  58 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/supplier_credit_note/_form.html.twig #}
<div class=\"card shadow-sm\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\">
            <i class=\"fas fa-file-alt me-2\"></i>
            Formulaire de signalement
        </h5>
    </div>
    <div class=\"card-body\">
        {{ form_start(form) }}
        
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.issueType, 'Type de problème', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.issueType) }}
                {{ form_errors(form.issueType) }}
            </div>
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.priority, 'Priorité', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.priority) }}
                {{ form_errors(form.priority) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.affected_quantity, 'Quantité concernée', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.affected_quantity) }}
                {{ form_errors(form.affected_quantity) }}
                <small class=\"text-muted\">Laissez vide pour un montant uniquement</small>
            </div>
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.declaredAmount, 'Montant déclaré (FCFA)', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.declaredAmount) }}
                {{ form_errors(form.declaredAmount) }}
                <small class=\"text-muted\">Calculé automatiquement si vous renseignez la quantité</small>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 mb-3\">
                {{ form_label(form.stock_action, 'Action recommandée sur le stock', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.stock_action) }}
                {{ form_errors(form.stock_action) }}
                <small class=\"text-muted\">Cette action sera enregistrée dans l'historique comme recommandation</small>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 mb-3\">
                {{ form_label(form.description, 'Description détaillée', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.description) }}
                {{ form_errors(form.description) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 mb-3\">
                {{ form_label(form.attachments, 'Pièces jointes', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.attachments) }}
                {{ form_errors(form.attachments) }}
                <small class=\"text-muted\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Formats supportés: JPG, PNG, GIF, WEBP, MP4, MPEG, MOV (max 50Mo par fichier)
                </small>
            </div>
        </div>

        <div class=\"d-flex justify-content-end gap-2\">
            <a href=\"{{ path('app_supplier_credit_note_index') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save me-1\"></i> Signaler le problème
            </button>
        </div>

        {{ form_end(form) }}
    </div>
</div>", "supplier_credit_note/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\supplier_credit_note\\_form.html.twig");
    }
}
