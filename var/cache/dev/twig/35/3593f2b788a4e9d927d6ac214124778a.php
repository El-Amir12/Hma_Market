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

/* admin/category_recipe/edit.html.twig */
class __TwigTemplate_113d48f1c29cdc1eb7c7e3fd82f4c188 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category_recipe/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category_recipe/edit.html.twig"));

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

        yield "Modifier ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
        
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
    <!-- En-tête avec navigation -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-utensils me-1\"></i> Catégories de plats
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20)), "truncate", [20, "..."], "method", false, false, false, 20), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-edit me-2\"></i> Modifier la catégorie
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Mettez à jour les informations de la catégorie de plats</p>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-utensils fa-3x text-warning opacity-75\"></i>
        </div>
    </div>

    <!-- Alertes flash -->
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", ["success"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 44
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "    
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", ["error"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "
    <!-- Informations rapides sur la catégorie -->
    <div class=\"row mb-4\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 bg-gradient-light shadow-sm\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex align-items-center\">
                        ";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
            yield "\"
                                 class=\"rounded me-3\"
                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                        ";
        } else {
            // line 69
            yield "                            <div class=\"bg-primary rounded d-flex align-items-center justify-content-center me-3\"
                                 style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-utensils text-white\"></i>
                            </div>
                        ";
        }
        // line 74
        yield "                        <div>
                            <h5 class=\"mb-1\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
        yield "</h5>
                            <div class=\"d-flex align-items-center\">
                                <span class=\"badge me-2 ";
        // line 77
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 77, $this->source); })()), "isActive", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                    ";
        // line 78
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 78, $this->source); })()), "isActive", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
        yield "
                                </span>
                                <span class=\"badge bg-info me-2\">
                                    ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 81, $this->source); })()), "recipes", [], "any", false, false, false, 81)), "html", null, true);
        yield " plats
                                </span>
                                <span class=\"badge bg-secondary\">
                                    ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 84, $this->source); })()), "children", [], "any", false, false, false, 84)), "html", null, true);
        yield " sous-catégories
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    ";
        // line 95
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/category_recipe/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "

    <!-- Section suppression (optionnelle) -->
    ";
        // line 98
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 98, $this->source); })()), "recipes", [], "any", false, false, false, 98)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 98, $this->source); })()), "children", [], "any", false, false, false, 98)) == 0))) {
            // line 99
            yield "    <div class=\"row mt-4\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-danger shadow-sm\">
                <div class=\"card-header bg-danger text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Zone de danger
                    </h5>
                </div>
                <div class=\"card-body\">
                    <h6 class=\"text-danger mb-3\">Supprimer cette catégorie</h6>
                    <p class=\"text-muted mb-4\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Cette action est irréversible. Une fois supprimée, la catégorie ne pourra plus être restaurée.
                    </p>
                    <button type=\"button\" 
                            class=\"btn btn-outline-danger\"
                            data-bs-toggle=\"modal\" 
                            data-bs-target=\"#deleteCategoryModal\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer cette catégorie
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de suppression -->
    <div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header border-0\">
                    <h5 class=\"modal-title text-danger\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer la catégorie
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-4\">
                    <div class=\"mb-4\">
                        <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                        <h5>Êtes-vous sûr de vouloir supprimer cette catégorie ?</h5>
                        <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                    </div>
                    <div class=\"mb-3\">
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>
                            La catégorie <strong>\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 143, $this->source); })()), "name", [], "any", false, false, false, 143), "html", null, true);
            yield "\"</strong> sera définitivement supprimée.
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </button>
                    <form action=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"fas fa-trash me-2\"></i> Supprimer définitivement
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 162
        yield "</div>

";
        // line 164
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

        // line 165
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

.breadcrumb {
    background-color: transparent;
    padding-left: 0;
}

.breadcrumb-item a {
    color: #667eea;
    transition: color 0.2s ease;
}

.breadcrumb-item a:hover {
    color: #0463f1;
    text-decoration: underline;
}

