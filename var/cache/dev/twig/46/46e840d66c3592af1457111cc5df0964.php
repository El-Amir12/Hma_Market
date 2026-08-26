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

/* admin/supplier/edit.html.twig */
class __TwigTemplate_f61512e35f948b0ff38023906075e5e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/supplier/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/supplier/edit.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
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
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
        yield "\" class=\"text-decoration-none\">Fournisseurs</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14)), "truncate", [20], "method", false, false, false, 14), "html", null, true);
        yield "</a></li>
                    <li class=\"breadcrumb-item active\">Modifier</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-edit text-warning me-2\"></i> Modifier ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">Mettez à jour les informations du fournisseur</p>
        </div>
        <div class=\"float-animation\">
            <i class=\"fas fa-truck fa-3x text-warning opacity-50\"></i>
        </div>
    </div>

    <!-- Messages flash -->
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["success"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            yield "        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["error"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            yield "        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "
    <!-- Formulaire -->
    ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/supplier/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "

    <!-- Zone de danger (suppression) si pas d'achats -->
    ";
        // line 46
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 46, $this->source); })()), "purchases", [], "any", false, false, false, 46)) == 0) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 47
            yield "    <div class=\"row mt-4\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-danger shadow-sm\">
                <div class=\"card-header bg-danger text-white\">
                    <h5 class=\"card-title mb-0\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Zone de danger</h5>
                </div>
                <div class=\"card-body\">
                    <h6 class=\"text-danger mb-3\">Supprimer ce fournisseur</h6>
                    <p class=\"text-muted mb-4\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Cette action est irréversible.
                    </p>
                    <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteSupplierModal\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer ce fournisseur
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de suppression -->
    <div class=\"modal fade\" id=\"deleteSupplierModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-danger text-white border-0\">
                    <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Supprimer ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), "html", null, true);
            yield " ?</h5>
                    <p class=\"text-muted\">Cette action est irréversible.</p>
                </div>
                <div class=\"modal-footer border-0 justify-content-center\">
                    <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form action=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"btn btn-danger px-4\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 91
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 94
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

        // line 95
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    /* Vous pouvez également copier les autres styles de la catégorie si nécessaire */
    .card-hover {
        transition: all 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
    }
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
    }
    .form-floating > label {
        padding-left: 2.5rem;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3.5rem + 2px);
        line-height: 1.25;
        padding: 1rem 0.75rem 0.5rem 2.5rem;
    }
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
        color: #667eea;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        border-radius: 10px;
        border: 2px solid #e0e0e0;
    }
    .form-floating > .form-control:focus,
    .form-floating > .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
    }
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }
    .btn-outline-secondary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
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
        return "admin/supplier/edit.html.twig";
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
        return array (  265 => 95,  252 => 94,  240 => 91,  229 => 83,  225 => 82,  217 => 77,  185 => 47,  183 => 46,  177 => 43,  173 => 41,  163 => 37,  160 => 36,  155 => 35,  145 => 31,  142 => 30,  138 => 29,  125 => 19,  115 => 14,  111 => 13,  103 => 7,  90 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/supplier/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier {{ supplier.name }} - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_supplier_index') }}\" class=\"text-decoration-none\">Fournisseurs</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_supplier_show', {'id': supplier.id}) }}\" class=\"text-decoration-none\">{{ supplier.name|u.truncate(20) }}</a></li>
                    <li class=\"breadcrumb-item active\">Modifier</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-edit text-warning me-2\"></i> Modifier {{ supplier.name }}
            </h1>
            <p class=\"text-muted mt-2\">Mettez à jour les informations du fournisseur</p>
        </div>
        <div class=\"float-animation\">
            <i class=\"fas fa-truck fa-3x text-warning opacity-50\"></i>
        </div>
    </div>

    <!-- Messages flash -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- Formulaire -->
    {{ include('admin/supplier/_form.html.twig', {'button_label': 'Mettre à jour'}) }}

    <!-- Zone de danger (suppression) si pas d'achats -->
    {% if supplier.purchases|length == 0 and is_granted('ROLE_ADMIN') %}
    <div class=\"row mt-4\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-danger shadow-sm\">
                <div class=\"card-header bg-danger text-white\">
                    <h5 class=\"card-title mb-0\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Zone de danger</h5>
                </div>
                <div class=\"card-body\">
                    <h6 class=\"text-danger mb-3\">Supprimer ce fournisseur</h6>
                    <p class=\"text-muted mb-4\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Cette action est irréversible.
                    </p>
                    <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteSupplierModal\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer ce fournisseur
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de suppression -->
    <div class=\"modal fade\" id=\"deleteSupplierModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-danger text-white border-0\">
                    <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Supprimer {{ supplier.name }} ?</h5>
                    <p class=\"text-muted\">Cette action est irréversible.</p>
                </div>
                <div class=\"modal-footer border-0 justify-content-center\">
                    <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form action=\"{{ path('app_admin_supplier_delete', {'id': supplier.id}) }}\" method=\"post\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ supplier.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger px-4\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    /* Vous pouvez également copier les autres styles de la catégorie si nécessaire */
    .card-hover {
        transition: all 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
    }
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
    }
    .form-floating > label {
        padding-left: 2.5rem;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3.5rem + 2px);
        line-height: 1.25;
        padding: 1rem 0.75rem 0.5rem 2.5rem;
    }
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
        color: #667eea;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        border-radius: 10px;
        border: 2px solid #e0e0e0;
    }
    .form-floating > .form-control:focus,
    .form-floating > .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
    }
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }
    .btn-outline-secondary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
</style>
{% endblock %}", "admin/supplier/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\supplier\\edit.html.twig");
    }
}
