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

/* home/index.html.twig */
class __TwigTemplate_1095b4ed318e2a54d34073e65aa3772d extends Template
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
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Tableau de bord";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        yield "    <li class=\"breadcrumb-item active\">Tableau de bord</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "<div class=\"page-header\">
    <div class=\"row align-items-center\">
        <div class=\"col\">
            <h1 class=\"page-title\">Tableau de bord</h1>
            <p class=\"text-muted mb-0\">Bienvenue ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "fullName", [], "any", false, false, false, 14), "html", null, true);
        yield ", voici un aperçu de votre activité.</p>
        </div>
        <div class=\"col-auto\">
            <div class=\"btn-list\">
                <span class=\"text-muted me-2\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</span>
                <span class=\"badge bg-light text-dark\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i"), "html", null, true);
        yield "</span>
            </div>
        </div>
    </div>
</div>

<!-- Statistiques rapides -->
<div class=\"row\">
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card stat-card h-100\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h6 class=\"stat-label\">Produits en stock</h6>
                        <h3 class=\"stat-value mb-0\">1,257</h3>
                    </div>
                    <div class=\"avatar avatar-sm bg-primary-light rounded\">
                        <i class=\"bi bi-box-seam text-primary fs-3\"></i>
                    </div>
                </div>
                <div class=\"mt-3\">
                    <span class=\"badge bg-success\"><i class=\"bi bi-arrow-up me-1\"></i> 12%</span>
                    <span class=\"text-muted ms-2\">Depuis hier</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card stat-card h-100\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h6 class=\"stat-label\">Ventes du jour</h6>
                        <h3 class=\"stat-value mb-0\">45</h3>
                    </div>
                    <div class=\"avatar avatar-sm bg-success-light rounded\">
                        <i class=\"bi bi-cart-check text-success fs-3\"></i>
                    </div>
                </div>
                <div class=\"mt-3\">
                    <span class=\"badge bg-danger\"><i class=\"bi bi-arrow-down me-1\"></i> 5%</span>
                    <span class=\"text-muted ms-2\">Vs hier</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card stat-card h-100\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h6 class=\"stat-label\">Chiffre d'affaires</h6>
                        <h3 class=\"stat-value mb-0\">450,000</h3>
                        <small class=\"text-muted\">FCFA</small>
                    </div>
                    <div class=\"avatar avatar-sm bg-warning-light rounded\">
                        <i class=\"bi bi-currency-exchange text-warning fs-3\"></i>
                    </div>
                </div>
                <div class=\"mt-3\">
                    <span class=\"badge bg-success\"><i class=\"bi bi-arrow-up me-1\"></i> 18%</span>
                    <span class=\"text-muted ms-2\">Ce mois</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card stat-card h-100\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h6 class=\"stat-label\">Alertes stock</h6>
                        <h3 class=\"stat-value mb-0\">8</h3>
                    </div>
                    <div class=\"avatar avatar-sm bg-danger-light rounded\">
                        <i class=\"bi bi-exclamation-triangle text-danger fs-3\"></i>
                    </div>
                </div>
                <div class=\"mt-3\">
                    <span class=\"badge bg-warning\">À vérifier</span>
                    <span class=\"text-muted ms-2\">Produits en rupture</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Actions rapides -->
