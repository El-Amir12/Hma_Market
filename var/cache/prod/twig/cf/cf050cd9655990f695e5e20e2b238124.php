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

/* admin/stock_batch/all.html.twig */
class __TwigTemplate_321f6c610218abbafb1ecb5a8e87c2ab extends Template
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
        yield "Gestion globale des lots - HMA Market";
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
    /* Cartes statistiques */
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        overflow: hidden;
        border-radius: 1rem;
        background: white !important;
        border: 1px solid #e9ecef;
    }
    .stat-card:hover {
        transform: translateY(-3px);
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
    .stat-sub {
        font-size: 0.7rem;
        margin-top: 0.25rem;
    }
    
    .issue-badge {
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
        margin-top: 0.25rem;
        display: inline-block;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.05);
        cursor: pointer;
    }
    .progress {
        border-radius: 10px;
        overflow: hidden;
        height: 6px;
    }
    .card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
    }
    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
    }
    .badge {
        font-weight: 500;
    }
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
    }
    .table td {
        vertical-align: middle;
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
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
        height: 36px;
    }
    @media (max-width: 768px) {
        .btn-group { flex-direction: column; }
        .btn-group .btn { margin: 1px 0; }
        .stat-value { font-size: 1.3rem; }
        .stat-icon { width: 40px; height: 40px; }
        .stat-icon i { font-size: 1.3rem; }
    }
    .issue-critical {
        background-color: #dc3545 !important;
        color: white !important;
    }
    .issue-high {
        background-color: #fd7e14 !important;
        color: white !important;
    }
