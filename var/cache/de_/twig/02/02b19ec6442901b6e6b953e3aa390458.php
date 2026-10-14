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

/* admin/category_recipe/show.html.twig */
class __TwigTemplate_32885161fd7f12745453d24411cac634 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category_recipe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category_recipe/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " - Détails - HMA Market";
        
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
    <!-- En-tête avec navigation et actions -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div class=\"w-100 w-md-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-utensils me-1\"></i> <span class=\"d-none d-sm-inline\">Catégories de plats</span>
                            <span class=\"d-inline d-sm-none\">Catégories</span>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19)), "truncate", [15, "..."], "method", false, false, false, 19), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center flex-wrap gap-2\">
                <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
                </a>
                <h1 class=\"h4 h3-sm mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-utensils me-2\"></i> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28)), "truncate", [20], "method", false, false, false, 28), "html", null, true);
        yield "
                </h1>
            </div>
            <p class=\"text-muted mt-2 d-none d-sm-block\">Détails de la catégorie de plats</p>
        </div>
        <div class=\"btn-group float-up w-100 w-md-auto\">
            <a href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-sm btn-hover-lift flex-fill\">
                <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
            </a>
            <button type=\"button\" 
                    class=\"btn btn-danger btn-sm btn-hover-lift flex-fill\"
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#deleteCategoryModal\">
                <i class=\"fas fa-trash me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
            </button>
        </div>
    </div>

    <!-- Alertes flash -->
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", ["success"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 48
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "    
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", ["error"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "
    <div class=\"row g-3 g-md-4\">
        <!-- Carte principale des informations -->
        <div class=\"col-12 col-lg-8\">
            <div class=\"card shadow-lg border-0 mb-4 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0 small\">
                            <i class=\"fas fa-info-circle me-2\"></i> <span class=\"d-none d-sm-inline\">Informations de la catégorie</span>
                            <span class=\"d-inline d-sm-none\">Infos</span>
                        </h5>
                    </div>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row\">
                        <!-- Image de la catégorie -->
                        <div class=\"col-12 col-md-4 mb-3 mb-md-0\">
                            <div class=\"text-center\">
                                ";
        // line 78
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 78, $this->source); })()), "image", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 79, $this->source); })()), "image", [], "any", false, false, false, 79))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 80, $this->source); })()), "name", [], "any", false, false, false, 80), "html", null, true);
            yield "\"
                                         class=\"img-fluid rounded shadow-lg mb-3 category-image\"
                                         style=\"max-height: 150px; max-width: 100%; object-fit: cover;\">
                                ";
        } else {
            // line 84
            yield "                                    <div class=\"bg-gradient-primary rounded d-flex align-items-center justify-content-center mb-3 category-placeholder\"
                                         style=\"height: 150px;\">
                                        <i class=\"fas fa-utensils fa-4x text-white\"></i>
                                    </div>
                                ";
        }
        // line 89
        yield "                                
                                <!-- Statut -->
                                <div class=\"mb-2\">
                                    ";
        // line 92
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 92, $this->source); })()), "isActive", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "                                        <span class=\"badge bg-success rounded-pill px-3 py-2\">
                                            <i class=\"fas fa-toggle-on me-1\"></i> Active
                                        </span>
                                    ";
        } else {
            // line 97
            yield "                                        <span class=\"badge bg-danger rounded-pill px-3 py-2\">
                                            <i class=\"fas fa-toggle-off me-1\"></i> Inactive
                                        </span>
                                    ";
        }
        // line 101
        yield "                                </div>
                            </div>
                        </div>

                        <!-- Détails -->
                        <div class=\"col-12 col-md-8\">
                            <div class=\"info-grid\">
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-tag text-primary me-2\"></i> Nom
                                    </div>
                                    <div class=\"info-value\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 112, $this->source); })()), "name", [], "any", false, false, false, 112), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-link text-primary me-2\"></i> Slug
                                    </div>
                                    <div class=\"info-value\">
                                        <code class=\"bg-light p-1 rounded small\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 120, $this->source); })()), "slug", [], "any", false, false, false, 120), "html", null, true);
        yield "</code>
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-align-left text-primary me-2\"></i> Description
                                    </div>
                                    <div class=\"info-value small\">
                                        ";
        // line 129
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 129)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 129, $this->source); })()), "description", [], "any", false, false, false, 129), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-sitemap text-primary me-2\"></i> Catégorie parente
                                    </div>
                                    <div class=\"info-value\">
                                        ";
        // line 138
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })()), "parent", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 139
            yield "                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 139, $this->source); })()), "parent", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\" 
                                               class=\"badge bg-info text-decoration-none\">
                                                <i class=\"fas fa-level-up-alt me-1\"></i> ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 141, $this->source); })()), "parent", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141), "html", null, true);
            yield "
                                            </a>
                                        ";
        } else {
            // line 144
            yield "                                            <span class=\"badge bg-secondary\">
                                                <i class=\"fas fa-folder me-1\"></i> Principale
                                            </span>
                                        ";
        }
        // line 148
        yield "                                    </div>
                                </div>
                                
                                <div class=\"info-item d-none d-sm-block\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-user text-primary me-2\"></i> Créateur
                                    </div>
                                    <div class=\"info-value small\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "email", [], "any", false, false, false, 155), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-calendar-plus text-primary me-2\"></i> Créée le
                                    </div>
                                    <div class=\"info-value small\">
                                        ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 163, $this->source); })()), "createdAt", [], "any", false, false, false, 163), "d/m/Y à H:i"), "html", null, true);
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-calendar-edit text-primary me-2\"></i> Modifiée le
                                    </div>
                                    <div class=\"info-value small\">
                                        ";
        // line 172
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 172, $this->source); })()), "updatedAt", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 173
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 173, $this->source); })()), "updatedAt", [], "any", false, false, false, 173), "d/m/Y à H:i"), "html", null, true);
            yield "
                                        ";
        } else {
            // line 175
            yield "                                            <span class=\"text-muted\">Jamais modifiée</span>
                                        ";
        }
        // line 177
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte des statistiques -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"card shadow-lg border-0 mb-3 mb-md-4 card-hover\">
                <div class=\"card-header bg-gradient-info text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 small\">
                        <i class=\"fas fa-chart-bar me-2\"></i> <span class=\"d-none d-sm-inline\">Statistiques</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"text-center mb-3\">
                        <div class=\"display-5 text-primary mb-1\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 196, $this->source); })()), "recipes", [], "any", false, false, false, 196)), "html", null, true);
        yield "</div>
                        <div class=\"text-muted small\">Plats dans cette catégorie</div>
                    </div>
                    
                    <hr class=\"my-3\">
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-primary\">
                                <i class=\"fas fa-utensils text-white\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 208, $this->source); })()), "recipes", [], "any", false, false, false, 208), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 208, $this->source); })()), "isActive", [], "any", false, false, false, 208); })), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Plats actifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-warning\">
                                <i class=\"fas fa-utensils text-dark\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 218, $this->source); })()), "recipes", [], "any", false, false, false, 218), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 218, $this->source); })()), "isActive", [], "any", false, false, false, 218); })), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Plats inactifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-info\">
                                <i class=\"fas fa-sitemap text-white\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 228, $this->source); })()), "children", [], "any", false, false, false, 228)), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Sous-catégories</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-success\">
                                <i class=\"fas fa-layer-group text-white\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">
                                    ";
        // line 239
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 239, $this->source); })()), "parent", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 240
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 240, $this->source); })()), "parent", [], "any", false, false, false, 240), "children", [], "any", false, false, false, 240)), "html", null, true);
            yield "
                                    ";
        } else {
            // line 242
            yield "                                        0
                                    ";
        }
        // line 244
        yield "                                </div>
                                <div class=\"stat-label\">Catégories soeurs</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carte actions rapides -->
            <div class=\"card shadow-lg border-0 card-hover\">
                <div class=\"card-header bg-gradient-success text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 small\">
                        <i class=\"fas fa-bolt me-2\"></i> <span class=\"d-none d-sm-inline\">Actions rapides</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 261, $this->source); })()), "id", [], "any", false, false, false, 261)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-warning btn-sm\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>

                        ";
        // line 266
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 266, $this->source); })()) == "restaurant")) {
            // line 267
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_category_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 267, $this->source); })()), "id", [], "any", false, false, false, 267)]), "html", null, true);
            yield "\" 
                                class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-percent me-1\"></i> Promotions
                            </a>
                        ";
        }
        // line 272
        yield "                        
                        ";
        // line 273
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 273, $this->source); })()), "children", [], "any", false, false, false, 273)) > 0)) {
            // line 274
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 274, $this->source); })()), "id", [], "any", false, false, false, 274), "html", null, true);
            yield "\" 
                               class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye me-1\"></i> Voir les sous-catégories
                            </a>
                        ";
        }
        // line 279
        yield "                        
                        ";
        // line 280
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 280, $this->source); })()), "parent", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 281, $this->source); })()), "parent", [], "any", false, false, false, 281), "id", [], "any", false, false, false, 281)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-secondary btn-sm\">
                                <i class=\"fas fa-level-up-alt me-1\"></i> Voir la catégorie parente
                            </a>
                        ";
        }
        // line 286
        yield "                        
                        <a href=\"";
        // line 287
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 287, $this->source); })()), "id", [], "any", false, false, false, 287), "html", null, true);
        yield "\" 
                           class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-plus me-1\"></i> Ajouter un plat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des plats dans cette catégorie -->
    <div class=\"card shadow-lg border-0 mb-4 card-hover\">
        <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"card-title mb-0 small\">
                <i class=\"fas fa-utensils me-2\"></i> 
                <span class=\"d-none d-sm-inline\">Plats dans cette catégorie</span>
                <span class=\"d-inline d-sm-none\">Plats</span>
                <span class=\"badge bg-light text-dark ms-2\">";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 304, $this->source); })()), "recipes", [], "any", false, false, false, 304)), "html", null, true);
        yield "</span>
            </h5>
            <a href=\"";
        // line 306
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 306, $this->source); })()), "id", [], "any", false, false, false, 306), "html", null, true);
        yield "\" class=\"btn btn-light btn-sm flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-plus me-1\"></i> <span class=\"d-none d-sm-inline\">Ajouter un plat</span>
            </a>
        </div>
        
        <div class=\"card-body p-0 p-md-3\">
            ";
        // line 312
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 312, $this->source); })()), "recipes", [], "any", false, false, false, 312)) > 0)) {
            // line 313
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"table-light\">
                             <tr>
                                <th width=\"60\" class=\"d-none d-sm-table-cell\">Image</th>
                                <th>Nom</th>
                                <th class=\"d-none d-md-table-cell\">Description</th>
                                <th class=\"text-center\">Prix</th>
                                <th class=\"text-center d-none d-sm-table-cell\">Statut</th>
                                <th class=\"text-center\">Actions</th>
                             </tr>
                        </thead>
                        <tbody>
                            ";
            // line 326
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 326, $this->source); })()), "recipes", [], "any", false, false, false, 326));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 327
                yield "                                <tr class=\"recipe-row\">
                                    <td class=\"d-none d-sm-table-cell\">
                                        ";
                // line 329
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 330
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 330))), "html", null, true);
                    yield "\" 
                                                 alt=\"";
                    // line 331
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 331), "html", null, true);
                    yield "\"
                                                 class=\"img-thumbnail\" 
                                                 style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        ";
                } else {
                    // line 335
                    yield "                                            <div class=\"bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-utensils text-muted\"></i>
                                            </div>
                                        ";
                }
                // line 340
                yield "                                    </td>
                                    <td>
                                        <strong>";
                // line 342
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 342)), "truncate", [20], "method", false, false, false, 342), "html", null, true);
                yield "</strong>
                                        <div class=\"d-sm-none\">
                                            <span class=\"badge ";
                // line 344
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "bg-success";
                } else {
                    yield "bg-danger";
                }
                yield "\">
                                                ";
                // line 345
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 345)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
                yield "
                                            </span>
                                        </div>
                                    </td>
                                    <td class=\"d-none d-md-table-cell\">";
                // line 349
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 349)), "truncate", [40, "..."], "method", false, false, false, 349), "html", null, true);
                yield "</td>
                                    <td class=\"text-center\"><span class=\"fw-bold text-primary\">";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "sellingPrice", [], "any", false, false, false, 350), 0, ",", " "), "html", null, true);
                yield "</span></td>
                                    <td class=\"text-center d-none d-sm-table-cell\">
                                        ";
                // line 352
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 353
                    yield "                                            <span class=\"badge bg-success\">Actif</span>
                                        ";
                } else {
                    // line 355
                    yield "                                            <span class=\"badge bg-danger\">Inactif</span>
                                        ";
                }
                // line 357
                yield "                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"";
                // line 360
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 360)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-outline-info\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
                // line 364
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 364)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-outline-warning\" title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['recipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 376
            yield "                <div class=\"text-center py-4 py-md-5\">
                    <i class=\"fas fa-utensils fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun plat dans cette catégorie</h5>
                    <p class=\"text-muted small mb-3\">Commencez par ajouter des plats à cette catégorie</p>
                    <a href=\"";
            // line 380
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 380, $this->source); })()), "id", [], "any", false, false, false, 380), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">
                        <i class=\"fas fa-plus me-1\"></i> Ajouter un plat
                    </a>
                </div>
            ";
        }
        // line 385
        yield "        </div>
    </div>

    <!-- Liste des sous-catégories -->
    ";
        // line 389
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 389, $this->source); })()), "children", [], "any", false, false, false, 389)) > 0)) {
            // line 390
            yield "    <div class=\"card shadow-lg border-0 card-hover\">
        <div class=\"card-header bg-gradient-info text-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"card-title mb-0 small\">
                <i class=\"fas fa-sitemap me-2\"></i> 
                <span class=\"d-none d-sm-inline\">Sous-catégories</span>
                <span class=\"d-inline d-sm-none\">Sous-catég.</span>
                <span class=\"badge bg-light text-dark ms-2\">";
            // line 396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 396, $this->source); })()), "children", [], "any", false, false, false, 396)), "html", null, true);
            yield "</span>
            </h5>
            <a href=\"";
            // line 398
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_new");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 398, $this->source); })()), "id", [], "any", false, false, false, 398), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-plus me-1\"></i> <span class=\"d-none d-sm-inline\">Ajouter une sous-catégorie</span>
            </a>
        </div>
        
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row g-2 g-md-3\">
                ";
            // line 405
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 405, $this->source); })()), "children", [], "any", false, false, false, 405));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 406
                yield "                <div class=\"col-12 col-sm-6 col-lg-4\">
                    <div class=\"card border-0 bg-light h-100 card-hover-sm\">
                        <div class=\"card-body p-2 p-md-3\">
                            <div class=\"d-flex align-items-start\">
                                ";
                // line 410
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 410)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 411
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 411))), "html", null, true);
                    yield "\" 
                                         alt=\"";
                    // line 412
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 412), "html", null, true);
                    yield "\"
                                         class=\"rounded me-2 me-md-3\"
                                         style=\"width: 50px; height: 50px; object-fit: cover;\">
                                ";
                } else {
                    // line 416
                    yield "                                    <div class=\"bg-secondary rounded d-flex align-items-center justify-content-center me-2 me-md-3\"
                                         style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-folder text-white\"></i>
                                    </div>
                                ";
                }
                // line 421
                yield "                                <div class=\"flex-grow-1\">
                                    <h6 class=\"mb-1 small\">";
                // line 422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 422)), "truncate", [18], "method", false, false, false, 422), "html", null, true);
                yield "</h6>
                                    <div class=\"d-flex align-items-center flex-wrap gap-1 mb-1\">
                                        ";
                // line 424
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 425
                    yield "                                            <span class=\"badge bg-success\" style=\"font-size: 8px;\">Active</span>
                                        ";
                } else {
                    // line 427
                    yield "                                            <span class=\"badge bg-danger\" style=\"font-size: 8px;\">Inactive</span>
                                        ";
                }
                // line 429
                yield "                                        <span class=\"badge bg-primary\" style=\"font-size: 8px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["child"], "recipes", [], "any", false, false, false, 429)), "html", null, true);
                yield " plats</span>
                                    </div>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
                // line 432
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 432)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-outline-info btn-sm\" style=\"font-size: 0.6rem; padding: 0.1rem 0.3rem;\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 436
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 436)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-outline-warning btn-sm\" style=\"font-size: 0.6rem; padding: 0.1rem 0.3rem;\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 451
        yield "</div>

