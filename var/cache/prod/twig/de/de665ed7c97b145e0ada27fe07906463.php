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

/* admin/restaurant/promotion/show.html.twig */
class __TwigTemplate_6193b726b09c3ef7a3093067a9fc01c0 extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Promotion : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_index");
        yield "\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <h1 class=\"display-5 fw-bold mt-2\">
                <i class=\"fas fa-tag text-primary me-3\"></i>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"mt-2 mt-sm-0 d-flex gap-2\">
            <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <button type=\"button\" class=\"btn btn-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePromotionModal\">
                <i class=\"fas fa-trash-alt me-2\"></i> Supprimer
            </button>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne image -->
        <div class=\"col-lg-5 col-xl-4\">
            <div class=\"card shadow-sm border-0 rounded-4 overflow-hidden\">
                <div class=\"position-relative\">
                    ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 32))), "html", null, true);
            yield "\" 
                             class=\"card-img-top\" 
                             alt=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
            yield "\" 
                             style=\"object-fit: cover; height: 350px; width: 100%;\">
                    ";
        } else {
            // line 37
            yield "                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 350px;\">
                            <i class=\"fas fa-tag fa-8x text-muted opacity-25\"></i>
                        </div>
                    ";
        }
        // line 41
        yield "                    <div class=\"position-absolute top-0 end-0 p-3\">
                        <span class=\"badge ";
        // line 42
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " fs-6 px-3 py-2 shadow\">
                            <i class=\"fas ";
        // line 43
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                            ";
        // line 44
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                        <div>
                            <i class=\"far fa-calendar-alt me-1 text-muted\"></i>
                            <small class=\"text-muted\">Créée le ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 52), "d/m/Y à H:i"), "html", null, true);
        yield "</small>
                        </div>
                        ";
        // line 54
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 54) && (CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 54) != CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 54)))) {
            // line 55
            yield "                        <div>
                            <i class=\"far fa-edit me-1 text-muted\"></i>
                            <small class=\"text-muted\">Modifiée le ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 57), "d/m/Y à H:i"), "html", null, true);
            yield "</small>
                        </div>
                        ";
        }
        // line 60
        yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne informations -->
        <div class=\"col-lg-7 col-xl-8\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-body p-4 p-xl-5\">
                    <h3 class=\"card-title mb-4\">
                        <i class=\"fas fa-info-circle text-primary me-2\"></i>Détails de la promotion
                    </h3>
                    
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-layer-group text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Type de réduction</small>
                                </div>
                                <p class=\"fw-bold fs-4 mb-0\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-percent text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Valeur de la réduction</small>
                                </div>
                                <p class=\"fw-bold fs-2 text-primary mb-0\">
                                    ";
        // line 90
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90) == "Pourcentage")) {
            // line 91
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 91), "html", null, true);
            yield "%
                                    ";
        } else {
            // line 93
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 93), "hmaService", [], "any", false, false, false, 93)), "html", null, true);
            yield "
                                    ";
        }
        // line 95
        yield "                                </p>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-align-left text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Description</small>
                                </div>
                                <p class=\"mb-0\">
                                    ";
        // line 105
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", false, false, false, 105), "Aucune description fournie")) : ("Aucune description fournie")), "html", null, true));
        yield "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-check text-success me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de début</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "startDate", [], "any", false, false, false, 116), "d/m/Y"), "html", null, true);
        yield "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-times text-danger me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de fin</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    ";
        // line 127
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 128), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 130
            yield "                                        <span class=\"badge bg-info\">Sans limite</span>
                                    ";
        }
        // line 132
        yield "                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Informations de l'utilisateur créateur -->
                    <div class=\"mt-4 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                ";
        // line 141
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 141), "photo", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 142
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 142), "photo", [], "any", false, false, false, 142))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 142), "fullName", [], "any", false, false, false, 142), "html", null, true);
            yield "\" class=\"rounded-circle\" width=\"60\" height=\"60\" style=\"object-fit: cover;\">
                                ";
        } else {
            // line 144
            yield "                                    <div class=\"bg-secondary rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fas fa-user fa-2x text-white\"></i>
                                    </div>
                                ";
        }
        // line 148
        yield "                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créée par</small>
                                <p class=\"fw-bold mb-0\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 151), "fullName", [], "any", false, false, false, 151), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-envelope me-1\"></i> ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 153), "email", [], "any", false, false, false, 153), "html", null, true);
        yield "
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- TABLEAUX DES ASSOCIATIONS -->
    <!-- ========================================== -->
    
    <!-- SECTION CATÉGORIES DE PLATS -->
    ";
        // line 168
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 168)) > 0)) {
            // line 169
            yield "    <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
        <div class=\"card-header bg-gradient-primary text-white py-3\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-utensils me-2\"></i>Catégories de plats concernées
                <span class=\"badge bg-light text-dark ms-2\">";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 173)), "html", null, true);
            yield "</span>
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 80px\">Image</th>
                            <th class=\"text-white\">Nom</th>
                            <th class=\"text-white\">Description</th>
                            <th class=\"text-white\" style=\"width: 150px\">Hiérarchie</th>
                            <th class=\"text-white\" style=\"width: 120px\" class=\"text-center\">Nombre de plats</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 189));
            foreach ($context['_seq'] as $context["_key"] => $context["promoCategoryRecipe"]) {
                // line 190
                yield "                            ";
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoCategoryRecipe"], "categoryRecipe", [], "any", false, false, false, 190);
                // line 191
                yield "                            <tr>
                                <td>
                                    ";
                // line 193
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 194
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 194))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 194), "html", null, true);
                    yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                    ";
                } else {
                    // line 196
                    yield "                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                            <i class=\"fas fa-utensils fa-2x text-muted\"></i>
                                        </div>
                                    ";
                }
                // line 200
                yield "                                </td>
                                <td>
                                    <strong>";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 202), "html", null, true);
                yield "</strong>
                                    ";
                // line 203
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 204
                    yield "                                        <small class=\"text-muted d-block\">(Sous-catégorie de ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 204), "name", [], "any", false, false, false, 204), "html", null, true);
                    yield ")</small>
                                    ";
                }
                // line 206
                yield "                                </td>
                                <td class=\"text-muted\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 207)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 207), "-")) : ("-")), 0, 80), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 207)) > 80)) {
                    yield "...";
                }
                yield "</td>
                                <td>
                                    ";
                // line 209
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 210
                    yield "                                        <span class=\"badge bg-info\">Niveau ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "hierarchyLevel", [], "any", false, false, false, 210), "html", null, true);
                    yield "</span>
                                    ";
                } else {
                    // line 212
                    yield "                                        <span class=\"badge bg-secondary\">Catégorie principale</span>
                                    ";
                }
                // line 214
                yield "                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-primary rounded-pill px-3 py-2\">";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 216)), "html", null, true);
                yield "</span>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoCategoryRecipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        // line 226
        yield "
    <!-- SECTION PLATS -->
    ";
        // line 228
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 228)) > 0)) {
            // line 229
            yield "    <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
        <div class=\"card-header bg-gradient-primary text-white py-3\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-hamburger me-2\"></i>Plats concernés
                <span class=\"badge bg-light text-dark ms-2\">";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 233)), "html", null, true);
            yield "</span>
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 80px\">Image</th>
                            <th class=\"text-white\">Nom</th>
                            <th class=\"text-white\">Description</th>
                            <th class=\"text-white\">Catégorie</th>
                            <th class=\"text-white text-end\">Prix de vente</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 249));
            foreach ($context['_seq'] as $context["_key"] => $context["promoRecipe"]) {
                // line 250
                yield "                            ";
                $context["recipe"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoRecipe"], "recipe", [], "any", false, false, false, 250);
                // line 251
                yield "                            <tr>
                                <td>
                                    ";
                // line 253
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "image", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 254
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "image", [], "any", false, false, false, 254))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 254), "html", null, true);
                    yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                    ";
                } else {
                    // line 256
                    yield "                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                            <i class=\"fas fa-utensil-spoon fa-2x text-muted\"></i>
                                        </div>
                                    ";
                }
                // line 260
                yield "                                </td>
                                <td><strong>";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 261), "html", null, true);
                yield "</strong></td>
                                <td class=\"text-muted\">";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", true, true, false, 262)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", false, false, false, 262), "-")) : ("-")), 0, 80), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", false, false, false, 262)) > 80)) {
                    yield "...";
                }
                yield "</td>
                                <td>";
                // line 263
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 263)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 263), "name", [], "any", false, false, false, 263), "html", null, true)) : ("-"));
                yield "</td>
                                <td class=\"text-end fw-bold text-primary\">";
                // line 264
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "sellingPrice", [], "any", false, false, false, 264), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 264), "hmaService", [], "any", false, false, false, 264)), "html", null, true);
                yield "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoRecipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        // line 273
        yield "
    <!-- Message si aucune sélection -->
    ";
        // line 275
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 275)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 275)) == 0))) {
            // line 276
            yield "    <div class=\"card shadow-sm border-0 rounded-4 mt-4 bg-light\">
        <div class=\"card-body text-center py-5\">
            <i class=\"fas fa-globe fa-4x text-primary mb-3\"></i>
            <h5 class=\"mb-2\">Promotion globale</h5>
            <p class=\"text-muted mb-0\">Cette promotion s'applique à tous les plats du menu</p>
        </div>
    </div>
    ";
        }
        // line 284
        yield "
    <!-- Section récapitulative des cas -->
    <div class=\"card shadow-sm border-0 rounded-4 mt-4 bg-info bg-opacity-10\">
        <div class=\"card-body p-4\">
            <div class=\"d-flex flex-wrap align-items-center gap-3\">
                <div class=\"flex-shrink-0\">
                    <div class=\"rounded-circle bg-white p-3 d-flex align-items-center justify-content-center shadow-sm\" style=\"width: 60px; height: 60px;\">
                        <i class=\"fas fa-info-circle fa-2x text-info\"></i>
                    </div>
                </div>
                <div class=\"flex-grow-1\">
                    <h6 class=\"mb-2 fw-bold\">Comment s'applique cette promotion ?</h6>
                    <p class=\"mb-0\">
                        ";
        // line 297
        $context["hasCategories"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 297)) > 0);
        // line 298
        yield "                        ";
        $context["hasRecipes"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 298)) > 0);
        // line 299
        yield "                        
                        ";
        // line 300
        if (( !($context["hasCategories"] ?? null) &&  !($context["hasRecipes"] ?? null))) {
            // line 301
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 1 :</strong> Promotion sur <strong class=\"text-primary\">TOUS les plats</strong> du menu
                        ";
        } elseif ((        // line 302
($context["hasCategories"] ?? null) &&  !($context["hasRecipes"] ?? null))) {
            // line 303
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 2 :</strong> Promotion sur les <strong class=\"text-secondary\">catégories de plats sélectionnées</strong> uniquement
                        ";
        } elseif (( !        // line 304
($context["hasCategories"] ?? null) && ($context["hasRecipes"] ?? null))) {
            // line 305
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 3 :</strong> Promotion sur les <strong class=\"text-primary\">plats sélectionnés</strong> uniquement
                        ";
        } else {
            // line 307
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 4 :</strong> Promotion sur <strong class=\"text-primary\">l'ensemble</strong> (catégories + plats sélectionnés)
                        ";
        }
        // line 309
        yield "                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation pour la suppression de la promotion -->
    <div class=\"modal fade\" id=\"deletePromotionModal\" tabindex=\"-1\" aria-hidden=\"true\">
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
                    <h5>Êtes-vous sûr de vouloir supprimer cette promotion ?</h5>
                    <p class=\"text-muted\">Cette action est irréversible.</p>
                    <div class=\"alert alert-warning mt-3\">
                        <strong>";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 330), "html", null, true);
        yield "</strong><br>
                        Toutes les associations (catégories de plats et plats) seront également supprimées.
                    </div>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 336)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 337))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 346
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 496
        yield "
