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

/* admin/type_promotion/show.html.twig */
class __TwigTemplate_0e495137063ac0348066cf496631fed1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type_promotion/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type_promotion/show.html.twig"));

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

        yield "Détails du type de promotion - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        
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
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
        yield "\">Types de promotion</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-tag me-2 text-primary\"></i>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mb-0\">Gérez ce type de promotion</p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Message flash -->
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["success"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            yield "        <div class=\"alert alert-success alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", ["error"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
    <div class=\"row g-4\">
        <!-- Colonne principale - Informations -->
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm rounded-4 mb-4\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2 text-primary\"></i>Informations générales</h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-borderless\">
                        <tbody>
                            <tr>
                                <th style=\"width: 200px;\">Nom du type</th>
                                <td>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["type"] ?? null), "description", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "Aucune description")) : ("Aucune description")), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Statut</th>
                                <td>
                                    <span class=\"badge ";
        // line 61
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 61, $this->source); })()), "isActive", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " px-3 py-2\">
                                        ";
        // line 62
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 62, $this->source); })()), "isActive", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Nombre de promotions associées</th>
                                <td>
                                    <span class=\"badge bg-info\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["promotionsCount"]) || array_key_exists("promotionsCount", $context) ? $context["promotionsCount"] : (function () { throw new RuntimeError('Variable "promotionsCount" does not exist.', 69, $this->source); })()), "html", null, true);
        yield "</span>
                                    promotion(s)
                                </td>
                            </tr>
                            <tr>
                                <th>Créé par</th>
                                <td>";
        // line 75
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["type"] ?? null), "user", [], "any", false, true, false, 75), "fullName", [], "any", true, true, false, 75) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "fullName", [], "any", false, false, false, 75)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "fullName", [], "any", false, false, false, 75), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["type"] ?? null), "user", [], "any", false, true, false, 75), "email", [], "any", true, true, false, 75) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "email", [], "any", false, false, false, 75)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "email", [], "any", false, false, false, 75), "html", null, true)) : ("N/A"))));
        yield "</td>
                            </tr>
                            <tr>
                                <th>Date de création</th>
                                <td>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 79, $this->source); })()), "createdAt", [], "any", false, false, false, 79), "d/m/Y à H:i"), "html", null, true);
        yield "</td>
                            </tr>
                            ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 81, $this->source); })()), "updatedAt", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "                            <tr>
                                <th>Dernière modification</th>
                                <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 84, $this->source); })()), "updatedAt", [], "any", false, false, false, 84), "d/m/Y à H:i"), "html", null, true);
            yield "</td>
                            </tr>
                            ";
        }
        // line 87
        yield "                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Liste des promotions associées -->
            ";
        // line 93
        if (((isset($context["promotionsCount"]) || array_key_exists("promotionsCount", $context) ? $context["promotionsCount"] : (function () { throw new RuntimeError('Variable "promotionsCount" does not exist.', 93, $this->source); })()) > 0)) {
            // line 94
            yield "            <div class=\"card border-0 shadow-sm rounded-4\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-percent me-2 text-primary\"></i>Promotions utilisant ce type</h5>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Nom</th>
                                    <th>Valeur</th>
                                    <th>Période</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 111, $this->source); })()), "promotions", [], "any", false, false, false, 111));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 112
                yield "                                <tr>
                                    <td>";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 113), "html", null, true);
                yield "</td>
                                    <td>
                                        ";
                // line 115
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, false, false, 115), "isPercentage", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 116
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 116), "html", null, true);
                    yield "%
                                        ";
                } else {
                    // line 118
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 118), 0, ",", " "), "html", null, true);
                    yield " FCFA
                                        ";
                }
                // line 120
                yield "                                    </td>
                                    <td>
                                        ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "startDate", [], "any", false, false, false, 122), "d/m/Y"), "html", null, true);
                yield "
                                        ";
                // line 123
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 124
                    yield "                                            → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 124), "d/m/Y"), "html", null, true);
                    yield "
                                        ";
                } else {
                    // line 126
                    yield "                                            → Illimité
                                        ";
                }
                // line 128
                yield "                                    </td>
                                    <td>
                                        <span class=\"badge ";
                // line 130
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
                yield "\">
                                            ";
                // line 131
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
                yield "
                                        </span>
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 135)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            ";
        }
        // line 147
        yield "        </div>

        <!-- Colonne latérale - Actions -->
        <div class=\"col-lg-4\">
            <div class=\"card border-0 shadow-sm rounded-4 mb-4\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-cog me-2 text-primary\"></i>Actions</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-3\">
                        <a href=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-lg\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        
                        <!-- Formulaire Activer/Désactiver -->
                        <form method=\"post\" action=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162)]), "html", null, true);
        yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 163, $this->source); })()), "id", [], "any", false, false, false, 163))), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn ";
        // line 164
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 164, $this->source); })()), "isActive", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-danger") : ("btn-success"));
        yield " btn-lg w-100\">
                                <i class=\"fas ";
        // line 165
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 165, $this->source); })()), "isActive", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-pause") : ("fa-play"));
        yield " me-2\"></i>
                                ";
        // line 166
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 166, $this->source); })()), "isActive", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield "
                            </button>
                        </form>
                        
                        ";
        // line 170
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && ((isset($context["promotionsCount"]) || array_key_exists("promotionsCount", $context) ? $context["promotionsCount"] : (function () { throw new RuntimeError('Variable "promotionsCount" does not exist.', 170, $this->source); })()) == 0))) {
            // line 171
            yield "                            <button type=\"button\" class=\"btn btn-outline-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"fas fa-trash-alt me-2\"></i> Supprimer
                            </button>
                        ";
        } elseif ((        // line 174
(isset($context["promotionsCount"]) || array_key_exists("promotionsCount", $context) ? $context["promotionsCount"] : (function () { throw new RuntimeError('Variable "promotionsCount" does not exist.', 174, $this->source); })()) > 0)) {
            // line 175
            yield "                            <div class=\"alert alert-warning mb-0\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                Ce type ne peut pas être supprimé car il est utilisé par ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["promotionsCount"]) || array_key_exists("promotionsCount", $context) ? $context["promotionsCount"] : (function () { throw new RuntimeError('Variable "promotionsCount" does not exist.', 177, $this->source); })()), "html", null, true);
            yield " promotion(s).
                            </div>
                        ";
        }
        // line 180
        yield "                    </div>
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class=\"card border-0 shadow-sm rounded-4\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-chart-line me-2 text-primary\"></i>Statistiques</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-6 mb-3\">
                            <div class=\"stat-card p-3 bg-light rounded-3\">
                                <i class=\"fas fa-percent fa-2x text-primary mb-2\"></i>
                                <h4 class=\"mb-0 fw-bold\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["promotionsCount"]) || array_key_exists("promotionsCount", $context) ? $context["promotionsCount"] : (function () { throw new RuntimeError('Variable "promotionsCount" does not exist.', 194, $this->source); })()), "html", null, true);
        yield "</h4>
                                <small class=\"text-muted\">Promotions associées</small>
                            </div>
                        </div>
                        <div class=\"col-6 mb-3\">
                            <div class=\"stat-card p-3 bg-light rounded-3\">
                                <i class=\"fas fa-calendar-alt fa-2x text-primary mb-2\"></i>
                                <h4 class=\"mb-0 fw-bold\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 201, $this->source); })()), "createdAt", [], "any", false, false, false, 201), "d/m/Y"), "html", null, true);
        yield "</h4>
                                <small class=\"text-muted\">Date de création</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
