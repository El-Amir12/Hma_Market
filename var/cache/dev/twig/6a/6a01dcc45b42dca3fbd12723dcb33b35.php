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

/* security/login.html.twig */
class __TwigTemplate_d9e840e26a9c055e863bae08485bde61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Connexion - HMA Market";
        
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
        yield "    ";
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        // line 12
        yield "    
    ";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "        <div class=\"alert alert-info\">
            <i class=\"fas fa-info-circle me-2\"></i>
            Vous êtes connecté en tant que ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "userIdentifier", [], "any", false, false, false, 16), "html", null, true);
            yield ", 
            <a href=\"";
            // line 17
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"alert-link\">Déconnexion</a>
        </div>
    ";
        }
        // line 20
        yield "    
    <form method=\"post\">
        <div class=\"mb-4\">
            <label for=\"inputEmail\" class=\"form-label fw-semibold\">
                <i class=\"fas fa-envelope me-1\"></i> Email
            </label>
            <input type=\"email\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" 
                   class=\"form-control\" 
                   placeholder=\"exemple@email.com\"
                   autocomplete=\"email\" required autofocus>
        </div>
        
        <div class=\"mb-4\">
            <label for=\"inputPassword\" class=\"form-label fw-semibold\">
                <i class=\"fas fa-lock me-1\"></i> Mot de passe
            </label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" 
                   class=\"form-control\" 
                   placeholder=\"Votre mot de passe\"
                   autocomplete=\"current-password\" required>
        </div>
        
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
        
        <div class=\"mb-4\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"rememberMe\">
                <label class=\"form-check-label\" for=\"rememberMe\">
                    Se souvenir de moi
                </label>
            </div>
        </div>
        
        <div class=\"mb-4\">
            <button class=\"btn btn-primary w-100 py-2\" type=\"submit\">
                <i class=\"fas fa-sign-in-alt me-2\"></i> Se connecter
            </button>
        </div>
        
        <div class=\"text-center mb-3\">
            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"text-decoration-none\">
                <i class=\"fas fa-key me-1\"></i> Mot de passe oublié ?
            </a>
        </div>
        
        <hr class=\"my-4\">
        
        <div class=\"text-center\">
            <p class=\"text-muted mb-0\">
                Vous n'avez pas de compte ? 
                <a href=\"https://wa.me/2290156139200\" class=\"text-decoration-none fw-semibold\">Contactez l'administrateur</a>
            </p>
        </div>
    </form>
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
        return "security/login.html.twig";
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
        return array (  180 => 60,  159 => 42,  140 => 26,  132 => 20,  126 => 17,  122 => 16,  118 => 14,  116 => 13,  113 => 12,  106 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-auth.html.twig' %}

{% block title %}Connexion - HMA Market{% endblock %}

{% block body %}
    {% if error %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ error.messageKey|trans(error.messageData, 'security') }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endif %}
    
    {% if app.user %}
        <div class=\"alert alert-info\">
            <i class=\"fas fa-info-circle me-2\"></i>
            Vous êtes connecté en tant que {{ app.user.userIdentifier }}, 
            <a href=\"{{ path('app_logout') }}\" class=\"alert-link\">Déconnexion</a>
        </div>
    {% endif %}
    
    <form method=\"post\">
        <div class=\"mb-4\">
            <label for=\"inputEmail\" class=\"form-label fw-semibold\">
                <i class=\"fas fa-envelope me-1\"></i> Email
            </label>
            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" 
                   class=\"form-control\" 
                   placeholder=\"exemple@email.com\"
                   autocomplete=\"email\" required autofocus>
        </div>
        
        <div class=\"mb-4\">
            <label for=\"inputPassword\" class=\"form-label fw-semibold\">
                <i class=\"fas fa-lock me-1\"></i> Mot de passe
            </label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" 
                   class=\"form-control\" 
                   placeholder=\"Votre mot de passe\"
                   autocomplete=\"current-password\" required>
        </div>
        
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        
        <div class=\"mb-4\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"rememberMe\">
                <label class=\"form-check-label\" for=\"rememberMe\">
                    Se souvenir de moi
                </label>
            </div>
        </div>
        
        <div class=\"mb-4\">
            <button class=\"btn btn-primary w-100 py-2\" type=\"submit\">
                <i class=\"fas fa-sign-in-alt me-2\"></i> Se connecter
            </button>
        </div>
        
        <div class=\"text-center mb-3\">
            <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-decoration-none\">
                <i class=\"fas fa-key me-1\"></i> Mot de passe oublié ?
            </a>
        </div>
        
        <hr class=\"my-4\">
        
        <div class=\"text-center\">
            <p class=\"text-muted mb-0\">
                Vous n'avez pas de compte ? 
                <a href=\"https://wa.me/2290156139200\" class=\"text-decoration-none fw-semibold\">Contactez l'administrateur</a>
            </p>
        </div>
    </form>
{% endblock %}", "security/login.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\security\\login.html.twig");
    }
}
