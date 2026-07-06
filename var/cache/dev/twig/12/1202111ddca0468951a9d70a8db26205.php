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
class __TwigTemplate_e2f9b21849d36c7ecc3865b5fd380982 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - Détails - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec navigation et actions -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Catégories de produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19)), "truncate", [20, "..."], "method", false, false, false, 19), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-tags me-2\"></i> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        yield "
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Détails de la catégorie de produits</p>
        </div>
        <div class=\"btn-group float-up\">
            <a href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
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
                        <!-- ✅ Badge de statut dans l'en-tête -->
                        <div>
                            ";
        // line 72
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 72, $this->source); })()), "isActive", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "                                <span class=\"badge bg-success me-2\">
                                    <i class=\"fas fa-check-circle me-1\"></i> Active
                                </span>
                            ";
        } else {
            // line 77
            yield "                                <span class=\"badge bg-danger me-2\">
                                    <i class=\"fas fa-times-circle me-1\"></i> Inactive
                                </span>
                            ";
        }
        // line 81
        yield "                            ";
        // line 82
        yield "                            ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 82, $this->source); })()) == "pharmacy")) {
            // line 83
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 83, $this->source); })()), "companyPublic", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 84
                yield "                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-eye me-1\"></i> Visible sur marketplace
                                    </span>
                                ";
            } else {
                // line 88
                yield "                                    <span class=\"badge bg-secondary\">
                                        <i class=\"fas fa-eye-slash me-1\"></i> Masquée sur marketplace
                                    </span>
                                ";
            }
            // line 92
            yield "                            ";
        }
        // line 93
        yield "                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <!-- Image de la catégorie -->
                        <div class=\"col-md-4 mb-4 mb-md-0\">
                            <div class=\"text-center\">
                                ";
        // line 101
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 101, $this->source); })()), "image", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 102, $this->source); })()), "image", [], "any", false, false, false, 102))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, false, 103), "html", null, true);
            yield "\"
                                         class=\"img-fluid rounded shadow-lg mb-3 category-image\"
                                         style=\"max-height: 200px; object-fit: cover;\">
                                ";
        } else {
            // line 107
            yield "                                    <div class=\"bg-gradient-primary rounded d-flex align-items-center justify-content-center mb-3 category-placeholder\"
                                         style=\"height: 200px;\">
                                        <i class=\"fas fa-folder fa-5x text-white\"></i>
                                    </div>
                                ";
        }
        // line 112
        yield "                            </div>
                        </div>

                        <!-- Détails -->
                        <div class=\"col-md-8\">
                            <div class=\"info-grid\">
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-tag text-primary me-2\"></i> Nom</div>
                                    <div class=\"info-value\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 120, $this->source); })()), "name", [], "any", false, false, false, 120), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-link text-primary me-2\"></i> Slug</div>
                                    <div class=\"info-value\"><code class=\"bg-light p-2 rounded\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 125, $this->source); })()), "slug", [], "any", false, false, false, 125), "html", null, true);
        yield "</code></div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-align-left text-primary me-2\"></i> Description</div>
                                    <div class=\"info-value\">";
        // line 130
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 130)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 130, $this->source); })()), "description", [], "any", false, false, false, 130), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "</div>
                                </div>
                                
                                <!-- ✅ Catégorie parente simplifiée -->
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-sitemap text-primary me-2\"></i> Catégorie parente</div>
                                    <div class=\"info-value\">
                                        ";
        // line 137
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 137, $this->source); })()), "parent", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 138
            yield "                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })()), "parent", [], "any", false, false, false, 138), "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" 
                                               class=\"text-decoration-none\">
                                                <span class=\"badge bg-primary\">
                                                    <i class=\"fas fa-level-up-alt me-1\"></i> ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 141, $this->source); })()), "parent", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141), "html", null, true);
            yield "
                                                </span>
                                            </a>
                                        ";
        } else {
            // line 145
            yield "                                            <span class=\"text-muted\">
                                                <i class=\"fas fa-folder me-1\"></i> Catégorie principale (aucune parente)
                                            </span>
                                        ";
        }
        // line 149
        yield "                                    </div>
                                </div>
                                
                                ";
        // line 152
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "user", [], "any", true, true, false, 152) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 152, $this->source); })()), "user", [], "any", false, false, false, 152))) {
            // line 153
            yield "                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-user text-primary me-2\"></i> Créateur</div>
                                    <div class=\"info-value\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "email", [], "any", false, false, false, 155), "html", null, true);
            yield "</div>
                                </div>
                                ";
        }
        // line 158
        yield "                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-calendar-plus text-primary me-2\"></i> Créée le</div>
                                    <div class=\"info-value\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 161, $this->source); })()), "createdAt", [], "any", false, false, false, 161), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-calendar-edit text-primary me-2\"></i> Modifiée le</div>
                                    <div class=\"info-value\">
                                        ";
        // line 167
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 167, $this->source); })()), "updatedAt", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 168, $this->source); })()), "updatedAt", [], "any", false, false, false, 168), "d/m/Y à H:i"), "html", null, true);
            yield "
                                        ";
        } else {
            // line 170
            yield "                                            <span class=\"text-muted\">Jamais modifiée</span>
                                        ";
        }
        // line 172
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
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 189, $this->source); })()), "products", [], "any", false, false, false, 189)), "html", null, true);
        yield "</div>
                        <div class=\"text-muted\">Produits dans cette catégorie</div>
                    </div>
                    
                    <hr>
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-primary\"><i class=\"fas fa-box text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 199, $this->source); })()), "products", [], "any", false, false, false, 199), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 199, $this->source); })()), "isActive", [], "any", false, false, false, 199); })), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Produits actifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-warning\"><i class=\"fas fa-box text-dark\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 207, $this->source); })()), "products", [], "any", false, false, false, 207), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 207, $this->source); })()), "isActive", [], "any", false, false, false, 207); })), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Produits inactifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-info\"><i class=\"fas fa-sitemap text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 215, $this->source); })()), "children", [], "any", false, false, false, 215)), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Sous-catégories</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-success\"><i class=\"fas fa-layer-group text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 223
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 223, $this->source); })()), "parent", [], "any", false, false, false, 223)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 223, $this->source); })()), "parent", [], "any", false, false, false, 223), "children", [], "any", false, false, false, 223)), "html", null, true)) : (0));
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
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 238, $this->source); })()), "id", [], "any", false, false, false, 238)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-lg\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        
                        ";
        // line 242
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 242, $this->source); })()), "children", [], "any", false, false, false, 242)) > 0)) {
            // line 243
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 243, $this->source); })()), "id", [], "any", false, false, false, 243), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir les sous-catégories
                            </a>
                        ";
        }
        // line 247
        yield "                        
                        ";
        // line 248
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 248, $this->source); })()), "parent", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 249
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 249, $this->source); })()), "parent", [], "any", false, false, false, 249), "id", [], "any", false, false, false, 249)]), "html", null, true);
            yield "\" class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-level-up-alt me-2\"></i> Voir la catégorie parente
                            </a>
                        ";
        }
        // line 253
        yield "                        
                        <a href=\"";
        // line 254
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 254, $this->source); })()), "id", [], "any", false, false, false, 254), "html", null, true);
        yield "\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
                        </a>
                        ";
        // line 257
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 257, $this->source); })()) != "restaurant")) {
            // line 258
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 258, $this->source); })()), "id", [], "any", false, false, false, 258)]), "html", null, true);
            yield "\" 
                                class=\"btn btn-outline-warning btn-lg\">
                                <i class=\"fas fa-percent me-2\"></i> Promotions
                            </a>
                        ";
        }
        // line 262
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
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 275, $this->source); })()), "products", [], "any", false, false, false, 275)), "html", null, true);
        yield "</span>
            </h5>
            <a href=\"";
        // line 277
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 277, $this->source); })()), "id", [], "any", false, false, false, 277), "html", null, true);
        yield "\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter un produit
            </a>
        </div>
        
        <div class=\"card-body\">
            ";
        // line 283
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 283, $this->source); })()), "products", [], "any", false, false, false, 283)) > 0)) {
            // line 284
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
            // line 299
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 299, $this->source); })()), "products", [], "any", false, false, false, 299));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 300
                yield "                                <tr class=\"product-row\">
                                    <td style=\"width: 70px;\">
                                        ";
                // line 302
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 302) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 302) != "default-product.png"))) {
                    // line 303
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 303))), "html", null, true);
                    yield "\" 
                                                 alt=\"";
                    // line 304
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 304), "html", null, true);
                    yield "\"
                                                 class=\"img-thumbnail\" 
                                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                                        ";
                } else {
                    // line 308
                    yield "                                            <div class=\"bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 60px; height: 60px;\">
                                                <i class=\"fas fa-box text-muted\"></i>
                                            </div>
                                        ";
                }
                // line 313
                yield "                                    </td>
                                    <td><strong>";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 314), "html", null, true);
                yield "</strong></td>
                                    <td>";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 315)), "truncate", [50, "..."], "method", false, false, false, 315), "html", null, true);
                yield "</td>
                                    <td><span class=\"fw-bold text-primary\">";
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 316), 0, ",", " "), "html", null, true);
                yield " FCFA</span></td>
                                    <td>
                                        ";
                // line 318
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 318))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 319
                    yield "                                            <span class=\"fw-bold text-success\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 319), 0, ",", " "), "html", null, true);
                    yield " FCFA</span>
                                        ";
                } else {
                    // line 321
                    yield "                                            <span class=\"text-muted\">-</span>
                                        ";
                }
                // line 323
                yield "                                    </td>
                                    <td>
                                        <span class=\"badge ";
                // line 325
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 325) <= CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 325))) ? ("bg-warning text-dark") : ("bg-info"));
                yield "\">
                                            ";
                // line 326
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 326), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 326)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 326), "")) : ("")), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column gap-1\">
                                            <span class=\"badge ";
                // line 331
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
                yield "\">
                                                ";
                // line 332
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
                yield "
                                            </span>
                                            ";
                // line 335
                yield "                                            ";
                if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 335, $this->source); })()) == "pharmacy")) {
                    // line 336
                    yield "                                                <span class=\"badge ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "companyPublic", [], "any", false, false, false, 336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-primary") : ("bg-secondary"));
                    yield "\" style=\"font-size: 9px;\">
                                                    <i class=\"fas ";
                    // line 337
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "companyPublic", [], "any", false, false, false, 337)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-eye") : ("fa-eye-slash"));
                    yield " me-1\"></i>
                                                    ";
                    // line 338
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "companyPublic", [], "any", false, false, false, 338)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Visible") : ("Masqué"));
                    yield "
                                                </span>
                                            ";
                }
                // line 341
                yield "                                        </div>
                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"";
                // line 345
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 345)]), "html", null, true);
                yield "\" class=\"btn btn-outline-info\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
                // line 348
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 348)]), "html", null, true);
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
            // line 355
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 359
            yield "                <div class=\"text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun produit dans cette catégorie</h5>
                    <p class=\"text-muted mb-4\">Commencez par ajouter des produits à cette catégorie</p>
                    <a href=\"";
            // line 363
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 363, $this->source); })()), "id", [], "any", false, false, false, 363), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Ajouter un produit
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
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
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
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 393))), "html", null, true);
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
                                    <div class=\"d-flex flex-wrap align-items-center gap-1 mb-2\">
                                        <span class=\"badge ";
                // line 406
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
                yield "\">
                                            ";
                // line 407
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 407)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
                yield "
                                        </span>
                                        <span class=\"badge bg-primary\">";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["child"], "products", [], "any", false, false, false, 409)), "html", null, true);
                yield " produits</span>
                                        ";
                // line 411
                yield "                                        ";
                if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 411, $this->source); })()) == "pharmacy")) {
                    // line 412
                    yield "                                            <span class=\"badge ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "companyPublic", [], "any", false, false, false, 412)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-primary") : ("bg-secondary"));
                    yield "\" style=\"font-size: 9px;\">
                                                <i class=\"fas ";
                    // line 413
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "companyPublic", [], "any", false, false, false, 413)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-eye") : ("fa-eye-slash"));
                    yield " me-1\"></i>
                                                ";
                    // line 414
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "companyPublic", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Visible") : ("Masquée"));
                    yield "
                                            </span>
                                        ";
                }
                // line 417
                yield "                                    </div>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
                // line 419
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 419)]), "html", null, true);
                yield "\" class=\"btn btn-outline-info\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 422)]), "html", null, true);
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
            // line 432
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 436
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
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 450, $this->source); })()), "name", [], "any", false, false, false, 450), "html", null, true);
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

    // line 479
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

        // line 480
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

    // line 529
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

        // line 530
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
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 544, $this->source); })()), "name", [], "any", false, false, false, 544), "js"), "html", null, true);
        yield "\";
    const hasProducts = ";
        // line 545
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 545, $this->source); })()), "products", [], "any", false, false, false, 545)) > 0)) ? ("true") : ("false"));
        yield ";
    const hasChildren = ";
        // line 546
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 546, $this->source); })()), "children", [], "any", false, false, false, 546)) > 0)) ? ("true") : ("false"));
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
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 580, $this->source); })()), "id", [], "any", false, false, false, 580), "html", null, true);
        yield "`;
            deleteToken.value = '";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 581, $this->source); })()), "id", [], "any", false, false, false, 581))), "html", null, true);
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
        return array (  1055 => 581,  1051 => 580,  1014 => 546,  1010 => 545,  1006 => 544,  989 => 530,  976 => 529,  917 => 480,  904 => 479,  865 => 450,  849 => 436,  843 => 432,  827 => 422,  821 => 419,  817 => 417,  811 => 414,  807 => 413,  802 => 412,  799 => 411,  795 => 409,  790 => 407,  786 => 406,  781 => 404,  778 => 403,  771 => 398,  764 => 394,  759 => 393,  757 => 392,  751 => 388,  747 => 387,  735 => 380,  730 => 378,  723 => 373,  721 => 372,  715 => 368,  705 => 363,  699 => 359,  693 => 355,  680 => 348,  674 => 345,  668 => 341,  662 => 338,  658 => 337,  653 => 336,  650 => 335,  645 => 332,  641 => 331,  631 => 326,  627 => 325,  623 => 323,  619 => 321,  613 => 319,  611 => 318,  606 => 316,  602 => 315,  598 => 314,  595 => 313,  588 => 308,  581 => 304,  576 => 303,  574 => 302,  570 => 300,  566 => 299,  549 => 284,  547 => 283,  536 => 277,  531 => 275,  516 => 262,  507 => 258,  505 => 257,  497 => 254,  494 => 253,  486 => 249,  484 => 248,  481 => 247,  471 => 243,  469 => 242,  462 => 238,  444 => 223,  433 => 215,  422 => 207,  411 => 199,  398 => 189,  379 => 172,  375 => 170,  369 => 168,  367 => 167,  358 => 161,  353 => 158,  347 => 155,  343 => 153,  341 => 152,  336 => 149,  330 => 145,  323 => 141,  316 => 138,  314 => 137,  304 => 130,  296 => 125,  288 => 120,  278 => 112,  271 => 107,  264 => 103,  259 => 102,  257 => 101,  247 => 93,  244 => 92,  238 => 88,  232 => 84,  229 => 83,  226 => 82,  224 => 81,  218 => 77,  212 => 73,  210 => 72,  196 => 60,  186 => 56,  183 => 55,  179 => 54,  176 => 53,  166 => 49,  163 => 48,  159 => 47,  143 => 34,  134 => 28,  127 => 24,  119 => 19,  112 => 15,  103 => 8,  90 => 7,  66 => 5,  43 => 3,);
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
                        <!-- ✅ Badge de statut dans l'en-tête -->
                        <div>
                            {% if category.isActive %}
                                <span class=\"badge bg-success me-2\">
                                    <i class=\"fas fa-check-circle me-1\"></i> Active
                                </span>
                            {% else %}
                                <span class=\"badge bg-danger me-2\">
                                    <i class=\"fas fa-times-circle me-1\"></i> Inactive
                                </span>
                            {% endif %}
                            {# ✅ Badge de visibilité (pour les pharmacies) #}
                            {% if companyType == 'pharmacy' %}
                                {% if category.companyPublic %}
                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-eye me-1\"></i> Visible sur marketplace
                                    </span>
                                {% else %}
                                    <span class=\"badge bg-secondary\">
                                        <i class=\"fas fa-eye-slash me-1\"></i> Masquée sur marketplace
                                    </span>
                                {% endif %}
                            {% endif %}
                        </div>
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
                                
                                <!-- ✅ Catégorie parente simplifiée -->
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-sitemap text-primary me-2\"></i> Catégorie parente</div>
                                    <div class=\"info-value\">
                                        {% if category.parent %}
                                            <a href=\"{{ path('app_admin_category_show', {'id': category.parent.id}) }}\" 
                                               class=\"text-decoration-none\">
                                                <span class=\"badge bg-primary\">
                                                    <i class=\"fas fa-level-up-alt me-1\"></i> {{ category.parent.name }}
                                                </span>
                                            </a>
                                        {% else %}
                                            <span class=\"text-muted\">
                                                <i class=\"fas fa-folder me-1\"></i> Catégorie principale (aucune parente)
                                            </span>
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
                                class=\"btn btn-outline-warning btn-lg\">
                                <i class=\"fas fa-percent me-2\"></i> Promotions
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
                                        <div class=\"d-flex flex-column gap-1\">
                                            <span class=\"badge {{ product.isActive ? 'bg-success' : 'bg-danger' }}\">
                                                {{ product.isActive ? 'Actif' : 'Inactif' }}
                                            </span>
                                            {# ✅ Badge de visibilité pour les produits (pharmacies) #}
                                            {% if companyType == 'pharmacy' %}
                                                <span class=\"badge {{ product.companyPublic ? 'bg-primary' : 'bg-secondary' }}\" style=\"font-size: 9px;\">
                                                    <i class=\"fas {{ product.companyPublic ? 'fa-eye' : 'fa-eye-slash' }} me-1\"></i>
                                                    {{ product.companyPublic ? 'Visible' : 'Masqué' }}
                                                </span>
                                            {% endif %}
                                        </div>
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
                                    <div class=\"d-flex flex-wrap align-items-center gap-1 mb-2\">
                                        <span class=\"badge {{ child.isActive ? 'bg-success' : 'bg-danger' }}\">
                                            {{ child.isActive ? 'Active' : 'Inactive' }}
                                        </span>
                                        <span class=\"badge bg-primary\">{{ child.products|length }} produits</span>
                                        {# ✅ Badge de visibilité pour les sous-catégories (pharmacies) #}
                                        {% if companyType == 'pharmacy' %}
                                            <span class=\"badge {{ child.companyPublic ? 'bg-primary' : 'bg-secondary' }}\" style=\"font-size: 9px;\">
                                                <i class=\"fas {{ child.companyPublic ? 'fa-eye' : 'fa-eye-slash' }} me-1\"></i>
                                                {{ child.companyPublic ? 'Visible' : 'Masquée' }}
                                            </span>
                                        {% endif %}
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
