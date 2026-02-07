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

/* admin/category/index.html.twig */
class __TwigTemplate_601d213653c5d89a38e7fc4aa7d62615 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

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

        yield "Gestion des Catégories - HMA Market";
        
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
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-list-alt me-2\"></i>Gestion des Catégories
            </h1>
            <p class=\"text-muted\">Organisez vos produits par catégories et sous-catégories</p>
        </div>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle Catégorie
        </a>
    </div>

    <!-- Alertes -->
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["success"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["error"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "
    <!-- Statistiques -->
    ";
        // line 36
        $context["activeCategories"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 36, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 36, $this->source); })()), "isActive", [], "any", false, false, false, 36); }));
        // line 37
        yield "    ";
        $context["inactiveCategories"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 37, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 37, $this->source); })()), "isActive", [], "any", false, false, false, 37); }));
        // line 38
        yield "    ";
        $context["categoriesWithProducts"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 38, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 38, $this->source); })()), "products", [], "any", false, false, false, 38)) > 0); }));
        // line 39
        yield "    ";
        $context["mainCategories"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 39, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 39, $this->source); })()), "parent", [], "any", false, false, false, 39)); }));
        // line 40
        yield "    ";
        $context["subCategories"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 40, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 40, $this->source); })()), "parent", [], "any", false, false, false, 40)); }));
        // line 41
        yield "    
    <div class=\"row mb-4\">
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                Total Catégories
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-folder fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-success shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                Catégories Actives
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCategories"]) || array_key_exists("activeCategories", $context) ? $context["activeCategories"] : (function () { throw new RuntimeError('Variable "activeCategories" does not exist.', 69, $this->source); })()), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-check-circle fa-2x text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-info shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                Catégories Principales
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mainCategories"]) || array_key_exists("mainCategories", $context) ? $context["mainCategories"] : (function () { throw new RuntimeError('Variable "mainCategories" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-sitemap fa-2x text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                Sous-catégories
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subCategories"]) || array_key_exists("subCategories", $context) ? $context["subCategories"] : (function () { throw new RuntimeError('Variable "subCategories" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-folder-tree fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Barre de recherche et filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6 mb-3 mb-md-0\">
                    <form method=\"get\" class=\"d-flex\">
                        <input type=\"text\" 
                               name=\"search\" 
                               value=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 124, $this->source); })()), "html", null, true);
        yield "\" 
                               class=\"form-control me-2\" 
                               placeholder=\"Rechercher une catégorie...\">
                        <button type=\"submit\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                        ";
        // line 130
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 130, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
            yield "\" class=\"btn btn-outline-secondary ms-2\">
                                <i class=\"fas fa-times\"></i>
                            </a>
                        ";
        }
        // line 135
        yield "                    </form>
                </div>
                <div class=\"col-md-6 text-md-end\">
                    <div class=\"btn-group\" role=\"group\">
                        <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" 
                           class=\"btn btn-outline-secondary ";
        // line 140
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "query", [], "any", false, false, false, 140), "has", ["status"], "method", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
        yield "\">
                            Toutes
                        </a>
                        <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", ["status" => "active"]);
        yield "\" 
                           class=\"btn btn-outline-success\">
                            Actives
                        </a>
                        <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", ["status" => "inactive"]);
        yield "\" 
                           class=\"btn btn-outline-danger\">
                            Inactives
                        </a>
                        <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", ["type" => "main"]);
        yield "\" 
                           class=\"btn btn-outline-info\">
                            Principales
                        </a>
                        <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", ["type" => "sub"]);
        yield "\" 
                           class=\"btn btn-outline-warning\">
                            Sous-catégories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grille de cartes -->
    <div class=\"row\">
        ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 167, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 168
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
            <div class=\"card category-card shadow h-100\">
                <!-- Image -->
                <div class=\"category-image-container\">
                    ";
            // line 172
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 173
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 173))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 174), "html", null, true);
                yield "\"
                             class=\"card-img-top category-image\">
                    ";
            } else {
                // line 177
                yield "                        <div class=\"category-image-placeholder\">
                            <i class=\"fas fa-folder fa-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 181
            yield "                    
                    <!-- Badge statut -->
                    <div class=\"category-status-badge\">
                        ";
            // line 184
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 185
                yield "                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle me-1\"></i> Active
                            </span>
                        ";
            } else {
                // line 189
                yield "                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle me-1\"></i> Inactive
                            </span>
                        ";
            }
            // line 193
            yield "                    </div>
                </div>

                <!-- Contenu -->
                <div class=\"card-body\">
                    <h5 class=\"card-title text-truncate\">
                        ";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 199), "html", null, true);
            yield "
                        ";
            // line 200
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 201
                yield "                            <small class=\"text-muted d-block\">
                                <i class=\"fas fa-level-up-alt me-1\"></i>
                                ";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
                yield "
                            </small>
                        ";
            }
            // line 206
            yield "                    </h5>
                    
                    <p class=\"card-text text-muted small mb-3\">
                        ";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 209), "Aucune description")) : ("Aucune description"))), "truncate", [80, "..."], "method", false, false, false, 209), "html", null, true);
            yield "
                    </p>
                    
                    <div class=\"category-meta mb-3\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <i class=\"fas fa-box me-1 text-primary\"></i>
                                <small>";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 216)), "html", null, true);
            yield " produit(s)</small>
                            </div>
                            <div>
                                <i class=\"fas fa-sitemap me-1 text-info\"></i>
                                <small>";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 220)), "html", null, true);
            yield " sous-catégorie(s)</small>
                            </div>
                        </div>
                    </div>

                    <!-- Boutons d'action -->
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 227)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-info\" title=\"Voir détails\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        
                        <a href=\"";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 232)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        
                        <form method=\"post\" 
                              action=\"";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 238)]), "html", null, true);
            yield "\"
                              class=\"d-inline\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 240))), "html", null, true);
            yield "\">
                            <button type=\"submit\" 
                                    class=\"btn btn-sm ";
            // line 242
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "btn-outline-danger";
            } else {
                yield "btn-outline-success";
            }
            yield "\"
                                    title=\"";
            // line 243
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                ";
            // line 244
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 244)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 245
                yield "                                    <i class=\"fas fa-toggle-on\"></i>
                                ";
            } else {
                // line 247
                yield "                                    <i class=\"fas fa-toggle-off\"></i>
                                ";
            }
            // line 249
            yield "                            </button>
                        </form>
                        
                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-danger delete-category-btn\"
                                data-category-id=\"";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 254), "html", null, true);
            yield "\"
                                data-category-name=\"";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 255), "html", null, true);
            yield "\"
                                ";
            // line 256
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 256)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 256)) > 0))) {
                yield "disabled title=\"Impossible de supprimer (contient des produits ou sous-catégories)\"";
            } else {
                yield "title=\"Supprimer\"";
            }
            yield ">
                            <i class=\"fas fa-trash\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 263
        if (!$context['_iterated']) {
            // line 264
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-folder-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucune catégorie trouvée</h4>
                    ";
            // line 269
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 269, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 270
                yield "                        <p class=\"text-muted mb-3\">Aucun résultat pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 270, $this->source); })()), "html", null, true);
                yield "\"</p>
                        <a href=\"";
                // line 271
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
                yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-times me-1\"></i> Effacer la recherche
                        </a>
                    ";
            } else {
                // line 275
                yield "                        <p class=\"text-muted mb-3\">Commencez par créer votre première catégorie</p>
                        <a href=\"";
                // line 276
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
                yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus me-1\"></i> Créer une catégorie
                        </a>
                    ";
            }
            // line 280
            yield "                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 287
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 287, $this->source); })()) > 1)) {
            // line 288
            yield "    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center\">
                    <!-- Premier & Précédent -->
                    ";
            // line 293
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 293, $this->source); })()) > 1)) {
                // line 294
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "request", [], "any", false, false, false, 295), "query", [], "any", false, false, false, 295), "all", [], "any", false, false, false, 295), ["page" => 1])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-angle-double-left\"></i>
                            </a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "request", [], "any", false, false, false, 300), "query", [], "any", false, false, false, 300), "all", [], "any", false, false, false, 300), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 300, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 305
                yield "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-angle-double-left\"></i></span>
                        </li>
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-left\"></i></span>
                        </li>
                    ";
            }
            // line 312
            yield "
                    <!-- Pages numérotées -->
                    ";
            // line 314
            $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 314, $this->source); })()) - 2));
            // line 315
            yield "                    ";
            $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 315, $this->source); })()), ((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 315, $this->source); })()) + 4));
            // line 316
            yield "                    
                    ";
            // line 317
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 317, $this->source); })()) > 1)) {
                // line 318
                yield "                        <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                    ";
            }
            // line 320
            yield "                    
                    ";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 321, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 321, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 322
                yield "                        <li class=\"page-item ";
                if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 322, $this->source); })()))) {
                    yield "active";
                }
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 323, $this->source); })()), "request", [], "any", false, false, false, 323), "query", [], "any", false, false, false, 323), "all", [], "any", false, false, false, 323), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            yield "                    
                    ";
            // line 327
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 327, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 327, $this->source); })()))) {
                // line 328
                yield "                        <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                    ";
            }
            // line 330
            yield "
                    <!-- Suivant & Dernier -->
                    ";
            // line 332
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 332, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 332, $this->source); })()))) {
                // line 333
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "request", [], "any", false, false, false, 334), "query", [], "any", false, false, false, 334), "all", [], "any", false, false, false, 334), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 334, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 339
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 339, $this->source); })()), "request", [], "any", false, false, false, 339), "query", [], "any", false, false, false, 339), "all", [], "any", false, false, false, 339), ["page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 339, $this->source); })())])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-angle-double-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 344
                yield "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-right\"></i></span>
                        </li>
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-angle-double-right\"></i></span>
                        </li>
                    ";
            }
            // line 351
            yield "                </ul>
                
                <div class=\"text-center text-muted small mt-2\">
                    Page ";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 354, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 354, $this->source); })()), "html", null, true);
            yield " - 
                    Affichage de ";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 355, $this->source); })())), "html", null, true);
            yield " catégorie(s) sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 355, $this->source); })()), "html", null, true);
            yield " au total
                </div>
            </nav>
        </div>
    </div>
    ";
        }
        // line 361
        yield "</div>

