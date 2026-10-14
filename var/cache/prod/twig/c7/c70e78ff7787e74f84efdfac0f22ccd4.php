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
class __TwigTemplate_1d84f169a24ea7608faf744e564d4748 extends Template
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
/* ============================================
   CARTES STATISTIQUES
   ============================================ */
.stat-card {
    border-radius: 0.75rem;
    transition: all 0.2s;
}
.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08) !important;
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

/* ============================================
   TABLEAU DES PRODUITS
   ============================================ */
.products-table {
    margin: 0;
}

.products-table thead th {
    font-weight: 700;
    color: #475569;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem;
    border-bottom: 2px solid #e2e8f0;
    background: #f8fafc;
    white-space: nowrap;
}

.products-table tbody td {
    padding: 1rem;
    vertical-align: middle;
    border-bottom: 1px solid #f1f5f9;
}

.product-info-cell {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.product-avatar {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 10px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1rem;
}

/* ============================================
   RESPONSIVE MOBILE
   ============================================ */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    /* Header */
    .page-header-actions {
        flex-direction: column;
        align-items: stretch !important;
        gap: 0.75rem !important;
    }
    
    .page-header-actions .d-flex {
        flex-direction: column;
        width: 100%;
    }
    
    .page-header-actions .btn {
        width: 100%;
    }
    
    /* Stats cards */
    .stat-card .card-body h5 {
        font-size: 1rem;
    }
    
    .stat-card .fa-2x {
        font-size: 1.25rem !important;
    }
    
    /* Tableau produits -> Cartes */
    .products-table thead {
        display: none;
    }
    
    .products-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    
    .products-table tbody td {
        display: block;
        padding: 0.5rem 0 !important;
        border: none;
        text-align: left !important;
    }
    
    .products-table tbody td::before {
        content: attr(data-label);
        display: block;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #94a3b8;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 0.35rem;
    }
    
    .products-table tbody td[data-label=\"Produit\"] {
        padding-bottom: 0.75rem !important;
        border-bottom: 1px solid #f1f5f9;
        margin-bottom: 0.5rem;
    }
    
    .products-table tbody td[data-label=\"Produit\"]::before {
        display: none;
    }
    
    .products-table tbody td[data-label=\"Statut\"] {
        text-align: right !important;
        padding-top: 0.5rem !important;
        border-top: 1px solid #f1f5f9;
        margin-top: 0.5rem;
    }
    
    .products-table tbody td[data-label=\"Statut\"]::before {
        display: none;
    }
    
    /* Empty state */
    .products-table tbody td[colspan] {
        text-align: center !important;
        padding: 2rem 1rem !important;
    }
    
    .products-table tbody td[colspan]::before {
        display: none;
    }
    
    /* Summary cards */
    .summary-card h3 {
        font-size: 1.25rem;
    }
    
    .summary-card small {
        font-size: 0.7rem;
    }
}

