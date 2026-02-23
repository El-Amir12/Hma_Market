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

/* admin/product/new.html.twig */
class __TwigTemplate_cd67170012e3071148e1a14e71f02b67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/new.html.twig"));

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

        yield "Nouveau Produit - HMA Market";
        
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
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec effets d'animation -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary mb-2 btn-hover-scale\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
            </a>
            <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Produit
            </h1>
            <p class=\"text-muted mt-2\">Ajoutez un nouveau produit à votre inventaire</p>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-box fa-3x text-primary opacity-75\"></i>
        </div>
    </div>

    <!-- Alertes flash -->
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["success"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "    
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["error"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
    <!-- Conseils qui restent toujours visibles -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-info shadow-sm\">
                <div class=\"card-header bg-info text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-lightbulb me-2\"></i> Conseils rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 mb-3 mb-lg-0\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-primary bg-opacity-10 p-3 rounded-circle me-3\">
                                    <i class=\"fas fa-barcode fa-lg text-primary\"></i>
                                </div>
                                <div>
                                    <h6 class=\"mb-1\">Code-barres</h6>
                                    <p class=\"text-muted small mb-0\">
                                        Scannez avec un lecteur USB ou utilisez la génération automatique
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 mb-3 mb-lg-0\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-success bg-opacity-10 p-3 rounded-circle me-3\">
                                    <i class=\"fas fa-coins fa-lg text-success\"></i>
                                </div>
                                <div>
                                    <h6 class=\"mb-1\">Prix et marge</h6>
                                    <p class=\"text-muted small mb-0\">
                                        La marge est calculée automatiquement en temps réel
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-warning bg-opacity-10 p-3 rounded-circle me-3\">
                                    <i class=\"fas fa-exclamation-triangle fa-lg text-warning\"></i>
                                </div>
                                <div>
                                    <h6 class=\"mb-1\">Stock minimum</h6>
                                    <p class=\"text-muted small mb-0\">
                                        Définissez un seuil pour recevoir des alertes automatiques
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    ";
        // line 96
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/product/_form.html.twig");
        yield "
</div>

";
        // line 99
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 100
        yield "<style>
.slide-in-left {
    animation: slideInLeft 0.5s ease-out;
}

@keyframes slideInLeft {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

.float-up {
    animation: floatUp 3s ease-in-out infinite;
}

@keyframes floatUp {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.btn-hover-scale {
    transition: all 0.2s ease;
}

.btn-hover-scale:hover {
    transform: scale(1.05);
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
        return "admin/product/new.html.twig";
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
        return array (  250 => 100,  227 => 99,  221 => 96,  161 => 38,  151 => 34,  148 => 33,  144 => 32,  141 => 31,  131 => 27,  128 => 26,  124 => 25,  107 => 11,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/product/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nouveau Produit - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec effets d'animation -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"{{ path('app_admin_product_index') }}\" class=\"btn btn-outline-secondary mb-2 btn-hover-scale\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
            </a>
            <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Produit
            </h1>
            <p class=\"text-muted mt-2\">Ajoutez un nouveau produit à votre inventaire</p>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-box fa-3x text-primary opacity-75\"></i>
        </div>
    </div>

    <!-- Alertes flash -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- Conseils qui restent toujours visibles -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-info shadow-sm\">
                <div class=\"card-header bg-info text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-lightbulb me-2\"></i> Conseils rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 mb-3 mb-lg-0\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-primary bg-opacity-10 p-3 rounded-circle me-3\">
                                    <i class=\"fas fa-barcode fa-lg text-primary\"></i>
                                </div>
                                <div>
                                    <h6 class=\"mb-1\">Code-barres</h6>
                                    <p class=\"text-muted small mb-0\">
                                        Scannez avec un lecteur USB ou utilisez la génération automatique
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 mb-3 mb-lg-0\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-success bg-opacity-10 p-3 rounded-circle me-3\">
                                    <i class=\"fas fa-coins fa-lg text-success\"></i>
                                </div>
                                <div>
                                    <h6 class=\"mb-1\">Prix et marge</h6>
                                    <p class=\"text-muted small mb-0\">
                                        La marge est calculée automatiquement en temps réel
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-warning bg-opacity-10 p-3 rounded-circle me-3\">
                                    <i class=\"fas fa-exclamation-triangle fa-lg text-warning\"></i>
                                </div>
                                <div>
                                    <h6 class=\"mb-1\">Stock minimum</h6>
                                    <p class=\"text-muted small mb-0\">
                                        Définissez un seuil pour recevoir des alertes automatiques
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    {{ include('admin/product/_form.html.twig') }}
</div>

{% block stylesheets %}
<style>
.slide-in-left {
    animation: slideInLeft 0.5s ease-out;
}

@keyframes slideInLeft {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

.float-up {
    animation: floatUp 3s ease-in-out infinite;
}

@keyframes floatUp {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.btn-hover-scale {
    transition: all 0.2s ease;
}

.btn-hover-scale:hover {
    transform: scale(1.05);
}
</style>
{% endblock %}
{% endblock %}", "admin/product/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\new.html.twig");
    }
}
