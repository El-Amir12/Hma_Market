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

/* admin/promotion/show.html.twig */
class __TwigTemplate_16e99f1defcd1609dcb9899acdb4c2b1 extends Template
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 17)]), "html", null, true);
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
    
    ";
        // line 167
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 168
            yield "        <!-- SECTION CATÉGORIES DE PLATS -->
        ";
            // line 169
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 169)) > 0)) {
                // line 170
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-utensils me-2\"></i>Catégories de plats concernées
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 174)), "html", null, true);
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
                // line 190
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 190));
                foreach ($context['_seq'] as $context["_key"] => $context["promoCategoryRecipe"]) {
                    // line 191
                    yield "                                ";
                    $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoCategoryRecipe"], "categoryRecipe", [], "any", false, false, false, 191);
                    // line 192
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 194
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 195
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 195))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 195), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 197
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-utensils fa-2x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 201
                    yield "                                    </td>
                                    <td>
                                        <strong>";
                    // line 203
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 203), "html", null, true);
                    yield "</strong>
                                        ";
                    // line 204
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 205
                        yield "                                            <small class=\"text-muted d-block\">(Sous-catégorie de ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 205), "name", [], "any", false, false, false, 205), "html", null, true);
                        yield ")</small>
                                        ";
                    }
                    // line 207
                    yield "                                    </td>
                                    <td class=\"text-muted\">";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 208)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 208), "-")) : ("-")), 0, 80), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 208)) > 80)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td>
                                        ";
                    // line 210
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 211
                        yield "                                            <span class=\"badge bg-info\">Niveau ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "hierarchyLevel", [], "any", false, false, false, 211), "html", null, true);
                        yield "</span>
                                        ";
                    } else {
                        // line 213
                        yield "                                            <span class=\"badge bg-secondary\">Catégorie principale</span>
                                        ";
                    }
                    // line 215
                    yield "                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-primary rounded-pill px-3 py-2\">";
                    // line 217
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 217)), "html", null, true);
                    yield "</span>
                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoCategoryRecipe'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 227
            yield "
        <!-- SECTION PLATS -->
        ";
            // line 229
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 229)) > 0)) {
                // line 230
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-hamburger me-2\"></i>Plats concernés
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 234)), "html", null, true);
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
                // line 250
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 250));
                foreach ($context['_seq'] as $context["_key"] => $context["promoRecipe"]) {
                    // line 251
                    yield "                                ";
                    $context["recipe"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoRecipe"], "recipe", [], "any", false, false, false, 251);
                    // line 252
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 254
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "image", [], "any", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 255
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "image", [], "any", false, false, false, 255))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 255), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 257
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-utensil-spoon fa-2x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 261
                    yield "                                    </td>
                                    <td><strong>";
                    // line 262
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 262), "html", null, true);
                    yield "</strong></td>
                                    <td class=\"text-muted\">";
                    // line 263
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", true, true, false, 263)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", false, false, false, 263), "-")) : ("-")), 0, 80), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", false, false, false, 263)) > 80)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td>";
                    // line 264
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 264), "name", [], "any", false, false, false, 264), "html", null, true)) : ("-"));
                    yield "</td>
                                    <td class=\"text-end fw-bold text-primary\">";
                    // line 265
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "sellingPrice", [], "any", false, false, false, 265), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 265), "hmaService", [], "any", false, false, false, 265)), "html", null, true);
                    yield "</td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoRecipe'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 268
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 274
            yield "
        <!-- Message si aucune sélection -->
        ";
            // line 276
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 276)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 276)) == 0))) {
                // line 277
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4 bg-light\">
            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-globe fa-4x text-primary mb-3\"></i>
                <h5 class=\"mb-2\">Promotion globale</h5>
                <p class=\"text-muted mb-0\">Cette promotion s'applique à tous les plats du menu</p>
            </div>
        </div>
        ";
            }
            // line 285
            yield "
    ";
        } else {
            // line 287
            yield "        <!-- SECTION CATÉGORIES (MARKET/PHARMACY) -->
        ";
            // line 288
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategories", [], "any", false, false, false, 288)) > 0)) {
                // line 289
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-folder-tree me-2\"></i>Catégories concernées
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategories", [], "any", false, false, false, 293)), "html", null, true);
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
                                <th class=\"text-white\" style=\"width: 120px\" class=\"text-center\">Nombre de produits</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 309
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategories", [], "any", false, false, false, 309));
                foreach ($context['_seq'] as $context["_key"] => $context["promoCategory"]) {
                    // line 310
                    yield "                                ";
                    $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoCategory"], "category", [], "any", false, false, false, 310);
                    // line 311
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 313
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 314
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 314))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 314), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 316
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-folder fa-2x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 320
                    yield "                                    </td>
                                    <td>
                                        <strong>";
                    // line 322
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 322), "html", null, true);
                    yield "</strong>
                                        ";
                    // line 323
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 324
                        yield "                                            <small class=\"text-muted d-block\">(Sous-catégorie de ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 324), "name", [], "any", false, false, false, 324), "html", null, true);
                        yield ")</small>
                                        ";
                    }
                    // line 326
                    yield "                                    </td>
                                    <td class=\"text-muted\">";
                    // line 327
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 327)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 327), "-")) : ("-")), 0, 80), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 327)) > 80)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td>
                                        ";
                    // line 329
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 330
                        yield "                                            <span class=\"badge bg-info\">Niveau ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "hierarchyLevel", [], "any", false, false, false, 330), "html", null, true);
                        yield "</span>
                                        ";
                    } else {
                        // line 332
                        yield "                                            <span class=\"badge bg-secondary\">Catégorie principale</span>
                                        ";
                    }
                    // line 334
                    yield "                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-primary rounded-pill px-3 py-2\">";
                    // line 336
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 336)), "html", null, true);
                    yield "</span>
                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoCategory'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 340
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 346
            yield "
        <!-- SECTION PRODUITS (MARKET/PHARMACY) -->
        ";
            // line 348
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionProducts", [], "any", false, false, false, 348)) > 0)) {
                // line 349
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-boxes me-2\"></i>Produits concernés
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionProducts", [], "any", false, false, false, 353)), "html", null, true);
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
                                <th class=\"text-white\">Code-barres</th>
                                <th class=\"text-white\">Description</th>
                                <th class=\"text-white\">Catégorie</th>
                                <th class=\"text-white text-center\">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 370
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionProducts", [], "any", false, false, false, 370));
                foreach ($context['_seq'] as $context["_key"] => $context["promoProduct"]) {
                    // line 371
                    yield "                                ";
                    $context["product"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoProduct"], "product", [], "any", false, false, false, 371);
                    // line 372
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 374
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 374) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 374) != "default-product.png"))) {
                        // line 375
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 375))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 375), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 377
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-box fa-2x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 381
                    yield "                                    </td>
                                    <td><strong>";
                    // line 382
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 382), "html", null, true);
                    yield "</strong></td>
                                    <td><code>";
                    // line 383
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 383), "html", null, true);
                    yield "</code></td>
                                    <td class=\"text-muted\">";
                    // line 384
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", true, true, false, 384)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 384), "-")) : ("-")), 0, 60), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 384)) > 60)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td>";
                    // line 385
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 385)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 385), "name", [], "any", false, false, false, 385), "html", null, true)) : ("-"));
                    yield "</td>
                                    <td class=\"text-center\">
                                        ";
                    // line 387
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 387) <= 0)) {
                        // line 388
                        yield "                                            <span class=\"badge bg-danger\">Rupture</span>
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 389
($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 389) <= CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 389))) {
                        // line 390
                        yield "                                            <span class=\"badge bg-warning text-dark\">Stock faible (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 390), "html", null, true);
                        yield ")</span>
                                        ";
                    } else {
                        // line 392
                        yield "                                            <span class=\"badge bg-success\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 392), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 392)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 392), "unités")) : ("unités")), "html", null, true);
                        yield "</span>
                                        ";
                    }
                    // line 394
                    yield "                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoProduct'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 397
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 403
            yield "
        <!-- Message si aucune sélection -->
        ";
            // line 405
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategories", [], "any", false, false, false, 405)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionProducts", [], "any", false, false, false, 405)) == 0))) {
                // line 406
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4 bg-light\">
            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-globe fa-4x text-primary mb-3\"></i>
                <h5 class=\"mb-2\">Promotion globale</h5>
                <p class=\"text-muted mb-0\">Cette promotion s'applique à tous les produits du catalogue</p>
            </div>
        </div>
        ";
            }
            // line 414
            yield "    ";
        }
        // line 415
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
        // line 428
        $context["hasCategories"] = (((($context["companyType"] ?? null) == "restaurant")) ? ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 428)) > 0)) : ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategories", [], "any", false, false, false, 428)) > 0)));
        // line 429
        yield "                        ";
        $context["hasItems"] = (((($context["companyType"] ?? null) == "restaurant")) ? ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 429)) > 0)) : ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionProducts", [], "any", false, false, false, 429)) > 0)));
        // line 430
        yield "                        
                        ";
        // line 431
        if (( !($context["hasCategories"] ?? null) &&  !($context["hasItems"] ?? null))) {
            // line 432
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 1 :</strong> Promotion sur <strong class=\"text-primary\">TOUS les ";
            if ((($context["companyType"] ?? null) == "restaurant")) {
                yield "plats";
            } else {
                yield "produits";
            }
            yield "</strong>
                        ";
        } elseif ((        // line 433
($context["hasCategories"] ?? null) &&  !($context["hasItems"] ?? null))) {
            // line 434
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 2 :</strong> Promotion sur les <strong class=\"text-primary\">catégories sélectionnées</strong> uniquement
                        ";
        } elseif (( !        // line 435
($context["hasCategories"] ?? null) && ($context["hasItems"] ?? null))) {
            // line 436
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 3 :</strong> Promotion sur les <strong class=\"text-primary\">";
            if ((($context["companyType"] ?? null) == "restaurant")) {
                yield "plats";
            } else {
                yield "produits";
            }
            yield " sélectionnés</strong> uniquement
                        ";
        } else {
            // line 438
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 4 :</strong> Promotion sur <strong class=\"text-primary\">l'ensemble</strong> (catégories + ";
            if ((($context["companyType"] ?? null) == "restaurant")) {
                yield "plats";
            } else {
                yield "produits";
            }
            yield " sélectionnés)
                        ";
        }
        // line 440
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
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 461), "html", null, true);
        yield "</strong><br>
                        Toutes les associations (catégories et ";
        // line 462
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "plats";
        } else {
            yield "produits";
        }
        yield ") seront également supprimées.
                    </div>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 467)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 468))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 477
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 628
        yield "