<!-- Modal suppression -->
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteCategoryMessage\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteCategoryForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryCsrfToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
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

    // line 387
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

        // line 388
        yield "<style>
.category-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    border-radius: 12px;
    overflow: hidden;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
}

.category-image-container {
    position: relative;
    height: 180px;
    overflow: hidden;
}

.category-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.category-card:hover .category-image {
    transform: scale(1.05);
}

.category-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.category-status-badge {
    position: absolute;
    top: 10px;
    right: 10px;
}

.category-meta small {
    font-size: 0.8rem;
}

.btn-group-sm .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    border-radius: 6px;
}

.stat-card {
    border-radius: 10px;
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.pagination .page-item.active .page-link {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border-color: #667eea;
}

.btn-outline-secondary.active {
    background-color: #6c757d;
    color: white;
    border-color: #6c757d;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 466
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

        // line 467
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la suppression
    const deleteButtons = document.querySelectorAll('.delete-category-btn:not([disabled])');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteMessage = document.getElementById('deleteCategoryMessage');
    const deleteCsrfToken = document.getElementById('deleteCategoryCsrfToken');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>\"\${categoryName}\"</strong> ?</p>
                <p class=\"text-danger small\">Toutes les sous-catégories seront également supprimées.</p>
            `;
            
            deleteForm.action = `/admin/category/\${categoryId}`;
            
            // Utiliser la méthode Symfony pour générer un token
            // On utilise un token générique et on le validera côté serveur
            deleteCsrfToken.value = '";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        yield "';
            
            deleteModal.show();
        });
    });

    // Ou encore plus simple, utiliser une confirmation directe sans modal
    const directDeleteButtons = document.querySelectorAll('.delete-category-btn:not([disabled])');
    directDeleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            
            if (confirm(`Êtes-vous sûr de vouloir supprimer la catégorie \"\${categoryName}\" ?\\n\\nCette action est irréversible.`)) {
                // Créer un formulaire et le soumettre
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/admin/category/\${categoryId}`;
                form.style.display = 'none';
                
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = '";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        yield "';
                
                form.appendChild(csrfInput);
                document.body.appendChild(form);
                form.submit();
            }
        });
    });

    // Confirmation pour activation/désactivation
    const toggleButtons = document.querySelectorAll('form[action*=\"toggle-status\"] button[type=\"submit\"]');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const form = this.closest('form');
            const categoryCard = this.closest('.category-card');
            const categoryName = categoryCard.querySelector('.card-title').textContent.trim();
            const currentStatus = this.querySelector('i').classList.contains('fa-toggle-on');
            const action = currentStatus ? 'désactiver' : 'activer';
            
            if (!confirm(`Êtes-vous sûr de vouloir \${action} la catégorie \"\${categoryName}\" ?`)) {
                e.preventDefault();
            }
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
        return "admin/category/index.html.twig";
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
        return array (  927 => 517,  901 => 494,  872 => 467,  859 => 466,  772 => 388,  759 => 387,  724 => 361,  713 => 355,  707 => 354,  702 => 351,  693 => 344,  685 => 339,  677 => 334,  674 => 333,  672 => 332,  668 => 330,  664 => 328,  662 => 327,  659 => 326,  648 => 323,  641 => 322,  637 => 321,  634 => 320,  630 => 318,  628 => 317,  625 => 316,  622 => 315,  620 => 314,  616 => 312,  607 => 305,  599 => 300,  591 => 295,  588 => 294,  586 => 293,  579 => 288,  577 => 287,  572 => 284,  563 => 280,  556 => 276,  553 => 275,  546 => 271,  541 => 270,  539 => 269,  532 => 264,  530 => 263,  514 => 256,  510 => 255,  506 => 254,  499 => 249,  495 => 247,  491 => 245,  489 => 244,  485 => 243,  477 => 242,  472 => 240,  467 => 238,  458 => 232,  450 => 227,  440 => 220,  433 => 216,  423 => 209,  418 => 206,  412 => 203,  408 => 201,  406 => 200,  402 => 199,  394 => 193,  388 => 189,  382 => 185,  380 => 184,  375 => 181,  369 => 177,  363 => 174,  358 => 173,  356 => 172,  350 => 168,  345 => 167,  330 => 155,  323 => 151,  316 => 147,  309 => 143,  303 => 140,  299 => 139,  293 => 135,  285 => 131,  283 => 130,  274 => 124,  252 => 105,  231 => 87,  210 => 69,  189 => 51,  177 => 41,  174 => 40,  171 => 39,  168 => 38,  165 => 37,  163 => 36,  159 => 34,  149 => 30,  146 => 29,  142 => 28,  139 => 27,  129 => 23,  126 => 22,  122 => 21,  113 => 15,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Catégories - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-list-alt me-2\"></i>Gestion des Catégories
            </h1>
            <p class=\"text-muted\">Organisez vos produits par catégories et sous-catégories</p>
        </div>
        <a href=\"{{ path('app_admin_category_new') }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle Catégorie
        </a>
    </div>

    <!-- Alertes -->
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

    <!-- Statistiques -->
    {% set activeCategories = categories|filter(c => c.isActive)|length %}
    {% set inactiveCategories = categories|filter(c => not c.isActive)|length %}
    {% set categoriesWithProducts = categories|filter(c => c.products|length > 0)|length %}
    {% set mainCategories = categories|filter(c => c.parent is null)|length %}
    {% set subCategories = categories|filter(c => c.parent is not null)|length %}
    
    <div class=\"row mb-4\">
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                Total Catégories
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ totalItems }}</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-folder fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-success shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                Catégories Actives
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ activeCategories }}</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-check-circle fa-2x text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-info shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                Catégories Principales
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ mainCategories }}</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-sitemap fa-2x text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                Sous-catégories
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ subCategories }}</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-folder-tree fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Barre de recherche et filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6 mb-3 mb-md-0\">
                    <form method=\"get\" class=\"d-flex\">
                        <input type=\"text\" 
                               name=\"search\" 
                               value=\"{{ search }}\" 
                               class=\"form-control me-2\" 
                               placeholder=\"Rechercher une catégorie...\">
                        <button type=\"submit\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                        {% if search %}
                            <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary ms-2\">
                                <i class=\"fas fa-times\"></i>
                            </a>
                        {% endif %}
                    </form>
                </div>
                <div class=\"col-md-6 text-md-end\">
                    <div class=\"btn-group\" role=\"group\">
                        <a href=\"{{ path('app_admin_category_index') }}\" 
                           class=\"btn btn-outline-secondary {{ not app.request.query.has('status') ? 'active' : '' }}\">
                            Toutes
                        </a>
                        <a href=\"{{ path('app_admin_category_index', {status: 'active'}) }}\" 
                           class=\"btn btn-outline-success\">
                            Actives
                        </a>
                        <a href=\"{{ path('app_admin_category_index', {status: 'inactive'}) }}\" 
                           class=\"btn btn-outline-danger\">
                            Inactives
                        </a>
                        <a href=\"{{ path('app_admin_category_index', {type: 'main'}) }}\" 
                           class=\"btn btn-outline-info\">
                            Principales
                        </a>
                        <a href=\"{{ path('app_admin_category_index', {type: 'sub'}) }}\" 
                           class=\"btn btn-outline-warning\">
                            Sous-catégories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grille de cartes -->
    <div class=\"row\">
        {% for category in categories %}
        <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
            <div class=\"card category-card shadow h-100\">
                <!-- Image -->
                <div class=\"category-image-container\">
                    {% if category.image %}
                        <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\" 
                             alt=\"{{ category.name }}\"
                             class=\"card-img-top category-image\">
                    {% else %}
                        <div class=\"category-image-placeholder\">
                            <i class=\"fas fa-folder fa-4x text-muted\"></i>
                        </div>
                    {% endif %}
                    
                    <!-- Badge statut -->
                    <div class=\"category-status-badge\">
                        {% if category.isActive %}
                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle me-1\"></i> Active
                            </span>
                        {% else %}
                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle me-1\"></i> Inactive
                            </span>
                        {% endif %}
                    </div>
                </div>

                <!-- Contenu -->
                <div class=\"card-body\">
                    <h5 class=\"card-title text-truncate\">
                        {{ category.name }}
                        {% if category.parent %}
                            <small class=\"text-muted d-block\">
                                <i class=\"fas fa-level-up-alt me-1\"></i>
                                {{ category.parent.name }}
                            </small>
                        {% endif %}
                    </h5>
                    
                    <p class=\"card-text text-muted small mb-3\">
                        {{ category.description|default('Aucune description')|u.truncate(80, '...') }}
                    </p>
                    
                    <div class=\"category-meta mb-3\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <i class=\"fas fa-box me-1 text-primary\"></i>
                                <small>{{ category.products|length }} produit(s)</small>
                            </div>
                            <div>
                                <i class=\"fas fa-sitemap me-1 text-info\"></i>
                                <small>{{ category.children|length }} sous-catégorie(s)</small>
                            </div>
                        </div>
                    </div>

                    <!-- Boutons d'action -->
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\" 
                           class=\"btn btn-sm btn-outline-info\" title=\"Voir détails\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        
                        <a href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\" 
                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        
                        <form method=\"post\" 
                              action=\"{{ path('app_admin_category_toggle_status', {'id': category.id}) }}\"
                              class=\"d-inline\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status' ~ category.id) }}\">
                            <button type=\"submit\" 
                                    class=\"btn btn-sm {% if category.isActive %}btn-outline-danger{% else %}btn-outline-success{% endif %}\"
                                    title=\"{{ category.isActive ? 'Désactiver' : 'Activer' }}\">
                                {% if category.isActive %}
                                    <i class=\"fas fa-toggle-on\"></i>
                                {% else %}
                                    <i class=\"fas fa-toggle-off\"></i>
                                {% endif %}
                            </button>
                        </form>
                        
                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-danger delete-category-btn\"
                                data-category-id=\"{{ category.id }}\"
                                data-category-name=\"{{ category.name }}\"
                                {% if category.products|length > 0 or category.children|length > 0 %}disabled title=\"Impossible de supprimer (contient des produits ou sous-catégories)\"{% else %}title=\"Supprimer\"{% endif %}>
                            <i class=\"fas fa-trash\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-folder-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucune catégorie trouvée</h4>
                    {% if search %}
                        <p class=\"text-muted mb-3\">Aucun résultat pour \"{{ search }}\"</p>
                        <a href=\"{{ path('admin_categories_index') }}\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-times me-1\"></i> Effacer la recherche
                        </a>
                    {% else %}
                        <p class=\"text-muted mb-3\">Commencez par créer votre première catégorie</p>
                        <a href=\"{{ path('app_admin_category_new') }}\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus me-1\"></i> Créer une catégorie
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center\">
                    <!-- Premier & Précédent -->
                    {% if currentPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_category_index', app.request.query.all|merge({'page': 1})) }}\">
                                <i class=\"fas fa-angle-double-left\"></i>
                            </a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_category_index', app.request.query.all|merge({'page': currentPage - 1})) }}\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-angle-double-left\"></i></span>
                        </li>
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-left\"></i></span>
                        </li>
                    {% endif %}

                    <!-- Pages numérotées -->
                    {% set startPage = max(1, currentPage - 2) %}
                    {% set endPage = min(totalPages, startPage + 4) %}
                    
                    {% if startPage > 1 %}
                        <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                    {% endif %}
                    
                    {% for page in startPage..endPage %}
                        <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_category_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                        </li>
                    {% endfor %}
                    
                    {% if endPage < totalPages %}
                        <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                    {% endif %}

                    <!-- Suivant & Dernier -->
                    {% if currentPage < totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('admin_categories_index', app.request.query.all|merge({'page': currentPage + 1})) }}\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_category_index', app.request.query.all|merge({'page': totalPages})) }}\">
                                <i class=\"fas fa-angle-double-right\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-right\"></i></span>
                        </li>
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-angle-double-right\"></i></span>
                        </li>
                    {% endif %}
                </ul>
                
                <div class=\"text-center text-muted small mt-2\">
                    Page {{ currentPage }} sur {{ totalPages }} - 
                    Affichage de {{ categories|length }} catégorie(s) sur {{ totalItems }} au total
                </div>
            </nav>
        </div>
    </div>
    {% endif %}
