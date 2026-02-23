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

/* reset_password/first_login_change.html.twig */
class __TwigTemplate_5c3f496c31c4454982af153551b31a30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/first_login_change.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/first_login_change.html.twig"));

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

        yield "Première connexion - HMA Market";
        
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
        <div class=\"col-md-6 col-lg-5\">
            <div class=\"card shadow-lg border-0\">
                <div class=\"card-header bg-primary text-white text-center py-4\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-user-shield me-2\"></i>Première connexion
                    </h4>
                </div>
                
                <div class=\"card-body p-4 p-md-5\">
                    <div class=\"alert alert-info mb-4\">
                        <div class=\"d-flex\">
                            <div class=\"me-3\">
                                <i class=\"fas fa-info-circle fa-2x\"></i>
                            </div>
                            <div>
                                <strong>Bienvenue sur HMA Market !</strong><br>
                                Pour des raisons de sécurité, vous devez définir votre mot de passe personnel avant de continuer.
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["success"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            yield "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            <i class=\"fas fa-check-circle me-2\"></i>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "                    
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", ["error"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            yield "                        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                    
                    ";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start', ["attr" => ["id" => "first-login-form"]]);
        yield "
                    
                    <div class=\"mb-4\">
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "newPassword", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                        <div class=\"input-group\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "newPassword", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" data-target=\"first\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "newPassword", [], "any", false, false, false, 53), "first", [], "any", false, false, false, 53), 'errors');
        yield "
                    </div>
                    
                    <div class=\"mb-4\">
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "newPassword", [], "any", false, false, false, 57), "second", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                        <div class=\"input-group\">
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "newPassword", [], "any", false, false, false, 59), "second", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" data-target=\"second\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "newPassword", [], "any", false, false, false, 64), "second", [], "any", false, false, false, 64), 'errors');
        yield "
                    </div>
                    
                    <div class=\"password-requirements mb-4 p-3 bg-light rounded\">
                        <p class=\"mb-2 fw-bold\"><i class=\"fas fa-shield-alt me-2\"></i>Votre mot de passe doit contenir :</p>
                        <ul class=\"list-unstyled mb-0\">
                            <li class=\"mb-1 requirement-item\" data-requirement=\"length\">
                                <i class=\"far fa-circle me-2\"></i> Au moins 8 caractères
                            </li>
                            <li class=\"mb-1 requirement-item\" data-requirement=\"uppercase\">
                                <i class=\"far fa-circle me-2\"></i> Au moins une lettre majuscule
                            </li>
                            <li class=\"mb-1 requirement-item\" data-requirement=\"lowercase\">
                                <i class=\"far fa-circle me-2\"></i> Au moins une lettre minuscule
                            </li>
                            <li class=\"mb-1 requirement-item\" data-requirement=\"number\">
                                <i class=\"far fa-circle me-2\"></i> Au moins un chiffre
                            </li>
                        </ul>
                    </div>
                    
                    <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-key me-2\"></i>Changer mon mot de passe
                        </button>
                    </div>
                    
                    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function() {
            const target = this.dataset.target;
            const input = document.querySelector(`#\${target === 'first' ? 
                '";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "newPassword", [], "any", false, false, false, 105), "first", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105), "html", null, true);
        yield "' : 
                '";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "newPassword", [], "any", false, false, false, 106), "second", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), "html", null, true);
        yield "'}`);
            
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    });
    
    // Password strength checker (optionnel)
    const passwordInput = document.getElementById('";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "newPassword", [], "any", false, false, false, 118), "first", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118), "html", null, true);
        yield "');
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            
            // Length check
            updateRequirement('length', password.length >= 8);
            
            // Uppercase check
            updateRequirement('uppercase', /[A-Z]/.test(password));
            
            // Lowercase check
            updateRequirement('lowercase', /[a-z]/.test(password));
            
            // Number check
            updateRequirement('number', /\\d/.test(password));
        });
    }
    
    function updateRequirement(requirement, isValid) {
        const element = document.querySelector(`.requirement-item[data-requirement=\"\${requirement}\"]`);
        if (element) {
            const icon = element.querySelector('i');
            if (isValid) {
                icon.className = 'fas fa-check-circle me-2 text-success';
                element.classList.add('text-success');
            } else {
                icon.className = 'far fa-circle me-2';
                element.classList.remove('text-success');
            }
        }
    }
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
        return "reset_password/first_login_change.html.twig";
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
        return array (  270 => 118,  255 => 106,  251 => 105,  234 => 91,  204 => 64,  196 => 59,  191 => 57,  184 => 53,  176 => 48,  171 => 46,  165 => 43,  162 => 42,  152 => 38,  149 => 37,  145 => 36,  142 => 35,  132 => 31,  129 => 30,  125 => 29,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-auth.html.twig' %}

{% block title %}Première connexion - HMA Market{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 col-lg-5\">
            <div class=\"card shadow-lg border-0\">
                <div class=\"card-header bg-primary text-white text-center py-4\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-user-shield me-2\"></i>Première connexion
                    </h4>
                </div>
                
                <div class=\"card-body p-4 p-md-5\">
                    <div class=\"alert alert-info mb-4\">
                        <div class=\"d-flex\">
                            <div class=\"me-3\">
                                <i class=\"fas fa-info-circle fa-2x\"></i>
                            </div>
                            <div>
                                <strong>Bienvenue sur HMA Market !</strong><br>
                                Pour des raisons de sécurité, vous devez définir votre mot de passe personnel avant de continuer.
                            </div>
                        </div>
                    </div>
                    
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            <i class=\"fas fa-check-circle me-2\"></i>{{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}
                    
                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>{{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}
                    
                    {{ form_start(form, {'attr': {'id': 'first-login-form'}}) }}
                    
                    <div class=\"mb-4\">
                        {{ form_label(form.newPassword.first, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        <div class=\"input-group\">
                            {{ form_widget(form.newPassword.first, {'attr': {'class': 'form-control'}}) }}
                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" data-target=\"first\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        {{ form_errors(form.newPassword.first) }}
                    </div>
                    
                    <div class=\"mb-4\">
                        {{ form_label(form.newPassword.second, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        <div class=\"input-group\">
                            {{ form_widget(form.newPassword.second, {'attr': {'class': 'form-control'}}) }}
                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" data-target=\"second\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        {{ form_errors(form.newPassword.second) }}
                    </div>
                    
                    <div class=\"password-requirements mb-4 p-3 bg-light rounded\">
                        <p class=\"mb-2 fw-bold\"><i class=\"fas fa-shield-alt me-2\"></i>Votre mot de passe doit contenir :</p>
                        <ul class=\"list-unstyled mb-0\">
                            <li class=\"mb-1 requirement-item\" data-requirement=\"length\">
                                <i class=\"far fa-circle me-2\"></i> Au moins 8 caractères
                            </li>
                            <li class=\"mb-1 requirement-item\" data-requirement=\"uppercase\">
                                <i class=\"far fa-circle me-2\"></i> Au moins une lettre majuscule
                            </li>
                            <li class=\"mb-1 requirement-item\" data-requirement=\"lowercase\">
                                <i class=\"far fa-circle me-2\"></i> Au moins une lettre minuscule
                            </li>
                            <li class=\"mb-1 requirement-item\" data-requirement=\"number\">
                                <i class=\"far fa-circle me-2\"></i> Au moins un chiffre
                            </li>
                        </ul>
                    </div>
                    
                    <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-key me-2\"></i>Changer mon mot de passe
                        </button>
                    </div>
                    
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function() {
            const target = this.dataset.target;
            const input = document.querySelector(`#\${target === 'first' ? 
                '{{ form.newPassword.first.vars.id }}' : 
                '{{ form.newPassword.second.vars.id }}'}`);
            
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    });
    
    // Password strength checker (optionnel)
    const passwordInput = document.getElementById('{{ form.newPassword.first.vars.id }}');
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            
            // Length check
            updateRequirement('length', password.length >= 8);
            
            // Uppercase check
            updateRequirement('uppercase', /[A-Z]/.test(password));
            
            // Lowercase check
            updateRequirement('lowercase', /[a-z]/.test(password));
            
            // Number check
            updateRequirement('number', /\\d/.test(password));
        });
    }
    
    function updateRequirement(requirement, isValid) {
        const element = document.querySelector(`.requirement-item[data-requirement=\"\${requirement}\"]`);
        if (element) {
            const icon = element.querySelector('i');
            if (isValid) {
                icon.className = 'fas fa-check-circle me-2 text-success';
                element.classList.add('text-success');
            } else {
                icon.className = 'far fa-circle me-2';
                element.classList.remove('text-success');
            }
        }
    }
});
</script>
{% endblock %}", "reset_password/first_login_change.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reset_password\\first_login_change.html.twig");
    }
}
