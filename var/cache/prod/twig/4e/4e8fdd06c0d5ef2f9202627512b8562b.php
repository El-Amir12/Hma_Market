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

/* admin/promotion/product/show.html.twig */
class __TwigTemplate_214683e0bbf44cf221dc5de3c2f5d3bf extends Template
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
        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Promotion ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - Produit ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_product_index");
        yield "\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <h1 class=\"display-5 fw-bold mt-2\">
                <i class=\"fas fa-tag text-primary me-3\"></i>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "
                <span class=\"fs-4 text-muted mx-2\">→</span>
                <i class=\"fas fa-box text-info me-2\"></i>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"mt-2 mt-sm-0 d-flex gap-2\">
            <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-edit me-2\"></i> Modifier la promotion
            </a>
            <button type=\"button\" class=\"btn btn-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                <i class=\"fas fa-trash-alt me-2\"></i> Supprimer l'association
            </button>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Informations de la promotion -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-tag me-2\"></i>Informations de la promotion
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 41))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 41), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 43
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 150px;\">
                            <i class=\"fas fa-tag fa-4x text-muted\"></i>
                        </div>
                    ";
        }
        // line 47
        yield "                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-layer-group text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Type de réduction</small>
                        </div>
                        <p class=\"fw-bold fs-4 mb-0\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-percent text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Valeur de la réduction</small>
                        </div>
                        <p class=\"fw-bold fs-1 text-primary mb-0\">
                            ";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62) == "Pourcentage")) {
            // line 63
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 63), "html", null, true);
            yield "%
                            ";
        } else {
            // line 65
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 65), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 65), "hmaService", [], "any", false, false, false, 65)), "html", null, true);
            yield "
                            ";
        }
        // line 67
        yield "                        </p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-align-left text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Description</small>
                        </div>
                        <p class=\"mb-0\">";
        // line 75
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", false, false, false, 75), "Aucune description fournie")) : ("Aucune description fournie")), "html", null, true));
        yield "</p>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-check text-success me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de début</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "startDate", [], "any", false, false, false, 85), "d/m/Y"), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-times text-danger me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de fin</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    ";
        // line 95
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 96), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 98
            yield "                                        <span class=\"badge bg-info\">Sans limite</span>
                                    ";
        }
        // line 100
        yield "                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge ";
        // line 108
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " fs-6 px-3 py-2\">
                                    <i class=\"fas ";
        // line 109
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                                    ";
        // line 110
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créée le ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 114), "d/m/Y à H:i"), "html", null, true);
        yield "</small>
                                ";
        // line 115
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 115) && (CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 115) != CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 115)))) {
            // line 116
            yield "                                    <br><small class=\"text-muted\">Modifiée le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 116), "d/m/Y à H:i"), "html", null, true);
            yield "</small>
                                ";
        }
        // line 118
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Informations du produit -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-box me-2\"></i>Informations du produit
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 134
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 134) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 134) != "default-product.png"))) {
            // line 135
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 135))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 135), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 137
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 150px;\">
                            <i class=\"fas fa-box fa-4x text-muted\"></i>
                        </div>
                    ";
        }
        // line 141
        yield "                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-tag text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Nom</small>
                        </div>
                        <p class=\"fw-bold fs-4 mb-0\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 147), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-barcode text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Code-barres</small>
                        </div>
                        <p class=\"fw-bold fs-5 mb-0\"><code>";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 155), "html", null, true);
        yield "</code></p>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-folder-tree text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Catégorie</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">";
        // line 165
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 165), "name", [], "any", false, false, false, 165), "html", null, true)) : ("-"));
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-weight-hanging text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Unité</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 174), "Pièce")) : ("Pièce")), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row g-3 mt-2\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-arrow-down text-success me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Prix d'achat</small>
                                </div>
                                <p class=\"fw-bold fs-4 text-success mb-0\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 186), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 186), "hmaService", [], "any", false, false, false, 186)), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-arrow-up text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Prix de vente</small>
                                </div>
                                <p class=\"fw-bold fs-4 text-primary mb-0\">";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 195), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 195), "hmaService", [], "any", false, false, false, 195)), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mt-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-chart-line text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Marge</small>
                        </div>
                        <p class=\"fw-bold fs-5 mb-0\">
                            ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "margin", [], "any", false, false, false, 206), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 206), "hmaService", [], "any", false, false, false, 206)), "html", null, true);
        yield "
                            <span class=\"badge ";
        // line 207
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "marginPercentage", [], "any", false, false, false, 207) >= 50)) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "marginPercentage", [], "any", false, false, false, 207) >= 20)) ? ("bg-warning text-dark") : ("bg-danger"))));
        yield " ms-2\">
                                ";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "marginPercentage", [], "any", false, false, false, 208), 1), "html", null, true);
        yield "%
                            </span>
                        </p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mt-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-boxes text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Stock</small>
                        </div>
                        <p class=\"fw-bold fs-5 mb-0\">
                            ";
        // line 219
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 219) <= 0)) {
            // line 220
            yield "                                <span class=\"badge bg-danger\">Rupture de stock</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 221
($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 221) <= CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 221))) {
            // line 222
            yield "                                <span class=\"badge bg-warning text-dark\">Stock faible (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 222), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 222)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 222), "unités")) : ("unités")), "html", null, true);
            yield ")</span>
                            ";
        } else {
            // line 224
            yield "                                <span class=\"badge bg-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 224), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 224)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 224), "unités")) : ("unités")), "html", null, true);
            yield "</span>
                            ";
        }
        // line 226
        yield "                        </p>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                ";
        // line 232
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "user", [], "any", false, false, false, 232), "photo", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 233
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "user", [], "any", false, false, false, 233), "photo", [], "any", false, false, false, 233))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "user", [], "any", false, false, false, 233), "fullName", [], "any", false, false, false, 233), "html", null, true);
            yield "\" class=\"rounded-circle\" width=\"50\" height=\"50\" style=\"object-fit: cover;\">
                                ";
        } else {
            // line 235
            yield "                                    <div class=\"bg-secondary rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-user fa-2x text-white\"></i>
                                    </div>
                                ";
        }
        // line 239
        yield "                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créé par</small>
                                <p class=\"fw-bold mb-0\">";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "user", [], "any", false, false, false, 242), "fullName", [], "any", false, false, false, 242), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "user", [], "any", false, false, false, 243), "email", [], "any", false, false, false, 243), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section récapitulative -->
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
                        <i class=\"fas fa-check-circle text-success me-2\"></i>
                        Cette promotion s'applique <strong class=\"text-primary\">uniquement au produit</strong> <strong>";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 265), "html", null, true);
        yield "</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de suppression -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
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
                    <h5>Supprimer cette association ?</h5>
                    <p>La promotion <strong>";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 285), "html", null, true);
        yield "</strong> ne sera plus appliquée au produit <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 285), "html", null, true);
        yield "</strong>.</p>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotionProduct"] ?? null), "id", [], "any", false, false, false, 289)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-product" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotionProduct"] ?? null), "id", [], "any", false, false, false, 290))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    /* Dégradés */
    .bg-gradient-light {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    
    /* Cartes d'informations */
    .info-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
        border-radius: 12px;
    }
    
    .info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        border-color: transparent;
    }
    
    /* Boutons */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
        border-radius: 10px;
        font-weight: 500;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }
    
    .btn-danger {
        transition: all 0.3s ease;
        border-radius: 10px;
        font-weight: 500;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(220, 53, 69, 0.4);
    }
    
    .btn-outline-secondary {
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .btn-outline-secondary:hover {
        transform: translateY(-2px);
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
        letter-spacing: 1px;
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
    
    .table tbody tr {
        transition: background-color 0.2s ease;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
    }
    
    /* Badges */
    .badge {
        font-weight: 500;
        padding: 0.5rem 0.75rem;
        border-radius: 8px;
    }
    
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
        .display-5 {
            font-size: 1.5rem;
        }
        .info-card .fs-1 {
            font-size: 1.75rem;
        }
        .info-card .fs-4 {
            font-size: 1.1rem;
        }
        .info-card .fs-5 {
            font-size: 0.9rem;
        }
        .table th, .table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.7rem;
        }
        .table th {
            font-size: 0.65rem;
            letter-spacing: 0.5px;
        }
        .badge {
            padding: 0.35rem 0.5rem;
            font-size: 0.7rem;
        }
    }
    
    @media (max-width: 576px) {
        .btn-group {
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .btn-group .btn {
            flex: 1;
            min-width: 100px;
        }
        .d-flex.gap-2 {
            flex-wrap: wrap;
        }
    }
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/promotion/product/show.html.twig";
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
        return array (  512 => 290,  508 => 289,  499 => 285,  476 => 265,  451 => 243,  447 => 242,  442 => 239,  436 => 235,  428 => 233,  426 => 232,  418 => 226,  410 => 224,  402 => 222,  400 => 221,  397 => 220,  395 => 219,  381 => 208,  377 => 207,  373 => 206,  359 => 195,  347 => 186,  332 => 174,  320 => 165,  307 => 155,  296 => 147,  288 => 141,  282 => 137,  274 => 135,  272 => 134,  254 => 118,  248 => 116,  246 => 115,  242 => 114,  235 => 110,  231 => 109,  227 => 108,  217 => 100,  213 => 98,  207 => 96,  205 => 95,  192 => 85,  179 => 75,  169 => 67,  163 => 65,  157 => 63,  155 => 62,  143 => 53,  135 => 47,  129 => 43,  121 => 41,  119 => 40,  97 => 21,  90 => 17,  85 => 15,  78 => 11,  73 => 8,  66 => 7,  52 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/product/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\product\\show.html.twig");
    }
}