</div>

<!-- Modal suppression -->
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteCategoryMessage\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteCategoryForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryCsrfToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block stylesheets %}
<style>
.category-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    border-radius: 12px;
    overflow: hidden;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
}

.category-image-container {
    position: relative;
    height: 180px;
    overflow: hidden;
}

.category-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.category-card:hover .category-image {
    transform: scale(1.05);
}

.category-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.category-status-badge {
    position: absolute;
    top: 10px;
    right: 10px;
}

.category-meta small {
    font-size: 0.8rem;
}

.btn-group-sm .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    border-radius: 6px;
}

.stat-card {
    border-radius: 10px;
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.pagination .page-item.active .page-link {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border-color: #667eea;
}

.btn-outline-secondary.active {
    background-color: #6c757d;
    color: white;
    border-color: #6c757d;
}
</style>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la suppression
    const deleteButtons = document.querySelectorAll('.delete-category-btn:not([disabled])');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteMessage = document.getElementById('deleteCategoryMessage');
    const deleteCsrfToken = document.getElementById('deleteCategoryCsrfToken');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>\"\${categoryName}\"</strong> ?</p>
                <p class=\"text-danger small\">Toutes les sous-catégories seront également supprimées.</p>
            `;
            
            deleteForm.action = `/admin/category/\${categoryId}`;
            
            // Utiliser la méthode Symfony pour générer un token
            // On utilise un token générique et on le validera côté serveur
            deleteCsrfToken.value = '{{ csrf_token(\"delete\") }}';
            
            deleteModal.show();
        });
    });

    // Ou encore plus simple, utiliser une confirmation directe sans modal
    const directDeleteButtons = document.querySelectorAll('.delete-category-btn:not([disabled])');
    directDeleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            
            if (confirm(`Êtes-vous sûr de vouloir supprimer la catégorie \"\${categoryName}\" ?\\n\\nCette action est irréversible.`)) {
                // Créer un formulaire et le soumettre
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/admin/category/\${categoryId}`;
                form.style.display = 'none';
                
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = '{{ csrf_token(\"delete\") }}';
                
                form.appendChild(csrfInput);
                document.body.appendChild(form);
                form.submit();
            }
        });
    });

    // Confirmation pour activation/désactivation
    const toggleButtons = document.querySelectorAll('form[action*=\"toggle-status\"] button[type=\"submit\"]');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const form = this.closest('form');
            const categoryCard = this.closest('.category-card');
            const categoryName = categoryCard.querySelector('.card-title').textContent.trim();
            const currentStatus = this.querySelector('i').classList.contains('fa-toggle-on');
            const action = currentStatus ? 'désactiver' : 'activer';
            
            if (!confirm(`Êtes-vous sûr de vouloir \${action} la catégorie \"\${categoryName}\" ?`)) {
                e.preventDefault();
            }
        });
    });
});
</script>
{% endblock %}", "admin/category/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\index.html.twig");
    }
}
