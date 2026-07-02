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

/* reports/financial/index.html.twig */
class __TwigTemplate_530d1d54e19bdff078f95f7ebf9a9829 extends Template
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
        yield "Rapport Financier - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["company_name"] ?? null), "html", null, true);
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
    :root {
        --primary: #0463f1;
        --primary-dark: #0350c4;
        --success: #10b981;
        --danger: #ef4444;
        --warning: #f59e0b;
        --info: #0ea5e9;
        --purple: #8b5cf6;
        --dark: #1e293b;
    }

    .report-dashboard {
        background: #f1f5f9;
        min-height: 100vh;
    }

    .kpi-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.25rem;
        transition: all 0.3s ease;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    
    .kpi-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 25px -12px rgba(0,0,0,0.1);
    }
    
    .kpi-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
    }
    
    .kpi-card.primary::before { background: linear-gradient(90deg, var(--primary), var(--purple)); }
    .kpi-card.success::before { background: linear-gradient(90deg, var(--success), #34d399); }
    .kpi-card.warning::before { background: linear-gradient(90deg, var(--warning), #fbbf24); }
    .kpi-card.info::before { background: linear-gradient(90deg, var(--info), #38bdf8); }
    
    .kpi-icon {
        width: 48px;
        height: 48px;
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    
    .kpi-icon.primary { background: rgba(4, 99, 241, 0.1); color: var(--primary); }
    .kpi-icon.success { background: rgba(16, 185, 129, 0.1); color: var(--success); }
    .kpi-icon.warning { background: rgba(245, 158, 11, 0.1); color: var(--warning); }
    .kpi-icon.info { background: rgba(14, 165, 233, 0.1); color: var(--info); }
    
    .kpi-value {
        font-size: 1.75rem;
        font-weight: 800;
        line-height: 1.2;
        margin-top: 0.5rem;
    }
    
    .kpi-label {
        color: #64748b;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .kpi-trend {
        font-size: 0.7rem;
        margin-top: 0.5rem;
    }
    
    .kpi-trend.up { color: var(--success); }
    .kpi-trend.down { color: var(--danger); }

    .chart-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .chart-card:hover {
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
    }
    
    .chart-title {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 1.25rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 0.75rem;
    }
    
    .chart-title i {
        color: var(--primary);
        margin-right: 0.5rem;
    }
    
    .chart-container {
        position: relative;
        height: 280px;
    }

    .filters-section {
        background: white;
        border-radius: 1.5rem;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    
    .filter-group {
        margin-bottom: 0.75rem;
    }
    
    .filter-label {
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748b;
        margin-bottom: 0.4rem;
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }
    
    .data-table {
        width: 100%;
        font-size: 0.85rem;
    }
    
    .data-table th {
        background: #f8fafc;
        padding: 0.75rem;
        font-weight: 600;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .data-table td {
        padding: 0.6rem 0.75rem;
        border-bottom: 1px solid #f1f5f9;
    }
    
    .data-table tr:hover td {
        background: #f8fafc;
    }
    
    .badge-margin-high { background: #10b98120; color: #10b981; }
    .badge-margin-medium { background: #f59e0b20; color: #f59e0b; }
    .badge-margin-low { background: #ef444420; color: #ef4444; }
    
    .payment-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    .payment-badge.cash { background: #10b98120; color: #10b981; }
    .payment-badge.card { background: #8b5cf620; color: #8b5cf6; }
    .payment-badge.mobile_money { background: #f59e0b20; color: #f59e0b; }
    
    .progress-custom {
        height: 6px;
        background: #e5e7eb;
        border-radius: 3px;
        overflow: hidden;
    }
    
    .progress-bar-custom {
        height: 100%;
        border-radius: 3px;
        transition: width 0.5s ease;
    }
    
    .plan-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.6rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    .plan-badge.freemium { background: #64748b20; color: #64748b; }
    .plan-badge.basic { background: #0463f120; color: #0463f1; }
    .plan-badge.premium { background: #8b5cf620; color: #8b5cf6; }
    
    @media (max-width: 768px) {
        .kpi-value { font-size: 1.3rem; }
        .chart-container { height: 220px; }
        .kpi-card { padding: 1rem; }
        .data-table { font-size: 0.75rem; }
        .data-table th, .data-table td { padding: 0.4rem 0.5rem; }
    }
    
    @media print {
        .no-print, .filters-section, .action-buttons, .btn, nav {
            display: none !important;
        }
        .report-dashboard { background: white; }
        .kpi-card, .chart-card { box-shadow: none; border: 1px solid #e5e7eb; break-inside: avoid; }
        body { padding: 0; margin: 0; }
    }
    
    @keyframes spin { to { transform: rotate(360deg); } }
    .btn-loading { position: relative; pointer-events: none; opacity: 0.7; }
    .btn-loading::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 16px;
        height: 16px;
        margin: -8px 0 0 -8px;
        border: 2px solid rgba(255,255,255,0.3);
        border-top-color: white;
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
    }
</style>
";
        yield from [];
    }

    // line 251
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 252
        yield "<div class=\"report-dashboard py-3\">
    <div class=\"container-fluid px-3 px-md-4\">
        
        <!-- En-tête -->
        <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
            <div>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-1\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 261
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <i class=\"fas fa-chart-line me-1\"></i> Rapport Financier
                        </li>
                    </ol>
                </nav>
                <h1 class=\"h3 fw-bold mb-0\">
                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                    Rapport Financier
                </h1>
                <p class=\"text-muted small mb-0\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    ";
        // line 276
        if ((($tmp = ($context["is_restaurant"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 277
            yield "                        Analyse complète des performances financières de votre restaurant
                    ";
        } else {
            // line 279
            yield "                        Analyse complète des performances financières de votre commerce
                    ";
        }
        // line 281
        yield "                </p>
            </div>
            <div class=\"action-buttons d-flex gap-2\">
                <button class=\"btn btn-primary btn-sm\" onclick=\"applyFilters()\" id=\"applyBtn\">
                    <i class=\"fas fa-search me-1\"></i> Appliquer
                </button>
                <button class=\"btn btn-outline-secondary btn-sm\" onclick=\"refreshData()\" title=\"Actualiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </button>
                <button class=\"btn btn-outline-success btn-sm\" onclick=\"exportData()\" title=\"Exporter CSV\">
                    <i class=\"fas fa-download\"></i>
                </button>
                <button class=\"btn btn-outline-secondary btn-sm d-print-none\" onclick=\"window.print()\" title=\"Imprimer\">
                    <i class=\"fas fa-print\"></i>
                </button>
            </div>
        </div>

        <!-- Section Filtres -->
        <div class=\"filters-section\">
            <div class=\"row g-3 align-items-end\">
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-alt\"></i> Période prédéfinie
                        </label>
                        <select id=\"datePreset\" class=\"form-select form-select-sm\">
                            <option value=\"\">Personnalisée</option>
                            ";
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["date_presets"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 310
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_preset", [], "any", false, false, false, 310) == $context["key"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        yield "                        </select>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-day\"></i> Date du
                        </label>
                        <input type=\"date\" id=\"dateFrom\" class=\"form-control form-control-sm\" 
                               value=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 323), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-calendar-day\"></i> Date au
                        </label>
                        <input type=\"date\" id=\"dateTo\" class=\"form-control form-control-sm\" 
                               value=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 332), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">
                            <i class=\"fas fa-credit-card\"></i> Mode de paiement
                        </label>
                        <select id=\"paymentMethod\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"cash\">Espèces</option>
                            <option value=\"card\">Carte bancaire</option>
                            <option value=\"mobile_money\">Mobile Money</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div id=\"activeFilters\" class=\"d-flex gap-2 flex-wrap mt-3 pt-2 border-top\"></div>
        </div>

        <!-- Cartes KPI -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card primary\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-chart-line me-1\"></i> Chiffre d'affaires
                            </div>
                            <div class=\"kpi-value\" id=\"kpiRevenue\">
                                ";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "revenue", [], "any", true, true, false, 363)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "revenue", [], "any", false, false, false, 363), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up\" id=\"kpiRevenueTrend\">
                                <i class=\"fas fa-arrow-up me-1\"></i> vs période précédente
                            </div>
                        </div>
                        <div class=\"kpi-icon primary\">
                            <i class=\"fas fa-chart-line\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card success\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-chart-pie me-1\"></i> Marge brute
                            </div>
                            <div class=\"kpi-value\" id=\"kpiMargin\">
                                ";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "gross_margin", [], "any", true, true, false, 384)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "gross_margin", [], "any", false, false, false, 384), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                                <small class=\"fs-6\">";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield "</small>
                            </div>
                            <div class=\"kpi-trend up\">
                                (";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "gross_margin_percentage", [], "any", true, true, false, 388)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "gross_margin_percentage", [], "any", false, false, false, 388), 0)) : (0)), "html", null, true);
        yield "%)
                            </div>
                        </div>
                        <div class=\"kpi-icon success\">
                            <i class=\"fas fa-chart-pie\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card warning\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> Nombre de ventes
                            </div>
                            <div class=\"kpi-value\" id=\"kpiOrders\">
                                ";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "orders_count", [], "any", true, true, false, 406)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "orders_count", [], "any", false, false, false, 406), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up\">
                                commandes
                            </div>
                        </div>
                        <div class=\"kpi-icon warning\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"kpi-card info\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <div class=\"kpi-label\">
                                <i class=\"fas fa-wallet me-1\"></i> Panier moyen
                            </div>
                            <div class=\"kpi-value\" id=\"kpiAverageBasket\">
                                ";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "average_basket", [], "any", true, true, false, 427)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["indicators"] ?? null), "average_basket", [], "any", false, false, false, 427), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <div class=\"kpi-trend up\">
                                ";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield " par vente
                            </div>
                        </div>
                        <div class=\"kpi-icon info\">
                            <i class=\"fas fa-wallet\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques principaux -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-lg-8\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <div>
                            <i class=\"fas fa-chart-line\"></i>
                            Évolution du chiffre d'affaires
                        </div>
                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"changeChartType('revenue')\">CA</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"changeChartType('orders')\">Commandes</button>
                            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"changeChartType('basket')\">Panier</button>
                        </div>
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"timelineChart\"></canvas>
                    </div>
                </div>
            </div>
            
            <div class=\"col-lg-4\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-pie\"></i>
                        Répartition des paiements
                    </div>
                    <div class=\"chart-container\">
                        <canvas id=\"paymentChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top produits et marge par catégorie -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-trophy\"></i>
                        Top ";
        // line 481
        if ((($tmp = ($context["is_restaurant"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "recettes";
        } else {
            yield "produits";
        }
        // line 482
        yield "                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>";
        // line 488
        if ((($tmp = ($context["is_restaurant"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Recette";
        } else {
            yield "Produit";
        }
        yield "</th>
                                    <th class=\"text-end\">Quantité</th>
                                    <th class=\"text-end\">CA (";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield ")</th>
                                </thead>
                            </thead>
                            <tbody id=\"topItemsList\">
                                ";
        // line 494
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["top_items"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 495
            yield "                                    <tr>
                                        <td>";
            // line 496
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 496), "html", null, true);
            yield "</div>
                                        <td>
                                            ";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 498), "html", null, true);
            yield "
                                            ";
            // line 499
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe_name", [], "any", false, false, false, 499)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 500
                yield "                                                <small class=\"text-muted d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe_name", [], "any", false, false, false, 500), "html", null, true);
                yield "</small>
                                            ";
            }
            // line 502
            yield "                                         </div>
                                        <td class=\"text-end\">";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_quantity", [], "any", false, false, false, 503), 0, ",", " "), "html", null, true);
            yield "</div>
                                        <td class=\"text-end fw-semibold\">";
            // line 504
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_revenue", [], "any", false, false, false, 504), 0, ",", " "), "html", null, true);
            yield "</div>
                                    </tr>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 506
        if (!$context['_iterated']) {
            // line 507
            yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                                            Aucune donnée disponible
                                         </div>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class=\"col-lg-6\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-simple\"></i>
                        Marge par catégorie
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Catégorie</th>
                                    <th class=\"text-end\">CA (";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield ")</th>
                                    <th class=\"text-end\">Coût (";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield ")</th>
                                    <th class=\"text-end\">Marge</th>
                                    <th class=\"text-end\">%</th>
                                </tr>
                            </thead>
                            <tbody id=\"marginByCategoryList\">
                                ";
        // line 538
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["margin_by_category"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 539
            yield "                                    <td>
                                        <td>";
            // line 540
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 540), "html", null, true);
            yield "</div>
                                        <td class=\"text-end\">";
            // line 541
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "revenue", [], "any", false, false, false, 541), 0, ",", " "), "html", null, true);
            yield "</div>
                                        <td class=\"text-end text-muted\">";
            // line 542
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "cogs", [], "any", false, false, false, 542), 0, ",", " "), "html", null, true);
            yield "</div>
                                        <td class=\"text-end fw-semibold ";
            // line 543
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "margin", [], "any", false, false, false, 543) >= 0)) {
                yield "text-success";
            } else {
                yield "text-danger";
            }
            yield "\">
                                            ";
            // line 544
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "margin", [], "any", false, false, false, 544), 0, ",", " "), "html", null, true);
            yield "
                                         </div>
                                        <td class=\"text-end\">
                                            <span class=\"badge 
                                                ";
            // line 548
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "margin_percentage", [], "any", false, false, false, 548) >= 50)) {
                yield "badge-margin-high
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 549
$context["category"], "margin_percentage", [], "any", false, false, false, 549) >= 30)) {
                yield "badge-margin-medium
                                                ";
            } else {
                // line 550
                yield "badge-margin-low";
            }
            yield "\">
                                                ";
            // line 551
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "margin_percentage", [], "any", false, false, false, 551), "html", null, true);
            yield "%
                                            </span>
                                         </div>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 555
        if (!$context['_iterated']) {
            // line 556
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-chart-simple fa-2x mb-2 d-block\"></i>
                                            Aucune donnée disponible
                                         </div>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 563
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section RESTAURANT : Analyse des ventes par recette -->
        ";
        // line 571
        if ((($tmp = ($context["is_restaurant"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 572
            yield "        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-line\"></i>
                        Analyse des ventes par recette
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"text-center p-3\">
                                <div class=\"small text-muted\">Nombre total de recettes vendues</div>
                                <div class=\"h2 fw-bold text-primary\" id=\"totalRecipesSold\">
                                    ";
            // line 584
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe_sales_stats"] ?? null), "total_quantity", [], "any", true, true, false, 584)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe_sales_stats"] ?? null), "total_quantity", [], "any", false, false, false, 584), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </div>
                                <div class=\"small\">articles vendus</div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"text-center p-3\">
                                <div class=\"small text-muted\">Chiffre d'affaires généré par les recettes</div>
                                <div class=\"h2 fw-bold text-success\" id=\"totalRecipesRevenue\">
                                    ";
            // line 593
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe_sales_stats"] ?? null), "total_revenue", [], "any", true, true, false, 593)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe_sales_stats"] ?? null), "total_revenue", [], "any", false, false, false, 593), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </div>
                                <div class=\"small\">";
            // line 595
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
            yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"text-center p-3\">
                                <div class=\"small text-muted\">Recettes les plus populaires</div>
                                <div class=\"h2 fw-bold text-info\" id=\"topRecipesCount\">
                                    ";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe_sales_stats"] ?? null), "unique_recipes", [], "any", true, true, false, 602)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe_sales_stats"] ?? null), "unique_recipes", [], "any", false, false, false, 602), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield "
                                </div>
                                <div class=\"small\">recettes différentes</div>
                            </div>
                        </div>
                    </div>
                    
                    ";
            // line 609
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("recipe_sales", $context)) ? (Twig\Extension\CoreExtension::default(($context["recipe_sales"] ?? null), [])) : ([]))) > 0)) {
                // line 610
                yield "                    <hr>
                    <div class=\"mt-3\">
                        <strong class=\"small\">Classement des recettes :</strong>
                        <div class=\"table-responsive mt-2\">
                            <table class=\"data-table\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Recette</th>
                                        <th class=\"text-end\">Quantité vendue</th>
                                        <th class=\"text-end\">CA généré (";
                // line 620
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
                yield ")</th>
                                        <th class=\"text-end\">% du CA total</th>
                                    </tr>
                                </thead>
                                <tbody id=\"recipeSalesList\">
                                    ";
                // line 625
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["recipe_sales"] ?? null), 0, 10));
                $context['_iterated'] = false;
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                    // line 626
                    yield "                                        <tr>
                                            <td>";
                    // line 627
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 627), "html", null, true);
                    yield "</div>
                                            <td>
                                                <strong>";
                    // line 629
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 629), "html", null, true);
                    yield "</strong>
                                                ";
                    // line 630
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 630)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 631
                        yield "                                                    <br><small class=\"text-muted\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 631), "html", null, true);
                        yield "</small>
                                                ";
                    }
                    // line 633
                    yield "                                             </div>
                                            <td class=\"text-end\">";
                    // line 634
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "quantity", [], "any", false, false, false, 634), 0, ",", " "), "html", null, true);
                    yield "</div>
                                            <td class=\"text-end fw-semibold text-success\">";
                    // line 635
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "revenue", [], "any", false, false, false, 635), 0, ",", " "), "html", null, true);
                    yield "</div>
                                            <td class=\"text-end\">
                                                <div class=\"d-flex align-items-center justify-content-end gap-2\">
                                                    <span>";
                    // line 638
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "percentage", [], "any", false, false, false, 638), "html", null, true);
                    yield "%</span>
                                                    <div class=\"progress-custom\" style=\"width: 100px;\">
                                                        <div class=\"progress-bar-custom bg-success\" style=\"width: ";
                    // line 640
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "percentage", [], "any", false, false, false, 640), "html", null, true);
                    yield "%\"></div>
                                                    </div>
                                                </div>
                                             </div>
                                        </tr>
                                    ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                // line 645
                if (!$context['_iterated']) {
                    // line 646
                    yield "                                        <tr>
                                            <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                                <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                                                Aucune donnée de recette disponible pour cette période
                                            </div>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['recipe'], $context['_parent'], $context['_iterated'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 653
                yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                    ";
            } else {
                // line 658
                yield "                    <div class=\"text-center py-4 text-muted\">
                        <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                        Aucune vente de recette enregistrée sur cette période
                    </div>
                    ";
            }
            // line 663
            yield "                </div>
            </div>
        </div>
        ";
        }
        // line 667
        yield "
        <!-- Section ABONNEMENTS : Évolution des paiements -->
        <div class=\"row g-3 mb-4\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-chart-line\"></i>
                        Évolution des paiements d'abonnement
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"text-center p-3\">
                                <div class=\"small text-muted\">Total payé</div>
                                <div class=\"h2 fw-bold text-primary\" id=\"subscriptionTotal\">
                                    ";
        // line 681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_stats"] ?? null), "total_paid", [], "any", true, true, false, 681)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_stats"] ?? null), "total_paid", [], "any", false, false, false, 681), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                                </div>
                                <div class=\"small\">";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"text-center p-3\">
                                <div class=\"small text-muted\">Dernier paiement</div>
                                <div class=\"h2 fw-bold text-warning\" id=\"lastPayment\">
                                    ";
        // line 690
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_stats"] ?? null), "last_payment_date", [], "any", false, false, false, 690)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 691
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_stats"] ?? null), "last_payment_date", [], "any", false, false, false, 691), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 693
            yield "                                        -
                                    ";
        }
        // line 695
        yield "                                </div>
                                <div class=\"small\">
                                    ";
        // line 697
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_stats"] ?? null), "last_payment_amount", [], "any", false, false, false, 697)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 698
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_stats"] ?? null), "last_payment_amount", [], "any", false, false, false, 698), 0, ",", " "), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
            yield "
                                    ";
        }
        // line 700
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"text-center p-3\">
                                <div class=\"small text-muted\">Plan actuel</div>
                                <div class=\"h2 fw-bold text-info\" id=\"currentPlan\">
                                    ";
        // line 707
        if ((($tmp = ($context["current_plan"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 708
            yield "                                        <span class=\"plan-badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["current_plan"] ?? null)), "html", null, true);
            yield "\">
                                            ";
            // line 709
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ($context["current_plan"] ?? null)), "html", null, true);
            yield "
                                        </span>
                                    ";
        } else {
            // line 712
            yield "                                        -
                                    ";
        }
        // line 714
        yield "                                </div>
                                <div class=\"small\">
                                    ";
        // line 716
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_stats"] ?? null), "next_payment_date", [], "any", false, false, false, 716)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 717
            yield "                                        Prochain paiement: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_stats"] ?? null), "next_payment_date", [], "any", false, false, false, 717), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        }
        // line 719
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 724
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("subscription_payments", $context)) ? (Twig\Extension\CoreExtension::default(($context["subscription_payments"] ?? null), [])) : ([]))) > 0)) {
            // line 725
            yield "                    <hr>
                    <div class=\"mt-3\">
                        <div class=\"chart-container\" style=\"height: 300px;\">
                            <canvas id=\"subscriptionChart\"></canvas>
                        </div>
                    </div>
                    
                    <div class=\"mt-3\">
                        <strong class=\"small\">Historique des paiements :</strong>
                        <div class=\"table-responsive mt-2\">
                            <table class=\"data-table\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Montant</th>
                                        <th>Méthode</th>
                                        <th>Statut</th>
                                        <th>N° Abonnement</th>
                                    </tr>
                                </thead>
                                <tbody id=\"paymentHistoryList\">
                                    ";
            // line 746
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_payments"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 747
                yield "                                        <tr>
                                            <td>";
                // line 748
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 748), "d/m/Y"), "html", null, true);
                yield "</div>
                                            <td class=\"fw-semibold\">";
                // line 749
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 749), 0, ",", " "), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
                yield "</div>
                                            <td>
                                                <span class=\"payment-badge ";
                // line 751
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 751) == "cash")) ? ("cash") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 751) == "card")) ? ("card") : ("mobile_money"))));
                yield "\">
                                                    <i class=\"fas fa-";
                // line 752
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 752) == "cash")) {
                    yield "money-bill-wave";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 752) == "card")) {
                    yield "credit-card";
                } else {
                    yield "mobile-alt";
                }
                yield "\"></i>
                                                    ";
                // line 753
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 753), ["_" => " "])), "html", null, true);
                yield "
                                                </span>
                                            </div>
                                            <td>
                                                ";
                // line 757
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 757) == "paid")) {
                    // line 758
                    yield "                                                    <span class=\"badge bg-success\">Payé</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 759
$context["payment"], "status", [], "any", false, false, false, 759) == "pending")) {
                    // line 760
                    yield "                                                    <span class=\"badge bg-warning\">En attente</span>
                                                ";
                } else {
                    // line 762
                    yield "                                                    <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 762), "html", null, true);
                    yield "</span>
                                                ";
                }
                // line 764
                yield "                                            </div>
                                            <td><small>";
                // line 765
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscriptionNumber", [], "any", true, true, false, 765)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscriptionNumber", [], "any", false, false, false, 765), "-")) : ("-")), "html", null, true);
                yield "</small></div>
                                        </tr>
                                    ";
                $context['_iterated'] = true;
            }
            // line 767
            if (!$context['_iterated']) {
                // line 768
                yield "                                        <tr>
                                            <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                                <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                                                Aucun paiement d'abonnement enregistré
                                            </div>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 775
            yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                    ";
        }
        // line 780
        yield "                </div>
            </div>
        </div>

        <!-- Répartition des méthodes de paiement détaillée -->
        <div class=\"row g-3\">
            <div class=\"col-12\">
                <div class=\"chart-card\">
                    <div class=\"chart-title\">
                        <i class=\"fas fa-credit-card\"></i>
                        Détail des paiements (Ventes)
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Mode de paiement</th>
                                    <th class=\"text-end\">Nombre de transactions</th>
                                    <th class=\"text-end\">Pourcentage</th>
                                    <th class=\"text-end\">Montant total (";
        // line 799
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield ")</th>
                                </tr>
                            </thead>
                            <tbody id=\"paymentDetailsList\">
                                ";
        // line 803
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_distribution"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 804
            yield "                                    <tr>
                                        <td>
                                            <span class=\"payment-badge ";
            // line 806
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "method", [], "any", false, false, false, 806), "html", null, true);
            yield "\">
                                                <i class=\"fas fa-";
            // line 807
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "method", [], "any", false, false, false, 807) == "cash")) {
                yield "money-bill-wave";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "method", [], "any", false, false, false, 807) == "card")) {
                yield "credit-card";
            } else {
                yield "mobile-alt";
            }
            yield "\"></i>
                                                ";
            // line 808
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "label", [], "any", false, false, false, 808), "html", null, true);
            yield "
                                            </span>
                                         </div>
                                        <td class=\"text-end\">";
            // line 811
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "count", [], "any", false, false, false, 811), 0, ",", " "), "html", null, true);
            yield "</div>
                                        <td class=\"text-end\">
                                            <div class=\"d-flex align-items-center justify-content-end gap-2\">
                                                <span>";
            // line 814
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "percentage", [], "any", false, false, false, 814), "html", null, true);
            yield "%</span>
                                                <div class=\"progress-custom\" style=\"width: 80px;\">
                                                    <div class=\"progress-bar-custom bg-primary\" style=\"width: ";
            // line 816
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "percentage", [], "any", false, false, false, 816), "html", null, true);
            yield "%\"></div>
                                                </div>
                                            </div>
                                         </div>
                                        <td class=\"text-end fw-semibold\">";
            // line 820
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "total", [], "any", false, false, false, 820), 0, ",", " "), "html", null, true);
            yield "</div>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 822
        if (!$context['_iterated']) {
            // line 823
            yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                                            <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                                            Aucune donnée disponible
                                         </div>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 830
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
";
        yield from [];
    }

    // line 841
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 842
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
<script>
// Variables globales
let timelineChart = null;
let paymentChart = null;
let subscriptionChart = null;
let currentChartType = 'revenue';
let isLoading = false;

