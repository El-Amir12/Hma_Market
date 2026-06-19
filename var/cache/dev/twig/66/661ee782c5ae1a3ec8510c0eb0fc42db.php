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

/* sale/orders/contact_admin.html.twig */
class __TwigTemplate_acc8db4ce8f25eb0204d203a3b49db2d extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/contact_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/contact_admin.html.twig"));

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

        yield "Analyse approfondie - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 4, $this->source); })()), "html", null, true);
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10 col-lg-8\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-primary text-white text-center py-4\">
                    <i class=\"fas fa-chart-line fa-3x mb-2\"></i>
                    <h3 class=\"mb-0\">📊 Analyse approfondie des données</h3>
                    <p class=\"mb-0 mt-2 text-white-50\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
                
                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <strong>Vous souhaitez aller plus loin dans l'analyse de vos données ?</strong>
                        </div>
                    </div>

                    <!-- Section EXPLICATION DU PROCESSUS -->
                    <div class=\"alert alert-light border mb-4\">
                        <h5 class=\"fw-bold mb-3\">
                            <i class=\"fas fa-question-circle text-primary me-2\"></i>
                            Comment ça fonctionne ?
                        </h5>
                        <div class=\"row g-3\">
                            <div class=\"col-md-4 text-center\">
                                <div class=\"rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-2\" style=\"width: 50px; height: 50px;\">
                                    <span class=\"fs-4 fw-bold text-primary\">1</span>
                                </div>
                                <p class=\"small mb-0\">Vous faites une demande d'analyse avec la période souhaitée</p>
                            </div>
                            <div class=\"col-md-4 text-center\">
                                <div class=\"rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-2\" style=\"width: 50px; height: 50px;\">
                                    <span class=\"fs-4 fw-bold text-primary\">2</span>
                                </div>
                                <p class=\"small mb-0\">Notre équipe analyse vos données et prépare un rapport détaillé</p>
                            </div>
                            <div class=\"col-md-4 text-center\">
                                <div class=\"rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-2\" style=\"width: 50px; height: 50px;\">
                                    <span class=\"fs-4 fw-bold text-primary\">3</span>
                                </div>
                                <p class=\"small mb-0\">Vous recevez votre analyse (Excel ou Power BI) et des recommandations</p>
                            </div>
                        </div>
                    </div>

                    <!-- Types d'analyse -->
                    <div class=\"row g-3 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border rounded-3 p-3 h-100\">
                                <div class=\"d-flex align-items-center gap-3 mb-2\">
                                    <i class=\"fas fa-file-excel fa-2x text-success\"></i>
                                    <h5 class=\"mb-0\">Analyse Standard</h5>
                                </div>
                                <p class=\"small text-muted mb-2\">Rapport complet au format Excel avec :</p>
                                <ul class=\"small mb-0 ps-3\">
                                    <li>Chiffre d'affaires détaillé</li>
                                    <li>Top produits / plats</li>
                                    <li>Analyse des stocks</li>
                                    <li>Tendances mensuelles</li>
                                </ul>
                                <div class=\"mt-2\">
                                    <span class=\"badge bg-primary\">50 000 FCFA</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border rounded-3 p-3 h-100\">
                                <div class=\"d-flex align-items-center gap-3 mb-2\">
                                    <i class=\"fas fa-chart-line fa-2x text-info\"></i>
                                    <h5 class=\"mb-0\">Analyse Power BI</h5>
                                </div>
                                <p class=\"small text-muted mb-2\">Tableaux de bord interactifs + :</p>
                                <ul class=\"small mb-0 ps-3\">
                                    <li>Visualisations dynamiques</li>
                                    <li>Filtres personnalisables</li>
                                    <li>Prévisions de ventes</li>
                                    <li>Export des données</li>
                                </ul>
                                <div class=\"mt-2\">
                                    <span class=\"badge bg-info text-white\">150 000 FCFA</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BOUTONS D'ACTION -->
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_new");
        yield "\" class=\"btn btn-primary w-100 py-3\">
                                <i class=\"fas fa-plus-circle fa-2x me-2\"></i>
                                <div class=\"text-start d-inline-block\">
                                    <strong>Faire une demande</strong><br>
                                    <small>Analyse ponctuelle sur une période</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-md-6\">
                            <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_new", ["type" => "subscription"]);
        yield "\" class=\"btn btn-success w-100 py-3\">
                                <i class=\"fas fa-calendar-alt fa-2x me-2\"></i>
                                <div class=\"text-start d-inline-block\">
                                    <strong>S'abonner mensuellement</strong><br>
                                    <small>100 000 FCFA/mois - Analyse automatique</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <hr class=\"my-4\">
                    
                    <div class=\"text-center\">
                        <p class=\"text-muted small mb-0\">
                            <i class=\"fas fa-chart-line me-1\"></i>
                            Ventes effectuées aujourd'hui : <strong>";
        // line 120
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "used", [], "any", true, true, false, 120) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["dailyStats"]) || array_key_exists("dailyStats", $context) ? $context["dailyStats"] : (function () { throw new RuntimeError('Variable "dailyStats" does not exist.', 120, $this->source); })()), "used", [], "any", false, false, false, 120)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dailyStats"]) || array_key_exists("dailyStats", $context) ? $context["dailyStats"] : (function () { throw new RuntimeError('Variable "dailyStats" does not exist.', 120, $this->source); })()), "used", [], "any", false, false, false, 120), "html", null, true)) : ("?"));
        yield "</strong> / <strong>";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", true, true, false, 120) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["dailyStats"]) || array_key_exists("dailyStats", $context) ? $context["dailyStats"] : (function () { throw new RuntimeError('Variable "dailyStats" does not exist.', 120, $this->source); })()), "limit", [], "any", false, false, false, 120)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dailyStats"]) || array_key_exists("dailyStats", $context) ? $context["dailyStats"] : (function () { throw new RuntimeError('Variable "dailyStats" does not exist.', 120, $this->source); })()), "limit", [], "any", false, false, false, 120), "html", null, true)) : ("?"));
        yield "</strong>
                        </p>
                        <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_sale_index");
        yield "\" class=\"btn btn-link mt-3\">
                            <i class=\"fas fa-arrow-left me-1\"></i> Retour à la vente
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 133
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

        // line 134
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .btn {
        transition: all 0.3s ease;
        border-radius: 12px;
    }
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .card {
        border-radius: 20px;
        overflow: hidden;
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
        return "sale/orders/contact_admin.html.twig";
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
        return array (  267 => 134,  254 => 133,  233 => 122,  226 => 120,  208 => 105,  196 => 96,  111 => 14,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sale/orders/contact_admin.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Analyse approfondie - {{ companyName }}{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10 col-lg-8\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-primary text-white text-center py-4\">
                    <i class=\"fas fa-chart-line fa-3x mb-2\"></i>
                    <h3 class=\"mb-0\">📊 Analyse approfondie des données</h3>
                    <p class=\"mb-0 mt-2 text-white-50\">{{ companyName }}</p>
                </div>
                
                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <strong>Vous souhaitez aller plus loin dans l'analyse de vos données ?</strong>
                        </div>
                    </div>

                    <!-- Section EXPLICATION DU PROCESSUS -->
                    <div class=\"alert alert-light border mb-4\">
                        <h5 class=\"fw-bold mb-3\">
                            <i class=\"fas fa-question-circle text-primary me-2\"></i>
                            Comment ça fonctionne ?
                        </h5>
                        <div class=\"row g-3\">
                            <div class=\"col-md-4 text-center\">
                                <div class=\"rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-2\" style=\"width: 50px; height: 50px;\">
                                    <span class=\"fs-4 fw-bold text-primary\">1</span>
                                </div>
                                <p class=\"small mb-0\">Vous faites une demande d'analyse avec la période souhaitée</p>
                            </div>
                            <div class=\"col-md-4 text-center\">
                                <div class=\"rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-2\" style=\"width: 50px; height: 50px;\">
                                    <span class=\"fs-4 fw-bold text-primary\">2</span>
                                </div>
                                <p class=\"small mb-0\">Notre équipe analyse vos données et prépare un rapport détaillé</p>
                            </div>
                            <div class=\"col-md-4 text-center\">
                                <div class=\"rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-2\" style=\"width: 50px; height: 50px;\">
                                    <span class=\"fs-4 fw-bold text-primary\">3</span>
                                </div>
                                <p class=\"small mb-0\">Vous recevez votre analyse (Excel ou Power BI) et des recommandations</p>
                            </div>
                        </div>
                    </div>

                    <!-- Types d'analyse -->
                    <div class=\"row g-3 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border rounded-3 p-3 h-100\">
                                <div class=\"d-flex align-items-center gap-3 mb-2\">
                                    <i class=\"fas fa-file-excel fa-2x text-success\"></i>
                                    <h5 class=\"mb-0\">Analyse Standard</h5>
                                </div>
                                <p class=\"small text-muted mb-2\">Rapport complet au format Excel avec :</p>
                                <ul class=\"small mb-0 ps-3\">
                                    <li>Chiffre d'affaires détaillé</li>
                                    <li>Top produits / plats</li>
                                    <li>Analyse des stocks</li>
                                    <li>Tendances mensuelles</li>
                                </ul>
                                <div class=\"mt-2\">
                                    <span class=\"badge bg-primary\">50 000 FCFA</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border rounded-3 p-3 h-100\">
                                <div class=\"d-flex align-items-center gap-3 mb-2\">
                                    <i class=\"fas fa-chart-line fa-2x text-info\"></i>
                                    <h5 class=\"mb-0\">Analyse Power BI</h5>
                                </div>
                                <p class=\"small text-muted mb-2\">Tableaux de bord interactifs + :</p>
                                <ul class=\"small mb-0 ps-3\">
                                    <li>Visualisations dynamiques</li>
                                    <li>Filtres personnalisables</li>
                                    <li>Prévisions de ventes</li>
                                    <li>Export des données</li>
                                </ul>
                                <div class=\"mt-2\">
                                    <span class=\"badge bg-info text-white\">150 000 FCFA</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BOUTONS D'ACTION -->
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <a href=\"{{ path('company_analysis_new') }}\" class=\"btn btn-primary w-100 py-3\">
                                <i class=\"fas fa-plus-circle fa-2x me-2\"></i>
                                <div class=\"text-start d-inline-block\">
                                    <strong>Faire une demande</strong><br>
                                    <small>Analyse ponctuelle sur une période</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-md-6\">
                            <a href=\"{{ path('company_analysis_new', {'type': 'subscription'}) }}\" class=\"btn btn-success w-100 py-3\">
                                <i class=\"fas fa-calendar-alt fa-2x me-2\"></i>
                                <div class=\"text-start d-inline-block\">
                                    <strong>S'abonner mensuellement</strong><br>
                                    <small>100 000 FCFA/mois - Analyse automatique</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <hr class=\"my-4\">
                    
                    <div class=\"text-center\">
                        <p class=\"text-muted small mb-0\">
                            <i class=\"fas fa-chart-line me-1\"></i>
                            Ventes effectuées aujourd'hui : <strong>{{ dailyStats.used ?? '?' }}</strong> / <strong>{{ dailyStats.limit ?? '?' }}</strong>
                        </p>
                        <a href=\"{{ path('restaurant_sale_index') }}\" class=\"btn btn-link mt-3\">
                            <i class=\"fas fa-arrow-left me-1\"></i> Retour à la vente
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .btn {
        transition: all 0.3s ease;
        border-radius: 12px;
    }
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .card {
        border-radius: 20px;
        overflow: hidden;
    }
</style>
{% endblock %}", "sale/orders/contact_admin.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\contact_admin.html.twig");
    }
}