<div class=\"row mb-4\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">Actions rapides</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row g-3\">
                    ";
        // line 118
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                    <div class=\"col-xl-2 col-md-4 col-sm-6\">
                        <a href=\"#\" class=\"btn btn-gradient w-100 d-flex flex-column align-items-center py-3\">
                            <i class=\"bi bi-cart-plus fs-2 mb-2\"></i>
                            <span>Nouvelle vente</span>
                        </a>
                    </div>
                    ";
        }
        // line 126
        yield "                    
                    ";
        // line 127
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 128
            yield "                    <div class=\"col-xl-2 col-md-4 col-sm-6\">
                        <a href=\"#\" class=\"btn btn-outline-primary w-100 d-flex flex-column align-items-center py-3\">
                            <i class=\"bi bi-plus-circle fs-2 mb-2\"></i>
                            <span>Ajouter produit</span>
                        </a>
                    </div>
                    ";
        }
        // line 135
        yield "                    
                    ";
        // line 136
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 137
            yield "                    <div class=\"col-xl-2 col-md-4 col-sm-6\">
                        <a href=\"#\" class=\"btn btn-outline-warning w-100 d-flex flex-column align-items-center py-3\">
                            <i class=\"bi bi-truck fs-2 mb-2\"></i>
                            <span>Commander stock</span>
                        </a>
                    </div>
                    ";
        }
        // line 144
        yield "                    
                    ";
        // line 145
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 146
            yield "                    <div class=\"col-xl-2 col-md-4 col-sm-6\">
                        <a href=\"";
            // line 147
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-outline-info w-100 d-flex flex-column align-items-center py-3\">
                            <i class=\"bi bi-person-plus fs-2 mb-2\"></i>
                            <span>Nouvel utilisateur</span>
                        </a>
                    </div>
                    ";
        }
        // line 153
        yield "                    
                    <div class=\"col-xl-2 col-md-4 col-sm-6\">
                        <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-outline-danger w-100 d-flex flex-column align-items-center py-3\">
                            <i class=\"bi bi-box-arrow-right fs-2 mb-2\"></i>
                            <span>Déconnexion</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dernières activités -->
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"card-title mb-0\">Activités récentes</h5>
                <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">Voir tout</a>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Date/Heure</th>
                                <th>Utilisateur</th>
                                <th>Action</th>
                                <th>Détails</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10:30 AM</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar me-2\">JD</div>
                                        <div>Jean Dupont</div>
                                    </div>
                                </td>
                                <td>Vente</td>
                                <td>Ticket #ORD-00125 - 45,000 FCFA</td>
                                <td><span class=\"badge bg-success\">Terminé</span></td>
                            </tr>
                            <tr>
                                <td>09:15 AM</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar me-2\">MS</div>
                                        <div>Marie Smith</div>
                                    </div>
                                </td>
                                <td>Réception stock</td>
                                <td>50 unités de lait reçues</td>
                                <td><span class=\"badge bg-info\">En cours</span></td>
                            </tr>
                            <tr>
                                <td>Hier, 16:45</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar me-2\">AD</div>
                                        <div>Admin</div>
                                    </div>
                                </td>
                                <td>Création utilisateur</td>
                                <td>Nouveau caissier ajouté</td>
                                <td><span class=\"badge bg-success\">Terminé</span></td>
                            </tr>
                        </tbody>
                    </table>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  305 => 155,  301 => 153,  292 => 147,  289 => 146,  287 => 145,  284 => 144,  275 => 137,  273 => 136,  270 => 135,  261 => 128,  259 => 127,  256 => 126,  247 => 119,  245 => 118,  143 => 19,  139 => 18,  132 => 14,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block breadcrumb %}
    <li class=\"breadcrumb-item active\">Tableau de bord</li>
{% endblock %}

{% block body %}
<div class=\"page-header\">
    <div class=\"row align-items-center\">
        <div class=\"col\">
            <h1 class=\"page-title\">Tableau de bord</h1>
            <p class=\"text-muted mb-0\">Bienvenue {{ app.user.fullName }}, voici un aperçu de votre activité.</p>
        </div>
        <div class=\"col-auto\">
            <div class=\"btn-list\">
                <span class=\"text-muted me-2\">{{ \"now\"|date(\"d/m/Y\") }}</span>
                <span class=\"badge bg-light text-dark\">{{ \"now\"|date(\"H:i\") }}</span>
            </div>
        </div>
    </div>
</div>

<!-- Statistiques rapides -->
<div class=\"row\">
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card stat-card h-100\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h6 class=\"stat-label\">Produits en stock</h6>
                        <h3 class=\"stat-value mb-0\">1,257</h3>
                    </div>
                    <div class=\"avatar avatar-sm bg-primary-light rounded\">
                        <i class=\"bi bi-box-seam text-primary fs-3\"></i>
                    </div>
                </div>
                <div class=\"mt-3\">
                    <span class=\"badge bg-success\"><i class=\"bi bi-arrow-up me-1\"></i> 12%</span>
                    <span class=\"text-muted ms-2\">Depuis hier</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card stat-card h-100\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h6 class=\"stat-label\">Ventes du jour</h6>
                        <h3 class=\"stat-value mb-0\">45</h3>
                    </div>
                    <div class=\"avatar avatar-sm bg-success-light rounded\">
                        <i class=\"bi bi-cart-check text-success fs-3\"></i>
                    </div>
                </div>
                <div class=\"mt-3\">
                    <span class=\"badge bg-danger\"><i class=\"bi bi-arrow-down me-1\"></i> 5%</span>
                    <span class=\"text-muted ms-2\">Vs hier</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card stat-card h-100\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h6 class=\"stat-label\">Chiffre d'affaires</h6>
                        <h3 class=\"stat-value mb-0\">450,000</h3>
                        <small class=\"text-muted\">FCFA</small>
                    </div>
                    <div class=\"avatar avatar-sm bg-warning-light rounded\">
                        <i class=\"bi bi-currency-exchange text-warning fs-3\"></i>
                    </div>
                </div>
                <div class=\"mt-3\">
                    <span class=\"badge bg-success\"><i class=\"bi bi-arrow-up me-1\"></i> 18%</span>
                    <span class=\"text-muted ms-2\">Ce mois</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card stat-card h-100\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h6 class=\"stat-label\">Alertes stock</h6>
                        <h3 class=\"stat-value mb-0\">8</h3>
                    </div>
                    <div class=\"avatar avatar-sm bg-danger-light rounded\">
                        <i class=\"bi bi-exclamation-triangle text-danger fs-3\"></i>
                    </div>
                </div>
                <div class=\"mt-3\">
                    <span class=\"badge bg-warning\">À vérifier</span>
                    <span class=\"text-muted ms-2\">Produits en rupture</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Actions rapides -->
