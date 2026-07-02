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

/* admin/promotion/category/show.html.twig */
class __TwigTemplate_9147b3262ce0f80c05825e2ad1722ce1 extends Template
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
        yield " - Catégorie ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_index");
        yield "\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <h1 class=\"display-5 fw-bold mt-2\">
                <i class=\"fas fa-tag text-primary me-3\"></i>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "
                <span class=\"fs-4 text-muted mx-2\">→</span>
                <i class=\"fas fa-folder-tree text-success me-2\"></i>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
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

        <!-- Colonne droite - Informations de la catégorie -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-folder-tree me-2\"></i>Informations de la catégorie
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 134
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 135))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 135), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 137
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 150px;\">
                            <i class=\"fas fa-folder fa-4x text-muted\"></i>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 147), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-sitemap text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Chemin complet</small>
                        </div>
                        <p class=\"fw-semibold fs-5 mb-0\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "fullPath", [], "any", false, false, false, 155), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-align-left text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Description</small>
                        </div>
                        <p class=\"mb-0\">";
        // line 163
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 163)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 163), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "</p>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-layer-group text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Hiérarchie</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    ";
        // line 174
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                                        <span class=\"badge bg-info\">Sous-catégorie de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 175), "name", [], "any", false, false, false, 175), "html", null, true);
            yield "</span>
                                    ";
        } else {
            // line 177
            yield "                                        <span class=\"badge bg-secondary\">Catégorie principale</span>
                                    ";
        }
        // line 179
        yield "                                </p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-boxes text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Nombre de produits</small>
                                </div>
                                <p class=\"fw-bold fs-2 text-primary mb-0\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 188)), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge ";
        // line 196
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " fs-6 px-3 py-2\">
                                    <i class=\"fas ";
        // line 197
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                                    ";
        // line 198
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créée par</small>
                                <p class=\"fw-bold mb-0\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "user", [], "any", false, false, false, 203), "fullName", [], "any", false, false, false, 203), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\">";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "user", [], "any", false, false, false, 204), "email", [], "any", false, false, false, 204), "html", null, true);
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
                        Cette promotion s'applique <strong class=\"text-primary\">à tous les produits</strong> de la catégorie <strong>";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 226), "html", null, true);
        yield "</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des produits de la catégorie -->
    <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
        <div class=\"card-header bg-gradient-primary text-white py-3\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-boxes me-2\"></i>Produits de la catégorie
                <span class=\"badge bg-light text-dark ms-2\">";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)), "html", null, true);
        yield "</span>
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 60px\">Image</th>
                            <th class=\"text-white\">Nom</th>
                            <th class=\"text-white\">Code-barres</th>
                            <th class=\"text-white\">Prix de vente</th>
                            <th class=\"text-white\">Stock</th>
                            <th class=\"text-white\">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 256
            yield "                            <tr>
                                <td>
                                    ";
            // line 258
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 258) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 258) != "default-product.png"))) {
                // line 259
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 259))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 259), "html", null, true);
                yield "\" class=\"rounded\" style=\"width: 40px; height: 40px; object-fit: cover;\">
                                    ";
            } else {
                // line 261
                yield "                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                            <i class=\"fas fa-box fa-lg text-muted\"></i>
                                        </div>
                                    ";
            }
            // line 265
            yield "                                </td>
                                <td><strong>";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 266), "html", null, true);
            yield "</strong></td>
                                <td><code>";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 267), "html", null, true);
            yield "</code></td>
                                <td>";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 268), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 268), "hmaService", [], "any", false, false, false, 268)), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 270
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 270) <= 0)) {
                // line 271
                yield "                                        <span class=\"badge bg-danger\">Rupture</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 272
$context["product"], "stockQuantity", [], "any", false, false, false, 272) <= CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 272))) {
                // line 273
                yield "                                        <span class=\"badge bg-warning text-dark\">Stock faible (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 273), "html", null, true);
                yield ")</span>
                                    ";
            } else {
                // line 275
                yield "                                        <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 275), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 275), "unités")) : ("unités")), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 277
            yield "                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 279
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 279)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 280
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 284
        if (!$context['_iterated']) {
            // line 285
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                    <i class=\"fas fa-box fa-3x mb-3 text-muted opacity-25\"></i>
                                    <p>Aucun produit dans cette catégorie.</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        yield "                    </tbody>
                </table>
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
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 311), "html", null, true);
        yield "</strong> ne sera plus appliquée à la catégorie <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 311), "html", null, true);
        yield "</strong>.</p>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotionCategory"] ?? null), "id", [], "any", false, false, false, 315)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-category" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotionCategory"] ?? null), "id", [], "any", false, false, false, 316))), "html", null, true);
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
        return "admin/promotion/category/show.html.twig";
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
        return array (  573 => 316,  569 => 315,  560 => 311,  539 => 292,  527 => 285,  525 => 284,  516 => 280,  512 => 279,  508 => 277,  500 => 275,  494 => 273,  492 => 272,  489 => 271,  487 => 270,  482 => 268,  478 => 267,  474 => 266,  471 => 265,  465 => 261,  457 => 259,  455 => 258,  451 => 256,  446 => 255,  426 => 238,  411 => 226,  386 => 204,  382 => 203,  374 => 198,  370 => 197,  366 => 196,  355 => 188,  344 => 179,  340 => 177,  334 => 175,  332 => 174,  318 => 163,  307 => 155,  296 => 147,  288 => 141,  282 => 137,  274 => 135,  272 => 134,  254 => 118,  248 => 116,  246 => 115,  242 => 114,  235 => 110,  231 => 109,  227 => 108,  217 => 100,  213 => 98,  207 => 96,  205 => 95,  192 => 85,  179 => 75,  169 => 67,  163 => 65,  157 => 63,  155 => 62,  143 => 53,  135 => 47,  129 => 43,  121 => 41,  119 => 40,  97 => 21,  90 => 17,  85 => 15,  78 => 11,  73 => 8,  66 => 7,  52 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/category/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\category\\show.html.twig");
    }
}
