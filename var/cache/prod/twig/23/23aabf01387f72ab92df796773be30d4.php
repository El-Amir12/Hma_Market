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

/* stock/inventory/show.html.twig */
class __TwigTemplate_a89ce5b61d2dd44c61c72b6d6af0f35a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        yield "Inventaire - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 4), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .stat-card {
        border-radius: 0.75rem;
        transition: all 0.2s;
    }
    .difference-positive {
        background-color: #d1fae5;
        color: #065f46;
    }
    .difference-negative {
        background-color: #fee2e2;
        color: #991b1b;
    }
    .difference-zero {
        background-color: #f3f4f6;
        color: #6b7280;
    }
    .status-badge {
        font-size: 0.8rem;
        padding: 0.35rem 0.75rem;
    }
    .progress-custom {
        height: 8px;
        border-radius: 4px;
    }
</style>
";
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 53), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-clipboard-list text-primary me-2\"></i>
                Inventaire ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 58), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
            ";
        // line 65
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "status", [], "any", false, false, false, 65) == "in_progress")) {
            // line 66
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_count", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-clipboard-list me-1\"></i> Continuer la saisie
                </a>
            ";
        }
        // line 70
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "status", [], "any", false, false, false, 70) == "completed")) {
            // line 71
            yield "                <button type=\"button\" class=\"btn btn-outline-success\" onclick=\"window.print()\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </button>
            ";
        }
        // line 75
        yield "        </div>
    </div>

    <!-- Informations générales -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">N° inventaire</small>
                            <h5 class=\"mb-0\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 86), "html", null, true);
        yield "</h5>
                        </div>
                        <i class=\"fas fa-hashtag fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">Date inventaire</small>
                            <h5 class=\"mb-0\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryDate", [], "any", false, false, false, 99), "d/m/Y"), "html", null, true);
        yield "</h5>
                        </div>
                        <i class=\"fas fa-calendar-alt fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">Statut</small>
                            <h5 class=\"mb-0\">
                                <span class=\"badge ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "statusBadgeClass", [], "any", false, false, false, 113), "html", null, true);
        yield " status-badge\">
                                    <i class=\"fas ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "statusIcon", [], "any", false, false, false, 114), "html", null, true);
        yield " me-1\"></i>
                                    ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "statusLabel", [], "any", false, false, false, 115), "html", null, true);
        yield "
                                </span>
                            </h5>
                        </div>
                        <i class=\"fas fa-info-circle fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">Progression</small>
                            <h5 class=\"mb-0\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["progress"] ?? null), "html", null, true);
        yield "%</h5>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x text-primary opacity-50\"></i>
                    </div>
                    <div class=\"progress progress-custom mt-2\">
                        <div class=\"progress-bar bg-primary\" style=\"width: ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["progress"] ?? null), "html", null, true);
        yield "%\"></div>
                    </div>
                    <small class=\"text-muted\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["countedItems"] ?? null), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
        yield " produits comptés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Détails supplémentaires -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-user me-2 text-primary\"></i>
                        Informations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Créé par</small>
                            <div class=\"fw-bold\">";
        // line 157
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "createdBy", [], "any", false, false, false, 157), "fullName", [], "any", false, false, false, 157)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "createdBy", [], "any", false, false, false, 157), "fullName", [], "any", false, false, false, 157), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "createdBy", [], "any", false, false, false, 157), "email", [], "any", false, false, false, 157), "html", null, true)));
        yield "</div>
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Créé le</small>
                            <div class=\"fw-bold\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "createdAt", [], "any", false, false, false, 161), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Emplacement</small>
                            <div class=\"fw-bold\">";
        // line 165
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 165), "displayName", [], "any", false, false, false, 165), "html", null, true)) : ("Tous les emplacements"));
        yield "</div>
                        </div>
                        ";
        // line 167
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "validatedBy", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Validé par</small>
                            <div class=\"fw-bold text-success\">";
            // line 170
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "validatedBy", [], "any", false, false, false, 170), "fullName", [], "any", false, false, false, 170)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "validatedBy", [], "any", false, false, false, 170), "fullName", [], "any", false, false, false, 170), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "validatedBy", [], "any", false, false, false, 170), "email", [], "any", false, false, false, 170), "html", null, true)));
            yield "</div>
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Validé le</small>
                            <div class=\"fw-bold text-success\">";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "validatedAt", [], "any", false, false, false, 174), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 177
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "notes", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 178
            yield "                        <div class=\"col-12 mt-2\">
                            <small class=\"text-muted\">Notes</small>
                            <div class=\"fw-bold\">";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "notes", [], "any", false, false, false, 180), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 183
        yield "                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-pie me-2 text-primary\"></i>
                        Résumé
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <h3 class=\"mb-0 text-primary\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Produits</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <h3 class=\"mb-0 text-warning\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["differences"] ?? null)), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Écarts</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <h3 class=\"mb-0 text-success\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["countedItems"] ?? null), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Comptés</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des produits -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Produits inventoriés
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Produit</th>
                            <th>Code-barres</th>
                            <th class=\"text-end\">Stock attendu</th>
                            <th class=\"text-end\">Stock compté</th>
                            <th class=\"text-end\">Écart</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 244
            yield "                            ";
            $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 244);
            // line 245
            yield "                            ";
            $context["diffClass"] = (((($context["diff"] ?? null) > 0)) ? ("difference-positive") : ((((($context["diff"] ?? null) < 0)) ? ("difference-negative") : ("difference-zero"))));
            // line 246
            yield "                            <tr>
                                <td>
                                    <div class=\"fw-bold\">";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 248), "name", [], "any", false, false, false, 248), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 249), "category", [], "any", false, true, false, 249), "name", [], "any", true, true, false, 249)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 249), "category", [], "any", false, false, false, 249), "name", [], "any", false, false, false, 249), "Sans catégorie")) : ("Sans catégorie")), "html", null, true);
            yield "</small>
                                </td>
                                <td><code>";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 251), "barcode", [], "any", false, false, false, 251), "html", null, true);
            yield "</code></td>
                                <td class=\"text-end\">";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expectedQuantity", [], "any", false, false, false, 252), 0, ",", " "), "html", null, true);
            yield "</td>
                                <td class=\"text-end\">
                                    ";
            // line 254
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 254) > 0)) {
                // line 255
                yield "                                        <span class=\"fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 255), 0, ",", " "), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 257
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 259
            yield "                                </td>
                                <td class=\"text-end\">
                                    ";
            // line 261
            if ((($context["diff"] ?? null) != 0)) {
                // line 262
                yield "                                        <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["diffClass"] ?? null), "html", null, true);
                yield "\">
                                            ";
                // line 263
                yield (((($context["diff"] ?? null) > 0)) ? ("+") : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["diff"] ?? null), 0, ",", " "), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 266
                yield "                                        <span class=\"badge difference-zero\">0</span>
                                    ";
            }
            // line 268
            yield "                                </td>
                                <td>
                                    ";
            // line 270
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 270) > 0)) {
                // line 271
                yield "                                        <span class=\"badge bg-success\">Compté</span>
                                    ";
            } else {
                // line 273
                yield "                                        <span class=\"badge bg-warning text-dark\">À compter</span>
                                    ";
            }
            // line 275
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 277
        if (!$context['_iterated']) {
            // line 278
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun produit dans cet inventaire</p>
                                    <a href=\"";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_add_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "id", [], "any", false, false, false, 282)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fas fa-plus me-1\"></i> Ajouter des produits
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "stock/inventory/show.html.twig";
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
        return array (  515 => 288,  503 => 282,  497 => 278,  495 => 277,  489 => 275,  485 => 273,  481 => 271,  479 => 270,  475 => 268,  471 => 266,  464 => 263,  459 => 262,  457 => 261,  453 => 259,  449 => 257,  443 => 255,  441 => 254,  436 => 252,  432 => 251,  427 => 249,  423 => 248,  419 => 246,  416 => 245,  413 => 244,  408 => 243,  373 => 211,  364 => 205,  355 => 199,  337 => 183,  331 => 180,  327 => 178,  324 => 177,  318 => 174,  311 => 170,  307 => 168,  305 => 167,  300 => 165,  293 => 161,  286 => 157,  261 => 137,  256 => 135,  248 => 130,  230 => 115,  226 => 114,  222 => 113,  205 => 99,  189 => 86,  176 => 75,  170 => 71,  167 => 70,  159 => 66,  157 => 65,  151 => 62,  144 => 58,  136 => 53,  129 => 49,  121 => 44,  112 => 37,  105 => 36,  72 => 7,  65 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/inventory/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\show.html.twig");
    }
}