</style>
";
        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 112
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-cubes me-1\"></i> Gestion des lots
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-cubes me-2 text-primary\"></i>
                Gestion globale des lots
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Visualisez et gérez tous les lots de stock de votre entreprise
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-map-marker-alt me-2\"></i> Emplacements
            </a>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> Exporter
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><a class=\"dropdown-item\" href=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 146), "query", [], "any", false, false, false, 146), "all", [], "any", false, false, false, 146)), "html", null, true);
        yield "\"><i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 147), "query", [], "any", false, false, false, 147), "all", [], "any", false, false, false, 147)), "html", null, true);
        yield "\"><i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_excel_template");
        yield "\"><i class=\"fas fa-download me-2\"></i> Télécharger template</a></li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- Cartes statistiques - 2 lignes (4 + 3 = 7 cartes) -->
    <!-- Ligne 1 : 4 cartes -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total lots</div>
                            <div class=\"stat-value text-primary\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 167)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", false, false, false, 167), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-primary bg-opacity-10\">
                            <i class=\"fas fa-boxes fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots actifs</div>
                            <div class=\"stat-value text-success\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 182)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", false, false, false, 182), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-play-circle fa-2x text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Expire bientôt</div>
                            <div class=\"stat-value text-warning\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 197)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", false, false, false, 197), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-hourglass-half fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Unités en stock</div>
                            <div class=\"stat-value text-info\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 212)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", false, false, false, 212), 0)) : (0)), 0, ",", " "), "html", null, true);
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

    <!-- Ligne 2 : 3 cartes -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Lots expirés</div>
                            <div class=\"stat-value text-danger\">";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 231)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", false, false, false, 231), 0)) : (0)), "html", null, true);
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
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Avoirs ouverts</div>
                            <div class=\"stat-value text-secondary\">";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "open_issues", [], "any", true, true, false, 246)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "open_issues", [], "any", false, false, false, 246), 0)) : (0)), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub text-muted mt-1\">";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_issue_amount", [], "any", true, true, false, 247)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_issue_amount", [], "any", false, false, false, 247), 0)) : (0)), ($context["hmaService"] ?? null)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-secondary bg-opacity-10\">
                            <i class=\"fas fa-file-invoice-dollar fa-2x text-secondary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12\">
            <div class=\"card stat-card shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Stock faible</div>
                            <div class=\"stat-value text-warning\">";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "low_stock_batches", [], "any", true, true, false, 262)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "low_stock_batches", [], "any", false, false, false, 262), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-exclamation-triangle fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all");
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
                <!-- Première ligne -->
                <div class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"N° lot ou produit...\" value=\"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 292)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 292), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Produit</label>
                        <select name=\"product_id\" id=\"product-select\" class=\"form-select select2-product\">
                            <option value=\"\">-- Tous les produits --</option>
                            ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 299
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 299), "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "product_id", [], "any", true, true, false, 299)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "product_id", [], "any", false, false, false, 299), "")) : ("")) == CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 299))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 299), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        yield "                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Emplacement</label>
                        <select name=\"location\" id=\"location-select\" class=\"form-select select2-location\">
                            <option value=\"\">-- Tous les emplacements --</option>
                            ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("all_locations", $context)) ? (Twig\Extension\CoreExtension::default(($context["all_locations"] ?? null), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 308
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 308)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", false, false, false, 308), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        yield "                        </select>
                    </div>
                </div>

                <!-- Deuxième ligne -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold small\">Statut lot</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 320
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 320)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 320), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 321
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 321)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 321), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold small\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" ";
        // line 328
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 328)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 328), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                            <option value=\"expiring_soon\" ";
        // line 329
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 329)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 329), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Expire bientôt</option>
                            <option value=\"not_expiring\" ";
        // line 330
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 330), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold small\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 337
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 337)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", false, false, false, 337), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold small\">Avoir</label>
                        <select name=\"has_issue\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 344
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 344)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", false, false, false, 344), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">Avec avoir</option>
                            <option value=\"no\" ";
        // line 345
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", true, true, false, 345)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", false, false, false, 345), "")) : ("")) == "no")) ? ("selected") : (""));
        yield ">Sans avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold small\">Statut avoir</label>
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
                </div>

                <!-- Troisième ligne -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Dates expiration</label>
                        <div class=\"d-flex gap-2\"><input type=\"date\" name=\"date_from\" class=\"form-control\" placeholder=\"Du\" value=\"";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 367)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 367), "")) : ("")), "html", null, true);
        yield "\"><input type=\"date\" name=\"date_to\" class=\"form-control\" placeholder=\"Au\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 367)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 367), "")) : ("")), "html", null, true);
        yield "\"></div>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"batch_number\" ";
        // line 372
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 372)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 372), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                            <option value=\"p.name\" ";
        // line 373
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 373)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 373), "expiry_date")) : ("expiry_date")) == "p.name")) ? ("selected") : (""));
        yield ">Produit</option>
                            <option value=\"expiry_date\" ";
        // line 374
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 374)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 374), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Date expiration</option>
                            <option value=\"current_quantity\" ";
        // line 375
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 375)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 375), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            <option value=\"location\" ";
        // line 376
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 376)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 376), "expiry_date")) : ("expiry_date")) == "location")) ? ("selected") : (""));
        yield ">Emplacement</option>
                            <option value=\"issue_status\" ";
        // line 377
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 377)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 377), "expiry_date")) : ("expiry_date")) == "issue_status")) ? ("selected") : (""));
        yield ">Statut avoir</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold small\">Ordre</label>
                        <select name=\"direction\" class=\"form-select\"><option value=\"asc\" ";
        // line 382
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 382)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 382), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">Croissant ↑</option><option value=\"desc\" ";
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 382)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 382), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
        yield ">Décroissant ↓</option></select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-list me-2\"></i> Liste des lots</h5>
            <div class=\"d-flex gap-2 align-items-center\">
                <span class=\"badge bg-secondary\">";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batches"] ?? null)), "html", null, true);
        yield " lot(s)</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\"><i class=\"fas fa-check-double me-1\"></i> Tout sélectionner</button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\"><i class=\"fas fa-times me-1\"></i> Désélectionner</button>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width:40px\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
                            <th>N° lot</th>
                            <th>Produit</th>
                            <th>Emplacement</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Expiration</th>
                            <th>Avoir</th>
                            <th>Statut lot</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["batches"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 418
            yield "                            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 418) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 418) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 419
            yield "                            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 419) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 419) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 419) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 420
            yield "                            ";
            $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 420) <= 10);
            // line 421
            yield "                            ";
            $context["hasIssue"] = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 421);
            // line 422
            yield "                            ";
            $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 422)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 422), "displayName", [], "any", false, false, false, 422)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 422)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 422)) : ("—"))));
            // line 423
            yield "                            
                            <tr class=\"
                                ";
            // line 425
            if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-danger
                                ";
            } elseif ((($tmp =             // line 426
($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-warning
                                ";
            } elseif ((($tmp =             // line 427
($context["isLowStock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-info
                                ";
            } elseif ((($tmp =             // line 428
($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-light
                                ";
            }
            // line 430
            yield "                            \">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 431), "html", null, true);
            yield "\"></td>
                                <td>
                                    <strong>";
            // line 433
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 433), "html", null, true);
            yield "</strong>
                                    ";
            // line 434
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 434)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<br><small class=\"text-muted\"><i class=\"fas fa-receipt me-1\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 434), "purchase", [], "any", false, false, false, 434), "purchaseNumber", [], "any", false, false, false, 434), "html", null, true);
                yield "</small>";
            }
            // line 435
            yield "                                </td>
                                <td>
                                    <a href=\"";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 437), "id", [], "any", false, false, false, 437)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 437), "name", [], "any", false, false, false, 437)), "truncate", [35], "method", false, false, false, 437), "html", null, true);
            yield "</a>
                                    <br><small class=\"text-muted\"><i class=\"fas fa-barcode me-1\"></i>";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 438), "barcode", [], "any", false, false, false, 438), "html", null, true);
            yield "</small>
                                </td>
                                <td>
                                    ";
            // line 441
            if ((($context["locationDisplay"] ?? null) != "—")) {
                yield "<span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locationDisplay"] ?? null), "html", null, true);
                yield "</span>";
            } else {
                yield "<span class=\"text-muted\">—</span>";
            }
            // line 442
            yield "                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 445), "html", null, true);
            yield "</span>
                                        <small class=\"text-muted\">/ ";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 446), "html", null, true);
            yield "</small>
                                        <div class=\"progress mt-1\" style=\"height:4px\"><div class=\"progress-bar ";
            // line 447
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 447) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 447)) * 100) <= 10)) {
                yield "bg-danger";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 447) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 447)) * 100) <= 30)) {
                yield "bg-warning";
            } else {
                yield "bg-success";
            }
            yield "\" style=\"width:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 447) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 447)) * 100)), "html", null, true);
            yield "%\"></div></div>
                                        ";
            // line 448
            if ((($tmp = ($context["isLowStock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<br><span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>";
            }
            // line 449
            yield "                                    </div>
                                </td>
                                <td>";
            // line 451
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 451), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 451)), "html", null, true);
            yield "</td>
                                <tr>
                                    ";
            // line 453
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 453)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 454
                yield "                                        <div><span class=\"fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 454), "d/m/Y"), "html", null, true);
                yield "</span>
                                        ";
                // line 455
                if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                        ";
                } elseif ((($tmp =                 // line 456
($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<br><span class=\"badge bg-warning text-dark mt-1\">J-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 456), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 456), "days", [], "any", false, false, false, 456), "html", null, true);
                    yield "</span>";
                }
                yield "</div>
                                    ";
            } else {
                // line 457
                yield "<span class=\"text-muted\">—</span>";
            }
            // line 458
            yield "                                </td>
                                <td>
                                    ";
            // line 460
            if ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 461
                yield "                                        <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusBadgeClass", [], "any", false, false, false, 461), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusLabel", [], "any", false, false, false, 461), "html", null, true);
                yield "</span>
                                        ";
                // line 462
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issuePriority", [], "any", false, false, false, 462) == "critical")) {
                    yield "<span class=\"badge bg-danger mt-1 d-block\">Critique</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 463
$context["batch"], "issuePriority", [], "any", false, false, false, 463) == "high")) {
                    yield "<span class=\"badge bg-warning text-dark mt-1 d-block\">Haute</span>";
                }
                // line 464
                yield "                                        <small class=\"text-muted d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 464), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 464)), "html", null, true);
                yield "</small>
                                    ";
            } else {
                // line 465
                yield "<span class=\"text-muted\">—</span>";
            }
            // line 466
            yield "                                </td>
                                <td><span class=\"badge ";
            // line 467
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 467)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 467)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "</span></td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 470)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\"><i class=\"fas fa-print\"></i></a>
                                        <a href=\"";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 471)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                                        <a href=\"";
            // line 472
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 472)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\"><i class=\"fas fa-map-marker-alt\"></i></a>
                                        ";
            // line 473
            if ((($tmp =  !($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 474
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 474)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-danger\" title=\"Signaler un problème\"><i class=\"fas fa-exclamation-triangle\"></i></a>
                                        ";
            } else {
                // line 476
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "activeIssue", [], "any", false, false, false, 476), "id", [], "any", false, false, false, 476)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-info\" title=\"Voir l'avoir\"><i class=\"fas fa-file-invoice-dollar\"></i></a>
                                        ";
            }
            // line 478
            yield "                                        <button type=\"button\" class=\"btn btn-sm btn-outline-info toggle-batch-btn\" data-batch-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 478), "html", null, true);
            yield "\" data-is-active=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 478)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\" data-batch-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 478), "html", null, true);
            yield "\" data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 478))), "html", null, true);
            yield "\"><i class=\"fas ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 478)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield "\"></i></button>
                                        ";
            // line 479
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 479)) == 0)) &&  !($context["hasIssue"] ?? null))) {
                yield "<button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-batch-btn\" data-batch-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 479), "html", null, true);
                yield "\" data-batch-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 479), "html", null, true);
                yield "\" data-token=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 479))), "html", null, true);
                yield "\"><i class=\"fas fa-trash\"></i></button>";
            }
            // line 480
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 483
        if (!$context['_iterated']) {
            // line 484
            yield "                            <tr><td colspan=\"10\" class=\"text-center py-5\"><i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i><p class=\"text-muted mb-0\">Aucun lot trouvé</p><p class=\"text-muted small\">Modifiez vos filtres ou créez des achats pour générer des lots</p></td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        yield "                    </tbody>
                </table>
            </div>
        </div>
        ";
        // line 490
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 491
            yield "        <div class=\"card-footer bg-white\"><nav><ul class=\"pagination justify-content-center mb-0\">
            ";
            // line 492
            if ((($context["currentPage"] ?? null) > 1)) {
                yield "<li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 492), "query", [], "any", false, false, false, 492), "all", [], "any", false, false, false, 492), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
                yield "\"><i class=\"fas fa-chevron-left\"></i> Précédent</a></li>";
            }
            // line 493
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                yield "<li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 493), "query", [], "any", false, false, false, 493), "all", [], "any", false, false, false, 493), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 494
            yield "            ";
            if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                yield "<li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 494), "query", [], "any", false, false, false, 494), "all", [], "any", false, false, false, 494), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
                yield "\">Suivant <i class=\"fas fa-chevron-right\"></i></a></li>";
            }
            // line 495
            yield "        </ul></nav></div>";
        }
        // line 496
        yield "    </div>
