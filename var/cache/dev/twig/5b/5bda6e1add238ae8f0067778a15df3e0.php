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
class __TwigTemplate_52b9a7ebbfa6079f26e216707e97551e extends Template
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
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18)), "truncate", [20, "..."], "method", false, false, false, 18), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-utensils me-2\"></i> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        yield "
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Détails de la catégorie de plats</p>
        </div>
        <div class=\"btn-group float-up\">
            <a href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-hover-lift\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <button type=\"button\" 
                    class=\"btn btn-danger btn-hover-lift\"
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#deleteCategoryModal\">
                <i class=\"fas fa-trash me-2\"></i> Supprimer
            </button>
        </div>
    </div>

    <!-- Alertes flash -->
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "flashes", ["success"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    
    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "flashes", ["error"], "method", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 54
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "
    <div class=\"row\">
        <!-- Carte principale des informations -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 mb-4 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">
                            <i class=\"fas fa-info-circle me-2\"></i> Informations de la catégorie
                        </h5>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <!-- Image de la catégorie -->
                        <div class=\"col-md-4 mb-4 mb-md-0\">
                            <div class=\"text-center\">
                                ";
        // line 76
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 76, $this->source); })()), "image", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 77, $this->source); })()), "image", [], "any", false, false, false, 77))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, false, 78), "html", null, true);
            yield "\"
                                         class=\"img-fluid rounded shadow-lg mb-3 category-image\"
                                         style=\"max-height: 200px; object-fit: cover;\">
                                ";
        } else {
            // line 82
            yield "                                    <div class=\"bg-gradient-primary rounded d-flex align-items-center justify-content-center mb-3 category-placeholder\"
                                         style=\"height: 200px;\">
                                        <i class=\"fas fa-utensils fa-5x text-white\"></i>
                                    </div>
                                ";
        }
        // line 87
        yield "                                
                                <!-- Statut -->
                                <div class=\"mb-3\">
                                    ";
        // line 90
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 90, $this->source); })()), "isActive", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "                                        <span class=\"badge bg-success rounded-pill px-3 py-2\">
                                            <i class=\"fas fa-toggle-on me-1\"></i> Active
                                        </span>
                                    ";
        } else {
            // line 95
            yield "                                        <span class=\"badge bg-danger rounded-pill px-3 py-2\">
                                            <i class=\"fas fa-toggle-off me-1\"></i> Inactive
                                        </span>
                                    ";
        }
        // line 99
        yield "                                </div>
                            </div>
                        </div>

                        <!-- Détails -->
                        <div class=\"col-md-8\">
                            <div class=\"info-grid\">
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-tag text-primary me-2\"></i> Nom
                                    </div>
                                    <div class=\"info-value\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 110, $this->source); })()), "name", [], "any", false, false, false, 110), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-link text-primary me-2\"></i> Slug
                                    </div>
                                    <div class=\"info-value\">
                                        <code class=\"bg-light p-2 rounded\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 118, $this->source); })()), "slug", [], "any", false, false, false, 118), "html", null, true);
        yield "</code>
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-align-left text-primary me-2\"></i> Description
                                    </div>
                                    <div class=\"info-value\">
                                        ";
        // line 127
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 127)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 127, $this->source); })()), "description", [], "any", false, false, false, 127), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-sitemap text-primary me-2\"></i> Catégorie parente
                                    </div>
                                    <div class=\"info-value\">
                                        ";
        // line 136
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 136, $this->source); })()), "parent", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 137, $this->source); })()), "parent", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" 
                                               class=\"badge bg-info text-decoration-none\">
                                                <i class=\"fas fa-level-up-alt me-1\"></i> ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 139, $this->source); })()), "parent", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
            yield "
                                            </a>
                                        ";
        } else {
            // line 142
            yield "                                            <span class=\"badge bg-secondary\">
                                                <i class=\"fas fa-folder me-1\"></i> Catégorie principale
                                            </span>
                                        ";
        }
        // line 146
        yield "                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-user text-primary me-2\"></i> Créateur
                                    </div>
                                    <div class=\"info-value\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "email", [], "any", false, false, false, 153), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-calendar-plus text-primary me-2\"></i> Créée le
                                    </div>
                                    <div class=\"info-value\">
                                        ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 161, $this->source); })()), "createdAt", [], "any", false, false, false, 161), "d/m/Y à H:i"), "html", null, true);
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-calendar-edit text-primary me-2\"></i> Modifiée le
                                    </div>
                                    <div class=\"info-value\">
                                        ";
        // line 170
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 170, $this->source); })()), "updatedAt", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 171, $this->source); })()), "updatedAt", [], "any", false, false, false, 171), "d/m/Y à H:i"), "html", null, true);
            yield "
                                        ";
        } else {
            // line 173
            yield "                                            <span class=\"text-muted\">Jamais modifiée</span>
                                        ";
        }
        // line 175
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte des statistiques -->
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg border-0 mb-4 card-hover\">
                <div class=\"card-header bg-gradient-info text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-chart-bar me-2\"></i> Statistiques
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"display-4 text-primary mb-1\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 194, $this->source); })()), "recipes", [], "any", false, false, false, 194)), "html", null, true);
        yield "</div>
                        <div class=\"text-muted\">Plats dans cette catégorie</div>
                    </div>
                    
                    <hr class=\"my-4\">
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-primary\">
                                <i class=\"fas fa-utensils text-white\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 206, $this->source); })()), "recipes", [], "any", false, false, false, 206), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 206, $this->source); })()), "isActive", [], "any", false, false, false, 206); })), "html", null, true);
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
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 216, $this->source); })()), "recipes", [], "any", false, false, false, 216), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 216, $this->source); })()), "isActive", [], "any", false, false, false, 216); })), "html", null, true);
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
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 226, $this->source); })()), "children", [], "any", false, false, false, 226)), "html", null, true);
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
        // line 237
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 237, $this->source); })()), "parent", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 238
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 238, $this->source); })()), "parent", [], "any", false, false, false, 238), "children", [], "any", false, false, false, 238)), "html", null, true);
            yield "
                                    ";
        } else {
            // line 240
            yield "                                        0
                                    ";
        }
        // line 242
        yield "                                </div>
                                <div class=\"stat-label\">Catégories soeurs</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carte actions rapides -->
            <div class=\"card shadow-lg border-0 card-hover\">
                <div class=\"card-header bg-gradient-success text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-bolt me-2\"></i> Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 259, $this->source); })()), "id", [], "any", false, false, false, 259)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-warning btn-lg\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        
                        ";
        // line 264
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 264, $this->source); })()), "children", [], "any", false, false, false, 264)) > 0)) {
            // line 265
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 265, $this->source); })()), "id", [], "any", false, false, false, 265), "html", null, true);
            yield "\" 
                               class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir les sous-catégories
                            </a>
                        ";
        }
        // line 270
        yield "                        
                        ";
        // line 271
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 271, $this->source); })()), "parent", [], "any", false, false, false, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 272
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 272, $this->source); })()), "parent", [], "any", false, false, false, 272), "id", [], "any", false, false, false, 272)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-level-up-alt me-2\"></i> Voir la catégorie parente
                            </a>
                        ";
        }
        // line 277
        yield "                        
                        <a href=\"";
        // line 278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 278, $this->source); })()), "id", [], "any", false, false, false, 278), "html", null, true);
        yield "\" 
                           class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-plus me-2\"></i> Ajouter un plat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des plats dans cette catégorie -->
    <div class=\"card shadow-lg border-0 mb-4 card-hover\">
        <div class=\"card-header bg-gradient-primary text-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-utensils me-2\"></i> 
                Plats dans cette catégorie 
                <span class=\"badge bg-light text-dark ms-2\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 294, $this->source); })()), "recipes", [], "any", false, false, false, 294)), "html", null, true);
        yield "</span>
            </h5>
            <a href=\"";
        // line 296
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 296, $this->source); })()), "id", [], "any", false, false, false, 296), "html", null, true);
        yield "\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter un plat
            </a>
        </div>
        
        <div class=\"card-body\">
            ";
        // line 302
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 302, $this->source); })()), "recipes", [], "any", false, false, false, 302)) > 0)) {
            // line 303
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle\">
                        <thead class=\"table-light\">
                             <tr>
                                <th width=\"80\">Image</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Prix de vente</th>
                                <th>Statut</th>
                                <th class=\"text-end\">Actions</th>
                             </tr>
                        </thead>
                        <tbody>
                            ";
            // line 316
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 316, $this->source); })()), "recipes", [], "any", false, false, false, 316));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 317
                yield "                                <tr class=\"recipe-row\">
                                    <td>
                                        ";
                // line 319
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 320
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 320))), "html", null, true);
                    yield "\" 
                                                 alt=\"";
                    // line 321
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 321), "html", null, true);
                    yield "\"
                                                 class=\"img-thumbnail\" 
                                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                                        ";
                } else {
                    // line 325
                    yield "                                            <div class=\"bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 60px; height: 60px;\">
                                                <i class=\"fas fa-utensils text-muted\"></i>
                                            </div>
                                        ";
                }
                // line 330
                yield "                                    </td>
                                    <td><strong>";
                // line 331
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 331), "html", null, true);
                yield "</strong></td>
                                    <td>";
                // line 332
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 332)), "truncate", [50, "..."], "method", false, false, false, 332), "html", null, true);
                yield "</td>
                                    <td><span class=\"fw-bold text-primary\">";
                // line 333
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "sellingPrice", [], "any", false, false, false, 333), 0, ",", " "), "html", null, true);
                yield " FCFA</span></td>
                                    <td>
                                        ";
                // line 335
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 335)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 336
                    yield "                                            <span class=\"badge bg-success\">Actif</span>
                                        ";
                } else {
                    // line 338
                    yield "                                            <span class=\"badge bg-danger\">Inactif</span>
                                        ";
                }
                // line 340
                yield "                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 343)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-outline-info\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
                // line 347
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 347)]), "html", null, true);
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
            // line 355
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 359
            yield "                <div class=\"text-center py-5\">
                    <i class=\"fas fa-utensils fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun plat dans cette catégorie</h5>
                    <p class=\"text-muted mb-4\">Commencez par ajouter des plats à cette catégorie</p>
                    <a href=\"";
            // line 363
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 363, $this->source); })()), "id", [], "any", false, false, false, 363), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Ajouter un plat
                    </a>
                </div>
            ";
        }
        // line 368
        yield "        </div>
    </div>

    <!-- Liste des sous-catégories -->
    ";
        // line 372
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 372, $this->source); })()), "children", [], "any", false, false, false, 372)) > 0)) {
            // line 373
            yield "    <div class=\"card shadow-lg border-0 card-hover\">
        <div class=\"card-header bg-gradient-info text-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-sitemap me-2\"></i> 
                Sous-catégories 
                <span class=\"badge bg-light text-dark ms-2\">";
            // line 378
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 378, $this->source); })()), "children", [], "any", false, false, false, 378)), "html", null, true);
            yield "</span>
            </h5>
            <a href=\"";
            // line 380
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_new");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 380, $this->source); })()), "id", [], "any", false, false, false, 380), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter une sous-catégorie
            </a>
        </div>
        
        <div class=\"card-body\">
            <div class=\"row\">
                ";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 387, $this->source); })()), "children", [], "any", false, false, false, 387));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 388
                yield "                <div class=\"col-md-6 col-lg-4 mb-3\">
                    <div class=\"card border-0 bg-light h-100 card-hover-sm\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-start\">
                                ";
                // line 392
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 392)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 393
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 393))), "html", null, true);
                    yield "\" 
                                         alt=\"";
                    // line 394
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 394), "html", null, true);
                    yield "\"
                                         class=\"rounded me-3\"
                                         style=\"width: 60px; height: 60px; object-fit: cover;\">
                                ";
                } else {
                    // line 398
                    yield "                                    <div class=\"bg-secondary rounded d-flex align-items-center justify-content-center me-3\"
                                         style=\"width: 60px; height: 60px;\">
                                        <i class=\"fas fa-folder text-white\"></i>
                                    </div>
                                ";
                }
                // line 403
                yield "                                <div class=\"flex-grow-1\">
                                    <h6 class=\"mb-1\">";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 404), "html", null, true);
                yield "</h6>
                                    <div class=\"d-flex align-items-center mb-2\">
                                        ";
                // line 406
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 407
                    yield "                                            <span class=\"badge bg-success me-2\">Active</span>
                                        ";
                } else {
                    // line 409
                    yield "                                            <span class=\"badge bg-danger me-2\">Inactive</span>
                                        ";
                }
                // line 411
                yield "                                        <span class=\"badge bg-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["child"], "recipes", [], "any", false, false, false, 411)), "html", null, true);
                yield " plats</span>
                                    </div>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
                // line 414
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 414)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-outline-info btn-sm\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 418
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 418)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-outline-warning btn-sm\">
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
            // line 429
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 433
        yield "</div>

