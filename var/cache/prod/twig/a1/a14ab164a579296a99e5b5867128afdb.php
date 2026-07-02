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

/* admin/promotion/index.html.twig */
class __TwigTemplate_e278b71e5e33e51e499b948762aa1dec extends Template
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
        yield "Promotions - HMA Market";
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
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div class=\"mb-2 mb-sm-0\">
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-tags me-2 text-primary\"></i>Promotions
            </h1>
            <p class=\"text-muted mb-0\">Gérez vos offres promotionnelles</p>
        </div>
        <div class=\"d-flex gap-2\">
            <div class=\"dropdown\">
                <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-link me-1\"></i> Associations
                </button>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_index");
        yield "\">
                            <i class=\"fas fa-folder-tree me-2\"></i>Catégories
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_product_index");
        yield "\">
                            <i class=\"fas fa-boxes me-2\"></i>Produits
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-cog me-1\"></i> Types promotion
            </a>
            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
            </a>
        </div>
    </div>

    <!-- Flash messages -->
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 44
            yield "        <div class=\"alert alert-success alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "
    <!-- Statistiques : 6 cartes sur une ligne -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques selon les filtres</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row g-3\">
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Total</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-tag fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Actives</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Inactives</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-ban fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">En cours</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ongoingFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">À venir</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["upcomingFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-calendar-alt fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Terminées</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["endedFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-stopwatch fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Recherche</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\"><i class=\"fas fa-search text-muted\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\" class=\"form-control border-start-0\" placeholder=\"Nom, description...\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label class=\"form-label fw-semibold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 144
        yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 145
        yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                        <option value=\"inactive\" ";
        // line 146
        yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label class=\"form-label fw-semibold\">Période</label>
                    <select name=\"period\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 152
        yield (((($context["period"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Toutes</option>
                        <option value=\"ongoing\" ";
        // line 153
        yield (((($context["period"] ?? null) == "ongoing")) ? ("selected") : (""));
        yield ">En cours</option>
                        <option value=\"upcoming\" ";
        // line 154
        yield (((($context["period"] ?? null) == "upcoming")) ? ("selected") : (""));
        yield ">À venir</option>
                        <option value=\"ended\" ";
        // line 155
        yield (((($context["period"] ?? null) == "ended")) ? ("selected") : (""));
        yield ">Terminées</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label class=\"form-label fw-semibold\">Type</label>
                    <select name=\"type\" class=\"form-select\">
                        <option value=\"0\">Tous</option>
                        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 163
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 163), "html", null, true);
            yield "\" ";
            yield (((($context["selectedType"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 163))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 163), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "                    </select>
                </div>
                <div class=\"col-lg-3 d-flex gap-2 align-items-end justify-content-lg-end justify-content-start\">
                    <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-undo-alt me-1\"></i> Effacer
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-filter me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Grille des promotions : 3 cartes par ligne -->
    <div class=\"row g-4\">
        ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 182
            yield "            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    ";
            // line 184
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 185
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 185))), "html", null, true);
                yield "\" class=\"card-img-top\" style=\"height: 200px; object-fit: cover;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 185), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 187
                yield "                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 200px;\">
                            <i class=\"fas fa-tag fa-5x text-muted opacity-25\"></i>
                        </div>
                    ";
            }
            // line 191
            yield "                    
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                            <h5 class=\"card-title fw-bold mb-0 text-dark\">";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 194), 0, 40), "html", null, true);
            yield "</h5>
                            <span class=\"badge ";
            // line 195
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield " px-2 py-1 ms-1 flex-shrink-0\">
                                ";
            // line 196
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
            yield "
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-3\">
                            ";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", true, true, false, 200)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 200), "Aucune description")) : ("Aucune description")), 0, 80), "html", null, true);
            yield "
                            ";
            // line 201
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 201)) > 80)) {
                yield "...";
            }
            // line 202
            yield "                        </p>
                        <div class=\"mb-2\">
                            <strong class=\"text-dark\">Réduction :</strong> 
                            <span class=\"badge bg-dark text-white px-3 py-2 rounded-pill fs-6\">
                                ";
            // line 206
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, false, false, 206), "name", [], "any", false, false, false, 206) == "Pourcentage")) {
                // line 207
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 207), "html", null, true);
                yield "%
                                ";
            } else {
                // line 209
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 209), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 209), "hmaService", [], "any", false, false, false, 209)), "html", null, true);
                yield "
                                ";
            }
            // line 211
            yield "                            </span>
                        </div>
                        <div class=\"small text-muted\">
                            <i class=\"far fa-calendar-alt me-1\"></i> 
                            ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "startDate", [], "any", false, false, false, 215), "d/m/Y"), "html", null, true);
            yield "
                            ";
            // line 216
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 217
                yield "                                → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 217), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 219
                yield "                                <span class=\"badge bg-info bg-opacity-10 text-info ms-1\">Sans fin</span>
                            ";
            }
            // line 221
            yield "                        </div>
                        <div class=\"mt-2 small text-muted border-top pt-2\">
                            <i class=\"fas fa-user-circle me-1\"></i> Créé par : 
                            <strong>";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "user", [], "any", false, false, false, 224), "fullName", [], "any", false, false, false, 224), "html", null, true);
            yield "</strong>
                        </div>
                    </div>
                    <div class=\"card-footer bg-transparent border-0 d-flex justify-content-between gap-2 pt-0 pb-3\">
                        <a href=\"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 228)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-eye me-1\"></i> Voir
                        </a>
                        <a href=\"";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 231)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        ";
            // line 234
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 235
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 235), "html", null, true);
                yield "\">
                                <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                            </button>
                        ";
            }
            // line 239
            yield "                    </div>
                </div>
            </div>

            <!-- Modal de suppression -->
            ";
            // line 244
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 245
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 245), "html", null, true);
                yield "\" tabindex=\"-1\" aria-hidden=\"true\">
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
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 259), "html", null, true);
                yield "</strong><br>
                                Toutes les associations avec cette promotion seront supprimées.
                            </div>
                        </div>
                        <div class=\"modal-footer border-0\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 265)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 266))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 274
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 275
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-tags fa-5x text-muted mb-3 opacity-25\"></i>
                        <h4 class=\"text-muted\">Aucune promotion trouvée</h4>
                        <p class=\"text-muted\">Modifiez vos filtres ou créez une nouvelle promotion.</p>
                        <a href=\"";
            // line 281
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_new");
            yield "\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 291
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 292
            yield "        <nav class=\"mt-5\">
            <ul class=\"pagination justify-content-center\">
                ";
            // line 294
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 295
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 296), "query", [], "any", false, false, false, 296), "all", [], "any", false, false, false, 296), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            yield "            </ul>
        </nav>
    ";
        }
        // line 302
        yield "</div>