</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header bg-primary text-white\"><h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> lot(s) sélectionné(s)</div><div class=\"d-grid gap-2\"><button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\"><i class=\"fas fa-print me-2\"></i> Imprimer la sélection</button><button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\"><i class=\"fas fa-print me-2\"></i> Imprimer tous les lots</button></div></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button></div></div></div></div>
<div class=\"modal fade\" id=\"importExcelModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header bg-success text-white\"><h5 class=\"modal-title\"><i class=\"fas fa-file-excel me-2\"></i> Importer des lots</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> Utilisez l'export pour obtenir le template.</div><form method=\"post\" action=\"";
        // line 501
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_import_excel");
        yield "\" enctype=\"multipart/form-data\"><div class=\"mb-3\"><label class=\"form-label fw-bold\">Fichier Excel (.xlsx)</label><input type=\"file\" name=\"excel_file\" class=\"form-control\" accept=\".xlsx,.xls\" required></div><div class=\"form-check mb-3\"><input type=\"checkbox\" name=\"update_only_location\" class=\"form-check-input\" id=\"updateOnlyLocation\" checked><label class=\"form-check-label\" for=\"updateOnlyLocation\">Mettre à jour uniquement les emplacements</label></div><div class=\"d-grid\"><button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-upload me-2\"></i> Importer</button></div></form></div></div></div></div>
