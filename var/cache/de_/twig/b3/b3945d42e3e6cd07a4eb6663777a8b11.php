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
class __TwigTemplate_d4cdd4dab76bf9d2cafb7e87686a6ff6 extends Template
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

        yield "Contacter l'administrateur - ";
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
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-primary text-white text-center py-4\">
                    <i class=\"fas fa-headset fa-3x mb-2\"></i>
                    <h3 class=\"mb-0\">Contacter l'administrateur</h3>
                    <p class=\"mb-0 mt-2 text-white-50\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
                
                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            La limite de ventes quotidienne a été atteinte.
                            Contactez l'administrateur pour augmenter votre quota.
                        </div>
                    </div>
                    
                    <div class=\"row g-3\">
                        ";
        // line 27
        if ((($tmp = (isset($context["whatsappUrl"]) || array_key_exists("whatsappUrl", $context) ? $context["whatsappUrl"] : (function () { throw new RuntimeError('Variable "whatsappUrl" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                        <div class=\"col-12\">
                            <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["whatsappUrl"]) || array_key_exists("whatsappUrl", $context) ? $context["whatsappUrl"] : (function () { throw new RuntimeError('Variable "whatsappUrl" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-success w-100 py-3\">
                                <i class=\"fab fa-whatsapp fa-2x me-2\"></i>
                                <div class=\"text-start d-inline-block\">
                                    <strong>WhatsApp</strong><br>
                                    <small>Cliquez pour envoyer un message</small>
                                </div>
                            </a>
                        </div>
                        ";
        }
        // line 38
        yield "                        
                        ";
        // line 39
        if ((($tmp = (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "                        <div class=\"col-12\">
                            <a href=\"tel:";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-outline-primary w-100 py-3\">
                                <i class=\"fas fa-phone fa-2x me-2\"></i>
                                <div class=\"text-start d-inline-block\">
                                    <strong>Appeler</strong><br>
                                    <small>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "</small>
                                </div>
                            </a>
                        </div>
                        ";
        }
        // line 50
        yield "                        
                        ";
        // line 51
        if ((($tmp = (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "                        <div class=\"col-12\">
                            <a href=\"mailto:";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 53, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary w-100 py-3\">
                                <i class=\"fas fa-envelope fa-2x me-2\"></i>
                                <div class=\"text-start d-inline-block\">
                                    <strong>Email</strong><br>
                                    <small>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 57, $this->source); })()), "html", null, true);
            yield "</small>
                                </div>
                            </a>
                        </div>
                        ";
        }
        // line 62
        yield "                    </div>
                    
                    <hr class=\"my-4\">
                    
                    <div class=\"text-center\">
                        <p class=\"text-muted small mb-0\">
                            <i class=\"fas fa-chart-line me-1\"></i>
                            Ventes effectuées aujourd'hui : <strong>";
        // line 69
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "used", [], "any", true, true, false, 69) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["dailyStats"]) || array_key_exists("dailyStats", $context) ? $context["dailyStats"] : (function () { throw new RuntimeError('Variable "dailyStats" does not exist.', 69, $this->source); })()), "used", [], "any", false, false, false, 69)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dailyStats"]) || array_key_exists("dailyStats", $context) ? $context["dailyStats"] : (function () { throw new RuntimeError('Variable "dailyStats" does not exist.', 69, $this->source); })()), "used", [], "any", false, false, false, 69), "html", null, true)) : ("?"));
        yield "</strong> / <strong>";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["dailyStats"] ?? null), "limit", [], "any", true, true, false, 69) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["dailyStats"]) || array_key_exists("dailyStats", $context) ? $context["dailyStats"] : (function () { throw new RuntimeError('Variable "dailyStats" does not exist.', 69, $this->source); })()), "limit", [], "any", false, false, false, 69)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dailyStats"]) || array_key_exists("dailyStats", $context) ? $context["dailyStats"] : (function () { throw new RuntimeError('Variable "dailyStats" does not exist.', 69, $this->source); })()), "limit", [], "any", false, false, false, 69), "html", null, true)) : ("?"));
        yield "</strong>
                        </p>
                        <a href=\"";
        // line 71
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

    // line 82
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

        // line 83
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
        return array (  240 => 83,  227 => 82,  206 => 71,  199 => 69,  190 => 62,  182 => 57,  175 => 53,  172 => 52,  170 => 51,  167 => 50,  159 => 45,  152 => 41,  149 => 40,  147 => 39,  144 => 38,  132 => 29,  129 => 28,  127 => 27,  111 => 14,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sale/orders/contact_admin.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Contacter l'administrateur - {{ companyName }}{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-primary text-white text-center py-4\">
                    <i class=\"fas fa-headset fa-3x mb-2\"></i>
                    <h3 class=\"mb-0\">Contacter l'administrateur</h3>
                    <p class=\"mb-0 mt-2 text-white-50\">{{ companyName }}</p>
                </div>
                
                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            La limite de ventes quotidienne a été atteinte.
                            Contactez l'administrateur pour augmenter votre quota.
                        </div>
                    </div>
                    
                    <div class=\"row g-3\">
                        {% if whatsappUrl %}
                        <div class=\"col-12\">
                            <a href=\"{{ whatsappUrl }}\" target=\"_blank\" class=\"btn btn-success w-100 py-3\">
                                <i class=\"fab fa-whatsapp fa-2x me-2\"></i>
                                <div class=\"text-start d-inline-block\">
                                    <strong>WhatsApp</strong><br>
                                    <small>Cliquez pour envoyer un message</small>
                                </div>
                            </a>
                        </div>
                        {% endif %}
                        
                        {% if phone %}
                        <div class=\"col-12\">
                            <a href=\"tel:{{ phone }}\" class=\"btn btn-outline-primary w-100 py-3\">
                                <i class=\"fas fa-phone fa-2x me-2\"></i>
                                <div class=\"text-start d-inline-block\">
                                    <strong>Appeler</strong><br>
                                    <small>{{ phone }}</small>
                                </div>
                            </a>
                        </div>
                        {% endif %}
                        
                        {% if email %}
                        <div class=\"col-12\">
                            <a href=\"mailto:{{ email }}\" class=\"btn btn-outline-secondary w-100 py-3\">
                                <i class=\"fas fa-envelope fa-2x me-2\"></i>
                                <div class=\"text-start d-inline-block\">
                                    <strong>Email</strong><br>
                                    <small>{{ email }}</small>
                                </div>
                            </a>
                        </div>
                        {% endif %}
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
