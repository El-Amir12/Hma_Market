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

/* admin/stock_batch/index.html.twig */
class __TwigTemplate_3b424e69e6b19aa55ab90b17f4d73cef extends Template
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
        yield "Gestion des lots - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    .batch-card {
        transition: all 0.3s ease;
        border-left: 4px solid #0463f1;
        margin-bottom: 1rem;
        border-radius: 1rem;
        background: white;
    }
    .batch-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .batch-card.has-issue {
        border-left-color: #dc3545;
        background-color: #fff5f5;
    }
    .batch-card.expired {
        border-left-color: #6c757d;
        background-color: #f8f9fa;
    }
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        overflow: hidden;
        background: white;
        border: 1px solid #e9ecef;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
    }
    .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.2;
    }
    .stat-label {
        font-size: 0.7rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .badge {
        font-weight: 500;
        padding: 0.4rem 0.6rem;
    }
    .progress {
        border-radius: 10px;
        overflow: hidden;
        height: 6px;
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.5rem;
        border-color: #dee2e6;
        min-height: 38px;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        line-height: 36px;
        padding-left: 12px;
    }
    .filters-card {
        border-radius: 1rem;
    }
    @media (max-width: 768px) {
        .btn-group { flex-direction: column; }
        .btn-group .btn { margin: 2px 0; }
        .stat-value { font-size: 1.3rem; }
        .stat-icon { width: 40px; height: 40px; }
        .stat-icon i { font-size: 1.3rem; }
    }
</style>
";
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 94
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 106)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 107)), "truncate", [30], "method", false, false, false, 107), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Gestion des lots</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-primary\"></i>
                Lots de stock - ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 115), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Les lots sont créés automatiquement lors des achats.
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-map-marker-alt me-2\"></i> Emplacements
            </a>
            <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
            </a>
            <a href=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 129)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour produit
            </a>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- Statistiques (6 cartes en 2 lignes de 3) -->
    <div class=\"row g-3 mb-4\">
        <!-- Ligne 1 : 3 cartes -->
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total lots</div>
                            <div class=\"stat-value text-primary\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", false, false, false, 147), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-primary bg-opacity-10\">
                            <i class=\"fas fa-boxes fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots actifs</div>
                            <div class=\"stat-value text-success\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 162)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", false, false, false, 162), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-play-circle fa-2x text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Unités en stock</div>
                            <div class=\"stat-value text-info\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 177)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", false, false, false, 177), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-info bg-opacity-10\">
                            <i class=\"fas fa-chart-line fa-2x text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row g-3 mb-4\">
        <!-- Ligne 2 : 3 cartes -->
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots expirés</div>
                            <div class=\"stat-value text-danger\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", false, false, false, 196), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-danger bg-opacity-10\">
                            <i class=\"fas fa-calendar-times fa-2x text-danger\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Expire bientôt</div>
                            <div class=\"stat-value text-warning\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", false, false, false, 211), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-hourglass-half fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Avoirs signalés</div>
                            <div class=\"stat-value text-secondary\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "has_issue_count", [], "any", true, true, false, 226)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "has_issue_count", [], "any", false, false, false, 226), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-secondary bg-opacity-10\">
                            <i class=\"fas fa-file-invoice-dollar fa-2x text-secondary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4 filters-card\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 242)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"N° lot...\" value=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 255)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 255), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 261
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 261)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 261), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 262
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 262)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 262), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" ";
        // line 269
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 269)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 269), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                            <option value=\"expiring_soon\" ";
        // line 270
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 270)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 270), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Expire bientôt</option>
                            <option value=\"not_expiring\" ";
        // line 271
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 271)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 271), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 278
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 278)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", false, false, false, 278), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select select2-location\">
                            <option value=\"\">-- Tous les emplacements --</option>
                            ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 286
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 286)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", false, false, false, 286), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        yield "                        </select>
                    </div>
                </div>
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 296
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 296)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", false, false, false, 296), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">Avec avoir</option>
                            <option value=\"no\" ";
        // line 297
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 297)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", false, false, false, 297), "")) : ("")) == "no")) ? ("selected") : (""));
        yield ">Sans avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Statut avoir</label>
                        <select name=\"issue_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"pending\">En attente</option>
                            <option value=\"acknowledged\">Accusé réception</option>
                            <option value=\"under_review\">En analyse</option>
                            <option value=\"partially_recovered\">Partiellement récupéré</option>
                            <option value=\"recovered\">Récupéré</option>
                            <option value=\"lost\">Perdu</option>
                            <option value=\"closed\">Clôturé</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Expiration du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 315)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 315), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Expiration au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 319)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 319), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"batch_number\" ";
        // line 326
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 326)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 326), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                            <option value=\"expiry_date\" ";
        // line 327
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 327)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 327), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Date expiration</option>
                            <option value=\"current_quantity\" ";
        // line 328
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 328)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 328), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            <option value=\"created_at\" ";
        // line 329
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 329)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 329), "expiry_date")) : ("expiry_date")) == "created_at")) ? ("selected") : (""));
        yield ">Date création</option>
                            <option value=\"location\" ";
        // line 330
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 330), "expiry_date")) : ("expiry_date")) == "location")) ? ("selected") : (""));
        yield ">Emplacement</option>
                            <option value=\"issue_status\" ";
        // line 331
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 331)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 331), "expiry_date")) : ("expiry_date")) == "issue_status")) ? ("selected") : (""));
        yield ">Statut avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">Ordre</label>
                        <select name=\"direction\" class=\"form-select\">
                            <option value=\"asc\" ";
        // line 337
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 337)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 337), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">Croissant ↑</option>
                            <option value=\"desc\" ";
        // line 338
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 338)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 338), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
        yield ">Décroissant ↓</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Liste des lots en cartes -->
    <div class=\"row\">
        ";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["batches"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 349
            yield "            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 349) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 349) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 350
            yield "            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 350) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 350) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 350) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 351
            yield "            ";
            $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 351) <= 10);
            // line 352
            yield "            ";
            $context["hasIssue"] = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 352);
            // line 353
            yield "            ";
            $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 353)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 353), "displayName", [], "any", false, false, false, 353)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 353)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 353)) : ("—"))));
            // line 354
            yield "            
            <div class=\"col-xl-4 col-lg-6 mb-4\">
                <div class=\"card batch-card h-100 shadow-sm ";
            // line 356
            if ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "has-issue";
            } elseif ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "expired";
            }
            yield "\">
                    <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 359), "html", null, true);
            yield "\" id=\"batch_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 359), "html", null, true);
            yield "\">
                            <div>
                                <h6 class=\"mb-0 fw-bold\">";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 361), "html", null, true);
            yield "</h6>
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i>";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "createdAt", [], "any", false, false, false, 363), "d/m/Y"), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-ellipsis-v\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end shadow-sm\">
                                <li><a class=\"dropdown-item\" href=\"";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 372)]), "html", null, true);
            yield "\"><i class=\"fas fa-eye me-2 text-info\"></i> Voir</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 373)]), "html", null, true);
            yield "\"><i class=\"fas fa-edit me-2 text-warning\"></i> Modifier</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 374)]), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"fas fa-print me-2 text-secondary\"></i> Imprimer</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 377
            if ((($tmp =  !($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 378
                yield "                                        <a class=\"dropdown-item text-danger\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 378)]), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-exclamation-triangle me-2\"></i> Signaler un problème
                                        </a>
                                    ";
            } else {
                // line 382
                yield "                                        <a class=\"dropdown-item text-info\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "activeIssue", [], "any", false, false, false, 382), "id", [], "any", false, false, false, 382)]), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-file-invoice-dollar me-2\"></i> Voir l'avoir
                                        </a>
                                    ";
            }
            // line 386
            yield "                                </li>
                                <li><button type=\"button\" class=\"dropdown-item toggle-batch-btn\" data-batch-id=\"";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 387), "html", null, true);
            yield "\" data-is-active=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 387)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\" data-batch-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 387), "html", null, true);
            yield "\" data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 387))), "html", null, true);
            yield "\">
                                    <i class=\"fas ";
            // line 388
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield " me-2\"></i> ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                </button></li>
                                ";
            // line 390
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 390)) == 0)) &&  !($context["hasIssue"] ?? null))) {
                // line 391
                yield "                                    <li><button type=\"button\" class=\"dropdown-item text-danger delete-batch-btn\" data-batch-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 391), "html", null, true);
                yield "\" data-batch-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 391), "html", null, true);
                yield "\" data-token=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 391))), "html", null, true);
                yield "\"><i class=\"fas fa-trash me-2\"></i> Supprimer</button></li>
                                ";
            }
            // line 393
            yield "                            </ul>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-3\">
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Emplacement</span>
                                ";
            // line 400
            if ((($context["locationDisplay"] ?? null) != "—")) {
                // line 401
                yield "                                    <span class=\"badge bg-info text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locationDisplay"] ?? null), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 403
                yield "                                    <span class=\"text-muted\">—</span>
                                ";
            }
            // line 405
            yield "                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Quantité</span>
                                <div class=\"text-end\">
                                    <span class=\"fw-bold ";
            // line 409
            if ((($tmp = ($context["isLowStock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "text-danger";
            }
            yield "\">
                                        ";
            // line 410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 410), "html", null, true);
            yield "
                                    </span>
                                    <small class=\"text-muted\">/ ";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 412), "html", null, true);
            yield "</small>
                                    <div class=\"progress mt-1\" style=\"width: 100px;\">
                                        <div class=\"progress-bar ";
            // line 414
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 414) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 414)) * 100) <= 10)) {
                yield "bg-danger";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 414) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 414)) * 100) <= 30)) {
                yield "bg-warning";
            } else {
                yield "bg-success";
            }
            yield "\" 
                                             style=\"width: ";
            // line 415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 415) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 415)) * 100)), "html", null, true);
            yield "%\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Prix unitaire</span>
                                <span class=\"fw-bold text-primary\">";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 421), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 421)), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Expiration</span>
                                <div>
                                    ";
            // line 426
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 426)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 427
                yield "                                        <span class=\"fw-bold ";
                if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "text-danger";
                } elseif ((($tmp = ($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "text-warning";
                } else {
                    yield "text-success";
                }
                yield "\">
                                            ";
                // line 428
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 428), "d/m/Y"), "html", null, true);
                yield "
                                        </span>
                                        ";
                // line 430
                if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 431
                    yield "                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                        ";
                } elseif ((($tmp =                 // line 432
($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 433
                    yield "                                            <span class=\"badge bg-warning text-dark ms-1\">Bientôt</span>
                                        ";
                }
                // line 435
                yield "                                    ";
            } else {
                // line 436
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 438
            yield "                                </div>
                            </div>
                        </div>
                        
                        <!-- Section avoir -->
                        ";
            // line 443
            if ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 444
                yield "                        <div class=\"alert alert-danger py-2 mb-0\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <i class=\"fas fa-file-invoice-dollar me-1\"></i>
                                    <span class=\"badge ";
                // line 448
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusBadgeClass", [], "any", false, false, false, 448), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusLabel", [], "any", false, false, false, 448), "html", null, true);
                yield "</span>
                                </div>
                                <div class=\"text-end\">
                                    <small class=\"text-danger\">";
                // line 451
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 451), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 451)), "html", null, true);
                yield "</small>
                                </div>
                            </div>
                        </div>
                        ";
            } else {
                // line 456
                yield "                        <div class=\"alert alert-light py-2 mb-0 text-center\">
                            <small class=\"text-muted\">Aucun problème signalé</small>
                        </div>
                        ";
            }
            // line 460
            yield "                    </div>
                    <div class=\"card-footer bg-white py-2 d-flex justify-content-between\">
                        <span class=\"badge ";
            // line 462
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                            ";
            // line 463
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 463)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                        </span>
                        <small class=\"text-muted\">
                            <i class=\"fas fa-exchange-alt me-1\"></i>";
            // line 466
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 466)), "html", null, true);
            yield " mouvement(s)
                        </small>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 471
        if (!$context['_iterated']) {
            // line 472
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun lot trouvé</h5>
                    <p class=\"text-muted\">Modifiez vos filtres ou créez un achat pour générer des lots</p>
                    <a href=\"";
            // line 477
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
            yield "\" class=\"btn btn-primary mt-2\">
                        <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
                    </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
        yield "    </div>
</div>

<!-- Modale impression -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> lot(s) sélectionné(s)</div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\"><i class=\"fas fa-print me-2\"></i> Imprimer la sélection</button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\"><i class=\"fas fa-print me-2\"></i> Imprimer tous les lots</button>
                </div>
            </div>
            <div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button></div>
        </div>
    </div>
</div>

<!-- Modales toggle et suppression -->
<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBatchBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

";
        yield from [];
    }

    // line 551
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 552
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select2 emplacement
    if (document.getElementById('location-select')) {
        \$('#location-select').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: \"-- Tous les emplacements --\",
            allowClear: true,
            width: '100%'
        });
    }

    // Sélection multiple
    const checkboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');
    
    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
    }
    
    document.getElementById('selectAllBtn')?.addEventListener('click', function() {
        checkboxes.forEach(cb => cb.checked = true);
        updateSelectedCount();
    });
    
    document.getElementById('deselectAllBtn')?.addEventListener('click', function() {
        checkboxes.forEach(cb => cb.checked = false);
        updateSelectedCount();
    });
    
    checkboxes.forEach(cb => cb.addEventListener('change', updateSelectedCount));
    updateSelectedCount();
    
    // Impression
    document.getElementById('print-selected')?.addEventListener('click', function() {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length === 0) { alert('Veuillez sélectionner au moins un lot.'); return; }
        window.open('/admin/stock-batch/print-multiple?ids=' + selected.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    document.getElementById('print-all')?.addEventListener('click', function() {
        const allIds = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (allIds.length === 0) { alert('Aucun lot à imprimer.'); return; }
        window.open('/admin/stock-batch/print-multiple?ids=' + allIds.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    // Toggle statut
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId, isActive = this.dataset.isActive === '1', token = this.dataset.token, batchNumber = this.dataset.batchNumber;
            document.getElementById('toggleBatchMessage').textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${batchNumber}\" ?`;
            document.getElementById('toggleBatchForm').action = `/admin/stock-batch/\${batchId}/toggle`;
            document.getElementById('toggleBatchToken').value = token;
            const btn = document.getElementById('toggleBatchBtn');
            btn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            btn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });
    
    // Suppression
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId, batchNumber = this.dataset.batchNumber, token = this.dataset.token;
            document.getElementById('deleteBatchMessage').innerHTML = `<div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div><p>Supprimer le lot <strong>\${batchNumber}</strong> ?</p><p class=\"text-danger mb-0\"><small>Cette suppression n'est possible que si aucun mouvement de stock n'est associé.</small></p>`;
            document.getElementById('deleteBatchForm').action = `/admin/stock-batch/\${batchId}/delete`;
            document.getElementById('deleteBatchToken').value = token;
            deleteModal.show();
        });
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
        return "admin/stock_batch/index.html.twig";
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
        return array (  929 => 552,  922 => 551,  851 => 483,  839 => 477,  832 => 472,  830 => 471,  820 => 466,  814 => 463,  810 => 462,  806 => 460,  800 => 456,  792 => 451,  784 => 448,  778 => 444,  776 => 443,  769 => 438,  765 => 436,  762 => 435,  758 => 433,  756 => 432,  753 => 431,  751 => 430,  746 => 428,  735 => 427,  733 => 426,  725 => 421,  716 => 415,  706 => 414,  701 => 412,  696 => 410,  690 => 409,  684 => 405,  680 => 403,  674 => 401,  672 => 400,  663 => 393,  653 => 391,  651 => 390,  644 => 388,  634 => 387,  631 => 386,  623 => 382,  615 => 378,  613 => 377,  607 => 374,  603 => 373,  599 => 372,  587 => 363,  582 => 361,  575 => 359,  565 => 356,  561 => 354,  558 => 353,  555 => 352,  552 => 351,  549 => 350,  546 => 349,  541 => 348,  528 => 338,  524 => 337,  515 => 331,  511 => 330,  507 => 329,  503 => 328,  499 => 327,  495 => 326,  485 => 319,  478 => 315,  457 => 297,  453 => 296,  443 => 288,  430 => 286,  426 => 285,  416 => 278,  406 => 271,  402 => 270,  398 => 269,  388 => 262,  384 => 261,  375 => 255,  359 => 242,  340 => 226,  322 => 211,  304 => 196,  282 => 177,  264 => 162,  246 => 147,  225 => 129,  219 => 126,  213 => 123,  202 => 115,  191 => 107,  187 => 106,  179 => 101,  170 => 94,  163 => 93,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/stock_batch/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\index.html.twig");
    }
}