";
        // line 497
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield from [];
    }

    // line 346
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 347
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    .bg-gradient-light {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    
    /* Cartes d'informations */
    .info-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .info-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    
    /* Boutons */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }
    
    .btn-danger {
        transition: all 0.3s ease;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(220, 53, 69, 0.4);
    }
    
    /* Styles du tableau */
    .table {
        margin-bottom: 0;
    }
    
    .table th {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
        color: #ffffff !important;
        border: none;
        font-weight: 600;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 14px 12px;
        vertical-align: middle;
        white-space: nowrap;
    }
    
    .table td {
        vertical-align: middle;
        padding: 1rem 0.75rem;
        background-color: #ffffff;
        border-bottom: 1px solid #e9ecef;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
    }
    
    /* Card header */
    .card-header {
        border-bottom: none;
    }
    
    /* Badges */
    .bg-dark {
        background-color: #212529 !important;
    }
    
    .text-white {
        color: #ffffff !important;
    }
    
    /* Modal */
    .modal-content {
        border-radius: 1rem;
        border: none;
    }
    
    .modal-header {
        border-bottom: none;
    }
    
    .modal-footer {
        border-top: none;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .table th, .table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.75rem;
        }
        .table th {
            font-size: 0.7rem;
            letter-spacing: 0.5px;
        }
        .display-5 {
            font-size: 1.75rem;
        }
        .info-card .fs-2 {
            font-size: 1.5rem;
        }
        .info-card .fs-4 {
            font-size: 1.25rem;
        }
        .info-card .fs-5 {
            font-size: 0.9rem;
        }
        .btn-group {
            flex-wrap: wrap;
            gap: 0.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .display-5 {
            font-size: 1.5rem;
        }
        .info-card .fs-1 {
            font-size: 1.75rem;
        }
        .d-flex.gap-2 {
            flex-wrap: wrap;
        }
    }
