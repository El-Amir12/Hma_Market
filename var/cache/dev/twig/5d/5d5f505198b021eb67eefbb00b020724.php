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

/* reset_password/request.html.twig */
class __TwigTemplate_eaf89a832f6001c4a5ceb60a3d6050f0 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base-auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $this->parent = $this->load("base-auth.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mot de passe oublié - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-key me-2\"></i>Réinitialisation du mot de passe
                    </h4>
                </div>
                <div class=\"card-body\">
                    
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "                        <div class=\"alert alert-success alert-dismissible fade show\">
                            <i class=\"fas fa-check-circle me-2\"></i>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "                    
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "                        <div class=\"alert alert-danger alert-dismissible fade show\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "                    
                    <p class=\"text-muted mb-4\">
                        Entrez votre adresse email professionnelle et nous vous enverrons un lien pour réinitialiser votre mot de passe.
                    </p>
                    
                    ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 35, $this->source); })()), 'form_start');
        yield "
                    
                    <div class=\"mb-3\">
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Email professionnel"]);
        yield "
                        <div class=\"input-group\">
                            <span class=\"input-group-text\">
                                <i class=\"fas fa-envelope\"></i>
                            </span>
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "exemple@votre-entreprise.com", "autocomplete" => "email", "autofocus" => true]]);
        // line 50
        yield "
                        </div>
                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'errors');
        yield "
                    </div>
                    
                    <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-paper-plane me-2\"></i>Envoyer le lien de réinitialisation
                        </button>
                        
                        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la connexion
                        </a>
                    </div>
                    
                    ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 65, $this->source); })()), 'form_end');
        yield "
                </div>
                <div class=\"card-footer text-center text-muted\">
                    <small>
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Le lien expirera dans 1 heure. Vérifiez votre dossier spam si vous ne voyez pas l'email.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 79
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(e) {
        console.log('Formulaire en cours de soumission...');
        
        // Désactiver le bouton pour éviter les double-clics
        const submitButton = form.querySelector('button[type=\"submit\"]');
        if (submitButton) {
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Envoi en cours...';
        }
    });
});
</script>
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
        return "reset_password/request.html.twig";
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
        return array (  212 => 79,  196 => 65,  188 => 60,  177 => 52,  173 => 50,  171 => 43,  163 => 38,  157 => 35,  150 => 30,  140 => 26,  137 => 25,  133 => 24,  130 => 23,  120 => 19,  117 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-auth.html.twig' %}

{% block title %}Mot de passe oublié - HMA Market{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-key me-2\"></i>Réinitialisation du mot de passe
                    </h4>
                </div>
                <div class=\"card-body\">
                    
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success alert-dismissible fade show\">
                            <i class=\"fas fa-check-circle me-2\"></i>{{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}
                    
                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-danger alert-dismissible fade show\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>{{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}
                    
                    <p class=\"text-muted mb-4\">
                        Entrez votre adresse email professionnelle et nous vous enverrons un lien pour réinitialiser votre mot de passe.
                    </p>
                    
                    {{ form_start(requestForm) }}
                    
                    <div class=\"mb-3\">
                        {{ form_label(requestForm.email, 'Email professionnel', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        <div class=\"input-group\">
                            <span class=\"input-group-text\">
                                <i class=\"fas fa-envelope\"></i>
                            </span>
                            {{ form_widget(requestForm.email, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'exemple@votre-entreprise.com',
                                    'autocomplete': 'email',
                                    'autofocus': true
                                }
                            }) }}
                        </div>
                        {{ form_errors(requestForm.email) }}
                    </div>
                    
                    <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-paper-plane me-2\"></i>Envoyer le lien de réinitialisation
                        </button>
                        
                        <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la connexion
                        </a>
                    </div>
                    
                    {{ form_end(requestForm) }}
                </div>
                <div class=\"card-footer text-center text-muted\">
                    <small>
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Le lien expirera dans 1 heure. Vérifiez votre dossier spam si vous ne voyez pas l'email.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

{# SCRIPT POUR FORCER LA SOUMISSION #}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(e) {
        console.log('Formulaire en cours de soumission...');
        
        // Désactiver le bouton pour éviter les double-clics
        const submitButton = form.querySelector('button[type=\"submit\"]');
        if (submitButton) {
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Envoi en cours...';
        }
    });
});
</script>
{% endblock %}", "reset_password/request.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reset_password\\request.html.twig");
    }
}