";
        // line 629
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield from [];
    }

    // line 477
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 478
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* Styles généraux */
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

    // line 629
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 630
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
        return "admin/promotion/show.html.twig";
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
        return array (  1107 => 630,  1100 => 629,  945 => 478,  938 => 477,  933 => 629,  930 => 628,  928 => 477,  916 => 468,  912 => 467,  900 => 462,  896 => 461,  873 => 440,  863 => 438,  853 => 436,  851 => 435,  848 => 434,  846 => 433,  837 => 432,  835 => 431,  832 => 430,  829 => 429,  827 => 428,  812 => 415,  809 => 414,  799 => 406,  797 => 405,  793 => 403,  785 => 397,  777 => 394,  769 => 392,  763 => 390,  761 => 389,  758 => 388,  756 => 387,  751 => 385,  744 => 384,  740 => 383,  736 => 382,  733 => 381,  727 => 377,  719 => 375,  717 => 374,  713 => 372,  710 => 371,  706 => 370,  686 => 353,  680 => 349,  678 => 348,  674 => 346,  666 => 340,  656 => 336,  652 => 334,  648 => 332,  642 => 330,  640 => 329,  632 => 327,  629 => 326,  623 => 324,  621 => 323,  617 => 322,  613 => 320,  607 => 316,  599 => 314,  597 => 313,  593 => 311,  590 => 310,  586 => 309,  567 => 293,  561 => 289,  559 => 288,  556 => 287,  552 => 285,  542 => 277,  540 => 276,  536 => 274,  528 => 268,  519 => 265,  515 => 264,  508 => 263,  504 => 262,  501 => 261,  495 => 257,  487 => 255,  485 => 254,  481 => 252,  478 => 251,  474 => 250,  455 => 234,  449 => 230,  447 => 229,  443 => 227,  435 => 221,  425 => 217,  421 => 215,  417 => 213,  411 => 211,  409 => 210,  401 => 208,  398 => 207,  392 => 205,  390 => 204,  386 => 203,  382 => 201,  376 => 197,  368 => 195,  366 => 194,  362 => 192,  359 => 191,  355 => 190,  336 => 174,  330 => 170,  328 => 169,  325 => 168,  323 => 167,  306 => 153,  301 => 151,  296 => 148,  290 => 144,  282 => 142,  280 => 141,  269 => 132,  265 => 130,  259 => 128,  257 => 127,  243 => 116,  229 => 105,  217 => 95,  211 => 93,  205 => 91,  203 => 90,  190 => 80,  168 => 60,  162 => 57,  158 => 55,  156 => 54,  151 => 52,  140 => 44,  136 => 43,  132 => 42,  129 => 41,  123 => 37,  117 => 34,  111 => 32,  109 => 31,  92 => 17,  85 => 13,  78 => 9,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\show.html.twig");
    }
}