<div class=\"row mb-4\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">Actions rapides</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row g-3\">
                    {% if is_granted('ROLE_CASHIER') %}
                    <div class=\"col-xl-2 col-md-4 col-sm-6\">
                        <a href=\"#\" class=\"btn btn-gradient w-100 d-flex flex-column align-items-center py-3\">
                            <i class=\"bi bi-cart-plus fs-2 mb-2\"></i>
                            <span>Nouvelle vente</span>
                        </a>
                    </div>
                    {% endif %}
                    
                    {% if is_granted('ROLE_MANAGER') or is_granted('ROLE_ADMIN') %}
                    <div class=\"col-xl-2 col-md-4 col-sm-6\">
                        <a href=\"#\" class=\"btn btn-outline-primary w-100 d-flex flex-column align-items-center py-3\">
                            <i class=\"bi bi-plus-circle fs-2 mb-2\"></i>
                            <span>Ajouter produit</span>
                        </a>
                    </div>
                    {% endif %}
                    
                    {% if is_granted('ROLE_STOCK_MANAGER') or is_granted('ROLE_MANAGER') %}
                    <div class=\"col-xl-2 col-md-4 col-sm-6\">
                        <a href=\"#\" class=\"btn btn-outline-warning w-100 d-flex flex-column align-items-center py-3\">
                            <i class=\"bi bi-truck fs-2 mb-2\"></i>
                            <span>Commander stock</span>
                        </a>
                    </div>
                    {% endif %}
                    
                    {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"col-xl-2 col-md-4 col-sm-6\">
                        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-outline-info w-100 d-flex flex-column align-items-center py-3\">
                            <i class=\"bi bi-person-plus fs-2 mb-2\"></i>
                            <span>Nouvel utilisateur</span>
                        </a>
                    </div>
                    {% endif %}
                    
                    <div class=\"col-xl-2 col-md-4 col-sm-6\">
                        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger w-100 d-flex flex-column align-items-center py-3\">
                            <i class=\"bi bi-box-arrow-right fs-2 mb-2\"></i>
                            <span>Déconnexion</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dernières activités -->
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"card-title mb-0\">Activités récentes</h5>
                <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">Voir tout</a>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Date/Heure</th>
                                <th>Utilisateur</th>
                                <th>Action</th>
                                <th>Détails</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10:30 AM</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar me-2\">JD</div>
                                        <div>Jean Dupont</div>
                                    </div>
                                </td>
                                <td>Vente</td>
                                <td>Ticket #ORD-00125 - 45,000 FCFA</td>
                                <td><span class=\"badge bg-success\">Terminé</span></td>
                            </tr>
                            <tr>
                                <td>09:15 AM</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar me-2\">MS</div>
                                        <div>Marie Smith</div>
                                    </div>
                                </td>
                                <td>Réception stock</td>
                                <td>50 unités de lait reçues</td>
                                <td><span class=\"badge bg-info\">En cours</span></td>
                            </tr>
                            <tr>
                                <td>Hier, 16:45</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar me-2\">AD</div>
                                        <div>Admin</div>
                                    </div>
                                </td>
                                <td>Création utilisateur</td>
                                <td>Nouveau caissier ajouté</td>
                                <td><span class=\"badge bg-success\">Terminé</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "home/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\home\\index.html.twig");
    }
}
