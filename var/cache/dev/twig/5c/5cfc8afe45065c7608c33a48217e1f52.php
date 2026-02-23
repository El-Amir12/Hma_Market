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
class __TwigTemplate_1341c8a0776eabd9d4f0ec206941c140 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
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
    <!-- En-tête avec navigation et actions -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-list-alt me-1\"></i> Catégories
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17)), "truncate", [20, "..."], "method", false, false, false, 17), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-folder me-2\"></i> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        yield "
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Détails de la catégorie</p>
        </div>
        <div class=\"btn-group float-up\">
            <a href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-hover-lift\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            ";
        // line 35
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 35, $this->source); })()), "products", [], "any", false, false, false, 35)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 35, $this->source); })()), "children", [], "any", false, false, false, 35)) == 0))) {
            // line 36
            yield "                <button type=\"button\" 
                        class=\"btn btn-danger btn-hover-lift\"
                        data-bs-toggle=\"modal\" 
                        data-bs-target=\"#deleteCategoryModal\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            ";
        }
        // line 43
        yield "        </div>
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
    <div class=\"row\">
        <!-- Carte principale des informations -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 mb-4 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">
                            <i class=\"fas fa-info-circle me-2\"></i> Informations de la catégorie
                        </h5>
                        <span class=\"badge bg-light text-dark\">
                            ID: ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <!-- Image de la catégorie -->
                        <div class=\"col-md-4 mb-4 mb-md-0\">
                            <div class=\"text-center\">
                                ";
        // line 80
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 80, $this->source); })()), "image", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 81, $this->source); })()), "image", [], "any", false, false, false, 81))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 82, $this->source); })()), "name", [], "any", false, false, false, 82), "html", null, true);
            yield "\"
                                         class=\"img-fluid rounded shadow-lg mb-3 category-image\"
                                         style=\"max-height: 200px; object-fit: cover;\">
                                ";
        } else {
            // line 86
            yield "                                    <div class=\"bg-gradient-primary rounded d-flex align-items-center justify-content-center mb-3 category-placeholder\"
                                         style=\"height: 200px;\">
                                        <i class=\"fas fa-folder fa-5x text-white\"></i>
                                    </div>
                                ";
        }
        // line 91
        yield "                                
                                <!-- Statut -->
                                <div class=\"mb-3\">
                                    ";
        // line 94
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 94, $this->source); })()), "isActive", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "                                        <span class=\"badge bg-success rounded-pill px-3 py-2\">
                                            <i class=\"fas fa-toggle-on me-1\"></i> Active
                                        </span>
                                    ";
        } else {
            // line 99
            yield "                                        <span class=\"badge bg-danger rounded-pill px-3 py-2\">
                                            <i class=\"fas fa-toggle-off me-1\"></i> Inactive
                                        </span>
                                    ";
        }
        // line 103
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
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 114, $this->source); })()), "name", [], "any", false, false, false, 114), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-link text-primary me-2\"></i> Slug
                                    </div>
                                    <div class=\"info-value\">
                                        <code class=\"bg-light p-2 rounded\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 122, $this->source); })()), "slug", [], "any", false, false, false, 122), "html", null, true);
        yield "</code>
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-align-left text-primary me-2\"></i> Description
                                    </div>
                                    <div class=\"info-value\">
                                        ";
        // line 131
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 131)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 131, $this->source); })()), "description", [], "any", false, false, false, 131), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-sitemap text-primary me-2\"></i> Catégorie parente
                                    </div>
                                    <div class=\"info-value\">
                                        ";
        // line 140
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 140, $this->source); })()), "parent", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 141
            yield "                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 141, $this->source); })()), "parent", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141)]), "html", null, true);
            yield "\" 
                                               class=\"badge bg-info text-decoration-none\">
                                                <i class=\"fas fa-level-up-alt me-1\"></i> ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 143, $this->source); })()), "parent", [], "any", false, false, false, 143), "name", [], "any", false, false, false, 143), "html", null, true);
            yield "
                                            </a>
                                        ";
        } else {
            // line 146
            yield "                                            <span class=\"badge bg-secondary\">
                                                <i class=\"fas fa-folder me-1\"></i> Catégorie principale
                                            </span>
                                        ";
        }
        // line 150
        yield "                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-user text-primary me-2\"></i> Créateur
                                    </div>
                                    <div class=\"info-value\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "email", [], "any", false, false, false, 157), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-calendar-plus text-primary me-2\"></i> Créée le
                                    </div>
                                    <div class=\"info-value\">
                                        ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 165, $this->source); })()), "createdAt", [], "any", false, false, false, 165), "d/m/Y à H:i"), "html", null, true);
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-calendar-edit text-primary me-2\"></i> Modifiée le
                                    </div>
                                    <div class=\"info-value\">
                                        ";
        // line 174
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 174, $this->source); })()), "updatedAt", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 175, $this->source); })()), "updatedAt", [], "any", false, false, false, 175), "d/m/Y à H:i"), "html", null, true);
            yield "
                                        ";
        } else {
            // line 177
            yield "                                            <span class=\"text-muted\">Jamais modifiée</span>
                                        ";
        }
        // line 179
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
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 198, $this->source); })()), "products", [], "any", false, false, false, 198)), "html", null, true);
        yield "</div>
                        <div class=\"text-muted\">Produits dans cette catégorie</div>
                    </div>
                    
                    <hr class=\"my-4\">
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-primary\">
                                <i class=\"fas fa-box text-white\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 210, $this->source); })()), "products", [], "any", false, false, false, 210), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 210, $this->source); })()), "isActive", [], "any", false, false, false, 210); })), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Produits actifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-warning\">
                                <i class=\"fas fa-box text-dark\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 220, $this->source); })()), "products", [], "any", false, false, false, 220), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 220, $this->source); })()), "isActive", [], "any", false, false, false, 220); })), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Produits inactifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-info\">
                                <i class=\"fas fa-sitemap text-white\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 230, $this->source); })()), "children", [], "any", false, false, false, 230)), "html", null, true);
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
        // line 241
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 241, $this->source); })()), "parent", [], "any", false, false, false, 241)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 242
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 242, $this->source); })()), "parent", [], "any", false, false, false, 242), "children", [], "any", false, false, false, 242)), "html", null, true);
            yield "
                                    ";
        } else {
            // line 244
            yield "                                        0
                                    ";
        }
        // line 246
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
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 263, $this->source); })()), "id", [], "any", false, false, false, 263)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-warning btn-lg\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        
                        ";
        // line 268
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 268, $this->source); })()), "children", [], "any", false, false, false, 268)) > 0)) {
            // line 269
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 269, $this->source); })()), "id", [], "any", false, false, false, 269), "html", null, true);
            yield "\" 
                               class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir les sous-catégories
                            </a>
                        ";
        }
        // line 274
        yield "                        
                        ";
        // line 275
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 275, $this->source); })()), "parent", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 276
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 276, $this->source); })()), "parent", [], "any", false, false, false, 276), "id", [], "any", false, false, false, 276)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-level-up-alt me-2\"></i> Voir la catégorie parente
                            </a>
                        ";
        }
        // line 281
        yield "                        
                        <a href=\"#\" 
                           class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
                        </a>
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
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 298, $this->source); })()), "products", [], "any", false, false, false, 298)), "html", null, true);
        yield "</span>
            </h5>
            <a href=\"#\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter un produit
            </a>
        </div>
        
        <div class=\"card-body\">
            ";
        // line 306
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 306, $this->source); })()), "products", [], "any", false, false, false, 306)) > 0)) {
            // line 307
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle\">
                        <thead class=\"table-light\">
                            <tr>
                                <th width=\"80\">Image</th>
                                <th>Référence</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th>Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 321, $this->source); })()), "products", [], "any", false, false, false, 321));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 322
                yield "                                <tr class=\"product-row\">
                                    <td>
                                        ";
                // line 324
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 324)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 325
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 325))), "html", null, true);
                    yield "\" 
                                                 alt=\"";
                    // line 326
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 326), "html", null, true);
                    yield "\"
                                                 class=\"img-thumbnail\" 
                                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                                        ";
                } else {
                    // line 330
                    yield "                                            <div class=\"bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 60px; height: 60px;\">
                                                <i class=\"fas fa-box text-muted\"></i>
                                            </div>
                                        ";
                }
                // line 335
                yield "                                    </td>
                                    <td>
                                        <code class=\"bg-light p-1 rounded\">";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 337), "html", null, true);
                yield "</code>
                                    </td>
                                    <td>
                                        <strong>";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 340), "html", null, true);
                yield "</strong>
                                        <div class=\"text-muted small\">";
                // line 341
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 341)), "truncate", [50, "..."], "method", false, false, false, 341), "html", null, true);
                yield "</div>
                                    </td>
                                    <td>
                                        <span class=\"fw-bold text-primary\">";
                // line 344
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sellingPrice", [], "any", false, false, false, 344), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                                    </td>
                                    <td>
                                        ";
                // line 347
                $context["totalStock"] = 0;
                // line 348
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockBatches", [], "any", false, false, false, 348));
                foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                    // line 349
                    yield "                                            ";
                    $context["totalStock"] = ((isset($context["totalStock"]) || array_key_exists("totalStock", $context) ? $context["totalStock"] : (function () { throw new RuntimeError('Variable "totalStock" does not exist.', 349, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 349));
                    // line 350
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 351
                yield "                                        
                                        ";
                // line 352
                if (((isset($context["totalStock"]) || array_key_exists("totalStock", $context) ? $context["totalStock"] : (function () { throw new RuntimeError('Variable "totalStock" does not exist.', 352, $this->source); })()) > 10)) {
                    // line 353
                    yield "                                            <span class=\"badge bg-success rounded-pill\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalStock"]) || array_key_exists("totalStock", $context) ? $context["totalStock"] : (function () { throw new RuntimeError('Variable "totalStock" does not exist.', 353, $this->source); })()), "html", null, true);
                    yield " unités</span>
                                        ";
                } elseif ((                // line 354
(isset($context["totalStock"]) || array_key_exists("totalStock", $context) ? $context["totalStock"] : (function () { throw new RuntimeError('Variable "totalStock" does not exist.', 354, $this->source); })()) > 0)) {
                    // line 355
                    yield "                                            <span class=\"badge bg-warning rounded-pill\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalStock"]) || array_key_exists("totalStock", $context) ? $context["totalStock"] : (function () { throw new RuntimeError('Variable "totalStock" does not exist.', 355, $this->source); })()), "html", null, true);
                    yield " unités</span>
                                        ";
                } else {
                    // line 357
                    yield "                                            <span class=\"badge bg-danger rounded-pill\">Rupture</span>
                                        ";
                }
                // line 359
                yield "                                    </td>
                                    <td>
                                        ";
                // line 361
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 361)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 362
                    yield "                                            <span class=\"badge bg-success\">Actif</span>
                                        ";
                } else {
                    // line 364
                    yield "                                            <span class=\"badge bg-danger\">Inactif</span>
                                        ";
                }
                // line 366
                yield "                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"";
                // line 369
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_products_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 369)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-outline-info\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_products_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 373)]), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 381
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 385
            yield "                <div class=\"text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun produit dans cette catégorie</h5>
                    <p class=\"text-muted mb-4\">Commencez par ajouter des produits à cette catégorie</p>
                    <a href=\"#\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Ajouter un produit
                    </a>
                </div>
            ";
        }
        // line 394
        yield "        </div>
    </div>

    <!-- Liste des sous-catégories -->
    ";
        // line 398
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 398, $this->source); })()), "children", [], "any", false, false, false, 398)) > 0)) {
            // line 399
            yield "    <div class=\"card shadow-lg border-0 card-hover\">
        <div class=\"card-header bg-gradient-info text-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-sitemap me-2\"></i> 
                Sous-catégories 
                <span class=\"badge bg-light text-dark ms-2\">";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 404, $this->source); })()), "children", [], "any", false, false, false, 404)), "html", null, true);
            yield "</span>
            </h5>
            <a href=\"";
            // line 406
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 406, $this->source); })()), "id", [], "any", false, false, false, 406), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter une sous-catégorie
            </a>
        </div>
        
        <div class=\"card-body\">
            <div class=\"row\">
                ";
            // line 413
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 413, $this->source); })()), "children", [], "any", false, false, false, 413));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 414
                yield "                <div class=\"col-md-6 col-lg-4 mb-3\">
                    <div class=\"card border-0 bg-light h-100 card-hover-sm\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-start\">
                                ";
                // line 418
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 418)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 419
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 419))), "html", null, true);
                    yield "\" 
                                         alt=\"";
                    // line 420
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 420), "html", null, true);
                    yield "\"
                                         class=\"rounded me-3\"
                                         style=\"width: 60px; height: 60px; object-fit: cover;\">
                                ";
                } else {
                    // line 424
                    yield "                                    <div class=\"bg-secondary rounded d-flex align-items-center justify-content-center me-3\"
                                         style=\"width: 60px; height: 60px;\">
                                        <i class=\"fas fa-folder text-white\"></i>
                                    </div>
                                ";
                }
                // line 429
                yield "                                <div class=\"flex-grow-1\">
                                    <h6 class=\"mb-1\">";
                // line 430
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 430), "html", null, true);
                yield "</h6>
                                    <div class=\"d-flex align-items-center mb-2\">
                                        ";
                // line 432
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 432)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 433
                    yield "                                            <span class=\"badge bg-success me-2\">Active</span>
                                        ";
                } else {
                    // line 435
                    yield "                                            <span class=\"badge bg-danger me-2\">Inactive</span>
                                        ";
                }
                // line 437
                yield "                                        <span class=\"badge bg-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["child"], "products", [], "any", false, false, false, 437)), "html", null, true);
                yield " produits</span>
                                    </div>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
                // line 440
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 440)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-outline-info btn-sm\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 444
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 444)]), "html", null, true);
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
            // line 455
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 459
        yield "</div>

