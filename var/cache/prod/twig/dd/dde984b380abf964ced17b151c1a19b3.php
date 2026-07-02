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
class __TwigTemplate_073805cf2a4fffaeb9667588a10d8572 extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " - Détails - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 18)), "truncate", [20, "..."], "method", false, false, false, 18), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 27), "html", null, true);
        yield "
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Détails de la catégorie de plats</p>
        </div>
        <div class=\"btn-group float-up\">
            <a href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 33)]), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 46));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 53));
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 77))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 78), "html", null, true);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 110), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-link text-primary me-2\"></i> Slug
                                    </div>
                                    <div class=\"info-value\">
                                        <code class=\"bg-light p-2 rounded\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 118), "html", null, true);
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
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 127)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 127), "Aucune description")) : ("Aucune description")), "html", null, true));
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" 
                                               class=\"badge bg-info text-decoration-none\">
                                                <i class=\"fas fa-level-up-alt me-1\"></i> ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "user", [], "any", false, false, false, 153), "email", [], "any", false, false, false, 153), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\">
                                        <i class=\"fas fa-calendar-plus text-primary me-2\"></i> Créée le
                                    </div>
                                    <div class=\"info-value\">
                                        ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "createdAt", [], "any", false, false, false, 161), "d/m/Y à H:i"), "html", null, true);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "updatedAt", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "updatedAt", [], "any", false, false, false, 171), "d/m/Y à H:i"), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 194)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 206), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return CoreExtension::getAttribute($this->env, $this->source, ($context["r"] ?? null), "isActive", [], "any", false, false, false, 206); })), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 216), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return  !CoreExtension::getAttribute($this->env, $this->source, ($context["r"] ?? null), "isActive", [], "any", false, false, false, 216); })), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 226)), "html", null, true);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 238
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 238), "children", [], "any", false, false, false, 238)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 259)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-warning btn-lg\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>

                        ";
        // line 264
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 265
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_category_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 265)]), "html", null, true);
            yield "\" 
                                class=\"btn btn-warning btn-lg\">
                                <i class=\"fas fa-percent me-1\"></i> Promotions
                            </a>
                        ";
        }
        // line 270
        yield "                        
                        ";
        // line 271
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 271)) > 0)) {
            // line 272
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 272), "html", null, true);
            yield "\" 
                               class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir les sous-catégories
                            </a>
                        ";
        }
        // line 277
        yield "                        
                        ";
        // line 278
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 278)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 279
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 279), "id", [], "any", false, false, false, 279)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-level-up-alt me-2\"></i> Voir la catégorie parente
                            </a>
                        ";
        }
        // line 284
        yield "                        
                        <a href=\"";
        // line 285
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 285), "html", null, true);
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
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 301)), "html", null, true);
        yield "</span>
            </h5>
            <a href=\"";
        // line 303
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 303), "html", null, true);
        yield "\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter un plat
            </a>
        </div>
        
        <div class=\"card-body\">
            ";
        // line 309
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 309)) > 0)) {
            // line 310
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
            // line 323
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 323));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 324
                yield "                                <tr class=\"recipe-row\">
                                    <td>
                                        ";
                // line 326
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 326)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 327
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 327))), "html", null, true);
                    yield "\" 
                                                 alt=\"";
                    // line 328
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 328), "html", null, true);
                    yield "\"
                                                 class=\"img-thumbnail\" 
                                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                                        ";
                } else {
                    // line 332
                    yield "                                            <div class=\"bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 60px; height: 60px;\">
                                                <i class=\"fas fa-utensils text-muted\"></i>
                                            </div>
                                        ";
                }
                // line 337
                yield "                                    </td>
                                    <td><strong>";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 338), "html", null, true);
                yield "</strong></td>
                                    <td>";
                // line 339
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 339)), "truncate", [50, "..."], "method", false, false, false, 339), "html", null, true);
                yield "</td>
                                    <td><span class=\"fw-bold text-primary\">";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "sellingPrice", [], "any", false, false, false, 340), 0, ",", " "), "html", null, true);
                yield " FCFA</span></td>
                                    <td>
                                        ";
                // line 342
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 342)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 343
                    yield "                                            <span class=\"badge bg-success\">Actif</span>
                                        ";
                } else {
                    // line 345
                    yield "                                            <span class=\"badge bg-danger\">Inactif</span>
                                        ";
                }
                // line 347
                yield "                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 350)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-outline-info\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
                // line 354
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 354)]), "html", null, true);
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
            // line 362
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 366
            yield "                <div class=\"text-center py-5\">
                    <i class=\"fas fa-utensils fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun plat dans cette catégorie</h5>
                    <p class=\"text-muted mb-4\">Commencez par ajouter des plats à cette catégorie</p>
                    <a href=\"";
            // line 370
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 370), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Ajouter un plat
                    </a>
                </div>
            ";
        }
        // line 375
        yield "        </div>
    </div>

    <!-- Liste des sous-catégories -->
    ";
        // line 379
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 379)) > 0)) {
            // line 380
            yield "    <div class=\"card shadow-lg border-0 card-hover\">
        <div class=\"card-header bg-gradient-info text-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-sitemap me-2\"></i> 
                Sous-catégories 
                <span class=\"badge bg-light text-dark ms-2\">";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 385)), "html", null, true);
            yield "</span>
            </h5>
            <a href=\"";
            // line 387
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_new");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 387), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter une sous-catégorie
            </a>
        </div>
        
        <div class=\"card-body\">
            <div class=\"row\">
                ";
            // line 394
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 394));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 395
                yield "                <div class=\"col-md-6 col-lg-4 mb-3\">
                    <div class=\"card border-0 bg-light h-100 card-hover-sm\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-start\">
                                ";
                // line 399
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 399)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 400
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 400))), "html", null, true);
                    yield "\" 
                                         alt=\"";
                    // line 401
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 401), "html", null, true);
                    yield "\"
                                         class=\"rounded me-3\"
                                         style=\"width: 60px; height: 60px; object-fit: cover;\">
                                ";
                } else {
                    // line 405
                    yield "                                    <div class=\"bg-secondary rounded d-flex align-items-center justify-content-center me-3\"
                                         style=\"width: 60px; height: 60px;\">
                                        <i class=\"fas fa-folder text-white\"></i>
                                    </div>
                                ";
                }
                // line 410
                yield "                                <div class=\"flex-grow-1\">
                                    <h6 class=\"mb-1\">";
                // line 411
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 411), "html", null, true);
                yield "</h6>
                                    <div class=\"d-flex align-items-center mb-2\">
                                        ";
                // line 413
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 413)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 414
                    yield "                                            <span class=\"badge bg-success me-2\">Active</span>
                                        ";
                } else {
                    // line 416
                    yield "                                            <span class=\"badge bg-danger me-2\">Inactive</span>
                                        ";
                }
                // line 418
                yield "                                        <span class=\"badge bg-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["child"], "recipes", [], "any", false, false, false, 418)), "html", null, true);
                yield " plats</span>
                                    </div>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
                // line 421
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 421)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-outline-info btn-sm\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 425
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 425)]), "html", null, true);
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
            // line 436
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 440
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
        yield from [];
    }

    // line 471
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 472
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
        yield from [];
    }

    // line 656
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 657
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
        // line 669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 669), "html", null, true);
        yield ";
            const name = \"";
        // line 670
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 670), "js"), "html", null, true);
        yield "\";
            const hasRecipes = ";
        // line 671
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 671)) > 0)) ? ("true") : ("false"));
        yield ";
            const hasChildren = ";
        // line 672
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 672)) > 0)) ? ("true") : ("false"));
        yield ";

            deleteForm.action = `/admin/category-recipe/\${id}`;
            deleteToken.value = '";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 675))), "html", null, true);
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
        return array (  1040 => 675,  1034 => 672,  1030 => 671,  1026 => 670,  1022 => 669,  1007 => 657,  1000 => 656,  812 => 472,  805 => 471,  771 => 440,  765 => 436,  748 => 425,  741 => 421,  734 => 418,  730 => 416,  726 => 414,  724 => 413,  719 => 411,  716 => 410,  709 => 405,  702 => 401,  697 => 400,  695 => 399,  689 => 395,  685 => 394,  673 => 387,  668 => 385,  661 => 380,  659 => 379,  653 => 375,  643 => 370,  637 => 366,  631 => 362,  617 => 354,  610 => 350,  605 => 347,  601 => 345,  597 => 343,  595 => 342,  590 => 340,  586 => 339,  582 => 338,  579 => 337,  572 => 332,  565 => 328,  560 => 327,  558 => 326,  554 => 324,  550 => 323,  535 => 310,  533 => 309,  522 => 303,  517 => 301,  496 => 285,  493 => 284,  484 => 279,  482 => 278,  479 => 277,  468 => 272,  466 => 271,  463 => 270,  454 => 265,  452 => 264,  444 => 259,  425 => 242,  421 => 240,  415 => 238,  413 => 237,  399 => 226,  386 => 216,  373 => 206,  358 => 194,  337 => 175,  333 => 173,  327 => 171,  325 => 170,  313 => 161,  302 => 153,  293 => 146,  287 => 142,  281 => 139,  275 => 137,  273 => 136,  261 => 127,  249 => 118,  238 => 110,  225 => 99,  219 => 95,  213 => 91,  211 => 90,  206 => 87,  199 => 82,  192 => 78,  187 => 77,  185 => 76,  166 => 59,  156 => 55,  153 => 54,  149 => 53,  146 => 52,  136 => 48,  133 => 47,  129 => 46,  113 => 33,  104 => 27,  97 => 23,  89 => 18,  82 => 14,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/category_recipe/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category_recipe\\show.html.twig");
    }
}
