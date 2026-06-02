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

/* super_admin/analysis_price/new.html.twig */
class __TwigTemplate_e4cfad3ca4a3cda6690b4ccdfd194928 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_price/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_price/new.html.twig"));

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

        yield "Nouveau prix - Super Admin";
        
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
    .form-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
    }
    .form-header {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
    }
    .form-group-custom {
        margin-bottom: 1.5rem;
    }
    .form-group-custom label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #1e293b;
    }
    .form-group-custom .form-control,
    .form-group-custom .form-select {
        border-radius: 0.75rem;
        border: 1px solid #e2e8f0;
        padding: 0.75rem 1rem;
        transition: all 0.2s ease;
    }
    .form-group-custom .form-control:focus,
    .form-group-custom .form-select:focus {
        border-color: #0463f1;
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.1);
    }
    .form-group-custom textarea {
        border-radius: 0.75rem;
    }
    .price-preview {
        background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 100%);
        border-radius: 1rem;
        padding: 1rem;
        margin-top: 1rem;
        text-align: center;
    }
    .price-preview-value {
        font-size: 2rem;
        font-weight: bold;
        color: #0463f1;
    }
    .price-hint {
        font-size: 0.7rem;
        color: #64748b;
    }
    .btn-custom {
        padding: 0.75rem 1.5rem;
        border-radius: 0.75rem;
        font-weight: 600;
        transition: all 0.2s ease;
    }
    .btn-custom-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        border: none;
        color: white;
    }
    .btn-custom-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
    }
    .btn-custom-secondary {
        background: #f1f5f9;
        border: none;
        color: #475569;
    }
    .btn-custom-secondary:hover {
        background: #e2e8f0;
        transform: translateY(-1px);
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
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-7\">
            <div class=\"form-card shadow-sm\">
                <div class=\"form-header p-4 text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <i class=\"fas fa-plus-circle fa-2x mb-2\"></i>
                            <h2 class=\"h4 mb-0 fw-bold\">Nouveau prix d'analyse</h2>
                            <p class=\"mb-0 opacity-75 mt-1\">Ajoutez une nouvelle offre d'analyse</p>
                        </div>
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_index");
        yield "\" class=\"btn btn-light btn-sm\">
                            <i class=\"fas fa-arrow-left me-1\"></i> Retour
                        </a>
                    </div>
                </div>
                
                <div class=\"p-4\">
                    ";
        // line 102
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "id" => "priceForm"]]);
        yield "
                    
                    ";
        // line 104
        yield from $this->load("super_admin/analysis_price/_form.html.twig", 104)->unwrap()->yield($context);
        // line 105
        yield "                    
                    <hr class=\"my-4\">
                    
                    <div class=\"d-flex justify-content-end gap-2\">
                        <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_index");
        yield "\" class=\"btn btn-custom btn-custom-secondary\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-custom btn-custom-primary\" id=\"submitBtn\">
                            <i class=\"fas fa-save me-1\"></i> Enregistrer
                        </button>
                    </div>
                    
                    ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        yield "
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
        return "super_admin/analysis_price/new.html.twig";
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
        return array (  247 => 117,  236 => 109,  230 => 105,  228 => 104,  223 => 102,  213 => 95,  200 => 84,  187 => 83,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis_price/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nouveau prix - Super Admin{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .form-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
    }
    .form-header {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
    }
    .form-group-custom {
        margin-bottom: 1.5rem;
    }
    .form-group-custom label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #1e293b;
    }
    .form-group-custom .form-control,
    .form-group-custom .form-select {
        border-radius: 0.75rem;
        border: 1px solid #e2e8f0;
        padding: 0.75rem 1rem;
        transition: all 0.2s ease;
    }
    .form-group-custom .form-control:focus,
    .form-group-custom .form-select:focus {
        border-color: #0463f1;
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.1);
    }
    .form-group-custom textarea {
        border-radius: 0.75rem;
    }
    .price-preview {
        background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 100%);
        border-radius: 1rem;
        padding: 1rem;
        margin-top: 1rem;
        text-align: center;
    }
    .price-preview-value {
        font-size: 2rem;
        font-weight: bold;
        color: #0463f1;
    }
    .price-hint {
        font-size: 0.7rem;
        color: #64748b;
    }
    .btn-custom {
        padding: 0.75rem 1.5rem;
        border-radius: 0.75rem;
        font-weight: 600;
        transition: all 0.2s ease;
    }
    .btn-custom-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        border: none;
        color: white;
    }
    .btn-custom-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
    }
    .btn-custom-secondary {
        background: #f1f5f9;
        border: none;
        color: #475569;
    }
    .btn-custom-secondary:hover {
        background: #e2e8f0;
        transform: translateY(-1px);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-7\">
            <div class=\"form-card shadow-sm\">
                <div class=\"form-header p-4 text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <i class=\"fas fa-plus-circle fa-2x mb-2\"></i>
                            <h2 class=\"h4 mb-0 fw-bold\">Nouveau prix d'analyse</h2>
                            <p class=\"mb-0 opacity-75 mt-1\">Ajoutez une nouvelle offre d'analyse</p>
                        </div>
                        <a href=\"{{ path('super_admin_analysis_price_index') }}\" class=\"btn btn-light btn-sm\">
                            <i class=\"fas fa-arrow-left me-1\"></i> Retour
                        </a>
                    </div>
                </div>
                
                <div class=\"p-4\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true, 'id': 'priceForm'}}) }}
                    
                    {% include 'super_admin/analysis_price/_form.html.twig' %}
                    
                    <hr class=\"my-4\">
                    
                    <div class=\"d-flex justify-content-end gap-2\">
                        <a href=\"{{ path('super_admin_analysis_price_index') }}\" class=\"btn btn-custom btn-custom-secondary\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-custom btn-custom-primary\" id=\"submitBtn\">
                            <i class=\"fas fa-save me-1\"></i> Enregistrer
                        </button>
                    </div>
                    
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "super_admin/analysis_price/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_price\\new.html.twig");
    }
}
