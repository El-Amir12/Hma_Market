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

/* marketplace/auth/login.html.twig */
class __TwigTemplate_9c785d5b99b773d3e37b3c952c3b94e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/login.html.twig"));

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

        yield "Connexion client - HMA Market";
        
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
                    <i class=\"fas fa-store fa-3x text-primary mb-3\"></i>
                    <h3 class=\"fw-bold\">Connexion</h3>
                    <p class=\"text-muted\">Connectez-vous pour accéder à votre compte</p>
                </div>

                ";
        // line 18
        yield "                ";
        $context["login_error"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "get", ["_login_error"], "method", false, false, false, 18);
        // line 19
        yield "                ";
        if ((($tmp = (isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                    <div class=\"alert alert-";
            if (((CoreExtension::inFilter("bloqué", (isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 20, $this->source); })())) || CoreExtension::inFilter("Bloqué", (isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 20, $this->source); })()))) || CoreExtension::inFilter("blocage", (isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 20, $this->source); })())))) {
                yield "danger";
            } else {
                yield "warning";
            }
            yield " alert-dismissible fade show rounded-3\" role=\"alert\">
                        <i class=\"fas fa-";
            // line 21
            if ((CoreExtension::inFilter("bloqué", (isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 21, $this->source); })())) || CoreExtension::inFilter("Bloqué", (isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 21, $this->source); })())))) {
                yield "exclamation-circle";
            } else {
                yield "exclamation-triangle";
            }
            yield " me-2\"></i>
                        ";
            // line 22
            yield (isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 22, $this->source); })());
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                    ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "remove", ["_login_error"], "method", false, false, false, 25), "html", null, true);
            yield "
                ";
        }
        // line 27
        yield "
                ";
        // line 29
        yield "                ";
        $context["force_change_password"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "get", ["_force_change_password"], "method", false, false, false, 29);
        // line 30
        yield "                ";
        if ((($tmp = (isset($context["force_change_password"]) || array_key_exists("force_change_password", $context) ? $context["force_change_password"] : (function () { throw new RuntimeError('Variable "force_change_password" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                    <div class=\"alert alert-warning rounded-3\" role=\"alert\">
                        <i class=\"fas fa-lock me-2\"></i>
                        <strong>🔒 Sécurité :</strong> Vous devez changer votre mot de passe temporaire avant de continuer.
                    </div>
                    ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "remove", ["_force_change_password"], "method", false, false, false, 35), "html", null, true);
            yield "
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
        // line 50
        yield "                ";
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                    <div class=\"alert alert-danger rounded-3\" role=\"alert\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageKey", [], "any", false, false, false, 53), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageData", [], "any", false, false, false, 53), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 56
        yield "
                ";
        // line 58
        yield "                ";
        if (((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 58, $this->source); })()) && CoreExtension::inFilter("activer", Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 58, $this->source); })()), "messageKey", [], "any", false, false, false, 58))))) {
            // line 59
            yield "                    <div class=\"alert alert-warning rounded-3\" role=\"alert\">
                        <i class=\"fas fa-envelope me-2\"></i>
                        <strong>Compte non activé :</strong> Vérifiez votre email ou 
                        <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_resend_verification", ["email" => (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 62, $this->source); })())]), "html", null, true);
            yield "\" class=\"alert-link fw-bold\">
                            renvoyer l'email de vérification
                        </a>
                    </div>
                ";
        }
        // line 67
        yield "
                <form method=\"post\" action=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
        yield "\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Email</label>
                        <input type=\"email\" 
                               name=\"email\" 
                               class=\"form-control form-control-lg\" 
                               value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "\" 
                               placeholder=\"votre@email.com\"
                               required 
                               autofocus>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Mot de passe</label>
                        <input type=\"password\" 
                               name=\"password\" 
                               class=\"form-control form-control-lg\" 
                               placeholder=\"••••••••\"
                               required>
                    </div>

                    <div class=\"mb-3 d-flex justify-content-between align-items-center\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" 
                                   name=\"_remember_me\" 
                                   class=\"form-check-input\" 
                                   id=\"rememberMe\">
                            <label class=\"form-check-label\" for=\"rememberMe\">Se souvenir de moi</label>
                        </div>
                        <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_forgot_password");
        yield "\" class=\"text-decoration-none small\">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter
                    </button>

                    <div class=\"text-center mt-3\">
                        <p class=\"text-muted small\">
                            Pas encore de compte ? 
                            <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_register");
        yield "\" class=\"text-primary fw-semibold\">
                                Inscrivez-vous
                            </a>
                        </p>
                    </div>
                </form>

                <hr class=\"my-4\">

                <div class=\"text-center\">
                    <p class=\"small text-muted mb-0\">
                        <i class=\"fas fa-shield-alt me-1 text-success\"></i>
                        Connexion sécurisée
                        <span class=\"mx-2\">•</span>
                        <i class=\"fas fa-clock me-1\"></i>
                        5 tentatives avant blocage
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .alert {
        border-left: 4px solid;
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
        return "marketplace/auth/login.html.twig";
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
        return array (  305 => 111,  290 => 99,  264 => 76,  254 => 69,  250 => 68,  247 => 67,  239 => 62,  234 => 59,  231 => 58,  228 => 56,  222 => 53,  218 => 51,  215 => 50,  212 => 48,  206 => 47,  196 => 43,  184 => 42,  179 => 41,  174 => 40,  169 => 39,  166 => 37,  161 => 35,  155 => 31,  152 => 30,  149 => 29,  146 => 27,  141 => 25,  135 => 22,  127 => 21,  118 => 20,  115 => 19,  112 => 18,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/auth/login.html.twig #}
{% extends 'base_marketplace.html.twig' %}

{% block title %}Connexion client - HMA Market{% endblock %}

{% block body %}
<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-6 col-lg-5\">
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-body p-5\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-store fa-3x text-primary mb-3\"></i>
                    <h3 class=\"fw-bold\">Connexion</h3>
                    <p class=\"text-muted\">Connectez-vous pour accéder à votre compte</p>
                </div>

                {# ✅ Message d'erreur personnalisé (tentatives, blocage) #}
                {% set login_error = app.session.get('_login_error') %}
                {% if login_error %}
                    <div class=\"alert alert-{% if 'bloqué' in login_error or 'Bloqué' in login_error or 'blocage' in login_error %}danger{% else %}warning{% endif %} alert-dismissible fade show rounded-3\" role=\"alert\">
                        <i class=\"fas fa-{% if 'bloqué' in login_error or 'Bloqué' in login_error %}exclamation-circle{% else %}exclamation-triangle{% endif %} me-2\"></i>
                        {{ login_error|raw }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                    {{ app.session.remove('_login_error') }}
                {% endif %}

                {# ✅ Message de changement de mot de passe obligatoire #}
                {% set force_change_password = app.session.get('_force_change_password') %}
                {% if force_change_password %}
                    <div class=\"alert alert-warning rounded-3\" role=\"alert\">
                        <i class=\"fas fa-lock me-2\"></i>
                        <strong>🔒 Sécurité :</strong> Vous devez changer votre mot de passe temporaire avant de continuer.
                    </div>
                    {{ app.session.remove('_force_change_password') }}
                {% endif %}

                {# Flash messages (pour les autres messages) #}
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} alert-dismissible fade show rounded-3\" role=\"alert\">
                            <i class=\"fas fa-{% if label == 'success' %}check-circle{% elseif label == 'danger' %}exclamation-circle{% elseif label == 'warning' %}exclamation-triangle{% else %}info-circle{% endif %} me-2\"></i>
                            {{ message|raw }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}

                {# Erreur de connexion Symfony #}
                {% if error %}
                    <div class=\"alert alert-danger rounded-3\" role=\"alert\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}

                {# ✅ Message spécifique pour compte non activé #}
                {% if error and 'activer' in error.messageKey|lower %}
                    <div class=\"alert alert-warning rounded-3\" role=\"alert\">
                        <i class=\"fas fa-envelope me-2\"></i>
                        <strong>Compte non activé :</strong> Vérifiez votre email ou 
                        <a href=\"{{ path('marketplace_resend_verification', {email: last_username}) }}\" class=\"alert-link fw-bold\">
                            renvoyer l'email de vérification
                        </a>
                    </div>
                {% endif %}

                <form method=\"post\" action=\"{{ path('marketplace_login') }}\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Email</label>
                        <input type=\"email\" 
                               name=\"email\" 
                               class=\"form-control form-control-lg\" 
                               value=\"{{ last_username }}\" 
                               placeholder=\"votre@email.com\"
                               required 
                               autofocus>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Mot de passe</label>
                        <input type=\"password\" 
                               name=\"password\" 
                               class=\"form-control form-control-lg\" 
                               placeholder=\"••••••••\"
                               required>
                    </div>

                    <div class=\"mb-3 d-flex justify-content-between align-items-center\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" 
                                   name=\"_remember_me\" 
                                   class=\"form-check-input\" 
                                   id=\"rememberMe\">
                            <label class=\"form-check-label\" for=\"rememberMe\">Se souvenir de moi</label>
                        </div>
                        <a href=\"{{ path('marketplace_forgot_password') }}\" class=\"text-decoration-none small\">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter
                    </button>

                    <div class=\"text-center mt-3\">
                        <p class=\"text-muted small\">
                            Pas encore de compte ? 
                            <a href=\"{{ path('marketplace_register') }}\" class=\"text-primary fw-semibold\">
                                Inscrivez-vous
                            </a>
                        </p>
                    </div>
                </form>

                <hr class=\"my-4\">

                <div class=\"text-center\">
                    <p class=\"small text-muted mb-0\">
                        <i class=\"fas fa-shield-alt me-1 text-success\"></i>
                        Connexion sécurisée
                        <span class=\"mx-2\">•</span>
                        <i class=\"fas fa-clock me-1\"></i>
                        5 tentatives avant blocage
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .alert {
        border-left: 4px solid;
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
</style>
{% endblock %}", "marketplace/auth/login.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\auth\\login.html.twig");
    }
}