// Données initiales
let timelineData = ";
        // line 853
        yield json_encode(((array_key_exists("timeline", $context)) ? (Twig\Extension\CoreExtension::default(($context["timeline"] ?? null), [])) : ([])));
        yield ";
let paymentData = ";
        // line 854
        yield json_encode(((array_key_exists("payment_distribution", $context)) ? (Twig\Extension\CoreExtension::default(($context["payment_distribution"] ?? null), [])) : ([])));
        yield ";
let subscriptionData = ";
        // line 855
        yield json_encode(((array_key_exists("subscription_payments", $context)) ? (Twig\Extension\CoreExtension::default(($context["subscription_payments"] ?? null), [])) : ([])));
        yield ";

document.addEventListener('DOMContentLoaded', function() {
    if (timelineData.length > 0) {
        initCharts();
    }
    if (subscriptionData.length > 0) {
        initSubscriptionChart();
    }
    updateActiveFilters();
});

function initCharts() {
    initTimelineChart();
    if (paymentData.length > 0) {
        initPaymentChart();
    }
}

function initTimelineChart() {
    const ctx = document.getElementById('timelineChart').getContext('2d');
    
    let data = [];
    let label = '';
    let backgroundColor = '';
    let borderColor = '';
    
    if (currentChartType === 'revenue') {
        data = timelineData.map(d => d.revenue || 0);
        label = 'Chiffre d\\'affaires (";
        // line 884
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield ")';
        backgroundColor = 'rgba(4, 99, 241, 0.1)';
        borderColor = '#0463f1';
    } else if (currentChartType === 'orders') {
        data = timelineData.map(d => d.orders || 0);
        label = 'Nombre de commandes';
        backgroundColor = 'rgba(16, 185, 129, 0.1)';
        borderColor = '#10b981';
    } else {
        data = timelineData.map(d => d.average_basket || 0);
        label = 'Panier moyen (";
        // line 894
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield ")';
        backgroundColor = 'rgba(245, 158, 11, 0.1)';
        borderColor = '#f59e0b';
    }
    
    if (timelineChart) {
        timelineChart.destroy();
    }
    
    timelineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: timelineData.map(d => d.month || ''),
            datasets: [{
                label: label,
                data: data,
                borderColor: borderColor,
                backgroundColor: backgroundColor,
                borderWidth: 3,
                fill: true,
                tension: 0.4,
                pointRadius: 4,
                pointHoverRadius: 6,
                pointBackgroundColor: borderColor,
                pointBorderColor: 'white'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let value = context.raw;
                            if (currentChartType !== 'orders') {
                                return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(value) + ' ";
        // line 930
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield "';
                            }
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(value);
                        }
                    }
                },
                legend: { position: 'top' }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { display: true },
                    ticks: {
                        callback: function(value) {
                            if (currentChartType !== 'orders') {
                                return new Intl.NumberFormat('fr-FR').format(value) + ' ";
        // line 945
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield "';
                            }
                            return new Intl.NumberFormat('fr-FR').format(value);
                        }
                    }
                },
                x: { grid: { display: false } }
            }
        }
    });
}