</style>
";
        yield from [];
    }

    // line 497
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 498
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ajout d'un effet de tooltip sur les badges si besoin
        const stockBadges = document.querySelectorAll('.badge.bg-warning, .badge.bg-danger');
        stockBadges.forEach(badge => {
            if (badge.textContent.includes('Stock faible')) {
                badge.setAttribute('title', 'Le stock est inférieur au seuil d\\'alerte');
            }
            if (badge.textContent.includes('Rupture')) {
                badge.setAttribute('title', 'Produit en rupture de stock');
            }
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
        return "admin/restaurant/promotion/show.html.twig";
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
        return array (  817 => 498,  810 => 497,  656 => 347,  649 => 346,  644 => 497,  641 => 496,  639 => 346,  627 => 337,  623 => 336,  614 => 330,  591 => 309,  587 => 307,  583 => 305,  581 => 304,  578 => 303,  576 => 302,  573 => 301,  571 => 300,  568 => 299,  565 => 298,  563 => 297,  548 => 284,  538 => 276,  536 => 275,  532 => 273,  524 => 267,  515 => 264,  511 => 263,  504 => 262,  500 => 261,  497 => 260,  491 => 256,  483 => 254,  481 => 253,  477 => 251,  474 => 250,  470 => 249,  451 => 233,  445 => 229,  443 => 228,  439 => 226,  431 => 220,  421 => 216,  417 => 214,  413 => 212,  407 => 210,  405 => 209,  397 => 207,  394 => 206,  388 => 204,  386 => 203,  382 => 202,  378 => 200,  372 => 196,  364 => 194,  362 => 193,  358 => 191,  355 => 190,  351 => 189,  332 => 173,  326 => 169,  324 => 168,  306 => 153,  301 => 151,  296 => 148,  290 => 144,  282 => 142,  280 => 141,  269 => 132,  265 => 130,  259 => 128,  257 => 127,  243 => 116,  229 => 105,  217 => 95,  211 => 93,  205 => 91,  203 => 90,  190 => 80,  168 => 60,  162 => 57,  158 => 55,  156 => 54,  151 => 52,  140 => 44,  136 => 43,  132 => 42,  129 => 41,  123 => 37,  117 => 34,  111 => 32,  109 => 31,  92 => 17,  85 => 13,  78 => 9,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/restaurant/promotion/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\restaurant\\promotion\\show.html.twig");
    }
}