<!-- Modal de suppression avec confirmation -->
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteCategoryModalContent\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form id=\"deleteCategoryForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteCategoryConfirmBtn\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer définitivement
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

    // line 464
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

        // line 465
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
    gap: 1rem;
}
.info-item {
    padding-bottom: 1rem;
    border-bottom: 1px solid #f0f0f0;
}
.info-item:last-child {
    border-bottom: none;
}
.info-label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.25rem;
    display: flex;
    align-items: center;
}
.info-value {
    color: #212529;
    font-size: 1rem;
}
.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}
.stat-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.3s ease;
}
.stat-item:hover {
    background: #e9ecef;
    transform: translateY(-2px);
}
.stat-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}
.stat-content {
    flex: 1;
}
.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: #212529;
    line-height: 1;
}
.stat-label {
    font-size: 0.85rem;
    color: #6c757d;
    margin-top: 0.25rem;
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
}
.table td {
    vertical-align: middle;
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
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    .info-item {
        padding: 0.5rem 0;
    }
    .card-header .btn-sm {
        margin-top: 0.5rem;
        width: 100%;
    }
    .btn-group {
        flex-direction: column;
        gap: 0.5rem;
    }
    .btn-group .btn {
        width: 100%;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 649
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

        // line 650
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
        // line 662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 662, $this->source); })()), "id", [], "any", false, false, false, 662), "html", null, true);
        yield ";
            const name = \"";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 663, $this->source); })()), "name", [], "any", false, false, false, 663), "js"), "html", null, true);
        yield "\";
            const hasRecipes = ";
        // line 664
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 664, $this->source); })()), "recipes", [], "any", false, false, false, 664)) > 0)) ? ("true") : ("false"));
        yield ";
            const hasChildren = ";
        // line 665
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 665, $this->source); })()), "children", [], "any", false, false, false, 665)) > 0)) ? ("true") : ("false"));
        yield ";

            deleteForm.action = `/admin/category-recipe/\${id}`;
            deleteToken.value = '";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 668, $this->source); })()), "id", [], "any", false, false, false, 668))), "html", null, true);
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
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        \${message}
                    </div>
                    <div class=\"input-group mt-3\">
                        <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                        <input type=\"text\" id=\"confirmCategoryName\" class=\"form-control\" placeholder=\"Saisissez le nom de la catégorie pour confirmer\">
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
                    <p class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
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
        return array (  1080 => 668,  1074 => 665,  1070 => 664,  1066 => 663,  1062 => 662,  1047 => 650,  1034 => 649,  840 => 465,  827 => 464,  787 => 433,  781 => 429,  764 => 418,  757 => 414,  750 => 411,  746 => 409,  742 => 407,  740 => 406,  735 => 404,  732 => 403,  725 => 398,  718 => 394,  713 => 393,  711 => 392,  705 => 388,  701 => 387,  689 => 380,  684 => 378,  677 => 373,  675 => 372,  669 => 368,  659 => 363,  653 => 359,  647 => 355,  633 => 347,  626 => 343,  621 => 340,  617 => 338,  613 => 336,  611 => 335,  606 => 333,  602 => 332,  598 => 331,  595 => 330,  588 => 325,  581 => 321,  576 => 320,  574 => 319,  570 => 317,  566 => 316,  551 => 303,  549 => 302,  538 => 296,  533 => 294,  512 => 278,  509 => 277,  500 => 272,  498 => 271,  495 => 270,  484 => 265,  482 => 264,  474 => 259,  455 => 242,  451 => 240,  445 => 238,  443 => 237,  429 => 226,  416 => 216,  403 => 206,  388 => 194,  367 => 175,  363 => 173,  357 => 171,  355 => 170,  343 => 161,  332 => 153,  323 => 146,  317 => 142,  311 => 139,  305 => 137,  303 => 136,  291 => 127,  279 => 118,  268 => 110,  255 => 99,  249 => 95,  243 => 91,  241 => 90,  236 => 87,  229 => 82,  222 => 78,  217 => 77,  215 => 76,  196 => 59,  186 => 55,  183 => 54,  179 => 53,  176 => 52,  166 => 48,  163 => 47,  159 => 46,  143 => 33,  134 => 27,  127 => 23,  119 => 18,  112 => 14,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category_recipe/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ category.name }} - Détails - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec navigation et actions -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_category_recipe_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-utensils me-1\"></i> Catégories de plats
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ category.name|u.truncate(20, '...') }}</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"{{ path('app_admin_category_recipe_index') }}\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-utensils me-2\"></i> {{ category.name }}
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Détails de la catégorie de plats</p>
        </div>
        <div class=\"btn-group float-up\">
            <a href=\"{{ path('app_admin_category_recipe_edit', {'id': category.id}) }}\" class=\"btn btn-warning btn-hover-lift\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <button type=\"button\" 
                    class=\"btn btn-danger btn-hover-lift\"
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#deleteCategoryModal\">
                <i class=\"fas fa-trash me-2\"></i> Supprimer
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

    <div class=\"row\">
        <!-- Carte principale des informations -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 mb-4 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">
                            <i class=\"fas fa-info-circle me-2\"></i> Informations de la catégorie
                        </h5>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <!-- Image de la catégorie -->
                        <div class=\"col-md-4 mb-4 mb-md-0\">
                            <div class=\"text-center\">
                                {% if category.image %}
                                    <img src=\"{{ asset('uploads/categories_plats/' ~ category.image) }}\" 
                                         alt=\"{{ category.name }}\"
                                         class=\"img-fluid rounded shadow-lg mb-3 category-image\"
                                         style=\"max-height: 200px; object-fit: cover;\">
                                {% else %}
                                    <div class=\"bg-gradient-primary rounded d-flex align-items-center justify-content-center mb-3 category-placeholder\"
                                         style=\"height: 200px;\">
                                        <i class=\"fas fa-utensils fa-5x text-white\"></i>
                                    </div>
                                {% endif %}
                                
                                <!-- Statut -->
                                <div class=\"mb-3\">
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
                        <div class=\"col-md-8\">
                            <div class=\"info-grid\">
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-tag text-primary me-2\"></i> Nom
                                    </div>
                                    <div class=\"info-value\">{{ category.name }}</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-link text-primary me-2\"></i> Slug
                                    </div>
                                    <div class=\"info-value\">
                                        <code class=\"bg-light p-2 rounded\">{{ category.slug }}</code>
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-align-left text-primary me-2\"></i> Description
                                    </div>
                                    <div class=\"info-value\">
                                        {{ category.description|default('Aucune description')|nl2br }}
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
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
                                                <i class=\"fas fa-folder me-1\"></i> Catégorie principale
                                            </span>
                                        {% endif %}
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-user text-primary me-2\"></i> Créateur
                                    </div>
                                    <div class=\"info-value\">{{ category.user.email }}</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-calendar-plus text-primary me-2\"></i> Créée le
                                    </div>
                                    <div class=\"info-value\">
                                        {{ category.createdAt|date('d/m/Y à H:i') }}
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-calendar-edit text-primary me-2\"></i> Modifiée le
                                    </div>
                                    <div class=\"info-value\">
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
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg border-0 mb-4 card-hover\">
                <div class=\"card-header bg-gradient-info text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-chart-bar me-2\"></i> Statistiques
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"display-4 text-primary mb-1\">{{ category.recipes|length }}</div>
                        <div class=\"text-muted\">Plats dans cette catégorie</div>
                    </div>
                    
                    <hr class=\"my-4\">
                    
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
                <div class=\"card-header bg-gradient-success text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-bolt me-2\"></i> Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"{{ path('app_admin_category_recipe_edit', {'id': category.id}) }}\" 
                           class=\"btn btn-warning btn-lg\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        
                        {% if category.children|length > 0 %}
                            <a href=\"{{ path('app_admin_category_recipe_index') }}?parent={{ category.id }}\" 
                               class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir les sous-catégories
                            </a>
                        {% endif %}
                        
                        {% if category.parent %}
                            <a href=\"{{ path('app_admin_category_recipe_show', {'id': category.parent.id}) }}\" 
                               class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-level-up-alt me-2\"></i> Voir la catégorie parente
                            </a>
                        {% endif %}
                        
                        <a href=\"{{ path('app_admin_recipe_new') }}?category={{ category.id }}\" 
                           class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-plus me-2\"></i> Ajouter un plat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des plats dans cette catégorie -->
    <div class=\"card shadow-lg border-0 mb-4 card-hover\">
        <div class=\"card-header bg-gradient-primary text-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-utensils me-2\"></i> 
                Plats dans cette catégorie 
                <span class=\"badge bg-light text-dark ms-2\">{{ category.recipes|length }}</span>
            </h5>
            <a href=\"{{ path('app_admin_recipe_new') }}?category={{ category.id }}\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter un plat
            </a>
        </div>
        
        <div class=\"card-body\">
            {% if category.recipes|length > 0 %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle\">
                        <thead class=\"table-light\">
                             <tr>
                                <th width=\"80\">Image</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Prix de vente</th>
                                <th>Statut</th>
                                <th class=\"text-end\">Actions</th>
                             </tr>
                        </thead>
                        <tbody>
                            {% for recipe in category.recipes %}
                                <tr class=\"recipe-row\">
                                    <td>
                                        {% if recipe.image %}
                                            <img src=\"{{ asset('uploads/images_plats/' ~ recipe.image) }}\" 
                                                 alt=\"{{ recipe.name }}\"
                                                 class=\"img-thumbnail\" 
                                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                                        {% else %}
                                            <div class=\"bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 60px; height: 60px;\">
                                                <i class=\"fas fa-utensils text-muted\"></i>
                                            </div>
                                        {% endif %}
                                    </td>
                                    <td><strong>{{ recipe.name }}</strong></td>
                                    <td>{{ recipe.description|u.truncate(50, '...') }}</td>
                                    <td><span class=\"fw-bold text-primary\">{{ recipe.sellingPrice|number_format(0, ',', ' ') }} FCFA</span></td>
                                    <td>
                                        {% if recipe.isActive %}
                                            <span class=\"badge bg-success\">Actif</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Inactif</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-end\">
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
                <div class=\"text-center py-5\">
                    <i class=\"fas fa-utensils fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun plat dans cette catégorie</h5>
                    <p class=\"text-muted mb-4\">Commencez par ajouter des plats à cette catégorie</p>
                    <a href=\"{{ path('app_admin_recipe_new') }}?category={{ category.id }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Ajouter un plat
                    </a>
                </div>
            {% endif %}
        </div>
    </div>

    <!-- Liste des sous-catégories -->
    {% if category.children|length > 0 %}
    <div class=\"card shadow-lg border-0 card-hover\">
        <div class=\"card-header bg-gradient-info text-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-sitemap me-2\"></i> 
                Sous-catégories 
                <span class=\"badge bg-light text-dark ms-2\">{{ category.children|length }}</span>
            </h5>
            <a href=\"{{ path('app_admin_category_recipe_new') }}?parent={{ category.id }}\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter une sous-catégorie
            </a>
        </div>
        
        <div class=\"card-body\">
            <div class=\"row\">
                {% for child in category.children %}
                <div class=\"col-md-6 col-lg-4 mb-3\">
                    <div class=\"card border-0 bg-light h-100 card-hover-sm\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-start\">
                                {% if child.image %}
                                    <img src=\"{{ asset('uploads/categories_plats/' ~ child.image) }}\" 
                                         alt=\"{{ child.name }}\"
                                         class=\"rounded me-3\"
                                         style=\"width: 60px; height: 60px; object-fit: cover;\">
                                {% else %}
                                    <div class=\"bg-secondary rounded d-flex align-items-center justify-content-center me-3\"
                                         style=\"width: 60px; height: 60px;\">
                                        <i class=\"fas fa-folder text-white\"></i>
                                    </div>
                                {% endif %}
                                <div class=\"flex-grow-1\">
                                    <h6 class=\"mb-1\">{{ child.name }}</h6>
                                    <div class=\"d-flex align-items-center mb-2\">
                                        {% if child.isActive %}
                                            <span class=\"badge bg-success me-2\">Active</span>
                                        {% else %}
                                            <span class=\"badge bg-danger me-2\">Inactive</span>
                                        {% endif %}
                                        <span class=\"badge bg-primary\">{{ child.recipes|length }} plats</span>
                                    </div>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_admin_category_recipe_show', {'id': child.id}) }}\" 
                                           class=\"btn btn-outline-info btn-sm\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_category_recipe_edit', {'id': child.id}) }}\" 
                                           class=\"btn btn-outline-warning btn-sm\">
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
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteCategoryModalContent\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form id=\"deleteCategoryForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteCategoryConfirmBtn\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer définitivement
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
    gap: 1rem;
}
.info-item {
    padding-bottom: 1rem;
    border-bottom: 1px solid #f0f0f0;
}
.info-item:last-child {
    border-bottom: none;
}
.info-label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.25rem;
    display: flex;
    align-items: center;
}
.info-value {
    color: #212529;
    font-size: 1rem;
}
.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}
.stat-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.3s ease;
}
.stat-item:hover {
    background: #e9ecef;
    transform: translateY(-2px);
}
.stat-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}
.stat-content {
    flex: 1;
}
.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: #212529;
    line-height: 1;
}
.stat-label {
    font-size: 0.85rem;
    color: #6c757d;
    margin-top: 0.25rem;
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
}
.table td {
    vertical-align: middle;
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
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    .info-item {
        padding: 0.5rem 0;
    }
    .card-header .btn-sm {
        margin-top: 0.5rem;
        width: 100%;
    }
    .btn-group {
        flex-direction: column;
        gap: 0.5rem;
    }
    .btn-group .btn {
        width: 100%;
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
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        \${message}
                    </div>
                    <div class=\"input-group mt-3\">
                        <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                        <input type=\"text\" id=\"confirmCategoryName\" class=\"form-control\" placeholder=\"Saisissez le nom de la catégorie pour confirmer\">
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
                    <p class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
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