function initPaymentChart() {
    const ctx = document.getElementById('paymentChart').getContext('2d');
    
    const labels = paymentData.map(p => p.label || '');
    const data = paymentData.map(p => p.total || 0);
    const backgroundColors = {
        'cash': '#10b981',
        'card': '#8b5cf6',
        'mobile_money': '#f59e0b'
    };
    
    if (paymentChart) {
        paymentChart.destroy();
    }
    
    paymentChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: paymentData.map(p => backgroundColors[p.method] || '#0463f1'),
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom' },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const value = context.raw;
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                            return context.label + ': ' + new Intl.NumberFormat('fr-FR').format(value) + ' ";
        // line 993
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield " (' + percentage + '%)';
                        }
                    }
                }
            }
        }
    });
}

function initSubscriptionChart() {
    const ctx = document.getElementById('subscriptionChart').getContext('2d');
    
    const paymentsByMonth = {};
    subscriptionData.forEach(payment => {
        const date = new Date(payment.paymentDate);
        const monthKey = `\${date.getFullYear()}-\${date.getMonth() + 1}`;
        const monthLabel = date.toLocaleDateString('fr-FR', { month: 'short', year: 'numeric' });
        
        if (!paymentsByMonth[monthKey]) {
            paymentsByMonth[monthKey] = { label: monthLabel, total: 0 };
        }
        paymentsByMonth[monthKey].total += payment.amount || 0;
    });
    
    const sortedMonths = Object.keys(paymentsByMonth).sort();
    const labels = sortedMonths.map(m => paymentsByMonth[m].label);
    const data = sortedMonths.map(m => paymentsByMonth[m].total);
    
    if (subscriptionChart) {
        subscriptionChart.destroy();
    }
    
    subscriptionChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Paiements d\\'abonnement (";
        // line 1030
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield ")',
                data: data,
                backgroundColor: 'rgba(139, 92, 246, 0.7)',
                borderColor: '#8b5cf6',
                borderWidth: 1,
                borderRadius: 8
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + new Intl.NumberFormat('fr-FR').format(context.raw) + ' ";
        // line 1045
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield "';
                        }
                    }
                },
                legend: { position: 'top' }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'Montant (";
        // line 1054
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield ")' },
                    ticks: {
                        callback: function(value) {
                            return new Intl.NumberFormat('fr-FR').format(value) + ' ";
        // line 1057
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield "';
                        }
                    }
                },
                x: { title: { display: true, text: 'Mois' } }
            }
        }
    });
}

