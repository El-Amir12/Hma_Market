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

/* sale/orders/contact.html.twig */
class __TwigTemplate_876a7bd8fdde0f05e5faa1bcfcbf68db extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/contact.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
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

        yield "Contacter le support - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    :root { --primary-color: #0463f1; --success-color: #25D366; }
    
    .contact-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 24px;
        padding: 2rem;
        margin-bottom: 2rem;
        color: white;
        text-align: center;
    }
    
    .contact-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    }
    
    .admin-avatar {
        width: 120px;
        height: 120px;
        border-radius: 60px;
        object-fit: cover;
        border: 4px solid white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        margin-top: -80px;
        margin-bottom: 1rem;
    }
    
    .whatsapp-btn {
        background: #25D366;
        border: none;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s;
    }
    
    .whatsapp-btn:hover {
        background: #128C7E;
        transform: scale(1.05);
    }
    
    .email-btn {
        background: #ea4335;
        border: none;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s;
    }
    
    .email-btn:hover {
        background: #c5221f;
        transform: scale(1.05);
    }
    
    .info-box {
        background: #f0fdf4;
        border-left: 4px solid #22c55e;
        padding: 1rem;
        border-radius: 12px;
        margin-top: 1.5rem;
    }
    
    .feature-list {
        list-style: none;
        padding: 0;
    }
    
    .feature-list li {
        padding: 0.75rem 0;
        border-bottom: 1px solid #e5e7eb;
        display: flex;
        align-items: center;
    }
    
    .feature-list li:last-child {
        border-bottom: none;
    }
    
    .feature-list li i {
        width: 30px;
        color: #667eea;
        font-size: 1.2rem;
    }
    
    @media (max-width: 768px) {
        .contact-header {
            padding: 1.5rem;
        }
        .admin-avatar {
            width: 80px;
            height: 80px;
            margin-top: -50px;
        }
        .contact-card {
            padding: 1.5rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 119
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

        // line 120
        yield "<div class=\"container py-4\">
    <!-- En-tête -->
    <div class=\"contact-header\">
        <h1 class=\"display-5 fw-bold mb-3\">
            <i class=\"fas fa-headset me-3\"></i>
            Support & Analyse Avancée
        </h1>
        <p class=\"lead mb-0\">
            Bénéficiez d'une analyse approfondie de vos données de vente
        </p>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <!-- Carte Contact Administrateur -->
            <div class=\"contact-card text-center\">
                ";
        // line 136
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["superAdmin"]) || array_key_exists("superAdmin", $context) ? $context["superAdmin"] : (function () { throw new RuntimeError('Variable "superAdmin" does not exist.', 136, $this->source); })()), "photo", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["superAdmin"]) || array_key_exists("superAdmin", $context) ? $context["superAdmin"] : (function () { throw new RuntimeError('Variable "superAdmin" does not exist.', 137, $this->source); })()), "photo", [], "any", false, false, false, 137))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["superAdmin"]) || array_key_exists("superAdmin", $context) ? $context["superAdmin"] : (function () { throw new RuntimeError('Variable "superAdmin" does not exist.', 138, $this->source); })()), "fullName", [], "any", false, false, false, 138), "html", null, true);
            yield "\" 
                         class=\"admin-avatar\">
                ";
        } else {
            // line 141
            yield "                    <div class=\"admin-avatar bg-primary d-flex align-items-center justify-content-center mx-auto\">
                        <i class=\"fas fa-user-tie fa-3x text-white\"></i>
                    </div>
                ";
        }
        // line 145
        yield "                
                <h2 class=\"h3 mb-2\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["superAdmin"] ?? null), "fullName", [], "any", true, true, false, 146)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["superAdmin"]) || array_key_exists("superAdmin", $context) ? $context["superAdmin"] : (function () { throw new RuntimeError('Variable "superAdmin" does not exist.', 146, $this->source); })()), "fullName", [], "any", false, false, false, 146), CoreExtension::getAttribute($this->env, $this->source, (isset($context["superAdmin"]) || array_key_exists("superAdmin", $context) ? $context["superAdmin"] : (function () { throw new RuntimeError('Variable "superAdmin" does not exist.', 146, $this->source); })()), "email", [], "any", false, false, false, 146))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["superAdmin"]) || array_key_exists("superAdmin", $context) ? $context["superAdmin"] : (function () { throw new RuntimeError('Variable "superAdmin" does not exist.', 146, $this->source); })()), "email", [], "any", false, false, false, 146))), "html", null, true);
        yield "</h2>
                <p class=\"text-muted mb-3\">
                    <i class=\"fas fa-shield-alt me-1\"></i> 
                    Super Administrateur
                </p>
                <p class=\"mb-4\">
                    <i class=\"fas fa-envelope me-2 text-muted\"></i> ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["superAdmin"]) || array_key_exists("superAdmin", $context) ? $context["superAdmin"] : (function () { throw new RuntimeError('Variable "superAdmin" does not exist.', 152, $this->source); })()), "email", [], "any", false, false, false, 152), "html", null, true);
        yield "
                    ";
        // line 153
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["superAdmin"]) || array_key_exists("superAdmin", $context) ? $context["superAdmin"] : (function () { throw new RuntimeError('Variable "superAdmin" does not exist.', 153, $this->source); })()), "phone", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 154
            yield "                        <br>
                        <i class=\"fas fa-phone me-2 text-muted\"></i> ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["superAdmin"]) || array_key_exists("superAdmin", $context) ? $context["superAdmin"] : (function () { throw new RuntimeError('Variable "superAdmin" does not exist.', 155, $this->source); })()), "phone", [], "any", false, false, false, 155), "html", null, true);
            yield "
                    ";
        }
        // line 157
        yield "                </p>
                
                <div class=\"d-flex gap-3 justify-content-center flex-wrap\">
                    ";
        // line 160
        if ((($tmp = (isset($context["whatsappUrl"]) || array_key_exists("whatsappUrl", $context) ? $context["whatsappUrl"] : (function () { throw new RuntimeError('Variable "whatsappUrl" does not exist.', 160, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["whatsappUrl"]) || array_key_exists("whatsappUrl", $context) ? $context["whatsappUrl"] : (function () { throw new RuntimeError('Variable "whatsappUrl" does not exist.', 161, $this->source); })()), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn whatsapp-btn text-white\">
                            <i class=\"fab fa-whatsapp me-2 fa-lg\"></i>
                            WhatsApp
                        </a>
                    ";
        }
        // line 166
        yield "                    <a href=\"mailto:";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["superAdmin"]) || array_key_exists("superAdmin", $context) ? $context["superAdmin"] : (function () { throw new RuntimeError('Variable "superAdmin" does not exist.', 166, $this->source); })()), "email", [], "any", false, false, false, 166), "html", null, true);
        yield "\" class=\"btn email-btn text-white\">
                        <i class=\"fas fa-envelope me-2\"></i>
                        Email
                    </a>
                </div>
                
                <div class=\"info-box\">
                    <i class=\"fas fa-clock me-2 text-success\"></i>
                    <strong>Disponibilité :</strong> Réponse sous 24h ouvrées
                </div>
            </div>

            <!-- Carte Services d'analyse -->
            <div class=\"contact-card\">
                <h3 class=\"h4 mb-4\">
                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                    Services d'analyse de données
                </h3>
                
                <ul class=\"feature-list\">
                    <li>
                        <i class=\"fas fa-chart-pie\"></i>
                        <span><strong>Tableaux de bord personnalisés</strong> - Visualisez vos KPIs en temps réel</span>
                    </li>
                    <li>
                        <i class=\"fas fa-trend-up\"></i>
                        <span><strong>Analyse des tendances</strong> - Identifiez les pics de vente et saisonnalités</span>
                    </li>
                    <li>
                        <i class=\"fas fa-boxes\"></i>
                        <span><strong>Analyse du stock</strong> - Optimisez vos réapprovisionnements</span>
                    </li>
                    <li>
                        <i class=\"fas fa-users\"></i>
                        <span><strong>Comportement client</strong> - Analysez la fidélité et le panier moyen</span>
                    </li>
                    <li>
                        <i class=\"fas fa-file-excel\"></i>
                        <span><strong>Rapports sur mesure</strong> - Exports Excel/PDF personnalisés</span>
                    </li>
                    <li>
                        <i class=\"fas fa-robot\"></i>
                        <span><strong>Prédictions de vente</strong> - Anticipez vos ventes futures</span>
                    </li>
                </ul>
                
                <div class=\"alert alert-primary mt-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>Comment ça marche ?</strong><br>
                    Contactez notre Super Admin, partagez vos besoins d'analyse, 
                    et recevez un rapport personnalisé avec des insights exploitables pour votre entreprise.
                </div>
            </div>

            <!-- Carte Ce que vous obtenez -->
            <div class=\"contact-card\">
                <h3 class=\"h4 mb-4\">
                    <i class=\"fas fa-gift text-primary me-2\"></i>
                    Ce que vous obtenez
                </h3>
                
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"fas fa-file-pdf text-danger me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Rapport PDF/Excel</strong>
                                <small class=\"text-muted d-block\">Analyse complète de vos données</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"fas fa-chart-simple text-info me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Tableaux de bord Power BI</strong>
                                <small class=\"text-muted d-block\">Visualisations interactives</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"fas fa-lightbulb text-warning me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Recommandations</strong>
                                <small class=\"text-muted d-block\">Actions concrètes pour améliorer vos ventes</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"fas fa-clock text-success me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Support prioritaire</strong>
                                <small class=\"text-muted d-block\">Réponse rapide et accompagnement</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bouton retour -->
            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 269
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-arrow-left me-2\"></i>
                    Retour à l'historique des ventes
                </a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 279
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 280
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des cartes au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.contact-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease-out';
        observer.observe(card);
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
        return "sale/orders/contact.html.twig";
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
        return array (  456 => 280,  443 => 279,  423 => 269,  316 => 166,  307 => 161,  305 => 160,  300 => 157,  295 => 155,  292 => 154,  290 => 153,  286 => 152,  277 => 146,  274 => 145,  268 => 141,  262 => 138,  257 => 137,  255 => 136,  237 => 120,  224 => 119,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sale/orders/contact.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Contacter le support - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root { --primary-color: #0463f1; --success-color: #25D366; }
    
    .contact-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 24px;
        padding: 2rem;
        margin-bottom: 2rem;
        color: white;
        text-align: center;
    }
    
    .contact-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    }
    
    .admin-avatar {
        width: 120px;
        height: 120px;
        border-radius: 60px;
        object-fit: cover;
        border: 4px solid white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        margin-top: -80px;
        margin-bottom: 1rem;
    }
    
    .whatsapp-btn {
        background: #25D366;
        border: none;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s;
    }
    
    .whatsapp-btn:hover {
        background: #128C7E;
        transform: scale(1.05);
    }
    
    .email-btn {
        background: #ea4335;
        border: none;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s;
    }
    
    .email-btn:hover {
        background: #c5221f;
        transform: scale(1.05);
    }
    
    .info-box {
        background: #f0fdf4;
        border-left: 4px solid #22c55e;
        padding: 1rem;
        border-radius: 12px;
        margin-top: 1.5rem;
    }
    
    .feature-list {
        list-style: none;
        padding: 0;
    }
    
    .feature-list li {
        padding: 0.75rem 0;
        border-bottom: 1px solid #e5e7eb;
        display: flex;
        align-items: center;
    }
    
    .feature-list li:last-child {
        border-bottom: none;
    }
    
    .feature-list li i {
        width: 30px;
        color: #667eea;
        font-size: 1.2rem;
    }
    
    @media (max-width: 768px) {
        .contact-header {
            padding: 1.5rem;
        }
        .admin-avatar {
            width: 80px;
            height: 80px;
            margin-top: -50px;
        }
        .contact-card {
            padding: 1.5rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <!-- En-tête -->
    <div class=\"contact-header\">
        <h1 class=\"display-5 fw-bold mb-3\">
            <i class=\"fas fa-headset me-3\"></i>
            Support & Analyse Avancée
        </h1>
        <p class=\"lead mb-0\">
            Bénéficiez d'une analyse approfondie de vos données de vente
        </p>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <!-- Carte Contact Administrateur -->
            <div class=\"contact-card text-center\">
                {% if superAdmin.photo %}
                    <img src=\"{{ asset('uploads/users/' ~ superAdmin.photo) }}\" 
                         alt=\"{{ superAdmin.fullName }}\" 
                         class=\"admin-avatar\">
                {% else %}
                    <div class=\"admin-avatar bg-primary d-flex align-items-center justify-content-center mx-auto\">
                        <i class=\"fas fa-user-tie fa-3x text-white\"></i>
                    </div>
                {% endif %}
                
                <h2 class=\"h3 mb-2\">{{ superAdmin.fullName|default(superAdmin.email) }}</h2>
                <p class=\"text-muted mb-3\">
                    <i class=\"fas fa-shield-alt me-1\"></i> 
                    Super Administrateur
                </p>
                <p class=\"mb-4\">
                    <i class=\"fas fa-envelope me-2 text-muted\"></i> {{ superAdmin.email }}
                    {% if superAdmin.phone %}
                        <br>
                        <i class=\"fas fa-phone me-2 text-muted\"></i> {{ superAdmin.phone }}
                    {% endif %}
                </p>
                
                <div class=\"d-flex gap-3 justify-content-center flex-wrap\">
                    {% if whatsappUrl %}
                        <a href=\"{{ whatsappUrl }}\" target=\"_blank\" class=\"btn whatsapp-btn text-white\">
                            <i class=\"fab fa-whatsapp me-2 fa-lg\"></i>
                            WhatsApp
                        </a>
                    {% endif %}
                    <a href=\"mailto:{{ superAdmin.email }}\" class=\"btn email-btn text-white\">
                        <i class=\"fas fa-envelope me-2\"></i>
                        Email
                    </a>
                </div>
                
                <div class=\"info-box\">
                    <i class=\"fas fa-clock me-2 text-success\"></i>
                    <strong>Disponibilité :</strong> Réponse sous 24h ouvrées
                </div>
            </div>

            <!-- Carte Services d'analyse -->
            <div class=\"contact-card\">
                <h3 class=\"h4 mb-4\">
                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                    Services d'analyse de données
                </h3>
                
                <ul class=\"feature-list\">
                    <li>
                        <i class=\"fas fa-chart-pie\"></i>
                        <span><strong>Tableaux de bord personnalisés</strong> - Visualisez vos KPIs en temps réel</span>
                    </li>
                    <li>
                        <i class=\"fas fa-trend-up\"></i>
                        <span><strong>Analyse des tendances</strong> - Identifiez les pics de vente et saisonnalités</span>
                    </li>
                    <li>
                        <i class=\"fas fa-boxes\"></i>
                        <span><strong>Analyse du stock</strong> - Optimisez vos réapprovisionnements</span>
                    </li>
                    <li>
                        <i class=\"fas fa-users\"></i>
                        <span><strong>Comportement client</strong> - Analysez la fidélité et le panier moyen</span>
                    </li>
                    <li>
                        <i class=\"fas fa-file-excel\"></i>
                        <span><strong>Rapports sur mesure</strong> - Exports Excel/PDF personnalisés</span>
                    </li>
                    <li>
                        <i class=\"fas fa-robot\"></i>
                        <span><strong>Prédictions de vente</strong> - Anticipez vos ventes futures</span>
                    </li>
                </ul>
                
                <div class=\"alert alert-primary mt-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>Comment ça marche ?</strong><br>
                    Contactez notre Super Admin, partagez vos besoins d'analyse, 
                    et recevez un rapport personnalisé avec des insights exploitables pour votre entreprise.
                </div>
            </div>

            <!-- Carte Ce que vous obtenez -->
            <div class=\"contact-card\">
                <h3 class=\"h4 mb-4\">
                    <i class=\"fas fa-gift text-primary me-2\"></i>
                    Ce que vous obtenez
                </h3>
                
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"fas fa-file-pdf text-danger me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Rapport PDF/Excel</strong>
                                <small class=\"text-muted d-block\">Analyse complète de vos données</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"fas fa-chart-simple text-info me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Tableaux de bord Power BI</strong>
                                <small class=\"text-muted d-block\">Visualisations interactives</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"fas fa-lightbulb text-warning me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Recommandations</strong>
                                <small class=\"text-muted d-block\">Actions concrètes pour améliorer vos ventes</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"fas fa-clock text-success me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Support prioritaire</strong>
                                <small class=\"text-muted d-block\">Réponse rapide et accompagnement</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bouton retour -->
            <div class=\"text-center mt-4\">
                <a href=\"{{ path('app_orders_index') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-arrow-left me-2\"></i>
                    Retour à l'historique des ventes
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des cartes au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.contact-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease-out';
        observer.observe(card);
    });
});
</script>
{% endblock %}", "sale/orders/contact.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\contact.html.twig");
    }
}