<style>
    .hover-shadow {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
    }
    .bg-gradient-light {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
    }
    .rounded-4 {
        border-radius: 1rem;
    }
    .stat-card {
        transition: transform 0.2s;
    }
    .stat-card:hover {
        transform: scale(1.02);
        background-color: #ffffff !important;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
    }
    @media (max-width: 768px) {
        .card-footer {
            flex-wrap: wrap;
        }
        .card-footer .btn {
            font-size: 0.8rem;
        }
    }
    .text-dark {
        color: #212529 !important;
    }
    .form-control, .form-select {
        color: #212529 !important;
        background-color: #ffffff !important;
    }
    .form-floating > .form-control:focus,
    .form-floating > .form-select:focus {
        color: #212529;
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
        return "admin/promotion/index.html.twig";
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
        return array (  585 => 302,  580 => 299,  569 => 296,  564 => 295,  560 => 294,  556 => 292,  554 => 291,  549 => 288,  536 => 281,  528 => 275,  523 => 274,  512 => 266,  508 => 265,  499 => 259,  481 => 245,  479 => 244,  472 => 239,  464 => 235,  462 => 234,  456 => 231,  450 => 228,  443 => 224,  438 => 221,  434 => 219,  428 => 217,  426 => 216,  422 => 215,  416 => 211,  410 => 209,  404 => 207,  402 => 206,  396 => 202,  392 => 201,  388 => 200,  381 => 196,  377 => 195,  373 => 194,  368 => 191,  362 => 187,  354 => 185,  352 => 184,  348 => 182,  343 => 181,  327 => 168,  322 => 165,  309 => 163,  305 => 162,  295 => 155,  291 => 154,  287 => 153,  283 => 152,  274 => 146,  270 => 145,  266 => 144,  257 => 138,  233 => 117,  219 => 106,  205 => 95,  191 => 84,  177 => 73,  163 => 62,  148 => 49,  139 => 47,  134 => 46,  125 => 44,  121 => 43,  111 => 36,  105 => 33,  96 => 27,  88 => 22,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\index.html.twig");
    }
}
