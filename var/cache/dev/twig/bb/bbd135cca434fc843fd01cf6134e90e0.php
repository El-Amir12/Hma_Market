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

/* admin/category/show.html.twig */
class __TwigTemplate_89cd90b67fc4cf92ed6585352de06f03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/show.html.twig"));

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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Catégories de produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18)), "truncate", [20, "..."], "method", false, false, false, 18), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-tags me-2\"></i> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        yield "
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Détails de la catégorie de produits</p>
        </div>
        <div class=\"btn-group float-up\">
            <a href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 77, $this->source); })()), "image", [], "any", false, false, false, 77))), "html", null, true);
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
                                        <i class=\"fas fa-folder fa-5x text-white\"></i>
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
                                    <div class=\"info-label\"><i class=\"fas fa-tag text-primary me-2\"></i> Nom</div>
                                    <div class=\"info-value\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 108, $this->source); })()), "name", [], "any", false, false, false, 108), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-link text-primary me-2\"></i> Slug</div>
                                    <div class=\"info-value\"><code class=\"bg-light p-2 rounded\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 113, $this->source); })()), "slug", [], "any", false, false, false, 113), "html", null, true);
        yield "</code></div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-align-left text-primary me-2\"></i> Description</div>
                                    <div class=\"info-value\">";
        // line 118
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 118, $this->source); })()), "description", [], "any", false, false, false, 118), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-sitemap text-primary me-2\"></i> Catégorie parente</div>
                                    <div class=\"info-value\">
                                        ";
        // line 124
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 124, $this->source); })()), "parent", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 125, $this->source); })()), "parent", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\" 
                                               class=\"badge bg-info text-decoration-none\">
                                                <i class=\"fas fa-level-up-alt me-1\"></i> ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 127, $this->source); })()), "parent", [], "any", false, false, false, 127), "name", [], "any", false, false, false, 127), "html", null, true);
            yield "
                                            </a>
                                        ";
        } else {
            // line 130
            yield "                                            <span class=\"badge bg-secondary\"><i class=\"fas fa-folder me-1\"></i> Catégorie principale</span>
                                        ";
        }
        // line 132
        yield "                                    </div>
                                </div>
                                
                                ";
        // line 135
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "user", [], "any", true, true, false, 135) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135))) {
            // line 136
            yield "                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-user text-primary me-2\"></i> Créateur</div>
                                    <div class=\"info-value\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "email", [], "any", false, false, false, 138), "html", null, true);
            yield "</div>
                                </div>
                                ";
        }
        // line 141
        yield "                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-calendar-plus text-primary me-2\"></i> Créée le</div>
                                    <div class=\"info-value\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 144, $this->source); })()), "createdAt", [], "any", false, false, false, 144), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-calendar-edit text-primary me-2\"></i> Modifiée le</div>
                                    <div class=\"info-value\">
                                        ";
        // line 150
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 150, $this->source); })()), "updatedAt", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 151, $this->source); })()), "updatedAt", [], "any", false, false, false, 151), "d/m/Y à H:i"), "html", null, true);
            yield "
                                        ";
        } else {
            // line 153
            yield "                                            <span class=\"text-muted\">Jamais modifiée</span>
                                        ";
        }
        // line 155
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
                    <h5 class=\"card-title mb-0\"><i class=\"fas fa-chart-bar me-2\"></i> Statistiques</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"display-4 text-primary mb-1\">";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 172, $this->source); })()), "products", [], "any", false, false, false, 172)), "html", null, true);
        yield "</div>
                        <div class=\"text-muted\">Produits dans cette catégorie</div>
                    </div>
                    
                    <hr>
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-primary\"><i class=\"fas fa-box text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 182, $this->source); })()), "products", [], "any", false, false, false, 182), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 182, $this->source); })()), "isActive", [], "any", false, false, false, 182); })), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Produits actifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-warning\"><i class=\"fas fa-box text-dark\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 190, $this->source); })()), "products", [], "any", false, false, false, 190), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 190, $this->source); })()), "isActive", [], "any", false, false, false, 190); })), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Produits inactifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-info\"><i class=\"fas fa-sitemap text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 198, $this->source); })()), "children", [], "any", false, false, false, 198)), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Sous-catégories</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-success\"><i class=\"fas fa-layer-group text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 206
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 206, $this->source); })()), "parent", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 206, $this->source); })()), "parent", [], "any", false, false, false, 206), "children", [], "any", false, false, false, 206)), "html", null, true)) : (0));
        yield "</div>
                                <div class=\"stat-label\">Catégories sœurs</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carte actions rapides -->
            <div class=\"card shadow-lg border-0 card-hover\">
                <div class=\"card-header bg-gradient-success text-white py-3\">
                    <h5 class=\"card-title mb-0\"><i class=\"fas fa-bolt me-2\"></i> Actions rapides</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 221, $this->source); })()), "id", [], "any", false, false, false, 221)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-lg\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        
                        ";
        // line 225
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 225, $this->source); })()), "children", [], "any", false, false, false, 225)) > 0)) {
            // line 226
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 226, $this->source); })()), "id", [], "any", false, false, false, 226), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir les sous-catégories
                            </a>
                        ";
        }
        // line 230
        yield "                        
                        ";
        // line 231
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 231, $this->source); })()), "parent", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 232
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 232, $this->source); })()), "parent", [], "any", false, false, false, 232), "id", [], "any", false, false, false, 232)]), "html", null, true);
            yield "\" class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-level-up-alt me-2\"></i> Voir la catégorie parente
                            </a>
                        ";
        }
        // line 236
        yield "                        
                        <a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 237, $this->source); })()), "id", [], "any", false, false, false, 237), "html", null, true);
        yield "\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
                        </a>
                        ";
        // line 240
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 240, $this->source); })()) != "restaurant")) {
            // line 241
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 241, $this->source); })()), "id", [], "any", false, false, false, 241)]), "html", null, true);
            yield "\" 
                                class=\"btn btn-sm btn-outline-warning\" title=\"Promotions\">
                                <i class=\"fas fa-percent\"></i> Promotions
                            </a>
                        ";
        }
        // line 245
        yield "    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des produits dans cette catégorie -->
    <div class=\"card shadow-lg border-0 mb-4 card-hover\">
        <div class=\"card-header bg-gradient-primary text-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-boxes me-2\"></i> 
                Produits dans cette catégorie 
                <span class=\"badge bg-light text-dark ms-2\">";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 259, $this->source); })()), "products", [], "any", false, false, false, 259)), "html", null, true);
        yield "</span>
            </h5>
            <a href=\"";
        // line 261
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 261, $this->source); })()), "id", [], "any", false, false, false, 261), "html", null, true);
        yield "\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter un produit
            </a>
        </div>
        
        <div class=\"card-body\">
            ";
        // line 267
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 267, $this->source); })()), "products", [], "any", false, false, false, 267)) > 0)) {
            // line 268
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle\">
                        <thead class=\"table-light\">
                             <tr>
                                <th width=\"80\">Image</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Prix d'achat</th>
                                <th>Prix de vente</th>
                                <th>Stock</th>
                                <th>Statut</th>
                                <th class=\"text-end\">Actions</th>
                             </tr>
                        </thead>
                        <tbody>
                            ";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 283, $this->source); })()), "products", [], "any", false, false, false, 283));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 284
                yield "                                <tr class=\"product-row\">
                                    <td style=\"width: 70px;\">
                                        ";
                // line 286
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 286) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 286) != "default-product.png"))) {
                    // line 287
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 287))), "html", null, true);
                    yield "\" 
                                                 alt=\"";
                    // line 288
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 288), "html", null, true);
                    yield "\"
                                                 class=\"img-thumbnail\" 
                                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                                        ";
                } else {
                    // line 292
                    yield "                                            <div class=\"bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 60px; height: 60px;\">
                                                <i class=\"fas fa-box text-muted\"></i>
                                            </div>
                                        ";
                }
                // line 297
                yield "                                    </td>
                                    <td><strong>";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 298), "html", null, true);
                yield "</strong></td>
                                    <td>";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 299)), "truncate", [50, "..."], "method", false, false, false, 299), "html", null, true);
                yield "</td>
                                    <td><span class=\"fw-bold text-primary\">";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 300), 0, ",", " "), "html", null, true);
                yield " FCFA</span></td>
                                    <td>
                                        ";
                // line 302
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 302))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 303
                    yield "                                            <span class=\"fw-bold text-success\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 303), 0, ",", " "), "html", null, true);
                    yield " FCFA</span>
                                        ";
                } else {
                    // line 305
                    yield "                                            <span class=\"text-muted\">-</span>
                                        ";
                }
                // line 307
                yield "                                    </td>
                                    <td>
                                        <span class=\"badge ";
                // line 309
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 309) <= CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 309))) ? ("bg-warning text-dark") : ("bg-info"));
                yield "\">
                                            ";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 310), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 310)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 310), "")) : ("")), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td>
                                        ";
                // line 314
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 314)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 315
                    yield "                                            <span class=\"badge bg-success\">Actif</span>
                                        ";
                } else {
                    // line 317
                    yield "                                            <span class=\"badge bg-danger\">Inactif</span>
                                        ";
                }
                // line 319
                yield "                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"";
                // line 322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 322)]), "html", null, true);
                yield "\" class=\"btn btn-outline-info\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 325)]), "html", null, true);
                yield "\" class=\"btn btn-outline-warning\" title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 336
            yield "                <div class=\"text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun produit dans cette catégorie</h5>
                    <p class=\"text-muted mb-4\">Commencez par ajouter des produits à cette catégorie</p>
                    <a href=\"";
            // line 340
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 340, $this->source); })()), "id", [], "any", false, false, false, 340), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Ajouter un produit
                    </a>
                </div>
            ";
        }
        // line 345
        yield "        </div>
    </div>

    <!-- Liste des sous-catégories -->
    ";
        // line 349
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 349, $this->source); })()), "children", [], "any", false, false, false, 349)) > 0)) {
            // line 350
            yield "    <div class=\"card shadow-lg border-0 card-hover\">
        <div class=\"card-header bg-gradient-info text-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-sitemap me-2\"></i> 
                Sous-catégories 
                <span class=\"badge bg-light text-dark ms-2\">";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 355, $this->source); })()), "children", [], "any", false, false, false, 355)), "html", null, true);
            yield "</span>
            </h5>
            <a href=\"";
            // line 357
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 357, $this->source); })()), "id", [], "any", false, false, false, 357), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter une sous-catégorie
            </a>
        </div>
        
        <div class=\"card-body\">
            <div class=\"row\">
                ";
            // line 364
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 364, $this->source); })()), "children", [], "any", false, false, false, 364));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 365
                yield "                <div class=\"col-md-6 col-lg-4 mb-3\">
                    <div class=\"card border-0 bg-light h-100 card-hover-sm\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-start\">
                                ";
                // line 369
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 369)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 370
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 370))), "html", null, true);
                    yield "\" 
                                         alt=\"";
                    // line 371
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 371), "html", null, true);
                    yield "\"
                                         class=\"rounded me-3\"
                                         style=\"width: 60px; height: 60px; object-fit: cover;\">
                                ";
                } else {
                    // line 375
                    yield "                                    <div class=\"bg-secondary rounded d-flex align-items-center justify-content-center me-3\"
                                         style=\"width: 60px; height: 60px;\">
                                        <i class=\"fas fa-folder text-white\"></i>
                                    </div>
                                ";
                }
                // line 380
                yield "                                <div class=\"flex-grow-1\">
                                    <h6 class=\"mb-1\">";
                // line 381
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 381), "html", null, true);
                yield "</h6>
                                    <div class=\"d-flex align-items-center mb-2\">
                                        ";
                // line 383
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 383)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 384
                    yield "                                            <span class=\"badge bg-success me-2\">Active</span>
                                        ";
                } else {
                    // line 386
                    yield "                                            <span class=\"badge bg-danger me-2\">Inactive</span>
                                        ";
                }
                // line 388
                yield "                                        <span class=\"badge bg-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["child"], "products", [], "any", false, false, false, 388)), "html", null, true);
                yield " produits</span>
                                    </div>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
                // line 391
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 391)]), "html", null, true);
                yield "\" class=\"btn btn-outline-info\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 394)]), "html", null, true);
                yield "\" class=\"btn btn-outline-warning\">
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
            // line 404
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 408
        yield "</div>


