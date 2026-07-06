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

/* marketplace/auth/change_password.html.twig */
class __TwigTemplate_37b4bc14b5f550ff1615852345555cf0 extends Template
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
        // line 2
        return "base_marketplace.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/change_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/change_password.html.twig"));

        $this->parent = $this->load("base_marketplace.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Changer mon mot de passe - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-6 col-lg-5\">
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-body p-5\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-key fa-3x text-primary mb-3\"></i>
                    <h3 class=\"fw-bold\">
                        ";
        // line 14
        if ((($tmp = (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 14, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "                            🔒 Première connexion
                        ";
        } else {
            // line 17
            yield "                            Changer mon mot de passe
                        ";
        }
        // line 19
        yield "                    </h3>
                    <p class=\"text-muted\">
                        ";
        // line 21
        if ((($tmp = (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                            Vous devez définir un nouveau mot de passe pour sécuriser votre compte.
                        ";
        } else {
            // line 24
            yield "                            Sécurisez votre compte avec un nouveau mot de passe
                        ";
        }
        // line 26
        yield "                    </p>
                </div>

                ";
        // line 30
        yield "                ";
        if ((($tmp = (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                    <div class=\"alert alert-warning rounded-3 mb-4\" role=\"alert\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>🔒 Mot de passe temporaire :</strong>
                        <br>Vous utilisez un mot de passe temporaire. Veuillez en créer un nouveau.
                    </div>
                ";
        }
        // line 37
        yield "
                ";
        // line 39
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 40
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 41
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-3\" role=\"alert\">
                            <i class=\"fas fa-";
                // line 42
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } elseif (($context["label"] == "danger")) {
                    yield "exclamation-circle";
                } elseif (($context["label"] == "warning")) {
                    yield "exclamation-triangle";
                } else {
                    yield "info-circle";
                }
                yield " me-2\"></i>
                            ";
                // line 43
                yield $context["message"];
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "
                ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 49, $this->source); })()), 'form_start', ["attr" => ["class" => "mt-3"]]);
        yield "
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 50, $this->source); })()), 'errors');
        yield "

                    ";
        // line 53
        yield "                    ";
        if ((($tmp =  !(isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                        <div class=\"mb-4\">
                            <label class=\"form-label fw-semibold\">
                                <i class=\"fas fa-lock me-1\"></i>Ancien mot de passe
                            </label>
                            ";
            // line 58
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 58, $this->source); })()), "oldPassword", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "••••••••"]]);
            // line 60
            yield "
                            ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 61, $this->source); })()), "oldPassword", [], "any", false, false, false, 61), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 64
        yield "
                    ";
        // line 66
        yield "                    <div class=\"mb-4\">
                        <label class=\"form-label fw-semibold\">
                            <i class=\"fas fa-key me-1\"></i>Nouveau mot de passe
                        </label>
                        
                        ";
        // line 71
        if ((($tmp = (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 71, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                            ";
            // line 73
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 73, $this->source); })()), "newPassword", [], "any", false, false, false, 73), "first", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Minimum 8 caractères"]]);
            // line 75
            yield "
                        ";
        } else {
            // line 77
            yield "                            ";
            // line 78
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 78, $this->source); })()), "newPassword", [], "any", false, false, false, 78), "first", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Minimum 8 caractères"]]);
            // line 80
            yield "
                        ";
        }
        // line 82
        yield "                        
                        <div class=\"form-text text-muted small mt-1\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Minimum 8 caractères avec une majuscule, une minuscule et un chiffre
                        </div>
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 87, $this->source); })()), "newPassword", [], "any", false, false, false, 87), "first", [], "any", false, false, false, 87), 'errors');
        yield "
                    </div>

                    ";
        // line 91
        yield "                    <div class=\"mb-4\">
                        <label class=\"form-label fw-semibold\">
                            <i class=\"fas fa-check-circle me-1\"></i>Confirmer le nouveau mot de passe
                        </label>
                        
                        ";
        // line 96
        if ((($tmp = (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 96, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 97, $this->source); })()), "newPassword", [], "any", false, false, false, 97), "second", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Confirmez votre nouveau mot de passe"]]);
            // line 99
            yield "
                        ";
        } else {
            // line 101
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 101, $this->source); })()), "newPassword", [], "any", false, false, false, 101), "second", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Confirmez votre nouveau mot de passe"]]);
            // line 103
            yield "
                        ";
        }
        // line 105
        yield "                        
                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 106, $this->source); })()), "newPassword", [], "any", false, false, false, 106), "second", [], "any", false, false, false, 106), 'errors');
        yield "
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-save me-2\"></i>
                        ";
        // line 111
        if ((($tmp = (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 111, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "                            Définir mon mot de passe
                        ";
        } else {
            // line 114
            yield "                            Changer le mot de passe
                        ";
        }
        // line 116
        yield "                    </button>

                    <div class=\"text-center mt-3\">
                        <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" class=\"text-decoration-none small\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour à l'accueil
                        </a>
                    </div>
                ";
        // line 123
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 123, $this->source); })()), 'form_end');
        yield "

                <hr class=\"my-4\">

                <div class=\"text-center\">
                    <p class=\"small text-muted mb-0\">
                        <i class=\"fas fa-shield-alt me-1 text-success\"></i>
                        Votre mot de passe est sécurisé et chiffré
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .alert {
        border-left: 4px solid;
        margin-bottom: 1.5rem;
    }
    .alert-warning {
        border-left-color: #ffc107;
    }
    .alert-danger {
        border-left-color: #dc3545;
    }
    .alert-success {
        border-left-color: #28a745;
    }
    .alert-info {
        border-left-color: #17a2b8;
    }
    .btn-close:focus {
        box-shadow: none;
    }
    .mb-4 {
        margin-bottom: 1.5rem !important;
    }
    .form-control-lg {
        font-size: 1rem;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        border: 1px solid #dee2e6;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        background: #f8f9fa;
        width: 100%;
        display: block;
    }
    .form-control-lg:hover {
        background: #ffffff;
    }
    .form-control-lg:focus {
        background: #ffffff;
        border-color: #0463f1;
        box-shadow: 0 0 0 0.2rem rgba(4, 99, 241, 0.15);
    }
    .form-text {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 0.25rem;
    }
    .form-label {
        font-size: 0.9rem;
        color: #2c3e50;
        margin-bottom: 0.5rem;
        display: block;
        font-weight: 600;
    }
    .btn-primary {
        background: #0463f1;
        border: none;
        transition: all 0.3s;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        font-size: 1rem;
    }
    .btn-primary:hover {
        background: #0352c9;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(4, 99, 241, 0.25);
    }
    .card {
        background: #ffffff;
        border-radius: 1rem;
    }
    .card-body {
        padding: 2.5rem !important;
    }
    @media (max-width: 576px) {
        .card-body {
            padding: 1.5rem !important;
        }
    }
