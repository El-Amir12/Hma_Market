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

/* stock/adjustment/show.html.twig */
class __TwigTemplate_7af7b7bba783ad247475abb55050494c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/adjustment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/adjustment/show.html.twig"));

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

        yield "Détail ajustement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        
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
        yield "<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Tableau de bord</a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
        yield "\">Ajustements</a>
                    </li>
                    <li class=\"breadcrumb-item active\">#";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Détail de l'ajustement
            </h1>
        </div>
        <div>
            <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                            Informations
                        </h5>
                        <span class=\"badge ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 42, $this->source); })()), "typeBadgeClass", [], "any", false, false, false, 42), "html", null, true);
        yield " fs-6\">
                            <i class=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 43, $this->source); })()), "typeIcon", [], "any", false, false, false, 43), "html", null, true);
        yield " me-1\"></i>
                            ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 44, $this->source); })()), "typeLabel", [], "any", false, false, false, 44), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Date</small>
                                <div class=\"fw-bold\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 53, $this->source); })()), "createdAt", [], "any", false, false, false, 53), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Quantité</small>
                                <div class=\"fw-bold ";
        // line 59
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59) == "in")) ? ("text-success") : ("text-danger"));
        yield "\">
                                    ";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60) == "in")) ? ("+") : ("-"));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 60, $this->source); })()), "quantity", [], "any", false, false, false, 60), 0, ",", " "), "html", null, true);
        yield " unité(s)
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Raison</small>
                                <div class=\"fw-bold\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 67, $this->source); })()), "reason", [], "any", false, false, false, 67), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Utilisateur</small>
                                <div class=\"fw-bold\">
                                    <i class=\"fas fa-user me-1\"></i>
                                    ";
        // line 75
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 75, $this->source); })()), "createdBy", [], "any", false, false, false, 75), "fullName", [], "any", false, false, false, 75)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 75, $this->source); })()), "createdBy", [], "any", false, false, false, 75), "fullName", [], "any", false, false, false, 75), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 75, $this->source); })()), "createdBy", [], "any", false, false, false, 75), "email", [], "any", false, false, false, 75), "html", null, true)));
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 81
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 81, $this->source); })()), "justificationFile", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "                            ";
            $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 82, $this->source); })()), "justificationFile", [], "any", false, false, false, 82), "/");
            // line 83
            yield "                            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 83, $this->source); })())) >= 3)) {
                // line 84
                yield "                                ";
                $context["filename"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 84, $this->source); })()), 2), "/");
                // line 85
                yield "                                <div class=\"col-12\">
                                    <div class=\"border-bottom pb-2\">
                                        <small class=\"text-muted\">Justificatif</small>
                                        <div class=\"mt-2\">
                                            <a href=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_upload", ["folder" => CoreExtension::getAttribute($this->env, $this->source,                 // line 90
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 90, $this->source); })()), 0, [], "array", false, false, false, 90), "companyId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 91
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 91, $this->source); })()), 1, [], "array", false, false, false, 91), "filename" =>                 // line 92
(isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 92, $this->source); })())]), "html", null, true);
                // line 93
                yield "\" 
                                               target=\"_blank\" 
                                               class=\"btn btn-sm btn-outline-info\">
                                                <i class=\"fas fa-paperclip me-1\"></i>
                                                Voir le justificatif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 103
            yield "                        ";
        }
        // line 104
        yield "                    </div>
                </div>
            </div>

            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2 text-primary\"></i>
                        Lot concerné
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">N° lot</small>
                                <div class=\"fw-bold\"><code>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 120, $this->source); })()), "stockBatch", [], "any", false, false, false, 120), "batchNumber", [], "any", false, false, false, 120), "html", null, true);
        yield "</code></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Produit</small>
                                <div class=\"fw-bold\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 126, $this->source); })()), "stockBatch", [], "any", false, false, false, 126), "product", [], "any", false, false, false, 126), "name", [], "any", false, false, false, 126), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Code-barres</small>
                                <div class=\"fw-bold\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 132, $this->source); })()), "stockBatch", [], "any", false, false, false, 132), "product", [], "any", false, false, false, 132), "barcode", [], "any", false, false, false, 132), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Nouveau stock</small>
                                <div class=\"fw-bold\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["adjustment"]) || array_key_exists("adjustment", $context) ? $context["adjustment"] : (function () { throw new RuntimeError('Variable "adjustment" does not exist.', 138, $this->source); })()), "stockBatch", [], "any", false, false, false, 138), "currentQuantity", [], "any", false, false, false, 138), 0, ",", " "), "html", null, true);
        yield " unités</div>
                            </div>
                        </div>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "stock/adjustment/show.html.twig";
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
        return array (  296 => 138,  287 => 132,  278 => 126,  269 => 120,  251 => 104,  248 => 103,  236 => 93,  234 => 92,  233 => 91,  232 => 90,  231 => 89,  225 => 85,  222 => 84,  219 => 83,  216 => 82,  213 => 81,  205 => 75,  194 => 67,  183 => 60,  179 => 59,  170 => 53,  158 => 44,  154 => 43,  150 => 42,  132 => 27,  120 => 18,  115 => 16,  109 => 13,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/adjustment/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détail ajustement - {{ adjustment.id }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\">Tableau de bord</a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_stock_adjustment_index') }}\">Ajustements</a>
                    </li>
                    <li class=\"breadcrumb-item active\">#{{ adjustment.id }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Détail de l'ajustement
            </h1>
        </div>
        <div>
            <a href=\"{{ path('app_stock_adjustment_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                            Informations
                        </h5>
                        <span class=\"badge {{ adjustment.typeBadgeClass }} fs-6\">
                            <i class=\"{{ adjustment.typeIcon }} me-1\"></i>
                            {{ adjustment.typeLabel }}
                        </span>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Date</small>
                                <div class=\"fw-bold\">{{ adjustment.createdAt|date('d/m/Y H:i:s') }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Quantité</small>
                                <div class=\"fw-bold {{ adjustment.type == 'in' ? 'text-success' : 'text-danger' }}\">
                                    {{ adjustment.type == 'in' ? '+' : '-' }}{{ adjustment.quantity|number_format(0, ',', ' ') }} unité(s)
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Raison</small>
                                <div class=\"fw-bold\">{{ adjustment.reason }}</div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Utilisateur</small>
                                <div class=\"fw-bold\">
                                    <i class=\"fas fa-user me-1\"></i>
                                    {{ adjustment.createdBy.fullName ?: adjustment.createdBy.email }}
                                </div>
                            </div>
                        </div>

                        {# ✅ CORRECTION : Justificatif via la route app_serve_upload #}
                        {% if adjustment.justificationFile %}
                            {% set parts = adjustment.justificationFile|split('/') %}
                            {% if parts|length >= 3 %}
                                {% set filename = parts|slice(2)|join('/') %}
                                <div class=\"col-12\">
                                    <div class=\"border-bottom pb-2\">
                                        <small class=\"text-muted\">Justificatif</small>
                                        <div class=\"mt-2\">
                                            <a href=\"{{ path('app_serve_upload', {
                                                folder: parts[0],
                                                companyId: parts[1],
                                                filename: filename
                                            }) }}\" 
                                               target=\"_blank\" 
                                               class=\"btn btn-sm btn-outline-info\">
                                                <i class=\"fas fa-paperclip me-1\"></i>
                                                Voir le justificatif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        {% endif %}
                    </div>
                </div>
            </div>

            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2 text-primary\"></i>
                        Lot concerné
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">N° lot</small>
                                <div class=\"fw-bold\"><code>{{ adjustment.stockBatch.batchNumber }}</code></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Produit</small>
                                <div class=\"fw-bold\">{{ adjustment.stockBatch.product.name }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Code-barres</small>
                                <div class=\"fw-bold\">{{ adjustment.stockBatch.product.barcode }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Nouveau stock</small>
                                <div class=\"fw-bold\">{{ adjustment.stockBatch.currentQuantity|number_format(0, ',', ' ') }} unités</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "stock/adjustment/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\adjustment\\show.html.twig");
    }
}