<!-- Modal de suppression avec confirmation -->
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
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Êtes-vous sûr de vouloir supprimer la catégorie <strong id=\"deleteCategoryNameSpan\">";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 423, $this->source); })()), "name", [], "any", false, false, false, 423), "html", null, true);
        yield "</strong> ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>

                <div id=\"deleteWarning\" class=\"alert alert-warning mt-3\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    <span id=\"deleteWarningMessage\"></span>
                </div>

                <div id=\"deleteConfirmInputGroup\" class=\"input-group mt-3\" style=\"display: none;\">
                    <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                    <input type=\"text\" id=\"deleteConfirmName\" class=\"form-control\" placeholder=\"Saisissez le nom de la catégorie pour confirmer\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form id=\"deleteForm\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteConfirmBtn\">
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

    // line 452
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

        // line 453
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.card-hover { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); border: 1px solid rgba(102, 126, 234, 0.1); }
.card-hover:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important; border-color: rgba(102, 126, 234, 0.3); }
.card-hover-sm:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08) !important; }
.btn-hover-scale { transition: all 0.2s ease; }
.btn-hover-scale:hover { transform: scale(1.05); }
.btn-hover-lift { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
.btn-hover-lift:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3); }
.bg-gradient-primary { background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important; }
.bg-gradient-info { background: linear-gradient(135deg, #17a2b8 0%, #138496 100%) !important; }
.bg-gradient-success { background: linear-gradient(135deg, #28a745 0%, #218838 100%) !important; }
.slide-in-left { animation: slideInLeft 0.5s ease-out; }
@keyframes slideInLeft { from { transform: translateX(-20px); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
.float-up { animation: floatUp 3s ease-in-out infinite; }
@keyframes floatUp { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
.info-grid { display: grid; gap: 1rem; }
.info-item { padding-bottom: 1rem; border-bottom: 1px solid #f0f0f0; }
.info-item:last-child { border-bottom: none; }
.info-label { font-weight: 600; color: #495057; margin-bottom: 0.25rem; display: flex; align-items: center; }
.info-value { color: #212529; font-size: 1rem; }
.stats-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; }
.stat-item { display: flex; align-items: center; gap: 1rem; padding: 0.75rem; background: #f8f9fa; border-radius: 10px; transition: all 0.3s ease; }
.stat-item:hover { background: #e9ecef; transform: translateY(-2px); }
.stat-icon { width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }
.stat-number { font-size: 1.5rem; font-weight: 700; line-height: 1; }
.stat-label { font-size: 0.85rem; color: #6c757d; margin-top: 0.25rem; }
.product-row:hover { background-color: rgba(102, 126, 234, 0.05); transition: all 0.2s ease; }
.table th { font-weight: 600; background-color: #f8f9fa; border-bottom: 2px solid #dee2e6; }
.table td { vertical-align: middle; }
.badge { font-weight: 500; letter-spacing: 0.3px; }
.category-image { transition: all 0.3s ease; }
.category-image:hover { transform: scale(1.05); box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important; }
.category-placeholder { border-radius: 15px; transition: all 0.3s ease; }
.category-placeholder:hover { transform: scale(1.05); box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important; }
.breadcrumb { background-color: transparent; padding-left: 0; margin-bottom: 0.5rem; }
.breadcrumb-item a { color: #667eea; transition: color 0.2s ease; }
.breadcrumb-item a:hover { color: #0463f1; text-decoration: underline; }
.breadcrumb-item.active { color: #6c757d; }
@media (max-width: 768px) {
    .stats-grid { grid-template-columns: 1fr; }
    .info-item { padding: 0.5rem 0; }
    .card-header .btn-sm { margin-top: 0.5rem; width: 100%; }
    .btn-group { flex-direction: column; gap: 0.5rem; }
    .btn-group .btn { width: 100%; }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 502
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

        // line 503
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Suppression avec confirmation par saisie ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');
    const deleteConfirmInput = document.getElementById('deleteConfirmName');
    const deleteWarning = document.getElementById('deleteWarning');
    const deleteWarningMessage = document.getElementById('deleteWarningMessage');
    const deleteConfirmInputGroup = document.getElementById('deleteConfirmInputGroup');
    const deleteCategoryNameSpan = document.getElementById('deleteCategoryNameSpan');

    const categoryName = \"";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 517, $this->source); })()), "name", [], "any", false, false, false, 517), "js"), "html", null, true);
        yield "\";
    const hasProducts = ";
        // line 518
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 518, $this->source); })()), "products", [], "any", false, false, false, 518)) > 0)) ? ("true") : ("false"));
        yield ";
    const hasChildren = ";
        // line 519
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 519, $this->source); })()), "children", [], "any", false, false, false, 519)) > 0)) ? ("true") : ("false"));
        yield ";

    // Initialisation du modal (affichage conditionnel)
    if (hasProducts || hasChildren) {
        let message = '';
        if (hasProducts && hasChildren) {
            message = `Cette catégorie contient des produits et des sous-catégories.`;
        } else if (hasProducts) {
            message = `Cette catégorie contient des produits.`;
        } else if (hasChildren) {
            message = `Cette catégorie contient des sous-catégories.`;
        }
        message += ` Pour confirmer la suppression, saisissez exactement le nom \"\${categoryName}\".`;
        deleteWarningMessage.textContent = message;
        deleteWarning.style.display = 'block';
        deleteConfirmInputGroup.style.display = 'flex';
        deleteConfirmBtn.disabled = true;
    } else {
        deleteWarningMessage.textContent = `La catégorie \"\${categoryName}\" sera définitivement supprimée.`;
        deleteWarning.style.display = 'block';
        deleteConfirmBtn.disabled = false;
    }

    // Activer le bouton quand le nom saisi correspond
    if (deleteConfirmInput && deleteConfirmBtn) {
        deleteConfirmInput.addEventListener('input', function() {
            deleteConfirmBtn.disabled = this.value.trim() !== categoryName;
        });
    }

    // Remplir le formulaire au moment de l'ouverture du modal
    const deleteButton = document.querySelector('[data-bs-target=\"#deleteCategoryModal\"]');
    if (deleteButton) {
        deleteButton.addEventListener('click', function() {
            deleteForm.action = `/admin/category/";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 553, $this->source); })()), "id", [], "any", false, false, false, 553), "html", null, true);
        yield "`;
            deleteToken.value = '";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 554, $this->source); })()), "id", [], "any", false, false, false, 554))), "html", null, true);
        yield "';
            deleteConfirmInput.value = '';
            deleteConfirmBtn.disabled = (hasProducts || hasChildren);
            deleteModal.show();
        });
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
        return "admin/category/show.html.twig";
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
        return array (  993 => 554,  989 => 553,  952 => 519,  948 => 518,  944 => 517,  927 => 503,  914 => 502,  855 => 453,  842 => 452,  803 => 423,  786 => 408,  780 => 404,  764 => 394,  758 => 391,  751 => 388,  747 => 386,  743 => 384,  741 => 383,  736 => 381,  733 => 380,  726 => 375,  719 => 371,  714 => 370,  712 => 369,  706 => 365,  702 => 364,  690 => 357,  685 => 355,  678 => 350,  676 => 349,  670 => 345,  660 => 340,  654 => 336,  648 => 332,  635 => 325,  629 => 322,  624 => 319,  620 => 317,  616 => 315,  614 => 314,  605 => 310,  601 => 309,  597 => 307,  593 => 305,  587 => 303,  585 => 302,  580 => 300,  576 => 299,  572 => 298,  569 => 297,  562 => 292,  555 => 288,  550 => 287,  548 => 286,  544 => 284,  540 => 283,  523 => 268,  521 => 267,  510 => 261,  505 => 259,  489 => 245,  480 => 241,  478 => 240,  470 => 237,  467 => 236,  459 => 232,  457 => 231,  454 => 230,  444 => 226,  442 => 225,  435 => 221,  417 => 206,  406 => 198,  395 => 190,  384 => 182,  371 => 172,  352 => 155,  348 => 153,  342 => 151,  340 => 150,  331 => 144,  326 => 141,  320 => 138,  316 => 136,  314 => 135,  309 => 132,  305 => 130,  299 => 127,  293 => 125,  291 => 124,  282 => 118,  274 => 113,  266 => 108,  255 => 99,  249 => 95,  243 => 91,  241 => 90,  236 => 87,  229 => 82,  222 => 78,  217 => 77,  215 => 76,  196 => 59,  186 => 55,  183 => 54,  179 => 53,  176 => 52,  166 => 48,  163 => 47,  159 => 46,  143 => 33,  134 => 27,  127 => 23,  119 => 18,  112 => 14,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category/show.html.twig #}
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
                        <a href=\"{{ path('app_admin_category_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Catégories de produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">{{ category.name|u.truncate(20, '...') }}</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-tags me-2\"></i> {{ category.name }}
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Détails de la catégorie de produits</p>
        </div>
        <div class=\"btn-group float-up\">
            <a href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\" class=\"btn btn-warning btn-hover-lift\">
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
                                    <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\" 
                                         alt=\"{{ category.name }}\"
                                         class=\"img-fluid rounded shadow-lg mb-3 category-image\"
                                         style=\"max-height: 200px; object-fit: cover;\">
                                {% else %}
                                    <div class=\"bg-gradient-primary rounded d-flex align-items-center justify-content-center mb-3 category-placeholder\"
                                         style=\"height: 200px;\">
                                        <i class=\"fas fa-folder fa-5x text-white\"></i>
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
                                    <div class=\"info-label\"><i class=\"fas fa-tag text-primary me-2\"></i> Nom</div>
                                    <div class=\"info-value\">{{ category.name }}</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-link text-primary me-2\"></i> Slug</div>
                                    <div class=\"info-value\"><code class=\"bg-light p-2 rounded\">{{ category.slug }}</code></div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-align-left text-primary me-2\"></i> Description</div>
                                    <div class=\"info-value\">{{ category.description|default('Aucune description')|nl2br }}</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-sitemap text-primary me-2\"></i> Catégorie parente</div>
                                    <div class=\"info-value\">
                                        {% if category.parent %}
                                            <a href=\"{{ path('app_admin_category_show', {'id': category.parent.id}) }}\" 
                                               class=\"badge bg-info text-decoration-none\">
                                                <i class=\"fas fa-level-up-alt me-1\"></i> {{ category.parent.name }}
                                            </a>
                                        {% else %}
                                            <span class=\"badge bg-secondary\"><i class=\"fas fa-folder me-1\"></i> Catégorie principale</span>
                                        {% endif %}
                                    </div>
                                </div>
                                
                                {% if category.user is defined and category.user %}
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-user text-primary me-2\"></i> Créateur</div>
                                    <div class=\"info-value\">{{ category.user.email }}</div>
                                </div>
                                {% endif %}
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-calendar-plus text-primary me-2\"></i> Créée le</div>
                                    <div class=\"info-value\">{{ category.createdAt|date('d/m/Y à H:i') }}</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-calendar-edit text-primary me-2\"></i> Modifiée le</div>
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
                    <h5 class=\"card-title mb-0\"><i class=\"fas fa-chart-bar me-2\"></i> Statistiques</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"display-4 text-primary mb-1\">{{ category.products|length }}</div>
                        <div class=\"text-muted\">Produits dans cette catégorie</div>
                    </div>
                    
                    <hr>
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-primary\"><i class=\"fas fa-box text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">{{ category.products|filter(p => p.isActive)|length }}</div>
                                <div class=\"stat-label\">Produits actifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-warning\"><i class=\"fas fa-box text-dark\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">{{ category.products|filter(p => not p.isActive)|length }}</div>
                                <div class=\"stat-label\">Produits inactifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-info\"><i class=\"fas fa-sitemap text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">{{ category.children|length }}</div>
                                <div class=\"stat-label\">Sous-catégories</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-success\"><i class=\"fas fa-layer-group text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">{{ category.parent ? category.parent.children|length : 0 }}</div>
                                <div class=\"stat-label\">Catégories sœurs</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carte actions rapides -->
            <div class=\"card shadow-lg border-0 card-hover\">
                <div class=\"card-header bg-gradient-success text-white py-3\">
                    <h5 class=\"card-title mb-0\"><i class=\"fas fa-bolt me-2\"></i> Actions rapides</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\" class=\"btn btn-warning btn-lg\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        
                        {% if category.children|length > 0 %}
                            <a href=\"{{ path('app_admin_category_index') }}?parent={{ category.id }}\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir les sous-catégories
                            </a>
                        {% endif %}
                        
                        {% if category.parent %}
                            <a href=\"{{ path('app_admin_category_show', {'id': category.parent.id}) }}\" class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-level-up-alt me-2\"></i> Voir la catégorie parente
                            </a>
                        {% endif %}
                        
                        <a href=\"{{ path('app_admin_product_new') }}?category={{ category.id }}\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
                        </a>
                        {% if companyType != 'restaurant' %}
                            <a href=\"{{ path('app_admin_category_promotions', {'id': category.id}) }}\" 
                                class=\"btn btn-sm btn-outline-warning\" title=\"Promotions\">
                                <i class=\"fas fa-percent\"></i> Promotions
                            </a>
                        {% endif %}    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des produits dans cette catégorie -->
    <div class=\"card shadow-lg border-0 mb-4 card-hover\">
        <div class=\"card-header bg-gradient-primary text-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-boxes me-2\"></i> 
                Produits dans cette catégorie 
                <span class=\"badge bg-light text-dark ms-2\">{{ category.products|length }}</span>
            </h5>
            <a href=\"{{ path('app_admin_product_new') }}?category={{ category.id }}\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter un produit
            </a>
        </div>
        
        <div class=\"card-body\">
            {% if category.products|length > 0 %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle\">
                        <thead class=\"table-light\">
                             <tr>
                                <th width=\"80\">Image</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Prix d'achat</th>
                                <th>Prix de vente</th>
                                <th>Stock</th>
                                <th>Statut</th>
                                <th class=\"text-end\">Actions</th>
                             </tr>
                        </thead>
                        <tbody>
                            {% for product in category.products %}
                                <tr class=\"product-row\">
                                    <td style=\"width: 70px;\">
                                        {% if product.image and product.image != 'default-product.png' %}
                                            <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                                                 alt=\"{{ product.name }}\"
                                                 class=\"img-thumbnail\" 
                                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                                        {% else %}
                                            <div class=\"bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 60px; height: 60px;\">
                                                <i class=\"fas fa-box text-muted\"></i>
                                            </div>
                                        {% endif %}
                                    </td>
                                    <td><strong>{{ product.name }}</strong></td>
                                    <td>{{ product.description|u.truncate(50, '...') }}</td>
                                    <td><span class=\"fw-bold text-primary\">{{ product.purchasePrice|number_format(0, ',', ' ') }} FCFA</span></td>
                                    <td>
                                        {% if product.salePrice is not null %}
                                            <span class=\"fw-bold text-success\">{{ product.salePrice|number_format(0, ',', ' ') }} FCFA</span>
                                        {% else %}
                                            <span class=\"text-muted\">-</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <span class=\"badge {{ product.stockQuantity <= product.minQuantity ? 'bg-warning text-dark' : 'bg-info' }}\">
                                            {{ product.stockQuantity }} {{ product.unit|default('') }}
                                        </span>
                                    </td>
                                    <td>
                                        {% if product.isActive %}
                                            <span class=\"badge bg-success\">Actif</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Inactif</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"btn btn-outline-info\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"{{ path('app_admin_product_edit', {'id': product.id}) }}\" class=\"btn btn-outline-warning\" title=\"Modifier\">
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
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun produit dans cette catégorie</h5>
                    <p class=\"text-muted mb-4\">Commencez par ajouter des produits à cette catégorie</p>
                    <a href=\"{{ path('app_admin_product_new') }}?category={{ category.id }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Ajouter un produit
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
            <a href=\"{{ path('app_admin_category_new') }}?parent={{ category.id }}\" class=\"btn btn-light btn-sm\">
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
                                    <img src=\"{{ asset('uploads/categories/' ~ child.image) }}\" 
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
                                        <span class=\"badge bg-primary\">{{ child.products|length }} produits</span>
                                    </div>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_admin_category_show', {'id': child.id}) }}\" class=\"btn btn-outline-info\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_category_edit', {'id': child.id}) }}\" class=\"btn btn-outline-warning\">
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
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer la catégorie
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Êtes-vous sûr de vouloir supprimer la catégorie <strong id=\"deleteCategoryNameSpan\">{{ category.name }}</strong> ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>

                <div id=\"deleteWarning\" class=\"alert alert-warning mt-3\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    <span id=\"deleteWarningMessage\"></span>
                </div>

                <div id=\"deleteConfirmInputGroup\" class=\"input-group mt-3\" style=\"display: none;\">
                    <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                    <input type=\"text\" id=\"deleteConfirmName\" class=\"form-control\" placeholder=\"Saisissez le nom de la catégorie pour confirmer\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form id=\"deleteForm\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteConfirmBtn\">
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
.card-hover { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); border: 1px solid rgba(102, 126, 234, 0.1); }
.card-hover:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important; border-color: rgba(102, 126, 234, 0.3); }
.card-hover-sm:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08) !important; }
.btn-hover-scale { transition: all 0.2s ease; }
.btn-hover-scale:hover { transform: scale(1.05); }
.btn-hover-lift { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
.btn-hover-lift:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3); }
.bg-gradient-primary { background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important; }
.bg-gradient-info { background: linear-gradient(135deg, #17a2b8 0%, #138496 100%) !important; }
.bg-gradient-success { background: linear-gradient(135deg, #28a745 0%, #218838 100%) !important; }
.slide-in-left { animation: slideInLeft 0.5s ease-out; }
@keyframes slideInLeft { from { transform: translateX(-20px); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
.float-up { animation: floatUp 3s ease-in-out infinite; }
@keyframes floatUp { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
.info-grid { display: grid; gap: 1rem; }
.info-item { padding-bottom: 1rem; border-bottom: 1px solid #f0f0f0; }
.info-item:last-child { border-bottom: none; }
.info-label { font-weight: 600; color: #495057; margin-bottom: 0.25rem; display: flex; align-items: center; }
.info-value { color: #212529; font-size: 1rem; }
.stats-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; }
.stat-item { display: flex; align-items: center; gap: 1rem; padding: 0.75rem; background: #f8f9fa; border-radius: 10px; transition: all 0.3s ease; }
.stat-item:hover { background: #e9ecef; transform: translateY(-2px); }
.stat-icon { width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }
.stat-number { font-size: 1.5rem; font-weight: 700; line-height: 1; }
.stat-label { font-size: 0.85rem; color: #6c757d; margin-top: 0.25rem; }
.product-row:hover { background-color: rgba(102, 126, 234, 0.05); transition: all 0.2s ease; }
.table th { font-weight: 600; background-color: #f8f9fa; border-bottom: 2px solid #dee2e6; }
.table td { vertical-align: middle; }
.badge { font-weight: 500; letter-spacing: 0.3px; }
.category-image { transition: all 0.3s ease; }
.category-image:hover { transform: scale(1.05); box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important; }
.category-placeholder { border-radius: 15px; transition: all 0.3s ease; }
.category-placeholder:hover { transform: scale(1.05); box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important; }
.breadcrumb { background-color: transparent; padding-left: 0; margin-bottom: 0.5rem; }
.breadcrumb-item a { color: #667eea; transition: color 0.2s ease; }
.breadcrumb-item a:hover { color: #0463f1; text-decoration: underline; }
.breadcrumb-item.active { color: #6c757d; }
@media (max-width: 768px) {
    .stats-grid { grid-template-columns: 1fr; }
    .info-item { padding: 0.5rem 0; }
    .card-header .btn-sm { margin-top: 0.5rem; width: 100%; }
    .btn-group { flex-direction: column; gap: 0.5rem; }
    .btn-group .btn { width: 100%; }
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Suppression avec confirmation par saisie ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');
    const deleteConfirmInput = document.getElementById('deleteConfirmName');
    const deleteWarning = document.getElementById('deleteWarning');
    const deleteWarningMessage = document.getElementById('deleteWarningMessage');
    const deleteConfirmInputGroup = document.getElementById('deleteConfirmInputGroup');
    const deleteCategoryNameSpan = document.getElementById('deleteCategoryNameSpan');

    const categoryName = \"{{ category.name|e('js') }}\";
    const hasProducts = {{ category.products|length > 0 ? 'true' : 'false' }};
    const hasChildren = {{ category.children|length > 0 ? 'true' : 'false' }};

    // Initialisation du modal (affichage conditionnel)
    if (hasProducts || hasChildren) {
        let message = '';
        if (hasProducts && hasChildren) {
            message = `Cette catégorie contient des produits et des sous-catégories.`;
        } else if (hasProducts) {
            message = `Cette catégorie contient des produits.`;
        } else if (hasChildren) {
            message = `Cette catégorie contient des sous-catégories.`;
        }
        message += ` Pour confirmer la suppression, saisissez exactement le nom \"\${categoryName}\".`;
        deleteWarningMessage.textContent = message;
        deleteWarning.style.display = 'block';
        deleteConfirmInputGroup.style.display = 'flex';
        deleteConfirmBtn.disabled = true;
    } else {
        deleteWarningMessage.textContent = `La catégorie \"\${categoryName}\" sera définitivement supprimée.`;
        deleteWarning.style.display = 'block';
        deleteConfirmBtn.disabled = false;
    }

    // Activer le bouton quand le nom saisi correspond
    if (deleteConfirmInput && deleteConfirmBtn) {
        deleteConfirmInput.addEventListener('input', function() {
            deleteConfirmBtn.disabled = this.value.trim() !== categoryName;
        });
    }

    // Remplir le formulaire au moment de l'ouverture du modal
    const deleteButton = document.querySelector('[data-bs-target=\"#deleteCategoryModal\"]');
    if (deleteButton) {
        deleteButton.addEventListener('click', function() {
            deleteForm.action = `/admin/category/{{ category.id }}`;
            deleteToken.value = '{{ csrf_token(\"delete\" ~ category.id) }}';
            deleteConfirmInput.value = '';
            deleteConfirmBtn.disabled = (hasProducts || hasChildren);
            deleteModal.show();
        });
    }
});
</script>
{% endblock %}", "admin/category/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\show.html.twig");
    }
}