<!-- Modal de suppression -->
";
        // line 462
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 462, $this->source); })()), "products", [], "any", false, false, false, 462)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 462, $this->source); })()), "children", [], "any", false, false, false, 462)) == 0))) {
            // line 463
            yield "<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
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
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 481, $this->source); })()), "name", [], "any", false, false, false, 481), "html", null, true);
            yield "\"</strong> sera définitivement supprimée.
                    </div>
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"";
            // line 489
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 489, $this->source); })()), "id", [], "any", false, false, false, 489)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 490
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 490, $this->source); })()), "id", [], "any", false, false, false, 490))), "html", null, true);
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
        // line 500
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 503
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

        // line 504
        yield "<style>
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

/* Info grid */
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

/* Stats grid */
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

/* Product rows */
.product-row:hover {
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

/* Category image */
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

/* Breadcrumb */
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

/* Responsive */
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

    // line 735
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

        // line 736
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des cartes au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);

    // Observer les cartes
    document.querySelectorAll('.card-hover').forEach(card => {
        observer.observe(card);
    });

    // Animation pour les lignes de produits
    document.querySelectorAll('.product-row').forEach((row, index) => {
        row.style.animationDelay = `\${index * 0.05}s`;
        row.classList.add('fade-in-up');
    });

    // Gestion de la suppression
    const deleteButton = document.querySelector('[data-bs-target=\"#deleteCategoryModal\"]');
    if (deleteButton) {
        deleteButton.addEventListener('click', function() {
            // Animation de confirmation
            const modal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
            modal.show();
        });
    }

    // Effet de hover sur les statistiques
    const statItems = document.querySelectorAll('.stat-item');
    statItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
            this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
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
        return array (  1171 => 736,  1158 => 735,  918 => 504,  905 => 503,  893 => 500,  880 => 490,  876 => 489,  865 => 481,  845 => 463,  843 => 462,  838 => 459,  832 => 455,  815 => 444,  808 => 440,  801 => 437,  797 => 435,  793 => 433,  791 => 432,  786 => 430,  783 => 429,  776 => 424,  769 => 420,  764 => 419,  762 => 418,  756 => 414,  752 => 413,  740 => 406,  735 => 404,  728 => 399,  726 => 398,  720 => 394,  709 => 385,  703 => 381,  689 => 373,  682 => 369,  677 => 366,  673 => 364,  669 => 362,  667 => 361,  663 => 359,  659 => 357,  653 => 355,  651 => 354,  646 => 353,  644 => 352,  641 => 351,  635 => 350,  632 => 349,  627 => 348,  625 => 347,  619 => 344,  613 => 341,  609 => 340,  603 => 337,  599 => 335,  592 => 330,  585 => 326,  580 => 325,  578 => 324,  574 => 322,  570 => 321,  554 => 307,  552 => 306,  541 => 298,  522 => 281,  513 => 276,  511 => 275,  508 => 274,  497 => 269,  495 => 268,  487 => 263,  468 => 246,  464 => 244,  458 => 242,  456 => 241,  442 => 230,  429 => 220,  416 => 210,  401 => 198,  380 => 179,  376 => 177,  370 => 175,  368 => 174,  356 => 165,  345 => 157,  336 => 150,  330 => 146,  324 => 143,  318 => 141,  316 => 140,  304 => 131,  292 => 122,  281 => 114,  268 => 103,  262 => 99,  256 => 95,  254 => 94,  249 => 91,  242 => 86,  235 => 82,  230 => 81,  228 => 80,  216 => 71,  203 => 60,  193 => 56,  190 => 55,  186 => 54,  183 => 53,  173 => 49,  170 => 48,  166 => 47,  160 => 43,  151 => 36,  149 => 35,  143 => 32,  134 => 26,  127 => 22,  119 => 17,  112 => 13,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

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
                            <i class=\"fas fa-list-alt me-1\"></i> Catégories
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ category.name|u.truncate(20, '...') }}</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-folder me-2\"></i> {{ category.name }}
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Détails de la catégorie</p>
        </div>
        <div class=\"btn-group float-up\">
            <a href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\" class=\"btn btn-warning btn-hover-lift\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            {% if category.products|length == 0 and category.children|length == 0 %}
                <button type=\"button\" 
                        class=\"btn btn-danger btn-hover-lift\"
                        data-bs-toggle=\"modal\" 
                        data-bs-target=\"#deleteCategoryModal\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            {% endif %}
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
                        <span class=\"badge bg-light text-dark\">
                            ID: {{ category.id }}
                        </span>
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
                                            <a href=\"{{ path('app_admin_category_show', {'id': category.parent.id}) }}\" 
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
                        <div class=\"display-4 text-primary mb-1\">{{ category.products|length }}</div>
                        <div class=\"text-muted\">Produits dans cette catégorie</div>
                    </div>
                    
                    <hr class=\"my-4\">
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-primary\">
                                <i class=\"fas fa-box text-white\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">{{ category.products|filter(p => p.isActive)|length }}</div>
                                <div class=\"stat-label\">Produits actifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-warning\">
                                <i class=\"fas fa-box text-dark\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">{{ category.products|filter(p => not p.isActive)|length }}</div>
                                <div class=\"stat-label\">Produits inactifs</div>
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
                        <a href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\" 
                           class=\"btn btn-warning btn-lg\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        
                        {% if category.children|length > 0 %}
                            <a href=\"{{ path('app_admin_category_index') }}?parent={{ category.id }}\" 
                               class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir les sous-catégories
                            </a>
                        {% endif %}
                        
                        {% if category.parent %}
                            <a href=\"{{ path('app_admin_category_show', {'id': category.parent.id}) }}\" 
                               class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-level-up-alt me-2\"></i> Voir la catégorie parente
                            </a>
                        {% endif %}
                        
                        <a href=\"#\" 
                           class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
                        </a>
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
            <a href=\"#\" class=\"btn btn-light btn-sm\">
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
                                <th>Référence</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th>Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for product in category.products %}
                                <tr class=\"product-row\">
                                    <td>
                                        {% if product.image %}
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
                                    <td>
                                        <code class=\"bg-light p-1 rounded\">{{ product.reference }}</code>
                                    </td>
                                    <td>
                                        <strong>{{ product.name }}</strong>
                                        <div class=\"text-muted small\">{{ product.description|u.truncate(50, '...') }}</div>
                                    </td>
                                    <td>
                                        <span class=\"fw-bold text-primary\">{{ product.sellingPrice|number_format(0, ',', ' ') }} FCFA</span>
                                    </td>
                                    <td>
                                        {% set totalStock = 0 %}
                                        {% for batch in product.stockBatches %}
                                            {% set totalStock = totalStock + batch.currentQuantity %}
                                        {% endfor %}
                                        
                                        {% if totalStock > 10 %}
                                            <span class=\"badge bg-success rounded-pill\">{{ totalStock }} unités</span>
                                        {% elseif totalStock > 0 %}
                                            <span class=\"badge bg-warning rounded-pill\">{{ totalStock }} unités</span>
                                        {% else %}
                                            <span class=\"badge bg-danger rounded-pill\">Rupture</span>
                                        {% endif %}
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
                                            <a href=\"{{ path('app_admin_products_show', {'id': product.id}) }}\" 
                                               class=\"btn btn-outline-info\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"{{ path('app_admin_products_edit', {'id': product.id}) }}\" 
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
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun produit dans cette catégorie</h5>
                    <p class=\"text-muted mb-4\">Commencez par ajouter des produits à cette catégorie</p>
                    <a href=\"#\" class=\"btn btn-primary\">
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
                                        <a href=\"{{ path('app_admin_category_show', {'id': child.id}) }}\" 
                                           class=\"btn btn-outline-info btn-sm\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_category_edit', {'id': child.id}) }}\" 
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