</style>
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
        return "marketplace/auth/change_password.html.twig";
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
        return array (  326 => 123,  319 => 119,  314 => 116,  310 => 114,  306 => 112,  304 => 111,  296 => 106,  293 => 105,  289 => 103,  286 => 101,  282 => 99,  279 => 97,  277 => 96,  270 => 91,  264 => 87,  257 => 82,  253 => 80,  250 => 78,  248 => 77,  244 => 75,  241 => 73,  239 => 72,  237 => 71,  230 => 66,  227 => 64,  221 => 61,  218 => 60,  216 => 58,  210 => 54,  207 => 53,  202 => 50,  198 => 49,  195 => 48,  189 => 47,  179 => 43,  167 => 42,  162 => 41,  157 => 40,  152 => 39,  149 => 37,  141 => 31,  138 => 30,  133 => 26,  129 => 24,  125 => 22,  123 => 21,  119 => 19,  115 => 17,  111 => 15,  109 => 14,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/auth/change_password.html.twig #}
{% extends 'base_marketplace.html.twig' %}

{% block title %}Changer mon mot de passe - HMA Market{% endblock %}

{% block body %}
<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-6 col-lg-5\">
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-body p-5\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-key fa-3x text-primary mb-3\"></i>
                    <h3 class=\"fw-bold\">
                        {% if mustChangePassword %}
                            🔒 Première connexion
                        {% else %}
                            Changer mon mot de passe
                        {% endif %}
                    </h3>
                    <p class=\"text-muted\">
                        {% if mustChangePassword %}
                            Vous devez définir un nouveau mot de passe pour sécuriser votre compte.
                        {% else %}
                            Sécurisez votre compte avec un nouveau mot de passe
                        {% endif %}
                    </p>
                </div>

                {# ✅ Message spécifique pour première connexion #}
                {% if mustChangePassword %}
                    <div class=\"alert alert-warning rounded-3 mb-4\" role=\"alert\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>🔒 Mot de passe temporaire :</strong>
                        <br>Vous utilisez un mot de passe temporaire. Veuillez en créer un nouveau.
                    </div>
                {% endif %}

                {# Flash messages #}
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} alert-dismissible fade show rounded-3\" role=\"alert\">
                            <i class=\"fas fa-{% if label == 'success' %}check-circle{% elseif label == 'danger' %}exclamation-circle{% elseif label == 'warning' %}exclamation-triangle{% else %}info-circle{% endif %} me-2\"></i>
                            {{ message|raw }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}

                {{ form_start(changePasswordForm, {'attr': {'class': 'mt-3'}}) }}
                    {{ form_errors(changePasswordForm) }}

                    {# Ancien mot de passe - UNIQUEMENT pour changement volontaire #}
                    {% if not mustChangePassword %}
                        <div class=\"mb-4\">
                            <label class=\"form-label fw-semibold\">
                                <i class=\"fas fa-lock me-1\"></i>Ancien mot de passe
                            </label>
                            {{ form_widget(changePasswordForm.oldPassword, {
                                'attr': {'class': 'form-control form-control-lg', 'placeholder': '••••••••'}
                            }) }}
                            {{ form_errors(changePasswordForm.oldPassword) }}
                        </div>
                    {% endif %}

                    {# Nouveau mot de passe #}
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-semibold\">
                            <i class=\"fas fa-key me-1\"></i>Nouveau mot de passe
                        </label>
                        
                        {% if mustChangePassword %}
                            {# Première connexion : champ newPassword #}
                            {{ form_widget(changePasswordForm.newPassword.first, {
                                'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Minimum 8 caractères'}
                            }) }}
                        {% else %}
                            {# Changement volontaire : champ newPassword #}
                            {{ form_widget(changePasswordForm.newPassword.first, {
                                'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Minimum 8 caractères'}
                            }) }}
                        {% endif %}
                        
                        <div class=\"form-text text-muted small mt-1\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Minimum 8 caractères avec une majuscule, une minuscule et un chiffre
                        </div>
                        {{ form_errors(changePasswordForm.newPassword.first) }}
                    </div>

                    {# Confirmation #}
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-semibold\">
                            <i class=\"fas fa-check-circle me-1\"></i>Confirmer le nouveau mot de passe
                        </label>
                        
                        {% if mustChangePassword %}
                            {{ form_widget(changePasswordForm.newPassword.second, {
                                'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Confirmez votre nouveau mot de passe'}
                            }) }}
                        {% else %}
                            {{ form_widget(changePasswordForm.newPassword.second, {
                                'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Confirmez votre nouveau mot de passe'}
                            }) }}
                        {% endif %}
                        
                        {{ form_errors(changePasswordForm.newPassword.second) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-save me-2\"></i>
                        {% if mustChangePassword %}
                            Définir mon mot de passe
                        {% else %}
                            Changer le mot de passe
                        {% endif %}
                    </button>

                    <div class=\"text-center mt-3\">
                        <a href=\"{{ path('marketplace_home') }}\" class=\"text-decoration-none small\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour à l'accueil
                        </a>
                    </div>
                {{ form_end(changePasswordForm) }}

                <hr class=\"my-4\">

                <div class=\"text-center\">
                    <p class=\"small text-muted mb-0\">
                        <i class=\"fas fa-shield-alt me-1 text-success\"></i>
                        Votre mot de passe est sécurisé et chiffré
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .alert {
        border-left: 4px solid;
        margin-bottom: 1.5rem;
    }
    .alert-warning {
        border-left-color: #ffc107;
    }
    .alert-danger {
        border-left-color: #dc3545;
    }
    .alert-success {
        border-left-color: #28a745;
    }
    .alert-info {
        border-left-color: #17a2b8;
    }
    .btn-close:focus {
        box-shadow: none;
    }
    .mb-4 {
        margin-bottom: 1.5rem !important;
    }
    .form-control-lg {
        font-size: 1rem;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        border: 1px solid #dee2e6;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        background: #f8f9fa;
        width: 100%;
        display: block;
    }
    .form-control-lg:hover {
        background: #ffffff;
    }
    .form-control-lg:focus {
        background: #ffffff;
        border-color: #0463f1;
        box-shadow: 0 0 0 0.2rem rgba(4, 99, 241, 0.15);
    }
    .form-text {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 0.25rem;
    }
    .form-label {
        font-size: 0.9rem;
        color: #2c3e50;
        margin-bottom: 0.5rem;
        display: block;
        font-weight: 600;
    }
    .btn-primary {
        background: #0463f1;
        border: none;
        transition: all 0.3s;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        font-size: 1rem;
    }
    .btn-primary:hover {
        background: #0352c9;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(4, 99, 241, 0.25);
    }
    .card {
        background: #ffffff;
        border-radius: 1rem;
    }
    .card-body {
        padding: 2.5rem !important;
    }
    @media (max-width: 576px) {
        .card-body {
            padding: 1.5rem !important;
        }
    }
</style>
{% endblock %}", "marketplace/auth/change_password.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\auth\\change_password.html.twig");
    }
}
