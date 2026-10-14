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

/* stock/adjustment/index.html.twig */
class __TwigTemplate_8039cf73854075b69360ade2a03bc4ea extends Template
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
        yield "Ajustements de stock - HMA Market";
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
       STAT CARDS
       ============================================ */
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
        font-size: 1.75rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.1;
    }
    .stat-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-card .stat-sub {
        font-size: 0.68rem;
        margin-top: 0.25rem;
        opacity: 0.85;
    }
    .stat-icon {
        width: 46px;
        height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
        flex-shrink: 0;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
        color: white;
    }
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-success .stat-icon,
    .card-bg-danger .stat-icon,
    .card-bg-primary .stat-icon,
    .card-bg-info .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    .card-bg-success .stat-value,
    .card-bg-danger .stat-value,
    .card-bg-primary .stat-value,
    .card-bg-info .stat-value {
        color: white;
    }
    .card-bg-success .text-muted,
    .card-bg-danger .text-muted,
    .card-bg-primary .text-muted,
    .card-bg-info .text-muted {
        color: rgba(255,255,255,0.85) !important;
    }

    /* ============================================
       TABLEAU
       ============================================ */
    .table-adjustments td {
        vertical-align: middle;
    }
    .badge-type {
        font-size: 0.72rem;
        padding: 0.35rem 0.6rem;
        font-weight: 600;
    }
    .reason-text {
        max-width: 200px;
        display: inline-block;
        word-break: break-word;
    }

    /* ============================================
       BOUTONS D'ACTION
       ============================================ */
    .btn-icon-sm {
        width: 32px;
        height: 32px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
    }

    /* ============================================
       CARTES MOBILE (à la place du tableau)
       ============================================ */
    .adjustment-card-mobile {
        background: #fff;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        padding: 1rem;
        margin-bottom: 0.75rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.04);
        position: relative;
        transition: box-shadow 0.2s;
    }
    .adjustment-card-mobile:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .adjustment-card-mobile::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 4px;
        border-radius: 12px 0 0 12px;
    }
    .adjustment-card-mobile.type-in::before {
        background: #10b981;
    }
    .adjustment-card-mobile.type-out::before {
        background: #ef4444;
    }

    .adjustment-card-mobile .mobile-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px dashed #e9ecef;
    }
    .adjustment-card-mobile .mobile-header-left {
        flex-grow: 1;
        min-width: 0;
    }
    .adjustment-card-mobile .mobile-date {
        font-size: 0.72rem;
        color: #64748b;
        display: flex;
        align-items: center;
        gap: 0.25rem;
        margin-bottom: 0.35rem;
    }
    .adjustment-card-mobile .mobile-product {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.92rem;
        line-height: 1.3;
        margin-bottom: 0.15rem;
    }
    .adjustment-card-mobile .mobile-barcode {
        font-size: 0.7rem;
        color: #94a3b8;
        font-family: 'Courier New', monospace;
    }

    .adjustment-card-mobile .mobile-qty {
        flex-shrink: 0;
        text-align: right;
        padding: 0.25rem 0.5rem;
        border-radius: 8px;
        font-weight: 800;
        font-size: 1.1rem;
        line-height: 1.1;
        min-width: 70px;
    }
    .adjustment-card-mobile.type-in .mobile-qty {
        background: #d1fae5;
        color: #065f46;
    }
    .adjustment-card-mobile.type-out .mobile-qty {
        background: #fee2e2;
        color: #991b1b;
    }

    .adjustment-card-mobile .mobile-rows {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .adjustment-card-mobile .mobile-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.82rem;
    }
    .adjustment-card-mobile .mobile-row-label {
        color: #64748b;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        gap: 0.35rem;
    }
    .adjustment-card-mobile .mobile-row-value {
        color: #1e293b;
        font-weight: 600;
        text-align: right;
        word-break: break-word;
    }
    .adjustment-card-mobile .mobile-reason {
        background: #f8fafc;
        border-radius: 8px;
        padding: 0.55rem 0.75rem;
        font-size: 0.78rem;
        color: #475569;
        margin-top: 0.5rem;
        border-left: 3px solid #cbd5e1;
    }

    .adjustment-card-mobile .mobile-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 0.75rem;
        padding-top: 0.75rem;
        border-top: 1px dashed #e9ecef;
    }
    .adjustment-card-mobile .mobile-actions .btn {
        flex: 1;
        font-size: 0.8rem;
        padding: 0.5rem;
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }

        .page-header-flex {
            flex-direction: column !important;
            align-items: stretch !important;
            gap: 1rem;
        }
        .page-header-flex .btn-primary {
            width: 100%;
            justify-content: center;
        }
        h1.h3 {
            font-size: 1.15rem;
        }

        .stat-card .stat-value {
            font-size: 1.4rem;
        }
        .stat-card .stat-label {
            font-size: 0.65rem;
        }
        .stat-icon {
            width: 40px;
            height: 40px;
        }
        .stat-icon i {
            font-size: 1.3rem !important;
        }

        .filter-form .col-md-3 {
            width: 100%;
        }

        .table-responsive {
            display: none;
        }
    }

    @media (min-width: 769px) {
        .adjustment-cards-mobile {
            display: none;
        }
    }