";
        // line 213
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && ((isset($context["promotionsCount"]) || array_key_exists("promotionsCount", $context) ? $context["promotionsCount"] : (function () { throw new RuntimeError('Variable "promotionsCount" does not exist.', 213, $this->source); })()) == 0))) {
            // line 214
            yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Êtes-vous sûr de vouloir supprimer ce type ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>
                <p><strong>";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 227, $this->source); })()), "name", [], "any", false, false, false, 227), "html", null, true);
            yield "</strong></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form method=\"post\" action=\"";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 231, $this->source); })()), "id", [], "any", false, false, false, 231)]), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 232, $this->source); })()), "id", [], "any", false, false, false, 232))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 240
        yield "
<style>
.stat-card {
    transition: transform 0.2s;
}
.stat-card:hover {
    transform: scale(1.02);
    background-color: #ffffff !important;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
}
.rounded-4 {
    border-radius: 1rem;
}
.table th {
    font-weight: 600;
    color: #4a5568;
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
        return "admin/type_promotion/show.html.twig";
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
        return array (  500 => 240,  489 => 232,  485 => 231,  478 => 227,  463 => 214,  461 => 213,  446 => 201,  436 => 194,  420 => 180,  414 => 177,  410 => 175,  408 => 174,  403 => 171,  401 => 170,  394 => 166,  390 => 165,  386 => 164,  382 => 163,  378 => 162,  370 => 157,  358 => 147,  350 => 141,  338 => 135,  331 => 131,  327 => 130,  323 => 128,  319 => 126,  313 => 124,  311 => 123,  307 => 122,  303 => 120,  297 => 118,  291 => 116,  289 => 115,  284 => 113,  281 => 112,  277 => 111,  258 => 94,  256 => 93,  248 => 87,  242 => 84,  238 => 82,  236 => 81,  231 => 79,  224 => 75,  215 => 69,  205 => 62,  201 => 61,  193 => 56,  186 => 52,  171 => 39,  162 => 37,  157 => 36,  148 => 34,  144 => 33,  134 => 26,  128 => 23,  120 => 18,  113 => 14,  109 => 13,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/type_promotion/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détails du type de promotion - {{ type.name }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_type_promotion_index') }}\">Types de promotion</a></li>
                    <li class=\"breadcrumb-item active\">{{ type.name }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-tag me-2 text-primary\"></i>{{ type.name }}
            </h1>
            <p class=\"text-muted mb-0\">Gérez ce type de promotion</p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('app_admin_type_promotion_edit', {id: type.id}) }}\" class=\"btn btn-warning\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <a href=\"{{ path('app_admin_type_promotion_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Message flash -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}

    <div class=\"row g-4\">
        <!-- Colonne principale - Informations -->
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm rounded-4 mb-4\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2 text-primary\"></i>Informations générales</h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-borderless\">
                        <tbody>
                            <tr>
                                <th style=\"width: 200px;\">Nom du type</th>
                                <td>{{ type.name }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ type.description|default('Aucune description') }}</td>
                            </tr>
                            <tr>
                                <th>Statut</th>
                                <td>
                                    <span class=\"badge {{ type.isActive ? 'bg-success' : 'bg-secondary' }} px-3 py-2\">
                                        {{ type.isActive ? 'ACTIF' : 'INACTIF' }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Nombre de promotions associées</th>
                                <td>
                                    <span class=\"badge bg-info\">{{ promotionsCount }}</span>
                                    promotion(s)
                                </td>
                            </tr>
                            <tr>
                                <th>Créé par</th>
                                <td>{{ type.user.fullName ?? type.user.email ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Date de création</th>
                                <td>{{ type.createdAt|date('d/m/Y à H:i') }}</td>
                            </tr>
                            {% if type.updatedAt %}
                            <tr>
                                <th>Dernière modification</th>
                                <td>{{ type.updatedAt|date('d/m/Y à H:i') }}</td>
                            </tr>
                            {% endif %}
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Liste des promotions associées -->
            {% if promotionsCount > 0 %}
            <div class=\"card border-0 shadow-sm rounded-4\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-percent me-2 text-primary\"></i>Promotions utilisant ce type</h5>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Nom</th>
                                    <th>Valeur</th>
                                    <th>Période</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for promotion in type.promotions %}
                                <tr>
                                    <td>{{ promotion.name }}</td>
                                    <td>
                                        {% if promotion.typePromotion.isPercentage %}
                                            {{ promotion.value }}%
                                        {% else %}
                                            {{ promotion.value|number_format(0, ',', ' ') }} FCFA
                                        {% endif %}
                                    </td>
                                    <td>
                                        {{ promotion.startDate|date('d/m/Y') }}
                                        {% if promotion.endDate %}
                                            → {{ promotion.endDate|date('d/m/Y') }}
                                        {% else %}
                                            → Illimité
                                        {% endif %}
                                    </td>
                                    <td>
                                        <span class=\"badge {{ promotion.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                            {{ promotion.isActive ? 'Actif' : 'Inactif' }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('app_admin_promotion_show', {id: promotion.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>

        <!-- Colonne latérale - Actions -->
        <div class=\"col-lg-4\">
            <div class=\"card border-0 shadow-sm rounded-4 mb-4\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-cog me-2 text-primary\"></i>Actions</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-3\">
                        <a href=\"{{ path('app_admin_type_promotion_edit', {id: type.id}) }}\" class=\"btn btn-warning btn-lg\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        
                        <!-- Formulaire Activer/Désactiver -->
                        <form method=\"post\" action=\"{{ path('app_admin_type_promotion_toggle_status', {id: type.id}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status' ~ type.id) }}\">
                            <button type=\"submit\" class=\"btn {{ type.isActive ? 'btn-danger' : 'btn-success' }} btn-lg w-100\">
                                <i class=\"fas {{ type.isActive ? 'fa-pause' : 'fa-play' }} me-2\"></i>
                                {{ type.isActive ? 'Désactiver' : 'Activer' }}
                            </button>
                        </form>
                        
                        {% if is_granted('ROLE_ADMIN') and promotionsCount == 0 %}
                            <button type=\"button\" class=\"btn btn-outline-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"fas fa-trash-alt me-2\"></i> Supprimer
                            </button>
                        {% elseif promotionsCount > 0 %}
                            <div class=\"alert alert-warning mb-0\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                Ce type ne peut pas être supprimé car il est utilisé par {{ promotionsCount }} promotion(s).
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class=\"card border-0 shadow-sm rounded-4\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-chart-line me-2 text-primary\"></i>Statistiques</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-6 mb-3\">
                            <div class=\"stat-card p-3 bg-light rounded-3\">
                                <i class=\"fas fa-percent fa-2x text-primary mb-2\"></i>
                                <h4 class=\"mb-0 fw-bold\">{{ promotionsCount }}</h4>
                                <small class=\"text-muted\">Promotions associées</small>
                            </div>
                        </div>
                        <div class=\"col-6 mb-3\">
                            <div class=\"stat-card p-3 bg-light rounded-3\">
                                <i class=\"fas fa-calendar-alt fa-2x text-primary mb-2\"></i>
                                <h4 class=\"mb-0 fw-bold\">{{ type.createdAt|date('d/m/Y') }}</h4>
                                <small class=\"text-muted\">Date de création</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
{% if is_granted('ROLE_ADMIN') and promotionsCount == 0 %}
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Êtes-vous sûr de vouloir supprimer ce type ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>
                <p><strong>{{ type.name }}</strong></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form method=\"post\" action=\"{{ path('app_admin_type_promotion_delete', {id: type.id}) }}\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ type.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}

<style>
.stat-card {
    transition: transform 0.2s;
}
.stat-card:hover {
    transform: scale(1.02);
    background-color: #ffffff !important;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
}
.rounded-4 {
    border-radius: 1rem;
}
.table th {
    font-weight: 600;
    color: #4a5568;
}
</style>
{% endblock %}", "admin/type_promotion/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\type_promotion\\show.html.twig");
    }
}
