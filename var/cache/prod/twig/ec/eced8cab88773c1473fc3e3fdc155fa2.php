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
class __TwigTemplate_f1d2a11b10693acb6c9c7dbb9ecef553 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " - Détails du plat - HMA Market";
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
                            <i class=\"fas fa-utensils me-1\"></i> Articles
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 18)), "truncate", [30, "..."], "method", false, false, false, 18), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 37));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 43));
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
                        <i class=\"fas fa-info-circle me-2\"></i> Informations de l'article
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <!-- Image (optionnelle) -->
                        <div class=\"col-md-4 text-center\">
                            ";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "image", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "image", [], "any", false, false, false, 64))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 65), "html", null, true);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "isActive", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "subscriptionActive", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 88), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"info-item\">
                                <div class=\"info-label\"><i class=\"fas fa-folder text-primary me-2\"></i> Catégorie</div>
                                <div class=\"info-value\">
                                    ";
        // line 93
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "                                        <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true);
            yield "</span>
                                        ";
            // line 95
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 95), "parent", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "                                            <small class=\"text-muted d-block mt-1\">
                                                <i class=\"fas fa-level-up-alt me-1\"></i> ";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 97), "parent", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "sellingPrice", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "hmaService", [], "any", false, false, false, 107)), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    ";
        // line 113
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 114
            yield "                    <div class=\"mt-4\">
                        <div class=\"info-label\"><i class=\"fas fa-align-left text-primary me-2\"></i> Description</div>
                        <div class=\"info-value bg-light p-3 rounded\">";
            // line 116
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", false, false, false, 116), "html", null, true));
            yield "</div>
                    </div>
                    ";
        }
        // line 119
        yield "
                    <!-- 🔥 Type de plat APRÈS la description -->
                    <div class=\"mt-4\">
                        <div class=\"info-label\"><i class=\"fas fa-tag text-primary me-2\"></i> Type d'article</div>
                        <div class=\"info-value\">
                            <span class=\"badge bg-primary\">
                                ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "type", [], "any", false, false, false, 125) == "food")) {
            // line 126
            yield "                                    🍽️ Plat principal
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["recipe"] ?? null), "type", [], "any", false, false, false, 127) == "starter")) {
            // line 128
            yield "                                    🥗 Entrée
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 129
($context["recipe"] ?? null), "type", [], "any", false, false, false, 129) == "dessert")) {
            // line 130
            yield "                                    🍰 Dessert
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 131
($context["recipe"] ?? null), "type", [], "any", false, false, false, 131) == "drink")) {
            // line 132
            yield "                                    🥤 Boisson
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 133
($context["recipe"] ?? null), "type", [], "any", false, false, false, 133) == "side")) {
            // line 134
            yield "                                    🍟 Accompagnement
                                ";
        } else {
            // line 136
            yield "                                    📋 Plat
                                ";
        }
        // line 138
        yield "                            </span>
                        </div>
                    </div>

                    <!-- Instructions -->
                    ";
        // line 143
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "instructions", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "                    <div class=\"mt-4\">
                        <div class=\"info-label\"><i class=\"fas fa-book-open text-primary me-2\"></i> Instructions</div>
                        <div class=\"info-value bg-light p-3 rounded\">";
            // line 146
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "instructions", [], "any", false, false, false, 146), "html", null, true));
            yield "</div>
                    </div>
                    ";
        }
        // line 149
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
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "createdAt", [], "any", false, false, false, 158), "d/m/Y à H:i"), "html", null, true);
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
        // line 167
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "updatedAt", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "updatedAt", [], "any", false, false, false, 167), "d/m/Y à H:i"), "html", null, true)) : ("Jamais modifié"));
        yield "</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Créateur avec photo -->
                        <div class=\"d-flex align-items-center mt-3 p-3 bg-light rounded\">
                            <div class=\"flex-shrink-0\">
                                ";
        // line 176
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "user", [], "any", false, false, false, 176), "photo", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 177
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "user", [], "any", false, false, false, 177), "photo", [], "any", false, false, false, 177))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "user", [], "any", false, false, false, 178), "fullName", [], "any", false, false, false, 178), "html", null, true);
            yield "\" 
                                         class=\"rounded-circle\"
                                         style=\"width: 50px; height: 50px; object-fit: cover;\">
                                ";
        } else {
            // line 182
            yield "                                    <div class=\"bg-secondary rounded-circle d-flex align-items-center justify-content-center text-white\"
                                         style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-user\"></i>
                                    </div>
                                ";
        }
        // line 187
        yield "                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted d-block\">Créé par</small>
                                <span class=\"fw-semibold\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "user", [], "any", false, false, false, 190), "fullName", [], "any", false, false, false, 190), "html", null, true);
        yield "</span>
                                <br>
                                <small class=\"text-muted\">";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "user", [], "any", false, false, false, 192), "email", [], "any", false, false, false, 192), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Boutons d'action principaux -->
            <div class=\"d-flex flex-wrap gap-2 mb-4\">
                <a href=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", false, false, false, 201)]), "html", null, true);
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
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "recipeItems", [], "any", false, false, false, 216)), "html", null, true);
        yield "</span>
                    </h5>
                    <a href=\"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", false, false, false, 218)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Modifier la liste
                    </a>
                </div>
                <div class=\"card-body\">
                    ";
        // line 223
        if ((array_key_exists("paginatedItems", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["paginatedItems"] ?? null)))) {
            // line 224
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
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["paginatedItems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 236
                yield "                                    <tr>
                                        <td style=\"width: 60px;\">
                                            ";
                // line 238
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 238), "image", [], "any", false, false, false, 238) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 238), "image", [], "any", false, false, false, 238) != "default-product.png"))) {
                    // line 239
                    yield "                                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 239), "image", [], "any", false, false, false, 239))), "html", null, true);
                    yield "\" 
                                                     alt=\"";
                    // line 240
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 240), "name", [], "any", false, false, false, 240), "html", null, true);
                    yield "\"
                                                     class=\"img-thumbnail\"
                                                     style=\"width: 50px; height: 50px; object-fit: cover;\">
                                            ";
                } else {
                    // line 244
                    yield "                                                <div class=\"bg-light d-flex align-items-center justify-content-center\"
                                                     style=\"width: 50px; height: 50px;\">
                                                    <i class=\"fas fa-box text-muted\"></i>
                                                </div>
                                            ";
                }
                // line 249
                yield "                                        </td>
                                        <td>
                                            <strong>";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 251), "name", [], "any", false, false, false, 251), "html", null, true);
                yield "</strong>
                                            <br>
                                            <small class=\"text-muted\">";
                // line 253
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 253), "unit", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 253), "unit", [], "any", false, false, false, 253), "pièce")) : ("pièce")), "html", null, true);
                yield "</small>
                                        </td>
                                        <td class=\"fw-bold\">";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 255), "html", null, true);
                yield "</td>
                                        <td>";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit", [], "any", false, false, false, 256), "html", null, true);
                yield "</td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            yield "                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        ";
            // line 264
            if ((($context["totalPages"] ?? null) > 1)) {
                // line 265
                yield "                        <nav aria-label=\"Pagination des ingrédients\" class=\"mt-3\">
                            <ul class=\"pagination pagination-sm justify-content-center\">
                                <li class=\"page-item ";
                // line 267
                yield (((($context["currentPage"] ?? null) <= 1)) ? ("disabled") : (""));
                yield "\">
                                    <a class=\"page-link\" href=\"";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", false, false, false, 268), "page" => (($context["currentPage"] ?? null) - 1)]), "html", null, true);
                yield "\">
                                        <i class=\"fas fa-chevron-left\"></i>
                                    </a>
                                </li>
                                ";
                // line 272
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 273
                    yield "                                    <li class=\"page-item ";
                    yield ((($context["i"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                    yield "\">
                                        <a class=\"page-link\" href=\"";
                    // line 274
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", false, false, false, 274), "page" => $context["i"]]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 277
                yield "                                <li class=\"page-item ";
                yield (((($context["currentPage"] ?? null) >= ($context["totalPages"] ?? null))) ? ("disabled") : (""));
                yield "\">
                                    <a class=\"page-link\" href=\"";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", false, false, false, 278), "page" => (($context["currentPage"] ?? null) + 1)]), "html", null, true);
                yield "\">
                                        <i class=\"fas fa-chevron-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        ";
            }
            // line 285
            yield "                    ";
        } else {
            // line 286
            yield "                        <div class=\"text-center py-5\">
                            <i class=\"fas fa-cup-straw fa-4x text-muted mb-3\"></i>
                            <p class=\"text-muted\">Aucun ingrédient dans ce plat</p>
                            <a href=\"";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", false, false, false, 289)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fas fa-plus me-1\"></i> Ajouter des ingrédients
                            </a>
                        </div>
                    ";
        }
        // line 294
        yield "                </div>
            </div>

            <!-- Boutons d'actions secondaires (à implémenter) -->
           <div class=\"d-flex flex-wrap gap-2 mt-4\">
                <a href=\"#\" class=\"btn btn-outline-info flex-fill\">
                    <i class=\"fas fa-exchange-alt me-2\"></i> Mouvements stock
                </a>
                ";
        // line 302
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 303
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", false, false, false, 303)]), "html", null, true);
            yield "\" 
                    class=\"btn btn-outline-warning flex-fill\">
                        <i class=\"fas fa-percent me-2\"></i> Promotions menu
                    </a>
                ";
        }
        // line 308
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
        yield from [];
    }

    // line 341
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 342
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
        yield from [];
    }

    // line 400
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 401
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
        // line 411
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "orderItems", [], "any", false, false, false, 411)) > 0)) ? ("true") : ("false"));
        yield ";
    const recipeName = \"";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 412), "js"), "html", null, true);
        yield "\";

    deleteForm.action = \"";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", false, false, false, 414)]), "html", null, true);
        yield "\";
    deleteToken.value = \"";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", false, false, false, 415))), "html", null, true);
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
        return array (  747 => 415,  743 => 414,  738 => 412,  734 => 411,  721 => 401,  714 => 400,  652 => 342,  645 => 341,  609 => 308,  600 => 303,  598 => 302,  588 => 294,  580 => 289,  575 => 286,  572 => 285,  562 => 278,  557 => 277,  546 => 274,  541 => 273,  537 => 272,  530 => 268,  526 => 267,  522 => 265,  520 => 264,  513 => 259,  504 => 256,  500 => 255,  495 => 253,  490 => 251,  486 => 249,  479 => 244,  472 => 240,  467 => 239,  465 => 238,  461 => 236,  457 => 235,  444 => 224,  442 => 223,  434 => 218,  429 => 216,  411 => 201,  399 => 192,  394 => 190,  389 => 187,  382 => 182,  375 => 178,  370 => 177,  368 => 176,  356 => 167,  344 => 158,  333 => 149,  327 => 146,  323 => 144,  321 => 143,  314 => 138,  310 => 136,  306 => 134,  304 => 133,  301 => 132,  299 => 131,  296 => 130,  294 => 129,  291 => 128,  289 => 127,  286 => 126,  284 => 125,  276 => 119,  270 => 116,  266 => 114,  264 => 113,  255 => 107,  249 => 103,  245 => 101,  242 => 100,  236 => 97,  233 => 96,  231 => 95,  226 => 94,  224 => 93,  216 => 88,  209 => 83,  205 => 81,  202 => 80,  198 => 78,  194 => 76,  192 => 75,  189 => 74,  182 => 69,  175 => 65,  170 => 64,  168 => 63,  152 => 49,  142 => 45,  139 => 44,  134 => 43,  124 => 39,  121 => 38,  117 => 37,  103 => 26,  96 => 22,  89 => 18,  82 => 14,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/recipe/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\recipe\\show.html.twig");
    }
}