<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\"><h5 class=\"modal-title\">Confirmation</h5><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><p id=\"toggleBatchMessage\"></p></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button><form id=\"toggleBatchForm\" method=\"post\"><input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\"><button type=\"submit\" class=\"btn\" id=\"toggleBatchBtn\"></button></form></div></div></div></div>
<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header bg-danger text-white\"><h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><p id=\"deleteBatchMessage\"></p></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button><form id=\"deleteBatchForm\" method=\"post\"><input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\"><button type=\"submit\" class=\"btn btn-danger\">Supprimer</button></form></div></div></div></div>

";
        yield from [];
    }

    // line 507
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 508
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    \$('#product-select, #location-select').select2({ theme: 'bootstrap-5', language: 'fr', allowClear: true, width: '100%' });
    const selectAll = document.getElementById('select-all-checkbox'), checkboxes = document.querySelectorAll('.batch-checkbox'), countSpan = document.getElementById('selectedCount');
    function updateCount() { const s = document.querySelectorAll('.batch-checkbox:checked').length; if(countSpan) countSpan.textContent = s; if(selectAll) selectAll.checked = checkboxes.length === s; }
    if(selectAll) selectAll.addEventListener('change', function() { checkboxes.forEach(cb => cb.checked = selectAll.checked); updateCount(); });
    document.getElementById('selectAllBtn')?.addEventListener('click', () => { checkboxes.forEach(cb => cb.checked = true); if(selectAll) selectAll.checked = true; updateCount(); });
    document.getElementById('deselectAllBtn')?.addEventListener('click', () => { checkboxes.forEach(cb => cb.checked = false); if(selectAll) selectAll.checked = false; updateCount(); });
    checkboxes.forEach(cb => cb.addEventListener('change', updateCount));
    updateCount();
    document.getElementById('print-selected')?.addEventListener('click', () => { const s = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value); if(s.length) window.open('/admin/stock-batch/print-multiple?ids=' + s.join(','), '_blank'); else alert('Sélectionnez au moins un lot.'); });
    document.getElementById('print-all')?.addEventListener('click', () => { const all = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value); if(all.length) window.open('/admin/stock-batch/print-multiple?ids=' + all.join(','), '_blank'); else alert('Aucun lot à imprimer.'); });
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => btn.addEventListener('click', function() {
        const id = this.dataset.batchId, isActive = this.dataset.isActive === '1', token = this.dataset.token, num = this.dataset.batchNumber;
        document.getElementById('toggleBatchMessage').innerText = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${num}\" ?`;
        document.getElementById('toggleBatchForm').action = `/admin/stock-batch/\${id}/toggle`;
        document.getElementById('toggleBatchToken').value = token;
        const btn2 = document.getElementById('toggleBatchBtn');
        btn2.className = isActive ? 'btn btn-danger' : 'btn btn-success';
        btn2.textContent = isActive ? 'Désactiver' : 'Activer';
        toggleModal.show();
    }));
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => btn.addEventListener('click', function() {
        document.getElementById('deleteBatchMessage').innerHTML = `<div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div><p>Supprimer le lot <strong>\${this.dataset.batchNumber}</strong> ?</p><p class=\"text-danger mb-0\"><small>Cette suppression n'est possible que si aucun mouvement de stock n'est associé.</small></p>`;
        document.getElementById('deleteBatchForm').action = '/admin/stock-batch/' + this.dataset.batchId + '/delete';
        document.getElementById('deleteBatchToken').value = this.dataset.token;
        deleteModal.show();
    }));
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
        return "admin/stock_batch/all.html.twig";
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
        return array (  943 => 508,  936 => 507,  926 => 501,  919 => 496,  916 => 495,  909 => 494,  893 => 493,  887 => 492,  884 => 491,  882 => 490,  876 => 486,  869 => 484,  867 => 483,  860 => 480,  850 => 479,  837 => 478,  831 => 476,  825 => 474,  823 => 473,  819 => 472,  815 => 471,  811 => 470,  803 => 467,  800 => 466,  797 => 465,  791 => 464,  787 => 463,  783 => 462,  776 => 461,  774 => 460,  770 => 458,  767 => 457,  758 => 456,  754 => 455,  749 => 454,  747 => 453,  742 => 451,  738 => 449,  734 => 448,  722 => 447,  718 => 446,  714 => 445,  709 => 442,  701 => 441,  695 => 438,  689 => 437,  685 => 435,  679 => 434,  675 => 433,  670 => 431,  667 => 430,  662 => 428,  658 => 427,  654 => 426,  650 => 425,  646 => 423,  643 => 422,  640 => 421,  637 => 420,  634 => 419,  631 => 418,  626 => 417,  600 => 394,  583 => 382,  575 => 377,  571 => 376,  567 => 375,  563 => 374,  559 => 373,  555 => 372,  545 => 367,  520 => 345,  516 => 344,  506 => 337,  496 => 330,  492 => 329,  488 => 328,  478 => 321,  474 => 320,  462 => 310,  449 => 308,  445 => 307,  437 => 301,  424 => 299,  420 => 298,  411 => 292,  394 => 278,  375 => 262,  357 => 247,  353 => 246,  335 => 231,  313 => 212,  295 => 197,  277 => 182,  259 => 167,  238 => 149,  233 => 147,  229 => 146,  218 => 138,  196 => 119,  187 => 112,  180 => 111,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/stock_batch/all.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\all.html.twig");
    }
}
