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

/* manager/team/edit.html.twig */
class __TwigTemplate_b6a297a762dd5116e5cccb0dbdf1fd12 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manager/team/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manager/team/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "<div class=\"container-fluid px-4\">
    <!-- Header -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <div class=\"position-relative p-4\" style=\"z-index: 2;\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-circle bg-white bg-opacity-20 rounded-3 p-3 me-3\">
                            <i class=\"bi bi-pencil-square text-white fs-1\"></i>
                        </div>
                        <div>
                            <h1 class=\"h2 fw-bold text-white mb-1\">
                                ";
        // line 18
        if ((($tmp = (isset($context["is_self"]) || array_key_exists("is_self", $context) ? $context["is_self"] : (function () { throw new RuntimeError('Variable "is_self" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                                    Modifier mon profil
                                ";
        } else {
            // line 21
            yield "                                    Modifier ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["target_user"]) || array_key_exists("target_user", $context) ? $context["target_user"] : (function () { throw new RuntimeError('Variable "target_user" does not exist.', 21, $this->source); })()), "fullName", [], "any", false, false, false, 21), "html", null, true);
            yield "
                                ";
        }
        // line 23
        yield "                            </h1>
                            <div class=\"d-flex align-items-center gap-2\">
                                <span class=\"badge bg-white text-primary px-3 py-2 rounded-pill\">
                                    <i class=\"bi bi-building me-1\"></i>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 26, $this->source); })()), "companyName", [], "any", false, false, false, 26), "html", null, true);
        yield "
                                </span>
                                ";
        // line 28
        if ((($tmp =  !(isset($context["is_self"]) || array_key_exists("is_self", $context) ? $context["is_self"] : (function () { throw new RuntimeError('Variable "is_self" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                                    <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2 rounded-pill\">
                                        <i class=\"bi bi-person-badge me-1\"></i>
                                        ";
            // line 31
            $context["role"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["target_user"]) || array_key_exists("target_user", $context) ? $context["target_user"] : (function () { throw new RuntimeError('Variable "target_user" does not exist.', 31, $this->source); })()), "roles", [], "any", false, false, false, 31), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return ((isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 31, $this->source); })()) != "ROLE_USER"); }));
            // line 32
            yield "                                        ";
            if (((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 32, $this->source); })()) == "ROLE_ADMIN")) {
                yield "Administrateur
                                        ";
            } elseif ((            // line 33
(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 33, $this->source); })()) == "ROLE_MANAGER")) {
                yield "Gestionnaire
                                        ";
            } elseif ((            // line 34
(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 34, $this->source); })()) == "ROLE_STOCK_MANAGER")) {
                yield "Responsable Stock
                                        ";
            } elseif ((            // line 35
(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 35, $this->source); })()) == "ROLE_CASHIER")) {
                yield "Caissier
                                        ";
            } else {
                // line 36
                yield "Utilisateur
                                        ";
            }
            // line 38
            yield "                                    </span>
                                ";
        }
        // line 40
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-white py-3\">
                    <ul class=\"nav nav-tabs card-header-tabs\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <button class=\"nav-link active\" id=\"info-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#info\" type=\"button\" role=\"tab\">
                                <i class=\"bi bi-person-badge me-2\"></i>Informations
                            </button>
                        </li>
                    </ul>
                </div>
                
                <div class=\"card-body p-4\">
                    ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_start');
        yield "
                    
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"info\" role=\"tabpanel\">
                            
                            ";
        // line 68
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 68, $this->source); })()), "full_name", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-person-fill text-primary me-1\"></i>Nom complet
                                    </label>
                                    ";
            // line 73
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "full_name", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
            // line 74
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "full_name", [], "any", false, false, false, 74), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 77
        yield "                            
                            ";
        // line 78
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 78, $this->source); })()), "phone", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-telephone-fill text-success me-1\"></i>Téléphone
                                    </label>
                                    ";
            // line 83
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "phone", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
            // line 84
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "phone", [], "any", false, false, false, 84), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 87
        yield "                            
                            ";
        // line 88
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 88, $this->source); })()), "employment_date", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-calendar-plus-fill text-info me-1\"></i>Date d'embauche
                                    </label>
                                    ";
            // line 93
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "employment_date", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
            // line 94
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "employment_date", [], "any", false, false, false, 94), 'errors');
            yield "
                                    <small class=\"text-muted\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Modifiable uniquement par les administrateurs
                                    </small>
                                </div>
                            ";
        }
        // line 101
        yield "                            
                            <!-- Message informatif -->
                            ";
        // line 103
        if (((isset($context["is_self"]) || array_key_exists("is_self", $context) ? $context["is_self"] : (function () { throw new RuntimeError('Variable "is_self" does not exist.', 103, $this->source); })()) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 103, $this->source); })()), "employment_date", [], "any", false, false, false, 103))) {
            // line 104
            yield "                                <div class=\"alert alert-warning mt-3\">
                                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                                    Votre date d'embauche ne peut être modifiée que par un administrateur.
                                </div>
                            ";
        }
        // line 109
        yield "                            
                            ";
        // line 110
        if (((( !(isset($context["is_self"]) || array_key_exists("is_self", $context) ? $context["is_self"] : (function () { throw new RuntimeError('Variable "is_self" does not exist.', 110, $this->source); })()) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 110, $this->source); })()), "full_name", [], "any", false, false, false, 110)) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 110, $this->source); })()), "phone", [], "any", false, false, false, 110)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 110, $this->source); })()), "employment_date", [], "any", false, false, false, 110))) {
            // line 111
            yield "                                <div class=\"alert alert-info\">
                                    <i class=\"bi bi-info-circle me-2\"></i>
                                    Vous pouvez modifier uniquement la date d'embauche de cet employé.
                                </div>
                            ";
        }
        // line 116
        yield "                            
                        </div>
                    </div>
                    
                    <hr class=\"my-4\">
                    
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["target_user"]) || array_key_exists("target_user", $context) ? $context["target_user"] : (function () { throw new RuntimeError('Variable "target_user" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-lg\">
                            <i class=\"bi bi-arrow-left me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                            <i class=\"bi bi-check-circle-fill me-2\"></i>Enregistrer
                        </button>
                    </div>
                    
                    ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.modern-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 120px;
}
.icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.bg-opacity-20 {
    background-color: rgba(255, 255, 255, 0.2);
}
.nav-tabs .nav-link.active {
    color: #667eea;
    border-bottom: 3px solid #667eea;
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
        return "manager/team/edit.html.twig";
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
        return array (  288 => 131,  277 => 123,  268 => 116,  261 => 111,  259 => 110,  256 => 109,  249 => 104,  247 => 103,  243 => 101,  233 => 94,  229 => 93,  223 => 89,  221 => 88,  218 => 87,  212 => 84,  208 => 83,  202 => 79,  200 => 78,  197 => 77,  191 => 74,  187 => 73,  181 => 69,  179 => 68,  171 => 63,  146 => 40,  142 => 38,  138 => 36,  133 => 35,  129 => 34,  125 => 33,  120 => 32,  118 => 31,  114 => 29,  112 => 28,  107 => 26,  102 => 23,  96 => 21,  92 => 19,  90 => 18,  76 => 6,  63 => 5,  40 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/manager/team/edit.html.twig #}

{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- Header -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <div class=\"position-relative p-4\" style=\"z-index: 2;\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-circle bg-white bg-opacity-20 rounded-3 p-3 me-3\">
                            <i class=\"bi bi-pencil-square text-white fs-1\"></i>
                        </div>
                        <div>
                            <h1 class=\"h2 fw-bold text-white mb-1\">
                                {% if is_self %}
                                    Modifier mon profil
                                {% else %}
                                    Modifier {{ target_user.fullName }}
                                {% endif %}
                            </h1>
                            <div class=\"d-flex align-items-center gap-2\">
                                <span class=\"badge bg-white text-primary px-3 py-2 rounded-pill\">
                                    <i class=\"bi bi-building me-1\"></i>{{ company.companyName }}
                                </span>
                                {% if not is_self %}
                                    <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2 rounded-pill\">
                                        <i class=\"bi bi-person-badge me-1\"></i>
                                        {% set role = target_user.roles|filter(r => r != 'ROLE_USER')|first %}
                                        {% if role == 'ROLE_ADMIN' %}Administrateur
                                        {% elseif role == 'ROLE_MANAGER' %}Gestionnaire
                                        {% elseif role == 'ROLE_STOCK_MANAGER' %}Responsable Stock
                                        {% elseif role == 'ROLE_CASHIER' %}Caissier
                                        {% else %}Utilisateur
                                        {% endif %}
                                    </span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-white py-3\">
                    <ul class=\"nav nav-tabs card-header-tabs\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <button class=\"nav-link active\" id=\"info-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#info\" type=\"button\" role=\"tab\">
                                <i class=\"bi bi-person-badge me-2\"></i>Informations
                            </button>
                        </li>
                    </ul>
                </div>
                
                <div class=\"card-body p-4\">
                    {{ form_start(form) }}
                    
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"info\" role=\"tabpanel\">
                            
                            {% if can_edit.full_name %}
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-person-fill text-primary me-1\"></i>Nom complet
                                    </label>
                                    {{ form_widget(form.full_name, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.full_name) }}
                                </div>
                            {% endif %}
                            
                            {% if can_edit.phone %}
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-telephone-fill text-success me-1\"></i>Téléphone
                                    </label>
                                    {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.phone) }}
                                </div>
                            {% endif %}
                            
                            {% if can_edit.employment_date %}
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-calendar-plus-fill text-info me-1\"></i>Date d'embauche
                                    </label>
                                    {{ form_widget(form.employment_date, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.employment_date) }}
                                    <small class=\"text-muted\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Modifiable uniquement par les administrateurs
                                    </small>
                                </div>
                            {% endif %}
                            
                            <!-- Message informatif -->
                            {% if is_self and not can_edit.employment_date %}
                                <div class=\"alert alert-warning mt-3\">
                                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                                    Votre date d'embauche ne peut être modifiée que par un administrateur.
                                </div>
                            {% endif %}
                            
                            {% if not is_self and not can_edit.full_name and not can_edit.phone and can_edit.employment_date %}
                                <div class=\"alert alert-info\">
                                    <i class=\"bi bi-info-circle me-2\"></i>
                                    Vous pouvez modifier uniquement la date d'embauche de cet employé.
                                </div>
                            {% endif %}
                            
                        </div>
                    </div>
                    
                    <hr class=\"my-4\">
                    
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('app_manager_team_show', {'id': target_user.id}) }}\" class=\"btn btn-outline-secondary btn-lg\">
                            <i class=\"bi bi-arrow-left me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                            <i class=\"bi bi-check-circle-fill me-2\"></i>Enregistrer
                        </button>
                    </div>
                    
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.modern-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 120px;
}
.icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.bg-opacity-20 {
    background-color: rgba(255, 255, 255, 0.2);
}
.nav-tabs .nav-link.active {
    color: #667eea;
    border-bottom: 3px solid #667eea;
}
</style>
{% endblock %}", "manager/team/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\manager\\team\\edit.html.twig");
    }
}
