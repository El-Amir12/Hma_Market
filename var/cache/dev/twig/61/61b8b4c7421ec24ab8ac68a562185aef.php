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

/* marketplace/auth/reset_password.html.twig */
class __TwigTemplate_36d2d5ba9697c318ac87b53370343f69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/reset_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/reset_password.html.twig"));

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

        yield "Réinitialiser le mot de passe - HMA Market";
        
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
                    <i class=\"fas fa-lock fa-3x text-primary mb-3\"></i>
                    <h3 class=\"fw-bold\">Nouveau mot de passe</h3>
                    <p class=\"text-muted\">Créez un nouveau mot de passe sécurisé</p>
                </div>

                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 18
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-3\" role=\"alert\">
                            <i class=\"fas fa-";
                // line 20
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } elseif (($context["label"] == "danger")) {
                    yield "exclamation-circle";
                } else {
                    yield "info-circle";
                }
                yield " me-2\"></i>
                            ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
                <form method=\"post\">
                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-key me-2 text-primary\"></i>Nouveau mot de passe
                        </label>
                        <input type=\"password\" 
                               id=\"password\" 
                               name=\"password\" 
                               class=\"form-control form-control-lg\" 
                               placeholder=\"Minimum 8 caractères\" 
                               required 
                               minlength=\"8\">
                        <div class=\"form-text text-muted small mt-1\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Le mot de passe doit contenir au moins 8 caractères
                        </div>
                    </div>

                    <div class=\"mb-4\">
                        <label for=\"confirm_password\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-check-circle me-2 text-primary\"></i>Confirmer le mot de passe
                        </label>
                        <input type=\"password\" 
                               id=\"confirm_password\" 
                               name=\"confirm_password\" 
                               class=\"form-control form-control-lg\" 
                               placeholder=\"Confirmez votre mot de passe\" 
                               required>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100 py-3 fw-semibold\">
                        <i class=\"fas fa-save me-2\"></i>Réinitialiser le mot de passe
                    </button>

                    <div class=\"text-center mt-4\">
                        <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour à la connexion
                        </a>
                    </div>
                </form>
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
        return "marketplace/auth/reset_password.html.twig";
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
        return array (  190 => 62,  152 => 26,  146 => 25,  136 => 21,  126 => 20,  121 => 19,  116 => 18,  112 => 17,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/auth/reset_password.html.twig #}
{% extends 'base_marketplace.html.twig' %}

{% block title %}Réinitialiser le mot de passe - HMA Market{% endblock %}

{% block body %}
<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-6 col-lg-5\">
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-body p-5\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-lock fa-3x text-primary mb-3\"></i>
                    <h3 class=\"fw-bold\">Nouveau mot de passe</h3>
                    <p class=\"text-muted\">Créez un nouveau mot de passe sécurisé</p>
                </div>

                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} alert-dismissible fade show rounded-3\" role=\"alert\">
                            <i class=\"fas fa-{% if label == 'success' %}check-circle{% elseif label == 'danger' %}exclamation-circle{% else %}info-circle{% endif %} me-2\"></i>
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}

                <form method=\"post\">
                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-key me-2 text-primary\"></i>Nouveau mot de passe
                        </label>
                        <input type=\"password\" 
                               id=\"password\" 
                               name=\"password\" 
                               class=\"form-control form-control-lg\" 
                               placeholder=\"Minimum 8 caractères\" 
                               required 
                               minlength=\"8\">
                        <div class=\"form-text text-muted small mt-1\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Le mot de passe doit contenir au moins 8 caractères
                        </div>
                    </div>

                    <div class=\"mb-4\">
                        <label for=\"confirm_password\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-check-circle me-2 text-primary\"></i>Confirmer le mot de passe
                        </label>
                        <input type=\"password\" 
                               id=\"confirm_password\" 
                               name=\"confirm_password\" 
                               class=\"form-control form-control-lg\" 
                               placeholder=\"Confirmez votre mot de passe\" 
                               required>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100 py-3 fw-semibold\">
                        <i class=\"fas fa-save me-2\"></i>Réinitialiser le mot de passe
                    </button>

                    <div class=\"text-center mt-4\">
                        <a href=\"{{ path('marketplace_login') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour à la connexion
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "marketplace/auth/reset_password.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\auth\\reset_password.html.twig");
    }
}