<!-- Modal de suppression avec confirmation -->
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white py-2\">
                <h5 class=\"modal-title small\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-3\">
                <div id=\"deleteCategoryModalContent\"></div>
            </div>
            <div class=\"modal-footer flex-wrap gap-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary flex-grow-1 flex-md-grow-0 btn-sm\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form id=\"deleteCategoryForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger flex-grow-1 flex-md-grow-0 btn-sm\" id=\"deleteCategoryConfirmBtn\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer
                    </button>
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

    // line 482
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

        // line 483
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.card-hover {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid rgba(102, 126, 234, 0.1);
}
.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
    border-color: rgba(102, 126, 234, 0.3);
}
.card-hover-sm:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08) !important;
}
.btn-hover-scale {
    transition: all 0.2s ease;
}
.btn-hover-scale:hover {
    transform: scale(1.05);
}
.btn-hover-lift {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
.btn-hover-lift:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.bg-gradient-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%) !important;
}
.bg-gradient-success {
    background: linear-gradient(135deg, #28a745 0%, #218838 100%) !important;
}
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
.info-grid {
    display: grid;
    gap: 0.5rem;
}
.info-item {
    padding-bottom: 0.5rem;
    border-bottom: 1px solid #f0f0f0;
}
.info-item:last-child {
    border-bottom: none;
}
.info-label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.15rem;
    display: flex;
    align-items: center;
    font-size: 0.75rem;
}
.info-value {
    color: #212529;
    font-size: 0.85rem;
}
.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.5rem;
}
.stat-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.3s ease;
}
.stat-item:hover {
    background: #e9ecef;
    transform: translateY(-2px);
}
.stat-icon {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
    flex-shrink: 0;
}
.stat-content {
    flex: 1;
    min-width: 0;
}
.stat-number {
    font-size: 1.1rem;
    font-weight: 700;
    color: #212529;
    line-height: 1;
}
.stat-label {
    font-size: 0.6rem;
    color: #6c757d;
    margin-top: 0.1rem;
}
.recipe-row:hover {
    background-color: rgba(102, 126, 234, 0.05);
    transition: all 0.2s ease;
}
.table th {
    font-weight: 600;
    color: #495057;
    background-color: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
    font-size: 0.75rem;
}
.table td {
    vertical-align: middle;
    font-size: 0.8rem;
}
.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}
.category-image {
    transition: all 0.3s ease;
}
.category-image:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
}
.category-placeholder {
    border-radius: 15px;
    transition: all 0.3s ease;
}
.category-placeholder:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
}
.breadcrumb {
    background-color: transparent;
    padding-left: 0;
    margin-bottom: 0.5rem;
    font-size: 0.8rem;
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

/* ✅ RESPONSIVE */
@media (max-width: 992px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
}

@media (max-width: 768px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    
    .d-flex.justify-content-between.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.5rem !important;
    }
    
    .btn-group {
        flex-direction: row;
        width: 100%;
    }
    .btn-group .btn {
        flex: 1;
        font-size: 0.75rem;
        padding: 0.3rem 0.5rem;
    }
    
    .h4.h3-sm {
        font-size: 1rem !important;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.35rem;
    }
    
    .stat-item {
        padding: 0.35rem;
    }
    .stat-number {
        font-size: 0.9rem;
    }
    .stat-label {
        font-size: 0.5rem;
    }
    .stat-icon {
        width: 28px;
        height: 28px;
        font-size: 0.75rem;
    }
    
    .display-5 {
        font-size: 2rem !important;
    }
    
    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    
    .table th, .table td {
        font-size: 0.7rem;
        padding: 0.3rem 0.4rem;
    }
    
    .table .btn-group .btn {
        padding: 0.1rem 0.25rem;
        font-size: 0.6rem;
    }
    
    .card-header .btn-sm {
        font-size: 0.65rem;
        padding: 0.2rem 0.4rem;
    }
    
    .modal .btn-sm {
        font-size: 0.7rem;
        padding: 0.3rem 0.6rem;
    }
}

