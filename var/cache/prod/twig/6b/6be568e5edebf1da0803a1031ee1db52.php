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

/* stock/inventory/index.html.twig */
class __TwigTemplate_6f26b6ef0d8d7545c3522436536e8ac8 extends Template
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
        yield "Inventaires - HMA Market";
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
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white !important;
        border: none;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-card .stat-value {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 0;
    }
    .stat-card .stat-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-card .stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
        opacity: 0.8;
    }
    .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
    }
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        color: white;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-secondary {
        background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%) !important;
        color: white;
    }
    .card-bg-primary .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-secondary .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    .card-bg-primary .stat-value,
    .card-bg-warning .stat-value,
    .card-bg-success .stat-value,
    .card-bg-secondary .stat-value {
        color: white;
    }
    .card-bg-primary .text-muted,
    .card-bg-warning .text-muted,
    .card-bg-success .text-muted,
    .card-bg-secondary .text-muted {
        color: rgba(255,255,255,0.8) !important;
    }
</style>
";
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-clipboard-list text-primary me-2\"></i>
                Inventaires
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les inventaires physiques et les comptages de stock
            </p>
        </div>
        <div>
            <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvel inventaire
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total inventaires</div>
                            <div class=\"stat-value\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 121), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">inventaires créés</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-bar fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">En cours</div>
                            <div class=\"stat-value\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "in_progress", [], "any", true, true, false, 137)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "in_progress", [], "any", false, false, false, 137), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">inventaire(s) en cours</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-spinner fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Terminés</div>
                            <div class=\"stat-value\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 153)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", false, false, false, 153), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">inventaire(s) terminés</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-secondary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Brouillons</div>
                            <div class=\"stat-value\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "draft", [], "any", true, true, false, 169)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "draft", [], "any", false, false, false, 169), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">inventaire(s) en brouillon</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-pen fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"draft\" ";
        // line 194
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 194) == "draft")) ? ("selected") : (""));
        yield ">Brouillon</option>
                        <option value=\"in_progress\" ";
        // line 195
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 195) == "in_progress")) ? ("selected") : (""));
        yield ">En cours</option>
                        <option value=\"completed\" ";
        // line 196
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 196) == "completed")) ? ("selected") : (""));
        yield ">Terminé</option>
                        <option value=\"cancelled\" ";
        // line 197
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 197) == "cancelled")) ? ("selected") : (""));
        yield ">Annulé</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 202), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 206), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des inventaires -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des inventaires
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["inventories"] ?? null)), "html", null, true);
        yield " résultat(s)</span>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>N° inventaire</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Emplacement</th>
                            <th>Progression</th>
                            <th>Créé par</th>
                            <th>Validé par</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["inventories"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inventory"]) {
            // line 243
            yield "                            <tr>
                                <td class=\"align-middle\">
                                    <div class=\"fw-bold\">";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "inventoryNumber", [], "any", false, false, false, 245), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "createdAt", [], "any", false, false, false, 246), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                                </div>
                                <td class=\"align-middle\">";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "inventoryDate", [], "any", false, false, false, 248), "d/m/Y"), "html", null, true);
            yield "</div>
                                <td class=\"align-middle\">
                                    <span class=\"badge ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "statusBadgeClass", [], "any", false, false, false, 250), "html", null, true);
            yield "\">
                                        <i class=\"fas ";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "statusIcon", [], "any", false, false, false, 251), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "statusLabel", [], "any", false, false, false, 252), "html", null, true);
            yield "
                                    </span>
                                </div>
                                <td class=\"align-middle\">
                                    ";
            // line 256
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "location", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 257
                yield "                                        <i class=\"fas fa-map-marker-alt text-muted me-1\"></i>
                                        ";
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "location", [], "any", false, false, false, 258), "displayName", [], "any", false, false, false, 258), "html", null, true);
                yield "
                                    ";
            } else {
                // line 260
                yield "                                        <span class=\"text-muted\">Tous les emplacements</span>
                                    ";
            }
            // line 262
            yield "                                </div>
                                <td class=\"align-middle\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <div class=\"progress flex-grow-1\" style=\"height: 6px;\">
                                            <div class=\"progress-bar bg-primary\" style=\"width: ";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "progress", [], "any", false, false, false, 266), "html", null, true);
            yield "%\"></div>
                                        </div>
                                        <small class=\"fw-bold\">";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "progress", [], "any", false, false, false, 268), "html", null, true);
            yield "%</small>
                                    </div>
                                    <small class=\"text-muted\">";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "countedItemsCount", [], "any", false, false, false, 270), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "items", [], "any", false, false, false, 270)), "html", null, true);
            yield " comptés</small>
                                </div>
                                <td class=\"align-middle\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>";
            // line 275
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "createdBy", [], "any", false, false, false, 275), "fullName", [], "any", false, false, false, 275)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "createdBy", [], "any", false, false, false, 275), "fullName", [], "any", false, false, false, 275), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "createdBy", [], "any", false, false, false, 275), "email", [], "any", false, false, false, 275), "html", null, true)));
            yield "</small>
                                    </div>
                                </div>
                                <td class=\"align-middle\">
                                    ";
            // line 279
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "validatedBy", [], "any", false, false, false, 279)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 280
                yield "                                        <div class=\"d-flex align-items-center gap-2\">
                                            <i class=\"fas fa-check-circle text-success\"></i>
                                            <small>";
                // line 282
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "validatedBy", [], "any", false, false, false, 282), "fullName", [], "any", false, false, false, 282)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "validatedBy", [], "any", false, false, false, 282), "fullName", [], "any", false, false, false, 282), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "validatedBy", [], "any", false, false, false, 282), "email", [], "any", false, false, false, 282), "html", null, true)));
                yield "</small>
                                        </div>
                                    ";
            } else {
                // line 285
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 287
            yield "                                </div>
                                <td class=\"align-middle text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "id", [], "any", false, false, false, 290)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir le détail\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        ";
            // line 293
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "status", [], "any", false, false, false, 293) == "in_progress")) {
                // line 294
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_count", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "id", [], "any", false, false, false, 294)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-success\" title=\"Continuer la saisie\">
                                                <i class=\"fas fa-clipboard-list\"></i>
                                            </a>
                                        ";
            }
            // line 298
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "status", [], "any", false, false, false, 298) == "draft")) {
                // line 299
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_add_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "id", [], "any", false, false, false, 299)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Ajouter des produits\">
                                                <i class=\"fas fa-plus\"></i>
                                            </a>
                                        ";
            }
            // line 303
            yield "                                    </div>
                                </div>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 306
        if (!$context['_iterated']) {
            // line 307
            yield "                            <tr>
                                <td colspan=\"8\" class=\"text-center py-5\">
                                    <i class=\"fas fa-clipboard-list fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun inventaire trouvé</p>
                                    <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel inventaire</p>
                                    <a href=\"";
            // line 312
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_new");
            yield "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un inventaire
                                    </a>
                                </div>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inventory'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
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
        return "stock/inventory/index.html.twig";
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
        return array (  518 => 318,  506 => 312,  499 => 307,  497 => 306,  490 => 303,  482 => 299,  479 => 298,  471 => 294,  469 => 293,  463 => 290,  458 => 287,  454 => 285,  448 => 282,  444 => 280,  442 => 279,  435 => 275,  425 => 270,  420 => 268,  415 => 266,  409 => 262,  405 => 260,  400 => 258,  397 => 257,  395 => 256,  388 => 252,  384 => 251,  380 => 250,  375 => 248,  370 => 246,  366 => 245,  362 => 243,  357 => 242,  336 => 224,  315 => 206,  308 => 202,  300 => 197,  296 => 196,  292 => 195,  288 => 194,  260 => 169,  241 => 153,  222 => 137,  203 => 121,  186 => 107,  164 => 88,  155 => 81,  148 => 80,  71 => 7,  64 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/inventory/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\index.html.twig");
    }
}