/* Très petits mobiles */
@media (max-width: 375.98px) {
    .stat-card .card-body {
        padding: 0.75rem;
    }
    
    .stat-card .card-body h5 {
        font-size: 0.9rem;
    }
    
    .stat-card small {
        font-size: 0.65rem;
    }
    
    .product-avatar {
        width: 34px;
        height: 34px;
        min-width: 34px;
        font-size: 0.85rem;
    }
}
</style>
";
        yield from [];
    }

    // line 219
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 220
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-start mb-4 flex-wrap gap-3 page-header-actions\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-2\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 227
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 236), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-clipboard-list text-primary me-2\"></i>
                Inventaire ";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 241), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 245
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
            ";
        // line 248
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "status", [], "any", false, false, false, 248) == "in_progress")) {
            // line 249
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_count", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "id", [], "any", false, false, false, 249)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-clipboard-list me-1\"></i> Continuer la saisie
                </a>
            ";
        }
        // line 253
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "status", [], "any", false, false, false, 253) == "completed")) {
            // line 254
            yield "                <button type=\"button\" class=\"btn btn-outline-success\" onclick=\"window.print()\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </button>
            ";
        }
        // line 258
        yield "        </div>
    </div>

    <!-- Informations générales -->
    <div class=\"row g-3 g-md-4 mb-4\">
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">N° inventaire</small>
                            <h6 class=\"mb-0 fw-bold text-truncate\">";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 269), "html", null, true);
        yield "</h6>
                        </div>
                        <i class=\"fas fa-hashtag fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">Date</small>
                            <h6 class=\"mb-0 fw-bold\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryDate", [], "any", false, false, false, 282), "d/m/Y"), "html", null, true);
        yield "</h6>
                        </div>
                        <i class=\"fas fa-calendar-alt fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">Statut</small>
                            <span class=\"badge ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "statusBadgeClass", [], "any", false, false, false, 295), "html", null, true);
        yield " status-badge\">
                                <i class=\"fas ";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "statusIcon", [], "any", false, false, false, 296), "html", null, true);
        yield " me-1\"></i>
                                ";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "statusLabel", [], "any", false, false, false, 297), "html", null, true);
        yield "
                            </span>
                        </div>
                        <i class=\"fas fa-info-circle fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">Progression</small>
                            <h6 class=\"mb-0 fw-bold\">";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["progress"] ?? null), "html", null, true);
        yield "%</h6>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                    <div class=\"progress progress-custom mt-2\">
                        <div class=\"progress-bar bg-primary\" style=\"width: ";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["progress"] ?? null), "html", null, true);
        yield "%\"></div>
                    </div>
                    <small class=\"text-muted\" style=\"font-size: 0.7rem;\">";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["countedItems"] ?? null), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
        yield " comptés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Détails supplémentaires -->
    <div class=\"row g-3 g-md-4 mb-4\">
        <div class=\"col-12 col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6\">
                        <i class=\"fas fa-user me-2 text-primary\"></i>
                        Informations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Créé par</small>
                            <div class=\"fw-bold text-truncate\">";
        // line 338
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "createdBy", [], "any", false, false, false, 338), "fullName", [], "any", false, false, false, 338)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "createdBy", [], "any", false, false, false, 338), "fullName", [], "any", false, false, false, 338), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "createdBy", [], "any", false, false, false, 338), "email", [], "any", false, false, false, 338), "html", null, true)));
        yield "</div>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Créé le</small>
                            <div class=\"fw-bold\">";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "createdAt", [], "any", false, false, false, 342), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-12\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Emplacement</small>
                            <div class=\"fw-bold\">";
        // line 346
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 346)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 346), "displayName", [], "any", false, false, false, 346), "html", null, true)) : ("Tous les emplacements"));
        yield "</div>
                        </div>
                        ";
        // line 348
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "validatedBy", [], "any", false, false, false, 348)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 349
            yield "                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Validé par</small>
                            <div class=\"fw-bold text-success text-truncate\">";
            // line 351
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "validatedBy", [], "any", false, false, false, 351), "fullName", [], "any", false, false, false, 351)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "validatedBy", [], "any", false, false, false, 351), "fullName", [], "any", false, false, false, 351), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "validatedBy", [], "any", false, false, false, 351), "email", [], "any", false, false, false, 351), "html", null, true)));
            yield "</div>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Validé le</small>
                            <div class=\"fw-bold text-success\">";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "validatedAt", [], "any", false, false, false, 355), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 358
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "notes", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 359
            yield "                        <div class=\"col-12\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Notes</small>
                            <div class=\"fw-bold\">";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "notes", [], "any", false, false, false, 361), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 364
        yield "                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6\">
                        <i class=\"fas fa-chart-pie me-2 text-primary\"></i>
                        Résumé
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center g-2\">
                        <div class=\"col-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded summary-card\">
                                <h3 class=\"mb-0 text-primary\">";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Produits</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded summary-card\">
                                <h3 class=\"mb-0 text-warning\">";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["differences"] ?? null)), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Écarts</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded summary-card\">
                                <h3 class=\"mb-0 text-success\">";
        // line 392
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
            <h5 class=\"mb-0 fw-semibold fs-6\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Produits inventoriés
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table align-middle mb-0 products-table\">
                    <thead>
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
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 425
            yield "                            ";
            $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 425);
            // line 426
            yield "                            ";
            $context["diffClass"] = (((($context["diff"] ?? null) > 0)) ? ("difference-positive") : ((((($context["diff"] ?? null) < 0)) ? ("difference-negative") : ("difference-zero"))));
            // line 427
            yield "                            <tr>
                                <td data-label=\"Produit\">
                                    <div class=\"product-info-cell\">
                                        <div class=\"product-avatar\">
                                            ";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 431), "name", [], "any", false, false, false, 431))), "html", null, true);
            yield "
                                        </div>
                                        <div class=\"min-w-0\">
                                            <div class=\"fw-bold text-truncate\">";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 434), "name", [], "any", false, false, false, 434), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\">
                                                ";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 436), "category", [], "any", false, true, false, 436), "name", [], "any", true, true, false, 436)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 436), "category", [], "any", false, false, false, 436), "name", [], "any", false, false, false, 436), "Sans catégorie")) : ("Sans catégorie")), "html", null, true);
            yield "
                                            </small>
                                        </div>
                                    </div>
                                </td>
                                <td data-label=\"Code-barres\">
                                    <code class=\"small\">";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 442), "barcode", [], "any", false, false, false, 442), "html", null, true);
            yield "</code>
                                </td>
                                <td data-label=\"Stock attendu\" class=\"text-end\">
                                    <span class=\"fw-bold\">";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expectedQuantity", [], "any", false, false, false, 445), 0, ",", " "), "html", null, true);
            yield "</span>
                                </td>
                                <td data-label=\"Stock compté\" class=\"text-end\">
                                    ";
            // line 448
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 448) > 0)) {
                // line 449
                yield "                                        <span class=\"fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 449), 0, ",", " "), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 451
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 453
            yield "                                </td>
                                <td data-label=\"Écart\" class=\"text-end\">
                                    ";
            // line 455
            if ((($context["diff"] ?? null) != 0)) {
                // line 456
                yield "                                        <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["diffClass"] ?? null), "html", null, true);
                yield "\">
                                            ";
                // line 457
                yield (((($context["diff"] ?? null) > 0)) ? ("+") : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["diff"] ?? null), 0, ",", " "), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 460
                yield "                                        <span class=\"badge difference-zero\">0</span>
                                    ";
            }
            // line 462
            yield "                                </td>
                                <td data-label=\"Statut\">
                                    ";
            // line 464
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 464) > 0)) {
                // line 465
                yield "                                        <span class=\"badge bg-success\">Compté</span>
                                    ";
            } else {
                // line 467
                yield "                                        <span class=\"badge bg-warning text-dark\">À compter</span>
                                    ";
            }
            // line 469
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 471
        if (!$context['_iterated']) {
            // line 472
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun produit dans cet inventaire</p>
                                    <a href=\"";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_add_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "id", [], "any", false, false, false, 476)]), "html", null, true);
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
        // line 482
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
        return array (  712 => 482,  700 => 476,  694 => 472,  692 => 471,  686 => 469,  682 => 467,  678 => 465,  676 => 464,  672 => 462,  668 => 460,  661 => 457,  656 => 456,  654 => 455,  650 => 453,  646 => 451,  640 => 449,  638 => 448,  632 => 445,  626 => 442,  617 => 436,  612 => 434,  606 => 431,  600 => 427,  597 => 426,  594 => 425,  589 => 424,  554 => 392,  545 => 386,  536 => 380,  518 => 364,  512 => 361,  508 => 359,  505 => 358,  499 => 355,  492 => 351,  488 => 349,  486 => 348,  481 => 346,  474 => 342,  467 => 338,  442 => 318,  437 => 316,  429 => 311,  412 => 297,  408 => 296,  404 => 295,  388 => 282,  372 => 269,  359 => 258,  353 => 254,  350 => 253,  342 => 249,  340 => 248,  334 => 245,  327 => 241,  319 => 236,  312 => 232,  304 => 227,  295 => 220,  288 => 219,  72 => 7,  65 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/inventory/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\show.html.twig");
    }
}