async function applyFilters() {
    if (isLoading) return;
    isLoading = true;
    
    const applyBtn = document.getElementById('applyBtn');
    if (applyBtn) applyBtn.classList.add('btn-loading');
    
    const params = new URLSearchParams();
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const paymentMethod = document.getElementById('paymentMethod')?.value;
    
    if (datePreset) params.append('date_preset', datePreset);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    if (paymentMethod) params.append('payment_method', paymentMethod);
    
    try {
        const response = await fetch(`/reports/financial/data?\${params.toString()}`);
        if (!response.ok) throw new Error('Erreur réseau');
        const data = await response.json();
        updateDashboard(data);
        updateActiveFilters();
        showNotification('Données mises à jour avec succès', 'success');
    } catch (error) {
        console.error('Erreur:', error);
        showNotification('Erreur lors du chargement des données', 'error');
    } finally {
        if (applyBtn) applyBtn.classList.remove('btn-loading');
        isLoading = false;
    }
}

function updateDashboard(data) {
    if (data.indicators) {
        const kpiRevenue = document.getElementById('kpiRevenue');
        if (kpiRevenue) kpiRevenue.textContent = new Intl.NumberFormat('fr-FR').format(data.indicators.revenue || 0);
        
        const kpiMargin = document.getElementById('kpiMargin');
        if (kpiMargin) kpiMargin.innerHTML = new Intl.NumberFormat('fr-FR').format(data.indicators.gross_margin || 0) + 
            ' <small class=\"fs-6\">";
        // line 1108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield "</small>';
        
        const kpiOrders = document.getElementById('kpiOrders');
        if (kpiOrders) kpiOrders.textContent = new Intl.NumberFormat('fr-FR').format(data.indicators.orders_count || 0);
        
        const kpiAverageBasket = document.getElementById('kpiAverageBasket');
        if (kpiAverageBasket) kpiAverageBasket.textContent = new Intl.NumberFormat('fr-FR').format(data.indicators.average_basket || 0);
    }
    
    if (data.cogs && document.getElementById('cogsTotal')) {
        document.getElementById('cogsTotal').textContent = new Intl.NumberFormat('fr-FR').format(data.cogs.total || 0);
    }
    
    if (data.timeline && data.timeline.length > 0) {
        timelineData = data.timeline;
        initTimelineChart();
    }
    
    if (data.payment_distribution && data.payment_distribution.length > 0) {
        paymentData = data.payment_distribution;
        initPaymentChart();
        updatePaymentDetails(data.payment_distribution);
    } else if (data.payment_distribution && data.payment_distribution.length === 0) {
        updatePaymentDetails([]);
    }
    
    if (data.top_items) {
        updateTopItems(data.top_items);
    }
    
    if (data.margin_by_category) {
        updateMarginByCategory(data.margin_by_category);
    } else {
        updateMarginByCategory([]);
    }
    
    if (data.subscription_payments) {
        subscriptionData = data.subscription_payments;
        if (subscriptionData.length > 0) {
            initSubscriptionChart();
            updatePaymentHistory(subscriptionData);
        }
    }
    
    if (data.subscription_stats) {
        updateSubscriptionStats(data.subscription_stats);
    }
    
    // Mise à jour des données des recettes (pour restaurants)
    if (data.recipe_sales) {
        updateRecipeSales(data.recipe_sales);
    }
    
    if (data.recipe_sales_stats) {
        updateRecipeSalesStats(data.recipe_sales_stats);
    }
}

