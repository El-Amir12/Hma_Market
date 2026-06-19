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
class __TwigTemplate_31386c1dcc767f79ccfc87781cdfbdbe extends Template
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

        yield "Analyse approfondie des données - HMA Market";
        
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
    :root { --primary-color: #0463f1; }
    
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
        padding: 1.75rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        border: 1px solid #e9ecef;
    }
    
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    }
    
    .price-tag {
        display: inline-block;
        padding: 0.25rem 1rem;
        border-radius: 20px;
        font-weight: bold;
        font-size: 0.85rem;
    }
    
    .process-step {
        position: relative;
        padding: 1rem;
        background: #f8fafc;
        border-radius: 12px;
        margin-bottom: 1rem;
    }
    .process-step:not(:last-child)::after {
        content: '↓';
        position: absolute;
        bottom: -25px;
        left: 50%;
        transform: translateX(-50%);
        color: #0463f1;
        font-size: 1.2rem;
    }
    
    .offer-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .offer-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
    }
    
    @media (max-width: 768px) {
        .contact-header {
            padding: 1.5rem;
        }
        .contact-card {
            padding: 1.25rem;
        }
        .process-step:not(:last-child)::after {
            display: none;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
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

        // line 84
        yield "<div class=\"container py-4\">
    <!-- En-tête -->
    <div class=\"contact-header\">
        <h1 class=\"display-5 fw-bold mb-3\">
            <i class=\"fas fa-chart-line me-3\"></i>
            Analyse approfondie des données
        </h1>
        <p class=\"lead mb-0\">
            Transformez vos données en décisions stratégiques
        </p>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-10 mx-auto\">
            
            <!-- EXPLICATION DU PROCESSUS -->
            <div class=\"contact-card\">
                <h3 class=\"h4 mb-4 text-center\">
                    <i class=\"fas fa-cogs text-primary me-2\"></i>
                    Comment ça fonctionne ?
                </h3>
                
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"process-step text-center\">
                            <div class=\"rounded-circle bg-primary d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-clipboard-list fa-2x text-white\"></i>
                            </div>
                            <h5 class=\"fw-bold\">1. Vous faites une demande</h5>
                            <p class=\"small text-muted mb-0\">Choisissez le type d'analyse, la période à analyser et validez votre demande</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"process-step text-center\">
                            <div class=\"rounded-circle bg-primary d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-chart-simple fa-2x text-white\"></i>
                            </div>
                            <h5 class=\"fw-bold\">2. Notre équipe analyse</h5>
                            <p class=\"small text-muted mb-0\">Extraction, nettoyage et analyse approfondie de vos données</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"process-step text-center\">
                            <div class=\"rounded-circle bg-primary d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-file-download fa-2x text-white\"></i>
                            </div>
                            <h5 class=\"fw-bold\">3. Vous recevez le rapport</h5>
                            <p class=\"small text-muted mb-0\">Téléchargez votre analyse au format Excel ou Power BI</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TYPES D'ANALYSE (prix dynamiques depuis AnalysisPrice) -->
            <div class=\"contact-card\">
                <h3 class=\"h4 mb-4 text-center\">
                    <i class=\"fas fa-tag text-primary me-2\"></i>
                    Nos offres d'analyse
                </h3>
                
                <div class=\"row g-3\">
                    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["analysisPrices"]) || array_key_exists("analysisPrices", $context) ? $context["analysisPrices"] : (function () { throw new RuntimeError('Variable "analysisPrices" does not exist.', 145, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 146
            yield "                        <div class=\"col-md-";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["analysisPrices"]) || array_key_exists("analysisPrices", $context) ? $context["analysisPrices"] : (function () { throw new RuntimeError('Variable "analysisPrices" does not exist.', 146, $this->source); })())) == 4)) ? ("3") : ("4"));
            yield "\">
                            <div class=\"border rounded-3 p-3 text-center h-100 offer-card\" 
                                 onclick=\"window.location='";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_new", ["type" => CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 148)]), "html", null, true);
            yield "'\">
                                <div class=\"mb-3\">
                                    ";
            // line 150
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 150) == "standard")) {
                // line 151
                yield "                                        <i class=\"fas fa-file-excel fa-3x text-success\"></i>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 152
$context["price"], "type", [], "any", false, false, false, 152) == "powerbi")) {
                // line 153
                yield "                                        <i class=\"fas fa-chart-line fa-3x text-info\"></i>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 154
$context["price"], "type", [], "any", false, false, false, 154) == "custom")) {
                // line 155
                yield "                                        <i class=\"fas fa-crown fa-3x text-warning\"></i>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 156
$context["price"], "type", [], "any", false, false, false, 156) == "subscription")) {
                // line 157
                yield "                                        <i class=\"fas fa-calendar-alt fa-3x text-primary\"></i>
                                    ";
            } else {
                // line 159
                yield "                                        <i class=\"fas fa-chart-simple fa-3x text-primary\"></i>
                                    ";
            }
            // line 161
            yield "                                </div>
                                <h5 class=\"fw-bold\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 162), "html", null, true);
            yield "</h5>
                                <p class=\"small text-muted\">";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", false, false, false, 163)), "truncate", [60], "method", false, false, false, 163), "html", null, true);
            yield "</p>
                                <div class=\"mt-2\">
                                    <span class=\"price-tag bg-primary text-white\">
                                        ";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "priceFormatted", [], "any", false, false, false, 166), "html", null, true);
            yield "
                                        ";
            // line 167
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 167) == "subscription")) {
                yield "<small>/mois</small>";
            }
            // line 168
            yield "                                    </span>
                                </div>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 172
        if (!$context['_iterated']) {
            // line 173
            yield "                        <div class=\"col-12 text-center\">
                            <p class=\"text-muted\">Aucune offre disponible pour le moment. Veuillez réessayer plus tard.</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['price'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "                </div>
            </div>

            <!-- CE QUE VOUS OBTENEZ -->
            <div class=\"contact-card\">
                <h3 class=\"h4 mb-4 text-center\">
                    <i class=\"fas fa-gift text-primary me-2\"></i>
                    Ce que vous obtenez
                </h3>
                
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start p-2\">
                            <i class=\"fas fa-chart-pie text-primary me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Insights exploitables</strong>
                                <small class=\"text-muted d-block\">Comprenez les tendances et opportunités</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start p-2\">
                            <i class=\"fas fa-lightbulb text-warning me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Recommandations stratégiques</strong>
                                <small class=\"text-muted d-block\">Actions concrètes pour améliorer vos ventes</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start p-2\">
                            <i class=\"fas fa-file-excel text-success me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Rapport complet</strong>
                                <small class=\"text-muted d-block\">Format Excel ou Power BI personnalisé</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start p-2\">
                            <i class=\"fas fa-headset text-info me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Support dédié</strong>
                                <small class=\"text-muted d-block\">Accompagnement personnalisé</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BOUTONS D'ACTION -->
            <div class=\"contact-card text-center\">
                <h3 class=\"h4 mb-4\">
                    <i class=\"fas fa-rocket text-primary me-2\"></i>
                    Prêt à booster vos performances ?
                </h3>
                
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <a href=\"";
        // line 236
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_new");
        yield "\" class=\"btn btn-primary w-100 py-3\">
                            <i class=\"fas fa-plus-circle me-2\"></i>
                            Faire une demande ponctuelle
                        </a>
                    </div>
                    <div class=\"col-md-6\">
                        <a href=\"";
        // line 242
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_new", ["type" => "subscription"]);
        yield "\" class=\"btn btn-success w-100 py-3\">
                            <i class=\"fas fa-calendar-alt me-2\"></i>
                            S'abonner mensuellement
                        </a>
                    </div>
                </div>
                
                <p class=\"text-muted small mt-3 mb-0\">
                    <i class=\"fas fa-clock me-1\"></i>
                    Délai de livraison : 5 à 7 jours ouvrés après validation du paiement
                </p>
            </div>

            <!-- Bouton retour -->
            <div class=\"text-center mt-3\">
                <a href=\"";
        // line 257
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

    // line 267
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

        // line 268
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
        return array (  466 => 268,  453 => 267,  433 => 257,  415 => 242,  406 => 236,  345 => 177,  336 => 173,  334 => 172,  326 => 168,  322 => 167,  318 => 166,  312 => 163,  308 => 162,  305 => 161,  301 => 159,  297 => 157,  295 => 156,  292 => 155,  290 => 154,  287 => 153,  285 => 152,  282 => 151,  280 => 150,  275 => 148,  269 => 146,  264 => 145,  201 => 84,  188 => 83,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sale/orders/contact.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Analyse approfondie des données - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root { --primary-color: #0463f1; }
    
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
        padding: 1.75rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        border: 1px solid #e9ecef;
    }
    
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    }
    
    .price-tag {
        display: inline-block;
        padding: 0.25rem 1rem;
        border-radius: 20px;
        font-weight: bold;
        font-size: 0.85rem;
    }
    
    .process-step {
        position: relative;
        padding: 1rem;
        background: #f8fafc;
        border-radius: 12px;
        margin-bottom: 1rem;
    }
    .process-step:not(:last-child)::after {
        content: '↓';
        position: absolute;
        bottom: -25px;
        left: 50%;
        transform: translateX(-50%);
        color: #0463f1;
        font-size: 1.2rem;
    }
    
    .offer-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .offer-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
    }
    
    @media (max-width: 768px) {
        .contact-header {
            padding: 1.5rem;
        }
        .contact-card {
            padding: 1.25rem;
        }
        .process-step:not(:last-child)::after {
            display: none;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <!-- En-tête -->
    <div class=\"contact-header\">
        <h1 class=\"display-5 fw-bold mb-3\">
            <i class=\"fas fa-chart-line me-3\"></i>
            Analyse approfondie des données
        </h1>
        <p class=\"lead mb-0\">
            Transformez vos données en décisions stratégiques
        </p>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-10 mx-auto\">
            
            <!-- EXPLICATION DU PROCESSUS -->
            <div class=\"contact-card\">
                <h3 class=\"h4 mb-4 text-center\">
                    <i class=\"fas fa-cogs text-primary me-2\"></i>
                    Comment ça fonctionne ?
                </h3>
                
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"process-step text-center\">
                            <div class=\"rounded-circle bg-primary d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-clipboard-list fa-2x text-white\"></i>
                            </div>
                            <h5 class=\"fw-bold\">1. Vous faites une demande</h5>
                            <p class=\"small text-muted mb-0\">Choisissez le type d'analyse, la période à analyser et validez votre demande</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"process-step text-center\">
                            <div class=\"rounded-circle bg-primary d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-chart-simple fa-2x text-white\"></i>
                            </div>
                            <h5 class=\"fw-bold\">2. Notre équipe analyse</h5>
                            <p class=\"small text-muted mb-0\">Extraction, nettoyage et analyse approfondie de vos données</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"process-step text-center\">
                            <div class=\"rounded-circle bg-primary d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-file-download fa-2x text-white\"></i>
                            </div>
                            <h5 class=\"fw-bold\">3. Vous recevez le rapport</h5>
                            <p class=\"small text-muted mb-0\">Téléchargez votre analyse au format Excel ou Power BI</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TYPES D'ANALYSE (prix dynamiques depuis AnalysisPrice) -->
            <div class=\"contact-card\">
                <h3 class=\"h4 mb-4 text-center\">
                    <i class=\"fas fa-tag text-primary me-2\"></i>
                    Nos offres d'analyse
                </h3>
                
                <div class=\"row g-3\">
                    {% for price in analysisPrices %}
                        <div class=\"col-md-{{ analysisPrices|length == 4 ? '3' : '4' }}\">
                            <div class=\"border rounded-3 p-3 text-center h-100 offer-card\" 
                                 onclick=\"window.location='{{ path('company_analysis_new', {'type': price.type}) }}'\">
                                <div class=\"mb-3\">
                                    {% if price.type == 'standard' %}
                                        <i class=\"fas fa-file-excel fa-3x text-success\"></i>
                                    {% elseif price.type == 'powerbi' %}
                                        <i class=\"fas fa-chart-line fa-3x text-info\"></i>
                                    {% elseif price.type == 'custom' %}
                                        <i class=\"fas fa-crown fa-3x text-warning\"></i>
                                    {% elseif price.type == 'subscription' %}
                                        <i class=\"fas fa-calendar-alt fa-3x text-primary\"></i>
                                    {% else %}
                                        <i class=\"fas fa-chart-simple fa-3x text-primary\"></i>
                                    {% endif %}
                                </div>
                                <h5 class=\"fw-bold\">{{ price.label }}</h5>
                                <p class=\"small text-muted\">{{ price.description|u.truncate(60) }}</p>
                                <div class=\"mt-2\">
                                    <span class=\"price-tag bg-primary text-white\">
                                        {{ price.priceFormatted }}
                                        {% if price.type == 'subscription' %}<small>/mois</small>{% endif %}
                                    </span>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"col-12 text-center\">
                            <p class=\"text-muted\">Aucune offre disponible pour le moment. Veuillez réessayer plus tard.</p>
                        </div>
                    {% endfor %}
                </div>
            </div>

            <!-- CE QUE VOUS OBTENEZ -->
            <div class=\"contact-card\">
                <h3 class=\"h4 mb-4 text-center\">
                    <i class=\"fas fa-gift text-primary me-2\"></i>
                    Ce que vous obtenez
                </h3>
                
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start p-2\">
                            <i class=\"fas fa-chart-pie text-primary me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Insights exploitables</strong>
                                <small class=\"text-muted d-block\">Comprenez les tendances et opportunités</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start p-2\">
                            <i class=\"fas fa-lightbulb text-warning me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Recommandations stratégiques</strong>
                                <small class=\"text-muted d-block\">Actions concrètes pour améliorer vos ventes</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start p-2\">
                            <i class=\"fas fa-file-excel text-success me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Rapport complet</strong>
                                <small class=\"text-muted d-block\">Format Excel ou Power BI personnalisé</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start p-2\">
                            <i class=\"fas fa-headset text-info me-3 mt-1 fs-4\"></i>
                            <div>
                                <strong>Support dédié</strong>
                                <small class=\"text-muted d-block\">Accompagnement personnalisé</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BOUTONS D'ACTION -->
            <div class=\"contact-card text-center\">
                <h3 class=\"h4 mb-4\">
                    <i class=\"fas fa-rocket text-primary me-2\"></i>
                    Prêt à booster vos performances ?
                </h3>
                
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <a href=\"{{ path('company_analysis_new') }}\" class=\"btn btn-primary w-100 py-3\">
                            <i class=\"fas fa-plus-circle me-2\"></i>
                            Faire une demande ponctuelle
                        </a>
                    </div>
                    <div class=\"col-md-6\">
                        <a href=\"{{ path('company_analysis_new', {'type': 'subscription'}) }}\" class=\"btn btn-success w-100 py-3\">
                            <i class=\"fas fa-calendar-alt me-2\"></i>
                            S'abonner mensuellement
                        </a>
                    </div>
                </div>
                
                <p class=\"text-muted small mt-3 mb-0\">
                    <i class=\"fas fa-clock me-1\"></i>
                    Délai de livraison : 5 à 7 jours ouvrés après validation du paiement
                </p>
            </div>

            <!-- Bouton retour -->
            <div class=\"text-center mt-3\">
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
