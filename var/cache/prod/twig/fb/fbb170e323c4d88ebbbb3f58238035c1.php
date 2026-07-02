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

/* admin/type_promotion/index.html.twig */
class __TwigTemplate_ec23db11cd902c9aba759761b528c738 extends Template
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
        yield "Types de promotion - HMA Market";
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
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div class=\"mb-2 mb-sm-0\">
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-cog me-2 text-primary\"></i>Types de promotion
            </h1>
            <p class=\"text-muted mb-0\">Gérez les types de réduction (pourcentage, montant fixe, etc.)</p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-list me-2\"></i> Voir les promotions
            </a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau type
            </a>
        </div>
    </div>

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "        <div class=\"alert alert-success alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
    <!-- Statistiques -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row g-3\">
                <div class=\"col-md-4\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Total</span>
                                <h3 class=\"mb-0 fw-bold\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-tag fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-ban fa-2x text-danger opacity-50\"></i>
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
            <form method=\"get\" class=\"row g-3 align-items-end\">
                <div class=\"col-4\">
                    <label class=\"form-label fw-semibold\">Recherche</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\"><i class=\"fas fa-search text-muted\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\" class=\"form-control border-start-0\" placeholder=\"Nom, description...\">
                    </div>
                </div>
                <div class=\"col-4\">
                    <label class=\"form-label fw-semibold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 92
        yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 93
        yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                        <option value=\"inactive\" ";
        // line 94
        yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                    </select>
                </div>
                <div class=\"col-4 d-flex gap-2 justify-content-end\">
                    <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
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

    <!-- Grille des types (cartes) - 4 cartes sur une ligne -->
    <div class=\"row g-4\">
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["types"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 112
            yield "            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    <div class=\"card-body p-4\">
                        <div class=\"d-flex justify-content-between align-items-start mb-3\">
                            <h5 class=\"card-title fw-bold mb-0\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 116), 0, 30), "html", null, true);
            yield "</h5>
                            <span class=\"badge ";
            // line 117
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield " px-2 py-1 ms-2 flex-shrink-0\">
                                ";
            // line 118
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                        </div>
                        <p class=\"card-text text-muted mb-3\" style=\"min-height: 70px;\">
                            ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 122), "Aucune description")) : ("Aucune description")), 0, 100), "html", null, true);
            yield "
                            ";
            // line 123
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 123)) > 100)) {
                yield "...";
            }
            // line 124
            yield "                        </p>
                        <div class=\"small text-muted\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "createdAt", [], "any", false, false, false, 126), "d/m/Y"), "html", null, true);
            yield "
                        </div>
                    </div>
                  
                    <div class=\"card-footer bg-transparent border-0 d-flex justify-content-between gap-2 pt-0 pb-4 px-4\">
                        <a href=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 131)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-eye me-1\"></i> 
                        </a>
                        <a href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\">
                            <i class=\"fas fa-edit me-1\"></i> 
                        </a>
                        <!-- Formulaire Activer/Désactiver -->
                        <form method=\"post\" action=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" class=\"flex-fill\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 139))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-sm ";
            // line 140
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-warning") : ("btn-outline-success"));
            yield " w-100\">
                                <i class=\"fas ";
            // line 141
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-pause") : ("fa-play"));
            yield " me-1\"></i>
                                ";
            // line 142
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                            </button>
                        </form>
                        ";
            // line 145
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 146
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 146), "html", null, true);
                yield "\">
                                <i class=\"fas fa-trash-alt me-1\"></i> 
                            </button>
                        ";
            }
            // line 150
            yield "                    </div>
                </div>
            </div>

            <!-- Modal de suppression -->
            ";
            // line 155
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 156
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 156), "html", null, true);
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
                            <h5>Êtes-vous sûr de vouloir supprimer ce type ?</h5>
                            <p class=\"text-muted\">Cette action est irréversible.</p>
                            ";
                // line 169
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "promotions", [], "any", false, false, false, 169)) > 0)) {
                    // line 170
                    yield "                                <div class=\"alert alert-warning mt-3\">
                                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                                    Ce type est utilisé par <strong>";
                    // line 172
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "promotions", [], "any", false, false, false, 172)), "html", null, true);
                    yield "</strong> promotion(s). Vous ne pouvez pas le supprimer.
                                </div>
                            ";
                }
                // line 175
                yield "                        </div>
                        <div class=\"modal-footer border-0\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            ";
                // line 178
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "promotions", [], "any", false, false, false, 178)) == 0)) {
                    // line 179
                    yield "                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                    yield "\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 180))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                                </form>
                            ";
                } else {
                    // line 184
                    yield "                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                            ";
                }
                // line 186
                yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 191
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 192
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-percent fa-5x text-muted mb-3 opacity-25\"></i>
                        <h4 class=\"text-muted\">Aucun type de promotion trouvé</h4>
                        <p class=\"text-muted\">Modifiez vos filtres ou créez un nouveau type.</p>
                        <a href=\"";
            // line 198
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_new");
            yield "\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouveau type
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 208
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 209
            yield "        <nav class=\"mt-5\">
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 213), "query", [], "any", false, false, false, 213), "all", [], "any", false, false, false, 213), ["page" => $context["page"]])), "html", null, true);
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
.hover-shadow {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
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
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/type_promotion/index.html.twig";
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
        return array (  451 => 219,  446 => 216,  435 => 213,  430 => 212,  426 => 211,  422 => 209,  420 => 208,  415 => 205,  402 => 198,  394 => 192,  389 => 191,  382 => 186,  378 => 184,  371 => 180,  366 => 179,  364 => 178,  359 => 175,  353 => 172,  349 => 170,  347 => 169,  330 => 156,  328 => 155,  321 => 150,  313 => 146,  311 => 145,  305 => 142,  301 => 141,  297 => 140,  293 => 139,  289 => 138,  282 => 134,  276 => 131,  268 => 126,  264 => 124,  260 => 123,  256 => 122,  249 => 118,  245 => 117,  241 => 116,  235 => 112,  230 => 111,  214 => 98,  207 => 94,  203 => 93,  199 => 92,  190 => 86,  166 => 65,  152 => 54,  138 => 43,  123 => 30,  114 => 28,  109 => 27,  100 => 25,  96 => 24,  87 => 18,  81 => 15,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/type_promotion/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\type_promotion\\index.html.twig");
    }
}