@media (max-width: 480px) {
    .container-fluid {
        padding-left: 0.25rem !important;
        padding-right: 0.25rem !important;
    }
    
    .btn-group .btn {
        font-size: 0.65rem;
        padding: 0.25rem 0.3rem;
    }
    
    .h4.h3-sm {
        font-size: 0.85rem !important;
    }
    
    .stats-grid {
        grid-template-columns: 1fr 1fr;
        gap: 0.25rem;
    }
    
    .stat-item {
        padding: 0.25rem;
    }
    .stat-number {
        font-size: 0.8rem;
    }
    .stat-label {
        font-size: 0.45rem;
    }
    .stat-icon {
        width: 24px;
        height: 24px;
        font-size: 0.6rem;
    }
    
    .display-5 {
        font-size: 1.5rem !important;
    }
    
    .table th, .table td {
        font-size: 0.6rem;
        padding: 0.2rem 0.25rem;
    }
    
    .table .btn-group .btn {
        padding: 0.05rem 0.15rem;
        font-size: 0.5rem;
    }
    
    .category-image-placeholder {
        height: 120px !important;
    }
}

@media (max-width: 576px) {
    .col-12.col-sm-6.col-lg-4 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .card-hover:hover {
        transform: none !important;
    }
    .card-hover-sm:hover {
        transform: none !important;
    }
    .btn-hover-scale:hover {
        transform: none !important;
    }
    .btn-hover-lift:hover {
        transform: none !important;
    }
    .float-up {
        animation: none !important;
    }
    .category-image:hover {
        transform: none !important;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 821
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

        // line 822
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Gestion du modal de suppression ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteToken = document.getElementById('deleteCategoryToken');
    const deleteConfirmBtn = document.getElementById('deleteCategoryConfirmBtn');
    const modalContent = document.getElementById('deleteCategoryModalContent');

    document.querySelectorAll('[data-bs-target=\"#deleteCategoryModal\"]').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = ";
        // line 834
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 834, $this->source); })()), "id", [], "any", false, false, false, 834), "html", null, true);
        yield ";
            const name = \"";
        // line 835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 835, $this->source); })()), "name", [], "any", false, false, false, 835), "js"), "html", null, true);
        yield "\";
            const hasRecipes = ";
        // line 836
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 836, $this->source); })()), "recipes", [], "any", false, false, false, 836)) > 0)) ? ("true") : ("false"));
        yield ";
            const hasChildren = ";
        // line 837
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 837, $this->source); })()), "children", [], "any", false, false, false, 837)) > 0)) ? ("true") : ("false"));
        yield ";

            deleteForm.action = `/admin/category-recipe/\${id}`;
            deleteToken.value = '";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 840, $this->source); })()), "id", [], "any", false, false, false, 840))), "html", null, true);
        yield "';

            if (hasRecipes || hasChildren) {
                let message = '';
                if (hasRecipes && hasChildren) {
                    message = `Cette catégorie contient des plats et des sous-catégories.`;
                } else if (hasRecipes) {
                    message = `Cette catégorie contient des plats.`;
                } else if (hasChildren) {
                    message = `Cette catégorie contient des sous-catégories.`;
                }
                message += ` Pour confirmer la suppression, saisissez exactement le nom \"\${name}\".`;
                modalContent.innerHTML = `
                    <div class=\"alert alert-warning small\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        \${message}
                    </div>
                    <div class=\"input-group mt-3\">
                        <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                        <input type=\"text\" id=\"confirmCategoryName\" class=\"form-control form-control-sm\" placeholder=\"Saisissez le nom de la catégorie\">
                    </div>
                `;
                deleteConfirmBtn.disabled = true;

                const confirmInput = document.getElementById('confirmCategoryName');
                if (confirmInput) {
                    confirmInput.addEventListener('input', function() {
                        deleteConfirmBtn.disabled = this.value.trim() !== name;
                    });
                }
            } else {
                modalContent.innerHTML = `
                    <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>\"\${name}\"</strong> ?</p>
                    <p class=\"text-danger small\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
                `;
                deleteConfirmBtn.disabled = false;
            }
        });
    });

    // Nettoyer le contenu du modal à la fermeture
    deleteModal._element.addEventListener('hidden.bs.modal', function() {
        modalContent.innerHTML = '';
        deleteConfirmBtn.disabled = false;
    });
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
        return "admin/category_recipe/show.html.twig";
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
        return array (  1269 => 840,  1263 => 837,  1259 => 836,  1255 => 835,  1251 => 834,  1236 => 822,  1223 => 821,  875 => 483,  862 => 482,  822 => 451,  816 => 447,  799 => 436,  792 => 432,  785 => 429,  781 => 427,  777 => 425,  775 => 424,  770 => 422,  767 => 421,  760 => 416,  753 => 412,  748 => 411,  746 => 410,  740 => 406,  736 => 405,  724 => 398,  719 => 396,  711 => 390,  709 => 389,  703 => 385,  693 => 380,  687 => 376,  681 => 372,  667 => 364,  660 => 360,  655 => 357,  651 => 355,  647 => 353,  645 => 352,  640 => 350,  636 => 349,  629 => 345,  621 => 344,  616 => 342,  612 => 340,  605 => 335,  598 => 331,  593 => 330,  591 => 329,  587 => 327,  583 => 326,  568 => 313,  566 => 312,  555 => 306,  550 => 304,  528 => 287,  525 => 286,  516 => 281,  514 => 280,  511 => 279,  500 => 274,  498 => 273,  495 => 272,  486 => 267,  484 => 266,  476 => 261,  457 => 244,  453 => 242,  447 => 240,  445 => 239,  431 => 228,  418 => 218,  405 => 208,  390 => 196,  369 => 177,  365 => 175,  359 => 173,  357 => 172,  345 => 163,  334 => 155,  325 => 148,  319 => 144,  313 => 141,  307 => 139,  305 => 138,  293 => 129,  281 => 120,  270 => 112,  257 => 101,  251 => 97,  245 => 93,  243 => 92,  238 => 89,  231 => 84,  224 => 80,  219 => 79,  217 => 78,  197 => 60,  187 => 56,  184 => 55,  180 => 54,  177 => 53,  167 => 49,  164 => 48,  160 => 47,  144 => 34,  135 => 28,  128 => 24,  120 => 19,  112 => 14,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category_recipe/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ category.name }} - Détails - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec navigation et actions -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div class=\"w-100 w-md-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_category_recipe_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-utensils me-1\"></i> <span class=\"d-none d-sm-inline\">Catégories de plats</span>
                            <span class=\"d-inline d-sm-none\">Catégories</span>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ category.name|u.truncate(15, '...') }}</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center flex-wrap gap-2\">
                <a href=\"{{ path('app_admin_category_recipe_index') }}\" class=\"btn btn-outline-secondary btn-sm btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
                </a>
                <h1 class=\"h4 h3-sm mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-utensils me-2\"></i> {{ category.name|u.truncate(20) }}
                </h1>
            </div>
            <p class=\"text-muted mt-2 d-none d-sm-block\">Détails de la catégorie de plats</p>
        </div>
        <div class=\"btn-group float-up w-100 w-md-auto\">
            <a href=\"{{ path('app_admin_category_recipe_edit', {'id': category.id}) }}\" class=\"btn btn-warning btn-sm btn-hover-lift flex-fill\">
                <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
            </a>
            <button type=\"button\" 
                    class=\"btn btn-danger btn-sm btn-hover-lift flex-fill\"
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#deleteCategoryModal\">
                <i class=\"fas fa-trash me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
            </button>
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

    <div class=\"row g-3 g-md-4\">
        <!-- Carte principale des informations -->
        <div class=\"col-12 col-lg-8\">
            <div class=\"card shadow-lg border-0 mb-4 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0 small\">
                            <i class=\"fas fa-info-circle me-2\"></i> <span class=\"d-none d-sm-inline\">Informations de la catégorie</span>
                            <span class=\"d-inline d-sm-none\">Infos</span>
                        </h5>
                    </div>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row\">
                        <!-- Image de la catégorie -->
                        <div class=\"col-12 col-md-4 mb-3 mb-md-0\">
                            <div class=\"text-center\">
                                {% if category.image %}
                                    <img src=\"{{ asset('uploads/categories_plats/' ~ category.image) }}\" 
                                         alt=\"{{ category.name }}\"
                                         class=\"img-fluid rounded shadow-lg mb-3 category-image\"
                                         style=\"max-height: 150px; max-width: 100%; object-fit: cover;\">
                                {% else %}
                                    <div class=\"bg-gradient-primary rounded d-flex align-items-center justify-content-center mb-3 category-placeholder\"
                                         style=\"height: 150px;\">
                                        <i class=\"fas fa-utensils fa-4x text-white\"></i>
                                    </div>
                                {% endif %}
                                
                                <!-- Statut -->
                                <div class=\"mb-2\">
                                    {% if category.isActive %}
                                        <span class=\"badge bg-success rounded-pill px-3 py-2\">
                                            <i class=\"fas fa-toggle-on me-1\"></i> Active
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-danger rounded-pill px-3 py-2\">
                                            <i class=\"fas fa-toggle-off me-1\"></i> Inactive
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>

                        <!-- Détails -->
                        <div class=\"col-12 col-md-8\">
                            <div class=\"info-grid\">
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-tag text-primary me-2\"></i> Nom
                                    </div>
                                    <div class=\"info-value\">{{ category.name }}</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-link text-primary me-2\"></i> Slug
                                    </div>
                                    <div class=\"info-value\">
                                        <code class=\"bg-light p-1 rounded small\">{{ category.slug }}</code>
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-align-left text-primary me-2\"></i> Description
                                    </div>
                                    <div class=\"info-value small\">
                                        {{ category.description|default('Aucune description')|nl2br }}
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-sitemap text-primary me-2\"></i> Catégorie parente
                                    </div>
                                    <div class=\"info-value\">
                                        {% if category.parent %}
                                            <a href=\"{{ path('app_admin_category_recipe_show', {'id': category.parent.id}) }}\" 
                                               class=\"badge bg-info text-decoration-none\">
                                                <i class=\"fas fa-level-up-alt me-1\"></i> {{ category.parent.name }}
                                            </a>
                                        {% else %}
                                            <span class=\"badge bg-secondary\">
                                                <i class=\"fas fa-folder me-1\"></i> Principale
                                            </span>
                                        {% endif %}
                                    </div>
                                </div>
                                
                                <div class=\"info-item d-none d-sm-block\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-user text-primary me-2\"></i> Créateur
                                    </div>
                                    <div class=\"info-value small\">{{ category.user.email }}</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-calendar-plus text-primary me-2\"></i> Créée le
                                    </div>
                                    <div class=\"info-value small\">
                                        {{ category.createdAt|date('d/m/Y à H:i') }}
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label small\">
                                        <i class=\"fas fa-calendar-edit text-primary me-2\"></i> Modifiée le
                                    </div>
                                    <div class=\"info-value small\">
                                        {% if category.updatedAt %}
                                            {{ category.updatedAt|date('d/m/Y à H:i') }}
                                        {% else %}
                                            <span class=\"text-muted\">Jamais modifiée</span>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte des statistiques -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"card shadow-lg border-0 mb-3 mb-md-4 card-hover\">
                <div class=\"card-header bg-gradient-info text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 small\">
                        <i class=\"fas fa-chart-bar me-2\"></i> <span class=\"d-none d-sm-inline\">Statistiques</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"text-center mb-3\">
                        <div class=\"display-5 text-primary mb-1\">{{ category.recipes|length }}</div>
                        <div class=\"text-muted small\">Plats dans cette catégorie</div>
                    </div>
                    
                    <hr class=\"my-3\">
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-primary\">
                                <i class=\"fas fa-utensils text-white\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">{{ category.recipes|filter(r => r.isActive)|length }}</div>
                                <div class=\"stat-label\">Plats actifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-warning\">
                                <i class=\"fas fa-utensils text-dark\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">{{ category.recipes|filter(r => not r.isActive)|length }}</div>
                                <div class=\"stat-label\">Plats inactifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-info\">
                                <i class=\"fas fa-sitemap text-white\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">{{ category.children|length }}</div>
                                <div class=\"stat-label\">Sous-catégories</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-success\">
                                <i class=\"fas fa-layer-group text-white\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">
                                    {% if category.parent %}
                                        {{ category.parent.children|length }}
                                    {% else %}
                                        0
                                    {% endif %}
                                </div>
                                <div class=\"stat-label\">Catégories soeurs</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carte actions rapides -->
            <div class=\"card shadow-lg border-0 card-hover\">
                <div class=\"card-header bg-gradient-success text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 small\">
                        <i class=\"fas fa-bolt me-2\"></i> <span class=\"d-none d-sm-inline\">Actions rapides</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"{{ path('app_admin_category_recipe_edit', {'id': category.id}) }}\" 
                           class=\"btn btn-warning btn-sm\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>

                        {% if companyType == 'restaurant' %}
                            <a href=\"{{ path('app_restaurant_category_recipe_promotions', {'id': category.id}) }}\" 
                                class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-percent me-1\"></i> Promotions
                            </a>
                        {% endif %}
                        
                        {% if category.children|length > 0 %}
                            <a href=\"{{ path('app_admin_category_recipe_index') }}?parent={{ category.id }}\" 
                               class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye me-1\"></i> Voir les sous-catégories
                            </a>
                        {% endif %}
                        
                        {% if category.parent %}
                            <a href=\"{{ path('app_admin_category_recipe_show', {'id': category.parent.id}) }}\" 
                               class=\"btn btn-secondary btn-sm\">
                                <i class=\"fas fa-level-up-alt me-1\"></i> Voir la catégorie parente
                            </a>
                        {% endif %}
                        
                        <a href=\"{{ path('app_admin_recipe_new') }}?category={{ category.id }}\" 
                           class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-plus me-1\"></i> Ajouter un plat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des plats dans cette catégorie -->
    <div class=\"card shadow-lg border-0 mb-4 card-hover\">
        <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"card-title mb-0 small\">
                <i class=\"fas fa-utensils me-2\"></i> 
                <span class=\"d-none d-sm-inline\">Plats dans cette catégorie</span>
                <span class=\"d-inline d-sm-none\">Plats</span>
                <span class=\"badge bg-light text-dark ms-2\">{{ category.recipes|length }}</span>
            </h5>
            <a href=\"{{ path('app_admin_recipe_new') }}?category={{ category.id }}\" class=\"btn btn-light btn-sm flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-plus me-1\"></i> <span class=\"d-none d-sm-inline\">Ajouter un plat</span>
            </a>
        </div>
        
        <div class=\"card-body p-0 p-md-3\">
            {% if category.recipes|length > 0 %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"table-light\">
                             <tr>
                                <th width=\"60\" class=\"d-none d-sm-table-cell\">Image</th>
                                <th>Nom</th>
                                <th class=\"d-none d-md-table-cell\">Description</th>
                                <th class=\"text-center\">Prix</th>
                                <th class=\"text-center d-none d-sm-table-cell\">Statut</th>
                                <th class=\"text-center\">Actions</th>
                             </tr>
                        </thead>
                        <tbody>
                            {% for recipe in category.recipes %}
                                <tr class=\"recipe-row\">
                                    <td class=\"d-none d-sm-table-cell\">
                                        {% if recipe.image %}
                                            <img src=\"{{ asset('uploads/images_plats/' ~ recipe.image) }}\" 
                                                 alt=\"{{ recipe.name }}\"
                                                 class=\"img-thumbnail\" 
                                                 style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        {% else %}
                                            <div class=\"bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-utensils text-muted\"></i>
                                            </div>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <strong>{{ recipe.name|u.truncate(20) }}</strong>
                                        <div class=\"d-sm-none\">
                                            <span class=\"badge {% if recipe.isActive %}bg-success{% else %}bg-danger{% endif %}\">
                                                {{ recipe.isActive ? 'Actif' : 'Inactif' }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class=\"d-none d-md-table-cell\">{{ recipe.description|u.truncate(40, '...') }}</td>
                                    <td class=\"text-center\"><span class=\"fw-bold text-primary\">{{ recipe.sellingPrice|number_format(0, ',', ' ') }}</span></td>
                                    <td class=\"text-center d-none d-sm-table-cell\">
                                        {% if recipe.isActive %}
                                            <span class=\"badge bg-success\">Actif</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Inactif</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"{{ path('app_admin_recipe_show', {'id': recipe.id}) }}\" 
                                               class=\"btn btn-outline-info\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"{{ path('app_admin_recipe_edit', {'id': recipe.id}) }}\" 
                                               class=\"btn btn-outline-warning\" title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% else %}
                <div class=\"text-center py-4 py-md-5\">
                    <i class=\"fas fa-utensils fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun plat dans cette catégorie</h5>
                    <p class=\"text-muted small mb-3\">Commencez par ajouter des plats à cette catégorie</p>
                    <a href=\"{{ path('app_admin_recipe_new') }}?category={{ category.id }}\" class=\"btn btn-primary btn-sm\">
                        <i class=\"fas fa-plus me-1\"></i> Ajouter un plat
                    </a>
                </div>
            {% endif %}
        </div>
    </div>

    <!-- Liste des sous-catégories -->
    {% if category.children|length > 0 %}
    <div class=\"card shadow-lg border-0 card-hover\">
        <div class=\"card-header bg-gradient-info text-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"card-title mb-0 small\">
                <i class=\"fas fa-sitemap me-2\"></i> 
                <span class=\"d-none d-sm-inline\">Sous-catégories</span>
                <span class=\"d-inline d-sm-none\">Sous-catég.</span>
                <span class=\"badge bg-light text-dark ms-2\">{{ category.children|length }}</span>
            </h5>
            <a href=\"{{ path('app_admin_category_recipe_new') }}?parent={{ category.id }}\" class=\"btn btn-light btn-sm flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-plus me-1\"></i> <span class=\"d-none d-sm-inline\">Ajouter une sous-catégorie</span>
            </a>
        </div>
        
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row g-2 g-md-3\">
                {% for child in category.children %}
                <div class=\"col-12 col-sm-6 col-lg-4\">
                    <div class=\"card border-0 bg-light h-100 card-hover-sm\">
                        <div class=\"card-body p-2 p-md-3\">
                            <div class=\"d-flex align-items-start\">
                                {% if child.image %}
                                    <img src=\"{{ asset('uploads/categories_plats/' ~ child.image) }}\" 
                                         alt=\"{{ child.name }}\"
                                         class=\"rounded me-2 me-md-3\"
                                         style=\"width: 50px; height: 50px; object-fit: cover;\">
                                {% else %}
                                    <div class=\"bg-secondary rounded d-flex align-items-center justify-content-center me-2 me-md-3\"
                                         style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-folder text-white\"></i>
                                    </div>
                                {% endif %}
                                <div class=\"flex-grow-1\">
                                    <h6 class=\"mb-1 small\">{{ child.name|u.truncate(18) }}</h6>
                                    <div class=\"d-flex align-items-center flex-wrap gap-1 mb-1\">
                                        {% if child.isActive %}
                                            <span class=\"badge bg-success\" style=\"font-size: 8px;\">Active</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\" style=\"font-size: 8px;\">Inactive</span>
                                        {% endif %}
                                        <span class=\"badge bg-primary\" style=\"font-size: 8px;\">{{ child.recipes|length }} plats</span>
                                    </div>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_admin_category_recipe_show', {'id': child.id}) }}\" 
                                           class=\"btn btn-outline-info btn-sm\" style=\"font-size: 0.6rem; padding: 0.1rem 0.3rem;\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_category_recipe_edit', {'id': child.id}) }}\" 
                                           class=\"btn btn-outline-warning btn-sm\" style=\"font-size: 0.6rem; padding: 0.1rem 0.3rem;\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
    {% endif %}
</div>

<!-- Modal de suppression avec confirmation -->
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white py-2\">
                <h5 class=\"modal-title small\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-3\">
                <div id=\"deleteCategoryModalContent\"></div>
            </div>
            <div class=\"modal-footer flex-wrap gap-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary flex-grow-1 flex-md-grow-0 btn-sm\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form id=\"deleteCategoryForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger flex-grow-1 flex-md-grow-0 btn-sm\" id=\"deleteCategoryConfirmBtn\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.card-hover {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid rgba(102, 126, 234, 0.1);
}
.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
    border-color: rgba(102, 126, 234, 0.3);
}
.card-hover-sm:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08) !important;
}
.btn-hover-scale {
    transition: all 0.2s ease;
}
.btn-hover-scale:hover {
    transform: scale(1.05);
}
.btn-hover-lift {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
.btn-hover-lift:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.bg-gradient-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%) !important;
}
.bg-gradient-success {
    background: linear-gradient(135deg, #28a745 0%, #218838 100%) !important;
}
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
.info-grid {
    display: grid;
    gap: 0.5rem;
}
.info-item {
    padding-bottom: 0.5rem;
    border-bottom: 1px solid #f0f0f0;
}
.info-item:last-child {
    border-bottom: none;
}
.info-label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.15rem;
    display: flex;
    align-items: center;
    font-size: 0.75rem;
}
.info-value {
    color: #212529;
    font-size: 0.85rem;
}
.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.5rem;
}
.stat-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.3s ease;
}
.stat-item:hover {
    background: #e9ecef;
    transform: translateY(-2px);
}
.stat-icon {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
    flex-shrink: 0;
}
.stat-content {
    flex: 1;
    min-width: 0;
}
.stat-number {
    font-size: 1.1rem;
    font-weight: 700;
    color: #212529;
    line-height: 1;
}
.stat-label {
    font-size: 0.6rem;
    color: #6c757d;
    margin-top: 0.1rem;
}
.recipe-row:hover {
    background-color: rgba(102, 126, 234, 0.05);
    transition: all 0.2s ease;
}
.table th {
    font-weight: 600;
    color: #495057;
    background-color: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
    font-size: 0.75rem;
}
.table td {
    vertical-align: middle;
    font-size: 0.8rem;
}
.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}
.category-image {
    transition: all 0.3s ease;
}
.category-image:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
}
.category-placeholder {
    border-radius: 15px;
    transition: all 0.3s ease;
}
.category-placeholder:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
}
.breadcrumb {
    background-color: transparent;
    padding-left: 0;
    margin-bottom: 0.5rem;
    font-size: 0.8rem;
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

/* ✅ RESPONSIVE */
@media (max-width: 992px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
}

@media (max-width: 768px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    
    .d-flex.justify-content-between.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.5rem !important;
    }
    
    .btn-group {
        flex-direction: row;
        width: 100%;
    }
    .btn-group .btn {
        flex: 1;
        font-size: 0.75rem;
        padding: 0.3rem 0.5rem;
    }
    
    .h4.h3-sm {
        font-size: 1rem !important;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.35rem;
    }
    
    .stat-item {
        padding: 0.35rem;
    }
    .stat-number {
        font-size: 0.9rem;
    }
    .stat-label {
        font-size: 0.5rem;
    }
    .stat-icon {
        width: 28px;
        height: 28px;
        font-size: 0.75rem;
    }
    
    .display-5 {
        font-size: 2rem !important;
    }
    
    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    
    .table th, .table td {
        font-size: 0.7rem;
        padding: 0.3rem 0.4rem;
    }
    
    .table .btn-group .btn {
        padding: 0.1rem 0.25rem;
        font-size: 0.6rem;
    }
    
    .card-header .btn-sm {
        font-size: 0.65rem;
        padding: 0.2rem 0.4rem;
    }
    
    .modal .btn-sm {
        font-size: 0.7rem;
        padding: 0.3rem 0.6rem;
    }
}

