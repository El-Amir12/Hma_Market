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

/* admin/recipe/show.html.twig */
class __TwigTemplate_b7e1296334dac1568af52ba28500a9a4 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipe/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " - Détails du plat - HMA Market";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-utensils me-1\"></i> Plats
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18)), "truncate", [30, "..."], "method", false, false, false, 18), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <div class=\"d-flex align-items-center\">
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index");
        yield "\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-utensils me-2\"></i> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        yield "
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Détails du plat et de sa composition</p>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-utensils fa-3x text-primary opacity-75\"></i>
        </div>
    </div>

    <!-- Alertes flash -->
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["success"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", ["error"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 44
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
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
    <div class=\"row g-4\">
        <!-- Colonne gauche : Informations générales -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i> Informations du plat
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <!-- Image (optionnelle) -->
                        <div class=\"col-md-4 text-center\">
                            ";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
            yield "\" 
                                     class=\"img-fluid rounded shadow-sm mb-3\"
                                     style=\"max-height: 150px; object-fit: cover;\">
                            ";
        } else {
            // line 69
            yield "                                <div class=\"bg-light rounded d-flex align-items-center justify-content-center mb-3\"
                                     style=\"height: 150px;\">
                                    <i class=\"fas fa-utensils fa-4x text-muted\"></i>
                                </div>
                            ";
        }
        // line 74
        yield "                            <div class=\"mt-2\">
                                ";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 75, $this->source); })()), "isActive", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "                                    <span class=\"badge bg-success\"><i class=\"fas fa-toggle-on me-1\"></i> Actif</span>
                                ";
        } else {
            // line 78
            yield "                                    <span class=\"badge bg-danger\"><i class=\"fas fa-toggle-off me-1\"></i> Inactif</span>
                                ";
        }
        // line 80
        yield "                                ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 80, $this->source); })()), "subscriptionActive", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "                                    <span class=\"badge bg-warning text-dark ms-1\"><i class=\"fas fa-clock me-1\"></i> Hors quota</span>
                                ";
        }
        // line 83
        yield "                            </div>
                        </div>
                        <div class=\"col-md-8\">
                            <div class=\"info-item\">
                                <div class=\"info-label\"><i class=\"fas fa-tag text-primary me-2\"></i> Nom</div>
                                <div class=\"info-value\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"info-item\">
                                <div class=\"info-label\"><i class=\"fas fa-folder text-primary me-2\"></i> Catégorie</div>
                                <div class=\"info-value\">
                                    ";
        // line 93
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 93, $this->source); })()), "category", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "                                        <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 94, $this->source); })()), "category", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true);
            yield "</span>
                                        ";
            // line 95
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 95, $this->source); })()), "category", [], "any", false, false, false, 95), "parent", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "                                            <small class=\"text-muted d-block mt-1\">
                                                <i class=\"fas fa-level-up-alt me-1\"></i> ";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 97, $this->source); })()), "category", [], "any", false, false, false, 97), "parent", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
                yield "
                                            </small>
                                        ";
            }
            // line 100
            yield "                                    ";
        } else {
            // line 101
            yield "                                        <span class=\"text-muted\">Non catégorisé</span>
                                    ";
        }
        // line 103
        yield "                                </div>
                            </div>
                            <div class=\"info-item\">
                                <div class=\"info-label\"><i class=\"fas fa-money-bill-wave text-primary me-2\"></i> Prix de vente</div>
                                <div class=\"info-value fw-bold text-success\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 107, $this->source); })()), "sellingPrice", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 107, $this->source); })()), "hmaService", [], "any", false, false, false, 107)), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    ";
        // line 113
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 113, $this->source); })()), "description", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 114
            yield "                    <div class=\"mt-4\">
                        <div class=\"info-label\"><i class=\"fas fa-align-left text-primary me-2\"></i> Description</div>
                        <div class=\"info-value bg-light p-3 rounded\">";
            // line 116
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 116, $this->source); })()), "description", [], "any", false, false, false, 116), "html", null, true));
            yield "</div>
                    </div>
                    ";
        }
        // line 119
        yield "
                    <!-- Instructions -->
                    ";
        // line 121
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 121, $this->source); })()), "instructions", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "                    <div class=\"mt-4\">
                        <div class=\"info-label\"><i class=\"fas fa-book-open text-primary me-2\"></i> Instructions</div>
                        <div class=\"info-value bg-light p-3 rounded\">";
            // line 124
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 124, $this->source); })()), "instructions", [], "any", false, false, false, 124), "html", null, true));
            yield "</div>
                    </div>
                    ";
        }
        // line 127
        yield "
                    <!-- Métadonnées -->
                    <div class=\"mt-4 pt-3 border-top\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-calendar-plus text-primary me-2\"></i>
                                    <div>
                                        <small class=\"text-muted d-block\">Créé le</small>
                                        <span class=\"fw-semibold\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 136, $this->source); })()), "createdAt", [], "any", false, false, false, 136), "d/m/Y à H:i"), "html", null, true);
        yield "</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-calendar-edit text-primary me-2\"></i>
                                    <div>
                                        <small class=\"text-muted d-block\">Modifié le</small>
                                        <span class=\"fw-semibold\">";
        // line 145
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 145, $this->source); })()), "updatedAt", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 145, $this->source); })()), "updatedAt", [], "any", false, false, false, 145), "d/m/Y à H:i"), "html", null, true)) : ("Jamais modifié"));
        yield "</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Créateur avec photo -->
                        <div class=\"d-flex align-items-center mt-3 p-3 bg-light rounded\">
                            <div class=\"flex-shrink-0\">
                                ";
        // line 154
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), "photo", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 155
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "photo", [], "any", false, false, false, 155))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "fullName", [], "any", false, false, false, 156), "html", null, true);
            yield "\" 
                                         class=\"rounded-circle\"
                                         style=\"width: 50px; height: 50px; object-fit: cover;\">
                                ";
        } else {
            // line 160
            yield "                                    <div class=\"bg-secondary rounded-circle d-flex align-items-center justify-content-center text-white\"
                                         style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-user\"></i>
                                    </div>
                                ";
        }
        // line 165
        yield "                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted d-block\">Créé par</small>
                                <span class=\"fw-semibold\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "fullName", [], "any", false, false, false, 168), "html", null, true);
        yield "</span>
                                <br>
                                <small class=\"text-muted\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "email", [], "any", false, false, false, 170), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Boutons d'action principaux -->
            <div class=\"d-flex flex-wrap gap-2 mb-4\">
                <a href=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-lg\">
                    <i class=\"fas fa-edit me-2\"></i> Modifier le plat
                </a>
                <button type=\"button\" class=\"btn btn-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteRecipeModal\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            </div>
        </div>

        <!-- Colonne droite : Ingrédients -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-cup-straw me-2\"></i> Ingrédients
                        <span class=\"badge bg-primary ms-2\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 194, $this->source); })()), "recipeItems", [], "any", false, false, false, 194)), "html", null, true);
        yield "</span>
                    </h5>
                    <a href=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 196, $this->source); })()), "id", [], "any", false, false, false, 196)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Modifier la liste
                    </a>
                </div>
                <div class=\"card-body\">
                    ";
        // line 201
        if ((array_key_exists("paginatedItems", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["paginatedItems"]) || array_key_exists("paginatedItems", $context) ? $context["paginatedItems"] : (function () { throw new RuntimeError('Variable "paginatedItems" does not exist.', 201, $this->source); })())))) {
            // line 202
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table table-hover align-middle\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th>Image</th>
                                        <th>Produit</th>
                                        <th>Quantité</th>
                                        <th>Unité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paginatedItems"]) || array_key_exists("paginatedItems", $context) ? $context["paginatedItems"] : (function () { throw new RuntimeError('Variable "paginatedItems" does not exist.', 213, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 214
                yield "                                    <tr>
                                        <td style=\"width: 60px;\">
                                            ";
                // line 216
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 216), "image", [], "any", false, false, false, 216) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 216), "image", [], "any", false, false, false, 216) != "default-product.png"))) {
                    // line 217
                    yield "                                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 217), "image", [], "any", false, false, false, 217))), "html", null, true);
                    yield "\" 
                                                     alt=\"";
                    // line 218
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 218), "name", [], "any", false, false, false, 218), "html", null, true);
                    yield "\"
                                                     class=\"img-thumbnail\"
                                                     style=\"width: 50px; height: 50px; object-fit: cover;\">
                                            ";
                } else {
                    // line 222
                    yield "                                                <div class=\"bg-light d-flex align-items-center justify-content-center\"
                                                     style=\"width: 50px; height: 50px;\">
                                                    <i class=\"fas fa-box text-muted\"></i>
                                                </div>
                                            ";
                }
                // line 227
                yield "                                        </td>
                                        <td>
                                            <strong>";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 229), "name", [], "any", false, false, false, 229), "html", null, true);
                yield "</strong>
                                            <br>
                                            <small class=\"text-muted\">";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 231), "unit", [], "any", true, true, false, 231)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 231), "unit", [], "any", false, false, false, 231), "pièce")) : ("pièce")), "html", null, true);
                yield "</small>
                                        </td>
                                        <td class=\"fw-bold\">";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 233), "html", null, true);
                yield "</td>
                                        <td>";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit", [], "any", false, false, false, 234), "html", null, true);
                yield "</td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            yield "                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        ";
            // line 242
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 242, $this->source); })()) > 1)) {
                // line 243
                yield "                        <nav aria-label=\"Pagination des ingrédients\" class=\"mt-3\">
                            <ul class=\"pagination pagination-sm justify-content-center\">
                                <li class=\"page-item ";
                // line 245
                yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 245, $this->source); })()) <= 1)) ? ("disabled") : (""));
                yield "\">
                                    <a class=\"page-link\" href=\"";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 246, $this->source); })()), "id", [], "any", false, false, false, 246), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 246, $this->source); })()) - 1)]), "html", null, true);
                yield "\">
                                        <i class=\"fas fa-chevron-left\"></i>
                                    </a>
                                </li>
                                ";
                // line 250
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 250, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 251
                    yield "                                    <li class=\"page-item ";
                    yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 251, $this->source); })()))) ? ("active") : (""));
                    yield "\">
                                        <a class=\"page-link\" href=\"";
                    // line 252
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 252, $this->source); })()), "id", [], "any", false, false, false, 252), "page" => $context["i"]]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 255
                yield "                                <li class=\"page-item ";
                yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 255, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 255, $this->source); })()))) ? ("disabled") : (""));
                yield "\">
                                    <a class=\"page-link\" href=\"";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 256, $this->source); })()), "id", [], "any", false, false, false, 256), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 256, $this->source); })()) + 1)]), "html", null, true);
                yield "\">
                                        <i class=\"fas fa-chevron-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        ";
            }
            // line 263
            yield "                    ";
        } else {
            // line 264
            yield "                        <div class=\"text-center py-5\">
                            <i class=\"fas fa-cup-straw fa-4x text-muted mb-3\"></i>
                            <p class=\"text-muted\">Aucun ingrédient dans ce plat</p>
                            <a href=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 267, $this->source); })()), "id", [], "any", false, false, false, 267)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fas fa-plus me-1\"></i> Ajouter des ingrédients
                            </a>
                        </div>
                    ";
        }
        // line 272
        yield "                </div>
            </div>

            <!-- Boutons d'actions secondaires (à implémenter) -->
           <div class=\"d-flex flex-wrap gap-2 mt-4\">
                <a href=\"#\" class=\"btn btn-outline-info flex-fill\">
                    <i class=\"fas fa-exchange-alt me-2\"></i> Mouvements stock
                </a>
                ";
        // line 280
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 280, $this->source); })()) == "restaurant")) {
            // line 281
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 281, $this->source); })()), "id", [], "any", false, false, false, 281)]), "html", null, true);
            yield "\" 
                    class=\"btn btn-outline-warning flex-fill\">
                        <i class=\"fas fa-percent me-2\"></i> Promotions menu
                    </a>
                ";
        }
        // line 286
        yield "                <a href=\"#\" class=\"btn btn-outline-success flex-fill\">
                    <i class=\"fas fa-shopping-cart me-2\"></i> Commandes liées
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
<div class=\"modal fade\" id=\"deleteRecipeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le plat
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteRecipeContent\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteRecipeForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteRecipeToken\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteRecipeConfirmBtn\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 319
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

        // line 320
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
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
.info-item {
    margin-bottom: 0.75rem;
}
.info-label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.25rem;
    font-size: 0.9rem;
}
.info-value {
    font-size: 1rem;
}
.table th {
    font-weight: 600;
    background-color: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
}
.table td {
    vertical-align: middle;
}
.pagination .page-link {
    border-radius: 8px;
    margin: 0 2px;
}
@media (max-width: 768px) {
    .card-header .btn-sm {
        margin-top: 0.5rem;
        width: 100%;
    }
    .d-flex.flex-wrap.gap-2 {
        justify-content: center;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 378
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 379
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la suppression avec confirmation par saisie du nom si commandes existent
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteRecipeModal'));
    const deleteForm = document.getElementById('deleteRecipeForm');
    const deleteToken = document.getElementById('deleteRecipeToken');
    const deleteConfirmBtn = document.getElementById('deleteRecipeConfirmBtn');
    const deleteContent = document.getElementById('deleteRecipeContent');

    const hasOrders = ";
        // line 389
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 389, $this->source); })()), "orderItems", [], "any", false, false, false, 389)) > 0)) ? ("true") : ("false"));
        yield ";
    const recipeName = \"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 390, $this->source); })()), "name", [], "any", false, false, false, 390), "js"), "html", null, true);
        yield "\";

    deleteForm.action = \"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 392, $this->source); })()), "id", [], "any", false, false, false, 392)]), "html", null, true);
        yield "\";
    deleteToken.value = \"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 393, $this->source); })()), "id", [], "any", false, false, false, 393))), "html", null, true);
        yield "\";

    if (hasOrders) {
        deleteContent.innerHTML = `
            <div class=\"alert alert-warning\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                Ce plat est lié à des commandes. Pour confirmer la suppression, saisissez exactement le nom du plat ci-dessous.
            </div>
            <div class=\"input-group mt-3\">
                <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                <input type=\"text\" id=\"deleteConfirmName\" class=\"form-control\" placeholder=\"Saisissez le nom du plat pour confirmer\">
            </div>
        `;
        deleteConfirmBtn.disabled = true;

        const confirmInput = document.getElementById('deleteConfirmName');
        if (confirmInput) {
            confirmInput.addEventListener('input', function() {
                deleteConfirmBtn.disabled = this.value.trim() !== recipeName;
            });
        }
    } else {
        deleteContent.innerHTML = `
            <p>Êtes-vous sûr de vouloir supprimer le plat <strong>\"\${recipeName}\"</strong> ?</p>
            <p class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
        `;
        deleteConfirmBtn.disabled = false;
    }
});
</script>
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
        return "admin/recipe/show.html.twig";
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
        return array (  760 => 393,  756 => 392,  751 => 390,  747 => 389,  734 => 379,  721 => 378,  653 => 320,  640 => 319,  598 => 286,  589 => 281,  587 => 280,  577 => 272,  569 => 267,  564 => 264,  561 => 263,  551 => 256,  546 => 255,  535 => 252,  530 => 251,  526 => 250,  519 => 246,  515 => 245,  511 => 243,  509 => 242,  502 => 237,  493 => 234,  489 => 233,  484 => 231,  479 => 229,  475 => 227,  468 => 222,  461 => 218,  456 => 217,  454 => 216,  450 => 214,  446 => 213,  433 => 202,  431 => 201,  423 => 196,  418 => 194,  400 => 179,  388 => 170,  383 => 168,  378 => 165,  371 => 160,  364 => 156,  359 => 155,  357 => 154,  345 => 145,  333 => 136,  322 => 127,  316 => 124,  312 => 122,  310 => 121,  306 => 119,  300 => 116,  296 => 114,  294 => 113,  285 => 107,  279 => 103,  275 => 101,  272 => 100,  266 => 97,  263 => 96,  261 => 95,  256 => 94,  254 => 93,  246 => 88,  239 => 83,  235 => 81,  232 => 80,  228 => 78,  224 => 76,  222 => 75,  219 => 74,  212 => 69,  205 => 65,  200 => 64,  198 => 63,  182 => 49,  172 => 45,  169 => 44,  164 => 43,  154 => 39,  151 => 38,  147 => 37,  133 => 26,  126 => 22,  119 => 18,  112 => 14,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/recipe/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ recipe.name }} - Détails du plat - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec navigation -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_recipe_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-utensils me-1\"></i> Plats
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">{{ recipe.name|u.truncate(30, '...') }}</li>
                </ol>
            </nav>
            <div class=\"d-flex align-items-center\">
                <a href=\"{{ path('app_admin_recipe_index') }}\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-utensils me-2\"></i> {{ recipe.name }}
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Détails du plat et de sa composition</p>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-utensils fa-3x text-primary opacity-75\"></i>
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

    <div class=\"row g-4\">
        <!-- Colonne gauche : Informations générales -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i> Informations du plat
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <!-- Image (optionnelle) -->
                        <div class=\"col-md-4 text-center\">
                            {% if recipe.image %}
                                <img src=\"{{ asset('uploads/images_plats/' ~ recipe.image) }}\" 
                                     alt=\"{{ recipe.name }}\" 
                                     class=\"img-fluid rounded shadow-sm mb-3\"
                                     style=\"max-height: 150px; object-fit: cover;\">
                            {% else %}
                                <div class=\"bg-light rounded d-flex align-items-center justify-content-center mb-3\"
                                     style=\"height: 150px;\">
                                    <i class=\"fas fa-utensils fa-4x text-muted\"></i>
                                </div>
                            {% endif %}
                            <div class=\"mt-2\">
                                {% if recipe.isActive %}
                                    <span class=\"badge bg-success\"><i class=\"fas fa-toggle-on me-1\"></i> Actif</span>
                                {% else %}
                                    <span class=\"badge bg-danger\"><i class=\"fas fa-toggle-off me-1\"></i> Inactif</span>
                                {% endif %}
                                {% if not recipe.subscriptionActive %}
                                    <span class=\"badge bg-warning text-dark ms-1\"><i class=\"fas fa-clock me-1\"></i> Hors quota</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-md-8\">
                            <div class=\"info-item\">
                                <div class=\"info-label\"><i class=\"fas fa-tag text-primary me-2\"></i> Nom</div>
                                <div class=\"info-value\">{{ recipe.name }}</div>
                            </div>
                            <div class=\"info-item\">
                                <div class=\"info-label\"><i class=\"fas fa-folder text-primary me-2\"></i> Catégorie</div>
                                <div class=\"info-value\">
                                    {% if recipe.category %}
                                        <span class=\"badge bg-info\">{{ recipe.category.name }}</span>
                                        {% if recipe.category.parent %}
                                            <small class=\"text-muted d-block mt-1\">
                                                <i class=\"fas fa-level-up-alt me-1\"></i> {{ recipe.category.parent.name }}
                                            </small>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"text-muted\">Non catégorisé</span>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"info-item\">
                                <div class=\"info-label\"><i class=\"fas fa-money-bill-wave text-primary me-2\"></i> Prix de vente</div>
                                <div class=\"info-value fw-bold text-success\">{{ recipe.sellingPrice|price_with_currency(recipe.hmaService) }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    {% if recipe.description %}
                    <div class=\"mt-4\">
                        <div class=\"info-label\"><i class=\"fas fa-align-left text-primary me-2\"></i> Description</div>
                        <div class=\"info-value bg-light p-3 rounded\">{{ recipe.description|nl2br }}</div>
                    </div>
                    {% endif %}

                    <!-- Instructions -->
                    {% if recipe.instructions %}
                    <div class=\"mt-4\">
                        <div class=\"info-label\"><i class=\"fas fa-book-open text-primary me-2\"></i> Instructions</div>
                        <div class=\"info-value bg-light p-3 rounded\">{{ recipe.instructions|nl2br }}</div>
                    </div>
                    {% endif %}

                    <!-- Métadonnées -->
                    <div class=\"mt-4 pt-3 border-top\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-calendar-plus text-primary me-2\"></i>
                                    <div>
                                        <small class=\"text-muted d-block\">Créé le</small>
                                        <span class=\"fw-semibold\">{{ recipe.createdAt|date('d/m/Y à H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-calendar-edit text-primary me-2\"></i>
                                    <div>
                                        <small class=\"text-muted d-block\">Modifié le</small>
                                        <span class=\"fw-semibold\">{{ recipe.updatedAt ? recipe.updatedAt|date('d/m/Y à H:i') : 'Jamais modifié' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Créateur avec photo -->
                        <div class=\"d-flex align-items-center mt-3 p-3 bg-light rounded\">
                            <div class=\"flex-shrink-0\">
                                {% if recipe.user.photo %}
                                    <img src=\"{{ asset('uploads/users/' ~ recipe.user.photo) }}\" 
                                         alt=\"{{ recipe.user.fullName }}\" 
                                         class=\"rounded-circle\"
                                         style=\"width: 50px; height: 50px; object-fit: cover;\">
                                {% else %}
                                    <div class=\"bg-secondary rounded-circle d-flex align-items-center justify-content-center text-white\"
                                         style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-user\"></i>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted d-block\">Créé par</small>
                                <span class=\"fw-semibold\">{{ recipe.user.fullName }}</span>
                                <br>
                                <small class=\"text-muted\">{{ recipe.user.email }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Boutons d'action principaux -->
            <div class=\"d-flex flex-wrap gap-2 mb-4\">
                <a href=\"{{ path('app_admin_recipe_edit', {'id': recipe.id}) }}\" class=\"btn btn-warning btn-lg\">
                    <i class=\"fas fa-edit me-2\"></i> Modifier le plat
                </a>
                <button type=\"button\" class=\"btn btn-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteRecipeModal\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            </div>
        </div>

        <!-- Colonne droite : Ingrédients -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-cup-straw me-2\"></i> Ingrédients
                        <span class=\"badge bg-primary ms-2\">{{ recipe.recipeItems|length }}</span>
                    </h5>
                    <a href=\"{{ path('app_admin_recipe_edit', {'id': recipe.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Modifier la liste
                    </a>
                </div>
                <div class=\"card-body\">
                    {% if paginatedItems is defined and paginatedItems is not empty %}
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover align-middle\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th>Image</th>
                                        <th>Produit</th>
                                        <th>Quantité</th>
                                        <th>Unité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for item in paginatedItems %}
                                    <tr>
                                        <td style=\"width: 60px;\">
                                            {% if item.product.image and item.product.image != 'default-product.png' %}
                                                <img src=\"{{ asset('uploads/products/' ~ item.product.image) }}\" 
                                                     alt=\"{{ item.product.name }}\"
                                                     class=\"img-thumbnail\"
                                                     style=\"width: 50px; height: 50px; object-fit: cover;\">
                                            {% else %}
                                                <div class=\"bg-light d-flex align-items-center justify-content-center\"
                                                     style=\"width: 50px; height: 50px;\">
                                                    <i class=\"fas fa-box text-muted\"></i>
                                                </div>
                                            {% endif %}
                                        </td>
                                        <td>
                                            <strong>{{ item.product.name }}</strong>
                                            <br>
                                            <small class=\"text-muted\">{{ item.product.unit|default('pièce') }}</small>
                                        </td>
                                        <td class=\"fw-bold\">{{ item.quantity }}</td>
                                        <td>{{ item.unit }}</td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        {% if totalPages > 1 %}
                        <nav aria-label=\"Pagination des ingrédients\" class=\"mt-3\">
                            <ul class=\"pagination pagination-sm justify-content-center\">
                                <li class=\"page-item {{ currentPage <= 1 ? 'disabled' }}\">
                                    <a class=\"page-link\" href=\"{{ path('app_admin_recipe_show', {'id': recipe.id, 'page': currentPage - 1}) }}\">
                                        <i class=\"fas fa-chevron-left\"></i>
                                    </a>
                                </li>
                                {% for i in 1..totalPages %}
                                    <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                                        <a class=\"page-link\" href=\"{{ path('app_admin_recipe_show', {'id': recipe.id, 'page': i}) }}\">{{ i }}</a>
                                    </li>
                                {% endfor %}
                                <li class=\"page-item {{ currentPage >= totalPages ? 'disabled' }}\">
                                    <a class=\"page-link\" href=\"{{ path('app_admin_recipe_show', {'id': recipe.id, 'page': currentPage + 1}) }}\">
                                        <i class=\"fas fa-chevron-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        {% endif %}
                    {% else %}
                        <div class=\"text-center py-5\">
                            <i class=\"fas fa-cup-straw fa-4x text-muted mb-3\"></i>
                            <p class=\"text-muted\">Aucun ingrédient dans ce plat</p>
                            <a href=\"{{ path('app_admin_recipe_edit', {'id': recipe.id}) }}\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fas fa-plus me-1\"></i> Ajouter des ingrédients
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>

            <!-- Boutons d'actions secondaires (à implémenter) -->
           <div class=\"d-flex flex-wrap gap-2 mt-4\">
                <a href=\"#\" class=\"btn btn-outline-info flex-fill\">
                    <i class=\"fas fa-exchange-alt me-2\"></i> Mouvements stock
                </a>
                {% if companyType == 'restaurant' %}
                    <a href=\"{{ path('app_restaurant_recipe_promotions', {'id': recipe.id}) }}\" 
                    class=\"btn btn-outline-warning flex-fill\">
                        <i class=\"fas fa-percent me-2\"></i> Promotions menu
                    </a>
                {% endif %}
                <a href=\"#\" class=\"btn btn-outline-success flex-fill\">
                    <i class=\"fas fa-shopping-cart me-2\"></i> Commandes liées
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
<div class=\"modal fade\" id=\"deleteRecipeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le plat
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteRecipeContent\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteRecipeForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteRecipeToken\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteRecipeConfirmBtn\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
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
.info-item {
    margin-bottom: 0.75rem;
}
.info-label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.25rem;
    font-size: 0.9rem;
}
.info-value {
    font-size: 1rem;
}
.table th {
    font-weight: 600;
    background-color: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
}
.table td {
    vertical-align: middle;
}
.pagination .page-link {
    border-radius: 8px;
    margin: 0 2px;
}
@media (max-width: 768px) {
    .card-header .btn-sm {
        margin-top: 0.5rem;
        width: 100%;
    }
    .d-flex.flex-wrap.gap-2 {
        justify-content: center;
    }
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la suppression avec confirmation par saisie du nom si commandes existent
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteRecipeModal'));
    const deleteForm = document.getElementById('deleteRecipeForm');
    const deleteToken = document.getElementById('deleteRecipeToken');
    const deleteConfirmBtn = document.getElementById('deleteRecipeConfirmBtn');
    const deleteContent = document.getElementById('deleteRecipeContent');

    const hasOrders = {{ recipe.orderItems|length > 0 ? 'true' : 'false' }};
    const recipeName = \"{{ recipe.name|e('js') }}\";

    deleteForm.action = \"{{ path('app_admin_recipe_delete', {'id': recipe.id}) }}\";
    deleteToken.value = \"{{ csrf_token('delete' ~ recipe.id) }}\";

    if (hasOrders) {
        deleteContent.innerHTML = `
            <div class=\"alert alert-warning\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                Ce plat est lié à des commandes. Pour confirmer la suppression, saisissez exactement le nom du plat ci-dessous.
            </div>
            <div class=\"input-group mt-3\">
                <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                <input type=\"text\" id=\"deleteConfirmName\" class=\"form-control\" placeholder=\"Saisissez le nom du plat pour confirmer\">
            </div>
        `;
        deleteConfirmBtn.disabled = true;

        const confirmInput = document.getElementById('deleteConfirmName');
        if (confirmInput) {
            confirmInput.addEventListener('input', function() {
                deleteConfirmBtn.disabled = this.value.trim() !== recipeName;
            });
        }
    } else {
        deleteContent.innerHTML = `
            <p>Êtes-vous sûr de vouloir supprimer le plat <strong>\"\${recipeName}\"</strong> ?</p>
            <p class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
        `;
        deleteConfirmBtn.disabled = false;
    }
});
</script>
{% endblock %}", "admin/recipe/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\recipe\\show.html.twig");
    }
}
