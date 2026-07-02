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
class __TwigTemplate_214c36468bdcaf7594140ed7938c8367 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 19
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-3\" role=\"alert\">
                            <i class=\"fas fa-";
                // line 21
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
                // line 22
                yield $context["message"];
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
                ";
        // line 29
        yield "                ";
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                    <div class=\"alert alert-danger rounded-3\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageKey", [], "any", false, false, false, 32), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageData", [], "any", false, false, false, 32), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 35
        yield "
                ";
        // line 37
        yield "                ";
        if (((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })()) && CoreExtension::inFilter("activer", Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })()), "messageKey", [], "any", false, false, false, 37))))) {
            // line 38
            yield "                    <div class=\"alert alert-warning rounded-3\">
                        <i class=\"fas fa-envelope me-2\"></i>
                        <strong>Compte non activé :</strong> Vérifiez votre email ou 
                        <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_resend_verification", ["email" => (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 41, $this->source); })())]), "html", null, true);
            yield "\" class=\"alert-link fw-bold\">
                            renvoyer l'email de vérification
                        </a>
                    </div>
                ";
        }
        // line 46
        yield "
                <form method=\"post\" action=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
        yield "\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Email</label>
                        <input type=\"email\" 
                               name=\"email\" 
                               class=\"form-control form-control-lg\" 
                               value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 55, $this->source); })()), "html", null, true);
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
        // line 78
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
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_register");
        yield "\" class=\"text-primary fw-semibold\">
                                Inscrivez-vous
                            </a>
                        </p>
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
        return array (  248 => 90,  233 => 78,  207 => 55,  197 => 48,  193 => 47,  190 => 46,  182 => 41,  177 => 38,  174 => 37,  171 => 35,  165 => 32,  161 => 30,  158 => 29,  155 => 27,  149 => 26,  139 => 22,  127 => 21,  122 => 20,  117 => 19,  112 => 18,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
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

                {# Erreur de connexion #}
                {% if error %}
                    <div class=\"alert alert-danger rounded-3\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}

                {# ✅ Message spécifique pour compte non activé #}
                {% if error and 'activer' in error.messageKey|lower %}
                    <div class=\"alert alert-warning rounded-3\">
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
            </div>
        </div>
    </div>
</div>
{% endblock %}", "marketplace/auth/login.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\auth\\login.html.twig");
    }
}