@media (max-width: 480px) {
    .container-fluid {
        padding-left: 0.25rem !important;
        padding-right: 0.25rem !important;
    }
    
    .btn-group .btn {
        font-size: 0.65rem;
        padding: 0.25rem 0.3rem;
    }
    
    .h4.h3-sm {
        font-size: 0.85rem !important;
    }
    
    .stats-grid {
        grid-template-columns: 1fr 1fr;
        gap: 0.25rem;
    }
    
    .stat-item {
        padding: 0.25rem;
    }
    .stat-number {
        font-size: 0.8rem;
    }
    .stat-label {
        font-size: 0.45rem;
    }
    .stat-icon {
        width: 24px;
        height: 24px;
        font-size: 0.6rem;
    }
    
    .display-5 {
        font-size: 1.5rem !important;
    }
    
    .table th, .table td {
        font-size: 0.6rem;
        padding: 0.2rem 0.25rem;
    }
    
    .table .btn-group .btn {
        padding: 0.05rem 0.15rem;
        font-size: 0.5rem;
    }
    
    .category-image-placeholder {
        height: 120px !important;
    }
}

@media (max-width: 576px) {
    .col-12.col-sm-6.col-lg-4 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .card-hover:hover {
        transform: none !important;
    }
    .card-hover-sm:hover {
        transform: none !important;
    }
    .btn-hover-scale:hover {
        transform: none !important;
    }
    .btn-hover-lift:hover {
        transform: none !important;
    }
    .float-up {
        animation: none !important;
    }
    .category-image:hover {
        transform: none !important;
    }
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Gestion du modal de suppression ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteToken = document.getElementById('deleteCategoryToken');
    const deleteConfirmBtn = document.getElementById('deleteCategoryConfirmBtn');
    const modalContent = document.getElementById('deleteCategoryModalContent');

    document.querySelectorAll('[data-bs-target=\"#deleteCategoryModal\"]').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = {{ category.id }};
            const name = \"{{ category.name|e('js') }}\";
            const hasRecipes = {{ category.recipes|length > 0 ? 'true' : 'false' }};
            const hasChildren = {{ category.children|length > 0 ? 'true' : 'false' }};

            deleteForm.action = `/admin/category-recipe/\${id}`;
            deleteToken.value = '{{ csrf_token(\"delete\" ~ category.id) }}';

            if (hasRecipes || hasChildren) {
                let message = '';
                if (hasRecipes && hasChildren) {
                    message = `Cette catégorie contient des plats et des sous-catégories.`;
                } else if (hasRecipes) {
                    message = `Cette catégorie contient des plats.`;
                } else if (hasChildren) {
                    message = `Cette catégorie contient des sous-catégories.`;
                }
                message += ` Pour confirmer la suppression, saisissez exactement le nom \"\${name}\".`;
                modalContent.innerHTML = `
                    <div class=\"alert alert-warning small\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        \${message}
                    </div>
                    <div class=\"input-group mt-3\">
                        <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                        <input type=\"text\" id=\"confirmCategoryName\" class=\"form-control form-control-sm\" placeholder=\"Saisissez le nom de la catégorie\">
                    </div>
                `;
                deleteConfirmBtn.disabled = true;

                const confirmInput = document.getElementById('confirmCategoryName');
                if (confirmInput) {
                    confirmInput.addEventListener('input', function() {
                        deleteConfirmBtn.disabled = this.value.trim() !== name;
                    });
                }
            } else {
                modalContent.innerHTML = `
                    <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>\"\${name}\"</strong> ?</p>
                    <p class=\"text-danger small\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
                `;
                deleteConfirmBtn.disabled = false;
            }
        });
    });

    // Nettoyer le contenu du modal à la fermeture
    deleteModal._element.addEventListener('hidden.bs.modal', function() {
        modalContent.innerHTML = '';
        deleteConfirmBtn.disabled = false;
    });
});
</script>
{% endblock %}", "admin/category_recipe/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category_recipe\\show.html.twig");
    }
}