function updateTopItems(items) {
    const container = document.getElementById('topItemsList');
    if (!container) return;
    
    if (!items || items.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = items.map((item, index) => `
        <tr>
            <td>\${index + 1}</div>
            <td>
                \${escapeHtml(item.name || '')}
                \${item.recipe_name ? `<small class=\"text-muted d-block\">\${escapeHtml(item.recipe_name)}</small>` : ''}
             </div>
            <td class=\"text-end\">\${new Intl.NumberFormat('fr-FR').format(item.total_quantity || 0)}</div>
            <td class=\"text-end fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(item.total_revenue || 0)}</div>
         </>
    `).join('');
}

function updateMarginByCategory(categories) {
    const container = document.getElementById('marginByCategoryList');
    if (!container) return;
    
    if (!categories || categories.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-simple fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = categories.map(category => `
        <tr>
            <td>\${escapeHtml(category.category || 'Sans catégorie')}</div>
            <td class=\"text-end\">\${new Intl.NumberFormat('fr-FR').format(category.revenue || 0)}</div>
            <td class=\"text-end text-muted\">\${new Intl.NumberFormat('fr-FR').format(category.cogs || 0)}</div>
            <td class=\"text-end fw-semibold \${(category.margin || 0) >= 0 ? 'text-success' : 'text-danger'}\">
                \${new Intl.NumberFormat('fr-FR').format(category.margin || 0)}
             </div>
            <td class=\"text-end\">
                <span class=\"badge 
                    \${(category.margin_percentage || 0) >= 50 ? 'badge-margin-high'
                    : (category.margin_percentage || 0) >= 30 ? 'badge-margin-medium'
                    : 'badge-margin-low'}\">
                    \${category.margin_percentage || 0}%
                </span>
             </div>
         </>
    `).join('');
}

function updatePaymentDetails(payments) {
    const container = document.getElementById('paymentDetailsList');
    if (!container) return;
    
    if (!payments || payments.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"4\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                    Aucune donnée disponible
                 </div>
             </>
        `;
        return;
    }
    
    const icons = {
        'cash': 'money-bill-wave',
        'card': 'credit-card',
        'mobile_money': 'mobile-alt'
    };
    
    container.innerHTML = payments.map(payment => `
        <tr>
            <td>
                <span class=\"payment-badge \${payment.method || ''}\">
                    <i class=\"fas fa-\${icons[payment.method] || 'credit-card'}\"></i>
                    \${payment.label || payment.method || ''}
                </span>
             </div>
            <td class=\"text-end\">\${new Intl.NumberFormat('fr-FR').format(payment.count || 0)}</div>
            <td class=\"text-end\">
                <div class=\"d-flex align-items-center justify-content-end gap-2\">
                    <span>\${payment.percentage || 0}%</span>
                    <div class=\"progress-custom\" style=\"width: 80px;\">
                        <div class=\"progress-bar-custom bg-primary\" style=\"width: \${payment.percentage || 0}%\"></div>
                    </div>
                </div>
             </div>
            <td class=\"text-end fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(payment.total || 0)}</div>
         </>
    `).join('');
}

function updateSubscriptionStats(stats) {
    if (!stats) return;
    
    const totalPaid = document.getElementById('subscriptionTotal');
    if (totalPaid) totalPaid.textContent = new Intl.NumberFormat('fr-FR').format(stats.total_paid || 0);
    
    const lastPayment = document.getElementById('lastPayment');
    if (lastPayment && stats.last_payment_date) {
        lastPayment.textContent = new Date(stats.last_payment_date).toLocaleDateString('fr-FR');
    }
}

function updatePaymentHistory(payments) {
    const container = document.getElementById('paymentHistoryList');
    if (!container) return;
    
    if (!payments || payments.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-credit-card fa-2x mb-2 d-block\"></i>
                    Aucun paiement d'abonnement enregistré
                 </div>
             </>
        `;
        return;
    }
    
    const methodIcons = {
        'cash': 'money-bill-wave',
        'card': 'credit-card',
        'mobile_money': 'mobile-alt'
    };
    
    container.innerHTML = payments.map(payment => `
        <tr>
            <td>\${new Date(payment.paymentDate).toLocaleDateString('fr-FR')}</div>
            <td class=\"fw-semibold\">\${new Intl.NumberFormat('fr-FR').format(payment.amount || 0)} ";
        // line 1312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield "</div>
            <td>
                <span class=\"payment-badge \${payment.paymentMethod || ''}\">
                    <i class=\"fas fa-\${methodIcons[payment.paymentMethod] || 'credit-card'}\"></i>
                    \${(payment.paymentMethod || '').replace('_', ' ').toUpperCase()}
                </span>
             </div>
            <td>
                \${payment.status === 'paid' ? '<span class=\"badge bg-success\">Payé</span>' : 
                  payment.status === 'pending' ? '<span class=\"badge bg-warning\">En attente</span>' : 
                  '<span class=\"badge bg-secondary\">' + (payment.status || 'Inconnu') + '</span>'}
             </div>
            <td><small>\${payment.subscriptionNumber || '-'}</small></div>
         </>
    `).join('');
}

function updateRecipeSales(recipes) {
    const container = document.getElementById('recipeSalesList');
    if (!container) return;
    
    if (!recipes || recipes.length === 0) {
        container.innerHTML = `
            <tr>
                <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                    <i class=\"fas fa-chart-line fa-2x mb-2 d-block\"></i>
                    Aucune donnée de recette disponible
                 </div>
             </>
        `;
        return;
    }
    
    container.innerHTML = recipes.map((recipe, index) => `
        <tr>
            <td>\${index + 1}</div>
            <td>
                <strong>\${escapeHtml(recipe.name)}</strong>
                \${recipe.category ? `<br><small class=\"text-muted\">\${escapeHtml(recipe.category)}</small>` : ''}
             </div>
            <td class=\"text-end\">\${new Intl.NumberFormat('fr-FR').format(recipe.quantity || 0)}</div>
            <td class=\"text-end fw-semibold text-success\">\${new Intl.NumberFormat('fr-FR').format(recipe.revenue || 0)}</div>
            <td class=\"text-end\">
                <div class=\"d-flex align-items-center justify-content-end gap-2\">
                    <span>\${recipe.percentage || 0}%</span>
                    <div class=\"progress-custom\" style=\"width: 100px;\">
                        <div class=\"progress-bar-custom bg-success\" style=\"width: \${recipe.percentage || 0}%\"></div>
                    </div>
                </div>
             </div>
         </>
    `).join('');
}

function updateRecipeSalesStats(stats) {
    if (!stats) return;
    
    const totalQuantity = document.getElementById('totalRecipesSold');
    if (totalQuantity) totalQuantity.textContent = new Intl.NumberFormat('fr-FR').format(stats.total_quantity || 0);
    
    const totalRevenue = document.getElementById('totalRecipesRevenue');
    if (totalRevenue) totalRevenue.textContent = new Intl.NumberFormat('fr-FR').format(stats.total_revenue || 0);
    
    const uniqueRecipes = document.getElementById('topRecipesCount');
    if (uniqueRecipes) uniqueRecipes.textContent = new Intl.NumberFormat('fr-FR').format(stats.unique_recipes || 0);
}

function updateActiveFilters() {
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const paymentMethod = document.getElementById('paymentMethod')?.value;
    
    const container = document.getElementById('activeFilters');
    if (!container) return;
    
    const activeFilters = [];
    
    if (datePreset) {
        const presetSelect = document.getElementById('datePreset');
        const selectedOption = presetSelect?.options[presetSelect.selectedIndex];
        const presetLabel = selectedOption?.text || datePreset;
        activeFilters.push({ key: 'date', label: `Période: \${presetLabel}` });
    } else if (dateFrom || dateTo) {
        activeFilters.push({ key: 'date', label: `Du \${dateFrom || '...'} au \${dateTo || '...'}` });
    }
    
    if (paymentMethod) {
        const labels = { cash: 'Espèces', card: 'Carte bancaire', mobile_money: 'Mobile Money' };
        activeFilters.push({ key: 'payment', label: `Paiement: \${labels[paymentMethod] || paymentMethod}` });
    }
    
    if (activeFilters.length === 0) {
        container.innerHTML = '';
        return;
    }
    
    container.innerHTML = activeFilters.map(filter => `
        <span class=\"badge bg-secondary d-inline-flex align-items-center gap-2 py-2 px-3\" style=\"cursor: pointer;\" onclick=\"removeFilter('\${filter.key}')\">
            <i class=\"fas fa-filter\"></i>
            \${filter.label}
            <i class=\"fas fa-times ms-1\"></i>
        </span>
    `).join('');
}

function removeFilter(key) {
    if (key === 'date') {
        const datePreset = document.getElementById('datePreset');
        const dateFrom = document.getElementById('dateFrom');
        const dateTo = document.getElementById('dateTo');
        if (datePreset) datePreset.value = '';
        if (dateFrom) dateFrom.value = '';
        if (dateTo) dateTo.value = '';
        if (dateFrom) dateFrom.disabled = false;
        if (dateTo) dateTo.disabled = false;
    } else if (key === 'payment') {
        const paymentMethod = document.getElementById('paymentMethod');
        if (paymentMethod) paymentMethod.value = '';
    }
    applyFilters();
}

function changeChartType(type) {
    currentChartType = type;
    if (timelineData.length > 0) {
        initTimelineChart();
    }
}

function refreshData() {
    applyFilters();
}

function exportData() {
    const params = new URLSearchParams();
    const datePreset = document.getElementById('datePreset')?.value;
    const dateFrom = document.getElementById('dateFrom')?.value;
    const dateTo = document.getElementById('dateTo')?.value;
    const paymentMethod = document.getElementById('paymentMethod')?.value;
    
    if (datePreset) params.append('date_preset', datePreset);
    if (dateFrom) params.append('date_from', dateFrom);
    if (dateTo) params.append('date_to', dateTo);
    if (paymentMethod) params.append('payment_method', paymentMethod);
    
    window.location.href = `/reports/financial/export?\${params.toString()}`;
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `position-fixed bottom-0 end-0 p-3 m-3 bg-\${type === 'error' ? 'danger' : 'success'} text-white rounded shadow`;
    notification.style.zIndex = '9999';
    notification.innerHTML = `<i class=\"fas fa-\${type === 'error' ? 'exclamation-circle' : 'check-circle'} me-2\"></i>\${message}`;
    document.body.appendChild(notification);
    setTimeout(() => notification.remove(), 3000);
}

function escapeHtml(str) {
    if (!str) return '';
    return str.replace(/[&<>]/g, function(m) {
        if (m === '&') return '&amp;';
        if (m === '<') return '&lt;';
        if (m === '>') return '&gt;';
        return m;
    });
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reports/financial/index.html.twig";
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
        return array (  1858 => 1312,  1651 => 1108,  1597 => 1057,  1591 => 1054,  1579 => 1045,  1561 => 1030,  1521 => 993,  1470 => 945,  1452 => 930,  1413 => 894,  1400 => 884,  1368 => 855,  1364 => 854,  1360 => 853,  1346 => 842,  1339 => 841,  1325 => 830,  1313 => 823,  1311 => 822,  1304 => 820,  1297 => 816,  1292 => 814,  1286 => 811,  1280 => 808,  1270 => 807,  1266 => 806,  1262 => 804,  1257 => 803,  1250 => 799,  1229 => 780,  1222 => 775,  1210 => 768,  1208 => 767,  1201 => 765,  1198 => 764,  1192 => 762,  1188 => 760,  1186 => 759,  1183 => 758,  1181 => 757,  1174 => 753,  1164 => 752,  1160 => 751,  1153 => 749,  1149 => 748,  1146 => 747,  1141 => 746,  1118 => 725,  1116 => 724,  1109 => 719,  1103 => 717,  1101 => 716,  1097 => 714,  1093 => 712,  1087 => 709,  1082 => 708,  1080 => 707,  1071 => 700,  1063 => 698,  1061 => 697,  1057 => 695,  1053 => 693,  1047 => 691,  1045 => 690,  1035 => 683,  1030 => 681,  1014 => 667,  1008 => 663,  1001 => 658,  994 => 653,  982 => 646,  980 => 645,  962 => 640,  957 => 638,  951 => 635,  947 => 634,  944 => 633,  938 => 631,  936 => 630,  932 => 629,  927 => 627,  924 => 626,  906 => 625,  898 => 620,  886 => 610,  884 => 609,  874 => 602,  864 => 595,  859 => 593,  847 => 584,  833 => 572,  831 => 571,  821 => 563,  809 => 556,  807 => 555,  798 => 551,  793 => 550,  788 => 549,  784 => 548,  777 => 544,  769 => 543,  765 => 542,  761 => 541,  757 => 540,  754 => 539,  749 => 538,  740 => 532,  736 => 531,  717 => 514,  705 => 507,  703 => 506,  688 => 504,  684 => 503,  681 => 502,  675 => 500,  673 => 499,  669 => 498,  664 => 496,  661 => 495,  643 => 494,  636 => 490,  627 => 488,  619 => 482,  613 => 481,  559 => 430,  553 => 427,  529 => 406,  508 => 388,  502 => 385,  498 => 384,  474 => 363,  440 => 332,  428 => 323,  417 => 314,  408 => 311,  401 => 310,  397 => 309,  367 => 281,  363 => 279,  359 => 277,  357 => 276,  339 => 261,  328 => 252,  321 => 251,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reports/financial/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reports\\financial\\index.html.twig");
    }
}