<!-- Modal de suppression -->
{% if category.products|length == 0 and category.children|length == 0 %}
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
                <form action=\"{{ path('app_admin_category_delete', {'id': category.id}) }}\" method=\"post\" class=\"d-inline\">
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

{% endblock %}

{% block stylesheets %}
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

/* Info grid */
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

/* Stats grid */
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

/* Product rows */
.product-row:hover {
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

/* Category image */
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

/* Breadcrumb */
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

/* Responsive */
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des cartes au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);

    // Observer les cartes
    document.querySelectorAll('.card-hover').forEach(card => {
        observer.observe(card);
    });

    // Animation pour les lignes de produits
    document.querySelectorAll('.product-row').forEach((row, index) => {
        row.style.animationDelay = `\${index * 0.05}s`;
        row.classList.add('fade-in-up');
    });

    // Gestion de la suppression
    const deleteButton = document.querySelector('[data-bs-target=\"#deleteCategoryModal\"]');
    if (deleteButton) {
        deleteButton.addEventListener('click', function() {
            // Animation de confirmation
            const modal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
            modal.show();
        });
    }

    // Effet de hover sur les statistiques
    const statItems = document.querySelectorAll('.stat-item');
    statItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
            this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
    });
});
</script>
{% endblock %}", "admin/category/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\show.html.twig");
    }
}