</style>
";
        yield from [];
    }

    // line 299
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 300
        yield "<div class=\"container-fluid px-2 px-md-4 py-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 page-header-flex flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 310
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i>
                            <span class=\"d-none d-sm-inline\">Tableau de bord</span>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-calculator me-1\"></i> Ajustements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Ajustements de stock
            </h1>
            <p class=\"text-muted mt-2 mb-0 small d-none d-md-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les entrées et sorties manuelles de stock (casse, perte, surplus, etc.)
            </p>
        </div>
        <div>
            <a href=\"";
        // line 330
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvel ajustement
            </a>
        </div>
    </div>

    <!-- ==========================================
         STATISTIQUES
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Entrées (+)</div>
                            <div class=\"stat-value\">";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_in", [], "any", true, true, false, 346)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_in", [], "any", false, false, false, 346), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "count_in", [], "any", true, true, false, 347)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "count_in", [], "any", false, false, false, 347), 0)) : (0)), "html", null, true);
        yield " mouvement(s)</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-plus-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-danger shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Sorties (-)</div>
                            <div class=\"stat-value\">";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_out", [], "any", true, true, false, 362)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_out", [], "any", false, false, false, 362), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "count_out", [], "any", true, true, false, 363)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "count_out", [], "any", false, false, false, 363), 0)) : (0)), "html", null, true);
        yield " mouvement(s)</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-minus-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Mouvements</div>
                            <div class=\"stat-value\">";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_movements", [], "any", true, true, false, 378)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_movements", [], "any", false, false, false, 378), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">ajustements</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Quantité</div>
                            <div class=\"stat-value\">";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 394)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", false, false, false, 394), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">unités concernées</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-boxes fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         FILTRES
    ========================================== -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 fw-semibold small\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <form method=\"get\" class=\"row g-2 g-md-3 filter-form\">
                <div class=\"col-12 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Type</label>
                    <select name=\"type\" class=\"form-select form-select-sm\">
                        <option value=\"\">Tous</option>
                        <option value=\"in\" ";
        // line 421
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", false, false, false, 421) == "in")) ? ("selected") : (""));
        yield ">Entrées (+)</option>
                        <option value=\"out\" ";
        // line 422
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", false, false, false, 422) == "out")) ? ("selected") : (""));
        yield ">Sorties (-)</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" value=\"";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 427), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" value=\"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 431), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-12 col-md-3 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm flex-grow-1\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    ";
        // line 437
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", false, false, false, 437) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 437)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 437))) {
            // line 438
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
            yield "\" class=\"btn btn-outline-secondary btn-sm\" title=\"Effacer les filtres\">
                            <i class=\"fas fa-undo\"></i>
                        </a>
                    ";
        }
        // line 442
        yield "                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         LISTE DES AJUSTEMENTS
    ========================================== -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold small\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des ajustements
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["adjustments"] ?? null)), "html", null, true);
        yield " résultat(s)</span>
        </div>

        ";
        // line 459
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["adjustments"] ?? null)) > 0)) {
            // line 460
            yield "            ";
            // line 463
            yield "            <div class=\"card-body p-0 table-responsive d-none d-md-block\">
                <table class=\"table table-hover align-middle mb-0 table-adjustments\">
                    <thead class=\"table-light\">
                        <tr>
                            <th class=\"ps-3\">Date</th>
                            <th>Type</th>
                            <th>Produit</th>
                            <th>N° lot</th>
                            <th class=\"text-end\">Quantité</th>
                            <th>Raison</th>
                            <th>Utilisateur</th>
                            <th class=\"text-center\">Justificatif</th>
                            <th class=\"text-center pe-3\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 479
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["adjustments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 480
                yield "                            <tr>
                                <td class=\"ps-3\">
                                    <div class=\"fw-bold small\">";
                // line 482
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdAt", [], "any", false, false, false, 482), "d/m/Y"), "html", null, true);
                yield "</div>
                                    <small class=\"text-muted\">";
                // line 483
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdAt", [], "any", false, false, false, 483), "H:i"), "html", null, true);
                yield "</small>
                                </td>
                                <td>
                                    <span class=\"badge ";
                // line 486
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeBadgeClass", [], "any", false, false, false, 486), "html", null, true);
                yield " badge-type\">
                                        <i class=\"";
                // line 487
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeIcon", [], "any", false, false, false, 487), "html", null, true);
                yield " me-1\"></i>
                                        ";
                // line 488
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeLabel", [], "any", false, false, false, 488), "html", null, true);
                yield "
                                    </span>
                                </td>
                                <td>
                                    <div class=\"fw-bold small\">";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 492), "product", [], "any", false, false, false, 492), "name", [], "any", false, false, false, 492)), "truncate", [35], "method", false, false, false, 492), "html", null, true);
                yield "</div>
                                    <small class=\"text-muted\">";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 493), "product", [], "any", false, false, false, 493), "barcode", [], "any", false, false, false, 493), "html", null, true);
                yield "</small>
                                </td>
                                <td>
                                    <code class=\"small\">";
                // line 496
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 496), "batchNumber", [], "any", false, false, false, 496)), "truncate", [20], "method", false, false, false, 496), "html", null, true);
                yield "</code>
                                </td>
                                <td class=\"text-end\">
                                    <span class=\"fw-bold ";
                // line 499
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, false, 499) == "in")) ? ("text-success") : ("text-danger"));
                yield "\">
                                        ";
                // line 500
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, false, 500) == "in")) ? ("+") : ("-"));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "quantity", [], "any", false, false, false, 500), 0, ",", " "), "html", null, true);
                yield "
                                    </span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">";
                // line 504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "reason", [], "any", false, false, false, 504)), "truncate", [45], "method", false, false, false, 504), "html", null, true);
                yield "</small>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>";
                // line 509
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 509), "fullName", [], "any", false, false, false, 509)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 509), "fullName", [], "any", false, false, false, 509), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 509), "email", [], "any", false, false, false, 509)), "truncate", [20], "method", false, false, false, 509), "html", null, true)));
                yield "</small>
                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    ";
                // line 514
                yield "                                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "justificationFile", [], "any", false, false, false, 514)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 515
                    yield "                                        ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "justificationFile", [], "any", false, false, false, 515), "/");
                    // line 516
                    yield "                                        ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["parts"] ?? null)) >= 3)) {
                        // line 517
                        yield "                                            ";
                        $context["filename"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["parts"] ?? null), 2), "/");
                        // line 518
                        yield "                                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_upload", ["folder" => (($_v0 =                         // line 519
($context["parts"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "companyId" => (($_v1 =                         // line 520
($context["parts"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[1] ?? null) : null), "filename" =>                         // line 521
($context["filename"] ?? null)]), "html", null, true);
                        // line 522
                        yield "\" 
                                               target=\"_blank\" 
                                               class=\"btn btn-sm btn-outline-info btn-icon-sm\" 
                                               title=\"Voir le justificatif\">
                                                <i class=\"fas fa-paperclip\"></i>
                                            </a>
                                        ";
                    } else {
                        // line 529
                        yield "                                            <span class=\"text-muted small\">—</span>
                                        ";
                    }
                    // line 531
                    yield "                                    ";
                } else {
                    // line 532
                    yield "                                        <span class=\"text-muted small\">—</span>
                                    ";
                }
                // line 534
                yield "                                </td>
                                <td class=\"text-center pe-3\">
                                    <a href=\"";
                // line 536
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "id", [], "any", false, false, false, 536)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm btn-outline-primary btn-icon-sm\" 
                                       title=\"Voir le détail\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['adjustment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 544
            yield "                    </tbody>
                </table>
            </div>

            ";
            // line 551
            yield "            <div class=\"card-body p-2 adjustment-cards-mobile\">
                ";
            // line 552
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["adjustments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 553
                yield "                    <div class=\"adjustment-card-mobile type-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, false, 553), "html", null, true);
                yield "\">
                        <div class=\"mobile-header\">
                            <div class=\"mobile-header-left\">
                                <div class=\"mobile-date\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                    ";
                // line 558
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdAt", [], "any", false, false, false, 558), "d/m/Y"), "html", null, true);
                yield " · ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdAt", [], "any", false, false, false, 558), "H:i"), "html", null, true);
                yield "
                                </div>
                                <div class=\"mobile-product\">
                                    ";
                // line 561
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 561), "product", [], "any", false, false, false, 561), "name", [], "any", false, false, false, 561)), "truncate", [35], "method", false, false, false, 561), "html", null, true);
                yield "
                                </div>
                                <div class=\"mobile-barcode\">
                                    ";
                // line 564
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 564), "product", [], "any", false, false, false, 564), "barcode", [], "any", false, false, false, 564), "html", null, true);
                yield "
                                </div>
                            </div>
                            <div class=\"mobile-qty\">
                                ";
                // line 568
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, false, 568) == "in")) ? ("+") : ("-"));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "quantity", [], "any", false, false, false, 568), 0, ",", " "), "html", null, true);
                yield "
                            </div>
                        </div>

                        <div class=\"mobile-rows\">
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-tag\"></i> Type
                                </span>
                                <span class=\"mobile-row-value\">
                                    <span class=\"badge ";
                // line 578
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeBadgeClass", [], "any", false, false, false, 578), "html", null, true);
                yield " badge-type\">
                                        <i class=\"";
                // line 579
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeIcon", [], "any", false, false, false, 579), "html", null, true);
                yield " me-1\"></i>
                                        ";
                // line 580
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeLabel", [], "any", false, false, false, 580), "html", null, true);
                yield "
                                    </span>
                                </span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-barcode\"></i> N° lot
                                </span>
                                <span class=\"mobile-row-value\">
                                    <code class=\"small\">";
                // line 589
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 589), "batchNumber", [], "any", false, false, false, 589)), "truncate", [20], "method", false, false, false, 589), "html", null, true);
                yield "</code>
                                </span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-user\"></i> Utilisateur
                                </span>
                                <span class=\"mobile-row-value\">
                                    ";
                // line 597
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 597), "fullName", [], "any", false, false, false, 597)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 597), "fullName", [], "any", false, false, false, 597), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 597), "email", [], "any", false, false, false, 597)), "truncate", [20], "method", false, false, false, 597), "html", null, true)));
                yield "
                                </span>
                            </div>
                        </div>

                        ";
                // line 602
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "reason", [], "any", false, false, false, 602)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 603
                    yield "                            <div class=\"mobile-reason\">
                                <i class=\"fas fa-comment me-1\"></i>
                                ";
                    // line 605
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "reason", [], "any", false, false, false, 605)), "truncate", [100], "method", false, false, false, 605), "html", null, true);
                    yield "
                            </div>
                        ";
                }
                // line 608
                yield "
                        <div class=\"mobile-actions\">
                            <a href=\"";
                // line 610
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "id", [], "any", false, false, false, 610)]), "html", null, true);
                yield "\" 
                               class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-eye me-1\"></i> Voir
                            </a>
                            ";
                // line 615
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "justificationFile", [], "any", false, false, false, 615)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 616
                    yield "                                ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "justificationFile", [], "any", false, false, false, 616), "/");
                    // line 617
                    yield "                                ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["parts"] ?? null)) >= 3)) {
                        // line 618
                        yield "                                    ";
                        $context["filename"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["parts"] ?? null), 2), "/");
                        // line 619
                        yield "                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_upload", ["folder" => (($_v2 =                         // line 620
($context["parts"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null), "companyId" => (($_v3 =                         // line 621
($context["parts"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[1] ?? null) : null), "filename" =>                         // line 622
($context["filename"] ?? null)]), "html", null, true);
                        // line 623
                        yield "\" 
                                       target=\"_blank\" 
                                       class=\"btn btn-outline-info\">
                                        <i class=\"fas fa-paperclip me-1\"></i> Justif.
                                    </a>
                                ";
                    }
                    // line 629
                    yield "                            ";
                }
                // line 630
                yield "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['adjustment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 633
            yield "            </div>
        ";
        } else {
            // line 635
            yield "            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-calculator fa-3x text-muted mb-3 opacity-50\"></i>
                <p class=\"text-muted mb-0\">Aucun ajustement trouvé</p>
                <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel ajustement</p>
                <a href=\"";
            // line 639
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_new");
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-1\"></i> Créer un ajustement
                </a>
            </div>
        ";
        }
        // line 644
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 648
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 649
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "stock/adjustment/index.html.twig";
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
        return array (  924 => 649,  917 => 648,  910 => 644,  902 => 639,  896 => 635,  892 => 633,  884 => 630,  881 => 629,  873 => 623,  871 => 622,  870 => 621,  869 => 620,  867 => 619,  864 => 618,  861 => 617,  858 => 616,  855 => 615,  848 => 610,  844 => 608,  838 => 605,  834 => 603,  832 => 602,  824 => 597,  813 => 589,  801 => 580,  797 => 579,  793 => 578,  779 => 568,  772 => 564,  766 => 561,  758 => 558,  749 => 553,  745 => 552,  742 => 551,  736 => 544,  722 => 536,  718 => 534,  714 => 532,  711 => 531,  707 => 529,  698 => 522,  696 => 521,  695 => 520,  694 => 519,  692 => 518,  689 => 517,  686 => 516,  683 => 515,  680 => 514,  673 => 509,  665 => 504,  657 => 500,  653 => 499,  647 => 496,  641 => 493,  637 => 492,  630 => 488,  626 => 487,  622 => 486,  616 => 483,  612 => 482,  608 => 480,  604 => 479,  586 => 463,  584 => 460,  582 => 459,  576 => 456,  560 => 442,  552 => 438,  550 => 437,  541 => 431,  534 => 427,  526 => 422,  522 => 421,  492 => 394,  473 => 378,  455 => 363,  451 => 362,  433 => 347,  429 => 346,  410 => 330,  387 => 310,  375 => 300,  368 => 299,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/adjustment/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\adjustment\\index.html.twig");
    }
}
