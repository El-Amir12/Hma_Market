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

/* admin/promotion/category/index.html.twig */
class __TwigTemplate_96ec767faa013b1fc2948f1929c82940 extends Template
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
        yield "Promotions par catégorie - HMA Market";
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
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour aux promotions
            </a>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-folder-tree me-2 text-primary\"></i>Promotions par catégorie
            </h1>
            <p class=\"text-muted mb-0\">Gérez les associations promotion → catégorie</p>
        </div>
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_new");
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
        </a>
    </div>

    <!-- Flash messages -->
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            yield "        <div class=\"alert alert-success alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3 align-items-end\">
                <div class=\"col-lg-4 col-md-6\">
                    <label class=\"form-label fw-semibold\">Recherche</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\"><i class=\"fas fa-search text-muted\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\" class=\"form-control border-start-0\" placeholder=\"Promotion ou catégorie...\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 49
        yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 50
        yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                        <option value=\"inactive\" ";
        // line 51
        yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                    </select>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Promotion</label>
                    <select name=\"promotion\" class=\"form-select select2-promotion\">
                        <option value=\"0\">Toutes les promotions</option>
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 59
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 59), "html", null, true);
            yield "\" ";
            yield (((($context["selectedPromotion"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 59))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 59), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                    </select>
                </div>
                <div class=\"col-lg-2 col-md-12\">
                    <div class=\"d-flex gap-2\">
                        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_index");
        yield "\" class=\"btn btn-outline-secondary flex-fill\">
                            <i class=\"fas fa-undo-alt me-1\"></i> Effacer
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary flex-fill\">
                            <i class=\"fas fa-filter me-1\"></i> Filtrer
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 bg-primary bg-opacity-10 rounded-4 w-100\">
                <div class=\"card-body text-center py-3\">
                    <h2 class=\"mb-0 fw-bold text-dark\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalCount"] ?? null), "html", null, true);
        yield "</h2>
                    <small class=\"text-muted\">Associations</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des associations -->
    <div class=\"card shadow-sm border-0 rounded-4\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 80px\">Image</th>
                            <th class=\"text-white\">Promotion</th>
                            <th class=\"text-white\">Catégorie</th>
                            <th class=\"text-white\">Période</th>
                            <th class=\"text-white\">Statut</th>
                            <th class=\"text-white\">Réduction</th>
                            <th class=\"text-white\" class=\"text-center\">Produits</th>
                            <th class=\"text-white\" style=\"width: 100px\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 108
            yield "                            <tr>
                                <td>
                                    ";
            // line 110
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 110), "image", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 111
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 111), "image", [], "any", false, false, false, 111))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
                yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                    ";
            } else {
                // line 113
                yield "                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                            <i class=\"fas fa-tag fa-2x text-muted\"></i>
                                        </div>
                                    ";
            }
            // line 117
            yield "                                 </td>
                                 <td>
                                    <strong>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true);
            yield "</strong>
                                    <br><small class=\"text-muted\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 120), "typePromotion", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
            yield "</small>
                                 </td>
                                 <td>
                                    <strong>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123), "html", null, true);
            yield "</strong>
                                    ";
            // line 124
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 124), "parent", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 125
                yield "                                        <small class=\"text-muted d-block\">(Sous-catégorie de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 125), "parent", [], "any", false, false, false, 125), "name", [], "any", false, false, false, 125), "html", null, true);
                yield ")</small>
                                    ";
            }
            // line 127
            yield "                                 </td>
                                <td class=\"small\">
                                    ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 129), "startDate", [], "any", false, false, false, 129), "d/m/Y"), "html", null, true);
            yield "
                                    ";
            // line 130
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 130), "endDate", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "                                        <br>→ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 131), "endDate", [], "any", false, false, false, 131), "d/m/Y"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 133
                yield "                                        <br><span class=\"badge bg-info bg-opacity-10 text-info\">Sans fin</span>
                                    ";
            }
            // line 135
            yield "                                 </td>
                                 <td>
                                    <span class=\"badge ";
            // line 137
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 137), "isActive", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 138
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 138), "isActive", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
            yield "
                                    </span>
                                 </td>
                                 <td>
                                    <span class=\"badge bg-dark text-white px-3 py-2 rounded-pill\">
                                        ";
            // line 143
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 143), "typePromotion", [], "any", false, false, false, 143), "name", [], "any", false, false, false, 143) == "Pourcentage")) {
                // line 144
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 144), "value", [], "any", false, false, false, 144), "html", null, true);
                yield "%
                                        ";
            } else {
                // line 146
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 146), "value", [], "any", false, false, false, 146), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 146), "hmaService", [], "any", false, false, false, 146)), "html", null, true);
                yield "
                                        ";
            }
            // line 148
            yield "                                    </span>
                                 </td>
                                 <td>
                                    <span class=\"badge bg-primary rounded-pill\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 151), "products", [], "any", false, false, false, 151)), "html", null, true);
            yield "</span>
                                 </td>
                                 <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 158), "html", null, true);
            yield "\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </div>
                                 </td>
                             </tr>

                            <!-- Modal de suppression -->
                            <div class=\"modal fade\" id=\"deleteModal";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 166), "html", null, true);
            yield "\" tabindex=\"-1\">
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
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true);
            yield "</strong> ne sera plus appliquée à la catégorie <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true);
            yield "</strong>.</p>
                                        </div>
                                        <div class=\"modal-footer border-0\">
                                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                            <form method=\"post\" action=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 182)]), "html", null, true);
            yield "\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-category" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 183))), "html", null, true);
            yield "\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 190
        if (!$context['_iterated']) {
            // line 191
            yield "                            <td>
                                <td colspan=\"8\" class=\"text-center py-5 text-muted\">
                                    <i class=\"fas fa-folder-tree fa-3x mb-3 text-muted opacity-25\"></i>
                                    <p>Aucune association promotion-catégorie trouvée.</p>
                                    <a href=\"";
            // line 195
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_new");
            yield "\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-plus-circle me-2\"></i> Créer une promotion
                                    </a>
                                 </td>
                             </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        yield "                    </tbody>
                 </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    ";
        // line 208
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 209
            yield "        <nav class=\"mt-4\">
            <ul class=\"pagination justify-content-center\">
                ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 212
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 213), "query", [], "any", false, false, false, 213), "all", [], "any", false, false, false, 213), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            yield "            </ul>
        </nav>
    ";
        }
        // line 219
        yield "</div>