.breadcrumb-item.active {
    color: #6c757d;
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
        return "admin/category_recipe/edit.html.twig";
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
        return array (  367 => 165,  344 => 164,  340 => 162,  327 => 152,  323 => 151,  312 => 143,  266 => 99,  264 => 98,  258 => 95,  244 => 84,  238 => 81,  232 => 78,  228 => 77,  223 => 75,  220 => 74,  213 => 69,  206 => 65,  201 => 64,  199 => 63,  190 => 56,  180 => 52,  177 => 51,  173 => 50,  170 => 49,  160 => 45,  157 => 44,  153 => 43,  135 => 28,  124 => 20,  120 => 19,  112 => 14,  103 => 7,  90 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category_recipe/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier {{ category.name }} - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec navigation -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_category_recipe_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-utensils me-1\"></i> Catégories de plats
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_category_recipe_show', {'id': category.id}) }}\" class=\"text-decoration-none\">
                            {{ category.name|u.truncate(20, '...') }}
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"{{ path('app_admin_category_recipe_index') }}\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-edit me-2\"></i> Modifier la catégorie
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Mettez à jour les informations de la catégorie de plats</p>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-utensils fa-3x text-warning opacity-75\"></i>
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

    <!-- Informations rapides sur la catégorie -->
    <div class=\"row mb-4\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 bg-gradient-light shadow-sm\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex align-items-center\">
                        {% if category.image %}
                            <img src=\"{{ asset('uploads/categories_plats/' ~ category.image) }}\" 
                                 alt=\"{{ category.name }}\"
                                 class=\"rounded me-3\"
                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                        {% else %}
                            <div class=\"bg-primary rounded d-flex align-items-center justify-content-center me-3\"
                                 style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-utensils text-white\"></i>
                            </div>
                        {% endif %}
                        <div>
                            <h5 class=\"mb-1\">{{ category.name }}</h5>
                            <div class=\"d-flex align-items-center\">
                                <span class=\"badge me-2 {{ category.isActive ? 'bg-success' : 'bg-danger' }}\">
                                    {{ category.isActive ? 'Active' : 'Inactive' }}
                                </span>
                                <span class=\"badge bg-info me-2\">
                                    {{ category.recipes|length }} plats
                                </span>
                                <span class=\"badge bg-secondary\">
                                    {{ category.children|length }} sous-catégories
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    {{ include('admin/category_recipe/_form.html.twig', {'button_label': 'Mettre à jour'}) }}

    <!-- Section suppression (optionnelle) -->
    {% if category.recipes|length == 0 and category.children|length == 0 %}
    <div class=\"row mt-4\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-danger shadow-sm\">
                <div class=\"card-header bg-danger text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Zone de danger
                    </h5>
                </div>
                <div class=\"card-body\">
                    <h6 class=\"text-danger mb-3\">Supprimer cette catégorie</h6>
                    <p class=\"text-muted mb-4\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Cette action est irréversible. Une fois supprimée, la catégorie ne pourra plus être restaurée.
                    </p>
                    <button type=\"button\" 
                            class=\"btn btn-outline-danger\"
                            data-bs-toggle=\"modal\" 
                            data-bs-target=\"#deleteCategoryModal\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer cette catégorie
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de suppression -->
    <div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header border-0\">
                    <h5 class=\"modal-title text-danger\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer la catégorie
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-4\">
                    <div class=\"mb-4\">
                        <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                        <h5>Êtes-vous sûr de vouloir supprimer cette catégorie ?</h5>
                        <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                    </div>
                    <div class=\"mb-3\">
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>
                            La catégorie <strong>\"{{ category.name }}\"</strong> sera définitivement supprimée.
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </button>
                    <form action=\"{{ path('app_admin_category_recipe_delete', {'id': category.id}) }}\" method=\"post\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ category.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"fas fa-trash me-2\"></i> Supprimer définitivement
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
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

.breadcrumb {
    background-color: transparent;
    padding-left: 0;
}

.breadcrumb-item a {
    color: #667eea;
    transition: color 0.2s ease;
}

.breadcrumb-item a:hover {
    color: #0463f1;
    text-decoration: underline;
}

.breadcrumb-item.active {
    color: #6c757d;
}
</style>
{% endblock %}
{% endblock %}", "admin/category_recipe/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category_recipe\\edit.html.twig");
    }
}
