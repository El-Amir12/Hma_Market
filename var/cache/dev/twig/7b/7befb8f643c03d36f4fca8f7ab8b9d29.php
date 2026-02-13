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
class __TwigTemplate_88085973c1dac52de325e29bd65add67 extends Template
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
        yield "<div class=\"row g-4\">
    <!-- Formulaire de Connexion -->
    <div class=\"col-lg-6\">
        <div class=\"form-container\">
            <div class=\"text-center mb-4\">
                <h2 class=\"fw-bold mb-3\">
                    <i class=\"fas fa-sign-in-alt me-2 text-primary\"></i>Connexion
                </h2>
                <p class=\"text-muted\">Accédez à votre tableau de bord HMA Market</p>
            </div>
            
            ";
        // line 17
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageKey", [], "any", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageData", [], "any", false, false, false, 20), "security"), "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
            ";
        }
        // line 24
        yield "            
            ";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "            <div class=\"alert alert-info\">
                <i class=\"fas fa-info-circle me-2\"></i>
                Vous êtes connecté en tant que <strong>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "userIdentifier", [], "any", false, false, false, 28), "html", null, true);
            yield "</strong>
                <a href=\"";
            // line 29
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"alert-link ms-2\">Déconnexion</a>
            </div>
            ";
        }
        // line 32
        yield "            
            <form method=\"post\">
                <div class=\"mb-4\">
                    <label for=\"inputEmail\" class=\"form-label\">
                        <i class=\"fas fa-envelope me-2 text-primary\"></i>Email professionnel
                    </label>
                    <input type=\"email\" 
                           value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "\" 
                           name=\"email\" 
                           id=\"inputEmail\" 
                           class=\"form-control\" 
                           placeholder=\"exemple@votre-entreprise.com\"
                           autocomplete=\"email\" 
                           required 
                           autofocus>
                </div>
                
                <div class=\"mb-4\">
                    <div class=\"d-flex justify-content-between align-items-center mb-2\">
                        <label for=\"inputPassword\" class=\"form-label\">
                            <i class=\"fas fa-lock me-2 text-primary\"></i>Mot de passe
                        </label>
                        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"text-decoration-none small\">
                            <i class=\"fas fa-key me-1\"></i>Mot de passe oublié ?
                        </a>
                    </div>
                    <input type=\"password\" 
                           name=\"password\" 
                           id=\"inputPassword\" 
                           class=\"form-control\" 
                           placeholder=\"Votre mot de passe\"
                           autocomplete=\"current-password\" 
                           required>
                </div>
                
                <div class=\"mb-4\">
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"rememberMe\">
                        <label class=\"form-check-label\" for=\"rememberMe\">
                            Se souvenir de moi pendant 30 jours
                        </label>
                    </div>
                </div>
                
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                
                <div class=\"mb-4\">
                    <button class=\"btn btn-primary w-100 py-3 fw-semibold\" type=\"submit\">
                        <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter à mon compte
                    </button>
                </div>
                
                <div class=\"text-center mb-4\">
                    <p class=\"text-muted mb-0\">
                        Vous n'avez pas de compte ? 
                        <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-decoration-none fw-semibold\">
                            Créer un compte entreprise
                        </a>
                    </p>
                </div>
            </form>
            
            <hr class=\"my-4\">
            
            <div class=\"text-center\">
                <p class=\"small text-muted mb-0\">
                    <i class=\"fas fa-shield-alt me-1 text-success\"></i>
                    Connexion sécurisée avec chiffrement SSL
                </p>
            </div>
        </div>
    </div>
    
    <!-- Informations HMA Market -->
    <div class=\"col-lg-6\">
        <div class=\"info-container\">
            <div class=\"text-center mb-5\">
                <h3 class=\"fw-bold mb-3\">
                    <i class=\"fas fa-store me-2\"></i>Pourquoi choisir HMA Market ?
                </h3>
                <p class=\"text-muted\">La solution complète pour la gestion de votre entreprise</p>
            </div>
            
            <!-- Features Grid -->
            <div class=\"row g-3 mb-5\">
                <div class=\"col-md-6\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-chart-line\"></i>
                        </div>
                        <h5 class=\"fw-semibold mb-2\">Croissance garantie</h5>
                        <p class=\"text-muted small mb-0\">
                            Boostez vos ventes de 30% avec nos outils d'analyse
                        </p>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-clock\"></i>
                        </div>
                        <h5 class=\"fw-semibold mb-2\">Gain de temps</h5>
                        <p class=\"text-muted small mb-0\">
                            Automatisez 80% de vos tâches administratives
                        </p>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-mobile-alt\"></i>
                        </div>
                        <h5 class=\"fw-semibold mb-2\">Mobile First</h5>
                        <p class=\"text-muted small mb-0\">
                            Gérez votre entreprise depuis votre téléphone
                        </p>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-headset\"></i>
                        </div>
                        <h5 class=\"fw-semibold mb-2\">Support 7j/7</h5>
                        <p class=\"text-muted small mb-0\">
                            Notre équipe vous accompagne à chaque étape
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial -->
            <div class=\"testimonial-card mb-4\">
                <div class=\"d-flex align-items-start mb-3\">
                    <div class=\"avatar me-3\">
                        <div class=\"avatar-initials\">AK</div>
                    </div>
                    <div>
                        <h6 class=\"fw-semibold mb-1\">Amiral Kouassi</h6>
                        <p class=\"text-muted small mb-0\">CEO, Tech Solutions Inc.</p>
                    </div>
                </div>
                <p class=\"mb-0\">
                    <i class=\"fas fa-quote-left text-primary me-2\"></i>
                    HMA Market a transformé notre gestion quotidienne. L'interface est intuitive et le support exceptionnel.
                </p>
            </div>
            
            <!-- Stats -->
            <div class=\"row g-3 text-center\">
                <div class=\"col-4\">
                    <div class=\"bg-white p-3 rounded-3\">
                        <h4 class=\"fw-bold text-primary mb-1\">500+</h4>
                        <p class=\"small text-muted mb-0\">Entreprises</p>
                    </div>
                </div>
                <div class=\"col-4\">
                    <div class=\"bg-white p-3 rounded-3\">
                        <h4 class=\"fw-bold text-success mb-1\">99.9%</h4>
                        <p class=\"small text-muted mb-0\">Disponibilité</p>
                    </div>
                </div>
                <div class=\"col-4\">
                    <div class=\"bg-white p-3 rounded-3\">
                        <h4 class=\"fw-bold text-warning mb-1\">24/7</h4>
                        <p class=\"small text-muted mb-0\">Support</p>
                    </div>
                </div>
            </div>
            
            <!-- CTA -->
            <div class=\"text-center mt-5\">
                <a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-outline-primary px-4 py-3 fw-semibold\">
                    <i class=\"fas fa-rocket me-2\"></i>Essai gratuit 14 jours
                </a>
                <p class=\"small text-muted mt-2 mb-0\">
                    Aucune carte de crédit requise • Annulation à tout moment
                </p>
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
        return array (  334 => 207,  211 => 87,  197 => 76,  172 => 54,  154 => 39,  145 => 32,  139 => 29,  135 => 28,  131 => 26,  129 => 25,  126 => 24,  119 => 20,  115 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-auth.html.twig' %}

{% block title %}Connexion - HMA Market{% endblock %}

{% block body %}
<div class=\"row g-4\">
    <!-- Formulaire de Connexion -->
    <div class=\"col-lg-6\">
        <div class=\"form-container\">
            <div class=\"text-center mb-4\">
                <h2 class=\"fw-bold mb-3\">
                    <i class=\"fas fa-sign-in-alt me-2 text-primary\"></i>Connexion
                </h2>
                <p class=\"text-muted\">Accédez à votre tableau de bord HMA Market</p>
            </div>
            
            {% if error %}
            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                {{ error.messageKey|trans(error.messageData, 'security') }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
            {% endif %}
            
            {% if app.user %}
            <div class=\"alert alert-info\">
                <i class=\"fas fa-info-circle me-2\"></i>
                Vous êtes connecté en tant que <strong>{{ app.user.userIdentifier }}</strong>
                <a href=\"{{ path('app_logout') }}\" class=\"alert-link ms-2\">Déconnexion</a>
            </div>
            {% endif %}
            
            <form method=\"post\">
                <div class=\"mb-4\">
                    <label for=\"inputEmail\" class=\"form-label\">
                        <i class=\"fas fa-envelope me-2 text-primary\"></i>Email professionnel
                    </label>
                    <input type=\"email\" 
                           value=\"{{ last_username }}\" 
                           name=\"email\" 
                           id=\"inputEmail\" 
                           class=\"form-control\" 
                           placeholder=\"exemple@votre-entreprise.com\"
                           autocomplete=\"email\" 
                           required 
                           autofocus>
                </div>
                
                <div class=\"mb-4\">
                    <div class=\"d-flex justify-content-between align-items-center mb-2\">
                        <label for=\"inputPassword\" class=\"form-label\">
                            <i class=\"fas fa-lock me-2 text-primary\"></i>Mot de passe
                        </label>
                        <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-decoration-none small\">
                            <i class=\"fas fa-key me-1\"></i>Mot de passe oublié ?
                        </a>
                    </div>
                    <input type=\"password\" 
                           name=\"password\" 
                           id=\"inputPassword\" 
                           class=\"form-control\" 
                           placeholder=\"Votre mot de passe\"
                           autocomplete=\"current-password\" 
                           required>
                </div>
                
                <div class=\"mb-4\">
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"rememberMe\">
                        <label class=\"form-check-label\" for=\"rememberMe\">
                            Se souvenir de moi pendant 30 jours
                        </label>
                    </div>
                </div>
                
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                
                <div class=\"mb-4\">
                    <button class=\"btn btn-primary w-100 py-3 fw-semibold\" type=\"submit\">
                        <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter à mon compte
                    </button>
                </div>
                
                <div class=\"text-center mb-4\">
                    <p class=\"text-muted mb-0\">
                        Vous n'avez pas de compte ? 
                        <a href=\"{{ path('app_register') }}\" class=\"text-decoration-none fw-semibold\">
                            Créer un compte entreprise
                        </a>
                    </p>
                </div>
            </form>
            
            <hr class=\"my-4\">
            
            <div class=\"text-center\">
                <p class=\"small text-muted mb-0\">
                    <i class=\"fas fa-shield-alt me-1 text-success\"></i>
                    Connexion sécurisée avec chiffrement SSL
                </p>
            </div>
        </div>
    </div>
    
    <!-- Informations HMA Market -->
    <div class=\"col-lg-6\">
        <div class=\"info-container\">
            <div class=\"text-center mb-5\">
                <h3 class=\"fw-bold mb-3\">
                    <i class=\"fas fa-store me-2\"></i>Pourquoi choisir HMA Market ?
                </h3>
                <p class=\"text-muted\">La solution complète pour la gestion de votre entreprise</p>
            </div>
            
            <!-- Features Grid -->
            <div class=\"row g-3 mb-5\">
                <div class=\"col-md-6\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-chart-line\"></i>
                        </div>
                        <h5 class=\"fw-semibold mb-2\">Croissance garantie</h5>
                        <p class=\"text-muted small mb-0\">
                            Boostez vos ventes de 30% avec nos outils d'analyse
                        </p>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-clock\"></i>
                        </div>
                        <h5 class=\"fw-semibold mb-2\">Gain de temps</h5>
                        <p class=\"text-muted small mb-0\">
                            Automatisez 80% de vos tâches administratives
                        </p>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-mobile-alt\"></i>
                        </div>
                        <h5 class=\"fw-semibold mb-2\">Mobile First</h5>
                        <p class=\"text-muted small mb-0\">
                            Gérez votre entreprise depuis votre téléphone
                        </p>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-headset\"></i>
                        </div>
                        <h5 class=\"fw-semibold mb-2\">Support 7j/7</h5>
                        <p class=\"text-muted small mb-0\">
                            Notre équipe vous accompagne à chaque étape
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial -->
            <div class=\"testimonial-card mb-4\">
                <div class=\"d-flex align-items-start mb-3\">
                    <div class=\"avatar me-3\">
                        <div class=\"avatar-initials\">AK</div>
                    </div>
                    <div>
                        <h6 class=\"fw-semibold mb-1\">Amiral Kouassi</h6>
                        <p class=\"text-muted small mb-0\">CEO, Tech Solutions Inc.</p>
                    </div>
                </div>
                <p class=\"mb-0\">
                    <i class=\"fas fa-quote-left text-primary me-2\"></i>
                    HMA Market a transformé notre gestion quotidienne. L'interface est intuitive et le support exceptionnel.
                </p>
            </div>
            
            <!-- Stats -->
            <div class=\"row g-3 text-center\">
                <div class=\"col-4\">
                    <div class=\"bg-white p-3 rounded-3\">
                        <h4 class=\"fw-bold text-primary mb-1\">500+</h4>
                        <p class=\"small text-muted mb-0\">Entreprises</p>
                    </div>
                </div>
                <div class=\"col-4\">
                    <div class=\"bg-white p-3 rounded-3\">
                        <h4 class=\"fw-bold text-success mb-1\">99.9%</h4>
                        <p class=\"small text-muted mb-0\">Disponibilité</p>
                    </div>
                </div>
                <div class=\"col-4\">
                    <div class=\"bg-white p-3 rounded-3\">
                        <h4 class=\"fw-bold text-warning mb-1\">24/7</h4>
                        <p class=\"small text-muted mb-0\">Support</p>
                    </div>
                </div>
            </div>
            
            <!-- CTA -->
            <div class=\"text-center mt-5\">
                <a href=\"{{ path('app_register') }}\" class=\"btn btn-outline-primary px-4 py-3 fw-semibold\">
                    <i class=\"fas fa-rocket me-2\"></i>Essai gratuit 14 jours
                </a>
                <p class=\"small text-muted mt-2 mb-0\">
                    Aucune carte de crédit requise • Annulation à tout moment
                </p>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "security/login.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\security\\login.html.twig");
    }
}