<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
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
    
    /* Cartes et badges */
    .bg-primary.bg-opacity-10 {
        background-color: rgba(13, 110, 253, 0.1) !important;
    }
    
    .bg-dark {
        background-color: #212529 !important;
    }
    
    .text-white {
        color: #ffffff !important;
    }
    
    .flex-fill {
        flex: 1 1 auto !important;
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
        .btn-group-sm .btn {
            padding: 0.25rem 0.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .col-lg-2.col-md-12 {
            margin-top: 0.5rem;
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
        return "admin/promotion/category/index.html.twig";
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
        return array (  464 => 219,  459 => 216,  448 => 213,  443 => 212,  439 => 211,  435 => 209,  433 => 208,  424 => 201,  412 => 195,  406 => 191,  404 => 190,  392 => 183,  388 => 182,  379 => 178,  364 => 166,  353 => 158,  347 => 155,  340 => 151,  335 => 148,  329 => 146,  323 => 144,  321 => 143,  313 => 138,  309 => 137,  305 => 135,  301 => 133,  295 => 131,  293 => 130,  289 => 129,  285 => 127,  279 => 125,  277 => 124,  273 => 123,  267 => 120,  263 => 119,  259 => 117,  253 => 113,  245 => 111,  243 => 110,  239 => 108,  234 => 107,  206 => 82,  186 => 65,  180 => 61,  167 => 59,  163 => 58,  153 => 51,  149 => 50,  145 => 49,  136 => 43,  122 => 31,  113 => 29,  108 => 28,  99 => 26,  95 => 25,  86 => 19,  75 => 11,  70 => 8,  63 => 7,  52 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/category/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\category\\index.html.twig");
    }
}
